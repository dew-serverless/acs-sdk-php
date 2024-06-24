<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'LinkWAN',
    'version' => '2019-03-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 74414,
      'title' => '网关',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGateway',
        1 => 'DeleteGateway',
        2 => 'UpdateGateway',
        3 => 'CountGateways',
        4 => 'GetGateway',
        5 => 'GetGatewayStatusStat',
        6 => 'ListGateways',
      ),
    ),
    1 => 
    array (
      'id' => 74422,
      'title' => '节点分组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateNodeGroup',
        1 => 'DeleteNodeGroup',
        2 => 'UpdateNodeGroup',
        3 => 'CountNodeGroups',
        4 => 'GetNodeGroup',
        5 => 'ListNodeGroups',
      ),
    ),
    2 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AcceptJoinPermissionAuthOrder',
        1 => 'AddNodeToGroup',
        2 => 'BindJoinPermissionToNodeGroup',
        3 => 'ApplyRoamingJoinPermission',
        4 => 'CancelJoinPermissionAuthOrder',
        5 => 'CheckCloudProductOpenStatus',
        6 => 'CheckUserChargeStatus',
        7 => 'CountGatewayTupleOrders',
        8 => 'CountNodeTupleOrders',
        9 => 'CountNodesByNodeGroupId',
        10 => 'CountNodesByOwnedJoinPermissionId',
        11 => 'CountNotifications',
        12 => 'CountOwnedJoinPermissions',
        13 => 'CountRentedJoinPermissions',
        14 => 'CreateLocalJoinPermission',
        15 => 'DeleteLocalJoinPermission',
        16 => 'GetFreqBandPlanGroup',
        17 => 'GetGatewayPacketStat',
        18 => 'GetGatewayTransferPacketsDownloadUrl',
        19 => 'GetGatewayTupleOrder',
        20 => 'GetGatewayTuplesDownloadUrl',
        21 => 'GetJoinPermissionAuthOrder',
        22 => 'GetNode',
        23 => 'GetNodeGroupTransferPacketsDownloadUrl',
        24 => 'GetNodeTransferPacket',
        25 => 'GetNodeTransferPacketsDownloadUrl',
        26 => 'GetNodeTupleOrder',
        27 => 'GetNodeTuplesDownloadUrl',
        28 => 'GetNotification',
        29 => 'GetOwnedJoinPermission',
        30 => 'GetRentedJoinPermission',
        31 => 'GetUserLicense',
        32 => 'ListActivatedFeatures',
        33 => 'ListActiveGateways',
        34 => 'ListFreqBandPlanGroups',
        35 => 'ListGatewayOnlineRecords',
        36 => 'ListGatewayTransferFlowStats',
        37 => 'ListGatewayTransferPackets',
        38 => 'ListGatewayTupleOrders',
        39 => 'ListGatewaysGisInfo',
        40 => 'ListNodeGroupTransferFlowStats',
        41 => 'ListNodeGroupTransferPackets',
        42 => 'ListNodeTransferPacketPaths',
        43 => 'ListNodeTransferPackets',
        44 => 'ListNodeTupleOrders',
        45 => 'ListNodesByNodeGroupId',
        46 => 'ListNodesByOwnedJoinPermissionId',
        47 => 'ListNotifications',
        48 => 'ListOwnedJoinPermissions',
        49 => 'ListRentedJoinPermissions',
        50 => 'RejectJoinPermissionAuthOrder',
        51 => 'RemoveNodeFromGroup',
        52 => 'ReturnJoinPermission',
        53 => 'SendUnicastCommand',
        54 => 'SubmitGatewayTupleOrder',
        55 => 'SubmitJoinPermissionAuthOrder',
        56 => 'SubmitNodeTupleOrder',
        57 => 'UnbindJoinPermissionFromNodeGroup',
        58 => 'UpdateDataDispatchConfig',
        59 => 'UpdateDataDispatchEnablingState',
        60 => 'UpdateGatewayEnablingState',
        61 => 'UpdateNotificationsHandleState',
        62 => 'UpdateOwnedLocalJoinPermission',
        63 => 'UpdateOwnedLocalJoinPermissionEnablingState',
        64 => 'UpdateRoamingJoinPermission',
        65 => 'UpdateRoamingJoinPermissionEnablingState',
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
    'CreateGateway' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。

><notice>
- 若有ID值，必须传入该ID值，否则调用会失败。
- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。

></notice>

实例的更多信息，请参见[实例概述](~~356505~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-***-v6***',
          ),
        ),
        1 => 
        array (
          'name' => 'GwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => '0000000000000000',
          ),
        ),
        2 => 
        array (
          'name' => 'PinCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关PinCode，用于确保录入者拥有该网关。',
            'type' => 'string',
            'required' => true,
            'example' => '000000',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义网关名称。

- 仅支持中文汉字、英文字母、数字、下划线（_）。

- 必须以中文汉字、英文字母或数字开头。

- 长度不超过30个字符，不少于4个字符（一个中文汉字算一个字符）。',
            'type' => 'string',
            'required' => true,
            'example' => 'vmee',
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义网关描述信息，长度不超过100个字符（一个中文汉字算一个字符）。',
            'type' => 'string',
            'required' => false,
            'example' => 'my gateway',
          ),
        ),
        5 => 
        array (
          'name' => 'FreqBandPlanGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关频段ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123',
          ),
        ),
        6 => 
        array (
          'name' => 'CommunicationMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关通信模式。取值：

- FULL_DUPLEX：全双工。

- HALF_DUPLEX：半双工。',
            'type' => 'string',
            'required' => true,
            'example' => 'HALF_DUPLEX',
            'enum' => 
            array (
              0 => 'HALF_DUPLEX',
              1 => 'FULL_DUPLEX',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'City',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关所在城市名称。',
            'type' => 'string',
            'required' => true,
            'example' => '杭州',
          ),
        ),
        8 => 
        array (
          'name' => 'District',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关所在城区名称。',
            'type' => 'string',
            'required' => true,
            'example' => '滨江区',
          ),
        ),
        9 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关所在详细地址。',
            'type' => 'string',
            'required' => true,
            'example' => '详细地址',
          ),
        ),
        10 => 
        array (
          'name' => 'GisCoordinateSystem',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关经纬度所采用的坐标系统，可取值为**WGS_84**, **GCJ_02**。',
            'type' => 'string',
            'required' => true,
            'example' => 'GCJ_02',
            'enum' => 
            array (
              0 => 'WGS_84',
              1 => 'GCJ_02',
            ),
          ),
        ),
        11 => 
        array (
          'name' => 'Longitude',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关经度。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'example' => '123.45678',
          ),
        ),
        12 => 
        array (
          'name' => 'Latitude',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关纬度。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'example' => '23.45678',
          ),
        ),
        13 => 
        array (
          'name' => 'AddressCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关所在地区ID，由`http://lbs.amap.com/api/javascript-api/download`定义。',
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'GwEuiDuplicated',
            'errorMessage' => 'A gateway with the same gwEui already exists.',
          ),
          3 => 
          array (
            'errorCode' => 'GatewayTupleAlreadyAbandoned',
            'errorMessage' => 'The specified gateway tuple has been abandoned.',
          ),
          4 => 
          array (
            'errorCode' => 'IotHubTripleMissing',
            'errorMessage' => 'The IoT Platform trituple of this gateway does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidPinCode',
            'errorMessage' => 'An error occurred while verifying PinCode.',
          ),
          6 => 
          array (
            'errorCode' => 'GatewayAlreadyBoundToOthers',
            'errorMessage' => 'This gateway has already been bound to another account.',
          ),
          7 => 
          array (
            'errorCode' => 'ExceedGatewayLimit',
            'errorMessage' => 'The maximum number of gateways is exceeded.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidFreqBandPlan',
            'errorMessage' => 'The frequency band plan is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidName',
            'errorMessage' => 'The specified name is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'GatewayInstanceInvalid',
            'errorMessage' => 'The instance ID is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'GatewayDistributeFail',
            'errorMessage' => 'Failed to distribute the gateway tuple.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateGatewayResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CreateGatewayResponse>","errorExample":""}]',
      'title' => '录入网关',
      'summary' => '调用CreateGateway录入网关。',
    ),
    'DeleteGateway' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'example' => 'iot-060a09b1',
          ),
        ),
        1 => 
        array (
          'name' => 'GwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => '0000000000000000',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'GatewayDistributeFail',
            'errorMessage' => 'Failed to distribute the gateway tuple.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteGatewayResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</DeleteGatewayResponse>","errorExample":""}]',
      'title' => 'DeleteGateway',
      'summary' => '调用DeleteGateway删除已录入的网关。',
    ),
    'UpdateGateway' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'GwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0000000000000000',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义网关名称。',
            'type' => 'string',
            'required' => false,
            'example' => '网关名称',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义网关描述。',
            'type' => 'string',
            'required' => false,
            'example' => '网关描述',
          ),
        ),
        4 => 
        array (
          'name' => 'FreqBandPlanGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关频段ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        5 => 
        array (
          'name' => 'CommunicationMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关通信模式。可取值为FULL_DUPLEX(全双工）、HALF_DUPLEX(半双工)。',
            'type' => 'string',
            'required' => false,
            'example' => 'HALF_DUPLEX',
            'enum' => 
            array (
              0 => 'HALF_DUPLEX',
              1 => 'FULL_DUPLEX',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'AddressCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关所在地区ID，由`http://lbs.amap.com/api/javascript-api/download`定义。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        7 => 
        array (
          'name' => 'City',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关所在城市名称。',
            'type' => 'string',
            'required' => false,
            'example' => '某某市',
          ),
        ),
        8 => 
        array (
          'name' => 'District',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关所在城区名称。',
            'type' => 'string',
            'required' => false,
            'example' => '某某区',
          ),
        ),
        9 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关所在详细地址。',
            'type' => 'string',
            'required' => false,
            'example' => '详细地址',
          ),
        ),
        10 => 
        array (
          'name' => 'GisCoordinateSystem',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关经纬度所采用的坐标系统，可取值为**WGS_84**, **GCJ_02**。',
            'type' => 'string',
            'required' => false,
            'example' => 'GCJ_02',
            'enum' => 
            array (
              0 => 'GCJ_02',
              1 => 'WGS_84',
            ),
          ),
        ),
        11 => 
        array (
          'name' => 'Longitude',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关经度。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '123.45678',
          ),
        ),
        12 => 
        array (
          'name' => 'Latitude',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关纬度。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '23.45678',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidName',
            'errorMessage' => 'The specified name is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateGatewayResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateGatewayResponse>","errorExample":""}]',
      'title' => '更新网关信息',
      'summary' => '调用UpdateGateway更新网关信息。',
    ),
    'CountGateways' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'OnlineState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关在离线状态过滤。

若未传入此参数，则不限制在线状态。可取值为**ONLINE**和**OFFLINE**。',
            'type' => 'string',
            'required' => false,
            'example' => 'ONLINE',
            'enum' => 
            array (
              0 => 'ONLINE',
              1 => 'OFFLINE',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'FuzzyGwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'GwEUI模糊过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        3 => 
        array (
          'name' => 'FuzzyCity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '城市名模糊过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '杭州',
          ),
        ),
        4 => 
        array (
          'name' => 'FuzzyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关名称模糊过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'name',
          ),
        ),
        5 => 
        array (
          'name' => 'FreqBandPlanGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关频段ID过滤。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        6 => 
        array (
          'name' => 'IsEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关启停用状态过滤。

若未传入此参数，则不限制启停状态。',
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
              'Data' => 
              array (
                'description' => '满足过滤条件的网关总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 100,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CountGatewaysResponse>\\r\\n      <Data>100</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CountGatewaysResponse>","errorExample":""}]',
      'title' => '统计网关数量',
      'summary' => '统计当前用户账号名下符合过滤条件的网关数量。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetGateway' => 
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
      'operationType' => 'read',
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
            'example' => 'iot-060a09b1',
          ),
        ),
        1 => 
        array (
          'name' => 'GwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => '0000000000000000',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '网关信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ChargeStatus' => 
                  array (
                    'description' => '网关欠费状态。

- NORMAL：网关未欠费，正常工作。
- ARREARAGE：网关欠费。',
                    'type' => 'string',
                    'example' => 'NORMAL',
                  ),
                  'ClassBSupported' => 
                  array (
                    'description' => '该网关是否支持Class B模式。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'FreqBandPlanGroupId' => 
                  array (
                    'description' => '网关频段ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'District' => 
                  array (
                    'description' => '网关所在城区名称。',
                    'type' => 'string',
                    'example' => '某某区',
                  ),
                  'GisCoordinateSystem' => 
                  array (
                    'description' => '网关经纬度所采用的坐标系统，可取值：**WGS_84**, **GCJ_02**。',
                    'type' => 'string',
                    'example' => 'GCJ_02',
                  ),
                  'City' => 
                  array (
                    'description' => '网关所在城市名称。',
                    'type' => 'string',
                    'example' => '某某市',
                  ),
                  'TimeCorrectable' => 
                  array (
                    'description' => '该网关是否可以作为时间校准网关。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'OnlineState' => 
                  array (
                    'description' => '网关的在线、离线状态。

- **ONLINE**：在线。

- **OFFLINE**：离线。',
                    'type' => 'string',
                    'example' => 'ONLINE',
                  ),
                  'AuthTypes' => 
                  array (
                    'description' => '网关合约类型。

- **HYBRID**：hybrid网关。
- **SINGLE_CHANNEL**：单通道网关。
- **STANDARD**：标准合约网关。',
                    'type' => 'string',
                    'example' => 'STANDARD',
                  ),
                  'OnlineStateChangedMillis' => 
                  array (
                    'description' => '最近一次在线、离线状态的变更时间。

格式为UNIX时间戳，以毫秒为单位。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000000',
                  ),
                  'CommunicationMode' => 
                  array (
                    'description' => '网关通信模式。可取值为：

- FULL_DUPLEX：全双工。

- HALF_DUPLEX：半双工。',
                    'type' => 'string',
                    'example' => 'HALF_DUPLEX',
                  ),
                  'Description' => 
                  array (
                    'description' => '自定义网关描述。',
                    'type' => 'string',
                    'example' => '网关描述',
                  ),
                  'Enabled' => 
                  array (
                    'description' => '该网关是否处于启用状态。

- true：启用状态。

- false：停用状态。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ClassBWorking' => 
                  array (
                    'description' => '该网关是否正工作在Class B模式下。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Address' => 
                  array (
                    'description' => '网关所在详细地址。',
                    'type' => 'string',
                    'example' => '详细地址',
                  ),
                  'Longitude' => 
                  array (
                    'description' => '网关经度。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '123.45678',
                  ),
                  'EmbeddedNsId' => 
                  array (
                    'description' => 'Hybrid网关id。
',
                    'type' => 'string',
                    'example' => '123',
                  ),
                  'Latitude' => 
                  array (
                    'description' => '网关纬度。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '23.45678',
                  ),
                  'Name' => 
                  array (
                    'description' => '自定义网关名称。',
                    'type' => 'string',
                    'example' => '网关名称',
                  ),
                  'GwEui' => 
                  array (
                    'description' => '网关唯一标识。',
                    'type' => 'string',
                    'example' => '0000000000000000',
                  ),
                  'AddressCode' => 
                  array (
                    'description' => '网关所在地区ID，由`http://lbs.amap.com/api/javascript-api/download`定义。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"ChargeStatus\\": \\"NORMAL\\",\\n    \\"ClassBSupported\\": true,\\n    \\"FreqBandPlanGroupId\\": 123,\\n    \\"District\\": \\"某某区\\",\\n    \\"GisCoordinateSystem\\": \\"GCJ_02\\",\\n    \\"City\\": \\"某某市\\",\\n    \\"TimeCorrectable\\": true,\\n    \\"OnlineState\\": \\"ONLINE\\",\\n    \\"AuthTypes\\": \\"STANDARD\\",\\n    \\"OnlineStateChangedMillis\\": 1514736000000,\\n    \\"CommunicationMode\\": \\"HALF_DUPLEX\\",\\n    \\"Description\\": \\"网关描述\\",\\n    \\"Enabled\\": true,\\n    \\"ClassBWorking\\": true,\\n    \\"Address\\": \\"详细地址\\",\\n    \\"Longitude\\": 123.45678,\\n    \\"EmbeddedNsId\\": \\"123\\",\\n    \\"Latitude\\": 23.45678,\\n    \\"Name\\": \\"网关名称\\",\\n    \\"GwEui\\": \\"0000000000000000\\",\\n    \\"AddressCode\\": 123\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetGatewayResponse>\\r\\n      <Data>\\r\\n            <City>某某市</City>\\r\\n            <Name>网关名称</Name>\\r\\n            <District>某某区</District>\\r\\n            <OnlineState>ONLINE</OnlineState>\\r\\n            <TimeCorrectable>true</TimeCorrectable>\\r\\n            <Enabled>true</Enabled>\\r\\n            <Longitude>123.45678</Longitude>\\r\\n            <Latitude>23.45678</Latitude>\\r\\n            <OnlineStateChangedMillis>1514736000000</OnlineStateChangedMillis>\\r\\n            <ClassBSupported>true</ClassBSupported>\\r\\n            <Address>详细地址</Address>\\r\\n            <GwEui>0000000000000000</GwEui>\\r\\n            <CommunicateMode>HALF_DUPLEX</CommunicateMode>\\r\\n            <ClassBWorking>true</ClassBWorking>\\r\\n            <FreqBandPlanGroupId>123</FreqBandPlanGroupId>\\r\\n            <AddressCode>123</AddressCode>\\r\\n            <GisCoordinateSystem>GCJ-02</GisCoordinateSystem>\\r\\n            <Description>网关描述</Description>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetGatewayResponse>","errorExample":""}]',
      'title' => 'GetGateway',
      'summary' => '调用GetGateway获取网关信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetGatewayStatusStat' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'example' => 'iot-060a09b1',
          ),
        ),
        1 => 
        array (
          'name' => 'GwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关的GwEUI。',
            'type' => 'string',
            'required' => true,
            'example' => '0000000000000000',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '网关状态统计列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'MemoryRadio' => 
                  array (
                    'description' => '网关内存占用百分比，如42.0表示内存占用42%。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '42.0',
                  ),
                  'OnlineHour' => 
                  array (
                    'description' => '累计在线小时数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '42',
                  ),
                  'Enabled' => 
                  array (
                    'description' => '网关的启停用状态。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'TxCount' => 
                  array (
                    'description' => '累计TX。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'RxCount' => 
                  array (
                    'description' => '累计RX。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'GwEui' => 
                  array (
                    'description' => '网关的GwEUI。',
                    'type' => 'string',
                    'example' => '0000000000000000',
                  ),
                  'OnlineState' => 
                  array (
                    'description' => '网关在线状态。',
                    'type' => 'string',
                    'example' => 'ONLINE',
                  ),
                  'CpuRadio' => 
                  array (
                    'description' => '网关CPU占用百分比，如10.5表示CPU占用10.5%。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '42.0',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"MemoryRadio\\": 42,\\n    \\"OnlineHour\\": 42,\\n    \\"Enabled\\": true,\\n    \\"TxCount\\": 10,\\n    \\"RxCount\\": 10,\\n    \\"GwEui\\": \\"0000000000000000\\",\\n    \\"OnlineState\\": \\"ONLINE\\",\\n    \\"CpuRadio\\": 42\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetGatewayStatusStatResponse>\\r\\n      <Data>\\r\\n            <OnlineState>ONLINE</OnlineState>\\r\\n            <MemoryRadio>42.0</MemoryRadio>\\r\\n            <CpuRadio>42.0</CpuRadio>\\r\\n            <RxCount>10</RxCount>\\r\\n            <OnlineHour>42</OnlineHour>\\r\\n            <TxCount>10</TxCount>\\r\\n            <GwEui>0000000000000000</GwEui>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetGatewayStatusStatResponse>","errorExample":""}]',
      'title' => 'GetGatewayStatusStat',
      'summary' => '调用GetGatewayStatusStat获取网关状态统计，如 CPU、内存占用等。',
    ),
    'ListGateways' => 
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
            'example' => 'iot-***-v6***',
          ),
        ),
        1 => 
        array (
          'name' => 'OnlineState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关的在线、离线状态过滤。如未传入此参数，则不限制在线状态。可取值为：

- **ONLINE**：在线。

- **OFFLINE**：离线。',
            'type' => 'string',
            'required' => false,
            'example' => 'OFFLINE',
            'enum' => 
            array (
              0 => 'ONLINE',
              1 => 'OFFLINE',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'FuzzyGwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'GwEUI模糊过滤。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        3 => 
        array (
          'name' => 'FuzzyCity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '城市名模糊过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'CityName',
          ),
        ),
        4 => 
        array (
          'name' => 'FuzzyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关名称模糊过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'GatewayName',
          ),
        ),
        5 => 
        array (
          'name' => 'FreqBandPlanGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关频段ID过滤。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        6 => 
        array (
          'name' => 'IsEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关的启用、停用状态过滤。如未传入此参数，则不限制启停状态。可取值为：

- **true**：启用。

- **false**：停用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'Offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的起始位置，从0开始。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '0',
            'example' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的网关数量上限，最大支持200，须大于等于1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '1',
            'example' => '2',
          ),
        ),
        9 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定排序字段，可取值为**ONLINE_STATE_CHANGED_MILLIS**。',
            'type' => 'string',
            'required' => false,
            'example' => 'ONLINE_STATE_CHANGED_MILLIS',
            'enum' => 
            array (
              0 => 'ONLINE_STATE_CHANGED_MILLIS',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配合**SortingField**参数一起使用。

- **true**：升序。

- **false**：降序。',
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
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '满足过滤条件的网关总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'List' => 
                  array (
                    'description' => '查询到的网关信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ChargeStatus' => 
                        array (
                          'description' => '网关欠费状态。

- **NORMAL**：网关未欠费，正常工作。
- **ARREARAGE**：网关欠费。',
                          'type' => 'string',
                          'example' => 'NORMAL',
                        ),
                        'ClassBSupported' => 
                        array (
                          'description' => '该网关是否支持**Class B**模式。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'FreqBandPlanGroupId' => 
                        array (
                          'description' => '网关频段ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'District' => 
                        array (
                          'description' => '网关所在城区名称。',
                          'type' => 'string',
                          'example' => '某某区',
                        ),
                        'GisCoordinateSystem' => 
                        array (
                          'description' => '网关经纬度所采用的坐标系统，可取值为**WGS_84**，**GCJ_02**。',
                          'type' => 'string',
                          'example' => 'GCJ_02',
                        ),
                        'City' => 
                        array (
                          'description' => '网关所在城市名称。',
                          'type' => 'string',
                          'example' => '某某市',
                        ),
                        'TimeCorrectable' => 
                        array (
                          'description' => '该网关是否可以作为时间校准网关。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'OnlineState' => 
                        array (
                          'description' => '网关的在线、离线状态。可取值为：

- **ONLINE**：在线。

- **OFFLINE**：离线。',
                          'type' => 'string',
                          'example' => 'ONLINE',
                        ),
                        'AuthTypes' => 
                        array (
                          'description' => '网关合约类型。

- **HYBRID**：hybrid网关。

- **SINGLE_CHANNEL**：单通道网关。

- **STANDARD**：标准合约网关。',
                          'type' => 'string',
                          'example' => 'STANDARD',
                        ),
                        'OnlineStateChangedMillis' => 
                        array (
                          'description' => '最近一次在线、离线状态的变更时间。

格式为UNIX时间戳，以毫秒为单位。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514736000000',
                        ),
                        'CommunicationMode' => 
                        array (
                          'description' => '网关通信模式。可取值为：

- **FULL_DUPLEX**：全双工。

- **HALF_DUPLEX**：半双工。',
                          'type' => 'string',
                          'example' => 'HALF_DUPLEX',
                        ),
                        'Description' => 
                        array (
                          'description' => '自定义网关描述。',
                          'type' => 'string',
                          'example' => '网关描述',
                        ),
                        'Enabled' => 
                        array (
                          'description' => '该网关是否处于启用状态。

- **true**：启用状态。

- **false**：停用状态。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ClassBWorking' => 
                        array (
                          'description' => '该网关是否正工作在Class B模式下。

- **true**：是。

- **false**：否。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Address' => 
                        array (
                          'description' => '网关所在详细地址。',
                          'type' => 'string',
                          'example' => '详细地址',
                        ),
                        'Longitude' => 
                        array (
                          'description' => '网关经度。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '123.45678',
                        ),
                        'EmbeddedNsId' => 
                        array (
                          'description' => 'Hybrid网关id。',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'Latitude' => 
                        array (
                          'description' => '网关纬度。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '23.45678',
                        ),
                        'Name' => 
                        array (
                          'description' => '自定义网关名称。',
                          'type' => 'string',
                          'example' => '网关名称',
                        ),
                        'GwEui' => 
                        array (
                          'description' => '网关唯一标识。',
                          'type' => 'string',
                          'example' => '0000000000000000',
                        ),
                        'AddressCode' => 
                        array (
                          'description' => '网关所在地区ID，由`http://lbs.amap.com/api/javascript-api/download`定义。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 2,\\n    \\"List\\": [\\n      {\\n        \\"ChargeStatus\\": \\"NORMAL\\",\\n        \\"ClassBSupported\\": true,\\n        \\"FreqBandPlanGroupId\\": 123,\\n        \\"District\\": \\"某某区\\",\\n        \\"GisCoordinateSystem\\": \\"GCJ_02\\",\\n        \\"City\\": \\"某某市\\",\\n        \\"TimeCorrectable\\": true,\\n        \\"OnlineState\\": \\"ONLINE\\",\\n        \\"AuthTypes\\": \\"STANDARD\\",\\n        \\"OnlineStateChangedMillis\\": 1514736000000,\\n        \\"CommunicationMode\\": \\"HALF_DUPLEX\\",\\n        \\"Description\\": \\"网关描述\\",\\n        \\"Enabled\\": true,\\n        \\"ClassBWorking\\": true,\\n        \\"Address\\": \\"详细地址\\",\\n        \\"Longitude\\": 123.45678,\\n        \\"EmbeddedNsId\\": \\"123\\",\\n        \\"Latitude\\": 23.45678,\\n        \\"Name\\": \\"网关名称\\",\\n        \\"GwEui\\": \\"0000000000000000\\",\\n        \\"AddressCode\\": 123\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListGatewaysResponse>\\r\\n      <Data>\\r\\n            <TotalCount>23</TotalCount>\\r\\n            <List>\\r\\n                  <Gateway>\\r\\n                        <City>某某市</City>\\r\\n                        <Name>网关名称</Name>\\r\\n                        <District>某某区</District>\\r\\n                        <OnlineState>ONLINE</OnlineState>\\r\\n                        <TimeCorrectable>true</TimeCorrectable>\\r\\n                        <Enabled>true</Enabled>\\r\\n                        <Longitude>123.45678</Longitude>\\r\\n                        <Latitude>23.45678</Latitude>\\r\\n                        <OnlineStateChangedMillis>1514736000000</OnlineStateChangedMillis>\\r\\n                        <ClassBSupported>true</ClassBSupported>\\r\\n                        <Address>详细地址</Address>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <CommunicateMode>HALF_DUPLEX</CommunicateMode>\\r\\n                        <ClassBWorking>true</ClassBWorking>\\r\\n                        <FreqBandPlanGroupId>123</FreqBandPlanGroupId>\\r\\n                        <AddressCode>123</AddressCode>\\r\\n                        <GisCoordinateSystem>GCJ-02</GisCoordinateSystem>\\r\\n                        <Description>网关描述</Description>\\r\\n                  </Gateway>\\r\\n                  <Gateway>\\r\\n                        <City>某某市</City>\\r\\n                        <Name>网关名称</Name>\\r\\n                        <District>某某区</District>\\r\\n                        <OnlineState>ONLINE</OnlineState>\\r\\n                        <TimeCorrectable>true</TimeCorrectable>\\r\\n                        <Enabled>true</Enabled>\\r\\n                        <Longitude>123.45678</Longitude>\\r\\n                        <Latitude>23.45678</Latitude>\\r\\n                        <OnlineStateChangedMillis>1514736000000</OnlineStateChangedMillis>\\r\\n                        <ClassBSupported>true</ClassBSupported>\\r\\n                        <Address>详细地址</Address>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <CommunicateMode>HALF_DUPLEX</CommunicateMode>\\r\\n                        <ClassBWorking>true</ClassBWorking>\\r\\n                        <FreqBandPlanGroupId>123</FreqBandPlanGroupId>\\r\\n                        <AddressCode>123</AddressCode>\\r\\n                        <GisCoordinateSystem>GCJ-02</GisCoordinateSystem>\\r\\n                        <Description>网关描述</Description>\\r\\n                  </Gateway>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListGatewaysResponse>","errorExample":""}]',
      'title' => '查询网关信息列表',
      'summary' => '根据过滤条件查询当前用户账号名下的网关信息列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateNodeGroup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NodeGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点分组的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'group1',
          ),
        ),
        1 => 
        array (
          'name' => 'JoinPermissionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '与节点分组关联的入网凭证ID。',
            'type' => 'string',
            'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '节点分组ID。',
                'type' => 'string',
                'example' => '123456',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          3 => 
          array (
            'errorCode' => 'NodeGroupNameDuplicated',
            'errorMessage' => 'The specified node group name already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'NodeGroupAlreadyBoundJoinPermission',
            'errorMessage' => 'This node group is already bound to a join permission.',
          ),
          5 => 
          array (
            'errorCode' => 'JoinPermissionDoesNotExist',
            'errorMessage' => 'The specified join permission does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'JoinPermissionAlreadyBoundNodeGroup',
            'errorMessage' => 'The specified join permission has already been bound to another node group.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidName',
            'errorMessage' => 'The specified name is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"123456\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateNodeGroupResponse>\\r\\n      <Data>123456</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CreateNodeGroupResponse>","errorExample":""}]',
      'title' => '创建节点分组',
      'summary' => '调用CreateNodeGroup创建节点分组。',
    ),
    'DeleteNodeGroup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的节点分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
          4 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceLocked',
            'errorMessage' => 'The specified resource has been locked by another product.',
          ),
          6 => 
          array (
            'errorCode' => 'NodeGroupAlreadyBoundJoinPermission',
            'errorMessage' => 'This node group is already bound to a join permission.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteNodeGroupResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</DeleteNodeGroupResponse>","errorExample":""}]',
      'title' => '删除节点分组',
      'summary' => '调用DeleteNodeGroup删除节点分组。',
    ),
    'UpdateNodeGroup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点分组的名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'group1',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          6 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
          7 => 
          array (
            'errorCode' => 'NodeGroupNameDuplicated',
            'errorMessage' => 'The specified node group name already exists.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidName',
            'errorMessage' => 'The specified name is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'ResourceLocked',
            'errorMessage' => 'The specified resource has been locked by another product.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateNodeGroupResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateNodeGroupResponse>","errorExample":""}]',
      'title' => '更新节点分组',
      'summary' => '调用UpdateNodeGroup更新节点分组。',
    ),
    'CountNodeGroups' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'example' => 'iot-060a09wy',
          ),
        ),
        1 => 
        array (
          'name' => 'FuzzyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配节点分组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'group1',
          ),
        ),
        2 => 
        array (
          'name' => 'FuzzyJoinEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配节点分组中节点所使用的 JoinEUI。',
            'type' => 'string',
            'required' => false,
            'example' => 'd896e0',
          ),
        ),
        3 => 
        array (
          'name' => 'FuzzyDevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配节点分组中节点的 DevEUI。',
            'type' => 'string',
            'required' => false,
            'example' => 'd896e0',
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
                'description' => '满足过滤条件的节点分组总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 100,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CountNodeGroupsResponse>\\r\\n      <Data>100</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CountNodeGroupsResponse>","errorExample":""}]',
      'title' => 'CountNodeGroups',
      'summary' => '调用CountNodeGroups统计符合过滤条件的节点分组总数。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetNodeGroup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
          'name' => 'IotInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。
您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。

> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iot-cn-0pp1n8t****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点分组ID，可调用[ListNodeGroups](~~109944~~)接口查询获取。',
            'type' => 'string',
            'required' => true,
            'example' => '123456',
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
              'Success' => 
              array (
                'description' => '是否调用成功。返回值：
- **true**：调用成功。
- ** false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '调用成功时返回的节点分组信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'RxMonthSum' => 
                  array (
                    'description' => '与节点分组关联的入网凭证的当月上行数据包量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'NodeGroupName' => 
                  array (
                    'description' => '节点分组的名称。',
                    'type' => 'string',
                    'example' => '节点分组名称',
                  ),
                  'MulticastNodeCapacity' => 
                  array (
                    'description' => '节点分组所关联的组播组能够容纳的节点数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1000',
                  ),
                  'JoinPermissionOwnerAliyunId' => 
                  array (
                    'description' => '- 如果关联的是专用凭证，该字段表示入网凭证拥有者的阿里云账号。
- 如果关联的是泛在凭证，该字段值为**AliCloud IoT**。',
                    'type' => 'string',
                    'example' => 'some-user',
                  ),
                  'MulticastEnabled' => 
                  array (
                    'description' => '节点分组所关联的组播组是否被启用。返回值：

- **true**：启用。
- **false**：停用。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'TxMonthSum' => 
                  array (
                    'description' => '与节点分组关联的入网凭证的当月下行数据包量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'FreqBandPlanGroupId' => 
                  array (
                    'description' => '节点分组中的节点采用的频段ID，与分组所关联的入网凭证中指定的一致。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '102',
                  ),
                  'TxDailySum' => 
                  array (
                    'description' => '与节点分组关联的入网凭证的当天下行数据包量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'JoinPermissionEnabled' => 
                  array (
                    'description' => '与节点分组关联的入网凭证的启停状态。返回值：

- **true**：启用。
- **false**：停用。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'JoinPermissionId' => 
                  array (
                    'description' => '与节点分组关联的入网凭证的ID。',
                    'type' => 'string',
                    'example' => '1234569',
                  ),
                  'ClassMode' => 
                  array (
                    'description' => '节点分组中的节点所采用的LoRaWAN Class模式，与分组所关联的入网凭证中指定的一致。',
                    'type' => 'string',
                    'example' => 'A',
                  ),
                  'NodeGroupId' => 
                  array (
                    'description' => '节点分组ID。',
                    'type' => 'string',
                    'example' => '123456',
                  ),
                  'MulticastNodeCount' => 
                  array (
                    'description' => '节点分组所关联的组播组当前已经添加的节点数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'DataDispatchEnabled' => 
                  array (
                    'description' => '节点分组的数据流转启停状态。返回值：

- **true**：启用。
- **false**：停用。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'MulticastGroupId' => 
                  array (
                    'description' => '节点分组所关联的组播组ID。',
                    'type' => 'string',
                    'example' => '1234',
                  ),
                  'RxDailySum' => 
                  array (
                    'description' => '与节点分组关联的入网凭证的当天上行数据包量。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'JoinEui' => 
                  array (
                    'description' => '节点分组中的节点使用的JoinEUI，与分组所关联的入网凭证中指定的JoinEUI一致。',
                    'type' => 'string',
                    'example' => '0000000000000000',
                  ),
                  'CreateMillis' => 
                  array (
                    'description' => '节点分组的创建时间，格式为UNIX时间戳，以毫秒为单位。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000000',
                  ),
                  'JoinPermissionType' => 
                  array (
                    'description' => '与节点分组关联的入网凭证类型。返回值：

- **LOCAL**：专用凭证。
- **ROAMING**：泛在凭证。',
                    'type' => 'string',
                    'example' => 'LOCAL',
                  ),
                  'NodesCnt' => 
                  array (
                    'description' => '节点分组中的节点数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'JoinPermissionName' => 
                  array (
                    'description' => '与节点分组关联的入网凭证的名称。',
                    'type' => 'string',
                    'example' => '凭证1',
                  ),
                  'Locks' => 
                  array (
                    'description' => '节点分组所关联的操作锁列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LockId' => 
                        array (
                          'description' => '锁ID。',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'LockType' => 
                        array (
                          'description' => '锁的类型。取值：**WRITE**，表示所有写操作都加锁，包括编辑、删除等。',
                          'type' => 'string',
                          'example' => 'WRITE',
                        ),
                        'CreateMillis' => 
                        array (
                          'description' => '锁的创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514736000000',
                        ),
                        'Enabled' => 
                        array (
                          'description' => '锁的启停用状态。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'DataDispatchConfig' => 
                  array (
                    'description' => '节点分组的数据流转配置。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Destination' => 
                      array (
                        'description' => '数据流转目的地。返回值：

- **IOT**：数据流转到物联网平台的产品。
- **ONS**：数据流转到MQ的Topic。',
                        'type' => 'string',
                        'example' => 'IOT',
                      ),
                      'IotProduct' => 
                      array (
                        'description' => '如果流转目的地是物联网平台的产品，该字段存储产品信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DebugSwitch' => 
                          array (
                            'description' => '数据流转目的地为**IOT**的调试开关。返回值：

- **true**：打开调试开关。
- **false**：关闭调试开关。',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'ProductKey' => 
                          array (
                            'description' => '产品的ProductKey。',
                            'type' => 'string',
                            'example' => 'HMyB*******',
                          ),
                          'ProductName' => 
                          array (
                            'description' => '产品名称。',
                            'type' => 'string',
                            'example' => '产品名',
                          ),
                          'ProductType' => 
                          array (
                            'description' => '产品类型。返回值：

- **IOT_SUITE**：数据流转到IoT套件基础版。
- **IOT_SUITE_SENIOR**：数据流转到IoT套件高级版。',
                            'type' => 'string',
                            'example' => 'IOT_SUITE',
                          ),
                        ),
                      ),
                      'OnsTopics' => 
                      array (
                        'description' => '如果流转目的地是MQ，该字段存储MQ Topic信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'UplinkTopic' => 
                          array (
                            'description' => 'MQ上行Topic。',
                            'type' => 'string',
                            'example' => 'topic2',
                          ),
                          'UplinkRegionName' => 
                          array (
                            'description' => 'MQ上行Region ID。',
                            'type' => 'string',
                            'example' => 'cn-hangzhou',
                          ),
                          'DownlinkRegionName' => 
                          array (
                            'description' => 'MQ下行Region ID。',
                            'type' => 'string',
                            'example' => 'cn-beijing',
                          ),
                          'DownlinkTopic' => 
                          array (
                            'description' => 'MQ下行Topic。',
                            'type' => 'string',
                            'example' => 'topic1',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"RxMonthSum\\": 0,\\n    \\"NodeGroupName\\": \\"节点分组名称\\",\\n    \\"MulticastNodeCapacity\\": 1000,\\n    \\"JoinPermissionOwnerAliyunId\\": \\"some-user\\",\\n    \\"MulticastEnabled\\": false,\\n    \\"TxMonthSum\\": 0,\\n    \\"FreqBandPlanGroupId\\": 102,\\n    \\"TxDailySum\\": 0,\\n    \\"JoinPermissionEnabled\\": true,\\n    \\"JoinPermissionId\\": \\"1234569\\",\\n    \\"ClassMode\\": \\"A\\",\\n    \\"NodeGroupId\\": \\"123456\\",\\n    \\"MulticastNodeCount\\": 10,\\n    \\"DataDispatchEnabled\\": false,\\n    \\"MulticastGroupId\\": \\"1234\\",\\n    \\"RxDailySum\\": \\"0\\",\\n    \\"JoinEui\\": \\"0000000000000000\\",\\n    \\"CreateMillis\\": 1514736000000,\\n    \\"JoinPermissionType\\": \\"LOCAL\\",\\n    \\"NodesCnt\\": 10,\\n    \\"JoinPermissionName\\": \\"凭证1\\",\\n    \\"Locks\\": [\\n      {\\n        \\"LockId\\": \\"123\\",\\n        \\"LockType\\": \\"WRITE\\",\\n        \\"CreateMillis\\": 1514736000000,\\n        \\"Enabled\\": true\\n      }\\n    ],\\n    \\"DataDispatchConfig\\": {\\n      \\"Destination\\": \\"IOT\\",\\n      \\"IotProduct\\": {\\n        \\"DebugSwitch\\": true,\\n        \\"ProductKey\\": \\"HMyB*******\\",\\n        \\"ProductName\\": \\"产品名\\",\\n        \\"ProductType\\": \\"IOT_SUITE\\"\\n      },\\n      \\"OnsTopics\\": {\\n        \\"UplinkTopic\\": \\"topic2\\",\\n        \\"UplinkRegionName\\": \\"cn-hangzhou\\",\\n        \\"DownlinkRegionName\\": \\"cn-beijing\\",\\n        \\"DownlinkTopic\\": \\"topic1\\"\\n      }\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetNodeGroupResponse>\\n<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Data>\\n    <NodesCnt>10</NodesCnt>\\n    <RxMonthSum>0</RxMonthSum>\\n    <ClassMode>A</ClassMode>\\n    <MulticastNodeCapacity>1000</MulticastNodeCapacity>\\n    <NodeGroupName>节点分组名称</NodeGroupName>\\n    <RxDailySum>0</RxDailySum>\\n    <TxDailySum>0</TxDailySum>\\n    <TxMonthSum>0</TxMonthSum>\\n    <MulticastNodeCount>10</MulticastNodeCount>\\n    <MulticastEnabled>false</MulticastEnabled>\\n    <JoinPermissionType>LOCAL</JoinPermissionType>\\n    <JoinPermissionOwnerAliyunId>some-user</JoinPermissionOwnerAliyunId>\\n    <NodeGroupId>123456</NodeGroupId>\\n    <MulticastGroupId>1234</MulticastGroupId>\\n    <CreateMillis>1514736000000</CreateMillis>\\n    <JoinPermissionId>1234569</JoinPermissionId>\\n    <JoinPermissionName>凭证1</JoinPermissionName>\\n    <JoinPermissionEnabled>true</JoinPermissionEnabled>\\n    <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\n    <JoinEui>0</JoinEui>\\n    <DataDispatchEnabled>false</DataDispatchEnabled>\\n    <Locks>\\n        <CreateMillis>1514736000000</CreateMillis>\\n        <Enabled>true</Enabled>\\n        <LockType>WRITE</LockType>\\n        <LockId>123</LockId>\\n    </Locks>\\n    <DataDispatchConfig>\\n        <Destination>IOT</Destination>\\n        <IotProduct>\\n            <DebugSwitch>true</DebugSwitch>\\n            <ProductName>产品名</ProductName>\\n            <ProductType>IOT_SUITE</ProductType>\\n            <ProductKey>HMyB*******</ProductKey>\\n        </IotProduct>\\n        <OnsTopics/>\\n    </DataDispatchConfig>\\n</Data>\\n<Success>true</Success>\\n</GetNodeGroupResponse>","errorExample":""}]',
      'title' => 'GetNodeGroup',
      'summary' => '调用GetNodeGroup获取节点分组信息。',
      'description' => '# 限制说明

单阿里云账号调用该接口的每秒请求数（QPS）最大限制为5。

> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~108601~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListNodeGroups' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'example' => 'iot-cn-0pp1n8t****',
          ),
        ),
        1 => 
        array (
          'name' => 'FuzzyName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配节点分组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'FuzzyJoinEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配节点分组所使用的JoinEUI。',
            'type' => 'string',
            'required' => false,
            'example' => 'd896e0',
          ),
        ),
        3 => 
        array (
          'name' => 'FuzzyDevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配分组中的节点DevEUI。',
            'type' => 'string',
            'required' => false,
            'example' => 'd896e0',
          ),
        ),
        4 => 
        array (
          'name' => 'Offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的起始位置，从0开始。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '0',
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的分组数量，取值范围0~200。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '200',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定排序字段，取值为**CREATED_MILLIS**，表示根据创建时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'CREATED_MILLIS',
            'enum' => 
            array (
              0 => 'CREATED_MILLIS',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配合**SortingField**参数一起使用，指定字段排序方式。取值：

- **true**：升序。
- **false**：降序。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否调用成功。返回值：
- **true**：调用成功。
- ** false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '调用成功时返回的当前阿里云账号下的节点分组列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '节点分组总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'List' => 
                  array (
                    'description' => '节点分组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RxMonthSum' => 
                        array (
                          'description' => '与节点分组关联的入网凭证的当月上行数据包量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'NodeGroupName' => 
                        array (
                          'description' => '节点分组的名称。',
                          'type' => 'string',
                          'example' => '节点分组名称2',
                        ),
                        'JoinPermissionOwnerAliyunId' => 
                        array (
                          'description' => '- 如果关联的是**专用凭证**，该字段表示入网凭证拥有者的阿里云账号。
- 如果关联的是**泛在凭证**，该字段值为**AliCloud IoT**。',
                          'type' => 'string',
                          'example' => 'some-user2',
                        ),
                        'TxMonthSum' => 
                        array (
                          'description' => '与节点分组关联的入网凭证的当月下行数据包量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'FreqBandPlanGroupId' => 
                        array (
                          'description' => '节点分组中的节点采用的频段ID，与分组所关联的入网凭证中指定的一致。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '102',
                        ),
                        'TxDailySum' => 
                        array (
                          'description' => '与节点分组关联的入网凭证的当天下行数据包量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'JoinPermissionEnabled' => 
                        array (
                          'description' => '与节点分组关联的入网凭证的启停状态。返回值：

- **true**：启用。
- **false**：停用。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'JoinPermissionId' => 
                        array (
                          'description' => '与节点分组关联的入网凭证的ID。',
                          'type' => 'string',
                          'example' => '123456',
                        ),
                        'ClassMode' => 
                        array (
                          'description' => '节点分组中的节点所采用的LoRaWAN Class模式，与分组所关联的入网凭证中指定的一致。',
                          'type' => 'string',
                          'example' => 'A',
                        ),
                        'NodeGroupId' => 
                        array (
                          'description' => '节点分组ID。',
                          'type' => 'string',
                          'example' => '123456',
                        ),
                        'DataDispatchEnabled' => 
                        array (
                          'description' => '节点分组的数据流转启停状态。返回值：

- **true**：启用。
- **false**：停用。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'RxDailySum' => 
                        array (
                          'description' => '与节点分组关联的入网凭证的当天上行数据包量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'JoinEui' => 
                        array (
                          'description' => '节点分组中的节点使用的JoinEUI，与分组所关联的入网凭证中指定的JoinEUI一致。',
                          'type' => 'string',
                          'example' => '0000000000000000',
                        ),
                        'CreateMillis' => 
                        array (
                          'description' => '节点分组的创建时间，格式为UNIX时间戳，以毫秒为单位。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514736000000',
                        ),
                        'JoinPermissionType' => 
                        array (
                          'description' => '与节点分组关联的入网凭证类型。返回值：

- **LOCAL**：专用凭证。
- **ROAMING**：泛在凭证。',
                          'type' => 'string',
                          'example' => 'LOCAL',
                        ),
                        'NodesCnt' => 
                        array (
                          'description' => '节点分组中的节点数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '10',
                        ),
                        'JoinPermissionName' => 
                        array (
                          'description' => '与节点分组关联的入网凭证的名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Locks' => 
                        array (
                          'description' => '节点分组所关联的操作锁列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'LockId' => 
                              array (
                                'description' => '锁ID。',
                                'type' => 'string',
                                'example' => '123',
                              ),
                              'LockType' => 
                              array (
                                'description' => '锁的类型。返回值：**WRITE**，表示所有写操作都加锁，包括编辑、删除等。',
                                'type' => 'string',
                                'example' => 'WRITE',
                              ),
                              'CreateMillis' => 
                              array (
                                'description' => '锁的创建时间。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1514736000000',
                              ),
                              'Enabled' => 
                              array (
                                'description' => '锁的启停用状态。',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                            ),
                          ),
                        ),
                        'DataDispatchConfig' => 
                        array (
                          'description' => '节点分组的数据流转配置。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Destination' => 
                            array (
                              'description' => '数据流转目的地。返回值：

- **IOT**：数据流转到物联网平台的产品。
- **ONS**：数据流转到MQ的Topic。',
                              'type' => 'string',
                              'example' => 'IOT',
                            ),
                            'IotProduct' => 
                            array (
                              'description' => '如果流转目的地是物联网平台的产品，该字段存储产品信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'DebugSwitch' => 
                                array (
                                  'description' => '数据流转目的地为**IOT**的调试开关。返回值：

- **true**：打开调试开关。
- **false**：关闭调试开关。',
                                  'type' => 'boolean',
                                  'example' => 'false',
                                ),
                                'ProductKey' => 
                                array (
                                  'description' => '产品的ProductKey。',
                                  'type' => 'string',
                                  'example' => 'xxxxxxxx',
                                ),
                                'ProductName' => 
                                array (
                                  'description' => '产品名称。',
                                  'type' => 'string',
                                  'example' => '产品名',
                                ),
                                'ProductType' => 
                                array (
                                  'description' => '产品类型。返回值：

- **IOT_SUITE**：数据流转到IoT套件基础版。
- **IOT_SUITE_SENIOR**：数据流转到IoT套件高级版。',
                                  'type' => 'string',
                                  'example' => 'IOT_SUITE',
                                ),
                              ),
                            ),
                            'OnsTopics' => 
                            array (
                              'description' => '如果流转目的地是MQ，该字段存储MQ Topic信息。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'UplinkTopic' => 
                                array (
                                  'description' => 'MQ上行Topic。',
                                  'type' => 'string',
                                  'example' => 'topic2',
                                ),
                                'UplinkRegionName' => 
                                array (
                                  'description' => 'MQ上行Region ID。',
                                  'type' => 'string',
                                  'example' => 'cn-shanghai',
                                ),
                                'DownlinkRegionName' => 
                                array (
                                  'description' => 'MQ下行Region ID。',
                                  'type' => 'string',
                                  'example' => 'cn-beijing',
                                ),
                                'DownlinkTopic' => 
                                array (
                                  'description' => 'MQ下行Topic。',
                                  'type' => 'string',
                                  'example' => 'topic1',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          3 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"RxMonthSum\\": 0,\\n        \\"NodeGroupName\\": \\"节点分组名称2\\",\\n        \\"JoinPermissionOwnerAliyunId\\": \\"some-user2\\",\\n        \\"TxMonthSum\\": 0,\\n        \\"FreqBandPlanGroupId\\": 102,\\n        \\"TxDailySum\\": 0,\\n        \\"JoinPermissionEnabled\\": true,\\n        \\"JoinPermissionId\\": \\"123456\\",\\n        \\"ClassMode\\": \\"A\\",\\n        \\"NodeGroupId\\": \\"123456\\",\\n        \\"DataDispatchEnabled\\": true,\\n        \\"RxDailySum\\": 0,\\n        \\"JoinEui\\": \\"0000000000000000\\",\\n        \\"CreateMillis\\": 1514736000000,\\n        \\"JoinPermissionType\\": \\"LOCAL\\",\\n        \\"NodesCnt\\": 10,\\n        \\"JoinPermissionName\\": \\"test\\",\\n        \\"Locks\\": [\\n          {\\n            \\"LockId\\": \\"123\\",\\n            \\"LockType\\": \\"WRITE\\",\\n            \\"CreateMillis\\": 1514736000000,\\n            \\"Enabled\\": true\\n          }\\n        ],\\n        \\"DataDispatchConfig\\": {\\n          \\"Destination\\": \\"IOT\\",\\n          \\"IotProduct\\": {\\n            \\"DebugSwitch\\": false,\\n            \\"ProductKey\\": \\"xxxxxxxx\\",\\n            \\"ProductName\\": \\"产品名\\",\\n            \\"ProductType\\": \\"IOT_SUITE\\"\\n          },\\n          \\"OnsTopics\\": {\\n            \\"UplinkTopic\\": \\"topic2\\",\\n            \\"UplinkRegionName\\": \\"cn-shanghai\\",\\n            \\"DownlinkRegionName\\": \\"cn-beijing\\",\\n            \\"DownlinkTopic\\": \\"topic1\\"\\n          }\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNodeGroupsResponse>\\n<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Data>\\n    <TotalCount>10</TotalCount>\\n    <List>\\n        <NodesCnt>10</NodesCnt>\\n        <RxMonthSum>0</RxMonthSum>\\n        <ClassMode>A</ClassMode>\\n        <NodeGroupName>节点分组名称2</NodeGroupName>\\n        <RxDailySum>0</RxDailySum>\\n        <TxDailySum>0</TxDailySum>\\n        <TxMonthSum>0</TxMonthSum>\\n        <JoinPermissionType>LOCAL</JoinPermissionType>\\n        <JoinPermissionOwnerAliyunId>some-user2</JoinPermissionOwnerAliyunId>\\n        <NodeGroupId>123456</NodeGroupId>\\n        <CreateMillis>1514736000000</CreateMillis>\\n        <JoinPermissionId>123456</JoinPermissionId>\\n        <JoinPermissionName>test</JoinPermissionName>\\n        <JoinPermissionEnabled>true</JoinPermissionEnabled>\\n        <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\n        <JoinEui>0</JoinEui>\\n        <DataDispatchEnabled>true</DataDispatchEnabled>\\n        <Locks>\\n            <CreateMillis>1514736000000</CreateMillis>\\n            <Enabled>true</Enabled>\\n            <LockType>WRITE</LockType>\\n            <LockId>123</LockId>\\n        </Locks>\\n        <DataDispatchConfig>\\n            <Destination>IOT</Destination>\\n            <IotProduct>\\n                <DebugSwitch>false</DebugSwitch>\\n                <ProductName>产品名</ProductName>\\n                <ProductType>IOT_SUITE</ProductType>\\n                <ProductKey>xxxxxxxx</ProductKey>\\n            </IotProduct>\\n            <OnsTopics/>\\n        </DataDispatchConfig>\\n    </List>\\n</Data>\\n<Success>true</Success>\\n</ListNodeGroupsResponse>","errorExample":""}]',
      'title' => 'ListNodeGroups',
      'summary' => '调用ListNodeGroups查询当前阿里云账号下的节点分组列表。',
      'description' => '# 限制说明

单阿里云账号调用该接口的每秒请求数（QPS）最大限制为5。

> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~108601~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AcceptJoinPermissionAuthOrder' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要接受的授权工单ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalOrderStateTransition',
            'errorMessage' => 'The order status conversion is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<AcceptJoinPermissionAuthOrderResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</AcceptJoinPermissionAuthOrderResponse>","errorExample":""}]',
      'title' => '接受专用入网凭证授权工单',
      'summary' => '调用AcceptJoinPermissionAuthOrder接受专用入网凭证授权工单。',
      'description' => '开发者（解决方案供应商）通过该接口接受一个由网络运营者授权的专用入网凭证。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddNodeToGroup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点的DevEUI。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0000000000000000',
          ),
        ),
        1 => 
        array (
          'name' => 'PinCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点的PIN Code。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
          ),
        ),
        2 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'ExceedNodeLimit',
            'errorMessage' => 'The maximum number of nodes is exceeded.',
          ),
          4 => 
          array (
            'errorCode' => 'NodeGroupDoesNotExist',
            'errorMessage' => 'The specified node group does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'DevEuiDuplicated',
            'errorMessage' => 'A node with the same devEui already exists.',
          ),
          6 => 
          array (
            'errorCode' => 'NodeAlreadyAdded',
            'errorMessage' => 'The specified node has already been added to another node group.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidPinCode',
            'errorMessage' => 'An error occurred while verifying PinCode.',
          ),
          8 => 
          array (
            'errorCode' => 'ResourceLocked',
            'errorMessage' => 'The specified resource has been locked by another product.',
          ),
          9 => 
          array (
            'errorCode' => 'NodeDoesNotExist',
            'errorMessage' => 'The specified node does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<AddNodeToGroupResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</AddNodeToGroupResponse>","errorExample":""}]',
      'title' => '在节点分组中增加新的节点',
      'summary' => '调用AddNodeToGroup在节点分组中增加新的节点。',
    ),
    'BindJoinPermissionToNodeGroup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参与关联的节点分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'JoinPermissionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参与关联的入网凭证ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'JoinPermissionDoesNotExist',
            'errorMessage' => 'The specified join permission does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'JoinPermissionAlreadyBoundNodeGroup',
            'errorMessage' => 'The specified join permission has already been bound to another node group.',
          ),
          5 => 
          array (
            'errorCode' => 'NodeGroupDoesNotExist',
            'errorMessage' => 'The specified node group does not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'NodeGroupAlreadyBoundJoinPermission',
            'errorMessage' => 'This node group is already bound to a join permission.',
          ),
          7 => 
          array (
            'errorCode' => 'ResourceLocked',
            'errorMessage' => 'The specified resource has been locked by another product.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<BindJoinPermissionToNodeGroupResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</BindJoinPermissionToNodeGroupResponse>","errorExample":""}]',
      'title' => '建立入网凭证和节点分组的关联',
      'summary' => '调用BindJoinPermissionToNodeGroup建立入网凭证和节点分组的关联。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ApplyRoamingJoinPermission' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FreqBandPlanGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '泛在凭证所采用的频段ID。取值：

- **102**：CN470异频。
- **101**：CN470同频。
- **201**：AS923同频。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '102',
          ),
        ),
        1 => 
        array (
          'name' => 'ClassMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '泛在凭证所采用的LoRaWAN Class模式。取值：A、B、C。',
            'type' => 'string',
            'required' => true,
            'example' => 'A',
            'enum' => 
            array (
              0 => 'A',
              1 => 'B',
              2 => 'C',
              3 => 'D2D',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'JoinPermissionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '泛在凭证名称，支持中文、英文字母、数字和下划线（_），长度限制4～30个字符，一个中文占两个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '泛在凭证1',
          ),
        ),
        3 => 
        array (
          'name' => 'RxDelay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Class A的接收窗口延迟时间，取值范围1s~15s。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'DataRate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当**ClassMode**取值为**B**时，设置期望下行速率，取值范围0~5。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4',
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
                'description' => '泛在凭证的ID。',
                'type' => 'string',
                'example' => '1234',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。返回值：

-  **true**：调用成功。
- ** false**：调用失败。',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'ExceedRoamingJoinPermissionLimit',
            'errorMessage' => 'The maximum number of roaming join permissions is exceeded.',
          ),
          4 => 
          array (
            'errorCode' => 'JoinPermissionNameDuplicated',
            'errorMessage' => 'The specified join permission name already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidName',
            'errorMessage' => 'The specified name is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidFreqBandPlan',
            'errorMessage' => 'The frequency band plan is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"1234\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>123</Data>","errorExample":""}]',
      'title' => '申请泛在凭证',
      'summary' => '调用ApplyRoamingJoinPermission申请泛在凭证。',
      'description' => '# 限制说明

- 单阿里云账号的泛在凭证数量为一个。
- 单阿里云账号调用该接口的每秒请求数（QPS）最大限制为5。

> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~108601~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CancelJoinPermissionAuthOrder' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要撤销的授权工单ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalOrderStateTransition',
            'errorMessage' => 'The order status conversion is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelJoinPermissionAuthOrderResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CancelJoinPermissionAuthOrderResponse>","errorExample":""}]',
      'title' => '取消专用入网凭证授权工单',
      'summary' => '调用CancelJoinPermissionAuthOrder取消专用入网凭证授权工单。',
      'description' => '网络运营者可以通过该接口取消一个尚未被接受的授权工单。',
    ),
    'CheckCloudProductOpenStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServiceCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云产品的 Service Code，对于物联网络管理平台而言恒为“linkwan”。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'linkwan',
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
                'description' => '当前用户账号是否开通了物联网络管理平台服务。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
              ),
              'Success' => 
              array (
                'description' => '是否成功。

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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>true</Data>","errorExample":""}]',
      'title' => '检查服务开通状态',
      'summary' => '检查当前用户账号的物联网络管理平台服务的开通状态，供阿里云内部服务使用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckUserChargeStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '用户欠费状态。

NORMAL： 正常

ARREARAGE： 欠费状态',
                'type' => 'string',
                'example' => 'NORMAL',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
              ),
              'Success' => 
              array (
                'description' => '是否成功。

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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"NORMAL\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Data>NORMAL</Data>\\n<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '检查用户欠费状态',
      'summary' => '检查用户欠费状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CountGatewayTupleOrders' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'States',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '工单状态过滤列表。若不使用此参数，则表示统计所有状态的工单。

参考工单状态取值
',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => false,
            'example' => 'APPLYING',
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
              'Data' => 
              array (
                'description' => '满足状态过滤条件的工单数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '42',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
              ),
              'Success' => 
              array (
                'description' => '是否成功。

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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 42,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>42</Data>","errorExample":""}]',
      'title' => '统计网关安全密钥工单数量',
      'summary' => '统计当前用户账号已提交的网关安全密钥工单的数量，可指定统计特定状态的工单。',
      'requestParamsDescription' => '# 类型说明

### 工单状态取值

| 名称 | 类型 | 说明 |
| --- | --- | --- |
| APPLYING | String | 申请中。 |
| ACCEPTING | String | 颁发中。 |
| ACCEPTED | String | 颁发成功。 |
| ACCEPTING_FAILED | String | 颁发失败。 |
| REJECTED | String | 已拒绝。 |
| REVOKING | String | 撤回中。 |
| REVOKING_FAILED | String | 撤回失败。 |
| REVOKED | String | 撤回成功。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CountNodeTupleOrders' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'States',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '工单状态过滤列表。若不使用此参数，则表示统计所有状态的工单。

参考工单状态取值

',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => false,
            'example' => 'ACCEPTED',
            'maxItems' => 10,
          ),
        ),
        1 => 
        array (
          'name' => 'IsKpm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '判断是否是KPM所发起的工单，是否是安全产线发起的工单。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '满足过滤条件的工单数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '42',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
              ),
              'Success' => 
              array (
                'description' => '是否成功。

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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 42,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>42</Data>","errorExample":""}]',
      'title' => '统计节点安全元组工单数量',
      'summary' => '统计当前用户账号所提交的节点安全元组工单数量，可指定统计特定类型及特定状态的工单。',
      'requestParamsDescription' => '### 类型说明


### 工单状态取值

| 名称 | 类型 | 说明 |
| --- | --- | --- |
| APPLYING | String | 申请中。 |
| ACCEPTING | String | 颁发中。 |
| ACCEPTED | String | 颁发成功。 |
| ACCEPTING_FAILED | String | 颁发失败。 |
| REJECTED | String | 已拒绝。 |
| REVOKING | String | 撤回中。 |
| REVOKING_FAILED | String | 撤回失败。 |
| REVOKED | String | 撤回成功。 |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CountNodesByNodeGroupId' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'FuzzyDevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配节点的DevEUI。',
            'type' => 'string',
            'required' => false,
            'example' => '0000000000000000',
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
                'description' => '满足过滤条件的节点数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 100,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CountNodesByNodeGroupIdResponse>\\r\\n      <Data>100</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CountNodesByNodeGroupIdResponse>","errorExample":""}]',
      'title' => '统计节点数量',
      'summary' => '统计某节点分组中且满足过滤条件的节点数量。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CountNodesByOwnedJoinPermissionId' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JoinPermissionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入网凭证ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'FuzzyDevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配节点的DevEUI。',
            'type' => 'string',
            'required' => false,
            'example' => '0000000000000000',
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
                'description' => '满足过滤条件的节点数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 100,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CountNodesByOwnedJoinPermissionIdResponse>\\r\\n      <Data>100</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CountNodesByOwnedJoinPermissionIdResponse>","errorExample":""}]',
      'title' => '统计节点数量',
      'summary' => '统计使用某入网凭证且满足过滤条件的节点的数量。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CountNotifications' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '通知类型列表，传null值则不过滤类型。

- GATEWAY_OFFLINE：网关离线信息。

- JOIN_PERMISSION_AUTH_APPLYING：凭证授权中。

- JOIN_PERMISSION_AUTH_ACCEPTED：凭证授权成功。

- JOIN_PERMISSION_AUTH_CANCELED：撤销凭证授权。

- JOIN_PERMISSION_AUTH_REJECTED：拒绝凭证授权。
',
            'type' => 'array',
            'items' => 
            array (
              'description' => '通知类型列表，传null值则不过滤类型。

- GATEWAY_OFFLINE：网关离线信息。

- JOIN_PERMISSION_AUTH_APPLYING：凭证授权中。

- JOIN_PERMISSION_AUTH_ACCEPTED：凭证授权成功。

- JOIN_PERMISSION_AUTH_CANCELED：撤销凭证授权。

- JOIN_PERMISSION_AUTH_REJECTED：拒绝凭证授权。',
              'type' => 'string',
              'required' => false,
              'example' => 'GATEWAY_OFFLINE',
            ),
            'required' => false,
            'example' => 'GATEWAY_OFFLINE',
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'HandleState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据通知处理状态过滤，传null值则不过滤处理状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'UNHANDLED',
          ),
        ),
        2 => 
        array (
          'name' => 'BeginMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，毫秒为单位的 UNIX 时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1514736000000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，毫秒为单位的 UNIX 时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1514736000000',
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
                'description' => '通知数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 10,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CountNotificationsResponse>\\r\\n      <Data>10</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CountNotificationsResponse>","errorExample":""}]',
      'title' => '统计符合过滤条件的通知数量',
      'summary' => '调用CountNotifications统计符合过滤条件的通知数量。',
    ),
    'CountOwnedJoinPermissions' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FuzzyRenterAliyunId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配入网凭证租户的阿里云账号ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'some-user',
          ),
        ),
        1 => 
        array (
          'name' => 'FuzzyJoinEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配入网凭证使用的JoinEUI。',
            'type' => 'string',
            'required' => false,
            'example' => 'd896e0',
          ),
        ),
        2 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按照凭证的启停用状态进行过滤。

**true**表示启用，**false**表示停用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'FuzzyJoinPermissionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配入网凭证的名称。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '满足过滤条件的入网凭证总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 100,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CountOwnedJoinPermissionsResponse>\\r\\n      <Data>100</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CountOwnedJoinPermissionsResponse>","errorExample":""}]',
      'title' => '统计入网凭证数量',
      'summary' => '统计符合过滤条件的当前用户账号所拥有的入网凭证的数量。',
      'description' => '> 能够被用户账号“拥有”的入网凭证一定是专用入网凭证。',
    ),
    'CountRentedJoinPermissions' => 
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
      'operationType' => 'read',
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FuzzyOwnerAliyunId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配入网凭证拥有者的阿里云账号ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'some-user',
          ),
        ),
        1 => 
        array (
          'name' => 'FuzzyJoinEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配入网凭证的JoinEUI。',
            'type' => 'string',
            'required' => false,
            'example' => 'd896e0',
          ),
        ),
        2 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按照凭证的启停用状态进行过滤。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'BoundNodeGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据入网凭证是否关联到节点分组进行过滤。

**true**表示已关联，**false**表示未关联。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按照凭证的类型进行过滤。取值：

- **LOCAL**：专用凭证
- **ROAMING**：泛在凭证',
            'type' => 'string',
            'required' => false,
            'example' => 'LOCAL',
          ),
        ),
        5 => 
        array (
          'name' => 'FuzzyJoinPermissionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配入网凭证的名称。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '满足过滤条件的入网凭证总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 100,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CountRentedJoinPermissionsResponse>\\r\\n      <Data>100</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CountRentedJoinPermissionsResponse>","errorExample":""}]',
      'title' => '统计入网凭证数量',
      'summary' => '统计当前用户账号所租用的且符合过滤条件的入网凭证数量。',
    ),
    'CreateLocalJoinPermission' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'FreqBandPlanGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专用入网凭证所采用的频段的频段ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '101',
          ),
        ),
        2 => 
        array (
          'name' => 'ClassMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专用入网凭证采用的LoRaWAN Class模式。可取值：A、B、C。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'A',
            'enum' => 
            array (
              0 => 'A',
              1 => 'B',
              2 => 'C',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'UseDefaultJoinEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专用入网凭证是否使用阿里云统一JoinEUI。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'JoinPermissionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义专用入网凭证名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'RxDelay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'classA的接收窗口延时。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'DataRate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作速率。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4',
          ),
        ),
        7 => 
        array (
          'name' => 'JoinEui',
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
              'Data' => 
              array (
                'description' => '所创建的专用入网凭证的ID。',
                'type' => 'string',
                'example' => '123',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'ExceedLocalJoinPermissionLimit',
            'errorMessage' => 'The maximum number of local join permissions that you can create is exceeded.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'JoinPermissionNameDuplicated',
            'errorMessage' => 'The specified join permission name already exists.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidName',
            'errorMessage' => 'The specified name is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidFreqBandPlan',
            'errorMessage' => 'The frequency band plan is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"123\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateLocalJoinPermissionResponse>\\r\\n      <Data>123</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CreateLocalJoinPermissionResponse>","errorExample":""}]',
      'title' => '创建专用入网凭证',
      'summary' => '当前用户账号将成为该凭证的拥有者，拥有该凭证。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteLocalJoinPermission' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'JoinPermissionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的专用入网凭证的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'JoinPermissionAlreadyAuthorized',
            'errorMessage' => 'The specified join permission has already been granted to another renter.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteLocalJoinPermissionResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</DeleteLocalJoinPermissionResponse>","errorExample":""}]',
      'title' => '删除当前用户账号所拥有的专用入网凭证',
      'summary' => '调用DeleteLocalJoinPermission删除当前用户账号所拥有的专用入网凭证。',
    ),
    'GetFreqBandPlanGroup' => 
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
      'operationType' => 'read',
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '频段ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '201',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '频段信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'EndFrequency' => 
                  array (
                    'description' => '结束频点，单位为MHz。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '925',
                  ),
                  'GroupId' => 
                  array (
                    'description' => '频段ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '201',
                  ),
                  'FrequencyType' => 
                  array (
                    'description' => '频段类型。取值范围：

- **SAME_FREQUENCY**：同频
- **DIFF_FREQUENCY**：异频',
                    'type' => 'string',
                    'example' => 'SAME_FREQUENCY',
                  ),
                  'FrequencyRegionId' => 
                  array (
                    'description' => 'Region标识。',
                    'type' => 'string',
                    'example' => 'CN',
                  ),
                  'BeginFrequency' => 
                  array (
                    'description' => '起始频点，单位为MHz。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '923',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"EndFrequency\\": 925,\\n    \\"GroupId\\": 201,\\n    \\"FrequencyType\\": \\"SAME_FREQUENCY\\",\\n    \\"FrequencyRegionId\\": \\"CN\\",\\n    \\"BeginFrequency\\": 923\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetFreqBandPlanGroupResponse>\\r\\n      <Data>\\r\\n            <BeginFrequency>923</BeginFrequency>\\r\\n            <EndFrequency>925</EndFrequency>\\r\\n            <FrequencyRegionId>CN</FrequencyRegionId>\\r\\n            <GroupId>201</GroupId>\\r\\n            <FrequencyType>SAME_FREQUENCY</FrequencyType>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetFreqBandPlanGroupResponse>","errorExample":""}]',
      'title' => '获取频段信息',
      'summary' => '调用GetFreqBandPlanGroup获取频段信息。',
    ),
    'GetGatewayPacketStat' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'example' => 'iot-***-v6***',
          ),
        ),
        1 => 
        array (
          'name' => 'GwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的网关的GwEUI。',
            'type' => 'string',
            'required' => true,
            'example' => '0000000000000000',
          ),
        ),
        2 => 
        array (
          'name' => 'BeginMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1514766000000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，单位为毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1514766000000',
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
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'UplinkInvalid' => 
                  array (
                    'description' => '无效上行包计数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'UplinkValid' => 
                  array (
                    'description' => '有效上行包计数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'DownlinkValid' => 
                  array (
                    'description' => '有效下行包计数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'DownlinkInvalid' => 
                  array (
                    'description' => '无效下行包计数。',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"UplinkInvalid\\": 0,\\n    \\"UplinkValid\\": 0,\\n    \\"DownlinkValid\\": 0,\\n    \\"DownlinkInvalid\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetGatewayPacketStatResponse>\\r\\n      <Data>\\r\\n            <UplinkInvalid>0</UplinkInvalid>\\r\\n            <DownlinkInvalid>0</DownlinkInvalid>\\r\\n            <UplinkValid>0</UplinkValid>\\r\\n            <DownlinkValid>0</DownlinkValid>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetGatewayPacketStatResponse>","errorExample":""}]',
      'title' => '获取网关有效包无效包统计',
      'summary' => '调用GetGatewayPacketStat获取网关有效包无效包统计。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetGatewayTransferPacketsDownloadUrl' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'GwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的网关的GwEUI。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1514736000000',
          ),
        ),
        2 => 
        array (
          'name' => 'DevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据DevEUI过滤数据包。',
            'type' => 'string',
            'required' => false,
            'example' => '0000000000000001',
          ),
        ),
        3 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据包分类。取值：

- **DOWNLINK_PACKET**：下行包
- **UPLINK_PACKET**：上行包
- **INVALID_PACKET**：无效包',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DOWNLINK_PACKET',
            'enum' => 
            array (
              0 => 'DOWNLINK_PACKET',
              1 => 'UPLINK_PACKET',
              2 => 'INVALID_PACKET',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'BeginMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，毫秒为单位的UNIX时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1514736000000',
          ),
        ),
        5 => 
        array (
          'name' => 'EndMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，毫秒为单位的UNIX时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1514736000000',
          ),
        ),
        6 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段。取值：**LOG_MILLIS**，表示按照时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'LOG_MILLIS',
            'enum' => 
            array (
              0 => 'LOG_MILLIS',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '数据包统计文件下载地址。',
                'type' => 'string',
                'example' => 'http://xxx.xxx.xxx/xxx.csv',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"http://xxx.xxx.xxx/xxx.csv\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetGatewayTransferPacketsDownloadUrlResponse>\\r\\n      <Data>http://xxx.xxx.xxx/xxx.csv</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetGatewayTransferPacketsDownloadUrlResponse>","errorExample":""}]',
      'title' => '获取下载链接',
      'summary' => '该链接指向一个CSV文件，其中包括了网关上下行数据包的统计数据。',
    ),
    'GetGatewayTupleOrder' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工单 Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
              ),
              'Data' => 
              array (
                'description' => '网关安全密钥工单信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AcceptedMillis' => 
                  array (
                    'description' => '工单审批通过的 UNIX 时间戳，以毫秒为单位。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514822400000',
                  ),
                  'RequiredCount' => 
                  array (
                    'description' => '工单申请的网关安全密钥数量。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'CreatedMillis' => 
                  array (
                    'description' => '提交此工单的 UNIX 时间戳，以毫秒为单位。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000000',
                  ),
                  'OrderState' => 
                  array (
                    'description' => '工单的状态。

参考工单状态取值
',
                    'type' => 'string',
                    'example' => 'ACCEPTED',
                  ),
                  'OrderId' => 
                  array (
                    'description' => '工单 Id。
',
                    'type' => 'string',
                    'example' => '1234',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Data\\": {\\n    \\"AcceptedMillis\\": 1514822400000,\\n    \\"RequiredCount\\": 10,\\n    \\"CreatedMillis\\": 1514736000000,\\n    \\"OrderState\\": \\"ACCEPTED\\",\\n    \\"OrderId\\": \\"1234\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>\\n    <OrderId>1234</OrderId>\\n    <OrderState>ACCEPTED</OrderState>\\n    <RequiredCount>1</RequiredCount>\\n    <CreatedMillis>1514736000000</CreatedMillis>\\n    <AcceptedMillis>1514822400000</AcceptedMillis>\\n</Data>","errorExample":""}]',
      'title' => '获取网关安全密钥工单信息',
      'summary' => '获取网关安全密钥工单的信息，传入工单 ID, 返回此工单的处理状态等信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '# 类型说明

### 工单状态取值

| 名称 | 类型 | 说明 |
| --- | --- | --- |
| APPLYING | String | 申请中。 |
| REJECTED | String | 已拒绝。 |
| ACCEPTING | String | 颁发中。 |
| ACCEPTING_FAILED | String | 颁发失败。 |
| ACCEPTED | String | 颁发成功。 |
| REVOKING | String | 撤回中。 |
| REVOKING_FAILED | String | 撤回失败。 |
| REVOKED | String | 撤回成功。 |
',
      'extraInfo' => ' ',
    ),
    'GetGatewayTuplesDownloadUrl' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工单 Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '网关安全元组文件下载链接。',
                'type' => 'string',
                'example' => 'http://xxx.xxx/xxx.csv',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
              ),
              'Success' => 
              array (
                'description' => '是否成功。

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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
          5 => 
          array (
            'errorCode' => 'GatewayTupleOrderNotAccepted',
            'errorMessage' => 'The order on gateway tuple downloading is not approved. You cannot download the gateway tuple.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"http://xxx.xxx/xxx.csv\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>http://xxx.xxx/xxx.csv</Data>","errorExample":""}]',
      'title' => '获取网关安全元组下载链接',
      'summary' => '网关安全元组工单审批通过后，可以获取一个下载链接，该链接指向一个 CSV 文件，其中存储了颁发给该用户的网关安全元组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetJoinPermissionAuthOrder' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权工单ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '授权工单的详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'CanceledMillis' => 
                  array (
                    'description' => '工单被取消的 UNIX 时间戳，以毫秒为单位。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000000',
                  ),
                  'ApplyingMillis' => 
                  array (
                    'description' => '发起工单的 UNIX 时间戳，以毫秒为单位。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000000',
                  ),
                  'RenterAliyunId' => 
                  array (
                    'description' => '专用入网凭证的目标租户的阿里云账号ID。',
                    'type' => 'string',
                    'example' => 'some_user',
                  ),
                  'AcceptedMillis' => 
                  array (
                    'description' => '工单被接受的 UNIX 时间戳，以毫秒为单位。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000000',
                  ),
                  'OwnerAliyunId' => 
                  array (
                    'description' => '发起授权的专用入网凭证拥有者的阿里云账号ID。',
                    'type' => 'string',
                    'example' => 'some_user',
                  ),
                  'RejectedMillis' => 
                  array (
                    'description' => '工单被回绝的 UNIX 时间戳，以毫秒为单位。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000000',
                  ),
                  'JoinPermissionId' => 
                  array (
                    'description' => '要授权的专用入网凭证ID。',
                    'type' => 'string',
                    'example' => '123456',
                  ),
                  'OrderState' => 
                  array (
                    'description' => '工单状态。取值：

- **APPLYING**：工单发起，等待目标租户处理。
- **ACCEPTED**：工单被接受。
- **REJECTED**：工单被回绝。
- **CANCELED**：工单被取消。',
                    'type' => 'string',
                    'example' => 'ACCEPTED',
                  ),
                  'OrderId' => 
                  array (
                    'description' => '授权工单ID。',
                    'type' => 'string',
                    'example' => '123',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          3 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"CanceledMillis\\": 1514736000000,\\n    \\"ApplyingMillis\\": 1514736000000,\\n    \\"RenterAliyunId\\": \\"some_user\\",\\n    \\"AcceptedMillis\\": 1514736000000,\\n    \\"OwnerAliyunId\\": \\"some_user\\",\\n    \\"RejectedMillis\\": 1514736000000,\\n    \\"JoinPermissionId\\": \\"123456\\",\\n    \\"OrderState\\": \\"ACCEPTED\\",\\n    \\"OrderId\\": \\"123\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetJoinPermissionAuthOrderResponse>\\r\\n      <Data>\\r\\n            <OrderId>123</OrderId>\\r\\n            <CanceledMillis>1514736000000</CanceledMillis>\\r\\n            <RejectedMillis>1514736000000</RejectedMillis>\\r\\n            <ApplyingMillis>1514736000000</ApplyingMillis>\\r\\n            <RenterAliyunId>some_user</RenterAliyunId>\\r\\n            <OrderState>ACCEPTED</OrderState>\\r\\n            <OwnerAliyunId>some_user</OwnerAliyunId>\\r\\n            <JoinPermissionId>123456</JoinPermissionId>\\r\\n            <AcceptedMillis>1514736000000</AcceptedMillis>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetJoinPermissionAuthOrderResponse>","errorExample":""}]',
      'title' => '获取专用凭证授权工单的详细信息',
      'summary' => '调用GetJoinPermissionAuthOrder获取专用凭证授权工单的详细信息。',
    ),
    'GetNode' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点的DevEUI。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0000000000000000',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '节点信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'DevAddr' => 
                  array (
                    'description' => '节点的网络地址。',
                    'type' => 'string',
                    'example' => '12345678',
                  ),
                  'LastJoinMillis' => 
                  array (
                    'description' => '最近一次入网的时间，UNIX时间戳，以毫秒为单位。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000000',
                  ),
                  'DevEui' => 
                  array (
                    'description' => '节点的DevEUI。',
                    'type' => 'string',
                    'example' => '0000000000000000',
                  ),
                  'BoundMillis' => 
                  array (
                    'description' => '节点加入当前节点分组的时间，UNIX时间戳，以毫秒为单位。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000000',
                  ),
                  'ClassMode' => 
                  array (
                    'description' => '节点所采用的LoRaWAN Class模式，可取值：A、B、C。',
                    'type' => 'string',
                    'example' => 'A',
                  ),
                  'AuthTypes' => 
                  array (
                    'type' => 'string',
                    'items' => 
                    array (
                      'description' => '网关合约类型。

- HYBRID：hybrid网关
- SINGLE_CHANNEL：单通道网关
- STANDARD：标准合约网关',
                      'type' => 'string',
                      'example' => 'STANDARD',
                      'index' => 200,
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"LastJoinMillis\\": 1514736000000,\\n    \\"DevAddr\\": \\"12345678\\",\\n    \\"DevEui\\": \\"0000000000000000\\",\\n    \\"BoundMillis\\": 1514736000000,\\n    \\"ClassMode\\": \\"A\\",\\n    \\"AuthTypes\\": [\\n      \\"STANDARD\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetNodeResponse>\\r\\n      <Data>\\r\\n            <ClassMode>A</ClassMode>\\r\\n            <BoundMillis>1514736000000</BoundMillis>\\r\\n            <LastJoinMillis>1514736000000</LastJoinMillis>\\r\\n            <DevEui>0000000000000000</DevEui>\\r\\n            <DevAddr>12345678</DevAddr>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetNodeResponse>","errorExample":""}]',
      'title' => '获取节点信息',
      'summary' => '调用GetNode获取节点信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetNodeGroupTransferPacketsDownloadUrl' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'example' => 'iot-***-v6***',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点分组ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'DevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据DevEUI过滤数据包。',
            'type' => 'string',
            'required' => false,
            'example' => '0000000000000001',
          ),
        ),
        3 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据包分类。取值：

- **DOWNLINK_PACKET**：下行包。
- **UPLINK_PACKET**：上行包。',
            'type' => 'string',
            'required' => true,
            'example' => 'DOWNLINK_PACKET',
            'enum' => 
            array (
              0 => 'DOWNLINK_PACKET',
              1 => 'UPLINK_PACKET',
              2 => 'INVALID_PACKET',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'BeginMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，毫秒为单位的UNIX时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1514736000000',
          ),
        ),
        5 => 
        array (
          'name' => 'EndMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，毫秒为单位的UNIX时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1514736000000',
          ),
        ),
        6 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段。取值：**LOG_MILLIS**，表示按照时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'LOG_MILLIS',
            'enum' => 
            array (
              0 => 'LOG_MILLIS',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需配合**SortingField**参数一起使用。

- **true**：升序。

- **false**：降序。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '数据包统计文件下载地址。',
                'type' => 'string',
                'example' => 'http://xxx.xxx.xxx/xxx.csv',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"http://xxx.xxx.xxx/xxx.csv\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetNodeGroupTransferPacketsDownloadUrlResponse>\\r\\n      <Data>http://xxx.xxx.xxx/xxx.csv</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetNodeGroupTransferPacketsDownloadUrlResponse>","errorExample":""}]',
      'title' => '获取下载链接',
      'summary' => '该链接指向一个CSV文件，其中包括了节点分组上下行数据包的统计数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetNodeTransferPacket' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'example' => 'iot-cn-0pp1n8t****',
          ),
        ),
        1 => 
        array (
          'name' => 'DevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据包所涉及的DevEUI，为16位HEX。',
            'type' => 'string',
            'required' => true,
            'example' => '0000000000000001',
          ),
        ),
        2 => 
        array (
          'name' => 'Base64EncodedMacPayload',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Base64编码后的MACPayload报文，可调用[ListNodeGroupTransferPackets](~~109959~~)接口查询获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'SGVsbG8hIQ==',
          ),
        ),
        3 => 
        array (
          'name' => 'LogMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据包的发送时间，可调用[ListNodeGroupTransferPackets](~~109959~~)接口查询获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1514736000000',
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
              'Success' => 
              array (
                'description' => '是否调用成功。返回值：
- **true**：调用成功。
- ** false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '调用成功时返回的数据包信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'GwOwnerAliyunId' => 
                  array (
                    'description' => '数据包所经过网关所属用户的阿里云账号。',
                    'type' => 'string',
                    'example' => 'XXX',
                  ),
                  'LogMillis' => 
                  array (
                    'description' => '数据包传输的UNIX时间戳，以毫秒为单位。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000000',
                  ),
                  'ProcessEvent' => 
                  array (
                    'description' => '该报文的处理结果。返回值：

- **SUCCESS**：成功。
- **DEVADDR_ILLEGAL**：**DevAddr**不合法。
- **MIC_FAIL**：MIC校验失败。
- **DEVEUI_ILLEGAL**：**DevEUI**不合法。
- **JOINEUI_ILLEGAL**：**JoinEUI**不合法。
- **STATUS_INVALID**：节点状态不合法。
- **REDUPLICATE**：重复包。
- **ISOLATED**：网间隔离。
- **APPKEY_ILLEGAL**：**AppKey**不合法。
- **UPDATE_RUNTIME_CFG_FAIL**：更新运行时配置失败。
- **DELAY_PROCESS**：延迟处理。
- **GWEUI_ILLEGAL**：**GwEUI**不合法。
- **GW_STATUS_INVALID**：网关状态不合法。
- **GW_FREQ_NOT_MATCH**：网关频点不匹配。
- **其它**：未知错误。',
                    'type' => 'string',
                    'example' => 'SUCCESS',
                  ),
                  'Base64EncodedMacPayload' => 
                  array (
                    'description' => 'Base64编码后的MACPayload报文。',
                    'type' => 'string',
                    'example' => 'SGVsbG8hIQ==',
                  ),
                  'FPort' => 
                  array (
                    'description' => '收发此数据包时所使用的FPort。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '99',
                  ),
                  'Lsnr' => 
                  array (
                    'description' => '收发此数据包的信噪比。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '-10.5',
                  ),
                  'FreqBandPlanGroupId' => 
                  array (
                    'description' => '数据包所经过的网关所采用的频段ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '101',
                  ),
                  'HasData' => 
                  array (
                    'description' => '此数据包中是否包含业务数据。返回值：

- **true**：包含。
- **false**：不包含。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ClassMode' => 
                  array (
                    'description' => '收发此数据包时的LoRaWAN Class模式。',
                    'type' => 'string',
                    'example' => 'C',
                  ),
                  'MacPayloadSize' => 
                  array (
                    'description' => '此数据包的MACPayload报文长度。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '15',
                  ),
                  'MessageType' => 
                  array (
                    'description' => '消息类型。返回值：

- **JOIN_REQUEST**：Join-request消息。
- **JOIN_ACCEPT**：Join-accept消息。
- **UNCONFIRMED_UP**：Unconfirmed上行消息。
- **UNCONFIRMED_DOWN**：Unconfirmed下行消息。
- **CONFIRMED_UP**：Confirmed上行消息。
- **CONFIRMED_DOWN**：Confirmed下行消息。
- **REJOIN_REQUEST**：Rejoin-request消息。
- **PROPRIETARY**：Proprietary消息（私有消息）。',
                    'type' => 'string',
                    'example' => 'JOIN_REQUEST',
                  ),
                  'Datr' => 
                  array (
                    'description' => '收发此数据包的数据速率。',
                    'type' => 'string',
                    'example' => 'SF12BW125',
                  ),
                  'DevAddr' => 
                  array (
                    'description' => '收发此数据包的节点的网络地址。',
                    'type' => 'string',
                    'example' => '00000000',
                  ),
                  'DevEui' => 
                  array (
                    'description' => '收发此数据包的节点的DevEUI。',
                    'type' => 'string',
                    'example' => '0000000000000001',
                  ),
                  'GwEui' => 
                  array (
                    'description' => '收发此数据包所经过的网关的GwEUI。',
                    'type' => 'string',
                    'example' => '0000000000000000',
                  ),
                  'Rssi' => 
                  array (
                    'description' => '收发此数据包的RSSI。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '-110',
                  ),
                  'HasMacCommand' => 
                  array (
                    'description' => '此数据包中是否包含MAC指令。返回值：

- **true**：包含。
- **false**：不包含。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Freq' => 
                  array (
                    'description' => '收发此数据包的频点。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '470.3',
                  ),
                  'MacCommandCIDs' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '这个数据包所携带的MAC指令列表。',
                      'type' => 'object',
                      'example' => '["0x01","0x02"]',
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
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          1 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          2 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          3 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          4 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          5 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"GwOwnerAliyunId\\": \\"XXX\\",\\n    \\"LogMillis\\": 1514736000000,\\n    \\"ProcessEvent\\": \\"SUCCESS\\",\\n    \\"Base64EncodedMacPayload\\": \\"SGVsbG8hIQ==\\",\\n    \\"FPort\\": 99,\\n    \\"Lsnr\\": -10.5,\\n    \\"FreqBandPlanGroupId\\": 101,\\n    \\"HasData\\": true,\\n    \\"ClassMode\\": \\"C\\",\\n    \\"MacPayloadSize\\": 15,\\n    \\"MessageType\\": \\"JOIN_REQUEST\\",\\n    \\"Datr\\": \\"SF12BW125\\",\\n    \\"DevAddr\\": \\"00000000\\",\\n    \\"DevEui\\": \\"0000000000000001\\",\\n    \\"GwEui\\": \\"0000000000000000\\",\\n    \\"Rssi\\": -110,\\n    \\"HasMacCommand\\": true,\\n    \\"Freq\\": 470.3,\\n    \\"MacCommandCIDs\\": [\\n      [\\n        \\"0x01\\",\\n        \\"0x02\\"\\n      ]\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetNodeTransferPacketResponse>\\n    <Success>true</Success>\\n    <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n    <Data>\\n        <GwOwnerAliyunId>XXX</GwOwnerAliyunId>\\n        <LogMillis>1514736000000</LogMillis>\\n        <ProcessEvent>SUCCESS</ProcessEvent>\\n        <Base64EncodedMacPayload>SGVsbG8hIQ==</Base64EncodedMacPayload>\\n        <FPort>99</FPort>\\n        <Lsnr>-10.5</Lsnr>\\n        <FreqBandPlanGroupId>101</FreqBandPlanGroupId>\\n        <HasData>true</HasData>\\n        <ClassMode>C</ClassMode>\\n        <MacPayloadSize>15</MacPayloadSize>\\n        <MessageType>JOIN_REQUEST</MessageType>\\n        <Datr>SF12BW125</Datr>\\n        <DevAddr>00000000</DevAddr>\\n        <DevEui>0000000000000001</DevEui>\\n        <GwEui>0000000000000000</GwEui>\\n        <Rssi>-110</Rssi>\\n        <HasMacCommand>true</HasMacCommand>\\n        <Freq>470.3</Freq>\\n        <MacCommandCIDs/>\\n    </Data>\\n</GetNodeTransferPacketResponse>","errorExample":""}]',
      'title' => '获取某条节点上下行数据包',
      'summary' => '调用GetNodeTransferPacket获取某条节点上下行数据包。',
      'description' => '# 限制说明

单阿里云账号调用该接口的每秒请求数（QPS）最大限制为5。

> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~108601~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetNodeTransferPacketsDownloadUrl' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据 GwEUI 过滤数据包。
',
            'type' => 'string',
            'required' => false,
            'example' => '0000000000000001',
          ),
        ),
        1 => 
        array (
          'name' => 'DevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据 DevEUI 过滤数据包。
',
            'type' => 'string',
            'required' => true,
            'example' => '0000000000000001',
          ),
        ),
        2 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据包分类，可选：DOWNLINK_PACKET（下行包）、UPLINK_PACKET（上行包）、INVALID_PACKET（无效包）。
',
            'type' => 'string',
            'required' => true,
            'example' => 'DOWNLINK_PACKET',
            'enum' => 
            array (
              0 => 'DOWNLINK_PACKET',
              1 => 'UPLINK_PACKET',
              2 => 'INVALID_PACKET',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'BeginMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，毫秒为单位的 UNIX 时间戳。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1514736000000',
          ),
        ),
        4 => 
        array (
          'name' => 'EndMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，毫秒为单位的 UNIX 时间戳。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1514736000000',
          ),
        ),
        5 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，可选 LOG_MILLIS（按照时间排序）。
',
            'type' => 'string',
            'required' => false,
            'example' => 'LOG_MILLIS',
            'enum' => 
            array (
              0 => 'LOG_MILLIS',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配合 SortingField 参数一起使用，true 表示升序，false 表示降序。

默认降序。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '数据包统计文件下载地址。',
                'type' => 'string',
                'example' => 'http://xxx.xxx.xxx/xxx.csv',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
              ),
              'Success' => 
              array (
                'description' => '是否成功。

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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"http://xxx.xxx.xxx/xxx.csv\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>http://xxx.xxx.xxx/xxx.csv</Data>","errorExample":""}]',
      'title' => '获取下载链接',
      'summary' => '该链接指向一个 CSV 文件，其中包括了节点上下行数据包的统计数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetNodeTupleOrder' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工单 Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
              ),
              'Data' => 
              array (
                'description' => '节点安全元组工单信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'RequiredCount' => 
                  array (
                    'description' => '工单申请的节点安全密钥数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'CreatedMillis' => 
                  array (
                    'description' => '提交工单的 UNIX 时间戳，以毫秒为单位。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000000',
                  ),
                  'IsKpm' => 
                  array (
                    'description' => '是否是安全产线发起的密钥申请。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'AcceptedMillis' => 
                  array (
                    'description' => '工单审批通过的 UNIX 时间戳，以毫秒为单位。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514822400000',
                  ),
                  'OrderId' => 
                  array (
                    'description' => '工单 Id。',
                    'type' => 'string',
                    'example' => '1234',
                  ),
                  'OrderState' => 
                  array (
                    'description' => '工单状态。

审批状态取值

APPLYING		申请中。
ACCEPTING		颁发中。
ACCEPTED		颁发成功。
ACCEPTING_FAILED		颁发失败。
REJECTED		已拒绝。
REVOKING		撤回中。
REVOKING_FAILED		撤回失败。
REVOKED		撤回成功。',
                    'type' => 'string',
                    'example' => 'ACCEPTED',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Data\\": {\\n    \\"RequiredCount\\": 10,\\n    \\"CreatedMillis\\": 1514736000000,\\n    \\"IsKpm\\": false,\\n    \\"AcceptedMillis\\": 1514822400000,\\n    \\"OrderId\\": \\"1234\\",\\n    \\"OrderState\\": \\"ACCEPTED\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>\\n    <OrderId>1234</OrderId>\\n    <IsKpm>false</IsKpm>\\n    <OrderState>ACCEPTED</OrderState>\\n    <RequiredCount>1</RequiredCount>\\n    <CreatedMillis>1514736000000</CreatedMillis>\\n    <AcceptedMillis>1514822400000</AcceptedMillis>\\n</Data>","errorExample":""}]',
      'title' => '获取节点安全元组工单信息',
      'summary' => '获取节点安全元组工单信息，传入工单 ID, 返回此工单的处理状态等信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '# 类型说明

### 审批状态取值

| 名称 | 类型 | 说明 |
| --- | --- | --- |
| APPLYING | String | 申请中。 |
| ACCEPTING | String | 颁发中。 |
| ACCEPTED | String | 颁发成功。 |
| ACCEPTING_FAILED | String | 颁发失败。 |
| REJECTED | String | 已拒绝。 |
| REVOKING | String | 撤回中。 |
| REVOKING_FAILED | String | 撤回失败。 |
| REVOKED | String | 撤回成功。 |',
      'extraInfo' => ' ',
    ),
    'GetNodeTuplesDownloadUrl' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工单 Id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '节点安全密钥文件下载链接。',
                'type' => 'string',
                'example' => 'http://xxx.xxx/xxx.csv',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
              ),
              'Success' => 
              array (
                'description' => '是否成功。

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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"http://xxx.xxx/xxx.csv\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>http://xxx.xxx/xxx.csv</Data>","errorExample":""}]',
      'title' => '获取节点安全元组下载链接',
      'summary' => '节点安全元组工单审批通过后，可以获取一个下载链接，该链接指向一个 CSV 文件，其中存储了颁发给该用户的节点安全元组。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetNotification' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NotificationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通知ID。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '通知信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'NoticeMillis' => 
                  array (
                    'description' => '通知发出的时间，毫秒为单位的UNIX时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000000',
                  ),
                  'Category' => 
                  array (
                    'description' => '通知分类。取值：

- **GATEWAY_OFFLINE**：网关离线信息。
- **JOIN_PERMISSION_AUTH_APPLYING**：凭证授权中。
- **JOIN_PERMISSION_AUTH_ACCEPTED**：凭证授权成功。
- **JOIN_PERMISSION_AUTH_CANCELED**：撤销凭证授权。
- **JOIN_PERMISSION_AUTH_REJECTED**：拒绝凭证授权。',
                    'type' => 'string',
                    'example' => 'GATEWAY_OFFLINE',
                  ),
                  'HandleState' => 
                  array (
                    'description' => '此通知的处理状态。可取值为：

- **HANDLED**：已处理。

- **UNHANDLED**：未处理。',
                    'type' => 'string',
                    'example' => 'UNHANDLED',
                  ),
                  'NotificationId' => 
                  array (
                    'description' => '通知ID。',
                    'type' => 'string',
                    'example' => '123',
                  ),
                  'HandledMillis' => 
                  array (
                    'description' => '通知被处理的时间，毫秒为单位的UNIX时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000001',
                  ),
                  'GatewayOfflineInfo' => 
                  array (
                    'description' => '网关离线信息。

当**Category**字段为**GATEWAY_OFFLINE**时，该字段有值。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'GwEui' => 
                      array (
                        'description' => '网关唯一标识。',
                        'type' => 'string',
                        'example' => '0000000000000000',
                      ),
                      'OfflineMillis' => 
                      array (
                        'description' => '离线时间，毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1514736000000',
                      ),
                    ),
                  ),
                  'JoinPermissionAuthInfo' => 
                  array (
                    'description' => '凭证授权信息。

当**Category**字段为**JOINPERMISSION_AUTH**时该字段有值。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CanceledMillis' => 
                      array (
                        'description' => '工单被取消的UNIX时间戳，毫秒为单位。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1514736000000',
                      ),
                      'ApplyingMillis' => 
                      array (
                        'description' => '发起工单的UNIX时间戳，毫秒为单位。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1514736000000',
                      ),
                      'JoinEui' => 
                      array (
                        'description' => '入网凭证所使用的JoinEUI。',
                        'type' => 'string',
                        'example' => 'd896e0',
                      ),
                      'RenterAliyunId' => 
                      array (
                        'description' => '入网凭证租户的阿里云账号ID。',
                        'type' => 'string',
                        'example' => 'some-user2',
                      ),
                      'AcceptedMillis' => 
                      array (
                        'description' => '工单审批通过的UNIX时间戳 ，毫秒为单位。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1514736000000',
                      ),
                      'OwnerAliyunId' => 
                      array (
                        'description' => '发起授权的入网凭证拥有者的阿里云账号ID。',
                        'type' => 'string',
                        'example' => 'some-user1',
                      ),
                      'RejectedMillis' => 
                      array (
                        'description' => '工单被拒绝的UNIX时间戳，毫秒为单位。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1514736000000',
                      ),
                      'JoinPermissionId' => 
                      array (
                        'description' => '唯一标识入网凭证的ID。',
                        'type' => 'string',
                        'example' => '123',
                      ),
                      'JoinPermissionName' => 
                      array (
                        'description' => '入网凭证的名称。',
                        'type' => 'string',
                        'example' => '凭证1',
                      ),
                      'OrderState' => 
                      array (
                        'description' => '工单状态。取值：

- **APPLYING**：工单发起，等待批准。
- **ACCEPTED**：工单被批准。
- **REJECTED**：工单被拒绝。
- **CANCELED**：工单被取消。',
                        'type' => 'string',
                        'example' => '123',
                      ),
                      'OrderId' => 
                      array (
                        'description' => '工单ID。',
                        'type' => 'string',
                        'example' => '123',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          3 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"NoticeMillis\\": 1514736000000,\\n    \\"Category\\": \\"GATEWAY_OFFLINE\\",\\n    \\"HandleState\\": \\"UNHANDLED\\",\\n    \\"NotificationId\\": \\"123\\",\\n    \\"HandledMillis\\": 1514736000001,\\n    \\"GatewayOfflineInfo\\": {\\n      \\"GwEui\\": \\"0000000000000000\\",\\n      \\"OfflineMillis\\": 1514736000000\\n    },\\n    \\"JoinPermissionAuthInfo\\": {\\n      \\"CanceledMillis\\": 1514736000000,\\n      \\"ApplyingMillis\\": 1514736000000,\\n      \\"JoinEui\\": \\"d896e0\\",\\n      \\"RenterAliyunId\\": \\"some-user2\\",\\n      \\"AcceptedMillis\\": 1514736000000,\\n      \\"OwnerAliyunId\\": \\"some-user1\\",\\n      \\"RejectedMillis\\": 1514736000000,\\n      \\"JoinPermissionId\\": \\"123\\",\\n      \\"JoinPermissionName\\": \\"凭证1\\",\\n      \\"OrderState\\": \\"123\\",\\n      \\"OrderId\\": \\"123\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetNotificationResponse>\\r\\n      <Data>\\r\\n            <Category>GATEWAY_OFFLINE</Category>\\r\\n            <GatewayOfflineInfo>\\r\\n                  <GwEui>0000000000000000</GwEui>\\r\\n                  <OfflineMillis>1514736000000</OfflineMillis>\\r\\n            </GatewayOfflineInfo>\\r\\n            <HandleUtcMilli>1514736000001</HandleUtcMilli>\\r\\n            <HandleState>UNHANDLED</HandleState>\\r\\n            <NotificationId>123</NotificationId>\\r\\n            <NoticeUtcMilli>1514736000000</NoticeUtcMilli>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetNotificationResponse>","errorExample":""}]',
      'title' => '获取通知信息',
      'summary' => '调用GetNotification获取通知信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetOwnedJoinPermission' => 
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
      'operationType' => 'read',
      'deprecated' => false,
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'JoinPermissionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要获取的入网凭证的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '所拥有入网凭证的信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'RxMonthSum' => 
                  array (
                    'description' => '入网凭证的当月上行数据包量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'MulticastNodeCapacity' => 
                  array (
                    'description' => '入网凭证可接入组播节点容量。

',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1000',
                  ),
                  'MulticastEnabled' => 
                  array (
                    'description' => '入网凭证组播的启停用状态。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'TxMonthSum' => 
                  array (
                    'description' => '入网凭证的当月下行数据包量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'FreqBandPlanGroupId' => 
                  array (
                    'description' => '入网凭证所采用的频段的频段ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '102',
                  ),
                  'TxDailySum' => 
                  array (
                    'description' => '入网凭证的当天下行数据包量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'BoundProductName' => 
                  array (
                    'type' => 'string',
                  ),
                  'DataRate' => 
                  array (
                    'description' => '工作速率。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '4',
                  ),
                  'JoinPermissionId' => 
                  array (
                    'description' => '入网凭证ID。',
                    'type' => 'string',
                    'example' => '123',
                  ),
                  'ClassMode' => 
                  array (
                    'description' => '入网凭证采用的LoRaWAN Class模式。取值：A、B、C。',
                    'type' => 'string',
                    'example' => 'A',
                  ),
                  'DataDispatchDestination' => 
                  array (
                    'description' => '数据流转目的地。取值：

- **IOT**：数据流转到IoT的产品。
- **ONS**：数据流转到MQ的Topic。',
                    'type' => 'string',
                    'example' => 'IOT',
                  ),
                  'MulticastNodeCount' => 
                  array (
                    'description' => '入网凭证已接入组播节点数量。
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'RxDailySum' => 
                  array (
                    'description' => '入网凭证的当天上行数据包量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'JoinEui' => 
                  array (
                    'description' => '入网凭证所使用的JoinEUI。',
                    'type' => 'string',
                    'example' => '0000000000000000',
                  ),
                  'CreateMillis' => 
                  array (
                    'description' => '入网凭证的创建时间。格式为 UNIX 时间戳，单位毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000000',
                  ),
                  'Enabled' => 
                  array (
                    'description' => '入网凭证的启停用状态。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'RxDelay' => 
                  array (
                    'description' => 'classA的接收窗口延时。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'RenterAliyunId' => 
                  array (
                    'description' => '入网凭证租户的阿里云账号ID。',
                    'type' => 'string',
                    'example' => 'some-user',
                  ),
                  'NodesCnt' => 
                  array (
                    'description' => '使用该入网凭证的节点的数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'JoinPermissionName' => 
                  array (
                    'description' => '入网凭证的名称。',
                    'type' => 'string',
                    'example' => '凭证1',
                  ),
                  'AuthState' => 
                  array (
                    'description' => '入网凭证的授权状态。取值：

- **NEW**：未授权
- **APPLYING**：授权中
- **ACCEPTED**：已授权',
                    'type' => 'string',
                    'example' => 'NEW',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"RxMonthSum\\": 0,\\n    \\"MulticastNodeCapacity\\": 1000,\\n    \\"MulticastEnabled\\": false,\\n    \\"TxMonthSum\\": 0,\\n    \\"FreqBandPlanGroupId\\": 102,\\n    \\"TxDailySum\\": 0,\\n    \\"DataRate\\": 4,\\n    \\"JoinPermissionId\\": \\"123\\",\\n    \\"ClassMode\\": \\"A\\",\\n    \\"DataDispatchDestination\\": \\"IOT\\",\\n    \\"MulticastNodeCount\\": 10,\\n    \\"RxDailySum\\": 0,\\n    \\"JoinEui\\": \\"0000000000000000\\",\\n    \\"CreateMillis\\": 1514736000000,\\n    \\"Enabled\\": true,\\n    \\"RxDelay\\": 1,\\n    \\"RenterAliyunId\\": \\"some-user\\",\\n    \\"NodesCnt\\": 10,\\n    \\"JoinPermissionName\\": \\"凭证1\\",\\n    \\"AuthState\\": \\"NEW\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetOwnedJoinPermissionResponse>\\r\\n      <Data>\\r\\n            <JoinEui>0000000000000000</JoinEui>\\r\\n            <ClassMode>A</ClassMode>\\r\\n            <RxDailySum>0</RxDailySum>\\r\\n            <Enabled>true</Enabled>\\r\\n            <CreateMillis>1514736000000</CreateMillis>\\r\\n            <RxMonthSum>0</RxMonthSum>\\r\\n            <RenterAliyunId>some-user</RenterAliyunId>\\r\\n            <TxDailySum>0</TxDailySum>\\r\\n            <NodesCnt>10</NodesCnt>\\r\\n            <TxMonthSum>0</TxMonthSum>\\r\\n            <JoinPermissionId>123</JoinPermissionId>\\r\\n            <DataDispatchDestination>IOT</DataDispatchDestination>\\r\\n            <JoinPermissionName>凭证1</JoinPermissionName>\\r\\n            <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetOwnedJoinPermissionResponse>","errorExample":""}]',
      'title' => '获取入网凭证',
      'summary' => '根据入网凭证ID获取当前用户账号所拥有的入网凭证。',
      'description' => '> 通过该接口获取的一定是当前用户账号所拥有的某个专用入网凭证。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetRentedJoinPermission' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JoinPermissionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入网凭证ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '租用的入网凭证信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '入网凭证的类型。取值：

- **LOCAL**：专用凭证。
- **ROAMING**：泛在凭证。',
                    'type' => 'string',
                    'example' => 'LOCAL',
                  ),
                  'RxMonthSum' => 
                  array (
                    'description' => '入网凭证的当月上行数据包量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'BoundNodeGroupName' => 
                  array (
                    'description' => '凭证绑定的节点组名称。',
                    'type' => 'string',
                    'example' => '123',
                  ),
                  'TxMonthSum' => 
                  array (
                    'description' => '入网凭证的当月下行数据包量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'FreqBandPlanGroupId' => 
                  array (
                    'description' => '入网凭证采用的频段的频段ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '102',
                  ),
                  'TxDailySum' => 
                  array (
                    'description' => '入网凭证的当天下行数据包量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'DataRate' => 
                  array (
                    'description' => '工作速率。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'JoinPermissionId' => 
                  array (
                    'description' => '入网凭证ID。',
                    'type' => 'string',
                    'example' => '123',
                  ),
                  'ClassMode' => 
                  array (
                    'description' => '入网凭证采用的LoRaWAN Class模式，可取值：A、B、C。',
                    'type' => 'string',
                    'example' => 'A',
                  ),
                  'RxDailySum' => 
                  array (
                    'description' => '入网凭证的当天上行数据包量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'JoinEui' => 
                  array (
                    'description' => '入网凭证使用的JoinEUI。',
                    'type' => 'string',
                    'example' => '0000000000000000',
                  ),
                  'CreateMillis' => 
                  array (
                    'description' => '入网凭证的创建时间，格式为 UNIX 时间戳，以毫秒为单位。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1514736000000',
                  ),
                  'Enabled' => 
                  array (
                    'description' => '入网凭证的启停用状态。**true**表示启用，**false**表示停用。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'RxDelay' => 
                  array (
                    'description' => 'classA的接收窗口延时。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'BoundNodeGroupId' => 
                  array (
                    'description' => '凭证绑定的节点组id。',
                    'type' => 'string',
                    'example' => '123',
                  ),
                  'NodesCnt' => 
                  array (
                    'description' => '使用该入网凭证的节点数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'JoinPermissionName' => 
                  array (
                    'description' => '入网凭证的名称。',
                    'type' => 'string',
                    'example' => '凭证1',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"Type\\": \\"LOCAL\\",\\n    \\"RxMonthSum\\": 0,\\n    \\"BoundNodeGroupName\\": \\"123\\",\\n    \\"TxMonthSum\\": 0,\\n    \\"FreqBandPlanGroupId\\": 102,\\n    \\"TxDailySum\\": 0,\\n    \\"DataRate\\": 2,\\n    \\"JoinPermissionId\\": \\"123\\",\\n    \\"ClassMode\\": \\"A\\",\\n    \\"RxDailySum\\": 0,\\n    \\"JoinEui\\": \\"0000000000000000\\",\\n    \\"CreateMillis\\": 1514736000000,\\n    \\"Enabled\\": true,\\n    \\"RxDelay\\": 1,\\n    \\"BoundNodeGroupId\\": \\"123\\",\\n    \\"NodesCnt\\": 10,\\n    \\"JoinPermissionName\\": \\"凭证1\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetRentedJoinPermissionResponse>\\r\\n      <Data>\\r\\n            <JoinEui>0000000000000000</JoinEui>\\r\\n            <ClassMode>A</ClassMode>\\r\\n            <RxDailySum>0</RxDailySum>\\r\\n            <Enabled>true</Enabled>\\r\\n            <CreateMillis>1514736000000</CreateMillis>\\r\\n            <RxMonthSum>0</RxMonthSum>\\r\\n            <TxDailySum>0</TxDailySum>\\r\\n            <NodesCnt>10</NodesCnt>\\r\\n            <TxMonthSum>0</TxMonthSum>\\r\\n            <JoinPermissionId>123</JoinPermissionId>\\r\\n            <type>LOCAL</type>\\r\\n            <JoinPermissionName>凭证1</JoinPermissionName>\\r\\n            <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetRentedJoinPermissionResponse>","errorExample":""}]',
      'title' => '获取租用的入网凭证',
      'summary' => '根据入网凭证ID，获取当前用户账号租用的入网凭证（可能是专用入网凭证或泛在入网凭证）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetUserLicense' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '各项服务的容量与当前使用量。',
                'type' => 'object',
                'properties' => 
                array (
                  'RoamingJoinPermissionCount' => 
                  array (
                    'description' => '泛在入网凭证服务的用量。

针对开发者类的用户，表示当前用户账号已经申请的泛在入网凭证的数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayTupleCount' => 
                  array (
                    'description' => '网关安全元组的服务用量。

表示当前用户账号已经申请了的网关安全元组的数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayTupleSingleChannelCount' => 
                  array (
                    'description' => '单通道网关已用数量。

表示当前用户账号接入服务的单通道网关数量。

',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayFreeLimit' => 
                  array (
                    'description' => '网关接入服务的免费容量。

表示当前用户账号可以免费接入的网关数量上限，其值必然小于等于 GatewayLimit。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'NodeTupleFreeLimit' => 
                  array (
                    'description' => '节点安全元组的免费服务容量。

表示当前用户账号可以申请的免费节点安全元组的数量，其值必然小于等于NodeTupleLimit。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'NodeFreeLimit' => 
                  array (
                    'description' => '节点接入服务的免费容量。

表示当前用户账号可以免费接入的节点数量上限，其值必然小于等于NodeLimit。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayTupleHybridLimit' => 
                  array (
                    'description' => 'hybird网关密钥容量。

表示当前用户账号可以使用的hybird网关密钥数量上限。



',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayTupleStandardCount' => 
                  array (
                    'description' => '网关合约密钥-标准规格已用数量。

表示当前用户账号已用的网关合约密钥-标准规格数量。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayTupleFreeLimit' => 
                  array (
                    'description' => '网关安全元组的免费服务容量。

表示当前用户账号可以申请的免费网关安全元组的数量，其值必然小于等于GatewayTupleLimit。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayCount' => 
                  array (
                    'description' => '网关接入服务的用量。

表示当前用户账号已经接入的网关数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'NodeTupleRelayLimit' => 
                  array (
                    'description' => '中继密钥配额。

表示当前用户账号中继密钥配额。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayLimit' => 
                  array (
                    'description' => '网关接入服务的容量。

表示当前用户账号可以接入的网关数量上限。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayTupleLimit' => 
                  array (
                    'description' => '网关安全元组的服务容量。

表示当前用户账号最多可以申请的网关安全元组的数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'LocalJoinPermissionFreeLimit' => 
                  array (
                    'description' => '专用入网凭证服务的免费容量。

针对网络运营者类的用户，表示当前用户账号可以免费创建的专用入网凭证的数量上限，其值必然小于等于LocalJoinPermissionLimit。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'NodeLimit' => 
                  array (
                    'description' => '节点接入服务的容量。

表示当前用户账号可以接入的节点数量上限。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'RoamingJoinPermissionLimit' => 
                  array (
                    'description' => '泛在入网凭证服务的容量。

针对开发者（解决方案供应商）类的用户，表示当前用户账号可以申请的泛在入网凭证的数量上限。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayTupleSingleChannelLimit' => 
                  array (
                    'description' => '网关单通道密钥配额。

表示当前用户账号网关单通道密钥配额。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'LocalJoinPermissionLimit' => 
                  array (
                    'description' => '专用入网凭证服务的容量。

针对网络运营者类的用户，表示当前用户账号可以创建的专用入网凭证的数量上限。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'Oui' => 
                  array (
                    'description' => 'LoRaWAN模组、设备制造商类的用户的组织码。改组织码会体现在用户申请到的DevEUI中。',
                    'type' => 'string',
                    'example' => '0000',
                  ),
                  'RelayLimit' => 
                  array (
                    'description' => '中继节点配额。

表示当前用户账号中继节点配额。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayTupleHybridCount' => 
                  array (
                    'description' => 'hybird网关密钥已用数量。

表示当前用户账号已经使用的hybird网关密钥数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'LocalJoinPermissionCount' => 
                  array (
                    'description' => '专用入网凭证服务的用量。

针对网络运营者类的用户，表示当前用户账号已经创建的专用入网凭证的数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'NodeTupleStandardCount' => 
                  array (
                    'description' => '节点合约密钥-标准规格已用数量。

表示当前用户账号已用节点合约密钥-标准规格数量。

',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'NodeTupleCount' => 
                  array (
                    'description' => '节点安全元组的服务用量。

表示当前用户账号已经申请了的节点安全元组的数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayDingTalkLimit' => 
                  array (
                    'description' => '钉钉网关接入服务的容量。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayProfessionalLimit' => 
                  array (
                    'description' => '专业网关接入服务的容量。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayProfessionalCount' => 
                  array (
                    'description' => '专业网关接入服务的容量。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'RelayCount' => 
                  array (
                    'description' => '中继节点已用数量。

表示当前用户已用中级节点数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'NodeTupleStandardLimit' => 
                  array (
                    'description' => '节点合约密钥-标准规格限额。

表示当前用户账号可以接入节点合约密钥-标准规格容量。

',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'RoamingJoinPermissionFreeLimit' => 
                  array (
                    'description' => '泛在入网凭证服务的免费容量。

针对开发者类的用户，表示当前用户账号可以免费申请的泛在入网凭证的数量上限，其值必然小于等于RoamingJoinPermissionLimit。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'NodeTupleLimit' => 
                  array (
                    'description' => '节点（LoRaWAN模组）安全元组的服务容量。

表示当前用户账号最多可以申请的节点安全元组的数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'NodeCount' => 
                  array (
                    'description' => '节点接入服务的用量。

表示当前用户账号已经接入的节点数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayDingTalkCount' => 
                  array (
                    'description' => '钉钉网关接入服务的用量。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayTupleStandardLimit' => 
                  array (
                    'description' => '网关合约密钥-标准规格限额。

表示当前用户账号可以接入网关合约密钥-标准规格容量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'GatewayPrePayCount' => 
                  array (
                    'description' => '网关接入服务的预付费数量。

表示当前用户账号已经接入的预付费网关数量。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'NodeTupleRelayCount' => 
                  array (
                    'description' => '中继密钥已用数量。

表示当前用户账号接入的中继密钥数量。
',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"RoamingJoinPermissionCount\\": 100,\\n    \\"GatewayTupleCount\\": 100,\\n    \\"GatewayTupleSingleChannelCount\\": 100,\\n    \\"GatewayFreeLimit\\": 100,\\n    \\"NodeTupleFreeLimit\\": 100,\\n    \\"NodeFreeLimit\\": 100,\\n    \\"GatewayTupleHybridLimit\\": 100,\\n    \\"GatewayTupleStandardCount\\": 100,\\n    \\"GatewayTupleFreeLimit\\": 100,\\n    \\"GatewayCount\\": 100,\\n    \\"NodeTupleRelayLimit\\": 100,\\n    \\"GatewayLimit\\": 100,\\n    \\"GatewayTupleLimit\\": 100,\\n    \\"LocalJoinPermissionFreeLimit\\": 100,\\n    \\"NodeLimit\\": 100,\\n    \\"RoamingJoinPermissionLimit\\": 100,\\n    \\"GatewayTupleSingleChannelLimit\\": 100,\\n    \\"LocalJoinPermissionLimit\\": 100,\\n    \\"Oui\\": \\"0000\\",\\n    \\"RelayLimit\\": 100,\\n    \\"GatewayTupleHybridCount\\": 100,\\n    \\"LocalJoinPermissionCount\\": 100,\\n    \\"NodeTupleStandardCount\\": 100,\\n    \\"NodeTupleCount\\": 100,\\n    \\"GatewayDingTalkLimit\\": 100,\\n    \\"GatewayProfessionalLimit\\": 100,\\n    \\"GatewayProfessionalCount\\": 100,\\n    \\"RelayCount\\": 100,\\n    \\"NodeTupleStandardLimit\\": 100,\\n    \\"RoamingJoinPermissionFreeLimit\\": 100,\\n    \\"NodeTupleLimit\\": 100,\\n    \\"NodeCount\\": 100,\\n    \\"GatewayDingTalkCount\\": 100,\\n    \\"GatewayTupleStandardLimit\\": 100,\\n    \\"GatewayPrePayCount\\": 100,\\n    \\"NodeTupleRelayCount\\": 100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\r\\n<GetUserLicenseResponse>\\r\\n    <Data>\\r\\n        <LabGatewayLimit>100</LabGatewayLimit>\\r\\n        <Oui>0000</Oui>\\r\\n        <GatewayLimit>100</GatewayLimit>\\r\\n        <NodeTupleCount>100</NodeTupleCount>\\r\\n        <RoamingJoinPermissionCount>100</RoamingJoinPermissionCount>\\r\\n        <LocalJoinPermissionCount>100</LocalJoinPermissionCount>\\r\\n        <GatewayTupleCount>100</GatewayTupleCount>\\r\\n        <NodeTupleLimit>100</NodeTupleLimit>\\r\\n        <LocalJoinPermissionLimit>100</LocalJoinPermissionLimit>\\r\\n        <NodeCount>100</NodeCount>\\r\\n        <RoamingJoinPermissionLimit>100</RoamingJoinPermissionLimit>\\r\\n        <GatewayCount>100</GatewayCount>\\r\\n        <LabNodeCount>100</LabNodeCount>\\r\\n        <GatewayTupleLimit>100</GatewayTupleLimit>\\r\\n        <LabNodeLimit>100</LabNodeLimit>\\r\\n        <NodeLimit>100</NodeLimit>\\r\\n        <LabGatewayCount>100</LabGatewayCount>\\r\\n    </Data>\\r\\n    <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n    <Success>true</Success>\\r\\n</GetUserLicenseResponse>","errorExample":""}]',
      'title' => '查询合约信息及合约执行情况',
      'summary' => '查询当前用户账号在物联网络管理平台的合约信息及合约执行情况。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListActivatedFeatures' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Environment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前的调用环境，默认为空，表示公共实例，如果是物联网平台实例化环境，请传入“IotInstance”',
            'type' => 'string',
            'required' => false,
            'example' => 'IotInstance',
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
              'Success' => 
              array (
                'description' => '是否成功。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
              ),
              'Data' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '当前用户账号在物联网络管理平台所能使用的功能的列表。

    GATEWAY_TUPLE：网关密钥管理功能

    NODE_TUPLE：节点密钥管理功能

    NODE：节点管理功能

    GATEWAY：网关管理功能

    LOCAL_JOIN_PERMISSION：本地凭证管理功能

    ROAMING_JOIN_PERMISSION：漫游凭证管理功能

    JOIN_PERMISSION_AUTHORIZATION：凭证权限授受能力

    LAB_NODE：实验室节点功能

    LAB_GATEWAY：实验室网关功能

    NOTIFICATION：通知功能

    UNICAST：单播指令下行功能

    MULTICAST：组播指令下行功能

    RELAY：中继管理功能

    D2D：点对点通信能力
',
                  'type' => 'string',
                  'example' => 'GATEWAY_TUPLE',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Data\\": [\\n    \\"GATEWAY_TUPLE\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>GATEWAY</Data>\\n<Data>JOIN_PERMISSION_AUTHORIZATION</Data>\\n<Data>LOCAL_JOIN_PERMISSION</Data>\\n<Data>ROAMING_JOIN_PERMISSION</Data>\\n<Data>LAB_NODE</Data>\\n<Data>LAB_GATEWAY</Data>\\n<Data>GATEWAY_TUPLE</Data>\\n<Data>NODE_TUPLE</Data>\\n<Data>NOTIFICATION</Data>\\n<Data>KPM_PRODUCT_LINE</Data>\\n<Data>NODE</Data>\\n<Data>UNICAST</Data>\\n<Data>MULTICAST</Data>","errorExample":""}]',
      'title' => '列举物联网络管理平台所能使用的功能',
      'summary' => '列举当前用户账号在物联网络管理平台所能使用的功能。',
      'requestParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListActiveGateways' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '活跃网关列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ChargeStatus' => 
                    array (
                      'description' => '网关欠费状态。

- NORMAL：网关未欠费，正常工作
- ARREARAGE：网关欠费状态',
                      'type' => 'string',
                      'example' => 'NORMAL',
                    ),
                    'District' => 
                    array (
                      'description' => '网关所在城区。',
                      'type' => 'string',
                      'example' => '城区名',
                    ),
                    'FreqBandPlanGroupId' => 
                    array (
                      'description' => '频段ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123',
                    ),
                    'GisCoordinateSystem' => 
                    array (
                      'description' => '网关经纬度所采用的坐标系。',
                      'type' => 'string',
                      'example' => 'GCJ-02',
                    ),
                    'City' => 
                    array (
                      'description' => '网关所在城市。',
                      'type' => 'string',
                      'example' => '城市名',
                    ),
                    'OnlineState' => 
                    array (
                      'description' => '在线状态。',
                      'type' => 'string',
                      'example' => 'ONLINE',
                    ),
                    'CommunicationMode' => 
                    array (
                      'description' => '通信模式。',
                      'type' => 'string',
                      'example' => 'HALF_DUPLEX',
                    ),
                    'Description' => 
                    array (
                      'description' => '网关描述。',
                      'type' => 'string',
                      'example' => '网关描述',
                    ),
                    'Address' => 
                    array (
                      'description' => '网关详细地址。',
                      'type' => 'string',
                      'example' => '详细地址',
                    ),
                    'Longitude' => 
                    array (
                      'description' => '经度。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '123.45678',
                    ),
                    'Latitude' => 
                    array (
                      'description' => '纬度。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '23.45678',
                    ),
                    'GwEui' => 
                    array (
                      'description' => '网关的GwEUI。',
                      'type' => 'string',
                      'example' => '0000000000123456',
                    ),
                    'Name' => 
                    array (
                      'description' => '网关名称。',
                      'type' => 'string',
                      'example' => 'vmeixme',
                    ),
                    'AddressCode' => 
                    array (
                      'description' => '网关地址码。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": [\\n    {\\n      \\"ChargeStatus\\": \\"NORMAL\\",\\n      \\"District\\": \\"城区名\\",\\n      \\"FreqBandPlanGroupId\\": 123,\\n      \\"GisCoordinateSystem\\": \\"GCJ-02\\",\\n      \\"City\\": \\"城市名\\",\\n      \\"OnlineState\\": \\"ONLINE\\",\\n      \\"CommunicationMode\\": \\"HALF_DUPLEX\\",\\n      \\"Description\\": \\"网关描述\\",\\n      \\"Address\\": \\"详细地址\\",\\n      \\"Longitude\\": 123.45678,\\n      \\"Latitude\\": 23.45678,\\n      \\"GwEui\\": \\"0000000000123456\\",\\n      \\"Name\\": \\"vmeixme\\",\\n      \\"AddressCode\\": 123\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListActiveGatewaysResponse>\\r\\n      <Data>\\r\\n            <Gateway>\\r\\n                  <City>某某市</City>\\r\\n                  <Name>网关名称</Name>\\r\\n                  <District>某某区</District>\\r\\n                  <OnlineState>ONLINE</OnlineState>\\r\\n                  <Longitude>123.45678</Longitude>\\r\\n                  <Latitude>23.45678</Latitude>\\r\\n                  <Address>详细地址</Address>\\r\\n                  <GwEui>0000000000123456</GwEui>\\r\\n                  <CommunicateMode>HALF_DUPLEX</CommunicateMode>\\r\\n                  <FreqBandPlanGroupId>123</FreqBandPlanGroupId>\\r\\n                  <AddressCode>123</AddressCode>\\r\\n                  <GisCoordinateSystem>GCJ-02</GisCoordinateSystem>\\r\\n                  <Description>网关描述</Description>\\r\\n            </Gateway>\\r\\n            <Gateway>\\r\\n                  <City>某某市</City>\\r\\n                  <Name>网关名称</Name>\\r\\n                  <District>某某区</District>\\r\\n                  <OnlineState>ONLINE</OnlineState>\\r\\n                  <Longitude>123.45678</Longitude>\\r\\n                  <Latitude>23.45678</Latitude>\\r\\n                  <Address>详细地址</Address>\\r\\n                  <GwEui>0000000001123456</GwEui>\\r\\n                  <CommunicateMode>HALF_DUPLEX</CommunicateMode>\\r\\n                  <FreqBandPlanGroupId>123</FreqBandPlanGroupId>\\r\\n                  <AddressCode>123</AddressCode>\\r\\n                  <GisCoordinateSystem>GCJ-02</GisCoordinateSystem>\\r\\n                  <Description>网关描述</Description>\\r\\n            </Gateway>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListActiveGatewaysResponse>","errorExample":""}]',
      'title' => '查询今日活跃网关',
      'summary' => '调用ListActiveGateways查询今日活跃网关。',
      'description' => '****',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListFreqBandPlanGroups' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '频段列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EndFrequency' => 
                    array (
                      'description' => '结束频点，单位为MHz。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '510',
                    ),
                    'GroupId' => 
                    array (
                      'description' => '频段ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '101',
                    ),
                    'FrequencyType' => 
                    array (
                      'description' => '频段类型。取值范围：

- **SAME_FREQUENCY**：同频
- **DIFF_FREQUENCY**：异频',
                      'type' => 'string',
                      'example' => 'SAME_FREQUENCY',
                    ),
                    'FrequencyRegionId' => 
                    array (
                      'description' => 'Region标识。',
                      'type' => 'string',
                      'example' => 'CN',
                    ),
                    'BeginFrequency' => 
                    array (
                      'description' => '起始频点，单位为MHz。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '470',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": [\\n    {\\n      \\"EndFrequency\\": 510,\\n      \\"GroupId\\": 101,\\n      \\"FrequencyType\\": \\"SAME_FREQUENCY\\",\\n      \\"FrequencyRegionId\\": \\"CN\\",\\n      \\"BeginFrequency\\": 470\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListFreqBandPlanGroupsResponse>\\r\\n      <Data>\\r\\n            <FreqBandPlanGroup>\\r\\n                  <BeginFrequency>470</BeginFrequency>\\r\\n                  <EndFrequency>510</EndFrequency>\\r\\n                  <FrequencyRegionId>CN</FrequencyRegionId>\\r\\n                  <GroupId>101</GroupId>\\r\\n                  <FrequencyType>SAME_FREQUENCY</FrequencyType>\\r\\n            </FreqBandPlanGroup>\\r\\n            <FreqBandPlanGroup>\\r\\n                  <BeginFrequency>470</BeginFrequency>\\r\\n                  <EndFrequency>510</EndFrequency>\\r\\n                  <FrequencyRegionId>CN</FrequencyRegionId>\\r\\n                  <GroupId>102</GroupId>\\r\\n                  <FrequencyType>DIFF_FREQUENCY</FrequencyType>\\r\\n            </FreqBandPlanGroup>\\r\\n            <FreqBandPlanGroup>\\r\\n                  <BeginFrequency>923</BeginFrequency>\\r\\n                  <EndFrequency>925</EndFrequency>\\r\\n                  <FrequencyRegionId>CN</FrequencyRegionId>\\r\\n                  <GroupId>201</GroupId>\\r\\n                  <FrequencyType>SAME_FREQUENCY</FrequencyType>\\r\\n            </FreqBandPlanGroup>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListFreqBandPlanGroupsResponse>","errorExample":""}]',
      'title' => '获取频段列表',
      'summary' => '调用ListFreqBandPlanGroups获取频段列表。',
    ),
    'ListGatewayOnlineRecords' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关的GwEUI。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0000000000000000',
          ),
        ),
        1 => 
        array (
          'name' => 'OffSet',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的起始位置，从0开始的偏移值。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的记录数量上限，大于等于1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '5',
          ),
        ),
        3 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，可选值为：**STATE_CHANGED_MILLIS**，表示按照状态改变时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'STATE_CHANGED_MILLIS',
            'enum' => 
            array (
              0 => 'STATE_CHANGED_MILLIS',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '记录总条数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '25',
                  ),
                  'List' => 
                  array (
                    'description' => '记录列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StateChangedMillis' => 
                        array (
                          'description' => '切换到此状态的时间点，以毫秒为单位的UNIX时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514737000000',
                        ),
                        'OnlineState' => 
                        array (
                          'description' => '在线状态，可取值：**ONLINE**：在线，**OFFLINE**：离线。',
                          'type' => 'string',
                          'example' => 'ONLINE',
                        ),
                        'GwEui' => 
                        array (
                          'description' => '网关的GwEUI。',
                          'type' => 'string',
                          'example' => '000000000000',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 25,\\n    \\"List\\": [\\n      {\\n        \\"StateChangedMillis\\": 1514737000000,\\n        \\"OnlineState\\": \\"ONLINE\\",\\n        \\"GwEui\\": \\"000000000000\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListGatewayOnlineRecordsResponse>\\r\\n      <Data>\\r\\n            <TotalCount>25</TotalCount>\\r\\n            <List>\\r\\n                  <GatewayOnlineRecord>\\r\\n                        <StateChangedMillis>1514737000000</StateChangedMillis>\\r\\n                        <OnlineState>ONLINE</OnlineState>\\r\\n                  </GatewayOnlineRecord>\\r\\n                  <GatewayOnlineRecord>\\r\\n                        <StateChangedMillis>1514737000000</StateChangedMillis>\\r\\n                        <OnlineState>ONLINE</OnlineState>\\r\\n                  </GatewayOnlineRecord>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListGatewayOnlineRecordsResponse>","errorExample":""}]',
      'title' => '查询网关在线离线记录',
      'summary' => '调用ListGatewayOnlineRecords查询网关在线离线记录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListGatewayTransferFlowStats' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'GwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关的GwEUI。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0000000000000000',
          ),
        ),
        2 => 
        array (
          'name' => 'BeginMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，以毫秒为单位的UNIX时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1514736000000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，以毫秒为单位的UNIX时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1514737000000',
          ),
        ),
        4 => 
        array (
          'name' => 'TimeIntervalUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间间隔的单位，可取值为：

- **INTERVAL_IN_HOURS**：按照小时统计
- **INTERVAL_IN_DAYS**：按照天统计',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'INTERVAL_IN_HOURS',
            'enum' => 
            array (
              0 => 'INTERVAL_IN_HOURS',
              1 => 'INTERVAL_IN_DAYS',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '流量统计列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DownlinkCount' => 
                    array (
                      'description' => '该时间段的下行数据包数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10',
                    ),
                    'StatMillis' => 
                    array (
                      'description' => '统计时间，使用UNIX时间戳, 以毫秒为单位。',
                      'type' => 'string',
                      'example' => '1514736000000',
                    ),
                    'UplinkCount' => 
                    array (
                      'description' => '该时间段的上行数据包数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
          4 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": [\\n    {\\n      \\"DownlinkCount\\": 10,\\n      \\"StatMillis\\": \\"1514736000000\\",\\n      \\"UplinkCount\\": 10\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListGatewayTransferFlowStatsResponse>\\r\\n      <Data>\\r\\n            <TransferFlowStat>\\r\\n                  <UplinkCount>10</UplinkCount>\\r\\n                  <DownlinkCount>10</DownlinkCount>\\r\\n                  <StatMillis>1514736000000</StatMillis>\\r\\n            </TransferFlowStat>\\r\\n            <TransferFlowStat>\\r\\n                  <UplinkCount>10</UplinkCount>\\r\\n                  <DownlinkCount>10</DownlinkCount>\\r\\n                  <StatMillis>1514736000000</StatMillis>\\r\\n            </TransferFlowStat>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListGatewayTransferFlowStatsResponse>","errorExample":""}]',
      'title' => '查询网关流量统计列表',
      'summary' => '调用ListGatewayTransferFlowStats查询网关流量统计列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListGatewayTransferPackets' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'description' => '物联网平台的实例id，为空表示公共实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'iotx-oxssh****',
          ),
        ),
        1 => 
        array (
          'name' => 'GwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的网关的GwEUI。',
            'type' => 'string',
            'required' => true,
            'example' => '0000000000000000',
          ),
        ),
        2 => 
        array (
          'name' => 'DevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据DevEUI过滤数据包。',
            'type' => 'string',
            'required' => false,
            'example' => '0000000000000001',
          ),
        ),
        3 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据包分类。

- DOWNLINK_PACKET：下行包。

- UPLINK_PACKET：上行包。

- INVALID_PACKET：无效包。',
            'type' => 'string',
            'required' => true,
            'example' => 'DOWNLINK_PACKET',
            'enum' => 
            array (
              0 => 'DOWNLINK_PACKET',
              1 => 'UPLINK_PACKET',
              2 => 'INVALID_PACKET',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页码，从1开始。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'BeginMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，毫秒为单位的UNIX时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1514736000000',
          ),
        ),
        7 => 
        array (
          'name' => 'EndMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，毫秒为单位的UNIX时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1514736000000',
          ),
        ),
        8 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，取值：**LOG_MILLIS**，表示按照时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'LOG_MILLIS',
            'enum' => 
            array (
              0 => 'LOG_MILLIS',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '满足过滤条件的数据包总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'List' => 
                  array (
                    'description' => '满足过滤条件的数据包信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LogMillis' => 
                        array (
                          'description' => '数据包传输的UNIX时间戳，以毫秒为单位。',
                          'type' => 'string',
                          'example' => '1514736000000',
                        ),
                        'ProcessEvent' => 
                        array (
                          'description' => '该报文的处理结果。',
                          'type' => 'string',
                          'example' => 'SUCCESS',
                        ),
                        'Base64EncodedMacPayload' => 
                        array (
                          'description' => 'Base64编码后的MACPayload报文。',
                          'type' => 'string',
                          'example' => 'xxx',
                        ),
                        'FPort' => 
                        array (
                          'description' => '收发此数据包时所使用的FPort。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '99',
                        ),
                        'Lsnr' => 
                        array (
                          'description' => '收发此数据包的信噪比。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '-10.5',
                        ),
                        'HasData' => 
                        array (
                          'description' => '此数据包中是否包含业务数据。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ClassMode' => 
                        array (
                          'description' => '收发此数据包时的通信模式。',
                          'type' => 'string',
                          'example' => 'C',
                        ),
                        'MacPayloadSize' => 
                        array (
                          'description' => '此数据包的MACPayload报文长度。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '15',
                        ),
                        'MessageType' => 
                        array (
                          'description' => '消息类型。',
                          'type' => 'string',
                          'example' => 'JOIN_REQUEST',
                        ),
                        'Datr' => 
                        array (
                          'description' => '收发此数据包的数据速率。',
                          'type' => 'string',
                          'example' => 'SF12BW125',
                        ),
                        'DevAddr' => 
                        array (
                          'description' => '收发此数据包的节点的网络地址。',
                          'type' => 'string',
                          'example' => '00000000',
                        ),
                        'DevEui' => 
                        array (
                          'description' => '收发此数据包的节点的DevEUI。',
                          'type' => 'string',
                          'example' => '0000000000000001',
                        ),
                        'NodeOwnerAliyunId' => 
                        array (
                          'description' => '节点拥有者的阿里云账号ID。',
                          'type' => 'string',
                          'example' => '23546',
                        ),
                        'GwEui' => 
                        array (
                          'description' => '收发此数据包所经过的网关的GwEUI。',
                          'type' => 'string',
                          'example' => '0000000000000000',
                        ),
                        'Rssi' => 
                        array (
                          'description' => '收发此数据包的RSSI。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '-110',
                        ),
                        'HasMacCommand' => 
                        array (
                          'description' => '此数据包中是否包含MAC指令。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Freq' => 
                        array (
                          'description' => '收发此数据包的频点。',
                          'type' => 'string',
                          'example' => '470.3',
                        ),
                        'MacCommandCIDs' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '这个数据包所携带的MAC指令列表。',
                            'type' => 'object',
                            'example' => '["0x01","0x02"]',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"LogMillis\\": \\"1514736000000\\",\\n        \\"ProcessEvent\\": \\"SUCCESS\\",\\n        \\"Base64EncodedMacPayload\\": \\"xxx\\",\\n        \\"FPort\\": 99,\\n        \\"Lsnr\\": -10.5,\\n        \\"HasData\\": true,\\n        \\"ClassMode\\": \\"C\\",\\n        \\"MacPayloadSize\\": 15,\\n        \\"MessageType\\": \\"JOIN_REQUEST\\",\\n        \\"Datr\\": \\"SF12BW125\\",\\n        \\"DevAddr\\": \\"00000000\\",\\n        \\"DevEui\\": \\"0000000000000001\\",\\n        \\"NodeOwnerAliyunId\\": \\"23546\\",\\n        \\"GwEui\\": \\"0000000000000000\\",\\n        \\"Rssi\\": -110,\\n        \\"HasMacCommand\\": true,\\n        \\"Freq\\": \\"470.3\\",\\n        \\"MacCommandCIDs\\": [\\n          [\\n            \\"0x01\\",\\n            \\"0x02\\"\\n          ]\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListGatewayTransferPacketsResponse>\\r\\n      <Data>\\r\\n            <TotalCount>10</TotalCount>\\r\\n            <List>\\r\\n                  <GatewayTransferPacket>\\r\\n                        <ClassMode>C</ClassMode>\\r\\n                        <HasMacCommand>false</HasMacCommand>\\r\\n                        <DevAddr>00000000</DevAddr>\\r\\n                        <MacPayloadSize>12</MacPayloadSize>\\r\\n                        <FPort>99</FPort>\\r\\n                        <HasData>true</HasData>\\r\\n                        <LogMillis>1514736000000</LogMillis>\\r\\n                        <Datr>SF12BW125</Datr>\\r\\n                        <NodeOwnerAliyunId>xxx</NodeOwnerAliyunId>\\r\\n                        <ProcessEvent>DEVADDR_ILLEGAL</ProcessEvent>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <Lsnr>-10.5</Lsnr>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <Rssi>-110</Rssi>\\r\\n                        <Freq>470.3</Freq>\\r\\n                        <Base64EncodedMacPayload>xxxx</Base64EncodedMacPayload>\\r\\n                  </GatewayTransferPacket>\\r\\n                  <GatewayTransferPacket>\\r\\n                        <ClassMode>C</ClassMode>\\r\\n                        <HasMacCommand>false</HasMacCommand>\\r\\n                        <DevAddr>00000000</DevAddr>\\r\\n                        <MacPayloadSize>12</MacPayloadSize>\\r\\n                        <FPort>99</FPort>\\r\\n                        <HasData>true</HasData>\\r\\n                        <LogMillis>1514736000000</LogMillis>\\r\\n                        <Datr>SF12BW125</Datr>\\r\\n                        <NodeOwnerAliyunId>xxx</NodeOwnerAliyunId>\\r\\n                        <ProcessEvent>DEVADDR_ILLEGAL</ProcessEvent>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <Lsnr>-10.5</Lsnr>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <Rssi>-110</Rssi>\\r\\n                        <Freq>470.3</Freq>\\r\\n                        <Base64EncodedMacPayload>xxxx</Base64EncodedMacPayload>\\r\\n                  </GatewayTransferPacket>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListGatewayTransferPacketsResponse>","errorExample":""}]',
      'title' => '获取网关上下行数据包的统计信息',
      'summary' => '调用ListGatewayTransferPackets获取网关上下行数据包的统计信息。',
      'description' => '****',
    ),
    'ListGatewayTupleOrders' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'State',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '工单状态过滤列表，若不使用此参数，则表示查询所有状态的工单。可取值为：

- APPLYING：申请中。

- REJECTED：已拒绝。

- ACCEPTING：分发中。

- ACCEPTED：分发成功。

- ACCEPTING_FAILED：分发失败。

- REVOKING：撤回中。

- REVOKED：撤回成功。

- REVOKING_FAILED：撤回失败。
',
            'type' => 'array',
            'items' => 
            array (
              'description' => '工单状态过滤列表，若不使用此参数，则表示查询所有状态的工单。可取值为：

- APPLYING：申请中。

- REJECTED：已拒绝。

- ACCEPTING：分发中。

- ACCEPTED：分发成功。

- ACCEPTING_FAILED：分发失败。

- REVOKING：撤回中。

- REVOKED：撤回成功。

- REVOKING_FAILED：撤回失败。',
              'type' => 'string',
              'required' => false,
              'example' => 'APPLYING',
            ),
            'required' => false,
            'example' => 'APPLYING',
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'Offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的起始位置，从0开始。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的工单数量上限，需大于等于1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结果排序字段。可取值为：

- **CREATED_MILLIS**：根据工单发起时间排序。

- **ACCEPTED_MILLIS**：根据工单审批通过时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'CREATED_MILLIS',
            'enum' => 
            array (
              0 => 'CREATED_MILLIS',
              1 => 'ACCEPTED_MILLIS',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需配合**SortingField**参数一起使用。

- **true**：表示升序。

- **false**：表示降序。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '满足过滤条件的工单总数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '42',
                  ),
                  'List' => 
                  array (
                    'description' => '查询到的网关密钥工单信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RequiredCount' => 
                        array (
                          'description' => '网关密钥颁发数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'CreatedMillis' => 
                        array (
                          'description' => '提交此工单的UNIX时间戳，单位为毫秒。
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514736000000',
                        ),
                        'TupleType' => 
                        array (
                          'description' => '网关密钥类型。

- **singlechannel**：低速版（单通道型）。

- **standard**：标准版。

- **hybrid**：高速版（Hybrid型）。

- **noncontractual**：高速版。

',
                          'type' => 'string',
                          'example' => 'standard',
                        ),
                        'AcceptedMillis' => 
                        array (
                          'description' => '工单审批通过的UNIX时间戳，单位为毫秒。
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514822400000',
                        ),
                        'OrderId' => 
                        array (
                          'description' => '网关密钥订单编号。',
                          'type' => 'string',
                          'example' => '1234',
                        ),
                        'OrderState' => 
                        array (
                          'description' => '网关密钥申请状态。',
                          'type' => 'string',
                          'example' => 'ACCEPTED',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          3 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 42,\\n    \\"List\\": [\\n      {\\n        \\"RequiredCount\\": 2,\\n        \\"CreatedMillis\\": 1514736000000,\\n        \\"TupleType\\": \\"standard\\",\\n        \\"AcceptedMillis\\": 1514822400000,\\n        \\"OrderId\\": \\"1234\\",\\n        \\"OrderState\\": \\"ACCEPTED\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListGatewayTupleOrdersResponse>\\n    <Success>true</Success>\\n    <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n    <Data>\\n        <TotalCount>42</TotalCount>\\n        <List>\\n            <RequiredCount>2</RequiredCount>\\n            <CreatedMillis>1514736000000</CreatedMillis>\\n            <TupleType>standard</TupleType>\\n            <AcceptedMillis>1514822400000</AcceptedMillis>\\n            <OrderId>1234</OrderId>\\n            <OrderState>ACCEPTED</OrderState>\\n        </List>\\n    </Data>\\n</ListGatewayTupleOrdersResponse>","errorExample":""}]',
      'title' => '获取用户已提交的网关元组工单列表',
      'summary' => '获取用户已提交的网关元组工单列表。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListGatewaysGisInfo' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'example' => 'iot-***-v6***',
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
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '网关位置信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ChargeStatus' => 
                    array (
                      'description' => '网关欠费状态。

- **NORMAL**：网关未欠费，正常工作。
- **ARREARAGE**：网关欠费。',
                      'type' => 'string',
                      'example' => 'NORMAL',
                    ),
                    'GisSourceType' => 
                    array (
                      'description' => '网关GIS来源，可取值：

- **USER_INPUT**：用户输入。

- **HARDWARE**：网关上报。',
                      'type' => 'string',
                      'example' => 'HARDWARE',
                    ),
                    'FreqBandPlanGroupId' => 
                    array (
                      'description' => '网关采用的频段ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '102',
                    ),
                    'Enabled' => 
                    array (
                      'description' => '网关是否可用。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'GisCoordinateSystem' => 
                    array (
                      'description' => '网关经纬度所采用的坐标系统，可取值为：**WGS_84**，**GCJ_02**。',
                      'type' => 'string',
                      'example' => 'GCJ_02',
                    ),
                    'Longitude' => 
                    array (
                      'description' => '网关经度。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '123.45678',
                    ),
                    'Latitude' => 
                    array (
                      'description' => '网关纬度。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '23.45678',
                    ),
                    'OnlineState' => 
                    array (
                      'description' => '网关的在线、离线状态。可取值：

- **ONLINE**：在线。

- **OFFLINE**：离线。',
                      'type' => 'string',
                      'example' => 'OFFLINE',
                    ),
                    'Name' => 
                    array (
                      'description' => '自定义网关名称。',
                      'type' => 'string',
                      'example' => '网关名称',
                    ),
                    'GwEui' => 
                    array (
                      'description' => '网关唯一标识。',
                      'type' => 'string',
                      'example' => '0000000000000000',
                    ),
                    'AuthTypes' => 
                    array (
                      'description' => '网关合约类型。

- **HYBRID**：Hybrid网关。
- **SINGLE_CHANNEL**：单通道网关。
- **STANDARD**：标准合约网关。',
                      'type' => 'string',
                      'example' => 'STANDARD',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": [\\n    {\\n      \\"ChargeStatus\\": \\"NORMAL\\",\\n      \\"GisSourceType\\": \\"HARDWARE\\",\\n      \\"FreqBandPlanGroupId\\": 102,\\n      \\"Enabled\\": true,\\n      \\"GisCoordinateSystem\\": \\"GCJ_02\\",\\n      \\"Longitude\\": 123.45678,\\n      \\"Latitude\\": 23.45678,\\n      \\"OnlineState\\": \\"OFFLINE\\",\\n      \\"Name\\": \\"网关名称\\",\\n      \\"GwEui\\": \\"0000000000000000\\",\\n      \\"AuthTypes\\": \\"STANDARD\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListGatewaysGisInfoResponse>\\n    <Success>true</Success>\\n    <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n    <Data>\\n        <ChargeStatus>NORMAL</ChargeStatus>\\n        <GisSourceType>HARDWARE</GisSourceType>\\n        <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\n        <Enabled>true</Enabled>\\n        <GisCoordinateSystem>GCJ_02</GisCoordinateSystem>\\n        <Longitude>123.45678</Longitude>\\n        <Latitude>23.45678</Latitude>\\n        <OnlineState>OFFLINE</OnlineState>\\n        <Name>网关名称</Name>\\n        <GwEui>0000000000000000</GwEui>\\n        <AuthTypes>STANDARD</AuthTypes>\\n    </Data>\\n</ListGatewaysGisInfoResponse>","errorExample":""}]',
      'title' => '查询所有网关地理位置信息',
      'summary' => '查询当前用户账号名下所有网关的地理位置信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListNodeGroupTransferFlowStats' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'BeginMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，毫秒为单位的UNIX时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1514736000000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，毫秒为单位的UNIX时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1514737000000',
          ),
        ),
        4 => 
        array (
          'name' => 'TimeIntervalUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间间隔的单位。取值：

- **INTERVAL_IN_HOURS**：按照小时统计
- **INTERVAL_IN_DAYS**：按照天统计',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'INTERVAL_IN_HOURS',
            'enum' => 
            array (
              0 => 'INTERVAL_IN_HOURS',
              1 => 'INTERVAL_IN_DAYS',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '流量统计列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DownlinkCount' => 
                    array (
                      'description' => '该时间段的下行数据包数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1010',
                    ),
                    'StatMillis' => 
                    array (
                      'description' => '统计UNIX时间戳, 以毫秒为单位。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1514736000000',
                    ),
                    'UplinkCount' => 
                    array (
                      'description' => '该时间段的上行数据包数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          6 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": [\\n    {\\n      \\"DownlinkCount\\": 1010,\\n      \\"StatMillis\\": 1514736000000,\\n      \\"UplinkCount\\": 10\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListNodeGroupTransferFlowStatsResponse>\\r\\n      <Data>\\r\\n            <FlowStat>\\r\\n                  <UplinkCount>10</UplinkCount>\\r\\n                  <DownlinkCount>10</DownlinkCount>\\r\\n                  <StatMillis>1514736000000</StatMillis>\\r\\n            </FlowStat>\\r\\n            <FlowStat>\\r\\n                  <UplinkCount>10</UplinkCount>\\r\\n                  <DownlinkCount>10</DownlinkCount>\\r\\n                  <StatMillis>1514736000000</StatMillis>\\r\\n            </FlowStat>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListNodeGroupTransferFlowStatsResponse>","errorExample":""}]',
      'title' => '查询节点组流量统计列表',
      'summary' => '调用ListNodeGroupTransferFlowStats查询节点组流量统计列表。',
    ),
    'ListNodeGroupTransferPackets' => 
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
      'operationType' => 'read',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'DevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据DevEUI过滤数据包。',
            'type' => 'string',
            'required' => false,
            'example' => '0000000000000001',
          ),
        ),
        3 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据包分类。取值：

- **DOWNLINK_PACKET**：下行包
- **UPLINK_PACKET**：上行包',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'UPLINK_PACKET',
            'enum' => 
            array (
              0 => 'DOWNLINK_PACKET',
              1 => 'UPLINK_PACKET',
              2 => 'INVALID_PACKET',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页码，从1开始。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '300',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'BeginMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，毫秒为单位的UNIX时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1514736000000',
          ),
        ),
        7 => 
        array (
          'name' => 'EndMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，毫秒为单位的UNIX时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1514736000000',
          ),
        ),
        8 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，取值：**LOG_MILLIS**，表示按照时间排序。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'LOG_MILLIS',
            'enum' => 
            array (
              0 => 'LOG_MILLIS',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '满足过滤条件的数据包总数。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'List' => 
                  array (
                    'description' => '列表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LogMillis' => 
                        array (
                          'description' => '数据包传输的 UNIX 时间戳，以毫秒为单位。
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514736000000',
                        ),
                        'GwOwnerAliyunId' => 
                        array (
                          'description' => '数据包所经过网关所属用户的阿里云账号 Id。
',
                          'type' => 'string',
                          'example' => 'XXX',
                        ),
                        'ProcessEvent' => 
                        array (
                          'description' => '该报文的处理结果，取值内容参考 ProcessEvent 取值。
',
                          'type' => 'string',
                          'example' => 'DEVADDR_ILLEGAL',
                        ),
                        'Base64EncodedMacPayload' => 
                        array (
                          'description' => 'Base64 编码后的 MACPayload 报文。
',
                          'type' => 'string',
                          'example' => 'XXX',
                        ),
                        'FPort' => 
                        array (
                          'description' => '收发此数据包时所使用的 FPort。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '99',
                        ),
                        'Lsnr' => 
                        array (
                          'description' => '收发此数据包的信噪比。
',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '-10.5',
                        ),
                        'FreqBandPlanGroupId' => 
                        array (
                          'description' => '数据包所经过的网关所采用的频段的频段 Id。
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '101',
                        ),
                        'HasData' => 
                        array (
                          'description' => '此数据包中是否包含业务数据。
',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'FcntUp' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'ClassMode' => 
                        array (
                          'description' => '收发此数据包时的 LoRaWAN Class 模式。
',
                          'type' => 'string',
                          'example' => 'C',
                        ),
                        'MacPayloadSize' => 
                        array (
                          'description' => '此数据包的 MACPayload 报文长度。
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '15',
                        ),
                        'MessageType' => 
                        array (
                          'description' => '消息类型，取值如下表。
',
                          'type' => 'string',
                          'example' => 'CONFIRMED_DATA_UP',
                        ),
                        'Datr' => 
                        array (
                          'description' => '收发此数据包的数据速率。
',
                          'type' => 'string',
                          'example' => 'SF12BW125',
                        ),
                        'DevAddr' => 
                        array (
                          'description' => '收发此数据包的节点的网络地址。
',
                          'type' => 'string',
                          'example' => '00000000',
                        ),
                        'DevEui' => 
                        array (
                          'description' => '收发此数据包的节点的 DevEUI。',
                          'type' => 'string',
                          'example' => '0000000000000001',
                        ),
                        'FcntDown' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'MacCommandCIDs' => 
                        array (
                          'type' => 'string',
                          'items' => 
                          array (
                            'description' => '这个数据包所携带的 MAC 指令列表。
',
                            'type' => 'string',
                            'example' => '"0x01"，"0x02"',
                            'index' => 200,
                          ),
                        ),
                        'GwEui' => 
                        array (
                          'description' => '收发此数据包所经过的网关的 GwEUI。
',
                          'type' => 'string',
                          'example' => '0000000000000000',
                        ),
                        'Rssi' => 
                        array (
                          'description' => '收发此数据包的 RSSI。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '-110',
                        ),
                        'HasMacCommand' => 
                        array (
                          'description' => '此数据包中是否包含 MAC 指令。
',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Freq' => 
                        array (
                          'description' => '收发此数据包的频点。
',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '470.3',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          6 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 20,\\n    \\"List\\": [\\n      {\\n        \\"LogMillis\\": 1514736000000,\\n        \\"GwOwnerAliyunId\\": \\"XXX\\",\\n        \\"ProcessEvent\\": \\"DEVADDR_ILLEGAL\\",\\n        \\"Base64EncodedMacPayload\\": \\"XXX\\",\\n        \\"FPort\\": 99,\\n        \\"Lsnr\\": -10.5,\\n        \\"FreqBandPlanGroupId\\": 101,\\n        \\"HasData\\": true,\\n        \\"ClassMode\\": \\"C\\",\\n        \\"MacPayloadSize\\": 15,\\n        \\"MessageType\\": \\"CONFIRMED_DATA_UP\\",\\n        \\"Datr\\": \\"SF12BW125\\",\\n        \\"DevAddr\\": \\"00000000\\",\\n        \\"DevEui\\": \\"0000000000000001\\",\\n        \\"GwEui\\": \\"0000000000000000\\",\\n        \\"Rssi\\": -110,\\n        \\"HasMacCommand\\": true,\\n        \\"Freq\\": 470.3,\\n        \\"MacCommandCIDs\\": [\\n          \\"\\\\\\"0x01\\\\\\"，\\\\\\"0x02\\\\\\"\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNodeGroupTransferPacketsResponse>\\r\\n      <Data>\\r\\n            <TotalCount>10</TotalCount>\\r\\n            <List>\\r\\n                  <Packet>\\r\\n                        <ClassMode>C</ClassMode>\\r\\n                        <GwOwnerAliyunId>xxx</GwOwnerAliyunId>\\r\\n                        <HasMacCommand>true</HasMacCommand>\\r\\n                        <DevAddr>00000000</DevAddr>\\r\\n                        <MacPayloadSize>15</MacPayloadSize>\\r\\n                        <FPort>99</FPort>\\r\\n                        <HasData>true</HasData>\\r\\n                        <LogMillis>1514736000000</LogMillis>\\r\\n                        <MessageType>CONFIRMED_DATA_UP</MessageType>\\r\\n                        <Datr>SF12BW125</Datr>\\r\\n                        <ProcessEvent>DEVADDR_ILLEGAL</ProcessEvent>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <Lsnr>-10.5</Lsnr>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <Rssi>-110</Rssi>\\r\\n                        <Freq>470.3</Freq>\\r\\n                        <Base64EncodedMacPayload>xxx</Base64EncodedMacPayload>\\r\\n                        <MacCommandCIDs>\\r\\n                              <CID>0x01</CID>\\r\\n                              <CID>0x02</CID>\\r\\n                        </MacCommandCIDs>\\r\\n                        <FreqBandPlanGroupId>101</FreqBandPlanGroupId>\\r\\n                  </Packet>\\r\\n                  <Packet>\\r\\n                        <ClassMode>C</ClassMode>\\r\\n                        <GwOwnerAliyunId>xxx</GwOwnerAliyunId>\\r\\n                        <HasMacCommand>true</HasMacCommand>\\r\\n                        <DevAddr>00000000</DevAddr>\\r\\n                        <MacPayloadSize>15</MacPayloadSize>\\r\\n                        <FPort>99</FPort>\\r\\n                        <HasData>true</HasData>\\r\\n                        <LogMillis>1514736000000</LogMillis>\\r\\n                        <MessageType>CONFIRMED_DATA_UP</MessageType>\\r\\n                        <Datr>SF12BW125</Datr>\\r\\n                        <ProcessEvent>DEVADDR_ILLEGAL</ProcessEvent>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <Lsnr>-10.5</Lsnr>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <Rssi>-110</Rssi>\\r\\n                        <Freq>470.3</Freq>\\r\\n                        <Base64EncodedMacPayload>xxx</Base64EncodedMacPayload>\\r\\n                        <MacCommandCIDs>\\r\\n                              <CID>0x01</CID>\\r\\n                              <CID>0x02</CID>\\r\\n                        </MacCommandCIDs>\\r\\n                        <FreqBandPlanGroupId>101</FreqBandPlanGroupId>\\r\\n                  </Packet>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListNodeGroupTransferPacketsResponse>","errorExample":""}]',
      'title' => '获取节点分组上下行数据包的统计信息',
      'summary' => '调用ListNodeGroupTransferPackets获取节点分组上下行数据包的统计信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListNodeTransferPacketPaths' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'DevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据DevEUI过滤数据包。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0000000000000001',
          ),
        ),
        2 => 
        array (
          'name' => 'Base64EncodedMacPayload',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据包的MacPayload，由**ListNodeGroupTransferPackets**接口的返回值获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'xxx',
          ),
        ),
        3 => 
        array (
          'name' => 'LogMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收到此数据包的时间，由ListNodeGroupTransferPackets的返回值获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '14643600000',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页码，从1开始。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，大于等于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '300',
            'minimum' => '1',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '满足过滤条件的数据包总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'List' => 
                  array (
                    'description' => '满足过滤条件的平行路径列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BestPath' => 
                        array (
                          'description' => '是否是最优路径。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'DevEui' => 
                        array (
                          'description' => '收发此数据包的节点的DevEUI。',
                          'type' => 'string',
                          'example' => '0000000000000001',
                        ),
                        'GwEui' => 
                        array (
                          'description' => '收发数据包所经过的网关的GwEUI。',
                          'type' => 'string',
                          'example' => '0000000000000000',
                        ),
                        'Lsnr' => 
                        array (
                          'description' => '收发此数据包的信噪比。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '-10.5',
                        ),
                        'Rssi' => 
                        array (
                          'description' => '收发此数据包的RSSI。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '-110',
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
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          1 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          2 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          3 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          4 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          5 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"BestPath\\": false,\\n        \\"DevEui\\": \\"0000000000000001\\",\\n        \\"GwEui\\": \\"0000000000000000\\",\\n        \\"Lsnr\\": -10.5,\\n        \\"Rssi\\": -110\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNodeTransferPacketPathsResponse>\\r\\n      <Data>\\r\\n            <TotalCount>10</TotalCount>\\r\\n            <List>\\r\\n                  <TransferPacketPayloadPath>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <Rssi>-110</Rssi>\\r\\n                        <BestPath>false</BestPath>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <Lsnr>-10.5</Lsnr>\\r\\n                  </TransferPacketPayloadPath>\\r\\n                  <TransferPacketPayloadPath>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <Rssi>-110</Rssi>\\r\\n                        <BestPath>false</BestPath>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <Lsnr>-10.5</Lsnr>\\r\\n                  </TransferPacketPayloadPath>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListNodeTransferPacketPathsResponse>","errorExample":""}]',
      'title' => '获取节点上行数据包的平行路径',
      'summary' => '调用ListNodeTransferPacketPaths获取节点上行数据包的平行路径。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListNodeTransferPackets' => 
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
      'operationType' => 'read',
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据**DevEUI**参数过滤数据包。
',
            'type' => 'string',
            'required' => true,
            'example' => '0000000000000001',
          ),
        ),
        1 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据包分类，可取值为：

- **DOWNLINK_PACKET**：下行包。

- **UPLINK_PACKET**：上行包。

- **INVALID_PACKET**：无效包。
',
            'type' => 'string',
            'required' => true,
            'example' => 'DOWNLINK_PACKET',
            'enum' => 
            array (
              0 => 'DOWNLINK_PACKET',
              1 => 'UPLINK_PACKET',
              2 => 'INVALID_PACKET',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'GwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据**GwEUI**参数过滤数据包。
',
            'type' => 'string',
            'required' => false,
            'example' => '0000000000000001',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页码，从1开始。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，需大于等于1。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '300',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'BeginMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间，单位为毫秒的UNIX时间戳。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1514736000000',
          ),
        ),
        6 => 
        array (
          'name' => 'EndMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结束时间，单位为毫秒的**UNIX**时间戳。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1514736000000',
          ),
        ),
        7 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，可设置为**LOG_MILLIS**（按照时间排序）。
',
            'type' => 'string',
            'required' => false,
            'example' => 'LOG_MILLIS',
            'enum' => 
            array (
              0 => 'LOG_MILLIS',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需配合**SortingField**参数一起使用。

- **true**：表示升序。

- **false**：表示降序（默认值）。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。

',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
              ),
              'Data' => 
              array (
                'description' => '返回的结果。

















',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '满足过滤条件的数据包总数。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'List' => 
                  array (
                    'description' => '满足过滤条件的数据包列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LogMillis' => 
                        array (
                          'description' => '数据包传输的UNIX时间戳，单位为毫秒。
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514736000000',
                        ),
                        'Datr' => 
                        array (
                          'description' => '收发此数据包的数据速率。
',
                          'type' => 'string',
                          'example' => 'SF12BW125',
                        ),
                        'Snr' => 
                        array (
                          'description' => '收发此数据包的信噪比。
',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '-10.5',
                        ),
                        'DevEui' => 
                        array (
                          'description' => '收发此数据包的节点的DevEUI。
',
                          'type' => 'string',
                          'example' => '0000000000000001',
                        ),
                        'GwEui' => 
                        array (
                          'description' => '收发此数据包所经过的网关的GwEUI。
',
                          'type' => 'string',
                          'example' => '0000000000000000',
                        ),
                        'ClassMode' => 
                        array (
                          'description' => '收发此数据包时的LoRaWAN Class模式。
',
                          'type' => 'string',
                          'example' => 'C',
                        ),
                        'Rssi' => 
                        array (
                          'description' => '收发此数据包的RSSI。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '-110',
                        ),
                        'Freq' => 
                        array (
                          'description' => '收发此数据包的频点。
',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '470.3',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          6 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"LogMillis\\": 1514736000000,\\n        \\"Datr\\": \\"SF12BW125\\",\\n        \\"Snr\\": -10.5,\\n        \\"DevEui\\": \\"0000000000000001\\",\\n        \\"GwEui\\": \\"0000000000000000\\",\\n        \\"ClassMode\\": \\"C\\",\\n        \\"Rssi\\": -110,\\n        \\"Freq\\": 470.3\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNodeTransferPacketsResponse>\\n    <Success>true</Success>\\n    <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097\\t</RequestId>\\n    <Data>\\n        <TotalCount>10</TotalCount>\\n        <List>\\n            <LogMillis>1514736000000</LogMillis>\\n            <Datr>SF12BW125</Datr>\\n            <Snr>-10.5</Snr>\\n            <DevEui>0000000000000001</DevEui>\\n            <GwEui>0000000000000000</GwEui>\\n            <ClassMode>C</ClassMode>\\n            <Rssi>-110</Rssi>\\n            <Freq>470.3</Freq>\\n        </List>\\n    </Data>\\n</ListNodeTransferPacketsResponse>","errorExample":""}]',
      'title' => '获取节点分组上下行数据包的统计信息',
      'summary' => '获取节点分组上下行数据包的统计信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListNodeTupleOrders' => 
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
      'operationType' => 'read',
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'State',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '工单状态过滤，如未传入此参数，则不限制工单状态。

工单状态取值请参见下方类型说明。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '工单状态过滤，如未传入此参数，则不限制工单状态。可取值：

- APPLYING：申请中。

- REJECTED：已拒绝。

- ACCEPTING：分发中。

- ACCEPTED：分发成功。

- ACCEPTING_FAILED：分发失败。

- REVOKING：撤回中。

- REVOKED：撤回成功。

- REVOKING_FAILED：撤回失败。
',
              'type' => 'string',
              'required' => false,
              'example' => 'APPLYING',
            ),
            'required' => false,
            'example' => 'APPLYING',
            'maxItems' => 10,
          ),
        ),
        1 => 
        array (
          'name' => 'IsKpm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否是Kpm发起的工单。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'Offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的起始位置，从0开始。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '0',
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的工单数量上限，须大于等于1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结果的排序字段，可取值为：

- CREATED_MILLIS：根据工单发起时间排序。

- ACCEPTED_MILLIS：根据工单审批通过时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'CREATED_MILLIS',
            'enum' => 
            array (
              0 => 'CREATED_MILLIS',
              1 => 'ACCEPTED_MILLIS',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需配合**SortingField**字段一起使用。

- **true**：表示升序。

- **false**：表示降序。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。

',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '返回的结果。





















',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '满足过滤条件的工单数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '42',
                  ),
                  'List' => 
                  array (
                    'description' => '满足过滤条件的节点元组工单信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FailedCount' => 
                        array (
                          'description' => '节点颁发失败数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'RequiredCount' => 
                        array (
                          'description' => '节点密钥申请数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'CreatedMillis' => 
                        array (
                          'description' => '提交此工单的UNIX时间戳，单位为毫秒。
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514736000000',
                        ),
                        'IsKpm' => 
                        array (
                          'description' => '是否是Kpm发起的工单。

- **true**：是。

- **false**：否。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'TupleType' => 
                        array (
                          'description' => '节点密钥类型。

',
                          'type' => 'string',
                          'example' => 'noncontractual',
                        ),
                        'AcceptedMillis' => 
                        array (
                          'description' => '工单审批通过的UNIX时间戳，单位为毫秒。
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514822400000',
                        ),
                        'SuccessCount' => 
                        array (
                          'description' => '节点密钥颁发数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'LoraVersion' => 
                        array (
                          'description' => 'LoRaWAN协议版本。
',
                          'type' => 'string',
                          'example' => '1.0.2',
                        ),
                        'OrderState' => 
                        array (
                          'description' => '节点密钥申请状态。',
                          'type' => 'string',
                          'example' => 'ACCEPTED',
                        ),
                        'OrderId' => 
                        array (
                          'description' => '工单编号。',
                          'type' => 'string',
                          'example' => '1234',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          3 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 42,\\n    \\"List\\": [\\n      {\\n        \\"FailedCount\\": 0,\\n        \\"RequiredCount\\": 1,\\n        \\"CreatedMillis\\": 1514736000000,\\n        \\"IsKpm\\": false,\\n        \\"TupleType\\": \\"noncontractual\\",\\n        \\"AcceptedMillis\\": 1514822400000,\\n        \\"SuccessCount\\": 1,\\n        \\"LoraVersion\\": \\"1.0.2\\",\\n        \\"OrderState\\": \\"ACCEPTED\\",\\n        \\"OrderId\\": \\"1234\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>\\n    <TotalCount>42</TotalCount>\\n    <List>\\n        <OrderId>1234</OrderId>\\n        <IsKpm>false</IsKpm>\\n        <OrderState>ACCEPTED</OrderState>\\n        <RequiredCount>1</RequiredCount>\\n        <SuccessCount>1</SuccessCount>\\n        <FailedCount>0</FailedCount>\\n        <LoraVersion>1.0.2</LoraVersion>\\n        <CREATEDMillis>1514736000000</CREATEDMillis>\\n        <AcceptedMillis>1514822400000</AcceptedMillis>\\n        <TupleType>noncontractual</TupleType>\\n    </List>\\n    <List>\\n        <OrderId>1235</OrderId>\\n        <IsKpm>false</IsKpm>\\n        <OrderState>REJECTED</OrderState>\\n        <RequiredCount>1</RequiredCount>\\n        <SuccessCount>1</SuccessCount>\\n        <FailedCount>0</FailedCount>\\n        <LoraVersion>1.0.2</LoraVersion>\\n        <CREATEDMillis>1514736000000</CREATEDMillis>\\n        <AcceptedMillis>1514822400000</AcceptedMillis>\\n        <TupleType>noncontractual</TupleType>\\n    </List>\\n</Data>","errorExample":""}]',
      'title' => '获取用户已提交的节点元组工单列表',
      'summary' => '获取用户已提交的节点元组工单列表。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListNodesByNodeGroupId' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'FuzzyDevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配节点的DevEUI。',
            'type' => 'string',
            'required' => false,
            'example' => 'd896e0',
          ),
        ),
        3 => 
        array (
          'name' => 'Offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的起始位置，从0开始。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'minimum' => '0',
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的节点数量上限，大于等于1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '200',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定排序字段，可取值为**CREATED_MILLIS**，表示根据创建时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'CREATED_MILLIS',
            'enum' => 
            array (
              0 => 'CREATED_MILLIS',
              1 => 'LAST_JOIN_MILLIS',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '满足过滤条件的节点总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'List' => 
                  array (
                    'description' => '满足过滤条件的节点列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LastJoinMillis' => 
                        array (
                          'description' => '最近一次入网的时间，UNIX时间戳，以毫秒为单位。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514736000000',
                        ),
                        'DevAddr' => 
                        array (
                          'description' => '节点的网络地址。',
                          'type' => 'string',
                          'example' => '12345678',
                        ),
                        'MulticastGroupId' => 
                        array (
                          'description' => '组播ID值。',
                          'type' => 'string',
                          'example' => 'xxxx',
                        ),
                        'DevEui' => 
                        array (
                          'description' => '节点的DevEUI。',
                          'type' => 'string',
                          'example' => '0000000000000000',
                        ),
                        'NodeType' => 
                        array (
                          'type' => 'string',
                        ),
                        'JoinEui' => 
                        array (
                          'type' => 'string',
                        ),
                        'BoundMillis' => 
                        array (
                          'description' => '节点加入当前节点分组的时间，UNIX时间戳，以毫秒为单位。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514736000000',
                        ),
                        'ClassMode' => 
                        array (
                          'description' => '节点所采用的LoRaWAN Class模式，可取值：A、B、C。',
                          'type' => 'string',
                          'example' => 'A',
                        ),
                        'AuthTypes' => 
                        array (
                          'type' => 'string',
                          'items' => 
                          array (
                            'description' => '网关合约类型。

- **HYBRID**：hybrid网关
- **SINGLE_CHANNEL**：单通道网关
- **STANDARD**：标准合约网关',
                            'type' => 'string',
                            'example' => 'STANDARD',
                            'index' => 200,
                          ),
                        ),
                        'Appkey' => 
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          3 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"DevAddr\\": \\"12345678\\",\\n        \\"LastJoinMillis\\": 1514736000000,\\n        \\"DevEui\\": \\"0000000000000000\\",\\n        \\"MulticastGroupId\\": \\"xxxx\\",\\n        \\"BoundMillis\\": 1514736000000,\\n        \\"ClassMode\\": \\"A\\",\\n        \\"AuthTypes\\": [\\n          \\"STANDARD\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNodesByNodeGroupIdResponse>\\r\\n      <Data>\\r\\n            <TotalCount>10</TotalCount>\\r\\n            <List>\\r\\n                  <Node>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <BoundMillis>1514736000000</BoundMillis>\\r\\n                        <LastJoinMillis>1514736000000</LastJoinMillis>\\r\\n                        <DevEui>0000000000000000</DevEui>\\r\\n                        <DevAddr>12345678</DevAddr>\\r\\n                  </Node>\\r\\n                  <Node>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <BoundMillis>1514736000001</BoundMillis>\\r\\n                        <LastJoinMillis>1514736000000</LastJoinMillis>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <DevAddr>12345678</DevAddr>\\r\\n                  </Node>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListNodesByNodeGroupIdResponse>","errorExample":""}]',
      'title' => '查询指定节点分组中的节点列表',
      'summary' => '调用ListNodesByNodeGroupId根据过滤条件，查询指定节点分组中的节点列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListNodesByOwnedJoinPermissionId' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'JoinPermissionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入网凭证ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'FuzzyDevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配节点的DevEUI。',
            'type' => 'string',
            'required' => false,
            'example' => 'd896e0',
          ),
        ),
        3 => 
        array (
          'name' => 'Offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的起始位置，从0开始。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'minimum' => '0',
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的节点数量上限，大于等于1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '200',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定排序字段，可取值为**CREATED_MILLIS**, 表示根据创建时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'CREATED_MILLIS',
            'enum' => 
            array (
              0 => 'CREATED_MILLIS',
              1 => 'LAST_JOIN_MILLIS',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '满足过滤条件的节点总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'List' => 
                  array (
                    'description' => '满足过滤条件的节点列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LastJoinMillis' => 
                        array (
                          'description' => '最近一次入网的时间，UNIX时间戳，以毫秒为单位。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514736000000',
                        ),
                        'DevAddr' => 
                        array (
                          'description' => '节点的网络地址。',
                          'type' => 'string',
                          'example' => '12345678',
                        ),
                        'DevEui' => 
                        array (
                          'description' => '节点的DevEUI。',
                          'type' => 'string',
                          'example' => '0000000000000000',
                        ),
                        'BoundMillis' => 
                        array (
                          'description' => '节点加入当前节点分组的时间，UNIX时间戳，以毫秒为单位。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514736000000',
                        ),
                        'ClassMode' => 
                        array (
                          'description' => '节点所采用的LoRaWAN Class模式，可取值：A、B、C。',
                          'type' => 'string',
                          'example' => 'A',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          3 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"LastJoinMillis\\": 1514736000000,\\n        \\"DevAddr\\": \\"12345678\\",\\n        \\"DevEui\\": \\"0000000000000000\\",\\n        \\"BoundMillis\\": 1514736000000,\\n        \\"ClassMode\\": \\"A\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNodesByOwnedJoinPermissionIdResponse>\\r\\n      <Data>\\r\\n            <TotalCount>10</TotalCount>\\r\\n            <List>\\r\\n                  <Node>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <BoundMillis>1514736000000</BoundMillis>\\r\\n                        <LastJoinMillis>1514736000000</LastJoinMillis>\\r\\n                        <DevEui>0000000000000000</DevEui>\\r\\n                        <DevAddr>12345678</DevAddr>\\r\\n                  </Node>\\r\\n                  <Node>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <BoundMillis>1514736000001</BoundMillis>\\r\\n                        <LastJoinMillis>1514736000000</LastJoinMillis>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <DevAddr>12345678</DevAddr>\\r\\n                  </Node>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListNodesByOwnedJoinPermissionIdResponse>","errorExample":""}]',
      'title' => '查询使用了特定入网凭证的节点列表',
      'summary' => '调用ListNodesByOwnedJoinPermissionId根据过滤条件，查询使用了特定入网凭证的节点列表。',
      'description' => '所指定的入网凭证必须时当前用户账号所拥有的入网凭证。',
    ),
    'ListNotifications' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Category',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '通知类型列表，传 null 则不过滤类型。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '通知类型列表，传**null**则不过滤类型。

- GATEWAY_OFFLINE：网关离线通知。

- JOIN_PERMISSION_AUTH_APPLYING：入网凭证申请。

- JOIN_PERMISSION_AUTH_ACCEPTED：入网凭证审批通过。

- JOIN_PERMISSION_AUTH_CANCELED：入网凭证申请撤销。

- JOIN_PERMISSION_AUTH_REJECTED：入网凭证申请拒绝。

- GATEWAY_DATAFLOW_LIMIT：网关限流。',
              'type' => 'string',
              'required' => false,
              'example' => 'GATEWAY_OFFLINE',
            ),
            'required' => false,
            'example' => 'GATEWAY_OFFLINE',
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'HandleState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据通知处理状态过滤，传**null**则不过滤处理状态。

- **HANDLED**：已处理。

- **UNHANDLED**：未处理。',
            'type' => 'string',
            'required' => false,
            'example' => 'HANDLED',
            'enum' => 
            array (
              0 => 'HANDLED',
              1 => 'UNHANDLED',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的起始位置，需从0开始。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'minimum' => '0',
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的通知数量上限，需大于等于1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '200',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        4 => 
        array (
          'name' => 'BeginMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间查询，毫秒为单位的UNIX时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1514736000000',
          ),
        ),
        5 => 
        array (
          'name' => 'EndMillis',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间查询，毫秒为单位的UNIX时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1514736000000',
          ),
        ),
        6 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，可取值为**NOTICE_MILLIS**（按照通知发生时间排序）。',
            'type' => 'string',
            'required' => false,
            'example' => 'NOTICE_MILLIS',
            'enum' => 
            array (
              0 => 'NOTICE_MILLIS',
            ),
          ),
        ),
        7 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配合**SortingField**参数一起使用。

- **true**：表示升序。

- **false**：表示降序。',
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
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '符合过滤条件的通知总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'List' => 
                  array (
                    'description' => '符合过滤条件的通知列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'NoticeMillis' => 
                        array (
                          'description' => '通知发生时间，UNIX时间戳，毫秒为单位。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514736000000',
                        ),
                        'Category' => 
                        array (
                          'description' => '通知分类。',
                          'type' => 'string',
                          'example' => 'GATEWAY_OFFLINE',
                        ),
                        'HandleState' => 
                        array (
                          'description' => '通知处理状态。',
                          'type' => 'string',
                          'example' => 'HANDLED',
                        ),
                        'NotificationId' => 
                        array (
                          'description' => '通知ID。',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'HandledMillis' => 
                        array (
                          'description' => '通知处理时间，UNIX时间戳，毫秒为单位。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514736000001',
                        ),
                        'GatewayOfflineInfo' => 
                        array (
                          'description' => '记录网关离线信息。

当**Category**字段为**GATEWAY_OFFLINE**时，该字段有值。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'GwEui' => 
                            array (
                              'description' => '网关的GwEUI。',
                              'type' => 'string',
                              'example' => '0000000000000000',
                            ),
                            'OfflineMillis' => 
                            array (
                              'description' => '离线时间，毫秒为单位的UNIX时间戳。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1514736000000',
                            ),
                          ),
                        ),
                        'JoinPermissionAuthInfo' => 
                        array (
                          'description' => '记录凭证授权信息。

当**Category**字段为**JOINPERMISSION_AUTH**时，该字段有值。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'CanceledMillis' => 
                            array (
                              'description' => '工单被取消的UNIX时间戳，毫秒为单位。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1514736000000',
                            ),
                            'ApplyingMillis' => 
                            array (
                              'description' => '发起工单的UNIX时间戳，毫秒为单位。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1514736000000',
                            ),
                            'JoinEui' => 
                            array (
                              'description' => '入网凭证所使用的JoinEUI。',
                              'type' => 'string',
                              'example' => '0000000000000001',
                            ),
                            'RenterAliyunId' => 
                            array (
                              'description' => '入网凭证租户的阿里云账号ID。',
                              'type' => 'string',
                              'example' => 'some-user',
                            ),
                            'AcceptedMillis' => 
                            array (
                              'description' => '工单审批通过的UNIX时间戳，毫秒为单位。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1514736000000',
                            ),
                            'OwnerAliyunId' => 
                            array (
                              'description' => '发起授权的入网凭证拥有者的阿里云账号ID。',
                              'type' => 'string',
                              'example' => 'some-user1',
                            ),
                            'RejectedMillis' => 
                            array (
                              'description' => '工单被拒绝的UNIX时间戳，毫秒为单位。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1514736000000',
                            ),
                            'JoinPermissionId' => 
                            array (
                              'description' => '唯一标识入网凭证的ID。',
                              'type' => 'string',
                              'example' => '126',
                            ),
                            'JoinPermissionName' => 
                            array (
                              'description' => '入网凭证的名称。',
                              'type' => 'string',
                              'example' => '凭证2',
                            ),
                            'OrderState' => 
                            array (
                              'description' => '工单状态。',
                              'type' => 'string',
                              'example' => 'ACCEPTED',
                            ),
                            'OrderId' => 
                            array (
                              'description' => '工单ID。',
                              'type' => 'string',
                              'example' => '123',
                            ),
                          ),
                        ),
                        'GatewayDataflowLimit' => 
                        array (
                          'description' => '网关限流通知。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'AlarmDetail' => 
                            array (
                              'description' => '通知内容。',
                              'type' => 'string',
                              'example' => 'GATEWAY_DATAFLOW_LIMIT',
                            ),
                            'DataflowLimitMillis' => 
                            array (
                              'description' => '限流时间。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1653450720919',
                            ),
                            'GwEui' => 
                            array (
                              'description' => '网关的唯一标识。',
                              'type' => 'string',
                              'example' => '0000000000000000',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 100,\\n    \\"List\\": [\\n      {\\n        \\"NoticeMillis\\": 1514736000000,\\n        \\"Category\\": \\"GATEWAY_OFFLINE\\",\\n        \\"HandleState\\": \\"HANDLED\\",\\n        \\"NotificationId\\": \\"123\\",\\n        \\"HandledMillis\\": 1514736000001,\\n        \\"GatewayOfflineInfo\\": {\\n          \\"GwEui\\": \\"0000000000000000\\",\\n          \\"OfflineMillis\\": 1514736000000\\n        },\\n        \\"JoinPermissionAuthInfo\\": {\\n          \\"CanceledMillis\\": 1514736000000,\\n          \\"ApplyingMillis\\": 1514736000000,\\n          \\"JoinEui\\": \\"0000000000000001\\",\\n          \\"RenterAliyunId\\": \\"some-user\\",\\n          \\"AcceptedMillis\\": 1514736000000,\\n          \\"OwnerAliyunId\\": \\"some-user1\\",\\n          \\"RejectedMillis\\": 1514736000000,\\n          \\"JoinPermissionId\\": \\"126\\",\\n          \\"JoinPermissionName\\": \\"凭证2\\",\\n          \\"OrderState\\": \\"ACCEPTED\\",\\n          \\"OrderId\\": \\"123\\"\\n        },\\n        \\"GatewayDataflowLimit\\": {\\n          \\"AlarmDetail\\": \\"GATEWAY_DATAFLOW_LIMIT\\",\\n          \\"DataflowLimitMillis\\": 1653450720919,\\n          \\"GwEui\\": \\"0000000000000000\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNotificationsResponse>\\n    <Success>true</Success>\\n    <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n    <Data>\\n        <TotalCount>100</TotalCount>\\n        <List>\\n            <NoticeMillis>1514736000000</NoticeMillis>\\n            <Category>GATEWAY_OFFLINE</Category>\\n            <HandleState>HANDLED</HandleState>\\n            <NotificationId>123</NotificationId>\\n            <HandledMillis>1514736000001</HandledMillis>\\n            <GatewayOfflineInfo>\\n                <GwEui>0000000000000000</GwEui>\\n                <OfflineMillis>1514736000000</OfflineMillis>\\n            </GatewayOfflineInfo>\\n            <JoinPermissionAuthInfo>\\n                <CanceledMillis>1514736000000</CanceledMillis>\\n                <ApplyingMillis>1514736000000</ApplyingMillis>\\n                <JoinEui>0000000000000001</JoinEui>\\n                <RenterAliyunId>some-user</RenterAliyunId>\\n                <AcceptedMillis>1514736000000</AcceptedMillis>\\n                <OwnerAliyunId>some-user1</OwnerAliyunId>\\n                <RejectedMillis>1514736000000</RejectedMillis>\\n                <JoinPermissionId>126</JoinPermissionId>\\n                <JoinPermissionName>凭证2</JoinPermissionName>\\n                <OrderState>ACCEPTED</OrderState>\\n                <OrderId>123</OrderId>\\n            </JoinPermissionAuthInfo>\\n            <GatewayDataflowLimit>\\n                <AlarmDetail>GATEWAY_DATAFLOW_LIMIT</AlarmDetail>\\n                <DataflowLimitMillis>1653450720919</DataflowLimitMillis>\\n                <GwEui>0000000000000000</GwEui>\\n            </GatewayDataflowLimit>\\n        </List>\\n    </Data>\\n</ListNotificationsResponse>","errorExample":""}]',
      'title' => '获取通知列表',
      'summary' => '调用ListNotifications获取通知列表。',
    ),
    'ListOwnedJoinPermissions' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'FuzzyRenterAliyunId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配入网凭证租户的阿里云账号ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'some-user',
          ),
        ),
        2 => 
        array (
          'name' => 'FuzzyJoinEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配入网凭证所使用的JoinEUI。',
            'type' => 'string',
            'required' => false,
            'example' => 'd896e0',
          ),
        ),
        3 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据入网凭证的启停用状态过滤。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'FuzzyJoinPermissionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配入网凭证的名称。',
            'type' => 'string',
            'required' => false,
            'example' => '凭证1',
          ),
        ),
        5 => 
        array (
          'name' => 'Offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的起始位置，从 0 开始。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'minimum' => '0',
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的入网凭证的数量上限，大于等于 1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '200',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        7 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定排序字段，可取值为**CREATED_MILLIS**, 表示根据创建时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'CREATED_MILLIS',
            'enum' => 
            array (
              0 => 'CREATED_MILLIS',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '符合过滤条件的入网凭证总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'List' => 
                  array (
                    'description' => '符合过滤条件的入网凭证列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'JoinEui' => 
                        array (
                          'description' => '入网凭证使用的JoinEUI。',
                          'type' => 'string',
                          'example' => '0000000000000000',
                        ),
                        'FreqBandPlanGroupId' => 
                        array (
                          'description' => '入网凭证采用的频段的频段ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '102',
                        ),
                        'Enabled' => 
                        array (
                          'description' => '入网凭证的启停用状态。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'RxDelay' => 
                        array (
                          'description' => 'classA的接收窗口延时。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'RenterAliyunId' => 
                        array (
                          'description' => '入网凭证租户的阿里云账号ID。',
                          'type' => 'string',
                          'example' => 'some-user1',
                        ),
                        'DataRate' => 
                        array (
                          'description' => '工作速率。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4',
                        ),
                        'JoinPermissionId' => 
                        array (
                          'description' => '入网凭证的ID。',
                          'type' => 'string',
                          'example' => '102',
                        ),
                        'JoinPermissionName' => 
                        array (
                          'description' => '入网凭证的名称。',
                          'type' => 'string',
                          'example' => '凭证1',
                        ),
                        'ClassMode' => 
                        array (
                          'description' => '入网凭证采用的LoRaWAN Class模式，可取值：A、B、C。',
                          'type' => 'string',
                          'example' => 'A',
                        ),
                        'AuthState' => 
                        array (
                          'description' => '入网凭证的授权状态。取值：

- **NEW**：未授权
- **APPLYING**：授权中
- **ACCEPTED**：已授权',
                          'type' => 'string',
                          'example' => 'NEW',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          3 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"JoinEui\\": \\"0000000000000000\\",\\n        \\"FreqBandPlanGroupId\\": 102,\\n        \\"Enabled\\": true,\\n        \\"RxDelay\\": 1,\\n        \\"RenterAliyunId\\": \\"some-user1\\",\\n        \\"DataRate\\": 4,\\n        \\"JoinPermissionId\\": \\"102\\",\\n        \\"JoinPermissionName\\": \\"凭证1\\",\\n        \\"ClassMode\\": \\"A\\",\\n        \\"AuthState\\": \\"NEW\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListOwnedJoinPermissionsResponse>\\r\\n      <Data>\\r\\n            <TotalCount>10</TotalCount>\\r\\n            <List>\\r\\n                  <JoinPermission>\\r\\n                        <JoinEui>0000000000000000</JoinEui>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <Enabled>true</Enabled>\\r\\n                        <RenterAliyunId>some-user1</RenterAliyunId>\\r\\n                        <JoinPermissionId>123</JoinPermissionId>\\r\\n                        <AuthState>ACCEPTED</AuthState>\\r\\n                        <JoinPermissionName>凭证1</JoinPermissionName>\\r\\n                        <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\r\\n                  </JoinPermission>\\r\\n                  <JoinPermission>\\r\\n                        <JoinEui>0000000000000001</JoinEui>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <Enabled>true</Enabled>\\r\\n                        <RenterAliyunId>some-user2</RenterAliyunId>\\r\\n                        <JoinPermissionId>126</JoinPermissionId>\\r\\n                        <AuthState>ACCEPTED</AuthState>\\r\\n                        <JoinPermissionName>凭证2</JoinPermissionName>\\r\\n                        <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\r\\n                  </JoinPermission>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListOwnedJoinPermissionsResponse>","errorExample":""}]',
      'title' => '查询入网凭证列表',
      'summary' => '根据过滤条件，查询当前用户账号所拥有的入网凭证列表。',
      'description' => '通过该接口获取到的当前用户账号名下的是专用入网凭证。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListRentedJoinPermissions' => 
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
      'operationType' => 'read',
      'deprecated' => false,
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'FuzzyOwnerAliyunId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配入网凭证拥有者的阿里云账号ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'some-user',
          ),
        ),
        2 => 
        array (
          'name' => 'FuzzyJoinEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配入网凭证使用的JoinEUI。',
            'type' => 'string',
            'required' => false,
            'example' => 'd896e0',
          ),
        ),
        3 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按照凭证的启停用状态进行过滤。**true**表示启用，**false**表示停用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'BoundNodeGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据入网凭证是否关联到节点分组进行过滤。**true**表示已关联，**false**表示未关联。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按照入网凭证的类型进行过滤，取值：

- **LOCAL**：专用凭证
- **ROAMING**：泛在凭证',
            'type' => 'string',
            'required' => false,
            'example' => 'LOCAL',
            'enum' => 
            array (
              0 => 'LOCAL',
              1 => 'ROAMING',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'FuzzyJoinPermissionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊匹配入网凭证的名称。',
            'type' => 'string',
            'required' => false,
            'example' => '凭证1',
          ),
        ),
        7 => 
        array (
          'name' => 'Offset',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的起始位置，从 0 开始。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'minimum' => '0',
            'example' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次查询的入网凭证数量的上限，大于等于 1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '200',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        9 => 
        array (
          'name' => 'SortingField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定排序字段，可取值为**CREATED_MILLIS**, 表示根据创建时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'CREATED_MILLIS',
            'enum' => 
            array (
              0 => 'CREATED_MILLIS',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'Ascending',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Data' => 
              array (
                'description' => '返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '符合过滤条件的入网凭证总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'List' => 
                  array (
                    'description' => '符合过滤条件的入网凭证列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '入网凭证的类型。',
                          'type' => 'string',
                          'example' => 'LOCAL',
                        ),
                        'BoundNodeGroupName' => 
                        array (
                          'description' => '入网凭证绑定的节点组名称。',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'FreqBandPlanGroupId' => 
                        array (
                          'description' => '入网凭证采用的频段的频段ID。',
                          'type' => 'string',
                          'example' => '102',
                        ),
                        'DataRate' => 
                        array (
                          'description' => '工作速率。',
                          'type' => 'string',
                          'example' => '4',
                        ),
                        'JoinPermissionId' => 
                        array (
                          'description' => '入网凭证ID。',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'ClassMode' => 
                        array (
                          'description' => '入网凭证采用的LoRaWAN Class模式，可取值：A、B、C。',
                          'type' => 'string',
                          'example' => 'A',
                        ),
                        'JoinEui' => 
                        array (
                          'description' => '入网凭证使用的的JoinEUI。',
                          'type' => 'string',
                          'example' => '0000000000000000',
                        ),
                        'Enabled' => 
                        array (
                          'description' => '入网凭证的启停用状态。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'BoundNodeGroup' => 
                        array (
                          'description' => '入网凭证是否已关联到节点分组。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'RxDelay' => 
                        array (
                          'description' => 'classA的接收窗口延时。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'BoundNodeGroupId' => 
                        array (
                          'description' => '入网凭证绑定的节点组id。',
                          'type' => 'string',
                          'example' => '123',
                        ),
                        'OwnerAliyunId' => 
                        array (
                          'description' => '- 如果该入网凭证是**专用入网凭证**，该字段表示拥有者的阿里云账号ID。
- 如果该入网凭证是**泛在入网凭证**，该字段恒为AliCloud IoT。',
                          'type' => 'string',
                          'example' => 'some-user1',
                        ),
                        'JoinPermissionName' => 
                        array (
                          'description' => '入网凭证的名称。',
                          'type' => 'string',
                          'example' => '凭证1',
                        ),
                        'DataDispatchConfig' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Destination' => 
                            array (
                              'type' => 'string',
                            ),
                            'IotProduct' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'DebugSwitch' => 
                                array (
                                  'type' => 'boolean',
                                ),
                                'ProductKey' => 
                                array (
                                  'type' => 'string',
                                ),
                                'ProductName' => 
                                array (
                                  'type' => 'string',
                                ),
                                'ProductType' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                            ),
                            'OnsTopics' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'UplinkTopic' => 
                                array (
                                  'type' => 'string',
                                ),
                                'UplinkRegionName' => 
                                array (
                                  'type' => 'string',
                                ),
                                'DownlinkRegionName' => 
                                array (
                                  'type' => 'string',
                                ),
                                'DownlinkTopic' => 
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
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          3 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"Type\\": \\"LOCAL\\",\\n        \\"BoundNodeGroupName\\": \\"123\\",\\n        \\"FreqBandPlanGroupId\\": \\"102\\",\\n        \\"DataRate\\": \\"4\\",\\n        \\"JoinPermissionId\\": \\"123\\",\\n        \\"ClassMode\\": \\"A\\",\\n        \\"JoinEui\\": \\"0000000000000000\\",\\n        \\"Enabled\\": true,\\n        \\"BoundNodeGroup\\": false,\\n        \\"RxDelay\\": \\"1\\",\\n        \\"BoundNodeGroupId\\": \\"123\\",\\n        \\"OwnerAliyunId\\": \\"some-user1\\",\\n        \\"JoinPermissionName\\": \\"凭证1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListRentedJoinPermissionsResponse>\\r\\n      <Data>\\r\\n            <TotalCount>10</TotalCount>\\r\\n            <List>\\r\\n                  <JoinPermission>\\r\\n                        <JoinEui>0000000000000000</JoinEui>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <Enabled>true</Enabled>\\r\\n                        <BoundNodeGroup>false</BoundNodeGroup>\\r\\n                        <JoinPermissionId>123</JoinPermissionId>\\r\\n                        <OwnerAliyunId>some-user1</OwnerAliyunId>\\r\\n                        <Type>LOCAL</Type>\\r\\n                        <JoinPermissionName>凭证1</JoinPermissionName>\\r\\n                        <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\r\\n                  </JoinPermission>\\r\\n                  <JoinPermission>\\r\\n                        <JoinEui>0000000000000001</JoinEui>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <Enabled>true</Enabled>\\r\\n                        <BoundNodeGroup>false</BoundNodeGroup>\\r\\n                        <JoinPermissionId>126</JoinPermissionId>\\r\\n                        <OwnerAliyunId>some-user2</OwnerAliyunId>\\r\\n                        <Type>ROAMING</Type>\\r\\n                        <JoinPermissionName>凭证2</JoinPermissionName>\\r\\n                        <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\r\\n                  </JoinPermission>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListRentedJoinPermissionsResponse>","errorExample":""}]',
      'title' => '查询入网凭证列表',
      'summary' => '查询当前用户账号所租用的入网凭证列表（可能是专用入网凭证或泛在入网凭证）。',
      'description' => '****',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RejectJoinPermissionAuthOrder' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要回绝的授权工单ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          5 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          6 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
          7 => 
          array (
            'errorCode' => 'IllegalOrderStateTransition',
            'errorMessage' => 'The order status conversion is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<RejectJoinPermissionAuthOrderResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</RejectJoinPermissionAuthOrderResponse>","errorExample":""}]',
      'title' => '回绝专用入网凭证授权工单',
      'summary' => '调用RejectJoinPermissionAuthOrder回绝专用入网凭证授权工单。',
      'description' => '> 开发者（解决方案供应商）通过该接口回绝一个由网络运营者授权的专用入网凭证。',
    ),
    'RemoveNodeFromGroup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要移除的节点的DevEUI。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0000000000000000',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceLocked',
            'errorMessage' => 'The specified resource has been locked by another product.',
          ),
          7 => 
          array (
            'errorCode' => 'NodeGroupDoesNotExist',
            'errorMessage' => 'The specified node group does not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'NodeDoesNotExist',
            'errorMessage' => 'The specified node does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveNodeFromGroupResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</RemoveNodeFromGroupResponse>","errorExample":""}]',
      'title' => '从节点分组中移除节点',
      'summary' => '调用RemoveNodeFromGroup从节点分组中移除节点。',
    ),
    'ReturnJoinPermission' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JoinPermissionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要归还的入网凭证ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'JoinPermissionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要归还的入网凭证类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'LOCAL',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          6 => 
          array (
            'errorCode' => 'JoinPermissionAlreadyBoundNodeGroup',
            'errorMessage' => 'The specified join permission has already been bound to another node group.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<ReturnJoinPermissionResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ReturnJoinPermissionResponse>","errorExample":""}]',
      'title' => '归还租用的入网凭证',
      'summary' => '归还租用的入网凭证（可以是专用入网凭证或泛在入网凭证）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SendUnicastCommand' => 
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
      'operationType' => 'write',
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
            'description' => '物联网平台的实例id，为空表示公共实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'iotx-oxssharez',
          ),
        ),
        1 => 
        array (
          'name' => 'DevEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目标节点。',
            'type' => 'string',
            'required' => true,
            'example' => '0000000000000000',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxRetries',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大重发次数，默认为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'CleanUp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否清空该节点的堆积指令，并下发该指令。默认为**false**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'FPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'fPort。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '223',
            'minimum' => '1',
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'Confirmed',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否是confirmed指令，默认为**false**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'Content',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要发送的内容。16进制字符串，最长51个字节（如果换算成16进制字符串，最长为51*2个字符）。',
            'type' => 'string',
            'required' => true,
            'example' => 'xxx',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'Abandoned',
            'errorMessage' => 'An error occurred while processing this request, because the API has been abandoned.',
          ),
          4 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          5 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          6 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<SendUnicastCommandResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</SendUnicastCommandResponse>","errorExample":""}]',
      'title' => '发送单播信息',
      'summary' => '调用SendUnicastCommand发送单播信息。',
    ),
    'SubmitGatewayTupleOrder' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RequiredCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要申请的网关安全密钥的数量。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '2',
          ),
        ),
        1 => 
        array (
          'name' => 'TupleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关密钥类型。

- singlechannel：低速版（单通道型）。

- standard：标准版。

- hybrid：高速版（Hybrid型）。

- noncontractual：高速版。',
            'type' => 'string',
            'required' => true,
            'example' => 'noncontractual',
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
                'description' => '工单ID。',
                'type' => 'string',
                'example' => '12345',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          3 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'ExceedGatewayTupleLimit',
            'errorMessage' => 'The maximum number of gateway tuples is exceeded.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"12345\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SubmitGatewayTupleOrderResponse>\\n    <Data>12345</Data>\\n    <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n    <Success>true</Success>\\n</SubmitGatewayTupleOrderResponse>","errorExample":""}]',
      'title' => '提交网关密钥申请工单',
      'summary' => '提交网关密钥申请工单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SubmitJoinPermissionAuthOrder' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JoinPermissionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要授权的专用入网凭证ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'RenterAliyunId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要授权的开发者的阿里云账号ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'some_user',
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
                'description' => '授权工单ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1234',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          3 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'TooManyRenterNonExistentFailures',
            'errorMessage' => 'You have entered invalid renter usernames for several times. Try again later.',
          ),
          6 => 
          array (
            'errorCode' => 'JoinPermissionAlreadyAuthorized',
            'errorMessage' => 'The specified join permission has already been granted to another renter.',
          ),
          7 => 
          array (
            'errorCode' => 'RenterDoesNotExist',
            'errorMessage' => 'The specified renter does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 1234,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SubmitJoinPermissionAuthOrderResponse>\\r\\n      <Data>1234</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</SubmitJoinPermissionAuthOrderResponse>","errorExample":""}]',
      'title' => '发起专用入网凭证授权工单',
      'summary' => '调用SubmitJoinPermissionAuthOrder发起专用入网凭证授权工单。',
      'description' => '网络运营者可以通过该接口向开发者（解决方案供应商）授权一个专用入网凭证。不过只是发起了一个授权工单，需待开发者接受该授权后，授权才能完成。',
    ),
    'SubmitNodeTupleOrder' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'LoraVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'LoRaWAN协议版本。
',
            'type' => 'string',
            'required' => true,
            'example' => '1.0.2',
            'enum' => 
            array (
              0 => '1.0.2',
              1 => '1.1',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'RequiredCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要申请的节点密钥数量。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '10000',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'TupleType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '申请的密钥类型

noncontractual：专业版密钥

standard：标准版密钥

relay：中继密钥',
            'type' => 'string',
            'required' => true,
            'example' => 'standard',
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
                'description' => '工单 Id。




',
                'type' => 'string',
                'example' => '12345',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
              ),
              'Success' => 
              array (
                'description' => '是否成功。

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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          3 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"12345\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>12345</Data>","errorExample":""}]',
      'title' => '提交节点密钥申请工单',
      'summary' => '提交节点密钥申请工单。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnbindJoinPermissionFromNodeGroup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要接触关联的节点分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'JoinPermissionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参与关联的入网凭证ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'ResourceLocked',
            'errorMessage' => 'The specified resource has been locked by another product.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindJoinPermissionFromNodeGroupResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UnbindJoinPermissionFromNodeGroupResponse>","errorExample":""}]',
      'title' => '接触入网凭证和节点分组的关联',
      'summary' => '调用UnbindJoinPermissionFromNodeGroup接触入网凭证和节点分组的关联。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateDataDispatchConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要更新的节点分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'DataDispatchDestination',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流转目的地。取值：

- **IOT**：数据流转到IoT的产品。
- **ONS**：数据流转到MQ的Topic。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'IOT',
            'enum' => 
            array (
              0 => 'IOT',
              1 => 'MQ',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'ProductType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流转目的地为IoT的产品类型。取值：

- **IOT_SUITE**：数据流转到 IoT 套件基础版。
- **IOT_SUITE_SENIOR**：数据流转到 IoT 套件高级版。

数据流转目的地为IoT时，请求参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'IOT_SUITE',
            'enum' => 
            array (
              0 => 'IOT_SUITE',
              1 => 'IOT_SUITE_SENIOR',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'ProductName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流转目的地为IoT的产品名称。

数据流转目的地为IoT时，请求参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => '产品1',
          ),
        ),
        4 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流转目的地为IoT的Product Key。

数据流转目的地为IoT时，请求参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxxxxxx',
          ),
        ),
        5 => 
        array (
          'name' => 'DebugSwitch',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流转目的地为 IoT 的调试开关。

调试开关主要针对物联网平台自定义Topic，针对物联网络管理控制台，请勿修改自定义topic。

自定义Topic如下：

/ProductKey/${deviceName}/user/update

/ProductKey/${deviceName}/user/get',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'UplinkRegionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流转目的地为MQ的上行Region Id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        7 => 
        array (
          'name' => 'UplinkTopic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据流转目的地为MQ的上行Topic。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceLocked',
            'errorMessage' => 'The specified resource has been locked by another product.',
          ),
          7 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateDataDispatchConfigResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateDataDispatchConfigResponse>","errorExample":""}]',
      'title' => '更新节点分组的数据流转配置',
      'summary' => '调用UpdateDataDispatchConfig更新节点分组的数据流转配置。',
      'requestParamsDescription' => '
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateDataDispatchEnablingState' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NodeGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点分组ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'DataDispatchEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '- **true**：表示启用数据流转
- **false**：表示停用数据流转',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceLocked',
            'errorMessage' => 'The specified resource has been locked by another product.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateDataDispatchEnablingStateResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateDataDispatchEnablingStateResponse>","errorExample":""}]',
      'title' => '启停节点分组的数据流转',
      'summary' => '调用UpdateDataDispatchEnablingState启停节点分组的数据流转。',
    ),
    'UpdateGatewayEnablingState' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'GwEui',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0000000000000000',
          ),
        ),
        2 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启网关。

- **true**：表示启用该网关。
- **false**：表示关闭该网关。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateGatewayEnablingStateResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateGatewayEnablingStateResponse>","errorExample":""}]',
      'title' => '启动、关闭网关',
      'summary' => '调用UpdateGatewayEnablingState启动、关闭网关。',
    ),
    'UpdateNotificationsHandleState' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NotificationId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '通知ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
            ),
            'required' => true,
            'example' => '1',
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'TargetHandleState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要设置的处理状态，可取值为**HANDLED**（已处理）, **UNHANDLED**（未处理）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'UNHANDLED',
            'enum' => 
            array (
              0 => 'HANDLED',
              1 => 'UNHANDLED',
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
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
          4 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          5 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          6 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateNotificationsHandleStateResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateNotificationsHandleStateResponse>","errorExample":""}]',
      'title' => '更新通知的处理状态',
      'summary' => '调用UpdateNotificationsHandleState更新通知的处理状态。',
    ),
    'UpdateOwnedLocalJoinPermission' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'JoinPermissionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专用入网凭证ID，用来指定要更新的入网凭证。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'FreqBandPlanGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专用入网凭证所采用的频段的频段ID，用于更新旧频段。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '201',
          ),
        ),
        3 => 
        array (
          'name' => 'ClassMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '专用入网凭证采用的LoRaWAN Class模式，用于更新旧的 Class 模式。可取值：A、B、C。',
            'type' => 'string',
            'required' => false,
            'example' => 'A',
            'enum' => 
            array (
              0 => 'A',
              1 => 'B',
              2 => 'C',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'JoinPermissionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义入网凭证名称，用于更新旧名称。',
            'type' => 'string',
            'required' => false,
            'example' => '凭证1',
          ),
        ),
        5 => 
        array (
          'name' => 'RxDelay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'classA的接收窗口延时。
',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'DataRate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作速率。',
            'type' => 'string',
            'required' => false,
            'example' => '4',
          ),
        ),
        7 => 
        array (
          'name' => 'JoinEui',
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          6 => 
          array (
            'errorCode' => 'JoinPermissionAlreadyAuthorized',
            'errorMessage' => 'The specified join permission has already been granted to another renter.',
          ),
          7 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
          8 => 
          array (
            'errorCode' => 'JoinPermissionNameDuplicated',
            'errorMessage' => 'The specified join permission name already exists.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidName',
            'errorMessage' => 'The specified name is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidFreqBandPlan',
            'errorMessage' => 'The frequency band plan is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateOwnedLocalJoinPermissionResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateOwnedLocalJoinPermissionResponse>","errorExample":""}]',
      'title' => '更新当前用户账号所拥有的专用入网凭证',
      'summary' => '调用UpdateOwnedLocalJoinPermission更新当前用户账号所拥有的专用入网凭证。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateOwnedLocalJoinPermissionEnablingState' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'JoinPermissionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要操作的专用入网凭证ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '**true**为启用，**false**为停用。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          6 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateOwnedLocalJoinPermissionEnablingStateResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateOwnedLocalJoinPermissionEnablingStateResponse>","errorExample":""}]',
      'title' => '启用或停用专用入网凭证',
      'summary' => '启用、停用当前用户账号所拥有的专用入网凭证。',
    ),
    'UpdateRoamingJoinPermission' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JoinPermissionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要更新的泛在入网凭证的ID。',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'JoinPermissionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义入网凭证名称，用于更新旧名称。',
            'type' => 'string',
            'required' => false,
            'example' => '泛在凭证1',
          ),
        ),
        2 => 
        array (
          'name' => 'RxDelay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'class A的接收窗口延时，单位为ms。
',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'DataRate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作速率。',
            'type' => 'string',
            'required' => false,
            'example' => '4',
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
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。

',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          4 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          6 => 
          array (
            'errorCode' => 'JoinPermissionAlreadyBoundNodeGroup',
            'errorMessage' => 'The specified join permission has already been bound to another node group.',
          ),
          7 => 
          array (
            'errorCode' => 'JoinPermissionNameDuplicated',
            'errorMessage' => 'The specified join permission name already exists.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidName',
            'errorMessage' => 'The specified name is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '更新当前用户账号所申请的泛在入网凭证',
      'summary' => '更新当前用户账号所申请的泛在入网凭证。',
      'description' => '## QPS限制
单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为5。

> RAM用户共享阿里云账号配额。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateRoamingJoinPermissionEnablingState' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JoinPermissionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '泛在凭证id。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234',
          ),
        ),
        1 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '泛在凭证启用状态。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
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
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
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
            'errorCode' => 'ForbiddenByRam',
            'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
          ),
          1 => 
          array (
            'errorCode' => 'ForbiddenByRiskControl',
            'errorMessage' => 'This operation cannot be performed because of security risks.',
          ),
          2 => 
          array (
            'errorCode' => 'NonExistent',
            'errorMessage' => 'The specified resource does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
          ),
          4 => 
          array (
            'errorCode' => 'CloudProductNotActivated',
            'errorMessage' => 'The Link WAN service has not been activated.',
          ),
          5 => 
          array (
            'errorCode' => 'FeatureNotActivated',
            'errorMessage' => 'The feature has not been activated.',
          ),
          6 => 
          array (
            'errorCode' => 'NotResourceOwner',
            'errorMessage' => 'You are not authorized to use this resource.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '更新泛在凭证的启用状态',
      'summary' => '更新泛在凭证的启用状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'linkwan.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'linkwan.cn-shanghai.aliyuncs.com',
    ),
  ),
);
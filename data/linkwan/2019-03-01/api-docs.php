<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'LinkWAN',
        'version' => '2019-03-01',
    ],
    'directories' => [
        [
            'id' => 74414,
            'title' => '网关',
            'type' => 'directory',
            'children' => [
                'CreateGateway',
                'DeleteGateway',
                'UpdateGateway',
                'CountGateways',
                'GetGateway',
                'GetGatewayStatusStat',
                'ListGateways',
            ],
        ],
        [
            'id' => 74422,
            'title' => '节点分组',
            'type' => 'directory',
            'children' => [
                'CreateNodeGroup',
                'DeleteNodeGroup',
                'UpdateNodeGroup',
                'CountNodeGroups',
                'GetNodeGroup',
                'ListNodeGroups',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'AcceptJoinPermissionAuthOrder',
                'AddNodeToGroup',
                'BindJoinPermissionToNodeGroup',
                'ApplyRoamingJoinPermission',
                'CancelJoinPermissionAuthOrder',
                'CheckCloudProductOpenStatus',
                'CheckUserChargeStatus',
                'CountGatewayTupleOrders',
                'CountNodeTupleOrders',
                'CountNodesByNodeGroupId',
                'CountNodesByOwnedJoinPermissionId',
                'CountNotifications',
                'CountOwnedJoinPermissions',
                'CountRentedJoinPermissions',
                'CreateLocalJoinPermission',
                'DeleteLocalJoinPermission',
                'GetFreqBandPlanGroup',
                'GetGatewayPacketStat',
                'GetGatewayTransferPacketsDownloadUrl',
                'GetGatewayTupleOrder',
                'GetGatewayTuplesDownloadUrl',
                'GetJoinPermissionAuthOrder',
                'GetNode',
                'GetNodeGroupTransferPacketsDownloadUrl',
                'GetNodeTransferPacket',
                'GetNodeTransferPacketsDownloadUrl',
                'GetNodeTupleOrder',
                'GetNodeTuplesDownloadUrl',
                'GetNotification',
                'GetOwnedJoinPermission',
                'GetRentedJoinPermission',
                'GetUserLicense',
                'ListActivatedFeatures',
                'ListActiveGateways',
                'ListFreqBandPlanGroups',
                'ListGatewayOnlineRecords',
                'ListGatewayTransferFlowStats',
                'ListGatewayTransferPackets',
                'ListGatewayTupleOrders',
                'ListGatewaysGisInfo',
                'ListNodeGroupTransferFlowStats',
                'ListNodeGroupTransferPackets',
                'ListNodeTransferPacketPaths',
                'ListNodeTransferPackets',
                'ListNodeTupleOrders',
                'ListNodesByNodeGroupId',
                'ListNodesByOwnedJoinPermissionId',
                'ListNotifications',
                'ListOwnedJoinPermissions',
                'ListRentedJoinPermissions',
                'RejectJoinPermissionAuthOrder',
                'RemoveNodeFromGroup',
                'ReturnJoinPermission',
                'SendUnicastCommand',
                'SubmitGatewayTupleOrder',
                'SubmitJoinPermissionAuthOrder',
                'SubmitNodeTupleOrder',
                'UnbindJoinPermissionFromNodeGroup',
                'UpdateDataDispatchConfig',
                'UpdateDataDispatchEnablingState',
                'UpdateGatewayEnablingState',
                'UpdateNotificationsHandleState',
                'UpdateOwnedLocalJoinPermission',
                'UpdateOwnedLocalJoinPermissionEnablingState',
                'UpdateRoamingJoinPermission',
                'UpdateRoamingJoinPermissionEnablingState',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateGateway' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。'."\n"
                            ."\n"
                            .'><notice>'."\n"
                            .'- 若有ID值，必须传入该ID值，否则调用会失败。'."\n"
                            .'- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。'."\n"
                            ."\n"
                            .'></notice>'."\n"
                            ."\n"
                            .'实例的更多信息，请参见[实例概述](~~356505~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iot-***-v6***',
                    ],
                ],
                [
                    'name' => 'GwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0000000000000000',
                    ],
                ],
                [
                    'name' => 'PinCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关PinCode，用于确保录入者拥有该网关。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '000000',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义网关名称。'."\n"
                            ."\n"
                            .'- 仅支持中文汉字、英文字母、数字、下划线（_）。'."\n"
                            ."\n"
                            .'- 必须以中文汉字、英文字母或数字开头。'."\n"
                            ."\n"
                            .'- 长度不超过30个字符，不少于4个字符（一个中文汉字算一个字符）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vmee',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义网关描述信息，长度不超过100个字符（一个中文汉字算一个字符）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my gateway',
                    ],
                ],
                [
                    'name' => 'FreqBandPlanGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关频段ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'CommunicationMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关通信模式。取值：'."\n"
                            ."\n"
                            .'- FULL_DUPLEX：全双工。'."\n"
                            ."\n"
                            .'- HALF_DUPLEX：半双工。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'HALF_DUPLEX',
                        'enum' => [
                            'HALF_DUPLEX',
                            'FULL_DUPLEX',
                        ],
                    ],
                ],
                [
                    'name' => 'City',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关所在城市名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '杭州',
                    ],
                ],
                [
                    'name' => 'District',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关所在城区名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '滨江区',
                    ],
                ],
                [
                    'name' => 'Address',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关所在详细地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '详细地址',
                    ],
                ],
                [
                    'name' => 'GisCoordinateSystem',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关经纬度所采用的坐标系统，可取值为**WGS_84**, **GCJ_02**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'GCJ_02',
                        'enum' => [
                            'WGS_84',
                            'GCJ_02',
                        ],
                    ],
                ],
                [
                    'name' => 'Longitude',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关经度。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                        'example' => '123.45678',
                    ],
                ],
                [
                    'name' => 'Latitude',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关纬度。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                        'example' => '23.45678',
                    ],
                ],
                [
                    'name' => 'AddressCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关所在地区ID，由`http://lbs.amap.com/api/javascript-api/download`定义。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'GwEuiDuplicated',
                        'errorMessage' => 'A gateway with the same gwEui already exists.',
                    ],
                    [
                        'errorCode' => 'GatewayTupleAlreadyAbandoned',
                        'errorMessage' => 'The specified gateway tuple has been abandoned.',
                    ],
                    [
                        'errorCode' => 'IotHubTripleMissing',
                        'errorMessage' => 'The IoT Platform trituple of this gateway does not exist.',
                    ],
                    [
                        'errorCode' => 'InvalidPinCode',
                        'errorMessage' => 'An error occurred while verifying PinCode.',
                    ],
                    [
                        'errorCode' => 'GatewayAlreadyBoundToOthers',
                        'errorMessage' => 'This gateway has already been bound to another account.',
                    ],
                    [
                        'errorCode' => 'ExceedGatewayLimit',
                        'errorMessage' => 'The maximum number of gateways is exceeded.',
                    ],
                    [
                        'errorCode' => 'InvalidFreqBandPlan',
                        'errorMessage' => 'The frequency band plan is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidName',
                        'errorMessage' => 'The specified name is invalid.',
                    ],
                    [
                        'errorCode' => 'GatewayInstanceInvalid',
                        'errorMessage' => 'The instance ID is invalid.',
                    ],
                    [
                        'errorCode' => 'GatewayDistributeFail',
                        'errorMessage' => 'Failed to distribute the gateway tuple.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateGatewayResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CreateGatewayResponse>","errorExample":""}]',
            'title' => '录入网关',
            'summary' => '调用CreateGateway录入网关。',
        ],
        'DeleteGateway' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。'."\n"
                            .'您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。'."\n"
                            ."\n"
                            .'> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iot-060a09b1',
                    ],
                ],
                [
                    'name' => 'GwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0000000000000000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'GatewayDistributeFail',
                        'errorMessage' => 'Failed to distribute the gateway tuple.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteGatewayResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</DeleteGatewayResponse>","errorExample":""}]',
            'title' => 'DeleteGateway',
            'summary' => '调用DeleteGateway删除已录入的网关。',
        ],
        'UpdateGateway' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0000000000000000',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义网关名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '网关名称',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义网关描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '网关描述',
                    ],
                ],
                [
                    'name' => 'FreqBandPlanGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关频段ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'CommunicationMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关通信模式。可取值为FULL_DUPLEX(全双工）、HALF_DUPLEX(半双工)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HALF_DUPLEX',
                        'enum' => [
                            'HALF_DUPLEX',
                            'FULL_DUPLEX',
                        ],
                    ],
                ],
                [
                    'name' => 'AddressCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关所在地区ID，由`http://lbs.amap.com/api/javascript-api/download`定义。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'City',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关所在城市名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '某某市',
                    ],
                ],
                [
                    'name' => 'District',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关所在城区名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '某某区',
                    ],
                ],
                [
                    'name' => 'Address',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关所在详细地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '详细地址',
                    ],
                ],
                [
                    'name' => 'GisCoordinateSystem',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关经纬度所采用的坐标系统，可取值为**WGS_84**, **GCJ_02**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GCJ_02',
                        'enum' => [
                            'GCJ_02',
                            'WGS_84',
                        ],
                    ],
                ],
                [
                    'name' => 'Longitude',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关经度。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '123.45678',
                    ],
                ],
                [
                    'name' => 'Latitude',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关纬度。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '23.45678',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'InvalidName',
                        'errorMessage' => 'The specified name is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateGatewayResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateGatewayResponse>","errorExample":""}]',
            'title' => '更新网关信息',
            'summary' => '调用UpdateGateway更新网关信息。',
        ],
        'CountGateways' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OnlineState',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关在离线状态过滤。'."\n"
                            ."\n"
                            .'若未传入此参数，则不限制在线状态。可取值为**ONLINE**和**OFFLINE**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ONLINE',
                        'enum' => [
                            'ONLINE',
                            'OFFLINE',
                        ],
                    ],
                ],
                [
                    'name' => 'FuzzyGwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'GwEUI模糊过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'FuzzyCity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '城市名模糊过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '杭州',
                    ],
                ],
                [
                    'name' => 'FuzzyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关名称模糊过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name',
                    ],
                ],
                [
                    'name' => 'FreqBandPlanGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关频段ID过滤。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'IsEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关启停用状态过滤。'."\n"
                            ."\n"
                            .'若未传入此参数，则不限制启停状态。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '满足过滤条件的网关总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 100,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CountGatewaysResponse>\\r\\n      <Data>100</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CountGatewaysResponse>","errorExample":""}]',
            'title' => '统计网关数量',
            'summary' => '统计当前用户账号名下符合过滤条件的网关数量。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetGateway' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。'."\n"
                            .'您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。'."\n"
                            ."\n"
                            .'> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iot-060a09b1',
                    ],
                ],
                [
                    'name' => 'GwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0000000000000000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '网关信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ChargeStatus' => [
                                        'description' => '网关欠费状态。'."\n"
                                            ."\n"
                                            .'- NORMAL：网关未欠费，正常工作。'."\n"
                                            .'- ARREARAGE：网关欠费。',
                                        'type' => 'string',
                                        'example' => 'NORMAL',
                                    ],
                                    'ClassBSupported' => [
                                        'description' => '该网关是否支持Class B模式。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'FreqBandPlanGroupId' => [
                                        'description' => '网关频段ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123',
                                    ],
                                    'District' => [
                                        'description' => '网关所在城区名称。',
                                        'type' => 'string',
                                        'example' => '某某区',
                                    ],
                                    'GisCoordinateSystem' => [
                                        'description' => '网关经纬度所采用的坐标系统，可取值：**WGS_84**, **GCJ_02**。',
                                        'type' => 'string',
                                        'example' => 'GCJ_02',
                                    ],
                                    'City' => [
                                        'description' => '网关所在城市名称。',
                                        'type' => 'string',
                                        'example' => '某某市',
                                    ],
                                    'TimeCorrectable' => [
                                        'description' => '该网关是否可以作为时间校准网关。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'OnlineState' => [
                                        'description' => '网关的在线、离线状态。'."\n"
                                            ."\n"
                                            .'- **ONLINE**：在线。'."\n"
                                            ."\n"
                                            .'- **OFFLINE**：离线。',
                                        'type' => 'string',
                                        'example' => 'ONLINE',
                                    ],
                                    'AuthTypes' => [
                                        'description' => '网关合约类型。'."\n"
                                            ."\n"
                                            .'- **HYBRID**：hybrid网关。'."\n"
                                            .'- **SINGLE_CHANNEL**：单通道网关。'."\n"
                                            .'- **STANDARD**：标准合约网关。',
                                        'type' => 'string',
                                        'example' => 'STANDARD',
                                    ],
                                    'OnlineStateChangedMillis' => [
                                        'description' => '最近一次在线、离线状态的变更时间。'."\n"
                                            ."\n"
                                            .'格式为UNIX时间戳，以毫秒为单位。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000000',
                                    ],
                                    'CommunicationMode' => [
                                        'description' => '网关通信模式。可取值为：'."\n"
                                            ."\n"
                                            .'- FULL_DUPLEX：全双工。'."\n"
                                            ."\n"
                                            .'- HALF_DUPLEX：半双工。',
                                        'type' => 'string',
                                        'example' => 'HALF_DUPLEX',
                                    ],
                                    'Description' => [
                                        'description' => '自定义网关描述。',
                                        'type' => 'string',
                                        'example' => '网关描述',
                                    ],
                                    'Enabled' => [
                                        'description' => '该网关是否处于启用状态。'."\n"
                                            ."\n"
                                            .'- true：启用状态。'."\n"
                                            ."\n"
                                            .'- false：停用状态。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'ClassBWorking' => [
                                        'description' => '该网关是否正工作在Class B模式下。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Address' => [
                                        'description' => '网关所在详细地址。',
                                        'type' => 'string',
                                        'example' => '详细地址',
                                    ],
                                    'Longitude' => [
                                        'description' => '网关经度。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '123.45678',
                                    ],
                                    'EmbeddedNsId' => [
                                        'description' => 'Hybrid网关id。'."\n",
                                        'type' => 'string',
                                        'example' => '123',
                                    ],
                                    'Latitude' => [
                                        'description' => '网关纬度。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '23.45678',
                                    ],
                                    'Name' => [
                                        'description' => '自定义网关名称。',
                                        'type' => 'string',
                                        'example' => '网关名称',
                                    ],
                                    'GwEui' => [
                                        'description' => '网关唯一标识。',
                                        'type' => 'string',
                                        'example' => '0000000000000000',
                                    ],
                                    'AddressCode' => [
                                        'description' => '网关所在地区ID，由`http://lbs.amap.com/api/javascript-api/download`定义。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"ChargeStatus\\": \\"NORMAL\\",\\n    \\"ClassBSupported\\": true,\\n    \\"FreqBandPlanGroupId\\": 123,\\n    \\"District\\": \\"某某区\\",\\n    \\"GisCoordinateSystem\\": \\"GCJ_02\\",\\n    \\"City\\": \\"某某市\\",\\n    \\"TimeCorrectable\\": true,\\n    \\"OnlineState\\": \\"ONLINE\\",\\n    \\"AuthTypes\\": \\"STANDARD\\",\\n    \\"OnlineStateChangedMillis\\": 1514736000000,\\n    \\"CommunicationMode\\": \\"HALF_DUPLEX\\",\\n    \\"Description\\": \\"网关描述\\",\\n    \\"Enabled\\": true,\\n    \\"ClassBWorking\\": true,\\n    \\"Address\\": \\"详细地址\\",\\n    \\"Longitude\\": 123.45678,\\n    \\"EmbeddedNsId\\": \\"123\\",\\n    \\"Latitude\\": 23.45678,\\n    \\"Name\\": \\"网关名称\\",\\n    \\"GwEui\\": \\"0000000000000000\\",\\n    \\"AddressCode\\": 123\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetGatewayResponse>\\r\\n      <Data>\\r\\n            <City>某某市</City>\\r\\n            <Name>网关名称</Name>\\r\\n            <District>某某区</District>\\r\\n            <OnlineState>ONLINE</OnlineState>\\r\\n            <TimeCorrectable>true</TimeCorrectable>\\r\\n            <Enabled>true</Enabled>\\r\\n            <Longitude>123.45678</Longitude>\\r\\n            <Latitude>23.45678</Latitude>\\r\\n            <OnlineStateChangedMillis>1514736000000</OnlineStateChangedMillis>\\r\\n            <ClassBSupported>true</ClassBSupported>\\r\\n            <Address>详细地址</Address>\\r\\n            <GwEui>0000000000000000</GwEui>\\r\\n            <CommunicateMode>HALF_DUPLEX</CommunicateMode>\\r\\n            <ClassBWorking>true</ClassBWorking>\\r\\n            <FreqBandPlanGroupId>123</FreqBandPlanGroupId>\\r\\n            <AddressCode>123</AddressCode>\\r\\n            <GisCoordinateSystem>GCJ-02</GisCoordinateSystem>\\r\\n            <Description>网关描述</Description>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetGatewayResponse>","errorExample":""}]',
            'title' => 'GetGateway',
            'summary' => '调用GetGateway获取网关信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetGatewayStatusStat' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。'."\n"
                            .'您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。'."\n"
                            ."\n"
                            .'> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iot-060a09b1',
                    ],
                ],
                [
                    'name' => 'GwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关的GwEUI。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0000000000000000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '网关状态统计列表。',
                                'type' => 'object',
                                'properties' => [
                                    'MemoryRadio' => [
                                        'description' => '网关内存占用百分比，如42.0表示内存占用42%。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '42.0',
                                    ],
                                    'OnlineHour' => [
                                        'description' => '累计在线小时数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '42',
                                    ],
                                    'Enabled' => [
                                        'description' => '网关的启停用状态。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'TxCount' => [
                                        'description' => '累计TX。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'RxCount' => [
                                        'description' => '累计RX。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'GwEui' => [
                                        'description' => '网关的GwEUI。',
                                        'type' => 'string',
                                        'example' => '0000000000000000',
                                    ],
                                    'OnlineState' => [
                                        'description' => '网关在线状态。',
                                        'type' => 'string',
                                        'example' => 'ONLINE',
                                    ],
                                    'CpuRadio' => [
                                        'description' => '网关CPU占用百分比，如10.5表示CPU占用10.5%。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '42.0',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"MemoryRadio\\": 42,\\n    \\"OnlineHour\\": 42,\\n    \\"Enabled\\": true,\\n    \\"TxCount\\": 10,\\n    \\"RxCount\\": 10,\\n    \\"GwEui\\": \\"0000000000000000\\",\\n    \\"OnlineState\\": \\"ONLINE\\",\\n    \\"CpuRadio\\": 42\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetGatewayStatusStatResponse>\\r\\n      <Data>\\r\\n            <OnlineState>ONLINE</OnlineState>\\r\\n            <MemoryRadio>42.0</MemoryRadio>\\r\\n            <CpuRadio>42.0</CpuRadio>\\r\\n            <RxCount>10</RxCount>\\r\\n            <OnlineHour>42</OnlineHour>\\r\\n            <TxCount>10</TxCount>\\r\\n            <GwEui>0000000000000000</GwEui>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetGatewayStatusStatResponse>","errorExample":""}]',
            'title' => 'GetGatewayStatusStat',
            'summary' => '调用GetGatewayStatusStat获取网关状态统计，如 CPU、内存占用等。',
        ],
        'ListGateways' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。'."\n"
                            ."\n"
                            .'><notice>'."\n"
                            .'- 若有ID值，必须传入该ID值，否则调用会失败。'."\n"
                            .'- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。'."\n"
                            ."\n"
                            .'></notice>'."\n"
                            ."\n"
                            .'实例的更多信息，请参见[实例概述](~~356505~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iot-***-v6***',
                    ],
                ],
                [
                    'name' => 'OnlineState',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关的在线、离线状态过滤。如未传入此参数，则不限制在线状态。可取值为：'."\n"
                            ."\n"
                            .'- **ONLINE**：在线。'."\n"
                            ."\n"
                            .'- **OFFLINE**：离线。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OFFLINE',
                        'enum' => [
                            'ONLINE',
                            'OFFLINE',
                        ],
                    ],
                ],
                [
                    'name' => 'FuzzyGwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'GwEUI模糊过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'FuzzyCity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '城市名模糊过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CityName',
                    ],
                ],
                [
                    'name' => 'FuzzyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关名称模糊过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GatewayName',
                    ],
                ],
                [
                    'name' => 'FreqBandPlanGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关频段ID过滤。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'IsEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关的启用、停用状态过滤。如未传入此参数，则不限制启停状态。可取值为：'."\n"
                            ."\n"
                            .'- **true**：启用。'."\n"
                            ."\n"
                            .'- **false**：停用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的起始位置，从0开始。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'minimum' => '0',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的网关数量上限，最大支持200，须大于等于1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'minimum' => '1',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定排序字段，可取值为**ONLINE_STATE_CHANGED_MILLIS**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ONLINE_STATE_CHANGED_MILLIS',
                        'enum' => [
                            'ONLINE_STATE_CHANGED_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配合**SortingField**参数一起使用。'."\n"
                            ."\n"
                            .'- **true**：升序。'."\n"
                            ."\n"
                            .'- **false**：降序。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '满足过滤条件的网关总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'List' => [
                                        'description' => '查询到的网关信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ChargeStatus' => [
                                                    'description' => '网关欠费状态。'."\n"
                                                        ."\n"
                                                        .'- **NORMAL**：网关未欠费，正常工作。'."\n"
                                                        .'- **ARREARAGE**：网关欠费。',
                                                    'type' => 'string',
                                                    'example' => 'NORMAL',
                                                ],
                                                'ClassBSupported' => [
                                                    'description' => '该网关是否支持**Class B**模式。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'FreqBandPlanGroupId' => [
                                                    'description' => '网关频段ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '123',
                                                ],
                                                'District' => [
                                                    'description' => '网关所在城区名称。',
                                                    'type' => 'string',
                                                    'example' => '某某区',
                                                ],
                                                'GisCoordinateSystem' => [
                                                    'description' => '网关经纬度所采用的坐标系统，可取值为**WGS_84**，**GCJ_02**。',
                                                    'type' => 'string',
                                                    'example' => 'GCJ_02',
                                                ],
                                                'City' => [
                                                    'description' => '网关所在城市名称。',
                                                    'type' => 'string',
                                                    'example' => '某某市',
                                                ],
                                                'TimeCorrectable' => [
                                                    'description' => '该网关是否可以作为时间校准网关。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'OnlineState' => [
                                                    'description' => '网关的在线、离线状态。可取值为：'."\n"
                                                        ."\n"
                                                        .'- **ONLINE**：在线。'."\n"
                                                        ."\n"
                                                        .'- **OFFLINE**：离线。',
                                                    'type' => 'string',
                                                    'example' => 'ONLINE',
                                                ],
                                                'AuthTypes' => [
                                                    'description' => '网关合约类型。'."\n"
                                                        ."\n"
                                                        .'- **HYBRID**：hybrid网关。'."\n"
                                                        ."\n"
                                                        .'- **SINGLE_CHANNEL**：单通道网关。'."\n"
                                                        ."\n"
                                                        .'- **STANDARD**：标准合约网关。',
                                                    'type' => 'string',
                                                    'example' => 'STANDARD',
                                                ],
                                                'OnlineStateChangedMillis' => [
                                                    'description' => '最近一次在线、离线状态的变更时间。'."\n"
                                                        ."\n"
                                                        .'格式为UNIX时间戳，以毫秒为单位。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514736000000',
                                                ],
                                                'CommunicationMode' => [
                                                    'description' => '网关通信模式。可取值为：'."\n"
                                                        ."\n"
                                                        .'- **FULL_DUPLEX**：全双工。'."\n"
                                                        ."\n"
                                                        .'- **HALF_DUPLEX**：半双工。',
                                                    'type' => 'string',
                                                    'example' => 'HALF_DUPLEX',
                                                ],
                                                'Description' => [
                                                    'description' => '自定义网关描述。',
                                                    'type' => 'string',
                                                    'example' => '网关描述',
                                                ],
                                                'Enabled' => [
                                                    'description' => '该网关是否处于启用状态。'."\n"
                                                        ."\n"
                                                        .'- **true**：启用状态。'."\n"
                                                        ."\n"
                                                        .'- **false**：停用状态。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'ClassBWorking' => [
                                                    'description' => '该网关是否正工作在Class B模式下。'."\n"
                                                        ."\n"
                                                        .'- **true**：是。'."\n"
                                                        ."\n"
                                                        .'- **false**：否。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'Address' => [
                                                    'description' => '网关所在详细地址。',
                                                    'type' => 'string',
                                                    'example' => '详细地址',
                                                ],
                                                'Longitude' => [
                                                    'description' => '网关经度。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '123.45678',
                                                ],
                                                'EmbeddedNsId' => [
                                                    'description' => 'Hybrid网关id。',
                                                    'type' => 'string',
                                                    'example' => '123',
                                                ],
                                                'Latitude' => [
                                                    'description' => '网关纬度。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '23.45678',
                                                ],
                                                'Name' => [
                                                    'description' => '自定义网关名称。',
                                                    'type' => 'string',
                                                    'example' => '网关名称',
                                                ],
                                                'GwEui' => [
                                                    'description' => '网关唯一标识。',
                                                    'type' => 'string',
                                                    'example' => '0000000000000000',
                                                ],
                                                'AddressCode' => [
                                                    'description' => '网关所在地区ID，由`http://lbs.amap.com/api/javascript-api/download`定义。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '123',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 2,\\n    \\"List\\": [\\n      {\\n        \\"ChargeStatus\\": \\"NORMAL\\",\\n        \\"ClassBSupported\\": true,\\n        \\"FreqBandPlanGroupId\\": 123,\\n        \\"District\\": \\"某某区\\",\\n        \\"GisCoordinateSystem\\": \\"GCJ_02\\",\\n        \\"City\\": \\"某某市\\",\\n        \\"TimeCorrectable\\": true,\\n        \\"OnlineState\\": \\"ONLINE\\",\\n        \\"AuthTypes\\": \\"STANDARD\\",\\n        \\"OnlineStateChangedMillis\\": 1514736000000,\\n        \\"CommunicationMode\\": \\"HALF_DUPLEX\\",\\n        \\"Description\\": \\"网关描述\\",\\n        \\"Enabled\\": true,\\n        \\"ClassBWorking\\": true,\\n        \\"Address\\": \\"详细地址\\",\\n        \\"Longitude\\": 123.45678,\\n        \\"EmbeddedNsId\\": \\"123\\",\\n        \\"Latitude\\": 23.45678,\\n        \\"Name\\": \\"网关名称\\",\\n        \\"GwEui\\": \\"0000000000000000\\",\\n        \\"AddressCode\\": 123\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListGatewaysResponse>\\r\\n      <Data>\\r\\n            <TotalCount>23</TotalCount>\\r\\n            <List>\\r\\n                  <Gateway>\\r\\n                        <City>某某市</City>\\r\\n                        <Name>网关名称</Name>\\r\\n                        <District>某某区</District>\\r\\n                        <OnlineState>ONLINE</OnlineState>\\r\\n                        <TimeCorrectable>true</TimeCorrectable>\\r\\n                        <Enabled>true</Enabled>\\r\\n                        <Longitude>123.45678</Longitude>\\r\\n                        <Latitude>23.45678</Latitude>\\r\\n                        <OnlineStateChangedMillis>1514736000000</OnlineStateChangedMillis>\\r\\n                        <ClassBSupported>true</ClassBSupported>\\r\\n                        <Address>详细地址</Address>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <CommunicateMode>HALF_DUPLEX</CommunicateMode>\\r\\n                        <ClassBWorking>true</ClassBWorking>\\r\\n                        <FreqBandPlanGroupId>123</FreqBandPlanGroupId>\\r\\n                        <AddressCode>123</AddressCode>\\r\\n                        <GisCoordinateSystem>GCJ-02</GisCoordinateSystem>\\r\\n                        <Description>网关描述</Description>\\r\\n                  </Gateway>\\r\\n                  <Gateway>\\r\\n                        <City>某某市</City>\\r\\n                        <Name>网关名称</Name>\\r\\n                        <District>某某区</District>\\r\\n                        <OnlineState>ONLINE</OnlineState>\\r\\n                        <TimeCorrectable>true</TimeCorrectable>\\r\\n                        <Enabled>true</Enabled>\\r\\n                        <Longitude>123.45678</Longitude>\\r\\n                        <Latitude>23.45678</Latitude>\\r\\n                        <OnlineStateChangedMillis>1514736000000</OnlineStateChangedMillis>\\r\\n                        <ClassBSupported>true</ClassBSupported>\\r\\n                        <Address>详细地址</Address>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <CommunicateMode>HALF_DUPLEX</CommunicateMode>\\r\\n                        <ClassBWorking>true</ClassBWorking>\\r\\n                        <FreqBandPlanGroupId>123</FreqBandPlanGroupId>\\r\\n                        <AddressCode>123</AddressCode>\\r\\n                        <GisCoordinateSystem>GCJ-02</GisCoordinateSystem>\\r\\n                        <Description>网关描述</Description>\\r\\n                  </Gateway>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListGatewaysResponse>","errorExample":""}]',
            'title' => '查询网关信息列表',
            'summary' => '根据过滤条件查询当前用户账号名下的网关信息列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateNodeGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'NodeGroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点分组的名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'group1',
                    ],
                ],
                [
                    'name' => 'JoinPermissionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '与节点分组关联的入网凭证ID。',
                        'type' => 'string',
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
                            'Data' => [
                                'description' => '节点分组ID。',
                                'type' => 'string',
                                'example' => '123456',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NodeGroupNameDuplicated',
                        'errorMessage' => 'The specified node group name already exists.',
                    ],
                    [
                        'errorCode' => 'NodeGroupAlreadyBoundJoinPermission',
                        'errorMessage' => 'This node group is already bound to a join permission.',
                    ],
                    [
                        'errorCode' => 'JoinPermissionDoesNotExist',
                        'errorMessage' => 'The specified join permission does not exist.',
                    ],
                    [
                        'errorCode' => 'JoinPermissionAlreadyBoundNodeGroup',
                        'errorMessage' => 'The specified join permission has already been bound to another node group.',
                    ],
                    [
                        'errorCode' => 'InvalidName',
                        'errorMessage' => 'The specified name is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"123456\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateNodeGroupResponse>\\r\\n      <Data>123456</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CreateNodeGroupResponse>","errorExample":""}]',
            'title' => '创建节点分组',
            'summary' => '调用CreateNodeGroup创建节点分组。',
        ],
        'DeleteNodeGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的节点分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'ResourceLocked',
                        'errorMessage' => 'The specified resource has been locked by another product.',
                    ],
                    [
                        'errorCode' => 'NodeGroupAlreadyBoundJoinPermission',
                        'errorMessage' => 'This node group is already bound to a join permission.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteNodeGroupResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</DeleteNodeGroupResponse>","errorExample":""}]',
            'title' => '删除节点分组',
            'summary' => '调用DeleteNodeGroup删除节点分组。',
        ],
        'UpdateNodeGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'NodeGroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点分组的名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'group1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                    [
                        'errorCode' => 'NodeGroupNameDuplicated',
                        'errorMessage' => 'The specified node group name already exists.',
                    ],
                    [
                        'errorCode' => 'InvalidName',
                        'errorMessage' => 'The specified name is invalid.',
                    ],
                    [
                        'errorCode' => 'ResourceLocked',
                        'errorMessage' => 'The specified resource has been locked by another product.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateNodeGroupResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateNodeGroupResponse>","errorExample":""}]',
            'title' => '更新节点分组',
            'summary' => '调用UpdateNodeGroup更新节点分组。',
        ],
        'CountNodeGroups' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。'."\n"
                            .'您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。'."\n"
                            ."\n"
                            .'> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iot-060a09wy',
                    ],
                ],
                [
                    'name' => 'FuzzyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配节点分组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'group1',
                    ],
                ],
                [
                    'name' => 'FuzzyJoinEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配节点分组中节点所使用的 JoinEUI。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd896e0',
                    ],
                ],
                [
                    'name' => 'FuzzyDevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配节点分组中节点的 DevEUI。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd896e0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '满足过滤条件的节点分组总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 100,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CountNodeGroupsResponse>\\r\\n      <Data>100</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CountNodeGroupsResponse>","errorExample":""}]',
            'title' => 'CountNodeGroups',
            'summary' => '调用CountNodeGroups统计符合过滤条件的节点分组总数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetNodeGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。'."\n"
                            .'您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。'."\n"
                            ."\n"
                            .'> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iot-cn-0pp1n8t****',
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点分组ID，可调用[ListNodeGroups](~~109944~~)接口查询获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123456',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否调用成功。返回值：'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- ** false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '调用成功时返回的节点分组信息列表。',
                                'type' => 'object',
                                'properties' => [
                                    'RxMonthSum' => [
                                        'description' => '与节点分组关联的入网凭证的当月上行数据包量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'NodeGroupName' => [
                                        'description' => '节点分组的名称。',
                                        'type' => 'string',
                                        'example' => '节点分组名称',
                                    ],
                                    'MulticastNodeCapacity' => [
                                        'description' => '节点分组所关联的组播组能够容纳的节点数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                    'JoinPermissionOwnerAliyunId' => [
                                        'description' => '- 如果关联的是专用凭证，该字段表示入网凭证拥有者的阿里云账号。'."\n"
                                            .'- 如果关联的是泛在凭证，该字段值为**AliCloud IoT**。',
                                        'type' => 'string',
                                        'example' => 'some-user',
                                    ],
                                    'MulticastEnabled' => [
                                        'description' => '节点分组所关联的组播组是否被启用。返回值：'."\n"
                                            ."\n"
                                            .'- **true**：启用。'."\n"
                                            .'- **false**：停用。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'TxMonthSum' => [
                                        'description' => '与节点分组关联的入网凭证的当月下行数据包量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'FreqBandPlanGroupId' => [
                                        'description' => '节点分组中的节点采用的频段ID，与分组所关联的入网凭证中指定的一致。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '102',
                                    ],
                                    'TxDailySum' => [
                                        'description' => '与节点分组关联的入网凭证的当天下行数据包量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'JoinPermissionEnabled' => [
                                        'description' => '与节点分组关联的入网凭证的启停状态。返回值：'."\n"
                                            ."\n"
                                            .'- **true**：启用。'."\n"
                                            .'- **false**：停用。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'JoinPermissionId' => [
                                        'description' => '与节点分组关联的入网凭证的ID。',
                                        'type' => 'string',
                                        'example' => '1234569',
                                    ],
                                    'ClassMode' => [
                                        'description' => '节点分组中的节点所采用的LoRaWAN Class模式，与分组所关联的入网凭证中指定的一致。',
                                        'type' => 'string',
                                        'example' => 'A',
                                    ],
                                    'NodeGroupId' => [
                                        'description' => '节点分组ID。',
                                        'type' => 'string',
                                        'example' => '123456',
                                    ],
                                    'MulticastNodeCount' => [
                                        'description' => '节点分组所关联的组播组当前已经添加的节点数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'DataDispatchEnabled' => [
                                        'description' => '节点分组的数据流转启停状态。返回值：'."\n"
                                            ."\n"
                                            .'- **true**：启用。'."\n"
                                            .'- **false**：停用。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'MulticastGroupId' => [
                                        'description' => '节点分组所关联的组播组ID。',
                                        'type' => 'string',
                                        'example' => '1234',
                                    ],
                                    'RxDailySum' => [
                                        'description' => '与节点分组关联的入网凭证的当天上行数据包量。',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'JoinEui' => [
                                        'description' => '节点分组中的节点使用的JoinEUI，与分组所关联的入网凭证中指定的JoinEUI一致。',
                                        'type' => 'string',
                                        'example' => '0000000000000000',
                                    ],
                                    'CreateMillis' => [
                                        'description' => '节点分组的创建时间，格式为UNIX时间戳，以毫秒为单位。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000000',
                                    ],
                                    'JoinPermissionType' => [
                                        'description' => '与节点分组关联的入网凭证类型。返回值：'."\n"
                                            ."\n"
                                            .'- **LOCAL**：专用凭证。'."\n"
                                            .'- **ROAMING**：泛在凭证。',
                                        'type' => 'string',
                                        'example' => 'LOCAL',
                                    ],
                                    'NodesCnt' => [
                                        'description' => '节点分组中的节点数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'JoinPermissionName' => [
                                        'description' => '与节点分组关联的入网凭证的名称。',
                                        'type' => 'string',
                                        'example' => '凭证1',
                                    ],
                                    'Locks' => [
                                        'description' => '节点分组所关联的操作锁列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'LockId' => [
                                                    'description' => '锁ID。',
                                                    'type' => 'string',
                                                    'example' => '123',
                                                ],
                                                'LockType' => [
                                                    'description' => '锁的类型。取值：**WRITE**，表示所有写操作都加锁，包括编辑、删除等。',
                                                    'type' => 'string',
                                                    'example' => 'WRITE',
                                                ],
                                                'CreateMillis' => [
                                                    'description' => '锁的创建时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514736000000',
                                                ],
                                                'Enabled' => [
                                                    'description' => '锁的启停用状态。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'DataDispatchConfig' => [
                                        'description' => '节点分组的数据流转配置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Destination' => [
                                                'description' => '数据流转目的地。返回值：'."\n"
                                                    ."\n"
                                                    .'- **IOT**：数据流转到物联网平台的产品。'."\n"
                                                    .'- **ONS**：数据流转到MQ的Topic。',
                                                'type' => 'string',
                                                'example' => 'IOT',
                                            ],
                                            'IotProduct' => [
                                                'description' => '如果流转目的地是物联网平台的产品，该字段存储产品信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'DebugSwitch' => [
                                                        'description' => '数据流转目的地为**IOT**的调试开关。返回值：'."\n"
                                                            ."\n"
                                                            .'- **true**：打开调试开关。'."\n"
                                                            .'- **false**：关闭调试开关。',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'ProductKey' => [
                                                        'description' => '产品的ProductKey。',
                                                        'type' => 'string',
                                                        'example' => 'HMyB*******',
                                                    ],
                                                    'ProductName' => [
                                                        'description' => '产品名称。',
                                                        'type' => 'string',
                                                        'example' => '产品名',
                                                    ],
                                                    'ProductType' => [
                                                        'description' => '产品类型。返回值：'."\n"
                                                            ."\n"
                                                            .'- **IOT_SUITE**：数据流转到IoT套件基础版。'."\n"
                                                            .'- **IOT_SUITE_SENIOR**：数据流转到IoT套件高级版。',
                                                        'type' => 'string',
                                                        'example' => 'IOT_SUITE',
                                                    ],
                                                ],
                                            ],
                                            'OnsTopics' => [
                                                'description' => '如果流转目的地是MQ，该字段存储MQ Topic信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'UplinkTopic' => [
                                                        'description' => 'MQ上行Topic。',
                                                        'type' => 'string',
                                                        'example' => 'topic2',
                                                    ],
                                                    'UplinkRegionName' => [
                                                        'description' => 'MQ上行Region ID。',
                                                        'type' => 'string',
                                                        'example' => 'cn-hangzhou',
                                                    ],
                                                    'DownlinkRegionName' => [
                                                        'description' => 'MQ下行Region ID。',
                                                        'type' => 'string',
                                                        'example' => 'cn-beijing',
                                                    ],
                                                    'DownlinkTopic' => [
                                                        'description' => 'MQ下行Topic。',
                                                        'type' => 'string',
                                                        'example' => 'topic1',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"RxMonthSum\\": 0,\\n    \\"NodeGroupName\\": \\"节点分组名称\\",\\n    \\"MulticastNodeCapacity\\": 1000,\\n    \\"JoinPermissionOwnerAliyunId\\": \\"some-user\\",\\n    \\"MulticastEnabled\\": false,\\n    \\"TxMonthSum\\": 0,\\n    \\"FreqBandPlanGroupId\\": 102,\\n    \\"TxDailySum\\": 0,\\n    \\"JoinPermissionEnabled\\": true,\\n    \\"JoinPermissionId\\": \\"1234569\\",\\n    \\"ClassMode\\": \\"A\\",\\n    \\"NodeGroupId\\": \\"123456\\",\\n    \\"MulticastNodeCount\\": 10,\\n    \\"DataDispatchEnabled\\": false,\\n    \\"MulticastGroupId\\": \\"1234\\",\\n    \\"RxDailySum\\": \\"0\\",\\n    \\"JoinEui\\": \\"0000000000000000\\",\\n    \\"CreateMillis\\": 1514736000000,\\n    \\"JoinPermissionType\\": \\"LOCAL\\",\\n    \\"NodesCnt\\": 10,\\n    \\"JoinPermissionName\\": \\"凭证1\\",\\n    \\"Locks\\": [\\n      {\\n        \\"LockId\\": \\"123\\",\\n        \\"LockType\\": \\"WRITE\\",\\n        \\"CreateMillis\\": 1514736000000,\\n        \\"Enabled\\": true\\n      }\\n    ],\\n    \\"DataDispatchConfig\\": {\\n      \\"Destination\\": \\"IOT\\",\\n      \\"IotProduct\\": {\\n        \\"DebugSwitch\\": true,\\n        \\"ProductKey\\": \\"HMyB*******\\",\\n        \\"ProductName\\": \\"产品名\\",\\n        \\"ProductType\\": \\"IOT_SUITE\\"\\n      },\\n      \\"OnsTopics\\": {\\n        \\"UplinkTopic\\": \\"topic2\\",\\n        \\"UplinkRegionName\\": \\"cn-hangzhou\\",\\n        \\"DownlinkRegionName\\": \\"cn-beijing\\",\\n        \\"DownlinkTopic\\": \\"topic1\\"\\n      }\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetNodeGroupResponse>\\n<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Data>\\n    <NodesCnt>10</NodesCnt>\\n    <RxMonthSum>0</RxMonthSum>\\n    <ClassMode>A</ClassMode>\\n    <MulticastNodeCapacity>1000</MulticastNodeCapacity>\\n    <NodeGroupName>节点分组名称</NodeGroupName>\\n    <RxDailySum>0</RxDailySum>\\n    <TxDailySum>0</TxDailySum>\\n    <TxMonthSum>0</TxMonthSum>\\n    <MulticastNodeCount>10</MulticastNodeCount>\\n    <MulticastEnabled>false</MulticastEnabled>\\n    <JoinPermissionType>LOCAL</JoinPermissionType>\\n    <JoinPermissionOwnerAliyunId>some-user</JoinPermissionOwnerAliyunId>\\n    <NodeGroupId>123456</NodeGroupId>\\n    <MulticastGroupId>1234</MulticastGroupId>\\n    <CreateMillis>1514736000000</CreateMillis>\\n    <JoinPermissionId>1234569</JoinPermissionId>\\n    <JoinPermissionName>凭证1</JoinPermissionName>\\n    <JoinPermissionEnabled>true</JoinPermissionEnabled>\\n    <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\n    <JoinEui>0</JoinEui>\\n    <DataDispatchEnabled>false</DataDispatchEnabled>\\n    <Locks>\\n        <CreateMillis>1514736000000</CreateMillis>\\n        <Enabled>true</Enabled>\\n        <LockType>WRITE</LockType>\\n        <LockId>123</LockId>\\n    </Locks>\\n    <DataDispatchConfig>\\n        <Destination>IOT</Destination>\\n        <IotProduct>\\n            <DebugSwitch>true</DebugSwitch>\\n            <ProductName>产品名</ProductName>\\n            <ProductType>IOT_SUITE</ProductType>\\n            <ProductKey>HMyB*******</ProductKey>\\n        </IotProduct>\\n        <OnsTopics/>\\n    </DataDispatchConfig>\\n</Data>\\n<Success>true</Success>\\n</GetNodeGroupResponse>","errorExample":""}]',
            'title' => 'GetNodeGroup',
            'summary' => '调用GetNodeGroup获取节点分组信息。',
            'description' => '# 限制说明'."\n"
                ."\n"
                .'单阿里云账号调用该接口的每秒请求数（QPS）最大限制为5。'."\n"
                ."\n"
                .'> RAM用户共享阿里云账号配额。',
            'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~108601~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListNodeGroups' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。'."\n"
                            .'您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。'."\n"
                            ."\n"
                            .'> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iot-cn-0pp1n8t****',
                    ],
                ],
                [
                    'name' => 'FuzzyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配节点分组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'FuzzyJoinEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配节点分组所使用的JoinEUI。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd896e0',
                    ],
                ],
                [
                    'name' => 'FuzzyDevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配分组中的节点DevEUI。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd896e0',
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的起始位置，从0开始。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'minimum' => '0',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的分组数量，取值范围0~200。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '200',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定排序字段，取值为**CREATED_MILLIS**，表示根据创建时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CREATED_MILLIS',
                        'enum' => [
                            'CREATED_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配合**SortingField**参数一起使用，指定字段排序方式。取值：'."\n"
                            ."\n"
                            .'- **true**：升序。'."\n"
                            .'- **false**：降序。',
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
                            'Success' => [
                                'description' => '是否调用成功。返回值：'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- ** false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '调用成功时返回的当前阿里云账号下的节点分组列表。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '节点分组总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'List' => [
                                        'description' => '节点分组列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'RxMonthSum' => [
                                                    'description' => '与节点分组关联的入网凭证的当月上行数据包量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'NodeGroupName' => [
                                                    'description' => '节点分组的名称。',
                                                    'type' => 'string',
                                                    'example' => '节点分组名称2',
                                                ],
                                                'JoinPermissionOwnerAliyunId' => [
                                                    'description' => '- 如果关联的是**专用凭证**，该字段表示入网凭证拥有者的阿里云账号。'."\n"
                                                        .'- 如果关联的是**泛在凭证**，该字段值为**AliCloud IoT**。',
                                                    'type' => 'string',
                                                    'example' => 'some-user2',
                                                ],
                                                'TxMonthSum' => [
                                                    'description' => '与节点分组关联的入网凭证的当月下行数据包量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'FreqBandPlanGroupId' => [
                                                    'description' => '节点分组中的节点采用的频段ID，与分组所关联的入网凭证中指定的一致。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '102',
                                                ],
                                                'TxDailySum' => [
                                                    'description' => '与节点分组关联的入网凭证的当天下行数据包量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'JoinPermissionEnabled' => [
                                                    'description' => '与节点分组关联的入网凭证的启停状态。返回值：'."\n"
                                                        ."\n"
                                                        .'- **true**：启用。'."\n"
                                                        .'- **false**：停用。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'JoinPermissionId' => [
                                                    'description' => '与节点分组关联的入网凭证的ID。',
                                                    'type' => 'string',
                                                    'example' => '123456',
                                                ],
                                                'ClassMode' => [
                                                    'description' => '节点分组中的节点所采用的LoRaWAN Class模式，与分组所关联的入网凭证中指定的一致。',
                                                    'type' => 'string',
                                                    'example' => 'A',
                                                ],
                                                'NodeGroupId' => [
                                                    'description' => '节点分组ID。',
                                                    'type' => 'string',
                                                    'example' => '123456',
                                                ],
                                                'DataDispatchEnabled' => [
                                                    'description' => '节点分组的数据流转启停状态。返回值：'."\n"
                                                        ."\n"
                                                        .'- **true**：启用。'."\n"
                                                        .'- **false**：停用。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'RxDailySum' => [
                                                    'description' => '与节点分组关联的入网凭证的当天上行数据包量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'JoinEui' => [
                                                    'description' => '节点分组中的节点使用的JoinEUI，与分组所关联的入网凭证中指定的JoinEUI一致。',
                                                    'type' => 'string',
                                                    'example' => '0000000000000000',
                                                ],
                                                'CreateMillis' => [
                                                    'description' => '节点分组的创建时间，格式为UNIX时间戳，以毫秒为单位。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514736000000',
                                                ],
                                                'JoinPermissionType' => [
                                                    'description' => '与节点分组关联的入网凭证类型。返回值：'."\n"
                                                        ."\n"
                                                        .'- **LOCAL**：专用凭证。'."\n"
                                                        .'- **ROAMING**：泛在凭证。',
                                                    'type' => 'string',
                                                    'example' => 'LOCAL',
                                                ],
                                                'NodesCnt' => [
                                                    'description' => '节点分组中的节点数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10',
                                                ],
                                                'JoinPermissionName' => [
                                                    'description' => '与节点分组关联的入网凭证的名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'Locks' => [
                                                    'description' => '节点分组所关联的操作锁列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'LockId' => [
                                                                'description' => '锁ID。',
                                                                'type' => 'string',
                                                                'example' => '123',
                                                            ],
                                                            'LockType' => [
                                                                'description' => '锁的类型。返回值：**WRITE**，表示所有写操作都加锁，包括编辑、删除等。',
                                                                'type' => 'string',
                                                                'example' => 'WRITE',
                                                            ],
                                                            'CreateMillis' => [
                                                                'description' => '锁的创建时间。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '1514736000000',
                                                            ],
                                                            'Enabled' => [
                                                                'description' => '锁的启停用状态。',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'DataDispatchConfig' => [
                                                    'description' => '节点分组的数据流转配置。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Destination' => [
                                                            'description' => '数据流转目的地。返回值：'."\n"
                                                                ."\n"
                                                                .'- **IOT**：数据流转到物联网平台的产品。'."\n"
                                                                .'- **ONS**：数据流转到MQ的Topic。',
                                                            'type' => 'string',
                                                            'example' => 'IOT',
                                                        ],
                                                        'IotProduct' => [
                                                            'description' => '如果流转目的地是物联网平台的产品，该字段存储产品信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'DebugSwitch' => [
                                                                    'description' => '数据流转目的地为**IOT**的调试开关。返回值：'."\n"
                                                                        ."\n"
                                                                        .'- **true**：打开调试开关。'."\n"
                                                                        .'- **false**：关闭调试开关。',
                                                                    'type' => 'boolean',
                                                                    'example' => 'false',
                                                                ],
                                                                'ProductKey' => [
                                                                    'description' => '产品的ProductKey。',
                                                                    'type' => 'string',
                                                                    'example' => 'xxxxxxxx',
                                                                ],
                                                                'ProductName' => [
                                                                    'description' => '产品名称。',
                                                                    'type' => 'string',
                                                                    'example' => '产品名',
                                                                ],
                                                                'ProductType' => [
                                                                    'description' => '产品类型。返回值：'."\n"
                                                                        ."\n"
                                                                        .'- **IOT_SUITE**：数据流转到IoT套件基础版。'."\n"
                                                                        .'- **IOT_SUITE_SENIOR**：数据流转到IoT套件高级版。',
                                                                    'type' => 'string',
                                                                    'example' => 'IOT_SUITE',
                                                                ],
                                                            ],
                                                        ],
                                                        'OnsTopics' => [
                                                            'description' => '如果流转目的地是MQ，该字段存储MQ Topic信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'UplinkTopic' => [
                                                                    'description' => 'MQ上行Topic。',
                                                                    'type' => 'string',
                                                                    'example' => 'topic2',
                                                                ],
                                                                'UplinkRegionName' => [
                                                                    'description' => 'MQ上行Region ID。',
                                                                    'type' => 'string',
                                                                    'example' => 'cn-shanghai',
                                                                ],
                                                                'DownlinkRegionName' => [
                                                                    'description' => 'MQ下行Region ID。',
                                                                    'type' => 'string',
                                                                    'example' => 'cn-beijing',
                                                                ],
                                                                'DownlinkTopic' => [
                                                                    'description' => 'MQ下行Topic。',
                                                                    'type' => 'string',
                                                                    'example' => 'topic1',
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
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"RxMonthSum\\": 0,\\n        \\"NodeGroupName\\": \\"节点分组名称2\\",\\n        \\"JoinPermissionOwnerAliyunId\\": \\"some-user2\\",\\n        \\"TxMonthSum\\": 0,\\n        \\"FreqBandPlanGroupId\\": 102,\\n        \\"TxDailySum\\": 0,\\n        \\"JoinPermissionEnabled\\": true,\\n        \\"JoinPermissionId\\": \\"123456\\",\\n        \\"ClassMode\\": \\"A\\",\\n        \\"NodeGroupId\\": \\"123456\\",\\n        \\"DataDispatchEnabled\\": true,\\n        \\"RxDailySum\\": 0,\\n        \\"JoinEui\\": \\"0000000000000000\\",\\n        \\"CreateMillis\\": 1514736000000,\\n        \\"JoinPermissionType\\": \\"LOCAL\\",\\n        \\"NodesCnt\\": 10,\\n        \\"JoinPermissionName\\": \\"test\\",\\n        \\"Locks\\": [\\n          {\\n            \\"LockId\\": \\"123\\",\\n            \\"LockType\\": \\"WRITE\\",\\n            \\"CreateMillis\\": 1514736000000,\\n            \\"Enabled\\": true\\n          }\\n        ],\\n        \\"DataDispatchConfig\\": {\\n          \\"Destination\\": \\"IOT\\",\\n          \\"IotProduct\\": {\\n            \\"DebugSwitch\\": false,\\n            \\"ProductKey\\": \\"xxxxxxxx\\",\\n            \\"ProductName\\": \\"产品名\\",\\n            \\"ProductType\\": \\"IOT_SUITE\\"\\n          },\\n          \\"OnsTopics\\": {\\n            \\"UplinkTopic\\": \\"topic2\\",\\n            \\"UplinkRegionName\\": \\"cn-shanghai\\",\\n            \\"DownlinkRegionName\\": \\"cn-beijing\\",\\n            \\"DownlinkTopic\\": \\"topic1\\"\\n          }\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNodeGroupsResponse>\\n<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Data>\\n    <TotalCount>10</TotalCount>\\n    <List>\\n        <NodesCnt>10</NodesCnt>\\n        <RxMonthSum>0</RxMonthSum>\\n        <ClassMode>A</ClassMode>\\n        <NodeGroupName>节点分组名称2</NodeGroupName>\\n        <RxDailySum>0</RxDailySum>\\n        <TxDailySum>0</TxDailySum>\\n        <TxMonthSum>0</TxMonthSum>\\n        <JoinPermissionType>LOCAL</JoinPermissionType>\\n        <JoinPermissionOwnerAliyunId>some-user2</JoinPermissionOwnerAliyunId>\\n        <NodeGroupId>123456</NodeGroupId>\\n        <CreateMillis>1514736000000</CreateMillis>\\n        <JoinPermissionId>123456</JoinPermissionId>\\n        <JoinPermissionName>test</JoinPermissionName>\\n        <JoinPermissionEnabled>true</JoinPermissionEnabled>\\n        <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\n        <JoinEui>0</JoinEui>\\n        <DataDispatchEnabled>true</DataDispatchEnabled>\\n        <Locks>\\n            <CreateMillis>1514736000000</CreateMillis>\\n            <Enabled>true</Enabled>\\n            <LockType>WRITE</LockType>\\n            <LockId>123</LockId>\\n        </Locks>\\n        <DataDispatchConfig>\\n            <Destination>IOT</Destination>\\n            <IotProduct>\\n                <DebugSwitch>false</DebugSwitch>\\n                <ProductName>产品名</ProductName>\\n                <ProductType>IOT_SUITE</ProductType>\\n                <ProductKey>xxxxxxxx</ProductKey>\\n            </IotProduct>\\n            <OnsTopics/>\\n        </DataDispatchConfig>\\n    </List>\\n</Data>\\n<Success>true</Success>\\n</ListNodeGroupsResponse>","errorExample":""}]',
            'title' => 'ListNodeGroups',
            'summary' => '调用ListNodeGroups查询当前阿里云账号下的节点分组列表。',
            'description' => '# 限制说明'."\n"
                ."\n"
                .'单阿里云账号调用该接口的每秒请求数（QPS）最大限制为5。'."\n"
                ."\n"
                .'> RAM用户共享阿里云账号配额。',
            'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~108601~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AcceptJoinPermissionAuthOrder' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要接受的授权工单ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'IllegalOrderStateTransition',
                        'errorMessage' => 'The order status conversion is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<AcceptJoinPermissionAuthOrderResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</AcceptJoinPermissionAuthOrderResponse>","errorExample":""}]',
            'title' => '接受专用入网凭证授权工单',
            'summary' => '调用AcceptJoinPermissionAuthOrder接受专用入网凭证授权工单。',
            'description' => '开发者（解决方案供应商）通过该接口接受一个由网络运营者授权的专用入网凭证。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AddNodeToGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点的DevEUI。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0000000000000000',
                    ],
                ],
                [
                    'name' => 'PinCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点的PIN Code。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'ExceedNodeLimit',
                        'errorMessage' => 'The maximum number of nodes is exceeded.',
                    ],
                    [
                        'errorCode' => 'NodeGroupDoesNotExist',
                        'errorMessage' => 'The specified node group does not exist.',
                    ],
                    [
                        'errorCode' => 'DevEuiDuplicated',
                        'errorMessage' => 'A node with the same devEui already exists.',
                    ],
                    [
                        'errorCode' => 'NodeAlreadyAdded',
                        'errorMessage' => 'The specified node has already been added to another node group.',
                    ],
                    [
                        'errorCode' => 'InvalidPinCode',
                        'errorMessage' => 'An error occurred while verifying PinCode.',
                    ],
                    [
                        'errorCode' => 'ResourceLocked',
                        'errorMessage' => 'The specified resource has been locked by another product.',
                    ],
                    [
                        'errorCode' => 'NodeDoesNotExist',
                        'errorMessage' => 'The specified node does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<AddNodeToGroupResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</AddNodeToGroupResponse>","errorExample":""}]',
            'title' => '在节点分组中增加新的节点',
            'summary' => '调用AddNodeToGroup在节点分组中增加新的节点。',
        ],
        'BindJoinPermissionToNodeGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参与关联的节点分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'JoinPermissionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参与关联的入网凭证ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'JoinPermissionDoesNotExist',
                        'errorMessage' => 'The specified join permission does not exist.',
                    ],
                    [
                        'errorCode' => 'JoinPermissionAlreadyBoundNodeGroup',
                        'errorMessage' => 'The specified join permission has already been bound to another node group.',
                    ],
                    [
                        'errorCode' => 'NodeGroupDoesNotExist',
                        'errorMessage' => 'The specified node group does not exist.',
                    ],
                    [
                        'errorCode' => 'NodeGroupAlreadyBoundJoinPermission',
                        'errorMessage' => 'This node group is already bound to a join permission.',
                    ],
                    [
                        'errorCode' => 'ResourceLocked',
                        'errorMessage' => 'The specified resource has been locked by another product.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<BindJoinPermissionToNodeGroupResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</BindJoinPermissionToNodeGroupResponse>","errorExample":""}]',
            'title' => '建立入网凭证和节点分组的关联',
            'summary' => '调用BindJoinPermissionToNodeGroup建立入网凭证和节点分组的关联。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ApplyRoamingJoinPermission' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'FreqBandPlanGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '泛在凭证所采用的频段ID。取值：'."\n"
                            ."\n"
                            .'- **102**：CN470异频。'."\n"
                            .'- **101**：CN470同频。'."\n"
                            .'- **201**：AS923同频。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '102',
                    ],
                ],
                [
                    'name' => 'ClassMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '泛在凭证所采用的LoRaWAN Class模式。取值：A、B、C。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'A',
                        'enum' => [
                            'A',
                            'B',
                            'C',
                            'D2D',
                        ],
                    ],
                ],
                [
                    'name' => 'JoinPermissionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '泛在凭证名称，支持中文、英文字母、数字和下划线（_），长度限制4～30个字符，一个中文占两个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '泛在凭证1',
                    ],
                ],
                [
                    'name' => 'RxDelay',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Class A的接收窗口延迟时间，取值范围1s~15s。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DataRate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当**ClassMode**取值为**B**时，设置期望下行速率，取值范围0~5。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '泛在凭证的ID。',
                                'type' => 'string',
                                'example' => '1234',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。返回值：'."\n"
                                    ."\n"
                                    .'-  **true**：调用成功。'."\n"
                                    .'- ** false**：调用失败。',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'ExceedRoamingJoinPermissionLimit',
                        'errorMessage' => 'The maximum number of roaming join permissions is exceeded.',
                    ],
                    [
                        'errorCode' => 'JoinPermissionNameDuplicated',
                        'errorMessage' => 'The specified join permission name already exists.',
                    ],
                    [
                        'errorCode' => 'InvalidName',
                        'errorMessage' => 'The specified name is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidFreqBandPlan',
                        'errorMessage' => 'The frequency band plan is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"1234\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>123</Data>","errorExample":""}]',
            'title' => '申请泛在凭证',
            'summary' => '调用ApplyRoamingJoinPermission申请泛在凭证。',
            'description' => '# 限制说明'."\n"
                ."\n"
                .'- 单阿里云账号的泛在凭证数量为一个。'."\n"
                .'- 单阿里云账号调用该接口的每秒请求数（QPS）最大限制为5。'."\n"
                ."\n"
                .'> RAM用户共享阿里云账号配额。',
            'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~108601~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CancelJoinPermissionAuthOrder' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要撤销的授权工单ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'IllegalOrderStateTransition',
                        'errorMessage' => 'The order status conversion is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelJoinPermissionAuthOrderResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CancelJoinPermissionAuthOrderResponse>","errorExample":""}]',
            'title' => '取消专用入网凭证授权工单',
            'summary' => '调用CancelJoinPermissionAuthOrder取消专用入网凭证授权工单。',
            'description' => '网络运营者可以通过该接口取消一个尚未被接受的授权工单。',
        ],
        'CheckCloudProductOpenStatus' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ServiceCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云产品的 Service Code，对于物联网络管理平台而言恒为“linkwan”。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'linkwan',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '当前用户账号是否开通了物联网络管理平台服务。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n",
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>true</Data>","errorExample":""}]',
            'title' => '检查服务开通状态',
            'summary' => '检查当前用户账号的物联网络管理平台服务的开通状态，供阿里云内部服务使用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CheckUserChargeStatus' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '用户欠费状态。'."\n"
                                    ."\n"
                                    .'NORMAL： 正常'."\n"
                                    ."\n"
                                    .'ARREARAGE： 欠费状态',
                                'type' => 'string',
                                'example' => 'NORMAL',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n",
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"NORMAL\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Data>NORMAL</Data>\\n<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '检查用户欠费状态',
            'summary' => '检查用户欠费状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CountGatewayTupleOrders' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'States',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '工单状态过滤列表。若不使用此参数，则表示统计所有状态的工单。'."\n"
                            ."\n"
                            .'参考工单状态取值'."\n",
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'required' => false,
                        'example' => 'APPLYING',
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '满足状态过滤条件的工单数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '42',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n",
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 42,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>42</Data>","errorExample":""}]',
            'title' => '统计网关安全密钥工单数量',
            'summary' => '统计当前用户账号已提交的网关安全密钥工单的数量，可指定统计特定状态的工单。',
            'requestParamsDescription' => '# 类型说明'."\n"
                ."\n"
                .'### 工单状态取值'."\n"
                ."\n"
                .'| 名称 | 类型 | 说明 |'."\n"
                .'| --- | --- | --- |'."\n"
                .'| APPLYING | String | 申请中。 |'."\n"
                .'| ACCEPTING | String | 颁发中。 |'."\n"
                .'| ACCEPTED | String | 颁发成功。 |'."\n"
                .'| ACCEPTING_FAILED | String | 颁发失败。 |'."\n"
                .'| REJECTED | String | 已拒绝。 |'."\n"
                .'| REVOKING | String | 撤回中。 |'."\n"
                .'| REVOKING_FAILED | String | 撤回失败。 |'."\n"
                .'| REVOKED | String | 撤回成功。 |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CountNodeTupleOrders' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'States',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '工单状态过滤列表。若不使用此参数，则表示统计所有状态的工单。'."\n"
                            ."\n"
                            .'参考工单状态取值'."\n"
                            ."\n",
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'required' => false,
                        'example' => 'ACCEPTED',
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'IsKpm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '判断是否是KPM所发起的工单，是否是安全产线发起的工单。',
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
                            'Data' => [
                                'description' => '满足过滤条件的工单数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '42',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n",
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 42,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>42</Data>","errorExample":""}]',
            'title' => '统计节点安全元组工单数量',
            'summary' => '统计当前用户账号所提交的节点安全元组工单数量，可指定统计特定类型及特定状态的工单。',
            'requestParamsDescription' => '### 类型说明'."\n"
                ."\n\n"
                .'### 工单状态取值'."\n"
                ."\n"
                .'| 名称 | 类型 | 说明 |'."\n"
                .'| --- | --- | --- |'."\n"
                .'| APPLYING | String | 申请中。 |'."\n"
                .'| ACCEPTING | String | 颁发中。 |'."\n"
                .'| ACCEPTED | String | 颁发成功。 |'."\n"
                .'| ACCEPTING_FAILED | String | 颁发失败。 |'."\n"
                .'| REJECTED | String | 已拒绝。 |'."\n"
                .'| REVOKING | String | 撤回中。 |'."\n"
                .'| REVOKING_FAILED | String | 撤回失败。 |'."\n"
                .'| REVOKED | String | 撤回成功。 |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CountNodesByNodeGroupId' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'FuzzyDevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配节点的DevEUI。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0000000000000000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '满足过滤条件的节点数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 100,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CountNodesByNodeGroupIdResponse>\\r\\n      <Data>100</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CountNodesByNodeGroupIdResponse>","errorExample":""}]',
            'title' => '统计节点数量',
            'summary' => '统计某节点分组中且满足过滤条件的节点数量。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CountNodesByOwnedJoinPermissionId' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'JoinPermissionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '入网凭证ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'FuzzyDevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配节点的DevEUI。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0000000000000000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '满足过滤条件的节点数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 100,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CountNodesByOwnedJoinPermissionIdResponse>\\r\\n      <Data>100</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CountNodesByOwnedJoinPermissionIdResponse>","errorExample":""}]',
            'title' => '统计节点数量',
            'summary' => '统计使用某入网凭证且满足过滤条件的节点的数量。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CountNotifications' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '通知类型列表，传null值则不过滤类型。'."\n"
                            ."\n"
                            .'- GATEWAY_OFFLINE：网关离线信息。'."\n"
                            ."\n"
                            .'- JOIN_PERMISSION_AUTH_APPLYING：凭证授权中。'."\n"
                            ."\n"
                            .'- JOIN_PERMISSION_AUTH_ACCEPTED：凭证授权成功。'."\n"
                            ."\n"
                            .'- JOIN_PERMISSION_AUTH_CANCELED：撤销凭证授权。'."\n"
                            ."\n"
                            .'- JOIN_PERMISSION_AUTH_REJECTED：拒绝凭证授权。'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '通知类型列表，传null值则不过滤类型。'."\n"
                                ."\n"
                                .'- GATEWAY_OFFLINE：网关离线信息。'."\n"
                                ."\n"
                                .'- JOIN_PERMISSION_AUTH_APPLYING：凭证授权中。'."\n"
                                ."\n"
                                .'- JOIN_PERMISSION_AUTH_ACCEPTED：凭证授权成功。'."\n"
                                ."\n"
                                .'- JOIN_PERMISSION_AUTH_CANCELED：撤销凭证授权。'."\n"
                                ."\n"
                                .'- JOIN_PERMISSION_AUTH_REJECTED：拒绝凭证授权。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'GATEWAY_OFFLINE',
                        ],
                        'required' => false,
                        'example' => 'GATEWAY_OFFLINE',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'HandleState',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据通知处理状态过滤，传null值则不过滤处理状态。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UNHANDLED',
                    ],
                ],
                [
                    'name' => 'BeginMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，毫秒为单位的 UNIX 时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'EndMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，毫秒为单位的 UNIX 时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1514736000000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '通知数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 10,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CountNotificationsResponse>\\r\\n      <Data>10</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CountNotificationsResponse>","errorExample":""}]',
            'title' => '统计符合过滤条件的通知数量',
            'summary' => '调用CountNotifications统计符合过滤条件的通知数量。',
        ],
        'CountOwnedJoinPermissions' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'FuzzyRenterAliyunId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配入网凭证租户的阿里云账号ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'some-user',
                    ],
                ],
                [
                    'name' => 'FuzzyJoinEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配入网凭证使用的JoinEUI。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd896e0',
                    ],
                ],
                [
                    'name' => 'Enabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按照凭证的启停用状态进行过滤。'."\n"
                            ."\n"
                            .'**true**表示启用，**false**表示停用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'FuzzyJoinPermissionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配入网凭证的名称。',
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
                            'Data' => [
                                'description' => '满足过滤条件的入网凭证总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 100,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CountOwnedJoinPermissionsResponse>\\r\\n      <Data>100</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CountOwnedJoinPermissionsResponse>","errorExample":""}]',
            'title' => '统计入网凭证数量',
            'summary' => '统计符合过滤条件的当前用户账号所拥有的入网凭证的数量。',
            'description' => '> 能够被用户账号“拥有”的入网凭证一定是专用入网凭证。',
        ],
        'CountRentedJoinPermissions' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'FuzzyOwnerAliyunId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配入网凭证拥有者的阿里云账号ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'some-user',
                    ],
                ],
                [
                    'name' => 'FuzzyJoinEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配入网凭证的JoinEUI。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd896e0',
                    ],
                ],
                [
                    'name' => 'Enabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按照凭证的启停用状态进行过滤。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'BoundNodeGroup',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据入网凭证是否关联到节点分组进行过滤。'."\n"
                            ."\n"
                            .'**true**表示已关联，**false**表示未关联。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按照凭证的类型进行过滤。取值：'."\n"
                            ."\n"
                            .'- **LOCAL**：专用凭证'."\n"
                            .'- **ROAMING**：泛在凭证',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LOCAL',
                    ],
                ],
                [
                    'name' => 'FuzzyJoinPermissionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配入网凭证的名称。',
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
                            'Data' => [
                                'description' => '满足过滤条件的入网凭证总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 100,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CountRentedJoinPermissionsResponse>\\r\\n      <Data>100</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CountRentedJoinPermissionsResponse>","errorExample":""}]',
            'title' => '统计入网凭证数量',
            'summary' => '统计当前用户账号所租用的且符合过滤条件的入网凭证数量。',
        ],
        'CreateLocalJoinPermission' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FreqBandPlanGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专用入网凭证所采用的频段的频段ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '101',
                    ],
                ],
                [
                    'name' => 'ClassMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专用入网凭证采用的LoRaWAN Class模式。可取值：A、B、C。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'A',
                        'enum' => [
                            'A',
                            'B',
                            'C',
                        ],
                    ],
                ],
                [
                    'name' => 'UseDefaultJoinEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专用入网凭证是否使用阿里云统一JoinEUI。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'JoinPermissionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义专用入网凭证名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'RxDelay',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'classA的接收窗口延时。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DataRate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作速率。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'JoinEui',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '所创建的专用入网凭证的ID。',
                                'type' => 'string',
                                'example' => '123',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'ExceedLocalJoinPermissionLimit',
                        'errorMessage' => 'The maximum number of local join permissions that you can create is exceeded.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'JoinPermissionNameDuplicated',
                        'errorMessage' => 'The specified join permission name already exists.',
                    ],
                    [
                        'errorCode' => 'InvalidName',
                        'errorMessage' => 'The specified name is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidFreqBandPlan',
                        'errorMessage' => 'The frequency band plan is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"123\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateLocalJoinPermissionResponse>\\r\\n      <Data>123</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</CreateLocalJoinPermissionResponse>","errorExample":""}]',
            'title' => '创建专用入网凭证',
            'summary' => '当前用户账号将成为该凭证的拥有者，拥有该凭证。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteLocalJoinPermission' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JoinPermissionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的专用入网凭证的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'JoinPermissionAlreadyAuthorized',
                        'errorMessage' => 'The specified join permission has already been granted to another renter.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteLocalJoinPermissionResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</DeleteLocalJoinPermissionResponse>","errorExample":""}]',
            'title' => '删除当前用户账号所拥有的专用入网凭证',
            'summary' => '调用DeleteLocalJoinPermission删除当前用户账号所拥有的专用入网凭证。',
        ],
        'GetFreqBandPlanGroup' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '频段ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '201',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '频段信息。',
                                'type' => 'object',
                                'properties' => [
                                    'EndFrequency' => [
                                        'description' => '结束频点，单位为MHz。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '925',
                                    ],
                                    'GroupId' => [
                                        'description' => '频段ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '201',
                                    ],
                                    'FrequencyType' => [
                                        'description' => '频段类型。取值范围：'."\n"
                                            ."\n"
                                            .'- **SAME_FREQUENCY**：同频'."\n"
                                            .'- **DIFF_FREQUENCY**：异频',
                                        'type' => 'string',
                                        'example' => 'SAME_FREQUENCY',
                                    ],
                                    'FrequencyRegionId' => [
                                        'description' => 'Region标识。',
                                        'type' => 'string',
                                        'example' => 'CN',
                                    ],
                                    'BeginFrequency' => [
                                        'description' => '起始频点，单位为MHz。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '923',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"EndFrequency\\": 925,\\n    \\"GroupId\\": 201,\\n    \\"FrequencyType\\": \\"SAME_FREQUENCY\\",\\n    \\"FrequencyRegionId\\": \\"CN\\",\\n    \\"BeginFrequency\\": 923\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetFreqBandPlanGroupResponse>\\r\\n      <Data>\\r\\n            <BeginFrequency>923</BeginFrequency>\\r\\n            <EndFrequency>925</EndFrequency>\\r\\n            <FrequencyRegionId>CN</FrequencyRegionId>\\r\\n            <GroupId>201</GroupId>\\r\\n            <FrequencyType>SAME_FREQUENCY</FrequencyType>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetFreqBandPlanGroupResponse>","errorExample":""}]',
            'title' => '获取频段信息',
            'summary' => '调用GetFreqBandPlanGroup获取频段信息。',
        ],
        'GetGatewayPacketStat' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。'."\n"
                            ."\n"
                            .'><notice>'."\n"
                            .'- 若有ID值，必须传入该ID值，否则调用会失败。'."\n"
                            .'- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。'."\n"
                            ."\n"
                            .'></notice>'."\n"
                            ."\n"
                            .'实例的更多信息，请参见[实例概述](~~356505~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iot-***-v6***',
                    ],
                ],
                [
                    'name' => 'GwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的网关的GwEUI。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0000000000000000',
                    ],
                ],
                [
                    'name' => 'BeginMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1514766000000',
                    ],
                ],
                [
                    'name' => 'EndMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1514766000000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'UplinkInvalid' => [
                                        'description' => '无效上行包计数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'UplinkValid' => [
                                        'description' => '有效上行包计数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'DownlinkValid' => [
                                        'description' => '有效下行包计数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'DownlinkInvalid' => [
                                        'description' => '无效下行包计数。',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"UplinkInvalid\\": 0,\\n    \\"UplinkValid\\": 0,\\n    \\"DownlinkValid\\": 0,\\n    \\"DownlinkInvalid\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetGatewayPacketStatResponse>\\r\\n      <Data>\\r\\n            <UplinkInvalid>0</UplinkInvalid>\\r\\n            <DownlinkInvalid>0</DownlinkInvalid>\\r\\n            <UplinkValid>0</UplinkValid>\\r\\n            <DownlinkValid>0</DownlinkValid>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetGatewayPacketStatResponse>","errorExample":""}]',
            'title' => '获取网关有效包无效包统计',
            'summary' => '调用GetGatewayPacketStat获取网关有效包无效包统计。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetGatewayTransferPacketsDownloadUrl' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的网关的GwEUI。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'DevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据DevEUI过滤数据包。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0000000000000001',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据包分类。取值：'."\n"
                            ."\n"
                            .'- **DOWNLINK_PACKET**：下行包'."\n"
                            .'- **UPLINK_PACKET**：上行包'."\n"
                            .'- **INVALID_PACKET**：无效包',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DOWNLINK_PACKET',
                        'enum' => [
                            'DOWNLINK_PACKET',
                            'UPLINK_PACKET',
                            'INVALID_PACKET',
                        ],
                    ],
                ],
                [
                    'name' => 'BeginMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'EndMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段。取值：**LOG_MILLIS**，表示按照时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LOG_MILLIS',
                        'enum' => [
                            'LOG_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
                            'Data' => [
                                'description' => '数据包统计文件下载地址。',
                                'type' => 'string',
                                'example' => 'http://xxx.xxx.xxx/xxx.csv',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"http://xxx.xxx.xxx/xxx.csv\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetGatewayTransferPacketsDownloadUrlResponse>\\r\\n      <Data>http://xxx.xxx.xxx/xxx.csv</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetGatewayTransferPacketsDownloadUrlResponse>","errorExample":""}]',
            'title' => '获取下载链接',
            'summary' => '该链接指向一个CSV文件，其中包括了网关上下行数据包的统计数据。',
        ],
        'GetGatewayTupleOrder' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工单 Id。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
                            ],
                            'Data' => [
                                'description' => '网关安全密钥工单信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AcceptedMillis' => [
                                        'description' => '工单审批通过的 UNIX 时间戳，以毫秒为单位。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514822400000',
                                    ],
                                    'RequiredCount' => [
                                        'description' => '工单申请的网关安全密钥数量。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'CreatedMillis' => [
                                        'description' => '提交此工单的 UNIX 时间戳，以毫秒为单位。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000000',
                                    ],
                                    'OrderState' => [
                                        'description' => '工单的状态。'."\n"
                                            ."\n"
                                            .'参考工单状态取值'."\n",
                                        'type' => 'string',
                                        'example' => 'ACCEPTED',
                                    ],
                                    'OrderId' => [
                                        'description' => '工单 Id。'."\n",
                                        'type' => 'string',
                                        'example' => '1234',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Data\\": {\\n    \\"AcceptedMillis\\": 1514822400000,\\n    \\"RequiredCount\\": 10,\\n    \\"CreatedMillis\\": 1514736000000,\\n    \\"OrderState\\": \\"ACCEPTED\\",\\n    \\"OrderId\\": \\"1234\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>\\n    <OrderId>1234</OrderId>\\n    <OrderState>ACCEPTED</OrderState>\\n    <RequiredCount>1</RequiredCount>\\n    <CreatedMillis>1514736000000</CreatedMillis>\\n    <AcceptedMillis>1514822400000</AcceptedMillis>\\n</Data>","errorExample":""}]',
            'title' => '获取网关安全密钥工单信息',
            'summary' => '获取网关安全密钥工单的信息，传入工单 ID, 返回此工单的处理状态等信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '# 类型说明'."\n"
                ."\n"
                .'### 工单状态取值'."\n"
                ."\n"
                .'| 名称 | 类型 | 说明 |'."\n"
                .'| --- | --- | --- |'."\n"
                .'| APPLYING | String | 申请中。 |'."\n"
                .'| REJECTED | String | 已拒绝。 |'."\n"
                .'| ACCEPTING | String | 颁发中。 |'."\n"
                .'| ACCEPTING_FAILED | String | 颁发失败。 |'."\n"
                .'| ACCEPTED | String | 颁发成功。 |'."\n"
                .'| REVOKING | String | 撤回中。 |'."\n"
                .'| REVOKING_FAILED | String | 撤回失败。 |'."\n"
                .'| REVOKED | String | 撤回成功。 |'."\n",
            'extraInfo' => ' ',
        ],
        'GetGatewayTuplesDownloadUrl' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工单 Id。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '网关安全元组文件下载链接。',
                                'type' => 'string',
                                'example' => 'http://xxx.xxx/xxx.csv',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n",
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                    [
                        'errorCode' => 'GatewayTupleOrderNotAccepted',
                        'errorMessage' => 'The order on gateway tuple downloading is not approved. You cannot download the gateway tuple.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"http://xxx.xxx/xxx.csv\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>http://xxx.xxx/xxx.csv</Data>","errorExample":""}]',
            'title' => '获取网关安全元组下载链接',
            'summary' => '网关安全元组工单审批通过后，可以获取一个下载链接，该链接指向一个 CSV 文件，其中存储了颁发给该用户的网关安全元组。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetJoinPermissionAuthOrder' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权工单ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '授权工单的详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'CanceledMillis' => [
                                        'description' => '工单被取消的 UNIX 时间戳，以毫秒为单位。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000000',
                                    ],
                                    'ApplyingMillis' => [
                                        'description' => '发起工单的 UNIX 时间戳，以毫秒为单位。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000000',
                                    ],
                                    'RenterAliyunId' => [
                                        'description' => '专用入网凭证的目标租户的阿里云账号ID。',
                                        'type' => 'string',
                                        'example' => 'some_user',
                                    ],
                                    'AcceptedMillis' => [
                                        'description' => '工单被接受的 UNIX 时间戳，以毫秒为单位。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000000',
                                    ],
                                    'OwnerAliyunId' => [
                                        'description' => '发起授权的专用入网凭证拥有者的阿里云账号ID。',
                                        'type' => 'string',
                                        'example' => 'some_user',
                                    ],
                                    'RejectedMillis' => [
                                        'description' => '工单被回绝的 UNIX 时间戳，以毫秒为单位。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000000',
                                    ],
                                    'JoinPermissionId' => [
                                        'description' => '要授权的专用入网凭证ID。',
                                        'type' => 'string',
                                        'example' => '123456',
                                    ],
                                    'OrderState' => [
                                        'description' => '工单状态。取值：'."\n"
                                            ."\n"
                                            .'- **APPLYING**：工单发起，等待目标租户处理。'."\n"
                                            .'- **ACCEPTED**：工单被接受。'."\n"
                                            .'- **REJECTED**：工单被回绝。'."\n"
                                            .'- **CANCELED**：工单被取消。',
                                        'type' => 'string',
                                        'example' => 'ACCEPTED',
                                    ],
                                    'OrderId' => [
                                        'description' => '授权工单ID。',
                                        'type' => 'string',
                                        'example' => '123',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"CanceledMillis\\": 1514736000000,\\n    \\"ApplyingMillis\\": 1514736000000,\\n    \\"RenterAliyunId\\": \\"some_user\\",\\n    \\"AcceptedMillis\\": 1514736000000,\\n    \\"OwnerAliyunId\\": \\"some_user\\",\\n    \\"RejectedMillis\\": 1514736000000,\\n    \\"JoinPermissionId\\": \\"123456\\",\\n    \\"OrderState\\": \\"ACCEPTED\\",\\n    \\"OrderId\\": \\"123\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetJoinPermissionAuthOrderResponse>\\r\\n      <Data>\\r\\n            <OrderId>123</OrderId>\\r\\n            <CanceledMillis>1514736000000</CanceledMillis>\\r\\n            <RejectedMillis>1514736000000</RejectedMillis>\\r\\n            <ApplyingMillis>1514736000000</ApplyingMillis>\\r\\n            <RenterAliyunId>some_user</RenterAliyunId>\\r\\n            <OrderState>ACCEPTED</OrderState>\\r\\n            <OwnerAliyunId>some_user</OwnerAliyunId>\\r\\n            <JoinPermissionId>123456</JoinPermissionId>\\r\\n            <AcceptedMillis>1514736000000</AcceptedMillis>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetJoinPermissionAuthOrderResponse>","errorExample":""}]',
            'title' => '获取专用凭证授权工单的详细信息',
            'summary' => '调用GetJoinPermissionAuthOrder获取专用凭证授权工单的详细信息。',
        ],
        'GetNode' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点的DevEUI。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0000000000000000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '节点信息列表。',
                                'type' => 'object',
                                'properties' => [
                                    'DevAddr' => [
                                        'description' => '节点的网络地址。',
                                        'type' => 'string',
                                        'example' => '12345678',
                                    ],
                                    'LastJoinMillis' => [
                                        'description' => '最近一次入网的时间，UNIX时间戳，以毫秒为单位。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000000',
                                    ],
                                    'DevEui' => [
                                        'description' => '节点的DevEUI。',
                                        'type' => 'string',
                                        'example' => '0000000000000000',
                                    ],
                                    'BoundMillis' => [
                                        'description' => '节点加入当前节点分组的时间，UNIX时间戳，以毫秒为单位。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000000',
                                    ],
                                    'ClassMode' => [
                                        'description' => '节点所采用的LoRaWAN Class模式，可取值：A、B、C。',
                                        'type' => 'string',
                                        'example' => 'A',
                                    ],
                                    'AuthTypes' => [
                                        'type' => 'string',
                                        'items' => [
                                            'description' => '网关合约类型。'."\n"
                                                ."\n"
                                                .'- HYBRID：hybrid网关'."\n"
                                                .'- SINGLE_CHANNEL：单通道网关'."\n"
                                                .'- STANDARD：标准合约网关',
                                            'type' => 'string',
                                            'example' => 'STANDARD',
                                            'index' => 200,
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"LastJoinMillis\\": 1514736000000,\\n    \\"DevAddr\\": \\"12345678\\",\\n    \\"DevEui\\": \\"0000000000000000\\",\\n    \\"BoundMillis\\": 1514736000000,\\n    \\"ClassMode\\": \\"A\\",\\n    \\"AuthTypes\\": [\\n      \\"STANDARD\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetNodeResponse>\\r\\n      <Data>\\r\\n            <ClassMode>A</ClassMode>\\r\\n            <BoundMillis>1514736000000</BoundMillis>\\r\\n            <LastJoinMillis>1514736000000</LastJoinMillis>\\r\\n            <DevEui>0000000000000000</DevEui>\\r\\n            <DevAddr>12345678</DevAddr>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetNodeResponse>","errorExample":""}]',
            'title' => '获取节点信息',
            'summary' => '调用GetNode获取节点信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetNodeGroupTransferPacketsDownloadUrl' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。'."\n"
                            ."\n"
                            .'><notice>'."\n"
                            .'- 若有ID值，必须传入该ID值，否则调用会失败。'."\n"
                            .'- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。'."\n"
                            ."\n"
                            .'></notice>'."\n"
                            ."\n"
                            .'实例的更多信息，请参见[实例概述](~~356505~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iot-***-v6***',
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'DevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据DevEUI过滤数据包。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0000000000000001',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据包分类。取值：'."\n"
                            ."\n"
                            .'- **DOWNLINK_PACKET**：下行包。'."\n"
                            .'- **UPLINK_PACKET**：上行包。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DOWNLINK_PACKET',
                        'enum' => [
                            'DOWNLINK_PACKET',
                            'UPLINK_PACKET',
                            'INVALID_PACKET',
                        ],
                    ],
                ],
                [
                    'name' => 'BeginMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'EndMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段。取值：**LOG_MILLIS**，表示按照时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LOG_MILLIS',
                        'enum' => [
                            'LOG_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需配合**SortingField**参数一起使用。'."\n"
                            ."\n"
                            .'- **true**：升序。'."\n"
                            ."\n"
                            .'- **false**：降序。',
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
                            'Data' => [
                                'description' => '数据包统计文件下载地址。',
                                'type' => 'string',
                                'example' => 'http://xxx.xxx.xxx/xxx.csv',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"http://xxx.xxx.xxx/xxx.csv\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetNodeGroupTransferPacketsDownloadUrlResponse>\\r\\n      <Data>http://xxx.xxx.xxx/xxx.csv</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetNodeGroupTransferPacketsDownloadUrlResponse>","errorExample":""}]',
            'title' => '获取下载链接',
            'summary' => '该链接指向一个CSV文件，其中包括了节点分组上下行数据包的统计数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetNodeTransferPacket' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。'."\n"
                            .'您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。若有ID值，必须传入该ID值，否则调用会失败。'."\n"
                            ."\n"
                            .'> 如果公共实例没有ID值，请参见[如何获取实例ID](~~267533~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iot-cn-0pp1n8t****',
                    ],
                ],
                [
                    'name' => 'DevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据包所涉及的DevEUI，为16位HEX。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0000000000000001',
                    ],
                ],
                [
                    'name' => 'Base64EncodedMacPayload',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Base64编码后的MACPayload报文，可调用[ListNodeGroupTransferPackets](~~109959~~)接口查询获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SGVsbG8hIQ==',
                    ],
                ],
                [
                    'name' => 'LogMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据包的发送时间，可调用[ListNodeGroupTransferPackets](~~109959~~)接口查询获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1514736000000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否调用成功。返回值：'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- ** false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '调用成功时返回的数据包信息列表。',
                                'type' => 'object',
                                'properties' => [
                                    'GwOwnerAliyunId' => [
                                        'description' => '数据包所经过网关所属用户的阿里云账号。',
                                        'type' => 'string',
                                        'example' => 'XXX',
                                    ],
                                    'LogMillis' => [
                                        'description' => '数据包传输的UNIX时间戳，以毫秒为单位。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000000',
                                    ],
                                    'ProcessEvent' => [
                                        'description' => '该报文的处理结果。返回值：'."\n"
                                            ."\n"
                                            .'- **SUCCESS**：成功。'."\n"
                                            .'- **DEVADDR_ILLEGAL**：**DevAddr**不合法。'."\n"
                                            .'- **MIC_FAIL**：MIC校验失败。'."\n"
                                            .'- **DEVEUI_ILLEGAL**：**DevEUI**不合法。'."\n"
                                            .'- **JOINEUI_ILLEGAL**：**JoinEUI**不合法。'."\n"
                                            .'- **STATUS_INVALID**：节点状态不合法。'."\n"
                                            .'- **REDUPLICATE**：重复包。'."\n"
                                            .'- **ISOLATED**：网间隔离。'."\n"
                                            .'- **APPKEY_ILLEGAL**：**AppKey**不合法。'."\n"
                                            .'- **UPDATE_RUNTIME_CFG_FAIL**：更新运行时配置失败。'."\n"
                                            .'- **DELAY_PROCESS**：延迟处理。'."\n"
                                            .'- **GWEUI_ILLEGAL**：**GwEUI**不合法。'."\n"
                                            .'- **GW_STATUS_INVALID**：网关状态不合法。'."\n"
                                            .'- **GW_FREQ_NOT_MATCH**：网关频点不匹配。'."\n"
                                            .'- **其它**：未知错误。',
                                        'type' => 'string',
                                        'example' => 'SUCCESS',
                                    ],
                                    'Base64EncodedMacPayload' => [
                                        'description' => 'Base64编码后的MACPayload报文。',
                                        'type' => 'string',
                                        'example' => 'SGVsbG8hIQ==',
                                    ],
                                    'FPort' => [
                                        'description' => '收发此数据包时所使用的FPort。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '99',
                                    ],
                                    'Lsnr' => [
                                        'description' => '收发此数据包的信噪比。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '-10.5',
                                    ],
                                    'FreqBandPlanGroupId' => [
                                        'description' => '数据包所经过的网关所采用的频段ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '101',
                                    ],
                                    'HasData' => [
                                        'description' => '此数据包中是否包含业务数据。返回值：'."\n"
                                            ."\n"
                                            .'- **true**：包含。'."\n"
                                            .'- **false**：不包含。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'ClassMode' => [
                                        'description' => '收发此数据包时的LoRaWAN Class模式。',
                                        'type' => 'string',
                                        'example' => 'C',
                                    ],
                                    'MacPayloadSize' => [
                                        'description' => '此数据包的MACPayload报文长度。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '15',
                                    ],
                                    'MessageType' => [
                                        'description' => '消息类型。返回值：'."\n"
                                            ."\n"
                                            .'- **JOIN_REQUEST**：Join-request消息。'."\n"
                                            .'- **JOIN_ACCEPT**：Join-accept消息。'."\n"
                                            .'- **UNCONFIRMED_UP**：Unconfirmed上行消息。'."\n"
                                            .'- **UNCONFIRMED_DOWN**：Unconfirmed下行消息。'."\n"
                                            .'- **CONFIRMED_UP**：Confirmed上行消息。'."\n"
                                            .'- **CONFIRMED_DOWN**：Confirmed下行消息。'."\n"
                                            .'- **REJOIN_REQUEST**：Rejoin-request消息。'."\n"
                                            .'- **PROPRIETARY**：Proprietary消息（私有消息）。',
                                        'type' => 'string',
                                        'example' => 'JOIN_REQUEST',
                                    ],
                                    'Datr' => [
                                        'description' => '收发此数据包的数据速率。',
                                        'type' => 'string',
                                        'example' => 'SF12BW125',
                                    ],
                                    'DevAddr' => [
                                        'description' => '收发此数据包的节点的网络地址。',
                                        'type' => 'string',
                                        'example' => '00000000',
                                    ],
                                    'DevEui' => [
                                        'description' => '收发此数据包的节点的DevEUI。',
                                        'type' => 'string',
                                        'example' => '0000000000000001',
                                    ],
                                    'GwEui' => [
                                        'description' => '收发此数据包所经过的网关的GwEUI。',
                                        'type' => 'string',
                                        'example' => '0000000000000000',
                                    ],
                                    'Rssi' => [
                                        'description' => '收发此数据包的RSSI。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '-110',
                                    ],
                                    'HasMacCommand' => [
                                        'description' => '此数据包中是否包含MAC指令。返回值：'."\n"
                                            ."\n"
                                            .'- **true**：包含。'."\n"
                                            .'- **false**：不包含。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Freq' => [
                                        'description' => '收发此数据包的频点。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '470.3',
                                    ],
                                    'MacCommandCIDs' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '这个数据包所携带的MAC指令列表。',
                                            'type' => 'object',
                                            'example' => '["0x01","0x02"]',
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
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"GwOwnerAliyunId\\": \\"XXX\\",\\n    \\"LogMillis\\": 1514736000000,\\n    \\"ProcessEvent\\": \\"SUCCESS\\",\\n    \\"Base64EncodedMacPayload\\": \\"SGVsbG8hIQ==\\",\\n    \\"FPort\\": 99,\\n    \\"Lsnr\\": -10.5,\\n    \\"FreqBandPlanGroupId\\": 101,\\n    \\"HasData\\": true,\\n    \\"ClassMode\\": \\"C\\",\\n    \\"MacPayloadSize\\": 15,\\n    \\"MessageType\\": \\"JOIN_REQUEST\\",\\n    \\"Datr\\": \\"SF12BW125\\",\\n    \\"DevAddr\\": \\"00000000\\",\\n    \\"DevEui\\": \\"0000000000000001\\",\\n    \\"GwEui\\": \\"0000000000000000\\",\\n    \\"Rssi\\": -110,\\n    \\"HasMacCommand\\": true,\\n    \\"Freq\\": 470.3,\\n    \\"MacCommandCIDs\\": [\\n      [\\n        \\"0x01\\",\\n        \\"0x02\\"\\n      ]\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetNodeTransferPacketResponse>\\n    <Success>true</Success>\\n    <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n    <Data>\\n        <GwOwnerAliyunId>XXX</GwOwnerAliyunId>\\n        <LogMillis>1514736000000</LogMillis>\\n        <ProcessEvent>SUCCESS</ProcessEvent>\\n        <Base64EncodedMacPayload>SGVsbG8hIQ==</Base64EncodedMacPayload>\\n        <FPort>99</FPort>\\n        <Lsnr>-10.5</Lsnr>\\n        <FreqBandPlanGroupId>101</FreqBandPlanGroupId>\\n        <HasData>true</HasData>\\n        <ClassMode>C</ClassMode>\\n        <MacPayloadSize>15</MacPayloadSize>\\n        <MessageType>JOIN_REQUEST</MessageType>\\n        <Datr>SF12BW125</Datr>\\n        <DevAddr>00000000</DevAddr>\\n        <DevEui>0000000000000001</DevEui>\\n        <GwEui>0000000000000000</GwEui>\\n        <Rssi>-110</Rssi>\\n        <HasMacCommand>true</HasMacCommand>\\n        <Freq>470.3</Freq>\\n        <MacCommandCIDs/>\\n    </Data>\\n</GetNodeTransferPacketResponse>","errorExample":""}]',
            'title' => '获取某条节点上下行数据包',
            'summary' => '调用GetNodeTransferPacket获取某条节点上下行数据包。',
            'description' => '# 限制说明'."\n"
                ."\n"
                .'单阿里云账号调用该接口的每秒请求数（QPS）最大限制为5。'."\n"
                ."\n"
                .'> RAM用户共享阿里云账号配额。',
            'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~108601~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetNodeTransferPacketsDownloadUrl' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'GwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据 GwEUI 过滤数据包。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '0000000000000001',
                    ],
                ],
                [
                    'name' => 'DevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据 DevEUI 过滤数据包。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '0000000000000001',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据包分类，可选：DOWNLINK_PACKET（下行包）、UPLINK_PACKET（上行包）、INVALID_PACKET（无效包）。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DOWNLINK_PACKET',
                        'enum' => [
                            'DOWNLINK_PACKET',
                            'UPLINK_PACKET',
                            'INVALID_PACKET',
                        ],
                    ],
                ],
                [
                    'name' => 'BeginMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，毫秒为单位的 UNIX 时间戳。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'EndMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，毫秒为单位的 UNIX 时间戳。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段，可选 LOG_MILLIS（按照时间排序）。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LOG_MILLIS',
                        'enum' => [
                            'LOG_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配合 SortingField 参数一起使用，true 表示升序，false 表示降序。'."\n"
                            ."\n"
                            .'默认降序。',
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
                            'Data' => [
                                'description' => '数据包统计文件下载地址。',
                                'type' => 'string',
                                'example' => 'http://xxx.xxx.xxx/xxx.csv',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n",
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"http://xxx.xxx.xxx/xxx.csv\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>http://xxx.xxx.xxx/xxx.csv</Data>","errorExample":""}]',
            'title' => '获取下载链接',
            'summary' => '该链接指向一个 CSV 文件，其中包括了节点上下行数据包的统计数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetNodeTupleOrder' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工单 Id。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
                            ],
                            'Data' => [
                                'description' => '节点安全元组工单信息。',
                                'type' => 'object',
                                'properties' => [
                                    'RequiredCount' => [
                                        'description' => '工单申请的节点安全密钥数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'CreatedMillis' => [
                                        'description' => '提交工单的 UNIX 时间戳，以毫秒为单位。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000000',
                                    ],
                                    'IsKpm' => [
                                        'description' => '是否是安全产线发起的密钥申请。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'AcceptedMillis' => [
                                        'description' => '工单审批通过的 UNIX 时间戳，以毫秒为单位。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514822400000',
                                    ],
                                    'OrderId' => [
                                        'description' => '工单 Id。',
                                        'type' => 'string',
                                        'example' => '1234',
                                    ],
                                    'OrderState' => [
                                        'description' => '工单状态。'."\n"
                                            ."\n"
                                            .'审批状态取值'."\n"
                                            ."\n"
                                            .'APPLYING		申请中。'."\n"
                                            .'ACCEPTING		颁发中。'."\n"
                                            .'ACCEPTED		颁发成功。'."\n"
                                            .'ACCEPTING_FAILED		颁发失败。'."\n"
                                            .'REJECTED		已拒绝。'."\n"
                                            .'REVOKING		撤回中。'."\n"
                                            .'REVOKING_FAILED		撤回失败。'."\n"
                                            .'REVOKED		撤回成功。',
                                        'type' => 'string',
                                        'example' => 'ACCEPTED',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Data\\": {\\n    \\"RequiredCount\\": 10,\\n    \\"CreatedMillis\\": 1514736000000,\\n    \\"IsKpm\\": false,\\n    \\"AcceptedMillis\\": 1514822400000,\\n    \\"OrderId\\": \\"1234\\",\\n    \\"OrderState\\": \\"ACCEPTED\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>\\n    <OrderId>1234</OrderId>\\n    <IsKpm>false</IsKpm>\\n    <OrderState>ACCEPTED</OrderState>\\n    <RequiredCount>1</RequiredCount>\\n    <CreatedMillis>1514736000000</CreatedMillis>\\n    <AcceptedMillis>1514822400000</AcceptedMillis>\\n</Data>","errorExample":""}]',
            'title' => '获取节点安全元组工单信息',
            'summary' => '获取节点安全元组工单信息，传入工单 ID, 返回此工单的处理状态等信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '# 类型说明'."\n"
                ."\n"
                .'### 审批状态取值'."\n"
                ."\n"
                .'| 名称 | 类型 | 说明 |'."\n"
                .'| --- | --- | --- |'."\n"
                .'| APPLYING | String | 申请中。 |'."\n"
                .'| ACCEPTING | String | 颁发中。 |'."\n"
                .'| ACCEPTED | String | 颁发成功。 |'."\n"
                .'| ACCEPTING_FAILED | String | 颁发失败。 |'."\n"
                .'| REJECTED | String | 已拒绝。 |'."\n"
                .'| REVOKING | String | 撤回中。 |'."\n"
                .'| REVOKING_FAILED | String | 撤回失败。 |'."\n"
                .'| REVOKED | String | 撤回成功。 |',
            'extraInfo' => ' ',
        ],
        'GetNodeTuplesDownloadUrl' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工单 Id。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '节点安全密钥文件下载链接。',
                                'type' => 'string',
                                'example' => 'http://xxx.xxx/xxx.csv',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n",
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"http://xxx.xxx/xxx.csv\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>http://xxx.xxx/xxx.csv</Data>","errorExample":""}]',
            'title' => '获取节点安全元组下载链接',
            'summary' => '节点安全元组工单审批通过后，可以获取一个下载链接，该链接指向一个 CSV 文件，其中存储了颁发给该用户的节点安全元组。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetNotification' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'NotificationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通知ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '通知信息列表。',
                                'type' => 'object',
                                'properties' => [
                                    'NoticeMillis' => [
                                        'description' => '通知发出的时间，毫秒为单位的UNIX时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000000',
                                    ],
                                    'Category' => [
                                        'description' => '通知分类。取值：'."\n"
                                            ."\n"
                                            .'- **GATEWAY_OFFLINE**：网关离线信息。'."\n"
                                            .'- **JOIN_PERMISSION_AUTH_APPLYING**：凭证授权中。'."\n"
                                            .'- **JOIN_PERMISSION_AUTH_ACCEPTED**：凭证授权成功。'."\n"
                                            .'- **JOIN_PERMISSION_AUTH_CANCELED**：撤销凭证授权。'."\n"
                                            .'- **JOIN_PERMISSION_AUTH_REJECTED**：拒绝凭证授权。',
                                        'type' => 'string',
                                        'example' => 'GATEWAY_OFFLINE',
                                    ],
                                    'HandleState' => [
                                        'description' => '此通知的处理状态。可取值为：'."\n"
                                            ."\n"
                                            .'- **HANDLED**：已处理。'."\n"
                                            ."\n"
                                            .'- **UNHANDLED**：未处理。',
                                        'type' => 'string',
                                        'example' => 'UNHANDLED',
                                    ],
                                    'NotificationId' => [
                                        'description' => '通知ID。',
                                        'type' => 'string',
                                        'example' => '123',
                                    ],
                                    'HandledMillis' => [
                                        'description' => '通知被处理的时间，毫秒为单位的UNIX时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000001',
                                    ],
                                    'GatewayOfflineInfo' => [
                                        'description' => '网关离线信息。'."\n"
                                            ."\n"
                                            .'当**Category**字段为**GATEWAY_OFFLINE**时，该字段有值。',
                                        'type' => 'object',
                                        'properties' => [
                                            'GwEui' => [
                                                'description' => '网关唯一标识。',
                                                'type' => 'string',
                                                'example' => '0000000000000000',
                                            ],
                                            'OfflineMillis' => [
                                                'description' => '离线时间，毫秒为单位的UNIX时间戳。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1514736000000',
                                            ],
                                        ],
                                    ],
                                    'JoinPermissionAuthInfo' => [
                                        'description' => '凭证授权信息。'."\n"
                                            ."\n"
                                            .'当**Category**字段为**JOINPERMISSION_AUTH**时该字段有值。',
                                        'type' => 'object',
                                        'properties' => [
                                            'CanceledMillis' => [
                                                'description' => '工单被取消的UNIX时间戳，毫秒为单位。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1514736000000',
                                            ],
                                            'ApplyingMillis' => [
                                                'description' => '发起工单的UNIX时间戳，毫秒为单位。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1514736000000',
                                            ],
                                            'JoinEui' => [
                                                'description' => '入网凭证所使用的JoinEUI。',
                                                'type' => 'string',
                                                'example' => 'd896e0',
                                            ],
                                            'RenterAliyunId' => [
                                                'description' => '入网凭证租户的阿里云账号ID。',
                                                'type' => 'string',
                                                'example' => 'some-user2',
                                            ],
                                            'AcceptedMillis' => [
                                                'description' => '工单审批通过的UNIX时间戳 ，毫秒为单位。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1514736000000',
                                            ],
                                            'OwnerAliyunId' => [
                                                'description' => '发起授权的入网凭证拥有者的阿里云账号ID。',
                                                'type' => 'string',
                                                'example' => 'some-user1',
                                            ],
                                            'RejectedMillis' => [
                                                'description' => '工单被拒绝的UNIX时间戳，毫秒为单位。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1514736000000',
                                            ],
                                            'JoinPermissionId' => [
                                                'description' => '唯一标识入网凭证的ID。',
                                                'type' => 'string',
                                                'example' => '123',
                                            ],
                                            'JoinPermissionName' => [
                                                'description' => '入网凭证的名称。',
                                                'type' => 'string',
                                                'example' => '凭证1',
                                            ],
                                            'OrderState' => [
                                                'description' => '工单状态。取值：'."\n"
                                                    ."\n"
                                                    .'- **APPLYING**：工单发起，等待批准。'."\n"
                                                    .'- **ACCEPTED**：工单被批准。'."\n"
                                                    .'- **REJECTED**：工单被拒绝。'."\n"
                                                    .'- **CANCELED**：工单被取消。',
                                                'type' => 'string',
                                                'example' => '123',
                                            ],
                                            'OrderId' => [
                                                'description' => '工单ID。',
                                                'type' => 'string',
                                                'example' => '123',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"NoticeMillis\\": 1514736000000,\\n    \\"Category\\": \\"GATEWAY_OFFLINE\\",\\n    \\"HandleState\\": \\"UNHANDLED\\",\\n    \\"NotificationId\\": \\"123\\",\\n    \\"HandledMillis\\": 1514736000001,\\n    \\"GatewayOfflineInfo\\": {\\n      \\"GwEui\\": \\"0000000000000000\\",\\n      \\"OfflineMillis\\": 1514736000000\\n    },\\n    \\"JoinPermissionAuthInfo\\": {\\n      \\"CanceledMillis\\": 1514736000000,\\n      \\"ApplyingMillis\\": 1514736000000,\\n      \\"JoinEui\\": \\"d896e0\\",\\n      \\"RenterAliyunId\\": \\"some-user2\\",\\n      \\"AcceptedMillis\\": 1514736000000,\\n      \\"OwnerAliyunId\\": \\"some-user1\\",\\n      \\"RejectedMillis\\": 1514736000000,\\n      \\"JoinPermissionId\\": \\"123\\",\\n      \\"JoinPermissionName\\": \\"凭证1\\",\\n      \\"OrderState\\": \\"123\\",\\n      \\"OrderId\\": \\"123\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetNotificationResponse>\\r\\n      <Data>\\r\\n            <Category>GATEWAY_OFFLINE</Category>\\r\\n            <GatewayOfflineInfo>\\r\\n                  <GwEui>0000000000000000</GwEui>\\r\\n                  <OfflineMillis>1514736000000</OfflineMillis>\\r\\n            </GatewayOfflineInfo>\\r\\n            <HandleUtcMilli>1514736000001</HandleUtcMilli>\\r\\n            <HandleState>UNHANDLED</HandleState>\\r\\n            <NotificationId>123</NotificationId>\\r\\n            <NoticeUtcMilli>1514736000000</NoticeUtcMilli>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetNotificationResponse>","errorExample":""}]',
            'title' => '获取通知信息',
            'summary' => '调用GetNotification获取通知信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetOwnedJoinPermission' => [
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
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JoinPermissionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要获取的入网凭证的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '所拥有入网凭证的信息列表。',
                                'type' => 'object',
                                'properties' => [
                                    'RxMonthSum' => [
                                        'description' => '入网凭证的当月上行数据包量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'MulticastNodeCapacity' => [
                                        'description' => '入网凭证可接入组播节点容量。'."\n"
                                            ."\n",
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                    'MulticastEnabled' => [
                                        'description' => '入网凭证组播的启停用状态。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'TxMonthSum' => [
                                        'description' => '入网凭证的当月下行数据包量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'FreqBandPlanGroupId' => [
                                        'description' => '入网凭证所采用的频段的频段ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '102',
                                    ],
                                    'TxDailySum' => [
                                        'description' => '入网凭证的当天下行数据包量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'BoundProductName' => [
                                        'type' => 'string',
                                    ],
                                    'DataRate' => [
                                        'description' => '工作速率。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '4',
                                    ],
                                    'JoinPermissionId' => [
                                        'description' => '入网凭证ID。',
                                        'type' => 'string',
                                        'example' => '123',
                                    ],
                                    'ClassMode' => [
                                        'description' => '入网凭证采用的LoRaWAN Class模式。取值：A、B、C。',
                                        'type' => 'string',
                                        'example' => 'A',
                                    ],
                                    'DataDispatchDestination' => [
                                        'description' => '数据流转目的地。取值：'."\n"
                                            ."\n"
                                            .'- **IOT**：数据流转到IoT的产品。'."\n"
                                            .'- **ONS**：数据流转到MQ的Topic。',
                                        'type' => 'string',
                                        'example' => 'IOT',
                                    ],
                                    'MulticastNodeCount' => [
                                        'description' => '入网凭证已接入组播节点数量。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'RxDailySum' => [
                                        'description' => '入网凭证的当天上行数据包量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'JoinEui' => [
                                        'description' => '入网凭证所使用的JoinEUI。',
                                        'type' => 'string',
                                        'example' => '0000000000000000',
                                    ],
                                    'CreateMillis' => [
                                        'description' => '入网凭证的创建时间。格式为 UNIX 时间戳，单位毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000000',
                                    ],
                                    'Enabled' => [
                                        'description' => '入网凭证的启停用状态。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'RxDelay' => [
                                        'description' => 'classA的接收窗口延时。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'RenterAliyunId' => [
                                        'description' => '入网凭证租户的阿里云账号ID。',
                                        'type' => 'string',
                                        'example' => 'some-user',
                                    ],
                                    'NodesCnt' => [
                                        'description' => '使用该入网凭证的节点的数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'JoinPermissionName' => [
                                        'description' => '入网凭证的名称。',
                                        'type' => 'string',
                                        'example' => '凭证1',
                                    ],
                                    'AuthState' => [
                                        'description' => '入网凭证的授权状态。取值：'."\n"
                                            ."\n"
                                            .'- **NEW**：未授权'."\n"
                                            .'- **APPLYING**：授权中'."\n"
                                            .'- **ACCEPTED**：已授权',
                                        'type' => 'string',
                                        'example' => 'NEW',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"RxMonthSum\\": 0,\\n    \\"MulticastNodeCapacity\\": 1000,\\n    \\"MulticastEnabled\\": false,\\n    \\"TxMonthSum\\": 0,\\n    \\"FreqBandPlanGroupId\\": 102,\\n    \\"TxDailySum\\": 0,\\n    \\"DataRate\\": 4,\\n    \\"JoinPermissionId\\": \\"123\\",\\n    \\"ClassMode\\": \\"A\\",\\n    \\"DataDispatchDestination\\": \\"IOT\\",\\n    \\"MulticastNodeCount\\": 10,\\n    \\"RxDailySum\\": 0,\\n    \\"JoinEui\\": \\"0000000000000000\\",\\n    \\"CreateMillis\\": 1514736000000,\\n    \\"Enabled\\": true,\\n    \\"RxDelay\\": 1,\\n    \\"RenterAliyunId\\": \\"some-user\\",\\n    \\"NodesCnt\\": 10,\\n    \\"JoinPermissionName\\": \\"凭证1\\",\\n    \\"AuthState\\": \\"NEW\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetOwnedJoinPermissionResponse>\\r\\n      <Data>\\r\\n            <JoinEui>0000000000000000</JoinEui>\\r\\n            <ClassMode>A</ClassMode>\\r\\n            <RxDailySum>0</RxDailySum>\\r\\n            <Enabled>true</Enabled>\\r\\n            <CreateMillis>1514736000000</CreateMillis>\\r\\n            <RxMonthSum>0</RxMonthSum>\\r\\n            <RenterAliyunId>some-user</RenterAliyunId>\\r\\n            <TxDailySum>0</TxDailySum>\\r\\n            <NodesCnt>10</NodesCnt>\\r\\n            <TxMonthSum>0</TxMonthSum>\\r\\n            <JoinPermissionId>123</JoinPermissionId>\\r\\n            <DataDispatchDestination>IOT</DataDispatchDestination>\\r\\n            <JoinPermissionName>凭证1</JoinPermissionName>\\r\\n            <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetOwnedJoinPermissionResponse>","errorExample":""}]',
            'title' => '获取入网凭证',
            'summary' => '根据入网凭证ID获取当前用户账号所拥有的入网凭证。',
            'description' => '> 通过该接口获取的一定是当前用户账号所拥有的某个专用入网凭证。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetRentedJoinPermission' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                    'name' => 'JoinPermissionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '入网凭证ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '租用的入网凭证信息列表。',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'description' => '入网凭证的类型。取值：'."\n"
                                            ."\n"
                                            .'- **LOCAL**：专用凭证。'."\n"
                                            .'- **ROAMING**：泛在凭证。',
                                        'type' => 'string',
                                        'example' => 'LOCAL',
                                    ],
                                    'RxMonthSum' => [
                                        'description' => '入网凭证的当月上行数据包量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'BoundNodeGroupName' => [
                                        'description' => '凭证绑定的节点组名称。',
                                        'type' => 'string',
                                        'example' => '123',
                                    ],
                                    'TxMonthSum' => [
                                        'description' => '入网凭证的当月下行数据包量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'FreqBandPlanGroupId' => [
                                        'description' => '入网凭证采用的频段的频段ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '102',
                                    ],
                                    'TxDailySum' => [
                                        'description' => '入网凭证的当天下行数据包量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'DataRate' => [
                                        'description' => '工作速率。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'JoinPermissionId' => [
                                        'description' => '入网凭证ID。',
                                        'type' => 'string',
                                        'example' => '123',
                                    ],
                                    'ClassMode' => [
                                        'description' => '入网凭证采用的LoRaWAN Class模式，可取值：A、B、C。',
                                        'type' => 'string',
                                        'example' => 'A',
                                    ],
                                    'RxDailySum' => [
                                        'description' => '入网凭证的当天上行数据包量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'JoinEui' => [
                                        'description' => '入网凭证使用的JoinEUI。',
                                        'type' => 'string',
                                        'example' => '0000000000000000',
                                    ],
                                    'CreateMillis' => [
                                        'description' => '入网凭证的创建时间，格式为 UNIX 时间戳，以毫秒为单位。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1514736000000',
                                    ],
                                    'Enabled' => [
                                        'description' => '入网凭证的启停用状态。**true**表示启用，**false**表示停用。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'RxDelay' => [
                                        'description' => 'classA的接收窗口延时。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'BoundNodeGroupId' => [
                                        'description' => '凭证绑定的节点组id。',
                                        'type' => 'string',
                                        'example' => '123',
                                    ],
                                    'NodesCnt' => [
                                        'description' => '使用该入网凭证的节点数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'JoinPermissionName' => [
                                        'description' => '入网凭证的名称。',
                                        'type' => 'string',
                                        'example' => '凭证1',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"Type\\": \\"LOCAL\\",\\n    \\"RxMonthSum\\": 0,\\n    \\"BoundNodeGroupName\\": \\"123\\",\\n    \\"TxMonthSum\\": 0,\\n    \\"FreqBandPlanGroupId\\": 102,\\n    \\"TxDailySum\\": 0,\\n    \\"DataRate\\": 2,\\n    \\"JoinPermissionId\\": \\"123\\",\\n    \\"ClassMode\\": \\"A\\",\\n    \\"RxDailySum\\": 0,\\n    \\"JoinEui\\": \\"0000000000000000\\",\\n    \\"CreateMillis\\": 1514736000000,\\n    \\"Enabled\\": true,\\n    \\"RxDelay\\": 1,\\n    \\"BoundNodeGroupId\\": \\"123\\",\\n    \\"NodesCnt\\": 10,\\n    \\"JoinPermissionName\\": \\"凭证1\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetRentedJoinPermissionResponse>\\r\\n      <Data>\\r\\n            <JoinEui>0000000000000000</JoinEui>\\r\\n            <ClassMode>A</ClassMode>\\r\\n            <RxDailySum>0</RxDailySum>\\r\\n            <Enabled>true</Enabled>\\r\\n            <CreateMillis>1514736000000</CreateMillis>\\r\\n            <RxMonthSum>0</RxMonthSum>\\r\\n            <TxDailySum>0</TxDailySum>\\r\\n            <NodesCnt>10</NodesCnt>\\r\\n            <TxMonthSum>0</TxMonthSum>\\r\\n            <JoinPermissionId>123</JoinPermissionId>\\r\\n            <type>LOCAL</type>\\r\\n            <JoinPermissionName>凭证1</JoinPermissionName>\\r\\n            <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</GetRentedJoinPermissionResponse>","errorExample":""}]',
            'title' => '获取租用的入网凭证',
            'summary' => '根据入网凭证ID，获取当前用户账号租用的入网凭证（可能是专用入网凭证或泛在入网凭证）。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetUserLicense' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
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
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '各项服务的容量与当前使用量。',
                                'type' => 'object',
                                'properties' => [
                                    'RoamingJoinPermissionCount' => [
                                        'description' => '泛在入网凭证服务的用量。'."\n"
                                            ."\n"
                                            .'针对开发者类的用户，表示当前用户账号已经申请的泛在入网凭证的数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayTupleCount' => [
                                        'description' => '网关安全元组的服务用量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号已经申请了的网关安全元组的数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayTupleSingleChannelCount' => [
                                        'description' => '单通道网关已用数量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号接入服务的单通道网关数量。'."\n"
                                            ."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayFreeLimit' => [
                                        'description' => '网关接入服务的免费容量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号可以免费接入的网关数量上限，其值必然小于等于 GatewayLimit。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'NodeTupleFreeLimit' => [
                                        'description' => '节点安全元组的免费服务容量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号可以申请的免费节点安全元组的数量，其值必然小于等于NodeTupleLimit。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'NodeFreeLimit' => [
                                        'description' => '节点接入服务的免费容量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号可以免费接入的节点数量上限，其值必然小于等于NodeLimit。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayTupleHybridLimit' => [
                                        'description' => 'hybird网关密钥容量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号可以使用的hybird网关密钥数量上限。'."\n"
                                            ."\n\n"
                                            ."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayTupleStandardCount' => [
                                        'description' => '网关合约密钥-标准规格已用数量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号已用的网关合约密钥-标准规格数量。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayTupleFreeLimit' => [
                                        'description' => '网关安全元组的免费服务容量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号可以申请的免费网关安全元组的数量，其值必然小于等于GatewayTupleLimit。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayCount' => [
                                        'description' => '网关接入服务的用量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号已经接入的网关数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'NodeTupleRelayLimit' => [
                                        'description' => '中继密钥配额。'."\n"
                                            ."\n"
                                            .'表示当前用户账号中继密钥配额。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayLimit' => [
                                        'description' => '网关接入服务的容量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号可以接入的网关数量上限。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayTupleLimit' => [
                                        'description' => '网关安全元组的服务容量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号最多可以申请的网关安全元组的数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'LocalJoinPermissionFreeLimit' => [
                                        'description' => '专用入网凭证服务的免费容量。'."\n"
                                            ."\n"
                                            .'针对网络运营者类的用户，表示当前用户账号可以免费创建的专用入网凭证的数量上限，其值必然小于等于LocalJoinPermissionLimit。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'NodeLimit' => [
                                        'description' => '节点接入服务的容量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号可以接入的节点数量上限。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'RoamingJoinPermissionLimit' => [
                                        'description' => '泛在入网凭证服务的容量。'."\n"
                                            ."\n"
                                            .'针对开发者（解决方案供应商）类的用户，表示当前用户账号可以申请的泛在入网凭证的数量上限。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayTupleSingleChannelLimit' => [
                                        'description' => '网关单通道密钥配额。'."\n"
                                            ."\n"
                                            .'表示当前用户账号网关单通道密钥配额。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'LocalJoinPermissionLimit' => [
                                        'description' => '专用入网凭证服务的容量。'."\n"
                                            ."\n"
                                            .'针对网络运营者类的用户，表示当前用户账号可以创建的专用入网凭证的数量上限。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'Oui' => [
                                        'description' => 'LoRaWAN模组、设备制造商类的用户的组织码。改组织码会体现在用户申请到的DevEUI中。',
                                        'type' => 'string',
                                        'example' => '0000',
                                    ],
                                    'RelayLimit' => [
                                        'description' => '中继节点配额。'."\n"
                                            ."\n"
                                            .'表示当前用户账号中继节点配额。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayTupleHybridCount' => [
                                        'description' => 'hybird网关密钥已用数量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号已经使用的hybird网关密钥数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'LocalJoinPermissionCount' => [
                                        'description' => '专用入网凭证服务的用量。'."\n"
                                            ."\n"
                                            .'针对网络运营者类的用户，表示当前用户账号已经创建的专用入网凭证的数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'NodeTupleStandardCount' => [
                                        'description' => '节点合约密钥-标准规格已用数量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号已用节点合约密钥-标准规格数量。'."\n"
                                            ."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'NodeTupleCount' => [
                                        'description' => '节点安全元组的服务用量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号已经申请了的节点安全元组的数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayDingTalkLimit' => [
                                        'description' => '钉钉网关接入服务的容量。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayProfessionalLimit' => [
                                        'description' => '专业网关接入服务的容量。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayProfessionalCount' => [
                                        'description' => '专业网关接入服务的容量。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'RelayCount' => [
                                        'description' => '中继节点已用数量。'."\n"
                                            ."\n"
                                            .'表示当前用户已用中级节点数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'NodeTupleStandardLimit' => [
                                        'description' => '节点合约密钥-标准规格限额。'."\n"
                                            ."\n"
                                            .'表示当前用户账号可以接入节点合约密钥-标准规格容量。'."\n"
                                            ."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'RoamingJoinPermissionFreeLimit' => [
                                        'description' => '泛在入网凭证服务的免费容量。'."\n"
                                            ."\n"
                                            .'针对开发者类的用户，表示当前用户账号可以免费申请的泛在入网凭证的数量上限，其值必然小于等于RoamingJoinPermissionLimit。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'NodeTupleLimit' => [
                                        'description' => '节点（LoRaWAN模组）安全元组的服务容量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号最多可以申请的节点安全元组的数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'NodeCount' => [
                                        'description' => '节点接入服务的用量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号已经接入的节点数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayDingTalkCount' => [
                                        'description' => '钉钉网关接入服务的用量。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayTupleStandardLimit' => [
                                        'description' => '网关合约密钥-标准规格限额。'."\n"
                                            ."\n"
                                            .'表示当前用户账号可以接入网关合约密钥-标准规格容量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'GatewayPrePayCount' => [
                                        'description' => '网关接入服务的预付费数量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号已经接入的预付费网关数量。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'NodeTupleRelayCount' => [
                                        'description' => '中继密钥已用数量。'."\n"
                                            ."\n"
                                            .'表示当前用户账号接入的中继密钥数量。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"RoamingJoinPermissionCount\\": 100,\\n    \\"GatewayTupleCount\\": 100,\\n    \\"GatewayTupleSingleChannelCount\\": 100,\\n    \\"GatewayFreeLimit\\": 100,\\n    \\"NodeTupleFreeLimit\\": 100,\\n    \\"NodeFreeLimit\\": 100,\\n    \\"GatewayTupleHybridLimit\\": 100,\\n    \\"GatewayTupleStandardCount\\": 100,\\n    \\"GatewayTupleFreeLimit\\": 100,\\n    \\"GatewayCount\\": 100,\\n    \\"NodeTupleRelayLimit\\": 100,\\n    \\"GatewayLimit\\": 100,\\n    \\"GatewayTupleLimit\\": 100,\\n    \\"LocalJoinPermissionFreeLimit\\": 100,\\n    \\"NodeLimit\\": 100,\\n    \\"RoamingJoinPermissionLimit\\": 100,\\n    \\"GatewayTupleSingleChannelLimit\\": 100,\\n    \\"LocalJoinPermissionLimit\\": 100,\\n    \\"Oui\\": \\"0000\\",\\n    \\"RelayLimit\\": 100,\\n    \\"GatewayTupleHybridCount\\": 100,\\n    \\"LocalJoinPermissionCount\\": 100,\\n    \\"NodeTupleStandardCount\\": 100,\\n    \\"NodeTupleCount\\": 100,\\n    \\"GatewayDingTalkLimit\\": 100,\\n    \\"GatewayProfessionalLimit\\": 100,\\n    \\"GatewayProfessionalCount\\": 100,\\n    \\"RelayCount\\": 100,\\n    \\"NodeTupleStandardLimit\\": 100,\\n    \\"RoamingJoinPermissionFreeLimit\\": 100,\\n    \\"NodeTupleLimit\\": 100,\\n    \\"NodeCount\\": 100,\\n    \\"GatewayDingTalkCount\\": 100,\\n    \\"GatewayTupleStandardLimit\\": 100,\\n    \\"GatewayPrePayCount\\": 100,\\n    \\"NodeTupleRelayCount\\": 100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\r\\n<GetUserLicenseResponse>\\r\\n    <Data>\\r\\n        <LabGatewayLimit>100</LabGatewayLimit>\\r\\n        <Oui>0000</Oui>\\r\\n        <GatewayLimit>100</GatewayLimit>\\r\\n        <NodeTupleCount>100</NodeTupleCount>\\r\\n        <RoamingJoinPermissionCount>100</RoamingJoinPermissionCount>\\r\\n        <LocalJoinPermissionCount>100</LocalJoinPermissionCount>\\r\\n        <GatewayTupleCount>100</GatewayTupleCount>\\r\\n        <NodeTupleLimit>100</NodeTupleLimit>\\r\\n        <LocalJoinPermissionLimit>100</LocalJoinPermissionLimit>\\r\\n        <NodeCount>100</NodeCount>\\r\\n        <RoamingJoinPermissionLimit>100</RoamingJoinPermissionLimit>\\r\\n        <GatewayCount>100</GatewayCount>\\r\\n        <LabNodeCount>100</LabNodeCount>\\r\\n        <GatewayTupleLimit>100</GatewayTupleLimit>\\r\\n        <LabNodeLimit>100</LabNodeLimit>\\r\\n        <NodeLimit>100</NodeLimit>\\r\\n        <LabGatewayCount>100</LabGatewayCount>\\r\\n    </Data>\\r\\n    <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n    <Success>true</Success>\\r\\n</GetUserLicenseResponse>","errorExample":""}]',
            'title' => '查询合约信息及合约执行情况',
            'summary' => '查询当前用户账号在物联网络管理平台的合约信息及合约执行情况。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListActivatedFeatures' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Environment',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前的调用环境，默认为空，表示公共实例，如果是物联网平台实例化环境，请传入“IotInstance”',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'IotInstance',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
                            ],
                            'Data' => [
                                'type' => 'array',
                                'items' => [
                                    'description' => '当前用户账号在物联网络管理平台所能使用的功能的列表。'."\n"
                                        ."\n"
                                        .'    GATEWAY_TUPLE：网关密钥管理功能'."\n"
                                        ."\n"
                                        .'    NODE_TUPLE：节点密钥管理功能'."\n"
                                        ."\n"
                                        .'    NODE：节点管理功能'."\n"
                                        ."\n"
                                        .'    GATEWAY：网关管理功能'."\n"
                                        ."\n"
                                        .'    LOCAL_JOIN_PERMISSION：本地凭证管理功能'."\n"
                                        ."\n"
                                        .'    ROAMING_JOIN_PERMISSION：漫游凭证管理功能'."\n"
                                        ."\n"
                                        .'    JOIN_PERMISSION_AUTHORIZATION：凭证权限授受能力'."\n"
                                        ."\n"
                                        .'    LAB_NODE：实验室节点功能'."\n"
                                        ."\n"
                                        .'    LAB_GATEWAY：实验室网关功能'."\n"
                                        ."\n"
                                        .'    NOTIFICATION：通知功能'."\n"
                                        ."\n"
                                        .'    UNICAST：单播指令下行功能'."\n"
                                        ."\n"
                                        .'    MULTICAST：组播指令下行功能'."\n"
                                        ."\n"
                                        .'    RELAY：中继管理功能'."\n"
                                        ."\n"
                                        .'    D2D：点对点通信能力'."\n",
                                    'type' => 'string',
                                    'example' => 'GATEWAY_TUPLE',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Data\\": [\\n    \\"GATEWAY_TUPLE\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>GATEWAY</Data>\\n<Data>JOIN_PERMISSION_AUTHORIZATION</Data>\\n<Data>LOCAL_JOIN_PERMISSION</Data>\\n<Data>ROAMING_JOIN_PERMISSION</Data>\\n<Data>LAB_NODE</Data>\\n<Data>LAB_GATEWAY</Data>\\n<Data>GATEWAY_TUPLE</Data>\\n<Data>NODE_TUPLE</Data>\\n<Data>NOTIFICATION</Data>\\n<Data>KPM_PRODUCT_LINE</Data>\\n<Data>NODE</Data>\\n<Data>UNICAST</Data>\\n<Data>MULTICAST</Data>","errorExample":""}]',
            'title' => '列举物联网络管理平台所能使用的功能',
            'summary' => '列举当前用户账号在物联网络管理平台所能使用的功能。',
            'requestParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListActiveGateways' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '活跃网关列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ChargeStatus' => [
                                            'description' => '网关欠费状态。'."\n"
                                                ."\n"
                                                .'- NORMAL：网关未欠费，正常工作'."\n"
                                                .'- ARREARAGE：网关欠费状态',
                                            'type' => 'string',
                                            'example' => 'NORMAL',
                                        ],
                                        'District' => [
                                            'description' => '网关所在城区。',
                                            'type' => 'string',
                                            'example' => '城区名',
                                        ],
                                        'FreqBandPlanGroupId' => [
                                            'description' => '频段ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123',
                                        ],
                                        'GisCoordinateSystem' => [
                                            'description' => '网关经纬度所采用的坐标系。',
                                            'type' => 'string',
                                            'example' => 'GCJ-02',
                                        ],
                                        'City' => [
                                            'description' => '网关所在城市。',
                                            'type' => 'string',
                                            'example' => '城市名',
                                        ],
                                        'OnlineState' => [
                                            'description' => '在线状态。',
                                            'type' => 'string',
                                            'example' => 'ONLINE',
                                        ],
                                        'CommunicationMode' => [
                                            'description' => '通信模式。',
                                            'type' => 'string',
                                            'example' => 'HALF_DUPLEX',
                                        ],
                                        'Description' => [
                                            'description' => '网关描述。',
                                            'type' => 'string',
                                            'example' => '网关描述',
                                        ],
                                        'Address' => [
                                            'description' => '网关详细地址。',
                                            'type' => 'string',
                                            'example' => '详细地址',
                                        ],
                                        'Longitude' => [
                                            'description' => '经度。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '123.45678',
                                        ],
                                        'Latitude' => [
                                            'description' => '纬度。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '23.45678',
                                        ],
                                        'GwEui' => [
                                            'description' => '网关的GwEUI。',
                                            'type' => 'string',
                                            'example' => '0000000000123456',
                                        ],
                                        'Name' => [
                                            'description' => '网关名称。',
                                            'type' => 'string',
                                            'example' => 'vmeixme',
                                        ],
                                        'AddressCode' => [
                                            'description' => '网关地址码。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": [\\n    {\\n      \\"ChargeStatus\\": \\"NORMAL\\",\\n      \\"District\\": \\"城区名\\",\\n      \\"FreqBandPlanGroupId\\": 123,\\n      \\"GisCoordinateSystem\\": \\"GCJ-02\\",\\n      \\"City\\": \\"城市名\\",\\n      \\"OnlineState\\": \\"ONLINE\\",\\n      \\"CommunicationMode\\": \\"HALF_DUPLEX\\",\\n      \\"Description\\": \\"网关描述\\",\\n      \\"Address\\": \\"详细地址\\",\\n      \\"Longitude\\": 123.45678,\\n      \\"Latitude\\": 23.45678,\\n      \\"GwEui\\": \\"0000000000123456\\",\\n      \\"Name\\": \\"vmeixme\\",\\n      \\"AddressCode\\": 123\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListActiveGatewaysResponse>\\r\\n      <Data>\\r\\n            <Gateway>\\r\\n                  <City>某某市</City>\\r\\n                  <Name>网关名称</Name>\\r\\n                  <District>某某区</District>\\r\\n                  <OnlineState>ONLINE</OnlineState>\\r\\n                  <Longitude>123.45678</Longitude>\\r\\n                  <Latitude>23.45678</Latitude>\\r\\n                  <Address>详细地址</Address>\\r\\n                  <GwEui>0000000000123456</GwEui>\\r\\n                  <CommunicateMode>HALF_DUPLEX</CommunicateMode>\\r\\n                  <FreqBandPlanGroupId>123</FreqBandPlanGroupId>\\r\\n                  <AddressCode>123</AddressCode>\\r\\n                  <GisCoordinateSystem>GCJ-02</GisCoordinateSystem>\\r\\n                  <Description>网关描述</Description>\\r\\n            </Gateway>\\r\\n            <Gateway>\\r\\n                  <City>某某市</City>\\r\\n                  <Name>网关名称</Name>\\r\\n                  <District>某某区</District>\\r\\n                  <OnlineState>ONLINE</OnlineState>\\r\\n                  <Longitude>123.45678</Longitude>\\r\\n                  <Latitude>23.45678</Latitude>\\r\\n                  <Address>详细地址</Address>\\r\\n                  <GwEui>0000000001123456</GwEui>\\r\\n                  <CommunicateMode>HALF_DUPLEX</CommunicateMode>\\r\\n                  <FreqBandPlanGroupId>123</FreqBandPlanGroupId>\\r\\n                  <AddressCode>123</AddressCode>\\r\\n                  <GisCoordinateSystem>GCJ-02</GisCoordinateSystem>\\r\\n                  <Description>网关描述</Description>\\r\\n            </Gateway>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListActiveGatewaysResponse>","errorExample":""}]',
            'title' => '查询今日活跃网关',
            'summary' => '调用ListActiveGateways查询今日活跃网关。',
            'description' => '****',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListFreqBandPlanGroups' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '频段列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EndFrequency' => [
                                            'description' => '结束频点，单位为MHz。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '510',
                                        ],
                                        'GroupId' => [
                                            'description' => '频段ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '101',
                                        ],
                                        'FrequencyType' => [
                                            'description' => '频段类型。取值范围：'."\n"
                                                ."\n"
                                                .'- **SAME_FREQUENCY**：同频'."\n"
                                                .'- **DIFF_FREQUENCY**：异频',
                                            'type' => 'string',
                                            'example' => 'SAME_FREQUENCY',
                                        ],
                                        'FrequencyRegionId' => [
                                            'description' => 'Region标识。',
                                            'type' => 'string',
                                            'example' => 'CN',
                                        ],
                                        'BeginFrequency' => [
                                            'description' => '起始频点，单位为MHz。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '470',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": [\\n    {\\n      \\"EndFrequency\\": 510,\\n      \\"GroupId\\": 101,\\n      \\"FrequencyType\\": \\"SAME_FREQUENCY\\",\\n      \\"FrequencyRegionId\\": \\"CN\\",\\n      \\"BeginFrequency\\": 470\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListFreqBandPlanGroupsResponse>\\r\\n      <Data>\\r\\n            <FreqBandPlanGroup>\\r\\n                  <BeginFrequency>470</BeginFrequency>\\r\\n                  <EndFrequency>510</EndFrequency>\\r\\n                  <FrequencyRegionId>CN</FrequencyRegionId>\\r\\n                  <GroupId>101</GroupId>\\r\\n                  <FrequencyType>SAME_FREQUENCY</FrequencyType>\\r\\n            </FreqBandPlanGroup>\\r\\n            <FreqBandPlanGroup>\\r\\n                  <BeginFrequency>470</BeginFrequency>\\r\\n                  <EndFrequency>510</EndFrequency>\\r\\n                  <FrequencyRegionId>CN</FrequencyRegionId>\\r\\n                  <GroupId>102</GroupId>\\r\\n                  <FrequencyType>DIFF_FREQUENCY</FrequencyType>\\r\\n            </FreqBandPlanGroup>\\r\\n            <FreqBandPlanGroup>\\r\\n                  <BeginFrequency>923</BeginFrequency>\\r\\n                  <EndFrequency>925</EndFrequency>\\r\\n                  <FrequencyRegionId>CN</FrequencyRegionId>\\r\\n                  <GroupId>201</GroupId>\\r\\n                  <FrequencyType>SAME_FREQUENCY</FrequencyType>\\r\\n            </FreqBandPlanGroup>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListFreqBandPlanGroupsResponse>","errorExample":""}]',
            'title' => '获取频段列表',
            'summary' => '调用ListFreqBandPlanGroups获取频段列表。',
        ],
        'ListGatewayOnlineRecords' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'GwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关的GwEUI。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0000000000000000',
                    ],
                ],
                [
                    'name' => 'OffSet',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的起始位置，从0开始的偏移值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的记录数量上限，大于等于1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段，可选值为：**STATE_CHANGED_MILLIS**，表示按照状态改变时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'STATE_CHANGED_MILLIS',
                        'enum' => [
                            'STATE_CHANGED_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '记录总条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '25',
                                    ],
                                    'List' => [
                                        'description' => '记录列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'StateChangedMillis' => [
                                                    'description' => '切换到此状态的时间点，以毫秒为单位的UNIX时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514737000000',
                                                ],
                                                'OnlineState' => [
                                                    'description' => '在线状态，可取值：**ONLINE**：在线，**OFFLINE**：离线。',
                                                    'type' => 'string',
                                                    'example' => 'ONLINE',
                                                ],
                                                'GwEui' => [
                                                    'description' => '网关的GwEUI。',
                                                    'type' => 'string',
                                                    'example' => '000000000000',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 25,\\n    \\"List\\": [\\n      {\\n        \\"StateChangedMillis\\": 1514737000000,\\n        \\"OnlineState\\": \\"ONLINE\\",\\n        \\"GwEui\\": \\"000000000000\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListGatewayOnlineRecordsResponse>\\r\\n      <Data>\\r\\n            <TotalCount>25</TotalCount>\\r\\n            <List>\\r\\n                  <GatewayOnlineRecord>\\r\\n                        <StateChangedMillis>1514737000000</StateChangedMillis>\\r\\n                        <OnlineState>ONLINE</OnlineState>\\r\\n                  </GatewayOnlineRecord>\\r\\n                  <GatewayOnlineRecord>\\r\\n                        <StateChangedMillis>1514737000000</StateChangedMillis>\\r\\n                        <OnlineState>ONLINE</OnlineState>\\r\\n                  </GatewayOnlineRecord>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListGatewayOnlineRecordsResponse>","errorExample":""}]',
            'title' => '查询网关在线离线记录',
            'summary' => '调用ListGatewayOnlineRecords查询网关在线离线记录。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListGatewayTransferFlowStats' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关的GwEUI。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0000000000000000',
                    ],
                ],
                [
                    'name' => 'BeginMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，以毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'EndMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，以毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1514737000000',
                    ],
                ],
                [
                    'name' => 'TimeIntervalUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时间间隔的单位，可取值为：'."\n"
                            ."\n"
                            .'- **INTERVAL_IN_HOURS**：按照小时统计'."\n"
                            .'- **INTERVAL_IN_DAYS**：按照天统计',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'INTERVAL_IN_HOURS',
                        'enum' => [
                            'INTERVAL_IN_HOURS',
                            'INTERVAL_IN_DAYS',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '流量统计列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DownlinkCount' => [
                                            'description' => '该时间段的下行数据包数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'StatMillis' => [
                                            'description' => '统计时间，使用UNIX时间戳, 以毫秒为单位。',
                                            'type' => 'string',
                                            'example' => '1514736000000',
                                        ],
                                        'UplinkCount' => [
                                            'description' => '该时间段的上行数据包数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": [\\n    {\\n      \\"DownlinkCount\\": 10,\\n      \\"StatMillis\\": \\"1514736000000\\",\\n      \\"UplinkCount\\": 10\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListGatewayTransferFlowStatsResponse>\\r\\n      <Data>\\r\\n            <TransferFlowStat>\\r\\n                  <UplinkCount>10</UplinkCount>\\r\\n                  <DownlinkCount>10</DownlinkCount>\\r\\n                  <StatMillis>1514736000000</StatMillis>\\r\\n            </TransferFlowStat>\\r\\n            <TransferFlowStat>\\r\\n                  <UplinkCount>10</UplinkCount>\\r\\n                  <DownlinkCount>10</DownlinkCount>\\r\\n                  <StatMillis>1514736000000</StatMillis>\\r\\n            </TransferFlowStat>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListGatewayTransferFlowStatsResponse>","errorExample":""}]',
            'title' => '查询网关流量统计列表',
            'summary' => '调用ListGatewayTransferFlowStats查询网关流量统计列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListGatewayTransferPackets' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网平台的实例id，为空表示公共实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iotx-oxssh****',
                    ],
                ],
                [
                    'name' => 'GwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的网关的GwEUI。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0000000000000000',
                    ],
                ],
                [
                    'name' => 'DevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据DevEUI过滤数据包。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0000000000000001',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据包分类。'."\n"
                            ."\n"
                            .'- DOWNLINK_PACKET：下行包。'."\n"
                            ."\n"
                            .'- UPLINK_PACKET：上行包。'."\n"
                            ."\n"
                            .'- INVALID_PACKET：无效包。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DOWNLINK_PACKET',
                        'enum' => [
                            'DOWNLINK_PACKET',
                            'UPLINK_PACKET',
                            'INVALID_PACKET',
                        ],
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，从1开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，大于等于1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '1',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'BeginMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'EndMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段，取值：**LOG_MILLIS**，表示按照时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LOG_MILLIS',
                        'enum' => [
                            'LOG_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '满足过滤条件的数据包总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'List' => [
                                        'description' => '满足过滤条件的数据包信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'LogMillis' => [
                                                    'description' => '数据包传输的UNIX时间戳，以毫秒为单位。',
                                                    'type' => 'string',
                                                    'example' => '1514736000000',
                                                ],
                                                'ProcessEvent' => [
                                                    'description' => '该报文的处理结果。',
                                                    'type' => 'string',
                                                    'example' => 'SUCCESS',
                                                ],
                                                'Base64EncodedMacPayload' => [
                                                    'description' => 'Base64编码后的MACPayload报文。',
                                                    'type' => 'string',
                                                    'example' => 'xxx',
                                                ],
                                                'FPort' => [
                                                    'description' => '收发此数据包时所使用的FPort。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '99',
                                                ],
                                                'Lsnr' => [
                                                    'description' => '收发此数据包的信噪比。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '-10.5',
                                                ],
                                                'HasData' => [
                                                    'description' => '此数据包中是否包含业务数据。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'ClassMode' => [
                                                    'description' => '收发此数据包时的通信模式。',
                                                    'type' => 'string',
                                                    'example' => 'C',
                                                ],
                                                'MacPayloadSize' => [
                                                    'description' => '此数据包的MACPayload报文长度。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '15',
                                                ],
                                                'MessageType' => [
                                                    'description' => '消息类型。',
                                                    'type' => 'string',
                                                    'example' => 'JOIN_REQUEST',
                                                ],
                                                'Datr' => [
                                                    'description' => '收发此数据包的数据速率。',
                                                    'type' => 'string',
                                                    'example' => 'SF12BW125',
                                                ],
                                                'DevAddr' => [
                                                    'description' => '收发此数据包的节点的网络地址。',
                                                    'type' => 'string',
                                                    'example' => '00000000',
                                                ],
                                                'DevEui' => [
                                                    'description' => '收发此数据包的节点的DevEUI。',
                                                    'type' => 'string',
                                                    'example' => '0000000000000001',
                                                ],
                                                'NodeOwnerAliyunId' => [
                                                    'description' => '节点拥有者的阿里云账号ID。',
                                                    'type' => 'string',
                                                    'example' => '23546',
                                                ],
                                                'GwEui' => [
                                                    'description' => '收发此数据包所经过的网关的GwEUI。',
                                                    'type' => 'string',
                                                    'example' => '0000000000000000',
                                                ],
                                                'Rssi' => [
                                                    'description' => '收发此数据包的RSSI。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '-110',
                                                ],
                                                'HasMacCommand' => [
                                                    'description' => '此数据包中是否包含MAC指令。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'Freq' => [
                                                    'description' => '收发此数据包的频点。',
                                                    'type' => 'string',
                                                    'example' => '470.3',
                                                ],
                                                'MacCommandCIDs' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '这个数据包所携带的MAC指令列表。',
                                                        'type' => 'object',
                                                        'example' => '["0x01","0x02"]',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"LogMillis\\": \\"1514736000000\\",\\n        \\"ProcessEvent\\": \\"SUCCESS\\",\\n        \\"Base64EncodedMacPayload\\": \\"xxx\\",\\n        \\"FPort\\": 99,\\n        \\"Lsnr\\": -10.5,\\n        \\"HasData\\": true,\\n        \\"ClassMode\\": \\"C\\",\\n        \\"MacPayloadSize\\": 15,\\n        \\"MessageType\\": \\"JOIN_REQUEST\\",\\n        \\"Datr\\": \\"SF12BW125\\",\\n        \\"DevAddr\\": \\"00000000\\",\\n        \\"DevEui\\": \\"0000000000000001\\",\\n        \\"NodeOwnerAliyunId\\": \\"23546\\",\\n        \\"GwEui\\": \\"0000000000000000\\",\\n        \\"Rssi\\": -110,\\n        \\"HasMacCommand\\": true,\\n        \\"Freq\\": \\"470.3\\",\\n        \\"MacCommandCIDs\\": [\\n          [\\n            \\"0x01\\",\\n            \\"0x02\\"\\n          ]\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListGatewayTransferPacketsResponse>\\r\\n      <Data>\\r\\n            <TotalCount>10</TotalCount>\\r\\n            <List>\\r\\n                  <GatewayTransferPacket>\\r\\n                        <ClassMode>C</ClassMode>\\r\\n                        <HasMacCommand>false</HasMacCommand>\\r\\n                        <DevAddr>00000000</DevAddr>\\r\\n                        <MacPayloadSize>12</MacPayloadSize>\\r\\n                        <FPort>99</FPort>\\r\\n                        <HasData>true</HasData>\\r\\n                        <LogMillis>1514736000000</LogMillis>\\r\\n                        <Datr>SF12BW125</Datr>\\r\\n                        <NodeOwnerAliyunId>xxx</NodeOwnerAliyunId>\\r\\n                        <ProcessEvent>DEVADDR_ILLEGAL</ProcessEvent>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <Lsnr>-10.5</Lsnr>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <Rssi>-110</Rssi>\\r\\n                        <Freq>470.3</Freq>\\r\\n                        <Base64EncodedMacPayload>xxxx</Base64EncodedMacPayload>\\r\\n                  </GatewayTransferPacket>\\r\\n                  <GatewayTransferPacket>\\r\\n                        <ClassMode>C</ClassMode>\\r\\n                        <HasMacCommand>false</HasMacCommand>\\r\\n                        <DevAddr>00000000</DevAddr>\\r\\n                        <MacPayloadSize>12</MacPayloadSize>\\r\\n                        <FPort>99</FPort>\\r\\n                        <HasData>true</HasData>\\r\\n                        <LogMillis>1514736000000</LogMillis>\\r\\n                        <Datr>SF12BW125</Datr>\\r\\n                        <NodeOwnerAliyunId>xxx</NodeOwnerAliyunId>\\r\\n                        <ProcessEvent>DEVADDR_ILLEGAL</ProcessEvent>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <Lsnr>-10.5</Lsnr>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <Rssi>-110</Rssi>\\r\\n                        <Freq>470.3</Freq>\\r\\n                        <Base64EncodedMacPayload>xxxx</Base64EncodedMacPayload>\\r\\n                  </GatewayTransferPacket>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListGatewayTransferPacketsResponse>","errorExample":""}]',
            'title' => '获取网关上下行数据包的统计信息',
            'summary' => '调用ListGatewayTransferPackets获取网关上下行数据包的统计信息。',
            'description' => '****',
        ],
        'ListGatewayTupleOrders' => [
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
                    'name' => 'State',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '工单状态过滤列表，若不使用此参数，则表示查询所有状态的工单。可取值为：'."\n"
                            ."\n"
                            .'- APPLYING：申请中。'."\n"
                            ."\n"
                            .'- REJECTED：已拒绝。'."\n"
                            ."\n"
                            .'- ACCEPTING：分发中。'."\n"
                            ."\n"
                            .'- ACCEPTED：分发成功。'."\n"
                            ."\n"
                            .'- ACCEPTING_FAILED：分发失败。'."\n"
                            ."\n"
                            .'- REVOKING：撤回中。'."\n"
                            ."\n"
                            .'- REVOKED：撤回成功。'."\n"
                            ."\n"
                            .'- REVOKING_FAILED：撤回失败。'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '工单状态过滤列表，若不使用此参数，则表示查询所有状态的工单。可取值为：'."\n"
                                ."\n"
                                .'- APPLYING：申请中。'."\n"
                                ."\n"
                                .'- REJECTED：已拒绝。'."\n"
                                ."\n"
                                .'- ACCEPTING：分发中。'."\n"
                                ."\n"
                                .'- ACCEPTED：分发成功。'."\n"
                                ."\n"
                                .'- ACCEPTING_FAILED：分发失败。'."\n"
                                ."\n"
                                .'- REVOKING：撤回中。'."\n"
                                ."\n"
                                .'- REVOKED：撤回成功。'."\n"
                                ."\n"
                                .'- REVOKING_FAILED：撤回失败。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'APPLYING',
                        ],
                        'required' => false,
                        'example' => 'APPLYING',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的起始位置，从0开始。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的工单数量上限，需大于等于1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结果排序字段。可取值为：'."\n"
                            ."\n"
                            .'- **CREATED_MILLIS**：根据工单发起时间排序。'."\n"
                            ."\n"
                            .'- **ACCEPTED_MILLIS**：根据工单审批通过时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CREATED_MILLIS',
                        'enum' => [
                            'CREATED_MILLIS',
                            'ACCEPTED_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需配合**SortingField**参数一起使用。'."\n"
                            ."\n"
                            .'- **true**：表示升序。'."\n"
                            ."\n"
                            .'- **false**：表示降序。',
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
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '满足过滤条件的工单总数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '42',
                                    ],
                                    'List' => [
                                        'description' => '查询到的网关密钥工单信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'RequiredCount' => [
                                                    'description' => '网关密钥颁发数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2',
                                                ],
                                                'CreatedMillis' => [
                                                    'description' => '提交此工单的UNIX时间戳，单位为毫秒。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514736000000',
                                                ],
                                                'TupleType' => [
                                                    'description' => '网关密钥类型。'."\n"
                                                        ."\n"
                                                        .'- **singlechannel**：低速版（单通道型）。'."\n"
                                                        ."\n"
                                                        .'- **standard**：标准版。'."\n"
                                                        ."\n"
                                                        .'- **hybrid**：高速版（Hybrid型）。'."\n"
                                                        ."\n"
                                                        .'- **noncontractual**：高速版。'."\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => 'standard',
                                                ],
                                                'AcceptedMillis' => [
                                                    'description' => '工单审批通过的UNIX时间戳，单位为毫秒。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514822400000',
                                                ],
                                                'OrderId' => [
                                                    'description' => '网关密钥订单编号。',
                                                    'type' => 'string',
                                                    'example' => '1234',
                                                ],
                                                'OrderState' => [
                                                    'description' => '网关密钥申请状态。',
                                                    'type' => 'string',
                                                    'example' => 'ACCEPTED',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 42,\\n    \\"List\\": [\\n      {\\n        \\"RequiredCount\\": 2,\\n        \\"CreatedMillis\\": 1514736000000,\\n        \\"TupleType\\": \\"standard\\",\\n        \\"AcceptedMillis\\": 1514822400000,\\n        \\"OrderId\\": \\"1234\\",\\n        \\"OrderState\\": \\"ACCEPTED\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListGatewayTupleOrdersResponse>\\n    <Success>true</Success>\\n    <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n    <Data>\\n        <TotalCount>42</TotalCount>\\n        <List>\\n            <RequiredCount>2</RequiredCount>\\n            <CreatedMillis>1514736000000</CreatedMillis>\\n            <TupleType>standard</TupleType>\\n            <AcceptedMillis>1514822400000</AcceptedMillis>\\n            <OrderId>1234</OrderId>\\n            <OrderState>ACCEPTED</OrderState>\\n        </List>\\n    </Data>\\n</ListGatewayTupleOrdersResponse>","errorExample":""}]',
            'title' => '获取用户已提交的网关元组工单列表',
            'summary' => '获取用户已提交的网关元组工单列表。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListGatewaysGisInfo' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。您可在物联网平台控制台的**实例概览**页面，查看当前实例的**ID**。'."\n"
                            ."\n"
                            .'><notice>'."\n"
                            .'- 若有ID值，必须传入该ID值，否则调用会失败。'."\n"
                            .'- 若无<props="intl"><ph>**实例概览**页面或</ph></props>ID值，则无需传入。'."\n"
                            ."\n"
                            .'></notice>'."\n"
                            ."\n"
                            .'实例的更多信息，请参见[实例概述](~~356505~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iot-***-v6***',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '网关位置信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ChargeStatus' => [
                                            'description' => '网关欠费状态。'."\n"
                                                ."\n"
                                                .'- **NORMAL**：网关未欠费，正常工作。'."\n"
                                                .'- **ARREARAGE**：网关欠费。',
                                            'type' => 'string',
                                            'example' => 'NORMAL',
                                        ],
                                        'GisSourceType' => [
                                            'description' => '网关GIS来源，可取值：'."\n"
                                                ."\n"
                                                .'- **USER_INPUT**：用户输入。'."\n"
                                                ."\n"
                                                .'- **HARDWARE**：网关上报。',
                                            'type' => 'string',
                                            'example' => 'HARDWARE',
                                        ],
                                        'FreqBandPlanGroupId' => [
                                            'description' => '网关采用的频段ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '102',
                                        ],
                                        'Enabled' => [
                                            'description' => '网关是否可用。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'GisCoordinateSystem' => [
                                            'description' => '网关经纬度所采用的坐标系统，可取值为：**WGS_84**，**GCJ_02**。',
                                            'type' => 'string',
                                            'example' => 'GCJ_02',
                                        ],
                                        'Longitude' => [
                                            'description' => '网关经度。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '123.45678',
                                        ],
                                        'Latitude' => [
                                            'description' => '网关纬度。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '23.45678',
                                        ],
                                        'OnlineState' => [
                                            'description' => '网关的在线、离线状态。可取值：'."\n"
                                                ."\n"
                                                .'- **ONLINE**：在线。'."\n"
                                                ."\n"
                                                .'- **OFFLINE**：离线。',
                                            'type' => 'string',
                                            'example' => 'OFFLINE',
                                        ],
                                        'Name' => [
                                            'description' => '自定义网关名称。',
                                            'type' => 'string',
                                            'example' => '网关名称',
                                        ],
                                        'GwEui' => [
                                            'description' => '网关唯一标识。',
                                            'type' => 'string',
                                            'example' => '0000000000000000',
                                        ],
                                        'AuthTypes' => [
                                            'description' => '网关合约类型。'."\n"
                                                ."\n"
                                                .'- **HYBRID**：Hybrid网关。'."\n"
                                                .'- **SINGLE_CHANNEL**：单通道网关。'."\n"
                                                .'- **STANDARD**：标准合约网关。',
                                            'type' => 'string',
                                            'example' => 'STANDARD',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": [\\n    {\\n      \\"ChargeStatus\\": \\"NORMAL\\",\\n      \\"GisSourceType\\": \\"HARDWARE\\",\\n      \\"FreqBandPlanGroupId\\": 102,\\n      \\"Enabled\\": true,\\n      \\"GisCoordinateSystem\\": \\"GCJ_02\\",\\n      \\"Longitude\\": 123.45678,\\n      \\"Latitude\\": 23.45678,\\n      \\"OnlineState\\": \\"OFFLINE\\",\\n      \\"Name\\": \\"网关名称\\",\\n      \\"GwEui\\": \\"0000000000000000\\",\\n      \\"AuthTypes\\": \\"STANDARD\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListGatewaysGisInfoResponse>\\n    <Success>true</Success>\\n    <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n    <Data>\\n        <ChargeStatus>NORMAL</ChargeStatus>\\n        <GisSourceType>HARDWARE</GisSourceType>\\n        <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\n        <Enabled>true</Enabled>\\n        <GisCoordinateSystem>GCJ_02</GisCoordinateSystem>\\n        <Longitude>123.45678</Longitude>\\n        <Latitude>23.45678</Latitude>\\n        <OnlineState>OFFLINE</OnlineState>\\n        <Name>网关名称</Name>\\n        <GwEui>0000000000000000</GwEui>\\n        <AuthTypes>STANDARD</AuthTypes>\\n    </Data>\\n</ListGatewaysGisInfoResponse>","errorExample":""}]',
            'title' => '查询所有网关地理位置信息',
            'summary' => '查询当前用户账号名下所有网关的地理位置信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListNodeGroupTransferFlowStats' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'BeginMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'EndMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1514737000000',
                    ],
                ],
                [
                    'name' => 'TimeIntervalUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时间间隔的单位。取值：'."\n"
                            ."\n"
                            .'- **INTERVAL_IN_HOURS**：按照小时统计'."\n"
                            .'- **INTERVAL_IN_DAYS**：按照天统计',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'INTERVAL_IN_HOURS',
                        'enum' => [
                            'INTERVAL_IN_HOURS',
                            'INTERVAL_IN_DAYS',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '流量统计列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DownlinkCount' => [
                                            'description' => '该时间段的下行数据包数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1010',
                                        ],
                                        'StatMillis' => [
                                            'description' => '统计UNIX时间戳, 以毫秒为单位。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1514736000000',
                                        ],
                                        'UplinkCount' => [
                                            'description' => '该时间段的上行数据包数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": [\\n    {\\n      \\"DownlinkCount\\": 1010,\\n      \\"StatMillis\\": 1514736000000,\\n      \\"UplinkCount\\": 10\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListNodeGroupTransferFlowStatsResponse>\\r\\n      <Data>\\r\\n            <FlowStat>\\r\\n                  <UplinkCount>10</UplinkCount>\\r\\n                  <DownlinkCount>10</DownlinkCount>\\r\\n                  <StatMillis>1514736000000</StatMillis>\\r\\n            </FlowStat>\\r\\n            <FlowStat>\\r\\n                  <UplinkCount>10</UplinkCount>\\r\\n                  <DownlinkCount>10</DownlinkCount>\\r\\n                  <StatMillis>1514736000000</StatMillis>\\r\\n            </FlowStat>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListNodeGroupTransferFlowStatsResponse>","errorExample":""}]',
            'title' => '查询节点组流量统计列表',
            'summary' => '调用ListNodeGroupTransferFlowStats查询节点组流量统计列表。',
        ],
        'ListNodeGroupTransferPackets' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'DevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据DevEUI过滤数据包。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0000000000000001',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据包分类。取值：'."\n"
                            ."\n"
                            .'- **DOWNLINK_PACKET**：下行包'."\n"
                            .'- **UPLINK_PACKET**：上行包',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'UPLINK_PACKET',
                        'enum' => [
                            'DOWNLINK_PACKET',
                            'UPLINK_PACKET',
                            'INVALID_PACKET',
                        ],
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，从1开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，大于等于1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '300',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'BeginMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'EndMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段，取值：**LOG_MILLIS**，表示按照时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'LOG_MILLIS',
                        'enum' => [
                            'LOG_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '满足过滤条件的数据包总数。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'List' => [
                                        'description' => '列表信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'LogMillis' => [
                                                    'description' => '数据包传输的 UNIX 时间戳，以毫秒为单位。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514736000000',
                                                ],
                                                'GwOwnerAliyunId' => [
                                                    'description' => '数据包所经过网关所属用户的阿里云账号 Id。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'XXX',
                                                ],
                                                'ProcessEvent' => [
                                                    'description' => '该报文的处理结果，取值内容参考 ProcessEvent 取值。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'DEVADDR_ILLEGAL',
                                                ],
                                                'Base64EncodedMacPayload' => [
                                                    'description' => 'Base64 编码后的 MACPayload 报文。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'XXX',
                                                ],
                                                'FPort' => [
                                                    'description' => '收发此数据包时所使用的 FPort。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '99',
                                                ],
                                                'Lsnr' => [
                                                    'description' => '收发此数据包的信噪比。'."\n",
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '-10.5',
                                                ],
                                                'FreqBandPlanGroupId' => [
                                                    'description' => '数据包所经过的网关所采用的频段的频段 Id。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '101',
                                                ],
                                                'HasData' => [
                                                    'description' => '此数据包中是否包含业务数据。'."\n",
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'FcntUp' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'ClassMode' => [
                                                    'description' => '收发此数据包时的 LoRaWAN Class 模式。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'C',
                                                ],
                                                'MacPayloadSize' => [
                                                    'description' => '此数据包的 MACPayload 报文长度。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '15',
                                                ],
                                                'MessageType' => [
                                                    'description' => '消息类型，取值如下表。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'CONFIRMED_DATA_UP',
                                                ],
                                                'Datr' => [
                                                    'description' => '收发此数据包的数据速率。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'SF12BW125',
                                                ],
                                                'DevAddr' => [
                                                    'description' => '收发此数据包的节点的网络地址。'."\n",
                                                    'type' => 'string',
                                                    'example' => '00000000',
                                                ],
                                                'DevEui' => [
                                                    'description' => '收发此数据包的节点的 DevEUI。',
                                                    'type' => 'string',
                                                    'example' => '0000000000000001',
                                                ],
                                                'FcntDown' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'MacCommandCIDs' => [
                                                    'type' => 'string',
                                                    'items' => [
                                                        'description' => '这个数据包所携带的 MAC 指令列表。'."\n",
                                                        'type' => 'string',
                                                        'example' => '"0x01"，"0x02"',
                                                        'index' => 200,
                                                    ],
                                                ],
                                                'GwEui' => [
                                                    'description' => '收发此数据包所经过的网关的 GwEUI。'."\n",
                                                    'type' => 'string',
                                                    'example' => '0000000000000000',
                                                ],
                                                'Rssi' => [
                                                    'description' => '收发此数据包的 RSSI。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '-110',
                                                ],
                                                'HasMacCommand' => [
                                                    'description' => '此数据包中是否包含 MAC 指令。'."\n",
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'Freq' => [
                                                    'description' => '收发此数据包的频点。'."\n",
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '470.3',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 20,\\n    \\"List\\": [\\n      {\\n        \\"LogMillis\\": 1514736000000,\\n        \\"GwOwnerAliyunId\\": \\"XXX\\",\\n        \\"ProcessEvent\\": \\"DEVADDR_ILLEGAL\\",\\n        \\"Base64EncodedMacPayload\\": \\"XXX\\",\\n        \\"FPort\\": 99,\\n        \\"Lsnr\\": -10.5,\\n        \\"FreqBandPlanGroupId\\": 101,\\n        \\"HasData\\": true,\\n        \\"ClassMode\\": \\"C\\",\\n        \\"MacPayloadSize\\": 15,\\n        \\"MessageType\\": \\"CONFIRMED_DATA_UP\\",\\n        \\"Datr\\": \\"SF12BW125\\",\\n        \\"DevAddr\\": \\"00000000\\",\\n        \\"DevEui\\": \\"0000000000000001\\",\\n        \\"GwEui\\": \\"0000000000000000\\",\\n        \\"Rssi\\": -110,\\n        \\"HasMacCommand\\": true,\\n        \\"Freq\\": 470.3,\\n        \\"MacCommandCIDs\\": [\\n          \\"\\\\\\"0x01\\\\\\"，\\\\\\"0x02\\\\\\"\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNodeGroupTransferPacketsResponse>\\r\\n      <Data>\\r\\n            <TotalCount>10</TotalCount>\\r\\n            <List>\\r\\n                  <Packet>\\r\\n                        <ClassMode>C</ClassMode>\\r\\n                        <GwOwnerAliyunId>xxx</GwOwnerAliyunId>\\r\\n                        <HasMacCommand>true</HasMacCommand>\\r\\n                        <DevAddr>00000000</DevAddr>\\r\\n                        <MacPayloadSize>15</MacPayloadSize>\\r\\n                        <FPort>99</FPort>\\r\\n                        <HasData>true</HasData>\\r\\n                        <LogMillis>1514736000000</LogMillis>\\r\\n                        <MessageType>CONFIRMED_DATA_UP</MessageType>\\r\\n                        <Datr>SF12BW125</Datr>\\r\\n                        <ProcessEvent>DEVADDR_ILLEGAL</ProcessEvent>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <Lsnr>-10.5</Lsnr>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <Rssi>-110</Rssi>\\r\\n                        <Freq>470.3</Freq>\\r\\n                        <Base64EncodedMacPayload>xxx</Base64EncodedMacPayload>\\r\\n                        <MacCommandCIDs>\\r\\n                              <CID>0x01</CID>\\r\\n                              <CID>0x02</CID>\\r\\n                        </MacCommandCIDs>\\r\\n                        <FreqBandPlanGroupId>101</FreqBandPlanGroupId>\\r\\n                  </Packet>\\r\\n                  <Packet>\\r\\n                        <ClassMode>C</ClassMode>\\r\\n                        <GwOwnerAliyunId>xxx</GwOwnerAliyunId>\\r\\n                        <HasMacCommand>true</HasMacCommand>\\r\\n                        <DevAddr>00000000</DevAddr>\\r\\n                        <MacPayloadSize>15</MacPayloadSize>\\r\\n                        <FPort>99</FPort>\\r\\n                        <HasData>true</HasData>\\r\\n                        <LogMillis>1514736000000</LogMillis>\\r\\n                        <MessageType>CONFIRMED_DATA_UP</MessageType>\\r\\n                        <Datr>SF12BW125</Datr>\\r\\n                        <ProcessEvent>DEVADDR_ILLEGAL</ProcessEvent>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <Lsnr>-10.5</Lsnr>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <Rssi>-110</Rssi>\\r\\n                        <Freq>470.3</Freq>\\r\\n                        <Base64EncodedMacPayload>xxx</Base64EncodedMacPayload>\\r\\n                        <MacCommandCIDs>\\r\\n                              <CID>0x01</CID>\\r\\n                              <CID>0x02</CID>\\r\\n                        </MacCommandCIDs>\\r\\n                        <FreqBandPlanGroupId>101</FreqBandPlanGroupId>\\r\\n                  </Packet>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListNodeGroupTransferPacketsResponse>","errorExample":""}]',
            'title' => '获取节点分组上下行数据包的统计信息',
            'summary' => '调用ListNodeGroupTransferPackets获取节点分组上下行数据包的统计信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListNodeTransferPacketPaths' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据DevEUI过滤数据包。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0000000000000001',
                    ],
                ],
                [
                    'name' => 'Base64EncodedMacPayload',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据包的MacPayload，由**ListNodeGroupTransferPackets**接口的返回值获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'xxx',
                    ],
                ],
                [
                    'name' => 'LogMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '收到此数据包的时间，由ListNodeGroupTransferPackets的返回值获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '14643600000',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，从1开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，大于等于1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '300',
                        'minimum' => '1',
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '满足过滤条件的数据包总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'List' => [
                                        'description' => '满足过滤条件的平行路径列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'BestPath' => [
                                                    'description' => '是否是最优路径。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'DevEui' => [
                                                    'description' => '收发此数据包的节点的DevEUI。',
                                                    'type' => 'string',
                                                    'example' => '0000000000000001',
                                                ],
                                                'GwEui' => [
                                                    'description' => '收发数据包所经过的网关的GwEUI。',
                                                    'type' => 'string',
                                                    'example' => '0000000000000000',
                                                ],
                                                'Lsnr' => [
                                                    'description' => '收发此数据包的信噪比。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '-10.5',
                                                ],
                                                'Rssi' => [
                                                    'description' => '收发此数据包的RSSI。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '-110',
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
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"BestPath\\": false,\\n        \\"DevEui\\": \\"0000000000000001\\",\\n        \\"GwEui\\": \\"0000000000000000\\",\\n        \\"Lsnr\\": -10.5,\\n        \\"Rssi\\": -110\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNodeTransferPacketPathsResponse>\\r\\n      <Data>\\r\\n            <TotalCount>10</TotalCount>\\r\\n            <List>\\r\\n                  <TransferPacketPayloadPath>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <Rssi>-110</Rssi>\\r\\n                        <BestPath>false</BestPath>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <Lsnr>-10.5</Lsnr>\\r\\n                  </TransferPacketPayloadPath>\\r\\n                  <TransferPacketPayloadPath>\\r\\n                        <GwEui>0000000000000000</GwEui>\\r\\n                        <Rssi>-110</Rssi>\\r\\n                        <BestPath>false</BestPath>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <Lsnr>-10.5</Lsnr>\\r\\n                  </TransferPacketPayloadPath>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListNodeTransferPacketPathsResponse>","errorExample":""}]',
            'title' => '获取节点上行数据包的平行路径',
            'summary' => '调用ListNodeTransferPacketPaths获取节点上行数据包的平行路径。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListNodeTransferPackets' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据**DevEUI**参数过滤数据包。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '0000000000000001',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据包分类，可取值为：'."\n"
                            ."\n"
                            .'- **DOWNLINK_PACKET**：下行包。'."\n"
                            ."\n"
                            .'- **UPLINK_PACKET**：上行包。'."\n"
                            ."\n"
                            .'- **INVALID_PACKET**：无效包。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DOWNLINK_PACKET',
                        'enum' => [
                            'DOWNLINK_PACKET',
                            'UPLINK_PACKET',
                            'INVALID_PACKET',
                        ],
                    ],
                ],
                [
                    'name' => 'GwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据**GwEUI**参数过滤数据包。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '0000000000000001',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，从1开始。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，需大于等于1。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '300',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'BeginMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询开始时间，单位为毫秒的UNIX时间戳。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'EndMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结束时间，单位为毫秒的**UNIX**时间戳。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段，可设置为**LOG_MILLIS**（按照时间排序）。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LOG_MILLIS',
                        'enum' => [
                            'LOG_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需配合**SortingField**参数一起使用。'."\n"
                            ."\n"
                            .'- **true**：表示升序。'."\n"
                            ."\n"
                            .'- **false**：表示降序（默认值）。',
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
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。'."\n"
                                    ."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097	',
                            ],
                            'Data' => [
                                'description' => '返回的结果。'."\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n\n"
                                    ."\n",
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '满足过滤条件的数据包总数。'."\n",
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'List' => [
                                        'description' => '满足过滤条件的数据包列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'LogMillis' => [
                                                    'description' => '数据包传输的UNIX时间戳，单位为毫秒。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514736000000',
                                                ],
                                                'Datr' => [
                                                    'description' => '收发此数据包的数据速率。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'SF12BW125',
                                                ],
                                                'Snr' => [
                                                    'description' => '收发此数据包的信噪比。'."\n",
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '-10.5',
                                                ],
                                                'DevEui' => [
                                                    'description' => '收发此数据包的节点的DevEUI。'."\n",
                                                    'type' => 'string',
                                                    'example' => '0000000000000001',
                                                ],
                                                'GwEui' => [
                                                    'description' => '收发此数据包所经过的网关的GwEUI。'."\n",
                                                    'type' => 'string',
                                                    'example' => '0000000000000000',
                                                ],
                                                'ClassMode' => [
                                                    'description' => '收发此数据包时的LoRaWAN Class模式。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'C',
                                                ],
                                                'Rssi' => [
                                                    'description' => '收发此数据包的RSSI。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '-110',
                                                ],
                                                'Freq' => [
                                                    'description' => '收发此数据包的频点。'."\n",
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '470.3',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\\\t\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"LogMillis\\": 1514736000000,\\n        \\"Datr\\": \\"SF12BW125\\",\\n        \\"Snr\\": -10.5,\\n        \\"DevEui\\": \\"0000000000000001\\",\\n        \\"GwEui\\": \\"0000000000000000\\",\\n        \\"ClassMode\\": \\"C\\",\\n        \\"Rssi\\": -110,\\n        \\"Freq\\": 470.3\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNodeTransferPacketsResponse>\\n    <Success>true</Success>\\n    <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097\\t</RequestId>\\n    <Data>\\n        <TotalCount>10</TotalCount>\\n        <List>\\n            <LogMillis>1514736000000</LogMillis>\\n            <Datr>SF12BW125</Datr>\\n            <Snr>-10.5</Snr>\\n            <DevEui>0000000000000001</DevEui>\\n            <GwEui>0000000000000000</GwEui>\\n            <ClassMode>C</ClassMode>\\n            <Rssi>-110</Rssi>\\n            <Freq>470.3</Freq>\\n        </List>\\n    </Data>\\n</ListNodeTransferPacketsResponse>","errorExample":""}]',
            'title' => '获取节点分组上下行数据包的统计信息',
            'summary' => '获取节点分组上下行数据包的统计信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListNodeTupleOrders' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'State',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '工单状态过滤，如未传入此参数，则不限制工单状态。'."\n"
                            ."\n"
                            .'工单状态取值请参见下方类型说明。',
                        'type' => 'array',
                        'items' => [
                            'description' => '工单状态过滤，如未传入此参数，则不限制工单状态。可取值：'."\n"
                                ."\n"
                                .'- APPLYING：申请中。'."\n"
                                ."\n"
                                .'- REJECTED：已拒绝。'."\n"
                                ."\n"
                                .'- ACCEPTING：分发中。'."\n"
                                ."\n"
                                .'- ACCEPTED：分发成功。'."\n"
                                ."\n"
                                .'- ACCEPTING_FAILED：分发失败。'."\n"
                                ."\n"
                                .'- REVOKING：撤回中。'."\n"
                                ."\n"
                                .'- REVOKED：撤回成功。'."\n"
                                ."\n"
                                .'- REVOKING_FAILED：撤回失败。'."\n",
                            'type' => 'string',
                            'required' => false,
                            'example' => 'APPLYING',
                        ],
                        'required' => false,
                        'example' => 'APPLYING',
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'IsKpm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否是Kpm发起的工单。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的起始位置，从0开始。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'minimum' => '0',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的工单数量上限，须大于等于1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结果的排序字段，可取值为：'."\n"
                            ."\n"
                            .'- CREATED_MILLIS：根据工单发起时间排序。'."\n"
                            ."\n"
                            .'- ACCEPTED_MILLIS：根据工单审批通过时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CREATED_MILLIS',
                        'enum' => [
                            'CREATED_MILLIS',
                            'ACCEPTED_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需配合**SortingField**字段一起使用。'."\n"
                            ."\n"
                            .'- **true**：表示升序。'."\n"
                            ."\n"
                            .'- **false**：表示降序。',
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
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。'."\n"
                                    ."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '返回的结果。'."\n"
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
                                    ."\n",
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '满足过滤条件的工单数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '42',
                                    ],
                                    'List' => [
                                        'description' => '满足过滤条件的节点元组工单信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'FailedCount' => [
                                                    'description' => '节点颁发失败数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'RequiredCount' => [
                                                    'description' => '节点密钥申请数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'CreatedMillis' => [
                                                    'description' => '提交此工单的UNIX时间戳，单位为毫秒。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514736000000',
                                                ],
                                                'IsKpm' => [
                                                    'description' => '是否是Kpm发起的工单。'."\n"
                                                        ."\n"
                                                        .'- **true**：是。'."\n"
                                                        ."\n"
                                                        .'- **false**：否。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'TupleType' => [
                                                    'description' => '节点密钥类型。'."\n"
                                                        ."\n",
                                                    'type' => 'string',
                                                    'example' => 'noncontractual',
                                                ],
                                                'AcceptedMillis' => [
                                                    'description' => '工单审批通过的UNIX时间戳，单位为毫秒。'."\n",
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514822400000',
                                                ],
                                                'SuccessCount' => [
                                                    'description' => '节点密钥颁发数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'LoraVersion' => [
                                                    'description' => 'LoRaWAN协议版本。'."\n",
                                                    'type' => 'string',
                                                    'example' => '1.0.2',
                                                ],
                                                'OrderState' => [
                                                    'description' => '节点密钥申请状态。',
                                                    'type' => 'string',
                                                    'example' => 'ACCEPTED',
                                                ],
                                                'OrderId' => [
                                                    'description' => '工单编号。',
                                                    'type' => 'string',
                                                    'example' => '1234',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 42,\\n    \\"List\\": [\\n      {\\n        \\"FailedCount\\": 0,\\n        \\"RequiredCount\\": 1,\\n        \\"CreatedMillis\\": 1514736000000,\\n        \\"IsKpm\\": false,\\n        \\"TupleType\\": \\"noncontractual\\",\\n        \\"AcceptedMillis\\": 1514822400000,\\n        \\"SuccessCount\\": 1,\\n        \\"LoraVersion\\": \\"1.0.2\\",\\n        \\"OrderState\\": \\"ACCEPTED\\",\\n        \\"OrderId\\": \\"1234\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>\\n    <TotalCount>42</TotalCount>\\n    <List>\\n        <OrderId>1234</OrderId>\\n        <IsKpm>false</IsKpm>\\n        <OrderState>ACCEPTED</OrderState>\\n        <RequiredCount>1</RequiredCount>\\n        <SuccessCount>1</SuccessCount>\\n        <FailedCount>0</FailedCount>\\n        <LoraVersion>1.0.2</LoraVersion>\\n        <CREATEDMillis>1514736000000</CREATEDMillis>\\n        <AcceptedMillis>1514822400000</AcceptedMillis>\\n        <TupleType>noncontractual</TupleType>\\n    </List>\\n    <List>\\n        <OrderId>1235</OrderId>\\n        <IsKpm>false</IsKpm>\\n        <OrderState>REJECTED</OrderState>\\n        <RequiredCount>1</RequiredCount>\\n        <SuccessCount>1</SuccessCount>\\n        <FailedCount>0</FailedCount>\\n        <LoraVersion>1.0.2</LoraVersion>\\n        <CREATEDMillis>1514736000000</CREATEDMillis>\\n        <AcceptedMillis>1514822400000</AcceptedMillis>\\n        <TupleType>noncontractual</TupleType>\\n    </List>\\n</Data>","errorExample":""}]',
            'title' => '获取用户已提交的节点元组工单列表',
            'summary' => '获取用户已提交的节点元组工单列表。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListNodesByNodeGroupId' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'FuzzyDevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配节点的DevEUI。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd896e0',
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的起始位置，从0开始。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'minimum' => '0',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的节点数量上限，大于等于1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '200',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定排序字段，可取值为**CREATED_MILLIS**，表示根据创建时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CREATED_MILLIS',
                        'enum' => [
                            'CREATED_MILLIS',
                            'LAST_JOIN_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '满足过滤条件的节点总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'List' => [
                                        'description' => '满足过滤条件的节点列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'LastJoinMillis' => [
                                                    'description' => '最近一次入网的时间，UNIX时间戳，以毫秒为单位。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514736000000',
                                                ],
                                                'DevAddr' => [
                                                    'description' => '节点的网络地址。',
                                                    'type' => 'string',
                                                    'example' => '12345678',
                                                ],
                                                'MulticastGroupId' => [
                                                    'description' => '组播ID值。',
                                                    'type' => 'string',
                                                    'example' => 'xxxx',
                                                ],
                                                'DevEui' => [
                                                    'description' => '节点的DevEUI。',
                                                    'type' => 'string',
                                                    'example' => '0000000000000000',
                                                ],
                                                'NodeType' => [
                                                    'type' => 'string',
                                                ],
                                                'JoinEui' => [
                                                    'type' => 'string',
                                                ],
                                                'BoundMillis' => [
                                                    'description' => '节点加入当前节点分组的时间，UNIX时间戳，以毫秒为单位。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514736000000',
                                                ],
                                                'ClassMode' => [
                                                    'description' => '节点所采用的LoRaWAN Class模式，可取值：A、B、C。',
                                                    'type' => 'string',
                                                    'example' => 'A',
                                                ],
                                                'AuthTypes' => [
                                                    'type' => 'string',
                                                    'items' => [
                                                        'description' => '网关合约类型。'."\n"
                                                            ."\n"
                                                            .'- **HYBRID**：hybrid网关'."\n"
                                                            .'- **SINGLE_CHANNEL**：单通道网关'."\n"
                                                            .'- **STANDARD**：标准合约网关',
                                                        'type' => 'string',
                                                        'example' => 'STANDARD',
                                                        'index' => 200,
                                                    ],
                                                ],
                                                'Appkey' => [
                                                    'type' => 'string',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"DevAddr\\": \\"12345678\\",\\n        \\"LastJoinMillis\\": 1514736000000,\\n        \\"DevEui\\": \\"0000000000000000\\",\\n        \\"MulticastGroupId\\": \\"xxxx\\",\\n        \\"BoundMillis\\": 1514736000000,\\n        \\"ClassMode\\": \\"A\\",\\n        \\"AuthTypes\\": [\\n          \\"STANDARD\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNodesByNodeGroupIdResponse>\\r\\n      <Data>\\r\\n            <TotalCount>10</TotalCount>\\r\\n            <List>\\r\\n                  <Node>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <BoundMillis>1514736000000</BoundMillis>\\r\\n                        <LastJoinMillis>1514736000000</LastJoinMillis>\\r\\n                        <DevEui>0000000000000000</DevEui>\\r\\n                        <DevAddr>12345678</DevAddr>\\r\\n                  </Node>\\r\\n                  <Node>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <BoundMillis>1514736000001</BoundMillis>\\r\\n                        <LastJoinMillis>1514736000000</LastJoinMillis>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <DevAddr>12345678</DevAddr>\\r\\n                  </Node>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListNodesByNodeGroupIdResponse>","errorExample":""}]',
            'title' => '查询指定节点分组中的节点列表',
            'summary' => '调用ListNodesByNodeGroupId根据过滤条件，查询指定节点分组中的节点列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListNodesByOwnedJoinPermissionId' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JoinPermissionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '入网凭证ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'FuzzyDevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配节点的DevEUI。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd896e0',
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的起始位置，从0开始。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'minimum' => '0',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的节点数量上限，大于等于1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '200',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定排序字段，可取值为**CREATED_MILLIS**, 表示根据创建时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CREATED_MILLIS',
                        'enum' => [
                            'CREATED_MILLIS',
                            'LAST_JOIN_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '满足过滤条件的节点总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'List' => [
                                        'description' => '满足过滤条件的节点列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'LastJoinMillis' => [
                                                    'description' => '最近一次入网的时间，UNIX时间戳，以毫秒为单位。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514736000000',
                                                ],
                                                'DevAddr' => [
                                                    'description' => '节点的网络地址。',
                                                    'type' => 'string',
                                                    'example' => '12345678',
                                                ],
                                                'DevEui' => [
                                                    'description' => '节点的DevEUI。',
                                                    'type' => 'string',
                                                    'example' => '0000000000000000',
                                                ],
                                                'BoundMillis' => [
                                                    'description' => '节点加入当前节点分组的时间，UNIX时间戳，以毫秒为单位。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514736000000',
                                                ],
                                                'ClassMode' => [
                                                    'description' => '节点所采用的LoRaWAN Class模式，可取值：A、B、C。',
                                                    'type' => 'string',
                                                    'example' => 'A',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"LastJoinMillis\\": 1514736000000,\\n        \\"DevAddr\\": \\"12345678\\",\\n        \\"DevEui\\": \\"0000000000000000\\",\\n        \\"BoundMillis\\": 1514736000000,\\n        \\"ClassMode\\": \\"A\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNodesByOwnedJoinPermissionIdResponse>\\r\\n      <Data>\\r\\n            <TotalCount>10</TotalCount>\\r\\n            <List>\\r\\n                  <Node>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <BoundMillis>1514736000000</BoundMillis>\\r\\n                        <LastJoinMillis>1514736000000</LastJoinMillis>\\r\\n                        <DevEui>0000000000000000</DevEui>\\r\\n                        <DevAddr>12345678</DevAddr>\\r\\n                  </Node>\\r\\n                  <Node>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <BoundMillis>1514736000001</BoundMillis>\\r\\n                        <LastJoinMillis>1514736000000</LastJoinMillis>\\r\\n                        <DevEui>0000000000000001</DevEui>\\r\\n                        <DevAddr>12345678</DevAddr>\\r\\n                  </Node>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListNodesByOwnedJoinPermissionIdResponse>","errorExample":""}]',
            'title' => '查询使用了特定入网凭证的节点列表',
            'summary' => '调用ListNodesByOwnedJoinPermissionId根据过滤条件，查询使用了特定入网凭证的节点列表。',
            'description' => '所指定的入网凭证必须时当前用户账号所拥有的入网凭证。',
        ],
        'ListNotifications' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '通知类型列表，传 null 则不过滤类型。',
                        'type' => 'array',
                        'items' => [
                            'description' => '通知类型列表，传**null**则不过滤类型。'."\n"
                                ."\n"
                                .'- GATEWAY_OFFLINE：网关离线通知。'."\n"
                                ."\n"
                                .'- JOIN_PERMISSION_AUTH_APPLYING：入网凭证申请。'."\n"
                                ."\n"
                                .'- JOIN_PERMISSION_AUTH_ACCEPTED：入网凭证审批通过。'."\n"
                                ."\n"
                                .'- JOIN_PERMISSION_AUTH_CANCELED：入网凭证申请撤销。'."\n"
                                ."\n"
                                .'- JOIN_PERMISSION_AUTH_REJECTED：入网凭证申请拒绝。'."\n"
                                ."\n"
                                .'- GATEWAY_DATAFLOW_LIMIT：网关限流。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'GATEWAY_OFFLINE',
                        ],
                        'required' => false,
                        'example' => 'GATEWAY_OFFLINE',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'HandleState',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据通知处理状态过滤，传**null**则不过滤处理状态。'."\n"
                            ."\n"
                            .'- **HANDLED**：已处理。'."\n"
                            ."\n"
                            .'- **UNHANDLED**：未处理。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HANDLED',
                        'enum' => [
                            'HANDLED',
                            'UNHANDLED',
                        ],
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的起始位置，需从0开始。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'minimum' => '0',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的通知数量上限，需大于等于1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '200',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'BeginMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间查询，毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'EndMillis',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间查询，毫秒为单位的UNIX时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1514736000000',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段，可取值为**NOTICE_MILLIS**（按照通知发生时间排序）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NOTICE_MILLIS',
                        'enum' => [
                            'NOTICE_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配合**SortingField**参数一起使用。'."\n"
                            ."\n"
                            .'- **true**：表示升序。'."\n"
                            ."\n"
                            .'- **false**：表示降序。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '符合过滤条件的通知总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'List' => [
                                        'description' => '符合过滤条件的通知列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'NoticeMillis' => [
                                                    'description' => '通知发生时间，UNIX时间戳，毫秒为单位。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514736000000',
                                                ],
                                                'Category' => [
                                                    'description' => '通知分类。',
                                                    'type' => 'string',
                                                    'example' => 'GATEWAY_OFFLINE',
                                                ],
                                                'HandleState' => [
                                                    'description' => '通知处理状态。',
                                                    'type' => 'string',
                                                    'example' => 'HANDLED',
                                                ],
                                                'NotificationId' => [
                                                    'description' => '通知ID。',
                                                    'type' => 'string',
                                                    'example' => '123',
                                                ],
                                                'HandledMillis' => [
                                                    'description' => '通知处理时间，UNIX时间戳，毫秒为单位。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1514736000001',
                                                ],
                                                'GatewayOfflineInfo' => [
                                                    'description' => '记录网关离线信息。'."\n"
                                                        ."\n"
                                                        .'当**Category**字段为**GATEWAY_OFFLINE**时，该字段有值。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'GwEui' => [
                                                            'description' => '网关的GwEUI。',
                                                            'type' => 'string',
                                                            'example' => '0000000000000000',
                                                        ],
                                                        'OfflineMillis' => [
                                                            'description' => '离线时间，毫秒为单位的UNIX时间戳。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1514736000000',
                                                        ],
                                                    ],
                                                ],
                                                'JoinPermissionAuthInfo' => [
                                                    'description' => '记录凭证授权信息。'."\n"
                                                        ."\n"
                                                        .'当**Category**字段为**JOINPERMISSION_AUTH**时，该字段有值。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'CanceledMillis' => [
                                                            'description' => '工单被取消的UNIX时间戳，毫秒为单位。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1514736000000',
                                                        ],
                                                        'ApplyingMillis' => [
                                                            'description' => '发起工单的UNIX时间戳，毫秒为单位。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1514736000000',
                                                        ],
                                                        'JoinEui' => [
                                                            'description' => '入网凭证所使用的JoinEUI。',
                                                            'type' => 'string',
                                                            'example' => '0000000000000001',
                                                        ],
                                                        'RenterAliyunId' => [
                                                            'description' => '入网凭证租户的阿里云账号ID。',
                                                            'type' => 'string',
                                                            'example' => 'some-user',
                                                        ],
                                                        'AcceptedMillis' => [
                                                            'description' => '工单审批通过的UNIX时间戳，毫秒为单位。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1514736000000',
                                                        ],
                                                        'OwnerAliyunId' => [
                                                            'description' => '发起授权的入网凭证拥有者的阿里云账号ID。',
                                                            'type' => 'string',
                                                            'example' => 'some-user1',
                                                        ],
                                                        'RejectedMillis' => [
                                                            'description' => '工单被拒绝的UNIX时间戳，毫秒为单位。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1514736000000',
                                                        ],
                                                        'JoinPermissionId' => [
                                                            'description' => '唯一标识入网凭证的ID。',
                                                            'type' => 'string',
                                                            'example' => '126',
                                                        ],
                                                        'JoinPermissionName' => [
                                                            'description' => '入网凭证的名称。',
                                                            'type' => 'string',
                                                            'example' => '凭证2',
                                                        ],
                                                        'OrderState' => [
                                                            'description' => '工单状态。',
                                                            'type' => 'string',
                                                            'example' => 'ACCEPTED',
                                                        ],
                                                        'OrderId' => [
                                                            'description' => '工单ID。',
                                                            'type' => 'string',
                                                            'example' => '123',
                                                        ],
                                                    ],
                                                ],
                                                'GatewayDataflowLimit' => [
                                                    'description' => '网关限流通知。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'AlarmDetail' => [
                                                            'description' => '通知内容。',
                                                            'type' => 'string',
                                                            'example' => 'GATEWAY_DATAFLOW_LIMIT',
                                                        ],
                                                        'DataflowLimitMillis' => [
                                                            'description' => '限流时间。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1653450720919',
                                                        ],
                                                        'GwEui' => [
                                                            'description' => '网关的唯一标识。',
                                                            'type' => 'string',
                                                            'example' => '0000000000000000',
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
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 100,\\n    \\"List\\": [\\n      {\\n        \\"NoticeMillis\\": 1514736000000,\\n        \\"Category\\": \\"GATEWAY_OFFLINE\\",\\n        \\"HandleState\\": \\"HANDLED\\",\\n        \\"NotificationId\\": \\"123\\",\\n        \\"HandledMillis\\": 1514736000001,\\n        \\"GatewayOfflineInfo\\": {\\n          \\"GwEui\\": \\"0000000000000000\\",\\n          \\"OfflineMillis\\": 1514736000000\\n        },\\n        \\"JoinPermissionAuthInfo\\": {\\n          \\"CanceledMillis\\": 1514736000000,\\n          \\"ApplyingMillis\\": 1514736000000,\\n          \\"JoinEui\\": \\"0000000000000001\\",\\n          \\"RenterAliyunId\\": \\"some-user\\",\\n          \\"AcceptedMillis\\": 1514736000000,\\n          \\"OwnerAliyunId\\": \\"some-user1\\",\\n          \\"RejectedMillis\\": 1514736000000,\\n          \\"JoinPermissionId\\": \\"126\\",\\n          \\"JoinPermissionName\\": \\"凭证2\\",\\n          \\"OrderState\\": \\"ACCEPTED\\",\\n          \\"OrderId\\": \\"123\\"\\n        },\\n        \\"GatewayDataflowLimit\\": {\\n          \\"AlarmDetail\\": \\"GATEWAY_DATAFLOW_LIMIT\\",\\n          \\"DataflowLimitMillis\\": 1653450720919,\\n          \\"GwEui\\": \\"0000000000000000\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNotificationsResponse>\\n    <Success>true</Success>\\n    <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n    <Data>\\n        <TotalCount>100</TotalCount>\\n        <List>\\n            <NoticeMillis>1514736000000</NoticeMillis>\\n            <Category>GATEWAY_OFFLINE</Category>\\n            <HandleState>HANDLED</HandleState>\\n            <NotificationId>123</NotificationId>\\n            <HandledMillis>1514736000001</HandledMillis>\\n            <GatewayOfflineInfo>\\n                <GwEui>0000000000000000</GwEui>\\n                <OfflineMillis>1514736000000</OfflineMillis>\\n            </GatewayOfflineInfo>\\n            <JoinPermissionAuthInfo>\\n                <CanceledMillis>1514736000000</CanceledMillis>\\n                <ApplyingMillis>1514736000000</ApplyingMillis>\\n                <JoinEui>0000000000000001</JoinEui>\\n                <RenterAliyunId>some-user</RenterAliyunId>\\n                <AcceptedMillis>1514736000000</AcceptedMillis>\\n                <OwnerAliyunId>some-user1</OwnerAliyunId>\\n                <RejectedMillis>1514736000000</RejectedMillis>\\n                <JoinPermissionId>126</JoinPermissionId>\\n                <JoinPermissionName>凭证2</JoinPermissionName>\\n                <OrderState>ACCEPTED</OrderState>\\n                <OrderId>123</OrderId>\\n            </JoinPermissionAuthInfo>\\n            <GatewayDataflowLimit>\\n                <AlarmDetail>GATEWAY_DATAFLOW_LIMIT</AlarmDetail>\\n                <DataflowLimitMillis>1653450720919</DataflowLimitMillis>\\n                <GwEui>0000000000000000</GwEui>\\n            </GatewayDataflowLimit>\\n        </List>\\n    </Data>\\n</ListNotificationsResponse>","errorExample":""}]',
            'title' => '获取通知列表',
            'summary' => '调用ListNotifications获取通知列表。',
        ],
        'ListOwnedJoinPermissions' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FuzzyRenterAliyunId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配入网凭证租户的阿里云账号ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'some-user',
                    ],
                ],
                [
                    'name' => 'FuzzyJoinEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配入网凭证所使用的JoinEUI。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd896e0',
                    ],
                ],
                [
                    'name' => 'Enabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据入网凭证的启停用状态过滤。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'FuzzyJoinPermissionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配入网凭证的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '凭证1',
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的起始位置，从 0 开始。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'minimum' => '0',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的入网凭证的数量上限，大于等于 1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '200',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定排序字段，可取值为**CREATED_MILLIS**, 表示根据创建时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CREATED_MILLIS',
                        'enum' => [
                            'CREATED_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
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
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '符合过滤条件的入网凭证总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'List' => [
                                        'description' => '符合过滤条件的入网凭证列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'JoinEui' => [
                                                    'description' => '入网凭证使用的JoinEUI。',
                                                    'type' => 'string',
                                                    'example' => '0000000000000000',
                                                ],
                                                'FreqBandPlanGroupId' => [
                                                    'description' => '入网凭证采用的频段的频段ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '102',
                                                ],
                                                'Enabled' => [
                                                    'description' => '入网凭证的启停用状态。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'RxDelay' => [
                                                    'description' => 'classA的接收窗口延时。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'RenterAliyunId' => [
                                                    'description' => '入网凭证租户的阿里云账号ID。',
                                                    'type' => 'string',
                                                    'example' => 'some-user1',
                                                ],
                                                'DataRate' => [
                                                    'description' => '工作速率。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '4',
                                                ],
                                                'JoinPermissionId' => [
                                                    'description' => '入网凭证的ID。',
                                                    'type' => 'string',
                                                    'example' => '102',
                                                ],
                                                'JoinPermissionName' => [
                                                    'description' => '入网凭证的名称。',
                                                    'type' => 'string',
                                                    'example' => '凭证1',
                                                ],
                                                'ClassMode' => [
                                                    'description' => '入网凭证采用的LoRaWAN Class模式，可取值：A、B、C。',
                                                    'type' => 'string',
                                                    'example' => 'A',
                                                ],
                                                'AuthState' => [
                                                    'description' => '入网凭证的授权状态。取值：'."\n"
                                                        ."\n"
                                                        .'- **NEW**：未授权'."\n"
                                                        .'- **APPLYING**：授权中'."\n"
                                                        .'- **ACCEPTED**：已授权',
                                                    'type' => 'string',
                                                    'example' => 'NEW',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"JoinEui\\": \\"0000000000000000\\",\\n        \\"FreqBandPlanGroupId\\": 102,\\n        \\"Enabled\\": true,\\n        \\"RxDelay\\": 1,\\n        \\"RenterAliyunId\\": \\"some-user1\\",\\n        \\"DataRate\\": 4,\\n        \\"JoinPermissionId\\": \\"102\\",\\n        \\"JoinPermissionName\\": \\"凭证1\\",\\n        \\"ClassMode\\": \\"A\\",\\n        \\"AuthState\\": \\"NEW\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListOwnedJoinPermissionsResponse>\\r\\n      <Data>\\r\\n            <TotalCount>10</TotalCount>\\r\\n            <List>\\r\\n                  <JoinPermission>\\r\\n                        <JoinEui>0000000000000000</JoinEui>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <Enabled>true</Enabled>\\r\\n                        <RenterAliyunId>some-user1</RenterAliyunId>\\r\\n                        <JoinPermissionId>123</JoinPermissionId>\\r\\n                        <AuthState>ACCEPTED</AuthState>\\r\\n                        <JoinPermissionName>凭证1</JoinPermissionName>\\r\\n                        <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\r\\n                  </JoinPermission>\\r\\n                  <JoinPermission>\\r\\n                        <JoinEui>0000000000000001</JoinEui>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <Enabled>true</Enabled>\\r\\n                        <RenterAliyunId>some-user2</RenterAliyunId>\\r\\n                        <JoinPermissionId>126</JoinPermissionId>\\r\\n                        <AuthState>ACCEPTED</AuthState>\\r\\n                        <JoinPermissionName>凭证2</JoinPermissionName>\\r\\n                        <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\r\\n                  </JoinPermission>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListOwnedJoinPermissionsResponse>","errorExample":""}]',
            'title' => '查询入网凭证列表',
            'summary' => '根据过滤条件，查询当前用户账号所拥有的入网凭证列表。',
            'description' => '通过该接口获取到的当前用户账号名下的是专用入网凭证。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListRentedJoinPermissions' => [
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
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FuzzyOwnerAliyunId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配入网凭证拥有者的阿里云账号ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'some-user',
                    ],
                ],
                [
                    'name' => 'FuzzyJoinEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配入网凭证使用的JoinEUI。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd896e0',
                    ],
                ],
                [
                    'name' => 'Enabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按照凭证的启停用状态进行过滤。**true**表示启用，**false**表示停用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'BoundNodeGroup',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据入网凭证是否关联到节点分组进行过滤。**true**表示已关联，**false**表示未关联。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按照入网凭证的类型进行过滤，取值：'."\n"
                            ."\n"
                            .'- **LOCAL**：专用凭证'."\n"
                            .'- **ROAMING**：泛在凭证',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LOCAL',
                        'enum' => [
                            'LOCAL',
                            'ROAMING',
                        ],
                    ],
                ],
                [
                    'name' => 'FuzzyJoinPermissionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配入网凭证的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '凭证1',
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的起始位置，从 0 开始。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'minimum' => '0',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次查询的入网凭证数量的上限，大于等于 1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '200',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'SortingField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定排序字段，可取值为**CREATED_MILLIS**, 表示根据创建时间排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CREATED_MILLIS',
                        'enum' => [
                            'CREATED_MILLIS',
                        ],
                    ],
                ],
                [
                    'name' => 'Ascending',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配合**SortingField**参数一起使用，**true**表示升序，**false**表示降序。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Data' => [
                                'description' => '返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '符合过滤条件的入网凭证总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'List' => [
                                        'description' => '符合过滤条件的入网凭证列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '入网凭证的类型。',
                                                    'type' => 'string',
                                                    'example' => 'LOCAL',
                                                ],
                                                'BoundNodeGroupName' => [
                                                    'description' => '入网凭证绑定的节点组名称。',
                                                    'type' => 'string',
                                                    'example' => '123',
                                                ],
                                                'FreqBandPlanGroupId' => [
                                                    'description' => '入网凭证采用的频段的频段ID。',
                                                    'type' => 'string',
                                                    'example' => '102',
                                                ],
                                                'DataRate' => [
                                                    'description' => '工作速率。',
                                                    'type' => 'string',
                                                    'example' => '4',
                                                ],
                                                'JoinPermissionId' => [
                                                    'description' => '入网凭证ID。',
                                                    'type' => 'string',
                                                    'example' => '123',
                                                ],
                                                'ClassMode' => [
                                                    'description' => '入网凭证采用的LoRaWAN Class模式，可取值：A、B、C。',
                                                    'type' => 'string',
                                                    'example' => 'A',
                                                ],
                                                'JoinEui' => [
                                                    'description' => '入网凭证使用的的JoinEUI。',
                                                    'type' => 'string',
                                                    'example' => '0000000000000000',
                                                ],
                                                'Enabled' => [
                                                    'description' => '入网凭证的启停用状态。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'BoundNodeGroup' => [
                                                    'description' => '入网凭证是否已关联到节点分组。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'RxDelay' => [
                                                    'description' => 'classA的接收窗口延时。',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'BoundNodeGroupId' => [
                                                    'description' => '入网凭证绑定的节点组id。',
                                                    'type' => 'string',
                                                    'example' => '123',
                                                ],
                                                'OwnerAliyunId' => [
                                                    'description' => '- 如果该入网凭证是**专用入网凭证**，该字段表示拥有者的阿里云账号ID。'."\n"
                                                        .'- 如果该入网凭证是**泛在入网凭证**，该字段恒为AliCloud IoT。',
                                                    'type' => 'string',
                                                    'example' => 'some-user1',
                                                ],
                                                'JoinPermissionName' => [
                                                    'description' => '入网凭证的名称。',
                                                    'type' => 'string',
                                                    'example' => '凭证1',
                                                ],
                                                'DataDispatchConfig' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Destination' => [
                                                            'type' => 'string',
                                                        ],
                                                        'IotProduct' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'DebugSwitch' => [
                                                                    'type' => 'boolean',
                                                                ],
                                                                'ProductKey' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'ProductName' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'ProductType' => [
                                                                    'type' => 'string',
                                                                ],
                                                            ],
                                                        ],
                                                        'OnsTopics' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'UplinkTopic' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'UplinkRegionName' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'DownlinkRegionName' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'DownlinkTopic' => [
                                                                    'type' => 'string',
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
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 10,\\n    \\"List\\": [\\n      {\\n        \\"Type\\": \\"LOCAL\\",\\n        \\"BoundNodeGroupName\\": \\"123\\",\\n        \\"FreqBandPlanGroupId\\": \\"102\\",\\n        \\"DataRate\\": \\"4\\",\\n        \\"JoinPermissionId\\": \\"123\\",\\n        \\"ClassMode\\": \\"A\\",\\n        \\"JoinEui\\": \\"0000000000000000\\",\\n        \\"Enabled\\": true,\\n        \\"BoundNodeGroup\\": false,\\n        \\"RxDelay\\": \\"1\\",\\n        \\"BoundNodeGroupId\\": \\"123\\",\\n        \\"OwnerAliyunId\\": \\"some-user1\\",\\n        \\"JoinPermissionName\\": \\"凭证1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListRentedJoinPermissionsResponse>\\r\\n      <Data>\\r\\n            <TotalCount>10</TotalCount>\\r\\n            <List>\\r\\n                  <JoinPermission>\\r\\n                        <JoinEui>0000000000000000</JoinEui>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <Enabled>true</Enabled>\\r\\n                        <BoundNodeGroup>false</BoundNodeGroup>\\r\\n                        <JoinPermissionId>123</JoinPermissionId>\\r\\n                        <OwnerAliyunId>some-user1</OwnerAliyunId>\\r\\n                        <Type>LOCAL</Type>\\r\\n                        <JoinPermissionName>凭证1</JoinPermissionName>\\r\\n                        <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\r\\n                  </JoinPermission>\\r\\n                  <JoinPermission>\\r\\n                        <JoinEui>0000000000000001</JoinEui>\\r\\n                        <ClassMode>A</ClassMode>\\r\\n                        <Enabled>true</Enabled>\\r\\n                        <BoundNodeGroup>false</BoundNodeGroup>\\r\\n                        <JoinPermissionId>126</JoinPermissionId>\\r\\n                        <OwnerAliyunId>some-user2</OwnerAliyunId>\\r\\n                        <Type>ROAMING</Type>\\r\\n                        <JoinPermissionName>凭证2</JoinPermissionName>\\r\\n                        <FreqBandPlanGroupId>102</FreqBandPlanGroupId>\\r\\n                  </JoinPermission>\\r\\n            </List>\\r\\n      </Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ListRentedJoinPermissionsResponse>","errorExample":""}]',
            'title' => '查询入网凭证列表',
            'summary' => '查询当前用户账号所租用的入网凭证列表（可能是专用入网凭证或泛在入网凭证）。',
            'description' => '****',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RejectJoinPermissionAuthOrder' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要回绝的授权工单ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                    [
                        'errorCode' => 'IllegalOrderStateTransition',
                        'errorMessage' => 'The order status conversion is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<RejectJoinPermissionAuthOrderResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</RejectJoinPermissionAuthOrderResponse>","errorExample":""}]',
            'title' => '回绝专用入网凭证授权工单',
            'summary' => '调用RejectJoinPermissionAuthOrder回绝专用入网凭证授权工单。',
            'description' => '> 开发者（解决方案供应商）通过该接口回绝一个由网络运营者授权的专用入网凭证。',
        ],
        'RemoveNodeFromGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要移除的节点的DevEUI。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0000000000000000',
                    ],
                ],
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'ResourceLocked',
                        'errorMessage' => 'The specified resource has been locked by another product.',
                    ],
                    [
                        'errorCode' => 'NodeGroupDoesNotExist',
                        'errorMessage' => 'The specified node group does not exist.',
                    ],
                    [
                        'errorCode' => 'NodeDoesNotExist',
                        'errorMessage' => 'The specified node does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveNodeFromGroupResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</RemoveNodeFromGroupResponse>","errorExample":""}]',
            'title' => '从节点分组中移除节点',
            'summary' => '调用RemoveNodeFromGroup从节点分组中移除节点。',
        ],
        'ReturnJoinPermission' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'JoinPermissionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要归还的入网凭证ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'JoinPermissionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要归还的入网凭证类型。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'LOCAL',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'JoinPermissionAlreadyBoundNodeGroup',
                        'errorMessage' => 'The specified join permission has already been bound to another node group.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<ReturnJoinPermissionResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</ReturnJoinPermissionResponse>","errorExample":""}]',
            'title' => '归还租用的入网凭证',
            'summary' => '归还租用的入网凭证（可以是专用入网凭证或泛在入网凭证）。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SendUnicastCommand' => [
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
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网平台的实例id，为空表示公共实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iotx-oxssharez',
                    ],
                ],
                [
                    'name' => 'DevEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标节点。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0000000000000000',
                    ],
                ],
                [
                    'name' => 'MaxRetries',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最大重发次数，默认为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'CleanUp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否清空该节点的堆积指令，并下发该指令。默认为**false**。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'FPort',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'fPort。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '223',
                        'minimum' => '1',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Confirmed',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否是confirmed指令，默认为**false**。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要发送的内容。16进制字符串，最长51个字节（如果换算成16进制字符串，最长为51*2个字符）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'Abandoned',
                        'errorMessage' => 'An error occurred while processing this request, because the API has been abandoned.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<SendUnicastCommandResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</SendUnicastCommandResponse>","errorExample":""}]',
            'title' => '发送单播信息',
            'summary' => '调用SendUnicastCommand发送单播信息。',
        ],
        'SubmitGatewayTupleOrder' => [
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
                    'name' => 'RequiredCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要申请的网关安全密钥的数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'TupleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关密钥类型。'."\n"
                            ."\n"
                            .'- singlechannel：低速版（单通道型）。'."\n"
                            ."\n"
                            .'- standard：标准版。'."\n"
                            ."\n"
                            .'- hybrid：高速版（Hybrid型）。'."\n"
                            ."\n"
                            .'- noncontractual：高速版。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'noncontractual',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '工单ID。',
                                'type' => 'string',
                                'example' => '12345',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'ExceedGatewayTupleLimit',
                        'errorMessage' => 'The maximum number of gateway tuples is exceeded.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"12345\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SubmitGatewayTupleOrderResponse>\\n    <Data>12345</Data>\\n    <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n    <Success>true</Success>\\n</SubmitGatewayTupleOrderResponse>","errorExample":""}]',
            'title' => '提交网关密钥申请工单',
            'summary' => '提交网关密钥申请工单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SubmitJoinPermissionAuthOrder' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'JoinPermissionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要授权的专用入网凭证ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'RenterAliyunId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要授权的开发者的阿里云账号ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'some_user',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '授权工单ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1234',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'TooManyRenterNonExistentFailures',
                        'errorMessage' => 'You have entered invalid renter usernames for several times. Try again later.',
                    ],
                    [
                        'errorCode' => 'JoinPermissionAlreadyAuthorized',
                        'errorMessage' => 'The specified join permission has already been granted to another renter.',
                    ],
                    [
                        'errorCode' => 'RenterDoesNotExist',
                        'errorMessage' => 'The specified renter does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 1234,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SubmitJoinPermissionAuthOrderResponse>\\r\\n      <Data>1234</Data>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</SubmitJoinPermissionAuthOrderResponse>","errorExample":""}]',
            'title' => '发起专用入网凭证授权工单',
            'summary' => '调用SubmitJoinPermissionAuthOrder发起专用入网凭证授权工单。',
            'description' => '网络运营者可以通过该接口向开发者（解决方案供应商）授权一个专用入网凭证。不过只是发起了一个授权工单，需待开发者接受该授权后，授权才能完成。',
        ],
        'SubmitNodeTupleOrder' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'LoraVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'LoRaWAN协议版本。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '1.0.2',
                        'enum' => [
                            '1.0.2',
                            '1.1',
                        ],
                    ],
                ],
                [
                    'name' => 'RequiredCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要申请的节点密钥数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'TupleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '申请的密钥类型'."\n"
                            ."\n"
                            .'noncontractual：专业版密钥'."\n"
                            ."\n"
                            .'standard：标准版密钥'."\n"
                            ."\n"
                            .'relay：中继密钥',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'standard',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '工单 Id。'."\n"
                                    ."\n\n"
                                    ."\n\n",
                                'type' => 'string',
                                'example' => '12345',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n",
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
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"12345\\",\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>\\n<Data>12345</Data>","errorExample":""}]',
            'title' => '提交节点密钥申请工单',
            'summary' => '提交节点密钥申请工单。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UnbindJoinPermissionFromNodeGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要接触关联的节点分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'JoinPermissionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参与关联的入网凭证ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'ResourceLocked',
                        'errorMessage' => 'The specified resource has been locked by another product.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindJoinPermissionFromNodeGroupResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UnbindJoinPermissionFromNodeGroupResponse>","errorExample":""}]',
            'title' => '接触入网凭证和节点分组的关联',
            'summary' => '调用UnbindJoinPermissionFromNodeGroup接触入网凭证和节点分组的关联。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateDataDispatchConfig' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要更新的节点分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'DataDispatchDestination',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据流转目的地。取值：'."\n"
                            ."\n"
                            .'- **IOT**：数据流转到IoT的产品。'."\n"
                            .'- **ONS**：数据流转到MQ的Topic。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'IOT',
                        'enum' => [
                            'IOT',
                            'MQ',
                        ],
                    ],
                ],
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据流转目的地为IoT的产品类型。取值：'."\n"
                            ."\n"
                            .'- **IOT_SUITE**：数据流转到 IoT 套件基础版。'."\n"
                            .'- **IOT_SUITE_SENIOR**：数据流转到 IoT 套件高级版。'."\n"
                            ."\n"
                            .'数据流转目的地为IoT时，请求参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'IOT_SUITE',
                        'enum' => [
                            'IOT_SUITE',
                            'IOT_SUITE_SENIOR',
                        ],
                    ],
                ],
                [
                    'name' => 'ProductName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据流转目的地为IoT的产品名称。'."\n"
                            ."\n"
                            .'数据流转目的地为IoT时，请求参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '产品1',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据流转目的地为IoT的Product Key。'."\n"
                            ."\n"
                            .'数据流转目的地为IoT时，请求参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'DebugSwitch',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据流转目的地为 IoT 的调试开关。'."\n"
                            ."\n"
                            .'调试开关主要针对物联网平台自定义Topic，针对物联网络管理控制台，请勿修改自定义topic。'."\n"
                            ."\n"
                            .'自定义Topic如下：'."\n"
                            ."\n"
                            .'/ProductKey/${deviceName}/user/update'."\n"
                            ."\n"
                            .'/ProductKey/${deviceName}/user/get',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'UplinkRegionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据流转目的地为MQ的上行Region Id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'UplinkTopic',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据流转目的地为MQ的上行Topic。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'ResourceLocked',
                        'errorMessage' => 'The specified resource has been locked by another product.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateDataDispatchConfigResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateDataDispatchConfigResponse>","errorExample":""}]',
            'title' => '更新节点分组的数据流转配置',
            'summary' => '调用UpdateDataDispatchConfig更新节点分组的数据流转配置。',
            'requestParamsDescription' => "\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateDataDispatchEnablingState' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'NodeGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'DataDispatchEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '- **true**：表示启用数据流转'."\n"
                            .'- **false**：表示停用数据流转',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'ResourceLocked',
                        'errorMessage' => 'The specified resource has been locked by another product.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateDataDispatchEnablingStateResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateDataDispatchEnablingStateResponse>","errorExample":""}]',
            'title' => '启停节点分组的数据流转',
            'summary' => '调用UpdateDataDispatchEnablingState启停节点分组的数据流转。',
        ],
        'UpdateGatewayEnablingState' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GwEui',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0000000000000000',
                    ],
                ],
                [
                    'name' => 'Enabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启网关。'."\n"
                            ."\n"
                            .'- **true**：表示启用该网关。'."\n"
                            .'- **false**：表示关闭该网关。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateGatewayEnablingStateResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateGatewayEnablingStateResponse>","errorExample":""}]',
            'title' => '启动、关闭网关',
            'summary' => '调用UpdateGatewayEnablingState启动、关闭网关。',
        ],
        'UpdateNotificationsHandleState' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'NotificationId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '通知ID列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                        'required' => true,
                        'example' => '1',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'TargetHandleState',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要设置的处理状态，可取值为**HANDLED**（已处理）, **UNHANDLED**（未处理）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'UNHANDLED',
                        'enum' => [
                            'HANDLED',
                            'UNHANDLED',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateNotificationsHandleStateResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateNotificationsHandleStateResponse>","errorExample":""}]',
            'title' => '更新通知的处理状态',
            'summary' => '调用UpdateNotificationsHandleState更新通知的处理状态。',
        ],
        'UpdateOwnedLocalJoinPermission' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JoinPermissionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专用入网凭证ID，用来指定要更新的入网凭证。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'FreqBandPlanGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专用入网凭证所采用的频段的频段ID，用于更新旧频段。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '201',
                    ],
                ],
                [
                    'name' => 'ClassMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专用入网凭证采用的LoRaWAN Class模式，用于更新旧的 Class 模式。可取值：A、B、C。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'A',
                        'enum' => [
                            'A',
                            'B',
                            'C',
                        ],
                    ],
                ],
                [
                    'name' => 'JoinPermissionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义入网凭证名称，用于更新旧名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '凭证1',
                    ],
                ],
                [
                    'name' => 'RxDelay',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'classA的接收窗口延时。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DataRate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作速率。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'JoinEui',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'JoinPermissionAlreadyAuthorized',
                        'errorMessage' => 'The specified join permission has already been granted to another renter.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                    [
                        'errorCode' => 'JoinPermissionNameDuplicated',
                        'errorMessage' => 'The specified join permission name already exists.',
                    ],
                    [
                        'errorCode' => 'InvalidName',
                        'errorMessage' => 'The specified name is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidFreqBandPlan',
                        'errorMessage' => 'The frequency band plan is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateOwnedLocalJoinPermissionResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateOwnedLocalJoinPermissionResponse>","errorExample":""}]',
            'title' => '更新当前用户账号所拥有的专用入网凭证',
            'summary' => '调用UpdateOwnedLocalJoinPermission更新当前用户账号所拥有的专用入网凭证。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateOwnedLocalJoinPermissionEnablingState' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IotInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JoinPermissionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要操作的专用入网凭证ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'Enabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '**true**为启用，**false**为停用。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateOwnedLocalJoinPermissionEnablingStateResponse>\\r\\n      <RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\r\\n      <Success>true</Success>\\r\\n</UpdateOwnedLocalJoinPermissionEnablingStateResponse>","errorExample":""}]',
            'title' => '启用或停用专用入网凭证',
            'summary' => '启用、停用当前用户账号所拥有的专用入网凭证。',
        ],
        'UpdateRoamingJoinPermission' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'JoinPermissionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要更新的泛在入网凭证的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'JoinPermissionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义入网凭证名称，用于更新旧名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '泛在凭证1',
                    ],
                ],
                [
                    'name' => 'RxDelay',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'class A的接收窗口延时，单位为ms。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DataRate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作速率。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'JoinPermissionAlreadyBoundNodeGroup',
                        'errorMessage' => 'The specified join permission has already been bound to another node group.',
                    ],
                    [
                        'errorCode' => 'JoinPermissionNameDuplicated',
                        'errorMessage' => 'The specified join permission name already exists.',
                    ],
                    [
                        'errorCode' => 'InvalidName',
                        'errorMessage' => 'The specified name is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '更新当前用户账号所申请的泛在入网凭证',
            'summary' => '更新当前用户账号所申请的泛在入网凭证。',
            'description' => '## QPS限制'."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为5。'."\n"
                ."\n"
                .'> RAM用户共享阿里云账号配额。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateRoamingJoinPermissionEnablingState' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'JoinPermissionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '泛在凭证id。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1234',
                    ],
                ],
                [
                    'name' => 'Enabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '泛在凭证启用状态。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '89EF6CAA-958F-F32C-BE45-FE003C6DE097',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ForbiddenByRam',
                        'errorMessage' => 'User not authorized to operate on the specified resource, or this API does not support RAM.',
                    ],
                    [
                        'errorCode' => 'ForbiddenByRiskControl',
                        'errorMessage' => 'This operation cannot be performed because of security risks.',
                    ],
                    [
                        'errorCode' => 'NonExistent',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error, exception or failure.',
                    ],
                    [
                        'errorCode' => 'CloudProductNotActivated',
                        'errorMessage' => 'The Link WAN service has not been activated.',
                    ],
                    [
                        'errorCode' => 'FeatureNotActivated',
                        'errorMessage' => 'The feature has not been activated.',
                    ],
                    [
                        'errorCode' => 'NotResourceOwner',
                        'errorMessage' => 'You are not authorized to use this resource.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"89EF6CAA-958F-F32C-BE45-FE003C6DE097\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>89EF6CAA-958F-F32C-BE45-FE003C6DE097</RequestId>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '更新泛在凭证的启用状态',
            'summary' => '更新泛在凭证的启用状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'linkwan.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'linkwan.cn-shanghai.aliyuncs.com',
        ],
    ],
];
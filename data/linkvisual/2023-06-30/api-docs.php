<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Linkvisual',
        'version' => '2023-06-30',
    ],
    'directories' => [
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'BindStorageOrder',
                'CheckFreeStorageValid',
                'ConsumeFreeStorage',
                'CreateAndPayStorageOrder',
                'EnableFreeStorage',
                'EnableStorageOrder',
                'FreezeFreeStorage',
                'GenerateDevice',
                'FreezeStorageOrder',
                'GenerateDeviceByBatchId',
                'QueryBatchStatus',
                'QueryDeviceDetail',
                'QueryFreeStorage',
                'QueryDevicesDownloadUrl',
                'QueryGenerateDevicesInfoList',
                'QueryGenerateDevicesRecord',
                'QueryStorageCommodityList',
                'QueryStorageOrder',
                'QueryStorageOrderList',
                'TransferStorageOrder',
                'UploadDeviceNameList',
                'GetThingEventSnapshot',
                'BatchBindDevice',
                'GetAccountById',
                'GetDeviceStatus',
                'GetSubDeviceList',
                'GetThingPropertySnapshot',
                'InvokeThingService',
                'ListBindingAccountByDevice',
                'ListBindingDeviceByAccount',
                'SetThingProperty',
                'UnbindAllUserByDevice',
                'UnbindDevice',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'BindStorageOrder' => [
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
                    'name' => 'EventRecordDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '30',
                        'minimum' => '0',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EventRecordProlong',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxRecordFileDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '3600',
                        'minimum' => '600',
                        'default' => '1800',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableDefaultPlan',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'PreRecordDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '5',
                        'minimum' => '0',
                        'default' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Copies' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Specification' => [
                                        'type' => 'string',
                                    ],
                                    'RecordType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'CommodityCode' => [
                                        'type' => 'string',
                                    ],
                                    'PreConsume' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'EndTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'UserId' => [
                                        'type' => 'string',
                                    ],
                                    'IdentityId' => [
                                        'type' => 'string',
                                    ],
                                    'StartTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'EndTime' => [
                                        'type' => 'string',
                                    ],
                                    'StartTime' => [
                                        'type' => 'string',
                                    ],
                                    'OutOrderNo' => [
                                        'type' => 'string',
                                    ],
                                    'Price' => [
                                        'type' => 'string',
                                    ],
                                    'OrderType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'PaymentStatus' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'UserName' => [
                                        'type' => 'string',
                                    ],
                                    'OrderId' => [
                                        'type' => 'string',
                                    ],
                                    'IotId' => [
                                        'type' => 'string',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNoOwner',
                        'errorMessage' => 'Device has no owner.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidStorageOrder',
                        'errorMessage' => 'Invalid storage order.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceOwnerChanged',
                        'errorMessage' => 'Device owner changed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
                        'errorMessage' => 'Get storage order lock failed try again later.',
                    ],
                    [
                        'errorCode' => 'iot.vision.GetOwnerIdentityInfoFailed',
                        'errorMessage' => 'Get owner identity info failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.SetDefaultRecordPlanFailed',
                        'errorMessage' => 'Set default record plan failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'CheckFreeStorageValid' => [
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
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IotId',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNoOwner',
                        'errorMessage' => 'Device has no owner.',
                    ],
                    [
                        'errorCode' => 'iot.vision.FreeStorageQuotaLimit',
                        'errorMessage' => 'No enough free storage quota or exceed limit.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidStorageCommodity',
                        'errorMessage' => 'Invalid storage commodity.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.GetDeviceInfoFailed',
                        'errorMessage' => 'Get device info failed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'ConsumeFreeStorage' => [
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
                    'name' => 'EventRecordProlong',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'EventRecordDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '30',
                        'minimum' => '0',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'ImmediateUse',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableDefaultPlan',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'PreRecordDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '5',
                        'minimum' => '0',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'Quota',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'EndTime' => [
                                        'type' => 'string',
                                    ],
                                    'Type' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'StartTime' => [
                                        'type' => 'string',
                                    ],
                                    'EndTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'Months' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Expired' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'RemainQuota' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'StartTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'Consumed' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Lifecycle' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNoOwner',
                        'errorMessage' => 'Device has no owner.',
                    ],
                    [
                        'errorCode' => 'iot.vision.FreeStorageQuotaLimit',
                        'errorMessage' => 'No enough free storage quota or exceed limit.',
                    ],
                    [
                        'errorCode' => 'iot.vision.GetOwnerIdentityInfoFailed',
                        'errorMessage' => 'Get owner identity info failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.GetDeviceInfoFailed',
                        'errorMessage' => 'Get device info failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
                        'errorMessage' => 'Get storage order lock failed try again later.',
                    ],
                    [
                        'errorCode' => 'iot.vision.SetDefaultRecordPlanFailed',
                        'errorMessage' => 'Set default record plan failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'CreateAndPayStorageOrder' => [
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
                    'name' => 'DeviceNoOwner',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'EventRecordDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '30',
                        'minimum' => '0',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Copies',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'CommodityCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EventRecordProlong',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'Specification',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ImmediateUse',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxRecordFileDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '3600',
                        'minimum' => '600',
                        'default' => '1800',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableDefaultPlan',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'PreRecordDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '5',
                        'minimum' => '0',
                        'default' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Copies' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Specification' => [
                                        'type' => 'string',
                                    ],
                                    'RecordType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'CommodityCode' => [
                                        'type' => 'string',
                                    ],
                                    'PreConsume' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'EndTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'UserId' => [
                                        'type' => 'string',
                                    ],
                                    'IdentityId' => [
                                        'type' => 'string',
                                    ],
                                    'StartTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'EndTime' => [
                                        'type' => 'string',
                                    ],
                                    'StartTime' => [
                                        'type' => 'string',
                                    ],
                                    'OutOrderNo' => [
                                        'type' => 'string',
                                    ],
                                    'Price' => [
                                        'type' => 'string',
                                    ],
                                    'OrderType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'PaymentStatus' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'UserName' => [
                                        'type' => 'string',
                                    ],
                                    'OrderId' => [
                                        'type' => 'string',
                                    ],
                                    'IotId' => [
                                        'type' => 'string',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNoOwner',
                        'errorMessage' => 'Device has no owner.',
                    ],
                    [
                        'errorCode' => 'iot.vision.CreateStorageOrderFailed',
                        'errorMessage' => 'Create storage order failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.GetDeviceInfoFailed',
                        'errorMessage' => 'Get device info failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidStorageCommodity',
                        'errorMessage' => 'Invalid storage commodity.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageCommodityUnavailable',
                        'errorMessage' => 'Storage commodity unavailable.',
                    ],
                    [
                        'errorCode' => 'iot.vision.GetOwnerIdentityInfoFailed',
                        'errorMessage' => 'Get owner identity info failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.SetDefaultRecordPlanFailed',
                        'errorMessage' => 'Set default record plan failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.QueryCommodityPriceFailed',
                        'errorMessage' => 'Query commodity price failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
                        'errorMessage' => 'Get storage order lock failed try again later.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidStorageOrder',
                        'errorMessage' => 'Invalid storage order.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderAlreadyPaid',
                        'errorMessage' => 'Storage order had been paid.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderPayFailed',
                        'errorMessage' => 'Storage order pay failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'EnableFreeStorage' => [
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
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IotId',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'EndTime' => [
                                        'type' => 'string',
                                    ],
                                    'Type' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'StartTime' => [
                                        'type' => 'string',
                                    ],
                                    'EndTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'Months' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Expired' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'RemainQuota' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'StartTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'Consumed' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Lifecycle' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNoOwner',
                        'errorMessage' => 'Device has no owner.',
                    ],
                    [
                        'errorCode' => 'iot.vision.FreeStorageQuotaLimit',
                        'errorMessage' => 'No enough free storage quota or exceed limit.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
                        'errorMessage' => 'Get storage order lock failed try again later.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidStorageOrder',
                        'errorMessage' => 'Invalid storage order.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'EnableStorageOrder' => [
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
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IotId',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Copies' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Specification' => [
                                        'type' => 'string',
                                    ],
                                    'RecordType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'CommodityCode' => [
                                        'type' => 'string',
                                    ],
                                    'PreConsume' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'EndTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'UserId' => [
                                        'type' => 'string',
                                    ],
                                    'IdentityId' => [
                                        'type' => 'string',
                                    ],
                                    'StartTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'EndTime' => [
                                        'type' => 'string',
                                    ],
                                    'StartTime' => [
                                        'type' => 'string',
                                    ],
                                    'OutOrderNo' => [
                                        'type' => 'string',
                                    ],
                                    'Price' => [
                                        'type' => 'string',
                                    ],
                                    'OrderType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'PaymentStatus' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'UserName' => [
                                        'type' => 'string',
                                    ],
                                    'OrderId' => [
                                        'type' => 'string',
                                    ],
                                    'IotId' => [
                                        'type' => 'string',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNoOwner',
                        'errorMessage' => 'Device has no owner.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidStorageOrder',
                        'errorMessage' => 'Invalid storage order.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceOwnerChanged',
                        'errorMessage' => 'Device owner changed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
                        'errorMessage' => 'Get storage order lock failed try again later.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderStatusInvalid',
                        'errorMessage' => 'Storage order status invalid.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'FreezeFreeStorage' => [
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
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IotId',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'EndTime' => [
                                        'type' => 'string',
                                    ],
                                    'Type' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'StartTime' => [
                                        'type' => 'string',
                                    ],
                                    'EndTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'Months' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Expired' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'RemainQuota' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'StartTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'Consumed' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Lifecycle' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNoOwner',
                        'errorMessage' => 'Device has no owner.',
                    ],
                    [
                        'errorCode' => 'iot.vision.FreeStorageQuotaLimit',
                        'errorMessage' => 'No enough free storage quota or exceed limit.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
                        'errorMessage' => 'Get storage order lock failed try again later.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidStorageOrder',
                        'errorMessage' => 'Invalid storage order.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'GenerateDevice' => [
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
                    'name' => 'Amount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '10000',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'BatchId' => [
                                        'type' => 'string',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ActiveCodeInsufficient',
                        'errorMessage' => 'Active code quota is insufficient.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DevicesCountExceedLimit',
                        'errorMessage' => 'The devices count exceed the limit.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DevicesExceedUnreleasedProductLimit',
                        'errorMessage' => 'Devices count exceed the limit of unreleased product.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'FreezeStorageOrder' => [
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
                    'name' => 'DeviceNoOwner',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IotId',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Copies' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Specification' => [
                                        'type' => 'string',
                                    ],
                                    'RecordType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'CommodityCode' => [
                                        'type' => 'string',
                                    ],
                                    'PreConsume' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'EndTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'UserId' => [
                                        'type' => 'string',
                                    ],
                                    'IdentityId' => [
                                        'type' => 'string',
                                    ],
                                    'StartTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'EndTime' => [
                                        'type' => 'string',
                                    ],
                                    'StartTime' => [
                                        'type' => 'string',
                                    ],
                                    'OutOrderNo' => [
                                        'type' => 'string',
                                    ],
                                    'Price' => [
                                        'type' => 'string',
                                    ],
                                    'OrderType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'PaymentStatus' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'UserName' => [
                                        'type' => 'string',
                                    ],
                                    'OrderId' => [
                                        'type' => 'string',
                                    ],
                                    'IotId' => [
                                        'type' => 'string',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNoOwner',
                        'errorMessage' => 'Device has no owner.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceOwnerChanged',
                        'errorMessage' => 'Device owner changed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidStorageOrder',
                        'errorMessage' => 'Invalid storage order.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
                        'errorMessage' => 'Get storage order lock failed try again later.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'GenerateDeviceByBatchId' => [
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
                    'name' => 'BatchId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'BatchId' => [
                                        'type' => 'string',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ParamBatchIdInvalid',
                        'errorMessage' => 'Parameter batchId is invalid.',
                    ],
                    [
                        'errorCode' => 'iot.vision.BatchHasCreated',
                        'errorMessage' => 'This batch task has been created.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNameChecking',
                        'errorMessage' => 'Device names are checking.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNameCheckFailed',
                        'errorMessage' => 'Device names check failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ActiveCodeInsufficient',
                        'errorMessage' => 'Active code quota is insufficient.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DevicesCountExceedLimit',
                        'errorMessage' => 'The devices count exceed the limit.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DevicesExceedUnreleasedProductLimit',
                        'errorMessage' => 'Devices count exceed the limit of unreleased product.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'QueryBatchStatus' => [
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
                    'name' => 'BatchId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'InvalidDetailList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DeviceName' => [
                                                    'type' => 'string',
                                                ],
                                                'ErrorMsg' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'InvalidList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'ValidList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'QueryDeviceDetail' => [
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
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备所属产品的**ProductKey**。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**DeviceName**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a1Bw******',
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备的设备名称。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**ProductKey**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Device01',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备的设备ID。'."\n"
                            .'><notice>'."\n"
                            .'**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '项目ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a123qs*****sy4QU',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
                                'type' => 'string',
                                'example' => '400',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'Request parameter error.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'E55***B7-4***-4***-8***-D3******F565',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用成功，返回的数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '设备状态。取值：'."\n"
                                            ."\n"
                                            .'- **ONLINE**：设备在线。'."\n"
                                            .'- **OFFLINE**：设备离线。'."\n"
                                            .'- **UNACTIVE**：设备未激活。'."\n"
                                            .'- **DISABLE**：设备已禁用。',
                                        'type' => 'string',
                                        'example' => 'ONLINE',
                                    ],
                                    'ProductName' => [
                                        'description' => '设备所属产品的名称。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'DeviceName' => [
                                        'description' => '设备名称。',
                                        'type' => 'string',
                                        'example' => 'Device01',
                                    ],
                                    'CreateTime' => [
                                        'description' => '设备的创建时间，13位毫秒级时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1834500000000',
                                    ],
                                    'FirmwareVersion' => [
                                        'description' => '设备默认（default）OTA模块的版本号。',
                                        'type' => 'string',
                                        'example' => 'V1.0.0.0',
                                    ],
                                    'OnlineTime' => [
                                        'description' => '设备最后上线时间，13位毫秒级时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2298700000000',
                                    ],
                                    'ActiveTime' => [
                                        'description' => '设备的激活时间，13位毫秒级时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1934500000000',
                                    ],
                                    'ProductKey' => [
                                        'description' => '设备所属产品的**ProductKey**。',
                                        'type' => 'string',
                                        'example' => 'a1Bw******',
                                    ],
                                    'IpAddress' => [
                                        'description' => '设备的IP地址。',
                                        'type' => 'string',
                                        'example' => '10.***.***.***',
                                    ],
                                    'NodeType' => [
                                        'description' => '节点类型，取值：'."\n"
                                            ."\n"
                                            .'- **0**：设备。设备不能挂载子设备。'."\n"
                                            .'- **1**：网关。网关可以挂载子设备。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'Region' => [
                                        'description' => '设备所在地域的ID。',
                                        'type' => 'string',
                                        'example' => 'cn-shanghai',
                                    ],
                                    'DeviceSecret' => [
                                        'description' => '设备密钥。',
                                        'type' => 'string',
                                        'example' => 'mz2Canp4GB7qRVf1OYPNtRqB2anu****',
                                    ],
                                    'Nickname' => [
                                        'description' => '设备的备注名称。',
                                        'type' => 'string',
                                        'example' => 'detectors_in_beijing',
                                    ],
                                    'IotId' => [
                                        'description' => '设备ID。',
                                        'type' => 'string',
                                        'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidIotInstance',
                        'errorMessage' => 'Invalid iot instance.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ProductNotExist',
                        'errorMessage' => 'Product not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNameFormatInvalid',
                        'errorMessage' => 'Device name format invalid.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InstanceArrearage',
                        'errorMessage' => 'Instance arrearage.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ProductKeyFormatInvalid',
                        'errorMessage' => 'Product key format invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                    [
                        'errorCode' => 'iot.vision.HasNoAccessPermission',
                        'errorMessage' => 'Has no access permission.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Status\\": \\"ONLINE\\",\\n    \\"ProductName\\": \\"test\\",\\n    \\"DeviceName\\": \\"Device01\\",\\n    \\"CreateTime\\": 1834500000000,\\n    \\"FirmwareVersion\\": \\"V1.0.0.0\\",\\n    \\"OnlineTime\\": 2298700000000,\\n    \\"ActiveTime\\": 1934500000000,\\n    \\"ProductKey\\": \\"a1Bw******\\",\\n    \\"IpAddress\\": \\"10.***.***.***\\",\\n    \\"NodeType\\": 0,\\n    \\"Region\\": \\"cn-shanghai\\",\\n    \\"DeviceSecret\\": \\"mz2Canp4GB7qRVf1OYPNtRqB2anu****\\",\\n    \\"Nickname\\": \\"detectors_in_beijing\\",\\n    \\"IotId\\": \\"C47T6xwp6ms4bNlkHRWCg4****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDeviceDetailResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <Status>ONLINE</Status>\\n    <ProductName>test</ProductName>\\n    <DeviceSecret>mz2Canp4GB7qRVf1OYPNtRqB2anu****</DeviceSecret>\\n    <CreateTime>1834500000000</CreateTime>\\n    <OnlineTime>2298700000000</OnlineTime>\\n    <FirmwareVersion>V1.0.0.0</FirmwareVersion>\\n    <IotId>C47T6xwp6ms4bNlkHRWCg4****</IotId>\\n    <ActiveTime>1934500000000</ActiveTime>\\n    <NodeType>0</NodeType>\\n    <Region>cn-shanghai</Region>\\n    <IpAddress>10.***.***.***</IpAddress>\\n    <ProductKey>a1Bw******</ProductKey>\\n    <Nickname>detectors_in_beijing</Nickname>\\n    <DeviceName>Device01</DeviceName>\\n</Data>\\n<Success>true</Success>\\n</QueryDeviceDetailResponse>","errorExample":""}]',
            'title' => 'QueryDeviceDetail',
            'summary' => '调用该接口查询指定设备的详细信息。',
            'description' => '## QPS限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。'."\n"
                ."\n"
                .'> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryFreeStorage' => [
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
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IotId',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'EndTime' => [
                                        'type' => 'string',
                                    ],
                                    'Type' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'StartTime' => [
                                        'type' => 'string',
                                    ],
                                    'EndTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'Months' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Expired' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'RemainQuota' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'StartTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'Consumed' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Lifecycle' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNoOwner',
                        'errorMessage' => 'Device has no owner.',
                    ],
                    [
                        'errorCode' => 'iot.vision.FreeStorageQuotaLimit',
                        'errorMessage' => 'No enough free storage quota or exceed limit.',
                    ],
                    [
                        'errorCode' => 'iot.vision.GetDeviceInfoFailed',
                        'errorMessage' => 'Get device info failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
                        'errorMessage' => 'Get storage order lock failed try again later.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'QueryDevicesDownloadUrl' => [
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
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BatchId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'OssDownloadUrl' => [
                                        'type' => 'string',
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
                        'errorCode' => 'iot.system.SystemException',
                        'errorMessage' => 'An internal error occurred. Try again later.',
                    ],
                    [
                        'errorCode' => 'iot.common.AuthActionPermissionDeny',
                        'errorMessage' => 'The authorization fails.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.lv.requestAuthError',
                        'errorMessage' => 'Request auth error.',
                    ],
                    [
                        'errorCode' => 'iot.lv.requestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                ],
            ],
        ],
        'QueryGenerateDevicesInfoList' => [
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
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '50',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'BatchId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '1000',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'PageNo' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'PageSize' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Total' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'ListData' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DeviceName' => [
                                                    'type' => 'string',
                                                ],
                                                'IotId' => [
                                                    'type' => 'string',
                                                ],
                                                'DeviceSecret' => [
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ProductNotExist',
                        'errorMessage' => 'Product not exist.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'QueryGenerateDevicesRecord' => [
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
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '指定显示返回结果中的第几页，最大值为1,000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '起始时间的毫秒级时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9999999999999',
                        'minimum' => '1',
                        'example' => '1690819200000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '结束时间的毫秒级时间戳。'."\n"
                            ."\n"
                            .'><notice> 起止时间间隔不能超过30天。'."\n"
                            .'></notice>',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '9999999999999',
                        'minimum' => '1',
                        'example' => '1659283200000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '调用结果状态码：'."\n"
                                    .'- 调用成功，返回200。'."\n"
                                    .'- 调用失败，返回错误码。详细信息，请参见下文**错误码**。',
                                'type' => 'string',
                                'example' => '400',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'Request parameter error.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'E5******-4***-***B-8**E-D3********65',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用成功，返回的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNo' => [
                                        'description' => '当前页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页显示的记录数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Total' => [
                                        'description' => '总记录数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                    'ListData' => [
                                        'description' => '设备注册记录的详细信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ApplyDeviceCount' => [
                                                    'description' => '申请的设备数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '133',
                                                ],
                                                'SpecCode' => [
                                                    'description' => '激活码规格Code。取值：'."\n"
                                                        ."\n"
                                                        .'- **Consumer_IPC_512Kbps**：消费类IPC 512Kbps。'."\n"
                                                        .'- **Consumer_IPC_1Mbps**：消费类IPC 1Mbps。'."\n"
                                                        .'- **Consumer_IPC_2Mbps**：消费类IPC 2Mbps。'."\n"
                                                        .'- **Consumer_IPC_4Mbps**：消费类IPC 4Mbps。'."\n"
                                                        .'- **Industry_IPC**：行业类IPC。'."\n"
                                                        .'- **NVR_Less64**：NVR小于等于64路。'."\n"
                                                        .'- **NVR_Higher64**：NVR大于64路。',
                                                    'type' => 'string',
                                                    'example' => 'Consumer_IPC_512Kbps',
                                                ],
                                                'ProductKey' => [
                                                    'description' => '设备所属产品的**ProductKey**。',
                                                    'type' => 'string',
                                                    'example' => 'a3w******',
                                                ],
                                                'ProductName' => [
                                                    'description' => '设备所属产品的名称。',
                                                    'type' => 'string',
                                                    'example' => '电饭煲',
                                                ],
                                                'CreateTime' => [
                                                    'description' => '批量注册设备任务的提交时间，格式为毫秒级时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1690819200000',
                                                ],
                                                'BatchStatus' => [
                                                    'description' => '批量注册的批次状态。'."\n"
                                                        ."\n"
                                                        .'- **CREATE**：正在创建设备。'."\n"
                                                        .'- **CREATE_SUCCESS**：申请单中的所有设备创建成功。'."\n"
                                                        .'- **CREATE_FAILED**：申请单中有设备创建失败。',
                                                    'type' => 'string',
                                                    'example' => 'CREATE',
                                                ],
                                                'NetworkType' => [
                                                    'description' => '产品的连网方式。取值：'."\n"
                                                        ."\n"
                                                        .'- **WIFI**：Wi-Fi。'."\n"
                                                        .'- **CELLULAR**：蜂窝GPRS/3G/4G/5G。'."\n"
                                                        .'- **ETHERNET**：以太网。'."\n"
                                                        .'- **OTHER**：其他网络类型。',
                                                    'type' => 'string',
                                                    'example' => 'WIFI',
                                                ],
                                                'OperateUid' => [
                                                    'description' => '操作账号的UID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '110000000000',
                                                ],
                                                'SuccessCount' => [
                                                    'description' => '批量注册设备成功的设备数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '5',
                                                ],
                                                'BatchId' => [
                                                    'description' => '申请的批次ID。',
                                                    'type' => 'string',
                                                    'example' => '1508******195',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E5******-4***-***B-8**E-D3********65\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 1,\\n    \\"Total\\": 5,\\n    \\"ListData\\": [\\n      {\\n        \\"ApplyDeviceCount\\": 133,\\n        \\"SpecCode\\": \\"Consumer_IPC_512Kbps\\",\\n        \\"ProductKey\\": \\"a3w******\\",\\n        \\"ProductName\\": \\"电饭煲\\",\\n        \\"CreateTime\\": 1690819200000,\\n        \\"BatchStatus\\": \\"CREATE\\",\\n        \\"NetworkType\\": \\"WIFI\\",\\n        \\"OperateUid\\": 110000000000,\\n        \\"SuccessCount\\": 5,\\n        \\"BatchId\\": \\"1508******195\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryGenerateDevicesRecordResponse>\\n<RequestId>E5******-4***-***B-8**E-D3********65</RequestId>\\n<Data>\\n    <PageSize>1</PageSize>\\n    <Total>5</Total>\\n    <PageNo>1</PageNo>\\n    <ListData>\\n        <SpecCode>Consumer_IPC_512Kbps</SpecCode>\\n        <OperateUid>110000000000</OperateUid>\\n        <ProductName>电饭煲</ProductName>\\n        <NetworkType>WIFI</NetworkType>\\n        <BatchStatus>CREATE</BatchStatus>\\n        <CreateTime>1690819200000</CreateTime>\\n        <BatchId>1508******195</BatchId>\\n        <SuccessCount>5</SuccessCount>\\n        <ProductKey>a3w******</ProductKey>\\n        <ApplyDeviceCount>133</ApplyDeviceCount>\\n    </ListData>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryGenerateDevicesRecordResponse>","errorExample":""}]',
            'title' => 'QueryGenerateDevicesRecord',
            'summary' => '调用该接口查询设备批量注册的记录信息。',
            'description' => '## QPS限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。'."\n"
                ."\n"
                .'> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryStorageCommodityList' => [
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Specification' => [
                                            'type' => 'string',
                                        ],
                                        'CommodityCode' => [
                                            'type' => 'string',
                                        ],
                                        'RecordType' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'Price' => [
                                            'type' => 'string',
                                        ],
                                        'Months' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'CommodityName' => [
                                            'type' => 'string',
                                        ],
                                        'Lifecycle' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'QueryStorageOrder' => [
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
                    'name' => 'DeviceNoOwner',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IotId',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Copies' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Specification' => [
                                        'type' => 'string',
                                    ],
                                    'RecordType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'CommodityCode' => [
                                        'type' => 'string',
                                    ],
                                    'PreConsume' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'EndTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'UserId' => [
                                        'type' => 'string',
                                    ],
                                    'IdentityId' => [
                                        'type' => 'string',
                                    ],
                                    'StartTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'EndTime' => [
                                        'type' => 'string',
                                    ],
                                    'StartTime' => [
                                        'type' => 'string',
                                    ],
                                    'OutOrderNo' => [
                                        'type' => 'string',
                                    ],
                                    'Price' => [
                                        'type' => 'string',
                                    ],
                                    'OrderType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'PaymentStatus' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'UserName' => [
                                        'type' => 'string',
                                    ],
                                    'OrderId' => [
                                        'type' => 'string',
                                    ],
                                    'IotId' => [
                                        'type' => 'string',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNoOwner',
                        'errorMessage' => 'Device has no owner.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidStorageOrder',
                        'errorMessage' => 'Invalid storage order.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceOwnerChanged',
                        'errorMessage' => 'Device owner changed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
                        'errorMessage' => 'Get storage order lock failed try again later.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'QueryStorageOrderList' => [
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
                    'name' => 'DeviceNoOwner',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '200',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '1000',
                        'minimum' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'PageNo' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'PageSize' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Total' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'PageCount' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'StorageOrderList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'Copies' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'Specification' => [
                                                    'type' => 'string',
                                                ],
                                                'RecordType' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'CommodityCode' => [
                                                    'type' => 'string',
                                                ],
                                                'PreConsume' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'EndTimeUTC' => [
                                                    'type' => 'string',
                                                ],
                                                'UserId' => [
                                                    'type' => 'string',
                                                ],
                                                'IdentityId' => [
                                                    'type' => 'string',
                                                ],
                                                'StartTimeUTC' => [
                                                    'type' => 'string',
                                                ],
                                                'EndTime' => [
                                                    'type' => 'string',
                                                ],
                                                'StartTime' => [
                                                    'type' => 'string',
                                                ],
                                                'OutOrderNo' => [
                                                    'type' => 'string',
                                                ],
                                                'Price' => [
                                                    'type' => 'string',
                                                ],
                                                'OrderType' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'PaymentStatus' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'UserName' => [
                                                    'type' => 'string',
                                                ],
                                                'OrderId' => [
                                                    'type' => 'string',
                                                ],
                                                'IotId' => [
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNoOwner',
                        'errorMessage' => 'Device has no owner.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceOwnerChanged',
                        'errorMessage' => 'Device owner changed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
                        'errorMessage' => 'Get storage order lock failed try again later.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'TransferStorageOrder' => [
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
                    'name' => 'EventRecordDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '30',
                        'minimum' => '0',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'DstIotId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SupportCrossIdentityTransfer',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'SrcIotId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SrcOrderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EventRecordProlong',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'ImmediateUse',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EnableDefaultPlan',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'PreRecordDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '5',
                        'minimum' => '0',
                        'default' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Copies' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Specification' => [
                                        'type' => 'string',
                                    ],
                                    'RecordType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'CommodityCode' => [
                                        'type' => 'string',
                                    ],
                                    'PreConsume' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'EndTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'UserId' => [
                                        'type' => 'string',
                                    ],
                                    'IdentityId' => [
                                        'type' => 'string',
                                    ],
                                    'StartTimeUTC' => [
                                        'type' => 'string',
                                    ],
                                    'EndTime' => [
                                        'type' => 'string',
                                    ],
                                    'StartTime' => [
                                        'type' => 'string',
                                    ],
                                    'OutOrderNo' => [
                                        'type' => 'string',
                                    ],
                                    'Price' => [
                                        'type' => 'string',
                                    ],
                                    'OrderType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'PaymentStatus' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'UserName' => [
                                        'type' => 'string',
                                    ],
                                    'OrderId' => [
                                        'type' => 'string',
                                    ],
                                    'IotId' => [
                                        'type' => 'string',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNoOwner',
                        'errorMessage' => 'Device has no owner.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceOwnerChanged',
                        'errorMessage' => 'Device owner changed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidStorageOrder',
                        'errorMessage' => 'Invalid storage order.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
                        'errorMessage' => 'Get storage order lock failed try again later.',
                    ],
                    [
                        'errorCode' => 'iot.vision.StorageOrderStatusInvalid',
                        'errorMessage' => 'Storage order status invalid.',
                    ],
                    [
                        'errorCode' => 'iot.vision.TargetDeviceOwnerDifferent',
                        'errorMessage' => 'Target device owner is different.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'UploadDeviceNameList' => [
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
                    'name' => 'DeviceNames',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'required' => true,
                        'maxItems' => 10000,
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'BatchId' => [
                                        'type' => 'string',
                                    ],
                                    'InvalidDetailList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DeviceName' => [
                                                    'type' => 'string',
                                                ],
                                                'ErrorMsg' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'RepeatedDeviceNameList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'InvalidDeviceNameList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ActiveCodeInsufficient',
                        'errorMessage' => 'Active code quota is insufficient.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DevicesCountExceedLimit',
                        'errorMessage' => 'The devices count exceed the limit.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DevicesExceedUnreleasedProductLimit',
                        'errorMessage' => 'Devices count exceed the limit of unreleased product.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'GetThingEventSnapshot' => [
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
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物模型的事件标识符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'AlarmType',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备所属产品的**ProductKey**。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**DeviceName**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a1Bw******',
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备的设备名称。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**ProductKey**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Device01',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备的设备ID。'."\n"
                            .'><notice>'."\n"
                            .'**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
                                'type' => 'string',
                                'example' => '400',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'Unexpected internal error.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'E55***B7-4***-4***-8***-D3******F565',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用成功，返回的数据。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'EventType' => [
                                            'description' => '事件类型。'."\n"
                                                ."\n"
                                                .'- **info**：信息。'."\n"
                                                .'- **alert**：告警。'."\n"
                                                .'- **error**：故障。',
                                            'type' => 'string',
                                            'example' => 'alert',
                                        ],
                                        'EventCode' => [
                                            'description' => '事件Code。',
                                            'type' => 'string',
                                            'example' => 'IntelligentAlarm',
                                        ],
                                        'Identifier' => [
                                            'description' => '事件标识符。',
                                            'type' => 'string',
                                            'example' => 'IntelligentAlarm',
                                        ],
                                        'Timestamp' => [
                                            'description' => '事件发生的时间戳。单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1700010288668',
                                        ],
                                        'EventBody' => [
                                            'description' => '事件内容。',
                                            'type' => 'string',
                                            'example' => '{\\"EventList \\":[{\\"AlarmPicID \\":\\"\\",\\"EventTime \\":\\"1700010288542 \\",\\"AlarmType \\":1,\\"AlarmPicSize \\":1,\\"Data \\":\\"test \\"}]}',
                                        ],
                                        'IotId' => [
                                            'description' => '设备ID。',
                                            'type' => 'string',
                                            'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
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
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidIotInstance',
                        'errorMessage' => 'Invalid iot instance.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ProductNotExist',
                        'errorMessage' => 'Product not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ThingModelNotExist',
                        'errorMessage' => 'Thing model not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ThingModelIdentifierNotExist',
                        'errorMessage' => 'Thing model identifier not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InstanceArrearage',
                        'errorMessage' => 'Instance arrearage.',
                    ],
                    [
                        'errorCode' => 'iot.vision.GetThingEventSnapshotFailed',
                        'errorMessage' => 'Get thing event snapshot failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ThingEventNotFound',
                        'errorMessage' => 'Thing event not found.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                    [
                        'errorCode' => 'iot.vision.HasNoAccessPermission',
                        'errorMessage' => 'Has no access permission.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Unexpected internal error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"EventType\\": \\"alert\\",\\n      \\"EventCode\\": \\"IntelligentAlarm\\",\\n      \\"Identifier\\": \\"IntelligentAlarm\\",\\n      \\"Timestamp\\": 1700010288668,\\n      \\"EventBody\\": \\"{\\\\\\\\\\\\\\"EventList \\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"AlarmPicID \\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"EventTime \\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1700010288542 \\\\\\\\\\\\\\",\\\\\\\\\\\\\\"AlarmType \\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"AlarmPicSize \\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"Data \\\\\\\\\\\\\\":\\\\\\\\\\\\\\"test \\\\\\\\\\\\\\"}]}\\",\\n      \\"IotId\\": \\"C47T6xwp6ms4bNlkHRWCg4****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetThingEventSnapshotResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <IotId>C47T6xwp6ms4bNlkHRWCg4****</IotId>\\n    <Identifier>IntelligentAlarm</Identifier>\\n    <EventBody>{\\"EventList \\":[{\\"AlarmPicID \\":\\"\\",\\"EventTime \\":\\"1700010288542 \\",\\"AlarmType \\":1,\\"AlarmPicSize \\":1,\\"Data \\":\\"test \\"}]}</EventBody>\\n    <EventType>alert</EventType>\\n    <Timestamp>1700010288668</Timestamp>\\n    <EventCode>IntelligentAlarm</EventCode>\\n</Data>\\n<Success>true</Success>\\n</GetThingEventSnapshotResponse>","errorExample":""}]',
            'title' => '查询物模型事件的快照',
            'description' => '## QPS限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。'."\n"
                ."\n"
                .'> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'BatchBindDevice' => [
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
                    'name' => 'OpenId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OpenIdAppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IdentityId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ProductKey' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'DeviceName' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'IotId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'required' => true,
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'BindDeviceList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'BindResultMessage' => [
                                                    'type' => 'string',
                                                ],
                                                'ProductKey' => [
                                                    'type' => 'string',
                                                ],
                                                'BindResultCode' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'DeviceName' => [
                                                    'type' => 'string',
                                                ],
                                                'IotId' => [
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
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.GetAccountInfoFailed',
                        'errorMessage' => 'Get account info failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.AccountNotFound',
                        'errorMessage' => 'Account not found.',
                    ],
                    [
                        'errorCode' => 'iot.vision.TenantMismatch',
                        'errorMessage' => 'Caller tenant and account belong tenant mismatch.',
                    ],
                    [
                        'errorCode' => 'iot.vision.IdentityAppKeyProductNotBind',
                        'errorMessage' => 'The app associated with the identityId does not have permission to access the product.',
                    ],
                    [
                        'errorCode' => 'iot.vision.BindFailed',
                        'errorMessage' => 'Bind account and device failed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'GetAccountById' => [
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
                    'name' => 'OpenId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '三方平台用户ID。'."\n"
                            .'><notice> 如果传入该参数，需同时传入**OpenIdAppKey**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => '60yqjd1**************************561da00851',
                    ],
                ],
                [
                    'name' => 'OpenIdAppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '三方平台颁发的AppKey。'."\n"
                            ."\n"
                            .'><notice> 如果传入该参数，需同时传入**OpenId**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => '76****57',
                    ],
                ],
                [
                    'name' => 'IdentityId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户身份ID。'."\n"
                            ."\n"
                            .'><notice> **IdentityId**作为用户标识符，和**OpenId**与**OpenIdAppKey**组合是一一对应的关系。如果传入该参数，则无需传入**OpenId**和**OpenIdAppKey**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5035op97******************a63994',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
                                'type' => 'string',
                                'example' => '400',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'Unexpected internal error.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'E55***B7-4***-4***-8***-D3******F565',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用成功，返回的数据。',
                                'type' => 'object',
                                'properties' => [
                                    'LoginName' => [
                                        'description' => '账号登录名称。',
                                        'type' => 'string',
                                        'example' => '18*******20',
                                    ],
                                    'Email' => [
                                        'description' => '邮箱地址。',
                                        'type' => 'string',
                                        'example' => '******',
                                    ],
                                    'IdentityId' => [
                                        'description' => '用户身份ID。',
                                        'type' => 'string',
                                        'example' => '5035op97******************a63994',
                                    ],
                                    'LastLoginTime' => [
                                        'description' => '最后登录时间，13位毫秒级时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1700209499000',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '账号创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1700189358000',
                                    ],
                                    'NickName' => [
                                        'description' => '用户昵称。',
                                        'type' => 'string',
                                        'example' => '18*******20',
                                    ],
                                    'GmtModified' => [
                                        'description' => '账号修改时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1700209499000',
                                    ],
                                    'Phone' => [
                                        'description' => '手机号。',
                                        'type' => 'string',
                                        'example' => '18*******20',
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
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.GetAccountInfoFailed',
                        'errorMessage' => 'Get account info failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.AccountNotFound',
                        'errorMessage' => 'Account not found.',
                    ],
                    [
                        'errorCode' => 'iot.vision.TenantMismatch',
                        'errorMessage' => 'Caller tenant and account belong tenant mismatch.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Unexpected internal error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"LoginName\\": \\"18*******20\\",\\n    \\"Email\\": \\"******\\",\\n    \\"IdentityId\\": \\"5035op97******************a63994\\",\\n    \\"LastLoginTime\\": 1700209499000,\\n    \\"GmtCreate\\": 1700189358000,\\n    \\"NickName\\": \\"18*******20\\",\\n    \\"GmtModified\\": 1700209499000,\\n    \\"Phone\\": \\"18*******20\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAccountByIdResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <LastLoginTime>1700209499000</LastLoginTime>\\n    <LoginName>18*******20</LoginName>\\n    <GmtCreate>1700189358000</GmtCreate>\\n    <Email>******</Email>\\n    <Phone>18*******20</Phone>\\n    <GmtModified>1700209499000</GmtModified>\\n    <IdentityId>5035op97******************a63994</IdentityId>\\n    <NickName>18*******20</NickName>\\n</Data>\\n<Success>true</Success>\\n</GetAccountByIdResponse>","errorExample":""}]',
            'title' => 'GetAccountById',
            'summary' => '调用该接口根据用户身份ID（IdentityId）或三方平台用户ID（OpenId）查询用户账号信息。',
            'description' => '## QPS限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。'."\n"
                ."\n"
                .'> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetDeviceStatus' => [
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
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备所属产品的**ProductKey**。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**DeviceName**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a1Bw******',
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备的设备名称。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**ProductKey**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Device01',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备的设备ID。'."\n"
                            .'><notice>'."\n"
                            .'**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
                                'type' => 'string',
                                'example' => '400',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'Unexpected internal error.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'E55***B7-4***-4***-8***-D3******F565',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用成功，返回的数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '设备当前状态。'."\n"
                                            ."\n"
                                            .'- **ONLINE**：设备在线。'."\n"
                                            .'- **OFFLINE**：设备离线。'."\n"
                                            .'- **UNACTIVE**：设备未激活。'."\n"
                                            .'- **DISABLE**：设备已禁用。',
                                        'type' => 'string',
                                        'example' => 'ONLINE',
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
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidIotInstance',
                        'errorMessage' => 'Invalid iot instance.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ProductNotExist',
                        'errorMessage' => 'Product not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InstanceArrearage',
                        'errorMessage' => 'Instance arrearage.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                    [
                        'errorCode' => 'iot.vision.HasNoAccessPermission',
                        'errorMessage' => 'Has no access permission.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Unexpected internal error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Status\\": \\"ONLINE\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDeviceStatusResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <Status>ONLINE</Status>\\n</Data>\\n<Success>true</Success>\\n</GetDeviceStatusResponse>","errorExample":""}]',
            'title' => 'GetDeviceStatus',
            'summary' => '调用该接口查询设备的状态。',
            'description' => '## QPS限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。'."\n"
                ."\n"
                .'> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetSubDeviceList' => [
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
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中每页显示的记录数量，最大值是50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '50',
                        'minimum' => '1',
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关设备所属产品的**ProductKey**。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**DeviceName**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a1Bw******',
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关设备的设备名称。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**ProductKey**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Device01',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '网关设备的设备ID。'."\n"
                            .'><notice>'."\n"
                            .'**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定显示返回结果中的第几页，最大值为100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
                                'type' => 'string',
                                'example' => '400',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'Request parameter error.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'E55***B7-4***-4***-8***-D3******F565',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用成功，返回的数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNo' => [
                                        'description' => '当前页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页显示的记录数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Total' => [
                                        'description' => '总记录数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'SubDeviceList' => [
                                        'description' => '子设备列表信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ProductKey' => [
                                                    'description' => '设备所属产品的**ProductKey**。',
                                                    'type' => 'string',
                                                    'example' => 'wse5******',
                                                ],
                                                'DeviceName' => [
                                                    'description' => '设备名称。',
                                                    'type' => 'string',
                                                    'example' => 'device-test',
                                                ],
                                                'IotId' => [
                                                    'description' => '设备ID。',
                                                    'type' => 'string',
                                                    'example' => 'qswdfrttgg*********',
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
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidIotInstance',
                        'errorMessage' => 'Invalid iot instance.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ProductNotExist',
                        'errorMessage' => 'Product not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InstanceArrearage',
                        'errorMessage' => 'Instance arrearage.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                    [
                        'errorCode' => 'iot.vision.HasNoAccessPermission',
                        'errorMessage' => 'Has no access permission.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 1,\\n    \\"Total\\": 1,\\n    \\"SubDeviceList\\": [\\n      {\\n        \\"ProductKey\\": \\"wse5******\\",\\n        \\"DeviceName\\": \\"device-test\\",\\n        \\"IotId\\": \\"qswdfrttgg*********\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSubDeviceListResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <PageSize/>\\n    <Total>1</Total>\\n    <PageNo/>\\n    <SubDeviceList>\\n        <IotId>qswdfrttgg*********</IotId>\\n        <ProductKey>wse5******</ProductKey>\\n        <DeviceName>device-test</DeviceName>\\n    </SubDeviceList>\\n</Data>\\n<Success>true</Success>\\n</GetSubDeviceListResponse>","errorExample":""}]',
            'title' => 'GetSubDeviceList',
            'summary' => '调用该接口查询网关设备的子设备列表。',
            'description' => '## QPS限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。'."\n"
                ."\n"
                .'> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetThingPropertySnapshot' => [
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
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备所属产品的**ProductKey**。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**DeviceName**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a1Bw******',
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备的设备名称。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**ProductKey**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Device01',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备的设备ID。'."\n"
                            .'><notice>'."\n"
                            .'**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
                                'type' => 'string',
                                'example' => '400',
                            ],
                            'Data' => [
                                'description' => '调用成功，返回的属性数据。',
                                'type' => 'string',
                                'example' => '{\\"StreamVideoQuality\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"MotionDetectSensitivity\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"ImageFlipState\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"SubStreamVideoQuality\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"AlarmSwitch\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"AlarmFrequencyLevel\\":{\\"time\\":1700009930921,\\"value\\":\\"10\\"}}',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'Request parameter error.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'E55***B7-4***-4***-8***-D3******F565',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidIotInstance',
                        'errorMessage' => 'Invalid iot instance.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ProductNotExist',
                        'errorMessage' => 'Product not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ThingModelNotExist',
                        'errorMessage' => 'Thing model not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InstanceArrearage',
                        'errorMessage' => 'Instance arrearage.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                    [
                        'errorCode' => 'iot.vision.HasNoAccessPermission',
                        'errorMessage' => 'Has no access permission.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"Data\\": \\"{\\\\\\\\\\\\\\"StreamVideoQuality\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"time\\\\\\\\\\\\\\":1699951400324,\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"MotionDetectSensitivity\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"time\\\\\\\\\\\\\\":1699951400324,\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"ImageFlipState\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"time\\\\\\\\\\\\\\":1699951400324,\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"SubStreamVideoQuality\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"time\\\\\\\\\\\\\\":1699951400324,\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"AlarmSwitch\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"time\\\\\\\\\\\\\\":1699951400324,\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"AlarmFrequencyLevel\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"time\\\\\\\\\\\\\\":1700009930921,\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"10\\\\\\\\\\\\\\"}}\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetThingPropertySnapshotResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>{\\"StreamVideoQuality\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"MotionDetectSensitivity\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"ImageFlipState\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"SubStreamVideoQuality\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"AlarmSwitch\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"AlarmFrequencyLevel\\":{\\"time\\":1700009930921,\\"value\\":\\"10\\"}}</Data>\\n<Success>true</Success>\\n</GetThingPropertySnapshotResponse>","errorExample":""}]',
            'title' => 'GetThingPropertySnapshot',
            'summary' => '调用该接口查询指定设备的所有物模型属性快照，返回物模型属性的最新数据。',
            'description' => '## QPS限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。'."\n"
                ."\n"
                .'> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'InvokeThingService' => [
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
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物模型的服务标识符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SetNum',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备所属产品的**ProductKey**。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**DeviceName**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a1Bw******',
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备的设备名称。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**ProductKey**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Device01',
                    ],
                ],
                [
                    'name' => 'Args',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要启用服务的入参信息，数据格式为JSON String，例如**Args={"param1":1}**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"param1":1}',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备的设备ID。'."\n"
                            .'><notice>'."\n"
                            .'**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
                                'type' => 'string',
                                'example' => '400',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'Request parameter error.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'E55***B7-4***-4***-8***-D3******F565',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用成功，返回的数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Data' => [
                                        'description' => '调用服务结果，JSON字符串。',
                                        'type' => 'string',
                                        'example' => '{"param1":1}',
                                    ],
                                    'MessageId' => [
                                        'description' => '云端向设备下发服务调用的消息ID。',
                                        'type' => 'string',
                                        'example' => 'abcabcabc1234****',
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
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidIotInstance',
                        'errorMessage' => 'Invalid iot instance.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ProductNotExist',
                        'errorMessage' => 'Product not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ThingModelNotExist',
                        'errorMessage' => 'Thing model not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ThingModelIdentifierNotExist',
                        'errorMessage' => 'Thing model identifier not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InstanceArrearage',
                        'errorMessage' => 'Instance arrearage.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ServiceParamNotExist',
                        'errorMessage' => 'Invoke service failed as service param not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ServiceNotFound',
                        'errorMessage' => 'Invoke service failed as service not found.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceInactive',
                        'errorMessage' => 'Device inactive.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DevcieOffline',
                        'errorMessage' => 'Device offline.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ServiceEnumSpecError',
                        'errorMessage' => 'Service enum spec error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ServiceResponseTimeout',
                        'errorMessage' => 'Invoke service response timeout.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvokeServiceFailed',
                        'errorMessage' => 'Invoke service failed:%s',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                    [
                        'errorCode' => 'iot.vision.HasNoAccessPermission',
                        'errorMessage' => 'Has no access permission.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Data\\": \\"{\\\\\\"param1\\\\\\":1}\\",\\n    \\"MessageId\\": \\"abcabcabc1234****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<InvokeThingServiceResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <Data>{\\"param1\\":1}</Data>\\n    <MessageId>abcabcabc1234****</MessageId>\\n</Data>\\n<Success>true</Success>\\n</InvokeThingServiceResponse>","errorExample":""}]',
            'title' => 'InvokeThingService',
            'summary' => '调用该接口在单个设备上调用指定服务。',
            'description' => '## QPS限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为200。'."\n"
                ."\n"
                .'> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListBindingAccountByDevice' => [
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
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中每页显示的记录数量，最大值是50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '50',
                        'minimum' => '1',
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备所属产品的**ProductKey**。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**DeviceName**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a1Bw******',
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备的设备名称。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**ProductKey**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Device01',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备的设备ID。'."\n"
                            .'><notice>'."\n"
                            .'**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定显示返回结果中的第几页，最大值为100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Owned',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户和设备绑定类型。'."\n"
                            ."\n"
                            .'- **0**：表示分享用户。'."\n"
                            .'- **1**：表示管理员用户。'."\n"
                            .'- 不传则查询所有用户。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
                                'type' => 'string',
                                'example' => '400',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'Unexpected internal error.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'E55***B7-4***-4***-8***-D3******F565',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '调用成功，返回的数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNo' => [
                                        'description' => '当前页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页显示的记录数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Total' => [
                                        'description' => '总记录数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'AccountList' => [
                                        'description' => '用户列表信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'IdentityAlias' => [
                                                    'description' => '用户显示名称。',
                                                    'type' => 'string',
                                                    'example' => '18*******20',
                                                ],
                                                'IdentityId' => [
                                                    'description' => '用户身份ID。',
                                                    'type' => 'string',
                                                    'example' => '5035op97******************a63994',
                                                ],
                                                'BindTime' => [
                                                    'description' => '设备绑定用户的时间，13位毫秒级时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2222220000000',
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
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.TenantMismatch',
                        'errorMessage' => 'Caller tenant and account belong tenant mismatch.',
                    ],
                    [
                        'errorCode' => 'iot.vision.QueryBindingAccountFailed',
                        'errorMessage' => 'Query binding account failed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Unexpected internal error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 1,\\n    \\"Total\\": 1,\\n    \\"AccountList\\": [\\n      {\\n        \\"IdentityAlias\\": \\"18*******20\\",\\n        \\"IdentityId\\": \\"5035op97******************a63994\\",\\n        \\"BindTime\\": 2222220000000\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListBindingAccountByDeviceResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <PageSize>1</PageSize>\\n    <Total>1</Total>\\n    <PageNo>1</PageNo>\\n    <AccountList>\\n        <BindTime>1700209801000</BindTime>\\n        <IdentityId>5035op97******************a63994</IdentityId>\\n        <IdentityAlias>18*******20</IdentityAlias>\\n    </AccountList>\\n</Data>\\n<Success>true</Success>\\n</ListBindingAccountByDeviceResponse>","errorExample":""}]',
            'title' => 'ListBindingAccountByDevice',
            'summary' => '调用该接口查询指定设备所绑定的用户列表。',
            'description' => '## QPS限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。'."\n"
                ."\n"
                .'> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListBindingDeviceByAccount' => [
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
                    'name' => 'OpenId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OpenIdAppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '50',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'IdentityId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'SubDevice',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'PageNo' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'PageSize' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Total' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'PageCount' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'DeviceList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ProductKey' => [
                                                    'type' => 'string',
                                                ],
                                                'Owned' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'DeviceName' => [
                                                    'type' => 'string',
                                                ],
                                                'NodeType' => [
                                                    'type' => 'string',
                                                ],
                                                'BindTime' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'IotId' => [
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
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.QueryBindingDeviceFailed',
                        'errorMessage' => 'Query binding device failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.GetAccountInfoFailed',
                        'errorMessage' => 'Get account info failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.AccountNotFound',
                        'errorMessage' => 'Account not found.',
                    ],
                    [
                        'errorCode' => 'iot.vision.TenantMismatch',
                        'errorMessage' => 'Caller tenant and account belong tenant mismatch.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'SetThingProperty' => [
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
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备所属产品的**ProductKey**。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**DeviceName**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a1Bw******',
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备的设备名称。'."\n"
                            ."\n"
                            .'><notice>如果传入该参数，需同时传入**ProductKey**。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Device01',
                    ],
                ],
                [
                    'name' => 'Args',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要设置的属性信息，数据格式为JSON。'."\n"
                            ."\n"
                            .'每个属性信息由**标识符**与**属性值**（**key:value**）构成，多个属性用英文逗号隔开。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"Switch":1,"Color":"blue"}',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频设备的设备ID。'."\n"
                            .'><notice>'."\n"
                            .'**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。'."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
                                'type' => 'string',
                                'example' => '400',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'Request parameter error.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'E55***B7-4***-4***-8***-D3******F565',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
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
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InvalidIotInstance',
                        'errorMessage' => 'Invalid iot instance.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ProductNotExist',
                        'errorMessage' => 'Product not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ThingModelNotExist',
                        'errorMessage' => 'Thing model not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.ThingModelIdentifierNotExist',
                        'errorMessage' => 'Thing model identifier not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.DeviceNotExist',
                        'errorMessage' => 'Device not exist.',
                    ],
                    [
                        'errorCode' => 'iot.vision.InstanceArrearage',
                        'errorMessage' => 'Instance arrearage.',
                    ],
                    [
                        'errorCode' => 'iot.vision.SetPropertyFailed',
                        'errorMessage' => 'Set property failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.PropertyNotFound',
                        'errorMessage' => 'Property not found.',
                    ],
                    [
                        'errorCode' => 'iot.vision.PropertyReadOnly',
                        'errorMessage' => 'Property is read only.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                    [
                        'errorCode' => 'iot.vision.HasNoAccessPermission',
                        'errorMessage' => 'Has no access permission.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetThingPropertyResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Success>true</Success>\\n</SetThingPropertyResponse>","errorExample":""}]',
            'title' => 'SetThingProperty',
            'summary' => '调用该接口为指定设备设置属性值。',
            'description' => '## QPS限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。'."\n"
                ."\n"
                .'> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UnbindAllUserByDevice' => [
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
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UnbindSubDevice',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'SubDeviceUnbindResult' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'UnbindResultMessage' => [
                                                    'type' => 'string',
                                                ],
                                                'ProductKey' => [
                                                    'type' => 'string',
                                                ],
                                                'DeviceName' => [
                                                    'type' => 'string',
                                                ],
                                                'UnbindResultCode' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'IotId' => [
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
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.GetAccountInfoFailed',
                        'errorMessage' => 'Get account info failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.AccountNotFound',
                        'errorMessage' => 'Account not found.',
                    ],
                    [
                        'errorCode' => 'iot.vision.TenantMismatch',
                        'errorMessage' => 'Caller tenant and account belong tenant mismatch.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnbindFailed',
                        'errorMessage' => 'Unbind account and device failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.BindingRelationNotFound',
                        'errorMessage' => 'Account and device binding relation not found.',
                    ],
                    [
                        'errorCode' => 'iot.vision.QueryBindingAccountFailed',
                        'errorMessage' => 'Query binding account failed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
        'UnbindDevice' => [
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
                    'name' => 'OpenId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OpenIdAppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IdentityId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UnbindSubDevice',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                        'default' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'ErrorMessage' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'SubDeviceUnbindResult' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'UnbindResultMessage' => [
                                                    'type' => 'string',
                                                ],
                                                'ProductKey' => [
                                                    'type' => 'string',
                                                ],
                                                'DeviceName' => [
                                                    'type' => 'string',
                                                ],
                                                'UnbindResultCode' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'IotId' => [
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
                        'errorCode' => 'iot.vision.UnexpectedInternalError',
                        'errorMessage' => 'Unexpected internal error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestParamError',
                        'errorMessage' => 'Request parameter error.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestFailed',
                        'errorMessage' => 'Request failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.GetAccountInfoFailed',
                        'errorMessage' => 'Get account info failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.AccountNotFound',
                        'errorMessage' => 'Account not found.',
                    ],
                    [
                        'errorCode' => 'iot.vision.TenantMismatch',
                        'errorMessage' => 'Caller tenant and account belong tenant mismatch.',
                    ],
                    [
                        'errorCode' => 'iot.vision.BindingRelationNotFound',
                        'errorMessage' => 'Account and device binding relation not found.',
                    ],
                    [
                        'errorCode' => 'iot.vision.UnbindFailed',
                        'errorMessage' => 'Unbind account and device failed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'iot.vision.RequestAuthFailed',
                        'errorMessage' => 'Request auth failed.',
                    ],
                    [
                        'errorCode' => 'iot.vision.RequestForbidden',
                        'errorMessage' => 'Request forbidden.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'iot.vision.RequestTrafficControl',
                        'errorMessage' => 'Request traffic control.',
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'linkvisual.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'linkvisual.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'linkvisual.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'linkvisual.aliyuncs.com',
        ],
    ],
];
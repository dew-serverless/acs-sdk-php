<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Linkvisual',
    'version' => '2023-06-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'BindStorageOrder',
        1 => 'CheckFreeStorageValid',
        2 => 'ConsumeFreeStorage',
        3 => 'CreateAndPayStorageOrder',
        4 => 'EnableFreeStorage',
        5 => 'EnableStorageOrder',
        6 => 'FreezeFreeStorage',
        7 => 'GenerateDevice',
        8 => 'FreezeStorageOrder',
        9 => 'GenerateDeviceByBatchId',
        10 => 'QueryBatchStatus',
        11 => 'QueryDeviceDetail',
        12 => 'QueryFreeStorage',
        13 => 'QueryDevicesDownloadUrl',
        14 => 'QueryGenerateDevicesInfoList',
        15 => 'QueryGenerateDevicesRecord',
        16 => 'QueryStorageCommodityList',
        17 => 'QueryStorageOrder',
        18 => 'QueryStorageOrderList',
        19 => 'TransferStorageOrder',
        20 => 'UploadDeviceNameList',
        21 => 'GetThingEventSnapshot',
        22 => 'BatchBindDevice',
        23 => 'GetAccountById',
        24 => 'GetDeviceStatus',
        25 => 'GetSubDeviceList',
        26 => 'GetThingPropertySnapshot',
        27 => 'InvokeThingService',
        28 => 'ListBindingAccountByDevice',
        29 => 'ListBindingDeviceByAccount',
        30 => 'SetThingProperty',
        31 => 'UnbindAllUserByDevice',
        32 => 'UnbindDevice',
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
    'BindStorageOrder' => 
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
          'name' => 'EventRecordDuration',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '30',
            'minimum' => '0',
            'default' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'OrderId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
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
          'name' => 'EventRecordProlong',
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
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'MaxRecordFileDuration',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '3600',
            'minimum' => '600',
            'default' => '1800',
          ),
        ),
        8 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'EnableDefaultPlan',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'PreRecordDuration',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5',
            'minimum' => '0',
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
                  'Status' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Copies' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Specification' => 
                  array (
                    'type' => 'string',
                  ),
                  'RecordType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'CommodityCode' => 
                  array (
                    'type' => 'string',
                  ),
                  'PreConsume' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'EndTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'UserId' => 
                  array (
                    'type' => 'string',
                  ),
                  'IdentityId' => 
                  array (
                    'type' => 'string',
                  ),
                  'StartTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'EndTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'StartTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'OutOrderNo' => 
                  array (
                    'type' => 'string',
                  ),
                  'Price' => 
                  array (
                    'type' => 'string',
                  ),
                  'OrderType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'PaymentStatus' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'UserName' => 
                  array (
                    'type' => 'string',
                  ),
                  'OrderId' => 
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DeviceNoOwner',
            'errorMessage' => 'Device has no owner.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.InvalidStorageOrder',
            'errorMessage' => 'Invalid storage order.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.DeviceOwnerChanged',
            'errorMessage' => 'Device owner changed.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
            'errorMessage' => 'Get storage order lock failed try again later.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.GetOwnerIdentityInfoFailed',
            'errorMessage' => 'Get owner identity info failed.',
          ),
          8 => 
          array (
            'errorCode' => 'iot.vision.SetDefaultRecordPlanFailed',
            'errorMessage' => 'Set default record plan failed.',
          ),
          9 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
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
    ),
    'CheckFreeStorageValid' => 
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DeviceNoOwner',
            'errorMessage' => 'Device has no owner.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.FreeStorageQuotaLimit',
            'errorMessage' => 'No enough free storage quota or exceed limit.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.InvalidStorageCommodity',
            'errorMessage' => 'Invalid storage commodity.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.GetDeviceInfoFailed',
            'errorMessage' => 'Get device info failed.',
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
    ),
    'ConsumeFreeStorage' => 
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
          'name' => 'EventRecordProlong',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'EventRecordDuration',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '30',
            'minimum' => '0',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'ImmediateUse',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'EnableDefaultPlan',
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
          'name' => 'PreRecordDuration',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5',
            'minimum' => '0',
            'default' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'Quota',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
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
                  'EndTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'Type' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'StartTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'EndTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'Months' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Expired' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'RemainQuota' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'StartTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'Consumed' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Lifecycle' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DeviceNoOwner',
            'errorMessage' => 'Device has no owner.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.FreeStorageQuotaLimit',
            'errorMessage' => 'No enough free storage quota or exceed limit.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.GetOwnerIdentityInfoFailed',
            'errorMessage' => 'Get owner identity info failed.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.GetDeviceInfoFailed',
            'errorMessage' => 'Get device info failed.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
            'errorMessage' => 'Get storage order lock failed try again later.',
          ),
          8 => 
          array (
            'errorCode' => 'iot.vision.SetDefaultRecordPlanFailed',
            'errorMessage' => 'Set default record plan failed.',
          ),
          9 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
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
    ),
    'CreateAndPayStorageOrder' => 
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
          'name' => 'DeviceNoOwner',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'EventRecordDuration',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '30',
            'minimum' => '0',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
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
          'name' => 'Copies',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'CommodityCode',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'EventRecordProlong',
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
          'name' => 'Specification',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        8 => 
        array (
          'name' => 'ImmediateUse',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'MaxRecordFileDuration',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '3600',
            'minimum' => '600',
            'default' => '1800',
          ),
        ),
        12 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        13 => 
        array (
          'name' => 'EnableDefaultPlan',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        14 => 
        array (
          'name' => 'PreRecordDuration',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5',
            'minimum' => '0',
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
                  'Status' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Copies' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Specification' => 
                  array (
                    'type' => 'string',
                  ),
                  'RecordType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'CommodityCode' => 
                  array (
                    'type' => 'string',
                  ),
                  'PreConsume' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'EndTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'UserId' => 
                  array (
                    'type' => 'string',
                  ),
                  'IdentityId' => 
                  array (
                    'type' => 'string',
                  ),
                  'StartTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'EndTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'StartTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'OutOrderNo' => 
                  array (
                    'type' => 'string',
                  ),
                  'Price' => 
                  array (
                    'type' => 'string',
                  ),
                  'OrderType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'PaymentStatus' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'UserName' => 
                  array (
                    'type' => 'string',
                  ),
                  'OrderId' => 
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DeviceNoOwner',
            'errorMessage' => 'Device has no owner.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.CreateStorageOrderFailed',
            'errorMessage' => 'Create storage order failed.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.GetDeviceInfoFailed',
            'errorMessage' => 'Get device info failed.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.InvalidStorageCommodity',
            'errorMessage' => 'Invalid storage commodity.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.StorageCommodityUnavailable',
            'errorMessage' => 'Storage commodity unavailable.',
          ),
          8 => 
          array (
            'errorCode' => 'iot.vision.GetOwnerIdentityInfoFailed',
            'errorMessage' => 'Get owner identity info failed.',
          ),
          9 => 
          array (
            'errorCode' => 'iot.vision.SetDefaultRecordPlanFailed',
            'errorMessage' => 'Set default record plan failed.',
          ),
          10 => 
          array (
            'errorCode' => 'iot.vision.QueryCommodityPriceFailed',
            'errorMessage' => 'Query commodity price failed.',
          ),
          11 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
            'errorMessage' => 'Get storage order lock failed try again later.',
          ),
          12 => 
          array (
            'errorCode' => 'iot.vision.InvalidStorageOrder',
            'errorMessage' => 'Invalid storage order.',
          ),
          13 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderAlreadyPaid',
            'errorMessage' => 'Storage order had been paid.',
          ),
          14 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderPayFailed',
            'errorMessage' => 'Storage order pay failed.',
          ),
          15 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
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
    ),
    'EnableFreeStorage' => 
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
                  'EndTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'Type' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'StartTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'EndTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'Months' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Expired' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'RemainQuota' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'StartTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'Consumed' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Lifecycle' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DeviceNoOwner',
            'errorMessage' => 'Device has no owner.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.FreeStorageQuotaLimit',
            'errorMessage' => 'No enough free storage quota or exceed limit.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
            'errorMessage' => 'Get storage order lock failed try again later.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.InvalidStorageOrder',
            'errorMessage' => 'Invalid storage order.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
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
    ),
    'EnableStorageOrder' => 
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
          'name' => 'OrderId',
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
                  'Status' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Copies' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Specification' => 
                  array (
                    'type' => 'string',
                  ),
                  'RecordType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'CommodityCode' => 
                  array (
                    'type' => 'string',
                  ),
                  'PreConsume' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'EndTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'UserId' => 
                  array (
                    'type' => 'string',
                  ),
                  'IdentityId' => 
                  array (
                    'type' => 'string',
                  ),
                  'StartTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'EndTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'StartTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'OutOrderNo' => 
                  array (
                    'type' => 'string',
                  ),
                  'Price' => 
                  array (
                    'type' => 'string',
                  ),
                  'OrderType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'PaymentStatus' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'UserName' => 
                  array (
                    'type' => 'string',
                  ),
                  'OrderId' => 
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DeviceNoOwner',
            'errorMessage' => 'Device has no owner.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.InvalidStorageOrder',
            'errorMessage' => 'Invalid storage order.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.DeviceOwnerChanged',
            'errorMessage' => 'Device owner changed.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
            'errorMessage' => 'Get storage order lock failed try again later.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderStatusInvalid',
            'errorMessage' => 'Storage order status invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
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
    ),
    'FreezeFreeStorage' => 
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
                  'EndTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'Type' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'StartTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'EndTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'Months' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Expired' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'RemainQuota' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'StartTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'Consumed' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Lifecycle' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DeviceNoOwner',
            'errorMessage' => 'Device has no owner.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.FreeStorageQuotaLimit',
            'errorMessage' => 'No enough free storage quota or exceed limit.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
            'errorMessage' => 'Get storage order lock failed try again later.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.InvalidStorageOrder',
            'errorMessage' => 'Invalid storage order.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
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
    ),
    'GenerateDevice' => 
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
          'name' => 'Amount',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '10000',
            'minimum' => '1',
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
          'name' => 'ProjectId',
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
                  'BatchId' => 
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
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.ActiveCodeInsufficient',
            'errorMessage' => 'Active code quota is insufficient.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DevicesCountExceedLimit',
            'errorMessage' => 'The devices count exceed the limit.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.DevicesExceedUnreleasedProductLimit',
            'errorMessage' => 'Devices count exceed the limit of unreleased product.',
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
    ),
    'FreezeStorageOrder' => 
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
          'name' => 'DeviceNoOwner',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'OrderId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
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
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Copies' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Specification' => 
                  array (
                    'type' => 'string',
                  ),
                  'RecordType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'CommodityCode' => 
                  array (
                    'type' => 'string',
                  ),
                  'PreConsume' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'EndTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'UserId' => 
                  array (
                    'type' => 'string',
                  ),
                  'IdentityId' => 
                  array (
                    'type' => 'string',
                  ),
                  'StartTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'EndTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'StartTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'OutOrderNo' => 
                  array (
                    'type' => 'string',
                  ),
                  'Price' => 
                  array (
                    'type' => 'string',
                  ),
                  'OrderType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'PaymentStatus' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'UserName' => 
                  array (
                    'type' => 'string',
                  ),
                  'OrderId' => 
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DeviceNoOwner',
            'errorMessage' => 'Device has no owner.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.DeviceOwnerChanged',
            'errorMessage' => 'Device owner changed.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.InvalidStorageOrder',
            'errorMessage' => 'Invalid storage order.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
            'errorMessage' => 'Get storage order lock failed try again later.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
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
    ),
    'GenerateDeviceByBatchId' => 
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
          'name' => 'BatchId',
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
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ProjectId',
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
                  'BatchId' => 
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
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.ParamBatchIdInvalid',
            'errorMessage' => 'Parameter batchId is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.BatchHasCreated',
            'errorMessage' => 'This batch task has been created.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.DeviceNameChecking',
            'errorMessage' => 'Device names are checking.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.DeviceNameCheckFailed',
            'errorMessage' => 'Device names check failed.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.ActiveCodeInsufficient',
            'errorMessage' => 'Active code quota is insufficient.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.DevicesCountExceedLimit',
            'errorMessage' => 'The devices count exceed the limit.',
          ),
          8 => 
          array (
            'errorCode' => 'iot.vision.DevicesExceedUnreleasedProductLimit',
            'errorMessage' => 'Devices count exceed the limit of unreleased product.',
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
    ),
    'QueryBatchStatus' => 
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
          'name' => 'BatchId',
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
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ProjectId',
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
                  'Status' => 
                  array (
                    'type' => 'string',
                  ),
                  'InvalidDetailList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DeviceName' => 
                        array (
                          'type' => 'string',
                        ),
                        'ErrorMsg' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                  'InvalidList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                  'ValidList' => 
                  array (
                    'type' => 'array',
                    'items' => 
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
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
    ),
    'QueryDeviceDetail' => 
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
            'description' => '视频设备所属产品的**ProductKey**。

><notice>如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1Bw******',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备名称。

><notice>如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'Device01',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备ID。
><notice>
**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
          ),
        ),
        3 => 
        array (
          'name' => 'ProjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '项目ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'a123qs*****sy4QU',
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
                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
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
                    'description' => '设备状态。取值：

- **ONLINE**：设备在线。
- **OFFLINE**：设备离线。
- **UNACTIVE**：设备未激活。
- **DISABLE**：设备已禁用。',
                    'type' => 'string',
                    'example' => 'ONLINE',
                  ),
                  'ProductName' => 
                  array (
                    'description' => '设备所属产品的名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'DeviceName' => 
                  array (
                    'description' => '设备名称。',
                    'type' => 'string',
                    'example' => 'Device01',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '设备的创建时间，13位毫秒级时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1834500000000',
                  ),
                  'FirmwareVersion' => 
                  array (
                    'description' => '设备默认（default）OTA模块的版本号。',
                    'type' => 'string',
                    'example' => 'V1.0.0.0',
                  ),
                  'OnlineTime' => 
                  array (
                    'description' => '设备最后上线时间，13位毫秒级时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2298700000000',
                  ),
                  'ActiveTime' => 
                  array (
                    'description' => '设备的激活时间，13位毫秒级时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1934500000000',
                  ),
                  'ProductKey' => 
                  array (
                    'description' => '设备所属产品的**ProductKey**。',
                    'type' => 'string',
                    'example' => 'a1Bw******',
                  ),
                  'IpAddress' => 
                  array (
                    'description' => '设备的IP地址。',
                    'type' => 'string',
                    'example' => '10.***.***.***',
                  ),
                  'NodeType' => 
                  array (
                    'description' => '节点类型，取值：

- **0**：设备。设备不能挂载子设备。
- **1**：网关。网关可以挂载子设备。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Region' => 
                  array (
                    'description' => '设备所在地域的ID。',
                    'type' => 'string',
                    'example' => 'cn-shanghai',
                  ),
                  'DeviceSecret' => 
                  array (
                    'description' => '设备密钥。',
                    'type' => 'string',
                    'example' => 'mz2Canp4GB7qRVf1OYPNtRqB2anu****',
                  ),
                  'Nickname' => 
                  array (
                    'description' => '设备的备注名称。',
                    'type' => 'string',
                    'example' => 'detectors_in_beijing',
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
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.InvalidIotInstance',
            'errorMessage' => 'Invalid iot instance.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.ProductNotExist',
            'errorMessage' => 'Product not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.DeviceNameFormatInvalid',
            'errorMessage' => 'Device name format invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.InstanceArrearage',
            'errorMessage' => 'Instance arrearage.',
          ),
          8 => 
          array (
            'errorCode' => 'iot.vision.ProductKeyFormatInvalid',
            'errorMessage' => 'Product key format invalid.',
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
          2 => 
          array (
            'errorCode' => 'iot.vision.HasNoAccessPermission',
            'errorMessage' => 'Has no access permission.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Status\\": \\"ONLINE\\",\\n    \\"ProductName\\": \\"test\\",\\n    \\"DeviceName\\": \\"Device01\\",\\n    \\"CreateTime\\": 1834500000000,\\n    \\"FirmwareVersion\\": \\"V1.0.0.0\\",\\n    \\"OnlineTime\\": 2298700000000,\\n    \\"ActiveTime\\": 1934500000000,\\n    \\"ProductKey\\": \\"a1Bw******\\",\\n    \\"IpAddress\\": \\"10.***.***.***\\",\\n    \\"NodeType\\": 0,\\n    \\"Region\\": \\"cn-shanghai\\",\\n    \\"DeviceSecret\\": \\"mz2Canp4GB7qRVf1OYPNtRqB2anu****\\",\\n    \\"Nickname\\": \\"detectors_in_beijing\\",\\n    \\"IotId\\": \\"C47T6xwp6ms4bNlkHRWCg4****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryDeviceDetailResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <Status>ONLINE</Status>\\n    <ProductName>test</ProductName>\\n    <DeviceSecret>mz2Canp4GB7qRVf1OYPNtRqB2anu****</DeviceSecret>\\n    <CreateTime>1834500000000</CreateTime>\\n    <OnlineTime>2298700000000</OnlineTime>\\n    <FirmwareVersion>V1.0.0.0</FirmwareVersion>\\n    <IotId>C47T6xwp6ms4bNlkHRWCg4****</IotId>\\n    <ActiveTime>1934500000000</ActiveTime>\\n    <NodeType>0</NodeType>\\n    <Region>cn-shanghai</Region>\\n    <IpAddress>10.***.***.***</IpAddress>\\n    <ProductKey>a1Bw******</ProductKey>\\n    <Nickname>detectors_in_beijing</Nickname>\\n    <DeviceName>Device01</DeviceName>\\n</Data>\\n<Success>true</Success>\\n</QueryDeviceDetailResponse>","errorExample":""}]',
      'title' => 'QueryDeviceDetail',
      'summary' => '调用该接口查询指定设备的详细信息。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryFreeStorage' => 
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
                  'EndTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'Type' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'StartTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'EndTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'Months' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Expired' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'RemainQuota' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'StartTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'Consumed' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Lifecycle' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DeviceNoOwner',
            'errorMessage' => 'Device has no owner.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.FreeStorageQuotaLimit',
            'errorMessage' => 'No enough free storage quota or exceed limit.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.GetDeviceInfoFailed',
            'errorMessage' => 'Get device info failed.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
            'errorMessage' => 'Get storage order lock failed try again later.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
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
    ),
    'QueryDevicesDownloadUrl' => 
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
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'BatchId',
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
                  'OssDownloadUrl' => 
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
            'errorCode' => 'iot.system.SystemException',
            'errorMessage' => 'An internal error occurred. Try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.common.AuthActionPermissionDeny',
            'errorMessage' => 'The authorization fails.',
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
    'QueryGenerateDevicesInfoList' => 
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
            'required' => true,
            'maximum' => '50',
            'minimum' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'BatchId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '1000',
            'minimum' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ProjectId',
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
                  'PageNo' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'PageSize' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Total' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'ListData' => 
                  array (
                    'type' => 'array',
                    'items' => 
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
                        'DeviceSecret' => 
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
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.common.RamActionPermissionDeny',
            'errorMessage' => 'You do not have the RAM permission.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.ProductNotExist',
            'errorMessage' => 'Product not exist.',
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
    ),
    'QueryGenerateDevicesRecord' => 
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
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '指定显示返回结果中的第几页，最大值为1,000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '起始时间的毫秒级时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9999999999999',
            'minimum' => '1',
            'example' => '1690819200000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '结束时间的毫秒级时间戳。

><notice> 起止时间间隔不能超过30天。
></notice>',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '9999999999999',
            'minimum' => '1',
            'example' => '1659283200000',
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
                'example' => 'Request parameter error.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'E5******-4***-***B-8**E-D3********65',
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
                'description' => '调用成功，返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNo' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的记录数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'ListData' => 
                  array (
                    'description' => '设备注册记录的详细信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ApplyDeviceCount' => 
                        array (
                          'description' => '申请的设备数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '133',
                        ),
                        'SpecCode' => 
                        array (
                          'description' => '激活码规格Code。取值：

- **Consumer_IPC_512Kbps**：消费类IPC 512Kbps。
- **Consumer_IPC_1Mbps**：消费类IPC 1Mbps。
- **Consumer_IPC_2Mbps**：消费类IPC 2Mbps。
- **Consumer_IPC_4Mbps**：消费类IPC 4Mbps。
- **Industry_IPC**：行业类IPC。
- **NVR_Less64**：NVR小于等于64路。
- **NVR_Higher64**：NVR大于64路。',
                          'type' => 'string',
                          'example' => 'Consumer_IPC_512Kbps',
                        ),
                        'ProductKey' => 
                        array (
                          'description' => '设备所属产品的**ProductKey**。',
                          'type' => 'string',
                          'example' => 'a3w******',
                        ),
                        'ProductName' => 
                        array (
                          'description' => '设备所属产品的名称。',
                          'type' => 'string',
                          'example' => '电饭煲',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '批量注册设备任务的提交时间，格式为毫秒级时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1690819200000',
                        ),
                        'BatchStatus' => 
                        array (
                          'description' => '批量注册的批次状态。

- **CREATE**：正在创建设备。
- **CREATE_SUCCESS**：申请单中的所有设备创建成功。
- **CREATE_FAILED**：申请单中有设备创建失败。',
                          'type' => 'string',
                          'example' => 'CREATE',
                        ),
                        'NetworkType' => 
                        array (
                          'description' => '产品的连网方式。取值：

- **WIFI**：Wi-Fi。
- **CELLULAR**：蜂窝GPRS/3G/4G/5G。
- **ETHERNET**：以太网。
- **OTHER**：其他网络类型。',
                          'type' => 'string',
                          'example' => 'WIFI',
                        ),
                        'OperateUid' => 
                        array (
                          'description' => '操作账号的UID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '110000000000',
                        ),
                        'SuccessCount' => 
                        array (
                          'description' => '批量注册设备成功的设备数量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '5',
                        ),
                        'BatchId' => 
                        array (
                          'description' => '申请的批次ID。',
                          'type' => 'string',
                          'example' => '1508******195',
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E5******-4***-***B-8**E-D3********65\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 1,\\n    \\"Total\\": 5,\\n    \\"ListData\\": [\\n      {\\n        \\"ApplyDeviceCount\\": 133,\\n        \\"SpecCode\\": \\"Consumer_IPC_512Kbps\\",\\n        \\"ProductKey\\": \\"a3w******\\",\\n        \\"ProductName\\": \\"电饭煲\\",\\n        \\"CreateTime\\": 1690819200000,\\n        \\"BatchStatus\\": \\"CREATE\\",\\n        \\"NetworkType\\": \\"WIFI\\",\\n        \\"OperateUid\\": 110000000000,\\n        \\"SuccessCount\\": 5,\\n        \\"BatchId\\": \\"1508******195\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryGenerateDevicesRecordResponse>\\n<RequestId>E5******-4***-***B-8**E-D3********65</RequestId>\\n<Data>\\n    <PageSize>1</PageSize>\\n    <Total>5</Total>\\n    <PageNo>1</PageNo>\\n    <ListData>\\n        <SpecCode>Consumer_IPC_512Kbps</SpecCode>\\n        <OperateUid>110000000000</OperateUid>\\n        <ProductName>电饭煲</ProductName>\\n        <NetworkType>WIFI</NetworkType>\\n        <BatchStatus>CREATE</BatchStatus>\\n        <CreateTime>1690819200000</CreateTime>\\n        <BatchId>1508******195</BatchId>\\n        <SuccessCount>5</SuccessCount>\\n        <ProductKey>a3w******</ProductKey>\\n        <ApplyDeviceCount>133</ApplyDeviceCount>\\n    </ListData>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</QueryGenerateDevicesRecordResponse>","errorExample":""}]',
      'title' => 'QueryGenerateDevicesRecord',
      'summary' => '调用该接口查询设备批量注册的记录信息。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryStorageCommodityList' => 
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
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Specification' => 
                    array (
                      'type' => 'string',
                    ),
                    'CommodityCode' => 
                    array (
                      'type' => 'string',
                    ),
                    'RecordType' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'Price' => 
                    array (
                      'type' => 'string',
                    ),
                    'Months' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'CommodityName' => 
                    array (
                      'type' => 'string',
                    ),
                    'Lifecycle' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
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
    ),
    'QueryStorageOrder' => 
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
          'name' => 'DeviceNoOwner',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'OrderId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
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
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Copies' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Specification' => 
                  array (
                    'type' => 'string',
                  ),
                  'RecordType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'CommodityCode' => 
                  array (
                    'type' => 'string',
                  ),
                  'PreConsume' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'EndTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'UserId' => 
                  array (
                    'type' => 'string',
                  ),
                  'IdentityId' => 
                  array (
                    'type' => 'string',
                  ),
                  'StartTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'EndTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'StartTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'OutOrderNo' => 
                  array (
                    'type' => 'string',
                  ),
                  'Price' => 
                  array (
                    'type' => 'string',
                  ),
                  'OrderType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'PaymentStatus' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'UserName' => 
                  array (
                    'type' => 'string',
                  ),
                  'OrderId' => 
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DeviceNoOwner',
            'errorMessage' => 'Device has no owner.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.InvalidStorageOrder',
            'errorMessage' => 'Invalid storage order.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.DeviceOwnerChanged',
            'errorMessage' => 'Device owner changed.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
            'errorMessage' => 'Get storage order lock failed try again later.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
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
    ),
    'QueryStorageOrderList' => 
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
          'name' => 'DeviceNoOwner',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '200',
            'minimum' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
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
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '1000',
            'minimum' => '1',
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
                  'PageNo' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'PageSize' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Total' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'PageCount' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'StorageOrderList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'Copies' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'Specification' => 
                        array (
                          'type' => 'string',
                        ),
                        'RecordType' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'CommodityCode' => 
                        array (
                          'type' => 'string',
                        ),
                        'PreConsume' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'EndTimeUTC' => 
                        array (
                          'type' => 'string',
                        ),
                        'UserId' => 
                        array (
                          'type' => 'string',
                        ),
                        'IdentityId' => 
                        array (
                          'type' => 'string',
                        ),
                        'StartTimeUTC' => 
                        array (
                          'type' => 'string',
                        ),
                        'EndTime' => 
                        array (
                          'type' => 'string',
                        ),
                        'StartTime' => 
                        array (
                          'type' => 'string',
                        ),
                        'OutOrderNo' => 
                        array (
                          'type' => 'string',
                        ),
                        'Price' => 
                        array (
                          'type' => 'string',
                        ),
                        'OrderType' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'PaymentStatus' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'UserName' => 
                        array (
                          'type' => 'string',
                        ),
                        'OrderId' => 
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DeviceNoOwner',
            'errorMessage' => 'Device has no owner.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.DeviceOwnerChanged',
            'errorMessage' => 'Device owner changed.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
            'errorMessage' => 'Get storage order lock failed try again later.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
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
    ),
    'TransferStorageOrder' => 
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
          'name' => 'EventRecordDuration',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '30',
            'minimum' => '0',
            'default' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'DstIotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'SupportCrossIdentityTransfer',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'SrcIotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'SrcOrderId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'EventRecordProlong',
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
          'name' => 'ImmediateUse',
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
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'EnableDefaultPlan',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'PreRecordDuration',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5',
            'minimum' => '0',
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
                  'Status' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Copies' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Specification' => 
                  array (
                    'type' => 'string',
                  ),
                  'RecordType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'CommodityCode' => 
                  array (
                    'type' => 'string',
                  ),
                  'PreConsume' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'EndTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'UserId' => 
                  array (
                    'type' => 'string',
                  ),
                  'IdentityId' => 
                  array (
                    'type' => 'string',
                  ),
                  'StartTimeUTC' => 
                  array (
                    'type' => 'string',
                  ),
                  'EndTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'StartTime' => 
                  array (
                    'type' => 'string',
                  ),
                  'OutOrderNo' => 
                  array (
                    'type' => 'string',
                  ),
                  'Price' => 
                  array (
                    'type' => 'string',
                  ),
                  'OrderType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'PaymentStatus' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'UserName' => 
                  array (
                    'type' => 'string',
                  ),
                  'OrderId' => 
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DeviceNoOwner',
            'errorMessage' => 'Device has no owner.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.DeviceOwnerChanged',
            'errorMessage' => 'Device owner changed.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.InvalidStorageOrder',
            'errorMessage' => 'Invalid storage order.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderGetLockFailed',
            'errorMessage' => 'Get storage order lock failed try again later.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.StorageOrderStatusInvalid',
            'errorMessage' => 'Storage order status invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'iot.vision.TargetDeviceOwnerDifferent',
            'errorMessage' => 'Target device owner is different.',
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
    ),
    'UploadDeviceNameList' => 
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
          'name' => 'DeviceNames',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'maxItems' => 10000,
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
          'name' => 'ProjectId',
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
                  'BatchId' => 
                  array (
                    'type' => 'string',
                  ),
                  'InvalidDetailList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DeviceName' => 
                        array (
                          'type' => 'string',
                        ),
                        'ErrorMsg' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                  'RepeatedDeviceNameList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                  'InvalidDeviceNameList' => 
                  array (
                    'type' => 'array',
                    'items' => 
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.ActiveCodeInsufficient',
            'errorMessage' => 'Active code quota is insufficient.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.DevicesCountExceedLimit',
            'errorMessage' => 'The devices count exceed the limit.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.DevicesExceedUnreleasedProductLimit',
            'errorMessage' => 'Devices count exceed the limit of unreleased product.',
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
    ),
    'GetThingEventSnapshot' => 
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
          'name' => 'Identifier',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物模型的事件标识符。',
            'type' => 'string',
            'required' => true,
            'example' => 'AlarmType',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备所属产品的**ProductKey**。

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
            'description' => '视频设备的设备名称。

><notice>如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'Device01',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备ID。
><notice>
**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
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
                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
                'type' => 'string',
                'example' => '400',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Unexpected internal error.',
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
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EventType' => 
                    array (
                      'description' => '事件类型。

- **info**：信息。
- **alert**：告警。
- **error**：故障。',
                      'type' => 'string',
                      'example' => 'alert',
                    ),
                    'EventCode' => 
                    array (
                      'description' => '事件Code。',
                      'type' => 'string',
                      'example' => 'IntelligentAlarm',
                    ),
                    'Identifier' => 
                    array (
                      'description' => '事件标识符。',
                      'type' => 'string',
                      'example' => 'IntelligentAlarm',
                    ),
                    'Timestamp' => 
                    array (
                      'description' => '事件发生的时间戳。单位为毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1700010288668',
                    ),
                    'EventBody' => 
                    array (
                      'description' => '事件内容。',
                      'type' => 'string',
                      'example' => '{\\"EventList \\":[{\\"AlarmPicID \\":\\"\\",\\"EventTime \\":\\"1700010288542 \\",\\"AlarmType \\":1,\\"AlarmPicSize \\":1,\\"Data \\":\\"test \\"}]}',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.InvalidIotInstance',
            'errorMessage' => 'Invalid iot instance.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.ProductNotExist',
            'errorMessage' => 'Product not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.ThingModelNotExist',
            'errorMessage' => 'Thing model not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.ThingModelIdentifierNotExist',
            'errorMessage' => 'Thing model identifier not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'iot.vision.InstanceArrearage',
            'errorMessage' => 'Instance arrearage.',
          ),
          9 => 
          array (
            'errorCode' => 'iot.vision.GetThingEventSnapshotFailed',
            'errorMessage' => 'Get thing event snapshot failed.',
          ),
          10 => 
          array (
            'errorCode' => 'iot.vision.ThingEventNotFound',
            'errorMessage' => 'Thing event not found.',
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
          2 => 
          array (
            'errorCode' => 'iot.vision.HasNoAccessPermission',
            'errorMessage' => 'Has no access permission.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Unexpected internal error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"EventType\\": \\"alert\\",\\n      \\"EventCode\\": \\"IntelligentAlarm\\",\\n      \\"Identifier\\": \\"IntelligentAlarm\\",\\n      \\"Timestamp\\": 1700010288668,\\n      \\"EventBody\\": \\"{\\\\\\\\\\\\\\"EventList \\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"AlarmPicID \\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"EventTime \\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1700010288542 \\\\\\\\\\\\\\",\\\\\\\\\\\\\\"AlarmType \\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"AlarmPicSize \\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"Data \\\\\\\\\\\\\\":\\\\\\\\\\\\\\"test \\\\\\\\\\\\\\"}]}\\",\\n      \\"IotId\\": \\"C47T6xwp6ms4bNlkHRWCg4****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetThingEventSnapshotResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <IotId>C47T6xwp6ms4bNlkHRWCg4****</IotId>\\n    <Identifier>IntelligentAlarm</Identifier>\\n    <EventBody>{\\"EventList \\":[{\\"AlarmPicID \\":\\"\\",\\"EventTime \\":\\"1700010288542 \\",\\"AlarmType \\":1,\\"AlarmPicSize \\":1,\\"Data \\":\\"test \\"}]}</EventBody>\\n    <EventType>alert</EventType>\\n    <Timestamp>1700010288668</Timestamp>\\n    <EventCode>IntelligentAlarm</EventCode>\\n</Data>\\n<Success>true</Success>\\n</GetThingEventSnapshotResponse>","errorExample":""}]',
      'title' => '查询物模型事件的快照',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchBindDevice' => 
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
          'name' => 'OpenId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'OpenIdAppKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'IdentityId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
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
                  'required' => false,
                ),
                'DeviceName' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
                'IotId' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
              ),
            ),
            'required' => true,
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
                  'BindDeviceList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BindResultMessage' => 
                        array (
                          'type' => 'string',
                        ),
                        'ProductKey' => 
                        array (
                          'type' => 'string',
                        ),
                        'BindResultCode' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
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
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.GetAccountInfoFailed',
            'errorMessage' => 'Get account info failed.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.AccountNotFound',
            'errorMessage' => 'Account not found.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.TenantMismatch',
            'errorMessage' => 'Caller tenant and account belong tenant mismatch.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.IdentityAppKeyProductNotBind',
            'errorMessage' => 'The app associated with the identityId does not have permission to access the product.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.BindFailed',
            'errorMessage' => 'Bind account and device failed.',
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
    ),
    'GetAccountById' => 
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
          'name' => 'OpenId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '三方平台用户ID。
><notice> 如果传入该参数，需同时传入**OpenIdAppKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => '60yqjd1**************************561da00851',
          ),
        ),
        1 => 
        array (
          'name' => 'OpenIdAppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '三方平台颁发的AppKey。

><notice> 如果传入该参数，需同时传入**OpenId**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => '76****57',
          ),
        ),
        2 => 
        array (
          'name' => 'IdentityId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户身份ID。

><notice> **IdentityId**作为用户标识符，和**OpenId**与**OpenIdAppKey**组合是一一对应的关系。如果传入该参数，则无需传入**OpenId**和**OpenIdAppKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => '5035op97******************a63994',
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
                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
                'type' => 'string',
                'example' => '400',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Unexpected internal error.',
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
                  'LoginName' => 
                  array (
                    'description' => '账号登录名称。',
                    'type' => 'string',
                    'example' => '18*******20',
                  ),
                  'Email' => 
                  array (
                    'description' => '邮箱地址。',
                    'type' => 'string',
                    'example' => '******',
                  ),
                  'IdentityId' => 
                  array (
                    'description' => '用户身份ID。',
                    'type' => 'string',
                    'example' => '5035op97******************a63994',
                  ),
                  'LastLoginTime' => 
                  array (
                    'description' => '最后登录时间，13位毫秒级时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1700209499000',
                  ),
                  'GmtCreate' => 
                  array (
                    'description' => '账号创建时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1700189358000',
                  ),
                  'NickName' => 
                  array (
                    'description' => '用户昵称。',
                    'type' => 'string',
                    'example' => '18*******20',
                  ),
                  'GmtModified' => 
                  array (
                    'description' => '账号修改时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1700209499000',
                  ),
                  'Phone' => 
                  array (
                    'description' => '手机号。',
                    'type' => 'string',
                    'example' => '18*******20',
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.GetAccountInfoFailed',
            'errorMessage' => 'Get account info failed.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.AccountNotFound',
            'errorMessage' => 'Account not found.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.TenantMismatch',
            'errorMessage' => 'Caller tenant and account belong tenant mismatch.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Unexpected internal error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"LoginName\\": \\"18*******20\\",\\n    \\"Email\\": \\"******\\",\\n    \\"IdentityId\\": \\"5035op97******************a63994\\",\\n    \\"LastLoginTime\\": 1700209499000,\\n    \\"GmtCreate\\": 1700189358000,\\n    \\"NickName\\": \\"18*******20\\",\\n    \\"GmtModified\\": 1700209499000,\\n    \\"Phone\\": \\"18*******20\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAccountByIdResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <LastLoginTime>1700209499000</LastLoginTime>\\n    <LoginName>18*******20</LoginName>\\n    <GmtCreate>1700189358000</GmtCreate>\\n    <Email>******</Email>\\n    <Phone>18*******20</Phone>\\n    <GmtModified>1700209499000</GmtModified>\\n    <IdentityId>5035op97******************a63994</IdentityId>\\n    <NickName>18*******20</NickName>\\n</Data>\\n<Success>true</Success>\\n</GetAccountByIdResponse>","errorExample":""}]',
      'title' => 'GetAccountById',
      'summary' => '调用该接口根据用户身份ID（IdentityId）或三方平台用户ID（OpenId）查询用户账号信息。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetDeviceStatus' => 
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
            'description' => '视频设备所属产品的**ProductKey**。

><notice>如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1Bw******',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备名称。

><notice>如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'Device01',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备ID。
><notice>
**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
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
                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
                'type' => 'string',
                'example' => '400',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Unexpected internal error.',
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
                    'description' => '设备当前状态。

- **ONLINE**：设备在线。
- **OFFLINE**：设备离线。
- **UNACTIVE**：设备未激活。
- **DISABLE**：设备已禁用。',
                    'type' => 'string',
                    'example' => 'ONLINE',
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.InvalidIotInstance',
            'errorMessage' => 'Invalid iot instance.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.ProductNotExist',
            'errorMessage' => 'Product not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.InstanceArrearage',
            'errorMessage' => 'Instance arrearage.',
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
          2 => 
          array (
            'errorCode' => 'iot.vision.HasNoAccessPermission',
            'errorMessage' => 'Has no access permission.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Unexpected internal error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Status\\": \\"ONLINE\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDeviceStatusResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <Status>ONLINE</Status>\\n</Data>\\n<Success>true</Success>\\n</GetDeviceStatusResponse>","errorExample":""}]',
      'title' => 'GetDeviceStatus',
      'summary' => '调用该接口查询设备的状态。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetSubDeviceList' => 
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
            'description' => '指定返回结果中每页显示的记录数量，最大值是50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '5',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关设备所属产品的**ProductKey**。

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
            'description' => '网关设备的设备名称。

><notice>如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'Device01',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网关设备的设备ID。
><notice>
**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定显示返回结果中的第几页，最大值为100。',
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
                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
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
                  'PageNo' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的记录数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'SubDeviceList' => 
                  array (
                    'description' => '子设备列表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ProductKey' => 
                        array (
                          'description' => '设备所属产品的**ProductKey**。',
                          'type' => 'string',
                          'example' => 'wse5******',
                        ),
                        'DeviceName' => 
                        array (
                          'description' => '设备名称。',
                          'type' => 'string',
                          'example' => 'device-test',
                        ),
                        'IotId' => 
                        array (
                          'description' => '设备ID。',
                          'type' => 'string',
                          'example' => 'qswdfrttgg*********',
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.InvalidIotInstance',
            'errorMessage' => 'Invalid iot instance.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.ProductNotExist',
            'errorMessage' => 'Product not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.InstanceArrearage',
            'errorMessage' => 'Instance arrearage.',
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
          2 => 
          array (
            'errorCode' => 'iot.vision.HasNoAccessPermission',
            'errorMessage' => 'Has no access permission.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 1,\\n    \\"Total\\": 1,\\n    \\"SubDeviceList\\": [\\n      {\\n        \\"ProductKey\\": \\"wse5******\\",\\n        \\"DeviceName\\": \\"device-test\\",\\n        \\"IotId\\": \\"qswdfrttgg*********\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSubDeviceListResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <PageSize/>\\n    <Total>1</Total>\\n    <PageNo/>\\n    <SubDeviceList>\\n        <IotId>qswdfrttgg*********</IotId>\\n        <ProductKey>wse5******</ProductKey>\\n        <DeviceName>device-test</DeviceName>\\n    </SubDeviceList>\\n</Data>\\n<Success>true</Success>\\n</GetSubDeviceListResponse>","errorExample":""}]',
      'title' => 'GetSubDeviceList',
      'summary' => '调用该接口查询网关设备的子设备列表。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetThingPropertySnapshot' => 
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
            'description' => '视频设备所属产品的**ProductKey**。

><notice>如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1Bw******',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备名称。

><notice>如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'Device01',
          ),
        ),
        2 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备ID。
><notice>
**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
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
                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
                'type' => 'string',
                'example' => '400',
              ),
              'Data' => 
              array (
                'description' => '调用成功，返回的属性数据。',
                'type' => 'string',
                'example' => '{\\"StreamVideoQuality\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"MotionDetectSensitivity\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"ImageFlipState\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"SubStreamVideoQuality\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"AlarmSwitch\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"AlarmFrequencyLevel\\":{\\"time\\":1700009930921,\\"value\\":\\"10\\"}}',
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.InvalidIotInstance',
            'errorMessage' => 'Invalid iot instance.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.ProductNotExist',
            'errorMessage' => 'Product not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.ThingModelNotExist',
            'errorMessage' => 'Thing model not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.InstanceArrearage',
            'errorMessage' => 'Instance arrearage.',
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
          2 => 
          array (
            'errorCode' => 'iot.vision.HasNoAccessPermission',
            'errorMessage' => 'Has no access permission.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"Data\\": \\"{\\\\\\\\\\\\\\"StreamVideoQuality\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"time\\\\\\\\\\\\\\":1699951400324,\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"MotionDetectSensitivity\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"time\\\\\\\\\\\\\\":1699951400324,\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"ImageFlipState\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"time\\\\\\\\\\\\\\":1699951400324,\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"SubStreamVideoQuality\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"time\\\\\\\\\\\\\\":1699951400324,\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"AlarmSwitch\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"time\\\\\\\\\\\\\\":1699951400324,\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"AlarmFrequencyLevel\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"time\\\\\\\\\\\\\\":1700009930921,\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"10\\\\\\\\\\\\\\"}}\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetThingPropertySnapshotResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>{\\"StreamVideoQuality\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"MotionDetectSensitivity\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"ImageFlipState\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"SubStreamVideoQuality\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"AlarmSwitch\\":{\\"time\\":1699951400324,\\"value\\":\\"0\\"},\\"AlarmFrequencyLevel\\":{\\"time\\":1700009930921,\\"value\\":\\"10\\"}}</Data>\\n<Success>true</Success>\\n</GetThingPropertySnapshotResponse>","errorExample":""}]',
      'title' => 'GetThingPropertySnapshot',
      'summary' => '调用该接口查询指定设备的所有物模型属性快照，返回物模型属性的最新数据。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'InvokeThingService' => 
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
          'name' => 'Identifier',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '物模型的服务标识符。',
            'type' => 'string',
            'required' => true,
            'example' => 'SetNum',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备所属产品的**ProductKey**。

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
            'description' => '视频设备的设备名称。

><notice>如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'Device01',
          ),
        ),
        3 => 
        array (
          'name' => 'Args',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要启用服务的入参信息，数据格式为JSON String，例如**Args={"param1":1}**。',
            'type' => 'string',
            'required' => false,
            'example' => '{"param1":1}',
          ),
        ),
        4 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备ID。
><notice>
**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
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
                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
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
                  'Data' => 
                  array (
                    'description' => '调用服务结果，JSON字符串。',
                    'type' => 'string',
                    'example' => '{"param1":1}',
                  ),
                  'MessageId' => 
                  array (
                    'description' => '云端向设备下发服务调用的消息ID。',
                    'type' => 'string',
                    'example' => 'abcabcabc1234****',
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.InvalidIotInstance',
            'errorMessage' => 'Invalid iot instance.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.ProductNotExist',
            'errorMessage' => 'Product not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.ThingModelNotExist',
            'errorMessage' => 'Thing model not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.ThingModelIdentifierNotExist',
            'errorMessage' => 'Thing model identifier not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'iot.vision.InstanceArrearage',
            'errorMessage' => 'Instance arrearage.',
          ),
          9 => 
          array (
            'errorCode' => 'iot.vision.ServiceParamNotExist',
            'errorMessage' => 'Invoke service failed as service param not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'iot.vision.ServiceNotFound',
            'errorMessage' => 'Invoke service failed as service not found.',
          ),
          11 => 
          array (
            'errorCode' => 'iot.vision.DeviceInactive',
            'errorMessage' => 'Device inactive.',
          ),
          12 => 
          array (
            'errorCode' => 'iot.vision.DevcieOffline',
            'errorMessage' => 'Device offline.',
          ),
          13 => 
          array (
            'errorCode' => 'iot.vision.ServiceEnumSpecError',
            'errorMessage' => 'Service enum spec error.',
          ),
          14 => 
          array (
            'errorCode' => 'iot.vision.ServiceResponseTimeout',
            'errorMessage' => 'Invoke service response timeout.',
          ),
          15 => 
          array (
            'errorCode' => 'iot.vision.InvokeServiceFailed',
            'errorMessage' => 'Invoke service failed:%s',
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
          2 => 
          array (
            'errorCode' => 'iot.vision.HasNoAccessPermission',
            'errorMessage' => 'Has no access permission.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Data\\": \\"{\\\\\\"param1\\\\\\":1}\\",\\n    \\"MessageId\\": \\"abcabcabc1234****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<InvokeThingServiceResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <Data>{\\"param1\\":1}</Data>\\n    <MessageId>abcabcabc1234****</MessageId>\\n</Data>\\n<Success>true</Success>\\n</InvokeThingServiceResponse>","errorExample":""}]',
      'title' => 'InvokeThingService',
      'summary' => '调用该接口在单个设备上调用指定服务。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为200。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListBindingAccountByDevice' => 
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
            'description' => '指定返回结果中每页显示的记录数量，最大值是50。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '5',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备所属产品的**ProductKey**。

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
            'description' => '视频设备的设备名称。

><notice>如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'Device01',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备ID。
><notice>
**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'C47T6xwp6ms4bNlkHRWCg4****',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定显示返回结果中的第几页，最大值为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'Owned',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户和设备绑定类型。

- **0**：表示分享用户。
- **1**：表示管理员用户。
- 不传则查询所有用户。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1',
            'minimum' => '0',
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
                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
                'type' => 'string',
                'example' => '400',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'Unexpected internal error.',
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
                  'PageNo' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的记录数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总记录数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'AccountList' => 
                  array (
                    'description' => '用户列表信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'IdentityAlias' => 
                        array (
                          'description' => '用户显示名称。',
                          'type' => 'string',
                          'example' => '18*******20',
                        ),
                        'IdentityId' => 
                        array (
                          'description' => '用户身份ID。',
                          'type' => 'string',
                          'example' => '5035op97******************a63994',
                        ),
                        'BindTime' => 
                        array (
                          'description' => '设备绑定用户的时间，13位毫秒级时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2222220000000',
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.TenantMismatch',
            'errorMessage' => 'Caller tenant and account belong tenant mismatch.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.QueryBindingAccountFailed',
            'errorMessage' => 'Query binding account failed.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Unexpected internal error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 1,\\n    \\"Total\\": 1,\\n    \\"AccountList\\": [\\n      {\\n        \\"IdentityAlias\\": \\"18*******20\\",\\n        \\"IdentityId\\": \\"5035op97******************a63994\\",\\n        \\"BindTime\\": 2222220000000\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListBindingAccountByDeviceResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Data>\\n    <PageSize>1</PageSize>\\n    <Total>1</Total>\\n    <PageNo>1</PageNo>\\n    <AccountList>\\n        <BindTime>1700209801000</BindTime>\\n        <IdentityId>5035op97******************a63994</IdentityId>\\n        <IdentityAlias>18*******20</IdentityAlias>\\n    </AccountList>\\n</Data>\\n<Success>true</Success>\\n</ListBindingAccountByDeviceResponse>","errorExample":""}]',
      'title' => 'ListBindingAccountByDevice',
      'summary' => '调用该接口查询指定设备所绑定的用户列表。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListBindingDeviceByAccount' => 
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
          'name' => 'OpenId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'OpenIdAppKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '50',
            'minimum' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'IdentityId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'SubDevice',
          'in' => 'query',
          'schema' => 
          array (
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
                  'PageNo' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'PageSize' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Total' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'PageCount' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'DeviceList' => 
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
                        'Owned' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'DeviceName' => 
                        array (
                          'type' => 'string',
                        ),
                        'NodeType' => 
                        array (
                          'type' => 'string',
                        ),
                        'BindTime' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.QueryBindingDeviceFailed',
            'errorMessage' => 'Query binding device failed.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.GetAccountInfoFailed',
            'errorMessage' => 'Get account info failed.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.AccountNotFound',
            'errorMessage' => 'Account not found.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.TenantMismatch',
            'errorMessage' => 'Caller tenant and account belong tenant mismatch.',
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
    ),
    'SetThingProperty' => 
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
            'description' => '视频设备所属产品的**ProductKey**。

><notice>如果传入该参数，需同时传入**DeviceName**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'a1Bw******',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备名称。

><notice>如果传入该参数，需同时传入**ProductKey**。
></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'Device01',
          ),
        ),
        2 => 
        array (
          'name' => 'Args',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要设置的属性信息，数据格式为JSON。

每个属性信息由**标识符**与**属性值**（**key:value**）构成，多个属性用英文逗号隔开。',
            'type' => 'string',
            'required' => true,
            'example' => '{"Switch":1,"Color":"blue"}',
          ),
        ),
        3 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视频设备的设备ID。
><notice>
**IotId**作为设备唯一标识符，和**ProductKey**与**DeviceName**组合是一一对应的关系。如果传入该参数，则无需传入**ProductKey**和**DeviceName**。如果您同时传入**IotId**和**ProductKey**与**DeviceName**组合，则以**IotId**为准。
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
                'description' => ' 调用失败时，返回错误码。详细信息，请参见下文**错误码**。',
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.InvalidIotInstance',
            'errorMessage' => 'Invalid iot instance.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.ProductNotExist',
            'errorMessage' => 'Product not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.ThingModelNotExist',
            'errorMessage' => 'Thing model not exist.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.ThingModelIdentifierNotExist',
            'errorMessage' => 'Thing model identifier not exist.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.DeviceNotExist',
            'errorMessage' => 'Device not exist.',
          ),
          8 => 
          array (
            'errorCode' => 'iot.vision.InstanceArrearage',
            'errorMessage' => 'Instance arrearage.',
          ),
          9 => 
          array (
            'errorCode' => 'iot.vision.SetPropertyFailed',
            'errorMessage' => 'Set property failed.',
          ),
          10 => 
          array (
            'errorCode' => 'iot.vision.PropertyNotFound',
            'errorMessage' => 'Property not found.',
          ),
          11 => 
          array (
            'errorCode' => 'iot.vision.PropertyReadOnly',
            'errorMessage' => 'Property is read only.',
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
          2 => 
          array (
            'errorCode' => 'iot.vision.HasNoAccessPermission',
            'errorMessage' => 'Has no access permission.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"400\\",\\n  \\"ErrorMessage\\": \\"Request parameter error.\\",\\n  \\"RequestId\\": \\"E55***B7-4***-4***-8***-D3******F565\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetThingPropertyResponse>\\n<RequestId>E55***B7-4***-4***-8***-D3******F565</RequestId>\\n<Success>true</Success>\\n</SetThingPropertyResponse>","errorExample":""}]',
      'title' => 'SetThingProperty',
      'summary' => '调用该接口为指定设备设置属性值。',
      'description' => '## QPS限制

单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为50。

> 单个阿里云账号下的所有RAM用户共享该阿里云账号的配额。',
      'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnbindAllUserByDevice' => 
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
          'name' => 'UnbindSubDevice',
          'in' => 'query',
          'schema' => 
          array (
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
                  'SubDeviceUnbindResult' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UnbindResultMessage' => 
                        array (
                          'type' => 'string',
                        ),
                        'ProductKey' => 
                        array (
                          'type' => 'string',
                        ),
                        'DeviceName' => 
                        array (
                          'type' => 'string',
                        ),
                        'UnbindResultCode' => 
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.GetAccountInfoFailed',
            'errorMessage' => 'Get account info failed.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.AccountNotFound',
            'errorMessage' => 'Account not found.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.TenantMismatch',
            'errorMessage' => 'Caller tenant and account belong tenant mismatch.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.UnbindFailed',
            'errorMessage' => 'Unbind account and device failed.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.BindingRelationNotFound',
            'errorMessage' => 'Account and device binding relation not found.',
          ),
          8 => 
          array (
            'errorCode' => 'iot.vision.QueryBindingAccountFailed',
            'errorMessage' => 'Query binding account failed.',
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
    ),
    'UnbindDevice' => 
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
          'name' => 'OpenId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'OpenIdAppKey',
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
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'IdentityId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'UnbindSubDevice',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
            'required' => false,
            'default' => 'true',
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
                  'SubDeviceUnbindResult' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UnbindResultMessage' => 
                        array (
                          'type' => 'string',
                        ),
                        'ProductKey' => 
                        array (
                          'type' => 'string',
                        ),
                        'DeviceName' => 
                        array (
                          'type' => 'string',
                        ),
                        'UnbindResultCode' => 
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
            'errorCode' => 'iot.vision.UnexpectedInternalError',
            'errorMessage' => 'Unexpected internal error.',
          ),
          1 => 
          array (
            'errorCode' => 'iot.vision.RequestParamError',
            'errorMessage' => 'Request parameter error.',
          ),
          2 => 
          array (
            'errorCode' => 'iot.vision.RequestFailed',
            'errorMessage' => 'Request failed.',
          ),
          3 => 
          array (
            'errorCode' => 'iot.vision.GetAccountInfoFailed',
            'errorMessage' => 'Get account info failed.',
          ),
          4 => 
          array (
            'errorCode' => 'iot.vision.AccountNotFound',
            'errorMessage' => 'Account not found.',
          ),
          5 => 
          array (
            'errorCode' => 'iot.vision.TenantMismatch',
            'errorMessage' => 'Caller tenant and account belong tenant mismatch.',
          ),
          6 => 
          array (
            'errorCode' => 'iot.vision.BindingRelationNotFound',
            'errorMessage' => 'Account and device binding relation not found.',
          ),
          7 => 
          array (
            'errorCode' => 'iot.vision.UnbindFailed',
            'errorMessage' => 'Unbind account and device failed.',
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
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'cloudesl',
    'version' => '2020-02-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 149062,
      'title' => '价签设备',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'BindEslDevice',
        1 => 'UnbindEslDevice',
        2 => 'UpdateEslDeviceLight',
        3 => 'DescribeBinders',
        4 => 'DescribeEslDevice',
        5 => 'DescribeEslDevices',
      ),
    ),
    1 => 
    array (
      'id' => 149069,
      'title' => '门店',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateStore',
        1 => 'DeleteStore',
        2 => 'UpdateStore',
        3 => 'UpdateStoreConfig',
        4 => 'DescribeStores',
        5 => 'DescribeStoreConfig',
      ),
    ),
    2 => 
    array (
      'id' => 149076,
      'title' => '商品',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteItem',
        1 => 'BatchInsertItems',
        2 => 'DescribeItems',
      ),
    ),
    3 => 
    array (
      'id' => 149080,
      'title' => '用户',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddUser',
        1 => 'DeleteUser',
        2 => 'AssignUser',
        3 => 'UnassignUser',
        4 => 'DescribeUserLog',
        5 => 'DescribeUsers',
        6 => 'GetUser',
      ),
    ),
    4 => 
    array (
      'id' => 149088,
      'title' => '基站设备',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddApDevice',
        1 => 'DeleteApDevice',
        2 => 'ActivateApDevice',
        3 => 'DescribeApDevices',
      ),
    ),
    5 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ApplyCompanyTemplateVersionToStores',
        1 => 'DescribeStoreByTemplateVersion',
        2 => 'DescribeCompanyTemplateVersions',
        3 => 'DescribeEslModelByTemplateVersion',
        4 => 'DescribeTemplateByModel',
        5 => 'DescribeAvailableEslModels',
        6 => 'DeleteCompanyTemplate',
        7 => 'AddCompanyTemplate',
        8 => 'SyncAddMaterial',
        9 => 'QueryTemplateListByGroupId',
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
    'BindEslDevice' => 
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
          'BearerToken' => 
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
          'name' => 'ItemBarCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品条码。',
            'type' => 'string',
            'required' => false,
            'example' => '690560583****',
          ),
        ),
        1 => 
        array (
          'name' => 'EslBarCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '价签条码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '18bc5a63****',
          ),
        ),
        2 => 
        array (
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        3 => 
        array (
          'name' => 'Shelf',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '陈列系统中的货架号。',
            'type' => 'string',
            'required' => false,
            'example' => '20200201',
          ),
        ),
        4 => 
        array (
          'name' => 'Layer',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '陈列系统中的层号。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'Column',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '陈列系统中的逻辑列。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '扩展参数',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        7 => 
        array (
          'name' => 'LayoutId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '布局ID。仅支持传单个ID。',
            'type' => 'string',
            'required' => false,
            'example' => '7',
          ),
        ),
        8 => 
        array (
          'name' => 'ContainerId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '容器id',
            'type' => 'string',
            'required' => false,
            'example' => '20',
          ),
        ),
        9 => 
        array (
          'name' => 'ContainerName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '容器名称。',
            'type' => 'string',
            'required' => false,
            'example' => '区域4号',
          ),
        ),
        10 => 
        array (
          'name' => 'LayoutName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '布局名称。',
            'type' => 'string',
            'required' => false,
            'example' => '布局2号',
          ),
        ),
      ),
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        418 => 
        array (
          0 => 
          array (
            'errorCode' => 'LayoutOrContainerIsNotExistErrorPub',
            'errorMessage' => 'Layout or Container is not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'ContainerTemplateNoMatchPub',
            'errorMessage' => 'The Template of the Container has not match at all.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>8F124625-DF0A-4B08-B205-2CF538FAF713</RequestId>\\n    <Success>true</Success>\\n</data>\\n<requestId>8F124625-DF0A-4B08-B205-2CF538FAF713</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => '绑定价签设备',
      'summary' => '绑定价签设备。',
      'description' => '该接口分为陈列模式和普通模式两种。陈列模式是用陈列货位和价签条码进行绑定，普通模式是用商品条码和价签条码进行绑定。',
      'requestParamsDescription' => ' 普通绑定模式下，StoreId+EslBarCode+ItemBarCode必填；
陈列绑定模式下，StoreId+EslBarCode+Shelf+Layer+Column必填，ItemBarCode如果填写要和陈列货位上的信息保存一致。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnbindEslDevice' => 
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
          'BearerToken' => 
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
          'name' => 'EslBarCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '价签条码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '18bc5a63****',
          ),
        ),
        1 => 
        array (
          'name' => 'ItemBarCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品条码。',
            'type' => 'string',
            'required' => false,
            'example' => '690560583****',
          ),
        ),
        2 => 
        array (
          'name' => 'Column',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '陈列系统的逻辑列。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        4 => 
        array (
          'name' => 'Shelf',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '陈列系统的货架号。',
            'type' => 'string',
            'required' => false,
            'example' => '20200201',
          ),
        ),
        5 => 
        array (
          'name' => 'Layer',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '陈列系统的层号。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '扩展参数',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        7 => 
        array (
          'name' => 'ContainerName',
          'in' => 'formData',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>8F124625-DF0A-4B08-B205-2CF538FAF713</RequestId>\\n    <Success>true</Success>\\n</data>\\n<requestId>8F124625-DF0A-4B08-B205-2CF538FAF713</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => '解绑价签设备',
      'summary' => '解绑价签设备。',
      'description' => '该接口分为陈列模式和普通模式两种。陈列模式是用陈列货位和价签条码进行解绑，普通模式是用商品条码和价签条码进行解绑。',
      'requestParamsDescription' => '普通模式下，StoreId+EslBarCode必填； 陈列模式下，StoreId+EslBarCode+Shelf+Layer+Column必填，当前货位上要有入参的EslBarCode，ItemBarCode如果填写要和陈列货位上的信息保存一致。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateEslDeviceLight' => 
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
          'BearerToken' => 
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
          'name' => 'LedColor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '亮灯颜色，可选值：

- `GREEN`：绿色

- `RED`：红色

- `BLUE`：蓝色

- `OFF`：关闭。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GREEN',
          ),
        ),
        1 => 
        array (
          'name' => 'Frequency',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '亮灯频率，可选值：

- `ALWAYS`：持续亮灯

- `HEIGHT`：高频率亮灯

- `MIDDLE`：中频率亮灯

- `NORMAL`：正常频率亮灯。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'NORMAL',
          ),
        ),
        2 => 
        array (
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        3 => 
        array (
          'name' => 'ItemBarCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品条码。',
            'type' => 'string',
            'required' => false,
            'example' => '6905605836648',
          ),
        ),
        4 => 
        array (
          'name' => 'LightUpTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '亮灯时长，单位：s，取值大于1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '30',
          ),
        ),
        5 => 
        array (
          'name' => 'EslBarCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '价签条码。',
            'type' => 'string',
            'required' => false,
            'example' => '18bc5a631ak9',
          ),
        ),
        6 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '扩展参数',
            'type' => 'string',
            'required' => false,
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
                'description' => 'POP请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => 'POP请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'FailCount' => 
              array (
                'description' => '失败数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'SuccessCount' => 
              array (
                'description' => '成功数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'LightFailEslInfos' => 
              array (
                'description' => '失败价签信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EslBarCode' => 
                    array (
                      'description' => '价签条码',
                      'type' => 'string',
                      'example' => '18bc5a63****',
                    ),
                    'ErrorMessage' => 
                    array (
                      'description' => '错误消息。',
                      'type' => 'string',
                      'example' => 'The specified ESL device does not exist.',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"FailCount\\": 0,\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"SuccessCount\\": 1,\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"LightFailEslInfos\\": [\\n    {\\n      \\"EslBarCode\\": \\"18bc5a63****\\",\\n      \\"ErrorMessage\\": \\"The specified ESL device does not exist.\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>8F124625-DF0A-4B08-B205-2CF538FAF713</RequestId>\\n    <Success>true</Success>\\n</data>\\n<requestId>8F124625-DF0A-4B08-B205-2CF538FAF713</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => '操作价签的Led灯',
      'summary' => '操作价签的Led灯，进行频率和色彩的变换。',
      'requestParamsDescription' => ' ItemBarCode和EslBarCode二选一，两个都填时EslBarCode优先级比较高。
只填EslBarCode时，点亮单个价签。
只填ItemBarCode时，点亮该商品条码绑定的所有价签。',
      'responseParamsDescription' => ' 使用EslBarCode点亮时，返回成功或失败；
使用ItemBarCode点亮时，返回成功数量和失败数量，以及失败的价签信息。',
      'extraInfo' => ' ',
    ),
    'DescribeBinders' => 
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
          'name' => 'ItemBarCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品条码',
            'type' => 'string',
            'required' => false,
            'example' => '690560583****',
          ),
        ),
        1 => 
        array (
          'name' => 'EslBarCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '价签条码，使用门店ID+价签条码查询时，不用填写货架号和层号。',
            'type' => 'string',
            'required' => false,
            'example' => '18bc5a63****',
          ),
        ),
        2 => 
        array (
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：当前页码，默认值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ItemTitle',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品名称。',
            'type' => 'string',
            'required' => false,
            'example' => '纯牛奶',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：每页显示条数，默认值10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统保留字段，请忽略；',
            'type' => 'string',
            'required' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6E0FF7FA-3F89-598F-9BF2-57DF480FE111',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。取值说明如下：请求成功：不返回ErrorCode字段。                                 请求失败：返回ErrorCode字段。具体信息，请参见本文的错误码目录。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '后端错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的%s。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'PageNumber' => 
              array (
                'description' => '分页参数：当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页参数：每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '24',
              ),
              'DynamicCode' => 
              array (
                'description' => '错误代码',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'EslItemBindInfos' => 
              array (
                'description' => '绑定信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EslBarCode' => 
                    array (
                      'description' => '价签条码，使用门店ID+价签条码查询时，不用填写货架号和层号。',
                      'type' => 'string',
                      'example' => '18bc5a63****',
                    ),
                    'TemplateSceneId' => 
                    array (
                      'description' => '自定义模板ID',
                      'type' => 'string',
                      'example' => '123456',
                    ),
                    'ActionPrice' => 
                    array (
                      'description' => '实际销售价格（单位：分）。',
                      'type' => 'string',
                      'example' => '690',
                    ),
                    'ItemTitle' => 
                    array (
                      'description' => '商品名称。',
                      'type' => 'string',
                      'example' => '麦麸吐司',
                    ),
                    'PromotionStart' => 
                    array (
                      'description' => '促销开始时间 UTC格式 "yyyy-MM-dd\'T\'HH:mm:ss\'Z\'"。',
                      'type' => 'string',
                      'example' => '2020-03-16T07:05:34Z',
                    ),
                    'PriceUnit' => 
                    array (
                      'description' => '计价单位，最长64个字符；',
                      'type' => 'string',
                      'example' => '187',
                    ),
                    'OriginalPrice' => 
                    array (
                      'description' => '原价（单位：分）。',
                      'type' => 'string',
                      'example' => '500',
                    ),
                    'ItemId' => 
                    array (
                      'description' => '自定义商品条码。',
                      'type' => 'string',
                      'example' => '1234567',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'string',
                      'example' => '1656469716000',
                    ),
                    'EslPic' => 
                    array (
                      'description' => '价签显示图片，请使用Base64解码工具解码成图片。',
                      'type' => 'string',
                      'example' => 'kUzlfuzgayDo5uTXW3D66Q',
                    ),
                    'StoreId' => 
                    array (
                      'description' => '门店ID。',
                      'type' => 'string',
                      'example' => 's-pdwrrnkufn',
                    ),
                    'ItemShortTitle' => 
                    array (
                      'description' => '商品简称，不输入则从商品全称中截取，最长64字符；',
                      'type' => 'string',
                      'example' => '牛奶',
                    ),
                    'BindId' => 
                    array (
                      'description' => '绑定ID。',
                      'type' => 'string',
                      'example' => 'b4adf048-f36d-4da5-a8bb-ab4adbd5eb04',
                    ),
                    'PromotionText' => 
                    array (
                      'description' => '促销文案，最长64个字符；',
                      'type' => 'string',
                      'example' => '买一送一',
                    ),
                    'EslModel' => 
                    array (
                      'description' => '价签型号。',
                      'type' => 'string',
                      'example' => 'AESL0213',
                    ),
                    'BePromotion' => 
                    array (
                      'description' => '是否匹配促销模板显示，默认值为false；',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'SkuId' => 
                    array (
                      'description' => '商品ID(SKU)。',
                      'type' => 'string',
                      'example' => '124',
                    ),
                    'EslConnectAp' => 
                    array (
                      'description' => '价签链接基站Mac。',
                      'type' => 'string',
                      'example' => '11:22:33:44:55:66',
                    ),
                    'EslStatus' => 
                    array (
                      'description' => '价签状态，返回值对应关系：

- `ESL_STATUS_ONLINE`：在线，已绑定

- `ESL_STATUS_OFFLINE`：离线，已绑定

- `ESL_STATUS_UNBIND`：未绑定。',
                      'type' => 'string',
                      'example' => 'ESL_STATUS_ONLINE',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '模板ID',
                      'type' => 'string',
                      'example' => '123456',
                    ),
                    'PromotionEnd' => 
                    array (
                      'description' => '促销结束时间 UTC格式 "yyyy-MM-dd\'T\'HH:mm:ss\'Z\'"。',
                      'type' => 'string',
                      'example' => '2020-03-17T07:05:34Z',
                    ),
                    'ItemBarCode' => 
                    array (
                      'description' => '商品条码。',
                      'type' => 'string',
                      'example' => '690560583****',
                    ),
                    'ContainerName' => 
                    array (
                      'title' => '绑定的模板区域名称',
                      'description' => '绑定的模板区域名称',
                      'type' => 'string',
                      'example' => '2',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6E0FF7FA-3F89-598F-9BF2-57DF480FE111\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"null\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 20,\\n  \\"TotalCount\\": 24,\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"EslItemBindInfos\\": [\\n    {\\n      \\"EslBarCode\\": \\"18bc5a63****\\",\\n      \\"TemplateSceneId\\": \\"123456\\",\\n      \\"ActionPrice\\": \\"690\\",\\n      \\"ItemTitle\\": \\"麦麸吐司\\",\\n      \\"PromotionStart\\": \\"2020-03-16T07:05:34Z\\",\\n      \\"PriceUnit\\": \\"187\\",\\n      \\"OriginalPrice\\": \\"500\\",\\n      \\"ItemId\\": \\"1234567\\",\\n      \\"GmtModified\\": \\"1656469716000\\",\\n      \\"EslPic\\": \\"kUzlfuzgayDo5uTXW3D66Q\\",\\n      \\"StoreId\\": \\"s-pdwrrnkufn\\",\\n      \\"ItemShortTitle\\": \\"牛奶\\",\\n      \\"BindId\\": \\"b4adf048-f36d-4da5-a8bb-ab4adbd5eb04\\",\\n      \\"PromotionText\\": \\"买一送一\\",\\n      \\"EslModel\\": \\"AESL0213\\",\\n      \\"BePromotion\\": true,\\n      \\"SkuId\\": \\"124\\",\\n      \\"EslConnectAp\\": \\"11:22:33:44:55:66\\",\\n      \\"EslStatus\\": \\"ESL_STATUS_ONLINE\\",\\n      \\"TemplateId\\": \\"123456\\",\\n      \\"PromotionEnd\\": \\"2020-03-17T07:05:34Z\\",\\n      \\"ItemBarCode\\": \\"690560583****\\",\\n      \\"ContainerName\\": \\"2\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeBindersResponse>\\n    <RequestId>6E0FF7FA-3F89-598F-9BF2-57DF480FE111</RequestId>\\n    <ErrorMessage>The specified resource type is invalid.</ErrorMessage>\\n    <Success>true</Success>\\n    <ErrorCode>MandatoryParameters</ErrorCode>\\n    <Code>-1001</Code>\\n    <Message>null</Message>\\n    <DynamicMessage>The specified store %s does not exist.</DynamicMessage>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>20</PageSize>\\n    <TotalCount>24</TotalCount>\\n    <DynamicCode>PlatformResponseError.%s</DynamicCode>\\n    <EslItemBindInfos>\\n        <EslBarCode>18bc5a63****</EslBarCode>\\n        <TemplateSceneId>123456</TemplateSceneId>\\n        <ActionPrice>690</ActionPrice>\\n        <ItemTitle>麦麸吐司</ItemTitle>\\n        <PromotionStart>2020-03-16T07:05:34Z</PromotionStart>\\n        <PriceUnit>187</PriceUnit>\\n        <OriginalPrice>500</OriginalPrice>\\n        <ItemId>1234567</ItemId>\\n        <GmtModified>1656469716000</GmtModified>\\n        <EslPic>kUzlfuzgayDo5uTXW3D66Q</EslPic>\\n        <StoreId>s-pdwrrnkufn</StoreId>\\n        <ItemShortTitle>牛奶</ItemShortTitle>\\n        <BindId>b4adf048-f36d-4da5-a8bb-ab4adbd5eb04</BindId>\\n        <PromotionText>买一送一</PromotionText>\\n        <EslModel>AESL0213</EslModel>\\n        <BePromotion>true</BePromotion>\\n        <SkuId>124</SkuId>\\n        <EslConnectAp>11:22:33:44:55:66</EslConnectAp>\\n        <EslStatus>ESL_STATUS_ONLINE</EslStatus>\\n        <TemplateId>123456</TemplateId>\\n        <PromotionEnd>2020-03-17T07:05:34Z</PromotionEnd>\\n        <ItemBarCode>690560583****</ItemBarCode>\\n        <ContainerName>2</ContainerName>\\n    </EslItemBindInfos>\\n</DescribeBindersResponse>","errorExample":""}]',
      'title' => '查询绑定信息',
      'summary' => '查询商品和价签的绑定信息。',
    ),
    'DescribeEslDevice' => 
    array (
      'summary' => '增量查询价签绑定状态',
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
        1 => 
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
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'FromDate',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        2 => 
        array (
          'name' => 'ToDate',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
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
              'TotalCount' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'PageSize' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'PageNumber' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'EslDetails' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EslBarCode' => 
                    array (
                      'type' => 'string',
                    ),
                    'LastUpdateTime' => 
                    array (
                      'type' => 'string',
                    ),
                    'ItemBarCode' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'ItemId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'ItemShortTitle' => 
                    array (
                      'type' => 'string',
                    ),
                    'Status' => 
                    array (
                      'type' => 'string',
                    ),
                    'StoreId' => 
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
      'responseDemo' => '',
    ),
    'DescribeEslDevices' => 
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
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：当前页码，默认值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '价签类型，可选值：

- `ESL_TYPE_E_INK`：电子墨水屏幕

- `ESL_TYPE_DM_LCD`：段码屏幕

- `ESL_TYPE_FULL_COLOR`：彩色屏幕。',
            'type' => 'string',
            'required' => false,
            'example' => 'ESL_TYPE_E_INK',
          ),
        ),
        2 => 
        array (
          'name' => 'TypeEncode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '类型编码
取值范围如下：
NORMAL 常规
LOW_TEMPLATE 低温价签
THREE_COLOR 三色价签
ESL_TYPE_DM_LCD  段码屏幕
ESL_TYPE_FULL_COLOR 彩色屏幕
ESL_TYPE_MUTIMEDIA 多媒体',
            'description' => '价签类型，可选值：

- `NORMAL`：常规

- `LOW_TEMPLATE`：低温

- `THREE_COLOR`：三色

- `ESL_TYPE_DM_LCD`：段码

- `ESL_TYPE_FULL_COLOR`：彩色

- `ESL_TYPE_MUTI_MEDIA`：多媒体。',
            'type' => 'string',
            'required' => false,
            'example' => 'LOW_TEMPLATE',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：每页显示条数，默认值10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'ToBatteryLevel',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '电量区间右偏移，电量大于等于输入值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '80',
          ),
        ),
        5 => 
        array (
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        6 => 
        array (
          'name' => 'EslStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '价签状态，可选值：

- `ESL_STATUS_ONLINE`：在线，已绑定

- `ESL_STATUS_OFFLINE`：离线，已绑定

- `ESL_STATUS_UNBIND`：未绑定。',
            'type' => 'string',
            'required' => false,
            'example' => 'ESL_STATUS_ONLINE',
          ),
        ),
        7 => 
        array (
          'name' => 'EslBarCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '价签条码。',
            'type' => 'string',
            'required' => false,
            'example' => '18bc5a63****',
          ),
        ),
        8 => 
        array (
          'name' => 'FromBatteryLevel',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '电量区间左偏移，电量小于等于输入值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        9 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '扩展参数',
            'type' => 'string',
            'required' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters ',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'PageNumber' => 
              array (
                'description' => '分页参数：当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页参数：每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'EslDevices' => 
              array (
                'description' => '价签信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '价签类型，返回值对应关系：

- `ESL_TYPE_E_INK`：电子墨水屏幕

- `ESL_TYPE_DM_LCD`：段码屏幕

- `ESL_TYPE_FULL_COLOR`：彩色屏幕。',
                      'type' => 'string',
                      'example' => 'ESL_TYPE_E_INK',
                    ),
                    'StoreId' => 
                    array (
                      'description' => '门店ID。',
                      'type' => 'string',
                      'example' => 's-dxsxx****',
                    ),
                    'EslBarCode' => 
                    array (
                      'description' => '价签条码。',
                      'type' => 'string',
                      'example' => '18bc5a63****',
                    ),
                    'Model' => 
                    array (
                      'description' => '价签型号。',
                      'type' => 'string',
                      'example' => 'AESL0213',
                    ),
                    'LastCommunicateTime' => 
                    array (
                      'description' => '最后通讯时间。',
                      'type' => 'string',
                      'example' => '2020-03-16T07:04:16Z',
                    ),
                    'ScreenHeight' => 
                    array (
                      'description' => '屏幕高度，单位为px。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '200',
                    ),
                    'ScreenWidth' => 
                    array (
                      'description' => '屏幕宽度，单位为px。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '200',
                    ),
                    'EslSignal' => 
                    array (
                      'description' => '价签信号',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '54',
                    ),
                    'BatteryLevel' => 
                    array (
                      'description' => '电量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '100',
                    ),
                    'EslStatus' => 
                    array (
                      'description' => '价签状态，返回值对应关系：

- `ESL_STATUS_ONLINE`：在线，已绑定

- `ESL_STATUS_OFFLINE`：离线，已绑定

- `ESL_STATUS_UNBIND`：未绑定。',
                      'type' => 'string',
                      'example' => 'ESL_STATUS_ONLINE',
                    ),
                    'Mac' => 
                    array (
                      'description' => '价签Mac地址。',
                      'type' => 'string',
                      'example' => '18:bc:5a:63:**:**',
                    ),
                    'TypeEncode' => 
                    array (
                      'title' => '类型编码
取值范围如下：
NORMAL 常规
LOW_TEMPLATE 低温价签
THREE_COLOR 三色价签
ESL_TYPE_DM_LCD  段码屏幕
ESL_TYPE_FULL_COLOR 彩色屏幕
ESL_TYPE_MUTIMEDIA 多媒体
',
                      'description' => '类型编码
取值范围如下：
NORMAL 常规
LOW_TEMPLATE 低温价签
THREE_COLOR 三色价签
ESL_TYPE_DM_LCD  段码屏幕
ESL_TYPE_FULL_COLOR 彩色屏幕
ESL_TYPE_MUTIMEDIA 多媒体
',
                      'type' => 'string',
                      'example' => 'THREE_COLOR',
                    ),
                    'LayoutId' => 
                    array (
                      'description' => '布局ID。仅支持传单个ID。',
                      'type' => 'string',
                      'example' => '7',
                    ),
                    'LayoutName' => 
                    array (
                      'description' => '布局名称。',
                      'type' => 'string',
                      'example' => '新增布局',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters \\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"EslDevices\\": [\\n    {\\n      \\"Type\\": \\"ESL_TYPE_E_INK\\",\\n      \\"StoreId\\": \\"s-dxsxx****\\",\\n      \\"EslBarCode\\": \\"18bc5a63****\\",\\n      \\"Model\\": \\"AESL0213\\",\\n      \\"LastCommunicateTime\\": \\"2020-03-16T07:04:16Z\\",\\n      \\"ScreenHeight\\": 200,\\n      \\"ScreenWidth\\": 200,\\n      \\"EslSignal\\": 54,\\n      \\"BatteryLevel\\": 100,\\n      \\"EslStatus\\": \\"ESL_STATUS_ONLINE\\",\\n      \\"Mac\\": \\"18:bc:5a:63:**:**\\",\\n      \\"TypeEncode\\": \\"THREE_COLOR\\",\\n      \\"LayoutId\\": \\"7\\",\\n      \\"LayoutName\\": \\"新增布局\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <TotalCount>4</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>80B45212-5669-4B27-9B8E-80BDCB18E99C</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <EslDevices>\\n        <EslBarCode>18bc5a63****</EslBarCode>\\n        <Type>ESL_TYPE_E_INK</Type>\\n        <BatteryLevel>100</BatteryLevel>\\n        <StoreId>s-ph5agd****</StoreId>\\n        <ScreenWidth>320</ScreenWidth>\\n        <EslStatus>ESL_STATUS_ONLINE</EslStatus>\\n        <ScreenHeight>240</ScreenHeight>\\n        <LastCommunicateTime>2020-03-16T07:04:16Z</LastCommunicateTime>\\n        <Mac>18:bc:5a:63:**:**</Mac>\\n        <EslSignal>47</EslSignal>\\n    </EslDevices>\\n    <EslDevices>\\n        <EslBarCode>18bc5a7a****</EslBarCode>\\n        <Type>ESL_TYPE_E_INK</Type>\\n        <BatteryLevel>100</BatteryLevel>\\n        <StoreId>s-ph5agd****</StoreId>\\n        <ScreenWidth>400</ScreenWidth>\\n        <EslStatus>ESL_STATUS_OFFLINE</EslStatus>\\n        <ScreenHeight>300</ScreenHeight>\\n        <LastCommunicateTime>2020-03-14T17:19:57Z</LastCommunicateTime>\\n        <Mac>18:bc:5a:7a:**:**</Mac>\\n        <EslSignal>47</EslSignal>\\n    </EslDevices>\\n    <Success>true</Success>\\n</data>\\n<requestId>80B45212-5669-4B27-9B8E-80BDCB18E99C</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => '查询价签设备',
      'summary' => '查询价签设备信息。',
      'requestParamsDescription' => ' 根据电量区间查询暂时不支持',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateStore' => 
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
          'BearerToken' => 
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
          'name' => 'ParentId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '父门店ID',
            'type' => 'string',
            'required' => false,
            'example' => 's-dxsxx****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserStoreCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商家自定义门店ID',
            'type' => 'string',
            'required' => false,
            'example' => '20200201',
          ),
        ),
        2 => 
        array (
          'name' => 'StoreName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '天猫旗舰店',
          ),
        ),
        3 => 
        array (
          'name' => 'Phone',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店联系电话',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0571-5666888',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户端token',
            'type' => 'string',
            'required' => false,
            'example' => '1212',
          ),
        ),
        5 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统保留字段，请忽略',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        6 => 
        array (
          'name' => 'TimeZone',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '时区',
            'type' => 'string',
            'required' => false,
            'example' => 'GMT+08:00',
          ),
        ),
        7 => 
        array (
          'name' => 'BarCodeEncode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '条形码编码方式：0：Code128 ，1：EAN13（默认0）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1',
            'minimum' => '0',
            'enumValueTitles' => 
            array (
            ),
            'example' => '0',
            'default' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'AutoUnbindOfflineEsl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否启用自动解绑离线价签',
            'description' => '是否启用自动解绑离线价签',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'AutoUnbindDays',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自动解绑离线价签条件-价签离线天数',
            'description' => '自动解绑离线价签条件-价签离线天数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '7',
            'example' => '30',
            'default' => '36500',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'StoreId' => 
              array (
                'description' => '门店ID。',
                'type' => 'string',
                'example' => 's-dxsxx****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"StoreId\\": \\"s-dxsxx****\\",\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>8F124625-DF0A-4B08-B205-2CF538FAF713</RequestId>\\n    <Success>true</Success>\\n</data>\\n<requestId>8F124625-DF0A-4B08-B205-2CF538FAF713</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => '创建门店',
      'summary' => '增加一个门店。',
      'requestParamsDescription' => ' ParentId字段，暂时不支持。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteStore' => 
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
          'BearerToken' => 
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
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        1 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统保留字段，请忽略',
            'type' => 'string',
            'required' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>8F124625-DF0A-4B08-B205-2CF538FAF713</RequestId>\\n    <Success>true</Success>\\n</data>\\n<requestId>8F124625-DF0A-4B08-B205-2CF538FAF713</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => 'DeleteStore',
      'summary' => '删除门店。',
      'description' => '删除门店的前提条件：该门店下没有商品和价签',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' 删除门店前，需先保证门店下没有商品、价签设备和基站设备；',
    ),
    'UpdateStore' => 
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
          'BearerToken' => 
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
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserStoreCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商家自定义门店ID。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        2 => 
        array (
          'name' => 'StoreName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店名称。',
            'type' => 'string',
            'required' => false,
            'example' => '天猫超市',
          ),
        ),
        3 => 
        array (
          'name' => 'Phone',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店所在监督工商局的监督电话。',
            'type' => 'string',
            'required' => false,
            'example' => '0571-5666888',
          ),
        ),
        4 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统保留字段，请忽略；',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        5 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店模板版本；',
            'type' => 'string',
            'required' => false,
            'example' => '1.1.0',
          ),
        ),
        6 => 
        array (
          'name' => 'Timezone',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '时区。',
            'type' => 'string',
            'required' => false,
            'example' => 'GMT+08:00',
          ),
        ),
        7 => 
        array (
          'name' => 'BarCodeEncode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '条形码编码方式：0：Code128 ，1：EAN13（默认0）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1',
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'AutoUnbindOfflineEsl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否启用自动解绑离线价签',
            'description' => '是否自动解绑离线价签',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'AutoUnbindDays',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '自动解绑离线价签条件-价签离线天数',
            'description' => '自动解绑时间，单位：日',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '36500',
            'minimum' => '7',
            'example' => '1',
            'default' => '36500',
          ),
        ),
      ),
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求状态标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '后端错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateStoreResponse>\\n    <RequestId>E69C8998-1787-4999-8C75-D663FF1173CF</RequestId>\\n    <ErrorMessage>The specified resource type is invalid.</ErrorMessage>\\n    <Success>true</Success>\\n    <ErrorCode>MandatoryParameters</ErrorCode>\\n    <Code>-1001</Code>\\n    <Message>success</Message>\\n    <DynamicMessage>The specified store %s does not exist.</DynamicMessage>\\n    <DynamicCode>PlatformResponseError.%s</DynamicCode>\\n</UpdateStoreResponse>","errorExample":""}]',
      'title' => '修改门店信息',
      'summary' => '修改门店基础信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateStoreConfig' => 
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
          'BearerToken' => 
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
          'name' => 'NotificationSilentTimes',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户配置的静默期，不发通知消息，JSON列表，单位为分钟，每个JSON字段表示一个静默期时间段，里面的值为UTC时间下一天里面的分钟数，from为静默期的起始分钟数，to为结束分钟数。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"from":960,"to":1320},{"from":1170,"to":1230}]',
          ),
        ),
        1 => 
        array (
          'name' => 'EnableNotification',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否启用钉钉异常消息通知，true 启用，false不启用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-sds1233****',
          ),
        ),
        3 => 
        array (
          'name' => 'NotificationWebHook',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '钉钉消息的webHook地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://oapi.dingtalk.com/robot/send?.',
          ),
        ),
        4 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统扩展字段，请忽略；',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        5 => 
        array (
          'name' => 'SubscribeContents',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '订阅内容。',
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
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '97B41B7F-A6EC-524C-9B8F-1BDD7E733F5E',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求状态标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"97B41B7F-A6EC-524C-9B8F-1BDD7E733F5E\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","type":"json"}]',
      'title' => '修改门店配置',
      'summary' => '修改门店的配置信息。',
    ),
    'DescribeStores' => 
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
          'name' => 'UserStoreCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商家自定义门店ID。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：当前页码，默认值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：每页显示条数，默认值10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'StoreName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店名称。',
            'type' => 'string',
            'required' => false,
            'example' => '天猫超市',
          ),
        ),
        4 => 
        array (
          'name' => 'ToDate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店创建时间：结束时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-03-08T02:58:16Z',
          ),
        ),
        5 => 
        array (
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID。',
            'type' => 'string',
            'required' => false,
            'example' => 's-dxsxx****',
          ),
        ),
        6 => 
        array (
          'name' => 'FromDate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店创建时间：开始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-03-06T02:58:16Z',
          ),
        ),
        7 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统保留字段，请忽略；',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        8 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店配置的模板版本号；',
            'type' => 'string',
            'required' => false,
            'example' => '1.1.0',
          ),
        ),
      ),
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '后端错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'PageNumber' => 
              array (
                'description' => '分页参数：当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页参数：每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'Stores' => 
              array (
                'description' => '门店信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'StoreId' => 
                    array (
                      'description' => '门店ID。',
                      'type' => 'string',
                      'example' => 's-dxsxx**** ',
                    ),
                    'ParentId' => 
                    array (
                      'description' => '父门店ID。',
                      'type' => 'string',
                      'example' => 's-aasx****',
                    ),
                    'TimeZone' => 
                    array (
                      'description' => '门店时区配置',
                      'type' => 'string',
                      'example' => 'GMT+08:00',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2020-03-06T02:58:16Z',
                    ),
                    'StoreName' => 
                    array (
                      'description' => '门店名称。',
                      'type' => 'string',
                      'example' => '天猫旗舰店',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'string',
                      'example' => '2020-03-06T02:58:16Z',
                    ),
                    'TemplateVersion' => 
                    array (
                      'description' => '门店模板版本号；',
                      'type' => 'string',
                      'example' => '1.1.0',
                    ),
                    'Level' => 
                    array (
                      'description' => '级别。',
                      'type' => 'string',
                      'example' => '1级',
                    ),
                    'Phone' => 
                    array (
                      'description' => '门店所在监督工商局的监督电话。',
                      'type' => 'string',
                      'example' => '0571-5666888',
                    ),
                    'UserStoreCode' => 
                    array (
                      'description' => '商家自定义门店ID。',
                      'type' => 'string',
                      'example' => '20200201',
                    ),
                    'BarCodeEncode' => 
                    array (
                      'description' => '条形码编码方式：0：Code128 ，1：EAN13（默认0）',
                      'type' => 'integer',
                      'format' => 'int32',
                      'maximum' => '1',
                      'minimum' => '0',
                      'example' => '0',
                      'default' => '0',
                    ),
                    'AutoUnbindOfflineEsl' => 
                    array (
                      'title' => '是否启用自动解绑离线价签',
                      'description' => '是否启用自动解绑离线价签',
                      'type' => 'boolean',
                      'example' => 'true',
                      'default' => 'false',
                    ),
                    'AutoUnbindDays' => 
                    array (
                      'title' => '自动解绑离线价签条件-价签离线天数',
                      'description' => '自动解绑离线价签条件-价签离线天数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                      'default' => '36500',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"Stores\\": [\\n    {\\n      \\"StoreId\\": \\"s-dxsxx**** \\",\\n      \\"ParentId\\": \\"s-aasx****\\",\\n      \\"TimeZone\\": \\"GMT+08:00\\",\\n      \\"GmtCreate\\": \\"2020-03-06T02:58:16Z\\",\\n      \\"StoreName\\": \\"天猫旗舰店\\",\\n      \\"GmtModified\\": \\"2020-03-06T02:58:16Z\\",\\n      \\"TemplateVersion\\": \\"1.1.0\\",\\n      \\"Level\\": \\"1级\\",\\n      \\"Phone\\": \\"0571-5666888\\",\\n      \\"UserStoreCode\\": \\"20200201\\",\\n      \\"BarCodeEncode\\": 0,\\n      \\"AutoUnbindOfflineEsl\\": true,\\n      \\"AutoUnbindDays\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeStoresResponse>\\n    <RequestId>E69C8998-1787-4999-8C75-D663FF1173CF</RequestId>\\n    <ErrorMessage>The specified resource type is invalid.</ErrorMessage>\\n    <Success>true</Success>\\n    <ErrorCode>MandatoryParameters</ErrorCode>\\n    <Code>-1001</Code>\\n    <Message>success</Message>\\n    <DynamicMessage>The specified store %s does not exist.</DynamicMessage>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>100</TotalCount>\\n    <DynamicCode>PlatformResponseError.%s</DynamicCode>\\n    <Stores>\\n        <StoreId>s-dxsxx****</StoreId>\\n        <ParentId>s-aasx****</ParentId>\\n        <TimeZone>GMT+08:00</TimeZone>\\n        <GmtCreate>2020-03-06T02:58:16Z</GmtCreate>\\n        <StoreName>天猫旗舰店</StoreName>\\n        <GmtModified>2020-03-06T02:58:16Z</GmtModified>\\n        <TemplateVersion>1.1.0</TemplateVersion>\\n        <Level>1级</Level>\\n        <Phone>0571-5666888</Phone>\\n        <UserStoreCode>20200201</UserStoreCode>\\n        <BarCodeEncode>0</BarCodeEncode>\\n        <AutoUnbindOfflineEsl>true</AutoUnbindOfflineEsl>\\n        <AutoUnbindDays>1</AutoUnbindDays>\\n    </Stores>\\n</DescribeStoresResponse>","errorExample":""}]',
      'title' => '查询门店',
      'summary' => '查询门店基础信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeStoreConfig' => 
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
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        1 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统保留字段，请忽略',
            'type' => 'string',
            'required' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求状态标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'StoreConfigInfo' => 
              array (
                'description' => '门店配置信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'StoreId' => 
                  array (
                    'description' => '门店ID。',
                    'type' => 'string',
                    'example' => 's-dxsxx****',
                  ),
                  'EnableNotification' => 
                  array (
                    'description' => '是否启用钉钉异常消息通知。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'NotificationWebHook' => 
                  array (
                    'description' => '钉钉消息的webHook地址。',
                    'type' => 'string',
                    'example' => 'https://oapi.dingtalk.com/robot/send?.',
                  ),
                  'NotificationSilentTimes' => 
                  array (
                    'description' => '用户配置的静默期，不发通知消息，JSON列表，单位为分钟，每个JSON字段表示一个静默期时间段，里面的值为UTC时间下一天里面的分钟数，from为静默期的起始分钟数，to为结束分钟数。',
                    'type' => 'string',
                    'example' => '[{"from":960,"to":1320},{"from":1170,"to":1230}]',
                  ),
                  'SubscribeContents' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Category' => 
                        array (
                          'type' => 'string',
                        ),
                        'Enable' => 
                        array (
                          'type' => 'boolean',
                        ),
                        'Threshold' => 
                        array (
                          'type' => 'string',
                        ),
                        'AtAll' => 
                        array (
                          'type' => 'boolean',
                        ),
                        'AtMobileList' => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"StoreConfigInfo\\": {\\n    \\"StoreId\\": \\"s-dxsxx****\\",\\n    \\"EnableNotification\\": true,\\n    \\"NotificationWebHook\\": \\"https://oapi.dingtalk.com/robot/send?.\\",\\n    \\"NotificationSilentTimes\\": \\"[{\\\\\\"from\\\\\\":960,\\\\\\"to\\\\\\":1320},{\\\\\\"from\\\\\\":1170,\\\\\\"to\\\\\\":1230}]\\",\\n    \\"SubscribeContents\\": [\\n      {\\n        \\"Category\\": \\"\\",\\n        \\"Enable\\": true,\\n        \\"Threshold\\": \\"\\",\\n        \\"AtAll\\": true,\\n        \\"AtMobileList\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>CE715689-3EBA-422C-B3E7-76D98B7D0AE8</RequestId>\\n    <StoreConfigInfo>\\n        <StoreId>s-cc3nq****</StoreId>\\n        <EnableNotification>true</EnableNotification>\\n    </StoreConfigInfo>\\n    <Success>true</Success>\\n</data>\\n<requestId>CE715689-3EBA-422C-B3E7-76D98B7D0AE8</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => 'DescribeStoreConfig',
      'summary' => '查询门店配置信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteItem' => 
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
          'BearerToken' => 
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
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        1 => 
        array (
          'name' => 'ItemBarCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品条码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '693737264225',
          ),
        ),
        2 => 
        array (
          'name' => 'UnbindEslDevice',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否解绑该商品已绑定的价签设备，默认值false',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteItemResponse>\\n    <RequestId>E69C8998-1787-4999-8C75-D663FF1173CF</RequestId>\\n    <ErrorMessage>The specified resource type is invalid.</ErrorMessage>\\n    <Success>true</Success>\\n    <ErrorCode>MandatoryParameters</ErrorCode>\\n    <Code>-1001</Code>\\n    <Message>success</Message>\\n    <DynamicMessage>The specified store %s does not exist.</DynamicMessage>\\n    <DynamicCode>PlatformResponseError.%s</DynamicCode>\\n</DeleteItemResponse>","errorExample":""}]',
      'title' => '删除门店商品',
      'summary' => '删除门店商品。',
    ),
    'BatchInsertItems' => 
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
          'BearerToken' => 
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
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID，一次最多插入100条数据。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        1 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统扩展字段，请忽略；',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        2 => 
        array (
          'name' => 'SyncByItemId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '默认值为false，如果配置为true则商品信息会更新门店下其它ItemId字段相同的商品信息；如果一次商品列表中包含多个ItemId相同的商品，则以排在最后那个内容做更新；',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'ItemInfo',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '商品信息列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ActionPrice' => 
                array (
                  'description' => '实际销售价格(单位:分)。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => true,
                  'example' => '500',
                ),
                'ItemTitle' => 
                array (
                  'description' => '商品全称，最长100字符；',
                  'type' => 'string',
                  'required' => true,
                  'example' => '光明儿童星',
                ),
                'BrandName' => 
                array (
                  'description' => '品牌名称，最长64字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '光明乳业',
                ),
                'SourceCode' => 
                array (
                  'description' => '溯源码，最长128个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1234567',
                ),
                'PriceUnit' => 
                array (
                  'description' => '计价单位，最长64个字符；',
                  'type' => 'string',
                  'required' => true,
                  'example' => '箱',
                ),
                'ForestFirstId' => 
                array (
                  'description' => '一类商品类目ID，最长32个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '食品',
                ),
                'CustomizeFeatureF' => 
                array (
                  'description' => '自定义属性F，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性F',
                ),
                'CustomizeFeatureA' => 
                array (
                  'description' => '自定义属性A，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性A',
                ),
                'CustomizeFeatureK' => 
                array (
                  'description' => '自定义属性K，最长128个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性K',
                ),
                'TemplateSceneId' => 
                array (
                  'description' => '客户自定义模板ID，如果有输入有效字符则匹配客户自定义模板进行商品展示，默认值为空字符“”；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '23452',
                ),
                'CustomizeFeatureD' => 
                array (
                  'description' => '自定义属性D，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性D',
                ),
                'MemberPrice' => 
                array (
                  'description' => '会员价(单位:分)。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '800',
                ),
                'ModelNumber' => 
                array (
                  'description' => '型号，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '330',
                ),
                'PromotionStart' => 
                array (
                  'description' => '促销开始时间 UTC格式 "yyyy-MM-dd\'T\'HH:mm:ss\'Z\'"。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2020-02-10T00:00:00Z',
                ),
                'CategoryName' => 
                array (
                  'description' => '品类，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '饮料',
                ),
                'CustomizeFeatureE' => 
                array (
                  'description' => '自定义属性E，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性E',
                ),
                'SuggestPrice' => 
                array (
                  'description' => '建议零售价(单位:分)。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '600',
                ),
                'SaleSpec' => 
                array (
                  'description' => '规格，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '330毫升',
                ),
                'PromotionText' => 
                array (
                  'description' => '促销文案，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '买一送一',
                ),
                'PromotionReason' => 
                array (
                  'description' => '促销原因，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '儿童节活动',
                ),
                'Rank' => 
                array (
                  'description' => '等级，最长32个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1级',
                ),
                'CustomizeFeatureG' => 
                array (
                  'description' => '自定义属性G，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性G',
                ),
                'SalesPrice' => 
                array (
                  'description' => '销售价格(单位:分)。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1000',
                ),
                'CustomizeFeatureH' => 
                array (
                  'description' => '自定义属性H，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性H',
                ),
                'OriginalPrice' => 
                array (
                  'description' => '原价(单位:分)。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1000',
                ),
                'CustomizeFeatureI' => 
                array (
                  'description' => '自定义属性I，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性I',
                ),
                'ProductionPlace' => 
                array (
                  'description' => '产地，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '中国',
                ),
                'CustomizeFeatureB' => 
                array (
                  'description' => '自定义属性B，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性B',
                ),
                'ItemShortTitle' => 
                array (
                  'description' => '商品简称，不输入则从商品全称中截取，最长64字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '牛奶',
                ),
                'CustomizeFeatureN' => 
                array (
                  'description' => '自定义属性N，最长128个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性N',
                ),
                'BeMember' => 
                array (
                  'description' => '是否匹配会员模板显示，默认值为false；',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'TaxFee' => 
                array (
                  'description' => '税费信息，最长32个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '增值税',
                ),
                'InventoryStatus' => 
                array (
                  'description' => '是否匹配缺货模板显示，可选值：

- `OUT_OF_STOCK`：缺货

- `NORMAL`：正常。

默认值NORMAL，如果配置为OUT_OF_STOCK则会配置缺货模板进行显示',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'OUT_OF_STOCK',
                ),
                'ItemPicUrl' => 
                array (
                  'description' => '商品图片URL，最长128个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http://m.taobao.com/xxx.html',
                ),
                'SupplierName' => 
                array (
                  'description' => '经销商，最长128个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '天猫超市',
                ),
                'CustomizeFeatureL' => 
                array (
                  'description' => '自定义属性L，最长128个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性L',
                ),
                'EnergyEfficiency' => 
                array (
                  'description' => '能效，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2焦/毫升',
                ),
                'CustomizeFeatureC' => 
                array (
                  'description' => '自定义属性C，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性C',
                ),
                'ItemId' => 
                array (
                  'description' => '自定义商品条码，只允许输入构成整数的阿拉伯数字。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '1234567',
                ),
                'Manufacturer' => 
                array (
                  'description' => '生产商，最长128个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '中国制造',
                ),
                'Material' => 
                array (
                  'description' => '材质，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '新鲜牛奶',
                ),
                'CustomizeFeatureJ' => 
                array (
                  'description' => '自定义属性J，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性J',
                ),
                'CustomizeFeatureO' => 
                array (
                  'description' => '自定义属性O，最长128个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性O',
                ),
                'CustomizeFeatureP' => 
                array (
                  'description' => '自定义属性P，最长512字符',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性P',
                ),
                'CustomizeFeatureQ' => 
                array (
                  'description' => '自定义属性Q，最长512字符',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性Q',
                ),
                'CustomizeFeatureR' => 
                array (
                  'description' => '自定义属性R，最长512字符',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性R',
                ),
                'CustomizeFeatureS' => 
                array (
                  'description' => '自定义属性S，最长512字符',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性S',
                ),
                'CustomizeFeatureT' => 
                array (
                  'description' => '自定义属性T，最长512字符',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性T',
                ),
                'CustomizeFeatureU' => 
                array (
                  'description' => '自定义属性U，最长512字符',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性U',
                ),
                'CustomizeFeatureV' => 
                array (
                  'description' => '自定义属性V，最长512字符',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性V',
                ),
                'CustomizeFeatureW' => 
                array (
                  'description' => '自定义属性W，最长512字符',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性W',
                ),
                'CustomizeFeatureX' => 
                array (
                  'description' => '自定义属性X，最长512字符',
                  'type' => 'string',
                  'required' => false,
                  'example' => '345678',
                ),
                'CustomizeFeatureY' => 
                array (
                  'description' => '自定义属性Y，最长512字符',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'YYY',
                ),
                'CustomizeFeatureZ' => 
                array (
                  'description' => '自定义属性Z，最长512字符',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ZZZZ',
                ),
                'SkuId' => 
                array (
                  'description' => '商品ID(SKU)，最长64个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1234567',
                ),
                'CustomizeFeatureM' => 
                array (
                  'description' => '自定义属性M，最长128个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '自定义属性M',
                ),
                'BePromotion' => 
                array (
                  'description' => '是否匹配促销模板显示，默认值为false；',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'BeSourceCode' => 
                array (
                  'description' => '是否匹配溯源模板显示，默认值为false；',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'ForestSecondId' => 
                array (
                  'description' => '二类商品类目ID，最长32个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => '饮料',
                ),
                'ItemQrCode' => 
                array (
                  'description' => '商品二维码地址，最长1024个字符；',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http://m.taobao.com/xxx.html',
                ),
                'ItemInfoIndex' => 
                array (
                  'description' => '商品信息坐标，此字段不用填。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'PromotionEnd' => 
                array (
                  'description' => '促销结束时间 UTC格式 "yyyy-MM-dd\'T\'HH:mm:ss\'Z\'"。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2020-02-01T00:00:00Z',
                ),
                'ItemBarCode' => 
                array (
                  'description' => '商品条码，字符不区分大小写，最长64；',
                  'type' => 'string',
                  'required' => true,
                  'example' => '690560583****',
                ),
                'BeClearance' => 
                array (
                  'description' => '是否匹配出清，默认值为false；',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 500,
          ),
        ),
      ),
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'BatchResults' => 
              array (
                'description' => '批量返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Index' => 
                    array (
                      'description' => '请求序列下标。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Message' => 
                    array (
                      'description' => '消息。',
                      'type' => 'string',
                      'example' => 'success',
                    ),
                    'Success' => 
                    array (
                      'description' => '当前商品插入成功与否标识。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ErrorCode' => 
                    array (
                      'description' => '错误码。',
                      'type' => 'string',
                      'example' => 'MandatoryParameters',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"BatchResults\\": [\\n    {\\n      \\"Index\\": 1,\\n      \\"Message\\": \\"success\\",\\n      \\"Success\\": true,\\n      \\"ErrorCode\\": \\"MandatoryParameters\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<BatchInsertItemsResponse>\\n    <RequestId>E69C8998-1787-4999-8C75-D663FF1173CF</RequestId>\\n    <ErrorMessage>The specified resource type is invalid.</ErrorMessage>\\n    <Success>true</Success>\\n    <ErrorCode>MandatoryParameters</ErrorCode>\\n    <Code>-1001</Code>\\n    <Message>success</Message>\\n    <DynamicMessage>The specified store %s does not exist.</DynamicMessage>\\n    <DynamicCode>PlatformResponseError.%s</DynamicCode>\\n    <BatchResults>\\n        <Index>1</Index>\\n        <Message>success</Message>\\n        <Success>true</Success>\\n        <ErrorCode>MandatoryParameters</ErrorCode>\\n    </BatchResults>\\n</BatchInsertItemsResponse>","errorExample":""}]',
      'title' => 'BatchInsertItems',
      'summary' => '批量新增或修改商品信息，一次最大商品数量为100条，每次不能包含相同的商品条码。',
      'requestParamsDescription' => '商品信息的下列字段会用于匹配模板显示，优先级从高到低

-  TemplateSceneId：尝试匹配客户自定义模板；
-  InventoryStatus：尝试匹配缺货模板；
-  BeMember：尝试匹配会员模板；
-  BeSourceCode && BePromotion：尝试匹配营销模板；
-  BeSourceCode：尝试匹配溯源模板；
-  BePromotion：尝试匹配促销模板；
-  BeClearance：尝试匹配出清模板；',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeItems' => 
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
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：每页显示条数，默认值20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：当前页码，默认值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'ItemTitle',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品标题。',
            'type' => 'string',
            'required' => false,
            'example' => '纯牛奶',
          ),
        ),
        3 => 
        array (
          'name' => 'SkuId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'SkuID。',
            'type' => 'string',
            'required' => false,
            'example' => '1234565',
          ),
        ),
        4 => 
        array (
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        5 => 
        array (
          'name' => 'ItemBarCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品条码;',
            'type' => 'string',
            'required' => false,
            'example' => '6941297417178',
          ),
        ),
        6 => 
        array (
          'name' => 'ItemId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品id',
            'type' => 'string',
            'required' => false,
            'example' => '6959294202901',
          ),
        ),
        7 => 
        array (
          'name' => 'BePromotion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否匹配促销模板显示，默认值为false；',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统保留字段，请忽略；',
            'type' => 'string',
            'required' => false,
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
              'TemplateSceneId' => 
              array (
                'description' => '自定义模板ID',
                'type' => 'string',
                'example' => '1223',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求状态标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '出错提示消息',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的**%s**。
',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'TotalCount' => 
              array (
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'PageNumber' => 
              array (
                'description' => '分页参数：当前页码，默认值1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页参数：每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Items' => 
              array (
                'description' => '商品信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ActionPrice' => 
                    array (
                      'description' => '实际销售价格（单位：分）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '500',
                    ),
                    'ItemTitle' => 
                    array (
                      'description' => '商品标题。',
                      'type' => 'string',
                      'example' => '纯牛奶',
                    ),
                    'BrandName' => 
                    array (
                      'description' => '品牌名称，最长64字符；',
                      'type' => 'string',
                      'example' => '阿里巴巴',
                    ),
                    'SourceCode' => 
                    array (
                      'description' => '溯源码，最长128个字符；',
                      'type' => 'string',
                      'example' => '123456',
                    ),
                    'PriceUnit' => 
                    array (
                      'description' => '计价单位，最长64个字符；',
                      'type' => 'string',
                      'example' => '瓶',
                    ),
                    'ForestFirstId' => 
                    array (
                      'description' => '一类商品类目ID。',
                      'type' => 'string',
                      'example' => '酒类',
                    ),
                    'CustomizeFeatureF' => 
                    array (
                      'description' => '自定义属性F。',
                      'type' => 'string',
                      'example' => '自定义属性F',
                    ),
                    'CustomizeFeatureA' => 
                    array (
                      'description' => '自定义属性A。',
                      'type' => 'string',
                      'example' => '自定义属性A',
                    ),
                    'CustomizeFeatureK' => 
                    array (
                      'description' => '自定义属性K。',
                      'type' => 'string',
                      'example' => '自定义属性K',
                    ),
                    'TemplateSceneId' => 
                    array (
                      'description' => '自定义模板ID',
                      'type' => 'string',
                      'example' => '11223',
                    ),
                    'CustomizeFeatureD' => 
                    array (
                      'description' => '自定义属性D。',
                      'type' => 'string',
                      'example' => '自定义属性D',
                    ),
                    'MemberPrice' => 
                    array (
                      'description' => '会员价（单位：分）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4000',
                    ),
                    'PromotionStart' => 
                    array (
                      'description' => '促销开始时间 UTC格式 "yyyy-MM-dd\'T\'HH:mm:ss\'Z\'"。',
                      'type' => 'string',
                      'example' => '2022-04-25T16:00:00Z',
                    ),
                    'ModelNumber' => 
                    array (
                      'description' => '型号，最长64个字符；',
                      'type' => 'string',
                      'example' => 'CH8850AS',
                    ),
                    'CategoryName' => 
                    array (
                      'description' => '品类，最长64个字符；',
                      'type' => 'string',
                      'example' => '手机',
                    ),
                    'CustomizeFeatureE' => 
                    array (
                      'description' => '自定义属性E。',
                      'type' => 'string',
                      'example' => '自定义属性E',
                    ),
                    'SuggestPrice' => 
                    array (
                      'description' => '建议零售价（单位：分）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '500',
                    ),
                    'SaleSpec' => 
                    array (
                      'description' => '规格，最长64个字符；',
                      'type' => 'string',
                      'example' => '1台/盒',
                    ),
                    'PromotionText' => 
                    array (
                      'description' => '促销文案，最长64个字符；',
                      'type' => 'string',
                      'example' => '买一送一',
                    ),
                    'Rank' => 
                    array (
                      'description' => '等级，最长32个字符；',
                      'type' => 'string',
                      'example' => '一级',
                    ),
                    'PromotionReason' => 
                    array (
                      'description' => '促销原因，最长64个字符；',
                      'type' => 'string',
                      'example' => '情人节活动',
                    ),
                    'CustomizeFeatureG' => 
                    array (
                      'description' => '自定义属性G。',
                      'type' => 'string',
                      'example' => '自定义属性G',
                    ),
                    'SalesPrice' => 
                    array (
                      'description' => '销售价格（单位：分）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '500',
                    ),
                    'CustomizeFeatureH' => 
                    array (
                      'description' => '自定义属性H。',
                      'type' => 'string',
                      'example' => '自定义属性H',
                    ),
                    'OriginalPrice' => 
                    array (
                      'description' => '原价（单位：分）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '500',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2020-03-09T00:00:00Z',
                    ),
                    'CustomizeFeatureI' => 
                    array (
                      'description' => '自定义属性I。',
                      'type' => 'string',
                      'example' => '自定义属性I',
                    ),
                    'ProductionPlace' => 
                    array (
                      'description' => '产地，最长64个字符；',
                      'type' => 'string',
                      'example' => '中国',
                    ),
                    'CustomizeFeatureB' => 
                    array (
                      'description' => '自定义属性B。',
                      'type' => 'string',
                      'example' => '1:1:16',
                    ),
                    'ItemShortTitle' => 
                    array (
                      'description' => '商品简称，不输入则从商品全称中截取，最长64字符；',
                      'type' => 'string',
                      'example' => '牛奶',
                    ),
                    'CustomizeFeatureN' => 
                    array (
                      'description' => '自定义属性N。',
                      'type' => 'string',
                      'example' => '自定义属性N',
                    ),
                    'BeMember' => 
                    array (
                      'description' => '是否匹配会员模板显示，默认值为false；',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'TaxFee' => 
                    array (
                      'description' => '税费信息，最长32个字符；',
                      'type' => 'string',
                      'example' => '增值税',
                    ),
                    'InventoryStatus' => 
                    array (
                      'description' => '库存状态，返回值对应关系：

- `OUT_OF_STOCK`：缺货

- `NORMAL`：正常。',
                      'type' => 'string',
                      'example' => 'OUT_OF_STOCK',
                    ),
                    'SupplierName' => 
                    array (
                      'description' => '社区镜像认证企业名称。',
                      'type' => 'string',
                      'example' => '天猫超市',
                    ),
                    'ItemPicUrl' => 
                    array (
                      'description' => '商品图片URL。',
                      'type' => 'string',
                      'example' => 'http://m.taobao.com/xxx.html',
                    ),
                    'EnergyEfficiency' => 
                    array (
                      'description' => '能效，最长64个字符；',
                      'type' => 'string',
                      'example' => '1kw/h',
                    ),
                    'CustomizeFeatureL' => 
                    array (
                      'description' => '自定义属性L。',
                      'type' => 'string',
                      'example' => '自定义属性L',
                    ),
                    'CustomizeFeatureC' => 
                    array (
                      'description' => '自定义属性C。',
                      'type' => 'string',
                      'example' => '自定义属性C',
                    ),
                    'ItemId' => 
                    array (
                      'description' => '自定义商品条码，只允许输入构成整数的阿拉伯数字。',
                      'type' => 'string',
                      'example' => '123456',
                    ),
                    'Manufacturer' => 
                    array (
                      'description' => '生产商，最长128个字符；',
                      'type' => 'string',
                      'example' => '广东省深圳',
                    ),
                    'Material' => 
                    array (
                      'description' => '材质，最长64个字符；',
                      'type' => 'string',
                      'example' => '金属',
                    ),
                    'CustomizeFeatureO' => 
                    array (
                      'description' => '自定义属性O。',
                      'type' => 'string',
                      'example' => '自定义属性O',
                    ),
                    'CustomizeFeatureP' => 
                    array (
                      'description' => '自定义属性P',
                      'type' => 'string',
                      'example' => '自定义属性P',
                    ),
                    'CustomizeFeatureQ' => 
                    array (
                      'description' => '自定义属性Q',
                      'type' => 'string',
                      'example' => '自定义属性Q',
                    ),
                    'CustomizeFeatureR' => 
                    array (
                      'description' => '自定义属性R',
                      'type' => 'string',
                      'example' => '自定义属性R',
                    ),
                    'CustomizeFeatureS' => 
                    array (
                      'description' => '自定义属性S',
                      'type' => 'string',
                      'example' => '自定义属性S',
                    ),
                    'CustomizeFeatureT' => 
                    array (
                      'description' => '自定义属性T',
                      'type' => 'string',
                      'example' => '自定义属性T',
                    ),
                    'CustomizeFeatureU' => 
                    array (
                      'description' => '自定义属性U',
                      'type' => 'string',
                      'example' => '自定义属性U',
                    ),
                    'CustomizeFeatureV' => 
                    array (
                      'description' => '自定义属性V',
                      'type' => 'string',
                      'example' => '自定义属性V',
                    ),
                    'CustomizeFeatureW' => 
                    array (
                      'description' => '自定义属性W',
                      'type' => 'string',
                      'example' => '自定义属性W',
                    ),
                    'CustomizeFeatureX' => 
                    array (
                      'description' => '自定义属性X',
                      'type' => 'string',
                      'example' => '自定义属性X',
                    ),
                    'CustomizeFeatureY' => 
                    array (
                      'description' => '自定义属性Y',
                      'type' => 'string',
                      'example' => '自定义属性Y',
                    ),
                    'CustomizeFeatureZ' => 
                    array (
                      'description' => '自定义属性Z',
                      'type' => 'string',
                      'example' => '自定义属性Z',
                    ),
                    'CustomizeFeatureJ' => 
                    array (
                      'description' => '自定义属性J。',
                      'type' => 'string',
                      'example' => '酸酸甜甜，肉厚饱满',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '敏感数据识别规则的创建时间。格式：时间戳。单位：毫秒。',
                      'type' => 'string',
                      'example' => '2020-03-09T00:00:00Z',
                    ),
                    'CustomizeFeatureM' => 
                    array (
                      'description' => '自定义属性M。',
                      'type' => 'string',
                      'example' => '自定义属性M',
                    ),
                    'BePromotion' => 
                    array (
                      'description' => '是否匹配促销模板显示，默认值为false；',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'SkuId' => 
                    array (
                      'description' => 'SKuID。',
                      'type' => 'string',
                      'example' => '123456',
                    ),
                    'BeSourceCode' => 
                    array (
                      'description' => '是否匹配溯源模板显示，默认值为false；',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ForestSecondId' => 
                    array (
                      'description' => '二类商品类目ID。',
                      'type' => 'string',
                      'example' => '白酒',
                    ),
                    'ItemQrCode' => 
                    array (
                      'description' => '商品二维码地址，最长1024个字符；',
                      'type' => 'string',
                      'example' => 'http://m.taobao.com/xxx.html',
                    ),
                    'ItemInfoIndex' => 
                    array (
                      'description' => '商品信息坐标，此字段不用填。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'PromotionEnd' => 
                    array (
                      'description' => '促销结束时间 UTC格式 "yyyy-MM-dd\'T\'HH:mm:ss\'Z\'"。',
                      'type' => 'string',
                      'example' => '2020-02-11T00:00:00Z',
                    ),
                    'ItemBarCode' => 
                    array (
                      'description' => '商品条码。',
                      'type' => 'string',
                      'example' => '01838',
                    ),
                    'BeClearance' => 
                    array (
                      'description' => '是否添加了自定义属性。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TemplateSceneId\\": \\"1223\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"TotalCount\\": 100,\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Items\\": [\\n    {\\n      \\"ActionPrice\\": 500,\\n      \\"ItemTitle\\": \\"纯牛奶\\",\\n      \\"BrandName\\": \\"阿里巴巴\\",\\n      \\"SourceCode\\": \\"123456\\",\\n      \\"PriceUnit\\": \\"瓶\\",\\n      \\"ForestFirstId\\": \\"酒类\\",\\n      \\"CustomizeFeatureF\\": \\"自定义属性F\\",\\n      \\"CustomizeFeatureA\\": \\"自定义属性A\\",\\n      \\"CustomizeFeatureK\\": \\"自定义属性K\\",\\n      \\"TemplateSceneId\\": \\"11223\\",\\n      \\"CustomizeFeatureD\\": \\"自定义属性D\\",\\n      \\"MemberPrice\\": 4000,\\n      \\"PromotionStart\\": \\"2022-04-25T16:00:00Z\\",\\n      \\"ModelNumber\\": \\"CH8850AS\\",\\n      \\"CategoryName\\": \\"手机\\",\\n      \\"CustomizeFeatureE\\": \\"自定义属性E\\",\\n      \\"SuggestPrice\\": 500,\\n      \\"SaleSpec\\": \\"1台/盒\\",\\n      \\"PromotionText\\": \\"买一送一\\",\\n      \\"Rank\\": \\"一级\\",\\n      \\"PromotionReason\\": \\"情人节活动\\",\\n      \\"CustomizeFeatureG\\": \\"自定义属性G\\",\\n      \\"SalesPrice\\": 500,\\n      \\"CustomizeFeatureH\\": \\"自定义属性H\\",\\n      \\"OriginalPrice\\": 500,\\n      \\"GmtModified\\": \\"2020-03-09T00:00:00Z\\",\\n      \\"CustomizeFeatureI\\": \\"自定义属性I\\",\\n      \\"ProductionPlace\\": \\"中国\\",\\n      \\"CustomizeFeatureB\\": \\"1:1:16\\",\\n      \\"ItemShortTitle\\": \\"牛奶\\",\\n      \\"CustomizeFeatureN\\": \\"自定义属性N\\",\\n      \\"BeMember\\": false,\\n      \\"TaxFee\\": \\"增值税\\",\\n      \\"InventoryStatus\\": \\"OUT_OF_STOCK\\",\\n      \\"SupplierName\\": \\"天猫超市\\",\\n      \\"ItemPicUrl\\": \\"http://m.taobao.com/xxx.html\\",\\n      \\"EnergyEfficiency\\": \\"1kw/h\\",\\n      \\"CustomizeFeatureL\\": \\"自定义属性L\\",\\n      \\"CustomizeFeatureC\\": \\"自定义属性C\\",\\n      \\"ItemId\\": \\"123456\\",\\n      \\"Manufacturer\\": \\"广东省深圳\\",\\n      \\"Material\\": \\"金属\\",\\n      \\"CustomizeFeatureO\\": \\"自定义属性O\\",\\n      \\"CustomizeFeatureP\\": \\"自定义属性P\\",\\n      \\"CustomizeFeatureQ\\": \\"自定义属性Q\\",\\n      \\"CustomizeFeatureR\\": \\"自定义属性R\\",\\n      \\"CustomizeFeatureS\\": \\"自定义属性S\\",\\n      \\"CustomizeFeatureT\\": \\"自定义属性T\\",\\n      \\"CustomizeFeatureU\\": \\"自定义属性U\\",\\n      \\"CustomizeFeatureV\\": \\"自定义属性V\\",\\n      \\"CustomizeFeatureW\\": \\"自定义属性W\\",\\n      \\"CustomizeFeatureX\\": \\"自定义属性X\\",\\n      \\"CustomizeFeatureY\\": \\"自定义属性Y\\",\\n      \\"CustomizeFeatureZ\\": \\"自定义属性Z\\",\\n      \\"CustomizeFeatureJ\\": \\"酸酸甜甜，肉厚饱满\\",\\n      \\"GmtCreate\\": \\"2020-03-09T00:00:00Z\\",\\n      \\"CustomizeFeatureM\\": \\"自定义属性M\\",\\n      \\"BePromotion\\": false,\\n      \\"SkuId\\": \\"123456\\",\\n      \\"BeSourceCode\\": false,\\n      \\"ForestSecondId\\": \\"白酒\\",\\n      \\"ItemQrCode\\": \\"http://m.taobao.com/xxx.html\\",\\n      \\"ItemInfoIndex\\": 1,\\n      \\"PromotionEnd\\": \\"2020-02-11T00:00:00Z\\",\\n      \\"ItemBarCode\\": \\"01838\\",\\n      \\"BeClearance\\": true\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询商品',
      'summary' => '查询商品信。',
    ),
    'AddUser' => 
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
          'BearerToken' => 
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
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '阿里云子账号UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '134****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户端token',
            'type' => 'string',
            'required' => false,
            'example' => '1*',
          ),
        ),
        2 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统扩展字段，请忽略；',
            'type' => 'string',
            'required' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","errorExample":""},{"type":"xml","example":"<AddUserResponse>\\n    <RequestId>E69C8998-1787-4999-8C75-D663FF1173CF</RequestId>\\n    <ErrorMessage>The specified resource type is invalid.</ErrorMessage>\\n    <Success>true</Success>\\n    <ErrorCode>MandatoryParameters</ErrorCode>\\n    <Code>-1001</Code>\\n    <Message>success</Message>\\n    <DynamicMessage>The specified store %s does not exist.</DynamicMessage>\\n    <DynamicCode>PlatformResponseError.%s</DynamicCode>\\n</AddUserResponse>","errorExample":""}]',
      'title' => '新增用户',
      'summary' => '新增用户。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteUser' => 
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
          'BearerToken' => 
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
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '阿里云子账号UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1344***',
          ),
        ),
        1 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统扩展字段，请忽略；',
            'type' => 'string',
            'required' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>8F124625-DF0A-4B08-B205-2CF538FAF713</RequestId>\\n    <Success>true</Success>\\n</data>\\n<requestId>8F124625-DF0A-4B08-B205-2CF538FAF713</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => '删除用户',
      'summary' => '删除用户。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AssignUser' => 
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
          'BearerToken' => 
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
          'name' => 'Stores',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID列表。',
            'type' => 'string',
            'required' => false,
            'example' => '[s-dxsxxxxxx,s-dxsyyyyyyy]',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '阿里云子账号UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1344***',
          ),
        ),
        2 => 
        array (
          'name' => 'UserType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户类型，可选值：

- `USER_TYPE_COMPANY_ROOT`：高级商家管理员，商家和门店相关账号的增删改查；

- `USER_TYPE_COMPANY_ADMIN`：商家管理员，商家下的门店相关账号的增删改查；

- `USER_TYPE_STORE_ADMIN`：门店管理员，一个门店管理员可关联多个门店，但一个门店仅能关联一个门店管理员；

- `USER_TYPE_STORE_OPERATOR`：门店操作员，仅能关联一个门店；

- `USER_TYPE_GUEST`：没有任何权限的访客。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'USER_TYPE_COMPANY_OWNER',
          ),
        ),
        3 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '扩展参数',
            'type' => 'string',
            'required' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功是否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters ',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001 ',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters \\",\\n  \\"Code\\": \\"-1001 \\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>8F124625-DF0A-4B08-B205-2CF538FAF713</RequestId>\\n    <Success>true</Success>\\n</data>\\n<requestId>8F124625-DF0A-4B08-B205-2CF538FAF713</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => 'AssignUser',
      'summary' => '分配用户权限。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnassignUser' => 
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
          'BearerToken' => 
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
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '阿里云子账号UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1344***',
          ),
        ),
        1 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统保留字段，请忽略',
            'type' => 'string',
            'required' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>8F124625-DF0A-4B08-B205-2CF538FAF713</RequestId>\\n    <Success>true</Success>\\n</data>\\n<requestId>8F124625-DF0A-4B08-B205-2CF538FAF713</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => 'UnassignUser',
      'summary' => '取消用户权限。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeUserLog' => 
    array (
      'summary' => '查询用户的操作日志记录。',
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
          'name' => 'ItemShortTitle',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品短标题。',
            'type' => 'string',
            'required' => false,
            'example' => '牛奶',
          ),
        ),
        1 => 
        array (
          'name' => 'OperationType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '日志类型，可选值：

- `OPERATION_TYPE_BIND`：价签绑定

- `OPERATION_TYPE_UNBIND`：价签解绑

- `OPERATION_TYPE_FORCE_UPDATE`：价签刷新 - 主动刷新

- `OPERATION_TYPE_ITEM_CHANGE_UPDATE`：价签刷新 - 商品更新

- `OPERATION_TYPE_ALL_UPDATE`：价签刷新 - 门店级刷新

- `OPERATION_TYPE_SEND_FAILED_RETRY`：操作重试 - 发送失败

- `OPERATION_TYPE_DISPLAY_FAILED_RETRY`：操作重试 - 显示失败

- `OPERATION_TYPE_LIGHT_UP_ESL_LED`：价签亮灯。',
            'type' => 'string',
            'required' => false,
            'example' => 'OPERATION_TYPE_BIND',
          ),
        ),
        2 => 
        array (
          'name' => 'EslBarCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '价签条码。',
            'type' => 'string',
            'required' => false,
            'example' => '18bc5a63****',
          ),
        ),
        3 => 
        array (
          'name' => 'FromDate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询操作日志：开始时间。按照ISO8601标准表示，使用UTC+0时间。格式为：yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-03-18T02:26:28Z',
          ),
        ),
        4 => 
        array (
          'name' => 'ItemBarCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商品条码。',
            'type' => 'string',
            'required' => false,
            'example' => '690560583****',
          ),
        ),
        5 => 
        array (
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        6 => 
        array (
          'name' => 'ToDate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询操作日志：结束时间。按照ISO8601标准表示，使用UTC+0时间。格式为：yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-03-17T02:26:28Z',
          ),
        ),
        7 => 
        array (
          'name' => 'LogId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '日志ID。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        8 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：每页显示条数，默认值10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'OperationStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '日志状态，可选值：

- `OPERATION_STATUS_NEW`：新建

- `OPERATION_STATUS_SENT`：已发送

- `OPERATION_STATUS_DISPLAY`：已显示

- `OPERATION_STATUS_DELETE`：已删除

- `OPERATION_STATUS_BREAK`：中断

- `OPERATION_STATUS_DEVICE_RETRY_DISPLAY`：重试中

- `OPERATION_STATUS_SEND_FAILED`：发送失败

- `OPERATION_STATUS_DISPLAY_FAILED`：显示失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'OPERATION_STATUS_NEW',
          ),
        ),
        10 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：当前页码，默认值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '阿里云账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '134****',
          ),
        ),
        12 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统保留字段，请忽略；',
            'type' => 'string',
            'required' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => 'POP请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '后端错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'PageSize' => 
              array (
                'description' => '分页参数：每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '分页参数：当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'UserLogs' => 
              array (
                'description' => '日志信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EslBarCode' => 
                    array (
                      'description' => '价签条码。',
                      'type' => 'string',
                      'example' => '18bc5a63****',
                    ),
                    'OperationSendTime' => 
                    array (
                      'description' => '操作发送时间。',
                      'type' => 'string',
                      'example' => '2020-03-17T02:25:17Z',
                    ),
                    'ActionPrice' => 
                    array (
                      'description' => '实际销售价格（单位：分）。',
                      'type' => 'string',
                      'example' => '500',
                    ),
                    'UserId' => 
                    array (
                      'description' => '阿里云子账号UID。',
                      'type' => 'string',
                      'example' => '134****',
                    ),
                    'PriceUnit' => 
                    array (
                      'description' => '计价单位。',
                      'type' => 'string',
                      'example' => '台',
                    ),
                    'ResultCode' => 
                    array (
                      'description' => '执行结果编码。',
                      'type' => 'string',
                      'example' => '2002',
                    ),
                    'ItemId' => 
                    array (
                      'description' => '自定义商品条码。',
                      'type' => 'string',
                      'example' => '123456',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'string',
                      'example' => '2020-03-17T02:26:17Z',
                    ),
                    'OperationType' => 
                    array (
                      'description' => '日志类型，可选值：

- `OPERATION_TYPE_BIND`：价签绑定

- `OPERATION_TYPE_UNBIND`：价签解绑

- `OPERATION_TYPE_FORCE_UPDATE`：价签刷新 - 主动刷新

- `OPERATION_TYPE_ITEM_CHANGE_UPDATE`：价签刷新 - 商品更新

- `OPERATION_TYPE_ALL_UPDATE`：价签刷新 - 门店级刷新

- `OPERATION_TYPE_SEND_FAILED_RETRY`：操作重试 - 发送失败

- `OPERATION_TYPE_DISPLAY_FAILED_RETRY`：操作重试 - 显示失败

- `OPERATION_TYPE_TIMEOUT_RETRY`：操作重试 - 操作超时

- `OPERATION_TYPE_ESL_NOT_FOUND_RETRY`：操作重试 - 未知设备

- `OPERATION_TYPE_TEMPLATE_NOT_FOUND_RETRY`：操作重试 - 未知模板

- `OPERATION_TYPE_DRAW_PICTURE_FAILED_RETRY`：操作重试- 异常模板

- `OPERATION_TYPE_BATCH_TIMES_DIRECTIONAL_REFRESH`：价签刷新 - 商品导入

- `OPERATION_TYPE_ON_LINE_RETRY`：价签刷新 - 上线重试

- `OPERATION_TYPE_LIGHT_UP_ESL_LED`：亮灯。',
                      'type' => 'string',
                      'example' => 'OPERATION_TYPE_BIND',
                    ),
                    'OperationResponseTime' => 
                    array (
                      'description' => '操作响应时间。',
                      'type' => 'string',
                      'example' => '2020-03-17T02:26:17Z',
                    ),
                    'OperationStatus' => 
                    array (
                      'description' => '日志状态，返回值对应关系：

- `OPERATION_STATUS_NEW`：新建操作

- `OPERATION_STATUS_SENT`：发送操作

- `OPERATION_STATUS_DISPLAY`：完成操作

- `OPERATION_STATUS_DELETE`：删除操作

- `OPERATION_STATUS_DEVICE_RETRY_DISPLAY`：重试操作

- `OPERATION_STATUS_SEND_FAILED`：发送失败

- `OPERATION_STATUS_DISPLAY_FAILED`：刷新失败。',
                      'type' => 'string',
                      'example' => 'OPERATION_STATUS_NEW',
                    ),
                    'StoreId' => 
                    array (
                      'description' => '门店ID。',
                      'type' => 'string',
                      'example' => 's-dxsxxx****',
                    ),
                    'ItemShortTitle' => 
                    array (
                      'description' => '商品短标题。',
                      'type' => 'string',
                      'example' => '牛奶',
                    ),
                    'LogId' => 
                    array (
                      'description' => '日志ID。',
                      'type' => 'string',
                      'example' => '123456',
                    ),
                    'BePromotion' => 
                    array (
                      'description' => '是否促销。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2020-03-17T02:26:17Z',
                    ),
                    'EslSignal' => 
                    array (
                      'description' => '价签信号强度；',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '50',
                    ),
                    'SpendTime' => 
                    array (
                      'description' => '耗时（单位：ms）。',
                      'type' => 'string',
                      'example' => '10',
                    ),
                    'ItemBarCode' => 
                    array (
                      'description' => '商品条码。',
                      'type' => 'string',
                      'example' => '690560583****',
                    ),
                    'I18nResultKey' => 
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 100,\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"UserLogs\\": [\\n    {\\n      \\"EslBarCode\\": \\"18bc5a63****\\",\\n      \\"OperationSendTime\\": \\"2020-03-17T02:25:17Z\\",\\n      \\"ActionPrice\\": \\"500\\",\\n      \\"UserId\\": \\"134****\\",\\n      \\"PriceUnit\\": \\"台\\",\\n      \\"ResultCode\\": \\"2002\\",\\n      \\"ItemId\\": \\"123456\\",\\n      \\"GmtModified\\": \\"2020-03-17T02:26:17Z\\",\\n      \\"OperationType\\": \\"OPERATION_TYPE_BIND\\",\\n      \\"OperationResponseTime\\": \\"2020-03-17T02:26:17Z\\",\\n      \\"OperationStatus\\": \\"OPERATION_STATUS_NEW\\",\\n      \\"StoreId\\": \\"s-dxsxxx****\\",\\n      \\"ItemShortTitle\\": \\"牛奶\\",\\n      \\"LogId\\": \\"123456\\",\\n      \\"BePromotion\\": false,\\n      \\"GmtCreate\\": \\"2020-03-17T02:26:17Z\\",\\n      \\"EslSignal\\": 50,\\n      \\"SpendTime\\": \\"10\\",\\n      \\"ItemBarCode\\": \\"690560583****\\",\\n      \\"I18nResultKey\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <TotalCount>68</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>78DDE5D5-7E14-4BED-92AF-C465C74BCDBF</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Success>true</Success>\\n    <UserLogs>\\n        <GmtModified>2020-03-16T06:38:56Z</GmtModified>\\n        <ActionPrice>999</ActionPrice>\\n        <OperationSendTime>2020-03-16T06:38:57Z</OperationSendTime>\\n        <ItemBarCode>123456</ItemBarCode>\\n        <SpendTime>0</SpendTime>\\n        <ItemId>123456</ItemId>\\n        <GmtCreate>2020-03-16T06:38:56Z</GmtCreate>\\n        <EslBarCode>18bc5a63****</EslBarCode>\\n        <PriceUnit>个</PriceUnit>\\n        <ItemShortTitle>促销商品</ItemShortTitle>\\n        <StoreId>s-ph5agd****</StoreId>\\n        <OperationStatus>OPERATION_STATUS_SEND_FAILED</OperationStatus>\\n        <OperationType>OPERATION_TYPE_BIND</OperationType>\\n        <LogId>123456</LogId>\\n        <ResultCode>Error00000011|Assemble sending package fail!</ResultCode>\\n        <BePromotion>true</BePromotion>\\n    </UserLogs>\\n    <UserLogs>\\n        <GmtModified>2020-03-16T06:36:46Z</GmtModified>\\n        <ActionPrice>1688</ActionPrice>\\n        <OperationSendTime>2020-03-16T06:36:47Z</OperationSendTime>\\n        <ItemBarCode>123456</ItemBarCode>\\n        <SpendTime>0</SpendTime>\\n        <ItemId>123456</ItemId>\\n        <GmtCreate>2020-03-16T06:36:46Z</GmtCreate>\\n        <EslBarCode>18bc5a63****</EslBarCode>\\n        <PriceUnit>盒</PriceUnit>\\n        <ItemShortTitle>常规商品</ItemShortTitle>\\n        <StoreId>s-ph5agd****</StoreId>\\n        <OperationStatus>OPERATION_STATUS_SEND_FAILED</OperationStatus>\\n        <OperationType>OPERATION_TYPE_BIND</OperationType>\\n        <LogId>123456</LogId>\\n        <ResultCode>Error00000011|Assemble sending package fail!</ResultCode>\\n        <BePromotion>false</BePromotion>\\n    </UserLogs>\\n</data>\\n<requestId>78DDE5D5-7E14-4BED-92AF-C465C74BCDBF</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => '查询操作日志',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeUsers' => 
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
          'name' => 'UserType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户类型，可选值：

- `USER_TYPE_COMPANY_OWNER`：商家主账号

- `USER_TYPE_COMPANY_ROOT`：高级商家管理员

- `USER_TYPE_COMPANY_ADMIN`：商家管理员

- `USER_TYPE_STORE_ADMIN`：门店管理员

- `USER_TYPE_STORE_OPERATOR`：门店操作员

- `USER_TYPE_GUEST`：没有任何权限的访客。
',
            'type' => 'string',
            'required' => false,
            'example' => 'USER_TYPE_COMPANY_OWNER',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：当前页码，默认值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '阿里云子账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '1344***',
          ),
        ),
        3 => 
        array (
          'name' => 'UserName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户姓名。',
            'type' => 'string',
            'required' => false,
            'example' => '张三',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：每页显示条数，默认值10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统保留字段，请忽略；',
            'type' => 'string',
            'required' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'PageSize' => 
              array (
                'description' => '分页参数：每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '分页参数：当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'Users' => 
              array (
                'description' => '用户信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserType' => 
                    array (
                      'description' => '用户类型，可选值：

- `USER_TYPE_COMPANY_OWNER`：商家主账号

- `USER_TYPE_COMPANY_ROOT`：高级商家管理员

- `USER_TYPE_COMPANY_ADMIN`：商家管理员

- `USER_TYPE_STORE_ADMIN`：门店管理员

- `USER_TYPE_STORE_OPERATOR`：门店操作员

- `USER_TYPE_GUEST`：没有任何权限的访客。',
                      'type' => 'string',
                      'example' => 'USER_TYPE_COMPANY_OWNER',
                    ),
                    'UserId' => 
                    array (
                      'description' => '阿里云子账号UID。',
                      'type' => 'string',
                      'example' => '1344***',
                    ),
                    'Stores' => 
                    array (
                      'description' => '门店ID列表。',
                      'type' => 'string',
                      'example' => '[s-dxsxxxxxx,s-dxsyyyyyyy]',
                    ),
                    'UserName' => 
                    array (
                      'description' => '用户姓名。',
                      'type' => 'string',
                      'example' => '张三',
                    ),
                    'Bid' => 
                    array (
                      'description' => '账号类型；
26842：阿里云',
                      'type' => 'string',
                      'example' => '26842',
                    ),
                    'OwnerId' => 
                    array (
                      'description' => '阿里云主账号；',
                      'type' => 'string',
                      'example' => '1212124434535',
                    ),
                    'DingTalkInfos' => 
                    array (
                      'description' => '钉钉账号信息',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DingTalkCompanyId' => 
                          array (
                            'description' => '钉钉商家ID',
                            'type' => 'string',
                            'example' => '13124',
                          ),
                          'DingTalkUserId' => 
                          array (
                            'description' => '钉钉用户ID',
                            'type' => 'string',
                            'example' => '3455566',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 100,\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"Users\\": [\\n    {\\n      \\"UserType\\": \\"USER_TYPE_COMPANY_OWNER\\",\\n      \\"UserId\\": \\"1344***\\",\\n      \\"Stores\\": \\"[s-dxsxxxxxx,s-dxsyyyyyyy]\\",\\n      \\"UserName\\": \\"张三\\",\\n      \\"Bid\\": \\"26842\\",\\n      \\"OwnerId\\": \\"1212124434535\\",\\n      \\"DingTalkInfos\\": [\\n        {\\n          \\"DingTalkCompanyId\\": \\"13124\\",\\n          \\"DingTalkUserId\\": \\"3455566\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<TotalCount>100</TotalCount>\\n<PageSize>10</PageSize>\\n<RequestId>E69C8998-1787-4999-8C75-D663FF1173CF</RequestId>\\n<Message>success</Message>\\n<PageNumber>1</PageNumber>\\n<DynamicCode>PlatformResponseError.%s</DynamicCode>\\n<DynamicMessage>The specified store %s does not exist.</DynamicMessage>\\n<ErrorCode>MandatoryParameters</ErrorCode>\\n<Users>\\n    <UserName>张三</UserName>\\n    <OwnerId>1212124434535</OwnerId>\\n    <UserId>1344***</UserId>\\n    <Stores>[s-dxsxxxxxx,s-dxsyyyyyyy]</Stores>\\n    <Bid>26842</Bid>\\n    <UserType>USER_TYPE_COMPANY_OWNER</UserType>\\n    <DingTalkInfos>\\n        <DingTalkCompanyId>13124</DingTalkCompanyId>\\n        <DingTalkUserId>3455566</DingTalkUserId>\\n    </DingTalkInfos>\\n</Users>\\n<ErrorMessage>The specified resource type is invalid.</ErrorMessage>\\n<Code>-1001</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询用户',
      'summary' => '查询用户信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetUser' => 
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
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '阿里云子账号UID。',
            'type' => 'string',
            'required' => false,
            'example' => '1344***',
          ),
        ),
        1 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统保留字段，请忽略；',
            'type' => 'string',
            'required' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'User' => 
              array (
                'description' => '用户信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'UserType' => 
                  array (
                    'description' => '用户类型，可选值：

USER_TYPE_COMPANY_OWNER：商家主账号
USER_TYPE_COMPANY_ROOT：高级商家管理员
USER_TYPE_COMPANY_ADMIN：商家管理员
USER_TYPE_STORE_ADMIN：门店管理员
USER_TYPE_STORE_OPERATOR：门店操作员
USER_TYPE_GUEST：没有任何权限的访客。',
                    'type' => 'string',
                    'example' => 'USER_TYPE_COMPANY_OWNER',
                  ),
                  'UserId' => 
                  array (
                    'description' => '阿里云子账号UID。',
                    'type' => 'string',
                    'example' => '1344***',
                  ),
                  'Stores' => 
                  array (
                    'description' => '门店ID列表。',
                    'type' => 'string',
                    'example' => '[s-dxsxxxxxx,s-dxsyyyyyyy]',
                  ),
                  'UserName' => 
                  array (
                    'description' => '用户姓名。',
                    'type' => 'string',
                    'example' => '张三',
                  ),
                  'Bid' => 
                  array (
                    'description' => '账号类型；

26842：阿里云',
                    'type' => 'string',
                    'example' => '26842',
                  ),
                  'OwnerId' => 
                  array (
                    'description' => '阿里云主账号',
                    'type' => 'string',
                    'example' => '12143124132',
                  ),
                  'DingTalkInfos' => 
                  array (
                    'description' => '钉钉账号信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DingTalkCompanyId' => 
                        array (
                          'description' => '钉钉商家ID',
                          'type' => 'string',
                          'example' => '131242',
                        ),
                        'DingTalkUserId' => 
                        array (
                          'description' => '钉钉用户ID；',
                          'type' => 'string',
                          'example' => '34352525',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"User\\": {\\n    \\"UserType\\": \\"USER_TYPE_COMPANY_OWNER\\",\\n    \\"UserId\\": \\"1344***\\",\\n    \\"Stores\\": \\"[s-dxsxxxxxx,s-dxsyyyyyyy]\\",\\n    \\"UserName\\": \\"张三\\",\\n    \\"Bid\\": \\"26842\\",\\n    \\"OwnerId\\": \\"12143124132\\",\\n    \\"DingTalkInfos\\": [\\n      {\\n        \\"DingTalkCompanyId\\": \\"131242\\",\\n        \\"DingTalkUserId\\": \\"34352525\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询单个用户',
      'summary' => '查询单个用户信息。',
    ),
    'AddApDevice' => 
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
          'BearerToken' => 
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
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        1 => 
        array (
          'name' => 'ApMac',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '基站设备的Mac地址，可调用DescribeApDevices获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '11:22:33:44:55:66',
          ),
        ),
        2 => 
        array (
          'name' => 'Remark',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '备注。',
            'type' => 'string',
            'required' => false,
            'example' => '天猫店的基站设备',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户端token',
            'type' => 'string',
            'required' => false,
            'example' => '1*',
          ),
        ),
        4 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统保留字段，请忽略；',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        5 => 
        array (
          'name' => 'SerialNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备SN号',
            'type' => 'string',
            'required' => false,
            'example' => '18****',
          ),
        ),
      ),
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>8F124625-DF0A-4B08-B205-2CF538FAF713</RequestId>\\n    <Success>true</Success>\\n</data>\\n<requestId>8F124625-DF0A-4B08-B205-2CF538FAF713</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => '增加基站设备',
      'summary' => '增加指定MAC地址的基站设备，会自动尝试进行激活。',
      'requestParamsDescription' => 'Remark字段，暂不支持。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteApDevice' => 
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
          'BearerToken' => 
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
          'name' => 'ApMac',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '基站设备的Mac地址。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '11:22:33:44:55:66',
          ),
        ),
        1 => 
        array (
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        2 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>8F124625-DF0A-4B08-B205-2CF538FAF713</RequestId>\\n    <Success>true</Success>\\n</data>\\n<requestId>8F124625-DF0A-4B08-B205-2CF538FAF713</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => '删除基站设备',
      'summary' => '删除指定MAC地址的基站设备。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ActivateApDevice' => 
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
          'BearerToken' => 
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
          'name' => 'ApMac',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '基站设备的Mac地址。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '11:22:33:44:55:66',
          ),
        ),
        1 => 
        array (
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        2 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统保留字段，请忽略',
            'type' => 'string',
            'required' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求状态标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","errorExample":""},{"type":"xml","example":"<ActivateApDeviceResponse>\\n    <RequestId>E69C8998-1787-4999-8C75-D663FF1173CF</RequestId>\\n    <ErrorMessage>The specified resource type is invalid.</ErrorMessage>\\n    <Success>true</Success>\\n    <ErrorCode>MandatoryParameters</ErrorCode>\\n    <Code>-1001</Code>\\n    <Message>success</Message>\\n    <DynamicMessage>The specified store %s does not exist.</DynamicMessage>\\n    <DynamicCode>PlatformResponseError.%s</DynamicCode>\\n</ActivateApDeviceResponse>","errorExample":""}]',
      'title' => 'ActivateApDevice',
      'summary' => '激活基站设备',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeApDevices' => 
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
          'name' => 'StoreId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID或商家自定义门店ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 's-dxsxx****',
          ),
        ),
        1 => 
        array (
          'name' => 'ApMac',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '基站设备的Mac地址。',
            'type' => 'string',
            'required' => false,
            'example' => '112233445566',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备在线或离线状态 ，true：在线、false：离线。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：每页显示条数，默认值10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：当前页码，默认值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'Model',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备型号。',
            'type' => 'string',
            'required' => false,
            'example' => 'aliyun',
          ),
        ),
        6 => 
        array (
          'name' => 'BeActivate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备的激活状态。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统保留字段，请忽略',
            'type' => 'string',
            'required' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '内部错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'PageNumber' => 
              array (
                'description' => '分页参数：当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页参数：每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'ApDevices' => 
              array (
                'description' => '基站设备列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '在线状态：离线。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'StoreId' => 
                    array (
                      'description' => '门店ID。',
                      'type' => 'string',
                      'example' => 's-cxsds****',
                    ),
                    'Model' => 
                    array (
                      'description' => '设备型号。',
                      'type' => 'string',
                      'example' => 'aliyun',
                    ),
                    'Remark' => 
                    array (
                      'description' => '备注。',
                      'type' => 'string',
                      'example' => '测试数据',
                    ),
                    'BeActivate' => 
                    array (
                      'description' => '是否激活。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Mac' => 
                    array (
                      'description' => '设备的mac地址。',
                      'type' => 'string',
                      'example' => '112233445566',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"ApDevices\\": [\\n    {\\n      \\"Status\\": false,\\n      \\"StoreId\\": \\"s-cxsds****\\",\\n      \\"Model\\": \\"aliyun\\",\\n      \\"Remark\\": \\"测试数据\\",\\n      \\"BeActivate\\": true,\\n      \\"Mac\\": \\"112233445566\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <TotalCount>2</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>E210B842-6AD3-4420-833A-4ED8756DBFD0</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <ApDevices>\\n        <Status>true</Status>\\n        <BeActivate>true</BeActivate>\\n        <StoreId>s-xsaa****</StoreId>\\n        <Mac>112233445566</Mac>\\n    </ApDevices>\\n    <ApDevices>\\n        <Status>true</Status>\\n        <BeActivate>true</BeActivate>\\n        <StoreId>s-xsaa****</StoreId>\\n        <Mac>141FBA86****</Mac>\\n    </ApDevices>\\n    <Success>true</Success>\\n</data>\\n<requestId>E210B842-6AD3-4420-833A-4ED8756DBFD0</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => '查询基站设备',
      'summary' => '查询基站设备信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ApplyCompanyTemplateVersionToStores' => 
    array (
      'summary' => '版本应用到门店。',
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
          'BearerToken' => 
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
          'name' => 'TemplateVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店模板版本号；',
            'type' => 'string',
            'required' => true,
            'example' => '1.1.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Stores',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店ID列表。请转为JSON字符串',
            'type' => 'string',
            'required' => false,
            'example' => '[\\"s-y9eoecc7mu\\"]',
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
                'example' => '450E6CA4-5C5D-5DED-86C2-2B577C291764',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态错误信息，用于替换返回参数ErrMessage错误信息中的%s。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '错误代码',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"450E6CA4-5C5D-5DED-86C2-2B577C291764\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","type":"json"}]',
    ),
    'DescribeStoreByTemplateVersion' => 
    array (
      'summary' => '查询模板应用到的门店',
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
          'name' => 'TemplateVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店模板版本号；',
            'type' => 'string',
            'required' => false,
            'example' => '1.1.0',
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
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态错误信息，用于替换返回参数**ErrMessage**错误信息中的%s。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '与本次请求相关的动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'Stores' => 
              array (
                'description' => '门店信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '门店信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'StoreName' => 
                    array (
                      'description' => '门店名称。',
                      'type' => 'string',
                      'example' => '天猫旗舰店',
                    ),
                    'StoreId' => 
                    array (
                      'description' => '门店ID。',
                      'type' => 'string',
                      'example' => 's-nxwd8sutd6',
                    ),
                    'ParentId' => 
                    array (
                      'description' => '父门店ID。',
                      'type' => 'string',
                      'example' => 'rm-2zeb2rt850x880j1n',
                    ),
                    'UserStoreCode' => 
                    array (
                      'description' => '用户门店编码',
                      'type' => 'string',
                      'example' => 's-2zeb2r1t12sq',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '修改时间',
                      'type' => 'string',
                      'example' => '2020-03-06T02:58:16Z',
                    ),
                    'Phone' => 
                    array (
                      'type' => 'string',
                    ),
                    'Level' => 
                    array (
                      'description' => '级别。',
                      'type' => 'string',
                      'example' => '1级',
                    ),
                    'TemplateVersion' => 
                    array (
                      'description' => '门店模板版本号；',
                      'type' => 'string',
                      'example' => '1.1.0',
                    ),
                    'TimeZone' => 
                    array (
                      'description' => '时区。',
                      'type' => 'string',
                      'example' => 'GMT+08:00',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"Stores\\": [\\n    {\\n      \\"StoreName\\": \\"天猫旗舰店\\",\\n      \\"StoreId\\": \\"s-nxwd8sutd6\\",\\n      \\"ParentId\\": \\"rm-2zeb2rt850x880j1n\\",\\n      \\"UserStoreCode\\": \\"s-2zeb2r1t12sq\\",\\n      \\"GmtModified\\": \\"2020-03-06T02:58:16Z\\",\\n      \\"Phone\\": \\"\\",\\n      \\"Level\\": \\"1级\\",\\n      \\"TemplateVersion\\": \\"1.1.0\\",\\n      \\"TimeZone\\": \\"GMT+08:00\\"\\n    }\\n  ]\\n}","type":"json"}]',
    ),
    'DescribeCompanyTemplateVersions' => 
    array (
      'summary' => '版本列表',
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
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：当前页码，默认值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
              1 => '1',
            ),
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：每页显示条数，默认值10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
              10 => '10',
            ),
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
              'TotalCount' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int32',
                'enumValueTitles' => 
                array (
                  18 => '18',
                ),
                'example' => '16',
              ),
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6248311A-3296-5084-B057-D0EC3DCE5C47',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => 'POP请求成功与否标识。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'True' => 'True',
                ),
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。取值说明如下：请求成功：不返回ErrorCode字段。                                 请求失败：返回ErrorCode字段。具体信息，请参见本文的错误码列表。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态错误信息，用于替换返回参数ErrMessage错误信息中的%s。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '与本次请求相关的动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'PageSize' => 
              array (
                'description' => '分页参数：每页显示条数，默认值10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '分页参数：当前页码，默认值1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Versions' => 
              array (
                'description' => '版本列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '版本列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Version' => 
                    array (
                      'description' => '版本号。',
                      'type' => 'string',
                      'example' => '1.1.0',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 16,\\n  \\"RequestId\\": \\"6248311A-3296-5084-B057-D0EC3DCE5C47\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Versions\\": [\\n    {\\n      \\"Version\\": \\"1.1.0\\"\\n    }\\n  ]\\n}","type":"json"}]',
    ),
    'DescribeEslModelByTemplateVersion' => 
    array (
      'summary' => '按版本查询设备类型',
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
          'name' => 'TemplateVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店模板版本号；',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              '1.1.0' => '1.1.0',
            ),
            'example' => '1.1.0',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：当前页码，默认值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：每页显示条数，默认值10。',
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
              'TotalCount' => 
              array (
                'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'description' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '7',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '38F85526-14B8-54A8-A0BB-3B200BBC3682',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求状态标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。取值说明如下：请求成功：不返回ErrorCode字段。                                 请求失败：返回ErrorCode字段。具体信息，请参见本文的错误码列表。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态错误信息，用于替换返回参数ErrMessage错误信息中的%s。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'PageNumber' => 
              array (
                'description' => '分页参数：当前页码，默认值1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页参数：每页显示条数，默认值10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'EslModels' => 
              array (
                'description' => '模板版本信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '模板版本信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ModelId' => 
                    array (
                      'description' => '模型ID',
                      'type' => 'string',
                      'example' => '9946366490094af4ab16bfe023ad5f22',
                    ),
                    'Name' => 
                    array (
                      'description' => '模型名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Image' => 
                    array (
                      'description' => '商品图片。',
                      'type' => 'string',
                      'example' => '/9xwqexcdaxasada....',
                    ),
                    'DeviceType' => 
                    array (
                      'description' => '设备类型',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'Vendor' => 
                    array (
                      'description' => '厂商名称

',
                      'type' => 'string',
                      'example' => 'ali',
                    ),
                    'ScreenWidth' => 
                    array (
                      'description' => '屏幕宽度。',
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'ScreenHeight' => 
                    array (
                      'description' => '屏幕高度。',
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'EslSize' => 
                    array (
                      'description' => '价签型号。',
                      'type' => 'string',
                      'example' => '800X480',
                    ),
                    'EslPhysicalSize' => 
                    array (
                      'description' => '内存大小。单位：gib',
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 7,\\n  \\"RequestId\\": \\"38F85526-14B8-54A8-A0BB-3B200BBC3682\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"EslModels\\": [\\n    {\\n      \\"ModelId\\": \\"9946366490094af4ab16bfe023ad5f22\\",\\n      \\"Name\\": \\"test\\",\\n      \\"Image\\": \\"/9xwqexcdaxasada....\\",\\n      \\"DeviceType\\": \\"3\\",\\n      \\"Vendor\\": \\"ali\\",\\n      \\"ScreenWidth\\": 0,\\n      \\"ScreenHeight\\": 0,\\n      \\"EslSize\\": \\"800X480\\",\\n      \\"EslPhysicalSize\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
    ),
    'DescribeTemplateByModel' => 
    array (
      'summary' => '模板查询。',
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
          'name' => 'EslSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '价签尺寸',
            'type' => 'string',
            'required' => false,
            'example' => '200X200',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备类型',
            'type' => 'string',
            'required' => false,
            'example' => '2',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店模板版本号；',
            'type' => 'string',
            'required' => false,
            'example' => '1.1.0',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页参数：每页显示条数。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B9E230F7-8BC6-5E4B-B540-14142DD94E3B',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '当前商品插入成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。取值说明如下：请求成功：不返回ErrorCode字段。                                 请求失败：返回ErrorCode字段。具体信息，请参见本文的错误码列表。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => '后端错误码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '响应消息',
                'type' => 'string',
                'example' => 'null',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'TotalCount' => 
              array (
                'description' => '模板总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageSize' => 
              array (
                'description' => '分页参数：每页显示条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '分页参数：当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '商品信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BasePicture' => 
                    array (
                      'description' => '图片。',
                      'type' => 'string',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '模板ID',
                      'type' => 'string',
                      'example' => '772629024140898304',
                    ),
                    'TemplateName' => 
                    array (
                      'description' => '模板名称',
                      'type' => 'string',
                      'example' => '常规',
                    ),
                    'EslSize' => 
                    array (
                      'description' => '价签尺寸',
                      'type' => 'string',
                      'example' => '250X122',
                    ),
                    'EslType' => 
                    array (
                      'description' => '价签类型，返回值对应关系：-[unk]esl_type_e_ink[unk]：电子墨水屏幕-[unk]px_type_dm_lcd[unk]：段码屏幕-[unk]x-ddl_type_full_color[unk]：彩色屏幕。',
                      'type' => 'string',
                    ),
                    'Width' => 
                    array (
                      'description' => '宽。单位：px。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '400',
                    ),
                    'Height' => 
                    array (
                      'description' => '视频高。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '200',
                    ),
                    'TemplateVersion' => 
                    array (
                      'description' => '门店模板版本号；',
                      'type' => 'string',
                      'example' => '15.15.15',
                    ),
                    'Layout' => 
                    array (
                      'description' => '布局信息。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Scene' => 
                    array (
                      'description' => '使用场景，选择合适的使用场景',
                      'type' => 'string',
                      'example' => 'MEMBER',
                    ),
                    'Brand' => 
                    array (
                      'description' => '品牌。',
                      'type' => 'string',
                      'example' => 'ZTE',
                    ),
                    'TemplateSceneId' => 
                    array (
                      'description' => '匹配自定义模板ID显示',
                      'type' => 'string',
                      'example' => '大甩卖',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B9E230F7-8BC6-5E4B-B540-14142DD94E3B\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"null\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"TotalCount\\": 2,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Items\\": [\\n    {\\n      \\"BasePicture\\": \\"\\",\\n      \\"TemplateId\\": \\"772629024140898304\\",\\n      \\"TemplateName\\": \\"常规\\",\\n      \\"EslSize\\": \\"250X122\\",\\n      \\"EslType\\": \\"\\",\\n      \\"Width\\": 400,\\n      \\"Height\\": 200,\\n      \\"TemplateVersion\\": \\"15.15.15\\",\\n      \\"Layout\\": \\"1\\",\\n      \\"Scene\\": \\"MEMBER\\",\\n      \\"Brand\\": \\"ZTE\\",\\n      \\"TemplateSceneId\\": \\"大甩卖\\"\\n    }\\n  ]\\n}","type":"json"}]',
    ),
    'DescribeAvailableEslModels' => 
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
          'BearerToken' => 
          array (
          ),
        ),
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
          'name' => 'ModelId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '设备模型id',
            'description' => '设备模型id',
            'type' => 'string',
            'required' => false,
            'example' => '6cd23870539e43759e65eef5b6808a49',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '模型名称',
            'description' => '模型名称',
            'type' => 'string',
            'required' => false,
            'example' => 'aa_ssaaa',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分页号',
            'description' => '分页号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '分页大小',
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'DescribeAvailableEslModelsResponse',
            'description' => 'DescribeAvailableEslModelsResponse',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '436',
              ),
              'PageSize' => 
              array (
                'description' => '分页参数：每页显示条数，默认值10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '分页参数：当前页码，默认值1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'EslModels' => 
              array (
                'description' => '价签信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '价签信息列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ModelId' => 
                    array (
                      'title' => '模型id',
                      'description' => '模型id',
                      'type' => 'string',
                      'example' => '201167',
                    ),
                    'Name' => 
                    array (
                      'title' => '名称',
                      'description' => '名称',
                      'type' => 'string',
                      'example' => '中文名测试',
                    ),
                    'DeviceType' => 
                    array (
                      'title' => '设备颜色类型',
                      'description' => '设备类型',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'Vendor' => 
                    array (
                      'title' => '厂商',
                      'description' => '厂商',
                      'type' => 'string',
                      'example' => 'ali',
                    ),
                    'ScreenWidth' => 
                    array (
                      'title' => '屏幕宽度',
                      'description' => '屏幕宽度',
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'ScreenHeight' => 
                    array (
                      'title' => '屏幕高度',
                      'description' => '屏幕高度',
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'EslSize' => 
                    array (
                      'title' => '屏幕尺寸',
                      'description' => '屏幕尺寸',
                      'type' => 'string',
                      'example' => '800X480',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E69C8998-1787-4999-8C75-D663FF1173CF',
              ),
              'Success' => 
              array (
                'description' => '请求状态标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Code' => 
              array (
                'description' => '状态码。返回200代表成功。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态错误信息，用于替换返回参数ErrMessage错误信息中的%s。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 436,\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"EslModels\\": [\\n    {\\n      \\"ModelId\\": \\"201167\\",\\n      \\"Name\\": \\"中文名测试\\",\\n      \\"DeviceType\\": \\"3\\",\\n      \\"Vendor\\": \\"ali\\",\\n      \\"ScreenWidth\\": 0,\\n      \\"ScreenHeight\\": 0,\\n      \\"EslSize\\": \\"800X480\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"E69C8998-1787-4999-8C75-D663FF1173CF\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\"\\n}","type":"json"}]',
    ),
    'DeleteCompanyTemplate' => 
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
          'BearerToken' => 
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
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '742842379343605760',
          ),
        ),
        1 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统扩展字段，请忽略；',
            'type' => 'string',
            'required' => false,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A7571D49-9B36-5782-AD3D-32C8436D45B7',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => 'POP请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。取值说明如下：请求成功：不返回ErrorCode字段。                                 请求失败：返回ErrorCode字段。具体信息，请参见本文的错误码列表。',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'Code' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'string',
                'example' => '-1001',
              ),
              'Message' => 
              array (
                'description' => '错误代码。',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态错误信息，用于替换返回参数ErrMessage错误信息中的%s。',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A7571D49-9B36-5782-AD3D-32C8436D45B7\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"Code\\": \\"-1001\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","type":"json"}]',
    ),
    'AddCompanyTemplate' => 
    array (
      'summary' => '模板新增。',
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
          'BearerToken' => 
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
          'name' => 'Scene',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '使用场景，选择合适的使用场景',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'NORMAL',
          ),
        ),
        1 => 
        array (
          'name' => 'ExtraParams',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '系统扩展字段，请忽略；',
            'type' => 'string',
            'required' => false,
            'example' => '{}',
          ),
        ),
        2 => 
        array (
          'name' => 'EslSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '价签尺寸',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '800X480',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '促销',
            'maxLength' => 128,
            'minLength' => 0,
          ),
        ),
        4 => 
        array (
          'name' => 'Layout',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '布局信息。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '门店模板版本；',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.1.0',
          ),
        ),
        6 => 
        array (
          'name' => 'DeviceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '3',
          ),
        ),
        7 => 
        array (
          'name' => 'TemplateType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板类型',
            'type' => 'string',
            'required' => false,
            'example' => 'normal',
          ),
        ),
        8 => 
        array (
          'name' => 'IfPromotion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否促销，取值：-true：是。-false：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        9 => 
        array (
          'name' => 'IfSourceCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否溯源，取值：-true：是。-false：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        10 => 
        array (
          'name' => 'IfDefault',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否默认模板，取值：-true：是。-false：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        11 => 
        array (
          'name' => 'IfMember',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否会员，取值：-true：是。-false：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        12 => 
        array (
          'name' => 'IfOutOfInventory',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否缺货，取值：-true：是。-false：否。',
            'type' => 'boolean',
            'required' => false,
          ),
        ),
        13 => 
        array (
          'name' => 'Vendor',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备厂商。',
            'type' => 'string',
            'required' => false,
            'example' => 'ali',
          ),
        ),
        14 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板组id',
            'type' => 'string',
            'required' => false,
            'example' => '9',
          ),
        ),
        15 => 
        array (
          'name' => 'TemplateSceneId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义模板ID',
            'type' => 'string',
            'required' => false,
            'example' => '大甩卖',
          ),
        ),
      ),
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C033DCCE-FA85-5AD8-9A7C-C3F41220B898',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Success' => 
              array (
                'description' => '请求成功与否标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'InvalidResourceType.NotSupported',
              ),
              'Code' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'DynamicMessage' => 
              array (
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误码。',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        418 => 
        array (
          0 => 
          array (
            'errorCode' => 'DuplicateTemplateSceneIdErrorPub',
            'errorMessage' => 'The TemplateSceneId is duplicated.',
          ),
          1 => 
          array (
            'errorCode' => 'ContainerLayoutBindEslDevicePub',
            'errorMessage' => 'The Layout of the Container has been bound to an ESL device.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C033DCCE-FA85-5AD8-9A7C-C3F41220B898\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"InvalidResourceType.NotSupported\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\"\\n}","type":"json"}]',
    ),
    'SyncAddMaterial' => 
    array (
      'summary' => '异步添加媒体素材',
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
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
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
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '素材名称',
            'type' => 'string',
            'required' => true,
            'example' => 'xx图片',
          ),
        ),
        1 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '素材链接',
            'type' => 'string',
            'required' => true,
            'example' => 'https://iotx-alg-picture-auto.oss-cn-shanghai.aliyuncs.com/0622/zxytest/12.jpg',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SyncAddEslMaterialResponse',
            'description' => 'SyncAddEslMaterialResponse',
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Success' => 
                  array (
                    'title' => '是否成功',
                    'description' => '是否成功',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Message' => 
                  array (
                    'title' => '基本信息',
                    'description' => '基本信息',
                    'type' => 'string',
                    'example' => 'success',
                  ),
                  'DynamicMessage' => 
                  array (
                    'title' => 'POP动态补充信息',
                    'description' => 'POP动态补充信息',
                    'type' => 'string',
                    'example' => 'The specified store %s does not exist.',
                  ),
                  'DynamicCode' => 
                  array (
                    'title' => 'POP动态补充信息',
                    'description' => 'POP动态补充信息',
                    'type' => 'string',
                  ),
                  'ErrorCode' => 
                  array (
                    'title' => '错误类型 参考 ErrorCodes枚举',
                    'description' => '错误类型 参考 ErrorCodes枚举',
                    'type' => 'string',
                    'example' => 'MandatoryParameters',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID
',
                'type' => 'string',
                'example' => '450E6CA4-5C5D-5DED-86C2-2B577C291764
',
              ),
              'Success' => 
              array (
                'description' => '是否成功

',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。

',
                'type' => 'string',
                'example' => 'success',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'MandatoryParameters',
              ),
              'ErrorMessage' => 
              array (
                'description' => '调用失败时，返回的出错信息。

',
                'type' => 'string',
                'example' => 'The specified resource type is invalid.',
              ),
              'Code' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态码',
                'type' => 'string',
                'example' => 'PlatformResponseError.%s
',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态错误信息，用于替换返回参数ErrMessage错误信息中的%s。

',
                'type' => 'string',
                'example' => 'The specified store %s does not exist.',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Result\\": {\\n    \\"Success\\": true,\\n    \\"Message\\": \\"success\\",\\n    \\"DynamicMessage\\": \\"The specified store %s does not exist.\\",\\n    \\"DynamicCode\\": \\"\\",\\n    \\"ErrorCode\\": \\"MandatoryParameters\\"\\n  },\\n  \\"RequestId\\": \\"450E6CA4-5C5D-5DED-86C2-2B577C291764\\\\n\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"success\\",\\n  \\"ErrorCode\\": \\"MandatoryParameters\\",\\n  \\"ErrorMessage\\": \\"The specified resource type is invalid.\\",\\n  \\"Code\\": \\"200\\",\\n  \\"DynamicCode\\": \\"PlatformResponseError.%s\\\\n\\",\\n  \\"DynamicMessage\\": \\"The specified store %s does not exist.\\"\\n}","type":"json"}]',
    ),
    'QueryTemplateListByGroupId' => 
    array (
      'summary' => '根据分组id查询模板',
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
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
      ),
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
                'type' => 'string',
              ),
              'ErrorMessage' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'ErrorCode' => 
              array (
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'DynamicMessage' => 
              array (
                'type' => 'string',
              ),
              'DynamicCode' => 
              array (
                'type' => 'string',
              ),
              'TotalCount' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'PageSize' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'PageNumber' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'TemplateList' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BasePicture' => 
                    array (
                      'type' => 'string',
                    ),
                    'TemplateId' => 
                    array (
                      'type' => 'string',
                    ),
                    'TemplateName' => 
                    array (
                      'type' => 'string',
                    ),
                    'EslSize' => 
                    array (
                      'type' => 'string',
                    ),
                    'EslType' => 
                    array (
                      'type' => 'string',
                    ),
                    'Width' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Height' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'TemplateVersion' => 
                    array (
                      'type' => 'string',
                    ),
                    'Layout' => 
                    array (
                      'type' => 'string',
                    ),
                    'Scene' => 
                    array (
                      'type' => 'string',
                    ),
                    'Brand' => 
                    array (
                      'type' => 'string',
                    ),
                    'GroupId' => 
                    array (
                      'type' => 'string',
                    ),
                    'TemplateSceneId' => 
                    array (
                      'type' => 'string',
                    ),
                    'Relation' => 
                    array (
                      'type' => 'boolean',
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
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'cloudesl.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'cloudesl.cn-hangzhou.aliyuncs.com',
    ),
  ),
);
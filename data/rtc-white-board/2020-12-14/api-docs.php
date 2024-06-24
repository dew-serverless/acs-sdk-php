<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'rtc-white-board',
    'version' => '2020-12-14',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 71443,
      'title' => '应用',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateApp',
        1 => 'SetAppCallbackUrl',
        2 => 'SetAppDomainNames',
        3 => 'SetAppName',
        4 => 'SetAppStatus',
        5 => 'SetAppCallbackType',
        6 => 'DescribeApps',
      ),
    ),
    1 => 
    array (
      'id' => 71451,
      'title' => '白板',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateWhiteBoard',
        1 => 'StartWhiteBoardRecording',
        2 => 'StopWhiteBoardRecording',
        3 => 'PauseWhiteBoardRecording',
        4 => 'ResumeWhiteBoardRecording',
        5 => 'DescribeWhiteBoards',
        6 => 'OpenWhiteBoard',
        7 => 'DescribeWhiteBoardRecordings',
      ),
    ),
    2 => 
    array (
      'id' => 71460,
      'title' => '用户权限',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SetUsersPermissions',
        1 => 'RefreshUsersPermissions',
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
    'CreateApp' => 
    array (
      'summary' => '创建白板应用，设置应用名的同时获取AppID。',
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
          'name' => 'AppName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用名，由不超过32位的中文、英文、数字或下划线组成',
            'description' => '创建白板应用时用户在控制台设置的应用名称，由1~32位的中文、英文、数字或下划线组成。',
            'type' => 'string',
            'required' => true,
            'example' => 'new_whiteboard_app',
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
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0E2ECCA1-5340-43AE-A1DC-EBD17D3CCE92',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '调用结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果体',
                'description' => '返回的结果信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppID' => 
                  array (
                    'title' => '白板应用唯一标识符',
                    'description' => '应用ID。',
                    'type' => 'string',
                    'example' => '7mbj****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0E2ECCA1-5340-43AE-A1DC-EBD17D3CCE92\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": {\\n    \\"AppID\\": \\"7mbj****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateAppResponse>\\n    <RequestId>0E2ECCA1-5340-43AE-A1DC-EBD17D3CCE92</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <Result>\\n        <AppID>7mbj****</AppID>\\n    </Result>\\n</CreateAppResponse>","errorExample":""}]',
      'title' => '创建白板应用',
      'description' => '# 使用说明

- 本接口用于创建白板应用。
- 目前互动白板控制台还未正式上线，请通过互动白板服务端SDK进行白板应用的相关操作。

# QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetAppCallbackUrl' => 
    array (
      'summary' => '为白板应用设置回调服务地址及回调鉴权码。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板应用唯一标识符。获取白板应用ID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
          ),
        ),
        1 => 
        array (
          'name' => 'AppCallbackUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用回调地址URL',
            'description' => '白板应用回调地址URL。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://www.example.com/callback',
          ),
        ),
        2 => 
        array (
          'name' => 'AppCallbackAuthKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用回调鉴权码，由8~20位大小写字母、数字或下划线组成',
            'description' => '白板应用回调鉴权码，由8~20位大小写字母、数字或下划线组成。',
            'type' => 'string',
            'required' => true,
            'example' => 'CallbackSecret123',
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
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CFB5E6AA-823B-415B-AA03-4B9892049B68',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '调用结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果',
                'description' => '返回的结果信息。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CFB5E6AA-823B-415B-AA03-4B9892049B68\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetAppCallbackUrlResponse>\\n    <RequestId>CFB5E6AA-823B-415B-AA03-4B9892049B68</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <Result>true</Result>\\n</SetAppCallbackUrlResponse>","errorExample":""}]',
      'title' => '设置白板应用回调地址',
      'description' => '# 使用说明

- 调用本接口前，您必须已经调用[CreateApp](~~204234~~)创建白板应用。
- 目前互动白板控制台还未正式上线，请通过互动白板服务端SDK进行白板应用的相关操作。

# QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetAppDomainNames' => 
    array (
      'summary' => '为白板应用设置合法域名列表，即使用中需要访问白板服务的域名列表。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板应用唯一标识符。获取白板应用ID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
          ),
        ),
        1 => 
        array (
          'name' => 'AppDomainNames',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '所有会使用到白板应用的客户网站域名，多个使用英文逗号(,)分隔，最多传10个',
            'description' => '所有会使用到白板应用的客户网站域名，多个使用英文逗号(,)分隔，最多传10个。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
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
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D8F8BAFF-B677-4D6A-ADA1-CDB4A2C23330',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '调用结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果',
                'description' => '返回的结果信息。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8F8BAFF-B677-4D6A-ADA1-CDB4A2C23330\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetAppDomainNamesResponse>\\n    <RequestId>D8F8BAFF-B677-4D6A-ADA1-CDB4A2C23330</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <Result>true</Result>\\n</SetAppDomainNamesResponse>","errorExample":""}]',
      'title' => '设置白板应用合法域名',
      'description' => '# 使用说明

- 调用本接口前，您必须已经调用[CreateApp](~~204234~~)创建白板应用。
- 目前互动白板控制台还未正式上线，请通过互动白板服务端SDK进行白板应用的相关操作。

# QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetAppName' => 
    array (
      'summary' => '为白板应用重命名。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板应用唯一标识符。获取白板应用ID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用名，由不超过32位的中文、英文、数字或下划线组成',
            'description' => '白板应用名，由1~32位的中文、英文、数字或下划线组成。',
            'type' => 'string',
            'required' => true,
            'example' => 'new_whiteboard_app',
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
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C7B4A941-3DC0-4002-95F4-7A7D14A64992',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '调用结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果',
                'description' => '返回的结果信息。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C7B4A941-3DC0-4002-95F4-7A7D14A64992\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetAppNameResponse>\\n    <RequestId>C7B4A941-3DC0-4002-95F4-7A7D14A64992</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <Result>true</Result>\\n</SetAppNameResponse>","errorExample":""}]',
      'title' => '设置白板应用名',
      'description' => '# 使用说明

- 调用本接口前，您必须已经调用[CreateApp](~~204234~~)创建白板应用。
- 目前互动白板控制台还未正式上线，请通过互动白板服务端SDK进行白板应用的相关操作。

# QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetAppStatus' => 
    array (
      'summary' => '为白板应用设置状态，1:启用，2:停用。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板应用唯一标识符。获取白板应用ID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
          ),
        ),
        1 => 
        array (
          'name' => 'AppStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用状态（取值：1:启用，2:停用）',
            'description' => '白板应用状态。取值：

- **1**：启用。
- **2**：停用。',
            'type' => 'integer',
            'format' => 'int64',
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
            'title' => 'Schema of Response',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果',
                'description' => '返回的结果信息。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetAppStatusResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <Result>true</Result>\\n</SetAppStatusResponse>","errorExample":""}]',
      'title' => '设置白板应用状态',
      'description' => '# 使用说明

- 调用本接口前，您必须已经调用[CreateApp](~~204234~~)创建白板应用。
- 目前互动白板控制台还未正式上线，请通过互动白板服务端SDK进行白板应用的相关操作。

# QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetAppCallbackType' => 
    array (
      'summary' => '设置白板应用的回调类型。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板应用唯一标识符。获取AppID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
          ),
        ),
        1 => 
        array (
          'name' => 'AppCallbackType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用回调类型',
            'description' => '白板应用的回调类型，多个使用英文逗号（,）分隔。取值：

- **userPermissionCallback**：用户权限回调。
- **whiteBoardProfileCallback**：白板元信息回调。
- **userProfileCallback**：用户元信息回调。
- **hostCheckCallback**：合法域名校验失败回调。',
            'type' => 'string',
            'required' => true,
            'example' => 'userPermissionCallback,whiteBoardProfileCallback,userProfileCallback,hostCheckCallback',
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
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CFB5E6AA-823B-415B-AA03-4B9892049B68',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果',
                'description' => '返回结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CFB5E6AA-823B-415B-AA03-4B9892049B68\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetAppCallbackTypeResponse>\\n    <RequestId>CFB5E6AA-823B-415B-AA03-4B9892049B68</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <Result>true</Result>\\n</SetAppCallbackTypeResponse>","errorExample":""}]',
      'title' => '设置白板应用回调类型',
      'description' => '# 使用说明

调用本接口前，您必须已经调用[CreateApp](~~204234~~)创建白板应用。

# QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
    ),
    'DescribeApps' => 
    array (
      'summary' => '分页查询云账号下的白板应用信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符，默认查询所有应用ID',
            'description' => '白板应用唯一标识符，参数为空默认查询所有应用ID。获取AppID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '7mbj****',
          ),
        ),
        1 => 
        array (
          'name' => 'AppStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用状态，默认查询所有状态。（取值：1:启用，2:停用）',
            'description' => '白板应用状态，参数为空默认查询所有状态。取值：

- **1**：启用。
- **2**：停用。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '第几页，默认查询第1页。',
            'description' => '查询页码，参数为空默认查询第1页。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示个数，默认为10。',
            'description' => '每页显示个数，参数为空默认显示个数为10。',
            'type' => 'integer',
            'format' => 'int64',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '调用结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果体',
                'description' => '返回的结果信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalNum' => 
                  array (
                    'description' => '应用总个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '15',
                  ),
                  'TotalPage' => 
                  array (
                    'description' => '应用总页数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5',
                  ),
                  'AppList' => 
                  array (
                    'title' => 'App信息列表',
                    'description' => '应用详情列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '应用详情列表数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AppID' => 
                        array (
                          'title' => '白板应用唯一标识符',
                          'description' => '白板应用唯一标识符。',
                          'type' => 'string',
                          'example' => '7mbj****',
                        ),
                        'AppName' => 
                        array (
                          'title' => '白板应用名',
                          'description' => '白板应用名称。',
                          'type' => 'string',
                          'example' => 'my_white_board',
                        ),
                        'Status' => 
                        array (
                          'title' => '白板应用状态（取值：1:启用，2:停用）',
                          'description' => '白板应用状态。取值：

- **1**：启用。
- **2**：停用。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'CallbackUrl' => 
                        array (
                          'title' => '白板应用回调地址URL',
                          'description' => '白板应用回调地址URL。',
                          'type' => 'string',
                          'example' => 'http://www.example.com/callback',
                        ),
                        'DomainNames' => 
                        array (
                          'title' => '合法域名列表，使用英文逗号(,)分隔',
                          'description' => '合法域名列表，多个使用英文逗号(,)分隔。',
                          'type' => 'string',
                          'example' => 'www.example.com',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '白板应用创建时间',
                          'description' => '白板应用的创建时间。',
                          'type' => 'string',
                          'example' => '2020-04-10 12:20:30.567',
                        ),
                        'CallbackType' => 
                        array (
                          'title' => '白板应用回调类型',
                          'description' => '白板应用的回调类型，多个使用英文逗号(,)分隔，all表示设置了全部回调。',
                          'type' => 'string',
                          'example' => 'userPermissionCallback,whiteBoardProfileCallback,userProfileCallback,hostCheckCallback',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": {\\n    \\"TotalNum\\": 15,\\n    \\"TotalPage\\": 5,\\n    \\"AppList\\": [\\n      {\\n        \\"AppID\\": \\"7mbj****\\",\\n        \\"AppName\\": \\"my_white_board\\",\\n        \\"Status\\": 1,\\n        \\"CallbackUrl\\": \\"http://www.example.com/callback\\",\\n        \\"DomainNames\\": \\"www.example.com\\",\\n        \\"CreateTime\\": \\"2020-04-10 12:20:30.567\\",\\n        \\"CallbackType\\": \\"userPermissionCallback,whiteBoardProfileCallback,userProfileCallback,hostCheckCallback\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAppsResponse>\\n    <RequestId>29D20DA7-985D-425E-89BD-26594D327DCC</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <ErrorMsg/>\\n    <ErrorCode/>\\n    <Result>\\n        <TotalNum>15</TotalNum>\\n        <TotalPage>5</TotalPage>\\n        <AppList>\\n            <CallbackUrl>http://www.example.com/callback</CallbackUrl>\\n            <Status>1</Status>\\n            <AppID>zt87****</AppID>\\n            <CreateTime>2021-04-10 16:10:57.217</CreateTime>\\n            <DomainNames>www.example.com</DomainNames>\\n            <AppName>我的APP1</AppName>\\n            <CallbackType>userPermissionCallback</CallbackType>\\n        </AppList>\\n        <AppList>\\n            <CallbackUrl>http://www.example.com/callback</CallbackUrl>\\n            <Status>1</Status>\\n            <AppID>sf1g****</AppID>\\n            <CreateTime>2021-04-12 15:29:27.315</CreateTime>\\n            <DomainNames>www.example.com</DomainNames>\\n            <AppName>我的APP2</AppName>\\n            <CallbackType>userPermissionCallback,whiteBoardProfileCallback</CallbackType>\\n        </AppList>\\n        <AppList>\\n            <CallbackUrl>http://www.example.com/callback</CallbackUrl>\\n            <Status>1</Status>\\n            <AppID>5s77****</AppID>\\n            <CreateTime>2021-04-12 17:00:39.325</CreateTime>\\n            <DomainNames>www.example.com</DomainNames>\\n            <AppName>我的APP3</AppName>\\n            <CallbackType>userPermissionCallback,userProfileCallback</CallbackType>\\n        </AppList>\\n    </Result>\\n</DescribeAppsResponse>","errorExample":""}]',
      'title' => '查询应用列表',
      'description' => '# 使用说明

调用本接口前，您必须已经调用[CreateApp](~~204234~~)创建白板应用。

# QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
    ),
    'CreateWhiteBoard' => 
    array (
      'summary' => '创建白板文档，获取白板文档标识DocKey。',
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
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '创建白板的用户ID（客户业务用户），由1~32位大小写字母、数字、下划线、短划线（-）组成',
            'description' => '创建白板的用户ID（客户业务用户），由1~32位大小写字母、数字、下划线、短划线（-）组成。',
            'type' => 'string',
            'required' => true,
            'example' => '123456',
          ),
        ),
        1 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板应用唯一标识符。获取AppID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
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
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B29ADDF9-D089-460A-AF7D-BDE5DA112E4E',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果体',
                'description' => '返回的结果信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DocKey' => 
                  array (
                    'title' => '文档唯一标识符，由大小写字母和数字组成',
                    'description' => '文档的标识符，由大小写字母和数字组成。',
                    'type' => 'string',
                    'example' => '4EZlwmRW0gDG****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B29ADDF9-D089-460A-AF7D-BDE5DA112E4E\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": {\\n    \\"DocKey\\": \\"4EZlwmRW0gDG****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateWhiteBoardResponse>\\n    <RequestId>B29ADDF9-D089-460A-AF7D-BDE5DA112E4E</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <Result>\\n        <DocKey>4EZlwmRW0gDG****</DocKey>\\n    </Result>\\n</CreateWhiteBoardResponse>","errorExample":""}]',
      'title' => '创建白板文档',
      'description' => '# 使用说明

调用本接口前，您必须已经调用[CreateApp](~~204234~~)创建白板应用。

# QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'StartWhiteBoardRecording' => 
    array (
      'summary' => '启动白板操作序列录制。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板应用唯一标识符。获取AppID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '启动白板录制的用户ID（客户业务用户），由1~32位大小写字母、数字、下划线、短划线（-）组成',
            'description' => '启动白板录制的用户ID（客户业务用户），由1~32位大小写字母、数字、下划线、短划线（-）组成。',
            'type' => 'string',
            'required' => true,
            'example' => '123456',
          ),
        ),
        2 => 
        array (
          'name' => 'DocKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板文档唯一标识符',
            'description' => '白板文档唯一标识符。获取DocKey，请参见[CreateWhiteBoard](~~204299~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '4EZlwmRW0gDG****',
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
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FFE713C6-BBA9-457B-AF9D-F6584279A790',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果体',
                'description' => '返回结果信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'RecordId' => 
                  array (
                    'title' => '白板录制Session的唯一标识',
                    'description' => '白板录制Session的唯一标识符。',
                    'type' => 'string',
                    'example' => '05157a01cb1d4aca97704fc7a473****',
                  ),
                  'StartTime' => 
                  array (
                    'title' => '录制开始的UNIX时间戳',
                    'description' => '录制的开始时间，使用UNIX时间戳表示，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1622173517031',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FFE713C6-BBA9-457B-AF9D-F6584279A790\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": {\\n    \\"RecordId\\": \\"05157a01cb1d4aca97704fc7a473****\\",\\n    \\"StartTime\\": 1622173517031\\n  }\\n}","errorExample":""},{"type":"xml","example":"<StartWhiteBoardRecordingResponse>\\n    <RequestId>FFE713C6-BBA9-457B-AF9D-F6584279A790</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <ErrorMsg/>\\n    <ErrorCode/>\\n    <Result>\\n        <StartTime>1622173517031</StartTime>\\n        <RecordId>05157a01cb1d4aca97704fc7a473****</RecordId>\\n    </Result>\\n</StartWhiteBoardRecordingResponse>","errorExample":""}]',
      'title' => '启动白板录制',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[CreateApp](~~204234~~)和[CreateWhiteBoard](~~204299~~)创建白板应用及白板文档。
# QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
    ),
    'StopWhiteBoardRecording' => 
    array (
      'summary' => '结束白板操作序列录制。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板应用唯一标识符。获取AppID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '结束白板录制的用户ID（客户业务用户），由1~32位大小写字母、数字、下划线、短划线（-）组成',
            'description' => '结束白板录制的用户ID（客户业务用户），由1~32位大小写字母、数字、下划线、短划线（-）组成。',
            'type' => 'string',
            'required' => true,
            'example' => '123456',
          ),
        ),
        2 => 
        array (
          'name' => 'DocKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板文档唯一标识符',
            'description' => '白板文档唯一标识符。获取DocKey，请参见[CreateWhiteBoard](~~204299~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '4EZlwmRW0gDG****',
          ),
        ),
        3 => 
        array (
          'name' => 'RecordId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板录制Session的唯一标识',
            'description' => '白板录制Session的唯一标识符。获取RecordId，请参见[StartWhiteBoardRecording](~~253300~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '8a4556336bc6456b918e8eedbed6****',
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
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C4670A7A-CF1F-4223-BA18-6778FFB2A9E1',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果体',
                'description' => '返回的结果信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'StopTime' => 
                  array (
                    'title' => '录制结束的UNIX时间戳',
                    'description' => '结束录制的时间，使用UNIX时间戳表示，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1622173532900',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C4670A7A-CF1F-4223-BA18-6778FFB2A9E1\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": {\\n    \\"StopTime\\": 1622173532900\\n  }\\n}","errorExample":""},{"type":"xml","example":"<StopWhiteBoardRecordingResponse>\\n    <RequestId>C4670A7A-CF1F-4223-BA18-6778FFB2A9E1</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <ErrorMsg/>\\n    <ErrorCode/>\\n    <Result>\\n        <StopTime>1622173532900</StopTime>\\n    </Result>\\n</StopWhiteBoardRecordingResponse>","errorExample":""}]',
      'title' => '结束白板录制',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[StartWhiteBoardRecording](~~253300~~)启动白板录制。
# QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
    ),
    'PauseWhiteBoardRecording' => 
    array (
      'summary' => '暂停白板操作序列录制。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板应用唯一标识符。获取AppID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '结束白板录制的用户ID（客户业务用户），由1~32位大小写字母、数字、下划线、短划线（-）组成',
            'description' => '暂停白板录制的用户ID（客户业务用户），由1~32位大小写字母、数字、下划线、短划线（-）组成。',
            'type' => 'string',
            'required' => true,
            'example' => '123456',
          ),
        ),
        2 => 
        array (
          'name' => 'DocKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板文档唯一标识符',
            'description' => '白板文档唯一标识符。获取DocKey，请参见[CreateWhiteBoard](~~204299~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '4EZlwmRW0gDG****',
          ),
        ),
        3 => 
        array (
          'name' => 'RecordId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板录制Session的唯一标识',
            'description' => '白板录制Session的唯一标识符。获取RecordId，请参见[StartWhiteBoardRecording](~~253300~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '8a4556336bc6456b918e8eedbed6****',
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
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B62D36BC-C41E-4436-B74B-2D0DB2E9E338',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果体',
                'description' => '返回的结果信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PauseTime' => 
                  array (
                    'title' => '录制结束的UNIX时间戳',
                    'description' => '暂停录制的时间，使用UNIX时间戳表示，单位：秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1622173522279',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B62D36BC-C41E-4436-B74B-2D0DB2E9E338\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": {\\n    \\"PauseTime\\": 1622173522279\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PauseWhiteBoardRecordingResponse>\\n    <RequestId>B62D36BC-C41E-4436-B74B-2D0DB2E9E338</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <ErrorMsg/>\\n    <ErrorCode/>\\n    <Result>\\n        <PauseTime>1622173522279</PauseTime>\\n    </Result>\\n</PauseWhiteBoardRecordingResponse>","errorExample":""}]',
      'title' => '暂停白板录制',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[StartWhiteBoardRecording](~~253300~~)启动白板录制。
# QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
    ),
    'ResumeWhiteBoardRecording' => 
    array (
      'summary' => '恢复白板（录制暂停中）操作序列录制。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板应用唯一标识符。获取AppID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '结束白板录制的用户ID（客户业务用户），由1~32位大小写字母、数字、下划线、短划线（-）组成',
            'description' => '恢复白板录制的用户ID（客户业务用户），由1~32位大小写字母、数字、下划线、短划线（-）组成。',
            'type' => 'string',
            'required' => true,
            'example' => '123456',
          ),
        ),
        2 => 
        array (
          'name' => 'DocKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板文档唯一标识符',
            'description' => '白板文档唯一标识符。获取DocKey，请参见[CreateWhiteBoard](~~204299~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '4EZlwmRW0gDG****',
          ),
        ),
        3 => 
        array (
          'name' => 'RecordId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板录制Session的唯一标识',
            'description' => '白板录制Session的唯一标识符。获取RecordId，请参见[StartWhiteBoardRecording](~~253300~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '8a4556336bc6456b918e8eedbed6****',
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
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ECC1446C-0B06-4A5B-9D5D-0FE60343DA66',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果体',
                'description' => '返回的结果信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResumeTime' => 
                  array (
                    'title' => '录制结束的UNIX时间戳',
                    'description' => '恢复录制的时间，使用UNIX时间戳表示，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1622173527622',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ECC1446C-0B06-4A5B-9D5D-0FE60343DA66\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": {\\n    \\"ResumeTime\\": 1622173527622\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ResumeWhiteBoardRecordingResponse>\\n    <RequestId>ECC1446C-0B06-4A5B-9D5D-0FE60343DA66</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <ErrorMsg/>\\n    <ErrorCode/>\\n    <Result>\\n        <ResumeTime>1622173527622</ResumeTime>\\n    </Result>\\n</ResumeWhiteBoardRecordingResponse>","errorExample":""}]',
      'title' => '恢复白板录制',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[PauseWhiteBoardRecording](~~253330~~)暂停白板录制。
# QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
    ),
    'DescribeWhiteBoards' => 
    array (
      'summary' => '分页查询某AppID下的白板文档信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板文档唯一标识符。获取AppID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
          ),
        ),
        1 => 
        array (
          'name' => 'DocStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板文档状态，默认查询所有状态。（取值：1:启用，2:停用）',
            'description' => '白板文档状态，参数为空默认查询所有状态。取值：

- **1**：启用。
- **2**：停用。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '第几页，默认查询第1页',
            'description' => '查询页码，参数为空默认查询第1页。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示个数，默认为10',
            'description' => '每页显示个数，参数为空默认显示个数为10。',
            'type' => 'integer',
            'format' => 'int64',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '调用结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果体',
                'description' => '返回的结果信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalNum' => 
                  array (
                    'description' => '文档总个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '33',
                  ),
                  'TotalPage' => 
                  array (
                    'description' => '文档总页数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '11',
                  ),
                  'DocList' => 
                  array (
                    'title' => 'App信息列表',
                    'description' => '文档详情列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '文档详情列表数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AppID' => 
                        array (
                          'title' => '白板应用唯一标识符',
                          'description' => '白板应用唯一标识符。',
                          'type' => 'string',
                          'example' => '7mbj****',
                        ),
                        'DocKey' => 
                        array (
                          'title' => '文档唯一标识符',
                          'description' => '白板文档唯一标识符。',
                          'type' => 'string',
                          'example' => '4EZlwmRW0gDG****',
                        ),
                        'Status' => 
                        array (
                          'title' => '文档状态（取值：1:启用，2:停用）',
                          'description' => '白板文档状态。取值：

- **1**：启用。
- **2**：停用。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'CreateUserId' => 
                        array (
                          'title' => '创建白板的用户ID',
                          'description' => '创建白板的用户ID。',
                          'type' => 'string',
                          'example' => '123456',
                        ),
                        'CreateTime' => 
                        array (
                          'title' => '白板应用创建时间',
                          'description' => '白板文档的创建时间。',
                          'type' => 'string',
                          'example' => '2020-04-10 12:20:30.567',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": {\\n    \\"TotalNum\\": 33,\\n    \\"TotalPage\\": 11,\\n    \\"DocList\\": [\\n      {\\n        \\"AppID\\": \\"7mbj****\\",\\n        \\"DocKey\\": \\"4EZlwmRW0gDG****\\",\\n        \\"Status\\": 1,\\n        \\"CreateUserId\\": \\"123456\\",\\n        \\"CreateTime\\": \\"2020-04-10 12:20:30.567\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeWhiteBoardsResponse>\\n    <RequestId>AEBD21E4-85D7-4B8D-A51E-F9E01AEEB682</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <ErrorMsg/>\\n    <ErrorCode/>\\n    <Result>\\n        <TotalNum>33</TotalNum>\\n        <TotalPage>11</TotalPage>\\n        <DocList>\\n            <Status>1</Status>\\n            <DocKey>4j7OJzVEKR8J****</DocKey>\\n            <AppID>p9an****</AppID>\\n            <CreateTime>2021-04-10 14:22:13.647</CreateTime>\\n            <CreateUserId>123456</CreateUserId>\\n        </DocList>\\n        <DocList>\\n            <Status>1</Status>\\n            <DocKey>XN94MkAb63Bm****</DocKey>\\n            <AppID>p9an****</AppID>\\n            <CreateTime>2021-04-12 14:22:21.492</CreateTime>\\n            <CreateUserId>123456</CreateUserId>\\n        </DocList>\\n        <DocList>\\n            <Status>1</Status>\\n            <DocKey>5VLqX472M3Dw****</DocKey>\\n            <AppID>p9an****</AppID>\\n            <CreateTime>2021-04-12 15:07:37.069</CreateTime>\\n            <CreateUserId>123456</CreateUserId>\\n        </DocList>\\n    </Result>\\n</DescribeWhiteBoardsResponse>","errorExample":""}]',
      'title' => '查询白板文档列表',
      'description' => '# 使用说明

调用本接口前，您必须已经调用[CreateApp](~~204234~~)创建白板应用。

# QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
    ),
    'OpenWhiteBoard' => 
    array (
      'summary' => '打开已有白板文档，获取白板文档连接信息。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板应用唯一标识符。获取AppID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '打开白板的用户ID（客户业务用户），由1~32位大小写字母、数字、下划线、短划线（-）组成',
            'description' => '打开白板的用户ID（客户业务用户），由1~32位大小写字母、数字、下划线、短划线（-）组成。',
            'type' => 'string',
            'required' => true,
            'example' => '123456',
          ),
        ),
        2 => 
        array (
          'name' => 'DocKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板文档唯一标识符',
            'description' => '白板文档唯一标识符。获取DocKey，请参见[CreateWhiteBoard](~~204299~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '4EZlwmRW0gDG****',
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
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CE47143D-9700-4756-856A-BB22FEBE4DAE',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果体',
                'description' => '返回的结果信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'DocumentAccessInfo' => 
                  array (
                    'title' => '白板连接信息',
                    'description' => '白板连接信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'AccessToken' => 
                      array (
                        'title' => '连接签名',
                        'description' => '连接签名。',
                        'type' => 'string',
                        'example' => 'qbFPTqipwQZqkGitAoAGbNHuHREm****',
                      ),
                      'CollabHost' => 
                      array (
                        'title' => '白板长连接地址',
                        'description' => '白板长连接地址。',
                        'type' => 'string',
                        'example' => 'collab-cn-shanghai.****.com',
                      ),
                      'Permission' => 
                      array (
                        'title' => '权限码，取值：0:无权限，1:只读，2:读写',
                        'description' => '权限码。取值：

- **0**：无权限。
- **1**：只读。
- **2**：读写。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '2',
                      ),
                      'UserInfo' => 
                      array (
                        'title' => '用户信息',
                        'description' => '用户信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AvatarUrl' => 
                          array (
                            'title' => '用户头像的URL',
                            'description' => '用户头像的URL。',
                            'type' => 'string',
                            'example' => 'http://www.avatarset/****.jpg',
                          ),
                          'Nick' => 
                          array (
                            'title' => '用户昵称',
                            'description' => '用户昵称。',
                            'type' => 'string',
                            'example' => 'Mary',
                          ),
                          'NickPinyin' => 
                          array (
                            'title' => '用户的拼音昵称',
                            'description' => '用户的拼音昵称。',
                            'type' => 'string',
                            'example' => 'Pinyin_Mary',
                          ),
                          'UserId' => 
                          array (
                            'title' => '打开白板的用户ID',
                            'description' => '打开白板的用户ID。',
                            'type' => 'string',
                            'example' => '123456',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CE47143D-9700-4756-856A-BB22FEBE4DAE\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": {\\n    \\"DocumentAccessInfo\\": {\\n      \\"AccessToken\\": \\"qbFPTqipwQZqkGitAoAGbNHuHREm****\\",\\n      \\"CollabHost\\": \\"collab-cn-shanghai.****.com\\",\\n      \\"Permission\\": 2,\\n      \\"UserInfo\\": {\\n        \\"AvatarUrl\\": \\"http://www.avatarset/****.jpg\\",\\n        \\"Nick\\": \\"Mary\\",\\n        \\"NickPinyin\\": \\"Pinyin_Mary\\",\\n        \\"UserId\\": \\"123456\\"\\n      }\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OpenWhiteBoardResponse>\\n    <RequestId>CE47143D-9700-4756-856A-BB22FEBE4DAE</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <Result>\\n        <DocumentAccessInfo>\\n            <AccessToken>qbFPTqipwQZqkGitAoAGbNHuHREm****</AccessToken>\\n            <CollabHost>collab-cn-shanghai.****.com</CollabHost>\\n            <Permission>2</Permission>\\n            <UserInfo>\\n                <AvatarUrl>http://www.avatarset/****.jpg</AvatarUrl>\\n                <UserId>123456</UserId>\\n                <Nick>Mary</Nick>\\n                <NickPinyin>Pinyin_Mary</NickPinyin>\\n            </UserInfo>\\n        </DocumentAccessInfo>\\n    </Result>\\n</OpenWhiteBoardResponse>","errorExample":""}]',
      'title' => '打开白板文档',
      'description' => '# 使用说明

- 调用本接口前，您必须已经调用[CreateApp](~~204234~~)和[CreateWhiteBoard](~~204299~~)创建白板应用及白板文档。
- 此接口会通过用户鉴权回调和用户信息回调请求客户服务器，以获取用户权限及用户基本信息，请确保应用回调地址配置无误。

# QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeWhiteBoardRecordings' => 
    array (
      'summary' => '分页查询白板所开启的录制列表和操作序列。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板应用唯一标识符。获取AppID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
          ),
        ),
        1 => 
        array (
          'name' => 'DocKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '文档唯一标识符',
            'description' => '白板文档唯一标识符。获取DocKey，请参见[CreateWhiteBoard](~~204299~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '4EZlwmRW0gDG****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '第几页，默认查询第1页',
            'description' => '查询页码，参数为空默认查询第1页。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '每页显示个数，默认为10',
            'description' => '每页显示个数，参数为空默认显示个数为10。',
            'type' => 'integer',
            'format' => 'int64',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FE22D613-D3C6-4A58-87CA-F21FC85AA08E',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果体',
                'description' => '返回的结果信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalNum' => 
                  array (
                    'description' => '文档总个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'TotalPage' => 
                  array (
                    'description' => '文档总页数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'RecordingList' => 
                  array (
                    'title' => '录制信息列表',
                    'description' => '录制信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '录制详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AppID' => 
                        array (
                          'title' => '白板应用唯一标识符',
                          'description' => '白板应用唯一标识符。',
                          'type' => 'string',
                          'example' => '7mbj****',
                        ),
                        'DocKey' => 
                        array (
                          'title' => '文档唯一标识符',
                          'description' => '白板文档唯一标识符。',
                          'type' => 'string',
                          'example' => '4EZlwmRW0gDG****',
                        ),
                        'RecordId' => 
                        array (
                          'title' => '白板录制Session的唯一标识',
                          'description' => '白板录制Session的唯一标识符。',
                          'type' => 'string',
                          'example' => '8a4556336bc6456b918e8eedbed6****',
                        ),
                        'UserId' => 
                        array (
                          'title' => '创建录制的用户ID',
                          'description' => '创建白板录制的用户ID。',
                          'type' => 'string',
                          'example' => '123456',
                        ),
                        'OperateList' => 
                        array (
                          'title' => '白板录制操作列表',
                          'description' => '白板录制操作列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '白板录制操作，格式：operate@UNIX时间戳。其中operate取值如下所示：

- **start**：开始白板录制。
- **stop**：停止白板录制。
- **pause**：暂停白板录制。
- **resume**：恢复白板录制。
',
                            'type' => 'string',
                            'example' => 'start@1631686505500',
                          ),
                          'example' => '2020-04-10 12:20:30.567',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE22D613-D3C6-4A58-87CA-F21FC85AA08E\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": {\\n    \\"TotalNum\\": 10,\\n    \\"TotalPage\\": 1,\\n    \\"RecordingList\\": [\\n      {\\n        \\"AppID\\": \\"7mbj****\\",\\n        \\"DocKey\\": \\"4EZlwmRW0gDG****\\",\\n        \\"RecordId\\": \\"8a4556336bc6456b918e8eedbed6****\\",\\n        \\"UserId\\": \\"123456\\",\\n        \\"OperateList\\": [\\n          \\"start@1631686505500\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeWhiteBoardRecordingsResponse>\\n    <RequestId>FE22D613-D3C6-4A58-87CA-F21FC85AA08E</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <ErrorCode>null</ErrorCode>\\n    <ErrorMsg>null</ErrorMsg>\\n    <Result>\\n        <TotalNum>10</TotalNum>\\n        <TotalPage>1</TotalPage>\\n        <RecordingList>\\n            <AppID>7mbj****</AppID>\\n            <DocKey>4EZlwmRW0gDG****</DocKey>\\n            <RecordId>8a4556336bc6456b918e8eedbed6****</RecordId>\\n            <UserId>123456</UserId>\\n            <OperateList>start@1631686505500</OperateList>\\n        </RecordingList>\\n    </Result>\\n</DescribeWhiteBoardRecordingsResponse>","errorExample":""}]',
      'title' => '查询白板录制列表',
      'description' => '# 使用说明

调用本接口前，您必须已经调用[StartWhiteBoardRecording](~~253300~~)启动白板录制。

# QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
    ),
    'SetUsersPermissions' => 
    array (
      'summary' => '设置白板文档用户的长期权限。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserIds',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '需要设置权限的用户ID，多个用英文逗号（,）分隔，最多30个，每个ID由纯数字组成',
            'description' => '需要设置权限的用户ID，多个使用英文逗号（,）分隔，最多30个，每个ID由纯数字组成。',
            'type' => 'string',
            'required' => true,
            'example' => '100001,100002',
          ),
        ),
        1 => 
        array (
          'name' => 'DocKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板文档唯一标识符',
            'description' => '白板文档唯一标识符。获取DocKey，请参见[CreateWhiteBoard](~~204299~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '4EZlwmRW0gDG****',
          ),
        ),
        2 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板应用唯一标识符。获取AppID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
          ),
        ),
        3 => 
        array (
          'name' => 'PermissionType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户白板权限类型，可选值：ban/read/edit',
            'description' => '用户白板权限类型，取值：

- **ban**：无权限。

- **read**：只读。

- **edit**：读写。',
            'type' => 'string',
            'required' => true,
            'example' => 'edit',
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
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CFB5E6AA-823B-415B-AA03-4B9892049B68',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '请求结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果',
                'description' => '返回结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CFB5E6AA-823B-415B-AA03-4B9892049B68\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetUsersPermissionsResponse>\\n    <RequestId>CFB5E6AA-823B-415B-AA03-4B9892049B68</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <Result>true</Result>\\n</SetUsersPermissionsResponse>","errorExample":""}]',
      'title' => '设置用户权限',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[CreateApp](~~204234~~)和[CreateWhiteBoard](~~204299~~)创建白板应用及白板文档。
# QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
    ),
    'RefreshUsersPermissions' => 
    array (
      'summary' => '刷新白板文档用户的权限缓存，当用户再次访问白板时，通过回调确认用户权限。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserIds',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '需要刷新权限的用户ID，多个用英文逗号（,）分隔，最多30个，每个ID由纯数字组成',
            'description' => '需要刷新权限的用户ID，多个用英文逗号（,）分隔，最多30个，每个ID由纯数字组成。',
            'type' => 'string',
            'required' => true,
            'example' => '100001,100002',
          ),
        ),
        1 => 
        array (
          'name' => 'DocKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板文档唯一标识符',
            'description' => '白板文档唯一标识符。获取DocKey，请参见[CreateWhiteBoard](~~204299~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '4EZlwmRW0gDG****',
          ),
        ),
        2 => 
        array (
          'name' => 'AppID',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '白板应用唯一标识符',
            'description' => '白板应用唯一标识符。获取AppID，请参见[CreateApp](~~204234~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '7mbj****',
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
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0E85E1C9-4A68-49E5-965A-22F628B209C6',
              ),
              'ResponseSuccess' => 
              array (
                'title' => '请求结果',
                'description' => '调用结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'title' => '错误码',
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMsg' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Result' => 
              array (
                'title' => '返回结果',
                'description' => '返回的结果信息。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0E85E1C9-4A68-49E5-965A-22F628B209C6\\",\\n  \\"ResponseSuccess\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMsg\\": \\"null\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<RefreshUsersPermissionsResponse>\\n    <RequestId>0E85E1C9-4A68-49E5-965A-22F628B209C6</RequestId>\\n    <ResponseSuccess>true</ResponseSuccess>\\n    <Result>true</Result>\\n</RefreshUsersPermissionsResponse>","errorExample":""}]',
      'title' => '刷新用户权限',
      'description' => '# 使用说明
调用本接口前，您必须已经调用[CreateApp](~~204234~~)和[CreateWhiteBoard](~~204299~~)创建白板应用及白板文档。
# QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~342798~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'rtc-white-board.cn-shanghai.aliyuncs.com',
    ),
  ),
);
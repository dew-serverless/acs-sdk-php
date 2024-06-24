<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'OnsMqtt',
    'version' => '2020-04-20',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 121298,
      'title' => 'Token',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ApplyToken',
        1 => 'QueryToken',
        2 => 'RevokeToken',
      ),
    ),
    1 => 
    array (
      'id' => 121302,
      'title' => 'Group ID',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateGroupId',
        1 => 'DeleteGroupId',
        2 => 'ListGroupId',
      ),
    ),
    2 => 
    array (
      'id' => 121296,
      'title' => '消息',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SendMessage',
      ),
    ),
    3 => 
    array (
      'id' => 121293,
      'title' => '客户端',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QuerySessionByClientId',
        1 => 'BatchQuerySessionByClientIds',
      ),
    ),
    4 => 
    array (
      'id' => 121306,
      'title' => '一机一密',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetDeviceCredential',
        1 => 'RefreshDeviceCredential',
        2 => 'RegisterDeviceCredential',
        3 => 'UnRegisterDeviceCredential',
        4 => 'ListDeviceCredentialClientId',
      ),
    ),
    5 => 
    array (
      'id' => 187143,
      'title' => '轨迹',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryMqttTraceDevice',
        1 => 'QueryMqttTraceMessageOfClient',
        2 => 'QueryMqttTraceMessagePublish',
        3 => 'QueryMqttTraceMessageSubscribe',
      ),
    ),
    6 => 
    array (
      'id' => 187148,
      'title' => 'CA证书',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RegisterCaCertificate',
        1 => 'ActiveCaCertificate',
        2 => 'InactivateCaCertificate',
        3 => 'ListCaCertificate',
        4 => 'GetCaCertificate',
        5 => 'GetRegisterCode',
        6 => 'DeleteCaCertificate',
      ),
    ),
    7 => 
    array (
      'id' => 187156,
      'title' => '设备证书',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ActiveDeviceCertificate',
        1 => 'InactivateDeviceCertificate',
        2 => 'ListDeviceCertificate',
        3 => 'ListDeviceCertificateByCaSn',
        4 => 'GetDeviceCertificate',
        5 => 'DeleteDeviceCertificate',
      ),
    ),
    8 => 
    array (
      'id' => 190144,
      'title' => '自定义权限',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddCustomAuthIdentity',
        1 => 'UpdateCustomAuthIdentity',
        2 => 'QueryCustomAuthIdentity',
        3 => 'DeleteCustomAuthIdentity',
        4 => 'AddCustomAuthPermission',
        5 => 'UpdateCustomAuthPermission',
        6 => 'QueryCustomAuthPermission',
        7 => 'DeleteCustomAuthPermission',
        8 => 'AddCustomAuthConnectBlack',
        9 => 'DeleteCustomAuthConnectBlack',
        10 => 'QueryCustomAuthConnectBlack',
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
    'ApplyToken' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Resources',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源名称，即云消息队列 MQTT 版的Topic，多个Topic以逗号（,）分隔，每个Token最多运行操作100个资源。当有多个Topic时，需要按照字典顺序排序。
申请Token时注册的资源参数支持MQTT通配符语法，包含加号单级通配符（+）和井号多级通配符（#）。

例如，如果申请Token时指定**Resources**为“Topic1/+”，则客户端可以操作“Topic1/xxx”的任意Topic；如果申请Token时指定**Resources**为“Topic1/#”，则客户端可以操作“Topic1/xxx/xxx/xxx”的任意多级Topic。

> 云消息队列 MQTT 版支持匹配子级Topic，子级Topic无需在控制台创建，直接在消息收发代码中设置即可。Topic名称中的正斜线（/）用于分隔父级Topic和各子级Topic。更多信息，请参见[基本概念](~~42420~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TopicA/+',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。该实例ID在[控制台](https://mqtt.console.aliyun.com/)**实例详情**页面获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'post-cn-0pp12gl****',
          ),
        ),
        2 => 
        array (
          'name' => 'ExpireTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Token失效的毫秒时间戳。允许设置的失效最小间隔是60秒，最长为30天。如果输入的取值超过30天，申请接口不会报错，但实际生效时间为30天。

示例：如果Token的失效间隔需设置为60秒，当前的系统时间毫秒时间戳为1609434061000，那么该参数的取值需设置为**1609434121000**，即1609434061000+60x1000之和。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1609434121000',
          ),
        ),
        3 => 
        array (
          'name' => 'Actions',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Token的权限类型，取值说明如下：
- **R**：只有读权限，即只能订阅指定的Topic，不能向Topic生产消息。
- **W**：只有写权限，即只能向指定Topic生产消息，不能订阅指定Topic。
- **R,W**：同时拥有读和写的权限，即同时拥有向指定Topic生产消息或订阅指定Topic的权限。**R**和**W**之间需要用逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'R',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Token' => 
              array (
                'description' => '服务端返回的Token值。

> 请勿对返回的Token内容做任何长度、格式或规则的假设。以具体返回值为准。
',
                'type' => 'string',
                'example' => 'LzMT+XLFl5s/YWJ/MlDz4t/Lq5HC1iGU1P28HAMaxYxn8aQbALNtml7QZKl9L9kPe6LqUb95tEVo+zUqOogs9+jZwDUSzsd4X4qaD3n2TrBEuMOqKkk1Xdrvu9VBQQvIYbz7MJWZDYC3DlW7gLEr33Cuj54iIhagtBi3epStJitsssWs7otY9zhKOSZxhr49G3d0bh35mwyP18EMvDas8UlzeSozsSrujNUqZXOGK0PEBSd+rWMGDJlCt6GFmJgm2JFY7PJwf/7OOSmUYIYFs5o/PuPpoTMF+hcVXMs+0yDukIMTOzG9m3t8k36PVrghFmnK6pC3Rt3mibjW****ng==',
              ),
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的。',
                'type' => 'string',
                'example' => '31782AAF-D0CC-44C3-ABFD-1B500276****',
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
            'errorCode' => 'ApplyTokenOverFlow',
            'errorMessage' => 'You have applied for tokens too many times. Please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'CheckAccountInfoFailed',
            'errorMessage' => 'An error occurred while checking the account information by the STS token.',
          ),
          2 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          3 => 
          array (
            'errorCode' => 'ParameterCheckFailed',
            'errorMessage' => 'An error occurred while validating the parameters. The parameters may be missing or invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'PermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Token\\": \\"LzMT+XLFl5s/YWJ/MlDz4t/Lq5HC1iGU1P28HAMaxYxn8aQbALNtml7QZKl9L9kPe6LqUb95tEVo+zUqOogs9+jZwDUSzsd4X4qaD3n2TrBEuMOqKkk1Xdrvu9VBQQvIYbz7MJWZDYC3DlW7gLEr33Cuj54iIhagtBi3epStJitsssWs7otY9zhKOSZxhr49G3d0bh35mwyP18EMvDas8UlzeSozsSrujNUqZXOGK0PEBSd+rWMGDJlCt6GFmJgm2JFY7PJwf/7OOSmUYIYFs5o/PuPpoTMF+hcVXMs+0yDukIMTOzG9m3t8k36PVrghFmnK6pC3Rt3mibjW****ng==\\",\\n  \\"RequestId\\": \\"31782AAF-D0CC-44C3-ABFD-1B500276****\\"\\n}","errorExample":""},{"type":"xml","example":"<ApplyTokenResponse>\\n    <RequestId>31782AAF-D0CC-44C3-ABFD-1B500276****</RequestId>\\n    <Token>LzMT+XLFl5s/YWJ/MlDz4t/Lq5HC1iGU1P28HAMaxYxn8aQbALNtml7QZKl9L9kPe6LqUb95tEVo+zUqOogs9+jZwDUSzsd4X4qaD3n2TrBEuMOqKkk1Xdrvu9VBQQvIYbz7MJWZDYC3DlW7gLEr33Cuj54iIhagtBi3epStJitsssWs7otY9zhKOSZxhr49G3d0bh35mwyP18EMvDas8UlzeSozsSrujNUqZXOGK0PEBSd+rWMGDJlCt6GFmJgm2JFY7PJwf/7OOSmUYIYFs5o/PuPpoTMF+hcVXMs+0yDukIMTOzG9m3t8k36PVrghFmnK6pC3Rt3mibjW****ng==</Token>\\n</ApplyTokenResponse>","errorExample":""}]',
      'title' => '创建临时访问 Token',
      'summary' => 'Token鉴权方式下，云消息队列 MQTT 版服务端会颁发Token（临时凭证）给客户端，客户端访问云消息队列 MQTT 版服务端时需要携带Token用于权限验证。
本接口用于向云消息队列 MQTT 版申请临时Token。',
      'description' => '- 单用户请求频率限制为100次/秒。如有特殊需求，请联系云消息队列
 MQTT 版技术支持，钉钉群号：35228338。
- 每成功调用一次**ApplyToken**接口，都会计算为一次消息TPS，从而影响您的计费。计费详情，请参见[计费说明](~~52819~~)。',
      'requestParamsDescription' => '  > 更多参数说明请参见[公共参数](~~163046~~)和[服务接入点](~~181438~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryToken' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Token',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您需查询的Token。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'LzMT+XLFl5s/YWJ/MlDz4t/Lq5HC1iGU1P28HAMaxYxn8aQbALNtml7QZKl9L9kPe6LqUb95tEVo+zUqOogs9+jZwDUSzsd4X4qaD3n2TrBEuMOqKkk1Xdrvu9VBQQvIYbz7MJWZDYC3DlW7gLEr33Cuj54iIhagtBi3epStJitsssWs7otY9zhKOSZxhr49G3d0bh35mwyP18EMvDas8UlzeSozsSrujNUqZXOGK0PEBSd+rWMGDJlCt6GFmJgm2JFY7PJwf/7OOSmUYIYFs5o/PuPpoTMF+hcVXMs+0yDukIMTOzG9m3t8k36PVrghFmnK6pC3Rt3mibjW****ng==',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。该实例ID在[控制台](https://mqtt.console.aliyun.com/)**实例详情**页面获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'post-cn-0pp12gl****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'TokenStatus' => 
              array (
                'description' => '您所校验的Token的状态。取值说明如下：
- **true**：该Token有效。
- **false**：该Token无效。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的。',
                'type' => 'string',
                'example' => '5C8AADD0-6A95-436D-AFA0-3405CCE3****',
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
            'errorCode' => 'CheckAccountInfoFailed',
            'errorMessage' => 'An error occurred while checking the account information by the STS token.',
          ),
          1 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          2 => 
          array (
            'errorCode' => 'ParameterCheckFailed',
            'errorMessage' => 'An error occurred while validating the parameters. The parameters may be missing or invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'PermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
          4 => 
          array (
            'errorCode' => 'QueryTokenOverFlow',
            'errorMessage' => 'You have queried tokens too many times. Please try again later.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TokenStatus\\": true,\\n  \\"RequestId\\": \\"5C8AADD0-6A95-436D-AFA0-3405CCE3****\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryTokenResponse>\\r\\n<RequestId>5C8AADD0-6A95-436D-AFA0-3405CCE3****</RequestId>\\r\\n<TokenStatus>true</TokenStatus>\\r\\n</QueryTokenResponse>","errorExample":""}]',
      'title' => '校验Token的有效性',
      'summary' => 'Token鉴权方式下，云消息队列 MQTT 版服务端会颁发Token（临时凭证）给客户端，客户端访问云消息队列 MQTT 版服务端时需要携带Token用于权限验证。
Token为临时访问凭证具有一定的时效性，您可以通过本接口查询Token是否失效。',
      'description' => '- 单用户请求频率限制为100次/秒。如有特殊需求，请联系云消息队列 MQTT 版技术支持，钉钉群号：35228338。
- 每成功调用一次**QueryToken**接口，都会计算为一次消息TPS，从而影响您的计费。计费详情，请参见[计费说明](~~52819~~)。',
      'requestParamsDescription' => '> 更多参数说明请参见[公共参数](~~163046~~)和[服务接入点](~~181438~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RevokeToken' => 
    array (
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Token',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您需要吊销的Token。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'LzMT+XLFl5s/YWJ/MlDz4t/Lq5HC1iGU1P28HAMaxYxn8aQbALNtml7QZKl9L9kPe6LqUb95tEVo+zUqOogs9+jZwDUSzsd4X4qaD3n2TrBEuMOqKkk1Xdrvu9VBQQvIYbz7MJWZDYC3DlW7gLEr33Cuj54iIhagtBi3epStJitsssWs7otY9zhKOSZxhr49G3d0bh35mwyP18EMvDas8UlzeSozsSrujNUqZXOGK0PEBSd+rWMGDJlCt6GFmJgm2JFY7PJwf/7OOSmUYIYFs5o/PuPpoTMF+hcVXMs+0yDukIMTOzG9m3t8k36PVrghFmnK6pC3Rt3mibjW****ng==',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。该实例ID在[控制台](https://mqtt.console.aliyun.com/)**实例详情**页面获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'post-cn-0pp12gl****',
          ),
        ),
      ),
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
                'description' => '公共参数，每个请求的ID都是唯一的。',
                'type' => 'string',
                'example' => '833EDFCB-C447-4CE3-B21F-3A4C2D1B****',
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
            'errorCode' => 'CheckAccountInfoFailed',
            'errorMessage' => 'An error occurred while checking the account information by the STS token.',
          ),
          1 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          2 => 
          array (
            'errorCode' => 'ParameterCheckFailed',
            'errorMessage' => 'An error occurred while validating the parameters. The parameters may be missing or invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'PermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
          4 => 
          array (
            'errorCode' => 'RevokeTokenOverFlow',
            'errorMessage' => 'You have revoked tokens too many times. Please try again later.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"833EDFCB-C447-4CE3-B21F-3A4C2D1B****\\"\\n}","errorExample":""},{"type":"xml","example":"<RevokeTokenResponse>\\r\\n<RequestId>833EDFCB-C447-4CE3-B21F-3A4C2D1B****</RequestId>\\r\\n</RevokeTokenResponse>","errorExample":""}]',
      'title' => '吊销 Token',
      'summary' => '调用RevokeToken接口吊销Token。',
      'description' => '- 单用户请求频率限制为5次/秒。请联系云消息队列 MQTT 版技术支持，钉钉群号：35228338。
- 每成功调用一次**RevokeToken**接口，都会计算为一次消息TPS，从而影响您的计费。计费详情，请参见[计费说明](~~52819~~)。',
      'requestParamsDescription' => '> 更多参数说明请参见[公共参数](~~163046~~)和[服务接入点](~~181438~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateGroupId' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您需创建的Group ID。取值说明如下：

- 以 "GID_" 或者 "GID-" 开头，只能包含字母、数字、连字符（-）和下划线（_），长度限制在 7~64 字符之间。
- Group ID 一旦创建，则无法修改，详情请参见[名词解释](~~42420~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建的Group ID所在的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'mqtt-cn-0pp1ldu****',
          ),
        ),
      ),
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
                'description' => '公共参数，每个请求的 ID 都是唯一的。',
                'type' => 'string',
                'example' => '2C7D722D-0F3D-4415-A9CD-A464D82C****',
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
            'errorCode' => 'GroupIdAlreadyExsited',
            'errorMessage' => 'The specified GroupId already exists.',
          ),
          1 => 
          array (
            'errorCode' => 'GroupIdAlreadyUsedByOtherUsers',
            'errorMessage' => 'The current GroupId is used by another user. Please change to a different GroupId.',
          ),
          2 => 
          array (
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          4 => 
          array (
            'errorCode' => 'InstanceNotFound',
            'errorMessage' => 'Failed to find the instance. The instanceId may be invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'PermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'CreateGroupIdError',
            'errorMessage' => 'Failed to create GroupId. Try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2C7D722D-0F3D-4415-A9CD-A464D82C****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateGroupIdResponse>\\r\\n<RequestId>2C7D722D-0F3D-4415-A9CD-A464D82C****</RequestId>\\r\\n</CreateGroupIdResponse>","errorExample":""}]',
      'title' => '创建 Group ID',
      'summary' => '消息生产者和消费者客户端接入云消息队列 MQTT 版服务端收发消息时，需要指定Client ID，用于唯一标识一个客户端。
Client ID由两部分组成，组织形式为<GroupID>@@@<DeviceID>，DeviceID由客户端自定义，GroupID需要提前在云消息队列 MQTT 版服务端创建。',
      'description' => '每成功调用一次 **CreateGroupId** 接口，都会计算为一次消息 TPS，从而影响您的计费。详情请参见[计费说明](~~52819~~)。',
      'requestParamsDescription' => '> 更多参数说明请参见[公共参数](~~163046~~)和[服务接入点](~~181438~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteGroupId' => 
    array (
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您需要删除的Group ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您需要删除的Group ID所在实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'mqtt-cn-0pp1ldu****',
          ),
        ),
      ),
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
                'description' => '公共参数，每个请求的ID都是唯一的。',
                'type' => 'string',
                'example' => '0621DDD7-F0E9-4D35-8900-518116D6****',
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
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'PermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
          2 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          3 => 
          array (
            'errorCode' => 'InstanceNotFound',
            'errorMessage' => 'Failed to find the instance. The instanceId may be invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'ResourcePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'DeleteGroupIdError',
            'errorMessage' => 'Failed to delete GroupId. Try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0621DDD7-F0E9-4D35-8900-518116D6****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteGroupIdResponse>\\r\\n<RequestId>0621DDD7-F0E9-4D35-8900-518116D6****</RequestId>\\r\\n</DeleteGroupIdResponse>","errorExample":""}]',
      'title' => '删除 Group ID',
      'summary' => '调用DeleteGroupId删除Group ID。',
      'description' => '每成功调用一次**DeleteGroupId**接口，都会计算为一次消息TPS，从而影响您的计费。计费详情，请参见[计费说明](~~52819~~)。',
      'requestParamsDescription' => '> 更多参数说明请参见[公共参数](~~163046~~)和[服务接入点](~~181438~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListGroupId' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的Group ID列表的实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'mqtt-cn-0pp1ldu****',
          ),
        ),
      ),
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
                'description' => '公共参数，每个请求的ID都是唯一的。',
                'type' => 'string',
                'example' => '95996EEB-D894-44FA-A87C-940F5CD9****',
              ),
              'Data' => 
              array (
                'description' => '所查询的Group ID的详细信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UpdateTime' => 
                    array (
                      'description' => '该Group ID的最近一次更新时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1564577317000',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '查询的Group ID所属实例的ID。',
                      'type' => 'string',
                      'example' => 'post-cn-45910tj****',
                    ),
                    'IndependentNaming' => 
                    array (
                      'description' => '该实例是否有独立命名空间。取值如下：

- **true**：有独立命名空间，该实例下的资源需保证命名唯一，跨实例可重名。

- **false**：无独立命名空间，该实例下的资源需保证全局命名唯一，跨实例不可重名。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'GroupId' => 
                    array (
                      'description' => '查询到的属于该实例的Group ID。',
                      'type' => 'string',
                      'example' => 'GID_test1',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '该Group ID的创建时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1564577317000',
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
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          2 => 
          array (
            'errorCode' => 'InstanceNotFound',
            'errorMessage' => 'Failed to find the instance. The instanceId may be invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'PermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"95996EEB-D894-44FA-A87C-940F5CD9****\\",\\n  \\"Data\\": [\\n    {\\n      \\"UpdateTime\\": 1564577317000,\\n      \\"InstanceId\\": \\"post-cn-45910tj****\\",\\n      \\"IndependentNaming\\": true,\\n      \\"GroupId\\": \\"GID_test1\\",\\n      \\"CreateTime\\": 1564577317000\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListGroupIdResponse>\\n<RequestId>95996EEB-D894-44FA-A87C-940F5CD9****</RequestId>\\n<Data>\\n    <InstanceId>post-cn-45910tj****</InstanceId>\\n    <CreateTime>1564577317000</CreateTime>\\n    <UpdateTime>1564577317000</UpdateTime>\\n    <IndependentNaming>true</IndependentNaming>\\n    <GroupId>GID_test2</GroupId>\\n</Data>\\n<Data>\\n    <InstanceId>post-cn-45910tj****</InstanceId>\\n    <CreateTime>1563200655000</CreateTime>\\n    <UpdateTime>1563200655000</UpdateTime>\\n    <IndependentNaming>true</IndependentNaming>\\n    <GroupId>GID_test1</GroupId>\\n</Data>\\n</ListGroupIdResponse>","errorExample":""}]',
      'title' => '查看某实例下的所有 Group ID',
      'summary' => '调用ListGroupId查看某实例下的所有Group ID。',
      'description' => '每成功调用一次**ListGroupId**接口，都会计算为一次消息TPS，从而影响您的计费。计费详情，请参见[计费说明](~~52819~~)。',
      'requestParamsDescription' => '> 更多参数说明请参见[公共参数](~~163046~~)和[服务接入点](~~181438~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SendMessage' => 
    array (
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MqttTopic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版的Topic，即消息发送的目标Topic。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TopicA',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。您可以在[控制台](https://mqtt.console.aliyun.com)**实例详情**页面的**基础信息**区域查看。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'post-cn-0pp12gl****',
          ),
        ),
        2 => 
        array (
          'name' => 'Payload',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息内容，即消息负载。建议自行做Base64编码，避免传输不可见字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
              'MsgId' => 
              array (
                'description' => '消息的唯一标识，消息发送成功后服务端会返回消息ID。',
                'type' => 'string',
                'example' => '0B736D997B7F45FF54E61C1C1B58****',
              ),
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
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
            'errorCode' => 'CheckAccountInfoFailed',
            'errorMessage' => 'An error occurred while checking the account information by the STS token.',
          ),
          1 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          2 => 
          array (
            'errorCode' => 'ParameterCheckFailed',
            'errorMessage' => 'An error occurred while validating the parameters. The parameters may be missing or invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'PermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'SendMessageFailed',
            'errorMessage' => 'A storage exception occurred while sending the message. Please try again.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MsgId\\": \\"0B736D997B7F45FF54E61C1C1B58****\\",\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\"\\n}","errorExample":""},{"type":"xml","example":"<SendMessageResponse>\\n      <RequestId>020F6A43-19E6-4B6E-B846-44EB31DF****</RequestId>\\n      <MsgId>0B736D997B7F45FF54E61C1C1B58****</MsgId>\\n</SendMessageResponse>","errorExample":""}]',
      'title' => '向云消息队列 MQTT 版发送单条消息',
      'summary' => '从服务端应用向云消息队列 MQTT 版发送单条消息。',
      'description' => '- **SendMessage**接口为服务端应用调用，与MQTT客户端发送消息互补。服务端和客户端的使用场景区别，请参见[开发指南使用指引](~~179160~~)。
- 调用**SendMessage**接口前，请确认您的云消息队列 MQTT 版实例的内核版本为V3.3.0或以上版本。内核版本信息可在[控制台](https://mqtt.console.aliyun.com)**实例详情**页面获取。
- 调用**SendMessage**接口发送的消息不支持流转至云消息队列 RocketMQ 版。若需要通过MQTT服务端将消息流转至云消息队列 RocketMQ 版，请使用[SDK发送消息](~~174527~~)。
**SendMessage**接口的QPS限制为1000。更多信息，请参见[QPS限制](~~163047~~)。
- 每成功调用一次**SendMessage**接口，都会计算为一次消息TPS，从而影响您的计费。计费详情，请参见[计费说明](~~52819~~)。',
      'requestParamsDescription' => ' > 更多参数说明请参见[公共参数](~~163046~~)和[服务接入点](~~181438~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QuerySessionByClientId' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的目标Client ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test@@@test',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。您可以在[控制台](https://mqtt.console.aliyun.com)**实例详情**页面获取该ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'post-cn-0pp12gl****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'OnlineStatus' => 
              array (
                'description' => '设备是否在线，取值说明如下：

- **true**：在线
- **false**：不在线',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的。',
                'type' => 'string',
                'example' => 'E4581CCF-62AF-44D9-B5B4-D1DBBC0E****',
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
            'errorCode' => 'CheckAccountInfoFailed',
            'errorMessage' => 'An error occurred while checking the account information by the STS token.',
          ),
          1 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          2 => 
          array (
            'errorCode' => 'ParameterCheckFailed',
            'errorMessage' => 'An error occurred while validating the parameters. The parameters may be missing or invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'PermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OnlineStatus\\": true,\\n  \\"RequestId\\": \\"E4581CCF-62AF-44D9-B5B4-D1DBBC0E****\\"\\n}","errorExample":""},{"type":"xml","example":"<QuerySessionByClientIdResponse>\\r\\n      <OnlineStatus>true</OnlineStatus>\\r\\n      <RequestId>E4581CCF-62AF-44D9-B5B4-D1DBBC0E****</RequestId>\\r\\n</QuerySessionByClientIdResponse>","errorExample":""}]',
      'title' => '查询客户端在线状态',
      'summary' => '**QuerySessionByClientId**接口一般用于线上追踪单个设备的运行状态，再根据查询到的信息排查问题。输入Client ID即可查到对应设备是否在线、设备地址等信息。',
      'description' => '- **QuerySessionByClientId**接口的QPS限制为500。更多信息请参见[QPS限制](~~163047~~)。
- 每成功调用一次**QuerySessionByClientId**接口，都会计算为一次消息TPS，从而影响您的计费。详情请参见[计费说明](~~52819~~)。',
      'requestParamsDescription' => '> 更多参数说明请参见[公共参数](~~178121~~)和[服务接入点](~~181438~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchQuerySessionByClientIds' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。您可以在[控制台](https://mqtt.console.aliyun.com)**实例详情**页面获取该ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'post-cn-0pp12gl****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientIdList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '客户端列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '客户端编号，表示第N个Client ID。

> 单次最多批量查询10个Client ID的状态，即N的取值范围为1~10。',
              'type' => 'string',
              'required' => false,
              'example' => 'ClientIdList.1',
            ),
            'required' => true,
            'example' => 'ClientIdList.1',
            'maxItems' => 10,
          ),
        ),
      ),
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
                'description' => '公共参数，每个请求的ID都是唯一的。',
                'type' => 'string',
                'example' => '63309FDB-ED6C-46AE-B31C-A172FBA0****',
              ),
              'OnlineStatusList' => 
              array (
                'description' => '客户端状态列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OnlineStatus' => 
                    array (
                      'description' => '设备是否在线，取值说明如下：

- **true**：在线
- **false**：不在线',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ClientId' => 
                    array (
                      'description' => '客户端的Client ID。Client ID的详细信息，请参见[名词解释](~~42420~~)。',
                      'type' => 'string',
                      'example' => 'GID_test@0001',
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
            'errorCode' => 'CheckAccountInfoFailed',
            'errorMessage' => 'An error occurred while checking the account information by the STS token.',
          ),
          1 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          2 => 
          array (
            'errorCode' => 'ParameterCheckFailed',
            'errorMessage' => 'An error occurred while validating the parameters. The parameters may be missing or invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'PermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"63309FDB-ED6C-46AE-B31C-A172FBA0****\\",\\n  \\"OnlineStatusList\\": [\\n    {\\n      \\"OnlineStatus\\": true,\\n      \\"ClientId\\": \\"GID_test@0001\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<BatchQuerySessionByClientIdsResponse>\\r\\n  <OnlineStatusList>\\r\\n        <ClientId>GID_test@0001</ClientId>\\r\\n        <OnlineStatus>true</OnlineStatus>\\r\\n  </OnlineStatusList>\\r\\n  <OnlineStatusList>\\r\\n        <ClientId>GID_test@0002</ClientId>\\r\\n        <OnlineStatus>false</OnlineStatus>\\r\\n  </OnlineStatusList>\\r\\n  <RequestId>63309FDB-ED6C-46AE-B31C-A172FBA0****</RequestId>\\r\\n</BatchQuerySessionByClientIdsResponse>","errorExample":""}]',
      'title' => '批量查询客户端在线状态',
      'summary' => '根据 Client ID 批量查询客户端在线状态。',
      'description' => '- **BatchQuerySessionByClientIds**接口的QPS为100。更多信息，请参见[QPS限制](~~163047~~)。
- 每次调用**BatchQuerySessionByClientIds**接口最多查询10个Client ID对应的客户端的在线状态。
- 每成功调用一次**BatchQuerySessionByClientIds**接口，都会计算为一次消息TPS，从而影响您的计费。计费详情，请参见[计费说明](~~52819~~)。',
      'requestParamsDescription' => ' > 更多参数说明请参见[公共参数](~~163046~~)和[服务接入点](~~181438~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetDeviceCredential' => 
    array (
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
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询访问凭证的设备的Client ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test@@@test',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。您可以在控制台**实例详情**页面获取该ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'post-cn-0pp12gl****',
          ),
        ),
      ),
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
                'description' => '公共参数，每个请求的ID都是唯一的。',
                'type' => 'string',
                'example' => 'E4581CCF-62AF-44D9-B5B4-D1DQDC0E****',
              ),
              'DeviceCredential' => 
              array (
                'description' => '设备的访问凭证信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateTime' => 
                  array (
                    'description' => '设备访问凭证上一次更新的毫秒时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1605541382000',
                  ),
                  'DeviceAccessKeyId' => 
                  array (
                    'description' => '设备的AccessKey ID。',
                    'type' => 'string',
                    'example' => 'DC.Z5fXh9sRRVufyLi6wo****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '设备访问凭证创建的毫秒时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1605541382000',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '云消息队列 MQTT 版实例的ID。',
                    'type' => 'string',
                    'example' => 'post-cn-0pp12gl****',
                  ),
                  'DeviceAccessKeySecret' => 
                  array (
                    'description' => '设备的AccessKey Secret。',
                    'type' => 'string',
                    'example' => 'DC.BJMkn4eMQJK2vaApTS****',
                  ),
                  'ClientId' => 
                  array (
                    'description' => '设备的Client ID。',
                    'type' => 'string',
                    'example' => 'GID_test@@@test',
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
            'errorCode' => 'ApplyTokenOverFlow',
            'errorMessage' => 'You have applied for tokens too many times. Please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'CheckAccountInfoFailed',
            'errorMessage' => 'An error occurred while checking the account information by the STS token.',
          ),
          2 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          3 => 
          array (
            'errorCode' => 'ParameterCheckFailed',
            'errorMessage' => 'An error occurred while validating the parameters. The parameters may be missing or invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'PermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'DeviceCredentialNotFound',
            'errorMessage' => 'Device Credential Not Found. Check if the device certificate is registered.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4581CCF-62AF-44D9-B5B4-D1DQDC0E****\\",\\n  \\"DeviceCredential\\": {\\n    \\"UpdateTime\\": 1605541382000,\\n    \\"DeviceAccessKeyId\\": \\"DC.Z5fXh9sRRVufyLi6wo****\\",\\n    \\"CreateTime\\": 1605541382000,\\n    \\"InstanceId\\": \\"post-cn-0pp12gl****\\",\\n    \\"DeviceAccessKeySecret\\": \\"DC.BJMkn4eMQJK2vaApTS****\\",\\n    \\"ClientId\\": \\"GID_test@@@test\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDeviceCredentialResponse>\\n<RequestId>E4581CCF-62AF-44D9-B5B4-D1DQDC0E****</RequestId>\\n<DeviceCredential>\\n    <InstanceId>post-cn-0pp12gl****</InstanceId>\\n    <DeviceAccessKeySecret>DC.BJMkn4eMQJK2vaApTS****</DeviceAccessKeySecret>\\n    <CreateTime>1605541382000</CreateTime>\\n    <UpdateTime>1605541382000</UpdateTime>\\n    <DeviceAccessKeyId>DC.Z5fXh9sRRVufyLi6wo****</DeviceAccessKeyId>\\n    <ClientId>GID_test@@@test</ClientId>\\n</DeviceCredential>\\n</GetDeviceCredentialResponse>","errorExample":""}]',
      'title' => '查询设备的访问凭证',
      'summary' => '一机一密认证方式下，设备与云消息队列 MQTT 版建立连接时，需要携带提前申请的设备访问凭证信息向云消息队列 MQTT 版发起认证请求，请求通过则允许设备接入服务端。本接口用于查询指定设备的访问凭证。',
      'description' => '- 本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~163047~~)。
- 每成功调用一次**GetDeviceCredential**接口，都会计算为一次消息TPS，从而影响您的计费。详细信息，请参见[计费说明](~~52819~~)。',
      'requestParamsDescription' => ' > 更多参数说明请参见[公共参数](~~163046~~)和[服务接入点](~~181438~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RefreshDeviceCredential' => 
    array (
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要更新访问凭证的设备的Client ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test@@@test',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。您可以在控制台**实例详情**页面获取该ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'post-cn-0pp12gl****',
          ),
        ),
      ),
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
                'description' => '公共参数，每个请求的ID都是唯一的。',
                'type' => 'string',
                'example' => 'E4581CCF-62AF-44D9-B5B4-D1DBDC0F****',
              ),
              'DeviceCredential' => 
              array (
                'description' => '设备的访问凭证信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateTime' => 
                  array (
                    'description' => '设备访问凭证上一次更新的毫秒时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1605541382000',
                  ),
                  'DeviceAccessKeyId' => 
                  array (
                    'description' => '设备的AccessKey ID。',
                    'type' => 'string',
                    'example' => 'DC.Z5fXh9sRRVufyLi6wo****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '设备访问凭证创建的毫秒时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1605541382000',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '云消息队列 MQTT 版实例的ID。',
                    'type' => 'string',
                    'example' => 'post-cn-0pp12gl****',
                  ),
                  'DeviceAccessKeySecret' => 
                  array (
                    'description' => '设备的AccessKey Secret。',
                    'type' => 'string',
                    'example' => 'DC.BJMkn4eMQJK2vaApTS****',
                  ),
                  'ClientId' => 
                  array (
                    'description' => '设备的Client ID。',
                    'type' => 'string',
                    'example' => 'GID_test@@@test',
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
            'errorCode' => 'ApplyTokenOverFlow',
            'errorMessage' => 'You have applied for tokens too many times. Please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'CheckAccountInfoFailed',
            'errorMessage' => 'An error occurred while checking the account information by the STS token.',
          ),
          2 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          3 => 
          array (
            'errorCode' => 'ParameterCheckFailed',
            'errorMessage' => 'An error occurred while validating the parameters. The parameters may be missing or invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'PermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4581CCF-62AF-44D9-B5B4-D1DBDC0F****\\",\\n  \\"DeviceCredential\\": {\\n    \\"UpdateTime\\": 1605541382000,\\n    \\"DeviceAccessKeyId\\": \\"DC.Z5fXh9sRRVufyLi6wo****\\",\\n    \\"CreateTime\\": 1605541382000,\\n    \\"InstanceId\\": \\"post-cn-0pp12gl****\\",\\n    \\"DeviceAccessKeySecret\\": \\"DC.BJMkn4eMQJK2vaApTS****\\",\\n    \\"ClientId\\": \\"GID_test@@@test\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RefreshDeviceCredentialResponse>\\n<RequestId>E4581CCF-62AF-44D9-B5B4-D1DBDC0F****</RequestId>\\n<DeviceCredential>\\n    <InstanceId>post-cn-0pp12gl****</InstanceId>\\n    <DeviceAccessKeySecret>DC.BJMkn4eMQJK2vaApTS****</DeviceAccessKeySecret>\\n    <CreateTime>1605541382000</CreateTime>\\n    <UpdateTime>1605541382000</UpdateTime>\\n    <DeviceAccessKeyId>DC.Z5fXh9sRRVufyLi6wo****</DeviceAccessKeyId>\\n    <ClientId>GID_test@@@test</ClientId>\\n</DeviceCredential>\\n</RefreshDeviceCredentialResponse>","errorExample":""}]',
      'title' => '更新设备的访问凭证',
      'summary' => '调用RefreshDeviceCredential更新设备的访问凭证。',
      'description' => '- 本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~163047~~)。
- 每成功调用一次**RefreshDeviceCredential**接口，都会计算为一次消息TPS，从而影响您的计费。详细信息，请参见[计费说明](~~52819~~)。',
      'requestParamsDescription' => ' > 更多参数说明请参见[公共参数](~~163046~~)和[服务接入点](~~181438~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RegisterDeviceCredential' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要注册访问凭证的设备的Client ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test@@@test',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。您可以在控制台**实例详情**页面获取该ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'post-cn-0pp12gl****',
          ),
        ),
      ),
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
                'description' => '公共参数，每个请求的ID都是唯一的。',
                'type' => 'string',
                'example' => 'E4581CCF-62AF-44D9-B5B4-D1DBDC0E****',
              ),
              'DeviceCredential' => 
              array (
                'description' => '设备的访问凭证信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateTime' => 
                  array (
                    'description' => '设备访问凭证上一次更新的毫秒时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1605541382000',
                  ),
                  'DeviceAccessKeyId' => 
                  array (
                    'description' => '设备的AccessKey ID。',
                    'type' => 'string',
                    'example' => 'DC.Z5fXh9sRRVufyLi6wo****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '设备访问凭证创建的毫秒时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1605541382000',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '云消息队列 MQTT 版实例的ID。',
                    'type' => 'string',
                    'example' => 'post-cn-0pp12gl****',
                  ),
                  'DeviceAccessKeySecret' => 
                  array (
                    'description' => '设备的AccessKey Secret。',
                    'type' => 'string',
                    'example' => 'DC.BJMkn4eMQJK2vaApTS****',
                  ),
                  'ClientId' => 
                  array (
                    'description' => '设备的Client ID。',
                    'type' => 'string',
                    'example' => 'GID_test@@@test',
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
            'errorCode' => 'ApplyTokenOverFlow',
            'errorMessage' => 'You have applied for tokens too many times. Please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'CheckAccountInfoFailed',
            'errorMessage' => 'An error occurred while checking the account information by the STS token.',
          ),
          2 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          3 => 
          array (
            'errorCode' => 'ParameterCheckFailed',
            'errorMessage' => 'An error occurred while validating the parameters. The parameters may be missing or invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'PermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'DeviceCredentialNumExceed',
            'errorMessage' => 'The number of device credentia exceeds the limit. Please revoke unused device certificates',
          ),
          7 => 
          array (
            'errorCode' => 'DeviceCredentialExsit',
            'errorMessage' => 'Device Credential Exsit',
          ),
          8 => 
          array (
            'errorCode' => 'DeviceCredentialNotFound',
            'errorMessage' => 'Device Credential Not Found. Check if the device certificate is registered',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4581CCF-62AF-44D9-B5B4-D1DBDC0E****\\",\\n  \\"DeviceCredential\\": {\\n    \\"UpdateTime\\": 1605541382000,\\n    \\"DeviceAccessKeyId\\": \\"DC.Z5fXh9sRRVufyLi6wo****\\",\\n    \\"CreateTime\\": 1605541382000,\\n    \\"InstanceId\\": \\"post-cn-0pp12gl****\\",\\n    \\"DeviceAccessKeySecret\\": \\"DC.BJMkn4eMQJK2vaApTS****\\",\\n    \\"ClientId\\": \\"GID_test@@@test\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RegisterDeviceCredentialResponse>\\n<RequestId>E4581CCF-62AF-44D9-B5B4-D1DBDC0E****</RequestId>\\n<DeviceCredential>\\n    <InstanceId>post-cn-0pp12gl****</InstanceId>\\n    <DeviceAccessKeySecret>DC.BJMkn4eMQJK2vaApTS****</DeviceAccessKeySecret>\\n    <CreateTime>1605541382000</CreateTime>\\n    <UpdateTime>1605541382000</UpdateTime>\\n    <DeviceAccessKeyId>DC.Z5fXh9sRRVufyLi6wo****</DeviceAccessKeyId>\\n    <ClientId>GID_test@@@test</ClientId>\\n</DeviceCredential>\\n</RegisterDeviceCredentialResponse>","errorExample":""}]',
      'title' => '为某个设备注册访问凭证',
      'summary' => '一机一密认证方法，即预先为每个设备申请唯一的访问凭证（ClientId、DeviceAccessKeyId和DeviceAccessKeySecret）。当设备与云消息队列 MQTT 版建立连接时，需要将设备访问凭证中的信息按照约定的形式设置到Username和Password中，向云消息队列 MQTT 版发起认证请求，云消息队列 MQTT 版认证通过后激活设备，设备与云消息队列 MQTT 版间才可传输数据。
本接口用于为指定设备申请访问凭证。',
      'description' => '- 一个设备只能申请一个访问凭证，若调用本接口申请多次，以最近一次返回的访问凭证为准。
- 本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~163047~~)。
- 每成功调用一次**RegisterDeviceCredential**接口，都会计算为一次消息TPS，从而影响您的计费。详细信息，请参见[计费说明](~~52819~~)。',
      'requestParamsDescription' => ' > 更多参数说明请参见[公共参数](~~163046~~)和[服务接入点](~~181438~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnRegisterDeviceCredential' => 
    array (
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要注销访问凭证的设备的Client ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test@@@test',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。您可以在控制台**实例详情**页面获取该ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'post-cn-0pp12gl****',
          ),
        ),
      ),
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
                'description' => '公共参数，每个请求的ID都是唯一的。',
                'type' => 'string',
                'example' => 'E4581CCD-62AF-44D9-B5B4-D1DBDC0E****',
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
            'errorCode' => 'ApplyTokenOverFlow',
            'errorMessage' => 'You have applied for tokens too many times. Please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'CheckAccountInfoFailed',
            'errorMessage' => 'An error occurred while checking the account information by the STS token.',
          ),
          2 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          3 => 
          array (
            'errorCode' => 'ParameterCheckFailed',
            'errorMessage' => 'An error occurred while validating the parameters. The parameters may be missing or invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'PermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'DeviceCredentialNotFound',
            'errorMessage' => 'Device Credential Not Found. Check if the device certificate is registered.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4581CCD-62AF-44D9-B5B4-D1DBDC0E****\\"\\n}","errorExample":""},{"type":"xml","example":"<UnRegisterDeviceCredentialResponse>\\r\\n<RequestId>E4581CCD-62AF-44D9-B5B4-D1DBDC0E****</RequestId>\\r\\n</UnRegisterDeviceCredentialResponse>","errorExample":""}]',
      'title' => '注销设备的访问凭证',
      'summary' => '一机一密认证方法，即预先为每个设备申请唯一的访问凭证（ClientId、DeviceAccessKeyId和DeviceAccessKeySecret）。当设备与云消息队列 MQTT 版建立连接时，需要将设备访问凭证中的信息按照约定的形式设置到Username和Password中，向云消息队列 MQTT 版发起认证请求，云消息队列 MQTT 版认证通过后激活设备，设备与云消息队列 MQTT 版间才可传输数据。
若您不需要再使用某个设备访问凭证，您可以调用本接口注销指定的设备访问凭证。',
      'description' => '- 指定设备访问凭证被注销后，使用该访问凭证连接的客户端暂时不受影响，若客户端连接断开，则无法再次使用该访问凭证通过服务端认证。
- 本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~163047~~)。
- 每成功调用一次**UnRegisterDeviceCredential**接口，都会计算为一次消息TPS，从而影响您的计费。详细信息，请参见[计费说明](~~52819~~)。',
      'requestParamsDescription' => ' > 更多参数说明请参见[公共参数](~~163046~~)和[服务接入点](~~181438~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDeviceCredentialClientId' => 
    array (
      'summary' => '用于查询指定实例下有哪些设备申请了设备访问凭证（一机一密）。',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。您可以在控制台**实例详情**页面获取该ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'mqtt-xxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '微消息队列 MQTT 版的 Group ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_xxx',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询第几页的返回结果。起始页从第1页开始计算。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页最多显示几条查询记录。

取值范围：1~100。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '100',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一页查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'FFdXXXXXWa',
          ),
        ),
      ),
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'DeviceCredentialClientIdList' => 
              array (
                'description' => '返回信息列表。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '查询结果总数。',
                    'type' => 'string',
                    'example' => '10',
                  ),
                  'ClientIdList' => 
                  array (
                    'description' => '客户端列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '客户端ID。',
                      'type' => 'string',
                      'example' => 'GID_test@@@pub-1',
                    ),
                  ),
                  'PageNo' => 
                  array (
                    'description' => '当前返回的查询记录是第几页。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的最大结果数。',
                    'type' => 'string',
                    'example' => '100',
                  ),
                  'NextToken' => 
                  array (
                    'description' => '是否拥有下一次查询的令牌（Token）。取值：
- 第一次查询和没有下一次查询时，均无需填写。
- 如果有下一次查询，取值为上一次API调用返回的NextToken值。',
                    'type' => 'string',
                    'example' => '634dxxxxx75b5f',
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
            'errorCode' => 'ApplyTokenOverFlow',
            'errorMessage' => 'You have applied for tokens too many times. Please try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'CheckAccountInfoFailed',
            'errorMessage' => 'An error occurred while checking the account information by the STS token.',
          ),
          2 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          3 => 
          array (
            'errorCode' => 'ParameterCheckFailed',
            'errorMessage' => 'An error occurred while validating the parameters. The parameters may be missing or invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'PermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the resource permissions. Please check the account that created the instance, topic, and GroupId, and check their permission settings.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request. Try again later.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"DeviceCredentialClientIdList\\": {\\n    \\"Total\\": \\"10\\",\\n    \\"ClientIdList\\": [\\n      \\"GID_test@@@pub-1\\"\\n    ],\\n    \\"PageNo\\": \\"1\\",\\n    \\"PageSize\\": \\"100\\",\\n    \\"NextToken\\": \\"634dxxxxx75b5f\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询已注册访问凭证的设备列表',
    ),
    'QueryMqttTraceDevice' => 
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
          'name' => 'MqttRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例地域（Region）的ID。更多信息，请参见[服务接入点](~~181438~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。您可以在控制台**实例详情**页面的**基础信息**区域查看。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'mqtt-cn-i7m26mf****',
          ),
        ),
        2 => 
        array (
          'name' => 'Reverse',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果是否倒序显示。取值说明如下：

- **true**：按照设备活动时间倒序显示，最后一次的设备活动信息显示在第一条，最早一次的设备活动信息显示在最后一条。

- **false**：按照设备活动时间顺序显示，最早一次的设备活动信息显示在第一条，最后一次的设备活动信息显示在最后一条。

若不输入，则返回结果默认按照设备活动时间顺序显示。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => true,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询轨迹信息的设备的Client ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test@@@producer',
          ),
        ),
        4 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围的起始时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854774807',
            'minimum' => '-9223372036854774808',
            'example' => '1621580400000',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围的终止时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854774807',
            'minimum' => '-9223372036854774808',
            'example' => '1621584000000',
          ),
        ),
        6 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前取第几页消息，从1开始递增。若输入参数大于总页数，则返回结果为空。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '-2147483648',
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询，每页最多显示的消息数量，最小1条，最多100条。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '-2147483648',
            'example' => '5',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '当前位于第几页。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '317076B7-F946-46BC-A98F-4CF9777C****',
              ),
              'PageSize' => 
              array (
                'description' => '每页最多显示的设备活动信息数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Total' => 
              array (
                'description' => '查询到的设备活动信息总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3',
              ),
              'DeviceInfoList' => 
              array (
                'description' => '查询的设备活动信息明细。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ChannelId' => 
                    array (
                      'description' => '设备连接标识。',
                      'type' => 'string',
                      'example' => 'c69fe839209547fa9d073781b9cd****',
                    ),
                    'Time' => 
                    array (
                      'description' => '设备动作发生的时间。',
                      'type' => 'string',
                      'example' => '2021-05-21 15:51:54.867',
                    ),
                    'ActionCode' => 
                    array (
                      'description' => '设备动作的返回码。取值说明如下：

- **mqtt.trace.action.connect**：设备动作为**connect**时返回该参数值。

- **mqtt.trace.action.close**：设备动作为**close**时返回该参数值。

- **mqtt.trace.action.disconnect**：设备动作为**disconnect**时返回该参数值。',
                      'type' => 'string',
                      'example' => 'mqtt.trace.action.connect',
                    ),
                    'Action' => 
                    array (
                      'description' => '设备动作。取值说明如下：

- **connect**：客户端请求与服务端连接。

- **close**：TCP连接断开。

- **disconnect**：客户端请求与服务端断开连接。',
                      'type' => 'string',
                      'example' => 'connect',
                    ),
                    'ActionInfo' => 
                    array (
                      'description' => '设备动作的描述信息。取值说明如下：

- **accepted**：服务端接收客户端发起的连接请求。

- **not authorized**：客户端访问的实例权限校验失败导致TCP连接断开。

- **clientId conflict**：客户端标识冲突导致TCP连接断开。

- **resource auth failed**：客户端访问的Topic或Group ID资源权限校验失败导致TCP连接断开。

- **no heart**：客户端无心跳导致TCP连接断开。

- **closed by client**：客户端异常导致TCP连接断开。

- **disconnected by client**：客户端请求断开连接。

- **invalid param**：请求参数不合法导致TCP连接断开。

- **Socket IOException**：网络抖动或丢包导致TCP连接断开。',
                      'type' => 'string',
                      'example' => 'accept',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"317076B7-F946-46BC-A98F-4CF9777C****\\",\\n  \\"PageSize\\": 2,\\n  \\"Total\\": 3,\\n  \\"DeviceInfoList\\": [\\n    {\\n      \\"ChannelId\\": \\"c69fe839209547fa9d073781b9cd****\\",\\n      \\"Time\\": \\"2021-05-21 15:51:54.867\\",\\n      \\"ActionCode\\": \\"mqtt.trace.action.connect\\",\\n      \\"Action\\": \\"connect\\",\\n      \\"ActionInfo\\": \\"accept\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryMqttTraceDeviceResponse>\\n<DeviceInfoList>\\n    <Action>connect</Action>\\n    <ActionCode>mqtt.trace.action.connect</ActionCode>\\n    <ActionInfo>accepted</ActionInfo>\\n    <Time>2021-05-21 15:10:21.844</Time>\\n    <ChannelId>27e1c09a1d7d4944901500db7186****</ChannelId>\\n </DeviceInfoList>\\n <DeviceInfoList>\\n    <Action>close</Action>\\n    <ActionCode>mqtt.trace.action.close</ActionCode>\\n    <ActionInfo>no heart</ActionInfo>\\n    <Time>2021-05-21 15:51:37.980</Time>\\n    <ChannelId>27e1c09a1d7d4944901500db7186****</ChannelId>\\n </DeviceInfoList>\\n <DeviceInfoList>\\n    <Action>connect</Action>\\n    <ActionCode>mqtt.trace.action.connect</ActionCode>\\n    <ActionInfo>accepted</ActionInfo>\\n    <Time>2021-05-21 15:52:48.669</Time>\\n    <ChannelId>34022074d3c1403faba6e0334121****</ChannelId>\\n </DeviceInfoList>\\n <PageSize>5</PageSize>\\n <CurrentPage>1</CurrentPage>\\n <Total>3</Total>\\n <RequestId>317076B7-F946-46BC-A98F-4CF9777C****</RequestId>\\n</QueryMqttTraceDeviceResponse>","errorExample":""}]',
      'title' => '查询设备轨迹',
      'summary' => '分页查询微消息队列MQTT版客户端的设备轨迹。当设备的状态出现异常时，您可以通过该接口查询指定设备的连接历史，帮助您快速定位异常原因。',
      'description' => '- 每成功调用一次**QueryMqttTraceDevice**接口，都会计算为一次消息TPS，从而影响您的计费。计费详情，请参见[计费说明](~~52819~~)。
- 本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~163047~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '# 控制台操作
除了调用**QueryMqttTraceDevice**接口，您还可以通过微消息队列MQTT版控制台查看设备轨迹信息。具体操作，请参见[设备轨迹查询](~~140951~~)。',
    ),
    'QueryMqttTraceMessageOfClient' => 
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
          'name' => 'MqttRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例地域（Region）的ID。请参见[服务接入点](~~181438~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。您可以在控制台**实例详情**页面的**基础信息**区域查看。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'mqtt-cn-i7m26mf****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询消息列表的设备的Client ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test@@@producer',
          ),
        ),
        3 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围的起始时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854774807',
            'minimum' => '-9223372036854774808',
            'example' => '1618646400000',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围的终止时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854774807',
            'minimum' => '-9223372036854774808',
            'example' => '1621591200000',
          ),
        ),
        5 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前取第几页消息，从1开始递增。若输入参数大于总页数，则返回结果为空。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '-2147483648',
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询，每页最多显示的消息数量，最小1条，最多100条。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '-2147483648',
            'example' => '5',
          ),
        ),
        7 => 
        array (
          'name' => 'Reverse',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果是否倒序显示。取值说明如下：

- **true**：按照消息发送或消费时间倒序显示，最后一条发送或消费的消息显示在第一条，最早一条发送或消费的消息显示在最后一条。

- **false**：按照消息发送或消费时间顺序显示，最早一条发送或消费的消息显示在第一条，最后一条发送或消费的消息显示在最后一条。

若不输入，则返回结果默认按照消息发送或消费的时间顺序显示。',
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
              'CurrentPage' => 
              array (
                'description' => '当前位于第几页。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'B096B9D6-62F3-4567-BB59-58D1362E****',
              ),
              'PageSize' => 
              array (
                'description' => '每页最多显示的消息数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Total' => 
              array (
                'description' => '查询到的消息总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'MessageOfClientList' => 
              array (
                'description' => '返回的消息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Time' => 
                    array (
                      'description' => '消息发送的时间或被消费的时间。',
                      'type' => 'string',
                      'example' => '2021-05-21 15:08:19.234',
                    ),
                    'Action' => 
                    array (
                      'description' => '消息动作。取值说明如下：

- **pub_mqtt**：微消息队列MQTT版客户端发送消息。

- **sub**：微消息队列MQTT版客户端订阅消息。

- **push_offline**：服务端推送离线消息到微消息队列MQTT版客户端。
',
                      'type' => 'string',
                      'example' => 'pub_mqtt',
                    ),
                    'ActionCode' => 
                    array (
                      'description' => '消息动作的返回码。取值说明如下

- **mqtt.trace.action.msg.pub.mqtt**：消息动作取值为**pub_mqtt**时返回该参数值。

- **mqtt.trace.action.msg.sub**：消息动作取值为**sub**时返回该参数值。

- **mqtt.trace.action.msg.push.offline**：消息动作取值为**push_offline**时返回该参数值。
',
                      'type' => 'string',
                      'example' => 'mqtt.trace.action.msg.pub.mqtt',
                    ),
                    'ActionInfo' => 
                    array (
                      'description' => '消息动作的返回信息。取值说明如下：

- **Pub From Mqtt Client**：消息动作取值为**pub_mqtt**时返回该参数值。

- **Push To Mqtt Client**：消息动作取值为**sub**时返回该参数值。

- **Push Offline Msg To Mqtt Client**：消息动作取值为**push_offline**时返回该参数值。',
                      'type' => 'string',
                      'example' => 'Pub From Mqtt Client',
                    ),
                    'MsgId' => 
                    array (
                      'description' => '消息ID，即Message ID。',
                      'type' => 'string',
                      'example' => 'AC1EC0030EAB78308DB16A3EC773****',
                    ),
                    'ClientId' => 
                    array (
                      'description' => '设备的Client ID。',
                      'type' => 'string',
                      'example' => 'GID_test@@@producer',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"B096B9D6-62F3-4567-BB59-58D1362E****\\",\\n  \\"PageSize\\": 10,\\n  \\"Total\\": 5,\\n  \\"MessageOfClientList\\": [\\n    {\\n      \\"Time\\": \\"2021-05-21 15:08:19.234\\",\\n      \\"Action\\": \\"pub_mqtt\\",\\n      \\"ActionCode\\": \\"mqtt.trace.action.msg.pub.mqtt\\",\\n      \\"ActionInfo\\": \\"Pub From Mqtt Client\\",\\n      \\"MsgId\\": \\"AC1EC0030EAB78308DB16A3EC773****\\",\\n      \\"ClientId\\": \\"GID_test@@@producer\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryMqttTraceMessageOfClientResponse>\\n <RequestId>B096B9D6-62F3-4567-BB59-58D1362E****</RequestId>\\n <PageSize>10</PageSize>\\n <CurrentPage>1</CurrentPage>\\n <Total>5</Total>\\n <MessageOfClientList>\\n    <Action>pub_mqtt</Action>\\n    <ActionCode>mqtt.trace.action.msg.pub.mqtt</ActionCode>\\n    <ClientId>GID_test@@@producer</ClientId>\\n    <ActionInfo>Pub From Mqtt Client</ActionInfo>\\n    <Time>2021-05-21 15:08:19.210 </Time>\\n    <MsgId>AC1EC0030EAB78308DB16A3EC773****</MsgId>\\n </MessageOfClientList>\\n <MessageOfClientList>\\n    <Action>pub_mqtt</Action>\\n    <ActionCode>mqtt.trace.action.msg.pub.mqtt</ActionCode>\\n    <ClientId>GID_test@@@producer</ClientId>\\n    <ActionInfo>Pub From Mqtt Client</ActionInfo>\\n    <Time>2021-05-21 15:08:19.234 </Time>\\n    <MsgId>AC1EC0030EAB78308DB16A3EC78F****</MsgId>\\n </MessageOfClientList>\\n <MessageOfClientList>\\n    <Action>pub_mqtt</Action>\\n    <ActionCode>mqtt.trace.action.msg.pub.mqtt</ActionCode>\\n    <ClientId>GID_test@@@producer</ClientId>\\n    <ActionInfo>Pub From Mqtt Client</ActionInfo>\\n    <Time>2021-05-21 15:08:19.234 </Time>\\n    <MsgId>AC1EC0030EAB78308DB16A3EC78F****</MsgId>\\n </MessageOfClientList>\\n <MessageOfClientList>\\n    <Action>pub_mqtt</Action>\\n    <ActionCode>mqtt.trace.action.msg.pub.mqtt</ActionCode>\\n    <ClientId>GID_test@@@producer</ClientId>\\n    <ActionInfo>Pub From Mqtt Client</ActionInfo>\\n    <Time>2021-05-21 15:08:19.234 </Time>\\n    <MsgId>AC1EC0030EAB78308DB16A3EC78F****</MsgId>\\n </MessageOfClientList>\\n <MessageOfClientList>\\n    <Action>pub_mqtt</Action>\\n    <ActionCode>mqtt.trace.action.msg.pub.mqtt</ActionCode>\\n    <ClientId>GID_test@@@producer</ClientId>\\n    <ActionInfo>Pub From Mqtt Client</ActionInfo>\\n    <Time>2021-05-21 15:08:19.234 </Time>\\n    <MsgId>AC1EC0030EAB78308DB16A3EC78F****</MsgId>\\n </MessageOfClientList>\\n</QueryMqttTraceMessageOfClientResponse>","errorExample":""}]',
      'title' => '查询消息轨迹',
      'summary' => '查询指定设备在一定时间段内的消息列表。当消息的收发不符合预期时，您可以通过该接口查看消息的收发状态等轨迹信息，帮助您快速定位异常原因。',
      'description' => '- 每成功调用一次**QueryMqttTraceMessageOfClient**接口，都会计算为一次消息TPS，从而影响您的计费。计费详情，请参见[计费说明](~~52819~~)。
- 本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~163047~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '# 控制台操作
除了调用**QueryMqttTraceMessageOfClient**接口，您还可以通过微消息队列MQTT版控制台查看设备的消息列表。具体操作，请参见[消息轨迹查询](~~205708~~)。',
    ),
    'QueryMqttTraceMessagePublish' => 
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
          'name' => 'MqttRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例地域（Region）的ID。请参见[服务接入点](~~181438~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。您可以在控制台**实例详情**页面的**基础信息**区域查看。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'mqtt-cn-i7m26mf****',
          ),
        ),
        2 => 
        array (
          'name' => 'MsgId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息ID，即Message ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AC1EC0030EAB78308DB16A3EC773****',
          ),
        ),
        3 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围的起始时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854774807',
            'minimum' => '-9223372036854774808',
            'example' => '1618646400000',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围的终止时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854774807',
            'minimum' => '-9223372036854774808',
            'example' => '1621591200000',
          ),
        ),
      ),
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '69AD5550-BF22-438A-9202-A6E89185****',
              ),
              'MessageTraceLists' => 
              array (
                'description' => '返回的消息发送轨迹列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Time' => 
                    array (
                      'description' => '消息的发送时间。',
                      'type' => 'string',
                      'example' => '2021-05-21 15:08:19.210',
                    ),
                    'Action' => 
                    array (
                      'description' => '消息动作。取值说明如下：

- **pub_mqtt**：表示消息的发送者是云消息队列 MQTT 版客户端。

- **pub_mq**：表示消息的发送者是云消息队列 RocketMQ 版客户端。',
                      'type' => 'string',
                      'example' => 'pub_mqtt',
                    ),
                    'ActionCode' => 
                    array (
                      'description' => '消息动作的返回码。取值说明如下：

- **mqtt.trace.action.msg.pub.mqtt**：消息动作取值为**pub_mqtt**时返回该参数值。

- **mqtt.trace.action.msg.pub.mq**：消息动作取值为**pub_mq**时返回该参数值。',
                      'type' => 'string',
                      'example' => 'mqtt.trace.action.msg.pub.mqtt',
                    ),
                    'ActionInfo' => 
                    array (
                      'description' => '消息动作的说明信息。取值说明如下：

- **Pub From Mqtt Client**：消息动作取值为**pub_mqtt**时返回该参数值。

- **Pub From MQ**：消息动作取值为**pub_mq**时返回该参数值。',
                      'type' => 'string',
                      'example' => 'Pub From Mqtt Client',
                    ),
                    'MsgId' => 
                    array (
                      'description' => '消息ID，即Message ID。',
                      'type' => 'string',
                      'example' => 'AC1EC0030EAB78308DB16A3EC773BD95',
                    ),
                    'ClientId' => 
                    array (
                      'description' => '发送消息的客户端ID。',
                      'type' => 'string',
                      'example' => 'GID_test@@@producer',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"69AD5550-BF22-438A-9202-A6E89185****\\",\\n  \\"MessageTraceLists\\": [\\n    {\\n      \\"Time\\": \\"2021-05-21 15:08:19.210\\",\\n      \\"Action\\": \\"pub_mqtt\\",\\n      \\"ActionCode\\": \\"mqtt.trace.action.msg.pub.mqtt\\",\\n      \\"ActionInfo\\": \\"Pub From Mqtt Client\\",\\n      \\"MsgId\\": \\"AC1EC0030EAB78308DB16A3EC773BD95\\",\\n      \\"ClientId\\": \\"GID_test@@@producer\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryMqttTraceMessagePublishResponse>\\n  <MessageTraceLists>\\n    <Action>pub_mqtt</Action>\\n    <ActionCode>mqtt.trace.action.msg.pub.mqtt</ActionCode>\\n    <ClientId>GID_test@@@producer</ClientId>\\n    <Time>2021-05-21 15:08:19.210</Time>\\n    <ActionInfo>Pub From Mqtt Client</ActionInfo>\\n    <MsgId>AC1EC0030EAB78308DB16A3EC773****</MsgId>\\n  </MessageTraceLists>\\n  <RequestId>69AD5550-BF22-438A-9202-A6E89185****</RequestId>\\n</QueryMqttTraceMessagePublishResponse>","errorExample":""}]',
      'title' => '查询消息发送轨迹',
      'summary' => '查询指定消息的发送轨迹。当消息的收发不符合预期时，您可以通过该接口查看消息的发布时间、发布客户端等详细信息，帮助您快速定位异常原因。',
      'description' => '- 每成功调用一次**QueryMqttTraceMessagePublish**接口，都会计算为一次消息TPS，从而影响您的计费。计费详情，请参见[计费说明](~~52819~~)。
- 本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~163047~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '# 控制台操作
除了调用**QueryMqttTraceMessagePublish**接口，您还可以通过微消息队列MQTT版控制台查看消息的发送轨迹。具体操作，请参见[消息轨迹查询](~~205708~~)。',
    ),
    'QueryMqttTraceMessageSubscribe' => 
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
          'name' => 'MqttRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例地域（Region）的ID。请参见[服务接入点](~~181438~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的ID，一定要和客户端实际使用的实例ID匹配。您可以在控制台**实例详情**页面的**基础信息**区域查看。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'mqtt-cn-i7m26mf****',
          ),
        ),
        2 => 
        array (
          'name' => 'Reverse',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果是否倒序显示。取值说明如下：

- **true**：按照消息的投递时间倒序显示，最后一条消费的消息显示在第一条，最早一条消费的消息显示在最后一条。

- **false**：按照消息的投递时间顺序显示，最早一条消费的消息显示在第一条，最后一条消费的消息显示在最后一条。

若不输入，则返回结果默认按照消息的投递时间顺序显示。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => true,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定订阅消息的客户端ID。若不输入，则返回所有订阅该消息的客户端信息。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'GID_test@@@consumer',
          ),
        ),
        4 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围的起始时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854774807',
            'minimum' => '-9223372036854774808',
            'example' => '1621936800000',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围的终止时间戳。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854774807',
            'minimum' => '-9223372036854774808',
            'example' => '1618646400000',
          ),
        ),
        6 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前取第几页消息，从1开始递增。若输入参数大于总页数，则返回结果为空。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '-2147483648',
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询，每页最多显示的消息数量，最小1条，最多100条。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '-2147483648',
            'example' => '5',
          ),
        ),
        8 => 
        array (
          'name' => 'MsgId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息ID，即Message ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AC1EC1B33D5978308DB17F3245E4****',
            'maxLength' => 2147483647,
            'minLength' => 0,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'CurrentPage' => 
              array (
                'description' => '当前位于第几页。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '4E685844-ADAF-4D85-9EAC-F9471E8C****',
              ),
              'PageSize' => 
              array (
                'description' => '每页最多显示的消息数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'Total' => 
              array (
                'description' => '查询到的消息轨迹总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'MessageTraceLists' => 
              array (
                'description' => '返回的消息投递轨迹列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Time' => 
                    array (
                      'description' => '消息的投递时间。',
                      'type' => 'string',
                      'example' => '2021-05-25 16:46:41.274',
                    ),
                    'Action' => 
                    array (
                      'description' => '消息动作。取值说明如下：

- **sub**：微消息队列MQTT版客户端订阅消息。

- **push_offline**：服务端推送离线消息到微消息队列MQTT版客户端。',
                      'type' => 'string',
                      'example' => 'sub',
                    ),
                    'ActionCode' => 
                    array (
                      'description' => '消息动作的返回码。取值说明如下：

- **mqtt.trace.action.msg.sub**：消息动作取值为**sub**时返回该参数值。

- **mqtt.trace.action.msg.push.offline**：消息动作取值为**push_offline**时返回该参数值。',
                      'type' => 'string',
                      'example' => 'mqtt.trace.action.msg.sub',
                    ),
                    'ActionInfo' => 
                    array (
                      'description' => '消息动作的说明信息。取值说明如下：

- **Push To Mqtt Client**：消息动作取值为**sub**时返回该参数值。

- **Push Offline Msg To Mqtt Client**：消息动作取值为**push_offline**时返回该参数值。',
                      'type' => 'string',
                      'example' => 'Push To Mqtt Client',
                    ),
                    'MsgId' => 
                    array (
                      'description' => '消息ID，即Message ID。',
                      'type' => 'string',
                      'example' => 'AC1EC1B33D5978308DB17F3245E4****',
                    ),
                    'ClientId' => 
                    array (
                      'description' => '订阅消息的客户端ID。',
                      'type' => 'string',
                      'example' => 'GID_test@@@consumer',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemOverFlow',
            'errorMessage' => 'An error occurred while processing your request. Please try again.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"4E685844-ADAF-4D85-9EAC-F9471E8C****\\",\\n  \\"PageSize\\": 5,\\n  \\"Total\\": 2,\\n  \\"MessageTraceLists\\": [\\n    {\\n      \\"Time\\": \\"2021-05-25 16:46:41.274\\",\\n      \\"Action\\": \\"sub\\",\\n      \\"ActionCode\\": \\"mqtt.trace.action.msg.sub\\",\\n      \\"ActionInfo\\": \\"Push To Mqtt Client\\",\\n      \\"MsgId\\": \\"AC1EC1B33D5978308DB17F3245E4****\\",\\n      \\"ClientId\\": \\"GID_test@@@consumer\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryMqttTraceMessageSubscribeResponse>\\n  <MessageTraceLists>\\n    <Action>sub</Action>\\n    <ActionCode>mqtt.trace.action.msg.sub</ActionCode>\\n    <ClientId>GID_test@@@consumer</ClientId>\\n    <ActionInfo>Push To Mqtt Client</ActionInfo>\\n    <Time>2021-05-25 16:46:41.274 </Time>\\n    <MsgId>AC1EC1B33D5978308DB17F3245E4****</MsgId>\\n  </MessageTraceLists>\\n  <MessageTraceLists>\\n    <Action>sub</Action>\\n    <ActionCode>mqtt.trace.action.msg.sub</ActionCode>\\n    <ClientId>GID_test@@@consumer2</ClientId>\\n    <ActionInfo>Push To Mqtt Client</ActionInfo>\\n    <Time>2021-05-25 16:46:41.247 </Time>\\n    <MsgId>AC1EC1B33D5978308DB17F3245E4****</MsgId>\\n  </MessageTraceLists>\\n  <RequestId>4E685844-ADAF-4D85-9EAC-F9471E8C****</RequestId>\\n  <PageSize>5</PageSize>\\n  <CurrentPage>1</CurrentPage>\\n  <Total>2</Total>\\n</QueryMqttTraceMessageSubscribeResponse>","errorExample":""}]',
      'title' => '查询消息消费轨迹',
      'summary' => '查询指定消息的投递轨迹。当消息的收发不符合预期时，您可以通过该接口查看订阅该消息的客户端、消息的投递时间等详细信息，帮助您快速定位异常原因。',
      'description' => '- 每成功调用一次**QueryMqttTraceMessageSubscribe**接口，都会计算为一次消息TPS，从而影响您的计费。计费详情，请参见[计费说明](~~52819~~)。
- 本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。更多信息，请参见[QPS限制](~~163047~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '# 控制台操作
除了调用**QueryMqttTraceMessageSubscribe**接口，您还可以通过微消息队列MQTT版控制台查看消息的投递轨迹。具体操作，请参见[消息轨迹查询](~~205708~~)。',
    ),
    'RegisterCaCertificate' => 
    array (
      'summary' => '云消息队列 MQTT 版支持X.509证书认证，客户端可通过设备证书完成接入认证。CA证书用于为客户端签发设备证书，并验证设备证书的正确性，您需要先将申请的CA证书注册到云消息队列 MQTT 版的服务端上，才能用于认证设备证书。本接口用于将指定CA证书注册到云消息队列 MQTT 版服务端。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MqttInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版的实例ID。注册CA证书时，需要指定一个实例进行绑定。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-7mz2d******',
          ),
        ),
        1 => 
        array (
          'name' => 'CaName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待注册CA证书的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'mqtt_ca',
          ),
        ),
        2 => 
        array (
          'name' => 'CaContent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待注册CA证书的内容。

> 示例中的\\n表示换行。',
            'type' => 'string',
            'required' => true,
            'example' => '-----BEGIN CERTIFICATE-----\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\n-----END CERTIFICATE-----',
          ),
        ),
        3 => 
        array (
          'name' => 'VerificationContent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待注册CA证书的验证证书的内容。和CA证书的注册码一起使用，用于验证用户拥有该CA证书的私钥。
> 示例中的\\n表示换行。',
            'type' => 'string',
            'required' => true,
            'example' => '-----BEGIN CERTIFICATE-----\\nMIID/DCCAu+Y5sRMpp9tnd+4s******\\n-----END CERTIFICATE-----',
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'Sn' => 
              array (
                'description' => '已注册的CA证书的SN序列号，用于唯一标识一个CA证书。',
                'type' => 'string',
                'example' => '007269004887******',
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
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'RegisterCodeError',
            'errorMessage' => 'Register code error in verification certificate.',
          ),
          1 => 
          array (
            'errorCode' => 'RegisterCodeUsed',
            'errorMessage' => 'Register code has been used.',
          ),
          2 => 
          array (
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'GetCaNumError',
            'errorMessage' => 'Failed to get ca num. Try again later.',
          ),
          4 => 
          array (
            'errorCode' => 'CaNumExceed',
            'errorMessage' => 'CA certificate num exceed',
          ),
          5 => 
          array (
            'errorCode' => 'CertificateContentError',
            'errorMessage' => 'Certificate content error,  please check ca/verification certificate content. BasicConstraints extension should be set to true in CA certificate',
          ),
          6 => 
          array (
            'errorCode' => 'SnNotUnique',
            'errorMessage' => 'Sn is not unique in gloabal',
          ),
          7 => 
          array (
            'errorCode' => 'MqttOwnerCheckError',
            'errorMessage' => 'Failed to validate the instance permission',
          ),
          8 => 
          array (
            'errorCode' => 'MqttInstanceNotFound',
            'errorMessage' => 'Specified instance is not found',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"Sn\\": \\"007269004887******\\"\\n}","errorExample":""},{"type":"xml","example":"<RegisterCaCertificateResponse>\\n    <RequestId>020F6A43-19E6-4B6E-B846-44EB31DF****</RequestId>\\n    <Sn>007269004887******</Sn>\\n</RegisterCaCertificateResponse>","errorExample":""}]',
      'title' => '注册CA证书',
      'description' => '- 仅铂金版和专业版实例支持使用RegisterCaCertificate接口。
- 单用户请求频率限制为500次/秒。如有特殊需求，请联系云消息队列 MQTT 版技术支持，钉钉群号：35228338。',
      'extraInfo' => '### 控制台操作
除了调用RegisterCaCertificate接口，您还可以通过微消息队列MQTT版控制台注册CA证书。具体操作，请参见[CA证书管理](~~436873~~)。',
    ),
    'ActiveCaCertificate' => 
    array (
      'summary' => '云消息队列 MQTT 版支持X.509证书认证，客户端可通过设备证书完成接入认证。CA证书用于为客户端签发设备证书，并验证设备证书的正确性，需要在激活状态下使用。
CA证书注册后默认为激活状态，若您需要使用的CA证书被修改为未激活状态，您可以调用本接口将CA证书重新激活。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MqttInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书所绑定的实例ID，即云消息队列 MQTT 版的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-7mz2d******',
          ),
        ),
        1 => 
        array (
          'name' => 'Sn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待激活CA证书的SN序列号，用于唯一标识一个CA证书。

取值范围：不超过128 Byte。',
            'type' => 'string',
            'required' => true,
            'example' => '007269004887******',
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'Sn' => 
              array (
                'description' => '已激活CA证书的SN序列号，用于唯一标识一个CA证书。',
                'type' => 'string',
                'example' => '007269004887******',
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
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'FindCaBySnError',
            'errorMessage' => 'Failed to find the CA by the SN. Please check sn is valid.',
          ),
          2 => 
          array (
            'errorCode' => 'MqttOwnerCheckError',
            'errorMessage' => 'Failed to validate the instance permission',
          ),
          3 => 
          array (
            'errorCode' => 'MqttInstanceNotFound',
            'errorMessage' => 'Specified instance is not found',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"Sn\\": \\"007269004887******\\"\\n}","errorExample":""},{"type":"xml","example":"<ActiveCaCertificateResponse>\\n    <RequestId>020F6A43-19E6-4B6E-B846-44EB31DF****</RequestId>\\n    <Sn>007269004887******</Sn>\\n</ActiveCaCertificateResponse>","errorExample":""}]',
      'title' => '激活CA证书',
      'description' => '- 仅铂金版和专业版实例支持使用ActiveCaCertificate接口。
- 单用户请求频率限制为500次/秒。如有特殊需求，请联系云消息队列 MQTT 版技术支持，钉钉群号：35228338。
-  ActiveCaCertificate接口仅支持对已在云消息队列 MQTT 版服务端注册的CA证书进行操作，您可以通过[ListCaCertificate](~~436768~~)接口查询指定实例下已注册的CA证书。',
      'extraInfo' => '### 控制台操作
除了调用ActiveCaCertificate接口，您还可以通过微消息队列MQTT版控制台激活CA证书。具体操作，请参见[CA证书管理](~~436873~~)。',
    ),
    'InactivateCaCertificate' => 
    array (
      'summary' => '微消息队列MQTT版支持X.509证书认证，客户端可通过设备证书完成接入认证。CA证书用于为客户端签发设备证书，并验证设备证书的正确性。
若您暂时不需要使用某个CA证书，可通过本接口注销CA证书，将CA证书状态变成未激活。当您需要继续使用该CA证书时，可通过ActiveCaCertificate接口将CA证书重新激活。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MqttInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书所绑定的实例ID，即云消息队列 MQTT 版的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-7mz2d******',
          ),
        ),
        1 => 
        array (
          'name' => 'Sn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待注销CA证书的SN序列号，用于唯一标识一个CA证书。

取值范围：不超过128 Byte。',
            'type' => 'string',
            'required' => true,
            'example' => '007269004887******',
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'Sn' => 
              array (
                'description' => '已注销CA证书的SN序列号，用于唯一标识一个CA证书。',
                'type' => 'string',
                'example' => '007269004887******',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'FindCaBySnError',
            'errorMessage' => 'Failed to find the CA by the SN. Please check sn is valid.',
          ),
          2 => 
          array (
            'errorCode' => 'MqttOwnerCheckError',
            'errorMessage' => 'Failed to validate the instance permission',
          ),
          3 => 
          array (
            'errorCode' => 'MqttInstanceNotFound',
            'errorMessage' => 'Specified instance is not found',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"Sn\\": \\"007269004887******\\"\\n}","errorExample":""},{"type":"xml","example":"<InactivateCaCertificateResponse>\\n    <RequestId>020F6A43-19E6-4B6E-B846-44EB31DF****</RequestId>\\n    <Sn>007269004887******</Sn>\\n</InactivateCaCertificateResponse>","errorExample":""}]',
      'title' => '注销CA证书',
      'description' => '- 仅铂金版和专业版实例支持使用InactivateCaCertificate接口。
- 单用户请求频率限制为500次/秒。如有特殊需求，请联系微消息队列MQTT版技术支持，钉钉群号：35228338。
- InactivateCaCertificate接口仅支持对已在微消息队列MQTT版服务端注册的CA证书进行操作，您可以通过[ListCaCertificate](~~436768~~)接口查询指定实例下已注册的CA证书。',
      'extraInfo' => '### 控制台操作
除了调用InactivateCaCertificate接口，您还可以通过微消息队列MQTT版控制台注销指定的CA证书。具体操作，请参见[CA证书管理](~~436873~~)。',
    ),
    'ListCaCertificate' => 
    array (
      'summary' => '云消息队列 MQTT 版支持X.509证书认证，客户端可通过设备证书完成接入认证。CA证书用于为客户端签发设备证书，并验证设备证书的正确性。
本接口用于查询指定实例下所有注册的CA证书。',
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
          'name' => 'MqttInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版的实例ID，表示需要查看哪个实例下的所有CA证书。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-7mz2d******',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询第几页的返回结果。起始页从第1页开始计算。',
            'type' => 'string',
            'required' => true,
            'example' => '2',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页最多显示几条查询记录。

取值范围：1~100。',
            'type' => 'string',
            'required' => true,
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '查询结果最大页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageNo' => 
                  array (
                    'description' => '当前返回的查询记录是第几页。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的最大结果数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'CaCertificateVOS' => 
                  array (
                    'description' => 'CA证书的详细信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RegistrationCode' => 
                        array (
                          'description' => 'CA证书的注册码。',
                          'type' => 'string',
                          'example' => '13274673-8f90-4630-bea1-9cccb25756ad2089******',
                        ),
                        'CaName' => 
                        array (
                          'description' => 'CA证书的名称。',
                          'type' => 'string',
                          'example' => 'mqtt_ca',
                        ),
                        'Sn' => 
                        array (
                          'description' => 'CA证书的SN序列号。',
                          'type' => 'string',
                          'example' => '007269004887******',
                        ),
                        'CaContent' => 
                        array (
                          'description' => 'CA证书内容。
> \\n表示换行。',
                          'type' => 'string',
                          'example' => '-----BEGIN CERTIFICATE-----\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\n-----END CERTIFICATE-----',
                        ),
                        'VerificationContent' => 
                        array (
                          'description' => '验证证书内容。
> \\n表示换行。',
                          'type' => 'string',
                          'example' => '-----BEGIN CERTIFICATE-----\\nMIID/DCCAu+Y5sRMpp9tnd+4s******\\n-----END CERTIFICATE-----',
                        ),
                        'ValidBegin' => 
                        array (
                          'description' => 'CA证书生效的起始时间。格式为毫秒级别的Unix时间戳。',
                          'type' => 'string',
                          'example' => '1654137303000',
                        ),
                        'ValidEnd' => 
                        array (
                          'description' => 'CA证书生效的终止时间。格式为毫秒级别的Unix时间戳。',
                          'type' => 'string',
                          'example' => '1969497303000',
                        ),
                        'Status' => 
                        array (
                          'description' => 'CA证书的状态。取值如下：

- **0**：表示证书为未激活状态。
- **1**：表示证书为激活状态。

> CA证书注册后，默认为激活状态。',
                          'type' => 'string',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'MqttOwnerCheckError',
            'errorMessage' => 'Failed to validate the instance permission',
          ),
          2 => 
          array (
            'errorCode' => 'MqttInstanceNotFound',
            'errorMessage' => 'Specified instance is not found',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"Data\\": {\\n    \\"Total\\": 1,\\n    \\"PageNo\\": 2,\\n    \\"PageSize\\": 10,\\n    \\"CaCertificateVOS\\": [\\n      {\\n        \\"RegistrationCode\\": \\"13274673-8f90-4630-bea1-9cccb25756ad2089******\\",\\n        \\"CaName\\": \\"mqtt_ca\\",\\n        \\"Sn\\": \\"007269004887******\\",\\n        \\"CaContent\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\\\\\\\n-----END CERTIFICATE-----\\",\\n        \\"VerificationContent\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\nMIID/DCCAu+Y5sRMpp9tnd+4s******\\\\\\\\n-----END CERTIFICATE-----\\",\\n        \\"ValidBegin\\": \\"1654137303000\\",\\n        \\"ValidEnd\\": \\"1969497303000\\",\\n        \\"Status\\": \\"1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListCaCertificateResponse>\\n    <RequestId>020F6A43-19E6-4B6E-B846-44EB31DF****</RequestId>\\n    <Data>\\n        <Total>1</Total>\\n        <PageNo>2</PageNo>\\n        <PageSize>10</PageSize>\\n        <CaCertificateVOS>\\n            <RegistrationCode>13274673-8f90-4630-bea1-9cccb25756ad2089******</RegistrationCode>\\n            <CaName>mqtt_ca</CaName>\\n            <Sn>007269004887******</Sn>\\n            <CaContent>-----BEGIN CERTIFICATE-----\\\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\\\n-----END CERTIFICATE-----</CaContent>\\n            <VerificationContent>-----BEGIN CERTIFICATE-----\\\\nMIID/DCCAu+Y5sRMpp9tnd+4s******\\\\n-----END CERTIFICATE-----</VerificationContent>\\n            <ValidBegin>1654137303000</ValidBegin>\\n            <ValidEnd>1969497303000</ValidEnd>\\n            <Status>1</Status>\\n        </CaCertificateVOS>\\n    </Data>\\n</ListCaCertificateResponse>","errorExample":""}]',
      'title' => '查询CA证书列表',
      'description' => '- 仅铂金版和专业版实例支持使用ListCaCertificate接口。
- 单用户请求频率限制为500次/秒。如有特殊需求，请联系微消息队列MQTT版技术支持，钉钉群号：35228338。',
      'extraInfo' => '### 控制台操作
除了调用ListCaCertificate接口，您还可以通过微消息队列MQTT版控制台查看指定实例下所有已注册的CA证书。具体操作，请参见[CA证书管理](~~436873~~)。',
    ),
    'GetCaCertificate' => 
    array (
      'summary' => '云消息队列 MQTT 版支持X.509证书认证，客户端可通过设备证书完成接入认证。CA证书用于为客户端签发设备证书，并验证设备证书的正确性。
您可以调用本接口查询指定CA证书的证书内容以及激活状态等详细信息。',
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
          'name' => 'MqttInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书所绑定的实例ID，即云消息队列 MQTT 版的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-7mz2d******',
          ),
        ),
        1 => 
        array (
          'name' => 'Sn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询CA证书的SN序列号，用于唯一标识一个CA证书。',
            'type' => 'string',
            'required' => true,
            'example' => '007269004887******',
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'Data' => 
              array (
                'description' => '证书详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'RegistrationCode' => 
                  array (
                    'description' => 'CA证书的注册码。',
                    'type' => 'string',
                    'example' => '13274673-8f90-4630-bea1-9cccb25756ad2089******',
                  ),
                  'CaName' => 
                  array (
                    'description' => 'CA证书的名称。',
                    'type' => 'string',
                    'example' => 'mqtt_ca',
                  ),
                  'Sn' => 
                  array (
                    'description' => 'CA证书的SN序列号，用于唯一标识一个CA证书。

取值范围：不超过128 Byte。',
                    'type' => 'string',
                    'example' => '00f26900ba87******',
                  ),
                  'CaContent' => 
                  array (
                    'description' => 'CA证书内容。

> \\n表示换行。',
                    'type' => 'string',
                    'example' => '-----BEGIN CERTIFICATE-----\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\n-----END CERTIFICATE-----',
                  ),
                  'VerificationContent' => 
                  array (
                    'description' => '验证证书内容。
> \\n表示换行。',
                    'type' => 'string',
                    'example' => '-----BEGIN CERTIFICATE-----\\nMIID/DCCAu+Y5sRMpp9tnd+4s******\\n-----END CERTIFICATE-----',
                  ),
                  'ValidBegin' => 
                  array (
                    'description' => 'CA证书生效的起始时间。格式为毫秒级别的Unix时间戳。',
                    'type' => 'string',
                    'example' => '1654137303000',
                  ),
                  'ValidEnd' => 
                  array (
                    'description' => 'CA证书生效的终止时间。格式为毫秒级别的Unix时间戳。',
                    'type' => 'string',
                    'example' => '1969497303000',
                  ),
                  'Status' => 
                  array (
                    'description' => 'CA证书的状态。取值如下：

- **0**：表示证书为未激活状态。

- **1**：表示证书为激活状态。

> CA证书注册后，默认为激活状态。',
                    'type' => 'string',
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
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'FindCaBySnError',
            'errorMessage' => 'Failed to find the CA by the SN. Please check sn is valid.',
          ),
          2 => 
          array (
            'errorCode' => 'MqttOwnerCheckError',
            'errorMessage' => 'Failed to validate the instance permission',
          ),
          3 => 
          array (
            'errorCode' => 'MqttInstanceNotFound',
            'errorMessage' => 'Specified instance is not found',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"Data\\": {\\n    \\"RegistrationCode\\": \\"13274673-8f90-4630-bea1-9cccb25756ad2089******\\",\\n    \\"CaName\\": \\"mqtt_ca\\",\\n    \\"Sn\\": \\"00f26900ba87******\\",\\n    \\"CaContent\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\\\\\\\n-----END CERTIFICATE-----\\",\\n    \\"VerificationContent\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\nMIID/DCCAu+Y5sRMpp9tnd+4s******\\\\\\\\n-----END CERTIFICATE-----\\",\\n    \\"ValidBegin\\": \\"1654137303000\\",\\n    \\"ValidEnd\\": \\"1969497303000\\",\\n    \\"Status\\": \\"1\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetCaCertificateResponse>\\n    <RequestId>020F6A43-19E6-4B6E-B846-44EB31DF****</RequestId>\\n    <Data>\\n        <RegistrationCode>13274673-8f90-4630-bea1-9cccb25756ad2089******</RegistrationCode>\\n        <CaName>mqtt_ca</CaName>\\n        <Sn>00f26900ba87******</Sn>\\n        <CaContent>-----BEGIN CERTIFICATE-----\\\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\\\n-----END CERTIFICATE-----</CaContent>\\n        <VerificationContent>-----BEGIN CERTIFICATE-----\\\\nMIID/DCCAu+Y5sRMpp9tnd+4s******\\\\n-----END CERTIFICATE-----</VerificationContent>\\n        <ValidBegin>1654137303000</ValidBegin>\\n        <ValidEnd>1969497303000</ValidEnd>\\n        <Status>1</Status>\\n    </Data>\\n</GetCaCertificateResponse>","errorExample":""}]',
      'title' => '获取CA证书详情',
      'description' => '- 仅铂金版和专业版实例支持使用GetCaCertificate接口。
- 单用户请求频率限制为500次/秒。如有特殊需求，请联系云消息队列 MQTT 版技术支持，钉钉群号：35228338。',
      'extraInfo' => '### 控制台操作
除了调用GetCaCertificate接口，您还可以通过微消息队列MQTT版控制台查看指定的CA证书。具体操作，请参见[CA证书管理](~~436873~~)。',
    ),
    'GetRegisterCode' => 
    array (
      'summary' => '注册CA证书到云消息队列 MQTT 版服务端时，需要上传CA证书的验证证</span>书，用于验证用户是否有该CA证书的私钥。CA证书的验证证书需要通过CA证书的注册码生成，本接口用于获取指定CA证书的注册码。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MqttInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-7mz2d******',
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'RegisterCode' => 
              array (
                'title' => '注册码',
                'description' => '返回的CA证书的注册码。',
                'type' => 'string',
                'example' => '13274673-8f90-4630-bea1-9cccb25756ad2089******',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'MqttInstanceNotFound',
            'errorMessage' => 'Specified instance is not found',
          ),
          2 => 
          array (
            'errorCode' => 'MqttOwnerCheckError',
            'errorMessage' => 'Failed to validate the instance permission',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"RegisterCode\\": \\"13274673-8f90-4630-bea1-9cccb25756ad2089******\\"\\n}","errorExample":""},{"type":"xml","example":"<GetRegisterCodeResponse>\\n    <RequestId>020F6A43-19E6-4B6E-B846-44EB31DF****</RequestId>\\n    <RegisterCode>13274673-8f90-4630-bea1-9cccb25756ad2089******</RegisterCode>\\n</GetRegisterCodeResponse>","errorExample":""}]',
      'title' => '获取CA证书注册码',
      'description' => '- 仅铂金版和专业版实例支持使用GetRegisterCode接口。
- 单用户请求频率限制为500次/秒。如有特殊需求，请联系云消息队列 MQTT 版技术支持，钉钉群号：35228338。',
    ),
    'DeleteCaCertificate' => 
    array (
      'summary' => '云消息队列 MQTT 版支持X.509证书认证，客户端可通过设备证书完成接入认证。CA证书用于为客户端签发设备证书，并验证设备证书的正确性。
使用CA证书需要先将证书注册到云消息队列 MQTT 版服务端，若您不再需要使用某个CA证书，您可以调用DeleteCaCertificate接口将该证书从服务端记录中删除。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MqttInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书所绑定的实例ID，即云消息队列 MQTT 版的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-7mz2d******',
          ),
        ),
        1 => 
        array (
          'name' => 'Sn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除CA证书的SN序列号，用于唯一标识一个CA证书。

取值范围：不超过128 Byte。',
            'type' => 'string',
            'required' => true,
            'example' => '007269004887******',
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'Sn' => 
              array (
                'description' => '已删除CA证书的SN序列号，用于唯一标识一个CA证书。',
                'type' => 'string',
                'example' => '007269004887******',
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
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'FindCaBySnError',
            'errorMessage' => 'Failed to find the CA by the SN. Please check sn is valid.',
          ),
          2 => 
          array (
            'errorCode' => 'MqttOwnerCheckError',
            'errorMessage' => 'Failed to validate the instance permission',
          ),
          3 => 
          array (
            'errorCode' => 'MqttInstanceNotFound',
            'errorMessage' => 'Specified instance is not found',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"Sn\\": \\"007269004887******\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteCaCertificateResponse>\\n    <RequestId>020F6A43-19E6-4B6E-B846-44EB31DF****</RequestId>\\n    <Sn>007269004887******</Sn>\\n</DeleteCaCertificateResponse>","errorExample":""}]',
      'title' => '删除CA证书',
      'description' => '- 仅铂金版和专业版实例支持使用DeleteCaCertificate接口。
- 单用户请求频率限制为500次/秒。如有特殊需求，请联系云消息队列 MQTT 版技术支持，钉钉群号：35228338。
- DeleteCaCertificate接口仅支持对已在云消息队列 MQTT 版服务端注册的CA证书进行操作，您可以通过[ListCaCertificate](~~436768~~)接口查询指定实例下已注册的CA证书。
- 删除指定CA证书，由该CA证书签发的且已在云消息队列 MQTT 版服务端注册的所有设备证书也将被自动删除。',
      'extraInfo' => '### 控制台操作
除了调用DeleteCaCertificate接口，您还可以通过微消息队列MQTT版控制台删除CA证书。具体操作，请参见[CA证书管理](~~436873~~)。',
    ),
    'ActiveDeviceCertificate' => 
    array (
      'summary' => '设备证书是由CA根证书签发给客户端设备使用的数字证书，用于客户端和服务端连接时，服务端对客户端进行安全认证。
客户端设备使用设备证书进行接入认证时，服务端会根据已注册的CA证书验证设备证书是否正确，若CA证书和设备证书匹配成功，则客户端认证通过，且系统会将该设备证书自动注册到服务端中。 
设备证书在服务端注册后默认为激活状态，若您需要使用的设备证书被修改为未激活状态，您可以调用本接口将设备证书重新激活。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MqttInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备证书所绑定的实例ID，即微消息队列MQTT版的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-7mz2d******',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceSn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待激活设备证书的SN序列号，用于唯一标识一个设备证书。',
            'type' => 'string',
            'required' => true,
            'example' => '356217374433******',
          ),
        ),
        2 => 
        array (
          'name' => 'CaSn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待激活设备证书所属的CA证书的SN序列号，用于唯一标识一个CA证书。

取值范围：不超过128 Byte。',
            'type' => 'string',
            'required' => true,
            'example' => '007269004887******',
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'DeviceSn' => 
              array (
                'description' => '已激活设备证书的SN序列号，用于唯一标识一个设备证书。',
                'type' => 'string',
                'example' => '356217374433******',
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
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'FindDeviceBySnError',
            'errorMessage' => 'Failed to find the device certificate by the SN. Please check sn is valid',
          ),
          2 => 
          array (
            'errorCode' => 'MqttInstanceNotFound',
            'errorMessage' => 'Specified instance is not found',
          ),
          3 => 
          array (
            'errorCode' => 'MqttOwnerCheckError',
            'errorMessage' => 'Failed to validate the instance permission',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"DeviceSn\\": \\"356217374433******\\"\\n}","errorExample":""},{"type":"xml","example":"<ActiveDeviceCertificateResponse>\\n    <RequestId>020F6A43-19E6-4B6E-B846-44EB31DF****</RequestId>\\n    <DeviceSn>356217374433******</DeviceSn>\\n</ActiveDeviceCertificateResponse>","errorExample":""}]',
      'title' => '激活设备证书',
      'description' => '- 仅铂金版和专业版实例支持使用ActiveDeviceCertificate接口。
- 单用户请求频率限制为500次/秒。如有特殊需求，请联系微消息队列MQTT版技术支持，钉钉群号：35228338。',
      'extraInfo' => '### 控制台操作
除了调用ActiveDeviceCertificate接口，您还可以通过微消息队列MQTT版控制台激活设备证书。具体操作，请参见[设备证书管理](~~449435~~) 。',
    ),
    'InactivateDeviceCertificate' => 
    array (
      'summary' => '设备证书是由CA根证书签发给客户端设备使用的数字证书，用于客户端和服务端连接时，服务端对客户端进行安全认证。认证通过后服务端和客户端可基于证书内的加密密钥进行安全通信，若认证不通过则服务端拒绝客户端接入。
若您暂时不需要使用某个设备证书，可通过该接口注销设备证书，将设备证书状态变成未激活。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MqttInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备证书所绑定的实例ID，即云消息队列 MQTT 版的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-7mz2d******',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceSn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待注销设备证书的SN序列号，用于唯一标识一个设备证书。',
            'type' => 'string',
            'required' => true,
            'example' => '356217374433******',
          ),
        ),
        2 => 
        array (
          'name' => 'CaSn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待注销设备证书所属的CA证书的SN序列号，用于唯一标识一个CA证书。

取值范围：不超过128 Byte。',
            'type' => 'string',
            'required' => true,
            'example' => '007269004887******',
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'DeviceSn' => 
              array (
                'description' => '已注销设备证书的SN序列号，用于唯一标识一个设备证书。',
                'type' => 'string',
                'example' => '356217374433******',
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
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'FindDeviceBySnError',
            'errorMessage' => 'Failed to find the device certificate by the SN. Please check sn is valid',
          ),
          2 => 
          array (
            'errorCode' => 'MqttInstanceNotFound',
            'errorMessage' => 'Specified instance is not found',
          ),
          3 => 
          array (
            'errorCode' => 'MqttOwnerCheckError',
            'errorMessage' => 'Failed to validate the instance permission',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"DeviceSn\\": \\"356217374433******\\"\\n}","errorExample":""},{"type":"xml","example":"<InactivateDeviceCertificateResponse>\\n    <RequestId>020F6A43-19E6-4B6E-B846-44EB31DF****</RequestId>\\n    <DeviceSn>356217374433******</DeviceSn>\\n</InactivateDeviceCertificateResponse>","errorExample":""}]',
      'title' => ' 注销设备证书',
      'description' => '- 仅铂金版和专业版实例支持使用 InactivateDeviceCertificate接口。
- 单用户请求频率限制为500次/秒。如有特殊需求，请联系云消息队列 MQTT 版技术支持，钉钉群号：35228338。',
      'extraInfo' => '### 控制台操作
除了调用InactivateDeviceCertificate接口，您还可以通过微消息队列MQTT版控制台注销设备证书。具体操作，请参见[设备证书管理](~~449435~~) 。',
    ),
    'ListDeviceCertificate' => 
    array (
      'summary' => '设备证书是由CA根证书签发给客户端设备使用的数字证书，用于客户端和服务端连接时，服务端对客户端进行安全认证。认证通过后服务端和客户端可基于证书内的加密密钥进行安全通信，若认证不通过则服务端拒绝客户端接入。
本接口用于查询指定实例下所有注册的设备证书。',
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
          'name' => 'MqttInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版的实例ID，表示需要查看哪个实例下的所有设备证书。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-7mz2d******',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询第几页的返回结果。起始页从第1页开始计算。',
            'type' => 'string',
            'required' => true,
            'example' => '2',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页最多显示几条查询记录。

取值范围：1~100。',
            'type' => 'string',
            'required' => true,
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '查询结果最大页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageNo' => 
                  array (
                    'description' => '当前返回的查询记录是第几页。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的最大结果数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'DeviceCertificateVOS' => 
                  array (
                    'description' => '设备证书的详细信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ValidBegin' => 
                        array (
                          'description' => '设备证书生效的起始时间。格式为毫秒级别的Unix时间戳。',
                          'type' => 'string',
                          'example' => '1654137303000',
                        ),
                        'ValidEnd' => 
                        array (
                          'description' => '设备证书生效的终止时间。格式为毫秒级别的Unix时间戳。',
                          'type' => 'string',
                          'example' => '1969497303000',
                        ),
                        'DeviceSn' => 
                        array (
                          'description' => '设备证书的SN序列号，用于唯一标识一个设备证书。',
                          'type' => 'string',
                          'example' => '356217374433******',
                        ),
                        'DeviceContent' => 
                        array (
                          'description' => '设备证书的内容。

\\n表示换行。',
                          'type' => 'string',
                          'example' => '-----BEGIN DEVICECERTIFICATE-----\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\n-----END DEVICECERTIFICATE-----',
                        ),
                        'Status' => 
                        array (
                          'description' => '设备证书的状态。取值如下：

- 0：表示证书为未激活状态。

- 1：表示证书为激活状态。

设备证书注册后，默认为激活状态。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'CaSn' => 
                        array (
                          'description' => '设备证书所属的CA证书的SN序列号，用于唯一标识一个CA证书。',
                          'type' => 'string',
                          'example' => '00f26900ba87******',
                        ),
                        'DeviceName' => 
                        array (
                          'description' => '设备证书的名称。',
                          'type' => 'string',
                          'example' => 'mqtt_device',
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
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'FindDeviceBySnError',
            'errorMessage' => 'Failed to find the device certificate by the SN. Please check sn is valid',
          ),
          2 => 
          array (
            'errorCode' => 'MqttInstanceNotFound',
            'errorMessage' => 'Specified instance is not found',
          ),
          3 => 
          array (
            'errorCode' => 'MqttOwnerCheckError',
            'errorMessage' => 'Failed to validate the instance permission',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"Data\\": {\\n    \\"Total\\": 1,\\n    \\"PageNo\\": 2,\\n    \\"PageSize\\": 10,\\n    \\"DeviceCertificateVOS\\": [\\n      {\\n        \\"ValidBegin\\": \\"1654137303000\\",\\n        \\"ValidEnd\\": \\"1969497303000\\",\\n        \\"DeviceSn\\": \\"356217374433******\\",\\n        \\"DeviceContent\\": \\"-----BEGIN DEVICECERTIFICATE-----\\\\\\\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\\\\\\\n-----END DEVICECERTIFICATE-----\\",\\n        \\"Status\\": \\"1\\",\\n        \\"CaSn\\": \\"00f26900ba87******\\",\\n        \\"DeviceName\\": \\"mqtt_device\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDeviceCertificateResponse>\\n    <RequestId>020F6A43-19E6-4B6E-B846-44EB31DF****</RequestId>\\n    <Data>\\n        <Total>1</Total>\\n        <PageNo>2</PageNo>\\n        <PageSize>10</PageSize>\\n        <DeviceCertificateVOS>\\n            <ValidBegin>1654137303000</ValidBegin>\\n            <ValidEnd>1969497303000</ValidEnd>\\n            <DeviceSn>356217374433******</DeviceSn>\\n            <DeviceContent>-----BEGIN DEVICECERTIFICATE-----\\\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\\\n-----END DEVICECERTIFICATE-----</DeviceContent>\\n            <Status>1</Status>\\n            <CaSn>00f26900ba87******</CaSn>\\n            <DeviceName>mqtt_device</DeviceName>\\n        </DeviceCertificateVOS>\\n    </Data>\\n</ListDeviceCertificateResponse>","errorExample":""}]',
      'title' => '查询设备证书列表',
      'description' => '- 仅铂金版和专业版实例支持使用ListDeviceCertificate接口。
- 单用户请求频率限制为500次/秒。如有特殊需求，请联系云消息队列 MQTT 版技术支持，钉钉群号：35228338。',
      'extraInfo' => '### 控制台操作
除了调用ListDeviceCertificate接口，您还可以通过微消息队列MQTT版控制台查看指定实例下所有注册的设备证书。具体操作，请参见[设备证书管理](~~449435~~)。',
    ),
    'ListDeviceCertificateByCaSn' => 
    array (
      'summary' => '设备证书是由CA根证书签发给客户端设备使用的数字证书，用于客户端和服务端连接时，服务端对客户端进行安全认证。认证通过后服务端和客户端可基于证书内的加密密钥进行安全通信，若认证不通过则服务端拒绝客户端接入。
本接口用于查询由指定CA证书签发且已在微消息队列MQTT版服务端注册的所有设备证书。',
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
          'name' => 'MqttInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CA证书所绑定的实例ID，即云消息队列 MQTT 版的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-7mz2d******',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询第几页的返回结果。起始页从第1页开始计算。',
            'type' => 'string',
            'required' => true,
            'example' => '2',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页最多显示几条查询记录。

取值范围：1~100。',
            'type' => 'string',
            'required' => true,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'CaSn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询CA证书的SN序列码，表示查询哪一个CA证书下所有已注册的设备证书。',
            'type' => 'string',
            'required' => true,
            'example' => '007269004887******',
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '查询结果总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageNo' => 
                  array (
                    'description' => '当前返回的查询记录是第几页。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页显示的最大结果数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'DeviceCertificateVOS' => 
                  array (
                    'description' => '设备证书的详细信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ValidBegin' => 
                        array (
                          'description' => '设备证书生效的起始时间。格式为毫秒级别的Unix时间戳。',
                          'type' => 'string',
                          'example' => '1654137303000',
                        ),
                        'ValidEnd' => 
                        array (
                          'description' => '设备证书生效的终止时间。格式为毫秒级别的Unix时间戳。',
                          'type' => 'string',
                          'example' => '1969497303000',
                        ),
                        'DeviceSn' => 
                        array (
                          'description' => '设备证书的SN序列号，用于唯一标识一个设备证书。',
                          'type' => 'string',
                          'example' => '356217374433******',
                        ),
                        'DeviceContent' => 
                        array (
                          'description' => '设备证书的内容。

\\n表示换行。',
                          'type' => 'string',
                          'example' => '-----BEGIN DEVICECERTIFICATE-----\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\n-----END DEVICECERTIFICATE-----',
                        ),
                        'Status' => 
                        array (
                          'description' => '设备证书的状态。取值如下：

- 0：表示证书为未激活状态。

- 1：表示证书为激活状态。

设备证书注册后，默认为激活状态。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'CaSn' => 
                        array (
                          'description' => '设备证书所属的CA证书的SN序列号，用于唯一标识一个CA证书。',
                          'type' => 'string',
                          'example' => '00f26900ba87******',
                        ),
                        'DeviceName' => 
                        array (
                          'description' => '设备证书的名称。',
                          'type' => 'string',
                          'example' => 'mqtt_device',
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
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'FindDeviceBySnError',
            'errorMessage' => 'Failed to find the device certificate by the SN. Please check sn is valid',
          ),
          2 => 
          array (
            'errorCode' => 'MqttInstanceNotFound',
            'errorMessage' => 'Specified instance is not found',
          ),
          3 => 
          array (
            'errorCode' => 'MqttOwnerCheckError',
            'errorMessage' => 'Failed to validate the instance permission',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"Data\\": {\\n    \\"Total\\": 1,\\n    \\"PageNo\\": 2,\\n    \\"PageSize\\": 10,\\n    \\"DeviceCertificateVOS\\": [\\n      {\\n        \\"ValidBegin\\": \\"1654137303000\\",\\n        \\"ValidEnd\\": \\"1969497303000\\",\\n        \\"DeviceSn\\": \\"356217374433******\\",\\n        \\"DeviceContent\\": \\"-----BEGIN DEVICECERTIFICATE-----\\\\\\\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\\\\\\\n-----END DEVICECERTIFICATE-----\\",\\n        \\"Status\\": \\"1\\",\\n        \\"CaSn\\": \\"00f26900ba87******\\",\\n        \\"DeviceName\\": \\"mqtt_device\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDeviceCertificateByCaSnResponse>\\n    <RequestId>020F6A43-19E6-4B6E-B846-44EB31DF****</RequestId>\\n    <Data>\\n        <Total>1</Total>\\n        <PageNo>2</PageNo>\\n        <PageSize>10</PageSize>\\n        <DeviceCertificateVOS>\\n            <ValidBegin>1654137303000</ValidBegin>\\n            <ValidEnd>1969497303000</ValidEnd>\\n            <DeviceSn>356217374433******</DeviceSn>\\n            <DeviceContent>-----BEGIN DEVICECERTIFICATE-----\\\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\\\n-----END DEVICECERTIFICATE-----</DeviceContent>\\n            <Status>1</Status>\\n            <CaSn>00f26900ba87******</CaSn>\\n            <DeviceName>mqtt_device</DeviceName>\\n        </DeviceCertificateVOS>\\n    </Data>\\n</ListDeviceCertificateByCaSnResponse>","errorExample":""}]',
      'title' => '查询CA证书下设备证书',
      'description' => '- 仅铂金版和专业版实例支持使用ListDeviceCertificateByCaSn接口。
- 单用户请求频率限制为500次/秒。如有特殊需求，请联系云消息队列 MQTT 版技术支持，钉钉群号：35228338。',
      'extraInfo' => '### 控制台操作
除了调用ListDeviceCertificateByCaSn接口，您还可以通过微消息队列MQTT版控制台查看指定CA证书下所有已注册的设备证书。具体操作，请参见[设备证书管理](~~449435~~)。',
    ),
    'GetDeviceCertificate' => 
    array (
      'summary' => '设备证书是由CA根证书签发给客户端设备使用的数字证书，用于客户端和服务端连接时，服务端对客户端进行安全认证。认证通过后服务端和客户端可基于证书内的加密密钥进行安全通信，若认证不通过则服务端拒绝客户端接入。
您可以调用本接口获取设备证书的详细信息。',
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
          'name' => 'MqttInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备证书所绑定的实例ID，即云消息队列 MQTT 版的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-7mz2d******',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceSn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询设备证书的SN序列号，用于唯一标识一个设备证书。

取值范围：不超过128 Byte。',
            'type' => 'string',
            'required' => true,
            'example' => '356217374433******',
          ),
        ),
        2 => 
        array (
          'name' => 'CaSn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询设备证书所属的CA证书的SN序列号，用于唯一标识一个CA证书。

取值范围：不超过128 Byte。',
            'type' => 'string',
            'required' => true,
            'example' => '007269004887******',
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'Data' => 
              array (
                'description' => '证书详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ValidBegin' => 
                  array (
                    'description' => '设备证书生效的起始时间。格式为毫秒级别的Unix时间戳。',
                    'type' => 'string',
                    'example' => '1654137303000',
                  ),
                  'ValidEnd' => 
                  array (
                    'description' => '设备证书生效的终止时间。格式为毫秒级别的Unix时间戳。',
                    'type' => 'string',
                    'example' => '1969497303000',
                  ),
                  'DeviceSn' => 
                  array (
                    'description' => '设备证书的SN序列号，用于唯一标识一个设备证书。',
                    'type' => 'string',
                    'example' => '356217374433******',
                  ),
                  'DeviceName' => 
                  array (
                    'description' => '设备证书的名称。',
                    'type' => 'string',
                    'example' => 'mqtt_device',
                  ),
                  'DeviceContent' => 
                  array (
                    'description' => '设备证书的内容。

\\n表示换行。',
                    'type' => 'string',
                    'example' => '-----BEGIN DEVICECERTIFICATE-----\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\n-----END DEVICECERTIFICATE-----',
                  ),
                  'CaSn' => 
                  array (
                    'description' => '设备证书所属的CA证书的SN序列号，用于唯一标识一个CA证书。',
                    'type' => 'string',
                    'example' => '00f26900ba87******',
                  ),
                  'Status' => 
                  array (
                    'description' => '设备证书的状态。取值如下：

- **0**：表示证书为未激活状态。

- **1**：表示证书为激活状态。

> 设备证书注册后，默认为激活状态。',
                    'type' => 'string',
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
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'FindDeviceBySnError',
            'errorMessage' => 'Failed to find the device certificate by the SN. Please check sn is valid',
          ),
          2 => 
          array (
            'errorCode' => 'MqttInstanceNotFound',
            'errorMessage' => 'Specified instance is not found',
          ),
          3 => 
          array (
            'errorCode' => 'MqttOwnerCheckError',
            'errorMessage' => 'Failed to validate the instance permission',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"Data\\": {\\n    \\"ValidBegin\\": \\"1654137303000\\",\\n    \\"ValidEnd\\": \\"1969497303000\\",\\n    \\"DeviceSn\\": \\"356217374433******\\",\\n    \\"DeviceName\\": \\"mqtt_device\\",\\n    \\"DeviceContent\\": \\"-----BEGIN DEVICECERTIFICATE-----\\\\\\\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\\\\\\\n-----END DEVICECERTIFICATE-----\\",\\n    \\"CaSn\\": \\"00f26900ba87******\\",\\n    \\"Status\\": \\"1\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDeviceCertificateResponse>\\n    <RequestId>020F6A43-19E6-4B6E-B846-44EB31DF****</RequestId>\\n    <Data>\\n        <ValidBegin>1654137303000</ValidBegin>\\n        <ValidEnd>1969497303000</ValidEnd>\\n        <DeviceSn>356217374433******</DeviceSn>\\n        <DeviceName>mqtt_device</DeviceName>\\n        <DeviceContent>-----BEGIN DEVICECERTIFICATE-----\\\\nMIIDuzCCAqdGVzdC5jbi1xaW5n******\\\\n-----END DEVICECERTIFICATE-----</DeviceContent>\\n        <CaSn>00f26900ba87******</CaSn>\\n        <Status>1</Status>\\n    </Data>\\n</GetDeviceCertificateResponse>","errorExample":""}]',
      'title' => '获取设备证书详情',
      'description' => '- 仅铂金版实例支持使用GetDeviceCertificate接口。
- 单用户请求频率限制为500次/秒。如有特殊需求，请联系云消息队列 MQTT 版技术支持，钉钉群号：35228338。',
      'extraInfo' => '### 控制台操作
除了调用GetDeviceCertificate接口，您还可以通过微消息队列MQTT版控制台查看指定设备证书的详细信息。具体操作，请参见[CA证书管理](~~436873~~)。',
    ),
    'DeleteDeviceCertificate' => 
    array (
      'summary' => '设备证书是由CA根证书签发给客户端设备使用的数字证书，用于客户端和服务端连接时，服务端对客户端进行安全认证。认证通过后服务端和客户端可基于证书内的加密密钥进行安全通信，若认证不通过则服务端拒绝客户端接入。
若您不想需要使用某个设备证书，您可以调用本接口将指定设备证书的注册信息从服务端的存储记录中删除。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MqttInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备证书所绑定的实例ID，即云消息队列 MQTT 版的实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-7mz2d******',
          ),
        ),
        1 => 
        array (
          'name' => 'DeviceSn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除设备证书的SN序列号，用于唯一标识一个设备证书。

取值范围：不超过128 Byte。',
            'type' => 'string',
            'required' => true,
            'example' => '356217374433****',
          ),
        ),
        2 => 
        array (
          'name' => 'CaSn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备证书所属的CA证书的序列号，用于唯一标识一个CA证书。CA证书用于验证设备证书的正确性。

取值范围：不超过128 Byte。
',
            'type' => 'string',
            'required' => true,
            'example' => '007269004887******',
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'DeviceSn' => 
              array (
                'description' => '已删除设备证书的SN序列号，用于唯一标识一个设备证书。',
                'type' => 'string',
                'example' => '356217374433******',
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
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'ParameterFieldCheckFailed',
            'errorMessage' => 'Failed to validate the parameters. The parameters may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'FindDeviceBySnError',
            'errorMessage' => 'Failed to find the device certificate by the SN. Please check sn is valid',
          ),
          2 => 
          array (
            'errorCode' => 'MqttInstanceNotFound',
            'errorMessage' => 'Specified instance is not found',
          ),
          3 => 
          array (
            'errorCode' => 'MqttOwnerCheckError',
            'errorMessage' => 'Failed to validate the instance permission',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"DeviceSn\\": \\"356217374433******\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDeviceCertificateResponse>\\n    <RequestId>020F6A43-19E6-4B6E-B846-44EB31DF****</RequestId>\\n    <DeviceSn>356217374433******</DeviceSn>\\n</DeleteDeviceCertificateResponse>","errorExample":""}]',
      'title' => '删除设备证书',
      'description' => '- 仅铂金版和专业版实例支持使用DeleteDeviceCertificate接口。
- 单用户请求频率限制为500次/秒。如有特殊需求，请联系云消息队列 MQTT 版技术支持，钉钉群号：35228338。',
      'extraInfo' => '### 控制台操作
除了调用DeleteDeviceCertificate接口，您还可以通过微消息队列MQTT版控制台删除设备证书。具体操作，请参见[设备证书管理](~~449435~~)。',
    ),
    'AddCustomAuthIdentity' => 
    array (
      'summary' => '添加账号身份认证信息，可以具体到客户端。',
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'create',
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的 ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'mqtt-cn-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Username',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户名，不超过64位',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'Secret',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '密钥。',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'IdentityType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '身份类型。

- USER：仅用户名。

- CLIENT：具体到客户端。',
            'type' => 'string',
            'required' => true,
            'example' => 'USER',
            'enum' => 
            array (
              0 => 'USER',
              1 => 'CLIENT',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'ClientId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当身份类型是CLIENT时，指定设备的ClientID。',
            'type' => 'string',
            'required' => false,
            'example' => 'GID_test@@@test',
          ),
        ),
        5 => 
        array (
          'name' => 'SignMode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '签名校验方式，ORIGIN：原始值比较，即比较password与secret，SIGNED： 对clientId进行HmacSHA1加签（使用secret，参考签名模式）验证，然后比较password。',
            'type' => 'string',
            'required' => false,
            'example' => 'SIGNED',
            'enum' => 
            array (
              0 => 'ORIGIN',
              1 => 'SIGNED',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'Code' => 
              array (
                'description' => '状态码。说明 200表示成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '操作是否成功。true表示成功，false表示失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'operation success.',
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
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'Customauth.over.capacity',
            'errorMessage' => 'Over custom auth capacity.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"operation success.\\"\\n}","type":"json"}]',
      'title' => '添加身份认证',
    ),
    'UpdateCustomAuthIdentity' => 
    array (
      'summary' => '更新自定义身份认证。',
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'update',
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的 ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-111****',
          ),
        ),
        1 => 
        array (
          'name' => 'Username',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户名，不超过64位',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'Secret',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '密钥。',
            'type' => 'string',
            'required' => true,
            'example' => 'xxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'IdentityType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '身份类型。

- USER：仅用户名。

- CLIENT：具体到客户端。',
            'type' => 'string',
            'required' => true,
            'example' => 'USER',
            'enum' => 
            array (
              0 => 'USER',
              1 => 'CLIENT',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'ClientId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当身份类型是CLIENT时，指定设备的ClientID。',
            'type' => 'string',
            'required' => false,
            'example' => 'GID_test@@@test',
          ),
        ),
        5 => 
        array (
          'name' => 'SignMode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '签名校验方式，ORIGIN：原始值比较，即比较password与secret，SIGNED： 对clientId进行HmacSHA1加签（使用secret，参考签名模式）验证，然后比较password。',
            'type' => 'string',
            'required' => true,
            'example' => 'SIGNED',
            'enum' => 
            array (
              0 => 'ORIGIN',
              1 => 'SIGNED',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '3F00084A-7F07-4B15-BADA-8903A4FB****',
              ),
              'Code' => 
              array (
                'description' => '返回结果编码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '操作是否成功。取值：true：成功。false：失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'description' => '返回消息。',
                'type' => 'string',
                'example' => 'operation success.',
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
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3F00084A-7F07-4B15-BADA-8903A4FB****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"operation success.\\"\\n}","type":"json"}]',
      'title' => '更新身份认证',
    ),
    'QueryCustomAuthIdentity' => 
    array (
      'summary' => '查询自定义身份认证。',
      'methods' => 
      array (
        0 => 'get',
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
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列MQTT版实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-111****',
          ),
        ),
        1 => 
        array (
          'name' => 'Username',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'IdentityType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'USER',
            'enum' => 
            array (
              0 => 'USER',
              1 => 'CLIENT',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当查询身份类型是CLIENT时，可以指定设备的ClientID。',
            'type' => 'string',
            'required' => false,
            'example' => 'GID_test@@@test',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前查询结束的位置，以便下一次调用时作为参数传入，继续翻页。首次调用或返回最后一页时，取值为空字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJhY2NvdW50IjoiMTM4MTcxODk3NDQzMjQ1OSIsImV2ZW50SWQiOiJGMkUxOUE3QS1FM0Q0LTVCOEYtQkU4OS1CNkMyM0RBM0UyRjIiLCJsb2dJZCI6IjY2LTEzODE3MTg5NzQ0MzI0NTkiLCJydyI6IlciLCJ0aW1lIjoxNjc4MzI2MTI1MDAwfQ',
          ),
        ),
        5 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数量，最大值：100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '100',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '11568B5B-13A8-4E72-9DBA-3A14F7D3****',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：200：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：true：调用成功。                                 false：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'description' => '附加信息。',
                'type' => 'string',
                'example' => 'operation success.',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Results' => 
                  array (
                    'description' => '返回数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Username' => 
                        array (
                          'description' => '用户名。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Secret' => 
                        array (
                          'description' => '密钥。',
                          'type' => 'string',
                          'example' => '62a5916d71767185b48907d85c2efa****',
                        ),
                        'IdentityType' => 
                        array (
                          'description' => '身份类型。

- USER：仅用户名。

- CLIENT：具体到客户端。',
                          'type' => 'string',
                          'example' => 'USER',
                        ),
                        'ClientId' => 
                        array (
                          'description' => '当身份类型是CLIENT时，指定设备的ClientID。',
                          'type' => 'string',
                          'example' => 'GID_ICP@@@4d378084',
                        ),
                        'SignMode' => 
                        array (
                          'description' => '签名校验方式，ORIGIN：原始值比较，即比较password与secret，SIGNED： 对clientId进行HmacSHA1加签（使用secret）验证，然后比较password。',
                          'type' => 'string',
                          'example' => 'SIGNED',
                        ),
                      ),
                    ),
                  ),
                  'NextToken' => 
                  array (
                    'description' => '如果还有多余的返回值则会返回NextToken。',
                    'type' => 'string',
                    'example' => 'AAAAAXA+GzVqTutYpgkFjBrchKzuvSbpuTqtt6OF9tsC9QnJ',
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
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"11568B5B-13A8-4E72-9DBA-3A14F7D3****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"operation success.\\",\\n  \\"Data\\": {\\n    \\"Results\\": [\\n      {\\n        \\"Username\\": \\"test\\",\\n        \\"Secret\\": \\"62a5916d71767185b48907d85c2efa****\\",\\n        \\"IdentityType\\": \\"USER\\",\\n        \\"ClientId\\": \\"GID_ICP@@@4d378084\\",\\n        \\"SignMode\\": \\"SIGNED\\"\\n      }\\n    ],\\n    \\"NextToken\\": \\"AAAAAXA+GzVqTutYpgkFjBrchKzuvSbpuTqtt6OF9tsC9QnJ\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询身份认证',
    ),
    'DeleteCustomAuthIdentity' => 
    array (
      'summary' => '删除自定义身份认证。',
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'delete',
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '微消息队列 MQTT 版实例的 ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-0pp12gl****',
          ),
        ),
        1 => 
        array (
          'name' => 'Username',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'IdentityType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '身份类型。

- USER：仅用户名。

- CLIENT：具体到客户端。',
            'type' => 'string',
            'required' => true,
            'example' => 'USER',
            'enum' => 
            array (
              0 => 'USER',
              1 => 'CLIENT',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'ClientId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当身份类型是CLIENT时，指定设备的ClientID。',
            'type' => 'string',
            'required' => false,
            'example' => 'GID_test@@@test',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '11568B5B-13A8-4E72-9DBA-3A14F7D3****',
              ),
              'Code' => 
              array (
                'description' => '状态码。200为成功，其他状态码为异常。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '操作是否成功。取值：true：成功。false：失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'operation success.',
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
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"11568B5B-13A8-4E72-9DBA-3A14F7D3****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"operation success.\\"\\n}","type":"json"}]',
      'title' => '删除身份认证',
    ),
    'AddCustomAuthPermission' => 
    array (
      'summary' => '添加Topic资源授权信息，且需要在控制台提前创建一级Topic。',
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'create',
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '消息队列MQTT版实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'mqtt-cn-0pp12gl****',
          ),
        ),
        1 => 
        array (
          'name' => 'IdentityType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '身份类型，USER: 仅用户名，CLIENT: 具体到客户端',
            'type' => 'string',
            'required' => true,
            'example' => 'USER',
            'enum' => 
            array (
              0 => 'USER',
              1 => 'CLIENT',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Identity',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户名或客户端ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'PermitAction',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '授权操作。',
            'type' => 'string',
            'required' => true,
            'example' => 'PUB_SUB',
            'enum' => 
            array (
              0 => 'PUB',
              1 => 'SUB',
              2 => 'PUB_SUB',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Effect',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '允许或拒绝。',
            'type' => 'string',
            'required' => true,
            'example' => 'ALLOW',
            'enum' => 
            array (
              0 => 'ALLOW',
              1 => 'DENY',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '授权的topic，支持mqtt多级topic与通配符。',
            'type' => 'string',
            'required' => true,
            'example' => 'test/t1',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '82B9E503-F4A1-4F30-976F-C6999FF9****',
              ),
              'Code' => 
              array (
                'description' => '状态码。说明 200表示成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。返回值：true：调用成功。                                  false：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'operation success.',
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
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'Customauth.over.capacity',
            'errorMessage' => 'Over custom auth capacity.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"82B9E503-F4A1-4F30-976F-C6999FF9****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"operation success.\\"\\n}","type":"json"}]',
      'title' => '添加Topic授权',
    ),
    'UpdateCustomAuthPermission' => 
    array (
      'summary' => '更新Topic资源授权信息。',
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'update',
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云消息队列 MQTT 版实例的 ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-0pp12gl****',
          ),
        ),
        1 => 
        array (
          'name' => 'IdentityType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '身份类型。

- USER：仅用户名。

- CLIENT：具体到客户端。',
            'type' => 'string',
            'required' => true,
            'example' => 'USER',
            'enum' => 
            array (
              0 => 'USER',
              1 => 'CLIENT',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Identity',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户名或客户端ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'PermitAction',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '授权操作。',
            'type' => 'string',
            'required' => true,
            'example' => 'PUB_SUB',
            'enum' => 
            array (
              0 => 'PUB',
              1 => 'SUB',
              2 => 'PUB_SUB',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Effect',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '允许或拒绝。',
            'type' => 'string',
            'required' => true,
            'example' => 'ALLOW',
            'enum' => 
            array (
              0 => 'ALLOW',
              1 => 'DENY',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '授权的Topic，支持mqtt多级topic与通配符。',
            'type' => 'string',
            'required' => true,
            'example' => 'test/t1',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '8CC04203-679B-4DED-89D9-E7C2E979****',
              ),
              'Code' => 
              array (
                'description' => '调用失败时，返回的错误码。更多信息，请参见错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。true：调用成功。                                 false：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'description' => '信息。',
                'type' => 'string',
                'example' => 'operation success.',
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
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8CC04203-679B-4DED-89D9-E7C2E979****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"operation success.\\"\\n}","type":"json"}]',
      'title' => '更新Topic授权',
    ),
    'QueryCustomAuthPermission' => 
    array (
      'summary' => '查询Topic授权信息。',
      'methods' => 
      array (
        0 => 'get',
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
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列MQTT版实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-0pp12gl****',
          ),
        ),
        1 => 
        array (
          'name' => 'IdentityType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'USER',
            'enum' => 
            array (
              0 => 'USER',
              1 => 'CLIENT',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Identity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名或客户端ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权的Topic，支持mqtt多级topic与通配符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前查询结束的位置，以便下一次调用时作为参数传入，继续翻页。首次调用或返回最后一页时，取值为空字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAThmKW2HkRgzo4G7IRRTK2fC6zZmAk6y0bwoNPFOOcSP',
          ),
        ),
        5 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数量，最大值：100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '100',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '63309FDB-ED6C-46AE-B31C-A172FBA0****',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '表示是否调用成功。true：调用成功。                                 false：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'description' => '返回结果的提示信息。',
                'type' => 'string',
                'example' => 'operation success.',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Results' => 
                  array (
                    'description' => '返回数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Identity' => 
                        array (
                          'description' => '用户名或客户端ID。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'PermitAction' => 
                        array (
                          'description' => '授权操作。',
                          'type' => 'string',
                          'example' => 'PUB_SUB',
                        ),
                        'Effect' => 
                        array (
                          'description' => '允许或拒绝。',
                          'type' => 'string',
                          'example' => 'ALLOW',
                        ),
                        'IdentityType' => 
                        array (
                          'description' => '身份类型。

- USER：仅用户名。

- CLIENT：具体到客户端。',
                          'type' => 'string',
                          'example' => 'USER',
                        ),
                        'Topic' => 
                        array (
                          'description' => 'Topic资源信息，支持MQTT多级topic与通配符。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                      ),
                    ),
                  ),
                  'NextToken' => 
                  array (
                    'description' => '用来标记当前查询结束的位置，以便下一次调用时作为参数传入，继续翻页。首次调用或返回最后一页时，取值为空字符串。',
                    'type' => 'string',
                    'example' => 'AAAAAV/vsqTyeMlX1MIk7/b6NrZLIlsSVf49O04ac7HAmlBoaYspakK7ZZkR3vRDp5Y9Nz0EmuWYrtF+1qkUwuJzPk/qEto/FGxl5Kd+qdwNt3t8',
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
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"63309FDB-ED6C-46AE-B31C-A172FBA0****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"operation success.\\",\\n  \\"Data\\": {\\n    \\"Results\\": [\\n      {\\n        \\"Identity\\": \\"test\\",\\n        \\"PermitAction\\": \\"PUB_SUB\\",\\n        \\"Effect\\": \\"ALLOW\\",\\n        \\"IdentityType\\": \\"USER\\",\\n        \\"Topic\\": \\"test\\"\\n      }\\n    ],\\n    \\"NextToken\\": \\"AAAAAV/vsqTyeMlX1MIk7/b6NrZLIlsSVf49O04ac7HAmlBoaYspakK7ZZkR3vRDp5Y9Nz0EmuWYrtF+1qkUwuJzPk/qEto/FGxl5Kd+qdwNt3t8\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询Topic授权',
    ),
    'DeleteCustomAuthPermission' => 
    array (
      'summary' => '删除Topic授权。',
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'delete',
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '微消息队列 MQTT 版实例的 ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'mqtt-cn-0pp1ldu****',
          ),
        ),
        1 => 
        array (
          'name' => 'IdentityType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '身份类型。

- USER：仅用户名。

- CLIENT：具体到客户端。',
            'type' => 'string',
            'required' => true,
            'example' => 'USER',
            'enum' => 
            array (
              0 => 'USER',
              1 => 'CLIENT',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Identity',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户名或客户端ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'Topic',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '授权的Topic，支持mqtt多级topic与通配符。',
            'type' => 'string',
            'required' => true,
            'example' => 'test/t1',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '34063BCA-0946-49C1-B824-2ED2C905****',
              ),
              'Code' => 
              array (
                'description' => 'Code码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '请求结果，取值如下：true：请求成功。                                 false：请求失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'description' => '请求返回的信息。',
                'type' => 'string',
                'example' => 'operation success.',
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
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"34063BCA-0946-49C1-B824-2ED2C905****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"operation success.\\"\\n}","type":"json"}]',
      'title' => '删除Topic授权',
    ),
    'AddCustomAuthConnectBlack' => 
    array (
      'summary' => '添加连接黑名单，禁用某个设备连接。',
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'create',
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云消息队列MQTT版实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'mqtt-cn-i7m26mf****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '禁止连接的设备ClientID。',
            'type' => 'string',
            'required' => true,
            'example' => 'GID_test@@@test',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '82B9E503-F4A1-4F30-976F-C6999FF9****',
              ),
              'Code' => 
              array (
                'description' => '状态码。说明 200表示成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '操作是否成功。取值：true：成功。false：失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'operation success.',
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
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'Customauth.over.capacity',
            'errorMessage' => 'Over custom auth capacity.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"82B9E503-F4A1-4F30-976F-C6999FF9****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"operation success.\\"\\n}","type":"json"}]',
      'title' => '添加连接黑名单',
    ),
    'DeleteCustomAuthConnectBlack' => 
    array (
      'summary' => '删除连接黑名单。',
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'delete',
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '消息队列 MQTT 版实例的 ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-cn-0pp12gl****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设备的Client ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'GID_test@@@test',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '317076B7-F946-46BC-A98F-4CF9777C****',
              ),
              'Code' => 
              array (
                'description' => '状态码。说明 200表示成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '操作是否成功。true表示成功，false表示失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'description' => '调用结果信息',
                'type' => 'string',
                'example' => 'operation success.',
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
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"317076B7-F946-46BC-A98F-4CF9777C****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"operation success.\\"\\n}","type":"json"}]',
      'title' => '删除连接黑名单',
    ),
    'QueryCustomAuthConnectBlack' => 
    array (
      'summary' => '查询连接黑名单。',
      'methods' => 
      array (
        0 => 'get',
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
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息队列MQTT版实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'post-111****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询具体的设备Client ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'GID_test@@@test',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前查询结束的位置，以便下一次调用时作为参数传入，继续翻页。首次调用或返回最后一页时，取值为空字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'xOfRU60sGEwN1OlFBIL8Ew==',
          ),
        ),
        3 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数量，最大值：100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '100',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '020F6A43-19E6-4B6E-B846-44EB31DF****',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：200：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：true：调用成功。                                 false：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'operation success.',
              ),
              'Data' => 
              array (
                'description' => '返回参数数据结构。',
                'type' => 'object',
                'properties' => 
                array (
                  'Results' => 
                  array (
                    'description' => '返回数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ClientId' => 
                        array (
                          'description' => '设备的Client ID。',
                          'type' => 'string',
                          'example' => 'GID_TEST@@@test',
                        ),
                        'Effect' => 
                        array (
                          'description' => '允许或拒绝。',
                          'type' => 'string',
                          'example' => 'ALLOW',
                        ),
                        'PermitAction' => 
                        array (
                          'description' => '授权操作。',
                          'type' => 'string',
                          'example' => 'CONNECT',
                        ),
                      ),
                    ),
                  ),
                  'NextToken' => 
                  array (
                    'description' => '下一页的token。',
                    'type' => 'string',
                    'example' => 'AAAAAZ0cM0HTqLXvgm7oMHWXcvc=',
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
            'errorCode' => 'InstancePermissionCheckFailed',
            'errorMessage' => 'An error occurred while validating the permissions of the instance. Please verify the account that created the instance and its permissions settings.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => 'An error occurred while validating the parameter. The parameter may be missing or invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ApiNotSupport',
            'errorMessage' => 'The specified API is not supported.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"020F6A43-19E6-4B6E-B846-44EB31DF****\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"operation success.\\",\\n  \\"Data\\": {\\n    \\"Results\\": [\\n      {\\n        \\"ClientId\\": \\"GID_TEST@@@test\\",\\n        \\"Effect\\": \\"ALLOW\\",\\n        \\"PermitAction\\": \\"CONNECT\\"\\n      }\\n    ],\\n    \\"NextToken\\": \\"AAAAAZ0cM0HTqLXvgm7oMHWXcvc=\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询连接黑名单',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'onsmqtt.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'onsmqtt.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'onsmqtt.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'onsmqtt.cn-huhehaote.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'onsmqtt.cn-hangzhou.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'onsmqtt.cn-shanghai.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'onsmqtt.cn-shenzhen.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'onsmqtt.cn-hongkong.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'onsmqtt.ap-southeast-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'onsmqtt.ap-southeast-2.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'onsmqtt.ap-southeast-3.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'onsmqtt.ap-southeast-5.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'onsmqtt.ap-northeast-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'onsmqtt.us-west-1.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'onsmqtt.eu-central-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'onsmqtt.cn-shanghai-finance-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'onsmqtt.cn-shenzhen-finance-1.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'onsmqtt.cn-hangzhou-finance.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'onsmqtt.cn-north-2-gov-1.aliyuncs.com',
    ),
  ),
);
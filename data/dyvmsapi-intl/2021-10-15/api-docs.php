<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Dyvmsapi-intl',
    'version' => '2021-10-15',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 186730,
      'title' => '语音单呼',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SignalCall',
        1 => 'BackendCallSignal',
      ),
    ),
    1 => 
    array (
      'id' => 166271,
      'title' => '语音群呼',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GroupCall',
        1 => 'BackendCallGroup',
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
    'SignalCall' => 
    array (
      'summary' => '向指定号码发送语音验证码和带参数变量的语音通知，支持语音文件模板或文本转语音模板。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Signature',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证签名。自动补全，无需写入。',
            'type' => 'string',
            'required' => false,
            'example' => '9****************D',
          ),
        ),
        1 => 
        array (
          'name' => 'Timestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '写入记录的时间。自动补全，无需写入。',
            'type' => 'string',
            'required' => false,
            'example' => '20**-**-**T**%3A25%3A10Z',
          ),
        ),
        2 => 
        array (
          'name' => 'SignatureNonce',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '签名唯一的随机数。自动补全，无需写入。',
            'type' => 'string',
            'required' => false,
            'example' => 'l*********y',
          ),
        ),
        3 => 
        array (
          'name' => 'CallerIdNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '主叫号码。  若您不填该参数，系统将会使用当地随机号码作为外显号码。 若您专属号码外呼，则必须传入已购买的号码，仅支持一个号码。您可以登录国际语音服务控制台，选择"号码管理"查看已购买的号码。',
            'description' => '主叫号码。  若您不填该参数，系统将会使用当地随机号码作为外显号码。 若您专属号码外呼，则必须传入已购买的号码，仅支持一个号码。您可以登录国际语音服务控制台，选择"号码管理"查看已购买的号码。',
            'type' => 'string',
            'required' => false,
            'example' => '852****0001',
          ),
        ),
        4 => 
        array (
          'name' => 'CalledNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '接收语音通知的手机号码。  号码格式：国际码+号码： 示例：85200****00。',
            'description' => '接收语音通知的手机号码。  号码格式：国际码+号码： 示例：85200****00。',
            'type' => 'string',
            'required' => false,
            'example' => '852****0000',
          ),
        ),
        5 => 
        array (
          'name' => 'TtsCode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文本转语音模板的语音ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"文本转语音模板"，查看模板ID。  此参数与VoiceCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
            'description' => '文本转语音模板的语音ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"文本转语音模板"，查看模板ID。  此参数与VoiceCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
            'type' => 'string',
            'required' => false,
            'example' => '1001',
          ),
        ),
        6 => 
        array (
          'name' => 'TtsParam',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板中的变量参数，JSON格式。',
            'description' => '模板中的变量参数，JSON格式。',
            'type' => 'string',
            'required' => false,
            'example' => '{"code":"1234"}',
          ),
        ),
        7 => 
        array (
          'name' => 'VoiceCode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语音文件的模板ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"语音文件"，查看模板ID。  此参数与TtsCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
            'description' => '语音文件的模板ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"语音文件"，查看模板ID。  此参数与TtsCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
            'type' => 'string',
            'required' => false,
            'example' => '1002',
          ),
        ),
        8 => 
        array (
          'name' => 'PlayTimes',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '一通电话内语音通知内容的播放次数。取值范围：1~3，默认取值3。',
            'description' => '一通电话内语音通知内容的播放次数。取值范围：1~3，默认取值3。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        9 => 
        array (
          'name' => 'Volume',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语音通知的播放音量。取值范围：0~100，默认取值100。',
            'description' => '语音通知的播放音量。取值范围：0~100，默认取值100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        10 => 
        array (
          'name' => 'Speed',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语速控制。取值范围为：-500~500。',
            'description' => '语速控制。取值范围为：-500~500。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        11 => 
        array (
          'name' => 'CountryId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '国家/地区二字码，ISO2。',
            'description' => '国家/地区二字码，ISO2。',
            'type' => 'string',
            'required' => false,
            'example' => 'HK',
          ),
        ),
        12 => 
        array (
          'name' => 'TaskName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务名称。',
            'description' => '任务名称。',
            'type' => 'string',
            'required' => false,
            'example' => '单呼任务名',
          ),
        ),
        13 => 
        array (
          'name' => 'SendType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '发送类型：取值[1,2]。  1： 立即开始发送任务，不等待。  2： 定时开始发送任务。如果传该类型，TimingStart为必选字段。',
            'description' => '发送类型：取值[1,2]。  1： 立即开始发送任务，不等待。  2： 定时开始发送任务。如果传该类型，TimingStart为必选字段。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'TimingStart',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '定时发送的时间。',
            'description' => '定时发送的时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-01T08:00:00+08:00',
          ),
        ),
        15 => 
        array (
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。  字符串类型，长度为1~15个字节。',
            'description' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。  字符串类型，长度为1~15个字节。',
            'type' => 'string',
            'required' => false,
            'example' => '22522****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'AccessDeniedDetail' => 
              array (
                'description' => '访问被拒绝详细信息。',
                'type' => 'string',
                'example' => '""',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D9CB****-****-****-****-********9D23
',
              ),
              'Message' => 
              array (
                'title' => '返回信息描述。',
                'description' => '返回信息描述。',
                'type' => 'string',
                'example' => 'OK
',
              ),
              'Model' => 
              array (
                'description' => '请求结果数据',
                'type' => 'object',
                'properties' => 
                array (
                  'CallId' => 
                  array (
                    'title' => '任务ID，可以通过此ID查询任务的详情。',
                    'description' => '任务ID，可以通过此ID查询任务的详情。',
                    'type' => 'string',
                    'example' => '550E****-****-****-****-********0CA0
',
                  ),
                ),
                'example' => '',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。  返回OK代表请求成功。 其他错误码，请参见API错误码。',
                'description' => '请求状态码。  返回OK代表请求成功。 其他错误码，请参见API错误码。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '请求是否成功，成功：true，失败：false。',
                'description' => '请求是否成功，成功：true，失败：false。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"RequestId\\": \\"D9CB****-****-****-****-********9D23\\\\n\\",\\n  \\"Message\\": \\"OK\\\\n\\",\\n  \\"Model\\": {\\n    \\"CallId\\": \\"550E****-****-****-****-********0CA0\\\\n\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '向指定号码发起语音呼叫',
    ),
    'BackendCallSignal' => 
    array (
      'summary' => '向指定号码发送语音验证码和带参数变量的语音通知。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '107320',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdyvms5W940Z',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CalledNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收语音通知的手机号码。

号码格式：国际码+号码：
示例：85200****00。',
            'type' => 'string',
            'required' => false,
            'example' => '852****0000',
          ),
        ),
        1 => 
        array (
          'name' => 'CallerIdNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主叫号码。

若您不填该参数，系统将会使用当地随机号码作为外显号码。
若您专属号码外呼，则必须传入已购买的号码，仅支持一个号码。您可以登录国际语音服务控制台，选择"号码管理"查看已购买的号码。',
            'type' => 'string',
            'required' => false,
            'example' => '852****0000',
          ),
        ),
        2 => 
        array (
          'name' => 'CountryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '国家二字码，ISO2',
            'type' => 'string',
            'required' => false,
            'example' => 'HK',
          ),
        ),
        3 => 
        array (
          'name' => 'PlayTimes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一通电话内语音通知内容的播放次数。取值范围：1~3，默认取值3。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        4 => 
        array (
          'name' => 'Speed',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语速控制。取值范围为：-500~500。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'TtsCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已通过审核的语音验证码模板ID。

您可以登录国际语音服务控制台，选择"国际语音-语音模板管理-文本转语音模板"查看模板ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1001',
          ),
        ),
        6 => 
        array (
          'name' => 'TtsParam',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板中的变量参数，JSON格式。',
            'type' => 'string',
            'required' => false,
            'example' => '{"code":"1234"}',
          ),
        ),
        7 => 
        array (
          'name' => 'Volume',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语音通知的播放音量。取值范围：0~100，默认取值100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        8 => 
        array (
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。

字符串类型，长度为1~15个字节。',
            'description' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。

字符串类型，长度为1~15个字节。',
            'type' => 'string',
            'required' => false,
            'example' => '22522****',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D9CB****-****-****-****-********9D23',
              ),
              'Code' => 
              array (
                'description' => '请求状态码。

返回OK代表请求成功。
其他错误码，请参见API错误码。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'CallId' => 
              array (
                'description' => '此次通话的唯一回执ID。可以通过此ID查询单个通话的详情。',
                'type' => 'string',
                'example' => '550E****-****-****-****-********0CA0',
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
            'errorCode' => 'Product.Unsubscript',
            'errorMessage' => 'You have not subscribed to the specified product.',
          ),
          1 => 
          array (
            'errorCode' => 'Ram.PermissionDeny',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
          2 => 
          array (
            'errorCode' => 'System.LimitControl',
            'errorMessage' => 'The system is under flow control.',
          ),
          3 => 
          array (
            'errorCode' => 'Unknown.ResourceOwnerId',
            'errorMessage' => 'The resource does not belong to the current user.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D9CB****-****-****-****-********9D23\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"CallId\\": \\"550E****-****-****-****-********0CA0\\"\\n}","type":"json"}]',
      'title' => '向指定号码发起语音验证码',
    ),
    'GroupCall' => 
    array (
      'summary' => '向指定号码发送多次语音呼叫，支持语音文件模板或文本转语音模板进行呼叫。',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Signature',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证签名。自动补全，无需写入',
            'type' => 'string',
            'required' => false,
            'example' => 's****************D
',
          ),
        ),
        1 => 
        array (
          'name' => 'Timestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '写入记录的时间。自动补全，无需写入',
            'type' => 'string',
            'required' => false,
            'example' => '20**-**-******10Z
',
          ),
        ),
        2 => 
        array (
          'name' => 'SignatureNonce',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '签名唯一的随机数。自动补全，无需写入。',
            'type' => 'string',
            'required' => false,
            'example' => 'l*********y
',
          ),
        ),
        3 => 
        array (
          'name' => 'CalledNumber',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '被叫号码。上限为5万个。',
            'description' => '被叫号码。上限为5万个。',
            'type' => 'array',
            'items' => 
            array (
              'title' => '号码格式：国际码+号码。 例如： 852****0000',
              'description' => '号码格式：国际码+号码。 例如： 852****0000',
              'type' => 'string',
              'required' => false,
              'example' => '852****0000',
            ),
            'required' => false,
            'example' => '',
          ),
        ),
        4 => 
        array (
          'name' => 'CallerIdNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '主叫号码。  若您不填该参数，系统将会使用当地随机号码作为外显号码。 若您专属号码外呼，则必须传入已购买的号码，仅支持一个号码。您可以登录国际语音服务控制台，选择"号码管理"查看已购买的号码。',
            'description' => '主叫号码。  若您不填该参数，系统将会使用当地随机号码作为外显号码。 若您专属号码外呼，则必须传入已购买的号码，仅支持一个号码。您可以登录国际语音服务控制台，选择"号码管理"查看已购买的号码。',
            'type' => 'string',
            'required' => false,
            'example' => '852****1111',
          ),
        ),
        5 => 
        array (
          'name' => 'CountryId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '国家/地区二字码，ISO2。',
            'description' => '国家/地区二字码，ISO2。',
            'type' => 'string',
            'required' => false,
            'example' => 'HK',
          ),
        ),
        6 => 
        array (
          'name' => 'PlayTimes',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语音文件的播放次数。取值范围：1~3。',
            'description' => '语音文件的播放次数。取值范围：1~3。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'SendType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '发送类型：取值[1,2]。  1： 立即开始发送任务，不等待。  2： 定时开始发送任务。如果传该类型，TimingStart为必选字段。',
            'description' => '发送类型：取值[1,2]。  1： 立即开始发送任务，不等待。  2： 定时开始发送任务。如果传该类型，TimingStart为必选字段。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3',
          ),
        ),
        8 => 
        array (
          'name' => 'Speed',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语速控制，取值范围：-500~500。  音频类型为TTS时必传。录音文件可不传。',
            'description' => '语速控制，取值范围：-500~500。  音频类型为TTS时必传。录音文件可不传。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '94',
          ),
        ),
        9 => 
        array (
          'name' => 'TaskName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务名称。',
            'description' => '任务名称。',
            'type' => 'string',
            'required' => false,
            'example' => '群呼任务',
          ),
        ),
        10 => 
        array (
          'name' => 'TimingStart',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '2022-05-01T08:00:00+08:00',
            'description' => '2022-05-01T08:00:00+08:00',
            'type' => 'string',
            'required' => false,
            'example' => '定时发送的时间。',
          ),
        ),
        11 => 
        array (
          'name' => 'TtsCode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '文本转语音的模板ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"文本转语音模板"，查看模板ID。  此参数与VoiceCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
            'description' => '文本转语音的模板ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"文本转语音模板"，查看模板ID。  此参数与VoiceCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
            'type' => 'string',
            'required' => false,
            'example' => '1****01',
          ),
        ),
        12 => 
        array (
          'name' => 'VoiceCode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语音文件的模板ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"语音文件"，查看模板ID。  此参数与TtsCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
            'description' => '语音文件的模板ID。  您可以登录国际语音服务控制台，选择"语音模板管理"-"语音文件"，查看模板ID。  此参数与TtsCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
            'type' => 'string',
            'required' => false,
            'example' => '2*****01',
          ),
        ),
        13 => 
        array (
          'name' => 'Volume',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '语音文件播放的音量。取值范围：0~100，默认取值100。',
            'description' => '语音文件播放的音量。取值范围：0~100，默认取值100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '11',
          ),
        ),
        14 => 
        array (
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。  字符串类型，长度为1~15个字节。',
            'description' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。  字符串类型，长度为1~15个字节。',
            'type' => 'string',
            'required' => false,
            'example' => '22596****
',
          ),
        ),
        15 => 
        array (
          'name' => 'TtsParam',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模板中的变量参数，JSON格式。',
            'description' => '模板中的变量参数，JSON格式。',
            'type' => 'string',
            'required' => false,
            'example' => '{"code":"1234"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'AccessDeniedDetail' => 
              array (
                'description' => '访问被拒绝详细信息。',
                'type' => 'string',
                'example' => '""',
              ),
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E50F****-****-****-****-********966F',
              ),
              'Message' => 
              array (
                'title' => '返回信息描述',
                'description' => '返回信息描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Model' => 
              array (
                'description' => '请求结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'title' => '任务ID，可以通过此ID查询任务的详情。',
                    'description' => '任务ID，可以通过此ID查询任务的详情。',
                    'type' => 'string',
                    'example' => '550E****-****-****-****-********00A0',
                  ),
                ),
                'example' => '',
              ),
              'Code' => 
              array (
                'title' => '请求状态码。  返回OK代表请求成功。 其他错误码，请参见API错误码。',
                'description' => '请求状态码。  返回OK代表请求成功。 其他错误码，请参见API错误码。',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"RequestId\\": \\"E50F****-****-****-****-********966F\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Model\\": {\\n    \\"TaskId\\": \\"550E****-****-****-****-********00A0\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
      'title' => '向指定的一批号码发起语音群呼',
    ),
    'BackendCallGroup' => 
    array (
      'summary' => '向指定的一批号码发起语音群呼。群呼内容为已经通过审核的模板。可以通过登录国际语音控制台，进入“模板管理”查看模板ID。此功能会将号码送入发送队列进行排队。实际呼出时间不确定。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '107319',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdyvms5W940Z',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CalledNumber',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '被叫号码。上限为5万个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '号码格式：国际码+号码。
例如： 852****0000',
              'type' => 'string',
              'required' => false,
              'example' => '852****0000',
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'CallerIdNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主叫号码。

若您不填该参数，系统将会使用当地随机号码作为外显号码。
若您专属号码外呼，则必须传入已购买的号码，仅支持一个号码。您可以登录国际语音服务控制台，选择"号码管理"查看已购买的号码。',
            'type' => 'string',
            'required' => false,
            'example' => '852****1111',
          ),
        ),
        2 => 
        array (
          'name' => 'CountryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '国家码。ISO2。',
            'type' => 'string',
            'required' => false,
            'example' => 'HK',
          ),
        ),
        3 => 
        array (
          'name' => 'PlayTimes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语音文件的播放次数。取值范围：1~3。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'SendType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发送类型：取值[1,2]。

1： 立即开始发送任务，不等待。

2： 定时开始发送任务。如果传该类型，TimingStart为必选字段。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'Speed',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语速控制，取值范围：-500~500。

音频类型为TTS时必传。录音文件可不传。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'TaskName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务名称。',
            'type' => 'string',
            'required' => false,
            'example' => '测试群呼',
          ),
        ),
        7 => 
        array (
          'name' => 'TimingStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时发送的时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-01T08:00:00+08:00',
          ),
        ),
        8 => 
        array (
          'name' => 'TtsCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语音文件的语音ID。

您可以登录国际语音服务控制台，选择"语音模板管理"-"文本转语音模板"，查看模板ID。

此参数与VoiceCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
            'type' => 'string',
            'required' => false,
            'example' => '100001',
          ),
        ),
        9 => 
        array (
          'name' => 'VoiceCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文本转语音的模板ID。

您可以登录国际语音服务控制台，选择"语音模板管理"-"语音文件"，查看模板ID。

此参数与TtsCode二选一必填。分别代表使用语音文件作为呼叫内容呼叫或者使用固定模板文字作为呼叫内容。',
            'type' => 'string',
            'required' => false,
            'example' => '200001',
          ),
        ),
        10 => 
        array (
          'name' => 'Volume',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语音文件播放的音量。取值范围：0~100，默认取值100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        11 => 
        array (
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。

字符串类型，长度为1~15个字节。',
            'description' => '预留给调用方使用的ID，最终会通过在回执消息中将此ID带回给调用方。

字符串类型，长度为1~15个字节。',
            'type' => 'string',
            'required' => false,
            'example' => '22596****',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E50F****-****-****-****-********966F',
              ),
              'Code' => 
              array (
                'description' => '	
请求状态码。

返回OK代表请求成功。
其他错误码，请参见API错误码。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '返回信息描述',
                'type' => 'string',
                'example' => 'OK',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID，可以通过此ID查询任务的详情。',
                'type' => 'string',
                'example' => '550E****-****-****-****-********00A0',
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
            'errorCode' => 'Product.Unsubscript',
            'errorMessage' => 'You have not subscribed to the specified product.',
          ),
          1 => 
          array (
            'errorCode' => 'Ram.PermissionDeny',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
          2 => 
          array (
            'errorCode' => 'System.LimitControl',
            'errorMessage' => 'The system is under flow control.',
          ),
          3 => 
          array (
            'errorCode' => 'Unknown.ResourceOwnerId',
            'errorMessage' => 'The resource does not belong to the current user.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E50F****-****-****-****-********966F\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"TaskId\\": \\"550E****-****-****-****-********00A0\\"\\n}","errorExample":""},{"type":"xml","example":"<BackendCallGroupResponse>\\n    <RequestId>E50FFA85-0B79-4421-A7BD-00B0A271966F</RequestId>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <TaskId>550e8400-e29b-41d4-a716-446655440000</TaskId>\\n</BackendCallGroupResponse>","errorExample":""}]',
      'title' => '向指定的一批号码发起语音群呼',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'dyvmsapi-intl.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
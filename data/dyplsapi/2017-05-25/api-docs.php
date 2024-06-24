<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Dyplsapi',
    'version' => '2017-05-25',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 126550,
      'title' => '添加号码绑定',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'BindAxb',
        1 => 'BindAxn',
        2 => 'BindAxnExtension',
        3 => 'BindAxg',
        4 => 'BindBatchAxg',
        5 => 'UpdateSubscription',
        6 => 'UnbindSubscription',
      ),
    ),
    1 => 
    array (
      'id' => 126560,
      'title' => '查询号码绑定',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QuerySubscriptionDetail',
        1 => 'QuerySubsId',
        2 => 'QuerySecretNoDetail',
      ),
    ),
    2 => 
    array (
      'id' => 192616,
      'title' => 'G号码组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAxgGroup',
        1 => 'OperateAxgGroup',
        2 => 'DeleteAxgGroup',
      ),
    ),
    3 => 
    array (
      'id' => 126565,
      'title' => '录音及ASR获取',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryRecordFileDownloadUrl',
        1 => 'GetTotalPublicUrl',
        2 => 'GetSecretAsrDetail',
      ),
    ),
    4 => 
    array (
      'id' => 126575,
      'title' => '号码资源管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddSecretBlacklist',
        1 => 'DeleteSecretBlacklist',
        2 => 'OperateBlackNo',
        3 => 'QuerySecretNoRemain',
        4 => 'BuySecretNo',
        5 => 'ReleaseSecretNo',
        6 => 'LockSecretNo',
        7 => 'UnlockSecretNo',
      ),
    ),
    5 => 
    array (
      'id' => 126569,
      'title' => '电商物流行业接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePickUpWaybillPreQuery',
        1 => 'CreatePickUpWaybill',
        2 => 'CancelPickUpWaybill',
        3 => 'AddAxnTrackNo',
        4 => 'QueryPhoneNoAByTrackNo',
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
    'BindAxb' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'FC10000016848****',
          ),
        ),
        1 => 
        array (
          'name' => 'PhoneNoA',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXB中间号的A号码。

A号码可设置为**手机号码**或**固定电话**，固定电话请加区号，区号和固定电话之间不需要连字符。
> 如果您的业务需要修改已绑定的号码，可以调用[UpdateSubscription](~~110253~~)接口进行修改，控制台可以绑定或解绑号码，暂时不支持修改已绑定的号码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '139****0000',
          ),
        ),
        2 => 
        array (
          'name' => 'PhoneNoB',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXB中间号的B号码。

B号码可设置为**手机号码**或**固定电话**，固定电话请加区号，区号和固定电话中间不需要连字符。

> 如果您的业务需要修改已绑定的号码，可以调用[UpdateSubscription](~~110253~~)接口进行修改，控制台可以绑定或解绑号码，暂时不支持修改已绑定的号码。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '136****0000',
          ),
        ),
        3 => 
        array (
          'name' => 'PhoneNoX',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXB中间号的X号码。

X号码是您在控制台已[购买的隐私号](https://dyplsnext.console.aliyun.com/numberbuy)。

> - 如果您未填写X号码，系统会根据**ExpectCity**参数值从指定号码池中随机选择一个号码作为X号码。
> - 如果当前号码池中没有该城市的X号码，或未填写**ExpectCity**参数值，系统会从指定号码池中随机分配一个其他城市的号码作为X号码。
> - 如果X号码分配模式配置为**严格匹配模式**，默认分配A号码所属城市号码，如果该城市无号码，返回绑定号码失败。号码分配模式操作请参见[配置号码池](https://help.aliyun.com/zh/pnp/user-guide/manage-phone-number-pools?spm=a2c4g.11186623.0.0.689e7d22cbD4Um#section-st9-xl1-l3c)。',
            'type' => 'string',
            'required' => false,
            'example' => '171****1893',
          ),
        ),
        4 => 
        array (
          'name' => 'Expiration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码绑定的过期时间。

> 必须晚于当前绑定时间1分钟以上，时间精确到秒。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-09-05 12:00:00',
          ),
        ),
        5 => 
        array (
          'name' => 'ExpectCity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定城市进行X号码的选号。

> - 如果当前号码池中没有该城市的X号码，或未填写**ExpectCity**参数值，系统会从指定号码池中随机分配一个其他城市的号码作为X号码。
> - 如果X号码分配模式配置为**严格匹配模式**，即默认分配A号码所属城市号码，如果该城市无号码，返回绑定号码失败。号码分配模式操作请参见[配置号码池](https://help.aliyun.com/zh/pnp/user-guide/manage-phone-number-pools?spm=a2c4g.11186623.0.0.689e7d22cbD4Um#section-st9-xl1-l3c)。',
            'type' => 'string',
            'required' => false,
            'example' => '北京',
          ),
        ),
        6 => 
        array (
          'name' => 'IsRecordingEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启通话录音功能。取值：

- **true**：录音。
- **false**：不录音（默认值）。

>开启通话录音功能后，可在呼叫记录中播放和下载语音文件。录音文件按通话分钟计费0.010元/分钟。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部业务扩展字段，通话记录回执消息中会回传此参数。
',
            'type' => 'string',
            'required' => false,
            'example' => 'abcdef',
          ),
        ),
        8 => 
        array (
          'name' => 'OutOrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部业务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '34553330****',
          ),
        ),
        9 => 
        array (
          'name' => 'CallRestrict',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单次呼叫限制的状态。取值：

- **CONTROL_AX_DISABLE**：A号码无法呼叫X号码。
- **CONTROL_BX_DISABLE**：B号码无法呼叫X号码。',
            'type' => 'string',
            'required' => false,
            'example' => 'CONTROL_AX_DISABLE',
            'enum' => 
            array (
              0 => 'CONTROL_AX_DISABLE',
              1 => 'CONTROL_BX_DISABLE',
              2 => 'CONTROL_CLEAR_DISABLE',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'CallDisplayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重置绑定关系中的号码显示逻辑。固定取值**1**，即主叫和被叫显示中间号码X。

> 由于运营商监管限制，呼叫时显示真实号码的设置不生效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'RingConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置AXB中间号在号码绑定后，拨打X号码的企业彩铃。

此参数请填写**铃音字段**和**彩铃编码**。

填写示例： 如设置B号码拨打X接通前的铃音，填写："AXBRing_B": "1000****1"

铃音字段如下：
- A号码拨打X接通前的铃音设置：AXBRing_A
- B号码拨打X接通前的铃音设置：AXBRing_B
- A号码拨打X接通后的铃音设置：AXBRing_A_PICKUP
- B号码拨打X接通后的铃音设置：AXBRing_B_PICKUP

彩铃编码：在号码隐私保护控制台[企业彩铃管理](https://dyplsnext.console.aliyun.com/number-pool/ringtone?resType=1)页面获取企业彩铃编码。

> 企业彩铃优先使用绑定级别设置的彩铃，如果未设置或设置未生效，则会使用号码池级别的彩铃音。',
            'type' => 'string',
            'required' => false,
            'example' => '{
      "AXBRing_B": "1000****1",
      "AXBRing_A": "1000****1"
}',
          ),
        ),
        12 => 
        array (
          'name' => 'ASRStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启ASR服务功能。取值：

- **false**：关闭（默认值）。
- **true**：开启。

>  开通功能后，可以将通话中的语音转为文本，获取录音文件同时可获取文本内容。可在呼叫记录中下载语音文本。 文本结果按通话分钟计费，ASR费用0.060元/分钟。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        13 => 
        array (
          'name' => 'ASRModelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ASR模型ID。取值：

- 通用-电话-中文普通话模型ID：7ee372834d2f4cc7ac0d0ab2d0ae1aac

- 通用-电话-中文粤语模型ID：9b4afe3d224e4fa3bf963697113e2f77

- 通用-电话-地方口音模型ID：3655a6cb94764145a1f9a38a3c3b3b4b',
            'type' => 'string',
            'required' => false,
            'example' => '7ee372834d2f4cc7ac0d0ab2d0ae1aac',
          ),
        ),
        14 => 
        array (
          'name' => 'CallTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '顺振时长。单位：秒。取值范围为5~20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '180',
            'minimum' => '0',
            'example' => '10秒',
            'default' => '15',
          ),
        ),
        15 => 
        array (
          'name' => 'DtmfConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置AXB中间号，号码绑定中的dtmf按键配置，可配置内容如下：
- endCallIvrPhoneNo：放音对象A或B
- waitingDtmfTime：放完第一段音后的最大等待时长，最大时长为30秒
- maxLoop  dtmf：按键不匹配，循环播放第一个放音文件的最大次数，最大循环次数为5次
- step1File：第一个放音文件名称
- step2File：第二个放音文件名称
- validKey：合法按键值定义，如：1,2只允许配置两个有效键值，用","分隔
- waitingEndCall：运营商挂机等待时长，最大等待时长为10秒',
            'type' => 'string',
            'required' => false,
            'example' => '{
    "endCallIvrPhoneNo":"A",
    "waitingDtmfTime":10,
    "maxLoop":3,
    "step1File":"62ab72f8-4750-4234-859e-e8d678c0cad3-flow_tts_test_1.wav",
    "step2File":"62ab72f8-4750-4234-859e-e8d678c0cad3-flow_tts_test_2.wav",
    "validKey":"1,2",
    "waitingEndCall":2
}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。

- 返回OK代表请求成功。
- 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9297B722-A016-43FB-B51A-E54050D9369D',
              ),
              'SecretBindDTO' => 
              array (
                'description' => '号码绑定成功后返回的结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'Extension' => 
                  array (
                    'description' => '接口BindAxb不涉及此参数，请忽略该返回参数。',
                    'type' => 'string',
                    'example' => '130',
                  ),
                  'SubsId' => 
                  array (
                    'description' => '号码绑定ID。

您可以用返回的**号码绑定ID**，调用[QuerySubscriptionDetail](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-querysubscriptiondetail?spm=a2c4g.11186623.0.0.122b4d02RB4KDs)接口，查询号码绑定详情。',
                    'type' => 'string',
                    'example' => '100017838816****',
                  ),
                  'SecretNo' => 
                  array (
                    'description' => '已购买的隐私号码，即X号码。',
                    'type' => 'string',
                    'example' => '171****1893',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"9297B722-A016-43FB-B51A-E54050D9369D\\",\\n  \\"SecretBindDTO\\": {\\n    \\"Extension\\": \\"130\\",\\n    \\"SubsId\\": \\"100017838816****\\",\\n    \\"SecretNo\\": \\"171****1893\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<BindAxbResponse>\\n<SecretBindDTO>\\n    <Extension>130</Extension>\\n    <SecretNo>170****0000</SecretNo>\\n    <SubsId>10000007683*****</SubsId>\\n</SecretBindDTO>\\n<Message>OK</Message>\\n<RequestId>9297B722-A016-43FB-B51A-E54050D9369D</RequestId>\\n<Code>OK</Code>\\n<BindAxbResponse>","errorExample":""}]',
      'title' => 'AXB中间号-号码绑定',
      'summary' => 'AXB中间号，是将拨打关系限定在一对一关系中，用户A可以通过中间号码X联系到用户B，用户B也可以通过中间号码X联系到用户A。',
      'description' => '- 在调用此接口前，请确保您已在控制台[购买隐私号](https://dyplsnext.console.aliyun.com/numberbuy)。

- 您可以使用此接口给AXB中间号绑定号码，也可以在控制台[号码管理](https://dyplsnext.console.aliyun.com/number/list?resType=1&billId=FC100000165392498)页面给AXB中间号绑定A、B号码。

- AXB中间号，绑定号码前建议您先明确业务场景中的A角色和B角色。例如：在打车应用场景中，A是乘客角色，B是司机角色。

- AXB中间号主要应用在1对1场景下的隐私保护，客户把A号码和B号码通过号码隐私服务实现绑定关系，A拨打X转接到B，B拨打X转接到A；一个X号码可以供200对绑定关系复用，如A1XB1、A2XB2、A3XB3......，只要A、B用户手机号码不重复，一个X号码可同时绑定200组手机号码，通话也可以同时进行。

### QPS限制
本接口的单用户QPS限制为5000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BindAxn' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool?spm=a2c4g.11186623.0.0.7e6449bbtiHP8m)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'FC2256****',
          ),
        ),
        1 => 
        array (
          'name' => 'PhoneNoA',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXN隐私号的A号码。
A号码可设置为手机号码或固定电话，固定电话需要加区号，区号和号码中间不需要加连字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '139****0000',
          ),
        ),
        2 => 
        array (
          'name' => 'PhoneNoB',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXN隐私号的B号码。

B号码可设置为手机号码或固定电话，固定电话需要加区号，区号和号码中间不需要加连字符。
> - A号码拨打X号码时，默认会转接到B号码，如B号码未设置，则无法接通。
> - A号码拨打X号码时，**A号码回拨模式**为**默认模式**时，才会转接到B号码，若不是**默认模式**，则无法接通。
> - 如需修改**A号码回拨模式**，在[号码池管理](https://dyplsnext.console.aliyun.com/number-pool?resType=1)>筛选**AXN隐私号**>**号池管理**>**A号码回拨模式**>**调整配置**修改。
> - 如需更新B号码，请调用[UpdateSubscription](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-updatesubscription?spm=a2c4g.11186623.0.i11)接口更新。',
            'type' => 'string',
            'required' => false,
            'example' => '138****0000',
          ),
        ),
        3 => 
        array (
          'name' => 'PhoneNoX',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXN隐私号的X号码。

X号码是您在控制台已[购买的隐私号](https://dyplsnext.console.aliyun.com/numberbuy?spm=a2c4g.11186623.0.0.7e6449bbtiHP8m)。

> 如果未指定X号码时，将根据参数ExpectCity从指定号码池中随机指定一个号码作为X号码。',
            'type' => 'string',
            'required' => false,
            'example' => '139****1111',
          ),
        ),
        4 => 
        array (
          'name' => 'Expiration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定关系的过期时间，单位：秒。

> 必须晚于当前时间60秒以上。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021-09-05 12:00:00',
          ),
        ),
        5 => 
        array (
          'name' => 'ExpectCity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定城市进行X号码的选号。

> - 如果当前号码池中没有该城市的可用号码，或未指定此参数，将从当前号码池中随机分配一个其他城市的号码作为X号码。
> - 如果**X号码分配模式**配置为**严格匹配模式**，当符合条件的号码不存在时，系统会提示分配错误。',
            'type' => 'string',
            'required' => false,
            'example' => '上海',
          ),
        ),
        6 => 
        array (
          'name' => 'IsRecordingEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否需要针对该绑定关系产生的所有通话录制通话录音。取值：

- **true**：录音。
- **false**：不录音（默认值）。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'NoType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码类型。

> 适用于原阿里大于客户，阿里云用户可忽略。',
            'type' => 'string',
            'required' => false,
            'example' => 'AXB_170',
          ),
        ),
        8 => 
        array (
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部业务扩展字段，通话记录回执消息中会回传此参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'abcdef',
          ),
        ),
        9 => 
        array (
          'name' => 'OutOrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部业务ID。',
            'type' => 'string',
            'required' => false,
            'example' => '34553330****',
          ),
        ),
        10 => 
        array (
          'name' => 'CallDisplayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重置绑定关系中的号码显示逻辑。固定取值：**1**（主被叫显示中间号码X）。

> 由于运营商监管限制，呼叫时显示真实号码的设置不生效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'RingConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置AXN隐私号在号码绑定后，拨打X号码的企业彩铃。

此参数请填写**铃音字段**和**彩铃编码**。

**铃音字段**取值：
- AXN中，A号码打X接通前的铃音设置（有回拨号码）：AXNRing_AB
- AXN中，A号码打X接通前的铃音设置（无回拨号码）：AXNRing_A
- AXN中，N侧号码打X接通前的铃音设置：AXNRing_N
- AXN中，A号码打X接通后的铃音设置：AXNRing_A_PICKUP
- AXN中，N号码打X接通后的铃音设置：AXNRing_N_PICKUP

**彩铃编码**：

在号码隐私保护控制台[企业彩铃管理](https://dyplsnext.console.aliyun.com/number-pool/ringtone?resType=1)页面获取企业彩铃编码。

**填写示例**：

如设置A号码拨打X接通前的铃音（无回拨号码），填写："AXNRing_A": "1000****1"。

> 企业彩铃优先使用绑定级别设置的彩铃，如果未设置或设置未生效，则会使用号码池级别的彩铃音。',
            'type' => 'string',
            'required' => false,
            'example' => '{"AXNRing_N":"1000****1","AXNRing_A":"1000****1"}',
          ),
        ),
        12 => 
        array (
          'name' => 'ASRStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ASR状态。取值：

- **false**：关闭（默认值）
- **true**：开启',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        13 => 
        array (
          'name' => 'ASRModelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ASR模型ID。取值：

- 通用-电话-中文普通话模型 ID：7ee372834d2f4cc7ac0d0ab2d0ae1aac

- 通用-电话-中文粤语模型 ID：9b4afe3d224e4fa3bf963697113e2f77

- 通用-电话-地方口音模型 ID：3655a6cb94764145a1f9a38a3c3b3b4b',
            'type' => 'string',
            'required' => false,
            'example' => '7ee372834d2f4cc7ac0d0ab2d0ae1aac',
          ),
        ),
        14 => 
        array (
          'name' => 'CallTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '顺振时长。单位：秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '20',
            'minimum' => '5',
            'example' => '10',
          ),
        ),
        15 => 
        array (
          'name' => 'CallRestrict',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单通呼叫限制的状态。取值：

- **CONTROL_AX_DISABLE**：A号码无法呼叫X号码。
- **CONTROL_BX_DISABLE**：B号码无法呼叫X号码。',
            'type' => 'string',
            'required' => false,
            'example' => 'CONTROL_AX_DISABLE',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。
* 返回OK代表请求成功。
* 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
              ),
              'SecretBindDTO' => 
              array (
                'description' => '号码绑定成功后返回的结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'Extension' => 
                  array (
                    'description' => '分机号。

> 接口BindAxn不涉及分机号码，请忽略。',
                    'type' => 'string',
                    'example' => '130',
                  ),
                  'SubsId' => 
                  array (
                    'description' => '绑定关系ID。',
                    'type' => 'string',
                    'example' => '1***************3',
                  ),
                  'SecretNo' => 
                  array (
                    'description' => '隐私号码，即X号码。',
                    'type' => 'string',
                    'example' => '139****1111',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\",\\n  \\"SecretBindDTO\\": {\\n    \\"Extension\\": \\"130\\",\\n    \\"SubsId\\": \\"1***************3\\",\\n    \\"SecretNo\\": \\"139****1111\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<BindAxnResponse>\\n<SecretBindDTO>\\n    <Extension>130</Extension>\\n    <SecretNo>170****0000</SecretNo>\\n    <SubsId>100000076879****</SubsId>\\n</SecretBindDTO>\\n<Message>OK</Message>\\n<RequestId>F655A8D5-B967-440B-8683-DAD6FF8DE990</RequestId>\\n<Code>OK</Code>\\n</BindAxnResponse>","errorExample":""}]',
      'title' => 'AXN隐私号-号码绑定',
      'summary' => '添加AXN隐私号的绑定关系。AXN隐私号是为A用户分配一个专属的隐私号，任何号码N通过拨打X号码都可以转接到A。',
      'description' => '- 在调用此接口前，请确保您已在控制台[购买隐私号](https://dyplsnext.console.aliyun.com/numberbuy)。

- 您可以使用此接口给AXN隐私号绑定号码，也可以在控制台[号码管理](https://dyplsnext.console.aliyun.com/number/list?spm=a2c4g.11186623.0.0.64e649bbTzmb6j&resType=1&billId=FC100000165392498)页面给AXN隐私号绑定A、B号码。

- AXN隐私号，绑定号码前建议您先明确业务场景中的A角色。例如：在二手车信息发布场景中，A是房东或经纪人联系方式。

### QPS 限制
本接口的单用户QPS限制为 5000 次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BindAxnExtension' => 
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
        'operationType' => 'create',
        'abilityTreeCode' => '72611',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdypls1W5H18',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool?spm=a2c4g.11186623.0.0.7e6449bbtiHP8m)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'FC10000011111****',
          ),
        ),
        1 => 
        array (
          'name' => 'PhoneNoA',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXN分机号的A号码。
A号码可设置为手机号码或固定电话，固定电话需要加区号，区号和号码中间不需要加连字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '139****0000',
          ),
        ),
        2 => 
        array (
          'name' => 'Extension',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'X号码的分机号码，1~3位。

> 如果指定分机号，必须同时指定X号码，即Extension、PhoneNoX两个字段必须同时被指定。',
            'type' => 'string',
            'required' => false,
            'example' => '130',
          ),
        ),
        3 => 
        array (
          'name' => 'PhoneNoB',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXN分机号的B号码。

B号码可设置为手机号码或固定电话，固定电话需要加区号，区号和号码中间不需要加连字符。
> - A号码拨打X号码时，默认会转接到B号码，如B号码未设置，则无法接通。
> - A号码拨打X号码时，**A号码回拨模式**为**默认模式**时，才会转接到B号码，若不是**默认模式**，则无法接通。
> - 如需修改**A号码回拨模式**，在[号码池管理](https://dyplsnext.console.aliyun.com/number-pool?resType=1)>筛选**AXN分机号**>**号池管理**>**A号码回拨模式**>**调整配置**修改。
> - 如需更新B号码，请调用[UpdateSubscription](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-updatesubscription?spm=a2c4g.11186623.0.i16)接口更新。',
            'type' => 'string',
            'required' => false,
            'example' => '138****0000',
          ),
        ),
        4 => 
        array (
          'name' => 'PhoneNoX',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXN分机号的X号码。

X号码是您在控制台已[购买的隐私号](https://dyplsnext.console.aliyun.com/numberbuy?spm=a2c4g.11186623.0.0.7e6449bbtiHP8m)。

> 如果未指定X号码时，将根据参数ExpectCity从指定号码池中随机指定一个号码作为X号码。',
            'type' => 'string',
            'required' => false,
            'example' => '139****1111',
          ),
        ),
        5 => 
        array (
          'name' => 'Expiration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定关系的过期时间，时间单位精确到秒。
>必须晚于当前时间1分钟以上。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2019-09-05 12:00:00',
          ),
        ),
        6 => 
        array (
          'name' => 'ExpectCity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定城市进行X号码的选号。

> - 如果当前号码池中没有该城市的可用号码，或未指定此参数，将从当前号码池中随机分配一个其他城市的号码作为X号码。
> - 如果**X号码分配模式**配置为**严格匹配模式**，当符合条件的号码不存在时，系统会提示分配错误。',
            'type' => 'string',
            'required' => false,
            'example' => '北京',
          ),
        ),
        7 => 
        array (
          'name' => 'IsRecordingEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否需要针对该绑定关系产生的所有通话进行通话录音。取值：

- **true**：录音。
- **false**：不录音（默认值）。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部业务扩展字段，通话记录回执消息中会回传此参数。
',
            'type' => 'string',
            'required' => false,
            'example' => 'abcdef',
          ),
        ),
        9 => 
        array (
          'name' => 'OutOrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部业务ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'abcdef',
          ),
        ),
        10 => 
        array (
          'name' => 'CallDisplayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重置绑定关系中的号码显示逻辑。固定取值：**1**（主被叫显示中间号码X）。

> 由于运营商监管限制，呼叫时显示真实号码的设置不生效。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'RingConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置AXN分机号在号码绑定后，拨打X号码的企业彩铃。

此参数请填写**铃音字段**和**彩铃编码**。

**铃音字段**取值：
- AXN分机号中，A号码打X接通前的铃音设置（有回拨号码）：AXNRing_AB
- AXN分机号中，A号码打X接通前的铃音设置（无回拨号码）：AXNRing_A
- AXN分机号中，N侧号码打X接通前的铃音设置：AXNRing_N
- AXN分机号中，A号码打X接通后的铃音设置：AXNRing_A_PICKUP
- AXN分机号中，N号码打X接通后的铃音设置：AXNRing_N_PICKUP

**彩铃编码**：

在号码隐私保护控制台[企业彩铃管理](https://dyplsnext.console.aliyun.com/number-pool/ringtone?resType=1)页面获取企业彩铃编码。

**填写示例**：

如设置A号码拨打X接通前的铃音（无回拨号码），填写："AXNRing_A": "1000****1"。',
            'type' => 'string',
            'required' => false,
            'example' => '{"AXNRing_N":"1000****1","AXNRing_A":"1000****1"}',
          ),
        ),
        12 => 
        array (
          'name' => 'ASRStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ASR状态。取值：

- **false**：关闭（默认值）
- **true**：开启',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        13 => 
        array (
          'name' => 'ASRModelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ASR模型ID。取值：

- 通用-电话-中文普通话模型 ID：7ee372834d2f4cc7ac0d0ab2d0ae1aac

- 通用-电话-中文粤语模型 ID：9b4afe3d224e4fa3bf963697113e2f77

- 通用-电话-地方口音模型 ID：3655a6cb94764145a1f9a38a3c3b3b4b',
            'type' => 'string',
            'required' => false,
            'example' => '7ee372834d2f4cc7ac0d0ab2d0ae1aac',
          ),
        ),
        14 => 
        array (
          'name' => 'CallRestrict',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通呼叫限制的状态。取值：

- **CONTROL_AX_DISABLE**：A号码无法呼叫X号码。
- **CONTROL_BX_DISABLE**：B号码无法呼叫X号码。',
            'type' => 'string',
            'required' => false,
            'example' => 'CONTROL_AX_DISABLE',
          ),
        ),
        15 => 
        array (
          'name' => 'Extend',
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
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。
* 返回OK代表请求成功。
* 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9297B722-A016-43FB-B51A-E54050D9369D',
              ),
              'SecretBindDTO' => 
              array (
                'description' => '绑定成功后返回的结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'Extension' => 
                  array (
                    'description' => '分机号码。',
                    'type' => 'string',
                    'example' => '130',
                  ),
                  'SubsId' => 
                  array (
                    'description' => '绑定关系ID。',
                    'type' => 'string',
                    'example' => '1***************3',
                  ),
                  'SecretNo' => 
                  array (
                    'description' => '隐私号码，即X号码。',
                    'type' => 'string',
                    'example' => '139*****1111',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"9297B722-A016-43FB-B51A-E54050D9369D\\",\\n  \\"SecretBindDTO\\": {\\n    \\"Extension\\": \\"130\\",\\n    \\"SubsId\\": \\"1***************3\\",\\n    \\"SecretNo\\": \\"139*****1111\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<BindAxnExtensionResponse>\\n<SecretBindDTO>\\n    <Extension>130</Extension>\\n    <SecretNo>150*****0000</SecretNo>\\n    <SubsId>100000082000****</SubsId>\\n</SecretBindDTO>\\n<Message>OK</Message>\\n<RequestId>9297B722-A016-43FB-B51A-E54050D9369D</RequestId>\\n<Code>OK</Code>\\n</BindAxnExtensionResponse>","errorExample":""}]',
      'title' => 'AXN分机号-号码绑定',
      'summary' => '添加AXN分机号的绑定关系。AXN分机号与AXN隐私号功能类似，AXN分机号在AXN基础上引入了分机号，从而降低X号码的使用量，在呼叫时候首先拨打X号码，听到提示音后输入对应分机号转接到A。',
      'description' => '- 在调用此接口前，请确保您已在控制台[购买隐私号](https://dyplsnext.console.aliyun.com/numberbuy)。

- 您可以使用此接口给AXN分机号绑定号码，也可以在控制台[号码管理](https://dyplsnext.console.aliyun.com/number/list?spm=a2c4g.11186623.0.0.64e649bbTzmb6j&resType=1&billId=FC100000165392498)页面给AXN分机号绑定A、B号码。

- AXN分机号，绑定号码前建议您先明确业务场景中的A角色和N角色。例如：A号码是客户，则X号码是为客户分配的隐私号，其他的任何号码拨打X号码+分机号码都会转接到A号码，A拨打X的时候呼叫会转接到绑定时所传入的默认B号码。

### QPS限制

本接口的单用户QPS限制为5000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BindAxg' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool?spm=a2c4g.11186623.0.0.7e6449bbtiHP8m)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'FC10000012345****',
          ),
        ),
        1 => 
        array (
          'name' => 'PhoneNoA',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXG隐私号的A号码。
A号码可设置为手机号码或固定电话，固定电话需要加区号，区号和号码中间不需要加连字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '139****0000',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXG中的G组ID，即GID。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool?spm=a2c4g.11186623.0.0.50fe545b5d568v)页面筛选出**AXG隐私号**，并单击**G号码组管理**即可查看所有G号码组的GID。

> G号码组中必须有一个及以上的电话号码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '200001234****',
          ),
        ),
        3 => 
        array (
          'name' => 'PhoneNoB',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXG隐私号的B号码。

B号码可设置为手机号码或固定电话，固定电话需要加区号，区号和号码中间不需要加连字符。
> - A号码拨打X号码时，默认会转接到B号码，如B号码未设置，则无法接通。
> - A号码拨打X号码时，**A号码回拨模式**为**默认模式**时，才会转接到B号码，若不是**默认模式**，则无法接通。
> - 如需修改**A号码回拨模式**，在[号码池管理](https://dyplsnext.console.aliyun.com/number-pool?resType=1)>筛选**AXG隐私号**>**号池管理**>**A号码回拨模式**>**调整配置**修改。
> - 如需更新B号码，请调用[UpdateSubscription](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-updatesubscription?spm=a2c4g.11186623.0.i16)接口更新。',
            'type' => 'string',
            'required' => false,
            'example' => '138****0000',
          ),
        ),
        4 => 
        array (
          'name' => 'PhoneNoX',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXG隐私号的X号码。

X号码是您在控制台已[购买的隐私号](https://dyplsnext.console.aliyun.com/numberbuy?spm=a2c4g.11186623.0.0.7e6449bbtiHP8m)。

> 如果未指定X号码时，将根据参数ExpectCity从指定号码池中随机指定一个号码作为X号码。',
            'type' => 'string',
            'required' => false,
            'example' => '139****1111',
          ),
        ),
        5 => 
        array (
          'name' => 'Expiration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定关系的过期时间，时间单位精确到秒。
>必须晚于当前时间1分钟以上。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2019-09-05 12:00:00',
          ),
        ),
        6 => 
        array (
          'name' => 'ExpectCity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定城市进行X号码的选号。

> - 如果当前号码池中没有该城市的可用号码，或未指定此参数，将从当前号码池中随机分配一个其他城市的号码作为X号码。
> - 如果**X号码分配模式**配置为**严格匹配模式**，当符合条件的号码不存在时，系统会提示分配错误。',
            'type' => 'string',
            'required' => false,
            'example' => '北京',
          ),
        ),
        7 => 
        array (
          'name' => 'IsRecordingEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否需要针对该绑定关系产生的所有通话录制通话录音。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部业务扩展字段，通话记录回执消息中会回传此参数。
',
            'type' => 'string',
            'required' => false,
            'example' => 'abcdef',
          ),
        ),
        9 => 
        array (
          'name' => 'OutOrderId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部业务ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'abcdef',
          ),
        ),
        10 => 
        array (
          'name' => 'CallDisplayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重置绑定关系中的号码显示逻辑。固定取值： **1**（主被叫显示中间号码X）。

> 由于运营商监管限制，呼叫时显示真实号码的设置不生效。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'RingConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置AXG隐私号在号码绑定后，拨打X号码的企业彩铃。

此参数请填写**铃音字段**和**彩铃编码**。

**铃音字段**取值：
- AXG中，A号码打X的铃音设置（有回拨号码）：AXGRing_AB
- AXG中，A号码打X的铃音设置（无回拨号码）：AXGRing_A
- AXG中，G组号码打X的铃音设置：AXGRing_G

**彩铃编码**：

在号码隐私保护控制台[企业彩铃管理](https://dyplsnext.console.aliyun.com/number-pool/ringtone?resType=1)页面获取企业彩铃编码。

**填写示例**：

如设置G组号码打X的铃音，填写："AXGRing_G": "1000****1"。

> 企业彩铃优先使用绑定级别设置的彩铃，如果未设置或设置未生效，则会使用号码池级别的彩铃音。',
            'type' => 'string',
            'required' => false,
            'example' => '{"AXGRing_AB":"1000****1","AXGRing_A":"1000****2","AXGRing_G":"1000****3"}',
          ),
        ),
        12 => 
        array (
          'name' => 'ASRStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ASR状态。取值：

- **false**：关闭（默认值）
- **true**：开启',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        13 => 
        array (
          'name' => 'ASRModelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ASR模型ID。取值：

- 通用-电话-中文普通话模型 ID：7ee372834d2f4cc7ac0d0ab2d0ae1aac

- 通用-电话-中文粤语模型 ID：9b4afe3d224e4fa3bf963697113e2f77

- 通用-电话-地方口音模型 ID：3655a6cb94764145a1f9a38a3c3b3b4b',
            'type' => 'string',
            'required' => false,
            'example' => '9b4afe3d224e4fa3bf963697113e2f77',
          ),
        ),
        14 => 
        array (
          'name' => 'CallRestrict',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通话呼叫限制的状态。取值：

- **CONTROL_AX_DISABLE**：A号码无法呼叫X号码。
- **CONTROL_BX_DISABLE**：B号码无法呼叫X号码。',
            'type' => 'string',
            'required' => false,
            'example' => 'CONTROL_AX_DISABLE',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。
* 返回OK代表请求成功。
* 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
              ),
              'SecretBindDTO' => 
              array (
                'description' => '绑定成功后返回的结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'Extension' => 
                  array (
                    'description' => '分机号码。

> 接口BindAxg不涉及分机号码，请忽略该返回参数。',
                    'type' => 'string',
                    'example' => '130',
                  ),
                  'SubsId' => 
                  array (
                    'description' => '绑定关系ID。',
                    'type' => 'string',
                    'example' => '1************3',
                  ),
                  'SecretNo' => 
                  array (
                    'description' => '隐私号码，即X号码。',
                    'type' => 'string',
                    'example' => '139****1111',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\",\\n  \\"SecretBindDTO\\": {\\n    \\"Extension\\": \\"130\\",\\n    \\"SubsId\\": \\"1************3\\",\\n    \\"SecretNo\\": \\"139****1111\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<BindAxgResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <RequestId>F655A8D5-B967-440B-8683-DAD6FF8DE990</RequestId>\\n    <SecretBindDTO>\\n        <Extension>150****0000</Extension>\\n        <SubsId>100000076389****</SubsId>\\n        <SecretNo>171****0000</SecretNo>\\n    </SecretBindDTO>\\n</BindAxgResponse>","errorExample":""}]',
      'title' => 'AXG隐私号-号码绑定',
      'summary' => '添加AXG号码的绑定关系。AXG产品是针对有用户分级需求、限制呼叫范围、限制抢单等场景的客户需求提供的号码隐私保护解决方案，其中G代表一个号码组，可以根据需要添加号码。',
      'description' => '- 在调用此接口前，请确保您已在控制台[购买隐私号](https://dyplsnext.console.aliyun.com/numberbuy)。

- 您可以使用此接口给AXG隐私号绑定号码，也可以在控制台[号码管理](https://dyplsnext.console.aliyun.com/number/list?spm=a2c4g.11186623.0.0.64e649bbTzmb6j&resType=1&billId=FC100000165392498)页面给AXG隐私号绑定号码。

- AXG隐私号，绑定号码前建议您先明确业务场景中的A角色、G角色。例如：在招聘平台中，A是应聘者，G是招聘团队。

### QPS限制
本接口的单用户QPS限制为5000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BindBatchAxg' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'FC2235****',
          ),
        ),
        1 => 
        array (
          'name' => 'AxgBindList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'AXG绑定列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'PhoneNoA' => 
                array (
                  'description' => 'AXG中的A号码。 A号码可设置为手机号码或固定电话，固定电话需要加区号，区号和号码中间不需要加连字符。',
                  'type' => 'string',
                  'required' => true,
                  'docRequired' => true,
                  'example' => '139****0000',
                ),
                'GroupId' => 
                array (
                  'description' => 'AXG中的G组ID，即GID。

可以通过以下方式查看GID：
- 登录号码隐私保护控制台，在[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面筛选出**AXG隐私号**，单击**G号码组管理**即可查看所有G号码组的GID。
- 如果G号码组是通过接口[CreateAxgGroup](~~110250~~)创建的，则接口的返回参数**GroupID**就是此处的请求参数**GroupID**。

> G号码组中必须有一个及以上的电话号码。',
                  'type' => 'string',
                  'required' => true,
                  'docRequired' => true,
                  'example' => '200001234****',
                ),
                'PhoneNoB' => 
                array (
                  'description' => 'AXG中的B号码。

B号码可设置为手机号码或固定电话，固定电话需要加区号，区号和号码中间不需要加连字符。

> - A号码拨打X号码时，默认会转接到B号码，如B号码未设置，则无法接通。
> - A号码拨打X号码时，**A号码回拨模式**为**默认模式**时，才会转接到B号码，若不是**默认模式**，则无法接通。
> - 如需修改**A号码回拨模式**，在[号码池管理](https://dyplsnext.console.aliyun.com/number-pool?resType=1)>筛选**AXN隐私号**>**号池管理**>**A号码回拨模式**>**调整配置**修改。
> - 如需更新B号码，请调用[UpdateSubscription](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-updatesubscription?spm=a2c4g.11186623.0.i16)接口更新。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '138****0000',
                ),
                'PhoneNoX' => 
                array (
                  'description' => 'AXG中的X号码。

X号码是您在控制台已[购买的隐私号](https://dyplsnext.console.aliyun.com/numberbuy?spm=a2c4g.11186623.0.0.7e6449bbtiHP8m)，可在控制台[号码管理](https://dyplsnext.console.aliyun.com/number/list)筛选**AXG隐私号**获取X号码。

> 如果未指定X号码，将根据参数**ExpectCity**从指定号码池中随机指定一个号码作为X号码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '139****1111',
                ),
                'ExpectCity' => 
                array (
                  'description' => '指定城市进行X号码的选号。

> - 如果当前号池中没有该城市的可用号码，或未指定此参数，将从当前号码池中随机分配一个其他城市的号码作为X号码。
> - 如果**X号码分配模式**配置为**严格匹配模式**，当符合条件的号码不存在时，系统会提示分配错误。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '北京',
                ),
                'IsRecordingEnabled' => 
                array (
                  'description' => '是否需要针对该绑定关系产生的所有通话进行通话录音。取值：

- **true**：录音。
- **false**：不录音（默认值）。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'OutId' => 
                array (
                  'description' => '外部业务扩展字段，通话记录回执消息中会回传此参数。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1***********0fd',
                ),
                'Expiration' => 
                array (
                  'description' => '绑定关系的过期时间，时间单位精确到秒。
> - 必须晚于当前时间1分钟以上。
> - 此参数为必填参数，请您调用时填写。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '2022-07-11 01:05:15',
                ),
                'OutOrderId' => 
                array (
                  'description' => '外部业务ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '20***************677',
                ),
                'CallDisplayType' => 
                array (
                  'description' => '重置绑定关系中的号码显示逻辑。固定取值：**1**（主被叫显示中间号码X）。

> 由于运营商监管限制，呼叫时显示真实号码的设置不生效。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'RingConfig' => 
                array (
                  'description' => '设置AXG隐私号在号码绑定后，拨打X号码的企业彩铃。

此参数请填写**铃音字段**和**彩铃编码**。

**铃音字段**取值：
- AXG中，A号码打X的铃音设置（有回拨号码）：AXGRing_AB
- AXG中，A号码打X的铃音设置（无回拨号码）：AXGRing_A
- AXG中，G组号码打X的铃音设置：AXGRing_G

**彩铃编码**：

在号码隐私保护控制台[企业彩铃管理](https://dyplsnext.console.aliyun.com/number-pool/ringtone?resType=1)页面获取企业彩铃编码。

**填写示例**：

如设置A号码打X的铃音（无回拨号码），填写："AXGRing_A": "1000****1"。

> 企业彩铃优先使用绑定级别设置的彩铃，如果未设置或设置未生效，则会使用号码池级别的彩铃音。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{"AXGRing_AB":"1000****2","AXGRing_A":"1000****1"}',
                ),
                'ASRStatus' => 
                array (
                  'description' => 'ASR状态。取值：

- **false**：关闭（默认值）
- **true**：开启',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'ASRModelId' => 
                array (
                  'description' => 'ASR模型ID。取值：

- 通用-电话-中文普通话模型 ID：7ee372834d2f4cc7ac0d0ab2d0ae1aac

- 通用-电话-中文粤语模型 ID：9b4afe3d224e4fa3bf963697113e2f77

- 通用-电话-地方口音模型 ID：3655a6cb94764145a1f9a38a3c3b3b4b',
                  'type' => 'string',
                  'required' => false,
                  'example' => '7ee372834d2f4cc7ac0d0ab2d0ae1aac',
                ),
                'CallRestrict' => 
                array (
                  'description' => '单通呼叫限制的状态。取值：

- **CONTROL\\_AX\\_DISABLE**：A号码无法呼叫X号码。
- **CONTROL\\_BX\\_DISABLE**：B号码无法呼叫X号码。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'CONTROL_AX_DISABLE',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。
* 返回OK代表请求成功。
* 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '5DCCA8CD-6C0A-50B4-A496-B1D2AB48A1C3',
              ),
              'SecretBindList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SecretBind' => 
                  array (
                    'description' => 'AXG绑定结果列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SecretNo' => 
                        array (
                          'description' => '隐私号码，即X号码。',
                          'type' => 'string',
                          'example' => '139****1111',
                        ),
                        'SubsId' => 
                        array (
                          'description' => '绑定关系ID。',
                          'type' => 'string',
                          'example' => '1000012345******',
                        ),
                        'Extension' => 
                        array (
                          'description' => '分机号。

> 接口BindBatchAxg不涉及分机号码，请忽略。',
                          'type' => 'string',
                          'example' => '257',
                        ),
                        'GroupId' => 
                        array (
                          'description' => 'AXG中的G组ID，即GID。',
                          'type' => 'string',
                          'example' => '200001234****',
                        ),
                        'PhoneNoA' => 
                        array (
                          'description' => 'AXG中的A号码。',
                          'type' => 'string',
                          'example' => '139****0000',
                        ),
                        'Code' => 
                        array (
                          'description' => '单条AXG创建绑定的请求状态码。

- 返回OK代表请求成功。
- 其他错误码，请参见[错误码列表](https://help.aliyun.com/document_detail/109196.html)。',
                          'type' => 'string',
                          'example' => 'isv.INVALID_PARAMETERS',
                        ),
                        'Message' => 
                        array (
                          'description' => '单条AXG创建绑定的请求状态码描述。',
                          'type' => 'string',
                          'example' => 'ringConfig invalid',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"5DCCA8CD-6C0A-50B4-A496-B1D2AB48A1C3\\",\\n  \\"SecretBindList\\": {\\n    \\"SecretBind\\": [\\n      {\\n        \\"SecretNo\\": \\"139****1111\\",\\n        \\"SubsId\\": \\"1000012345******\\",\\n        \\"Extension\\": \\"257\\",\\n        \\"GroupId\\": \\"200001234****\\",\\n        \\"PhoneNoA\\": \\"139****0000\\",\\n        \\"Code\\": \\"isv.INVALID_PARAMETERS\\",\\n        \\"Message\\": \\"ringConfig invalid\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '批量添加AXG号码的绑定关系',
      'summary' => '批量添加AXG号码的绑定关系。AXG产品是针对有用户分级需求、限制呼叫范围、限制抢单等场景的客户需求提供的号码隐私保护解决方案，其中G代表一个号码组，可以根据需要添加号码。',
      'description' => '- 在AXG号码绑定前，除了购买X号码以外，还必须创建一个G号码组，并在G号码组中添加号码。若您需要创建G号码组，可参考：[设置G号码组](https://help.aliyun.com/zh/pnp/user-guide/manage-phone-number-pools#section-9bb-xrg-c78)进行操作，或者调用[CreateAxgGroup](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-createaxggroup)接口创建G号码组。

- AXG隐私号，绑定号码前建议您先明确业务场景中的A角色、G角色。例如：在招聘平台中，A是应聘者，G是招聘团队。

- 调用此接口批量绑定AXG号码时，若个别AXG号码绑定请求失败，不影响其他AXG号码绑定请求成功，请求状态码针对单条AXG绑定进行返回。

### QPS 限制
本接口的单用户QPS限制为 5000 次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'UpdateSubscription' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool?spm=a2c4g.11186623.0.0.7e6449bbtiHP8m)页面获取**号码池Key**。

> 当**ProductType**为空时必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'FC122356****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品类型。取值：
- **AXB_170**。
- **AXN_170**。
- **AXN_95**。
- **AXN\\_EXTENSION\\_REUSE**。

> - 适用于原阿里大于客户，阿里云用户可忽略。
> - 当**PoolKey**为空时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'AXB_170',
          ),
        ),
        2 => 
        array (
          'name' => 'SubsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定关系ID。

请登录号码隐私保护控制台，在[号码管理](https://dyplsnext.console.aliyun.com/number/list)页筛选号码，点击**详情**查看号码的绑定关系ID，或者在调用[BindAxb](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-bindaxb?spm=a2c4g.11186623.0.0.6a807e38uud6C5)等号码绑定API时查看返回参数中的**SubsId**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '100000076879****',
          ),
        ),
        3 => 
        array (
          'name' => 'PhoneNoX',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码绑定关系中的X号码。

X号码是您在控制台已[购买的隐私号](https://dyplsnext.console.aliyun.com/numberbuy?spm=a2c4g.11186623.0.0.7e6449bbtiHP8m)。

请登录号码隐私保护控制台，在[号码管理](https://dyplsnext.console.aliyun.com/number/list)页面获取X号码。在填写X号码时，注意填写与**SubsId**参数关联的X号码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '139****1111',
          ),
        ),
        4 => 
        array (
          'name' => 'PhoneNoA',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置绑定关系中的A号码。

A 号码可设置为手机号码或固定电话，固定电话需要加区号，区号和号码中间不需要加连字符。

> 当**OperateType**指定为**updateNoA**时必填。',
            'type' => 'string',
            'required' => false,
            'example' => '139****0000',
          ),
        ),
        5 => 
        array (
          'name' => 'PhoneNoB',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置绑定关系中的B号码。

B 号码可设置为手机号码或固定电话，固定电话需要加区号，区号和号码中间不需要加连字符。

> 当**OperateType**指定为**updateNoB**时必填。',
            'type' => 'string',
            'required' => false,
            'example' => '138****0000',
          ),
        ),
        6 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置绑定关系中的G号码组ID。

> 当**OperateType**指定为**updateAxgGroup**时必填。',
            'type' => 'string',
            'required' => false,
            'example' => '200001234****',
          ),
        ),
        7 => 
        array (
          'name' => 'CallRestrict',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置单通呼叫限制。取值：
- **CONTROL_AX_DISABLE**：A号码无法呼叫X号码。
- **CONTROL_BX_DISABLE**：B号码无法呼叫X号码。
- **CONTROL_CLEAR_DISABLE**：清除呼叫限制。

> 当**OperateType**指定为**updateCallRestrict**时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'CONTROL_BX_DISABLE ',
          ),
        ),
        8 => 
        array (
          'name' => 'Expiration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重新设置绑定关系的过期时间。

> - **OperateType**为**updateExpire**时必填。
> - 过期时间必须晚于当前时间1分钟以上。',
            'type' => 'string',
            'required' => false,
            'example' => '2019-09-05 12:00:00',
          ),
        ),
        9 => 
        array (
          'name' => 'CallDisplayType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重置绑定关系中的号码显示逻辑。固定取值：**1**（主被叫显示中间号码X）。

> 由于运营商监管限制，暂时关闭透传功能。呼叫时，显示真实号码的设置不生效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重新设置绑定关系中的OutId。',
            'type' => 'string',
            'required' => false,
            'example' => 'abcdef',
          ),
        ),
        11 => 
        array (
          'name' => 'IsRecordingEnabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重新设置绑定关系中的录音状态。

取值：

- **true**：录音。

- **false**：不录音。

> 该参数没有默认值，不传该参数就不更新对应字段。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        12 => 
        array (
          'name' => 'OperateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '修改绑定关系的操作。取值：
- **updateNoA**：修改A号码。
- **updateNoB**：修改B号码。
- **updateExpire**：修改绑定关系有效期。
- **updateAxgGroup**：修改G号码组。
- **updateCallRestrict**：设置单通呼叫限制。
- **updateCallDisplayType**：更新呼叫显号逻辑。
- **updateOutId**：更新OutId字段。
- **updateIsRecordingEnabled**：更新绑定中录音状态。
- **updateAsr**：更新绑定中ASR状态。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'updateNoA',
          ),
        ),
        13 => 
        array (
          'name' => 'RingConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新绑定关系中的企业彩铃放音编码。

此参数请填写**铃音字段**和**彩铃编码**。

**铃音字段**取值：

AXB产品：
- AXB中，A号码打X的铃音设置：AXBRing_A
- AXB中，B号码打X的铃音设置：AXBRing_B
- AXB中，A号码拨打X接通后的铃音设置：AXBRing_A_PICKUP
- AXB中，B号码拨打X接通后的铃音设置：AXBRing_B_PICKUP

AXN产品（含AXN隐私号、AXN分机号）：
- AXN中，A号码打X接通前的铃音设置（有回拨号码）：AXNRing_AB
- AXN中，A号码打X接通前的铃音设置（无回拨号码）：AXNRing_A
- AXN中，N侧号码打X接通前的铃音设置：AXNRing_N
- AXN中，A号码打X接通后的铃音设置：AXNRing_A_PICKUP
- AXN中，N号码打X接通后的铃音设置：AXNRing_N_PICKUP

AXG产品：
- AXG中，A号码打X的铃音设置（有回拨号码）：AXGRing_AB
- AXG中，A号码打X的铃音设置（无回拨号码）：AXGRing_A
- AXG中，G组号码打X的铃音设置：AXGRing_G

**彩铃编码**：

在号码隐私保护控制台[企业彩铃管理](https://dyplsnext.console.aliyun.com/number-pool/ringtone?resType=1)页面获取企业彩铃编码。

**填写示例**：

如设置AXN分机号，A号码拨打X接通前的铃音（无回拨号码），填写："AXNRing_A": "1000****1"。

> 企业彩铃优先使用绑定级别设置的彩铃，如果未设置或设置未生效，则会使用号码池级别的彩铃音。',
            'type' => 'string',
            'required' => false,
            'example' => '{"AXBRing_B":"1000****1","AXBRing_A":"1000****1"}',
          ),
        ),
        14 => 
        array (
          'name' => 'ASRStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ASR状态。取值：

- **false**：关闭（默认值）
- **true**：开启

> 当OperateType为updateAsr时此参数必填。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        15 => 
        array (
          'name' => 'ASRModelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ASR模型ID。取值：
- 通用-电话-中文普通话模型 ID：7ee372834d2f4cc7ac0d0ab2d0ae1aac
- 通用-电话-中文粤语模型 ID：9b4afe3d224e4fa3bf963697113e2f77
- 通用-电话-地方口音模型 ID：3655a6cb94764145a1f9a38a3c3b3b4b

> 当ASRStatus为true时此参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => '7ee372834d2f4cc7ac0d0ab2d0ae1aac',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。

- 返回OK代表请求成功。
- 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '986BCB6D-C9BF-42F9-91CE-3A9901233D36',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"986BCB6D-C9BF-42F9-91CE-3A9901233D36\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateSubscriptionResponse>\\r\\n\\t<Message>OK</Message>\\r\\n\\t<RequestId>986BCB6D-C9BF-42F9-91CE-3A9901233D36</RequestId>\\r\\n\\t<Code>OK</Code>\\r\\n</UpdateSubscriptionResponse>","errorExample":""}]',
      'title' => '修改已绑定的号码',
      'summary' => '修改号码的绑定关系。',
      'description' => '### QPS限制
本接口的单用户QPS限制为10000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。

### PoolKey和ProductType限制
PoolKey和ProductType参数请至少填写一个，若两个参数都不填，调用接口时会报错。 建议原阿里大于客户填ProductType参数，阿里云用户填PoolKey参数。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnbindSubscription' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool?spm=a2c4g.11186623.0.0.7e6449bbtiHP8m)页面获取**号码池Key**。

> 当**ProductType**为空时必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'FC10000012345****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品类型。取值：
- **AXB_170**。
- **AXN_170**。
- **AXN_95**。
- **AXN\\_EXTENSION\\_REUSE**。

> - 适用于原阿里大于客户，阿里云用户可忽略。
> - 当**PoolKey**为空时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'AXB_170',
          ),
        ),
        2 => 
        array (
          'name' => 'SubsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定关系ID。

请登录号码隐私保护控制台，在[号码管理](https://dyplsnext.console.aliyun.com/number/list)页筛选号码，点击**详情**查看号码的绑定关系ID，或者在调用[BindAxb](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-bindaxb?spm=a2c4g.11186623.0.0.6a807e38uud6C5)等号码绑定API时查看返回参数中的**SubsId**。
> 在填写绑定关系ID时，注意填写与**SecretNo**参数关联的绑定关系ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1************2',
          ),
        ),
        3 => 
        array (
          'name' => 'SecretNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隐私号码。

调用[BindAXG](~~110249~~)等号码绑定接口时指定或自动分配的X号码。

登录号码隐私保护控制台，在[号码管理](https://dyplsnext.console.aliyun.com/number/list)页面获取X号码。
> 在填写X号码时，注意填写与**SubsId**参数关联的X号码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '139****1111',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。
* 返回OK代表请求成功。
* 其他错误码详见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '986BCB6D-C9BF-42F9-91CE-3A9901233D36',
              ),
              'ChargeId' => 
              array (
                'description' => '废弃参数。',
                'type' => 'string',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"986BCB6D-C9BF-42F9-91CE-3A9901233D36\\",\\n  \\"ChargeId\\": \\"true\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UnbindSubscriptionResponse>\\r\\n\\t<Message>OK</Message>\\r\\n\\t<RequestId>9B2757F9-8FD0-48B9-9640-EF54783A06C4</RequestId>\\r\\n\\t<ChargeId>true</ChargeId>\\r\\n\\t<Code>OK</Code>\\r\\n</UnbindSubscriptionResponse>","errorExample":""}]',
      'title' => '解除已绑定的号码',
      'summary' => '解除号码的绑定关系。',
      'description' => '- 在解绑前，建议您明确需解除绑定关系的隐私号码，即X号码。

- 释放号码前，需解除号码绑定关系。

- 您可以使用此接口解除号码绑定关系，也可以在控制台[号码管理](https://dyplsnext.console.aliyun.com/number/list)页面>**详情**>**解绑**>**确定**解除号码绑定关系。

### QPS 限制
本接口的单用户QPS限制为 5000 次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。

### PoolKey和ProductType限制
PoolKey和ProductType参数请至少填写一个，若两个参数都不填，调用接口时会报错。 建议原阿里大于用户填ProductType参数，现阿里云用户填PoolKey参数。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QuerySubscriptionDetail' => 
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
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool?spm=a2c4g.11186623.0.0.7e6449bbtiHP8m)页面获取**号码池Key**。

> 当**ProductType**为空时必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'FC10000012345****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品类型。取值：
- **AXB_170**。
- **AXN_170**。
- **AXN_95**。
- **AXN\\_EXTENSION\\_REUSE**。

> - 适用于原阿里大于客户，阿里云用户可忽略。
> - 当**PoolKey**为空时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'AXB_170',
          ),
        ),
        2 => 
        array (
          'name' => 'SubsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定关系ID。

请登录号码隐私保护控制台，在[号码管理](https://dyplsnext.console.aliyun.com/number/list)页面筛选号码，点击**详情**查看号码的绑定关系ID，或者在调用[BindAxb](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-bindaxb?spm=a2c4g.11186623.0.0.6a807e38uud6C5)等号码绑定API时查看返回参数中的**SubsId**。

> 在填写绑定关系ID时，注意填写与**PhoneNoX**参数关联的绑定关系ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '100000076879****',
          ),
        ),
        3 => 
        array (
          'name' => 'PhoneNoX',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定关系中的隐私号码，即X号码。

请登录号码隐私保护控制台，在[号码管理](https://dyplsnext.console.aliyun.com/number/list)页面获取X号码，或者在调用[BindAxb](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-bindaxb?spm=a2c4g.11186623.0.0.6a807e38uud6C5)等号码绑定接口时查看返回参数中的**SecretNo**。

> 在填写X号码时，注意填写与**SubsId**参数关联的X号码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '139****1111',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。
* 返回OK代表请求成功。
* 其他错误码详见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '066E6E47-04CB-4774-A976-4F73CB76D4A3',
              ),
              'SecretBindDetailDTO' => 
              array (
                'description' => '接口调用成功后返回的结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '该绑定关系的状态。取值：
- **0**：已失效。
- **1**：生效中。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'Extension' => 
                  array (
                    'description' => 'AXG分机号中的分机号码。',
                    'type' => 'string',
                    'example' => '130',
                  ),
                  'PhoneNoB' => 
                  array (
                    'description' => '绑定关系中的B号码。',
                    'type' => 'string',
                    'example' => '138****0000',
                  ),
                  'GroupId' => 
                  array (
                    'description' => '绑定关系中的G号码组ID，即GID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '200001234****',
                  ),
                  'NeedRecord' => 
                  array (
                    'description' => '是否对该绑定关系产生的所有通话，进行通话录音。取值：
- **false**：不录音
- **true**：录音',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ASRStatus' => 
                  array (
                    'description' => 'ASR状态。取值：

- **false**：关闭
- **true**：开启',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'GmtCreate' => 
                  array (
                    'description' => '绑定关系的创建时间。',
                    'type' => 'string',
                    'example' => '2019-03-05 12:00:00',
                  ),
                  'ExpireDate' => 
                  array (
                    'description' => '绑定关系的过期时间。',
                    'type' => 'string',
                    'example' => '2019-09-05 12:00:00',
                  ),
                  'SubsId' => 
                  array (
                    'description' => '绑定关系ID。',
                    'type' => 'string',
                    'example' => '100000076879****',
                  ),
                  'PhoneNoX' => 
                  array (
                    'description' => '绑定关系中的隐私号码，即X号码。',
                    'type' => 'string',
                    'example' => '139****1111',
                  ),
                  'CallRestrict' => 
                  array (
                    'description' => '单通呼叫限制的状态。如果没有设置单通呼叫限制，则不返回该参数。取值：
-  **CONTROL_AX_DISABLE**：A号码无法呼叫X号码。
-  **CONTROL_BX_DISABLE**：B号码无法呼叫X号码。',
                    'type' => 'string',
                    'example' => 'CONTROL_BX_DISABLE ',
                  ),
                  'ASRModelId' => 
                  array (
                    'description' => 'ASR模型ID。取值：

- 通用-电话-中文普通话模型 ID：7ee372834d2f4cc7ac0d0ab2d0ae1aac

- 通用-电话-中文粤语模型 ID：9b4afe3d224e4fa3bf963697113e2f77

- 通用-电话-地方口音模型 ID：3655a6cb94764145a1f9a38a3c3b3b4b',
                    'type' => 'string',
                    'example' => '7ee372834d2f4cc7ac0d0ab2d0ae1aac',
                  ),
                  'PhoneNoA' => 
                  array (
                    'description' => '绑定关系中的A号码。',
                    'type' => 'string',
                    'example' => '139****0000',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"066E6E47-04CB-4774-A976-4F73CB76D4A3\\",\\n  \\"SecretBindDetailDTO\\": {\\n    \\"Status\\": 1,\\n    \\"Extension\\": \\"130\\",\\n    \\"PhoneNoB\\": \\"138****0000\\",\\n    \\"GroupId\\": 0,\\n    \\"NeedRecord\\": true,\\n    \\"ASRStatus\\": true,\\n    \\"GmtCreate\\": \\"2019-03-05 12:00:00\\",\\n    \\"ExpireDate\\": \\"2019-09-05 12:00:00\\",\\n    \\"SubsId\\": \\"100000076879****\\",\\n    \\"PhoneNoX\\": \\"139****1111\\",\\n    \\"CallRestrict\\": \\"CONTROL_BX_DISABLE \\",\\n    \\"ASRModelId\\": \\"7ee372834d2f4cc7ac0d0ab2d0ae1aac\\",\\n    \\"PhoneNoA\\": \\"139****0000\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QuerySubscriptionDetailResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <RequestId>066E6E47-04CB-4774-A976-4F73CB76D4A3</RequestId>\\n    <SecretBindDetailDTO>\\n        <Status>1</Status>\\n        <Extension>130</Extension>\\n        <PhoneNoB>13900002222</PhoneNoB>\\n        <GroupId>2000000130001</GroupId>\\n        <NeedRecord>true</NeedRecord>\\n        <ASRStatus>true</ASRStatus>\\n        <GmtCreate>2019-03-05 12:00:00</GmtCreate>\\n        <ExpireDate>2019-09-05 12:00:00</ExpireDate>\\n        <SubsId>100000076879****</SubsId>\\n        <PhoneNoX>13900001234</PhoneNoX>\\n        <CallRestrict>CONTROL_BX_DISABLE </CallRestrict>\\n        <ASRModelId>123456</ASRModelId>\\n        <PhoneNoA>13900001111</PhoneNoA>\\n    </SecretBindDetailDTO>\\n</QuerySubscriptionDetailResponse>","errorExample":""}]',
      'title' => '查询号码绑定详情',
      'summary' => '查询号码的绑定详情。获取号码绑定关系状态、分机号码、是否录音、ASR状态等信息。',
      'description' => '查询前，建议您先明确需查询的隐私号码，即X号码，且该号码有绑定关系。

### QPS限制 
本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。

### PoolKey和ProductType限制
PoolKey和ProductType参数请至少填写一个，若两个参数都不填，调用接口时会报错。
建议原阿里大于用户填ProductType参数，阿里云用户填PoolKey参数。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QuerySubsId' => 
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
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'FC10000012345****',
          ),
        ),
        1 => 
        array (
          'name' => 'PhoneNoX',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定关系中的隐私号码，即X号码。

请登录号码隐私保护控制台，在[号码管理](https://dyplsnext.console.aliyun.com/number/list)页面获取X号码，或者在调用[BindAxb](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-bindaxb?spm=a2c4g.11186623.0.0.6a807e38uud6C5)等号码绑定接口时查看返回参数中的**SecretNo**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '139****1111',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。返回OK代表请求成功。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E7F99446-8191-43C0-99B5-F58A6AEAD779',
              ),
              'SubsId' => 
              array (
                'description' => '绑定关系ID。',
                'type' => 'string',
                'example' => '11111111****',
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
            'errorCode' => 'POOLKEY_NOT_EXIST',
            'errorMessage' => 'poolKey not exsit.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"E7F99446-8191-43C0-99B5-F58A6AEAD779\\",\\n  \\"SubsId\\": \\"11111111****\\"\\n}","errorExample":""},{"type":"xml","example":"<QuerySubsIdResponse>\\n\\t<Message>OK</Message>\\n\\t<SubsId>117809</SubsId>\\n\\t<RequestId>F3BC6628-7976-41BA-87D0-D152BAB2A9C8</RequestId>\\n\\t<Code>OK</Code>\\n</QuerySubsIdResponse>","errorExample":""}]',
      'title' => '查询号码绑定ID',
      'summary' => '查询绑定关系的唯一标识SubsId。',
      'description' => '- 支持根据X号码查询绑定关系的唯一标识SubsId。
- 查询前，建议您先明确需查询的隐私号码，即X号码。
- 在AXB中间号、AXN分机号场景中，同一个X号码可能存在多组绑定关系，查询结果会为多条，若X号码无绑定关系，查询结果会为空字符串。

### QPS 限制
本接口的单用户QPS限制为 1000 次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QuerySecretNoDetail' => 
    array (
      'summary' => '查询隐私号码的属性信息。',
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
          'name' => 'SecretNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隐私号码，即X号码。

请登录号码隐私保护控制台，在[号码管理](https://dyplsnext.console.aliyun.com/number/list)页面获取X号码，或者在调用[BindAxb](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-bindaxb?spm=a2c4g.11186623.0.0.6a807e38uud6C5)等号码绑定接口时查看返回参数中的**SecretNo**。',
            'type' => 'string',
            'required' => true,
            'example' => '1390000****',
          ),
        ),
        1 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => true,
            'example' => 'FC2258****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。

- 返回OK代表请求成功。
- 其他错误码详见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '066E6E47-04CB-4774-A976-4F73CB76D4A3',
              ),
              'SecretNoInfoDTO' => 
              array (
                'description' => '号码属性。',
                'type' => 'object',
                'properties' => 
                array (
                  'PurchaseTime' => 
                  array (
                    'description' => '号码购买时间。',
                    'type' => 'string',
                    'example' => '2021-12-03 15:19:27',
                  ),
                  'Vendor' => 
                  array (
                    'description' => '归属运营商。取值：

- **1**：中国移动
- **2**：中国联通
- **3**：中国电信',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'Province' => 
                  array (
                    'description' => '省份。',
                    'type' => 'string',
                    'example' => '陕西',
                  ),
                  'City' => 
                  array (
                    'description' => '城市。',
                    'type' => 'string',
                    'example' => '西安',
                  ),
                  'SecretStatus' => 
                  array (
                    'description' => '号码状态。取值：

- **0**：未绑定。
- **1**：已绑定。
- **2**：已锁定。
- **3**：已冻结。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'CertifyStatus' => 
                  array (
                    'description' => '号码认证状态。取值：

- **0**：未认证。
- **1**：已认证。',
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
            'errorCode' => 'FlowLimited',
            'errorMessage' => 'The operation is denied due to flow control.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"066E6E47-04CB-4774-A976-4F73CB76D4A3\\",\\n  \\"SecretNoInfoDTO\\": {\\n    \\"PurchaseTime\\": \\"2021-12-03 15:19:27\\",\\n    \\"Vendor\\": 1,\\n    \\"Province\\": \\"陕西\\",\\n    \\"City\\": \\"西安\\",\\n    \\"SecretStatus\\": 0,\\n    \\"CertifyStatus\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QuerySecretNoDetailResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <RequestId>066E6E47-04CB-4774-A976-4F73CB76D4A3</RequestId>\\n    <SecretNoInfoDTO>\\n        <PurchaseTime>2021-12-03 15:19:27</PurchaseTime>\\n        <Vendor>1</Vendor>\\n        <Province>陕西省</Province>\\n        <City>西安</City>\\n        <SecretStatus>0</SecretStatus>\\n        <CertifyStatus>0</CertifyStatus>\\n    </SecretNoInfoDTO>\\n</QuerySecretNoDetailResponse>","errorExample":""}]',
      'title' => '查询隐私号码属性',
      'description' => '- 支持根据X号码获取号码的购买时间、归属运营商、省份、城市、状态等信息。
- 查询前，建议您先明确需查询的隐私号码，即X号码。

### QPS限制
本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，请合理调用。',
    ),
    'CreateAxgGroup' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => true,
            'example' => 'FC10000012345****',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'G号码组名称。如果未指定G号码组名称，将以G号码组的ID作为名称。

> 支持中文、英文和特殊字符（例如：!@#$^_"等），长度不超过16个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '测试分组',
          ),
        ),
        2 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'G号码组的备注信息。

> 支持中文、英文和特殊字符（例如：!@#$^_"等），长度不超过50个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '测试用分组',
          ),
        ),
        3 => 
        array (
          'name' => 'Numbers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '向新建的G号码组中添加的电话号码。多个号码之间用英文逗号（,）分隔，创建时最多添加200个号码。',
            'type' => 'string',
            'required' => false,
            'example' => '1390000****,1380000****	',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。
* 返回OK代表请求成功。
* 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '635C0FDA-9EBC-43D7-B368-9F583C08A126',
              ),
              'GroupId' => 
              array (
                'description' => '新建的G号码组的ID，即GID。通过接口[BindAXG](~~110249~~)绑定号码时需要输入此参数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200001234****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"635C0FDA-9EBC-43D7-B368-9F583C08A126\\",\\n  \\"GroupId\\": 0\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateAxgGroupResponse>\\r\\n\\t<Message>OK</Message>\\r\\n\\t<RequestId>635C0FDA-9EBC-43D7-B368-9F583C08A126</RequestId>\\r\\n\\t<Code>OK</Code>\\r\\n\\t<GroupId>2000000000001</GroupId>\\r\\n</CreateAxgGroupResponse>","errorExample":""}]',
      'title' => '创建G号码组',
      'summary' => '创建G号码组。仅AXG隐私号类型的号码池支持设置G号码组。',
      'description' => '- 在AXG号码绑定前，除了购买X号码以外，还必须创建一个G号码组，并在G号码组中添加号码。如果创建G号码组时没有同时添加号码，还可以调用[OperateAxgGroup](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-operateaxggroup)接口添加号码。

- 您可以使用此接口创建G号码组，也可以登录控制台，在[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面筛选出**AXG隐私号**的号码池，点击**G号码组管理**>**新增G号码组**创建G号码组。

- 在使用此接口前，请确保您已经创建过AXG隐私号类型的号码池，若未创建，可参考：[创建号码池](https://help.aliyun.com/zh/pnp/user-guide/manage-phone-number-pools?spm=a2c4g.11186623.0.0.afd858d637oTA2)进行操作。

>单个号池最多添加的G号码组为2000个。

### QPS 限制
本接口的单用户QPS限制为 5000 次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OperateAxgGroup' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FC10000012345****',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXG中的G组ID，即GID。

可以通过以下方式查看GID：
- 登录号码隐私保护控制台，在[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面筛选出**AXG隐私号**，单击**G号码组管理**即可查看所有G号码组的GID。
- 如果G号码组是通过接口[CreateAxgGroup](~~110250~~)创建的，则接口的返回参数**GroupID**就是此处的请求参数**GroupID**。

> G号码组中必须有一个及以上的电话号码。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '200001234****',
          ),
        ),
        2 => 
        array (
          'name' => 'OperateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对G号码组的操作类型，取值：
- **addNumbers**：添加号码。
- **deleteNumbers**：删除号码。
- **overwriteNumbers**：全量替换号码。会将G号码组中原有的电话号码全部删除，并重新添加号码。

> - 每次添加号码时，最多添加200个号码。
> - 全量替换号码时，G号码组中原有的号码不能超过200个。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'addNumbers',
          ),
        ),
        3 => 
        array (
          'name' => 'Numbers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '受到操作的电话号码。

多个号码之间用英文逗号（,）分隔，每次最多操作200个号码。

> - 当**OperateType**参数指定为**addNumbers**时，将**Numbers**参数填写的电话号码**添加**到G号码组中。
> - 当**OperateType**参数指定为**deleteNumbers**时，将**Numbers**参数填写的电话号码从G号码组中**删除**。
> - 当**OperateType**参数指定为**overwriteNumbers**时，使用**Numbers**参数填写的电话号码**全量替换**G号码组中原有的电话号码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1390000****,1380000****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。
* 返回OK代表请求成功。
* 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '986BCB6D-C9BF-42F9-91CE-3A9901233D36',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"986BCB6D-C9BF-42F9-91CE-3A9901233D36\\"\\n}","errorExample":""},{"type":"xml","example":"<OperateAxgGroupResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <RequestId>986BCB6D-C9BF-42F9-91CE-3A9901233D36</RequestId>\\n</OperateAxgGroupResponse>","errorExample":""}]',
      'title' => '修改G号码组',
      'summary' => '修改G号码组中的号码，可以对号码进行添加、删除、全量替换操作。',
      'description' => '- 创建G号码组之后，可以通过此接口修改G号码组中的号码，例如向G号码组中增加号码、删除号码、全量替换号码。

- 您可以使用此接口修改G号码组中的号码，也可以登录控制台，在[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面筛选出**AXG隐私号**类型的号码池，单击**G号码组管理**>**G组号码管理**进行修改。

- 在使用此接口前，建议您先明确需要修改的G号码组及该号码组归属的号码池。

### QPS限制
本接口的单用户QPS限制为5000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteAxgGroup' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FC2235****',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AXG中的G组ID，即GID。

- 登录号码隐私保护控制台，在[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面筛选出**AXG隐私号**，单击**G号码组管理**即可查看所有G号码组的GID。
- 如果G号码组是通过接口[CreateAxgGroup](~~110250~~)创建的，则接口的返回参数**GroupID**就是此处的请求参数**GroupID**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '200001234****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。
* 返回OK代表请求成功。
* 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '返回结果的提示信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的标识符。',
                'type' => 'string',
                'example' => '9297B722-A016-43FB-B51A-E54050D9369D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"9297B722-A016-43FB-B51A-E54050D9369D\\"\\n}","type":"json"}]',
      'title' => '删除G号码组',
      'summary' => '删除G号码组。仅AXG隐私号类型的号码池支持设置G号码组。',
      'description' => '- G号码组删除后不可恢复，请谨慎操作。

- 在调用此接口前，建议您先确认需要删除的G号码组及该号码组归属的号码池。

- 不支持删除存在绑定关系的G号码组，删除G号码组前，建议您先解除AXG隐私号与该号码组的绑定关系。可登录控制台，在[号码管理](https://dyplsnext.console.aliyun.com/number/list)页面，筛选**AXG隐私号**，单击**详情**>**解绑**进行操作，或者调用[UnbindSubscription](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-unbindsubscription)接口解除号码的绑定关系。

- 删除G号码组时，如果G号码组内存在号码，也会一并删除。

### QPS 限制
本接口的单用户QPS限制为 5000 次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'QueryRecordFileDownloadUrl' => 
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
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。

> 当**ProductType**为空时必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'FC10000012345****',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品类型。取值：
- **AXB_170**。
- **AXN_170**。
- **AXN_95**。
- **AXN\\_EXTENSION\\_REUSE**。

> - 适用于原阿里大于客户，阿里云用户可忽略。
> - 当**PoolKey**为空时必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'AXB_170',
          ),
        ),
        2 => 
        array (
          'name' => 'CallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '呼叫记录ID，用于标识一条通话记录。

获取方式如下：
- 在控制台[呼叫记录查询](https://dyplsnext.console.aliyun.com/call)页面进行查询，获取**呼叫记录ID**。
- 在**录音状态报告**回执消息中查看**call_id**字段。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '416*********bd50',
          ),
        ),
        3 => 
        array (
          'name' => 'CallTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '呼叫记录中的呼叫发起时间。

获取方式如下：

- 在控制台[呼叫记录查询](https://dyplsnext.console.aliyun.com/call)页面进行查询，获取**呼叫时间**列的**呼叫发起**时间。
- 在**录音状态报告**回执消息中查看**call_time**字段。

> **CallTime**不支持传入时间戳格式的参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2019-03-05 12:00:00	',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。
* 返回OK代表请求成功。
* 其他错误码详见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AB3CEF7-DCBE-488C-9C33-D180982CE031',
              ),
              'DownloadUrl' => 
              array (
                'description' => '录音文件的下载链接URL。URL链接的有效期为2小时。',
                'type' => 'string',
                'example' => 'http://secret-axb-reco****cn-shanghai.aliyuncs.com/1000000820******_66647243838006067251************.mp3?Expires=1551******&OSSAccessKeyId=LTAIP00vvvv****v&Signature=tK6Yq9KusU4n********7lg4/WmEA%3D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"1AB3CEF7-DCBE-488C-9C33-D180982CE031\\",\\n  \\"DownloadUrl\\": \\"http://secret-axb-reco****cn-shanghai.aliyuncs.com/1000000820******_66647243838006067251************.mp3?Expires=1551******&OSSAccessKeyId=LTAIP00vvvv****v&Signature=tK6Yq9KusU4n********7lg4/WmEA%3D\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryRecordFileDownloadUrlResponse>\\n<RequestId>1AB3CEF7-DCBE-488C-9C33-D180982CE031</RequestId>\\n<Message>OK</Message>\\n<Code>OK</Code>\\n<DownloadUrl>http://secret-axb-reco****cn-shanghai.aliyuncs.com/1000000820257625_66647243838006067251551752068865.mp3?Expires=1551759607&amp;OSSAccessKeyId=LTAIP00vvvvvvvvv&amp;Signature=tK6Yq9KusU4n%2BZQWXI7lg4/WmEA%3D</DownloadUrl>\\n</QueryRecordFileDownloadUrlResponse>","errorExample":""}]',
      'title' => '获取录音文件的下载链接',
      'summary' => '根据号码池Key、呼叫记录ID、呼叫发起时间等获取录音文件的下载链接。',
      'description' => '- 如果在绑定关系中开启了录音功能，该绑定关系产生的所有通话均会被录音，可以通过此接口获取录音文件的下载链接，下载录音文件。

- 您可以使用此接口获取录音文件的下载链接进行录音文件下载，也可以在控制台[呼叫记录查询](https://dyplsnext.console.aliyun.com/call)页面查询呼叫记录，单击**录音文件操作**列的**下载**下拉项，单击**录音音频**进行录音文件下载。

- 在使用此接口前，建议您先明确需要获取的录音文件对应的呼叫记录。
您可以在控制台[呼叫记录查询](https://dyplsnext.console.aliyun.com/call)页面进行查询，获取呼叫记录ID、呼叫发起时间等信息，或者参考[回执消息简介与配置流程](https://help.aliyun.com/zh/pnp/developer-reference/introduction-to-receipt-messages-and-receipt-message-configurations?spm=a2c4g.11186623.0.0.7b2d7fcbozUnoz)，订阅**回执消息类型**为**录音状态报告**（SecretRecording）的消息，该报告消息中的结果字段可以作为此接口的入参。

### QPS 限制
本接口的单用户QPS限制为 3000 次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。

### PoolKey和ProductType限制
PoolKey和ProductType参数请至少填写一个，若两个参数都不填，调用接口时会报错。建议原阿里大于用户填ProductType参数，阿里云用户填PoolKey参数。

### 获取录音文件步骤：
1. 在更新或绑定关系接口中选择入参需要录音。
2. 在控制台中订阅录音消息回执。
3. 录音消息回执返回后调用QueryRecordFileDownloadUrl接口下载录音。

> - URL链接的有效期为2小时。获取下载链接后请尽快下载录音文件。
> - 录音文件的存储周期是30天，仅支持下载30天内通话记录的录音文件。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetTotalPublicUrl' => 
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
          'name' => 'CheckSubs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否需要校验绑定关系标识。
取值：

**true**：需要校验。

**false**：不需要校验。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'PartnerKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FC12256****',
          ),
        ),
        2 => 
        array (
          'name' => 'CallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '呼叫记录ID，用于标识一条通话记录。

获取方式如下：
- 在控制台[呼叫记录查询](https://dyplsnext.console.aliyun.com/call)页面进行查询，获取**呼叫记录ID**。
- 在**录音状态报告**回执消息中查看**call_id**字段。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2568900****',
          ),
        ),
        3 => 
        array (
          'name' => 'CallTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '呼叫记录中的呼叫发起时间。

获取方式如下：

- 在控制台[呼叫记录查询](https://dyplsnext.console.aliyun.com/call)页面进行查询，获取**呼叫时间**列的**呼叫发起**时间。
- 在**录音状态报告**回执消息中查看**call_time**字段。

> **CallTime**不支持传入时间戳格式的参数。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2019-03-05 12:00:00	',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。

- 返回OK代表请求成功。
- 其他错误码详见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1AB3CEF7-DCBE-488C-9C33-D180982CE031',
              ),
              'Data' => 
              array (
                'description' => '录音文件下载地址。',
                'type' => 'object',
                'properties' => 
                array (
                  'RingPublicUrl' => 
                  array (
                    'description' => '响铃放音的录音下载URL。

> URL的有效期为30天。',
                    'type' => 'string',
                    'example' => 'http://secret-ab-reco****cn-shanghai.aliyuncs.com/10000008********_66647243838006067***************.mp3?Expires=1551******&OSSAccessKeyId=LTAIP00vvv******&Signature=tK6Yq9KusU4n***************EA%3D',
                  ),
                  'PhonePublicUrl' => 
                  array (
                    'description' => '通话录音的下载URL。

> URL的有效期为30天。',
                    'type' => 'string',
                    'example' => 'http://secret-ab-reco****cn-shanghai.aliyuncs.com/10000008********_66647243838006067***************.mp3?Expires=1551******&OSSAccessKeyId=LTAIP00vvv******&Signature=tK6Yq9KusU4n***************EA%3D',
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
            'errorCode' => 'FlowLimited',
            'errorMessage' => 'The operation is denied due to flow control.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"1AB3CEF7-DCBE-488C-9C33-D180982CE031\\",\\n  \\"Data\\": {\\n    \\"RingPublicUrl\\": \\"http://secret-ab-reco****cn-shanghai.aliyuncs.com/10000008********_66647243838006067***************.mp3?Expires=1551******&OSSAccessKeyId=LTAIP00vvv******&Signature=tK6Yq9KusU4n***************EA%3D\\",\\n    \\"PhonePublicUrl\\": \\"http://secret-ab-reco****cn-shanghai.aliyuncs.com/10000008********_66647243838006067***************.mp3?Expires=1551******&OSSAccessKeyId=LTAIP00vvv******&Signature=tK6Yq9KusU4n***************EA%3D\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTotalPublicUrlResponse>\\n<Message>OK</Message>\\n<RequestId>1AB3CEF7-DCBE-488C-9C33-D180982CE031</RequestId>\\n<Data>\\n    <RingPublicUrl>http://secret-axb-reco****cn-shanghai.aliyuncs.com/1000000820257625_66647243838006067251551752068865.mp3?Expires=1551759607&amp;OSSAccessKeyId=LTAIP00vvvvvvvvv&amp;Signature=tK6Yq9KusU4n%2BZQWXI7lg4/WmEA%3D</RingPublicUrl>\\n    <PhonePublicUrl>http://secret-axb-reco****cn-shanghai.aliyuncs.com/1000000820257625_66647243838006067251551752068865.mp3?Expires=1551759607&amp;OSSAccessKeyId=LTAIP00vvvvvvvvv&amp;Signature=tK6Yq9KusU4n%2BZQWXI7lg4/WmEA%3D</PhonePublicUrl>\\n</Data>\\n<Code>OK</Code>\\n</GetTotalPublicUrlResponse>","errorExample":""}]',
      'title' => '获取响铃放音的录音下载链接',
      'summary' => '获取响铃放音的录音下载链接。',
      'description' => '- 您可以使用此接口获取响铃放音的录音下载链接来下载响铃放音的录音。
- 若您订阅了**回执消息类型**为**录音状态报告**（SecretRecording）的消息，该报告消息中的结果字段可以作为此接口的入参，您可以参考[回执消息简介与配置流程](https://help.aliyun.com/zh/pnp/developer-reference/introduction-to-receipt-messages-and-receipt-message-configurations)进行订阅。
- 新的呼叫记录需要一段时间生成响铃放音的录音，您可以等待几分钟再调用此接口查询响铃放音的录音下载链接。

### QPS限制
本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetSecretAsrDetail' => 
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
          'name' => 'CallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '呼叫记录ID，用于标识一条通话记录。

获取方式如下：
- 在控制台[呼叫记录查询](https://dyplsnext.console.aliyun.com/call)页面进行查询，获取**呼叫记录ID**。
- 在**录音状态报告**回执消息中查看**call_id**字段。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '225625****',
          ),
        ),
        1 => 
        array (
          'name' => 'CallTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '呼叫记录中的呼叫发起时间。

获取方式如下：

- 在控制台[呼叫记录查询](https://dyplsnext.console.aliyun.com/call)页面进行查询，获取**呼叫时间**列的**呼叫发起**时间。
- 在**录音状态报告**回执消息中查看**call_time**字段。

> **CallTime**不支持传入时间戳格式的参数。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2019-03-05 12:00:00',
          ),
        ),
        2 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FC2267****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '错误码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => 'ASR详情实体类信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'RequestId' => 
                  array (
                    'description' => '请求ID。',
                    'type' => 'string',
                    'example' => '8d2329d407a83447a83be441681f4872ac74nE',
                  ),
                  'BusinessId' => 
                  array (
                    'description' => '业务流程的ID。',
                    'type' => 'string',
                    'example' => '435ee78c7a******@!FC100000074******@!2020061522****',
                  ),
                  'BusinessKey' => 
                  array (
                    'description' => '业务关键字。',
                    'type' => 'string',
                    'example' => 'JCGTncltuNao****',
                  ),
                  'Code' => 
                  array (
                    'description' => '状态码。21050000表示请求成功。',
                    'type' => 'string',
                    'example' => '21050000',
                  ),
                  'Msg' => 
                  array (
                    'description' => '描述信息。',
                    'type' => 'string',
                    'example' => 'SUCCESS',
                  ),
                  'BizDuration' => 
                  array (
                    'description' => '识别的音频文件总时长，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10944',
                  ),
                  'Type' => 
                  array (
                    'description' => '类型。',
                    'type' => 'string',
                    'example' => 'asrResult',
                  ),
                  'Sentences' => 
                  array (
                    'description' => 'ASR识别结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'ASR识别结果。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndTime' => 
                        array (
                          'description' => '该句的结束时间偏移，单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1770',
                        ),
                        'SilenceDuration' => 
                        array (
                          'description' => '本句和上一句之间的静音时长，单位：秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'BeginTime' => 
                        array (
                          'description' => '该句的起始时间偏移，单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1020',
                        ),
                        'Text' => 
                        array (
                          'description' => '该句的识别文本结果。',
                          'type' => 'string',
                          'example' => '您好',
                        ),
                        'ChannelId' => 
                        array (
                          'description' => '该句所属音轨ID。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'SpeechRate' => 
                        array (
                          'description' => '本句的平均语速，单位为每分钟字数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '80',
                        ),
                        'EmotionValue' => 
                        array (
                          'description' => '情绪能量值，取值：**1~10**，值越高情绪越强烈。',
                          'type' => 'string',
                          'example' => '5.7',
                        ),
                      ),
                    ),
                  ),
                ),
                'example' => '{"bizDuration":10944,"businessId":"435ee78c7a019650@!FC100000074672458@!20200615225802","businessKey":"JCGTncltuNaolegJ","code":"21050000","msg":"SUCCESS","requestId":"8d2329d407a83447a83be441681f4872ac74nE","sentences":[{"beginTime":1020,"channelId":0,"emotionValue":"5.7","endTime":1770,"silenceDuration":"0","speechRate":"80","text":"喂"}],"success":true,"type":"asrResult"}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
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
            'errorCode' => 'isp.RAM_PERMISSION_DENY',
            'errorMessage' => 'RAM permission is denied.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"RequestId\\": \\"8d2329d407a83447a83be441681f4872ac74nE\\",\\n    \\"BusinessId\\": \\"435ee78c7a******@!FC100000074******@!2020061522****\\",\\n    \\"BusinessKey\\": \\"JCGTncltuNao****\\",\\n    \\"Code\\": \\"21050000\\",\\n    \\"Msg\\": \\"SUCCESS\\",\\n    \\"BizDuration\\": 10944,\\n    \\"Type\\": \\"asrResult\\",\\n    \\"Sentences\\": [\\n      {\\n        \\"EndTime\\": 1770,\\n        \\"SilenceDuration\\": 0,\\n        \\"BeginTime\\": 1020,\\n        \\"Text\\": \\"您好\\",\\n        \\"ChannelId\\": 0,\\n        \\"SpeechRate\\": 80,\\n        \\"EmotionValue\\": \\"5.7\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\"\\n}","errorExample":""},{"type":"xml","example":"<GetSecretAsrDetailResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <Data>\\n        <RequestId>8d2329d407a83447a83be441681f4872ac74nE</RequestId>\\n        <BusinessId>435ee78c7a019650@!FC100000074672458@!2020061522****</BusinessId>\\n        <BusinessKey>JCGTncltuNao****</BusinessKey>\\n        <Code>21050000</Code>\\n        <Msg>SUCCESS</Msg>\\n        <BizDuration>10944</BizDuration>\\n        <Type>asrResult</Type>\\n        <Sentences>\\n            <EndTime>1770</EndTime>\\n            <SilenceDuration>0</SilenceDuration>\\n            <BeginTime>1020</BeginTime>\\n            <Text>您好</Text>\\n            <ChannelId>0</ChannelId>\\n            <SpeechRate>80</SpeechRate>\\n            <EmotionValue>5.7</EmotionValue>\\n        </Sentences>\\n    </Data>\\n    <RequestId>F655A8D5-B967-440B-8683-DAD6FF8DE990</RequestId>\\n</GetSecretAsrDetailResponse>","errorExample":""}]',
      'title' => '获取ASR识别结果详情',
      'summary' => '获取ASR识别结果详情。',
      'description' => '- 为确保您正常获取ASR识别结果，请使用此接口前，确认ASR服务功能开启。您可以调用[QuerySubscriptionDetail](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-querysubscriptiondetail)接口查询号码绑定详情，查看返回结果的**ASRStatus**参数。若未开启，可以调用[UpdateSubscription](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-updatesubscription)，修改**ASRStatus**参数为**true**。

- 若您订阅了**回执消息类型**为**录音状态报告**（SecretRecording）的消息，该报告消息中的结果字段可以作为此接口的入参，您可以参考[回执消息简介与配置流程](https://help.aliyun.com/zh/pnp/developer-reference/introduction-to-receipt-messages-and-receipt-message-configurations)进行订阅。

- 新的呼叫记录需要一段时间进行ASR识别，请您等待十几分钟再调用此接口查询。

### QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddSecretBlacklist' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FC2235****',
          ),
        ),
        1 => 
        array (
          'name' => 'BlackNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '黑名单号码。根据**BlackType**参数值决定取值类型：

- **点对点黑名单**：一对号码，用英文冒号（:）分隔。
- **号池黑名单**：单个号码。

>（*）不是通配符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1825638****:1825248****',
          ),
        ),
        2 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '黑名单备注。',
            'type' => 'string',
            'required' => false,
            'example' => '黑名单备注',
          ),
        ),
        3 => 
        array (
          'name' => 'BlackType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '黑名单类型。取值：

- **POINT_TO_POINT_BLACK**：点对点黑名单。
- **PARTNER_GLOBAL_NUMBER_BLACK**：号码池黑名单。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'POINT_TO_POINT_BLACK',
          ),
        ),
        4 => 
        array (
          'name' => 'WayControl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '呼叫方向控制。取值：

- **PHONEA_REJECT**：BlackNo中第一个号码可以呼叫第二个号码，第二个号码不能呼叫第一个。
- **PHONEB_REJECT**：BlackNo中第一个号码不可呼叫第二个号码，第二个号码可呼叫第一个号码。
- **不填**：BlackNo中两个号码不可相互呼叫。

>只有在点对点黑名单时候才有用。',
            'type' => 'string',
            'required' => false,
            'example' => 'PHONEA_REJECT',
            'enum' => 
            array (
              0 => 'DUPLEX_REJECT',
              1 => 'PHONEA_REJECT',
              2 => 'PHONEB_REJECT',
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
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。

- 返回OK代表请求成功。
- 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
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
            'errorCode' => 'RamPermissionDenied',
            'errorMessage' => 'RAM permission is denied.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\"\\n}","errorExample":""},{"type":"xml","example":"<AddSecretBlacklistResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <RequestId>F655A8D5-B967-440B-8683-DAD6FF8DE990</RequestId>\\n</AddSecretBlacklistResponse>","errorExample":""}]',
      'title' => '添加黑名单',
      'summary' => '向号码池添加黑名单。仅AXB、AXN隐私号、AXN分机号、95AXN隐私号类型的号码池支持设置黑名单。',
      'description' => '- 此接口不是批处理接口，仅支持一次添加一组**点对点黑名单**号码，或者一个**号池黑名单**号码。
- 若需删除黑名单，可调用[DeleteSecretBlacklist](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-deletesecretblacklist)接口。


### QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteSecretBlacklist' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FC1232****',
          ),
        ),
        1 => 
        array (
          'name' => 'BlackNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '黑名单号码。根据**BlackType**参数值决定取值类型：

- **点对点黑名单**：一对号码，用英文冒号（:）分隔。
- **号池黑名单**：单个号码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1825****383:1825****483',
          ),
        ),
        2 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '黑名单备注。',
            'type' => 'string',
            'required' => false,
            'example' => '黑名单备注',
          ),
        ),
        3 => 
        array (
          'name' => 'BlackType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '黑名单类型。取值：

- **POINT\\_TO\\_POINT_BLACK**：点对点黑名单。
- **PARTNER\\_GLOBAL\\_NUMBER\\_BLACK**：号池黑名单。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'POINT_TO_POINT_BLACK',
          ),
        ),
        4 => 
        array (
          'name' => 'WayControl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '呼叫方向控制。取值：

- **PHONEA\\_REJECT**：BlackNo中第一个号码可以呼叫第二个号码，第二个号码不能呼叫第一个。

- **PHONEB\\_REJECT**：BlackNo中第一个号码不可呼叫第二个号码，第二个号码可呼叫第一个号码。

- **不填**：BlackNo中两个号码不可相互呼叫。',
            'type' => 'string',
            'required' => false,
            'example' => 'PHONEA_REJECT',
            'enum' => 
            array (
              0 => 'DUPLEX_REJECT',
              1 => 'PHONEA_REJECT',
              2 => 'PHONEB_REJECT',
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
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。

- 返回OK代表请求成功，
- 其他错误码详见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
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
            'errorCode' => 'RamPermissionDenied',
            'errorMessage' => 'RAM permission is denied.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSecretBlacklistResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <RequestId>F655A8D5-B967-440B-8683-DAD6FF8DE990</RequestId>\\n</DeleteSecretBlacklistResponse>","errorExample":""}]',
      'title' => '删除黑名单',
      'summary' => '删除号码池的黑名单。仅AXB、AXN隐私号、AXN分机号、95AXN隐私号类型的号码池支持设置黑名单。',
      'description' => '- 此接口不是批处理接口，仅支持一次删除一组点对点黑名单号码，或者一个号池黑名单号码。
- 若需添加黑名单，可调用[AddSecretBlacklist](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-addsecretblacklist)接口。

### QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OperateBlackNo' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => true,
            'example' => 'FC123456****',
          ),
        ),
        1 => 
        array (
          'name' => 'BlackNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要操作的黑名单号码。
> 仅支持操作**号池黑名单**类型的号码。',
            'type' => 'string',
            'required' => true,
            'example' => '150****0000',
          ),
        ),
        2 => 
        array (
          'name' => 'OperateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '黑名单操作类型。取值：

- **AddBlack**：新增黑名单。
- **DeleteBlack**：删除黑名单。',
            'type' => 'string',
            'required' => true,
            'example' => 'AddBlack',
          ),
        ),
        3 => 
        array (
          'name' => 'Tips',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'abcdef',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。

- 返回OK代表请求成功。
- 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D1AEB96-96D0-454E-B0DC-AE2A8DF08020',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"2D1AEB96-96D0-454E-B0DC-AE2A8DF08020\\"\\n}","errorExample":""},{"type":"xml","example":"<OperateBlackNoResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <RequestId>2D1AEB96-96D0-454E-B0DC-AE2A8DF08020</RequestId>\\n</OperateBlackNoResponse>","errorExample":""}]',
      'title' => '新增或删除黑名单',
      'summary' => '新增或删除号池黑名单。仅AXN隐私号、AXN分机号、95AXN隐私号类型的号码池支持设置黑名单。',
      'description' => '- 此接口仅支持新增或删除**号池黑名单**类型的黑名单号码。

- 此接口不是批处理接口，仅支持一次新增或删除一个号池黑名单号码。

- 可调用[AddSecretBlacklist](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-addsecretblacklist)添加**点对点黑名单**号码，调用[DeleteSecretBlacklist](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-deletesecretblacklist)删除**点对点黑名单**号码。

### QPS限制
本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QuerySecretNoRemain' => 
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
          'name' => 'SpecId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码类型。取值：
- **1**：虚商号码，即170或171。
- **2**：运营商号码。
- **3**：95号码。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'City',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码的归属地。

- **SpecId**设置为1或2时，可以在参数**City**中指定查询

1. 支持输入单个城市名称查询。
2. 支持输入“全国”查询，可返回全国可购号码余量。
3. 支持输入“全国列表”查询，将返回全国城市中有号码的城市及数量，无号码的城市不会返回。

- **SpecId**设置为3时，95号码不区分归属地，只能查询全部95号码可购余量，即必须指定**City**为**全国通用**。

> 当前仅支持设置归属地为中国大陆地区。',
            'type' => 'string',
            'required' => true,
            'example' => '杭州',
          ),
        ),
        2 => 
        array (
          'name' => 'SecretNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码前缀。查询可购号码余量时，如果指定**SecretNo**，表示查询指定前缀的号码余量。


最长可指定18位号码前缀。',
            'type' => 'string',
            'required' => false,
            'example' => '130',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。
* 返回OK代表请求成功。
* 其他错误码详见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9FC30594-3841-43AD-9008-03393BCB5CD2',
              ),
              'SecretRemainDTO' => 
              array (
                'description' => '接口调用成功后返回的结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'Amount' => 
                  array (
                    'description' => '可购号码余量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'City' => 
                  array (
                    'description' => '号码的归属地。',
                    'type' => 'string',
                    'example' => '杭州',
                  ),
                  'RemainDTOList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'remainDTO' => 
                      array (
                        'description' => '可购号码余量列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '结构体。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Amount' => 
                            array (
                              'description' => '城市可购号码余量。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '120',
                            ),
                            'City' => 
                            array (
                              'description' => '号码的归属地。',
                              'type' => 'string',
                              'example' => '武汉',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"9FC30594-3841-43AD-9008-03393BCB5CD2\\",\\n  \\"SecretRemainDTO\\": {\\n    \\"Amount\\": 0,\\n    \\"City\\": \\"杭州\\",\\n    \\"RemainDTOList\\": {\\n      \\"remainDTO\\": [\\n        {\\n          \\"Amount\\": 120,\\n          \\"City\\": \\"武汉\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<QuerySecretNoRemainResponse>\\t\\r\\n    <SecretRemainDTO>\\r\\n\\t\\t<Amount>0</Amount>\\r\\n\\t\\t<City>杭州</City>\\r\\n\\t</SecretRemainDTO>\\r\\n\\t<Message>OK</Message>\\r\\n\\t<RequestId>9FC30594-3841-43AD-9008-03393BCB5CD2</RequestId>\\r\\n\\t<Code>OK</Code>\\r\\n</QuerySecretNoRemainResponse>","errorExample":""}]',
      'title' => '查询线上可购号码余量',
      'summary' => '查询线上可购号码余量。',
      'description' => '购买号码时，指定归属地如果没有足够号码可供购买，会造成号码购买失败。调用接口[BuySecretNo](~~BuySecretNo~~)购买号码前，请先通过接口[QuerySecretNoRemain](~~QuerySecretNoRemain~~)查询线上可购号码余量。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BuySecretNo' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。请登录[号码隐私保护控制台](https://dypls.console.aliyun.com/dypls.htm#/account)，在**号码池管理**中查看号码池Key。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FC123456',
          ),
        ),
        1 => 
        array (
          'name' => 'SpecId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码类型。取值：
- **1**：虚商号码，即170或171。
- **2**：运营商号码。
- **3**：95号码。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'City',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定号码的归属地。

> - 当前仅支持设置归属地为中国大陆地区。
> - 95号码不区分地区，如果购买95号码，则该参数应指定为**全国通用**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '杭州',
          ),
        ),
        3 => 
        array (
          'name' => 'SecretNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定号码前缀。购买号码时，如果指定**SecretNo**，会根据指定的号码前缀模糊匹配手机号。

> 最长可指定18位号码前缀。',
            'type' => 'string',
            'required' => false,
            'example' => '130',
          ),
        ),
        4 => 
        array (
          'name' => 'DisplayPool',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否将该号码置于显号池。

> 该参数仅对开通显号功能的客户生效。',
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
              'Code' => 
              array (
                'description' => '请求状态码。
* 返回OK代表请求成功。
* 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D1AEB96-96D0-454E-B0DC-AE2A8DF08020',
              ),
              'SecretBuyInfoDTO' => 
              array (
                'description' => '接口调用成功后返回的结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'SecretNo' => 
                  array (
                    'description' => '隐私号码，即X号码。',
                    'type' => 'string',
                    'example' => '1390000****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"2D1AEB96-96D0-454E-B0DC-AE2A8DF08020\\",\\n  \\"SecretBuyInfoDTO\\": {\\n    \\"SecretNo\\": \\"1390000****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<BuySecretNoResponse>\\r\\n\\t<SecretBuyInfoDTO>\\r\\n\\t\\t<SecretNo>17100000000</SecretNo>\\r\\n\\t</SecretBuyInfoDTO>\\r\\n\\t<Message>OK</Message>\\r\\n\\t<RequestId>2D1AEB96-96D0-454E-B0DC-AE2A8DF08020</RequestId>\\r\\n\\t<Code>OK</Code>\\r\\n</BuySecretNoResponse>","errorExample":""}]',
      'title' => '购买号码',
      'summary' => '购买号码。',
      'description' => '- 在控制台创建号码池后，号码池默认为空，需要为号码池购买号码。
- 购买号码操作涉及到资源资费，请确保在使用该接口前，已充分了解X号码隐私保护产品的收费方式和[价格](~~59825~~)。
- 购买号码时，指定归属地如果没有足够号码可供购买，会造成号码购买失败。调用此接口购买号码前，请先通过[QuerySecretNoRemain](~~111699~~)查询线上可购号码余量。
- 购买号码的账号必须已实名认证为企业账号。如何进行实名认证，请参见[企业实名认证](~~37172~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ReleaseSecretNo' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => true,
            'example' => 'FC10000012345****',
          ),
        ),
        1 => 
        array (
          'name' => 'SecretNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要释放的隐私号码。

请登录号码隐私保护控制台，在[号码管理](https://dyplsnext.console.aliyun.com/number/list)页面获取隐私号码，或者在调用[BindAxb](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-bindaxb?spm=a2c4g.11186623.0.0.6a807e38uud6C5)等号码绑定接口时查看返回参数中的**SecretNo**。',
            'type' => 'string',
            'required' => true,
            'example' => '139****0000',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。
* 返回OK代表请求成功。
* 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '986BCB6D-C9BF-42F9-91CE-3A990121232',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"986BCB6D-C9BF-42F9-91CE-3A990121232\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ReleaseSecretNoResponse>\\r\\n\\t<Message>OK</Message>\\r\\n\\t<RequestId>986BCB6D-C9BF-42F9-91CE-3A9901233D36</RequestId>\\r\\n\\t<Code>OK</Code>\\r\\n</ReleaseSecretNoResponse>","errorExample":""}]',
      'title' => '释放号码',
      'summary' => '释放号码。释放后所选号码将不可继续使用。',
      'description' => '- 释放号码之后，次月开始不再计费。

- 释放号码之前，请登录[号码隐私保护控制台](https://dypls.console.aliyun.com/dypls.htm#/account)或者调用[QuerySubsId](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-querysubsid)接口，查看该号码是否有绑定关系。号码无任何绑定关系时才能释放。


><notice>号码释放后不可继续使用，且无法找回，请谨慎操作。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'LockSecretNo' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FC123****',
          ),
        ),
        1 => 
        array (
          'name' => 'SecretNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要锁定的隐私号码，需要填写完整的手机号码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1300000****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。

- 返回OK代表请求成功。
- 其他错误码详见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D1AEB96-96D0-454E-B0DC-AE2A8DF08020',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"2D1AEB96-96D0-454E-B0DC-AE2A8DF08020\\"\\n}","errorExample":""},{"type":"xml","example":"<LockSecretNoResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <RequestId>2D1AEB96-96D0-454E-B0DC-AE2A8DF08020</RequestId>\\n</LockSecretNoResponse>","errorExample":""}]',
      'title' => '锁定号码',
      'summary' => '锁定号码。适用于需要临时屏蔽异常号码的场景。',
      'description' => '- 号码被锁定后，调用接口创建新绑定时将不再选择已经锁定的号码。

- 可调用[UnlockSecretNo](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-unlocksecretno)接口解锁号码。

### QPS限制
本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnlockSecretNo' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。

在号码隐私保护控制台，[号码池管理](https://dyplsnext.console.aliyun.com/number-pool)页面获取**号码池Key**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FC2256****',
          ),
        ),
        1 => 
        array (
          'name' => 'SecretNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要解锁的隐私号码，需要填写完整的手机号码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1300000****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。

- 返回OK代表请求成功。
- 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2D1AEB96-96D0-454E-B0DC-AE2A8DF08020',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"2D1AEB96-96D0-454E-B0DC-AE2A8DF08020\\"\\n}","errorExample":""},{"type":"xml","example":"<UnlockSecretNoResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <RequestId>2D1AEB96-96D0-454E-B0DC-AE2A8DF08020</RequestId>\\n</UnlockSecretNoResponse>","errorExample":""}]',
      'title' => '解锁号码',
      'summary' => '解锁号码。解除号码的临时屏蔽。',
      'description' => '- 号码被解锁后，[添加号码绑定](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-dir-number-binding/?spm=a2c4g.11186623.0.0.149d679cBVqtij)时可重新选择已经解锁的号码。

- 可调用[LockSecretNo](https://help.aliyun.com/zh/pnp/developer-reference/api-dyplsapi-2017-05-25-locksecretno)锁定号码。

### QPS限制
本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreatePickUpWaybillPreQuery' => 
    array (
      'summary' => '寄件下单预查询。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Content-Type',
          'in' => 'header',
          'schema' => 
          array (
            'description' => 'HTTP请求内容类型。
非必填，如果填，请填写application/json;chatset=UTF-8',
            'type' => 'string',
            'required' => false,
            'example' => 'application/json;chatset=UTF-8',
            'default' => 'application/json;charset=UTF-8',
          ),
        ),
        1 => 
        array (
          'name' => 'SenderInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '寄件人信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'description' => '寄件人姓名。',
                'type' => 'string',
                'required' => true,
                'example' => '王XX',
              ),
              'Mobile' => 
              array (
                'description' => '寄件人手机号。',
                'type' => 'string',
                'required' => true,
                'example' => '1390000****',
              ),
              'AddressInfo' => 
              array (
                'description' => '寄件人地址信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ProvinceName' => 
                  array (
                    'description' => '寄件人所在省份。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '浙江省',
                  ),
                  'CityName' => 
                  array (
                    'description' => '寄件人所在市。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '杭州市',
                  ),
                  'AreaName' => 
                  array (
                    'description' => '寄件人所在区。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '西湖区',
                  ),
                  'TownName' => 
                  array (
                    'description' => '寄件人所在街道。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'XX街道',
                  ),
                  'AddressDetail' => 
                  array (
                    'description' => '寄件人详细地址。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'XX小区XX号',
                  ),
                ),
                'required' => false,
              ),
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ConsigneeInfo',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '收件人信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'description' => '收件人姓名。',
                'type' => 'string',
                'required' => true,
                'example' => '李XX',
              ),
              'Mobile' => 
              array (
                'description' => '收件人手机号。',
                'type' => 'string',
                'required' => true,
                'example' => '1390000****',
              ),
              'AddressInfo' => 
              array (
                'description' => '收件人地址信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ProvinceName' => 
                  array (
                    'description' => '收件人所在省份。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '陕西省',
                  ),
                  'CityName' => 
                  array (
                    'description' => '收件人所在市。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '西安市',
                  ),
                  'AreaName' => 
                  array (
                    'description' => '收件人所在区。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '长安区',
                  ),
                  'TownName' => 
                  array (
                    'description' => '收件人所在街道。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'XX街道',
                  ),
                  'AddressDetail' => 
                  array (
                    'description' => '收件人详细地址。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'XX小区XX号',
                  ),
                ),
                'required' => false,
              ),
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'CpCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快递公司编码。不指定快递公司时由系统进行分配。',
            'type' => 'string',
            'required' => false,
            'example' => 'YTO',
          ),
        ),
        4 => 
        array (
          'name' => 'PreWeight',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预估重量（单位：克）。

> 若您需要查询预估价格，该参数必传。',
            'type' => 'string',
            'required' => false,
            'example' => '2000',
          ),
        ),
        5 => 
        array (
          'name' => 'OuterOrderCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接入方系统的订单编号。',
            'type' => 'string',
            'required' => false,
            'example' => '787DFHHDS989****',
          ),
        ),
        6 => 
        array (
          'name' => 'OrderChannels',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部渠道来源标识，不可包含下划线。接入时与系统约定取值。',
            'type' => 'string',
            'required' => true,
            'example' => 'Test',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9FC30594-3841-43AD-9008-03393BCB5CD2',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '结果集。',
                'type' => 'object',
                'properties' => 
                array (
                  'Success' => 
                  array (
                    'description' => '是否成功。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ErrorCode' => 
                  array (
                    'description' => '错误码。',
                    'type' => 'string',
                    'example' => '无',
                  ),
                  'ErrorMsg' => 
                  array (
                    'description' => '错误信息。',
                    'type' => 'string',
                    'example' => '无',
                  ),
                  'Code' => 
                  array (
                    'description' => '响应码。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'Message' => 
                  array (
                    'description' => '响应内容。',
                    'type' => 'string',
                    'example' => 'Success',
                  ),
                  'CpTimeSelectList' => 
                  array (
                    'description' => '查询快递公司是否可下单的信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '结构体。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RealTime' => 
                        array (
                          'description' => '实时单可选信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Name' => 
                            array (
                              'description' => '实时单服务类型名称。',
                              'type' => 'string',
                              'example' => '2小时上门',
                            ),
                            'Selectable' => 
                            array (
                              'description' => '超过实时单下单的时间，是否能再下实时单。',
                              'type' => 'boolean',
                              'example' => 'false',
                            ),
                            'SelectDisableTip' => 
                            array (
                              'description' => '不可选文案提示。',
                              'type' => 'string',
                              'example' => '超过实时单下单时间范围',
                            ),
                          ),
                        ),
                        'AppointTimes' => 
                        array (
                          'description' => '预约单可选时间信息，当前快递公司如果不能下预约单，则该字段值为空。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '结构体',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Date' => 
                              array (
                                'description' => 'YYYY-MM-DD格式的日期字符串。',
                                'type' => 'string',
                                'example' => '2022-04-28',
                              ),
                              'DateSelectable' => 
                              array (
                                'description' => '该日期是否可选。',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'TimeList' => 
                              array (
                                'description' => '当天的下单时间段列表.',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '结构体。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'StartTime' => 
                                    array (
                                      'description' => '时间段的开始时间。',
                                      'type' => 'string',
                                      'example' => '10:00:00',
                                    ),
                                    'EndTime' => 
                                    array (
                                      'description' => '时间段的结束时间。',
                                      'type' => 'string',
                                      'example' => '12:00:00',
                                    ),
                                    'Selectable' => 
                                    array (
                                      'description' => '该预约时段是否可以选择。',
                                      'type' => 'boolean',
                                      'example' => 'true',
                                    ),
                                    'SelectDisableTip' => 
                                    array (
                                      'description' => '不可选文案提示。',
                                      'type' => 'string',
                                      'example' => '约满',
                                    ),
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'PrePrice' => 
                        array (
                          'description' => '预估价格，单位：元，保留到小数点后两位。当入参传入预估重量时该字段有值。',
                          'type' => 'string',
                          'example' => '12.50',
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
            'errorCode' => 'Insufficient.Balance',
            'errorMessage' => 'You have an insufficient balance.',
          ),
          1 => 
          array (
            'errorCode' => 'Product.Unsubscript',
            'errorMessage' => 'You have not subscribed to the specified product.',
          ),
          2 => 
          array (
            'errorCode' => 'Ram.PermissionDeny',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
          3 => 
          array (
            'errorCode' => 'System.LimitControl',
            'errorMessage' => 'The system is under flow control.',
          ),
          4 => 
          array (
            'errorCode' => 'Unknown.ResourceOwnerId',
            'errorMessage' => 'The resource does not belong to the current user.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Permission.NotAuthorized',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9FC30594-3841-43AD-9008-03393BCB5CD2\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"Success\\": true,\\n    \\"ErrorCode\\": \\"无\\",\\n    \\"ErrorMsg\\": \\"无\\",\\n    \\"Code\\": \\"0\\",\\n    \\"Message\\": \\"Success\\",\\n    \\"CpTimeSelectList\\": [\\n      {\\n        \\"RealTime\\": {\\n          \\"Name\\": \\"2小时上门\\",\\n          \\"Selectable\\": false,\\n          \\"SelectDisableTip\\": \\"超过实时单下单时间范围\\"\\n        },\\n        \\"AppointTimes\\": [\\n          {\\n            \\"Date\\": \\"2022-04-28\\",\\n            \\"DateSelectable\\": true,\\n            \\"TimeList\\": [\\n              {\\n                \\"StartTime\\": \\"10:00:00\\",\\n                \\"EndTime\\": \\"12:00:00\\",\\n                \\"Selectable\\": true,\\n                \\"SelectDisableTip\\": \\"约满\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"PrePrice\\": \\"12.50\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreatePickUpWaybillPreQueryResponse>\\n    <RequestId>9FC30594-3841-43AD-9008-03393BCB5CD2</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Message>OK</Message>\\n    <Data>\\n        <Success>true</Success>\\n        <ErrorCode>无</ErrorCode>\\n        <ErrorMsg>无</ErrorMsg>\\n        <Code>0</Code>\\n        <Message>Success</Message>\\n        <CpTimeSelectList>\\n            <RealTime>\\n                <Name>2小时上门</Name>\\n                <Selectable>false</Selectable>\\n                <SelectDisableTip>超过实时单下单时间范围</SelectDisableTip>\\n            </RealTime>\\n            <AppointTimes>\\n                <Date>2022-04-28</Date>\\n                <DateSelectable>true</DateSelectable>\\n                <TimeList>\\n                    <StartTime>10:00:00</StartTime>\\n                    <EndTime>12:00:00</EndTime>\\n                    <Selectable>true</Selectable>\\n                    <SelectDisableTip>约满</SelectDisableTip>\\n                </TimeList>\\n            </AppointTimes>\\n            <PrePrice>12.50</PrePrice>\\n        </CpTimeSelectList>\\n    </Data>\\n</CreatePickUpWaybillPreQueryResponse>","errorExample":""}]',
      'title' => '寄件下单预查询',
      'description' => '### QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'CreatePickUpWaybill' => 
    array (
      'summary' => '创建上门寄件订单。',
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
          'name' => 'Content-Type',
          'in' => 'header',
          'schema' => 
          array (
            'description' => 'HTTP请求内容类型。
非必填，如果填，请填写application/json;chatset=UTF-8',
            'type' => 'string',
            'required' => false,
            'example' => 'application/json;chatset=UTF-8',
            'default' => 'application/json;charset=UTF-8',
          ),
        ),
        1 => 
        array (
          'name' => 'OuterOrderCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部订单号。',
            'type' => 'string',
            'required' => true,
            'example' => '143234234266****',
          ),
        ),
        2 => 
        array (
          'name' => 'OrderChannels',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部渠道来源。',
            'type' => 'string',
            'required' => true,
            'example' => 'YUN_DIAN_SHANG',
          ),
        ),
        3 => 
        array (
          'name' => 'CpCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '快递公司编码。',
            'type' => 'string',
            'required' => false,
            'example' => 'YTO',
          ),
        ),
        4 => 
        array (
          'name' => 'SendName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '寄件人姓名。',
            'type' => 'string',
            'required' => true,
            'example' => '王XX',
          ),
        ),
        5 => 
        array (
          'name' => 'SendMobile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '寄件人手机号。

> SendMobile和SendPhone必须任选其一。',
            'type' => 'string',
            'required' => false,
            'example' => '1596714****',
          ),
        ),
        6 => 
        array (
          'name' => 'SendPhone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '寄件人电话。
> SendMobile和SendPhone必须任选其一。',
            'type' => 'string',
            'required' => false,
            'example' => '05718845****',
          ),
        ),
        7 => 
        array (
          'name' => 'SendAddress',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '寄件人地址。',
            'type' => 'object',
            'properties' => 
            array (
              'ProvinceName' => 
              array (
                'description' => '省。',
                'type' => 'string',
                'required' => true,
                'example' => '陕西省',
              ),
              'CityName' => 
              array (
                'description' => '市。',
                'type' => 'string',
                'required' => true,
                'example' => '西安',
              ),
              'AreaName' => 
              array (
                'description' => '区。',
                'type' => 'string',
                'required' => true,
                'example' => '未央区',
              ),
              'TownName' => 
              array (
                'description' => '街道。',
                'type' => 'string',
                'required' => false,
                'example' => 'XX街道',
              ),
              'AddressDetail' => 
              array (
                'description' => '详细地址。',
                'type' => 'string',
                'required' => true,
                'example' => 'XX小区XX号',
              ),
            ),
            'required' => true,
          ),
        ),
        8 => 
        array (
          'name' => 'ConsigneeName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收货人姓名。',
            'type' => 'string',
            'required' => true,
            'example' => '张XX',
          ),
        ),
        9 => 
        array (
          'name' => 'ConsigneeMobile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收货人手机号。

> ConsigneeMobile和ConsigneePhone必须任选其一。',
            'type' => 'string',
            'required' => false,
            'example' => '1580000****',
          ),
        ),
        10 => 
        array (
          'name' => 'ConsigneePhone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '收货人电话。
> ConsigneeMobile和ConsigneePhone必须任选其一。',
            'type' => 'string',
            'required' => false,
            'example' => '0570000****',
          ),
        ),
        11 => 
        array (
          'name' => 'ConsigneeAddress',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '收货人地址。',
            'type' => 'object',
            'properties' => 
            array (
              'ProvinceName' => 
              array (
                'description' => '省。',
                'type' => 'string',
                'required' => true,
                'example' => '浙江',
              ),
              'CityName' => 
              array (
                'description' => '市。',
                'type' => 'string',
                'required' => true,
                'example' => '杭州',
              ),
              'AreaName' => 
              array (
                'description' => '区。',
                'type' => 'string',
                'required' => true,
                'example' => '西湖区',
              ),
              'TownName' => 
              array (
                'description' => '街道。',
                'type' => 'string',
                'required' => false,
                'example' => 'XX街道',
              ),
              'AddressDetail' => 
              array (
                'description' => '详细地址。',
                'type' => 'string',
                'required' => true,
                'example' => 'XX小区XX号',
              ),
            ),
            'required' => true,
          ),
        ),
        12 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注。打印在面单上的备注内容。',
            'type' => 'string',
            'required' => false,
            'example' => '易碎物品',
          ),
        ),
        13 => 
        array (
          'name' => 'GoodsInfos',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '商品列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '商品列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Name' => 
                array (
                  'description' => '物品名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '鞋子',
                ),
                'Weight' => 
                array (
                  'description' => '重量。单位：克。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1000',
                ),
                'Quantity' => 
                array (
                  'description' => '数量。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        14 => 
        array (
          'name' => 'AppointGotStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预约上门取件开始时间。
**AppointGotStartTime**的值，请从[CreatePickUpWaybillPreQuery](~~428594~~)接口返回参数**CpTimeSelectList**中**AppointTimes**的**StartTime**获取。

> 当**bizType**为**1**时必填。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-01 10:00:00',
          ),
        ),
        15 => 
        array (
          'name' => 'AppointGotEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预约上门取件结束时间。
**AppointGotEndTime**的值，请从[CreatePickUpWaybillPreQuery](~~428594~~)接口返回参数**CpTimeSelectList**中**AppointTimes**的**EndTime**获取。
> 当**bizType**为**1**时必填。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-01-01 12:00:00',
          ),
        ),
        16 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '寄件模式。取值：

- **0**：实时订单（默认值）。
- **1**：预约订单。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'title' => 'Schema of Response',
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9FC30594-3841-43AD-9008-03393BCB5CD2',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Success' => 
                  array (
                    'description' => '接口调用是否成功。',
                    'type' => 'string',
                    'example' => 'true',
                  ),
                  'CpCode' => 
                  array (
                    'description' => '快递公司编码。',
                    'type' => 'string',
                    'example' => 'YTO',
                  ),
                  'MailNo' => 
                  array (
                    'description' => '订单号。',
                    'type' => 'string',
                    'example' => '77312345629****',
                  ),
                  'ErrorCode' => 
                  array (
                    'description' => '错误码。',
                    'type' => 'string',
                    'example' => '无',
                  ),
                  'ErrorMsg' => 
                  array (
                    'description' => '错误信息。',
                    'type' => 'string',
                    'example' => '无',
                  ),
                  'GotCode' => 
                  array (
                    'description' => '取件码。',
                    'type' => 'string',
                    'example' => '3524',
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
            'errorCode' => 'Insufficient.Balance',
            'errorMessage' => 'You have an insufficient balance.',
          ),
          1 => 
          array (
            'errorCode' => 'Product.Unsubscript',
            'errorMessage' => 'You have not subscribed to the specified product.',
          ),
          2 => 
          array (
            'errorCode' => 'Ram.PermissionDeny',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
          3 => 
          array (
            'errorCode' => 'System.LimitControl',
            'errorMessage' => 'The system is under flow control.',
          ),
          4 => 
          array (
            'errorCode' => 'Unknown.ResourceOwnerId',
            'errorMessage' => 'The resource does not belong to the current user.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Permission.NotAuthorized',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9FC30594-3841-43AD-9008-03393BCB5CD2\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"Success\\": \\"true\\",\\n    \\"CpCode\\": \\"YTO\\",\\n    \\"MailNo\\": \\"77312345629****\\",\\n    \\"ErrorCode\\": \\"无\\",\\n    \\"ErrorMsg\\": \\"无\\",\\n    \\"GotCode\\": \\"3524\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreatePickUpWaybillResponse>\\n    <RequestId>9FC30594-3841-43AD-9008-03393BCB5CD2</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Message>OK</Message>\\n    <Data>\\n        <Success>true</Success>\\n        <CpCode>YTO</CpCode>\\n        <MailNo>77312345629****</MailNo>\\n        <ErrorCode>无</ErrorCode>\\n        <ErrorMsg>无</ErrorMsg>\\n        <GotCode>3524</GotCode>\\n    </Data>\\n</CreatePickUpWaybillResponse>","errorExample":""}]',
      'title' => '创建上门寄件订单',
      'description' => '### QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'CancelPickUpWaybill' => 
    array (
      'summary' => '取消上门寄件订单。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Content-Type',
          'in' => 'header',
          'schema' => 
          array (
            'description' => 'HTTP请求内容类型。
非必填，如果填，请填写application/json;chatset=UTF-8',
            'type' => 'string',
            'required' => false,
            'example' => 'application/json;chatset=UTF-8',
            'default' => 'application/json;charset=UTF-8',
          ),
        ),
        1 => 
        array (
          'name' => 'OuterOrderCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部订单号。',
            'type' => 'string',
            'required' => true,
            'example' => '1145678823****',
          ),
        ),
        2 => 
        array (
          'name' => 'CancelDesc',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '取消原因。',
            'type' => 'string',
            'required' => true,
            'example' => '不想退货了',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9FC30594-3841-43AD-9008-03393BCB5CD2',
              ),
              'Code' => 
              array (
                'description' => '状态码。

- 返回OK代表请求成功。
- 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码描述。',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Success' => 
                  array (
                    'description' => '是否取消成功。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ErrorCode' => 
                  array (
                    'description' => '错误码。',
                    'type' => 'string',
                    'example' => '无',
                  ),
                  'Message' => 
                  array (
                    'description' => '取消结果。',
                    'type' => 'string',
                    'example' => '取消成功',
                  ),
                  'ErrorMsg' => 
                  array (
                    'description' => '错误信息。',
                    'type' => 'string',
                    'example' => '无',
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
            'errorCode' => 'Insufficient.Balance',
            'errorMessage' => 'You have an insufficient balance.',
          ),
          1 => 
          array (
            'errorCode' => 'Product.Unsubscript',
            'errorMessage' => 'You have not subscribed to the specified product.',
          ),
          2 => 
          array (
            'errorCode' => 'Ram.PermissionDeny',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
          3 => 
          array (
            'errorCode' => 'System.LimitControl',
            'errorMessage' => 'The system is under flow control.',
          ),
          4 => 
          array (
            'errorCode' => 'Unknown.ResourceOwnerId',
            'errorMessage' => 'The resource does not belong to the current user.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Permission.NotAuthorized',
            'errorMessage' => 'You are not authorized to perform the operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9FC30594-3841-43AD-9008-03393BCB5CD2\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"Data\\": {\\n    \\"Success\\": true,\\n    \\"ErrorCode\\": \\"无\\",\\n    \\"Message\\": \\"取消成功\\",\\n    \\"ErrorMsg\\": \\"无\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CancelPickUpWaybillResponse>\\n    <RequestId>9FC30594-3841-43AD-9008-03393BCB5CD2</RequestId>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <Data>\\n        <Success>true</Success>\\n        <ErrorCode>无</ErrorCode>\\n        <Message>取消成功</Message>\\n        <ErrorMsg>无</ErrorMsg>\\n    </Data>\\n</CancelPickUpWaybillResponse>","errorExample":""}]',
      'title' => '取消上门寄件订单',
      'description' => '### QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'AddAxnTrackNo' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PoolKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码池Key。请登录[号码隐私保护控制台](https://dypls.console.aliyun.com/dypls.htm#/account)，在**号码池管理**中查看号码池Key。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FC2235****',
          ),
        ),
        1 => 
        array (
          'name' => 'PhoneNoX',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定关系中的隐私号码，即X号码。

您可以通过[BindAxn](~~110258~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => '1700000****',
          ),
        ),
        2 => 
        array (
          'name' => 'trackNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运单号。',
            'type' => 'string',
            'required' => true,
            'example' => 'abcde*****',
          ),
        ),
        3 => 
        array (
          'name' => 'SubsId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订购关系ID。

您可以通过[BindAxn](~~110258~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => '15678890****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '状态码。
- 返回OK代表请求成功。
- 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1A4CADEF-8516-5890-9177-A1A4D97F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"1A4CADEF-8516-5890-9177-A1A4D97F****\\"\\n}","errorExample":""},{"type":"xml","example":"<AddAxnTrackNoResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E-6722</RequestId>\\n</AddAxnTrackNoResponse>","errorExample":""}]',
      'title' => '为AXN隐私号添加运单号',
      'summary' => '为AXN隐私号添加运单号。',
      'description' => '### QPS限制
本接口的单用户QPS限制为5000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryPhoneNoAByTrackNo' => 
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
          'name' => 'trackNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运单号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '22573****',
          ),
        ),
        1 => 
        array (
          'name' => 'CabinetNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '柜机号。',
            'type' => 'string',
            'required' => false,
            'example' => '25689****',
          ),
        ),
        2 => 
        array (
          'name' => 'PhoneNoX',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建绑定关系API接口所返回的X号码。',
            'type' => 'string',
            'required' => false,
            'example' => '1710000****',
          ),
        ),
      ),
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
                'description' => '状态码。

- 返回OK代表请求成功。
- 其他错误码，请参见[错误码列表](~~109196~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8906582E-6722',
              ),
              'Module' => 
              array (
                'description' => '绑定成功后返回的结构体。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '绑定成功后返回的结构体。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Extension' => 
                    array (
                      'description' => 'X号码的分机号码。',
                      'type' => 'string',
                      'example' => '130',
                    ),
                    'PhoneNoX' => 
                    array (
                      'description' => '隐私号码，即X号码。',
                      'type' => 'string',
                      'example' => '1710000****',
                    ),
                    'PhoneNoA' => 
                    array (
                      'description' => 'A号码。',
                      'type' => 'string',
                      'example' => '1310000****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"Module\\": [\\n    {\\n      \\"Extension\\": \\"130\\",\\n      \\"PhoneNoX\\": \\"1710000****\\",\\n      \\"PhoneNoA\\": \\"1310000****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryPhoneNoAByTrackNoResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E-6722</RequestId>\\n    <Module>\\n        <Extension>130</Extension>\\n        <PhoneNoX>1710000****</PhoneNoX>\\n        <PhoneNoA>1310000****</PhoneNoA>\\n    </Module>\\n</QueryPhoneNoAByTrackNoResponse>","errorExample":""}]',
      'title' => '进行运单号广播推送',
      'summary' => '广播推送运单号。',
      'description' => '### QPS限制
本接口的单用户QPS限制为5000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'dyplsapi.aliyuncs.com',
    ),
  ),
);
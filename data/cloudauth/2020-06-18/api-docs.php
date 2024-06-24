<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Cloudauth',
    'version' => '2020-06-18',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 165016,
      'title' => ' 增强版实人认证',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 172210,
          'title' => '智能反诈方案',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DescribeSmsDetail',
            1 => 'SendSms',
          ),
        ),
        1 => 'InitSmartVerify',
        2 => 'DescribeSmartVerify',
        3 => 'VerifyBankElement',
        4 => 'ElementSmartVerify',
        5 => 'ContrastSmartVerify',
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
    'DescribeSmsDetail' => 
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
        'operationType' => 'none',
        'abilityTreeCode' => '59182',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauth0KJCLK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Mobile',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '接收闪信的11位手机号码。',
            'type' => 'string',
            'required' => false,
            'example' => '150000xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'SendDate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待查询的闪信记录的发送日期。例如，20210510。
> 最多支持查询近30天的闪信记录。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '20210428',
          ),
        ),
        2 => 
        array (
          'name' => 'ErrorCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '明细错误码。关于明细的错误码信息，请登录**[增强版实人认证控制台](https://yundun.console.aliyun.com/?spm=5176.12818093.ProductAndService--ali--widget-home-product-recent.dre0.5adc16d00DIZys&p=cloudauth#/fraud/record)**，在智能反诈的发送记录页面查询失败的原因。',
            'type' => 'string',
            'required' => false,
            'example' => 'SP_UNKNOWN_ERROR',
            'default' => '',
          ),
        ),
        3 => 
        array (
          'name' => 'OuterOrderNo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '该标识用于后续定位排查问题，您需要确保该值在您的业务中是唯一的。

支持使用英文字母（包含大小写）、数字，最长不超过32个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'qwertyuiopasdfghjklzxcvbnmqxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'SendStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待查询的闪信记录的状态。取值：
  - **FAILED**：表示查询发送失败明细。
  - **SUCCESS**：表示查询发送成功明细。
  - **RECEIPT**：表示查询未回执明细。
  - 不传则查询全部明细。',
            'type' => 'string',
            'required' => false,
            'example' => 'FAILED',
          ),
        ),
        5 => 
        array (
          'name' => 'SignName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待查询的闪信明细的签名类型。关于签名的问题，请联系运营人员。',
            'type' => 'string',
            'required' => false,
            'example' => '反诈专用',
          ),
        ),
        6 => 
        array (
          'name' => 'TemplateCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '闪信模板ID。关于闪信的模板信息，请参见**[模板](~~215420~~)**。',
            'type' => 'string',
            'required' => false,
            'example' => 'SMS_0000',
          ),
        ),
        7 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '单页最多显示的明细数量。支持最多显示100条。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'BizId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '智能反诈闪信发送接口返回的唯一ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'qwer^xxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'TotalItem' => 
              array (
                'description' => '明细的总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'CurrentPage' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '5A6229C0-E156-48E4-B6EC-0F528BDF60D2',
              ),
              'Code' => 
              array (
                'description' => '错误码。关于错误码的详细介绍，请参见**[错误码](~~215421~~)**。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '请求信息的响应消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '单页最多显示的明细数量。支持最多显示100条。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Items' => 
              array (
                'description' => '结果列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ErrorMessage' => 
                    array (
                      'description' => '发送明细错误码的错误信息。',
                      'type' => 'string',
                      'example' => '用户接收成功',
                    ),
                    'ReceiveDate' => 
                    array (
                      'description' => '运营商接收的时间。',
                      'type' => 'string',
                      'example' => '2021-04-28 12:00:00',
                    ),
                    'SendDate' => 
                    array (
                      'description' => '发送给运营商的时间。',
                      'type' => 'string',
                      'example' => '2021-04-28 12:00:00',
                    ),
                    'BizId' => 
                    array (
                      'description' => '发送回执ID。',
                      'type' => 'string',
                      'example' => 'qwer^xxxxxxxx',
                    ),
                    'TaskDate' => 
                    array (
                      'description' => '发送的时间。',
                      'type' => 'string',
                      'example' => '2021-04-28 12:00:00',
                    ),
                    'TemplateCode' => 
                    array (
                      'description' => '模板ID。',
                      'type' => 'string',
                      'example' => 'SMS_0000',
                    ),
                    'OuterOrderNo' => 
                    array (
                      'description' => '客户服务端自定义的业务唯一标识，用于后续定位问题。支持最长为32位的字母数字组合，请确保该值是唯一的。',
                      'type' => 'string',
                      'example' => 'qwertyuiopasdfghjklzxcvbnmqxxxx',
                    ),
                    'ErrorCode' => 
                    array (
                      'description' => '智能反诈服务向运营商请求发送闪信的响应状态码。',
                      'type' => 'string',
                      'example' => 'DELIVERED',
                    ),
                    'Mobile' => 
                    array (
                      'description' => '接收闪信的11位手机号码。',
                      'type' => 'string',
                      'example' => '1500000xxxx',
                    ),
                    'SmsSize' => 
                    array (
                      'description' => '发送条数。140字节算一条闪信，当闪信长度超过140字节时，会自动拆分成多条闪信发送。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Content' => 
                    array (
                      'description' => '发送的内容。',
                      'type' => 'string',
                      'example' => '【反诈专用】凡是网络投资理财声称有"专业指导"，许诺有"高额回报"、"稳赚不赔"的，都是诈骗！',
                    ),
                    'SignName' => 
                    array (
                      'description' => '签名类型。关于签名的问题，请联系运营人员。',
                      'type' => 'string',
                      'example' => '反诈专用',
                    ),
                    'SendStatus' => 
                    array (
                      'description' => '表示闪信发送状态。取值：
  - **SUCCESS**：表示闪信已发送成功。
  - **FAILED**：表示闪信发送失败。
  - **RECEIPT**：表示闪信已经成功发送给业务用户，但是没有收到用户的回执。',
                      'type' => 'string',
                      'example' => 'SUCCESS',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'This RAM user has no permissions to access API.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalItem\\": 1,\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"5A6229C0-E156-48E4-B6EC-0F528BDF60D2\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"TotalPage\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Items\\": [\\n    {\\n      \\"ErrorMessage\\": \\"用户接收成功\\",\\n      \\"ReceiveDate\\": \\"2021-04-28 12:00:00\\",\\n      \\"SendDate\\": \\"2021-04-28 12:00:00\\",\\n      \\"BizId\\": \\"qwer^xxxxxxxx\\",\\n      \\"TaskDate\\": \\"2021-04-28 12:00:00\\",\\n      \\"TemplateCode\\": \\"SMS_0000\\",\\n      \\"OuterOrderNo\\": \\"qwertyuiopasdfghjklzxcvbnmqxxxx\\",\\n      \\"ErrorCode\\": \\"DELIVERED\\",\\n      \\"Mobile\\": \\"1500000xxxx\\",\\n      \\"SmsSize\\": 1,\\n      \\"Content\\": \\"【反诈专用】凡是网络投资理财声称有\\\\\\"专业指导\\\\\\"，许诺有\\\\\\"高额回报\\\\\\"、\\\\\\"稳赚不赔\\\\\\"的，都是诈骗！\\",\\n      \\"SignName\\": \\"反诈专用\\",\\n      \\"SendStatus\\": \\"SUCCESS\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询闪信发送明细',
      'summary' => '查询闪信发送明细',
    ),
    'SendSms' => 
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
        'operationType' => 'none',
        'abilityTreeCode' => '59189',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauth6RJHVQ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Mobile',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '闪信接收的号码。格式为：86+11位手机号码。
支持设置多个号码，多个号码之间使用英文逗号（,）分隔，最多支持一次设置1000个号码。
验证码类型的闪信推荐使用单个号码的调用的方式。发送只支持国内手机号。例如，861500000****。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '861500000****',
          ),
        ),
        1 => 
        array (
          'name' => 'SignName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '闪信签名。
> **说明**智能反诈闪信发送的签名需提前申请，请您联系运营人员咨询具体流程。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '反诈专用',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '闪信模板ID。关于闪信模板ID的详细信息，请参见**[模板](~~215420~~)**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SMS_0000',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateParam',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'OuterOrderNo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户服务端自定义的业务唯一标识。
该标识用于后续定位排查问题。值最长为32位长度的字母数字组合，请确保该值是唯一的。',
            'type' => 'string',
            'required' => false,
            'example' => 'abcdefghfdfsdffafdaqwertyuioxxxx',
          ),
        ),
      ),
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
                'description' => '错误码。关于错误码的详情，请参见**[错误码](~~215420~~)**。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '请求参数的响应消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '130A2C10-B9EE-4D84-88E3-5384FF039795',
              ),
              'ResultObject' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'BizId' => 
                  array (
                    'description' => '发送回执ID。后续您可以使用该值调用**[DescribeSmsDetail](~~215421~~)**接口，查询具体的发送状态。',
                    'type' => 'string',
                    'example' => '123456^1234567',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'This RAM user has no permissions to access API.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"130A2C10-B9EE-4D84-88E3-5384FF039795\\",\\n  \\"ResultObject\\": {\\n    \\"BizId\\": \\"123456^1234567\\"\\n  }\\n}","type":"json"}]',
      'title' => '发送反诈闪信',
      'summary' => '发起发送闪信请求。单次请求最多可向1000个手机号码发送同样内容的闪信',
    ),
    'InitSmartVerify' => 
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
        'operationType' => 'none',
        'abilityTreeCode' => '59186',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauth6RJHVQ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '认证场景ID。

您必须先在**[增强版实人认证控制台](https://yundun.console.aliyun.com/?p=cloudauth)**创建认证场景，才能获得认证场景ID。更多信息，请参见**[添加认证场景](~~177631~~)**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100000xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'OuterOrderNo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商户请求的唯一标识。

值为32位长度的字母数字组合。前面几位字符是商户自定义的简称，中间可以使用一段时间，后段可以使用一个随机或递增序列。',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a77f5ac40a5aa5e6ed20c35xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Mode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '增强版活体检测的业务场景类型。取值：
  - **ACCOUNT_SAFE**：注册安全。
  - **DEVICE_SAFE**：设备安全。',
            'type' => 'string',
            'required' => false,
            'example' => 'ACCOUNT_SAFE',
          ),
        ),
        3 => 
        array (
          'name' => 'CertType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '证件类型。唯一取值：**IDENTITY_CARD**，表示身份证。',
            'type' => 'string',
            'required' => false,
            'example' => 'IDENTITY_CARD',
          ),
        ),
        4 => 
        array (
          'name' => 'MetaInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'MetaInfo环境参数，需要通过客户端SDK获取。
更多信息，请参见**[Android客户端接入](~~186594~~)**、**[iOS客户端接入](~~186595~~)**。',
            'type' => 'string',
            'required' => false,
            'example' => '{"zimVer":"3.0.0","appVersion": "1","bioMetaInfo": "4.1.0:11501568,0","appName": "com.aliyun.antcloudauth","deviceType":"ios","osVersion": "iOS 10.3.2","apdidToken": "","deviceModel": "iPhone9,1"}',
          ),
        ),
        5 => 
        array (
          'name' => 'Mobile',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户手机号码。
> **说明****Mode**取值为**DEVICE_SAFE**时，**Mobile**为非必填字段。',
            'type' => 'string',
            'required' => false,
            'example' => '130xxxxxxxx',
          ),
        ),
        6 => 
        array (
          'name' => 'Ip',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户网络IP。',
            'type' => 'string',
            'required' => false,
            'example' => '114.xxx.xxx.xxx',
          ),
        ),
        7 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '您业务中自定义的用户ID，请保持唯一。',
            'type' => 'string',
            'required' => false,
            'example' => '12345xxxx',
          ),
        ),
        8 => 
        array (
          'name' => 'CertName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户的真实姓名。',
            'type' => 'string',
            'required' => false,
            'example' => '张三',
          ),
        ),
        9 => 
        array (
          'name' => 'CertNo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户的证件号码。',
            'type' => 'string',
            'required' => false,
            'example' => '330103xxxxxxxxxxxx',
          ),
        ),
        10 => 
        array (
          'name' => 'Ocr',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'CallbackUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '认证结果的回调通知地址，必须以`https`开头。
平台在完成认证后会回调该地址，并自动添加`certifyId`、`passed`和`subcode`字段，示例：`https://www.aliyun.com？certifyId=xxxx&passed=T&subcode=200`。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://www.aliyun.com',
          ),
        ),
        12 => 
        array (
          'name' => 'CallbackToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '安全Token，用于防重复、防篡改校验。如果传入该参数会在回调地址显示CallbackToken字段。',
            'type' => 'string',
            'required' => false,
            'example' => 'NMjvQanQgplBSaEI0sL86WnQplB',
          ),
        ),
        13 => 
        array (
          'name' => 'FacePictureBase64',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        14 => 
        array (
          'name' => 'FacePictureUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        15 => 
        array (
          'name' => 'CertifyId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        16 => 
        array (
          'name' => 'OssBucketName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        17 => 
        array (
          'name' => 'OssObjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        18 => 
        array (
          'name' => 'IdNo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        19 => 
        array (
          'name' => 'IdName',
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
              'Code' => 
              array (
                'description' => '返回码。取值：
  - **200**：成功。
  - 其他值：失败，详见**[错误码](~~186596~~)**。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0F591A7A-98B7-58D8-B9AC-3D71703AEE57',
              ),
              'ResultObject' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'CertifyId' => 
                  array (
                    'description' => '认证请求ID，增强版实人认证服务认证请求的唯一标识。

查询认证结果时，必须传入认证请求ID。',
                    'type' => 'string',
                    'example' => '91707dc296d469ad38e4c5efa6a0xxxx',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"0F591A7A-98B7-58D8-B9AC-3D71703AEE57\\",\\n  \\"ResultObject\\": {\\n    \\"CertifyId\\": \\"91707dc296d469ad38e4c5efa6a0xxxx\\"\\n  }\\n}","type":"json"}]',
      'title' => '发起增强版认证请求',
      'summary' => '发起增强版认证请求',
    ),
    'DescribeSmartVerify' => 
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
        'abilityTreeCode' => '59181',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthHJ4WQV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '认证场景ID。

您必须先在**[增强版实人认证控制台](https://yundun.console.aliyun.com/?p=cloudauth)**创建认证场景，才能获得认证场景ID。更多信息，请参见**[添加认证场景](~~177631~~)**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100000xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'CertifyId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '认证请求ID。

您必须先调用**[InitSmartVerify](~~186596~~)**提交认证请求，才能获得认证请求ID。',
            'type' => 'string',
            'required' => false,
            'example' => '91707dc296d469ad38e4c5efa6a0xxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'PictureReturnType',
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
              'Code' => 
              array (
                'description' => '返回码，**200**表示接口响应成功。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '130A2C10-B9EE-4D84-88E3-5384FF039795',
              ),
              'ResultObject' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'SubCode' => 
                  array (
                    'description' => '认证结果码。详见**[ResultObject.SubCode补充说明](~~186597~~)**。',
                    'type' => 'string',
                    'example' => '200',
                  ),
                  'PassedScore' => 
                  array (
                    'description' => '综合决策分数，取值：0~100。

阈值为80分，大于或等于80分表示认证通过，低于80分表示认证不通过。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '80.2',
                  ),
                  'MaterialInfo' => 
                  array (
                    'description' => '认证主体附件信息中的业务安全类信息。详见**[ResultObject.MaterialInfo.riskInfo补充说明](~~186597~~)**。',
                    'type' => 'string',
                    'example' => '{"riskInfo": { "score": 35,"tags": "rm0114"} }',
                  ),
                  'Passed' => 
                  array (
                    'description' => '认证是否通过，取值：
  - **T**：通过。
  - **F**：不通过。

> 如果接口异常或接口是未认证状态，则不返回该参数。',
                    'type' => 'string',
                    'example' => 'T',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"130A2C10-B9EE-4D84-88E3-5384FF039795\\",\\n  \\"ResultObject\\": {\\n    \\"SubCode\\": \\"200\\",\\n    \\"PassedScore\\": 80.2,\\n    \\"MaterialInfo\\": \\"{\\\\\\"riskInfo\\\\\\": { \\\\\\"score\\\\\\": 35,\\\\\\"tags\\\\\\": \\\\\\"rm0114\\\\\\"} }\\",\\n    \\"Passed\\": \\"T\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询增强版认证结果',
      'summary' => '查询增强版认证结果',
    ),
    'VerifyBankElement' => 
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
        'operationType' => 'none',
        'abilityTreeCode' => '59190',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthGEV2SZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'OuterOrderNo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'Mode',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'BankCardNo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'IdNo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'BankCardUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'isFileTransferUrl' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'BankCardFile',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'isFileTransferUrl' => true,
          ),
        ),
        7 => 
        array (
          'name' => 'IdName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'Mobile',
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
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'ResultObject' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'CertifyId' => 
                  array (
                    'type' => 'string',
                  ),
                  'SubCode' => 
                  array (
                    'type' => 'string',
                  ),
                  'MaterialInfo' => 
                  array (
                    'type' => 'string',
                  ),
                  'Passed' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'ElementSmartVerify' => 
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
        'operationType' => 'none',
        'abilityTreeCode' => '59183',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthD73EJ0',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'OuterOrderNo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'Mode',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'CertType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'CertName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'CertNo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'CertUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'isFileTransferUrl' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'CertFile',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'isFileTransferUrl' => true,
          ),
        ),
        8 => 
        array (
          'name' => 'CertNationalEmblemUrl',
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
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'ResultObject' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'CertifyId' => 
                  array (
                    'type' => 'string',
                  ),
                  'SubCode' => 
                  array (
                    'type' => 'string',
                  ),
                  'MaterialInfo' => 
                  array (
                    'type' => 'string',
                  ),
                  'Passed' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'ContrastSmartVerify' => 
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
        'operationType' => 'none',
        'abilityTreeCode' => '59180',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauth6RJHVQ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'minimum' => '0',
          ),
        ),
        1 => 
        array (
          'name' => 'OuterOrderNo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'Mode',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'CertType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'Mobile',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'Ip',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'CertName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
          ),
        ),
        8 => 
        array (
          'name' => 'CertNo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
          ),
        ),
        9 => 
        array (
          'name' => 'FacePicFile',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'isFileTransferUrl' => true,
          ),
        ),
        10 => 
        array (
          'name' => 'FacePicUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'FacePicString',
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
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'ResultObject' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SubCode' => 
                  array (
                    'type' => 'string',
                  ),
                  'CertifyId' => 
                  array (
                    'type' => 'string',
                  ),
                  'VerifyInfo' => 
                  array (
                    'type' => 'string',
                  ),
                  'RiskInfo' => 
                  array (
                    'type' => 'string',
                  ),
                  'Passed' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
  ),
);
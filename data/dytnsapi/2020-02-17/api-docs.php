<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Dytnsapi',
    'version' => '2020-02-17',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 188841,
      'title' => '身份证二要素核验',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CertNoTwoElementVerification',
      ),
    ),
    1 => 
    array (
      'id' => 186898,
      'title' => 'UAID查询',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetUAIDApplyTokenSign',
        1 => 'UAIDVerification',
      ),
    ),
    2 => 
    array (
      'id' => 186327,
      'title' => '企业二要素/三要素/四要素核验',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CompanyTwoElementsVerification',
        1 => 'CompanyThreeElementsVerification',
        2 => 'CompanyFourElementsVerification',
      ),
    ),
    3 => 
    array (
      'id' => 163788,
      'title' => '号码归属查询',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribePhoneNumberOperatorAttribute',
      ),
    ),
    4 => 
    array (
      'id' => 163790,
      'title' => '号码状态查询',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'PhoneNumberStatusForPublic',
        1 => 'PhoneNumberStatusForAccount',
        2 => 'PhoneNumberStatusForReal',
        3 => 'PhoneNumberStatusForSms',
        4 => 'PhoneNumberStatusForVoice',
        5 => 'PhoneNumberStatusForVirtual',
      ),
    ),
    5 => 
    array (
      'id' => 163792,
      'title' => '二次号查询',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribePhoneTwiceTelVerify',
      ),
    ),
    6 => 
    array (
      'id' => 167651,
      'title' => '在网时长查询',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribePhoneNumberOnlineTime',
      ),
    ),
    7 => 
    array (
      'id' => 169030,
      'title' => '号码分析查询',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribePhoneNumberAnalysisAI',
        1 => 'DescribePhoneNumberAnalysis',
      ),
    ),
    8 => 
    array (
      'id' => 169031,
      'title' => '空号检测',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeEmptyNumber',
      ),
    ),
    9 => 
    array (
      'id' => 168216,
      'title' => '运营商二要素/三要素核验',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TwoElementsVerification',
        1 => 'ThreeElementsVerification',
      ),
    ),
    10 => 
    array (
      'id' => 169032,
      'title' => '号码加密',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'PhoneNumberEncrypt',
      ),
    ),
    11 => 
    array (
      'id' => 169033,
      'title' => '无效号码过滤',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'InvalidPhoneNumberFilter',
      ),
    ),
    12 => 
    array (
      'id' => 186356,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryTagListPage',
        1 => 'QueryTagInfoBySelection',
        2 => 'QueryUsageStatisticsByTagId',
        3 => 'QueryTagApplyRule',
      ),
    ),
    13 => 
    array (
      'id' => 186357,
      'title' => '授权码',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryAvailableAuthCode',
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
    'CertNoTwoElementVerification' => 
    array (
      'summary' => '二要素（姓名和身份证）核验。用于比对用户填写的姓名、身份证两项信息是否属于同一用户。',
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
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在**号码百科**->[**标签广场**](https://dytns.console.aliyun.com/analysis/square)选择标签，提交使用申请，申请通过后，会获得该授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'QASDW@#**',
          ),
        ),
        1 => 
        array (
          'name' => 'CertName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待核验的姓名。',
            'type' => 'string',
            'required' => true,
            'example' => '张三',
          ),
        ),
        2 => 
        array (
          'name' => 'CertNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待核验的身份证号。',
            'type' => 'string',
            'required' => true,
            'example' => '3***************0',
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
                'example' => '-',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'IsConsistent' => 
                  array (
                    'description' => '验证结果是否一致。返回：

- **1**：一致

- **0**：不一致

- **2**：查无',
                    'type' => 'string',
                    'example' => '1',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '请求状态码。',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"-\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"IsConsistent\\": \\"1\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
      'title' => '身份证二要素核验',
      'description' => '- 请确保在使用本接口前，您已充分了解号码百科产品定价。
- 使用本接口前，请登录号码百科控制台，在标签广场页面，找到对应的标签，单击申请开通，填写申请资料，审批通过后即可使用。
- 当接口值返回值：Code="OK"且IsConsistent != 2时计费，其他返回结果不计费。

## QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'GetUAIDApplyTokenSign' => 
    array (
      'summary' => '该API仅提供三网运营商获取UAID能力中，获取授权Token环节的签名功能。',
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
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在**号码分析服务**->[**标签广场**](https://dytns.console.aliyun.com/analysis/square)选择标签，提交使用申请，申请通过后，会获得该授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'HwD97InG',
          ),
        ),
        1 => 
        array (
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部流水号。
> 对应移动（CM）运营商中的traceId、msgId，三者保持一致即可',
            'type' => 'string',
            'required' => true,
            'example' => 'b8b5b3a*******0b9893484fdf412c99',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端类型。
- Android：30100
- IOS：30300
- H5：20200
- WEB：10010',
            'type' => 'string',
            'required' => true,
            'example' => '30300',
          ),
        ),
        3 => 
        array (
          'name' => 'ParamKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商为电信（CT）时必传，具体参考电信运营商文档。',
            'type' => 'string',
            'required' => false,
            'example' => '955EC1A869852EA8BC66F********D7C6E92017BBD5B001C736EFEAFB775C232',
          ),
        ),
        4 => 
        array (
          'name' => 'ParamStr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商为电信（CT）时必传，具体参考电信运营商文档。',
            'type' => 'string',
            'required' => false,
            'example' => 'B2F0D4CD7A216D16CE2AF4BBC********29A454FDDD991F919106C12CB89ABA8',
          ),
        ),
        5 => 
        array (
          'name' => 'Time',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件发生的时间戳，精确到毫秒。  
格式：yyyyMMddHHmmssSSS。',
            'type' => 'string',
            'required' => true,
            'example' => '20121227180001165',
          ),
        ),
        6 => 
        array (
          'name' => 'Carrier',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户所处的运营商。取值：
- **CM**：中国移动。
- **CU**：中国联通。
- **CT**：中国电信。',
            'type' => 'string',
            'required' => true,
            'example' => 'CM',
          ),
        ),
        7 => 
        array (
          'name' => 'Format',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求方式，运营商为电信（CT）时必传。
取值：

- json
- jsonp',
            'type' => 'string',
            'required' => false,
            'example' => 'json',
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
                'example' => '-',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '68A40250-50CD-034C-B728-0BD******177',
              ),
              'Message' => 
              array (
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'OutId' => 
                  array (
                    'description' => '外部流水号。',
                    'type' => 'string',
                    'example' => 'b8b5b3a*******0b9893484fdf412c99',
                  ),
                  'Sign' => 
                  array (
                    'description' => '签名值',
                    'type' => 'string',
                    'example' => 'D2E204D74EEB373E468632********23F592C4C9',
                  ),
                  'Carrier' => 
                  array (
                    'description' => '用户所处的运营商。取值：
- **CM**：中国移动。
- **CU**：中国联通。
- **CT**：中国电信。',
                    'type' => 'string',
                    'example' => 'CM',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '请求状态码。取值：
- **OK**：请求成功。',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"-\\",\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD******177\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"OutId\\": \\"b8b5b3a*******0b9893484fdf412c99\\",\\n    \\"Sign\\": \\"D2E204D74EEB373E468632********23F592C4C9\\",\\n    \\"Carrier\\": \\"CM\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
      'title' => '获取UAID授权Token的签名值',
      'description' => '该API仅提供三网运营商获取UAID能力中，**获取授权Token环节的签名功能**。
 - 获取授权Token的其他必要参数，请参考对应运营商文档自行生成
 - 获取授权Token的请求，请参考对应运营商文档，注意需要从用户移动终端的蜂窝移动网络环境下请求
 - 获取授权Token请求后，请参考[UAIDVerification](~~UAIDVerification~~) 接口进行最终的UAID获取。

### 如何通过客户端/H5方式请求授权Token

<notice>发起请求授权Token时，客户端或H5页面必须切换到蜂窝移动网络。</notice>

#### 移动（CM）
通信协议：HTTPS + application/Json  
方法：POST  
地址：https://msg.cmpassport.com/h5/getMobile  

##### 请求参数
参数示例：  

`{
  "traceId": "mfawsxtcmyplwzpayzzvdvbsowxmkynr",
  "appId": "300011580392",
  "sign": "2c61b3c58ffbeed97461e31be4fd931a",
  "msgId": "redbyxsdetddwaaffajcwwapspykftzx",
  "expandParams": "",
  "businessType": "3",
  "version": "1.0",
  "timestamp": "20201125101540980"
}`  
  
参数描述：  
- version：使用`1.0`
- timestamp：请求消息发送的系统时间，精确到毫秒，对应该API下方入参`Time`的内容及其格式，两者需要保持一致
- appId：使用`300012406312`
- businessType：使用`3`
- traceId：外部流水号，对应该API下方入参`OutId`的内容，两者需要保持一致
- sign：调用该API获取
- msgId：外部流水号，对应该API下方入参`OutId`的内容，两者需要保持一致

##### 响应参数
响应示例：  
`{
  "header": {
    "appId": "300011580392",
    "msgId": "redbyxsdetddwaaffajcwwapspykftzx",
    "timestamp": "20201125101607932"
  },
  "body": {
    "resultCode": "103000",
    "expandParams": "",
    "resultDesc": "成功",
    "token": "H5HTTPS4187AE9743AFCB14F8D99B9D65ED9E01"
  }
}`

直接获取`body`中的`token`即可。

#### 联通（CU）
分两步获取token
##### 第一步：获取authurl
通过第一步请求，获取门户服务器获取鉴权服务器地址`authurl`  

通信协议：HTTPS + application/Json  
方法：GRT  
地址：https://nisportal.10010.com:9001/api  
###### 请求参数
参数示例：  
json方式请求：`?appId=1554778161153`  
jsonp方式请求：`?appId=1554778161153&callback=callbackFunction`  

参数描述：
- appId：使用1554778161153
- callback：jsonp回调函数名。仅当使用jsonp格式时需要传此参数
###### 响应参数
响应示例：  
json方式请求：
`{"authurl": "https://enrichgw.10010.com/d93222629f52ec79"}`  
jsonp方式请求：
`callbackFunction({"authurl":"https://enrichgw.10010.com/d93222629f52ec79"})`  

获取返回结果中的`authurl`。

##### 第二步：获取token
通信协议：HTTPS + application/Json  
方法：GRT  
地址：${authurl}+"/api"  

请求地址示例：`https://enrichgw.10010.com/d93222629f52ec79/api`
###### 请求参数
参数示例：  
json方式请求：`?appId=1554778161153`  
jsonp方式请求：`?appId=1554778161153&callback=callbackFunction`  

参数描述：
- appId：使用1554778161153
- callback：jsonp回调函数名。仅当使用jsonp格式时需要传此参数
###### 响应参数
响应示例：  
json方式请求：
`{
    "province": "1",
    "code": "7nHS1nggx2WP613750206700RN6oiRN1"
}`  
jsonp方式请求：
`callbackFunction({"province":"1","code":"7nHS3Dnkd1BS701851092400RN6oiRN1"})`

获取返回结果中的`code`即可。



#### 电信（CT）
通信协议：HTTPS + application/x-www-form-urlencoded;charset=UTF  
方法：GET  
地址：https://id6.me/gw/preuniq.do

##### 请求参数
参数示例：  
`?clientType=30100&appId=9390188202&format=json&sign=D63C166FA19E1996EF********09C6A5397C10B4&paramKey=1D7C25EB8B0B8B4CB3CF8DC60628F6549********786B0AF1FEF93FA1335057A35BF5F0B39A3867EAA9BE14B3898********8B01DE34965060445B6E1F66401D714650E4AB161CD6DCF4A72********3B856F22A192B8B0C39D7A55B961062E68C89C928894F119B25********7C548355FE9DB82852EB93C939F2200B48CD17&paramStr=140********95AF8E138B94754CB4CF83BA6FB********52B258BFDFD38BF233&version=1.1`  

参数描述：  
- appId：使用`9390188202`
- clientType：客户端类型，对应该API下方入参`ClientType`的内容，两者需要保持一致
- format：使用`json`或`jsonp`
- version：使用`1.1`
- sign：调用该API获取
- paramKey：密钥A的密文；密钥A为接入端随机生成字符串，长度为16位；`paramKey = RSA1024("${密钥A}", "${天翼账号平台公钥}")`；填充模式为`RSA/ECB/PKCS1Padding`；下载[电信RSA公钥](https://id.189.cn/source/files/API.pem)
- paramStr：不公开请求参数密文； timeStamp为时间戳，精确到毫秒，对应该API下方入参`Time`的值，但格式不同（参考值`1697791988302`）；callback为使用jsonp格式时的回调方法，仅当format取值为jsonp时需要填写。`paramStr = AES("timeStamp=${timeStamp}&callback=${callback}", "${密钥A}")`；填充模式为`AES/CBC/PKCS5Padding`，初始向量为`0000000000000000`

##### 响应参数
响应示例：  
`callback?result=10000&msg=success&data=a35336711c70456cb883f4f224e9a259`  

`data`为加密的业务结果数据，`data = AES(业务结果, 密钥A)`，使用密钥A进行AES解密（AES/CBC/PKCS5Padding）。  
  
解密后业务结果示例：  
`{"accessCode": "H5HTTPS4187AE9743AFCB14F8D99B9D65ED9E01"}`
  
此时获取`accessCode`即可。',
    ),
    'UAIDVerification' => 
    array (
      'summary' => '根据运营商授权Token获取UAID。
获取授权Token及其签名值请参考GetUAIDApplyTokenSign API文档。

UAID为64个长度，前32个长度描述设备信息，后32个长度描述号码信息。',
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
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部流水号。',
            'type' => 'string',
            'required' => false,
            'example' => 'b8b5b3a*******0b9893484fdf412c99
',
          ),
        ),
        1 => 
        array (
          'name' => 'Carrier',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户所处的运营商。取值：
- **CM**：中国移动。
- **CU**：中国联通。
- **CT**：中国电信。',
            'type' => 'string',
            'required' => true,
            'example' => 'CM',
          ),
        ),
        2 => 
        array (
          'name' => 'Token',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运营商授权Token。  
> 获取授权Token及其签名值请参考GetUAIDApplyTokenSign API文档。',
            'type' => 'string',
            'required' => true,
            'example' => 'MIGfMA0********3DQEBAQUAA4GNADCB',
          ),
        ),
        3 => 
        array (
          'name' => 'UserGrantId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户授权码，代表用户已授权。值为不大于128位的唯一随机数即可。  

<warning>集成时，建议在产品的隐私政策中加入UAID的隐私政策相关内容。</warning>',
            'type' => 'string',
            'required' => false,
            'example' => 'Md****a3Em',
          ),
        ),
        4 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在**号码分析服务**->[**标签广场**](https://dytns.console.aliyun.com/analysis/square)选择标签，提交使用申请，申请通过后，会获得该授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'HwD97InG',
          ),
        ),
        5 => 
        array (
          'name' => 'Ip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '公网IP地址，当运营商为联通（CU）时必传，兼容IPV4和IPV6地址。',
            'type' => 'string',
            'required' => false,
            'example' => '2408:8440:308:29dc:ed00:c4ec:475c:25a4',
          ),
        ),
        6 => 
        array (
          'name' => 'Province',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '省份id，当运营商为联通（CU）时选传。与获取token时返回值中province字段保持一致。',
            'type' => 'string',
            'required' => false,
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
              'AccessDeniedDetail' => 
              array (
                'description' => '访问被拒绝详细信息。',
                'type' => 'string',
                'example' => '-',
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
                'example' => '68A40250-50CD-034C-B728-0BD******177',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Uaid' => 
                  array (
                    'description' => '获取到的UAID的值。',
                    'type' => 'string',
                    'example' => 'B1E0C1********9F757AF52A035',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '请求状态码。取值：

- **OK**：成功。',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"-\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD******177\\",\\n  \\"Data\\": {\\n    \\"Uaid\\": \\"B1E0C1********9F757AF52A035\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
      'title' => '根据运营商授权Token获取UAID',
      'description' => '请确保在使用该接口前，已充分了解号码百科产品的收费方式和[价格](https://www.aliyun.com/price/product#/dytns/detail/dytns_penqbag_public_cn)。  

根据运营商授权Token获取UAID。  
获取授权Token及其签名值请参考GetUAIDApplyTokenSign API文档。',
    ),
    'CompanyTwoElementsVerification' => 
    array (
      'summary' => '用于核验企业名称和企业证件号，名称和证件必须全部一致且企业经营状态为在营才会判定核验通过。',
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
          'name' => 'EpCertNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业证件号。',
            'type' => 'string',
            'required' => true,
            'example' => '9242032*******J627
',
          ),
        ),
        1 => 
        array (
          'name' => 'EpCertName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业名称。',
            'type' => 'string',
            'required' => true,
            'example' => '某企业',
          ),
        ),
        2 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

>登录[号码百科控制台](https://dytns.console.aliyun.com/overview?spm=a2c4g.608385.0.0.79847f8b3awqUC)，在[我的申请](https://dytns.console.aliyun.com/analysis/apply)页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'Dd1r***4id',
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
                'example' => '-',
              ),
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '68A40250-50CD-034C-B728-0BD135850177',
              ),
              'Message' => 
              array (
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'DetailInfo' => 
                  array (
                    'description' => '企业详细信息。

> 事业单位、民事团体不支持返回此字段',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OpenTime' => 
                      array (
                        'description' => '企业营业期限。',
                        'type' => 'string',
                        'example' => '2023-05-25/2053-05-24',
                      ),
                      'EnterpriseStatus' => 
                      array (
                        'description' => '企业经营状态。',
                        'type' => 'string',
                        'example' => '在营（开业）',
                      ),
                    ),
                    'example' => '{
      "enterpriseStatus": "在营（开业）",
      "openTime": "2023-05-25/2053-05-24"
}',
                  ),
                  'InconsistentData' => 
                  array (
                    'description' => '校验不一致的字段。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '- EpCertName：企业名称
- EpCertNo：企业证件号',
                      'type' => 'string',
                      'example' => 'EpCertName',
                    ),
                    'example' => '',
                  ),
                  'VerifyResult' => 
                  array (
                    'description' => '核验结果。取值：

- true：信息核验一致，且企业正常经营。
- false：核验不通过。

> 事业单位、民事团体不支持核验企业经营状态，仅核验企业名称与企业证件号是否一致',
                    'type' => 'string',
                    'example' => 'true',
                  ),
                  'ReasonCode' => 
                  array (
                    'description' => '核验结果编码。取值：

- 0：核验一致
- 1：核验一致，企业非正常营业
- 3：企业二要素不通过
- 4：查无企业',
                    'type' => 'string',
                    'example' => '0',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '请求状态码。',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"-\\",\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD135850177\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"DetailInfo\\": {\\n      \\"OpenTime\\": \\"2023-05-25/2053-05-24\\",\\n      \\"EnterpriseStatus\\": \\"在营（开业）\\"\\n    },\\n    \\"InconsistentData\\": [\\n      \\"EpCertName\\"\\n    ],\\n    \\"VerifyResult\\": \\"true\\",\\n    \\"ReasonCode\\": \\"0\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
      'title' => '企业二要素核验',
      'description' => '- 请确保在使用该接口前，已充分了解企业二要素核验产品的收费方式和价格，计费详情请参见[产品计费](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4)。
- 返回结果中Code=OK，且ReasonCode=0/1/3时计费，其余情况均不计费。
- 使用本接口前，请登录[号码百科控制台](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC&lang=zh)，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。

### QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'CompanyThreeElementsVerification' => 
    array (
      'summary' => '用于核验企业名称、企业证件号和企业法人姓名，必须全部一致且企业经营状态为在营才会判定核验通过。',
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
          'name' => 'EpCertNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业证件号。',
            'type' => 'string',
            'required' => true,
            'example' => '9242032*******J627',
          ),
        ),
        1 => 
        array (
          'name' => 'EpCertName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业名称。',
            'type' => 'string',
            'required' => true,
            'example' => '某企业',
          ),
        ),
        2 => 
        array (
          'name' => 'LegalPersonCertName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业法人姓名。
>如果企业有多个法人，法人之间需用中文顿号（”、”）隔开。',
            'type' => 'string',
            'required' => true,
            'example' => '张三',
          ),
        ),
        3 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

>登录[号码百科控制台](https://dytns.console.aliyun.com/overview?spm=a2c4g.608385.0.0.79847f8b3awqUC)，在[我的申请](https://dytns.console.aliyun.com/analysis/apply)页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'Dd1r***4id',
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
                'example' => '-',
              ),
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '68A40250-50CD-034C-B728-0BD135850177',
              ),
              'Message' => 
              array (
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'DetailInfo' => 
                  array (
                    'description' => '企业详细信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OpenTime' => 
                      array (
                        'description' => '企业营业期限。',
                        'type' => 'string',
                        'example' => '2023-05-25/2053-05-24',
                      ),
                      'EnterpriseStatus' => 
                      array (
                        'description' => '企业经营状态。',
                        'type' => 'string',
                        'example' => '在营（开业）',
                      ),
                    ),
                    'example' => '{
      "enterpriseStatus": "在营（开业）",
      "openTime": "2023-05-25/2053-05-24"
}',
                  ),
                  'InconsistentData' => 
                  array (
                    'description' => '校验不一致的字段',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '- EpCertName：企业名称
- EpCertNo：企业证件号
- CertName：企业法人姓名',
                      'type' => 'string',
                      'example' => 'CertName',
                    ),
                    'example' => '',
                  ),
                  'VerifyResult' => 
                  array (
                    'description' => '核验结果。取值：

- true：信息核验一致，且企业正常经营。
- false：核验不通过。',
                    'type' => 'string',
                    'example' => 'false',
                  ),
                  'ReasonCode' => 
                  array (
                    'description' => '核验结果编码。取值：

- 0：核验一致
- 1：核验一致，企业非正常营业
- 2：人企核验不一致
- 3：企业二要素不通过
- 4：查无企业
- 5：人在库中不存在',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '请求状态码。',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"-\\",\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD135850177\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"DetailInfo\\": {\\n      \\"OpenTime\\": \\"2023-05-25/2053-05-24\\",\\n      \\"EnterpriseStatus\\": \\"在营（开业）\\"\\n    },\\n    \\"InconsistentData\\": [\\n      \\"CertName\\"\\n    ],\\n    \\"VerifyResult\\": \\"false\\",\\n    \\"ReasonCode\\": 2\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
      'title' => '企业三要素核验',
      'description' => '- 请确保在使用该接口前，已充分了企业三要素核验产品的收费方式和价格，计费详情请参见[产品计费](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4)。
- 当返回结果中：当VerifyResult返回true/false，且ReasonCode=0/1/2时计费，其余情况均不计费。
- 使用本接口前，请登录[号码百科控制台](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC&lang=zh)，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。

### QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'CompanyFourElementsVerification' => 
    array (
      'summary' => '用于核验企业名称、企业证件号、企业法人姓名和企业法人身份证号，必须全部一致且企业经营状态为在营才会判定核验通过。',
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
          'name' => 'EpCertNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业证件号。',
            'type' => 'string',
            'required' => true,
            'example' => '9242032*******J627',
          ),
        ),
        1 => 
        array (
          'name' => 'EpCertName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业名称。',
            'type' => 'string',
            'required' => false,
            'example' => '某企业',
          ),
        ),
        2 => 
        array (
          'name' => 'LegalPersonCertName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业法人姓名。
> 如果企业有多个法人，法人之间需用中文顿号（”、”）隔开',
            'type' => 'string',
            'required' => true,
            'example' => '张三',
          ),
        ),
        3 => 
        array (
          'name' => 'LegalPersonCertNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业法人身份证号码。
> 如果企业有多个身份证号，身份证号之间需用中文顿号（”、”）隔开',
            'type' => 'string',
            'required' => true,
            'example' => '610321********0011、510180********0022',
          ),
        ),
        4 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。
>登录[号码百科控制台](https://dytns.console.aliyun.com/overview?spm=a2c4g.608385.0.0.79847f8b3awqUC)，在[我的申请](https://dytns.console.aliyun.com/analysis/apply)页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'Dd1r***4id',
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
                'example' => '-',
              ),
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
              ),
              'Message' => 
              array (
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'DetailInfo' => 
                  array (
                    'description' => '企业详细信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OpenTime' => 
                      array (
                        'description' => '企业营业期限。',
                        'type' => 'string',
                        'example' => '2023-05-25/2053-05-24',
                      ),
                      'EnterpriseStatus' => 
                      array (
                        'description' => '企业经营状态。',
                        'type' => 'string',
                        'example' => '在营（开业）',
                      ),
                    ),
                    'example' => '{ "enterpriseStatus": "在营（开业）", 
"openTime": "2023-05-25/2053-05-24" }',
                  ),
                  'InconsistentData' => 
                  array (
                    'description' => '校验不一致的字段',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '- EpCertName：企业名称
- EpCertNo：企业证件号
- CertName：企业法人姓名
- CertNo：企业法人证件号',
                      'type' => 'string',
                      'example' => 'CertName',
                    ),
                    'example' => '',
                  ),
                  'VerifyResult' => 
                  array (
                    'description' => '核验结果。取值：
-   true：信息核验一致，且企业正常经营。
-   false：核验不通过。',
                    'type' => 'string',
                    'example' => 'true',
                  ),
                  'ReasonCode' => 
                  array (
                    'description' => '核验结果编码。取值：

- 0：核验一致
- 1：核验一致，企业非正常营业
- 2：法人与企业信息核验不一致
- 3：企业四要素不通过
- 4：查无此企业
- 5：库中无此法人',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '请求状态码。',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'RequestTimeout',
            'errorMessage' => 'Request supplier timed out.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"-\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"DetailInfo\\": {\\n      \\"OpenTime\\": \\"2023-05-25/2053-05-24\\",\\n      \\"EnterpriseStatus\\": \\"在营（开业）\\"\\n    },\\n    \\"InconsistentData\\": [\\n      \\"CertName\\"\\n    ],\\n    \\"VerifyResult\\": \\"true\\",\\n    \\"ReasonCode\\": 0\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
      'title' => '企业四要素核验',
      'description' => '- 请确保在使用该接口前，已充分了企业四要素核验产品的收费方式和价格，计费详情请参见[产品计费](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4)。
- 当返回结果中：当VerifyResult返回true/false，且ReasonCode=0/1/2时计费，其余情况均不计费。
- 使用本接口前，请登录[号码百科控制台](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC&lang=zh)，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。

### QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribePhoneNumberOperatorAttribute' => 
    array (
      'summary' => '查询手机号码的归属信息，包括：所属省份、所属城市、所属基础运营商（中国移动、中国联通、中国电信、中国广电）、移动转售企业（阿里通信等）、是否携号转网、归属号码段等。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'Dd1r***4id',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的号码。

- 若Mask取值为NORMAL，该字段为11位手机号码。
- 若Mask取值为MD5，该字段为32位加密字符串。
- 若Mask取值为SHA256，该字段为64位加密字符串。

><notice>加密字符串中字母不区分大小写。</notice>',
            'type' => 'string',
            'required' => true,
            'example' => '139****1234',
          ),
        ),
        2 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码的加密方式。取值：

- **NORMAL**：不加密
- **MD5**：MD5加密
- **SHA256**：SHA256加密

><notice>字符串中所有字母必须大写。</notice>',
            'type' => 'string',
            'required' => true,
            'example' => 'MD5',
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
                'description' => '请求状态码。取值：

- **OK**：成功。
- **InvalidParameter**：传入的手机号错误或参数格式错误。
- **PhoneNumberNotfound**：传入的手机号查不到归属结果。
- **isp.UNKNOWN**：未知异常。
- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
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
                'example' => '68A40250-50CD-034C-B728-0BD135850177',
              ),
              'Data' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'BasicCarrier' => 
                  array (
                    'description' => '基础运营商。取值：

- **中国移动**。
- **中国联通**。
- **中国电信**。
- **中国广电**。',
                    'type' => 'string',
                    'example' => '中国移动',
                  ),
                  'Carrier' => 
                  array (
                    'description' => '实际运营商（含虚拟运营商），如果存在携号转网，则为携转后的运营商。',
                    'type' => 'string',
                    'example' => '中国移动',
                  ),
                  'IsNumberPortability' => 
                  array (
                    'description' => '是否携号转网。取值：

- **true**：是

- **false**：否',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'NumberSegment' => 
                  array (
                    'description' => '号码归属号段。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '139',
                  ),
                  'City' => 
                  array (
                    'description' => '号码归属城市。',
                    'type' => 'string',
                    'example' => '杭州',
                  ),
                  'Province' => 
                  array (
                    'description' => '号码归属省份。',
                    'type' => 'string',
                    'example' => '浙江',
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
            'errorCode' => 'EncyrptTypeIllegal',
            'errorMessage' => 'The encryption type of the mobile phone number is illegal',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified mobile phone number is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'PhoneNumberNotfound',
            'errorMessage' => 'The queried number is not found.',
          ),
          3 => 
          array (
            'errorCode' => 'MobileNumberTypeNotMatch',
            'errorMessage' => 'The number and number type do not match.',
          ),
          4 => 
          array (
            'errorCode' => 'AuthCodeNotExist',
            'errorMessage' => 'The authorization code application failed and cannot be used.',
          ),
          5 => 
          array (
            'errorCode' => 'MobileNumberIllegal',
            'errorMessage' => 'Wrong format of phone number',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD135850177\\",\\n  \\"Data\\": {\\n    \\"BasicCarrier\\": \\"中国移动\\",\\n    \\"Carrier\\": \\"中国移动\\",\\n    \\"IsNumberPortability\\": false,\\n    \\"NumberSegment\\": 139,\\n    \\"City\\": \\"杭州\\",\\n    \\"Province\\": \\"浙江\\"\\n  }\\n}","type":"json"}]',
      'title' => '号码归属查询（加密版）',
      'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品计费](~~154008~~)。
- 默认仅阿里云账号使用本接口，RAM用户只有在被授予相关API操作权限后才可使用。相关操作，请参见[为RAM用户授权](~~154006~~)。
- 本接口用于获取号码当前服务运营商、归属地和携号转网信息，支持**明文**、**MD5**、**SHA256**加密手机号码的查询。

- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。

### QPS限制
本接口的单用户QPS限制为2000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'responseParamsDescription' => '### 状态码原因及解决方案

|状态码|原因|解决方案|
|------------- |------------|-----|
|OK：成功。|请求参数符合要求。|表示接口调用成功。|
|InvalidParameter：传入的手机号错误或参数格式错误。|请求参数的手机号格式错误或请求参数不符合API接口的要求。|输入正确的手机号或调整请求参数的格式，再重新提交请求。如：删除手机号中的不可见字符、空格、调整为半角字符等。|
|PhoneNumberNotfound：传入的手机号查不到归属结果。|传入的手机号查不到归属结果。|请更换其他手机号查询。|
|isp.UNKNOWN：未知异常。|系统返回了未知异常。|请尝试重新调用接口，建议重试的次数不要超过3次。|

### BasicCarrier和Carrier字段含义：

|手机号段归属|是否有携号转网|BasicCarrier字段返回结果|Carrier字段返回结果|
|--|--|--|--|
|基础运营商号段|是|携转后基础运营商（中国移动、中国联通、中国电信、中国广电）|携转后基础运营商（中国移动、中国联通、中国电信、中国广电）|
|基础运营商号段|否|基础运营商（中国移动、中国联通、中国电信、中国广电）|基础运营商（中国移动、中国联通、中国电信、中国广电）|
|虚拟运营商号段|暂不支持|基础运营商（中国移动、中国联通、中国电信、中国广电）|虚拟运营商（如：阿里云通信等）|',
    ),
    'PhoneNumberStatusForPublic' => 
    array (
      'summary' => '获取手机号码实时在网状态，例如正常、停机、空号等状态。支持明文、MD5/SHA256加密方式的号码查询。',
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
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Dd1r***4id',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '待查询的号码。

- 若Mask取值为NORMAL，该字段为11位手机号码。
- 若Mask取值为MD5，该字段为32位加密字符串。
- 若Mask取值为SHA256，该字段为64位加密字符串。

> 加密字符串中字母不区分大小写。',
            'type' => 'string',
            'required' => false,
            'example' => '139****1234',
          ),
        ),
        2 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密方式。取值：

- **NORMAL**：不加密

- **MD5**

- **SHA256**',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'NORMAL',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'CC3BB6D2-****-****-9DCE-B38165CE4C47',
              ),
              'Message' => 
              array (
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '结构体',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '检测手机号返回状态。取值：

- **NORMAL**：正常。
- **SHUTDOWN**：停机。
- **POWER_OFF**：关机。
- **NOT_EXIST**：空号。
- **SUSPECTED_POWER_OFF** ：疑似关机。
- **BUSY**：忙。
- **UNKNOWN**：未知。

> 因运营商系统调整，中国电信的号码不支持返回：忙、疑似关机、关机状态。 [详见官网公告](https://help.aliyun.com/document_detail/2489709.html)',
                    'type' => 'string',
                    'example' => 'NORMAL',
                  ),
                  'Carrier' => 
                  array (
                    'description' => '号码当前归属的基础运营商。如果查询的号码存在携号转网，则返回携号转网后的基础运营商。

取值：

- **CMCC**：中国移动
- **CUCC**：中国联通
- **CTCC**：中国电信

> 暂不支持中国广电的号码查询。',
                    'type' => 'string',
                    'example' => 'CMCC',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '请求状态码。取值：

- **OK**：成功。
- **OperatorLimit**：运营商禁止查询的手机号。
- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。

> 请访问[错误码中心](https://next.api.aliyun.com/document/Dytnsapi/2020-02-17/errorCode)查看更多错误码。',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperatorLimit',
            'errorMessage' => 'The number is limited by the operator',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC3BB6D2-****-****-9DCE-B38165CE4C47\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"NORMAL\\",\\n    \\"Carrier\\": \\"CMCC\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
      'title' => '号码状态查询（通用场景）',
      'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。
- 默认仅阿里云账号使用本接口，RAM用户只有在被授予相关API操作权限后才可使用。相关操作，请参见[为RAM用户授权](~~154006~~)。
- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。
### QPS限制
本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'PhoneNumberStatusForAccount' => 
    array (
      'summary' => '获取手机号码实时在网状态，例如正常、停机、空号等状态。支持明文、MD5/SHA256加密方式的号码查询。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'Dd1r***4id',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的号码。

- 若Mask取值为NORMAL，该字段为11位手机号码。
- 若Mask取值为MD5，该字段为32位加密字符串。
- 若Mask取值为SHA256，该字段为64位加密字符串。


><notice>加密字符串中字母不区分大小写。 ></notice>',
            'type' => 'string',
            'required' => true,
            'example' => '139****1234',
          ),
        ),
        2 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密方式。取值：

- **NORMAL**：不加密
- **MD5**
- **SHA256**',
            'type' => 'string',
            'required' => true,
            'example' => 'NORMAL',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结构体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。取值：

- **OK**：成功。
- **OperatorLimit**：运营商禁止查询的手机号。
- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
              ),
              'Data' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '检测手机号返回状态。取值：

- **NORMAL**：正常。
- **SHUTDOWN**：停机。
- **POWER_OFF**：关机。
- **NOT_EXIST**：空号。
- **DEFECT**：异常号码。
- **UNKNOWN**：未知。

>因运营商系统调整，中国电信的号码不支持返回：忙、关机状态。 [详见官网公告](https://help.aliyun.com/document_detail/2489709.html)',
                    'type' => 'string',
                    'example' => 'NORMAL',
                  ),
                  'Carrier' => 
                  array (
                    'description' => '号码当前归属的基础运营商。如果查询的号码存在携号转网，则返回携号转网后的基础运营商。取值：

- **CMCC**：中国移动
- **CUCC**：中国联通
- **CTCC**：中国电信
> 暂不支持中国广电的号码查询。',
                    'type' => 'string',
                    'example' => 'CMCC',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperatorLimit',
            'errorMessage' => 'The number is limited by the operator.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MobileNumberIllegal',
            'errorMessage' => 'Wrong format of phone number',
          ),
          1 => 
          array (
            'errorCode' => 'CarrierIllegal',
            'errorMessage' => 'Illegal carrier type',
          ),
          2 => 
          array (
            'errorCode' => 'AuthCodeNotExist',
            'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
          ),
          3 => 
          array (
            'errorCode' => 'MobileNumberTypeIllegal',
            'errorMessage' => 'Invalid number type.',
          ),
          4 => 
          array (
            'errorCode' => 'MobileNumberTypeNotMatch',
            'errorMessage' => 'The number and number type do not match.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'System error',
          ),
          1 => 
          array (
            'errorCode' => 'Unknown',
            'errorMessage' => 'Unknown error',
          ),
          2 => 
          array (
            'errorCode' => 'EncyrptTypeIllegal',
            'errorMessage' => 'The encryption type of the mobile phone number is illegal',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"NORMAL\\",\\n    \\"Carrier\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
      'title' => '号码状态查询（账号验证场景）',
      'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。
- 默认仅阿里云账号使用本接口，RAM用户只有在被授予相关API操作权限后才可使用。相关操作，请参见[为RAM用户授权](~~154006~~)。
- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。
### QPS限制
本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'PhoneNumberStatusForReal' => 
    array (
      'summary' => '获取手机号码实时在网状态，例如正常、停机、空号等状态。支持明文、MD5/SHA256加密方式的号码查询。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'Dd1r***4id',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的号码。

- 若Mask取值为NORMAL，该字段为11位手机号码。
- 若Mask取值为MD5，该字段为32位加密字符串。
- 若Mask取值为SHA256，该字段为64位加密字符串。

><notice>加密字符串中字母不区分大小写。></notice>',
            'type' => 'string',
            'required' => true,
            'example' => '189****8999',
          ),
        ),
        2 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码的加密方式。取值：

- **NORMAL**：不加密

- **MD5**

- **SHA256**',
            'type' => 'string',
            'required' => true,
            'example' => 'NORMAL',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结构体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。取值：

- **OK**：成功。
- **OperatorLimit**：运营商禁止查询的手机号。
- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
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
                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
              ),
              'Data' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '检测手机号返回状态。取值：

- **NORMAL**：正常。
- **SHUTDOWN**：停机。
- **POWER_OFF**：关机。
- **NOT_EXIST**：空号。
- **BUSY**：忙。
- **SUSPECTED_POWER_OFF**：疑似关机。
- **DEFECT**：异常号码。
- **UNKNOWN**：未知。

>因运营商系统调整，中国电信的号码不支持返回：忙、疑似关机、关机状态。 [详见官网公告](https://help.aliyun.com/document_detail/2489709.html)',
                    'type' => 'string',
                    'example' => 'NORMAL',
                  ),
                  'Carrier' => 
                  array (
                    'description' => '号码当前归属的基础运营商。如果查询的号码存在携号转网，则返回携号转网后的基础运营商。取值：

- **CMCC**：中国移动
- **CUCC**：中国联通
- **CTCC**：中国电信
> 暂不支持中国广电的号码查询。',
                    'type' => 'string',
                    'example' => 'CMCC',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperatorLimit',
            'errorMessage' => 'The number is limited by the operator.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MobileNumberIllegal',
            'errorMessage' => 'Wrong format of phone number',
          ),
          1 => 
          array (
            'errorCode' => 'CarrierIllegal',
            'errorMessage' => 'Illegal carrier type',
          ),
          2 => 
          array (
            'errorCode' => 'AuthCodeNotExist',
            'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
          ),
          3 => 
          array (
            'errorCode' => 'MobileNumberTypeIllegal',
            'errorMessage' => 'Invalid number type.',
          ),
          4 => 
          array (
            'errorCode' => 'MobileNumberTypeNotMatch',
            'errorMessage' => 'The number and number type do not match.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'System error',
          ),
          1 => 
          array (
            'errorCode' => 'Unknown',
            'errorMessage' => 'Unknown error',
          ),
          2 => 
          array (
            'errorCode' => 'EncyrptTypeIllegal',
            'errorMessage' => 'The encryption type of the mobile phone number is illegal',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"NORMAL\\",\\n    \\"Carrier\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
      'title' => '号码状态查询（风控检测场景）',
      'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。
- 默认仅阿里云账号使用本接口，RAM用户只有在被授予相关API操作权限后才可使用。相关操作，请参见[为RAM用户授权](~~154006~~)。
- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。
### QPS限制
本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'PhoneNumberStatusForSms' => 
    array (
      'summary' => '获取手机号码实时在网状态，例如正常、停机、空号等状态。支持明文、MD5/SHA256加密方式的号码查询。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'zf08***pi6',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的号码。

- 若Mask取值为NORMAL，该字段为11位手机号码。
- 若Mask取值为MD5，该字段为32位加密字符串。
- 若Mask取值为SHA256，该字段为64位加密字符串。

><notice>加密字符串中字母不区分大小写。></notice>',
            'type' => 'string',
            'required' => true,
            'example' => '181****1234',
          ),
        ),
        2 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码的加密方式。取值：

- **NORMAL**：不加密

- **MD5**

- **SHA256**',
            'type' => 'string',
            'required' => true,
            'example' => 'NORMAL',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结构体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。取值：

- **OK**：请求成功。
- **OperatorLimit**：运营商禁止查询的手机号。
- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
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
                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '68A40250-50CD-034C-B728-0BD135850177',
              ),
              'Data' => 
              array (
                'description' => '结构体',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '检测手机号返回状态。取值：

- **NORMAL**：正常。
- **SHUTDOWN**：停机。
- **POWER_OFF**：关机。
- **NOT_EXIST**：空号。
- **DEFECT**：异常号码。
- **UNKNOWN**：未知。

>因运营商系统调整，中国电信的号码不支持返回：忙、疑似关机、关机状态。 [详见官网公告](https://help.aliyun.com/document_detail/2489709.html)',
                    'type' => 'string',
                    'example' => 'NORMAL',
                  ),
                  'Carrier' => 
                  array (
                    'description' => '号码当前归属的基础运营商。如果查询的号码存在携号转网，则返回携号转网后的基础运营商。取值：

- **CMCC**：中国移动
- **CUCC**：中国联通
- **CTCC**：中国电信
> 暂不支持中国广电的号码查询。',
                    'type' => 'string',
                    'example' => 'CMCC',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperatorLimit',
            'errorMessage' => 'The number is limited by the operator.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MobileNumberIllegal',
            'errorMessage' => 'Wrong format of phone number',
          ),
          1 => 
          array (
            'errorCode' => 'CarrierIllegal',
            'errorMessage' => 'Illegal carrier type',
          ),
          2 => 
          array (
            'errorCode' => 'AuthCodeNotExist',
            'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
          ),
          3 => 
          array (
            'errorCode' => 'MobileNumberTypeIllegal',
            'errorMessage' => 'Invalid number type.',
          ),
          4 => 
          array (
            'errorCode' => 'MobileNumberTypeNotMatch',
            'errorMessage' => 'The number and number type do not match.',
          ),
          5 => 
          array (
            'errorCode' => 'isp.UNKNOWN',
            'errorMessage' => 'An error occurred due to unknown reasons.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'System error',
          ),
          1 => 
          array (
            'errorCode' => 'Unknown',
            'errorMessage' => 'Unknown error',
          ),
          2 => 
          array (
            'errorCode' => 'EncyrptTypeIllegal',
            'errorMessage' => 'The encryption type of the mobile phone number is illegal',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD135850177\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"NORMAL\\",\\n    \\"Carrier\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
      'title' => '号码状态查询（短信业务场景）',
      'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。
- 默认仅阿里云账号使用本接口，RAM用户只有在被授予相关API操作权限后才可使用。相关操作，请参见[为RAM用户授权](~~154006~~)。
- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。
### QPS限制
本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'PhoneNumberStatusForVoice' => 
    array (
      'summary' => '获取手机号码实时在网状态，例如正常、停机、空号等状态。支持明文、MD5/SHA256加密方式的号码查询。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'Dd1r***4id',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的号码。

- 若Mask取值为NORMAL，该字段为11位手机号码。
- 若Mask取值为MD5，该字段为32位加密字符串。
- 若Mask取值为SHA256，该字段为64位加密字符串。

><notice>加密字符串中字母不区分大小写。></notice>
',
            'type' => 'string',
            'required' => true,
            'example' => '139****1234',
          ),
        ),
        2 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密方式。取值：

- **NORMAL**：不加密

- **MD5**

- **SHA256**',
            'type' => 'string',
            'required' => true,
            'example' => 'NORMAL',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结构体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。取值：

- **OK**：成功。
- **OperatorLimit**：运营商禁止查询的手机号。
- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
              ),
              'Data' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '检测手机号返回状态。取值：

- **NORMAL**：正常。
- **SHUTDOWN**：停机。
- **POWER_OFF**：关机。
- **NOT_EXIST**：空号。
- **SUSPECTED_POWER_OFF** ：疑似关机。
- **DEFECT**：异常号码。
- **UNKNOWN**：未知。

>因运营商系统调整，中国电信的号码不支持返回：忙、疑似关机、关机状态。 [详见官网公告](https://help.aliyun.com/document_detail/2489709.html)',
                    'type' => 'string',
                    'example' => 'NORMAL',
                  ),
                  'Carrier' => 
                  array (
                    'description' => '号码当前归属的基础运营商。如果查询的号码存在携号转网，则返回携号转网后的基础运营商。取值：

- **CMCC**：中国移动
- **CUCC**：中国联通
- **CTCC**：中国电信
> 暂不支持中国广电的号码查询。',
                    'type' => 'string',
                    'example' => 'CTCC',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperatorLimit',
            'errorMessage' => 'The number is limited by the operator.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MobileNumberIllegal',
            'errorMessage' => 'Wrong format of phone number',
          ),
          1 => 
          array (
            'errorCode' => 'CarrierIllegal',
            'errorMessage' => 'Illegal carrier type',
          ),
          2 => 
          array (
            'errorCode' => 'AuthCodeNotExist',
            'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
          ),
          3 => 
          array (
            'errorCode' => 'MobileNumberTypeIllegal',
            'errorMessage' => 'Invalid number type.',
          ),
          4 => 
          array (
            'errorCode' => 'MobileNumberTypeNotMatch',
            'errorMessage' => 'The number and number type do not match.',
          ),
          5 => 
          array (
            'errorCode' => 'EncryptTypeIllegal',
            'errorMessage' => 'Invalid encryption type.',
          ),
          6 => 
          array (
            'errorCode' => 'isp.UNKNOWN',
            'errorMessage' => 'An error occurred due to unknown reasons.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'System error',
          ),
          1 => 
          array (
            'errorCode' => 'Unknown',
            'errorMessage' => 'Unknown error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"NORMAL\\",\\n    \\"Carrier\\": \\"CTCC\\"\\n  }\\n}","type":"json"}]',
      'title' => '号码状态查询（语音业务场景）',
      'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。
- 默认仅阿里云账号使用本接口，RAM用户只有在被授予相关API操作权限后才可使用。相关操作，请参见[为RAM用户授权](~~154006~~)。
- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。
### QPS限制
本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'PhoneNumberStatusForVirtual' => 
    array (
      'summary' => '获取手机号码虚拟号码（俗称小号）状态。支持明文、MD5/SHA256加密方式的号码查询。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'Dd1r***4id',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的号码。

- 若Mask取值为NORMAL，该字段为11位手机号码。
- 若Mask取值为MD5，该字段为32位加密字符串。
- 若Mask取值为SHA256，该字段为64位加密字符串。

><notice>加密字符串中字母不区分大小写。></notice>',
            'type' => 'string',
            'required' => true,
            'example' => '139****0000',
          ),
        ),
        2 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码的加密方式。取值：

- **NORMAL**：不加密

- **MD5**

- **SHA256**',
            'type' => 'string',
            'required' => true,
            'example' => 'NORMAL',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结构体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '请求状态码。取值：

- **OK**：成功。
- **OperatorLimit**：运营商禁止查询的手机号。
- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
              ),
              'Data' => 
              array (
                'description' => '结构体',
                'type' => 'object',
                'properties' => 
                array (
                  'IsPrivacyNumber' => 
                  array (
                    'description' => '是否是运营商的虚拟号码。取值：

- **true**：是

- **false**：否',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperatorLimit',
            'errorMessage' => 'The number is limited by the operator.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MobileNumberIllegal',
            'errorMessage' => 'Wrong format of phone number',
          ),
          1 => 
          array (
            'errorCode' => 'CarrierIllegal',
            'errorMessage' => 'Illegal carrier type',
          ),
          2 => 
          array (
            'errorCode' => 'AuthCodeNotExist',
            'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
          ),
          3 => 
          array (
            'errorCode' => 'MobileNumberTypeIllegal',
            'errorMessage' => 'Invalid number type.',
          ),
          4 => 
          array (
            'errorCode' => 'MobileNumberTypeNotMatch',
            'errorMessage' => 'The number and number type do not match.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'System error',
          ),
          1 => 
          array (
            'errorCode' => 'Unknown',
            'errorMessage' => 'Unknown error',
          ),
          2 => 
          array (
            'errorCode' => 'EncyrptTypeIllegal',
            'errorMessage' => 'The encryption type of the mobile phone number is illegal',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Data\\": {\\n    \\"IsPrivacyNumber\\": true\\n  }\\n}","type":"json"}]',
      'title' => '号码状态查询（虚拟号场景）',
      'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。
- 调用该接口当返回结果中：Code="OK" 且IsPrivacyNumber = true or false时计费，其他情况不计费。
- 默认仅阿里云账号使用本接口，RAM用户只有在被授予相关API操作权限后才可使用。相关操作，请参见[为RAM用户授权](~~154006~~)。
- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。
### QPS限制
本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'DescribePhoneTwiceTelVerify' => 
    array (
      'summary' => '验证手机号是否为运营商二次放号的号码，支持在一次请求中快速检验号码是否为二次放号。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '154743',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdytnsHYEZ9Z',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'Dd1r***4id',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的号码。

- 若Mask取值为NORMAL，该字段为11位手机号码。
- 若Mask取值为MD5，该字段为32位加密字符串。
- 若Mask取值为SHA256，该字段为64位加密字符串。

><notice>加密字符串中字母不区分大小写。></notice>',
            'type' => 'string',
            'required' => true,
            'example' => '139*******',
          ),
        ),
        2 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码的加密方式。取值：

- **NORMAL**：不加密
- **MD5**
- **SHA256**',
            'type' => 'string',
            'required' => true,
            'example' => 'NORMAL',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间，格式必须为yyyy-MM-dd HH:mm:ss。该时间为手机用户在业务侧的注册时间。如果注册时间在运营商放号时间之后，则表示该号码不是二次号，否则返回结果是二次号。

> - 若单个号码在运营商侧存在多次放号的情况，系统将以最后一次在运营商侧的放号时间作为判断依据。
> - 注册时间必须为1970-01-01 00:00:00之后的时间。',
            'type' => 'string',
            'required' => true,
            'example' => '2018-01-01 00:00:00',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '68A40250-50CD-034C-B728-0BD135850177',
              ),
              'Code' => 
              array (
                'description' => '请求状态码。取值：

- **OK**：请求成功。

- **PortabilityNumberNotSupported**：不支持的携号转网号码。
- **RequestNumberNotSupported**：不支持中国广电号码（192开头）和虚拟运营商号码的查询。

- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。

> 当Code取值为OK，且VerifyResult值不为0时计费，计费文档请参见[号码百科定价](~~154751~~)。
>',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'VerifyResult' => 
                  array (
                    'description' => '查询结果。取值：

- **0**：无法判断。
- **1**：是二次放号。
- **2**：不是二次放号。
- **3**：号码已注销。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Carrier' => 
                  array (
                    'description' => '运营商。取值：

- **CMCC**：中国移动。
- **CUCC**：中国联通。
- **CTCC**：中国电信。

> 返回当前号码的归属运营商，如果该号码存在携号转网的情况，则返回携号转网后的运营商。',
                    'type' => 'string',
                    'example' => 'CMCC',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'PortabilityNumberNotSupported',
            'errorMessage' => '不支持2021年6月前携号转网的号码查询',
          ),
          1 => 
          array (
            'errorCode' => 'RequestNumberNotSupported',
            'errorMessage' => '不支持中国广电号码（192开头）和虚拟运营商号码的查询',
          ),
          2 => 
          array (
            'errorCode' => 'RequestFrequencyLimit',
            'errorMessage' => '因运营商限制，禁止在短时间内高频对同一个号码进行反复查询',
          ),
        ),
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
          4 => 
          array (
            'errorCode' => 'MobileNumberIllegal',
            'errorMessage' => 'Wrong format of phone number',
          ),
          5 => 
          array (
            'errorCode' => 'MobileNumberTypeNotMatch',
            'errorMessage' => 'Phone number and encryption type do not match',
          ),
          6 => 
          array (
            'errorCode' => 'InputParamIllegal',
            'errorMessage' => 'Wrong format of input parameter',
          ),
          7 => 
          array (
            'errorCode' => 'AuthCodeIllegal',
            'errorMessage' => 'Illegal authCode.',
          ),
          8 => 
          array (
            'errorCode' => 'ThresholdIllegal',
            'errorMessage' => 'Please fill in the threshold range from 0 to 100 correctly.',
          ),
          9 => 
          array (
            'errorCode' => 'AuthCodeNotExist',
            'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
          ),
          10 => 
          array (
            'errorCode' => 'MobileNumberTypeIllegal',
            'errorMessage' => 'Invalid number type.',
          ),
          11 => 
          array (
            'errorCode' => 'TagNotExist',
            'errorMessage' => 'The label does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Unknown',
            'errorMessage' => 'Unknown error',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'System error',
          ),
          2 => 
          array (
            'errorCode' => 'RequestSupplierError',
            'errorMessage' => 'Request supplier error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD135850177\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"VerifyResult\\": \\"1\\",\\n    \\"Carrier\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
      'title' => '验证手机号是否为运营商二次放号的号码',
      'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。
- 当返回结果中：Code="OK" 且 VerifyResult != 0 时计费，其他情况不计费。 
- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。

## QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。

## 授权信息
默认仅限阿里云账号使用本接口，RAM用户只有在被授予了相关API操作权限后方可使用。具体请参见[为RAM用户授权](~~154006~~)。',
      'responseParamsDescription' => '### 状态码原因及解决方案
|HttpCode|状态码|原因|解决方案|
| ------- | ------- | ------- | ------ |
|200|OK：成功。|请求参数符合要求。|表示接口调用成功。|
|200|PortabilityNumberNotSupported：不支持的携号转网号码。|部分携号转网号码会返回此错误码。|建议更换其他号码查询。携号转网的号码在原运营商侧已销户，新运营商侧认为携入的时间为开户时间，因此携号转网的号码无法准确的查询到该号码的真实情况。|

### 异常原因及解决方案
|HttpCode|状态码|原因|解决方案|
| ------- | ------- | ------- | ------- |
|400|AuthCodeNotExist：授权码不存在。|授权码不存在。|请先在号码分析服务申请您所需的标签，申请成功并获得授权码后，再发起接口调用。|
|400|MobileNumberIllegal：请求参数的手机号格式有误。|手机号格式填写有误。|若手机号未加密，填入11位正确的数字号码即可；若手机号经MD5加密处理，该字段为32位加密字符串；若手机号经SHA256加密处理，该字段为64位加密字符串。|
|400|MobileNumberTypeIllegal：加密方式类型错误。|不支持的加密方式或加密类型不规范。|加密方式仅支持NORMAL、MD5、SHA256三种，且必须为大写字符。|
|500|Unknown：未知异常。|系统返回了未知异常。|请您尝试重新调用接口，建议重试的次数不要超过3次。|
|500|SystemError：网元系统异常。|系统错误。|请尝试重新调用接口，建议重试次数不要超过3次。|',
    ),
    'DescribePhoneNumberOnlineTime' => 
    array (
      'summary' => '查询手机用户在运营商侧的在网时长。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。
> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'QASDW@#**',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的号码。

- 若Mask取值为NORMAL，该字段为11位手机号码。
- 若Mask取值为MD5，该字段为32位加密字符串。
- 若Mask取值为SHA256，该字段为64位加密字符串。

><notice>加密字符串中字母不区分大小写。></notice>',
            'type' => 'string',
            'required' => true,
            'example' => '1390000****',
          ),
        ),
        2 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码的加密方式。取值：

- **NORMAL**：不加密
- **MD5**
- **SHA256**',
            'type' => 'string',
            'required' => true,
            'example' => 'NORMAL',
          ),
        ),
        3 => 
        array (
          'name' => 'Carrier',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对外运营商。取值：

- **MOBILE**：中国移动。
- **UNICOM**：中国联通。
- **TELECOM**：中国电信。

><notice>非必填项，阿里云会根据号码归属的运营商类型做自动判断，该字段的取值对查询结果无任何影响。></notice>',
            'type' => 'string',
            'required' => false,
            'example' => 'UNICOM',
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
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
              ),
              'Code' => 
              array (
                'description' => '请求状态码。取值：

- **OK**：请求成功。
- **PortabilityNumberNotSupported**：不支持的携号转网号码。
- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。

> 当Code取值为OK，且VerifyResult值不为-1时计费，计费文档请参见[号码百科定价](~~154751~~)。
>',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '号码状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'VerifyResult' => 
                  array (
                    'description' => '在网时长枚举值。枚举值如下：

- **-1**：查无时长。
- **0**：手机状态异常，例如空号。
- **1**：[0-3)月。
- **2**：[3-6]月。
- **3**：(6-12]月。
- **4**：(12-24]月。
- **5**：(24，+)月',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'CarrierCode' => 
                  array (
                    'description' => '运营商短信状态码。取值：
- **CMCC**：中国移动
- **CUCC**：中国联通
- **CTCC**：中国电信
- **CBN**：中国广电',
                    'type' => 'string',
                    'example' => 'CMCC',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'PortabilityNumberNotSupported',
            'errorMessage' => 'Number portability is not supported',
          ),
        ),
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
          5 => 
          array (
            'errorCode' => 'AuthCodeNotExist',
            'errorMessage' => 'Authorization code does not exist',
          ),
          6 => 
          array (
            'errorCode' => 'CarrierIllegal',
            'errorMessage' => 'Illegal carrier type',
          ),
          7 => 
          array (
            'errorCode' => 'MobileNumberIllegal',
            'errorMessage' => 'Wrong format of phone number',
          ),
          8 => 
          array (
            'errorCode' => 'MobileNumberTypeNotMatch',
            'errorMessage' => 'Phone number and encryption type do not match',
          ),
          9 => 
          array (
            'errorCode' => 'MobileNumberTypeIllegal',
            'errorMessage' => 'Invalid number type.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'System error',
          ),
          1 => 
          array (
            'errorCode' => 'Unknown',
            'errorMessage' => 'Unknown error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"VerifyResult\\": \\"1\\",\\n    \\"CarrierCode\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
      'title' => '在网时长查询',
      'description' => '- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。
- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。
### QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'responseParamsDescription' => '### 状态码原因及解决方案
|HttpCode|状态码|原因|解决方案|
| ------- | ------- | ------- | ------ |
|200|OK：成功。|请求参数符合要求。|表示接口调用成功。|
|200|PortabilityNumberNotSupported：不支持的号码查询。|有少部分携号转网号码会返回此错误码。|建议更换其他号码查询。携号转网的号码在原运营商侧已销户，新运营商侧认为携入的时间为开户时间，因此携号转网的号码无法准确的查询到该号码的真实情况。|

### 异常原因及解决方案
|HttpCode|状态码|原因|解决方案|
| ------- | ------- | ------- | ------- |
|400|AuthCodeNotExist：授权码不存在。|授权码不存在。|请先在号码分析服务申请您所需的标签，申请成功并获得授权码后，再发起DescribePhoneNumberOnlineTime接口调用。|
|400|CarrierIllegal：运营商类型非法。|运营商类型非法。|请您填入正确的运营商类型，对于加密的号码，该字段必填且必须为大写字符。|
|400|MobileNumberIllegal：请求参数的手机号格式有误。|手机号格式填写有误。|若手机号未加密，填入11位正确的数字号码即可；若手机号经MD5加密处理，该字段为32位加密字符串；若手机号经SHA256加密处理，该字段为64位加密字符串。|
|400|MobileNumberTypeNotMatch：手机号格式与加密类型不匹配。|填入的手机号与加密类型不匹配。|请您填入正确手机号格式和号码加密类型。|
|400|MobileNumberTypeIllegal：加密方式类型错误。|不支持的加密方式或加密类型不规范。|加密方式仅支持NORMAL、MD5、SHA256三种，且必须为大写字符。|
|500|Unknown：未知异常。|系统返回了未知异常。|请您尝试重新调用接口，建议重试的次数不要超过3次。|
|500|SystemError：网元系统异常。|系统错误。|请尝试重新调用接口，建议重试次数不要超过3次。|',
    ),
    'DescribePhoneNumberAnalysisAI' => 
    array (
      'summary' => '获取号码分析返回结果。',
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
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的号码。',
            'type' => 'string',
            'required' => true,
            'example' => '187****5620',
          ),
        ),
        1 => 
        array (
          'name' => 'Rate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码分数阈值。取值范围：**0~100**。

> 是否接受指定的分数阈值由服务端决定。当不接受指定分数阈值时，此字段输入的数据无效。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '96',
          ),
        ),
        2 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在**号码分析服务**->[**标签广场**](https://dytns.console.aliyun.com/analysis/square)选择标签，提交使用申请，申请通过后，会获得该授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'HwD***nG',
          ),
        ),
        3 => 
        array (
          'name' => 'ModelConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模型参数配置（部分标签能力需要）',
            'type' => 'string',
            'required' => false,
            'example' => '{"trainingJobId": "17**********48"}',
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
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '68A40250-50CD-034C-B728-0BD******177',
              ),
              'Message' => 
              array (
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Number' => 
                  array (
                    'description' => '传入的手机号。',
                    'type' => 'string',
                    'example' => '187****5620',
                  ),
                  'Code' => 
                  array (
                    'description' => '返回的结果编码。

- YES：有效
- NO：无效
- UNKNOWN：未知',
                    'type' => 'string',
                    'example' => 'YES',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '请求状态码。取值：
- OK：成功',
                'type' => 'string',
                'example' => 'OK',
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
            'errorMessage' => 'A system error occurred.',
            'errorCode' => 'InternalError',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"\\",\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD******177\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"Number\\": \\"187****5620\\",\\n    \\"Code\\": \\"YES\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
      'title' => '号码AI分析服务',
      'description' => '使用本接口前，请登录号码百科控制台，在标签广场页面，找到对应的标签，单击申请开通，填写申请资料，审批通过后即可使用。
请确保在使用本接口前，您已充分了解号码百科产品计费。',
    ),
    'DescribePhoneNumberAnalysis' => 
    array (
      'summary' => '获取号码分析返回结果。',
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
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'QASDW@#**',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的号码。',
            'type' => 'string',
            'required' => true,
            'example' => '187****5620',
          ),
        ),
        2 => 
        array (
          'name' => 'NumberType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码类型。取值：

- **0**：手机号

- **1**：手机IMEI号',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码的加密方式。取值：

- **NORMAL**：不加密

- **MD5**

- **SHA256**',
            'type' => 'string',
            'required' => false,
            'example' => 'NORMAL',
          ),
        ),
        4 => 
        array (
          'name' => 'Rate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码分数阈值。取值范围：**0~100**。

><notice>是否接受指定的分数阈值由服务端决定。当不接受指定分数阈值时，此字段输入的数据无效。></notice>',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
              ),
              'Message' => 
              array (
                'description' => '号码状态的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '号码分析返回结果信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'List' => 
                  array (
                    'description' => '数据列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Number' => 
                        array (
                          'description' => '传入的手机号。',
                          'type' => 'string',
                          'example' => '187****5620',
                        ),
                        'Code' => 
                        array (
                          'description' => '返回的结果编码。
- YES：有效
- NO：无效
- UNKNOWN：未知',
                          'type' => 'string',
                          'example' => 'NO',
                        ),
                      ),
                    ),
                    'example' => '',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '请求状态码。取值：

 **OK**：成功。',
                'type' => 'string',
                'example' => 'OK',
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
          4 => 
          array (
            'errorCode' => 'MobileNumberIllegal',
            'errorMessage' => 'Wrong format of phone number',
          ),
          5 => 
          array (
            'errorCode' => 'EncyrptTypeIllegal',
            'errorMessage' => 'The encryption type of the mobile phone number is illegal',
          ),
          6 => 
          array (
            'errorCode' => 'MobileNumberTypeNotMatch',
            'errorMessage' => 'Phone number and encryption type do not match',
          ),
          7 => 
          array (
            'errorCode' => 'CarrierIllegal',
            'errorMessage' => 'Illegal carrier type',
          ),
          8 => 
          array (
            'errorCode' => 'RateIllegal',
            'errorMessage' => 'Illegal threshold parameter',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'invalid parameter',
          ),
          10 => 
          array (
            'errorCode' => 'AuthCodeNotExist',
            'errorMessage' => 'The authorization code application failed and cannot be used.',
          ),
          11 => 
          array (
            'errorCode' => 'TagNotExist',
            'errorMessage' => 'The label does not exist.',
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
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"List\\": [\\n      {\\n        \\"Number\\": \\"187****5620\\",\\n        \\"Code\\": \\"NO\\"\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribePhoneNumberAnalysisResponse>\\n    <RequestId>CC3BB6D2-2FDF-4321-9DCE-B38165CE****</RequestId>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <Data>\\n        <Code>YES</Code>\\n        <Number>1310000****</Number>\\n    </Data>\\n</DescribePhoneNumberAnalysisResponse>","errorExample":""}]',
      'title' => '查询号码分析结果',
      'description' => '- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。
- 请确保在使用本接口前，您已充分了解号码百科[产品计费](~~154008~~)。

### QPS限制
本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。

### 授权信息
默认仅限阿里云账号使用本接口，RAM用户只有在被授予了相关API操作权限后方可使用。具体请参见[为RAM用户授权](~~154006~~)。',
      'responseParamsDescription' => '### 状态码原因及解决方案
|HttpCode|返回码|描述|解决方案|
| ------- | ------- | ------- | ------- |
|200|OK|成功。|表示接口调用成功。|

### 异常原因及解决方案
|HttpCode|错误码|描述|解决方案|
| ------- | ------- | ------- | ------- |
|400|MobileNumberIllegal|手机号非法。|若手机号未加密，填入11位正确的数字号码即可；若手机号经MD5加密处理，该字段为32位加密字符串；若手机号经SHA256加密处理，该字段为64位加密字符串。|
|400|EncyrptTypeIllegal|加密类型非法。|加密方式仅支持NORMAL、MD5、SHA256三种，且必须为大写字符。|
|400|MobileNumberTypeNotMatch|手机号码与加密类型不匹配。|请您填入正确手机号格式和号码加密类型。|
|400|AuthCodeNotExist|授权码不存在或不可用。|授权码不存在或授权码未通过审核，请您核实授权码的正确性。|
|400|TagNotExist|标签或业务资源不存在。|标签不存在或业务资源不存在，请核实标签的可用性。|
|400|RateIllegal|阈值参数非法。|阈值参数非法，请检查阈值参数是否合规。|
|400|InvalidParameter|非法参数。|请求参数错误，请检查参数是否正确。|
|400|System.LimitControl|流控错误。|请将查询频率限制在正常范围内，对于出现该错误码的号码适当进行重查，建议重复查询的次数不要超过3次。|
|500|SystemError|系统异常。|系统错误，请稍后重试。|',
    ),
    'DescribeEmptyNumber' => 
    array (
      'summary' => '通过AI算法，预测手机号是否为空号。',
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
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'Dd1r***4id
',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的号码。


> 目前仅支持单个号码查询。
',
            'type' => 'string',
            'required' => true,
            'example' => '189****1234',
          ),
        ),
        2 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码的加密方式。取值：

- **NORMAL**：不加密

- **MD5**

- **SHA256**',
            'type' => 'string',
            'required' => true,
            'example' => 'NORMAL',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '检测手机号返回状态。取值：

- **EMPTY**：空号。

- **NORMAL**：正常。

- **SUSPECT_EMPTY**：疑似空号。

- **UNKNOWN**：未知。
',
                    'type' => 'string',
                    'example' => 'EMPTY',
                  ),
                  'Number' => 
                  array (
                    'description' => '传入的手机号。',
                    'type' => 'string',
                    'example' => '189****1234',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回状态码。取值：

- **OK**：成功。

- **InvalidPhoneNumber.Check**：手机号非法。',
                'type' => 'string',
                'example' => 'OK',
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
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"EMPTY\\",\\n    \\"Number\\": \\"189****1234\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
      'title' => '手机号空号检测',
      'description' => '- 本接口用于验证号码是否为空号。发起调用该接口验证号码请求时，系统会根据验证次数计费，标准价为0.01元/次。**请确保在使用该接口前，已充分了解本产品的收费方式和价格。**
- 当返回结果中：Code="OK" 且 Status != UNKNOWN 时计费，其他情况不计费。 
- 由于本产品通过AI算法预测手机号的空号概率，所以无法做到100%准确。当前评估的准确率和召回率约为95%左右。**调用时请注意差别**。
- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。

### QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。

### 授权信息
默认仅限阿里云账号使用本接口，RAM用户只有在被授予了相关API操作权限后方可使用。具体请参见[为RAM用户授权](~~154006~~)。',
    ),
    'TwoElementsVerification' => 
    array (
      'summary' => '二要素（姓名和手机号）核验。用于比对用户填写的姓名、手机号两项信息是否属于同一用户。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'QASDW@#**',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待检验的号码。

- 若Mask取值为NORMAL，该字段为明文。
- 若Mask取值为MD5，请将该字段做MD5加密。
- 若Mask取值为SHA256，请将该字段做SHA256加密。

><notice>加密字符串中字母不区分大小写。></notice>',
            'type' => 'string',
            'required' => true,
            'example' => '1390000****',
          ),
        ),
        2 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密方式。取值：

- **NORMAL**：不加密

- **MD5**

- **SHA256**',
            'type' => 'string',
            'required' => true,
            'example' => 'MD5',
            'enum' => 
            array (
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待核验的姓名。

- 若Mask取值为NORMAL，该字段为明文。
- 若Mask取值为MD5，请将该字段做MD5加密。
- 若Mask取值为SHA256，请将该字段做SHA256加密。

><notice>加密字符串中字母不区分大小写。></notice>',
            'type' => 'string',
            'required' => true,
            'example' => '阿里云',
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

- **OK**：请求成功。

- 其他错误码，请参见本章的错误码表。
- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码或姓名进行反复查询，如返回此错误码，请您稍后再试。',
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
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE****',
              ),
              'Data' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'IsConsistent' => 
                  array (
                    'description' => '验证结果是否一致。返回：

- **1**：一致

- **0**：不一致

- **2**：查无

不同运营商、不同城市的数据更新时效，通常在T+1至T+3之间。
不同的运营商手机号，在不同状态下，核验结果如下： 

|运营商/手机号状态|停机|空号|销号|
|--|--|--|--|
|中国移动|正常核验|查无|查无|
|中国联通|正常核验|不一致|不一致|
|中国电信|正常核验|查无|查无|',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'BasicCarrier' => 
                  array (
                    'description' => '基础运营商。取值：

- **中国移动**。

- **中国联通**。

- **中国电信**。

><notice>暂时不支持中国广电的号码。></notice>',
                    'type' => 'string',
                    'example' => '中国移动',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperatorLimit',
            'errorMessage' => 'The number is limited by the operator.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MobileNumberIllegal',
            'errorMessage' => 'Wrong format of phone number',
          ),
          1 => 
          array (
            'errorCode' => 'EncyrptTypeIllegal',
            'errorMessage' => 'The encryption type of the mobile phone number is illegal',
          ),
          2 => 
          array (
            'errorCode' => 'CarrierIllegal',
            'errorMessage' => 'Illegal carrier type',
          ),
          3 => 
          array (
            'errorCode' => 'AuthCodeNotExist',
            'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
          ),
          4 => 
          array (
            'errorCode' => 'MobileNumberTypeNotMatch',
            'errorMessage' => 'The number and number type do not match.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Unknown',
            'errorMessage' => 'Unknown error',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'System error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE****\\",\\n  \\"Data\\": {\\n    \\"IsConsistent\\": 1,\\n    \\"BasicCarrier\\": \\"中国移动\\"\\n  }\\n}","type":"json"}]',
      'title' => '运营商二要素核验',
      'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。
- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。
- 当接口值返回值：Code="OK"且IsConsistent != 2时计费，其他返回结果不计费。

### QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'ThreeElementsVerification' => 
    array (
      'summary' => '三要素（姓名、手机号和身份证号）核验。用于比对用户填写的姓名、手机号、身份证号三个信息是否属于同一用户。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'QASDW@#**',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待检验的号码。

- 若Mask取值为NORMAL，该字段为明文。
- 若Mask取值为MD5，请将该字段做MD5加密。
- 若Mask取值为SHA256，请将该字段做SHA256加密。

><notice>加密字符串中字母不区分大小写。></notice>',
            'type' => 'string',
            'required' => true,
            'example' => '1390000****',
          ),
        ),
        2 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密方式。取值：

- **NORMAL**：不加密

- **MD5**

- **SHA256**',
            'type' => 'string',
            'required' => true,
            'example' => 'MD5',
            'enum' => 
            array (
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'CertCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待核验的身份证号。

- 若Mask取值为NORMAL，该字段为明文。
- 若Mask取值为MD5，请将该字段做MD5加密。
- 若Mask取值为SHA256，请将该字段做SHA256加密。

><notice>加密字符串中字母不区分大小写。></notice>',
            'type' => 'string',
            'required' => true,
            'example' => '83d8040d3cb2181e04****dc6ff5566d4493876a4a5da782887446356b0a787e',
          ),
        ),
        4 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待核验的姓名。

- 若Mask取值为NORMAL，该字段为明文。
- 若Mask取值为MD5，请将该字段做MD5加密。
- 若Mask取值为SHA256，请将该字段做SHA256加密。

><notice>加密字符串中字母不区分大小写。></notice>',
            'type' => 'string',
            'required' => true,
            'example' => '阿里云',
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

- **OK**：请求成功。
- 其他错误码，请参见本章的错误码表。
- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
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
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
              ),
              'Data' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'BasicCarrier' => 
                  array (
                    'description' => '基础运营商。取值：

- **中国移动**。

- **中国联通**。

- **中国电信**。',
                    'type' => 'string',
                    'example' => '中国移动',
                  ),
                  'IsConsistent' => 
                  array (
                    'description' => '验证结果是否一致。返回：

- **1**：一致
- **0**：不一致
- **2**：查无
>不同运营商、不同城市的数据更新时效，通常在T+1至T+3之间。
不同的运营商手机号，在不同状态下，核验结果如下： 

|运营商/手机号状态|停机|空号|销号|
|--|--|--|--|
|中国移动|正常核验|查无|查无|
|中国联通|正常核验|不一致|不一致|
|中国电信|正常核验|查无|查无|',
                    'type' => 'integer',
                    'format' => 'int32',
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
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperatorLimit',
            'errorMessage' => 'The number is limited by the operator.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MobileNumberIllegal',
            'errorMessage' => 'Wrong format of phone number',
          ),
          1 => 
          array (
            'errorCode' => 'EncyrptTypeIllegal',
            'errorMessage' => 'The encryption type of the mobile phone number is illegal',
          ),
          2 => 
          array (
            'errorCode' => 'CarrierIllegal',
            'errorMessage' => 'Illegal carrier type',
          ),
          3 => 
          array (
            'errorCode' => 'CertCodeIllegal',
            'errorMessage' => 'Invalid CertCode value.',
          ),
          4 => 
          array (
            'errorCode' => 'MobileNumberTypeNotMatch',
            'errorMessage' => 'The number and number type do not match.',
          ),
          5 => 
          array (
            'errorCode' => 'AuthCodeNotExist',
            'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'Unknown',
            'errorMessage' => 'Unknown error',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'System error',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Data\\": {\\n    \\"BasicCarrier\\": \\"中国移动\\",\\n    \\"IsConsistent\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '运营商三要素核验',
      'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。
- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。
- 当接口值返回值：Code=\'OK\' 且 IsConsistent != 2时计费，其他返回结果不计费。

### QPS限制
本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'PhoneNumberEncrypt' => 
    array (
      'summary' => '将原始号码加密为一个140开头的虚拟号码。通过结合阿里云的通信服务，可以使用加密后的140号码发起语音呼叫。实现虚拟号码呼叫的效果。',
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
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'QASDW@#**',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的号码。

> 目前仅支持单个号码查询。
',
            'type' => 'string',
            'required' => true,
            'example' => '1390000****',
          ),
        ),
        2 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码的加密方式。取值：**NORMAL**。


><notice>目前仅支持NORMAL加密方式。></notice>',
            'type' => 'string',
            'required' => true,
            'example' => 'NORMAL',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结构体',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
              ),
              'Message' => 
              array (
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结构体。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OriginalNumber' => 
                    array (
                      'description' => '原始号码。',
                      'type' => 'string',
                      'example' => '1390000****',
                    ),
                    'EncryptedNumber' => 
                    array (
                      'description' => '加密后的号码。',
                      'type' => 'string',
                      'example' => '1400513****',
                    ),
                    'ExpireTime' => 
                    array (
                      'description' => '号码过期时间。',
                      'type' => 'string',
                      'example' => '2022-05-27 16:05:23',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '请求状态码。

- 返回OK代表请求成功。

- 其他错误码，请参见[错误码列表](~~109196~~)。
',
                'type' => 'string',
                'example' => 'OK',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": [\\n    {\\n      \\"OriginalNumber\\": \\"1390000****\\",\\n      \\"EncryptedNumber\\": \\"1400513****\\",\\n      \\"ExpireTime\\": \\"2022-05-27 16:05:23\\"\\n    }\\n  ],\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
      'title' => '加密号码',
      'description' => '使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。

### QPS限制
本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'InvalidPhoneNumberFilter' => 
    array (
      'summary' => '进行无效号码过滤操作。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权码。

> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'QASDW@#**',
          ),
        ),
        1 => 
        array (
          'name' => 'InputNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的号码。',
            'type' => 'string',
            'required' => true,
            'example' => '1390000****',
          ),
        ),
        2 => 
        array (
          'name' => 'Mask',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码的加密方式。

><notice>目前仅支持NORMAL加密方式。></notice>',
            'type' => 'string',
            'required' => true,
            'example' => 'NORMAL',
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
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
              ),
              'Code' => 
              array (
                'description' => '请求状态码。取值：

- **OK**：成功。

- **MobileNumberIllegal**：手机号非法。

- **EncyrptTypeIllegal**：加密类型非法。

- **MobileNumberTypeNotMatch**：手机号码与加密类型不匹配。

- **CarrierIllegal**：运营商类型非法。

- **AuthCodeNotExist**：授权码不存在。

- **PortabilityNumberNotSupported**：不支持携号转网。

- **Unknown**：未知异常。

- **AuthCodeAndApiNotMatch**：系统异常。

- **AuthCodeAndApiNotMatch**：AuthCode与API接口不匹配。
- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'description' => '数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结构体。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => '返回过滤的结果。

- **YES**：有效状态号码，返回映射关系。

- **NO**：无效状态号码，不返回映射关系。',
                      'type' => 'string',
                      'example' => 'YES',
                    ),
                    'OriginalNumber' => 
                    array (
                      'description' => '原始号码。',
                      'type' => 'string',
                      'example' => '1390000****',
                    ),
                    'EncryptedNumber' => 
                    array (
                      'description' => '加密后的号码。',
                      'type' => 'string',
                      'example' => '1400513****',
                    ),
                    'ExpireTime' => 
                    array (
                      'description' => '号码过期时间。',
                      'type' => 'string',
                      'example' => '2022-05-27 16:05:23',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": [\\n    {\\n      \\"Code\\": \\"YES\\",\\n      \\"OriginalNumber\\": \\"1390000****\\",\\n      \\"EncryptedNumber\\": \\"1400513****\\",\\n      \\"ExpireTime\\": \\"2022-05-27 16:05:23\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '过滤无效号码',
      'description' => '使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。

### QPS限制
本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'QueryTagListPage' => 
    array (
      'summary' => '分页查询标签列表。',
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
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '页码。默认取值为**1**。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '18',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '66',
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
                'title' => '',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A4475657-BB7E-585D-9E09-37934F096103',
              ),
              'Message' => 
              array (
                'title' => '',
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'title' => '',
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'title' => '',
                    'description' => '总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '32',
                  ),
                  'TotalPage' => 
                  array (
                    'title' => '',
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '91',
                  ),
                  'PageSize' => 
                  array (
                    'title' => '',
                    'description' => '分页大小。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '24',
                  ),
                  'PageNo' => 
                  array (
                    'title' => '',
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '11',
                  ),
                  'Records' => 
                  array (
                    'title' => '',
                    'description' => '数据列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SceneId' => 
                        array (
                          'title' => '场景id',
                          'description' => '场景ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '13',
                        ),
                        'SceneName' => 
                        array (
                          'title' => '场景名称',
                          'description' => '场景名称。',
                          'type' => 'string',
                          'example' => '查询',
                        ),
                        'IndustryId' => 
                        array (
                          'title' => '行业id',
                          'description' => '行业ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'Introduction' => 
                        array (
                          'title' => '标签介绍',
                          'description' => '标签介绍。',
                          'type' => 'string',
                          'example' => '这个标签是查询号码状态的。',
                        ),
                        'SaleStatusStr' => 
                        array (
                          'title' => '0 隐藏 1 公开',
                          'description' => '- 0：隐藏
 
- 1：公开',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'ApiName' => 
                        array (
                          'title' => '前端调用的api名称',
                          'description' => '前端调用的API名称。',
                          'type' => 'string',
                          'example' => 'TwoElementsVerification',
                        ),
                        'Id' => 
                        array (
                          'title' => '标签 id',
                          'description' => '标签ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '75',
                        ),
                        'IndustryName' => 
                        array (
                          'title' => '行业名称',
                          'description' => '行业名称。',
                          'type' => 'string',
                          'example' => '测试',
                        ),
                        'Code' => 
                        array (
                          'title' => 'code',
                          'description' => '请求状态码。 OK为成功。',
                          'type' => 'string',
                          'example' => 'OK',
                        ),
                        'DocAddress' => 
                        array (
                          'title' => 'API文档链接',
                          'description' => 'API文档链接。',
                          'type' => 'string',
                          'example' => 'https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.388997.0.0.cf804cc7DX4vlP',
                        ),
                        'Name' => 
                        array (
                          'title' => '标签名称',
                          'description' => '标签名称。',
                          'type' => 'string',
                          'example' => '阿里云',
                        ),
                        'IsOpen' => 
                        array (
                          'title' => '是否已经申请开通',
                          'description' => '是否已经申请开通。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '是',
                        ),
                      ),
                    ),
                    'example' => '',
                  ),
                ),
                'example' => '',
              ),
              'Code' => 
              array (
                'title' => '',
                'description' => '请求状态码。 **OK**为成功。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '',
                'description' => '是否成功。取值：

- true：成功。

- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A4475657-BB7E-585D-9E09-37934F096103\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 32,\\n    \\"TotalPage\\": 91,\\n    \\"PageSize\\": 24,\\n    \\"PageNo\\": 11,\\n    \\"Records\\": [\\n      {\\n        \\"SceneId\\": 13,\\n        \\"SceneName\\": \\"查询\\",\\n        \\"IndustryId\\": 2,\\n        \\"Introduction\\": \\"这个标签是查询号码状态的。\\",\\n        \\"SaleStatusStr\\": \\"1\\",\\n        \\"ApiName\\": \\"TwoElementsVerification\\",\\n        \\"Id\\": 75,\\n        \\"IndustryName\\": \\"测试\\",\\n        \\"Code\\": \\"OK\\",\\n        \\"DocAddress\\": \\"https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.388997.0.0.cf804cc7DX4vlP\\",\\n        \\"Name\\": \\"阿里云\\",\\n        \\"IsOpen\\": 0\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '分页查询标签列表',
    ),
    'QueryTagInfoBySelection' => 
    array (
      'summary' => '查询标签信息。',
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
          'name' => 'IndustryId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '行业id',
            'description' => '行业ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '58',
          ),
        ),
        1 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '场景id',
            'description' => '场景ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '83',
          ),
        ),
        2 => 
        array (
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '标签id',
            'description' => '标签ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '71',
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
                'title' => '',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1C3B8084-3A7D-570B-BC84-BF945A9CF65E',
              ),
              'Message' => 
              array (
                'title' => '',
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'title' => '',
                'description' => '返回的数据内容。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回的数据内容。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SceneId' => 
                    array (
                      'title' => '场景id',
                      'description' => '场景ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '41',
                    ),
                    'IndustryId' => 
                    array (
                      'title' => '行业id',
                      'description' => '行业ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '83',
                    ),
                    'SceneName' => 
                    array (
                      'title' => '场景名称',
                      'description' => '场景名称。',
                      'type' => 'string',
                      'example' => '通用',
                    ),
                    'TagName' => 
                    array (
                      'title' => '标签名称',
                      'description' => '标签名称。',
                      'type' => 'string',
                      'example' => '号码归属',
                    ),
                    'FlowName' => 
                    array (
                      'title' => '流程名称',
                      'description' => '流程名称。',
                      'type' => 'string',
                      'example' => '查询',
                    ),
                    'EnumDefinitionAddress' => 
                    array (
                      'title' => '枚举值定义链接',
                      'description' => '枚举值定义链接。',
                      'type' => 'string',
                      'example' => 'example.aliyundoc.com
',
                    ),
                    'TagId' => 
                    array (
                      'title' => '标签id',
                      'description' => '标签ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '31',
                    ),
                    'AuthCodeList' => 
                    array (
                      'title' => '可用的授权码列表',
                      'description' => '可用的授权码列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '无',
                        'type' => 'string',
                        'example' => '无',
                      ),
                      'example' => '',
                    ),
                    'IndustryName' => 
                    array (
                      'title' => '行业名称',
                      'description' => '行业名称。',
                      'type' => 'string',
                      'example' => '物流',
                    ),
                    'DocAddress' => 
                    array (
                      'title' => 'API文档链接',
                      'description' => 'API文档链接。',
                      'type' => 'string',
                      'example' => 'https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.2573870.0.0.3aa921cbOrtqJz',
                    ),
                    'DemoAddress' => 
                    array (
                      'title' => 'API demo链接',
                      'description' => 'API demo链接。',
                      'type' => 'string',
                      'example' => 'https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.2573870.0.0.3aa921cbOrtqJz',
                    ),
                    'ParamList' => 
                    array (
                      'title' => '标签参数列表',
                      'description' => '标签参数列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签参数。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ValueDict' => 
                          array (
                            'title' => '枚举值定义，code:desc',
                            'description' => '枚举值定义，code：desc',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '枚举值定义，code：desc',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Desc' => 
                                array (
                                  'title' => '中文名',
                                  'description' => '中文名。',
                                  'type' => 'string',
                                  'example' => '阿里云',
                                ),
                                'Code' => 
                                array (
                                  'title' => '英文名',
                                  'description' => '英文名。',
                                  'type' => 'string',
                                  'example' => 'Aliyun',
                                ),
                              ),
                            ),
                            'example' => '',
                          ),
                          'Type' => 
                          array (
                            'title' => '类型EnumUIWidgetTypes对应的code',
                            'description' => '类型，EnumUIWidgetTypes对应的code。',
                            'type' => 'string',
                            'example' => 'aqzx',
                          ),
                          'Hint' => 
                          array (
                            'title' => '输入提示',
                            'description' => '输入提示。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'Code' => 
                          array (
                            'title' => '参数英文名',
                            'description' => '参数英文名。',
                            'type' => 'string',
                            'example' => 'preame',
                          ),
                          'Must' => 
                          array (
                            'title' => '是否必填',
                            'description' => '是否必填。',
                            'type' => 'boolean',
                            'example' => 'false',
                          ),
                          'Name' => 
                          array (
                            'title' => '参数中文名',
                            'description' => '参数中文名。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                        ),
                      ),
                      'example' => '',
                    ),
                    'RichTextDescription' => 
                    array (
                      'description' => '富文本描述信息，仅复杂标签有此字段。',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'ComplexityType' => 
                    array (
                      'description' => '标签类型。',
                      'type' => 'string',
                      'example' => 'SINGLE_STAGE',
                    ),
                  ),
                ),
                'example' => '',
              ),
              'Code' => 
              array (
                'title' => '',
                'description' => '请求状态码。 **OK**为成功。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '',
                'description' => '是否成功。取值：

- true：成功。

- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C3B8084-3A7D-570B-BC84-BF945A9CF65E\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": [\\n    {\\n      \\"SceneId\\": 41,\\n      \\"IndustryId\\": 83,\\n      \\"SceneName\\": \\"通用\\",\\n      \\"TagName\\": \\"号码归属\\",\\n      \\"FlowName\\": \\"查询\\",\\n      \\"EnumDefinitionAddress\\": \\"example.aliyundoc.com\\\\n\\",\\n      \\"TagId\\": 31,\\n      \\"AuthCodeList\\": [\\n        \\"无\\"\\n      ],\\n      \\"IndustryName\\": \\"物流\\",\\n      \\"DocAddress\\": \\"https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.2573870.0.0.3aa921cbOrtqJz\\",\\n      \\"DemoAddress\\": \\"https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.2573870.0.0.3aa921cbOrtqJz\\",\\n      \\"ParamList\\": [\\n        {\\n          \\"ValueDict\\": [\\n            {\\n              \\"Desc\\": \\"阿里云\\",\\n              \\"Code\\": \\"Aliyun\\"\\n            }\\n          ],\\n          \\"Type\\": \\"aqzx\\",\\n          \\"Hint\\": \\"无\\",\\n          \\"Code\\": \\"preame\\",\\n          \\"Must\\": false,\\n          \\"Name\\": \\"无\\"\\n        }\\n      ],\\n      \\"RichTextDescription\\": \\"无\\",\\n      \\"ComplexityType\\": \\"SINGLE_STAGE\\"\\n    }\\n  ],\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询标签信息',
    ),
    'QueryUsageStatisticsByTagId' => 
    array (
      'summary' => '根据标签ID查询用量统计。',
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
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间',
            'description' => '查询开始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '20230308',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间',
            'description' => '查询结束时间。',
            'type' => 'string',
            'required' => false,
            'example' => '20230406',
          ),
        ),
        2 => 
        array (
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间',
            'description' => '标签ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '89',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '当前页码，默认：1',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '页面大小。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D45CC751-34DF-5797-81FB-9A2ED6DC024B',
              ),
              'Message' => 
              array (
                'title' => '',
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'title' => '',
                'description' => '返回的数据内容。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回的数据内容。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AuthorizationCode' => 
                    array (
                      'title' => '授权码',
                      'description' => '授权码。',
                      'type' => 'string',
                      'example' => 'g61I8UV5zd',
                    ),
                    'SuccessTotal' => 
                    array (
                      'title' => '查询成功号码数',
                      'description' => '查询成功号码数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '93',
                    ),
                    'FailTotal' => 
                    array (
                      'title' => '查询失败号码数',
                      'description' => '查询失败号码数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '71',
                    ),
                    'TagName' => 
                    array (
                      'title' => '标签名称',
                      'description' => '标签名称。',
                      'type' => 'string',
                      'example' => '阿里云查询',
                    ),
                    'SceneName' => 
                    array (
                      'title' => '场景名称',
                      'description' => '场景名称。',
                      'type' => 'string',
                      'example' => '电话回访1',
                    ),
                    'Total' => 
                    array (
                      'title' => '查询总号码数',
                      'description' => '查询总号码数。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '41',
                    ),
                    'TagId' => 
                    array (
                      'title' => '标签名称',
                      'description' => '标签名称。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '69',
                    ),
                    'PartnerId' => 
                    array (
                      'title' => '客户 pid',
                      'description' => '客户pid。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10000013****071',
                    ),
                    'Id' => 
                    array (
                      'title' => '授权码使用记录 id',
                      'description' => '授权码使用记录ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4d32c9ef-c8b0-4d69-a437-cca5****185d',
                    ),
                    'GmtDateStr' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '20230312',
                    ),
                    'IndustryName' => 
                    array (
                      'title' => '行业名称',
                      'description' => '行业名称。',
                      'type' => 'string',
                      'example' => '家政安保',
                    ),
                  ),
                ),
                'example' => '',
              ),
              'Code' => 
              array (
                'title' => '',
                'description' => '请求状态码。 **OK**为成功。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '',
                'description' => '表示是否调用成功。
- true：调用成功。             
 - false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D45CC751-34DF-5797-81FB-9A2ED6DC024B\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": [\\n    {\\n      \\"AuthorizationCode\\": \\"g61I8UV5zd\\",\\n      \\"SuccessTotal\\": 93,\\n      \\"FailTotal\\": 71,\\n      \\"TagName\\": \\"阿里云查询\\",\\n      \\"SceneName\\": \\"电话回访1\\",\\n      \\"Total\\": 41,\\n      \\"TagId\\": 69,\\n      \\"PartnerId\\": 0,\\n      \\"Id\\": 0,\\n      \\"GmtDateStr\\": \\"20230312\\",\\n      \\"IndustryName\\": \\"家政安保\\"\\n    }\\n  ],\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '根据标签ID查询用量统计',
    ),
    'QueryTagApplyRule' => 
    array (
      'summary' => '查询标签申请规则。',
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
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '标签id',
            'description' => '标签ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '61',
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
                'title' => '',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'CC3BB6D2-****-****-9DCE-B38165CE4C47',
              ),
              'Message' => 
              array (
                'title' => '',
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'title' => '',
                'description' => '返回的数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'NeedApplyMaterial' => 
                  array (
                    'title' => '是否需要提供申请材料',
                    'description' => '是否需要提供申请材料，取值：

- 0：不需要。

- 1：需要。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'EncryptedQuery' => 
                  array (
                    'title' => '是否支持加密查询',
                    'description' => '是否支持加密查询，取值：

- 0：不支持。

- 1：支持。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'SlaLink' => 
                  array (
                    'title' => '服务协议链接',
                    'description' => '服务协议链接。',
                    'type' => 'string',
                    'example' => 'example.aliyundoc.com',
                  ),
                  'ApplyMaterialDesc' => 
                  array (
                    'title' => '申请材料要求',
                    'description' => '申请材料要求。NeedApplyMaterial=1时，返回该参数。',
                    'type' => 'string',
                    'example' => '申请材料的要求是XXX',
                  ),
                  'AutoAudit' => 
                  array (
                    'title' => '是否自动审批',
                    'description' => '是否自动审批，取值：

- 0：不自动审批。

- 1：自动审批。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'ChargingStandardLink' => 
                  array (
                    'title' => '计费标准说明链接',
                    'description' => '计费标准说明链接。',
                    'type' => 'string',
                    'example' => 'aliyundoc.com',
                  ),
                ),
                'example' => '',
              ),
              'Code' => 
              array (
                'title' => '',
                'description' => '请求状态码。 **OK**表示成功。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '',
                'description' => '是否成功。取值：

- true：成功。

- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC3BB6D2-****-****-9DCE-B38165CE4C47\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"NeedApplyMaterial\\": 1,\\n    \\"EncryptedQuery\\": 0,\\n    \\"SlaLink\\": \\"example.aliyundoc.com\\",\\n    \\"ApplyMaterialDesc\\": \\"申请材料的要求是XXX\\",\\n    \\"AutoAudit\\": 1,\\n    \\"ChargingStandardLink\\": \\"aliyundoc.com\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询标签申请规则',
    ),
    'QueryAvailableAuthCode' => 
    array (
      'summary' => '查询可用的授权码。',
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
          'name' => 'TagId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '标签id',
            'description' => '标签ID。可通过调用[QueryTagListPage](~~QueryTagListPage~~)接口，查询标签ID值。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '22',
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
                'title' => '',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6ADDCD31-6BC7-5913-A47F-E29A07E37FEE',
              ),
              'Message' => 
              array (
                'title' => '',
                'description' => '返回状态码描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Data' => 
              array (
                'title' => '',
                'description' => '返回的数据内容。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回的数据内容。',
                  'type' => 'string',
                  'example' => '[\'n81Q8M63rg\']',
                ),
                'example' => '',
              ),
              'Code' => 
              array (
                'title' => '',
                'description' => '请求状态码。 **OK**为成功。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'title' => '',
                'description' => '是否成功。取值：

- true：成功。

- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6ADDCD31-6BC7-5913-A47F-E29A07E37FEE\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": [\\n    \\"[\'n81Q8M63rg\']\\"\\n  ],\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询可用的授权码',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'dytnsapi.aliyuncs.com',
    ),
  ),
);
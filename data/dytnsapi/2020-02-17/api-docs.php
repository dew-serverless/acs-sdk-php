<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Dytnsapi',
        'version' => '2020-02-17',
    ],
    'directories' => [
        [
            'id' => 188841,
            'title' => '身份证二要素核验',
            'type' => 'directory',
            'children' => [
                'CertNoTwoElementVerification',
            ],
        ],
        [
            'id' => 186898,
            'title' => 'UAID查询',
            'type' => 'directory',
            'children' => [
                'GetUAIDApplyTokenSign',
                'UAIDVerification',
            ],
        ],
        [
            'id' => 186327,
            'title' => '企业二要素/三要素/四要素核验',
            'type' => 'directory',
            'children' => [
                'CompanyTwoElementsVerification',
                'CompanyThreeElementsVerification',
                'CompanyFourElementsVerification',
            ],
        ],
        [
            'id' => 163788,
            'title' => '号码归属查询',
            'type' => 'directory',
            'children' => [
                'DescribePhoneNumberOperatorAttribute',
            ],
        ],
        [
            'id' => 163790,
            'title' => '号码状态查询',
            'type' => 'directory',
            'children' => [
                'PhoneNumberStatusForPublic',
                'PhoneNumberStatusForAccount',
                'PhoneNumberStatusForReal',
                'PhoneNumberStatusForSms',
                'PhoneNumberStatusForVoice',
                'PhoneNumberStatusForVirtual',
            ],
        ],
        [
            'id' => 163792,
            'title' => '二次号查询',
            'type' => 'directory',
            'children' => [
                'DescribePhoneTwiceTelVerify',
            ],
        ],
        [
            'id' => 167651,
            'title' => '在网时长查询',
            'type' => 'directory',
            'children' => [
                'DescribePhoneNumberOnlineTime',
            ],
        ],
        [
            'id' => 169030,
            'title' => '号码分析查询',
            'type' => 'directory',
            'children' => [
                'DescribePhoneNumberAnalysisAI',
                'DescribePhoneNumberAnalysis',
            ],
        ],
        [
            'id' => 169031,
            'title' => '空号检测',
            'type' => 'directory',
            'children' => [
                'DescribeEmptyNumber',
            ],
        ],
        [
            'id' => 168216,
            'title' => '运营商二要素/三要素核验',
            'type' => 'directory',
            'children' => [
                'TwoElementsVerification',
                'ThreeElementsVerification',
            ],
        ],
        [
            'id' => 169032,
            'title' => '号码加密',
            'type' => 'directory',
            'children' => [
                'PhoneNumberEncrypt',
            ],
        ],
        [
            'id' => 169033,
            'title' => '无效号码过滤',
            'type' => 'directory',
            'children' => [
                'InvalidPhoneNumberFilter',
            ],
        ],
        [
            'id' => 186356,
            'title' => '标签',
            'type' => 'directory',
            'children' => [
                'QueryTagListPage',
                'QueryTagInfoBySelection',
                'QueryUsageStatisticsByTagId',
                'QueryTagApplyRule',
            ],
        ],
        [
            'id' => 186357,
            'title' => '授权码',
            'type' => 'directory',
            'children' => [
                'QueryAvailableAuthCode',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CertNoTwoElementVerification' => [
            'summary' => '二要素（姓名和身份证）核验。用于比对用户填写的姓名、身份证两项信息是否属于同一用户。',
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
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在**号码百科**->[**标签广场**](https://dytns.console.aliyun.com/analysis/square)选择标签，提交使用申请，申请通过后，会获得该授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'QASDW@#**',
                    ],
                ],
                [
                    'name' => 'CertName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待核验的姓名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'CertNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待核验的身份证号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3***************0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'IsConsistent' => [
                                        'description' => '验证结果是否一致。返回：'."\n"
                                            ."\n"
                                            .'- **1**：一致'."\n"
                                            ."\n"
                                            .'- **0**：不一致'."\n"
                                            ."\n"
                                            .'- **2**：查无',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"-\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"IsConsistent\\": \\"1\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '身份证二要素核验',
            'description' => '- 请确保在使用本接口前，您已充分了解号码百科产品定价。'."\n"
                .'- 使用本接口前，请登录号码百科控制台，在标签广场页面，找到对应的标签，单击申请开通，填写申请资料，审批通过后即可使用。'."\n"
                .'- 当接口值返回值：Code="OK"且IsConsistent != 2时计费，其他返回结果不计费。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'GetUAIDApplyTokenSign' => [
            'summary' => '该API仅提供三网运营商获取UAID能力中，获取授权Token环节的签名功能。',
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
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在**号码分析服务**->[**标签广场**](https://dytns.console.aliyun.com/analysis/square)选择标签，提交使用申请，申请通过后，会获得该授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'HwD97InG',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部流水号。'."\n"
                            .'> 对应移动（CM）运营商中的traceId、msgId，三者保持一致即可',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b8b5b3a*******0b9893484fdf412c99',
                    ],
                ],
                [
                    'name' => 'ClientType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端类型。'."\n"
                            .'- Android：30100'."\n"
                            .'- IOS：30300'."\n"
                            .'- H5：20200'."\n"
                            .'- WEB：10010',
                        'type' => 'string',
                        'required' => true,
                        'example' => '30300',
                    ],
                ],
                [
                    'name' => 'ParamKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商为电信（CT）时必传，具体参考电信运营商文档。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '955EC1A869852EA8BC66F********D7C6E92017BBD5B001C736EFEAFB775C232',
                    ],
                ],
                [
                    'name' => 'ParamStr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商为电信（CT）时必传，具体参考电信运营商文档。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'B2F0D4CD7A216D16CE2AF4BBC********29A454FDDD991F919106C12CB89ABA8',
                    ],
                ],
                [
                    'name' => 'Time',
                    'in' => 'query',
                    'schema' => [
                        'description' => '事件发生的时间戳，精确到毫秒。  '."\n"
                            .'格式：yyyyMMddHHmmssSSS。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20121227180001165',
                    ],
                ],
                [
                    'name' => 'Carrier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户所处的运营商。取值：'."\n"
                            .'- **CM**：中国移动。'."\n"
                            .'- **CU**：中国联通。'."\n"
                            .'- **CT**：中国电信。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CM',
                    ],
                ],
                [
                    'name' => 'Format',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求方式，运营商为电信（CT）时必传。'."\n"
                            .'取值：'."\n"
                            ."\n"
                            .'- json'."\n"
                            .'- jsonp',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'json',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '68A40250-50CD-034C-B728-0BD******177',
                            ],
                            'Message' => [
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'OutId' => [
                                        'description' => '外部流水号。',
                                        'type' => 'string',
                                        'example' => 'b8b5b3a*******0b9893484fdf412c99',
                                    ],
                                    'Sign' => [
                                        'description' => '签名值',
                                        'type' => 'string',
                                        'example' => 'D2E204D74EEB373E468632********23F592C4C9',
                                    ],
                                    'Carrier' => [
                                        'description' => '用户所处的运营商。取值：'."\n"
                                            .'- **CM**：中国移动。'."\n"
                                            .'- **CU**：中国联通。'."\n"
                                            .'- **CT**：中国电信。',
                                        'type' => 'string',
                                        'example' => 'CM',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。取值：'."\n"
                                    .'- **OK**：请求成功。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"-\\",\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD******177\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"OutId\\": \\"b8b5b3a*******0b9893484fdf412c99\\",\\n    \\"Sign\\": \\"D2E204D74EEB373E468632********23F592C4C9\\",\\n    \\"Carrier\\": \\"CM\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '获取UAID授权Token的签名值',
            'description' => '该API仅提供三网运营商获取UAID能力中，**获取授权Token环节的签名功能**。'."\n"
                .' - 获取授权Token的其他必要参数，请参考对应运营商文档自行生成'."\n"
                .' - 获取授权Token的请求，请参考对应运营商文档，注意需要从用户移动终端的蜂窝移动网络环境下请求'."\n"
                .' - 获取授权Token请求后，请参考[UAIDVerification](~~UAIDVerification~~) 接口进行最终的UAID获取。'."\n"
                ."\n"
                .'### 如何通过客户端/H5方式请求授权Token'."\n"
                ."\n"
                .'<notice>发起请求授权Token时，客户端或H5页面必须切换到蜂窝移动网络。</notice>'."\n"
                ."\n"
                .'#### 移动（CM）'."\n"
                .'通信协议：HTTPS + application/Json  '."\n"
                .'方法：POST  '."\n"
                .'地址：https://msg.cmpassport.com/h5/getMobile  '."\n"
                ."\n"
                .'##### 请求参数'."\n"
                .'参数示例：  '."\n"
                ."\n"
                .'`{'."\n"
                .'  "traceId": "mfawsxtcmyplwzpayzzvdvbsowxmkynr",'."\n"
                .'  "appId": "300011580392",'."\n"
                .'  "sign": "2c61b3c58ffbeed97461e31be4fd931a",'."\n"
                .'  "msgId": "redbyxsdetddwaaffajcwwapspykftzx",'."\n"
                .'  "expandParams": "",'."\n"
                .'  "businessType": "3",'."\n"
                .'  "version": "1.0",'."\n"
                .'  "timestamp": "20201125101540980"'."\n"
                .'}`  '."\n"
                .'  '."\n"
                .'参数描述：  '."\n"
                .'- version：使用`1.0`'."\n"
                .'- timestamp：请求消息发送的系统时间，精确到毫秒，对应该API下方入参`Time`的内容及其格式，两者需要保持一致'."\n"
                .'- appId：使用`300012406312`'."\n"
                .'- businessType：使用`3`'."\n"
                .'- traceId：外部流水号，对应该API下方入参`OutId`的内容，两者需要保持一致'."\n"
                .'- sign：调用该API获取'."\n"
                .'- msgId：外部流水号，对应该API下方入参`OutId`的内容，两者需要保持一致'."\n"
                ."\n"
                .'##### 响应参数'."\n"
                .'响应示例：  '."\n"
                .'`{'."\n"
                .'  "header": {'."\n"
                .'    "appId": "300011580392",'."\n"
                .'    "msgId": "redbyxsdetddwaaffajcwwapspykftzx",'."\n"
                .'    "timestamp": "20201125101607932"'."\n"
                .'  },'."\n"
                .'  "body": {'."\n"
                .'    "resultCode": "103000",'."\n"
                .'    "expandParams": "",'."\n"
                .'    "resultDesc": "成功",'."\n"
                .'    "token": "H5HTTPS4187AE9743AFCB14F8D99B9D65ED9E01"'."\n"
                .'  }'."\n"
                .'}`'."\n"
                ."\n"
                .'直接获取`body`中的`token`即可。'."\n"
                ."\n"
                .'#### 联通（CU）'."\n"
                .'分两步获取token'."\n"
                .'##### 第一步：获取authurl'."\n"
                .'通过第一步请求，获取门户服务器获取鉴权服务器地址`authurl`  '."\n"
                ."\n"
                .'通信协议：HTTPS + application/Json  '."\n"
                .'方法：GRT  '."\n"
                .'地址：https://nisportal.10010.com:9001/api  '."\n"
                .'###### 请求参数'."\n"
                .'参数示例：  '."\n"
                .'json方式请求：`?appId=1554778161153`  '."\n"
                .'jsonp方式请求：`?appId=1554778161153&callback=callbackFunction`  '."\n"
                ."\n"
                .'参数描述：'."\n"
                .'- appId：使用1554778161153'."\n"
                .'- callback：jsonp回调函数名。仅当使用jsonp格式时需要传此参数'."\n"
                .'###### 响应参数'."\n"
                .'响应示例：  '."\n"
                .'json方式请求：'."\n"
                .'`{"authurl": "https://enrichgw.10010.com/d93222629f52ec79"}`  '."\n"
                .'jsonp方式请求：'."\n"
                .'`callbackFunction({"authurl":"https://enrichgw.10010.com/d93222629f52ec79"})`  '."\n"
                ."\n"
                .'获取返回结果中的`authurl`。'."\n"
                ."\n"
                .'##### 第二步：获取token'."\n"
                .'通信协议：HTTPS + application/Json  '."\n"
                .'方法：GRT  '."\n"
                .'地址：${authurl}+"/api"  '."\n"
                ."\n"
                .'请求地址示例：`https://enrichgw.10010.com/d93222629f52ec79/api`'."\n"
                .'###### 请求参数'."\n"
                .'参数示例：  '."\n"
                .'json方式请求：`?appId=1554778161153`  '."\n"
                .'jsonp方式请求：`?appId=1554778161153&callback=callbackFunction`  '."\n"
                ."\n"
                .'参数描述：'."\n"
                .'- appId：使用1554778161153'."\n"
                .'- callback：jsonp回调函数名。仅当使用jsonp格式时需要传此参数'."\n"
                .'###### 响应参数'."\n"
                .'响应示例：  '."\n"
                .'json方式请求：'."\n"
                .'`{'."\n"
                .'    "province": "1",'."\n"
                .'    "code": "7nHS1nggx2WP613750206700RN6oiRN1"'."\n"
                .'}`  '."\n"
                .'jsonp方式请求：'."\n"
                .'`callbackFunction({"province":"1","code":"7nHS3Dnkd1BS701851092400RN6oiRN1"})`'."\n"
                ."\n"
                .'获取返回结果中的`code`即可。'."\n"
                ."\n\n"
                ."\n"
                .'#### 电信（CT）'."\n"
                .'通信协议：HTTPS + application/x-www-form-urlencoded;charset=UTF  '."\n"
                .'方法：GET  '."\n"
                .'地址：https://id6.me/gw/preuniq.do'."\n"
                ."\n"
                .'##### 请求参数'."\n"
                .'参数示例：  '."\n"
                .'`?clientType=30100&appId=9390188202&format=json&sign=D63C166FA19E1996EF********09C6A5397C10B4&paramKey=1D7C25EB8B0B8B4CB3CF8DC60628F6549********786B0AF1FEF93FA1335057A35BF5F0B39A3867EAA9BE14B3898********8B01DE34965060445B6E1F66401D714650E4AB161CD6DCF4A72********3B856F22A192B8B0C39D7A55B961062E68C89C928894F119B25********7C548355FE9DB82852EB93C939F2200B48CD17&paramStr=140********95AF8E138B94754CB4CF83BA6FB********52B258BFDFD38BF233&version=1.1`  '."\n"
                ."\n"
                .'参数描述：  '."\n"
                .'- appId：使用`9390188202`'."\n"
                .'- clientType：客户端类型，对应该API下方入参`ClientType`的内容，两者需要保持一致'."\n"
                .'- format：使用`json`或`jsonp`'."\n"
                .'- version：使用`1.1`'."\n"
                .'- sign：调用该API获取'."\n"
                .'- paramKey：密钥A的密文；密钥A为接入端随机生成字符串，长度为16位；`paramKey = RSA1024("${密钥A}", "${天翼账号平台公钥}")`；填充模式为`RSA/ECB/PKCS1Padding`；下载[电信RSA公钥](https://id.189.cn/source/files/API.pem)'."\n"
                .'- paramStr：不公开请求参数密文； timeStamp为时间戳，精确到毫秒，对应该API下方入参`Time`的值，但格式不同（参考值`1697791988302`）；callback为使用jsonp格式时的回调方法，仅当format取值为jsonp时需要填写。`paramStr = AES("timeStamp=${timeStamp}&callback=${callback}", "${密钥A}")`；填充模式为`AES/CBC/PKCS5Padding`，初始向量为`0000000000000000`'."\n"
                ."\n"
                .'##### 响应参数'."\n"
                .'响应示例：  '."\n"
                .'`callback?result=10000&msg=success&data=a35336711c70456cb883f4f224e9a259`  '."\n"
                ."\n"
                .'`data`为加密的业务结果数据，`data = AES(业务结果, 密钥A)`，使用密钥A进行AES解密（AES/CBC/PKCS5Padding）。  '."\n"
                .'  '."\n"
                .'解密后业务结果示例：  '."\n"
                .'`{"accessCode": "H5HTTPS4187AE9743AFCB14F8D99B9D65ED9E01"}`'."\n"
                .'  '."\n"
                .'此时获取`accessCode`即可。',
        ],
        'UAIDVerification' => [
            'summary' => '根据运营商授权Token获取UAID。'."\n"
                .'获取授权Token及其签名值请参考GetUAIDApplyTokenSign API文档。'."\n"
                ."\n"
                .'UAID为64个长度，前32个长度描述设备信息，后32个长度描述号码信息。',
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
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部流水号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'b8b5b3a*******0b9893484fdf412c99'."\n",
                    ],
                ],
                [
                    'name' => 'Carrier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户所处的运营商。取值：'."\n"
                            .'- **CM**：中国移动。'."\n"
                            .'- **CU**：中国联通。'."\n"
                            .'- **CT**：中国电信。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CM',
                    ],
                ],
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商授权Token。  '."\n"
                            .'> 获取授权Token及其签名值请参考GetUAIDApplyTokenSign API文档。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MIGfMA0********3DQEBAQUAA4GNADCB',
                    ],
                ],
                [
                    'name' => 'UserGrantId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户授权码，代表用户已授权。值为不大于128位的唯一随机数即可。  '."\n"
                            ."\n"
                            .'<warning>集成时，建议在产品的隐私政策中加入UAID的隐私政策相关内容。</warning>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Md****a3Em',
                    ],
                ],
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在**号码分析服务**->[**标签广场**](https://dytns.console.aliyun.com/analysis/square)选择标签，提交使用申请，申请通过后，会获得该授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'HwD97InG',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公网IP地址，当运营商为联通（CU）时必传，兼容IPV4和IPV6地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2408:8440:308:29dc:ed00:c4ec:475c:25a4',
                    ],
                ],
                [
                    'name' => 'Province',
                    'in' => 'query',
                    'schema' => [
                        'description' => '省份id，当运营商为联通（CU）时选传。与获取token时返回值中province字段保持一致。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '68A40250-50CD-034C-B728-0BD******177',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'Uaid' => [
                                        'description' => '获取到的UAID的值。',
                                        'type' => 'string',
                                        'example' => 'B1E0C1********9F757AF52A035',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。取值：'."\n"
                                    ."\n"
                                    .'- **OK**：成功。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"-\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD******177\\",\\n  \\"Data\\": {\\n    \\"Uaid\\": \\"B1E0C1********9F757AF52A035\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '根据运营商授权Token获取UAID',
            'description' => '请确保在使用该接口前，已充分了解号码百科产品的收费方式和[价格](https://www.aliyun.com/price/product#/dytns/detail/dytns_penqbag_public_cn)。  '."\n"
                ."\n"
                .'根据运营商授权Token获取UAID。  '."\n"
                .'获取授权Token及其签名值请参考GetUAIDApplyTokenSign API文档。',
        ],
        'CompanyTwoElementsVerification' => [
            'summary' => '用于核验企业名称和企业证件号，名称和证件必须全部一致且企业经营状态为在营才会判定核验通过。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'EpCertNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业证件号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '9242032*******J627'."\n",
                    ],
                ],
                [
                    'name' => 'EpCertName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '某企业',
                    ],
                ],
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'>登录[号码百科控制台](https://dytns.console.aliyun.com/overview?spm=a2c4g.608385.0.0.79847f8b3awqUC)，在[我的申请](https://dytns.console.aliyun.com/analysis/apply)页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Dd1r***4id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '68A40250-50CD-034C-B728-0BD135850177',
                            ],
                            'Message' => [
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'DetailInfo' => [
                                        'description' => '企业详细信息。'."\n"
                                            ."\n"
                                            .'> 事业单位、民事团体不支持返回此字段',
                                        'type' => 'object',
                                        'properties' => [
                                            'OpenTime' => [
                                                'description' => '企业营业期限。',
                                                'type' => 'string',
                                                'example' => '2023-05-25/2053-05-24',
                                            ],
                                            'EnterpriseStatus' => [
                                                'description' => '企业经营状态。',
                                                'type' => 'string',
                                                'example' => '在营（开业）',
                                            ],
                                        ],
                                        'example' => '{'."\n"
                                            .'      "enterpriseStatus": "在营（开业）",'."\n"
                                            .'      "openTime": "2023-05-25/2053-05-24"'."\n"
                                            .'}',
                                    ],
                                    'InconsistentData' => [
                                        'description' => '校验不一致的字段。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '- EpCertName：企业名称'."\n"
                                                .'- EpCertNo：企业证件号',
                                            'type' => 'string',
                                            'example' => 'EpCertName',
                                        ],
                                        'example' => '',
                                    ],
                                    'VerifyResult' => [
                                        'description' => '核验结果。取值：'."\n"
                                            ."\n"
                                            .'- true：信息核验一致，且企业正常经营。'."\n"
                                            .'- false：核验不通过。'."\n"
                                            ."\n"
                                            .'> 事业单位、民事团体不支持核验企业经营状态，仅核验企业名称与企业证件号是否一致',
                                        'type' => 'string',
                                        'example' => 'true',
                                    ],
                                    'ReasonCode' => [
                                        'description' => '核验结果编码。取值：'."\n"
                                            ."\n"
                                            .'- 0：核验一致'."\n"
                                            .'- 1：核验一致，企业非正常营业'."\n"
                                            .'- 3：企业二要素不通过'."\n"
                                            .'- 4：查无企业',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"-\\",\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD135850177\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"DetailInfo\\": {\\n      \\"OpenTime\\": \\"2023-05-25/2053-05-24\\",\\n      \\"EnterpriseStatus\\": \\"在营（开业）\\"\\n    },\\n    \\"InconsistentData\\": [\\n      \\"EpCertName\\"\\n    ],\\n    \\"VerifyResult\\": \\"true\\",\\n    \\"ReasonCode\\": \\"0\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '企业二要素核验',
            'description' => '- 请确保在使用该接口前，已充分了解企业二要素核验产品的收费方式和价格，计费详情请参见[产品计费](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4)。'."\n"
                .'- 返回结果中Code=OK，且ReasonCode=0/1/3时计费，其余情况均不计费。'."\n"
                .'- 使用本接口前，请登录[号码百科控制台](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC&lang=zh)，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'CompanyThreeElementsVerification' => [
            'summary' => '用于核验企业名称、企业证件号和企业法人姓名，必须全部一致且企业经营状态为在营才会判定核验通过。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'EpCertNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业证件号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '9242032*******J627',
                    ],
                ],
                [
                    'name' => 'EpCertName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '某企业',
                    ],
                ],
                [
                    'name' => 'LegalPersonCertName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业法人姓名。'."\n"
                            .'>如果企业有多个法人，法人之间需用中文顿号（”、”）隔开。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'>登录[号码百科控制台](https://dytns.console.aliyun.com/overview?spm=a2c4g.608385.0.0.79847f8b3awqUC)，在[我的申请](https://dytns.console.aliyun.com/analysis/apply)页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Dd1r***4id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '68A40250-50CD-034C-B728-0BD135850177',
                            ],
                            'Message' => [
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'DetailInfo' => [
                                        'description' => '企业详细信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'OpenTime' => [
                                                'description' => '企业营业期限。',
                                                'type' => 'string',
                                                'example' => '2023-05-25/2053-05-24',
                                            ],
                                            'EnterpriseStatus' => [
                                                'description' => '企业经营状态。',
                                                'type' => 'string',
                                                'example' => '在营（开业）',
                                            ],
                                        ],
                                        'example' => '{'."\n"
                                            .'      "enterpriseStatus": "在营（开业）",'."\n"
                                            .'      "openTime": "2023-05-25/2053-05-24"'."\n"
                                            .'}',
                                    ],
                                    'InconsistentData' => [
                                        'description' => '校验不一致的字段',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '- EpCertName：企业名称'."\n"
                                                .'- EpCertNo：企业证件号'."\n"
                                                .'- CertName：企业法人姓名',
                                            'type' => 'string',
                                            'example' => 'CertName',
                                        ],
                                        'example' => '',
                                    ],
                                    'VerifyResult' => [
                                        'description' => '核验结果。取值：'."\n"
                                            ."\n"
                                            .'- true：信息核验一致，且企业正常经营。'."\n"
                                            .'- false：核验不通过。',
                                        'type' => 'string',
                                        'example' => 'false',
                                    ],
                                    'ReasonCode' => [
                                        'description' => '核验结果编码。取值：'."\n"
                                            ."\n"
                                            .'- 0：核验一致'."\n"
                                            .'- 1：核验一致，企业非正常营业'."\n"
                                            .'- 2：人企核验不一致'."\n"
                                            .'- 3：企业二要素不通过'."\n"
                                            .'- 4：查无企业'."\n"
                                            .'- 5：人在库中不存在',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"-\\",\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD135850177\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"DetailInfo\\": {\\n      \\"OpenTime\\": \\"2023-05-25/2053-05-24\\",\\n      \\"EnterpriseStatus\\": \\"在营（开业）\\"\\n    },\\n    \\"InconsistentData\\": [\\n      \\"CertName\\"\\n    ],\\n    \\"VerifyResult\\": \\"false\\",\\n    \\"ReasonCode\\": 2\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '企业三要素核验',
            'description' => '- 请确保在使用该接口前，已充分了企业三要素核验产品的收费方式和价格，计费详情请参见[产品计费](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4)。'."\n"
                .'- 当返回结果中：当VerifyResult返回true/false，且ReasonCode=0/1/2时计费，其余情况均不计费。'."\n"
                .'- 使用本接口前，请登录[号码百科控制台](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC&lang=zh)，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'CompanyFourElementsVerification' => [
            'summary' => '用于核验企业名称、企业证件号、企业法人姓名和企业法人身份证号，必须全部一致且企业经营状态为在营才会判定核验通过。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'EpCertNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业证件号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '9242032*******J627',
                    ],
                ],
                [
                    'name' => 'EpCertName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '某企业',
                    ],
                ],
                [
                    'name' => 'LegalPersonCertName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业法人姓名。'."\n"
                            .'> 如果企业有多个法人，法人之间需用中文顿号（”、”）隔开',
                        'type' => 'string',
                        'required' => true,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'LegalPersonCertNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业法人身份证号码。'."\n"
                            .'> 如果企业有多个身份证号，身份证号之间需用中文顿号（”、”）隔开',
                        'type' => 'string',
                        'required' => true,
                        'example' => '610321********0011、510180********0022',
                    ],
                ],
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            .'>登录[号码百科控制台](https://dytns.console.aliyun.com/overview?spm=a2c4g.608385.0.0.79847f8b3awqUC)，在[我的申请](https://dytns.console.aliyun.com/analysis/apply)页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Dd1r***4id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
                            ],
                            'Message' => [
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'DetailInfo' => [
                                        'description' => '企业详细信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'OpenTime' => [
                                                'description' => '企业营业期限。',
                                                'type' => 'string',
                                                'example' => '2023-05-25/2053-05-24',
                                            ],
                                            'EnterpriseStatus' => [
                                                'description' => '企业经营状态。',
                                                'type' => 'string',
                                                'example' => '在营（开业）',
                                            ],
                                        ],
                                        'example' => '{ "enterpriseStatus": "在营（开业）", '."\n"
                                            .'"openTime": "2023-05-25/2053-05-24" }',
                                    ],
                                    'InconsistentData' => [
                                        'description' => '校验不一致的字段',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '- EpCertName：企业名称'."\n"
                                                .'- EpCertNo：企业证件号'."\n"
                                                .'- CertName：企业法人姓名'."\n"
                                                .'- CertNo：企业法人证件号',
                                            'type' => 'string',
                                            'example' => 'CertName',
                                        ],
                                        'example' => '',
                                    ],
                                    'VerifyResult' => [
                                        'description' => '核验结果。取值：'."\n"
                                            .'-   true：信息核验一致，且企业正常经营。'."\n"
                                            .'-   false：核验不通过。',
                                        'type' => 'string',
                                        'example' => 'true',
                                    ],
                                    'ReasonCode' => [
                                        'description' => '核验结果编码。取值：'."\n"
                                            ."\n"
                                            .'- 0：核验一致'."\n"
                                            .'- 1：核验一致，企业非正常营业'."\n"
                                            .'- 2：法人与企业信息核验不一致'."\n"
                                            .'- 3：企业四要素不通过'."\n"
                                            .'- 4：查无此企业'."\n"
                                            .'- 5：库中无此法人',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'RequestTimeout',
                        'errorMessage' => 'Request supplier timed out.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"-\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"DetailInfo\\": {\\n      \\"OpenTime\\": \\"2023-05-25/2053-05-24\\",\\n      \\"EnterpriseStatus\\": \\"在营（开业）\\"\\n    },\\n    \\"InconsistentData\\": [\\n      \\"CertName\\"\\n    ],\\n    \\"VerifyResult\\": \\"true\\",\\n    \\"ReasonCode\\": 0\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '企业四要素核验',
            'description' => '- 请确保在使用该接口前，已充分了企业四要素核验产品的收费方式和价格，计费详情请参见[产品计费](https://help.aliyun.com/document_detail/154751.html?spm=a2c4g.154007.0.0.3edd7eb6E90YT4)。'."\n"
                .'- 当返回结果中：当VerifyResult返回true/false，且ReasonCode=0/1/2时计费，其余情况均不计费。'."\n"
                .'- 使用本接口前，请登录[号码百科控制台](https://account.aliyun.com/login/login.htm?oauth_callback=https%3A%2F%2Fdytns.console.aliyun.com%2Foverview%3Fspm%3Da2c4g.608385.0.0.79847f8b3awqUC&lang=zh)，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'DescribePhoneNumberOperatorAttribute' => [
            'summary' => '查询手机号码的归属信息，包括：所属省份、所属城市、所属基础运营商（中国移动、中国联通、中国电信、中国广电）、移动转售企业（阿里通信等）、是否携号转网、归属号码段等。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Dd1r***4id',
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的号码。'."\n"
                            ."\n"
                            .'- 若Mask取值为NORMAL，该字段为11位手机号码。'."\n"
                            .'- 若Mask取值为MD5，该字段为32位加密字符串。'."\n"
                            .'- 若Mask取值为SHA256，该字段为64位加密字符串。'."\n"
                            ."\n"
                            .'><notice>加密字符串中字母不区分大小写。</notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => '139****1234',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码的加密方式。取值：'."\n"
                            ."\n"
                            .'- **NORMAL**：不加密'."\n"
                            .'- **MD5**：MD5加密'."\n"
                            .'- **SHA256**：SHA256加密'."\n"
                            ."\n"
                            .'><notice>字符串中所有字母必须大写。</notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MD5',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。取值：'."\n"
                                    ."\n"
                                    .'- **OK**：成功。'."\n"
                                    .'- **InvalidParameter**：传入的手机号错误或参数格式错误。'."\n"
                                    .'- **PhoneNumberNotfound**：传入的手机号查不到归属结果。'."\n"
                                    .'- **isp.UNKNOWN**：未知异常。'."\n"
                                    .'- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '68A40250-50CD-034C-B728-0BD135850177',
                            ],
                            'Data' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'BasicCarrier' => [
                                        'description' => '基础运营商。取值：'."\n"
                                            ."\n"
                                            .'- **中国移动**。'."\n"
                                            .'- **中国联通**。'."\n"
                                            .'- **中国电信**。'."\n"
                                            .'- **中国广电**。',
                                        'type' => 'string',
                                        'example' => '中国移动',
                                    ],
                                    'Carrier' => [
                                        'description' => '实际运营商（含虚拟运营商），如果存在携号转网，则为携转后的运营商。',
                                        'type' => 'string',
                                        'example' => '中国移动',
                                    ],
                                    'IsNumberPortability' => [
                                        'description' => '是否携号转网。取值：'."\n"
                                            ."\n"
                                            .'- **true**：是'."\n"
                                            ."\n"
                                            .'- **false**：否',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'NumberSegment' => [
                                        'description' => '号码归属号段。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '139',
                                    ],
                                    'City' => [
                                        'description' => '号码归属城市。',
                                        'type' => 'string',
                                        'example' => '杭州',
                                    ],
                                    'Province' => [
                                        'description' => '号码归属省份。',
                                        'type' => 'string',
                                        'example' => '浙江',
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
                        'errorCode' => 'EncyrptTypeIllegal',
                        'errorMessage' => 'The encryption type of the mobile phone number is illegal',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified mobile phone number is invalid.',
                    ],
                    [
                        'errorCode' => 'PhoneNumberNotfound',
                        'errorMessage' => 'The queried number is not found.',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeNotMatch',
                        'errorMessage' => 'The number and number type do not match.',
                    ],
                    [
                        'errorCode' => 'AuthCodeNotExist',
                        'errorMessage' => 'The authorization code application failed and cannot be used.',
                    ],
                    [
                        'errorCode' => 'MobileNumberIllegal',
                        'errorMessage' => 'Wrong format of phone number',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD135850177\\",\\n  \\"Data\\": {\\n    \\"BasicCarrier\\": \\"中国移动\\",\\n    \\"Carrier\\": \\"中国移动\\",\\n    \\"IsNumberPortability\\": false,\\n    \\"NumberSegment\\": 139,\\n    \\"City\\": \\"杭州\\",\\n    \\"Province\\": \\"浙江\\"\\n  }\\n}","type":"json"}]',
            'title' => '号码归属查询（加密版）',
            'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品计费](~~154008~~)。'."\n"
                .'- 默认仅阿里云账号使用本接口，RAM用户只有在被授予相关API操作权限后才可使用。相关操作，请参见[为RAM用户授权](~~154006~~)。'."\n"
                .'- 本接口用于获取号码当前服务运营商、归属地和携号转网信息，支持**明文**、**MD5**、**SHA256**加密手机号码的查询。'."\n"
                ."\n"
                .'- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为2000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'responseParamsDescription' => '### 状态码原因及解决方案'."\n"
                ."\n"
                .'|状态码|原因|解决方案|'."\n"
                .'|------------- |------------|-----|'."\n"
                .'|OK：成功。|请求参数符合要求。|表示接口调用成功。|'."\n"
                .'|InvalidParameter：传入的手机号错误或参数格式错误。|请求参数的手机号格式错误或请求参数不符合API接口的要求。|输入正确的手机号或调整请求参数的格式，再重新提交请求。如：删除手机号中的不可见字符、空格、调整为半角字符等。|'."\n"
                .'|PhoneNumberNotfound：传入的手机号查不到归属结果。|传入的手机号查不到归属结果。|请更换其他手机号查询。|'."\n"
                .'|isp.UNKNOWN：未知异常。|系统返回了未知异常。|请尝试重新调用接口，建议重试的次数不要超过3次。|'."\n"
                ."\n"
                .'### BasicCarrier和Carrier字段含义：'."\n"
                ."\n"
                .'|手机号段归属|是否有携号转网|BasicCarrier字段返回结果|Carrier字段返回结果|'."\n"
                .'|--|--|--|--|'."\n"
                .'|基础运营商号段|是|携转后基础运营商（中国移动、中国联通、中国电信、中国广电）|携转后基础运营商（中国移动、中国联通、中国电信、中国广电）|'."\n"
                .'|基础运营商号段|否|基础运营商（中国移动、中国联通、中国电信、中国广电）|基础运营商（中国移动、中国联通、中国电信、中国广电）|'."\n"
                .'|虚拟运营商号段|暂不支持|基础运营商（中国移动、中国联通、中国电信、中国广电）|虚拟运营商（如：阿里云通信等）|',
        ],
        'PhoneNumberStatusForPublic' => [
            'summary' => '获取手机号码实时在网状态，例如正常、停机、空号等状态。支持明文、MD5/SHA256加密方式的号码查询。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Dd1r***4id',
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '待查询的号码。'."\n"
                            ."\n"
                            .'- 若Mask取值为NORMAL，该字段为11位手机号码。'."\n"
                            .'- 若Mask取值为MD5，该字段为32位加密字符串。'."\n"
                            .'- 若Mask取值为SHA256，该字段为64位加密字符串。'."\n"
                            ."\n"
                            .'> 加密字符串中字母不区分大小写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '139****1234',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加密方式。取值：'."\n"
                            ."\n"
                            .'- **NORMAL**：不加密'."\n"
                            ."\n"
                            .'- **MD5**'."\n"
                            ."\n"
                            .'- **SHA256**',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'NORMAL',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '结构体',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-****-****-9DCE-B38165CE4C47',
                            ],
                            'Message' => [
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '结构体',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '检测手机号返回状态。取值：'."\n"
                                            ."\n"
                                            .'- **NORMAL**：正常。'."\n"
                                            .'- **SHUTDOWN**：停机。'."\n"
                                            .'- **POWER_OFF**：关机。'."\n"
                                            .'- **NOT_EXIST**：空号。'."\n"
                                            .'- **SUSPECTED_POWER_OFF** ：疑似关机。'."\n"
                                            .'- **BUSY**：忙。'."\n"
                                            .'- **UNKNOWN**：未知。'."\n"
                                            ."\n"
                                            .'> 因运营商系统调整，中国电信的号码不支持返回：忙、疑似关机、关机状态。 [详见官网公告](https://help.aliyun.com/document_detail/2489709.html)',
                                        'type' => 'string',
                                        'example' => 'NORMAL',
                                    ],
                                    'Carrier' => [
                                        'description' => '号码当前归属的基础运营商。如果查询的号码存在携号转网，则返回携号转网后的基础运营商。'."\n"
                                            ."\n"
                                            .'取值：'."\n"
                                            ."\n"
                                            .'- **CMCC**：中国移动'."\n"
                                            .'- **CUCC**：中国联通'."\n"
                                            .'- **CTCC**：中国电信'."\n"
                                            ."\n"
                                            .'> 暂不支持中国广电的号码查询。',
                                        'type' => 'string',
                                        'example' => 'CMCC',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。取值：'."\n"
                                    ."\n"
                                    .'- **OK**：成功。'."\n"
                                    .'- **OperatorLimit**：运营商禁止查询的手机号。'."\n"
                                    .'- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。'."\n"
                                    ."\n"
                                    .'> 请访问[错误码中心](https://next.api.aliyun.com/document/Dytnsapi/2020-02-17/errorCode)查看更多错误码。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'OperatorLimit',
                        'errorMessage' => 'The number is limited by the operator',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC3BB6D2-****-****-9DCE-B38165CE4C47\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"NORMAL\\",\\n    \\"Carrier\\": \\"CMCC\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '号码状态查询（通用场景）',
            'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。'."\n"
                .'- 默认仅阿里云账号使用本接口，RAM用户只有在被授予相关API操作权限后才可使用。相关操作，请参见[为RAM用户授权](~~154006~~)。'."\n"
                .'- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'PhoneNumberStatusForAccount' => [
            'summary' => '获取手机号码实时在网状态，例如正常、停机、空号等状态。支持明文、MD5/SHA256加密方式的号码查询。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Dd1r***4id',
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的号码。'."\n"
                            ."\n"
                            .'- 若Mask取值为NORMAL，该字段为11位手机号码。'."\n"
                            .'- 若Mask取值为MD5，该字段为32位加密字符串。'."\n"
                            .'- 若Mask取值为SHA256，该字段为64位加密字符串。'."\n"
                            ."\n\n"
                            .'><notice>加密字符串中字母不区分大小写。 ></notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => '139****1234',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加密方式。取值：'."\n"
                            ."\n"
                            .'- **NORMAL**：不加密'."\n"
                            .'- **MD5**'."\n"
                            .'- **SHA256**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NORMAL',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '结构体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。取值：'."\n"
                                    ."\n"
                                    .'- **OK**：成功。'."\n"
                                    .'- **OperatorLimit**：运营商禁止查询的手机号。'."\n"
                                    .'- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
                            ],
                            'Data' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '检测手机号返回状态。取值：'."\n"
                                            ."\n"
                                            .'- **NORMAL**：正常。'."\n"
                                            .'- **SHUTDOWN**：停机。'."\n"
                                            .'- **POWER_OFF**：关机。'."\n"
                                            .'- **NOT_EXIST**：空号。'."\n"
                                            .'- **DEFECT**：异常号码。'."\n"
                                            .'- **UNKNOWN**：未知。'."\n"
                                            ."\n"
                                            .'>因运营商系统调整，中国电信的号码不支持返回：忙、关机状态。 [详见官网公告](https://help.aliyun.com/document_detail/2489709.html)',
                                        'type' => 'string',
                                        'example' => 'NORMAL',
                                    ],
                                    'Carrier' => [
                                        'description' => '号码当前归属的基础运营商。如果查询的号码存在携号转网，则返回携号转网后的基础运营商。取值：'."\n"
                                            ."\n"
                                            .'- **CMCC**：中国移动'."\n"
                                            .'- **CUCC**：中国联通'."\n"
                                            .'- **CTCC**：中国电信'."\n"
                                            .'> 暂不支持中国广电的号码查询。',
                                        'type' => 'string',
                                        'example' => 'CMCC',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'OperatorLimit',
                        'errorMessage' => 'The number is limited by the operator.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => 'MobileNumberIllegal',
                        'errorMessage' => 'Wrong format of phone number',
                    ],
                    [
                        'errorCode' => 'CarrierIllegal',
                        'errorMessage' => 'Illegal carrier type',
                    ],
                    [
                        'errorCode' => 'AuthCodeNotExist',
                        'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeIllegal',
                        'errorMessage' => 'Invalid number type.',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeNotMatch',
                        'errorMessage' => 'The number and number type do not match.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'System error',
                    ],
                    [
                        'errorCode' => 'Unknown',
                        'errorMessage' => 'Unknown error',
                    ],
                    [
                        'errorCode' => 'EncyrptTypeIllegal',
                        'errorMessage' => 'The encryption type of the mobile phone number is illegal',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"NORMAL\\",\\n    \\"Carrier\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
            'title' => '号码状态查询（账号验证场景）',
            'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。'."\n"
                .'- 默认仅阿里云账号使用本接口，RAM用户只有在被授予相关API操作权限后才可使用。相关操作，请参见[为RAM用户授权](~~154006~~)。'."\n"
                .'- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'PhoneNumberStatusForReal' => [
            'summary' => '获取手机号码实时在网状态，例如正常、停机、空号等状态。支持明文、MD5/SHA256加密方式的号码查询。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Dd1r***4id',
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的号码。'."\n"
                            ."\n"
                            .'- 若Mask取值为NORMAL，该字段为11位手机号码。'."\n"
                            .'- 若Mask取值为MD5，该字段为32位加密字符串。'."\n"
                            .'- 若Mask取值为SHA256，该字段为64位加密字符串。'."\n"
                            ."\n"
                            .'><notice>加密字符串中字母不区分大小写。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => '189****8999',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码的加密方式。取值：'."\n"
                            ."\n"
                            .'- **NORMAL**：不加密'."\n"
                            ."\n"
                            .'- **MD5**'."\n"
                            ."\n"
                            .'- **SHA256**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NORMAL',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '结构体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。取值：'."\n"
                                    ."\n"
                                    .'- **OK**：成功。'."\n"
                                    .'- **OperatorLimit**：运营商禁止查询的手机号。'."\n"
                                    .'- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
                            ],
                            'Data' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '检测手机号返回状态。取值：'."\n"
                                            ."\n"
                                            .'- **NORMAL**：正常。'."\n"
                                            .'- **SHUTDOWN**：停机。'."\n"
                                            .'- **POWER_OFF**：关机。'."\n"
                                            .'- **NOT_EXIST**：空号。'."\n"
                                            .'- **BUSY**：忙。'."\n"
                                            .'- **SUSPECTED_POWER_OFF**：疑似关机。'."\n"
                                            .'- **DEFECT**：异常号码。'."\n"
                                            .'- **UNKNOWN**：未知。'."\n"
                                            ."\n"
                                            .'>因运营商系统调整，中国电信的号码不支持返回：忙、疑似关机、关机状态。 [详见官网公告](https://help.aliyun.com/document_detail/2489709.html)',
                                        'type' => 'string',
                                        'example' => 'NORMAL',
                                    ],
                                    'Carrier' => [
                                        'description' => '号码当前归属的基础运营商。如果查询的号码存在携号转网，则返回携号转网后的基础运营商。取值：'."\n"
                                            ."\n"
                                            .'- **CMCC**：中国移动'."\n"
                                            .'- **CUCC**：中国联通'."\n"
                                            .'- **CTCC**：中国电信'."\n"
                                            .'> 暂不支持中国广电的号码查询。',
                                        'type' => 'string',
                                        'example' => 'CMCC',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'OperatorLimit',
                        'errorMessage' => 'The number is limited by the operator.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => 'MobileNumberIllegal',
                        'errorMessage' => 'Wrong format of phone number',
                    ],
                    [
                        'errorCode' => 'CarrierIllegal',
                        'errorMessage' => 'Illegal carrier type',
                    ],
                    [
                        'errorCode' => 'AuthCodeNotExist',
                        'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeIllegal',
                        'errorMessage' => 'Invalid number type.',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeNotMatch',
                        'errorMessage' => 'The number and number type do not match.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'System error',
                    ],
                    [
                        'errorCode' => 'Unknown',
                        'errorMessage' => 'Unknown error',
                    ],
                    [
                        'errorCode' => 'EncyrptTypeIllegal',
                        'errorMessage' => 'The encryption type of the mobile phone number is illegal',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"NORMAL\\",\\n    \\"Carrier\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
            'title' => '号码状态查询（风控检测场景）',
            'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。'."\n"
                .'- 默认仅阿里云账号使用本接口，RAM用户只有在被授予相关API操作权限后才可使用。相关操作，请参见[为RAM用户授权](~~154006~~)。'."\n"
                .'- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'PhoneNumberStatusForSms' => [
            'summary' => '获取手机号码实时在网状态，例如正常、停机、空号等状态。支持明文、MD5/SHA256加密方式的号码查询。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'zf08***pi6',
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的号码。'."\n"
                            ."\n"
                            .'- 若Mask取值为NORMAL，该字段为11位手机号码。'."\n"
                            .'- 若Mask取值为MD5，该字段为32位加密字符串。'."\n"
                            .'- 若Mask取值为SHA256，该字段为64位加密字符串。'."\n"
                            ."\n"
                            .'><notice>加密字符串中字母不区分大小写。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => '181****1234',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码的加密方式。取值：'."\n"
                            ."\n"
                            .'- **NORMAL**：不加密'."\n"
                            ."\n"
                            .'- **MD5**'."\n"
                            ."\n"
                            .'- **SHA256**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NORMAL',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '结构体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。取值：'."\n"
                                    ."\n"
                                    .'- **OK**：请求成功。'."\n"
                                    .'- **OperatorLimit**：运营商禁止查询的手机号。'."\n"
                                    .'- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '68A40250-50CD-034C-B728-0BD135850177',
                            ],
                            'Data' => [
                                'description' => '结构体',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '检测手机号返回状态。取值：'."\n"
                                            ."\n"
                                            .'- **NORMAL**：正常。'."\n"
                                            .'- **SHUTDOWN**：停机。'."\n"
                                            .'- **POWER_OFF**：关机。'."\n"
                                            .'- **NOT_EXIST**：空号。'."\n"
                                            .'- **DEFECT**：异常号码。'."\n"
                                            .'- **UNKNOWN**：未知。'."\n"
                                            ."\n"
                                            .'>因运营商系统调整，中国电信的号码不支持返回：忙、疑似关机、关机状态。 [详见官网公告](https://help.aliyun.com/document_detail/2489709.html)',
                                        'type' => 'string',
                                        'example' => 'NORMAL',
                                    ],
                                    'Carrier' => [
                                        'description' => '号码当前归属的基础运营商。如果查询的号码存在携号转网，则返回携号转网后的基础运营商。取值：'."\n"
                                            ."\n"
                                            .'- **CMCC**：中国移动'."\n"
                                            .'- **CUCC**：中国联通'."\n"
                                            .'- **CTCC**：中国电信'."\n"
                                            .'> 暂不支持中国广电的号码查询。',
                                        'type' => 'string',
                                        'example' => 'CMCC',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'OperatorLimit',
                        'errorMessage' => 'The number is limited by the operator.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => 'MobileNumberIllegal',
                        'errorMessage' => 'Wrong format of phone number',
                    ],
                    [
                        'errorCode' => 'CarrierIllegal',
                        'errorMessage' => 'Illegal carrier type',
                    ],
                    [
                        'errorCode' => 'AuthCodeNotExist',
                        'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeIllegal',
                        'errorMessage' => 'Invalid number type.',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeNotMatch',
                        'errorMessage' => 'The number and number type do not match.',
                    ],
                    [
                        'errorCode' => 'isp.UNKNOWN',
                        'errorMessage' => 'An error occurred due to unknown reasons.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'System error',
                    ],
                    [
                        'errorCode' => 'Unknown',
                        'errorMessage' => 'Unknown error',
                    ],
                    [
                        'errorCode' => 'EncyrptTypeIllegal',
                        'errorMessage' => 'The encryption type of the mobile phone number is illegal',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD135850177\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"NORMAL\\",\\n    \\"Carrier\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
            'title' => '号码状态查询（短信业务场景）',
            'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。'."\n"
                .'- 默认仅阿里云账号使用本接口，RAM用户只有在被授予相关API操作权限后才可使用。相关操作，请参见[为RAM用户授权](~~154006~~)。'."\n"
                .'- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'PhoneNumberStatusForVoice' => [
            'summary' => '获取手机号码实时在网状态，例如正常、停机、空号等状态。支持明文、MD5/SHA256加密方式的号码查询。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Dd1r***4id',
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的号码。'."\n"
                            ."\n"
                            .'- 若Mask取值为NORMAL，该字段为11位手机号码。'."\n"
                            .'- 若Mask取值为MD5，该字段为32位加密字符串。'."\n"
                            .'- 若Mask取值为SHA256，该字段为64位加密字符串。'."\n"
                            ."\n"
                            .'><notice>加密字符串中字母不区分大小写。></notice>'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '139****1234',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加密方式。取值：'."\n"
                            ."\n"
                            .'- **NORMAL**：不加密'."\n"
                            ."\n"
                            .'- **MD5**'."\n"
                            ."\n"
                            .'- **SHA256**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NORMAL',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '结构体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。取值：'."\n"
                                    ."\n"
                                    .'- **OK**：成功。'."\n"
                                    .'- **OperatorLimit**：运营商禁止查询的手机号。'."\n"
                                    .'- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
                            ],
                            'Data' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '检测手机号返回状态。取值：'."\n"
                                            ."\n"
                                            .'- **NORMAL**：正常。'."\n"
                                            .'- **SHUTDOWN**：停机。'."\n"
                                            .'- **POWER_OFF**：关机。'."\n"
                                            .'- **NOT_EXIST**：空号。'."\n"
                                            .'- **SUSPECTED_POWER_OFF** ：疑似关机。'."\n"
                                            .'- **DEFECT**：异常号码。'."\n"
                                            .'- **UNKNOWN**：未知。'."\n"
                                            ."\n"
                                            .'>因运营商系统调整，中国电信的号码不支持返回：忙、疑似关机、关机状态。 [详见官网公告](https://help.aliyun.com/document_detail/2489709.html)',
                                        'type' => 'string',
                                        'example' => 'NORMAL',
                                    ],
                                    'Carrier' => [
                                        'description' => '号码当前归属的基础运营商。如果查询的号码存在携号转网，则返回携号转网后的基础运营商。取值：'."\n"
                                            ."\n"
                                            .'- **CMCC**：中国移动'."\n"
                                            .'- **CUCC**：中国联通'."\n"
                                            .'- **CTCC**：中国电信'."\n"
                                            .'> 暂不支持中国广电的号码查询。',
                                        'type' => 'string',
                                        'example' => 'CTCC',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'OperatorLimit',
                        'errorMessage' => 'The number is limited by the operator.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => 'MobileNumberIllegal',
                        'errorMessage' => 'Wrong format of phone number',
                    ],
                    [
                        'errorCode' => 'CarrierIllegal',
                        'errorMessage' => 'Illegal carrier type',
                    ],
                    [
                        'errorCode' => 'AuthCodeNotExist',
                        'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeIllegal',
                        'errorMessage' => 'Invalid number type.',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeNotMatch',
                        'errorMessage' => 'The number and number type do not match.',
                    ],
                    [
                        'errorCode' => 'EncryptTypeIllegal',
                        'errorMessage' => 'Invalid encryption type.',
                    ],
                    [
                        'errorCode' => 'isp.UNKNOWN',
                        'errorMessage' => 'An error occurred due to unknown reasons.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'System error',
                    ],
                    [
                        'errorCode' => 'Unknown',
                        'errorMessage' => 'Unknown error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"NORMAL\\",\\n    \\"Carrier\\": \\"CTCC\\"\\n  }\\n}","type":"json"}]',
            'title' => '号码状态查询（语音业务场景）',
            'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。'."\n"
                .'- 默认仅阿里云账号使用本接口，RAM用户只有在被授予相关API操作权限后才可使用。相关操作，请参见[为RAM用户授权](~~154006~~)。'."\n"
                .'- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'PhoneNumberStatusForVirtual' => [
            'summary' => '获取手机号码虚拟号码（俗称小号）状态。支持明文、MD5/SHA256加密方式的号码查询。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Dd1r***4id',
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的号码。'."\n"
                            ."\n"
                            .'- 若Mask取值为NORMAL，该字段为11位手机号码。'."\n"
                            .'- 若Mask取值为MD5，该字段为32位加密字符串。'."\n"
                            .'- 若Mask取值为SHA256，该字段为64位加密字符串。'."\n"
                            ."\n"
                            .'><notice>加密字符串中字母不区分大小写。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => '139****0000',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码的加密方式。取值：'."\n"
                            ."\n"
                            .'- **NORMAL**：不加密'."\n"
                            ."\n"
                            .'- **MD5**'."\n"
                            ."\n"
                            .'- **SHA256**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NORMAL',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '结构体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。取值：'."\n"
                                    ."\n"
                                    .'- **OK**：成功。'."\n"
                                    .'- **OperatorLimit**：运营商禁止查询的手机号。'."\n"
                                    .'- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
                            ],
                            'Data' => [
                                'description' => '结构体',
                                'type' => 'object',
                                'properties' => [
                                    'IsPrivacyNumber' => [
                                        'description' => '是否是运营商的虚拟号码。取值：'."\n"
                                            ."\n"
                                            .'- **true**：是'."\n"
                                            ."\n"
                                            .'- **false**：否',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'OperatorLimit',
                        'errorMessage' => 'The number is limited by the operator.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => 'MobileNumberIllegal',
                        'errorMessage' => 'Wrong format of phone number',
                    ],
                    [
                        'errorCode' => 'CarrierIllegal',
                        'errorMessage' => 'Illegal carrier type',
                    ],
                    [
                        'errorCode' => 'AuthCodeNotExist',
                        'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeIllegal',
                        'errorMessage' => 'Invalid number type.',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeNotMatch',
                        'errorMessage' => 'The number and number type do not match.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'System error',
                    ],
                    [
                        'errorCode' => 'Unknown',
                        'errorMessage' => 'Unknown error',
                    ],
                    [
                        'errorCode' => 'EncyrptTypeIllegal',
                        'errorMessage' => 'The encryption type of the mobile phone number is illegal',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Data\\": {\\n    \\"IsPrivacyNumber\\": true\\n  }\\n}","type":"json"}]',
            'title' => '号码状态查询（虚拟号场景）',
            'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。'."\n"
                .'- 调用该接口当返回结果中：Code="OK" 且IsPrivacyNumber = true or false时计费，其他情况不计费。'."\n"
                .'- 默认仅阿里云账号使用本接口，RAM用户只有在被授予相关API操作权限后才可使用。相关操作，请参见[为RAM用户授权](~~154006~~)。'."\n"
                .'- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为300次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'DescribePhoneTwiceTelVerify' => [
            'summary' => '验证手机号是否为运营商二次放号的号码，支持在一次请求中快速检验号码是否为二次放号。',
            'methods' => [
                'post',
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
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '154743',
                'abilityTreeNodes' => [
                    'FEATUREdytnsHYEZ9Z',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Dd1r***4id',
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的号码。'."\n"
                            ."\n"
                            .'- 若Mask取值为NORMAL，该字段为11位手机号码。'."\n"
                            .'- 若Mask取值为MD5，该字段为32位加密字符串。'."\n"
                            .'- 若Mask取值为SHA256，该字段为64位加密字符串。'."\n"
                            ."\n"
                            .'><notice>加密字符串中字母不区分大小写。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => '139*******',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码的加密方式。取值：'."\n"
                            ."\n"
                            .'- **NORMAL**：不加密'."\n"
                            .'- **MD5**'."\n"
                            .'- **SHA256**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NORMAL',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时间，格式必须为yyyy-MM-dd HH:mm:ss。该时间为手机用户在业务侧的注册时间。如果注册时间在运营商放号时间之后，则表示该号码不是二次号，否则返回结果是二次号。'."\n"
                            ."\n"
                            .'> - 若单个号码在运营商侧存在多次放号的情况，系统将以最后一次在运营商侧的放号时间作为判断依据。'."\n"
                            .'> - 注册时间必须为1970-01-01 00:00:00之后的时间。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2018-01-01 00:00:00',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '68A40250-50CD-034C-B728-0BD135850177',
                            ],
                            'Code' => [
                                'description' => '请求状态码。取值：'."\n"
                                    ."\n"
                                    .'- **OK**：请求成功。'."\n"
                                    ."\n"
                                    .'- **PortabilityNumberNotSupported**：不支持的携号转网号码。'."\n"
                                    .'- **RequestNumberNotSupported**：不支持中国广电号码（192开头）和虚拟运营商号码的查询。'."\n"
                                    ."\n"
                                    .'- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。'."\n"
                                    ."\n"
                                    .'> 当Code取值为OK，且VerifyResult值不为0时计费，计费文档请参见[号码百科定价](~~154751~~)。'."\n"
                                    .'>',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'VerifyResult' => [
                                        'description' => '查询结果。取值：'."\n"
                                            ."\n"
                                            .'- **0**：无法判断。'."\n"
                                            .'- **1**：是二次放号。'."\n"
                                            .'- **2**：不是二次放号。'."\n"
                                            .'- **3**：号码已注销。',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'Carrier' => [
                                        'description' => '运营商。取值：'."\n"
                                            ."\n"
                                            .'- **CMCC**：中国移动。'."\n"
                                            .'- **CUCC**：中国联通。'."\n"
                                            .'- **CTCC**：中国电信。'."\n"
                                            ."\n"
                                            .'> 返回当前号码的归属运营商，如果该号码存在携号转网的情况，则返回携号转网后的运营商。',
                                        'type' => 'string',
                                        'example' => 'CMCC',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'PortabilityNumberNotSupported',
                        'errorMessage' => '不支持2021年6月前携号转网的号码查询',
                    ],
                    [
                        'errorCode' => 'RequestNumberNotSupported',
                        'errorMessage' => '不支持中国广电号码（192开头）和虚拟运营商号码的查询',
                    ],
                    [
                        'errorCode' => 'RequestFrequencyLimit',
                        'errorMessage' => '因运营商限制，禁止在短时间内高频对同一个号码进行反复查询',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                    [
                        'errorCode' => 'MobileNumberIllegal',
                        'errorMessage' => 'Wrong format of phone number',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeNotMatch',
                        'errorMessage' => 'Phone number and encryption type do not match',
                    ],
                    [
                        'errorCode' => 'InputParamIllegal',
                        'errorMessage' => 'Wrong format of input parameter',
                    ],
                    [
                        'errorCode' => 'AuthCodeIllegal',
                        'errorMessage' => 'Illegal authCode.',
                    ],
                    [
                        'errorCode' => 'ThresholdIllegal',
                        'errorMessage' => 'Please fill in the threshold range from 0 to 100 correctly.',
                    ],
                    [
                        'errorCode' => 'AuthCodeNotExist',
                        'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeIllegal',
                        'errorMessage' => 'Invalid number type.',
                    ],
                    [
                        'errorCode' => 'TagNotExist',
                        'errorMessage' => 'The label does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Unknown',
                        'errorMessage' => 'Unknown error',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'System error',
                    ],
                    [
                        'errorCode' => 'RequestSupplierError',
                        'errorMessage' => 'Request supplier error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD135850177\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"VerifyResult\\": \\"1\\",\\n    \\"Carrier\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
            'title' => '验证手机号是否为运营商二次放号的号码',
            'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。'."\n"
                .'- 当返回结果中：Code="OK" 且 VerifyResult != 0 时计费，其他情况不计费。 '."\n"
                .'- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                ."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。'."\n"
                ."\n"
                .'## 授权信息'."\n"
                .'默认仅限阿里云账号使用本接口，RAM用户只有在被授予了相关API操作权限后方可使用。具体请参见[为RAM用户授权](~~154006~~)。',
            'responseParamsDescription' => '### 状态码原因及解决方案'."\n"
                .'|HttpCode|状态码|原因|解决方案|'."\n"
                .'| ------- | ------- | ------- | ------ |'."\n"
                .'|200|OK：成功。|请求参数符合要求。|表示接口调用成功。|'."\n"
                .'|200|PortabilityNumberNotSupported：不支持的携号转网号码。|部分携号转网号码会返回此错误码。|建议更换其他号码查询。携号转网的号码在原运营商侧已销户，新运营商侧认为携入的时间为开户时间，因此携号转网的号码无法准确的查询到该号码的真实情况。|'."\n"
                ."\n"
                .'### 异常原因及解决方案'."\n"
                .'|HttpCode|状态码|原因|解决方案|'."\n"
                .'| ------- | ------- | ------- | ------- |'."\n"
                .'|400|AuthCodeNotExist：授权码不存在。|授权码不存在。|请先在号码分析服务申请您所需的标签，申请成功并获得授权码后，再发起接口调用。|'."\n"
                .'|400|MobileNumberIllegal：请求参数的手机号格式有误。|手机号格式填写有误。|若手机号未加密，填入11位正确的数字号码即可；若手机号经MD5加密处理，该字段为32位加密字符串；若手机号经SHA256加密处理，该字段为64位加密字符串。|'."\n"
                .'|400|MobileNumberTypeIllegal：加密方式类型错误。|不支持的加密方式或加密类型不规范。|加密方式仅支持NORMAL、MD5、SHA256三种，且必须为大写字符。|'."\n"
                .'|500|Unknown：未知异常。|系统返回了未知异常。|请您尝试重新调用接口，建议重试的次数不要超过3次。|'."\n"
                .'|500|SystemError：网元系统异常。|系统错误。|请尝试重新调用接口，建议重试次数不要超过3次。|',
        ],
        'DescribePhoneNumberOnlineTime' => [
            'summary' => '查询手机用户在运营商侧的在网时长。',
            'methods' => [
                'post',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'QASDW@#**',
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的号码。'."\n"
                            ."\n"
                            .'- 若Mask取值为NORMAL，该字段为11位手机号码。'."\n"
                            .'- 若Mask取值为MD5，该字段为32位加密字符串。'."\n"
                            .'- 若Mask取值为SHA256，该字段为64位加密字符串。'."\n"
                            ."\n"
                            .'><notice>加密字符串中字母不区分大小写。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码的加密方式。取值：'."\n"
                            ."\n"
                            .'- **NORMAL**：不加密'."\n"
                            .'- **MD5**'."\n"
                            .'- **SHA256**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NORMAL',
                    ],
                ],
                [
                    'name' => 'Carrier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对外运营商。取值：'."\n"
                            ."\n"
                            .'- **MOBILE**：中国移动。'."\n"
                            .'- **UNICOM**：中国联通。'."\n"
                            .'- **TELECOM**：中国电信。'."\n"
                            ."\n"
                            .'><notice>非必填项，阿里云会根据号码归属的运营商类型做自动判断，该字段的取值对查询结果无任何影响。></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UNICOM',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
                            ],
                            'Code' => [
                                'description' => '请求状态码。取值：'."\n"
                                    ."\n"
                                    .'- **OK**：请求成功。'."\n"
                                    .'- **PortabilityNumberNotSupported**：不支持的携号转网号码。'."\n"
                                    .'- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。'."\n"
                                    ."\n"
                                    .'> 当Code取值为OK，且VerifyResult值不为-1时计费，计费文档请参见[号码百科定价](~~154751~~)。'."\n"
                                    .'>',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '号码状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'VerifyResult' => [
                                        'description' => '在网时长枚举值。枚举值如下：'."\n"
                                            ."\n"
                                            .'- **-1**：查无时长。'."\n"
                                            .'- **0**：手机状态异常，例如空号。'."\n"
                                            .'- **1**：[0-3)月。'."\n"
                                            .'- **2**：[3-6]月。'."\n"
                                            .'- **3**：(6-12]月。'."\n"
                                            .'- **4**：(12-24]月。'."\n"
                                            .'- **5**：(24，+)月',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'CarrierCode' => [
                                        'description' => '运营商短信状态码。取值：'."\n"
                                            .'- **CMCC**：中国移动'."\n"
                                            .'- **CUCC**：中国联通'."\n"
                                            .'- **CTCC**：中国电信'."\n"
                                            .'- **CBN**：中国广电',
                                        'type' => 'string',
                                        'example' => 'CMCC',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'PortabilityNumberNotSupported',
                        'errorMessage' => 'Number portability is not supported',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => 'Insufficient.Balance',
                        'errorMessage' => 'You have an insufficient balance.',
                    ],
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                    [
                        'errorCode' => 'AuthCodeNotExist',
                        'errorMessage' => 'Authorization code does not exist',
                    ],
                    [
                        'errorCode' => 'CarrierIllegal',
                        'errorMessage' => 'Illegal carrier type',
                    ],
                    [
                        'errorCode' => 'MobileNumberIllegal',
                        'errorMessage' => 'Wrong format of phone number',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeNotMatch',
                        'errorMessage' => 'Phone number and encryption type do not match',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeIllegal',
                        'errorMessage' => 'Invalid number type.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'System error',
                    ],
                    [
                        'errorCode' => 'Unknown',
                        'errorMessage' => 'Unknown error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"VerifyResult\\": \\"1\\",\\n    \\"CarrierCode\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
            'title' => '在网时长查询',
            'description' => '- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                .'- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'responseParamsDescription' => '### 状态码原因及解决方案'."\n"
                .'|HttpCode|状态码|原因|解决方案|'."\n"
                .'| ------- | ------- | ------- | ------ |'."\n"
                .'|200|OK：成功。|请求参数符合要求。|表示接口调用成功。|'."\n"
                .'|200|PortabilityNumberNotSupported：不支持的号码查询。|有少部分携号转网号码会返回此错误码。|建议更换其他号码查询。携号转网的号码在原运营商侧已销户，新运营商侧认为携入的时间为开户时间，因此携号转网的号码无法准确的查询到该号码的真实情况。|'."\n"
                ."\n"
                .'### 异常原因及解决方案'."\n"
                .'|HttpCode|状态码|原因|解决方案|'."\n"
                .'| ------- | ------- | ------- | ------- |'."\n"
                .'|400|AuthCodeNotExist：授权码不存在。|授权码不存在。|请先在号码分析服务申请您所需的标签，申请成功并获得授权码后，再发起DescribePhoneNumberOnlineTime接口调用。|'."\n"
                .'|400|CarrierIllegal：运营商类型非法。|运营商类型非法。|请您填入正确的运营商类型，对于加密的号码，该字段必填且必须为大写字符。|'."\n"
                .'|400|MobileNumberIllegal：请求参数的手机号格式有误。|手机号格式填写有误。|若手机号未加密，填入11位正确的数字号码即可；若手机号经MD5加密处理，该字段为32位加密字符串；若手机号经SHA256加密处理，该字段为64位加密字符串。|'."\n"
                .'|400|MobileNumberTypeNotMatch：手机号格式与加密类型不匹配。|填入的手机号与加密类型不匹配。|请您填入正确手机号格式和号码加密类型。|'."\n"
                .'|400|MobileNumberTypeIllegal：加密方式类型错误。|不支持的加密方式或加密类型不规范。|加密方式仅支持NORMAL、MD5、SHA256三种，且必须为大写字符。|'."\n"
                .'|500|Unknown：未知异常。|系统返回了未知异常。|请您尝试重新调用接口，建议重试的次数不要超过3次。|'."\n"
                .'|500|SystemError：网元系统异常。|系统错误。|请尝试重新调用接口，建议重试次数不要超过3次。|',
        ],
        'DescribePhoneNumberAnalysisAI' => [
            'summary' => '获取号码分析返回结果。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '187****5620',
                    ],
                ],
                [
                    'name' => 'Rate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码分数阈值。取值范围：**0~100**。'."\n"
                            ."\n"
                            .'> 是否接受指定的分数阈值由服务端决定。当不接受指定分数阈值时，此字段输入的数据无效。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '96',
                    ],
                ],
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在**号码分析服务**->[**标签广场**](https://dytns.console.aliyun.com/analysis/square)选择标签，提交使用申请，申请通过后，会获得该授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'HwD***nG',
                    ],
                ],
                [
                    'name' => 'ModelConfig',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模型参数配置（部分标签能力需要）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"trainingJobId": "17**********48"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '68A40250-50CD-034C-B728-0BD******177',
                            ],
                            'Message' => [
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'Number' => [
                                        'description' => '传入的手机号。',
                                        'type' => 'string',
                                        'example' => '187****5620',
                                    ],
                                    'Code' => [
                                        'description' => '返回的结果编码。'."\n"
                                            ."\n"
                                            .'- YES：有效'."\n"
                                            .'- NO：无效'."\n"
                                            .'- UNKNOWN：未知',
                                        'type' => 'string',
                                        'example' => 'YES',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。取值：'."\n"
                                    .'- OK：成功',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorMessage' => 'A system error occurred.',
                        'errorCode' => 'InternalError',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"\\",\\n  \\"RequestId\\": \\"68A40250-50CD-034C-B728-0BD******177\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"Number\\": \\"187****5620\\",\\n    \\"Code\\": \\"YES\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '号码AI分析服务',
            'description' => '使用本接口前，请登录号码百科控制台，在标签广场页面，找到对应的标签，单击申请开通，填写申请资料，审批通过后即可使用。'."\n"
                .'请确保在使用本接口前，您已充分了解号码百科产品计费。',
        ],
        'DescribePhoneNumberAnalysis' => [
            'summary' => '获取号码分析返回结果。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'QASDW@#**',
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '187****5620',
                    ],
                ],
                [
                    'name' => 'NumberType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码类型。取值：'."\n"
                            ."\n"
                            .'- **0**：手机号'."\n"
                            ."\n"
                            .'- **1**：手机IMEI号',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码的加密方式。取值：'."\n"
                            ."\n"
                            .'- **NORMAL**：不加密'."\n"
                            ."\n"
                            .'- **MD5**'."\n"
                            ."\n"
                            .'- **SHA256**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NORMAL',
                    ],
                ],
                [
                    'name' => 'Rate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码分数阈值。取值范围：**0~100**。'."\n"
                            ."\n"
                            .'><notice>是否接受指定的分数阈值由服务端决定。当不接受指定分数阈值时，此字段输入的数据无效。></notice>',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
                            ],
                            'Message' => [
                                'description' => '号码状态的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '号码分析返回结果信息。',
                                'type' => 'object',
                                'properties' => [
                                    'List' => [
                                        'description' => '数据列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Number' => [
                                                    'description' => '传入的手机号。',
                                                    'type' => 'string',
                                                    'example' => '187****5620',
                                                ],
                                                'Code' => [
                                                    'description' => '返回的结果编码。'."\n"
                                                        .'- YES：有效'."\n"
                                                        .'- NO：无效'."\n"
                                                        .'- UNKNOWN：未知',
                                                    'type' => 'string',
                                                    'example' => 'NO',
                                                ],
                                            ],
                                        ],
                                        'example' => '',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。取值：'."\n"
                                    ."\n"
                                    .' **OK**：成功。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                    [
                        'errorCode' => 'MobileNumberIllegal',
                        'errorMessage' => 'Wrong format of phone number',
                    ],
                    [
                        'errorCode' => 'EncyrptTypeIllegal',
                        'errorMessage' => 'The encryption type of the mobile phone number is illegal',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeNotMatch',
                        'errorMessage' => 'Phone number and encryption type do not match',
                    ],
                    [
                        'errorCode' => 'CarrierIllegal',
                        'errorMessage' => 'Illegal carrier type',
                    ],
                    [
                        'errorCode' => 'RateIllegal',
                        'errorMessage' => 'Illegal threshold parameter',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'invalid parameter',
                    ],
                    [
                        'errorCode' => 'AuthCodeNotExist',
                        'errorMessage' => 'The authorization code application failed and cannot be used.',
                    ],
                    [
                        'errorCode' => 'TagNotExist',
                        'errorMessage' => 'The label does not exist.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Permission.NotAuthorized',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"List\\": [\\n      {\\n        \\"Number\\": \\"187****5620\\",\\n        \\"Code\\": \\"NO\\"\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribePhoneNumberAnalysisResponse>\\n    <RequestId>CC3BB6D2-2FDF-4321-9DCE-B38165CE****</RequestId>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <Data>\\n        <Code>YES</Code>\\n        <Number>1310000****</Number>\\n    </Data>\\n</DescribePhoneNumberAnalysisResponse>","errorExample":""}]',
            'title' => '查询号码分析结果',
            'description' => '- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                .'- 请确保在使用本接口前，您已充分了解号码百科[产品计费](~~154008~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。'."\n"
                ."\n"
                .'### 授权信息'."\n"
                .'默认仅限阿里云账号使用本接口，RAM用户只有在被授予了相关API操作权限后方可使用。具体请参见[为RAM用户授权](~~154006~~)。',
            'responseParamsDescription' => '### 状态码原因及解决方案'."\n"
                .'|HttpCode|返回码|描述|解决方案|'."\n"
                .'| ------- | ------- | ------- | ------- |'."\n"
                .'|200|OK|成功。|表示接口调用成功。|'."\n"
                ."\n"
                .'### 异常原因及解决方案'."\n"
                .'|HttpCode|错误码|描述|解决方案|'."\n"
                .'| ------- | ------- | ------- | ------- |'."\n"
                .'|400|MobileNumberIllegal|手机号非法。|若手机号未加密，填入11位正确的数字号码即可；若手机号经MD5加密处理，该字段为32位加密字符串；若手机号经SHA256加密处理，该字段为64位加密字符串。|'."\n"
                .'|400|EncyrptTypeIllegal|加密类型非法。|加密方式仅支持NORMAL、MD5、SHA256三种，且必须为大写字符。|'."\n"
                .'|400|MobileNumberTypeNotMatch|手机号码与加密类型不匹配。|请您填入正确手机号格式和号码加密类型。|'."\n"
                .'|400|AuthCodeNotExist|授权码不存在或不可用。|授权码不存在或授权码未通过审核，请您核实授权码的正确性。|'."\n"
                .'|400|TagNotExist|标签或业务资源不存在。|标签不存在或业务资源不存在，请核实标签的可用性。|'."\n"
                .'|400|RateIllegal|阈值参数非法。|阈值参数非法，请检查阈值参数是否合规。|'."\n"
                .'|400|InvalidParameter|非法参数。|请求参数错误，请检查参数是否正确。|'."\n"
                .'|400|System.LimitControl|流控错误。|请将查询频率限制在正常范围内，对于出现该错误码的号码适当进行重查，建议重复查询的次数不要超过3次。|'."\n"
                .'|500|SystemError|系统异常。|系统错误，请稍后重试。|',
        ],
        'DescribeEmptyNumber' => [
            'summary' => '通过AI算法，预测手机号是否为空号。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Dd1r***4id'."\n",
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的号码。'."\n"
                            ."\n\n"
                            .'> 目前仅支持单个号码查询。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '189****1234',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码的加密方式。取值：'."\n"
                            ."\n"
                            .'- **NORMAL**：不加密'."\n"
                            ."\n"
                            .'- **MD5**'."\n"
                            ."\n"
                            .'- **SHA256**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NORMAL',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '结构体',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '公共参数，每个请求返回的ID都是唯一的，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '检测手机号返回状态。取值：'."\n"
                                            ."\n"
                                            .'- **EMPTY**：空号。'."\n"
                                            ."\n"
                                            .'- **NORMAL**：正常。'."\n"
                                            ."\n"
                                            .'- **SUSPECT_EMPTY**：疑似空号。'."\n"
                                            ."\n"
                                            .'- **UNKNOWN**：未知。'."\n",
                                        'type' => 'string',
                                        'example' => 'EMPTY',
                                    ],
                                    'Number' => [
                                        'description' => '传入的手机号。',
                                        'type' => 'string',
                                        'example' => '189****1234',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '返回状态码。取值：'."\n"
                                    ."\n"
                                    .'- **OK**：成功。'."\n"
                                    ."\n"
                                    .'- **InvalidPhoneNumber.Check**：手机号非法。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"EMPTY\\",\\n    \\"Number\\": \\"189****1234\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '手机号空号检测',
            'description' => '- 本接口用于验证号码是否为空号。发起调用该接口验证号码请求时，系统会根据验证次数计费，标准价为0.01元/次。**请确保在使用该接口前，已充分了解本产品的收费方式和价格。**'."\n"
                .'- 当返回结果中：Code="OK" 且 Status != UNKNOWN 时计费，其他情况不计费。 '."\n"
                .'- 由于本产品通过AI算法预测手机号的空号概率，所以无法做到100%准确。当前评估的准确率和召回率约为95%左右。**调用时请注意差别**。'."\n"
                .'- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。'."\n"
                ."\n"
                .'### 授权信息'."\n"
                .'默认仅限阿里云账号使用本接口，RAM用户只有在被授予了相关API操作权限后方可使用。具体请参见[为RAM用户授权](~~154006~~)。',
        ],
        'TwoElementsVerification' => [
            'summary' => '二要素（姓名和手机号）核验。用于比对用户填写的姓名、手机号两项信息是否属于同一用户。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'QASDW@#**',
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待检验的号码。'."\n"
                            ."\n"
                            .'- 若Mask取值为NORMAL，该字段为明文。'."\n"
                            .'- 若Mask取值为MD5，请将该字段做MD5加密。'."\n"
                            .'- 若Mask取值为SHA256，请将该字段做SHA256加密。'."\n"
                            ."\n"
                            .'><notice>加密字符串中字母不区分大小写。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加密方式。取值：'."\n"
                            ."\n"
                            .'- **NORMAL**：不加密'."\n"
                            ."\n"
                            .'- **MD5**'."\n"
                            ."\n"
                            .'- **SHA256**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MD5',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待核验的姓名。'."\n"
                            ."\n"
                            .'- 若Mask取值为NORMAL，该字段为明文。'."\n"
                            .'- 若Mask取值为MD5，请将该字段做MD5加密。'."\n"
                            .'- 若Mask取值为SHA256，请将该字段做SHA256加密。'."\n"
                            ."\n"
                            .'><notice>加密字符串中字母不区分大小写。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => '阿里云',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- **OK**：请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见本章的错误码表。'."\n"
                                    .'- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码或姓名进行反复查询，如返回此错误码，请您稍后再试。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE****',
                            ],
                            'Data' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'IsConsistent' => [
                                        'description' => '验证结果是否一致。返回：'."\n"
                                            ."\n"
                                            .'- **1**：一致'."\n"
                                            ."\n"
                                            .'- **0**：不一致'."\n"
                                            ."\n"
                                            .'- **2**：查无'."\n"
                                            ."\n"
                                            .'不同运营商、不同城市的数据更新时效，通常在T+1至T+3之间。'."\n"
                                            .'不同的运营商手机号，在不同状态下，核验结果如下： '."\n"
                                            ."\n"
                                            .'|运营商/手机号状态|停机|空号|销号|'."\n"
                                            .'|--|--|--|--|'."\n"
                                            .'|中国移动|正常核验|查无|查无|'."\n"
                                            .'|中国联通|正常核验|不一致|不一致|'."\n"
                                            .'|中国电信|正常核验|查无|查无|',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'BasicCarrier' => [
                                        'description' => '基础运营商。取值：'."\n"
                                            ."\n"
                                            .'- **中国移动**。'."\n"
                                            ."\n"
                                            .'- **中国联通**。'."\n"
                                            ."\n"
                                            .'- **中国电信**。'."\n"
                                            ."\n"
                                            .'><notice>暂时不支持中国广电的号码。></notice>',
                                        'type' => 'string',
                                        'example' => '中国移动',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'OperatorLimit',
                        'errorMessage' => 'The number is limited by the operator.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => 'MobileNumberIllegal',
                        'errorMessage' => 'Wrong format of phone number',
                    ],
                    [
                        'errorCode' => 'EncyrptTypeIllegal',
                        'errorMessage' => 'The encryption type of the mobile phone number is illegal',
                    ],
                    [
                        'errorCode' => 'CarrierIllegal',
                        'errorMessage' => 'Illegal carrier type',
                    ],
                    [
                        'errorCode' => 'AuthCodeNotExist',
                        'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeNotMatch',
                        'errorMessage' => 'The number and number type do not match.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Unknown',
                        'errorMessage' => 'Unknown error',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'System error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE****\\",\\n  \\"Data\\": {\\n    \\"IsConsistent\\": 1,\\n    \\"BasicCarrier\\": \\"中国移动\\"\\n  }\\n}","type":"json"}]',
            'title' => '运营商二要素核验',
            'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。'."\n"
                .'- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                .'- 当接口值返回值：Code="OK"且IsConsistent != 2时计费，其他返回结果不计费。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'ThreeElementsVerification' => [
            'summary' => '三要素（姓名、手机号和身份证号）核验。用于比对用户填写的姓名、手机号、身份证号三个信息是否属于同一用户。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'QASDW@#**',
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待检验的号码。'."\n"
                            ."\n"
                            .'- 若Mask取值为NORMAL，该字段为明文。'."\n"
                            .'- 若Mask取值为MD5，请将该字段做MD5加密。'."\n"
                            .'- 若Mask取值为SHA256，请将该字段做SHA256加密。'."\n"
                            ."\n"
                            .'><notice>加密字符串中字母不区分大小写。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加密方式。取值：'."\n"
                            ."\n"
                            .'- **NORMAL**：不加密'."\n"
                            ."\n"
                            .'- **MD5**'."\n"
                            ."\n"
                            .'- **SHA256**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MD5',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'CertCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待核验的身份证号。'."\n"
                            ."\n"
                            .'- 若Mask取值为NORMAL，该字段为明文。'."\n"
                            .'- 若Mask取值为MD5，请将该字段做MD5加密。'."\n"
                            .'- 若Mask取值为SHA256，请将该字段做SHA256加密。'."\n"
                            ."\n"
                            .'><notice>加密字符串中字母不区分大小写。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => '83d8040d3cb2181e04****dc6ff5566d4493876a4a5da782887446356b0a787e',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待核验的姓名。'."\n"
                            ."\n"
                            .'- 若Mask取值为NORMAL，该字段为明文。'."\n"
                            .'- 若Mask取值为MD5，请将该字段做MD5加密。'."\n"
                            .'- 若Mask取值为SHA256，请将该字段做SHA256加密。'."\n"
                            ."\n"
                            .'><notice>加密字符串中字母不区分大小写。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => '阿里云',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- **OK**：请求成功。'."\n"
                                    .'- 其他错误码，请参见本章的错误码表。'."\n"
                                    .'- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
                            ],
                            'Data' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'BasicCarrier' => [
                                        'description' => '基础运营商。取值：'."\n"
                                            ."\n"
                                            .'- **中国移动**。'."\n"
                                            ."\n"
                                            .'- **中国联通**。'."\n"
                                            ."\n"
                                            .'- **中国电信**。',
                                        'type' => 'string',
                                        'example' => '中国移动',
                                    ],
                                    'IsConsistent' => [
                                        'description' => '验证结果是否一致。返回：'."\n"
                                            ."\n"
                                            .'- **1**：一致'."\n"
                                            .'- **0**：不一致'."\n"
                                            .'- **2**：查无'."\n"
                                            .'>不同运营商、不同城市的数据更新时效，通常在T+1至T+3之间。'."\n"
                                            .'不同的运营商手机号，在不同状态下，核验结果如下： '."\n"
                                            ."\n"
                                            .'|运营商/手机号状态|停机|空号|销号|'."\n"
                                            .'|--|--|--|--|'."\n"
                                            .'|中国移动|正常核验|查无|查无|'."\n"
                                            .'|中国联通|正常核验|不一致|不一致|'."\n"
                                            .'|中国电信|正常核验|查无|查无|',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'OperatorLimit',
                        'errorMessage' => 'The number is limited by the operator.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => 'MobileNumberIllegal',
                        'errorMessage' => 'Wrong format of phone number',
                    ],
                    [
                        'errorCode' => 'EncyrptTypeIllegal',
                        'errorMessage' => 'The encryption type of the mobile phone number is illegal',
                    ],
                    [
                        'errorCode' => 'CarrierIllegal',
                        'errorMessage' => 'Illegal carrier type',
                    ],
                    [
                        'errorCode' => 'CertCodeIllegal',
                        'errorMessage' => 'Invalid CertCode value.',
                    ],
                    [
                        'errorCode' => 'MobileNumberTypeNotMatch',
                        'errorMessage' => 'The number and number type do not match.',
                    ],
                    [
                        'errorCode' => 'AuthCodeNotExist',
                        'errorMessage' => 'The label application form does not exist, please replace the authorization code.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Unknown',
                        'errorMessage' => 'Unknown error',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'System error',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Data\\": {\\n    \\"BasicCarrier\\": \\"中国移动\\",\\n    \\"IsConsistent\\": 1\\n  }\\n}","type":"json"}]',
            'title' => '运营商三要素核验',
            'description' => '- 请确保在使用本接口前，您已充分了解号码百科[产品定价](~~154751~~)。'."\n"
                .'- 使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                .'- 当接口值返回值：Code=\'OK\' 且 IsConsistent != 2时计费，其他返回结果不计费。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为200次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'PhoneNumberEncrypt' => [
            'summary' => '将原始号码加密为一个140开头的虚拟号码。通过结合阿里云的通信服务，可以使用加密后的140号码发起语音呼叫。实现虚拟号码呼叫的效果。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'QASDW@#**',
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的号码。'."\n"
                            ."\n"
                            .'> 目前仅支持单个号码查询。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码的加密方式。取值：**NORMAL**。'."\n"
                            ."\n\n"
                            .'><notice>目前仅支持NORMAL加密方式。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NORMAL',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '结构体',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
                            ],
                            'Message' => [
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '数组。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结构体。',
                                    'type' => 'object',
                                    'properties' => [
                                        'OriginalNumber' => [
                                            'description' => '原始号码。',
                                            'type' => 'string',
                                            'example' => '1390000****',
                                        ],
                                        'EncryptedNumber' => [
                                            'description' => '加密后的号码。',
                                            'type' => 'string',
                                            'example' => '1400513****',
                                        ],
                                        'ExpireTime' => [
                                            'description' => '号码过期时间。',
                                            'type' => 'string',
                                            'example' => '2022-05-27 16:05:23',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[错误码列表](~~109196~~)。'."\n",
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Permission.NotAuthorized',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": [\\n    {\\n      \\"OriginalNumber\\": \\"1390000****\\",\\n      \\"EncryptedNumber\\": \\"1400513****\\",\\n      \\"ExpireTime\\": \\"2022-05-27 16:05:23\\"\\n    }\\n  ],\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '加密号码',
            'description' => '使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'InvalidPhoneNumberFilter' => [
            'summary' => '进行无效号码过滤操作。',
            'methods' => [
                'post',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权码。'."\n"
                            ."\n"
                            .'> 在[号码百科控制台](https://dytns.console.aliyun.com/analysis/apply)**我的申请**页面，获取授权ID即授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'QASDW@#**',
                    ],
                ],
                [
                    'name' => 'InputNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'Mask',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码的加密方式。'."\n"
                            ."\n"
                            .'><notice>目前仅支持NORMAL加密方式。></notice>',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NORMAL',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
                            ],
                            'Code' => [
                                'description' => '请求状态码。取值：'."\n"
                                    ."\n"
                                    .'- **OK**：成功。'."\n"
                                    ."\n"
                                    .'- **MobileNumberIllegal**：手机号非法。'."\n"
                                    ."\n"
                                    .'- **EncyrptTypeIllegal**：加密类型非法。'."\n"
                                    ."\n"
                                    .'- **MobileNumberTypeNotMatch**：手机号码与加密类型不匹配。'."\n"
                                    ."\n"
                                    .'- **CarrierIllegal**：运营商类型非法。'."\n"
                                    ."\n"
                                    .'- **AuthCodeNotExist**：授权码不存在。'."\n"
                                    ."\n"
                                    .'- **PortabilityNumberNotSupported**：不支持携号转网。'."\n"
                                    ."\n"
                                    .'- **Unknown**：未知异常。'."\n"
                                    ."\n"
                                    .'- **AuthCodeAndApiNotMatch**：系统异常。'."\n"
                                    ."\n"
                                    .'- **AuthCodeAndApiNotMatch**：AuthCode与API接口不匹配。'."\n"
                                    .'- **RequestFrequencyLimit**：因运营商限制，禁止在短时间内高频对同一个号码进行反复查询，如返回此错误码，请您稍后再试。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'description' => '数组。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '结构体。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Code' => [
                                            'description' => '返回过滤的结果。'."\n"
                                                ."\n"
                                                .'- **YES**：有效状态号码，返回映射关系。'."\n"
                                                ."\n"
                                                .'- **NO**：无效状态号码，不返回映射关系。',
                                            'type' => 'string',
                                            'example' => 'YES',
                                        ],
                                        'OriginalNumber' => [
                                            'description' => '原始号码。',
                                            'type' => 'string',
                                            'example' => '1390000****',
                                        ],
                                        'EncryptedNumber' => [
                                            'description' => '加密后的号码。',
                                            'type' => 'string',
                                            'example' => '1400513****',
                                        ],
                                        'ExpireTime' => [
                                            'description' => '号码过期时间。',
                                            'type' => 'string',
                                            'example' => '2022-05-27 16:05:23',
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
                        'errorCode' => 'Product.Unsubscript',
                        'errorMessage' => 'You have not subscribed to the specified product.',
                    ],
                    [
                        'errorCode' => 'Ram.PermissionDeny',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                    [
                        'errorCode' => 'System.LimitControl',
                        'errorMessage' => 'The system is under flow control.',
                    ],
                    [
                        'errorCode' => 'Unknown.ResourceOwnerId',
                        'errorMessage' => 'The resource does not belong to the current user.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Permission.NotAuthorized',
                        'errorMessage' => 'You are not authorized to perform the operation.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": [\\n    {\\n      \\"Code\\": \\"YES\\",\\n      \\"OriginalNumber\\": \\"1390000****\\",\\n      \\"EncryptedNumber\\": \\"1400513****\\",\\n      \\"ExpireTime\\": \\"2022-05-27 16:05:23\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '过滤无效号码',
            'description' => '使用本接口前，请登录号码百科控制台，在[标签广场](https://dytns.console.aliyun.com/analysis/square)页面，找到对应的标签，单击**申请开通**，填写申请资料，审批通过后即可使用。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'QueryTagListPage' => [
            'summary' => '分页查询标签列表。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '页码。默认取值为**1**。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '18',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '66',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A4475657-BB7E-585D-9E09-37934F096103',
                            ],
                            'Message' => [
                                'title' => '',
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'title' => '',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'title' => '',
                                        'description' => '总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '32',
                                    ],
                                    'TotalPage' => [
                                        'title' => '',
                                        'description' => '总页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '91',
                                    ],
                                    'PageSize' => [
                                        'title' => '',
                                        'description' => '分页大小。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '24',
                                    ],
                                    'PageNo' => [
                                        'title' => '',
                                        'description' => '当前页码。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '11',
                                    ],
                                    'Records' => [
                                        'title' => '',
                                        'description' => '数据列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据。',
                                            'type' => 'object',
                                            'properties' => [
                                                'SceneId' => [
                                                    'title' => '场景id',
                                                    'description' => '场景ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '13',
                                                ],
                                                'SceneName' => [
                                                    'title' => '场景名称',
                                                    'description' => '场景名称。',
                                                    'type' => 'string',
                                                    'example' => '查询',
                                                ],
                                                'IndustryId' => [
                                                    'title' => '行业id',
                                                    'description' => '行业ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2',
                                                ],
                                                'Introduction' => [
                                                    'title' => '标签介绍',
                                                    'description' => '标签介绍。',
                                                    'type' => 'string',
                                                    'example' => '这个标签是查询号码状态的。',
                                                ],
                                                'SaleStatusStr' => [
                                                    'title' => '0 隐藏 1 公开',
                                                    'description' => '- 0：隐藏'."\n"
                                                        .' '."\n"
                                                        .'- 1：公开',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'ApiName' => [
                                                    'title' => '前端调用的api名称',
                                                    'description' => '前端调用的API名称。',
                                                    'type' => 'string',
                                                    'example' => 'TwoElementsVerification',
                                                ],
                                                'Id' => [
                                                    'title' => '标签 id',
                                                    'description' => '标签ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '75',
                                                ],
                                                'IndustryName' => [
                                                    'title' => '行业名称',
                                                    'description' => '行业名称。',
                                                    'type' => 'string',
                                                    'example' => '测试',
                                                ],
                                                'Code' => [
                                                    'title' => 'code',
                                                    'description' => '请求状态码。 OK为成功。',
                                                    'type' => 'string',
                                                    'example' => 'OK',
                                                ],
                                                'DocAddress' => [
                                                    'title' => 'API文档链接',
                                                    'description' => 'API文档链接。',
                                                    'type' => 'string',
                                                    'example' => 'https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.388997.0.0.cf804cc7DX4vlP',
                                                ],
                                                'Name' => [
                                                    'title' => '标签名称',
                                                    'description' => '标签名称。',
                                                    'type' => 'string',
                                                    'example' => '阿里云',
                                                ],
                                                'IsOpen' => [
                                                    'title' => '是否已经申请开通',
                                                    'description' => '是否已经申请开通。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '是',
                                                ],
                                            ],
                                        ],
                                        'example' => '',
                                    ],
                                ],
                                'example' => '',
                            ],
                            'Code' => [
                                'title' => '',
                                'description' => '请求状态码。 **OK**为成功。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '',
                                'description' => '是否成功。取值：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    ."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A4475657-BB7E-585D-9E09-37934F096103\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 32,\\n    \\"TotalPage\\": 91,\\n    \\"PageSize\\": 24,\\n    \\"PageNo\\": 11,\\n    \\"Records\\": [\\n      {\\n        \\"SceneId\\": 13,\\n        \\"SceneName\\": \\"查询\\",\\n        \\"IndustryId\\": 2,\\n        \\"Introduction\\": \\"这个标签是查询号码状态的。\\",\\n        \\"SaleStatusStr\\": \\"1\\",\\n        \\"ApiName\\": \\"TwoElementsVerification\\",\\n        \\"Id\\": 75,\\n        \\"IndustryName\\": \\"测试\\",\\n        \\"Code\\": \\"OK\\",\\n        \\"DocAddress\\": \\"https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.388997.0.0.cf804cc7DX4vlP\\",\\n        \\"Name\\": \\"阿里云\\",\\n        \\"IsOpen\\": 0\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '分页查询标签列表',
        ],
        'QueryTagInfoBySelection' => [
            'summary' => '查询标签信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'IndustryId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '行业id',
                        'description' => '行业ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '58',
                    ],
                ],
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '场景id',
                        'description' => '场景ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '83',
                    ],
                ],
                [
                    'name' => 'TagId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签id',
                        'description' => '标签ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '71',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1C3B8084-3A7D-570B-BC84-BF945A9CF65E',
                            ],
                            'Message' => [
                                'title' => '',
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'title' => '',
                                'description' => '返回的数据内容。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回的数据内容。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SceneId' => [
                                            'title' => '场景id',
                                            'description' => '场景ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '41',
                                        ],
                                        'IndustryId' => [
                                            'title' => '行业id',
                                            'description' => '行业ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '83',
                                        ],
                                        'SceneName' => [
                                            'title' => '场景名称',
                                            'description' => '场景名称。',
                                            'type' => 'string',
                                            'example' => '通用',
                                        ],
                                        'TagName' => [
                                            'title' => '标签名称',
                                            'description' => '标签名称。',
                                            'type' => 'string',
                                            'example' => '号码归属',
                                        ],
                                        'FlowName' => [
                                            'title' => '流程名称',
                                            'description' => '流程名称。',
                                            'type' => 'string',
                                            'example' => '查询',
                                        ],
                                        'EnumDefinitionAddress' => [
                                            'title' => '枚举值定义链接',
                                            'description' => '枚举值定义链接。',
                                            'type' => 'string',
                                            'example' => 'example.aliyundoc.com'."\n",
                                        ],
                                        'TagId' => [
                                            'title' => '标签id',
                                            'description' => '标签ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '31',
                                        ],
                                        'AuthCodeList' => [
                                            'title' => '可用的授权码列表',
                                            'description' => '可用的授权码列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '无',
                                                'type' => 'string',
                                                'example' => '无',
                                            ],
                                            'example' => '',
                                        ],
                                        'IndustryName' => [
                                            'title' => '行业名称',
                                            'description' => '行业名称。',
                                            'type' => 'string',
                                            'example' => '物流',
                                        ],
                                        'DocAddress' => [
                                            'title' => 'API文档链接',
                                            'description' => 'API文档链接。',
                                            'type' => 'string',
                                            'example' => 'https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.2573870.0.0.3aa921cbOrtqJz',
                                        ],
                                        'DemoAddress' => [
                                            'title' => 'API demo链接',
                                            'description' => 'API demo链接。',
                                            'type' => 'string',
                                            'example' => 'https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.2573870.0.0.3aa921cbOrtqJz',
                                        ],
                                        'ParamList' => [
                                            'title' => '标签参数列表',
                                            'description' => '标签参数列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签参数。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ValueDict' => [
                                                        'title' => '枚举值定义，code:desc',
                                                        'description' => '枚举值定义，code：desc',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '枚举值定义，code：desc',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Desc' => [
                                                                    'title' => '中文名',
                                                                    'description' => '中文名。',
                                                                    'type' => 'string',
                                                                    'example' => '阿里云',
                                                                ],
                                                                'Code' => [
                                                                    'title' => '英文名',
                                                                    'description' => '英文名。',
                                                                    'type' => 'string',
                                                                    'example' => 'Aliyun',
                                                                ],
                                                            ],
                                                        ],
                                                        'example' => '',
                                                    ],
                                                    'Type' => [
                                                        'title' => '类型EnumUIWidgetTypes对应的code',
                                                        'description' => '类型，EnumUIWidgetTypes对应的code。',
                                                        'type' => 'string',
                                                        'example' => 'aqzx',
                                                    ],
                                                    'Hint' => [
                                                        'title' => '输入提示',
                                                        'description' => '输入提示。',
                                                        'type' => 'string',
                                                        'example' => '无',
                                                    ],
                                                    'Code' => [
                                                        'title' => '参数英文名',
                                                        'description' => '参数英文名。',
                                                        'type' => 'string',
                                                        'example' => 'preame',
                                                    ],
                                                    'Must' => [
                                                        'title' => '是否必填',
                                                        'description' => '是否必填。',
                                                        'type' => 'boolean',
                                                        'example' => 'false',
                                                    ],
                                                    'Name' => [
                                                        'title' => '参数中文名',
                                                        'description' => '参数中文名。',
                                                        'type' => 'string',
                                                        'example' => '无',
                                                    ],
                                                ],
                                            ],
                                            'example' => '',
                                        ],
                                        'RichTextDescription' => [
                                            'description' => '富文本描述信息，仅复杂标签有此字段。',
                                            'type' => 'string',
                                            'example' => '无',
                                        ],
                                        'ComplexityType' => [
                                            'description' => '标签类型。',
                                            'type' => 'string',
                                            'example' => 'SINGLE_STAGE',
                                        ],
                                    ],
                                ],
                                'example' => '',
                            ],
                            'Code' => [
                                'title' => '',
                                'description' => '请求状态码。 **OK**为成功。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '',
                                'description' => '是否成功。取值：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    ."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C3B8084-3A7D-570B-BC84-BF945A9CF65E\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": [\\n    {\\n      \\"SceneId\\": 41,\\n      \\"IndustryId\\": 83,\\n      \\"SceneName\\": \\"通用\\",\\n      \\"TagName\\": \\"号码归属\\",\\n      \\"FlowName\\": \\"查询\\",\\n      \\"EnumDefinitionAddress\\": \\"example.aliyundoc.com\\\\n\\",\\n      \\"TagId\\": 31,\\n      \\"AuthCodeList\\": [\\n        \\"无\\"\\n      ],\\n      \\"IndustryName\\": \\"物流\\",\\n      \\"DocAddress\\": \\"https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.2573870.0.0.3aa921cbOrtqJz\\",\\n      \\"DemoAddress\\": \\"https://help.aliyun.com/document_detail/388997.html?spm=a2c4g.2573870.0.0.3aa921cbOrtqJz\\",\\n      \\"ParamList\\": [\\n        {\\n          \\"ValueDict\\": [\\n            {\\n              \\"Desc\\": \\"阿里云\\",\\n              \\"Code\\": \\"Aliyun\\"\\n            }\\n          ],\\n          \\"Type\\": \\"aqzx\\",\\n          \\"Hint\\": \\"无\\",\\n          \\"Code\\": \\"preame\\",\\n          \\"Must\\": false,\\n          \\"Name\\": \\"无\\"\\n        }\\n      ],\\n      \\"RichTextDescription\\": \\"无\\",\\n      \\"ComplexityType\\": \\"SINGLE_STAGE\\"\\n    }\\n  ],\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '查询标签信息',
        ],
        'QueryUsageStatisticsByTagId' => [
            'summary' => '根据标签ID查询用量统计。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'BeginTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '开始时间',
                        'description' => '查询开始时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20230308',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '结束时间',
                        'description' => '查询结束时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20230406',
                    ],
                ],
                [
                    'name' => 'TagId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '结束时间',
                        'description' => '标签ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '89',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '当前页码，默认：1',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '页面大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D45CC751-34DF-5797-81FB-9A2ED6DC024B',
                            ],
                            'Message' => [
                                'title' => '',
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'title' => '',
                                'description' => '返回的数据内容。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回的数据内容。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AuthorizationCode' => [
                                            'title' => '授权码',
                                            'description' => '授权码。',
                                            'type' => 'string',
                                            'example' => 'g61I8UV5zd',
                                        ],
                                        'SuccessTotal' => [
                                            'title' => '查询成功号码数',
                                            'description' => '查询成功号码数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '93',
                                        ],
                                        'FailTotal' => [
                                            'title' => '查询失败号码数',
                                            'description' => '查询失败号码数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '71',
                                        ],
                                        'TagName' => [
                                            'title' => '标签名称',
                                            'description' => '标签名称。',
                                            'type' => 'string',
                                            'example' => '阿里云查询',
                                        ],
                                        'SceneName' => [
                                            'title' => '场景名称',
                                            'description' => '场景名称。',
                                            'type' => 'string',
                                            'example' => '电话回访1',
                                        ],
                                        'Total' => [
                                            'title' => '查询总号码数',
                                            'description' => '查询总号码数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '41',
                                        ],
                                        'TagId' => [
                                            'title' => '标签名称',
                                            'description' => '标签名称。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '69',
                                        ],
                                        'PartnerId' => [
                                            'title' => '客户 pid',
                                            'description' => '客户pid。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10000013****071',
                                        ],
                                        'Id' => [
                                            'title' => '授权码使用记录 id',
                                            'description' => '授权码使用记录ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '4d32c9ef-c8b0-4d69-a437-cca5****185d',
                                        ],
                                        'GmtDateStr' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '20230312',
                                        ],
                                        'IndustryName' => [
                                            'title' => '行业名称',
                                            'description' => '行业名称。',
                                            'type' => 'string',
                                            'example' => '家政安保',
                                        ],
                                    ],
                                ],
                                'example' => '',
                            ],
                            'Code' => [
                                'title' => '',
                                'description' => '请求状态码。 **OK**为成功。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '',
                                'description' => '表示是否调用成功。'."\n"
                                    .'- true：调用成功。             '."\n"
                                    .' - false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D45CC751-34DF-5797-81FB-9A2ED6DC024B\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": [\\n    {\\n      \\"AuthorizationCode\\": \\"g61I8UV5zd\\",\\n      \\"SuccessTotal\\": 93,\\n      \\"FailTotal\\": 71,\\n      \\"TagName\\": \\"阿里云查询\\",\\n      \\"SceneName\\": \\"电话回访1\\",\\n      \\"Total\\": 41,\\n      \\"TagId\\": 69,\\n      \\"PartnerId\\": 0,\\n      \\"Id\\": 0,\\n      \\"GmtDateStr\\": \\"20230312\\",\\n      \\"IndustryName\\": \\"家政安保\\"\\n    }\\n  ],\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '根据标签ID查询用量统计',
        ],
        'QueryTagApplyRule' => [
            'summary' => '查询标签申请规则。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TagId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签id',
                        'description' => '标签ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '61',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-****-****-9DCE-B38165CE4C47',
                            ],
                            'Message' => [
                                'title' => '',
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'title' => '',
                                'description' => '返回的数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'NeedApplyMaterial' => [
                                        'title' => '是否需要提供申请材料',
                                        'description' => '是否需要提供申请材料，取值：'."\n"
                                            ."\n"
                                            .'- 0：不需要。'."\n"
                                            ."\n"
                                            .'- 1：需要。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'EncryptedQuery' => [
                                        'title' => '是否支持加密查询',
                                        'description' => '是否支持加密查询，取值：'."\n"
                                            ."\n"
                                            .'- 0：不支持。'."\n"
                                            ."\n"
                                            .'- 1：支持。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'SlaLink' => [
                                        'title' => '服务协议链接',
                                        'description' => '服务协议链接。',
                                        'type' => 'string',
                                        'example' => 'example.aliyundoc.com',
                                    ],
                                    'ApplyMaterialDesc' => [
                                        'title' => '申请材料要求',
                                        'description' => '申请材料要求。NeedApplyMaterial=1时，返回该参数。',
                                        'type' => 'string',
                                        'example' => '申请材料的要求是XXX',
                                    ],
                                    'AutoAudit' => [
                                        'title' => '是否自动审批',
                                        'description' => '是否自动审批，取值：'."\n"
                                            ."\n"
                                            .'- 0：不自动审批。'."\n"
                                            ."\n"
                                            .'- 1：自动审批。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'ChargingStandardLink' => [
                                        'title' => '计费标准说明链接',
                                        'description' => '计费标准说明链接。',
                                        'type' => 'string',
                                        'example' => 'aliyundoc.com',
                                    ],
                                ],
                                'example' => '',
                            ],
                            'Code' => [
                                'title' => '',
                                'description' => '请求状态码。 **OK**表示成功。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '',
                                'description' => '是否成功。取值：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    ."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CC3BB6D2-****-****-9DCE-B38165CE4C47\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": {\\n    \\"NeedApplyMaterial\\": 1,\\n    \\"EncryptedQuery\\": 0,\\n    \\"SlaLink\\": \\"example.aliyundoc.com\\",\\n    \\"ApplyMaterialDesc\\": \\"申请材料的要求是XXX\\",\\n    \\"AutoAudit\\": 1,\\n    \\"ChargingStandardLink\\": \\"aliyundoc.com\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '查询标签申请规则',
        ],
        'QueryAvailableAuthCode' => [
            'summary' => '查询可用的授权码。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TagId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签id',
                        'description' => '标签ID。可通过调用[QueryTagListPage](~~QueryTagListPage~~)接口，查询标签ID值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '22',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6ADDCD31-6BC7-5913-A47F-E29A07E37FEE',
                            ],
                            'Message' => [
                                'title' => '',
                                'description' => '返回状态码描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Data' => [
                                'title' => '',
                                'description' => '返回的数据内容。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回的数据内容。',
                                    'type' => 'string',
                                    'example' => '[\'n81Q8M63rg\']',
                                ],
                                'example' => '',
                            ],
                            'Code' => [
                                'title' => '',
                                'description' => '请求状态码。 **OK**为成功。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'title' => '',
                                'description' => '是否成功。取值：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    ."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6ADDCD31-6BC7-5913-A47F-E29A07E37FEE\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Data\\": [\\n    \\"[\'n81Q8M63rg\']\\"\\n  ],\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '查询可用的授权码',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'dytnsapi.aliyuncs.com',
        ],
    ],
];
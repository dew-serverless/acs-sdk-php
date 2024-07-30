<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ocr',
        'version' => '2019-12-30',
    ],
    'directories' => [
        [
            'id' => 66262,
            'title' => '异步结果',
            'type' => 'directory',
            'children' => [
                'GetAsyncJobResult',
            ],
        ],
        [
            'id' => 66264,
            'title' => '识别',
            'type' => 'directory',
            'children' => [
                'RecognizeBankCard',
                'RecognizeBusinessLicense',
                'RecognizeCharacter',
                'RecognizeDriverLicense',
                'RecognizeDrivingLicense',
                'RecognizeIdentityCard',
                'RecognizeLicensePlate',
                'RecognizeQrCode',
                'RecognizeTable',
                'RecognizeTaxiInvoice',
                'RecognizeTrainTicket',
                'RecognizeVATInvoice',
                'RecognizeVINCode',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'RecognizePdf',
                'RecognizeTicketInvoice',
                'RecognizeQuotaInvoice',
                'RecognizeVideoCharacter',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetAsyncJobResult' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '异步接口返回的RequestId，输入后可以查询异步接口的真实请求结果。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'E75FE679-0303-4DD1-8252-1143B4FA8A27',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '1',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A1F44EC4-118D-4A03-B213-F908F36F7DAA',
                            ],
                            'Data' => [
                                'description' => '返回的数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '异步任务状态。包括：'."\n"
                                            ."\n"
                                            .'- QUEUING：任务排队中'."\n"
                                            ."\n"
                                            .'- PROCESSING：异步处理中'."\n"
                                            ."\n"
                                            .'- PROCESS_SUCCESS：处理成功'."\n"
                                            ."\n"
                                            .'- PROCESS_FAILED：处理失败'."\n"
                                            ."\n"
                                            .'- TIMEOUT_FAILED：任务超时未处理完成'."\n"
                                            ."\n"
                                            .'- LIMIT_RETRY_FAILED：超过最大重试次数',
                                        'type' => 'string',
                                        'example' => 'PROCESS_SUCCESS',
                                    ],
                                    'ErrorMessage' => [
                                        'description' => '异步任务错误码信息。',
                                        'type' => 'string',
                                        'example' => 'paramsIllegal',
                                    ],
                                    'Result' => [
                                        'description' => '异步任务返回的真实请求结果。',
                                        'type' => 'string',
                                        'example' => '{\\"Content\\":\\"<div > <h2 > 2017 年 3 月 40 多家陶企上榜失信被执行人名单 </h2><div > 1 月 7 日，陶卫网记者根据最高人民法院及各地法院发布的失信被执行人信息统计，2019 年 12 月全国各地有 112 家陶瓷企业被列入“失信被执行人”名单，名单涉及 21 个省（市）。此次名单中，广东省的失信陶企多达 28 家。 </div><div > 据统计，这些“失信被执行人”的上榜原因主要为债务纠纷，欠款不还，大部分为拖欠供应商货款、工资、员工赔偿、银行贷款以及融资租赁租金等，也有涉及运输、燃气等费用，小部分企业涉及承担债务连带清偿责任。 </div><table border=1>    <tr><td > 公司名称 </td><td > 最新失信发布时间 </td><td > 累计失信次数 </td>    </tr>    <tr><td > 潮州市澳士通陶瓷实业有限公司 </td><td > 3 月 15 日 </td><td > 1 次 </td>    </tr>    <tr><td > 肇庆市德圣陶瓷有限公司 </td><td > 3 月 14 日 </td><td > 6 次 </td>    </tr>    <tr><td > 清远市港龙陶瓷有限公司 </td><td > 3 月 10 日 </td><td > 28 次 </td>    </tr>    <tr><td > 广西金沙江陶瓷有限公司 </td><td > 3 月 14 日 </td><td > 3 次 </td>    </tr>    <tr><td > 宜丰县凯扬陶瓷发展有限公司 </td><td > 3 月 29 日 </td><td > 11 次 </td>    </tr>    <tr><td > 江西领先精工陶瓷发展有限公司 </td><td > 3 月 29 日 </td><td > 23 次 </td>    </tr>    <tr><td > 高安弘建陶瓷有限公司 </td><td > 3 月 28 日 </td><td > 5 次 </td>    </tr></table>\\"}',
                                    ],
                                    'ErrorCode' => [
                                        'description' => '异步任务错误码。',
                                        'type' => 'string',
                                        'example' => 'InvalidParameter',
                                    ],
                                    'JobId' => [
                                        'description' => '异步任务ID。',
                                        'type' => 'string',
                                        'example' => '49E2CC28-ED1D-4CC5-854D-7D0AE2B20976',
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
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A1F44EC4-118D-4A03-B213-F908F36F7DAA\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"PROCESS_SUCCESS\\",\\n    \\"ErrorMessage\\": \\"paramsIllegal\\",\\n    \\"Result\\": \\"{\\\\\\\\\\\\\\"Content\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"<div > <h2 > 2017 年 3 月 40 多家陶企上榜失信被执行人名单 </h2><div > 1 月 7 日，陶卫网记者根据最高人民法院及各地法院发布的失信被执行人信息统计，2019 年 12 月全国各地有 112 家陶瓷企业被列入“失信被执行人”名单，名单涉及 21 个省（市）。此次名单中，广东省的失信陶企多达 28 家。 </div><div > 据统计，这些“失信被执行人”的上榜原因主要为债务纠纷，欠款不还，大部分为拖欠供应商货款、工资、员工赔偿、银行贷款以及融资租赁租金等，也有涉及运输、燃气等费用，小部分企业涉及承担债务连带清偿责任。 </div><table border=1>    <tr><td > 公司名称 </td><td > 最新失信发布时间 </td><td > 累计失信次数 </td>    </tr>    <tr><td > 潮州市澳士通陶瓷实业有限公司 </td><td > 3 月 15 日 </td><td > 1 次 </td>    </tr>    <tr><td > 肇庆市德圣陶瓷有限公司 </td><td > 3 月 14 日 </td><td > 6 次 </td>    </tr>    <tr><td > 清远市港龙陶瓷有限公司 </td><td > 3 月 10 日 </td><td > 28 次 </td>    </tr>    <tr><td > 广西金沙江陶瓷有限公司 </td><td > 3 月 14 日 </td><td > 3 次 </td>    </tr>    <tr><td > 宜丰县凯扬陶瓷发展有限公司 </td><td > 3 月 29 日 </td><td > 11 次 </td>    </tr>    <tr><td > 江西领先精工陶瓷发展有限公司 </td><td > 3 月 29 日 </td><td > 23 次 </td>    </tr>    <tr><td > 高安弘建陶瓷有限公司 </td><td > 3 月 28 日 </td><td > 5 次 </td>    </tr></table>\\\\\\\\\\\\\\"}\\",\\n    \\"ErrorCode\\": \\"InvalidParameter\\",\\n    \\"JobId\\": \\"49E2CC28-ED1D-4CC5-854D-7D0AE2B20976\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A1F44EC4-118D-4A03-B213-F908F36F7DAA</RequestId>\\n<Data>\\n    <Status>PROCESS_SUCCESS</Status>\\n    <ErrorMessage>paramsIllegal</ErrorMessage>\\n    <Result>{\\\\\\"Content\\\\\\":\\\\\\"&lt;div &gt; &lt;h2 &gt; 2017 年 3 月 40 多家陶企上榜失信被执行人名单 &lt;/h2&gt;&lt;div &gt; 1 月 7 日，陶卫网记者根据最高人民法院及各地法院发布的失信被执行人信息统计，2019 年 12 月全国各地有 112 家陶瓷企业被列入“失信被执行人”名单，名单涉及 21 个省（市）。此次名单中，广东省的失信陶企多达 28 家。 &lt;/div&gt;&lt;div &gt; 据统计，这些“失信被执行人”的上榜原因主要为债务纠纷，欠款不还，大部分为拖欠供应商货款、工资、员工赔偿、银行贷款以及融资租赁租金等，也有涉及运输、燃气等费用，小部分企业涉及承担债务连带清偿责任。 &lt;/div&gt;&lt;table border=1&gt;    &lt;tr&gt;&lt;td &gt; 公司名称 &lt;/td&gt;&lt;td &gt; 最新失信发布时间 &lt;/td&gt;&lt;td &gt; 累计失信次数 &lt;/td&gt;    &lt;/tr&gt;    &lt;tr&gt;&lt;td &gt; 潮州市澳士通陶瓷实业有限公司 &lt;/td&gt;&lt;td &gt; 3 月 15 日 &lt;/td&gt;&lt;td &gt; 1 次 &lt;/td&gt;    &lt;/tr&gt;    &lt;tr&gt;&lt;td &gt; 肇庆市德圣陶瓷有限公司 &lt;/td&gt;&lt;td &gt; 3 月 14 日 &lt;/td&gt;&lt;td &gt; 6 次 &lt;/td&gt;    &lt;/tr&gt;    &lt;tr&gt;&lt;td &gt; 清远市港龙陶瓷有限公司 &lt;/td&gt;&lt;td &gt; 3 月 10 日 &lt;/td&gt;&lt;td &gt; 28 次 &lt;/td&gt;    &lt;/tr&gt;    &lt;tr&gt;&lt;td &gt; 广西金沙江陶瓷有限公司 &lt;/td&gt;&lt;td &gt; 3 月 14 日 &lt;/td&gt;&lt;td &gt; 3 次 &lt;/td&gt;    &lt;/tr&gt;    &lt;tr&gt;&lt;td &gt; 宜丰县凯扬陶瓷发展有限公司 &lt;/td&gt;&lt;td &gt; 3 月 29 日 &lt;/td&gt;&lt;td &gt; 11 次 &lt;/td&gt;    &lt;/tr&gt;    &lt;tr&gt;&lt;td &gt; 江西领先精工陶瓷发展有限公司 &lt;/td&gt;&lt;td &gt; 3 月 29 日 &lt;/td&gt;&lt;td &gt; 23 次 &lt;/td&gt;    &lt;/tr&gt;    &lt;tr&gt;&lt;td &gt; 高安弘建陶瓷有限公司 &lt;/td&gt;&lt;td &gt; 3 月 28 日 &lt;/td&gt;&lt;td &gt; 5 次 &lt;/td&gt;    &lt;/tr&gt;&lt;/table&gt;\\\\\\"}</Result>\\n    <ErrorCode>InvalidParameter</ErrorCode>\\n    <JobId>49E2CC28-ED1D-4CC5-854D-7D0AE2B20976</JobId>\\n</Data>","errorExample":""}]',
            'title' => '查询异步任务结果',
            'summary' => '本文介绍查询异步任务结果GetAsyncJobResult的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'异步接口调用API接口后，返回的并不是真正的请求结果，您需要保存返回结果中的RequestId，然后调用GetAsyncJobResult来获取真正的请求结果。'."\n"
                ."\n"
                .'> - 异步任务的文件有过期时间，有效期是30分钟。如需长期使用，需及时将文件下载到本地服务器或存储在OSS中。有关OSS更多操作信息，请参见[上传文件](~~31886~~)。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n\n"
                .'当前文字识别类目中视频文字识别（RecognizeVideoCharacter）为异步接口，需要调用GetAsyncJobResult来获取真实的请求结果。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## Result反序列化'."\n"
                .'将上面Result反序列化展示如下。'."\n"
                .'```'."\n"
                .'{'."\n"
                .'	"Content": "<div > <h2 > 2017 年 3 月 40 多家陶企上榜失信被执行人名单 </h2><div > 1 月 7 日，陶卫网记者根据最高人民法院及各地法院发布的失信被执行人信息统计，2019 年 12 月全国各地有 112 家陶瓷企业被列入“失信被执行人”名单，名单涉及 21 个省（市）。此次名单中，广东省的失信陶企多达 28 家。 </div><div > 据统计，这些“失信被执行人”的上榜原因主要为债务纠纷，欠款不还，大部分为拖欠供应商货款、工资、员工赔偿、银行贷款以及融资租赁租金等，也有涉及运输、燃气等费用，小部分企业涉及承担债务连带清偿责任。 </div><table border=1>    <tr><td > 公司名称 </td><td > 最新失信发布时间 </td><td > 累计失信次数 </td>    </tr>    <tr><td > 潮州市澳士通陶瓷实业有限公司 </td><td > 3 月 15 日 </td><td > 1 次 </td>    </tr>    <tr><td > 肇庆市德圣陶瓷有限公司 </td><td > 3 月 14 日 </td><td > 6 次 </td>    </tr>    <tr><td > 清远市港龙陶瓷有限公司 </td><td > 3 月 10 日 </td><td > 28 次 </td>    </tr>    <tr><td > 广西金沙江陶瓷有限公司 </td><td > 3 月 14 日 </td><td > 3 次 </td>    </tr>    <tr><td > 宜丰县凯扬陶瓷发展有限公司 </td><td > 3 月 29 日 </td><td > 11 次 </td>    </tr>    <tr><td > 江西领先精工陶瓷发展有限公司 </td><td > 3 月 29 日 </td><td > 23 次 </td>    </tr>    <tr><td > 高安弘建陶瓷有限公司 </td><td > 3 月 28 日 </td><td > 5 次 </td>    </tr></table>"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'## 错误码'."\n"
                .'关于查询异步任务结果的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeBankCard' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ImageURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeBankCard/yhk3.jpg',
                        'isFileTransferUrl' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '1',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D9C7521-0367-42EE-9646-FD066CCADB26',
                            ],
                            'Data' => [
                                'description' => '返回的数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'CardNumber' => [
                                        'description' => '银行卡号。',
                                        'type' => 'string',
                                        'example' => '6212262315007683105',
                                    ],
                                    'ValidDate' => [
                                        'description' => '有效日期，识别失败则返回空字符串。如有多个，则用逗号分隔，例如`03/17,04/05`。',
                                        'type' => 'string',
                                        'example' => '07/26',
                                    ],
                                    'BankName' => [
                                        'description' => '银行名称，识别失败则返回空字符串。',
                                        'type' => 'string',
                                        'example' => '中国工商银行',
                                    ],
                                    'CardType' => [
                                        'description' => '银行卡类型。取值如下：'."\n"
                                            .'- CC：贷记卡'."\n"
                                            .'- SCC：准贷记卡'."\n"
                                            .'- DCC：存贷合一卡'."\n"
                                            .'- DC：储蓄卡'."\n"
                                            .'- PC：预付卡',
                                        'type' => 'string',
                                        'example' => 'CC',
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
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D9C7521-0367-42EE-9646-FD066CCADB26\\",\\n  \\"Data\\": {\\n    \\"CardNumber\\": \\"6212262315007683105\\",\\n    \\"ValidDate\\": \\"07/26\\",\\n    \\"BankName\\": \\"中国工商银行\\",\\n    \\"CardType\\": \\"CC\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeBankCardResponse>\\n    <RequestId>D9C7521-0367-42EE-9646-FD066CCADB26</RequestId>\\n    <Data>\\n        <CardNumber>6212262315007683105</CardNumber>\\n        <ValidDate>07/26</ValidDate>\\n        <BankName>中国工商银行</BankName>\\n        <CardType>CC</CardType>\\n    </Data>\\n</RecognizeBankCardResponse>","errorExample":""}]',
            'title' => '银行卡识别',
            'summary' => '本文介绍银行卡识别RecognizeBankCard的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'银行卡识别能力可以检测输入的主流银行卡图像，输出3个信息，包括：发卡行、银行卡号、有效日期。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeBankCard)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeBankCard?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeBankCard%2Fyhk1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP、GIF。'."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                .'- 图像分辨率：不限制图片分辨率，但图片分辨率太高可能会导致API识别超时，超时时间为5秒。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于银行卡识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeBankCard)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的银行卡识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于银行卡识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeBusinessLicense' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ImageURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeBusinessLicense/RecognizeBusinessLicense1.jpg',
                        'isFileTransferUrl' => true,
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
                                'example' => 'F34D031B-02BD-4A59-BA35-EE068DD6F6E6',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'description' => '公司类型。识别失败时返回`FailInRecognition`。',
                                        'type' => 'string',
                                        'example' => '有限责任公司',
                                    ],
                                    'Stamp' => [
                                        'description' => '印章位置。识别失败时返回`FailInDetection`。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Top' => [
                                                'description' => '区域左上角y坐标。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1030',
                                            ],
                                            'Width' => [
                                                'description' => '区域宽度。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '154',
                                            ],
                                            'Height' => [
                                                'description' => '区域高度。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '154',
                                            ],
                                            'Left' => [
                                                'description' => '区域左上角x坐标。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '650',
                                            ],
                                        ],
                                    ],
                                    'EstablishDate' => [
                                        'description' => '公司注册日期。例如证件上为“2014年04月16日”，则接口返回“20140416”。',
                                        'type' => 'string',
                                        'example' => '20150504',
                                    ],
                                    'ValidPeriod' => [
                                        'description' => '公司营业期限终止日期。例如证件上为“2014年04月16日至2034年04月15日”，则接口返回“20340415”。'."\n"
                                            ."\n"
                                            .'> 当前算法将日期格式统一输出为“年月日”（例如“20391130”），并用“29991231”表示“长期”，若证件上没有营业期限，则默认其为“长期”返回“29991231”。',
                                        'type' => 'string',
                                        'example' => '29991231',
                                    ],
                                    'Business' => [
                                        'description' => '经营范围。识别失败时返回`FailInRecognition`。',
                                        'type' => 'string',
                                        'example' => '网络技术服务；网站建设；销售：I类医疗器械、保健用品（不含保健食品）等',
                                    ],
                                    'Angle' => [
                                        'description' => '输入图片的角度（顺时针旋转）。枚举值包括：0、90、180、270。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '0',
                                    ],
                                    'RegisterNumber' => [
                                        'description' => '统一社会信用代码。识别失败时返回`FailInRecognition`。',
                                        'type' => 'string',
                                        'example' => '91500108320423****',
                                    ],
                                    'Address' => [
                                        'description' => '公司地址。识别失败时返回`FailInRecognition`。',
                                        'type' => 'string',
                                        'example' => '浙江省杭州市西湖区转塘科技经济区块888号888幢',
                                    ],
                                    'Capital' => [
                                        'description' => '注册资本。识别失败时返回`FailInRecognition`。',
                                        'type' => 'string',
                                        'example' => '壹百万元整',
                                    ],
                                    'Title' => [
                                        'description' => '标题位置。识别失败时返回`FailInDetection`。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Top' => [
                                                'description' => '区域左上角y坐标。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'Width' => [
                                                'description' => '区域宽度。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'Height' => [
                                                'description' => '区域高度。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'Left' => [
                                                'description' => '区域左上角x坐标。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                        ],
                                    ],
                                    'Emblem' => [
                                        'description' => '国徽位置。识别失败时返回`FailInDetection`。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Top' => [
                                                'description' => '区域左上角y坐标。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '8',
                                            ],
                                            'Width' => [
                                                'description' => '区域宽度。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '162',
                                            ],
                                            'Height' => [
                                                'description' => '区域高度。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '163',
                                            ],
                                            'Left' => [
                                                'description' => '区域左上角x坐标。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '366',
                                            ],
                                        ],
                                    ],
                                    'Name' => [
                                        'description' => '公司名称。识别失败时返回`FailInRecognition`。',
                                        'type' => 'string',
                                        'example' => '某某电子商务有限公司',
                                    ],
                                    'QRCode' => [
                                        'description' => '二维码位置。识别失败时返回`FailInDetection`。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Top' => [
                                                'description' => '区域左上角y坐标。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '914',
                                            ],
                                            'Width' => [
                                                'description' => '区域宽度。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '126',
                                            ],
                                            'Height' => [
                                                'description' => '区域高度。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '132',
                                            ],
                                            'Left' => [
                                                'description' => '区域左上角x坐标。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '156',
                                            ],
                                        ],
                                    ],
                                    'LegalPerson' => [
                                        'description' => '公司法人。识别失败时返回`FailInRecognition`。',
                                        'type' => 'string',
                                        'example' => '李四',
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
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F34D031B-02BD-4A59-BA35-EE068DD6F6E6\\",\\n  \\"Data\\": {\\n    \\"Type\\": \\"有限责任公司\\",\\n    \\"Stamp\\": {\\n      \\"Top\\": 1030,\\n      \\"Width\\": 154,\\n      \\"Height\\": 154,\\n      \\"Left\\": 650\\n    },\\n    \\"EstablishDate\\": \\"20150504\\",\\n    \\"ValidPeriod\\": \\"29991231\\",\\n    \\"Business\\": \\"网络技术服务；网站建设；销售：I类医疗器械、保健用品（不含保健食品）等\\",\\n    \\"Angle\\": 0,\\n    \\"RegisterNumber\\": \\"91500108320423****\\",\\n    \\"Address\\": \\"浙江省杭州市西湖区转塘科技经济区块888号888幢\\",\\n    \\"Capital\\": \\"壹百万元整\\",\\n    \\"Title\\": {\\n      \\"Top\\": 10,\\n      \\"Width\\": 10,\\n      \\"Height\\": 10,\\n      \\"Left\\": 10\\n    },\\n    \\"Emblem\\": {\\n      \\"Top\\": 8,\\n      \\"Width\\": 162,\\n      \\"Height\\": 163,\\n      \\"Left\\": 366\\n    },\\n    \\"Name\\": \\"某某电子商务有限公司\\",\\n    \\"QRCode\\": {\\n      \\"Top\\": 914,\\n      \\"Width\\": 126,\\n      \\"Height\\": 132,\\n      \\"Left\\": 156\\n    },\\n    \\"LegalPerson\\": \\"李四\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F34D031B-02BD-4A59-BA35-EE068DD6F6E6</RequestId>\\n<Data>\\n    <ValidPeriod>29991231</ValidPeriod>\\n    <Address>浙江省杭州市西湖区转塘科技经济区块888号888幢</Address>\\n    <Stamp>\\n        <Left>971</Left>\\n        <Top>572</Top>\\n        <Height>197</Height>\\n        <Width>191</Width>\\n    </Stamp>\\n    <Title>\\n        <Left>447</Left>\\n        <Top>177</Top>\\n        <Height>80</Height>\\n        <Width>354</Width>\\n    </Title>\\n    <Capital>叁佰万元整</Capital>\\n    <LegalPerson>李四</LegalPerson>\\n    <EstablishDate>20150504</EstablishDate>\\n    <Name>某某电子商务有限公司</Name>\\n    <RegisterNumber>91500108320423****</RegisterNumber>\\n    <Type>有限责任公司</Type>\\n    <QRCode>\\n        <Left>848</Left>\\n        <Top>199</Top>\\n        <Height>88</Height>\\n        <Width>91</Width>\\n    </QRCode>\\n    <Angle>0</Angle>\\n    <Emblem>\\n        <Left>550</Left>\\n        <Top>6</Top>\\n        <Height>150</Height>\\n        <Width>137</Width>\\n    </Emblem>\\n    <Business>网络技术服务;网站建设;销售:I类医疗器械、保健用品(不含保健食品);医药技术咨询(不含诊疗活动及药品销售)、健康知识及其信息咨询(不含诊疗活动)、健康管理咨询(不含诊疗活动)、医院管理咨询(不含诊疗活动及药品销售):健康保健项目策划、设计;化妆品、饰、工艺礼品(不含象牙及其制品)、家具护理用品、劳防用品的批发;货物进出口(法律、法规禁止的项目除外;法律、法规限制的项目取得许可后方可经营);品牌推广;旅游信息咨询;翻译服务;票务代理;设计、制作、代理、发布广告;会议及展览展示服务。(依法须经批准的项目,经相关部门批准后方可开展经营活动)</Business>\\n</Data>","errorExample":""}]',
            'title' => '营业执照识别',
            'summary' => '本文介绍营业执照识别RecognizeBusinessLicense的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'营业执照识别能力可以识别营业执照关键字段内容，包括：公司地址、营业范围、注册资本、注册日期、公司法人、公司名称、统一社会信用代码、公司类型、公司营业期限日期。同时可以输出营业执照上二维码、印章位置。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeBusinessLicense)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeBusinessLicense?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeBusinessLicense%2FRecognizeBusinessLicense1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[营业执照识别示例代码](~~600232~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP、GIF。'."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                .'- 图像分辨率：不限制图片分辨率，但图片分辨率太高可能会导致API识别超时，超时时间为5秒。'."\n"
                .'- 请求格式：JPEG、JPG、PNG、BMP、GIF。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于营业执照识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeBusinessLicense)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的营业执照识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[营业执照识别示例代码](~~600232~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于营业执照识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeCharacter' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ImageURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeCharacter/RecognizeCharacter5.jpg',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'MinHeight',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像中文字的最小高度，单位像素。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '5',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'OutputProbability',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否输出文字框的概率。取值：'."\n"
                            ."\n"
                            .'- true：输出文字框的概率。'."\n"
                            .'- false：不输出文字框的概率。',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '1',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7A9BC7FE-2D42-57AF-93BC-09A229DD2F1D',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Results' => [
                                        'description' => '返回识别信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '1',
                                            'type' => 'object',
                                            'properties' => [
                                                'TextRectangles' => [
                                                    'description' => '文字框区域位置。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Top' => [
                                                            'description' => '文字区域左上角y坐标。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '150',
                                                        ],
                                                        'Width' => [
                                                            'description' => '文字区域宽度。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '77',
                                                        ],
                                                        'Height' => [
                                                            'description' => '文字区域高度。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '409',
                                                        ],
                                                        'Angle' => [
                                                            'description' => '文字区域角度，角度范围`[-180, 180]`。'."\n"
                                                                ."\n"
                                                                .'> 以文字区域中心点为旋转点，向右旋转角度为正，向左旋转角度为负。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '-65',
                                                        ],
                                                        'Left' => [
                                                            'description' => '文字区域左上角x坐标。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '511',
                                                        ],
                                                    ],
                                                ],
                                                'Text' => [
                                                    'description' => '文字内容。',
                                                    'type' => 'string',
                                                    'example' => '祝你生日快乐',
                                                ],
                                                'Probability' => [
                                                    'description' => '文字内容的概率，取值范围为0~1。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.99',
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
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7A9BC7FE-2D42-57AF-93BC-09A229DD2F1D\\",\\n  \\"Data\\": {\\n    \\"Results\\": [\\n      {\\n        \\"TextRectangles\\": {\\n          \\"Top\\": 150,\\n          \\"Width\\": 77,\\n          \\"Height\\": 409,\\n          \\"Angle\\": -65,\\n          \\"Left\\": 511\\n        },\\n        \\"Text\\": \\"祝你生日快乐\\",\\n        \\"Probability\\": 0.99\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeCharacterResponse>\\n    <RequestId>7A9BC7FE-2D42-57AF-93BC-09A229DD2F1D</RequestId>\\n    <Data>\\n        <Results>\\n            <TextRectangles>\\n                <Left>599</Left>\\n                <Top>160</Top>\\n                <Angle>-69</Angle>\\n                <Height>107</Height>\\n                <Width>26</Width>\\n            </TextRectangles>\\n            <Probability>0.99</Probability>\\n            <Text>HAPPY</Text>\\n        </Results>\\n        <Results>\\n            <TextRectangles>\\n                <Left>576</Left>\\n                <Top>150</Top>\\n                <Angle>-63</Angle>\\n                <Height>200</Height>\\n                <Width>37</Width>\\n            </TextRectangles>\\n            <Probability>0.99</Probability>\\n            <Text>birthday</Text>\\n        </Results>\\n        <Results>\\n            <TextRectangles>\\n                <Left>511</Left>\\n                <Top>150</Top>\\n                <Angle>-65</Angle>\\n                <Height>409</Height>\\n                <Width>77</Width>\\n            </TextRectangles>\\n            <Probability>0.99</Probability>\\n            <Text>祝你生日快乐</Text>\\n        </Results>\\n    </Data>\\n</RecognizeCharacterResponse>","errorExample":""}]',
            'title' => '通用识别',
            'summary' => '本文介绍通用文字识别RecognizeCharacter的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'通用文字识别能力可以识别图像中文字内容和文字区域坐标，适用于多场景图像文字识别。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeCharacter)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeCharacter?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeCharacter%2FRecognizeCharacter1.jpg%22%2C%22MinHeight%22%3A10%2C%22OutputProbability%22%3Atrue%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[通用文字识别示例代码](~~480535~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP、GIF。'."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                .'- 图像分辨率：大于15×15像素，小于4096×4096像素。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于通用文字识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeCharacter)。'."\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的通用文字识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[通用文字识别示例代码](~~480535~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于通用文字识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeDriverLicense' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ImageURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeDriverLicense/jsz2.jpg',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'Side',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '上传照片为驾驶证首页或者副页。'."\n"
                            ."\n"
                            .'- face：首页'."\n"
                            ."\n"
                            .'- back：副页',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'face',
                        'enum' => [
                            'face',
                            'back',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '1',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '374D8C7E-9ECC-4750-A87F-50571702F175',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'BackResult' => [
                                        'description' => '驾驶证副页结果。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ArchiveNumber' => [
                                                'description' => '档案编号。',
                                                'type' => 'string',
                                                'example' => '130601473955',
                                            ],
                                            'Name' => [
                                                'description' => '姓名。',
                                                'type' => 'string',
                                                'example' => '张三',
                                            ],
                                            'CardNumber' => [
                                                'description' => '证号。',
                                                'type' => 'string',
                                                'example' => '210288898898898888',
                                            ],
                                            'Record' => [
                                                'description' => '记录。',
                                                'type' => 'string',
                                                'example' => '实习期至2019年05月06日。',
                                            ],
                                        ],
                                    ],
                                    'FaceResult' => [
                                        'description' => '驾驶证首页结果。',
                                        'type' => 'object',
                                        'properties' => [
                                            'VehicleType' => [
                                                'description' => '驾驶证准驾车型。',
                                                'type' => 'string',
                                                'example' => 'C1',
                                            ],
                                            'IssueDate' => [
                                                'description' => '初次发证日期。格式：YYYYMMDD，例如19800101，即1980年01月01日。',
                                                'type' => 'string',
                                                'example' => '20130208',
                                            ],
                                            'EndDate' => [
                                                'description' => '驾驶证有效期时长或有效期截止日期。具体视驾驶证数据格式而定，格式：YYYYMMDD，例如19800101，即1980年01月01日。',
                                                'type' => 'string',
                                                'example' => '20190201',
                                            ],
                                            'Gender' => [
                                                'description' => '性别。',
                                                'type' => 'string',
                                                'example' => '男',
                                            ],
                                            'Address' => [
                                                'description' => '地址。',
                                                'type' => 'string',
                                                'example' => '江苏省徐州市铜山区棠张镇田河村1队129号',
                                            ],
                                            'StartDate' => [
                                                'description' => '驾驶证有效期开始时间，格式：YYYYMMDD，例如19800101，即1980年01月01日。',
                                                'type' => 'string',
                                                'example' => '20130208',
                                            ],
                                            'LicenseNumber' => [
                                                'description' => '证号。',
                                                'type' => 'string',
                                                'example' => '210288898898898888',
                                            ],
                                            'Name' => [
                                                'description' => '姓名。',
                                                'type' => 'string',
                                                'example' => '张三',
                                            ],
                                            'IssueUnit' => [
                                                'description' => '发证单位。',
                                                'type' => 'string',
                                                'example' => '江苏省徐州市公安局交通巡逻警察支队',
                                            ],
                                            'Nationality' => [
                                                'description' => '国籍。',
                                                'type' => 'string',
                                                'example' => '中国',
                                            ],
                                            'BirthDate' => [
                                                'description' => '出生日期。',
                                                'type' => 'string',
                                                'example' => '1992-05-20',
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
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"374D8C7E-9ECC-4750-A87F-50571702F175\\",\\n  \\"Data\\": {\\n    \\"BackResult\\": {\\n      \\"ArchiveNumber\\": \\"130601473955\\",\\n      \\"Name\\": \\"张三\\",\\n      \\"CardNumber\\": \\"210288898898898888\\",\\n      \\"Record\\": \\"实习期至2019年05月06日。\\"\\n    },\\n    \\"FaceResult\\": {\\n      \\"VehicleType\\": \\"C1\\",\\n      \\"IssueDate\\": \\"20130208\\",\\n      \\"EndDate\\": \\"20190201\\",\\n      \\"Gender\\": \\"男\\",\\n      \\"Address\\": \\"江苏省徐州市铜山区棠张镇田河村1队129号\\",\\n      \\"StartDate\\": \\"20130208\\",\\n      \\"LicenseNumber\\": \\"210288898898898888\\",\\n      \\"Name\\": \\"张三\\",\\n      \\"IssueUnit\\": \\"江苏省徐州市公安局交通巡逻警察支队\\",\\n      \\"Nationality\\": \\"中国\\",\\n      \\"BirthDate\\": \\"1992-05-20\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeDriverLicenseResponse>\\n    <RequestId>374D8C7E-9ECC-4750-A87F-50571702F175</RequestId>\\n    <Data>\\n        <BackResult>\\n            <ArchiveNumber>130601473955</ArchiveNumber>\\n            <Name>张三</Name>\\n            <CardNumber>210288898898898888</CardNumber>\\n            <Record>实习期至2019年05月06日。</Record>\\n        </BackResult>\\n        <FaceResult>\\n            <VehicleType>C1</VehicleType>\\n            <IssueDate>20130208</IssueDate>\\n            <EndDate>20190201</EndDate>\\n            <Gender>男</Gender>\\n            <Address>江苏省徐州市铜山区棠张镇田河村1队129号</Address>\\n            <StartDate>20130208</StartDate>\\n            <LicenseNumber>210288898898898888</LicenseNumber>\\n            <Name>张三</Name>\\n            <IssueUnit>江苏省徐州市公安局交通巡逻警察支队</IssueUnit>\\n            <Nationality>中国</Nationality>\\n            <BirthDate>1992-05-20</BirthDate>\\n        </FaceResult>\\n    </Data>\\n</RecognizeDriverLicenseResponse>","errorExample":""}]',
            'title' => '驾驶证识别',
            'summary' => '本文介绍驾驶证识别RecognizeDriverLicense的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'驾驶证识别能力可以识别驾驶证首页和副页关键字段内容，包括：档案编号、姓名、有效期时长、性别、发证日期、驾驶证号、驾驶证准驾车型、有效期开始时间、地址，共9个关键字段信息。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeDriverLicense)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeDriverLicense?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeDriverLicense%2Fjsz1.jpg%22%2C%22Side%22%3A%22face%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[驾驶证识别示例代码](~~480750~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP、GIF。'."\n"
                .'- 图像大小：不超过4 MB。'."\n"
                .'- 图像分辨率：大于15×15像素，小于4096×4096像素。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于驾驶证识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeDriverLicense)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的驾驶证识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[驾驶证识别示例代码](~~480750~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于驾驶证识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeDrivingLicense' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ImageURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeDrivingLicense/xsz2.jpg',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'Side',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '上传照片为行驶证首页或副页。'."\n"
                            ."\n"
                            .'- face：首页'."\n"
                            ."\n"
                            .'- back：副页',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'face',
                        'enum' => [
                            'face',
                            'back',
                        ],
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
                                'example' => '1DD989C1-4E08-4E04-9D5D-314901E91226',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'BackResult' => [
                                        'description' => '行驶证副页结果。',
                                        'type' => 'object',
                                        'properties' => [
                                            'OverallDimension' => [
                                                'description' => '外廓尺寸。',
                                                'type' => 'string',
                                                'example' => '4945x1845x1480',
                                            ],
                                            'InspectionRecord' => [
                                                'description' => '检验记录。',
                                                'type' => 'string',
                                                'example' => '检验有效期至2014年09月云A(01)',
                                            ],
                                            'UnladenMass' => [
                                                'description' => '整备质量。',
                                                'type' => 'string',
                                                'example' => '2000',
                                            ],
                                            'FileNumber' => [
                                                'description' => '档案编号。',
                                                'type' => 'string',
                                                'example' => '苏F123E9',
                                            ],
                                            'TractionMass' => [
                                                'description' => '准牵引总质量。',
                                                'type' => 'string',
                                                'example' => '100',
                                            ],
                                            'GrossMass' => [
                                                'description' => '总质量。',
                                                'type' => 'string',
                                                'example' => '2205',
                                            ],
                                            'PlateNumber' => [
                                                'description' => '号牌号码。',
                                                'type' => 'string',
                                                'example' => '苏F123E9',
                                            ],
                                            'ApprovedPassengerCapacity' => [
                                                'description' => '核定载人数。',
                                                'type' => 'string',
                                                'example' => '5',
                                            ],
                                            'EnergyType' => [
                                                'description' => '能源标志。',
                                                'type' => 'string',
                                                'example' => '-',
                                            ],
                                            'ApprovedLoad' => [
                                                'description' => '核定载质量。',
                                                'type' => 'string',
                                                'example' => '300',
                                            ],
                                        ],
                                    ],
                                    'FaceResult' => [
                                        'description' => '行驶证首页结果。',
                                        'type' => 'object',
                                        'properties' => [
                                            'IssueDate' => [
                                                'description' => '发证日期，格式：YYYYMMDD，例如19800101，即1980年01月01日。',
                                                'type' => 'string',
                                                'example' => '20180313',
                                            ],
                                            'Model' => [
                                                'description' => '品牌型号。',
                                                'type' => 'string',
                                                'example' => '大众汽车牌SVW6666DFD',
                                            ],
                                            'VehicleType' => [
                                                'description' => '车辆类型。',
                                                'type' => 'string',
                                                'example' => '小型普通客车',
                                            ],
                                            'Owner' => [
                                                'description' => '所有人名称。',
                                                'type' => 'string',
                                                'example' => '张三',
                                            ],
                                            'EngineNumber' => [
                                                'description' => '发动机号码。',
                                                'type' => 'string',
                                                'example' => '111111',
                                            ],
                                            'PlateNumber' => [
                                                'description' => '车牌号码。',
                                                'type' => 'string',
                                                'example' => '苏F123E9',
                                            ],
                                            'Address' => [
                                                'description' => '地址。',
                                                'type' => 'string',
                                                'example' => '中牟县三刘寨村',
                                            ],
                                            'UseCharacter' => [
                                                'description' => '使用性质。',
                                                'type' => 'string',
                                                'example' => '非营运',
                                            ],
                                            'Vin' => [
                                                'description' => '车辆识别代号。',
                                                'type' => 'string',
                                                'example' => 'SSVUDDTT2J2022555',
                                            ],
                                            'RegisterDate' => [
                                                'description' => '注册日期，格式：YYYYMMDD，例如19800101，即1980年01月01日。',
                                                'type' => 'string',
                                                'example' => '20180312',
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
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1DD989C1-4E08-4E04-9D5D-314901E91226\\",\\n  \\"Data\\": {\\n    \\"BackResult\\": {\\n      \\"OverallDimension\\": \\"4945x1845x1480\\",\\n      \\"InspectionRecord\\": \\"检验有效期至2014年09月云A(01)\\",\\n      \\"UnladenMass\\": \\"2000\\",\\n      \\"FileNumber\\": \\"苏F123E9\\",\\n      \\"TractionMass\\": \\"100\\",\\n      \\"GrossMass\\": \\"2205\\",\\n      \\"PlateNumber\\": \\"苏F123E9\\",\\n      \\"ApprovedPassengerCapacity\\": \\"5\\",\\n      \\"EnergyType\\": \\"-\\",\\n      \\"ApprovedLoad\\": \\"300\\"\\n    },\\n    \\"FaceResult\\": {\\n      \\"IssueDate\\": \\"20180313\\",\\n      \\"Model\\": \\"大众汽车牌SVW6666DFD\\",\\n      \\"VehicleType\\": \\"小型普通客车\\",\\n      \\"Owner\\": \\"张三\\",\\n      \\"EngineNumber\\": \\"111111\\",\\n      \\"PlateNumber\\": \\"苏F123E9\\",\\n      \\"Address\\": \\"中牟县三刘寨村\\",\\n      \\"UseCharacter\\": \\"非营运\\",\\n      \\"Vin\\": \\"SSVUDDTT2J2022555\\",\\n      \\"RegisterDate\\": \\"20180312\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeDrivingLicenseResponse>\\n    <RequestId>1DD989C1-4E08-4E04-9D5D-314901E91226</RequestId>\\n    <Data>\\n        <BackResult>\\n            <OverallDimension>4945x1845x1480</OverallDimension>\\n            <InspectionRecord>检验有效期至2014年09月云A(01)</InspectionRecord>\\n            <UnladenMass>2000</UnladenMass>\\n            <FileNumber>苏F123E9</FileNumber>\\n            <TractionMass>100</TractionMass>\\n            <GrossMass>2205</GrossMass>\\n            <PlateNumber>苏F123E9</PlateNumber>\\n            <ApprovedPassengerCapacity>5</ApprovedPassengerCapacity>\\n            <EnergyType>-</EnergyType>\\n            <ApprovedLoad>300</ApprovedLoad>\\n        </BackResult>\\n        <FaceResult>\\n            <IssueDate>20180313</IssueDate>\\n            <Model>大众汽车牌SVW6666DFD</Model>\\n            <VehicleType>小型普通客车</VehicleType>\\n            <Owner>张三</Owner>\\n            <EngineNumber>111111</EngineNumber>\\n            <PlateNumber>苏F123E9</PlateNumber>\\n            <Address>中牟县三刘寨村</Address>\\n            <UseCharacter>非营运</UseCharacter>\\n            <Vin>SSVUDDTT2J2022555</Vin>\\n            <RegisterDate>20180312</RegisterDate>\\n        </FaceResult>\\n    </Data>\\n</RecognizeDrivingLicenseResponse>","errorExample":""}]',
            'title' => '行驶证识别',
            'summary' => '本文介绍行驶证识别RecognizeDrivingLicense的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'行驶证识别能力可以识别行驶证首页和副页关键字段内容，输出品牌型号、车辆类型、车牌号码、检验记录、核定载质量、核定载人数等21个关键字段信息。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeDrivingLicense)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeDrivingLicense?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeDrivingLicense%2Fxsz1.jpg%22%2C%22Side%22%3A%22face%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[行驶证识别示例代码](~~480762~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP、GIF。'."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                .'- 图像分辨率：不限制图片分辨率，但图片分辨率太高可能会导致API识别超时，超时时间为5秒。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于行驶证识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeDrivingLicense)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的行驶证识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[行驶证识别示例代码](~~480762~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于行驶证识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeIdentityCard' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ImageURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeIdentityCard/sfz1.jpg',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'Side',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '身份证正反面类型。'."\n"
                            ."\n"
                            .'- face：人像面。'."\n"
                            ."\n"
                            .'- back：国徽面。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'face',
                        'enum' => [
                            'face',
                            'back',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '1',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A6175A03-624C-1976-908D-C8BE4C547C45',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'BackResult' => [
                                        'description' => '国徽面结果。',
                                        'type' => 'object',
                                        'properties' => [
                                            'EndDate' => [
                                                'description' => '有效期结束时间，格式：YYYYMMDD，例如19800101，即1980年01月01日。',
                                                'type' => 'string',
                                                'example' => '19800101',
                                            ],
                                            'Issue' => [
                                                'description' => '签发机关。',
                                                'type' => 'string',
                                                'example' => '杭州市公安局',
                                            ],
                                            'StartDate' => [
                                                'description' => '有效期起始时间，格式：YYYYMMDD，例如19800101，即1980年01月01日。',
                                                'type' => 'string',
                                                'example' => '19970101',
                                            ],
                                        ],
                                    ],
                                    'FrontResult' => [
                                        'description' => '人像面结果。',
                                        'type' => 'object',
                                        'properties' => [
                                            'FaceRectangle' => [
                                                'description' => '人脸位置。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Size' => [
                                                        'description' => '人脸矩形尺寸。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Width' => [
                                                                'description' => '宽度。',
                                                                'type' => 'number',
                                                                'format' => 'float',
                                                                'example' => '196',
                                                            ],
                                                            'Height' => [
                                                                'description' => '高度。',
                                                                'type' => 'number',
                                                                'format' => 'float',
                                                                'example' => '243',
                                                            ],
                                                        ],
                                                    ],
                                                    'Angle' => [
                                                        'description' => '表示矩形顺时针旋转的度数，范围-180~180。',
                                                        'type' => 'number',
                                                        'format' => 'float',
                                                        'example' => '0',
                                                    ],
                                                    'Center' => [
                                                        'description' => '人脸矩形中心坐标。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Y' => [
                                                                'description' => '人脸矩形中心纵坐标。',
                                                                'type' => 'number',
                                                                'format' => 'float',
                                                                'example' => '225',
                                                            ],
                                                            'X' => [
                                                                'description' => '人脸矩形中心横坐标。',
                                                                'type' => 'number',
                                                                'format' => 'float',
                                                                'example' => '667',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'BirthDate' => [
                                                'description' => '出生日期，格式：YYYYMMDD，例如19800101，即1980年01月01日。',
                                                'type' => 'string',
                                                'example' => '19880722',
                                            ],
                                            'Gender' => [
                                                'description' => '性别。',
                                                'type' => 'string',
                                                'example' => '男',
                                            ],
                                            'Address' => [
                                                'description' => '地址信息。',
                                                'type' => 'string',
                                                'example' => '江苏省南京市浦口区天天小区1栋11号',
                                            ],
                                            'FaceRectVertices' => [
                                                'description' => '人脸位置。通过四个顶点表示，顺序是逆时针，依次为：左下，右下，右上，左上。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '1',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Y' => [
                                                            'description' => '人脸位置纵坐标。',
                                                            'type' => 'number',
                                                            'format' => 'float',
                                                            'example' => '105',
                                                        ],
                                                        'X' => [
                                                            'description' => '人脸位置横坐标。',
                                                            'type' => 'number',
                                                            'format' => 'float',
                                                            'example' => '569',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'CardAreas' => [
                                                'description' => '身份证区域位置。通过四个顶点表示，顺序是逆时针，依次为：左上、左下、右下、右上。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '1',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Y' => [
                                                            'description' => '身份证区域纵坐标。',
                                                            'type' => 'number',
                                                            'format' => 'float',
                                                            'example' => '485',
                                                        ],
                                                        'X' => [
                                                            'description' => '身份证区域横坐标。',
                                                            'type' => 'number',
                                                            'format' => 'float',
                                                            'example' => '132',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Nationality' => [
                                                'description' => '民族。',
                                                'type' => 'string',
                                                'example' => '汉',
                                            ],
                                            'Name' => [
                                                'description' => '姓名。',
                                                'type' => 'string',
                                                'example' => '小明',
                                            ],
                                            'IDNumber' => [
                                                'description' => '身份证号。',
                                                'type' => 'string',
                                                'example' => '320001198807220000',
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
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A6175A03-624C-1976-908D-C8BE4C547C45\\",\\n  \\"Data\\": {\\n    \\"BackResult\\": {\\n      \\"EndDate\\": \\"19800101\\",\\n      \\"Issue\\": \\"杭州市公安局\\",\\n      \\"StartDate\\": \\"19970101\\"\\n    },\\n    \\"FrontResult\\": {\\n      \\"FaceRectangle\\": {\\n        \\"Size\\": {\\n          \\"Width\\": 196,\\n          \\"Height\\": 243\\n        },\\n        \\"Angle\\": 0,\\n        \\"Center\\": {\\n          \\"Y\\": 225,\\n          \\"X\\": 667\\n        }\\n      },\\n      \\"BirthDate\\": \\"19880722\\",\\n      \\"Gender\\": \\"男\\",\\n      \\"Address\\": \\"江苏省南京市浦口区天天小区1栋11号\\",\\n      \\"FaceRectVertices\\": [\\n        {\\n          \\"Y\\": 105,\\n          \\"X\\": 569\\n        }\\n      ],\\n      \\"CardAreas\\": [\\n        {\\n          \\"Y\\": 485,\\n          \\"X\\": 132\\n        }\\n      ],\\n      \\"Nationality\\": \\"汉\\",\\n      \\"Name\\": \\"小明\\",\\n      \\"IDNumber\\": \\"320001198807220000\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeIdentityCardResponse>\\n    <RequestId>A6175A03-624C-1976-908D-C8BE4C547C45</RequestId>\\n    <Data>\\n        <FrontResult>\\n            <Address>江苏省南京市浦口区天天小区1栋11号</Address>\\n            <FaceRectVertices>\\n                <X>569</X>\\n                <Y>105</Y>\\n            </FaceRectVertices>\\n            <FaceRectVertices>\\n                <X>766</X>\\n                <Y>104</Y>\\n            </FaceRectVertices>\\n            <FaceRectVertices>\\n                <X>766</X>\\n                <Y>348</Y>\\n            </FaceRectVertices>\\n            <FaceRectVertices>\\n                <X>569</X>\\n                <Y>348</Y>\\n            </FaceRectVertices>\\n            <FaceRectangle>\\n                <Center>\\n                    <X>667</X>\\n                    <Y>225</Y>\\n                </Center>\\n                <Angle>0</Angle>\\n                <Size>\\n                    <Height>243</Height>\\n                    <Width>196</Width>\\n                </Size>\\n            </FaceRectangle>\\n            <CardAreas>\\n                <X>132</X>\\n                <Y>485</Y>\\n            </CardAreas>\\n            <CardAreas>\\n                <X>132</X>\\n                <Y>47</Y>\\n            </CardAreas>\\n            <CardAreas>\\n                <X>817</X>\\n                <Y>47</Y>\\n            </CardAreas>\\n            <CardAreas>\\n                <X>818</X>\\n                <Y>482</Y>\\n            </CardAreas>\\n            <Gender>男</Gender>\\n            <Nationality>汉</Nationality>\\n            <BirthDate>19880722</BirthDate>\\n            <Name>小明</Name>\\n            <IDNumber>320001198807220000</IDNumber>\\n        </FrontResult>\\n    </Data>\\n</RecognizeIdentityCardResponse>","errorExample":""}]',
            'title' => '身份证识别',
            'summary' => '本文介绍身份证识别RecognizeIdentityCard的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'身份证识别可以识别二代身份证关键字段内容，关键字段包括：姓名、性别、民族、身份证号、出生日期、地址信息、有效起始时间、签发机关，同时可输出身份证区域位置和人脸位置信息。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeIdentityCard)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                .'- 目前只支持识别国内居民身份证，不支持中国香港、中国澳门、中国台湾身份证识别。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                .'远程注册：识别用户提交的身份证内容，自动完成用户身份信息填充。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                .'识别完整：支持识别身份证内各项内容。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeIdentityCard?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeIdentityCard%2Fsfzbm1.jpg%22%2C%22Side%22%3A%22back%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[身份证识别示例代码](~~600208~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP、GIF。'."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                .'- 图像分辨率：大于15×15像素，小于4096×4096像素。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于身份证识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeIdentityCard)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的身份证识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[身份证识别示例代码](~~600208~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于身份证识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeLicensePlate' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ImageURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '车牌识别能力目前支持的地域（Region）有上海和深圳，当您开通服务时选择的是上海地域，推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。当您开通服务时选择的是深圳地域时，仅支持深圳地域OSS链接进行调用。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeLicensePlate/cpsb1.jpg',
                        'isFileTransferUrl' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '1',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '3F10DAC3-CF4A-487C-BF33-3B8EB9AA12F2',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Plates' => [
                                        'description' => '车牌面板详细信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '1',
                                            'type' => 'object',
                                            'properties' => [
                                                'PlateTypeConfidence' => [
                                                    'description' => '车牌类型的置信度，取值范围0~1。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1',
                                                ],
                                                'PlateType' => [
                                                    'description' => '车牌类型。包括：小型汽车、新能源车、大型汽车、挂车、教练车、警车、军车、使领馆车、港澳车。',
                                                    'type' => 'string',
                                                    'example' => '小型汽车',
                                                ],
                                                'Confidence' => [
                                                    'description' => '车牌号码的置信度，取值范围0~1。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.99745339155197144',
                                                ],
                                                'PlateNumber' => [
                                                    'description' => '车牌号码。',
                                                    'type' => 'string',
                                                    'example' => '粤BP57E7',
                                                ],
                                                'Roi' => [
                                                    'description' => '车牌位置。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'W' => [
                                                            'description' => '车牌号宽度。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '141',
                                                        ],
                                                        'H' => [
                                                            'description' => '车牌号高度。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '53',
                                                        ],
                                                        'Y' => [
                                                            'description' => '车牌号左上角y坐标。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '256',
                                                        ],
                                                        'X' => [
                                                            'description' => '车牌号左上角x坐标。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '294',
                                                        ],
                                                    ],
                                                ],
                                                'Positions' => [
                                                    'description' => '车牌识别框位置信息。识别矩形框四个角的坐标顺时针排列，分别为左上XY坐标、右上XY坐标、右下XY坐标、左下XY坐标。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'X' => [
                                                                'description' => '矩形框X坐标。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '466',
                                                            ],
                                                            'Y' => [
                                                                'description' => '矩形框Y坐标。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '293',
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
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3F10DAC3-CF4A-487C-BF33-3B8EB9AA12F2\\",\\n  \\"Data\\": {\\n    \\"Plates\\": [\\n      {\\n        \\"PlateTypeConfidence\\": 1,\\n        \\"PlateType\\": \\"小型汽车\\",\\n        \\"Confidence\\": 0.9974533915519714,\\n        \\"PlateNumber\\": \\"粤BP57E7\\",\\n        \\"Roi\\": {\\n          \\"W\\": 141,\\n          \\"H\\": 53,\\n          \\"Y\\": 256,\\n          \\"X\\": 294\\n        },\\n        \\"Positions\\": [\\n          {\\n            \\"X\\": 466,\\n            \\"Y\\": 293\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeLicensePlateResponse>\\n    <RequestId>3F10DAC3-CF4A-487C-BF33-3B8EB9AA12F2</RequestId>\\n    <Data>\\n        <Plates>\\n            <PlateTypeConfidence>1</PlateTypeConfidence>\\n            <PlateType>小型汽车</PlateType>\\n            <Confidence>0.9974534</Confidence>\\n            <PlateNumber>粤BP57E7</PlateNumber>\\n            <Roi>\\n                <W>141</W>\\n                <H>53</H>\\n                <Y>256</Y>\\n                <X>294</X>\\n            </Roi>\\n            <Positions>\\n                <X>466</X>\\n                <Y>293</Y>\\n            </Positions>\\n            <Positions>\\n                <X>667</X>\\n                <Y>283</Y>\\n            </Positions>\\n            <Positions>\\n                <X>669</X>\\n                <Y>330</Y>\\n            </Positions>\\n            <Positions>\\n                <X>469</X>\\n                <Y>341</Y>\\n            </Positions>\\n        </Plates>\\n    </Data>\\n</RecognizeLicensePlateResponse>","errorExample":""}]',
            'title' => '车牌识别',
            'summary' => '本文介绍车牌识别RecognizeLicensePlate的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'车牌识别能力可以准确识别出图像中车牌位置，输出车牌位置坐标、车牌类型、车牌号码、车牌号码置信度、车牌置信度，共5个关键字段信息。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeLicensePlate)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeLicensePlate?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeLicensePlate%2Fcpsb1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[车牌识别示例代码](~~600145~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP、GIF。'."\n"
                .'- 图像大小：不超过4 MB。'."\n"
                .'- 图像分辨率：大于15×15像素，小于4096×4096像素。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于车牌识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeLicensePlate)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的车牌识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[车牌识别示例代码](~~600145~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于车牌识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeQrCode' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Tasks',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '1',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ImageURL' => [
                                    'description' => '待检测图像的URL地址。JSON数组中的每个元素是一个图片检测任务结构体（image表）。最多支持10个元素，即最多同时对10张图片进行检测。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeQrCode/RecognizeQrCode6.jpg',
                                    'isFileTransferUrl' => true,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 10,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '1',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A53DC437-F883-4968-86D5-EB21FB044692',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Elements' => [
                                        'description' => '识别返回的元素信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ImageURL' => [
                                                    'description' => '对应请求中的图像URL地址。',
                                                    'type' => 'string',
                                                    'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeQrCode/RecognizeQrCode6.jpg',
                                                ],
                                                'TaskId' => [
                                                    'description' => '该检测任务的ID。',
                                                    'type' => 'string',
                                                    'example' => 'img5iGtwVIxQzc4Nqy$L84yHd-1v****',
                                                ],
                                                'Results' => [
                                                    'description' => '返回结果。调用成功时返回结果中包含一个或多个元素。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Suggestion' => [
                                                                'description' => '建议您执行的操作，取值包括：'."\n"
                                                                    ."\n"
                                                                    .'- pass：图片正常，无需进行其余操作。'."\n"
                                                                    ."\n"
                                                                    .'- review：检测结果不确定，需要进行人工审核。'."\n"
                                                                    ."\n"
                                                                    .'- block：图片违规，建议执行进一步操作（如直接删除或做限制处理）。',
                                                                'type' => 'string',
                                                                'example' => 'review',
                                                            ],
                                                            'QrCodesData' => [
                                                                'description' => '1',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '图片中含有二维码时，返回图片中二维码包含的文本信息（每个二维码对应的URL或者文本）。'."\n"
                                                                        ."\n"
                                                                        .'> 不是所有的二维码图片都能识别返回出对应的URL或文本。'."\n"
                                                                        .'- 当**Suggestion**为`review`时说明识别到的二维码不含对应的URL或文本信息，**QrCodesData**不会透出对应信息。'."\n"
                                                                        .'- 当**Suggestion**为`block`时会携带识别到的对应二维码的URL或文本信息进行透出。',
                                                                    'type' => 'string',
                                                                    'example' => 'https://yqh.aliyun.com/live/detail/23798',
                                                                ],
                                                            ],
                                                            'Label' => [
                                                                'description' => '检测结果的分类，取值包括：'."\n"
                                                                    ."\n"
                                                                    .'- normal：正常图片。'."\n"
                                                                    ."\n"
                                                                    .'- qrcode：含二维码的图片。'."\n"
                                                                    ."\n"
                                                                    .'- programCode：含小程序码的图片。'."\n"
                                                                    ."\n"
                                                                    .'> 默认不识别小程序码。如果需要识别，请通过钉钉群（23109592）联系我们。',
                                                                'type' => 'string',
                                                                'example' => 'qrcode',
                                                            ],
                                                            'Rate' => [
                                                                'description' => '结果为该分类的概率，取值范围为`[0.00-100.00]`。值越高，表示属于该分类的概率越大。',
                                                                'type' => 'number',
                                                                'format' => 'float',
                                                                'example' => '99.91',
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
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A53DC437-F883-4968-86D5-EB21FB044692\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"ImageURL\\": \\"http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeQrCode/RecognizeQrCode6.jpg\\",\\n        \\"TaskId\\": \\"img5iGtwVIxQzc4Nqy$L84yHd-1v****\\",\\n        \\"Results\\": [\\n          {\\n            \\"Suggestion\\": \\"review\\",\\n            \\"QrCodesData\\": [\\n              \\"https://yqh.aliyun.com/live/detail/23798\\"\\n            ],\\n            \\"Label\\": \\"qrcode\\",\\n            \\"Rate\\": 99.91\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeQrCodeResponse>\\n    <RequestId>A53DC437-F883-4968-86D5-EB21FB044692</RequestId>\\n    <Data>\\n        <Elements>\\n            <ImageURL>http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeQrCode/RecognizeQrCode6.jpg</ImageURL>\\n            <TaskId>img5iGtwVIxQzc4Nqy$L84yHd-1v****</TaskId>\\n            <Results>\\n                <Suggestion>review</Suggestion>\\n                <QrCodesData>https://yqh.aliyun.com/live/detail/23798</QrCodesData>\\n                <Label>qrcode</Label>\\n                <Rate>99.91</Rate>\\n            </Results>\\n        </Elements>\\n    </Data>\\n</RecognizeQrCodeResponse>","errorExample":""}]',
            'title' => '二维码识别',
            'summary' => '本文介绍二维码识别RecognizeQrCode的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'二维码识别能力可以识别图像中是否含有二维码信息，输出图像中二维码包含的文本信息（每个二维码对应的URL或文本），可支持图像中含有多个二维码识别。'."\n"
                ."\n"
                .'> - 在同时检测多个Task的情况下，将按照Task的个数进行累计计费。'."\n"
                .'- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeQrCode)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeQrCode?lang=JAVA&sdkStyle=dara&params=%7B%22Tasks%22%3A%5B%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeQrCode%2FRecognizeQrCode1.jpg%22%7D%5D%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[二维码识别示例代码](~~478589~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：PNG、JPG、JPEG、BMP、GIF、WEBP。'."\n"
                .'- 图像大小：不超过10 MB。如您有大图需求，请通过钉钉群（23109592）联系我们。'."\n"
                .'- 图像分辨率：建议不低于256×256像素，分辨率过低可能会影响识别效果。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                .'- 仅支持二维码图片识别，其他类型的码不支持。'."\n"
                ."\n"
                .'## 检测说明'."\n"
                ."\n"
                .'- 最长检测时间为6秒，如果在该时间限制内没有完成检测，系统会返回超时错误码。'."\n"
                ."\n"
                .'- 图片下载时间限制为3秒，如果下载时间超过3秒，则返回下载超时。'."\n"
                ."\n"
                .'- 图片检测接口响应时间依赖图片的下载时间。请保证被检测图片所在的存储服务稳定可靠，建议您使用阿里云OSS存储或者CDN缓存等。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于二维码识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeQrCode)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的二维码识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[二维码识别示例代码](~~478589~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于二维码识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeTable' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ImageURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeTable/RecognizeTable4.jpg',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'OutputFormat',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出格式为`json`。（`html`、`xlsx`已废弃，当选择`html`、`xlsx`入参，最终输出也为JSON格式。）',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'json',
                        'enum' => [
                            'html',
                            'json',
                            'xlsx',
                        ],
                    ],
                ],
                [
                    'name' => 'UseFinanceModel',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否使用财务报表模型。'."\n"
                            .'- true：财务报表模型'."\n"
                            ."\n"
                            .'- false：非财务报表模型',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'AssureDirection',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像方向是否确定为正向。'."\n"
                            ."\n"
                            .'- true：正向'."\n"
                            ."\n"
                            .'- false：反向',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'HasLine',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否无线条。'."\n"
                            ."\n"
                            .'- true：无线条或者只有横线没有竖线'."\n"
                            ."\n"
                            .'- false：有线条',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'SkipDetection',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否跳过检测。'."\n"
                            .'- true：跳过检查'."\n"
                            ."\n"
                            .'- false：不跳过检查'."\n",
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'false',
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
                                'example' => 'CBC36BE6-2A18-5256-82BD-8B5477E5D058',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'FileContent' => [
                                        'description' => '请求参数`html`和`xlsx`已废弃，默认输出JSON格式的数据。',
                                        'type' => 'string',
                                        'example' => 'UEsDBBQAAAAIAAAAIQBukMk4WAIAA****',
                                    ],
                                    'Tables' => [
                                        'description' => 'JSON格式的数据。仅在请求参数OutputFormat为`json`时显示。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Head' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '表头信息。',
                                                        'type' => 'string',
                                                        'example' => '存活盘点表',
                                                    ],
                                                ],
                                                'Tail' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '表尾信息。',
                                                        'type' => 'string',
                                                        'example' => '职工券',
                                                    ],
                                                ],
                                                'TableRows' => [
                                                    'description' => 'JSON格式的表格数据。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'TableColumns' => [
                                                                'description' => 'JSON格式的表格数据。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'EndRow' => [
                                                                            'description' => '单元格所占的行数（rowspan）为ey-sy。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int32',
                                                                            'example' => '1',
                                                                        ],
                                                                        'EndColumn' => [
                                                                            'description' => '单元格所占的列数（colspan）为ex-sx。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int32',
                                                                            'example' => '4',
                                                                        ],
                                                                        'Width' => [
                                                                            'description' => '图片上单元格的宽度。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int32',
                                                                            'example' => '0',
                                                                        ],
                                                                        'Height' => [
                                                                            'description' => '图片上单元格的高度。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int32',
                                                                            'example' => '0',
                                                                        ],
                                                                        'Texts' => [
                                                                            'type' => 'array',
                                                                            'items' => [
                                                                                'description' => '文本，每行（row）文字为一个block。',
                                                                                'type' => 'string',
                                                                                'example' => '序号',
                                                                            ],
                                                                        ],
                                                                        'StartRow' => [
                                                                            'description' => '单元格的起始行ID。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int32',
                                                                            'example' => '0',
                                                                        ],
                                                                        'StartColumn' => [
                                                                            'description' => '单元格的起始列ID。',
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
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CBC36BE6-2A18-5256-82BD-8B5477E5D058\\",\\n  \\"Data\\": {\\n    \\"FileContent\\": \\"UEsDBBQAAAAIAAAAIQBukMk4WAIAA****\\",\\n    \\"Tables\\": [\\n      {\\n        \\"Head\\": [\\n          \\"存活盘点表\\"\\n        ],\\n        \\"Tail\\": [\\n          \\"职工券\\"\\n        ],\\n        \\"TableRows\\": [\\n          {\\n            \\"TableColumns\\": [\\n              {\\n                \\"EndRow\\": 1,\\n                \\"EndColumn\\": 4,\\n                \\"Width\\": 0,\\n                \\"Height\\": 0,\\n                \\"Texts\\": [\\n                  \\"序号\\"\\n                ],\\n                \\"StartRow\\": 0,\\n                \\"StartColumn\\": 1\\n              }\\n            ]\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '表格识别',
            'summary' => '本文介绍表格识别RecognizeTable的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'表格识别能力可以自动识别表格内容信息。适用于边框线条为黑色、横竖框线齐全的表格中内容识别。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeTable)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeTable?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeTable%2FRecognizeTable1.jpg%22%2C%22OutputFormat%22%3A%22json%22%2C%22UseFinanceModel%22%3Atrue%2C%22HasLine%22%3Afalse%2C%22AssureDirection%22%3Atrue%2C%22SkipDetection%22%3Afalse%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[表格识别示例代码](~~600191~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP、GIF。'."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                .'- 图像分辨率：不限制图片分辨率，但图片分辨率太高可能会导致API识别超时，超时时间为5秒。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于表格识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeTable)。'."\n"
                ."\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的表格识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[表格识别示例代码](~~600191~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于表格识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeTaxiInvoice' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ImageURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeTaxiInvoice/RecognizeTaxiInvoice2.jpg',
                        'isFileTransferUrl' => true,
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
                                'example' => 'B2BBBD26-1D3E-4CFA-A80B-6A9266B8D125',
                            ],
                            'Data' => [
                                'description' => '返回的数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Invoices' => [
                                        'description' => '发票列表详细信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Items' => [
                                                    'description' => '每张发票的文字列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'ItemRoi' => [
                                                                'description' => '发票每个字段对应位置信息。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Size' => [
                                                                        'description' => '位置框长宽。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'W' => [
                                                                                'description' => '位置框宽度。',
                                                                                'type' => 'number',
                                                                                'format' => 'float',
                                                                                'example' => '887.9998779296875',
                                                                            ],
                                                                            'H' => [
                                                                                'description' => '位置框高度。',
                                                                                'type' => 'number',
                                                                                'format' => 'float',
                                                                                'example' => '81.999984741210938',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                    'Angle' => [
                                                                        'description' => '角度信息。坐标的原点在左上角，与X轴平行的方向角度为0。逆时针旋转角度为负，顺时针旋转角度为正。角度是水平轴（X轴）顺时针旋转，与碰到的第一个边的夹角度数。角度范围-180°~180°。',
                                                                        'type' => 'number',
                                                                        'format' => 'float',
                                                                        'example' => '-90',
                                                                    ],
                                                                    'Center' => [
                                                                        'description' => '位置框中心点。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'Y' => [
                                                                                'description' => '位置框中心点Y坐标。',
                                                                                'type' => 'number',
                                                                                'format' => 'float',
                                                                                'example' => '1360',
                                                                            ],
                                                                            'X' => [
                                                                                'description' => '位置框中心点X坐标。',
                                                                                'type' => 'number',
                                                                                'format' => 'float',
                                                                                'example' => '1593',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'Text' => [
                                                                'description' => '发票每个字段信息。',
                                                                'type' => 'string',
                                                                'example' => '86655664',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'RotateType' => [
                                                    'description' => '发票旋转角度。'."\n"
                                                        ."\n"
                                                        .'- 0：不需要旋转。'."\n"
                                                        ."\n"
                                                        .'- 1：顺时针旋转90。'."\n"
                                                        ."\n"
                                                        .'- 2：顺时针旋转180。'."\n"
                                                        ."\n"
                                                        .'- 3：顺时针旋转270。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'InvoiceRoi' => [
                                                    'description' => '发票位置。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'W' => [
                                                            'description' => '发票宽度。',
                                                            'type' => 'number',
                                                            'format' => 'float',
                                                            'example' => '1773',
                                                        ],
                                                        'H' => [
                                                            'description' => '发票高度。',
                                                            'type' => 'number',
                                                            'format' => 'float',
                                                            'example' => '3625',
                                                        ],
                                                        'Y' => [
                                                            'description' => '发票左上角Y坐标。',
                                                            'type' => 'number',
                                                            'format' => 'float',
                                                            'example' => '302',
                                                        ],
                                                        'X' => [
                                                            'description' => '发票左上角X坐标。',
                                                            'type' => 'number',
                                                            'format' => 'float',
                                                            'example' => '513',
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
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B2BBBD26-1D3E-4CFA-A80B-6A9266B8D125\\",\\n  \\"Data\\": {\\n    \\"Invoices\\": [\\n      {\\n        \\"Items\\": [\\n          {\\n            \\"ItemRoi\\": {\\n              \\"Size\\": {\\n                \\"W\\": 887.9998779296875,\\n                \\"H\\": 81.99998474121094\\n              },\\n              \\"Angle\\": -90,\\n              \\"Center\\": {\\n                \\"Y\\": 1360,\\n                \\"X\\": 1593\\n              }\\n            },\\n            \\"Text\\": \\"86655664\\"\\n          }\\n        ],\\n        \\"RotateType\\": 0,\\n        \\"InvoiceRoi\\": {\\n          \\"W\\": 1773,\\n          \\"H\\": 3625,\\n          \\"Y\\": 302,\\n          \\"X\\": 513\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>B2BBBD26-1D3E-4CFA-A80B-6A9266B8D125</RequestId>\\n<Data>\\n    <Invoices>\\n        <RotateType>0</RotateType>\\n        <InvoiceRoi>\\n            <W>1773</W>\\n            <H>3625</H>\\n            <X>513</X>\\n            <Y>302</Y>\\n        </InvoiceRoi>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1436</X>\\n                    <Y>968.5</Y>\\n                </Center>\\n                <Angle>-90</Angle>\\n                <Size>\\n                    <W>89</W>\\n                    <H>1110</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>132011781210</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1246.5</X>\\n                    <Y>1239</Y>\\n                </Center>\\n                <Angle>-90</Angle>\\n                <Size>\\n                    <W>92</W>\\n                    <H>743</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>13742573</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1593</X>\\n                    <Y>1360</Y>\\n                </Center>\\n                <Angle>0</Angle>\\n                <Size>\\n                    <W>887.9998779296875</W>\\n                    <H>81.99998474121094</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>013560325483</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1744</X>\\n                    <Y>1507.5</Y>\\n                </Center>\\n                <Angle>0</Angle>\\n                <Size>\\n                    <W>585.9998779296875</W>\\n                    <H>80.99998474121094</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>86655664</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1778</X>\\n                    <Y>1668</Y>\\n                </Center>\\n                <Angle>-90</Angle>\\n                <Size>\\n                    <W>80</W>\\n                    <H>524</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>A-B6167</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1629.5</X>\\n                    <Y>1840</Y>\\n                </Center>\\n                <Angle>-90</Angle>\\n                <Size>\\n                    <W>81.99998474121094</W>\\n                    <H>828.9998779296875</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>2018年02月28日</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1864</X>\\n                    <Y>2009.5</Y>\\n                </Center>\\n                <Angle>-90</Angle>\\n                <Size>\\n                    <W>91</W>\\n                    <H>390</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>22:24</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1862</X>\\n                    <Y>2180</Y>\\n                </Center>\\n                <Angle>-90</Angle>\\n                <Size>\\n                    <W>96</W>\\n                    <H>384</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>22:57</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1730</X>\\n                    <Y>2348</Y>\\n                </Center>\\n                <Angle>-90</Angle>\\n                <Size>\\n                    <W>96</W>\\n                    <H>608</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>3.60元/公里</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1813</X>\\n                    <Y>2530</Y>\\n                </Center>\\n                <Angle>-90</Angle>\\n                <Size>\\n                    <W>92</W>\\n                    <H>466</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>40.9公里</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1741</X>\\n                    <Y>2697</Y>\\n                </Center>\\n                <Angle>0</Angle>\\n                <Size>\\n                    <W>613.9998779296875</W>\\n                    <H>91.99998474121094</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>00:04.03</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1785.5</X>\\n                    <Y>2868.5</Y>\\n                </Center>\\n                <Angle>-90</Angle>\\n                <Size>\\n                    <W>91</W>\\n                    <H>519</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>129.00元</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1850.5</X>\\n                    <Y>3026</Y>\\n                </Center>\\n                <Angle>0</Angle>\\n                <Size>\\n                    <W>400.99993896484375</W>\\n                    <H>105.99998474121094</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>0.00元</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1848.5</X>\\n                    <Y>3187</Y>\\n                </Center>\\n                <Angle>0</Angle>\\n                <Size>\\n                    <W>396.99993896484375</W>\\n                    <H>99.99998474121094</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>0.00元</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1953</X>\\n                    <Y>3368</Y>\\n                </Center>\\n                <Angle>0</Angle>\\n                <Size>\\n                    <W>166</W>\\n                    <H>78</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>**</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1954</X>\\n                    <Y>3539</Y>\\n                </Center>\\n                <Angle>0</Angle>\\n                <Size>\\n                    <W>160</W>\\n                    <H>72</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>**</Text>\\n        </Items>\\n        <Items>\\n            <ItemRoi>\\n                <Center>\\n                    <X>1945</X>\\n                    <Y>3704.5</Y>\\n                </Center>\\n                <Angle>0</Angle>\\n                <Size>\\n                    <W>158</W>\\n                    <H>71</H>\\n                </Size>\\n            </ItemRoi>\\n            <Text>**</Text>\\n        </Items>\\n    </Invoices>\\n</Data>","errorExample":""}]',
            'title' => '出租车发票识别',
            'summary' => '本文介绍出租车发票识别RecognizeTaxiInvoice的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'出租车发票识别能力可以准确识别出全国各大城市出租车发票在图像中的位置，支持出租车发票结构化识别，输出发票号码、代码、车号、日期、时间、金额，共6个关键字段信息。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'> - 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeTaxiInvoice)对该能力进行更直观试用以及在线购买。'."\n"
                .'> - 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeTaxiInvoice?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeTaxiInvoice%2FRecognizeTaxiInvoice1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'  - 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'  - 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'  - 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'  - [Web前端直接调用](~~467779~~)'."\n"
                .'  - [小程序场景下直接调用](~~467780~~)'."\n"
                .'  - [Android端直接调用](~~467781~~)'."\n"
                .'  - [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP、GIF。'."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                .'- 图像分辨率：不限制图片分辨率，但图片分辨率太高可能会导致API识别超时，超时时间为5秒。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于出租车发票识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeTaxiInvoice)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的出租车发票识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于出租车发票识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeTrainTicket' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ImageURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeTrainTicket/RecognizeTrainTicket3.jpg',
                        'isFileTransferUrl' => true,
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
                                'example' => 'BE4B73EA-30A0-4573-A548-3A101B34641A',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Price' => [
                                        'description' => '票价。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '104.5',
                                    ],
                                    'Destination' => [
                                        'description' => '目的站点。',
                                        'type' => 'string',
                                        'example' => '南京南站',
                                    ],
                                    'DepartureStation' => [
                                        'description' => '始发站点。',
                                        'type' => 'string',
                                        'example' => '苏州站',
                                    ],
                                    'Date' => [
                                        'description' => '乘车日期时间。',
                                        'type' => 'string',
                                        'example' => '2017年08月05日22：09开',
                                    ],
                                    'Number' => [
                                        'description' => '车次号。',
                                        'type' => 'string',
                                        'example' => 'G7350',
                                    ],
                                    'Seat' => [
                                        'description' => '座位车厢及座次号。',
                                        'type' => 'string',
                                        'example' => '04车13A号',
                                    ],
                                    'Name' => [
                                        'description' => '乘车人姓名。',
                                        'type' => 'string',
                                        'example' => '帅帅',
                                    ],
                                    'Level' => [
                                        'description' => '座位席别。',
                                        'type' => 'string',
                                        'example' => '二等座',
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
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BE4B73EA-30A0-4573-A548-3A101B34641A\\",\\n  \\"Data\\": {\\n    \\"Price\\": 104.5,\\n    \\"Destination\\": \\"南京南站\\",\\n    \\"DepartureStation\\": \\"苏州站\\",\\n    \\"Date\\": \\"2017年08月05日22：09开\\",\\n    \\"Number\\": \\"G7350\\",\\n    \\"Seat\\": \\"04车13A号\\",\\n    \\"Name\\": \\"帅帅\\",\\n    \\"Level\\": \\"二等座\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeTrainTicketResponse>\\n    <RequestId>BE4B73EA-30A0-4573-A548-3A101B34641A</RequestId>\\n    <Data>\\n        <Price>104.5</Price>\\n        <Destination>南京南站</Destination>\\n        <DepartureStation>苏州站</DepartureStation>\\n        <Date>2017年08月05日22：09开</Date>\\n        <Number>G7350</Number>\\n        <Seat>04车13A号</Seat>\\n        <Name>帅帅</Name>\\n        <Level>二等座</Level>\\n    </Data>\\n</RecognizeTrainTicketResponse>","errorExample":""}]',
            'title' => '火车票识别',
            'summary' => '本文介绍火车票识别RecognizeTrainTicket的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'火车票识别能力可以对火车票进行结构化识别，输出乘车时间、始发站、目的站、座位席别、乘车人姓名、车次号、票价、车厢及座次号，共8个关键字段信息。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeTrainTicket)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeTrainTicket?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeTrainTicket%2FRecognizeTrainTicket1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP、GIF。'."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                .'- 图像分辨率：不限制图片分辨率，但图片分辨率太高可能会导致API识别超时，超时时间为5秒。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于火车票识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeTrainTicket)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的火车票识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于火车票识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeVATInvoice' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'FileURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeVATInvoice/RecognizeVATInvoice3.jpg',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'FileType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输入的图像格式参数固定为`jpg`。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'jpg' => 'jpg',
                        ],
                        'example' => 'jpg',
                        'enum' => [
                            'jpg',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '1',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '56A10D65-ECE0-59DE-9775-F6494D2AF13B',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Box' => [
                                        'description' => '发票关键字位置框，格式为\\[左上角点X轴坐标，左上角点Y轴坐标，右下角点X轴坐标，右下角点Y轴坐标]。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PayerRegisterNoes' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '购买方纳税人识别号位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '358,262,567,290',
                                                ],
                                            ],
                                            'PayeeAddresses' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '购买方地址及电话位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '355,909,734,939',
                                                ],
                                            ],
                                            'PayeeBankNames' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '购买方开户行及账号位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '354,947,938,977',
                                                ],
                                            ],
                                            'Checkers' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '复核人位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '589,1003,662,1033',
                                                ],
                                            ],
                                            'TaxAmounts' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '合计税额位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1606,721,1658,748',
                                                ],
                                            ],
                                            'SumAmounts' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '价税合计位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '32,774,629,805',
                                                ],
                                            ],
                                            'Clerks' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '开票人位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '986,1003,1060,1033',
                                                ],
                                            ],
                                            'InvoiceNoes' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '发票号码位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1377,78,1478,105',
                                                ],
                                            ],
                                            'InvoiceDates' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '开票日期位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1376,115,1596,145',
                                                ],
                                            ],
                                            'InvoiceCodes' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '发票代码位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1378,41,1520,68',
                                                ],
                                            ],
                                            'InvoiceFakeCodes' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '校验码位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1376,153,1640,181',
                                                ],
                                            ],
                                            'PayerNames' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '购买方名称位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '354,222,700,255',
                                                ],
                                            ],
                                            'PayerBankNames' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '销售方开户行及账号位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0,0,0,0',
                                                ],
                                            ],
                                            'Payees' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '收款人位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '189,1003,264,1033',
                                                ],
                                            ],
                                            'PayeeNames' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '购买方名称位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '356,833,633,865',
                                                ],
                                            ],
                                            'InvoiceAmounts' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '价税合计位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1364, 776,1438,804',
                                                ],
                                            ],
                                            'WithoutTaxAmounts' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '合计金额位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1265,721,1339,749',
                                                ],
                                            ],
                                            'PayerAddresses' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '销售方地址及电话位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0,0,0,0',
                                                ],
                                            ],
                                            'PayeeRegisterNoes' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '销售方纳税人识别号位置框信息。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '356,873,571,902',
                                                ],
                                            ],
                                            'ItemNames' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '货物或应税劳务、服务名称位置框信息。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0,0,0,0',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Content' => [
                                        'description' => '合计金额识别发票各项结果。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PayerAddress' => [
                                                'description' => '购买方地址、电话。',
                                                'type' => 'string',
                                                'example' => '浙江省杭州市西湖区杭大路9号聚龙大厦西区15-18楼0571-87901580',
                                            ],
                                            'PayeeRegisterNo' => [
                                                'description' => '销售方纳税人识别号。',
                                                'type' => 'string',
                                                'example' => '91420200000123403',
                                            ],
                                            'PayeeBankName' => [
                                                'description' => '销售方开户行及账号。',
                                                'type' => 'string',
                                                'example' => '中国银行浙江省分行35845832****',
                                            ],
                                            'InvoiceNo' => [
                                                'description' => '发票号码。',
                                                'type' => 'string',
                                                'example' => '03753869',
                                            ],
                                            'PayerRegisterNo' => [
                                                'description' => '购买方纳税人识别号。',
                                                'type' => 'string',
                                                'example' => '91420200000123403',
                                            ],
                                            'Checker' => [
                                                'description' => '复核人。',
                                                'type' => 'string',
                                                'example' => '张三',
                                            ],
                                            'TaxAmount' => [
                                                'description' => '合计税额。',
                                                'type' => 'string',
                                                'example' => '9.52',
                                            ],
                                            'InvoiceDate' => [
                                                'description' => '开票日期。',
                                                'type' => 'string',
                                                'example' => '20190415',
                                            ],
                                            'WithoutTaxAmount' => [
                                                'description' => '合计金额。',
                                                'type' => 'string',
                                                'example' => '190.48',
                                            ],
                                            'InvoiceAmount' => [
                                                'description' => '价税合计（小写）。',
                                                'type' => 'string',
                                                'example' => '200.00',
                                            ],
                                            'AntiFakeCode' => [
                                                'description' => '校验码。',
                                                'type' => 'string',
                                                'example' => '02702870934284730434',
                                            ],
                                            'PayerName' => [
                                                'description' => '购买方名称。',
                                                'type' => 'string',
                                                'example' => '三号技术有限责任公司',
                                            ],
                                            'Payee' => [
                                                'description' => '收款人。',
                                                'type' => 'string',
                                                'example' => '张三',
                                            ],
                                            'SumAmount' => [
                                                'description' => '价税合计（大写）。',
                                                'type' => 'string',
                                                'example' => '87',
                                            ],
                                            'PayerBankName' => [
                                                'description' => '购买方开户行及账号。',
                                                'type' => 'string',
                                                'example' => '6221************1234',
                                            ],
                                            'Clerk' => [
                                                'description' => '开票人。',
                                                'type' => 'string',
                                                'example' => '张三',
                                            ],
                                            'PayeeName' => [
                                                'description' => '销售方名称。',
                                                'type' => 'string',
                                                'example' => '上海机场（集团）有限公司',
                                            ],
                                            'PayeeAddress' => [
                                                'description' => '销售方地址、电话。',
                                                'type' => 'string',
                                                'example' => '上海虹桥机场迎宾二路161号22342185',
                                            ],
                                            'InvoiceCode' => [
                                                'description' => '发票代码。',
                                                'type' => 'string',
                                                'example' => '031001600311',
                                            ],
                                            'ItemName' => [
                                                'description' => '1',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '货物或应税劳务、服务名称。',
                                                    'type' => 'string',
                                                    'example' => '餐饮服务',
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
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"56A10D65-ECE0-59DE-9775-F6494D2AF13B\\",\\n  \\"Data\\": {\\n    \\"Box\\": {\\n      \\"PayerRegisterNoes\\": [\\n        0\\n      ],\\n      \\"PayeeAddresses\\": [\\n        0\\n      ],\\n      \\"PayeeBankNames\\": [\\n        0\\n      ],\\n      \\"Checkers\\": [\\n        0\\n      ],\\n      \\"TaxAmounts\\": [\\n        0\\n      ],\\n      \\"SumAmounts\\": [\\n        0\\n      ],\\n      \\"Clerks\\": [\\n        0\\n      ],\\n      \\"InvoiceNoes\\": [\\n        0\\n      ],\\n      \\"InvoiceDates\\": [\\n        0\\n      ],\\n      \\"InvoiceCodes\\": [\\n        0\\n      ],\\n      \\"InvoiceFakeCodes\\": [\\n        0\\n      ],\\n      \\"PayerNames\\": [\\n        0\\n      ],\\n      \\"PayerBankNames\\": [\\n        0\\n      ],\\n      \\"Payees\\": [\\n        0\\n      ],\\n      \\"PayeeNames\\": [\\n        0\\n      ],\\n      \\"InvoiceAmounts\\": [\\n        0\\n      ],\\n      \\"WithoutTaxAmounts\\": [\\n        0\\n      ],\\n      \\"PayerAddresses\\": [\\n        0\\n      ],\\n      \\"PayeeRegisterNoes\\": [\\n        0\\n      ],\\n      \\"ItemNames\\": [\\n        0\\n      ]\\n    },\\n    \\"Content\\": {\\n      \\"PayerAddress\\": \\"浙江省杭州市西湖区杭大路9号聚龙大厦西区15-18楼0571-87901580\\",\\n      \\"PayeeRegisterNo\\": \\"91420200000123403\\",\\n      \\"PayeeBankName\\": \\"中国银行浙江省分行35845832****\\",\\n      \\"InvoiceNo\\": \\"03753869\\",\\n      \\"PayerRegisterNo\\": \\"91420200000123403\\",\\n      \\"Checker\\": \\"张三\\",\\n      \\"TaxAmount\\": \\"9.52\\",\\n      \\"InvoiceDate\\": \\"20190415\\",\\n      \\"WithoutTaxAmount\\": \\"190.48\\",\\n      \\"InvoiceAmount\\": \\"200.00\\",\\n      \\"AntiFakeCode\\": \\"02702870934284730434\\",\\n      \\"PayerName\\": \\"三号技术有限责任公司\\",\\n      \\"Payee\\": \\"张三\\",\\n      \\"SumAmount\\": \\"87\\",\\n      \\"PayerBankName\\": \\"6221************1234\\",\\n      \\"Clerk\\": \\"张三\\",\\n      \\"PayeeName\\": \\"上海机场（集团）有限公司\\",\\n      \\"PayeeAddress\\": \\"上海虹桥机场迎宾二路161号22342185\\",\\n      \\"InvoiceCode\\": \\"031001600311\\",\\n      \\"ItemName\\": [\\n        \\"餐饮服务\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeVATInvoiceResponse>\\n    <RequestId>56A10D65-ECE0-59DE-9775-F6494D2AF13B</RequestId>\\n    <Data>\\n        <Content>\\n            <Checker/>\\n            <PayeeAddress>浙江省杭州市西湖区杭大路9号聚龙大厦西区15-18楼0571-87901580</PayeeAddress>\\n            <PayeeName>三号技术有限责任公司</PayeeName>\\n            <PayerAddress/>\\n            <AntiFakeCode>60966753003521159330</AntiFakeCode>\\n            <PayerBankName/>\\n            <InvoiceNo>3753869</InvoiceNo>\\n            <PayerRegisterNo>91420200000123403</PayerRegisterNo>\\n            <WithoutTaxAmount>82.08</WithoutTaxAmount>\\n            <InvoiceAmount>87</InvoiceAmount>\\n            <PayerName>三号技术有限责任公司</PayerName>\\n            <TaxAmount>4.92</TaxAmount>\\n            <PayeeBankName>中国银行浙江省分行35845832****</PayeeBankName>\\n            <Clerk/>\\n            <ItemName>餐饮服务</ItemName>\\n            <PayeeRegisterNo>91420200000123403</PayeeRegisterNo>\\n            <InvoiceCode>33002000411</InvoiceCode>\\n            <InvoiceDate>2020年12月15日</InvoiceDate>\\n            <SumAmount>87</SumAmount>\\n            <Payee/>\\n        </Content>\\n        <Box>\\n            <PayerRegisterNoes>118</PayerRegisterNoes>\\n            <PayerRegisterNoes>128</PayerRegisterNoes>\\n            <PayerRegisterNoes>278</PayerRegisterNoes>\\n            <PayerRegisterNoes>138</PayerRegisterNoes>\\n            <PayerAddresses>0</PayerAddresses>\\n            <PayerAddresses>0</PayerAddresses>\\n            <PayerAddresses>0</PayerAddresses>\\n            <PayerAddresses>0</PayerAddresses>\\n            <InvoiceAmounts>207</InvoiceAmounts>\\n            <InvoiceAmounts>347</InvoiceAmounts>\\n            <InvoiceAmounts>278</InvoiceAmounts>\\n            <InvoiceAmounts>355</InvoiceAmounts>\\n            <InvoiceDates>585</InvoiceDates>\\n            <InvoiceDates>60</InvoiceDates>\\n            <InvoiceDates>675</InvoiceDates>\\n            <InvoiceDates>69</InvoiceDates>\\n            <PayeeAddresses>118</PayeeAddresses>\\n            <PayeeAddresses>407</PayeeAddresses>\\n            <PayeeAddresses>407</PayeeAddresses>\\n            <PayeeAddresses>415</PayeeAddresses>\\n            <Clerks>0</Clerks>\\n            <Clerks>0</Clerks>\\n            <Clerks>0</Clerks>\\n            <Clerks>0</Clerks>\\n            <WithoutTaxAmounts>546</WithoutTaxAmounts>\\n            <WithoutTaxAmounts>327</WithoutTaxAmounts>\\n            <WithoutTaxAmounts>584</WithoutTaxAmounts>\\n            <WithoutTaxAmounts>337</WithoutTaxAmounts>\\n            <Checkers>0</Checkers>\\n            <Checkers>0</Checkers>\\n            <Checkers>0</Checkers>\\n            <Checkers>0</Checkers>\\n            <TaxAmounts>696</TaxAmounts>\\n            <TaxAmounts>328</TaxAmounts>\\n            <TaxAmounts>724</TaxAmounts>\\n            <TaxAmounts>335</TaxAmounts>\\n            <InvoiceCodes>583</InvoiceCodes>\\n            <InvoiceCodes>16</InvoiceCodes>\\n            <InvoiceCodes>643</InvoiceCodes>\\n            <InvoiceCodes>25</InvoiceCodes>\\n            <SumAmounts>207</SumAmounts>\\n            <SumAmounts>347</SumAmounts>\\n            <SumAmounts>278</SumAmounts>\\n            <SumAmounts>355</SumAmounts>\\n            <ItemNames>0</ItemNames>\\n            <ItemNames>0</ItemNames>\\n            <ItemNames>0</ItemNames>\\n            <ItemNames>0</ItemNames>\\n            <PayerNames>119</PayerNames>\\n            <PayerNames>109</PayerNames>\\n            <PayerNames>237</PayerNames>\\n            <PayerNames>118</PayerNames>\\n            <InvoiceFakeCodes>583</InvoiceFakeCodes>\\n            <InvoiceFakeCodes>82</InvoiceFakeCodes>\\n            <InvoiceFakeCodes>700</InvoiceFakeCodes>\\n            <InvoiceFakeCodes>90</InvoiceFakeCodes>\\n            <PayeeBankNames>119</PayeeBankNames>\\n            <PayeeBankNames>423</PayeeBankNames>\\n            <PayeeBankNames>282</PayeeBankNames>\\n            <PayeeBankNames>431</PayeeBankNames>\\n            <PayeeNames>117</PayeeNames>\\n            <PayeeNames>371</PayeeNames>\\n            <PayeeNames>226</PayeeNames>\\n            <PayeeNames>381</PayeeNames>\\n            <Payees>0</Payees>\\n            <Payees>0</Payees>\\n            <Payees>0</Payees>\\n            <Payees>0</Payees>\\n            <InvoiceNoes>582</InvoiceNoes>\\n            <InvoiceNoes>38</InvoiceNoes>\\n            <InvoiceNoes>623</InvoiceNoes>\\n            <InvoiceNoes>46</InvoiceNoes>\\n            <PayerBankNames>0</PayerBankNames>\\n            <PayerBankNames>0</PayerBankNames>\\n            <PayerBankNames>0</PayerBankNames>\\n            <PayerBankNames>0</PayerBankNames>\\n            <PayeeRegisterNoes>119</PayeeRegisterNoes>\\n            <PayeeRegisterNoes>389</PayeeRegisterNoes>\\n            <PayeeRegisterNoes>247</PayeeRegisterNoes>\\n            <PayeeRegisterNoes>400</PayeeRegisterNoes>\\n        </Box>\\n    </Data>\\n</RecognizeVATInvoiceResponse>","errorExample":""}]',
            'title' => '增值税发票识别',
            'summary' => '本文为您介绍增值税发票识别RecognizeVATInvoice的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'增值税发票识别能力可以识别增值税发票（电子发票和纸质发票）关键字段内容，包括：校验码、复核人、开票人、发票代码、收款人等。'."\n"
                ."\n"
                .'> - 增值税发票识别接口仅识别发票中的文本内容，不支持辨别发票真伪。'."\n"
                .'- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeVATInvoice)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeVATInvoice?lang=JAVA&sdkStyle=dara&params=%7B%22FileURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeVATInvoice%2FRecognizeVATInvoice1.jpg%22%2C%22FileType%22%3A%22jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[增值税发票识别示例代码](~~600152~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：PNG、JPG、JPEG、BMP、WebP、PDF。'."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                .'- 图像分辨率：大于15×15像素，小于4096×4096像素。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于增值税发票识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeVATInvoice)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的增值税发票识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[增值税发票识别示例代码](~~600152~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于增值税发票识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeVINCode' => [
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ImageURL',
                    'in' => 'query',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeVINCode/vin1.jpg',
                        'isFileTransferUrl' => true,
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
                                'example' => '911FC8CF-CC27-477E-BE3B-7ED77DF4DFE0',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'VinCode' => [
                                        'description' => '识别的车辆VIN码。',
                                        'type' => 'string',
                                        'example' => 'LVBB2FAF777999888',
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
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"911FC8CF-CC27-477E-BE3B-7ED77DF4DFE0\\",\\n  \\"Data\\": {\\n    \\"VinCode\\": \\"LVBB2FAF777999888\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeVINCodeResponse>\\n    <RequestId>911FC8CF-CC27-477E-BE3B-7ED77DF4DFE0</RequestId>\\n    <Data>\\n        <VinCode>LVBB2FAF777999888</VinCode>\\n    </Data>\\n</RecognizeVINCodeResponse>","errorExample":""}]',
            'title' => 'VIN码识别',
            'summary' => '本文介绍VIN码识别RecognizeVINCode的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'VIN码识别能力可以识别车辆VIN码，输出车辆VIN码数值。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeVINCode)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeVINCode?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeVINCode%2Fvin1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[VIN码识别示例代码](~~605238~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP、GIF。'."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                .'- 图像分辨率：不限制图像分辨率，但图像分辨率太高可能会导致API识别超时，超时时间为5秒。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于VIN码识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeVINCode)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的VIN码识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[VIN码识别示例代码](~~605238~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于VIN码识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizePdf' => [
            'summary' => '本文介绍PDF识别RecognizePdf的语法及示例。',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'FileURL',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '文件URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/ocr/xxxx.pdf',
                        'isFileTransferUrl' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CD9A9659-ABEE-4A7D-837F-9FDF40879A97',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Height' => [
                                        'description' => '文档在图中旋转后的高度。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '788',
                                    ],
                                    'Width' => [
                                        'description' => '文档在图中旋转后的宽度。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1220',
                                    ],
                                    'OrgHeight' => [
                                        'description' => '原图高度。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '610',
                                    ],
                                    'OrgWidth' => [
                                        'description' => '原图宽度。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '394',
                                    ],
                                    'PageIndex' => [
                                        'description' => 'PDF页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'Angle' => [
                                        'description' => 'PDF文件被旋转的角度。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'WordsInfo' => [
                                        'description' => '文字信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '1',
                                            'type' => 'object',
                                            'properties' => [
                                                'Angle' => [
                                                    'description' => '被识别字段被旋转的角度。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'Word' => [
                                                    'description' => '文字信息。',
                                                    'type' => 'string',
                                                    'example' => '发票代码：012002000211',
                                                ],
                                                'Height' => [
                                                    'description' => '被识别字段的高度。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '16',
                                                ],
                                                'Width' => [
                                                    'description' => '被识别字段的宽度。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '205',
                                                ],
                                                'X' => [
                                                    'description' => '被识别字段左上角X坐标。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '863',
                                                ],
                                                'Y' => [
                                                    'description' => '被识别字段左上角Y坐标。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '46',
                                                ],
                                                'Positions' => [
                                                    'description' => '文字信息位置。识别矩形框四个角的坐标顺时针排列，分别为左上XY坐标、右上XY坐标、右下XY坐标、左下XY坐标。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '1',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'X' => [
                                                                'description' => '矩形框X坐标。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '863',
                                                            ],
                                                            'Y' => [
                                                                'description' => '矩形框Y坐标。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '43',
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
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CD9A9659-ABEE-4A7D-837F-9FDF40879A97\\",\\n  \\"Data\\": {\\n    \\"Height\\": 788,\\n    \\"Width\\": 1220,\\n    \\"OrgHeight\\": 610,\\n    \\"OrgWidth\\": 394,\\n    \\"PageIndex\\": 1,\\n    \\"Angle\\": 0,\\n    \\"WordsInfo\\": [\\n      {\\n        \\"Angle\\": 0,\\n        \\"Word\\": \\"发票代码：012002000211\\",\\n        \\"Height\\": 16,\\n        \\"Width\\": 205,\\n        \\"X\\": 863,\\n        \\"Y\\": 46,\\n        \\"Positions\\": [\\n          {\\n            \\"X\\": 863,\\n            \\"Y\\": 43\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizePdfResponse>\\n    <RequestId>CD9A9659-ABEE-4A7D-837F-9FDF40879A97</RequestId>\\n    <Data>\\n        <WordsInfo>\\n            <Word>天津增值税</Word>\\n            <Angle>-88</Angle>\\n            <X>514</X>\\n            <Positions>\\n                <X>397</X>\\n                <Y>45</Y>\\n            </Positions>\\n            <Positions>\\n                <X>662</X>\\n                <Y>52</Y>\\n            </Positions>\\n            <Positions>\\n                <X>661</X>\\n                <Y>82</Y>\\n            </Positions>\\n            <Positions>\\n                <X>396</X>\\n                <Y>75</Y>\\n            </Positions>\\n            <Y>-69</Y>\\n            <Height>265</Height>\\n            <Width>29</Width>\\n        </WordsInfo>\\n        <WordsInfo>\\n            <Word>普通发票</Word>\\n            <Angle>0</Angle>\\n            <X>678</X>\\n            <Positions>\\n                <X>678</X>\\n                <Y>48</Y>\\n            </Positions>\\n            <Positions>\\n                <X>824</X>\\n                <Y>47</Y>\\n            </Positions>\\n            <Positions>\\n                <X>824</X>\\n                <Y>76</Y>\\n            </Positions>\\n            <Positions>\\n                <X>678</X>\\n                <Y>77</Y>\\n            </Positions>\\n            <Y>48</Y>\\n            <Height>29</Height>\\n            <Width>146</Width>\\n        </WordsInfo>\\n        <WordsInfo>\\n            <Word>发票代码：012002000211</Word>\\n            <Angle>0</Angle>\\n            <X>863</X>\\n            <Positions>\\n                <X>863</X>\\n                <Y>46</Y>\\n            </Positions>\\n            <Positions>\\n                <X>1068</X>\\n                <Y>46</Y>\\n            </Positions>\\n            <Positions>\\n                <X>1068</X>\\n                <Y>62</Y>\\n            </Positions>\\n            <Positions>\\n                <X>863</X>\\n                <Y>62</Y>\\n            </Positions>\\n            <Y>46</Y>\\n            <Height>16</Height>\\n            <Width>205</Width>\\n        </WordsInfo>\\n        <OrgWidth>610</OrgWidth>\\n        <Angle>0</Angle>\\n        <OrgHeight>394</OrgHeight>\\n        <Height>788</Height>\\n        <PageIndex>1</PageIndex>\\n        <Width>1220</Width>\\n    </Data>\\n</RecognizePdfResponse>","errorExample":""}]',
            'title' => 'PDF识别',
            'description' => '## 功能描述'."\n"
                .'PDF识别能力可以对PDF上的文字进行结构化识别。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizePdf)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                ."\n"
                .'- 内容审核：可以结合内容审核能力对识别结果进行审核，检测文档中是否存在违规信息。'."\n"
                .'- 企业报销: 可以对PDF格式的增值税发票结构化识别处理后实现报销场景下的自动化。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                ."\n"
                .'- 精准识别：智能算法升级，精准识别文件内容，保留原始排版。'."\n"
                .'- 多语种识别：可识别中、英、中英混合等多语种内容。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizePdf?lang=JAVA&sdkStyle=dara&params=%7B%22FileURL%22%3A%22https%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizePdf%2FRecognizePdf1.pdf%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[PDF识别示例代码](~~478612~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 文件格式：PDF。'."\n"
                .'- 文件大小：不超过10 MB。'."\n"
                .'- 文档篇幅：PDF不超过5页。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于PDF识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizePdf)。',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的PDF识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[PDF识别示例代码](~~478612~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于PDF识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeTicketInvoice' => [
            'summary' => '本文介绍增值税发票卷票识别RecognizeTicketInvoice的语法及示例。',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ImageURL',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeTicketInvoice/RecognizeTicketInvoice1.png',
                        'isFileTransferUrl' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '063C0178-7EA3-4754-96FB-C0C9AE6B9AAE',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Count' => [
                                        'description' => '票据数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'Height' => [
                                        'description' => '票据旋转后的高度。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '594',
                                    ],
                                    'Width' => [
                                        'description' => '票据旋转后的宽度。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '594',
                                    ],
                                    'OrgHeight' => [
                                        'description' => '原图高度。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1417',
                                    ],
                                    'OrgWidth' => [
                                        'description' => '原图宽度。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1417',
                                    ],
                                    'Results' => [
                                        'description' => '识别结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '1',
                                            'type' => 'object',
                                            'properties' => [
                                                'Index' => [
                                                    'description' => '票据在图像中的索引。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'Content' => [
                                                    'description' => '识别内容。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'InvoiceCode' => [
                                                            'description' => '发票代码。',
                                                            'type' => 'string',
                                                            'example' => '044031860107',
                                                        ],
                                                        'InvoiceNumber' => [
                                                            'description' => '发票号码。',
                                                            'type' => 'string',
                                                            'example' => '09267581',
                                                        ],
                                                        'InvoiceDate' => [
                                                            'description' => '开票日期。',
                                                            'type' => 'string',
                                                            'example' => '2018-09-20',
                                                        ],
                                                        'AntiFakeCode' => [
                                                            'description' => '校验码。',
                                                            'type' => 'string',
                                                            'example' => '81931914902643039780',
                                                        ],
                                                        'PayeeName' => [
                                                            'description' => '销售方名称。',
                                                            'type' => 'string',
                                                            'example' => '深圳市xxxx有限公司',
                                                        ],
                                                        'PayeeRegisterNo' => [
                                                            'description' => '销售方税号。',
                                                            'type' => 'string',
                                                            'example' => '914403002794492693',
                                                        ],
                                                        'PayerName' => [
                                                            'description' => '购买方名称。',
                                                            'type' => 'string',
                                                            'example' => '深圳市xxxx有限公司',
                                                        ],
                                                        'PayerRegisterNo' => [
                                                            'description' => '购买方税号。',
                                                            'type' => 'string',
                                                            'example' => '91440300MA5EXWHW6F',
                                                        ],
                                                        'SumAmount' => [
                                                            'description' => '总价。',
                                                            'type' => 'string',
                                                            'example' => '￥220.00',
                                                        ],
                                                    ],
                                                ],
                                                'Type' => [
                                                    'description' => '票据类型。支持识别以下几种：'."\n"
                                                        ."\n"
                                                        .'- 增值税发票'."\n"
                                                        .'- 出租车票'."\n"
                                                        .'- 定额发票'."\n"
                                                        .'- 机动车销售发票'."\n"
                                                        .'- 卷票',
                                                    'type' => 'string',
                                                    'example' => '卷票',
                                                ],
                                                'KeyValueInfos' => [
                                                    'description' => '位置信息。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '1',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Key' => [
                                                                'description' => '被识别字段名称。',
                                                                'type' => 'string',
                                                                'example' => '发票代码',
                                                            ],
                                                            'Value' => [
                                                                'description' => '被识别字段的值。',
                                                                'type' => 'string',
                                                                'example' => '044031860107',
                                                            ],
                                                            'ValuePositions' => [
                                                                'description' => '被识别字段位置信息。四个角的坐标顺时针排列。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'description' => '1',
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'X' => [
                                                                            'description' => '矩形框X坐标。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                            'example' => '586',
                                                                        ],
                                                                        'Y' => [
                                                                            'description' => '矩形框Y坐标。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                            'example' => '16',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'ValueScore' => [
                                                                'description' => '被识别字段**Value**值置信度，范围0~100。',
                                                                'type' => 'number',
                                                                'format' => 'float',
                                                                'example' => '100',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'SliceRectangle' => [
                                                    'description' => '票据识别矩形框四个角的坐标顺时针排列。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '1',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'X' => [
                                                                'description' => '矩形框X坐标。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '586',
                                                            ],
                                                            'Y' => [
                                                                'description' => '矩形框Y坐标。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '16',
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
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"063C0178-7EA3-4754-96FB-C0C9AE6B9AAE\\",\\n  \\"Data\\": {\\n    \\"Count\\": 1,\\n    \\"Height\\": 594,\\n    \\"Width\\": 594,\\n    \\"OrgHeight\\": 1417,\\n    \\"OrgWidth\\": 1417,\\n    \\"Results\\": [\\n      {\\n        \\"Index\\": 1,\\n        \\"Content\\": {\\n          \\"InvoiceCode\\": \\"044031860107\\",\\n          \\"InvoiceNumber\\": \\"09267581\\",\\n          \\"InvoiceDate\\": \\"2018-09-20\\",\\n          \\"AntiFakeCode\\": \\"81931914902643039780\\",\\n          \\"PayeeName\\": \\"深圳市xxxx有限公司\\",\\n          \\"PayeeRegisterNo\\": \\"914403002794492693\\",\\n          \\"PayerName\\": \\"深圳市xxxx有限公司\\",\\n          \\"PayerRegisterNo\\": \\"91440300MA5EXWHW6F\\",\\n          \\"SumAmount\\": \\"￥220.00\\"\\n        },\\n        \\"Type\\": \\"卷票\\",\\n        \\"KeyValueInfos\\": [\\n          {\\n            \\"Key\\": \\"发票代码\\",\\n            \\"Value\\": \\"044031860107\\",\\n            \\"ValuePositions\\": [\\n              {\\n                \\"X\\": 586,\\n                \\"Y\\": 16\\n              }\\n            ],\\n            \\"ValueScore\\": 100\\n          }\\n        ],\\n        \\"SliceRectangle\\": [\\n          {\\n            \\"X\\": 586,\\n            \\"Y\\": 16\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeTicketInvoiceResponse>\\n    <RequestId>063C0178-7EA3-4754-96FB-C0C9AE6B9AAE</RequestId>\\n    <Data>\\n        <OrgWidth>594</OrgWidth>\\n        <Results>\\n            <Type>卷票</Type>\\n            <SliceRectangle>\\n                <X>2</X>\\n                <Y>19</Y>\\n            </SliceRectangle>\\n            <SliceRectangle>\\n                <X>586</X>\\n                <Y>16</Y>\\n            </SliceRectangle>\\n            <SliceRectangle>\\n                <X>580</X>\\n                <Y>1408</Y>\\n            </SliceRectangle>\\n            <SliceRectangle>\\n                <X>0</X>\\n                <Y>1410</Y>\\n            </SliceRectangle>\\n            <KeyValueInfos>\\n                <Value>44031860107</Value>\\n                <ValueScore>100</ValueScore>\\n                <Key>发票代码</Key>\\n            </KeyValueInfos>\\n            <KeyValueInfos>\\n                <Value>9267581</Value>\\n                <ValueScore>100</ValueScore>\\n                <Key>发票号码</Key>\\n            </KeyValueInfos>\\n            <KeyValueInfos>\\n                <Value>2018-09-20</Value>\\n                <ValueScore>100</ValueScore>\\n                <Key>开票日期</Key>\\n            </KeyValueInfos>\\n            <KeyValueInfos>\\n                <Value>81931914902643030000</Value>\\n                <ValueScore>100</ValueScore>\\n                <Key>校验码</Key>\\n            </KeyValueInfos>\\n            <KeyValueInfos>\\n                <Value>深圳市xxxx有限公司</Value>\\n                <ValueScore>100</ValueScore>\\n                <Key>销售方名称</Key>\\n            </KeyValueInfos>\\n            <KeyValueInfos>\\n                <Value>914403002794492700</Value>\\n                <ValueScore>100</ValueScore>\\n                <Key>销售方税号</Key>\\n            </KeyValueInfos>\\n            <KeyValueInfos>\\n                <Value>深圳市xxxx有限公司</Value>\\n                <ValueScore>100</ValueScore>\\n                <Key>购买方名称</Key>\\n            </KeyValueInfos>\\n            <KeyValueInfos>\\n                <Value>91440300MA5EXWHW6F</Value>\\n                <ValueScore>99</ValueScore>\\n                <Key>购买方税号</Key>\\n            </KeyValueInfos>\\n            <KeyValueInfos>\\n                <Value>￥220.00</Value>\\n                <ValueScore>99</ValueScore>\\n                <Key>总价</Key>\\n            </KeyValueInfos>\\n            <Content>\\n                <PayeeName>深圳市xxxx有限公司</PayeeName>\\n                <AntiFakeCode>81931914902643030000</AntiFakeCode>\\n                <InvoiceCode>44031860107</InvoiceCode>\\n                <PayeeRegisterNo>914403002794492700</PayeeRegisterNo>\\n                <PayerRegisterNo>91440300MA5EXWHW6F</PayerRegisterNo>\\n                <InvoiceNumber>9267581</InvoiceNumber>\\n                <InvoiceDate>2018-09-20</InvoiceDate>\\n                <PayerName>深圳市xxxx有限公司</PayerName>\\n                <SumAmount>￥220.00</SumAmount>\\n            </Content>\\n            <Index>1</Index>\\n        </Results>\\n        <OrgHeight>1417</OrgHeight>\\n        <Height>1417</Height>\\n        <Count>1</Count>\\n        <Width>594</Width>\\n    </Data>\\n</RecognizeTicketInvoiceResponse>","errorExample":""}]',
            'title' => '增值税发票卷票识别',
            'description' => '## 功能描述'."\n"
                .'增值税发票卷票识别能力支持对卷票上包括价税合计、发票代码、发票号码、合计税额、合计金额、密码区、开票日期、税率、购买方识别号、销售方识别号等结构化识别。'."\n"
                ."\n"
                .'> - 增值税发票卷票识别接口仅识别发票中的文本内容，不支持辨别发票真伪。'."\n"
                .'- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeTicketInvoice)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                ."\n"
                .'- 发票验真：智能识别发票代码、号码、开具金额、开票日期四个关键字段，以便快速接入税务机关发票查验平台进行真伪查验，有效降低人力成本，控制业务风险。'."\n"
                .'- 账单记录：对发票金额、开票日期等信息进行自动识别和录入，应用于理财记账场景，帮助用户快速录入账单信息，降低用户输入成本，提升使用体验。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                ."\n"
                .'- 全字段识别：支持对值税发票卷票关键字段的结构化识别，能够满足财税报销等场景中对票据字段的识别需求。'."\n"
                .'- 节约成本：识别发票信息后，根据需求录入发票信息，有效降低用户输入成本，提升用户使用体验。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeTicketInvoice?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeTicketInvoice%2FRecognizeTicketInvoice1.png%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[增值税发票卷票识别示例代码](~~600159~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP。'."\n"
                .'- 图像大小：不超过4 MB。'."\n"
                .'- 图像分辨率：大于15×15像素，小于4096×4096像素。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于增值税发票卷票识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeTicketInvoice)。',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的增值税发票卷票识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[增值税发票卷票识别示例代码](~~600159~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于增值税发票卷票识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeQuotaInvoice' => [
            'summary' => '本文介绍定额发票识别RecognizeQuotaInvoice的语法及示例。',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ImageURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeQuotaInvoice/RecognizeQuotaInvoice1.jpg',
                        'isFileTransferUrl' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BC4C12D0-7FD3-419A-B997-A91212DF6D82',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Angle' => [
                                        'description' => '票据被旋转的角度。范围为0~360，0表示向上，90表示向右，180表示向下，270度表示向左。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'Height' => [
                                        'description' => '票据旋转后的高度。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '624',
                                    ],
                                    'Width' => [
                                        'description' => '票据旋转后的宽度。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '865',
                                    ],
                                    'OrgHeight' => [
                                        'description' => '原图高度。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '610',
                                    ],
                                    'OrgWidth' => [
                                        'description' => '原图宽度。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '855',
                                    ],
                                    'Content' => [
                                        'description' => '识别内容。',
                                        'type' => 'object',
                                        'properties' => [
                                            'SumAmount' => [
                                                'description' => '大写金额。',
                                                'type' => 'string',
                                                'example' => '壹拾元整',
                                            ],
                                            'InvoiceCode' => [
                                                'description' => '发票代码。',
                                                'type' => 'string',
                                                'example' => '144031800103',
                                            ],
                                            'InvoiceNo' => [
                                                'description' => '发票号码。',
                                                'type' => 'string',
                                                'example' => '40637706',
                                            ],
                                            'InvoiceAmount' => [
                                                'description' => '小写金额。',
                                                'type' => 'string',
                                                'example' => '10',
                                            ],
                                            'InvoiceDetails' => [
                                                'description' => '发票代码解析。',
                                                'type' => 'string',
                                                'example' => '税务局代码：国税，行政区划代码：深圳市，年份：2018，发票行业代码：None，发票类别代码：None，金额版：万元版，批次号：03',
                                            ],
                                        ],
                                    ],
                                    'KeyValueInfos' => [
                                        'description' => '位置信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '1',
                                            'type' => 'object',
                                            'properties' => [
                                                'Key' => [
                                                    'description' => '被识别字段名称。',
                                                    'type' => 'string',
                                                    'example' => '大写金额',
                                                ],
                                                'Value' => [
                                                    'description' => '被识别字段的值。',
                                                    'type' => 'string',
                                                    'example' => '壹拾元整',
                                                ],
                                                'ValuePositions' => [
                                                    'description' => '被识别字段位置信息。四个角的坐标顺时针排列。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '1',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'X' => [
                                                                'description' => '矩形框X坐标。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '544',
                                                            ],
                                                            'Y' => [
                                                                'description' => '矩形框Y坐标。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '387',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ValueScore' => [
                                                    'description' => '被识别字段**Value**值置信度，范围0~100。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '100',
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
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BC4C12D0-7FD3-419A-B997-A91212DF6D82\\",\\n  \\"Data\\": {\\n    \\"Angle\\": 1,\\n    \\"Height\\": 624,\\n    \\"Width\\": 865,\\n    \\"OrgHeight\\": 610,\\n    \\"OrgWidth\\": 855,\\n    \\"Content\\": {\\n      \\"SumAmount\\": \\"壹拾元整\\",\\n      \\"InvoiceCode\\": \\"144031800103\\",\\n      \\"InvoiceNo\\": \\"40637706\\",\\n      \\"InvoiceAmount\\": \\"10\\",\\n      \\"InvoiceDetails\\": \\"税务局代码：国税，行政区划代码：深圳市，年份：2018，发票行业代码：None，发票类别代码：None，金额版：万元版，批次号：03\\"\\n    },\\n    \\"KeyValueInfos\\": [\\n      {\\n        \\"Key\\": \\"大写金额\\",\\n        \\"Value\\": \\"壹拾元整\\",\\n        \\"ValuePositions\\": [\\n          {\\n            \\"X\\": 544,\\n            \\"Y\\": 387\\n          }\\n        ],\\n        \\"ValueScore\\": 100\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeQuotaInvoiceResponse>\\n    <RequestId>BC4C12D0-7FD3-419A-B997-A91212DF6D82</RequestId>\\n    <Data>\\n        <OrgWidth>855</OrgWidth>\\n        <Angle>1</Angle>\\n        <KeyValueInfos>\\n            <ValuePositions>\\n                <X>544</X>\\n                <Y>387</Y>\\n            </ValuePositions>\\n            <ValuePositions>\\n                <X>544</X>\\n                <Y>443</Y>\\n            </ValuePositions>\\n            <ValuePositions>\\n                <X>308</X>\\n                <Y>443</Y>\\n            </ValuePositions>\\n            <ValuePositions>\\n                <X>308</X>\\n                <Y>387</Y>\\n            </ValuePositions>\\n            <Value>壹拾元整</Value>\\n            <ValueScore>100</ValueScore>\\n            <Key>大写金额</Key>\\n        </KeyValueInfos>\\n        <KeyValueInfos>\\n            <ValuePositions>\\n                <X>310</X>\\n                <Y>237</Y>\\n            </ValuePositions>\\n            <ValuePositions>\\n                <X>575</X>\\n                <Y>234</Y>\\n            </ValuePositions>\\n            <ValuePositions>\\n                <X>576</X>\\n                <Y>259</Y>\\n            </ValuePositions>\\n            <ValuePositions>\\n                <X>311</X>\\n                <Y>262</Y>\\n            </ValuePositions>\\n            <Value>144031800103</Value>\\n            <ValueScore>100</ValueScore>\\n            <Key>发票代码</Key>\\n        </KeyValueInfos>\\n        <KeyValueInfos>\\n            <ValuePositions>\\n                <X>480</X>\\n                <Y>298</Y>\\n            </ValuePositions>\\n            <ValuePositions>\\n                <X>480</X>\\n                <Y>321</Y>\\n            </ValuePositions>\\n            <ValuePositions>\\n                <X>309</X>\\n                <Y>321</Y>\\n            </ValuePositions>\\n            <ValuePositions>\\n                <X>309</X>\\n                <Y>298</Y>\\n            </ValuePositions>\\n            <Value>40637706</Value>\\n            <ValueScore>100</ValueScore>\\n            <Key>发票号码</Key>\\n        </KeyValueInfos>\\n        <KeyValueInfos>\\n            <Value/>\\n            <ValueScore>100</ValueScore>\\n            <Key>小写金额</Key>\\n        </KeyValueInfos>\\n        <KeyValueInfos>\\n            <ValuePositions>\\n                <X>310</X>\\n                <Y>237</Y>\\n            </ValuePositions>\\n            <ValuePositions>\\n                <X>575</X>\\n                <Y>234</Y>\\n            </ValuePositions>\\n            <ValuePositions>\\n                <X>576</X>\\n                <Y>259</Y>\\n            </ValuePositions>\\n            <ValuePositions>\\n                <X>311</X>\\n                <Y>262</Y>\\n            </ValuePositions>\\n            <Value>税务局代码：国税，行政区划代码：深圳市，年份：2018，发票行业代码：None，发票类别代码：None，金额版：万元版，批次号：03</Value>\\n            <ValueScore>100</ValueScore>\\n            <Key>发票代码解析</Key>\\n        </KeyValueInfos>\\n        <Content>\\n            <InvoiceDetails>{\\"批次号\\":\\"03\\",\\"年份\\":\\"2018\\",\\"税务局代码\\":\\"国税\\",\\"发票行业代码\\":\\"None\\",\\"金额版\\":\\"万元版\\",\\"行政区划代码\\":\\"深圳市\\",\\"发票类别代码\\":\\"None\\"}</InvoiceDetails>\\n            <InvoiceCode>144031800103</InvoiceCode>\\n            <InvoiceNo>40637706</InvoiceNo>\\n            <InvoiceAmount/>\\n            <SumAmount>壹拾元整</SumAmount>\\n        </Content>\\n        <OrgHeight>610</OrgHeight>\\n        <Height>624</Height>\\n        <Width>865</Width>\\n    </Data>\\n</RecognizeQuotaInvoiceResponse>","errorExample":""}]',
            'title' => '定额发票识别',
            'description' => '## 功能描述'."\n"
                .'定额发票识别能力可以对定额发票上的发票号码、发票代码、发票金额进行结构化识别。'."\n"
                ."\n"
                .'> - 定额发票识别接口仅识别发票中的文本内容，不支持辨别发票真伪。'."\n"
                .'- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeQuotaInvoice)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                ."\n"
                .'- 财税报销：识别录入各类定额发票票面关键信息，应用于税务核算及内部报销场景，有效减少人工核算工作量，简化报销流程，实现财务报销的自动化。'."\n"
                .'- 账单记录：识别提取发票金额信息，应用于理财记账场景，快速录入账单信息，有效降低用户输入成本，提升用户使用体验。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                ."\n"
                .'- 实现自动化：有效减少人工核算工作量，简化报销流程，实现财务报销的自动化。'."\n"
                .'- 节约成本：快速录入账单信息，有效降低用户输入成本，提升用户使用体验。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeQuotaInvoice?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeQuotaInvoice%2FRecognizeQuotaInvoice1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPEG、JPG、PNG、BMP。'."\n"
                .'- 图像大小：不超过4 MB。'."\n"
                .'- 图像分辨率：大于15×15像素，小于4096×4096像素。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于定额发票识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeQuotaInvoice)。',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的定额发票识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于定额发票识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'RecognizeVideoCharacter' => [
            'summary' => '本文介绍RecognizeVideoCharacter视频文字识别的语法及示例。',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'VideoURL',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '视频文件地址',
                        'description' => '视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/RecognizeVideoCharacter/xxxx.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '1',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D3F5BA69-79C4-46A4-B02B-58C4EEBC4C33',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。'."\n"
                                    .'该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'Width' => [
                                        'description' => '视频宽度分辨率，单位像素。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1920',
                                    ],
                                    'Height' => [
                                        'description' => '视频高度分辨率，单位像素。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1080',
                                    ],
                                    'Frames' => [
                                        'title' => '视频帧的集合，空信息的帧不列出。',
                                        'description' => '视频帧的集合，空信息的帧不展示。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Timestamp' => [
                                                    'title' => '帧时间戳时间戳，单位秒。',
                                                    'description' => '帧时间戳，单位毫秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '6124533574',
                                                ],
                                                'Elements' => [
                                                    'description' => '文字区域元素列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Score' => [
                                                                'title' => '文字区域概率，概率值的范围为[0.0, 1.0]',
                                                                'description' => '文字区域概率，概率值的范围为\\[0.0,1.0]。',
                                                                'type' => 'number',
                                                                'format' => 'float',
                                                                'example' => '0.99',
                                                            ],
                                                            'Text' => [
                                                                'title' => '文字内容',
                                                                'description' => '文字内容。',
                                                                'type' => 'string',
                                                                'example' => '在桃花盛开的地方',
                                                            ],
                                                            'TextRectangles' => [
                                                                'description' => '文字区域位置信息。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'Angle' => [
                                                                            'title' => '文字区域角度，角度范围[0, 360]',
                                                                            'description' => '文字区域角度，角度范围\\[-180, 180]。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                            'example' => '-90',
                                                                        ],
                                                                        'Left' => [
                                                                            'title' => '文字区域左上角x坐标',
                                                                            'description' => '文字区域左上角X坐标。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                            'example' => '213',
                                                                        ],
                                                                        'Top' => [
                                                                            'title' => '文字区域左上角y坐标',
                                                                            'description' => '文字区域左上角Y坐标。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                            'example' => '98',
                                                                        ],
                                                                        'Width' => [
                                                                            'title' => '文字区域宽度',
                                                                            'description' => '文字区域宽度，单位像素。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                            'example' => '46',
                                                                        ],
                                                                        'Height' => [
                                                                            'title' => '文字区域高度',
                                                                            'description' => '文字区域高度，单位像素。',
                                                                            'type' => 'integer',
                                                                            'format' => 'int64',
                                                                            'example' => '213',
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
                                    'InputFile' => [
                                        'title' => '对应的输入OSS文件 (格式oss://{bucketName}/{object})',
                                        'description' => '输入视频文件OSS地址。',
                                        'type' => 'string',
                                        'example' => 'oss://my-bucket/a/b/c.mp4',
                                    ],
                                ],
                            ],
                            'Message' => [
                                'description' => '提交异步任务后的提示信息。',
                                'type' => 'string',
                                'example' => '该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ParameterError',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AuthFailed',
                        'errorMessage' => 'An error occurred while performing authorization. Please check your RAM configuration.',
                    ],
                ],
                408 => [
                    [
                        'errorCode' => 'Timeout',
                        'errorMessage' => 'The request has timed out.',
                    ],
                ],
                503 => [
                    [
                        'errorCode' => 'ServiceUnavailable',
                        'errorMessage' => 'The service is unavailable.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D3F5BA69-79C4-46A4-B02B-58C4EEBC4C33\\",\\n  \\"Data\\": {\\n    \\"Width\\": 1920,\\n    \\"Height\\": 1080,\\n    \\"Frames\\": [\\n      {\\n        \\"Timestamp\\": 6124533574,\\n        \\"Elements\\": [\\n          {\\n            \\"Score\\": 0.99,\\n            \\"Text\\": \\"在桃花盛开的地方\\",\\n            \\"TextRectangles\\": [\\n              {\\n                \\"Angle\\": -90,\\n                \\"Left\\": 213,\\n                \\"Top\\": 98,\\n                \\"Width\\": 46,\\n                \\"Height\\": 213\\n              }\\n            ]\\n          }\\n        ]\\n      }\\n    ],\\n    \\"InputFile\\": \\"oss://my-bucket/a/b/c.mp4\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<RecognizeVideoCharacterResponse>\\n    <RequestId>D3F5BA69-79C4-46A4-B02B-58C4EEBC4C33</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</RecognizeVideoCharacterResponse>","errorExample":""}]',
            'title' => '视频文字识别',
            'description' => '## 功能描述'."\n"
                .'视频文字识别能力可以实现对输入视频的结构化处理，返回对应的文字内容、文字区域坐标及时间等信息。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=ocr&children=RecognizeVideoCharacter)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                .'支持多种视频格式：支持AVI、MP4、H264编码格式。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[文字识别服务](https://vision.aliyun.com/ocr)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_ocr_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/ocr/2019-12-30/RecognizeVideoCharacter?lang=JAVA&sdkStyle=dara&params=%7B%22VideoURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Focr%2FRecognizeVideoCharacter%2FRecognizeVideoCharacter1.mp4%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为文字识别（ocr）的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 视频格式：AVI、MP4、H264。'."\n"
                .'- 视频大小：小于20 MB。'."\n"
                .'- 视频时长：小于60秒。'."\n"
                .'- 视频帧率：不大于35帧。'."\n"
                .'- 视频分辨率：大于20×20像素，小于4096×4096像素。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于视频文字识别的计费方式及报价，请参见[计费介绍](~~202631~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口。'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用RecognizeVideoCharacter接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI文字识别类目下的视频文字识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为文字识别（ocr）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。'."\n",
            'extraInfo' => '## 错误码'."\n"
                .'关于视频文字识别的错误码，详情请参见[常见错误码](~~146772~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'ocr.cn-shanghai.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Linkcard',
        'version' => '2021-05-20',
    ],
    'directories' => [
        [
            'id' => 124178,
            'title' => '卡',
            'type' => 'directory',
            'children' => [
                'Renew',
                'StopSingleCard',
                'ResumeSingleCard',
                'RebindResumeSingleCard',
                'ForceActivation',
                'SetCardStopRule',
                'UpdateAutoRechargeSwitch',
                'GetCredentialPoolStatistics',
                'GetCardFlowInfo',
                'GetCardDetail',
                'ListCardInfo',
                'ListOrder',
            ],
        ],
        [
            'id' => 170671,
            'title' => '定向服务',
            'type' => 'directory',
            'children' => [
                'AddDirectionalCard',
                'AddDirectionalGroup',
                'BatchAddDirectionalAddress',
                'ListDirectionalAddress',
                'ListDirectionalDetail',
                'VerifyIotCard',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'AddTagsToCard',
                'GetSimCardStateDistribution',
                'AddDirectionalAddress',
                'DeleteDirectionalAddress',
                'DeleteDirectionalGroup',
                'GetCardStatusStatistics',
                'GetCardRealStatus',
                'GetCardLatestFlow',
                'AddCardToDirectionalGroup',
                'GetRealNameStatus',
                'SendMessage',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'Renew' => [
            'summary' => '卡的套餐续订和叠加包订购，仅适用于单卡套餐和同档位池套餐（统付池套餐请通过控制台进行扩池和购功能费）。',
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
                    'name' => 'ApiProduct',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '接口Code。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'linkcard',
                    ],
                ],
                [
                    'name' => 'ApiRevision',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '接口版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-05-20',
                    ],
                ],
                [
                    'name' => 'Iccid',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在物联网SIM服务控制台的卡管理页面，查看ICCID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '89860321******15668',
                    ],
                ],
                [
                    'name' => 'RechargeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '充值类型。'."\n"
                            ."\n"
                            .'- STANDARD：续订套餐。'."\n"
                            ."\n"
                            .'- OVERLAY ：订购叠加包。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'STANDARD',
                    ],
                ],
                [
                    'name' => 'SerialNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义的订单编号，编号需唯一且保持幂等性。'."\n"
                            ."\n"
                            .'如果您的充值，涉及自有平台的订单管理，如给下游客户充值等，您可填入自有平台已生成的外部订单编号，该接口调用成功后，会生成一个订单编号（OrderNo）。该参数可以方便您将生成的订单编号与外部订单号关联起来。如果非此场景，你可填入任意正整数，例如0。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12345678',
                    ],
                ],
                [
                    'name' => 'OfferCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '充值类型为订购叠加包时需填写。'."\n"
                            ."\n"
                            .'具体Code请咨询技术对接人员。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'COM***0203',
                    ],
                ],
                [
                    'name' => 'BuyNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订购份数。根据物联网卡本身的套餐类型选择订购份数。'."\n"
                            .'- 续订月套餐：支持1、2、3、6、9、12。'."\n"
                            ."\n"
                            .'- 续订年套餐：支持1、2、3。'."\n"
                            ."\n"
                            .'- 订购叠加包：支持1、2、3。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12',
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
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => '系统异常',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回的订单编号数据。',
                                'type' => 'object',
                                'properties' => [
                                    'OrderNo' => [
                                        'description' => '接口调用成功后生成的订单编号。',
                                        'type' => 'string',
                                        'example' => '21450******0275',
                                    ],
                                    'SerialNo' => [
                                        'description' => '自定义的订单编号（SerialNo）。',
                                        'type' => 'string',
                                        'example' => '12345678',
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
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CardDestroy',
                        'errorMessage' => 'The card do not exist or destroy.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"OrderNo\\": \\"21450******0275\\",\\n    \\"SerialNo\\": \\"12345678\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RenewResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Data>\\n        <OrderNo>21450******0275</OrderNo>\\n        <SerialNo>12345678</SerialNo>\\n    </Data>\\n</RenewResponse>","errorExample":""}]',
            'title' => '充值',
            'description' => '## 使用限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。'."\n"
                ."\n"
                .'> RAM用户共享阿里云账号配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
        ],
        'StopSingleCard' => [
            'summary' => '将状态为“使用中”的单卡进行自主停用。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的卡管理页面，查看ICCID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '89860321******15668',
                    ],
                ],
                [
                    'name' => 'OptMsisdns',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '是否对子卡进行操作，填入子卡的MSISDN。'."\n"
                            ."\n"
                            .'- 普通单网卡无需传入此参数。'."\n"
                            .'- 虚拟运营商：'."\n"
                            .'    - 如果传入该参数，则对指定的子卡进行操作。'."\n"
                            .'    - 如果不传入该参数，则对所有子卡进行操作。',
                        'type' => 'array',
                        'items' => [
                            'description' => '子卡的MSISDN。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '141******1111',
                        ],
                        'required' => false,
                        'example' => '["1112******826","1112******827"] ',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '执行结果。'."\n"
                                    ."\n"
                                    .'- **true**：执行成功。'."\n"
                                    ."\n"
                                    .'- **false**：执行失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。'."\n",
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => '系统异常',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.	',
                            ],
                            'Code' => [
                                'description' => '接口返回码：'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'linkcard.check.IccidCanNotEmpty',
                        'errorMessage' => 'Iccid cannot be empty.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CardDestroy',
                        'errorMessage' => 'The card do not exist or destroy.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\\\t\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<StopSingleCardResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n</StopSingleCardResponse>","errorExample":""}]',
            'title' => '卡的主动停用',
            'description' => '## 限制说明'."\n"
                ."\n\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。'."\n"
                ."\n"
                .'> RAM用户共享阿里云账号配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ResumeSingleCard' => [
            'summary' => '将状态为“主动停用”、“大量停用”的单卡操作为“复用”。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的卡管理页面查看ICCID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '89860321******15668',
                    ],
                ],
                [
                    'name' => 'OptMsisdns',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '是否对子卡进行操作，填入子卡的MSISDN。'."\n"
                            ."\n"
                            .'- 普通单网卡无需传入此参数。'."\n"
                            .'- 虚拟运营商：'."\n"
                            .'    - 如果传入该参数，则对指定的子卡进行操作。'."\n"
                            .'    - 如果不传入该参数，则对所有子卡进行操作。',
                        'type' => 'array',
                        'items' => [
                            'description' => '子卡的MSISDN。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '141******1111',
                        ],
                        'required' => false,
                        'example' => '["111******6826","11*******6827"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '执行结果。'."\n"
                                    ."\n"
                                    .'- **true**：执行成功。'."\n"
                                    ."\n"
                                    .'- **false**：执行失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => '系统异常',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.	',
                            ],
                            'Code' => [
                                'description' => '接口返回码：'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'linkcard.check.IccidCanNotEmpty',
                        'errorMessage' => 'Iccid cannot be empty.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\\\t\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<ResumeSingleCardResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n</ResumeSingleCardResponse>","errorExample":""}]',
            'title' => '卡的主动复用',
            'description' => '## 限制说明'."\n"
                ."\n\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。'."\n"
                ."\n"
                .'> RAM用户共享阿里云账号配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。'."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RebindResumeSingleCard' => [
            'summary' => '将状态为“换绑停用”的单卡操作为“换绑复用”。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的卡管理页面查看ICCID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '89860321******15668',
                    ],
                ],
                [
                    'name' => 'OptMsisdns',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '是否对子卡进行操作，填入子卡的MSISDN。'."\n"
                            ."\n"
                            .'- 普通单网卡无需传入此参数。'."\n"
                            .'- 虚拟运营商：'."\n"
                            .'    - 如果传入该参数，则对指定的子卡进行操作。'."\n"
                            .'    - 如果不传入该参数，则对所有子卡进行操作。',
                        'type' => 'array',
                        'items' => [
                            'description' => '子卡的MSISDN。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '141******1111',
                        ],
                        'required' => false,
                        'example' => ' ["1112******826","1112******827"] ',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '执行结果。'."\n"
                                    ."\n"
                                    .'- **true**：执行成功。'."\n"
                                    ."\n"
                                    .'- **false**：执行失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。'."\n",
                                'type' => 'string',
                                'example' => '系统异常',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'Iccid cannot be empty.	',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'linkcard.check.IccidCanNotEmpty',
                        'errorMessage' => 'Iccid cannot be empty.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CardDestroy',
                        'errorMessage' => 'The card do not exist or destroy.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"Iccid cannot be empty.\\\\t\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<RebindResumeSingleCardResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n</RebindResumeSingleCardResponse>","errorExample":""}]',
            'title' => '卡的换绑复用',
            'description' => '## 使用说明'."\n"
                ."\n\n"
                .'物联网卡与设备是一一对应关系，在物联网卡首次插入设备通电使用产生流量时，就与设备进行了绑定。如果将卡更换至其他设备中使用，将导致卡被锁定，用户可以使用此接口进行解卡。'."\n"
                ."\n",
            'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ForceActivation' => [
            'summary' => '同档位套餐的卡强制激活，实现共享流量扩池。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的卡管理页面查看ICCID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '89860321******15668',
                    ],
                ],
                [
                    'name' => 'DateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '套餐类型。'."\n"
                            ."\n"
                            .'- **sameflowcard**：同档位通用流量套餐。'."\n"
                            ."\n"
                            .'- **directional_sameflowcard**：同档位定向流量套餐。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'sameflowcard',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '执行结果。'."\n"
                                    ."\n"
                                    .'- **true**：执行成功。'."\n"
                                    ."\n"
                                    .'- **false**：执行失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => '系统异常',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'linkcard.check.ForceActivationSameFlowCard',
                        'errorMessage' => 'Only cards in the same flow support forced activation.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CardDestroy',
                        'errorMessage' => 'The card do not exist or destroy.',
                    ],
                    [
                        'errorCode' => 'linkcard.check.OnlyUnusedCanForceActivation',
                        'errorMessage' => 'Only unused cards support forced activation.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<ForceActivationResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n</ForceActivationResponse>","errorExample":""}]',
            'title' => '卡的强制激活',
            'description' => '## 使用限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。'."\n"
                ."\n"
                .'> RAM用户共享阿里云账号配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
        ],
        'SetCardStopRule' => [
            'summary' => '设置卡的达量停用规则，仅支持同档位池套餐和统付池套餐。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的卡管理页面查看ICCID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '89860321******15668',
                    ],
                ],
                [
                    'name' => 'FlowLimit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '达量停用的数值，仅支持正整数，单位：MB。'."\n"
                            ."\n"
                            .'当月流量达到此数值时将自动停用，可主动复用。'."\n"
                            ."\n\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'AutoRestore',
                    'in' => 'query',
                    'schema' => [
                        'description' => '达量停用后，次月是否自动复用。'."\n"
                            ."\n"
                            .'- true（默认值）：次月自动复用。'."\n"
                            ."\n"
                            .'- false：次月不自动复用。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '执行结果。'."\n"
                                    ."\n"
                                    .'- **true**：执行成功。'."\n"
                                    ."\n"
                                    .'- **false**：执行失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => '系统异常',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'linkcard.check.RuleMaxValueLimit',
                        'errorMessage' => 'The maximum value of Rule must be less than 9007199254740991.',
                    ],
                    [
                        'errorCode' => 'linkcard.check.RuleMustBePositiveInteger',
                        'errorMessage' => 'The valid values of Rule are positive integers and zero.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<SetCardStopRuleResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n</SetCardStopRuleResponse>","errorExample":""}]',
            'title' => '设置卡的达量停用规则',
            'description' => '## 使用限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。'."\n"
                ."\n"
                .'> RAM用户共享阿里云账号配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
        ],
        'UpdateAutoRechargeSwitch' => [
            'summary' => '该接口用于开启或关闭卡的自动续费功能，仅适用于单卡套餐和同档位池套餐。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的卡管理页面查看ICCID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '89860321******15668',
                    ],
                ],
                [
                    'name' => 'Open',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动续费开关。'."\n"
                            ."\n"
                            .'- **true**：开启自动续费。'."\n"
                            ."\n"
                            .'- **false**：关闭自动续费。',
                        'type' => 'boolean',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '执行结果。'."\n"
                                    ."\n"
                                    .'- **true**：执行成功。'."\n"
                                    ."\n"
                                    .'- **false**：执行失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => '系统异常',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'linkcard.common.CardDestroy',
                        'errorMessage' => 'The card do not exist or destroy.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateAutoRechargeSwitchResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n</UpdateAutoRechargeSwitchResponse>","errorExample":""}]',
            'title' => 'UpdateAutoRechargeSwitch',
            'description' => '## 使用限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。'."\n"
                ."\n"
                .'> RAM用户共享阿里云账号配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
        ],
        'GetCredentialPoolStatistics' => [
            'summary' => '查询套餐凭证对应的池信息。',
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
                    'name' => 'Date',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的套餐流量使用详情的月份。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '202108',
                    ],
                ],
                [
                    'name' => 'CredentialNO',
                    'in' => 'query',
                    'schema' => [
                        'description' => '套餐凭证。获取方法如下：'."\n"
                            ."\n"
                            .'- 在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的**套餐凭证**页面，查看套餐凭证。'."\n"
                            ."\n"
                            .'- 调用接口[GetCardDetail](~~374328~~)，在返回参数中查看套餐凭证（CredentialNo）。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'CM-SF-M-2-12G',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => '系统异常',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- true：调用成功。'."\n"
                                    ."\n"
                                    .'- false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '套餐流量使用详情。',
                                'type' => 'object',
                                'properties' => [
                                    'PoolUsed' => [
                                        'description' => '当月已用流量。',
                                        'type' => 'string',
                                        'example' => '0KB',
                                    ],
                                    'CredentialNO' => [
                                        'description' => '套餐凭证。',
                                        'type' => 'string',
                                        'example' => 'CM-SF-M-2-12G',
                                    ],
                                    'PoolOutUsed' => [
                                        'description' => '当月套餐外流量。',
                                        'type' => 'string',
                                        'example' => '0KB',
                                    ],
                                    'PoolGrandTotalUsed' => [
                                        'description' => '套餐流量使用总量，仅统付池套餐显示该参数。',
                                        'type' => 'string',
                                        'example' => '6.00GB',
                                    ],
                                    'CredentialType' => [
                                        'description' => '套餐凭证类型。'."\n"
                                            ."\n"
                                            .'- 单卡套餐示例：CT-SC-M-1-30M（运营商-套餐类型-套餐周期-资费版本-流量包档位）。'."\n"
                                            ."\n"
                                            .'- 同档位池套餐示例：CM-SF-M-3-100M（运营商-套餐类型-套餐周期-资费版本-流量包档位）。'."\n"
                                            ."\n"
                                            .'- 统付池套餐示例：CU-UPG-M-2-池编号（运营商-套餐类型-套餐周期-资费版本-池编号）。',
                                        'type' => 'string',
                                        'example' => 'CT-SC-M-1-30M',
                                    ],
                                    'CardTotalNum' => [
                                        'description' => '套餐内总卡数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'PoolGrandTotal' => [
                                        'description' => '套餐总流量，仅统付池套餐显示该参数。',
                                        'type' => 'string',
                                        'example' => '12.00GB',
                                    ],
                                    'CardActiveNum' => [
                                        'description' => '套餐内的生效卡数（已激活且未停机未销户）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'EffectiveTotalFlow' => [
                                        'description' => '套餐总流量，仅同档位池套餐显示该参数。',
                                        'type' => 'string',
                                        'example' => '12.00GB',
                                    ],
                                    'EffectiveAvailableFlow' => [
                                        'description' => '套餐内可用余量，仅同档位池套餐显示该参数。',
                                        'type' => 'string',
                                        'example' => '6.00GB',
                                    ],
                                    'PoolAvaiable' => [
                                        'description' => '套餐内可用余量，仅统付池套餐显示该参数。',
                                        'type' => 'string',
                                        'example' => '6.00GB',
                                    ],
                                    'MonthFeatureFee' => [
                                        'description' => '月功能费份数，仅统付池套餐显示该参数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'CredentialInstanceId' => [
                                        'description' => '凭证实例ID。',
                                        'type' => 'string',
                                        'example' => '259****',
                                    ],
                                    'SmsUsed' => [
                                        'description' => '短信用量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'MonthUsedAmount' => [
                                        'description' => '月度流量使用总量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '3.00GB',
                                    ],
                                    'MonthExceedFee' => [
                                        'description' => '当月功能费超套份数。'."\n"
                                            ."\n"
                                            .'大于0代表功能费已超套；等于0或null代表未超套。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
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
                        'errorCode' => 'linkcard.check.TimeFormatError',
                        'errorMessage' => 'Time format error.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.BusinessProcessError',
                        'errorMessage' => 'A business processing exception occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PoolUsed\\": \\"0KB\\",\\n    \\"CredentialNO\\": \\"CM-SF-M-2-12G\\",\\n    \\"PoolOutUsed\\": \\"0KB\\",\\n    \\"PoolGrandTotalUsed\\": \\"6.00GB\\",\\n    \\"CredentialType\\": \\"CT-SC-M-1-30M\\",\\n    \\"CardTotalNum\\": 20,\\n    \\"PoolGrandTotal\\": \\"12.00GB\\",\\n    \\"CardActiveNum\\": 10,\\n    \\"EffectiveTotalFlow\\": \\"12.00GB\\",\\n    \\"EffectiveAvailableFlow\\": \\"6.00GB\\",\\n    \\"PoolAvaiable\\": \\"6.00GB\\",\\n    \\"MonthFeatureFee\\": 100,\\n    \\"CredentialInstanceId\\": \\"259****\\",\\n    \\"SmsUsed\\": 0,\\n    \\"MonthUsedAmount\\": 0,\\n    \\"MonthExceedFee\\": 200\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetCredentialPoolStatisticsResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <PoolUsed>0KB</PoolUsed>\\n        <CredentialNO>CM-SF-M-2-12G</CredentialNO>\\n        <PoolOutUsed>0KB</PoolOutUsed>\\n        <PoolGrandTotalUsed>6.00GB</PoolGrandTotalUsed>\\n        <CredentialType>CM-SF-M-2-12G</CredentialType>\\n        <CardTotalNum>20</CardTotalNum>\\n        <PoolGrandTotal>12.00GB</PoolGrandTotal>\\n        <CardActiveNum>10</CardActiveNum>\\n        <EffectiveTotalFlow>12.00GB</EffectiveTotalFlow>\\n        <EffectiveAvailableFlow>6.00GB</EffectiveAvailableFlow>\\n        <PoolAvaiable>6.00GB</PoolAvaiable>\\n        <MonthFeatureFee>100</MonthFeatureFee>\\n        <CredentialInstanceId>259****</CredentialInstanceId>\\n        <SmsUsed>0</SmsUsed>\\n    </Data>\\n</GetCredentialPoolStatisticsResponse>","errorExample":""}]',
            'title' => '套餐凭证信息查询',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetCardFlowInfo' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的卡管理页面查看ICCID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '89860321******15668',
                    ],
                ],
                [
                    'name' => 'DateList',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '需要查询的月份。'."\n"
                            ."\n"
                            .'最多可以查询6个月，如果为空则获取最近两个月的数据。',
                        'type' => 'array',
                        'items' => [
                            'description' => '需要查询的月份。'."\n"
                                ."\n"
                                .'最多可以查询6个月，如果为空则获取最近两个月的数据。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["202110","202111"]',
                        ],
                        'required' => false,
                        'example' => '["202110","202111"]',
                        'maxItems' => 5,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Data' => [
                                'description' => '物联网卡的流量信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ListVendorDetail' => [
                                        'description' => '网络数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'NetWorkDelay' => [
                                                    'description' => '网络延迟，单位ms。',
                                                    'type' => 'string',
                                                    'example' => '20',
                                                ],
                                                'SignalStrength' => [
                                                    'description' => '信号强度。',
                                                    'type' => 'string',
                                                    'example' => '20',
                                                ],
                                                'Vendor' => [
                                                    'description' => '物联网卡的运营商。'."\n"
                                                        .'- CMCC：移动。'."\n"
                                                        .'- CUCC：联通。'."\n"
                                                        .'- CTCC：电信。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'CMCC',
                                                ],
                                                'UsedFlow' => [
                                                    'description' => '已用流量。',
                                                    'type' => 'string',
                                                    'example' => '100MB',
                                                ],
                                                'Ratio' => [
                                                    'description' => '用量占比。',
                                                    'type' => 'string',
                                                    'example' => '80%',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ListCardMonthFlow' => [
                                        'description' => '月用量详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'FlowCount' => [
                                                    'description' => '月总流量统计。',
                                                    'type' => 'string',
                                                    'example' => '200MB',
                                                ],
                                                'Month' => [
                                                    'description' => '流量月份。',
                                                    'type' => 'string',
                                                    'example' => '202112',
                                                ],
                                                'ListDayFlow' => [
                                                    'description' => '每日用量。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Flow' => [
                                                                'description' => '日用量。',
                                                                'type' => 'string',
                                                                'example' => '100MB',
                                                            ],
                                                            'Day' => [
                                                                'description' => '流量日期。',
                                                                'type' => 'string',
                                                                'example' => '20211201',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ListPackageDTO' => [
                                        'description' => '套餐包信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'EffectiveTime' => [
                                                    'description' => '套餐生效时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-03-20 23:59:59',
                                                ],
                                                'Remark' => [
                                                    'description' => '备注。',
                                                    'type' => 'string',
                                                    'example' => '备注内容',
                                                ],
                                                'PackageName' => [
                                                    'description' => '套餐名称。',
                                                    'type' => 'string',
                                                    'example' => '移动-单卡通用流量-月包-30M',
                                                ],
                                                'ExpireTime' => [
                                                    'description' => '套餐到期时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-04-30 23:59:59',
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
                        'errorCode' => 'linkcard.check.IccidCanNotEmpty',
                        'errorMessage' => 'Iccid cannot be empty.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CardDestroy',
                        'errorMessage' => 'The card do not exist or destroy.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CardNotExist',
                        'errorMessage' => 'The card does not exist.',
                    ],
                    [
                        'errorCode' => 'CardDisabled',
                        'errorMessage' => 'The SIM card has been permanently disabled.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"ListVendorDetail\\": [\\n      {\\n        \\"NetWorkDelay\\": \\"20\\",\\n        \\"SignalStrength\\": \\"20\\",\\n        \\"Vendor\\": \\"CMCC\\",\\n        \\"UsedFlow\\": \\"100MB\\",\\n        \\"Ratio\\": \\"80%\\"\\n      }\\n    ],\\n    \\"ListCardMonthFlow\\": [\\n      {\\n        \\"FlowCount\\": \\"200MB\\",\\n        \\"Month\\": \\"202112\\",\\n        \\"ListDayFlow\\": [\\n          {\\n            \\"Flow\\": \\"100MB\\",\\n            \\"Day\\": \\"20211201\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"ListPackageDTO\\": [\\n      {\\n        \\"EffectiveTime\\": \\"2022-03-20 23:59:59\\",\\n        \\"Remark\\": \\"备注内容\\",\\n        \\"PackageName\\": \\"移动-单卡通用流量-月包-30M\\",\\n        \\"ExpireTime\\": \\"2022-04-30 23:59:59\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetCardFlowInfoResponse>\\n    <Code>200</Code>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <ListVendorDetail>\\n            <NetWorkDelay>20</NetWorkDelay>\\n            <SignalStrength>20</SignalStrength>\\n            <Vendor>CMCC</Vendor>\\n        </ListVendorDetail>\\n        <ListCardMonthFlow>\\n            <FlowCount>200MB</FlowCount>\\n            <Month>202112</Month>\\n            <ListDayFlow>\\n                <Flow>100MB</Flow>\\n                <Day>20211201</Day>\\n            </ListDayFlow>\\n        </ListCardMonthFlow>\\n        <ListPackageDTO>\\n            <EffectiveTime>2022-03-20 23:59:59</EffectiveTime>\\n            <Remark>备注内容</Remark>\\n            <PackageName>移动-单卡通用流量-月包-30M</PackageName>\\n            <ExpireTime>2022-04-30 23:59:59</ExpireTime>\\n        </ListPackageDTO>\\n    </Data>\\n</GetCardFlowInfoResponse>","errorExample":""}]',
            'title' => '卡流量查询',
            'summary' => '查询卡的流量信息。',
            'description' => '## 限制说明'."\n"
                ."\n\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。'."\n"
                ."\n"
                .'> RAM用户共享阿里云账号配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetCardDetail' => [
            'summary' => '查询卡的详情信息。',
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
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的**卡管理页面**查看ICCID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '89860321******15668',
                    ],
                ],
                [
                    'name' => 'ShowPsim',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否展示子卡的详情信息，默认为否。'."\n"
                            ."\n"
                            .'- **true**：是。'."\n"
                            .'- **false**：否。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的实例ID。'."\n"
                            ."\n"
                            .'只有查询的物联网卡已销户时（即**DestroyCard**为**true**）需要填入该参数。'."\n"
                            ."\n"
                            .'您可以调用接口[ListCardInfo](~~425529~~)在返回参数中查看物联网卡的实例ID（VsimInstanceId）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '411****',
                    ],
                ],
                [
                    'name' => 'DestroyCard',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的物联网卡是否已销户，默认为否。'."\n"
                            ."\n"
                            .'- **true**：是。'."\n"
                            .'- **false**：否。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Data' => [
                                'description' => '物联网卡的详情信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ListPsimCards' => [
                                        'description' => '多网卡的子卡详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '多网卡的子卡详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '物联网卡的状态。'."\n"
                                                        ."\n"
                                                        .'- **10**：可测试。'."\n"
                                                        ."\n"
                                                        .'- **20**：未使用。'."\n"
                                                        ."\n"
                                                        .'- **30**：使用中。'."\n"
                                                        ."\n"
                                                        .'- **35**：已停用。'."\n"
                                                        ."\n"
                                                        .'- **40**：已停机。'."\n"
                                                        ."\n"
                                                        .'- **50**：已销户。',
                                                    'type' => 'string',
                                                    'example' => '35',
                                                ],
                                                'PrivateNetworkSegment' => [
                                                    'description' => '私网网段（定向卡）。',
                                                    'type' => 'string',
                                                    'example' => '*.2.*.4',
                                                ],
                                                'OsStatus' => [
                                                    'description' => '物联网卡的具体状态。'."\n"
                                                        ."\n"
                                                        .'- **10**：测试期。'."\n"
                                                        .'- **20**：静默期。'."\n"
                                                        .'- **100**：使用中。'."\n"
                                                        .'- **130**：测试期换绑停用。'."\n"
                                                        .'- **150**：部分使用中。'."\n"
                                                        .'- **200**：主动停用。'."\n"
                                                        .'- **300**：达量停用。'."\n"
                                                        .'- **400**：信控停用。'."\n"
                                                        .'- **500**：换绑停用。'."\n"
                                                        .'- **600**：实名停用。'."\n"
                                                        .'- **700**：异常停用。'."\n"
                                                        .'- **40**：已停机。'."\n"
                                                        .'- **50**：已销户。',
                                                    'type' => 'string',
                                                    'example' => '300',
                                                ],
                                                'CertifyStatus' => [
                                                    'description' => '实名认证状态。'."\n"
                                                        ."\n"
                                                        .'- **1**：未认证。'."\n"
                                                        ."\n"
                                                        .'- **2**：已认证。',
                                                    'type' => 'string',
                                                    'example' => '2',
                                                ],
                                                'ApnName' => [
                                                    'description' => 'APN名称。',
                                                    'type' => 'string',
                                                    'example' => 'cmiot',
                                                ],
                                                'PeriodAddFlow' => [
                                                    'description' => '周期累计流量。',
                                                    'type' => 'string',
                                                    'example' => '130.00MB',
                                                ],
                                                'Iccid' => [
                                                    'description' => '子卡的ICCID。',
                                                    'type' => 'string',
                                                    'example' => '89860321******15668',
                                                ],
                                                'Vendor' => [
                                                    'description' => '运营商。'."\n"
                                                        ."\n"
                                                        .'- **CMCC**：移动。'."\n"
                                                        ."\n"
                                                        .'- **CUCC**：联通。'."\n"
                                                        ."\n"
                                                        .'- **CTCC**：电信。',
                                                    'type' => 'string',
                                                    'example' => 'CMCC',
                                                ],
                                                'PeriodSmsUse' => [
                                                    'description' => '周期短信用量。',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'Imsi' => [
                                                    'description' => '子卡的IMSI。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '子卡的IMSI。',
                                                        'type' => 'string',
                                                        'example' => '460081937******',
                                                    ],
                                                ],
                                                'Msisdn' => [
                                                    'description' => '子卡的MSISDN。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '子卡的MSISDN。',
                                                        'type' => 'string',
                                                        'example' => '1411111******',
                                                    ],
                                                ],
                                                'OpenSms' => [
                                                    'description' => '短信功能开通情况。'."\n"
                                                        ."\n"
                                                        .' - **true**：开通。'."\n"
                                                        ."\n"
                                                        .'- **false**：关闭。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'Ip' => [
                                                    'description' => '物联网卡的IP地址。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '物联网卡的IP地址。',
                                                        'type' => 'string',
                                                        'example' => '1.1.*.*',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'VsimCardInfo' => [
                                        'description' => '物联网卡的详情。'."\n"
                                            ."\n"
                                            .'当查询多网卡时，展示虚拟卡信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Status' => [
                                                'description' => '物联网卡状态。'."\n"
                                                    ."\n"
                                                    .'- **10**：可测试。'."\n"
                                                    ."\n"
                                                    .'- **20**：未使用。'."\n"
                                                    ."\n"
                                                    .'- **30**：使用中。'."\n"
                                                    ."\n"
                                                    .'- **35**：已停用。'."\n"
                                                    ."\n"
                                                    .'- **40**：已停机。'."\n"
                                                    ."\n"
                                                    .'- **50**：已销户。',
                                                'type' => 'string',
                                                'example' => '35',
                                            ],
                                            'DataType' => [
                                                'description' => '流量类型。'."\n"
                                                    ."\n"
                                                    .'- **singlecard**：单卡通用流量。'."\n"
                                                    ."\n"
                                                    .'- **directionalcard**：单卡定向流量。'."\n"
                                                    ."\n"
                                                    .'- **sameflowcard**：同档位池共享流量。'."\n"
                                                    ."\n"
                                                    .'- **directional_sameflowcard**：同档位池共享定向流量。'."\n"
                                                    ."\n"
                                                    .'- **unityPayPool**：统付池通用流量。'."\n"
                                                    ."\n"
                                                    .'- **GREcard**：统付池定向流量。',
                                                'type' => 'string',
                                                'example' => 'sameflowcard',
                                            ],
                                            'CardLimitSpeedThreshold' => [
                                                'description' => '物联网卡达量限速阈值，单位为KB。（暂不支持）',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1024',
                                            ],
                                            'PeriodRestFlow' => [
                                                'description' => '周期剩余流量。',
                                                'type' => 'string',
                                                'example' => '130.00MB',
                                            ],
                                            'DirectionalGroupName' => [
                                                'description' => '定向分组名称。',
                                                'type' => 'string',
                                                'example' => '测试分组',
                                            ],
                                            'CredentialType' => [
                                                'description' => '套餐凭证类型。'."\n"
                                                    ."\n"
                                                    .'- 单卡套餐示例：CT-SC-M-1-30M（运营商-套餐类型-套餐周期-资费版本-流量包档位）。'."\n"
                                                    ."\n"
                                                    .'- 同档位池套餐示例：CM-SF-M-3-100M（运营商-套餐类型-套餐周期-资费版本-流量包档位）。'."\n"
                                                    ."\n"
                                                    .'- 统付池套餐示例：CU-UPG-M-2-池编号（运营商-套餐类型-套餐周期-资费版本-池编号）。',
                                                'type' => 'string',
                                                'example' => 'CT-SC-M-1-30M',
                                            ],
                                            'PeriodAddFlow' => [
                                                'description' => '周期累计流量。',
                                                'type' => 'string',
                                                'example' => '0KB',
                                            ],
                                            'DirectionalGroupId' => [
                                                'description' => '定向分组ID。',
                                                'type' => 'string',
                                                'example' => '22',
                                            ],
                                            'PeriodSmsUse' => [
                                                'description' => '周期短信用量。',
                                                'type' => 'string',
                                                'example' => '0',
                                            ],
                                            'OsStatus' => [
                                                'description' => '物联网卡的具体状态。'."\n"
                                                    ."\n"
                                                    .'- **10**：测试期。'."\n"
                                                    ."\n"
                                                    .'- **20**：静默期。'."\n"
                                                    ."\n"
                                                    .'- **100**：使用中。'."\n"
                                                    ."\n"
                                                    .'- **150**：部分使用中。'."\n"
                                                    ."\n"
                                                    .'- **200**：主动停用。'."\n"
                                                    ."\n"
                                                    .'- **300**：达量停用。'."\n"
                                                    ."\n"
                                                    .'- **400**：信控停用。'."\n"
                                                    ."\n"
                                                    .'- **500**：换绑停用。'."\n"
                                                    ."\n"
                                                    .'- **600**：实名停用。'."\n"
                                                    ."\n"
                                                    .'- **700**：异常停用。'."\n"
                                                    ."\n"
                                                    .'- **40**：已停机。'."\n"
                                                    ."\n"
                                                    .'- **50**：已销户。',
                                                'type' => 'string',
                                                'example' => '200',
                                            ],
                                            'NotifyId' => [
                                                'description' => '自动化规则的通知ID。',
                                                'type' => 'string',
                                                'example' => '11111',
                                            ],
                                            'DataLevel' => [
                                                'description' => '流量包档位。',
                                                'type' => 'string',
                                                'example' => '30MB',
                                            ],
                                            'TagList' => [
                                                'description' => '物联网卡的标签。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '标签列表。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TagName' => [
                                                            'description' => '标签名称。',
                                                            'type' => 'string',
                                                            'example' => '测试标签',
                                                        ],
                                                        'Id' => [
                                                            'description' => '标签ID。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '24',
                                                        ],
                                                    ],
                                                ],
                                                'example' => '测试标签',
                                            ],
                                            'AliyunOrderId' => [
                                                'description' => '物联网卡关联的订单编号。',
                                                'type' => 'string',
                                                'example' => '211519634******',
                                            ],
                                            'AliFee' => [
                                                'description' => '资费版本。',
                                                'type' => 'string',
                                                'example' => 'ali_2',
                                            ],
                                            'ActiveType' => [
                                                'description' => '激活方式。'."\n"
                                                    ."\n"
                                                    .'- **first_data_record**：首话单激活。'."\n"
                                                    ."\n"
                                                    .'- **carrier_status_push**：运营商状态推送激活。'."\n"
                                                    ."\n"
                                                    .'- **silence_expire**：静默期结束激活。'."\n"
                                                    ."\n"
                                                    .'- **manage**：手动激活。'."\n"
                                                    ."\n"
                                                    .'- **test_flow_depleted**：测试流量超套激活。',
                                                'type' => 'string',
                                                'example' => 'first_data_record',
                                            ],
                                            'IsAutoRecharge' => [
                                                'description' => '套餐是否自动续费。'."\n"
                                                    ."\n"
                                                    .'- **true**：是。'."\n"
                                                    ."\n"
                                                    .'- **false**：否。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'AutoLimitResume' => [
                                                'description' => '达量停用后，次月是否自动复用。'."\n"
                                                    ."\n"
                                                    .'- **true**：是。'."\n"
                                                    ."\n"
                                                    .'- **false**：否。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'CredentialInstanceId' => [
                                                'description' => '凭证实例ID。',
                                                'type' => 'string',
                                                'example' => '2622***',
                                            ],
                                            'CredentialLimitSpeedThreshold' => [
                                                'description' => '凭证达量限速阈值，单位为KB。（暂不支持）。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1024',
                                            ],
                                            'ExpireTime' => [
                                                'description' => '套餐到期时间。',
                                                'type' => 'string',
                                                'example' => '2022-04-30 23:59:59',
                                            ],
                                            'FlowThresholdUnit' => [
                                                'description' => '阈值流量单位。',
                                                'type' => 'string',
                                                'example' => 'KB',
                                            ],
                                            'ApnName' => [
                                                'description' => 'APN名称。',
                                                'type' => 'string',
                                                'example' => 'cmiot',
                                            ],
                                            'ActiveTime' => [
                                                'description' => '激活时间。',
                                                'type' => 'string',
                                                'example' => '2021-11-16 16:35:50',
                                            ],
                                            'CardLimitStopThreshold' => [
                                                'description' => '物联网卡达量停用阈值，单位为KB。（暂不支持）',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '20480',
                                            ],
                                            'Iccid' => [
                                                'description' => '物联网卡的ICCID。',
                                                'type' => 'string',
                                                'example' => '89860321******15668',
                                            ],
                                            'Vendor' => [
                                                'description' => '运营商。'."\n"
                                                    ."\n"
                                                    .'- **CMCC**：移动。'."\n"
                                                    ."\n"
                                                    .'- **CUCC**：联通。'."\n"
                                                    ."\n"
                                                    .'- **CTCC**：电信。'."\n"
                                                    ."\n"
                                                    .'- **VNO**：虚拟运营商。',
                                                'type' => 'string',
                                                'example' => 'CMCC',
                                            ],
                                            'Period' => [
                                                'description' => '套餐结算周期。'."\n"
                                                    ."\n"
                                                    .'- **1101**：月度。'."\n"
                                                    ."\n"
                                                    .'- **1103**：季度。'."\n"
                                                    ."\n"
                                                    .'- **1106**：半年度。'."\n"
                                                    ."\n"
                                                    .'- **1112**：年度。',
                                                'type' => 'string',
                                                'example' => '1101',
                                            ],
                                            'PrivateNetworkSegment' => [
                                                'description' => '私网网段（定向卡）。',
                                                'type' => 'string',
                                                'example' => '1.*.3.*',
                                            ],
                                            'OpenAccountTime' => [
                                                'description' => '开户时间。',
                                                'type' => 'string',
                                                'example' => '2021-11-29 16:12:14',
                                            ],
                                            'CertifyType' => [
                                                'description' => '认证方式。'."\n"
                                                    ."\n"
                                                    .'enterprise：企业认证。',
                                                'type' => 'string',
                                                'example' => 'enterprise',
                                            ],
                                            'SimType' => [
                                                'description' => 'SIM卡类型。'."\n"
                                                    ."\n"
                                                    .'- **nano**：插拔三切卡（消费级）。'."\n"
                                                    ."\n"
                                                    .'- **micro**：插拔双切卡（消费级）。'."\n"
                                                    ."\n"
                                                    .'- **normal**：插拔大卡（消费级）。'."\n"
                                                    ."\n"
                                                    .'- **simplus56**：贴片卡5*6（消费级）。'."\n"
                                                    ."\n"
                                                    .'- **simplus22**：贴片卡2*2（消费级）。'."\n"
                                                    ."\n"
                                                    .'- **industry-normal**：插拔大卡（工业级）。'."\n"
                                                    ."\n"
                                                    .'- **industry-micro**：插拔双切卡（工业级）。'."\n"
                                                    ."\n"
                                                    .'- **industry-nano**：插拔三切卡（工业级）。'."\n"
                                                    ."\n"
                                                    .'- **simplus**：贴片卡5*6（工业级）。'."\n"
                                                    ."\n"
                                                    .'- **industry-simplus22**：贴片卡2*2（工业级）。',
                                                'type' => 'string',
                                                'example' => 'nano',
                                            ],
                                            'CertifyStatus' => [
                                                'description' => '实名认证状态。'."\n"
                                                    ."\n"
                                                    .'- **1**：未认证。'."\n"
                                                    ."\n"
                                                    .'- **2**：已认证。',
                                                'type' => 'string',
                                                'example' => '2',
                                            ],
                                            'DeviceImei' => [
                                                'description' => '设备的IMEI号。',
                                                'type' => 'string',
                                                'example' => '11111111******',
                                            ],
                                            'VsimInstanceId' => [
                                                'description' => '物联网卡的InstanceId值。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '123456',
                                            ],
                                            'AutoRebindReuse' => [
                                                'description' => '自动换绑重用。'."\n"
                                                    ."\n"
                                                    .'- **true**：开。'."\n"
                                                    ."\n"
                                                    .'- **false**：关。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'CredentialNo' => [
                                                'description' => '套餐凭证。',
                                                'type' => 'string',
                                                'example' => 'CM-***-*-2-**M',
                                            ],
                                            'CredentialLimitStopThreshold' => [
                                                'description' => '凭证达量停用阈值。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '20480',
                                            ],
                                            'Imsi' => [
                                                'description' => '物联网卡的IMSI。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '物联网卡的IMSI。',
                                                    'type' => 'string',
                                                    'example' => '460081937******',
                                                ],
                                            ],
                                            'Msisdn' => [
                                                'description' => '物联网卡的MSISDN。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '物联网卡的MSISDN。',
                                                    'type' => 'string',
                                                    'example' => '1440993******',
                                                ],
                                            ],
                                            'OpenSms' => [
                                                'description' => '短信功能开通情况。'."\n"
                                                    ."\n"
                                                    .'- true：开通。'."\n"
                                                    ."\n"
                                                    .'- false：关闭。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'Ip' => [
                                                'description' => '物联网卡的IP地址。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '物联网卡的IP地址。',
                                                    'type' => 'string',
                                                    'example' => '190.*.*.*',
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
                        'errorCode' => 'linkcard.check.InstanceIdCanNotEmpty',
                        'errorMessage' => 'InstanceId cannot be empty.',
                    ],
                    [
                        'errorCode' => 'linkcard.check.IccidCanNotEmpty',
                        'errorMessage' => 'Iccid cannot be empty.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CardDestroy',
                        'errorMessage' => 'The card do not exist or destroy.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CardNotExist',
                        'errorMessage' => 'The card does not exist.',
                    ],
                    [
                        'errorCode' => 'CardDisabled',
                        'errorMessage' => 'The SIM card has been permanently disabled.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.BusinessProcessError',
                        'errorMessage' => 'A business processing exception occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"ListPsimCards\\": [\\n      {\\n        \\"Status\\": \\"35\\",\\n        \\"PrivateNetworkSegment\\": \\"*.2.*.4\\",\\n        \\"OsStatus\\": \\"300\\",\\n        \\"CertifyStatus\\": \\"2\\",\\n        \\"ApnName\\": \\"cmiot\\",\\n        \\"PeriodAddFlow\\": \\"130.00MB\\",\\n        \\"Iccid\\": \\"89860321******15668\\",\\n        \\"Vendor\\": \\"CMCC\\",\\n        \\"PeriodSmsUse\\": \\"0\\",\\n        \\"Imsi\\": [\\n          \\"460081937******\\"\\n        ],\\n        \\"Msisdn\\": [\\n          \\"1411111******\\"\\n        ],\\n        \\"OpenSms\\": true,\\n        \\"Ip\\": [\\n          \\"1.1.*.*\\"\\n        ]\\n      }\\n    ],\\n    \\"VsimCardInfo\\": {\\n      \\"Status\\": \\"35\\",\\n      \\"DataType\\": \\"sameflowcard\\",\\n      \\"CardLimitSpeedThreshold\\": 1024,\\n      \\"PeriodRestFlow\\": \\"130.00MB\\",\\n      \\"DirectionalGroupName\\": \\"测试分组\\",\\n      \\"CredentialType\\": \\"CT-SC-M-1-30M\\",\\n      \\"PeriodAddFlow\\": \\"0KB\\",\\n      \\"DirectionalGroupId\\": \\"22\\",\\n      \\"PeriodSmsUse\\": \\"0\\",\\n      \\"OsStatus\\": \\"200\\",\\n      \\"NotifyId\\": \\"11111\\",\\n      \\"DataLevel\\": \\"30MB\\",\\n      \\"TagList\\": [\\n        {\\n          \\"TagName\\": \\"测试标签\\",\\n          \\"Id\\": 24\\n        }\\n      ],\\n      \\"AliyunOrderId\\": \\"211519634******\\",\\n      \\"AliFee\\": \\"ali_2\\",\\n      \\"ActiveType\\": \\"first_data_record\\",\\n      \\"IsAutoRecharge\\": true,\\n      \\"AutoLimitResume\\": true,\\n      \\"CredentialInstanceId\\": \\"2622***\\",\\n      \\"CredentialLimitSpeedThreshold\\": 1024,\\n      \\"ExpireTime\\": \\"2022-04-30 23:59:59\\",\\n      \\"FlowThresholdUnit\\": \\"KB\\",\\n      \\"ApnName\\": \\"cmiot\\",\\n      \\"ActiveTime\\": \\"2021-11-16 16:35:50\\",\\n      \\"CardLimitStopThreshold\\": 20480,\\n      \\"Iccid\\": \\"89860321******15668\\",\\n      \\"Vendor\\": \\"CMCC\\",\\n      \\"Period\\": \\"1101\\",\\n      \\"PrivateNetworkSegment\\": \\"1.*.3.*\\",\\n      \\"OpenAccountTime\\": \\"2021-11-29 16:12:14\\",\\n      \\"CertifyType\\": \\"enterprise\\",\\n      \\"SimType\\": \\"nano\\",\\n      \\"CertifyStatus\\": \\"2\\",\\n      \\"DeviceImei\\": \\"11111111******\\",\\n      \\"VsimInstanceId\\": 123456,\\n      \\"AutoRebindReuse\\": false,\\n      \\"CredentialNo\\": \\"CM-***-*-2-**M\\",\\n      \\"CredentialLimitStopThreshold\\": 20480,\\n      \\"Imsi\\": [\\n        \\"460081937******\\"\\n      ],\\n      \\"Msisdn\\": [\\n        \\"1440993******\\"\\n      ],\\n      \\"OpenSms\\": true,\\n      \\"Ip\\": [\\n        \\"190.*.*.*\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetCardDetailResponse>\\n    <Code>200</Code>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>\\n        <ListPsimCards>\\n            <Status>35</Status>\\n            <PrivateNetworkSegment>*.2.*.4</PrivateNetworkSegment>\\n            <OsStatus>300</OsStatus>\\n            <CertifyStatus>2</CertifyStatus>\\n            <ApnName>cmiot</ApnName>\\n            <PeriodAddFlow>130.00MB</PeriodAddFlow>\\n            <Iccid>89860321******15668</Iccid>\\n            <Vendor>CMCC</Vendor>\\n            <PeriodSmsUse>0</PeriodSmsUse>\\n            <Imsi>460081937******</Imsi>\\n            <Msisdn>1411111******</Msisdn>\\n            <OpenSms>true</OpenSms>\\n            <Ip>1.1.*.*</Ip>\\n        </ListPsimCards>\\n        <VsimCardInfo>\\n            <Status>35</Status>\\n            <DataType>sameflowcard</DataType>\\n            <CardLimitSpeedThreshold>1024</CardLimitSpeedThreshold>\\n            <PeriodRestFlow>130.00MB</PeriodRestFlow>\\n            <DirectionalGroupName>测试分组</DirectionalGroupName>\\n            <CredentialType>CT-SC-M-1-30M</CredentialType>\\n            <PeriodAddFlow>0KB</PeriodAddFlow>\\n            <DirectionalGroupId>22</DirectionalGroupId>\\n            <PeriodSmsUse>0</PeriodSmsUse>\\n            <OsStatus>200</OsStatus>\\n            <NotifyId>11111</NotifyId>\\n            <DataLevel>30MB</DataLevel>\\n            <TagList>\\n                <TagName>测试标签</TagName>\\n                <Id>24</Id>\\n            </TagList>\\n            <AliyunOrderId>211519634******</AliyunOrderId>\\n            <AliFee>ali_2</AliFee>\\n            <ActiveType>first_data_record</ActiveType>\\n            <IsAutoRecharge>true</IsAutoRecharge>\\n            <AutoLimitResume>true</AutoLimitResume>\\n            <CredentialInstanceId>2622***</CredentialInstanceId>\\n            <CredentialLimitSpeedThreshold>1024</CredentialLimitSpeedThreshold>\\n            <ExpireTime>2022-04-30 23:59:59</ExpireTime>\\n            <FlowThresholdUnit>KB</FlowThresholdUnit>\\n            <ApnName>cmiot</ApnName>\\n            <ActiveTime>2021-11-16 16:35:50</ActiveTime>\\n            <CardLimitStopThreshold>20480</CardLimitStopThreshold>\\n            <Iccid>89860321******15668</Iccid>\\n            <Vendor>CMCC</Vendor>\\n            <Period>1101</Period>\\n            <PrivateNetworkSegment>1.*.3.*</PrivateNetworkSegment>\\n            <OpenAccountTime>2021-11-29 16:12:14</OpenAccountTime>\\n            <CertifyType>enterprise</CertifyType>\\n            <SimType>nano</SimType>\\n            <CertifyStatus>2</CertifyStatus>\\n            <DeviceImei>11111111******</DeviceImei>\\n            <VsimInstanceId>123456</VsimInstanceId>\\n            <AutoRebindReuse>false</AutoRebindReuse>\\n            <CredentialNo>CM-***-*-2-**M</CredentialNo>\\n            <CredentialLimitStopThreshold>20480</CredentialLimitStopThreshold>\\n            <Imsi>460081937******</Imsi>\\n            <Msisdn>1440993******</Msisdn>\\n            <OpenSms>true</OpenSms>\\n            <Ip>190.*.*.*</Ip>\\n        </VsimCardInfo>\\n    </Data>\\n</GetCardDetailResponse>","errorExample":""}]',
            'title' => '卡详情查询',
            'description' => '## 限制说明'."\n"
                ."\n\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。'."\n"
                ."\n"
                .'> RAM用户共享阿里云账号配额。',
            'requestParamsDescription' => ' 调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListCardInfo' => [
            'summary' => '查询卡列表。',
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
                    'name' => 'ActiveTimeEnd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的激活时间区间：结束时间。'."\n"
                            ."\n"
                            .'格式为：`yyyy-MM-dd HH:mm:ss`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-05-25 23:59:59',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的数量，支持10、15、25、40。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)的**卡管理页面**查看ICCID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '89860321******15668',
                    ],
                ],
                [
                    'name' => 'CredentialNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '套餐凭证。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CM-***-*-2-**M',
                    ],
                ],
                [
                    'name' => 'Vendor',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运营商。'."\n"
                            ."\n"
                            .'- **CMCC**：移动。'."\n"
                            ."\n"
                            .'- **CUCC**：联通。'."\n"
                            ."\n"
                            .'- **CTCC**：电信。'."\n"
                            ."\n"
                            .'- **VNO**：虚拟运营商。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CMCC',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询页数，需结合**PageSize**参数组合使用。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Msisdn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的MSISDN。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1440993******',
                    ],
                ],
                [
                    'name' => 'AliyunOrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡关联的订单编号。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '211519634******',
                    ],
                ],
                [
                    'name' => 'AliFee',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资费版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ali_2',
                    ],
                ],
                [
                    'name' => 'Period',
                    'in' => 'query',
                    'schema' => [
                        'description' => '套餐结算周期。'."\n"
                            ."\n"
                            .'- **1101**：月度。'."\n"
                            ."\n"
                            .'- **1103**：季度。'."\n"
                            ."\n"
                            .'- **1106**：半年度。'."\n"
                            ."\n"
                            .'- **1112**：年度。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1101',
                    ],
                ],
                [
                    'name' => 'DataType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '流量类型。'."\n"
                            ."\n"
                            .'- **singlecard**：单卡通用流量。'."\n"
                            ."\n"
                            .'- **directionalcard**：单卡定向流量。'."\n"
                            ."\n"
                            .'- **sameflowcard**：同档位池共享流量。'."\n"
                            ."\n"
                            .'- **directional_sameflowcard**：同档位池共享定向流量。'."\n"
                            ."\n"
                            .'- **unityPayPool**：统付池通用流量。'."\n"
                            ."\n"
                            .'- **GREcard** ：统付池定向流量。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sameflowcard',
                    ],
                ],
                [
                    'name' => 'ActiveTimeStart',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的激活时间区间：开始时间。'."\n"
                            ."\n"
                            .'格式为：`yyyy-MM-dd HH:mm:ss`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-05-25 23:59:59',
                    ],
                ],
                [
                    'name' => 'SimType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SIM卡类型。'."\n"
                            ."\n"
                            .'- **nano**：插拔三切卡（消费级）。'."\n"
                            ."\n"
                            .'- **micro**：插拔双切卡（消费级）。'."\n"
                            ."\n"
                            .'- **normal**：插拔大卡（消费级）。'."\n"
                            ."\n"
                            .'- **simplus56**：贴片卡5*6（消费级）。'."\n"
                            ."\n"
                            .'- **simplus22**：贴片卡2*2（消费级）。'."\n"
                            ."\n"
                            .'- **industry-normal**：插拔大卡（工业级）。'."\n"
                            ."\n"
                            .'- **industry-micro**：插拔双切卡（工业级）。'."\n"
                            ."\n"
                            .'- **industry-nano**：插拔三切卡（工业级）。'."\n"
                            ."\n"
                            .'- **simplus**：贴片卡5*6（工业级）。'."\n"
                            ."\n"
                            .'- **industry-simplus22**：贴片卡2*2（工业级）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'nano',
                    ],
                ],
                [
                    'name' => 'ExpireTimeEnd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的套餐结束时间。'."\n"
                            ."\n"
                            .'格式为：`yyyy-MM-dd HH:mm:ss`',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-05-25 23:59:59',
                    ],
                ],
                [
                    'name' => 'IsAutoRecharge',
                    'in' => 'query',
                    'schema' => [
                        'description' => '套餐是否自动续费。'."\n"
                            ."\n"
                            .'- **true**：是。'."\n"
                            ."\n"
                            .'- **false**：否。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ExpireTimeStart',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的套餐开始时间。'."\n"
                            ."\n"
                            .'格式为：`yyyy-MM-dd HH:mm:ss`',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-05-25 23:59:59',
                    ],
                ],
                [
                    'name' => 'OsStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的具体状态。'."\n"
                            ."\n"
                            .'- **10**：测试期。'."\n"
                            ."\n"
                            .'- **20**：静默期。'."\n"
                            ."\n"
                            .'- **100**：使用中。'."\n"
                            ."\n"
                            .'- **150**：部分使用中。'."\n"
                            ."\n"
                            .'- **200**：主动停用。'."\n"
                            ."\n"
                            .'- **300**：达量停用。'."\n"
                            ."\n"
                            .'- **400**：信控停用。'."\n"
                            ."\n"
                            .'- **500**：换绑停用。'."\n"
                            ."\n"
                            .'- **600**：实名停用。'."\n"
                            ."\n"
                            .'- **700**：异常停用。'."\n"
                            ."\n"
                            .'- **40**：已停机。'."\n"
                            ."\n"
                            .'- **50**：已销户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '300',
                    ],
                ],
                [
                    'name' => 'NotifyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动化规则的通知ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '11111',
                    ],
                ],
                [
                    'name' => 'DataLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '流量包档位。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30MB',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的状态。'."\n"
                            ."\n"
                            .'- **10**：可测试。'."\n"
                            ."\n"
                            .'- **20**：未使用。'."\n"
                            ."\n"
                            .'- **30**：使用中。'."\n"
                            ."\n"
                            .'- **35**：已停用。'."\n"
                            ."\n"
                            .'- **40**：已停机。'."\n"
                            ."\n"
                            .'- **50**：已销户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '35',
                    ],
                ],
                [
                    'name' => 'TagName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签名称。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试标签',
                    ],
                ],
                [
                    'name' => 'CertifyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证方式。'."\n"
                            ."\n"
                            .'仅支持enterprise：企业认证。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'enterprise',
                    ],
                ],
                [
                    'name' => 'DirectionalGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定向分组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '22',
                    ],
                ],
                [
                    'name' => 'ApnName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'APN名称。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cmiot',
                    ],
                ],
                [
                    'name' => 'Imsi',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的IMSI。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '460081937******',
                    ],
                ],
                [
                    'name' => 'PoolId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '池编号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test1',
                    ],
                ],
                [
                    'name' => 'MinFlow',
                    'in' => 'query',
                    'schema' => [
                        'description' => '周期用量区间筛选：最小用量（单位MB）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'MaxFlow',
                    'in' => 'query',
                    'schema' => [
                        'description' => '周期用量区间筛选：最大用量（单位MB）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'MaxRestFlowPercentage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '单卡周期流量剩余比例，仅支持如下三个参数。'."\n"
                            .'0.1：剩余10%'."\n"
                            .'0.2：剩余20%'."\n"
                            .'0.3：剩余30%',
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                        'example' => '0.2',
                    ],
                ],
                [
                    'name' => 'NetworkType',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '网络制式：4G，5G。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4G',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- true：调用成功。'."\n"
                                    ."\n"
                                    .'- false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Data' => [
                                'description' => '返回页面信息。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNo' => [
                                        'description' => '查询页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页显示的数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'PageCount' => [
                                        'description' => '总页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'Total' => [
                                        'description' => '符合条件的物联网卡总数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '199',
                                    ],
                                    'List' => [
                                        'description' => '卡列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '卡列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '卡的状态。'."\n"
                                                        ."\n"
                                                        .'- **10**：可测试。'."\n"
                                                        ."\n"
                                                        .'- **20**：未使用。'."\n"
                                                        ."\n"
                                                        .'- **30**：使用中。'."\n"
                                                        ."\n"
                                                        .'- **35**：已停用。'."\n"
                                                        ."\n"
                                                        .'- **40**：已停机。'."\n"
                                                        ."\n"
                                                        .'- **50**：已销户。',
                                                    'type' => 'string',
                                                    'example' => '35',
                                                ],
                                                'DataType' => [
                                                    'description' => '流量类型。'."\n"
                                                        ."\n"
                                                        .'- **singlecard**：单卡通用流量。'."\n"
                                                        ."\n"
                                                        .'- **directionalcard**：单卡定向流量。'."\n"
                                                        ."\n"
                                                        .'- **sameflowcard**：同档位池共享流量。'."\n"
                                                        ."\n"
                                                        .'- **directional_sameflowcard**：同档位池共享定向流量。'."\n"
                                                        ."\n"
                                                        .'- **unityPayPool**：统付池通用流量。'."\n"
                                                        ."\n"
                                                        .'- **GREcard** ：统付池定向流量。',
                                                    'type' => 'string',
                                                    'example' => 'sameflowcard',
                                                ],
                                                'DirectionalGroupName' => [
                                                    'description' => '定向分组名称。',
                                                    'type' => 'string',
                                                    'example' => '测试分组',
                                                ],
                                                'PeriodRestFlow' => [
                                                    'description' => '周期剩余流量。',
                                                    'type' => 'string',
                                                    'example' => '130.00MB',
                                                ],
                                                'CredentialType' => [
                                                    'description' => '套餐凭证类型。',
                                                    'type' => 'string',
                                                    'example' => 'unityPayPool',
                                                ],
                                                'PeriodAddFlow' => [
                                                    'description' => '周期累计流量。',
                                                    'type' => 'string',
                                                    'example' => '0KB',
                                                ],
                                                'PeriodSmsUse' => [
                                                    'description' => '周期短信用量。',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'DataLevel' => [
                                                    'description' => '流量包档位。',
                                                    'type' => 'string',
                                                    'example' => '30MB',
                                                ],
                                                'OsStatus' => [
                                                    'description' => '物联网卡的具体状态。'."\n"
                                                        ."\n"
                                                        .'- **10**：测试期。'."\n"
                                                        ."\n"
                                                        .'- **20**：静默期。'."\n"
                                                        ."\n"
                                                        .'- **100**：使用中。'."\n"
                                                        ."\n"
                                                        .'- **150**：部分使用中。'."\n"
                                                        ."\n"
                                                        .'- **200**：主动停用。'."\n"
                                                        ."\n"
                                                        .'- **300**：达量停用。'."\n"
                                                        ."\n"
                                                        .'- **400**：信控停用。'."\n"
                                                        ."\n"
                                                        .'- **500**：换绑停用。'."\n"
                                                        ."\n"
                                                        .'- **600**：实名停用。'."\n"
                                                        ."\n"
                                                        .'- **700**：异常停用。'."\n"
                                                        ."\n"
                                                        .'- **40**：已停机。'."\n"
                                                        ."\n"
                                                        .'- **50**：已销户。',
                                                    'type' => 'string',
                                                    'example' => '300',
                                                ],
                                                'NotifyId' => [
                                                    'description' => '自动化规则的通知ID。',
                                                    'type' => 'string',
                                                    'example' => '11111',
                                                ],
                                                'AliFee' => [
                                                    'description' => '资费版本。',
                                                    'type' => 'string',
                                                    'example' => 'ali_2',
                                                ],
                                                'AliyunOrderId' => [
                                                    'description' => '物联网卡关联的订单编号。',
                                                    'type' => 'string',
                                                    'example' => '211519634******',
                                                ],
                                                'ActiveType' => [
                                                    'description' => '物联网卡的激活方式。'."\n"
                                                        ."\n"
                                                        .'- **firstdatarecord**：首话单激活。'."\n"
                                                        ."\n"
                                                        .'- **carrierstatuspush**：运营商状态推送激活。'."\n"
                                                        ."\n"
                                                        .'- **silence_expire**：沉默期结束激活。'."\n"
                                                        ."\n"
                                                        .'- **manage**：手动激活。'."\n"
                                                        ."\n"
                                                        .'- **testflowdepleted**：测试期流量超出后激活。',
                                                    'type' => 'string',
                                                    'example' => 'first_data_record',
                                                ],
                                                'IsAutoRecharge' => [
                                                    'description' => '套餐是否自动续费。'."\n"
                                                        ."\n"
                                                        .'- true：是。'."\n"
                                                        ."\n"
                                                        .'- false：否。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'CredentialInstanceId' => [
                                                    'description' => '凭证实例ID。',
                                                    'type' => 'string',
                                                    'example' => '2622***',
                                                ],
                                                'ExpireTime' => [
                                                    'description' => '套餐到期时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-04-30 23:59:59',
                                                ],
                                                'ApnName' => [
                                                    'description' => 'APN名称。',
                                                    'type' => 'string',
                                                    'example' => 'cmiot',
                                                ],
                                                'ActiveTime' => [
                                                    'description' => '激活时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-11-16 16:35:50',
                                                ],
                                                'Iccid' => [
                                                    'description' => '物联网卡的ICCID。',
                                                    'type' => 'string',
                                                    'example' => '89860321******15668',
                                                ],
                                                'Vendor' => [
                                                    'description' => '运营商。'."\n"
                                                        ."\n"
                                                        .'- **CMCC**：移动。'."\n"
                                                        ."\n"
                                                        .'- **CUCC**：联通。'."\n"
                                                        ."\n"
                                                        .'- **CTCC**：电信。'."\n"
                                                        ."\n"
                                                        .'- **VNO**：虚拟运营商。',
                                                    'type' => 'string',
                                                    'example' => 'CMCC',
                                                ],
                                                'Period' => [
                                                    'description' => '套餐结算周期。'."\n"
                                                        ."\n"
                                                        .'- **1101**：月度。'."\n"
                                                        ."\n"
                                                        .'- **1103**：季度。'."\n"
                                                        ."\n"
                                                        .'- **1106**：半年度。'."\n"
                                                        ."\n"
                                                        .'- **1112**：年度。',
                                                    'type' => 'string',
                                                    'example' => '1101',
                                                ],
                                                'CertifyType' => [
                                                    'description' => '认证方式。'."\n"
                                                        ."\n"
                                                        .'enterprise：企业认证。',
                                                    'type' => 'string',
                                                    'example' => 'enterprise',
                                                ],
                                                'PrivateNetworkSegment' => [
                                                    'description' => '私网网段（定向卡）。',
                                                    'type' => 'string',
                                                    'example' => '1.*.3.*',
                                                ],
                                                'OpenAccountTime' => [
                                                    'description' => '开户时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-11-29 16:12:14',
                                                ],
                                                'SimType' => [
                                                    'description' => 'SIM卡类型。'."\n"
                                                        ."\n"
                                                        .'- **nano**：插拔三切卡（消费级）。'."\n"
                                                        ."\n"
                                                        .'- **micro**：插拔双切卡（消费级）。'."\n"
                                                        ."\n"
                                                        .'- **normal**：插拔大卡（消费级）。'."\n"
                                                        ."\n"
                                                        .'- **simplus56**：贴片卡5*6（消费级）。'."\n"
                                                        ."\n"
                                                        .'- **simplus22**：贴片卡2*2（消费级）。'."\n"
                                                        ."\n"
                                                        .'- **industry-normal**：插拔大卡（工业级）。'."\n"
                                                        ."\n"
                                                        .'- **industry-micro**：插拔双切卡（工业级）。'."\n"
                                                        ."\n"
                                                        .'- **industry-nano**：插拔三切卡（工业级）。'."\n"
                                                        ."\n"
                                                        .'- **simplus**：贴片卡5*6（工业级）。'."\n"
                                                        ."\n"
                                                        .'- **industry-simplus22**：贴片卡2*2（工业级）。',
                                                    'type' => 'string',
                                                    'example' => 'nano',
                                                ],
                                                'VsimInstanceId' => [
                                                    'description' => '物联网卡的InstanceId值。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '123456',
                                                ],
                                                'CredentialNo' => [
                                                    'description' => '套餐凭证。',
                                                    'type' => 'string',
                                                    'example' => 'CM-***-*-2-**M',
                                                ],
                                                'TagList' => [
                                                    'description' => '物联网卡的标签。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '标签列表。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'TagName' => [
                                                                'description' => '标签名称。',
                                                                'type' => 'string',
                                                                'example' => '测试标签',
                                                            ],
                                                            'Id' => [
                                                                'description' => '标签ID。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '24',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'Imsi' => [
                                                    'description' => '物联网卡的IMSI。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '物联网卡的IMSI。',
                                                        'type' => 'string',
                                                        'example' => '460081937******',
                                                    ],
                                                ],
                                                'Msisdn' => [
                                                    'description' => '物联网卡的MSISDN。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '物联网卡的MSISDN。',
                                                        'type' => 'string',
                                                        'example' => '1440993******',
                                                    ],
                                                ],
                                                'Remark' => [
                                                    'description' => '备注信息。',
                                                    'type' => 'string',
                                                    'example' => '备注信息',
                                                ],
                                                'DirectionalGroupId' => [
                                                    'description' => '定向分组ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '55',
                                                ],
                                                'NetworkType' => [
                                                    'description' => '网络制式：4G，5G。',
                                                    'type' => 'string',
                                                    'example' => '4G',
                                                ],
                                                'FlowLatestModifiedTime' => [
                                                    'description' => '用量更新时间',
                                                    'type' => 'string',
                                                    'example' => '2023-08-15 18:20:11',
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
                        'errorCode' => 'linkcard.common.InvalidAliyunPK',
                        'errorMessage' => 'AliyunPk is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.BusinessProcessError',
                        'errorMessage' => 'A business processing exception occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"PageCount\\": 20,\\n    \\"Total\\": 199,\\n    \\"List\\": [\\n      {\\n        \\"Status\\": \\"35\\",\\n        \\"DataType\\": \\"sameflowcard\\",\\n        \\"DirectionalGroupName\\": \\"测试分组\\",\\n        \\"PeriodRestFlow\\": \\"130.00MB\\",\\n        \\"CredentialType\\": \\"unityPayPool\\",\\n        \\"PeriodAddFlow\\": \\"0KB\\",\\n        \\"PeriodSmsUse\\": \\"0\\",\\n        \\"DataLevel\\": \\"30MB\\",\\n        \\"OsStatus\\": \\"300\\",\\n        \\"NotifyId\\": \\"11111\\",\\n        \\"AliFee\\": \\"ali_2\\",\\n        \\"AliyunOrderId\\": \\"211519634******\\",\\n        \\"ActiveType\\": \\"first_data_record\\",\\n        \\"IsAutoRecharge\\": true,\\n        \\"CredentialInstanceId\\": \\"2622***\\",\\n        \\"ExpireTime\\": \\"2022-04-30 23:59:59\\",\\n        \\"ApnName\\": \\"cmiot\\",\\n        \\"ActiveTime\\": \\"2021-11-16 16:35:50\\",\\n        \\"Iccid\\": \\"89860321******15668\\",\\n        \\"Vendor\\": \\"CMCC\\",\\n        \\"Period\\": \\"1101\\",\\n        \\"CertifyType\\": \\"enterprise\\",\\n        \\"PrivateNetworkSegment\\": \\"1.*.3.*\\",\\n        \\"OpenAccountTime\\": \\"2021-11-29 16:12:14\\",\\n        \\"SimType\\": \\"nano\\",\\n        \\"VsimInstanceId\\": 123456,\\n        \\"CredentialNo\\": \\"CM-***-*-2-**M\\",\\n        \\"TagList\\": [\\n          {\\n            \\"TagName\\": \\"测试标签\\",\\n            \\"Id\\": 24\\n          }\\n        ],\\n        \\"Imsi\\": [\\n          \\"460081937******\\"\\n        ],\\n        \\"Msisdn\\": [\\n          \\"1440993******\\"\\n        ],\\n        \\"Remark\\": \\"备注信息\\",\\n        \\"DirectionalGroupId\\": 55,\\n        \\"NetworkType\\": \\"4G\\",\\n        \\"FlowLatestModifiedTime\\": \\"2023-08-15 18:20:11\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListCardInfoResponse>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>\\n        <PageNo>1</PageNo>\\n        <PageSize>10</PageSize>\\n        <PageCount>20</PageCount>\\n        <Total>199</Total>\\n        <List>\\n            <Status>35</Status>\\n            <DataType>sameflowcard</DataType>\\n            <DirectionalGroupName>测试分组</DirectionalGroupName>\\n            <PeriodRestFlow>130.00MB</PeriodRestFlow>\\n            <CredentialType>unityPayPool</CredentialType>\\n            <PeriodAddFlow>0KB</PeriodAddFlow>\\n            <PeriodSmsUse>0</PeriodSmsUse>\\n            <DataLevel>30MB</DataLevel>\\n            <OsStatus>300</OsStatus>\\n            <NotifyId>11111</NotifyId>\\n            <AliFee>ali_2</AliFee>\\n            <AliyunOrderId>211519634******</AliyunOrderId>\\n            <ActiveType>first_data_record</ActiveType>\\n            <IsAutoRecharge>true</IsAutoRecharge>\\n            <CredentialInstanceId>2622***</CredentialInstanceId>\\n            <ExpireTime>2022-04-30 23:59:59</ExpireTime>\\n            <ApnName>cmiot</ApnName>\\n            <ActiveTime>2021-11-16 16:35:50</ActiveTime>\\n            <Iccid>89860321******15668</Iccid>\\n            <Vendor>CMCC</Vendor>\\n            <Period>1101</Period>\\n            <CertifyType>enterprise</CertifyType>\\n            <PrivateNetworkSegment>1.*.3.*</PrivateNetworkSegment>\\n            <OpenAccountTime>2021-11-29 16:12:14</OpenAccountTime>\\n            <SimType>nano</SimType>\\n            <VsimInstanceId>123456</VsimInstanceId>\\n            <CredentialNo>CM-***-*-2-**M</CredentialNo>\\n            <TagList>\\n                <TagName>测试标签</TagName>\\n                <Id>24</Id>\\n            </TagList>\\n            <Imsi>460081937******</Imsi>\\n            <Msisdn>1440993******</Msisdn>\\n            <Remark>备注信息</Remark>\\n            <DirectionalGroupId>55</DirectionalGroupId>\\n        </List>\\n    </Data>\\n</ListCardInfoResponse>","errorExample":""}]',
            'title' => '查询卡列表',
            'description' => '### 使用说明'."\n"
                .'该接口的请求参数您可以在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/?spm=a2c4g.11186623.0.0.6a072d25p4pUg8)查看并获取，或者调用接口[GetCardDetail](~~374328~~)在返回参数中查看并获取（后者更为推荐）。'."\n",
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
        ],
        'ListOrder' => [
            'summary' => '查询订单列表。',
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
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订单ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '21450******0275',
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订单购买的时间区间（开始日期）。'."\n"
                            ."\n"
                            .'格式：`YYYY-MM-dd`',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-04-05',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订单购买的时间区间（结束日期）。'."\n"
                            ."\n"
                            .'格式：`YYYY-MM-dd`',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-04-05',
                    ],
                ],
                [
                    'name' => 'OrderType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订单类型。'."\n"
                            ."\n"
                            .'- **NEW**：新购。'."\n"
                            ."\n"
                            .'- **ADD_FLOW**：扩池。'."\n"
                            ."\n"
                            .'- **ADD_CARD**：补卡。'."\n"
                            ."\n"
                            .'- **FUNCTION**：购月功能费。'."\n"
                            ."\n"
                            .'- **FLOW_PLUS**：购买叠加包。'."\n"
                            ."\n"
                            .'- **RENEW**：续订套餐。'."\n"
                            ."\n"
                            .'- **AUTO_RENEW**：自动续订套餐。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NEW',
                    ],
                ],
                [
                    'name' => 'OrderStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订单状态。'."\n"
                            ."\n"
                            .'- **processing**：处理中。'."\n"
                            ."\n"
                            .'- **failure**：失败。'."\n"
                            ."\n"
                            .'- **completed**：处理完成。'."\n"
                            ."\n"
                            .'- **unpaid**：待支付。'."\n"
                            ."\n"
                            .'- **refunded**：已退款。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'processing',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询页数，需结合`PageSize`参数使用。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的数量，支持10、15、25、40。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CredentialNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '套餐凭证。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CT-SF-M-2-100M',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- **200**：表示成功。'."\n"
                                    .'- 其它：表示错误码。错误码详情，请参见[错误码](~~375339~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Data' => [
                                'description' => '返回信息。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNo' => [
                                        'description' => '查询页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页的数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'PageCount' => [
                                        'description' => '总页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                    'Total' => [
                                        'description' => '符合条件的总订单数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '48',
                                    ],
                                    'List' => [
                                        'description' => '订单列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '订单列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'BillingCycle' => [
                                                    'description' => '套餐结算周期。'."\n"
                                                        ."\n"
                                                        .'- **1101**：月度。'."\n"
                                                        ."\n"
                                                        .'- **1103**：季度。'."\n"
                                                        ."\n"
                                                        .'- **1106**：半年度。'."\n"
                                                        ."\n"
                                                        .'- **1112**：年度。',
                                                    'type' => 'string',
                                                    'example' => '1101',
                                                ],
                                                'BuyNum' => [
                                                    'description' => '购买张数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '100',
                                                ],
                                                'PoolCapacityUnit' => [
                                                    'description' => '池容量单位。',
                                                    'type' => 'string',
                                                    'example' => 'GB',
                                                ],
                                                'CardPayCount' => [
                                                    'description' => '支付时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2022-04-11 16:43:00',
                                                ],
                                                'CredentialPackage' => [
                                                    'description' => '套餐凭证。',
                                                    'type' => 'string',
                                                    'example' => 'AL-UPG-******3_beika4',
                                                ],
                                                'Vendor' => [
                                                    'description' => '运营商。'."\n"
                                                        ."\n"
                                                        .'- **CMCC**：移动。'."\n"
                                                        ."\n"
                                                        .'- **CUCC**：联通。'."\n"
                                                        ."\n"
                                                        .'- **CTCC**：电信。'."\n"
                                                        ."\n"
                                                        .'- **VNO**：虚拟运营商。',
                                                    'type' => 'string',
                                                    'example' => 'CMCC',
                                                ],
                                                'DataLevel' => [
                                                    'description' => '流量包档位。',
                                                    'type' => 'string',
                                                    'example' => '30MB',
                                                ],
                                                'PayDuration' => [
                                                    'description' => '购买时长。',
                                                    'type' => 'string',
                                                    'example' => '12月',
                                                ],
                                                'AliFee' => [
                                                    'description' => '资费版本。',
                                                    'type' => 'string',
                                                    'example' => 'ali_2',
                                                ],
                                                'OrderStatus' => [
                                                    'description' => '订单状态。'."\n"
                                                        ."\n"
                                                        .'- **processing**：处理中。'."\n"
                                                        ."\n"
                                                        .'- **failure**：失败。'."\n"
                                                        ."\n"
                                                        .'- **completed**：处理完成。'."\n"
                                                        ."\n"
                                                        .'- **unpaid**：待支付。'."\n"
                                                        ."\n"
                                                        .'- **refunded**：已退款。',
                                                    'type' => 'string',
                                                    'example' => 'processing',
                                                ],
                                                'PoolNo' => [
                                                    'description' => '池编号。',
                                                    'type' => 'string',
                                                    'example' => 'beika4',
                                                ],
                                                'FunctionFee' => [
                                                    'description' => '月功能费份数（统付池专用）。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '90',
                                                ],
                                                'PayTime' => [
                                                    'description' => '购买时间。',
                                                    'type' => 'string',
                                                    'example' => '2022-04-11 16:43:00',
                                                ],
                                                'FlowType' => [
                                                    'description' => '流量类型。'."\n"
                                                        ."\n"
                                                        .'- **singlecard**：单卡通用流量。'."\n"
                                                        ."\n"
                                                        .'- **directionalcard**：单卡定向流量。'."\n"
                                                        ."\n"
                                                        .'- **sameflowcard**：同档位池共享流量。'."\n"
                                                        ."\n"
                                                        .'- **directional_sameflowcard**：同档位池共享定向流量。'."\n"
                                                        ."\n"
                                                        .'- **unityPayPool**：统付池通用流量。'."\n"
                                                        ."\n"
                                                        .'- **GREcard**：统付池定向流量。',
                                                    'type' => 'string',
                                                    'example' => 'singlecard',
                                                ],
                                                'PoolCapacity' => [
                                                    'description' => '池容量，单位参见**PoolCapacityUnit**字段。',
                                                    'type' => 'string',
                                                    'example' => '200',
                                                ],
                                                'OrderInfo' => [
                                                    'description' => '订单信息。',
                                                    'type' => 'string',
                                                    'example' => '123123',
                                                ],
                                                'OrderType' => [
                                                    'description' => '订单类型。'."\n"
                                                        ."\n"
                                                        .'- **NEW**：新购。'."\n"
                                                        ."\n"
                                                        .'- **ADD_FLOW**：扩池。'."\n"
                                                        ."\n"
                                                        .'- **ADD_CARD**：补卡。'."\n"
                                                        ."\n"
                                                        .'- **FUNCTION**：购月功能费。'."\n"
                                                        ."\n"
                                                        .'- **FLOW_PLUS**：购买叠加包。'."\n"
                                                        ."\n"
                                                        .'- **RENEW**：续订套餐。'."\n"
                                                        ."\n"
                                                        .'- **AUTO_RENEW**：自动续订套餐。'."\n",
                                                    'type' => 'string',
                                                    'example' => 'NEW',
                                                ],
                                                'OrderId' => [
                                                    'description' => '订单编号。',
                                                    'type' => 'string',
                                                    'example' => '21450******0275',
                                                ],
                                                'CredentialNo' => [
                                                    'description' => '套餐凭证。',
                                                    'type' => 'string',
                                                    'example' => 'CM-***-*-2-**M',
                                                ],
                                                'ExpressNoList' => [
                                                    'description' => '物流信息。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '物流单号。',
                                                        'type' => 'string',
                                                        'example' => '123123123',
                                                    ],
                                                ],
                                                'DeliveryInfo' => [
                                                    'description' => '收货信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ZipCode' => [
                                                            'description' => '收货信息：邮编。',
                                                            'type' => 'string',
                                                            'example' => '100000',
                                                        ],
                                                        'Address' => [
                                                            'description' => '收货信息：地址。',
                                                            'type' => 'string',
                                                            'example' => '收货地址',
                                                        ],
                                                        'Mail' => [
                                                            'description' => '收货信息：邮箱。',
                                                            'type' => 'string',
                                                            'example' => 'xxx@xxx.com',
                                                        ],
                                                        'Receiver' => [
                                                            'description' => '收货信息：收件人。',
                                                            'type' => 'string',
                                                            'example' => '收件人',
                                                        ],
                                                        'BuyerMessage' => [
                                                            'description' => '收货信息：收件电话。',
                                                            'type' => 'string',
                                                            'example' => '收件电话',
                                                        ],
                                                    ],
                                                ],
                                                'OrderDetailUrl' => [
                                                    'description' => '订单详情链接。',
                                                    'type' => 'string',
                                                    'example' => 'https://us******60589',
                                                ],
                                                'ApnName' => [
                                                    'description' => 'APN名称。',
                                                    'type' => 'string',
                                                    'example' => 'CMIOTCZHZA.JS',
                                                ],
                                                'ApnRegion' => [
                                                    'description' => 'APN地域。',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'ResourceQuantity' => [
                                                    'description' => 'IP购买数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '10000',
                                                ],
                                                'NetworkType' => [
                                                    'description' => '网络制式：4G，5G。',
                                                    'type' => 'string',
                                                    'example' => '4G',
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
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.InvalidAliyunPK',
                        'errorMessage' => 'AliyunPk is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.BusinessProcessError',
                        'errorMessage' => 'A business processing exception occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"PageCount\\": 5,\\n    \\"Total\\": 48,\\n    \\"List\\": [\\n      {\\n        \\"BillingCycle\\": \\"1101\\",\\n        \\"BuyNum\\": 100,\\n        \\"PoolCapacityUnit\\": \\"GB\\",\\n        \\"CardPayCount\\": 0,\\n        \\"CredentialPackage\\": \\"AL-UPG-******3_beika4\\",\\n        \\"Vendor\\": \\"CMCC\\",\\n        \\"DataLevel\\": \\"30MB\\",\\n        \\"PayDuration\\": \\"12月\\",\\n        \\"AliFee\\": \\"ali_2\\",\\n        \\"OrderStatus\\": \\"processing\\",\\n        \\"PoolNo\\": \\"beika4\\",\\n        \\"FunctionFee\\": 90,\\n        \\"PayTime\\": \\"2022-04-11 16:43:00\\",\\n        \\"FlowType\\": \\"singlecard\\",\\n        \\"PoolCapacity\\": \\"200\\",\\n        \\"OrderInfo\\": \\"123123\\",\\n        \\"OrderType\\": \\"NEW\\",\\n        \\"OrderId\\": \\"21450******0275\\",\\n        \\"CredentialNo\\": \\"CM-***-*-2-**M\\",\\n        \\"ExpressNoList\\": [\\n          \\"123123123\\"\\n        ],\\n        \\"DeliveryInfo\\": {\\n          \\"ZipCode\\": \\"100000\\",\\n          \\"Address\\": \\"收货地址\\",\\n          \\"Mail\\": \\"xxx@xxx.com\\",\\n          \\"Receiver\\": \\"收件人\\",\\n          \\"BuyerMessage\\": \\"收件电话\\"\\n        },\\n        \\"OrderDetailUrl\\": \\"https://us******60589\\",\\n        \\"ApnName\\": \\"CMIOTCZHZA.JS\\",\\n        \\"ApnRegion\\": \\"cn-hangzhou\\",\\n        \\"ResourceQuantity\\": 10000,\\n        \\"NetworkType\\": \\"4G\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListOrderResponse>\\n    <Code>200</Code>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <PageNo>1</PageNo>\\n        <PageSize>10</PageSize>\\n        <PageCount>5</PageCount>\\n        <Total>48</Total>\\n        <List>\\n            <BillingCycle>1101</BillingCycle>\\n            <BuyNum>100</BuyNum>\\n            <PoolCapacityUnit>GB</PoolCapacityUnit>\\n            <CredentialPackage>AL-UPG-******3_beika4</CredentialPackage>\\n            <Vendor>CMCC</Vendor>\\n            <DataLevel>30MB</DataLevel>\\n            <PayDuration>12月</PayDuration>\\n            <AliFee>ali_2</AliFee>\\n            <OrderStatus>processing</OrderStatus>\\n            <PoolNo>beika4</PoolNo>\\n            <FunctionFee>90</FunctionFee>\\n            <PayTime>2022-04-11 16:43:00</PayTime>\\n            <FlowType>singlecard</FlowType>\\n            <PoolCapacity>200</PoolCapacity>\\n            <OrderInfo>123123</OrderInfo>\\n            <OrderType>NEW</OrderType>\\n            <OrderId>21450******0275</OrderId>\\n            <CredentialNo>CM-***-*-2-**M</CredentialNo>\\n            <ExpressNoList>123123123</ExpressNoList>\\n            <DeliveryInfo>\\n                <ZipCode>100000</ZipCode>\\n                <Address>收货地址</Address>\\n                <Mail>xxx@xxx.com</Mail>\\n                <Receiver>收件人</Receiver>\\n                <BuyerMessage>收件电话</BuyerMessage>\\n            </DeliveryInfo>\\n            <OrderDetailUrl>https://us******60589</OrderDetailUrl>\\n        </List>\\n    </Data>\\n</ListOrderResponse>","errorExample":""}]',
            'title' => '查询订单列表',
            'description' => '## 使用限制'."\n"
                ."\n"
                .'单个阿里云账号调用该接口的每秒请求数（QPS）最大限制为20。'."\n"
                ."\n"
                .'> RAM用户共享阿里云账号配额。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~375336~~)。',
        ],
        'AddDirectionalCard' => [
            'summary' => '给定向分组中导入定向卡。',
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
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定向分组ID。'."\n"
                            ."\n"
                            .'您可调用接口[GetCardDetail](~~374328~~)在返回参数中查看定向分组ID（DirectionalGroupId）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'UploadType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '导入类型。'."\n"
                            ."\n"
                            .'- **NO_GROUP**：仅导入还未分组的定向卡。'."\n"
                            ."\n"
                            .'- **ALL**：全量导入。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ALL',
                    ],
                ],
                [
                    'name' => 'UploadMethod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '导入方式。'."\n"
                            ."\n"
                            .'- **TAG**：标签，导入指定标签的定向卡。'."\n"
                            ."\n"
                            .'- **ORDER**：订单，导入指定订单的定向卡。'."\n"
                            ."\n"
                            .'- **FILE**：批量文件，导入批量文件中的定向卡。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TAG',
                    ],
                ],
                [
                    'name' => 'TagList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签ID列表。导入方式选择为标签时，需填入该参数。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签ID。导入方式选择为标签时，需填入该参数。'."\n"
                                ."\n"
                                .'标签ID可在物联网无线连接服务控制台的**SIM卡管理** > **标签管理**页面查看。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '5',
                        ],
                        'required' => true,
                        'docRequired' => true,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'OrderList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '订单编号列表。导入方式选择为订单时，需填入该参数。',
                        'type' => 'array',
                        'items' => [
                            'description' => '订单编号。导入方式选择为订单时，需填入该参数。'."\n"
                                ."\n"
                                .'订单编号可在物联网无线连接服务控制台的**订单统计** > **订单管理**页面查看。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '2172***80589',
                        ],
                        'required' => false,
                        'maxItems' => 50,
                    ],
                ],
                [
                    'name' => 'FileUri',
                    'in' => 'query',
                    'schema' => [
                        'description' => '批量文件的OSS路径。导入方式选择为批量文件时，需填入该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://linkcard-user-online.oss-cn-zhangjiakou.aliyuncs.com/DIRECTIONAL_GROUP/20220811/xxxx.csv',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定向分组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试分组',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '是否导入成功。'."\n"
                                    ."\n"
                                    .'- **true**：导入成功。'."\n"
                                    ."\n"
                                    .'- **false**：导入失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- 200：调用成功。'."\n"
                                    ."\n"
                                    .'- 其他：调用失败。错误码详情，请参见[错误码](~~87387~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<AddDirectionalCardResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Code>200</Code>\\n</AddDirectionalCardResponse>","errorExample":""}]',
            'title' => '定向分组导卡',
            'description' => '## 使用说明'."\n"
                .'定向卡是指仅能访问指定地址的物联网卡。可以调用接口[VerifyIotCard](~~446797~~)查询物联网卡是否为定向卡。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~30561~~)。',
        ],
        'AddDirectionalGroup' => [
            'summary' => '创建定向分组。',
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
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '给定向分组设置一个名称。'."\n"
                            ."\n"
                            .'分组名称支持中文、英文、数字及下划线（_），长度不超过30个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '测试分组',
                        'maxLength' => 30,
                        'minLength' => 0,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '定向分组ID。'."\n"
                                    ."\n"
                                    .'请记录定向分组ID，后续调用其他接口，例如调用[AddDirectionalCard](~~446808~~)给定向分组里导入物联网卡时需填入定向分组ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '6',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => '系统异常',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- 200：调用成功。'."\n"
                                    ."\n"
                                    .'- 其他：调用失败。错误码详情，请参见[错误码](~~87387~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": 6,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"系统异常\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<AddDirectionalGroupResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <ErrorMessage>系统异常</ErrorMessage>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Code>200</Code>\\n</AddDirectionalGroupResponse>","errorExample":""}]',
            'title' => '创建定向分组',
            'description' => '## 使用说明'."\n"
                .'仅新版定向服务菜单支持定向分组功能，如果您使用的是旧版定向服务菜单，无法使用该接口。更多信息，请参见[定向服务](~~279455~~)。',
        ],
        'BatchAddDirectionalAddress' => [
            'summary' => '给定向分组添加访问地址。',
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
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定向分组ID。'."\n"
                            ."\n"
                            .'您可调用接口[GetCardDetail](~~374328~~)在返回参数中查看定向分组ID（DirectionalGroupId）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地址来源。'."\n"
                            ."\n"
                            .'- **user_defined**：用户配置。'."\n"
                            ."\n"
                            .'- **aliyun_defined**：阿里云预配。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_defined',
                    ],
                ],
                [
                    'name' => 'AddressType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地址类型。'."\n"
                            ."\n"
                            .'- **Ip**：IP地址。'."\n"
                            ."\n"
                            .'- **Domain**：域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Domain',
                    ],
                ],
                [
                    'name' => 'ListAddress',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '具体定向地址。',
                        'type' => 'array',
                        'items' => [
                            'description' => '具体地址，上限10个。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '*.aliyun.com',
                        ],
                        'required' => true,
                        'maxItems' => 10,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BatchAddDirectionalAddressResponse',
                        'description' => 'BatchAddDirectionalAddressResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'title' => '必填',
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- 200：调用成功。'."\n"
                                    ."\n"
                                    .'- 其他：调用失败。错误码详情，请参见[错误码](~~87387~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Data' => [
                                'description' => '地址是否添加成功。'."\n"
                                    ."\n"
                                    .'- true：添加成功。'."\n"
                                    ."\n"
                                    .'- false：添加失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchAddDirectionalAddressResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>true</Data>\\n</BatchAddDirectionalAddressResponse>","errorExample":""}]',
            'title' => '定向地址添加',
            'description' => '## 使用说明'."\n"
                .'仅新版定向服务菜单支持定向分组功能，如果您使用的是旧版定向服务菜单，无法使用该接口。更多信息，请参见[定向服务](~~279455~~)。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~30561~~)。',
        ],
        'ListDirectionalAddress' => [
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
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的数量，支持10、15、25、40。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '200',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询页数，需结合PageSize参数使用。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定向分组ID。'."\n"
                            ."\n"
                            .'您可调用接口[GetCardDetail](~~374328~~)在返回参数中查看定向分组ID（DirectionalGroupId）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '5',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- 200：调用成功。'."\n"
                                    ."\n"
                                    .'- 其他：调用失败。错误码详情，请参见[错误码](~~375339~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Data' => [
                                'description' => '返回的访问地址。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNo' => [
                                        'description' => '查询页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页的数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'PageCount' => [
                                        'description' => '列表总页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '9',
                                    ],
                                    'Total' => [
                                        'description' => '列表总数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '90',
                                    ],
                                    'List' => [
                                        'description' => '访问地址。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Address' => [
                                                    'description' => '定向访问地址。',
                                                    'type' => 'string',
                                                    'example' => '*.aliyun.com',
                                                ],
                                                'AddressType' => [
                                                    'description' => '地址类型。'."\n"
                                                        ."\n"
                                                        .'- **Ip**：IP地址。'."\n"
                                                        ."\n"
                                                        .'- **Domain**：域名。',
                                                    'type' => 'string',
                                                    'example' => 'Domain',
                                                ],
                                                'Source' => [
                                                    'description' => '地址来源。'."\n"
                                                        ."\n"
                                                        .'- **user_defined**：用户配置。'."\n"
                                                        ."\n"
                                                        .'- **aliyun_defined**：阿里云预配。',
                                                    'type' => 'string',
                                                    'example' => 'user_defined',
                                                ],
                                                'GroupId' => [
                                                    'description' => '定向分组ID。',
                                                    'type' => 'string',
                                                    'example' => '5',
                                                ],
                                                'State' => [
                                                    'description' => '地址状态。'."\n"
                                                        ."\n"
                                                        .'- **100**：新增处理中。'."\n"
                                                        ."\n"
                                                        .'- **200**：删除处理中。'."\n"
                                                        ."\n"
                                                        .'- **300**：新增失败。'."\n"
                                                        ."\n"
                                                        .'- **400**：删除失败。'."\n"
                                                        ."\n"
                                                        .'- **500**：新增成功。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '500',
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
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParameter',
                        'errorMessage' => 'The request parameter %s is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"PageNo\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"PageCount\\": 9,\\n    \\"Total\\": 90,\\n    \\"List\\": [\\n      {\\n        \\"Address\\": \\"*.aliyun.com\\",\\n        \\"AddressType\\": \\"Domain\\",\\n        \\"Source\\": \\"user_defined\\",\\n        \\"GroupId\\": \\"5\\",\\n        \\"State\\": 500\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDirectionalAddressResponse>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>\\n        <PageNo>1</PageNo>\\n        <PageSize>10</PageSize>\\n        <PageCount>9</PageCount>\\n        <Total>90</Total>\\n        <List>\\n            <Address>*.aliyun.com</Address>\\n            <AddressType>Domain</AddressType>\\n            <Source>user_defined</Source>\\n            <GroupId>5</GroupId>\\n            <State>500</State>\\n        </List>\\n    </Data>\\n</ListDirectionalAddressResponse>","errorExample":""}]',
            'title' => '查询定向分组信息',
            'summary' => '查询定向分组的访问地址列表。',
            'description' => '## 使用说明'."\n"
                .'仅新版定向服务菜单支持定向分组功能，如果您使用的是旧版定向服务菜单，无法使用该接口。更多信息，请参见[定向服务](~~279455~~)。',
        ],
        'ListDirectionalDetail' => [
            'summary' => '查询物联网卡所在的定向分组及访问地址列表。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在物联网SIM服务控制台的卡管理页面，查看ICCID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '89860321******15668',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的页数，不能为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的数量，支持10、15、25、40。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ListDirectionalDetailResponse',
                        'description' => 'ListDirectionalDetailResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'title' => '必填',
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- 200：调用成功。'."\n"
                                    ."\n"
                                    .'- 其他：调用失败。错误码详情，请参见[错误码](~~87387~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Data' => [
                                'description' => '返回的分组信息及分组内的访问地址清单。',
                                'type' => 'object',
                                'properties' => [
                                    'DirectionalGroupId' => [
                                        'description' => '定向分组ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '5',
                                    ],
                                    'DirectionalName' => [
                                        'description' => '定向分组名称。',
                                        'type' => 'string',
                                        'example' => '测试分组',
                                    ],
                                    'PaginationResult' => [
                                        'description' => '定向分组内的访问地址列表。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PageNo' => [
                                                'description' => '当前页数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'PageSize' => [
                                                'description' => '每页的数量。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'Total' => [
                                                'description' => '列表总数量。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '90',
                                            ],
                                            'PageCount' => [
                                                'description' => '列表总页数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '9',
                                            ],
                                            'List' => [
                                                'description' => '定向地址列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '定向地址列表。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'GroupId' => [
                                                            'description' => '定向分组ID。',
                                                            'type' => 'string',
                                                            'example' => '5',
                                                        ],
                                                        'Address' => [
                                                            'description' => '定向访问地址。',
                                                            'type' => 'string',
                                                            'example' => '*.aliyun.com',
                                                        ],
                                                        'Source' => [
                                                            'description' => '地址来源。'."\n"
                                                                ."\n"
                                                                .'- **user_defined**：用户配置。'."\n"
                                                                ."\n"
                                                                .'- **aliyun_defined**：阿里云预配。',
                                                            'type' => 'string',
                                                            'example' => 'user_defined',
                                                        ],
                                                        'AddressType' => [
                                                            'description' => '地址类型。'."\n"
                                                                ."\n"
                                                                .'- **Ip**：IP地址。'."\n"
                                                                ."\n"
                                                                .'- **Domain**：域名。',
                                                            'type' => 'string',
                                                            'example' => 'Domain',
                                                        ],
                                                        'State' => [
                                                            'description' => '地址状态。'."\n"
                                                                ."\n"
                                                                .'- **100**：新增处理中。'."\n"
                                                                ."\n"
                                                                .'- **200**：删除处理中。'."\n"
                                                                ."\n"
                                                                .'- **300**：新增失败。'."\n"
                                                                ."\n"
                                                                .'- **400**：删除失败。'."\n"
                                                                ."\n"
                                                                .'- **500**：新增成功。',
                                                            'type' => 'string',
                                                            'example' => '500',
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
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.directional.notExist',
                        'errorMessage' => 'Can not find direction group.',
                    ],
                    [
                        'errorCode' => 'IllegalParameter',
                        'errorMessage' => 'The request parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CardNotExist',
                        'errorMessage' => 'The card does not exist.',
                    ],
                    [
                        'errorCode' => 'CardDisabled',
                        'errorMessage' => 'The SIM card has been permanently disabled.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"DirectionalGroupId\\": 5,\\n    \\"DirectionalName\\": \\"测试分组\\",\\n    \\"PaginationResult\\": {\\n      \\"PageNo\\": 1,\\n      \\"PageSize\\": 10,\\n      \\"Total\\": 90,\\n      \\"PageCount\\": 9,\\n      \\"List\\": [\\n        {\\n          \\"GroupId\\": \\"5\\",\\n          \\"Address\\": \\"*.aliyun.com\\",\\n          \\"Source\\": \\"user_defined\\",\\n          \\"AddressType\\": \\"Domain\\",\\n          \\"State\\": \\"500\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDirectionalDetailResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>\\n        <DirectionalGroupId>5</DirectionalGroupId>\\n        <DirectionalName>测试分组</DirectionalName>\\n        <PaginationResult>\\n            <PageNo>1</PageNo>\\n            <PageSize>10</PageSize>\\n            <Total>90</Total>\\n            <PageCount>9</PageCount>\\n            <List>\\n                <GroupId>5</GroupId>\\n                <Address>*.aliyun.com</Address>\\n                <Source>user_defined</Source>\\n                <AddressType>Domain</AddressType>\\n                <State>500</State>\\n            </List>\\n        </PaginationResult>\\n    </Data>\\n</ListDirectionalDetailResponse>","errorExample":""}]',
            'title' => '查询卡的定向信息',
            'description' => '## 使用说明'."\n"
                .'仅新版定向服务菜单支持定向分组，如果您使用的是旧版定向服务菜单，无法使用该接口。更多信息，请参见[定向服务](~~279455~~)。',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~30561~~)。',
        ],
        'VerifyIotCard' => [
            'summary' => '查询物联网卡是否为定向卡。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在物联网SIM服务控制台的卡管理页面，查看ICCID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '89860321******15668',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'VerifyIotCardResponse',
                        'description' => 'VerifyIotCardResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'title' => '必填',
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'- 200：调用成功。'."\n"
                                    ."\n"
                                    .'- 其他：调用失败。错误码详情，请参见[错误码](~~375339~~)。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Data' => [
                                'description' => '是否为定向卡。'."\n"
                                    ."\n"
                                    .'- **true**：是定向卡。'."\n"
                                    ."\n"
                                    .'- **false**：不是定向卡。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'linkcard.check.IccidCanNotEmpty',
                        'errorMessage' => 'Iccid cannot be empty.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CardDestroy',
                        'errorMessage' => 'The card do not exist or destroy.',
                    ],
                    [
                        'errorCode' => 'CardDisabled',
                        'errorMessage' => 'The SIM card has been permanently disabled.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CardNotExist',
                        'errorMessage' => 'The card does not exist.',
                    ],
                    [
                        'errorCode' => 'IllegalParameter',
                        'errorMessage' => 'The request parameter %s is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": true\\n}","errorExample":""},{"type":"xml","example":"<VerifyIotCardResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>true</Data>\\n</VerifyIotCardResponse>","errorExample":""}]',
            'title' => '定向卡查询',
            'requestParamsDescription' => '调用API时，除了本文介绍的该API的特有请求参数，还需传入公共请求参数。公共请求参数说明，请参见[公共参数文档](~~30561~~)。',
        ],
        'AddTagsToCard' => [
            'summary' => '物联网卡添加标签',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在物联网SIM服务控制台的卡管理页面查看ICCID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '89860321******15668',
                    ],
                ],
                [
                    'name' => 'TagNameList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签名称。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签名称。'."\n"
                                ."\n"
                                .'参数为空或者空集合的时候代表从卡上删除所有标签。'."\n"
                                ."\n"
                                .'如标签不存在，则会自动创建该标签并打标。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '测试标签',
                        ],
                        'required' => false,
                        'maxItems' => 4,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'200：表示成功。 其它：表示错误码。错误码详情，请参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'description' => '该卡已有标签的集合。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TagName' => [
                                            'description' => '标签名称。',
                                            'type' => 'string',
                                            'example' => '测试标签',
                                        ],
                                        'TagId' => [
                                            'description' => '标签ID。',
                                            'type' => 'string',
                                            'example' => '14',
                                        ],
                                    ],
                                ],
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'true：调用成功。 false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'linkcard.check.IccidCanNotEmpty',
                        'errorMessage' => 'Iccid cannot be empty.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CardDestroy',
                        'errorMessage' => 'The card do not exist or destroy.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": [\\n    {\\n      \\"TagName\\": \\"测试标签\\",\\n      \\"TagId\\": \\"14\\"\\n    }\\n  ],\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AddTagsToCardResponse>\\n    <Code>200</Code>\\n    <Data>\\n        <TagName>测试标签</TagName>\\n        <TagId>14</TagId>\\n    </Data>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n</AddTagsToCardResponse>","errorExample":""}]',
            'title' => '物联网卡添加标签',
        ],
        'GetSimCardStateDistribution' => [
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
                    'name' => 'CredentialNO',
                    'in' => 'query',
                    'schema' => [
                        'description' => '套餐凭证编号，您可在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/sim/license)的凭证管理页面查看。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CT-SC-M-2-100M',
                    ],
                ],
                [
                    'name' => 'Date',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的日期。'."\n"
                            ."\n"
                            .'格式：yyyyMM。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '202209',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'200：表示成功。'."\n"
                                    ."\n"
                                    .'其它：表示错误码。错误码详情，请参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'true：调用成功。'."\n"
                                    .'false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'CardCount' => [
                                        'description' => '卡总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'TestCount' => [
                                        'description' => '可测试卡数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'UnusedCount' => [
                                        'description' => '未使用卡数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'StopCount' => [
                                        'description' => '已停用卡数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '5',
                                    ],
                                    'DestoryedCount' => [
                                        'description' => '已销户卡数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'UsingCount' => [
                                        'description' => '使用中卡数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50',
                                    ],
                                    'ShutDownCount' => [
                                        'description' => '已停机卡数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
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
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.check.TimeFormatError',
                        'errorMessage' => 'Time format error.',
                    ],
                    [
                        'errorCode' => 'IllegalParameter',
                        'errorMessage' => 'The request parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CredentialInstanceNotExist',
                        'errorMessage' => 'The credential instance does not exist.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CredentialNoNotExist',
                        'errorMessage' => 'The credentialNo does not exist',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"CardCount\\": 100,\\n    \\"TestCount\\": 20,\\n    \\"UnusedCount\\": 10,\\n    \\"StopCount\\": 5,\\n    \\"DestoryedCount\\": 0,\\n    \\"UsingCount\\": 50,\\n    \\"ShutDownCount\\": 10\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSimCardStateDistributionResponse>\\n    <code>200</code>\\n    <data>\\n        <RequestId>5C06CF1A-959D-10A9-9C56-003EDF663BAF</RequestId>\\n        <Data>\\n            <StopCount>166</StopCount>\\n            <TestCount>50098</TestCount>\\n            <UnusedCount>426</UnusedCount>\\n            <CardCount>902847</CardCount>\\n            <DestoryedCount>340498</DestoryedCount>\\n            <UsingCount>511007</UsingCount>\\n            <ShutDownCount>652</ShutDownCount>\\n        </Data>\\n        <Success>true</Success>\\n    </data>\\n    <httpStatusCode>200</httpStatusCode>\\n    <requestId>5C06CF1A-959D-10A9-9C56-003EDF663BAF</requestId>\\n    <successResponse>true</successResponse>\\n</GetSimCardStateDistributionResponse>","errorExample":""}]',
            'title' => '获取卡状态分布',
            'summary' => '获取卡状态分布',
        ],
        'AddDirectionalAddress' => [
            'summary' => '定向分组新增目标地址。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10000002595',
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地址类型：'."\n"
                            ."\n"
                            .'客户配置： user_defined'."\n"
                            ."\n"
                            .'阿里云预配：aliyun_defined',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'user_defined',
                    ],
                ],
                [
                    'name' => 'AddressType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标地址类型：'."\n"
                            ."\n"
                            .'Ip：Ip'."\n"
                            ."\n"
                            .'域名：Domain',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Domain',
                    ],
                ],
                [
                    'name' => 'Address',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标地址',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '*.aliyun.com',
                    ],
                ],
                [
                    'name' => 'SerialNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求编号，支持幂等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123123',
                    ],
                ],
                [
                    'name' => 'MsgNotify',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行成功后是否通过MQ推送，默认false：'."\n"
                            .'false：不推送'."\n"
                            .'true： 推送（目前不支持）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'UrlInsecurityForce',
                    'in' => 'query',
                    'schema' => [
                        'description' => '检测到的高危风险域名是否强制添加，默认被拦截，不添加',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '地址是否添加成功。'."\n"
                                    ."\n"
                                    .'true：添加成功。'."\n"
                                    ."\n"
                                    .'false：添加失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'true：调用成功。'."\n"
                                    .'false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'200：调用成功。'."\n"
                                    ."\n"
                                    .'其他：调用失败。错误码详情，请参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'IllegalParameter',
                        'errorMessage' => 'The request parameter %s is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<AddDirectionalAddressResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Code>200</Code>\\n</AddDirectionalAddressResponse>","errorExample":""}]',
            'title' => '定向分组新增目标地址',
        ],
        'DeleteDirectionalAddress' => [
            'summary' => '定向分组删除目标地址。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10000002595',
                    ],
                ],
                [
                    'name' => 'Address',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标地址。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '*.aliyun.com',
                    ],
                ],
                [
                    'name' => 'SerialNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求编号，支持幂等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123123',
                    ],
                ],
                [
                    'name' => 'MsgNotify',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行成功后是否通过MQ推送，默认false： '."\n"
                            ."\n"
                            .'false：不推送 '."\n"
                            ."\n"
                            .'true： 推送',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '操作是否成功。'."\n"
                                    ."\n"
                                    .'true：成功。'."\n"
                                    ."\n"
                                    .'false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'true：调用成功。 false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'200：调用成功。'."\n"
                                    ."\n"
                                    .'其他：调用失败。错误码详情，请参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParameter',
                        'errorMessage' => 'The request parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDirectionalAddressResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Code>200</Code>\\n</DeleteDirectionalAddressResponse>","errorExample":""}]',
            'title' => '定向分组删除目标地址',
        ],
        'DeleteDirectionalGroup' => [
            'summary' => '删除定向分组。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10000002595',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '操作是否成功。'."\n"
                                    ."\n"
                                    .'true：成功。'."\n"
                                    ."\n"
                                    .'false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'true：调用成功。'."\n"
                                    .'false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'200：调用成功。'."\n"
                                    ."\n"
                                    .'其他：调用失败。错误码详情，请参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IllegalParameter',
                        'errorMessage' => 'The request parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDirectionalGroupResponse>\\n    <Data>true</Data>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <Success>true</Success>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Code>200</Code>\\n</DeleteDirectionalGroupResponse>","errorExample":""}]',
            'title' => '删除定向分组',
        ],
        'GetCardStatusStatistics' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'200：表示成功。'."\n"
                                    .'其它：表示错误码。错误码详情，请参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'true：调用成功。'."\n"
                                    .'false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'UnbindResumeStatisticsDTO' => [
                                        'description' => '换绑停用数据统计。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PoolCount' => [
                                                'description' => '统付池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '10',
                                            ],
                                            'SingleCardCount' => [
                                                'description' => '单卡套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '20',
                                            ],
                                            'SameFlowCardCount' => [
                                                'description' => '同档位池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '30',
                                            ],
                                            'TotalCount' => [
                                                'description' => '总卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '60',
                                            ],
                                        ],
                                    ],
                                    'FlowOutStatisticsDTO' => [
                                        'description' => '信控停用数据统计。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PoolCount' => [
                                                'description' => '统付池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '10',
                                            ],
                                            'SingleCardCount' => [
                                                'description' => '单卡套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '20',
                                            ],
                                            'SameFlowCardCount' => [
                                                'description' => '同档位池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '30',
                                            ],
                                            'TotalCount' => [
                                                'description' => '总卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '60',
                                            ],
                                        ],
                                    ],
                                    'ErrorStopStatisticsDTO' => [
                                        'description' => '异常停用数据统计。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PoolCount' => [
                                                'description' => '统付池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '10',
                                            ],
                                            'SingleCardCount' => [
                                                'description' => '单卡套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '20',
                                            ],
                                            'SameFlowCardCount' => [
                                                'description' => '同档位池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '30',
                                            ],
                                            'TotalCount' => [
                                                'description' => '总卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '60',
                                            ],
                                        ],
                                    ],
                                    'ExhaustStopStatisticsDTO' => [
                                        'description' => '达量停用数据统计。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PoolCount' => [
                                                'description' => '统付池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '10',
                                            ],
                                            'SingleCardCount' => [
                                                'description' => '单卡套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '20',
                                            ],
                                            'SameFlowCardCount' => [
                                                'description' => '同档位池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '30',
                                            ],
                                            'TotalCount' => [
                                                'description' => '总卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '60',
                                            ],
                                        ],
                                    ],
                                    'UnCertifiedStopStatisticsDTO' => [
                                        'description' => '未实名停用数据统计。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PoolCount' => [
                                                'description' => '统付池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '10',
                                            ],
                                            'SingleCardCount' => [
                                                'description' => '单卡套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '20',
                                            ],
                                            'SameFlowCardCount' => [
                                                'description' => '同档位池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '30',
                                            ],
                                            'TotalCount' => [
                                                'description' => '总卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '60',
                                            ],
                                        ],
                                    ],
                                    'ManageStopStatisticsDTO' => [
                                        'description' => '主动停用数据统计。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PoolCount' => [
                                                'description' => '统付池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '10',
                                            ],
                                            'SingleCardCount' => [
                                                'description' => '单卡套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '20',
                                            ],
                                            'SameFlowCardCount' => [
                                                'description' => '同档位池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '30',
                                            ],
                                            'TotalCount' => [
                                                'description' => '总卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '60',
                                            ],
                                        ],
                                    ],
                                    'ExpireStopStatisticsDTO' => [
                                        'description' => '套餐到期停机数据统计。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PoolCount' => [
                                                'description' => '统付池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '10',
                                            ],
                                            'SingleCardCount' => [
                                                'description' => '单卡套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '20',
                                            ],
                                            'SameFlowCardCount' => [
                                                'description' => '同档位池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '30',
                                            ],
                                            'TotalCount' => [
                                                'description' => '总卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '60',
                                            ],
                                        ],
                                    ],
                                    'WeekWarnStatisticsDTO' => [
                                        'description' => '套餐7天到期预警数据统计。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PoolCount' => [
                                                'description' => '统付池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '10',
                                            ],
                                            'SingleCardCount' => [
                                                'description' => '单卡套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '20',
                                            ],
                                            'SameFlowCardCount' => [
                                                'description' => '同档位池套餐卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '30',
                                            ],
                                            'TotalCount' => [
                                                'description' => '总卡数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '60',
                                            ],
                                        ],
                                    ],
                                    'RiskWaringStatisticsDTO' => [
                                        'description' => '风险告警统计。与控制台风险告警板块数据一致。',
                                        'type' => 'object',
                                        'properties' => [
                                            'WarningCount' => [
                                                'description' => '到期预警数。（7天内套餐到期）',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '20',
                                            ],
                                            'WaringTotalCount' => [
                                                'description' => '总告警数。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '100',
                                            ],
                                            'StopCount' => [
                                                'description' => '停机/停用数。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '40',
                                            ],
                                            'LeftFlowPercentageWarnCount' => [
                                                'description' => '余量预警数。（单卡套餐余量不足10%）',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '40',
                                            ],
                                        ],
                                    ],
                                    'SingCardPeriodLeftFlowWarnDTO' => [
                                        'description' => '套餐余量不足数据统计。',
                                        'type' => 'object',
                                        'properties' => [
                                            'LessFlowPercentage10Count' => [
                                                'description' => '单卡周期套餐余量不足10%的告警数量。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '5',
                                            ],
                                            'LessFlowPercentage30Count' => [
                                                'description' => '单卡周期套餐余量不足30%的告警数量.',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '8',
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
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"UnbindResumeStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"FlowOutStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"ErrorStopStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"ExhaustStopStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"UnCertifiedStopStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"ManageStopStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"ExpireStopStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"WeekWarnStatisticsDTO\\": {\\n      \\"PoolCount\\": 10,\\n      \\"SingleCardCount\\": 20,\\n      \\"SameFlowCardCount\\": 30,\\n      \\"TotalCount\\": 60\\n    },\\n    \\"RiskWaringStatisticsDTO\\": {\\n      \\"WarningCount\\": 20,\\n      \\"WaringTotalCount\\": 100,\\n      \\"StopCount\\": 40,\\n      \\"LeftFlowPercentageWarnCount\\": 40\\n    },\\n    \\"SingCardPeriodLeftFlowWarnDTO\\": {\\n      \\"LessFlowPercentage10Count\\": 5,\\n      \\"LessFlowPercentage30Count\\": 8\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetCardStatusStatisticsResponse>\\n    <code>200</code>\\n    <data>\\n        <RequestId>DCBDCDBC-0E54-53AC-97A4-6194849CC6BC</RequestId>\\n        <Data>\\n            <ExhaustStopStatisticsDTO>\\n                <TotalCount>8</TotalCount>\\n                <SingleCardCount>0</SingleCardCount>\\n                <SameFlowCardCount>4</SameFlowCardCount>\\n                <PoolCount>4</PoolCount>\\n            </ExhaustStopStatisticsDTO>\\n            <WeekWarnStatisticsDTO>\\n                <TotalCount>20</TotalCount>\\n                <SingleCardCount>20</SingleCardCount>\\n                <SameFlowCardCount>0</SameFlowCardCount>\\n                <PoolCount>0</PoolCount>\\n            </WeekWarnStatisticsDTO>\\n            <FlowOutStatisticsDTO>\\n                <TotalCount>12</TotalCount>\\n                <SingleCardCount>7</SingleCardCount>\\n                <SameFlowCardCount>0</SameFlowCardCount>\\n                <PoolCount>5</PoolCount>\\n            </FlowOutStatisticsDTO>\\n            <SingCardPeriodLeftFlowWarnDTO>\\n                <LessFlowPercentage10Count>15</LessFlowPercentage10Count>\\n                <LessFlowPercentage30Count>0</LessFlowPercentage30Count>\\n            </SingCardPeriodLeftFlowWarnDTO>\\n            <ErrorStopStatisticsDTO>\\n                <TotalCount>1</TotalCount>\\n                <SingleCardCount>0</SingleCardCount>\\n                <SameFlowCardCount>0</SameFlowCardCount>\\n                <PoolCount>1</PoolCount>\\n            </ErrorStopStatisticsDTO>\\n            <ExpireStopStatisticsDTO>\\n                <TotalCount>652</TotalCount>\\n                <SingleCardCount>506</SingleCardCount>\\n                <SameFlowCardCount>146</SameFlowCardCount>\\n                <PoolCount>0</PoolCount>\\n            </ExpireStopStatisticsDTO>\\n            <UnbindResumeStatisticsDTO>\\n                <TotalCount>1</TotalCount>\\n                <SingleCardCount>0</SingleCardCount>\\n                <SameFlowCardCount>0</SameFlowCardCount>\\n                <PoolCount>1</PoolCount>\\n            </UnbindResumeStatisticsDTO>\\n            <UnCertifiedStopStatisticsDTO>\\n                <TotalCount>1</TotalCount>\\n                <SingleCardCount>0</SingleCardCount>\\n                <SameFlowCardCount>0</SameFlowCardCount>\\n                <PoolCount>1</PoolCount>\\n            </UnCertifiedStopStatisticsDTO>\\n            <RiskWaringStatisticsDTO>\\n                <WarningCount>20</WarningCount>\\n                <StopCount>825</StopCount>\\n                <LeftFlowPercentageWarnCount>15</LeftFlowPercentageWarnCount>\\n                <WaringTotalCount>860</WaringTotalCount>\\n            </RiskWaringStatisticsDTO>\\n            <ManageStopStatisticsDTO>\\n                <TotalCount>150</TotalCount>\\n                <SingleCardCount>57</SingleCardCount>\\n                <SameFlowCardCount>31</SameFlowCardCount>\\n                <PoolCount>62</PoolCount>\\n            </ManageStopStatisticsDTO>\\n        </Data>\\n        <ErrorMessage/>\\n        <Code/>\\n        <Success>true</Success>\\n        <LocalizedMessage/>\\n    </data>\\n    <httpStatusCode>200</httpStatusCode>\\n    <requestId>DCBDCDBC-0E54-53AC-97A4-6194849CC6BC</requestId>\\n    <successResponse>true</successResponse>\\n</GetCardStatusStatisticsResponse>","errorExample":""}]',
            'title' => '概览页风险告警',
            'summary' => '概览页风险告警',
        ],
        'GetCardRealStatus' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在物联网SIM服务控制台的卡管理页面查看ICCID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '89860321******15668',
                    ],
                ],
                [
                    'name' => 'Msisdn',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的MSISDN。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '144******1111',
                    ],
                ],
                [
                    'name' => 'SerialNo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '轮询查询结果的唯一标识。',
                        'type' => 'array',
                        'items' => [
                            'description' => '轮询查询结果的唯一标识。'."\n"
                                ."\n"
                                .'说明：'."\n"
                                ."\n"
                                .'1、因该接口运营商能力较弱，查询结果需时，故结合轮询能力使用。'."\n"
                                ."\n"
                                .'2、在首次请求后，如Status未成功，则返回参数中会带此数据，再用此数据进行结果轮询。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '4f84******7895',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'GetCardRealStatusResponse',
                        'description' => 'GetCardRealStatusResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'title' => '必填',
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'true：调用成功。 false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'200：表示成功。 其它：表示错误码。错误码详情，请参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'SerialNo' => [
                                            'description' => '轮询查询结果的唯一标识。'."\n"
                                                ."\n"
                                                .'说明：'."\n"
                                                ."\n"
                                                .'1、因该接口运营商能力较弱，查询结果需时，故结合轮询能力使用。'."\n"
                                                ."\n"
                                                .'2、在首次请求后，如Status未成功，则返回参数中会带此数据，再用此数据进行结果轮询。',
                                            'type' => 'string',
                                            'example' => '4f84******7895',
                                        ],
                                        'Iccid' => [
                                            'description' => '卡的ICCID，当请求ICCID为多网卡主卡时，此处返回子卡ICCID。',
                                            'type' => 'string',
                                            'example' => '89860321******15668',
                                        ],
                                        'Gprs' => [
                                            'description' => '网络服务状态。'."\n"
                                                ."\n"
                                                .'true：开通。'."\n"
                                                ."\n"
                                                .'false：关闭。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Online' => [
                                            'description' => '在线状态。'."\n"
                                                ."\n"
                                                .'true：在线。'."\n"
                                                ."\n"
                                                .'false：不在线。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Status' => [
                                            'description' => '查询结果状态： '."\n"
                                                ."\n"
                                                .'SUCCESS：成功'."\n"
                                                ."\n"
                                                .'FAILURE：失败'."\n"
                                                ."\n"
                                                .'PROCESSING'."\0".'：处理中',
                                            'type' => 'string',
                                            'example' => 'SUCCESS',
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
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => 'linkcard.common.BusinessProcessError',
                        'errorMessage' => 'A business processing exception occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": [\\n    {\\n      \\"SerialNo\\": \\"4f84******7895\\",\\n      \\"Iccid\\": \\"89860321******15668\\",\\n      \\"Gprs\\": true,\\n      \\"Online\\": true,\\n      \\"Status\\": \\"SUCCESS\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetCardRealStatusResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>\\n        <SerialNo>4f84b7a5-90******07895</SerialNo>\\n        <Iccid>89860321******15668</Iccid>\\n        <Gprs>true</Gprs>\\n        <Online>true</Online>\\n        <Status>SUCCESS</Status>\\n    </Data>\\n</GetCardRealStatusResponse>","errorExample":""}]',
            'title' => '智能诊断-查询卡在运营商侧状态',
            'summary' => '智能诊断-查询卡在运营商侧状态',
        ],
        'GetCardLatestFlow' => [
            'summary' => '该接口用于查询物联网卡的实时周期用量。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'iccid',
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/sim/card)的卡管理页面查看ICCID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '89860321******15668',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'GetCardLatestFlowResponse',
                        'description' => 'GetCardLatestFlowResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'title' => '必填',
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'true：调用成功。'."\n"
                                    .'false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'200：表示成功。'."\n"
                                    ."\n"
                                    .'其它：表示错误码。错误码详情，请参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Data' => [
                                'description' => '实时周期用量，带流量单位。',
                                'type' => 'string',
                                'example' => '1.00MB',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.InvalidAliyunPK',
                        'errorMessage' => 'AliyunPk is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CardDestroy',
                        'errorMessage' => 'The card do not exist or destroy.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.IccidNotExist',
                        'errorMessage' => 'IccId does not exist.',
                    ],
                    [
                        'errorCode' => 'IllegalParameter',
                        'errorMessage' => 'The request parameter %s is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": \\"1.00MB\\"\\n}","errorExample":""},{"type":"xml","example":"<GetCardLatestFlowResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>1.00MB</Data>\\n</GetCardLatestFlowResponse>","errorExample":""}]',
            'title' => 'GetCardLatestFlow',
        ],
        'AddCardToDirectionalGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'IccidList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '卡号的iccid集合，数量小于等于200',
                        'type' => 'array',
                        'items' => [
                            'description' => 'ICCID。',
                            'type' => 'string',
                            'required' => true,
                            'example' => '1111****6225',
                        ],
                        'required' => true,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10000002595',
                    ],
                ],
                [
                    'name' => 'SerialNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求编号，支持幂等。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123123',
                    ],
                ],
                [
                    'name' => 'AddType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '添加的方式：'."\n"
                            ."\n"
                            .'NEW：仅导入其中待分组的卡'."\n"
                            ."\n"
                            .'TRANSFER：全量导入（卡从原分组中删除）',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NEW',
                    ],
                ],
                [
                    'name' => 'MsgNotify',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行成功后是否通过MQ推送，默认false： '."\n"
                            ."\n"
                            .'false：不推送 '."\n"
                            ."\n"
                            .'true： 推送',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ApiProduct',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Linkcard',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Linkcard',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'AddCardToDirectionalGroupResponse',
                        'description' => 'AddCardToDirectionalGroupResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'title' => '必填',
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'true：调用成功。 false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'200：调用成功。'."\n"
                                    ."\n"
                                    .'其他：调用失败。错误码详情，请参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Data' => [
                                'description' => '请求结果。',
                                'type' => 'object',
                                'properties' => [
                                    'Result' => [
                                        'description' => '执行是否成功。'."\n"
                                            ."\n"
                                            .'true：添加成功。'."\n"
                                            ."\n"
                                            .'false：添加失败。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'SerialNo' => [
                                        'description' => '请求编号，幂等序列号',
                                        'type' => 'string',
                                        'example' => '123213',
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
                        'errorCode' => 'IllegalParameter',
                        'errorMessage' => 'The request parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"Result\\": true,\\n    \\"SerialNo\\": \\"123213\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AddCardToDirectionalGroupResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n    <Data>\\n        <Result>true</Result>\\n        <SerialNo>123213</SerialNo>\\n    </Data>\\n</AddCardToDirectionalGroupResponse>","errorExample":""}]',
            'title' => '定向分组添加卡片',
            'summary' => '定向分组添加卡片。',
        ],
        'GetRealNameStatus' => [
            'summary' => '该接口用于查询物联网卡的个人实名状态。',
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
                    'name' => 'Iccid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '物联网卡的ICCID。'."\n"
                            ."\n"
                            .'您可在物联网卡上查看ICCID，或者在[物联网SIM服务控制台](https://dyiotnext.console.aliyun.com/sim/card)的卡管理页面查看ICCID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '89860321******15668',
                    ],
                ],
                [
                    'name' => 'ListMsisdns',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '多网卡子卡MSISDN。',
                        'type' => 'array',
                        'items' => [
                            'description' => '物联网卡的MSISDN。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '144******1111',
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'GetRealNameStatusResponse',
                        'description' => 'GetRealNameStatusResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'title' => '必填',
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'true：调用成功。'."\n"
                                    .'false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'200：表示成功。'."\n"
                                    .'其它：表示错误码。错误码详情，请参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'RealNameStatus' => [
                                        'description' => '个人实名认证状态。'."\n"
                                            .'NOT_CERTIFIED：未认证'."\n"
                                            .'APPROVING：认证审核中'."\n"
                                            .'CERTIFIED：已认证',
                                        'type' => 'string',
                                        'example' => 'CERTIFIED',
                                    ],
                                    'Desc' => [
                                        'description' => '认证状态描述。',
                                        'type' => 'string',
                                        'example' => '已认证',
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
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.InvalidAliyunPK',
                        'errorMessage' => 'AliyunPk is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.check.IccidCanNotEmpty',
                        'errorMessage' => 'Iccid cannot be empty.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.CardDestroy',
                        'errorMessage' => 'The card do not exist or destroy.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.IccidFormatError',
                        'errorMessage' => 'Iccid format error.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.VnoCardNotSupported',
                        'errorMessage' => 'This function does not support vno card.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"Data\\": {\\n    \\"RealNameStatus\\": \\"CERTIFIED\\",\\n    \\"Desc\\": \\"已认证\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetRealNameStatusResponse>\\n    <data>\\n        <realNameStatus>NOT_CERTIFIED</realNameStatus>\\n        <desc>未认证</desc>\\n    </data>\\n    <requestId>D3778AAD-6A0E-16F8-8074-C4AF604E21B3</requestId>\\n    <success>true</success>\\n</GetRealNameStatusResponse>","errorExample":""}]',
            'title' => 'GetRealNameStatus',
        ],
        'SendMessage' => [
            'summary' => '平台短信下发。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'TaskName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自定义任务名称，不能包含特殊字符，最长40个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '任务0912',
                    ],
                ],
                [
                    'name' => 'MessageTemplateId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '模版ID',
                        'description' => '短信模版编号，可以在控制台查看。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '14',
                    ],
                ],
                [
                    'name' => 'MessageVariableParam',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '请求参数',
                        'description' => '动态参数短信，替换的参数，格式{1}{2}',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{参数1}{参数2}{参数3}',
                    ],
                ],
                [
                    'name' => 'MessageSendTime',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '单位:s',
                        'description' => '时间戳，单位：秒 。'."\n"
                            ."\n"
                            .'当时间早于当前时间则立即发送，晚于当前时间为定时发送。'."\n"
                            ."\n"
                            .'最晚不能超过一个月。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1694401634',
                    ],
                ],
                [
                    'name' => 'Msisdns',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '发送短信的目标MSISDN列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '发送短信的目标MSISDN',
                            'type' => 'string',
                            'required' => false,
                            'example' => '1411234123412',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApiProduct',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Linkcard',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Linkcard',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SendMessageResponse',
                        'description' => 'SendMessageResponse',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的标识符。',
                                'type' => 'string',
                                'example' => 'E4F94B97-1D64-4080-BFD2-67461667AA43',
                            ],
                            'Success' => [
                                'title' => '必填',
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'true：调用成功。 false：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '接口返回码。'."\n"
                                    ."\n"
                                    .'200：调用成功。'."\n"
                                    ."\n"
                                    .'其他：调用失败。错误码详情，请参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ErrorMessage' => [
                                'description' => '	'."\n"
                                    .'调用失败时，返回的错误信息。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'LocalizedMessage' => [
                                'description' => '根据当前所在地展示对应语言的错误提示。',
                                'type' => 'string',
                                'example' => 'InstanceId cannot be empty.',
                            ],
                            'DynamicCode' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'InvokeError',
                            ],
                            'DynamicMessage' => [
                                'description' => '错误码信息',
                                'type' => 'string',
                                'example' => '入参不能为空，或不能包含空格',
                            ],
                            'Data' => [
                                'description' => '地址是否添加成功。'."\n"
                                    ."\n"
                                    .'true：添加成功。'."\n"
                                    ."\n"
                                    .'false：添加失败。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'linkcard.common.InvalidAliyunPK',
                        'errorMessage' => 'AliyunPk is invalid.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.IllegalRequest',
                        'errorMessage' => 'The request parameter is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'linkcard.common.RamActionPermissionDeny',
                        'errorMessage' => 'You do not have the RAM permission.',
                    ],
                    [
                        'errorCode' => '%s.',
                        'errorMessage' => '%s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Service.InternalError',
                        'errorMessage' => 'An internal error occurred.',
                    ],
                    [
                        'errorCode' => 'linkcard.system.RPCInvokeError',
                        'errorMessage' => 'An RPC invoking error occurred',
                    ],
                    [
                        'errorCode' => '%s..',
                        'errorMessage' => '%s..',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4F94B97-1D64-4080-BFD2-67461667AA43\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"LocalizedMessage\\": \\"InstanceId cannot be empty.\\",\\n  \\"DynamicCode\\": \\"InvokeError\\",\\n  \\"DynamicMessage\\": \\"入参不能为空，或不能包含空格\\",\\n  \\"Data\\": 0\\n}","errorExample":""},{"type":"xml","example":"<SendMessageResponse>\\n    <RequestId>E4F94B97-1D64-4080-BFD2-67461667AA43</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <ErrorMessage>InstanceId cannot be empty.</ErrorMessage>\\n    <LocalizedMessage>InstanceId cannot be empty.</LocalizedMessage>\\n</SendMessageResponse>","errorExample":""}]',
            'title' => 'SendMessage',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote-nebula-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'linkcard.aliyuncs.com',
        ],
    ],
];
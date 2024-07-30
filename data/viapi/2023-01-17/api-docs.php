<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'viapi',
        'version' => '2023-01-17',
    ],
    'directories' => [
        'QueryAsyncJobList',
        'GetAsyncJobResult',
        'CancelWaitingAsyncJob',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'QueryAsyncJobList' => [
            'summary' => '在您成功提交异步任务以后，可以通过QueryAsyncJobList来查询已经提交的任务信息列表。',
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
                    'name' => 'StartTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开始时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-01-04 00:00:00',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '结束时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-01-04 23:00:00',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '异步接口返回的RequestId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'E75FE679-0303-4DD1-8252-1143B4FA8A27	',
                    ],
                ],
                [
                    'name' => 'PopProduct',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '类目英文名，详情可参考[能力开通](~~465341~~)中的类目英文名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ocr',
                    ],
                ],
                [
                    'name' => 'PopApiName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '能力接口名，详情可参考[能力开通](~~465341~~)中的能力接口名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RecognizeIdentityCard	',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '异步任务状态。包括：'."\n"
                            ."\n"
                            .'- QUEUING：任务排队中'."\n"
                            .'- PROCESSING：异步处理中'."\n"
                            .'- PROCESS_SUCCESS：处理成功'."\n"
                            .'- PROCESS_FAILED：处理失败'."\n"
                            .'- TIMEOUT_FAILED：任务超时未处理完成'."\n"
                            .'- LIMIT_RETRY_FAILED：超过最大重试次数'."\n"
                            .'- JOB_CANCELED：任务取消',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PROCESS_SUCCESS',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '起始页。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页查询条数，最大500条。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response.',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '43A0AEB6-45F4-4138-8E89-E1A5D63200E3',
                            ],
                            'Data' => [
                                'description' => '返回的数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'CurrentPage' => [
                                        'description' => '当前页。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '每页查询条数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'TotalPage' => [
                                        'description' => '总页数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'TotalRecord' => [
                                        'description' => '总条数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '22',
                                    ],
                                    'Result' => [
                                        'description' => '查询结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'CallerParentId' => [
                                                    'description' => '任务提交人ID。',
                                                    'type' => 'string',
                                                    'example' => '1850343078585779',
                                                ],
                                                'EndTime' => [
                                                    'description' => '任务结束时间。',
                                                    'type' => 'string',
                                                    'example' => '2023-01-04 17:18:44',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '任务创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2023-01-04 17:18:44',
                                                ],
                                                'JobId' => [
                                                    'description' => '异步任务ID。',
                                                    'type' => 'string',
                                                    'example' => '49E2CC28-ED1D-4CC5-854D-7D0AE2B20976',
                                                ],
                                                'PopApiName' => [
                                                    'description' => '能力接口名，详情可参考[能力开通](~~465341~~)中的能力接口名。',
                                                    'type' => 'string',
                                                    'example' => 'DetectVideoShot',
                                                ],
                                                'PopProduct' => [
                                                    'description' => '类目英文名，详情可参考[能力开通](~~465341~~)中的类目英文名。',
                                                    'type' => 'string',
                                                    'example' => 'videorecog',
                                                ],
                                                'StartTime' => [
                                                    'description' => '任务开始时间。',
                                                    'type' => 'string',
                                                    'example' => '2023-01-04 17:18:44',
                                                ],
                                                'Status' => [
                                                    'description' => '异步任务状态。包括：'."\n"
                                                        ."\n"
                                                        .'- QUEUING：任务排队中'."\n"
                                                        .'- PROCESSING：异步处理中'."\n"
                                                        .'- PROCESS_SUCCESS：处理成功'."\n"
                                                        .'- PROCESS_FAILED：处理失败'."\n"
                                                        .'- TIMEOUT_FAILED：任务超时未处理完成'."\n"
                                                        .'- LIMIT_RETRY_FAILED：超过最大重试次数',
                                                    'type' => 'string',
                                                    'example' => 'PROCESS_SUCCESS',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'description' => '异步任务错误码信息。',
                                'type' => 'string',
                                'example' => 'paramsIllegal',
                            ],
                            'Success' => [
                                'description' => '是否调用成功，取值true或false。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpCode' => [
                                'description' => '异步任务错误码。',
                                'type' => 'string',
                                'example' => 'InvalidParameter',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"43A0AEB6-45F4-4138-8E89-E1A5D63200E3\\",\\n  \\"Data\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"TotalPage\\": 2,\\n    \\"TotalRecord\\": 22,\\n    \\"Result\\": [\\n      {\\n        \\"CallerParentId\\": \\"1850343078585779\\",\\n        \\"EndTime\\": \\"2023-01-04 17:18:44\\",\\n        \\"GmtCreate\\": \\"2023-01-04 17:18:44\\",\\n        \\"JobId\\": \\"49E2CC28-ED1D-4CC5-854D-7D0AE2B20976\\",\\n        \\"PopApiName\\": \\"DetectVideoShot\\",\\n        \\"PopProduct\\": \\"videorecog\\",\\n        \\"StartTime\\": \\"2023-01-04 17:18:44\\",\\n        \\"Status\\": \\"PROCESS_SUCCESS\\"\\n      }\\n    ]\\n  },\\n  \\"Message\\": \\"paramsIllegal\\",\\n  \\"Success\\": true,\\n  \\"HttpCode\\": \\"InvalidParameter\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryAsyncJobListResponse>\\n    <RequestId>43A0AEB6-45F4-4138-8E89-E1A5D63200E3</RequestId>\\n    <Data>\\n        <CurrentPage>1</CurrentPage>\\n        <PageSize>20</PageSize>\\n        <TotalPage>2</TotalPage>\\n        <TotalRecord>22</TotalRecord>\\n        <Result>\\n            <CallerParentId>1850343078585779</CallerParentId>\\n            <EndTime>2023-01-04 17:18:44</EndTime>\\n            <GmtCreate>2023-01-04 17:18:44</GmtCreate>\\n            <JobId>49E2CC28-ED1D-4CC5-854D-7D0AE2B20976</JobId>\\n            <PopApiName>DetectVideoShot</PopApiName>\\n            <PopProduct>videorecog</PopProduct>\\n            <StartTime>2023-01-04 17:18:44</StartTime>\\n            <Status>PROCESS_SUCCESS</Status>\\n        </Result>\\n    </Data>\\n    <Message>paramsIllegal</Message>\\n    <Success>true</Success>\\n    <HttpCode>InvalidParameter</HttpCode>\\n</QueryAsyncJobListResponse>","errorExample":""}]',
            'title' => '查询异步任务列表',
            'description' => '## 功能描述'."\n"
                .'在您成功提交异步任务以后，可以通过QueryAsyncJobList来查询已经提交的任务信息列表。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言查询异步任务列表的示例代码，请参见[查询异步任务列表示例代码](~~607975~~)。'."\n"
                ."\n"
                .'## 调用说明'."\n"
                ."\n"
                .'- 只能查询当前账号提交的异步任务。'."\n"
                .'- 只有开通了对应能力以后才可以根据类目名称和能力接口名称进行筛选查询。'."\n"
                .'- 当前接口调用每5秒内只允许请求1次，如果返回报错，请5秒后再次重试。'."\n"
                .'- 无法查询时间长度超过24小时以外的数据。',
            'requestParamsDescription' => '### 请求示例'."\n"
                .'```http'."\n"
                .'http(s)://viapi.cn-shanghai.aliyuncs.com/?action=QueryAsyncJobList //更多关于访问域名（Endpoint）信息，请参见：https://help.aliyun.com/document_detail/143103.html'."\n"
                .'&callerParentId=1850343078585779 '."\n"
                .'&startTime=2023-01-04 17:18:44'."\n"
                .'&endTime=2023-01-04 17:18:44'."\n"
                .'&jobId=49E2CC28-ED1D-4CC5-854D-7D0AE2B20976'."\n"
                .'&popProduct=videorecog'."\n"
                .'&popApiName=DetectVideoShot'."\n"
                .'&status=PROCESS_SUCCESS'."\n"
                .'&gmtCreate=2023-01-04 17:18:44      '."\n"
                .'&<公共请求参数>'."\n"
                .'```',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于取消排队中异步任务的错误码，详情请参见[常见错误码](~~606865~~)。',
        ],
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输入异步接口返回的RequestId，输入后可以查询异步接口的真实请求结果。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'B6590005-5E7C-4A25-8F97-4479888D8271',
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
                                'example' => '0E448D84-1736-1BCD-BEA5-866C413515A1',
                            ],
                            'Data' => [
                                'description' => '返回的数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '异步任务状态。包括：'."\n"
                                            ."\n"
                                            .'- QUEUING：任务排队中'."\n"
                                            .'- PROCESSING：异步处理中'."\n"
                                            .'- PROCESS_SUCCESS：处理成功'."\n"
                                            .'- PROCESS_FAILED：处理失败'."\n"
                                            .'- TIMEOUT_FAILED：任务超时未处理完成'."\n"
                                            .'- LIMIT_RETRY_FAILED：超过最大重试次数（如返回该状态，请稍后重新调用算法接口，然后调用查询异步任务结果接口GetAsyncJobResult）',
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
                                        'example' => '"{\\"jsonUrl\\":\\"http://vibktprfx-prod-prod-damo-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/eas-video-quality-assessment/2023-01-11-16/01%3A52-crxCR763VXTeY0bP.json?Expires=1673425915&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=iW07EIZaqaiMNoF3RJZwsLVxOx****\\",\\"pdfUrl\\":\\"http://vibktprfx-prod-prod-damo-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/eas-video-quality-assessment/2023-01-11-16/01%3A52-crxCR763VXTeY0bP.pdf?Expires=1673425916&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=BvZ3ayeTTxaR65ZvQ2%2FoE8W8Lr****\\"}"',
                                    ],
                                    'ErrorCode' => [
                                        'description' => '异步任务错误码。',
                                        'type' => 'string',
                                        'example' => 'InvalidParameter',
                                    ],
                                    'JobId' => [
                                        'description' => '异步任务ID。',
                                        'type' => 'string',
                                        'example' => 'A421D5F0-4F73-19F5-8D92-D509FAD281D2',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0E448D84-1736-1BCD-BEA5-866C413515A1\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"PROCESS_SUCCESS\\",\\n    \\"ErrorMessage\\": \\"paramsIllegal\\",\\n    \\"Result\\": \\"\\\\\\"{\\\\\\\\\\\\\\"jsonUrl\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"http://vibktprfx-prod-prod-damo-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/eas-video-quality-assessment/2023-01-11-16/01%3A52-crxCR763VXTeY0bP.json?Expires=1673425915&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=iW07EIZaqaiMNoF3RJZwsLVxOx****\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"pdfUrl\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"http://vibktprfx-prod-prod-damo-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/eas-video-quality-assessment/2023-01-11-16/01%3A52-crxCR763VXTeY0bP.pdf?Expires=1673425916&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=BvZ3ayeTTxaR65ZvQ2%2FoE8W8Lr****\\\\\\\\\\\\\\"}\\\\\\"\\",\\n    \\"ErrorCode\\": \\"InvalidParameter\\",\\n    \\"JobId\\": \\"A421D5F0-4F73-19F5-8D92-D509FAD281D2\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAsyncJobResultResponse>\\n    <RequestId>0E448D84-1736-1BCD-BEA5-866C413515A1</RequestId>\\n    <Data>\\n        <Status>PROCESS_SUCCESS</Status>\\n        <JobId>A421D5F0-4F73-19F5-8D92-D509FAD281D2</JobId>\\n        <Result>{\\"jsonUrl\\":\\"http://vibktprfx-prod-prod-damo-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/eas-video-quality-assessment/2023-01-11-16/01%3A52-crxCR763VXTeY0bP.json?Expires=1673425915&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=iW07EIZaqaiMNoF3RJZwsLVxOx****\\",\\"pdfUrl\\":\\"http://vibktprfx-prod-prod-damo-eas-cn-shanghai.oss-cn-shanghai.aliyuncs.com/eas-video-quality-assessment/2023-01-11-16/01%3A52-crxCR763VXTeY0bP.pdf?Expires=1673425916&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=BvZ3ayeTTxaR65ZvQ2%2FoE8W8Lr****\\"}</Result>\\n    </Data>\\n</GetAsyncJobResultResponse>","errorExample":""}]',
            'title' => '查询异步任务结果',
            'summary' => '针对异步接口，调用API接口后，返回的并不是真正的请求结果，您需要保存返回结果中的RequestId，然后调用GetAsyncJobResult来获取真正的请求结果。',
            'description' => '## 功能描述'."\n"
                .'针对异步接口，调用API接口后，返回的并不是真正的请求结果，您需要保存返回结果中的RequestId，然后调用GetAsyncJobResult来获取真正的请求结果。'."\n"
                ."\n"
                .'> - 异步任务的文件有过期时间，有效期是30分钟。如需长期使用，需及时将文件下载到本地服务器或存储在OSS中。有关OSS更多操作信息，请参见[上传文件](~~31886~~)。'."\n"
                .'- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于查询异步任务结果的错误码，详情请参见[常见错误码](~~606865~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'CancelWaitingAsyncJob' => [
            'summary' => '通过CancelWaitingAsyncJob可以取消任务状态为QUEUING（排队中）的异步任务，任务状态为PROCESSING（已经开始处理的任务）无法取消。取消后任务状态为JOB_CANCELED（任务取消），已经取消的任务不会再次执行。',
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
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '异步接口返回的RequestId。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'E75FE679-0303-4DD1-8252-1143B4FA8A27	',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response.',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '43A0AEB6-45F4-4138-8E89-E1A5D63200E3',
                            ],
                            'Message' => [
                                'description' => '返回结果信息。',
                                'type' => 'string',
                                'example' => 'Cancel job success',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpCode' => [
                                'description' => '异步任务错误码。',
                                'type' => 'string',
                                'example' => 'InvalidParameter',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"43A0AEB6-45F4-4138-8E89-E1A5D63200E3\\",\\n  \\"Message\\": \\"Cancel job success\\",\\n  \\"Success\\": true,\\n  \\"HttpCode\\": \\"InvalidParameter\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelWaitingAsyncJobResponse>\\n    <RequestId>43A0AEB6-45F4-4138-8E89-E1A5D63200E3</RequestId>\\n    <Message>Cancel job success</Message>\\n    <Success>true</Success>\\n    <HttpCode>InvalidParameter</HttpCode>\\n</CancelWaitingAsyncJobResponse>","errorExample":""}]',
            'title' => '取消排队中异步任务',
            'description' => '## 功能描述'."\n"
                .'通过CancelWaitingAsyncJob可以取消任务状态为QUEUING（排队中）的异步任务，任务状态为PROCESSING（已经开始处理的任务）无法取消。取消后任务状态为JOB_CANCELED（任务取消），已经取消的任务不会再次执行。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                .'- 本接口只能取消任务状态为QUEUING（排队中）的异步任务，其他状态的任务无法取消。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言取消排队中异步任务的示例代码，请参见[取消排队中异步任务示例代码](~~607976~~)。',
            'requestParamsDescription' => '### 请求示例'."\n"
                ."\n"
                .'```http'."\n"
                .'http(s)://viapi.cn-shanghai.aliyuncs.com/?action=CancelWaitingAsyncJob //更多关于访问域名（Endpoint）信息，请参见：https://help.aliyun.com/document_detail/143103.html'."\n"
                .'&jobId=E75FE679-0303-4DD1-8252-1143B4FA8A27	'."\n"
                .'&<公共请求参数>'."\n"
                .'```',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于取消排队中异步任务的错误码，详情请参见[常见错误码](~~606865~~)。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'viapi.cn-shanghai.aliyuncs.com',
        ],
    ],
];
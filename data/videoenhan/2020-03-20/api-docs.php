<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'videoenhan',
        'version' => '2020-03-20',
    ],
    'directories' => [
        [
            'id' => 69027,
            'title' => '摘要',
            'type' => 'directory',
            'children' => [
                'AbstractEcommerceVideo',
                'AbstractFilmVideo',
            ],
        ],
        [
            'id' => 69030,
            'title' => '调色',
            'type' => 'directory',
            'children' => [
                'AdjustVideoColor',
                'ToneSdrVideo',
            ],
        ],
        [
            'id' => 69033,
            'title' => '其他能力',
            'type' => 'directory',
            'children' => [
                'ChangeVideoSize',
                'ConvertHdrVideo',
                'EnhanceVideoQuality',
                'GenerateVideo',
                'InterpolateVideoFrame',
                'MergeVideoFace',
                'SuperResolveVideo',
            ],
        ],
        [
            'id' => 69041,
            'title' => '擦除',
            'type' => 'directory',
            'children' => [
                'EraseVideoLogo',
                'EraseVideoSubtitles',
            ],
        ],
        [
            'id' => 69044,
            'title' => '结果',
            'type' => 'directory',
            'children' => [
                'GetAsyncJobResult',
            ],
        ],
        [
            'id' => 156246,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'AddFaceVideoTemplate',
                'DeleteFaceVideoTemplate',
                'MergeVideoModelFace',
                'QueryFaceVideoTemplate',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'EnhancePortraitVideo',
                'GenerateHumanAnimeStyleVideo',
                'ReduceVideoNoise',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'AbstractEcommerceVideo' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'VideoUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输入视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/AbstractEcommerceVideo/AbstractEcommerceVideo1.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '摘要时长，单位秒。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => true,
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'Width',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频的宽度。取值范围32~2160。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '480',
                    ],
                ],
                [
                    'name' => 'Height',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频的高度。取值范围32~2160。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '480',
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
                                'example' => '50B33B81-CCB8-42BC-8A73-AC838618936E',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoCoverUrl' => [
                                        'description' => '输出视频封面的URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/shop-video-abs/2020-03-20-19/YVgDynxB.jpg?Expires=1584707249&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=e5Q3O%2ByA6H7UhYJeMZxz4p70de****',
                                    ],
                                    'VideoUrl' => [
                                        'description' => '输出的视频摘要结果URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/shop-video-abs/2020-03-20-19/YVgDynxB.mp4?Expires=1584707249&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=KErufmbHvTUYYLRj6i42wY7Tew****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50B33B81-CCB8-42BC-8A73-AC838618936E\\",\\n  \\"Data\\": {\\n    \\"VideoCoverUrl\\": \\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/shop-video-abs/2020-03-20-19/YVgDynxB.jpg?Expires=1584707249&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=e5Q3O%2ByA6H7UhYJeMZxz4p70de****\\",\\n    \\"VideoUrl\\": \\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/shop-video-abs/2020-03-20-19/YVgDynxB.mp4?Expires=1584707249&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=KErufmbHvTUYYLRj6i42wY7Tew****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<AbstractEcommerceVideoResponse>\\n    <RequestId>50B33B81-CCB8-42BC-8A73-AC838618936E</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</AbstractEcommerceVideoResponse>","errorExample":""}]',
            'title' => '电商视频摘要',
            'summary' => '本文介绍电商视频摘要AbstractEcommerceVideo的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'电商视频摘要能力可以对输入视频，按照指定时长输出视频摘要。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=videoenhan&children=AbstractEcommerceVideo)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/AbstractEcommerceVideo?lang=JAVA&sdkStyle=dara&params=%7B%22VideoUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FAbstractEcommerceVideo%2FAbstractEcommerceVideo1.mp4%22%2C%22Duration%22%3A10%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                ."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
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
                ."\n"
                .'- 视频类型：MP4、AVI、MKV、MOV。'."\n"
                .'- 视频大小：不超过1 GB。'."\n"
                .'- 视频时长：不超过3分钟，超过部分会被截断。'."\n"
                .'- URL地址不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于电商视频摘要的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口。'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用AbstractEcommerceVideo接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'requestParamsDescription' => '> 若Width和Height均没有填写，则按原比例输出。若只填写了一个，则等比例缩放。',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的电商视频摘要能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于电商视频摘要的错误码，详情请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'AbstractFilmVideo' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'VideoUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输入视频URL。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/AbstractFilmVideo/AbstractFilmVideo1.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'Length',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '指定视频剪辑时长，单位秒，取值范围为5~120。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '5',
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
                                'example' => '9A5B872B-1BF0-4D84-90DA-A2EE1F072B82',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoUrl' => [
                                        'description' => '输出裁剪后的视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/film-summary/EA61D012-5F89-4102-931E-419158BE2ADA_gb27k00.mp4?Expires=1584707613&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=weTexlBR1wmQlAhuU2JXaE7AyJ****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9A5B872B-1BF0-4D84-90DA-A2EE1F072B82\\",\\n  \\"Data\\": {\\n    \\"VideoUrl\\": \\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/film-summary/EA61D012-5F89-4102-931E-419158BE2ADA_gb27k00.mp4?Expires=1584707613&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=weTexlBR1wmQlAhuU2JXaE7AyJ****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<AbstractFilmVideoResponse>\\n    <RequestId>9A5B872B-1BF0-4D84-90DA-A2EE1F072B82</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</AbstractFilmVideoResponse>","errorExample":""}]',
            'title' => '影视视频摘要',
            'summary' => '本文介绍影视视频摘要AbstractFilmVideo的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'影视视频摘要能力可以对输入的影视视频提取指定时长的视频。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=videoenhan&children=AbstractFilmVideo)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/AbstractFilmVideo?lang=JAVA&sdkStyle=dara&params=%7B%22VideoUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FAbstractFilmVideo%2FAbstractFilmVideo1.mp4%22%2C%22Length%22%3A10%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                ."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
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
                ."\n"
                .'- 视频类型：MP4、AVI、MOV、FLV、MXF。'."\n"
                .'- 视频大小：不超过1 GB。'."\n"
                .'- 视频时长：大于2分钟，小于2小时，超出2小时部分会被截断，小于2分钟系统会报错。'."\n"
                .'- URL地址不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于影视视频摘要的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口。'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用AbstractFilmVideo接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的影视视频摘要能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'具体请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'AdjustVideoColor' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'VideoUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/AdjustVideoColor/AdjustVideoColor1.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'VideoBitrate',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频码率，单位为M，默认20M，取值范围`[8,200]`。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'VideoCodec',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频编码格式，可选h264、hevc、prores三种。默认值为h264。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'h264',
                    ],
                ],
                [
                    'name' => 'VideoFormat',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频格式，可选mp4、mov两种。默认值为mp4。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mp4',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '指定调色模式，默认值为LogC。具体请参见调色模式说明。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LogC',
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
                                'example' => 'C4EB5E0B-0718-42CC-9B2C-1FB149256874',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoUrl' => [
                                        'description' => '调色后的视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-recolor/2021-01-21-07/46%3A05-test.mov?Expires=1611216966&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=icKn5gEQ6rNlSHmCi2zAf2tC0L****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C4EB5E0B-0718-42CC-9B2C-1FB149256874\\",\\n  \\"Data\\": {\\n    \\"VideoUrl\\": \\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-recolor/2021-01-21-07/46%3A05-test.mov?Expires=1611216966&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=icKn5gEQ6rNlSHmCi2zAf2tC0L****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<AdjustVideoColorResponse>\\n    <RequestId>C4EB5E0B-0718-42CC-9B2C-1FB149256874</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</AdjustVideoColorResponse>","errorExample":""}]',
            'title' => '视频调色',
            'summary' => '本文介绍视频校色AdjustVideoColor的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'视频校色能力可以对输入的视频进行调色，可根据视频之间的相似性进行关联调色。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=videoenhan&children=AdjustVideoColor)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/AdjustVideoColor?lang=JAVA&sdkStyle=dara&params=%7B%22VideoUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FAdjustVideoColor%2FAdjustVideoColor1.mp4%22%2C%22Mode%22%3A%22LogC%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                .' - 参考文档中提供的示例代码进行适当修改后调用。'."\n"
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
                ."\n"
                .'- 视频格式：MP4，AVI，MKV，MOV，FLV，TS，MPG，MXF。'."\n"
                .'- 视频大小：不超过1 GB。'."\n"
                .'- 视频分辨率：大于360×360像素，小于3840×2160像素，超过后系统会自动对原始视频进行缩放。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于视频校色的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口。'."\n"
                ."\n\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用AdjustVideoColor接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'requestParamsDescription' => '调色模式如下。'."\n"
                .'| mode标识 | 名称     | 说明                              |'."\n"
                .'| -------- | -------- | --------------------------------- |'."\n"
                .'| LogC     | 灰片调色 | 输入为低对比的灰片，通常为10bit。 |'."\n"
                .'| Rec709   | 普通调色 | 输入为普通视频，通常为8bit。      |',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的视频校色能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'具体请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'ToneSdrVideo' => [
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
                    'name' => 'VideoURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输入视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://invi-label.oss-cn-shanghai.aliyuncs.com/label/temp/faceswap/test_for_api/xxxx.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'Bitrate',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频码率，单位为M，默认20M，取值范围`[8,200]`。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '8',
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'RecolorModel',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '使用的调色模型，可选`auto_l1`（较弱）和`auto_l2`（较强）两种方式，默认为`auto_l2`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'auto_l2',
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
                                'example' => '89B5AFF1-8A64-4F76-B391-56AD7D22DE35',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoURL' => [
                                        'description' => '处理结果视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/sdr-color-enhance/20-12-22/SxBKgwBhlObusG20_20-12-22-07-59-45.mp4?Expires=1608625795&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=maoOZ52y7U9ZuL2KqI0IfGq8%2FR****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"89B5AFF1-8A64-4F76-B391-56AD7D22DE35\\",\\n  \\"Data\\": {\\n    \\"VideoURL\\": \\"http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/sdr-color-enhance/20-12-22/SxBKgwBhlObusG20_20-12-22-07-59-45.mp4?Expires=1608625795&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=maoOZ52y7U9ZuL2KqI0IfGq8%2FR****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<ToneSdrVideoResponse>\\n    <RequestId>89B5AFF1-8A64-4F76-B391-56AD7D22DE35</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</ToneSdrVideoResponse>","errorExample":""}]',
            'title' => '视频SDR调色',
            'summary' => '本文介绍视频SDR调色ToneSdrVideo的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'视频SDR调色能力基于内容语义识别与内容颜色，自动优化SDR视频的颜色，提升视频色彩质量。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=videoenhan&children=ToneSdrVideo)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                .'视频网站SDR片源色彩优化：对SDR格式的视频进行自动化调色优化，让视频获得更好的色彩表达与视觉质量提升。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                .'业内领先推出该算法能力，解决没有升级到HDR视频的色彩优化问题。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/ToneSdrVideo?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
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
                ."\n"
                .'- 视频类型：MP4、AVI、MKV、MOV、FLV、TS、MPG、MXF。'."\n"
                .'- 视频大小：不超过1 GB。'."\n"
                .'- 视频分辨率：不小于360×360像素，不大于3840×2160像素。'."\n"
                .'- URL地址不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于视频SDR调色的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口。'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用ToneSdrVideo接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的视频SDR调色能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于视频SDR调色的错误码，详情请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'ChangeVideoSize' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'VideoUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/ChangeVideoSize/ChangeVideoSize1.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'Width',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频的宽度，单位像素，取值范围32~2160。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '2160',
                        'minimum' => '32',
                        'example' => '600',
                    ],
                ],
                [
                    'name' => 'Height',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频的高度，单位像素，取值范围32~2160。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '2160',
                        'minimum' => '32',
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'CropType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '裁剪方式，可选smart、fill、cut。具体含义如下所示。'."\n"
                            ."\n"
                            .'- `smart`（智能裁剪）：根据主体位置智能决定填充还是裁剪，或者填充一部分，裁切一部分。'."\n"
                            ."\n"
                            .'- `fill`（填充）：按最长边进行画幅调整，超出部分填充模糊背景或颜色，或者进行拉伸处理。'."\n"
                            ."\n"
                            .'- `cut`（裁剪）：按最短边进行画幅调整，超出部分裁剪掉。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'smart',
                    ],
                ],
                [
                    'name' => 'FillType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '填充方式。包括image、color、stretch。具体含义如下所示。'."\n"
                            ."\n"
                            .'- image：填充视频中间一帧的内容，填充前进行模糊处理。'."\n"
                            ."\n"
                            .'- color：指定填充颜色，表示RGB值的数组，例如红色`[255,0,0]`。 '."\n"
                            ."\n"
                            .'- stretch：通过拉伸进行填充。如果画幅调整比例较大会导致画面扭曲严重，不推荐使用。'."\n"
                            .' '."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'image',
                    ],
                ],
                [
                    'name' => 'Tightness',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '裁切框的紧凑度，取值范围0~1。值越大裁掉的内容越多。默认值为0.6。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'maximum' => '1',
                        'minimum' => '0',
                        'example' => '0.5',
                        'default' => '0.6',
                    ],
                ],
                [
                    'name' => 'R',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当FillType取值为`color`时需要设置。表示RGB值中R的取值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '255',
                        'minimum' => '0',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'G',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当FillType取值为`color`时需要设置。表示RGB值中G的取值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '255',
                        'minimum' => '0',
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'B',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当FillType取值为`color`时需要设置。表示RGB值中B的取值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '255',
                        'minimum' => '0',
                        'example' => '0',
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
                                'example' => 'C00C5A32-9F54-44F0-9778-0968DD9BF22A',
                            ],
                            'Data' => [
                                'description' => '返回的数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoCoverUrl' => [
                                        'description' => '输出视频封面URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-crop/2020-07-24-20/ZTZslWcU.jpg?Expires=1595597077&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=5cq1NNBEzS64U7RTXRBGlo7WPy****',
                                    ],
                                    'VideoUrl' => [
                                        'description' => '输出视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-crop/2020-07-24-20/ZTZslWcU.mp4?Expires=1595597077&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=ZyvD9AXCT2IUFkVJngQdbXMwX6****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C00C5A32-9F54-44F0-9778-0968DD9BF22A\\",\\n  \\"Data\\": {\\n    \\"VideoCoverUrl\\": \\"http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-crop/2020-07-24-20/ZTZslWcU.jpg?Expires=1595597077&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=5cq1NNBEzS64U7RTXRBGlo7WPy****\\",\\n    \\"VideoUrl\\": \\"http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-crop/2020-07-24-20/ZTZslWcU.mp4?Expires=1595597077&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=ZyvD9AXCT2IUFkVJngQdbXMwX6****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<ChangeVideoSizeResponse>\\n    <RequestId>C00C5A32-9F54-44F0-9778-0968DD9BF22A</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</ChangeVideoSizeResponse>","errorExample":""}]',
            'title' => '视频画幅变换',
            'summary' => '本文介绍视频画幅变换ChangeVideoSize的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'视频画幅变换能力可以对输入视频进行智能裁剪和填充，输出任意分辨率的视频。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=videoenhan&children=ChangeVideoSize)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/ChangeVideoSize?lang=JAVA&sdkStyle=dara&params=%7B%22VideoUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FChangeVideoSize%2FChangeVideoSize1.mp4%22%2C%22Height%22%3A1000%2C%22Width%22%3A600%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
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
                ."\n"
                .'- 视频格式：MP4、AVI、MOV、FLV。'."\n"
                .'- 视频大小：不超过1 GB。'."\n"
                .'- 视频时长：时长小于2小时，超出会被截断。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于视频画幅变换的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口。'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用ChangeVideoSize接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的视频画幅变换能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于视频画幅变换的错误码，具体请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'ConvertHdrVideo' => [
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
                    'name' => 'VideoURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输入视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://invi-label.oss-cn-shanghai.aliyuncs.com/label/temp/faceswap/test_for_api/xxxx.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'HDRFormat',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频的HDR格式，默认为PQ。仅支持`PQ`和`HLG`两种模式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HLG',
                        'default' => 'PQ',
                    ],
                ],
                [
                    'name' => 'MaxIlluminance',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频最大亮度，单位nit。'."\n"
                            ."\n"
                            .'- PQ模式下该参数固定为600nit，输入无效。'."\n"
                            .'- HLG模式下该参数从500nit~1000nit范围里设定，默认1000nit。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '500',
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'Bitrate',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频码率，单位为M，默认20M，取值范围`[8,200]`。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '8',
                        'example' => '30',
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
                                'example' => 'E0CF495F-E806-4B9C-B204-E1230608239D',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoURL' => [
                                        'description' => '处理结果视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/hdr-enhance/20-12-22/HaKDdTI48i2GQGy7_20-12-22-06-42-45.mp4?Expires=1608621178&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=SWc90T0JHg5eWc64x8GmYHKsvX****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E0CF495F-E806-4B9C-B204-E1230608239D\\",\\n  \\"Data\\": {\\n    \\"VideoURL\\": \\"http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/hdr-enhance/20-12-22/HaKDdTI48i2GQGy7_20-12-22-06-42-45.mp4?Expires=1608621178&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=SWc90T0JHg5eWc64x8GmYHKsvX****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<ConvertHdrVideoResponse>\\n    <RequestId>E0CF495F-E806-4B9C-B204-E1230608239D</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</ConvertHdrVideoResponse>","errorExample":""}]',
            'title' => 'SDR转HDR',
            'summary' => '本文介绍SDR转HDR ConvertHdrVideo的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'SDR转HDR能力可将普通SDR视频转化为HDR视频，色域提升至BT2020，色深提升至10bit，亮度提升至最高1000nit，以提供更高品质的视频内容。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                .'升级HDR电影、电视剧等视频：将SDR格式的电影、电视剧视频，通过基于深度学习的SDR转HDR算法功能，即可获得宽色域、展现更多色彩细节的HDR格式视频。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                .'可以解决大量SDR片源提升为HDR片源的问题。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/ConvertHdrVideo?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
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
                ."\n"
                .'- 视频类型：MP4、AVI、MKV、MOV、FLV、TS、MPG、MXF。'."\n"
                .'- 视频大小：不超过1 GB。'."\n"
                .'- 视频分辨率：不小于360×360像素，不大于3840×2160像素。'."\n"
                .'- URL地址不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于SDR转HDR的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口。'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用ConvertHdrVideo接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的SDR转HDR能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于SDR转HDR的错误码，详情请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'EnhanceVideoQuality' => [
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
                    'name' => 'VideoURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输入视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://invi-label.oss-cn-shanghai.aliyuncs.com/label/temp/faceswap/test_for_api/xxxx.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'OutPutWidth',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频的宽，默认为输入2倍，单位为px，取值范围`[180,7680]`。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '7680',
                        'minimum' => '180',
                        'example' => '2560',
                    ],
                ],
                [
                    'name' => 'OutPutHeight',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频的高，默认为输入2倍，单位为px，取值范围`[180,4320]`。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '4320',
                        'minimum' => '180',
                        'example' => '1920',
                    ],
                ],
                [
                    'name' => 'FrameRate',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频的帧率，默认50帧，取值范围`[1,120]`。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '120',
                        'minimum' => '1',
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'HDRFormat',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频的HDR格式，仅支持PQ和HLG两种格式，默认为PQ。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PQ',
                        'default' => 'PQ',
                    ],
                ],
                [
                    'name' => 'MaxIlluminance',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频最大亮度，单位为nit。'."\n"
                            ."\n"
                            .'- 在**PQ**模式下该参数固定为600nit，输入无效。'."\n"
                            .'- 在**HLG**模式下该参数取值范围为500nit~1000nit，默认1000nit。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '500',
                        'example' => '600',
                    ],
                ],
                [
                    'name' => 'Bitrate',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频码率，单位为MB，默认20MB，取值范围`[8,200]`。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '8',
                        'example' => '20',
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
                                'example' => '881F39DC-C107-4817-A6D5-000BE833CC2A',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoURL' => [
                                        'description' => '处理后的视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/uhd-enhance/20-11-20/Wwzf9z75GO5XdisS_20-11-20-07-13-48.mp4?Expires=1605858272&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=vvY0D%2Bl5eEzp%2BD7mPOWz0zMU7v****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"881F39DC-C107-4817-A6D5-000BE833CC2A\\",\\n  \\"Data\\": {\\n    \\"VideoURL\\": \\"http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/uhd-enhance/20-11-20/Wwzf9z75GO5XdisS_20-11-20-07-13-48.mp4?Expires=1605858272&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=vvY0D%2Bl5eEzp%2BD7mPOWz0zMU7v****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<EnhanceVideoQualityResponse>\\n    <RequestId>881F39DC-C107-4817-A6D5-000BE833CC2A</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</EnhanceVideoQualityResponse>","errorExample":""}]',
            'title' => '视频综合增强',
            'summary' => '本文介绍视频综合增强EnhanceVideoQuality的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'视频综合增强能力基于AI深度学习算法，可以对输入的SDR视频进行插帧、超分辨率SR、SDR转HDR综合增强处理。'."\n"
                ."\n"
                .'>- 生成的视频是标准HDR格式视频，请在合适的HDR设备上播放。'."\n"
                .'- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                ."\n"
                .'- 高清视频播放系统：对于非高清、非超高清、SDR的片源，通过视频综合增强，可以转化成高清、超高清、HDR、更高帧率的视频，给观众更好的观影体验。'."\n"
                .'- 家庭视频增强：受限于过去拍摄设备的技术水平，珍贵的家庭视频以较低分辨率保存，在现在的高清设备上播放时，观看效果较差。通过视频综合增强，可以获得更高清的观看效果，适应当前的播放技术发展。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                ."\n"
                .'- 真实的细节展示：能够真实推理出画面中的明暗变化细节，让您获得真正的HDR体验。'."\n"
                .'- 更流畅的画面：可推理出原视频帧间的动作变化，加入更多视频帧，让画面更流畅。'."\n"
                .'- 更高的分辨率：将画面分辨率提升的同时，优化画面细节、纹理和锐度等，同时抑制块噪声和压缩噪声等现象。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/EnhanceVideoQuality?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'    '."\n"
                .'    - 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                ."\n"
                .'    - 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                ."\n"
                .'    - 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[视频综合增强示例代码](~~602942~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                ."\n"
                .'- 视频类型：MP4、AVI、MKV、MOV、FLV、TS、MPG、MXF。'."\n"
                .'- 视频大小：不超过1 GB。'."\n"
                .'- 视频时长：不超过10分钟。'."\n"
                .'- 视频分辨率：大于360×360像素，小于1920×1080像素。'."\n"
                .'- URL地址不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于视频综合增强的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口。'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用EnhanceVideoQuality接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的视频综合增强能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[视频综合增强示例代码](~~602942~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于视频综合增强的错误码，详情请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'GenerateVideo' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Scene',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '生成视频场景类型。取值如下：'."\n"
                            ."\n"
                            .'- costume：服饰场景（默认）'."\n"
                            .'- general：通用场景'."\n"
                            .'- keeporder：强制按输入素材顺序合成视频场景',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'costume',
                    ],
                ],
                [
                    'name' => 'Width',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频的width，取值范围32~2160。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '640',
                    ],
                ],
                [
                    'name' => 'Height',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频的height，取值范围32~2160。若width和height均没有设置，则按照750×750输出。如果设置了其中一个，则按照1:1输出。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '640',
                    ],
                ],
                [
                    'name' => 'Style',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频节奏。可选normal、fast、slow。默认为normal。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'fast',
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频时长，单位为秒。默认为20秒。'."\n"
                            .'视频输出最短为5秒，最长为60秒。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'DurationAdaption',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频时长自适应。取值true或false，为true时`Duration`设置不生效。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'TransitionStyle',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '镜头转场风格。共计15种风格。如果没有设置则按照`Style`随机。'."\n"
                            .'目前支持的镜头转场风格包括：basic（无）、slow（舒缓）、fast（动感）、normal（自然）、ink（水墨）、glitch（机械故障）、shift（切换）、mosaic（马赛克）、shutter（百叶窗）、zoom（缩放）、mask（遮罩）、brush（笔刷）、wind（风舞）、smog（烟雾）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'brush',
                    ],
                ],
                [
                    'name' => 'SmartEffect',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否添加智能特效，默认为true。当前支持音画联动和静转动特效。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'PuzzleEffect',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否动态拼图特效，支持在单镜头中通过拼图展示多个视频图像素材。默认为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Mute',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '生成视频是否静音。默认为false。'."\n"
                            ."\n"
                            .'> 如果没有音乐素材或视频素材无声时生成的视频没有音乐。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'FileList',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '1',
                        'type' => 'array',
                        'items' => [
                            'description' => '1',
                            'type' => 'object',
                            'properties' => [
                                'Type' => [
                                    'description' => '输入文件类型。包括video、audio、image。'."\n"
                                        .'可以同时输入多种素材（video+image+audio或video+image或video+audio或image+audio）。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'video',
                                ],
                                'FileUrl' => [
                                    'description' => '输入文件URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。'."\n"
                                        .'输入限制：'."\n"
                                        .'- 图片格式：JPG、PNG。'."\n"
                                        .'- 图片大小：每张图片大于30 KB，小于100 MB。'."\n"
                                        .'- 视频格式：MP4、AVI、MKV、MOV、JPG、PNG、BMP、MP3、WAV。'."\n"
                                        .'- 视频大小：不超过1 GB。'."\n"
                                        .'- 视频素材最多5个，且总时长不超过3分钟，超过部分会被自动截断丢弃（按输入视频顺序保留前3分钟）。图像素材最多40个。音频素材最多1个。'."\n"
                                        .'- URL地址中不能包含中文字符。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/GenerateVideo/1-video1.mp4',
                                    'isFileTransferUrl' => true,
                                ],
                                'FileName' => [
                                    'description' => '输入文件名称。视频音频文件格式为MP4或MP3时，可以忽略文件后缀。其他格式必须包含后缀。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => '1-video1.mp4',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 300,
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
                                'example' => '7CB9B663-3EF8-4C9C-A464-FDA2B5F1E3A4',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。'."\n"
                                    .'该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoCoverUrl' => [
                                        'description' => '输出视频封面URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-gen/2021-05-07-15/B9MGfwxu.mp4?Expires=1620372653&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=F9flL1n5GPYaae0dLl%2F8D%2Bn4j6****',
                                    ],
                                    'VideoUrl' => [
                                        'description' => '输出视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-gen/2021-05-07-15/B9MGfwxu.jpg?Expires=1620372653&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=djBvGvdJu8bd%2FC%2BVHdg1d57U%2Bu****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7CB9B663-3EF8-4C9C-A464-FDA2B5F1E3A4\\",\\n  \\"Data\\": {\\n    \\"VideoCoverUrl\\": \\"http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-gen/2021-05-07-15/B9MGfwxu.mp4?Expires=1620372653&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=F9flL1n5GPYaae0dLl%2F8D%2Bn4j6****\\",\\n    \\"VideoUrl\\": \\"http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-gen/2021-05-07-15/B9MGfwxu.jpg?Expires=1620372653&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=djBvGvdJu8bd%2FC%2BVHdg1d57U%2Bu****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<GenerateVideoResponse>\\n    <RequestId>7CB9B663-3EF8-4C9C-A464-FDA2B5F1E3A4</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</GenerateVideoResponse>","errorExample":""}]',
            'title' => '通用视频生成',
            'summary' => '本文介绍通用视频生成GenerateVideo的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'通用视频生成能力可以根据输入的原始视频，智能生成营销短视频。支持图像、视频、音频等素材混合处理，支持转场特效等加工效果叠加。输入视频的场景类型可选择服饰场景（默认）或通用场景，通过分析视频中的人和物，生成故事线来组织素材的顺序。您也可以通过输入参数的设置强制按输入素材顺序合成视频场景。'."\n"
                ."\n"
                .'通用视频生成能力主要包含以下功能点：'."\n"
                .'- 输入文件类型：支持video（视频）、audio（音频）、image（图像）中的一种或多种。'."\n"
                .'- 输出视频节奏：可选normal（普通）、fast（快）、slow（慢），默认为normal（普通）。'."\n"
                .'- 镜头转场风格的选择：共计15种风格，如果没有设置则按照Style随机，目前支持的镜头转场风格包括：basic（无）、slow（舒缓）、fast（动感）、normal（自然）、ink（水墨）、glitch（机械故障）、shift（切换）、mosaic（马赛克）、shutter（百叶窗）、zoom（缩放）、mask（遮罩）、brush（笔刷）、wind（风舞）、smog（烟雾）。'."\n"
                .'- 智能特效：当前支持音画联动和静转动特效，默认添加。'."\n"
                .'- 动态拼图特效：支持在单镜头中通过拼图展示多个视频图像素材，默认不添加。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=videoenhan&children=GenerateVideo)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                .'- 信息流广告制作：基于提供的素材批量生成广告视频，进行低成本投放。'."\n"
                .'- 短视频二次加工：基于提供的视频内容和图片素材，进行新的视频素材制作。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                .'- 全自动生产：根据业务需要配置参数，自动化生产视频。'."\n"
                .'- 功能丰富：支持多种素材输入，支持转场特效等，实现更丰富的业务场景应用。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/GenerateVideo?lang=JAVA&sdkStyle=dara&params=%7B%22FileList%22%3A%5B%7B%22FileUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FGenerateVideo%2F1-video1.mp4%22%2C%22Type%22%3A%22video%22%2C%22FileName%22%3A%221-video1%22%7D%2C%7B%22FileUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FGenerateVideo%2F1-video2.mp4%22%2C%22Type%22%3A%22video%22%2C%22FileName%22%3A%221-video2%22%7D%2C%7B%22FileUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FGenerateVideo%2F1-pic1.jpg%22%2C%22Type%22%3A%22image%22%2C%22FileName%22%3A%221-pic1%22%7D%2C%7B%22FileUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FGenerateVideo%2F1-pic2.jpg%22%2C%22Type%22%3A%22image%22%2C%22FileName%22%3A%221-pic2%22%7D%2C%7B%22FileUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FGenerateVideo%2F1-pic3.jpg%22%2C%22Type%22%3A%22image%22%2C%22FileName%22%3A%221-pic3%22%7D%2C%7B%22FileUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FGenerateVideo%2F1-pic4.jpg%22%2C%22Type%22%3A%22image%22%2C%22FileName%22%3A%221-pic4%22%7D%2C%7B%22FileUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FGenerateVideo%2FI%2520Dunno-Grapes_spinningmerkaba.mp3%22%2C%22Type%22%3A%22audio%22%2C%22FileName%22%3A%22I%2520Dunno-Grapes_spinningmerkaba%22%7D%5D%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'    - 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'    - 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                .'    - 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[通用视频生成示例代码](~~478975~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                ."\n"
                .'- 图片格式：JPG、PNG。'."\n"
                .'- 图片大小：每张图片大于30 KB，小于100 MB。'."\n"
                .'- 视频格式：MP4、AVI、MKV、MOV、JPG、PNG、BMP、MP3、WAV。'."\n"
                .'- 视频大小：不超过1 GB。'."\n"
                .'- 视频素材最多5个，且总时长不超过3分钟，超过部分会被自动截断丢弃（按输入视频顺序保留前3分钟）。图像素材最多40个。音频素材最多1个。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于通用视频生成的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                .'> 下方调试接口为付费接口。'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用GenerateVideo接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。具体操作，请参见[GetAsyncJobResult](~~607824~~)。其中Result字段为返回结果的JSON序列化字符串，JSON中字段说明请参见返回数据中的Data参数。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的通用视频生成能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[通用视频生成示例代码](~~478975~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。'."\n",
            'extraInfo' => '## 错误码'."\n"
                .'具体请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'InterpolateVideoFrame' => [
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
                    'name' => 'VideoURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输入视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/InterpolateVideoFrame/InterpolateVideoFrame3.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'FrameRate',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频的帧率，默认输入50，取值范围`[1,120]`。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '120',
                        'minimum' => '1',
                        'example' => '70',
                    ],
                ],
                [
                    'name' => 'Bitrate',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频码率，单位为Mbps，默认20 Mbps，取值范围`[8,200]`',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '8',
                        'example' => '30',
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
                                'example' => '7EF85B5B-FB44-4C3E-9B8F-08C6CD912CEB',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoURL' => [
                                        'description' => '处理结果视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-interp/20-12-22/mRsPNVunG7717nne_20-12-22-07-29-51.mp4?Expires=1608624020&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=NFjSLll8E7E1tkuLPFyTpr6ULi****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7EF85B5B-FB44-4C3E-9B8F-08C6CD912CEB\\",\\n  \\"Data\\": {\\n    \\"VideoURL\\": \\"http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-interp/20-12-22/mRsPNVunG7717nne_20-12-22-07-29-51.mp4?Expires=1608624020&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=NFjSLll8E7E1tkuLPFyTpr6ULi****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<InterpolateVideoFrameResponse>\\n    <RequestId>7EF85B5B-FB44-4C3E-9B8F-08C6CD912CEB</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</InterpolateVideoFrameResponse>","errorExample":""}]',
            'title' => '视频插帧',
            'summary' => '本文介绍视频插帧InterpolateVideoFrame的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'视频插帧能力基于深度学习的帧率上变换，通过插帧网络合成任意时刻的视频帧，从而优化解决视频中卡顿、抖动等画质问题。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=videoenhan&children=InterpolateVideoFrame)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                ."\n"
                .'- 高帧率视频制作：视频网站通过该技术，可以将低帧率视频转化为高帧率视频，让视频观影体验更流畅，提升观看效果。'."\n"
                .'- 慢动作视频制作：将普通帧率（如25帧）视频插帧后，再按正常帧率播放，成为慢动作视频。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                .'基于深度学习算法，推理出中间帧中物体对象的变化位置，让插帧后的视频更加流畅，且无抖动、顿挫等现象。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/InterpolateVideoFrame?lang=JAVA&sdkStyle=dara&params=%7B%22VideoURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FInterpolateVideoFrame%2FInterpolateVideoFrame1.mp4%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                .' - 参考文档中提供的示例代码进行适当修改后调用。'."\n"
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
                ."\n"
                .'- 视频类型：MP4、AVI、MKV、MOV、FLV、TS、MPG、MXF。'."\n"
                .'- 视频大小：不超过1 GB。'."\n"
                .'- 视频分辨率：不小于360×360像素，不大于1920×1080像素。'."\n"
                .'- URL地址不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于视频插帧的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口。'."\n"
                ."\n\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用InterpolateVideoFrame接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607974~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的视频插帧能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'# 示例代码'."\n"
                .'该能力常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于视频插帧的错误码，详情请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'MergeVideoFace' => [
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
                    'name' => 'VideoURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输入视频的URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/MergeVideoFace/MergeVideoFace1.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'ReferenceURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '替换后的人脸参考图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。'."\n"
                            .'输入限制：'."\n"
                            .'- 图像格式：JPEG、JPG、PNG。'."\n"
                            .'- 图像分辨率：大于等于128×128像素，小于等于4000×4000像素。'."\n"
                            .'- 图像大小：不大于20 MB。'."\n"
                            .'- URL地址不能包含中文字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/MergeVideoFace/MergeVideoFace-pic1.png',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'AddWatermark',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否添加水印。取值范围如下：'."\n"
                            ."\n"
                            .'- True（默认）：添加水印。'."\n"
                            .'- False：不添加水印。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'True',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'Enhance',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启人脸美颜增强。取值范围如下：'."\n"
                            ."\n"
                            .'- False（默认）：不开启人脸美颜增强。'."\n"
                            .'- True：开启人脸美颜增强。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'False',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'WatermarkType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '水印类型。取值范围如下：'."\n"
                            ."\n"
                            .'- EN（默认）：英文水印。'."\n"
                            .'- CN：中文水印。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EN',
                        'default' => 'EN',
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
                                'example' => 'DEF90E76-B62D-45EF-8835-CA3C83842B18',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。'."\n"
                                    .'该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoURL' => [
                                        'description' => '处理后的视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-face-fusion/A657011C-82B4-4705-A5DB-69B18B7CE89D.mp4?Expires=1606378308&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=Hl3cq5XedTGCscOSr0OGVxAS2o****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DEF90E76-B62D-45EF-8835-CA3C83842B18\\",\\n  \\"Data\\": {\\n    \\"VideoURL\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-face-fusion/A657011C-82B4-4705-A5DB-69B18B7CE89D.mp4?Expires=1606378308&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=Hl3cq5XedTGCscOSr0OGVxAS2o****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<MergeVideoFaceResponse>\\n    <RequestId>DEF90E76-B62D-45EF-8835-CA3C83842B18</RequestId>\\n    <Data>\\n        <VideoURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-face-fusion/A657011C-82B4-4705-A5DB-69B18B7CE89D.mp4?Expires=1606378308&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=Hl3cq5XedTGCscOSr0OGVxAS2o****</VideoURL>\\n    </Data>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</MergeVideoFaceResponse>","errorExample":""}]',
            'title' => '视频人脸融合',
            'summary' => '本文介绍视频人脸融合MergeVideoFace的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'在获得用户授权的前提下，通用视频人脸融合能力可以将视频中检测到的最大人脸，融合进另一个人的人脸特征，达到换脸的感官效果。'."\n"
                .'通用视频人脸融合只需要输入一张带融合人脸图像与一段视频，就可以将图像人脸融合进视频中。'."\n"
                .'适用场景：'."\n"
                .'- 每次合成独立完成，无通用模板场景。'."\n"
                .'- 仅支持视频中只有一张人脸的场景。'."\n"
                ."\n"
                .'如需使用多人场景或有固定数量的视频模板，请参见[模板视频人脸融合](~~467950~~)（MergeVideoModelFace）。'."\n"
                .'为保证生成内容的安全合法，请勿使用公众人物或涉及敏感信息的图像或视频进行融合，同时，本服务也会在合成结果的左下角处添加**Generated by AI**的水印内容，效果如下图所示。'."\n"
                .'![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230213/ezcg/MergeVideoModelFace.png)'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=videoenhan&children=MergeVideoFace)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                .'- 影视后期制作：在影视后期制作时，因为某些原因需要替换演员，通过视频人脸融合技术，可利用前期拍摄素材进行处理，让前期视频素材中的人物看起来是新的演员在表演，可以为制片方节省大量的重新拍摄成本。'."\n"
                .'- 娱乐性短视频制作：用户可以将已获授权的合法视频中的人物，换成自己的人脸，生成趣味性视频。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                .'- 高保真、低违和效果：融合后的人脸保留了替换者人脸身份信息的视觉特征，而融入被替换者人脸中又无违和感。'."\n"
                .'- 表情肤色一致性：融合后的人脸最大限度保留被替换者的面目表情、肤色一致性。'."\n"
                .'- 支持复杂人脸角度：支持模板人脸偏侧一定角度，融合后的结果真实稳定。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：'."\n"
                .'  - 请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'  - 开通服务后请[提交申请](https://vision.console.aliyun.com/cn-shanghai/applyopen/videoenhan/MergeVideoFace)，申请通过后方可使用。'."\n"
                ."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/MergeVideoFace?lang=JAVA&sdkStyle=dara&params=%7B%22VideoURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FMergeVideoFace%2FMergeVideoFace1.mp4%22%2C%22ReferenceURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FMergeVideoFace%2FMergeVideoFace-pic1.png%22%2C%22PostURL%22%3A%22%20%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[视频人脸融合示例代码](~~602481~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 视频类型：MP4、AVI、MKV、MOV、FLV、TS、MPG。'."\n"
                .'- 视频分辨率：大于360×360像素，小于1920×1920像素。'."\n"
                .'- 视频大小：不大于120 MB。'."\n"
                .'- 图像格式：JPEG、JPG、PNG。'."\n"
                .'- 图像分辨率：大于等于128×128像素，小于等于4000×4000像素。'."\n"
                .'- 图像大小：不大于20 MB。'."\n"
                .'- URL地址不能包含中文字符。'."\n"
                .'- 视频只支持静态（恒定）帧率视频，暂不支持动态（可变）帧率视频。'."\n"
                ."\n"
                .'## 图像质量建议'."\n"
                ."\n"
                .'- 要求保证图像中的人脸清晰。图像中人脸尺寸建议大于64×64像素，人脸区域建议不大于全图区域的2/3。'."\n"
                .'- 建议图像中人脸五官区域轮廓完整，无明显遮挡。人脸融合算法支持人脸偏侧一定角度，在偏侧角度不超过30度的情况下能取得更佳效果。'."\n"
                .'- 建议待融合人脸的图像中只包含一张人脸，如果包含多张人脸，则默认选择图像中最大的人脸进行融合。'."\n"
                ."\n"
                .'推荐图像示例：'."\n"
                .'![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221114/jris/MergeImageFacetuijian.png)'."\n"
                ."\n"
                .'不推荐图像示例：'."\n"
                .'![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221114/rkbx/MergeImageFacebutuijian.png)'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用MergeVideoFace接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于通用视频人脸融合的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=videoenhan&children=MergeVideoFace)。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的通用视频人脸融合能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[通用视频人脸融合示例代码](~~602481~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于视频人脸融合的错误码，详情请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'SuperResolveVideo' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'VideoUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输入视频URL。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/SuperResolveVideo/SuperResolveVideo2.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'BitRate',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输出视频编码率，单位为Mbps，默认10 Mbps。取值范围1~100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
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
                                'example' => '186AC396-0EEC-46F1-AAA1-BF3585227427',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoUrl' => [
                                        'description' => '输出处理后的视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-super-resolution/2020-03-20-12/12%3A11-UlLVELFzIy5EAyEh.mp4?Expires=1584708132&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=0V8yKrCVybC4KIPtRuGKJDJaQT****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"186AC396-0EEC-46F1-AAA1-BF3585227427\\",\\n  \\"Data\\": {\\n    \\"VideoUrl\\": \\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-super-resolution/2020-03-20-12/12%3A11-UlLVELFzIy5EAyEh.mp4?Expires=1584708132&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=0V8yKrCVybC4KIPtRuGKJDJaQT****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<SuperResolveVideoResponse>\\n    <RequestId>186AC396-0EEC-46F1-AAA1-BF3585227427</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</SuperResolveVideoResponse>","errorExample":""}]',
            'title' => '视频超分辨',
            'summary' => '视频超分辨率。',
            'description' => '## 功能描述'."\n"
                .'视频超分辨能力可以将输入视频放大2倍尺寸输出，并基于细节推断增强输出视频画质，输出视频为h264编码、MP4格式。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=videoenhan&children=SuperResolveVideo)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                ."\n"
                .'- 旧视频翻新：基于深度学习的视频超分辨算法，可将低分辨率的视频，增强转化为高分辨视频。'."\n"
                .'- 网络视频播放：在低带宽条件下传输低分辨率视频，再通过视频超分辨算法，将视频在播放端还原成高分辨视频。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                ."\n"
                .'- 基于深度学习算法，推理出的视频细节更真实。'."\n"
                .'- 以原视频两倍尺寸输出，获得更大分辨率增加效果。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/SuperResolveVideo?lang=JAVA&sdkStyle=dara&params=%7B%22VideoUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FSuperResolveVideo%2FSuperResolveVideo1.mp4%22%2C%22BitRate%22%3A5%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[视频超分辨示例代码](~~602945~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                ."\n"
                .'- 视频格式：MP4，AVI，MKV，MOV， FLV，TS，MPG，MXF。'."\n"
                .'- 视频大小：不超过1 GB。'."\n"
                .'- 视频分辨率：大于360×360像素，小于1920×1080像素。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于视频超分辨的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口。'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用SuperResolveVideo接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的视频超分辨能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[视频超分辨示例代码](~~602945~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'具体请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'EraseVideoLogo' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'VideoUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/EraseVideoLogo/EraseVideoLogo1.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'Boxes',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => 'Logo区域位置信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'W' => [
                                    'description' => 'Logo区域宽度与视频宽度的占比值，取值0~1。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                    'example' => '1.0',
                                ],
                                'H' => [
                                    'description' => 'Logo区域高度与视频高度的占比值，取值0~1。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                    'example' => '1.0',
                                ],
                                'Y' => [
                                    'description' => 'Logo区域左上角点y坐标与视频高度的占比值，取值0~1。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                    'example' => '0.0',
                                ],
                                'X' => [
                                    'description' => 'Logo区域左上角点x坐标与视频宽度的占比值，取值0~1。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                    'example' => '0.0',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
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
                                'example' => '95532F36-98FC-4DCD-815C-282BB26D2DA1',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoUrl' => [
                                        'description' => '输出处理后的视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-delogo/2020-03-20-11/53%3A56-DGNUGG7AcRlAylhr.mp4?Expires=1584707036&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=7CvsX7X1rSU%2B%2FDxnw484lb3LCD****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"95532F36-98FC-4DCD-815C-282BB26D2DA1\\",\\n  \\"Data\\": {\\n    \\"VideoUrl\\": \\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-delogo/2020-03-20-11/53%3A56-DGNUGG7AcRlAylhr.mp4?Expires=1584707036&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=7CvsX7X1rSU%2B%2FDxnw484lb3LCD****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<EraseVideoLogoResponse>\\n    <RequestId>95532F36-98FC-4DCD-815C-282BB26D2DA1</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</EraseVideoLogoResponse>","errorExample":""}]',
            'title' => '视频标志擦除',
            'summary' => '本文介绍视频标志擦除EraseVideoLogo的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'视频标志擦除能力可以擦除视频中的常见标志，如台标、互联网平台logo等。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=videoenhan&children=EraseVideoLogo)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/EraseVideoLogo?lang=JAVA&sdkStyle=dara&params=%7B%22VideoUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FEraseVideoLogo%2FEraseVideoLogo1.mp4%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[视频标志擦除示例代码](~~477825~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                ."\n"
                .'- 视频格式：MP4。'."\n"
                .'- 视频大小：不超过1 GB。'."\n"
                .'- 视频分辨率：不超过1080P。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于视频标志擦除的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口。'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用EraseVideoLogo接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的视频标志擦除能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[视频标志擦除示例代码](~~477825~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'具体请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'EraseVideoSubtitles' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'VideoUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/EraseVideoSubtitles/EraseVideoSubtitles1.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'BX',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '字幕区域左上角点x坐标/视频宽度，取值0~1。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'BY',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '字幕区域左上角点y坐标/视频高度，取值0~1。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.75',
                    ],
                ],
                [
                    'name' => 'BW',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '字幕区域的宽度/视频宽度，取值0~1。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'BH',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '字幕区域的高度/视频高度，取值0~1。',
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                        'example' => '0.25',
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
                                'example' => 'CCB082BF-A6B1-4C28-9E49-562EEE7DE639',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoUrl' => [
                                        'description' => '输出处理后的视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-desubtitle/2021-04-13-10/41%3A57-TcFd6Zug7gXwbeqs.mp4?Expires=1618312317&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=LZnGSQ8019%2Br5rcR4vKOaaT2UE****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CCB082BF-A6B1-4C28-9E49-562EEE7DE639\\",\\n  \\"Data\\": {\\n    \\"VideoUrl\\": \\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-desubtitle/2021-04-13-10/41%3A57-TcFd6Zug7gXwbeqs.mp4?Expires=1618312317&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=LZnGSQ8019%2Br5rcR4vKOaaT2UE****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<EraseVideoSubtitlesResponse>\\n    <RequestId>CCB082BF-A6B1-4C28-9E49-562EEE7DE639</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</EraseVideoSubtitlesResponse>","errorExample":""}]',
            'title' => '视频字幕擦除',
            'summary' => '本文介绍视频字幕擦除EraseVideoSubtitles的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'视频字幕擦除能力可以擦除全视频中都出现文字的区域，如电影电视剧中下方的白色字幕。若视频中字幕位置字体较大，则擦除效果会有所降低；对于封面，视频字幕擦除能力是通过将全视频抽帧的方式来检测擦除区域，若封面中字幕出现时间不足1秒，则字幕位置会被忽略。'."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=videoenhan&children=EraseVideoSubtitles)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/EraseVideoSubtitles?lang=JAVA&sdkStyle=dara&params=%7B%22VideoUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Fvideoenhan%2FEraseVideoSubtitles%2FEraseVideoSubtitles1.mp4%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[视频字幕擦除示例代码](~~602965~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                ."\n"
                .'- 视频格式：MP4。'."\n"
                .'- 视频大小：不超过1 GB。'."\n"
                .'- 视频分辨率：不超过1080P。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于视频字幕擦除的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口。'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用EraseVideoSubtitles接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'requestParamsDescription' => ' > bx、by、bw、bh，定义一个字幕区域，只有字幕区域内的字幕会被擦除，默认视频下方区域：`（bx=0,by=0.75,bw=1,bh=0.25）`。',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的视频字幕擦除能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[视频字幕擦除示例代码](~~602965~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于视频字幕擦除的错误码，具体请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'GetAsyncJobResult' => [
            'methods' => [
                'get',
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
                'operationType' => 'create',
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
                                'example' => '43A0AEB6-45F4-4138-8E89-E1A5D63200E3',
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
                                        'example' => '{\\"VideoUrl\\":\\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-super-resolution/2020-03-26-02/55%3A59-XFLsuEKpPxleHl4n.mp4?Expires=1585193159&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=OqsxMwAKsFVjPO%2Brgw%2BpXHIm6v****\\"}',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"43A0AEB6-45F4-4138-8E89-E1A5D63200E3\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"PROCESS_SUCCESS\\",\\n    \\"ErrorMessage\\": \\"paramsIllegal\\",\\n    \\"Result\\": \\"{\\\\\\\\\\\\\\"VideoUrl\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-super-resolution/2020-03-26-02/55%3A59-XFLsuEKpPxleHl4n.mp4?Expires=1585193159&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=OqsxMwAKsFVjPO%2Brgw%2BpXHIm6v****\\\\\\\\\\\\\\"}\\",\\n    \\"ErrorCode\\": \\"InvalidParameter\\",\\n    \\"JobId\\": \\"49E2CC28-ED1D-4CC5-854D-7D0AE2B20976\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>43A0AEB6-45F4-4138-8E89-E1A5D63200E3</RequestId>\\n<Data>\\n    <Status>PROCESS_SUCCESS</Status>\\n    <JobId>186AC396-0EEC-46F1-AAA1-BF3585227427</JobId>\\n    <Result>{\\"VideoUrl\\":\\"http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-super-resolution/2020-03-26-02/55%3A59-XFLsuEKpPxleHl4n.mp4?Expires=1585193159&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=OqsxMwAKsFVjPO%2Brgw%2BpXHIm6v****\\"}</Result>\\n</Data>","errorExample":""}]',
            'title' => '查询异步任务结果',
            'summary' => '本文档介绍查询异步任务结果GetAsyncJobResult的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'异步接口调用API接口后，返回的并不是真正的请求结果，您需要保存返回结果中的RequestId，然后调用GetAsyncJobResult来获取真正的请求结果。'."\n"
                ."\n"
                .'> - 异步任务的文件有过期时间，有效期是30分钟。如需长期使用，需及时将文件下载到本地服务器或存储在OSS中。有关OSS更多操作信息，请参见[上传文件](~~31886~~)。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n\n"
                .'当前视频生产类目中所有接口均为异步接口，均需要调用GetAsyncJobResult来获取真实的请求结果。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## Result反序列化'."\n"
                .'将上面Result反序列化展示如下。'."\n"
                .'```'."\n"
                .'{'."\n"
                .'	"VideoUrl": "http://algo-app-aic-vd-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/video-super-resolution/2020-03-26-02/55%3A59-XFLsuEKpPxleHl4n.mp4?Expires=1585193159&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=OqsxMwAKsFVjPO%2Brgw%2BpXHIm6v****"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'## 错误码'."\n"
                .'关于查询异步任务结果的错误码，详情请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'AddFaceVideoTemplate' => [
            'summary' => '本文介绍视频人脸融合模版增加AddFaceVideoTemplate的语法及示例。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'VideoURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '视频模板的URL地址。当前仅支持上海地域的OSS链接，如何生成URL请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://invi-label.oss-cn-shanghai.aliyuncs.com/labl/temp/faceswap/test_for_api/xxxx.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'VideoScene',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '判断视频换脸场景。取值如下：'."\n"
                            .'- single（默认）：单人视频换脸。'."\n"
                            .'- multi：多人视频换脸。'."\n"
                            ."\n"
                            .'> - 如果输入视频为单人物视频，**VideoScene**参数可以选择不输入或者传入`single`。'."\n"
                            .'- 如果输入视频为多人视频，**VideoScene**参数必须传入`multi`，后续可通过模板换脸接口进行多人一对一指定人脸融合。'."\n"
                            .'- 如果输入视频为多人视频，但用户只想替换其中某一个ID人物，则按照多人视频场景进行模板添加，即**VideoScene**参数传入`multi`值，后续可通过模板换脸接口指定想融合的具体人物。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'single',
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
                                'example' => 'F61182AE-515B-5B0A-A877-1C9AE908FF15',
                            ],
                            'Message' => [
                                'description' => '提交异步任务后的提示信息。',
                                'type' => 'string',
                                'example' => '该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。',
                            ],
                            'Date' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~159423~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'TemplateId' => [
                                        'description' => '模板ID。',
                                        'type' => 'string',
                                        'example' => '6cd509ea-54fa-4730-8e9d-c94cadcda048',
                                    ],
                                    'FaceInfos' => [
                                        'description' => '输入视频中存在多个人脸时，返回各人脸ID和各人脸裁剪后的图像。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '输入视频中存在多个人脸时，返回各人脸ID和各人脸裁剪后的图像。',
                                            'type' => 'object',
                                            'properties' => [
                                                'TemplateFaceID' => [
                                                    'description' => '人脸对应的子模板ID。',
                                                    'type' => 'string',
                                                    'example' => '7d1a2498-0f9a-42d8-bae8-c7e478188106_0',
                                                ],
                                                'TemplateFaceURL' => [
                                                    'description' => '人脸对应的子模板ID对应的人脸图。',
                                                    'type' => 'string',
                                                    'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-face-fusion/template/xhtest_7d1a2498-0f9a-42d8-bae8-c7e478188106/xhtest_7d1a2498-0f9a-42d8-bae8-c7e478188106_0.png?Expires=1686040781&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=WVYTf%2F3knRuUPXSVGVz%2FZi3Miu****',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TransResult' => [
                                        'description' => '视频帧的人脸位置转换矩阵文件，用于辅助用户校验换脸信息。',
                                        'type' => 'string',
                                        'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-face-fusion/template/1952059581270833_308f1611-7de8-4f16-9175-f1e997caadf6-V1/1952059581270833_308f1611-7de8-4f16-9175-f1e997caadf6-V1_trans.npy?Expires=1717055504&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=zg784H1bv5hwaKPvAywp8p5Hla****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F61182AE-515B-5B0A-A877-1C9AE908FF15\\",\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\",\\n  \\"Date\\": {\\n    \\"TemplateId\\": \\"6cd509ea-54fa-4730-8e9d-c94cadcda048\\",\\n    \\"FaceInfos\\": [\\n      {\\n        \\"TemplateFaceID\\": \\"7d1a2498-0f9a-42d8-bae8-c7e478188106_0\\",\\n        \\"TemplateFaceURL\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-face-fusion/template/xhtest_7d1a2498-0f9a-42d8-bae8-c7e478188106/xhtest_7d1a2498-0f9a-42d8-bae8-c7e478188106_0.png?Expires=1686040781&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=WVYTf%2F3knRuUPXSVGVz%2FZi3Miu****\\"\\n      }\\n    ],\\n    \\"TransResult\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-face-fusion/template/1952059581270833_308f1611-7de8-4f16-9175-f1e997caadf6-V1/1952059581270833_308f1611-7de8-4f16-9175-f1e997caadf6-V1_trans.npy?Expires=1717055504&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=zg784H1bv5hwaKPvAywp8p5Hla****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AddFaceVideoTemplateResponse>\\n    <RequestId>F61182AE-515B-5B0A-A877-1C9AE908FF15</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</AddFaceVideoTemplateResponse>","errorExample":""}]',
            'title' => '视频人脸融合模版增加',
            'description' => '## 功能描述'."\n"
                .'视频人脸融合模板增加功能可以将已通过内容审核的包含人脸的视频，作为视频人脸融合的模板，供模板视频人脸融合功能使用。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'><notice>'."\n"
                .'本能力仅限企业认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/document_detail/428525.html)。'."\n"
                .'></notice>'."\n"
                ."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/AddFaceVideoTemplate?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[视频人脸融合模板增加示例代码](~~602556~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                ."\n"
                .'- 视频类型：MP4、AVI、MKV、MOV、FLV、TS、MPG。'."\n"
                .'- 视频分辨率：大于等于320×320像素，小于等于1920×1920像素。'."\n"
                .'- 视频大小：不大于120 MB。'."\n"
                .'- URL地址不能包含中文字符。'."\n"
                .'- 同一用户最多可支持上传3000个视频模板。'."\n"
                .'- 添加多人脸视频时，单个视频出现的人物ID个数不能大于6个，如果超过6个人脸ID，则返回出现频次最高的6个人。'."\n"
                .'- 视频只支持静态（恒定）帧率视频，暂不支持动态（可变）帧率视频。'."\n"
                ."\n"
                .'## 出参说明'."\n"
                .'- 添加模板过程中，系统会自动进行涉黄涉政的过滤检查，如不符合规范，则无法正确添加。'."\n"
                .'- 多人视频中如出现多张ID人脸，系统会按照多张脸出现的时长进行排序返回。'."\n"
                ."\n"
                .'## 视频帧质量建议'."\n"
                .'- 要求保证图像中的人脸清晰。图像中人脸尺寸建议大于64×64像素，人脸区域建议不大于全图区域的2/3。'."\n"
                .'- 建议图像中人脸五官区域轮廓完整，无明显遮挡。人脸融合算法支持人脸偏侧一定角度，在偏侧角度不超过30度的情况下能取得更佳效果。'."\n"
                .'- 对于多人脸视频场景，系统会自动识别出整个视频中的不同人物ID，建议视频中的人物不要出现角度过大的转动以及明显遮挡的情况，否则识别出的人物ID个数可能不准确。'."\n"
                ."\n"
                .'推荐图像示例：'."\n"
                .'![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221114/jris/MergeImageFacetuijian.png" width="300)'."\n"
                .'![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230609/otnv/MergeVideoModelFacetuijian.png" width="300)'."\n"
                ."\n"
                .'不推荐图像示例：'."\n"
                .'![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221114/rkbx/MergeImageFacebutuijian.png" width="300)'."\n"
                .'![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230609/jcgb/MergeVideoModelFacebutuijian.png" width="300)'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用AddFaceVideoTemplate接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~159423~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'视频人脸融合模板增加能力可免费调用。',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~159423~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的视频人脸融合模板增加能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[视频人脸融合模板增加示例代码](~~602556~~)。'."\n",
            'extraInfo' => '## 错误码'."\n"
                .'关于视频人脸融合模板增加的错误码，详情请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'DeleteFaceVideoTemplate' => [
            'summary' => '本文介绍视频人脸融合模版删除DeleteFaceVideoTemplate的语法及示例。',
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
                    'name' => 'TemplateId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '待删除的模板ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3bf2418c-7adf-4002-a9d6-2f7cf1889c0d',
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
                                'example' => '2337D184-CD63-57B5-96A2-B60AABCB7B58',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2337D184-CD63-57B5-96A2-B60AABCB7B58\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFaceVideoTemplateResponse>\\n    <RequestId>2337D184-CD63-57B5-96A2-B60AABCB7B58</RequestId>\\n</DeleteFaceVideoTemplateResponse>","errorExample":""}]',
            'title' => '视频人脸融合模版删除',
            'description' => '## 功能描述'."\n"
                .'视频人脸融合模板删除功能可以删除用户已添加过的模板视频。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'><notice>'."\n"
                .'本能力仅限企业认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/document_detail/428525.html)。'."\n"
                .'></notice>'."\n"
                ."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/DeleteFaceVideoTemplate?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 前提条件：已通过视频人脸融合模板增加（AddFaceVideoTemplate）创建生成了TemplateId。'."\n"
                .'6. 开发接入步骤：   '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'7. 示例代码：该能力常用语言的示例代码，请参见[视频人脸融合模板删除示例代码](~~602697~~)。'."\n"
                ."\n"
                .'8. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的视频人脸融合模板删除能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'##示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[视频人脸融合模板删除示例代码](~~602697~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于视频人脸融合模板删除的错误码，详情请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'MergeVideoModelFace' => [
            'summary' => '本文介绍模版视频人脸融合MergeVideoModelFace的语法及示例。',
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
                    'name' => 'TemplateId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '视频人脸模板的模板ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3bf2418c-7adf-4002-a9d6-2f7cf1889c0d',
                    ],
                ],
                [
                    'name' => 'FaceImageURL',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '替换后的人脸参考图像URL地址（TemplateId为单人脸时不可为空）。**FaceImageURL**仅为单人视频场景时使用，此时无需输入**MergeInfos**字段。'."\n"
                            .'当前仅支持上海地域的OSS链接，如何生成URL请参见[文件URL处理](~~155645~~)。'."\n"
                            ."\n"
                            .'输入限制：'."\n"
                            .'- 图像格式：JPEG、JPG、PNG。'."\n"
                            .'- 图像分辨率：大于等于128×128像素，小于等于4000×4000像素。'."\n"
                            .'- 图像大小：不大于20 MB。'."\n"
                            .'- URL地址不能包含中文字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/MergeVideoFace/MergeVideoFace-xxxx.png',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'AddWatermark',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否添加水印。取值范围如下：'."\n"
                            ."\n"
                            .'- True（默认）：添加水印。'."\n"
                            .'- False：不添加水印。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'True',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'Enhance',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启人脸美颜增强。取值范围如下：'."\n"
                            ."\n"
                            .'- False（默认）：不开启人脸美颜增强。'."\n"
                            .'- True：开启人脸美颜增强。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'True',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'WatermarkType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '水印类型。取值范围如下：'."\n"
                            ."\n"
                            .'- EN（默认）：英文水印。'."\n"
                            .'- CN：中文水印。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EN',
                        'default' => 'EN',
                    ],
                ],
                [
                    'name' => 'MergeInfos',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '融合参数，模板视频的人脸信息及待融合的用户人脸图片（TemplateId为多人脸时不可为空）。'."\n"
                            ."\n"
                            .'> - **MergeInfos**仅为多人视频场景时使用，需确保用户添加模板时**VideoScene**参数传入了`multi`值，其中传入的**TemplateFaceID**需要与添加模版时返回的**FaceInfos**里的**TemplateFaceID**一一对应。'."\n"
                            .'- 同时传入**FaceImageURL**和**MergeInfos**，以**TemplateId**为单/多人脸为准，过滤另一个入参。',
                        'type' => 'array',
                        'items' => [
                            'description' => '融合参数，模板视频的人脸信息及待融合的用户人脸图片（TemplateId为多人脸时不可为空）。'."\n"
                                ."\n"
                                .'> - **MergeInfos**仅为多人视频场景时使用，需确保用户添加模板时**VideoScene**参数传入了`multi`值，其中传入的**TemplateFaceID**需要与添加模版时返回的**FaceInfos**里的**TemplateFaceID**一一对应。'."\n"
                                .'- 同时传入**FaceImageURL**和**MergeInfos**，以**TemplateId**为单/多人脸为准，过滤另一个入参。',
                            'type' => 'object',
                            'properties' => [
                                'TemplateFaceID' => [
                                    'description' => '多脸模板对应的某个人脸的子ID。需要先在[视频人脸融合模板增加](~~468904~~)接口中获取（传入多个TemplateFaceID时，不可重复）。'."\n"
                                        ."\n"
                                        .'> 同时传入**TemplateFaceID**和**TemplateFaceURL**时，**TemplateFaceID**优先。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'f913c614-d542-42ba-b173-07db2058c207_0',
                                ],
                                'TemplateFaceURL' => [
                                    'description' => '多脸模板对应的某个人脸的图像URL。此情况允许用户自己使用第三方检测模块抽帧进行人脸识别后获取相应的人脸图像。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-/videoenhan/MergeVideoModelFace/xxx.jpg',
                                ],
                                'ImageURL' => [
                                    'description' => '该人脸待替换的图像URL。当前仅支持上海地域的OSS链接，如何生成URL请参见[文件URL处理](~~155645~~)。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/MergeVideoModelFace/xxx.jpg',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
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
                                'example' => '334F180F-3B50-51CB-B4CB-9A86A542D3BC',
                            ],
                            'Message' => [
                                'description' => '提交异步任务后的提示信息。',
                                'type' => 'string',
                                'example' => '该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~159423~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoURL' => [
                                        'description' => '处理后的视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-face-fusion/334F180F-3B50-51CB-B4CB-9A86A542D3BC-5716-20210906-074905.mp4?Expires=1630916420&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=OEtNqVYxXRwkyO4BrsYVJ8q5bx****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"334F180F-3B50-51CB-B4CB-9A86A542D3BC\\",\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\",\\n  \\"Data\\": {\\n    \\"VideoURL\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-face-fusion/334F180F-3B50-51CB-B4CB-9A86A542D3BC-5716-20210906-074905.mp4?Expires=1630916420&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=OEtNqVYxXRwkyO4BrsYVJ8q5bx****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<MergeVideoModelFaceResponse>\\n    <RequestId>334F180F-3B50-51CB-B4CB-9A86A542D3BC</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</MergeVideoModelFaceResponse>","errorExample":""}]',
            'title' => '模版视频人脸融合',
            'description' => '## 功能描述'."\n"
                .'在获得用户授权的前提下，视频人脸融合可以精准地定位视频中的人脸，将用户上传的目标人脸照片与另一个人的人脸形象进行面部融合，达到换脸的感官效果。 '."\n"
                .'模板视频人脸融合是基于用户预先上传创建的模版，通过输入一张待融合人脸图像，将图像人脸融合进指定的模板视频中。使用该方式需要提前创建好模板视频（AddFaceVideoTemplate），其处理效率高于通用视频人脸融合方式。'."\n"
                .'适用场景：'."\n"
                .'- 有固定数量的模板视频进行融合的场景。'."\n"
                .'- 同时支持视频中有一张脸和多张脸的场景，支持选脸和多脸融合。'."\n"
                ."\n"
                .'为保证生成内容的安全合法，请勿使用公众人物或涉及敏感信息的图像或视频进行融合，同时，本服务也会在合成结果的左下角处添加**Generated by AI**的水印内容，效果如下图所示。'."\n"
                .'![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230213/ezcg/MergeVideoModelFace.png)'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                .'- 影视后期制作：在影视后期制作时，因为某些原因需要替换演员，通过视频人脸融合技术，可利用前期拍摄素材进行处理，让前期视频素材中的人物看起来是新的演员在表演，可以为制片方节省大量的重新拍摄成本。'."\n"
                .'- 娱乐性短视频制作：用户可以将已获授权的合法视频中的人物，换成自己的人脸，生成趣味性视频。'."\n"
                .'- 虚拟试衣制作：在婚纱摄影、民族服饰、汉服、仿妆等试衣场景，通过视频人脸融合技术进行服饰虚拟试穿。'."\n"
                .'- 电商数字人直播：在电商卖货带货直播场景，通过网红脸ID换脸实现数字人直播带货、虚拟人换脸。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                .'- 高保真、低违和效果：融合后的人脸保留了替换者人脸身份信息的视觉特征，而融入被替换者人脸中又无违和感，融合效果自然。'."\n"
                .'- 表情肤色一致性：融合后的人脸最大限度保留被替换者的面目表情、肤色一致性。'."\n"
                .'- 支持复杂人脸角度：支持模板人脸偏侧一定角度，融合后的结果真实稳定。'."\n"
                .'- 支持多人脸指定换脸：支持视频中含有多张人脸，并指定每个脸与不同的用户脸进行融合，可应用在全家福、婚纱摄影、多人角色创作等多人互动场景。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'><notice>'."\n"
                .'- 本能力仅限企业认证用户开通。实名认证操作方法请参见[实名认证](https://help.aliyun.com/document_detail/428525.html)。'."\n"
                .'- 开通服务后请[提交申请](https://vision.console.aliyun.com/cn-shanghai/applyopen/videoenhan/MergeVideoFace)，申请通过后方可使用。'."\n"
                .'></notice>'."\n"
                ."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/MergeVideoModelFace?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 前提条件：先通过[视频人脸融合模板增加接口](~~468904~~)（AddFaceVideoTemplate）添加视频模板获取模板ID（TemplateId），再使用已上传视频对应的模板ID和待融合人脸图像进行请求。'."\n"
                .'6. 开发接入步骤：    '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'7. 示例代码：该能力常用语言的示例代码，请参见[模板视频人脸融合示例代码](~~602484~~)。'."\n"
                .'8. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPEG、JPG、PNG。'."\n"
                .'- 图像分辨率：大于等于128×128像素，小于等于4000×4000像素。'."\n"
                .'- 图像大小：不大于20 MB。'."\n"
                .'- URL地址不能包含中文字符。'."\n"
                ."\n"
                .'## 入参说明'."\n"
                .'**MergeInfos**指融合参数，模板视频的人脸信息及待融合的用户人脸图片（**TemplateId**为多人脸时不可为空）。'."\n"
                .'- **MergeInfos**仅为多人视频场景时使用，需确保用户添加模板时**VideoScene**参数传入了`multi`值，其中传入的**TemplateFaceID**需要与添加模版时返回的**FaceInfos**里的**TemplateFaceID**一一对应。'."\n"
                .'- 同时传入**FaceImageURL**和**MergeInfos**，以**TemplateId**为单/多人脸为准，过滤另一个入参。'."\n"
                ."\n"
                .'## 图像质量建议'."\n"
                .'- 要求保证图像中的人脸清晰。图像中人脸尺寸建议大于64×64像素，人脸区域建议不大于全图区域的2/3。'."\n"
                .'- 建议图像中人脸五官区域轮廓完整，无明显遮挡。人脸融合算法支持人脸偏侧一定角度，在偏侧角度不超过30度的情况下能取得更佳效果。'."\n"
                .'- 对于多人脸视频场景，系统会自动识别出整个视频中的不同人物ID，建议视频中的人物不要出现角度过大的转动以及明显遮挡的情况，否则识别出的人物ID个数可能不准确。'."\n"
                ."\n"
                .'推荐图像示例：'."\n"
                .'![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221114/jris/MergeImageFacetuijian.png)'."\n"
                .'![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230609/otnv/MergeVideoModelFacetuijian.png)'."\n"
                ."\n"
                .'不推荐图像示例：'."\n"
                .'![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221114/rkbx/MergeImageFacebutuijian.png)'."\n"
                .'![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230609/jcgb/MergeVideoModelFacebutuijian.png)'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用MergeVideoModelFace接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~159423~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于模板视频人脸融合的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口。',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~159423~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的模板视频人脸融合能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[模板视频人脸融合示例代码](~~602484~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于模板视频人脸融合的错误码，详情请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'QueryFaceVideoTemplate' => [
            'summary' => '本文介绍视频人脸融合模版查询QueryFaceVideoTemplate的语法及示例。',
            'methods' => [
                'get',
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
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查询的模板ID。如果未传TemplateId，返回该用户的模板列表；如果传入TemplateId，仅返回对应的结果。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3bf2418c-7adf-4002-a9d6-2f7cf1889c0d',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页数设置，默认第1页。取值范围为1~5000。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '5000',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页条数设置，默认100条。取值范围为1~500。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '500',
                        'minimum' => '1',
                        'example' => '100',
                        'default' => '100',
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
                                'example' => 'A06E3D21-890D-500B-97DA-D8B99D2DDDC4',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Total' => [
                                        'description' => '当前账号下的可用模板总数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'Elements' => [
                                        'description' => '模板列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '1',
                                            'type' => 'object',
                                            'properties' => [
                                                'CreateTime' => [
                                                    'description' => '模板创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-09-06 15:17:19',
                                                ],
                                                'UpdateTime' => [
                                                    'description' => '模板更新时间。',
                                                    'type' => 'string',
                                                    'example' => '2021-09-06 15:18:15',
                                                ],
                                                'UserId' => [
                                                    'description' => '用户ID。',
                                                    'type' => 'string',
                                                    'example' => 'zhangsan',
                                                ],
                                                'TemplateId' => [
                                                    'description' => '模板ID。',
                                                    'type' => 'string',
                                                    'example' => '3bf2418c-7adf-4002-a9d6-2f7cf1889c0d',
                                                ],
                                                'TemplateURL' => [
                                                    'description' => '新增模板时设置的视频人脸模板地址。'."\n"
                                                        .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                                    'type' => 'string',
                                                    'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/image-face-fusion/OriginUrl/user/2021-09-06/e4d6ecf6-8dc8-4dac-acb5-56a737ccbc06?Expires=1630914551&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=kBcLm66y7%2FZ3eIMgwXJg1zNP7k****',
                                                ],
                                                'FaceInfos' => [
                                                    'description' => '用户输入视频为多个人脸时，返回各人脸ID和位置信息。'."\n"
                                                        ."\n"
                                                        .'> 只有在添加模板时选择了多人视频换脸场景（即**VideoScene**参数必须传入`multi`值）时，才会返回**FaceInfos**信息。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '用户输入视频为多个人脸时，返回各人脸ID和位置信息。'."\n"
                                                            ."\n"
                                                            .'> 只有在添加模板时选择了多人视频换脸场景（即**VideoScene**参数必须传入`multi`值）时，才会返回**FaceInfos**信息。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'TemplateFaceID' => [
                                                                'description' => '人脸对应的子模板ID。',
                                                                'type' => 'string',
                                                                'example' => '7d1a2498-0f9a-42d8-bae8-c7e478188106_0',
                                                            ],
                                                            'TemplateFaceURL' => [
                                                                'description' => '人脸对应的子模板ID对应的人脸图。',
                                                                'type' => 'string',
                                                                'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-face-fusion/template/xhtest_7d1a2498-0f9a-42d8-bae8-c7e478188106/xhtest_7d1a2498-0f9a-42d8-bae8-c7e478188106_0.png?Expires=1686040781&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=WVYTf%2F3knRuUPXSVGVz%2FZi3Miu****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A06E3D21-890D-500B-97DA-D8B99D2DDDC4\\",\\n  \\"Data\\": {\\n    \\"Total\\": 20,\\n    \\"Elements\\": [\\n      {\\n        \\"CreateTime\\": \\"2021-09-06 15:17:19\\",\\n        \\"UpdateTime\\": \\"2021-09-06 15:18:15\\",\\n        \\"UserId\\": \\"zhangsan\\",\\n        \\"TemplateId\\": \\"3bf2418c-7adf-4002-a9d6-2f7cf1889c0d\\",\\n        \\"TemplateURL\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/image-face-fusion/OriginUrl/user/2021-09-06/e4d6ecf6-8dc8-4dac-acb5-56a737ccbc06?Expires=1630914551&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=kBcLm66y7%2FZ3eIMgwXJg1zNP7k****\\",\\n        \\"FaceInfos\\": [\\n          {\\n            \\"TemplateFaceID\\": \\"7d1a2498-0f9a-42d8-bae8-c7e478188106_0\\",\\n            \\"TemplateFaceURL\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-face-fusion/template/xhtest_7d1a2498-0f9a-42d8-bae8-c7e478188106/xhtest_7d1a2498-0f9a-42d8-bae8-c7e478188106_0.png?Expires=1686040781&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=WVYTf%2F3knRuUPXSVGVz%2FZi3Miu****\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryFaceVideoTemplateResponse>\\n    <RequestId>A06E3D21-890D-500B-97DA-D8B99D2DDDC4</RequestId>\\n    <Data>\\n        <Total>20</Total>\\n        <Elements>\\n            <CreateTime>2021-09-06 15:17:19</CreateTime>\\n            <UpdateTime>2021-09-06 15:18:15</UpdateTime>\\n            <UserId>zhangsan</UserId>\\n            <TemplateId>3bf2418c-7adf-4002-a9d6-2f7cf1889c0d</TemplateId>\\n            <TemplateURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/image-face-fusion/OriginUrl/user/2021-09-06/e4d6ecf6-8dc8-4dac-acb5-56a737ccbc06?Expires=1630914551&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=kBcLm66y7%2FZ3eIMgwXJg1zNP7k****</TemplateURL>\\n            <FaceInfos>\\n                <TemplateFaceID>7d1a2498-0f9a-42d8-bae8-c7e478188106_0</TemplateFaceID>\\n                <TemplateFaceURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/video-face-fusion/template/xhtest_7d1a2498-0f9a-42d8-bae8-c7e478188106/xhtest_7d1a2498-0f9a-42d8-bae8-c7e478188106_0.png?Expires=1686040781&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=WVYTf%2F3knRuUPXSVGVz%2FZi3Miu****</TemplateFaceURL>\\n            </FaceInfos>\\n        </Elements>\\n    </Data>\\n</QueryFaceVideoTemplateResponse>","errorExample":""}]',
            'title' => '视频人脸融合模版查询',
            'description' => '## 功能描述'."\n"
                .'视频人脸融合模板查询功能可以查询用户已添加过的视频人脸模板。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'><notice>'."\n"
                .'本能力仅限企业认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/document_detail/428525.html)。'."\n"
                .'></notice>'."\n"
                ."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/QueryFaceVideoTemplate?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 前提条件：已通过[视频人脸融合模板增加](~~468904~~)（AddFaceVideoTemplate）创建生成了TemplateId。'."\n"
                ."\n"
                .'6. 开发接入步骤：   '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'7. 示例代码：该能力常用语言的示例代码，请参见[视频人脸融合模板查询示例代码](~~602562~~)。'."\n"
                ."\n"
                .'8. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'视频人脸融合模板查询能力可免费调用。',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的视频人脸融合模板查询能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[视频人脸融合模板查询示例代码](~~602562~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于视频人脸融合模板查询的错误码，详情请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'EnhancePortraitVideo' => [
            'summary' => '本文介绍视频生产（videoenhan）类目下的视频人像增强EnhancePortraitVideo的语法及示例。',
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
                    'name' => 'VideoUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输入视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xxx/shang/video/SD%289516100%29.mp4',
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
                                'example' => 'd21a2afa-4d52-4bca-803b-e65028146603',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoUrl' => [
                                        'description' => '处理后的视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://vibktprfx-prod-prod-xstream-cn-shanghai.oss-cn-shanghai.aliyuncs.com/xstream-framework/upload_result_video_2023-02-10_09.45.55.mp4?Expires=1675995564&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=aIXTeM4IU4nARjy3SNA3YGhhqj****',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"d21a2afa-4d52-4bca-803b-e65028146603\\",\\n  \\"Data\\": {\\n    \\"VideoUrl\\": \\"http://vibktprfx-prod-prod-xstream-cn-shanghai.oss-cn-shanghai.aliyuncs.com/xstream-framework/upload_result_video_2023-02-10_09.45.55.mp4?Expires=1675995564&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=aIXTeM4IU4nARjy3SNA3YGhhqj****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<EnhancePortraitVideoResponse>\\n    <RequestId>d21a2afa-4d52-4bca-803b-e65028146603</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</EnhancePortraitVideoResponse>","errorExample":""}]',
            'title' => '视频人像增强',
            'description' => '## 功能描述'."\n"
                .'视频综合增强能力基于GPEN人像增强模型，对视频中的人脸进行清晰度提升，显著增加面部细节和质感，同时通过人脸质量评估算法与动态调整融合系数，保持增强后人脸的自然和真实。'."\n"
                ."\n"
                .'>- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?tagName=videoenhan&children=EnhancePortraitVideo)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                ."\n"
                .'- 老旧视频的人脸增强修复。'."\n"
                .'- 拍摄素材的清晰度提升，超高清视频制作。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                ."\n"
                .'- 显著提升人脸清晰度：通过深度学习进行面部增强，显著增加面部细节和质感。'."\n"
                .'- 保持人脸稳定自然：通过人脸质量评估算法与动态调整融合系数，保持增强后人脸的自然和真实。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/EnhancePortraitVideo?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：  '."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[视频人像增强示例代码](~~613162~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                ."\n"
                .'- 视频类型：MP4、AVI、MKV、MOV、FLV、TS、MPG、MXF。'."\n"
                .'- 视频大小：不超过1 GB。'."\n"
                .'- 视频分辨率：小于1920×1080像素。'."\n"
                .'- URL地址不能包含中文字符。'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用EnhancePortraitVideo接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的视频人像增强能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[视频人像增强示例代码](~~613162~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于视频人像增强的错误码，详情请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
        'GenerateHumanAnimeStyleVideo' => [
            'summary' => '本文介绍视频生产（videoenhan）类目下的视频人像卡通化GenerateHumanAnimeStyleVideo的语法及示例。',
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
                    'name' => 'VideoUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/xxx/eas/EvaluateVideoQuality/123.mp4',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'CartoonStyle',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '卡通化的风格。取值如下：'."\n"
                            ."\n"
                            .'- anime：日漫风'."\n"
                            .'- 3d：3D特效'."\n"
                            .'- handdrawn：手绘风'."\n"
                            .'- sketch：铅笔画'."\n"
                            .'- artstyle：艺术特效',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'anime',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'd21a2afa-4d52-4bca-803b-e65028146603',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoUrl' => [
                                        'description' => '输出处理后的视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://vibktprfx-prod-prod-xstream-cn-shanghai.oss-cn-shanghai.aliyuncs.com/xstream-framework/upload_result_video_2023-02-10_09.45.55.mp4?Expires=1675995564&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&amp;Signature=aIXTeM4IU4nARjy3SNA3YGhhqj****',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"d21a2afa-4d52-4bca-803b-e65028146603\\",\\n  \\"Data\\": {\\n    \\"VideoUrl\\": \\"http://vibktprfx-prod-prod-xstream-cn-shanghai.oss-cn-shanghai.aliyuncs.com/xstream-framework/upload_result_video_2023-02-10_09.45.55.mp4?Expires=1675995564&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&amp;Signature=aIXTeM4IU4nARjy3SNA3YGhhqj****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<GenerateHumanAnimeStyleVideoResponse>\\n    <RequestId>d21a2afa-4d52-4bca-803b-e65028146603</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</GenerateHumanAnimeStyleVideoResponse>","errorExample":""}]',
            'title' => '视频人像卡通化',
            'description' => '## 功能描述'."\n"
                .'根据输入的人像视频进行卡通化转换，返回风格化后的视频结果。支持日漫（anime）、3D（3d）、手绘（handdrawn）、铅笔画（sketch）、艺术特效（artstyle）风格。'."\n"
                .'关于该接口功能的示例图如下：'."\n"
                .'![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230221/symy/GenerateHumanAnimeStyleVideo.png" width="600)'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?tagName=videoenhan&children=GenerateHumanAnimeStyleVideo)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                .'- 趣味视频处理：上传人像视频，即可生成专属动漫化形象，塑造可爱氛围，可用于互动推广、趣味相册等应用场景。'."\n"
                .'- 隐私保护：为保护图像中的人物隐私，将人物卡通化，可避免识别出原人物是谁。与马赛克等处理方法相比，更具趣味性，更易于用户接受，提升用户体验。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                .'- 内容高保真：基于深度学习算法，能有效保留原图中的人物表情、配饰、背景等细节内容特征。'."\n"
                .'- 多种风格选择：提供多种不同特效的风格选择，实现差异化的制作效果，满足不同场景和数据要求。'."\n"
                .'- 全身卡通化：全图的精细化风格转换，相比人脸卡通化，可避免笑场等尴尬场景。'."\n"
                .'- 多人模式：可处理情侣照、家庭照、团体类照片。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/GenerateHumanAnimeStyleVideo?lang=JAVA&useCommon=true)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[视频人像卡通化示例代码](~~608844~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 支持的视频类型：MP4、AVI、MKV、FLV、MOV、MPG、TS、MXF。'."\n"
                .'- 建议输入视频分辨率不超过1920x1080像素。'."\n"
                .'- 视频大小不超过1 GB。'."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                .'- 视频帧画面里人数不超过5人，超过5人会影响实际效果。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于视频人像卡通化的计费方式及报价，请参见[计费介绍](~~202487~~)。'."\n"
                ."\n"
                .'> 下方调试接口为付费接口。'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用GenerateHumanAnimeStyleVideo接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的视频人像卡通化能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[视频人像卡通化示例代码](~~608844~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。'."\n",
            'extraInfo' => '## 错误码'."\n"
                .'关于视频人像卡通化的错误码，具体请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'ReduceVideoNoise' => [
            'summary' => '本文介绍视频生产（videoenhan）类目下的视频降噪ReduceVideoNoise的语法及示例。',
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
                    'name' => 'VideoUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '输入视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xxx/shang/video/SD%289516100%29.mp4',
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
                                'example' => 'd21a2afa-4d52-4bca-803b-e65028146603',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。该数据需要在异步任务执行成功后，通过调用[GetAsyncJobResult](~~607824~~)接口，对其Result字段进行JSON反序列化之后得到。',
                                'type' => 'object',
                                'properties' => [
                                    'VideoUrl' => [
                                        'description' => '处理后的视频URL地址。'."\n"
                                            .'> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                                        'type' => 'string',
                                        'example' => 'http://vibktprfx-prod-prod-xstream-cn-shanghai.oss-cn-shanghai.aliyuncs.com/xstream-framework/upload_result_video_2023-02-10_09.45.55.mp4?Expires=1675995564&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=aIXTeM4IU4nARjy3SNA3YGhhqj****',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"d21a2afa-4d52-4bca-803b-e65028146603\\",\\n  \\"Data\\": {\\n    \\"VideoUrl\\": \\"http://vibktprfx-prod-prod-xstream-cn-shanghai.oss-cn-shanghai.aliyuncs.com/xstream-framework/upload_result_video_2023-02-10_09.45.55.mp4?Expires=1675995564&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=aIXTeM4IU4nARjy3SNA3YGhhqj****\\"\\n  },\\n  \\"Message\\": \\"该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。\\"\\n}","errorExample":""},{"type":"xml","example":"<ReduceVideoNoiseResponse>\\n    <RequestId>d21a2afa-4d52-4bca-803b-e65028146603</RequestId>\\n    <Message>该调用为异步调用，任务已提交成功，请以requestId的值作为jobId参数调用同类目下GetAsyncJobResult接口查询任务执行状态和结果。</Message>\\n</ReduceVideoNoiseResponse>","errorExample":""}]',
            'title' => '视频降噪',
            'description' => '## 功能描述'."\n"
                .'视频降噪能力基于多帧修复模型，对视频中的各类噪声信息进行降低，同时保持帧间的稳定性，避免处理后的视频出现闪烁和抖动问题。'."\n"
                ."\n"
                .'> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。'."\n"
                .'- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?tagName=videoenhan&children=ReduceVideoNoise)对该能力进行更直观试用以及在线购买。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 应用场景'."\n"
                ."\n"
                .'- 老旧视频的各类噪声降低。'."\n"
                .'- 夜景拍摄中的传感器噪声修复。'."\n"
                ."\n"
                .'## 特色优势'."\n"
                ."\n"
                .'- 支持多种噪声：可处理多种场景下的噪声，如夜景相机噪声、老旧视频噪声、编码压缩噪声等。'."\n"
                .'- 噪声抑制效果好：可以比较好的降低噪声信息，同时保留原始视频的内容细节。'."\n"
                .'- 时域稳定性好：采用多帧修复方式，保持帧间的稳定性和连续性，避免闪烁抖动。'."\n"
                ."\n"
                .'## 接入指引'."\n"
                .'1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。'."\n"
                .'2. 开通能力：请确保您已开通[视频生产服务](https://vision.aliyun.com/videoenhan)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_videoenhan_public_cn#/open)。'."\n"
                .'3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。'."\n"
                .'4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/videoenhan/2020-03-20/ReduceVideoNoise?lang=JAVA&useCommon=true)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。'."\n"
                .'5. 开发接入步骤：'."\n"
                .'- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。'."\n"
                .'- 在对应语言的SDK文档中找到AI类目为视频生产（videoenhan）类目的SDK包进行安装。'."\n"
                .'- 参考文档中提供的示例代码进行适当修改后调用。'."\n"
                ."\n"
                .'6. 示例代码：该能力常用语言的示例代码，请参见[视频降噪示例代码](~~613159~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。'."\n"
                ."\n"
                .'7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。'."\n"
                .'- [Web前端直接调用](~~467779~~)'."\n"
                .'- [小程序场景下直接调用](~~467780~~)'."\n"
                .'- [Android端直接调用](~~467781~~)'."\n"
                .'- [iOS端直接调用](~~467782~~)'."\n"
                ."\n"
                .'## 输入限制'."\n"
                ."\n"
                .'- 视频类型：MP4、AVI、MKV、MOV、FLV、TS、MPG、MXF。'."\n"
                .'- 视频大小：不超过1 GB。'."\n"
                .'- 视频分辨率：小于1920×1080像素。'."\n"
                .'- URL地址不能包含中文字符。'."\n"
                ."\n"
                .'## 调用步骤'."\n"
                .'该能力为异步能力，需分两步进行调用。'."\n"
                .'第一步调用ReduceVideoNoise接口提交任务，请求成功后，得到一个任务ID。'."\n"
                .'第二步调用[GetAsyncJobResult](~~607824~~)接口查询结果，根据任务ID查询任务执行状态和结果。如果任务还在处理中，可稍等一段时间后再进行查询。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'视频降噪能力目前处于公测期，可免费调用。',
            'responseParamsDescription' => '## 查询结果'."\n"
                .'该接口为异步接口，当前并未返回真实的请求结果，您需要通过返回的RequestId调用GetAsyncJobResult接口来获取该接口的真实请求结果。详情请参见[GetAsyncJobResult](~~607824~~)。'."\n"
                ."\n"
                .'## SDK参考'."\n"
                .'阿里云视觉AI视频生产类目下的视频降噪能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为视频生产（videoenhan）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n"
                .'## 示例代码'."\n"
                .'该能力常用语言的示例代码，请参见[视频降噪示例代码](~~613159~~)，常用语言查询异步任务结果的示例代码，请参见[查询异步任务结果示例代码](~~607974~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于视频降噪的错误码，详情请参见[常见错误码](~~159313~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。'."\n",
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'videoenhan.cn-shanghai.aliyuncs.com',
        ],
    ],
];
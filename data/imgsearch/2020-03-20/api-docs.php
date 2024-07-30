<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'imgsearch',
        'version' => '2020-03-20',
    ],
    'directories' => [
        [
            'id' => 64435,
            'title' => '数据库',
            'type' => 'directory',
            'children' => [
                'CreateImageDb',
                'DeleteImageDb',
                'ListImageDbs',
            ],
        ],
        [
            'id' => 64439,
            'title' => '图片',
            'type' => 'directory',
            'children' => [
                'AddImage',
                'DeleteImage',
                'ListImages',
                'SearchImage',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateImageDb' => [
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
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库名称。支持小写字母、数字、下划线的组合，长度2~64。'."\n"
                            .'> 每个开通视觉搜索服务的阿里云账号默认只能新建一个数据库。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default',
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
                                'example' => 'DD106AE3-838A-41D7-8CD0-B902DC2BC109',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DD106AE3-838A-41D7-8CD0-B902DC2BC109\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DD106AE3-838A-41D7-8CD0-B902DC2BC109</RequestId>","errorExample":""}]',
            'title' => '创建数据库',
            'summary' => '本文档介绍创建数据库CreateImageDb的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'创建数据库能力用于创建图片数据库。'."\n"
                ."\n"
                .'> - 每个开通视觉搜索服务的阿里云账号默认只能新建一个数据库。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 服务说明'."\n"
                .'视觉搜索服务将于2023年2月15日起停止更新，后续不再支持新用户开通接入服务，新用户请使用[新版图像搜索](https://ai.aliyun.com/imagesearch)。2023年2月15日之后，会继续支持老用户，老用户如果对视觉搜索服务使用有疑问，可通过搜索钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于创建数据库的错误码，详情请参见[常见错误码](~~159136~~)。'."\n"
                ."\n\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'DeleteImageDb' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default',
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
                                'example' => '3F3F81A5-4C37-4716-AE5C-518D2537365C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3F3F81A5-4C37-4716-AE5C-518D2537365C\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>3F3F81A5-4C37-4716-AE5C-518D2537365C</RequestId>","errorExample":""}]',
            'title' => '删除数据库',
            'summary' => '本文档介绍删除数据库DeleteImageDb的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'删除数据库能力用于删除指定数据库。'."\n"
                ."\n"
                .'><warning>'."\n"
                .'数据库删除后不可恢复。请谨慎操作。'."\n"
                .'></warning>'."\n"
                ."\n"
                .'## 服务说明'."\n"
                .'视觉搜索服务将于2023年2月15日起停止更新，后续不再支持新用户开通接入服务，新用户请使用[新版图像搜索](https://ai.aliyun.com/imagesearch)。2023年2月15日之后，会继续支持老用户，老用户如果对视觉搜索服务使用有疑问，可通过搜索钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于删除数据库的错误码，详情请参见[常见错误码](~~159136~~)。'."\n"
                ."\n\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'ListImageDbs' => [
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4E010B89-B370-458A-A586-B9A9F3BC3058',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'DbList' => [
                                        'description' => '数据库列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '数据库名称。',
                                                    'type' => 'string',
                                                    'example' => 'default',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4E010B89-B370-458A-A586-B9A9F3BC3058\\",\\n  \\"Data\\": {\\n    \\"DbList\\": [\\n      {\\n        \\"Name\\": \\"default\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>4E010B89-B370-458A-A586-B9A9F3BC3058</RequestId>\\n<Data>\\n    <DbList>\\n        <Name>default</Name>\\n    </DbList>\\n</Data>","errorExample":""}]',
            'title' => '查看数据库列表',
            'summary' => '本文档介绍查看数据库列表ListImageDbs的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'查看数据库列表能力可以查看数据库的列表。'."\n"
                ."\n\n"
                .'> 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 服务说明'."\n"
                .'视觉搜索服务将于2023年2月15日起停止更新，后续不再支持新用户开通接入服务，新用户请使用[新版图像搜索](https://ai.aliyun.com/imagesearch)。2023年2月15日之后，会继续支持老用户，老用户如果对视觉搜索服务使用有疑问，可通过搜索钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于查看数据库列表的错误码，详情请参见[常见错误码](~~159136~~)。'."\n"
                ."\n\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'AddImage' => [
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
                    'name' => 'DbName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库名称。支持小写字母、数字、下划线组合，长度2~64。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'ImageUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/imgsearch/xxxx.png',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'ExtraData',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自定义数据。支持字母、数据、标点符号、汉字。长度0~512。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '风景',
                    ],
                ],
                [
                    'name' => 'EntityId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '实体ID，可以作为数据分组的ID。支持小写字母、数字、下划线的组合，长度1~64。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '001',
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
                                'example' => '4DC6BB62-06D1-4242-939A-4AC500662E33',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'DataId' => [
                                        'description' => '数据ID。',
                                        'type' => 'string',
                                        'example' => '1585903814940000',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4DC6BB62-06D1-4242-939A-4AC500662E33\\",\\n  \\"Data\\": {\\n    \\"DataId\\": \\"1585903814940000\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>4DC6BB62-06D1-4242-939A-4AC500662E33</RequestId>\\n<Data>\\n    <DataId>1585903814940000</DataId>\\n</Data>","errorExample":""}]',
            'title' => '添加图片数据',
            'summary' => '本文档介绍添加图片数据AddImage的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'添加图片数据能力可以为指定数据库添加图片数据。'."\n"
                ."\n\n"
                .'> - 每个数据库最多可以添加5万张图片。'."\n"
                .'- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 服务说明'."\n"
                .'视觉搜索服务将于2023年2月15日起停止更新，后续不再支持新用户开通接入服务，新用户请使用[新版图像搜索](https://ai.aliyun.com/imagesearch)。2023年2月15日之后，会继续支持老用户，老用户如果对视觉搜索服务使用有疑问，可通过搜索钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 输入限制'."\n"
                .'- 图像格式：JPG、JPEG、PNG。'."\n"
                ."\n"
                .'- 图像大小：不超过2 MB。'."\n"
                ."\n"
                .'- 图像分辨率：大于128×128像素，小于1024×1024像素。'."\n"
                ."\n"
                .'- URL地址不能包含中文字符。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。'."\n"
                ."\n",
            'extraInfo' => '## 错误码'."\n"
                .'关于添加图片数据的错误码，详情请参见[常见错误码](~~159136~~)。'."\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'DeleteImage' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DbName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'EntityId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '待删除数据的实体ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
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
                                'example' => '3F3F81A5-4C37-4716-AE5C-518D2537365C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3F3F81A5-4C37-4716-AE5C-518D2537365C\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>3F3F81A5-4C37-4716-AE5C-518D2537365C</RequestId>","errorExample":""}]',
            'title' => '删除图片',
            'summary' => '本文介绍删除图片DeleteImage的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'删除图片能力可以删除指定数据库中的图片。'."\n"
                ."\n\n"
                .'> 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 服务说明'."\n"
                .'视觉搜索服务将于2023年2月15日起停止更新，后续不再支持新用户开通接入服务，新用户请使用[新版图像搜索](https://ai.aliyun.com/imagesearch)。2023年2月15日之后，会继续支持老用户，老用户如果对视觉搜索服务使用有疑问，可通过搜索钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于删除图片的错误码，详情请参见[常见错误码](~~159136~~)。'."\n"
                ."\n\n"
                ."\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'ListImages' => [
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
                    'name' => 'DbName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Token',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Offset和Limit组合的分页方式只支持前2000条记录。当超过2000条时，需要使用上一次请求返回的Token作为请求下一页的参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '起始记录。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页最多显示的条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '排列方式。包括升序（asc）和降序（desc）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'asc',
                    ],
                ],
                [
                    'name' => 'EntityIdPrefix',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '样本ID前缀。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'U1',
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
                                'example' => '2B93C43A-F824-40C8-AF79-844342B0F43A',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'ImageList' => [
                                        'description' => '返回的图片数据列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'EntityId' => [
                                                    'description' => '实体ID或分组ID。',
                                                    'type' => 'string',
                                                    'example' => '5',
                                                ],
                                                'CreatedAt' => [
                                                    'description' => '创建数据的时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1582838489213',
                                                ],
                                                'UpdatedAt' => [
                                                    'description' => '更新数据的时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1582838489213',
                                                ],
                                                'DataId' => [
                                                    'description' => '数据ID。',
                                                    'type' => 'string',
                                                    'example' => '001',
                                                ],
                                                'ExtraData' => [
                                                    'description' => '自定义数据内容。',
                                                    'type' => 'string',
                                                    'example' => '元素',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Token' => [
                                        'description' => 'Offset和Limit组合的分页方式只支持前2000条记录。'."\n"
                                            .'当超过2000时，需要使用上一次请求返回的Token作为请求下一页的参数。',
                                        'type' => 'string',
                                        'example' => '2',
                                    ],
                                    'TotalCount' => [
                                        'description' => '总数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2B93C43A-F824-40C8-AF79-844342B0F43A\\",\\n  \\"Data\\": {\\n    \\"ImageList\\": [\\n      {\\n        \\"EntityId\\": \\"5\\",\\n        \\"CreatedAt\\": 1582838489213,\\n        \\"UpdatedAt\\": 1582838489213,\\n        \\"DataId\\": \\"001\\",\\n        \\"ExtraData\\": \\"元素\\"\\n      }\\n    ],\\n    \\"Token\\": \\"2\\",\\n    \\"TotalCount\\": 100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>2B93C43A-F824-40C8-AF79-844342B0F43A</RequestId>\\n<Data>\\n    <Token>2</Token>\\n    <TotalCount>100</TotalCount>\\n    <ImageList>\\n        <DataId>22</DataId>\\n        <ExtraData>元素</ExtraData>\\n        <EntityId>5</EntityId>\\n        <UpdatedAt>1582838489213</UpdatedAt>\\n        <CreatedAt>1582838489213</CreatedAt>\\n    </ImageList>\\n</Data>","errorExample":""}]',
            'title' => '查看图片数据列表',
            'summary' => '本文档介绍查看图片数据列表ListImages的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'查看图片数据列表能力可以查看指定数据库中的图片数据列表。'."\n"
                ."\n"
                .'> 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 服务说明'."\n"
                .'视觉搜索服务将于2023年2月15日起停止更新，后续不再支持新用户开通接入服务，新用户请使用[新版图像搜索](https://ai.aliyun.com/imagesearch)。2023年2月15日之后，会继续支持老用户，老用户如果对视觉搜索服务使用有疑问，可通过搜索钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于查看图片数据列表的错误码，详情请参见[常见错误码](~~159136~~)。'."\n"
                ."\n\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
        'SearchImage' => [
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
                    'name' => 'DbName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据库名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'ImageUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imgsearch/SearchImage/SearchImage-ku8.png',
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '获取结果数量上限，取值范围1~200。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '1000',
                        'minimum' => '0',
                        'example' => '5',
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
                                'example' => 'A98DBCEB-45E2-5F5F-B5ED-F2340182FD87',
                            ],
                            'Data' => [
                                'description' => '返回的结果数据内容。',
                                'type' => 'object',
                                'properties' => [
                                    'MatchList' => [
                                        'description' => '相似的图片列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '1',
                                            'type' => 'object',
                                            'properties' => [
                                                'ImageUrl' => [
                                                    'description' => '查找结果，相似图像的URL地址。'."\n"
                                                        ."\n\n"
                                                        .'> - 建议您使用**EntryId**来做结果判断，这里返回的**ImageURL**仅是您在建图片库输入的字符串，平台服务端不保留用户图片库的原始图片。如果上传图片库时使用的是有时效性的访问链接，需要您本地保留图片，并保存**EntryID**和图片的映射关系。'."\n"
                                                        .'- 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。',
                                                    'type' => 'string',
                                                    'example' => 'http://vision-console.oss-cn-shanghai.aliyuncs.com/1902352443710590/kv6dvd1ie0c6-ipvnszc8584116.jpg?Expires=1635150265&OSSAccessKeyId=LTAI4Fp1Gt5RzwdEXL3o****&Signature=8rj0%2Bxg%2Bni5NxQAcEQqISX5j1w****',
                                                ],
                                                'EntityId' => [
                                                    'description' => '实体ID。',
                                                    'type' => 'string',
                                                    'example' => '123456',
                                                ],
                                                'Score' => [
                                                    'description' => '相似得分，取值0~10，分数越大，相似度越高。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '10',
                                                ],
                                                'DataId' => [
                                                    'description' => '数据ID。',
                                                    'type' => 'string',
                                                    'example' => '001',
                                                ],
                                                'ExtraData' => [
                                                    'description' => '自定义数据。',
                                                    'type' => 'string',
                                                    'example' => 'tangyan',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A98DBCEB-45E2-5F5F-B5ED-F2340182FD87\\",\\n  \\"Data\\": {\\n    \\"MatchList\\": [\\n      {\\n        \\"ImageUrl\\": \\"http://vision-console.oss-cn-shanghai.aliyuncs.com/1902352443710590/kv6dvd1ie0c6-ipvnszc8584116.jpg?Expires=1635150265&OSSAccessKeyId=LTAI4Fp1Gt5RzwdEXL3o****&Signature=8rj0%2Bxg%2Bni5NxQAcEQqISX5j1w****\\",\\n        \\"EntityId\\": \\"123456\\",\\n        \\"Score\\": 10,\\n        \\"DataId\\": \\"001\\",\\n        \\"ExtraData\\": \\"tangyan\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SearchImageResponse>\\n    <RequestId>A98DBCEB-45E2-5F5F-B5ED-F2340182FD87</RequestId>\\n    <Data>\\n        <MatchList>\\n            <EntityId>123456</EntityId>\\n            <Score>10</Score>\\n            <DataId>1</DataId>\\n            <ImageUrl>http://vision-console.oss-cn-shanghai.aliyuncs.com/1902352443710590/kv6dvd1ie0c6-ipvnszc8584116.jpg?Expires=1635150265&amp;OSSAccessKeyId=LTAI4Fp1Gt5RzwdEXL3o****&amp;Signature=8rj0%2Bxg%2Bni5NxQAcEQqISX5j1w****</ImageUrl>\\n            <ExtraData>zhaoliu</ExtraData>\\n        </MatchList>\\n        <MatchList>\\n            <EntityId>123457</EntityId>\\n            <Score>1.1762875356333269</Score>\\n            <DataId>2</DataId>\\n            <ImageUrl>http://vision-console.oss-cn-shanghai.aliyuncs.com/1902352443710590/kv6dvd1uimages1.jpg?Expires=1635151060&amp;OSSAccessKeyId=LTAI4Fp1Gt5RzwdEXL3o****&amp;Signature=%2Byceg79YwiShi1RWDSQ%2FSZcIec****</ImageUrl>\\n            <ExtraData>wangwu</ExtraData>\\n        </MatchList>\\n        <MatchList>\\n            <EntityId>123458</EntityId>\\n            <Score>0.9932686334385976</Score>\\n            <DataId>3</DataId>\\n            <ImageUrl>http://vision-console.oss-cn-shanghai.aliyuncs.com/1902352443710590/kv6dvd1ximages2.jpg?Expires=1635151141&amp;OSSAccessKeyId=LTAI4Fp1Gt5RzwdEXL3o****&amp;Signature=rHoEnFco%2BfLWyzHZGFwUpOaySZ****</ImageUrl>\\n            <ExtraData>zhangsan</ExtraData>\\n        </MatchList>\\n        <MatchList>\\n            <EntityId>123459</EntityId>\\n            <Score>1.2938829068163327</Score>\\n            <DataId>4</DataId>\\n            <ImageUrl>http://vision-console.oss-cn-shanghai.aliyuncs.com/1902352443710590/kv6dvd1m641.jpg?Expires=1635150931&amp;OSSAccessKeyId=LTAI4Fp1Gt5RzwdEXL3o****&amp;Signature=5m8NJ50eokih%2Fcxp%2B%2BnsA%2BTT%2BG****</ImageUrl>\\n            <ExtraData>lisi</ExtraData>\\n        </MatchList>\\n    </Data>\\n</SearchImageResponse>","errorExample":""}]',
            'title' => '搜索图片',
            'summary' => '本文介绍搜索图片SearchImage的语法及示例。',
            'description' => '## 功能描述'."\n"
                .'搜索图片能力可以根据输入图片，在数据库中搜索相似的图片。'."\n"
                ."\n"
                .'> 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 服务说明'."\n"
                .'视觉搜索服务将于2023年2月15日起停止更新，后续不再支持新用户开通接入服务，新用户请使用[新版图像搜索](https://ai.aliyun.com/imagesearch)。2023年2月15日之后，会继续支持老用户，老用户如果对视觉搜索服务使用有疑问，可通过搜索钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。'."\n"
                ."\n"
                .'## 输入限制'."\n"
                ."\n"
                .'- 图像格式：JPG、JPEG、PNG。'."\n"
                ."\n"
                .'- 图像大小：不超过3 MB。'."\n"
                ."\n"
                .'- 图像分辨率：大于128×128像素，小于1024×1024像素。'."\n"
                ."\n"
                .'- URL地址中不能包含中文字符。'."\n"
                ."\n"
                .'## 计费说明'."\n"
                .'关于搜索图片的计费方式及报价，请参见[计费介绍](~~202486~~)。'."\n"
                .'> 下方调试接口为付费接口。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '## SDK参考'."\n"
                .'阿里云视觉AI能力推荐使用SDK调用，支持多种编程语言，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
            'extraInfo' => '## 错误码'."\n"
                .'关于搜索图片的错误码，详情请参见[常见错误码](~~159136~~)。'."\n"
                ."\n\n"
                .'## 安全声明'."\n"
                .'- 请确保上传的图片或文件来源符合相应的法律法规。'."\n"
                .'- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'imgsearch.cn-shanghai.aliyuncs.com',
        ],
    ],
];
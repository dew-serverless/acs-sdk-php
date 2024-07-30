<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'composer',
        'version' => '2018-12-12',
    ],
    'directories' => [
        [
            'id' => 74102,
            'title' => '标签',
            'type' => 'directory',
            'children' => [
                'TagResources',
                'UntagResources',
                'ListTagResources',
            ],
        ],
        [
            'id' => 74106,
            'title' => '模板',
            'type' => 'directory',
            'children' => [
                'GetTemplate',
                'ListTemplates',
            ],
        ],
        [
            'id' => 74109,
            'title' => '工作流',
            'type' => 'directory',
            'children' => [
                'CreateFlow',
                'CloneFlow',
                'DeleteFlow',
                'DisableFlow',
                'EnableFlow',
                'UpdateFlow',
                'ListFlows',
                'ListVersions',
                'GetVersion',
                'GetFlow',
                'InvokeFlow',
                'GroupInvokeFlow',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'TagResources' => [
            'summary' => '为一个或多个资源打标签。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源类型，可取的值有：'."\n"
                            ."\n"
                            .'- ALIYUN::LC::FLOW：逻辑编排工作流',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ALIYUN::LC::FLOW',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源ID列表。最多可输入50个资源ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'lc-uf6abcdefg',
                        ],
                        'required' => true,
                        'example' => 'lc-uf6tbvhheciyxl',
                        'maxItems' => 50,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。列表最大长度为 20',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源的标签信息。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '资源的标签键。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'tagKey',
                                ],
                                'Value' => [
                                    'description' => '资源的标签值。一旦传入该值，可以为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'tagValue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '请求是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>ADB97A33-50E7-48A5-963D-ACBAE36D0BEC</RequestId>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '为指定的资源统一打标签',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UntagResources' => [
            'summary' => '删除一个或多个资源的标签。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源类型定义，可取的值有：'."\n"
                            ."\n"
                            .'- ALIYUN::LC::FLOW：逻辑编排工作流',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ALIYUN::LC::FLOW',
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否全部删除，只针对TagKey.N为空时有效。取值范围：'."\n"
                            ."\n"
                            .'- true，全部删除'."\n"
                            .'- false，不全部删除'."\n"
                            ."\n"
                            .'默认是 false',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源ID列表。最多可输入50个资源ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'lc-uf6tbvhheciyxl',
                        ],
                        'required' => true,
                        'example' => 'lc-uf6tbvhheciyxl',
                        'maxItems' => 50,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源的标签键列表。最大长度为20。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签键。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'testKey',
                        ],
                        'required' => false,
                        'example' => 'tagKey',
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>ADB97A33-50E7-48A5-963D-ACBAE36D0BEC</RequestId>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '为指定的资源统一解绑标签',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTagResources' => [
            'summary' => '获取指定标签的资源列表。',
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
                    'name' => 'ResourceType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源类型定义，可取的值有：'."\n"
                            ."\n"
                            .'- ALIYUN::LC::FLOW：逻辑编排工作流',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'ALIYUN::LC::FLOW' => '逻辑编排工作流',
                        ],
                        'example' => 'ALIYUN::LC::FLOW',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '下一个查询开始Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '单页返回最大数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '资源 ID 列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源 ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'lc-0xiisfk685vhfk',
                        ],
                        'required' => false,
                        'maxItems' => 50,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。列表最大长度为 20',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签内容',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'testkey',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'testvalue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下一个查询开始Token',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'C9025B15-16CC-53FB-B7B1-7295AA010EBD',
                            ],
                            'TotalCount' => [
                                'description' => '资源总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'TagResources' => [
                                'description' => '资源和标签的关系列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资源信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'ResourceType' => [
                                            'description' => '资源类型定义，可取的值有：'."\n"
                                                .'- ALIYUN::LC::FLOW：逻辑编排工作流',
                                            'type' => 'string',
                                            'example' => 'ALIYUN::LC::FLOW',
                                        ],
                                        'TagValue' => [
                                            'description' => '标签值',
                                            'type' => 'string',
                                            'example' => 'testvalue',
                                        ],
                                        'ResourceId' => [
                                            'description' => '资源ID',
                                            'type' => 'string',
                                            'example' => 'lc-0xiisfk685vhfk',
                                        ],
                                        'TagKey' => [
                                            'description' => '标签键',
                                            'type' => 'string',
                                            'example' => 'testkey',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"RequestId\\": \\"C9025B15-16CC-53FB-B7B1-7295AA010EBD\\",\\n  \\"TotalCount\\": 2,\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceType\\": \\"ALIYUN::LC::FLOW\\",\\n      \\"TagValue\\": \\"testvalue\\",\\n      \\"ResourceId\\": \\"lc-0xiisfk685vhfk\\",\\n      \\"TagKey\\": \\"testkey\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n    <RequestId>C9025B15-16CC-53FB-B7B1-7295AA010EBD</RequestId>\\n    <TotalCount>2</TotalCount>\\n    <TagResources>\\n        <ResourceType>ALIYUN::LC::FLOW</ResourceType>\\n        <TagValue>testvalue</TagValue>\\n        <ResourceId>lc-0xiisfk685vhfk</ResourceId>\\n        <TagKey>testkey</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
            'title' => '获取指定标签的资源列表',
        ],
        'GetTemplate' => [
            'summary' => '查询编排模板详情。',
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
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'TemplateId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '模板 ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'tp-uf6tbvhheciyxl',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'UpdateTime' => [
                                'description' => '模板最后更新时间',
                                'type' => 'string',
                                'example' => '2020-08-19T03:31:32.415Z',
                            ],
                            'TemplateOverview' => [
                                'description' => '模板概述，为 JSON 字符串',
                                'type' => 'string',
                                'example' => '[]',
                            ],
                            'TemplateConnector' => [
                                'description' => '模板里用到的连接器列表，以英文逗号分隔',
                                'type' => 'string',
                                'example' => 'config,oss',
                            ],
                            'CreateTime' => [
                                'description' => '模板创建时间',
                                'type' => 'string',
                                'example' => '2020-08-19T03:31:32.415Z',
                            ],
                            'TemplateSummaryEn' => [
                                'description' => '英文版的简介',
                                'type' => 'string',
                                'example' => 'This is a test template',
                            ],
                            'TemplateName' => [
                                'description' => '模板标题',
                                'type' => 'string',
                                'example' => '测试模板',
                            ],
                            'TemplateVersion' => [
                                'description' => '模板版本，为从 0 递增的数字',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'TemplateCreator' => [
                                'description' => '模板发布者',
                                'type' => 'string',
                                'example' => '逻辑编排',
                            ],
                            'TemplateLocale' => [
                                'description' => '模板语言，目前支持中文 zh 和英文 en 两种',
                                'type' => 'string',
                                'example' => 'zh',
                            ],
                            'RegionId' => [
                                'description' => '模板所在地域',
                                'type' => 'string',
                                'example' => 'cn-shanghai',
                            ],
                            'TemplateDescription' => [
                                'description' => '模板的描述',
                                'type' => 'string',
                                'example' => '该模板仅用于测试用途',
                            ],
                            'TemplateTag' => [
                                'description' => '模板标签',
                                'type' => 'string',
                                'example' => 'test,owner',
                            ],
                            'Definition' => [
                                'description' => '模板定义',
                                'type' => 'string',
                                'example' => '{"actions": {},"schemaVersion":"2018-12-12","version": "1.0.0"}',
                            ],
                            'RequestId' => [
                                'description' => '当前请求唯一标识符',
                                'type' => 'string',
                                'example' => 'BCF7212F-9478-569A-B57C-8C1B5A560C2F',
                            ],
                            'TemplateSummary' => [
                                'description' => '模板简要介绍',
                                'type' => 'string',
                                'example' => '这是一个测试模板',
                            ],
                            'TemplateId' => [
                                'description' => '模板 ID',
                                'type' => 'string',
                                'example' => 'tp-uf6tbvhheciyxl',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"UpdateTime\\": \\"2020-08-19T03:31:32.415Z\\",\\n  \\"TemplateOverview\\": \\"[]\\",\\n  \\"TemplateConnector\\": \\"config,oss\\",\\n  \\"CreateTime\\": \\"2020-08-19T03:31:32.415Z\\",\\n  \\"TemplateSummaryEn\\": \\"This is a test template\\",\\n  \\"TemplateName\\": \\"测试模板\\",\\n  \\"TemplateVersion\\": 0,\\n  \\"TemplateCreator\\": \\"逻辑编排\\",\\n  \\"TemplateLocale\\": \\"zh\\",\\n  \\"RegionId\\": \\"cn-shanghai\\",\\n  \\"TemplateDescription\\": \\"该模板仅用于测试用途\\",\\n  \\"TemplateTag\\": \\"test,owner\\",\\n  \\"Definition\\": \\"{\\\\\\"actions\\\\\\": {},\\\\\\"schemaVersion\\\\\\":\\\\\\"2018-12-12\\\\\\",\\\\\\"version\\\\\\": \\\\\\"1.0.0\\\\\\"}\\",\\n  \\"RequestId\\": \\"BCF7212F-9478-569A-B57C-8C1B5A560C2F\\",\\n  \\"TemplateSummary\\": \\"这是一个测试模板\\",\\n  \\"TemplateId\\": \\"tp-uf6tbvhheciyxl\\"\\n}","type":"json"}]',
            'title' => '查询模板详情',
        ],
        'ListTemplates' => [
            'summary' => '列举当前用户可见的模板。',
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
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页码。起始值：1。默认值：1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页大小，最大 100，默认值为 10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '根据指定关键词搜索模板，如果指定了 Tag，则无效',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '根据指定的标签获取模板',
                        'type' => 'string',
                        'required' => false,
                        'example' => '财务管理',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '模板语言：'."\n"
                            .'- **zh**：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '模板总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '本次请求唯一标识符',
                                'type' => 'string',
                                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
                            ],
                            'Templates' => [
                                'description' => '模板列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '模板信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'UpdateTime' => [
                                            'description' => '模板最后更新时间',
                                            'type' => 'string',
                                            'example' => '2020-08-19T03:31:32.415Z',
                                        ],
                                        'TemplateOverview' => [
                                            'description' => '模板概述，为 JSON 字符串',
                                            'type' => 'string',
                                            'example' => '[]',
                                        ],
                                        'TemplateConnector' => [
                                            'description' => '模板里用到的连接器列表，多个以英文逗号分隔',
                                            'type' => 'string',
                                            'example' => 'oss,rds',
                                        ],
                                        'CreateTime' => [
                                            'description' => '模板创建时间',
                                            'type' => 'string',
                                            'example' => '2020-08-19T03:31:32.415Z',
                                        ],
                                        'TemplateSummaryEn' => [
                                            'description' => '英文版的简介',
                                            'type' => 'string',
                                            'example' => 'This is a test template',
                                        ],
                                        'TemplateName' => [
                                            'description' => '模板名称',
                                            'type' => 'string',
                                            'example' => '测试模板',
                                        ],
                                        'TemplateVersion' => [
                                            'description' => '模板版本，为从 0 递增的数字',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'TemplateLocale' => [
                                            'description' => '模板语言，目前支持中文zh和英文en两种',
                                            'type' => 'string',
                                            'example' => 'zh',
                                        ],
                                        'TemplateCreator' => [
                                            'description' => '模板发布者',
                                            'type' => 'string',
                                            'example' => '逻辑编排',
                                        ],
                                        'TemplateDescription' => [
                                            'description' => '模板的描述',
                                            'type' => 'string',
                                            'example' => '这是一个测试用的模板',
                                        ],
                                        'TemplateTag' => [
                                            'description' => '模板标签',
                                            'type' => 'string',
                                            'example' => 'finance',
                                        ],
                                        'TemplateSummary' => [
                                            'description' => '模板简要介绍',
                                            'type' => 'string',
                                            'example' => '测试模板的简介',
                                        ],
                                        'TemplateId' => [
                                            'description' => '模板 ID',
                                            'type' => 'string',
                                            'example' => 'tp-uf6tbvhheciyxl',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\",\\n  \\"Templates\\": [\\n    {\\n      \\"UpdateTime\\": \\"2020-08-19T03:31:32.415Z\\",\\n      \\"TemplateOverview\\": \\"[]\\",\\n      \\"TemplateConnector\\": \\"oss,rds\\",\\n      \\"CreateTime\\": \\"2020-08-19T03:31:32.415Z\\",\\n      \\"TemplateSummaryEn\\": \\"This is a test template\\",\\n      \\"TemplateName\\": \\"测试模板\\",\\n      \\"TemplateVersion\\": 0,\\n      \\"TemplateLocale\\": \\"zh\\",\\n      \\"TemplateCreator\\": \\"逻辑编排\\",\\n      \\"TemplateDescription\\": \\"这是一个测试用的模板\\",\\n      \\"TemplateTag\\": \\"finance\\",\\n      \\"TemplateSummary\\": \\"测试模板的简介\\",\\n      \\"TemplateId\\": \\"tp-uf6tbvhheciyxl\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询模板列表',
        ],
        'CreateFlow' => [
            'summary' => '创建一个工作流。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流编排实例的名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'FlowDescription',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流编排实例的描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一个工作流',
                    ],
                ],
                [
                    'name' => 'Definition',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流定义，需要将JSON格式化为String',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"schemaVersion\\":\\"2018-12-12\\",\\"actions\\":{},\\"version\\":\\"1.0.0\\",\\"triggers\\":{}}',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '模板 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tp-uf6tbvhheciyxl',
                    ],
                ],
                [
                    'name' => 'FlowSource',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流来源，目前有以下取值：'."\n"
                            ."\n"
                            .'- Default：默认来源，一般是控制台创建'."\n"
                            .'- CloudConfig：通过配置审计产品创建'."\n"
                            .'- Solution：通过逻辑编排解决方案中心创建',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'CloudConfig' => '从配置审计创建',
                            'Default' => '默认来源',
                            'Solution' => '从逻辑编排解决方案中心创建',
                        ],
                        'example' => 'Default',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '资源组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-aekzmrjn4nsszna',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'FlowId' => [
                                'description' => '创建后的工作流编排实例ID',
                                'type' => 'string',
                                'example' => 'lc-utf6abcdefg',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D264C934-2DA8-44B4-B034-C659A63AC659',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"FlowId\\": \\"lc-utf6abcdefg\\",\\n  \\"RequestId\\": \\"D264C934-2DA8-44B4-B034-C659A63AC659\\"\\n}","type":"json"}]',
            'title' => '创建工作流',
            'description' => '创建工作流后，会自动为该工作流创建一个版本，可以通过 GetVersion 获取该版本信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CloneFlow' => [
            'summary' => '克隆一个工作流。',
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
            'operationType' => 'write',
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要克隆的工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'lc-uf6yrfwxpe6wkw',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要克隆的版本，如果不指定，则默认克隆最新版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 've-uf6bwdtvid7o25',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'FlowId' => [
                                'description' => '克隆后生成的工作流ID',
                                'type' => 'string',
                                'example' => 'lc-uf6wvbsyvvl5sy',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidFlow.NotFound',
                        'errorMessage' => 'The specified workflow does not exist. Verify the availability of the workflow.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"FlowId\\": \\"lc-uf6wvbsyvvl5sy\\",\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\"\\n}","type":"json"}]',
            'title' => '克隆工作流',
            'description' => '<warning>该API即将废弃，如需复制工作流，请使用GetFlow获取工作流信息后再调用CreateFlow创建工作流。</warning>',
        ],
        'DeleteFlow' => [
            'summary' => '删除一个工作流。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要删除的工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'lc-uf6wvbsyvvl5sy',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '本次操作是否成功，**true**表示成功，**false**表示失败。'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\"\\n}","type":"json"}]',
            'title' => '删除工作流',
            'description' => '删除工作流，会自动删除该工作流所有版本和执行记录。',
        ],
        'DisableFlow' => [
            'summary' => '禁用一个工作流，禁用后，工作流将不会运行。',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要禁用的工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'lc-uf6pvud38xl0ia',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
                            ],
                            'Success' => [
                                'description' => '当前操作的结果。'."\n"
                                    ."\n"
                                    .'- **true**：修改成功'."\n"
                                    .'- **false**：修改失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'FlowStatus' => [
                                'description' => '工作流当前状态。'."\n"
                                    ."\n"
                                    .'- **Enabled**：启用'."\n"
                                    .'- **Disabled**：已禁用',
                                'type' => 'string',
                                'example' => 'Disabled',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidFlow.NotFound',
                        'errorMessage' => 'The specified workflow does not exist. Verify the availability of the workflow.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\",\\n  \\"Success\\": true,\\n  \\"FlowStatus\\": \\"Disabled\\"\\n}","type":"json"}]',
            'title' => '禁用工作流',
        ],
        'EnableFlow' => [
            'summary' => '启用一个工作流。',
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
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要启用的工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'tp-uf6pvud38xl0ia',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
                            ],
                            'Success' => [
                                'description' => '当前操作的结果。'."\n"
                                    ."\n"
                                    .'- **true**：修改成功'."\n"
                                    .'- **false**：修改失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'FlowStatus' => [
                                'description' => '工作流当前状态。'."\n"
                                    ."\n"
                                    .'- **Enabled**：启用'."\n"
                                    .'- **Disabled**：已禁用',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidFlow.NotFound',
                        'errorMessage' => 'The specified workflow does not exist. Verify the availability of the workflow.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\",\\n  \\"Success\\": true,\\n  \\"FlowStatus\\": \\"Enabled\\"\\n}","type":"json"}]',
            'title' => '启用工作流',
        ],
        'UpdateFlow' => [
            'summary' => '更新一个工作流的信息',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要更新的工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'lc-uf6axpwfcw4ubx',
                    ],
                ],
                [
                    'name' => 'FlowName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '更新后的工作流名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'FlowDescription',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '更新后的工作流描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一个工作流的描述',
                    ],
                ],
                [
                    'name' => 'Definition',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '更新后的工作流定义',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"schemaVersion\\":\\"2018-12-12\\",\\"actions\\":{},\\"version\\":\\"1.0.0\\",\\"triggers\\":{}}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentVersionId' => [
                                'description' => '本次更新后，当前工作流版本ID。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
                            ],
                            'Success' => [
                                'description' => '当前操作的结果。'."\n"
                                    ."\n"
                                    .'- **true**：修改成功'."\n"
                                    .'- **false**：修改失败',
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
                        'errorCode' => 'InvalidDefinition.Format',
                        'errorMessage' => 'The specified workflow definition is incorrectly formatted. It must be valid JSON content.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Definition',
                        'errorMessage' => 'The specified definition is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Description.Length',
                        'errorMessage' => 'The specified description cannot be more than 255 characters in length.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Name',
                        'errorMessage' => 'The specified name is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter.Name.Length',
                        'errorMessage' => 'The specified name cannot be more than 100 characters in length.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You are not authorized to perform this operation. %s.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidFlow.NotFound',
                        'errorMessage' => 'The specified workflow does not exist. Verify the availability of the workflow.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentVersionId\\": 10,\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '更新工作流',
        ],
        'ListFlows' => [
            'summary' => '查询当前地域下所有工作流列表。',
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
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页大小，最大 100，默认值为 10',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页码。起始值：1默认值：1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'FlowName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流的名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '过滤条件，json格式：{"key1":"value1"}',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"tags\\":[{\\"key\\":\\"acs:lc:Solution:AliyunSSO\\",\\"value\\":\\"test\\"}]}',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '资源组ID',
                        'description' => '资源组ID，不传该参数则查询本账号下所有工作流。指定资源组ID后只会查询该资源组下的工作流',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmzy6dzs6qtqa',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '当前地域下工作流的总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A4865221-E0BC-5AF6-BDD3-749F5A2371CC',
                            ],
                            'Flows' => [
                                'description' => '工作流列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '工作流详细信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'UpdateTime' => [
                                            'description' => '最后更新时间',
                                            'type' => 'string',
                                            'format' => 'iso8601',
                                            'example' => '2019-07-19T05:43:16.783Z',
                                        ],
                                        'FlowSource' => [
                                            'description' => '工作流来源',
                                            'type' => 'string',
                                            'example' => 'Solution',
                                        ],
                                        'FlowStatus' => [
                                            'description' => '状态。'."\n"
                                                ."\n"
                                                .'- **Enabled**：启用'."\n"
                                                .'- **Disabled**：已禁用',
                                            'type' => 'string',
                                            'example' => 'Enabled',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'format' => 'iso8601',
                                            'example' => '2019-07-19T05:43:16.783Z',
                                        ],
                                        'FlowEditMode' => [
                                            'description' => '编辑模式',
                                            'type' => 'string',
                                            'example' => 'Normal',
                                        ],
                                        'VersionId' => [
                                            'description' => '当前最新版本',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'FlowDescription' => [
                                            'description' => '工作流的描述',
                                            'type' => 'string',
                                            'example' => 'test flow',
                                        ],
                                        'FlowName' => [
                                            'description' => '工作流名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'TemplateId' => [
                                            'description' => '模板 ID，可以通过 ListTemplates 获得模板 ID',
                                            'type' => 'string',
                                            'example' => 'tp-uf6lzhzywy28bs',
                                        ],
                                        'FlowId' => [
                                            'description' => '工作流ID',
                                            'type' => 'string',
                                            'example' => 'lc-uf6axpwfcw4ubx',
                                        ],
                                        'RegionId' => [
                                            'description' => '当前工作流所属地域',
                                            'type' => 'string',
                                            'example' => 'cn-shanghai',
                                        ],
                                        'ResourceGroupId' => [
                                            'title' => '资源组ID',
                                            'description' => '资源组ID',
                                            'type' => 'string',
                                            'example' => 'rg-acfmzyxxxxxxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"A4865221-E0BC-5AF6-BDD3-749F5A2371CC\\",\\n  \\"Flows\\": [\\n    {\\n      \\"UpdateTime\\": \\"2019-07-19T05:43:16.783Z\\",\\n      \\"FlowSource\\": \\"Solution\\",\\n      \\"FlowStatus\\": \\"Enabled\\",\\n      \\"CreateTime\\": \\"2019-07-19T05:43:16.783Z\\",\\n      \\"FlowEditMode\\": \\"Normal\\",\\n      \\"VersionId\\": \\"1\\",\\n      \\"FlowDescription\\": \\"test flow\\",\\n      \\"FlowName\\": \\"test\\",\\n      \\"TemplateId\\": \\"tp-uf6lzhzywy28bs\\",\\n      \\"FlowId\\": \\"lc-uf6axpwfcw4ubx\\",\\n      \\"RegionId\\": \\"cn-shanghai\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmzyxxxxxxx\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询工作流列表',
        ],
        'ListVersions' => [
            'summary' => '查询某个工作流所有版本列表。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要查询的工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'lc-uf6axpwfcw4ubx',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页数。 取值为大于0的整数。 默认值：1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页大小，最大 100，默认值为 10',
                        'type' => 'integer',
                        'format' => 'int32',
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
                            'TotalCount' => [
                                'description' => '该工作流包含的版本总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
                            ],
                            'Versions' => [
                                'description' => '版本列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '版本详情',
                                    'type' => 'object',
                                    'properties' => [
                                        'UpdateTime' => [
                                            'description' => '该版本最后更新时间',
                                            'type' => 'string',
                                            'example' => '2018-12-12T07:36:22.992Z',
                                        ],
                                        'VersionStatus' => [
                                            'description' => '该版本的状态，**Enabled**表示启用中',
                                            'type' => 'string',
                                            'example' => 'Enabled',
                                        ],
                                        'CreateTime' => [
                                            'description' => '版本创建时间',
                                            'type' => 'string',
                                            'example' => '2018-12-12T07:36:22.992Z',
                                        ],
                                        'VersionId' => [
                                            'description' => '版本ID',
                                            'type' => 'string',
                                            'example' => 've-uf6bwdtvid7o25',
                                        ],
                                        'VersionNumber' => [
                                            'description' => '版本号',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'FlowId' => [
                                            'description' => '该版本所属的工作流ID',
                                            'type' => 'string',
                                            'example' => 'lc-uf6axpwfcw4ubx',
                                        ],
                                        'VersionName' => [
                                            'description' => '版本名称',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\",\\n  \\"Versions\\": [\\n    {\\n      \\"UpdateTime\\": \\"2018-12-12T07:36:22.992Z\\",\\n      \\"VersionStatus\\": \\"Enabled\\",\\n      \\"CreateTime\\": \\"2018-12-12T07:36:22.992Z\\",\\n      \\"VersionId\\": \\"ve-uf6bwdtvid7o25\\",\\n      \\"VersionNumber\\": 1,\\n      \\"FlowId\\": \\"lc-uf6axpwfcw4ubx\\",\\n      \\"VersionName\\": \\"1\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询工作流版本列表',
        ],
        'GetVersion' => [
            'summary' => '查询某个工作流的某个特定版本信息。',
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
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lc-uf6axpwfcw4ubx',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '版本ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 've-uf6bwdtvid7o25',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Definition' => [
                                'description' => '当前版本对应的工作流定义',
                                'type' => 'string',
                                'example' => '{\\"schemaVersion\\":\\"2018-12-12\\",\\"actions\\":{},\\"version\\":\\"1.0.0\\",\\"triggers\\":{}}',
                            ],
                            'UpdateTime' => [
                                'description' => '版本最后更新时间',
                                'type' => 'string',
                                'example' => '2018-12-12T07:36:22.992Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
                            ],
                            'VersionStatus' => [
                                'description' => '版本状态，**Enabled**表示启用中。',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                            'CreateTime' => [
                                'description' => '版本创建时间',
                                'type' => 'string',
                                'example' => '2018-12-12T07:36:22.992Z',
                            ],
                            'VersionId' => [
                                'description' => '版本ID',
                                'type' => 'string',
                                'example' => 've-uf6bwdtvid7o25',
                            ],
                            'VersionName' => [
                                'description' => '版本名称',
                                'type' => 'string',
                                'example' => '5.3.6',
                            ],
                            'VersionDescription' => [
                                'description' => '版本描述',
                                'type' => 'string',
                                'example' => '这是版本描述',
                            ],
                            'FlowId' => [
                                'description' => '该版本所属工作流ID',
                                'type' => 'string',
                                'example' => 'lc-uf6wvbsyvvl5sy',
                            ],
                            'RegionId' => [
                                'description' => '当前工作流所属地域',
                                'type' => 'string',
                                'example' => 'cn-shanghai',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Definition\\": \\"{\\\\\\\\\\\\\\"schemaVersion\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"2018-12-12\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"actions\\\\\\\\\\\\\\":{},\\\\\\\\\\\\\\"version\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1.0.0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"triggers\\\\\\\\\\\\\\":{}}\\",\\n  \\"UpdateTime\\": \\"2018-12-12T07:36:22.992Z\\",\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\",\\n  \\"VersionStatus\\": \\"Enabled\\",\\n  \\"CreateTime\\": \\"2018-12-12T07:36:22.992Z\\",\\n  \\"VersionId\\": \\"ve-uf6bwdtvid7o25\\",\\n  \\"VersionName\\": \\"5.3.6\\",\\n  \\"VersionDescription\\": \\"这是版本描述\\",\\n  \\"FlowId\\": \\"lc-uf6wvbsyvvl5sy\\",\\n  \\"RegionId\\": \\"cn-shanghai\\"\\n}","type":"json"}]',
            'title' => '查询版本信息',
        ],
        'GetFlow' => [
            'summary' => '查询一个工作流的具体信息。',
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
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'lc-uf6pvud38xl0ia',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'UpdateTime' => [
                                'description' => '最后更新时间',
                                'type' => 'string',
                                'format' => 'iso8601',
                                'example' => '2019-07-19T05:43:16.783Z',
                            ],
                            'FlowSource' => [
                                'description' => '工作流来源',
                                'type' => 'string',
                                'example' => 'CloudConfig',
                            ],
                            'CreateTime' => [
                                'description' => '创建时间',
                                'type' => 'string',
                                'format' => 'iso8601',
                                'example' => '2019-07-19T05:43:16.783Z',
                            ],
                            'FlowEditMode' => [
                                'description' => '编辑模式',
                                'type' => 'string',
                                'example' => 'Locked',
                            ],
                            'FlowDescription' => [
                                'description' => '工作流的描述',
                                'type' => 'string',
                                'example' => '这是一个工作流',
                            ],
                            'CurrentVersionId' => [
                                'description' => '工作流编排实例的版本ID',
                                'type' => 'string',
                                'example' => 've-uf6bwdtvid7o25',
                            ],
                            'FlowName' => [
                                'description' => '工作流编排实例的名称',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'FlowId' => [
                                'description' => '工作流编排实例的ID',
                                'type' => 'string',
                                'example' => 'lc-uf6pvud38xl0ia',
                            ],
                            'RegionId' => [
                                'description' => '地域ID',
                                'type' => 'string',
                                'example' => 'cn-shanghai',
                            ],
                            'Definition' => [
                                'description' => '工作流定义',
                                'type' => 'string',
                                'example' => '{\\"schemaVersion\\":\\"2018-12-12\\",\\"actions\\":{},\\"version\\":\\"1.0.0\\",\\"triggers\\":{}}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
                            ],
                            'FlowStatus' => [
                                'description' => '状态。'."\n"
                                    ."\n"
                                    .'- **Enabled**：启用'."\n"
                                    .'- **Disabled**：已禁用',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                            'TemplateId' => [
                                'description' => '模板 ID',
                                'type' => 'string',
                                'example' => 'tp-uf6tbvhheciyxl',
                            ],
                            'ResourceGroupId' => [
                                'title' => '资源组ID',
                                'description' => '资源组ID',
                                'type' => 'string',
                                'example' => 'rg-acfmzyxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'InvalidFlow.NotFound',
                        'errorMessage' => 'The specified workflow does not exist. Verify the availability of the workflow.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"UpdateTime\\": \\"2019-07-19T05:43:16.783Z\\",\\n  \\"FlowSource\\": \\"CloudConfig\\",\\n  \\"CreateTime\\": \\"2019-07-19T05:43:16.783Z\\",\\n  \\"FlowEditMode\\": \\"Locked\\",\\n  \\"FlowDescription\\": \\"这是一个工作流\\",\\n  \\"CurrentVersionId\\": \\"ve-uf6bwdtvid7o25\\",\\n  \\"FlowName\\": \\"test\\",\\n  \\"FlowId\\": \\"lc-uf6pvud38xl0ia\\",\\n  \\"RegionId\\": \\"cn-shanghai\\",\\n  \\"Definition\\": \\"{\\\\\\\\\\\\\\"schemaVersion\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"2018-12-12\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"actions\\\\\\\\\\\\\\":{},\\\\\\\\\\\\\\"version\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1.0.0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"triggers\\\\\\\\\\\\\\":{}}\\",\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\",\\n  \\"FlowStatus\\": \\"Enabled\\",\\n  \\"TemplateId\\": \\"tp-uf6tbvhheciyxl\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmzyxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '获取工作流详情',
        ],
        'InvokeFlow' => [
            'summary' => '运行一次工作流。',
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
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要运行的工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'lc-uf65sg10vjws7o',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '该模板所需要的参数，为 JSON 字符串。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{"ParamA": "test"}',
                    ],
                ],
                [
                    'name' => 'Data',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '该工作流的触发器所需要的入参，为 JSON 字符串。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{"body": {"test": true}}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用于幂等，避免重复运行。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcdefghijklmn',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID',
                                'type' => 'string',
                                'example' => '5CE7EAE6-XXXX-XXXX-A1A3-D3C2AE624000',
                            ],
                            'Success' => [
                                'description' => '是否运行成功。'."\n"
                                    ."\n"
                                    .'- **true**：工作流已经被触发'."\n"
                                    .'- **false**：触发失败'."\n"
                                    ."\n"
                                    .'> 如果需要查询工作流运行结果，请使用**GetInvocationLog**查询运行结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'InvocationId' => [
                                'description' => '本次运行的唯一标识符',
                                'type' => 'string',
                                'example' => '6b387696-d160-4ed7-xxxx-070ac29dce4d',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5CE7EAE6-XXXX-XXXX-A1A3-D3C2AE624000\\",\\n  \\"Success\\": true,\\n  \\"InvocationId\\": \\"6b387696-d160-4ed7-xxxx-070ac29dce4d\\"\\n}","type":"json"}]',
            'title' => '运行工作流',
        ],
        'GroupInvokeFlow' => [
            'summary' => '触发一个工作流多次执行。',
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
                    'name' => 'FlowId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要运行的工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'lc-uf6axpwfcw4ubx',
                    ],
                ],
                [
                    'name' => 'GroupKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '本次批量执行的分组名，不同执行分组之间不能重复',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1632117849243',
                    ],
                ],
                [
                    'name' => 'Data',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '该分组执行所需的数据，为JSON字符串，格式为：`{"Items": []}`。Items数组每一项为单次执行的参数。单次执行参数的编写方式和InvokeFlow的Data参数一致',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{\\"Items\\":[{\\"resourceId\\":\\"i-bp1383wskmaa65duviwh\\",\\"regionId\\":\\"cn-hangzhou\\",\\"resourceType\\":\\"ACS::ECS::Instance\\"}],\\"Source\\":\\"CloudConfig\\"}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'abcdefghijklmn',
                    ],
                ],
                [
                    'name' => 'TotalCount',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '该组执行包含的执行数，需要和Data.Items数组中的个数一致',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '为该分组下的每次执行打标签，格式为JSON数组，数组内为对应执行的标签对象。数组包含的标签对象个数需与TotalCount一致',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{\\"key1\\":\\"value1\\",\\"key2\\":\\"value2\\"}]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '本次分组执行的状态：'."\n"
                                    .'- New：请求已经创建，待运行'."\n"
                                    .'- Started：已经开始运行'."\n"
                                    .'- Canceled：已经取消'."\n"
                                    .'- Failed：执行失败'."\n"
                                    .'- Completed：分组内所有执行已经完成'."\n"
                                    .'- Unknown：执行状态不确定，常见于系统错误'."\n"
                                    .'- TimedOut：执行超时'."\n"
                                    .'- Paused：执行被暂停',
                                'type' => 'string',
                                'example' => 'Completed',
                            ],
                            'GroupInvocationId' => [
                                'description' => '本次运行的唯一标识符',
                                'type' => 'string',
                                'example' => '7bdbdb58-f028-4155-915e-f21e1f8fc48a',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4F06F96E-D1F8-54ED-9611-4F621AD899B5',
                            ],
                            'CurrentCount' => [
                                'description' => '当前待运行的执行数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Success' => [
                                'description' => '是否运行成功。'."\n"
                                    ."\n"
                                    .'- **true**：工作流已经被触发'."\n"
                                    .'- **false**：触发失败'."\n"
                                    ."\n"
                                    .'> 如果需要查询工作流运行结果，请使用**GetInvocationLog**查询运行结果。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Completed\\",\\n  \\"GroupInvocationId\\": \\"7bdbdb58-f028-4155-915e-f21e1f8fc48a\\",\\n  \\"RequestId\\": \\"4F06F96E-D1F8-54ED-9611-4F621AD899B5\\",\\n  \\"CurrentCount\\": 10,\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '批量运行工作流',
            'description' => '- 该API适用于大批量执行工作流，如果执行频率不超过100次/秒，建议使用InvokeFlow触发工作流执行。'."\n"
                .'- 调用成功后，并不代表所有请求并发执行，逻辑编排会自动根据请求情况确定单次执行的开始执行时间。'."\n"
                .'- 该API每次调用认为是一次执行分组（Group），假设共需要执行工作流1000次，每100次为一个分组，那么就需要调用10次该API，同时每次调用均需要传递一个唯一的GroupKey作为该组标识。一个分组内包含多个执行数据（Data为JSON数组），每个执行数据对应一次执行（与调用一次InvokeFlow一致）。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'composer.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'composer.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'composer.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'composer.us-east-1.aliyuncs.com',
        ],
    ],
];
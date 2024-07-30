<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'oos',
        'version' => '2019-06-01',
    ],
    'directories' => [
        [
            'id' => 73234,
            'title' => '地域',
            'type' => 'directory',
            'children' => [
                'DescribeRegions',
            ],
        ],
        [
            'id' => 73254,
            'title' => '模板',
            'type' => 'directory',
            'children' => [
                'CreateTemplate',
                'DeleteTemplates',
                'DeleteTemplate',
                'UpdateTemplate',
                'ListTemplateVersions',
                'ListTemplates',
                'GetTemplate',
                'ListExecutionRiskyTasks',
                'ValidateTemplateContent',
            ],
        ],
        [
            'id' => 73264,
            'title' => '执行',
            'type' => 'directory',
            'children' => [
                'DeleteExecutions',
                'StartExecution',
                'UpdateExecution',
                'GetExecutionTemplate',
                'ListExecutions',
                'ListExecutionLogs',
                'ListTaskExecutions',
                'ListResourceExecutionStatus',
                'CancelExecution',
                'GenerateExecutionPolicy',
                'NotifyExecution',
                'TriggerExecution',
            ],
        ],
        [
            'id' => 73277,
            'title' => '动作',
            'type' => 'directory',
            'children' => [
                'ListActions',
            ],
        ],
        [
            'id' => 73286,
            'title' => '参数',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 73287,
                    'title' => '普通参数',
                    'type' => 'directory',
                    'children' => [
                        'CreateParameter',
                        'DeleteParameter',
                        'UpdateParameter',
                        'GetParameter',
                        'ListParameters',
                        'ListParameterVersions',
                        'GetParametersByPath',
                        'GetParameters',
                    ],
                ],
                [
                    'id' => 73296,
                    'title' => '加密参数',
                    'type' => 'directory',
                    'children' => [
                        'CreateSecretParameter',
                        'DeleteSecretParameter',
                        'UpdateSecretParameter',
                        'GetSecretParameter',
                        'ListSecretParameters',
                        'ListSecretParameterVersions',
                        'GetSecretParametersByPath',
                        'GetSecretParameters',
                    ],
                ],
            ],
        ],
        [
            'id' => 73244,
            'title' => '补丁管理',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 73247,
                    'title' => '补丁基线',
                    'type' => 'directory',
                    'children' => [
                        'CreatePatchBaseline',
                        'DeletePatchBaseline',
                        'UpdatePatchBaseline',
                        'GetPatchBaseline',
                        'ListPatchBaselines',
                        'RegisterDefaultPatchBaseline',
                    ],
                ],
                [
                    'id' => 171899,
                    'title' => '补丁状态',
                    'type' => 'directory',
                    'children' => [
                        'ListInstancePatchStates',
                        'ListInstancePatches',
                    ],
                ],
            ],
        ],
        [
            'id' => 73305,
            'title' => '配置清单',
            'type' => 'directory',
            'children' => [
                'ListInventoryEntries',
                'GetInventorySchema',
                'SearchInventory',
            ],
        ],
        [
            'id' => 73239,
            'title' => '终态配置',
            'type' => 'directory',
            'children' => [
                'CreateStateConfiguration',
                'DeleteStateConfigurations',
                'UpdateStateConfiguration',
                'ListStateConfigurations',
            ],
        ],
        [
            'id' => 172160,
            'title' => '运维项',
            'type' => 'directory',
            'children' => [
                'CreateOpsItem',
                'GetOpsItem',
                'ListOpsItems',
                'UpdateOpsItem',
            ],
        ],
        [
            'id' => 73309,
            'title' => '设置',
            'type' => 'directory',
            'children' => [
                'SetServiceSettings',
                'GetServiceSettings',
            ],
        ],
        [
            'id' => 170457,
            'title' => '应用管理',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 73223,
                    'title' => '应用',
                    'type' => 'directory',
                    'children' => [
                        'CreateApplication',
                        'DeleteApplication',
                        'UpdateApplication',
                        'GetApplication',
                        'ListApplications',
                    ],
                ],
                [
                    'id' => 73222,
                    'title' => '应用分组',
                    'type' => 'directory',
                    'children' => [
                        'CreateApplicationGroup',
                        'DeleteApplicationGroup',
                        'UpdateApplicationGroup',
                        'GetApplicationGroup',
                        'ListApplicationGroups',
                        'DeployApplicationGroup',
                        'ContinueDeployApplicationGroup',
                    ],
                ],
            ],
        ],
        [
            'id' => 73279,
            'title' => '标签与资源组',
            'type' => 'directory',
            'children' => [
                'ChangeResourceGroup',
                'ListTagKeys',
                'ListTagValues',
                'ListTagResources',
                'UntagResources',
                'TagResources',
            ],
        ],
        [
            'id' => 190120,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'DescribeApplicationGroupBill',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeRegions' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '93955',
                'abilityTreeNodes' => [
                    'FEATUREoosB33AG0',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回的语言类型，支持zh-CN或en-US。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'ja' => 'ja',
                        ],
                        'example' => 'zh-CN',
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
                                'example' => '469E79B1-90A3-4A57-B7C4-2FE0C8B5175E',
                            ],
                            'Regions' => [
                                'description' => '地域列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionEndpoint' => [
                                            'description' => '端点信息',
                                            'type' => 'string',
                                            'example' => 'oos.cn-shenzhen.aliyuncs.com',
                                        ],
                                        'LocalName' => [
                                            'description' => '该地域名称',
                                            'type' => 'string',
                                            'example' => 'China (Shenzhen)',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID',
                                            'type' => 'string',
                                            'example' => 'cn-shenzhen',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"469E79B1-90A3-4A57-B7C4-2FE0C8B5175E\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionEndpoint\\": \\"oos.cn-shenzhen.aliyuncs.com\\",\\n      \\"LocalName\\": \\"China (Shenzhen)\\",\\n      \\"RegionId\\": \\"cn-shenzhen\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionseResponse>\\n<RequestId>469E79B1-90A3-4A57-B7C4-2FE0C8B5175E</RequestId>\\n<Regions>\\n    <RegionId>cn-shenzhen</RegionId>\\n    <RegionEndpoint>oos.cn-shenzhen.aliyuncs.com</RegionEndpoint>\\n    <LocalName>China (Shenzhen)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>eu-central-1</RegionId>\\n    <RegionEndpoint>oos.eu-central-1.aliyuncs.com</RegionEndpoint>\\n    <LocalName>Germany (Frankfurt)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>cn-chengdu</RegionId>\\n    <RegionEndpoint>oos.cn-chengdu.aliyuncs.com</RegionEndpoint>\\n    <LocalName>China (Chengdu)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>ap-south-1</RegionId>\\n    <RegionEndpoint>oos.ap-south-1.aliyuncs.com</RegionEndpoint>\\n    <LocalName>India (Mumbai)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>cn-zhangjiakou</RegionId>\\n    <RegionEndpoint>oos.cn-zhangjiakou.aliyuncs.com</RegionEndpoint>\\n    <LocalName>China (Zhangjiakou)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>ap-northeast-1</RegionId>\\n    <RegionEndpoint>oos.ap-northeast-1.aliyuncs.com</RegionEndpoint>\\n    <LocalName>Japan (Tokyo)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>ap-southeast-2</RegionId>\\n    <RegionEndpoint>oos.ap-southeast-2.aliyuncs.com</RegionEndpoint>\\n    <LocalName>Australia (Sydney)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <RegionEndpoint>oos.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n    <LocalName>China (Hangzhou)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>cn-hongkong</RegionId>\\n    <RegionEndpoint>oos.cn-hongkong.aliyuncs.com</RegionEndpoint>\\n    <LocalName>China (Hong Kong)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>eu-west-1</RegionId>\\n    <RegionEndpoint>oos.eu-west-1.aliyuncs.com</RegionEndpoint>\\n    <LocalName>UK (London)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>ap-southeast-1</RegionId>\\n    <RegionEndpoint>oos.ap-southeast-1.aliyuncs.com</RegionEndpoint>\\n    <LocalName>Singapore</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>ap-southeast-5</RegionId>\\n    <RegionEndpoint>oos.ap-southeast-5.aliyuncs.com</RegionEndpoint>\\n    <LocalName>Indonesia (Jakarta)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>cn-beijing</RegionId>\\n    <RegionEndpoint>oos.cn-beijing.aliyuncs.com</RegionEndpoint>\\n    <LocalName>China (Beijing)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>cn-shanghai</RegionId>\\n    <RegionEndpoint>oos.cn-shanghai.aliyuncs.com</RegionEndpoint>\\n    <LocalName>China (Shanghai)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>us-east-1</RegionId>\\n    <RegionEndpoint>oos.us-east-1.aliyuncs.com</RegionEndpoint>\\n    <LocalName>US (Virginia)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>cn-huhehaote</RegionId>\\n    <RegionEndpoint>oos.cn-huhehaote.aliyuncs.com</RegionEndpoint>\\n    <LocalName>China (Hohhot)</LocalName>\\n</Regions>\\n<Regions>\\n    <RegionId>ap-southeast-3</RegionId>\\n    <RegionEndpoint>oos.ap-southeast-3.aliyuncs.com</RegionEndpoint>\\n    <LocalName>Malaysia (Kuala Lumpur)</LocalName>\\n</Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
            'title' => '查询当前支持的地域情况',
            'summary' => '调用该API查询当前支持的地域情况。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateTemplate' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。内容限制为字母、数字、中划线、下划线，长度200字符，且不能以ALIYUN、ACS、ALIBABA、ALICLOUD开头。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyTemplate',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板内容。JSON或YAML格式，长度限制为 64 KB。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"FormatVersion": "OOS-2019-06-01", "Description": "Describe instances of given status", "Parameters": {"Status": {"Type": "String", "Description": "(Required) The status of the Ecs instance."}}, "Tasks": [{"Properties": {"Parameters": {"Status": "{{ Status }}"}, "API": "DescribeInstances", "Service": "Ecs"}, "Name": "foo", "Action": "ACS::ExecuteApi"}]}',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签键和值列表， 标签键值对数量范围是1至20。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"k1":"v1","k2":"v2"}',
                    ],
                ],
                [
                    'name' => 'VersionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v2',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TemplateType' => [
                                'description' => '模版类型。',
                                'type' => 'string',
                                'example' => 'Private',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '20758A-585D-4A41-A9B2-28DA8F4F534F',
                            ],
                            'Template' => [
                                'description' => '模板元信息',
                                'type' => 'object',
                                'properties' => [
                                    'Hash' => [
                                        'description' => '模板内容的SHA256',
                                        'type' => 'string',
                                        'example' => '4bc7d7a21b3e003434b9c223f6e6d2578b5ebfeb5be28c1fcf8a8a1b11907bb4',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '模板更新时间',
                                        'type' => 'string',
                                        'example' => '2019-05-16T10:26:14Z',
                                    ],
                                    'UpdatedBy' => [
                                        'description' => '模板更新者',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'Tags' => [
                                        'description' => '该资源的标签',
                                        'type' => 'object',
                                        'example' => '{     "k1":"v1",     "k2":"v2" }',
                                    ],
                                    'TemplateName' => [
                                        'description' => '模板名称',
                                        'type' => 'string',
                                        'example' => 'MyTemplate',
                                    ],
                                    'TemplateVersion' => [
                                        'description' => '模板版本。以“v”+数字的形式，数字从1开始。',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                    'TemplateFormat' => [
                                        'description' => '模板格式。系统字段判断，为JSON或YAML。',
                                        'type' => 'string',
                                        'example' => 'JSON',
                                    ],
                                    'Description' => [
                                        'description' => '模板说明',
                                        'type' => 'string',
                                        'example' => 'Describe instances of given status',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID',
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m4******',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '模板创建者',
                                        'type' => 'string',
                                        'example' => 'root(13090000)',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '模板创建时间',
                                        'type' => 'string',
                                        'example' => '2019-05-16T10:26:14Z',
                                    ],
                                    'TemplateId' => [
                                        'description' => '模板ID',
                                        'type' => 'string',
                                        'example' => 't-94753d38',
                                    ],
                                    'HasTrigger' => [
                                        'description' => '是否成功触发',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'ShareType' => [
                                        'description' => '模板共享类型。目前用户创建的模板的共享类型均为 Private。',
                                        'type' => 'string',
                                        'example' => 'Private',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TemplateType\\": \\"Private\\",\\n  \\"RequestId\\": \\"20758A-585D-4A41-A9B2-28DA8F4F534F\\",\\n  \\"Template\\": {\\n    \\"Hash\\": \\"4bc7d7a21b3e003434b9c223f6e6d2578b5ebfeb5be28c1fcf8a8a1b11907bb4\\",\\n    \\"UpdatedDate\\": \\"2019-05-16T10:26:14Z\\",\\n    \\"UpdatedBy\\": \\"root(130900000)\\",\\n    \\"Tags\\": {\\n      \\"k1\\": \\"v1\\",\\n      \\"k2\\": \\"v2\\"\\n    },\\n    \\"TemplateName\\": \\"MyTemplate\\",\\n    \\"TemplateVersion\\": \\"v1\\",\\n    \\"TemplateFormat\\": \\"JSON\\",\\n    \\"Description\\": \\"Describe instances of given status\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n    \\"CreatedBy\\": \\"root(13090000)\\",\\n    \\"CreatedDate\\": \\"2019-05-16T10:26:14Z\\",\\n    \\"TemplateId\\": \\"t-94753d38\\",\\n    \\"HasTrigger\\": true,\\n    \\"ShareType\\": \\"Private\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateTemplateResponse>\\n    <RequestId>20758A-585D-4A41-A9B2-28DA8F4F534F</RequestId>\\n    <Template>\\n        <CreatedBy>root(130900000)</CreatedBy>\\n        <CreatedDate>2019-05-27T08:46:33Z</CreatedDate>\\n        <UpdatedBy>root(1309000000)</UpdatedBy>\\n        <UpdatedDate>2019-05-27T08:46:33Z</UpdatedDate>\\n        <Description>Describe instances of given status</Description>\\n        <Hash>4bc7d7a21b3e003434b9c223f6e6d2578b5ebfeb5be28c1fcf8a8a1b11907bb4</Hash>\\n        <ShareType>Private</ShareType>\\n        <Tags>\\n            <k1>v1</k1>\\n            <k2>v2</k2>\\n        </Tags>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <TemplateFormat>JSON</TemplateFormat>\\n        <TemplateName>MyTemplate</TemplateName>\\n        <TemplateId>t-94753eeaef8</TemplateId>\\n        <TemplateVersion>v1</TemplateVersion>\\n    </Template>\\n</CreateTemplateResponse>","errorExample":""}]',
            'title' => '创建一个模版',
            'summary' => '创建一个模版。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteTemplates' => [
            'path' => '/DeleteTemplates',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TemplateNames',
                    'in' => 'query',
                    'schema' => [
                        'description' => '将要删除模版名称列表',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["t1","t2"]',
                    ],
                ],
                [
                    'name' => 'AutoDeleteExecutions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '删除模版时，是否顺带删除其相关的执行。',
                        'type' => 'boolean',
                        'required' => false,
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '2075899A-585D-4A41-A9B2-28DA8534',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2075899A-585D-4A41-A9B2-28DA8534\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteTemplateResponse>\\n    <RequestId>2075899A-585D-4A41-A9B2-28DA8534F</RequestId>\\n</DeleteTemplateResponse>","errorExample":""}]',
            'title' => '删除多个模版',
            'summary' => '调用该API删除多个模版。',
        ],
        'DeleteTemplate' => [
            'path' => '/DeleteTemplate',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。内容限制为字母、数字、中划线、下划线，长度200字符，且不能以ALIYUN、ACS、ALIBABA、ALICLOUD开头。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyTemplate',
                    ],
                ],
                [
                    'name' => 'AutoDeleteExecutions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '删除模版时，顺带删除其相关的执行。',
                        'type' => 'boolean',
                        'required' => false,
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '2075899A-585D-4A41-A9B2-28DA8534F',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2075899A-585D-4A41-A9B2-28DA8534F\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteTemplateResponse>\\r\\n    <RequestId>2075899A-585D-4A41-A9B2-28DA8534F</RequestId>\\r\\n</DeleteTemplateResponse>","errorExample":""}]',
            'title' => '删除一个模版',
            'summary' => '删除一个模版。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateTemplate' => [
            'path' => '/UpdateTemplate',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。内容限制为字母、数字、中划线、下划线，长度200字符，且不能以ALIYUN、ACS、ALIBABA、ALICLOUD开头。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyTemplate',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板内容。JSON或YAML格式，长度限制为 64 KB。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{'."\n"
                            .'  "FormatVersion": "OOS-2019-06-01",'."\n"
                            .'  "Description": {'."\n"
                            .'    "en": "Bulky starts the ECS instances",'."\n"
                            .'    "zh-cn": "批量启动ECS实例",'."\n"
                            .'    "name-en": "Bulky Start Instances",'."\n"
                            .'    "name-zh-cn": "批量启动实例"'."\n"
                            .'  },'."\n"
                            .'  "Parameters": {'."\n"
                            .'    "regionId": {'."\n"
                            .'      "Type": "String",'."\n"
                            .'      "Label": {'."\n"
                            .'        "en": "RegionId",'."\n"
                            .'        "zh-cn": "地域ID"'."\n"
                            .'      },'."\n"
                            .'      "AssociationProperty": "RegionId",'."\n"
                            .'      "Default": "{{ ACS::RegionId }}"'."\n"
                            .'    },'."\n"
                            .'    "targets": {'."\n"
                            .'      "Type": "Json",'."\n"
                            .'      "Label": {'."\n"
                            .'        "en": "TargetInstance",'."\n"
                            .'        "zh-cn": "目标实例"'."\n"
                            .'      },'."\n"
                            .'      "AssociationProperty": "Targets",'."\n"
                            .'      "AssociationPropertyMetadata": {'."\n"
                            .'        "ResourceType": "ALIYUN::ECS::Instance",'."\n"
                            .'        "RegionId": "regionId"'."\n"
                            .'      }'."\n"
                            .'    },'."\n"
                            .'    "rateControl": {'."\n"
                            .'      "Label": {'."\n"
                            .'        "en": "RateControl",'."\n"
                            .'        "zh-cn": "任务执行的并发比率"'."\n"
                            .'      },'."\n"
                            .'      "Type": "Json",'."\n"
                            .'      "AssociationProperty": "RateControl",'."\n"
                            .'      "Default": {'."\n"
                            .'        "Mode": "Concurrency",'."\n"
                            .'        "MaxErrors": 0,'."\n"
                            .'        "Concurrency": 10'."\n"
                            .'      }'."\n"
                            .'    },'."\n"
                            .'    "OOSAssumeRole": {'."\n"
                            .'      "Label": {'."\n"
                            .'        "en": "OOSAssumeRole",'."\n"
                            .'        "zh-cn": "OOS扮演的RAM角色"'."\n"
                            .'      },'."\n"
                            .'      "Type": "String",'."\n"
                            .'      "Default": "OOSServiceRole"'."\n"
                            .'    }'."\n"
                            .'  },'."\n"
                            .'  "RamRole": "{{ OOSAssumeRole }}",'."\n"
                            .'  "Tasks": ['."\n"
                            .'    {'."\n"
                            .'      "Name": "getInstance",'."\n"
                            .'      "Description": {'."\n"
                            .'        "en": "Views the ECS instances",'."\n"
                            .'        "zh-cn": "获取ECS实例"'."\n"
                            .'      },'."\n"
                            .'      "Action": "ACS::SelectTargets",'."\n"
                            .'      "Properties": {'."\n"
                            .'        "ResourceType": "ALIYUN::ECS::Instance",'."\n"
                            .'        "RegionId": "{{ regionId }}",'."\n"
                            .'        "Filters": ['."\n"
                            .'          "{{ targets }}"'."\n"
                            .'        ]'."\n"
                            .'      },'."\n"
                            .'      "Outputs": {'."\n"
                            .'        "instanceIds": {'."\n"
                            .'          "Type": "List",'."\n"
                            .'          "ValueSelector": "Instances.Instance[].InstanceId"'."\n"
                            .'        }'."\n"
                            .'      }'."\n"
                            .'    },'."\n"
                            .'    {'."\n"
                            .'      "Name": "startInstance",'."\n"
                            .'      "Action": "ACS::ECS::StartInstance",'."\n"
                            .'      "Description": {'."\n"
                            .'        "en": "Starts the ECS instances",'."\n"
                            .'        "zh-cn": "启动实例"'."\n"
                            .'      },'."\n"
                            .'      "Properties": {'."\n"
                            .'        "regionId": "{{ regionId }}",'."\n"
                            .'        "instanceId": "{{ ACS::TaskLoopItem }}"'."\n"
                            .'      },'."\n"
                            .'      "Loop": {'."\n"
                            .'        "RateControl": "{{ rateControl }}",'."\n"
                            .'        "Items": "{{ getInstance.instanceIds }}"'."\n"
                            .'      }'."\n"
                            .'    }'."\n"
                            .'  ],'."\n"
                            .'  "Outputs": {'."\n"
                            .'    "instanceIds": {'."\n"
                            .'      "Type": "List",'."\n"
                            .'      "Value": "{{ getInstance.instanceIds }}"'."\n"
                            .'    }'."\n"
                            .'  }'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签键及值，键值对数量限制为1至20。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"k1":"k2","k2":"v2"}',
                    ],
                ],
                [
                    'name' => 'VersionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模版版本名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v2',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
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
                                'example' => '2075899A-585D-4A41-A9B2-28DF4F534F',
                            ],
                            'Template' => [
                                'description' => '模板元信息',
                                'type' => 'object',
                                'properties' => [
                                    'Hash' => [
                                        'description' => '模板内容的SHA256',
                                        'type' => 'string',
                                        'example' => '4bc7d7a21b3e003434b9c223f6e6d2578b5ebfeb5be28c1fcf8a8a1b11907bb4',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '模板更新时间',
                                        'type' => 'string',
                                        'example' => '2019-05-16T10:26:14Z',
                                    ],
                                    'UpdatedBy' => [
                                        'description' => '模板更新者',
                                        'type' => 'string',
                                        'example' => 'root(1309000)',
                                    ],
                                    'Tags' => [
                                        'description' => '标签键及值，键值对数量限制为1至20。',
                                        'type' => 'object',
                                        'example' => '{"k1":"k2","k2":"v2"}',
                                    ],
                                    'TemplateName' => [
                                        'description' => '模板名称',
                                        'type' => 'string',
                                        'example' => 'MyTemplate',
                                    ],
                                    'TemplateVersion' => [
                                        'description' => '模板版本。以“v”+数字的形式，数字从1开始。',
                                        'type' => 'string',
                                        'example' => 'v2',
                                    ],
                                    'TemplateFormat' => [
                                        'description' => '模板格式。系统字段判断，为JSON或YAML。',
                                        'type' => 'string',
                                        'example' => 'JSON',
                                    ],
                                    'Description' => [
                                        'description' => '模板说明',
                                        'type' => 'string',
                                        'example' => 'Describe instances of given status',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m4******',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '模板创建者',
                                        'type' => 'string',
                                        'example' => 'root(130920000)',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '模板创建时间',
                                        'type' => 'string',
                                        'example' => '2019-05-16T10:26:14Z',
                                    ],
                                    'TemplateId' => [
                                        'description' => '模板ID',
                                        'type' => 'string',
                                        'example' => 't-94753deed38',
                                    ],
                                    'HasTrigger' => [
                                        'description' => '是否成功触发',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'ShareType' => [
                                        'description' => '模板共享类型。目前用户创建的模板的共享类型均为 **Private**。',
                                        'type' => 'string',
                                        'example' => 'Private',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2075899A-585D-4A41-A9B2-28DF4F534F\\",\\n  \\"Template\\": {\\n    \\"Hash\\": \\"4bc7d7a21b3e003434b9c223f6e6d2578b5ebfeb5be28c1fcf8a8a1b11907bb4\\",\\n    \\"UpdatedDate\\": \\"2019-05-16T10:26:14Z\\",\\n    \\"UpdatedBy\\": \\"root(1309000)\\",\\n    \\"Tags\\": {\\n      \\"k1\\": \\"k2\\",\\n      \\"k2\\": \\"v2\\"\\n    },\\n    \\"TemplateName\\": \\"MyTemplate\\",\\n    \\"TemplateVersion\\": \\"v2\\",\\n    \\"TemplateFormat\\": \\"JSON\\",\\n    \\"Description\\": \\"Describe instances of given status\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n    \\"CreatedBy\\": \\"root(130920000)\\",\\n    \\"CreatedDate\\": \\"2019-05-16T10:26:14Z\\",\\n    \\"TemplateId\\": \\"t-94753deed38\\",\\n    \\"HasTrigger\\": true,\\n    \\"ShareType\\": \\"Private\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateTemplateResponse>\\n    <RequestId>2075899A-585D-4A41-A9B2-28DF4F534F</RequestId>\\n    <Template>\\n        <Hash>4bc7d7a21b3e003434b9c223f6e6d2578b5ebfeb5be28c1fcf8a8a1b11907bb4</Hash>\\n        <UpdatedDate>2019-05-16T10:26:14Z</UpdatedDate>\\n        <UpdatedBy>root(1309000)</UpdatedBy>\\n        <TemplateName>MyTemplate</TemplateName>\\n        <TemplateVersion>v2</TemplateVersion>\\n        <TemplateFormat>JSON</TemplateFormat>\\n        <Description>Describe instances of given status</Description>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <CreatedBy>root(130920000)</CreatedBy>\\n        <CreatedDate>2019-05-16T10:26:14Z</CreatedDate>\\n        <TemplateId>t-94753deed38</TemplateId>\\n        <HasTrigger>true</HasTrigger>\\n        <Tags>\\n            <k1>v1</k1>\\n            <k2>v2</k2>\\n        </Tags>\\n        <ShareType>Private</ShareType>\\n    </Template>\\n</UpdateTemplateResponse>","errorExample":""}]',
            'title' => '更新一个已经存在的模板',
            'summary' => '更新一个已经存在的模板。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTemplateVersions' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模版名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'describeinstances',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最大结果数。取值范围10-100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用来翻页的Token字符串。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'H8xj9c-398djs9-39ajd9asdjjJ',
                    ],
                ],
                [
                    'name' => 'ShareType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模版类型。取值范围Private或Public。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Private',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻向下一页的Token字符串。',
                                'type' => 'string',
                                'example' => 'NJSNDKLJS-SJKJDO090k30-JSDK232',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E6CD612B-5889-4F1A-823F-8A4029E46',
                            ],
                            'MaxResults' => [
                                'description' => '最大结果数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'TemplateVersions' => [
                                'description' => '模版的多个版本对象。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Description' => [
                                            'description' => '该版本描述。',
                                            'type' => 'string',
                                            'example' => 'Detach the eip from the special instance.',
                                        ],
                                        'UpdatedDate' => [
                                            'description' => '该版本模版最近更新时间。',
                                            'type' => 'string',
                                            'example' => '2020-05-19T06:05:41Z',
                                        ],
                                        'UpdatedBy' => [
                                            'description' => '该版本模版最近更新人。',
                                            'type' => 'string',
                                            'example' => 'foo',
                                        ],
                                        'VersionName' => [
                                            'description' => '版本名称',
                                            'type' => 'string',
                                            'example' => 'baz',
                                        ],
                                        'TemplateVersion' => [
                                            'description' => '该版本号。',
                                            'type' => 'string',
                                            'example' => 'v2',
                                        ],
                                        'TemplateFormat' => [
                                            'description' => '模版内容格式。YAML或JSON。',
                                            'type' => 'string',
                                            'example' => 'YAML',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"NJSNDKLJS-SJKJDO090k30-JSDK232\\",\\n  \\"RequestId\\": \\"E6CD612B-5889-4F1A-823F-8A4029E46\\",\\n  \\"MaxResults\\": 50,\\n  \\"TemplateVersions\\": [\\n    {\\n      \\"Description\\": \\"Detach the eip from the special instance.\\",\\n      \\"UpdatedDate\\": \\"2020-05-19T06:05:41Z\\",\\n      \\"UpdatedBy\\": \\"foo\\",\\n      \\"VersionName\\": \\"baz\\",\\n      \\"TemplateVersion\\": \\"v2\\",\\n      \\"TemplateFormat\\": \\"YAML\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"\\n<ListTemplateVersionsResponse>\\n<RequestId>E6CD612B-5889-4F1A-823F-8A4029E4667F</RequestId>\\n<MaxResults>20</MaxResults>\\n<TemplateVersions>\\n    <UpdatedBy>sub:239325550833674852:wb-kxy520087</UpdatedBy>\\n    <Description>Detach the eip from the special instance.</Description>\\n    <TemplateFormat>YAML</TemplateFormat>\\n    <UpdatedDate>2020-05-19T06:05:41Z</UpdatedDate>\\n    <TemplateVersion>v3</TemplateVersion>\\n</TemplateVersions>\\n<TemplateVersions>\\n    <UpdatedBy>sub:239325550833674852:wb-kxy520087</UpdatedBy>\\n    <Description>Detach the eip from the special instance.</Description>\\n    <TemplateFormat>YAML</TemplateFormat>\\n    <UpdatedDate>2020-05-19T02:48:16Z</UpdatedDate>\\n    <TemplateVersion>v2</TemplateVersion>\\n</TemplateVersions>\\n<TemplateVersions>\\n    <UpdatedBy>sub:239325550833674852:wb-kxy520087</UpdatedBy>\\n    <Description>Detach the eip from the special instance.</Description>\\n    <TemplateFormat>YAML</TemplateFormat>\\n    <UpdatedDate>2020-05-19T02:41:09Z</UpdatedDate>\\n    <TemplateVersion>v1</TemplateVersion>\\n</TemplateVersions>\\n</ListTemplateVersionsResponse>","errorExample":""}]',
            'title' => '查询一个模版的多个版本对象',
            'summary' => '查询一个模版的多个版本对象。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTemplates' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。列出含所填模板名称的所有模板。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MyTemplate',
                    ],
                ],
                [
                    'name' => 'TemplateFormat',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板格式。取值范围：'."\n"
                            .'- **JSON**'."\n"
                            .'- **YAML**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'YAML',
                    ],
                ],
                [
                    'name' => 'ShareType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分享类型。取值范围：'."\n"
                            .'- **Public**'."\n"
                            .'- **Private**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Private',
                    ],
                ],
                [
                    'name' => 'CreatedBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板创建者。'."\n"
                            .'- 对于阿里云官方提供的模板，为**ACS**'."\n"
                            .'- 对于用户个人创建的模板，可填写 **UID** 进行筛选，或填写 **用户名称** 进行筛选',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACS',
                    ],
                ],
                [
                    'name' => 'CreatedDateBefore',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建时间小于等于指定时间的模板。'."\n"
                            ."\n\n"
                            .'格式为：YYYY-MM-DDThh:mm::ssZ',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-05-16T10:26:14Z',
                    ],
                ],
                [
                    'name' => 'CreatedDateAfter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建时间大于等于指定时间的模板。'."\n"
                            ."\n"
                            .'格式为：YYYY-MM-DDThh:mm:ssZ',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-05-16T10:26:14Z',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签键及值，键值对数量限制为1至20。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"k1":"k2","k2":"v2"}',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模版类型如TimerTrigger，EventTrigger，AlarmTrigger，Other。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TimerTrigger',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：10-100。默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对查询结果进行翻页时需要传入的Token值，如有则获取自当前页的返回值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxx',
                    ],
                ],
                [
                    'name' => 'SortField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段。取值范围：'."\n"
                            ."\n"
                            .'- **TotalExecutionCount**（默认值）：总执行次数'."\n"
                            .'- **Popularity**：受欢迎程度'."\n"
                            .'- **TemplateName**：模板名称'."\n"
                            .'- **CreatedDate**：创建时间'."\n"
                            .'- **UpdatedDate**：更新时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Popularity',
                    ],
                ],
                [
                    'name' => 'SortOrder',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序方向。取值范围：'."\n"
                            ."\n"
                            .'- **Ascending**：升序'."\n"
                            .'- **Descending**（默认值）：降序'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Descending',
                    ],
                ],
                [
                    'name' => 'HasTrigger',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否触发',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模版类型：'."\n"
                            .'- Automation：自动化'."\n"
                            .'- State：配置清单'."\n"
                            .'- Package：软件包',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Automation' => 'Automation',
                            'State' => 'State',
                            'Package' => 'Package',
                        ],
                        'example' => 'Automation',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
                    ],
                ],
                [
                    'name' => 'IsFavorite',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否已收藏',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '对查询结果进行翻页时需要传入的Token值，如有则获取自当前页的返回值。',
                                'type' => 'string',
                                'example' => 'xxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BEF54BA-17B6-449F-A219-49ACB157E3',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Templates' => [
                                'description' => '模板元信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Hash' => [
                                            'description' => '模板内容的SHA256',
                                            'type' => 'string',
                                            'example' => '4bc7d7a21b3e003434b9c223f6e6d2578b5ebfeb5be28c1fcf8a8a1b11907bb4',
                                        ],
                                        'UpdatedDate' => [
                                            'description' => '模板更新时间',
                                            'type' => 'string',
                                            'example' => '2019-05-16T10:26:14Z',
                                        ],
                                        'UpdatedBy' => [
                                            'description' => '模板更新者',
                                            'type' => 'string',
                                            'example' => 'root(13092000)',
                                        ],
                                        'TemplateType' => [
                                            'description' => '模版类型',
                                            'type' => 'string',
                                            'example' => 'private',
                                        ],
                                        'Tags' => [
                                            'description' => '标签键及值，键值对数量限制为1至20。',
                                            'type' => 'object',
                                            'example' => '{"k1":"v1","k2":"v2"}',
                                        ],
                                        'TemplateName' => [
                                            'description' => '模板名称',
                                            'type' => 'string',
                                            'example' => 'MyTemplate',
                                        ],
                                        'TemplateVersion' => [
                                            'description' => '模板版本。以“v”+数字的形式，数字从1开始。',
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                        'TemplateFormat' => [
                                            'description' => '模板格式。系统字段判断，为JSON或YAML。',
                                            'type' => 'string',
                                            'example' => 'JSON',
                                        ],
                                        'Popularity' => [
                                            'description' => '公共模板受欢迎程度。范围是**1-10**，数字越高表示越受欢迎。若**ShareType**为**Private**，该字段值为`-1`。'."\n"
                                                ."\n"
                                                .'> 该字段在**ShareType**为**Public**时有意义。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '8',
                                        ],
                                        'TotalExecutionCount' => [
                                            'description' => '私有模板总执行次数。若**ShareType**为**Public**，该字段值为`-1`。'."\n"
                                                ."\n"
                                                .'> 该字段在**ShareType**为**Private**时有意义。'."\n",
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'Description' => [
                                            'description' => '模板说明',
                                            'type' => 'string',
                                            'example' => 'Describe instances of given status',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID',
                                            'type' => 'string',
                                            'example' => 'rg-acfmxsn4m4******',
                                        ],
                                        'CreatedBy' => [
                                            'description' => '模板创建者',
                                            'type' => 'string',
                                            'example' => 'root(1309200)',
                                        ],
                                        'CreatedDate' => [
                                            'description' => '模板创建时间',
                                            'type' => 'string',
                                            'example' => '2019-05-16T10:26:14Z',
                                        ],
                                        'Category' => [
                                            'description' => '模版类型',
                                            'type' => 'string',
                                            'example' => 'TimerTrigger',
                                        ],
                                        'HasTrigger' => [
                                            'description' => '是否成功触发',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'TemplateId' => [
                                            'description' => '模板ID',
                                            'type' => 'string',
                                            'example' => 't-94753deed38',
                                        ],
                                        'ShareType' => [
                                            'description' => '模板共享类型。目前用户创建的模板的共享类型均为 **Private**。取值范围：'."\n"
                                                ."\n"
                                                .'- **Public**'."\n"
                                                .'- **Private**',
                                            'type' => 'string',
                                            'example' => 'Public',
                                        ],
                                        'IsFavorite' => [
                                            'description' => '是否已收藏',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Publisher' => [
                                            'description' => '发布者',
                                            'type' => 'string',
                                            'example' => 'aliyun',
                                        ],
                                        'Constraints' => [
                                            'description' => '约束条件',
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'  "InstanceTypeFamilies": ["ecs.g8y", "ecs.c8y"],'."\n"
                                                .'  "ImageTypes": ["system"],'."\n"
                                                .'  "OSPlatforms": ["CentOS", "Ubuntu"],'."\n"
                                                .'  "OSVersions": ["CentOS7.9 64bit"]'."\n"
                                                .'}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"xxx\\",\\n  \\"RequestId\\": \\"BEF54BA-17B6-449F-A219-49ACB157E3\\",\\n  \\"MaxResults\\": 50,\\n  \\"Templates\\": [\\n    {\\n      \\"Hash\\": \\"4bc7d7a21b3e003434b9c223f6e6d2578b5ebfeb5be28c1fcf8a8a1b11907bb4\\",\\n      \\"UpdatedDate\\": \\"2019-05-16T10:26:14Z\\",\\n      \\"UpdatedBy\\": \\"root(13092000)\\",\\n      \\"TemplateType\\": \\"private\\",\\n      \\"Tags\\": {\\n        \\"k1\\": \\"v1\\",\\n        \\"k2\\": \\"v2\\"\\n      },\\n      \\"TemplateName\\": \\"MyTemplate\\",\\n      \\"TemplateVersion\\": \\"v1\\",\\n      \\"TemplateFormat\\": \\"JSON\\",\\n      \\"Popularity\\": 8,\\n      \\"TotalExecutionCount\\": 5,\\n      \\"Description\\": \\"Describe instances of given status\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n      \\"CreatedBy\\": \\"root(1309200)\\",\\n      \\"CreatedDate\\": \\"2019-05-16T10:26:14Z\\",\\n      \\"Category\\": \\"TimerTrigger\\",\\n      \\"HasTrigger\\": true,\\n      \\"TemplateId\\": \\"t-94753deed38\\",\\n      \\"ShareType\\": \\"Public\\",\\n      \\"IsFavorite\\": true,\\n      \\"Publisher\\": \\"aliyun\\",\\n      \\"Constraints\\": \\"{\\\\n  \\\\\\"InstanceTypeFamilies\\\\\\": [\\\\\\"ecs.g8y\\\\\\", \\\\\\"ecs.c8y\\\\\\"],\\\\n  \\\\\\"ImageTypes\\\\\\": [\\\\\\"system\\\\\\"],\\\\n  \\\\\\"OSPlatforms\\\\\\": [\\\\\\"CentOS\\\\\\", \\\\\\"Ubuntu\\\\\\"],\\\\n  \\\\\\"OSVersions\\\\\\": [\\\\\\"CentOS7.9 64bit\\\\\\"]\\\\n}\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTemplatesResponse>\\n    <NextToken>xxx</NextToken>\\n    <RequestId>BEF54BA-17B6-449F-A219-49ACB157E3</RequestId>\\n    <MaxResults>50</MaxResults>\\n    <Templates>\\n        <Hash>4bc7d7a21b3e003434b9c223f6e6d2578b5ebfeb5be28c1fcf8a8a1b11907bb4</Hash>\\n        <UpdatedDate>2019-05-16T10:26:14Z</UpdatedDate>\\n        <UpdatedBy>root(13092000)</UpdatedBy>\\n        <TemplateType>private</TemplateType>\\n        <TemplateName>MyTemplate</TemplateName>\\n        <TemplateVersion>v1</TemplateVersion>\\n        <TemplateFormat>JSON</TemplateFormat>\\n        <Popularity>8</Popularity>\\n        <TotalExecutionCount>5</TotalExecutionCount>\\n        <Description>Describe instances of given status</Description>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <CreatedBy>root(1309200)</CreatedBy>\\n        <CreatedDate>2019-05-16T10:26:14Z</CreatedDate>\\n        <Category>TimerTrigger</Category>\\n        <HasTrigger>true</HasTrigger>\\n        <TemplateId>t-94753deed38</TemplateId>\\n        <ShareType>Public</ShareType>\\n    </Templates>\\n</ListTemplatesResponse>","errorExample":""}]',
            'title' => '查询模板',
            'summary' => '支持多种过滤方式。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetTemplate' => [
            'path' => '/GetTemplate',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。内容限制为字母、数字、中划线、下划线，长度200字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyTemplate',
                    ],
                ],
                [
                    'name' => 'TemplateVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板版本。格式：**“v”+数字**。取值范围：**v1-v200**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Content' => [
                                'description' => '模板内容',
                                'type' => 'string',
                                'example' => '"FormatVersion: OOS-2019-06-01\\nDescription:\\n  en:  Creates an ECS image\\n  zh-cn: 创建一个ECS镜像\\n  name-en: Create Image\\n  name-zh-cn: 创建镜像\\n  categories:\\n    - image_manage\\n    - application_manage\\nParameters:\\n  regionId:\\n    Type: String\\n    Label:\\n      en: RegionId\\n      zh-cn: 地域ID\\n    AssociationProperty: RegionId\\n    Default: \'{{ ACS::RegionId }}\'\\n  instanceId:\\n    Label:\\n      en: InstanceId\\n      zh-cn: ECS实例ID\\n    Type: String\\n    AssociationProperty: ALIYUN::ECS::Instance::InstanceId\\n    AssociationPropertyMetadata:\\n      RegionId: regionId\\n  imageName:\\n    Label:\\n      en: ImageName\\n      zh-cn: 新镜像的名称\\n    Type: String\\n    Description:\\n      en: <p class=\\"p\\">Note:</p> <ul class=\\"ul\\"> <li class=\\"li\\">Length is 2~128 English or Chinese characters</li> <li class=\\"li\\"><font color=\'red\'>must start with big or small letters or Chinese, not http:// and https://. </font></li> <li class=\\"li\\">Can contain numbers, colons (:), underscores (_), or dashes (-). </li> </ul>\\n      zh-cn: <p class=\\"p\\">注意：</p> <ul class=\\"ul\\"> <li class=\\"li\\">长度为2~128个英文或中文字符</li> <li class=\\"li\\"><font color=\'red\'>必须以大小字母或中文开头，不能以http://和https://开头。</font></li> <li class=\\"li\\">可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。</li> </ul>\\n  tags:\\n    Label:\\n      en: Tags\\n      zh-cn: 镜像标签\\n    Type: Json\\n    AssociationProperty: Tags\\n    AssociationPropertyMetadata:\\n      ShowSystem: false\\n    Default: []\\n  OOSAssumeRole:\\n    Label:\\n      en: OOSAssumeRole\\n      zh-cn: OOS扮演的RAM角色\\n    Type: String\\n    Default: OOSServiceRole\\nRamRole: \'{{ OOSAssumeRole }}\'\\nTasks:\\n- Name: createImage\\n  Action: ACS::ECS::CreateImage\\n  Description:\\n    en: Create new image with the specified image name and instance ID\\n    zh-cn: 通过指定实例ID和镜像名称创建新的镜像\\n  Properties:\\n    regionId: \'{{ regionId }}\'\\n    imageName: \'{{ imageName }}__on_{{ ACS::ExecutionId }}_at_{{ Acs::CurrentDate }}\'\\n    instanceId: \'{{ instanceId }}\'\\n    tags: \'{{tags}}\'\\n  Outputs:\\n    imageId:\\n      ValueSelector: imageId\\n      Type: String\\nOutputs:\\n  imageId:\\n    Type: String\\n    Value: \'{{ createImage.imageId }}\'\\nMetadata:\\n  ALIYUN::OOS::Interface:\\n    ParameterGroups:\\n      - Parameters:\\n          - regionId\\n          - instanceId\\n        Label:\\n          default:\\n            zh-cn: 选择实例\\n            en: Select Ecs Instances\\n      - Parameters:\\n          - imageName\\n          - tags\\n        Label:\\n          default:\\n            zh-cn: 镜像设置\\n            en: Image Configure\\n      - Parameters:\\n          - OOSAssumeRole\\n        Label:\\n          default:\\n            zh-cn: 高级选项\\n            en: Control Options"',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '5BBE2663-A18E-5261-9BBB-F4832F5294D9',
                            ],
                            'Template' => [
                                'description' => '模板元信息',
                                'type' => 'object',
                                'properties' => [
                                    'Hash' => [
                                        'description' => '模板内容的SHA256',
                                        'type' => 'string',
                                        'example' => '40fb5e3e08ef6c8a499ff7cd8441194f518028ad08338a84cb70c023a64576f1',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '模板更新时间',
                                        'type' => 'string',
                                        'example' => '2022-04-26T08:37:07Z',
                                    ],
                                    'UpdatedBy' => [
                                        'description' => '模板更新者',
                                        'type' => 'string',
                                        'example' => 'ACS',
                                    ],
                                    'TemplateType' => [
                                        'description' => '模板类型',
                                        'type' => 'string',
                                        'example' => 'Automation',
                                    ],
                                    'Tags' => [
                                        'description' => '标签键及值，键值对数量限制为1至20。',
                                        'type' => 'object',
                                        'example' => '{"k1":"k2","k2":"v2"}',
                                    ],
                                    'TemplateName' => [
                                        'description' => '模板名称',
                                        'type' => 'string',
                                        'example' => 'ACS-ECS-CreateImage',
                                    ],
                                    'TemplateVersion' => [
                                        'description' => '模板版本。以“v”+数字的形式，数字从1开始。',
                                        'type' => 'string',
                                        'example' => 'v15',
                                    ],
                                    'TemplateFormat' => [
                                        'description' => '模板格式。系统字段判断，为JSON或YAML。',
                                        'type' => 'string',
                                        'example' => 'YAML',
                                    ],
                                    'Description' => [
                                        'description' => '模板描述',
                                        'type' => 'string',
                                        'example' => '"{\\"en\\": \\"Creates an ECS image\\", \\"zh-cn\\": \\"创建一个ECS镜像\\", \\"name-en\\": \\"Create Image\\", \\"name-zh-cn\\": \\"创建镜像\\", \\"categories\\": [\\"image_manage\\", \\"application_manage\\"]}"',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID',
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m4******',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '模板创建者',
                                        'type' => 'string',
                                        'example' => 'ACS',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '模板创建时间',
                                        'type' => 'string',
                                        'example' => '2019-05-16T10:26:14Z',
                                    ],
                                    'VersionName' => [
                                        'description' => '版本名称',
                                        'type' => 'string',
                                        'example' => 'version15',
                                    ],
                                    'TemplateId' => [
                                        'description' => '模板ID',
                                        'type' => 'string',
                                        'example' => 't-4bdb1745c171401883a2',
                                    ],
                                    'HasTrigger' => [
                                        'description' => '是否含有触发器',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'ShareType' => [
                                        'description' => '模板共享类型。目前用户创建的模板的共享类型均为 Private。',
                                        'type' => 'string',
                                        'example' => 'Public',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Content\\": \\"\\\\\\"FormatVersion: OOS-2019-06-01\\\\\\\\nDescription:\\\\\\\\n  en:  Creates an ECS image\\\\\\\\n  zh-cn: 创建一个ECS镜像\\\\\\\\n  name-en: Create Image\\\\\\\\n  name-zh-cn: 创建镜像\\\\\\\\n  categories:\\\\\\\\n    - image_manage\\\\\\\\n    - application_manage\\\\\\\\nParameters:\\\\\\\\n  regionId:\\\\\\\\n    Type: String\\\\\\\\n    Label:\\\\\\\\n      en: RegionId\\\\\\\\n      zh-cn: 地域ID\\\\\\\\n    AssociationProperty: RegionId\\\\\\\\n    Default: \'{{ ACS::RegionId }}\'\\\\\\\\n  instanceId:\\\\\\\\n    Label:\\\\\\\\n      en: InstanceId\\\\\\\\n      zh-cn: ECS实例ID\\\\\\\\n    Type: String\\\\\\\\n    AssociationProperty: ALIYUN::ECS::Instance::InstanceId\\\\\\\\n    AssociationPropertyMetadata:\\\\\\\\n      RegionId: regionId\\\\\\\\n  imageName:\\\\\\\\n    Label:\\\\\\\\n      en: ImageName\\\\\\\\n      zh-cn: 新镜像的名称\\\\\\\\n    Type: String\\\\\\\\n    Description:\\\\\\\\n      en: <p class=\\\\\\\\\\\\\\"p\\\\\\\\\\\\\\">Note:</p> <ul class=\\\\\\\\\\\\\\"ul\\\\\\\\\\\\\\"> <li class=\\\\\\\\\\\\\\"li\\\\\\\\\\\\\\">Length is 2~128 English or Chinese characters</li> <li class=\\\\\\\\\\\\\\"li\\\\\\\\\\\\\\"><font color=\'red\'>must start with big or small letters or Chinese, not http:// and https://. </font></li> <li class=\\\\\\\\\\\\\\"li\\\\\\\\\\\\\\">Can contain numbers, colons (:), underscores (_), or dashes (-). </li> </ul>\\\\\\\\n      zh-cn: <p class=\\\\\\\\\\\\\\"p\\\\\\\\\\\\\\">注意：</p> <ul class=\\\\\\\\\\\\\\"ul\\\\\\\\\\\\\\"> <li class=\\\\\\\\\\\\\\"li\\\\\\\\\\\\\\">长度为2~128个英文或中文字符</li> <li class=\\\\\\\\\\\\\\"li\\\\\\\\\\\\\\"><font color=\'red\'>必须以大小字母或中文开头，不能以http://和https://开头。</font></li> <li class=\\\\\\\\\\\\\\"li\\\\\\\\\\\\\\">可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。</li> </ul>\\\\\\\\n  tags:\\\\\\\\n    Label:\\\\\\\\n      en: Tags\\\\\\\\n      zh-cn: 镜像标签\\\\\\\\n    Type: Json\\\\\\\\n    AssociationProperty: Tags\\\\\\\\n    AssociationPropertyMetadata:\\\\\\\\n      ShowSystem: false\\\\\\\\n    Default: []\\\\\\\\n  OOSAssumeRole:\\\\\\\\n    Label:\\\\\\\\n      en: OOSAssumeRole\\\\\\\\n      zh-cn: OOS扮演的RAM角色\\\\\\\\n    Type: String\\\\\\\\n    Default: OOSServiceRole\\\\\\\\nRamRole: \'{{ OOSAssumeRole }}\'\\\\\\\\nTasks:\\\\\\\\n- Name: createImage\\\\\\\\n  Action: ACS::ECS::CreateImage\\\\\\\\n  Description:\\\\\\\\n    en: Create new image with the specified image name and instance ID\\\\\\\\n    zh-cn: 通过指定实例ID和镜像名称创建新的镜像\\\\\\\\n  Properties:\\\\\\\\n    regionId: \'{{ regionId }}\'\\\\\\\\n    imageName: \'{{ imageName }}__on_{{ ACS::ExecutionId }}_at_{{ Acs::CurrentDate }}\'\\\\\\\\n    instanceId: \'{{ instanceId }}\'\\\\\\\\n    tags: \'{{tags}}\'\\\\\\\\n  Outputs:\\\\\\\\n    imageId:\\\\\\\\n      ValueSelector: imageId\\\\\\\\n      Type: String\\\\\\\\nOutputs:\\\\\\\\n  imageId:\\\\\\\\n    Type: String\\\\\\\\n    Value: \'{{ createImage.imageId }}\'\\\\\\\\nMetadata:\\\\\\\\n  ALIYUN::OOS::Interface:\\\\\\\\n    ParameterGroups:\\\\\\\\n      - Parameters:\\\\\\\\n          - regionId\\\\\\\\n          - instanceId\\\\\\\\n        Label:\\\\\\\\n          default:\\\\\\\\n            zh-cn: 选择实例\\\\\\\\n            en: Select Ecs Instances\\\\\\\\n      - Parameters:\\\\\\\\n          - imageName\\\\\\\\n          - tags\\\\\\\\n        Label:\\\\\\\\n          default:\\\\\\\\n            zh-cn: 镜像设置\\\\\\\\n            en: Image Configure\\\\\\\\n      - Parameters:\\\\\\\\n          - OOSAssumeRole\\\\\\\\n        Label:\\\\\\\\n          default:\\\\\\\\n            zh-cn: 高级选项\\\\\\\\n            en: Control Options\\\\\\"\\",\\n  \\"RequestId\\": \\"5BBE2663-A18E-5261-9BBB-F4832F5294D9\\",\\n  \\"Template\\": {\\n    \\"Hash\\": \\"40fb5e3e08ef6c8a499ff7cd8441194f518028ad08338a84cb70c023a64576f1\\",\\n    \\"UpdatedDate\\": \\"2022-04-26T08:37:07Z\\",\\n    \\"UpdatedBy\\": \\"ACS\\",\\n    \\"TemplateType\\": \\"Automation\\",\\n    \\"Tags\\": {\\n      \\"k1\\": \\"k2\\",\\n      \\"k2\\": \\"v2\\"\\n    },\\n    \\"TemplateName\\": \\"ACS-ECS-CreateImage\\",\\n    \\"TemplateVersion\\": \\"v15\\",\\n    \\"TemplateFormat\\": \\"YAML\\",\\n    \\"Description\\": \\"\\\\\\"{\\\\\\\\\\\\\\"en\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Creates an ECS image\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"zh-cn\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"创建一个ECS镜像\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"name-en\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Create Image\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"name-zh-cn\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"创建镜像\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"categories\\\\\\\\\\\\\\": [\\\\\\\\\\\\\\"image_manage\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"application_manage\\\\\\\\\\\\\\"]}\\\\\\"\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n    \\"CreatedBy\\": \\"ACS\\",\\n    \\"CreatedDate\\": \\"2019-05-16T10:26:14Z\\",\\n    \\"VersionName\\": \\"version15\\",\\n    \\"TemplateId\\": \\"t-4bdb1745c171401883a2\\",\\n    \\"HasTrigger\\": false,\\n    \\"ShareType\\": \\"Public\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTemplateResponse>\\n    <Content>\\"FormatVersion: OOS-2019-06-01\\\\nDescription:\\\\n  en:  Creates an ECS image\\\\n  zh-cn: 创建一个ECS镜像\\\\n  name-en: Create Image\\\\n  name-zh-cn: 创建镜像\\\\n  categories:\\\\n    - image_manage\\\\n    - application_manage\\\\nParameters:\\\\n  regionId:\\\\n    Type: String\\\\n    Label:\\\\n      en: RegionId\\\\n      zh-cn: 地域ID\\\\n    AssociationProperty: RegionId\\\\n    Default: \'{{ ACS::RegionId }}\'\\\\n  instanceId:\\\\n    Label:\\\\n      en: InstanceId\\\\n      zh-cn: ECS实例ID\\\\n    Type: String\\\\n    AssociationProperty: ALIYUN::ECS::Instance::InstanceId\\\\n    AssociationPropertyMetadata:\\\\n      RegionId: regionId\\\\n  imageName:\\\\n    Label:\\\\n      en: ImageName\\\\n      zh-cn: 新镜像的名称\\\\n    Type: String\\\\n    Description:\\\\n      en: &lt;p class=\\\\\\"p\\\\\\"&gt;Note:&lt;/p&gt; &lt;ul class=\\\\\\"ul\\\\\\"&gt; &lt;li class=\\\\\\"li\\\\\\"&gt;Length is 2~128 English or Chinese characters&lt;/li&gt; &lt;li class=\\\\\\"li\\\\\\"&gt;&lt;font color=\'red\'&gt;must start with big or small letters or Chinese, not http:// and https://. &lt;/font&gt;&lt;/li&gt; &lt;li class=\\\\\\"li\\\\\\"&gt;Can contain numbers, colons (:), underscores (_), or dashes (-). &lt;/li&gt; &lt;/ul&gt;\\\\n      zh-cn: &lt;p class=\\\\\\"p\\\\\\"&gt;注意：&lt;/p&gt; &lt;ul class=\\\\\\"ul\\\\\\"&gt; &lt;li class=\\\\\\"li\\\\\\"&gt;长度为2~128个英文或中文字符&lt;/li&gt; &lt;li class=\\\\\\"li\\\\\\"&gt;&lt;font color=\'red\'&gt;必须以大小字母或中文开头，不能以http://和https://开头。&lt;/font&gt;&lt;/li&gt; &lt;li class=\\\\\\"li\\\\\\"&gt;可以包含数字、半角冒号（:）、下划线（_）或者短划线（-）。&lt;/li&gt; &lt;/ul&gt;\\\\n  tags:\\\\n    Label:\\\\n      en: Tags\\\\n      zh-cn: 镜像标签\\\\n    Type: Json\\\\n    AssociationProperty: Tags\\\\n    AssociationPropertyMetadata:\\\\n      ShowSystem: false\\\\n    Default: []\\\\n  OOSAssumeRole:\\\\n    Label:\\\\n      en: OOSAssumeRole\\\\n      zh-cn: OOS扮演的RAM角色\\\\n    Type: String\\\\n    Default: OOSServiceRole\\\\nRamRole: \'{{ OOSAssumeRole }}\'\\\\nTasks:\\\\n- Name: createImage\\\\n  Action: ACS::ECS::CreateImage\\\\n  Description:\\\\n    en: Create new image with the specified image name and instance ID\\\\n    zh-cn: 通过指定实例ID和镜像名称创建新的镜像\\\\n  Properties:\\\\n    regionId: \'{{ regionId }}\'\\\\n    imageName: \'{{ imageName }}__on_{{ ACS::ExecutionId }}_at_{{ Acs::CurrentDate }}\'\\\\n    instanceId: \'{{ instanceId }}\'\\\\n    tags: \'{{tags}}\'\\\\n  Outputs:\\\\n    imageId:\\\\n      ValueSelector: imageId\\\\n      Type: String\\\\nOutputs:\\\\n  imageId:\\\\n    Type: String\\\\n    Value: \'{{ createImage.imageId }}\'\\\\nMetadata:\\\\n  ALIYUN::OOS::Interface:\\\\n    ParameterGroups:\\\\n      - Parameters:\\\\n          - regionId\\\\n          - instanceId\\\\n        Label:\\\\n          default:\\\\n            zh-cn: 选择实例\\\\n            en: Select Ecs Instances\\\\n      - Parameters:\\\\n          - imageName\\\\n          - tags\\\\n        Label:\\\\n          default:\\\\n            zh-cn: 镜像设置\\\\n            en: Image Configure\\\\n      - Parameters:\\\\n          - OOSAssumeRole\\\\n        Label:\\\\n          default:\\\\n            zh-cn: 高级选项\\\\n            en: Control Options\\"</Content>\\n    <RequestId>5BBE2663-A18E-5261-9BBB-F4832F5294D9</RequestId>\\n    <Template>\\n        <Hash>40fb5e3e08ef6c8a499ff7cd8441194f518028ad08338a84cb70c023a64576f1</Hash>\\n        <UpdatedDate>2022-04-26T08:37:07Z</UpdatedDate>\\n        <UpdatedBy>ACS</UpdatedBy>\\n        <TemplateType>Automation</TemplateType>\\n        <TemplateName>ACS-ECS-CreateImage</TemplateName>\\n        <TemplateVersion>v15</TemplateVersion>\\n        <TemplateFormat>YAML</TemplateFormat>\\n        <Description>\\"{\\\\\\"en\\\\\\": \\\\\\"Creates an ECS image\\\\\\", \\\\\\"zh-cn\\\\\\": \\\\\\"创建一个ECS镜像\\\\\\", \\\\\\"name-en\\\\\\": \\\\\\"Create Image\\\\\\", \\\\\\"name-zh-cn\\\\\\": \\\\\\"创建镜像\\\\\\", \\\\\\"categories\\\\\\": [\\\\\\"image_manage\\\\\\", \\\\\\"application_manage\\\\\\"]}\\"</Description>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <CreatedBy>ACS</CreatedBy>\\n        <CreatedDate>2019-05-16T10:26:14Z</CreatedDate>\\n        <VersionName>version15</VersionName>\\n        <TemplateId>t-4bdb1745c171401883a2</TemplateId>\\n        <HasTrigger>false</HasTrigger>\\n        <ShareType>Public</ShareType>\\n    </Template>\\n</GetTemplateResponse>","errorExample":""}]',
            'title' => '获取模版',
            'summary' => '获取一个模版，包括内容。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListExecutionRiskyTasks' => [
            'path' => '/ListExecutionRiskyTasks',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'myTemplate',
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
                                'example' => 'C04B668D-D2DD-4B40-B6E9-0E3C4F53D5B5',
                            ],
                            'RiskyTasks' => [
                                'description' => '风险任务',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Service' => [
                                            'description' => '风险API所属云产品',
                                            'type' => 'string',
                                            'example' => 'ECS',
                                        ],
                                        'API' => [
                                            'description' => '风险API名称',
                                            'type' => 'string',
                                            'example' => 'DeleteInstance',
                                        ],
                                        'Task' => [
                                            'description' => '风险API所在任务列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '风险API所在任务',
                                                'type' => 'string',
                                                'example' => 'parenttask1',
                                            ],
                                        ],
                                        'Template' => [
                                            'description' => '风险任务所在模版列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '风险任务所在模版',
                                                'type' => 'string',
                                                'example' => 'deleteInstanceTask1',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C04B668D-D2DD-4B40-B6E9-0E3C4F53D5B5\\",\\n  \\"RiskyTasks\\": [\\n    {\\n      \\"Service\\": \\"ECS\\",\\n      \\"API\\": \\"DeleteInstance\\",\\n      \\"Task\\": [\\n        \\"parenttask1\\"\\n      ],\\n      \\"Template\\": [\\n        \\"deleteInstanceTask1\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListExecutionRiskyTasksResponse>\\r\\n    <RequestId>C04B668D-D2DD-4B40-B6E9-0E3C4F53D5B5</RequestId>\\r\\n    <RiskyTasks>\\r\\n        <Task>parenttask1</Task>\\r\\n        <Task>childtask2</Task>\\r\\n        <Template>root template name</Template>\\r\\n        <Service>ECS</Service>\\r\\n        <API>DeleteInstance</API>\\r\\n    </RiskyTasks>\\r\\n    <RiskyTasks>\\r\\n        <Task>task3</Task>\\r\\n        <Template>root template name</Template>\\r\\n        <Service>SLB</Service>\\r\\n        <API>RemoveBackendServers</API>\\r\\n    </RiskyTasks>\\r\\n</ListExecutionRiskyTasksResponse>","errorExample":""}]',
            'title' => '获取模版中的高风险任务',
            'summary' => '获取模版中的高风险任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ValidateTemplateContent' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板内容',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{"FormatVersion": "OOS-2019-06-01", "Description": "Describe instances of given status", "Parameters": {"Status": {"Type": "String", "Description": "(Required) The status of the Ecs instance."}}, "Tasks": [{"Properties": {"Parameters": {"Status": "{{ Status }}"}, "API": "DescribeInstances", "Service": "Ecs"}, "Name": "foo", "Action": "ACS::ExecuteApi"}]}',
                    ],
                ],
                [
                    'name' => 'TemplateURL',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云对象存储OSS中存放OOS模板内容的URL（只支持公共读的URL）。用户传入此字段可直接根据行TemplateURL中存储的模板内容创建执行任务，无需提前创建模板再创建执行任务（当用户选择已有的Template创建执行任务时不需传入此字段）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http:/oos-template.cn-hangzhou.oss.aliyun-inc.com/oos-template.json',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Outputs' => [
                                'description' => '模板输出。',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D5EE9591-1F2D-573E-8751-7F08BBB388D4',
                            ],
                            'Parameters' => [
                                'description' => '模板参数。',
                                'type' => 'string',
                                'example' => '{ "Status": { "Description": "(Required) The status of the Ecs instance.", "Type": "String" } }',
                            ],
                            'RamRole' => [
                                'description' => 'RAM角色',
                                'type' => 'string',
                                'example' => 'OOSServiceRole',
                            ],
                            'Tasks' => [
                                'description' => '模板中定义的任务。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Outputs' => [
                                            'description' => '任务输出。',
                                            'type' => 'string',
                                            'example' => '.instanceId',
                                        ],
                                        'Type' => [
                                            'description' => '动作类型。',
                                            'type' => 'string',
                                            'example' => 'ACS::ExecuteAPI',
                                        ],
                                        'Description' => [
                                            'description' => '任务描述。',
                                            'type' => 'string',
                                            'example' => '(Required) The status of the Ecs instance.',
                                        ],
                                        'Name' => [
                                            'description' => '任务名称。',
                                            'type' => 'string',
                                            'example' => 'foo',
                                        ],
                                        'Properties' => [
                                            'description' => '任务属性。',
                                            'type' => 'string',
                                            'example' => '{"API": "DescribeInstances","Parameters": {"Status": "{{ Status }}"},"Service": "Ecs"}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Outputs\\": \\"{}\\",\\n  \\"RequestId\\": \\"D5EE9591-1F2D-573E-8751-7F08BBB388D4\\",\\n  \\"Parameters\\": \\"{ \\\\\\"Status\\\\\\": { \\\\\\"Description\\\\\\": \\\\\\"(Required) The status of the Ecs instance.\\\\\\", \\\\\\"Type\\\\\\": \\\\\\"String\\\\\\" } }\\",\\n  \\"RamRole\\": \\"OOSServiceRole\\",\\n  \\"Tasks\\": [\\n    {\\n      \\"Outputs\\": \\".instanceId\\",\\n      \\"Type\\": \\"ACS::ExecuteAPI\\",\\n      \\"Description\\": \\"(Required) The status of the Ecs instance.\\",\\n      \\"Name\\": \\"foo\\",\\n      \\"Properties\\": \\"{\\\\\\"API\\\\\\": \\\\\\"DescribeInstances\\\\\\",\\\\\\"Parameters\\\\\\": {\\\\\\"Status\\\\\\": \\\\\\"{{ Status }}\\\\\\"},\\\\\\"Service\\\\\\": \\\\\\"Ecs\\\\\\"}\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '校验一个模版是否合法',
            'summary' => '校验一个模版是否合法。',
        ],
        'DeleteExecutions' => [
            'path' => '/DeleteExecutions',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ExecutionIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行ID（列表）。'."\n"
                            ."\n"
                            .'可以由多个ID组成一个JSON数组，格式为`["xxxxxxxxx", "yyyyyyyyy", … "zzzzzzzzz"]`，最多支持100个ID，ID之间用半角逗号（,）隔开。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["exec-xxx"]',
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
                                'example' => '491DF8C2-34C9-4679-9DB3-4C0F49B129AC',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"491DF8C2-34C9-4679-9DB3-4C0F49B129AC\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteExecutionsResponse>\\r\\n    <RequestId>491DF8C2-34C9-4679-9DB3-4C0F49B129AC</RequestId>\\r\\n</DeleteExecutionsResponse>","errorExample":""}]',
            'title' => '删除执行',
            'summary' => '删除执行。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StartExecution' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。内容限制为字母、数字、中划线、下划线，长度200字符。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'vmeixme',
                    ],
                ],
                [
                    'name' => 'TemplateVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本号，如不填默认为最新的版本号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行模式。取值：'."\n"
                            .'- Automatic（默认值）：自动执行'."\n"
                            .'- FailurePause：失败暂停'."\n"
                            .'- Debug：单步执行'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Automatic',
                    ],
                ],
                [
                    'name' => 'LoopMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '循环模式。取值：'."\n"
                            .'- Automatic（默认值）：不暂停'."\n"
                            .'- FirstBatchPause：第一批暂停'."\n"
                            .'- EveryBatchPause：每批暂停',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Automatic',
                    ],
                ],
                [
                    'name' => 'ParentExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '父执行ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'exec-xxx',
                    ],
                ],
                [
                    'name' => 'SafetyCheck',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全检查模式。取值：'."\n"
                            ."\n"
                            .'- Skip：此选项表示客户了解风险，无需确认即可执行任何Action，无论什么风险等级。`Mode=Automatic`时有效。'."\n"
                            .'- ConfirmEveryHighRiskAction（默认值）：此选项会要求客户确认每一个高风险的Action。客户通过调用**NotifyExecution**接口进行确认或取消。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Skip',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '由参数集合组成的Json字符串，默认为{}。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"Status":"Running"}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问令牌',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e56767-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '要给执行打的标签',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "k1": "v1",'."\n"
                            .'      "k2": "v2"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要给执行添加的描述信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test execution.',
                    ],
                ],
                [
                    'name' => 'TemplateContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板内容，JSON或YAML格式（同CreateTemplate API 请求参数中的Content字段）。用户传入此字段可直接执行TemplateContent中的任务，而无需提前创建模板再创建执行任务（当用户选择已有的Template创建执行任务时不需传入此字段）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{   "Description": "Example template, describe instances in some status",   "FormatVersion": "OOS-2019-06-01",   "Parameters": {},   "Tasks": [     {       "Name": "describeInstances",       "Action": "ACS::ExecuteAPI",       "Description": "desc-en",       "Properties": {         "Service": "ECS",         "API": "DescribeInstances",         "Parameters": {           "Status": "Running"         }       }     }   ] }',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
                    ],
                ],
                [
                    'name' => 'TemplateURL',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云对象存储OSS中存放OOS模板内容的URL(只支持公共读的URL)。用户传入此字段可直接根据行TemplateURL中存储的模板内容创建执行任务，无需提前创建模板再创建执行任务（当用户选择已有的Template创建执行任务时不需传入此字段）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://oos-template.cn-hangzhou.oss.aliyun-inc.com/oos-test-template.json',
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
                                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
                            ],
                            'Execution' => [
                                'description' => '执行数据',
                                'type' => 'object',
                                'properties' => [
                                    'Outputs' => [
                                        'description' => '执行输出结果',
                                        'type' => 'string',
                                        'example' => '{ "InstanceId":"i-xxx" }',
                                    ],
                                    'Status' => [
                                        'description' => '执行状态',
                                        'type' => 'string',
                                        'example' => 'Success',
                                    ],
                                    'EndDate' => [
                                        'description' => '结束时间',
                                        'type' => 'string',
                                        'example' => '2019-05-16T10:26:14Z',
                                    ],
                                    'ExecutedBy' => [
                                        'description' => '执行模板者',
                                        'type' => 'string',
                                        'example' => 'root(13092080xx12344)',
                                    ],
                                    'IsParent' => [
                                        'description' => '是否包含子任务',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Tags' => [
                                        'description' => '执行的标签',
                                        'type' => 'object',
                                        'example' => '{"k1":"v2","k2":"v2"}',
                                    ],
                                    'StartDate' => [
                                        'description' => '开始时间',
                                        'type' => 'string',
                                        'example' => '2019-05-16T10:26:14Z',
                                    ],
                                    'SafetyCheck' => [
                                        'description' => '安全检查模式',
                                        'type' => 'string',
                                        'example' => 'Skip',
                                    ],
                                    'Mode' => [
                                        'description' => '执行模式',
                                        'type' => 'string',
                                        'example' => 'Automatic',
                                    ],
                                    'TemplateName' => [
                                        'description' => '模板名称',
                                        'type' => 'string',
                                        'example' => 'MyTemplate',
                                    ],
                                    'CreateDate' => [
                                        'description' => '执行创建时间',
                                        'type' => 'string',
                                        'example' => '2019-05-16T10:26:14Z',
                                    ],
                                    'TemplateVersion' => [
                                        'description' => '模板版本号',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                    'ExecutionId' => [
                                        'description' => '执行的唯一标识',
                                        'type' => 'string',
                                        'example' => 'exec-xxxyyy',
                                    ],
                                    'Parameters' => [
                                        'description' => '执行的输入参数',
                                        'type' => 'string',
                                        'example' => '{ "Status":"Running" }',
                                    ],
                                    'Description' => [
                                        'description' => '执行的描述信息',
                                        'type' => 'string',
                                        'example' => 'test execution.',
                                    ],
                                    'Counters' => [
                                        'description' => '执行数',
                                        'type' => 'object',
                                        'example' => '1',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间',
                                        'type' => 'string',
                                        'example' => '2019-05-16T10:26:14Z',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID'."\n",
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m4******',
                                    ],
                                    'ParentExecutionId' => [
                                        'description' => '父执行ID',
                                        'type' => 'string',
                                        'example' => 'exec-xxxx',
                                    ],
                                    'RamRole' => [
                                        'description' => '执行当前模板的角色',
                                        'type' => 'string',
                                        'example' => 'OOSServiceRole',
                                    ],
                                    'TemplateId' => [
                                        'description' => '模板ID',
                                        'type' => 'string',
                                        'example' => 't-1bd341007f',
                                    ],
                                    'StatusMessage' => [
                                        'description' => '状态信息',
                                        'type' => 'string',
                                        'example' => '""',
                                    ],
                                    'LoopMode' => [
                                        'description' => '循环模式',
                                        'type' => 'string',
                                        'example' => 'Automatic',
                                    ],
                                    'CurrentTasks' => [
                                        'description' => '当前正在运行的Tasks',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TaskExecutionId' => [
                                                    'description' => '任务执行ID',
                                                    'type' => 'string',
                                                    'example' => 'exec-dsadasdawq',
                                                ],
                                                'TaskName' => [
                                                    'description' => '任务名称',
                                                    'type' => 'string',
                                                    'example' => 'testTask',
                                                ],
                                                'TaskAction' => [
                                                    'description' => '任务的动作',
                                                    'type' => 'string',
                                                    'example' => 'ACS::TimerTrigger',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\",\\n  \\"Execution\\": {\\n    \\"Outputs\\": \\"{ \\\\\\"InstanceId\\\\\\":\\\\\\"i-xxx\\\\\\" }\\",\\n    \\"Status\\": \\"Success\\",\\n    \\"EndDate\\": \\"2019-05-16T10:26:14Z\\",\\n    \\"ExecutedBy\\": \\"root(13092080xx12344)\\",\\n    \\"IsParent\\": false,\\n    \\"Tags\\": {\\n      \\"k1\\": \\"v2\\",\\n      \\"k2\\": \\"v2\\"\\n    },\\n    \\"StartDate\\": \\"2019-05-16T10:26:14Z\\",\\n    \\"SafetyCheck\\": \\"Skip\\",\\n    \\"Mode\\": \\"Automatic\\",\\n    \\"TemplateName\\": \\"MyTemplate\\",\\n    \\"CreateDate\\": \\"2019-05-16T10:26:14Z\\",\\n    \\"TemplateVersion\\": \\"v1\\",\\n    \\"ExecutionId\\": \\"exec-xxxyyy\\",\\n    \\"Parameters\\": \\"{ \\\\\\"Status\\\\\\":\\\\\\"Running\\\\\\" }\\",\\n    \\"Description\\": \\"test execution.\\",\\n    \\"Counters\\": 1,\\n    \\"UpdateDate\\": \\"2019-05-16T10:26:14Z\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n    \\"ParentExecutionId\\": \\"exec-xxxx\\",\\n    \\"RamRole\\": \\"OOSServiceRole\\",\\n    \\"TemplateId\\": \\"t-1bd341007f\\",\\n    \\"StatusMessage\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"LoopMode\\": \\"Automatic\\",\\n    \\"CurrentTasks\\": [\\n      {\\n        \\"TaskExecutionId\\": \\"exec-dsadasdawq\\",\\n        \\"TaskName\\": \\"testTask\\",\\n        \\"TaskAction\\": \\"ACS::TimerTrigger\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<StartExecutionResponse>\\n    <RequestId>14A07460-EBE7-47CA-9757-12CC4761D47A</RequestId>\\n    <Execution>\\n        <Outputs>{ \\"InstanceId\\":\\"i-xxx\\" }</Outputs>\\n        <Status>Success</Status>\\n        <EndDate>2019-05-16T10:26:14Z</EndDate>\\n        <ExecutedBy>root(13092080xx12344)</ExecutedBy>\\n        <IsParent>false</IsParent>\\n        <StartDate>2019-05-16T10:26:14Z</StartDate>\\n        <SafetyCheck>Skip</SafetyCheck>\\n        <Mode>Automatic</Mode>\\n        <TemplateName>MyTemplate</TemplateName>\\n        <CreateDate>2019-05-16T10:26:14Z</CreateDate>\\n        <TemplateVersion>v1</TemplateVersion>\\n        <ExecutionId>exec-xxxyyy</ExecutionId>\\n        <Parameters>{ \\"Status\\":\\"Running\\" }</Parameters>\\n        <Description>test execution.</Description>\\n        <UpdateDate>2019-05-16T10:26:14Z</UpdateDate>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <ParentExecutionId>exec-xxxx</ParentExecutionId>\\n        <RamRole>OOSServiceRole</RamRole>\\n        <TemplateId>t-1bd341007f</TemplateId>\\n        <StatusMessage>\\"\\"</StatusMessage>\\n        <LoopMode>Automatic</LoopMode>\\n        <CurrentTasks>\\n            <TaskExecutionId>exec-dsadasdawq</TaskExecutionId>\\n            <TaskName>testTask</TaskName>\\n            <TaskAction>ACS::TimerTrigger</TaskAction>\\n        </CurrentTasks>\\n    </Execution>\\n</StartExecutionResponse>","errorExample":""}]',
            'title' => '启动一个执行',
            'summary' => '启动一个执行。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateExecution' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'exec-c223xxxxxxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数信息',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '{\\"endDate\\": \\"2022-04-13T03:31:20Z\\", \\"Status\\": \\"Stopped\\"}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-42665544****',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Execution description',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"k1": "v1", "k2": "v2"}',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m*****',
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
                                'example' => 'C8345E88-5334-469E-901D-F912C8CB9C55',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C8345E88-5334-469E-901D-F912C8CB9C55\\"\\n}","type":"json"}]',
            'title' => '更新未结束的执行',
            'summary' => '更新未结束的执行。',
        ],
        'GetExecutionTemplate' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'exec-046490ff88f242',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Content' => [
                                'description' => '模板内容',
                                'type' => 'string',
                                'example' => '"{\\n \\"FormatVersion\\": \\"OOS-2019-06-01\\",\\n \\"Parameters\\": {\\n \\"Status\\": {\\n \\"Type\\": \\"String\\",\\n \\"Description\\": \\"(Required) The ID of the ECS instance.\\"\\n }\\n },\\n \\"Tasks\\": [\\n {\\n \\"Name\\": \\"bar\\",\\n \\"Properties\\": {\\n \\"Parameters\\": {\\n \\"Status\\": \\"{{ Status }}\\"\\n },\\n \\"API\\": \\"DescribeInstances\\",\\n \\"Service\\": \\"Ecs\\"\\n },\\n \\"Action\\": \\"acs::ExecuteAPI\\",\\n \\"Outputs\\": {\\n \\"InstanceIds\\", {\\n \\"ValueSelector\\": \\".Instances.Instance[].InstanceId\\",\\n \\"Type\\": \\"List\\"\\n }\\n }\\n }\\n ],\\n \\"Outputs\\": {\\n \\"InstanceIds\\": {\\n \\"Value\\": \\" {{ bar.InstanceIds }} \\",\\n \\"Type\\": \\"List\\"\\n }\\n }\\n}\\n"',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '14A60-EBE7-47CA-9757-12C1D47A',
                            ],
                            'Template' => [
                                'description' => '模板元信息',
                                'type' => 'object',
                                'properties' => [
                                    'Hash' => [
                                        'description' => '模板内容的SHA256',
                                        'type' => 'string',
                                        'example' => '4bc7d7a21b3e003434b9c223f6e6d2578b5ebfeb5be28c1fcf8a8a1b11907bb4',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '模板更新时间',
                                        'type' => 'string',
                                        'example' => '2019-05-16T10:26:14Z',
                                    ],
                                    'UpdatedBy' => [
                                        'description' => '模板更新者',
                                        'type' => 'string',
                                        'example' => 'root(13090000)',
                                    ],
                                    'Tags' => [
                                        'description' => '标签键及值，键值对数量限制为1至20。',
                                        'type' => 'object',
                                        'example' => '{"k1":"k2","k2":"v2"}',
                                    ],
                                    'TemplateName' => [
                                        'description' => '模板名称',
                                        'type' => 'string',
                                        'example' => 'MyTemplate',
                                    ],
                                    'TemplateVersion' => [
                                        'description' => '模板版本。以“v”+数字的形式，数字从1开始。',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                    'TemplateFormat' => [
                                        'description' => '模板格式。系统字段判断，为JSON或YAML。',
                                        'type' => 'string',
                                        'example' => 'JSON',
                                    ],
                                    'Description' => [
                                        'description' => '模板说明',
                                        'type' => 'string',
                                        'example' => 'Descirbe instances of given status',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '模板创建者',
                                        'type' => 'string',
                                        'example' => 'root(13090000)',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '模板创建时间',
                                        'type' => 'string',
                                        'example' => '2019-05-16T10:26:14Z',
                                    ],
                                    'TemplateId' => [
                                        'description' => '模板ID',
                                        'type' => 'string',
                                        'example' => 't-94753d4d828d38',
                                    ],
                                    'ShareType' => [
                                        'description' => '模板共享类型。目前用户创建的模板的共享类型均为 **Private**。',
                                        'type' => 'string',
                                        'example' => 'Private',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Content\\": \\"\\\\\\"{\\\\\\\\n \\\\\\\\\\\\\\"FormatVersion\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"OOS-2019-06-01\\\\\\\\\\\\\\",\\\\\\\\n \\\\\\\\\\\\\\"Parameters\\\\\\\\\\\\\\": {\\\\\\\\n \\\\\\\\\\\\\\"Status\\\\\\\\\\\\\\": {\\\\\\\\n \\\\\\\\\\\\\\"Type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"String\\\\\\\\\\\\\\",\\\\\\\\n \\\\\\\\\\\\\\"Description\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"(Required) The ID of the ECS instance.\\\\\\\\\\\\\\"\\\\\\\\n }\\\\\\\\n },\\\\\\\\n \\\\\\\\\\\\\\"Tasks\\\\\\\\\\\\\\": [\\\\\\\\n {\\\\\\\\n \\\\\\\\\\\\\\"Name\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"bar\\\\\\\\\\\\\\",\\\\\\\\n \\\\\\\\\\\\\\"Properties\\\\\\\\\\\\\\": {\\\\\\\\n \\\\\\\\\\\\\\"Parameters\\\\\\\\\\\\\\": {\\\\\\\\n \\\\\\\\\\\\\\"Status\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"{{ Status }}\\\\\\\\\\\\\\"\\\\\\\\n },\\\\\\\\n \\\\\\\\\\\\\\"API\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"DescribeInstances\\\\\\\\\\\\\\",\\\\\\\\n \\\\\\\\\\\\\\"Service\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Ecs\\\\\\\\\\\\\\"\\\\\\\\n },\\\\\\\\n \\\\\\\\\\\\\\"Action\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"acs::ExecuteAPI\\\\\\\\\\\\\\",\\\\\\\\n \\\\\\\\\\\\\\"Outputs\\\\\\\\\\\\\\": {\\\\\\\\n \\\\\\\\\\\\\\"InstanceIds\\\\\\\\\\\\\\", {\\\\\\\\n \\\\\\\\\\\\\\"ValueSelector\\\\\\\\\\\\\\": \\\\\\\\\\\\\\".Instances.Instance[].InstanceId\\\\\\\\\\\\\\",\\\\\\\\n \\\\\\\\\\\\\\"Type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"List\\\\\\\\\\\\\\"\\\\\\\\n }\\\\\\\\n }\\\\\\\\n }\\\\\\\\n ],\\\\\\\\n \\\\\\\\\\\\\\"Outputs\\\\\\\\\\\\\\": {\\\\\\\\n \\\\\\\\\\\\\\"InstanceIds\\\\\\\\\\\\\\": {\\\\\\\\n \\\\\\\\\\\\\\"Value\\\\\\\\\\\\\\": \\\\\\\\\\\\\\" {{ bar.InstanceIds }} \\\\\\\\\\\\\\",\\\\\\\\n \\\\\\\\\\\\\\"Type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"List\\\\\\\\\\\\\\"\\\\\\\\n }\\\\\\\\n }\\\\\\\\n}\\\\\\\\n\\\\\\"\\",\\n  \\"RequestId\\": \\"14A60-EBE7-47CA-9757-12C1D47A\\",\\n  \\"Template\\": {\\n    \\"Hash\\": \\"4bc7d7a21b3e003434b9c223f6e6d2578b5ebfeb5be28c1fcf8a8a1b11907bb4\\",\\n    \\"UpdatedDate\\": \\"2019-05-16T10:26:14Z\\",\\n    \\"UpdatedBy\\": \\"root(13090000)\\",\\n    \\"Tags\\": {\\n      \\"k1\\": \\"k2\\",\\n      \\"k2\\": \\"v2\\"\\n    },\\n    \\"TemplateName\\": \\"MyTemplate\\",\\n    \\"TemplateVersion\\": \\"v1\\",\\n    \\"TemplateFormat\\": \\"JSON\\",\\n    \\"Description\\": \\"Descirbe instances of given status\\",\\n    \\"CreatedBy\\": \\"root(13090000)\\",\\n    \\"CreatedDate\\": \\"2019-05-16T10:26:14Z\\",\\n    \\"TemplateId\\": \\"t-94753d4d828d38\\",\\n    \\"ShareType\\": \\"Private\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetExecutionTemplateResponse>\\r\\n    <Content>\\r\\n        <FormatVersion>OOS-2019-06-01</FormatVersion>\\r\\n        <Parameters>\\r\\n            <Status>\\r\\n                <Type>String</Type>\\r\\n                <Description>(Required) The ID of the ECS instance.</Description>\\r\\n            </Status>\\r\\n        </Parameters>\\r\\n        <Tasks>\\r\\n            <Name>bar</Name>\\r\\n            <Properties>\\r\\n                <Parameters>\\r\\n                    <Status>{{ Status }}</Status>\\r\\n                </Parameters>\\r\\n                <API>DescribeInstances</API>\\r\\n                <Service>Ecs</Service>\\r\\n            </Properties>\\r\\n            <Action>acs::ExecuteAPI</Action>\\r\\n            <Outputs>\\r\\n                <InstanceIds>\\r\\n                    <ValueSelector>.Instances.Instance[].InstanceId</ValueSelector>\\r\\n                    <Type>List&amp;lt;String&amp;gt;</Type>\\r\\n                </InstanceIds>\\r\\n            </Outputs>\\r\\n        </Tasks>\\r\\n        <Outputs>\\r\\n            <InstanceIds>\\r\\n                <Value> {{ bar.InstanceIds }} </Value>\\r\\n                <Type>List&amp;lt;String&amp;gt;</Type>\\r\\n            </InstanceIds>\\r\\n        </Outputs>\\r\\n    </Content>\\r\\n    <RequestId>FAAFA45-AB65-4049-BFE0-868E1C80AF</RequestId>\\r\\n    <Template>\\r\\n        <CreatedBy>root(13092000)</CreatedBy>\\r\\n        <CreatedDate>2019-05-27T10:32:52Z</CreatedDate>\\r\\n        <UpdatedBy>root(13092000)</UpdatedBy>\\r\\n        <UpdatedDate>2019-05-27T08:46:33Z</UpdatedDate>\\r\\n        <Description/>\\r\\n        <Hash>62eac5c64b9dae5c41e1e8b648baad95f812cab4f9221a5283edb882b5f8d712</Hash>\\r\\n        <ShareType>Private</ShareType>\\r\\n        <TemplateFormat>JSON</TemplateFormat>\\r\\n        <TemplateName>MyTemplate</TemplateName>\\r\\n        <TemplateId>t-94753deea28d38</TemplateId>\\r\\n        <TemplateVersion>v1</TemplateVersion>\\r\\n    </Template>\\r\\n</GetExecutionTemplateResponse>","errorExample":""}]',
            'title' => '获取一个执行所使用的模板',
            'summary' => '获取一个执行所使用的模板，包括内容。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListExecutions' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。名称未包含关系，最终列出包含所填模板名称的所有模板。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MyTemplate',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行状态，取值范围：Running, Started, Success, Failed, Waiting, Cancelled, Pending, Skipped。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                    ],
                ],
                [
                    'name' => 'ExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'exec-xxx',
                    ],
                ],
                [
                    'name' => 'StartDateBefore',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间小于等于指定时间的执行',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-05-16T10:26:14Z',
                    ],
                ],
                [
                    'name' => 'StartDateAfter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间大于等于指定时间的执行',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-05-16T10:26:14Z',
                    ],
                ],
                [
                    'name' => 'EndDateBefore',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间小于等于指定时间的执行',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-05-16T10:26:14Z',
                    ],
                ],
                [
                    'name' => 'EndDateAfter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间大于等于指定时间的执行',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-05-16T10:26:14Z',
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行模式。取值范围：'."\n"
                            .'- **Automatic**'."\n"
                            .'- **Debug**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Automatic',
                    ],
                ],
                [
                    'name' => 'ExecutedBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行者',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vme',
                    ],
                ],
                [
                    'name' => 'ParentExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '父执行ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'exec-xxx',
                    ],
                ],
                [
                    'name' => 'RamRole',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM角色',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OOSServiceRole',
                    ],
                ],
                [
                    'name' => 'IncludeChildExecution',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否包含子执行。默认为False。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行的模版类型。可分为Other、TimerTrigger、EventTrigger、AlarmTrigger。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Other',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '执行的标签',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "k1": "v1",'."\n"
                            .'      "k2": "v2"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：10-100。默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ',
                    ],
                ],
                [
                    'name' => 'SortField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段。取值范围：'."\n"
                            ."\n"
                            .'- **StartDate**（默认值）：创建时间'."\n"
                            .'- **EndDate**：结束时间'."\n"
                            .'- **Status**：状态'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'StartDate',
                    ],
                ],
                [
                    'name' => 'SortOrder',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序方向。取值范围：'."\n"
                            .'- **Ascending**：升序'."\n"
                            .'- **Descending**（默认值）：降序'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Ascending',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ECS资源ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-xxx',
                    ],
                ],
                [
                    'name' => 'ResourceTemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源的模板名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACS-ECS-TEST',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MyDescription',
                    ],
                ],
                [
                    'name' => 'Depth',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行的深度，可分为RootDepth、FirstChildDepth'."\n"
                            .'RootDepth只返回主执行，FirstChildDepth只返回第一层的子执行。此参数和IncludeChildExecution参数只能同时传入一个，推荐使用Depth。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RootDepth',
                    ],
                ],
                [
                    'name' => 'Categories',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行的模板类型列表。可分为Other、TimerTrigger、EventTrigger、AlarmTrigger。此参数和Category参数只能同时传入一个，推荐使用Categories。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["TimerTrigger"、"EventTrigger"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '14A074-47CA-9757-12CC4761D47A',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Executions' => [
                                'description' => '执行数据',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '执行状态。取值范围为Started, Queued, Running, Waiting, Success, Failed, Cancelled。',
                                            'type' => 'string',
                                            'example' => 'Success',
                                        ],
                                        'WaitingStatus' => [
                                            'description' => '等待状态',
                                            'type' => 'string',
                                            'example' => '""',
                                        ],
                                        'Targets' => [
                                            'description' => '目标资源',
                                            'type' => 'string',
                                            'example' => '"{"ResourceType": "ALIYUN::ECS::Instance", "Filters": [{"ResourceIds": ["i-bp14z07dg3464980x72o"], "RegionId": "cn-hangzhou", "Type": "ResourceIds"}]}"',
                                        ],
                                        'StatusReason' => [
                                            'description' => '状态原因',
                                            'type' => 'string',
                                            'example' => '""',
                                        ],
                                        'Tags' => [
                                            'description' => '执行的标签',
                                            'type' => 'object',
                                            'example' => '{}',
                                        ],
                                        'LastSuccessfulTriggerTime' => [
                                            'description' => '最近一次成功触发模板的时间',
                                            'type' => 'string',
                                            'example' => '2019-05-27T09:29:18Z',
                                        ],
                                        'Mode' => [
                                            'description' => '执行模式',
                                            'type' => 'string',
                                            'example' => 'Automatic',
                                        ],
                                        'SafetyCheck' => [
                                            'description' => '安全检查模式。取值范围为Skip, ConfirmEveryHighRiskAction。',
                                            'type' => 'string',
                                            'example' => 'Skip',
                                        ],
                                        'TemplateName' => [
                                            'description' => '模板名称',
                                            'type' => 'string',
                                            'example' => 'MyTemplate',
                                        ],
                                        'TemplateVersion' => [
                                            'description' => '模板版本号',
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                        'CreateDate' => [
                                            'description' => '执行创建时间',
                                            'type' => 'string',
                                            'example' => '2019-05-16T10:26:14Z',
                                        ],
                                        'UpdateDate' => [
                                            'description' => '执行更新时间',
                                            'type' => 'string',
                                            'example' => '2019-05-16T10:26:14Z',
                                        ],
                                        'Description' => [
                                            'description' => '执行描述',
                                            'type' => 'string',
                                            'example' => 'MyDescription',
                                        ],
                                        'LastTriggerTime' => [
                                            'description' => '最近一次触发模板的时间',
                                            'type' => 'string',
                                            'example' => '2019-05-27T09:29:18Z',
                                        ],
                                        'ParentExecutionId' => [
                                            'description' => '父执行ID',
                                            'type' => 'string',
                                            'example' => 'exec-xxx',
                                        ],
                                        'LastTriggerStatus' => [
                                            'description' => '最近一次触发模版后的执行状态',
                                            'type' => 'string',
                                            'example' => 'Success',
                                        ],
                                        'StatusMessage' => [
                                            'description' => '任务执行状态',
                                            'type' => 'string',
                                            'example' => '“”',
                                        ],
                                        'Outputs' => [
                                            'description' => '执行输出结果',
                                            'type' => 'string',
                                            'example' => '{ "InstanceId":"i-xxx" }',
                                        ],
                                        'ExecutedBy' => [
                                            'description' => '执行模板者',
                                            'type' => 'string',
                                            'example' => '1309252800',
                                        ],
                                        'EndDate' => [
                                            'description' => '执行结束时间',
                                            'type' => 'string',
                                            'example' => '2019-05-16T10:26:14Z',
                                        ],
                                        'IsParent' => [
                                            'description' => '标记是否包含子任务',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'StartDate' => [
                                            'description' => '执行开始时间',
                                            'type' => 'string',
                                            'example' => '2019-05-16T10:26:14Z',
                                        ],
                                        'ExecutionId' => [
                                            'description' => '执行的唯一标识',
                                            'type' => 'string',
                                            'example' => 'exec-44d32b45d2a449e',
                                        ],
                                        'Parameters' => [
                                            'description' => '执行的输入参数',
                                            'type' => 'object',
                                            'example' => '{ "Status":"Running" }',
                                        ],
                                        'Counters' => [
                                            'description' => '任务按执行状态计数',
                                            'type' => 'object',
                                            'example' => '{"Failed": 0,"Success": 1,"Total": 2}',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID',
                                            'type' => 'string',
                                            'example' => 'rg-acfmxsn4m4******',
                                        ],
                                        'Category' => [
                                            'description' => '执行的模版类型。可分为Other、TimerTrigger、EventTrigger、AlarmTrigger。',
                                            'type' => 'string',
                                            'example' => 'Other',
                                        ],
                                        'TemplateId' => [
                                            'description' => '模板ID',
                                            'type' => 'string',
                                            'example' => '123',
                                        ],
                                        'RamRole' => [
                                            'description' => '执行当前模板的角色',
                                            'type' => 'string',
                                            'example' => 'OOSServiceRole',
                                        ],
                                        'ResourceStatus' => [
                                            'description' => '资源状态',
                                            'type' => 'string',
                                            'example' => '{ 			"Success": 1 		}',
                                        ],
                                        'CurrentTasks' => [
                                            'description' => '当前正在运行的Tasks',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'TaskExecutionId' => [
                                                        'description' => 'Task执行ID',
                                                        'type' => 'string',
                                                        'example' => 'task-exec-44d32b45d2a49899#1',
                                                    ],
                                                    'TaskName' => [
                                                        'description' => 'Task名称',
                                                        'type' => 'string',
                                                        'example' => 'installSLSILogtail',
                                                    ],
                                                    'TaskAction' => [
                                                        'description' => 'Task执行模板',
                                                        'type' => 'string',
                                                        'example' => 'acs::Template',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'LastTriggerStatusMessage' => [
                                            'description' => '最近一次任务执行状态（定时、事件、告警类执行表示的是最近一次触发的执行状态，非触发类执行此字段与StatusMessage字段内容一致）',
                                            'type' => 'string',
                                            'example' => '""',
                                        ],
                                        'LastTriggerOutputs' => [
                                            'description' => '最近一次执行输出结果（定时、事件、告警类执行表示的是最近一次触发的输出结果，非触发类执行此字段与Outputs字段内容一致）',
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'      "InstanceId": "i-xxx"'."\n"
                                                .'}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ\\",\\n  \\"RequestId\\": \\"14A074-47CA-9757-12CC4761D47A\\",\\n  \\"MaxResults\\": 50,\\n  \\"Executions\\": [\\n    {\\n      \\"Status\\": \\"Success\\",\\n      \\"WaitingStatus\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"Targets\\": \\"\\\\\\"{\\\\\\"ResourceType\\\\\\": \\\\\\"ALIYUN::ECS::Instance\\\\\\", \\\\\\"Filters\\\\\\": [{\\\\\\"ResourceIds\\\\\\": [\\\\\\"i-bp14z07dg3464980x72o\\\\\\"], \\\\\\"RegionId\\\\\\": \\\\\\"cn-hangzhou\\\\\\", \\\\\\"Type\\\\\\": \\\\\\"ResourceIds\\\\\\"}]}\\\\\\"\\",\\n      \\"StatusReason\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"Tags\\": {},\\n      \\"LastSuccessfulTriggerTime\\": \\"2019-05-27T09:29:18Z\\",\\n      \\"Mode\\": \\"Automatic\\",\\n      \\"SafetyCheck\\": \\"Skip\\",\\n      \\"TemplateName\\": \\"MyTemplate\\",\\n      \\"TemplateVersion\\": \\"v1\\",\\n      \\"CreateDate\\": \\"2019-05-16T10:26:14Z\\",\\n      \\"UpdateDate\\": \\"2019-05-16T10:26:14Z\\",\\n      \\"Description\\": \\"MyDescription\\",\\n      \\"LastTriggerTime\\": \\"2019-05-27T09:29:18Z\\",\\n      \\"ParentExecutionId\\": \\"exec-xxx\\",\\n      \\"LastTriggerStatus\\": \\"Success\\",\\n      \\"StatusMessage\\": \\"“”\\",\\n      \\"Outputs\\": \\"{ \\\\\\"InstanceId\\\\\\":\\\\\\"i-xxx\\\\\\" }\\",\\n      \\"ExecutedBy\\": \\"1309252800\\",\\n      \\"EndDate\\": \\"2019-05-16T10:26:14Z\\",\\n      \\"IsParent\\": false,\\n      \\"StartDate\\": \\"2019-05-16T10:26:14Z\\",\\n      \\"ExecutionId\\": \\"exec-44d32b45d2a449e\\",\\n      \\"Parameters\\": {\\n        \\"Status\\": \\"Running\\"\\n      },\\n      \\"Counters\\": {\\n        \\"Failed\\": 0,\\n        \\"Success\\": 1,\\n        \\"Total\\": 2\\n      },\\n      \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n      \\"Category\\": \\"Other\\",\\n      \\"TemplateId\\": \\"123\\",\\n      \\"RamRole\\": \\"OOSServiceRole\\",\\n      \\"ResourceStatus\\": \\"{ \\\\t\\\\t\\\\t\\\\\\"Success\\\\\\": 1 \\\\t\\\\t}\\",\\n      \\"CurrentTasks\\": [\\n        {\\n          \\"TaskExecutionId\\": \\"task-exec-44d32b45d2a49899#1\\",\\n          \\"TaskName\\": \\"installSLSILogtail\\",\\n          \\"TaskAction\\": \\"acs::Template\\"\\n        }\\n      ],\\n      \\"LastTriggerStatusMessage\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"LastTriggerOutputs\\": \\"{\\\\n      \\\\\\"InstanceId\\\\\\": \\\\\\"i-xxx\\\\\\"\\\\n}\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListExecutionsResponse>\\n    <NextToken>MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ</NextToken>\\n    <RequestId>14A074-47CA-9757-12CC4761D47A</RequestId>\\n    <MaxResults>50</MaxResults>\\n    <Executions>\\n        <Status>Success</Status>\\n        <WaitingStatus>\\"\\"</WaitingStatus>\\n        <Targets>\\"\\"</Targets>\\n        <StatusReason> \\"\\"</StatusReason>\\n        <LastSuccessfulTriggerTime>2019-05-27T09:29:18Z</LastSuccessfulTriggerTime>\\n        <Mode>Automatic</Mode>\\n        <SafetyCheck>Skip</SafetyCheck>\\n        <TemplateName>MyTemplate</TemplateName>\\n        <TemplateVersion>v1</TemplateVersion>\\n        <CreateDate>2019-05-16T10:26:14Z</CreateDate>\\n        <UpdateDate>2019-05-16T10:26:14Z</UpdateDate>\\n        <Description>test execution.</Description>\\n        <LastTriggerTime>2019-05-27T09:29:18Z</LastTriggerTime>\\n        <ParentExecutionId>exec-xxx</ParentExecutionId>\\n        <LastTriggerStatus>Success</LastTriggerStatus>\\n        <StatusMessage>“”</StatusMessage>\\n        <Outputs>{ \\"InstanceId\\":\\"i-xxx\\" }</Outputs>\\n        <ExecutedBy>1309252800</ExecutedBy>\\n        <EndDate>2019-05-16T10:26:14Z</EndDate>\\n        <IsParent>false</IsParent>\\n        <StartDate>2019-05-16T10:26:14Z</StartDate>\\n        <ExecutionId>exec-44d32b45d2a449e</ExecutionId>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <Category>Other</Category>\\n        <TemplateId>123</TemplateId>\\n        <RamRole>OOSServiceRole</RamRole>\\n        <ResourceStatus>{ \\t\\t\\t\\"Success\\": 1 \\t\\t}</ResourceStatus>\\n        <CurrentTasks>\\n            <TaskExecutionId>task-exec-44d32b45d2a49899#1</TaskExecutionId>\\n            <TaskName>installSLSILogtail</TaskName>\\n            <TaskAction>acs::Template</TaskAction>\\n        </CurrentTasks>\\n    </Executions>\\n</ListExecutionsResponse>","errorExample":""}]',
            'title' => '查询执行',
            'summary' => '查询执行，支持多种过滤方式。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListExecutionLogs' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'exec-xxx',
                    ],
                ],
                [
                    'name' => 'TaskExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务执行ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'exec-1234567zxcvb.t0010',
                    ],
                ],
                [
                    'name' => 'LogType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'System',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'gAAAAABdpsGWjX8dJ-a6dl_pvoS7AFxNHSNJKHLCAJ：J0ylgA53nWW5V4HTEZKCYTaEPNOrxFir4z43UTOjE150cFr8AGTifA==',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
                            ],
                            'IsTruncated' => [
                                'description' => '局部展示',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'ExecutionLogs' => [
                                'description' => '执行日志',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TaskExecutionId' => [
                                            'description' => '任务执行ID',
                                            'type' => 'string',
                                            'example' => 'exec-1234567zxcvb.t0010',
                                        ],
                                        'Message' => [
                                            'description' => '详细信息',
                                            'type' => 'string',
                                            'example' => 'The task CheckDiskCategory completed.',
                                        ],
                                        'LogType' => [
                                            'description' => '日志类型',
                                            'type' => 'string',
                                            'example' => ' System',
                                        ],
                                        'Timestamp' => [
                                            'description' => '时间戳',
                                            'type' => 'string',
                                            'example' => '2019-05-24T:02:29:07Z',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"gAAAAABdpsGWjX8dJ-a6dl_pvoS7AFxNHSNJKHLCAJ：J0ylgA53nWW5V4HTEZKCYTaEPNOrxFir4z43UTOjE150cFr8AGTifA==\\",\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\",\\n  \\"IsTruncated\\": true,\\n  \\"MaxResults\\": 50,\\n  \\"ExecutionLogs\\": [\\n    {\\n      \\"TaskExecutionId\\": \\"exec-1234567zxcvb.t0010\\",\\n      \\"Message\\": \\"The task CheckDiskCategory completed.\\",\\n      \\"LogType\\": \\" System\\",\\n      \\"Timestamp\\": \\"2019-05-24T:02:29:07Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <NextToken>gAAAAABdpsY7X-3ZUoNUxqiny_gx3zXfJ3HHHSKJDq3UAp6dQ-p7qJ2ZLtivu2LhpMiPe0P9eVP_76cO0cUgF5jFFj5Ut6g==</NextToken>\\n    <RequestId>0ABABABA-68A0-4DF2-8DCB-1DB8FE3A1CF1</RequestId>\\n    <ExecutionLogs>\\n        <Message>The task waitDataRecover waiting. Sleep estimated finish time (2019-10-16 07:27:35.615945)</Message>\\n        <LogType>System</LogType>\\n        <Timestamp>2019-10-16T07:26:35Z</Timestamp>\\n        <TaskExecutionId>exec-00eb84dd8143440da047.t0001</TaskExecutionId>\\n    </ExecutionLogs>\\n    <ExecutionLogs>\\n        <Message>The task waitDataRecover started.</Message>\\n        <LogType>System</LogType>\\n        <Timestamp>2019-10-16T07:26:35Z</Timestamp>\\n        <TaskExecutionId>exec-00eb84dd8143440da047.t0001</TaskExecutionId>\\n    </ExecutionLogs>\\n    <MaxResults>20</MaxResults>\\n    <IsTruncated>true</IsTruncated>\\n</data>\\n<requestId>04ABABAAB5-68A0-4DF2-8DCB-1DB8FE3A1CF1</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
            'title' => '获取执行的详细日志',
            'summary' => '获取执行的详细日志。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTaskExecutions' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'exec-xxx',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行状态，取值范围：Running, Started, Success, Failed, Waiting, Cancelled, Pending, Skipped。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                    ],
                ],
                [
                    'name' => 'StartDateBefore',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间小于等于指定时间的执行',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-05-16T10:26:14Z',
                    ],
                ],
                [
                    'name' => 'StartDateAfter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间大于等于指定时间的执行',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-05-16T10:26:14Z',
                    ],
                ],
                [
                    'name' => 'EndDateBefore',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间小于等于指定时间的执行',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-05-16T10:26:14Z',
                    ],
                ],
                [
                    'name' => 'EndDateAfter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间大于等于指定时间的执行',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2019-05-16T10:26:14Z',
                    ],
                ],
                [
                    'name' => 'TaskExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务执行ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'task-exec-xxx',
                    ],
                ],
                [
                    'name' => 'TaskName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'describeInstance',
                    ],
                ],
                [
                    'name' => 'TaskAction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务动作',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACS::Sleep',
                    ],
                ],
                [
                    'name' => 'ParentTaskExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '父任务执行ID。Loop情况会用到，一般是Loop的Parent的TaskExecutionId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'task-exec-xxx',
                    ],
                ],
                [
                    'name' => 'IncludeChildTaskExecution',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标记是否展示Loop产生的子Task。默认为False。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：20-100。默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB',
                    ],
                ],
                [
                    'name' => 'SortField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段。取值范围：'."\n"
                            .'- **StartDate**（默认值）：创建时间'."\n"
                            .'- **EndDate**：结束时间'."\n"
                            .'- **Status**：状态'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'StartDate',
                    ],
                ],
                [
                    'name' => 'SortOrder',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序方向。取值范围：'."\n"
                            .'- **Ascending**：升序'."\n"
                            .'- **Descending**（默认值）：降序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Ascending',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'CDABABABAB-FC28-4D9C-8FB5-68DC6F0486FC',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'TaskExecutions' => [
                                'description' => '执行数据',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ChildExecutionId' => [
                                            'description' => '子任务执行ID',
                                            'type' => 'string',
                                            'example' => 'exec-xxx',
                                        ],
                                        'Outputs' => [
                                            'description' => '执行输出结果',
                                            'type' => 'string',
                                            'example' => '{ "InstanceId":"i-xxx" }',
                                        ],
                                        'Status' => [
                                            'description' => '任务状态',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'EndDate' => [
                                            'description' => '结束时间',
                                            'type' => 'string',
                                            'example' => '2019-05-16T10:26:14Z',
                                        ],
                                        'ParentTaskExecutionId' => [
                                            'description' => '父任务执行ID',
                                            'type' => 'string',
                                            'example' => 'task-exec-xxx',
                                        ],
                                        'TaskName' => [
                                            'description' => '任务名称',
                                            'type' => 'string',
                                            'example' => 'describeInstance	',
                                        ],
                                        'StartDate' => [
                                            'description' => '开始时间',
                                            'type' => 'string',
                                            'example' => '2019-05-16T10:26:14Z',
                                        ],
                                        'LoopItem' => [
                                            'description' => '循环中的元素',
                                            'type' => 'string',
                                            'example' => 'i-1234566zxcvvb',
                                        ],
                                        'CreateDate' => [
                                            'description' => '执行创建时间',
                                            'type' => 'string',
                                            'example' => '2019-05-16T10:26:14Z',
                                        ],
                                        'ExecutionId' => [
                                            'description' => '执行ID',
                                            'type' => 'string',
                                            'example' => 'exec-44d32b45d2a449e49899',
                                        ],
                                        'TaskAction' => [
                                            'description' => '任务动作',
                                            'type' => 'string',
                                            'example' => 'ACS::Sleep',
                                        ],
                                        'TaskExecutionId' => [
                                            'description' => '任务执行ID',
                                            'type' => 'string',
                                            'example' => 'task-exec-xxx',
                                        ],
                                        'UpdateDate' => [
                                            'description' => '更新时间',
                                            'type' => 'string',
                                            'example' => '2019-05-16T10:26:14Z',
                                        ],
                                        'Loop' => [
                                            'description' => 'Loop配置和统计信息，仅Loop父节点有此信息。',
                                            'type' => 'object',
                                            'example' => '{}',
                                        ],
                                        'TemplateId' => [
                                            'description' => '模板ID',
                                            'type' => 'string',
                                            'example' => 'xxx',
                                        ],
                                        'LoopBatchNumber' => [
                                            'description' => '循环批次数',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'StatusMessage' => [
                                            'description' => '状态信息',
                                            'type' => 'string',
                                            'example' => '""',
                                        ],
                                        'ExtraData' => [
                                            'description' => '附加数据',
                                            'type' => 'object',
                                            'example' => '{                     "NotifyNote":""                 }',
                                        ],
                                        'Properties' => [
                                            'description' => '执行的输入参数',
                                            'type' => 'string',
                                            'example' => '{ "Status":"Running" }',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB\\",\\n  \\"RequestId\\": \\"CDABABABAB-FC28-4D9C-8FB5-68DC6F0486FC\\",\\n  \\"MaxResults\\": 50,\\n  \\"TaskExecutions\\": [\\n    {\\n      \\"ChildExecutionId\\": \\"exec-xxx\\",\\n      \\"Outputs\\": \\"{ \\\\\\"InstanceId\\\\\\":\\\\\\"i-xxx\\\\\\" }\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"EndDate\\": \\"2019-05-16T10:26:14Z\\",\\n      \\"ParentTaskExecutionId\\": \\"task-exec-xxx\\",\\n      \\"TaskName\\": \\"describeInstance\\\\t\\",\\n      \\"StartDate\\": \\"2019-05-16T10:26:14Z\\",\\n      \\"LoopItem\\": \\"i-1234566zxcvvb\\",\\n      \\"CreateDate\\": \\"2019-05-16T10:26:14Z\\",\\n      \\"ExecutionId\\": \\"exec-44d32b45d2a449e49899\\",\\n      \\"TaskAction\\": \\"ACS::Sleep\\",\\n      \\"TaskExecutionId\\": \\"task-exec-xxx\\",\\n      \\"UpdateDate\\": \\"2019-05-16T10:26:14Z\\",\\n      \\"Loop\\": {},\\n      \\"TemplateId\\": \\"xxx\\",\\n      \\"LoopBatchNumber\\": 2,\\n      \\"StatusMessage\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"ExtraData\\": {\\n        \\"NotifyNote\\": \\"\\"\\n      },\\n      \\"Properties\\": \\"{ \\\\\\"Status\\\\\\":\\\\\\"Running\\\\\\" }\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>CDABABABAB-FC28-4D9C-8FB5-68DC6F0486FC</RequestId>\\n    <MaxResults>100</MaxResults>\\n    <TaskExecutions>\\n        <Status>Success</Status>\\n        <Loop/>\\n        <TaskAction>ACS::Sleep</TaskAction>\\n        <ExtraData>\\n            <NotifyNote/>\\n        </ExtraData>\\n        <Properties>\\n            <Duration>PT1M</Duration>\\n        </Properties>\\n        <CreateDate>2019-10-16T07:45:09Z</CreateDate>\\n        <EndDate>2019-10-16T07:46:10Z</EndDate>\\n        <StatusMessage>Sleep estimated finish time (2019-10-16 07:46:09.502154)</StatusMessage>\\n        <StartDate>2019-10-16T07:45:09Z</StartDate>\\n        <UpdateDate>2019-10-16T07:46:10Z</UpdateDate>\\n        <LoopItem/>\\n        <TaskName>waitDataRecover</TaskName>\\n        <Outputs/>\\n        <TaskExecutionId>exec-934bc37ea31f4b9e9312.t0001</TaskExecutionId>\\n        <ExecutionId>exec-934bc37ea31f4b9e9312</ExecutionId>\\n    </TaskExecutions>\\n</data>\\n<requestId>CDABABABAB-FC28-4D9C-8FB5-68DC6F0486FC</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
            'title' => '查询任务执行',
            'summary' => '查询任务执行，支持多种过滤方式。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListResourceExecutionStatus' => [
            'path' => '/ListResourceExecutionStatus',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'exec-xxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：10-100。默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '100',
                        'minimum' => '10',
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'ED571CBD-9F96-419D-B919-CF340BBCA157',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'ResourceExecutionStatus' => [
                                'description' => '资源执行信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Outputs' => [
                                            'description' => '模板输出结果',
                                            'type' => 'string',
                                            'example' => '{ 				"commandOutput": "hello\\n" 			}',
                                        ],
                                        'Status' => [
                                            'description' => '执行状态',
                                            'type' => 'string',
                                            'example' => 'Success',
                                        ],
                                        'ExecutionTime' => [
                                            'description' => '执行时间',
                                            'type' => 'string',
                                            'example' => '2020-11-13T08:48:34Z',
                                        ],
                                        'ResourceId' => [
                                            'description' => '资源ID',
                                            'type' => 'string',
                                            'example' => 'i-bp1e1bxxxxxxxxxxxxxx',
                                        ],
                                        'ExecutionId' => [
                                            'description' => '执行ID',
                                            'type' => 'string',
                                            'example' => 'exec-6be6d6ff805349d9ac13',
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
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'EntityNotExists.Execution',
                        'errorMessage' => 'The specified execution does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ\\",\\n  \\"RequestId\\": \\"ED571CBD-9F96-419D-B919-CF340BBCA157\\",\\n  \\"MaxResults\\": 50,\\n  \\"ResourceExecutionStatus\\": [\\n    {\\n      \\"Outputs\\": \\"{ \\\\t\\\\t\\\\t\\\\t\\\\\\"commandOutput\\\\\\": \\\\\\"hello\\\\\\\\n\\\\\\" \\\\t\\\\t\\\\t}\\",\\n      \\"Status\\": \\"Success\\",\\n      \\"ExecutionTime\\": \\"2020-11-13T08:48:34Z\\",\\n      \\"ResourceId\\": \\"i-bp1e1bxxxxxxxxxxxxxx\\",\\n      \\"ExecutionId\\": \\"exec-6be6d6ff805349d9ac13\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>ED571CBD-9F96-419D-B919-CF340BBCA157</RequestId>\\n<ResourceExecutionStatus>\\n    <Status>Success</Status>\\n    <ExecutionTime>2020-11-13T08:48:34Z</ExecutionTime>\\n    <ResourceId>i-bp1e1bxxxxxxxxxxxxxx</ResourceId>\\n    <Outputs>\\n        <commandOutput>hello\\n</commandOutput>\\n    </Outputs>\\n    <ExecutionId>exec-6be6d6ff805349d9ac13</ExecutionId>\\n</ResourceExecutionStatus>\\n<MaxResults>50</MaxResults>","errorExample":""}]',
            'title' => '查看包含ECS实例的定时运维执行信息',
            'summary' => '查看包含ECS实例的定时运维执行信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CancelExecution' => [
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'exec-xxx',
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
                                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelExecutionResponse>\\r\\n    <RequestId>491DF8C2-34C9-4679-9DB3-4C0F49B129AC</RequestId>\\r\\n</CancelExecutionResponse>","errorExample":""}]',
            'title' => '取消执行',
            'summary' => '取消执行。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GenerateExecutionPolicy' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'vmeixme',
                    ],
                ],
                [
                    'name' => 'TemplateVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模版版本，默认为最新版。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v2',
                    ],
                ],
                [
                    'name' => 'RamRole',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM角色',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AliyunServiceRoleForOOSBandwidthScheduler',
                    ],
                ],
                [
                    'name' => 'TemplateContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板内容，JSON或YAML格式。用户传入此字段可检查模板内容中需要的权限策略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{   "Description": "Example template, describe instances in some status",   "FormatVersion": "OOS-2019-06-01",   "Parameters": {},   "Tasks": [     {       "Name": "describeInstances",       "Action": "ACS::ExecuteAPI",       "Description": "desc-en",       "Properties": {         "Service": "ECS",         "API": "DescribeInstances",         "Parameters": {           "Status": "Running"         }       }     }   ] }',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Policy' => [
                                'description' => 'Ram Policy',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
                            ],
                            'MissingPolicy' => [
                                'description' => '缺少的权限列表',
                                'type' => 'string',
                                'example' => '[{\'Action\': [\'ecs:DescribeInvocationResults\', \'ecs:DescribeInstances\', \'ecs:RunCommand\', \'ecs:DescribeInvocations\'], \'ServiceName\': \'ecs\', \'Resources\': \'*\'}]',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Policy\\": \\"{}\\",\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\",\\n  \\"MissingPolicy\\": \\"[{\'Action\': [\'ecs:DescribeInvocationResults\', \'ecs:DescribeInstances\', \'ecs:RunCommand\', \'ecs:DescribeInvocations\'], \'ServiceName\': \'ecs\', \'Resources\': \'*\'}]\\"\\n}","errorExample":""},{"type":"xml","example":"<GenerateExecutionPolicyResponse>\\r\\n    <Policy>\\r\\n        <Statement>\\r\\n            <Action>ecs:InvokeCommand</Action>\\r\\n            <Action>ecs:DeleteCommand</Action>\\r\\n            <Action>ecs:DescribeInvocations</Action>\\r\\n            <Action>ecs:DescribeInvocationResults</Action>\\r\\n            <Action>ecs:CreateCommand</Action>\\r\\n            <Action>ecs:DescribeInstances</Action>\\r\\n            <Effect>Allow</Effect>\\r\\n            <Resource>*</Resource>\\r\\n        </Statement>\\r\\n        <Version>1</Version>\\r\\n    </Policy>\\r\\n    <RequestId>C04B668D-D2DD-4B40-B6E9-0E3C4F53D5B5</RequestId>\\r\\n</GenerateExecutionPolicyResponse>","errorExample":""}]',
            'title' => '获取执行所需 Ram Policy',
            'summary' => '获取模板执行所需要的Ram Policy。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'NotifyExecution' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'exec-xxx',
                    ],
                ],
                [
                    'name' => 'NotifyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通知类型。取值范围：'."\n"
                            .'- **ExecuteTask** - 指定某个任务执行的开始，适用于Debug模式。可能需配合Parameters参数。'."\n"
                            .'- **CancelTask** - 取消当前的任务执行，适用于Debug模式。'."\n"
                            .'- **CompleteExecution** - 手动终止一个Debug模式下的执行。可配合**ExecutionStatus**参数指定被终止执行的状态。'."\n"
                            .'- **Approve**- 同意，适用于批准待审批的执行。如已知晓高危操作的任务执行风险，并准许其执行。'."\n"
                            .'- **Reject** - 拒绝，适用于驳回待审批的执行。如不准许高危操作的任务执行。'."\n"
                            .'- **RetryTask**- 失重试已经执行失败的任务，适用于失败暂停模式。'."\n"
                            .'- **SkipTask** - 跳过已经执行失败的任务，适用于失败暂停模式。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Approve',
                    ],
                ],
                [
                    'name' => 'NotifyNote',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于说明的message',
                        'type' => 'string',
                        'required' => false,
                        'example' => '说明',
                    ],
                ],
                [
                    'name' => 'TaskName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一步要执行的Task Name',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'describeInstance',
                    ],
                ],
                [
                    'name' => 'TaskExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务执行ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'task-exec-xxx',
                    ],
                ],
                [
                    'name' => 'ExecutionStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '适用于CompleteExecution',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Success',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '适用于ExecuteTask',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}	',
                    ],
                ],
                [
                    'name' => 'LoopItem',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Loop子节点对应Item数据',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-xxx',
                    ],
                ],
                [
                    'name' => 'TaskExecutionIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务执行的ID列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["exec-79c321c11003a97c","exec-79c321c11003aqw97cz"]',
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
                                'example' => '491DF8C2-34C9-4679-9DB3-4C0F49B129AC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"491DF8C2-34C9-4679-9DB3-4C0F49B129AC\\"\\n}","errorExample":""},{"type":"xml","example":"<NotifyExecutionResponse>\\r\\n    <RequestId>491DF8C2-34C9-4679-9DB3-4C0F49B129AC</RequestId>\\r\\n</NotifyExecutionResponse>","errorExample":""}]',
            'title' => '通知执行如何运行',
            'summary' => '通知一个状态为等待中的执行接下来如何运行。',
            'description' => '有以下情况可以被通知：'."\n"
                ."\n"
                .'- 特殊任务执行等待审批时，即模板中有Approve任务，模板执行到Approve对应的任务时，执行切换为等待中状态，可通过该API确认是否继续执行。'."\n"
                .'- Debug模式下调试时，执行创建后或完成一个任务执行后，用该API指定接下来进行的任务执行。'."\n"
                .'- 高风险操作类任务执行等待审批时，可通过该API确认是否继续执行。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'TriggerExecution' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ExecutionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标EventTrigger、AlarmTrigger或TimerTrigger执行ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'exec-sadw3f23rsad',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发器类型：'."\n"
                            .'- Event'."\n"
                            .'- Alarm'."\n"
                            .'- Timer',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Event',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送给触发器任务的消息体。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{"eventTime": "20181226T220114.058+0800", "id": "9435EAD6-3CF6-4494-8F7A-3A********77","level": "INFO","name": "Instance:StateChange","product": "ECS","regionId":"cn-hangzhou","resourceId": "acs:ecs:cn-hangzhou:169070********30:instance/i-bp1ecr********5go2go","userId": "169070********30","ver": "1.0","content": {"resourceId": "i-bp1ecr********5go2go", "resourceType": "ALIYUN::ECS::Instance","state": "Stopping"} }',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证幂等性的一个Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dswe2-3i0-029',
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
                                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\"\\n}","errorExample":""},{"type":"xml","example":"<TriggerExecutionResponse>\\n    <RequestId>14A07460-EBE7-47CA-9757-12CC4761D47A</RequestId>\\n</TriggerExecutionResponse>","errorExample":""}]',
            'title' => '执行事件触发',
            'summary' => '事件触发器或告警触发器任务，可对该类执行发送消息体内容，消息体会使事件或告警任务产生一个新的子执行。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListActions' => [
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
                'abilityTreeCode' => '93970',
                'abilityTreeNodes' => [
                    'FEATUREoosCPYH5Z',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'OOSActionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '动作名称。名称未包含关系，最终列出包含所填动作名称的所有动作。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MyTemplate',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：10-100。默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'xxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F9154C02-F847-4563-BB6A-6DD01A4F0',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Actions' => [
                                'description' => '动作列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Popularity' => [
                                            'description' => '使用热度',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'ActionType' => [
                                            'description' => '动作类型。'."\n"
                                                ."\n"
                                                .'1. 原子动作'."\n"
                                                .'    - Atomic.API'."\n"
                                                .'    - Atomic.Trigger'."\n"
                                                .'    - Atomic.Control'."\n"
                                                .'    - Atomic.Embedded'."\n"
                                                .'2. 云产品动作'."\n"
                                                .'    - Product.ECS'."\n"
                                                .'    - Product.RDS'."\n"
                                                .'    - Product.VPC'."\n"
                                                .'    - Product.FC'."\n"
                                                .'    - …..',
                                            'type' => 'string',
                                            'example' => 'ACS::Template',
                                        ],
                                        'Description' => [
                                            'description' => '动作说明',
                                            'type' => 'string',
                                            'example' => 'ReplaceSystemDisk',
                                        ],
                                        'CreatedDate' => [
                                            'description' => '动作创建时间',
                                            'type' => 'string',
                                            'example' => '2019-05-16T10:26:14Z',
                                        ],
                                        'TemplateVersion' => [
                                            'description' => '动作所对应的模板版本。'."\n"
                                                ."\n"
                                                .'> 对于原子动作，该字段不返回。',
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                        'OOSActionName' => [
                                            'description' => '动作名称',
                                            'type' => 'string',
                                            'example' => 'ACS::ECS::ReplaceSystemDisk',
                                        ],
                                        'Properties' => [
                                            'description' => '动作参数',
                                            'type' => 'string',
                                            'example' => '{ "ImageId": { "Description": "The mirror ID you will use when resetting the system", "Type": "String" }, "InstanceId": { "Description": "the instance id that you will handle .", "Type": "String" } }',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"xxx\\",\\n  \\"RequestId\\": \\"F9154C02-F847-4563-BB6A-6DD01A4F0\\",\\n  \\"MaxResults\\": 50,\\n  \\"Actions\\": [\\n    {\\n      \\"Popularity\\": 5,\\n      \\"ActionType\\": \\"ACS::Template\\",\\n      \\"Description\\": \\"ReplaceSystemDisk\\",\\n      \\"CreatedDate\\": \\"2019-05-16T10:26:14Z\\",\\n      \\"TemplateVersion\\": \\"v1\\",\\n      \\"OOSActionName\\": \\"ACS::ECS::ReplaceSystemDisk\\",\\n      \\"Properties\\": \\"{ \\\\\\"ImageId\\\\\\": { \\\\\\"Description\\\\\\": \\\\\\"The mirror ID you will use when resetting the system\\\\\\", \\\\\\"Type\\\\\\": \\\\\\"String\\\\\\" }, \\\\\\"InstanceId\\\\\\": { \\\\\\"Description\\\\\\": \\\\\\"the instance id that you will handle .\\\\\\", \\\\\\"Type\\\\\\": \\\\\\"String\\\\\\" } }\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListActionsResponse>\\r\\n    <MaxResults>50</MaxResults>\\r\\n    <RequestId>F9154C02-F847-4563-BB6A-6DD2F5F0</RequestId>\\r\\n    <Actions>\\r\\n        <OOSActionName>ACS::ECS::ReplaceSystemDisk</OOSActionName>\\r\\n        <ActionType>Product.ECS</ActionType>\\r\\n        <CreatedDate>2019-05-14T07:26:39Z</CreatedDate>\\r\\n        <Description>ReplaceSystemDisk</Description>\\r\\n        <TemplateVersion>v1</TemplateVersion>\\r\\n        <Properties>\\r\\n            <ImageId>\\r\\n                <Description>The mirror ID you will use when resetting the system</Description>\\r\\n                <Type>String</Type>\\r\\n            </ImageId>\\r\\n            <InstanceId>\\r\\n                <Description>the instance id that you will handle .</Description>\\r\\n                <Type>String</Type>\\r\\n            </InstanceId>\\r\\n        </Properties>\\r\\n    </Actions>\\r\\n    <Actions>\\r\\n        <OOSActionName>ACS::Notify</OOSActionName>\\r\\n        <ActionType>Automic.Trigger</ActionType>\\r\\n        <CreatedDate>2019-05-16T09:33:45Z</CreatedDate>\\r\\n        <Description>Send the notification.</Description>\\r\\n        <Properties>\\r\\n            <NotifyType>The type of notification. Support WebHook</NotifyType>\\r\\n            <WebHook>\\r\\n                <Content>The body for requesting web hook. Type: Mapping.</Content>\\r\\n                <Headers>The headers for requesting web hook. Type: Mapping.</Headers>\\r\\n                <URI>The web hook URI.</URI>\\r\\n            </WebHook>\\r\\n        </Properties>\\r\\n    </Actions>\\r\\n</ListActionsResponse>","errorExample":""}]',
            'title' => '查询可用动作',
            'summary' => '查询可用动作，包括原子动作和云产品动作。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateParameter' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数名称。取值范围：内容限制为字母、数字、中划线、下划线，长度不能超过200字符，且不能以ALIYUN、ACS、ALIBABA、ALICLOUD、OOS开头。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyParameter',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数类型。取值范围：String、StringList。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'String',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数内容。长度限制为4096。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'parameter',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要给参数添加的描述信息。长度限制为200字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'parameter',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。'."\n"
                            .'长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。'."\n"
                            .'更多详情，请参见如何保证幂等性。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-42665544****',
                    ],
                ],
                [
                    'name' => 'Constraints',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数的约束条件，默认为空，取值范围：'."\n"
                            ."\n"
                            .'- AllowedValues  参数允许值，数组类型的字符串'."\n"
                            ."\n"
                            .'- AllowedPattern  正则字符串'."\n"
                            ."\n"
                            .'- MinLength  参数最小长度'."\n"
                            ."\n"
                            .'- MaxLength  参数最大长度',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'    "AllowedValues": ['."\n"
                            .'        "parameter"'."\n"
                            .'    ],'."\n"
                            .'    "AllowedPattern": "parameter",'."\n"
                            .'    "MinLength": 0,'."\n"
                            .'    "MaxLength": 20'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"k1": "v1", "k2": "v2"}',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
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
                                'example' => '0B419FF3-ABC6-4DF0-95E5-636DC8CBB8AF',
                            ],
                            'Parameter' => [
                                'description' => '普通参数信息',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'description' => '参数类型',
                                        'type' => 'string',
                                        'example' => 'String',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '参数更新时间',
                                        'type' => 'string',
                                        'example' => '2020-09-01T08:01:43Z',
                                    ],
                                    'UpdatedBy' => [
                                        'description' => '参数更新者',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'Tags' => [
                                        'description' => '标签',
                                        'type' => 'object',
                                        'example' => '{"k1": "v1", "k2": "v2"}',
                                    ],
                                    'Description' => [
                                        'description' => '参数描述信息',
                                        'type' => 'string',
                                        'example' => 'parameter',
                                    ],
                                    'Constraints' => [
                                        'description' => '参数约束条件',
                                        'type' => 'string',
                                        'example' => '"{\'AllowedValues\':[\'parameter\'],\'AllowedPattern\':\'parameter\',\'MinLength\':0,\'MaxLength\':20}"',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组',
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m4******',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '参数创建者',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '参数创建时间',
                                        'type' => 'string',
                                        'example' => '2020-09-01T08:01:43Z',
                                    ],
                                    'ParameterVersion' => [
                                        'description' => '参数版本号',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Name' => [
                                        'description' => '参数名称',
                                        'type' => 'string',
                                        'example' => 'MyParameter',
                                    ],
                                    'Id' => [
                                        'description' => '参数ID',
                                        'type' => 'string',
                                        'example' => 'p-4c4b401cab6747xxxxxx',
                                    ],
                                    'ShareType' => [
                                        'description' => '参数共享类型',
                                        'type' => 'string',
                                        'example' => 'Private',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0B419FF3-ABC6-4DF0-95E5-636DC8CBB8AF\\",\\n  \\"Parameter\\": {\\n    \\"Type\\": \\"String\\",\\n    \\"UpdatedDate\\": \\"2020-09-01T08:01:43Z\\",\\n    \\"UpdatedBy\\": \\"root(130900000)\\",\\n    \\"Tags\\": {\\n      \\"k1\\": \\"v1\\",\\n      \\"k2\\": \\"v2\\"\\n    },\\n    \\"Description\\": \\"parameter\\",\\n    \\"Constraints\\": \\"\\\\\\"{\'AllowedValues\':[\'parameter\'],\'AllowedPattern\':\'parameter\',\'MinLength\':0,\'MaxLength\':20}\\\\\\"\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n    \\"CreatedBy\\": \\"root(130900000)\\",\\n    \\"CreatedDate\\": \\"2020-09-01T08:01:43Z\\",\\n    \\"ParameterVersion\\": 1,\\n    \\"Name\\": \\"MyParameter\\",\\n    \\"Id\\": \\"p-4c4b401cab6747xxxxxx\\",\\n    \\"ShareType\\": \\"Private\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateParameterResponse>\\n    <RequestId>0B419FF3-ABC6-4DF0-95E5-636DC8CBB8AF</RequestId>\\n    <Parameter>\\n        <Type>String</Type>\\n        <UpdatedDate>2020-09-01T08:01:43Z</UpdatedDate>\\n        <UpdatedBy>root(130900000)</UpdatedBy>\\n        <Description>parameter</Description>\\n        <Constraints>\\"{\'AllowedValues\':[\'parameter\'],\'AllowedPattern\':\'parameter\',\'MinLength\':0,\'MaxLength\':20}\\"</Constraints>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <CreatedBy>root(130900000)</CreatedBy>\\n        <CreatedDate>2020-09-01T08:01:43Z</CreatedDate>\\n        <ParameterVersion>1</ParameterVersion>\\n        <Name>MyParameter</Name>\\n        <Id>p-4c4b401cab6747xxxxxx</Id>\\n        <Tags>\\n            <k1>v1</k1>\\n            <k2>v2</k2>\\n        </Tags>\\n        <ShareType>Private</ShareType>\\n    </Parameter>\\n</CreateParameterResponse>","errorExample":""}]',
            'title' => '创建一个普通参数',
            'summary' => '创建一个普通参数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteParameter' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数名称。取值范围：内容限制为字母、数字、中划线、下划线，长度不能超过180字符，且不能以aliyun、acs、alibaba、alicloud、oos开头。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyParameter',
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
                                'example' => 'C0D02BDF-77F6-49F2-95C9-8E87121D2979',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C0D02BDF-77F6-49F2-95C9-8E87121D2979\\"\\n}","type":"json"}]',
            'title' => '删除普通参数',
            'summary' => '删除普通参数。',
        ],
        'UpdateParameter' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数名称。取值范围：内容限制为字母、数字、中划线、下划线，长度不能超过200字符，且不能以ALIYUN、ACS、ALIBABA、ALICLOUD、OOS开头。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyParameter',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数内容。长度限制为4096。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'update',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要给普通参数添加的描述信息。长度限制为200字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'update',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"k1": "v1", "k2": "v2"}',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
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
                                'example' => 'AF1AE6DE-61C4-435E-8687-072CFACCCEC7',
                            ],
                            'Parameter' => [
                                'description' => '普通参数信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'description' => '普通参数类型',
                                        'type' => 'string',
                                        'example' => 'String',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '普通参数更新时间',
                                        'type' => 'string',
                                        'example' => '2020-09-01T08:04:23Z',
                                    ],
                                    'UpdatedBy' => [
                                        'description' => '普通参数更新者',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'Tags' => [
                                        'description' => '标签',
                                        'type' => 'string',
                                        'example' => '{"k1": "v1", "k2": "v2"}',
                                    ],
                                    'Description' => [
                                        'description' => '普通参数描述信息',
                                        'type' => 'string',
                                        'example' => 'update',
                                    ],
                                    'Constraints' => [
                                        'description' => '参数约束条件',
                                        'type' => 'string',
                                        'example' => '"{\'AllowedValues\':[\'parameter\'],\'AllowedPattern\':\'parameter\',\'MinLength\':0,\'MaxLength\':20}"',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID',
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m4******',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '普通参数创建者',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '普通参数创建时间',
                                        'type' => 'string',
                                        'example' => '2020-09-01T08:01:43Z',
                                    ],
                                    'ParameterVersion' => [
                                        'description' => '普通参数版本',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'Name' => [
                                        'description' => '普通参数名称',
                                        'type' => 'string',
                                        'example' => 'MyParameter',
                                    ],
                                    'Id' => [
                                        'description' => '普通参数Id',
                                        'type' => 'string',
                                        'example' => 'p-4c4b401cab6747xxxxxx',
                                    ],
                                    'ShareType' => [
                                        'description' => '普通参数共享类型',
                                        'type' => 'string',
                                        'example' => 'Private',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AF1AE6DE-61C4-435E-8687-072CFACCCEC7\\",\\n  \\"Parameter\\": {\\n    \\"Type\\": \\"String\\",\\n    \\"UpdatedDate\\": \\"2020-09-01T08:04:23Z\\",\\n    \\"UpdatedBy\\": \\"root(130900000)\\",\\n    \\"Tags\\": \\"{\\\\\\"k1\\\\\\": \\\\\\"v1\\\\\\", \\\\\\"k2\\\\\\": \\\\\\"v2\\\\\\"}\\",\\n    \\"Description\\": \\"update\\",\\n    \\"Constraints\\": \\"\\\\\\"{\'AllowedValues\':[\'parameter\'],\'AllowedPattern\':\'parameter\',\'MinLength\':0,\'MaxLength\':20}\\\\\\"\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n    \\"CreatedBy\\": \\"root(130900000)\\",\\n    \\"CreatedDate\\": \\"2020-09-01T08:01:43Z\\",\\n    \\"ParameterVersion\\": 2,\\n    \\"Name\\": \\"MyParameter\\",\\n    \\"Id\\": \\"p-4c4b401cab6747xxxxxx\\",\\n    \\"ShareType\\": \\"Private\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateParameterResponse>\\n    <RequestId>AF1AE6DE-61C4-435E-8687-072CFACCCEC7</RequestId>\\n    <Parameter>\\n        <Type>String</Type>\\n        <UpdatedDate>2020-09-01T08:04:23Z</UpdatedDate>\\n        <UpdatedBy>root(130900000)</UpdatedBy>\\n        <Tags>{\\"k1\\": \\"v1\\", \\"k2\\": \\"v2\\"}</Tags>\\n        <Description>update</Description>\\n        <Constraints>\\"{\'AllowedValues\':[\'parameter\'],\'AllowedPattern\':\'parameter\',\'MinLength\':0,\'MaxLength\':20}\\"</Constraints>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <CreatedBy>root(130900000)</CreatedBy>\\n        <CreatedDate>2020-09-01T08:01:43Z</CreatedDate>\\n        <ParameterVersion>2</ParameterVersion>\\n        <Name>MyParameter</Name>\\n        <Id>p-4c4b401cab6747xxxxxx</Id>\\n        <ShareType>Private</ShareType>\\n    </Parameter>\\n</UpdateParameterResponse>","errorExample":""}]',
            'title' => '更新一个已存在的普通参数',
            'summary' => '更新一个已存在的普通参数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetParameter' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数名称。取值范围：内容限制为字母、数字、中划线、下划线，长度不能超过200字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyParameter',
                    ],
                ],
                [
                    'name' => 'ParameterVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数版本号。取值范围：1-100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m*****',
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
                                'example' => 'BA326372-2A10-4C3B-BE3E-6439DB7557CC',
                            ],
                            'Parameter' => [
                                'description' => '参数信息',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'description' => '参数类型',
                                        'type' => 'string',
                                        'example' => 'String',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '参数更新时间',
                                        'type' => 'string',
                                        'example' => '2020-09-01T08:01:43Z',
                                    ],
                                    'UpdatedBy' => [
                                        'description' => '参数更新者',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'Tags' => [
                                        'description' => '标签',
                                        'type' => 'object',
                                        'example' => '{"k1":"v1","k2":"v2"}',
                                    ],
                                    'Value' => [
                                        'description' => '参数内容',
                                        'type' => 'string',
                                        'example' => 'parameter',
                                    ],
                                    'Description' => [
                                        'description' => '参数描述信息',
                                        'type' => 'string',
                                        'example' => 'parameter',
                                    ],
                                    'Constraints' => [
                                        'description' => '参数约束条件'."\n",
                                        'type' => 'string',
                                        'example' => '\'{\'\'AllowedValues":["parameter"],"AllowedPattern":"parameter","MinLength":0,"MaxLength":20}\'',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID',
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m*****',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '参数创建者',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '参数创建时间',
                                        'type' => 'string',
                                        'example' => '2020-09-01T08:01:43Z',
                                    ],
                                    'ParameterVersion' => [
                                        'description' => '参数版本号',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Name' => [
                                        'description' => '参数名称',
                                        'type' => 'string',
                                        'example' => 'MyParameter',
                                    ],
                                    'Id' => [
                                        'description' => '参数ID',
                                        'type' => 'string',
                                        'example' => 'p-4c4b401cab6747xxxxxx',
                                    ],
                                    'ShareType' => [
                                        'description' => '参数共享类型',
                                        'type' => 'string',
                                        'example' => 'Private',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BA326372-2A10-4C3B-BE3E-6439DB7557CC\\",\\n  \\"Parameter\\": {\\n    \\"Type\\": \\"String\\",\\n    \\"UpdatedDate\\": \\"2020-09-01T08:01:43Z\\",\\n    \\"UpdatedBy\\": \\"root(130900000)\\",\\n    \\"Tags\\": {\\n      \\"k1\\": \\"v1\\",\\n      \\"k2\\": \\"v2\\"\\n    },\\n    \\"Value\\": \\"parameter\\",\\n    \\"Description\\": \\"parameter\\",\\n    \\"Constraints\\": \\"\'{\'\'AllowedValues\\\\\\":[\\\\\\"parameter\\\\\\"],\\\\\\"AllowedPattern\\\\\\":\\\\\\"parameter\\\\\\",\\\\\\"MinLength\\\\\\":0,\\\\\\"MaxLength\\\\\\":20}\'\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m*****\\",\\n    \\"CreatedBy\\": \\"root(130900000)\\",\\n    \\"CreatedDate\\": \\"2020-09-01T08:01:43Z\\",\\n    \\"ParameterVersion\\": 1,\\n    \\"Name\\": \\"MyParameter\\",\\n    \\"Id\\": \\"p-4c4b401cab6747xxxxxx\\",\\n    \\"ShareType\\": \\"Private\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetParameterResponse>\\n    <RequestId>BA326372-2A10-4C3B-BE3E-6439DB7557CC</RequestId>\\n    <Parameter>\\n        <Type>String</Type>\\n        <UpdatedDate>2020-09-01T08:01:43Z</UpdatedDate>\\n        <UpdatedBy>root(130900000)</UpdatedBy>\\n        <Value>parameter</Value>\\n        <Description>parameter</Description>\\n        <Constraints>\'{\'\'AllowedValues\\":[\\"parameter\\"],\\"AllowedPattern\\":\\"parameter\\",\\"MinLength\\":0,\\"MaxLength\\":20}\'</Constraints>\\n        <ResourceGroupId>rg-acfmxsn4m*****</ResourceGroupId>\\n        <CreatedBy>root(130900000)</CreatedBy>\\n        <CreatedDate>2020-09-01T08:01:43Z</CreatedDate>\\n        <ParameterVersion>1</ParameterVersion>\\n        <Name>MyParameter</Name>\\n        <Id>p-4c4b401cab6747xxxxxx</Id>\\n        <Tags>\\n            <k1>v1</k1>\\n            <k2>v2</k2>\\n        </Tags>\\n        <ShareType>Private</ShareType>\\n    </Parameter>\\n</GetParameterResponse>","errorExample":""}]',
            'title' => '获取普通参数',
            'summary' => '获取一个普通参数或公共参数，包括参数值。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListParameters' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数名称。**本Action下的Name为模糊匹配。**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MyParameter',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：10-100。默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '10',
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzA',
                    ],
                ],
                [
                    'name' => 'SortField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据字段排序。取值范围：'."\n"
                            ."\n"
                            .'- Name（参数名称）'."\n"
                            ."\n"
                            .'- CreatedDate（创建时间）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Name',
                    ],
                ],
                [
                    'name' => 'SortOrder',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序顺序。取值范围：'."\n"
                            ."\n"
                            .'- Ascending（升序）'."\n"
                            ."\n"
                            .'- Descending（默认值）：降序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Descending',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数类型。取值范围：'."\n"
                            ."\n"
                            .'- String'."\n"
                            ."\n"
                            .'- StringList',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'String',
                    ],
                ],
                [
                    'name' => 'Path',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数路径。例如：Name为/path/path1/Myparameter 此时包含参数路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/path1/path2/',
                    ],
                ],
                [
                    'name' => 'Recursive',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数路径是否递归。'."\n"
                            .'默认：false',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"k1": "v1", "k2": "v2"}',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
                    ],
                ],
                [
                    'name' => 'ShareType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否为公共参数，取值范围'."\n"
                            ."\n"
                            .'- Public'."\n"
                            ."\n"
                            .'- Private'."\n"
                            ."\n"
                            .' 默认为 \'Private\'',
                        'type' => 'string',
                        'required' => false,
                        'example' => '‘Private’',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC6KPDUL0FIIb',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A81E4B2E-6B33-4BAE-9856-55DB7C893E01',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Parameters' => [
                                'description' => '参数信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '参数类型',
                                            'type' => 'string',
                                            'example' => 'String',
                                        ],
                                        'UpdatedDate' => [
                                            'description' => '参数更新时间',
                                            'type' => 'string',
                                            'example' => '2020-09-01T08:01:43Z',
                                        ],
                                        'UpdatedBy' => [
                                            'description' => '参数更新者',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                        'Tags' => [
                                            'description' => '标签',
                                            'type' => 'object',
                                            'example' => '{"k1": "v1", "k2": "v2"}',
                                        ],
                                        'Description' => [
                                            'description' => '参数描述信息',
                                            'type' => 'string',
                                            'example' => 'parameter',
                                        ],
                                        'CreatedBy' => [
                                            'description' => '参数创建者',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组',
                                            'type' => 'string',
                                            'example' => 'rg-acfmxsn4m4******',
                                        ],
                                        'CreatedDate' => [
                                            'description' => '参数创建时间',
                                            'type' => 'string',
                                            'example' => '2020-09-01T08:01:43Z',
                                        ],
                                        'ParameterVersion' => [
                                            'description' => '参数版本',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'Name' => [
                                            'description' => '参数名称',
                                            'type' => 'string',
                                            'example' => 'MyParameter',
                                        ],
                                        'Id' => [
                                            'description' => '普通参数Id',
                                            'type' => 'string',
                                            'example' => 'p-4c4b401cab6747xxxxxx',
                                        ],
                                        'ShareType' => [
                                            'description' => '参数共享类型',
                                            'type' => 'string',
                                            'example' => 'Private',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC6KPDUL0FIIb\\",\\n  \\"RequestId\\": \\"A81E4B2E-6B33-4BAE-9856-55DB7C893E01\\",\\n  \\"TotalCount\\": 5,\\n  \\"MaxResults\\": 50,\\n  \\"Parameters\\": [\\n    {\\n      \\"Type\\": \\"String\\",\\n      \\"UpdatedDate\\": \\"2020-09-01T08:01:43Z\\",\\n      \\"UpdatedBy\\": \\"root(130900000)\\",\\n      \\"Tags\\": {\\n        \\"k1\\": \\"v1\\",\\n        \\"k2\\": \\"v2\\"\\n      },\\n      \\"Description\\": \\"parameter\\",\\n      \\"CreatedBy\\": \\"root(130900000)\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n      \\"CreatedDate\\": \\"2020-09-01T08:01:43Z\\",\\n      \\"ParameterVersion\\": \\"1\\",\\n      \\"Name\\": \\"MyParameter\\",\\n      \\"Id\\": \\"p-4c4b401cab6747xxxxxx\\",\\n      \\"ShareType\\": \\"Private\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListParametersResponse>\\n    <NextToken>gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC6KPDUL0FIIb</NextToken>\\n    <RequestId>A81E4B2E-6B33-4BAE-9856-55DB7C893E01</RequestId>\\n    <TotalCount>5</TotalCount>\\n    <MaxResults>50</MaxResults>\\n    <Parameters>\\n        <Type>String</Type>\\n        <UpdatedDate>2020-09-01T08:01:43Z</UpdatedDate>\\n        <UpdatedBy>root(130900000)</UpdatedBy>\\n        <Description>parameter</Description>\\n        <CreatedBy>root(130900000)</CreatedBy>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <CreatedDate>2020-09-01T08:01:43Z</CreatedDate>\\n        <ParameterVersion>1</ParameterVersion>\\n        <Name>MyParameter</Name>\\n        <Id>p-4c4b401cab6747xxxxxx</Id>\\n        <Tags>\\n            <k1>v1</k1>\\n            <k2>v2</k2>\\n        </Tags>\\n        <ShareType>Private</ShareType>\\n    </Parameters>\\n</ListParametersResponse>","errorExample":""}]',
            'title' => '查询普通参数',
            'summary' => '查询普通参数和公共参数，支持多种查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListParameterVersions' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyParameter',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：10-100。默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '10',
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB',
                    ],
                ],
                [
                    'name' => 'ShareType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数共享类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Private',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'description' => '参数类型',
                                'type' => 'string',
                                'example' => 'String',
                            ],
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'FD08D89D-B6C8-4AA2-A2B4-521D3F4A39FA',
                            ],
                            'Description' => [
                                'description' => '参数描述信息',
                                'type' => 'string',
                                'example' => 'parameter-description',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'CreatedBy' => [
                                'description' => '参数创建者',
                                'type' => 'string',
                                'example' => 'root(130900000)',
                            ],
                            'CreatedDate' => [
                                'description' => '参数创建时间',
                                'type' => 'string',
                                'example' => '2020-09-07T11:37:29Z',
                            ],
                            'Name' => [
                                'description' => '参数名称',
                                'type' => 'string',
                                'example' => 'MyParameter',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Id' => [
                                'description' => '参数Id',
                                'type' => 'string',
                                'example' => 'p-a483b520e0axxxxxxxxx',
                            ],
                            'ParameterVersions' => [
                                'description' => '参数版本信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ParameterVersion' => [
                                            'description' => '参数版本',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Value' => [
                                            'description' => '参数值内容',
                                            'type' => 'string',
                                            'example' => 'MyParameter',
                                        ],
                                        'UpdatedDate' => [
                                            'description' => '参数更新时间',
                                            'type' => 'string',
                                            'example' => '2020-09-07T11:37:29Z',
                                        ],
                                        'UpdatedBy' => [
                                            'description' => '参数更新者',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Type\\": \\"String\\",\\n  \\"NextToken\\": \\"MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB\\",\\n  \\"RequestId\\": \\"FD08D89D-B6C8-4AA2-A2B4-521D3F4A39FA\\",\\n  \\"Description\\": \\"parameter-description\\",\\n  \\"MaxResults\\": 50,\\n  \\"CreatedBy\\": \\"root(130900000)\\",\\n  \\"CreatedDate\\": \\"2020-09-07T11:37:29Z\\",\\n  \\"Name\\": \\"MyParameter\\",\\n  \\"TotalCount\\": 50,\\n  \\"Id\\": \\"p-a483b520e0axxxxxxxxx\\",\\n  \\"ParameterVersions\\": [\\n    {\\n      \\"ParameterVersion\\": 1,\\n      \\"Value\\": \\"MyParameter\\",\\n      \\"UpdatedDate\\": \\"2020-09-07T11:37:29Z\\",\\n      \\"UpdatedBy\\": \\"root(130900000)\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Type>String</Type>\\n<ParameterVersions>\\n    <UpdatedBy>root(130900000)</UpdatedBy>\\n    <UpdatedDate>2020-09-07T11:37:29Z</UpdatedDate>\\n    <ParameterVersion>1</ParameterVersion>\\n    <Value>Running</Value>\\n</ParameterVersions>\\n<Description>parameter-description</Description>\\n<CreatedBy>root(130900000)</CreatedBy>\\n<RequestId>FD08D89D-B6C8-4AA2-A2B4-521D3F4A39FA</RequestId>\\n<MaxResults>50</MaxResults>\\n<CreatedDate>2020-09-07T11:37:29Z</CreatedDate>\\n<Id>p-a483b520e0axxxxxxxxx</Id>\\n<Name>MyParameter</Name>","errorExample":""}]',
            'title' => '查看普通参数的多个版本对象',
            'summary' => '查看普通参数的多个版本对象。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetParametersByPath' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Path',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数路径，参数长度小于200个字符串。例如参数/parameter/myparameter，其中/parameter为此参数的路径。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '/parameter',
                    ],
                ],
                [
                    'name' => 'Recursive',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否递归查询路径。如参数/parameter/myparameter与/parameter/prameter1/myparameter，取值范围：'."\n"
                            .'- true（搜索出/parameter/myparameter与/parameter/prameter1/myparameter两个结果）'."\n"
                            .'- false（仅能搜索出/parameter/myparameter这一个结果）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzA',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：1-10。默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '25156E99-7437-4590-AA58-2ACA17DE405C',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的参数总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Parameters' => [
                                'description' => '参数信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '参数类型',
                                            'type' => 'string',
                                            'example' => 'StringList',
                                        ],
                                        'UpdatedDate' => [
                                            'description' => '参数更新时间',
                                            'type' => 'string',
                                            'example' => '2020-10-21T04:03:12Z',
                                        ],
                                        'UpdatedBy' => [
                                            'description' => '参数更新者',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                        'Value' => [
                                            'description' => '参数内容',
                                            'type' => 'string',
                                            'example' => '"parameter1,parameter2"',
                                        ],
                                        'Description' => [
                                            'description' => '参数的描述信息',
                                            'type' => 'string',
                                            'example' => 'parameter',
                                        ],
                                        'Constraints' => [
                                            'description' => '参数的约束条件',
                                            'type' => 'string',
                                            'example' => '{\\"MaxLength\\": 2}',
                                        ],
                                        'CreatedBy' => [
                                            'description' => '参数创建者',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                        'CreatedDate' => [
                                            'description' => '参数创建时间',
                                            'type' => 'string',
                                            'example' => '2020-10-21T04:03:12Z',
                                        ],
                                        'ParameterVersion' => [
                                            'description' => '参数版本号',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Name' => [
                                            'description' => '参数名称',
                                            'type' => 'string',
                                            'example' => 'myParameter',
                                        ],
                                        'Id' => [
                                            'description' => '参数ID',
                                            'type' => 'string',
                                            'example' => 'p-7cdc0000000000000000',
                                        ],
                                        'ShareType' => [
                                            'description' => '参数共享类型',
                                            'type' => 'string',
                                            'example' => 'Private',
                                        ],
                                        'Tags' => [
                                            'description' => '标签',
                                            'type' => 'object',
                                            'example' => '{"k1": "v1", "k2": "v2"}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC\\",\\n  \\"RequestId\\": \\"25156E99-7437-4590-AA58-2ACA17DE405C\\",\\n  \\"TotalCount\\": 1,\\n  \\"MaxResults\\": 10,\\n  \\"Parameters\\": [\\n    {\\n      \\"Type\\": \\"StringList\\",\\n      \\"UpdatedDate\\": \\"2020-10-21T04:03:12Z\\",\\n      \\"UpdatedBy\\": \\"root(130900000)\\",\\n      \\"Value\\": \\"\\\\\\"parameter1,parameter2\\\\\\"\\",\\n      \\"Description\\": \\"parameter\\",\\n      \\"Constraints\\": \\"{\\\\\\\\\\\\\\"MaxLength\\\\\\\\\\\\\\": 2}\\",\\n      \\"CreatedBy\\": \\"root(130900000)\\",\\n      \\"CreatedDate\\": \\"2020-10-21T04:03:12Z\\",\\n      \\"ParameterVersion\\": 1,\\n      \\"Name\\": \\"myParameter\\",\\n      \\"Id\\": \\"p-7cdc0000000000000000\\",\\n      \\"ShareType\\": \\"Private\\",\\n      \\"Tags\\": {\\n        \\"k1\\": \\"v1\\",\\n        \\"k2\\": \\"v2\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Parameters>\\n    <UpdatedBy>root(130900000)</UpdatedBy>\\n    <Type>StringList</Type>\\n    <CreatedBy>root(130900000)</CreatedBy>\\n    <Description/>\\n    <Constraints>{\\"MaxLength\\": 2}</Constraints>\\n    <UpdatedDate>2020-10-21T04:03:12Z</UpdatedDate>\\n    <ParameterVersion>1</ParameterVersion>\\n    <CreatedDate>2020-10-21T04:02:40Z</CreatedDate>\\n    <Value>parameter1,parameter2</Value>\\n    <Id>p-7cdc0000000000000000</Id>\\n    <Name>/parameter/myparameter</Name>\\n    <ShareType>Private</ShareType>\\n</Parameters>\\n<RequestId>25156E99-7437-4590-AA58-2ACA17DE405C</RequestId>\\n<MaxResults>10</MaxResults>","errorExample":""}]',
            'title' => '通过路径获取普通参数',
            'summary' => '通过路径获取参数。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetParameters' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Names',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数名称，可以由多个参数名称组成一个JSON数组，格式为 \\["xxxxxxxxx", "yyyyyyyyy", … "zzzzzzzzz"\\] ，最多支持10个参数名称，参数名称之间用半角逗号（,）隔开。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["parameter1","parameter2"]',
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
                                'example' => '2597E94B-5346-42D1-BB58-D3333EDD0975',
                            ],
                            'InvalidParameters' => [
                                'description' => '无效参数列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '无效参数',
                                    'type' => 'string',
                                    'example' => 'InvalidParameter',
                                ],
                            ],
                            'Parameters' => [
                                'description' => '参数信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '参数类型',
                                            'type' => 'string',
                                            'example' => 'StringList',
                                        ],
                                        'UpdatedDate' => [
                                            'description' => '参数更新时间',
                                            'type' => 'string',
                                            'example' => '2020-10-22T03:30:45Z',
                                        ],
                                        'UpdatedBy' => [
                                            'description' => '参数更新者',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                        'Tags' => [
                                            'description' => '标签',
                                            'type' => 'object',
                                            'example' => '{"k1": "v1", "k2": "v2"}',
                                        ],
                                        'Value' => [
                                            'description' => '参数值',
                                            'type' => 'string',
                                            'example' => 'parameter,parameter1',
                                        ],
                                        'Description' => [
                                            'description' => '参数的描述信息',
                                            'type' => 'string',
                                            'example' => 'parameter',
                                        ],
                                        'Constraints' => [
                                            'description' => '参数的约束条件',
                                            'type' => 'string',
                                            'example' => '{\\"MaxLength\\": 2}',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID',
                                            'type' => 'string',
                                            'example' => 'rg-acfmxsn4m4******',
                                        ],
                                        'CreatedBy' => [
                                            'description' => '参数创建者',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                        'CreatedDate' => [
                                            'description' => '参数创建时间',
                                            'type' => 'string',
                                            'example' => '2020-10-22T03:30:45Z',
                                        ],
                                        'ParameterVersion' => [
                                            'description' => '参数版本号',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Name' => [
                                            'description' => '参数名称',
                                            'type' => 'string',
                                            'example' => 'MyParameter',
                                        ],
                                        'Id' => [
                                            'description' => '参数ID',
                                            'type' => 'string',
                                            'example' => 'p-7cdc0000000000000000',
                                        ],
                                        'ShareType' => [
                                            'description' => '参数共享类型',
                                            'type' => 'string',
                                            'example' => 'Private',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2597E94B-5346-42D1-BB58-D3333EDD0975\\",\\n  \\"InvalidParameters\\": [\\n    \\"InvalidParameter\\"\\n  ],\\n  \\"Parameters\\": [\\n    {\\n      \\"Type\\": \\"StringList\\",\\n      \\"UpdatedDate\\": \\"2020-10-22T03:30:45Z\\",\\n      \\"UpdatedBy\\": \\"root(130900000)\\",\\n      \\"Tags\\": {\\n        \\"k1\\": \\"v1\\",\\n        \\"k2\\": \\"v2\\"\\n      },\\n      \\"Value\\": \\"parameter,parameter1\\",\\n      \\"Description\\": \\"parameter\\",\\n      \\"Constraints\\": \\"{\\\\\\\\\\\\\\"MaxLength\\\\\\\\\\\\\\": 2}\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n      \\"CreatedBy\\": \\"root(130900000)\\",\\n      \\"CreatedDate\\": \\"2020-10-22T03:30:45Z\\",\\n      \\"ParameterVersion\\": 1,\\n      \\"Name\\": \\"MyParameter\\",\\n      \\"Id\\": \\"p-7cdc0000000000000000\\",\\n      \\"ShareType\\": \\"Private\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetParametersResponse>\\n    <Parameters>\\n        <UpdatedBy>root(130900000)</UpdatedBy>\\n        <Type>StringList</Type>\\n        <CreatedBy>root(130900000)</CreatedBy>\\n        <Description>parameter</Description>\\n        <Constraints/>\\n        <UpdatedDate>2020-10-22T03:30:45Z</UpdatedDate>\\n        <ParameterVersion>2</ParameterVersion>\\n        <CreatedDate>2020-10-22T03:30:27Z</CreatedDate>\\n        <Value>parameter,parameter1</Value>\\n        <Id>p-7cdc0000000000000000</Id>\\n        <Name>MyParameter</Name>\\n        <Tags>\\n            <k1>v1</k1>\\n            <k2>v2</k2>\\n        </Tags>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <ShareType>Private</ShareType>\\n    </Parameters>\\n    <RequestId>2597E94B-5346-42D1-BB58-D3333EDD0975</RequestId>\\n    <InvalidParameters>InInvalidParameter</InvalidParameters>\\n</GetParametersResponse>","errorExample":""}]',
            'title' => '获取一个或多个普通参数的详细信息',
            'summary' => '获取一个或多个参数的详细信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateSecretParameter' => [
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
                'abilityTreeCode' => '93943',
                'abilityTreeNodes' => [
                    'FEATUREoosBA3MI8',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数名称。取值范围：内容限制为字母、数字、中划线、下划线，长度不能超过180字符，且不能以ALIYUN、ACS、ALIBABA、ALICLOUD、OOS开头。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MySecretParameter',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数类型。取值范围：Secret。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'Secret',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数内容。长度限制为4096。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'SecretParameter',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要给参数添加的描述信息。长度限制为200字符',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SecretParameter',
                    ],
                ],
                [
                    'name' => 'KeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加密使用的KMS的KeyId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '80e9409f-78fa-42ab-84bd-83f40c******',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。'."\n"
                            .'长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。'."\n"
                            .'更多详情，请参见如何保证幂等性。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e4567-e89b-12d3-a456-42665544****',
                    ],
                ],
                [
                    'name' => 'Constraints',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数的约束条件，默认为空，取值范围：'."\n"
                            ."\n"
                            .'- AllowedValues  参数允许值，数组类型的字符串'."\n"
                            ."\n"
                            .'- AllowedPattern  正则字符串'."\n"
                            ."\n"
                            .'- MinLength  参数最小长度'."\n"
                            ."\n"
                            .'- MaxLength  参数最大长度',
                        'type' => 'string',
                        'required' => false,
                        'example' => '\'{\'\'AllowedValues":["secretparameter"],"AllowedPattern":"secretparameter","MinLength":0,"MaxLength":20}\'',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"k1": "v1", "k2": "v2"}',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
                    ],
                ],
                [
                    'name' => 'DKMSInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'KMS实例的实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'kst-hzz****',
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
                                'example' => '0B419FF3-ABC6-4DF0-95E5-636DC8CBB8AF',
                            ],
                            'Parameter' => [
                                'description' => '加密参数信息',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'description' => '参数类型',
                                        'type' => 'string',
                                        'example' => 'Secret',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '参数更新时间',
                                        'type' => 'string',
                                        'example' => '2020-09-01T09:30:36Z',
                                    ],
                                    'UpdatedBy' => [
                                        'description' => '参数更新者',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'KeyId' => [
                                        'description' => '加密使用的KMS的KeyId',
                                        'type' => 'string',
                                        'example' => '80e9409f-78fa-42ab-84bd-83f40c******',
                                    ],
                                    'Tags' => [
                                        'description' => '标签',
                                        'type' => 'object',
                                        'example' => '{"k1": "v1", "k2": "v2"}',
                                    ],
                                    'Description' => [
                                        'description' => '参数描述信息',
                                        'type' => 'string',
                                        'example' => 'SecretParameter',
                                    ],
                                    'Constraints' => [
                                        'description' => '参数约束条件',
                                        'type' => 'string',
                                        'example' => '\'{ 	"AllowedValues": ["secretparameter"], 	"AllowedPattern": "secretparameter", 	"MinLength": 0, 	"MaxLength": 20 }\'',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组。',
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m4******',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '参数创建者',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '参数创建时间',
                                        'type' => 'string',
                                        'example' => '2020-09-01T09:30:36Z',
                                    ],
                                    'ParameterVersion' => [
                                        'description' => '参数版本号',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Name' => [
                                        'description' => '参数名称',
                                        'type' => 'string',
                                        'example' => 'MyParameter',
                                    ],
                                    'Id' => [
                                        'description' => '参数ID',
                                        'type' => 'string',
                                        'example' => 'p-0b0fff9919c946xxxxxx',
                                    ],
                                    'ShareType' => [
                                        'description' => '参数共享类型',
                                        'type' => 'string',
                                        'example' => 'Private',
                                    ],
                                    'DKMSInstanceId' => [
                                        'description' => 'KMS实例的实例ID。',
                                        'type' => 'string',
                                        'example' => 'kst-hzz****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0B419FF3-ABC6-4DF0-95E5-636DC8CBB8AF\\",\\n  \\"Parameter\\": {\\n    \\"Type\\": \\"Secret\\",\\n    \\"UpdatedDate\\": \\"2020-09-01T09:30:36Z\\",\\n    \\"UpdatedBy\\": \\"root(130900000)\\",\\n    \\"KeyId\\": \\"80e9409f-78fa-42ab-84bd-83f40c******\\",\\n    \\"Tags\\": {\\n      \\"k1\\": \\"v1\\",\\n      \\"k2\\": \\"v2\\"\\n    },\\n    \\"Description\\": \\"SecretParameter\\",\\n    \\"Constraints\\": \\"\'{ \\\\t\\\\\\"AllowedValues\\\\\\": [\\\\\\"secretparameter\\\\\\"], \\\\t\\\\\\"AllowedPattern\\\\\\": \\\\\\"secretparameter\\\\\\", \\\\t\\\\\\"MinLength\\\\\\": 0, \\\\t\\\\\\"MaxLength\\\\\\": 20 }\'\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n    \\"CreatedBy\\": \\"root(130900000)\\",\\n    \\"CreatedDate\\": \\"2020-09-01T09:30:36Z\\",\\n    \\"ParameterVersion\\": 1,\\n    \\"Name\\": \\"MyParameter\\",\\n    \\"Id\\": \\"p-0b0fff9919c946xxxxxx\\",\\n    \\"ShareType\\": \\"Private\\",\\n    \\"DKMSInstanceId\\": \\"kst-hzz****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateSecretParameterResponse>\\n    <RequestId>0B419FF3-ABC6-4DF0-95E5-636DC8CBB8AF</RequestId>\\n    <Parameter>\\n        <Type>Secret</Type>\\n        <UpdatedDate>2020-09-01T09:30:36Z</UpdatedDate>\\n        <UpdatedBy>root(130900000)</UpdatedBy>\\n        <KeyId>80e9409f-78fa-42ab-84bd-83f40c******</KeyId>\\n        <Tags>\\n            <k1>v1</k1>\\n            <k2>v2</k2>\\n        </Tags>\\n        <Description>SecretParameter</Description>\\n        <Constraints>\'{ \\t\\"AllowedValues\\": [\\"secretparameter\\"], \\t\\"AllowedPattern\\": \\"secretparameter\\", \\t\\"MinLength\\": 0, \\t\\"MaxLength\\": 20 }\'</Constraints>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <CreatedBy>root(130900000)</CreatedBy>\\n        <CreatedDate>2020-09-01T09:30:36Z</CreatedDate>\\n        <ParameterVersion>1</ParameterVersion>\\n        <Name>MyParameter</Name>\\n        <Id>p-0b0fff9919c946xxxxxx</Id>\\n        <ShareType>Private</ShareType>\\n    </Parameter>\\n</CreateSecretParameterResponse>","errorExample":""}]',
            'title' => '创建一个加密参数',
            'summary' => '创建一个加密参数。请确保在使用该接口前有操作kms CreateSecret API的权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteSecretParameter' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加密参数名称。取值范围：内容限制为字母、数字、中划线、下划线，长度不能超过180字符，且不能以ALIYUN、ACS、ALIBABA、ALICLOUD、OOS开头。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MySecretParameter',
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
                                'example' => 'C0D02BDF-77F6-49F2-95C9-8E87121D1944',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C0D02BDF-77F6-49F2-95C9-8E87121D1944\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C0D02BDF-77F6-49F2-95C9-8E87121D1944</RequestId>","errorExample":""}]',
            'title' => '删除一个加密参数',
            'summary' => '删除一个加密参数。请确保在使用该接口前有操作kms DeleteSecret API的权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateSecretParameter' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数名称。取值范围：内容限制为字母、数字、中划线、下划线，长度不能超过180字符，且不能以ALIYUN、ACS、ALIBABA、ALICLOUD、OOS开头。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MySecretParameter',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数内容。长度限制为4096。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'update',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要给加密参数添加的描述信息。长度限制为200字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SecretParameter',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"k1": "v1", "k2": "v2"}',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
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
                                'example' => '0B419FF3-ABC6-4DF0-95E5-636DC8CBB8AF',
                            ],
                            'Parameter' => [
                                'description' => '加密参数信息',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'description' => '参数类型',
                                        'type' => 'string',
                                        'example' => 'Secret',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '参数更新时间',
                                        'type' => 'string',
                                        'example' => '2020-09-01T09:33:11Z',
                                    ],
                                    'UpdatedBy' => [
                                        'description' => '参数更新者',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'KeyId' => [
                                        'description' => '加密使用的KMS的KeyId',
                                        'type' => 'string',
                                        'example' => '80e9409f-78fa-42ab-84bd-83f40c******',
                                    ],
                                    'Tags' => [
                                        'description' => '标签。',
                                        'type' => 'string',
                                        'example' => '{"k1": "v1", "k2": "v2"}',
                                    ],
                                    'Description' => [
                                        'description' => '参数描述信息',
                                        'type' => 'string',
                                        'example' => 'SecretParameter',
                                    ],
                                    'Constraints' => [
                                        'description' => '参数约束条件',
                                        'type' => 'string',
                                        'example' => '\'{\'\'AllowedValues":["secretparameter"],"AllowedPattern":".*","MinLength":0,"MaxLength":20}\'',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID',
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m4******',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '参数创建者',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '参数创建时间',
                                        'type' => 'string',
                                        'example' => '2020-09-01T09:30:36Z',
                                    ],
                                    'ParameterVersion' => [
                                        'description' => '参数版本',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'Name' => [
                                        'description' => '参数名称',
                                        'type' => 'string',
                                        'example' => 'MyParameter',
                                    ],
                                    'Id' => [
                                        'description' => '参数Id',
                                        'type' => 'string',
                                        'example' => 'p-0b0fff9919c946xxxxxx',
                                    ],
                                    'ShareType' => [
                                        'description' => '参数共享类型',
                                        'type' => 'string',
                                        'example' => 'Private',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0B419FF3-ABC6-4DF0-95E5-636DC8CBB8AF\\",\\n  \\"Parameter\\": {\\n    \\"Type\\": \\"Secret\\",\\n    \\"UpdatedDate\\": \\"2020-09-01T09:33:11Z\\",\\n    \\"UpdatedBy\\": \\"root(130900000)\\",\\n    \\"KeyId\\": \\"80e9409f-78fa-42ab-84bd-83f40c******\\",\\n    \\"Tags\\": \\"{\\\\\\"k1\\\\\\": \\\\\\"v1\\\\\\", \\\\\\"k2\\\\\\": \\\\\\"v2\\\\\\"}\\",\\n    \\"Description\\": \\"SecretParameter\\",\\n    \\"Constraints\\": \\"\'{\'\'AllowedValues\\\\\\":[\\\\\\"secretparameter\\\\\\"],\\\\\\"AllowedPattern\\\\\\":\\\\\\".*\\\\\\",\\\\\\"MinLength\\\\\\":0,\\\\\\"MaxLength\\\\\\":20}\'\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n    \\"CreatedBy\\": \\"root(130900000)\\",\\n    \\"CreatedDate\\": \\"2020-09-01T09:30:36Z\\",\\n    \\"ParameterVersion\\": 2,\\n    \\"Name\\": \\"MyParameter\\",\\n    \\"Id\\": \\"p-0b0fff9919c946xxxxxx\\",\\n    \\"ShareType\\": \\"Private\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateSecretParameterResponse>\\n    <RequestId>0B419FF3-ABC6-4DF0-95E5-636DC8CBB8AF</RequestId>\\n    <Parameter>\\n        <Type>Secret</Type>\\n        <UpdatedDate>2020-09-01T09:33:11Z</UpdatedDate>\\n        <UpdatedBy>root(130900000)</UpdatedBy>\\n        <KeyId>80e9409f-78fa-42ab-84bd-83f40c******</KeyId>\\n        <Tags>{\\"k1\\": \\"v1\\", \\"k2\\": \\"v2\\"}</Tags>\\n        <Description>SecretParameter</Description>\\n        <Constraints>\'{\'\'AllowedValues\\":[\\"secretparameter\\"],\\"AllowedPattern\\":\\".*\\",\\"MinLength\\":0,\\"MaxLength\\":20}\'</Constraints>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <CreatedBy>root(130900000)</CreatedBy>\\n        <CreatedDate>2020-09-01T09:30:36Z</CreatedDate>\\n        <ParameterVersion>2</ParameterVersion>\\n        <Name>MyParameter</Name>\\n        <Id>p-0b0fff9919c946xxxxxx</Id>\\n        <ShareType>Private</ShareType>\\n    </Parameter>\\n</UpdateSecretParameterResponse>","errorExample":""}]',
            'title' => '更新一个加密参数',
            'summary' => '更新一个加密参数。请确保在使用该接口前有操作kms UpdateSecretValue API的权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetSecretParameter' => [
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
                'operationType' => 'get',
                'abilityTreeCode' => '93965',
                'abilityTreeNodes' => [
                    'FEATUREoosBA3MI8',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数名称。取值范围：内容限制为字母、数字、中划线、下划线，长度不能超过180字符，且不能以ALIYUN、ACS、ALIBABA、ALICLOUD、OOS开头。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MySecretParameter',
                    ],
                ],
                [
                    'name' => 'ParameterVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数版本号。取值范围：1-100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'WithDecryption',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否解密参数值。只有参数为true时，返回值的value才会有结果，否则为空。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '加密参数的信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7F14FB7C-C9BE-44AE-92ED-21ACC02FBFD2',
                            ],
                            'Parameter' => [
                                'description' => '加密参数信息',
                                'type' => 'object',
                                'properties' => [
                                    'Type' => [
                                        'description' => '参数类型',
                                        'type' => 'string',
                                        'example' => 'Secret',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '参数更新时间',
                                        'type' => 'string',
                                        'example' => '2020-09-01T09:35:17Z',
                                    ],
                                    'UpdatedBy' => [
                                        'description' => '参数更新者',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'KeyId' => [
                                        'description' => '加密使用的KMS 的KeyId',
                                        'type' => 'string',
                                        'example' => '80e9409f-78fa-42ab-84bd-83f40c******',
                                    ],
                                    'Tags' => [
                                        'description' => '标签',
                                        'type' => 'object',
                                        'example' => '{"k1": "v1", "k2": "v2"}',
                                    ],
                                    'Value' => [
                                        'description' => '参数内容',
                                        'type' => 'string',
                                        'example' => 'SecretParameter',
                                    ],
                                    'Description' => [
                                        'description' => '参数描述信息',
                                        'type' => 'string',
                                        'example' => 'SecretParameter',
                                    ],
                                    'Constraints' => [
                                        'description' => '参数约束条件',
                                        'type' => 'string',
                                        'example' => '\'{\'\'AllowedValues":["secretparameter"],"AllowedPattern":".*","MinLength":0,"MaxLength":20}\'',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID',
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m4******',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '参数创建者',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '参数创建时间',
                                        'type' => 'string',
                                        'example' => '2020-09-01T09:28:47Z',
                                    ],
                                    'ParameterVersion' => [
                                        'description' => '参数版本号',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Name' => [
                                        'description' => '加密参数名称',
                                        'type' => 'string',
                                        'example' => 'MySecretParameter',
                                    ],
                                    'Id' => [
                                        'description' => '加密参数Id',
                                        'type' => 'string',
                                        'example' => 'p-14ed150fdcd048xxxxxx',
                                    ],
                                    'ShareType' => [
                                        'description' => '参数共享类型',
                                        'type' => 'string',
                                        'example' => 'Private',
                                    ],
                                    'DKMSInstanceId' => [
                                        'description' => 'KMS实例的实例ID。',
                                        'type' => 'string',
                                        'example' => 'kst-hzz****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7F14FB7C-C9BE-44AE-92ED-21ACC02FBFD2\\",\\n  \\"Parameter\\": {\\n    \\"Type\\": \\"Secret\\",\\n    \\"UpdatedDate\\": \\"2020-09-01T09:35:17Z\\",\\n    \\"UpdatedBy\\": \\"root(130900000)\\",\\n    \\"KeyId\\": \\"80e9409f-78fa-42ab-84bd-83f40c******\\",\\n    \\"Tags\\": {\\n      \\"k1\\": \\"v1\\",\\n      \\"k2\\": \\"v2\\"\\n    },\\n    \\"Value\\": \\"SecretParameter\\",\\n    \\"Description\\": \\"SecretParameter\\",\\n    \\"Constraints\\": \\"\'{\'\'AllowedValues\\\\\\":[\\\\\\"secretparameter\\\\\\"],\\\\\\"AllowedPattern\\\\\\":\\\\\\".*\\\\\\",\\\\\\"MinLength\\\\\\":0,\\\\\\"MaxLength\\\\\\":20}\'\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n    \\"CreatedBy\\": \\"root(130900000)\\",\\n    \\"CreatedDate\\": \\"2020-09-01T09:28:47Z\\",\\n    \\"ParameterVersion\\": 1,\\n    \\"Name\\": \\"MySecretParameter\\",\\n    \\"Id\\": \\"p-14ed150fdcd048xxxxxx\\",\\n    \\"ShareType\\": \\"Private\\",\\n    \\"DKMSInstanceId\\": \\"kst-hzz****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSecretParameterResponse>\\n    <RequestId>7F14FB7C-C9BE-44AE-92ED-21ACC02FBFD2</RequestId>\\n    <Parameter>\\n        <Type>Secret</Type>\\n        <UpdatedDate>2020-09-01T09:35:17Z</UpdatedDate>\\n        <UpdatedBy>root(130900000)</UpdatedBy>\\n        <KeyId>80e9409f-78fa-42ab-84bd-83f40c******</KeyId>\\n        <Value>SecretParameter</Value>\\n        <Description>SecretParameter</Description>\\n        <Constraints>\'{\'\'AllowedValues\\":[\\"secretparameter\\"],\\"AllowedPattern\\":\\".*\\",\\"MinLength\\":0,\\"MaxLength\\":20}\'</Constraints>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <CreatedBy>root(130900000)</CreatedBy>\\n        <CreatedDate>2020-09-01T09:28:47Z</CreatedDate>\\n        <ParameterVersion>1</ParameterVersion>\\n        <Name>MySecretParameter</Name>\\n        <Id>p-14ed150fdcd048xxxxxx</Id>\\n        <Tags>\\n            <k1>v1</k1>\\n            <k2>v2</k2>\\n        </Tags>\\n        <ShareType>Private</ShareType>\\n    </Parameter>\\n</GetSecretParameterResponse>","errorExample":""}]',
            'title' => '获取一个加密参数和参数值',
            'summary' => '获取一个加密参数，包括参数值。请确保在使用该接口前有操作kms GetSecretValue API的权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListSecretParameters' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数名称。**本Action下的Name为模糊匹配。**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MySecretParameter',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：10-100。默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '10',
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sPH90GZOVGC6KPDUL0FIIbEtMQHq_19S6_4O_XqA',
                    ],
                ],
                [
                    'name' => 'SortField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据字段排序。取值范围：'."\n"
                            ."\n"
                            .'- Name（参数名称）'."\n"
                            ."\n"
                            .'- CreatedDate（创建时间）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Name',
                    ],
                ],
                [
                    'name' => 'SortOrder',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序顺序。取值范围：'."\n"
                            ."\n"
                            .'- Ascending（升序）'."\n"
                            ."\n"
                            .'- Descending（默认值）：降序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Descending',
                    ],
                ],
                [
                    'name' => 'Path',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数路径。例如：Name为/path/path1/Myparameter 此时包含参数路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/path1/path2/',
                    ],
                ],
                [
                    'name' => 'Recursive',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数路径是否递归。'."\n"
                            .'默认：false',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"k1": "v1", "k2": "v2"}',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'sPH90GZOVGC6KPDUL0FIIbEtMQHq_19S6_4O_XqA',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CA9C6248-AF2A-4AE9-A166-88FD901BBB90',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Parameters' => [
                                'description' => '加密参数信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '参数类型',
                                            'type' => 'string',
                                            'example' => 'Secret',
                                        ],
                                        'UpdatedDate' => [
                                            'description' => '参数更新时间',
                                            'type' => 'string',
                                            'example' => '2020-09-01T09:35:17Z',
                                        ],
                                        'UpdatedBy' => [
                                            'description' => '参数更新者',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                        'KeyId' => [
                                            'description' => '加密使用的KMS的KeyId',
                                            'type' => 'string',
                                            'example' => '80e9409f-78fa-42ab-84bd-83f40c******',
                                        ],
                                        'Tags' => [
                                            'description' => '标签',
                                            'type' => 'object',
                                            'example' => '{"k1": "v1", "k2": "v2"}',
                                        ],
                                        'Description' => [
                                            'description' => '参数描述信息',
                                            'type' => 'string',
                                            'example' => 'SecretParameter',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID',
                                            'type' => 'string',
                                            'example' => 'rg-acfmxsn4m4******',
                                        ],
                                        'CreatedBy' => [
                                            'description' => '参数创建者',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                        'CreatedDate' => [
                                            'description' => '参数创建时间',
                                            'type' => 'string',
                                            'example' => '2020-09-01T09:28:47Z',
                                        ],
                                        'ParameterVersion' => [
                                            'description' => '参数版本',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'Name' => [
                                            'description' => '参数名称',
                                            'type' => 'string',
                                            'example' => 'MySecretParameter',
                                        ],
                                        'Id' => [
                                            'description' => '加密参数Id',
                                            'type' => 'string',
                                            'example' => 'p-14ed150fdcd048xxxxxx',
                                        ],
                                        'ShareType' => [
                                            'description' => '参数共享类型',
                                            'type' => 'string',
                                            'example' => 'Private',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"sPH90GZOVGC6KPDUL0FIIbEtMQHq_19S6_4O_XqA\\",\\n  \\"RequestId\\": \\"CA9C6248-AF2A-4AE9-A166-88FD901BBB90\\",\\n  \\"MaxResults\\": 50,\\n  \\"Parameters\\": [\\n    {\\n      \\"Type\\": \\"Secret\\",\\n      \\"UpdatedDate\\": \\"2020-09-01T09:35:17Z\\",\\n      \\"UpdatedBy\\": \\"root(130900000)\\",\\n      \\"KeyId\\": \\"80e9409f-78fa-42ab-84bd-83f40c******\\",\\n      \\"Tags\\": {\\n        \\"k1\\": \\"v1\\",\\n        \\"k2\\": \\"v2\\"\\n      },\\n      \\"Description\\": \\"SecretParameter\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n      \\"CreatedBy\\": \\"root(130900000)\\",\\n      \\"CreatedDate\\": \\"2020-09-01T09:28:47Z\\",\\n      \\"ParameterVersion\\": \\"1\\",\\n      \\"Name\\": \\"MySecretParameter\\",\\n      \\"Id\\": \\"p-14ed150fdcd048xxxxxx\\",\\n      \\"ShareType\\": \\"Private\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListSecretParametersResponse>\\n    <NextToken>sPH90GZOVGC6KPDUL0FIIbEtMQHq_19S6_4O_XqA</NextToken>\\n    <RequestId>CA9C6248-AF2A-4AE9-A166-88FD901BBB90</RequestId>\\n    <MaxResults>50</MaxResults>\\n    <Parameters>\\n        <Type>Secret</Type>\\n        <UpdatedDate>2020-09-01T09:35:17Z</UpdatedDate>\\n        <UpdatedBy>root(130900000)</UpdatedBy>\\n        <KeyId>80e9409f-78fa-42ab-84bd-83f40c******</KeyId>\\n        <Description>SecretParameter</Description>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <CreatedBy>root(130900000)</CreatedBy>\\n        <CreatedDate>2020-09-01T09:28:47Z</CreatedDate>\\n        <ParameterVersion>1</ParameterVersion>\\n        <Name>MySecretParameter</Name>\\n        <Id>p-14ed150fdcd048xxxxxx</Id>\\n        <Tags>\\n            <k1>v1</k1>\\n            <k2>v2</k2>\\n        </Tags>\\n        <ShareType>Private</ShareType>\\n    </Parameters>\\n</ListSecretParametersResponse>","errorExample":""}]',
            'title' => '获取加密参数列表',
            'summary' => '查询普通参数，支持多种查询。',
            'description' => '请确保在使用该接口前有操作KMS secret对应权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListSecretParameterVersions' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MySecretParameter',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：10-100。默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '10',
                        'example' => '10',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB',
                    ],
                ],
                [
                    'name' => 'ShareType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数共享类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Private',
                    ],
                ],
                [
                    'name' => 'WithDecryption',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否解密参数值。只有参数为true时，返回值的value才会有结果，否则为空。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '加密参数的信息。',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'description' => '参数类型',
                                'type' => 'string',
                                'example' => 'Secret',
                            ],
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DBA6E6C8-F75D-41DE-AFF5-1FA03F551CA3',
                            ],
                            'Description' => [
                                'description' => '参数描述信息',
                                'type' => 'string',
                                'example' => 'SecretParameter',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'CreatedBy' => [
                                'description' => '参数创建者',
                                'type' => 'string',
                                'example' => 'root(130900000)',
                            ],
                            'CreatedDate' => [
                                'description' => '参数创建时间',
                                'type' => 'string',
                                'example' => '2020-09-01T08:01:43Z',
                            ],
                            'Name' => [
                                'description' => '参数名称',
                                'type' => 'string',
                                'example' => 'MySecretParameter',
                            ],
                            'TotalCount' => [
                                'description' => '返回结果总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Id' => [
                                'description' => '参数Id',
                                'type' => 'string',
                                'example' => 'p-4c4b401cab6747xxxxxx',
                            ],
                            'ParameterVersions' => [
                                'description' => '参数版本信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '版本信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'ParameterVersion' => [
                                            'description' => '参数版本号',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Value' => [
                                            'description' => '参数值',
                                            'type' => 'string',
                                            'example' => 'SecretParameter',
                                        ],
                                        'UpdatedDate' => [
                                            'description' => '参数更新日期',
                                            'type' => 'string',
                                            'example' => '2020-09-01T08:01:43Z',
                                        ],
                                        'UpdatedBy' => [
                                            'description' => '参数更新者',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Type\\": \\"Secret\\",\\n  \\"NextToken\\": \\"MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB\\",\\n  \\"RequestId\\": \\"DBA6E6C8-F75D-41DE-AFF5-1FA03F551CA3\\",\\n  \\"Description\\": \\"SecretParameter\\",\\n  \\"MaxResults\\": 50,\\n  \\"CreatedBy\\": \\"root(130900000)\\",\\n  \\"CreatedDate\\": \\"2020-09-01T08:01:43Z\\",\\n  \\"Name\\": \\"MySecretParameter\\",\\n  \\"TotalCount\\": 1,\\n  \\"Id\\": \\"p-4c4b401cab6747xxxxxx\\",\\n  \\"ParameterVersions\\": [\\n    {\\n      \\"ParameterVersion\\": 1,\\n      \\"Value\\": \\"SecretParameter\\",\\n      \\"UpdatedDate\\": \\"2020-09-01T08:01:43Z\\",\\n      \\"UpdatedBy\\": \\"root(130900000)\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Parameters>\\n    <UpdatedBy>root(130900000)</UpdatedBy>\\n    <Type>Secret</Type>\\n    <CreatedBy>root(130900000)</CreatedBy>\\n    <Description>secret-test</Description>\\n    <UpdatedDate>2020-09-02T11:44:11Z</UpdatedDate>\\n    <ParameterVersion>3</ParameterVersion>\\n    <CreatedDate>2020-09-02T11:44:01Z</CreatedDate>\\n    <Id>p-e4e117b5c6c941xxxxxx</Id>\\n    <Name>secret-test1</Name>\\n    <ShareType>Private</ShareType>\\n</Parameters>\\n<RequestId>DBA6E6C8-F75D-41DE-AFF5-1FA03F551CA3</RequestId>\\n<MaxResults>50</MaxResults>","errorExample":""}]',
            'title' => '查询加密参数的多个版本对象',
            'summary' => '查询加密参数的多个版本对象。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetSecretParametersByPath' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Path',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数路径，参数长度小于200个字符串。例如参数/secretParameter/mySecretParameter，其中/secretParameter为此参数的路径。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '/secretParameter',
                    ],
                ],
                [
                    'name' => 'Recursive',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否递归查询路径。如参数/secretParameter/mySecretParameter与/secretParameter/secretParameter1/mySecretParameter，取值范围：'."\n"
                            .'- true（搜索出//secretParameter/mySecretParameter与/secretParameter/secretParameter1/mySecretParameter两个结果）'."\n"
                            .'- false（仅能搜索出/secretParameter/mySecretParameter这一个结果）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzA',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：1-10。默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'WithDecryption',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否解密参数值。'."\n"
                            .'取值范围：'."\n"
                            .'- true'."\n"
                            .'- false（默认）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '25156E99-7437-4590-AA58-2ACA17DE405C',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的加密参数总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Parameters' => [
                                'description' => '参数信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '参数类型'."\n",
                                            'type' => 'string',
                                            'example' => 'Secret',
                                        ],
                                        'UpdatedDate' => [
                                            'description' => '参数更新时间'."\n",
                                            'type' => 'string',
                                            'example' => '2020-10-21T06:22:48Z',
                                        ],
                                        'UpdatedBy' => [
                                            'description' => '参数更新者'."\n",
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                        'KeyId' => [
                                            'description' => '密钥ID',
                                            'type' => 'string',
                                            'example' => '090xxbex-xexx-xxxx-axfc-ddxxcxxxxcex',
                                        ],
                                        'Value' => [
                                            'description' => '参数内容'."\n",
                                            'type' => 'string',
                                            'example' => 'secretParameter',
                                        ],
                                        'Description' => [
                                            'description' => '参数的描述信息'."\n",
                                            'type' => 'string',
                                            'example' => 'secretParameter',
                                        ],
                                        'Constraints' => [
                                            'description' => '参数的约束条件',
                                            'type' => 'string',
                                            'example' => '{\\"AllowedPattern\\": \\"^[a-g]*$\\"}',
                                        ],
                                        'CreatedBy' => [
                                            'description' => '参数创建者',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                        'CreatedDate' => [
                                            'description' => '参数更新时间'."\n",
                                            'type' => 'string',
                                            'example' => '2020-10-21T06:22:48Z',
                                        ],
                                        'ParameterVersion' => [
                                            'description' => '参数版本号'."\n",
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Name' => [
                                            'description' => '参数名称'."\n",
                                            'type' => 'string',
                                            'example' => 'mySecretParameter',
                                        ],
                                        'Id' => [
                                            'description' => '参数ID'."\n",
                                            'type' => 'string',
                                            'example' => 'p-7cdc0000000000000000',
                                        ],
                                        'ShareType' => [
                                            'description' => '参数共享类型'."\n",
                                            'type' => 'string',
                                            'example' => 'Private',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC\\",\\n  \\"RequestId\\": \\"25156E99-7437-4590-AA58-2ACA17DE405C\\",\\n  \\"TotalCount\\": 10,\\n  \\"MaxResults\\": 10,\\n  \\"Parameters\\": [\\n    {\\n      \\"Type\\": \\"Secret\\",\\n      \\"UpdatedDate\\": \\"2020-10-21T06:22:48Z\\",\\n      \\"UpdatedBy\\": \\"root(130900000)\\",\\n      \\"KeyId\\": \\"090xxbex-xexx-xxxx-axfc-ddxxcxxxxcex\\",\\n      \\"Value\\": \\"secretParameter\\",\\n      \\"Description\\": \\"secretParameter\\",\\n      \\"Constraints\\": \\"{\\\\\\\\\\\\\\"AllowedPattern\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"^[a-g]*$\\\\\\\\\\\\\\"}\\",\\n      \\"CreatedBy\\": \\"root(130900000)\\",\\n      \\"CreatedDate\\": \\"2020-10-21T06:22:48Z\\",\\n      \\"ParameterVersion\\": 1,\\n      \\"Name\\": \\"mySecretParameter\\",\\n      \\"Id\\": \\"p-7cdc0000000000000000\\",\\n      \\"ShareType\\": \\"Private\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Parameters>\\n    <UpdatedBy>root(130900000)</UpdatedBy>\\n    <Type>Secret</Type>\\n    <CreatedBy>root(130900000)</CreatedBy>\\n    <Description>secretParameter</Description>\\n    <Constraints>{\\"AllowedPattern\\": \\"^[a-g]*$\\"}</Constraints>\\n    <UpdatedDate>2020-10-21T06:22:48Z</UpdatedDate>\\n    <ParameterVersion>3</ParameterVersion>\\n    <CreatedDate>2020-10-21T03:28:33Z</CreatedDate>\\n    <Value>secretParameter</Value>\\n    <KeyId>090xxbex-xexx-xxxx-axfc-ddxxcxxxxcex</KeyId>\\n    <Id>p-7cdc0000000000000000</Id>\\n    <Name>mySecretParameter</Name>\\n    <ShareType>Private</ShareType>\\n</Parameters>\\n<RequestId>14F404A1-0863-4BB3-B884-78FCE6075DA8</RequestId>\\n<MaxResults>10</MaxResults>","errorExample":""}]',
            'title' => '通过路径获取加密参数',
            'summary' => '通过路径获取加密参数。请确保在使用该接口前有操作kms GetSecretValue API的权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetSecretParameters' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Names',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数名称，可以由多个参数名称组成一个JSON数组，格式为 \\["xxxxxxxxx", "yyyyyyyyy", … "zzzzzzzzz"\\] ，最多支持10个参数名称，参数名称之间用半角逗号（,）隔开。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["secretParameter","secretParameter1"]',
                    ],
                ],
                [
                    'name' => 'WithDecryption',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否解密参数值。'."\n"
                            .'取值范围：'."\n"
                            .'- true'."\n"
                            .'- false（默认）',
                        'type' => 'boolean',
                        'required' => false,
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A5320F1D-92D9-44BB-A416-5FC525ED6D57',
                            ],
                            'InvalidParameters' => [
                                'description' => '无效的参数',
                                'type' => 'array',
                                'items' => [
                                    'description' => '无效的参数名称列表',
                                    'type' => 'string',
                                    'example' => '[ "InvalidSecretParameter"]',
                                ],
                            ],
                            'Parameters' => [
                                'description' => '参数信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '参数类型',
                                            'type' => 'string',
                                            'example' => 'Secret',
                                        ],
                                        'UpdatedDate' => [
                                            'description' => '参数更新时间',
                                            'type' => 'string',
                                            'example' => '2020-10-22T03:11:13Z',
                                        ],
                                        'UpdatedBy' => [
                                            'description' => '参数更新者',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                        'KeyId' => [
                                            'description' => '密钥ID',
                                            'type' => 'string',
                                            'example' => 'ssh-bp67acfmxazb4p****',
                                        ],
                                        'Tags' => [
                                            'description' => '标签',
                                            'type' => 'object',
                                            'example' => '{"k1": "v1", "k2": "v2"}',
                                        ],
                                        'Value' => [
                                            'description' => '参数值',
                                            'type' => 'string',
                                            'example' => 'secretParameter,secretParameter1',
                                        ],
                                        'Description' => [
                                            'description' => '参数的描述信息',
                                            'type' => 'string',
                                            'example' => 'secretParameter',
                                        ],
                                        'Constraints' => [
                                            'description' => '参数的约束条件',
                                            'type' => 'string',
                                            'example' => '{\\"AllowedValues\\": [\\"test\\"]}',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID',
                                            'type' => 'string',
                                            'example' => 'rg-acfmxsn4m4******',
                                        ],
                                        'CreatedBy' => [
                                            'description' => '参数创建者',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                        'CreatedDate' => [
                                            'description' => '参数创建时间',
                                            'type' => 'string',
                                            'example' => '2020-10-22T03:11:13Z',
                                        ],
                                        'ParameterVersion' => [
                                            'description' => '参数版本号',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Name' => [
                                            'description' => '参数名称',
                                            'type' => 'string',
                                            'example' => 'MySecretParameter',
                                        ],
                                        'Id' => [
                                            'description' => '参数ID',
                                            'type' => 'string',
                                            'example' => 'p-7cdc0000000000000000',
                                        ],
                                        'ShareType' => [
                                            'description' => '参数共享类型',
                                            'type' => 'string',
                                            'example' => 'Private',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A5320F1D-92D9-44BB-A416-5FC525ED6D57\\",\\n  \\"InvalidParameters\\": [\\n    \\"[ \\\\\\"InvalidSecretParameter\\\\\\"]\\"\\n  ],\\n  \\"Parameters\\": [\\n    {\\n      \\"Type\\": \\"Secret\\",\\n      \\"UpdatedDate\\": \\"2020-10-22T03:11:13Z\\",\\n      \\"UpdatedBy\\": \\"root(130900000)\\",\\n      \\"KeyId\\": \\"ssh-bp67acfmxazb4p****\\",\\n      \\"Tags\\": {\\n        \\"k1\\": \\"v1\\",\\n        \\"k2\\": \\"v2\\"\\n      },\\n      \\"Value\\": \\"secretParameter,secretParameter1\\",\\n      \\"Description\\": \\"secretParameter\\",\\n      \\"Constraints\\": \\"{\\\\\\\\\\\\\\"AllowedValues\\\\\\\\\\\\\\": [\\\\\\\\\\\\\\"test\\\\\\\\\\\\\\"]}\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n      \\"CreatedBy\\": \\"root(130900000)\\",\\n      \\"CreatedDate\\": \\"2020-10-22T03:11:13Z\\",\\n      \\"ParameterVersion\\": 1,\\n      \\"Name\\": \\"MySecretParameter\\",\\n      \\"Id\\": \\"p-7cdc0000000000000000\\",\\n      \\"ShareType\\": \\"Private\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetSecretParametersResponse>\\n    <RequestId>A5320F1D-92D9-44BB-A416-5FC525ED6D57</RequestId>\\n    <InvalidParameters>[ \\"InvalidSecretParameter\\"]</InvalidParameters>\\n    <Parameters>\\n        <Type>Secret</Type>\\n        <UpdatedDate>2020-10-22T03:11:13Z</UpdatedDate>\\n        <UpdatedBy>root(130900000)</UpdatedBy>\\n        <KeyId>ssh-bp67acfmxazb4p****</KeyId>\\n        <Value>secretParameter,secretParameter1</Value>\\n        <Description>secretParameter</Description>\\n        <Constraints>{\\\\\\"AllowedValues\\\\\\": [\\\\\\"test\\\\\\"]}</Constraints>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <CreatedBy>root(130900000)</CreatedBy>\\n        <CreatedDate>2020-10-22T03:11:13Z</CreatedDate>\\n        <ParameterVersion>1</ParameterVersion>\\n        <Name>MySecretParameter</Name>\\n        <Id>p-7cdc0000000000000000</Id>\\n        <Tags>\\n            <k1>v1</k1>\\n            <k2>v2</k2>\\n        </Tags>\\n        <ShareType>Private</ShareType>\\n    </Parameters>\\n</GetSecretParametersResponse>","errorExample":""}]',
            'title' => '获取一个或多个加密参数的详细信息',
            'summary' => '获取一个或多个加密参数的详细信息。请确保在使用该接口前有操作kms GetSecretValue API的权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreatePatchBaseline' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补丁基线名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyPatchBaseline',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补丁基线描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PatchBaseline',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-CreatePatchBaseline-1638429101-845b22f9-f29b-4bb3-bf4b-e6b2da',
                    ],
                ],
                [
                    'name' => 'OperationSystem',
                    'in' => 'query',
                    'schema' => [
                        'description' => '操作系统类型。支持：'."\n"
                            .'- Windows'."\n"
                            .'- Ubuntu'."\n"
                            .'- CentOS'."\n"
                            .'- Debian'."\n"
                            .'- AliyunLinux'."\n"
                            .'- RedhatEnterpriseLinux'."\n"
                            .'- Anolis'."\n"
                            .'- AlmaLinux',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Windows',
                    ],
                ],
                [
                    'name' => 'ApprovalRules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接受规则。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"PatchRules":[{"PatchFilterGroup":[{"Key":"PatchSet","Values":["OS"]},{"Key":"ProductFamily","Values":["Windows"]},{"Key":"Product","Values":["Windows 10","Windows 7"]},{"Key":"Classification","Values":["Security Updates","Updates","Update Rollups","Critical Updates"]},{"Key":"Severity","Values":["Critical","Important","Moderate"]}],"ApproveAfterDays":7,"EnableNonSecurity":true,"ComplianceLevel":"Medium"}]}',
                    ],
                ],
                [
                    'name' => 'RejectedPatches',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '拒绝补丁的列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '拒绝补丁的名称。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'RejectedPatch1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RejectedPatchesAction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '拒绝补丁的操作。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ALLOW_AS_DEPENDENCY',
                    ],
                ],
                [
                    'name' => 'ApprovedPatches',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '批准补丁的列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '批准补丁的名称。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ApprovedPatch1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApprovedPatchesEnableNonSecurity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '批准补丁是否包括除安全性之外的更新',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Sources',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '补丁源配置列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '补丁源配置',
                            'type' => 'string',
                            'required' => false,
                            'example' => '[main]'."\n"
                                .'name=MyCustomRepository'."\n"
                                .'baseurl=https://my-custom-repository'."\n"
                                .'enabled=1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
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
                                'example' => 'A5173FF6-D10D-5E8C-8F71-943C2A3E25C0',
                            ],
                            'PatchBaseline' => [
                                'description' => '补丁基线详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'OperationSystem' => [
                                        'description' => '操作系统类型。',
                                        'type' => 'string',
                                        'example' => 'Windows',
                                    ],
                                    'Description' => [
                                        'description' => '补丁基线描述信息。',
                                        'type' => 'string',
                                        'example' => 'PatchBaseline',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-08T06:25:41Z',
                                    ],
                                    'UpdatedBy' => [
                                        'description' => '补丁基线更新者。',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '补丁基线创建者。',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-08T06:25:41Z',
                                    ],
                                    'Name' => [
                                        'description' => '补丁基线名称。',
                                        'type' => 'string',
                                        'example' => 'MyPatchBaseline',
                                    ],
                                    'ApprovalRules' => [
                                        'description' => '接受规则。',
                                        'type' => 'string',
                                        'example' => '{"PatchRules":[{"PatchFilterGroup":[{"Key":"PatchSet","Values":["OS"]},{"Key":"ProductFamily","Values":["Windows"]},{"Key":"Product","Values":["Windows 10","Windows 7"]},{"Key":"Classification","Values":["Security Updates","Updates","Update Rollups","Critical Updates"]},{"Key":"Severity","Values":["Critical","Important","Moderate"]}],"ApproveAfterDays":7,"EnableNonSecurity":true,"ComplianceLevel":"Medium"}]}',
                                    ],
                                    'Id' => [
                                        'description' => '补丁基线ID。',
                                        'type' => 'string',
                                        'example' => 'pb-0a0aeda72ed147eb97ea',
                                    ],
                                    'ShareType' => [
                                        'description' => '补丁基线共享类型。',
                                        'type' => 'string',
                                        'example' => 'Private',
                                    ],
                                    'RejectedPatches' => [
                                        'description' => '拒绝补丁的列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '拒绝补丁的名称。',
                                            'type' => 'string',
                                            'example' => 'RejectedPatch1',
                                        ],
                                    ],
                                    'RejectedPatchesAction' => [
                                        'description' => '拒绝补丁的操作。',
                                        'type' => 'string',
                                        'example' => '"ALLOW_AS_DEPENDENCY"',
                                    ],
                                    'ApprovedPatches' => [
                                        'description' => '批准补丁的列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '批准补丁的名称。',
                                            'type' => 'string',
                                            'example' => 'ApprovedPatch1',
                                        ],
                                    ],
                                    'ApprovedPatchesEnableNonSecurity' => [
                                        'description' => '批准补丁是否包括除安全性之外的更新',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Sources' => [
                                        'description' => '补丁源配置列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '补丁源配置。',
                                            'type' => 'string',
                                            'example' => '[main]'."\n"
                                                .'name=MyCustomRepository'."\n"
                                                .'baseurl=https://my-custom-repository'."\n"
                                                .'enabled=1',
                                        ],
                                    ],
                                    'Tags' => [
                                        'description' => '标签。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签。',
                                            'type' => 'object',
                                            'properties' => [
                                                'TagKey' => [
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'key',
                                                ],
                                                'TagValue' => [
                                                    'description' => '标签值。',
                                                    'type' => 'string',
                                                    'example' => 'value',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-acfm3comlufxpva',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A5173FF6-D10D-5E8C-8F71-943C2A3E25C0\\",\\n  \\"PatchBaseline\\": {\\n    \\"OperationSystem\\": \\"Windows\\",\\n    \\"Description\\": \\"PatchBaseline\\",\\n    \\"UpdatedDate\\": \\"2021-09-08T06:25:41Z\\",\\n    \\"UpdatedBy\\": \\"root(130900000)\\",\\n    \\"CreatedBy\\": \\"root(130900000)\\",\\n    \\"CreatedDate\\": \\"2021-09-08T06:25:41Z\\",\\n    \\"Name\\": \\"MyPatchBaseline\\",\\n    \\"ApprovalRules\\": \\"{\\\\\\"PatchRules\\\\\\":[{\\\\\\"PatchFilterGroup\\\\\\":[{\\\\\\"Key\\\\\\":\\\\\\"PatchSet\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"OS\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"ProductFamily\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Windows\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"Product\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Windows 10\\\\\\",\\\\\\"Windows 7\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"Classification\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Security Updates\\\\\\",\\\\\\"Updates\\\\\\",\\\\\\"Update Rollups\\\\\\",\\\\\\"Critical Updates\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"Severity\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Critical\\\\\\",\\\\\\"Important\\\\\\",\\\\\\"Moderate\\\\\\"]}],\\\\\\"ApproveAfterDays\\\\\\":7,\\\\\\"EnableNonSecurity\\\\\\":true,\\\\\\"ComplianceLevel\\\\\\":\\\\\\"Medium\\\\\\"}]}\\",\\n    \\"Id\\": \\"pb-0a0aeda72ed147eb97ea\\",\\n    \\"ShareType\\": \\"Private\\",\\n    \\"RejectedPatches\\": [\\n      \\"RejectedPatch1\\"\\n    ],\\n    \\"RejectedPatchesAction\\": \\"\\\\\\"ALLOW_AS_DEPENDENCY\\\\\\"\\",\\n    \\"ApprovedPatches\\": [\\n      \\"ApprovedPatch1\\"\\n    ],\\n    \\"ApprovedPatchesEnableNonSecurity\\": true,\\n    \\"Sources\\": [\\n      \\"[main]\\\\nname=MyCustomRepository\\\\nbaseurl=https://my-custom-repository\\\\nenabled=1\\"\\n    ],\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"key\\",\\n        \\"TagValue\\": \\"value\\"\\n      }\\n    ],\\n    \\"ResourceGroupId\\": \\"rg-acfm3comlufxpva\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PatchBaseline>\\n    <UpdatedBy>root(130900000)</UpdatedBy>\\n    <CreatedBy>root(130900000)</CreatedBy>\\n    <Description>PatchBaseline</Description>\\n    <UpdatedDate>2021-09-08T06:25:41Z</UpdatedDate>\\n    <CreatedDate>2021-02-18T03:33:50Z</CreatedDate>\\n    <Id>pb-0a0aeda72ed147eb97ea</Id>\\n    <OperationSystem>Windows</OperationSystem>\\n    <ApprovalRules>\\n        <PatchRules>\\n            <ApproveUntilDate/>\\n            <EnableNonSecurity>true</EnableNonSecurity>\\n            <PatchFilterGroup>\\n                <Values>OS</Values>\\n                <Key>PatchSet</Key>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Values>Windows</Values>\\n                <Key>ProductFamily</Key>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Values>Windows 10</Values>\\n                <Values>Windows 7</Values>\\n                <Key>Product</Key>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Values>Security Updates</Values>\\n                <Values>Updates</Values>\\n                <Values>Update Rollups</Values>\\n                <Values>Critical Updates</Values>\\n                <Key>Classification</Key>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Values>Critical</Values>\\n                <Values>Important</Values>\\n                <Values>Moderate</Values>\\n                <Key>Severity</Key>\\n            </PatchFilterGroup>\\n            <ApproveAfterDays>7</ApproveAfterDays>\\n            <ComplianceLevel>Medium</ComplianceLevel>\\n        </PatchRules>\\n    </ApprovalRules>\\n    <Name>MyPatchBaseline</Name>\\n    <ShareType>Private</ShareType>\\n</PatchBaseline>\\n<RequestId>A5173FF6-D10D-5E8C-8F71-943C2A3E25C0</RequestId>","errorExample":""}]',
            'title' => '创建补丁基线',
            'summary' => '创建一个补丁基线。',
        ],
        'DeletePatchBaseline' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补丁基线名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyPatchBaseline',
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
                                'example' => '85197066-0209-5775-BBED-99DF9DA44E48',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"85197066-0209-5775-BBED-99DF9DA44E48\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>85197066-0209-5775-BBED-99DF9DA44E48</RequestId>","errorExample":""}]',
            'title' => '删除补丁基线',
            'summary' => '删除一个补丁基线。',
        ],
        'UpdatePatchBaseline' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补丁基线名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyPatchBaseline',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补丁基线描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UpdatePatchBaseline',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'ApprovalRules',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接受规则。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{"PatchRules":[{"PatchFilterGroup":[{"Key":"PatchSet","Values":["OS"]},{"Key":"ProductFamily","Values":["Windows"]},{"Key":"Product","Values":["Windows 10","Windows 7"]},{"Key":"Classification","Values":["Security Updates","Updates","Update Rollups","Critical Updates"]},{"Key":"Severity","Values":["Critical","Important","Moderate"]}],"ApproveAfterDays":7,"EnableNonSecurity":true,"ComplianceLevel":"Medium"}]}',
                    ],
                ],
                [
                    'name' => 'RejectedPatches',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '拒绝补丁的列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '拒绝补丁的列表。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'RejectedPatch1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RejectedPatchesAction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '拒绝补丁的操作。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ALLOW_AS_DEPENDENCY',
                    ],
                ],
                [
                    'name' => 'ApprovedPatches',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '批准补丁的列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '批准补丁的名称。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ApprovedPatch1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApprovedPatchesEnableNonSecurity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '批准补丁是否包括除安全性之外的更新',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Sources',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '补丁源配置列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '补丁源配置。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '[main]'."\n"
                                .'name=MyCustomRepository'."\n"
                                .'baseurl=https://my-custom-repository'."\n"
                                .'enabled=1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
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
                                'example' => '1457F46C-7AAE-59FA-BD12-0BDB3751E6F8',
                            ],
                            'PatchBaseline' => [
                                'description' => '补丁基线详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'OperationSystem' => [
                                        'description' => '操作系统类型。',
                                        'type' => 'string',
                                        'example' => 'Windows',
                                    ],
                                    'Description' => [
                                        'description' => '补丁基线描述信息。',
                                        'type' => 'string',
                                        'example' => 'UpdatePatchBaseline',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '更新日期。',
                                        'type' => 'string',
                                        'example' => '2021-09-08T07:26:37Z',
                                    ],
                                    'UpdatedBy' => [
                                        'description' => '补丁基线更新者。',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '补丁基线创建者。',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '创建日期。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T03:42:56Z',
                                    ],
                                    'Name' => [
                                        'description' => '补丁基线名称。',
                                        'type' => 'string',
                                        'example' => 'MyPatchBaseline',
                                    ],
                                    'ApprovalRules' => [
                                        'description' => '接受规则。',
                                        'type' => 'string',
                                        'example' => '{"PatchRules":[{"PatchFilterGroup":[{"Key":"PatchSet","Values":["OS"]},{"Key":"ProductFamily","Values":["Windows"]},{"Key":"Product","Values":["Windows 10","Windows 7"]},{"Key":"Classification","Values":["Security Updates","Updates","Update Rollups","Critical Updates"]},{"Key":"Severity","Values":["Critical","Important","Moderate"]}],"ApproveAfterDays":7,"EnableNonSecurity":true,"ComplianceLevel":"Medium"}]}',
                                    ],
                                    'Id' => [
                                        'description' => '补丁基线ID。',
                                        'type' => 'string',
                                        'example' => 'pb-445340b5c6504a85a300',
                                    ],
                                    'ShareType' => [
                                        'description' => '补丁基线共享类型。',
                                        'type' => 'string',
                                        'example' => 'Private',
                                    ],
                                    'RejectedPatches' => [
                                        'description' => '拒绝补丁的列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '拒绝补丁的名称。',
                                            'type' => 'string',
                                            'example' => 'RejectedPatch1',
                                        ],
                                    ],
                                    'RejectedPatchesAction' => [
                                        'description' => '拒绝补丁的操作。',
                                        'type' => 'string',
                                        'example' => 'ALLOW_AS_DEPENDENCY',
                                    ],
                                    'ApprovedPatches' => [
                                        'description' => '批准补丁的列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '批准补丁的名称。',
                                            'type' => 'string',
                                            'example' => 'ApprovedPatch1',
                                        ],
                                    ],
                                    'ApprovedPatchesEnableNonSecurity' => [
                                        'description' => '批准补丁是否包括除安全性之外的更新',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Sources' => [
                                        'description' => '补丁源配置列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '补丁源配置。',
                                            'type' => 'string',
                                            'example' => '[main]'."\n"
                                                .'name=MyCustomRepository'."\n"
                                                .'baseurl=https://my-custom-repository'."\n"
                                                .'enabled=1',
                                        ],
                                    ],
                                    'Tags' => [
                                        'description' => '标签。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签。'."\n",
                                            'type' => 'object',
                                            'properties' => [
                                                'TagKey' => [
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'key',
                                                ],
                                                'TagValue' => [
                                                    'description' => '标签值。',
                                                    'type' => 'string',
                                                    'example' => 'value',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-acfmy2zdbbjplii',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1457F46C-7AAE-59FA-BD12-0BDB3751E6F8\\",\\n  \\"PatchBaseline\\": {\\n    \\"OperationSystem\\": \\"Windows\\",\\n    \\"Description\\": \\"UpdatePatchBaseline\\",\\n    \\"UpdatedDate\\": \\"2021-09-08T07:26:37Z\\",\\n    \\"UpdatedBy\\": \\"root(130900000)\\",\\n    \\"CreatedBy\\": \\"root(130900000)\\",\\n    \\"CreatedDate\\": \\"2021-09-07T03:42:56Z\\",\\n    \\"Name\\": \\"MyPatchBaseline\\",\\n    \\"ApprovalRules\\": \\"{\\\\\\"PatchRules\\\\\\":[{\\\\\\"PatchFilterGroup\\\\\\":[{\\\\\\"Key\\\\\\":\\\\\\"PatchSet\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"OS\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"ProductFamily\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Windows\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"Product\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Windows 10\\\\\\",\\\\\\"Windows 7\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"Classification\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Security Updates\\\\\\",\\\\\\"Updates\\\\\\",\\\\\\"Update Rollups\\\\\\",\\\\\\"Critical Updates\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"Severity\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Critical\\\\\\",\\\\\\"Important\\\\\\",\\\\\\"Moderate\\\\\\"]}],\\\\\\"ApproveAfterDays\\\\\\":7,\\\\\\"EnableNonSecurity\\\\\\":true,\\\\\\"ComplianceLevel\\\\\\":\\\\\\"Medium\\\\\\"}]}\\",\\n    \\"Id\\": \\"pb-445340b5c6504a85a300\\",\\n    \\"ShareType\\": \\"Private\\",\\n    \\"RejectedPatches\\": [\\n      \\"RejectedPatch1\\"\\n    ],\\n    \\"RejectedPatchesAction\\": \\"ALLOW_AS_DEPENDENCY\\",\\n    \\"ApprovedPatches\\": [\\n      \\"ApprovedPatch1\\"\\n    ],\\n    \\"ApprovedPatchesEnableNonSecurity\\": true,\\n    \\"Sources\\": [\\n      \\"[main]\\\\nname=MyCustomRepository\\\\nbaseurl=https://my-custom-repository\\\\nenabled=1\\"\\n    ],\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"key\\",\\n        \\"TagValue\\": \\"value\\"\\n      }\\n    ],\\n    \\"ResourceGroupId\\": \\"rg-acfmy2zdbbjplii\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PatchBaseline>\\n    <UpdatedBy>root(130900000)</UpdatedBy>\\n    <CreatedBy>root(130900000)</CreatedBy>\\n    <Description>UpdatePatchBaseline</Description>\\n    <UpdatedDate>2021-09-08T07:26:37Z</UpdatedDate>\\n    <CreatedDate>2021-09-07T03:42:56Z</CreatedDate>\\n    <Id>pb-445340b5c6504a85a300</Id>\\n    <OperationSystem>Windows</OperationSystem>\\n    <ApprovalRules>\\n        <PatchRules>\\n            <PatchFilterGroup>\\n                <Key>PatchSet</Key>\\n                <Values>OS</Values>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Key>ProductFamily</Key>\\n                <Values>Windows</Values>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Key>Product</Key>\\n                <Values>Windows 10</Values>\\n                <Values>Windows 7</Values>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Key>Classification</Key>\\n                <Values>Security Updates</Values>\\n                <Values>Updates</Values>\\n                <Values>Update Rollups</Values>\\n                <Values>Critical Updates</Values>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Key>Severity</Key>\\n                <Values>Critical</Values>\\n                <Values>Important</Values>\\n                <Values>Moderate</Values>\\n            </PatchFilterGroup>\\n            <ApproveAfterDays>7</ApproveAfterDays>\\n            <ApproveUntilDate/>\\n            <EnableNonSecurity>true</EnableNonSecurity>\\n            <ComplianceLevel>Medium</ComplianceLevel>\\n        </PatchRules>\\n    </ApprovalRules>\\n    <Name>MyPatchBaseline</Name>\\n    <ShareType>Private</ShareType>\\n</PatchBaseline>\\n<RequestId>1457F46C-7AAE-59FA-BD12-0BDB3751E6F8</RequestId>","errorExample":""}]',
            'title' => '更新补丁基线',
            'summary' => '更新一个补丁基线。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetPatchBaseline' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补丁基线名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyPatchBaseline',
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
                                'example' => '2C630E64-7273-57AC-A598-1B2B8B35CEA5',
                            ],
                            'PatchBaseline' => [
                                'description' => '补丁基线详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'OperationSystem' => [
                                        'description' => '操作系统类型。',
                                        'type' => 'string',
                                        'example' => 'Windows',
                                    ],
                                    'IsDefault' => [
                                        'description' => '是否为默认补丁基线。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Description' => [
                                        'description' => '补丁基线描述信息。',
                                        'type' => 'string',
                                        'example' => 'UpdatePatchBaseline',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-08T07:26:38Z',
                                    ],
                                    'UpdatedBy' => [
                                        'description' => '补丁基线更新者。',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '补丁基线创建者。',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T03:42:56Z',
                                    ],
                                    'Name' => [
                                        'description' => '补丁基线名称。',
                                        'type' => 'string',
                                        'example' => 'MypatchBaseline',
                                    ],
                                    'ApprovalRules' => [
                                        'description' => '接受规则。',
                                        'type' => 'string',
                                        'example' => '{"PatchRules":[{"PatchFilterGroup":[{"Key":"PatchSet","Values":["OS"]},{"Key":"ProductFamily","Values":["Windows"]},{"Key":"Product","Values":["Windows 10","Windows 7"]},{"Key":"Classification","Values":["Security Updates","Updates","Update Rollups","Critical Updates"]},{"Key":"Severity","Values":["Critical","Important","Moderate"]}],"ApproveAfterDays":7,"EnableNonSecurity":true,"ComplianceLevel":"Medium"}]}',
                                    ],
                                    'Id' => [
                                        'description' => '补丁基线ID。',
                                        'type' => 'string',
                                        'example' => 'pb-445340b5c6504a85a300',
                                    ],
                                    'ShareType' => [
                                        'description' => '补丁基线共享类型。',
                                        'type' => 'string',
                                        'example' => 'Private',
                                    ],
                                    'RejectedPatches' => [
                                        'description' => '拒绝补丁的名称。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '拒绝补丁的名称。',
                                            'type' => 'string',
                                            'example' => 'RejectedPatch1',
                                        ],
                                    ],
                                    'RejectedPatchesAction' => [
                                        'description' => '拒绝补丁的操作。',
                                        'type' => 'string',
                                        'example' => 'ALLOW_AS_DEPENDENCY',
                                    ],
                                    'ApprovedPatches' => [
                                        'description' => '批准补丁的列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '批准补丁的列表。',
                                            'type' => 'string',
                                            'example' => 'ApprovedPatch1',
                                        ],
                                    ],
                                    'ApprovedPatchesEnableNonSecurity' => [
                                        'description' => '批准补丁是否包括除安全性之外的更新',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Sources' => [
                                        'description' => '补丁源配置列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '补丁源配置。',
                                            'type' => 'string',
                                            'example' => '[main]'."\n"
                                                .'name=MyCustomRepository'."\n"
                                                .'baseurl=https://my-custom-repository'."\n"
                                                .'enabled=1',
                                        ],
                                    ],
                                    'Tags' => [
                                        'description' => '标签。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签。',
                                            'type' => 'object',
                                            'properties' => [
                                                'TagKey' => [
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'key',
                                                ],
                                                'TagValue' => [
                                                    'description' => '标签值。',
                                                    'type' => 'string',
                                                    'example' => 'value',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-acfmzmhzoaad5oq',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2C630E64-7273-57AC-A598-1B2B8B35CEA5\\",\\n  \\"PatchBaseline\\": {\\n    \\"OperationSystem\\": \\"Windows\\",\\n    \\"IsDefault\\": false,\\n    \\"Description\\": \\"UpdatePatchBaseline\\",\\n    \\"UpdatedDate\\": \\"2021-09-08T07:26:38Z\\",\\n    \\"UpdatedBy\\": \\"root(130900000)\\",\\n    \\"CreatedBy\\": \\"root(130900000)\\",\\n    \\"CreatedDate\\": \\"2021-09-07T03:42:56Z\\",\\n    \\"Name\\": \\"MypatchBaseline\\",\\n    \\"ApprovalRules\\": \\"{\\\\\\"PatchRules\\\\\\":[{\\\\\\"PatchFilterGroup\\\\\\":[{\\\\\\"Key\\\\\\":\\\\\\"PatchSet\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"OS\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"ProductFamily\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Windows\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"Product\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Windows 10\\\\\\",\\\\\\"Windows 7\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"Classification\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Security Updates\\\\\\",\\\\\\"Updates\\\\\\",\\\\\\"Update Rollups\\\\\\",\\\\\\"Critical Updates\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"Severity\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Critical\\\\\\",\\\\\\"Important\\\\\\",\\\\\\"Moderate\\\\\\"]}],\\\\\\"ApproveAfterDays\\\\\\":7,\\\\\\"EnableNonSecurity\\\\\\":true,\\\\\\"ComplianceLevel\\\\\\":\\\\\\"Medium\\\\\\"}]}\\",\\n    \\"Id\\": \\"pb-445340b5c6504a85a300\\",\\n    \\"ShareType\\": \\"Private\\",\\n    \\"RejectedPatches\\": [\\n      \\"RejectedPatch1\\"\\n    ],\\n    \\"RejectedPatchesAction\\": \\"ALLOW_AS_DEPENDENCY\\",\\n    \\"ApprovedPatches\\": [\\n      \\"ApprovedPatch1\\"\\n    ],\\n    \\"ApprovedPatchesEnableNonSecurity\\": true,\\n    \\"Sources\\": [\\n      \\"[main]\\\\nname=MyCustomRepository\\\\nbaseurl=https://my-custom-repository\\\\nenabled=1\\"\\n    ],\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"key\\",\\n        \\"TagValue\\": \\"value\\"\\n      }\\n    ],\\n    \\"ResourceGroupId\\": \\"rg-acfmzmhzoaad5oq\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PatchBaseline>\\n    <IsDefault>false</IsDefault>\\n    <UpdatedBy>root(130900000)</UpdatedBy>\\n    <CreatedBy>root(130900000)</CreatedBy>\\n    <Description>UpdatePatchBaseline</Description>\\n    <UpdatedDate>2021-09-08T07:26:38Z</UpdatedDate>\\n    <CreatedDate>2021-09-07T03:42:56Z</CreatedDate>\\n    <Id>pb-445340b5c6504a85a300</Id>\\n    <OperationSystem>Windows</OperationSystem>\\n    <ApprovalRules>\\n        <PatchRules>\\n            <PatchFilterGroup>\\n                <Key>PatchSet</Key>\\n                <Values>OS</Values>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Key>ProductFamily</Key>\\n                <Values>Windows</Values>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Key>Product</Key>\\n                <Values>Windows 10</Values>\\n                <Values>Windows 7</Values>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Key>Classification</Key>\\n                <Values>Security Updates</Values>\\n                <Values>Updates</Values>\\n                <Values>Update Rollups</Values>\\n                <Values>Critical Updates</Values>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Key>Severity</Key>\\n                <Values>Critical</Values>\\n                <Values>Important</Values>\\n                <Values>Moderate</Values>\\n            </PatchFilterGroup>\\n            <ApproveAfterDays>7</ApproveAfterDays>\\n            <ApproveUntilDate/>\\n            <EnableNonSecurity>true</EnableNonSecurity>\\n            <ComplianceLevel>Medium</ComplianceLevel>\\n        </PatchRules>\\n    </ApprovalRules>\\n    <Name>MypatchBaseline</Name>\\n    <ShareType>Private</ShareType>\\n</PatchBaseline>\\n<RequestId>2C630E64-7273-57AC-A598-1B2B8B35CEA5</RequestId>","errorExample":""}]',
            'title' => '获取补丁基线',
            'summary' => '获取一个补丁基线的详细信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListPatchBaselines' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补丁基线名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'MyPatchBaseline',
                    ],
                ],
                [
                    'name' => 'OperationSystem',
                    'in' => 'query',
                    'schema' => [
                        'description' => '操作系统类型。支持：'."\n"
                            .'- AliyunLinux'."\n"
                            .'- Windows'."\n"
                            .'- Ubuntu'."\n"
                            .'- Centos'."\n"
                            .'- Debian'."\n"
                            .'- RedhatEnterpriseLinux'."\n"
                            .'- Anolis',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AliyunLinux',
                    ],
                ],
                [
                    'name' => 'ShareType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补丁基线共享类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Private',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'key',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApprovedPatches',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '批准补丁的列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '批准补丁的名称。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ApprovedPatch1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApprovedPatchesEnableNonSecurity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '批准补丁是否包括除安全性之外的更新',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Sources',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '补丁源配置列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '补丁源配置。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '[main]'."\n"
                                .'name=MyCustomRepository'."\n"
                                .'baseurl=https://my-custom-repository'."\n"
                                .'enabled=1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记Token。',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '432996A1-03C0-5C4C-A8E6-66C4110765B8',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'PatchBaselines' => [
                                'description' => '补丁基线列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'OperationSystem' => [
                                            'description' => '操作系统类型。',
                                            'type' => 'string',
                                            'example' => 'AliyunLinux',
                                        ],
                                        'IsDefault' => [
                                            'description' => '是否为默认补丁基线。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Description' => [
                                            'description' => '补丁基线描述信息。',
                                            'type' => 'string',
                                            'example' => 'ListPatchBaseline',
                                        ],
                                        'UpdatedDate' => [
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2021-09-08T03:44:34Z',
                                        ],
                                        'UpdatedBy' => [
                                            'description' => '补丁基线更新者。',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                        'CreatedBy' => [
                                            'description' => '补丁基线创建者。',
                                            'type' => 'string',
                                            'example' => 'root(130900000)',
                                        ],
                                        'CreatedDate' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-09-08T03:41:23Z',
                                        ],
                                        'Name' => [
                                            'description' => '补丁基线名称。',
                                            'type' => 'string',
                                            'example' => 'MyPatchBaseline',
                                        ],
                                        'Id' => [
                                            'description' => '补丁基线ID。',
                                            'type' => 'string',
                                            'example' => 'pb-c2838b5d89b540e19ee6',
                                        ],
                                        'ShareType' => [
                                            'description' => '补丁基线共享类型。',
                                            'type' => 'string',
                                            'example' => 'Private',
                                        ],
                                        'Tags' => [
                                            'description' => '标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'TagKey' => [
                                                        'description' => '标签键。',
                                                        'type' => 'string',
                                                        'example' => 'key',
                                                    ],
                                                    'TagValue' => [
                                                        'description' => '标签值。',
                                                        'type' => 'string',
                                                        'example' => 'value',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ApprovedPatches' => [
                                            'description' => '批准补丁的列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '批准补丁的名称。',
                                                'type' => 'string',
                                                'example' => 'ApprovedPatch1',
                                            ],
                                        ],
                                        'ApprovedPatchesEnableNonSecurity' => [
                                            'description' => '批准补丁是否包括除安全性之外的更新',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Sources' => [
                                            'description' => '补丁源配置列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '补丁源配置。',
                                                'type' => 'string',
                                                'example' => '[main]'."\n"
                                                    .'name=MyCustomRepository'."\n"
                                                    .'baseurl=https://my-custom-repository'."\n"
                                                    .'enabled=1',
                                            ],
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-aek256ia6vhsndy',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"-\\",\\n  \\"RequestId\\": \\"432996A1-03C0-5C4C-A8E6-66C4110765B8\\",\\n  \\"MaxResults\\": 50,\\n  \\"PatchBaselines\\": [\\n    {\\n      \\"OperationSystem\\": \\"AliyunLinux\\",\\n      \\"IsDefault\\": false,\\n      \\"Description\\": \\"ListPatchBaseline\\",\\n      \\"UpdatedDate\\": \\"2021-09-08T03:44:34Z\\",\\n      \\"UpdatedBy\\": \\"root(130900000)\\",\\n      \\"CreatedBy\\": \\"root(130900000)\\",\\n      \\"CreatedDate\\": \\"2021-09-08T03:41:23Z\\",\\n      \\"Name\\": \\"MyPatchBaseline\\",\\n      \\"Id\\": \\"pb-c2838b5d89b540e19ee6\\",\\n      \\"ShareType\\": \\"Private\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagKey\\": \\"key\\",\\n          \\"TagValue\\": \\"value\\"\\n        }\\n      ],\\n      \\"ApprovedPatches\\": [\\n        \\"ApprovedPatch1\\"\\n      ],\\n      \\"ApprovedPatchesEnableNonSecurity\\": true,\\n      \\"Sources\\": [\\n        \\"[main]\\\\nname=MyCustomRepository\\\\nbaseurl=https://my-custom-repository\\\\nenabled=1\\"\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-aek256ia6vhsndy\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>432996A1-03C0-5C4C-A8E6-66C4110765B8</RequestId>\\n<MaxResults>50</MaxResults>\\n<PatchBaselines>\\n    <IsDefault>false</IsDefault>\\n    <UpdatedBy>root(130900000)</UpdatedBy>\\n    <CreatedBy>root(130900000)</CreatedBy>\\n    <Description>ListPatchBaseline</Description>\\n    <UpdatedDate>2021-09-08T03:44:34Z</UpdatedDate>\\n    <CreatedDate>2021-09-08T03:41:23Z</CreatedDate>\\n    <Id>pb-c2838b5d89b540e19ee6</Id>\\n    <OperationSystem>AliyunLinux</OperationSystem>\\n    <Name>MyPatchBaseline3</Name>\\n    <ShareType>Private</ShareType>\\n</PatchBaselines>\\n<PatchBaselines>\\n    <IsDefault>false</IsDefault>\\n    <UpdatedBy>root(130900000)</UpdatedBy>\\n    <CreatedBy>root(130900000)</CreatedBy>\\n    <Description>ListPatchBaseline</Description>\\n    <UpdatedDate>2021-09-08T03:39:26Z</UpdatedDate>\\n    <CreatedDate>2021-09-08T03:38:46Z</CreatedDate>\\n    <Id>pb-bdbeb87bc0bb40c9a8de</Id>\\n    <OperationSystem>AliyunLinux</OperationSystem>\\n    <Name>MyPatchBaseline2</Name>\\n    <ShareType>Private</ShareType>\\n</PatchBaselines>\\n<PatchBaselines>\\n    <IsDefault>false</IsDefault>\\n    <UpdatedBy>root(130900000)</UpdatedBy>\\n    <CreatedBy>root(130900000)</CreatedBy>\\n    <Description>ListPatchBaseline</Description>\\n    <UpdatedDate>2021-09-08T03:39:46Z</UpdatedDate>\\n    <CreatedDate>2021-09-08T02:14:24Z</CreatedDate>\\n    <Id>pb-646af3e99fac44e49ca8</Id>\\n    <OperationSystem>AliyunLinux</OperationSystem>\\n    <Name>MyPatchBaseline1</Name>\\n    <ShareType>Private</ShareType>\\n</PatchBaselines>","errorExample":""}]',
            'title' => '列出修补程序基线',
            'summary' => '获取补丁基线列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RegisterDefaultPatchBaseline' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补丁基线名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyPatchBaseline',
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
                                'example' => 'D6850689-348D-59FC-AE13-BB0EDB7C4BE8',
                            ],
                            'PatchBaseline' => [
                                'description' => '补丁基线详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'OperationSystem' => [
                                        'description' => '操作系统类型。',
                                        'type' => 'string',
                                        'example' => 'Windows',
                                    ],
                                    'Description' => [
                                        'description' => '补丁基线描述信息。',
                                        'type' => 'string',
                                        'example' => 'RegisterPatchBaseline',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T03:42:56Z',
                                    ],
                                    'UpdatedBy' => [
                                        'description' => '补丁基线更新者。',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '补丁基线创建者。',
                                        'type' => 'string',
                                        'example' => 'root(130900000)',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T03:42:56Z',
                                    ],
                                    'Name' => [
                                        'description' => '补丁基线名称。',
                                        'type' => 'string',
                                        'example' => 'MyPatchBaseline',
                                    ],
                                    'ApprovalRules' => [
                                        'description' => '接受规则。',
                                        'type' => 'string',
                                        'example' => '{"PatchRules":[{"PatchFilterGroup":[{"Key":"PatchSet","Values":["OS"]},{"Key":"ProductFamily","Values":["Windows"]},{"Key":"Product","Values":["Windows 10","Windows 7"]},{"Key":"Classification","Values":["Security Updates","Updates","Update Rollups","Critical Updates"]},{"Key":"Severity","Values":["Critical","Important","Moderate"]}],"ApproveAfterDays":7,"ApproveUntilDate":"","EnableNonSecurity":true,"ComplianceLevel":"Medium"}]}',
                                    ],
                                    'Id' => [
                                        'description' => '补丁基线ID。',
                                        'type' => 'string',
                                        'example' => 'pb-445340b5c6504a85a300',
                                    ],
                                    'ShareType' => [
                                        'description' => '补丁基线共享类型。',
                                        'type' => 'string',
                                        'example' => 'Private',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-acfm4dpaq2yox6q',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6850689-348D-59FC-AE13-BB0EDB7C4BE8\\",\\n  \\"PatchBaseline\\": {\\n    \\"OperationSystem\\": \\"Windows\\",\\n    \\"Description\\": \\"RegisterPatchBaseline\\",\\n    \\"UpdatedDate\\": \\"2021-09-07T03:42:56Z\\",\\n    \\"UpdatedBy\\": \\"root(130900000)\\",\\n    \\"CreatedBy\\": \\"root(130900000)\\",\\n    \\"CreatedDate\\": \\"2021-09-07T03:42:56Z\\",\\n    \\"Name\\": \\"MyPatchBaseline\\",\\n    \\"ApprovalRules\\": \\"{\\\\\\"PatchRules\\\\\\":[{\\\\\\"PatchFilterGroup\\\\\\":[{\\\\\\"Key\\\\\\":\\\\\\"PatchSet\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"OS\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"ProductFamily\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Windows\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"Product\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Windows 10\\\\\\",\\\\\\"Windows 7\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"Classification\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Security Updates\\\\\\",\\\\\\"Updates\\\\\\",\\\\\\"Update Rollups\\\\\\",\\\\\\"Critical Updates\\\\\\"]},{\\\\\\"Key\\\\\\":\\\\\\"Severity\\\\\\",\\\\\\"Values\\\\\\":[\\\\\\"Critical\\\\\\",\\\\\\"Important\\\\\\",\\\\\\"Moderate\\\\\\"]}],\\\\\\"ApproveAfterDays\\\\\\":7,\\\\\\"ApproveUntilDate\\\\\\":\\\\\\"\\\\\\",\\\\\\"EnableNonSecurity\\\\\\":true,\\\\\\"ComplianceLevel\\\\\\":\\\\\\"Medium\\\\\\"}]}\\",\\n    \\"Id\\": \\"pb-445340b5c6504a85a300\\",\\n    \\"ShareType\\": \\"Private\\",\\n    \\"ResourceGroupId\\": \\"rg-acfm4dpaq2yox6q\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PatchBaseline>\\n    <UpdatedBy>root(130900000)</UpdatedBy>\\n    <CreatedBy>root(130900000)</CreatedBy>\\n    <Description>RegisterPatchBaseline</Description>\\n    <UpdatedDate>2021-09-08T07:26:38Z</UpdatedDate>\\n    <CreatedDate>2021-09-07T03:42:56Z</CreatedDate>\\n    <Id>pb-445340b5c6504a85a300</Id>\\n    <OperationSystem>AliyunLinux</OperationSystem>\\n    <ApprovalRules>\\n        <PatchRules>\\n            <PatchFilterGroup>\\n                <Key>PatchSet</Key>\\n                <Values>OS</Values>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Key>ProductFamily</Key>\\n                <Values>Windows</Values>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Key>Product</Key>\\n                <Values>Windows 10</Values>\\n                <Values>Windows 7</Values>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Key>Classification</Key>\\n                <Values>Security Updates</Values>\\n                <Values>Updates</Values>\\n                <Values>Update Rollups</Values>\\n                <Values>Critical Updates</Values>\\n            </PatchFilterGroup>\\n            <PatchFilterGroup>\\n                <Key>Severity</Key>\\n                <Values>Critical</Values>\\n                <Values>Important</Values>\\n                <Values>Moderate</Values>\\n            </PatchFilterGroup>\\n            <ApproveAfterDays>7</ApproveAfterDays>\\n            <ApproveUntilDate/>\\n            <EnableNonSecurity>true</EnableNonSecurity>\\n            <ComplianceLevel>Medium</ComplianceLevel>\\n        </PatchRules>\\n    </ApprovalRules>\\n    <Name>MyPatchBaseline</Name>\\n    <ShareType>Private</ShareType>\\n</PatchBaseline>\\n<RequestId>D6850689-348D-59FC-AE13-BB0EDB7C4BE8</RequestId>","errorExample":""}]',
            'title' => '注册默认补丁基线',
            'summary' => '注册默认补丁基线。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListInstancePatchStates' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ECS实例ID。取值可以由多个实例ID组成一个JSON数组，最多支持100个ID，ID之间用半角逗号（,）隔开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["i-bp1jaxa2bs4bps7*****", "i-bp67acfmxazb4p****", … "i-bp67acfmxazb4p****"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记Token。',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9A47C086-E64D-52EE-8B2C-EFD23877C55E',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'InstancePatchStates' => [
                                'description' => '实例补丁信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'MissingCount' => [
                                            'description' => '未安装补丁数量。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'OperationEndTime' => [
                                            'description' => '操作结束时间。',
                                            'type' => 'string',
                                            'example' => '2021-09-10T11:42:22Z',
                                        ],
                                        'OwnerInformation' => [
                                            'description' => '用户信息。',
                                            'type' => 'string',
                                            'example' => '“”',
                                        ],
                                        'InstalledOtherCount' => [
                                            'description' => '不符合基线的补丁数量。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'InstanceId' => [
                                            'description' => 'ECS实例ID。 ',
                                            'type' => 'string',
                                            'example' => 'i-bp1jaxa2bs4bps7*****',
                                        ],
                                        'OperationType' => [
                                            'description' => '操作类型。',
                                            'type' => 'string',
                                            'example' => 'scan',
                                        ],
                                        'OperationStartTime' => [
                                            'description' => '操作开始时间。',
                                            'type' => 'string',
                                            'example' => '2021-09-10T11:42:22Z',
                                        ],
                                        'FailedCount' => [
                                            'description' => '安装失败的补丁数量。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'BaselineId' => [
                                            'description' => '补丁基线ID。',
                                            'type' => 'string',
                                            'example' => 'pb-f9393021b7a049e1b34e',
                                        ],
                                        'InstalledPendingRebootCount' => [
                                            'description' => '安装待重启的补丁数量。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'InstalledRejectedCount' => [
                                            'description' => '已安装用户拒绝的补丁数量。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'PatchGroup' => [
                                            'description' => '补丁组。',
                                            'type' => 'string',
                                            'example' => 'null',
                                        ],
                                        'InstalledCount' => [
                                            'description' => '已安装的补丁数量。',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"-\\",\\n  \\"RequestId\\": \\"9A47C086-E64D-52EE-8B2C-EFD23877C55E\\",\\n  \\"MaxResults\\": 50,\\n  \\"InstancePatchStates\\": [\\n    {\\n      \\"MissingCount\\": \\"0\\",\\n      \\"OperationEndTime\\": \\"2021-09-10T11:42:22Z\\",\\n      \\"OwnerInformation\\": \\"“”\\",\\n      \\"InstalledOtherCount\\": \\"0\\",\\n      \\"InstanceId\\": \\"i-bp1jaxa2bs4bps7*****\\",\\n      \\"OperationType\\": \\"scan\\",\\n      \\"OperationStartTime\\": \\"2021-09-10T11:42:22Z\\",\\n      \\"FailedCount\\": \\"0\\",\\n      \\"BaselineId\\": \\"pb-f9393021b7a049e1b34e\\",\\n      \\"InstalledPendingRebootCount\\": \\"0\\",\\n      \\"InstalledRejectedCount\\": \\"0\\",\\n      \\"PatchGroup\\": \\"null\\",\\n      \\"InstalledCount\\": \\"0\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>9A47C086-E64D-52EE-8B2C-EFD23877C55E</RequestId>\\n<MaxResults>50</MaxResults>\\n<InstancePatchStates>\\n    <BaselineId>pb-f9393021b7a049e1b34e</BaselineId>\\n    <MissingCount>0</MissingCount>\\n    <OperationStartTime>2021-09-10T11:42:22Z</OperationStartTime>\\n    <InstanceId>i-bp1jaxa2bs4bps7dgs7v</InstanceId>\\n    <InstalledOtherCount>0</InstalledOtherCount>\\n    <OperationEndTime>2021-09-10T11:42:22Z</OperationEndTime>\\n    <FailedCount>0</FailedCount>\\n    <OperationType>scan</OperationType>\\n    <InstalledCount>0</InstalledCount>\\n    <PatchGroup>null</PatchGroup>\\n    <OwnerInformation/>\\n    <InstalledPendingRebootCount>0</InstalledPendingRebootCount>\\n    <InstalledRejectedCount>0</InstalledRejectedCount>\\n</InstancePatchStates>","errorExample":""}]',
            'title' => '列出实例修补程序状态',
            'summary' => '获取实例补丁信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListInstancePatches' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-bp1jaxa2bs4bps7*****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'PatchStatuses',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补丁过滤状态，不设置为不过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Installed',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记Token。',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0A615755-9C86-5EA6-BF9E-6E8F1AFF9403',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Patches' => [
                                'description' => '补丁信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Severity' => [
                                            'description' => '严重性级别。',
                                            'type' => 'string',
                                            'example' => 'important',
                                        ],
                                        'Status' => [
                                            'description' => '安装状态。',
                                            'type' => 'string',
                                            'example' => 'Installed',
                                        ],
                                        'InstalledTime' => [
                                            'description' => '安装时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-28T07:07:20Z',
                                        ],
                                        'KBId' => [
                                            'description' => 'KBId',
                                            'type' => 'string',
                                            'example' => 'apt-utils.amd64',
                                        ],
                                        'Title' => [
                                            'description' => '名称。',
                                            'type' => 'string',
                                            'example' => 'isc-dhcp-common.amd64:4.3.5-3ubuntu7.3',
                                        ],
                                        'Classification' => [
                                            'description' => '分类。',
                                            'type' => 'string',
                                            'example' => '“”',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"-\\",\\n  \\"RequestId\\": \\"0A615755-9C86-5EA6-BF9E-6E8F1AFF9403\\",\\n  \\"MaxResults\\": 50,\\n  \\"Patches\\": [\\n    {\\n      \\"Severity\\": \\"important\\",\\n      \\"Status\\": \\"Installed\\",\\n      \\"InstalledTime\\": \\"2021-01-28T07:07:20Z\\",\\n      \\"KBId\\": \\"apt-utils.amd64\\",\\n      \\"Title\\": \\"isc-dhcp-common.amd64:4.3.5-3ubuntu7.3\\",\\n      \\"Classification\\": \\"“”\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<NextToken>gAAAAABhRD9bBho0d6-YdrQgww0bsuOJZ9JeEK4v022ZMvgEog5FJW9mMYPZkeSglRrN2IxXWjADx8gefw9sQJ5sL2d3R4IxztxS_rhBftY2317dkOtX0UE3IFIBguQxdYuisDZ52Ycbj-ocjgOG_wrpK-kEO3w64UarmmZX2WrJXRo6yywR2HtfmoaD4qCTiVUtv5Vp_codHcVOLa4m4WrDWnGDrD2srA==</NextToken>\\n<RequestId>0A615755-9C86-5EA6-BF9E-6E8F1AFF9403</RequestId>\\n<MaxResults>50</MaxResults>\\n<Patches>\\n    <Status>Installed</Status>\\n    <KBId>apt-utils.amd64</KBId>\\n    <InstalledTime>2021-01-28T07:07:20Z</InstalledTime>\\n    <Classification/>\\n    <Title>apt-utils.amd64:1.6.12ubuntu0.2</Title>\\n    <Severity>important</Severity>\\n</Patches>\\n<Patches>\\n    <Status>Installed</Status>\\n    <KBId>apt.amd64</KBId>\\n    <InstalledTime>2021-01-28T07:07:20Z</InstalledTime>\\n    <Classification/>\\n    <Title>apt.amd64:1.6.12ubuntu0.2</Title>\\n    <Severity>important</Severity>\\n</Patches>\\n<Patches>\\n    <Status>Installed</Status>\\n    <KBId>bsdutils.amd64</KBId>\\n    <InstalledTime>2021-01-28T07:07:12Z</InstalledTime>\\n    <Classification/>\\n    <Title>bsdutils.amd64:1:2.31.1-0.4ubuntu3.7</Title>\\n    <Severity>required</Severity>\\n</Patches>\\n<Patches>\\n    <Status>Installed</Status>\\n    <KBId>busybox-initramfs.amd64</KBId>\\n    <InstalledTime>2021-01-28T07:07:18Z</InstalledTime>\\n    <Classification/>\\n    <Title>busybox-initramfs.amd64:1:1.27.2-2ubuntu3.3</Title>\\n    <Severity>important</Severity>\\n</Patches>\\n<Patches>\\n    <Status>Installed</Status>\\n    <KBId>bzip2.amd64</KBId>\\n    <InstalledTime>2019-08-05T18:30:59Z</InstalledTime>\\n    <Classification/>\\n    <Title>bzip2.amd64:1.0.6-8.1ubuntu0.2</Title>\\n    <Severity>important</Severity>\\n</Patches>\\n<Patches>\\n    <Status>Installed</Status>\\n    <KBId>ca-certificates.amd64</KBId>\\n    <InstalledTime>2021-09-17T06:59:25Z</InstalledTime>\\n    <Classification/>\\n    <Title>ca-certificates.amd64:20210119~18.04.1</Title>\\n    <Severity>important</Severity>\\n</Patches>\\n<Patches>\\n    <Status>Installed</Status>\\n    <KBId>cpio.amd64</KBId>\\n    <InstalledTime>2021-09-17T06:59:25Z</InstalledTime>\\n    <Classification/>\\n    <Title>cpio.amd64:2.12+dfsg-6ubuntu0.18.04.4</Title>\\n    <Severity>important</Severity>\\n</Patches>\\n<Patches>\\n    <Status>Installed</Status>\\n    <KBId>dbus.amd64</KBId>\\n    <InstalledTime>2021-01-28T07:07:15Z</InstalledTime>\\n    <Classification/>\\n    <Title>dbus.amd64:1.12.2-1ubuntu1.2</Title>\\n    <Severity>important</Severity>\\n</Patches>\\n<Patches>\\n    <Status>Installed</Status>\\n    <KBId>distro-info-data.amd64</KBId>\\n    <InstalledTime>2021-09-17T06:59:25Z</InstalledTime>\\n    <Classification/>\\n    <Title>distro-info-data.amd64:0.37ubuntu0.11</Title>\\n    <Severity>important</Severity>\\n</Patches>","errorExample":""}]',
            'title' => '列出实例修补程序',
            'summary' => '获取实例补丁信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListInventoryEntries' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'i-bp1cpoxxxwxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'TypeName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '组件名称。'."\n"
                            .'取值范围：'."\n"
                            ."\n"
                            .'- ACS:InstanceInformation'."\n"
                            .'- ACS:Application'."\n"
                            .'- ACS:File'."\n"
                            .'- ACS:Network'."\n"
                            .'- ACS:WindowsRole'."\n"
                            .'- ACS:Service'."\n"
                            .'- ACS:WindowsRegistry'."\n"
                            .'- ACS:WindowsUpdate',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ACS:InstanceInformation',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：1-100。默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzA',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '组件过滤规则。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Value' => [
                                    'description' => '组件返回结果的名称都对应的值(第一个N的取值范围1-5，第二个N的取值范围为1-20)。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '某个组件下的返回内容里面的单个值。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'ubuntu',
                                    ],
                                    'required' => false,
                                    'example' => 'test',
                                    'maxItems' => 20,
                                ],
                                'Operator' => [
                                    'description' => '组件的比较符(N取值范围1-5)。'."\n"
                                        .'取值范围：'."\n"
                                        .'- Equal'."\n"
                                        .'- NotEqual'."\n"
                                        .'- BeginWith'."\n"
                                        .'- LessThan'."\n"
                                        .'- GreaterThan',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Equal',
                                ],
                                'Name' => [
                                    'description' => '某个组件下的返回内容里面的单个值的名称(N取值范围1-5)。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'PlatformName',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A81E4B2E-6B33-4BAE-9856-55DB7C893E01',
                            ],
                            'SchemaVersion' => [
                                'description' => '组件版本号',
                                'type' => 'string',
                                'example' => '1.0',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'CaptureTime' => [
                                'description' => '同步配置清单信息时间',
                                'type' => 'string',
                                'example' => '2020-09-17T12:28:13Z',
                            ],
                            'TypeName' => [
                                'description' => '组件名称',
                                'type' => 'string',
                                'example' => 'ACS:InstanceInformation',
                            ],
                            'InstanceId' => [
                                'description' => 'ECS实例ID',
                                'type' => 'string',
                                'example' => 'i-bp1cpoxxxwxxxxxxxxxx',
                            ],
                            'Entries' => [
                                'description' => '某个实例下查询组件的详细配置属性列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '某个实例下查询组件的详细配置属性',
                                    'type' => 'object',
                                    'example' => '{ "RequestId": "1DF96445-5E18-4524-A4AE-3A218D0C345A", "Entries": [ { "PlatformName": "ubuntu", "PlatformVersion": "20.04", "Status": "Running", "InstanceId": "i-bp1cpoxxxwxxxxxxxxxx", "AgentVersion": "v1.5", "ComputerName": "i-bp1cpoxxxwxxxxxxxxxx", "IpAddress": "192.000.00.000", "AgentName": "oosutil", "PlatformType": "linux" } ]}',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC\\",\\n  \\"RequestId\\": \\"A81E4B2E-6B33-4BAE-9856-55DB7C893E01\\",\\n  \\"SchemaVersion\\": \\"1.0\\",\\n  \\"MaxResults\\": 50,\\n  \\"CaptureTime\\": \\"2020-09-17T12:28:13Z\\",\\n  \\"TypeName\\": \\"ACS:InstanceInformation\\",\\n  \\"InstanceId\\": \\"i-bp1cpoxxxwxxxxxxxxxx\\",\\n  \\"Entries\\": [\\n    {\\n      \\"RequestId\\": \\"1DF96445-5E18-4524-A4AE-3A218D0C345A\\",\\n      \\"Entries\\": [\\n        {\\n          \\"PlatformName\\": \\"ubuntu\\",\\n          \\"PlatformVersion\\": \\"20.04\\",\\n          \\"Status\\": \\"Running\\",\\n          \\"InstanceId\\": \\"i-bp1cpoxxxwxxxxxxxxxx\\",\\n          \\"AgentVersion\\": \\"v1.5\\",\\n          \\"ComputerName\\": \\"i-bp1cpoxxxwxxxxxxxxxx\\",\\n          \\"IpAddress\\": \\"192.000.00.000\\",\\n          \\"AgentName\\": \\"oosutil\\",\\n          \\"PlatformType\\": \\"linux\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<TypeName>ACS:InstanceInformation</TypeName>\\n<CaptureTime>2020-09-17T12:28:13Z</CaptureTime>\\n<RequestId>F2727F63-CDC5-45A1-995E-4F1127E001CE</RequestId>\\n<SchemaVersion>1.0</SchemaVersion>\\n<InstanceId>i-bp1cpoxxxwxxxxxxxxxx</InstanceId>\\n<MaxResults>50</MaxResults>\\n<Entries>\\n    <PlatformName>centos</PlatformName>\\n    <PlatformVersion>8.2.2004</PlatformVersion>\\n    <Status>Running</Status>\\n    <InstanceId>i-bp1cpoxxxwxxxxxxxxxx</InstanceId>\\n    <AgentVersion>v1.0.4</AgentVersion>\\n    <ComputerName>i-bp1cpoxxxwxxxxxxxxxx</ComputerName>\\n    <IpAddress>192.168.00.000</IpAddress>\\n    <AgentName>oosutil</AgentName>\\n    <PlatformType>linux</PlatformType>\\n</Entries>","errorExample":""}]',
            'title' => '查询一个实例下的配置清单记录',
            'summary' => '查询一个实例下的配置清单记录。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetInventorySchema' => [
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
                'abilityTreeCode' => '93960',
                'abilityTreeNodes' => [
                    'FEATUREoosNNSDK6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Aggregator',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否仅展示支持聚合的模式。'."\n"
                            .'取值范围：'."\n"
                            .'- true（只返回支持聚合的模式）'."\n"
                            .'- false（返回所有的模式）',
                        'type' => 'boolean',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'TypeName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '组件名称。取值范围：'."\n"
                            .'- ACS:InstanceInformation'."\n"
                            .'- ACS:Application'."\n"
                            .'- ACS:File'."\n"
                            .'- ACS:Network'."\n"
                            .'- ACS:WindowsRole'."\n"
                            .'- ACS:Service'."\n"
                            .'- ACS:WindowsUpdate'."\n"
                            .'- ACS:WindowsRegistry',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'ACS:Application',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：1-100。默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gAAAAABfh8MVLQI9AuKGACLgjbsXbWs-Mna47IDM6tr6wK7TZ1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'gAAAAABfh8MVLQI9AuKGACLgjbsXbWs-Mna47IDM6tr6wK7TZ1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '89117642-7167-4F4D-B7F1-876582279E3E',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Schemas' => [
                                'description' => '组件配置清单详细信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Version' => [
                                            'description' => '组件版本',
                                            'type' => 'string',
                                            'example' => '1.0',
                                        ],
                                        'TypeName' => [
                                            'description' => '组件名称',
                                            'type' => 'string',
                                            'example' => 'ACS:Application',
                                        ],
                                        'Attributes' => [
                                            'description' => '组件配置的详细属性',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'description' => '组件配置的属性名称',
                                                        'type' => 'string',
                                                        'example' => 'ApplicationType',
                                                    ],
                                                    'DataType' => [
                                                        'description' => '组件配置的数据类型',
                                                        'type' => 'string',
                                                        'example' => 'STRING',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"gAAAAABfh8MVLQI9AuKGACLgjbsXbWs-Mna47IDM6tr6wK7TZ1\\",\\n  \\"RequestId\\": \\"89117642-7167-4F4D-B7F1-876582279E3E\\",\\n  \\"MaxResults\\": \\"1\\",\\n  \\"Schemas\\": [\\n    {\\n      \\"Version\\": \\"1.0\\",\\n      \\"TypeName\\": \\"ACS:Application\\",\\n      \\"Attributes\\": [\\n        {\\n          \\"Name\\": \\"ApplicationType\\",\\n          \\"DataType\\": \\"STRING\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetInventorySchemaResponse>\\n    <RequestId>FE253810-D3CF-5FB7-8F29-69B4D8525A63</RequestId>\\n    <NextToken>gAAAAABhjOVCZyK6F8UtjODxmp7_-28Ctb-Yh27zmXv1QD6yIepgi42prBOMIUQ7EDAqIYKHAM1GRG9Ux5TjncdKol_84qTzKsg2qer7ceijXT-AQMC2XO4EppeAjsvXxFMUjCaBXKkZ7A30vrsTuNc0MsHjiJdqqw==</NextToken>\\n    <MaxResults>1</MaxResults>\\n    <Schemas>\\n        <TypeName>ACS:InstanceInformation</TypeName>\\n        <Version>1.0</Version>\\n        <Attributes>\\n            <DataType>STRING</DataType>\\n            <Name>AgentType</Name>\\n        </Attributes>\\n        <Attributes>\\n            <DataType>STRING</DataType>\\n            <Name>AgentVersion</Name>\\n        </Attributes>\\n        <Attributes>\\n            <DataType>STRING</DataType>\\n            <Name>ComputerName</Name>\\n        </Attributes>\\n        <Attributes>\\n            <DataType>STRING</DataType>\\n            <Name>RamRole</Name>\\n        </Attributes>\\n        <Attributes>\\n            <DataType>STRING</DataType>\\n            <Name>InstanceId</Name>\\n        </Attributes>\\n        <Attributes>\\n            <DataType>STRING</DataType>\\n            <Name>IpAddress</Name>\\n        </Attributes>\\n        <Attributes>\\n            <DataType>STRING</DataType>\\n            <Name>PlatformName</Name>\\n        </Attributes>\\n        <Attributes>\\n            <DataType>STRING</DataType>\\n            <Name>PlatformType</Name>\\n        </Attributes>\\n        <Attributes>\\n            <DataType>STRING</DataType>\\n            <Name>PlatformVersion</Name>\\n        </Attributes>\\n        <Attributes>\\n            <DataType>STRING</DataType>\\n            <Name>ResourceType</Name>\\n        </Attributes>\\n        <Attributes>\\n            <DataType>STRING</DataType>\\n            <Name>Status</Name>\\n        </Attributes>\\n    </Schemas>\\n</GetInventorySchemaResponse>","errorExample":""}]',
            'title' => '获取配置清单的模式信息',
            'summary' => '获取配置清单的模式信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SearchInventory' => [
            'path' => '/SearchInventory',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：1-100。默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '组件过滤规则。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Value' => [
                                    'description' => '组件属性查询值列表。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '组件属性查询值。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'i-bp1cpoxxxxxxxxxxxxxx',
                                    ],
                                    'required' => false,
                                    'example' => 'i-bp1cpoxxxxxxxxxxxxxx',
                                    'maxItems' => 20,
                                ],
                                'Operator' => [
                                    'description' => '组件属性查询值比较符(N取值范围1-5)。'."\n"
                                        .'取值范围：'."\n"
                                        .'- Equal'."\n"
                                        .'- NotEqual'."\n"
                                        .'- BeginWith'."\n"
                                        .'- LessThan'."\n"
                                        .'- GreaterThan',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Equal',
                                ],
                                'Name' => [
                                    'description' => '组件的属性名称(N取值范围1-5)。不同的组件内部属性的名称不同。使用[GetInventorySchema](https://api.aliyun.com/#/?product=oos&version=2019-06-01&api=GetInventorySchema)查询不同组件的属性名称。例如：组件ACS:InstanceInformation下有InstanceId这个属性，所以本参数则取值为ACS:InstanceInformation.InstanceId。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ACS:InstanceInformation.InstanceId',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'Aggregator',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '聚合器。可以使用一个或多个聚合器查询实例聚合信息。'."\n"
                            .'取值范围：'."\n"
                            .'- ACS:Application.Name'."\n"
                            .'- ACS:Application.Version'."\n",
                        'type' => 'array',
                        'items' => [
                            'description' => '聚合器。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ACS:Application.Name',
                        ],
                        'required' => false,
                        'example' => 'ACS:Application.Name',
                        'maxItems' => 5,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A81E4B2E-6B33-4BAE-9856-55DB7C893E01',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Entities' => [
                                'type' => 'array',
                                'items' => [
                                    'description' => '组件查询的详细配置清单，或聚合信息。',
                                    'type' => 'object',
                                    'example' => '[ { "ACS:InstanceInformation": { "CaptureTime": "2020-10-13T08:55:06Z", "SchemaVersion": "1.0", "Content": { "PlatformName": "ubuntu", "PlatformVersion": "20.04", 	"Status": "Running", "InstanceId": "i-bp1cpoxxxxxxxxxxxxxx", "AgentVersion": "v1.5", "ComputerName": "iZbp1cpoxxxw111jcv94drZ", "IpAddress": "192.168.10.245", "AgentName": "oosutil", "PlatformType": "linux" }, "RegionId": "cn-hangzhou" }, "Id": "i-bp1cpoxxxxxxxxxxxxxx" } ]}',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC\\",\\n  \\"RequestId\\": \\"A81E4B2E-6B33-4BAE-9856-55DB7C893E01\\",\\n  \\"MaxResults\\": 50,\\n  \\"Entities\\": [\\n    {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>5B694097-E7C7-4231-858C-B979CEC3A0AC</RequestId>\\n<MaxResults>50</MaxResults>\\n<Entities>\\n    <Data>\\n        <ACS:Application>\\n            <Content>\\n                <ACS:Application.Name>NetworkManager</ACS:Application.Name>\\n                <ACS:Application.Version>1.22.8</ACS:Application.Version>\\n                <Count>1</Count>\\n            </Content>\\n            <Content>\\n                <ACS:Application.Name>NetworkManager-libnm</ACS:Application.Name>\\n                <ACS:Application.Version>1.22.8</ACS:Application.Version>\\n                <Count>1</Count>\\n            </Content>\\n            <Content>\\n                <ACS:Application.Name>NetworkManager-team</ACS:Application.Name>\\n                <ACS:Application.Version>1.22.8</ACS:Application.Version>\\n                <Count>1</Count>\\n            </Content>\\n            <Content>\\n                <ACS:Application.Name>NetworkManager-tui</ACS:Application.Name>\\n                <ACS:Application.Version>1.22.8</ACS:Application.Version>\\n                <Count>1</Count>\\n            </Content>\\n            <Content>\\n                <ACS:Application.Name>PackageKit</ACS:Application.Name>\\n                <ACS:Application.Version>1.1.12</ACS:Application.Version>\\n                <Count>1</Count>\\n            </Content>\\n            <Content>\\n                <ACS:Application.Name>PackageKit-glib</ACS:Application.Name>\\n                <ACS:Application.Version>1.1.12</ACS:Application.Version>\\n                <Count>1</Count>\\n            </Content>\\n            <Content>\\n                <ACS:Application.Name>abattis-cantarell-fonts</ACS:Application.Name>\\n                <ACS:Application.Version>0.0.25</ACS:Application.Version>\\n                <Count>1</Count>\\n            </Content>\\n            <Content>\\n                <ACS:Application.Name>acl</ACS:Application.Name>\\n                <ACS:Application.Version>2.2.53</ACS:Application.Version>\\n                <Count>1</Count>\\n            </Content>\\n            <Content>\\n                <ACS:Application.Name>adcli</ACS:Application.Name>\\n                <ACS:Application.Version>0.8.2</ACS:Application.Version>\\n                <Count>1</Count>\\n            </Content>\\n            <Content>\\n                <ACS:Application.Name>aliyun_assist</ACS:Application.Name>\\n                <ACS:Application.Version>1.0.2.493</ACS:Application.Version>\\n                <Count>1</Count>\\n            </Content>\\n        </ACS:Application>\\n    </Data>\\n</Entities>","errorExample":""}]',
            'title' => '查询配置清单的详细信息或聚合信息',
            'summary' => '查询配置清单的详细信息或聚合信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateStateConfiguration' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终态配置的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'collect inventory data',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。内容限制为字母、数字、中划线、下划线，长度200字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ACS-ECS-InventoryDataCollection',
                    ],
                ],
                [
                    'name' => 'TemplateVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本号，如不填默认为最新的版本号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{     "policy": {       "ACS:Application": {         "Collection": "Enabled"       },       "ACS:Network": {         "Collection": "Enabled"       }     }   }',
                    ],
                ],
                [
                    'name' => 'ConfigureMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配置模式。'."\n"
                            .'ApplyOnly：配置只应用一次（更新配置后重新应用）。'."\n"
                            .'ApplyAndMonitor： 配置只应用一次，成功应用后，后续只检查配置是否漂移。'."\n"
                            .'ApplyAndAutoCorrect：总是应用配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ApplyOnce',
                    ],
                ],
                [
                    'name' => 'ScheduleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度类型。可选值：rate。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'rate',
                    ],
                ],
                [
                    'name' => 'ScheduleExpression',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度表达式。调度间隔不得小于30分钟。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1 hour',
                    ],
                ],
                [
                    'name' => 'Targets',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标资源。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{     "ResourceType": "ALIYUN::ECS::Instance",     "Filters": [       {         "Type": "All",         "RegionId": "cn-hangzhou",         "Parameters": {           "RegionId": "cn-hangzhou",           "Status": "Running"         }       }     ]   }',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DASKJJLKADS-AHKLJHJSAKL-AJK',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"Key": "oos", "Value": "inventory"}',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
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
                                'example' => '1306108F-610C-40FD-AAD5-DA13E8B00BE9',
                            ],
                            'StateConfiguration' => [
                                'description' => '终态配置。',
                                'type' => 'object',
                                'properties' => [
                                    'CreateTime' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-03-22T03:13:32Z',
                                    ],
                                    'Targets' => [
                                        'description' => '目标资源。'."\n",
                                        'type' => 'string',
                                        'example' => '{     "ResourceType": "ALIYUN::ECS::Instance",     "Filters": [       {         "Type": "All",         "RegionId": "cn-hangzhou",         "Parameters": {           "RegionId": "cn-hangzhou",           "Status": "Running"         }       }     ]   }',
                                    ],
                                    'Tags' => [
                                        'description' => '标签。',
                                        'type' => 'object',
                                        'example' => '{"Key": "oos", "Value": "inventory"}',
                                    ],
                                    'StateConfigurationId' => [
                                        'description' => '创建生成的配置ID。',
                                        'type' => 'string',
                                        'example' => 'sc-a538febe18fabcdef',
                                    ],
                                    'ScheduleExpression' => [
                                        'description' => '定时表达式。',
                                        'type' => 'string',
                                        'example' => '1 hour',
                                    ],
                                    'TemplateName' => [
                                        'description' => '模板名称。',
                                        'type' => 'string',
                                        'example' => 'ACS-ECS-InventoryDataCollection',
                                    ],
                                    'TemplateVersion' => [
                                        'description' => '模板版本。',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                    'ConfigureMode' => [
                                        'description' => '配置模式。',
                                        'type' => 'string',
                                        'example' => 'ApplyAndAutoCorrect',
                                    ],
                                    'ScheduleType' => [
                                        'description' => '定时类型。',
                                        'type' => 'string',
                                        'example' => 'rate',
                                    ],
                                    'Parameters' => [
                                        'description' => '参数。',
                                        'type' => 'object',
                                        'example' => '{"policy": {"ACS:Network": {"Collection": "Enabled"}, "ACS:Application": {"Collection": "Enabled"}}}',
                                    ],
                                    'Description' => [
                                        'description' => '描述信息。',
                                        'type' => 'string',
                                        'example' => 'collect inventory data',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m4******',
                                    ],
                                    'TemplateId' => [
                                        'description' => '模板ID。',
                                        'type' => 'string',
                                        'example' => 't-1234asadf',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1306108F-610C-40FD-AAD5-DA13E8B00BE9\\",\\n  \\"StateConfiguration\\": {\\n    \\"CreateTime\\": \\"2021-03-22T03:13:32Z\\",\\n    \\"Targets\\": \\"{     \\\\\\"ResourceType\\\\\\": \\\\\\"ALIYUN::ECS::Instance\\\\\\",     \\\\\\"Filters\\\\\\": [       {         \\\\\\"Type\\\\\\": \\\\\\"All\\\\\\",         \\\\\\"RegionId\\\\\\": \\\\\\"cn-hangzhou\\\\\\",         \\\\\\"Parameters\\\\\\": {           \\\\\\"RegionId\\\\\\": \\\\\\"cn-hangzhou\\\\\\",           \\\\\\"Status\\\\\\": \\\\\\"Running\\\\\\"         }       }     ]   }\\",\\n    \\"Tags\\": {\\n      \\"Key\\": \\"oos\\",\\n      \\"Value\\": \\"inventory\\"\\n    },\\n    \\"StateConfigurationId\\": \\"sc-a538febe18fabcdef\\",\\n    \\"ScheduleExpression\\": \\"1 hour\\",\\n    \\"TemplateName\\": \\"ACS-ECS-InventoryDataCollection\\",\\n    \\"TemplateVersion\\": \\"v1\\",\\n    \\"ConfigureMode\\": \\"ApplyAndAutoCorrect\\",\\n    \\"ScheduleType\\": \\"rate\\",\\n    \\"Parameters\\": {\\n      \\"policy\\": {\\n        \\"ACS:Network\\": {\\n          \\"Collection\\": \\"Enabled\\"\\n        },\\n        \\"ACS:Application\\": {\\n          \\"Collection\\": \\"Enabled\\"\\n        }\\n      }\\n    },\\n    \\"Description\\": \\"collect inventory data\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n    \\"TemplateId\\": \\"t-1234asadf\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateStateConfigurationResponse>\\n    <RequestId>1306108F-610C-40FD-AAD5-DA13E8B00BE9</RequestId>\\n    <StateConfiguration>\\n        <CreateTime>2021-03-22T03:13:32Z</CreateTime>\\n        <Targets>{     \\"ResourceType\\": \\"ALIYUN::ECS::Instance\\",     \\"Filters\\": [       {         \\"Type\\": \\"All\\",         \\"RegionId\\": \\"cn-hangzhou\\",         \\"Parameters\\": {           \\"RegionId\\": \\"cn-hangzhou\\",           \\"Status\\": \\"Running\\"         }       }     ]   }</Targets>\\n        <StateConfigurationId>sc-a538febe18fabcdef</StateConfigurationId>\\n        <ScheduleExpression>1 hour</ScheduleExpression>\\n        <TemplateName>ACS-ECS-InventoryDataCollection</TemplateName>\\n        <TemplateVersion>v1</TemplateVersion>\\n        <ConfigureMode>ApplyAndAutoCorrect</ConfigureMode>\\n        <ScheduleType>rate</ScheduleType>\\n        <Description>收集Inventory数据</Description>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <Tags>\\n            <oos>inventory</oos>\\n        </Tags>\\n        <TemplateId>t-1234asadf</TemplateId>\\n    </StateConfiguration>\\n</CreateStateConfigurationResponse>","errorExample":""}]',
            'title' => '创建一个终态配置',
            'summary' => '创建终态配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteStateConfigurations' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'StateConfigurationIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终态配置ID列表。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["sc-asfgdhj12345"]',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abcde3OARpx77No54nv6',
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
                                'example' => '12345B731-0FCE-48BA-8D42-605abcde',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"12345B731-0FCE-48BA-8D42-605abcde\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>12345B731-0FCE-48BA-8D42-605abcde</RequestId>","errorExample":""}]',
            'title' => '删除多个终态配置',
            'summary' => '批量删除终态配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateStateConfiguration' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ACS-ECS-InventoryDataCollection',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '参数。'."\n",
                        'type' => 'object',
                        'required' => false,
                        'example' => '{ "policy": { "ACS:Application": { "Collection": "Enabled" }, "ACS:Network": { "Collection": "Enabled" } } }',
                    ],
                ],
                [
                    'name' => 'ConfigureMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '配置模式。 ApplyOnce：配置只应用一次（更新配置后重新应用）。 ApplyAndMonitor： 配置只应用一次，成功应用后，后续只检查配置是否漂移。 ApplyAndAutoCorrect：总是应用配置。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ApplyOnce',
                    ],
                ],
                [
                    'name' => 'ScheduleType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度类型。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rate',
                    ],
                ],
                [
                    'name' => 'ScheduleExpression',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度表达式。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '1 hour',
                    ],
                ],
                [
                    'name' => 'Targets',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目标资源。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '{ "ResourceType": "ALIYUN::ECS::Instance", "Filters": [ { "Type": "All", "RegionId": "cn-hangzhou", "Parameters": { "RegionId": "cn-hangzhou", "Status": "Running" } } ] }',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等token。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DASKJJLKADS-AHKLJHJSAKL-AJK',
                    ],
                ],
                [
                    'name' => 'StateConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终态配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sc-asfgdhj12345',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。'."\n",
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"Key": "oos", "Value": "sc"}',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
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
                                'example' => '1306108F-610C-40FD-AAD5-DA13E8B00BE9',
                            ],
                            'StateConfiguration' => [
                                'description' => '配置清单。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'UpdateTime' => [
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2021-03-22T03:13:32Z',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-03-22T03:13:32Z',
                                        ],
                                        'Targets' => [
                                            'description' => '目标资源。'."\n",
                                            'type' => 'string',
                                            'example' => '{ "ResourceType": "ALIYUN::ECS::Instance", "Filters": [ { "Type": "All", "RegionId": "cn-hangzhou", "Parameters": { "RegionId": "cn-hangzhou", "Status": "Running" } } ] }',
                                        ],
                                        'Tags' => [
                                            'description' => '标签。'."\n",
                                            'type' => 'object',
                                            'example' => '{"Key": "oos", "Value": "inventory"}',
                                        ],
                                        'StateConfigurationId' => [
                                            'description' => '创建生成的配置ID。'."\n",
                                            'type' => 'string',
                                            'example' => 'StateConfigurationId',
                                        ],
                                        'ScheduleExpression' => [
                                            'description' => '定时表达式。'."\n",
                                            'type' => 'string',
                                            'example' => '1 hour',
                                        ],
                                        'TemplateName' => [
                                            'description' => '模板名称。'."\n",
                                            'type' => 'string',
                                            'example' => 'ACS-ECS-InventoryDataCollection',
                                        ],
                                        'TemplateVersion' => [
                                            'description' => '模板版本。'."\n",
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                        'ConfigureMode' => [
                                            'description' => '配置模式。'."\n",
                                            'type' => 'string',
                                            'example' => 'ApplyAndAutoCorrect',
                                        ],
                                        'ScheduleType' => [
                                            'description' => '定时类型。'."\n",
                                            'type' => 'string',
                                            'example' => 'rate',
                                        ],
                                        'Parameters' => [
                                            'description' => '参数。'."\n",
                                            'type' => 'string',
                                            'example' => '{"policy": {"ACS:Network": {"Collection": "Enabled"}, "ACS:Application": {"Collection": "Enabled"}}}',
                                        ],
                                        'Description' => [
                                            'description' => '终态配置的描述信息。'."\n",
                                            'type' => 'string',
                                            'example' => '收集Inventory数据',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-acfmxsn4m4******',
                                        ],
                                        'TemplateId' => [
                                            'description' => '模板ID。'."\n",
                                            'type' => 'string',
                                            'example' => 't-1234asadf',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1306108F-610C-40FD-AAD5-DA13E8B00BE9\\",\\n  \\"StateConfiguration\\": [\\n    {\\n      \\"UpdateTime\\": \\"2021-03-22T03:13:32Z\\",\\n      \\"CreateTime\\": \\"2021-03-22T03:13:32Z\\",\\n      \\"Targets\\": \\"{ \\\\\\"ResourceType\\\\\\": \\\\\\"ALIYUN::ECS::Instance\\\\\\", \\\\\\"Filters\\\\\\": [ { \\\\\\"Type\\\\\\": \\\\\\"All\\\\\\", \\\\\\"RegionId\\\\\\": \\\\\\"cn-hangzhou\\\\\\", \\\\\\"Parameters\\\\\\": { \\\\\\"RegionId\\\\\\": \\\\\\"cn-hangzhou\\\\\\", \\\\\\"Status\\\\\\": \\\\\\"Running\\\\\\" } } ] }\\",\\n      \\"Tags\\": {\\n        \\"Key\\": \\"oos\\",\\n        \\"Value\\": \\"inventory\\"\\n      },\\n      \\"StateConfigurationId\\": \\"StateConfigurationId\\",\\n      \\"ScheduleExpression\\": \\"1 hour\\",\\n      \\"TemplateName\\": \\"ACS-ECS-InventoryDataCollection\\",\\n      \\"TemplateVersion\\": \\"v1\\",\\n      \\"ConfigureMode\\": \\"ApplyAndAutoCorrect\\",\\n      \\"ScheduleType\\": \\"rate\\",\\n      \\"Parameters\\": \\"{\\\\\\"policy\\\\\\": {\\\\\\"ACS:Network\\\\\\": {\\\\\\"Collection\\\\\\": \\\\\\"Enabled\\\\\\"}, \\\\\\"ACS:Application\\\\\\": {\\\\\\"Collection\\\\\\": \\\\\\"Enabled\\\\\\"}}}\\",\\n      \\"Description\\": \\"收集Inventory数据\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n      \\"TemplateId\\": \\"t-1234asadf\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<UpdateStateConfigurationResponse>\\n    <RequestId>1306108F-610C-40FD-AAD5-DA13E8B00BE9</RequestId>\\n    <StateConfiguration>\\n        <UpdateTime>2021-03-22T03:13:32Z</UpdateTime>\\n        <CreateTime>2021-03-22T03:13:32Z</CreateTime>\\n        <Targets>{ \\"ResourceType\\": \\"ALIYUN::ECS::Instance\\", \\"Filters\\": [ { \\"Type\\": \\"All\\", \\"RegionId\\": \\"cn-hangzhou\\", \\"Parameters\\": { \\"RegionId\\": \\"cn-hangzhou\\", \\"Status\\": \\"Running\\" } } ] }</Targets>\\n        <StateConfigurationId>StateConfigurationId</StateConfigurationId>\\n        <ScheduleExpression>1 hour</ScheduleExpression>\\n        <TemplateName>ACS-ECS-InventoryDataCollection</TemplateName>\\n        <TemplateVersion>v1</TemplateVersion>\\n        <ConfigureMode>ApplyAndAutoCorrect</ConfigureMode>\\n        <ScheduleType>rate</ScheduleType>\\n        <Parameters>{\\"policy\\": {\\"ACS:Network\\": {\\"Collection\\": \\"Enabled\\"}, \\"ACS:Application\\": {\\"Collection\\": \\"Enabled\\"}}}</Parameters>\\n        <Description>收集Inventory数据</Description>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <TemplateId>t-1234asadf</TemplateId>\\n    </StateConfiguration>\\n</UpdateStateConfigurationResponse>","errorExample":""}]',
            'title' => '更新一个终态配置',
            'summary' => '更新终态配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListStateConfigurations' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模板名称。内容限制为字母、数字、中划线、下划线，长度200字符。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'ACS-ECS-InventoryDataCollection',
                    ],
                ],
                [
                    'name' => 'TemplateVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本号，如不填默认为最新的版本号。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1',
                    ],
                ],
                [
                    'name' => 'StateConfigurationIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终态配置ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '["sc-asfgdhj12345"]',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'object',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '{"Key": "oos", "Value": "inventory"}',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页返回的最大结果数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一页Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AHJKH-AHKJHDJK-AKHDIOWJL',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
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
                                'example' => '1306108F-610C-40FD-AAD5-DA13E8B00BE9',
                            ],
                            'StateConfigurations' => [
                                'description' => '终态配置列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'UpdateTime' => [
                                            'description' => '配置更新时间。',
                                            'type' => 'string',
                                            'example' => '2021-04-22T03:13:32Z',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-03-22T03:13:32Z',
                                        ],
                                        'Targets' => [
                                            'description' => '目标资源。',
                                            'type' => 'string',
                                            'example' => '{ "ResourceType": "ALIYUN::ECS::Instance", "Filters": [ { "Type": "All", "RegionId": "cn-hangzhou", "Parameters": { "RegionId": "cn-hangzhou", "Status": "Running" } } ] }',
                                        ],
                                        'Tags' => [
                                            'description' => '标签。',
                                            'type' => 'object',
                                            'example' => '{"Key": "oos", "Value": "inventory"}',
                                        ],
                                        'StateConfigurationId' => [
                                            'description' => '终态配置ID。'."\n",
                                            'type' => 'string',
                                            'example' => 'sc-a538febe18fabcdef',
                                        ],
                                        'ScheduleExpression' => [
                                            'description' => '定时表达式。',
                                            'type' => 'string',
                                            'example' => '1 hour',
                                        ],
                                        'TemplateName' => [
                                            'description' => '模版名称。',
                                            'type' => 'string',
                                            'example' => 'ACS-ECS-InventoryDataCollection',
                                        ],
                                        'TemplateVersion' => [
                                            'description' => '模版版本。',
                                            'type' => 'string',
                                            'example' => 'v2',
                                        ],
                                        'ConfigureMode' => [
                                            'description' => '配置模式。',
                                            'type' => 'string',
                                            'example' => 'ApplyAndAutoCorrect',
                                        ],
                                        'ScheduleType' => [
                                            'description' => '定时类型。'."\n",
                                            'type' => 'string',
                                            'example' => 'rate',
                                        ],
                                        'Parameters' => [
                                            'description' => '参数。'."\n",
                                            'type' => 'string',
                                            'example' => '{"policy": {"ACS:Network": {"Collection": "Enabled"}, "ACS:Application": {"Collection": "Enabled"}}}',
                                        ],
                                        'Description' => [
                                            'description' => '描述内容。',
                                            'type' => 'string',
                                            'example' => ' inventory数据收集',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-acfmxsn4m4******',
                                        ],
                                        'TemplateId' => [
                                            'description' => '模版ID。',
                                            'type' => 'string',
                                            'example' => 't-ajshjalscfhjk2214',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '下一页token。',
                                'type' => 'string',
                                'example' => 'AAAAASO3cL82+b5iji7bfPNpMh8=',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1306108F-610C-40FD-AAD5-DA13E8B00BE9\\",\\n  \\"StateConfigurations\\": [\\n    {\\n      \\"UpdateTime\\": \\"2021-04-22T03:13:32Z\\",\\n      \\"CreateTime\\": \\"2021-03-22T03:13:32Z\\",\\n      \\"Targets\\": \\"{ \\\\\\"ResourceType\\\\\\": \\\\\\"ALIYUN::ECS::Instance\\\\\\", \\\\\\"Filters\\\\\\": [ { \\\\\\"Type\\\\\\": \\\\\\"All\\\\\\", \\\\\\"RegionId\\\\\\": \\\\\\"cn-hangzhou\\\\\\", \\\\\\"Parameters\\\\\\": { \\\\\\"RegionId\\\\\\": \\\\\\"cn-hangzhou\\\\\\", \\\\\\"Status\\\\\\": \\\\\\"Running\\\\\\" } } ] }\\",\\n      \\"Tags\\": {\\n        \\"Key\\": \\"oos\\",\\n        \\"Value\\": \\"inventory\\"\\n      },\\n      \\"StateConfigurationId\\": \\"sc-a538febe18fabcdef\\",\\n      \\"ScheduleExpression\\": \\"1 hour\\",\\n      \\"TemplateName\\": \\"ACS-ECS-InventoryDataCollection\\",\\n      \\"TemplateVersion\\": \\"v2\\",\\n      \\"ConfigureMode\\": \\"ApplyAndAutoCorrect\\",\\n      \\"ScheduleType\\": \\"rate\\",\\n      \\"Parameters\\": \\"{\\\\\\"policy\\\\\\": {\\\\\\"ACS:Network\\\\\\": {\\\\\\"Collection\\\\\\": \\\\\\"Enabled\\\\\\"}, \\\\\\"ACS:Application\\\\\\": {\\\\\\"Collection\\\\\\": \\\\\\"Enabled\\\\\\"}}}\\",\\n      \\"Description\\": \\" inventory数据收集\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\",\\n      \\"TemplateId\\": \\"t-ajshjalscfhjk2214\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"AAAAASO3cL82+b5iji7bfPNpMh8=\\"\\n}","errorExample":""},{"type":"xml","example":"<ListStateConfigurationsResponse>\\n    <RequestId>1306108F-610C-40FD-AAD5-DA13E8B00BE9</RequestId>\\n    <StateConfigurations>\\n        <UpdateTime>2021-04-22T03:13:32Z</UpdateTime>\\n        <CreateTime>2021-03-22T03:13:32Z</CreateTime>\\n        <Targets>{ \\"ResourceType\\": \\"ALIYUN::ECS::Instance\\", \\"Filters\\": [ { \\"Type\\": \\"All\\", \\"RegionId\\": \\"cn-hangzhou\\", \\"Parameters\\": { \\"RegionId\\": \\"cn-hangzhou\\", \\"Status\\": \\"Running\\" } } ] }</Targets>\\n        <StateConfigurationId>sc-a538febe18fabcdef</StateConfigurationId>\\n        <ScheduleExpression>1 hour</ScheduleExpression>\\n        <TemplateName>ACS-ECS-InventoryDataCollection</TemplateName>\\n        <TemplateVersion>v2</TemplateVersion>\\n        <ConfigureMode>ApplyAndAutoCorrect</ConfigureMode>\\n        <ScheduleType>rate</ScheduleType>\\n        <Parameters>{\\"policy\\": {\\"ACS:Network\\": {\\"Collection\\": \\"Enabled\\"}, \\"ACS:Application\\": {\\"Collection\\": \\"Enabled\\"}}}</Parameters>\\n        <Description> inventory数据收集</Description>\\n        <ResourceGroupId>rg-acfmxsn4m4******</ResourceGroupId>\\n        <TemplateId>t-ajshjalscfhjk2214</TemplateId>\\n    </StateConfigurations>\\n</ListStateConfigurationsResponse>","errorExample":""}]',
            'title' => '查询终态配置',
            'summary' => '查询终态配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateOpsItem' => [
            'summary' => '创建运维项。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运维项标题。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ECS reboot is scheduled',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '操作的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OpsItem',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "k1": "v1",'."\n"
                            .'      "k2": "v2"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123e56767-e89b-12d3-a456-426655440000',
                    ],
                ],
                [
                    'name' => 'Severity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '严重程度。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'High' => 'High',
                            'Low' => 'Low',
                            'Medium' => 'Medium',
                            'Critical' => 'Critical',
                        ],
                        'example' => 'Medium',
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'description' => '来源业务。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/aliyun/ecs',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分类。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Availability' => 'Availability',
                            'Performance' => 'Performance',
                            'Security' => 'Security',
                            'Cost' => 'Cost',
                            'Recovery' => 'Recovery',
                        ],
                        'example' => 'Security',
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'query',
                    'schema' => [
                        'description' => '优先级。取值范围1-5，1为最高优先级。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            1 => '1',
                            '2',
                            '3',
                            '4',
                            '5',
                        ],
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'Solutions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '解决方案列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{\\n    \\"priority\\":3,\\n    \\"type\\":\\"SingleAZEcs\\",\\n    \\"url\\":\\"http://ecs.consle.aliyuncs.com\\",\\n    \\"description\\":\\"请创建不同可用区的ECS实例，并导入到应用分组中\\"\\n}]',
                    ],
                ],
                [
                    'name' => 'DedupString',
                    'in' => 'query',
                    'schema' => [
                        'description' => '去重字符串。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs_instance_SystemMaintenance.Reboot',
                    ],
                ],
                [
                    'name' => 'Resources',
                    'in' => 'query',
                    'schema' => [
                        'description' => '关联资源ARN列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[\\"acs:oos:cn-hangzhou:1563457855438522:application/test-33333/applicationgroup/default-cn-hangzhou-1\\"]',
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
                                'example' => 'DA4F08D4-DA54-5407-84B9-108C71D75B17',
                            ],
                            'OpsItem' => [
                                'description' => '运维项。',
                                'type' => 'object',
                                'properties' => [
                                    'Tags' => [
                                        'description' => '标签。',
                                        'type' => 'object',
                                        'example' => '{"k1": "v1"}',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2023-03-24T03:55Z',
                                    ],
                                    'Description' => [
                                        'description' => '描述信息。',
                                        'type' => 'string',
                                        'example' => 'OpsItem',
                                    ],
                                    'OpsItemId' => [
                                        'description' => '运维项ID。',
                                        'type' => 'string',
                                        'example' => 'oi-dba9c6eec9254a4d87c1',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2023-03-24T03:55Z',
                                    ],
                                    'Title' => [
                                        'description' => '运维项标题。',
                                        'type' => 'string',
                                        'example' => 'ECS reboot is scheduled',
                                    ],
                                    'Status' => [
                                        'description' => '状态。',
                                        'type' => 'string',
                                        'example' => 'Running',
                                    ],
                                    'Severity' => [
                                        'description' => '严重性级别。',
                                        'type' => 'string',
                                        'example' => 'Medium',
                                    ],
                                    'Category' => [
                                        'description' => '分类。',
                                        'type' => 'string',
                                        'example' => 'Security',
                                    ],
                                    'Source' => [
                                        'description' => '来源业务。',
                                        'type' => 'string',
                                        'example' => '/aliyun/ecs',
                                    ],
                                    'Priority' => [
                                        'description' => '优先级。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'Solutions' => [
                                        'description' => '解决方案列表。',
                                        'type' => 'string',
                                        'example' => '[{\\n    \\"priority\\":3,\\n    \\"type\\":\\"url\\",\\n    \\"url\\":\\"https://example.com\\",\\n    \\"description\\":\\"请对集群设置跨可用区高可用。\\"\\n}]',
                                    ],
                                    'Resources' => [
                                        'description' => '关联资源ARN列表。',
                                        'type' => 'string',
                                        'example' => '[\\"acs:oos:cn-hangzhou:1563457855438522:application/dingTest/applicationgroup/fltest\\"]',
                                    ],
                                    'Attributes' => [
                                        'description' => '运维项属性信息。',
                                        'type' => 'string',
                                        'example' => '{\\"regionId\\":\\"cn-zhangjiakou\\",\\"appId\\":\\"992BKO1X75GRQ4E8\\",\\"instanceId\\":\\"i-8vbcymxagqsyyyjppbr4\\",\\"instance_name\\":\\"cdae\\"}',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '运维项创建者。',
                                        'type' => 'string',
                                        'example' => 'root(130900000)'."\n",
                                    ],
                                    'LastModifiedBy' => [
                                        'description' => '运维项修改者。',
                                        'type' => 'string',
                                        'example' => 'root(130900000)'."\n",
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m4******',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA4F08D4-DA54-5407-84B9-108C71D75B17\\",\\n  \\"OpsItem\\": {\\n    \\"Tags\\": {\\n      \\"k1\\": \\"v1\\"\\n    },\\n    \\"UpdateDate\\": \\"2023-03-24T03:55Z\\",\\n    \\"Description\\": \\"OpsItem\\",\\n    \\"OpsItemId\\": \\"oi-dba9c6eec9254a4d87c1\\",\\n    \\"CreateDate\\": \\"2023-03-24T03:55Z\\",\\n    \\"Title\\": \\"ECS reboot is scheduled\\",\\n    \\"Status\\": \\"Running\\",\\n    \\"Severity\\": \\"Medium\\",\\n    \\"Category\\": \\"Security\\",\\n    \\"Source\\": \\"/aliyun/ecs\\",\\n    \\"Priority\\": 2,\\n    \\"Solutions\\": \\"[{\\\\\\\\n    \\\\\\\\\\\\\\"priority\\\\\\\\\\\\\\":3,\\\\\\\\n    \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"url\\\\\\\\\\\\\\",\\\\\\\\n    \\\\\\\\\\\\\\"url\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"https://example.com\\\\\\\\\\\\\\",\\\\\\\\n    \\\\\\\\\\\\\\"description\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"请对集群设置跨可用区高可用。\\\\\\\\\\\\\\"\\\\\\\\n}]\\",\\n    \\"Resources\\": \\"[\\\\\\\\\\\\\\"acs:oos:cn-hangzhou:1563457855438522:application/dingTest/applicationgroup/fltest\\\\\\\\\\\\\\"]\\",\\n    \\"Attributes\\": \\"{\\\\\\\\\\\\\\"regionId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cn-zhangjiakou\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"appId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"992BKO1X75GRQ4E8\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"instanceId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"i-8vbcymxagqsyyyjppbr4\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"instance_name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cdae\\\\\\\\\\\\\\"}\\",\\n    \\"CreatedBy\\": \\"root(130900000)\\\\n\\",\\n    \\"LastModifiedBy\\": \\"root(130900000)\\\\n\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建运维项',
        ],
        'GetOpsItem' => [
            'summary' => '获取运维项详情。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'OpsItemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运维项ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'oi-d52b08695e2b46ae8413',
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
                                'example' => '8BED4C16-BD30-5E27-94D4-7EBCCECF70C1',
                            ],
                            'OpsItem' => [
                                'description' => '运维项',
                                'type' => 'object',
                                'properties' => [
                                    'OpsItemId' => [
                                        'description' => '运维项ID。',
                                        'type' => 'string',
                                        'example' => 'oi-d52b08695e2b46ae8413'."\n",
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2023-04-10T06:15Z',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2023-04-10T06:15Z'."\n",
                                    ],
                                    'Title' => [
                                        'description' => '运维项标题。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'Status' => [
                                        'description' => '状态。',
                                        'type' => 'string',
                                        'example' => 'Open',
                                    ],
                                    'Severity' => [
                                        'description' => '严重性级别。',
                                        'type' => 'string',
                                        'example' => 'Medium',
                                    ],
                                    'Category' => [
                                        'description' => '分类。',
                                        'type' => 'string',
                                        'example' => 'Security',
                                    ],
                                    'Source' => [
                                        'description' => '来源业务。',
                                        'type' => 'string',
                                        'example' => '/aliyun/appManager',
                                    ],
                                    'Priority' => [
                                        'description' => '优先级。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Tags' => [
                                        'description' => '标签。',
                                        'type' => 'object',
                                        'example' => '{"K1":"V1"}',
                                    ],
                                    'Solutions' => [
                                        'description' => '解决方案列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '解决方案。',
                                            'type' => 'object',
                                        ],
                                    ],
                                    'Resources' => [
                                        'description' => '关联资源ARN列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '关联资源ARN。',
                                            'type' => 'string',
                                            'example' => '[\\"arn:acs:ecs:cn-hangzhou:1770150251620858:instance/i-bp12tnoea6nwofva06e8\\"]',
                                        ],
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-aekzxkofnlxtn2i',
                                    ],
                                    'Description' => [
                                        'description' => '描述内容。',
                                        'type' => 'string',
                                        'example' => 'test-update',
                                    ],
                                    'CreateBy' => [
                                        'description' => '创建者信息。',
                                        'type' => 'string',
                                        'example' => 'root(130900000)'."\n",
                                    ],
                                    'LastModifiedBy' => [
                                        'description' => '运维项修改者。',
                                        'type' => 'string',
                                        'example' => 'modifiedBy',
                                    ],
                                    'Attributes' => [
                                        'description' => '运维项属性信息。',
                                        'type' => 'object',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8BED4C16-BD30-5E27-94D4-7EBCCECF70C1\\",\\n  \\"OpsItem\\": {\\n    \\"OpsItemId\\": \\"oi-d52b08695e2b46ae8413\\\\n\\",\\n    \\"CreateDate\\": \\"2023-04-10T06:15Z\\",\\n    \\"UpdateDate\\": \\"2023-04-10T06:15Z\\\\n\\",\\n    \\"Title\\": \\"test\\",\\n    \\"Status\\": \\"Open\\",\\n    \\"Severity\\": \\"Medium\\",\\n    \\"Category\\": \\"Security\\",\\n    \\"Source\\": \\"/aliyun/appManager\\",\\n    \\"Priority\\": 1,\\n    \\"Tags\\": {\\n      \\"K1\\": \\"V1\\"\\n    },\\n    \\"Solutions\\": [\\n      {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    ],\\n    \\"Resources\\": [\\n      \\"[\\\\\\\\\\\\\\"arn:acs:ecs:cn-hangzhou:1770150251620858:instance/i-bp12tnoea6nwofva06e8\\\\\\\\\\\\\\"]\\"\\n    ],\\n    \\"ResourceGroupId\\": \\"rg-aekzxkofnlxtn2i\\",\\n    \\"Description\\": \\"test-update\\",\\n    \\"CreateBy\\": \\"root(130900000)\\\\n\\",\\n    \\"LastModifiedBy\\": \\"modifiedBy\\",\\n    \\"Attributes\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取运维项',
        ],
        'ListOpsItems' => [
            'summary' => '查询运维项。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '124650',
                'abilityTreeNodes' => [
                    'FEATUREoosU53HTK',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：10-100。默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用来翻页的Token字符串。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ3NjFENDdB',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '组件过滤规则。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Value' => [
                                    'description' => '过滤器值列表。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '过滤参数值',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'Open',
                                    ],
                                    'required' => false,
                                    'maxItems' => 100,
                                ],
                                'Operator' => [
                                    'description' => '组件属性查询值比较符。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Equal',
                                ],
                                'Name' => [
                                    'description' => '过滤参数名称',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Status',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"k1": "v1", "k2": "v2"}',
                    ],
                ],
                [
                    'name' => 'ResourceTags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '资源标签信息',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "k1": "v1",'."\n"
                            .'      "k2": "v2"'."\n"
                            .'}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => 'gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC6KPDUL0FIIb',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '113DD533-389C-5F83-9C69-F64D5BAB10B2',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'OpsItems' => [
                                'description' => '运维项列表。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'OpsItemId' => [
                                            'description' => '运维项ID。',
                                            'type' => 'string',
                                            'example' => 'oi-d52b08695e2b46ae8413',
                                        ],
                                        'CreateDate' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2023-07-09T10:01Z',
                                        ],
                                        'UpdateDate' => [
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2023-07-09T10:01Z',
                                        ],
                                        'Title' => [
                                            'description' => '运维项标题。',
                                            'type' => 'string',
                                            'example' => 'Test',
                                        ],
                                        'Status' => [
                                            'description' => '状态。',
                                            'type' => 'string',
                                            'example' => 'Open',
                                        ],
                                        'Severity' => [
                                            'description' => '严重性级别。',
                                            'type' => 'string',
                                            'example' => 'Medium',
                                        ],
                                        'Category' => [
                                            'description' => '分类。',
                                            'type' => 'string',
                                            'example' => 'Security',
                                        ],
                                        'Source' => [
                                            'description' => '来源业务。',
                                            'type' => 'string',
                                            'example' => '/aliyun/ecs',
                                        ],
                                        'Priority' => [
                                            'description' => '优先级。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Tags' => [
                                            'description' => '标签。',
                                            'type' => 'object',
                                            'example' => '{"k1":"v1"}',
                                        ],
                                        'Resources' => [
                                            'description' => '关联资源ARN列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '关联资源ARN。',
                                                'type' => 'string',
                                                'example' => '[\\"arn:acs:ecs:cn-beijing:1770150251620858:instance/i-2zef6yild47noprhuzv4\\",\\"arn:acs:ecs:cn-beijing:1770150251620858:instance/i-2zef6yild47noprhuzv3\\"]',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '返回结果总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"gAAAAABfTgv5ewUWmNdJ3g7JVLvX70sPH90GZOVGC6KPDUL0FIIb\\",\\n  \\"RequestId\\": \\"113DD533-389C-5F83-9C69-F64D5BAB10B2\\",\\n  \\"MaxResults\\": 50,\\n  \\"OpsItems\\": [\\n    {\\n      \\"OpsItemId\\": \\"oi-d52b08695e2b46ae8413\\",\\n      \\"CreateDate\\": \\"2023-07-09T10:01Z\\",\\n      \\"UpdateDate\\": \\"2023-07-09T10:01Z\\",\\n      \\"Title\\": \\"Test\\",\\n      \\"Status\\": \\"Open\\",\\n      \\"Severity\\": \\"Medium\\",\\n      \\"Category\\": \\"Security\\",\\n      \\"Source\\": \\"/aliyun/ecs\\",\\n      \\"Priority\\": 1,\\n      \\"Tags\\": {\\n        \\"k1\\": \\"v1\\"\\n      },\\n      \\"Resources\\": [\\n        \\"[\\\\\\\\\\\\\\"arn:acs:ecs:cn-beijing:1770150251620858:instance/i-2zef6yild47noprhuzv4\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"arn:acs:ecs:cn-beijing:1770150251620858:instance/i-2zef6yild47noprhuzv3\\\\\\\\\\\\\\"]\\"\\n      ]\\n    }\\n  ],\\n  \\"TotalCount\\": 1\\n}","type":"json"}]',
            'title' => '查询运维项',
        ],
        'UpdateOpsItem' => [
            'summary' => '修改运维项。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运维项标题。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'Test',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运维项的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-update',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m4******',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{'."\n"
                            .'      "k1": "v1",'."\n"
                            .'      "k2": "v2"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DASKJJLKADS-AHKLJHJSAKL-AJK',
                    ],
                ],
                [
                    'name' => 'Severity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '严重程度。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Medium',
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'description' => '来源业务。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/aliyun/ecs',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分类。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Security',
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'query',
                    'schema' => [
                        'description' => '优先级。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Solutions',
                    'in' => 'query',
                    'schema' => [
                        'description' => '解决方案列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{\\n    \\"priority\\":3,\\n    \\"type\\":\\"url\\",\\n    \\"url\\":\\"https://example.com\\",\\n    \\"description\\":\\"请对集群设置跨可用区高可用。\\"\\n}]',
                    ],
                ],
                [
                    'name' => 'DedupString',
                    'in' => 'query',
                    'schema' => [
                        'description' => '去重字符串。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs_instance_SystemMaintenance.Reboot',
                    ],
                ],
                [
                    'name' => 'Resources',
                    'in' => 'query',
                    'schema' => [
                        'description' => '关联资源ARN列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[\\"arn:acs:ecs:cn-heyuan:1139354755361920:instance/i-f8z928h7aqotd3o65032\\"]',
                    ],
                ],
                [
                    'name' => 'OpsItemId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运维项ID，OpsItemId和Resources二参数必须填一个。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oi-e2264dcf040c472598e9',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '状态。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Open',
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
                                'example' => 'C996DECB-3D2B-5321-B359-BE7031B6399E',
                            ],
                            'OpsItem' => [
                                'description' => '运维项',
                                'type' => 'object',
                                'properties' => [
                                    'Tags' => [
                                        'description' => '标签。',
                                        'type' => 'object',
                                        'example' => '{'."\n"
                                            .'      "k1": "v1",'."\n"
                                            .'      "k2": "v2"'."\n"
                                            .'}'."\n",
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2023-03-16T08:04Z',
                                    ],
                                    'Description' => [
                                        'description' => '描述。',
                                        'type' => 'string',
                                        'example' => 'test-update',
                                    ],
                                    'OpsItemId' => [
                                        'description' => '运维项ID。',
                                        'type' => 'string',
                                        'example' => 'oi-e2264dcf040c472598e9',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2023-03-16T07:04Z',
                                    ],
                                    'Title' => [
                                        'description' => '运维项标题。',
                                        'type' => 'string',
                                        'example' => 'Test',
                                    ],
                                    'Status' => [
                                        'description' => '状态。',
                                        'type' => 'string',
                                        'example' => 'Open',
                                    ],
                                    'Severity' => [
                                        'description' => '严重程度。',
                                        'type' => 'string',
                                        'example' => 'Medium',
                                    ],
                                    'Category' => [
                                        'description' => '分类。',
                                        'type' => 'string',
                                        'example' => 'Security',
                                    ],
                                    'Source' => [
                                        'description' => '来源业务。',
                                        'type' => 'string',
                                        'example' => '/aliyun/ecs',
                                    ],
                                    'Priority' => [
                                        'description' => '优先级。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'Solutions' => [
                                        'description' => '解决方案列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '解决方案。',
                                            'type' => 'string',
                                            'example' => '[{\\n    \\"priority\\":2,\\n    \\"type\\":\\"SlbNeedEcs\\",\\n    \\"url\\":\\"https://computenest.console.aliyun.com/app\\",\\n    \\"description\\":\\"请将SLB实例下所有的ECS实例导入到应用分组中\\"\\n}]',
                                        ],
                                    ],
                                    'Resources' => [
                                        'description' => '关联资源ARN列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '关联资源ARN。',
                                            'type' => 'string',
                                            'example' => '[\\"arn:acs:ecs:cn-heyuan:1139354755361920:instance/i-f8z928h7aqotd3o65032\\"]',
                                        ],
                                    ],
                                    'Attributes' => [
                                        'description' => '运维项属性信息。',
                                        'type' => 'string',
                                        'example' => '[{\'Attribute\': {\'Weight\': 100}, \'RealServer\': \'uaejc8hnqzqz5valyh8dibolpvza48ik.yundunwaf5.com\'}]',
                                    ],
                                    'CreatedBy' => [
                                        'description' => '补丁基线创建者。',
                                        'type' => 'string',
                                        'example' => 'root(130900000)'."\n",
                                    ],
                                    'LastModifiedBy' => [
                                        'description' => '运维项修改者。',
                                        'type' => 'string',
                                        'example' => 'root(130900000)'."\n",
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m4******',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C996DECB-3D2B-5321-B359-BE7031B6399E\\",\\n  \\"OpsItem\\": {\\n    \\"Tags\\": {\\n      \\"k1\\": \\"v1\\",\\n      \\"k2\\": \\"v2\\"\\n    },\\n    \\"UpdateDate\\": \\"2023-03-16T08:04Z\\",\\n    \\"Description\\": \\"test-update\\",\\n    \\"OpsItemId\\": \\"oi-e2264dcf040c472598e9\\",\\n    \\"CreateDate\\": \\"2023-03-16T07:04Z\\",\\n    \\"Title\\": \\"Test\\",\\n    \\"Status\\": \\"Open\\",\\n    \\"Severity\\": \\"Medium\\",\\n    \\"Category\\": \\"Security\\",\\n    \\"Source\\": \\"/aliyun/ecs\\",\\n    \\"Priority\\": 2,\\n    \\"Solutions\\": [\\n      \\"[{\\\\\\\\n    \\\\\\\\\\\\\\"priority\\\\\\\\\\\\\\":2,\\\\\\\\n    \\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"SlbNeedEcs\\\\\\\\\\\\\\",\\\\\\\\n    \\\\\\\\\\\\\\"url\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"https://computenest.console.aliyun.com/app\\\\\\\\\\\\\\",\\\\\\\\n    \\\\\\\\\\\\\\"description\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"请将SLB实例下所有的ECS实例导入到应用分组中\\\\\\\\\\\\\\"\\\\\\\\n}]\\"\\n    ],\\n    \\"Resources\\": [\\n      \\"[\\\\\\\\\\\\\\"arn:acs:ecs:cn-heyuan:1139354755361920:instance/i-f8z928h7aqotd3o65032\\\\\\\\\\\\\\"]\\"\\n    ],\\n    \\"Attributes\\": \\"[{\'Attribute\': {\'Weight\': 100}, \'RealServer\': \'uaejc8hnqzqz5valyh8dibolpvza48ik.yundunwaf5.com\'}]\\",\\n    \\"CreatedBy\\": \\"root(130900000)\\\\n\\",\\n    \\"LastModifiedBy\\": \\"root(130900000)\\\\n\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m4******\\"\\n  }\\n}","type":"json"}]',
            'title' => '更新运维项',
        ],
        'SetServiceSettings' => [
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
                    'name' => 'DeliveryOssEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启向OSS投递模板执行记录功能，默认为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'DeliveryOssBucketName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS存储空间名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'OssBucketName',
                    ],
                ],
                [
                    'name' => 'DeliveryOssKeyPrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS存储空间目录，如"oos/execution",传入""表示不需要目录，若之前设置过再次设置不需要目录可通过传入""清空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oos/execution',
                    ],
                ],
                [
                    'name' => 'DeliverySlsProjectName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SLS的项目名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SlsProjectName',
                    ],
                ],
                [
                    'name' => 'DeliverySlsEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启向SLS投递模板执行记录功能，默认为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'RdcEnterpriseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云效企业ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RdcEnterpriseId',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '模板执行记录的投递功能设置信息.',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBEC8072-BEC2-478E-8EAE-E723BA79CF19',
                            ],
                            'ServiceSettings' => [
                                'description' => '投递功能配置详情',
                                'type' => 'array',
                                'items' => [
                                    'description' => '设置详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DeliveryOssBucketName' => [
                                            'description' => 'OSS存储空间名称',
                                            'type' => 'string',
                                            'example' => 'OssBucketName',
                                        ],
                                        'DeliveryOssKeyPrefix' => [
                                            'description' => 'OSS存储空间目录',
                                            'type' => 'string',
                                            'example' => 'oos/execution',
                                        ],
                                        'DeliveryOssEnabled' => [
                                            'description' => '是否开启了向OSS投递模板执行记录功能',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'DeliverySlsEnabled' => [
                                            'description' => '是否开启了向SLS投递模板执行记录功能',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'DeliverySlsProjectName' => [
                                            'description' => 'SLS的项目名称',
                                            'type' => 'string',
                                            'example' => 'SlsProjectName',
                                        ],
                                        'RdcEnterpriseId' => [
                                            'description' => '云效企业ID',
                                            'type' => 'string',
                                            'example' => 'RdcEnterpriseId',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CBEC8072-BEC2-478E-8EAE-E723BA79CF19\\",\\n  \\"ServiceSettings\\": [\\n    {\\n      \\"DeliveryOssBucketName\\": \\"OssBucketName\\",\\n      \\"DeliveryOssKeyPrefix\\": \\"oos/execution\\",\\n      \\"DeliveryOssEnabled\\": true,\\n      \\"DeliverySlsEnabled\\": false,\\n      \\"DeliverySlsProjectName\\": \\"SlsProjectName\\",\\n      \\"RdcEnterpriseId\\": \\"RdcEnterpriseId\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<SetServiceSettingsResponse>\\n    <RequestId>CBEC8072-BEC2-478E-8EAE-E723BA79CF19</RequestId>\\n    <ServiceSettings>\\n        <DeliveryOssBucketName>OssBucketName</DeliveryOssBucketName>\\n        <DeliveryOssKeyPrefix>oos/execution</DeliveryOssKeyPrefix>\\n        <DeliveryOssEnabled>true</DeliveryOssEnabled>\\n        <DeliverySlsEnabled>false</DeliverySlsEnabled>\\n        <DeliverySlsProjectName>SlsProjectName</DeliverySlsProjectName>\\n        <RdcEnterpriseId>RdcEnterpriseId</RdcEnterpriseId>\\n    </ServiceSettings>\\n</SetServiceSettingsResponse>","errorExample":""}]',
            'title' => '开启或关闭模板执行记录投递功能',
            'summary' => '开启或关闭模板执行记录的投递功能，以及投递存储地点。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetServiceSettings' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
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
                                'example' => '9F755DC9-C0CF-4598-B2E3-2CC763F18CB2',
                            ],
                            'ServiceSettings' => [
                                'description' => '投递功能配置详情',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DeliveryOssBucketName' => [
                                            'description' => 'OSS存储空间名称',
                                            'type' => 'string',
                                            'example' => 'OssBucketName',
                                        ],
                                        'DeliveryOssKeyPrefix' => [
                                            'description' => 'OSS存储空间目录，如"oos/execution"，传入""表示不需要目录，若之前设置过再次设置不需要目录可通过传入""清空',
                                            'type' => 'string',
                                            'example' => 'oos/execution',
                                        ],
                                        'DeliveryOssEnabled' => [
                                            'description' => '是否开启了向OSS投递模板执行记录功能',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'DeliverySlsEnabled' => [
                                            'description' => '是否开启了向SLS投递模板执行记录功能',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'DeliverySlsProjectName' => [
                                            'description' => 'SLS的项目名称',
                                            'type' => 'string',
                                            'example' => 'SlsProjectName',
                                        ],
                                        'RdcEnterpriseId' => [
                                            'description' => '云效企业ID'."\n",
                                            'type' => 'string',
                                            'example' => 'RdcEnterpriseId',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9F755DC9-C0CF-4598-B2E3-2CC763F18CB2\\",\\n  \\"ServiceSettings\\": [\\n    {\\n      \\"DeliveryOssBucketName\\": \\"OssBucketName\\",\\n      \\"DeliveryOssKeyPrefix\\": \\"oos/execution\\",\\n      \\"DeliveryOssEnabled\\": false,\\n      \\"DeliverySlsEnabled\\": false,\\n      \\"DeliverySlsProjectName\\": \\"SlsProjectName\\",\\n      \\"RdcEnterpriseId\\": \\"RdcEnterpriseId\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>9F755DC9-C0CF-4598-B2E3-2CC763F18CB2</RequestId>\\n<ServiceSettings>\\n    <DeliverySlsEnabled>false</DeliverySlsEnabled>\\n    <DeliveryOssKeyPrefix>oos/execution</DeliveryOssKeyPrefix>\\n    <DeliveryOssEnabled>true</DeliveryOssEnabled>\\n    <DeliveryOssBucketName>OssBucketName</DeliveryOssBucketName>\\n    <DeliverySlsProjectName>SlsProjectName</DeliverySlsProjectName>\\n</ServiceSettings>","errorExample":""}]',
            'title' => '获取投递功能的配置信息',
            'summary' => '获取投递功能的配置信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateApplication' => [
            'summary' => '创建一个应用。应用管理的服务地域仅支持杭州，请使用杭州的endpoint。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，目前仅支持cn-hangzhou。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyApplication',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要给应用添加的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'application',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-acfmxsn4m******',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"k1":"v1","k2":"v2"}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TF-CreateApplication-1647587475-84104b89-eba5-47a8-b2fd-807b8b7d',
                    ],
                ],
                [
                    'name' => 'AlarmConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '应用报警配置。',
                        'type' => 'object',
                        'properties' => [
                            'ContactGroups' => [
                                'description' => '报警联系人组。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '报警联系组名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '报警联系人组名称',
                                ],
                                'required' => false,
                            ],
                            'TemplateIds' => [
                                'description' => '报警模板组。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '报警模板ID。'."\n"
                                        ."\n"
                                        .'关于如何获取报警模板ID，请参见[DescribeMetricRuleTemplateList](~~114982~~)。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '6c7372e9e237463bb9efcb1acd91358d',
                                ],
                                'required' => false,
                            ],
                            'HealthCheckUrl' => [
                                'description' => '健康检查URL。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/healthcheck/tcp50122',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用模板对应的计算巢服务ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'service-79538e30e44541b699d8',
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
                                'example' => '274917E8-8E74-5928-A82F-4940F52F7ACB',
                            ],
                            'Application' => [
                                'description' => '应用信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Tags' => [
                                        'description' => '标签。',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                            'example' => '{"k1":"v1","k2":"v2"}',
                                            'description' => '标签。',
                                        ],
                                        'example' => '{"k1":"v1","k2":"v2"}',
                                    ],
                                    'Name' => [
                                        'description' => '应用名称。',
                                        'type' => 'string',
                                        'example' => 'Myapplication',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T09:17:46Z',
                                    ],
                                    'Description' => [
                                        'description' => '描述信息。',
                                        'type' => 'string',
                                        'example' => 'application',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T09:17:46Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"274917E8-8E74-5928-A82F-4940F52F7ACB\\",\\n  \\"Application\\": {\\n    \\"Tags\\": {\\n      \\"key\\": \\"{\\\\\\"k1\\\\\\":\\\\\\"v1\\\\\\",\\\\\\"k2\\\\\\":\\\\\\"v2\\\\\\"}\\"\\n    },\\n    \\"Name\\": \\"Myapplication\\",\\n    \\"UpdateDate\\": \\"2021-09-07T09:17:46Z\\",\\n    \\"Description\\": \\"application\\",\\n    \\"CreateDate\\": \\"2021-09-07T09:17:46Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>274917E8-8E74-5928-A82F-4940F52F7ACB</RequestId>\\n<Application>\\n    <UpdateDate>2021-09-07T09:17:46Z</UpdateDate>\\n    <Description>application</Description>\\n    <CreateDate>2021-09-07T09:17:46Z</CreateDate>\\n    <Tags>\\n        <k1>v1</k1>\\n        <k2>v2</k2>\\n    </Tags>\\n    <Name>MyApplication</Name>\\n</Application>","errorExample":""}]',
            'title' => '创建一个应用',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteApplication' => [
            'summary' => '删除一个应用。应用管理的服务地域仅支持杭州，请使用杭州的endpoint。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，目前仅支持cn-hangzhou。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyApplication',
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制删除应用。取值范围：'."\n"
                            ."\n"
                            .'- true'."\n"
                            .'- false',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RetainResource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否保留应用管理创建的资源'."\n"
                            .'- true'."\n"
                            .'- false',
                        'type' => 'boolean',
                        'required' => false,
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
                                'example' => '37A9F0FD-51D0-58D5-B91F-DF570281556B',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"37A9F0FD-51D0-58D5-B91F-DF570281556B\\"\\n}","type":"json"}]',
            'title' => '删除一个应用',
        ],
        'UpdateApplication' => [
            'summary' => '更新一个应用。应用管理的服务地域仅支持杭州，请使用杭州的endpoint。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，目前仅支持cn-hangzhou。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'My-Application',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要给应用更新的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test application',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"k1":"v1","k2":"v2"}',
                    ],
                ],
                [
                    'name' => 'AlarmConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '应用报警配置。',
                        'type' => 'object',
                        'properties' => [
                            'ContactGroups' => [
                                'description' => '报警联系组。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '报警联系组名称。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '云账号报警联系人',
                                ],
                                'required' => false,
                            ],
                            'TemplateIds' => [
                                'description' => '报警模板组。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '报警模板ID。'."\n"
                                        ."\n"
                                        .'关于如何获取报警模板ID，请参见[DescribeMetricRuleTemplateList](~~114982~~)。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'd8d1153c517f4971a37350ba8c021c26',
                                ],
                                'required' => false,
                            ],
                            'HealthCheckUrl' => [
                                'description' => '应用的健康检查URL',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/healthcheck/tcp50122',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeleteAlarmRulesBeforeUpdate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用报警模板前是否删除已有的报警规则，默认值false。',
                        'type' => 'boolean',
                        'required' => false,
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
                                'example' => 'F1F00F41-D24C-5377-831B-C97F739CE1AB',
                            ],
                            'Application' => [
                                'description' => '应用信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Description' => [
                                        'description' => '应用描述。',
                                        'type' => 'string',
                                        'example' => 'test application',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T10:17:46Z',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m*****',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T09:17:46Z',
                                    ],
                                    'Tags' => [
                                        'description' => '标签。',
                                        'type' => 'object',
                                        'example' => '{"k1":"v1","k2":"v2"}',
                                    ],
                                    'Name' => [
                                        'description' => '应用名称。',
                                        'type' => 'string',
                                        'example' => 'My-Application',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F1F00F41-D24C-5377-831B-C97F739CE1AB\\",\\n  \\"Application\\": {\\n    \\"Description\\": \\"test application\\",\\n    \\"UpdatedDate\\": \\"2021-09-07T10:17:46Z\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m*****\\",\\n    \\"CreatedDate\\": \\"2021-09-07T09:17:46Z\\",\\n    \\"Tags\\": {\\n      \\"k1\\": \\"v1\\",\\n      \\"k2\\": \\"v2\\"\\n    },\\n    \\"Name\\": \\"My-Application\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateApplicationResponse>\\n    <RequestId>F1F00F41-D24C-5377-831B-C97F739CE1AB</RequestId>\\n    <Application>\\n        <Description>test application</Description>\\n        <UpdatedDate>2021-09-07T10:17:46Z</UpdatedDate>\\n        <ResourceGroupId>rg-acfmxsn4m*****</ResourceGroupId>\\n        <CreatedDate>2021-09-07T09:17:46Z</CreatedDate>\\n        <Tags>\\n            <k1>v1</k1>\\n            <k2>v2</k2>\\n        </Tags>\\n        <Name>My-Application</Name>\\n    </Application>\\n</UpdateApplicationResponse>","errorExample":""}]',
            'title' => '更新应用',
        ],
        'GetApplication' => [
            'summary' => '获取一个应用的详细信息。应用管理的服务地域仅支持杭州，请使用杭州的endpoint。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，目前仅支持cn-hangzhou。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyApplication',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据结构。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '51004B8A-6D9A-5ACB-9158-6C6794496AD0',
                            ],
                            'Application' => [
                                'description' => '应用详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Description' => [
                                        'description' => '应用描述信息。',
                                        'type' => 'string',
                                        'example' => 'Application',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T09:17:46Z',
                                    ],
                                    'ResourceGroupId' => [
                                        'description' => '资源组ID。',
                                        'type' => 'string',
                                        'example' => 'rg-acfmxsn4m******',
                                    ],
                                    'Tags' => [
                                        'description' => '标签。',
                                        'type' => 'object',
                                        'example' => '{"k1": "v1", "k2": "v2"}',
                                    ],
                                    'Name' => [
                                        'description' => '应用名称。',
                                        'type' => 'string',
                                        'example' => 'MyApplication',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T09:17:46Z',
                                    ],
                                    'ApplicationType' => [
                                        'description' => '应用类型。',
                                        'type' => 'string',
                                        'example' => 'DingTalk',
                                    ],
                                    'AlarmConfig' => [
                                        'description' => '应用报警配置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ContactGroups' => [
                                                'description' => '报警联系组。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '报警联系组名称。',
                                                    'type' => 'string',
                                                    'example' => '报警联系人组名称'."\n",
                                                ],
                                            ],
                                            'TemplateIds' => [
                                                'description' => '报警模板组。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '报警模板ID。'."\n"
                                                        ."\n"
                                                        .'关于如何获取报警模板ID，请参见[DescribeMetricRuleTemplateList](~~114982~~)。',
                                                    'type' => 'string',
                                                    'example' => '18ad7c9ddff24d1ba34aa76ec3944507',
                                                ],
                                            ],
                                            'HealthCheckUrl' => [
                                                'description' => '应用的健康检查URL',
                                                'type' => 'string',
                                                'example' => '/api/health/',
                                            ],
                                        ],
                                    ],
                                    'ServiceId' => [
                                        'description' => '应用模板对应的计算巢服务ID',
                                        'type' => 'string',
                                        'example' => 'service-79538e30e44541b699d8',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"51004B8A-6D9A-5ACB-9158-6C6794496AD0\\",\\n  \\"Application\\": {\\n    \\"Description\\": \\"Application\\",\\n    \\"UpdateDate\\": \\"2021-09-07T09:17:46Z\\",\\n    \\"ResourceGroupId\\": \\"rg-acfmxsn4m******\\",\\n    \\"Tags\\": {\\n      \\"k1\\": \\"v1\\",\\n      \\"k2\\": \\"v2\\"\\n    },\\n    \\"Name\\": \\"MyApplication\\",\\n    \\"CreateDate\\": \\"2021-09-07T09:17:46Z\\",\\n    \\"ApplicationType\\": \\"DingTalk\\",\\n    \\"AlarmConfig\\": {\\n      \\"ContactGroups\\": [\\n        \\"报警联系人组名称\\\\n\\"\\n      ],\\n      \\"TemplateIds\\": [\\n        \\"18ad7c9ddff24d1ba34aa76ec3944507\\"\\n      ],\\n      \\"HealthCheckUrl\\": \\"/api/health/\\"\\n    },\\n    \\"ServiceId\\": \\"service-79538e30e44541b699d8\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>51004B8A-6D9A-5ACB-9158-6C6794496AD0</RequestId>\\n<Application>\\n    <Description>Application</Description>\\n    <UpdateDate>2021-09-07T09:17:46Z</UpdateDate>\\n    <CreateDate>2021-09-07T09:17:46Z</CreateDate>\\n    <ResourceGroupId>rg-acfmxsn4m******</ResourceGroupId>\\n    <Tags>\\n        <k1>v1</k1>\\n        <k2>v2</k2>\\n    </Tags>\\n    <Name>MyApplication</Name>\\n</Application>","errorExample":""}]',
            'title' => '获取一个应用的详细信息',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListApplications' => [
            'summary' => '查询应用列表。应用管理的服务地域仅支持杭州，请使用杭州的endpoint。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，目前仅支持cn-hangzhou。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。取值范围：10-100。默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"k1": "v1","k2": "v2"}',
                    ],
                ],
                [
                    'name' => 'Names',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["MyApplication"]',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '"MyApplications"',
                    ],
                ],
                [
                    'name' => 'ApplicationType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'ComputeNest' => 'ComputeNest',
                            'Custom' => 'Custom',
                            'DingTalk' => 'DingTalk',
                        ],
                        'example' => 'DingTalk',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token。',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '12067D53-56A9-561B-ADD6-61429D207117',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Applications' => [
                                'description' => '应用信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Description' => [
                                            'description' => '应用描述信息。',
                                            'type' => 'string',
                                            'example' => 'Application',
                                        ],
                                        'UpdateDate' => [
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2021-09-07T09:09:59Z',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '  资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-acfmxsn4m******',
                                        ],
                                        'Tags' => [
                                            'description' => '标签。',
                                            'type' => 'object',
                                            'example' => '{"k1": "v1","k2": "v2"}',
                                        ],
                                        'Name' => [
                                            'description' => '应用名称。',
                                            'type' => 'string',
                                            'example' => 'MyApplication',
                                        ],
                                        'CreateDate' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-09-07T09:09:59Z',
                                        ],
                                        'ApplicationType' => [
                                            'description' => '应用类型。',
                                            'type' => 'string',
                                            'example' => 'DingTalk',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"-\\",\\n  \\"RequestId\\": \\"12067D53-56A9-561B-ADD6-61429D207117\\",\\n  \\"MaxResults\\": 10,\\n  \\"Applications\\": [\\n    {\\n      \\"Description\\": \\"Application\\",\\n      \\"UpdateDate\\": \\"2021-09-07T09:09:59Z\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmxsn4m******\\",\\n      \\"Tags\\": {\\n        \\"k1\\": \\"v1\\",\\n        \\"k2\\": \\"v2\\"\\n      },\\n      \\"Name\\": \\"MyApplication\\",\\n      \\"CreateDate\\": \\"2021-09-07T09:09:59Z\\",\\n      \\"ApplicationType\\": \\"DingTalk\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>12067D53-56A9-561B-ADD6-61429D207117</RequestId>\\n<Applications>\\n    <UpdateDate>2021-09-07T09:09:59Z</UpdateDate>\\n    <Description>application</Description>\\n    <ResourceGroupId>rg-acfmxsn4m*****</ResourceGroupId>\\n    <CreateDate>2021-09-07T09:09:59Z</CreateDate>\\n    <Tags>\\n        <k1>v1</k1>\\n        <k2>v2</k2>\\n    </Tags>\\n    <Name>MyApplication</Name>\\n</Applications>","errorExample":""}]',
            'title' => '查询应用列表',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateApplicationGroup' => [
            'summary' => '创建一个应用分组。应用管理的服务地域仅支持杭州，请使用杭州的endpoint。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，目前仅支持cn-hangzhou。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ApplicationGroup',
                    ],
                ],
                [
                    'name' => 'DeployRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署地域ID（即资源所在地域ID）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ImportTagKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签键，必须和标签值（ImportTagValue）同时传入或都不传入，不能只传入一个。ImportTagKey和ImportTagValue 都不填则默认为app-{ApplicationName}（应用名称）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'k1',
                    ],
                ],
                [
                    'name' => 'ImportTagValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签值，必须和标签键（ImportTagKey）同时传入或都不传入，不能只传入一个。ImportTagKey和ImportTagValue 都不填则默认为{Name}（应用分组名称）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'v1',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyApplicationGroup',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'ApplicationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MyApplication',
                    ],
                ],
                [
                    'name' => 'CmsGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云监控分组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '218026174',
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
                                'example' => '0E6BEBD3-7F9E-5878-834B-097633AB5F33',
                            ],
                            'ApplicationGroup' => [
                                'description' => '应用分组信息。',
                                'type' => 'object',
                                'properties' => [
                                    'CmsGroupId' => [
                                        'description' => '云监控分组ID。',
                                        'type' => 'string',
                                        'example' => '1245768',
                                    ],
                                    'DeployRegionId' => [
                                        'description' => '部署地域ID（即资源所在地域ID）。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'Description' => [
                                        'description' => '应用分组描述信息。',
                                        'type' => 'string',
                                        'example' => 'ApplicationGroup',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T10:28:25Z',
                                    ],
                                    'ImportTagKey' => [
                                        'description' => '标签键。',
                                        'type' => 'string',
                                        'example' => 'k1',
                                    ],
                                    'ApplicationName' => [
                                        'description' => '应用名称。',
                                        'type' => 'string',
                                        'example' => 'MyApplication',
                                    ],
                                    'ImportTagValue' => [
                                        'description' => '标签值。',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                    'Name' => [
                                        'description' => '应用分组名称。',
                                        'type' => 'string',
                                        'example' => 'MyApplicationGroup',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T10:28:25Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0E6BEBD3-7F9E-5878-834B-097633AB5F33\\",\\n  \\"ApplicationGroup\\": {\\n    \\"CmsGroupId\\": \\"1245768\\",\\n    \\"DeployRegionId\\": \\"cn-hangzhou\\",\\n    \\"Description\\": \\"ApplicationGroup\\",\\n    \\"UpdateDate\\": \\"2021-09-07T10:28:25Z\\",\\n    \\"ImportTagKey\\": \\"k1\\",\\n    \\"ApplicationName\\": \\"MyApplication\\",\\n    \\"ImportTagValue\\": \\"v1\\",\\n    \\"Name\\": \\"MyApplicationGroup\\",\\n    \\"CreateDate\\": \\"2021-09-07T10:28:25Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ApplicationGroup>\\n    <ImportTagValue>v1</ImportTagValue>\\n    <UpdateDate>2021-09-07T10:28:25Z</UpdateDate>\\n    <DeployRegionId>cn-hangzhou</DeployRegionId>\\n    <ApplicationName>MyApplication</ApplicationName>\\n    <Description>ApplicationGroup</Description>\\n    <ImportTagKey>k1</ImportTagKey>\\n    <CreateDate>2021-09-07T10:28:25Z</CreateDate>\\n    <Name>MyApplicationGroup</Name>\\n    <CmsGroupId>12345678</CmsGroupId>\\n</ApplicationGroup>\\n<RequestId>0E6BEBD3-7F9E-5878-834B-097633AB5F33</RequestId>","errorExample":""}]',
            'title' => '创建一个应用分组',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteApplicationGroup' => [
            'summary' => '删除一个应用分组。应用管理的服务地域仅支持杭州，请使用杭州的endpoint。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，目前仅支持cn-hangzhou。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyApplicationGroup',
                    ],
                ],
                [
                    'name' => 'ApplicationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyApplication',
                    ],
                ],
                [
                    'name' => 'RetainResource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否保留应用管理创建的资源',
                        'type' => 'boolean',
                        'required' => false,
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
                                'example' => '9E011F98-4EE5-5E3A-8FA3-D38F2C531C1F',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9E011F98-4EE5-5E3A-8FA3-D38F2C531C1F\\"\\n}","type":"json"}]',
            'title' => '删除一个应用分组',
        ],
        'UpdateApplicationGroup' => [
            'summary' => '更新一个应用分组的信息。应用管理的服务地域仅支持杭州，请使用杭州的endpoint。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，目前仅支持cn-hangzhou。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyApplicationGroup',
                    ],
                ],
                [
                    'name' => 'NewName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组的新名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UpdateMyApplicationGroup',
                    ],
                ],
                [
                    'name' => 'ApplicationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyApplication',
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
                                'example' => 'AA9FA778-AE4B-55EC-81CC-C46BAF08A166',
                            ],
                            'ApplicationGroup' => [
                                'description' => '应用分组信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DeployRegionId' => [
                                        'description' => '部署地域ID（即资源所在地域ID）。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'Description' => [
                                        'description' => '应用分组描述信息。',
                                        'type' => 'string',
                                        'example' => 'ApplicationGroup',
                                    ],
                                    'ImportTagKey' => [
                                        'description' => '标签键。',
                                        'type' => 'string',
                                        'example' => 'k1',
                                    ],
                                    'UpdatedDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-08T03:01:53Z',
                                    ],
                                    'ApplicationName' => [
                                        'description' => '应用名称。',
                                        'type' => 'string',
                                        'example' => 'MyApplication',
                                    ],
                                    'CreatedDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T10:28:25Z',
                                    ],
                                    'ImportTagValue' => [
                                        'description' => '标签值。',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                    'Name' => [
                                        'description' => '应用分组名称。',
                                        'type' => 'string',
                                        'example' => 'UpdateMyApplicationGroup',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AA9FA778-AE4B-55EC-81CC-C46BAF08A166\\",\\n  \\"ApplicationGroup\\": {\\n    \\"DeployRegionId\\": \\"cn-hangzhou\\",\\n    \\"Description\\": \\"ApplicationGroup\\",\\n    \\"ImportTagKey\\": \\"k1\\",\\n    \\"UpdatedDate\\": \\"2021-09-08T03:01:53Z\\",\\n    \\"ApplicationName\\": \\"MyApplication\\",\\n    \\"CreatedDate\\": \\"2021-09-07T10:28:25Z\\",\\n    \\"ImportTagValue\\": \\"v1\\",\\n    \\"Name\\": \\"UpdateMyApplicationGroup\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ApplicationGroup>\\n    <ImportTagValue>v1</ImportTagValue>\\n    <UpdateDate>2021-09-08T03:01:53Z</UpdateDate>\\n    <CreateDate>2021-09-07T10:28:25Z</CreateDate>\\n    <DeployRegionId>cn-hangzhou</DeployRegionId>\\n    <ApplicationName>MyApplication</ApplicationName>\\n    <Description>ApplicationGroup</Description>\\n    <ImportTagKey>k1</ImportTagKey>\\n    <Name>UpdateMyApplicationGroup</Name>\\n</ApplicationGroup>\\n<RequestId>AA9FA778-AE4B-55EC-81CC-C46BAF08A166</RequestId>","errorExample":""}]',
            'title' => '更新一个应用分组的信息',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetApplicationGroup' => [
            'summary' => '获取一个应用分组的详细信息。应用管理的服务地域仅支持杭州，请使用杭州的endpoint。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，目前仅支持cn-hangzhou。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyApplicationGroup',
                    ],
                ],
                [
                    'name' => 'ApplicationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyApplication',
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
                                'example' => '92EA60ED-544D-55E9-93D9-237BE9976C0D',
                            ],
                            'ApplicationGroup' => [
                                'description' => '应用分组详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'CmsGroupId' => [
                                        'description' => '云监控分组ID。',
                                        'type' => 'string',
                                        'example' => '12345678',
                                    ],
                                    'DeployRegionId' => [
                                        'description' => '部署地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'Description' => [
                                        'description' => '应用分组描述信息。',
                                        'type' => 'string',
                                        'example' => 'ApplicationGroup',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T10:28:25Z',
                                    ],
                                    'ImportTagKey' => [
                                        'description' => '标签键。',
                                        'type' => 'string',
                                        'example' => 'k1',
                                    ],
                                    'ApplicationName' => [
                                        'description' => '应用名称。',
                                        'type' => 'string',
                                        'example' => 'MyApplication',
                                    ],
                                    'ImportTagValue' => [
                                        'description' => '标签值。'."\n",
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                    'Name' => [
                                        'description' => '应用分组名称。',
                                        'type' => 'string',
                                        'example' => 'MyApplicationGroup',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-09-07T10:28:25Z',
                                    ],
                                    'DeployParameters' => [
                                        'description' => '应用分组配置信息。',
                                        'type' => 'string',
                                        'example' => '{       "TemplateURL": "https://ros-template.oss-cn-zhangjiakou.aliyuncs.com/App_Management_Existing_Vpc_Ecs_Instance.json",       "Parameters": {         "ZoneId": "cn-hangzhou-k",         "ProjectName": "test",         "SystemDiskSize": 40,         "InstanceChargeType": "PostPaid",         "SecurityGroupId": "sg-bp1a4374akk63jl8tddy",         "VSwitchId": "vsw-bp1fcvc3zn0jrag86rrlm",         "SystemDiskCategory": "cloud_essd",         "InstancePassword": "******",         "InternetChargeType": "PayByTraffic",         "InstanceCount": 1,         "InternetMaxBandwidthOut": 0,         "VpcId": "vpc-bp1i99boyas8i8m9t3skp",         "EcsImageId": "centos_8_5_x64_20G_alibase_20211228.vhd",         "DataDiskSize": 100,         "EcsInstanceType": "ecs.s6-c1m4.small",         "DataDiskCategory": "cloud_efficiency",         "EnvironmentCommandId": "c-hz028fc3g031gcg"       }',
                                    ],
                                    'Status' => [
                                        'description' => '应用分组状态。',
                                        'type' => 'string',
                                        'example' => 'Created',
                                    ],
                                    'StatusReason' => [
                                        'description' => '应用分组状态详情。',
                                        'type' => 'string',
                                        'example' => 'Stack CREATE completed successfully',
                                    ],
                                    'DeployOutputs' => [
                                        'description' => '部署结果输出。',
                                        'type' => 'string',
                                        'example' => '{       "Outputs": [         {           "Description": "No description given",           "OutputKey": "InstanceIds"         }       ],       "StackId": "6ef4b860-f6e7-4145-8d22-f4a2a32363e1"     }   }',
                                    ],
                                    'Progress' => [
                                        'description' => '应用实例创建进度。',
                                        'type' => 'string',
                                        'example' => '100',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"92EA60ED-544D-55E9-93D9-237BE9976C0D\\",\\n  \\"ApplicationGroup\\": {\\n    \\"CmsGroupId\\": \\"12345678\\",\\n    \\"DeployRegionId\\": \\"cn-hangzhou\\",\\n    \\"Description\\": \\"ApplicationGroup\\",\\n    \\"UpdateDate\\": \\"2021-09-07T10:28:25Z\\",\\n    \\"ImportTagKey\\": \\"k1\\",\\n    \\"ApplicationName\\": \\"MyApplication\\",\\n    \\"ImportTagValue\\": \\"v1\\",\\n    \\"Name\\": \\"MyApplicationGroup\\",\\n    \\"CreateDate\\": \\"2021-09-07T10:28:25Z\\",\\n    \\"DeployParameters\\": \\"{       \\\\\\"TemplateURL\\\\\\": \\\\\\"https://ros-template.oss-cn-zhangjiakou.aliyuncs.com/App_Management_Existing_Vpc_Ecs_Instance.json\\\\\\",       \\\\\\"Parameters\\\\\\": {         \\\\\\"ZoneId\\\\\\": \\\\\\"cn-hangzhou-k\\\\\\",         \\\\\\"ProjectName\\\\\\": \\\\\\"test\\\\\\",         \\\\\\"SystemDiskSize\\\\\\": 40,         \\\\\\"InstanceChargeType\\\\\\": \\\\\\"PostPaid\\\\\\",         \\\\\\"SecurityGroupId\\\\\\": \\\\\\"sg-bp1a4374akk63jl8tddy\\\\\\",         \\\\\\"VSwitchId\\\\\\": \\\\\\"vsw-bp1fcvc3zn0jrag86rrlm\\\\\\",         \\\\\\"SystemDiskCategory\\\\\\": \\\\\\"cloud_essd\\\\\\",         \\\\\\"InstancePassword\\\\\\": \\\\\\"******\\\\\\",         \\\\\\"InternetChargeType\\\\\\": \\\\\\"PayByTraffic\\\\\\",         \\\\\\"InstanceCount\\\\\\": 1,         \\\\\\"InternetMaxBandwidthOut\\\\\\": 0,         \\\\\\"VpcId\\\\\\": \\\\\\"vpc-bp1i99boyas8i8m9t3skp\\\\\\",         \\\\\\"EcsImageId\\\\\\": \\\\\\"centos_8_5_x64_20G_alibase_20211228.vhd\\\\\\",         \\\\\\"DataDiskSize\\\\\\": 100,         \\\\\\"EcsInstanceType\\\\\\": \\\\\\"ecs.s6-c1m4.small\\\\\\",         \\\\\\"DataDiskCategory\\\\\\": \\\\\\"cloud_efficiency\\\\\\",         \\\\\\"EnvironmentCommandId\\\\\\": \\\\\\"c-hz028fc3g031gcg\\\\\\"       }\\",\\n    \\"Status\\": \\"Created\\",\\n    \\"StatusReason\\": \\"Stack CREATE completed successfully\\",\\n    \\"DeployOutputs\\": \\"{       \\\\\\"Outputs\\\\\\": [         {           \\\\\\"Description\\\\\\": \\\\\\"No description given\\\\\\",           \\\\\\"OutputKey\\\\\\": \\\\\\"InstanceIds\\\\\\"         }       ],       \\\\\\"StackId\\\\\\": \\\\\\"6ef4b860-f6e7-4145-8d22-f4a2a32363e1\\\\\\"     }   }\\",\\n    \\"Progress\\": \\"100\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetApplicationGroupResponse>\\n    <ApplicationGroup>\\n        <Status>Deployed</Status>\\n        <DeployRegionId>cn-hangzhou</DeployRegionId>\\n        <Description/>\\n        <ApplicationName>测试</ApplicationName>\\n        <ImportTagKey>测试</ImportTagKey>\\n        <StatusReason>Stack CREATE completed successfully</StatusReason>\\n        <CmsGroupId>196343713</CmsGroupId>\\n        <CreateDate>2022-02-24T07:42:10Z</CreateDate>\\n        <Name>test</Name>\\n        <ImportTagValue>test</ImportTagValue>\\n        <UpdateDate>2022-02-24T07:58:33Z</UpdateDate>\\n        <DeployParameters>\\n            <TemplateURL>https://ros-template.oss-cn-zhangjiakou.aliyuncs.com/App_Management_Existing_Vpc_Ecs_Instance.json</TemplateURL>\\n            <Parameters>\\n                <ZoneId>cn-hangzhou-k</ZoneId>\\n                <ProjectName>test</ProjectName>\\n                <SystemDiskSize>40</SystemDiskSize>\\n                <InstanceChargeType>PostPaid</InstanceChargeType>\\n                <SecurityGroupId>sg-bp1a4374akk63jl8tddy</SecurityGroupId>\\n                <VSwitchId>vsw-bp1fcvc3zn0jrag86rrlm</VSwitchId>\\n                <SystemDiskCategory>cloud_essd</SystemDiskCategory>\\n                <InstancePassword>******</InstancePassword>\\n                <InternetChargeType>PayByTraffic</InternetChargeType>\\n                <InstanceCount>1</InstanceCount>\\n                <InternetMaxBandwidthOut>0</InternetMaxBandwidthOut>\\n                <VpcId>vpc-bp1i99boyas8i8m9t3skp</VpcId>\\n                <EcsImageId>centos_8_5_x64_20G_alibase_20211228.vhd</EcsImageId>\\n                <DataDiskSize>100</DataDiskSize>\\n                <EcsInstanceType>ecs.s6-c1m4.small</EcsInstanceType>\\n                <DataDiskCategory>cloud_efficiency</DataDiskCategory>\\n                <EnvironmentCommandId>c-hz028fc3g031gcg</EnvironmentCommandId>\\n            </Parameters>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <StackName>stack-1645688523068-3no_AKhOJ</StackName>\\n            <DisableRollback>true</DisableRollback>\\n        </DeployParameters>\\n        <DeployOutputs>\\n            <Outputs>\\n                <Description>No description given</Description>\\n                <OutputKey>InstanceIds</OutputKey>\\n            </Outputs>\\n            <StackId>6ef4b860-f6e7-4145-8d22-f4a2a32363e1</StackId>\\n        </DeployOutputs>\\n    </ApplicationGroup>\\n    <RequestId>8AF4800A-A316-589A-90C4-313B1FEEB084</RequestId>\\n</GetApplicationGroupResponse>","errorExample":""}]',
            'title' => '获取一个应用分组的详细信息',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListApplicationGroups' => [
            'summary' => '查询应用分组列表。应用管理的服务地域仅支持杭州，请使用杭州的endpoint。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID，目前仅支持cn-hangzhou。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ApplicationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'MyApplication',
                    ],
                ],
                [
                    'name' => 'DeployRegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署地域ID（即资源所在地域ID）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云资源的类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'instance',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云资源的资源ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'i-2vcj9raxrhxb48zz3whw',
                    ],
                ],
                [
                    'name' => 'ResourceProduct',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云资源所属的产品code。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token。',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '69D97BF2-5DF2-544C-A650-36A474E17BC3',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'ApplicationGroups' => [
                                'description' => '应用分组信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CmsGroupId' => [
                                            'description' => '云监控分组ID。',
                                            'type' => 'string',
                                            'example' => '12345678',
                                        ],
                                        'DeployRegionId' => [
                                            'description' => '部署地域ID（即资源所在地域ID）。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'UpdateDate' => [
                                            'description' => '更新时间。',
                                            'type' => 'string',
                                            'example' => '2021-09-08T03:01:53Z',
                                        ],
                                        'Description' => [
                                            'description' => '应用分组描述。',
                                            'type' => 'string',
                                            'example' => 'ApplicationGroup',
                                        ],
                                        'ImportTagKey' => [
                                            'description' => '标签键。',
                                            'type' => 'string',
                                            'example' => 'k1',
                                        ],
                                        'ApplicationName' => [
                                            'description' => '应用名称。',
                                            'type' => 'string',
                                            'example' => 'MyApplication',
                                        ],
                                        'ImportTagValue' => [
                                            'description' => '标签值。',
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                        'Name' => [
                                            'description' => '应用分组名称。',
                                            'type' => 'string',
                                            'example' => 'UpdateMyApplicationGroup',
                                        ],
                                        'CreateDate' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-09-07T10:28:25Z',
                                        ],
                                        'Status' => [
                                            'description' => '应用分组状态。',
                                            'type' => 'string',
                                            'example' => 'Created',
                                        ],
                                        'DeployParameters' => [
                                            'description' => '应用分组的配置信息。',
                                            'type' => 'string',
                                            'example' => '{   "TemplateURL": "https://ros-template.oss-cn-zhangjiakou.aliyuncs.com/App_Management_Existing_Vpc_Ecs_Instance.json",   "Parameters": {     "ZoneId": "cn-hangzhou-k",     "ProjectName": "test",     "SystemDiskSize": 40,     "InstanceChargeType": "PostPaid",     "SecurityGroupId": "sg-bp1a4374akk63jl8tddy",     "VSwitchId": "vsw-bp1fcvc3zn0jrag86rrlm",     "SystemDiskCategory": "cloud_essd",     "InstancePassword": "******",     "InternetChargeType": "PayByTraffic",     "InstanceCount": 1,     "InternetMaxBandwidthOut": 0,     "VpcId": "vpc-bp1i99boyas8i8m9t3skp",     "EcsImageId": "centos_8_5_x64_20G_alibase_20211228.vhd",     "DataDiskSize": 100,     "EcsInstanceType": "ecs.s6-c1m4.small",     "DataDiskCategory": "cloud_efficiency",     "EnvironmentCommandId": "c-hz028fc3g031gcg"   },   "RegionId": "cn-hangzhou",   "StackName": "stack-1645688523068-3no_AKhOJ",   "DisableRollback": true }',
                                        ],
                                        'StatusReason' => [
                                            'description' => '应用分组状态详情。',
                                            'type' => 'string',
                                            'example' => 'ApplicationGroup is Created.',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"-\\",\\n  \\"RequestId\\": \\"69D97BF2-5DF2-544C-A650-36A474E17BC3\\",\\n  \\"MaxResults\\": 10,\\n  \\"ApplicationGroups\\": [\\n    {\\n      \\"CmsGroupId\\": \\"12345678\\",\\n      \\"DeployRegionId\\": \\"cn-hangzhou\\",\\n      \\"UpdateDate\\": \\"2021-09-08T03:01:53Z\\",\\n      \\"Description\\": \\"ApplicationGroup\\",\\n      \\"ImportTagKey\\": \\"k1\\",\\n      \\"ApplicationName\\": \\"MyApplication\\",\\n      \\"ImportTagValue\\": \\"v1\\",\\n      \\"Name\\": \\"UpdateMyApplicationGroup\\",\\n      \\"CreateDate\\": \\"2021-09-07T10:28:25Z\\",\\n      \\"Status\\": \\"Created\\",\\n      \\"DeployParameters\\": \\"{   \\\\\\"TemplateURL\\\\\\": \\\\\\"https://ros-template.oss-cn-zhangjiakou.aliyuncs.com/App_Management_Existing_Vpc_Ecs_Instance.json\\\\\\",   \\\\\\"Parameters\\\\\\": {     \\\\\\"ZoneId\\\\\\": \\\\\\"cn-hangzhou-k\\\\\\",     \\\\\\"ProjectName\\\\\\": \\\\\\"test\\\\\\",     \\\\\\"SystemDiskSize\\\\\\": 40,     \\\\\\"InstanceChargeType\\\\\\": \\\\\\"PostPaid\\\\\\",     \\\\\\"SecurityGroupId\\\\\\": \\\\\\"sg-bp1a4374akk63jl8tddy\\\\\\",     \\\\\\"VSwitchId\\\\\\": \\\\\\"vsw-bp1fcvc3zn0jrag86rrlm\\\\\\",     \\\\\\"SystemDiskCategory\\\\\\": \\\\\\"cloud_essd\\\\\\",     \\\\\\"InstancePassword\\\\\\": \\\\\\"******\\\\\\",     \\\\\\"InternetChargeType\\\\\\": \\\\\\"PayByTraffic\\\\\\",     \\\\\\"InstanceCount\\\\\\": 1,     \\\\\\"InternetMaxBandwidthOut\\\\\\": 0,     \\\\\\"VpcId\\\\\\": \\\\\\"vpc-bp1i99boyas8i8m9t3skp\\\\\\",     \\\\\\"EcsImageId\\\\\\": \\\\\\"centos_8_5_x64_20G_alibase_20211228.vhd\\\\\\",     \\\\\\"DataDiskSize\\\\\\": 100,     \\\\\\"EcsInstanceType\\\\\\": \\\\\\"ecs.s6-c1m4.small\\\\\\",     \\\\\\"DataDiskCategory\\\\\\": \\\\\\"cloud_efficiency\\\\\\",     \\\\\\"EnvironmentCommandId\\\\\\": \\\\\\"c-hz028fc3g031gcg\\\\\\"   },   \\\\\\"RegionId\\\\\\": \\\\\\"cn-hangzhou\\\\\\",   \\\\\\"StackName\\\\\\": \\\\\\"stack-1645688523068-3no_AKhOJ\\\\\\",   \\\\\\"DisableRollback\\\\\\": true }\\",\\n      \\"StatusReason\\": \\"ApplicationGroup is Created.\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListApplicationGroupsResponse>\\n    <ApplicationGroups>\\n        <ImportTagValue>test</ImportTagValue>\\n        <Status>Deploying</Status>\\n        <UpdateDate>2022-02-24T07:42:15Z</UpdateDate>\\n        <DeployRegionId>cn-hangzhou</DeployRegionId>\\n        <Description/>\\n        <ApplicationName>测试</ApplicationName>\\n        <ImportTagKey>测试</ImportTagKey>\\n        <DeployParameters>\\n            <TemplateURL>https://ros-template.oss-cn-zhangjiakou.aliyuncs.com/App_Management_Existing_Vpc_Ecs_Instance.json</TemplateURL>\\n            <Parameters>\\n                <ZoneId>cn-hangzhou-k</ZoneId>\\n                <ProjectName>test</ProjectName>\\n                <SystemDiskSize>40</SystemDiskSize>\\n                <InstanceChargeType>PostPaid</InstanceChargeType>\\n                <SecurityGroupId>sg-bp1a4374akk63jl8tddy</SecurityGroupId>\\n                <VSwitchId>vsw-bp1fcvc3zn0jrag86rrlm</VSwitchId>\\n                <SystemDiskCategory>cloud_essd</SystemDiskCategory>\\n                <InstancePassword>******</InstancePassword>\\n                <InternetChargeType>PayByTraffic</InternetChargeType>\\n                <InstanceCount>1</InstanceCount>\\n                <InternetMaxBandwidthOut>0</InternetMaxBandwidthOut>\\n                <VpcId>vpc-bp1i99boyas8i8m9t3skp</VpcId>\\n                <EcsImageId>centos_8_5_x64_20G_alibase_20211228.vhd</EcsImageId>\\n                <DataDiskSize>100</DataDiskSize>\\n                <EcsInstanceType>ecs.s6-c1m4.small</EcsInstanceType>\\n                <DataDiskCategory>cloud_efficiency</DataDiskCategory>\\n                <EnvironmentCommandId>c-hz028fc3g031gcg</EnvironmentCommandId>\\n            </Parameters>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <StackName>stack-1645688523068-3no_AKhOJ</StackName>\\n            <DisableRollback>true</DisableRollback>\\n        </DeployParameters>\\n        <StatusReason>ApplicationGroup is deploying.</StatusReason>\\n        <CreateDate>2022-02-24T07:42:10Z</CreateDate>\\n        <Name>test</Name>\\n    </ApplicationGroups>\\n    <RequestId>C164D8CF-98C5-51D4-8241-62891217983C</RequestId>\\n</ListApplicationGroupsResponse>","errorExample":""}]',
            'title' => '查询应用分组列表',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeployApplicationGroup' => [
            'summary' => '部署应用分组。应用管理的服务地域仅支持杭州，请使用杭州的endpoint。',
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
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署地域。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ApplicationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyApplication',
                    ],
                ],
                [
                    'name' => 'DeployParameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组部署配置信息。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{       "TemplateURL": "https://ros-template.oss-cn-zhangjiakou.aliyuncs.com/App_Management_Existing_Vpc_Ecs_Instance.json",       "Parameters": {         "ZoneId": "cn-hangzhou-k",         "ProjectName": "test",         "SystemDiskSize": 40,         "InstanceChargeType": "PostPaid",         "SecurityGroupId": "sg-bp1a4374akk63jl8tddy",         "VSwitchId": "vsw-bp1fcvc3zn0jrag86rrlm",         "SystemDiskCategory": "cloud_essd",         "InstancePassword": "******",         "InternetChargeType": "PayByTraffic",         "InstanceCount": 1,         "InternetMaxBandwidthOut": 0,         "VpcId": "vpc-bp1i99boyas8i8m9t3skp",         "EcsImageId": "centos_8_5_x64_20G_alibase_20211228.vhd",         "DataDiskSize": 100,         "EcsInstanceType": "ecs.s6-c1m4.small",         "DataDiskCategory": "cloud_efficiency",         "EnvironmentCommandId": "c-hz028fc3g031gcg"       }',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyApplicationGroup',
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
                                'example' => '8AF4800A-A316-589A-90C4-313B1FEEB084',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8AF4800A-A316-589A-90C4-313B1FEEB084\\"\\n}","errorExample":""},{"type":"xml","example":"<DeployApplicationGroupResponse>\\n    <ApplicationGroup>\\n        <Status>Deployed</Status>\\n        <DeployRegionId>cn-hangzhou</DeployRegionId>\\n        <Description/>\\n        <ApplicationName>测试</ApplicationName>\\n        <ImportTagKey>测试</ImportTagKey>\\n        <StatusReason>Stack CREATE completed successfully</StatusReason>\\n        <CmsGroupId>196343713</CmsGroupId>\\n        <CreateDate>2022-02-24T07:42:10Z</CreateDate>\\n        <Name>test</Name>\\n        <ImportTagValue>test</ImportTagValue>\\n        <UpdateDate>2022-02-24T07:58:33Z</UpdateDate>\\n        <DeployParameters>\\n            <TemplateURL>https://ros-template.oss-cn-zhangjiakou.aliyuncs.com/App_Management_Existing_Vpc_Ecs_Instance.json</TemplateURL>\\n            <Parameters>\\n                <ZoneId>cn-hangzhou-k</ZoneId>\\n                <ProjectName>test</ProjectName>\\n                <SystemDiskSize>40</SystemDiskSize>\\n                <InstanceChargeType>PostPaid</InstanceChargeType>\\n                <SecurityGroupId>sg-bp1a4374akk63jl8tddy</SecurityGroupId>\\n                <VSwitchId>vsw-bp1fcvc3zn0jrag86rrlm</VSwitchId>\\n                <SystemDiskCategory>cloud_essd</SystemDiskCategory>\\n                <InstancePassword>******</InstancePassword>\\n                <InternetChargeType>PayByTraffic</InternetChargeType>\\n                <InstanceCount>1</InstanceCount>\\n                <InternetMaxBandwidthOut>0</InternetMaxBandwidthOut>\\n                <VpcId>vpc-bp1i99boyas8i8m9t3skp</VpcId>\\n                <EcsImageId>centos_8_5_x64_20G_alibase_20211228.vhd</EcsImageId>\\n                <DataDiskSize>100</DataDiskSize>\\n                <EcsInstanceType>ecs.s6-c1m4.small</EcsInstanceType>\\n                <DataDiskCategory>cloud_efficiency</DataDiskCategory>\\n                <EnvironmentCommandId>c-hz028fc3g031gcg</EnvironmentCommandId>\\n            </Parameters>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <StackName>stack-1645688523068-3no_AKhOJ</StackName>\\n            <DisableRollback>true</DisableRollback>\\n        </DeployParameters>\\n        <DeployOutputs>\\n            <Outputs>\\n                <Description>No description given</Description>\\n                <OutputKey>InstanceIds</OutputKey>\\n            </Outputs>\\n            <StackId>6ef4b860-f6e7-4145-8d22-f4a2a32363e1</StackId>\\n        </DeployOutputs>\\n    </ApplicationGroup>\\n    <RequestId>8AF4800A-A316-589A-90C4-313B1FEEB084</RequestId>\\n</DeployApplicationGroupResponse>","errorExample":""}]',
            'title' => '部署应用分组',
        ],
        'ContinueDeployApplicationGroup' => [
            'summary' => '当应用分组部署失败时，调用此接口继续部署应用分组。应用管理的服务地域仅支持杭州，请使用杭州的endpoint。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ApplicationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyApplication',
                    ],
                ],
                [
                    'name' => 'DeployParameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组部署配置信息。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{       "TemplateURL": "https://ros-template.oss-cn-zhangjiakou.aliyuncs.com/App_Management_Existing_Vpc_Ecs_Instance.json",       "Parameters": {         "ZoneId": "cn-hangzhou-k",         "ProjectName": "test",         "SystemDiskSize": 40,         "InstanceChargeType": "PostPaid",         "SecurityGroupId": "sg-bp1a4374akk63jl8tddy",         "VSwitchId": "vsw-bp1fcvc3zn0jrag86rrlm",         "SystemDiskCategory": "cloud_essd",         "InstancePassword": "******",         "InternetChargeType": "PayByTraffic",         "InstanceCount": 1,         "InternetMaxBandwidthOut": 0,         "VpcId": "vpc-bp1i99boyas8i8m9t3skp",         "EcsImageId": "centos_8_5_x64_20G_alibase_20211228.vhd",         "DataDiskSize": 100,         "EcsInstanceType": "ecs.s6-c1m4.small",         "DataDiskCategory": "cloud_efficiency",         "EnvironmentCommandId": "c-hz028fc3g031gcg"       }',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MyApplicationGroup',
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
                                'example' => '8AF4800A-A316-589A-90C4-313B1FEEB084',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8AF4800A-A316-589A-90C4-313B1FEEB084\\"\\n}","errorExample":""},{"type":"xml","example":"<ContinueDeployApplicationGroupResponse>\\n    <ApplicationGroup>\\n        <Status>Deployed</Status>\\n        <DeployRegionId>cn-hangzhou</DeployRegionId>\\n        <Description/>\\n        <ApplicationName>测试</ApplicationName>\\n        <ImportTagKey>测试</ImportTagKey>\\n        <StatusReason>Stack CREATE completed successfully</StatusReason>\\n        <CmsGroupId>196343713</CmsGroupId>\\n        <CreateDate>2022-02-24T07:42:10Z</CreateDate>\\n        <Name>test</Name>\\n        <ImportTagValue>test</ImportTagValue>\\n        <UpdateDate>2022-02-24T07:58:33Z</UpdateDate>\\n        <DeployParameters>\\n            <TemplateURL>https://ros-template.oss-cn-zhangjiakou.aliyuncs.com/App_Management_Existing_Vpc_Ecs_Instance.json</TemplateURL>\\n            <Parameters>\\n                <ZoneId>cn-hangzhou-k</ZoneId>\\n                <ProjectName>test</ProjectName>\\n                <SystemDiskSize>40</SystemDiskSize>\\n                <InstanceChargeType>PostPaid</InstanceChargeType>\\n                <SecurityGroupId>sg-bp1a4374akk63jl8tddy</SecurityGroupId>\\n                <VSwitchId>vsw-bp1fcvc3zn0jrag86rrlm</VSwitchId>\\n                <SystemDiskCategory>cloud_essd</SystemDiskCategory>\\n                <InstancePassword>******</InstancePassword>\\n                <InternetChargeType>PayByTraffic</InternetChargeType>\\n                <InstanceCount>1</InstanceCount>\\n                <InternetMaxBandwidthOut>0</InternetMaxBandwidthOut>\\n                <VpcId>vpc-bp1i99boyas8i8m9t3skp</VpcId>\\n                <EcsImageId>centos_8_5_x64_20G_alibase_20211228.vhd</EcsImageId>\\n                <DataDiskSize>100</DataDiskSize>\\n                <EcsInstanceType>ecs.s6-c1m4.small</EcsInstanceType>\\n                <DataDiskCategory>cloud_efficiency</DataDiskCategory>\\n                <EnvironmentCommandId>c-hz028fc3g031gcg</EnvironmentCommandId>\\n            </Parameters>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <StackName>stack-1645688523068-3no_AKhOJ</StackName>\\n            <DisableRollback>true</DisableRollback>\\n        </DeployParameters>\\n        <DeployOutputs>\\n            <Outputs>\\n                <Description>No description given</Description>\\n                <OutputKey>InstanceIds</OutputKey>\\n            </Outputs>\\n            <StackId>6ef4b860-f6e7-4145-8d22-f4a2a32363e1</StackId>\\n        </DeployOutputs>\\n    </ApplicationGroup>\\n    <RequestId>8AF4800A-A316-589A-90C4-313B1FEEB084</RequestId>\\n</ContinueDeployApplicationGroupResponse>","errorExample":""}]',
            'title' => '继续部署应用分组',
        ],
        'ChangeResourceGroup' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要修改资源组的云资源的资源ID。'."\n"
                            ."\n"
                            .'- 当ResourceType为template时，ResourceId为TemplateName;'."\n"
                            ."\n"
                            .'- 当ResourceType为parameter时，ResourceId为Name；'."\n"
                            ."\n"
                            .'- 当ResourceType为secretparameter时，ResourceId为Name；'."\n"
                            ."\n"
                            .'- 当ResourceType为stateconfiguration时，ResourceId为StateConfigurationId。'."\n"
                            ."\n"
                            .'- 当ResourceType为application时，ResourceId为Name。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TemplateName',
                    ],
                ],
                [
                    'name' => 'NewResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要移入云资源实例的资源组ID。资源组是在阿里云账号下进行资源分组管理的一种机制，资源组能够帮助您解决单个云账号内的资源分组和授权管理等复杂性问题。详细信息，请参见什么是[资源管理](~~94475~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'rg-acfm3peow3k****',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要修改资源组的云资源类型，取值：'."\n"
                            ."\n"
                            .'- template：模板。'."\n"
                            .'- parameter：参数。'."\n"
                            .'- secretparameter：加密参数。'."\n"
                            .'- stateconfiguration：终态配置。'."\n"
                            .'- application：应用。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'template',
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
                                'example' => '0620E49F-B884-5F98-A834-69D72922E5CF',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0620E49F-B884-5F98-A834-69D72922E5CF\\"\\n}","errorExample":""},{"type":"xml","example":"<ChangeResourceGroupResponse>\\n    <RequestId>0620E49F-B884-5F98-A834-69D72922E5CF</RequestId>\\n</ChangeResourceGroupResponse>","errorExample":""}]',
            'title' => '更改资源组',
            'summary' => '修改云资源所属的资源组。',
        ],
        'ListTagKeys' => [
            'path' => '/ListTagKeys',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '单页返回结果最大数量10到100，默认为50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻下一页口令',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'djsdlkasd',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询被打标签的资源类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'template',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻到下一页的口令',
                                'type' => 'string',
                                'example' => '87y29h80h20h3f2',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '36210B73-8262-4D08-9D3A-7F96789733C8',
                            ],
                            'MaxResults' => [
                                'description' => '单页返回最大数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Keys' => [
                                'description' => '标签键列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'k3',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"87y29h80h20h3f2\\",\\n  \\"RequestId\\": \\"36210B73-8262-4D08-9D3A-7F96789733C8\\",\\n  \\"MaxResults\\": 50,\\n  \\"Keys\\": [\\n    \\"k3\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagKeysResponse>\\n<RequestId>36210B73-8262-4D08-9D3A-7F96789733C8</RequestId>\\n<NextToken>e16333dsads3058fc897878ae</NextToken>\\n<Keys>k3</Keys>\\n<Keys>k2</Keys>\\n<Keys>k1</Keys>\\n<Keys>k4</Keys>\\n<Keys>key55</Keys>\\n<Keys>ew</Keys>\\n<Keys>oos</Keys>\\n<Keys>scaling_group</Keys>\\n<Keys>aa</Keys>\\n</ListTagKeyseResponse>","errorExample":""}]',
            'title' => '查询已创建的标签',
            'summary' => '查询已创建的标签。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTagValues' => [
            'path' => '/ListTagValues',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '单页最大结果数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻下一页的口令',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3272h923879hsaksad',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已打标签的资源类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'template',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的标签键',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'k1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻下一页的口令',
                                'type' => 'string',
                                'example' => '83u29j2dj3dskds',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '65591133-1188-4935-B78F-20F72',
                            ],
                            'MaxResults' => [
                                'description' => '单页最大结果数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Values' => [
                                'description' => '标签值列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'example' => 'v1',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"83u29j2dj3dskds\\",\\n  \\"RequestId\\": \\"65591133-1188-4935-B78F-20F72\\",\\n  \\"MaxResults\\": 50,\\n  \\"Values\\": [\\n    \\"v1\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagValuesResponse>\\n<RequestId>65591133-1188-4935-B78F-20F722DCD647</RequestId>\\n<NextToken>5c32b9208a941197e0b5e8707e68181f</NextToken>\\n<Values>v1</Values>\\n<Values>v1</Values>\\n</ListTagValuesResponse>","errorExample":""}]',
            'title' => '查询已创建的标签值',
            'summary' => '查询已创建的标签值。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTagResources' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '资源ID，资源ID数量限制为1至50。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '["templateNam1","templateName2"]',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型定义。取值范围：'."\n"
                            .'template:OOS模版'."\n"
                            .'execution:OOS执行',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'template',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签键及值，键值对数量限制为1至20。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"k1":"v2","k2":"v2"}',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果承接上一页的Token，该参数需从上一页返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '再次查询时，若期望返回结果承接本页，则在请求参数中的NextToken传入该值。若NextToken对应返回值为空，则表示不存在下一页。',
                                'type' => 'string',
                                'example' => 'MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A5EF78C1-67FC-4E36-A6A8-7DF9C51726DF',
                            ],
                            'TagResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagResource' => [
                                        'description' => '标签及资源关系。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ResourceType' => [
                                                    'description' => '资源类型。',
                                                    'type' => 'string',
                                                    'example' => 'template',
                                                ],
                                                'TagValue' => [
                                                    'description' => '标签值。',
                                                    'type' => 'string',
                                                    'example' => 'v1',
                                                ],
                                                'ResourceId' => [
                                                    'description' => '资源ID。',
                                                    'type' => 'string',
                                                    'example' => 'TagTest2',
                                                ],
                                                'TagKey' => [
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'k1',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ\\",\\n  \\"RequestId\\": \\"A5EF78C1-67FC-4E36-A6A8-7DF9C51726DF\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"template\\",\\n        \\"TagValue\\": \\"v1\\",\\n        \\"ResourceId\\": \\"TagTest2\\",\\n        \\"TagKey\\": \\"k1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse> \\n<TagResources>\\n    <TagResource>\\n        <ResourceType>template</ResourceType>\\n        <TagValue>v1</TagValue>\\n        <ResourceId>TagTest2</ResourceId>\\n        <TagKey>k1</TagKey>\\n    </TagResource>\\n    <TagResource>\\n        <ResourceType>template</ResourceType>\\n        <TagValue>v1</TagValue>\\n        <ResourceId>TagTest3</ResourceId>\\n        <TagKey>k1</TagKey>\\n    </TagResource>\\n    <TagResource>\\n        <ResourceType>template</ResourceType>\\n        <TagValue>v1</TagValue>\\n        <ResourceId>TagTest4</ResourceId>\\n        <TagKey>k1</TagKey>\\n    </TagResource>\\n    <TagResource>\\n        <ResourceType>template</ResourceType>\\n        <TagValue>v1</TagValue>\\n        <ResourceId>TagTest5</ResourceId>\\n        <TagKey>k1</TagKey>\\n    </TagResource>\\n</TagResources>\\n<NextToken/>\\n<RequestId>A5EF78C1-67FC-4E36-A6A8-7DF9C51726DF</RequestId>\\n</ListTagResourcesResponse> ","errorExample":""}]',
            'title' => '查询资源标签关系',
            'summary' => '查询可见的资源标签关系。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UntagResources' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '需要修改资源组的云资源的资源ID列表，资源ID数量限制为1至50。'."\n"
                            ."\n"
                            .'- 当ResourceType为template时，ResourceIds为\\["TemplateName1","TemplateName2"\\];'."\n"
                            ."\n"
                            .'- 当ResourceType为parameter时，ResourceIds为\\["Name1","Name2"\\];'."\n"
                            ."\n"
                            .'- 当ResourceType为secretparameter时，ResourceIds为\\["Name1","Name2"\\];'."\n"
                            .'- 当ResourceType为stateconfiguration时，ResourceIds为\\["StateConfigurationId1","StateConfigurationId2"\\];'."\n"
                            .'- 当ResourceType为application时，ResourceIds为\\["Name1","Name2"\\]。',
                        'type' => 'object',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["templateName1","templateName2"]',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要修改资源组的云资源类型，取值：'."\n"
                            ."\n"
                            .'- template: 模板。'."\n"
                            .'- parameter: 参数。'."\n"
                            .'- secretparameter: 加密参数。'."\n"
                            .'- stateconfiguration: 终态配置。'."\n"
                            .'- application: 应用。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'template',
                    ],
                ],
                [
                    'name' => 'TagKeys',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签键列表，键的数量限制为1至20。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '["k1","k2"]',
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否全部删除，仅当TagKeys为空时有效。取值范围：true或false，默认是false。当该参数为false时，TagKeys则是必选参数。',
                        'type' => 'boolean',
                        'required' => false,
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
                                'example' => '491DF8C2-34C9-4679-9DB3-4C0F49B129AC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"491DF8C2-34C9-4679-9DB3-4C0F49B129AC\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>     \\n<RequestId>491DF8C2-34C9-4679-9DB3-4C0F49B129AC</RequestId>\\n</UntagResourcesResponse>\\n","errorExample":""}]',
            'title' => '删除用户标签资源关系',
            'summary' => '删除用户标签资源关系，即可为资源删除用户标签。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'TagResources' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ResourceIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '需要修改资源组的云资源的资源ID列表，资源ID数量限制为1至50。'."\n"
                            ."\n"
                            .'- 当ResourceType为template时，ResourceIds为\\["TemplateName1","TemplateName2"\\];'."\n"
                            ."\n"
                            .'- 当ResourceType为parameter时，ResourceIds为\\["Name1","Name2"\\];'."\n"
                            ."\n"
                            .'- 当ResourceType为secretparameter时，ResourceIds为\\["Name1","Name2"\\];'."\n"
                            .'- 当ResourceType为stateconfiguration时，ResourceIds为\\["StateConfigurationId1","StateConfigurationId2"\\];'."\n"
                            .'- 当ResourceType为application时，ResourceIds为\\["Name1","Name2"\\]。',
                        'type' => 'object',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["templateName1","templateName2"]',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要修改资源组的云资源类型，取值：'."\n"
                            ."\n"
                            .'- template: 模板。'."\n"
                            .'- parameter: 参数。'."\n"
                            .'- secretparameter: 加密参数。'."\n"
                            .'- stateconfiguration: 终态配置。'."\n"
                            .'- application: 应用。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'template',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '标签键值映射，键值对数量限制为1至20。',
                        'type' => 'object',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"k1":"v1","k2":"v2"}',
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
                                'example' => 'B19AE203-FD99-49C7-9253-FAAACAD46F4A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B19AE203-FD99-49C7-9253-FAAACAD46F4A\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse> \\n<RequestId>B19AE203-FD99-49C7-9253-FAAACAD46F4A</RequestId>\\n</TagResourcesResponse> \\n","errorExample":""}]',
            'title' => '创建标签资源关系',
            'summary' => '创建标签资源关系，即可为资源创建用户标签。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeApplicationGroupBill' => [
            'summary' => '查询应用分组资源成本。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'ApplicationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => false,
                        'example' => 'test_application',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_application_group',
                    ],
                ],
                [
                    'name' => 'BillingCycle',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账单日期，YYYY－MM。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2023-06',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ALIYUN::ECS::INSTANCE',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '50',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '翻页标记的Token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '翻页标记的Token',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E897A1AB-4701-5B71-93AD-38FD703763A3',
                            ],
                            'MaxResults' => [
                                'description' => '分页大小。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'ApplicationGroupConsume' => [
                                'description' => '利用率和账单详情',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'title' => '实例id',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'i-0jl781czrhqey0s5zpsj',
                                        ],
                                        'InstanceName' => [
                                            'title' => '实例名称',
                                            'description' => '实例名称。',
                                            'type' => 'string',
                                            'example' => 'test-',
                                        ],
                                        'InstanceType' => [
                                            'title' => '实例类型',
                                            'description' => '实例类型。',
                                            'type' => 'string',
                                            'example' => 'ALIYUN::ECS::INSTANCE',
                                        ],
                                        'CreationTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2023-06-10T06:00Z',
                                        ],
                                        'Status' => [
                                            'description' => '状态。',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'Amount' => [
                                            'description' => '数额。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '18.88',
                                        ],
                                        'Currency' => [
                                            'title' => '币种。取值：'."\n"
                                                .'● CNY'."\n"
                                                .'● USD'."\n"
                                                .'● JPY',
                                            'description' => '币种。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'JPY' => 'JPY',
                                                'USD' => 'USD',
                                                'CNY' => 'CNY',
                                            ],
                                            'example' => 'CNY',
                                        ],
                                        'Performance' => [
                                            'description' => '资源性能属性。',
                                            'type' => 'string',
                                            'example' => '"{\\"mem\\":\\"6.82\\",\\"cpu\\":\\"0.55\\"}"',
                                        ],
                                        'Optimization' => [
                                            'description' => '优化建议。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'PeakType' => [
                                            'description' => '峰值类型。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'WHITE' => 'WHITE',
                                                'NIGHT' => 'NIGHT',
                                                'AVERAGE' => 'AVERAGE',
                                            ],
                                            'example' => 'WHITE',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"RequestId\\": \\"E897A1AB-4701-5B71-93AD-38FD703763A3\\",\\n  \\"MaxResults\\": 10,\\n  \\"ApplicationGroupConsume\\": [\\n    {\\n      \\"InstanceId\\": \\"i-0jl781czrhqey0s5zpsj\\",\\n      \\"InstanceName\\": \\"test-\\",\\n      \\"InstanceType\\": \\"ALIYUN::ECS::INSTANCE\\",\\n      \\"CreationTime\\": \\"2023-06-10T06:00Z\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"Amount\\": 18.88,\\n      \\"Currency\\": \\"CNY\\",\\n      \\"Performance\\": \\"\\\\\\"{\\\\\\\\\\\\\\"mem\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"6.82\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"cpu\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"0.55\\\\\\\\\\\\\\"}\\\\\\"\\",\\n      \\"Optimization\\": \\"1\\",\\n      \\"PeakType\\": \\"WHITE\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询应用分组资源成本',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-fuzhou',
            'endpoint' => 'oos.cn-fuzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'oos.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'oos.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'oos.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'oos.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'oos.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'oos.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'oos.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'endpoint' => 'oos.cn-nanjing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'oos.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'oos.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'oos.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'oos.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'oos.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'oos.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'oos.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'oos.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'oos.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'oos.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'oos.ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'oos.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'oos.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'oos.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'oos.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'oos.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'oos.cn-hangzhou-finance.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'oos.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'oos.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'oos.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'oos.cn-beijing-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'oos.me-central-1.aliyuncs.com',
        ],
    ],
];
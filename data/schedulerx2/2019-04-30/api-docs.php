<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'schedulerx2',
        'version' => '2019-04-30',
    ],
    'directories' => [
        [
            'id' => 130044,
            'title' => '服务地域',
            'type' => 'directory',
            'children' => [
                'DescribeRegions',
            ],
        ],
        [
            'id' => 167610,
            'title' => '命名空间',
            'type' => 'directory',
            'children' => [
                'CreateNamespace',
                'ListNamespaces',
            ],
        ],
        [
            'id' => 130046,
            'title' => '应用分组',
            'type' => 'directory',
            'children' => [
                'CreateAppGroup',
                'GetAppGroup',
                'DeleteAppGroup',
                'UpdateAppGroup',
                'ListGroups',
                'GetWorkerList',
            ],
        ],
        [
            'id' => 130049,
            'title' => '工作流',
            'type' => 'directory',
            'children' => [
                'CreateWorkflow',
                'UpdateWorkflow',
                'UpdateWorkflowDag',
                'DeleteWorkflow',
                'DisableWorkflow',
                'EnableWorkflow',
                'GetWorkFlow',
                'ExecuteWorkflow',
                'GetWorkflowInstance',
                'ListWorkflowInstance',
                'SetWfInstanceSuccess',
            ],
        ],
        [
            'id' => 130055,
            'title' => '任务',
            'type' => 'directory',
            'children' => [
                'CreateJob',
                'DeleteJob',
                'BatchDeleteJobs',
                'UpdateJob',
                'DisableJob',
                'BatchEnableJobs',
                'BatchDisableJobs',
                'EnableJob',
                'GetJobInfo',
                'ListJobs',
                'ExecuteJob',
                'DesignateWorkers',
                'RerunJob',
            ],
        ],
        [
            'id' => 130066,
            'title' => '任务实例',
            'type' => 'directory',
            'children' => [
                'StopInstance',
                'GetJobInstance',
                'GetJobInstanceList',
                'RetryJobInstance',
                'SetJobInstanceSuccess',
            ],
        ],
        [
            'id' => 167612,
            'title' => '权限设置',
            'type' => 'directory',
            'children' => [
                'GrantPermission',
                'RevokePermission',
            ],
        ],
        [
            'id' => 179264,
            'title' => '日志',
            'type' => 'directory',
            'children' => [
                'GetLog',
            ],
        ],
        [
            'id' => 181204,
            'title' => '路由策略',
            'type' => 'directory',
            'children' => [
                'DeleteRouteStrategy',
                'BatchDeleteRouteStrategy',
                'CreateRouteStrategy',
            ],
        ],
        [
            'id' => 190137,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'GetOverview',
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
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息，仅出错时返回错误信息。',
                                'type' => 'string',
                                'example' => 'disable failed jobs=[99341]',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：成功'."\n"
                                    .'- **false**：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Regions' => [
                                'description' => '可用地域的集合',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionEndpoint' => [
                                            'description' => '地域对应的接入地址（Endpoint）',
                                            'type' => 'string',
                                            'example' => 'schedulerx.cn-hangzhou.aliyuncs.com',
                                        ],
                                        'LocalName' => [
                                            'description' => '地域的展示名，根据当前语言环境转换',
                                            'type' => 'string',
                                            'example' => '杭州',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"disable failed jobs=[99341]\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true,\\n  \\"Regions\\": [\\n    {\\n      \\"RegionEndpoint\\": \\"schedulerx.cn-hangzhou.aliyuncs.com\\",\\n      \\"LocalName\\": \\"杭州\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看可选的地域',
            'summary' => '返回可用region列表。',
        ],
        'CreateNamespace' => [
            'summary' => '创建命名空间。',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Uid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间UID，全局唯一，推荐用UUID生成。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-env',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request。',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息，仅错误时返回错误信息。',
                                'type' => 'string',
                                'example' => 'namespace=test3 is existed, noting update',
                            ],
                            'Success' => [
                                'description' => '创建应用是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：创建应用成功。'."\n"
                                    .'- **false**：创建应用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '命名空间信息。',
                                'type' => 'object',
                                'properties' => [
                                    'NamespaceUid' => [
                                        'description' => '命名空间唯一标识。',
                                        'type' => 'string',
                                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"namespace=test3 is existed, noting update\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"NamespaceUid\\": \\"adcfc35d-e2fe-4fe9-bbaa-20e90ffc****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '创建命名空间',
        ],
        'ListNamespaces' => [
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
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx-dev',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间UID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息。',
                                'type' => 'string',
                                'example' => 'message',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID。',
                                'type' => 'string',
                                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBCB58C',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：成功。'."\n"
                                    ."\n"
                                    .'- **false**：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '命名空间列表信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Namespaces' => [
                                        'description' => '命名空间列表与详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '命名空间名称。',
                                                    'type' => 'string',
                                                    'example' => 'doc',
                                                ],
                                                'Description' => [
                                                    'description' => '命名空间描述。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'UId' => [
                                                    'description' => '命名空间ID。',
                                                    'type' => 'string',
                                                    'example' => '1a72ecb1-b4cc-400a-a71b-20cdec9b****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"message\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBCB58C\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Namespaces\\": [\\n      {\\n        \\"Name\\": \\"doc\\",\\n        \\"Description\\": \\"test\\",\\n        \\"UId\\": \\"1a72ecb1-b4cc-400a-a71b-20cdec9b****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNamespacesResponse>\\n<Message>You have an error in your SQL syntax</Message>\\n<RequestId>71BCC0E3-64B2-4B63-A870-AFB64EBCB58C</RequestId>\\n<Data>\\n    <Namespaces>\\n        <UId>1a72ecb1-b4cc-400a-a71b-20cdec9b****</UId>\\n        <Description>test</Description>\\n        <Name>doc</Name>\\n    </Namespaces>\\n</Data>\\n<Code/>\\n<Success>true</Success>\\n</ListNamespacesResponse>","errorExample":""}]',
            'title' => '获取命名空间列表',
            'summary' => '获取命名空间列表。',
            'description' => '在调用该接口前，需要在POM文件添加以下依赖：'."\n"
                ."\n"
                .'```'."\n"
                .'<dependency>'."\n"
                .'    <groupId>com.aliyun</groupId>'."\n"
                .'    <artifactId>aliyun-java-sdk-schedulerx2</artifactId>'."\n"
                .'    <version>1.0.5</version>'."\n"
                .'</dependency>'."\n"
                .'```',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## Demo'."\n"
                .'```'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import java.util.List;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.exceptions.ClientException;'."\n"
                .'import com.aliyuncs.exceptions.ServerException;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.ListNamespacesRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.ListNamespacesResponse;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.ListNamespacesResponse.Data.Namespace;'."\n"
                ."\n"
                .'public class TestListNamespaces {'."\n"
                ."\n"
                .'    public static void main(String[] args) {'."\n"
                .'        //OpenAPI的接入点，具体查看支持地域列表以及购买机器地域填写。'."\n"
                .'        String regionId = "cn-test";'."\n"
                .'        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。'."\n"
                .'        String accessKeyId = "XXXXXXXX";'."\n"
                .'        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。'."\n"
                .'        String accessKeySecret = "XXXXXXXX";'."\n"
                .'        //产品名称。'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写。'."\n"
                .'        String domain ="schedulerx.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端。'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                .'        '."\n"
                .'        ListNamespacesRequest request = new ListNamespacesRequest();'."\n"
                .'        ListNamespacesResponse response;'."\n"
                .'        try {'."\n"
                .'            response = client.getAcsResponse(request);'."\n"
                .'            if (!response.getSuccess()) {'."\n"
                .'                System.out.println(response.getMessage());'."\n"
                .'            } else {'."\n"
                .'                List<Namespace> namespaces = response.getData().getNamespaces();'."\n"
                .'                for (Namespace namespace : namespaces) {'."\n"
                .'                    System.out.println("namespace uid=" + namespace.getUId());'."\n"
                .'                }'."\n"
                .'            }'."\n"
                .'        } catch (ServerException e) {'."\n"
                .'            // TODO Auto-generated catch block'."\n"
                .'            e.printStackTrace();'."\n"
                .'        } catch (ClientException e) {'."\n"
                .'            // TODO Auto-generated catch block'."\n"
                .'            e.printStackTrace();'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'    '."\n"
                .'}'."\n"
                ."\n"
                .'``` ',
        ],
        'CreateAppGroup' => [
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DocTest',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '暂不支持，无须填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TestSchedulerx.defaultGroup',
                    ],
                ],
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
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test',
                    ],
                ],
                [
                    'name' => 'MaxJobs',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最大任务数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Test',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用Appkey。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'adcExHZviLcl****',
                    ],
                ],
                [
                    'name' => 'MonitorConfigJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '报警配置JSON字段。关于此字段的详细说明参见下文**关于请求参数的补充说明**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"sendChannel":"sms,ding"}',
                    ],
                ],
                [
                    'name' => 'MonitorContactsJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '报警联系人JSON格式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"userName":"张三","userPhone":"89756******"},{"userName":"李四","ding":"http://www.example.com"}]',
                    ],
                ],
                [
                    'name' => 'ScheduleBusyWorkers',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否调度繁忙机器。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'EnableLog',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启日志。'."\n"
                            ."\n"
                            .'- true：开启'."\n"
                            ."\n"
                            .'- false：关闭',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'AppType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用类型。'."\n"
                            ."\n"
                            .'- 1、普通应用。'."\n"
                            .'- 2、k8s应用。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本，1:基础版，2:专业版',
                        'description' => '应用版本，1:基础版，2:专业版',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                        'default' => '2',
                        'enum' => [
                            '1',
                            '2',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息，仅错误时返回错误信息。',
                                'type' => 'string',
                                'example' => 'Your request is denied as lack of ssl protect.',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID。',
                                'type' => 'string',
                                'example' => '883AFE93-FB03-4FA9-A958-E750C6DE120C',
                            ],
                            'Success' => [
                                'description' => '创建应用是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：创建应用成功。'."\n"
                                    .'- **false**：创建应用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '任务分组信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AppGroupId' => [
                                        'description' => '任务分组ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '6607',
                                    ],
                                    'AppKey' => [
                                        'description' => '应用AppKey。',
                                        'type' => 'string',
                                        'example' => 'adcExHZviL******',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Your request is denied as lack of ssl protect.\\",\\n  \\"RequestId\\": \\"883AFE93-FB03-4FA9-A958-E750C6DE120C\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AppGroupId\\": 6607,\\n    \\"AppKey\\": \\"adcExHZviL******\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateAppGroupResponse>\\n<RequestId>883AFE93-FB03-4FA9-A958-E750C6DE120C</RequestId>\\n<Message>Your request is denied as lack of ssl protect.</Message>\\n<Data>\\n    <AppGroupId>6607</AppGroupId>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</CreateAppGroupResponse>","errorExample":""}]',
            'title' => '创建应用分组',
            'summary' => '创建应用分组，返回appKey。',
            'requestParamsDescription' => '**关于请求参数的补充说明** '."\n"
                ."\n"
                .'报警通道如下，配置多个逗号分隔。'."\n"
                ."\n"
                .'- webhook：ding'."\n"
                ."\n"
                .'- 短信：sms'."\n"
                ."\n"
                .'- 邮件：mail'."\n"
                ."\n"
                .'- 电话：phone'."\n"
                ."\n"
                .'例如：{"sendChannel":"ding,sms,mail,phone"}',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 示例Demo'."\n"
                ."\n"
                .'```'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import com.alibaba.schedulerx.common.util.JsonUtil;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.CreateAppGroupRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.CreateAppGroupResponse;'."\n"
                ."\n"
                .'public class TestCreateAppGroup {'."\n"
                ."\n"
                .'    public static void main(String[] args) throws Exception {'."\n"
                .'        // OpenAPI的接入点，具体查看上表支持地域列表以及购买机器地域填写。'."\n"
                .'        String regionId = "cn-shanghai";'."\n"
                .'        //鉴权使用的AccessKeyId，由阿里云官网控制台获取。'."\n"
                .'        String accessKeyId = "<yourAccessKeyId>";'."\n"
                .'        //鉴权使用的AccessKeySecret，由阿里云官网控制台获取。'."\n"
                .'        String accessKeySecret = "<yourAccessKeySecret>";'."\n"
                .'        //产品名称'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写。'."\n"
                .'        String domain ="schedulerx.cn-shanghai.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端。'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                .'        '."\n"
                .'        CreateAppGroupRequest request = new CreateAppGroupRequest();'."\n"
                .'        request.setNamespace("xxxxxx");'."\n"
                .'        request.setNamespaceName("xxxx");'."\n"
                .'        request.setAppName("xxxx");'."\n"
                .'        request.setDescription("xxx");'."\n"
                .'        request.setGroupId("xxx");'."\n"
                ."\n"
                .'        //发送请求。'."\n"
                .'        CreateAppGroupResponse response = client.getAcsResponse(request);'."\n"
                .'        if (!response.getSuccess()) {'."\n"
                .'            System.out.println(response.getMessage());'."\n"
                .'            System.out.println("createApp: "+response.getRequestId());'."\n"
                .'        } else {'."\n"
                .'            System.out.println(JsonUtil.toJson(response));'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'    '."\n"
                .'}'."\n"
                .'```',
        ],
        'GetAppGroup' => [
            'summary' => '获取应用分组。',
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
            ],
            'parameters' => [
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的**应用管理**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的**命名空间**页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
                            ],
                            'Code' => [
                                'description' => '接口状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息。',
                                'type' => 'string',
                                'example' => 'app is not existed, groupId=xxxx, namesapce=xxxx',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：成功'."\n"
                                    ."\n"
                                    .'- **false**：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '应用分组信息',
                                'type' => 'object',
                                'properties' => [
                                    'AppName' => [
                                        'description' => '应用名称',
                                        'type' => 'string',
                                        'example' => 'DocTest',
                                    ],
                                    'Description' => [
                                        'description' => '应用描述',
                                        'type' => 'string',
                                        'example' => 'Test',
                                    ],
                                    'MaxJobs' => [
                                        'description' => '应用分组可配置最大任务数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                    'GroupId' => [
                                        'description' => '应用ID',
                                        'type' => 'string',
                                        'example' => 'testSchedulerx.defaultGroup',
                                    ],
                                    'MonitorConfigJson' => [
                                        'description' => '报警配置JSON字段。关于此字段的详细说明参见下文**关于返回参数的补充说明**。',
                                        'type' => 'string',
                                        'example' => '{"sendChannel":"sms,mail,ding"}',
                                    ],
                                    'CurJobs' => [
                                        'description' => '应用分组当前配置任务数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'AppKey' => [
                                        'description' => '应用AppKey',
                                        'type' => 'string',
                                        'example' => 'QI4lWMZ+xk1rNB67jFUhaw==',
                                    ],
                                    'AppVersion' => [
                                        'title' => '应用版本，1:基础版，2:专业版',
                                        'description' => '应用版本，1:基础版，2:专业版',
                                        'type' => 'string',
                                        'example' => '2',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"app is not existed, groupId=xxxx, namesapce=xxxx\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AppName\\": \\"DocTest\\",\\n    \\"Description\\": \\"Test\\",\\n    \\"MaxJobs\\": 1000,\\n    \\"GroupId\\": \\"testSchedulerx.defaultGroup\\",\\n    \\"MonitorConfigJson\\": \\"{\\\\\\"sendChannel\\\\\\":\\\\\\"sms,mail,ding\\\\\\"}\\",\\n    \\"CurJobs\\": 1,\\n    \\"AppKey\\": \\"QI4lWMZ+xk1rNB67jFUhaw==\\",\\n    \\"AppVersion\\": \\"2\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取应用分组详情',
            'responseParamsDescription' => '报警通道如下，配置多个逗号分隔。'."\n"
                ."\n"
                .'- webhook：ding'."\n"
                ."\n"
                .'- 短信：sms'."\n"
                ."\n"
                .'- 邮件：mail'."\n"
                ."\n"
                .'- 电话：phone'."\n"
                ."\n"
                .'例如：{"sendChannel":"ding,sms,mail,phone"}',
        ],
        'DeleteAppGroup' => [
            'summary' => '删除应用分组。',
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
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的**命名空间**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的**应用管理**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'DeleteJobs',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否删除应用分组中的任务。取值如下：'."\n"
                            ."\n"
                            .'- **true**：删除。'."\n"
                            .'- **false**：不删除。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Code' => [
                                'description' => '接口状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'app is not existed, groupId=xxxx, namesapce=xxxx',
                            ],
                            'Success' => [
                                'description' => 'API调用是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"app is not existed, groupId=xxxx, namesapce=xxxx\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '删除应用分组',
        ],
        'UpdateAppGroup' => [
            'summary' => '更新应用分组。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的**应用管理**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'MaxConcurrency',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最大同时运行实例数量，默认值为1，即上次触发没有运行结束，即使到了运行时刻也不会进行下次触发。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的**命名空间**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本，1:基础版，2:专业版',
                        'description' => '应用版本，1:基础版，2:专业版',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                        'default' => '2',
                        'enum' => [
                            '1',
                            '2',
                        ],
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Code' => [
                                'description' => '接口状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息',
                                'type' => 'string',
                                'example' => 'app is not existed, groupId=xxxx, namesapce=xxxx',
                            ],
                            'Success' => [
                                'description' => 'API执行是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"app is not existed, groupId=xxxx, namesapce=xxxx\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '更新应用分组',
        ],
        'ListGroups' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间，在控制台的**命名空间**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1a72ecb1-b4cc-400a-a71b-20cdec9b****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
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
                    'name' => 'AppGroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'k8s-test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息。',
                                'type' => 'string',
                                'example' => 'message',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID。',
                                'type' => 'string',
                                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBCB58A',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：成功'."\n"
                                    ."\n"
                                    .'- **false**：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '应用列表信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AppGroups' => [
                                        'description' => '应用列表和应用详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'AppGroupId' => [
                                                    'description' => '应用分组ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'AppName' => [
                                                    'description' => '应用名称。',
                                                    'type' => 'string',
                                                    'example' => 'DocTest',
                                                ],
                                                'AppKey' => [
                                                    'description' => '应用Key。',
                                                    'type' => 'string',
                                                    'example' => 'a3G77O6NZxq/lyo1NC****==',
                                                ],
                                                'Description' => [
                                                    'description' => '应用描述。',
                                                    'type' => 'string',
                                                    'example' => 'Test',
                                                ],
                                                'GroupId' => [
                                                    'description' => '应用ID。',
                                                    'type' => 'string',
                                                    'example' => 'DocTest.Group',
                                                ],
                                                'AppVersion' => [
                                                    'title' => '应用版本，1:基础版，2:专业版',
                                                    'description' => '应用版本，1:基础版，2:专业版',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"message\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBCB58A\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AppGroups\\": [\\n      {\\n        \\"AppGroupId\\": 1,\\n        \\"AppName\\": \\"DocTest\\",\\n        \\"AppKey\\": \\"a3G77O6NZxq/lyo1NC****==\\",\\n        \\"Description\\": \\"Test\\",\\n        \\"GroupId\\": \\"DocTest.Group\\",\\n        \\"AppVersion\\": 2\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListGroupsResponse>\\n<Message>namespace can not find namespace: 1a72ecb1-b4cc-400a-a71b-20cdec9b****, namespaceSource:null</Message>\\n<RequestId>71BCC0E3-64B2-4B63-A870-AFB64EBCB58A</RequestId>\\n<Data>\\n    <AppGroups>\\n        <Description>Test</Description>\\n        <AppKey>a3G77O6NZxq/lyo1NC****==</AppKey>\\n        <GroupId>DocTest.Group</GroupId>\\n        <AppName>DocTest</AppName>\\n    </AppGroups>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</ListGroupsResponse>","errorExample":""}]',
            'title' => '获取应用分组列表',
            'summary' => '获取应用列表。',
            'description' => '在调用该接口前，需要在POM文件添加以下依赖：'."\n"
                ."\n"
                .'```xml'."\n"
                .'<dependency>'."\n"
                .'    <groupId>com.aliyun</groupId>'."\n"
                .'    <artifactId>aliyun-java-sdk-schedulerx2</artifactId>'."\n"
                .'    <version>1.0.5</version>'."\n"
                .'</dependency>'."\n"
                .'```',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## Demo'."\n"
                .'```'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import java.util.List;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.exceptions.ClientException;'."\n"
                .'import com.aliyuncs.exceptions.ServerException;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.ListGroupsRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.ListGroupsResponse;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.ListGroupsResponse.Data.AppGroup;'."\n"
                ."\n"
                .'public class TestListGroups {'."\n"
                ."\n"
                .'    public static void main(String[] args) {'."\n"
                .'        //OpenAPI的接入点，具体查看支持地域列表以及购买机器地域填写。'."\n"
                .'        String regionId = "cn-hangzhou";'."\n"
                .'        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。'."\n"
                .'        String accessKeyId = "XXXXXXXX";'."\n"
                .'        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。'."\n"
                .'        String accessKeySecret = "XXXXXXXX";'."\n"
                .'        //产品名称。'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写 '."\n"
                .'        String domain ="schedulerx.cn-hangzhou.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端。'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                .'        '."\n"
                .'        ListGroupsRequest request = new ListGroupsRequest();'."\n"
                .'        //命名空间ID。'."\n"
                .'        request.setNamespace("433d8b23-06e9-408c-aaaa-90d4d1b9****");'."\n"
                .'        ListGroupsResponse response;'."\n"
                .'        try {'."\n"
                .'            response = client.getAcsResponse(request);'."\n"
                .'            if (!response.getSuccess()) {'."\n"
                .'                System.out.println(response.getMessage());'."\n"
                .'            } else {'."\n"
                .'                List<AppGroup> appGroups = response.getData().getAppGroups();'."\n"
                .'                for (AppGroup appGroup : appGroups) {'."\n"
                .'                    System.out.println("groupId=" + appGroup.getGroupId() + ", appKey=" + appGroup.getAppKey());'."\n"
                .'                }'."\n"
                .'            }'."\n"
                .'        } catch (ServerException e) {'."\n"
                .'            // TODO Auto-generated catch block'."\n"
                .'            e.printStackTrace();'."\n"
                .'        } catch (ClientException e) {'."\n"
                .'            // TODO Auto-generated catch block'."\n"
                .'            e.printStackTrace();'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'    '."\n"
                .'}'."\n"
                ."\n"
                .'``` ',
        ],
        'GetWorkerList' => [
            'summary' => '获取接入某个应用的worker列表。',
            'methods' => [
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
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限组ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'usercenter',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108****',
                            ],
                            'Code' => [
                                'description' => '接口状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息。',
                                'type' => 'string',
                                'example' => 'Cannot find product according to your domain.',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：成功'."\n"
                                    ."\n"
                                    .'- **false**：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '指定任务信息。',
                                'type' => 'object',
                                'properties' => [
                                    'WorkerInfos' => [
                                        'description' => 'worker信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Ip' => [
                                                    'description' => 'worker的ip',
                                                    'type' => 'string',
                                                    'example' => '30.225.16.49',
                                                ],
                                                'Port' => [
                                                    'description' => 'worker的端口',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '60831',
                                                ],
                                                'WorkerAddress' => [
                                                    'description' => 'worker的地址信息，格式为${worker_id}@${worker_ip}:${worker_port}',
                                                    'type' => 'string',
                                                    'example' => '030225016049_11734_25917@30.225.16.49:60831',
                                                ],
                                                'Label' => [
                                                    'description' => 'worker的标签',
                                                    'type' => 'string',
                                                    'example' => 'gray',
                                                ],
                                                'Version' => [
                                                    'description' => 'worker的版本',
                                                    'type' => 'string',
                                                    'example' => '1.3.4',
                                                ],
                                                'Starter' => [
                                                    'description' => 'worker的启动方式',
                                                    'type' => 'string',
                                                    'example' => 'springboot',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108****\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Cannot find product according to your domain.\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"WorkerInfos\\": [\\n      {\\n        \\"Ip\\": \\"30.225.16.49\\",\\n        \\"Port\\": 60831,\\n        \\"WorkerAddress\\": \\"030225016049_11734_25917@30.225.16.49:60831\\",\\n        \\"Label\\": \\"gray\\",\\n        \\"Version\\": \\"1.3.4\\",\\n        \\"Starter\\": \\"springboot\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取接入某个应用的worker列表',
        ],
        'CreateWorkflow' => [
            'summary' => '创建工作流，默认禁用状态，更新完DAG后，需要手动或者通过API启动用工作流，只有专业版才支持。',
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
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用分组ID，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'helloworld',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test',
                    ],
                ],
                [
                    'name' => 'TimeType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '时间类型，目前支持以下几种时间类型：'."\n"
                            .'- cron：1'."\n"
                            .'- api：100',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'TimeExpression',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '时间表达式，根据选择的时间类型设置时间表达式。'."\n"
                            ."\n"
                            .'- cron：填写标准的cron表达式，支持在线验证。'."\n"
                            .'- api：无时间表达式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0 0/10 * * * ?',
                    ],
                ],
                [
                    'name' => 'Timezone',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '时区',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GMT+8',
                    ],
                ],
                [
                    'name' => 'MaxConcurrency',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '最大同时运行工作流实例数量，默认值为1，即上次触发没有运行结束，即使到了运行时刻也不会进行下次触发。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
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
                                'description' => '请求唯一ID。',
                                'type' => 'string',
                                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '创建工作流是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- true：创建工作流成功。'."\n"
                                    .'- false：创建工作流失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'timetype is invalid',
                            ],
                            'Data' => [
                                'description' => '创建工作流的返回值',
                                'type' => 'object',
                                'properties' => [
                                    'WorkflowId' => [
                                        'description' => '工作流ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '92583',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"timetype is invalid\\",\\n  \\"Data\\": {\\n    \\"WorkflowId\\": 92583\\n  }\\n}","type":"json"}]',
            'title' => '创建工作流',
        ],
        'UpdateWorkflow' => [
            'summary' => '更新工作流的基本信息，只有专业版才支持。',
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
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '特殊第三方才需要填写',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用分组ID，在控制台的应用管理页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'WorkflowId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'helloworld',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test',
                    ],
                ],
                [
                    'name' => 'TimeType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '时间类型，目前支持以下几种时间类型：'."\n"
                            ."\n"
                            .'- cron：1'."\n"
                            .'- api：100',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'TimeExpression',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '时间表达式，根据选择的时间类型设置时间表达式。'."\n"
                            ."\n"
                            .'- cron：填写标准的cron表达式，支持在线验证。'."\n"
                            .'- api：无时间表达式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0 0/10 * * * ?',
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
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => 'api执行是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'timetype is invalid',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"timetype is invalid\\"\\n}","type":"json"}]',
            'title' => '更新工作流的基本信息',
        ],
        'UpdateWorkflowDag' => [
            'summary' => '更新工作流的节点及依赖关系，专业版应用才支持。',
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
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '特殊第三方才需要填写',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用分组ID，在控制台的应用管理页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'WorkflowId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'DagJson',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工作流DAG信息，包括了Node和Edge的信息，json格式',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"nodes":[{"id":2300691},{"id":10518089},{"id":1758851}],"edges":[{"source":10518089,"target":1758851},{"source":10518089,"target":2300691}]}',
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
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => 'API执行是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'workflowId=xxxx is not existed',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"workflowId=xxxx is not existed\\"\\n}","type":"json"}]',
            'title' => '更新工作流的DAG',
        ],
        'DeleteWorkflow' => [
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'WorkflowId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '111',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的**应用管理**页面中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
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
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误消息，仅错误时返回错误信息。',
                                'type' => 'string',
                                'example' => 'Your request is denied as lack of ssl protect.',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID。',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Success' => [
                                'description' => '删除工作流是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：删除工作流成功。'."\n"
                                    .'- **false**：删除工作流失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Your request is denied as lack of ssl protect.\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '删除指定工作流',
            'summary' => '删除指定工作流。',
        ],
        'DisableWorkflow' => [
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                    'name' => 'WorkflowId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '111',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
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
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误消息，仅错误时返回错误信息。',
                                'type' => 'string',
                                'example' => 'Your request is denied as lack of ssl protect.',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Success' => [
                                'description' => '禁用工作流是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：禁用工作流成功。'."\n"
                                    .'- **false**：禁用工作流失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Your request is denied as lack of ssl protect.\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DisableWorkflowResponse>\\n<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>Your request is denied as lack of ssl protect.</Message>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DisableWorkflowResponse>","errorExample":""}]',
            'title' => '禁用指定工作流',
            'summary' => '禁用指定工作流。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'EnableWorkflow' => [
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                    'name' => 'WorkflowId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '111',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
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
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息，仅错误时返回错误信息。',
                                'type' => 'string',
                                'example' => 'Your request is denied as lack of ssl protect.',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Success' => [
                                'description' => '启用工作流是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：启用工作流成功。'."\n"
                                    .'- **false**：启用工作流失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Your request is denied as lack of ssl protect.\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<EnableWorkflowResponse>\\n<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>Your request is denied as lack of ssl protect.</Message>\\n<Code>200</Code>\\n<Success>true</Success>\\n</EnableWorkflowResponse>","errorExample":""}]',
            'title' => '启用指定工作流',
            'summary' => '启用指定工作流。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetWorkFlow' => [
            'summary' => '获取工作流信息。',
            'methods' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'public',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '命名空间uid',
                        'description' => '命名空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4a06d5ea-f576-4326-842c-fb14ea043d8d',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'title' => '命名空间来源',
                        'description' => '命名空间来源',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'source',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用分组ID',
                        'description' => '应用分组ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'hxm.test',
                    ],
                ],
                [
                    'name' => 'WorkflowId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作流ID',
                        'description' => '工作流ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1234',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '45678xxx',
                            ],
                            'Code' => [
                                'title' => '错误码',
                                'description' => '错误码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'workflow is not existed',
                            ],
                            'Success' => [
                                'title' => '会否成功',
                                'description' => '结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'title' => '工作流的数据',
                                'description' => '工作流的数据',
                                'type' => 'object',
                                'properties' => [
                                    'WorkFlowInfo' => [
                                        'title' => '工作流基本信息',
                                        'description' => '工作流基本信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'WorkflowId' => [
                                                'title' => '工作流ID',
                                                'description' => '工作流ID',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1234xxx',
                                            ],
                                            'Name' => [
                                                'title' => '工作流名称',
                                                'description' => '工作流名称',
                                                'type' => 'string',
                                                'example' => 'workflow_111',
                                            ],
                                            'Description' => [
                                                'title' => '工作流描述',
                                                'description' => '工作流描述',
                                                'type' => 'string',
                                                'example' => 'my first workflow',
                                            ],
                                            'Status' => [
                                                'title' => '工作流状态',
                                                'description' => '工作流状态',
                                                'type' => 'string',
                                                'example' => '成功',
                                            ],
                                            'TimeType' => [
                                                'title' => '工作流时间类型',
                                                'description' => '工作流时间类型',
                                                'type' => 'string',
                                                'example' => 'cron',
                                            ],
                                            'TimeExpression' => [
                                                'title' => '工作流时间表达式',
                                                'description' => '工作流时间表达式',
                                                'type' => 'string',
                                                'example' => '0 0 2 * * ?',
                                            ],
                                        ],
                                    ],
                                    'WorkFlowNodeInfo' => [
                                        'title' => '工作流节点信息',
                                        'description' => '工作流节点信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'Nodes' => [
                                                'title' => '工作流节点列表',
                                                'description' => '工作流节点列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Id' => [
                                                            'title' => '任务ID',
                                                            'description' => '任务ID',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '123456xxx',
                                                        ],
                                                        'Label' => [
                                                            'title' => '任务名称',
                                                            'description' => '任务名称',
                                                            'type' => 'string',
                                                            'example' => 'job_111',
                                                        ],
                                                        'Status' => [
                                                            'title' => '任务状态',
                                                            'description' => '任务状态',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Edges' => [
                                                'title' => '工作流边列表',
                                                'description' => '工作流边列表',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Source' => [
                                                            'title' => '起始任务ID',
                                                            'description' => '起始任务ID',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '100',
                                                        ],
                                                        'Target' => [
                                                            'title' => '目的任务ID',
                                                            'description' => '目的任务ID',
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
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"45678xxx\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"workflow is not existed\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"WorkFlowInfo\\": {\\n      \\"WorkflowId\\": 0,\\n      \\"Name\\": \\"workflow_111\\",\\n      \\"Description\\": \\"my first workflow\\",\\n      \\"Status\\": \\"成功\\",\\n      \\"TimeType\\": \\"cron\\",\\n      \\"TimeExpression\\": \\"0 0 2 * * ?\\"\\n    },\\n    \\"WorkFlowNodeInfo\\": {\\n      \\"Nodes\\": [\\n        {\\n          \\"Id\\": 0,\\n          \\"Label\\": \\"job_111\\",\\n          \\"Status\\": 1\\n        }\\n      ],\\n      \\"Edges\\": [\\n        {\\n          \\"Source\\": 100,\\n          \\"Target\\": 200\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetWorkFlowResponse>\\n    <RequestId>45678xxx</RequestId>\\n    <Code>200</Code>\\n    <Message>workflow is not existed</Message>\\n    <Success>true</Success>\\n    <Data>\\n        <WorkFlowInfo>\\n            <Name>workflow_111</Name>\\n            <Description>my first workflow</Description>\\n            <Status>成功</Status>\\n            <TimeType>cron</TimeType>\\n            <TimeExpression>0 0 2 * * ?</TimeExpression>\\n        </WorkFlowInfo>\\n        <WorkFlowNodeInfo>\\n            <Nodes>\\n                <Label>job_111</Label>\\n                <Status>1</Status>\\n            </Nodes>\\n            <Edges>\\n                <Source>100</Source>\\n                <Target>200</Target>\\n            </Edges>\\n        </WorkFlowNodeInfo>\\n    </Data>\\n</GetWorkFlowResponse>","errorExample":""}]',
            'title' => '获取工作流详情和依赖关系',
            'extraInfo' => '##  示例Demo'."\n"
                .'```'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import com.alibaba.schedulerx.common.util.JsonUtil;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.exceptions.ClientException;'."\n"
                .'import com.aliyuncs.exceptions.ServerException;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.GetWorkFlowRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.GetWorkFlowResponse;'."\n"
                ."\n"
                .'public class TestGetWorkFlow {'."\n"
                ."\n"
                .'    public static void main(String[] args) {'."\n"
                .'     // OpenAPI的接入点，具体请查看支持地域列表或根据购买地域填写'."\n"
                .'        String regionId = "public";'."\n"
                .'      //鉴权使用的AccessKey ID，由阿里云官网控制台获取'."\n"
                .'        String accessKeyId = "xxxxxxx";'."\n"
                .'        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取'."\n"
                .'        String accessKeySecret = "xxxxxxxxx";'."\n"
                .'        //产品名称'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写'."\n"
                .'        String domain ="schedulerx.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                .'        '."\n"
                .'        GetWorkFlowRequest request = new GetWorkFlowRequest();'."\n"
                .'        request.setNamespace("433d8b23-06e9-408c-aaaa-90d4d1b9a4af");'."\n"
                .'        request.setGroupId("xuren_test");'."\n"
                .'        request.setWorkflowId(29L);'."\n"
                .'        GetWorkFlowResponse response;'."\n"
                .'        try {'."\n"
                .'            response = client.getAcsResponse(request);'."\n"
                .'            if (!response.getSuccess()) {'."\n"
                .'                System.out.println(JsonUtil.toJson(response));'."\n"
                .'            } else {'."\n"
                .'                System.out.println("工作流基本信息：" + response.getData().getWorkFlowInfo());'."\n"
                .'                System.out.println("工作流节点信息：" + response.getData().getWorkFlowNodeInfo());'."\n"
                .'            }'."\n"
                .'        } catch (ServerException e) {'."\n"
                .'            // TODO Auto-generated catch block'."\n"
                .'            e.printStackTrace();'."\n"
                .'        } catch (ClientException e) {'."\n"
                .'            // TODO Auto-generated catch block'."\n"
                .'            e.printStackTrace();'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'    '."\n"
                .'}'."\n"
                .'   '."\n"
                .' ```',
        ],
        'ExecuteWorkflow' => [
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
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
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'WorkflowId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '111',
                    ],
                ],
                [
                    'name' => 'InstanceParameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流实例动态参数，不超过1000字节。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误消息，仅错误时返回错误信息。',
                                'type' => 'string',
                                'example' => 'Cannot find product according to your domain.',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID。',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '如果调用成功，会返回流程实例ID。',
                                'type' => 'object',
                                'properties' => [
                                    'WfInstanceId' => [
                                        'description' => '工作流实例ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '111111',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Cannot find product according to your domain.\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"WfInstanceId\\": 111111\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ExecuteWorkflowResponse>\\n<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>Cannot find product according to your domain.</Message>\\n<Data>\\n    <WfInstanceId>111111</WfInstanceId>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</ExecuteWorkflowResponse>","errorExample":""}]',
            'title' => '触发一次工作流',
            'summary' => '触发一次工作流立即运行。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetWorkflowInstance' => [
            'summary' => '获取指定工作流实例的详情，包含实例状态，依赖关系，每个任务实例的状态等。专业版应用才支持。',
            'methods' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组ID，在控制台的应用管理页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'WorkflowId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'WfInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流实例ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123456',
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
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => 'API执行是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'workflowId=xxx is not existed',
                            ],
                            'Data' => [
                                'description' => '工作流实例详情封装在data中',
                                'type' => 'object',
                                'properties' => [
                                    'WfInstanceInfo' => [
                                        'description' => '工作流实例详情，包含了工作流的状态，开始结束时间，各个任务实例的状态及依赖关系',
                                        'type' => 'object',
                                        'properties' => [
                                            'Status' => [
                                                'description' => '工作流实例状态，取值如下：'."\n"
                                                    ."\n"
                                                    .'- 1: 等待中'."\n"
                                                    .'- 2: 准备中'."\n"
                                                    .'- 3：运行中'."\n"
                                                    .'- 4：成功'."\n"
                                                    .'- 5：失败',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '5',
                                            ],
                                            'StartTime' => [
                                                'description' => '开始时间',
                                                'type' => 'string',
                                                'example' => '2023-01-03 18:00:01',
                                            ],
                                            'EndTime' => [
                                                'description' => '结束时间',
                                                'type' => 'string',
                                                'example' => '2023-01-03 18:00:21',
                                            ],
                                            'ScheduleTime' => [
                                                'description' => '计划调度时间',
                                                'type' => 'string',
                                                'example' => '2023-01-03 18:00:00',
                                            ],
                                            'DataTime' => [
                                                'description' => '数据时间',
                                                'type' => 'string',
                                                'example' => '2023-01-03 18:00:00',
                                            ],
                                        ],
                                    ],
                                    'WfInstanceDag' => [
                                        'description' => '工作流实例的DAG信息，包含了节点和边',
                                        'type' => 'object',
                                        'properties' => [
                                            'Nodes' => [
                                                'description' => '任务实例节点的数组',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'JobInstanceId' => [
                                                            'description' => '任务实例ID',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '24058796',
                                                        ],
                                                        'JobId' => [
                                                            'description' => '任务ID',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1472',
                                                        ],
                                                        'StartTime' => [
                                                            'description' => '任务开始时间',
                                                            'type' => 'string',
                                                            'example' => '2023-01-03 18:00:03',
                                                        ],
                                                        'EndTime' => [
                                                            'description' => '任务结束时间',
                                                            'type' => 'string',
                                                            'example' => '2023-01-03 18:00:21',
                                                        ],
                                                        'ScheduleTime' => [
                                                            'description' => '任务调度时间',
                                                            'type' => 'string',
                                                            'example' => '2023-01-03 18:00:03',
                                                        ],
                                                        'DataTime' => [
                                                            'description' => '任务数据时间',
                                                            'type' => 'string',
                                                            'example' => '2023-01-03 18:00:00',
                                                        ],
                                                        'WorkAddr' => [
                                                            'description' => '任务实例的运行机器',
                                                            'type' => 'string',
                                                            'example' => '10.163.0.101:34027',
                                                        ],
                                                        'Result' => [
                                                            'description' => '任务运行结果',
                                                            'type' => 'string',
                                                            'example' => 'code=200',
                                                        ],
                                                        'Attempt' => [
                                                            'description' => '任务失败重试次数',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'Status' => [
                                                            'description' => '实例状态。包含以下几种状态：'."\n"
                                                                .'1：等待'."\n"
                                                                .'3：运行中'."\n"
                                                                .'4：成功'."\n"
                                                                .'5：失败'."\n"
                                                                .'9：拒绝'."\n"
                                                                .'对应枚举类： com.alibaba.schedulerx.common.domain.InstanceStatus',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '4',
                                                        ],
                                                        'JobName' => [
                                                            'description' => '任务名称',
                                                            'type' => 'string',
                                                            'example' => 'TestJob',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Edges' => [
                                                'description' => '任务实例依赖关系的数组',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '通过source->target描述依赖关系，source=0表示根节点',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Source' => [
                                                            'description' => '依赖关系的上游，0表示根节点',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '24058798',
                                                        ],
                                                        'Target' => [
                                                            'description' => '依赖关系的下游',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '24058796',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"workflowId=xxx is not existed\\",\\n  \\"Data\\": {\\n    \\"WfInstanceInfo\\": {\\n      \\"Status\\": 5,\\n      \\"StartTime\\": \\"2023-01-03 18:00:01\\",\\n      \\"EndTime\\": \\"2023-01-03 18:00:21\\",\\n      \\"ScheduleTime\\": \\"2023-01-03 18:00:00\\",\\n      \\"DataTime\\": \\"2023-01-03 18:00:00\\"\\n    },\\n    \\"WfInstanceDag\\": {\\n      \\"Nodes\\": [\\n        {\\n          \\"JobInstanceId\\": 24058796,\\n          \\"JobId\\": 1472,\\n          \\"StartTime\\": \\"2023-01-03 18:00:03\\",\\n          \\"EndTime\\": \\"2023-01-03 18:00:21\\",\\n          \\"ScheduleTime\\": \\"2023-01-03 18:00:03\\",\\n          \\"DataTime\\": \\"2023-01-03 18:00:00\\",\\n          \\"WorkAddr\\": \\"10.163.0.101:34027\\",\\n          \\"Result\\": \\"code=200\\",\\n          \\"Attempt\\": 0,\\n          \\"Status\\": 4,\\n          \\"JobName\\": \\"TestJob\\"\\n        }\\n      ],\\n      \\"Edges\\": [\\n        {\\n          \\"Source\\": 24058798,\\n          \\"Target\\": 24058796\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取工作流实例详情及DAG',
        ],
        'ListWorkflowInstance' => [
            'summary' => '获取工作流的历史执行记录，只有专业版才支持。',
            'methods' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组ID，在控制台的应用管理页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'WorkflowId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123',
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
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => 'API执行是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'workflowId=xxx is not existed',
                            ],
                            'Data' => [
                                'description' => '工作流实例列表封装在data里',
                                'type' => 'object',
                                'properties' => [
                                    'WfInstanceInfos' => [
                                        'description' => '工作流实例的列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '工作流实例数据结构',
                                            'type' => 'object',
                                            'properties' => [
                                                'WfInstanceId' => [
                                                    'description' => '工作流实例ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '123456',
                                                ],
                                                'WorkflowId' => [
                                                    'description' => '工作流ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '123',
                                                ],
                                                'Status' => [
                                                    'description' => '工作流实例状态，取值如下：'."\n"
                                                        ."\n"
                                                        .'- 1: 等待中'."\n"
                                                        .'- 2: 准备中'."\n"
                                                        .'- 3：运行中'."\n"
                                                        .'- 4：成功'."\n"
                                                        .'- 5：失败',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '5',
                                                ],
                                                'StartTime' => [
                                                    'description' => '开始时间',
                                                    'type' => 'string',
                                                    'example' => '2023-01-03 18:00:01',
                                                ],
                                                'EndTime' => [
                                                    'description' => '结束时间',
                                                    'type' => 'string',
                                                    'example' => '2023-01-03 18:00:21',
                                                ],
                                                'ScheduleTime' => [
                                                    'description' => '计划调度时间',
                                                    'type' => 'string',
                                                    'example' => '2023-01-03 18:00:00',
                                                ],
                                                'DataTime' => [
                                                    'description' => '数据时间',
                                                    'type' => 'string',
                                                    'example' => '2023-01-03 18:00:00',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"workflowId=xxx is not existed\\",\\n  \\"Data\\": {\\n    \\"WfInstanceInfos\\": [\\n      {\\n        \\"WfInstanceId\\": 123456,\\n        \\"WorkflowId\\": 123,\\n        \\"Status\\": 5,\\n        \\"StartTime\\": \\"2023-01-03 18:00:01\\",\\n        \\"EndTime\\": \\"2023-01-03 18:00:21\\",\\n        \\"ScheduleTime\\": \\"2023-01-03 18:00:00\\",\\n        \\"DataTime\\": \\"2023-01-03 18:00:00\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取工作流实例列表',
        ],
        'SetWfInstanceSuccess' => [
            'summary' => '强制设置工作流实例状态为成功状态，只有专业版才支持。',
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
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组ID，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'WorkflowId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'WfInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流实例ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123456789',
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
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '请求是否成功，取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '错误消息，仅错误时返回错误信息。',
                                'type' => 'string',
                                'example' => 'wofkflowId is not existed',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"wofkflowId is not existed\\"\\n}","type":"json"}]',
            'title' => '标记工作流实例成功',
        ],
        'CreateJob' => [
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
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                        'default' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用ID，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'JobType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务类型，目前支持以下几种任务类型：'."\n"
                            ."\n"
                            .'- java'."\n"
                            .'- python'."\n"
                            .'- shell'."\n"
                            .'- go'."\n"
                            .'- http'."\n"
                            .'- xxljob'."\n"
                            .'- dataworks'."\n"
                            .'- k8s'."\n"
                            .'- springschedule',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'python' => 'python',
                            'xxljob' => 'xxljob',
                            'java' => 'java',
                            'shell' => 'shell',
                            'go' => 'go',
                            'http' => 'http',
                            'dataworks' => 'dataworks',
                        ],
                        'example' => 'java',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'helloworld',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test',
                    ],
                ],
                [
                    'name' => 'ExecuteMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务执行模式，目前支持以下几种任务执行模式：'."\n"
                            ."\n"
                            .'- **单机运行**：standalone'."\n"
                            .'- **广播运行**：broadcast'."\n"
                            .'- **可视化MapReduce**：parallel'."\n"
                            .'- **MapReduce**：batch'."\n"
                            .'- **分片运行**：sharding',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'broadcast' => '广播运行',
                            'parallel' => '并行计算',
                            'grid' => '内存网格',
                            'batch' => '网格计算',
                            'standalone' => '单机运行',
                            'sharding' => '分片运行',
                        ],
                        'example' => 'standalone',
                    ],
                ],
                [
                    'name' => 'ClassName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务接口类完整路径。'."\n"
                            ."\n"
                            .'当您选择Java任务类型时，才有该字段且必须填写完整路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.alibaba.schedulerx.test.helloworld',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务类型选择为Python/Shell/Go/K8s时，必填的脚本代码内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'echo \'hello\'',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户自定义参数，运行时可以获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'MaxConcurrency',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '最大同时运行实例数量，默认值为1，即上次触发没有运行结束，即使到了运行时刻也不会进行下次触发。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'MaxAttempt',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '错误最大重试次数，根据业务需求填写，默认值为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'AttemptInterval',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '错误重试间隔，单位s，默认值为30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '并行网格任务高级配置，单次拉取子任务数，默认值为100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                        'default' => '100',
                    ],
                ],
                [
                    'name' => 'ConsumerSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '并行网格任务高级配置，单机单次触发执行线程数，默认值为5。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                        'default' => '5',
                    ],
                ],
                [
                    'name' => 'QueueSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '并行网格任务高级配置，子任务队列缓存上限，默认值为10000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10000',
                        'default' => '10000',
                    ],
                ],
                [
                    'name' => 'DispatcherSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '并行网格任务高级配置，子任务分发线程数，默认值为5。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                        'default' => '5',
                    ],
                ],
                [
                    'name' => 'TimeType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '时间类型，目前支持以下几种时间类型：'."\n"
                            ."\n"
                            .'- **cron**：1'."\n"
                            .'- **fixed_rate**：3'."\n"
                            .'- **second_delay**：4'."\n"
                            .'- **one_time** ：5 '."\n"
                            .'- **api**：100',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            1 => '1',
                            3 => '3',
                            '4',
                            '5',
                            100 => '100',
                        ],
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'TimeExpression',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '时间表达式，根据选择的时间类型设置时间表达式。'."\n"
                            ."\n"
                            .'- **cron**：填写标准的cron表达式，支持在线验证。'."\n"
                            .'- **api**：无时间表达式。'."\n"
                            .'- **fixed_rate**：填写具体固定频率值，单位s。如30表示每隔30s触发一次。'."\n"
                            .'- **second_delay**：填写固定延迟多少秒执行一次（1s~60s可选）。'."\n"
                            .'- **one_time**: 填写指定时间（yyyy-MM-dd HH:mm:ss）或者时间戳（毫秒），比如"2022-10-10 10:10:00"',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0 0/10 * * * ?',
                    ],
                ],
                [
                    'name' => 'Calendar',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'cron类型可以选择填写自定义日历。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '暂不支持，不用填写',
                    ],
                ],
                [
                    'name' => 'DataOffset',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'cron类型可以选择时间偏移，单位s。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2400',
                    ],
                ],
                [
                    'name' => 'Timezone',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '时区',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GMT+8',
                    ],
                ],
                [
                    'name' => 'TimeoutEnable',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '超时报警开关。取值如下：'."\n"
                            ."\n"
                            .'- **true**：开启超时报警开关。'."\n"
                            .'- **false**：关闭超时报警开关。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'false' => 'false',
                            'true' => 'true',
                        ],
                        'example' => 'false',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'Timeout',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '超时阈值，单位s，默认值7200。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '7200',
                        'default' => '7200',
                    ],
                ],
                [
                    'name' => 'TimeoutKillEnable',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '超时终止开关。取值如下：'."\n"
                            ."\n"
                            .'- **true**：开启超时终止开关。'."\n"
                            .'- **false**：关闭超时终止开关。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'false' => 'false',
                            'true' => 'true',
                        ],
                        'example' => 'false',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'FailEnable',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '失败报警开关。取值如下：'."\n"
                            ."\n"
                            .'- **true**：开启失败报警开关。'."\n"
                            .'- **false**：关闭失败报警开关。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'false' => 'false',
                            'true' => 'true',
                        ],
                        'example' => 'false',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'FailTimes',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '连续失败报警次数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'MissWorkerEnable',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启无可用机器报警。'."\n"
                            .'- **true**：开启无可用机器报警开关。'."\n"
                            .'- **false**：关闭无可用机器报警开关。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'SuccessNoticeEnable',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '成功通知开关',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'SendChannel',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '报警发送形式，目前只支持短信发送报警，默认值sms。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sms',
                        'default' => 'default',
                    ],
                ],
                [
                    'name' => 'TaskMaxAttempt',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '并行网格任务高级配置，子任务失败重试次数 ，默认值为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'TaskAttemptInterval',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '并行网格任务高级配置，子任务失败重试间隔，默认值为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'ContactInfo',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '任务联系人信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '任务联系人信息。',
                            'type' => 'object',
                            'properties' => [
                                'UserPhone' => [
                                    'description' => '报警接收手机号。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1381111****',
                                ],
                                'UserName' => [
                                    'description' => '报警联系人姓名。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '张三',
                                ],
                                'UserMail' => [
                                    'description' => '报警联系人邮箱。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test***@***.com',
                                ],
                                'Ding' => [
                                    'description' => '报警联系人钉钉群机器人webhook地址，参考文档：[钉钉开发文档](https://open.dingtalk.com/document/org/application-types)。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://oapi.dingtalk.com/robot/send?access_token=**********',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '0：禁用，1：启用，默认启用。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'XAttrs',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '如果是k8s任务类型，需要配置该参数'."\n"
                            .'Job任务：{"resource":"job"}'."\n"
                            .'Shell任务：{"image":"busybox","resource":"shell"}'."\n",
                        'description' => '如果是k8s任务类型，需要配置该参数'."\n"
                            .'Job任务：{"resource":"job"}'."\n"
                            .'Shell任务：{"image":"busybox","resource":"shell"}'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"resource":"job"}',
                        'enum' => [],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息。',
                                'type' => 'string',
                                'example' => 'message',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID。',
                                'type' => 'string',
                                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
                            ],
                            'Success' => [
                                'description' => '创建任务是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：创建任务成功。'."\n"
                                    .'- **false**：创建任务失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '任务详细信息。',
                                'type' => 'object',
                                'properties' => [
                                    'JobId' => [
                                        'description' => '任务ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '92583',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"message\\",\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobId\\": 92583\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateJobResponse>\\n    <Code>200</Code>\\n    <Message>message</Message>\\n    <RequestId>39090022-1F3B-4797-8518-6B61095F1AF0</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <JobId>92583</JobId>\\n    </Data>\\n</CreateJobResponse>","errorExample":""}]',
            'title' => '创建任务并返回任务ID',
            'summary' => '创建任务并返回任务ID。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '##  创建Java任务'."\n"
                ."\n"
                .'```json'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import java.util.ArrayList;'."\n"
                .'import java.util.List;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.CreateJobRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.CreateJobRequest.ContactInfo;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.CreateJobResponse;'."\n"
                ."\n"
                .'public class CreateJavaJob {'."\n"
                ."\n"
                .'    public static void main(String[] args) throws Exception {'."\n"
                .'     //  OpenAPI的接入点，可查看产品支持的地域列表或根据购买产品的地域填写。'."\n"
                .'        String regionId = "cn-shanghai";'."\n"
                .'        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。'."\n"
                .'        String accessKeyId = "<yourAccessKeyId>";'."\n"
                .'        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取'."\n"
                .'        String accessKeySecret = "<yourAccessKeySecret>";'."\n"
                .'        //产品名称。'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写。'."\n"
                .'        String domain ="schedulerx.cn-shanghai.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端。'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                .'        '."\n"
                .'        CreateJobRequest request = new CreateJobRequest();'."\n"
                .'        request.setJobType("java");'."\n"
                .'        request.setExecuteMode("standalone");'."\n"
                .'        request.setDescription("test");'."\n"
                .'        request.setName("helloworld");'."\n"
                .'        request.setClassName("com.alibaba.schedulerx.test.helloworld");'."\n"
                .'        request.setTimeType(1);'."\n"
                .'        request.setTimeExpression("0 0/10 * * * ?");'."\n"
                .'        request.setNamespace("xxxxx");'."\n"
                .'        request.setGroupId("xxxxxxx");'."\n"
                .'        // monitor'."\n"
                .'        request.setTimeoutEnable(true);'."\n"
                .'        request.setTimeoutKillEnable(true);'."\n"
                .'        request.setFailEnable(true);'."\n"
                .'        request.setTimeout(12300L);'."\n"
                .'        List<ContactInfo> contactInfosList = new ArrayList<>();'."\n"
                .'        ContactInfo contactInfo1 = new ContactInfo();'."\n"
                .'        contactInfo1.setUserName("userA");'."\n"
                .'        contactInfo1.setUserPhone("1381111****");'."\n"
                .'        ContactInfo contactInfo2 = new ContactInfo();'."\n"
                .'        contactInfo2.setUserName("userB");'."\n"
                .'        contactInfo2.setUserPhone("1382222****");'."\n"
                .'        contactInfosList.add(contactInfo1);'."\n"
                .'        contactInfosList.add(contactInfo2);'."\n"
                .'        request.setContactInfos(contactInfosList);'."\n"
                .'        // attrs'."\n"
                .'        //request.setQueueSize(123);'."\n"
                .'        request.setTaskMaxAttempt(1);'."\n"
                .'        request.setTaskAttemptInterval(100);'."\n"
                .'        CreateJobResponse response = client.getAcsResponse(request);'."\n"
                .'        if (response.getSuccess()) {'."\n"
                .'            System.out.println("jobId=" + response.getData().getJobId());'."\n"
                .'        } else {'."\n"
                .'            System.out.println(response.getMessage());'."\n"
                .'        }'."\n"
                .'    }'."\n"
                ."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'## 创建HTTP任务'."\n"
                ."\n"
                .'```json'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import com.alibaba.schedulerx.common.domain.HttpAttribute;'."\n"
                .'import com.alibaba.schedulerx.common.util.JsonUtil;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.CreateJobRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.CreateJobResponse;'."\n"
                ."\n"
                .'public class CreateHttpJob {'."\n"
                ."\n"
                .'    public static void main(String[] args) throws Exception {'."\n"
                .'     // OpenAPI的接入点，具体查看支持地域列表或根据购买地域填写。'."\n"
                .'        String regionId = "cn-shanghai";'."\n"
                .'        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。'."\n"
                .'        String accessKeyId = "<yourAccessKeyId>";'."\n"
                .'        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。'."\n"
                .'        String accessKeySecret = "<yourAccessKeySecret>";'."\n"
                .'        //产品名称。'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写。'."\n"
                .'        String domain ="schedulerx.cn-shanghai.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端。'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                .'        '."\n"
                .'        CreateJobRequest request = new CreateJobRequest();'."\n"
                .'        request.setNamespace("xxxxxxxx");'."\n"
                .'        request.setGroupId("xxxxxx");'."\n"
                .'        request.setJobType("http");'."\n"
                .'        request.setName("testHttpJob");'."\n"
                .'        request.setDescription("testHttpJob");'."\n"
                .'        request.setTimeType(1);'."\n"
                .'        request.setTimeExpression("20 0/5 * * * ?");'."\n"
                .'        request.setExecuteMode("standalone");'."\n"
                .'        HttpAttribute httpAttribute = new HttpAttribute();'."\n"
                .'        httpAttribute.setUrl("http://192.168.0.0:8080/test");'."\n"
                .'        httpAttribute.setMethod("GET");'."\n"
                .'        httpAttribute.setTimeout(10); //单位秒'."\n"
                .'        httpAttribute.setRespKey("code");'."\n"
                .'        httpAttribute.setRespValue("200");'."\n"
                .'        request.setContent(JsonUtil.toJson(httpAttribute));'."\n"
                .'        //POST参数，格式key1=value1&key2=value2。'."\n"
                .'        request.setParameters("key1=value1&key2=value2");   '."\n"
                .'        '."\n"
                .'        //发送请求。'."\n"
                .'        CreateJobResponse response = client.getAcsResponse(request);'."\n"
                .'        if (!response.getSuccess()) {'."\n"
                .'            System.out.println(response.getMessage());'."\n"
                .'            System.out.println("createApp: "+response.getRequestId());'."\n"
                .'        } else {'."\n"
                .'            System.out.println(JsonUtil.toJson(response));'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'    '."\n"
                .'}'."\n"
                .'```'."\n"
                .'##  创建一次性任务'."\n"
                ."\n"
                .'```json'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import java.util.ArrayList;'."\n"
                .'import java.util.List;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.CreateJobRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.CreateJobRequest.ContactInfo;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.CreateJobResponse;'."\n"
                ."\n"
                .'public class CreateJavaJob {'."\n"
                ."\n"
                .'    public static void main(String[] args) throws Exception {'."\n"
                .'     // OpenAPI的接入点，可查看产品支持的地域列表或根据购买产品的地域填写。'."\n"
                .'        String regionId = "cn-shanghai";'."\n"
                .'        //鉴权使用的AccessKey ID，由阿里云官网控制台获取'."\n"
                .'        String accessKeyId = "xxxxxx";'."\n"
                .'        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取'."\n"
                .'        String accessKeySecret = "xxxxxxxx";'."\n"
                .'        //产品名称'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写'."\n"
                .'        String domain ="schedulerx.cn-shanghai.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                .'        '."\n"
                .'        CreateJobRequest request = new CreateJobRequest();'."\n"
                .'        request.setJobType("java");'."\n"
                .'        request.setExecuteMode("standalone");'."\n"
                .'        request.setDescription("test");'."\n"
                .'        request.setName("helloworld");'."\n"
                .'        request.setClassName("com.alibaba.schedulerx.test.helloworld");'."\n"
                .'        request.setTimeType(5);'."\n"
                .'        request.setTimeExpression("2021-12-30 12:12:12");'."\n"
                .'        request.setNamespace("xxxxxx");'."\n"
                .'        request.setGroupId("xxxxxxx");'."\n"
                .'        // 报警监控'."\n"
                .'        request.setTimeoutEnable(true);'."\n"
                .'        request.setTimeoutKillEnable(true);'."\n"
                .'        request.setFailEnable(true);'."\n"
                .'        request.setTimeout(12300L);'."\n"
                .'        // 高级配置'."\n"
                .'        request.setMaxAttempt(3);'."\n"
                .'        request.setAttemptInterval(30);'."\n"
                .'        CreateJobResponse response = client.getAcsResponse(request);'."\n"
                .'        if (response.getSuccess()) {'."\n"
                .'            System.out.println("jobId=" + response.getData().getJobId());'."\n"
                .'        } else {'."\n"
                .'            System.out.println(response.getMessage());'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'    '."\n"
                .'}'."\n"
                .'```',
        ],
        'DeleteJob' => [
            'methods' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID，在控制台的**任务管理**页面中获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '92583',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的**命名空间**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的**应用管理**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
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
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '接口状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息。',
                                'type' => 'string',
                                'example' => 'message',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID。',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n"
                                    .'- **true**：删除任务成功。'."\n"
                                    ."\n"
                                    .'- **false**：删除任务失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"message\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteJobResponse>\\n<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>jobid: 92583 not match groupId: testSchedulerx.defaultGroup</Message>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DeleteJobResponse>","errorExample":""}]',
            'title' => '删除指定任务',
            'summary' => '删除指定任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 示例Demo'."\n"
                ."\n"
                .'```json'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.exceptions.ClientException;'."\n"
                .'import com.aliyuncs.exceptions.ServerException;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.DeleteJobRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.DeleteJobResponse;'."\n"
                ."\n"
                .'public class DeleteJob {'."\n"
                ."\n"
                .'    public static void main(String[] args) throws Exception {'."\n"
                .'        // OpenAPI的接入点，具体查看上表支持地域列表以及购买机器地域填写。'."\n"
                .'        String regionId = "cn-shanghai";'."\n"
                .'        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。'."\n"
                .'        String accessKeyId = "<yourAccessKeyId>";'."\n"
                .'        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。'."\n"
                .'        String accessKeySecret = "<yourAccessKeySecret>";'."\n"
                .'        //产品名称。'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写。'."\n"
                .'        String domain ="schedulerx.cn-shanghai.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端。'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                ."\n"
                .'        DeleteJobRequest request = new DeleteJobRequest();'."\n"
                .'        request.setNamespace("xxxxxx");'."\n"
                .'        request.setGroupId("xxxxxx");'."\n"
                .'        request.setJobId((long) 2030221);'."\n"
                ."\n"
                .'        DeleteJobResponse response = client.getAcsResponse(request);'."\n"
                .'        if (response.getSuccess()) {'."\n"
                .'            System.out.println("Success: "+response.getSuccess());'."\n"
                .'        } else {'."\n"
                .'            System.out.println("Message: "+response.getMessage());'."\n"
                .'        }'."\n"
                ."\n"
                .'    }'."\n"
                ."\n"
                .'}'."\n"
                .'```',
        ],
        'BatchDeleteJobs' => [
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务所属命名空间ID，在控制台**命名空间**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的**应用管理**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务所属地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'JobIdList',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '任务ID列表，多个任务ID以半角逗号（,）分隔。',
                        'type' => 'array',
                        'items' => [
                            'description' => '任务ID。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '99341',
                        ],
                        'required' => true,
                        'example' => '99341',
                        'maxItems' => 3000,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息。',
                                'type' => 'string',
                                'example' => 'message',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7',
                            ],
                            'Success' => [
                                'description' => '批量删除任务是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：成功'."\n"
                                    ."\n"
                                    .'- **false**：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"message\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchDeleteJobsResponse>\\n<Message>delete failed jobs=[675946,676129]</Message>\\n<RequestId>71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</BatchDeleteJobsResponse>","errorExample":""}]',
            'title' => '批量删除任务',
            'summary' => '批量删除任务。',
            'description' => '调用该接口前，需要在POM文件添加以下依赖：'."\n"
                ."\n"
                .'```xml'."\n"
                .'<dependency>'."\n"
                .'    <groupId>com.aliyun</groupId>'."\n"
                .'    <artifactId>aliyun-java-sdk-schedulerx2</artifactId>'."\n"
                .'    <version>1.0.4</version>'."\n"
                .'</dependency>'."\n"
                .'```',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '##   Demo'."\n"
                ."\n"
                .'```java'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import com.google.common.collect.Lists;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.BatchDeleteJobsRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.BatchDeleteJobsResponse;'."\n"
                ."\n"
                .'public class TestBatchDeleteJobs {'."\n"
                ."\n"
                .'    public static void main(String[] args) throws Exception {'."\n"
                .'        // OpenAPI的接入点，具体查看上表支持地域列表以及购买机器地域填写.'."\n"
                .'        String regionId = "cn-hangzhou";'."\n"
                .'        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。'."\n"
                .'        String accessKeyId = "xxxxxx";'."\n"
                .'        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。'."\n"
                .'        String accessKeySecret = "xxxxxxxx";'."\n"
                .'        //产品名称。'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写。'."\n"
                .'        String domain ="schedulerx.cn-hangzhou.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端。'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                .'        '."\n"
                .'        BatchDeleteJobsRequest request = new BatchDeleteJobsRequest();'."\n"
                .'        request.setNamespace("xxxxxx");'."\n"
                .'        request.setGroupId("xxxxxx");'."\n"
                .'        request.setJobIdLists(Lists.newArrayList(3982L,3984L));'."\n"
                .'        BatchDeleteJobsResponse response = client.getAcsResponse(request);'."\n"
                .'        if (!response.getSuccess()) {'."\n"
                .'            System.out.println(response.getMessage());'."\n"
                .'            System.out.println("BatchDeleteJob: "+response.getRequestId());'."\n"
                .'        } else {'."\n"
                .'            System.out.println(response.getMessage());'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'    '."\n"
                .'}'."\n"
                .'```',
        ],
        'UpdateJob' => [
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
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                        'default' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用ID，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务ID，在控制台的任务管理页面中获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '92583',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'helloword',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'ExecuteMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务执行模式，目前支持以下几种任务执行模式：'."\n"
                            ."\n"
                            .'- **单机运行**：standalone'."\n"
                            .'- **广播运行**：broadcatst'."\n"
                            .'- **可视化MapReduce**：parallel'."\n"
                            .'- **MapReduce**：batch'."\n"
                            .'- **分片运行**：shard',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'standalone',
                    ],
                ],
                [
                    'name' => 'ClassName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务接口类完整路径。'."\n"
                            ."\n"
                            .'是Java任务类型时，才有该字段且必须填写完整路径。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.alibaba.test.helloworld',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务类型为Python/Shell/Go/K8s的必填脚本内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'echo \'hello\'',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户自定义参数，运行时可以获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'MaxConcurrency',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '最大同时运行实例数量，默认值为1，即上次触发没有运行结束，不会进行下次触发即使到了运行时刻。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'MaxAttempt',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '错误最大重试次数，根据业务需求填写。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'AttemptInterval',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '错误重试间隔时间，单位s，默认值为30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                        'default' => '30',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '并行网格任务高级配置，单次拉取子任务数，默认值为100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                        'default' => '100',
                    ],
                ],
                [
                    'name' => 'TaskDispatchMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '并行网格任务高级配置，推模型或者拉模型',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'pull' => 'pull',
                            'push' => 'push',
                        ],
                        'example' => 'push',
                    ],
                ],
                [
                    'name' => 'ConsumerSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '并行网格任务高级配置，单机单次触发执行线程数，默认值为5。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                        'default' => '5',
                    ],
                ],
                [
                    'name' => 'QueueSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '并行网格任务高级配置，子任务队列缓存上限，默认值为10000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10000',
                        'default' => '10000',
                    ],
                ],
                [
                    'name' => 'DispatcherSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '并行网格任务高级配置，子任务分发线程数，默认值为5。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                        'default' => '5',
                    ],
                ],
                [
                    'name' => 'TaskMaxAttempt',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '并行网格任务高级配置，子任务失败重试次数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10',
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'TaskAttemptInterval',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '并行网格任务高级配置，子任务失败重试间隔。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'example' => '0',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'TimeType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '时间配置类型，目前支持以下几种配置类型：'."\n"
                            ."\n"
                            .'- **cron**：1'."\n"
                            .'- **fix_rate**：3'."\n"
                            .'- **second_delay**：4'."\n"
                            .'- **one_time** ：5'."\n"
                            .'- **api**：100',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'TimeExpression',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '时间表达式，根据选择的时间类型设置时间表达式。'."\n"
                            ."\n"
                            .'- **cron**：填写标准的cron表达式，支持在线验证。'."\n"
                            .'- **api**：无时间表达式。'."\n"
                            .'- **fixed_rate**：填写具体固定频率值，单位s。如30表示每隔30s触发一次。'."\n"
                            .'- **second_delay**：填写固定延迟多少秒执行一次（1s~60s可选）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'Calendar',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'cron类型可以选择填写自定义日历。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '工作日',
                    ],
                ],
                [
                    'name' => 'DataOffset',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'cron类型可以选择时间偏移，单位s。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2400',
                    ],
                ],
                [
                    'name' => 'Timezone',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '时区',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GMT+8',
                    ],
                ],
                [
                    'name' => 'TimeoutEnable',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '超时报警开关。取值如下：'."\n"
                            ."\n"
                            .'- **true**：开启超时报警开关。'."\n"
                            .'- **false**：关闭超时报警开关。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'Timeout',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '超时阈值，单位s。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '7200',
                        'default' => '7200',
                    ],
                ],
                [
                    'name' => 'TimeoutKillEnable',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '超时终止本次触发开关。取值如下：'."\n"
                            ."\n"
                            .'- **true**：开启超时终止开关。'."\n"
                            .'- **false**：关闭超时终止开关。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'FailEnable',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '失败报警开关。取值如下：'."\n"
                            ."\n"
                            .'- **true**：开启失败报警开关。'."\n"
                            .'- **false**：关闭失败报警开关。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'FailTimes',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '连续失败报警次数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'MissWorkerEnable',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启无可用机器告警。'."\n"
                            .'- **true**：开启无可用机器告警开关。'."\n"
                            .'- **false**：关闭无可用机器告警开关。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'SuccessNoticeEnable',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '成功通知开关',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
                [
                    'name' => 'SendChannel',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '报警发送形式，目前只支持sms。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'sms',
                    ],
                ],
                [
                    'name' => 'ContactInfo',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '任务联系人信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'UserPhone' => [
                                    'description' => '用户手机号。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1381111****',
                                ],
                                'UserName' => [
                                    'description' => '用户名。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'userA',
                                ],
                                'UserMail' => [
                                    'description' => '用户邮箱。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test***@***.com',
                                ],
                                'Ding' => [
                                    'description' => '报警联系人钉钉群机器人webhook地址，参考文档：[钉钉开发文档](https://open.dingtalk.com/document/org/application-types)。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://oapi.dingtalk.com/robot/send?access_token=**********',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'XAttrs',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '如果是k8s任务类型，需要配置该参数'."\n"
                            .'Job任务：{"resource":"job"}'."\n"
                            .'Shell任务：{"image":"busybox","resource":"shell"}'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => ' {"resource":"shell","fileFormat":"unix","templateType":"customTemplate"}',
                    ],
                ],
                [
                    'name' => 'Template',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'k8s任务类型自定义任务模版',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'apiVersion: v1'."\n"
                            .'kind: Pod'."\n"
                            .'metadata:'."\n"
                            .'  name: schedulerx-node-{JOB_ID}'."\n"
                            .'  namespace: {NAMESPACE}'."\n"
                            .'spec:'."\n"
                            .'  containers:'."\n"
                            .'  - name: node-job'."\n"
                            .'    image: node:16'."\n"
                            .'    imagePullPolicy: IfNotPresent'."\n"
                            .'    volumeMounts:'."\n"
                            .'    - name: script-node'."\n"
                            .'      mountPath: script/node'."\n"
                            .'    command: ["node", "script/node/node-{JOB_ID}.js"]'."\n"
                            .'  volumes:'."\n"
                            .'  - name: script-node'."\n"
                            .'    configMap:'."\n"
                            .'      name: schedulerx-configmap'."\n"
                            .'      items:'."\n"
                            .'      - key: schedulerx-node-{JOB_ID}'."\n"
                            .'        path: node-{JOB_ID}.js'."\n"
                            .'  restartPolicy: Never',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息，仅出错时返回错误信息。',
                                'type' => 'string',
                                'example' => 'job type is java className can not be blank',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID。',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Success' => [
                                'description' => '是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"job type is java className can not be blank\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateJobResponse>\\n    <Code>200</Code>\\n    <Message>job type is java className can not be blank</Message>\\n    <RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n    <Success>true</Success>\\n</UpdateJobResponse>","errorExample":""}]',
            'title' => '更新任务配置信息',
            'summary' => '更新任务配置信息。默认先调用获取任务找到对应字段进行修改。',
            'requestParamsDescription' => '> 在调用UpdateJob更新调度任务时，会删除之前对应参数的配置，而非保留。所以，请先调用[GetJobInfo](~~176507~~)，获取目标任务此前的配置，再根据实际情况进行配置。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DisableJob' => [
            'methods' => [
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
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID，在控制台的任务管理页面中获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '92583',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
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
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误消息，仅出错时返回错误信息。',
                                'type' => 'string',
                                'example' => 'jobid: 92583 not match groupId: testSchedulerx.defaultGroup',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => 'C8E5FB4A-6D8D-424D-9AAA-4FE06BB74FF9',
                            ],
                            'Success' => [
                                'description' => '禁用任务是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：禁用任务成功。'."\n"
                                    .'- **false**：禁用任务失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"jobid: 92583 not match groupId: testSchedulerx.defaultGroup\\",\\n  \\"RequestId\\": \\"C8E5FB4A-6D8D-424D-9AAA-4FE06BB74FF9\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DisableJobResponse>\\n<RequestId>C8E5FB4A-6D8D-424D-9AAA-4FE06BB74FF9</RequestId>\\n<Message>jobid: 92583 not match groupId: testSchedulerx.defaultGroup</Message>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DisableJobResponse>","errorExample":""}]',
            'title' => '停用指定任务',
            'summary' => '停用指定任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## Demo'."\n"
                ."\n"
                .'```'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.DisableJobRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.DisableJobResponse;'."\n"
                ."\n"
                .'public class DisableJob {'."\n"
                ."\n"
                .'    public static void main(String[] args) throws Exception {'."\n"
                .'     // OpenAPI的接入点，具体查看上表支持地域列表以及购买机器地域填写。'."\n"
                .'        String regionId = "cn-shanghai";'."\n"
                .'        //鉴权使用的AccessKeyId，由阿里云官网控制台获取。'."\n"
                .'        String accessKeyId = "<yourAccessKeyId>";'."\n"
                .'        //鉴权使用的AccessKeySecret，由阿里云官网控制台获取。'."\n"
                .'        String accessKeySecret = "<yourAccessKeySecret>";'."\n"
                .'        //产品名称。'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写。'."\n"
                .'        String domain ="schedulerx.cn-shanghai.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端。'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                .'        '."\n"
                .'        DisableJobRequest request = new DisableJobRequest();'."\n"
                .'        request.setNamespace("xxxxxx");'."\n"
                .'        request.setGroupId("xxxxxx");'."\n"
                .'        request.setJobId(123L);'."\n"
                .'        DisableJobResponse response = client.getAcsResponse(request);'."\n"
                .'        if (!response.getSuccess()) {'."\n"
                .'            System.out.println(response.getMessage());'."\n"
                .'            System.out.println("DisableJob: "+response.getRequestId());'."\n"
                .'        } else {'."\n"
                .'            System.out.println(response.getMessage());'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'    '."\n"
                .'}'."\n"
                .'```',
        ],
        'BatchEnableJobs' => [
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
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务所属命名空间ID，在控制台**命名空间**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的**应用管理**页面中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务所属地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'JobIdList',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '任务ID列表，多个任务ID以半角逗号（,）分隔。',
                        'type' => 'array',
                        'items' => [
                            'description' => '任务ID。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '99341',
                        ],
                        'required' => true,
                        'example' => '99341',
                        'maxItems' => 3000,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息。',
                                'type' => 'string',
                                'example' => 'message',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7',
                            ],
                            'Success' => [
                                'description' => '批量启用任务是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：成功'."\n"
                                    ."\n"
                                    .'- **false**：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"message\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchEnableJobsResponse>\\n<Message>enable failed jobs=[99342]</Message>\\n<RequestId>71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</BatchEnableJobsResponse>","errorExample":""}]',
            'title' => '批量启用任务',
            'summary' => '批量启用任务。',
            'description' => '在调用该接口前，需要在POM文件添加以下依赖：'."\n"
                ."\n"
                .'```xml'."\n"
                .'<dependency>'."\n"
                .'    <groupId>com.aliyun</groupId>'."\n"
                .'    <artifactId>aliyun-java-sdk-schedulerx2</artifactId>'."\n"
                .'    <version>1.0.4</version>'."\n"
                .'</dependency>'."\n"
                .'```',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '##  Demo'."\n"
                ."\n"
                .'```'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import com.google.common.collect.Lists;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.BatchEnableJobsRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.BatchEnableJobsResponse;'."\n"
                ."\n"
                .'public class TestBatchEnableJobs {'."\n"
                ."\n"
                .'    public static void main(String[] args) throws Exception {'."\n"
                .'        // OpenAPI的接入点，具体查看上表支持地域列表以及购买机器地域填写。'."\n"
                .'        String regionId = "cn-hangzhou";'."\n"
                .'        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。'."\n"
                .'        String accessKeyId = "xxxxxx";'."\n"
                .'        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。'."\n"
                .'        String accessKeySecret = "xxxxxxxx";'."\n"
                .'        //产品名称。'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写。'."\n"
                .'        String domain ="schedulerx.cn-hangzhou.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端。'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                .'        '."\n"
                .'        BatchEnableJobsRequest request = new BatchEnableJobsRequest();'."\n"
                .'        request.setNamespace("xxxxxx");'."\n"
                .'        request.setGroupId("xxxxxx");'."\n"
                .'        request.setJobIdLists(Lists.newArrayList(3982L,3984L));'."\n"
                .'        BatchEnableJobsResponse response = client.getAcsResponse(request);'."\n"
                .'        if (!response.getSuccess()) {'."\n"
                .'            System.out.println(response.getMessage());'."\n"
                .'            System.out.println("BatchEnableJob: "+response.getRequestId());'."\n"
                .'        } else {'."\n"
                .'            System.out.println(response.getMessage());'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'    '."\n"
                .'}'."\n"
                .'```',
        ],
        'BatchDisableJobs' => [
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
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务所属命名空间ID，在控制台**命名空间**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的**应用管理**页面中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务所属地域。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'JobIdList',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '任务ID列表，多个任务ID以半角逗号（,）分隔。',
                        'type' => 'array',
                        'items' => [
                            'description' => '任务ID。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '99341',
                        ],
                        'required' => true,
                        'example' => '99341',
                        'maxItems' => 3000,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息。',
                                'type' => 'string',
                                'example' => 'disable failed jobs=[99341]',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7',
                            ],
                            'Success' => [
                                'description' => '批量禁用任务是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：成功'."\n"
                                    ."\n"
                                    .'- **false**：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"disable failed jobs=[99341]\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchDisableJobsResponse>\\n<Message>disable failed jobs=[99341]</Message>\\n<RequestId>71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</BatchDisableJobsResponse>","errorExample":""}]',
            'title' => '批量禁用任务',
            'summary' => '批量禁用任务。',
            'description' => '在调用该接口前，需要在POM文件添加以下依赖：'."\n"
                ."\n"
                .'```xml'."\n"
                .'<dependency>'."\n"
                .'    <groupId>com.aliyun</groupId>'."\n"
                .'    <artifactId>aliyun-java-sdk-schedulerx2</artifactId>'."\n"
                .'    <version>1.0.4</version>'."\n"
                .'</dependency>'."\n"
                .'```',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '##   Demo'."\n"
                .'```'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import com.google.common.collect.Lists;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.BatchDisableJobsRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.BatchDisableJobsResponse;'."\n"
                ."\n"
                .'public class TestBatchDisableJobs {'."\n"
                ."\n"
                .'    public static void main(String[] args) throws Exception {'."\n"
                .'        // OpenAPI 的接入点，具体查看上表支持地域列表以及购买机器地域填写。'."\n"
                .'        String regionId = "cn-hangzhou";'."\n"
                .'        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。'."\n"
                .'        String accessKeyId = "xxxxxx";'."\n"
                .'        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。'."\n"
                .'        String accessKeySecret = "xxxxxxxx";'."\n"
                .'        //产品名称。'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写。'."\n"
                .'        String domain ="schedulerx.cn-hangzhou.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端。'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                .'        '."\n"
                .'        BatchDisableJobsRequest request = new BatchDisableJobsRequest();'."\n"
                .'        request.setNamespace("xxxxxx");'."\n"
                .'        request.setGroupId("xxxxxx");'."\n"
                .'        request.setJobIdLists(Lists.newArrayList(3982L,3984L));'."\n"
                .'        BatchDisableJobsResponse response = client.getAcsResponse(request);'."\n"
                .'        if (!response.getSuccess()) {'."\n"
                .'            System.out.println(response.getMessage());'."\n"
                .'            System.out.println("BatchDisableJob: "+response.getRequestId());'."\n"
                .'        } else {'."\n"
                .'            System.out.println(response.getMessage());'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'    '."\n"
                .'}'."\n"
                .'```',
        ],
        'EnableJob' => [
            'methods' => [
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
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID，在控制台的任务管理页面中获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '92555',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
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
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息。',
                                'type' => 'string',
                                'example' => 'jobid: 92583 not match groupId: testSchedulerx.defaultGroup',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID。',
                                'type' => 'string',
                                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBC***',
                            ],
                            'Success' => [
                                'description' => '调用任务是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：调用任务成功。'."\n"
                                    .'- **false**：调用任务失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"jobid: 92583 not match groupId: testSchedulerx.defaultGroup\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBC***\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<EnableJobResponse>\\n<Message>jobid: 92583 not match groupId: testSchedulerx.defaultGroup</Message>\\n<RequestId>71BCC0E3-64B2-4B63-A870-AFB64EBC***</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</EnableJobResponse>","errorExample":""}]',
            'title' => '启用指定任务',
            'summary' => '启用指定任务。',
            'description' => '任务创建完成以后默认启用，所以该功能是在停用任务后使用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '##  Demo'."\n"
                ."\n"
                .'```'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.EnableJobRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.EnableJobResponse;'."\n"
                ."\n"
                .'public class EnableJob {'."\n"
                ."\n"
                .'    public static void main(String[] args) throws Exception {'."\n"
                .'     // OpenAPI的接入点，具体查看上表支持地域列表以及购买机器地域填写。'."\n"
                .'        String regionId = "cn-shanghai";'."\n"
                .'        //鉴权使用的 AccessKeyId，由阿里云官网控制台获取。'."\n"
                .'        String accessKeyId = "<yourAccessKeyId>";'."\n"
                .'        //鉴权使用的 AccessKeySecret，由阿里云官网控制台获取。'."\n"
                .'        String accessKeySecret = "<yourAccessKeySecret>";'."\n"
                .'        //产品名称。'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写。'."\n"
                .'        String domain ="schedulerx.cn-shanghai.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端。'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                .'        '."\n"
                .'        EnableJobRequest request = new EnableJobRequest();'."\n"
                .'        request.setNamespace("xxxxxx");'."\n"
                .'        request.setGroupId("xxxxxx");'."\n"
                .'        request.setJobId(123L);'."\n"
                .'        EnableJobResponse response = client.getAcsResponse(request);'."\n"
                .'        if (!response.getSuccess()) {'."\n"
                .'            System.out.println(response.getMessage());'."\n"
                .'            System.out.println("EnableJob: "+response.getRequestId());'."\n"
                .'        } else {'."\n"
                .'            System.out.println(response.getMessage());'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'    '."\n"
                .'}'."\n"
                .'```',
        ],
        'GetJobInfo' => [
            'methods' => [
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
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID，在控制台的任务管理页面中获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '92583',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
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
                    'name' => 'JobName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'simpleJob',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息，仅错误时返回错误信息。',
                                'type' => 'string',
                                'example' => 'jobid: 92583 not match groupId: testSchedulerx.defaultGroup',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID。',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Success' => [
                                'description' => '获取任务详情是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：获取任务详情成功。'."\n"
                                    .'- **false**：获取任务详情失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '指定任务信息。',
                                'type' => 'object',
                                'properties' => [
                                    'JobConfigInfo' => [
                                        'description' => '任务配置信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'JobId' => [
                                                'description' => '任务ID。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '538039',
                                            ],
                                            'Status' => [
                                                'description' => '任务状态。取值如下：'."\n"
                                                    ."\n"
                                                    .'- **1**：启用，可以被正常触发。'."\n"
                                                    .'- **0**：禁用，不会被触发。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'Parameters' => [
                                                'description' => '用户自定义参数，运行时可以获取。',
                                                'type' => 'string',
                                                'example' => 'test',
                                            ],
                                            'Description' => [
                                                'description' => '任务描述。',
                                                'type' => 'string',
                                                'example' => 'test',
                                            ],
                                            'ExecuteMode' => [
                                                'description' => '任务执行模式，目前包含以下几种任务执行模式：'."\n"
                                                    ."\n"
                                                    .'- **单机运行**：standalone'."\n"
                                                    .'- **广播运行**：broadcatst'."\n"
                                                    .'- **并行计算**：parallel'."\n"
                                                    .'- **内存网格**：grid'."\n"
                                                    .'- **网格计算**：batch'."\n"
                                                    .'- **分片运行**：shard',
                                                'type' => 'string',
                                                'example' => 'standalone',
                                            ],
                                            'MaxConcurrency' => [
                                                'description' => '最大同时运行实例数量，默认值为1， 即上次触发没有运行结束，即使到了运行时刻也不会进行下次触发。',
                                                'type' => 'string',
                                                'example' => '1',
                                            ],
                                            'Name' => [
                                                'description' => '任务名称。',
                                                'type' => 'string',
                                                'example' => 'helloworld',
                                            ],
                                            'MaxAttempt' => [
                                                'description' => '错误最大重试次数，根据业务需求填写，默认值为0。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '0',
                                            ],
                                            'Content' => [
                                                'description' => '脚本类型任务的脚本。',
                                                'type' => 'string',
                                                'example' => 'echo "clear" > /home/admin/edas-container/logs/catalina.out ',
                                            ],
                                            'JarUrl' => [
                                                'description' => '上传到OSS的完整路径。'."\n"
                                                    ."\n"
                                                    .'如果选择JAR包运行，可以将相应JAR包上传到OSS的该路径下。',
                                                'type' => 'string',
                                                'example' => 'https://test.oss-cn-hangzhou.aliyuncs.com/schedulerX/test.jar',
                                            ],
                                            'ClassName' => [
                                                'description' => '任务接口类完整路径，仅是Java类型任务时有该字段。',
                                                'type' => 'string',
                                                'example' => 'com.alibaba.test.helloword',
                                            ],
                                            'JobType' => [
                                                'description' => '任务类型',
                                                'type' => 'string',
                                                'example' => 'java',
                                            ],
                                            'AttemptInterval' => [
                                                'description' => '错误重试间隔时间，单位s，默认值为30。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '30',
                                            ],
                                            'MapTaskXAttrs' => [
                                                'description' => '高级配置，仅限于并行计算、内存网格和网格计算使用。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'TaskMaxAttempt' => [
                                                        'description' => '子任务失败重试次数。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '0',
                                                    ],
                                                    'TaskAttemptInterval' => [
                                                        'description' => '子任务失败重试间隔。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '0',
                                                    ],
                                                    'ConsumerSize' => [
                                                        'description' => '单机单次触发执行线程数，默认值为5。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '5',
                                                    ],
                                                    'QueueSize' => [
                                                        'description' => '子任务队列缓存上限，默认值为10000。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '10000',
                                                    ],
                                                    'DispatcherSize' => [
                                                        'description' => '子任务分发线程数，默认值为5。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '5',
                                                    ],
                                                    'PageSize' => [
                                                        'description' => '并行任务单次拉取子任务数，默认值为100。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '100',
                                                    ],
                                                ],
                                            ],
                                            'TimeConfig' => [
                                                'description' => '时间配置信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Calendar' => [
                                                        'description' => '**cron**类型可以选择填写自定义日历。',
                                                        'type' => 'string',
                                                        'example' => '工作日',
                                                    ],
                                                    'TimeType' => [
                                                        'description' => '时间配置类型，目前支持以下几种时间类型：'."\n"
                                                            ."\n"
                                                            .'- **cron**：1'."\n"
                                                            .'- **fix_rate**：3'."\n"
                                                            .'- **second_delay**：4'."\n"
                                                            .'- **one_time** ：5'."\n"
                                                            .'- **api**：100',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                    'DataOffset' => [
                                                        'description' => '**cron**类型可以选择时间偏移，单位为秒（s）。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '0',
                                                    ],
                                                    'TimeExpression' => [
                                                        'description' => '时间表达式，目前支持以下几种时间表达类型：'."\n"
                                                            ."\n"
                                                            .'- **api**：无时间表达式。'."\n"
                                                            .'- **fix_rate**：具体固定频率值，如30表示每隔30s触发一次。'."\n"
                                                            .'- **cron**：标准的cron表达式。'."\n"
                                                            .'- **second_delay**：固定延迟多少秒执行一次（1s~60s可选）。',
                                                        'type' => 'string',
                                                        'example' => '0 0/10 * * * ?',
                                                    ],
                                                ],
                                            ],
                                            'JobMonitorInfo' => [
                                                'description' => '任务监控信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ContactInfo' => [
                                                        'description' => '联系人信息。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'UserPhone' => [
                                                                    'description' => '用户手机号。',
                                                                    'type' => 'string',
                                                                    'example' => '1381111****',
                                                                ],
                                                                'UserName' => [
                                                                    'description' => '用户名。',
                                                                    'type' => 'string',
                                                                    'example' => 'userA',
                                                                ],
                                                                'UserMail' => [
                                                                    'description' => '用户邮件地址。',
                                                                    'type' => 'string',
                                                                    'example' => 'user@demo.com',
                                                                ],
                                                                'Ding' => [
                                                                    'description' => '钉钉Webhook地址。',
                                                                    'type' => 'string',
                                                                    'example' => 'https://oapi.dingtalk.com/robot/send?access_token=XXXXXX',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'MonitorConfig' => [
                                                        'description' => '报警开关以及阈值配置。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Timeout' => [
                                                                'description' => '超时阈值，单位为秒（s），默认值为7200。',
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                                'example' => '12300',
                                                            ],
                                                            'SendChannel' => [
                                                                'description' => '报警发送形式，目前只支持sms。',
                                                                'type' => 'string',
                                                                'example' => 'sms',
                                                            ],
                                                            'TimeoutKillEnable' => [
                                                                'description' => '超时终止本次触发开关，默认关闭。',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                            'TimeoutEnable' => [
                                                                'description' => '超时报警开关。取值如下：'."\n"
                                                                    ."\n"
                                                                    .'- **true**：开启超时报警开关。'."\n"
                                                                    .'- **false**：关闭超时报警开关。',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                            'FailEnable' => [
                                                                'description' => '失败报警开关。取值如下：'."\n"
                                                                    ."\n"
                                                                    .'- **true**：开启失败报警开关。'."\n"
                                                                    .'- **false**：关闭失败报警开关。',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                            'MissWorkerEnable' => [
                                                                'description' => '是否开启无可用机器报警。',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'XAttrs' => [
                                                'description' => '任务扩展字段',
                                                'type' => 'string',
                                                'example' => '{"pageSize":5,"queueSize":10,"consumerSize":5,"dispatcherSize":5,"taskMaxAttempt":0,"taskAttemptInterval":0,"globalConsumerSize":1000,"taskDispatchMode":"push"}',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"jobid: 92583 not match groupId: testSchedulerx.defaultGroup\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobConfigInfo\\": {\\n      \\"JobId\\": 538039,\\n      \\"Status\\": 1,\\n      \\"Parameters\\": \\"test\\",\\n      \\"Description\\": \\"test\\",\\n      \\"ExecuteMode\\": \\"standalone\\",\\n      \\"MaxConcurrency\\": \\"1\\",\\n      \\"Name\\": \\"helloworld\\",\\n      \\"MaxAttempt\\": 0,\\n      \\"Content\\": \\"echo \\\\\\"clear\\\\\\" > /home/admin/edas-container/logs/catalina.out \\",\\n      \\"JarUrl\\": \\"https://test.oss-cn-hangzhou.aliyuncs.com/schedulerX/test.jar\\",\\n      \\"ClassName\\": \\"com.alibaba.test.helloword\\",\\n      \\"JobType\\": \\"java\\",\\n      \\"AttemptInterval\\": 30,\\n      \\"MapTaskXAttrs\\": {\\n        \\"TaskMaxAttempt\\": 0,\\n        \\"TaskAttemptInterval\\": 0,\\n        \\"ConsumerSize\\": 5,\\n        \\"QueueSize\\": 10000,\\n        \\"DispatcherSize\\": 5,\\n        \\"PageSize\\": 100\\n      },\\n      \\"TimeConfig\\": {\\n        \\"Calendar\\": \\"工作日\\",\\n        \\"TimeType\\": 1,\\n        \\"DataOffset\\": 0,\\n        \\"TimeExpression\\": \\"0 0/10 * * * ?\\"\\n      },\\n      \\"JobMonitorInfo\\": {\\n        \\"ContactInfo\\": [\\n          {\\n            \\"UserPhone\\": \\"1381111****\\",\\n            \\"UserName\\": \\"userA\\",\\n            \\"UserMail\\": \\"user@demo.com\\",\\n            \\"Ding\\": \\"https://oapi.dingtalk.com/robot/send?access_token=XXXXXX\\"\\n          }\\n        ],\\n        \\"MonitorConfig\\": {\\n          \\"Timeout\\": 12300,\\n          \\"SendChannel\\": \\"sms\\",\\n          \\"TimeoutKillEnable\\": true,\\n          \\"TimeoutEnable\\": true,\\n          \\"FailEnable\\": true,\\n          \\"MissWorkerEnable\\": true\\n        }\\n      },\\n      \\"XAttrs\\": \\"{\\\\\\"pageSize\\\\\\":5,\\\\\\"queueSize\\\\\\":10,\\\\\\"consumerSize\\\\\\":5,\\\\\\"dispatcherSize\\\\\\":5,\\\\\\"taskMaxAttempt\\\\\\":0,\\\\\\"taskAttemptInterval\\\\\\":0,\\\\\\"globalConsumerSize\\\\\\":1000,\\\\\\"taskDispatchMode\\\\\\":\\\\\\"push\\\\\\"}\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetJobInfoResponse>\\n<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>jobid: 92583 not match groupId: testSchedulerx.defaultGroup</Message>\\n<Data>\\n    <JobConfigInfo>\\n        <Status>1</Status>\\n        <MaxAttempt>0</MaxAttempt>\\n        <Description>test</Description>\\n        <Parameters>test</Parameters>\\n        <JarUrl>https://test.oss-cn-hangzhou.aliyuncs.com/schedulerX/test.jar</JarUrl>\\n        <MaxConcurrency>1</MaxConcurrency>\\n        <TimeConfig>\\n            <TaskAttemptInterval>0</TaskAttemptInterval>\\n            <QueueSize>10000</QueueSize>\\n            <PageSize>100</PageSize>\\n            <DispatcherSize>5</DispatcherSize>\\n            <TaskMaxAttempt>0</TaskMaxAttempt>\\n            <Calendar>工作日</Calendar>\\n            <TimeExpression>0 0/10 * * * ?</TimeExpression>\\n            <ContactInfo>\\n                <UserName>userA</UserName>\\n                <UserPhone>1381111****</UserPhone>\\n            </ContactInfo>\\n            <ConsumerSize>5</ConsumerSize>\\n            <DataOffset>0</DataOffset>\\n            <TimeType>1</TimeType>\\n            <MonitorConfig>\\n                <TimeoutEnable>true</TimeoutEnable>\\n                <Timeout>12300</Timeout>\\n                <FailEnable>true</FailEnable>\\n                <SendChannel>sms</SendChannel>\\n                <TimeoutKillEnable>true</TimeoutKillEnable>\\n            </MonitorConfig>\\n        </TimeConfig>\\n        <Name>helloworld</Name>\\n        <MapTaskXAttrs>\\n            <TaskAttemptInterval>0</TaskAttemptInterval>\\n            <QueueSize>10000</QueueSize>\\n            <PageSize>100</PageSize>\\n            <DispatcherSize>5</DispatcherSize>\\n            <TaskMaxAttempt>0</TaskMaxAttempt>\\n            <Calendar>工作日</Calendar>\\n            <TimeExpression>0 0/10 * * * ?</TimeExpression>\\n            <ContactInfo>\\n                <UserName>userA</UserName>\\n                <UserPhone>1381111****</UserPhone>\\n            </ContactInfo>\\n            <ConsumerSize>5</ConsumerSize>\\n            <DataOffset>0</DataOffset>\\n            <TimeType>1</TimeType>\\n            <MonitorConfig>\\n                <TimeoutEnable>true</TimeoutEnable>\\n                <Timeout>12300</Timeout>\\n                <FailEnable>true</FailEnable>\\n                <SendChannel>sms</SendChannel>\\n                <TimeoutKillEnable>true</TimeoutKillEnable>\\n            </MonitorConfig>\\n        </MapTaskXAttrs>\\n        <JobMonitorInfo>\\n            <TaskAttemptInterval>0</TaskAttemptInterval>\\n            <QueueSize>10000</QueueSize>\\n            <PageSize>100</PageSize>\\n            <DispatcherSize>5</DispatcherSize>\\n            <TaskMaxAttempt>0</TaskMaxAttempt>\\n            <Calendar>工作日</Calendar>\\n            <TimeExpression>0 0/10 * * * ?</TimeExpression>\\n            <ContactInfo>\\n                <UserName>userA</UserName>\\n                <UserPhone>1381111****</UserPhone>\\n            </ContactInfo>\\n            <ConsumerSize>5</ConsumerSize>\\n            <DataOffset>0</DataOffset>\\n            <TimeType>1</TimeType>\\n            <MonitorConfig>\\n                <TimeoutEnable>true</TimeoutEnable>\\n                <Timeout>12300</Timeout>\\n                <FailEnable>true</FailEnable>\\n                <SendChannel>sms</SendChannel>\\n                <TimeoutKillEnable>true</TimeoutKillEnable>\\n            </MonitorConfig>\\n        </JobMonitorInfo>\\n        <Content>echo \\"clear\\" &amp;gt; /home/admin/edas-container/logs/catalina.out</Content>\\n        <ClassName>com.alibaba.test.helloword</ClassName>\\n        <AttemptInterval>30</AttemptInterval>\\n        <ExecuteMode>standalone</ExecuteMode>\\n    </JobConfigInfo>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</GetJobInfoResponse>","errorExample":""}]',
            'title' => '获取指定Jobid任务详情',
            'summary' => '获取指定Jobid任务详情，通常用来更新任务。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListJobs' => [
            'methods' => [
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
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的**应用管理**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DocTest.Group',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间，在控制台的**命名空间**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1a72ecb1-b4cc-400a-a71b-20cdec9b****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
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
                    'name' => 'JobName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'helloword',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务状态。'."\n"
                            ."\n"
                            .'- **0**：表示禁用'."\n"
                            ."\n"
                            .'- **1**：表示启用',
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
                            'Code' => [
                                'description' => '请求状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息，仅出错时返回错误信息。',
                                'type' => 'string',
                                'example' => 'namespace can not find namespace: 1a72ecb1-b4cc-400a-a71b-20cdec9b****, namespaceSource:null',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID。',
                                'type' => 'string',
                                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBCB58B',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：成功'."\n"
                                    ."\n"
                                    .'- **false**：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '任务列表信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Jobs' => [
                                        'description' => '任务列表及任务详情。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '任务状态。取值如下：'."\n"
                                                        ."\n"
                                                        .'- **1**：启用，可以被正常触发。'."\n"
                                                        ."\n"
                                                        .'- **0**：禁用，不会被触发。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'JarUrl' => [
                                                    'description' => 'JAR包的OSS完整路径。',
                                                    'type' => 'string',
                                                    'example' => 'https:doc***.oss-cn-hangzhou.aliyuncs.com/sc-****-D-0.0.2-SNAPSHOT.jar',
                                                ],
                                                'MaxAttempt' => [
                                                    'description' => '错误最大重试次数，根据业务需求填写，默认值为0。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'Parameters' => [
                                                    'description' => '用户自定义参数，运行时可以获取。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'Description' => [
                                                    'description' => '任务描述。',
                                                    'type' => 'string',
                                                    'example' => 'Test',
                                                ],
                                                'JobId' => [
                                                    'description' => '任务ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '99341',
                                                ],
                                                'ExecuteMode' => [
                                                    'description' => '任务执行模式，可能出现的结果如下：'."\n"
                                                        ."\n"
                                                        .'- **standalone**：单机运行'."\n"
                                                        ."\n"
                                                        .'- **broadcast**：广播运行'."\n"
                                                        ."\n"
                                                        .'- **parallel**：并行计算'."\n"
                                                        ."\n"
                                                        .'- **grid**：内存网格'."\n"
                                                        ."\n"
                                                        .'- **batch**：网格计算'."\n"
                                                        ."\n"
                                                        .'- **shard**：分片运行',
                                                    'type' => 'string',
                                                    'example' => 'standalone',
                                                ],
                                                'MaxConcurrency' => [
                                                    'description' => '最大同时运行实例数量，默认值为1， 即上次触发没有运行结束，即使到了运行时刻也不会进行下次触发。',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'Name' => [
                                                    'description' => '任务名。',
                                                    'type' => 'string',
                                                    'example' => 'helloworld',
                                                ],
                                                'ClassName' => [
                                                    'description' => '任务接口类完整路径。'."\n"
                                                        .'当您的任务是Java任务类型时，才有该字段信息。',
                                                    'type' => 'string',
                                                    'example' => 'com.alibaba.schedulerx.test.helloworld',
                                                ],
                                                'Content' => [
                                                    'description' => 'python、shell、go任务类型的脚本代码内容。',
                                                    'type' => 'string',
                                                    'example' => 'echo \'hello\'',
                                                ],
                                                'JobType' => [
                                                    'description' => '任务类型',
                                                    'type' => 'string',
                                                    'example' => 'java',
                                                ],
                                                'AttemptInterval' => [
                                                    'description' => '错误重试间隔，单位s，默认值为30。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '30',
                                                ],
                                                'MapTaskXAttrs' => [
                                                    'description' => '高级配置，仅限于并行计算、内存网格和网格计算使用。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TaskMaxAttempt' => [
                                                            'description' => '子任务失败重试次数。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'TaskAttemptInterval' => [
                                                            'description' => '子任务失败重试间隔。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'ConsumerSize' => [
                                                            'description' => '单机单次触发执行线程数，默认值为5。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '5',
                                                        ],
                                                        'QueueSize' => [
                                                            'description' => '子任务队列缓存上限，默认值为10000。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '10000',
                                                        ],
                                                        'DispatcherSize' => [
                                                            'description' => '子任务分发线程数，默认值为5。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '5',
                                                        ],
                                                        'PageSize' => [
                                                            'description' => '并行任务单次拉取子任务数，默认值为100。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '100',
                                                        ],
                                                    ],
                                                ],
                                                'TimeConfig' => [
                                                    'description' => '时间配置信息',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Calendar' => [
                                                            'description' => 'cron类型可以选择填写自定义日历。',
                                                            'type' => 'string',
                                                            'example' => '工作日',
                                                        ],
                                                        'TimeType' => [
                                                            'description' => '时间配置类型，目前支持以下几种时间类型：'."\n"
                                                                ."\n"
                                                                .'- **1**：cron'."\n"
                                                                ."\n"
                                                                .'- **3**：fix_rate'."\n"
                                                                ."\n"
                                                                .'- **4**：second_delay'."\n"
                                                                ."\n"
                                                                .'- **100**：api',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'DataOffset' => [
                                                            'description' => 'cron类型可以选择时间偏移，单位s。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'TimeExpression' => [
                                                            'description' => '时间表达式，目前支持以下几种时间表达类型：'."\n"
                                                                ."\n"
                                                                .'- **api**：无时间表达式。'."\n"
                                                                ."\n"
                                                                .'- **fix_rate**：具体固定频率值，如30表示每隔30s触发一次。'."\n"
                                                                ."\n"
                                                                .'- **cron**：标准的cron表达式。'."\n"
                                                                ."\n"
                                                                .'- **second_delay**：固定延迟多少秒执行一次（1s~60s可选）。',
                                                            'type' => 'string',
                                                            'example' => '0 0/10 * * * ?',
                                                        ],
                                                    ],
                                                ],
                                                'JobMonitorInfo' => [
                                                    'description' => '任务监控信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ContactInfo' => [
                                                            'description' => '联系人信息。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'UserPhone' => [
                                                                        'description' => '用户手机号。',
                                                                        'type' => 'string',
                                                                        'example' => '1381111****',
                                                                    ],
                                                                    'UserName' => [
                                                                        'description' => '用户名称。',
                                                                        'type' => 'string',
                                                                        'example' => 'userA',
                                                                    ],
                                                                    'Ding' => [
                                                                        'description' => '钉钉群机器人webhook地址',
                                                                        'type' => 'string',
                                                                        'example' => 'https://oapi.dingtalk.com/robot/send?access_token=**********',
                                                                    ],
                                                                    'UserMail' => [
                                                                        'description' => '用户邮件地址',
                                                                        'type' => 'string',
                                                                        'example' => 'user@mail.com',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                        'MonitorConfig' => [
                                                            'description' => '报警开关以及阈值配置。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Timeout' => [
                                                                    'description' => '超时阈值，单位s，默认7200。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int64',
                                                                    'example' => '12300',
                                                                ],
                                                                'SendChannel' => [
                                                                    'description' => '报警发送形式，目前只支持sms。',
                                                                    'type' => 'string',
                                                                    'example' => 'sms',
                                                                ],
                                                                'TimeoutKillEnable' => [
                                                                    'description' => '超时终止本次触发开关，默认关闭。'."\n"
                                                                        ."\n"
                                                                        .'- **true**：开启'."\n"
                                                                        ."\n"
                                                                        .'- **false**：关闭',
                                                                    'type' => 'boolean',
                                                                    'example' => 'false',
                                                                ],
                                                                'TimeoutEnable' => [
                                                                    'description' => '超时报警开关。取值如下：'."\n"
                                                                        ."\n"
                                                                        .'- **true**：开启'."\n"
                                                                        ."\n"
                                                                        .'- **false**：关闭',
                                                                    'type' => 'boolean',
                                                                    'example' => 'true',
                                                                ],
                                                                'FailEnable' => [
                                                                    'description' => '失败报警开关。取值如下：'."\n"
                                                                        ."\n"
                                                                        .'- **true**：开启'."\n"
                                                                        ."\n"
                                                                        .'- **false**：关闭',
                                                                    'type' => 'boolean',
                                                                    'example' => 'true',
                                                                ],
                                                                'MissWorkerEnable' => [
                                                                    'description' => '是否开启无可用机器报警',
                                                                    'type' => 'boolean',
                                                                    'example' => 'true',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'XAttrs' => [
                                                    'description' => '任务扩展字段',
                                                    'type' => 'string',
                                                    'example' => '{"pageSize":5,"queueSize":10,"consumerSize":5,"dispatcherSize":5,"taskMaxAttempt":0,"taskAttemptInterval":0,"globalConsumerSize":1000,"taskDispatchMode":"push"}',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"namespace can not find namespace: 1a72ecb1-b4cc-400a-a71b-20cdec9b****, namespaceSource:null\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBCB58B\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Jobs\\": [\\n      {\\n        \\"Status\\": 1,\\n        \\"JarUrl\\": \\"https:doc***.oss-cn-hangzhou.aliyuncs.com/sc-****-D-0.0.2-SNAPSHOT.jar\\",\\n        \\"MaxAttempt\\": 0,\\n        \\"Parameters\\": \\"test\\",\\n        \\"Description\\": \\"Test\\",\\n        \\"JobId\\": 99341,\\n        \\"ExecuteMode\\": \\"standalone\\",\\n        \\"MaxConcurrency\\": \\"1\\",\\n        \\"Name\\": \\"helloworld\\",\\n        \\"ClassName\\": \\"com.alibaba.schedulerx.test.helloworld\\",\\n        \\"Content\\": \\"echo \'hello\'\\",\\n        \\"JobType\\": \\"java\\",\\n        \\"AttemptInterval\\": 30,\\n        \\"MapTaskXAttrs\\": {\\n          \\"TaskMaxAttempt\\": 0,\\n          \\"TaskAttemptInterval\\": 0,\\n          \\"ConsumerSize\\": 5,\\n          \\"QueueSize\\": 10000,\\n          \\"DispatcherSize\\": 5,\\n          \\"PageSize\\": 100\\n        },\\n        \\"TimeConfig\\": {\\n          \\"Calendar\\": \\"工作日\\",\\n          \\"TimeType\\": 1,\\n          \\"DataOffset\\": 0,\\n          \\"TimeExpression\\": \\"0 0/10 * * * ?\\"\\n        },\\n        \\"JobMonitorInfo\\": {\\n          \\"ContactInfo\\": [\\n            {\\n              \\"UserPhone\\": \\"1381111****\\",\\n              \\"UserName\\": \\"userA\\",\\n              \\"Ding\\": \\"https://oapi.dingtalk.com/robot/send?access_token=**********\\",\\n              \\"UserMail\\": \\"user@mail.com\\"\\n            }\\n          ],\\n          \\"MonitorConfig\\": {\\n            \\"Timeout\\": 12300,\\n            \\"SendChannel\\": \\"sms\\",\\n            \\"TimeoutKillEnable\\": false,\\n            \\"TimeoutEnable\\": true,\\n            \\"FailEnable\\": true,\\n            \\"MissWorkerEnable\\": true\\n          }\\n        },\\n        \\"XAttrs\\": \\"{\\\\\\"pageSize\\\\\\":5,\\\\\\"queueSize\\\\\\":10,\\\\\\"consumerSize\\\\\\":5,\\\\\\"dispatcherSize\\\\\\":5,\\\\\\"taskMaxAttempt\\\\\\":0,\\\\\\"taskAttemptInterval\\\\\\":0,\\\\\\"globalConsumerSize\\\\\\":1000,\\\\\\"taskDispatchMode\\\\\\":\\\\\\"push\\\\\\"}\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListJobsResponse>\\n<Message>namespace can not find namespace: 1a72ecb1-b4cc-400a-a71b-20cdec9b****, namespaceSource:null</Message>\\n<RequestId>71BCC0E3-64B2-4B63-A870-AFB64EBCB58B</RequestId>\\n<Data>\\n    <Jobs>\\n        <Status>1</Status>\\n        <MaxAttempt>0</MaxAttempt>\\n        <Parameters>test</Parameters>\\n        <Description>Test</Description>\\n        <Content>echo \'hello\'</Content>\\n        <JarUrl>https:doc***.oss-cn-hangzhou.aliyuncs.com/sc-****-D-0.0.2-SNAPSHOT.jar</JarUrl>\\n        <MaxConcurrency>1</MaxConcurrency>\\n        <ClassName>com.alibaba.schedulerx.test.helloworld</ClassName>\\n        <AttemptInterval>30</AttemptInterval>\\n        <ExecuteMode>standalone</ExecuteMode>\\n        <JobId>99341</JobId>\\n        <Name>helloworld</Name>\\n        <MapTaskXAttrs>\\n            <TaskAttemptInterval>0</TaskAttemptInterval>\\n            <QueueSize>10000</QueueSize>\\n            <DispatcherSize>5</DispatcherSize>\\n            <PageSize>100</PageSize>\\n            <TaskMaxAttempt>0</TaskMaxAttempt>\\n            <ConsumerSize>5</ConsumerSize>\\n        </MapTaskXAttrs>\\n        <TimeConfig>\\n            <Calendar>工作日</Calendar>\\n            <TimeExpression>0 0/10 * * * ?</TimeExpression>\\n            <DataOffset>0</DataOffset>\\n            <TimeType>1</TimeType>\\n        </TimeConfig>\\n        <JobMonitorInfo>\\n            <ContactInfo>\\n                <UserName>userA</UserName>\\n                <UserPhone>1381111****</UserPhone>\\n            </ContactInfo>\\n            <MonitorConfig>\\n                <TimeoutEnable>true</TimeoutEnable>\\n                <Timeout>12300</Timeout>\\n                <FailEnable>true</FailEnable>\\n                <SendChannel>sms</SendChannel>\\n                <TimeoutKillEnable>false</TimeoutKillEnable>\\n            </MonitorConfig>\\n        </JobMonitorInfo>\\n    </Jobs>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</ListJobsResponse>","errorExample":""}]',
            'title' => '获取任务列表',
            'summary' => '获取任务列表。',
            'description' => '在调用该接口前，需要在POM文件添加以下依赖：'."\n"
                ."\n"
                .'```'."\n"
                .'<dependency>'."\n"
                .'      <groupId>com.aliyun</groupId>'."\n"
                .'      <artifactId>aliyun-java-sdk-schedulerx2</artifactId>'."\n"
                .'      <version>1.0.5</version>'."\n"
                .'</dependency>'."\n"
                .'```',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '##  Demo'."\n"
                .'```'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import java.util.List;'."\n"
                ."\n"
                .'import com.alibaba.schedulerx.common.util.JsonUtil;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.exceptions.ClientException;'."\n"
                .'import com.aliyuncs.exceptions.ServerException;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.ListJobsRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.ListJobsResponse;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.ListJobsResponse.Data.Job;'."\n"
                ."\n"
                .'public class TestListJobs {'."\n"
                ."\n"
                .'    public static void main(String[] args) {'."\n"
                .'        //OpenAPI的接入点，具体查看支持地域列表以及购买机器地域填写。'."\n"
                .'        String regionId = "cn-hangzhou";'."\n"
                .'        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。'."\n"
                .'        String accessKeyId = "XXXXXXXX";'."\n"
                .'        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。'."\n"
                .'        String accessKeySecret = "XXXXXXXX";'."\n"
                .'        //产品名称'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写'."\n"
                .'        String domain ="schedulerx.cn.hangzhou.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端。'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                .'        '."\n"
                .'        ListJobsRequest request = new ListJobsRequest();'."\n"
                .'        //命名空间。'."\n"
                .'        request.setNamespace("433d8b23-06e9-408c-aaaa-90d4d1b****");'."\n"
                .'        //应用ID。'."\n"
                .'        request.setGroupId("DocTest.Group");'."\n"
                .'        ListJobsResponse response;'."\n"
                .'        try {'."\n"
                .'            response = client.getAcsResponse(request);'."\n"
                .'            if (!response.getSuccess()) {'."\n"
                .'                System.out.println(JsonUtil.toJson(response));'."\n"
                .'                System.out.println(response.getCode());'."\n"
                .'            } else {'."\n"
                .'                System.out.println(JsonUtil.toJson(response));'."\n"
                .'                List<Job> jobs = response.getData().getJobs();'."\n"
                .'                for (Job job : jobs) {'."\n"
                .'                    System.out.println("jobId:" + job.getJobId() + ", name:" + job.getName() + ", status=" + job.getStatus());'."\n"
                .'                }'."\n"
                .'            }'."\n"
                .'        } catch (ServerException e) {'."\n"
                .'            // TODO Auto-generated catch block'."\n"
                .'            e.printStackTrace();'."\n"
                .'        } catch (ClientException e) {'."\n"
                .'            // TODO Auto-generated catch block'."\n"
                .'            e.printStackTrace();'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'    '."\n"
                .'}'."\n"
                ."\n"
                .'```',
        ],
        'ExecuteJob' => [
            'methods' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID，在控制台的任务管理页面中获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '92583',
                    ],
                ],
                [
                    'name' => 'InstanceParameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '本次触发携带参数，可以是任意字符串，`processor`代码通过`context.getInstanceParameters()`获取，区别于创建任务自定义参数。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
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
                    'name' => 'CheckJobStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否检查任务状态，取值如下：**true**：任务启用才能执行任务。**false**：任务不启用也可以执行任务。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DesignateType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定机器类型：1.workerAddr; 2. label',
                        'description' => '指定机器的类型，取值如下：**1**：指定worker。**2**：指定label',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Worker',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定机器的workerAddr',
                        'description' => '应用的worker地址，需要先通过GetWokerList接口返回workerAddress',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxxxxxx@127.0.0.1:222',
                    ],
                ],
                [
                    'name' => 'Label',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定机器的标签',
                        'description' => 'worker的标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gray',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误消息，仅出错时返回错误信息。',
                                'type' => 'string',
                                'example' => 'groupid not exist groupId: testSchedulerx.defaultGroup namespace: adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID。',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108****',
                            ],
                            'Success' => [
                                'description' => '触发任务是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- `true`：触发任务成功。'."\n"
                                    .'- `false`：触发任务失败。'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '如果成功，会返回任务实例ID。',
                                'type' => 'object',
                                'properties' => [
                                    'JobInstanceId' => [
                                        'description' => '任务实例ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '11111111',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"groupid not exist groupId: testSchedulerx.defaultGroup namespace: adcfc35d-e2fe-4fe9-bbaa-20e90ffc****\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108****\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobInstanceId\\": 11111111\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ExecuteJobResponse>\\n    <Code>200</Code>\\n    <Message>groupid not exist groupId: testSchedulerx.defaultGroup namespace: adcfc35d-e2fe-4fe9-bbaa-20e90ffc****</Message>\\n    <RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108****</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <JobInstanceId>11111111</JobInstanceId>\\n    </Data>\\n</ExecuteJobResponse>","errorExample":""}]',
            'title' => '触发一次任务',
            'summary' => '触发一次任务立即运行。',
            'description' => '> 因为`JobID`联合`ScheduleTime`是唯一索引，所以同一个任务连续调用ExecuteJob接口的时，每次要sleep一秒，否则任务有可能会失败。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DesignateWorkers' => [
            'summary' => '指定机器。',
            'methods' => [
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
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '命名空间UID',
                        'description' => '命名空间UID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4a06d5ea-f576-4326-842c-fb14ea043d8d',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'title' => '命名空间来源',
                        'description' => '命名空间来源',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用分组ID',
                        'description' => '应用分组ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'hxm.test',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务ID',
                        'description' => '任务ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '144153',
                    ],
                ],
                [
                    'name' => 'Transferable',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否故障转移',
                        'description' => '是否故障转移',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DesignateType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定机器的类型',
                        'description' => '指定机器的类型：1.worker, 2.label',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'enumValueTitles' => [
                            1 => 'worker',
                            'label',
                        ],
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Workers',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定机器列表json格式',
                        'description' => '指定机器列表JSON格式列表',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["127.0.0.1","127.0.0.2"]',
                    ],
                ],
                [
                    'name' => 'Labels',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指定label列表json格式',
                        'description' => '指定`label`列表`json`格式列表',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["gray"]',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'public',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '765xxx',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'job is not existed',
                            ],
                            'Code' => [
                                'title' => '错误码',
                                'description' => '错误码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Success' => [
                                'title' => '是否成功',
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"765xxx\\",\\n  \\"Message\\": \\"job is not existed\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DesignateWorkersResponse>\\n    <RequestId>765xxx</RequestId>\\n    <Message>job is not existed</Message>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DesignateWorkersResponse>","errorExample":""}]',
            'title' => '指定机器',
            'extraInfo' => '##  示例Demo'."\n"
                ."\n"
                .'```'."\n"
                .'package com.alibaba.schedulerx.pop;'."\n"
                ."\n"
                .'import java.util.List;'."\n"
                ."\n"
                .'import com.alibaba.schedulerx.common.util.JsonUtil;'."\n"
                ."\n"
                .'import com.aliyuncs.DefaultAcsClient;'."\n"
                .'import com.aliyuncs.exceptions.ClientException;'."\n"
                .'import com.aliyuncs.exceptions.ServerException;'."\n"
                .'import com.aliyuncs.profile.DefaultProfile;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.DesignateWorkersRequest;'."\n"
                .'import com.aliyuncs.schedulerx2.model.v20190430.DesignateWorkersResponse;'."\n"
                .'import com.google.common.collect.Lists;'."\n"
                ."\n"
                .'public class TestDesignateWorkers {'."\n"
                ."\n"
                .'    public static void main(String[] args) {'."\n"
                .'     // OpenAPI的接入点，具体查看支持地域列表或根据购买地域填写'."\n"
                .'        String regionId = "public";'."\n"
                .'      //鉴权使用的AccessKey ID，由阿里云官网控制台获取'."\n"
                .'        String accessKeyId = "xxxxxxxx";'."\n"
                .'        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取'."\n"
                .'        String accessKeySecret = "xxxxxxxxx";'."\n"
                .'        //产品名称'."\n"
                .'        String productName ="schedulerx2";'."\n"
                .'        //对照支持地域列表选择Domain填写'."\n"
                .'        String domain ="schedulerx.aliyuncs.com";'."\n"
                .'        //构建OpenAPI客户端'."\n"
                .'        DefaultProfile.addEndpoint(regionId, productName, domain);'."\n"
                .'        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);'."\n"
                .'        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);'."\n"
                .'        '."\n"
                .'        DesignateWorkersRequest request = new DesignateWorkersRequest();'."\n"
                .'        request.setNamespace("433d8b23-06e9-408c-aaaa-90d4d1b9a4af");'."\n"
                .'        request.setGroupId("xuren_test");'."\n"
                .'        request.setJobId(3048L);'."\n"
                .'        //是否故障转移'."\n"
                .'        request.setTransferable(true);'."\n"
                .'        //1表示指定worker，2表示指定label'."\n"
                .'        request.setDesignateType(1);'."\n"
                .'        List<String> workers = Lists.newArrayList();'."\n"
                .'        workers.add("30.225.16.104");'."\n"
                .'        //workers需要json格式'."\n"
                .'        request.setWorkers(JsonUtil.toJson(workers));'."\n"
                .'        DesignateWorkersResponse response;'."\n"
                .'        try {'."\n"
                .'            response = client.getAcsResponse(request);'."\n"
                .'            System.out.println(JsonUtil.toJson(response));'."\n"
                .'        } catch (ServerException e) {'."\n"
                .'            // TODO Auto-generated catch block'."\n"
                .'            e.printStackTrace();'."\n"
                .'        } catch (ClientException e) {'."\n"
                .'            // TODO Auto-generated catch block'."\n"
                .'            e.printStackTrace();'."\n"
                .'        }'."\n"
                .'    }'."\n"
                .'    '."\n"
                .'}'."\n"
                .'   '."\n"
                .' ```',
        ],
        'RerunJob' => [
            'summary' => '重跑任务的历史数据，只有专业版才支持。',
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '特殊第三方才需要填写',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '应用分组ID，在控制台的应用管理页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开始日期时间戳，精确到毫秒',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1645459200000',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '结束日期时间戳，精确到毫秒',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1645718400000',
                    ],
                ],
                [
                    'name' => 'DataTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据时间字符串，格式为HH:mm:ss',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10:00:00',
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
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => 'API执行是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'jobId=xxx is not existed',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"jobId=xxx is not existed\\"\\n}","type":"json"}]',
            'title' => '重刷任务的历史数据',
        ],
        'StopInstance' => [
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID，在控制台的任务管理页面中获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '92583',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运行实例ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '11111111',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
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
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息，仅错误时返回错误信息。',
                                'type' => 'string',
                                'example' => 'Your request is denied as lack of ssl protect.',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Success' => [
                                'description' => '终止任务运行是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：终止任务运行成功。'."\n"
                                    .'- **false**：终止任务运行失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Your request is denied as lack of ssl protect.\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StopInstanceResponse>\\n<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>Your request is denied as lack of ssl protect.</Message>\\n<Code>200</Code>\\n<Success>true</Success>\\n</StopInstanceResponse>","errorExample":""}]',
            'title' => '终止正在运行的实例',
            'summary' => '终止某次正在运行的实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetJobInstance' => [
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                        'description' => '区域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间id，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用id，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID，在控制台的任务管理页面中获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '92583',
                    ],
                ],
                [
                    'name' => 'JobInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务实例ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1685883418',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'jobId=xxx is not existed',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一id',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Success' => [
                                'description' => '获取任务实例详情是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：获取任务实例详情成功。'."\n"
                                    .'- **false**：获取任务实例详情失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => 'instance信息',
                                'type' => 'object',
                                'properties' => [
                                    'JobInstanceDetail' => [
                                        'description' => '任务实例详细信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'Status' => [
                                                'description' => '实例状态。包含以下几种状态：'."\n"
                                                    ."\n"
                                                    .'- **1**：等待 '."\n"
                                                    .'- **3**：运行中 '."\n"
                                                    .'- **4**：成功'."\n"
                                                    .'- **5**：失败 '."\n"
                                                    .'- **9**：拒绝'."\n"
                                                    ."\n"
                                                    .'对应枚举类：'."\n"
                                                    .'com.alibaba.schedulerx.common.domain.InstanceStatus',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '4',
                                            ],
                                            'Progress' => [
                                                'description' => '实例进度详情',
                                                'type' => 'string',
                                                'example' => '{"taskProgress":[{"name":"MAP_TASK_ROOT","total":1,"pulled":1,"running":0,"success":0,"failed":0}],"workerProgress":[{"workerAddr":"11.122.241.245:34865","total":1,"pulled":1,"running":0,"success":0,"failed":0}]}',
                                            ],
                                            'Result' => [
                                                'description' => '实例执行结果',
                                                'type' => 'string',
                                                'example' => '{\'TotalSize\': 31, \'CurrentPage\': 5, \'PageSize\': 10}',
                                            ],
                                            'InstanceId' => [
                                                'description' => '实例id',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1189853849',
                                            ],
                                            'TimeType' => [
                                                'description' => '实例调度时间类型，包含以下几种时间类型：'."\n"
                                                    ."\n"
                                                    .'- **cron**：1'."\n"
                                                    .'- **fix_rate**：3'."\n"
                                                    .'- **second_delay**：4'."\n"
                                                    .'- **api**：100'."\n"
                                                    ."\n"
                                                    .'对应枚举类：com.alibaba.schedulerx.common.domain.TimeType',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'TriggerType' => [
                                                'description' => '触发类型，包含以下几种触发类型：'."\n"
                                                    ."\n"
                                                    .'- **1**：定时调度正常触发'."\n"
                                                    .'- **2**：数据重刷'."\n"
                                                    .'- **3**：API触发'."\n"
                                                    .'- **4**：用户手动点击重跑'."\n"
                                                    .'- **5**：系统重试（系统异常，如DB异常）'."\n"
                                                    ."\n"
                                                    .'对应枚举类：com.alibaba.schedulerx.common.domain.TriggerType',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'EndTime' => [
                                                'description' => '任务执行结束时间',
                                                'type' => 'string',
                                                'example' => '2020-07-27 11:52:10',
                                            ],
                                            'StartTime' => [
                                                'description' => '任务执行开始时间',
                                                'type' => 'string',
                                                'example' => '2020-07-27 11:52:10',
                                            ],
                                            'Executor' => [
                                                'description' => '执行人',
                                                'type' => 'string',
                                                'example' => '张三'."\n",
                                            ],
                                            'JobId' => [
                                                'description' => '任务id',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '92583',
                                            ],
                                            'ScheduleTime' => [
                                                'description' => '计划调度时间',
                                                'type' => 'string',
                                                'example' => '2020-07-27 11:52:10',
                                            ],
                                            'DataTime' => [
                                                'description' => '任务数据时间',
                                                'type' => 'string',
                                                'example' => '2020-07-27 11:52:10',
                                            ],
                                            'WorkAddr' => [
                                                'description' => '被触发客户端ip:port',
                                                'type' => 'string',
                                                'example' => '192.168.0.0:16',
                                            ],
                                            'Parameters' => [
                                                'description' => '任务运行实例参数信息。',
                                                'type' => 'string',
                                                'example' => '{\\"alertId\\":11111}',
                                            ],
                                            'JobName' => [
                                                'description' => '任务名称',
                                                'type' => 'string',
                                                'example' => 'ManualJob',
                                            ],
                                            'TraceId' => [
                                                'description' => '调用链ID，可用于精确查询调用信息。',
                                                'type' => 'string',
                                                'example' => '210e845016596663430048015d0a2c',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"jobId=xxx is not existed\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobInstanceDetail\\": {\\n      \\"Status\\": 4,\\n      \\"Progress\\": \\"{\\\\\\"taskProgress\\\\\\":[{\\\\\\"name\\\\\\":\\\\\\"MAP_TASK_ROOT\\\\\\",\\\\\\"total\\\\\\":1,\\\\\\"pulled\\\\\\":1,\\\\\\"running\\\\\\":0,\\\\\\"success\\\\\\":0,\\\\\\"failed\\\\\\":0}],\\\\\\"workerProgress\\\\\\":[{\\\\\\"workerAddr\\\\\\":\\\\\\"11.122.241.245:34865\\\\\\",\\\\\\"total\\\\\\":1,\\\\\\"pulled\\\\\\":1,\\\\\\"running\\\\\\":0,\\\\\\"success\\\\\\":0,\\\\\\"failed\\\\\\":0}]}\\",\\n      \\"Result\\": \\"{\'TotalSize\': 31, \'CurrentPage\': 5, \'PageSize\': 10}\\",\\n      \\"InstanceId\\": 1189853849,\\n      \\"TimeType\\": 1,\\n      \\"TriggerType\\": 1,\\n      \\"EndTime\\": \\"2020-07-27 11:52:10\\",\\n      \\"StartTime\\": \\"2020-07-27 11:52:10\\",\\n      \\"Executor\\": \\"张三\\\\n\\",\\n      \\"JobId\\": 92583,\\n      \\"ScheduleTime\\": \\"2020-07-27 11:52:10\\",\\n      \\"DataTime\\": \\"2020-07-27 11:52:10\\",\\n      \\"WorkAddr\\": \\"192.168.0.0:16\\",\\n      \\"Parameters\\": \\"{\\\\\\\\\\\\\\"alertId\\\\\\\\\\\\\\":11111}\\",\\n      \\"JobName\\": \\"ManualJob\\",\\n      \\"TraceId\\": \\"210e845016596663430048015d0a2c\\"\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '获取指定任务实例详情',
            'summary' => '返回任务实例的信息，可以查看任务实例的状态和进度。',
        ],
        'GetJobInstanceList' => [
            'methods' => [
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
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的**命名空间**页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '92583',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '查询指定状态的任务实例列表',
                        'description' => '实例状态。包含以下几种状态：'."\n"
                            ."\n"
                            .'1：等待'."\n"
                            .'3：运行中'."\n"
                            .'4：成功'."\n"
                            .'5：失败'."\n"
                            .'9：拒绝'."\n"
                            .'对应枚举类： com.alibaba.schedulerx.common.domain.InstanceStatus',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '开始时间戳（毫秒）',
                        'description' => '开始时间（时间戳）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1684116000000',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '结束时间戳（毫秒）',
                        'description' => '结束时间（时间戳）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1684202400000',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页获取数据，分页号，默认是1',
                        'description' => '分页获取数据，分页号，默认是1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页获取数据，分页大小，默认是10',
                        'description' => '分页获取数据，分页大小，默认是10',
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
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误消息，仅错误时返回错误信息。',
                                'type' => 'string',
                                'example' => 'jobid: 92583 not match groupId: testSchedulerx.defaultGroup',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '704A2A61-3681-5568-92F7-2DFCC53F33D1',
                            ],
                            'Success' => [
                                'description' => '获取任务的执行实例列表是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：获取任务的执行实例列表成功。'."\n"
                                    .'- **false**：获取任务的执行实例列表失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => 'instance列表',
                                'type' => 'object',
                                'properties' => [
                                    'JobInstanceDetails' => [
                                        'description' => '任务实例详细信息',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '实例状态。包含以下几种状态：'."\n"
                                                        ."\n"
                                                        .'- **1**：等待 '."\n"
                                                        .'- **3**：运行中 '."\n"
                                                        .'- **4**：成功'."\n"
                                                        .'- **5**：失败 '."\n"
                                                        .'- **9**：拒绝'."\n"
                                                        ."\n"
                                                        .'对应枚举类：'."\n"
                                                        .'com.alibaba.schedulerx.common.domain.InstanceStatus',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '4',
                                                ],
                                                'Progress' => [
                                                    'description' => '实例进度详情',
                                                    'type' => 'string',
                                                ],
                                                'Result' => [
                                                    'description' => '实例执行结果',
                                                    'type' => 'string',
                                                ],
                                                'InstanceId' => [
                                                    'description' => '实例ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1042499986',
                                                ],
                                                'TimeType' => [
                                                    'description' => '实例调度时间类型，包含以下几种类型：'."\n"
                                                        ."\n"
                                                        .'- **cron**：1'."\n"
                                                        .'- **fix_rate**：3'."\n"
                                                        .'- **second_delay**： 4'."\n"
                                                        .'- **api**：100'."\n"
                                                        ."\n"
                                                        .'对应枚举类：com.alibaba.schedulerx.common.domain.TimeType',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'TriggerType' => [
                                                    'description' => '触发类型，包含以下几种触发类型：'."\n"
                                                        ."\n"
                                                        .'- **1**: 定时调度正常触发'."\n"
                                                        .'- **2**：数据重刷'."\n"
                                                        .'- **3**：API触发'."\n"
                                                        .'- **4**：用户手动点击重跑'."\n"
                                                        .'- **5**：系统重试（系统异常，如DB异常）'."\n"
                                                        ."\n"
                                                        .'对应枚举类：com.alibaba.schedulerx.common.domain.TriggerType',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3',
                                                ],
                                                'EndTime' => [
                                                    'description' => '任务执行结束时间',
                                                    'type' => 'string',
                                                    'example' => '2020-07-27 11:52:10',
                                                ],
                                                'StartTime' => [
                                                    'description' => '任务执行开始时间',
                                                    'type' => 'string',
                                                    'example' => '2020-07-27 11:52:10',
                                                ],
                                                'Executor' => [
                                                    'description' => '执行人',
                                                    'type' => 'string',
                                                    'example' => 'A',
                                                ],
                                                'JobId' => [
                                                    'description' => '任务ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '92583',
                                                ],
                                                'ScheduleTime' => [
                                                    'description' => '任务调度时间',
                                                    'type' => 'string',
                                                    'example' => '2020-07-27 11:52:10',
                                                ],
                                                'DataTime' => [
                                                    'description' => '数据时间',
                                                    'type' => 'string',
                                                    'example' => '2020-07-27 11:52:10',
                                                ],
                                                'WorkAddr' => [
                                                    'description' => '被触发客户端ip:port',
                                                    'type' => 'string',
                                                    'example' => '192.168.0.0:16',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"jobid: 92583 not match groupId: testSchedulerx.defaultGroup\\",\\n  \\"RequestId\\": \\"704A2A61-3681-5568-92F7-2DFCC53F33D1\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobInstanceDetails\\": [\\n      {\\n        \\"Status\\": 4,\\n        \\"Progress\\": \\"\\",\\n        \\"Result\\": \\"\\",\\n        \\"InstanceId\\": 1042499986,\\n        \\"TimeType\\": 1,\\n        \\"TriggerType\\": 3,\\n        \\"EndTime\\": \\"2020-07-27 11:52:10\\",\\n        \\"StartTime\\": \\"2020-07-27 11:52:10\\",\\n        \\"Executor\\": \\"A\\",\\n        \\"JobId\\": 92583,\\n        \\"ScheduleTime\\": \\"2020-07-27 11:52:10\\",\\n        \\"DataTime\\": \\"2020-07-27 11:52:10\\",\\n        \\"WorkAddr\\": \\"192.168.0.0:16\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取指定任务ID的执行实例列表',
            'summary' => '根据关键字过滤，返回任务执行的历史记录。',
        ],
        'RetryJobInstance' => [
            'summary' => '重跑失败或者成功状态的任务实例，只有专业版才支持。',
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
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组ID，在控制台的应用管理页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'JobInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务实例ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123456',
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
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => 'API执行是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'jobId=xxx is not existed',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"jobId=xxx is not existed\\"\\n}","type":"json"}]',
            'title' => '重跑任务实例',
        ],
        'SetJobInstanceSuccess' => [
            'summary' => '强制设置任务实例状态为成功状态，只有专业版才支持。',
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
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组ID，在控制台的应用管理页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'JobInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务实例ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123456',
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
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => 'API执行是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'jobId=xxx is not existed',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"jobId=xxx is not existed\\"\\n}","type":"json"}]',
            'title' => '标记任务实例成功',
        ],
        'GrantPermission' => [
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
                        'docRequired' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间UID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffcdf01',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test.defaultGroup',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '277641081920123456',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'lilei',
                    ],
                ],
                [
                    'name' => 'GrantOption',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许grantoption。取值如下：-**true**：允许。-**false**：不允许。',
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
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'Message' => [
                                'description' => '错误信息，仅出错时返回错误信息。',
                                'type' => 'string',
                                'example' => 'Your request is denied as lack of ssl protect.',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：成功'."\n"
                                    ."\n"
                                    .'- **false**：失败',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 400,\\n  \\"Message\\": \\"Your request is denied as lack of ssl protect.\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": false\\n}","errorExample":""},{"type":"xml","example":"<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>Your request is denied as lack of ssl protect.</Message>\\n<Code>400</Code>\\n<Success>false</Success>","errorExample":""}]',
            'title' => '给指定分组授权',
            'summary' => '给指定分组授权。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RevokePermission' => [
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
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shenzhen',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间UID，在控制台的命名空间页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffcdf01',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的应用管理页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test.defalutGroup',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云账号UID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '277641081920123456',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'Message' => [
                                'description' => '错误消息，仅出错时返回错误信息。',
                                'type' => 'string',
                                'example' => 'Your request is denied as lack of ssl protect.',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：成功'."\n"
                                    ."\n"
                                    .'- **false**：失败',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 400,\\n  \\"Message\\": \\"Your request is denied as lack of ssl protect.\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": false\\n}","errorExample":""},{"type":"xml","example":"<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>Your request is denied as lack of ssl protect.</Message>\\n<Code>400</Code>\\n<Success>false</Success>","errorExample":""}]',
            'title' => '取消指定阿里云子账号的权限',
            'summary' => '取消指定阿里云子账号的权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetLog' => [
            'summary' => '通过该API可以查询任务的运行日志，需要开通专业版才支持。',
            'methods' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的命名空间页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => '特殊第三方才需要填写',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组ID，在控制台的应用管理页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '任务ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'JobInstanceId',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '任务实例ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '开始时间戳，精确到毫秒'."\n"
                            ."\n"
                            .'><notice>开始时间戳不设置，默认取当前时间的30分钟之前></notice>',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1675739364000',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '结束时间戳，精确到毫秒><notice>结束时间戳不设置，默认取当前时间></notice>',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1675739484000',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '关键字',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ERROR',
                    ],
                ],
                [
                    'name' => 'Line',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '行数，最大不超过200行',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '0',
                        'example' => '50',
                        'default' => '50',
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '偏移多少行，可以作为分页查询',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'Reverse',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '是否逆序，默认逆序',
                        'type' => 'boolean',
                        'deprecated' => false,
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
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
                                'description' => '请求唯一ID',
                                'type' => 'string',
                                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => 'API执行是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'jobid=xxx is not existed',
                            ],
                            'Data' => [
                                'description' => '返回的日志封装在data里',
                                'type' => 'object',
                                'properties' => [
                                    'Logs' => [
                                        'description' => 'logs是一个string的数组',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '包含了每一行的日志',
                                            'type' => 'string',
                                            'example' => 'hello world',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"jobid=xxx is not existed\\",\\n  \\"Data\\": {\\n    \\"Logs\\": [\\n      \\"hello world\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询日志',
        ],
        'DeleteRouteStrategy' => [
            'summary' => '删除路由策略。',
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
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的**命名空间**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的**应用管理**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID，在控制台的**任务管理**页面中获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '92583',
                        'default' => '-1',
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
                            'Code' => [
                                'description' => '接口状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息。',
                                'type' => 'string',
                                'example' => 'strategy is already deleted.',
                            ],
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"strategy is already deleted.\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '删除路由策略',
        ],
        'BatchDeleteRouteStrategy' => [
            'summary' => '批量删除路由策略。',
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
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的**命名空间**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID，在控制台的**应用管理**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'JobIdList',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '任务ID列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '任务ID，在控制台的**任务管理**页面中获取',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '99341',
                        ],
                        'required' => false,
                        'maxItems' => 3000,
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '704A2A61-3681-5568-92F7-2DFCC53F33D1',
                            ],
                            'Code' => [
                                'description' => '接口状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息。',
                                'type' => 'string',
                                'example' => 'job is not existed, jobId=162837',
                            ],
                            'Success' => [
                                'description' => '调用接口是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：成功'."\n"
                                    ."\n"
                                    .'- **false**：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"704A2A61-3681-5568-92F7-2DFCC53F33D1\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"job is not existed, jobId=162837\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '批量删除路由策略',
        ],
        'CreateRouteStrategy' => [
            'summary' => '创建路由策略。',
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
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '路由策略名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-strategy',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用分组ID，在控制台的**应用管理**页面中获取',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID，在控制台的**任务管理**页面中获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '54978',
                        'default' => '-1',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '路由策略类型。取值如下：'."\n"
                            .'- **3**：按照比例进行路由。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '路由策略状态，取值如下'."\n"
                            ."\n"
                            .'- **0**：表示禁用'."\n"
                            ."\n"
                            .'- **1**：表示启用',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'StrategyContent',
                    'in' => 'query',
                    'schema' => [
                        'description' => '路由策略详情JSON字段。关于此字段的详细说明参见下文**关于请求参数的补充说明**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"percentage":20,"target":"[\\"version1\\"]","targetType":"label"}]',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命名空间ID，在控制台的**命名空间**页面中获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
                            ],
                            'Code' => [
                                'description' => '接口状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '附加信息，包含报错与提示',
                                'type' => 'string',
                                'example' => 'strategy name is null or empty.',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    ."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"strategy name is null or empty.\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {}\\n}","type":"json"}]',
            'title' => '创建路由策略',
            'requestParamsDescription' => '当路由策略类型为**3**时，路由策略详情字段配置如下：'."\n"
                ."\n"
                .'- **percentage**：调度路由百分比，取值范围为**0-100**，单位为%'."\n"
                ."\n"
                .'- **target**：调度的目标，此处是一个列表，可以配置多个目标，若**targetType**为"**label**"，则列表中配置**label**名称，若**targetType**为"**worker**"，则列表中配置**worker**的IP地址'."\n"
                ."\n"
                .'- **targetType**：调度目标类型，可配置为"**label**"或"**worker**"，表示调度到指定label的机器上或者调度到指定IP的机器上',
        ],
        'GetOverview' => [
            'summary' => '获取专业版应用任务调度概览数据信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域Region ID',
                        'description' => '区域Region ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '命名空间UID',
                        'description' => '命名空间UID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                    ],
                ],
                [
                    'name' => 'NamespaceSource',
                    'in' => 'query',
                    'schema' => [
                        'title' => '',
                        'description' => '命名空间来源，特殊第三方才需要填写',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'schedulerx',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用分组ID',
                        'description' => '应用分组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testSchedulerx.defaultGroup',
                    ],
                ],
                [
                    'name' => 'Operate',
                    'in' => 'query',
                    'schema' => [
                        'title' => '可选项'."\n"
                            .'query:查询区间数据'."\n"
                            .'query_range:查询区间时许数据',
                        'description' => '可选项'."\n"
                            .'query:查询区间数据'."\n"
                            .'query_range:查询区间时许数据',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'query',
                        'enum' => [
                            'query',
                            'query_range',
                        ],
                    ],
                ],
                [
                    'name' => 'MetricType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '可选项'."\n"
                            .'0:任务类基础信息'."\n"
                            .'1:任务运行信息',
                        'description' => '可选项'."\n"
                            .'0:任务类基础信息'."\n"
                            .'1:任务运行信息',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '0',
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '数据起始时间戳（单位：秒），如：1684166400',
                        'description' => '数据起始时间戳（单位：秒），如：1684166400',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1684166400',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据结束时间戳（单位：秒），如：1684166400 '."\n"
                            .'不填默认为当前时间',
                        'description' => '数据结束时间戳（单位：秒），如：1684166400 '."\n"
                            .'不填默认为当前时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1684166400',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => 'API调用是否成功。取值如下：'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'description' => '错误信息，仅出错时返回错误信息。',
                                'type' => 'string',
                                'example' => 'No access permission for the namespace [***]',
                            ],
                            'Data' => [
                                'description' => 'JSON的概览数据信息，对应控制台概览数据内容，如下三种格式类型结果'."\n"
                                    .'- 基础信息'."\n"
                                    .'- 时间区间任务运行信息：'."\n"
                                    .'- 时间区间任务运行时序信息：返回对应区间 任务触发、运行成功、运行失败三个数据项对应时点的统计信息',
                                'type' => 'string',
                                'example' => '基础信息：{"schedulerx_job_counter_disable": "4","schedulerx_job_trigger_counter_running": "0","schedulerx_job_counter_enable": "70","schedulerx_job_counter_all": "74","schedulerx_worker_counter": "2"}',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"No access permission for the namespace [***]\\",\\n  \\"Data\\": \\"基础信息：{\\\\\\"schedulerx_job_counter_disable\\\\\\": \\\\\\"4\\\\\\",\\\\\\"schedulerx_job_trigger_counter_running\\\\\\": \\\\\\"0\\\\\\",\\\\\\"schedulerx_job_counter_enable\\\\\\": \\\\\\"70\\\\\\",\\\\\\"schedulerx_job_counter_all\\\\\\": \\\\\\"74\\\\\\",\\\\\\"schedulerx_worker_counter\\\\\\": \\\\\\"2\\\\\\"}\\"\\n}","type":"json"}]',
            'title' => '获取概览数据信息',
            'requestParamsDescription' => '当前接口查询数据信息对应控制台概览的三块信息内容，相应请求参数配置要求如下'."\n"
                ."\n"
                .'- 任务基础信息：请求参数配置说明如下，Operate设置“query”，MetricType设置为“0”，StartTime设置为当前时间戳'."\n"
                ."\n"
                .'- 时间区间任务运行信息：请求参数配置说明如下，Operate设置“query”，MetricType设置为“1”，StartTime设置为业务需要的查询起始时间（不得早于15天，当前时序数据存储有效期为15天）'."\n"
                ."\n"
                .'- 时间区间任务运行时序信息：请求参数配置说明如下，Operate设置“query_range”，MetricType设置为“1”，StartTime设置为业务需要的查询起始时间（默认推荐当前1小时前，因返回每个时点信息量大不建议设置过早）',
            'responseParamsDescription' => 'Data信息会根据三种数据读取，返回不同格式的JSON内容，参考如下：'."\n"
                .'- 基础信息：'."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "schedulerx_job_counter_disable": "4",  // 禁用任务数'."\n"
                .'  "schedulerx_job_counter_enable": "70", // 启用任务数'."\n"
                .'  "schedulerx_job_counter_all": "74", // 总任务数'."\n"
                .'  "schedulerx_worker_counter": "2", // 在线机器数'."\n"
                .'  "schedulerx_job_trigger_counter_running": "0" // 任务运行中实例数'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'- 时间区间任务运行信息：'."\n"
                .'```'."\n"
                .'{'."\n"
                .'    "schedulerx_job_trigger_counter_success": "227",  // '."\n"
                .'    "schedulerx_job_trigger_counter_all": "225",'."\n"
                .'    "schedulerx_job_trigger_counter_failed": "0"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'- 时间区间任务运行时序信息：返回对应区间 任务触发、运行成功、运行失败三个数据项对应时点的统计信息'."\n"
                ."\n"
                .'```'."\n"
                .'['."\n"
                .'    {'."\n"
                .'      "data": ['."\n"
                .'        ['."\n"
                .'          1686110400000, '."\n"
                .'          4'."\n"
                .'        ],'."\n"
                .'        ['."\n"
                .'          1686110460000,'."\n"
                .'          5'."\n"
                .'        ]'."\n"
                .'      ],'."\n"
                .'      "name": "触发次数"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "data": ['."\n"
                .'        ['."\n"
                .'          1686110400000,'."\n"
                .'          0'."\n"
                .'        ],'."\n"
                .'        ['."\n"
                .'          1686110460000,'."\n"
                .'          0'."\n"
                .'        ]'."\n"
                .'      ],'."\n"
                .'      "name": "执行失败"'."\n"
                .'    },'."\n"
                .'    {'."\n"
                .'      "data": ['."\n"
                .'        ['."\n"
                .'          1686110400000,'."\n"
                .'          4'."\n"
                .'        ],'."\n"
                .'        ['."\n"
                .'          1686110460000,'."\n"
                .'          5'."\n"
                .'        ]'."\n"
                .'      ],'."\n"
                .'      "name": "执行成功"'."\n"
                .'    }'."\n"
                .'  ]'."\n"
                .'```',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'public',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'schedulerx.aliyuncs.com',
        ],
    ],
];
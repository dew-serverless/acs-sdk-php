<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'schedulerx2',
    'version' => '2019-04-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 130044,
      'title' => '服务地域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    1 => 
    array (
      'id' => 167610,
      'title' => '命名空间',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateNamespace',
        1 => 'ListNamespaces',
      ),
    ),
    2 => 
    array (
      'id' => 130046,
      'title' => '应用分组',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAppGroup',
        1 => 'GetAppGroup',
        2 => 'DeleteAppGroup',
        3 => 'UpdateAppGroup',
        4 => 'ListGroups',
        5 => 'GetWorkerList',
      ),
    ),
    3 => 
    array (
      'id' => 130049,
      'title' => '工作流',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateWorkflow',
        1 => 'UpdateWorkflow',
        2 => 'UpdateWorkflowDag',
        3 => 'DeleteWorkflow',
        4 => 'DisableWorkflow',
        5 => 'EnableWorkflow',
        6 => 'GetWorkFlow',
        7 => 'ExecuteWorkflow',
        8 => 'GetWorkflowInstance',
        9 => 'ListWorkflowInstance',
        10 => 'SetWfInstanceSuccess',
      ),
    ),
    4 => 
    array (
      'id' => 130055,
      'title' => '任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateJob',
        1 => 'DeleteJob',
        2 => 'BatchDeleteJobs',
        3 => 'UpdateJob',
        4 => 'DisableJob',
        5 => 'BatchEnableJobs',
        6 => 'BatchDisableJobs',
        7 => 'EnableJob',
        8 => 'GetJobInfo',
        9 => 'ListJobs',
        10 => 'ExecuteJob',
        11 => 'DesignateWorkers',
        12 => 'RerunJob',
      ),
    ),
    5 => 
    array (
      'id' => 130066,
      'title' => '任务实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'StopInstance',
        1 => 'GetJobInstance',
        2 => 'GetJobInstanceList',
        3 => 'RetryJobInstance',
        4 => 'SetJobInstanceSuccess',
      ),
    ),
    6 => 
    array (
      'id' => 167612,
      'title' => '权限设置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GrantPermission',
        1 => 'RevokePermission',
      ),
    ),
    7 => 
    array (
      'id' => 179264,
      'title' => '日志',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetLog',
      ),
    ),
    8 => 
    array (
      'id' => 181204,
      'title' => '路由策略',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteRouteStrategy',
        1 => 'BatchDeleteRouteStrategy',
        2 => 'CreateRouteStrategy',
      ),
    ),
    9 => 
    array (
      'id' => 190137,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetOverview',
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
    'DescribeRegions' => 
    array (
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
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
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息，仅出错时返回错误信息。',
                'type' => 'string',
                'example' => 'disable failed jobs=[99341]',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Success' => 
              array (
                'description' => '调用接口是否成功。取值如下：

- **true**：成功
- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Regions' => 
              array (
                'description' => '可用地域的集合',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionEndpoint' => 
                    array (
                      'description' => '地域对应的接入地址（Endpoint）',
                      'type' => 'string',
                      'example' => 'schedulerx.cn-hangzhou.aliyuncs.com',
                    ),
                    'LocalName' => 
                    array (
                      'description' => '地域的展示名，根据当前语言环境转换',
                      'type' => 'string',
                      'example' => '杭州',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"disable failed jobs=[99341]\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true,\\n  \\"Regions\\": [\\n    {\\n      \\"RegionEndpoint\\": \\"schedulerx.cn-hangzhou.aliyuncs.com\\",\\n      \\"LocalName\\": \\"杭州\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看可选的地域',
      'summary' => '返回可用region列表。',
    ),
    'CreateNamespace' => 
    array (
      'summary' => '创建命名空间。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Uid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间UID，全局唯一，推荐用UUID生成。',
            'type' => 'string',
            'required' => false,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-env',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request。',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息，仅错误时返回错误信息。',
                'type' => 'string',
                'example' => 'namespace=test3 is existed, noting update',
              ),
              'Success' => 
              array (
                'description' => '创建应用是否成功。取值如下：

- **true**：创建应用成功。
- **false**：创建应用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '命名空间信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'NamespaceUid' => 
                  array (
                    'description' => '命名空间唯一标识。',
                    'type' => 'string',
                    'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"namespace=test3 is existed, noting update\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"NamespaceUid\\": \\"adcfc35d-e2fe-4fe9-bbaa-20e90ffc****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建命名空间',
    ),
    'ListNamespaces' => 
    array (
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'NamespaceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx-dev',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间UID',
            'type' => 'string',
            'required' => false,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
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
                'description' => '接口状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息。',
                'type' => 'string',
                'example' => 'message',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID。',
                'type' => 'string',
                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBCB58C',
              ),
              'Success' => 
              array (
                'description' => '调用接口是否成功。取值如下：

- **true**：成功。

- **false**：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '命名空间列表信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Namespaces' => 
                  array (
                    'description' => '命名空间列表与详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '命名空间名称。',
                          'type' => 'string',
                          'example' => 'doc',
                        ),
                        'Description' => 
                        array (
                          'description' => '命名空间描述。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'UId' => 
                        array (
                          'description' => '命名空间ID。',
                          'type' => 'string',
                          'example' => '1a72ecb1-b4cc-400a-a71b-20cdec9b****',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"message\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBCB58C\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Namespaces\\": [\\n      {\\n        \\"Name\\": \\"doc\\",\\n        \\"Description\\": \\"test\\",\\n        \\"UId\\": \\"1a72ecb1-b4cc-400a-a71b-20cdec9b****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListNamespacesResponse>\\n<Message>You have an error in your SQL syntax</Message>\\n<RequestId>71BCC0E3-64B2-4B63-A870-AFB64EBCB58C</RequestId>\\n<Data>\\n    <Namespaces>\\n        <UId>1a72ecb1-b4cc-400a-a71b-20cdec9b****</UId>\\n        <Description>test</Description>\\n        <Name>doc</Name>\\n    </Namespaces>\\n</Data>\\n<Code/>\\n<Success>true</Success>\\n</ListNamespacesResponse>","errorExample":""}]',
      'title' => '获取命名空间列表',
      'summary' => '获取命名空间列表。',
      'description' => '在调用该接口前，需要在POM文件添加以下依赖：

```
<dependency>
    <groupId>com.aliyun</groupId>
    <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
    <version>1.0.5</version>
</dependency>
```',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## Demo
```
package com.alibaba.schedulerx.pop;

import java.util.List;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.exceptions.ClientException;
import com.aliyuncs.exceptions.ServerException;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.ListNamespacesRequest;
import com.aliyuncs.schedulerx2.model.v20190430.ListNamespacesResponse;
import com.aliyuncs.schedulerx2.model.v20190430.ListNamespacesResponse.Data.Namespace;

public class TestListNamespaces {

    public static void main(String[] args) {
        //OpenAPI的接入点，具体查看支持地域列表以及购买机器地域填写。
        String regionId = "cn-test";
        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。
        String accessKeyId = "XXXXXXXX";
        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。
        String accessKeySecret = "XXXXXXXX";
        //产品名称。
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写。
        String domain ="schedulerx.aliyuncs.com";
        //构建OpenAPI客户端。
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);
        
        ListNamespacesRequest request = new ListNamespacesRequest();
        ListNamespacesResponse response;
        try {
            response = client.getAcsResponse(request);
            if (!response.getSuccess()) {
                System.out.println(response.getMessage());
            } else {
                List<Namespace> namespaces = response.getData().getNamespaces();
                for (Namespace namespace : namespaces) {
                    System.out.println("namespace uid=" + namespace.getUId());
                }
            }
        } catch (ServerException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        } catch (ClientException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }
    }
    
}

``` ',
    ),
    'CreateAppGroup' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DocTest',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '暂不支持，无须填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TestSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test',
          ),
        ),
        6 => 
        array (
          'name' => 'MaxJobs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大任务数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1000',
          ),
        ),
        7 => 
        array (
          'name' => 'NamespaceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'Test',
          ),
        ),
        8 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用Appkey。',
            'type' => 'string',
            'required' => false,
            'example' => 'adcExHZviLcl****',
          ),
        ),
        9 => 
        array (
          'name' => 'MonitorConfigJson',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警配置JSON字段。关于此字段的详细说明参见下文**关于请求参数的补充说明**。',
            'type' => 'string',
            'required' => false,
            'example' => '{"sendChannel":"sms,ding"}',
          ),
        ),
        10 => 
        array (
          'name' => 'MonitorContactsJson',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '报警联系人JSON格式。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"userName":"张三","userPhone":"89756******"},{"userName":"李四","ding":"http://www.example.com"}]',
          ),
        ),
        11 => 
        array (
          'name' => 'ScheduleBusyWorkers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否调度繁忙机器。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'true',
          ),
        ),
        12 => 
        array (
          'name' => 'EnableLog',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启日志。

- true：开启

- false：关闭',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        13 => 
        array (
          'name' => 'AppType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用类型。

- 1、普通应用。
- 2、k8s应用。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'AppVersion',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用版本，1:基础版，2:专业版',
            'description' => '应用版本，1:基础版，2:专业版',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
            'default' => '2',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
            ),
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
                'description' => '返回码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息，仅错误时返回错误信息。',
                'type' => 'string',
                'example' => 'Your request is denied as lack of ssl protect.',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID。',
                'type' => 'string',
                'example' => '883AFE93-FB03-4FA9-A958-E750C6DE120C',
              ),
              'Success' => 
              array (
                'description' => '创建应用是否成功。取值如下：

- **true**：创建应用成功。
- **false**：创建应用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '任务分组信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppGroupId' => 
                  array (
                    'description' => '任务分组ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '6607',
                  ),
                  'AppKey' => 
                  array (
                    'description' => '应用AppKey。',
                    'type' => 'string',
                    'example' => 'adcExHZviL******',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Your request is denied as lack of ssl protect.\\",\\n  \\"RequestId\\": \\"883AFE93-FB03-4FA9-A958-E750C6DE120C\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AppGroupId\\": 6607,\\n    \\"AppKey\\": \\"adcExHZviL******\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateAppGroupResponse>\\n<RequestId>883AFE93-FB03-4FA9-A958-E750C6DE120C</RequestId>\\n<Message>Your request is denied as lack of ssl protect.</Message>\\n<Data>\\n    <AppGroupId>6607</AppGroupId>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</CreateAppGroupResponse>","errorExample":""}]',
      'title' => '创建应用分组',
      'summary' => '创建应用分组，返回appKey。',
      'requestParamsDescription' => '**关于请求参数的补充说明** 

报警通道如下，配置多个逗号分隔。

- webhook：ding

- 短信：sms

- 邮件：mail

- 电话：phone

例如：{"sendChannel":"ding,sms,mail,phone"}',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 示例Demo

```
package com.alibaba.schedulerx.pop;

import com.alibaba.schedulerx.common.util.JsonUtil;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.CreateAppGroupRequest;
import com.aliyuncs.schedulerx2.model.v20190430.CreateAppGroupResponse;

public class TestCreateAppGroup {

    public static void main(String[] args) throws Exception {
        // OpenAPI的接入点，具体查看上表支持地域列表以及购买机器地域填写。
        String regionId = "cn-shanghai";
        //鉴权使用的AccessKeyId，由阿里云官网控制台获取。
        String accessKeyId = "<yourAccessKeyId>";
        //鉴权使用的AccessKeySecret，由阿里云官网控制台获取。
        String accessKeySecret = "<yourAccessKeySecret>";
        //产品名称
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写。
        String domain ="schedulerx.cn-shanghai.aliyuncs.com";
        //构建OpenAPI客户端。
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);
        
        CreateAppGroupRequest request = new CreateAppGroupRequest();
        request.setNamespace("xxxxxx");
        request.setNamespaceName("xxxx");
        request.setAppName("xxxx");
        request.setDescription("xxx");
        request.setGroupId("xxx");

        //发送请求。
        CreateAppGroupResponse response = client.getAcsResponse(request);
        if (!response.getSuccess()) {
            System.out.println(response.getMessage());
            System.out.println("createApp: "+response.getRequestId());
        } else {
            System.out.println(JsonUtil.toJson(response));
        }
    }
    
}
```',
    ),
    'GetAppGroup' => 
    array (
      'summary' => '获取应用分组。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的**应用管理**页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的**命名空间**页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
              ),
              'Code' => 
              array (
                'description' => '接口状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息。',
                'type' => 'string',
                'example' => 'app is not existed, groupId=xxxx, namesapce=xxxx',
              ),
              'Success' => 
              array (
                'description' => '调用接口是否成功。取值如下：

- **true**：成功

- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '应用分组信息',
                'type' => 'object',
                'properties' => 
                array (
                  'AppName' => 
                  array (
                    'description' => '应用名称',
                    'type' => 'string',
                    'example' => 'DocTest',
                  ),
                  'Description' => 
                  array (
                    'description' => '应用描述',
                    'type' => 'string',
                    'example' => 'Test',
                  ),
                  'MaxJobs' => 
                  array (
                    'description' => '应用分组可配置最大任务数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1000',
                  ),
                  'GroupId' => 
                  array (
                    'description' => '应用ID',
                    'type' => 'string',
                    'example' => 'testSchedulerx.defaultGroup',
                  ),
                  'MonitorConfigJson' => 
                  array (
                    'description' => '报警配置JSON字段。关于此字段的详细说明参见下文**关于返回参数的补充说明**。',
                    'type' => 'string',
                    'example' => '{"sendChannel":"sms,mail,ding"}',
                  ),
                  'CurJobs' => 
                  array (
                    'description' => '应用分组当前配置任务数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'AppKey' => 
                  array (
                    'description' => '应用AppKey',
                    'type' => 'string',
                    'example' => 'QI4lWMZ+xk1rNB67jFUhaw==',
                  ),
                  'AppVersion' => 
                  array (
                    'title' => '应用版本，1:基础版，2:专业版',
                    'description' => '应用版本，1:基础版，2:专业版',
                    'type' => 'string',
                    'example' => '2',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"app is not existed, groupId=xxxx, namesapce=xxxx\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AppName\\": \\"DocTest\\",\\n    \\"Description\\": \\"Test\\",\\n    \\"MaxJobs\\": 1000,\\n    \\"GroupId\\": \\"testSchedulerx.defaultGroup\\",\\n    \\"MonitorConfigJson\\": \\"{\\\\\\"sendChannel\\\\\\":\\\\\\"sms,mail,ding\\\\\\"}\\",\\n    \\"CurJobs\\": 1,\\n    \\"AppKey\\": \\"QI4lWMZ+xk1rNB67jFUhaw==\\",\\n    \\"AppVersion\\": \\"2\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取应用分组详情',
      'responseParamsDescription' => '报警通道如下，配置多个逗号分隔。

- webhook：ding

- 短信：sms

- 邮件：mail

- 电话：phone

例如：{"sendChannel":"ding,sms,mail,phone"}',
    ),
    'DeleteAppGroup' => 
    array (
      'summary' => '删除应用分组。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的**命名空间**页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的**应用管理**页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        3 => 
        array (
          'name' => 'DeleteJobs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否删除应用分组中的任务。取值如下：

- **true**：删除。
- **false**：不删除。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Code' => 
              array (
                'description' => '接口状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'app is not existed, groupId=xxxx, namesapce=xxxx',
              ),
              'Success' => 
              array (
                'description' => 'API调用是否成功。取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"app is not existed, groupId=xxxx, namesapce=xxxx\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '删除应用分组',
    ),
    'UpdateAppGroup' => 
    array (
      'summary' => '更新应用分组。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的**应用管理**页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxConcurrency',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大同时运行实例数量，默认值为1，即上次触发没有运行结束，即使到了运行时刻也不会进行下次触发。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的**命名空间**页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'AppVersion',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用版本，1:基础版，2:专业版',
            'description' => '应用版本，1:基础版，2:专业版',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
            'default' => '2',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Code' => 
              array (
                'description' => '接口状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息',
                'type' => 'string',
                'example' => 'app is not existed, groupId=xxxx, namesapce=xxxx',
              ),
              'Success' => 
              array (
                'description' => 'API执行是否成功。取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"app is not existed, groupId=xxxx, namesapce=xxxx\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '更新应用分组',
    ),
    'ListGroups' => 
    array (
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，在控制台的**命名空间**页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1a72ecb1-b4cc-400a-a71b-20cdec9b****',
          ),
        ),
        1 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'AppGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用分组名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'k8s-test',
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
                'description' => '接口状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息。',
                'type' => 'string',
                'example' => 'message',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID。',
                'type' => 'string',
                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBCB58A',
              ),
              'Success' => 
              array (
                'description' => '调用接口是否成功。取值如下：

- **true**：成功

- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '应用列表信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppGroups' => 
                  array (
                    'description' => '应用列表和应用详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AppGroupId' => 
                        array (
                          'description' => '应用分组ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'AppName' => 
                        array (
                          'description' => '应用名称。',
                          'type' => 'string',
                          'example' => 'DocTest',
                        ),
                        'AppKey' => 
                        array (
                          'description' => '应用Key。',
                          'type' => 'string',
                          'example' => 'a3G77O6NZxq/lyo1NC****==',
                        ),
                        'Description' => 
                        array (
                          'description' => '应用描述。',
                          'type' => 'string',
                          'example' => 'Test',
                        ),
                        'GroupId' => 
                        array (
                          'description' => '应用ID。',
                          'type' => 'string',
                          'example' => 'DocTest.Group',
                        ),
                        'AppVersion' => 
                        array (
                          'title' => '应用版本，1:基础版，2:专业版',
                          'description' => '应用版本，1:基础版，2:专业版',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"message\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBCB58A\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AppGroups\\": [\\n      {\\n        \\"AppGroupId\\": 1,\\n        \\"AppName\\": \\"DocTest\\",\\n        \\"AppKey\\": \\"a3G77O6NZxq/lyo1NC****==\\",\\n        \\"Description\\": \\"Test\\",\\n        \\"GroupId\\": \\"DocTest.Group\\",\\n        \\"AppVersion\\": 2\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListGroupsResponse>\\n<Message>namespace can not find namespace: 1a72ecb1-b4cc-400a-a71b-20cdec9b****, namespaceSource:null</Message>\\n<RequestId>71BCC0E3-64B2-4B63-A870-AFB64EBCB58A</RequestId>\\n<Data>\\n    <AppGroups>\\n        <Description>Test</Description>\\n        <AppKey>a3G77O6NZxq/lyo1NC****==</AppKey>\\n        <GroupId>DocTest.Group</GroupId>\\n        <AppName>DocTest</AppName>\\n    </AppGroups>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</ListGroupsResponse>","errorExample":""}]',
      'title' => '获取应用分组列表',
      'summary' => '获取应用列表。',
      'description' => '在调用该接口前，需要在POM文件添加以下依赖：

```xml
<dependency>
    <groupId>com.aliyun</groupId>
    <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
    <version>1.0.5</version>
</dependency>
```',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## Demo
```
package com.alibaba.schedulerx.pop;

import java.util.List;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.exceptions.ClientException;
import com.aliyuncs.exceptions.ServerException;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.ListGroupsRequest;
import com.aliyuncs.schedulerx2.model.v20190430.ListGroupsResponse;
import com.aliyuncs.schedulerx2.model.v20190430.ListGroupsResponse.Data.AppGroup;

public class TestListGroups {

    public static void main(String[] args) {
        //OpenAPI的接入点，具体查看支持地域列表以及购买机器地域填写。
        String regionId = "cn-hangzhou";
        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。
        String accessKeyId = "XXXXXXXX";
        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。
        String accessKeySecret = "XXXXXXXX";
        //产品名称。
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写 
        String domain ="schedulerx.cn-hangzhou.aliyuncs.com";
        //构建OpenAPI客户端。
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);
        
        ListGroupsRequest request = new ListGroupsRequest();
        //命名空间ID。
        request.setNamespace("433d8b23-06e9-408c-aaaa-90d4d1b9****");
        ListGroupsResponse response;
        try {
            response = client.getAcsResponse(request);
            if (!response.getSuccess()) {
                System.out.println(response.getMessage());
            } else {
                List<AppGroup> appGroups = response.getData().getAppGroups();
                for (AppGroup appGroup : appGroups) {
                    System.out.println("groupId=" + appGroup.getGroupId() + ", appKey=" + appGroup.getAppKey());
                }
            }
        } catch (ServerException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        } catch (ClientException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }
    }
    
}

``` ',
    ),
    'GetWorkerList' => 
    array (
      'summary' => '获取接入某个应用的worker列表。',
      'methods' => 
      array (
        0 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '权限组ID',
            'type' => 'string',
            'required' => true,
            'example' => 'usercenter',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        3 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108****',
              ),
              'Code' => 
              array (
                'description' => '接口状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息。',
                'type' => 'string',
                'example' => 'Cannot find product according to your domain.',
              ),
              'Success' => 
              array (
                'description' => '调用接口是否成功。取值如下：

- **true**：成功

- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '指定任务信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'WorkerInfos' => 
                  array (
                    'description' => 'worker信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Ip' => 
                        array (
                          'description' => 'worker的ip',
                          'type' => 'string',
                          'example' => '30.225.16.49',
                        ),
                        'Port' => 
                        array (
                          'description' => 'worker的端口',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '60831',
                        ),
                        'WorkerAddress' => 
                        array (
                          'description' => 'worker的地址信息，格式为${worker_id}@${worker_ip}:${worker_port}',
                          'type' => 'string',
                          'example' => '030225016049_11734_25917@30.225.16.49:60831',
                        ),
                        'Label' => 
                        array (
                          'description' => 'worker的标签',
                          'type' => 'string',
                          'example' => 'gray',
                        ),
                        'Version' => 
                        array (
                          'description' => 'worker的版本',
                          'type' => 'string',
                          'example' => '1.3.4',
                        ),
                        'Starter' => 
                        array (
                          'description' => 'worker的启动方式',
                          'type' => 'string',
                          'example' => 'springboot',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108****\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Cannot find product according to your domain.\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"WorkerInfos\\": [\\n      {\\n        \\"Ip\\": \\"30.225.16.49\\",\\n        \\"Port\\": 60831,\\n        \\"WorkerAddress\\": \\"030225016049_11734_25917@30.225.16.49:60831\\",\\n        \\"Label\\": \\"gray\\",\\n        \\"Version\\": \\"1.3.4\\",\\n        \\"Starter\\": \\"springboot\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取接入某个应用的worker列表',
    ),
    'CreateWorkflow' => 
    array (
      'summary' => '创建工作流，默认禁用状态，更新完DAG后，需要手动或者通过API启动用工作流，只有专业版才支持。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用分组ID，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流名称',
            'type' => 'string',
            'required' => true,
            'example' => 'helloworld',
          ),
        ),
        5 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流描述',
            'type' => 'string',
            'required' => false,
            'example' => 'Test',
          ),
        ),
        6 => 
        array (
          'name' => 'TimeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '时间类型，目前支持以下几种时间类型：
- cron：1
- api：100',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'TimeExpression',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '时间表达式，根据选择的时间类型设置时间表达式。

- cron：填写标准的cron表达式，支持在线验证。
- api：无时间表达式。',
            'type' => 'string',
            'required' => false,
            'example' => '0 0/10 * * * ?',
          ),
        ),
        8 => 
        array (
          'name' => 'Timezone',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '时区',
            'type' => 'string',
            'required' => false,
            'example' => 'GMT+8',
          ),
        ),
        9 => 
        array (
          'name' => 'MaxConcurrency',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '最大同时运行工作流实例数量，默认值为1，即上次触发没有运行结束，即使到了运行时刻也不会进行下次触发。',
            'type' => 'integer',
            'format' => 'int32',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求唯一ID。',
                'type' => 'string',
                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '创建工作流是否成功。取值如下：

- true：创建工作流成功。
- false：创建工作流失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'timetype is invalid',
              ),
              'Data' => 
              array (
                'description' => '创建工作流的返回值',
                'type' => 'object',
                'properties' => 
                array (
                  'WorkflowId' => 
                  array (
                    'description' => '工作流ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '92583',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"timetype is invalid\\",\\n  \\"Data\\": {\\n    \\"WorkflowId\\": 92583\\n  }\\n}","type":"json"}]',
      'title' => '创建工作流',
    ),
    'UpdateWorkflow' => 
    array (
      'summary' => '更新工作流的基本信息，只有专业版才支持。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用分组ID，在控制台的应用管理页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'WorkflowId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
        5 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流名称',
            'type' => 'string',
            'required' => false,
            'example' => 'helloworld',
          ),
        ),
        6 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流描述',
            'type' => 'string',
            'required' => false,
            'example' => 'Test',
          ),
        ),
        7 => 
        array (
          'name' => 'TimeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '时间类型，目前支持以下几种时间类型：

- cron：1
- api：100',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'TimeExpression',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '时间表达式，根据选择的时间类型设置时间表达式。

- cron：填写标准的cron表达式，支持在线验证。
- api：无时间表达式。',
            'type' => 'string',
            'required' => false,
            'example' => '0 0/10 * * * ?',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => 'api执行是否成功。取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'timetype is invalid',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"timetype is invalid\\"\\n}","type":"json"}]',
      'title' => '更新工作流的基本信息',
    ),
    'UpdateWorkflowDag' => 
    array (
      'summary' => '更新工作流的节点及依赖关系，专业版应用才支持。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用分组ID，在控制台的应用管理页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'WorkflowId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
        5 => 
        array (
          'name' => 'DagJson',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流DAG信息，包括了Node和Edge的信息，json格式',
            'type' => 'string',
            'required' => true,
            'example' => '{"nodes":[{"id":2300691},{"id":10518089},{"id":1758851}],"edges":[{"source":10518089,"target":1758851},{"source":10518089,"target":2300691}]}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => 'API执行是否成功。取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'workflowId=xxxx is not existed',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"workflowId=xxxx is not existed\\"\\n}","type":"json"}]',
      'title' => '更新工作流的DAG',
    ),
    'DeleteWorkflow' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkflowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '111',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的**应用管理**页面中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'description' => '返回码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误消息，仅错误时返回错误信息。',
                'type' => 'string',
                'example' => 'Your request is denied as lack of ssl protect.',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID。',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Success' => 
              array (
                'description' => '删除工作流是否成功。取值如下：

- **true**：删除工作流成功。
- **false**：删除工作流失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Your request is denied as lack of ssl protect.\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '删除指定工作流',
      'summary' => '删除指定工作流。',
    ),
    'DisableWorkflow' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkflowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '111',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误消息，仅错误时返回错误信息。',
                'type' => 'string',
                'example' => 'Your request is denied as lack of ssl protect.',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Success' => 
              array (
                'description' => '禁用工作流是否成功。取值如下：

- **true**：禁用工作流成功。
- **false**：禁用工作流失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Your request is denied as lack of ssl protect.\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DisableWorkflowResponse>\\n<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>Your request is denied as lack of ssl protect.</Message>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DisableWorkflowResponse>","errorExample":""}]',
      'title' => '禁用指定工作流',
      'summary' => '禁用指定工作流。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableWorkflow' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'WorkflowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '111',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息，仅错误时返回错误信息。',
                'type' => 'string',
                'example' => 'Your request is denied as lack of ssl protect.',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Success' => 
              array (
                'description' => '启用工作流是否成功。取值如下：

- **true**：启用工作流成功。
- **false**：启用工作流失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Your request is denied as lack of ssl protect.\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<EnableWorkflowResponse>\\n<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>Your request is denied as lack of ssl protect.</Message>\\n<Code>200</Code>\\n<Success>true</Success>\\n</EnableWorkflowResponse>","errorExample":""}]',
      'title' => '启用指定工作流',
      'summary' => '启用指定工作流。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetWorkFlow' => 
    array (
      'summary' => '获取工作流信息。',
      'methods' => 
      array (
        0 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
            'type' => 'string',
            'required' => true,
            'example' => 'public',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '命名空间uid',
            'description' => '命名空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '4a06d5ea-f576-4326-842c-fb14ea043d8d',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '命名空间来源',
            'description' => '命名空间来源',
            'type' => 'string',
            'required' => false,
            'example' => 'source',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用分组ID',
            'description' => '应用分组ID',
            'type' => 'string',
            'required' => true,
            'example' => 'hxm.test',
          ),
        ),
        4 => 
        array (
          'name' => 'WorkflowId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '工作流ID',
            'description' => '工作流ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '45678xxx',
              ),
              'Code' => 
              array (
                'title' => '错误码',
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'workflow is not existed',
              ),
              'Success' => 
              array (
                'title' => '会否成功',
                'description' => '结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'title' => '工作流的数据',
                'description' => '工作流的数据',
                'type' => 'object',
                'properties' => 
                array (
                  'WorkFlowInfo' => 
                  array (
                    'title' => '工作流基本信息',
                    'description' => '工作流基本信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'WorkflowId' => 
                      array (
                        'title' => '工作流ID',
                        'description' => '工作流ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1234xxx',
                      ),
                      'Name' => 
                      array (
                        'title' => '工作流名称',
                        'description' => '工作流名称',
                        'type' => 'string',
                        'example' => 'workflow_111',
                      ),
                      'Description' => 
                      array (
                        'title' => '工作流描述',
                        'description' => '工作流描述',
                        'type' => 'string',
                        'example' => 'my first workflow',
                      ),
                      'Status' => 
                      array (
                        'title' => '工作流状态',
                        'description' => '工作流状态',
                        'type' => 'string',
                        'example' => '成功',
                      ),
                      'TimeType' => 
                      array (
                        'title' => '工作流时间类型',
                        'description' => '工作流时间类型',
                        'type' => 'string',
                        'example' => 'cron',
                      ),
                      'TimeExpression' => 
                      array (
                        'title' => '工作流时间表达式',
                        'description' => '工作流时间表达式',
                        'type' => 'string',
                        'example' => '0 0 2 * * ?',
                      ),
                    ),
                  ),
                  'WorkFlowNodeInfo' => 
                  array (
                    'title' => '工作流节点信息',
                    'description' => '工作流节点信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Nodes' => 
                      array (
                        'title' => '工作流节点列表',
                        'description' => '工作流节点列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Id' => 
                            array (
                              'title' => '任务ID',
                              'description' => '任务ID',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '123456xxx',
                            ),
                            'Label' => 
                            array (
                              'title' => '任务名称',
                              'description' => '任务名称',
                              'type' => 'string',
                              'example' => 'job_111',
                            ),
                            'Status' => 
                            array (
                              'title' => '任务状态',
                              'description' => '任务状态',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                          ),
                        ),
                      ),
                      'Edges' => 
                      array (
                        'title' => '工作流边列表',
                        'description' => '工作流边列表',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Source' => 
                            array (
                              'title' => '起始任务ID',
                              'description' => '起始任务ID',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '100',
                            ),
                            'Target' => 
                            array (
                              'title' => '目的任务ID',
                              'description' => '目的任务ID',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '200',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"45678xxx\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"workflow is not existed\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"WorkFlowInfo\\": {\\n      \\"WorkflowId\\": 0,\\n      \\"Name\\": \\"workflow_111\\",\\n      \\"Description\\": \\"my first workflow\\",\\n      \\"Status\\": \\"成功\\",\\n      \\"TimeType\\": \\"cron\\",\\n      \\"TimeExpression\\": \\"0 0 2 * * ?\\"\\n    },\\n    \\"WorkFlowNodeInfo\\": {\\n      \\"Nodes\\": [\\n        {\\n          \\"Id\\": 0,\\n          \\"Label\\": \\"job_111\\",\\n          \\"Status\\": 1\\n        }\\n      ],\\n      \\"Edges\\": [\\n        {\\n          \\"Source\\": 100,\\n          \\"Target\\": 200\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetWorkFlowResponse>\\n    <RequestId>45678xxx</RequestId>\\n    <Code>200</Code>\\n    <Message>workflow is not existed</Message>\\n    <Success>true</Success>\\n    <Data>\\n        <WorkFlowInfo>\\n            <Name>workflow_111</Name>\\n            <Description>my first workflow</Description>\\n            <Status>成功</Status>\\n            <TimeType>cron</TimeType>\\n            <TimeExpression>0 0 2 * * ?</TimeExpression>\\n        </WorkFlowInfo>\\n        <WorkFlowNodeInfo>\\n            <Nodes>\\n                <Label>job_111</Label>\\n                <Status>1</Status>\\n            </Nodes>\\n            <Edges>\\n                <Source>100</Source>\\n                <Target>200</Target>\\n            </Edges>\\n        </WorkFlowNodeInfo>\\n    </Data>\\n</GetWorkFlowResponse>","errorExample":""}]',
      'title' => '获取工作流详情和依赖关系',
      'extraInfo' => '##  示例Demo
```
package com.alibaba.schedulerx.pop;

import com.alibaba.schedulerx.common.util.JsonUtil;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.exceptions.ClientException;
import com.aliyuncs.exceptions.ServerException;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.GetWorkFlowRequest;
import com.aliyuncs.schedulerx2.model.v20190430.GetWorkFlowResponse;

public class TestGetWorkFlow {

    public static void main(String[] args) {
     // OpenAPI的接入点，具体请查看支持地域列表或根据购买地域填写
        String regionId = "public";
      //鉴权使用的AccessKey ID，由阿里云官网控制台获取
        String accessKeyId = "xxxxxxx";
        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取
        String accessKeySecret = "xxxxxxxxx";
        //产品名称
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写
        String domain ="schedulerx.aliyuncs.com";
        //构建OpenAPI客户端
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);
        
        GetWorkFlowRequest request = new GetWorkFlowRequest();
        request.setNamespace("433d8b23-06e9-408c-aaaa-90d4d1b9a4af");
        request.setGroupId("xuren_test");
        request.setWorkflowId(29L);
        GetWorkFlowResponse response;
        try {
            response = client.getAcsResponse(request);
            if (!response.getSuccess()) {
                System.out.println(JsonUtil.toJson(response));
            } else {
                System.out.println("工作流基本信息：" + response.getData().getWorkFlowInfo());
                System.out.println("工作流节点信息：" + response.getData().getWorkFlowNodeInfo());
            }
        } catch (ServerException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        } catch (ClientException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }
    }
    
}
   
 ```',
    ),
    'ExecuteWorkflow' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'WorkflowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '111',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceParameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流实例动态参数，不超过1000字节。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'test',
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
                'description' => '返回码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误消息，仅错误时返回错误信息。',
                'type' => 'string',
                'example' => 'Cannot find product according to your domain.',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID。',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '如果调用成功，会返回流程实例ID。',
                'type' => 'object',
                'properties' => 
                array (
                  'WfInstanceId' => 
                  array (
                    'description' => '工作流实例ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '111111',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Cannot find product according to your domain.\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"WfInstanceId\\": 111111\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ExecuteWorkflowResponse>\\n<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>Cannot find product according to your domain.</Message>\\n<Data>\\n    <WfInstanceId>111111</WfInstanceId>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</ExecuteWorkflowResponse>","errorExample":""}]',
      'title' => '触发一次工作流',
      'summary' => '触发一次工作流立即运行。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetWorkflowInstance' => 
    array (
      'summary' => '获取指定工作流实例的详情，包含实例状态，依赖关系，每个任务实例的状态等。专业版应用才支持。',
      'methods' => 
      array (
        0 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用分组ID，在控制台的应用管理页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'WorkflowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123',
          ),
        ),
        5 => 
        array (
          'name' => 'WfInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流实例ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => 'API执行是否成功。取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'workflowId=xxx is not existed',
              ),
              'Data' => 
              array (
                'description' => '工作流实例详情封装在data中',
                'type' => 'object',
                'properties' => 
                array (
                  'WfInstanceInfo' => 
                  array (
                    'description' => '工作流实例详情，包含了工作流的状态，开始结束时间，各个任务实例的状态及依赖关系',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => '工作流实例状态，取值如下：

- 1: 等待中
- 2: 准备中
- 3：运行中
- 4：成功
- 5：失败',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '5',
                      ),
                      'StartTime' => 
                      array (
                        'description' => '开始时间',
                        'type' => 'string',
                        'example' => '2023-01-03 18:00:01',
                      ),
                      'EndTime' => 
                      array (
                        'description' => '结束时间',
                        'type' => 'string',
                        'example' => '2023-01-03 18:00:21',
                      ),
                      'ScheduleTime' => 
                      array (
                        'description' => '计划调度时间',
                        'type' => 'string',
                        'example' => '2023-01-03 18:00:00',
                      ),
                      'DataTime' => 
                      array (
                        'description' => '数据时间',
                        'type' => 'string',
                        'example' => '2023-01-03 18:00:00',
                      ),
                    ),
                  ),
                  'WfInstanceDag' => 
                  array (
                    'description' => '工作流实例的DAG信息，包含了节点和边',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Nodes' => 
                      array (
                        'description' => '任务实例节点的数组',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'JobInstanceId' => 
                            array (
                              'description' => '任务实例ID',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '24058796',
                            ),
                            'JobId' => 
                            array (
                              'description' => '任务ID',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1472',
                            ),
                            'StartTime' => 
                            array (
                              'description' => '任务开始时间',
                              'type' => 'string',
                              'example' => '2023-01-03 18:00:03',
                            ),
                            'EndTime' => 
                            array (
                              'description' => '任务结束时间',
                              'type' => 'string',
                              'example' => '2023-01-03 18:00:21',
                            ),
                            'ScheduleTime' => 
                            array (
                              'description' => '任务调度时间',
                              'type' => 'string',
                              'example' => '2023-01-03 18:00:03',
                            ),
                            'DataTime' => 
                            array (
                              'description' => '任务数据时间',
                              'type' => 'string',
                              'example' => '2023-01-03 18:00:00',
                            ),
                            'WorkAddr' => 
                            array (
                              'description' => '任务实例的运行机器',
                              'type' => 'string',
                              'example' => '10.163.0.101:34027',
                            ),
                            'Result' => 
                            array (
                              'description' => '任务运行结果',
                              'type' => 'string',
                              'example' => 'code=200',
                            ),
                            'Attempt' => 
                            array (
                              'description' => '任务失败重试次数',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'Status' => 
                            array (
                              'description' => '实例状态。包含以下几种状态：
1：等待
3：运行中
4：成功
5：失败
9：拒绝
对应枚举类： com.alibaba.schedulerx.common.domain.InstanceStatus',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '4',
                            ),
                            'JobName' => 
                            array (
                              'description' => '任务名称',
                              'type' => 'string',
                              'example' => 'TestJob',
                            ),
                          ),
                        ),
                      ),
                      'Edges' => 
                      array (
                        'description' => '任务实例依赖关系的数组',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '通过source->target描述依赖关系，source=0表示根节点',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Source' => 
                            array (
                              'description' => '依赖关系的上游，0表示根节点',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '24058798',
                            ),
                            'Target' => 
                            array (
                              'description' => '依赖关系的下游',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '24058796',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"workflowId=xxx is not existed\\",\\n  \\"Data\\": {\\n    \\"WfInstanceInfo\\": {\\n      \\"Status\\": 5,\\n      \\"StartTime\\": \\"2023-01-03 18:00:01\\",\\n      \\"EndTime\\": \\"2023-01-03 18:00:21\\",\\n      \\"ScheduleTime\\": \\"2023-01-03 18:00:00\\",\\n      \\"DataTime\\": \\"2023-01-03 18:00:00\\"\\n    },\\n    \\"WfInstanceDag\\": {\\n      \\"Nodes\\": [\\n        {\\n          \\"JobInstanceId\\": 24058796,\\n          \\"JobId\\": 1472,\\n          \\"StartTime\\": \\"2023-01-03 18:00:03\\",\\n          \\"EndTime\\": \\"2023-01-03 18:00:21\\",\\n          \\"ScheduleTime\\": \\"2023-01-03 18:00:03\\",\\n          \\"DataTime\\": \\"2023-01-03 18:00:00\\",\\n          \\"WorkAddr\\": \\"10.163.0.101:34027\\",\\n          \\"Result\\": \\"code=200\\",\\n          \\"Attempt\\": 0,\\n          \\"Status\\": 4,\\n          \\"JobName\\": \\"TestJob\\"\\n        }\\n      ],\\n      \\"Edges\\": [\\n        {\\n          \\"Source\\": 24058798,\\n          \\"Target\\": 24058796\\n        }\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取工作流实例详情及DAG',
    ),
    'ListWorkflowInstance' => 
    array (
      'summary' => '获取工作流的历史执行记录，只有专业版才支持。',
      'methods' => 
      array (
        0 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用分组ID，在控制台的应用管理页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'WorkflowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'string',
            'required' => true,
            'example' => '123',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => 'API执行是否成功。取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'workflowId=xxx is not existed',
              ),
              'Data' => 
              array (
                'description' => '工作流实例列表封装在data里',
                'type' => 'object',
                'properties' => 
                array (
                  'WfInstanceInfos' => 
                  array (
                    'description' => '工作流实例的列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '工作流实例数据结构',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'WfInstanceId' => 
                        array (
                          'description' => '工作流实例ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123456',
                        ),
                        'WorkflowId' => 
                        array (
                          'description' => '工作流ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'Status' => 
                        array (
                          'description' => '工作流实例状态，取值如下：

- 1: 等待中
- 2: 准备中
- 3：运行中
- 4：成功
- 5：失败',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'StartTime' => 
                        array (
                          'description' => '开始时间',
                          'type' => 'string',
                          'example' => '2023-01-03 18:00:01',
                        ),
                        'EndTime' => 
                        array (
                          'description' => '结束时间',
                          'type' => 'string',
                          'example' => '2023-01-03 18:00:21',
                        ),
                        'ScheduleTime' => 
                        array (
                          'description' => '计划调度时间',
                          'type' => 'string',
                          'example' => '2023-01-03 18:00:00',
                        ),
                        'DataTime' => 
                        array (
                          'description' => '数据时间',
                          'type' => 'string',
                          'example' => '2023-01-03 18:00:00',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"workflowId=xxx is not existed\\",\\n  \\"Data\\": {\\n    \\"WfInstanceInfos\\": [\\n      {\\n        \\"WfInstanceId\\": 123456,\\n        \\"WorkflowId\\": 123,\\n        \\"Status\\": 5,\\n        \\"StartTime\\": \\"2023-01-03 18:00:01\\",\\n        \\"EndTime\\": \\"2023-01-03 18:00:21\\",\\n        \\"ScheduleTime\\": \\"2023-01-03 18:00:00\\",\\n        \\"DataTime\\": \\"2023-01-03 18:00:00\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取工作流实例列表',
    ),
    'SetWfInstanceSuccess' => 
    array (
      'summary' => '强制设置工作流实例状态为成功状态，只有专业版才支持。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用分组ID，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'WorkflowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123',
          ),
        ),
        5 => 
        array (
          'name' => 'WfInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流实例ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123456789',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '错误消息，仅错误时返回错误信息。',
                'type' => 'string',
                'example' => 'wofkflowId is not existed',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"wofkflowId is not existed\\"\\n}","type":"json"}]',
      'title' => '标记工作流实例成功',
    ),
    'CreateJob' => 
    array (
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
            'default' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'JobType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务类型，目前支持以下几种任务类型：

- java
- python
- shell
- go
- http
- xxljob
- dataworks
- k8s
- springschedule',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'python' => 'python',
              'xxljob' => 'xxljob',
              'java' => 'java',
              'shell' => 'shell',
              'go' => 'go',
              'http' => 'http',
              'dataworks' => 'dataworks',
            ),
            'example' => 'java',
          ),
        ),
        5 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'helloworld',
          ),
        ),
        6 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test',
          ),
        ),
        7 => 
        array (
          'name' => 'ExecuteMode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务执行模式，目前支持以下几种任务执行模式：

- **单机运行**：standalone
- **广播运行**：broadcast
- **可视化MapReduce**：parallel
- **MapReduce**：batch
- **分片运行**：sharding',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'broadcast' => '广播运行',
              'parallel' => '并行计算',
              'grid' => '内存网格',
              'batch' => '网格计算',
              'standalone' => '单机运行',
              'sharding' => '分片运行',
            ),
            'example' => 'standalone',
          ),
        ),
        8 => 
        array (
          'name' => 'ClassName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务接口类完整路径。

当您选择Java任务类型时，才有该字段且必须填写完整路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.alibaba.schedulerx.test.helloworld',
          ),
        ),
        9 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务类型选择为Python/Shell/Go/K8s时，必填的脚本代码内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'echo \'hello\'',
          ),
        ),
        10 => 
        array (
          'name' => 'Parameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户自定义参数，运行时可以获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        11 => 
        array (
          'name' => 'MaxConcurrency',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '最大同时运行实例数量，默认值为1，即上次触发没有运行结束，即使到了运行时刻也不会进行下次触发。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'MaxAttempt',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '错误最大重试次数，根据业务需求填写，默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        13 => 
        array (
          'name' => 'AttemptInterval',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '错误重试间隔，单位s，默认值为30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '30',
          ),
        ),
        14 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '并行网格任务高级配置，单次拉取子任务数，默认值为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
            'default' => '100',
          ),
        ),
        15 => 
        array (
          'name' => 'ConsumerSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '并行网格任务高级配置，单机单次触发执行线程数，默认值为5。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
            'default' => '5',
          ),
        ),
        16 => 
        array (
          'name' => 'QueueSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '并行网格任务高级配置，子任务队列缓存上限，默认值为10000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10000',
            'default' => '10000',
          ),
        ),
        17 => 
        array (
          'name' => 'DispatcherSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '并行网格任务高级配置，子任务分发线程数，默认值为5。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
            'default' => '5',
          ),
        ),
        18 => 
        array (
          'name' => 'TimeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '时间类型，目前支持以下几种时间类型：

- **cron**：1
- **fixed_rate**：3
- **second_delay**：4
- **one_time** ：5 
- **api**：100',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              1 => '1',
              3 => '3',
              4 => '4',
              5 => '5',
              100 => '100',
            ),
            'example' => '1',
          ),
        ),
        19 => 
        array (
          'name' => 'TimeExpression',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '时间表达式，根据选择的时间类型设置时间表达式。

- **cron**：填写标准的cron表达式，支持在线验证。
- **api**：无时间表达式。
- **fixed_rate**：填写具体固定频率值，单位s。如30表示每隔30s触发一次。
- **second_delay**：填写固定延迟多少秒执行一次（1s~60s可选）。
- **one_time**: 填写指定时间（yyyy-MM-dd HH:mm:ss）或者时间戳（毫秒），比如"2022-10-10 10:10:00"',
            'type' => 'string',
            'required' => false,
            'example' => '0 0/10 * * * ?',
          ),
        ),
        20 => 
        array (
          'name' => 'Calendar',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'cron类型可以选择填写自定义日历。',
            'type' => 'string',
            'required' => false,
            'example' => '暂不支持，不用填写',
          ),
        ),
        21 => 
        array (
          'name' => 'DataOffset',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'cron类型可以选择时间偏移，单位s。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2400',
          ),
        ),
        22 => 
        array (
          'name' => 'Timezone',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '时区',
            'type' => 'string',
            'required' => false,
            'example' => 'GMT+8',
          ),
        ),
        23 => 
        array (
          'name' => 'TimeoutEnable',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '超时报警开关。取值如下：

- **true**：开启超时报警开关。
- **false**：关闭超时报警开关。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'false' => 'false',
              'true' => 'true',
            ),
            'example' => 'false',
            'default' => 'true',
          ),
        ),
        24 => 
        array (
          'name' => 'Timeout',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '超时阈值，单位s，默认值7200。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '7200',
            'default' => '7200',
          ),
        ),
        25 => 
        array (
          'name' => 'TimeoutKillEnable',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '超时终止开关。取值如下：

- **true**：开启超时终止开关。
- **false**：关闭超时终止开关。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'false' => 'false',
              'true' => 'true',
            ),
            'example' => 'false',
            'default' => 'true',
          ),
        ),
        26 => 
        array (
          'name' => 'FailEnable',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '失败报警开关。取值如下：

- **true**：开启失败报警开关。
- **false**：关闭失败报警开关。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'false' => 'false',
              'true' => 'true',
            ),
            'example' => 'false',
            'default' => 'true',
          ),
        ),
        27 => 
        array (
          'name' => 'FailTimes',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '连续失败报警次数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
            'default' => '1',
          ),
        ),
        28 => 
        array (
          'name' => 'MissWorkerEnable',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启无可用机器报警。
- **true**：开启无可用机器报警开关。
- **false**：关闭无可用机器报警开关。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        29 => 
        array (
          'name' => 'SuccessNoticeEnable',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '成功通知开关',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        30 => 
        array (
          'name' => 'SendChannel',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '报警发送形式，目前只支持短信发送报警，默认值sms。',
            'type' => 'string',
            'required' => false,
            'example' => 'sms',
            'default' => 'default',
          ),
        ),
        31 => 
        array (
          'name' => 'TaskMaxAttempt',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '并行网格任务高级配置，子任务失败重试次数 ，默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
        ),
        32 => 
        array (
          'name' => 'TaskAttemptInterval',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '并行网格任务高级配置，子任务失败重试间隔，默认值为0。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
        ),
        33 => 
        array (
          'name' => 'ContactInfo',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '任务联系人信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '任务联系人信息。',
              'type' => 'object',
              'properties' => 
              array (
                'UserPhone' => 
                array (
                  'description' => '报警接收手机号。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1381111****',
                ),
                'UserName' => 
                array (
                  'description' => '报警联系人姓名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '张三',
                ),
                'UserMail' => 
                array (
                  'description' => '报警联系人邮箱。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test***@***.com',
                ),
                'Ding' => 
                array (
                  'description' => '报警联系人钉钉群机器人webhook地址，参考文档：[钉钉开发文档](https://open.dingtalk.com/document/org/application-types)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://oapi.dingtalk.com/robot/send?access_token=**********',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        34 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '0：禁用，1：启用，默认启用。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        35 => 
        array (
          'name' => 'XAttrs',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '如果是k8s任务类型，需要配置该参数
Job任务：{"resource":"job"}
Shell任务：{"image":"busybox","resource":"shell"}
',
            'description' => '如果是k8s任务类型，需要配置该参数
Job任务：{"resource":"job"}
Shell任务：{"image":"busybox","resource":"shell"}
',
            'type' => 'string',
            'required' => false,
            'example' => '{"resource":"job"}',
            'enum' => 
            array (
            ),
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
                'description' => '返回码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息。',
                'type' => 'string',
                'example' => 'message',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID。',
                'type' => 'string',
                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
              ),
              'Success' => 
              array (
                'description' => '创建任务是否成功。取值如下：

- **true**：创建任务成功。
- **false**：创建任务失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '任务详细信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'JobId' => 
                  array (
                    'description' => '任务ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '92583',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"message\\",\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobId\\": 92583\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateJobResponse>\\n    <Code>200</Code>\\n    <Message>message</Message>\\n    <RequestId>39090022-1F3B-4797-8518-6B61095F1AF0</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <JobId>92583</JobId>\\n    </Data>\\n</CreateJobResponse>","errorExample":""}]',
      'title' => '创建任务并返回任务ID',
      'summary' => '创建任务并返回任务ID。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '##  创建Java任务

```json
package com.alibaba.schedulerx.pop;

import java.util.ArrayList;
import java.util.List;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.CreateJobRequest;
import com.aliyuncs.schedulerx2.model.v20190430.CreateJobRequest.ContactInfo;
import com.aliyuncs.schedulerx2.model.v20190430.CreateJobResponse;

public class CreateJavaJob {

    public static void main(String[] args) throws Exception {
     //  OpenAPI的接入点，可查看产品支持的地域列表或根据购买产品的地域填写。
        String regionId = "cn-shanghai";
        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。
        String accessKeyId = "<yourAccessKeyId>";
        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取
        String accessKeySecret = "<yourAccessKeySecret>";
        //产品名称。
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写。
        String domain ="schedulerx.cn-shanghai.aliyuncs.com";
        //构建OpenAPI客户端。
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);
        
        CreateJobRequest request = new CreateJobRequest();
        request.setJobType("java");
        request.setExecuteMode("standalone");
        request.setDescription("test");
        request.setName("helloworld");
        request.setClassName("com.alibaba.schedulerx.test.helloworld");
        request.setTimeType(1);
        request.setTimeExpression("0 0/10 * * * ?");
        request.setNamespace("xxxxx");
        request.setGroupId("xxxxxxx");
        // monitor
        request.setTimeoutEnable(true);
        request.setTimeoutKillEnable(true);
        request.setFailEnable(true);
        request.setTimeout(12300L);
        List<ContactInfo> contactInfosList = new ArrayList<>();
        ContactInfo contactInfo1 = new ContactInfo();
        contactInfo1.setUserName("userA");
        contactInfo1.setUserPhone("1381111****");
        ContactInfo contactInfo2 = new ContactInfo();
        contactInfo2.setUserName("userB");
        contactInfo2.setUserPhone("1382222****");
        contactInfosList.add(contactInfo1);
        contactInfosList.add(contactInfo2);
        request.setContactInfos(contactInfosList);
        // attrs
        //request.setQueueSize(123);
        request.setTaskMaxAttempt(1);
        request.setTaskAttemptInterval(100);
        CreateJobResponse response = client.getAcsResponse(request);
        if (response.getSuccess()) {
            System.out.println("jobId=" + response.getData().getJobId());
        } else {
            System.out.println(response.getMessage());
        }
    }

}
```

## 创建HTTP任务

```json
package com.alibaba.schedulerx.pop;

import com.alibaba.schedulerx.common.domain.HttpAttribute;
import com.alibaba.schedulerx.common.util.JsonUtil;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.CreateJobRequest;
import com.aliyuncs.schedulerx2.model.v20190430.CreateJobResponse;

public class CreateHttpJob {

    public static void main(String[] args) throws Exception {
     // OpenAPI的接入点，具体查看支持地域列表或根据购买地域填写。
        String regionId = "cn-shanghai";
        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。
        String accessKeyId = "<yourAccessKeyId>";
        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。
        String accessKeySecret = "<yourAccessKeySecret>";
        //产品名称。
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写。
        String domain ="schedulerx.cn-shanghai.aliyuncs.com";
        //构建OpenAPI客户端。
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);
        
        CreateJobRequest request = new CreateJobRequest();
        request.setNamespace("xxxxxxxx");
        request.setGroupId("xxxxxx");
        request.setJobType("http");
        request.setName("testHttpJob");
        request.setDescription("testHttpJob");
        request.setTimeType(1);
        request.setTimeExpression("20 0/5 * * * ?");
        request.setExecuteMode("standalone");
        HttpAttribute httpAttribute = new HttpAttribute();
        httpAttribute.setUrl("http://192.168.0.0:8080/test");
        httpAttribute.setMethod("GET");
        httpAttribute.setTimeout(10); //单位秒
        httpAttribute.setRespKey("code");
        httpAttribute.setRespValue("200");
        request.setContent(JsonUtil.toJson(httpAttribute));
        //POST参数，格式key1=value1&key2=value2。
        request.setParameters("key1=value1&key2=value2");   
        
        //发送请求。
        CreateJobResponse response = client.getAcsResponse(request);
        if (!response.getSuccess()) {
            System.out.println(response.getMessage());
            System.out.println("createApp: "+response.getRequestId());
        } else {
            System.out.println(JsonUtil.toJson(response));
        }
    }
    
}
```
##  创建一次性任务

```json
package com.alibaba.schedulerx.pop;

import java.util.ArrayList;
import java.util.List;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.CreateJobRequest;
import com.aliyuncs.schedulerx2.model.v20190430.CreateJobRequest.ContactInfo;
import com.aliyuncs.schedulerx2.model.v20190430.CreateJobResponse;

public class CreateJavaJob {

    public static void main(String[] args) throws Exception {
     // OpenAPI的接入点，可查看产品支持的地域列表或根据购买产品的地域填写。
        String regionId = "cn-shanghai";
        //鉴权使用的AccessKey ID，由阿里云官网控制台获取
        String accessKeyId = "xxxxxx";
        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取
        String accessKeySecret = "xxxxxxxx";
        //产品名称
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写
        String domain ="schedulerx.cn-shanghai.aliyuncs.com";
        //构建OpenAPI客户端
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);
        
        CreateJobRequest request = new CreateJobRequest();
        request.setJobType("java");
        request.setExecuteMode("standalone");
        request.setDescription("test");
        request.setName("helloworld");
        request.setClassName("com.alibaba.schedulerx.test.helloworld");
        request.setTimeType(5);
        request.setTimeExpression("2021-12-30 12:12:12");
        request.setNamespace("xxxxxx");
        request.setGroupId("xxxxxxx");
        // 报警监控
        request.setTimeoutEnable(true);
        request.setTimeoutKillEnable(true);
        request.setFailEnable(true);
        request.setTimeout(12300L);
        // 高级配置
        request.setMaxAttempt(3);
        request.setAttemptInterval(30);
        CreateJobResponse response = client.getAcsResponse(request);
        if (response.getSuccess()) {
            System.out.println("jobId=" + response.getData().getJobId());
        } else {
            System.out.println(response.getMessage());
        }
    }
    
}
```',
    ),
    'DeleteJob' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，在控制台的**任务管理**页面中获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '92583',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的**命名空间**页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的**应用管理**页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'description' => '接口状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息。',
                'type' => 'string',
                'example' => 'message',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID。',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Success' => 
              array (
                'description' => '是否成功。

- **true**：删除任务成功。

- **false**：删除任务失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"message\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteJobResponse>\\n<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>jobid: 92583 not match groupId: testSchedulerx.defaultGroup</Message>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DeleteJobResponse>","errorExample":""}]',
      'title' => '删除指定任务',
      'summary' => '删除指定任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 示例Demo

```json
package com.alibaba.schedulerx.pop;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.exceptions.ClientException;
import com.aliyuncs.exceptions.ServerException;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.DeleteJobRequest;
import com.aliyuncs.schedulerx2.model.v20190430.DeleteJobResponse;

public class DeleteJob {

    public static void main(String[] args) throws Exception {
        // OpenAPI的接入点，具体查看上表支持地域列表以及购买机器地域填写。
        String regionId = "cn-shanghai";
        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。
        String accessKeyId = "<yourAccessKeyId>";
        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。
        String accessKeySecret = "<yourAccessKeySecret>";
        //产品名称。
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写。
        String domain ="schedulerx.cn-shanghai.aliyuncs.com";
        //构建OpenAPI客户端。
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);

        DeleteJobRequest request = new DeleteJobRequest();
        request.setNamespace("xxxxxx");
        request.setGroupId("xxxxxx");
        request.setJobId((long) 2030221);

        DeleteJobResponse response = client.getAcsResponse(request);
        if (response.getSuccess()) {
            System.out.println("Success: "+response.getSuccess());
        } else {
            System.out.println("Message: "+response.getMessage());
        }

    }

}
```',
    ),
    'BatchDeleteJobs' => 
    array (
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务所属命名空间ID，在控制台**命名空间**页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        1 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'Schedulerx',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的**应用管理**页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务所属地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'JobIdList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '任务ID列表，多个任务ID以半角逗号（,）分隔。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '任务ID。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '99341',
            ),
            'required' => true,
            'example' => '99341',
            'maxItems' => 3000,
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
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息。',
                'type' => 'string',
                'example' => 'message',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7',
              ),
              'Success' => 
              array (
                'description' => '批量删除任务是否成功。取值如下：

- **true**：成功

- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"message\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchDeleteJobsResponse>\\n<Message>delete failed jobs=[675946,676129]</Message>\\n<RequestId>71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</BatchDeleteJobsResponse>","errorExample":""}]',
      'title' => '批量删除任务',
      'summary' => '批量删除任务。',
      'description' => '调用该接口前，需要在POM文件添加以下依赖：

```xml
<dependency>
    <groupId>com.aliyun</groupId>
    <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
    <version>1.0.4</version>
</dependency>
```',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '##   Demo

```java
package com.alibaba.schedulerx.pop;

import com.google.common.collect.Lists;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.BatchDeleteJobsRequest;
import com.aliyuncs.schedulerx2.model.v20190430.BatchDeleteJobsResponse;

public class TestBatchDeleteJobs {

    public static void main(String[] args) throws Exception {
        // OpenAPI的接入点，具体查看上表支持地域列表以及购买机器地域填写.
        String regionId = "cn-hangzhou";
        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。
        String accessKeyId = "xxxxxx";
        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。
        String accessKeySecret = "xxxxxxxx";
        //产品名称。
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写。
        String domain ="schedulerx.cn-hangzhou.aliyuncs.com";
        //构建OpenAPI客户端。
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);
        
        BatchDeleteJobsRequest request = new BatchDeleteJobsRequest();
        request.setNamespace("xxxxxx");
        request.setGroupId("xxxxxx");
        request.setJobIdLists(Lists.newArrayList(3982L,3984L));
        BatchDeleteJobsResponse response = client.getAcsResponse(request);
        if (!response.getSuccess()) {
            System.out.println(response.getMessage());
            System.out.println("BatchDeleteJob: "+response.getRequestId());
        } else {
            System.out.println(response.getMessage());
        }
    }
    
}
```',
    ),
    'UpdateJob' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
            'default' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务ID，在控制台的任务管理页面中获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '92583',
          ),
        ),
        5 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务名。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'helloword',
          ),
        ),
        6 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        7 => 
        array (
          'name' => 'ExecuteMode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务执行模式，目前支持以下几种任务执行模式：

- **单机运行**：standalone
- **广播运行**：broadcatst
- **可视化MapReduce**：parallel
- **MapReduce**：batch
- **分片运行**：shard',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'standalone',
          ),
        ),
        8 => 
        array (
          'name' => 'ClassName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务接口类完整路径。

是Java任务类型时，才有该字段且必须填写完整路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.alibaba.test.helloworld',
          ),
        ),
        9 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务类型为Python/Shell/Go/K8s的必填脚本内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'echo \'hello\'',
          ),
        ),
        10 => 
        array (
          'name' => 'Parameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户自定义参数，运行时可以获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        11 => 
        array (
          'name' => 'MaxConcurrency',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '最大同时运行实例数量，默认值为1，即上次触发没有运行结束，不会进行下次触发即使到了运行时刻。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'MaxAttempt',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '错误最大重试次数，根据业务需求填写。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        13 => 
        array (
          'name' => 'AttemptInterval',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '错误重试间隔时间，单位s，默认值为30。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
            'default' => '30',
          ),
        ),
        14 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '并行网格任务高级配置，单次拉取子任务数，默认值为100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
            'default' => '100',
          ),
        ),
        15 => 
        array (
          'name' => 'TaskDispatchMode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '并行网格任务高级配置，推模型或者拉模型',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'pull' => 'pull',
              'push' => 'push',
            ),
            'example' => 'push',
          ),
        ),
        16 => 
        array (
          'name' => 'ConsumerSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '并行网格任务高级配置，单机单次触发执行线程数，默认值为5。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
            'default' => '5',
          ),
        ),
        17 => 
        array (
          'name' => 'QueueSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '并行网格任务高级配置，子任务队列缓存上限，默认值为10000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10000',
            'default' => '10000',
          ),
        ),
        18 => 
        array (
          'name' => 'DispatcherSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '并行网格任务高级配置，子任务分发线程数，默认值为5。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
            'default' => '5',
          ),
        ),
        19 => 
        array (
          'name' => 'TaskMaxAttempt',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '并行网格任务高级配置，子任务失败重试次数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
        ),
        20 => 
        array (
          'name' => 'TaskAttemptInterval',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '并行网格任务高级配置，子任务失败重试间隔。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
        ),
        21 => 
        array (
          'name' => 'TimeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '时间配置类型，目前支持以下几种配置类型：

- **cron**：1
- **fix_rate**：3
- **second_delay**：4
- **one_time** ：5
- **api**：100',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        22 => 
        array (
          'name' => 'TimeExpression',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '时间表达式，根据选择的时间类型设置时间表达式。

- **cron**：填写标准的cron表达式，支持在线验证。
- **api**：无时间表达式。
- **fixed_rate**：填写具体固定频率值，单位s。如30表示每隔30s触发一次。
- **second_delay**：填写固定延迟多少秒执行一次（1s~60s可选）。',
            'type' => 'string',
            'required' => false,
            'example' => '30',
          ),
        ),
        23 => 
        array (
          'name' => 'Calendar',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'cron类型可以选择填写自定义日历。',
            'type' => 'string',
            'required' => false,
            'example' => '工作日',
          ),
        ),
        24 => 
        array (
          'name' => 'DataOffset',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'cron类型可以选择时间偏移，单位s。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2400',
          ),
        ),
        25 => 
        array (
          'name' => 'Timezone',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '时区',
            'type' => 'string',
            'required' => false,
            'example' => 'GMT+8',
          ),
        ),
        26 => 
        array (
          'name' => 'TimeoutEnable',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '超时报警开关。取值如下：

- **true**：开启超时报警开关。
- **false**：关闭超时报警开关。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        27 => 
        array (
          'name' => 'Timeout',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '超时阈值，单位s。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '7200',
            'default' => '7200',
          ),
        ),
        28 => 
        array (
          'name' => 'TimeoutKillEnable',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '超时终止本次触发开关。取值如下：

- **true**：开启超时终止开关。
- **false**：关闭超时终止开关。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        29 => 
        array (
          'name' => 'FailEnable',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '失败报警开关。取值如下：

- **true**：开启失败报警开关。
- **false**：关闭失败报警开关。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        30 => 
        array (
          'name' => 'FailTimes',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '连续失败报警次数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        31 => 
        array (
          'name' => 'MissWorkerEnable',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启无可用机器告警。
- **true**：开启无可用机器告警开关。
- **false**：关闭无可用机器告警开关。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        32 => 
        array (
          'name' => 'SuccessNoticeEnable',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '成功通知开关',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        33 => 
        array (
          'name' => 'SendChannel',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '报警发送形式，目前只支持sms。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'sms',
          ),
        ),
        34 => 
        array (
          'name' => 'ContactInfo',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '任务联系人信息。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'UserPhone' => 
                array (
                  'description' => '用户手机号。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1381111****',
                ),
                'UserName' => 
                array (
                  'description' => '用户名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'userA',
                ),
                'UserMail' => 
                array (
                  'description' => '用户邮箱。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test***@***.com',
                ),
                'Ding' => 
                array (
                  'description' => '报警联系人钉钉群机器人webhook地址，参考文档：[钉钉开发文档](https://open.dingtalk.com/document/org/application-types)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://oapi.dingtalk.com/robot/send?access_token=**********',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        35 => 
        array (
          'name' => 'XAttrs',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '如果是k8s任务类型，需要配置该参数
Job任务：{"resource":"job"}
Shell任务：{"image":"busybox","resource":"shell"}
',
            'type' => 'string',
            'required' => false,
            'example' => ' {"resource":"shell","fileFormat":"unix","templateType":"customTemplate"}',
          ),
        ),
        36 => 
        array (
          'name' => 'Template',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'k8s任务类型自定义任务模版',
            'type' => 'string',
            'required' => false,
            'example' => 'apiVersion: v1
kind: Pod
metadata:
  name: schedulerx-node-{JOB_ID}
  namespace: {NAMESPACE}
spec:
  containers:
  - name: node-job
    image: node:16
    imagePullPolicy: IfNotPresent
    volumeMounts:
    - name: script-node
      mountPath: script/node
    command: ["node", "script/node/node-{JOB_ID}.js"]
  volumes:
  - name: script-node
    configMap:
      name: schedulerx-configmap
      items:
      - key: schedulerx-node-{JOB_ID}
        path: node-{JOB_ID}.js
  restartPolicy: Never',
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
                'description' => '返回码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息，仅出错时返回错误信息。',
                'type' => 'string',
                'example' => 'job type is java className can not be blank',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID。',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"job type is java className can not be blank\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateJobResponse>\\n    <Code>200</Code>\\n    <Message>job type is java className can not be blank</Message>\\n    <RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n    <Success>true</Success>\\n</UpdateJobResponse>","errorExample":""}]',
      'title' => '更新任务配置信息',
      'summary' => '更新任务配置信息。默认先调用获取任务找到对应字段进行修改。',
      'requestParamsDescription' => '> 在调用UpdateJob更新调度任务时，会删除之前对应参数的配置，而非保留。所以，请先调用[GetJobInfo](~~176507~~)，获取目标任务此前的配置，再根据实际情况进行配置。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DisableJob' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，在控制台的任务管理页面中获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '92583',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误消息，仅出错时返回错误信息。',
                'type' => 'string',
                'example' => 'jobid: 92583 not match groupId: testSchedulerx.defaultGroup',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => 'C8E5FB4A-6D8D-424D-9AAA-4FE06BB74FF9',
              ),
              'Success' => 
              array (
                'description' => '禁用任务是否成功。取值如下：

- **true**：禁用任务成功。
- **false**：禁用任务失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"jobid: 92583 not match groupId: testSchedulerx.defaultGroup\\",\\n  \\"RequestId\\": \\"C8E5FB4A-6D8D-424D-9AAA-4FE06BB74FF9\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DisableJobResponse>\\n<RequestId>C8E5FB4A-6D8D-424D-9AAA-4FE06BB74FF9</RequestId>\\n<Message>jobid: 92583 not match groupId: testSchedulerx.defaultGroup</Message>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DisableJobResponse>","errorExample":""}]',
      'title' => '停用指定任务',
      'summary' => '停用指定任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## Demo

```
package com.alibaba.schedulerx.pop;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.DisableJobRequest;
import com.aliyuncs.schedulerx2.model.v20190430.DisableJobResponse;

public class DisableJob {

    public static void main(String[] args) throws Exception {
     // OpenAPI的接入点，具体查看上表支持地域列表以及购买机器地域填写。
        String regionId = "cn-shanghai";
        //鉴权使用的AccessKeyId，由阿里云官网控制台获取。
        String accessKeyId = "<yourAccessKeyId>";
        //鉴权使用的AccessKeySecret，由阿里云官网控制台获取。
        String accessKeySecret = "<yourAccessKeySecret>";
        //产品名称。
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写。
        String domain ="schedulerx.cn-shanghai.aliyuncs.com";
        //构建OpenAPI客户端。
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);
        
        DisableJobRequest request = new DisableJobRequest();
        request.setNamespace("xxxxxx");
        request.setGroupId("xxxxxx");
        request.setJobId(123L);
        DisableJobResponse response = client.getAcsResponse(request);
        if (!response.getSuccess()) {
            System.out.println(response.getMessage());
            System.out.println("DisableJob: "+response.getRequestId());
        } else {
            System.out.println(response.getMessage());
        }
    }
    
}
```',
    ),
    'BatchEnableJobs' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务所属命名空间ID，在控制台**命名空间**页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        1 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的**应用管理**页面中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务所属地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'JobIdList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '任务ID列表，多个任务ID以半角逗号（,）分隔。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '任务ID。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '99341',
            ),
            'required' => true,
            'example' => '99341',
            'maxItems' => 3000,
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
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息。',
                'type' => 'string',
                'example' => 'message',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7',
              ),
              'Success' => 
              array (
                'description' => '批量启用任务是否成功。取值如下：

- **true**：成功

- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"message\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchEnableJobsResponse>\\n<Message>enable failed jobs=[99342]</Message>\\n<RequestId>71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</BatchEnableJobsResponse>","errorExample":""}]',
      'title' => '批量启用任务',
      'summary' => '批量启用任务。',
      'description' => '在调用该接口前，需要在POM文件添加以下依赖：

```xml
<dependency>
    <groupId>com.aliyun</groupId>
    <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
    <version>1.0.4</version>
</dependency>
```',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '##  Demo

```
package com.alibaba.schedulerx.pop;

import com.google.common.collect.Lists;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.BatchEnableJobsRequest;
import com.aliyuncs.schedulerx2.model.v20190430.BatchEnableJobsResponse;

public class TestBatchEnableJobs {

    public static void main(String[] args) throws Exception {
        // OpenAPI的接入点，具体查看上表支持地域列表以及购买机器地域填写。
        String regionId = "cn-hangzhou";
        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。
        String accessKeyId = "xxxxxx";
        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。
        String accessKeySecret = "xxxxxxxx";
        //产品名称。
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写。
        String domain ="schedulerx.cn-hangzhou.aliyuncs.com";
        //构建OpenAPI客户端。
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);
        
        BatchEnableJobsRequest request = new BatchEnableJobsRequest();
        request.setNamespace("xxxxxx");
        request.setGroupId("xxxxxx");
        request.setJobIdLists(Lists.newArrayList(3982L,3984L));
        BatchEnableJobsResponse response = client.getAcsResponse(request);
        if (!response.getSuccess()) {
            System.out.println(response.getMessage());
            System.out.println("BatchEnableJob: "+response.getRequestId());
        } else {
            System.out.println(response.getMessage());
        }
    }
    
}
```',
    ),
    'BatchDisableJobs' => 
    array (
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务所属命名空间ID，在控制台**命名空间**页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        1 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的**应用管理**页面中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务所属地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'JobIdList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '任务ID列表，多个任务ID以半角逗号（,）分隔。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '任务ID。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '99341',
            ),
            'required' => true,
            'example' => '99341',
            'maxItems' => 3000,
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
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息。',
                'type' => 'string',
                'example' => 'disable failed jobs=[99341]',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7',
              ),
              'Success' => 
              array (
                'description' => '批量禁用任务是否成功。取值如下：

- **true**：成功

- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"disable failed jobs=[99341]\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchDisableJobsResponse>\\n<Message>disable failed jobs=[99341]</Message>\\n<RequestId>71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</BatchDisableJobsResponse>","errorExample":""}]',
      'title' => '批量禁用任务',
      'summary' => '批量禁用任务。',
      'description' => '在调用该接口前，需要在POM文件添加以下依赖：

```xml
<dependency>
    <groupId>com.aliyun</groupId>
    <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
    <version>1.0.4</version>
</dependency>
```',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '##   Demo
```
package com.alibaba.schedulerx.pop;

import com.google.common.collect.Lists;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.BatchDisableJobsRequest;
import com.aliyuncs.schedulerx2.model.v20190430.BatchDisableJobsResponse;

public class TestBatchDisableJobs {

    public static void main(String[] args) throws Exception {
        // OpenAPI 的接入点，具体查看上表支持地域列表以及购买机器地域填写。
        String regionId = "cn-hangzhou";
        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。
        String accessKeyId = "xxxxxx";
        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。
        String accessKeySecret = "xxxxxxxx";
        //产品名称。
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写。
        String domain ="schedulerx.cn-hangzhou.aliyuncs.com";
        //构建OpenAPI客户端。
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);
        
        BatchDisableJobsRequest request = new BatchDisableJobsRequest();
        request.setNamespace("xxxxxx");
        request.setGroupId("xxxxxx");
        request.setJobIdLists(Lists.newArrayList(3982L,3984L));
        BatchDisableJobsResponse response = client.getAcsResponse(request);
        if (!response.getSuccess()) {
            System.out.println(response.getMessage());
            System.out.println("BatchDisableJob: "+response.getRequestId());
        } else {
            System.out.println(response.getMessage());
        }
    }
    
}
```',
    ),
    'EnableJob' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，在控制台的任务管理页面中获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '92555',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'description' => '返回码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息。',
                'type' => 'string',
                'example' => 'jobid: 92583 not match groupId: testSchedulerx.defaultGroup',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID。',
                'type' => 'string',
                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBC***',
              ),
              'Success' => 
              array (
                'description' => '调用任务是否成功。取值如下：

- **true**：调用任务成功。
- **false**：调用任务失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"jobid: 92583 not match groupId: testSchedulerx.defaultGroup\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBC***\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<EnableJobResponse>\\n<Message>jobid: 92583 not match groupId: testSchedulerx.defaultGroup</Message>\\n<RequestId>71BCC0E3-64B2-4B63-A870-AFB64EBC***</RequestId>\\n<Code>200</Code>\\n<Success>true</Success>\\n</EnableJobResponse>","errorExample":""}]',
      'title' => '启用指定任务',
      'summary' => '启用指定任务。',
      'description' => '任务创建完成以后默认启用，所以该功能是在停用任务后使用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '##  Demo

```
package com.alibaba.schedulerx.pop;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.EnableJobRequest;
import com.aliyuncs.schedulerx2.model.v20190430.EnableJobResponse;

public class EnableJob {

    public static void main(String[] args) throws Exception {
     // OpenAPI的接入点，具体查看上表支持地域列表以及购买机器地域填写。
        String regionId = "cn-shanghai";
        //鉴权使用的 AccessKeyId，由阿里云官网控制台获取。
        String accessKeyId = "<yourAccessKeyId>";
        //鉴权使用的 AccessKeySecret，由阿里云官网控制台获取。
        String accessKeySecret = "<yourAccessKeySecret>";
        //产品名称。
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写。
        String domain ="schedulerx.cn-shanghai.aliyuncs.com";
        //构建OpenAPI客户端。
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);
        
        EnableJobRequest request = new EnableJobRequest();
        request.setNamespace("xxxxxx");
        request.setGroupId("xxxxxx");
        request.setJobId(123L);
        EnableJobResponse response = client.getAcsResponse(request);
        if (!response.getSuccess()) {
            System.out.println(response.getMessage());
            System.out.println("EnableJob: "+response.getRequestId());
        } else {
            System.out.println(response.getMessage());
        }
    }
    
}
```',
    ),
    'GetJobInfo' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，在控制台的任务管理页面中获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '92583',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        3 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'JobName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'simpleJob',
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
                'description' => '返回码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息，仅错误时返回错误信息。',
                'type' => 'string',
                'example' => 'jobid: 92583 not match groupId: testSchedulerx.defaultGroup',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID。',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Success' => 
              array (
                'description' => '获取任务详情是否成功。取值如下：

- **true**：获取任务详情成功。
- **false**：获取任务详情失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '指定任务信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'JobConfigInfo' => 
                  array (
                    'description' => '任务配置信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'JobId' => 
                      array (
                        'description' => '任务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '538039',
                      ),
                      'Status' => 
                      array (
                        'description' => '任务状态。取值如下：

- **1**：启用，可以被正常触发。
- **0**：禁用，不会被触发。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'Parameters' => 
                      array (
                        'description' => '用户自定义参数，运行时可以获取。',
                        'type' => 'string',
                        'example' => 'test',
                      ),
                      'Description' => 
                      array (
                        'description' => '任务描述。',
                        'type' => 'string',
                        'example' => 'test',
                      ),
                      'ExecuteMode' => 
                      array (
                        'description' => '任务执行模式，目前包含以下几种任务执行模式：

- **单机运行**：standalone
- **广播运行**：broadcatst
- **并行计算**：parallel
- **内存网格**：grid
- **网格计算**：batch
- **分片运行**：shard',
                        'type' => 'string',
                        'example' => 'standalone',
                      ),
                      'MaxConcurrency' => 
                      array (
                        'description' => '最大同时运行实例数量，默认值为1， 即上次触发没有运行结束，即使到了运行时刻也不会进行下次触发。',
                        'type' => 'string',
                        'example' => '1',
                      ),
                      'Name' => 
                      array (
                        'description' => '任务名称。',
                        'type' => 'string',
                        'example' => 'helloworld',
                      ),
                      'MaxAttempt' => 
                      array (
                        'description' => '错误最大重试次数，根据业务需求填写，默认值为0。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'Content' => 
                      array (
                        'description' => '脚本类型任务的脚本。',
                        'type' => 'string',
                        'example' => 'echo "clear" > /home/admin/edas-container/logs/catalina.out ',
                      ),
                      'JarUrl' => 
                      array (
                        'description' => '上传到OSS的完整路径。

如果选择JAR包运行，可以将相应JAR包上传到OSS的该路径下。',
                        'type' => 'string',
                        'example' => 'https://test.oss-cn-hangzhou.aliyuncs.com/schedulerX/test.jar',
                      ),
                      'ClassName' => 
                      array (
                        'description' => '任务接口类完整路径，仅是Java类型任务时有该字段。',
                        'type' => 'string',
                        'example' => 'com.alibaba.test.helloword',
                      ),
                      'JobType' => 
                      array (
                        'description' => '任务类型',
                        'type' => 'string',
                        'example' => 'java',
                      ),
                      'AttemptInterval' => 
                      array (
                        'description' => '错误重试间隔时间，单位s，默认值为30。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '30',
                      ),
                      'MapTaskXAttrs' => 
                      array (
                        'description' => '高级配置，仅限于并行计算、内存网格和网格计算使用。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'TaskMaxAttempt' => 
                          array (
                            'description' => '子任务失败重试次数。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0',
                          ),
                          'TaskAttemptInterval' => 
                          array (
                            'description' => '子任务失败重试间隔。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0',
                          ),
                          'ConsumerSize' => 
                          array (
                            'description' => '单机单次触发执行线程数，默认值为5。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '5',
                          ),
                          'QueueSize' => 
                          array (
                            'description' => '子任务队列缓存上限，默认值为10000。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '10000',
                          ),
                          'DispatcherSize' => 
                          array (
                            'description' => '子任务分发线程数，默认值为5。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '5',
                          ),
                          'PageSize' => 
                          array (
                            'description' => '并行任务单次拉取子任务数，默认值为100。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '100',
                          ),
                        ),
                      ),
                      'TimeConfig' => 
                      array (
                        'description' => '时间配置信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Calendar' => 
                          array (
                            'description' => '**cron**类型可以选择填写自定义日历。',
                            'type' => 'string',
                            'example' => '工作日',
                          ),
                          'TimeType' => 
                          array (
                            'description' => '时间配置类型，目前支持以下几种时间类型：

- **cron**：1
- **fix_rate**：3
- **second_delay**：4
- **one_time** ：5
- **api**：100',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '1',
                          ),
                          'DataOffset' => 
                          array (
                            'description' => '**cron**类型可以选择时间偏移，单位为秒（s）。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '0',
                          ),
                          'TimeExpression' => 
                          array (
                            'description' => '时间表达式，目前支持以下几种时间表达类型：

- **api**：无时间表达式。
- **fix_rate**：具体固定频率值，如30表示每隔30s触发一次。
- **cron**：标准的cron表达式。
- **second_delay**：固定延迟多少秒执行一次（1s~60s可选）。',
                            'type' => 'string',
                            'example' => '0 0/10 * * * ?',
                          ),
                        ),
                      ),
                      'JobMonitorInfo' => 
                      array (
                        'description' => '任务监控信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ContactInfo' => 
                          array (
                            'description' => '联系人信息。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'UserPhone' => 
                                array (
                                  'description' => '用户手机号。',
                                  'type' => 'string',
                                  'example' => '1381111****',
                                ),
                                'UserName' => 
                                array (
                                  'description' => '用户名。',
                                  'type' => 'string',
                                  'example' => 'userA',
                                ),
                                'UserMail' => 
                                array (
                                  'description' => '用户邮件地址。',
                                  'type' => 'string',
                                  'example' => 'user@demo.com',
                                ),
                                'Ding' => 
                                array (
                                  'description' => '钉钉Webhook地址。',
                                  'type' => 'string',
                                  'example' => 'https://oapi.dingtalk.com/robot/send?access_token=XXXXXX',
                                ),
                              ),
                            ),
                          ),
                          'MonitorConfig' => 
                          array (
                            'description' => '报警开关以及阈值配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Timeout' => 
                              array (
                                'description' => '超时阈值，单位为秒（s），默认值为7200。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12300',
                              ),
                              'SendChannel' => 
                              array (
                                'description' => '报警发送形式，目前只支持sms。',
                                'type' => 'string',
                                'example' => 'sms',
                              ),
                              'TimeoutKillEnable' => 
                              array (
                                'description' => '超时终止本次触发开关，默认关闭。',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'TimeoutEnable' => 
                              array (
                                'description' => '超时报警开关。取值如下：

- **true**：开启超时报警开关。
- **false**：关闭超时报警开关。',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'FailEnable' => 
                              array (
                                'description' => '失败报警开关。取值如下：

- **true**：开启失败报警开关。
- **false**：关闭失败报警开关。',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'MissWorkerEnable' => 
                              array (
                                'description' => '是否开启无可用机器报警。',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                            ),
                          ),
                        ),
                      ),
                      'XAttrs' => 
                      array (
                        'description' => '任务扩展字段',
                        'type' => 'string',
                        'example' => '{"pageSize":5,"queueSize":10,"consumerSize":5,"dispatcherSize":5,"taskMaxAttempt":0,"taskAttemptInterval":0,"globalConsumerSize":1000,"taskDispatchMode":"push"}',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"jobid: 92583 not match groupId: testSchedulerx.defaultGroup\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobConfigInfo\\": {\\n      \\"JobId\\": 538039,\\n      \\"Status\\": 1,\\n      \\"Parameters\\": \\"test\\",\\n      \\"Description\\": \\"test\\",\\n      \\"ExecuteMode\\": \\"standalone\\",\\n      \\"MaxConcurrency\\": \\"1\\",\\n      \\"Name\\": \\"helloworld\\",\\n      \\"MaxAttempt\\": 0,\\n      \\"Content\\": \\"echo \\\\\\"clear\\\\\\" > /home/admin/edas-container/logs/catalina.out \\",\\n      \\"JarUrl\\": \\"https://test.oss-cn-hangzhou.aliyuncs.com/schedulerX/test.jar\\",\\n      \\"ClassName\\": \\"com.alibaba.test.helloword\\",\\n      \\"JobType\\": \\"java\\",\\n      \\"AttemptInterval\\": 30,\\n      \\"MapTaskXAttrs\\": {\\n        \\"TaskMaxAttempt\\": 0,\\n        \\"TaskAttemptInterval\\": 0,\\n        \\"ConsumerSize\\": 5,\\n        \\"QueueSize\\": 10000,\\n        \\"DispatcherSize\\": 5,\\n        \\"PageSize\\": 100\\n      },\\n      \\"TimeConfig\\": {\\n        \\"Calendar\\": \\"工作日\\",\\n        \\"TimeType\\": 1,\\n        \\"DataOffset\\": 0,\\n        \\"TimeExpression\\": \\"0 0/10 * * * ?\\"\\n      },\\n      \\"JobMonitorInfo\\": {\\n        \\"ContactInfo\\": [\\n          {\\n            \\"UserPhone\\": \\"1381111****\\",\\n            \\"UserName\\": \\"userA\\",\\n            \\"UserMail\\": \\"user@demo.com\\",\\n            \\"Ding\\": \\"https://oapi.dingtalk.com/robot/send?access_token=XXXXXX\\"\\n          }\\n        ],\\n        \\"MonitorConfig\\": {\\n          \\"Timeout\\": 12300,\\n          \\"SendChannel\\": \\"sms\\",\\n          \\"TimeoutKillEnable\\": true,\\n          \\"TimeoutEnable\\": true,\\n          \\"FailEnable\\": true,\\n          \\"MissWorkerEnable\\": true\\n        }\\n      },\\n      \\"XAttrs\\": \\"{\\\\\\"pageSize\\\\\\":5,\\\\\\"queueSize\\\\\\":10,\\\\\\"consumerSize\\\\\\":5,\\\\\\"dispatcherSize\\\\\\":5,\\\\\\"taskMaxAttempt\\\\\\":0,\\\\\\"taskAttemptInterval\\\\\\":0,\\\\\\"globalConsumerSize\\\\\\":1000,\\\\\\"taskDispatchMode\\\\\\":\\\\\\"push\\\\\\"}\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetJobInfoResponse>\\n<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>jobid: 92583 not match groupId: testSchedulerx.defaultGroup</Message>\\n<Data>\\n    <JobConfigInfo>\\n        <Status>1</Status>\\n        <MaxAttempt>0</MaxAttempt>\\n        <Description>test</Description>\\n        <Parameters>test</Parameters>\\n        <JarUrl>https://test.oss-cn-hangzhou.aliyuncs.com/schedulerX/test.jar</JarUrl>\\n        <MaxConcurrency>1</MaxConcurrency>\\n        <TimeConfig>\\n            <TaskAttemptInterval>0</TaskAttemptInterval>\\n            <QueueSize>10000</QueueSize>\\n            <PageSize>100</PageSize>\\n            <DispatcherSize>5</DispatcherSize>\\n            <TaskMaxAttempt>0</TaskMaxAttempt>\\n            <Calendar>工作日</Calendar>\\n            <TimeExpression>0 0/10 * * * ?</TimeExpression>\\n            <ContactInfo>\\n                <UserName>userA</UserName>\\n                <UserPhone>1381111****</UserPhone>\\n            </ContactInfo>\\n            <ConsumerSize>5</ConsumerSize>\\n            <DataOffset>0</DataOffset>\\n            <TimeType>1</TimeType>\\n            <MonitorConfig>\\n                <TimeoutEnable>true</TimeoutEnable>\\n                <Timeout>12300</Timeout>\\n                <FailEnable>true</FailEnable>\\n                <SendChannel>sms</SendChannel>\\n                <TimeoutKillEnable>true</TimeoutKillEnable>\\n            </MonitorConfig>\\n        </TimeConfig>\\n        <Name>helloworld</Name>\\n        <MapTaskXAttrs>\\n            <TaskAttemptInterval>0</TaskAttemptInterval>\\n            <QueueSize>10000</QueueSize>\\n            <PageSize>100</PageSize>\\n            <DispatcherSize>5</DispatcherSize>\\n            <TaskMaxAttempt>0</TaskMaxAttempt>\\n            <Calendar>工作日</Calendar>\\n            <TimeExpression>0 0/10 * * * ?</TimeExpression>\\n            <ContactInfo>\\n                <UserName>userA</UserName>\\n                <UserPhone>1381111****</UserPhone>\\n            </ContactInfo>\\n            <ConsumerSize>5</ConsumerSize>\\n            <DataOffset>0</DataOffset>\\n            <TimeType>1</TimeType>\\n            <MonitorConfig>\\n                <TimeoutEnable>true</TimeoutEnable>\\n                <Timeout>12300</Timeout>\\n                <FailEnable>true</FailEnable>\\n                <SendChannel>sms</SendChannel>\\n                <TimeoutKillEnable>true</TimeoutKillEnable>\\n            </MonitorConfig>\\n        </MapTaskXAttrs>\\n        <JobMonitorInfo>\\n            <TaskAttemptInterval>0</TaskAttemptInterval>\\n            <QueueSize>10000</QueueSize>\\n            <PageSize>100</PageSize>\\n            <DispatcherSize>5</DispatcherSize>\\n            <TaskMaxAttempt>0</TaskMaxAttempt>\\n            <Calendar>工作日</Calendar>\\n            <TimeExpression>0 0/10 * * * ?</TimeExpression>\\n            <ContactInfo>\\n                <UserName>userA</UserName>\\n                <UserPhone>1381111****</UserPhone>\\n            </ContactInfo>\\n            <ConsumerSize>5</ConsumerSize>\\n            <DataOffset>0</DataOffset>\\n            <TimeType>1</TimeType>\\n            <MonitorConfig>\\n                <TimeoutEnable>true</TimeoutEnable>\\n                <Timeout>12300</Timeout>\\n                <FailEnable>true</FailEnable>\\n                <SendChannel>sms</SendChannel>\\n                <TimeoutKillEnable>true</TimeoutKillEnable>\\n            </MonitorConfig>\\n        </JobMonitorInfo>\\n        <Content>echo \\"clear\\" &amp;gt; /home/admin/edas-container/logs/catalina.out</Content>\\n        <ClassName>com.alibaba.test.helloword</ClassName>\\n        <AttemptInterval>30</AttemptInterval>\\n        <ExecuteMode>standalone</ExecuteMode>\\n    </JobConfigInfo>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</GetJobInfoResponse>","errorExample":""}]',
      'title' => '获取指定Jobid任务详情',
      'summary' => '获取指定Jobid任务详情，通常用来更新任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListJobs' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的**应用管理**页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DocTest.Group',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间，在控制台的**命名空间**页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1a72ecb1-b4cc-400a-a71b-20cdec9b****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'JobName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'helloword',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态。

- **0**：表示禁用

- **1**：表示启用',
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
              'Code' => 
              array (
                'description' => '请求状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息，仅出错时返回错误信息。',
                'type' => 'string',
                'example' => 'namespace can not find namespace: 1a72ecb1-b4cc-400a-a71b-20cdec9b****, namespaceSource:null',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID。',
                'type' => 'string',
                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBCB58B',
              ),
              'Success' => 
              array (
                'description' => '调用接口是否成功。取值如下：

- **true**：成功

- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '任务列表信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Jobs' => 
                  array (
                    'description' => '任务列表及任务详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '任务状态。取值如下：

- **1**：启用，可以被正常触发。

- **0**：禁用，不会被触发。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'JarUrl' => 
                        array (
                          'description' => 'JAR包的OSS完整路径。',
                          'type' => 'string',
                          'example' => 'https:doc***.oss-cn-hangzhou.aliyuncs.com/sc-****-D-0.0.2-SNAPSHOT.jar',
                        ),
                        'MaxAttempt' => 
                        array (
                          'description' => '错误最大重试次数，根据业务需求填写，默认值为0。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Parameters' => 
                        array (
                          'description' => '用户自定义参数，运行时可以获取。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Description' => 
                        array (
                          'description' => '任务描述。',
                          'type' => 'string',
                          'example' => 'Test',
                        ),
                        'JobId' => 
                        array (
                          'description' => '任务ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '99341',
                        ),
                        'ExecuteMode' => 
                        array (
                          'description' => '任务执行模式，可能出现的结果如下：

- **standalone**：单机运行

- **broadcast**：广播运行

- **parallel**：并行计算

- **grid**：内存网格

- **batch**：网格计算

- **shard**：分片运行',
                          'type' => 'string',
                          'example' => 'standalone',
                        ),
                        'MaxConcurrency' => 
                        array (
                          'description' => '最大同时运行实例数量，默认值为1， 即上次触发没有运行结束，即使到了运行时刻也不会进行下次触发。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'Name' => 
                        array (
                          'description' => '任务名。',
                          'type' => 'string',
                          'example' => 'helloworld',
                        ),
                        'ClassName' => 
                        array (
                          'description' => '任务接口类完整路径。
当您的任务是Java任务类型时，才有该字段信息。',
                          'type' => 'string',
                          'example' => 'com.alibaba.schedulerx.test.helloworld',
                        ),
                        'Content' => 
                        array (
                          'description' => 'python、shell、go任务类型的脚本代码内容。',
                          'type' => 'string',
                          'example' => 'echo \'hello\'',
                        ),
                        'JobType' => 
                        array (
                          'description' => '任务类型',
                          'type' => 'string',
                          'example' => 'java',
                        ),
                        'AttemptInterval' => 
                        array (
                          'description' => '错误重试间隔，单位s，默认值为30。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '30',
                        ),
                        'MapTaskXAttrs' => 
                        array (
                          'description' => '高级配置，仅限于并行计算、内存网格和网格计算使用。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'TaskMaxAttempt' => 
                            array (
                              'description' => '子任务失败重试次数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'TaskAttemptInterval' => 
                            array (
                              'description' => '子任务失败重试间隔。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'ConsumerSize' => 
                            array (
                              'description' => '单机单次触发执行线程数，默认值为5。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '5',
                            ),
                            'QueueSize' => 
                            array (
                              'description' => '子任务队列缓存上限，默认值为10000。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '10000',
                            ),
                            'DispatcherSize' => 
                            array (
                              'description' => '子任务分发线程数，默认值为5。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '5',
                            ),
                            'PageSize' => 
                            array (
                              'description' => '并行任务单次拉取子任务数，默认值为100。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '100',
                            ),
                          ),
                        ),
                        'TimeConfig' => 
                        array (
                          'description' => '时间配置信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Calendar' => 
                            array (
                              'description' => 'cron类型可以选择填写自定义日历。',
                              'type' => 'string',
                              'example' => '工作日',
                            ),
                            'TimeType' => 
                            array (
                              'description' => '时间配置类型，目前支持以下几种时间类型：

- **1**：cron

- **3**：fix_rate

- **4**：second_delay

- **100**：api',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'DataOffset' => 
                            array (
                              'description' => 'cron类型可以选择时间偏移，单位s。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '0',
                            ),
                            'TimeExpression' => 
                            array (
                              'description' => '时间表达式，目前支持以下几种时间表达类型：

- **api**：无时间表达式。

- **fix_rate**：具体固定频率值，如30表示每隔30s触发一次。

- **cron**：标准的cron表达式。

- **second_delay**：固定延迟多少秒执行一次（1s~60s可选）。',
                              'type' => 'string',
                              'example' => '0 0/10 * * * ?',
                            ),
                          ),
                        ),
                        'JobMonitorInfo' => 
                        array (
                          'description' => '任务监控信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ContactInfo' => 
                            array (
                              'description' => '联系人信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'UserPhone' => 
                                  array (
                                    'description' => '用户手机号。',
                                    'type' => 'string',
                                    'example' => '1381111****',
                                  ),
                                  'UserName' => 
                                  array (
                                    'description' => '用户名称。',
                                    'type' => 'string',
                                    'example' => 'userA',
                                  ),
                                  'Ding' => 
                                  array (
                                    'description' => '钉钉群机器人webhook地址',
                                    'type' => 'string',
                                    'example' => 'https://oapi.dingtalk.com/robot/send?access_token=**********',
                                  ),
                                  'UserMail' => 
                                  array (
                                    'description' => '用户邮件地址',
                                    'type' => 'string',
                                    'example' => 'user@mail.com',
                                  ),
                                ),
                              ),
                            ),
                            'MonitorConfig' => 
                            array (
                              'description' => '报警开关以及阈值配置。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Timeout' => 
                                array (
                                  'description' => '超时阈值，单位s，默认7200。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '12300',
                                ),
                                'SendChannel' => 
                                array (
                                  'description' => '报警发送形式，目前只支持sms。',
                                  'type' => 'string',
                                  'example' => 'sms',
                                ),
                                'TimeoutKillEnable' => 
                                array (
                                  'description' => '超时终止本次触发开关，默认关闭。

- **true**：开启

- **false**：关闭',
                                  'type' => 'boolean',
                                  'example' => 'false',
                                ),
                                'TimeoutEnable' => 
                                array (
                                  'description' => '超时报警开关。取值如下：

- **true**：开启

- **false**：关闭',
                                  'type' => 'boolean',
                                  'example' => 'true',
                                ),
                                'FailEnable' => 
                                array (
                                  'description' => '失败报警开关。取值如下：

- **true**：开启

- **false**：关闭',
                                  'type' => 'boolean',
                                  'example' => 'true',
                                ),
                                'MissWorkerEnable' => 
                                array (
                                  'description' => '是否开启无可用机器报警',
                                  'type' => 'boolean',
                                  'example' => 'true',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'XAttrs' => 
                        array (
                          'description' => '任务扩展字段',
                          'type' => 'string',
                          'example' => '{"pageSize":5,"queueSize":10,"consumerSize":5,"dispatcherSize":5,"taskMaxAttempt":0,"taskAttemptInterval":0,"globalConsumerSize":1000,"taskDispatchMode":"push"}',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"namespace can not find namespace: 1a72ecb1-b4cc-400a-a71b-20cdec9b****, namespaceSource:null\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBCB58B\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Jobs\\": [\\n      {\\n        \\"Status\\": 1,\\n        \\"JarUrl\\": \\"https:doc***.oss-cn-hangzhou.aliyuncs.com/sc-****-D-0.0.2-SNAPSHOT.jar\\",\\n        \\"MaxAttempt\\": 0,\\n        \\"Parameters\\": \\"test\\",\\n        \\"Description\\": \\"Test\\",\\n        \\"JobId\\": 99341,\\n        \\"ExecuteMode\\": \\"standalone\\",\\n        \\"MaxConcurrency\\": \\"1\\",\\n        \\"Name\\": \\"helloworld\\",\\n        \\"ClassName\\": \\"com.alibaba.schedulerx.test.helloworld\\",\\n        \\"Content\\": \\"echo \'hello\'\\",\\n        \\"JobType\\": \\"java\\",\\n        \\"AttemptInterval\\": 30,\\n        \\"MapTaskXAttrs\\": {\\n          \\"TaskMaxAttempt\\": 0,\\n          \\"TaskAttemptInterval\\": 0,\\n          \\"ConsumerSize\\": 5,\\n          \\"QueueSize\\": 10000,\\n          \\"DispatcherSize\\": 5,\\n          \\"PageSize\\": 100\\n        },\\n        \\"TimeConfig\\": {\\n          \\"Calendar\\": \\"工作日\\",\\n          \\"TimeType\\": 1,\\n          \\"DataOffset\\": 0,\\n          \\"TimeExpression\\": \\"0 0/10 * * * ?\\"\\n        },\\n        \\"JobMonitorInfo\\": {\\n          \\"ContactInfo\\": [\\n            {\\n              \\"UserPhone\\": \\"1381111****\\",\\n              \\"UserName\\": \\"userA\\",\\n              \\"Ding\\": \\"https://oapi.dingtalk.com/robot/send?access_token=**********\\",\\n              \\"UserMail\\": \\"user@mail.com\\"\\n            }\\n          ],\\n          \\"MonitorConfig\\": {\\n            \\"Timeout\\": 12300,\\n            \\"SendChannel\\": \\"sms\\",\\n            \\"TimeoutKillEnable\\": false,\\n            \\"TimeoutEnable\\": true,\\n            \\"FailEnable\\": true,\\n            \\"MissWorkerEnable\\": true\\n          }\\n        },\\n        \\"XAttrs\\": \\"{\\\\\\"pageSize\\\\\\":5,\\\\\\"queueSize\\\\\\":10,\\\\\\"consumerSize\\\\\\":5,\\\\\\"dispatcherSize\\\\\\":5,\\\\\\"taskMaxAttempt\\\\\\":0,\\\\\\"taskAttemptInterval\\\\\\":0,\\\\\\"globalConsumerSize\\\\\\":1000,\\\\\\"taskDispatchMode\\\\\\":\\\\\\"push\\\\\\"}\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListJobsResponse>\\n<Message>namespace can not find namespace: 1a72ecb1-b4cc-400a-a71b-20cdec9b****, namespaceSource:null</Message>\\n<RequestId>71BCC0E3-64B2-4B63-A870-AFB64EBCB58B</RequestId>\\n<Data>\\n    <Jobs>\\n        <Status>1</Status>\\n        <MaxAttempt>0</MaxAttempt>\\n        <Parameters>test</Parameters>\\n        <Description>Test</Description>\\n        <Content>echo \'hello\'</Content>\\n        <JarUrl>https:doc***.oss-cn-hangzhou.aliyuncs.com/sc-****-D-0.0.2-SNAPSHOT.jar</JarUrl>\\n        <MaxConcurrency>1</MaxConcurrency>\\n        <ClassName>com.alibaba.schedulerx.test.helloworld</ClassName>\\n        <AttemptInterval>30</AttemptInterval>\\n        <ExecuteMode>standalone</ExecuteMode>\\n        <JobId>99341</JobId>\\n        <Name>helloworld</Name>\\n        <MapTaskXAttrs>\\n            <TaskAttemptInterval>0</TaskAttemptInterval>\\n            <QueueSize>10000</QueueSize>\\n            <DispatcherSize>5</DispatcherSize>\\n            <PageSize>100</PageSize>\\n            <TaskMaxAttempt>0</TaskMaxAttempt>\\n            <ConsumerSize>5</ConsumerSize>\\n        </MapTaskXAttrs>\\n        <TimeConfig>\\n            <Calendar>工作日</Calendar>\\n            <TimeExpression>0 0/10 * * * ?</TimeExpression>\\n            <DataOffset>0</DataOffset>\\n            <TimeType>1</TimeType>\\n        </TimeConfig>\\n        <JobMonitorInfo>\\n            <ContactInfo>\\n                <UserName>userA</UserName>\\n                <UserPhone>1381111****</UserPhone>\\n            </ContactInfo>\\n            <MonitorConfig>\\n                <TimeoutEnable>true</TimeoutEnable>\\n                <Timeout>12300</Timeout>\\n                <FailEnable>true</FailEnable>\\n                <SendChannel>sms</SendChannel>\\n                <TimeoutKillEnable>false</TimeoutKillEnable>\\n            </MonitorConfig>\\n        </JobMonitorInfo>\\n    </Jobs>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</ListJobsResponse>","errorExample":""}]',
      'title' => '获取任务列表',
      'summary' => '获取任务列表。',
      'description' => '在调用该接口前，需要在POM文件添加以下依赖：

```
<dependency>
      <groupId>com.aliyun</groupId>
      <artifactId>aliyun-java-sdk-schedulerx2</artifactId>
      <version>1.0.5</version>
</dependency>
```',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '##  Demo
```
package com.alibaba.schedulerx.pop;

import java.util.List;

import com.alibaba.schedulerx.common.util.JsonUtil;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.exceptions.ClientException;
import com.aliyuncs.exceptions.ServerException;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.ListJobsRequest;
import com.aliyuncs.schedulerx2.model.v20190430.ListJobsResponse;
import com.aliyuncs.schedulerx2.model.v20190430.ListJobsResponse.Data.Job;

public class TestListJobs {

    public static void main(String[] args) {
        //OpenAPI的接入点，具体查看支持地域列表以及购买机器地域填写。
        String regionId = "cn-hangzhou";
        //鉴权使用的AccessKey ID，由阿里云官网控制台获取。
        String accessKeyId = "XXXXXXXX";
        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取。
        String accessKeySecret = "XXXXXXXX";
        //产品名称
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写
        String domain ="schedulerx.cn.hangzhou.aliyuncs.com";
        //构建OpenAPI客户端。
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);
        
        ListJobsRequest request = new ListJobsRequest();
        //命名空间。
        request.setNamespace("433d8b23-06e9-408c-aaaa-90d4d1b****");
        //应用ID。
        request.setGroupId("DocTest.Group");
        ListJobsResponse response;
        try {
            response = client.getAcsResponse(request);
            if (!response.getSuccess()) {
                System.out.println(JsonUtil.toJson(response));
                System.out.println(response.getCode());
            } else {
                System.out.println(JsonUtil.toJson(response));
                List<Job> jobs = response.getData().getJobs();
                for (Job job : jobs) {
                    System.out.println("jobId:" + job.getJobId() + ", name:" + job.getName() + ", status=" + job.getStatus());
                }
            }
        } catch (ServerException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        } catch (ClientException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }
    }
    
}

```',
    ),
    'ExecuteJob' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，在控制台的任务管理页面中获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '92583',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceParameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次触发携带参数，可以是任意字符串，`processor`代码通过`context.getInstanceParameters()`获取，区别于创建任务自定义参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        3 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        4 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        6 => 
        array (
          'name' => 'CheckJobStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否检查任务状态，取值如下：**true**：任务启用才能执行任务。**false**：任务不启用也可以执行任务。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'DesignateType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '指定机器类型：1.workerAddr; 2. label',
            'description' => '指定机器的类型，取值如下：**1**：指定worker。**2**：指定label',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'Worker',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '指定机器的workerAddr',
            'description' => '应用的worker地址，需要先通过GetWokerList接口返回workerAddress',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxxxxx@127.0.0.1:222',
          ),
        ),
        9 => 
        array (
          'name' => 'Label',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '指定机器的标签',
            'description' => 'worker的标签',
            'type' => 'string',
            'required' => false,
            'example' => 'gray',
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
                'description' => '返回码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误消息，仅出错时返回错误信息。',
                'type' => 'string',
                'example' => 'groupid not exist groupId: testSchedulerx.defaultGroup namespace: adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID。',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108****',
              ),
              'Success' => 
              array (
                'description' => '触发任务是否成功。取值如下：

- `true`：触发任务成功。
- `false`：触发任务失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '如果成功，会返回任务实例ID。',
                'type' => 'object',
                'properties' => 
                array (
                  'JobInstanceId' => 
                  array (
                    'description' => '任务实例ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '11111111',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"groupid not exist groupId: testSchedulerx.defaultGroup namespace: adcfc35d-e2fe-4fe9-bbaa-20e90ffc****\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108****\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobInstanceId\\": 11111111\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ExecuteJobResponse>\\n    <Code>200</Code>\\n    <Message>groupid not exist groupId: testSchedulerx.defaultGroup namespace: adcfc35d-e2fe-4fe9-bbaa-20e90ffc****</Message>\\n    <RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108****</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <JobInstanceId>11111111</JobInstanceId>\\n    </Data>\\n</ExecuteJobResponse>","errorExample":""}]',
      'title' => '触发一次任务',
      'summary' => '触发一次任务立即运行。',
      'description' => '> 因为`JobID`联合`ScheduleTime`是唯一索引，所以同一个任务连续调用ExecuteJob接口的时，每次要sleep一秒，否则任务有可能会失败。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DesignateWorkers' => 
    array (
      'summary' => '指定机器。',
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '命名空间UID',
            'description' => '命名空间UID',
            'type' => 'string',
            'required' => true,
            'example' => '4a06d5ea-f576-4326-842c-fb14ea043d8d',
          ),
        ),
        1 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '命名空间来源',
            'description' => '命名空间来源',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用分组ID',
            'description' => '应用分组ID',
            'type' => 'string',
            'required' => true,
            'example' => 'hxm.test',
          ),
        ),
        3 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务ID',
            'description' => '任务ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '144153',
          ),
        ),
        4 => 
        array (
          'name' => 'Transferable',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否故障转移',
            'description' => '是否故障转移',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'DesignateType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '指定机器的类型',
            'description' => '指定机器的类型：1.worker, 2.label',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'enumValueTitles' => 
            array (
              1 => 'worker',
              2 => 'label',
            ),
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'Workers',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '指定机器列表json格式',
            'description' => '指定机器列表JSON格式列表',
            'type' => 'string',
            'required' => false,
            'example' => '["127.0.0.1","127.0.0.2"]',
          ),
        ),
        7 => 
        array (
          'name' => 'Labels',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '指定label列表json格式',
            'description' => '指定`label`列表`json`格式列表',
            'type' => 'string',
            'required' => false,
            'example' => '["gray"]',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
            'type' => 'string',
            'required' => true,
            'example' => 'public',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '765xxx',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'job is not existed',
              ),
              'Code' => 
              array (
                'title' => '错误码',
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => '是否成功',
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"765xxx\\",\\n  \\"Message\\": \\"job is not existed\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DesignateWorkersResponse>\\n    <RequestId>765xxx</RequestId>\\n    <Message>job is not existed</Message>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DesignateWorkersResponse>","errorExample":""}]',
      'title' => '指定机器',
      'extraInfo' => '##  示例Demo

```
package com.alibaba.schedulerx.pop;

import java.util.List;

import com.alibaba.schedulerx.common.util.JsonUtil;

import com.aliyuncs.DefaultAcsClient;
import com.aliyuncs.exceptions.ClientException;
import com.aliyuncs.exceptions.ServerException;
import com.aliyuncs.profile.DefaultProfile;
import com.aliyuncs.schedulerx2.model.v20190430.DesignateWorkersRequest;
import com.aliyuncs.schedulerx2.model.v20190430.DesignateWorkersResponse;
import com.google.common.collect.Lists;

public class TestDesignateWorkers {

    public static void main(String[] args) {
     // OpenAPI的接入点，具体查看支持地域列表或根据购买地域填写
        String regionId = "public";
      //鉴权使用的AccessKey ID，由阿里云官网控制台获取
        String accessKeyId = "xxxxxxxx";
        //鉴权使用的AccessKey Secret，由阿里云官网控制台获取
        String accessKeySecret = "xxxxxxxxx";
        //产品名称
        String productName ="schedulerx2";
        //对照支持地域列表选择Domain填写
        String domain ="schedulerx.aliyuncs.com";
        //构建OpenAPI客户端
        DefaultProfile.addEndpoint(regionId, productName, domain);
        DefaultProfile defaultProfile = DefaultProfile.getProfile(regionId, accessKeyId, accessKeySecret);
        DefaultAcsClient client = new DefaultAcsClient(defaultProfile);
        
        DesignateWorkersRequest request = new DesignateWorkersRequest();
        request.setNamespace("433d8b23-06e9-408c-aaaa-90d4d1b9a4af");
        request.setGroupId("xuren_test");
        request.setJobId(3048L);
        //是否故障转移
        request.setTransferable(true);
        //1表示指定worker，2表示指定label
        request.setDesignateType(1);
        List<String> workers = Lists.newArrayList();
        workers.add("30.225.16.104");
        //workers需要json格式
        request.setWorkers(JsonUtil.toJson(workers));
        DesignateWorkersResponse response;
        try {
            response = client.getAcsResponse(request);
            System.out.println(JsonUtil.toJson(response));
        } catch (ServerException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        } catch (ClientException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }
    }
    
}
   
 ```',
    ),
    'RerunJob' => 
    array (
      'summary' => '重跑任务的历史数据，只有专业版才支持。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用分组ID，在控制台的应用管理页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123',
          ),
        ),
        5 => 
        array (
          'name' => 'StartDate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '开始日期时间戳，精确到毫秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1645459200000',
          ),
        ),
        6 => 
        array (
          'name' => 'EndDate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '结束日期时间戳，精确到毫秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1645718400000',
          ),
        ),
        7 => 
        array (
          'name' => 'DataTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据时间字符串，格式为HH:mm:ss',
            'type' => 'string',
            'required' => true,
            'example' => '10:00:00',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => 'API执行是否成功。取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'jobId=xxx is not existed',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"jobId=xxx is not existed\\"\\n}","type":"json"}]',
      'title' => '重刷任务的历史数据',
    ),
    'StopInstance' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'operationType' => 'write',
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，在控制台的任务管理页面中获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '92583',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运行实例ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '11111111',
          ),
        ),
        2 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        3 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        4 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
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
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息，仅错误时返回错误信息。',
                'type' => 'string',
                'example' => 'Your request is denied as lack of ssl protect.',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Success' => 
              array (
                'description' => '终止任务运行是否成功。取值如下：

- **true**：终止任务运行成功。
- **false**：终止任务运行失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"Your request is denied as lack of ssl protect.\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StopInstanceResponse>\\n<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>Your request is denied as lack of ssl protect.</Message>\\n<Code>200</Code>\\n<Success>true</Success>\\n</StopInstanceResponse>","errorExample":""}]',
      'title' => '终止正在运行的实例',
      'summary' => '终止某次正在运行的实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetJobInstance' => 
    array (
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '区域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间id，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用id，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        3 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，在控制台的任务管理页面中获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '92583',
          ),
        ),
        4 => 
        array (
          'name' => 'JobInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务实例ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1685883418',
          ),
        ),
        5 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
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
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'jobId=xxx is not existed',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一id',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Success' => 
              array (
                'description' => '获取任务实例详情是否成功。取值如下：

- **true**：获取任务实例详情成功。
- **false**：获取任务实例详情失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => 'instance信息',
                'type' => 'object',
                'properties' => 
                array (
                  'JobInstanceDetail' => 
                  array (
                    'description' => '任务实例详细信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Status' => 
                      array (
                        'description' => '实例状态。包含以下几种状态：

- **1**：等待 
- **3**：运行中 
- **4**：成功
- **5**：失败 
- **9**：拒绝

对应枚举类：
com.alibaba.schedulerx.common.domain.InstanceStatus',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '4',
                      ),
                      'Progress' => 
                      array (
                        'description' => '实例进度详情',
                        'type' => 'string',
                        'example' => '{"taskProgress":[{"name":"MAP_TASK_ROOT","total":1,"pulled":1,"running":0,"success":0,"failed":0}],"workerProgress":[{"workerAddr":"11.122.241.245:34865","total":1,"pulled":1,"running":0,"success":0,"failed":0}]}',
                      ),
                      'Result' => 
                      array (
                        'description' => '实例执行结果',
                        'type' => 'string',
                        'example' => '{\'TotalSize\': 31, \'CurrentPage\': 5, \'PageSize\': 10}',
                      ),
                      'InstanceId' => 
                      array (
                        'description' => '实例id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1189853849',
                      ),
                      'TimeType' => 
                      array (
                        'description' => '实例调度时间类型，包含以下几种时间类型：

- **cron**：1
- **fix_rate**：3
- **second_delay**：4
- **api**：100

对应枚举类：com.alibaba.schedulerx.common.domain.TimeType',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TriggerType' => 
                      array (
                        'description' => '触发类型，包含以下几种触发类型：

- **1**：定时调度正常触发
- **2**：数据重刷
- **3**：API触发
- **4**：用户手动点击重跑
- **5**：系统重试（系统异常，如DB异常）

对应枚举类：com.alibaba.schedulerx.common.domain.TriggerType',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'EndTime' => 
                      array (
                        'description' => '任务执行结束时间',
                        'type' => 'string',
                        'example' => '2020-07-27 11:52:10',
                      ),
                      'StartTime' => 
                      array (
                        'description' => '任务执行开始时间',
                        'type' => 'string',
                        'example' => '2020-07-27 11:52:10',
                      ),
                      'Executor' => 
                      array (
                        'description' => '执行人',
                        'type' => 'string',
                        'example' => '张三
',
                      ),
                      'JobId' => 
                      array (
                        'description' => '任务id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '92583',
                      ),
                      'ScheduleTime' => 
                      array (
                        'description' => '计划调度时间',
                        'type' => 'string',
                        'example' => '2020-07-27 11:52:10',
                      ),
                      'DataTime' => 
                      array (
                        'description' => '任务数据时间',
                        'type' => 'string',
                        'example' => '2020-07-27 11:52:10',
                      ),
                      'WorkAddr' => 
                      array (
                        'description' => '被触发客户端ip:port',
                        'type' => 'string',
                        'example' => '192.168.0.0:16',
                      ),
                      'Parameters' => 
                      array (
                        'description' => '任务运行实例参数信息。',
                        'type' => 'string',
                        'example' => '{\\"alertId\\":11111}',
                      ),
                      'JobName' => 
                      array (
                        'description' => '任务名称',
                        'type' => 'string',
                        'example' => 'ManualJob',
                      ),
                      'TraceId' => 
                      array (
                        'description' => '调用链ID，可用于精确查询调用信息。',
                        'type' => 'string',
                        'example' => '210e845016596663430048015d0a2c',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"jobId=xxx is not existed\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobInstanceDetail\\": {\\n      \\"Status\\": 4,\\n      \\"Progress\\": \\"{\\\\\\"taskProgress\\\\\\":[{\\\\\\"name\\\\\\":\\\\\\"MAP_TASK_ROOT\\\\\\",\\\\\\"total\\\\\\":1,\\\\\\"pulled\\\\\\":1,\\\\\\"running\\\\\\":0,\\\\\\"success\\\\\\":0,\\\\\\"failed\\\\\\":0}],\\\\\\"workerProgress\\\\\\":[{\\\\\\"workerAddr\\\\\\":\\\\\\"11.122.241.245:34865\\\\\\",\\\\\\"total\\\\\\":1,\\\\\\"pulled\\\\\\":1,\\\\\\"running\\\\\\":0,\\\\\\"success\\\\\\":0,\\\\\\"failed\\\\\\":0}]}\\",\\n      \\"Result\\": \\"{\'TotalSize\': 31, \'CurrentPage\': 5, \'PageSize\': 10}\\",\\n      \\"InstanceId\\": 1189853849,\\n      \\"TimeType\\": 1,\\n      \\"TriggerType\\": 1,\\n      \\"EndTime\\": \\"2020-07-27 11:52:10\\",\\n      \\"StartTime\\": \\"2020-07-27 11:52:10\\",\\n      \\"Executor\\": \\"张三\\\\n\\",\\n      \\"JobId\\": 92583,\\n      \\"ScheduleTime\\": \\"2020-07-27 11:52:10\\",\\n      \\"DataTime\\": \\"2020-07-27 11:52:10\\",\\n      \\"WorkAddr\\": \\"192.168.0.0:16\\",\\n      \\"Parameters\\": \\"{\\\\\\\\\\\\\\"alertId\\\\\\\\\\\\\\":11111}\\",\\n      \\"JobName\\": \\"ManualJob\\",\\n      \\"TraceId\\": \\"210e845016596663430048015d0a2c\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取指定任务实例详情',
      'summary' => '返回任务实例的信息，可以查看任务实例的状态和进度。',
    ),
    'GetJobInstanceList' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的**命名空间**页面中获取',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用分组ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'example' => '92583',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '查询指定状态的任务实例列表',
            'description' => '实例状态。包含以下几种状态：

1：等待
3：运行中
4：成功
5：失败
9：拒绝
对应枚举类： com.alibaba.schedulerx.common.domain.InstanceStatus',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
            'enum' => 
            array (
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'StartTimestamp',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '开始时间戳（毫秒）',
            'description' => '开始时间（时间戳）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1684116000000',
          ),
        ),
        7 => 
        array (
          'name' => 'EndTimestamp',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '结束时间戳（毫秒）',
            'description' => '结束时间（时间戳）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1684202400000',
          ),
        ),
        8 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页获取数据，分页号，默认是1',
            'description' => '分页获取数据，分页号，默认是1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页获取数据，分页大小，默认是10',
            'description' => '分页获取数据，分页大小，默认是10',
            'type' => 'integer',
            'format' => 'int32',
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
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误消息，仅错误时返回错误信息。',
                'type' => 'string',
                'example' => 'jobid: 92583 not match groupId: testSchedulerx.defaultGroup',
              ),
              'RequestId' => 
              array (
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '704A2A61-3681-5568-92F7-2DFCC53F33D1',
              ),
              'Success' => 
              array (
                'description' => '获取任务的执行实例列表是否成功。取值如下：

- **true**：获取任务的执行实例列表成功。
- **false**：获取任务的执行实例列表失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => 'instance列表',
                'type' => 'object',
                'properties' => 
                array (
                  'JobInstanceDetails' => 
                  array (
                    'description' => '任务实例详细信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '实例状态。包含以下几种状态：

- **1**：等待 
- **3**：运行中 
- **4**：成功
- **5**：失败 
- **9**：拒绝

对应枚举类：
com.alibaba.schedulerx.common.domain.InstanceStatus',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'Progress' => 
                        array (
                          'description' => '实例进度详情',
                          'type' => 'string',
                        ),
                        'Result' => 
                        array (
                          'description' => '实例执行结果',
                          'type' => 'string',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1042499986',
                        ),
                        'TimeType' => 
                        array (
                          'description' => '实例调度时间类型，包含以下几种类型：

- **cron**：1
- **fix_rate**：3
- **second_delay**： 4
- **api**：100

对应枚举类：com.alibaba.schedulerx.common.domain.TimeType',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'TriggerType' => 
                        array (
                          'description' => '触发类型，包含以下几种触发类型：

- **1**: 定时调度正常触发
- **2**：数据重刷
- **3**：API触发
- **4**：用户手动点击重跑
- **5**：系统重试（系统异常，如DB异常）

对应枚举类：com.alibaba.schedulerx.common.domain.TriggerType',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'EndTime' => 
                        array (
                          'description' => '任务执行结束时间',
                          'type' => 'string',
                          'example' => '2020-07-27 11:52:10',
                        ),
                        'StartTime' => 
                        array (
                          'description' => '任务执行开始时间',
                          'type' => 'string',
                          'example' => '2020-07-27 11:52:10',
                        ),
                        'Executor' => 
                        array (
                          'description' => '执行人',
                          'type' => 'string',
                          'example' => 'A',
                        ),
                        'JobId' => 
                        array (
                          'description' => '任务ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '92583',
                        ),
                        'ScheduleTime' => 
                        array (
                          'description' => '任务调度时间',
                          'type' => 'string',
                          'example' => '2020-07-27 11:52:10',
                        ),
                        'DataTime' => 
                        array (
                          'description' => '数据时间',
                          'type' => 'string',
                          'example' => '2020-07-27 11:52:10',
                        ),
                        'WorkAddr' => 
                        array (
                          'description' => '被触发客户端ip:port',
                          'type' => 'string',
                          'example' => '192.168.0.0:16',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"jobid: 92583 not match groupId: testSchedulerx.defaultGroup\\",\\n  \\"RequestId\\": \\"704A2A61-3681-5568-92F7-2DFCC53F33D1\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"JobInstanceDetails\\": [\\n      {\\n        \\"Status\\": 4,\\n        \\"Progress\\": \\"\\",\\n        \\"Result\\": \\"\\",\\n        \\"InstanceId\\": 1042499986,\\n        \\"TimeType\\": 1,\\n        \\"TriggerType\\": 3,\\n        \\"EndTime\\": \\"2020-07-27 11:52:10\\",\\n        \\"StartTime\\": \\"2020-07-27 11:52:10\\",\\n        \\"Executor\\": \\"A\\",\\n        \\"JobId\\": 92583,\\n        \\"ScheduleTime\\": \\"2020-07-27 11:52:10\\",\\n        \\"DataTime\\": \\"2020-07-27 11:52:10\\",\\n        \\"WorkAddr\\": \\"192.168.0.0:16\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取指定任务ID的执行实例列表',
      'summary' => '根据关键字过滤，返回任务执行的历史记录。',
    ),
    'RetryJobInstance' => 
    array (
      'summary' => '重跑失败或者成功状态的任务实例，只有专业版才支持。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用分组ID，在控制台的应用管理页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123',
          ),
        ),
        5 => 
        array (
          'name' => 'JobInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务实例ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => 'API执行是否成功。取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'jobId=xxx is not existed',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"jobId=xxx is not existed\\"\\n}","type":"json"}]',
      'title' => '重跑任务实例',
    ),
    'SetJobInstanceSuccess' => 
    array (
      'summary' => '强制设置任务实例状态为成功状态，只有专业版才支持。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用分组ID，在控制台的应用管理页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123',
          ),
        ),
        5 => 
        array (
          'name' => 'JobInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务实例ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => 'API执行是否成功。取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'jobId=xxx is not existed',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"jobId=xxx is not existed\\"\\n}","type":"json"}]',
      'title' => '标记任务实例成功',
    ),
    'GrantPermission' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间UID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffcdf01',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用分组ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '277641081920123456',
          ),
        ),
        5 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lilei',
          ),
        ),
        6 => 
        array (
          'name' => 'GrantOption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否允许grantoption。取值如下：-**true**：允许。-**false**：不允许。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '400',
              ),
              'Message' => 
              array (
                'description' => '错误信息，仅出错时返回错误信息。',
                'type' => 'string',
                'example' => 'Your request is denied as lack of ssl protect.',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Success' => 
              array (
                'description' => '调用接口是否成功。取值如下：

- **true**：成功

- **false**：失败',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 400,\\n  \\"Message\\": \\"Your request is denied as lack of ssl protect.\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": false\\n}","errorExample":""},{"type":"xml","example":"<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>Your request is denied as lack of ssl protect.</Message>\\n<Code>400</Code>\\n<Success>false</Success>","errorExample":""}]',
      'title' => '给指定分组授权',
      'summary' => '给指定分组授权。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RevokePermission' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-shenzhen',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间UID，在控制台的命名空间页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffcdf01',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的应用管理页面中获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test.defalutGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云账号UID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '277641081920123456',
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
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '400',
              ),
              'Message' => 
              array (
                'description' => '错误消息，仅出错时返回错误信息。',
                'type' => 'string',
                'example' => 'Your request is denied as lack of ssl protect.',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Success' => 
              array (
                'description' => '调用接口是否成功。取值如下：

- **true**：成功

- **false**：失败',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 400,\\n  \\"Message\\": \\"Your request is denied as lack of ssl protect.\\",\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Success\\": false\\n}","errorExample":""},{"type":"xml","example":"<RequestId>4F68ABED-AC31-4412-9297-D9A8F0401108</RequestId>\\n<Message>Your request is denied as lack of ssl protect.</Message>\\n<Code>400</Code>\\n<Success>false</Success>","errorExample":""}]',
      'title' => '取消指定阿里云子账号的权限',
      'summary' => '取消指定阿里云子账号的权限。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetLog' => 
    array (
      'summary' => '通过该API可以查询任务的运行日志，需要开通专业版才支持。',
      'methods' => 
      array (
        0 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的命名空间页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '特殊第三方才需要填写',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用分组ID，在控制台的应用管理页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '任务ID',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        5 => 
        array (
          'name' => 'JobInstanceId',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '任务实例ID',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        6 => 
        array (
          'name' => 'StartTimestamp',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '开始时间戳，精确到毫秒

><notice>开始时间戳不设置，默认取当前时间的30分钟之前></notice>',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1675739364000',
          ),
        ),
        7 => 
        array (
          'name' => 'EndTimestamp',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '结束时间戳，精确到毫秒><notice>结束时间戳不设置，默认取当前时间></notice>',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1675739484000',
          ),
        ),
        8 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '关键字',
            'type' => 'string',
            'required' => false,
            'example' => 'ERROR',
          ),
        ),
        9 => 
        array (
          'name' => 'Line',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '行数，最大不超过200行',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '0',
            'example' => '50',
            'default' => '50',
          ),
        ),
        10 => 
        array (
          'name' => 'Offset',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '偏移多少行，可以作为分页查询',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        11 => 
        array (
          'name' => 'Reverse',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '是否逆序，默认逆序',
            'type' => 'boolean',
            'deprecated' => false,
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求唯一ID',
                'type' => 'string',
                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => 'API执行是否成功。取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'jobid=xxx is not existed',
              ),
              'Data' => 
              array (
                'description' => '返回的日志封装在data里',
                'type' => 'object',
                'properties' => 
                array (
                  'Logs' => 
                  array (
                    'description' => 'logs是一个string的数组',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '包含了每一行的日志',
                      'type' => 'string',
                      'example' => 'hello world',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"jobid=xxx is not existed\\",\\n  \\"Data\\": {\\n    \\"Logs\\": [\\n      \\"hello world\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询日志',
    ),
    'DeleteRouteStrategy' => 
    array (
      'summary' => '删除路由策略。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的**命名空间**页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的**应用管理**页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        3 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，在控制台的**任务管理**页面中获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '92583',
            'default' => '-1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息。',
                'type' => 'string',
                'example' => 'strategy is already deleted.',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7',
              ),
              'Success' => 
              array (
                'description' => '调用接口是否成功。取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"strategy is already deleted.\\",\\n  \\"RequestId\\": \\"71BCC0E3-64B2-4B63-A870-AFB64EBCB5A7\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '删除路由策略',
    ),
    'BatchDeleteRouteStrategy' => 
    array (
      'summary' => '批量删除路由策略。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的**命名空间**页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID，在控制台的**应用管理**页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        3 => 
        array (
          'name' => 'JobIdList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '任务ID列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '任务ID，在控制台的**任务管理**页面中获取',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '99341',
            ),
            'required' => false,
            'maxItems' => 3000,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '704A2A61-3681-5568-92F7-2DFCC53F33D1',
              ),
              'Code' => 
              array (
                'description' => '接口状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息。',
                'type' => 'string',
                'example' => 'job is not existed, jobId=162837',
              ),
              'Success' => 
              array (
                'description' => '调用接口是否成功。取值如下：

- **true**：成功

- **false**：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"704A2A61-3681-5568-92F7-2DFCC53F33D1\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"job is not existed, jobId=162837\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '批量删除路由策略',
    ),
    'CreateRouteStrategy' => 
    array (
      'summary' => '创建路由策略。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '路由策略名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test-strategy',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用分组ID，在控制台的**应用管理**页面中获取',
            'type' => 'string',
            'required' => true,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        3 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务ID，在控制台的**任务管理**页面中获取。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '54978',
            'default' => '-1',
          ),
        ),
        4 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '路由策略类型。取值如下：
- **3**：按照比例进行路由。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
            'default' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '路由策略状态，取值如下

- **0**：表示禁用

- **1**：表示启用',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'StrategyContent',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '路由策略详情JSON字段。关于此字段的详细说明参见下文**关于请求参数的补充说明**。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"percentage":20,"target":"[\\"version1\\"]","targetType":"label"}]',
          ),
        ),
        7 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间ID，在控制台的**命名空间**页面中获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4F68ABED-AC31-4412-9297-D9A8F0401108',
              ),
              'Code' => 
              array (
                'description' => '接口状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '附加信息，包含报错与提示',
                'type' => 'string',
                'example' => 'strategy name is null or empty.',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功。取值如下：

- **true**：调用成功。

- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4F68ABED-AC31-4412-9297-D9A8F0401108\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"strategy name is null or empty.\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {}\\n}","type":"json"}]',
      'title' => '创建路由策略',
      'requestParamsDescription' => '当路由策略类型为**3**时，路由策略详情字段配置如下：

- **percentage**：调度路由百分比，取值范围为**0-100**，单位为%

- **target**：调度的目标，此处是一个列表，可以配置多个目标，若**targetType**为"**label**"，则列表中配置**label**名称，若**targetType**为"**worker**"，则列表中配置**worker**的IP地址

- **targetType**：调度目标类型，可配置为"**label**"或"**worker**"，表示调度到指定label的机器上或者调度到指定IP的机器上',
    ),
    'GetOverview' => 
    array (
      'summary' => '获取专业版应用任务调度概览数据信息。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域Region ID',
            'description' => '区域Region ID',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '命名空间UID',
            'description' => '命名空间UID',
            'type' => 'string',
            'required' => false,
            'example' => 'adcfc35d-e2fe-4fe9-bbaa-20e90ffc****',
          ),
        ),
        2 => 
        array (
          'name' => 'NamespaceSource',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '',
            'description' => '命名空间来源，特殊第三方才需要填写',
            'type' => 'string',
            'required' => false,
            'example' => 'schedulerx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用分组ID',
            'description' => '应用分组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'testSchedulerx.defaultGroup',
          ),
        ),
        4 => 
        array (
          'name' => 'Operate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '可选项
query:查询区间数据
query_range:查询区间时许数据',
            'description' => '可选项
query:查询区间数据
query_range:查询区间时许数据',
            'type' => 'string',
            'required' => true,
            'example' => 'query',
            'enum' => 
            array (
              0 => 'query',
              1 => 'query_range',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'MetricType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '可选项
0:任务类基础信息
1:任务运行信息',
            'description' => '可选项
0:任务类基础信息
1:任务运行信息',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
            'enum' => 
            array (
              0 => '0',
              1 => '1',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '数据起始时间戳（单位：秒），如：1684166400',
            'description' => '数据起始时间戳（单位：秒），如：1684166400',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1684166400',
          ),
        ),
        7 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '数据结束时间戳（单位：秒），如：1684166400 
不填默认为当前时间',
            'description' => '数据结束时间戳（单位：秒），如：1684166400 
不填默认为当前时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1684166400',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '39090022-1F3B-4797-8518-6B61095F1AF0',
              ),
              'Code' => 
              array (
                'description' => '状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => 'API调用是否成功。取值如下：

- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '错误信息，仅出错时返回错误信息。',
                'type' => 'string',
                'example' => 'No access permission for the namespace [***]',
              ),
              'Data' => 
              array (
                'description' => 'JSON的概览数据信息，对应控制台概览数据内容，如下三种格式类型结果
- 基础信息
- 时间区间任务运行信息：
- 时间区间任务运行时序信息：返回对应区间 任务触发、运行成功、运行失败三个数据项对应时点的统计信息',
                'type' => 'string',
                'example' => '基础信息：{"schedulerx_job_counter_disable": "4","schedulerx_job_trigger_counter_running": "0","schedulerx_job_counter_enable": "70","schedulerx_job_counter_all": "74","schedulerx_worker_counter": "2"}',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39090022-1F3B-4797-8518-6B61095F1AF0\\",\\n  \\"Code\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"No access permission for the namespace [***]\\",\\n  \\"Data\\": \\"基础信息：{\\\\\\"schedulerx_job_counter_disable\\\\\\": \\\\\\"4\\\\\\",\\\\\\"schedulerx_job_trigger_counter_running\\\\\\": \\\\\\"0\\\\\\",\\\\\\"schedulerx_job_counter_enable\\\\\\": \\\\\\"70\\\\\\",\\\\\\"schedulerx_job_counter_all\\\\\\": \\\\\\"74\\\\\\",\\\\\\"schedulerx_worker_counter\\\\\\": \\\\\\"2\\\\\\"}\\"\\n}","type":"json"}]',
      'title' => '获取概览数据信息',
      'requestParamsDescription' => '当前接口查询数据信息对应控制台概览的三块信息内容，相应请求参数配置要求如下

- 任务基础信息：请求参数配置说明如下，Operate设置“query”，MetricType设置为“0”，StartTime设置为当前时间戳

- 时间区间任务运行信息：请求参数配置说明如下，Operate设置“query”，MetricType设置为“1”，StartTime设置为业务需要的查询起始时间（不得早于15天，当前时序数据存储有效期为15天）

- 时间区间任务运行时序信息：请求参数配置说明如下，Operate设置“query_range”，MetricType设置为“1”，StartTime设置为业务需要的查询起始时间（默认推荐当前1小时前，因返回每个时点信息量大不建议设置过早）',
      'responseParamsDescription' => 'Data信息会根据三种数据读取，返回不同格式的JSON内容，参考如下：
- 基础信息：
```
{
  "schedulerx_job_counter_disable": "4",  // 禁用任务数
  "schedulerx_job_counter_enable": "70", // 启用任务数
  "schedulerx_job_counter_all": "74", // 总任务数
  "schedulerx_worker_counter": "2", // 在线机器数
  "schedulerx_job_trigger_counter_running": "0" // 任务运行中实例数
}
```

- 时间区间任务运行信息：
```
{
    "schedulerx_job_trigger_counter_success": "227",  // 
    "schedulerx_job_trigger_counter_all": "225",
    "schedulerx_job_trigger_counter_failed": "0"
}
```
- 时间区间任务运行时序信息：返回对应区间 任务触发、运行成功、运行失败三个数据项对应时点的统计信息

```
[
    {
      "data": [
        [
          1686110400000, 
          4
        ],
        [
          1686110460000,
          5
        ]
      ],
      "name": "触发次数"
    },
    {
      "data": [
        [
          1686110400000,
          0
        ],
        [
          1686110460000,
          0
        ]
      ],
      "name": "执行失败"
    },
    {
      "data": [
        [
          1686110400000,
          4
        ],
        [
          1686110460000,
          5
        ]
      ],
      "name": "执行成功"
    }
  ]
```',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'public',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'schedulerx.aliyuncs.com',
    ),
  ),
);
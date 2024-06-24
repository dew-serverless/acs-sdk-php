<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'ROS',
    'version' => '2019-09-10',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 124189,
      'title' => '资源栈相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateStack',
        1 => 'DeleteStack',
        2 => 'UpdateStack',
        3 => 'ContinueCreateStack',
        4 => 'GetStack',
        5 => 'ListStacks',
        6 => 'CancelUpdateStack',
        7 => 'CancelStackOperation',
        8 => 'SetDeletionProtection',
        9 => 'ListStackEvents',
        10 => 'ListStackOperationRisks',
        11 => 'PreviewStack',
      ),
    ),
    1 => 
    array (
      'id' => 124202,
      'title' => '资源相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListStackResources',
        1 => 'GetStackResource',
        2 => 'MoveResourceGroup',
      ),
    ),
    2 => 
    array (
      'id' => 180990,
      'title' => '资源场景相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTemplateScratch',
        1 => 'DeleteTemplateScratch',
        2 => 'UpdateTemplateScratch',
        3 => 'ListTemplateScratches',
        4 => 'GetTemplateScratch',
        5 => 'GenerateTemplateByScratch',
      ),
    ),
    3 => 
    array (
      'id' => 124185,
      'title' => '模板相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTemplate',
        1 => 'DeleteTemplate',
        2 => 'UpdateTemplate',
        3 => 'GetTemplate',
        4 => 'ListTemplates',
        5 => 'ListTemplateVersions',
        6 => 'GetTemplateParameterConstraints',
        7 => 'SetTemplatePermission',
        8 => 'GetTemplateEstimateCost',
        9 => 'GetTemplateSummary',
        10 => 'ValidateTemplate',
        11 => 'GenerateTemplatePolicy',
      ),
    ),
    4 => 
    array (
      'id' => 124222,
      'title' => '资源栈策略相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SetStackPolicy',
        1 => 'GetStackPolicy',
      ),
    ),
    5 => 
    array (
      'id' => 124225,
      'title' => '更改集相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateChangeSet',
        1 => 'DeleteChangeSet',
        2 => 'GetChangeSet',
        3 => 'ListChangeSets',
        4 => 'ExecuteChangeSet',
      ),
    ),
    6 => 
    array (
      'id' => 124231,
      'title' => '资源栈组相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateStackGroup',
        1 => 'DeleteStackGroup',
        2 => 'UpdateStackGroup',
        3 => 'ListStackGroups',
        4 => 'GetStackGroup',
        5 => 'CreateStackInstances',
        6 => 'DeleteStackInstances',
        7 => 'UpdateStackInstances',
        8 => 'GetStackInstance',
        9 => 'StopStackGroupOperation',
        10 => 'ListStackInstances',
        11 => 'GetStackGroupOperation',
        12 => 'ListStackGroupOperations',
        13 => 'ListStackGroupOperationResults',
      ),
    ),
    7 => 
    array (
      'id' => 124246,
      'title' => '偏差检测相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateStackTemplateByResources',
        1 => 'GetStackDriftDetectionStatus',
        2 => 'ListStackResourceDrifts',
        3 => 'DetectStackDrift',
        4 => 'DetectStackGroupDrift',
        5 => 'DetectStackResourceDrift',
      ),
    ),
    8 => 
    array (
      'id' => 124253,
      'title' => '标签相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TagResources',
        1 => 'ListTagResources',
        2 => 'ListTagKeys',
        3 => 'ListTagValues',
        4 => 'UntagResources',
      ),
    ),
    9 => 
    array (
      'id' => 186745,
      'title' => '诊断相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDiagnostic',
        1 => 'GetDiagnostic',
        2 => 'ListDiagnostics',
        3 => 'DeleteDiagnostic',
      ),
    ),
    10 => 
    array (
      'id' => 182225,
      'title' => '资源类型相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RegisterResourceType',
        1 => 'SetResourceType',
        2 => 'DeregisterResourceType',
        3 => 'ListResourceTypes',
        4 => 'GetResourceTypeTemplate',
        5 => 'GetResourceType',
        6 => 'ListResourceTypeVersions',
        7 => 'ListResourceTypeRegistrations',
      ),
    ),
    11 => 
    array (
      'id' => 124187,
      'title' => '其他相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
        1 => 'SignalResource',
        2 => 'GetServiceProvisions',
        3 => 'GetFeatureDetails',
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
    'CreateStack' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DisableRollback',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当创建资源栈失败时，是否禁用回滚。

取值：

- true：禁用回滚，即在创建资源栈失败时不进行回滚。
- false（默认值）：不禁用回滚，即在创建资源栈失败时进行回滚。
',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板主体的结构。长度为1~524,288个字节。如果长度较长，则建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免因URL过长而导致请求失败。 
> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId或TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"ROSTemplateFormatVersion":"2015-09-01"}',
          ),
        ),
        2 => 
        array (
          'name' => 'StackPolicyURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含资源栈策略的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/stack-policy/demo、oss://ros/stack-policy/demo?RegionId=cn-hangzhou）中的策略，策略文件最大长度为16,384个字节。如未指定OSS地域，默认与接口参数RegionId相同。 

> 您仅能指定StackPolicyBody或StackPolicyURL其中一个参数。

URL最大长度为1350个字节。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros-stack-policy/demo',
          ),
        ),
        3 => 
        array (
          'name' => 'TimeoutInMinutes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建资源栈的超时时间。

- 默认值：60。

- 单位：分钟。

- 取值范围：10~1440。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'StackPolicyBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含资源栈策略主体的结构，长度为1~16,384个字节。

> 您仅能指定StackPolicyBody或StackPolicyURL其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"Statement": [{"Action": "Update:*", "Resource": "*", "Effect": "Allow", "Principal": "*"}]}',
          ),
        ),
        5 => 
        array (
          'name' => 'StackName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈名称。  
长度不超过255个字符，必须以英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyStack',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。 

更多信息，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        8 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/stack-policy/demo、oss://ros/stack-policy/demo?RegionId=cn-hangzhou）中的模板，模板的最大长度为524,288个字节。如未指定OSS地域，默认与RegionId取值相同。 

> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId或TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros-template/demo',
          ),
        ),
        9 => 
        array (
          'name' => 'RamRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM角色名称。ROS会扮演该角色创建资源栈，使用角色的凭证代表用户进行接口调用。  
ROS始终将此角色用于资源栈上将进行的操作。只要用户有权在资源栈上进行操作，即使用户无权使用角色，ROS也会使用此角色，确保角色授予最少的权限。关于如何使用RAM角色，请参见[使用资源栈角色](~~2568025~~)。

如果用户未指定该值，ROS将使用以前与资源栈关联的角色。如果没有可用角色，ROS将使用从您的用户凭证中生成的临时凭证。

RAM角色名称最大长度为64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-role',
          ),
        ),
        10 => 
        array (
          'name' => 'DeletionProtection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启资源栈删除保护。取值：
- Enabled：开启资源栈删除保护。
- Disabled（默认）：关闭资源栈删除保护。此时支持通过控制台或API（DeleteStack）释放资源栈。

> 嵌套资源栈删除保护与根资源栈一致。  
  ',
            'type' => 'string',
            'required' => false,
            'example' => 'Enabled',
          ),
        ),
        11 => 
        array (
          'name' => 'CreateOption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建选项，用于控制创建资源栈的行为。取值：

- KeepStackOnCreationComplete（默认值）：创建资源栈成功后保留资源栈及资源栈中的资源，占用ROS允许创建的资源栈数量限额。

- AbandonStackOnCreationComplete：创建资源栈成功后删除资源栈，但保留所有资源，不占用ROS允许创建的资源栈数量限额。如果创建资源栈失败，资源栈会保留。  

- AbandonStackOnCreationRollbackComplete：创建资源栈回滚成功后删除资源栈，不占用ROS允许创建的资源栈数量限额。其他情况则保留资源栈。

- ManuallyPay：在创建资源栈过程中手动支付包年包月的资源。目前支持手动支付的资源类型包括`ALIYUN::ECS::InstanceGroup`、`ALIYUN::RDS::DBInstance`、`ALIYUN::SLB::LoadBalancer`、`ALIYUN::VPC::EIP`、`ALIYUN::VPC::VpnGateway`。

> 仅能指定CreateOption和CreateOptions其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'KeepStackOnCreationComplete',
          ),
        ),
        12 => 
        array (
          'name' => 'CreateOptions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '创建选项列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '创建选项，用于控制创建资源栈的行为。取值：

- KeepStackOnCreationComplete（默认值）：创建资源栈成功后保留资源栈及资源栈中的资源，占用ROS允许创建的资源栈数量限额。
- AbandonStackOnCreationComplete：创建资源栈成功后删除资源栈，但保留所有资源，不占用ROS允许创建的资源栈数量限额。如果创建资源栈失败，资源栈会保留。 
 - AbandonStackOnCreationRollbackComplete：创建资源栈回滚成功后删除资源栈，不占用ROS允许创建的资源栈数量限额。其他情况则保留资源栈。
- ManuallyPay：在创建资源栈过程中手动支付包年包月的资源。目前支持手动支付的资源类型包括`ALIYUN::ECS::InstanceGroup`、`ALIYUN::RDS::DBInstance`、`ALIYUN::SLB::LoadBalancer`、`ALIYUN::VPC::EIP`、`ALIYUN::VPC::VpnGateway`。


>- 仅能指定CreateOption和CreateOptions其中一个参数。
>- 创建选项不可重复，且KeepStackOnCreationComplete与AbandonStackOnCreationComplete、AbandonStackOnCreationRollbackComplete两个选项互斥。
>- N最大值为2。',
              'type' => 'string',
              'required' => false,
              'example' => 'KeepStackOnCreationComplete',
            ),
            'required' => false,
            'maxItems' => 2,
          ),
        ),
        13 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。

> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId或TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        14 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板版本。仅在指定TemplateId时生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        15 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '模板中已定义的参数。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '模板中已定义的参数的名称。如果未指定参数的名称和值，则ROS将使用模板中指定的默认值。

N最大值为200。  
长度为1~128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://` 。

> Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'InstanceId',
                ),
                'ParameterValue' => 
                array (
                  'description' => '模板中已定义的参数的取值。

N最大值为200。  
长度为0~128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://` 。
> Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'i-xxxxxx',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        16 => 
        array (
          'name' => 'NotificationURLs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '接收资源栈事件的回调地址。取值：

- HTTP POST URL      
每个URL最大长度为1024个字节。  

- eventbridge  
资源栈状态变更会通知到事件总线（EventBridge）服务。您可以在[事件总线控制台](https://eventbridge.console.aliyun.com)查看事件信息。  
> 当前支持华东1（杭州）、华东2（上海）、华北2（北京）、中国（香港）、华北3（张家口）五个地域。    

  
N最大值为5。资源栈的状态发生变化时，会进行通知。当资源栈启用回滚时，CREATE_FAILED（创建失败）和UPDATE_FAILED（更新失败）不会通知，而CREATE_ROLLBACK（创建失败回滚）和ROLLBACK（更新失败回滚）会进行通知。IN_PROGRESS状态不会通知。  
无论资源栈是否定义了Outputs都会进行通知。通知内容示例如下：  
 ```
{
    "Outputs": [
        {
            "Description": "No description given",
            "OutputKey": "InstanceId",
            "OutputValue": "i-xxx"
        }
    ],
    "StackId": "80bd6b6c-e888-4573-ae3b-93d29113****",
    "StackName": "test-notification-url",
    "Status": "CREATE_COMPLETE"
}
```   ',
            'type' => 'array',
            'items' => 
            array (
              'description' => '接收资源栈事件的回调地址。取值：

- HTTP POST URL      
每个URL最大长度为1024个字节。  

- eventbridge  
资源栈状态变更会通知到事件总线（EventBridge）服务。您可以在[事件总线控制台](https://eventbridge.console.aliyun.com)查看事件信息。  
> 当前支持华东1（杭州）、华东2（上海）、华北2（北京）、中国（香港）、华北3（张家口）五个地域。    

  
N最大值为5。资源栈的状态发生变化时，会进行通知。当资源栈启用回滚时，CREATE_FAILED（创建失败）和UPDATE_FAILED（更新失败）不会通知，而CREATE_ROLLBACK（创建失败回滚）和ROLLBACK（更新失败回滚）会进行通知。IN_PROGRESS状态不会通知。  
无论资源栈是否定义了Outputs都会进行通知。通知内容示例如下：  
 ```
{
    "Outputs": [
        {
            "Description": "No description given",
            "OutputKey": "InstanceId",
            "OutputValue": "i-xxx"
        }
    ],
    "StackId": "80bd6b6c-e888-4573-ae3b-93d29113****",
    "StackName": "test-notification-url",
    "Status": "CREATE_COMPLETE"
}
```   ',
              'type' => 'string',
              'required' => false,
              'example' => 'http://example.com/ros-event',
            ),
            'required' => false,
            'example' => 'http://my-site.com/ros-event',
            'maxItems' => 5,
          ),
        ),
        17 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源栈的标签。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源栈的标签键。

N的取值范围为1~20。  
>- Tags为可选参数。如果需要指定Tags，则Tags.N.Key必须指定。
>- 此标签会传递到资源栈中每个支持标签的资源中。更多信息，请参见[标签传递](~~201421~~)。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'usage',
                ),
                'Value' => 
                array (
                  'description' => '资源栈的标签值。

N的取值范围为1~20。

> 此标签会传递到资源栈中每个支持标签的资源中。更多信息，请参见[标签传递](~~201421~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        18 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。如果不指定该参数，资源栈将加入默认资源组。  

关于资源组的更多信息，请参见[什么是资源组](~~94475~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxazb4ph6aiy****',
          ),
        ),
        19 => 
        array (
          'name' => 'Parallelism',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源最大并发数。

默认为空，用户可以输入大于等于零的整数。

> - 若设置为大于零的整数，则使用该整数；若设置为零或者不设置，对于ROS类型资源栈不限制，Terraform类型资源栈使用Terraform默认值（通常为10）。 
> - 若设置了该值，将与资源栈进行关联，影响资源栈的后续操作，比如更新资源栈。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        20 => 
        array (
          'name' => 'TemplateScratchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景ID。

关于如何获取资源场景ID，请参见[ListTemplateScratches](~~363050~~)。

> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId或TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'ts-aa9c62feab844a6b****',
          ),
        ),
        21 => 
        array (
          'name' => 'TemplateScratchRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景所属的地域ID，默认与RegionId取值相同。

您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
              'StackId' => 
              array (
                'description' => '资源栈ID。',
                'type' => 'string',
                'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\",\\n  \\"StackId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf691****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateStackResponse>\\n        <StackId>4a6c9851-3b0f-4f5f-b4ca-a14bf691****</StackId>\\n        <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n</CreateStackResponse>","errorExample":""}]',
      'title' => '创建资源栈',
      'summary' => '使用资源编排模板创建资源栈，完成一组资源的创建。',
      'description' => '资源栈是针对ROS资源的管理单元，您可通过创建资源栈来创建一组资源。关于资源栈的更多信息，请参见[概览](~~172973~~)。  
使用限制： 
- 每个阿里云账号最多创建200个资源栈。  
- 每个资源栈中最多创建200个资源。  

本文将提供一个示例，在杭州地域创建一个名为`MyStack`的资源栈，并将资源栈的模板`TemplateBody`设置为`{"ROSTemplateFormatVersion":"2015-09-01"}`。

  
  
  
  
  ',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| 错误代码 | 错误信息 | HTTPS状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| CircularDependency |Circular Dependency Found: {reason}. | 400 |模板包含循环引用，reason为具体原因。 |
| InvalidSchema | {reason}. | 400 |模板格式不正确，reason为具体原因。 |
| InvalidTemplateAttribute |The Referenced Attribute ({resource} {name}) is incorrect. | 400 |模板包含不正确的资源属性（输出）引用，resource为资源名，name为属性名。 |
| InvalidTemplatePropertyType |The specified value type of ({resource} {section}) is incorrect. | 400 |模板字段中定义的资源属性类型不正确。resource为资源名，section为字段名。  |
| InvalidTemplateReference |The specified reference "{name}" (in {referencer}) is incorrect. | 400 |模板包含不正确的引用，name为引用名，referencer为引用者。 |
| InvalidTemplateSection |The template section is invalid: {section}. | 400 |模板包含无效的字段，section为字段名。 |
| InvalidTemplateVersion |The template version is invalid: {reason}. | 400 |模板版本不正确，reason为具体原因。 |
| StackValidationFailed | {reason}. | 400 |资源栈校验失败，reason为具体原因。 |
| UnknownUserParameter |The Parameter ({name}) was not defined in template. | 400 |传递的参数在模板中未定义，name为参数名。 |
| UserParameterMissing |The Parameter {name} was not provided. | 400 |参数在模板中已定义，但未传递值，name为参数名。 |
| ActionInProgress |Stack {name} already has an action ({action}) in progress. | 409 |资源栈在变更中，name为资源栈名称或ID，action为变更操作。 |
| StackExists |The Stack ({name}) already exists. | 409 |同名资源栈已存在，name为资源栈名称。 |
| TemplateNotFound |The Template ({ ID }) could not be found. | 404 |模板不存在。ID为模板ID。 |
| TemplateNotFound |The Template { ID } with version { version } could not be found. | 404 |模板或指定版本不存在。ID为模板ID，version为模板版本。 |
',
    ),
    'DeleteStack' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '12675',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURErosZVIFJW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'RetainAllResources',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否保留该资源栈下的所有资源。

取值：

- true：保留该资源栈下的所有资源。

- false（默认值）：不保留该资源栈下的资源。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'RamRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM角色名称。ROS会扮演该角色创建资源栈，使用角色的凭证代表用户进行接口调用。   
ROS始终将此角色用于资源栈上将进行的操作。只要用户有权在资源栈上进行操作，即使用户无权使用角色，ROS也会使用此角色，确保角色授予最少的权限。  
该接口与其他接口不同，如果用户未指定该值，ROS不会使用以前与资源栈关联的角色。如果需要使用角色，请显式指定。如果没有可用角色，ROS将使用从您的用户凭证中生成的临时凭证。  
RAM角色名称最大长度为64个字节。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-role',
          ),
        ),
        4 => 
        array (
          'name' => 'RetainResources',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要保留资源的列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要保留的资源名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'my_disk',
            ),
            'required' => false,
            'example' => 'WebServer',
            'maxItems' => 200,
          ),
        ),
        5 => 
        array (
          'name' => 'DeleteOptions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用于控制删除资源栈的行为。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用于控制删除资源栈的行为，取值：
- 不进行配置（默认情况）：删除资源栈时会忽略预付费资源。
- ThrowErrorWithSubscriptionResources：删除资源栈时，若存在预付费资源，则会抛出错误。',
              'type' => 'string',
              'required' => false,
              'example' => '["ThrowErrorWithSubscriptionResources"]',
            ),
            'required' => false,
            'maxItems' => 1,
          ),
        ),
        6 => 
        array (
          'name' => 'Parallelism',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源最大并发数。

默认为空，用户可以输入大于等于零的整数。

> - 若设置为大于零的整数，则使用该整数。  
- 若设置为零，对于ROS类型资源栈不限制，Terraform类型资源栈使用Terraform默认值（通常为10）。
- 若不设置，则使用上次操作时的设置；若上次操作时未设置，对于ROS类型资源栈不限制，Terraform类型资源栈使用Terraform默认值（通常为10）。
- 若设置了该值，将与资源栈进行关联，影响资源栈的后续操作。',
            'type' => 'integer',
            'format' => 'int64',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\' ?>\\n\\n<DeleteStackResponse>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n</DeleteStackResponse>\\n","errorExample":""}]',
      'title' => '删除资源栈',
      'summary' => '删除指定资源栈，可以选择是否保留资源。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '访问[公共错误码](~~131033~~)查看更多错误码。
| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | InvalidOperation.DeletionProtection | Fail to delete stack {ID}, as deletion protection is enabled. | 资源栈开启了删除保护，无法被删除。ID为资源栈ID。 |
| 404 | StackNotFound | The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。|
| 409 | ActionInProgress | Stack {name} already has an action ({action}) in progress. |资源栈在变更中。name为资源栈名称或ID，action为具体的变更操作。 |',
    ),
    'UpdateStack' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '12722',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURErosZVIFJW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。此参数值由客户端生成，并且必须全局唯一。  
长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。  
更多信息，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        2 => 
        array (
          'name' => 'StackPolicyDuringUpdateBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '临时覆盖资源栈策略主体的结构。长度为1~16,384个字节。  
如果要更新受保护的资源，请在更新期间指定临时覆盖资源栈策略。如果未指定资源栈策略，将使用与资源栈关联的当前策略。  
此参数仅在更改集类型为UPDATE时生效。您只能指定以下参数之一：
- StackPolicyBody
- StackPolicyURL
- StackPolicyDuringUpdateBody
- StackPolicyDuringUpdateURL',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"Statement": [{"Effect": "Allow", "Action": "Update:*", "Principal": "*", "Resource": "*"}]}',
          ),
        ),
        3 => 
        array (
          'name' => 'TimeoutInMinutes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新资源栈的超时时间。  
  
- 默认值：60。

- 单位：分钟。

',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板主体的结构。长度为1~524,288个字节。 如果长度较大，则建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免URL过长而导致请求失败。 
> 您必须且仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"ROSTemplateFormatVersion": "2015-09-01"}',
          ),
        ),
        5 => 
        array (
          'name' => 'StackPolicyURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含资源栈策略的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/stack-policy/demo、oss://ros/stack-policy/demo?RegionId=cn-hangzhou）的策略，策略的文件最大值为16,384个字节。如未指定OSS地域，默认与接口参数RegionId相同。   

> 您仅能指定StackPolicyBody或StackPolicyURL其中一个参数。
  
URL最大长度为1350个字节。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros-stack-policy/demo',
          ),
        ),
        6 => 
        array (
          'name' => 'StackPolicyDuringUpdateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新资源栈策略的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/stack-policy/demo、oss://ros/stack-policy/demo?RegionId=cn-hangzhou）中的策略，策略的文件最大值为16,384个字节。  

>  如未指定OSS地域，默认与接口参数RegionId相同。     
  
URL最大长度为1350个字节。

如果要更新受保护的资源，请在更新期间指定临时覆盖资源栈策略。如果未指定资源栈策略，则将使用与资源栈关联的当前策略。此参数仅在更改集类型为UPDATE时生效。您只能指定以下参数之一：
- StackPolicyBody
- StackPolicyURL
- StackPolicyDuringUpdateBody
- StackPolicyDuringUpdateURL',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros-stack-policy/demo',
          ),
        ),
        7 => 
        array (
          'name' => 'StackPolicyBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈策略主体的结构，长度为1~16,384个字节。  

> 您仅能指定StackPolicyBody或StackPolicyURL其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"Statement": [{"Action": "Update:*", "Resource": "*", "Effect": "Allow", "Principal": "*"}]}',
          ),
        ),
        8 => 
        array (
          'name' => 'UsePreviousParameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '未传递的参数是否使用上次传递的值。

取值：  

- true：未传递的参数使用上次传递的值。

- false：未传递的参数不使用上次传递的值。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
        9 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        10 => 
        array (
          'name' => 'DisableRollback',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈更新失败时，是否强制回滚。

取值：  

- true：强制回滚。

- false（默认值）：不强制回滚。',
            'type' => 'boolean',
            'deprecated' => true,
            'required' => false,
            'docRequired' => false,
            'example' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于HTTP Web服务器（HTTP或HTTPS）或阿里云OSS存储空间中的模板（1~524,288个字节）。OSS存储空间的URL，例如oss://ros/template/demo或oss://ros/template/demo?RegionId=cn-hangzhou。如未指定OSS地域，默认与接口参数RegionId相同。

> 您必须且仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros-template/demo',
          ),
        ),
        12 => 
        array (
          'name' => 'RamRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM角色名称。ROS会扮演该角色创建资源栈，使用角色的凭证代表用户进行接口调用。   
ROS始终将此角色用于资源栈上将进行的操作。只要用户有权在资源栈上进行操作，即使用户无权使用角色，ROS也会使用此角色，确保角色授予最少的权限。关于如何使用RAM角色，请参见[使用资源栈角色](~~2568025~~)。  
如果用户未指定该值，ROS将使用以前与资源栈关联的角色。如果没有可用角色，ROS将使用从您的用户凭证中生成的临时凭证。  
RAM角色名称最大长度为64个字节。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-role',
          ),
        ),
        13 => 
        array (
          'name' => 'ReplacementOption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用替换更新。当资源属性不支持修改更新时，可以使用替换更新改变资源属性。替换更新会删除资源后重新创建资源，新资源物理ID会发生变化。

取值：
- Enabled：允许替换更新。
- Disabled（默认）：不允许替换更新。

> 修改更新的优先级高于替换更新。

',
            'type' => 'string',
            'required' => false,
            'example' => 'Disabled',
          ),
        ),
        14 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。

> 您必须且仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        15 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板版本。仅在指定TemplateId时生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        16 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '参数。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '参数的名称。如果未指定参数的名称和取值，ROS将使用模板中指定的默认值。  
N的最大值为200。  

> Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Amount',
                ),
                'ParameterValue' => 
                array (
                  'description' => '参数值。N的最大值为200。  

> Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '12',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        17 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源栈的标签。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源栈的标签键。  
N的取值范围为1~20。   

> Tags为可选参数。如果需要指定Tags，则Tags.N.Key必须指定。- 此标签会传递到资源栈中每个支持标签的资源中。更多信息，请参见[标签传递](~~201421~~)。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'usage',
                ),
                'Value' => 
                array (
                  'description' => '资源栈的标签值。  
N的取值范围为1~20。

> 此标签会传递到资源栈中每个支持标签的资源中。更多信息，请参见[标签传递](~~201421~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        18 => 
        array (
          'name' => 'Parallelism',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源最大并发数。

默认为空，用户可以输入大于等于零的整数。

> - 若设置为大于零的整数，则使用该整数。  
>- 若设置为零，对于ROS类型资源栈不限制，Terraform类型资源栈使用Terraform默认值（通常为10）。
>- 若不设置，则使用上次操作时的设置；若上次操作时未设置，对于ROS类型资源栈不限制，Terraform类型资源栈使用Terraform默认值（通常为10）。
>- 若设置了该值，将与资源栈进行关联，影响资源栈的后续操作。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        19 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxazb4ph6aiy****',
          ),
        ),
        20 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此次请求是否只进行检验。取值：

- true：只做校验，不会实际执行。
- false（默认）：会实际执行，更新资源栈。

> 更新资源栈时，若没有改动：DryRun为false时，会报错，错误码为NotSupported；DryRun为true时，不会报错。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        21 => 
        array (
          'name' => 'DryRunOptions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '校验选项列表。列表最大长度为1。
> 仅在DryRun为true时生效。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '校验选项。取值：

- ParameterAnalysis.ConsiderCondition：参数分析时，考虑条件的影响。如果需要进行参数分析，建议使用该选项。否则，条件会进行计算，计算时涉及的参数的取值为资源栈更新前参数的值。
> 该选项仅对ROS类型资源栈生效。

- ParameterAnalysis.Disabled：禁用参数分析。设置该选项后在DryRunResult中不会返回Parameters*字段。',
              'type' => 'string',
              'required' => false,
              'example' => 'ParameterAnalysis.ConsiderCondition',
            ),
            'required' => false,
            'maxItems' => 1,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
              'StackId' => 
              array (
                'description' => '资源栈ID。',
                'type' => 'string',
                'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
              ),
              'DryRunResult' => 
              array (
                'description' => '校验结果。仅在DryRun为true时返回。',
                'type' => 'object',
                'properties' => 
                array (
                  'ParametersAllowedToBeModified' => 
                  array (
                    'description' => '允许修改的参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '允许修改的参数。更新资源栈时，若模板保持不变，仅修改参数取值，修改该参数不会引发校验错误。',
                      'type' => 'string',
                      'example' => 'param1',
                    ),
                  ),
                  'ParametersConditionallyAllowedToBeModified' => 
                  array (
                    'description' => '可能允许修改的参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可能允许修改的参数。更新资源栈时，若模板保持不变，仅修改参数取值，修改该参数是否引发校验错误，取决于参数的取值。',
                      'type' => 'string',
                      'example' => 'param2',
                    ),
                  ),
                  'ParametersUncertainlyAllowedToBeModified' => 
                  array (
                    'description' => '不确定是否允许修改的参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '不确定是否允许修改的参数。更新资源栈时，若模板保持不变，仅修改参数取值，运行时才能确定修改该参数是否会引发校验错误。',
                      'type' => 'string',
                      'example' => 'param3',
                    ),
                  ),
                  'ParametersNotAllowedToBeModified' => 
                  array (
                    'description' => '不允许修改的参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '不允许修改的参数。更新资源栈时，若模板保持不变，仅修改参数取值一定会引发校验错误。',
                      'type' => 'string',
                      'example' => 'param4',
                    ),
                  ),
                  'ParametersCauseInterruptionIfModified' => 
                  array (
                    'description' => '一定会引发资源中断的参数的列表。
> - 目前仅支持少量资源类型。
> - 仅适用于更新ROS类型资源栈。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '一定会引发资源中断的参数。更新资源栈时，若模板保持不变，仅修改参数取值一定会引发资源中断。',
                      'type' => 'string',
                      'example' => 'param1',
                    ),
                  ),
                  'ParametersConditionallyCauseInterruptionIfModified' => 
                  array (
                    'description' => '可能会引发资源中断的参数的列表。
> - 目前仅支持少量资源类型。
> - 仅适用于更新ROS类型资源栈。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可能会引发资源中断的参数。更新资源栈时，若模板保持不变，仅修改参数取值，修改该参数可能会引发资源中断，取决于参数的取值和资源的更新行为。',
                      'type' => 'string',
                      'example' => 'param2',
                    ),
                  ),
                  'ParametersUncertainlyCauseInterruptionIfModified' => 
                  array (
                    'description' => '不确定是否会引发资源中断的参数的列表。
> - 目前仅支持少量资源类型。
> - 仅适用于更新ROS类型资源栈。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '不确定是否会引发资源中断的参数。更新资源栈时，若模板保持不变，仅修改参数取值，运行时才能确定该参数是否会引发资源中断。',
                      'type' => 'string',
                      'example' => 'param3',
                    ),
                  ),
                  'ParametersCauseReplacementIfModified' => 
                  array (
                    'description' => '一定会引发资源替换更新的参数的列表。

> - 仅在ReplacementOption为Enabled时返回。
> - 仅适用于更新ROS类型资源栈。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '一定会引发资源替换更新的参数。更新资源栈时，若模板保持不变，仅修改参数取值一定会引发资源替换更新。',
                      'type' => 'string',
                      'example' => 'param5',
                    ),
                  ),
                  'ParametersConditionallyCauseReplacementIfModified' => 
                  array (
                    'description' => '可能会引发资源替换更新的参数的列表。
> - 仅在ReplacementOption为Enabled时返回。
> - 仅适用于更新ROS类型资源栈。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可能会引发资源替换更新的参数。更新资源栈时，若模板保持不变，仅修改参数取值可能会引发资源替换更新，取决于参数的取值。',
                      'type' => 'string',
                      'example' => 'param6',
                    ),
                  ),
                  'ParametersUncertainlyCauseReplacementIfModified' => 
                  array (
                    'description' => '不确定是否会引发资源替换更新的参数的列表。

> - 仅在ReplacementOption为Enabled时返回。
> - 仅适用于更新ROS类型资源栈。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '不确定是否会引发资源替换更新的参数。更新资源栈时，若模板保持不变，仅修改参数取值，运行时才能确定该参数是否会引发资源替换更新。',
                      'type' => 'string',
                      'example' => 'param7',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\",\\n  \\"StackId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf691****\\",\\n  \\"DryRunResult\\": {\\n    \\"ParametersAllowedToBeModified\\": [\\n      \\"param1\\"\\n    ],\\n    \\"ParametersConditionallyAllowedToBeModified\\": [\\n      \\"param2\\"\\n    ],\\n    \\"ParametersUncertainlyAllowedToBeModified\\": [\\n      \\"param3\\"\\n    ],\\n    \\"ParametersNotAllowedToBeModified\\": [\\n      \\"param4\\"\\n    ],\\n    \\"ParametersCauseInterruptionIfModified\\": [\\n      \\"param1\\"\\n    ],\\n    \\"ParametersConditionallyCauseInterruptionIfModified\\": [\\n      \\"param2\\"\\n    ],\\n    \\"ParametersUncertainlyCauseInterruptionIfModified\\": [\\n      \\"param3\\"\\n    ],\\n    \\"ParametersCauseReplacementIfModified\\": [\\n      \\"param5\\"\\n    ],\\n    \\"ParametersConditionallyCauseReplacementIfModified\\": [\\n      \\"param6\\"\\n    ],\\n    \\"ParametersUncertainlyCauseReplacementIfModified\\": [\\n      \\"param7\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateStackResponse>\\n    <StackId>4a6c9851-3b0f-4f5f-b4ca-a14bf691****</StackId>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n</UpdateStackResponse>\\n","errorExample":""}]',
      'title' => '更新资源栈',
      'summary' => '更新已创建资源栈的资源信息。',
      'description' => '请求中Parameters和UsePreviousParameters取值相关。若Parameters中未指定模板中定义的参数：  

- 当UsePreviousParameters取值为false时：如果模板中参数有默认值，则使用默认值；如果模板中参数没有默认值，则需要在Parameters中指定该参数。  

- 当UsePreviousParameters取值为true时：如果创建资源栈时指定了该参数，则使用指定值；如果创建资源栈时未指定该参数，参数在模板中有默认值，则使用默认值。  

  
本文将提供一个示例，将北京地域ID为`4a6c9851-3b0f-4f5f-b4ca-a14bf691****`的资源栈的模板内容更新为`{"ROSTemplateFormatVersion": "2015-09-01"}`。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | CircularDependency | Circular Dependency Found: {reason}. |模板包含循环引用。reason为具体原因。 |
| 400 | InvalidSchema | {reason}. | 模板格式不正确。reason为具体原因。 |
| 400 | InvalidTemplateAttribute | The Referenced Attribute ({resource} {name}) is incorrect. |模板包含不正确的资源属性（输出）引用。resource为资源名，name为属性名。 |
| 400 | InvalidTemplatePropertyType | The specified value type of ({resource} {section}) is incorrect. |模板字段定义的资源类型不正确。resource为资源名，section为字段名。 |
| 400 | InvalidTemplateReference | The specified reference "{name}" (in {referencer}) is incorrect. |模板包含不正确的引用。name为引用名，referencer为引用者。 |
| 400 | InvalidTemplateSection | The template section is invalid: {section}. |模板包含无效的字段。section为字段名。 |
| 400 | InvalidTemplateVersion | The template version is invalid: {reason}. |模板版本不正确。reason为具体原因。 |
| 400 | StackPolicyValidationFailed | Action denied by stack policy: {reason}. |未通过资源栈策略校验。reason为具体原因。 |
| 400 | StackValidationFailed | {reason}. |资源栈校验失败。reason为具体原因。 |
| 400 | UnknownUserParameter | The Parameter ({name}) was not defined in template. |传递的参数在模板中未定义。name为参数名。 |
| 400 | UserParameterMissing | The Parameter {name} was not provided. |参数在模板中已定义，但未传递值。name为参数名。 |
| 404 | StackNotFound | The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。 |
| 409 | ActionInProgress | Stack {name} already has an action ({action}) in progress. |资源栈在变更中。name为资源栈名称或ID，action为具体的变更操作。 |
| 404 | TemplateNotFound |The Tempalte ({ ID }) could not be found. |模板不存在。ID为模板ID。 |
| 404 | TemplateNotFound |The Template { ID } with version { version } could not be found. |模板或指定版本不存在。ID为模板ID，version为模板版本。 |',
    ),
    'ContinueCreateStack' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'RamRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM角色名称。ROS会扮演该角色创建资源栈，使用角色的凭证代表用户进行接口调用。   
ROS始终将此角色用于资源栈上将进行的操作。只要用户有权在资源栈上进行操作，即使用户无权使用角色，ROS也会使用此角色，确保角色授予最少的权限。  
如果用户未指定该值，ROS将使用以前与资源栈关联的角色。如果没有可用角色，ROS将使用从您的用户凭证中生成的临时凭证。  
RAM角色名称最大长度为64个字节。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-role',
          ),
        ),
        3 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '继续创建模式，取值：
- Recreate（默认值）：
  
  您仅需继续创建如下4类资源，其它资源无需继续创建：
    - 创建失败的资源。
    - 指定继续创建的资源（RecreatingResources.N）。
    - 依赖于指定继续创建的资源（RecreatingResources.N）的资源。
    - 未创建的资源。
>RecreatingResources.N、TemplateBody、TemplateURL、Parameters参数仅在此模式下生效。

- Ignore：
  - 忽略并丢弃所有创建失败的资源、未创建的资源，直接把资源栈标记为成功。
  - 模板内容会发生变化。
>该模式仅ROS类型资源栈可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'Recreate',
          ),
        ),
        4 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板的结构。长度为1~524288个字节。   
如果长度较大，建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免URL过长而导致请求失败。   

ROS模板限制如下：
- 只能修改模板的Description、Metadata、Resources、Outputs、Rules部分。
- 不能增加或删除Section（模板内容的第一层）。
- 模板的Resources部分限制如下：
  - 对于不继续创建的资源，既不能删除，也不能修改其模板内容。
  - 对于继续创建的资源，既可以删除，也可以修改其模板内容。
  - 可以增加新资源。
> - 该参数仅在Mode为Recreate时生效。  
> - 您仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。若都不指定，则使用原有模板。',
            'type' => 'string',
            'required' => false,
            'example' => '{"ROSTemplateFormatVersion": "2015-09-01"}',
          ),
        ),
        5 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储桶（例如：oss://ros/template/demo、oss://ros/template/demo?RegionId=cn-hangzhou）中的模板，模板最大为524288个字节。   

如果OSS地域未指定，默认与接口参数RegionId相同。
  
> - 该参数仅在Mode为Recreate时生效，模板限制与TemplateBody相同。  
> - 您仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。若都不指定，则使用原有模板。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://ros-template/demo',
          ),
        ),
        6 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此次请求是否只进行检验。取值：

- true：只做校验，不会实际执行。
- false（默认）：会实际执行，继续创建资源栈。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。

> - 当`Mode`取值为`Recreate`时，本参数生效。模板限制与`TemplateBody`相同。
> - 您仅能指定`TemplateBody`、`TemplateURL`或`TemplateId`其中一个参数。若都不指定，则使用原有模板。',
            'type' => 'string',
            'required' => false,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        8 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板版本。仅在指定TemplateId时生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        9 => 
        array (
          'name' => 'RecreatingResources',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '创建失败的资源将会被继续创建。您可以指定额外需要继续创建的资源列表，ROS会继续创建所有依赖于其的资源。
>该参数仅ROS类型资源栈可用。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '创建失败的资源将会被继续创建。您可以指定额外需要继续创建的资源列表，ROS会继续创建所有依赖于其的资源。
>该参数仅在ROS类型的资源栈中可用。',
              'type' => 'string',
              'required' => false,
              'example' => 'WebServer',
            ),
            'required' => false,
            'example' => 'WebServer',
            'maxItems' => 200,
          ),
        ),
        10 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '覆盖的模板参数。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '覆盖的模板参数的名称。如果未指定特定参数的名称和值，ROS将使用上一次创建时的取值。N的最大值为200。

> 该参数仅在Mode为Recreate时生效。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Amount',
                ),
                'ParameterValue' => 
                array (
                  'description' => '覆盖的模板参数的值。N的最大值为200。

对于ROS类型资源栈，覆盖的模板参数限制如下：
- 不能引发模板Conditions部分中任何Condition的值的变化，由true变false，或由false变true。
- 覆盖参数不能被不继续创建的资源引用。

>该参数仅在Mode为Recreate时生效。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '12',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        11 => 
        array (
          'name' => 'Parallelism',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源最大并发数。

默认为空，用户可以输入大于等于零的整数。

> - 若设置为大于零的整数，则使用该整数。  
> - 若设置为零，对于ROS类型资源栈则不限制，Terraform类型资源栈使用Terraform默认值（通常为10）。
> - 若不设置，则使用上次操作时的设置；若上次操作时未设置，对于ROS类型资源栈则不限制，Terraform类型资源栈使用Terraform默认值（通常为10）。
> - 若设置了该值，将与资源栈进行关联，影响资源栈的后续操作。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'RecreatingOptions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '重新创建选项。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '重新创建选项。当`Mode`取值为`Recreate`时，本参数生效。可选值：

- TryToFixSignalFailureByRerunEcsCommand：尝试修复已存在的信号失败。当ALIYUN::ROS::WaitCondition类型资源创建失败时，找到与之关联且创建成功的ALIYUN::ECS::RunCommand和ALIYUN::ECS::Invocation类型的资源，对这些资源及依赖其的资源进行重建。
>仅对ROS类型的资源栈生效。

- IgnoreExistingSignalFailure：忽略已存在的信号失败。如果之前存在创建失败的ALIYUN::ROS::WaitCondition类型的资源，新一次的创建过程中会直接创建成功。
>仅对ROS类型的资源栈生效。

- AutoRecreatingResources：自动重新创建模板内容或引用参数发生变化的资源，包括依赖其的资源。使用该选项，可以简化RecreatingResources.N参数的设置，但也可能造成意料之外的资源重建。
>仅对ROS类型的资源栈生效。

- CreateNewPrepaidInstance：当您继续创建实例时，对于创建失败或创建成功但指定要重新创建的资源，如果该资源是**预付费**类型，ROS会创建一个**新实例**。
>- 仅对ROS类型的资源栈生效。
> - 如果您已创建旧实例，则该实例不会被删除，因为预付费实例**无法删除**。
> - 默认情况下（未设置CreateNewPrepaidInstance），在该场景中，如果已创建旧实例，则ROS会尝试复用已创建的实例。复用存在一定的限制，资源属性通常不允许修改或只有少量属性允许修改。',
              'type' => 'string',
              'required' => false,
              'example' => 'CreateNewPrepaidInstance',
            ),
            'required' => false,
            'maxItems' => 5,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6',
              ),
              'StackId' => 
              array (
                'description' => '资源栈ID。',
                'type' => 'string',
                'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
              ),
              'DryRunResult' => 
              array (
                'description' => '校验结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ParametersAllowedToBeModified' => 
                  array (
                    'description' => '允许修改的参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '允许修改的参数。修改参数不会引发校验错误。
> 仅在DryRun为`true`时返回，结果与Mode、Template*、RecreatingResources.N、RecreatingOptions.N相关。',
                      'type' => 'string',
                      'example' => 'description',
                    ),
                  ),
                  'ParametersConditionallyAllowedToBeModified' => 
                  array (
                    'description' => '可能允许修改的参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可能允许修改的参数。

修改参数是否引起校验错误，取决于参数的取值。
> 仅在DryRun为`true`时返回，结果与Mode、Template*、RecreatingResources.N、RecreatingOptions.N相关。',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                  ),
                  'ParametersNotAllowedToBeModified' => 
                  array (
                    'description' => '不允许修改的参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '不允许修改的参数。修改参数一定会引发校验错误。
> 仅在DryRun为`true`时返回，结果与Mode、Template*、RecreatingResources.N、RecreatingOptions.N相关。',
                      'type' => 'string',
                      'example' => 'cidr',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6\\",\\n  \\"StackId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf691****\\",\\n  \\"DryRunResult\\": {\\n    \\"ParametersAllowedToBeModified\\": [\\n      \\"description\\"\\n    ],\\n    \\"ParametersConditionallyAllowedToBeModified\\": [\\n      \\"name\\"\\n    ],\\n    \\"ParametersNotAllowedToBeModified\\": [\\n      \\"cidr\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ContinueCreateStackResponse>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6</RequestId>\\n    <StackId>4a6c9851-3b0f-4f5f-b4ca-a14bf691****</StackId>\\n</ContinueCreateStackResponse>","errorExample":""}]',
      'title' => '重新创建资源栈',
      'summary' => '资源栈创建失败后，继续创建资源栈。',
      'description' => '本文将提供一个示例，对杭州地域ID为`4a6c9851-3b0f-4f5f-b4ca-a14bf691****`的创建失败的资源栈进行继续创建。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | CircularDependency | Circular Dependency Found: {reason}. |模板包含循环引用，reason为具体原因。 |
| 400 | InvalidSchema | {reason}. |模板格式不正确，reason为具体原因。 |
| 400 | InvalidTemplateAttribute | The Referenced Attribute ({resource} {name}) is incorrect. |模板包含不正确的资源属性（输出）引用，resource为资源名，name为属性名。 |
| 400 | InvalidTemplatePropertyType | The specified value type of ({resource} {section}) is incorrect. |模板资源定义中，字段类型不正确，resource为资源名，section为字段名。 |
| 400 | InvalidTemplateReference | The specified reference "{name}" (in {referencer}) is incorrect. |模板包含不正确的引用，name为引用名，referencer为引用者。 |
| 400 | InvalidTemplateSection | The template section is invalid: {section}. |模板包含无效的字段，section为字段名。 |
| 400 | InvalidTemplateVersion | The template version is invalid: {reason}. |模板版本不正确，reason为具体原因。 |
| 400 | StackValidationFailed | {reason}. |资源栈校验失败，reason为具体原因。 |
| 400 | UnknownUserParameter | The Parameter ({name}) was not defined in template. |传递的参数在模板中未定义，name为参数名。 |
| 400 | UserParameterMissing | The Parameter {name} was not provided. |参数在模板中已定义，但未传递值，name为参数名。 |
| 400 | ContinueCreateStackValidationFailed | {reason}. |继续创建资源栈校验失败，reason为具体原因。|
| 404 | ResourceNotFound | The Resource ({name}) could not be found in Stack {stack}. |资源栈中不存某资源。name为资源名，stack为资源栈名称或ID。 |
| 404 | StackNotFound | The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。 |
| 409 | ActionInProgress | Stack {name} already has an action ({action}) in progress. |资源栈在变更中。name为资源栈名称或ID，action为变更操作。 |
| 404 | TemplateNotFound |The Tempalte ({ ID }) could not be found. |模板不存在。ID为模板ID。 |
| 404 | TemplateNotFound |The Template { ID } with version { version } could not be found. |模板或指定版本不存在。ID为模板ID，version为模板版本。 |',
    ),
    'GetStack' => 
    array (
      'summary' => '查询资源栈信息。',
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
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c754d2a4-28f1-46df-b557-9586173a****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。 该值由客户端生成，并且必须全局唯一。  
长度不超过64个字符。   
更多信息，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'OutputOption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回Outputs参数（资源栈输出列表）。取值：  

- Enabled（默认值）：返回Outputs参数。  

- Disabled：不返回Outputs参数。  
> Outputs计算较为耗时。如果不需要获取Outputs信息，建议您将OutputOption指定为Disabled，提高接口响应速度。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Disabled',
          ),
        ),
        4 => 
        array (
          'name' => 'ShowResourceProgress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回ResourceProgress参数（资源处理进度）。取值：  

- Disabled（默认值）：不返回ResourceProgress参数。

- PercentageOnly：返回ResourceProgress中StackOperationProgress和StackActionProgress参数。

> 支持ROS类型和Terraform类型资源栈。支持资源栈创建（含继续创建）、更新、删除、导入及相应的回滚操作。

- EnabledIfCreateStack（不推荐）：仅在创建资源栈时返回ResourceProgress中*Count和InProgressResourceDetails参数。  
>  创建资源栈时资源栈状态为CREATE_IN_PROGRESS、CREATE_COMPLETE、CREATE_FAILED、CREATE_ROLLBACK_IN_PROGRESS、CREATE_ROLLBACK_COMPLETE或CREATE_ROLLBACK_FAILED。',
            'type' => 'string',
            'required' => false,
            'example' => 'Disabled',
          ),
        ),
        5 => 
        array (
          'name' => 'LogOption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志选项。取值：
- None：不返回日志。
- Stack（默认值）：返回资源栈相关日志。
- Resource：返回资源相关日志。
- All：返回所有日志。',
            'type' => 'string',
            'required' => false,
            'example' => 'Stack',
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
              'Status' => 
              array (
                'description' => '资源栈状态。取值：  
- CREATE\\_IN_PROGRESS：资源栈创建中。
- CREATE_FAILED：资源栈创建失败。
- CREATE_COMPLETE：资源栈创建成功。
- UPDATE\\_IN_PROGRESS：资源栈更新中。
- UPDATE_FAILED：资源栈更新失败。
- UPDATE_COMPLETE：资源栈更新成功。
- DELETE\\_IN_PROGRESS：资源栈删除中。
- DELETE_FAILED：资源栈删除失败。
- DELETE_COMPLETE：资源栈删除成功。
- CREATE\\_ROLLBACK\\_IN_PROGRESS：创建资源栈回滚中。
- CREATE\\_ROLLBACK_FAILED：创建资源栈回滚失败。
- CREATE\\_ROLLBACK_COMPLETE：创建资源栈回滚成功。
- ROLLBACK\\_IN_PROGRESS：资源栈回滚中。
- ROLLBACK_FAILED：资源栈回滚失败。
- ROLLBACK_COMPLETE：资源栈回滚成功。
- CHECK\\_IN_PROGRESS：资源栈校验中。
- CHECK_FAILED：资源栈校验失败。
- CHECK_COMPLETE：资源栈校验成功。
- REVIEW\\_IN_PROGRESS：资源栈核对中。
- IMPORT\\_CREATE\\_IN_PROGRESS：通过资源导入创建资源栈中。
- IMPORT\\_CREATE_FAILED：通过资源导入创建资源栈失败。
- IMPORT\\_CREATE_COMPLETE：通过资源导入创建资源栈成功。
- IMPORT\\_CREATE\\_ROLLBACK\\_IN_PROGRESS：通过资源导入创建资源栈回滚中。
- IMPORT\\_CREATE\\_ROLLBACK_FAILED：通过资源导入创建资源栈回滚失败。
- IMPORT\\_CREATE\\_ROLLBACK_COMPLETE：通过资源导入创建资源栈回滚成功。
- IMPORT\\_UPDATE\\_IN_PROGRESS：通过资源导入更新资源栈中。
- IMPORT\\_UPDATE_FAILED：通过资源导入更新资源栈失败。
- IMPORT\\_UPDATE_COMPLETE：通过资源导入更新资源栈成功。
- IMPORT\\_UPDATE\\_ROLLBACK\\_IN_PROGRESS：通过资源导入更新资源栈回滚中。
- IMPORT\\_UPDATE\\_ROLLBACK_FAILED：通过资源导入更新资源栈回滚失败。
- IMPORT\\_UPDATE\\_ROLLBACK_COMPLETE：通过资源导入更新资源栈回滚成功。',
                'type' => 'string',
                'example' => 'CREATE_COMPLETE',
              ),
              'Description' => 
              array (
                'description' => '资源栈的描述信息。',
                'type' => 'string',
                'example' => 'Create a VPC.',
              ),
              'Parameters' => 
              array (
                'description' => '资源栈参数。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ParameterKey' => 
                    array (
                      'description' => '参数名称。',
                      'type' => 'string',
                      'example' => 'ALIYUN::Region',
                    ),
                    'ParameterValue' => 
                    array (
                      'description' => '参数值。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
              'StatusReason' => 
              array (
                'description' => '资源栈状态说明。',
                'type' => 'string',
                'example' => 'Stack CREATE completed successfully',
              ),
              'ParentStackId' => 
              array (
                'description' => '父资源栈ID。',
                'type' => 'string',
                'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf692****',
              ),
              'CreateTime' => 
              array (
                'description' => '资源栈创建时间。按照ISO8601标准表示，需使用UTC时间，格式：YYYY-MM-DDThh:mm:ss。',
                'type' => 'string',
                'example' => '2020-09-16T08:21:40',
              ),
              'DeletionProtection' => 
              array (
                'description' => '是否开启资源栈删除保护。取值：
- Enabled：开启资源栈删除保护。
- Disabled：关闭资源栈删除保护。此时支持通过控制台或API（DeleteStack）释放资源栈。

> 嵌套资源栈的删除保护机制与根资源栈一致。 ',
                'type' => 'string',
                'example' => 'Disabled',
              ),
              'RootStackId' => 
              array (
                'description' => '根资源栈ID。当资源栈为嵌套资源栈时，会返回该参数。',
                'type' => 'string',
                'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf692****',
              ),
              'TemplateDescription' => 
              array (
                'description' => '模板描述。',
                'type' => 'string',
                'example' => 'Create a VPC.',
              ),
              'StackType' => 
              array (
                'description' => '资源栈类型。取值：
- ROS：使用ROS模板的资源栈。
- Terraform：使用Terraform模板的资源栈。',
                'type' => 'string',
                'example' => 'ROS',
              ),
              'RamRoleName' => 
              array (
                'description' => 'RAM角色名称。ROS会扮演该角色创建资源栈，使用角色的凭证代表用户进行接口调用。   
ROS始终将此角色用于资源栈上将进行的操作。只要用户有权在资源栈上进行操作，即使用户无权使用角色，ROS也会使用此角色，确保角色授予最少的权限。  
如果用户未指定该值，ROS将使用以前与资源栈关联的角色。如果没有可用角色，ROS将使用从您的用户凭证中生成的临时凭证。  
RAM角色名称最大长度为64个字节。',
                'type' => 'string',
                'example' => 'test-role',
              ),
              'UpdateTime' => 
              array (
                'description' => '资源栈更新时间。按照ISO8601标准表示，需使用UTC时间，格式：YYYY-MM-DDThh:mm:ss。',
                'type' => 'string',
                'example' => '2020-09-17T08:21:40',
              ),
              'Outputs' => 
              array (
                'description' => '资源栈输出列表。 ',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源栈输出列表。  

> 当OutputOption取值为Enabled时返回该参数。',
                  'type' => 'object',
                  'example' => '[{"Description": "VPC ID","OutputKey": "VpcId","OutputValue": "vpc-bp1m6fww66xbntjyc****"}]',
                ),
              ),
              'DriftDetectionTime' => 
              array (
                'description' => '资源栈最近一次成功的偏差检测的时间。',
                'type' => 'string',
                'example' => '2020-09-16T09:21:40',
              ),
              'RegionId' => 
              array (
                'description' => '要创建的资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。
',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'StackDriftStatus' => 
              array (
                'description' => '资源栈最近一次成功的偏差检测中的资源栈的状态。取值：
- DRIFTED：资源栈处于偏差状态。
- NOT_CHECKED：资源栈未进行过成功的偏差检测。
- IN_SYNC：资源栈处于同步状态。',
                'type' => 'string',
                'example' => 'IN_SYNC',
              ),
              'NotificationURLs' => 
              array (
                'description' => '接收资源栈事件的URL回调地址。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '接收资源栈事件的URL回调地址。',
                  'type' => 'string',
                  'example' => '["http://127.XX.XX.1:8080/x", "http://127.0.XX.XX:8080/y"]',
                ),
              ),
              'DisableRollback' => 
              array (
                'description' => '当创建资源栈失败时，是否禁用回滚策略。取值：

- true：禁用回滚，即当创建资源栈失败时不进行回滚。
- false（默认值）：不禁用回滚，即当创建资源栈失败时进行回滚。
',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'StackName' => 
              array (
                'description' => '资源栈名称。   
长度不超过255个字符，必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。',
                'type' => 'string',
                'example' => 'MyStack',
              ),
              'Tags' => 
              array (
                'description' => '资源栈的标签。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '资源栈的标签键。',
                      'type' => 'string',
                      'example' => 'usage',
                    ),
                    'Value' => 
                    array (
                      'description' => '资源栈的标签值。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                  ),
                ),
              ),
              'TimeoutInMinutes' => 
              array (
                'description' => '创建资源栈的超时时间。单位：分钟。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'StackId' => 
              array (
                'description' => '资源栈ID。',
                'type' => 'string',
                'example' => 'c754d2a4-28f1-46df-b557-9586173a****',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-acfmxazb4ph6aiy****',
              ),
              'ResourceProgress' => 
              array (
                'description' => '资源处理进度。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalResourceCount' => 
                  array (
                    'description' => '总资源数。

> 仅在`ShowResourceProgress`参数取值为`EnabledIfCreateStack`时返回。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'SuccessResourceCount' => 
                  array (
                    'description' => '处理成功的资源数。

> 仅在`ShowResourceProgress`参数取值为`EnabledIfCreateStack`时返回。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'FailedResourceCount' => 
                  array (
                    'description' => '处理失败的资源数。

> 仅在`ShowResourceProgress`参数取值为`EnabledIfCreateStack`时返回。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'InProgressResourceCount' => 
                  array (
                    'description' => '处理中的资源数。

> 仅在`ShowResourceProgress`参数取值为`EnabledIfCreateStack`时返回。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PendingResourceCount' => 
                  array (
                    'description' => '待处理的资源数。

> 仅在`ShowResourceProgress`参数取值为`EnabledIfCreateStack`时返回。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'InProgressResourceDetails' => 
                  array (
                    'description' => '处理中的资源进度详情列表。

> 仅在`ShowResourceProgress`参数取值为`EnabledIfCreateStack`时返回。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '处理中的资源进度详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceName' => 
                        array (
                          'description' => '资源名称。',
                          'type' => 'string',
                          'example' => 'WaitCondition',
                        ),
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'ALIYUN::ROS::WaitCondition',
                        ),
                        'ProgressValue' => 
                        array (
                          'description' => '资源进度当前值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '5',
                        ),
                        'ProgressTargetValue' => 
                        array (
                          'description' => '资源进度目标值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '10',
                        ),
                      ),
                    ),
                  ),
                  'StackOperationProgress' => 
                  array (
                    'description' => '资源栈操作进度百分比。取值范围：0-100。

示例说明：创建资源栈时，取值从0开始一直在增加。如果创建成功，取值达到100。如果创建失败，开始回滚，则取值一直在减少。回滚成功时，取值达到0。该参数表示这次创建操作的整体进度，无论资源栈状态是创建中还是回滚中。

> 仅在`ShowResourceProgress`参数取值为`PercentageOnly`时返回。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '100',
                  ),
                  'StackActionProgress' => 
                  array (
                    'description' => '资源栈动作进度百分比。取值范围：0-100。

示例说明：创建资源栈时，取值从0开始一直在增加。如果创建成功，取值达到100。如果创建失败，开始回滚，则取值从另一个值（100-资源创建失败时的进度值）开始一直在增加。回滚成功时，取值达到100。该参数在创建资源栈时，表示创建动作的进度，在资源栈回滚时，表示回滚动作的进度。

> 仅在`ShowResourceProgress`参数取值为`PercentageOnly`时返回。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '100',
                  ),
                ),
              ),
              'Log' => 
              array (
                'description' => '资源栈相关输出日志。',
                'type' => 'object',
                'properties' => 
                array (
                  'TerraformLogs' => 
                  array (
                    'description' => 'Terraform输出日志。仅Terraform类型资源栈返回该参数。
当LogOption未指定，或者LogOption取值为Stack或All时返回该参数。

> 运行中的资源栈不返回该参数。该参数表示资源栈最近一次操作（创建、继续创建、更新、删除）的日志。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'test',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Command' => 
                        array (
                          'description' => '执行的Terraform命令名称。取值：

- apply

- plan

- destroy

- version

关于命令含义的更多信息，请参见[Command](https://www.terraform.io/cli/commands)。',
                          'type' => 'string',
                          'example' => 'apply',
                        ),
                        'Stream' => 
                        array (
                          'description' => '输出流。取值：

- stdout：标准输出。

- stderr：标准错误。',
                          'type' => 'string',
                          'example' => 'stdout',
                        ),
                        'Content' => 
                        array (
                          'description' => '当前命令在当前输出流中输出的内容。',
                          'type' => 'string',
                          'example' => 'Apply complete! Resources: 42 added, 0 changed, 0 destroyed.',
                        ),
                      ),
                    ),
                  ),
                  'ResourceLogs' => 
                  array (
                    'description' => '资源输出日志。当LogOption取值为Resource或All时返回该参数。

> 仅部分资源类型的资源会返回资源日志，例如：`ALIYUN::ROS::ResourceCleaner`。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'test',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceName' => 
                        array (
                          'description' => '模板中定义的资源名称。',
                          'type' => 'string',
                          'example' => 'MyResourceCleaner',
                        ),
                        'Logs' => 
                        array (
                          'description' => '资源关联的所有日志。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'test',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Keys' => 
                              array (
                                'description' => '资源关联的某条日志的关键字列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '关键字。',
                                  'type' => 'string',
                                  'example' => 'ResourceDetails',
                                ),
                              ),
                              'Content' => 
                              array (
                                'description' => '资源关联的某条日志的内容。',
                                'type' => 'string',
                                'example' => '[]',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TemplateId' => 
              array (
                'description' => '模板ID。仅在资源栈当前所使用的模板来自于用户自定义模板或共享模板时返回该参数。

如果是共享模板，返回结果与模板的TemplateARN相同。',
                'type' => 'string',
                'example' => 'a52f81be-496f-4e1c-a286-8852ab54****',
              ),
              'TemplateVersion' => 
              array (
                'description' => '模板版本。仅在资源栈当前所使用的模板来自于用户自定义模板或共享模板时返回该参数。

如果为共享模板，仅当共享时参数VersionOption为AllVersions时，返回该参数。

取值范围：v1～v100。',
                'type' => 'string',
                'example' => 'v1',
              ),
              'TemplateScratchId' => 
              array (
                'description' => '资源场景ID。仅在资源栈当前所使用的模板来自于资源场景时返回该参数。',
                'type' => 'string',
                'example' => 'ts-7f7a704cf71c49a6****',
              ),
              'TemplateURL' => 
              array (
                'description' => '包含模板主体的文件的位置。仅在资源栈当前所使用的模板来自于URL时返回该参数，包括Web服务器（HTTP或HTTPS）或阿里云OSS存储空间等。',
                'type' => 'string',
                'example' => 'oss://ros/template/demo',
              ),
              'Interface' => 
              array (
                'description' => '界面描述信息。',
                'type' => 'string',
                'example' => '{}',
              ),
              'ServiceManaged' => 
              array (
                'description' => '是否为托管资源栈。取值：  

- true：是托管资源栈。  

- false：不是托管资源栈。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'ServiceName' => 
              array (
                'description' => '托管资源栈所属的服务名称。',
                'type' => 'string',
                'example' => 'ACVS',
              ),
              'OperationInfo' => 
              array (
                'description' => '资源栈操作发生错误时的补充信息。

> 该返回属性仅在特定情况下返回，且至少返回一个子属性。例如：调用其他云服务API报错。',
                'type' => 'object',
                'properties' => 
                array (
                  'Code' => 
                  array (
                    'description' => '错误码。',
                    'type' => 'string',
                    'example' => 'DependencyViolation',
                  ),
                  'Message' => 
                  array (
                    'description' => '错误内容。',
                    'type' => 'string',
                    'example' => 'There is still instance(s) in the specified security group.',
                  ),
                  'RequestId' => 
                  array (
                    'description' => '调用其他云服务API的请求ID。',
                    'type' => 'string',
                    'example' => '071D6166-3F6B-5C7B-A1F0-0113FBB643A8',
                  ),
                  'Action' => 
                  array (
                    'description' => '调用其他云服务API的名称。',
                    'type' => 'string',
                    'example' => 'DeleteSecurityGroup',
                  ),
                  'ResourceType' => 
                  array (
                    'description' => '发生操作错误的资源类型。',
                    'type' => 'string',
                    'example' => 'ALIYUN::ECS::SecurityGroup',
                  ),
                  'LogicalResourceId' => 
                  array (
                    'description' => '发生操作错误的资源逻辑ID。',
                    'type' => 'string',
                    'example' => 'EcsSecurityGroup',
                  ),
                ),
              ),
              'OrderIds' => 
              array (
                'description' => '订单ID列表，当创建资源栈时设置了手动支付包年包月订单时才会返回。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '订单ID信息。',
                  'type' => 'string',
                  'example' => '2161413696****',
                ),
              ),
              'CheckedStackResourceCount' => 
              array (
                'description' => '已执行偏差检查的资源数。
> 仅在资源栈上次偏差检测成功时返回。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'NotCheckedStackResourceCount' => 
              array (
                'description' => '没有执行过偏差检查的资源数。
> 仅在资源栈上次偏差检测成功时返回。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RollbackFailedRootReason' => 
              array (
                'description' => '当资源栈状态为回滚失败时，该字段展示导致回滚的前一阶段执行失败的原因。',
                'type' => 'string',
                'example' => 'Resource UPDATE failed: Exception: resources.FailToCreate: FailToCreate: reason',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"CREATE_COMPLETE\\",\\n  \\"Description\\": \\"Create a VPC.\\",\\n  \\"Parameters\\": [\\n    {\\n      \\"ParameterKey\\": \\"ALIYUN::Region\\",\\n      \\"ParameterValue\\": \\"cn-hangzhou\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\",\\n  \\"StatusReason\\": \\"Stack CREATE completed successfully\\",\\n  \\"ParentStackId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf692****\\",\\n  \\"CreateTime\\": \\"2020-09-16T08:21:40\\",\\n  \\"DeletionProtection\\": \\"Disabled\\",\\n  \\"RootStackId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf692****\\",\\n  \\"TemplateDescription\\": \\"Create a VPC.\\",\\n  \\"StackType\\": \\"ROS\\",\\n  \\"RamRoleName\\": \\"test-role\\",\\n  \\"UpdateTime\\": \\"2020-09-17T08:21:40\\",\\n  \\"Outputs\\": [\\n    [\\n      {\\n        \\"Description\\": \\"VPC ID\\",\\n        \\"OutputKey\\": \\"VpcId\\",\\n        \\"OutputValue\\": \\"vpc-bp1m6fww66xbntjyc****\\"\\n      }\\n    ]\\n  ],\\n  \\"DriftDetectionTime\\": \\"2020-09-16T09:21:40\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"StackDriftStatus\\": \\"IN_SYNC\\",\\n  \\"NotificationURLs\\": [\\n    \\"[\\\\\\"http://127.XX.XX.1:8080/x\\\\\\", \\\\\\"http://127.0.XX.XX:8080/y\\\\\\"]\\"\\n  ],\\n  \\"DisableRollback\\": false,\\n  \\"StackName\\": \\"MyStack\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"usage\\",\\n      \\"Value\\": \\"test\\"\\n    }\\n  ],\\n  \\"TimeoutInMinutes\\": 10,\\n  \\"StackId\\": \\"c754d2a4-28f1-46df-b557-9586173a****\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmxazb4ph6aiy****\\",\\n  \\"ResourceProgress\\": {\\n    \\"TotalResourceCount\\": 2,\\n    \\"SuccessResourceCount\\": 1,\\n    \\"FailedResourceCount\\": 0,\\n    \\"InProgressResourceCount\\": 1,\\n    \\"PendingResourceCount\\": 0,\\n    \\"InProgressResourceDetails\\": [\\n      {\\n        \\"ResourceName\\": \\"WaitCondition\\",\\n        \\"ResourceType\\": \\"ALIYUN::ROS::WaitCondition\\",\\n        \\"ProgressValue\\": 5,\\n        \\"ProgressTargetValue\\": 10\\n      }\\n    ],\\n    \\"StackOperationProgress\\": 100,\\n    \\"StackActionProgress\\": 100\\n  },\\n  \\"Log\\": {\\n    \\"TerraformLogs\\": [\\n      {\\n        \\"Command\\": \\"apply\\",\\n        \\"Stream\\": \\"stdout\\",\\n        \\"Content\\": \\"Apply complete! Resources: 42 added, 0 changed, 0 destroyed.\\"\\n      }\\n    ],\\n    \\"ResourceLogs\\": [\\n      {\\n        \\"ResourceName\\": \\"MyResourceCleaner\\",\\n        \\"Logs\\": [\\n          {\\n            \\"Keys\\": [\\n              \\"ResourceDetails\\"\\n            ],\\n            \\"Content\\": \\"[]\\"\\n          }\\n        ]\\n      }\\n    ]\\n  },\\n  \\"TemplateId\\": \\"a52f81be-496f-4e1c-a286-8852ab54****\\",\\n  \\"TemplateVersion\\": \\"v1\\",\\n  \\"TemplateScratchId\\": \\"ts-7f7a704cf71c49a6****\\",\\n  \\"TemplateURL\\": \\"oss://ros/template/demo\\",\\n  \\"Interface\\": \\"{}\\",\\n  \\"ServiceManaged\\": false,\\n  \\"ServiceName\\": \\"ACVS\\",\\n  \\"OperationInfo\\": {\\n    \\"Code\\": \\"DependencyViolation\\",\\n    \\"Message\\": \\"There is still instance(s) in the specified security group.\\",\\n    \\"RequestId\\": \\"071D6166-3F6B-5C7B-A1F0-0113FBB643A8\\",\\n    \\"Action\\": \\"DeleteSecurityGroup\\",\\n    \\"ResourceType\\": \\"ALIYUN::ECS::SecurityGroup\\",\\n    \\"LogicalResourceId\\": \\"EcsSecurityGroup\\"\\n  },\\n  \\"OrderIds\\": [\\n    \\"2161413696****\\"\\n  ],\\n  \\"CheckedStackResourceCount\\": 1,\\n  \\"NotCheckedStackResourceCount\\": 1,\\n  \\"RollbackFailedRootReason\\": \\"Resource UPDATE failed: Exception: resources.FailToCreate: FailToCreate: reason\\"\\n}","errorExample":""},{"type":"xml","example":"<GetStackResponse>\\n    <Status>CREATE_COMPLETE</Status>\\n    <Description>Create a VPC.</Description>\\n    <Parameters>\\n        <ParameterKey>ALIYUN::Region</ParameterKey>\\n        <ParameterValue>cn-hangzhou</ParameterValue>\\n    </Parameters>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n    <StatusReason>Stack CREATE completed successfully</StatusReason>\\n    <ParentStackId>4a6c9851-3b0f-4f5f-b4ca-a14bf692****</ParentStackId>\\n    <CreateTime>2020-09-16T08:21:40</CreateTime>\\n    <DeletionProtection>Disabled</DeletionProtection>\\n    <RootStackId>4a6c9851-3b0f-4f5f-b4ca-a14bf692****</RootStackId>\\n    <TemplateDescription>Create a VPC.</TemplateDescription>\\n    <StackType>ROS</StackType>\\n    <RamRoleName>test-role</RamRoleName>\\n    <UpdateTime>2020-09-17T08:21:40</UpdateTime>\\n    <Outputs/>\\n    <DriftDetectionTime>2020-09-16T09:21:40</DriftDetectionTime>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <StackDriftStatus>IN_SYNC</StackDriftStatus>\\n    <NotificationURLs>[\\"http://127.XX.XX.1:8080/x\\", \\"http://127.0.XX.XX:8080/y\\"]</NotificationURLs>\\n    <DisableRollback>false</DisableRollback>\\n    <StackName>MyStack</StackName>\\n    <Tags>\\n        <Key>usage</Key>\\n        <Value>test</Value>\\n    </Tags>\\n    <TimeoutInMinutes>10</TimeoutInMinutes>\\n    <StackId>c754d2a4-28f1-46df-b557-9586173a****</StackId>\\n    <ResourceGroupId>rg-acfmxazb4ph6aiy****</ResourceGroupId>\\n    <ResourceProgress>\\n        <TotalResourceCount>2</TotalResourceCount>\\n        <SuccessResourceCount>1</SuccessResourceCount>\\n        <FailedResourceCount>0</FailedResourceCount>\\n        <InProgressResourceCount>1</InProgressResourceCount>\\n        <PendingResourceCount>0</PendingResourceCount>\\n        <InProgressResourceDetails>\\n            <ResourceName>WaitCondition</ResourceName>\\n            <ResourceType>ALIYUN::ROS::WaitCondition</ResourceType>\\n            <ProgressValue>5</ProgressValue>\\n            <ProgressTargetValue>10</ProgressTargetValue>\\n        </InProgressResourceDetails>\\n    </ResourceProgress>\\n    <Log>\\n        <TerraformLogs>\\n            <Command>apply</Command>\\n            <Stream>stdout</Stream>\\n            <Content>Apply complete! Resources: 42 added, 0 changed, 0 destroyed.</Content>\\n        </TerraformLogs>\\n        <ResourceLogs>\\n            <ResourceName>MyResourceCleaner</ResourceName>\\n            <Logs>\\n                <Keys>ResourceDetails</Keys>\\n                <Content>[]</Content>\\n            </Logs>\\n        </ResourceLogs>\\n    </Log>\\n    <TemplateId>a52f81be-496f-4e1c-a286-8852ab54****</TemplateId>\\n    <TemplateVersion>v1</TemplateVersion>\\n    <TemplateScratchId>ts-7f7a704cf71c49a6****</TemplateScratchId>\\n    <TemplateURL>oss://ros/template/demo</TemplateURL>\\n    <Interface>{}</Interface>\\n    <ServiceManaged>false</ServiceManaged>\\n    <ServiceName>ACVS</ServiceName>\\n    <OperationInfo>\\n        <Code>DependencyViolation</Code>\\n        <Message>There is still instance(s) in the specified security group.</Message>\\n        <RequestId>071D6166-3F6B-5C7B-A1F0-0113FBB643A8</RequestId>\\n        <Action>DeleteSecurityGroup</Action>\\n        <ResourceType>ALIYUN::ECS::SecurityGroup</ResourceType>\\n        <LogicalResourceId>EcsSecurityGroup</LogicalResourceId>\\n    </OperationInfo>\\n</GetStackResponse>","errorExample":""}]',
      'title' => '查询资源栈信息',
      'description' => '本文将提供一个示例，查询杭州地域ID为`c754d2a4-28f1-46df-b557-9586173a****`的资源栈信息。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 404 | StackNotFound |The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。 |',
    ),
    'ListStacks' => 
    array (
      'summary' => '查询资源栈列表。',
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
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。  

最大值：50。
  
默认值：10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'ParentStackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '父资源栈ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈列表的页码。  

起始值：1。
  
默认值：1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ShowNestedStack',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否列出嵌套资源栈。取值：

- true
- false（默认值）
  
> 如果指定了ParentStackId，则该值为true。  ',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。如果不需要资源栈详细信息，可以指定此参数，代替GetStack接口。',
            'type' => 'string',
            'required' => false,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        6 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源栈状态。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源栈状态，取值：  
- CREATE\\_IN_PROGRESS：资源栈创建中。
- CREATE_FAILED：资源栈创建失败。
- CREATE_COMPLETE：资源栈创建成功。
- UPDATE\\_IN_PROGRESS：资源栈更新中。
- UPDATE_FAILED：资源栈更新失败。
- UPDATE_COMPLETE：资源栈更新成功。
- DELETE\\_IN_PROGRESS：资源栈删除中。
- DELETE_FAILED：资源栈删除失败。
- CREATE\\_ROLLBACK\\_IN_PROGRESS：创建资源栈回滚中。
- CREATE\\_ROLLBACK_FAILED：创建资源栈回滚失败。
- CREATE\\_ROLLBACK_COMPLETE：创建资源栈回滚成功。
- ROLLBACK\\_IN_PROGRESS：资源栈回滚中。
- ROLLBACK_FAILED：资源栈回滚失败。
- ROLLBACK_COMPLETE：资源栈回滚成功。
- CHECK\\_IN_PROGRESS：资源栈校验中。
- CHECK_FAILED：资源栈校验失败。
- CHECK_COMPLETE：资源栈校验成功。
- REVIEW\\_IN_PROGRESS：资源栈核对中。
- IMPORT\\_CREATE\\_IN_PROGRESS：通过资源导入创建资源栈中。
- IMPORT\\_CREATE_FAILED：通过资源导入创建资源栈失败。
- IMPORT\\_CREATE_COMPLETE：通过资源导入创建资源栈成功。
- IMPORT\\_CREATE\\_ROLLBACK\\_IN_PROGRESS：通过资源导入创建资源栈回滚中。
- IMPORT\\_CREATE\\_ROLLBACK_FAILED：通过资源导入创建资源栈回滚失败。
- IMPORT\\_CREATE\\_ROLLBACK_COMPLETE：通过资源导入创建资源栈回滚成功。
- IMPORT\\_UPDATE\\_IN_PROGRESS：通过资源导入更新资源栈中。
- IMPORT\\_UPDATE_FAILED：通过资源导入更新资源栈失败。
- IMPORT\\_UPDATE_COMPLETE：通过资源导入更新资源栈成功。
- IMPORT\\_UPDATE\\_ROLLBACK\\_IN_PROGRESS：通过资源导入更新资源栈回滚中。
- IMPORT\\_UPDATE\\_ROLLBACK_FAILED：通过资源导入更新资源栈回滚失败。
- IMPORT\\_UPDATE\\_ROLLBACK_COMPLETE：通过资源导入更新资源栈回滚成功。

',
              'type' => 'string',
              'required' => false,
              'example' => 'CREATE_COMPLETE',
            ),
            'required' => false,
            'example' => 'CREATE_COMPLETE',
            'maxItems' => 5,
          ),
        ),
        7 => 
        array (
          'name' => 'StackName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源栈名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源栈名称。   
长度不超过255个字符，必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。支持使用星号（*）进行模糊搜索。

N的取值范围：1~5。',
              'type' => 'string',
              'required' => false,
              'example' => 'MyStack',
            ),
            'required' => false,
            'example' => 'MyStack',
            'maxItems' => 5,
          ),
        ),
        8 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源栈的标签。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源栈的标签键。  
N的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'usage',
                ),
                'Value' => 
                array (
                  'description' => '资源栈的标签值。  
N的取值范围：1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。  
关于资源组的更多信息，请参见[什么是资源组](~~94475~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxazb4ph6aiy****',
          ),
        ),
        10 => 
        array (
          'name' => 'StackIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源栈ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源栈ID。
您可以指定多个资源栈ID，同时查询多个资源栈的详细信息。
N的取值范围：1~10。',
              'type' => 'string',
              'required' => false,
              'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        11 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按创建时间查询，创建时间区间的起始点。按照[ISO 8601](~~25696~~)标准表示，并需要使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-04-01T15:10:00Z',
          ),
        ),
        12 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按创建时间查询，创建时间区间的终止点。按照[ISO 8601](~~25696~~)标准表示，并需要使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-04-01T15:16:00Z',
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
              'TotalCount' => 
              array (
                'description' => '资源栈总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。  

最大值：50。
  
默认值：10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FBAC80B4-9C27-529D-BC9C-4155FA5CD7A7',
              ),
              'PageNumber' => 
              array (
                'description' => '资源栈列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Stacks' => 
              array (
                'description' => '资源栈列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '资源栈状态。',
                      'type' => 'string',
                      'example' => 'CREATE_COMPLETE',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '资源栈更新时间。按照ISO8601标准表示，需使用UTC时间，格式：YYYY-MM-DDThh:mm:ss。',
                      'type' => 'string',
                      'example' => '2022-03-10T07:44:36',
                    ),
                    'DriftDetectionTime' => 
                    array (
                      'description' => '资源栈最近一次成功的偏差检测的时间。',
                      'type' => 'string',
                      'example' => '2022-03-10T06:46:36',
                    ),
                    'StatusReason' => 
                    array (
                      'description' => '资源栈状态原因。',
                      'type' => 'string',
                      'example' => 'Stack CREATE completed successfully',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。按照ISO8601标准表示，需使用UTC时间，格式：YYYY-MM-DDThh:mm:ss。',
                      'type' => 'string',
                      'example' => '2022-03-10T06:44:36',
                    ),
                    'DisableRollback' => 
                    array (
                      'description' => '当创建资源栈失败时，是否禁用回滚策略。取值：

- true：禁用回滚，即当创建资源栈失败时不进行回滚。
- false（默认值）：不禁用回滚，即当创建资源栈失败时进行回滚。
',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'Tags' => 
                    array (
                      'description' => '资源栈的标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '资源栈的标签键。',
                            'type' => 'string',
                            'example' => 'acs:rm:rgId',
                          ),
                          'Value' => 
                          array (
                            'description' => '资源栈的标签值。',
                            'type' => 'string',
                            'example' => 'rg-aek2frunvw7****',
                          ),
                        ),
                      ),
                    ),
                    'StackName' => 
                    array (
                      'description' => '资源栈名称。',
                      'type' => 'string',
                      'example' => 'MyStack',
                    ),
                    'TimeoutInMinutes' => 
                    array (
                      'description' => '创建资源栈的超时时间。单位：分钟。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '60',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'ParentStackId' => 
                    array (
                      'description' => '父资源栈ID。',
                      'type' => 'string',
                      'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf692****',
                    ),
                    'StackId' => 
                    array (
                      'description' => '资源栈ID。',
                      'type' => 'string',
                      'example' => '67805444-a605-45ee-a57f-83908ff6****',
                    ),
                    'StackDriftStatus' => 
                    array (
                      'description' => '资源栈最近一次成功的偏差检测中的资源栈状态，取值：
- DRIFTED：资源栈处于检测状态。
- NOT_CHECKED：资源栈未进行过成功的偏差检测。
- IN_SYNC：资源栈处于同步状态。',
                      'type' => 'string',
                      'example' => 'IN_SYNC',
                    ),
                    'StackType' => 
                    array (
                      'description' => '资源栈类型，取值：

- ROS：使用ROS模板的资源栈。
- Terraform：使用Terraform模板的资源栈。',
                      'type' => 'string',
                      'example' => 'ROS',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-aek2frunvw7****',
                    ),
                    'ServiceManaged' => 
                    array (
                      'description' => '是否为托管资源栈。取值：  

- true：是托管资源栈。  

- false：不是托管资源栈。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ServiceName' => 
                    array (
                      'description' => '托管资源栈所属的服务名称。',
                      'type' => 'string',
                      'example' => 'ACVS',
                    ),
                    'OperationInfo' => 
                    array (
                      'description' => '资源栈操作发生错误时的补充信息。

> 该返回属性仅在特定情况下返回，且至少返回一个子属性。例如：调用其他云服务API报错。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Code' => 
                        array (
                          'description' => '错误码。',
                          'type' => 'string',
                          'example' => 'DependencyViolation',
                        ),
                        'Message' => 
                        array (
                          'description' => '错误内容。',
                          'type' => 'string',
                          'example' => 'There is still instance(s) in the specified security group.',
                        ),
                        'RequestId' => 
                        array (
                          'description' => '调用其他云服务API的请求ID。',
                          'type' => 'string',
                          'example' => '071D6166-3F6B-5C7B-A1F0-0113FBB643A8',
                        ),
                        'Action' => 
                        array (
                          'description' => '调用其他云服务API的名称。',
                          'type' => 'string',
                          'example' => 'DeleteSecurityGroup',
                        ),
                        'ResourceType' => 
                        array (
                          'description' => '发生操作错误的资源类型。',
                          'type' => 'string',
                          'example' => 'ALIYUN::ECS::SecurityGroup',
                        ),
                        'LogicalResourceId' => 
                        array (
                          'description' => '发生操作错误的资源逻辑ID。',
                          'type' => 'string',
                          'example' => 'EcsSecurityGroup',
                        ),
                      ),
                    ),
                    'DeletionProtection' => 
                    array (
                      'description' => '是否开启资源栈删除保护。取值：
- Enabled：开启资源栈删除保护。
- Disabled：关闭资源栈删除保护。此时支持通过控制台或[DeleteStack](~~610812~~)接口释放资源栈。

> 嵌套资源栈的删除保护机制与根资源栈一致。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Enabled' => 'Enabled',
                        'Disabled' => 'Disabled',
                      ),
                      'example' => 'Disabled',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"FBAC80B4-9C27-529D-BC9C-4155FA5CD7A7\\",\\n  \\"PageNumber\\": 1,\\n  \\"Stacks\\": [\\n    {\\n      \\"Status\\": \\"CREATE_COMPLETE\\",\\n      \\"UpdateTime\\": \\"2022-03-10T07:44:36\\",\\n      \\"DriftDetectionTime\\": \\"2022-03-10T06:46:36\\",\\n      \\"StatusReason\\": \\"Stack CREATE completed successfully\\",\\n      \\"CreateTime\\": \\"2022-03-10T06:44:36\\",\\n      \\"DisableRollback\\": false,\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"acs:rm:rgId\\",\\n          \\"Value\\": \\"rg-aek2frunvw7****\\"\\n        }\\n      ],\\n      \\"StackName\\": \\"MyStack\\",\\n      \\"TimeoutInMinutes\\": 60,\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"ParentStackId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf692****\\",\\n      \\"StackId\\": \\"67805444-a605-45ee-a57f-83908ff6****\\",\\n      \\"StackDriftStatus\\": \\"IN_SYNC\\",\\n      \\"StackType\\": \\"ROS\\",\\n      \\"ResourceGroupId\\": \\"rg-aek2frunvw7****\\",\\n      \\"ServiceManaged\\": false,\\n      \\"ServiceName\\": \\"ACVS\\",\\n      \\"OperationInfo\\": {\\n        \\"Code\\": \\"DependencyViolation\\",\\n        \\"Message\\": \\"There is still instance(s) in the specified security group.\\",\\n        \\"RequestId\\": \\"071D6166-3F6B-5C7B-A1F0-0113FBB643A8\\",\\n        \\"Action\\": \\"DeleteSecurityGroup\\",\\n        \\"ResourceType\\": \\"ALIYUN::ECS::SecurityGroup\\",\\n        \\"LogicalResourceId\\": \\"EcsSecurityGroup\\"\\n      },\\n      \\"DeletionProtection\\": \\"Disabled\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListStacksResponse>\\n    <TotalCount>2</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>FBAC80B4-9C27-529D-BC9C-4155FA5CD7A7</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Stacks>\\n        <Status>CREATE_COMPLETE</Status>\\n        <UpdateTime>2022-03-10T07:44:36</UpdateTime>\\n        <DriftDetectionTime>2022-03-10T06:46:36</DriftDetectionTime>\\n        <StatusReason>Stack CREATE completed successfully</StatusReason>\\n        <CreateTime>2022-03-10T06:44:36</CreateTime>\\n        <DisableRollback>false</DisableRollback>\\n        <Tags>\\n            <Key>acs:rm:rgId</Key>\\n            <Value>rg-aek2frunvw7****</Value>\\n        </Tags>\\n        <StackName>MyStack</StackName>\\n        <TimeoutInMinutes>60</TimeoutInMinutes>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ParentStackId>4a6c9851-3b0f-4f5f-b4ca-a14bf692****</ParentStackId>\\n        <StackId>67805444-a605-45ee-a57f-83908ff6****</StackId>\\n        <StackDriftStatus>IN_SYNC</StackDriftStatus>\\n        <StackType>ROS</StackType>\\n        <ResourceGroupId>rg-aek2frunvw7****</ResourceGroupId>\\n        <ServiceManaged>false</ServiceManaged>\\n        <ServiceName>ACVS</ServiceName>\\n        <OperationInfo>\\n            <Code>DependencyViolation</Code>\\n            <Message>There is still instance(s) in the specified security group.</Message>\\n            <RequestId>071D6166-3F6B-5C7B-A1F0-0113FBB643A8</RequestId>\\n            <Action>DeleteSecurityGroup</Action>\\n            <ResourceType>ALIYUN::ECS::SecurityGroup</ResourceType>\\n            <LogicalResourceId>EcsSecurityGroup</LogicalResourceId>\\n        </OperationInfo>\\n    </Stacks>\\n</ListStacksResponse>","errorExample":""}]',
      'title' => '查询资源栈列表',
      'description' => '### 使用说明

本文将提供一个示例，为您查询杭州地域的资源栈列表。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CancelUpdateStack' => 
    array (
      'path' => '/V2/CancelUpdateStack',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'CancelType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '取消更新资源栈类型。取值：

- Quick：尽快取消更新资源栈。

- Safe：尽可能安全地取消更新资源栈。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Safe',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelUpdateStackResponse>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n</CancelUpdateStackResponse>","errorExample":""}]',
      'title' => '取消更新资源栈',
      'summary' => '当您的资源栈正处于更新中或创建中且操作尚未完成，您可以调用该接口取消更新资源栈操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 404 | StackNotFound | The Stack ({name}) could not be found. | 资源栈不存在。name为资源栈名称或ID。 |
| 409 | ActionInProgress | Stack {name} already has an action ({action}) in progress. | 资源栈在变更中。name为资源栈名称或ID，action为具体的变更操作。 |',
    ),
    'CancelStackOperation' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。
您可以调用[DescribeRegions](~~131035~~)接口查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'CancelType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '取消类型。取值：
- Quick：相对较快地取消资源栈操作。停止新的调度，并在相对适合的时机停止运行中的资源。使用此类型可能导致资源状态不正确，影响后续资源栈操作。
- Safe（默认值）：相对安全地取消资源栈操作。停止新的调度，并且等待运行中的资源结束运行。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Safe',
          ),
        ),
        3 => 
        array (
          'name' => 'AllowedStackOperations',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '允许取消的资源栈操作。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '允许取消的资源栈操作。取值：
- CREATE：创建资源栈，包括继续创建。
- UPDATE：更新资源栈。
- IMPORT_CREATE：导入创建。
- IMPORT_UPDATE：导入更新。
- DELETE：删除资源栈。
- NOT\\_ROLLBACK（默认值）：所有非回滚操作，包括CREATE、UPDATE、IMPORT\\_CREATE、IMPORT\\_UPDATE、DELETE。不建议取消回滚操作，可能导致资源栈状态不正确，影响后续资源栈操作。
- CREATE\\_ROLLBACK：创建失败回滚。
- ROLLBACK：更新失败回滚。
- IMPORT\\_CREATE\\_ROLLBACK：导入创建失败回滚。
- IMPORT\\_UPDATE\\_ROLLBACK：导入更新失败回滚。
- ALL：所有操作，包括CREATE、UPDATE、IMPORT\\_CREATE、IMPORT\\_UPDATE、DELETE、CREATE\\_ROLLBACK、ROLLBACK、IMPORT\\_CREATE\\_ROLLBACK、IMPORT\\_UPDATE\\_ROLLBACK。

N的取值范围：1~10。',
              'type' => 'string',
              'required' => false,
              'example' => 'NOT_ROLLBACK',
            ),
            'required' => false,
            'maxItems' => 10,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelStackOperationResponse>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n</CancelStackOperationResponse>","errorExample":""}]',
      'title' => '取消资源栈操作',
      'summary' => '取消资源栈操作。',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 404 | StackNotFound | The Stack ({name}) could not be found. | 资源栈不存在。name为资源栈名称或ID。 |
| 400 | NotSupported | {feature} is not supported. | 不支持feature（特性或操作）。 |',
    ),
    'SetDeletionProtection' => 
    array (
      'path' => '/V2/SetDeletionProtection',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。
  
嵌套资源栈的删除保护属性由根资源栈决定，始终与根资源栈一致，且无法被修改。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'DeletionProtection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启资源栈删除保护，取值：
- Enabled：开启资源栈删除保护。
- Disabled（默认）：关闭资源栈删除保护。此时支持通过控制台或API（DeleteStack）释放资源栈。

> 嵌套资源栈删除保护与根资源栈一致。 
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Enabled',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\"\\n}","type":"json"}]',
      'title' => '修改资源栈的删除保护属性',
      'summary' => '修改资源栈的删除保护属性。',
    ),
    'ListStackEvents' => 
    array (
      'path' => '/V2/ListStackEvents',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。  
最大值：50。  
默认值：10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件列表的页码。  
起始值：1。  
默认值：1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源状态。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源状态。取值：

- CREATE_COMPLETE
- CREATE_FAILED
- CREATE_IN_PROGRESS
- UPDATE_IN_PROGRESS
- UPDATE_FAILED
- UPDATE_COMPLETE
- UPDATE_SKIPPED
- DELETE_IN_PROGRESS
- DELETE_FAILED
- CHECK_IN_PROGRESS
- CHECK_FAILED
- CHECK_COMPLETE
- IMPORT_IN_PROGRESS
- IMPORT_FAILED
- IMPORT_COMPLETE',
              'type' => 'string',
              'required' => false,
              'example' => 'CREATE_IN_PROGRESS',
            ),
            'required' => false,
            'example' => 'CREATE_IN_PROGRESS',
            'maxItems' => 5,
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源类型列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源类型列表。N的最大值为200。
关于资源类型，请参见[资源类型索引](~~127039~~)。',
              'type' => 'string',
              'required' => false,
              'example' => 'ALIYUN::ECS::Instance',
            ),
            'required' => false,
            'example' => 'ALIYUN::ECS::Instance',
            'maxItems' => 5,
          ),
        ),
        6 => 
        array (
          'name' => 'LogicalResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源逻辑ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源逻辑ID，即模板中资源的名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'WebServer',
            ),
            'required' => false,
            'example' => 'WebServer',
            'maxItems' => 5,
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
              'TotalCount' => 
              array (
                'description' => '查询到的事件总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。  
最大值：50。  
默认值：10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6',
              ),
              'PageNumber' => 
              array (
                'description' => '事件列表的页码。  
起始值：1。  
默认值：1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Events' => 
              array (
                'description' => '事件对象列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '资源的状态。',
                      'type' => 'string',
                      'example' => 'CREATE_COMPLETE',
                    ),
                    'EventId' => 
                    array (
                      'description' => '事件ID。',
                      'type' => 'string',
                      'example' => '0086612d-77cf-4056-b0b5-ff8e94ad****',
                    ),
                    'LogicalResourceId' => 
                    array (
                      'description' => '资源逻辑ID，即模板中资源的名称。',
                      'type' => 'string',
                      'example' => 'WebServer',
                    ),
                    'StackId' => 
                    array (
                      'description' => '资源栈ID。',
                      'type' => 'string',
                      'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
                    ),
                    'PhysicalResourceId' => 
                    array (
                      'description' => '实际资源的物理ID。',
                      'type' => 'string',
                      'example' => 'i-m5e3tfdbinchnexh****',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'ALIYUN::ECS::Instance',
                    ),
                    'StatusReason' => 
                    array (
                      'description' => '状态原因。',
                      'type' => 'string',
                      'example' => 'state changed',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。按照ISO8601标准表示，需使用UTC时间，格式：YYYY-MM-DDThh:mm:ss。',
                      'type' => 'string',
                      'example' => '2019-08-01T04:07:39',
                    ),
                    'StackName' => 
                    array (
                      'description' => '资源栈名称。',
                      'type' => 'string',
                      'example' => 'StackName',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 20,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6\\",\\n  \\"PageNumber\\": 1,\\n  \\"Events\\": [\\n    {\\n      \\"Status\\": \\"CREATE_COMPLETE\\",\\n      \\"EventId\\": \\"0086612d-77cf-4056-b0b5-ff8e94ad****\\",\\n      \\"LogicalResourceId\\": \\"WebServer\\",\\n      \\"StackId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf691****\\",\\n      \\"PhysicalResourceId\\": \\"i-m5e3tfdbinchnexh****\\",\\n      \\"ResourceType\\": \\"ALIYUN::ECS::Instance\\",\\n      \\"StatusReason\\": \\"state changed\\",\\n      \\"CreateTime\\": \\"2019-08-01T04:07:39\\",\\n      \\"StackName\\": \\"StackName\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListStackEventsResponse>\\n    <TotalCount>20</TotalCount>\\n    <PageSize>10</PageSize>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6</RequestId>\\n    <PageNumber>1</PageNumber>\\n    <Events>\\n        <Status>CREATE_COMPLETE</Status>\\n        <EventId>0086612d-77cf-4056-b0b5-ff8e94ad****</EventId>\\n        <LogicalResourceId>WebServer</LogicalResourceId>\\n        <StackId>4a6c9851-3b0f-4f5f-b4ca-a14bf691****</StackId>\\n        <PhysicalResourceId>i-m5e3tfdbinchnexh****</PhysicalResourceId>\\n        <ResourceType>ALIYUN::ECS::Instance</ResourceType>\\n        <StatusReason>state changed</StatusReason>\\n        <CreateTime>2019-08-01T04:07:39</CreateTime>\\n        <StackName>StackName</StackName>\\n    </Events>\\n</ListStackEventsResponse>","errorExample":""}]',
      'title' => '查询资源栈及栈内资源的事件',
      'summary' => '查询资源栈及栈内资源的事件。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 404 | StackNotFound | The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。 |',
    ),
    'ListStackOperationRisks' => 
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
            'description' => '资源栈所属的地域ID。
您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****	',
          ),
        ),
        2 => 
        array (
          'name' => 'OperationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要检测的操作类型。
取值：

- DeleteStack：检测删除资源栈操作涉及的高风险资源。

- CreateStack：创建资源栈操作可能出现的创建失败的风险，仅支持检测调用者可能缺失的权限。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'DeleteStack',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。 
长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。 
更多详情，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****	',
          ),
        ),
        4 => 
        array (
          'name' => 'RamRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM角色名称。

- 如果指定RAM角色，ROS将根据RAM角色的权限创建资源栈，使用角色的凭证代表用户进行接口调用。  

- 如果不指定RAM角色，ROS将使用当前账号相关权限创建资源栈。

RAM角色名称最大长度为64个字节。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-role',
          ),
        ),
        5 => 
        array (
          'name' => 'RetainAllResources',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否保留该资源栈下的所有资源。
取值：  

- true：保留。  

- false（默认值）：不保留。  
  

> 当OperationType取值为DeleteStack时该参数有效。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'RetainResources',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要保留资源的列表。  
> 当OperationType取值为DeleteStack时，该参数有效。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要保留的资源。  ',
              'type' => 'string',
              'required' => false,
              'example' => 'instance',
            ),
            'required' => false,
            'example' => 'WebServer',
            'maxItems' => 200,
          ),
        ),
        7 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板主体的结构。长度为1~524,288个字节。如果长度较长，则建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免因URL过长而导致请求失败。 
> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId或TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => '{"ROSTemplateFormatVersion":"2015-09-01"}',
          ),
        ),
        8 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/stack-policy/demo、oss://ros/stack-policy/demo?RegionId=cn-hangzhou）中的模板，模板的最大长度为524,288个字节。如未指定OSS地域，默认与RegionId取值相同。

> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId或TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'oss://ros-template/demo',
          ),
        ),
        9 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。

> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId或TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        10 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板版本。

> 当您指定TemplateId时，本参数才生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '72108E7A-E874-4A5E-B22C-A61E94AD12CD',
              ),
              'RiskResources' => 
              array (
                'description' => '风险信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LogicalResourceId' => 
                    array (
                      'description' => '资源逻辑ID，即模板定义的资源名称。',
                      'type' => 'string',
                      'example' => 'MySG',
                    ),
                    'PhysicalResourceId' => 
                    array (
                      'description' => '资源物理ID，即实际的资源ID。',
                      'type' => 'string',
                      'example' => 'sg-bp1dpioafqphedg9****',
                    ),
                    'RequestId' => 
                    array (
                      'description' => '对资源进行风险检测失败时的请求ID。

> 当风险检测正常时，不返回该参数。',
                      'type' => 'string',
                      'example' => 'DF4296CF-F45F-4845-A72B-BE617601DB25',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'ALIYUN::ECS::SecurityGroup',
                    ),
                    'Code' => 
                    array (
                      'description' => '对资源进行风险检测失败时的错误码。

> 当风险检测正常时，不返回该参数。',
                      'type' => 'string',
                      'example' => 'NoPermission',
                    ),
                    'Message' => 
                    array (
                      'description' => '对资源进行风险检测失败时的错误信息。

> 当风险检测正常时，不返回该参数。',
                      'type' => 'string',
                      'example' => 'You are not authorized to complete this action.',
                    ),
                    'RiskType' => 
                    array (
                      'description' => '风险类型。取值：
- Referenced：当前资源被其他资源引用。
- MaybeReferenced：当前资源可能被其他资源引用。
- AdditionalRiskCheckRequired：嵌套资源栈需要额外进行风险检测。
- OperationIgnored：当前操作对当前资源不生效。',
                      'type' => 'string',
                      'example' => 'Referenced',
                    ),
                    'Reason' => 
                    array (
                      'description' => '风险原因。',
                      'type' => 'string',
                      'example' => 'There are some ECS instances (i-bp18el96s4wq635e****) depending on the security group.',
                    ),
                  ),
                ),
              ),
              'MissingPolicyActions' => 
              array (
                'description' => '调用者所属账号缺少的资源操作列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '调用者所属账号缺少的资源操作列表。',
                  'type' => 'string',
                  'example' => '["ecs:DescribeInstance", "ros:CreateStack"]',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"72108E7A-E874-4A5E-B22C-A61E94AD12CD\\",\\n  \\"RiskResources\\": [\\n    {\\n      \\"LogicalResourceId\\": \\"MySG\\",\\n      \\"PhysicalResourceId\\": \\"sg-bp1dpioafqphedg9****\\",\\n      \\"RequestId\\": \\"DF4296CF-F45F-4845-A72B-BE617601DB25\\",\\n      \\"ResourceType\\": \\"ALIYUN::ECS::SecurityGroup\\",\\n      \\"Code\\": \\"NoPermission\\",\\n      \\"Message\\": \\"You are not authorized to complete this action.\\",\\n      \\"RiskType\\": \\"Referenced\\",\\n      \\"Reason\\": \\"There are some ECS instances (i-bp18el96s4wq635e****) depending on the security group.\\"\\n    }\\n  ],\\n  \\"MissingPolicyActions\\": [\\n    \\"[\\\\\\"ecs:DescribeInstance\\\\\\", \\\\\\"ros:CreateStack\\\\\\"]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListStackOperationRisksResponse>\\n    <RequestId>72108E7A-E874-4A5E-B22C-A61E94AD12CD</RequestId>\\n    <RiskResources>\\n        <LogicalResourceId>MySG</LogicalResourceId>\\n        <PhysicalResourceId>sg-bp1dpioafqphedg9****</PhysicalResourceId>\\n        <RequestId>DF4296CF-F45F-4845-A72B-BE617601DB25</RequestId>\\n        <ResourceType>ALIYUN::ECS::SecurityGroup</ResourceType>\\n        <Code>NoPermission</Code>\\n        <Message>You are not authorized to complete this action.</Message>\\n        <RiskType>Referenced</RiskType>\\n        <Reason>There are some ECS instances (i-bp18el96s4wq635e****) depending on the security group.</Reason>\\n    </RiskResources>\\n    <MissingPolicyActions>[\\"ecs:DescribeInstance\\", \\"ros:CreateStack\\"]</MissingPolicyActions>\\n</ListStackOperationRisksResponse>","errorExample":""}]',
      'title' => '检测资源栈操作可能涉及的风险及原因',
      'summary' => '检测进行资源栈操作可能涉及的风险，并返回风险原因或缺失项。',
      'description' => '本接口目前支持以下情况：

- 删除资源栈操作可能涉及的高风险资源，并返回每个资源对应的风险原因。

- 创建资源栈操作可能出现的创建失败的风险，仅支持检测调用者可能缺失的权限。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PreviewStack' => 
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
          'name' => 'DisableRollback',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当创建资源栈失败时，是否禁用回滚。取值：

- true：禁用回滚，即当创建资源栈失败时不进行回滚。
- false（默认值）：不禁用回滚，即当创建资源栈失败时进行回滚。
',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'TimeoutInMinutes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建资源栈的超时时间。

单位：分钟。

默认值：60。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '60',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板主体的结构。长度为1~524,288个字节。如果长度较长，则建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免因URL过长而导致请求失败。 
> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId和TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"ROSTemplateFormatVersion":"2015-09-01"}',
          ),
        ),
        3 => 
        array (
          'name' => 'StackPolicyURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含资源栈策略的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/stack-policy/demo、oss://ros/stack-policy/demo?RegionId=cn-hangzhou）中的策略，策略文件最大长度为16,384个字节。如未指定OSS地域，默认与RegionId取值相同。 

> 您仅能指定StackPolicyBody和StackPolicyURL其中一个参数。  
  
URL最大长度为1350个字节。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros-stack-policy/demo',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'StackPolicyBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含资源栈策略主体的结构，长度为1~16,384个字节。  

> 您仅能指定StackPolicyBody和StackPolicyURL其中一个参数。  ',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"Statement": [{"Action": "Update:*", "Resource": "*", "Effect": "Allow", "Principal": "*"}]}',
          ),
        ),
        6 => 
        array (
          'name' => 'StackName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈名称。预览创建资源栈。
长度不超过255个字符，必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。
> 您必须且仅能指定StackName或StackId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'MyStack',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。   
长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。   
更多详情，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        8 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/stack-policy/demo、oss://ros/stack-policy/demo?RegionId=cn-hangzhou）中的模板，模板的最大长度为524,288个字节。如未指定OSS地域，默认与RegionId取值相同。 

> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId和TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros-template/demo',
          ),
        ),
        9 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。

> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId和TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        10 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板版本。仅在指定TemplateId时生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        11 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '参数。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '参数名称。如果未指定参数名称和参数值，ROS将使用模板中指定的默认值。N的最大值为200。  

> 若指定了Parameters，则Parameters.N.ParameterKey为必选参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ALIYUN::AccountId',
                ),
                'ParameterValue' => 
                array (
                  'description' => '参数值。N的最大值为200。  

> 若指定了Parameters，则Parameters.N.ParameterValue为必选参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '151266687691****',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        12 => 
        array (
          'name' => 'Parallelism',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源最大并发数。仅对Terraform类型资源栈生效。

默认为空，用户可以输入大于等于零的整数。

>若设置为大于零的整数，则使用该整数；若设置为零或者不设置，则使用Terraform默认值（通常为10）。  
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        13 => 
        array (
          'name' => 'TemplateScratchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景ID。

关于如何获取资源场景ID，请参见[ListTemplateScratches](~~363050~~)。

> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId和TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'ts-aa9c62feab844a6b****',
          ),
        ),
        14 => 
        array (
          'name' => 'TemplateScratchRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景所属的地域ID，默认与RegionId取值相同。

您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        15 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。预览更新资源栈。

> - 您必须且仅能指定StackName或StackId其中一个参数。
> -  预览创建或更新资源栈的场景中不支持预览嵌套资源栈中的资源。',
            'type' => 'string',
            'required' => false,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        16 => 
        array (
          'name' => 'EnablePreConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否获取合规预检参数。

取值：

- true：获取合规预检参数。

- false（默认值）：不获取合规预检参数。',
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
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
              'Stack' => 
              array (
                'description' => '资源栈预览数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'TemplateDescription' => 
                  array (
                    'description' => '模板描述。',
                    'type' => 'string',
                    'example' => 'One ECS instance.',
                  ),
                  'Parameters' => 
                  array (
                    'description' => '资源栈参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParameterKey' => 
                        array (
                          'description' => '参数名称。',
                          'type' => 'string',
                          'example' => 'ALIYUN::AccountId',
                        ),
                        'ParameterValue' => 
                        array (
                          'description' => '参数值。',
                          'type' => 'string',
                          'example' => '151266687691****',
                        ),
                      ),
                    ),
                  ),
                  'Description' => 
                  array (
                    'description' => '资源栈描述。',
                    'type' => 'string',
                    'example' => 'One ECS instance.',
                  ),
                  'DisableRollback' => 
                  array (
                    'description' => '是否禁用回滚。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'StackName' => 
                  array (
                    'description' => '资源栈名称。',
                    'type' => 'string',
                    'example' => 'MyStack',
                  ),
                  'TimeoutInMinutes' => 
                  array (
                    'description' => '超时时间。

单位：分钟。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '60',
                  ),
                  'StackPolicyBody' => 
                  array (
                    'description' => '资源栈策略内容。',
                    'type' => 'object',
                    'example' => '{   "Statement": [     {       "Action": "Update:*",       "Resource": "*",       "Effect": "Allow",       "Principal": "*"     },     {       "Action": "Update:*",       "Resource": "LogicalResourceId/apple1",       "Effect": "Deny",       "Principal": "*"     }   ] }',
                  ),
                  'Resources' => 
                  array (
                    'description' => '资源栈中的资源列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LogicalResourceId' => 
                        array (
                          'description' => '资源逻辑ID。',
                          'type' => 'string',
                          'example' => 'WebServer',
                        ),
                        'AcsResourceType' => 
                        array (
                          'description' => 'ACS资源类型。',
                          'type' => 'string',
                          'example' => 'ACS::ECS::Instance',
                        ),
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'ALIYUN::ECS::Instance',
                        ),
                        'Description' => 
                        array (
                          'description' => '资源描述。',
                          'type' => 'string',
                          'example' => 'ECS instance.',
                        ),
                        'Stack' => 
                        array (
                          'description' => '子资源栈信息。数据结构同整个返回值。',
                          'type' => 'object',
                          'example' => '{}',
                        ),
                        'RequiredBy' => 
                        array (
                          'description' => '资源栈依赖的资源。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '资源栈依赖的资源。',
                            'type' => 'string',
                            'example' => '["Resource1", "Resource2"]',
                          ),
                        ),
                        'Properties' => 
                        array (
                          'description' => '资源属性。',
                          'type' => 'object',
                          'example' => '{   "DiskMappings": [     {       "Category": "cloud_ssd",       "Size": "20"     }   ],   "SystemDisk_Category": "cloud_ssd",   "InstanceChargeType": "PostPaid",   "AutoRenew": "False",   "WillReplace": true,   "ImageId": "centos_7",   "InstanceType": "ecs.g6.large",   "AllocatePublicIP": true,   "AutoRenewPeriod": 1,   "IoOptimized": "optimized",   "ZoneId": "cn-beijing-g",   "VSwitchId": "",   "SecurityGroupId": "",   "Period": 1,   "InternetChargeType": "PayByTraffic",   "SystemDiskCategory": "cloud_efficiency",   "InternetMaxBandwidthOut": 1,   "VpcId": "",   "InternetMaxBandwidthIn": 200,   "PeriodUnit": "Month" }',
                        ),
                        'Action' => 
                        array (
                          'description' => '资源行为。取值：
- Add：增加资源。
- Modify：修改资源。
- Remove：删除资源。
- None：无变化。',
                          'type' => 'string',
                          'example' => 'Add',
                        ),
                        'Replacement' => 
                        array (
                          'description' => '模板是否为替换更新。取值：
- True：替换更新。
- False：修改更新。
- Conditional：可能是替换更新，模板运行时才能确定。

> 仅当Action取值为Modify时，返回本参数。',
                          'type' => 'string',
                          'example' => 'False',
                        ),
                        'PhysicalResourceId' => 
                        array (
                          'description' => '资源物理ID。

当Action为Modify或Remove时，返回本参数。',
                          'type' => 'string',
                          'example' => 'i-a1b2c3***',
                        ),
                      ),
                    ),
                  ),
                  'RegionId' => 
                  array (
                    'description' => '资源栈所在地域。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'Log' => 
                  array (
                    'description' => '资源栈相关输出日志。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'TerraformLogs' => 
                      array (
                        'description' => 'Terraform输出日志。仅Terraform类型资源栈返回该参数。

> 该参数表示预览资源栈的日志。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Command' => 
                            array (
                              'description' => '执行的Terraform命令名称。取值：

- apply

- plan

- destroy

- version

关于命令含义的更多信息，请参见[Command](https://www.terraform.io/cli/commands)。',
                              'type' => 'string',
                              'example' => 'apply',
                            ),
                            'Stream' => 
                            array (
                              'description' => '输出流。取值：

- stdout：标准输出。

- stderr：标准错误。',
                              'type' => 'string',
                              'example' => 'stdout',
                            ),
                            'Content' => 
                            array (
                              'description' => '当前命令在当前输出流中输出的内容。',
                              'type' => 'string',
                              'example' => 'Apply complete! Resources: 42 added, 0 changed, 0 destroyed.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\",\\n  \\"Stack\\": {\\n    \\"TemplateDescription\\": \\"One ECS instance.\\",\\n    \\"Parameters\\": [\\n      {\\n        \\"ParameterKey\\": \\"ALIYUN::AccountId\\",\\n        \\"ParameterValue\\": \\"151266687691****\\"\\n      }\\n    ],\\n    \\"Description\\": \\"One ECS instance.\\",\\n    \\"DisableRollback\\": false,\\n    \\"StackName\\": \\"MyStack\\",\\n    \\"TimeoutInMinutes\\": 60,\\n    \\"StackPolicyBody\\": {\\n      \\"Statement\\": [\\n        {\\n          \\"Action\\": \\"Update:*\\",\\n          \\"Resource\\": \\"*\\",\\n          \\"Effect\\": \\"Allow\\",\\n          \\"Principal\\": \\"*\\"\\n        },\\n        {\\n          \\"Action\\": \\"Update:*\\",\\n          \\"Resource\\": \\"LogicalResourceId/apple1\\",\\n          \\"Effect\\": \\"Deny\\",\\n          \\"Principal\\": \\"*\\"\\n        }\\n      ]\\n    },\\n    \\"Resources\\": [\\n      {\\n        \\"LogicalResourceId\\": \\"WebServer\\",\\n        \\"AcsResourceType\\": \\"ACS::ECS::Instance\\",\\n        \\"ResourceType\\": \\"ALIYUN::ECS::Instance\\",\\n        \\"Description\\": \\"ECS instance.\\",\\n        \\"Stack\\": {},\\n        \\"RequiredBy\\": [\\n          \\"[\\\\\\"Resource1\\\\\\", \\\\\\"Resource2\\\\\\"]\\"\\n        ],\\n        \\"Properties\\": {\\n          \\"DiskMappings\\": [\\n            {\\n              \\"Category\\": \\"cloud_ssd\\",\\n              \\"Size\\": \\"20\\"\\n            }\\n          ],\\n          \\"SystemDisk_Category\\": \\"cloud_ssd\\",\\n          \\"InstanceChargeType\\": \\"PostPaid\\",\\n          \\"AutoRenew\\": \\"False\\",\\n          \\"WillReplace\\": true,\\n          \\"ImageId\\": \\"centos_7\\",\\n          \\"InstanceType\\": \\"ecs.g6.large\\",\\n          \\"AllocatePublicIP\\": true,\\n          \\"AutoRenewPeriod\\": 1,\\n          \\"IoOptimized\\": \\"optimized\\",\\n          \\"ZoneId\\": \\"cn-beijing-g\\",\\n          \\"VSwitchId\\": \\"\\",\\n          \\"SecurityGroupId\\": \\"\\",\\n          \\"Period\\": 1,\\n          \\"InternetChargeType\\": \\"PayByTraffic\\",\\n          \\"SystemDiskCategory\\": \\"cloud_efficiency\\",\\n          \\"InternetMaxBandwidthOut\\": 1,\\n          \\"VpcId\\": \\"\\",\\n          \\"InternetMaxBandwidthIn\\": 200,\\n          \\"PeriodUnit\\": \\"Month\\"\\n        },\\n        \\"Action\\": \\"Add\\",\\n        \\"Replacement\\": \\"False\\",\\n        \\"PhysicalResourceId\\": \\"i-a1b2c3***\\"\\n      }\\n    ],\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"Log\\": {\\n      \\"TerraformLogs\\": [\\n        {\\n          \\"Command\\": \\"apply\\",\\n          \\"Stream\\": \\"stdout\\",\\n          \\"Content\\": \\"Apply complete! Resources: 42 added, 0 changed, 0 destroyed.\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<PreviewStackResponse>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n    <Stack>\\n        <TemplateDescription>One ECS instance.</TemplateDescription>\\n        <Parameters>\\n            <ParameterKey>ALIYUN::AccountId</ParameterKey>\\n            <ParameterValue>151266687691****</ParameterValue>\\n        </Parameters>\\n        <Description>One ECS instance.</Description>\\n        <DisableRollback>false</DisableRollback>\\n        <StackName>MyStack</StackName>\\n        <TimeoutInMinutes>60</TimeoutInMinutes>\\n        <Resources>\\n            <LogicalResourceId>WebServer</LogicalResourceId>\\n            <AcsResourceType>ACS::ECS::Instance</AcsResourceType>\\n            <ResourceType>ALIYUN::ECS::Instance</ResourceType>\\n            <Description>ECS instance.</Description>\\n            <RequiredBy>[\\"Resource1\\", \\"Resource2\\"]</RequiredBy>\\n            <Action>Add</Action>\\n            <Replacement>False</Replacement>\\n        </Resources>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <Log>\\n            <TerraformLogs>\\n                <Command>apply</Command>\\n                <Stream>stdout</Stream>\\n                <Content>Apply complete! Resources: 42 added, 0 changed, 0 destroyed.</Content>\\n            </TerraformLogs>\\n        </Log>\\n    </Stack>\\n</PreviewStackResponse>","errorExample":""}]',
      'title' => '预览指定模板将要创建的资源栈信息',
      'summary' => '预览指定模板将要创建的资源栈信息，验证模板资源的准确性。',
      'description' => '本文将提供一个示例，在杭州地域创建并预览一个名为`MyStack`的资源栈，该资源栈的模板`TemplateBody`设置为`{"ROSTemplateFormatVersion":"2015-09-01"}`。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' 访问[公共错误码](~~131033~~)查看更多错误码。
| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 |  CircularDependency |Circular Dependency Found: {reason}. |模板包含循环引用。reason为具体原因。 |
| 400 | InvalidSchema | {reason}. |模板格式不正确。reason为具体原因。 |
| 400 | InvalidTemplateAttribute |The Referenced Attribute ({resource} {name}) is incorrect. |模板包含不正确的资源属性（输出）引用。resource为资源名，name为属性名。 |
| 400 | InvalidTemplatePropertyType |The specified value type of ({resource} {section}) is incorrect. |模板资源定义中的字段类型不正确。resource为资源名，section为字段名。 |
| 400 | InvalidTemplateReference |The specified reference "{name}" (in {referencer}) is incorrect. |模板包含不正确的引用。name为引用名，referencer为引用者。 |
| 400 | InvalidTemplateSection |The template section is invalid: {section}. |模板包含无效的字段。section为字段名。 |
| 400 | InvalidTemplateVersion |The template version is invalid: {reason}. |模板版本不正确。reason为具体原因。 |
| 400 | StackValidationFailed | {reason}. |资源栈校验失败。reason为具体原因。 |
| 400 | UnknownUserParameter |The Parameter ({name}) was not defined in template. |传递的参数在模板中未定义。name为参数名。 |
| 400 | UserParameterMissing |The Parameter {name} was not provided. |参数在模板中已定义，但未传递值。name为参数名。 |
| 409 | StackExists |The Stack ({name}) already exists. |同名资源栈已存在。name为资源栈名称。 |
| 404 | TemplateNotFound |The Template ({ ID }) could not be found. |模板不存在。ID为模板ID。 |
| 404 | TemplateNotFound |The Template { ID } with version { version } could not be found. |模板或指定版本不存在。ID为模板ID，version为模板版本。 |',
    ),
    'ListStackResources' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6',
              ),
              'Resources' => 
              array (
                'description' => '资源对象的列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '资源状态。取值：
- INIT_COMPLETE：资源待创建。

- CREATE_COMPLETE：资源创建完成。
- CREATE_FAILED：资源创建失败。
- CREATE_IN_PROGRESS：资源创建中。
- UPDATE_IN_PROGRESS：资源更新中。
- UPDATE_FAILED：资源更新失败。
- UPDATE_COMPLETE：资源更新完成。
- DELETE_IN_PROGRESS：资源删除中。
- DELETE_FAILED：资源删除失败。
- DELETE_COMPLETE：资源删除完成。
- CHECK_IN_PROGRESS：资源校验中。
- CHECK_FAILED：资源校验失败。
- CHECK_COMPLETE：资源校验完成。
- IMPORT_IN_PROGRESS：资源导入中。
- IMPORT_FAILED：资源导入失败。
- IMPORT_COMPLETE：资源导入完成。

',
                      'type' => 'string',
                      'example' => 'UPDATE_COMPLETE',
                    ),
                    'LogicalResourceId' => 
                    array (
                      'description' => '资源逻辑ID，即模板定义的名称。',
                      'type' => 'string',
                      'example' => 'dummy',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间，按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mm:ss。',
                      'type' => 'string',
                      'example' => '2019-08-01T06:01:29',
                    ),
                    'StackId' => 
                    array (
                      'description' => '资源栈ID。',
                      'type' => 'string',
                      'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
                    ),
                    'PhysicalResourceId' => 
                    array (
                      'description' => '资源的物理ID，即实际资源ID。',
                      'type' => 'string',
                      'example' => 'd04af923-e6b7-4272-aeaa-47ec9777****',
                    ),
                    'DriftDetectionTime' => 
                    array (
                      'description' => '资源栈最近一次成功的偏差检测中资源偏差检测的时间。',
                      'type' => 'string',
                      'example' => '2020-02-27T07:47:47',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'ALIYUN::ROS::Stack',
                    ),
                    'ResourceDriftStatus' => 
                    array (
                      'description' => '资源栈最近一次成功的偏差检测中的资源的偏差状态。取值：
- DELETED：资源与预期的模板配置不同，因为资源已被删除。
- MODIFIED：资源与预期的模板配置不同。
- NOT_CHECKED：ROS没有检测资源是否与预期的模板配置不同。
- IN_SYNC：资源的当前配置与其预期的模板配置相匹配。',
                      'type' => 'string',
                      'example' => 'IN_SYNC',
                    ),
                    'StatusReason' => 
                    array (
                      'description' => '资源状态的原因。',
                      'type' => 'string',
                      'example' => 'state changed',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间，按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mm:ss。',
                      'type' => 'string',
                      'example' => '2019-08-01T06:01:23',
                    ),
                    'StackName' => 
                    array (
                      'description' => '资源栈名称。  
长度不超过255个字符，必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。',
                      'type' => 'string',
                      'example' => 'test-describe-resource',
                    ),
                    'ModuleInfo' => 
                    array (
                      'description' => '资源来源模块的信息。资源来自于模块时，才返回该字段。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LogicalIdHierarchy' => 
                        array (
                          'description' => '包含资源的一个或多个模块的逻辑ID的串联列表。 模块从最外层开始列出，并以 `/ `分隔。

在以下示例中，资源是从嵌套在父模块moduleA中的模块moduleB创建的。

`moduleA/moduleB`',
                          'type' => 'string',
                          'example' => 'moduleA/moduleB',
                        ),
                        'TypeHierarchy' => 
                        array (
                          'description' => '包含资源的一个或多个模块类型的串联列表。 模块类型从最外层开始列出，并以 `/` 分隔。

在以下示例中，资源是从`MODULE::ROS::Child::Example`类型的模块创建的，该模块嵌套在`MODULE::ROS::Parent::Example`类型的父模块中。

`MODULE::ROS::Parent::Example/MODULE::ROS::Child::Example`',
                          'type' => 'string',
                          'example' => 'MODULE::ROS::Parent::Example/MODULE::ROS::Child::Example',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6\\",\\n  \\"Resources\\": [\\n    {\\n      \\"Status\\": \\"UPDATE_COMPLETE\\",\\n      \\"LogicalResourceId\\": \\"dummy\\",\\n      \\"UpdateTime\\": \\"2019-08-01T06:01:29\\",\\n      \\"StackId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf691****\\",\\n      \\"PhysicalResourceId\\": \\"d04af923-e6b7-4272-aeaa-47ec9777****\\",\\n      \\"DriftDetectionTime\\": \\"2020-02-27T07:47:47\\",\\n      \\"ResourceType\\": \\"ALIYUN::ROS::Stack\\",\\n      \\"ResourceDriftStatus\\": \\"IN_SYNC\\",\\n      \\"StatusReason\\": \\"state changed\\",\\n      \\"CreateTime\\": \\"2019-08-01T06:01:23\\",\\n      \\"StackName\\": \\"test-describe-resource\\",\\n      \\"ModuleInfo\\": {\\n        \\"LogicalIdHierarchy\\": \\"moduleA/moduleB\\",\\n        \\"TypeHierarchy\\": \\"MODULE::ROS::Parent::Example/MODULE::ROS::Child::Example\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListStackResourcesResponse>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6</RequestId>\\n    <Resources>\\n        <Status>UPDATE_COMPLETE</Status>\\n        <LogicalResourceId>dummy</LogicalResourceId>\\n        <UpdateTime>2019-08-01T06:01:29</UpdateTime>\\n        <StackId>4a6c9851-3b0f-4f5f-b4ca-a14bf691****</StackId>\\n        <PhysicalResourceId>d04af923-e6b7-4272-aeaa-47ec9777****</PhysicalResourceId>\\n        <DriftDetectionTime>2020-02-27T07:47:47</DriftDetectionTime>\\n        <ResourceType>ALIYUN::ROS::Stack</ResourceType>\\n        <ResourceDriftStatus>IN_SYNC</ResourceDriftStatus>\\n        <StatusReason>state changed</StatusReason>\\n        <CreateTime>2019-08-01T06:01:23</CreateTime>\\n        <StackName>test-describe-resource</StackName>\\n    </Resources>\\n</ListStackResourcesResponse>","errorExample":""}]',
      'title' => '查询资源栈的资源列表',
      'summary' => '查询指定资源栈的资源列表。',
      'description' => '本文将提供一个示例，为您查询杭州地域ID为`4a6c9851-3b0f-4f5f-b4ca-a14bf691****`的资源栈的资源列表。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| StackNotFound | The Stack ({name}) could not be found. | 404 |资源栈不存在，name为资源栈名称或ID。 |',
    ),
    'GetStackResource' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。   
长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。   
更多信息，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以通过调用[DescribeRegions](~~131035~~)接口查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'ShowResourceAttributes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询资源属性。取值：  

- true：查询资源属性。

- false：不查询资源属性。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'LogicalResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源逻辑ID，即模板中资源的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'WebServer',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceAttributes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '指定要查询的资源输出属性的列表。

> N最大值为20。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指定要查询的资源输出属性名称。

> N最大值为20。',
              'type' => 'string',
              'required' => false,
              'example' => 'InstanceId',
            ),
            'required' => false,
            'maxItems' => 20,
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
              'Status' => 
              array (
                'description' => '资源状态。取值：
- CREATE_COMPLETE
- CREATE_FAILED
- CREATE_IN_PROGRESS
- UPDATE_IN_PROGRESS
- UPDATE_FAILED
- UPDATE_COMPLETE
- DELETE_IN_PROGRESS
- DELETE_FAILED
- CHECK_IN_PROGRESS
- CHECK_FAILED
- CHECK_COMPLETE
- IMPORT_IN_PROGRESS
- IMPORT_FAILED
- IMPORT_COMPLETE',
                'type' => 'string',
                'example' => 'CREATE_COMPLETE',
              ),
              'Description' => 
              array (
                'description' => '资源描述。',
                'type' => 'string',
                'example' => 'no description',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6',
              ),
              'StatusReason' => 
              array (
                'description' => '资源状态原因。',
                'type' => 'string',
                'example' => 'state changed',
              ),
              'PhysicalResourceId' => 
              array (
                'description' => '资源物理ID，即实际资源ID。',
                'type' => 'string',
                'example' => 'd04af923-e6b7-4272-aeaa-47ec9777****',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间。
按照ISO8601标准表示，需使用UTC时间，格式：YYYY-MM-DDThh:mm:ss。',
                'type' => 'string',
                'example' => '2019-08-01T06:01:23',
              ),
              'Metadata' => 
              array (
                'description' => '元数据。',
                'type' => 'object',
                'example' => '{"key": "value"}',
              ),
              'ResourceType' => 
              array (
                'description' => '资源类型。',
                'type' => 'string',
                'example' => 'ALIYUN::ROS::WaitConditionHandle',
              ),
              'ResourceAttributes' => 
              array (
                'description' => '资源属性列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源属性列表。',
                  'type' => 'object',
                  'example' => '[{"ResourceAttributeKey": "CurlCli","ResourceAttributeValue": "curl -i -X POST -H \'Content-Type: application/json\' -H \'Accept: application/json\' -H \'x-acs-region-id: cn-beijing\' http://192.168.XX.XX/waitcondition?stackname=test-describe-resource\\\\&stackid=efdf5c10-96a5-4fd7-ab89-68e7baa2****\\\\&resource=WaitConditionHandle\\\\&expire=156468****\\\\&signature=991d910a901a89db6580d74233119960c004****"}]',
                ),
              ),
              'LogicalResourceId' => 
              array (
                'description' => '资源逻辑ID，即模板中资源的名称。',
                'type' => 'string',
                'example' => 'WebServer',
              ),
              'ResourceDriftStatus' => 
              array (
                'description' => '资源栈最近一次成功的偏差检测中的资源的偏差状态。取值：
- DELETED：资源与预期的模板配置不同，因为资源已被删除。
- MODIFIED：资源与预期的模板配置不同。
- NOT_CHECKED：ROS没有检测资源是否与预期的模板配置不同。
- IN_SYNC：资源的当前配置与其预期的模板配置相匹配。',
                'type' => 'string',
                'example' => 'IN_SYNC',
              ),
              'UpdateTime' => 
              array (
                'description' => '更新时间。
按照ISO8601标准表示，需使用UTC时间，格式：YYYY-MM-DDThh:mm:ss。',
                'type' => 'string',
                'example' => '2019-08-01T06:01:29',
              ),
              'DriftDetectionTime' => 
              array (
                'description' => '资源栈最近一次成功的偏差检测中资源检测的时间。',
                'type' => 'string',
                'example' => '2020-02-27T07:47:47',
              ),
              'StackName' => 
              array (
                'description' => '资源栈名称。   
长度不超过255个字符，必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。',
                'type' => 'string',
                'example' => 'test-describe-resource',
              ),
              'StackId' => 
              array (
                'description' => '资源栈ID。',
                'type' => 'string',
                'example' => 'efdf5c10-96a5-4fd7-ab89-68e7baa2****',
              ),
              'ModuleInfo' => 
              array (
                'description' => '资源来源模块的信息。资源来自于模块时，才返回该字段。',
                'type' => 'object',
                'properties' => 
                array (
                  'LogicalIdHierarchy' => 
                  array (
                    'description' => '包含资源的一个或多个模块的逻辑ID的串联列表。 模块从最外层开始列出，并以 `/`分隔。

在以下示例中，资源是从嵌套在父模块moduleA中的模块moduleB创建的。

`moduleA/moduleB`',
                    'type' => 'string',
                    'example' => 'moduleA/moduleB
',
                  ),
                  'TypeHierarchy' => 
                  array (
                    'description' => '包含资源的一个或多个模块类型的串联列表。 模块类型从最外层开始列出，并以 `/`分隔。

在以下示例中，资源是从`MODULE::ROS::Child::Example`类型的模块创建的，该模块嵌套在`MODULE::ROS::Parent::Example`类型的父模块中。

`MODULE::ROS::Parent::Example/MODULE::ROS::Child::Example`',
                    'type' => 'string',
                    'example' => 'MODULE::ROS::Parent::Example/MODULE::ROS::Child::Example',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"CREATE_COMPLETE\\",\\n  \\"Description\\": \\"no description\\",\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6\\",\\n  \\"StatusReason\\": \\"state changed\\",\\n  \\"PhysicalResourceId\\": \\"d04af923-e6b7-4272-aeaa-47ec9777****\\",\\n  \\"CreateTime\\": \\"2019-08-01T06:01:23\\",\\n  \\"Metadata\\": {\\n    \\"key\\": \\"value\\"\\n  },\\n  \\"ResourceType\\": \\"ALIYUN::ROS::WaitConditionHandle\\",\\n  \\"ResourceAttributes\\": [\\n    [\\n      {\\n        \\"ResourceAttributeKey\\": \\"CurlCli\\",\\n        \\"ResourceAttributeValue\\": \\"curl -i -X POST -H \'Content-Type: application/json\' -H \'Accept: application/json\' -H \'x-acs-region-id: cn-beijing\' http://192.168.XX.XX/waitcondition?stackname=test-describe-resource\\\\\\\\&stackid=efdf5c10-96a5-4fd7-ab89-68e7baa2****\\\\\\\\&resource=WaitConditionHandle\\\\\\\\&expire=156468****\\\\\\\\&signature=991d910a901a89db6580d74233119960c004****\\"\\n      }\\n    ]\\n  ],\\n  \\"LogicalResourceId\\": \\"WebServer\\",\\n  \\"ResourceDriftStatus\\": \\"IN_SYNC\\",\\n  \\"UpdateTime\\": \\"2019-08-01T06:01:29\\",\\n  \\"DriftDetectionTime\\": \\"2020-02-27T07:47:47\\",\\n  \\"StackName\\": \\"test-describe-resource\\",\\n  \\"StackId\\": \\"efdf5c10-96a5-4fd7-ab89-68e7baa2****\\",\\n  \\"ModuleInfo\\": {\\n    \\"LogicalIdHierarchy\\": \\"moduleA/moduleB\\\\n\\",\\n    \\"TypeHierarchy\\": \\"MODULE::ROS::Parent::Example/MODULE::ROS::Child::Example\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetStackResourceResponse>\\n\\t<CreateTime>2019-08-01T06:01:23</CreateTime>\\n\\t<Description></Description>\\n\\t<LogicalResourceId>WaitConditionHandle</LogicalResourceId>\\n\\t<Metadata />\\n\\t<PhysicalResourceId></PhysicalResourceId>\\n\\t<RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n\\t<ResourceAttributes>\\n\\t\\t<ResourceAttributeKey>CurlCli</ResourceAttributeKey>\\n\\t\\t<ResourceAttributeValue>curl -i -X POST -H \'Content-Type: application/json\' -H \'Accept: application/json\' -H \'x-acs-region-id: cn-beijing\' http://192.168.XX.XX/waitcondition?stackname=test-describe-resource\\\\&amp;stackid=efdf5c10-96a5-4fd7-ab89-68e7baa2****\\\\&amp;resource=WaitConditionHandle\\\\&amp;expire=156468****\\\\&amp;signature=991d910a901a89db6580d74233119960c004****</ResourceAttributeValue>\\n\\t</ResourceAttributes>\\n\\t<ResourceAttributes>\\n\\t\\t<ResourceAttributeKey>WindowsCurlCli</ResourceAttributeKey>\\n\\t\\t<ResourceAttributeValue>curl -i -X POST -H &quot;Content-Type: application/json&quot; -H &quot;Accept: application/json&quot; -H &quot;x-acs-region-id: cn-beijing&quot; &quot;http://192.168.XX.XX/waitcondition?stackname=test-describe-resource&amp;stackid=efdf5c10-96a5-4fd7-ab89-68e7baa2****&amp;resource=WaitConditionHandle&amp;expire=156468****&amp;signature=991d910a901a89db6580d74233119960c004****&quot;</ResourceAttributeValue>\\n\\t</ResourceAttributes>\\n\\t<ResourceAttributes>\\n\\t\\t<ResourceAttributeKey>PowerShellCurlCli</ResourceAttributeKey>\\n\\t\\t<ResourceAttributeValue>curl -Uri &quot;http://192.168.XX.XX/waitcondition?stackname=test-describe-resource&amp;stackid=efdf5c10-96a5-4fd7-ab89-68e7baa2****&amp;resource=WaitConditionHandle&amp;expire=156468****&amp;signature=991d910a901a89db6580d74233119960c004****&quot; -Method Post -Headers @{&quot;Content-Type&quot;=&quot;application/json&quot;; &quot;Accept&quot;=&quot;application/json&quot;; &quot;x-acs-region-id&quot;=&quot;cn-beijing&quot;}</ResourceAttributeValue>\\n\\t</ResourceAttributes>\\n\\t<ResourceType>ALIYUN::ROS::WaitConditionHandle</ResourceType>\\n\\t<StackId>efdf5c10-96a5-4fd7-ab89-68e7baa2****</StackId>\\n\\t<StackName>test-describe-resource</StackName>\\n\\t<Status>UPDATE_COMPLETE</Status>\\n\\t<StatusReason>state changed</StatusReason>\\n\\t<UpdateTime>2019-08-01T06:01:29</UpdateTime>\\n\\t<DriftDetectionTime>2020-02-27T07:47:47</DriftDetectionTime>\\n\\t<ResourceDriftStatus>IN_SYNC</ResourceDriftStatus>\\n</GetStackResourceResponse>","errorExample":""}]',
      'title' => '查询某个资源栈的资源',
      'summary' => '查询某个资源栈的资源。',
      'description' => '本文将提供一个示例，为您查询杭州地域资源栈ID为`4a6c9851-3b0f-4f5f-b4ca-a14bf691****`的资源栈中名为`WebServer`的资源详情。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 404 | ResourceNotFound | The Resource ({name}) could not be found in Stack {stack}. |资源栈中不存某资源。name为资源名，stack为资源栈名称或ID。 |
| 404 | StackNotFound | The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。 |',
    ),
    'MoveResourceGroup' => 
    array (
      'summary' => '调用MoveResourceGroup接口修改资源所属的资源组。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型，取值：  

- stack：资源栈。  

- stackgroup：资源栈组。  

- template：模板。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'stack',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源ID。  ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4e8611cb-251e-42b7-b9cb-3496362c****',
          ),
        ),
        2 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新资源组ID。
关于资源组的更多信息，请参见[什么是资源组](~~94475~~)。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rg-acfm3peow3k****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源所属的地域ID。  
您可以通过调用[DescribeRegions](~~131035~~)接口获取地域ID。',
            'type' => 'string',
            'required' => true,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F84A05B3-7275-4C8B-8AEE-9088C639C271',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F84A05B3-7275-4C8B-8AEE-9088C639C271\\"\\n}","errorExample":""},{"type":"xml","example":"<MoveResourceGroupResponse>\\r\\n      <RequestId>F84A05B3-7275-4C8B-8AEE-9088C639C271</RequestId>\\r\\n</MoveResourceGroupResponse>","errorExample":""}]',
      'title' => '修改资源所属的资源组',
      'description' => '本文将提供一个示例，在杭州地域`cn-hangzhou`将资源栈`4e8611cb-251e-42b7-b9cb-3496362c****`添加到资源组`rg-acfm3peow3k****`中。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateTemplateScratch' => 
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
        'abilityTreeCode' => '69533',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURErosUSKZAD',
          1 => 'FEATURErosHDIJ7A',
          2 => 'FEATURErosSKHQLM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景所属的地域ID。

您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateScratchType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景类型，取值：

- ArchitectureReplication：资源复制。

- ArchitectureDetection：资源探查。

- ResourceImport：资源纳管。

- ResourceMigration：资源迁移。

> 当TemplateScratchType参数取值不同时，请求参数补充说明中可选的参数属性也不同。 更多信息，请参见下方的**请求参数补充说明**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ArchitectureReplication',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景说明。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '复制VPC资源。',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceResources',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '源资源。

如果TemplateScratchType为ArchitectureDetection，设置本参数意味着探查出以指定的源资源为起点的所有资源的架构数据。例如，指定CLB实例ID，会探查出其所关联的ECS实例、vSwitch、VPC等资源架构数据。

最多支持设置200个源资源。如果TemplateScratchType为ArchitectureDetection，最多设置20个源资源。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '源资源。',
              'type' => 'object',
              'properties' => 
              array (
                'ResourceId' => 
                array (
                  'description' => '资源ID。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'vpc-bp1m6fww66xbntjyc****',
                ),
                'ResourceType' => 
                array (
                  'description' => '资源类型。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ALIYUN::ECS::VPC',
                ),
                'RegionId' => 
                array (
                  'description' => '资源所属的地域ID。

您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。

> - 仅在TemplateScratchType为ArchitectureDetection时生效。
> - 全局资源的地域为`global`。例如，ALIYUN::CDN::Domain是全局资源，资源所属的地域ID为`global`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'cn-beijing',
                ),
                'RelatedResourceTypeFilter' => 
                array (
                  'description' => '相关资源类型过滤列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '过滤资源类型。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'ALIYUN::ECS::VPC',
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'docRequired' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'SourceTag',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '源标签。',
            'type' => 'object',
            'properties' => 
            array (
              'ResourceTags' => 
              array (
                'description' => '源标签，其中键为标签键，值为标签值。
如果只希望指定标签键，则值需设置为空字符串，例如：`{"TagKey": ""}`。

最多支持设置10个源标签。如果TemplateScratchType为ArchitectureDetection，最多设置5个源标签。',
                'type' => 'object',
                'required' => true,
                'example' => '{"a": "b"}',
              ),
              'ResourceTypeFilter' => 
              array (
                'description' => '资源类型筛选器。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源类型筛选器。若指定了资源类型列表，则表示扫描指定资源类型且包含指定标签的资源；反之，则表示扫描所有包含指定标签的资源。

最多支持20个资源类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ALIYUN::ECS::VPC',
                ),
                'required' => false,
              ),
            ),
            'required' => false,
            'docRequired' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'SourceResourceGroup',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '源资源组。',
            'type' => 'object',
            'properties' => 
            array (
              'ResourceGroupId' => 
              array (
                'description' => '源资源组ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'rg-acfmzawhxxc****',
              ),
              'ResourceTypeFilter' => 
              array (
                'description' => '资源类型筛选器。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源类型筛选器。若指定了资源类型列表，则表示扫描指定资源类型且在指定资源组的资源；反之，则表示扫描所有在指定资源组的资源。

最多支持20个资源类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ALIYUN::ECS::VPC',
                ),
                'required' => false,
              ),
            ),
            'required' => false,
            'docRequired' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'PreferenceParameters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '资源场景配置参数。
',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '参数名称。

关于取值的更多信息，请参见下列的**请求参数补充说明**。

> - PreferenceParameters为可选参数。如果需要指定PreferenceParameters，则ParameterKey和ParameterValue必须同时指定。
> - 当TemplateScratchType取值为ResourceImport时，必须指定ParameterKey为DeletionPolicy。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'DeletionPolicy',
                ),
                'ParameterValue' => 
                array (
                  'description' => '参数值。取值与ParameterKey对应。

关于取值的更多信息，请参见下列的**请求参数补充说明**。

> PreferenceParameters为可选参数。如果需要指定PreferenceParameters，则ParameterKey和ParameterValue必须同时指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Retain',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'docRequired' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'LogicalIdStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '逻辑ID生成策略，取值：

- LongTypePrefixAndIndexSuffix：长类型前缀+索引后缀。

- LongTypePrefixAndHashSuffix：长类型前缀+哈希后缀。

- ShortTypePrefixAndHashSuffix：短类型前缀+哈希后缀。

> 默认值为LongTypePrefixAndIndexSuffix。如果TemplateScratchType为ArchitectureDetection，默认值为LongTypePrefixAndHashSuffix。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'LongTypePrefixAndIndexSuffix',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。 

更多信息，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        9 => 
        array (
          'name' => 'ExecutionMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行模式，取值：

- Async（默认值）：异步执行。

- Sync：同步执行。

> 如果资源范围较大，同步执行的时间会比较长，推荐同时指定ClientToken，以避免超时问题。',
            'type' => 'string',
            'required' => false,
            'example' => 'Sync',
          ),
        ),
        10 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源场景的标签。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源场景的标签键。

> Tags为可选参数。如果需要指定Tags，则Tags.N.Key必须指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'usage',
                ),
                'Value' => 
                array (
                  'description' => '资源场景的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        11 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。如果不指定该参数，资源场景将加入默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxazb4ph6aiy****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '84980977-22F0-5421-B30D-B201311D5DCF',
              ),
              'TemplateScratchId' => 
              array (
                'description' => '资源场景ID。',
                'type' => 'string',
                'example' => 'ts-7f7a704cf71c49a6****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"84980977-22F0-5421-B30D-B201311D5DCF\\",\\n  \\"TemplateScratchId\\": \\"ts-7f7a704cf71c49a6****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateTemplateScratchResponse>\\n    <RequestId>84980977-22F0-5421-B30D-B201311D5DCF</RequestId>\\n    <TemplateScratchId>ts-7f7a704cf71c49a6****</TemplateScratchId>\\n</CreateTemplateScratchResponse>","errorExample":""}]',
      'title' => '创建资源场景',
      'summary' => '创建资源场景。',
      'description' => '### 使用限制
仅部分资源类型支持资源场景功能。更多信息，请参见[支持资源场景的资源类型](~~353175~~l)。

### 使用说明
通过资源场景功能，您可以在可视化界面上选择资源范围，并对一组资源进行复制、纳管等操作，从而简化资源管理。关于资源场景的更多信息，请参见[概览](~~352074~~)。
#### 资源复制场景
如果您需要复制一组资源及其依赖关系，可以通过创建资源复制场景复制指定范围内的所有资源，生成一套架构完全相同的资源。更多信息，请参见[资源复制场景](~~353133~~)。
#### 资源探查场景
如果您当前创建的资源之间关系错综复杂，您可以通过创建资源探查场景预览整体资源架构，或者以特定资源为起点的资源架构，从而方便管理资源。更多信息，请参见[资源探查场景](~~2591901~~)。
#### 资源纳管场景
如果您需要将一组现有资源导入到一个新的资源栈中进行统一管理，可以创建资源纳管类型的资源场景。更多信息，请参见[资源纳管场景](~~353163~~)。
#### 资源迁移场景
如果您需要迁移一组资源及其依赖关系，可以创建资源迁移类型的资源场景，在资源场景中迁移资源、生成资源栈，通过资源栈查看迁移进度，待迁移完成后，您还可以删除源资源。更多信息，请参见[资源迁移场景](~~379902~~)。



本文将提供一个示例，为您在杭州地域创建一个资源复制类型的资源场景，用于复制专有网络`vpc-bp1m6fww66xbntjyc****`。',
      'requestParamsDescription' => '### 请求参数补充说明
关于公共请求参数的详情，请参见[公共参数](~~131957~~)。

当`TemplateScratchType`参数的取值不同，下列对应支持的ParameterKey、ParameterValue也不同。
#### 资源复制场景
当TemplateScratchType取值为ArchitectureReplication时，资源复制类型的资源场景支持的ParameterKey、ParameterValue如下：
|**ParameterKey** |**ParameterValue** |
| ------ | ------ |
|DeletionPolicy |资源删除策略，取值：<br>Retain：保留。将资源复制到资源栈后，在删除此资源栈时，保留原有资源。<br>Delete：删除。将资源复制到资源栈后，在删除此资源栈时，默认删除原有资源；若在删除确认框中选择保留部分资源，则删除未选择保留的资源。 |
|RegionId |希望复制到的目标地域ID。若不指定，默认为当前地域。<br>示例：cn-shanghai。 |
|ZoneId |希望复制到的目标可用区ID。若不指定，当同地域复制时，复制出的资源和源资源可用区保持一致；当跨地域复制时，会筛选出所有资源均支持的可用区。<br>示例：cn-shanghai-b。 |
|VpcId |希望复制到的目标专有网络ID。若不指定，当同地域复制时，复制出的资源和源资源专有网络保持一致；当跨地域复制时，会在目标地域自动创建专有网络。<br>示例：vpc-bp1hye0s8b69xokfu****。 |
|VSwitchId |希望复制到的目标交换机ID。若不指定，当同地域复制时，复制出的资源和源资源交换机保持一致；当跨地域复制时，会在目标地域自动创建交换机。<br>示例：vsw-bp11ufkwqwggtm1cj****。 |
|NamePrefix |资源名称前缀，默认无前缀。长度2-32个字符。 |
|DisableNameUnique |是否禁用名称自动唯一。默认不禁用，会针对名称唯一性的资源（如Bucket）自动添加8位随机码确保复制出的资源的名称唯一性。 |
|InstanceDataReplication |是否复制ECS实例数据，默认false。取值：<ul><li>true：复制ECS实例数据。当同地域复制时，会为源实例构建自定义镜像，以此镜像创建新实例；当跨地域复制时，会为源实例构建自定义镜像，并拷贝至目标地域，以新镜像创建新实例。</li><li>false：不复制ECS实例数据。</li></ul> |
|InstancePeriod |希望复制的ECS预付费实例的付费时长，默认同源实例。 |
|InstancePeriodUnit |希望复制的ECS预付费实例的付费周期，默认同源实例。取值：<ul><li>Week：周。</li><li>Month：月。</li><li>Year：年。</li></ul> |
|InstanceAmount |希望复制的ECS实例数量，仅在源资源为单个ECS实例时生效。 |
|RamAttachedPolicyReplication |是否复制关联的RAM策略，默认false。取值：<ul><li>true：true：复制RAM用户、角色、组所关联的策略。</li><li>false：不复制关联的RAM策略。</li></ul> |
|SlbListenerProtocols |传统型负载均衡实例监听协议，用来限定复制的监听协议，可设置一个或多个，使用英文逗号分隔，默认为不限定。取值：<ul><li>tcp</li><li>udp</li><li>http</li><li>https</li></ul>示例：tcp,udp。 |

> 当您指定ParameterKey为InstanceDataReplication、ParameterValue为true时，为了确保数据一致性，请您停止源实例后再复制资源。

#### 资源探查场景
当ArchitectureReplication参数取值为ArchitectureDetection时，资源探查类型的资源场景支持的ParameterKey、ParameterValue如下：

|**ParameterKey** |**ParameterValue** |
| ------ | ------ |
|RegionIds |一个或多个地域，使用","分隔。支持全局地域`global`。如果不指定，则为当前资源场景的地域。 |

#### 资源纳管场景
当ArchitectureDetection参数取值为ResourceImport时，资源纳管类型的资源场景支持的ParameterKey、ParameterValue如下：
> 资源纳管类型的资源场景，必须指定ParameterKey为DeletionPolicy。

|**ParameterKey** |**ParameterValue** |
| ------ | ------ |
|DeletionPolicy |资源删除策略，取值：<br>Retain：保留。将资源纳管至资源栈后，在删除此资源栈时，保留原有资源。<br>Delete：删除。将资源纳管至资源栈后，在删除此资源栈时，默认删除原有资源；若在删除确认框中选择保留部分资源，则删除未选择保留的资源。 |
|SlbListenerProtocols |传统型负载均衡实例监听协议，用来限定纳管的监听协议，可设置一个或多个，使用英文逗号分隔，默认为不限定。取值：<ul><li>tcp</li><li>udp</li><li>http</li><li>https</li></ul>示例：tcp,udp。 |

#### 资源迁移场景
当ArchitectureDetection参数的取值为ResourceMigration时，资源迁移类型的资源场景支持的ParameterKey、ParameterValue如下：
|**ParameterKey** |**ParameterValue** |
| ------ | ------ |
|RegionId |希望复制到的目标地域ID。若不指定，默认为当前地域。<br>示例：cn-shanghai。 |
|ZoneId |希望复制到的目标可用区ID。若不指定，当同地域复制时，复制出的资源和源资源可用区保持一致；当跨地域复制时，会筛选出所有资源均支持的可用区。<br>示例：cn-shanghai-b。 |
|VpcId |希望复制到的目标专有网络ID。若不指定，当同地域复制时，复制出的资源和源资源专有网络保持一致；当跨地域复制时，会在目标地域自动创建专有网络。<br>示例：vpc-bp1hye0s8b69xokfu****。 |
|VSwitchId |希望复制到的目标交换机ID。若不指定，当同地域复制时，复制出的资源和源资源交换机保持一致；当跨地域复制时，会在目标地域自动创建交换机。<br>示例：vsw-bp11ufkwqwggtm1cj****。 |
|InstanceDataReplication |是否复制ECS实例数据，取值：<br>true：复制ECS实例数据。当同地域复制时，会为源实例构建自定义镜像，以此镜像创建新实例；当跨地域复制时，会为源实例构建自定义镜像，并拷贝至目标地域，以新镜像创建新实例。<br>false：不复制ECS实例数据。 |',
    ),
    'DeleteTemplateScratch' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景所属的地域ID。

您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateScratchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景ID。

您可以通过调用[ListTemplateScratches - 查询资源场景列表](~~610832~~)接口查看资源场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ts-4f83704400994409****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1B9C6333-5904-5A1E-9845-CB17A369AFDC',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1B9C6333-5904-5A1E-9845-CB17A369AFDC\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteTemplateScratchResponse>\\n    <RequestId>1B9C6333-5904-5A1E-9845-CB17A369AFDC</RequestId>\\n</DeleteTemplateScratchResponse>","errorExample":""}]',
      'title' => '删除资源场景',
      'summary' => '删除资源场景。',
      'description' => '本文将提供一个示例，删除杭州地域的资源场景`ts-4f83704400994409****`。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
    ),
    'UpdateTemplateScratch' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景所属的地域ID。

您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateScratchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景ID。

当您输入的资源场景ID为不同的场景类型时，可选的请求参数属性也不同。更多信息，请参见下列的请求参数补充说明。

> 您可以调用[ListTemplateScratches - 查询资源场景列表](~~610832~~)查看资源场景ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ts-7f7a704cf71c49a6****',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景说明。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '复制VPC资源。',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceResources',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '源资源。



> SourceResources、SourceTag和SourceResourceGroup参数仅需设置其中一个。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '源资源。

如果TemplateScratchType为ArchitectureDetection，设置本参数意味着探查出以指定的源资源为起点的所有资源的架构数据。例如，指定CLB实例ID，会探查出其所关联的ECS实例、vSwitch、VPC等资源架构数据。

最多支持设置200个源资源。如果TemplateScratchType为ArchitectureDetection，最多设置20个源资源。',
              'type' => 'object',
              'properties' => 
              array (
                'ResourceId' => 
                array (
                  'description' => '资源ID。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'vpc-bp1m6fww66xbntjyc****',
                ),
                'ResourceType' => 
                array (
                  'description' => '资源类型。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ALIYUN::ECS::VPC',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'docRequired' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'SourceTag',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '源标签。
> SourceResources、SourceTag和SourceResourceGroup参数仅需设置其中一个。',
            'type' => 'object',
            'properties' => 
            array (
              'ResourceTags' => 
              array (
                'description' => '源标签，其中键为标签键，值为标签值。 

如果只希望指定标签键，则值需设置为空字符串，例如：{"TagKey": ""}。

最多支持设置10个源标签。如果TemplateScratchType为ArchitectureDetection，最多设置5个源标签。',
                'type' => 'object',
                'required' => true,
                'example' => '{"a": "b"}',
              ),
              'ResourceTypeFilter' => 
              array (
                'description' => '资源类型筛选器。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源类型筛选器。若指定了资源类型列表，则表示扫描指定资源类型且包含指定标签的资源；反之，则表示扫描所有包含指定标签的资源。

最多支持20个资源类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ALIYUN::ECS::VPC',
                ),
                'required' => false,
              ),
            ),
            'required' => false,
            'docRequired' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'SourceResourceGroup',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '源资源组。
> SourceResources、SourceTag和SourceResourceGroup参数仅需设置其中一个。',
            'type' => 'object',
            'properties' => 
            array (
              'ResourceGroupId' => 
              array (
                'description' => '源资源组ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'rg-acfmzawhxxc****',
              ),
              'ResourceTypeFilter' => 
              array (
                'description' => '资源类型筛选器。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源类型筛选器。若指定了资源类型列表，则表示扫描指定资源类型且在指定资源组中的资源；反之，则表示扫描所有在指定资源组中的资源。

最多支持20个资源类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ALIYUN::ECS::VPC',
                ),
                'required' => false,
              ),
            ),
            'required' => false,
            'docRequired' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'PreferenceParameters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '资源场景配置参数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源场景配置参数。',
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '参数名称。

关于取值的更多信息，请参见**请求参数补充说明**。

> - PreferenceParameters为可选参数。如果需要指定PreferenceParameters，则ParameterKey和ParameterValue必须同时指定。
> - 当TemplateScratchType取值为ResourceImport时，必须指定ParameterKey为DeletionPolicy。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'DeletionPolicy',
                ),
                'ParameterValue' => 
                array (
                  'description' => '参数值。取值与ParameterKey对应。

关于取值的更多信息，请参见**请求参数补充说明**。

> PreferenceParameters为可选参数。如果需要指定PreferenceParameters，则ParameterKey和ParameterValue必须同时指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Retain',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'docRequired' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'LogicalIdStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '逻辑ID生成策略，取值：

- LongTypePrefixAndIndexSuffix：长类型前缀+索引后缀。

- LongTypePrefixAndHashSuffix：长类型前缀+哈希后缀。

- ShortTypePrefixAndHashSuffix：短类型前缀+哈希后缀。

> 默认值为LongTypePrefixAndIndexSuffix。如果TemplateScratchType为ArchitectureDetection，默认值为LongTypePrefixAndHashSuffix。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'LongTypePrefixAndIndexSuffix',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。 

更多信息，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        9 => 
        array (
          'name' => 'ExecutionMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行模式，取值：

- Async（默认值）：异步执行。

- Sync：同步执行。

> 如果资源范围较大，同步执行的时间会比较长，推荐同时指定ClientToken，以避免超时问题。',
            'type' => 'string',
            'required' => false,
            'example' => 'Sync',
          ),
        ),
        10 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。 ',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxazb4ph6aiy****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '221DA822-B8CF-50DF-A9D2-BA197BF97BD5',
              ),
              'TemplateScratchId' => 
              array (
                'description' => '资源场景ID。',
                'type' => 'string',
                'example' => 'ts-7f7a704cf71c49a6****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"221DA822-B8CF-50DF-A9D2-BA197BF97BD5\\",\\n  \\"TemplateScratchId\\": \\"ts-7f7a704cf71c49a6****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateTemplateScratchResponse>\\n    <RequestId>221DA822-B8CF-50DF-A9D2-BA197BF97BD5</RequestId>\\n    <TemplateScratchId>ts-7f7a704cf71c49a6****</TemplateScratchId>\\n</UpdateTemplateScratchResponse>","errorExample":""}]',
      'title' => '更新资源场景',
      'summary' => '更新资源场景。',
      'description' => '### 资源复制场景
您可以对资源场景内容进行修改，且修改后的内容不会对之前复制生成的资源栈产生影响。
您还可以调用[GenerateTemplateByScratch - 为资源场景生成模板](~~610829~~)接口为资源场景生成模板。
### 资源迁移场景
- 当您仅迁移资源并未删除源资源时，如果您对资源场景进行更新，您可以通过删除源资源操作纳管更新后的资源场景内容。您还可以调用[GenerateTemplateByScratch - 为资源场景生成模板](~~610829~~)接口为资源场景生成新的模板。
  > 请确保待删除的源资源不存在除资源场景外的资源关系，否则删除不成功。
- 当您在迁移资源后并选择删除源资源时，如果您对资源场景进行更新，您仅可以调用[GenerateTemplateByScratch为资源场景生成模板](~~610829~~)接口为资源场景生成新的模板。
### 资源纳管场景
当您在纳管资源后更新资源场景内容，您仅可以调用[GenerateTemplateByScratch - 为资源场景生成模板](~~610829~~)接口为资源场景生成新的模板。
### 资源探查场景
当您更新资源探查场景内容后，ROS会从资源中心获取最新的数据并渲染出架构图。




本文将提供一个示例，将杭州地域的资源场景`ts-7f7a704cf71c49a6****`中的VPC资源ID更新为`vpc-bp1m6fww66xbntjyc****`。',
      'requestParamsDescription' => '### 请求参数补充说明

关于公共请求参数的详情，请参见[公共参数](~~131957~~)。

请求参数中，不同类型的资源场景支持的ParameterKey、ParameterValue不同。
#### 资源复制场景
当TemplateScratchId参数取值为资源复制场景ID，支持的ParameterKey、ParameterValue如下：

|ParameterKey |ParameterValue |
| ------ | ------ |
|DeletionPolicy |资源删除策略，取值：<br>Retain：保留。将资源复制到资源栈后，在删除此资源栈时，保留原有资源。<br>Delete：删除。将资源复制到资源栈后，在删除此资源栈时，默认删除原有资源；若在删除确认框中选择保留部分资源，则删除未选择保留的资源。 |
|RegionId |希望复制到的目标地域。若不指定，默认为当前地域。<br>示例：cn-shanghai。 |
|ZoneId |希望复制到的目标可用区。若不指定，当同地域复制时，复制出的资源和源资源可用区保持一致；当跨地域复制时，会筛选出所有资源均支持的可用区。<br>示例：cn-shanghai-b。 |
|VpcId |希望复制到的目标专有网络。若不指定，当同地域复制时，复制出的资源和源资源专有网络保持一致；当跨地域复制时，会在目标地域自动创建专有网络。<br>示例：vpc-bp1hye0s8b69xokfu****。 |
|VSwitchId |希望复制到的目标交换机。若不指定，当同地域复制时，复制出的资源和源资源交换机保持一致；当跨地域复制时，会在目标地域自动创建交换机。<br>示例：vsw-bp11ufkwqwggtm1cj****。 |
|InstanceDataReplication |是否复制ECS实例数据，取值：<br>true：复制ECS实例数据。当同地域复制时，会为源实例构建自定义镜像，以此镜像创建新实例；当跨地域复制时，会为源实例构建自定义镜像，并拷贝至目标地域，以新镜像创建新实例。<br>false：不复制ECS实例数据。 |

> 当您指定ParameterKey为InstanceDataReplication、ParameterValue为true时，为了确保数据一致性，请您停止源实例后再复制资源。

#### 资源纳管场景
当TemplateScratchId参数取值为资源纳管场景ID，支持的ParameterKey、ParameterValue如下：

  > 资源纳管类型的资源场景，必须指定ParameterKey为DeletionPolicy。

|ParameterKey |ParameterValue |
| ------ | ------ |
|DeletionPolicy |资源删除策略，取值：<br>Retain：保留。将资源纳管至资源栈后，在删除此资源栈时，保留原有资源。<br>Delete：删除。将资源纳管至资源栈后，在删除此资源栈时，默认删除原有资源；若在删除确认框中选择保留部分资源，则删除未选择保留的资源。 |

#### 资源探查场景
当TemplateScratchId参数取值为资源探查场景ID，支持的ParameterKey、ParameterValue如下：

|ParameterKey |ParameterValue |
| ------ | ------ |
|RegionIds |一个或多个地域，使用","分隔。如果不指定，则为当前资源场景的地域。不允许同时指定本参数和SourceResources。 |',
    ),
    'ListTemplateScratches' => 
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
            'description' => '资源场景所属的地域ID。

您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateScratchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'ts-7f7a704cf71c49a6****',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateScratchType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景类型，取值：

- ArchitectureReplication：资源复制。

- ArchitectureDetection：资源探查。

- ResourceImport：资源纳管。

- ResourceMigration：资源迁移。',
            'type' => 'string',
            'required' => false,
            'example' => 'ArchitectureReplication',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景状态，取值：

- GENERATE\\_IN_PROGRESS：生成中。

- GENERATE_COMPLETE：生成完成。

- GENERATE_FAILED：生成失败。',
            'type' => 'string',
            'required' => false,
            'example' => '["GENERATE_COMPLETE"]',
          ),
        ),
        4 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源场景的标签。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源场景的标签键。

> Tags为可选参数。如果需要指定Tags，则Tags.N.Key必须指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'usage',
                ),
                'Value' => 
                array (
                  'description' => '资源场景的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。 

最大值：50。

默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景的页码。 

起始值：1。

默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxazb4ph6aiy****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D1C09606-C58B-558F-9B4E-5BF263D17D09',
              ),
              'TotalCount' => 
              array (
                'description' => '资源场景总个数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'PageNumber' => 
              array (
                'description' => '资源场景的页码。 ',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。 ',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TemplateScratches' => 
              array (
                'description' => '资源场景列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TemplateScratchId' => 
                    array (
                      'description' => '资源场景ID。',
                      'type' => 'string',
                      'example' => 'ts-48ad85d66cca4620****',
                    ),
                    'TemplateScratchType' => 
                    array (
                      'description' => '资源场景类型，取值：

- ResourceImport：资源纳管。

- ArchitectureReplication：资源复制。',
                      'type' => 'string',
                      'example' => 'ResourceImport',
                    ),
                    'Status' => 
                    array (
                      'description' => '资源场景状态。',
                      'type' => 'string',
                      'example' => 'GENERATE_COMPLETE',
                    ),
                    'StatusReason' => 
                    array (
                      'description' => '资源场景生成失败的原因。

> 仅当Status为GENERATE_FAILED时返回该参数。',
                      'type' => 'string',
                      'example' => 'Resource ALIYUN::ECS::VPC vpc-m5eauuq80anx59v28**** could not be found for template scratch.',
                    ),
                    'FailedCode' => 
                    array (
                      'description' => '资源场景生成失败的状态码。

> 仅当Status为GENERATE_FAILED时返回该参数。',
                      'type' => 'string',
                      'example' => 'InvalidZoneId',
                    ),
                    'PreferenceParameters' => 
                    array (
                      'description' => '资源场景配置参数。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ParameterKey' => 
                          array (
                            'description' => '参数名称。',
                            'type' => 'string',
                            'example' => 'DeletionPolicy',
                          ),
                          'ParameterValue' => 
                          array (
                            'description' => '参数值。',
                            'type' => 'string',
                            'example' => 'Retain',
                          ),
                        ),
                      ),
                    ),
                    'Description' => 
                    array (
                      'description' => '资源场景说明。',
                      'type' => 'string',
                      'example' => '纳管VPC资源。',
                    ),
                    'SourceResources' => 
                    array (
                      'description' => '源资源。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ResourceId' => 
                          array (
                            'description' => '资源ID。',
                            'type' => 'string',
                            'example' => 'vpc-m5eauuq80anx59v28****',
                          ),
                          'ResourceType' => 
                          array (
                            'description' => '资源类型。',
                            'type' => 'string',
                            'example' => 'ALIYUN::ECS::VPC',
                          ),
                        ),
                      ),
                    ),
                    'SourceTag' => 
                    array (
                      'description' => '源标签。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceTags' => 
                        array (
                          'description' => '源标签。',
                          'type' => 'object',
                          'example' => '{"a": "b"}',
                        ),
                        'ResourceTypeFilter' => 
                        array (
                          'description' => '资源类型筛选器。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '资源类型筛选器。',
                            'type' => 'string',
                            'example' => 'ALIYUN::ECS::VPC',
                          ),
                        ),
                      ),
                    ),
                    'SourceResourceGroup' => 
                    array (
                      'description' => '源资源组。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceGroupId' => 
                        array (
                          'description' => '源资源组ID。',
                          'type' => 'string',
                          'example' => 'rg-acfmzawhxxc****',
                        ),
                        'ResourceTypeFilter' => 
                        array (
                          'description' => '资源类型筛选器。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '资源类型筛选器。',
                            'type' => 'string',
                            'example' => 'ALIYUN::ECS::VPC',
                          ),
                        ),
                      ),
                    ),
                    'LogicalIdStrategy' => 
                    array (
                      'description' => '逻辑ID生成策略，取值：

- LongTypePrefixAndIndexSuffix（默认值）：长类型前缀+索引后缀。

- LongTypePrefixAndHashSuffix：长类型前缀+哈希后缀。

- ShortTypePrefixAndHashSuffix：短类型前缀+哈希后缀。
',
                      'type' => 'string',
                      'example' => 'LongTypePrefixAndIndexSuffix',
                    ),
                    'Tags' => 
                    array (
                      'description' => '资源场景的标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '资源场景的标签键。',
                            'type' => 'string',
                            'example' => 'usage1',
                          ),
                          'Value' => 
                          array (
                            'description' => '资源场景的标签值。',
                            'type' => 'string',
                            'example' => 'test1',
                          ),
                        ),
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '资源场景创建时间。

按照ISO8601标准表示，需使用UTC时间，格式：YYYY-MM-DDThh:mm:ss。',
                      'type' => 'string',
                      'example' => '2021-12-07T08:06:44',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '资源场景更新时间。

按照ISO8601标准表示，需使用UTC时间，格式：YYYY-MM-DDThh:mm:ss。',
                      'type' => 'string',
                      'example' => '2021-12-07T08:06:44',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。 ',
                      'type' => 'string',
                      'example' => 'rg-acfm4nxcvht4pmi',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D1C09606-C58B-558F-9B4E-5BF263D17D09\\",\\n  \\"TotalCount\\": 2,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TemplateScratches\\": [\\n    {\\n      \\"TemplateScratchId\\": \\"ts-48ad85d66cca4620****\\",\\n      \\"TemplateScratchType\\": \\"ResourceImport\\",\\n      \\"Status\\": \\"GENERATE_COMPLETE\\",\\n      \\"StatusReason\\": \\"Resource ALIYUN::ECS::VPC vpc-m5eauuq80anx59v28**** could not be found for template scratch.\\",\\n      \\"FailedCode\\": \\"InvalidZoneId\\",\\n      \\"PreferenceParameters\\": [\\n        {\\n          \\"ParameterKey\\": \\"DeletionPolicy\\",\\n          \\"ParameterValue\\": \\"Retain\\"\\n        }\\n      ],\\n      \\"Description\\": \\"纳管VPC资源。\\",\\n      \\"SourceResources\\": [\\n        {\\n          \\"ResourceId\\": \\"vpc-m5eauuq80anx59v28****\\",\\n          \\"ResourceType\\": \\"ALIYUN::ECS::VPC\\"\\n        }\\n      ],\\n      \\"SourceTag\\": {\\n        \\"ResourceTags\\": {\\n          \\"a\\": \\"b\\"\\n        },\\n        \\"ResourceTypeFilter\\": [\\n          \\"ALIYUN::ECS::VPC\\"\\n        ]\\n      },\\n      \\"SourceResourceGroup\\": {\\n        \\"ResourceGroupId\\": \\"rg-acfmzawhxxc****\\",\\n        \\"ResourceTypeFilter\\": [\\n          \\"ALIYUN::ECS::VPC\\"\\n        ]\\n      },\\n      \\"LogicalIdStrategy\\": \\"LongTypePrefixAndIndexSuffix\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"usage1\\",\\n          \\"Value\\": \\"test1\\"\\n        }\\n      ],\\n      \\"CreateTime\\": \\"2021-12-07T08:06:44\\",\\n      \\"UpdateTime\\": \\"2021-12-07T08:06:44\\",\\n      \\"ResourceGroupId\\": \\"rg-acfm4nxcvht4pmi\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTemplateScratchesResponse>\\n    <RequestId>D1C09606-C58B-558F-9B4E-5BF263D17D09</RequestId>\\n    <TotalCount>2</TotalCount>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TemplateScratches>\\n        <TemplateScratchId>ts-48ad85d66cca4620****</TemplateScratchId>\\n        <TemplateScratchType>ResourceImport</TemplateScratchType>\\n        <Status>GENERATE_COMPLETE</Status>\\n        <StatusReason>Resource ALIYUN::ECS::VPC vpc-m5eauuq80anx59v28**** could not be found for template scratch.</StatusReason>\\n        <FailedCode>InvalidZoneId</FailedCode>\\n        <PreferenceParameters>\\n            <ParameterKey>DeletionPolicy</ParameterKey>\\n            <ParameterValue>Retain</ParameterValue>\\n        </PreferenceParameters>\\n        <Description>纳管VPC资源。</Description>\\n        <SourceResources>\\n            <ResourceId>vpc-m5eauuq80anx59v28****</ResourceId>\\n            <ResourceType>ALIYUN::ECS::VPC</ResourceType>\\n        </SourceResources>\\n        <SourceTag>\\n            <ResourceTypeFilter>ALIYUN::ECS::VPC</ResourceTypeFilter>\\n        </SourceTag>\\n        <SourceResourceGroup>\\n            <ResourceGroupId>rg-acfmzawhxxc****</ResourceGroupId>\\n            <ResourceTypeFilter>ALIYUN::ECS::VPC</ResourceTypeFilter>\\n        </SourceResourceGroup>\\n        <LogicalIdStrategy>LongTypePrefixAndIndexSuffix</LogicalIdStrategy>\\n        <Tags>\\n            <Key>usage1</Key>\\n            <Value>test1</Value>\\n        </Tags>\\n        <CreateTime>2021-12-07T08:06:44</CreateTime>\\n        <UpdateTime>2021-12-07T08:06:44</UpdateTime>\\n    </TemplateScratches>\\n</ListTemplateScratchesResponse>","errorExample":""}]',
      'title' => '查询资源场景列表',
      'summary' => '查询资源场景列表。',
      'description' => '本文为您提供一个示例，查询杭州地域的资源场景列表。返回结果显示，杭州地域有2个资源场景，分别为资源纳管和资源复制。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
    ),
    'GetTemplateScratch' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '69681',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURErosHDIJ7A',
          1 => 'FEATURErosUSKZAD',
          2 => 'FEATURErosSKHQLM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景所属的地域ID。

您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateScratchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'ts-7f7a704cf71c49a6****',
          ),
        ),
        2 => 
        array (
          'name' => 'ShowDataOption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据显示选项，取值：

- Sources：仅显示源节点数据，且针对TemplateScratchType为ArchitectureDetection。

- Source：仅显示源节点数据，且针对TemplateScratchType不为ArchitectureDetection。

- Provisions：仅显示新节点数据，且针对TemplateScratchType不为ArchitectureDetection。

- All：显示所有数据。

关于源节点和新节点的更多信息，请参见[概览](~~352074~~)。

> 不设置该参数时，默认不显示节点数据。',
            'type' => 'string',
            'required' => false,
            'example' => 'Source',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A8E0EF98-6FBD-5656-8298-FC8194F0F7B7',
              ),
              'TemplateScratch' => 
              array (
                'description' => '资源场景。',
                'type' => 'object',
                'properties' => 
                array (
                  'TemplateScratchId' => 
                  array (
                    'description' => '资源场景ID。',
                    'type' => 'string',
                    'example' => 'ts-7f7a704cf71c49a6****',
                  ),
                  'TemplateScratchType' => 
                  array (
                    'description' => '资源场景类型，取值：

- ResourceImport：资源纳管。

- ArchitectureReplication：资源复制。',
                    'type' => 'string',
                    'example' => 'ArchitectureReplication',
                  ),
                  'Status' => 
                  array (
                    'description' => '资源场景状态，取值：

- GENERATE\\_IN_PROGRESS：生成中。

- GENERATE_COMPLETE：生成完成。

- GENERATE_FAILED：生成失败。',
                    'type' => 'string',
                    'example' => 'GENERATE_COMPLETE',
                  ),
                  'StatusReason' => 
                  array (
                    'description' => '资源场景生成失败的原因。

> 仅当Status为GENERATE_FAILED时返回该参数。',
                    'type' => 'string',
                    'example' => 'Resource ALIYUN::ECS::VPC vpc-m5eauuq80anx59v28**** could not be found for template scratch.',
                  ),
                  'FailedCode' => 
                  array (
                    'description' => '资源场景生成失败的状态码。

> 仅当Status为GENERATE_FAILED时返回该参数。',
                    'type' => 'string',
                    'example' => 'InvalidZoneId',
                  ),
                  'TemplateScratchData' => 
                  array (
                    'description' => '资源场景数据。',
                    'type' => 'object',
                    'example' => '参见返回示例',
                  ),
                  'PreferenceParameters' => 
                  array (
                    'description' => '资源场景配置参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParameterKey' => 
                        array (
                          'description' => '参数名称。',
                          'type' => 'string',
                          'example' => 'DeletionPolicy',
                        ),
                        'ParameterValue' => 
                        array (
                          'description' => '参数值。',
                          'type' => 'string',
                          'example' => 'Retain',
                        ),
                      ),
                    ),
                  ),
                  'Description' => 
                  array (
                    'description' => '资源场景说明。',
                    'type' => 'string',
                    'example' => '复制VPC资源。',
                  ),
                  'SourceResources' => 
                  array (
                    'description' => '源资源。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '源资源。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceId' => 
                        array (
                          'description' => '资源ID。',
                          'type' => 'string',
                          'example' => 'vpc-m5e7cv7e9mz69sszb****',
                        ),
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'ALIYUN::ECS::VPC',
                        ),
                        'RelatedResourceTypeFilter' => 
                        array (
                          'description' => '附属资源类型筛选器。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '附属资源类型筛选器。',
                            'type' => 'string',
                            'example' => 'ALIYUN::ECS::VPC',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'SourceTag' => 
                  array (
                    'description' => '源标签。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ResourceTags' => 
                      array (
                        'description' => '源标签。',
                        'type' => 'object',
                        'example' => '{"a": "b"}',
                      ),
                      'ResourceTypeFilter' => 
                      array (
                        'description' => '资源类型筛选器。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '资源类型筛选器。',
                          'type' => 'string',
                          'example' => 'ALIYUN::ECS::VPC',
                        ),
                      ),
                    ),
                  ),
                  'SourceResourceGroup' => 
                  array (
                    'description' => '源资源组。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ResourceGroupId' => 
                      array (
                        'description' => '源资源组ID。',
                        'type' => 'string',
                        'example' => 'rg-acfmzawhxxc****',
                      ),
                      'ResourceTypeFilter' => 
                      array (
                        'description' => '资源类型筛选器。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '资源类型筛选器。',
                          'type' => 'string',
                          'example' => 'ALIYUN::ECS::VPC',
                        ),
                      ),
                    ),
                  ),
                  'LogicalIdStrategy' => 
                  array (
                    'description' => '逻辑ID生成策略，取值：

- LongTypePrefixAndIndexSuffix（默认值）：长类型前缀+索引后缀。

- LongTypePrefixAndHashSuffix：长类型前缀+哈希后缀。

- ShortTypePrefixAndHashSuffix：短类型前缀+哈希后缀。',
                    'type' => 'string',
                    'example' => 'LongTypePrefixAndIndexSuffix',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '资源场景创建时间。

按照ISO8601标准表示，需使用UTC时间，格式：YYYY-MM-DDThh:mm:ss。',
                    'type' => 'string',
                    'example' => '2021-12-22T01:49:22',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '资源场景更新时间。

按照ISO8601标准表示，需使用UTC时间，格式：YYYY-MM-DDThh:mm:ss。',
                    'type' => 'string',
                    'example' => '2021-12-22T01:49:23',
                  ),
                  'Stacks' => 
                  array (
                    'description' => '资源场景关联的资源栈列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StackId' => 
                        array (
                          'description' => '资源栈ID。',
                          'type' => 'string',
                          'example' => '3708bf6a-3a67-44d4-9eb1-c56704b9****',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '资源栈所属的地域ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'UsageType' => 
                        array (
                          'description' => '资源栈用途，取值：


- ResourceImport：资源纳管。 

- ArchitectureReplication：资源复制。',
                          'type' => 'string',
                          'example' => 'ArchitectureReplication',
                        ),
                      ),
                    ),
                  ),
                  'StackProvision' => 
                  array (
                    'description' => '资源栈预置信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Creatable' => 
                      array (
                        'description' => '是否支持通过[CreateStack](~~132086~~)创建资源栈以进行资源复制，取值：

- true：支持。

- false：不支持。',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'Importable' => 
                      array (
                        'description' => '是否支持通过[CreateChangeSet](~~131051~~)创建更改集以进行资源纳管，取值：

- true：支持。

- false：不支持。',
                        'type' => 'boolean',
                        'example' => 'false',
                      ),
                    ),
                  ),
                  'ResourceGroupId' => 
                  array (
                    'description' => '资源组ID。',
                    'type' => 'string',
                    'example' => 'rg-acfmzmhzoaad5oq',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8E0EF98-6FBD-5656-8298-FC8194F0F7B7\\",\\n  \\"TemplateScratch\\": {\\n    \\"TemplateScratchId\\": \\"ts-7f7a704cf71c49a6****\\",\\n    \\"TemplateScratchType\\": \\"ArchitectureReplication\\",\\n    \\"Status\\": \\"GENERATE_COMPLETE\\",\\n    \\"StatusReason\\": \\"Resource ALIYUN::ECS::VPC vpc-m5eauuq80anx59v28**** could not be found for template scratch.\\",\\n    \\"FailedCode\\": \\"InvalidZoneId\\",\\n    \\"TemplateScratchData\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"PreferenceParameters\\": [\\n      {\\n        \\"ParameterKey\\": \\"DeletionPolicy\\",\\n        \\"ParameterValue\\": \\"Retain\\"\\n      }\\n    ],\\n    \\"Description\\": \\"复制VPC资源。\\",\\n    \\"SourceResources\\": [\\n      {\\n        \\"ResourceId\\": \\"vpc-m5e7cv7e9mz69sszb****\\",\\n        \\"ResourceType\\": \\"ALIYUN::ECS::VPC\\",\\n        \\"RelatedResourceTypeFilter\\": [\\n          \\"ALIYUN::ECS::VPC\\"\\n        ]\\n      }\\n    ],\\n    \\"SourceTag\\": {\\n      \\"ResourceTags\\": {\\n        \\"a\\": \\"b\\"\\n      },\\n      \\"ResourceTypeFilter\\": [\\n        \\"ALIYUN::ECS::VPC\\"\\n      ]\\n    },\\n    \\"SourceResourceGroup\\": {\\n      \\"ResourceGroupId\\": \\"rg-acfmzawhxxc****\\",\\n      \\"ResourceTypeFilter\\": [\\n        \\"ALIYUN::ECS::VPC\\"\\n      ]\\n    },\\n    \\"LogicalIdStrategy\\": \\"LongTypePrefixAndIndexSuffix\\",\\n    \\"CreateTime\\": \\"2021-12-22T01:49:22\\",\\n    \\"UpdateTime\\": \\"2021-12-22T01:49:23\\",\\n    \\"Stacks\\": [\\n      {\\n        \\"StackId\\": \\"3708bf6a-3a67-44d4-9eb1-c56704b9****\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"UsageType\\": \\"ArchitectureReplication\\"\\n      }\\n    ],\\n    \\"StackProvision\\": {\\n      \\"Creatable\\": true,\\n      \\"Importable\\": false\\n    },\\n    \\"ResourceGroupId\\": \\"rg-acfmzmhzoaad5oq\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTemplateScratchResponse>\\n    <TemplateScratch>\\n        <Status>GENERATE_COMPLETE</Status>\\n        <Description>复制VPC资源。</Description>\\n        <CreateTime>2021-12-22T01:49:22</CreateTime>\\n        <TemplateScratchId>ts-7f7a704cf71c49a6****</TemplateScratchId>\\n        <LogicalIdStrategy>LongTypePrefixAndIndexSuffix</LogicalIdStrategy>\\n        <PreferenceParameters>\\n            <ParameterValue>vpc-bp1xuamwmphrpcfim****</ParameterValue>\\n            <ParameterKey>VpcId</ParameterKey>\\n        </PreferenceParameters>\\n        <PreferenceParameters>\\n            <ParameterValue>Retain</ParameterValue>\\n            <ParameterKey>DeletionPolicy</ParameterKey>\\n        </PreferenceParameters>\\n        <PreferenceParameters>\\n            <ParameterValue>cn-hangzhou</ParameterValue>\\n            <ParameterKey>RegionId</ParameterKey>\\n        </PreferenceParameters>\\n        <PreferenceParameters>\\n            <ParameterKey>ZoneId</ParameterKey>\\n        </PreferenceParameters>\\n        <PreferenceParameters>\\n            <ParameterKey>VSwitchId</ParameterKey>\\n        </PreferenceParameters>\\n        <PreferenceParameters>\\n            <ParameterKey>InstanceDataReplication</ParameterKey>\\n        </PreferenceParameters>\\n        <TemplateScratchData>\\n            <Source>\\n                <RegionId>cn-hangzhou</RegionId>\\n                <Nodes>\\n                    <ECSVPC_001>\\n                        <ResourceId>vpc-m5e7cv7e9mz69sszb****</ResourceId>\\n                        <NodeType>SourceNode</NodeType>\\n                        <ResourceType>ALIYUN::ECS::VPC</ResourceType>\\n                        <Properties>\\n                            <Description>\\n                                <Type>String</Type>\\n                            </Description>\\n                            <SecondaryCidrBlock>\\n                                <Type>String</Type>\\n                            </SecondaryCidrBlock>\\n                            <CidrBlock>\\n                                <Type>String</Type>\\n                                <Value>172.16.0.0/12</Value>\\n                            </CidrBlock>\\n                            <VpcName>\\n                                <Type>String</Type>\\n                                <Value>tf_test</Value>\\n                            </VpcName>\\n                            <Ipv6CidrBlock>\\n                                <Type>String</Type>\\n                            </Ipv6CidrBlock>\\n                            <Tags>\\n                                <Type>List</Type>\\n                            </Tags>\\n                            <EnableIpv6>\\n                                <Type>Boolean</Type>\\n                                <Value>false</Value>\\n                            </EnableIpv6>\\n                            <UserCidr>\\n                                <Type>String</Type>\\n                            </UserCidr>\\n                        </Properties>\\n                        <ResourceIdentifiers>VpcId</ResourceIdentifiers>\\n                    </ECSVPC_001>\\n                </Nodes>\\n            </Source>\\n        </TemplateScratchData>\\n        <UpdateTime>2021-12-22T01:49:23</UpdateTime>\\n        <Stacks>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <UsageType>ArchitectureReplication</UsageType>\\n            <StackId>3708bf6a-3a67-44d4-9eb1-c56704b9****</StackId>\\n        </Stacks>\\n        <TemplateScratchType>ArchitectureReplication</TemplateScratchType>\\n        <StackProvision>\\n            <Creatable>true</Creatable>\\n            <Importable>false</Importable>\\n        </StackProvision>\\n        <SourceResources>\\n            <ResourceId>vpc-m5e7cv7e9mz69sszb****</ResourceId>\\n            <ResourceType>ALIYUN::ECS::VPC</ResourceType>\\n        </SourceResources>\\n    </TemplateScratch>\\n    <RequestId>A8E0EF98-6FBD-5656-8298-FC8194F0F7B7</RequestId>\\n</GetTemplateScratchResponse>","errorExample":""}]',
      'title' => '获取资源场景详情',
      'summary' => '获取资源场景详情。',
      'description' => '本文将提供一个示例，查询杭州地域资源场景`ts-7f7a704cf71c49a6****`的详情，并显示源节点数据。

',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
    ),
    'GenerateTemplateByScratch' => 
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
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景所属的地域ID。

您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateScratchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景ID。

关于如何获取资源场景ID，请参见[ListTemplateScratches](~~363050~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ts-aa9c62feab844a6b****',
          ),
        ),
        2 => 
        array (
          'name' => 'ProvisionRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新节点所属的地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生成模板类型，支持生成ROS和Terraform类型的模板，默认为ROS。',
            'type' => 'string',
            'required' => false,
            'example' => 'ROS',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D22C1D13-D74E-558C-AF68-1B4C05FA6F1A',
              ),
              'TemplateBody' => 
              array (
                'description' => '资源场景中生成的模板内容。',
                'type' => 'string',
                'example' => '{\\"ROSTemplateFormatVersion\\": \\"2015-09-01\\", \\"Resources\\": {\\"ECSVPC_001\\": {\\"DeletionPolicy\\": \\"Retain\\", \\"Type\\": \\"ALIYUN::ECS::VPC\\", \\"Properties\\": {\\"CidrBlock\\": \\"172.16.0.0/12\\", \\"VpcName\\": \\"MyTestVpc\\", \\"EnableIpv6\\": false}}}}',
              ),
              'ResourcesToImport' => 
              array (
                'description' => '资源纳管类型的资源场景中，待导入资源栈的资源。

> 仅资源纳管类型的资源场景支持返回该参数。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'ALIYUN::ECS::VPC',
                    ),
                    'LogicalResourceId' => 
                    array (
                      'description' => '资源逻辑ID。',
                      'type' => 'string',
                      'example' => 'ECSVPC_001',
                    ),
                    'ResourceIdentifier' => 
                    array (
                      'description' => '字符串到字符串的键值映射。取值是JSON格式的字符串，用来标识要导入的资源。  
键是资源的标识符属性（例如：ALIYUN::ECS::VPC资源的VpcId），值是属性的取值（例如：`vpc-bp1m6fww66xbntjyc****"`）。',
                      'type' => 'object',
                      'example' => '{"VpcId": "vpc-bp1m6fww66xbntjyc****" }',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D22C1D13-D74E-558C-AF68-1B4C05FA6F1A\\",\\n  \\"TemplateBody\\": \\"{\\\\\\\\\\\\\\"ROSTemplateFormatVersion\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"2015-09-01\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Resources\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"ECSVPC_001\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"DeletionPolicy\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Retain\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"ALIYUN::ECS::VPC\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Properties\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"CidrBlock\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"172.16.0.0/12\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"VpcName\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"MyTestVpc\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"EnableIpv6\\\\\\\\\\\\\\": false}}}}\\",\\n  \\"ResourcesToImport\\": [\\n    {\\n      \\"ResourceType\\": \\"ALIYUN::ECS::VPC\\",\\n      \\"LogicalResourceId\\": \\"ECSVPC_001\\",\\n      \\"ResourceIdentifier\\": {\\n        \\"VpcId\\": \\"vpc-bp1m6fww66xbntjyc****\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GenerateTemplateByScratchResponse>\\n    <RequestId>D22C1D13-D74E-558C-AF68-1B4C05FA6F1A</RequestId>\\n    <ResourcesToImport>\\n        <ResourceIdentifier>\\n            <VpcId>vpc-bp1m6fww66xbntjyc****</VpcId>\\n        </ResourceIdentifier>\\n        <LogicalResourceId>ECSVPC_001</LogicalResourceId>\\n        <ResourceType>ALIYUN::ECS::VPC</ResourceType>\\n    </ResourcesToImport>\\n    <TemplateBody>{\\"ROSTemplateFormatVersion\\": \\"2015-09-01\\", \\"Resources\\": {\\"ECSVPC_001\\": {\\"DeletionPolicy\\": \\"Retain\\", \\"Type\\": \\"ALIYUN::ECS::VPC\\", \\"Properties\\": {\\"CidrBlock\\": \\"172.16.0.0/12\\", \\"VpcName\\": \\"MyTestVpc\\", \\"EnableIpv6\\": false}}}}</TemplateBody>\\n</GenerateTemplateByScratchResponse>","errorExample":""}]',
      'title' => '为资源场景生成模板',
      'summary' => '为资源场景生成模板。',
      'description' => '本文将提供一个示例，在杭州地域为资源纳管类型的资源场景`ts-aa9c62feab844a6b****`生成模板。

> 资源探查类型的资源场景不支持生成模板。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
    ),
    'CreateTemplate' => 
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
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/stack-policy/demo、oss://ros/stack-policy/demo?RegionId=cn-hangzhou）中的模板。
模板长度范围为1~1024字节。
如未指定OSS地域，默认与接口参数RegionId相同。 
  
> 您必须且仅能指定TemplateBody和TemplateURL其中一个参数。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros/template/demo',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板的描述。最大长度为256个字符。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'It is a demo.',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板主体的结构。长度为1~524,288个字节。  如果长度较大，建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免URL过长而导致请求失败。  
> 您仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"ROSTemplateFormatVersion":"2015-09-01"}',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板的名称。  
长度不超过255个字符，必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyTemplate',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。  
关于资源组的更多信息，请参见[什么是资源组](~~94475~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxazb4ph6aiy****',
          ),
        ),
        5 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '模板的标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '模板的标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '模板的标签键。

> Tags为可选参数。如果需要指定Tags，则Tags.N.Key必须指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'usage',
                ),
                'Value' => 
                array (
                  'description' => '模板的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8C5D90E1-66B6-496C-9371-3807F8DA80A8',
              ),
              'TemplateId' => 
              array (
                'description' => '模板ID。',
                'type' => 'string',
                'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8C5D90E1-66B6-496C-9371-3807F8DA80A8\\",\\n  \\"TemplateId\\": \\"5ecd1e10-b0e9-4389-a565-e4c15efc****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateTemplateResponse>\\n        <RequestId>8C5D90E1-66B6-496C-9371-3807F8DA80A8</RequestId>\\n        <TemplateId>5ecd1e10-b0e9-4389-a565-e4c15efc****</TemplateId>\\n</CreateTemplateResponse>","errorExample":""}]',
      'title' => '创建自定义模板',
      'summary' => '创建自定义模板。',
      'description' => '本文将提供一个示例，在杭州地域`cn-hangzhou`创建一个名为`MyTemplate`的模板，并将模板的结构`TemplateBody`设置为`{"ROSTemplateFormatVersion": "2015-09-01"}`。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | InvalidSchema |{reason}. |模板格式不正确。reason为具体原因。 |
| 400 | InvalidTemplateAttribute |The Referenced Attribute ({resource} {name}) is incorrect. |模板包含不正确的资源属性（输出）引用。resource为资源名，name为属性名。 |
| 400 | InvalidTemplatePropertyType |The specified value type of ({resource} {section}) is incorrect. |模板资源定义中的字段类型不正确。resource为资源名，section为字段名。 |
| 400 | InvalidTemplateReference |The specified reference "{name}" (in {referencer}) is incorrect. |模板包含不正确的引用。name为引用名，referencer为引用者。 |
| 400 | InvalidTemplateSection |The template section is invalid: {section}. |模板包含无效的字段。section为字段名。 |
| 400 | InvalidTemplateVersion |The template version is invalid: {reason}. |模板版本不正确。reason为具体原因。 |
',
    ),
    'DeleteTemplate' => 
    array (
      'path' => '/V2/DeleteTemplate',
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
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。仅支持私有模板。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8C5D90E1-66B6-496C-9371-3807F8DA80A8',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8C5D90E1-66B6-496C-9371-3807F8DA80A8\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteTemplateResponse>\\r\\n        <RequestId>8C5D90E1-66B6-496C-9371-3807F8DA80A8</RequestId>\\r\\n</DeleteTemplateResponse>","errorExample":""}]',
      'title' => '删除模板',
      'summary' => '删除指定模板，如果已将模板共享给其他阿里云账号，需要取消共享后才能删除。',
      'description' => '如果已经将模板共享给其他阿里云账号，需要取消共享后才能删除模板。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | TemplateBeingProcessed |Template { ID } is being processed, retry later.|模板正在处理中，稍后再试。ID为模板ID。|',
    ),
    'UpdateTemplate' => 
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
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储桶（例如：oss://ros/template/demo、oss://ros/template/demo?RegionId=cn-hangzhou）中的模板，模板最大为524,288个字节。   

> 如果OSS地域未指定，默认与接口参数RegionId相同。
   
您仅能指定TemplateBody、TemplateURL其中一个参数。   
URL的最大长度为：1024个字节。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros/template/demo',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板的名称。  
长度不超过255个字符，必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'MyTemplate',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板的描述。最大长度为256个字符。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'It is a demo.',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板主体的结构。长度为1~524,288个字节。如果长度较长，则建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免因URL过长而导致请求失败。

> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId和TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"ROSTemplateFormatVersion":"2015-09-01"}',
          ),
        ),
        4 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8C5D90E1-66B6-496C-9371-3807F8DA80A8',
              ),
              'TemplateId' => 
              array (
                'description' => '模板ID。',
                'type' => 'string',
                'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8C5D90E1-66B6-496C-9371-3807F8DA80A8\\",\\n  \\"TemplateId\\": \\"5ecd1e10-b0e9-4389-a565-e4c15efc****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateTemplateResponse>\\n\\t\\t<RequestId>8C5D90E1-66B6-496C-9371-3807F8DA80A8</RequestId>\\n\\t\\t<TemplateId>5ecd1e10-b0e9-4389-a565-e4c15efc****</TemplateId>\\n</UpdateTemplateResponse>\\n","errorExample":""}]',
      'title' => '更新模板',
      'summary' => '通过指定模板地址或模板详情更新模板。',
      'description' => ' 更新模板时，请注意：   

- 如果指定了TemplateBody或TemplateURL，更新模板成功后，模板版本加1。例如：版本由v1变为v2。
- 如果未指定TemplateBody和TemplateURL，模板版本不变。
- 模板最多拥有100个版本。如果版本达到上限，模板将更新失败，您需要重新创建模板。
',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 404 | TemplateNotFound |The Tempalte ({ ID }) could not be found. |模板不存在。 |
| 400 | InvalidSchema |{reason}. |模板格式不正确。reason为具体原因。 |
| 400 | InvalidTemplateAttribute |The Referenced Attribute ({resource} {name}) is incorrect. |模板包含不正确的资源属性（输出）引用。resource为资源名，name为属性名。 |
| 400 | InvalidTemplatePropertyType |The specified value type of ({resource} {section}) is incorrect. |模板资源定义中的字段类型不正确。resource为资源名，section为字段名。 |
| 400 | InvalidTemplateReference |The specified reference "{name}" (in {referencer}) is incorrect. |模板包含不正确的引用。name为引用名，referencer为引用者。 |
| 400 | InvalidTemplateSection |The template section is invalid: {section}. |模板包含无效的字段。section为字段名。 |
| 400 | InvalidTemplateVersion |The template version is invalid: {reason}. |模板版本不正确。reason为具体原因。 |
| 400 | TemplateBeingProcessed |Template { ID } is being processed, retry later.|模板正在处理中，稍后再试。ID为模板ID。|

',
    ),
    'GetTemplate' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。

> 您必须且仅能指定StackId、ChangeSetId、StackGroupName和TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板所属资源栈或资源栈组的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ChangeSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更改集ID。

> 您必须且仅能指定StackId、ChangeSetId、StackGroupName和TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '1f6521a4-05af-4975-afe9-bc4b45ad****',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。

支持共享的模板和私有模板。共享模板TemplateId与TemplateARN相同，使用该值查询。

> 您必须且仅能指定StackId、ChangeSetId、StackGroupName和TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        4 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板版本。仅在指定TemplateId时生效。  
如果为共享模板，仅当共享模板中的VersionOption取值为AllVersions时，支持指定该参数。更多信息，请参见[SetTemplatePermission](~~194768~~).

取值范围：v1～v100。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        5 => 
        array (
          'name' => 'TemplateStage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板阶段。仅在指定StackId、ChangeSetId或StackGroupName时生效。

取值：

- Processed（默认值）：返回解析转换后的模板。
- Original：返回用户指定的原始模板。',
            'type' => 'string',
            'required' => false,
            'example' => 'Processed',
          ),
        ),
        6 => 
        array (
          'name' => 'IncludePermission',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询模板共享信息。取值：

- Enabled：查询。

- Disabled（默认值）：不查询。

> 仅限模板拥有者查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'Enabled',
          ),
        ),
        7 => 
        array (
          'name' => 'StackGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组名称。

> 您必须且仅能指定StackId、ChangeSetId、StackGroupName和TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'MyStackGroup',
          ),
        ),
        8 => 
        array (
          'name' => 'IncludeTags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询标签信息。取值：

- Enabled：查询。
- Disabled（默认值）：不查询。  

> 仅在指定TemplateId参数时生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'Enabled',
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
              'TemplateARN' => 
              array (
                'description' => '模板ARN。仅在指定TemplateId时返回该参数。',
                'type' => 'string',
                'example' => 'acs:ros:*:151266687691****:template/a52f81be-496f-4e1c-a286-8852ab54****',
              ),
              'Description' => 
              array (
                'description' => '模板描述。仅在指定TemplateId时返回该参数。',
                'type' => 'string',
                'example' => 'ROS template for create ECS instance.',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84****',
              ),
              'CreateTime' => 
              array (
                'description' => '模板创建时间。仅在指定TemplateId时返回该参数。  

> - 如果指定了TemplateVersion，则返回指定版本模板的创建时间。  
> - 如果未指定TemplateVersion，则返回默认版本模板的创建时间。',
                'type' => 'string',
                'example' => '2020-11-18T08:49:26',
              ),
              'StackGroupName' => 
              array (
                'description' => '资源栈组名称。仅在指定StackGroupName时返回该参数。',
                'type' => 'string',
                'example' => 'MyStackGroup',
              ),
              'TemplateVersion' => 
              array (
                'description' => '模板版本。仅在指定TemplateId时返回该参数。  
如果未指定TemplateVersion，或TemplateVersion未生效，则该参数表示模板当前版本。

如果为共享模板，当且仅当VersionOption为AllVersions时，支持返回该参数。',
                'type' => 'string',
                'example' => 'v1',
              ),
              'TemplateBody' => 
              array (
                'description' => '模板内容。',
                'type' => 'string',
                'example' => '{"ROSTemplateFormatVersion": "2015-09-01"}',
              ),
              'ChangeSetId' => 
              array (
                'description' => '更改集ID。仅在指定ChangeSetId时返回该参数。',
                'type' => 'string',
                'example' => 'e85abe0c-6528-43fb-ae93-fdf8de22****',
              ),
              'OwnerId' => 
              array (
                'description' => '模板所属阿里云账号ID。仅在指定TemplateId时返回该参数。',
                'type' => 'string',
                'example' => '151266687691****',
              ),
              'UpdateTime' => 
              array (
                'description' => '模板的最后更新时间。仅在指定TemplateId时返回该参数。  

> - 如果指定了TemplateVersion，则返回指定版本模板的最后更新时间。  
> - 如果未指定TemplateVersion，则返回模板的最后更新时间。',
                'type' => 'string',
                'example' => '2020-12-07T06:11:48',
              ),
              'Permissions' => 
              array (
                'description' => '模板的共享状态。仅在指定TemplateId，且IncludePermission为Enabled时返回该参数。

> - 如果未指定TemplateVersion，或者TemplateVersion不生效，则返回模板的共享状态。  
> - 如果指定了TemplateVersion，并且TemplateVersion生效，则返回版本关联模板的共享状态。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VersionOption' => 
                    array (
                      'description' => '共享版本选项。仅在ShareOption取值为ShareToAccounts时返回该参数。

取值：
- AllVersions：共享模板所有版本。
- Latest：只共享模板最新版本。模板版本增加时，共享的版本也随之变化，始终保持最新版本。
- Current：只共享模板当前最新版本。模板版本增加时，共享的版本不变。
- Specified：只共享模板指定的单个版本。',
                      'type' => 'string',
                      'example' => 'AllVersions',
                    ),
                    'AccountId' => 
                    array (
                      'description' => '共享的阿里云账号。',
                      'type' => 'string',
                      'example' => '142437958638****',
                    ),
                    'ShareOption' => 
                    array (
                      'description' => '共享选项。

取值：ShareToAccounts，表示共享给其他阿里云账号。',
                      'type' => 'string',
                      'example' => 'ShareToAccounts',
                    ),
                    'TemplateVersion' => 
                    array (
                      'description' => '共享的模板版本。当ShareOption为ShareToAccounts，且VersionOption为Specified或Current时返回该参数。

取值范围：v1~v100。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                    'ShareSource' => 
                    array (
                      'description' => '共享关系的建立来源。
取值：
- ROS：通过ROS控制台或API建立共享关系。
- ResourceDirectory：在资源管理服务中通过资源共享功能为资源目录中的账号建立共享关系。

> - 来自ROS的共享与来自ResourceDirectory的共享拥有独立的配额。
> - 无法通过ROS控制台或API取消或覆盖来自ResourceDirectory的共享。
> - 来自ResourceDirectory的共享可以覆盖来自ROS的共享。',
                      'type' => 'string',
                      'example' => 'ROS',
                    ),
                  ),
                ),
              ),
              'TemplateName' => 
              array (
                'description' => '模板的名称。仅在指定TemplateId时返回该参数。  

> - 如果指定了TemplateVersion，则返回版本关联的模板名称。    
> - 如果未指定TemplateVersion，则返回模板的名称。',
                'type' => 'string',
                'example' => 'MyTemplate',
              ),
              'RegionId' => 
              array (
                'description' => '模板所属资源栈或资源栈组的地域ID。仅在指定StackId、ChangeSetId或StackGroupName时返回该参数。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'TemplateId' => 
              array (
                'description' => '模板的ID。仅在指定TemplateId时返回。

如果是共享模板，返回结果与TemplateARN相同。',
                'type' => 'string',
                'example' => 'a52f81be-496f-4e1c-a286-8852ab54****',
              ),
              'StackId' => 
              array (
                'description' => '资源栈ID。仅在指定StackId时返回该参数。',
                'type' => 'string',
                'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****	',
              ),
              'ShareType' => 
              array (
                'description' => '模板的共享类型。仅在指定TemplateId时返回该参数。

取值：
- Private：模板为用户自己所拥有。
- Shared：模板由其他用户所共享。',
                'type' => 'string',
                'example' => 'Private',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。 ',
                'type' => 'string',
                'example' => 'rg-acfmxazb4ph6aiy****',
              ),
              'Interface' => 
              array (
                'description' => '界面描述信息。',
                'type' => 'string',
                'example' => '{}',
              ),
              'Tags' => 
              array (
                'description' => '模板的标签。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '模板的标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '模板的标签键。',
                      'type' => 'string',
                      'example' => 'usage',
                    ),
                    'Value' => 
                    array (
                      'description' => '模板的标签值。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TemplateARN\\": \\"acs:ros:*:151266687691****:template/a52f81be-496f-4e1c-a286-8852ab54****\\",\\n  \\"Description\\": \\"ROS template for create ECS instance.\\",\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84****\\",\\n  \\"CreateTime\\": \\"2020-11-18T08:49:26\\",\\n  \\"StackGroupName\\": \\"MyStackGroup\\",\\n  \\"TemplateVersion\\": \\"v1\\",\\n  \\"TemplateBody\\": \\"{\\\\\\"ROSTemplateFormatVersion\\\\\\": \\\\\\"2015-09-01\\\\\\"}\\",\\n  \\"ChangeSetId\\": \\"e85abe0c-6528-43fb-ae93-fdf8de22****\\",\\n  \\"OwnerId\\": \\"151266687691****\\",\\n  \\"UpdateTime\\": \\"2020-12-07T06:11:48\\",\\n  \\"Permissions\\": [\\n    {\\n      \\"VersionOption\\": \\"AllVersions\\",\\n      \\"AccountId\\": \\"142437958638****\\",\\n      \\"ShareOption\\": \\"ShareToAccounts\\",\\n      \\"TemplateVersion\\": \\"v1\\",\\n      \\"ShareSource\\": \\"ROS\\"\\n    }\\n  ],\\n  \\"TemplateName\\": \\"MyTemplate\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"TemplateId\\": \\"a52f81be-496f-4e1c-a286-8852ab54****\\",\\n  \\"StackId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf691****\\\\t\\",\\n  \\"ShareType\\": \\"Private\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmxazb4ph6aiy****\\",\\n  \\"Interface\\": \\"{}\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"usage\\",\\n      \\"Value\\": \\"test\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetTemplateResponse>\\n    <TemplateARN>acs:ros:*:151266687691****:template/a52f81be-496f-4e1c-a286-8852ab54****</TemplateARN>\\n    <Description>ROS template for create ECS instance.</Description>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84****</RequestId>\\n    <CreateTime>2020-11-18T08:49:26</CreateTime>\\n    <StackGroupName>MyStackGroup</StackGroupName>\\n    <TemplateVersion>v1</TemplateVersion>\\n    <TemplateBody>{\\"ROSTemplateFormatVersion\\": \\"2015-09-01\\"}</TemplateBody>\\n    <ChangeSetId>e85abe0c-6528-43fb-ae93-fdf8de22****</ChangeSetId>\\n    <OwnerId>151266687691****</OwnerId>\\n    <UpdateTime>2020-12-07T06:11:48</UpdateTime>\\n    <Permissions>\\n        <VersionOption>AllVersions</VersionOption>\\n        <AccountId>142437958638****</AccountId>\\n        <ShareOption>ShareToAccounts</ShareOption>\\n        <TemplateVersion>v1</TemplateVersion>\\n        <ShareSource>ROS</ShareSource>\\n    </Permissions>\\n    <TemplateName>MyTemplate</TemplateName>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <TemplateId>a52f81be-496f-4e1c-a286-8852ab54****</TemplateId>\\n    <StackId>4a6c9851-3b0f-4f5f-b4ca-a14bf691****</StackId>\\n    <ShareType>Private</ShareType>\\n    <ResourceGroupId>rg-acfmxazb4ph6aiy****</ResourceGroupId>\\n    <Interface>{}</Interface>\\n    <Tags>\\n        <Key>usage</Key>\\n        <Value>test</Value>\\n    </Tags>\\n</GetTemplateResponse>","errorExample":""}]',
      'title' => '查询模板详情',
      'summary' => '指定资源栈、资源栈组、更改集、自定义模板其中任意信息获取模板详情。',
      'description' => '本文将提供一个示例，查询杭州地域`cn-hangzhou`模板ID为`5ecd1e10-b0e9-4389-a565-e4c15efc****`的模板详细信息。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '
| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 404 | ChangeSetNotFound |The ChangeSet ({name}) of Stack ({stack}) could not be found. |更改集不存在。name为更改集名称或ID，stack为资源栈名称或ID。 |
| 404 | ChangeSetNotFound |The ChangeSet {ID} could not be found. |更改集不存在。ID为更改集ID。 |
| 404 | StackNotFound |The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。 |
| 404 | TemplateNotFound |The Template { ID } could not be found. |模板不存在。ID为模板ID。 |
| 404 | TemplateNotFound |The Template { ID } with version { version } could not be found. |模板或指定版本不存在。ID为模板ID，version为模板版本。 |
| 404 | StackGroupNotFound |The StackGroup ({name}) could not be found.|资源栈组不存在。name为资源栈组名称。|',
    ),
    'ListTemplates' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板列表的页码。  
起始值：1。  
默认值：1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。  
取值范围：1~50。  
默认值：10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板名称。仅在ShareType为Private时生效。
长度不超过255个字符，必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'MyTemplate',
          ),
        ),
        3 => 
        array (
          'name' => 'ShareType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板的共享类型。

取值：
- Private（默认值）：模板为用户自己所拥有。
- Shared：模板由其他用户所共享。
- Official：官方共享模板。',
            'type' => 'string',
            'required' => false,
            'example' => 'Private',
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签。最多支持指定20个标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。仅在ShareType为Private时生效。

最多支持指定20个标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'usage',
                ),
                'Value' => 
                array (
                  'description' => '标签值。仅在ShareType为Private时生效。

最多支持指定20个标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'deploy',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。  
关于资源组的更多信息，请参见[什么是资源组](~~94475~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxazb4ph6aiy****',
          ),
        ),
        6 => 
        array (
          'name' => 'IncludeTags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询标签信息。取值：

- Enabled：查询。
- Disabled（默认值）：不查询。  

',
            'type' => 'string',
            'required' => false,
            'example' => 'Enabled',
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
              'TotalCount' => 
              array (
                'description' => '模板总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C3A8413B-1F16-4DED-AC3E-61A00718DE8A',
              ),
              'PageNumber' => 
              array (
                'description' => '模板列表的页码。  
起始值：1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Templates' => 
              array (
                'description' => '模板列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '模板列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TemplateARN' => 
                    array (
                      'description' => '模板的ARN。',
                      'type' => 'string',
                      'example' => 'acs:ros:*:151266687691****:template/a52f81be-496f-4e1c-a286-8852ab54****',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '模板最后更新时间。',
                      'type' => 'string',
                      'example' => '2019-10-15T08:17:14.000000',
                    ),
                    'Description' => 
                    array (
                      'description' => '模板描述。',
                      'type' => 'string',
                      'example' => 'test-description',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2019-10-15T08:17:14.000000',
                    ),
                    'TemplateName' => 
                    array (
                      'description' => '模板名称。',
                      'type' => 'string',
                      'example' => 'demo',
                    ),
                    'TemplateVersion' => 
                    array (
                      'description' => '模板最新版本名。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '模板ID。',
                      'type' => 'string',
                      'example' => '4d4f5aa2-3260-4e47-863b-763fbb12****',
                    ),
                    'OwnerId' => 
                    array (
                      'description' => '模板所属阿里云账号ID。',
                      'type' => 'string',
                      'example' => '151266687691****',
                    ),
                    'ShareType' => 
                    array (
                      'description' => '模板的共享类型。

取值：
- Private：模板为用户自己所拥有。
- Shared：模板由其他用户所共享。',
                      'type' => 'string',
                      'example' => 'Private',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfmxazb4ph6aiy****',
                    ),
                    'Tags' => 
                    array (
                      'description' => '模板的标签。

',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '模板的标签。

',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '模板的标签键。',
                            'type' => 'string',
                            'example' => 'usage',
                          ),
                          'Value' => 
                          array (
                            'description' => '模板的标签值。',
                            'type' => 'string',
                            'example' => 'test',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"C3A8413B-1F16-4DED-AC3E-61A00718DE8A\\",\\n  \\"PageNumber\\": 1,\\n  \\"Templates\\": [\\n    {\\n      \\"TemplateARN\\": \\"acs:ros:*:151266687691****:template/a52f81be-496f-4e1c-a286-8852ab54****\\",\\n      \\"UpdateTime\\": \\"2019-10-15T08:17:14.000000\\",\\n      \\"Description\\": \\"test-description\\",\\n      \\"CreateTime\\": \\"2019-10-15T08:17:14.000000\\",\\n      \\"TemplateName\\": \\"demo\\",\\n      \\"TemplateVersion\\": \\"v1\\",\\n      \\"TemplateId\\": \\"4d4f5aa2-3260-4e47-863b-763fbb12****\\",\\n      \\"OwnerId\\": \\"151266687691****\\",\\n      \\"ShareType\\": \\"Private\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmxazb4ph6aiy****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"usage\\",\\n          \\"Value\\": \\"test\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTemplatesResponse>\\n    <TemplateARN>acs:ros:*:151266687691****:template/a52f81be-496f-4e1c-a286-8852ab54****</TemplateARN>\\n    <Description>ROS template for create ECS instance.</Description>\\n    <RequestId>C3A8413B-1F16-4DED-AC3E-61A00718DE8A</RequestId>\\n    <CreateTime>2019-10-15T08:17:14.000000</CreateTime>\\n    <StackGroupName>MyStackGroup</StackGroupName>\\n    <TemplateVersion>v1</TemplateVersion>\\n    <TemplateBody>{\\"ROSTemplateFormatVersion\\": \\"2015-09-01\\"}</TemplateBody>\\n    <ChangeSetId>e85abe0c-6528-43fb-ae93-fdf8de22****</ChangeSetId>\\n    <OwnerId>151266687691****</OwnerId>\\n    <UpdateTime>2019-10-15T08:17:14.000000</UpdateTime>\\n    <Permissions>\\n        <VersionOption>AllVersions</VersionOption>\\n        <AccountId>142437958638****</AccountId>\\n        <ShareOption>ShareToAccounts</ShareOption>\\n        <TemplateVersion>v1</TemplateVersion>\\n        <ShareSource>ROS</ShareSource>\\n    </Permissions>\\n    <TemplateName>MyTemplate</TemplateName>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <TemplateId>4d4f5aa2-3260-4e47-863b-763fbb12****</TemplateId>\\n    <StackId>4a6c9851-3b0f-4f5f-b4ca-a14bf691****</StackId>\\n    <ShareType>Private</ShareType>\\n    <ResourceGroupId>rg-acfmxazb4ph6aiy****</ResourceGroupId>\\n    <Interface>{}</Interface>\\n    <Tags>\\n        <Key>usage</Key>\\n        <Value>test</Value>\\n    </Tags>\\n</ListTemplatesResponse>","errorExample":""}]',
      'title' => '查询模板列表',
      'summary' => '查询私有与共享的模板列表。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTemplateVersions' => 
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
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用NextToken方式查询时，每次最多返回的结果数。

取值范围：1~100。

默认值：50。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'maximum' => '10000',
            'minimum' => '1',
            'example' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
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
              'Versions' => 
              array (
                'description' => '版本列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UpdateTime' => 
                    array (
                      'description' => '版本最后更新时间。',
                      'type' => 'string',
                      'example' => '2020-02-27T07:47:47',
                    ),
                    'Description' => 
                    array (
                      'description' => '版本相关的模板描述。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '版本创建时间。',
                      'type' => 'string',
                      'example' => '2020-02-27T07:47:47',
                    ),
                    'TemplateName' => 
                    array (
                      'description' => '版本相关的模板名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '模板ID。支持共享模板和私有模板。若为共享模板，取值与模板ARN相同。',
                      'type' => 'string',
                      'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
                    ),
                    'TemplateVersion' => 
                    array (
                      'description' => '版本号。

对于共享模板，仅当VersionOption为AllVersions时返回该参数。

取值范围：v1~v100。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '本次调用返回的查询凭证值。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Versions\\": [\\n    {\\n      \\"UpdateTime\\": \\"2020-02-27T07:47:47\\",\\n      \\"Description\\": \\"test\\",\\n      \\"CreateTime\\": \\"2020-02-27T07:47:47\\",\\n      \\"TemplateName\\": \\"test\\",\\n      \\"TemplateId\\": \\"5ecd1e10-b0e9-4389-a565-e4c15efc****\\",\\n      \\"TemplateVersion\\": \\"v1\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0****\\",\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\"\\n}","errorExample":""},{"type":"xml","example":"<ListTemplateVersionsResponse>\\n    <Versions>\\n        <Description>test</Description>\\n        <CreateTime>2020-02-27T07:47:47</CreateTime>\\n        <UpdateTime>2020-02-27T07:47:47</UpdateTime>\\n        <TemplateVersion>v1</TemplateVersion>\\n        <TemplateName>test</TemplateName>\\n        <TemplateId>5ecd1e10-b0e9-4389-a565-e4c15efc****</TemplateId>\\n    </Versions>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0****</NextToken>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n</ListTemplateVersionsResponse>","errorExample":""}]',
      'title' => '查询模板的版本列表',
      'summary' => '通过查询指定模板获取模板的版本列表详情。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 404 | TemplateNotFound |The Tempalte ({ ID }) could not be found. |模板不存在。ID为模板ID。 |
| 404 | TemplateNotFound |The Template { ID } with version { version } could not be found. |模板或指定版本不存在。ID为模板ID，version为模板版本。 |',
    ),
    'GetTemplateParameterConstraints' => 
    array (
      'summary' => '调用GetTemplateParameterConstraints接口查询模板参数的取值。',
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
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板主体的结构。长度为1~524,288个字节。如果长度较长，则建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免因URL过长而导致请求失败。

> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId和TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{
  "ROSTemplateFormatVersion": "2015-09-01",
  "Parameters": {
    "ZoneInfo": {
      "Type": "String"
    },
    "InstanceType": {
      "Type": "String"
    }
  },
  "Resources": {
    "ECS": {
      "Type": "ALIYUN::ECS::Instance",
      "Properties": {
        "ZoneId": {
          "Ref": "ZoneInfo"
        },
        "InstanceType": {
          "Ref": "InstanceType"
        }
      }
    }
  }
}',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。  
您可以调用[DescribeRegions](~~131035~~)接口查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/template/demo或oss://ros/template/demo?RegionId=cn-hangzhou）中的模板，模板的最大长度为524,288个字节。如未指定OSS地域，默认与接口参数RegionId相同。
> 您必须且仅能指定TemplateBody、TemplateURL和TemplateId其中一个参数。  ',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros-template/demo',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。  
> 您必须且仅能指定TemplateBody、TemplateURL和TemplateId其中一个参数。  
',
            'type' => 'string',
            'required' => false,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        4 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板版本。如果不指定，默认取最新版本。  

> TemplateVersion仅在指定TemplateId时生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        5 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '模板中已定义的参数。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '模板中已定义的参数的名称。

> Parameters为可选参数。若指定了Parameters，则ParameterKey为必选参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ZoneInfo',
                ),
                'ParameterValue' => 
                array (
                  'description' => '模板中已定义的参数的取值。

> Parameters为可选参数。若指定了Parameters，则ParameterValue为必选参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'cn-hangzhou-h',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        6 => 
        array (
          'name' => 'ParametersKeyFilter',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '需要查询的参数列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要查询的参数。',
              'type' => 'string',
              'required' => false,
              'example' => 'ZoneInfo',
            ),
            'required' => false,
            'docRequired' => false,
            'maxItems' => 200,
            'minItems' => 1,
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。
该值由客户端生成，并且必须是全局唯一的。长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。
更多信息，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        8 => 
        array (
          'name' => 'ParametersOrder',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '参数依赖关系。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '参数依赖关系的顺序。

> 默认按照模板中`Metadata`参数的依赖关系。',
              'type' => 'string',
              'required' => false,
              'example' => '["ZoneId", "InstanceType"]',
            ),
            'required' => false,
            'maxItems' => 100,
            'minItems' => 0,
          ),
        ),
        9 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。

当填写此参数时，表示查询变配场景的参数约束。',
            'type' => 'string',
            'required' => false,
            'example' => 'c754d2a4-28f1-46df-b557-9586173a****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9816785B-BCF8-514D-8B76-C1EC2BC954FC',
              ),
              'ParameterConstraints' => 
              array (
                'description' => '参数约束信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ParameterKey' => 
                    array (
                      'description' => '参数的名称。',
                      'type' => 'string',
                      'example' => 'ZoneInfo',
                    ),
                    'Type' => 
                    array (
                      'description' => '参数的类型。',
                      'type' => 'string',
                      'example' => 'String',
                    ),
                    'AllowedValues' => 
                    array (
                      'description' => '参数的取值列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '参数的取值。',
                        'type' => 'string',
                        'example' => 'cn-hangzhou-h',
                      ),
                    ),
                    'Behavior' => 
                    array (
                      'description' => '参数的行为。取值：

- NoLimit：无限制，此参数没有取值限制。

- NotSupport：不支持，此参数不支持查询取值。

- QueryError：查询失败。

> 当查询结果没有返回AllowedValues时，会额外返回Behavior和BehaviorReason，说明参数的行为和原因。',
                      'type' => 'string',
                      'example' => 'NoLimit',
                    ),
                    'BehaviorReason' => 
                    array (
                      'description' => '参数行为出现的原因。',
                      'type' => 'string',
                      'example' => 'No resource property refer to the parameter',
                    ),
                    'AssociationParameterNames' => 
                    array (
                      'description' => '关联参数列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关联参数名称的列表。',
                        'type' => 'string',
                        'example' => 'InstanceType',
                      ),
                    ),
                    'IllegalValueByParameterConstraints' => 
                    array (
                      'description' => '不符合参数约束的值列表。

> 当查询结果有返回AllowedValues时，会额外返回IllegalValueByParameterConstraints和IllegalValueByRules，说明被参数约束和模板规则过滤掉的不合法的值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '不符合参数约束的值。
> 当查询结果返回`AllowedValues`时，会同时返回被参数约束和模板规则过滤掉的不合法的值`IllegalValueByParameterConstraints`和`IllegalValueByRules`。',
                        'type' => 'any',
                        'example' => 'cn-hangzhou-h',
                      ),
                    ),
                    'IllegalValueByRules' => 
                    array (
                      'description' => '不符合模板规则的值列表。

> 当查询结果有返回AllowedValues时，会额外返回IllegalValueByParameterConstraints和IllegalValueByRules，说明被参数约束和模板规则过滤掉的不合法的值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '不符合模板规则的值。
> 当查询结果返回`AllowedValues`时，会同时返回被参数约束和模板规则过滤掉的不合法的值`IllegalValueByParameterConstraints`和`IllegalValueByRules`。',
                        'type' => 'any',
                        'example' => 'cn-hangzhou-h',
                      ),
                    ),
                    'NotSupportResources' => 
                    array (
                      'description' => '不支持的资源详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '不支持的资源详情。

当`Behavior`取值为`NotSupport`时，返回该信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ResourceType' => 
                          array (
                            'description' => '资源类型。',
                            'type' => 'string',
                            'example' => 'ALIYUN::ECS::InstanceGroup',
                          ),
                          'PropertyName' => 
                          array (
                            'description' => '资源属性名称。',
                            'type' => 'string',
                            'example' => 'InstanceName',
                          ),
                        ),
                      ),
                    ),
                    'QueryErrors' => 
                    array (
                      'description' => '查询失败的详情。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '查询失败的详情。

当`Behavior`取值为`QueryError`时，返回该信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ErrorMessage' => 
                          array (
                            'description' => '错误详情。',
                            'type' => 'string',
                            'example' => 'ALIYUN::ECS::InstanceGroup',
                          ),
                          'ResourceName' => 
                          array (
                            'description' => '资源名称。',
                            'type' => 'string',
                            'example' => 'MyECS',
                          ),
                          'ResourceType' => 
                          array (
                            'description' => '资源类型。',
                            'type' => 'string',
                            'example' => 'InstanceType is needed while query DataDisk',
                          ),
                        ),
                      ),
                    ),
                    'OriginalConstraints' => 
                    array (
                      'description' => '原始约束信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '原始约束信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ResourceName' => 
                          array (
                            'description' => '模板中定义的资源名称。',
                            'type' => 'string',
                            'example' => 'MyECS',
                          ),
                          'AllowedValues' => 
                          array (
                            'description' => '参数的取值列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '参数的取值。',
                              'type' => 'any',
                              'example' => 'cn-hangzhou-a',
                            ),
                          ),
                          'ResourceType' => 
                          array (
                            'description' => '资源类型。',
                            'type' => 'string',
                            'example' => 'ALIYUN::ECS::InstanceGroup
',
                          ),
                          'PropertyName' => 
                          array (
                            'description' => '属性名称。',
                            'type' => 'string',
                            'example' => 'ZoneId',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9816785B-BCF8-514D-8B76-C1EC2BC954FC\\",\\n  \\"ParameterConstraints\\": [\\n    {\\n      \\"ParameterKey\\": \\"ZoneInfo\\",\\n      \\"Type\\": \\"String\\",\\n      \\"AllowedValues\\": [\\n        \\"cn-hangzhou-h\\"\\n      ],\\n      \\"Behavior\\": \\"NoLimit\\",\\n      \\"BehaviorReason\\": \\"No resource property refer to the parameter\\",\\n      \\"AssociationParameterNames\\": [\\n        \\"InstanceType\\"\\n      ],\\n      \\"IllegalValueByParameterConstraints\\": [\\n        \\"cn-hangzhou-h\\"\\n      ],\\n      \\"IllegalValueByRules\\": [\\n        \\"cn-hangzhou-h\\"\\n      ],\\n      \\"NotSupportResources\\": [\\n        {\\n          \\"ResourceType\\": \\"ALIYUN::ECS::InstanceGroup\\",\\n          \\"PropertyName\\": \\"InstanceName\\"\\n        }\\n      ],\\n      \\"QueryErrors\\": [\\n        {\\n          \\"ErrorMessage\\": \\"ALIYUN::ECS::InstanceGroup\\",\\n          \\"ResourceName\\": \\"MyECS\\",\\n          \\"ResourceType\\": \\"InstanceType is needed while query DataDisk\\"\\n        }\\n      ],\\n      \\"OriginalConstraints\\": [\\n        {\\n          \\"ResourceName\\": \\"MyECS\\",\\n          \\"AllowedValues\\": [\\n            \\"cn-hangzhou-a\\"\\n          ],\\n          \\"ResourceType\\": \\"ALIYUN::ECS::InstanceGroup\\\\n\\",\\n          \\"PropertyName\\": \\"ZoneId\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetTemplateParameterConstraintsResponse>\\n    <RequestId>9816785B-BCF8-514D-8B76-C1EC2BC954FC</RequestId>\\n    <ParameterConstraints>\\n        <ParameterKey>ZoneInfo</ParameterKey>\\n        <Type>String</Type>\\n        <AllowedValues>cn-hangzhou-i</AllowedValues>\\n        <AllowedValues>cn-hangzhou-k</AllowedValues>\\n        <AllowedValues>cn-hangzhou-d</AllowedValues>\\n        <AssociationParameterNames>InstanceType</AssociationParameterNames>\\n        <IllegalValueByParameterConstraints>cn-hangzhou-h</IllegalValueByParameterConstraints>\\n        <IllegalValueByRules>cn-hangzhou-h</IllegalValueByRules>\\n    </ParameterConstraints>\\n</GetTemplateParameterConstraintsResponse>","errorExample":""}]',
      'title' => '获取模版参数约束',
      'description' => '### 使用说明  

本文将提供一个示例，查询杭州地域模板`{
  "ROSTemplateFormatVersion": "2015-09-01",
  "Parameters": {
    "ZoneInfo": {
      "Type": "String"
    },
    "InstanceType": {
      "Type": "String"
    }
  },
  "Resources": {
    "ECS": {
      "Type": "ALIYUN::ECS::Instance",
      "Properties": {
        "ZoneId": {
          "Ref": "ZoneInfo"
        },
        "InstanceType": {
          "Ref": "InstanceType"
        }
      }
    }
  }
}`中参数`ZoneInfo`的取值。

关于本接口支持查询的参数和模板内容，请参见[参数约束查询](~~432820~~)。',
    ),
    'SetTemplatePermission' => 
    array (
      'path' => '/V2/SetTemplatePermission',
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
          'name' => 'ShareOption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享选项。

取值：

- ShareToAccounts：共享给其他阿里云账号。
- CancelSharing：取消共享。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ShareToAccounts',
          ),
        ),
        1 => 
        array (
          'name' => 'VersionOption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享版本选项。当ShareOption为ShareToAccounts时生效。

取值：

- AllVersions（默认值）：共享模板所有版本。
- Latest：只共享模板最新版本。模板版本增加时，共享的版本也随之变化，始终保持最新版本。
- Current：只共享模板当前版本。模板版本增加时，共享的版本不变。
- Specified：只共享模板指定的单个版本。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Specified',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享的模板版本。当ShareOption为ShareToAccounts，且VersionOption为Specified时生效。

取值范围：v1~v100。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'v1',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        4 => 
        array (
          'name' => 'AccountIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '共享或取消共享的阿里云账号。  
N的取值范围：1~5。

> - 不支持为同一阿里云账号和阿里云账号中的RAM用户共享或取消共享模板。  
> - 当ShareOption为CancelSharing时，支持指定星号（*），表示取消所有共享。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '共享或取消共享的阿里云账号。  
N的取值范围：1~5。

> - 不支持为同一阿里云账号和阿里云账号中的RAM用户共享或取消共享模板。  
> - 当ShareOption为CancelSharing时，支持指定星号（*），表示取消所有共享。',
              'type' => 'string',
              'required' => false,
              'example' => '100406424347****',
            ),
            'required' => true,
            'example' => '151266687691****',
            'maxItems' => 5,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\"\\n}","errorExample":""},{"type":"xml","example":"<SetTemplatePermissionResponse>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n</SetTemplatePermissionResponse>","errorExample":""}]',
      'title' => '共享模板或取消共享模板',
      'summary' => '为指定模板设置共享或取消共享。',
      'description' => '本文将提供一个示例，将ID为`5ecd1e10-b0e9-4389-a565-e4c15efc****`的模板共享给ID为`151266687691****`的阿里云账号。

> 阿里云账号`151266687691****`可以授权RAM用户使用共享模板。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | TemplateBeingProcessed |Template { ID } is being processed, retry later.|模板正在处理中，稍后再试。ID为模板ID。|
| 404 | TemplateNotFound |The Tempalte ({ ID }) could not be found. |模板不存在。ID为模板ID。 |
| 404 | TemplateNotFound |The Template { ID } with version { version } could not be found. |模板或指定版本不存在。ID为模板ID，version为模板版本。 |',
    ),
    'GetTemplateEstimateCost' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/stack-policy/demo、oss://ros/stack-policy/demo?RegionId=cn-hangzhou）中的模板，模板的最大长度为524,288个字节。如未指定OSS地域，默认与RegionId取值相同。 


> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId和TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros-template/demo',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板主体的结构。长度为1~524,288个字节。如果长度较长，则建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免因URL过长而导致请求失败。

> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId和TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'ROSTemplateFormatVersion: \'2015-09-01\'\\nResources:\\n  vpc:\\n    Type: ALIYUN::ECS::VPC',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。 该值由客户端生成，并且必须全局唯一。   
长度不超过64个字符。可包含英文字母、数字、短划线（-）和下划线（_）。   
更多信息，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        4 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。


> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId和TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        5 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板版本。仅在指定TemplateId时生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        6 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '参数。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '参数的名称。如果未指定模板中定义的参数名称和参数值，ROS将使用模板中指定的默认值。  
N的最大值为：200。
取值示例：

- Parameters.1.ParameterKey：`Name`。

- Parameters.2.ParameterKey：`Netmode`。


> Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Name',
                ),
                'ParameterValue' => 
                array (
                  'description' => '参数值。  
N的最大值为：200。
取值示例：

- Parameters.1.ParameterValue：`DemoEip`。

- Parameters.2.ParameterValue：`public`。


> Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'DemoEip',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        7 => 
        array (
          'name' => 'TemplateScratchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景ID。

关于如何获取资源场景ID，请参见[ListTemplateScratches](~~363050~~)。

> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId和TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'ts-aa9c62feab844a6b****',
          ),
        ),
        8 => 
        array (
          'name' => 'TemplateScratchRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景所属的地域ID，默认与RegionId取值相同。

您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        9 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。

当填写此参数时，表示查询变配场景的预估价格。

假设指定资源栈中仅有一个ECS实例，且规格是ecs.s6-c1m2.large。询价使用的新模板将规格改为ecs.s6-c1m1.small（降配），并新增一个RDS实例。则询价结果为ECS实例变配价格（本例由于是降配，则是退款）和新购RDS实例的价格总和。',
            'type' => 'string',
            'required' => false,
            'example' => 'c754d2a4-28f1-46df-b557-9586173a****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6DEA36EF-C97D-5658-A4AC-4F5DB08D1A89',
              ),
              'Resources' => 
              array (
                'description' => '资源详情。',
                'type' => 'object',
                'example' => '{
  "NewEip": {
    "Type": "ALIYUN::VPC::EIP",
    "Success": true,
    "Result": {
      "Order": {
        "TaxAmount": 0.0,
        "Currency": "CNY",
        "RuleIds": [
          "102204102264****"
        ],
        "TradeAmount": 87.5,
        "OriginalAmount": 125.0,
        "DiscountAmount": 37.5
      },
      "OrderSupplement": {
        "ChargeType": "PrePaid",
        "Period": 1,
        "Quantity": 1,
        "PriceType": "Total",
        "PeriodUnit": "Month"
      },
      "InquiryType": "Buy",
      "Rules": {
        "Rule": [
          {
            "RuleDescId": "102204102264****",
            "Name": "合同优惠_整单_7.0折"
          }
        ]
      }
    }
  }
}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6DEA36EF-C97D-5658-A4AC-4F5DB08D1A89\\",\\n  \\"Resources\\": {\\n    \\"NewEip\\": {\\n      \\"Type\\": \\"ALIYUN::VPC::EIP\\",\\n      \\"Success\\": true,\\n      \\"Result\\": {\\n        \\"Order\\": {\\n          \\"TaxAmount\\": 0,\\n          \\"Currency\\": \\"CNY\\",\\n          \\"RuleIds\\": [\\n            \\"102204102264****\\"\\n          ],\\n          \\"TradeAmount\\": 87.5,\\n          \\"OriginalAmount\\": 125,\\n          \\"DiscountAmount\\": 37.5\\n        },\\n        \\"OrderSupplement\\": {\\n          \\"ChargeType\\": \\"PrePaid\\",\\n          \\"Period\\": 1,\\n          \\"Quantity\\": 1,\\n          \\"PriceType\\": \\"Total\\",\\n          \\"PeriodUnit\\": \\"Month\\"\\n        },\\n        \\"InquiryType\\": \\"Buy\\",\\n        \\"Rules\\": {\\n          \\"Rule\\": [\\n            {\\n              \\"RuleDescId\\": \\"102204102264****\\",\\n              \\"Name\\": \\"合同优惠_整单_7.0折\\"\\n            }\\n          ]\\n        }\\n      }\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTemplateEstimateCostResponse>\\n    <RequestId>6DEA36EF-C97D-5658-A4AC-4F5DB08D1A89</RequestId>\\n    <Resources>\\n        <NewEip>\\n            <Type>ALIYUN::VPC::EIP</Type>\\n            <Success>true</Success>\\n            <Result>\\n                <Order>\\n                    <TaxAmount>0</TaxAmount>\\n                    <TradeCycleAmount>0</TradeCycleAmount>\\n                    <RiCycleAmount>0</RiCycleAmount>\\n                    <Currency>CNY</Currency>\\n                    <TotalCostAmount>109.37</TotalCostAmount>\\n                    <RuleIds>102204102264****</RuleIds>\\n                    <TradeAmount>109.37</TradeAmount>\\n                    <DiscountCycleAmount>0</DiscountCycleAmount>\\n                    <OriginalAmount>125</OriginalAmount>\\n                    <DiscountAmount>15.63</DiscountAmount>\\n                </Order>\\n                <OrderSupplement>\\n                    <ChargeType>PrePaid</ChargeType>\\n                    <Period>1</Period>\\n                    <Quantity>1</Quantity>\\n                    <PriceType>Total</PriceType>\\n                    <PeriodUnit>Month</PeriodUnit>\\n                </OrderSupplement>\\n                <OrderDetails>\\n                    <ModuleCode>bandwidth</ModuleCode>\\n                    <ModuleName>带宽</ModuleName>\\n                    <Currency>CNY</Currency>\\n                    <TradeAmount>109.37</TradeAmount>\\n                    <OriginalAmount>125</OriginalAmount>\\n                    <DiscountAmount>15.63</DiscountAmount>\\n                </OrderDetails>\\n                <Rules>\\n                    <Rule>\\n                        <RuleDescId>102204102264****</RuleDescId>\\n                        <Name>合同优惠_整单_8.750折</Name>\\n                    </Rule>\\n                </Rules>\\n            </Result>\\n        </NewEip>\\n    </Resources>\\n</GetTemplateEstimateCostResponse>","errorExample":""}]',
      'title' => '查询模板中创建资源的预估价格',
      'summary' => '通过指定模板和模板参数查询创建资源栈的预估价格。',
      'description' => '- ROS模板支持询价的资源，请参见[预估资源价格](~~203165~~)的**支持询价的资源类型**章节。

- Terraform模板支持询价的资源，请参见[Terraform支持的功能和资源](~~184389~~)的**ROS资源支持情况**章节。

本文将提供一个示例，查询模板中创建的EIP资源的预估价格。
示例如下：
```
{
  "ROSTemplateFormatVersion": "2015-09-01",
  "Parameters": {
    "Isp": {
      "Type": "String",
      "Default": "BGP"
    },
    "Name": {
      "Type": "String",
      "Default": "test"
    },
    "Netmode": {
      "Type": "String",
      "Default": "public"
    },
    "Bandwidth": {
      "Type": "Number",
      "Default": 5
    }
  },
  "Resources": {
    "NewEip": {
      "Type": "ALIYUN::VPC::EIP",
      "Properties": {
        "InstanceChargeType": "Prepaid",
        "PricingCycle": "Month",
        "Isp": {
          "Ref": "Isp"
        },
        "Period": 1,
        "DeletionProtection": false,
        "AutoPay": false,
        "Name": {
          "Ref": "Name"
        },
        "InternetChargeType": "PayByTraffic",
        "Netmode": {
          "Ref": "Netmode"
        },
        "Bandwidth": {
          "Ref": "Bandwidth"
        }
      }
    }
  }
}
```',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => 'Resources各参数含义如下所示。

| 名称 | 类型 | 示例值| 描述 |
| ------------- | ------------- | ------------- | ------------- |
| Order | | | 订单信息。 |
| - Currency | String |CNY | 货币单位。取值：<br>CNY：该值仅适用于中国站。<br>USD：该值仅适用于国际站。 |
| - OriginalAmount | Float | 125.0 | 原价。 |
| - DiscountAmount | Float | 15.63 | 抵扣金额。 |
| - TradeAmount | Float | 109.37 | 最终价，为原价减去折扣。 |
| - TaxAmount | Float |0.0 | 可选税额。 |
| - Coupons | Array | {"Coupon": []} | 可选促销。 |
| - RuleIds | Array | [102204102264****] | 活动规则列表。 |
| InquiryType | String |Buy | 询价类型。取值：<br>Buy：新购询价。<br>ModificationBuy：变配询价。 |
| Rules | | | 活动规则。 |
| - Rule | | | 活动规则。 |
| - - Name | String | 合同优惠\\_整单\\_8.750 折 | 活动规则名称。 |
| - - RuleDescId | Long | 102204102264\\*\\*\\*\\* | 活动规则ID。 |
| OrderSupplement | | | 订单补充信息。 |
| - AutoRenew | Boolean | false | 是否自动续费。取值：<br>true：自动续费。<br>false：不自动续费。 |
| - ChargeType | String | PrePaid | 付费方式。 |
| - Period | Long |1 | 计费时长。 |
| - PeriodUnit | String | Month | 包年包月计费方式的时长单位。取值：<br>Year：年。<br>Month：月。 |
| - PriceType | String | Total | 价格类型。 |
| - Quantity | Long |1 | 数量。 |',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 |CircularDependency |Circular Dependency Found: {reason}. |模板包含循环引用。reason为具体原因。 |
| 400 |InvalidSchema |{reason}. |模板格式不正确。reason为具体原因。 |
| 400 |InvalidTemplateAttribute |The Referenced Attribute ({resource} {name}) is incorrect. |模板包含不正确的资源属性（输出）引用。resource为资源名，name为属性名。 |
| 400 |InvalidTemplatePropertyType |The specified value type of ({resource} {section}) is incorrect. |模板资源定义中的字段类型不正确。resource为资源名，section为字段名。 |
| 400 |InvalidTemplateReference |The specified reference "{name}" (in {referencer}) is incorrect. |模板包含不正确的引用。name为引用名，referencer为引用者。 |
| 400 |InvalidTemplateSection |The template section is invalid: {section}. |模板包含无效的字段。section为字段名。 |
| 400 |InvalidTemplateVersion |The template version is invalid: {reason}. |模板版本不正确。reason为具体原因。 |
| 400 |StackValidationFailed |{reason}. |资源栈校验失败。reason为具体原因。 |
| 400 |UnknownUserParameter |The Parameter ({name}) was not defined in template. |传递的参数在模板中未定义。name为参数名。 |
| 400 |UserParameterMissing |The Parameter {name} was not provided. |参数在模板中已定义，但未传递值。name为参数名。 |
| 404 |TemplateNotFound |The Template ({ ID }) could not be found. |模板不存在。ID为模板ID。 |
| 404 |TemplateNotFound |The Template { ID } with version { version } could not be found. |模板或指定版本不存在。ID为模板ID，version为模板版本。 |',
    ),
    'GetTemplateSummary' => 
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
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。

您必须且仅能指定TemplateBody、TemplateURL、TemplateId、StackId、ChangeSetId、StackGroupName其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板的结构。长度为1~524,288个字节。   
如果长度较大，建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免URL过长而导致请求失败。   
您必须且仅能指定TemplateBody、TemplateURL、TemplateId、StackId、ChangeSetId、StackGroupName其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"ROSTemplateFormatVersion":"2015-09-01"}',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板所属资源栈或资源栈组的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。

仅在指定StackId、ChangeSetId或StackGroupName时生效。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。

您仅能指定TemplateBody、TemplateURL、TemplateId、StackId、ChangeSetId、StackGroupName其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        4 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/template/demo、oss://ros/template/demo?RegionId=cn-hangzhou）中的模板，模板最大为524,288个字节。   

> 如果OSS地域未指定，默认与接口参数RegionId相同。  

您必须且仅能指定TemplateBody、TemplateURL、TemplateId、StackId、ChangeSetId、StackGroupName其中一个参数。

URL的最大长度为：1024个字节。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros/template/demo',
          ),
        ),
        5 => 
        array (
          'name' => 'ChangeSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更改集ID。

您必须且仅能指定TemplateBody、TemplateURL、TemplateId、StackId、ChangeSetId、StackGroupName其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '1f6521a4-05af-4975-afe9-bc4b45ad****',
          ),
        ),
        6 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板版本。当您设置TemplateId参数时，本参数生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        7 => 
        array (
          'name' => 'StackGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组名称。

您必须且仅能指定TemplateBody、TemplateURL、TemplateId、StackId、ChangeSetId、StackGroupName其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'my-stack-group',
          ),
        ),
        8 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '模板中已定义的参数。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '模板中已定义的参数的名称。如果您未指定参数的名称和值时，ROS将使用模板中指定的默认值。

N最大值为200。

> Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'InstanceId',
                ),
                'ParameterValue' => 
                array (
                  'description' => '模板中已定义的参数的取值。

N最大值为200。

> Parameters为可选参数。如果需要指定Parameters，则Parameters.N.ParameterKey和Parameters.N.ParameterValue必须同时指定。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'i-rotp2e20whfrs2****',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        9 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该参数值由客户端生成，并且必须全局唯一。   
长度不超过64个字符。可包含英文字母、数字、短划线（-）和下划线（_）。  
更多信息，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
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
              'ResourceTypes' => 
              array (
                'description' => '模板中用到的所有资源类型。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '模板中用到的所有资源类型。',
                  'type' => 'string',
                  'example' => '["ALIYUN::ECS::VPC"]',
                ),
              ),
              'Description' => 
              array (
                'description' => '资源栈模板的描述信息。',
                'type' => 'string',
                'example' => 'No description',
              ),
              'Parameters' => 
              array (
                'description' => '参数声明的列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '参数声明的列表。',
                  'type' => 'object',
                  'example' => '[{"Description":"", "Label":"Name", "NoEcho":"false", "ParameterKey":"Name", "Type":"String"}]',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6',
              ),
              'Version' => 
              array (
                'description' => '模板版本。',
                'type' => 'string',
                'example' => '2015-09-01',
              ),
              'Metadata' => 
              array (
                'description' => '模板中定义的元数据。',
                'type' => 'object',
                'example' => '{"key": "value"}',
              ),
              'ResourceIdentifierSummaries' => 
              array (
                'description' => '资源标识符摘要的列表。  
摘要描述了导入操作的目标资源以及在导入过程中用于标识目标资源的属性。 例如：VpcId是ALIYUN::ECS::VPC资源的标识符属性。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。  

> 该资源类型支持资源导入。',
                      'type' => 'string',
                      'example' => 'ALIYUN::ECS::VPC',
                    ),
                    'LogicalResourceIds' => 
                    array (
                      'description' => '模板中类型为ResourceType的所有资源的逻辑ID。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '模板中类型为ResourceType的所有资源的逻辑ID。',
                        'type' => 'string',
                        'example' => '["Vpc"]',
                      ),
                    ),
                    'ResourceIdentifiers' => 
                    array (
                      'description' => '资源属性。用来标识目标资源。 例如：VpcId是ALIYUN::ECS::VPC资源的标识符属性。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '资源属性。用来标识目标资源。 例如：VpcId是ALIYUN::ECS::VPC资源的标识符属性。',
                        'type' => 'string',
                        'example' => '["VpcId"]',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResourceTypes\\": [\\n    \\"[\\\\\\"ALIYUN::ECS::VPC\\\\\\"]\\"\\n  ],\\n  \\"Description\\": \\"No description\\",\\n  \\"Parameters\\": [\\n    [\\n      {\\n        \\"Description\\": \\"\\",\\n        \\"Label\\": \\"Name\\",\\n        \\"NoEcho\\": \\"false\\",\\n        \\"ParameterKey\\": \\"Name\\",\\n        \\"Type\\": \\"String\\"\\n      }\\n    ]\\n  ],\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6\\",\\n  \\"Version\\": \\"2015-09-01\\",\\n  \\"Metadata\\": {\\n    \\"key\\": \\"value\\"\\n  },\\n  \\"ResourceIdentifierSummaries\\": [\\n    {\\n      \\"ResourceType\\": \\"ALIYUN::ECS::VPC\\",\\n      \\"LogicalResourceIds\\": [\\n        \\"[\\\\\\"Vpc\\\\\\"]\\"\\n      ],\\n      \\"ResourceIdentifiers\\": [\\n        \\"[\\\\\\"VpcId\\\\\\"]\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetTemplateSummary>\\n\\t\\t<Description>No description</Description>\\n\\t\\t<Metadata />\\n\\t\\t<Parameters>\\n\\t\\t\\t<Description>Description of the vpc, [2, 256] characters. Do not fill or empty, the default is empty.</Description>\\n\\t\\t\\t<Label>Description</Label>\\n\\t\\t\\t<NoEcho>false</NoEcho>\\n\\t\\t\\t<ParameterKey>Description</ParameterKey>\\n\\t\\t\\t<Type>String</Type>\\n\\t\\t</Parameters>\\n\\t\\t<Parameters>\\n\\t\\t\\t<Description>Tags to attach to vpc. Max support 20 tags to add during create vpc. Each tag with two properties Key and Value, and Key is required.</Description>\\n\\t\\t\\t<Label>Tags</Label>\\n\\t\\t\\t<MaxLength>20</MaxLength>\\n\\t\\t\\t<NoEcho>false</NoEcho>\\n\\t\\t\\t<ParameterKey>Tags</ParameterKey>\\n\\t\\t\\t<Type>Json</Type>\\n\\t\\t</Parameters>\\n\\t\\t<Parameters>\\n\\t\\t\\t<Description>IPv6 network cidr of the VPC.</Description>\\n\\t\\t\\t<Label>Ipv6CidrBlock</Label>\\n\\t\\t\\t<MinLength>1</MinLength>\\n\\t\\t\\t<NoEcho>false</NoEcho>\\n\\t\\t\\t<ParameterKey>Ipv6CidrBlock</ParameterKey>\\n\\t\\t\\t<Type>String</Type>\\n\\t\\t</Parameters>\\n\\t\\t<Parameters>\\n\\t\\t\\t<AllowedValues>True</AllowedValues>\\n\\t\\t\\t<AllowedValues>true</AllowedValues>\\n\\t\\t\\t<AllowedValues>False</AllowedValues>\\n\\t\\t\\t<AllowedValues>false</AllowedValues>\\n\\t\\t\\t<Default>false</Default>\\n\\t\\t\\t<Description>Whether to enable an IPv6 network cidr, the value is:False (default): not turned on.True: On.</Description>\\n\\t\\t\\t<Label>EnableIpv6</Label>\\n\\t\\t\\t<NoEcho>false</NoEcho>\\n\\t\\t\\t<ParameterKey>EnableIpv6</ParameterKey>\\n\\t\\t\\t<Type>Boolean</Type>\\n\\t\\t</Parameters>\\n\\t\\t<Parameters>\\n\\t\\t\\t<Description>Resource group id.</Description>\\n\\t\\t\\t<Label>ResourceGroupId</Label>\\n\\t\\t\\t<NoEcho>false</NoEcho>\\n\\t\\t\\t<ParameterKey>ResourceGroupId</ParameterKey>\\n\\t\\t\\t<Type>String</Type>\\n\\t\\t</Parameters>\\n\\t\\t<Parameters>\\n\\t\\t\\t<Description>Display name of the vpc instance, [2, 128] English or Chinese characters, must start with a letter or Chinese in size, can contain numbers, \'_\' or \'.\', \'-\'</Description>\\n\\t\\t\\t<Label>VpcName</Label>\\n\\t\\t\\t<NoEcho>false</NoEcho>\\n\\t\\t\\t<ParameterKey>VpcName</ParameterKey>\\n\\t\\t\\t<Type>String</Type>\\n\\t\\t</Parameters>\\n\\t\\t<Parameters>\\n\\t\\t\\t<Description>\\n\\t\\t\\t\\tThe IP address range of the VPC in the CIDR block form. You can use the following IP address ranges and their subnets:\\n\\t\\t\\t\\t10.0.0.0/8\\n\\t\\t\\t\\t172.16.0.0/12 (Default)\\n\\t\\t\\t    192.168.0.0/16</Description>\\n\\t\\t\\t<Label>CidrBlock</Label>\\n\\t\\t\\t<NoEcho>false</NoEcho>\\n\\t\\t\\t<ParameterKey>CidrBlock</ParameterKey>\\n\\t\\t\\t<Type>String</Type>\\n\\t\\t</Parameters>\\n\\t\\t<RequestId>FD70598C-3F4B-4E66-9A76-67F2E2D36938</RequestId>\\n\\t\\t<ResourceIdentifierSummaries>\\n\\t\\t\\t<LogicalResourceIds>Vpc</LogicalResourceIds>\\n\\t\\t\\t<ResourceIdentifiers>VpcId</ResourceIdentifiers>\\n\\t\\t\\t<ResourceType>ALIYUN::ECS::VPC</ResourceType>\\n\\t\\t</ResourceIdentifierSummaries>\\n\\t\\t<ResourceTypes>ALIYUN::ECS::VPC</ResourceTypes>\\n\\t\\t<Version>2015-09-01</Version>\\n</GetTemplateSummary>\\n","errorExample":""}]',
      'title' => '获取新模板或者现有模板的信息',
      'summary' => '通过指定模板、资源栈、资源栈组、更改集其中任意信息查询模板资源详情。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | StackValidationFailed | {reason}. |资源栈校验失败。reason为具体原因。|
| 404 | ChangeSetNotFound | The ChangeSet ({name}) of Stack ({stack}) could not be found. |更改集不存在。name为更改集名称或ID，stack为资源栈名称或ID。|
| 404 | ChangeSetNotFound | The ChangeSet {ID} could not be found. |更改集不存在。ID为更改集ID。|
| 404 | StackNotFound | The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。|
| 404 | TemplateNotFound | The Tempalte ({ ID }) could not be found. |模板不存在。ID为模板ID。|
| 404 | TemplateNotFound |The Template { ID } with version { version } could not be found. |模板或指定版本不存在。ID为模板ID，version为模板版本。 |',
    ),
    'ValidateTemplate' => 
    array (
      'summary' => '通过指定模板地址或模板内容验证将要创建资源栈的模板。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '12727',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURErosU14OAJ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于HTTP Web服务器或阿里云OSS存储空间（例如：oss://ros/template/demo、oss://ros/template/demo?RegionId=cn-hangzhou）中的模板，模板最大为524,288个字节。   

> 如果OSS地域未指定，默认与接口参数RegionId相同。
   
您可以指定TemplateBody或TemplateURL参数，但不能同时指定。   
URL的最大长度为：1024个字节。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros/template/demo',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈模板所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板主体的结构。长度为1~524,288个字节。   
如果长度较大，建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免URL过长而导致请求失败。   
您可以指定TemplateBody或TemplateURL参数，但不能同时指定。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"ROSTemplateFormatVersion":"2015-09-01"}',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。 

长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。 

更多信息，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        4 => 
        array (
          'name' => 'ValidationOption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对模板开启额外校验。取值：

- None（默认值）：不开启额外校验。

- EnableTerraformValidation：对于Terraform类型模板，使用Terraform CLI的`terraform validate`命令开启额外校验。

- EnableFastTerraformValidation：对于Terraform类型模板，使用一种类似于Terraform CLI的`terraform validate`命令开启额外校验。
  
> EnableFastTerraformValidation与EnableTerraformValidation相比速度较快，但校验完整性稍有不足。',
            'type' => 'string',
            'required' => false,
            'example' => 'None',
          ),
        ),
        5 => 
        array (
          'name' => 'UpdateInfoOptions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '更新信息选项列表。列表最大长度为2。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '更新信息选项，用于控制资源栈更新的相关信息的生成。取值：

- Disabled：不生成资源栈更新的相关信息。

- ConsiderCondition：生成资源栈更新的相关信息时，考虑条件的影响。建议使用该选项。否则，条件会进行计算，计算时涉及的参数的取值为参数的默认值或null。

- EnableReplacement：生成资源栈更新的相关信息时，考虑替换更新的影响。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'ConsiderCondition' => 'ConsiderCondition',
                'EnableReplacement' => 'EnableReplacement',
                'Disabled' => 'Disabled',
              ),
              'example' => 'ConsiderCondition',
            ),
            'required' => false,
            'maxItems' => 2,
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
              'Description' => 
              array (
                'description' => '描述此资源栈模板的相关信息。',
                'type' => 'string',
                'example' => 'No description',
              ),
              'Parameters' => 
              array (
                'description' => '输入参数列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '输入参数。  
输入参数中，定义了通过此模板创建资源栈时需要指定的参数，这些参数用来指定每次资源栈创建的细节，例如：用户名、密码、环境相关的ECS规格等。',
                  'type' => 'object',
                  'example' => '[{"Description": "", "Label": "param_integer", "NoEcho": "false", "ParameterKey": "param_integer", "Type": "Number"},{ "Description": "", "Label": "param_float", "NoEcho": "false", "ParameterKey": "param_float", "Type": "Number"}]',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
              'Outputs' => 
              array (
                'description' => '模板输出列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OutputKey' => 
                    array (
                      'description' => '模板输出名称。',
                      'type' => 'string',
                      'example' => 'instance_id',
                    ),
                    'Description' => 
                    array (
                      'description' => '模板输出描述。',
                      'type' => 'string',
                      'example' => 'The instance ID of my ECS.',
                    ),
                    'Label' => 
                    array (
                      'description' => '模板输出别名。',
                      'type' => 'string',
                      'example' => 'Instance ID',
                    ),
                  ),
                ),
              ),
              'ResourceTypes' => 
              array (
                'description' => '模板中用到的资源类型信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Resources' => 
                  array (
                    'description' => '普通资源类型列表（已去重）。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '普通资源类型。',
                      'type' => 'string',
                      'example' => 'ALIYUN::ECS::InstanceGroup',
                    ),
                  ),
                  'DataSources' => 
                  array (
                    'description' => '数据源资源类型列表（已去重）。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据源资源类型。',
                      'type' => 'string',
                      'example' => 'DATASOURCE::VPC::Vpcs',
                    ),
                  ),
                ),
              ),
              'Resources' => 
              array (
                'description' => '模板中定义的普通资源列表。

> - 对于ROS模板，资源定义中包含`Count`字段的资源不会展开。
>- 对于Terraform模板，资源定义中包含`count`或`for_each`的资源不会展开。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceType' => 
                    array (
                      'description' => '普通资源类型。',
                      'type' => 'string',
                      'example' => 'ALIYUN::ECS::InstanceGroup',
                    ),
                    'ResourcePath' => 
                    array (
                      'description' => '普通资源路径。通常与资源名称相同。
',
                      'type' => 'string',
                      'example' => 'server',
                    ),
                    'LogicalResourceIdPattern' => 
                    array (
                      'description' => '普通资源逻辑ID的字符串匹配模式。

对于ROS模板，存在如下两种情况：
- 资源定义中不包含`Count`字段：假定模板中定义的资源名称为`server`，则该字段取值为`server`，对应的`ResourcePath`为`server`。
- 资源定义中包含`Count`字段：假定模板中定义的资源名称为`server`，则该字段取值为`server[*]`，对应的`ResourcePath`为`server`。

对于Terraform模板中的资源和[模块](https://www.terraform.io/language/modules)，存在如下两种情况：
- 定义中不包含[`count`](https://www.terraform.io/language/meta-arguments/count)和[`for_each`](https://www.terraform.io/language/meta-arguments/for_each)：假定名称为`server`，则该字段取值为`server`，对应的`ResourcePath`为`server`。
- 定义中包含[`count`](https://www.terraform.io/language/meta-arguments/count)或[`for_each`](https://www.terraform.io/language/meta-arguments/for_each)：假定名称为`server`，则该字段取值为`server[*]`，对应的`ResourcePath`为`server`。


Terraform模板示例如下：
- 顶层模块中的资源：
    - `server`：未使用`count`和`for_each`，对应的`ResourcePath`为`server`。
    - `server[*]`：使用了`count`或`for_each`，对应的`ResourcePath`为`server`。
- 子模块中的资源：
    - `app.server`：`app`模块未使用`count`和`for_each`，`server`资源未使用`count`和`for_each`，对应的`ResourcePath`为`app.server`。
    - `app.server[*]`：`app`模块未使用`count`和`for_each`，`server`资源使用了`count`或`for_each`，对应的`ResourcePath`为`app.server`。
    - `app[*].server`：`app`模块使用了`count`或`for_each`，`server`资源未使用`count`和`for_each`，对应的`ResourcePath`为`app.server`。
    - `app[*].server[*]`：`app`模块使用了`count`或`for_each`，`server`资源使用了`count`或`for_each`，对应的`ResourcePath`为`app.server`。
    - `app.app_group[*].server`：`app`模块未使用`count`和`for_each`，`app_group`模块使用了`count`或`for_each`（`app_group`模块是`app`模块的子模块），`server`资源未使用`count`和`for_each`，对应的`ResourcePath`为`app.app_group.server`。
',
                      'type' => 'string',
                      'example' => 'server',
                    ),
                  ),
                ),
              ),
              'UpdateInfo' => 
              array (
                'description' => '资源栈更新的相关信息。若UpdateInfoOptions包含Disabled，则不返回。',
                'type' => 'object',
                'properties' => 
                array (
                  'ParametersAllowedToBeModified' => 
                  array (
                    'description' => '允许修改的参数的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '允许修改的参数。更新资源栈时，若模板保持不变，仅修改参数取值不会引发校验错误。',
                      'type' => 'string',
                      'example' => 'param1',
                    ),
                  ),
                  'ParametersCauseInterruptionIfModified' => 
                  array (
                    'description' => '一定会引发资源中断的参数的列表。

> - 目前仅支持少量资源类型。
> - 仅适用于更新ROS类型资源栈。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '一定会引发资源中断的参数。更新资源栈时，若模板保持不变，仅修改参数取值一定会引发资源中断。',
                      'type' => 'string',
                      'example' => 'param1',
                    ),
                  ),
                  'ParametersConditionallyAllowedToBeModified' => 
                  array (
                    'description' => '可能允许修改的参数的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可能允许修改的参数。更新资源栈时，若模板保持不变，仅修改参数取值，修改该参数是否引发校验错误，取决于参数的取值。',
                      'type' => 'string',
                      'example' => 'param2',
                    ),
                  ),
                  'ParametersConditionallyCauseInterruptionIfModified' => 
                  array (
                    'description' => '可能会引发资源中断的参数的列表。

> - 目前仅支持少量资源类型。
> - 仅适用于更新ROS类型资源栈。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可能会引发资源中断的参数。更新资源栈时，若模板保持不变，仅修改参数取值可能会引发资源中断，取决于参数的取值和资源的更新行为。',
                      'type' => 'string',
                      'example' => 'param2',
                    ),
                  ),
                  'ParametersNotAllowedToBeModified' => 
                  array (
                    'description' => '不允许修改的参数的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '不允许修改的参数。更新资源栈时，若模板保持不变，仅修改参数取值一定会引发校验错误。',
                      'type' => 'string',
                      'example' => 'param3',
                    ),
                  ),
                  'ParametersUncertainlyAllowedToBeModified' => 
                  array (
                    'description' => '不确定是否允许修改的参数的列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '不确定是否允许修改的参数。更新资源栈时，若模板保持不变，仅修改参数取值，运行时才能确定修改该参数是否会引发校验错误。',
                      'type' => 'string',
                      'example' => 'param4',
                    ),
                  ),
                  'ParametersUncertainlyCauseInterruptionIfModified' => 
                  array (
                    'description' => '不确定是否会引发资源中断的参数的列表。

> - 目前仅支持少量资源类型。
> - 仅适用于更新ROS类型资源栈。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '不确定是否会引发资源中断的参数。更新资源栈时，若模板保持不变，仅修改参数取值，运行时才能确定该参数是否会引发资源中断。',
                      'type' => 'string',
                      'example' => 'param4',
                    ),
                  ),
                  'ParametersCauseReplacementIfModified' => 
                  array (
                    'description' => '一定会引发资源替换更新的参数的列表。

> - 仅在UpdateInfoOptions包含EnableReplacement时返回。
> - 仅适用于更新ROS类型资源栈。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '一定会引发资源替换更新的参数。更新资源栈时，若模板保持不变，仅修改参数取值一定会引发资源替换更新。',
                      'type' => 'string',
                      'example' => 'param5',
                    ),
                  ),
                  'ParametersConditionallyCauseReplacementIfModified' => 
                  array (
                    'description' => '可能会引发资源替换更新的参数的列表。

> - 仅在UpdateInfoOptions包含EnableReplacement时返回。
> - 仅适用于更新ROS类型资源栈。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可能会引发资源替换更新的参数。更新资源栈时，若模板保持不变，仅修改参数取值可能会引发资源替换更新，取决于参数的取值。',
                      'type' => 'string',
                      'example' => 'param6',
                    ),
                  ),
                  'ParametersUncertainlyCauseReplacementIfModified' => 
                  array (
                    'description' => '不确定是否会引发资源替换更新的参数的列表。

> - 仅在UpdateInfoOptions包含EnableReplacement时返回。
> - 仅适用于更新ROS类型资源栈。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '不确定是否会引发资源替换更新的参数。更新资源栈时，若模板保持不变，仅修改参数取值，运行时才能确定该参数是否会引发资源替换更新。',
                      'type' => 'string',
                      'example' => 'param7',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Description\\": \\"No description\\",\\n  \\"Parameters\\": [\\n    [\\n      {\\n        \\"Description\\": \\"\\",\\n        \\"Label\\": \\"param_integer\\",\\n        \\"NoEcho\\": \\"false\\",\\n        \\"ParameterKey\\": \\"param_integer\\",\\n        \\"Type\\": \\"Number\\"\\n      },\\n      {\\n        \\"Description\\": \\"\\",\\n        \\"Label\\": \\"param_float\\",\\n        \\"NoEcho\\": \\"false\\",\\n        \\"ParameterKey\\": \\"param_float\\",\\n        \\"Type\\": \\"Number\\"\\n      }\\n    ]\\n  ],\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\",\\n  \\"Outputs\\": [\\n    {\\n      \\"OutputKey\\": \\"instance_id\\",\\n      \\"Description\\": \\"The instance ID of my ECS.\\",\\n      \\"Label\\": \\"Instance ID\\"\\n    }\\n  ],\\n  \\"ResourceTypes\\": {\\n    \\"Resources\\": [\\n      \\"ALIYUN::ECS::InstanceGroup\\"\\n    ],\\n    \\"DataSources\\": [\\n      \\"DATASOURCE::VPC::Vpcs\\"\\n    ]\\n  },\\n  \\"Resources\\": [\\n    {\\n      \\"ResourceType\\": \\"ALIYUN::ECS::InstanceGroup\\",\\n      \\"ResourcePath\\": \\"server\\",\\n      \\"LogicalResourceIdPattern\\": \\"server\\"\\n    }\\n  ],\\n  \\"UpdateInfo\\": {\\n    \\"ParametersAllowedToBeModified\\": [\\n      \\"param1\\"\\n    ],\\n    \\"ParametersCauseInterruptionIfModified\\": [\\n      \\"param1\\"\\n    ],\\n    \\"ParametersConditionallyAllowedToBeModified\\": [\\n      \\"param2\\"\\n    ],\\n    \\"ParametersConditionallyCauseInterruptionIfModified\\": [\\n      \\"param2\\"\\n    ],\\n    \\"ParametersNotAllowedToBeModified\\": [\\n      \\"param3\\"\\n    ],\\n    \\"ParametersUncertainlyAllowedToBeModified\\": [\\n      \\"param4\\"\\n    ],\\n    \\"ParametersUncertainlyCauseInterruptionIfModified\\": [\\n      \\"param4\\"\\n    ],\\n    \\"ParametersCauseReplacementIfModified\\": [\\n      \\"param5\\"\\n    ],\\n    \\"ParametersConditionallyCauseReplacementIfModified\\": [\\n      \\"param6\\"\\n    ],\\n    \\"ParametersUncertainlyCauseReplacementIfModified\\": [\\n      \\"param7\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ValidateTemplateResponse>\\n    <Description>No description</Description>\\n    <Parameters>\\n        <Description/>\\n        <Label>param_integer</Label>\\n        <NoEcho>false</NoEcho>\\n        <ParameterKey>param_integer</ParameterKey>\\n        <Type>Number</Type>\\n    </Parameters>\\n    <Parameters>\\n        <Description/>\\n        <Label>param_float</Label>\\n        <NoEcho>false</NoEcho>\\n        <ParameterKey>param_float</ParameterKey>\\n        <Type>Number</Type>\\n    </Parameters>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n    <Outputs>\\n        <OutputKey>instance_id</OutputKey>\\n        <Description>The instance ID of my ECS.</Description>\\n    </Outputs>\\n    <ResourceTypes>\\n        <Resources>ALIYUN::ECS::InstanceGroup</Resources>\\n        <DataSources>DATASOURCE::VPC::Vpcs</DataSources>\\n    </ResourceTypes>\\n</ValidateTemplateResponse>","errorExample":""}]',
      'title' => '验证将要创建资源栈的模板',
      'description' => '该接口不涉及用户数据，只对模板进行校验，无需进行RAM鉴权。

本文将提供一个示例，验证将要创建资源栈的模板，包含模板主体的文件的位置`TemplateURL`为`oss://ros/template/demo`。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| InvalidTemplate |{reason}. | 400 |模板不正确，reason为具体原因。 |
| IInvalidParameter |{reason}. | 400 |模板参数不正确，reason为具体原因。 |',
    ),
    'GenerateTemplatePolicy' => 
    array (
      'summary' => '通过指定模板生成模板所需的策略信息。',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/template/demo、oss://ros/template/demo?RegionId=cn-hangzhou）中的模板，模板最大为524,288个字节。

> 如果OSS地域未指定，默认与接口参数RegionId相同。

您仅能指定TemplateBody、TemplateURL、TemplateId其中一个参数。
URL的最大长度为：1024个字节。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros/template/demo',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板的结构。长度为1~524,288个字节。
如果长度较大，建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免URL过长而导致请求失败。  

您仅能指定TemplateBody、TemplateURL、TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"ROSTemplateFormatVersion":"2015-09-01"}',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。  
您仅能指定TemplateBody、TemplateURL、TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板版本。仅在指定TemplateId时生效。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'v1',
          ),
        ),
        4 => 
        array (
          'name' => 'OperationTypes',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要生成策略信息的操作类型。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要生成策略信息的操作类型。
取值：
- CreateStack：调用CreateStack创建资源栈。

- UpdateStack：调用UpdateStack更新资源栈。

- DeleteStack：调用DeleteStack删除资源栈。

- DetectStackDrift：调用DelectStackDrift对资源栈进行偏差检查。

- ListStackOperationRisks：调用ListStackOperationRisks并指定OperationType参数为DeleteStack来列出删除资源栈的风险。

- GetTemplateEstimateCost：调用GetTemplateEstimateCost查询模板中创建资源的预估价格。

- GetTemplateParameterConstraints：调用GetTemplateParameterConstraints查询模板参数的取值。

- ImportResourcesToStack：调用CreateChangeSet并指定ChangeSetType取值为IMPORT以将资源导入至资源栈中。

- SignalResource：向资源栈发送信号。

> 默认值为所有取值。
',
              'type' => 'string',
              'required' => false,
              'example' => '["CreateStack"]',
            ),
            'required' => false,
            'maxItems' => 9,
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
              'Policy' => 
              array (
                'description' => '权限策略信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Version' => 
                  array (
                    'description' => '版本号。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Statement' => 
                  array (
                    'description' => '具体权限策略信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Effect' => 
                        array (
                          'description' => '授权效力。取值：  

- Allow：允许。  

- Deny：拒绝。',
                          'type' => 'string',
                          'example' => 'Allow',
                        ),
                        'Resource' => 
                        array (
                          'description' => '被授权的具体对象。星号（*）表示所有资源。',
                          'type' => 'string',
                          'example' => '*',
                        ),
                        'Action' => 
                        array (
                          'description' => '对具体资源的操作。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '对具体资源的操作。',
                            'type' => 'string',
                            'example' => '[
    "ram:PassRole"
]',
                          ),
                        ),
                        'Condition' => 
                        array (
                          'description' => '授权生效的条件。',
                          'type' => 'object',
                          'example' => '{
    "StringEquals": {
        "acs:Service": "fc.aliyuncs.com"
    }
}',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Policy\\": {\\n    \\"Version\\": \\"1\\",\\n    \\"Statement\\": [\\n      {\\n        \\"Effect\\": \\"Allow\\",\\n        \\"Resource\\": \\"*\\",\\n        \\"Action\\": [\\n          \\"[\\\\n    \\\\\\"ram:PassRole\\\\\\"\\\\n]\\"\\n        ],\\n        \\"Condition\\": {\\n          \\"StringEquals\\": {\\n            \\"acs:Service\\": \\"fc.aliyuncs.com\\"\\n          }\\n        }\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6\\"\\n}","errorExample":""},{"type":"xml","example":"<Policy>\\n    <Version>1</Version>\\n    <Statement>\\n        <Action>ecs:DescribeVpcs</Action>\\n        <Action>ecs:DeleteVpc</Action>\\n        <Resource>*</Resource>\\n        <Effect>Allow</Effect>\\n    </Statement>\\n    <Statement>\\n        <Action>vpc:CreateVpc</Action>\\n        <Action>vpc:DescribeVpcs</Action>\\n        <Action>vpc:ModifyVpcAttribute</Action>\\n        <Action>vpc:TagResources</Action>\\n        <Resource>*</Resource>\\n        <Effect>Allow</Effect>\\n    </Statement>\\n</Policy>\\n<RequestId>16AAEDEB-6273-405E-97D3-023EFD95DE03</RequestId>","errorExample":""}]',
      'title' => '生成模板所需的策略信息',
      'description' => '如果模板所需的策略中包含企业级分布式应用服务EDAS（Enterprise Distributed Application Service），您需要登录阿里云账号，对需要授权的RAM用户进行RAM权限升级。

本文将提供一个示例，为您介绍如何为模板ID为`5ecd1e10-b0e9-4389-a565-e4c15efc****`的模板生成权限策略。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | StackValidationFailed | {reason}. |资源栈校验失败。reason为具体原因。|
| 404 | TemplateNotFound |The Tempalte ({ ID }) could not be found. |模板不存在。ID为模板ID。|
| 404 | TemplateNotFound |The Template { ID } with version { version } could not be found. |模板或指定版本不存在。ID为模板ID，version为模板版本。 |',
    ),
    'SetStackPolicy' => 
    array (
      'path' => '/V2/SetStackPolicy',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'StackPolicyBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含资源栈策略主体的结构，长度为1~16,384个字节。

您可以指定StackPolicyBody或StackPolicyURL参数，但不能同时指定两者。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"Statement":[{"Effect":"Allow","Action":"Update:*","Principal":"*","Resource":"*"}]}',
          ),
        ),
        3 => 
        array (
          'name' => 'StackPolicyURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含资源栈策略主体的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储桶（例如：oss://ros/template/demo、oss://ros/template/demo?RegionId=cn-hangzhou）中的模板，模板最大为16,384个字节。   

> 如果OSS地域未指定，默认与接口参数RegionId相同。  
  
您可以指定StackPolicyBody或StackPolicyURL参数，但不能同时指定两者。

URL最大长度为1350字节。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros/stack-policy/demo',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\"\\n}","errorExample":""},{"type":"xml","example":"<SetStackPolicyResponse>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n</SetStackPolicyResponse>","errorExample":""}]',
      'title' => '设置资源栈策略',
      'summary' => '为指定资源栈配置资源策略。',
      'description' => '本文将提供一个示例，在杭州地域`cn-hangzhou`给ID为`4a6c9851-3b0f-4f5f-b4ca-a14bf691****`的资源栈设置资源栈策略，包含资源栈策略主体的文件的位置`StackPolicyURL`为`oss://ros/stack-policy/demo`。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '
| 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| StackValidationFailed |{reason}. | 400 |资源栈校验失败，reason为具体原因。 |
| StackNotFound |The Stack ({name}) could not be found. | 404 |资源栈不存在，name为资源栈名称或ID。 |',
    ),
    'GetStackPolicy' => 
    array (
      'path' => '/V2/GetStackPolicy',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
              'StackPolicyBody' => 
              array (
                'description' => '包含资源栈策略主体的结构，长度为1~16,384个字节。',
                'type' => 'object',
                'example' => '{"Statement": [{"Action": "Update:*", "Effect": "Allow","Principal": "*","Resource": "*"}]}',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\",\\n  \\"StackPolicyBody\\": {\\n    \\"Statement\\": [\\n      {\\n        \\"Action\\": \\"Update:*\\",\\n        \\"Effect\\": \\"Allow\\",\\n        \\"Principal\\": \\"*\\",\\n        \\"Resource\\": \\"*\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetStackPolicyResponse> \\n  <StackPolicyBody> \\n    <Statement> \\n      <Statement> \\n        <Resource>*</Resource>  \\n        <Principal>*</Principal>  \\n        <Action>Update:*</Action>  \\n        <Effect>Allow</Effect> \\n      </Statement>  \\n      <Statement> \\n        <Resource>LogicalResourceId/WebServer</Resource>  \\n        <Principal>*</Principal>  \\n        <Action>Update:*</Action>  \\n        <Effect>Deny</Effect> \\n      </Statement> \\n    </Statement> \\n  </StackPolicyBody>  \\n  <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId> \\n</GetStackPolicyResponse>\\n","errorExample":""}]',
      'title' => '获取资源栈策略',
      'summary' => '在一个阿里云地域下查询指定资源栈策略详情。',
      'description' => '本文将提供一个示例，获取杭州地域ID为`4a6c9851-3b0f-4f5f-b4ca-a14bf691****`的资源栈的策略。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| StackNotFound |The Stack ({name}) could not be found. | 404 |资源栈不存在，name为资源栈名称或ID。 |',
    ),
    'CreateChangeSet' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建更改集的资源栈的ID。ROS通过将此资源栈的信息与您提交的信息（例如：修改后的模板或不同的参数输入值）进行比较来生成更改集。  
您可以通过调用[ListStacks - 查询资源栈列表](~~610818~~)接口获取资源栈ID。
> 该参数仅在更改集类型为UPDATE或IMPORT时生效。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'StackPolicyURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含资源栈策略的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/stack-policy/demo、oss://ros/stack-policy/demo?RegionId=cn-hangzhou）的策略，策略文件长为16384个字节。

URL的最大长度为1350个字节。       

> OSS地域如未指定，默认与接口参数RegionId相同。

当更改集类型为**CREATE**时，您仅能指定StackPolicyBody或StackPolicyURL参数之一。

当更改集类型为**UPDATE**时，您仅能指定以下参数之一：

- StackPolicyBody
- StackPolicyURL
- StackPolicyDuringUpdateBody
- StackPolicyDuringUpdateURL',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros/stack-policy/demo',
          ),
        ),
        2 => 
        array (
          'name' => 'StackPolicyBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈策略的结构，长度为1~16,384个字节。

当更改集类型为**CREATE**时，您仅能指定StackPolicyBody或StackPolicyURL其中一个参数。 

当更改集类型为**UPDATE**时，您仅能指定以下参数之一：

- StackPolicyBody
- StackPolicyURL
- StackPolicyDuringUpdateBody
- StackPolicyDuringUpdateURL',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"Statement":[{"Effect":"Allow","Action":"Update:*","Principal":"*","Resource":"*"}]}',
          ),
        ),
        3 => 
        array (
          'name' => 'StackName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建更改集的资源栈的名称。  
长度不超过255个字符。必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。

> 该参数仅在更改集类型为CREATE或IMPORT时生效。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'MyStack',
          ),
        ),
        4 => 
        array (
          'name' => 'UsePreviousParameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '对于未传递的参数，是否使用上次传递的值。取值：

- true
- false（默认值）

> 该参数仅在更改集类型为UPDATE或IMPORT时生效。
',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'ChangeSetType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更改集的类型。取值：
- CREATE：为新资源栈创建更改集。
- UPDATE（默认值）：为现有资源栈创建更改集。
- IMPORT：为新资源栈或现有资源栈创建更改集导入非ROS托管资源。

当您选择更改集类型为CREATE时，ROS会为您创建新的资源栈。此时资源栈将处于`REVIEW_IN_PROGRESS`状态，直到您执行更改集。

> - 禁止使用UPDATE类型为新资源栈创建更改集，或使用CREATE类型为现有资源栈创建更改集。
> - IMPORT类型的更改集不支持设置资源栈策略，请在创建或更新资源栈时设置相关参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'UPDATE',
          ),
        ),
        6 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更改集的描述。最大长度为1024个字节。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'It is a demo.',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更改集所属的地域ID。

您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        8 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该参数值由客户端生成，并且必须全局唯一。   
长度不超过64个字符。可包含英文字母、数字、短划线（-）和下划线（_）。  
更多详情，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        9 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/template/demo、oss://ros/template/demo?RegionId=cn-hangzhou）中的模板，模板最大值为524,288个字节。  

> 如果OSS地域未指定，默认与接口参数RegionId相同。
  
您仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。
   
URL最大长度为1024个字节。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros/template/demo',
          ),
        ),
        10 => 
        array (
          'name' => 'StackPolicyDuringUpdateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新资源栈策略的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/stack-policy/demo、oss://ros/stack-policy/demo?RegionId=cn-hangzhou）中的策略，策略文件最长为16,384个字节。   

> OSS地域如未指定，默认与接口参数RegionId相同。

URL最大长度为1350个字节。  
如果要更新受保护的资源，请在更新期间指定临时覆盖资源栈策略。如果未指定资源栈策略，则将使用与资源栈关联的当前策略。该参数仅在更改集类型为UPDATE时生效。您仅能指定以下参数之一：

- StackPolicyBody
- StackPolicyURL
- StackPolicyDuringUpdateBody
- StackPolicyDuringUpdateURL',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros/stack-policy/demo',
          ),
        ),
        11 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板主体的结构。长度为1~524,288个字节。如果长度较大，则建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免因URL过长而导致请求失败。                                                             
>  您必须且仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"ROSTemplateFormatVersion":"2015-09-01"}',
          ),
        ),
        12 => 
        array (
          'name' => 'TimeoutInMinutes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈状态变为CREATE_FAILED或UPDATE_FAILED之前可以经过的时间量。  
当更改集类型为CREATE时，该参数为必选参数；当更改集类型为UPDATE时，该参数为可选参数。

- 单位：分钟。

- 取值范围：10~1440。

- 默认值：60。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '12',
          ),
        ),
        13 => 
        array (
          'name' => 'DisableRollback',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当创建资源栈失败时，是否禁用回滚策略。  
取值：  

- true：禁用回滚，即在创建资源栈失败时不进行回滚。  

- false（默认值）：不禁用回滚，即在创建资源栈失败时进行回滚。  

> 该参数仅在更改集类型为CREATE或IMPORT时生效。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'false',
          ),
        ),
        14 => 
        array (
          'name' => 'ChangeSetName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更改集的名称。  
长度不超过255个字符。必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。

> 更改集名称在与指定资源栈关联的所有更改集中必须是唯一的。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyChangeSet',
          ),
        ),
        15 => 
        array (
          'name' => 'StackPolicyDuringUpdateBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '临时覆盖资源栈策略的结构。长度为1~16,384个字节。  
如果要更新受保护资源，请在此更新期间指定临时覆盖资源栈策略，如未指定，则将使用与资源栈关联的当前策略。  
该参数仅在更改集类型为UPDATE时生效，您仅能指定以下参数之一：

- StackPolicyBody
- StackPolicyURL
- StackPolicyDuringUpdateBody
- StackPolicyDuringUpdateURL',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"Statement":[{"Effect":"Allow","Action":"Update:*","Principal":"*","Resource":"*"}]}',
          ),
        ),
        16 => 
        array (
          'name' => 'RamRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'RAM角色名称。ROS会扮演该角色创建资源栈，使用角色的凭证代表用户进行接口调用。  
ROS始终将此角色用于资源栈上将进行的操作。只要用户有权在资源栈上进行操作，即使用户无权使用角色，ROS也会使用此角色，确保角色授予最少的权限。   
如果用户未指定该值，ROS将使用以前与资源栈关联的角色。如果没有可用角色，ROS将使用从您的用户凭证中生成的临时凭证。   
RAM角色名称最大长度为64个字节。

RAM角色的更多信息，请参见[资源栈角色](~~2568025~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-role',
          ),
        ),
        17 => 
        array (
          'name' => 'ReplacementOption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '如果资源的属性发生了变化，且变化的属性不支持修改更新（资源物理ID不变），是否使用替换更新（删除资源，重新创建，资源物理ID会发生变化）。取值：
- Enabled：允许替换更新。
- Disabled（默认）：不允许替换更新。

> 修改更新的优先级高于替换更新。该参数仅在更改集类型为UPDATE时生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'Disabled',
          ),
        ),
        18 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。

您可以通过调用[ListTemplates - 查询模板列表](~~610842~~)接口查看模板ID。

> 您仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        19 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板版本。  
> 该参数仅在指定TemplateId时生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        20 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '模板中已定义的参数。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '模板中已定义的参数的名称。如果未指定特定参数的名称和取值，则ROS将使用模板中指定的默认值。N的最大值为200。  

> Parameters为可选参数。若指定了Parameters，则Parameters.N.ParameterKey为必选参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Amount',
                ),
                'ParameterValue' => 
                array (
                  'description' => '模板中已定义的参数的取值。N的最大值为200。  

> Parameters为可选参数。若指定了Parameters，则Parameters.N.ParameterValue为必选参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '12',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        21 => 
        array (
          'name' => 'NotificationURLs',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '接收资源栈事件的回调地址列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '接收资源栈事件的回调地址。取值：

- HTTP POST URL      
每个URL最大长度为1024个字节。  

- eventbridge  
资源栈状态变更会通知到事件总线（EventBridge）服务。您可以登录[事件总线控制台](https://eventbridge.console.aliyun.com) ，在左侧导航栏单击**事件总线**，查看事件信息。  
> 当前支持华东1（杭州）、华东2（上海）、华北2（北京）、中国（香港）、华北3（张家口）五个地域。    

  
N最大值为5。资源栈的状态发生变化时，会进行通知。当资源栈启用回滚时，CREATE_FAILED（创建失败）和UPDATE_FAILED（更新失败）不会通知，而CREATE_ROLLBACK（创建失败回滚）和ROLLBACK（更新失败回滚）会进行通知。IN_PROGRESS状态不会通知。  
无论资源栈是否定义了Outputs都会进行通知。通知内容示例如下：  
 ```
{
    "Outputs": [
        {
            "Description": "No description given",
            "OutputKey": "InstanceId",
            "OutputValue": "i-xxx"
        }
    ],
    "StackId": "80bd6b6c-e888-4573-ae3b-93d29113****",
    "StackName": "test-notification-url",
    "Status": "CREATE_COMPLETE"
}
```   ',
              'type' => 'string',
              'required' => false,
              'example' => 'http://example.com/ros-notify',
            ),
            'required' => false,
            'example' => 'http://my-site.com/ros-notify',
            'maxItems' => 5,
          ),
        ),
        22 => 
        array (
          'name' => 'ResourcesToImport',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待导入资源列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ResourceIdentifier' => 
                array (
                  'description' => '字符串到字符串的键值映射。取值是JSON格式的字符串，用来标识要导入的资源。  
键是资源的标识符属性（例如：ALIYUN::ECS::VPC资源的VpcId），值是属性的取值（例如：`vpc-2zevx9ios****`）。

资源的标识符属性可以通过[GetTemplateSummary](~~172485~~)接口获取。

> 该参数仅在更改集类型为IMPORT时生效。ResourcesToImport为可选参数。若指定了ResourcesToImport，则ResourcesToImport.N.ResourceIdentifier为必选参数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{"VpcId": "vpc-2zevx9ios******"}',
                ),
                'LogicalResourceId' => 
                array (
                  'description' => '资源逻辑ID，即模板中资源的名称。

> 该参数仅在更改集类型为IMPORT时生效。ResourcesToImport为可选参数。若指定了ResourcesToImport，则ResourcesToImport.N.LogicalResourceId为必选参数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Vpc',
                ),
                'ResourceType' => 
                array (
                  'description' => '资源的类型，需要与模板中定义的类型一致。

> 该参数仅在更改集类型为IMPORT时生效。ResourcesToImport为可选参数。若指定了ResourcesToImport，则ResourcesToImport.N.ResourceType为必选参数。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ALIYUN::ECS::VPC',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 300,
          ),
        ),
        23 => 
        array (
          'name' => 'TemplateScratchId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源场景ID，即资源纳管场景ID。

当ChangeSetType取值为IMPORT时，该参数才有效，该参数仅支持创建新的资源栈导入。

如果您想通过资源纳管场景导入资源时，请只设置该参数，而不是模板相关参数。

您可以通过调用[ListTemplateScratches - 查询资源场景列表](~~610832~~)查看资源纳管场景ID。',
            'type' => 'string',
            'required' => false,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        24 => 
        array (
          'name' => 'Parallelism',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源最大并发数。默认为空，用户可以输入大于等于零的整数。设置资源最大并发数后，将与资源栈进行关联，影响资源栈的后续操作。

该参数仅在更改集类型为CREATE或UPDATE时生效，取值：

- 当更改集类型为CREATE时
  - 设置为大于零的整数：使用整数值。
  - 设置为零或者不设置：对于ROS类型资源栈不限制，Terraform类型资源栈使用Terraform默认值（通常为10）。

- 当更改集类型为UPDATE时
  - 设置为大于零的整数：使用整数值。
  - 设置为零：对于ROS类型资源栈不限制，Terraform类型资源栈使用Terraform默认值（通常为10）。
  - 不设置：使用上次操作时设置的值。如果上次操作时未设置该参数，对于ROS类型资源栈不限制，Terraform类型资源栈使用Terraform默认值（通常为10）。
',
            'type' => 'integer',
            'format' => 'int64',
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
              'ChangeSetId' => 
              array (
                'description' => '更改集ID。',
                'type' => 'string',
                'example' => 'e85abe0c-6528-43fb-ae93-fdf8de22****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
              'StackId' => 
              array (
                'description' => '资源栈ID。',
                'type' => 'string',
                'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ChangeSetId\\": \\"e85abe0c-6528-43fb-ae93-fdf8de22****\\",\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\",\\n  \\"StackId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf691****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateChangeSetResponse>\\n    <ChangeSetId>e85abe0c-6528-43fb-ae93-fdf8de22****</ChangeSetId>\\n    <StackId>4a6c9851-3b0f-4f5f-b4ca-a14bf691****</StackId>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n</CreateChangeSetResponse>","errorExample":""}]',
      'title' => '创建更改集',
      'summary' => '为资源栈创建更改集，您可以在执行更改之前查看对应更改内容。',
      'description' => '### 使用场景
#### 使用更改集创建资源栈
如果您想管理大量的云资源，并在资源栈创建成功之前预览资源的创建效果，您可以选择使用更改集创建资源栈。此时您需要将`ChangeSetType`参数设置为CREATE并完成相关参数配置。关于更改集的更多信息，请参见[更改集](~~155649~~)。  
#### 使用更改集更新资源栈
如果您想在更新资源之前预览该操作对资源栈的影响，您可以选择为现有资源栈创建更改集。此时您需要将ChangeSetType参数设置为UPDATE并完成相关参数配置。
关于更改集的更多信息，请参见[更改集](~~155649~~)。  
#### 使用现有资源创建资源栈
如果您需要将现有的云资源添加到一个新的资源栈中进行统一管理，您可以选择使用更改集创建资源栈并完成资源导入。此时您需要将ChangeSetType参数设置为IMPORT并完成相关参数配置。关于资源导入的更多信息，请参见[概览](~~193454~~)。

#### 将现有资源导入资源栈
如果您想要将现有资源导入到一个已有资源栈中进行统一管理，您可以选择使用更改集对已有资源栈进行更新。此时您需要将ChangeSetType参数设置为IMPORT并完成相关参数配置。关于资源导入的更多信息，请参见[概览](~~193454~~)。

### 使用限制
- 只有部分状态下的资源栈支持通过更改集更新。更多信息，请参见[通过更改集更新资源栈](~~155873~~)。
- 一个资源栈最多同时存在20个更改集。  
- 更改集只显示资源栈变化，不显示资源栈是否成功更新。  
- 更改集不检查是否将超出账号限制、是否将更新不支持更新的资源、是否权限不足而无法修改资源，所有这些都将导致资源栈更新失败。如果更新失败，ROS将尝试将您的资源回滚到原始状态。  

本文以使用更改集更新资源栈为例，在杭州地域`cn-hangzhou`创建一个名为`MyChangeSet`的更改集，将ID为`4a6c9851-3b0f-4f5f-b4ca-a14bf691****`的资源栈的模板更新为`{"ROSTemplateFormatVersion":"2015-09-01"}`。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | CircularDependency | Circular Dependency Found: {reason}. |模板包含循环引用。reason为具体原因。 |
| 400 | InvalidSchema | {reason}. |模板格式不正确。reason为具体原因。 |
| 400 | InvalidTemplateAttribute | The Referenced Attribute ({resource} {name}) is incorrect. |模板包含不正确的资源属性（输出）引用。resource为资源名，name为属性名。 |
| 400 | InvalidTemplatePropertyType | The specified value type of ({resource} {section}) is incorrect. |模板资源定义中的字段类型不正确。resource为资源名，section为字段名。 |
| 400 | InvalidTemplateReference | The specified reference "{name}" (in {referencer}) is incorrect. |模板包含不正确的引用。name为引用名，referencer为引用者。 |
| 400 | InvalidTemplateSection | The template section is invalid: {section}. |模板包含无效的字段。section为字段名。 |
| 400 | InvalidTemplateVersion | The template version is invalid: {reason}. |模板版本不正确。reason为具体原因。 |
| 400 | StackPolicyValidationFailed | Action denied by stack policy: {reason}. |未通过资源栈策略校验。reason为具体原因。 |
| 400 | StackValidationFailed | {reason}. |资源栈校验失败。reason为具体原因。 |
| 400 | UnknownUserParameter | The Parameter ({name}) was not defined in template. |传递的参数在模板中未定义。name为参数名。 |
| 400 | UserParameterMissing | The Parameter {name} was not provided. |参数在模板中已定义，但未传递值。name为参数名。 |
| 404 | StackNotFound | The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。 |
| 409 | ActionInProgress | Stack {name} already has an action ({action}) in progress. |资源栈在变更中。name为资源栈名称或ID，action为具体的变更操作。 |
| 409 | ChangeSetExists | The ChangeSet ({name}) of Stack ({stack}) already exists. |同名更改集已存在。name为更改集名，stack为关联的资源栈名称或ID。 |
| 409 | StackExists | The Stack ({name}) already exists. |同名资源栈已存在。name为资源栈名称。 |
| 404 | TemplateNotFound |The Tempalte ({ ID }) could not be found. |模板不存在。ID为模板ID。 |
| 404 | TemplateNotFound |The Template { ID } with version { version } could not be found. |模板或指定版本不存在。ID为模板ID，version为模板版本。 |',
    ),
    'DeleteChangeSet' => 
    array (
      'path' => '/V2/DeleteChangeSet',
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
      'operationType' => 'readAndWrite',
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
            'description' => '更改集所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ChangeSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更改集ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1f6521a4-05af-4975-afe9-bc4b45ad****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteChangeSetResponse>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n</DeleteChangeSetResponse>","errorExample":""}]',
      'title' => '删除更改集',
      'summary' => '为已创建更改集的资源栈删除更改集。',
      'description' => ' 使用限制：

- 更改集满足如下条件才能删除：  

  - 状态为CREATE_COMPLETE、CREATE_FAILED或DELETE_FAILED。

  - 执行状态为UNAVAILABLE或AVAILABLE。

- 执行一个更改集，将自动删除资源栈关联的其他更改集。

- 删除资源栈，将自动删除其关联的更改集。

- 当删除类型为CREATE的更改集时，需要自行删除其关联的资源栈。  

本文将提供一个示例，在杭州地域删除一个ID为`1f6521a4-05af-4975-afe9-bc4b45ad****`的更改集。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| ChangeSetNotFound |The ChangeSet ({name}) of Stack ({stack}) could not be found. | 404 |更改集不存在，name为更改集名称或ID，stack为资源栈名称或ID。 |
| ChangeSetNotFound |The ChangeSet {ID} could not be found. | 404 |更改集不存在，ID为更改集ID。 |
| StackNotFound |The Stack ({name}) could not be found. | 404 |资源栈不存在，name为资源栈名称或ID。 |
| ActionInProgress |Stack {name} already has an action ({action}) in progress. | 409 |资源栈在变更中，name为资源栈名称或ID，action为变更操作。 |',
    ),
    'GetChangeSet' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ShowTemplate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否获取模板，取值：

- true：获取模板。
- false（默认值）：不获取模板。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更改集所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ChangeSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更改集ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4c11658d-bd47-4dd0-ba64-727edc62****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '更改集状态。',
                'type' => 'string',
                'example' => 'CREATE_COMPLETE',
              ),
              'Changes' => 
              array (
                'description' => '更改集变更内容列表。

',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '更改集变更内容列表。

更多信息，请参见[更改集数据结构](~~155988~~)。',
                  'type' => 'object',
                  'example' => '参见示例',
                ),
              ),
              'Description' => 
              array (
                'description' => '更改集描述。',
                'type' => 'string',
                'example' => 'It is a demo.',
              ),
              'Parameters' => 
              array (
                'description' => '资源栈参数列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源栈参数列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ParameterKey' => 
                    array (
                      'description' => '参数名称。',
                      'type' => 'string',
                      'example' => 'ALIYUN::Region',
                    ),
                    'ParameterValue' => 
                    array (
                      'description' => '参数值。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3766EE04-76DD-50F9-9C23-3AF136CD5708',
              ),
              'StatusReason' => 
              array (
                'description' => '更改集异常状态原因。',
                'type' => 'string',
                'example' => 'too many changes.',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间，按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mm:ss。',
                'type' => 'string',
                'example' => '2021-12-01T02:20:56',
              ),
              'TemplateBody' => 
              array (
                'description' => '更改集对应的模板。

> 当ShowTemplate为true时该参数有效。
',
                'type' => 'string',
                'example' => '{"ROSTemplateFormatVersion": "2015-09-01"}',
              ),
              'ChangeSetName' => 
              array (
                'description' => '更改集名称。',
                'type' => 'string',
                'example' => 'ChangeSet_template',
              ),
              'ChangeSetId' => 
              array (
                'description' => '更改集ID。',
                'type' => 'string',
                'example' => '4c11658d-bd47-4dd0-ba64-727edc62****',
              ),
              'ExecutionStatus' => 
              array (
                'description' => '更改集执行状态。',
                'type' => 'string',
                'example' => 'AVAILABLE',
              ),
              'ChangeSetType' => 
              array (
                'description' => '更改集类型。',
                'type' => 'string',
                'example' => 'UPDATE',
              ),
              'RegionId' => 
              array (
                'description' => '地域ID。',
                'type' => 'string',
                'example' => 'cn-hangzhou',
              ),
              'DisableRollback' => 
              array (
                'description' => '资源栈在创建或更新失败时是否回滚。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'StackName' => 
              array (
                'description' => '更改集所属资源栈名。',
                'type' => 'string',
                'example' => 'stack_2021-10-13',
              ),
              'TimeoutInMinutes' => 
              array (
                'description' => '资源栈创建或更新超时时间。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '60',
              ),
              'StackId' => 
              array (
                'description' => '更改集所属资源栈ID。',
                'type' => 'string',
                'example' => 'a486fc19-ebb7-4ce9-a70b-554a7c3d****',
              ),
              'Log' => 
              array (
                'description' => '更改集相关输出日志。',
                'type' => 'object',
                'properties' => 
                array (
                  'TerraformLogs' => 
                  array (
                    'description' => 'Terraform输出日志。仅Terraform类型资源栈的更改集返回该参数。

> 创建中的更改集不返回该参数。该参数表示创建更改集的日志。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '输出日志。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Command' => 
                        array (
                          'description' => '执行的Terraform命令名称。取值：

- apply

- plan

- destroy

- version

关于命令含义的更多信息，请参见[Command](https://www.terraform.io/cli/commands)。',
                          'type' => 'string',
                          'example' => 'apply',
                        ),
                        'Stream' => 
                        array (
                          'description' => '输出流。取值：

- stdout：标准输出。

- stderr：标准错误。',
                          'type' => 'string',
                          'example' => 'stdout',
                        ),
                        'Content' => 
                        array (
                          'description' => '当前命令在当前输出流中输出的内容。',
                          'type' => 'string',
                          'example' => 'Apply complete! Resources: 42 added, 0 changed, 0 destroyed.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"CREATE_COMPLETE\\",\\n  \\"Changes\\": [\\n    {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  ],\\n  \\"Description\\": \\"It is a demo.\\",\\n  \\"Parameters\\": [\\n    {\\n      \\"ParameterKey\\": \\"ALIYUN::Region\\",\\n      \\"ParameterValue\\": \\"cn-hangzhou\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"3766EE04-76DD-50F9-9C23-3AF136CD5708\\",\\n  \\"StatusReason\\": \\"too many changes.\\",\\n  \\"CreateTime\\": \\"2021-12-01T02:20:56\\",\\n  \\"TemplateBody\\": \\"{\\\\\\"ROSTemplateFormatVersion\\\\\\": \\\\\\"2015-09-01\\\\\\"}\\",\\n  \\"ChangeSetName\\": \\"ChangeSet_template\\",\\n  \\"ChangeSetId\\": \\"4c11658d-bd47-4dd0-ba64-727edc62****\\",\\n  \\"ExecutionStatus\\": \\"AVAILABLE\\",\\n  \\"ChangeSetType\\": \\"UPDATE\\",\\n  \\"RegionId\\": \\"cn-hangzhou\\",\\n  \\"DisableRollback\\": false,\\n  \\"StackName\\": \\"stack_2021-10-13\\",\\n  \\"TimeoutInMinutes\\": 60,\\n  \\"StackId\\": \\"a486fc19-ebb7-4ce9-a70b-554a7c3d****\\",\\n  \\"Log\\": {\\n    \\"TerraformLogs\\": [\\n      {\\n        \\"Command\\": \\"apply\\",\\n        \\"Stream\\": \\"stdout\\",\\n        \\"Content\\": \\"Apply complete! Resources: 42 added, 0 changed, 0 destroyed.\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetChangeSetResponse>\\n    <Status>CREATE_COMPLETE</Status>\\n    <Changes>\\n        <Type>Resource</Type>\\n        <ResourceChange>\\n            <Action>Remove</Action>\\n            <LogicalResourceId>WaitCondition</LogicalResourceId>\\n            <PhysicalResourceId>WaitCondition</PhysicalResourceId>\\n            <ResourceType>ALIYUN::ROS::WaitCondition</ResourceType>\\n        </ResourceChange>\\n    </Changes>\\n    <Changes>\\n        <Type>Resource</Type>\\n        <ResourceChange>\\n            <Action>Remove</Action>\\n            <LogicalResourceId>WaitConHandle</LogicalResourceId>\\n            <PhysicalResourceId>WaitConHandle</PhysicalResourceId>\\n            <ResourceType>ALIYUN::ROS::WaitConditionHandle</ResourceType>\\n        </ResourceChange>\\n    </Changes>\\n    <Parameters>\\n        <ParameterValue>151266687691****</ParameterValue>\\n        <ParameterKey>ALIYUN::AccountId</ParameterKey>\\n    </Parameters>\\n    <Parameters>\\n        <ParameterValue>None</ParameterValue>\\n        <ParameterKey>ALIYUN::NoValue</ParameterKey>\\n    </Parameters>\\n    <Parameters>\\n        <ParameterValue>cn-hangzhou</ParameterValue>\\n        <ParameterKey>ALIYUN::Region</ParameterKey>\\n    </Parameters>\\n    <Parameters>\\n        <ParameterValue>a486fc19-ebb7-4ce9-a70b-554a7c3d****</ParameterValue>\\n        <ParameterKey>ALIYUN::StackId</ParameterKey>\\n    </Parameters>\\n    <Parameters>\\n        <ParameterValue>stack_2021-10-13</ParameterValue>\\n        <ParameterKey>ALIYUN::StackName</ParameterKey>\\n    </Parameters>\\n    <Parameters>\\n        <ParameterValue>151266687691****</ParameterValue>\\n        <ParameterKey>ALIYUN::TenantId</ParameterKey>\\n    </Parameters>\\n    <RequestId>3766EE04-76DD-50F9-9C23-3AF136CD5708</RequestId>\\n    <CreateTime>2021-12-01T02:20:56</CreateTime>\\n    <ChangeSetName>ChangeSet_template</ChangeSetName>\\n    <ChangeSetId>4c11658d-bd47-4dd0-ba64-727edc62****</ChangeSetId>\\n    <ExecutionStatus>AVAILABLE</ExecutionStatus>\\n    <ChangeSetType>UPDATE</ChangeSetType>\\n    <RegionId>cn-hangzhou</RegionId>\\n    <DisableRollback>false</DisableRollback>\\n    <StackName>stack_2021-10-13</StackName>\\n    <TimeoutInMinutes>60</TimeoutInMinutes>\\n    <StackId>a486fc19-ebb7-4ce9-a70b-554a7c3d****</StackId>\\n</GetChangeSetResponse>","errorExample":""}]',
      'title' => '查询更改集信息',
      'summary' => '查询指定更改集信息，可以选择是否获取对应模板详情。',
      'description' => '本文将提供一个示例，为您查询杭州地域ID为`4c11658d-bd47-4dd0-ba64-727edc62****`的更改集信息。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| ChangeSetNotFound |The ChangeSet ({name}) of Stack ({stack}) could not be found. | 404 |更改集不存在，name为更改集名称或ID，stack为资源栈名称或ID。 |
| ChangeSetNotFound |The ChangeSet {ID} could not be found. | 404 |更改集不存在，ID为更改集ID。 |
| StackNotFound |The Stack ({name}) could not be found. | 404 |资源栈不存在，name为资源栈名称或ID。 |',
    ),
    'ListChangeSets' => 
    array (
      'path' => '/V2/ListChangeSets',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。  
取值范围：1~50。  
默认值：10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更改集所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更改集列表的页码。  
起始值：1。  
默认值：1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ChangeSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更改集ID。如果不需要更改集详细信息，可使用此参数代替GetChangeSet接口。',
            'type' => 'string',
            'required' => false,
            'example' => '1f6521a4-05af-4975-afe9-bc4b45ad****',
          ),
        ),
        5 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '更改集的状态。N的最大值为5。取值：
- CREATE_PENDING
- CREATE_IN_PROGRESS
- CREATE_COMPLETE
- CREATE_FAILED
- DELETE_FAILED
- DELETE_COMPLETE

',
            'type' => 'array',
            'items' => 
            array (
              'description' => '更改集的状态。',
              'type' => 'string',
              'required' => false,
              'example' => 'CREATE_COMPLETE',
            ),
            'required' => false,
            'example' => 'CREATE_COMPLETE',
            'maxItems' => 5,
          ),
        ),
        6 => 
        array (
          'name' => 'ChangeSetName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '更改集的名称。N的最大值为5。支持使用通配符星号（*）进行模糊搜索。

',
            'type' => 'array',
            'items' => 
            array (
              'description' => '更改集的名称。',
              'type' => 'string',
              'required' => false,
              'example' => 'MyChangeSet',
            ),
            'required' => false,
            'example' => 'MyChangeSet',
            'maxItems' => 5,
          ),
        ),
        7 => 
        array (
          'name' => 'ExecutionStatus',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '更改集的执行状态。N的最大值为5。取值：
- UNAVAILABLE
- AVAILABLE
- EXECUTE_IN_PROGRESS
- EXECUTE_COMPLETE
- EXECUTE_FAILED
- OBSOLETE

',
            'type' => 'array',
            'items' => 
            array (
              'description' => '更改集的执行状态。',
              'type' => 'string',
              'required' => false,
              'example' => 'AVAILABLE',
            ),
            'required' => false,
            'example' => 'AVAILABLE',
            'maxItems' => 5,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '查询到的总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
              'PageNumber' => 
              array (
                'description' => '分页查询的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ChangeSets' => 
              array (
                'description' => '更改集列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '更改集状态。',
                      'type' => 'string',
                      'example' => 'CREATE_COMPLETE',
                    ),
                    'StackId' => 
                    array (
                      'description' => '更改集所属资源栈ID。',
                      'type' => 'string',
                      'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
                    ),
                    'ChangeSetName' => 
                    array (
                      'description' => '更改集名称。',
                      'type' => 'string',
                      'example' => 'MyChangeSet',
                    ),
                    'Description' => 
                    array (
                      'description' => '更改集描述。',
                      'type' => 'string',
                      'example' => 'It is a demo.',
                    ),
                    'ChangeSetType' => 
                    array (
                      'description' => '更改集类型。',
                      'type' => 'string',
                      'example' => 'UPDATE',
                    ),
                    'StatusReason' => 
                    array (
                      'description' => '更改集异常状态原因。',
                      'type' => 'string',
                      'example' => 'too many changes',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。按照ISO8601标准表示，需使用UTC时间，格式：YYYY-MM-DDThh:mm:ss。',
                      'type' => 'string',
                      'example' => '2019-08-01T05:16:31',
                    ),
                    'ChangeSetId' => 
                    array (
                      'description' => '更改集ID。',
                      'type' => 'string',
                      'example' => '1f6521a4-05af-4975-afe9-bc4b45ad****',
                    ),
                    'StackName' => 
                    array (
                      'description' => '更改集所属资源栈名称。',
                      'type' => 'string',
                      'example' => 'MyStack',
                    ),
                    'ExecutionStatus' => 
                    array (
                      'description' => '更改集执行状态。',
                      'type' => 'string',
                      'example' => 'AVAILABLE',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\",\\n  \\"PageNumber\\": 1,\\n  \\"ChangeSets\\": [\\n    {\\n      \\"Status\\": \\"CREATE_COMPLETE\\",\\n      \\"StackId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf691****\\",\\n      \\"ChangeSetName\\": \\"MyChangeSet\\",\\n      \\"Description\\": \\"It is a demo.\\",\\n      \\"ChangeSetType\\": \\"UPDATE\\",\\n      \\"StatusReason\\": \\"too many changes\\",\\n      \\"CreateTime\\": \\"2019-08-01T05:16:31\\",\\n      \\"ChangeSetId\\": \\"1f6521a4-05af-4975-afe9-bc4b45ad****\\",\\n      \\"StackName\\": \\"MyStack\\",\\n      \\"ExecutionStatus\\": \\"AVAILABLE\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"utf-8\\"?>\\n\\n<ListChangeSetsResponse> \\n  <ChangeSets> \\n    <ChangeSet> \\n      <ChangeSetId>1f6521a4-05af-4975-afe9-bc4b45ad****</ChangeSetId>  \\n      <ChangeSetName>MyChangeSet</ChangeSetName>  \\n      <ChangeSetType>UPDATE</ChangeSetType>  \\n      <Description>It is a demo.</Description>  \\n      <CreateTime>2019-08-01T05:16:31</CreateTime>  \\n      <Status>CREATE_COMPLETE</Status>  \\n      <ExecutionStatus>AVAILABLE</ExecutionStatus>  \\n      <StackId>4a6c9851-3b0f-4f5f-b4ca-a14bf691****</StackId>  \\n      <StackName>MyStack</StackName>  \\n      <RegionId>cn-hangzhou</RegionId> \\n    </ChangeSet> \\n  </ChangeSets>  \\n  <PageNumber>1</PageNumber>  \\n  <PageSize>10</PageSize>  \\n  <TotalCount>1</TotalCount>  \\n  <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId> \\n</ListChangeSetsResponse>\\n","errorExample":""}]',
      'title' => '查询更改集列表',
      'summary' => '查询已创建的更改集列表详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '
| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 404 | StackNotFound |The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。 |',
    ),
    'ExecuteChangeSet' => 
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
      'operationType' => 'readAndWrite',
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
            'description' => '更改集所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ChangeSetId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更改集ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1f6521a4-05af-4975-afe9-bc4b45ad****',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该参数值由客户端生成，并且必须全局唯一。   
长度不超过64个字符。可包含英文字母、数字、短划线（-）和下划线（_）。  
更多详情，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\"\\n}","errorExample":""},{"type":"xml","example":"<ExecuteChangeSetResponse>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n</ExecuteChangeSetResponse>","errorExample":""}]',
      'title' => '执行更改集',
      'summary' => '对资源栈执行更改集，资源变更即可生效。',
      'description' => '本文将提供一个示例，在杭州地域`cn-hangzhou`执行一个ID为`1f6521a4-05af-4975-afe9-bc4b45ad****`的更改集。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '
| 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| ChangeSetNotFound |The ChangeSet ({name}) of Stack ({stack}) could not be found. | 404 |更改集不存在，name为更改集名称或ID，stack为资源栈名称或ID。 |
| ChangeSetNotFound |The ChangeSet {ID} could not be found. | 404 |更改集不存在，ID为更改集ID。 |
| StackNotFound |The Stack ({name}) could not be found. | 404 |资源栈不存在，name为资源栈名称或ID。 |
| ActionInProgress |Stack {name} already has an action ({action}) in progress. | 409 |资源栈在变更中，name为资源栈名称或ID，action为变更操作。 |',
    ),
    'CreateStackGroup' => 
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
            'description' => '资源栈组所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'StackGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组名称。名称在单个地域内唯一。   
长度不超过255个字符，必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyStackGroup',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组描述。  
长度为1~256个字符。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'StackGroup Description',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板主体的结构。长度为1~524,288个字节。如果长度较大，则建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免因URL过长而导致请求失败。                                                               
>您必须且仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"ROSTemplateFormatVersion":"2015-09-01"}',
          ),
        ),
        4 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于HTTP Web服务器（HTTP或HTTPS）或阿里云OSS存储桶中的模板（1~524,288个字节）。OSS存储桶的URL，例如oss://ros/template/demo或oss://ros/template/demo?RegionId=cn-hangzhou。如未指定OSS地域，默认与接口参数RegionId相同。

> 您必须且仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros-template/demo',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。   
长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。  
更多信息，请参见[如何保证幂等性](~~134212~~)。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        6 => 
        array (
          'name' => 'AdministrationRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建自助管理权限模式的资源栈组时，需指定的供ROS扮演的RAM管理员角色名称。若不指定，则使用AliyunROSStackGroupAdministrationRole作为默认值。ROS以该角色身份进一步扮演执行角色（AliyunROSStackGroupExecutionRole）来操作资源栈组中资源栈实例所对应的资源栈。

长度为1~64个字符，可包含英文字母、数字和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'AliyunROSStackGroupAdministrationRole',
          ),
        ),
        7 => 
        array (
          'name' => 'ExecutionRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建自助管理权限模式的资源栈组时，需指定的供管理员角色（AliyunROSStackGroupAdministrationRole）扮演的RAM执行角色名称。若不指定，则使用AliyunROSStackGroupExecutionRole作为默认值。ROS以该角色身份来操作资源栈组中资源栈实例所对应的资源栈。

长度为1~64个字符，可包含英文字母、数字和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'AliyunROSStackGroupExecutionRole',
          ),
        ),
        8 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。

> 您必须且仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        9 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板版本。如果不指定，默认取最新版本。
>TemplateVersion仅在指定TemplateId时生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        10 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源栈组参数列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '参数的名称。如果未指定参数的名称和值，则ROS将使用模板中指定的默认值。

N最大值为200。  

> Parameters为可选参数。若指定了Parameters，则Parameters.N.ParameterKey为必选参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Amount',
                ),
                'ParameterValue' => 
                array (
                  'description' => '参数的值。

N最大值为200。  

> Parameters为可选参数。若指定了Parameters，则Parameters.N.ParameterValue为必选参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '12',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        11 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。如果不指定该参数，资源栈组将加入默认资源组。  
关于资源组的更多信息，请参见[什么是资源组](~~94475~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmxazb4ph6aiy****',
          ),
        ),
        12 => 
        array (
          'name' => 'PermissionModel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权模式。

取值：

- SELF_MANAGED（默认值）：自助管理权限模式。使用该模式时，您需要事先在管理员账号和目标账号中手动创建RAM角色，建立二者的信任关系，然后在目标账号中部署资源栈。

- SERVICE_MANAGED：服务管理权限模式。使用该模式时，ROS会为管理员账号和目标账号自动创建服务关联角色，管理员账号通过服务关联角色在目标账号中部署资源栈。

>当您使用服务管理权限模式部署资源栈时，当前账号必须是资源目录的企业管理账号或委派管理员账号，且已开启可信访问。更多信息，请参见[设置委派管理员账号](~~308253~~)和[开启可信访问](~~298229~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'SELF_MANAGED',
          ),
        ),
        13 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源栈组的标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源栈组的标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源栈组的标签键。

> Tags为可选参数。如果需要指定Tags，则Tags.N.Key必须指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'usage',
                ),
                'Value' => 
                array (
                  'description' => '资源栈组的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        14 => 
        array (
          'name' => 'AutoDeployment',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自动部署设置信息。
>仅当PermissionModel为SERVICE_MANAGED时，需要指定该参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Enabled' => 
              array (
                'description' => '启用或者禁用自动部署。

取值：

- true：启用自动部署。启用自动部署后，如果目标资源夹中新增了成员账号，资源栈组会自动将资源栈实例部署到该账号。如果目标资源夹中删除了成员账号，则资源栈组会自动删除该账号中的资源栈实例。

- false：禁用自动部署。禁用自动部署后，目标资源夹中成员账号变动时资源栈实例不会发生变化。',
                'type' => 'boolean',
                'required' => true,
                'docRequired' => true,
                'example' => 'true',
              ),
              'RetainStacksOnAccountRemoval' => 
              array (
                'description' => '目标资源夹中删除成员账号时，是否保留成员账号中的资源栈。

取值：

- true：保留资源栈。

- false：删除资源栈。

>当Enabled为true时，RetainStacksOnAccountRemoval必选。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
            ),
            'required' => false,
            'example' => '{"Enabled": true, "RetainStacksOnAccountRemoval": true}',
          ),
        ),
        15 => 
        array (
          'name' => 'Capabilities',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源栈组选项列表，最大长度为1。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源栈组选项。可选值：ExpandModules，在当前账号展开模块。

> - 仅在模板中使用到模块时生效。
> - 默认不在当前账号展开模块，要求所有部署目标账号中存在相关模块。如果在当前账号展开模块，则要求当前账号存在相关模块。',
              'type' => 'string',
              'required' => false,
              'enumValueTitles' => 
              array (
                'ExpandModules' => 'ExpandModules',
              ),
              'example' => 'ExpandModules',
            ),
            'required' => false,
            'maxItems' => 1,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
              ),
              'StackGroupId' => 
              array (
                'description' => '资源栈组ID。',
                'type' => 'string',
                'example' => '2c036e78-9e82-428e-afd6-177f5d04****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\",\\n  \\"StackGroupId\\": \\"2c036e78-9e82-428e-afd6-177f5d04****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateStackGroupResponse>\\n    <RequestId>14A07460-EBE7-47CA-9757-12CC4761D47A</RequestId>\\n    <StackGroupId>2c036e78-9e82-428e-afd6-177f5d04****</StackGroupId>\\n</CreateStackGroupResponse>","errorExample":""}]',
      'title' => '创建资源栈组',
      'summary' => '使用资源编排模板创建资源栈组，通过资源栈组，可以在多个阿里云账号中跨地域创建资源栈。',
      'description' => '资源栈组是针对ROS资源栈的管理单元。通过资源栈组，可使用一个ROS模板在多个阿里云账号中跨地域创建资源栈。

您可以创建自助管理权限模式或服务管理权限模式的资源栈组：

- 当您使用阿里云账号创建自助管理权限模式的资源栈组时，管理员账号和目标账号都是阿里云账号。

- 当您开通了资源目录，使用资源目录的企业管理账号或委派管理员账号创建服务管理权限模式的资源栈组时，管理员账号是资源目录的企业管理账号或委派管理员账号，目标账号是资源目录的成员账号。

关于资源栈组的更多信息，请参见[概览](~~154578~~)。


本文将提供一个示例，在杭州地域`cn-hangzhou`使用ID为`5ecd1e10-b0e9-4389-a565-e4c15efc****`的模板创建一个名为`MyStackGroup`的资源栈组，其使用自助管理权限模式。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| CircularDependency |Circular Dependency Found: {reason}. | 400 |模板包含循环引用，reason为具体原因。 |
| InvalidSchema |{reason}. | 400 |模板格式不正确，reason为具体原因。 |
| InvalidTemplateAttribute |The Referenced Attribute ({resource} {name}) is incorrect. | 400 |模板包含不正确的资源属性（输出）引用，resource为资源名，name为属性名。 |
| InvalidTemplatePropertyType |The specified value type of ({resource} {section}) is incorrect. | 400 |模板资源定义中，字段类型不正确，resource为资源名，section为字段名。 |
| InvalidTemplateReference |The specified reference "{name}" (in {referencer}) is incorrect. | 400 |模板包含不正确的引用，name为引用名，referencer为引用者。 |
| InvalidTemplateSection |The template section is invalid: {section}. | 400 |模板包含无效的字段，section为字段名。 |
| InvalidTemplateVersion |The template version is invalid: {reason}. | 400 |模板版本不正确，reason为具体原因。 |
| UnknownUserParameter |The Parameter ({name}) was not defined in template. | 400 |传递的参数在模板中未定义，name为参数名。 |
| UserParameterMissing |The Parameter {name} was not provided. | 400 |参数在模板中已定义，但未传递值，name为参数名。 |
| StackGroupExists |The StackGroup ({name}) already exists. | 409 |同名资源栈组已存在，name为资源栈组名称。 |
| TemplateNotFound |The Tempalte ({ ID }) could not be found. | 404 |模板不存在。ID为模板ID。 |
| TemplateNotFound |The Template { ID } with version { version } could not be found. | 404 |模板或指定版本不存在。ID为模板ID，version为模板版本。 |',
    ),
    'DeleteStackGroup' => 
    array (
      'path' => '/V2/DeleteStackGroup',
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
            'description' => '资源栈组所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'StackGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组名称。名称在单个地域内唯一。   
长度不超过255个字符，必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyStackGroup',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteStackGroupResponse>\\r\\n\\t\\t<RequestId>14A07460-EBE7-47CA-9757-12CC4761D47A</RequestId>\\r\\n</DeleteStackGroupResponse>\\r\\n","errorExample":""}]',
      'title' => '删除资源栈组',
      'summary' => '删除已创建的资源栈组。',
      'description' => '当资源栈组内没有资源栈实例时，才能删除资源栈组。您可以调用[DeleteStackInstances](~~151715~~)删除资源栈。  
本文将提供一个示例，为您删除杭州地域名为`MyStackGroup`的资源栈组。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| StackGroupNotEmpty |The StackGroup ({name}) is not empty. | 400 |资源栈组内存在资源栈。name为资源栈组名称。 |
| StackGroupNotFound |The StackGroup ({name}) could not be found. | 404  |资源栈组不存在。name为资源栈组名称。 |',
    ),
    'UpdateStackGroup' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'StackGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组名称。名称在单个地域内唯一。   
长度不超过255个字符，必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyStackGroup',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组描述。

长度为1~256个字符。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'My Stack Group',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '使用自助管理权限模式部署资源栈的目标账号ID列表。最多支持添加20个目标账号ID。

',
            'type' => 'array',
            'items' => 
            array (
              'description' => '使用自助管理权限模式部署资源栈的目标账号ID列表。最多支持添加20个目标账号ID。

',
              'type' => 'string',
              'required' => false,
              'example' => '["151266687691****","141261387191****"]',
            ),
            'required' => false,
            'example' => '["12****"]',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '目标执行地域列表。最多支持添加20个地域。

',
            'type' => 'array',
            'items' => 
            array (
              'description' => '目标执行地域列表。最多支持添加20个地域。

',
              'type' => 'string',
              'required' => false,
              'example' => '["cn-hangzhou","cn-beijing"]',
            ),
            'required' => false,
            'example' => '["cn-hangzhou", "cn-beijing"]',
          ),
        ),
        5 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板主体的结构。长度为1~524,288个字节。如果长度较大，则建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免因URL过长而导致请求失败。                                                               
>您必须且仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"ROSTemplateFormatVersion": "2015-09-01"}',
          ),
        ),
        6 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于HTTP Web服务器（HTTP或HTTPS）或阿里云OSS存储桶中的模板（1~524,288个字节）。OSS存储桶的URL，例如oss://ros/template/demo或oss://ros/template/demo?RegionId=cn-hangzhou。如未指定OSS地域，默认与接口参数RegionId相同。

> 您必须且仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros-template/demo',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。   
长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。   
更多信息，请参见[如何保证幂等性](~~134212~~)。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        8 => 
        array (
          'name' => 'OperationDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新资源栈组的操作描述。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Update stack instances in hangzhou',
          ),
        ),
        9 => 
        array (
          'name' => 'OperationPreferences',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '更新资源栈组的操作设置。

包含以下参数：

- {"FailureToleranceCount": N}

  容错数。每个地域中资源栈可以失败的账号数，超过该数字将停止该地域中的操作。如果停止了一个地域中的操作，此操作在其他地域中不继续执行。
  
   N的取值范围：0~20。

   若不指定FailureToleranceCount，则默认为0。

- {"FailureTolerancePercentage": N}

   容错百分比。每个地域中资源栈可以失败的账号数占总账号数的百分比，超过该百分比将停止该地域中的操作。

   N的取值范围：0~100。百分比不是整数时，ROS会向下取整。

   若不指定FailureTolerancePercentage，则默认为0。

- {"MaxConcurrentCount": N}

   最大并发账号数。每个地域中可同时部署资源栈的账号数。

   N的取值范围：1~20。

   若不指定MaxConcurrentCount，则默认为1。

- {"MaxConcurrentPercentage": N}最大并发账号百分比。

   每个地域中可同时部署资源栈的账号数占总账号数的百分比。

   N的取值范围：1~100。百分比不是整数时，ROS会向下取整。

   若不指定MaxConcurrentPercentage，则默认为1。
- {"RegionConcurrencyType": N}
部署资源栈实例的地域级别并发类型，取值：
     - SEQUENTIAL （默认值）： 根据地域顺序依次在指定的每个地域部署，同一时间只在一个地域部署。

     - PARALLEL ：在所有指定的地域内并行部署。

多个参数之间用半角逗号（,）分隔。

> - 不能同时指定MaxConcurrentCount和MaxConcurrentPercentage。  
>- 不能同时指定FailureToleranceCount和FailureTolerancePercentage。',
            'type' => 'object',
            'required' => false,
            'docRequired' => false,
            'example' => '{"FailureToleranceCount": 1,"MaxConcurrentCount": 2}',
          ),
        ),
        10 => 
        array (
          'name' => 'AdministrationRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建具有自助管理权限的资源栈组时，需指定的供ROS扮演的RAM管理员角色名称。若不指定，则使用AliyunROSStackGroupAdministrationRole作为默认值。ROS以该角色身份进一步扮演执行角色（AliyunROSStackGroupExecutionRole）来操作资源栈组中资源栈实例所对应的资源栈。

长度为1~64个字符，可包含英文字母、数字和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'AliyunROSStackGroupAdministrationRole',
          ),
        ),
        11 => 
        array (
          'name' => 'ExecutionRoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建具有自助管理权限的资源栈组时，需指定的供管理员角色（AliyunROSStackGroupAdministrationRole）扮演的RAM执行角色名称。若不指定，则使用AliyunROSStackGroupExecutionRole作为默认值。ROS以该角色身份来操作资源栈组中资源栈实例所对应的资源栈。

长度为1~64个字符，可包含英文字母、数字和短划线（-）。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'AliyunROSStackGroupExecutionRole',
          ),
        ),
        12 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。

> 您必须且仅能指定TemplateBody、TemplateURL或TemplateId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        13 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板版本。若不指定，默认取最新版本。

>TemplateVersion仅在指定TemplateId时生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        14 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源栈组参数列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '参数的名称。若未指定参数的名称和值，则ROS将使用模板中指定的默认值。

N最大值为200。  

> Parameters为可选参数。若指定了Parameters，则Parameters.N.ParameterKey为必选参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Amount',
                ),
                'ParameterValue' => 
                array (
                  'description' => '参数的值。

N最大值为200。  

> Parameters为可选参数。若指定了Parameters，则Parameters.N.ParameterValue为必选参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        15 => 
        array (
          'name' => 'PermissionModel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权模式。

取值：

- SELF_MANAGED（默认值）：自助管理权限模式。使用该模式时，您需要事先在管理员账号和目标账号中手动创建RAM角色，建立二者的信任关系，然后在目标账号中部署资源栈。

- SERVICE_MANAGED：服务管理权限模式。使用该模式时，ROS会为管理员账号和目标账号自动创建服务关联角色，管理员账号通过服务关联角色在目标账号中部署资源栈。

> - 如果当前资源栈组下已有资源栈实例，则不允许更换授权模式。
>- 当您使用服务管理权限模式部署资源栈时，当前账号必须是资源目录的企业管理账号或委派管理员账号，且已开启可信访问。更多信息，请参见[设置委派管理员账号](~~308253~~)和[开启可信访问](~~298229~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'SELF_MANAGED',
          ),
        ),
        16 => 
        array (
          'name' => 'AutoDeployment',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '自动部署设置信息。

>仅当PermissionModel为SERVICE_MANAGED时，需要指定该参数。',
            'type' => 'object',
            'properties' => 
            array (
              'Enabled' => 
              array (
                'description' => '启用或者禁用自动部署。

取值：

- true：启用自动部署。启用自动部署后，如果目标资源夹中新增了成员账号，资源栈组会自动将资源栈实例部署到该账号。如果目标资源夹中删除了成员账号，则资源栈组会自动删除该账号中的资源栈实例。

- false：禁用自动部署。禁用自动部署后，目标资源夹中成员账号变动时资源栈实例不会发生变化。',
                'type' => 'boolean',
                'required' => true,
                'docRequired' => true,
                'example' => 'true',
              ),
              'RetainStacksOnAccountRemoval' => 
              array (
                'description' => '目标资源夹中删除成员账号时，是否保留成员账号中的资源栈。

取值：

- true：保留资源栈。

- false：删除资源栈。

>当Enabled为true时，RetainStacksOnAccountRemoval必选。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
            ),
            'required' => false,
            'example' => '{"Enabled": true, "RetainStacksOnAccountRemoval": true}',
          ),
        ),
        17 => 
        array (
          'name' => 'DeploymentTargets',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '使用服务管理权限模式更新资源栈的部署目标。',
            'type' => 'object',
            'properties' => 
            array (
              'RdFolderIds' => 
              array (
                'description' => '资源目录的资源夹ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源目录的资源夹ID列表。最多支持添加5个资源夹ID。

您需要至少指定RdFolderIds和AccountIds其中一个参数，具体如下：

- 如果您指定了RdFolderIds，而未指定AccountIds，则会在指定资源夹的所有成员账号中部署资源栈。如果您选择的是Root资源夹，则会在整个资源目录的所有成员账号中部署资源栈。

- 如果您指定了AccountIds，而未指定RdFolderIds，则会在指定成员账号列表中部署资源栈。

- 当两者同时指定时，AccountIds账号需属于RdFolderIds所指定的资源夹列表，则会在指定成员账号列表中部署资源栈。

>您可以在**资源管理**控制台的**概览**页面查看资源夹ID。具体操作，请参见[查看资源夹基本信息](~~111223~~)。

',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["fd-4PvlVLOL8v"]',
                ),
                'required' => false,
              ),
              'AccountIds' => 
              array (
                'description' => '资源目录中的成员账号ID列表。最多支持添加20个成员账号ID。

>您可以在**资源管理**控制台的**概览**页面查看成员账号ID。具体操作，请参见[查看成员详情](~~111624~~)。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源目录中的成员账号ID列表。最多支持添加20个成员账号ID。

>您可以在**资源管理**控制台的**概览**页面查看成员账号ID。具体操作，请参见[查看成员详情](~~111624~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["151266687691****","141261387191****"]',
                ),
                'required' => false,
              ),
            ),
            'required' => false,
            'example' => '{"RdFolderIds": ["fd-4PvlVLOL8v"]}',
          ),
        ),
        18 => 
        array (
          'name' => 'Capabilities',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源栈组选项列表，最大长度为1。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '源栈组选项。可选值：ExpandModules，在当前账号展开模块。

> - 仅在模板中使用到模块时生效。
>- 默认不在当前账号展开模块，要求所有部署目标账号中存在相关模块。如果在当前账号展开模块，则要求当前账号存在相关模块。',
              'type' => 'string',
              'required' => false,
              'example' => 'ExpandModules',
            ),
            'required' => false,
            'maxItems' => 1,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
              ),
              'OperationId' => 
              array (
                'description' => '操作ID。',
                'type' => 'string',
                'example' => '6da106ca-1784-4a6f-a7e1-e723863d****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\",\\n  \\"OperationId\\": \\"6da106ca-1784-4a6f-a7e1-e723863d****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateStackGroupResponse>\\n    <RequestId>14A07460-EBE7-47CA-9757-12CC4761D47A</RequestId>\\n    <OperationId>6da106ca-1784-4a6f-a7e1-e723863d****</OperationId>\\n</UpdateStackGroupResponse>","errorExample":""}]',
      'title' => '更新资源栈组',
      'summary' => '更新已创建的资源栈组。',
      'description' => '本文将提供一个示例，将杭州地域已有的自助管理权限模式的资源栈组`MyStackGroup`的模板更新为`{"ROSTemplateFormatVersion": "2015-09-01"}`。
',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| CircularDependency | Circular Dependency Found: {reason}.| 400  |模板包含循环引用。reason为具体原因。 |
| InvalidSchema | {reason}. | 400 | 模板格式不正确。reason为具体原因。 |
| InvalidTemplateAttribute | The Referenced Attribute ({resource} {name}) is incorrect. | 400 |模板包含不正确的资源属性（输出）引用。resource为资源名，name为属性名。 |
| InvalidTemplatePropertyType | The specified value type of ({resource} {section}) is incorrect. | 400 |模板资源定义的字段类型不正确。resource为资源名，section为字段名。 |
| InvalidTemplateReference | The specified reference "{name}" (in {referencer}) is incorrect. | 400 |模板包含不正确的引用。name为引用名，referencer为引用者。 |
| InvalidTemplateSection | The template section is invalid: {section}. | 400 |模板包含无效的字段。section为字段名。 |
| InvalidTemplateVersion | The template version is invalid: {reason}.| 400  |模板版本不正确。reason为具体原因。 |
| UnknownUserParameter | The Parameter ({name}) was not defined in template. | 400 |传递的参数在模板中未定义。name为参数名。 |
| UserParameterMissing | The Parameter {name} was not provided. | 400 |参数在模板中已定义，但未传递值。name为参数名。 |
| StackGroupOperationInProgress | Another Operation on StackGroup ({name})s is in progress. | 409 | 资源栈组存在进行中的操作。name为资源栈组名称。 |
| TemplateNotFound |The Tempalte ({ ID }) could not be found. | 404 |模板不存在。ID为模板ID。 |
| TemplateNotFound |The Template { ID } with version { version } could not be found. | 404 |模板或指定版本不存在。ID为模板ID，version为模板版本。 |',
    ),
    'ListStackGroups' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '12703',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREros4U80G2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组状态。如果未指定，则查询该地域下所有状态的资源栈组。

取值：

- ACTIVE：已激活。
- DELETED：已删除。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'ACTIVE',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。  

- 取值范围：1~50。
  
- 默认值：10。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的页码。  

- 起始值：1。
  
- 默认值：1。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。如果未指定，则查询所有资源组中的资源栈组。

>资源组ID可以从**资源管理**控制台的**资源组**页面下获取。具体操作，请参见[查看资源组基本信息](~~151181~~)。

',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmzawhxxcj****',
          ),
        ),
        5 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源栈组的标签。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源栈组的标签键。
> Tags为可选参数。如果需要指定Tags，则Tags.N.Key必须指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'usage',
                ),
                'Value' => 
                array (
                  'description' => '资源栈组的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'test',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
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
              'StackGroups' => 
              array (
                'description' => '资源栈组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'StackGroupId' => 
                    array (
                      'description' => '资源栈组ID。',
                      'type' => 'string',
                      'example' => 'fd0ddef9-9540-4b42-a464-94f77835****',
                    ),
                    'Status' => 
                    array (
                      'description' => '资源栈组状态。

取值：

- ACTIVE：已激活。

- DELETED：已删除。',
                      'type' => 'string',
                      'example' => 'ACTIVE',
                    ),
                    'DriftDetectionTime' => 
                    array (
                      'description' => '资源栈组最近一次成功执行偏差检测的时间。',
                      'type' => 'string',
                      'example' => '2020-02-27T07:47:47',
                    ),
                    'Description' => 
                    array (
                      'description' => '资源栈组描述。',
                      'type' => 'string',
                      'example' => 'My Stack Group',
                    ),
                    'StackGroupDriftStatus' => 
                    array (
                      'description' => '资源栈组在最近一次成功执行的偏差检测中的偏差状态。

取值：  

- DRIFTED：存在偏差。  

- NOT_CHECKED：未检测偏差。  

- IN_SYNC：不存在偏差。',
                      'type' => 'string',
                      'example' => 'IN_SYNC',
                    ),
                    'StackGroupName' => 
                    array (
                      'description' => '资源栈组名称。',
                      'type' => 'string',
                      'example' => 'MyStackGroup',
                    ),
                    'Tags' => 
                    array (
                      'description' => '资源栈组的标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '资源栈组的标签键。',
                            'type' => 'string',
                            'example' => 'usage1',
                          ),
                          'Value' => 
                          array (
                            'description' => '资源栈组的标签值。',
                            'type' => 'string',
                            'example' => 'test1',
                          ),
                        ),
                      ),
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-acfmzawhxxcj****',
                    ),
                    'PermissionModel' => 
                    array (
                      'description' => '授权模式。

取值：

- SELF_MANAGED：自助管理权限模式。

- SERVICE_MANAGED：服务管理权限模式。

>关于资源栈组的授权模式，请参见[概览](~~154578~~)。',
                      'type' => 'string',
                      'example' => 'SELF_MANAGED',
                    ),
                    'AutoDeployment' => 
                    array (
                      'description' => '自动部署设置信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Enabled' => 
                        array (
                          'description' => '启用或者禁用自动部署。

取值：

- true：启用自动部署。启用自动部署后，如果目标资源夹中新增了成员账号，资源栈组会自动将资源栈实例部署到目标资源夹中新增账户的指定地域下。如果从目标资源夹中删除账户，资源栈组将从此账户的指定地域中删除资源栈实例。

- false：禁用自动部署。禁用自动部署后，目标资源夹中成员账号变动时资源栈实例不会发生变化。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'RetainStacksOnAccountRemoval' => 
                        array (
                          'description' => '目标资源夹中删除成员账号时，是否保留成员账号中的资源栈。

取值：

- true：保留资源栈。

- false：删除资源栈。

>仅当Enabled返回true时，才会返回RetainStacksOnAccountRemoval。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '资源栈组创建时间。',
                      'type' => 'string',
                      'example' => '2024-01-05T05:38:31',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '资源栈组更新时间。',
                      'type' => 'string',
                      'example' => '2024-02-15T16:40:25',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '资源栈组总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '分页查询时设置的页码。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"StackGroups\\": [\\n    {\\n      \\"StackGroupId\\": \\"fd0ddef9-9540-4b42-a464-94f77835****\\",\\n      \\"Status\\": \\"ACTIVE\\",\\n      \\"DriftDetectionTime\\": \\"2020-02-27T07:47:47\\",\\n      \\"Description\\": \\"My Stack Group\\",\\n      \\"StackGroupDriftStatus\\": \\"IN_SYNC\\",\\n      \\"StackGroupName\\": \\"MyStackGroup\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"usage1\\",\\n          \\"Value\\": \\"test1\\"\\n        }\\n      ],\\n      \\"ResourceGroupId\\": \\"rg-acfmzawhxxcj****\\",\\n      \\"PermissionModel\\": \\"SELF_MANAGED\\",\\n      \\"AutoDeployment\\": {\\n        \\"Enabled\\": true,\\n        \\"RetainStacksOnAccountRemoval\\": true\\n      },\\n      \\"CreateTime\\": \\"2024-01-05T05:38:31\\",\\n      \\"UpdateTime\\": \\"2024-02-15T16:40:25\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1\\n}","errorExample":""},{"type":"xml","example":"<ListStackGroupsResponse>\\n    <StackGroups>\\n        <StackGroupId>fd0ddef9-9540-4b42-a464-94f77835****</StackGroupId>\\n        <Status>ACTIVE</Status>\\n        <DriftDetectionTime>2020-02-27T07:47:47</DriftDetectionTime>\\n        <Description>My Stack Group</Description>\\n        <StackGroupDriftStatus>IN_SYNC</StackGroupDriftStatus>\\n        <StackGroupName>MyStackGroup</StackGroupName>\\n        <Tags>\\n            <Key>usage1</Key>\\n            <Value>test1</Value>\\n        </Tags>\\n        <ResourceGroupId>rg-acfmzawhxxcj****</ResourceGroupId>\\n        <PermissionModel>SELF_MANAGED</PermissionModel>\\n        <AutoDeployment>\\n            <Enabled>true</Enabled>\\n            <RetainStacksOnAccountRemoval>true</RetainStacksOnAccountRemoval>\\n        </AutoDeployment>\\n    </StackGroups>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>14A07460-EBE7-47CA-9757-12CC4761D47A</RequestId>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n</ListStackGroupsResponse>","errorExample":""}]',
      'title' => '查询资源栈组列表',
      'summary' => '在一个阿里云地域下查询资源栈组列表详情。',
      'description' => '本文将提供一个示例，查询杭州地域处于激活状态的资源栈组列表。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| InvalidParameter |The specified parameter {name} is invalid, {reason}. | 400 |无效参数，name为参数名，reason为原因。 |',
    ),
    'GetStackGroup' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '12690',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREros4U80G2',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'StackGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组名称。名称在单个地域内唯一。   
长度不超过255个字符，必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。

>您必须且仅能指定StackGroupName或StackGroupId其中一个参数。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'MyStackGroup',
          ),
        ),
        2 => 
        array (
          'name' => 'StackGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组ID。

>您必须且仅能指定StackGroupName或StackGroupId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'fd0ddef9-9540-4b42-a464-94f77835****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
              ),
              'StackGroup' => 
              array (
                'description' => '资源栈组详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'StackGroupId' => 
                  array (
                    'description' => '资源栈组ID。',
                    'type' => 'string',
                    'example' => 'fd0ddef9-9540-4b42-a464-94f77835****',
                  ),
                  'Status' => 
                  array (
                    'description' => '资源栈组状态。

取值：

- ACTIVE：激活。
- DELETED：已删除。',
                    'type' => 'string',
                    'example' => 'ACTIVE',
                  ),
                  'AdministrationRoleName' => 
                  array (
                    'description' => '创建自助管理权限模式的资源栈组时，指定的供ROS扮演的RAM管理员角色名称。若不指定，则默认返回AliyunROSStackGroupAdministrationRole。
',
                    'type' => 'string',
                    'example' => 'AliyunROSStackGroupAdministrationRole',
                  ),
                  'Parameters' => 
                  array (
                    'description' => '资源栈组参数列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParameterKey' => 
                        array (
                          'description' => '参数的名称。
',
                          'type' => 'string',
                          'example' => 'Amount',
                        ),
                        'ParameterValue' => 
                        array (
                          'description' => '参数的值。',
                          'type' => 'string',
                          'example' => '12',
                        ),
                      ),
                    ),
                  ),
                  'Description' => 
                  array (
                    'description' => '资源栈组描述。',
                    'type' => 'string',
                    'example' => 'StackGroup Description',
                  ),
                  'StackGroupName' => 
                  array (
                    'description' => '资源栈组名称。',
                    'type' => 'string',
                    'example' => 'MyStackGroup',
                  ),
                  'ExecutionRoleName' => 
                  array (
                    'description' => '创建自助管理权限模式的资源栈组时，需指定的供管理员角色（AliyunROSStackGroupAdministrationRole）扮演的RAM执行角色名称。若不指定，则默认返回AliyunROSStackGroupExecutionRole。',
                    'type' => 'string',
                    'example' => 'AliyunROSStackGroupExecutionRole',
                  ),
                  'TemplateBody' => 
                  array (
                    'description' => '模板主体的结构。

> 不建议使用该返回参数，建议使用TemplateContent代替。',
                    'type' => 'string',
                    'example' => '{"ROSTemplateFormatVersion": "2015-09-01"}',
                  ),
                  'StackGroupDriftDetectionDetail' => 
                  array (
                    'description' => '资源栈组最近一次成功完成偏差检测的详情。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DriftDetectionTime' => 
                      array (
                        'description' => '资源栈组偏差检测时间。',
                        'type' => 'string',
                        'example' => '2020-02-27T07:47:47',
                      ),
                      'TotalStackInstancesCount' => 
                      array (
                        'description' => '资源栈实例的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '2',
                      ),
                      'FailedStackInstancesCount' => 
                      array (
                        'description' => '偏差检测失败的资源栈实例的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'DriftDetectionStatus' => 
                      array (
                        'description' => '资源栈组偏差检测状态。

取值：
- COMPLETED：资源栈组偏差检测结束，所有资源栈实例均成功完成了偏差检测。
- FAILED：资源栈组偏差检测结束，失败的资源栈实例偏差检测数量超过了设定的阈值。
- PARTIAL_SUCCESS：资源栈组偏差检测结束，部分资源栈实例偏差检测失败，但失败数量没有超过阈值。
- IN_PROGRESS：资源栈组偏差检测进行中。
- STOPPED：用户取消了资源栈组的偏差检测。',
                        'type' => 'string',
                        'example' => 'COMPLETED',
                      ),
                      'StackGroupDriftStatus' => 
                      array (
                        'description' => '资源栈组偏差状态。

取值：
- DRIFTED：至少一个资源栈实例处于偏差状态。
- NOT_CHECKED：资源栈组未进行过成功的偏差检测。
- IN_SYNC：所有资源栈实例均处于同步状态。',
                        'type' => 'string',
                        'example' => 'DRIFTED',
                      ),
                      'InProgressStackInstancesCount' => 
                      array (
                        'description' => '偏差检测中的资源栈实例的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'InSyncStackInstancesCount' => 
                      array (
                        'description' => '处于同步状态的资源栈实例的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'CancelledStackInstancesCount' => 
                      array (
                        'description' => '取消偏差检测的资源栈实例的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'DriftedStackInstancesCount' => 
                      array (
                        'description' => '处于偏差状态的资源栈实例的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                    ),
                  ),
                  'ResourceGroupId' => 
                  array (
                    'description' => '资源组ID。取决于创建资源栈组时，指定的资源组ID。',
                    'type' => 'string',
                    'example' => 'rg-acfmxazb4ph6aiy****',
                  ),
                  'PermissionModel' => 
                  array (
                    'description' => '授权模式。

取值：

- SELF_MANAGED：自助管理权限模式。

- SERVICE_MANAGED：服务管理权限模式。

>关于资源栈组的授权模式，请参见[概览](~~154578~~)。',
                    'type' => 'string',
                    'example' => 'SELF_MANAGED',
                  ),
                  'AutoDeployment' => 
                  array (
                    'description' => '自动部署设置信息。
>仅当PermissionModel为SERVICE_MANAGED时，才会返回此参数。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Enabled' => 
                      array (
                        'description' => '启用或者禁用自动部署。

取值：

- true：启用自动部署。启用自动部署后，如果目标资源夹中新增了成员账号，资源栈组会自动将资源栈实例部署到目标资源夹中新增账户的指定地域下。如果从目标资源夹中删除账户，资源栈组将从此账户的指定地域中删除资源栈实例。

- false：禁用自动部署。禁用自动部署后，目标资源夹中成员账号变动时资源栈实例不会发生变化。

',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                      'RetainStacksOnAccountRemoval' => 
                      array (
                        'description' => '目标资源夹中删除成员账号时，是否保留成员账号中的资源栈。

取值：

- true：保留资源栈。

- false：删除资源栈。

>仅当Enabled返回true时，才会返回此参数。',
                        'type' => 'boolean',
                        'example' => 'true',
                      ),
                    ),
                  ),
                  'RdFolderIds' => 
                  array (
                    'description' => '资源目录中的目标资源夹ID列表。用于将资源栈实例部署在此资源夹中的所有账号中。

>仅当PermissionModel为SERVICE_MANAGED时，才会返回此参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源目录中的目标资源夹ID列表。用于将资源栈实例部署在此资源夹中的所有账号中。

>仅当PermissionModel为SERVICE_MANAGED时，才会返回此参数。',
                      'type' => 'string',
                      'example' => '["fd-4PvlVLOL8v"]',
                    ),
                  ),
                  'TemplateContent' => 
                  array (
                    'description' => '模板主体的结构，JSON格式。
更多信息，请参见[模板语法](~~28857~~)。',
                    'type' => 'string',
                    'example' => '{
      "ROSTemplateFormatVersion": "2015-09-01"
}',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '资源栈组创建时间。',
                    'type' => 'string',
                    'example' => '2024-06-14T02:13:50',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '资源栈组更新时间。',
                    'type' => 'string',
                    'example' => '2024-06-15T02:01:00',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\",\\n  \\"StackGroup\\": {\\n    \\"StackGroupId\\": \\"fd0ddef9-9540-4b42-a464-94f77835****\\",\\n    \\"Status\\": \\"ACTIVE\\",\\n    \\"AdministrationRoleName\\": \\"AliyunROSStackGroupAdministrationRole\\",\\n    \\"Parameters\\": [\\n      {\\n        \\"ParameterKey\\": \\"Amount\\",\\n        \\"ParameterValue\\": \\"12\\"\\n      }\\n    ],\\n    \\"Description\\": \\"StackGroup Description\\",\\n    \\"StackGroupName\\": \\"MyStackGroup\\",\\n    \\"ExecutionRoleName\\": \\"AliyunROSStackGroupExecutionRole\\",\\n    \\"TemplateBody\\": \\"{\\\\\\"ROSTemplateFormatVersion\\\\\\": \\\\\\"2015-09-01\\\\\\"}\\",\\n    \\"StackGroupDriftDetectionDetail\\": {\\n      \\"DriftDetectionTime\\": \\"2020-02-27T07:47:47\\",\\n      \\"TotalStackInstancesCount\\": 2,\\n      \\"FailedStackInstancesCount\\": 0,\\n      \\"DriftDetectionStatus\\": \\"COMPLETED\\",\\n      \\"StackGroupDriftStatus\\": \\"DRIFTED\\",\\n      \\"InProgressStackInstancesCount\\": 0,\\n      \\"InSyncStackInstancesCount\\": 1,\\n      \\"CancelledStackInstancesCount\\": 0,\\n      \\"DriftedStackInstancesCount\\": 1\\n    },\\n    \\"ResourceGroupId\\": \\"rg-acfmxazb4ph6aiy****\\",\\n    \\"PermissionModel\\": \\"SELF_MANAGED\\",\\n    \\"AutoDeployment\\": {\\n      \\"Enabled\\": true,\\n      \\"RetainStacksOnAccountRemoval\\": true\\n    },\\n    \\"RdFolderIds\\": [\\n      \\"[\\\\\\"fd-4PvlVLOL8v\\\\\\"]\\"\\n    ],\\n    \\"TemplateContent\\": \\"{\\\\n      \\\\\\"ROSTemplateFormatVersion\\\\\\": \\\\\\"2015-09-01\\\\\\"\\\\n}\\",\\n    \\"CreateTime\\": \\"2024-06-14T02:13:50\\",\\n    \\"UpdateTime\\": \\"2024-06-15T02:01:00\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetStackGroupResponse>\\n    <RequestId>14A07460-EBE7-47CA-9757-12CC4761D47A</RequestId>\\n    <StackGroup>\\n        <Status>ACTIVE</Status>\\n        <ResourceGroupId>rg-acfmxazb4ph6aiy****</ResourceGroupId>\\n        <StackGroupName>MyStackGroup</StackGroupName>\\n        <StackGroupId>fd0ddef9-9540-4b42-a464-94f77835****</StackGroupId>\\n        <AdministrationRoleName>AliyunROSStackGroupAdministrationRole</AdministrationRoleName>\\n        <TemplateBody>\\n            <ROSTemplateFormatVersion>2015-09-01</ROSTemplateFormatVersion>\\n        </TemplateBody>\\n        <PermissionModel>SELF_MANAGED</PermissionModel>\\n        <ExecutionRoleName>AliyunROSStackGroupExecutionRole</ExecutionRoleName>\\n    </StackGroup>\\n</GetStackGroupResponse>","errorExample":""}]',
      'title' => '查询指定资源栈组的信息',
      'summary' => '在一个阿里云地域下根据资源栈组名称查询资源栈组详情。',
      'description' => '本文将提供一个示例，查询杭州地域已有的自助管理权限模式的资源栈组`MyStackGroup`的信息。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| StackGroupNotFound |The StackGroup ({name}) could not be found. | 404  |资源栈组不存在。name为资源栈组名称。 |
',
    ),
    'CreateStackInstances' => 
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
        'abilityTreeCode' => '12672',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURErosTBD793',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组所属的地域ID。

您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'StackGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组名称。名称在单个地域内唯一。   
长度不超过255个字符，必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyStackGroup',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '使用自助管理权限模式部署资源栈的目标账号ID列表。最多支持添加20个目标账号ID。

>您必须且仅能指定 `AccountIds`和`DeploymentTargets`其中一个参数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '使用自助管理权限模式部署资源栈的目标账号ID列表。最多支持添加20个目标账号ID。
>您必须且仅能指定 `AccountIds`和`DeploymentTargets`其中一个参数。',
              'type' => 'string',
              'required' => false,
              'example' => '["151266687691****", "141261387191****"]',
            ),
            'required' => false,
            'docRequired' => false,
            'example' => '["151266687691****","141261387191****"]',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '目标执行地域列表。最多支持添加20个地域。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '目标执行地域列表。最多支持添加20个地域。',
              'type' => 'string',
              'required' => false,
              'example' => '["cn-hangzhou","cn-beijing"]',
            ),
            'required' => true,
            'docRequired' => true,
            'example' => '["cn-hangzhou", "cn-beijing"]',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。   
长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。  
更多信息，请参见[如何保证幂等性](~~134212~~)。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        5 => 
        array (
          'name' => 'OperationDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建资源栈的操作描述。

长度为1~256个字符。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Create stack instances in hangzhou and beijing',
          ),
        ),
        6 => 
        array (
          'name' => 'OperationPreferences',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '创建资源栈的操作设置。

包含以下参数：

- {"FailureToleranceCount": N}

  容错数。每个地域中资源栈可以失败的账号数，超过该数字将停止该地域中的操作。如果停止了一个地域中的操作，此操作在其他地域中不继续执行。

  N的取值范围：0~20。
  
  若不指定FailureToleranceCount，则默认为0。 

- {"FailureTolerancePercentage": N}

    容错百分比。每个地域中资源栈可以失败的账号数占总账号数的百分比，超过该百分比将停止该地域中的操作。
  
    N的取值范围：0~100。百分比不是整数时，ROS会向下取整。

    若不指定FailureTolerancePercentage，则默认为0。

-  {"MaxConcurrentCount": N}

   最大并发账号数。每个地域中可同时部署资源栈的账号数。

   N的取值范围：1~20。

   若不指定MaxConcurrentCount，则默认为1。

- {"MaxConcurrentPercentage": N}

   最大并发账号百分比。每个地域中可同时部署资源栈的账号数占总账号数的百分比。
  
   取值范围：1~100。百分比不是整数时，ROS会向下取整。

   若不指定MaxConcurrentPercentage，则默认为1。

- {"RegionConcurrencyType": N}  
部署资源栈的地域级别并发类型。取值：      
  - SEQUENTIAL（默认值）：根据地域顺序依次在指定的每个地域部署，同一时间只在一个地域部署。
  - PARALLEL：在所有指定地域内并行部署。

多个参数之间用半角逗号（,）分隔。

> - 不能同时指定MaxConcurrentCount和MaxConcurrentPercentage。  
> - 不能同时指定FailureToleranceCount和FailureTolerancePercentage。',
            'type' => 'object',
            'required' => false,
            'docRequired' => false,
            'example' => '{"FailureToleranceCount": 1, "MaxConcurrentCount": 2}',
          ),
        ),
        7 => 
        array (
          'name' => 'TimeoutInMinutes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建资源栈的超时时间。  

- 默认值：60。

- 单位：分钟。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '1440',
            'minimum' => '10',
            'example' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'DisableRollback',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当创建资源栈失败时，是否禁用回滚策略。

取值：  

- true：禁用回滚，即在创建资源栈失败时不进行回滚。
  
- false（默认值）：不禁用回滚，即在创建资源栈失败时进行回滚。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'ParameterOverrides',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '覆盖参数列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '覆盖参数的名称。如果未指定参数名称，ROS将使用创建资源栈组时所指定的模板参数名称。

N最大值为200。  

> - ParameterOverrides为可选参数。  
> - 如果需要指定ParameterOverrides，则ParameterOverrides.N.ParameterKey和ParameterOverrides.N.ParameterValue必须同时指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Amount',
                ),
                'ParameterValue' => 
                array (
                  'description' => '覆盖参数的值。如果未指定参数的值，ROS将使用创建资源栈组时所指定的模板参数的值。

N最大值为200。  

> - ParameterOverrides为可选参数。  
> - 如果需要指定ParameterOverrides，则ParameterOverrides.N.ParameterKey和ParameterOverrides.N.ParameterValue必须同时指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        10 => 
        array (
          'name' => 'DeploymentTargets',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '使用服务管理权限模式部署资源栈的部署目标。
>您必须且仅能指定 `AccountIds`和`DeploymentTargets`其中一个参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RdFolderIds' => 
              array (
                'description' => '资源目录的资源夹ID列表。最多支持添加5个资源夹ID。

您可以在指定资源夹的所有成员账号中创建资源栈。如果您选择的是Root资源夹，则会在整个资源目录的所有成员账号中创建资源栈。

>您可以在**资源管理**控制台的**概览**页面查看资源夹ID。具体操作，请参见[查看资源夹基本信息](~~111223~~)。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源目录的资源夹ID列表。最多支持添加5个资源夹ID。

您可以在指定资源夹的所有成员账号中创建资源栈。如果您选择的是Root资源夹，则会在整个资源目录的所有成员账号中创建资源栈。

>您可以在**资源管理**控制台的**概览**页面查看资源夹ID。具体操作，请参见[查看资源夹基本信息](~~111223~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["fd-4PvlVLOL8v"]',
                ),
                'required' => true,
                'docRequired' => true,
              ),
              'AccountIds' => 
              array (
                'description' => '资源目录中的成员账号ID列表。最多支持添加20个成员账号ID。

>您可以在资源管理控制台的概览页面查看成员账号ID。具体操作，请参见查看成员详情。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源目录中的成员账号ID列表。最多支持添加20个成员账号ID。

>您可以在**资源管理**控制台的**概览**页面查看成员账号ID。具体操作，请参见[查看成员详情](~~111624~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["151266687691****","141261387191****"]',
                ),
                'required' => false,
              ),
            ),
            'required' => false,
            'example' => '{"RdFolderId": "fd-4PvlVLOL8v"}',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
              ),
              'OperationId' => 
              array (
                'description' => '操作ID。',
                'type' => 'string',
                'example' => '6da106ca-1784-4a6f-a7e1-e723863d****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\",\\n  \\"OperationId\\": \\"6da106ca-1784-4a6f-a7e1-e723863d****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateStackInstancesResponse>\\n        <RequestId>14A07460-EBE7-47CA-9757-12CC4761D47A</RequestId>\\n        <OperationId>6da106ca-1784-4a6f-a7e1-e723863d****</OperationId>\\n</CreateStackInstancesResponse>","errorExample":""}]',
      'title' => '在指定账号和地域下创建资源栈实例',
      'summary' => '为一个或多个账号在指定地域下创建资源栈实例。',
      'description' => '### 前提条件
请确保您已经创建了资源栈组。具体操作，请参见[CreateStackGroup](~~151333~~)。

### 应用场景
#### 跨账号创建资源栈 
当某企业需要在多个账号下创建相同的资源时，为提高部署效率，管理员账号可以在创建资源栈组时，选择添加多个目标账号，部署一个地域，从而在同一地域下的不同账号中创建多个资源栈，实现在多个账号下创建相同的资源。
#### 跨地域创建资源栈
当某企业需要在多个地域下创建相同的资源时，为提高部署效率，管理员账号可以在创建资源栈组时，选择添加一个目标账号，部署多个地域，从而在同一账号下的不同地域中创建多个资源栈，实现在多个地域下创建相同的资源。
#### 跨账号、跨地域创建资源栈
当某企业需要在多个账号下的多个地域中创建相同的资源，为提高部署效率，管理员账号可以在创建资源栈组时，选择添加多个目标账号，部署多个地域，从而在不同账号的不同地域下创建多个资源栈，实现在多个账号下的多个地域中创建相同的资源。

本文将提供一个示例，为杭州地域已有的自助管理权限模式的资源栈组`MyStackGroup`，在杭州地域和北京地域的阿里云账号`151266687691****`和`141261387191****`中创建资源栈。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| StackInstanceExists |The StackInstance ({instance}) already exists. | 409 |该资源栈组在指定的目标账号和地域存在资源栈。instance为资源栈所属的目标账号和目标地域。 |
| StackGroupOperationInProgress |Another Operation on StackGroup ({name}) is in progress. | 409 |资源栈组存在进行中的操作。name为资源栈组名称。 |',
    ),
    'DeleteStackInstances' => 
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
            'description' => '资源栈组所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'StackGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组名称。名称在单个地域内唯一。   
长度不超过255个字符，必须以数字或英文字母开头，可以包含数字、英文字母、短划线（-）和下划线（_）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyStackGroup',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '使用自助管理权限模式部署资源栈的目标账号ID列表。最多支持添加20个目标账号ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '使用自助管理权限模式部署资源栈的目标账号ID列表。最多支持添加20个目标账号ID。',
              'type' => 'string',
              'required' => false,
              'example' => '["151266687691****","141261387191****"]',
            ),
            'required' => false,
            'example' => '["151266687691****"]',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '目标执行地域列表。最多支持添加20个地域。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '目标执行地域列表。最多支持添加20个地域。',
              'type' => 'string',
              'required' => false,
              'example' => '["cn-hangzhou","cn-beijing"]',
            ),
            'required' => true,
            'docRequired' => true,
            'example' => '["cn-hangzhou", "cn-beijing"]',
          ),
        ),
        4 => 
        array (
          'name' => 'RetainStacks',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否删除资源栈。

取值：  

- true：不会删除对应的资源栈。  

- false：删除对应的资源栈。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。  
长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。  
更多信息，请参见[如何保证幂等性](~~134212~~)。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        6 => 
        array (
          'name' => 'OperationDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '删除资源栈的操作描述。

长度为1~256个字符。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Delete stack instances in hangzhou and beijing',
          ),
        ),
        7 => 
        array (
          'name' => 'OperationPreferences',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '删除资源栈的操作设置。

包含以下参数：

- {"FailureToleranceCount": N}

  容错数。每个地域中资源栈可以失败的账号数，超过该数字将停止该地域中的操作。如果停止了一个地域中的操作，此操作在其他地域中不继续执行。
  
   N的取值范围：0~20。

   若不指定FailureToleranceCount，则默认为0。

- {"FailureTolerancePercentage": N}

   容错百分比。每个地域中资源栈可以失败的账号数占总账号数的百分比，超过该百分比将停止该地域中的操作。

   N的取值范围：0~100。百分比不是整数时，ROS会向下取整。

   若不指定FailureTolerancePercentage，则默认为0。

- {"MaxConcurrentCount": N}

   最大并发账号数。每个地域中可同时部署资源栈的账号数。

   N的取值范围：1~20。

   若不指定MaxConcurrentCount，则默认为1。

- {"MaxConcurrentPercentage": N}最大并发账号百分比。

   每个地域中可同时部署资源栈的账号数占总账号数的百分比。

   N的取值范围：1~100。百分比不是整数时，ROS会向下取整。

   若不指定MaxConcurrentPercentage，则默认为1。

- {"RegionConcurrencyType": N}
部署资源栈的地域级别并发类型，取值：
     - SEQUENTIAL （默认值）： 根据地域顺序依次在指定的每个地域部署，同一时间只在一个地域部署。
     - PARALLEL ：在所有指定的地域内并行部署。

多个参数之间用半角逗号（,）分隔。

> - 不能同时指定MaxConcurrentCount和MaxConcurrentPercentage。  
> -  不能同时指定FailureToleranceCount和FailureTolerancePercentage。',
            'type' => 'object',
            'required' => false,
            'docRequired' => false,
            'example' => '{"FailureToleranceCount": 1, "MaxConcurrentCount": 2}',
          ),
        ),
        8 => 
        array (
          'name' => 'DeploymentTargets',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '使用服务管理权限模式部署资源栈的部署目标。',
            'type' => 'object',
            'properties' => 
            array (
              'RdFolderIds' => 
              array (
                'description' => '资源目录的资源夹ID列表。最多支持添加5个资源夹ID。

您可以在指定资源夹的所有成员账号中创建资源栈。如果您选择的是Root资源夹，则会在整个资源目录的所有成员账号中创建资源栈。

>资源夹ID可以从**资源管理**控制台的**概览**页面下查看。具体操作，请参见[查看资源夹基本信息](~~111223~~)。
',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源目录的资源夹ID列表。最多支持添加5个资源夹ID。

您可以在指定资源夹的所有成员账号中创建资源栈。如果您选择的是Root资源夹，则会在整个资源目录的所有成员账号中创建资源栈。

>资源夹ID可以从**资源管理**控制台的**概览**页面下查看。具体操作，请参见[查看资源夹基本信息](~~111223~~)。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["fd-4PvlVLOL8v"]',
                ),
                'required' => false,
                'docRequired' => false,
              ),
              'AccountIds' => 
              array (
                'description' => '资源目录中的成员账号ID列表。最多支持添加20个成员账号ID。

>您可以在**资源管理**控制台的**概览**页面查看成员账号ID。具体操作，请参见[查看成员详情](~~111624~~)。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源目录中的成员账号ID列表。最多支持添加20个成员账号ID。

>您可以在**资源管理**控制台的**概览**页面查看成员账号ID。具体操作，请参见[查看成员详情](~~111624~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["151266687691****","141261387191****"]',
                ),
                'required' => false,
              ),
            ),
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
              ),
              'OperationId' => 
              array (
                'description' => '操作ID。',
                'type' => 'string',
                'example' => '6da106ca-1784-4a6f-a7e1-e723863d****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\",\\n  \\"OperationId\\": \\"6da106ca-1784-4a6f-a7e1-e723863d****\\"\\n}","type":"json"}]',
      'title' => '删除特定账号和地域下的资源栈实例',
      'summary' => '为一个或多个账号在指定地域下删除资源栈实例，可以选择是否保留资源。',
      'description' => '本文将提供一个示例，对杭州地域已有的自助管理权限模式的资源栈组`MyStackGroup`，删除其在阿里云账号`151266687691****`和在北京地域下部署的资源栈。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| InvalidParameter |The specified parameter {name} is invalid, {reason}. | 400 |无效参数，name为参数名，reason为原因。 |
| StackGroupNotFound |The StackGroup ({name}) could not be found. | 404  |资源栈组不存在。name为资源栈组名称。 |
| StackGroupOperationInProgress |Another Operation on StackGroup ({name}) is in progress. | 409 |资源栈组存在进行中的操作。name为资源栈组名称。 |
',
    ),
    'UpdateStackInstances' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'StackGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组名称。名称在单个地域内唯一。   
长度不超过255个字符，必须以数字或英文字母开头，可以包含数字、英文字母、短划线（-）和下划线（_）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyStackGroup',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '使用自助管理权限模式部署资源栈的目标账号ID列表。最多支持添加20个目标账号ID。

> 使用自助管理权限模式更新资源栈时，此参数必填。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '使用自助管理权限模式部署资源栈的目标账号ID列表。最多支持添加20个目标账号ID。

> 使用自助管理权限模式更新资源栈时，此参数必填。',
              'type' => 'string',
              'required' => false,
              'example' => '["151266687691****","141261387191****"]',
            ),
            'required' => false,
            'docRequired' => false,
            'example' => '["151266687691****","141261387191****"]',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '目标执行地域列表。最多支持添加20个地域。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '目标执行地域列表。最多支持添加20个地域。',
              'type' => 'string',
              'required' => false,
              'example' => '["cn-hangzhou","cn-beijing"]',
            ),
            'required' => true,
            'docRequired' => true,
            'example' => '["cn-hangzhou", "cn-beijing"]',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。  
长度不超过64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。  
更多详情，请参见[如何保证幂等性](~~134212~~)。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        5 => 
        array (
          'name' => 'OperationDescription',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新资源栈的操作描述。

取值范围：1~256个字符。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'Update stack instances in hangzhou and beijing',
          ),
        ),
        6 => 
        array (
          'name' => 'OperationPreferences',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '更新资源栈的操作设置。

包含以下参数：

- {"FailureToleranceCount": N}

  容错数。每个地域中资源栈可以失败的账号数，超过该数字将停止该地域中的操作。如果停止了一个地域中的操作，此操作在其他地域中不继续执行。

  N的取值范围：0~20。
  
  若不指定FailureToleranceCount，则默认为0。 

- {"FailureTolerancePercentage": N}

    容错百分比。每个地域中资源栈可以失败的账号数占总账号数的百分比，超过该百分比将停止该地域中的操作。
  
    N的取值范围：0~100。百分比不是整数时，ROS会向下取整。

    若不指定FailureTolerancePercentage，则默认为0。

- {"MaxConcurrentCount": N}
 
  最大并发账号数。每个地域中可同时部署资源栈的账号数。

  N的取值范围：1~20。

  若不指定MaxConcurrentCount，则默认为1。

- {"MaxConcurrentPercentage": N}
 
   最大并发账号百分比。每个地域中可同时部署资源栈的账号数占总账号数的百分比。
  
   取值范围：1~100。百分比不是整数时，ROS会向下取整。

   若不指定MaxConcurrentPercentage，则默认为1。
- {"RegionConcurrencyType": N}
部署资源栈的地域级别并发类型，取值：
      
     - SEQUENTIAL （默认值）： 根据地域顺序依次在指定的每个地域部署，同一时间只在一个地域部署。

     - PARALLEL ：在所有指定的地域内并行部署。

多个参数之间用半角逗号（,）分隔。

> - 不能同时指定MaxConcurrentCount和MaxConcurrentPercentage。  
>- 不能同时指定FailureToleranceCount和FailureTolerancePercentage。',
            'type' => 'object',
            'required' => false,
            'docRequired' => false,
            'example' => '{"FailureToleranceCount": 1,"MaxConcurrentCount": 2}',
          ),
        ),
        7 => 
        array (
          'name' => 'TimeoutInMinutes',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新资源栈的超时时间。  

- 默认值：60。
  
- 单位：分钟。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '1440',
            'minimum' => '10',
            'example' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'ParameterOverrides',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '覆盖参数列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '覆盖参数的名称。如果未指定参数名称，ROS将使用创建资源栈组时所指定的参数名称。

N最大值为200。  

> - ParameterOverrides为可选参数。  
>- 如果需要指定ParameterOverrides，则ParameterOverrides.N.ParameterKey和ParameterOverrides.N.ParameterValue必须同时指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Amount',
                ),
                'ParameterValue' => 
                array (
                  'description' => '覆盖参数的值。如果未指定特定参数的名称和值，ROS将使用创建资源栈组时所指定的参数。

N最大值为200。  

> - ParameterOverrides为可选参数。  
>- 如果需要指定ParameterOverrides，则ParameterOverrides.N.ParameterKey和ParameterOverrides.N.ParameterValue必须同时指定。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        9 => 
        array (
          'name' => 'DeploymentTargets',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '使用服务管理权限模式部署资源栈的部署目标。

> 使用服务管理权限模式更新资源栈时，此参数必填。  ',
            'type' => 'object',
            'properties' => 
            array (
              'RdFolderIds' => 
              array (
                'description' => '资源目录的资源夹ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源目录的资源夹ID列表。最多支持添加5个资源夹ID。

您需要至少指定RdFolderIds和AccountIds其中一个参数，具体如下：

- 如果您指定了RdFolderIds，而未指定AccountIds，则会在指定资源夹的所有成员账号中部署资源栈。如果您选择的是Root资源夹，则会在整个资源目录的所有成员账号中部署资源栈。

- 如果您指定了AccountIds，而未指定RdFolderIds，则会在指定成员账号列表中部署资源栈。

- 当两者同时指定时，AccountIds账号需属于RdFolderIds所指定的资源夹列表，则会在指定成员账号列表中部署资源栈。

>您可以在**资源管理**控制台的**概览**页面查看资源夹ID。具体操作，请参见[查看资源夹基本信息](~~111223~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["fd-4PvlVLOL8v"]',
                ),
                'required' => false,
              ),
              'AccountIds' => 
              array (
                'description' => '资源目录中的成员账号ID列表。最多支持添加20个成员账号ID。

>您可以在**资源管理**控制台的**概览**页面查看成员账号ID。具体操作，请参见[查看成员详情](~~111624~~)。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源目录中的成员账号ID列表。最多支持添加20个成员账号ID。

>您可以在**资源管理**控制台的**概览**页面查看成员账号ID。具体操作，请参见[查看成员详情](~~111624~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '["151266687691****","141261387191****"]',
                ),
                'required' => false,
              ),
            ),
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
              ),
              'OperationId' => 
              array (
                'description' => '操作ID。',
                'type' => 'string',
                'example' => '6da106ca-1784-4a6f-a7e1-e723863d****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\",\\n  \\"OperationId\\": \\"6da106ca-1784-4a6f-a7e1-e723863d****\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateStackInstancesResponse>\\n\\t\\t<OperationId>6da106ca-1784-4a6f-a7e1-e723863d****</OperationId>\\n\\t\\t<RequestId>14A07460-EBE7-47CA-9757-12CC4761D47A</RequestId>\\n</UpdateStackInstancesResponse>\\n","errorExample":""}]',
      'title' => '在特定账号和地域下更新资源栈实例',
      'summary' => '为一个或多个账号在指定地域下更新资源栈实例。',
      'description' => '本文将提供一个示例，为杭州地域已有的自助管理权限模式的资源栈组`MyStackGroup`，在杭州地域和北京地域的阿里云账号`151266687691****`和`141261387191****`中更新资源栈。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| InvalidParameter |The specified parameter {name} is invalid, {reason}. | 400 |无效参数，name为参数名，reason为原因。 |
| StackGroupNotFound |The StackGroup ({name}) could not be found. | 404  |资源栈组不存在。name为资源栈组名称。 |
| StackGroupOperationInProgress |Another Operation on StackGroup ({name}) is in progress. | 409 |资源栈组存在进行中的操作。name为资源栈组名称。 |
',
    ),
    'GetStackInstance' => 
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
            'description' => '资源栈组所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'StackGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组名称。名称在单个地域内唯一。  
长度不超过255个字符，必须以数字或英文字母开头，可以包含数字、英文字母、短划线（-）和下划线（_）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyStackGroup',
          ),
        ),
        2 => 
        array (
          'name' => 'StackInstanceAccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属目标账号ID。

- 自助管理权限模式下，该账号是阿里云账号。

- 服务管理权限模式下，该账号是资源目录的成员账号。

>关于目标账号的更多信息，请参见[概览](~~154578~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '151266687691****',
          ),
        ),
        3 => 
        array (
          'name' => 'StackInstanceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属地域。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        4 => 
        array (
          'name' => 'OutputOption',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回Outputs参数（资源栈输出列表）。取值：  

- Enabled：返回Outputs参数。  

- Disabled（默认值）：不返回Outputs参数。  
> Outputs计算较为耗时。如果不需要获取Outputs信息，建议您将OutputOption指定为Disabled，提高接口响应速度。',
            'type' => 'string',
            'required' => false,
            'example' => 'Disabled',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B8A6B693-82C8-419D-8796-DE99EC33CFF9',
              ),
              'StackInstance' => 
              array (
                'description' => '资源栈详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '资源栈的状态。

取值：

- CURRENT：资源栈是最新的。

- OUTDATED：资源栈不是资源栈组最新的。可能原因如下：
    - 在创建资源栈（CreateStackInstances）操作期间，创建对应的资源栈失败。
    - 在更新资源栈（UpdateStackInstances或UpdateStackGroup）操作期间，更新对应的资源栈失败，或只更新了部分资源栈。
    - 创建或更新操作未完成。
',
                    'type' => 'string',
                    'example' => 'CURRENT',
                  ),
                  'StackGroupId' => 
                  array (
                    'description' => '资源栈组ID。',
                    'type' => 'string',
                    'example' => 'fd0ddef9-9540-4b42-a464-94f77835****',
                  ),
                  'StackId' => 
                  array (
                    'description' => '资源栈ID。

>仅当资源栈状态为CURRENT时，才会返回该参数。',
                    'type' => 'string',
                    'example' => '35ad60e3-6a92-42d8-8812-f0700d45****',
                  ),
                  'DriftDetectionTime' => 
                  array (
                    'description' => '资源栈组最近一次成功完成偏差检测的时间。

>仅当资源栈组做过偏差检测，才会返回该参数。',
                    'type' => 'string',
                    'example' => '2020-02-27T07:47:47',
                  ),
                  'StackDriftStatus' => 
                  array (
                    'description' => '资源栈组最近一次成功完成偏差检测的状态。

取值：
- DRIFTED：资源栈处于偏差状态。
- NOT_CHECKED：资源栈未进行过成功的偏差检测。
- IN_SYNC：资源栈处于同步状态。

>仅当资源栈组做过偏差检测，才会返回该参数。',
                    'type' => 'string',
                    'example' => 'IN_SYNC',
                  ),
                  'StatusReason' => 
                  array (
                    'description' => '状态原因描述。

>仅当资源栈的实例状态为OUTDATED时，才会返回该参数。',
                    'type' => 'string',
                    'example' => 'User initiated stop',
                  ),
                  'ParameterOverrides' => 
                  array (
                    'description' => '覆盖参数列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParameterKey' => 
                        array (
                          'description' => '覆盖参数的名称。',
                          'type' => 'string',
                          'example' => 'Amount',
                        ),
                        'ParameterValue' => 
                        array (
                          'description' => '覆盖参数的值。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                  'StackGroupName' => 
                  array (
                    'description' => '资源栈组名称。
',
                    'type' => 'string',
                    'example' => 'MyStackGroup',
                  ),
                  'AccountId' => 
                  array (
                    'description' => '资源栈所属目标账号ID。',
                    'type' => 'string',
                    'example' => '151266687691****',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '资源栈所属地域。',
                    'type' => 'string',
                    'example' => 'cn-beijing',
                  ),
                  'RdFolderId' => 
                  array (
                    'description' => '资源目录的资源夹ID。

>仅限使用服务管理权限模式的资源栈组，才会返回该参数。',
                    'type' => 'string',
                    'example' => 'fd-4PvlVLOL8v',
                  ),
                  'Outputs' => 
                  array (
                    'description' => '资源栈输出列表。  

> 当OutputOption取值为Enabled时返回该参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源栈输出列表。  

> 当OutputOption取值为Enabled时返回该参数。',
                      'type' => 'object',
                      'example' => '[{\'OutputKey\': \'rds_connection_string\', \'OutputValue\': \'rm-gw868n4lzy0i7kzx3.mysql.germany.rds.aliyuncs.com\'}]',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B8A6B693-82C8-419D-8796-DE99EC33CFF9\\",\\n  \\"StackInstance\\": {\\n    \\"Status\\": \\"CURRENT\\",\\n    \\"StackGroupId\\": \\"fd0ddef9-9540-4b42-a464-94f77835****\\",\\n    \\"StackId\\": \\"35ad60e3-6a92-42d8-8812-f0700d45****\\",\\n    \\"DriftDetectionTime\\": \\"2020-02-27T07:47:47\\",\\n    \\"StackDriftStatus\\": \\"IN_SYNC\\",\\n    \\"StatusReason\\": \\"User initiated stop\\",\\n    \\"ParameterOverrides\\": [\\n      {\\n        \\"ParameterKey\\": \\"Amount\\",\\n        \\"ParameterValue\\": \\"1\\"\\n      }\\n    ],\\n    \\"StackGroupName\\": \\"MyStackGroup\\",\\n    \\"AccountId\\": \\"151266687691****\\",\\n    \\"RegionId\\": \\"cn-beijing\\",\\n    \\"RdFolderId\\": \\"fd-4PvlVLOL8v\\",\\n    \\"Outputs\\": [\\n      {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetStackInstanceResponse>\\n    <RequestId>B8A6B693-82C8-419D-8796-DE99EC33CFF9</RequestId>\\n    <StackInstance>\\n        <Status>OUTDATED</Status>\\n        <AccountId>151266687691****</AccountId>\\n        <StatusReason>Cancelled since failure tolerance has exceeded</StatusReason>\\n        <StackGroupName>MyStackGroup</StackGroupName>\\n        <StackGroupId>fd0ddef9-9540-4b42-a464-94f77835****</StackGroupId>\\n        <RegionId>cn-beijing</RegionId>\\n    </StackInstance>\\n</GetStackInstanceResponse>","errorExample":""}]',
      'title' => '查询资源栈实例信息',
      'summary' => '查询指定资源栈组关联的资源栈实例详情。',
      'description' => '本文将提供一个示例，对杭州地域已有的自助管理权限模式的资源栈组`MyStackGroup`，查询其在北京地域和阿里云账号`151266687691****`下的资源栈实例的详细信息。
',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| InvalidParameter |The specified parameter {name} is invalid, {reason}. | 400 |无效参数，name为参数名，reason为原因。 |
| StackGroupNotFound |The StackGroup ({name}) could not be found. | 404  |资源栈组不存在。name为资源栈组名称。 |
| StackInstanceNotFound |The StackInstance could not be found. | 404 |资源栈不存在。 |',
    ),
    'StopStackGroupOperation' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'OperationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作ID。  
您可以调用[ListStackGroupOperations](~~151342~~)获取操作ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '6da106ca-1784-4a6f-a7e1-e723863d****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\"\\n}","errorExample":""},{"type":"xml","example":"<StopStackGroupOperationResponse>\\r\\n\\t\\t<RequestId>14A07460-EBE7-47CA-9757-12CC4761D47A</RequestId>\\r\\n</StopStackGroupOperationResponse>\\r\\n","errorExample":""}]',
      'title' => '停止资源栈组操作',
      'summary' => '停止资源栈组正在进行的操作。',
      'description' => '本文将提供一个示例，停止杭州地域操作ID为`6da106ca-1784-4a6f-a7e1-e723863****`的资源栈组操作。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| InvalidParameter |The specified parameter {name} is invalid, {reason}. | 400 |无效参数，name为参数名，reason为原因。 |
| StackGroupOperationNotFound |The StackGroupOperation ({OperationId}) could not be found. | 404 |资源栈组操作不存在。OperationId为操作ID。 |',
    ),
    'ListStackInstances' => 
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
            'description' => '资源栈组所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'StackGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组名称。名称在单个地域内唯一。   
长度不超过255个字符，必须以数字或英文字母开头，可以包含数字、英文字母、短划线（-）和下划线（_）。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyStackGroup',
          ),
        ),
        2 => 
        array (
          'name' => 'StackInstanceAccountId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属目标账号ID。

- 自助管理权限模式下，该账号是阿里云账号。

- 服务管理权限模式下，该账号是资源目录的成员账号。
>关于目标账号的更多信息，请参见[概览](~~154578~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '156552876021****',
          ),
        ),
        3 => 
        array (
          'name' => 'StackInstanceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属地域。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'cn-beijing',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。  

- 取值范围：1~50。
  
- 默认值：10。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的页码。  

- 起始值：1。
  
- 默认值：1。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
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
              'TotalCount' => 
              array (
                'description' => '资源栈总数。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '85DE34BD-7FF9-480F-8C21-556E9DA93ACD',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '分页查询时设置的页码。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'StackInstances' => 
              array (
                'description' => '资源栈列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '资源栈的状态。

取值：

- CURRENT：资源栈是最新的。

- OUTDATED：资源栈不是资源栈组最新的。可能存在如下原因：
    - 在创建资源栈（CreateStackInstances）操作期间，创建对应的资源栈失败。
    - 在更新资源栈（UpdateStackInstances或UpdateStackGroup）操作期间，更新对应的资源栈失败，或只更新了部分资源栈。
    - 创建或更新操作未完成。',
                      'type' => 'string',
                      'example' => 'CURRENT',
                    ),
                    'StackGroupId' => 
                    array (
                      'description' => '资源栈组ID。',
                      'type' => 'string',
                      'example' => 'fd0ddef9-9540-4b42-a464-94f77835****',
                    ),
                    'StackId' => 
                    array (
                      'description' => '资源栈所对应的资源栈ID。

>仅当资源栈状态为CURRENT时，才会返回该参数。',
                      'type' => 'string',
                      'example' => '35ad60e3-6a92-42d8-8812-f0700d45****',
                    ),
                    'DriftDetectionTime' => 
                    array (
                      'description' => '资源栈最近一次成功完成偏差检测的时间。

>仅当资源栈组做过偏差检测，才会返回该参数。',
                      'type' => 'string',
                      'example' => '2020-02-27T07:47:47',
                    ),
                    'StackDriftStatus' => 
                    array (
                      'description' => '最近一次成功完成偏差检测的资源栈的状态。

取值：
- DRIFTED：资源栈处于偏差状态。
- NOT_CHECKED：资源栈未进行过成功的偏差检测。
- IN_SYNC：资源栈处于同步状态。

>仅当资源栈组做过偏差检测，才会返回该参数。',
                      'type' => 'string',
                      'example' => 'IN_SYNC',
                    ),
                    'StatusReason' => 
                    array (
                      'description' => '状态原因描述。

>仅当资源栈的实例状态为OUTDATED时，才会返回该参数。',
                      'type' => 'string',
                      'example' => 'User initiated stop',
                    ),
                    'StackGroupName' => 
                    array (
                      'description' => '资源栈组名称。',
                      'type' => 'string',
                      'example' => 'MyStackGroup',
                    ),
                    'AccountId' => 
                    array (
                      'description' => '资源栈所属目标账号ID。',
                      'type' => 'string',
                      'example' => '156552876021****',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '资源栈所属地域。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'RdFolderId' => 
                    array (
                      'description' => '资源目录的资源夹ID。

>仅限使用服务管理权限模式的资源栈组，才会返回该参数。',
                      'type' => 'string',
                      'example' => 'fd-4PvlVLOL8v',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"85DE34BD-7FF9-480F-8C21-556E9DA93ACD\\",\\n  \\"PageSize\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"StackInstances\\": [\\n    {\\n      \\"Status\\": \\"CURRENT\\",\\n      \\"StackGroupId\\": \\"fd0ddef9-9540-4b42-a464-94f77835****\\",\\n      \\"StackId\\": \\"35ad60e3-6a92-42d8-8812-f0700d45****\\",\\n      \\"DriftDetectionTime\\": \\"2020-02-27T07:47:47\\",\\n      \\"StackDriftStatus\\": \\"IN_SYNC\\",\\n      \\"StatusReason\\": \\"User initiated stop\\",\\n      \\"StackGroupName\\": \\"MyStackGroup\\",\\n      \\"AccountId\\": \\"156552876021****\\",\\n      \\"RegionId\\": \\"cn-beijing\\",\\n      \\"RdFolderId\\": \\"fd-4PvlVLOL8v\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListStackInstancesResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>85DE34BD-7FF9-480F-8C21-556E9DA93ACD</RequestId>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <StackInstances>\\n        <Status>OUTDATED</Status>\\n        <AccountId>156552876021****</AccountId>\\n        <StatusReason>User initiated stop.</StatusReason>\\n        <StackGroupName>MyStackGroup</StackGroupName>\\n        <StackGroupId>fd0ddef9-9540-4b42-a464-94f77835****</StackGroupId>\\n        <RegionId>cn-beijing</RegionId>\\n    </StackInstances>\\n</ListStackInstancesResponse>","errorExample":""}]',
      'title' => '查询指定资源栈组关联的资源栈实例列表',
      'summary' => '在一个阿里云地域下查询指定资源栈组关联的资源栈实例列表详情。',
      'description' => '本文将提供一个示例，查询杭州地域已有的自助管理权限模式的资源栈组`MyStackGroup`下的资源栈列表。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| InvalidParameter |The specified parameter {name} is invalid, {reason}. | 400 |无效参数，name为参数名，reason为原因。 |
| StackGroupNotFound |The StackGroup ({name}) could not be found. | 404  |资源栈组不存在。name为资源栈组名称。 |
',
    ),
    'GetStackGroupOperation' => 
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
            'description' => '资源栈组所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'OperationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作ID。您可以调用[ListStackGroupOperations](~~151342~~)获取操作ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '6da106ca-1784-4a6f-a7e1-e723863d****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
              ),
              'StackGroupOperation' => 
              array (
                'description' => '资源栈组操作详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '操作状态。

取值：

- RUNNING：操作正在进行中。

- SUCCEEDED：操作成功。

- FAILED：操作失败。

- STOPPING：操作正在停止中。

- STOPPED：操作已停止。',
                    'type' => 'string',
                    'example' => 'SUCCEEDED',
                  ),
                  'StackGroupId' => 
                  array (
                    'description' => '资源栈组ID。',
                    'type' => 'string',
                    'example' => 'fd0ddef9-9540-4b42-a464-94f77835****',
                  ),
                  'Action' => 
                  array (
                    'description' => '操作动作。

取值：

- CREATE：创建。

- UPDATE：更新。

- DELETE：删除。

- DETECT_DRIFT：偏差检测。',
                    'type' => 'string',
                    'example' => 'DELETE',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '操作开始时间。',
                    'type' => 'string',
                    'example' => '2020-01-20T09:22:3',
                  ),
                  'RetainStacks' => 
                  array (
                    'description' => '是否保留资源栈。删除资源栈实例时可选择删除或保留它所指向的资源栈。

取值：

- true：只删除资源栈实例，不删除相应的资源栈。

- false：删除资源栈实例和相应的资源栈，请您谨慎操作。

>仅在您执行删除资源栈实例的操作时，才会返回该参数。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'StackGroupName' => 
                  array (
                    'description' => '资源栈组名称。',
                    'type' => 'string',
                    'example' => 'MyStackGroup',
                  ),
                  'OperationId' => 
                  array (
                    'description' => '资源栈组操作ID。
',
                    'type' => 'string',
                    'example' => '6da106ca-1784-4a6f-a7e1-e723863d****',
                  ),
                  'OperationDescription' => 
                  array (
                    'description' => '操作描述。

>仅在您调用[CreateStackInstances](~~151338~~)执行创建资源栈实例操作时，指定了请求参数OperationDescription，此处才会返回该参数。',
                    'type' => 'string',
                    'example' => 'Create stack instance in hangzhou',
                  ),
                  'StackGroupDriftDetectionDetail' => 
                  array (
                    'description' => '偏差检测的详情。

>仅在您执行偏差检测的操作时，才会返回该参数。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DriftDetectionTime' => 
                      array (
                        'description' => '偏差检测时间。',
                        'type' => 'string',
                        'example' => '2020-02-27T07:47:47',
                      ),
                      'TotalStackInstancesCount' => 
                      array (
                        'description' => '资源栈实例的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '2',
                      ),
                      'FailedStackInstancesCount' => 
                      array (
                        'description' => '偏差检测失败的资源栈实例的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'DriftDetectionStatus' => 
                      array (
                        'description' => '偏差检测状态。

取值：
- COMPLETED：资源栈组偏差检测结束，所有资源栈实例均成功完成了偏差检测。
- FAILED：资源栈组偏差检测结束，失败的资源栈实例偏差检测数量超过了设定的阈值。
- PARTIAL_SUCCESS：资源栈组偏差检测结束，部分资源栈实例偏差检测失败，但失败数量没有超过阈值。
- IN_PROGRESS：资源栈组偏差检测进行中。
- STOPPED：用户取消了资源栈组的偏差检测。',
                        'type' => 'string',
                        'example' => 'COMPLETED',
                      ),
                      'StackGroupDriftStatus' => 
                      array (
                        'description' => '资源栈组偏差状态。

取值：
- DRIFTED：至少一个资源栈实例处于偏差状态。
- NOT_CHECKED：资源栈组未进行过成功的偏差检测。
- IN_SYNC：所有资源栈实例均处于同步状态。',
                        'type' => 'string',
                        'example' => 'DRIFTED',
                      ),
                      'InProgressStackInstancesCount' => 
                      array (
                        'description' => '偏差检测中的资源栈实例的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'InSyncStackInstancesCount' => 
                      array (
                        'description' => '处于同步状态的资源栈实例的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'CancelledStackInstancesCount' => 
                      array (
                        'description' => '取消偏差检测的资源栈实例的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                      ),
                      'DriftedStackInstancesCount' => 
                      array (
                        'description' => '处于偏差状态的资源栈实例的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                    ),
                  ),
                  'OperationPreferences' => 
                  array (
                    'description' => '操作设置。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MaxConcurrentCount' => 
                      array (
                        'description' => '最大并发账号数。每个地域中可同时部署资源栈的账号数。

取值范围：1~20。

>只能返回MaxConcurrentCount和MaxConcurrentPercentage其中一个参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'FailureToleranceCount' => 
                      array (
                        'description' => '容错数。每个地域中资源栈可以失败的账号数，超过该数字将停止该地域中的操作。如果停止了一个地域中的操作，此操作在其他地域中不继续执行。

取值范围：0~20。

>只能返回FailureToleranceCount和FailureTolerancePercentage其中一个参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'MaxConcurrentPercentage' => 
                      array (
                        'description' => '最大并发账号百分比。每个地域中可同时部署资源栈的账号数占总账号数的百分比。

取值范围：1~100。

>只能返回MaxConcurrentCount和MaxConcurrentPercentage其中一个参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'RegionIdsOrder' => 
                      array (
                        'description' => '操作中按执行顺序排列的地域列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '操作中按执行顺序排列的地域列表。',
                          'type' => 'string',
                          'example' => '["cn-hangzhou","cn-beijing"]',
                        ),
                      ),
                      'FailureTolerancePercentage' => 
                      array (
                        'description' => '容错百分比。每个地域中资源栈可以失败的账号数占总账号数的百分比，超过该百分比将停止该地域中的操作。

取值范围：0~100。

>只能返回FailureToleranceCount和FailureTolerancePercentage其中一个参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                    ),
                  ),
                  'EndTime' => 
                  array (
                    'description' => '操作结束时间。',
                    'type' => 'string',
                    'example' => '2020-01-20T09:22:4',
                  ),
                  'ExecutionRoleName' => 
                  array (
                    'description' => '创建自助管理权限模式的资源栈组时，需指定的供管理员角色（AliyunROSStackGroupAdministrationRole）扮演的RAM执行角色名称。若不指定，则默认返回AliyunROSStackGroupExecutionRole。',
                    'type' => 'string',
                    'example' => 'AliyunROSStackGroupExecutionRole',
                  ),
                  'AdministrationRoleName' => 
                  array (
                    'description' => '创建自助管理权限模式的资源栈组时，指定的供ROS扮演的RAM管理员角色名称。若不指定，则默认返回AliyunROSStackGroupAdministrationRole。',
                    'type' => 'string',
                    'example' => 'AliyunROSStackGroupAdministrationRole',
                  ),
                  'DeploymentTargets' => 
                  array (
                    'description' => '使用服务管理权限模式时，资源栈实例的部署目标。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'RdFolderIds' => 
                      array (
                        'description' => '资源目录的资源夹ID列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '资源目录的资源夹ID列表。',
                          'type' => 'string',
                          'example' => '["fd-4PvlVLOL8v"]',
                        ),
                      ),
                      'AccountIds' => 
                      array (
                        'description' => '资源目录中的成员账号ID列表。

>仅在您调用[UpdateStackInstances](~~151716~~)执行更新资源栈实例操作时，指定了请求参数AccountIds，此处才会返回该参数。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '资源目录中的成员账号ID列表。

>仅在您调用[UpdateStackInstances](~~151716~~)执行更新资源栈实例操作时，指定了请求参数AccountIds，此处才会返回该参数。',
                          'type' => 'string',
                          'example' => '["151266687691****","141261387191****"]',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\",\\n  \\"StackGroupOperation\\": {\\n    \\"Status\\": \\"SUCCEEDED\\",\\n    \\"StackGroupId\\": \\"fd0ddef9-9540-4b42-a464-94f77835****\\",\\n    \\"Action\\": \\"DELETE\\",\\n    \\"CreateTime\\": \\"2020-01-20T09:22:3\\",\\n    \\"RetainStacks\\": true,\\n    \\"StackGroupName\\": \\"MyStackGroup\\",\\n    \\"OperationId\\": \\"6da106ca-1784-4a6f-a7e1-e723863d****\\",\\n    \\"OperationDescription\\": \\"Create stack instance in hangzhou\\",\\n    \\"StackGroupDriftDetectionDetail\\": {\\n      \\"DriftDetectionTime\\": \\"2020-02-27T07:47:47\\",\\n      \\"TotalStackInstancesCount\\": 2,\\n      \\"FailedStackInstancesCount\\": 0,\\n      \\"DriftDetectionStatus\\": \\"COMPLETED\\",\\n      \\"StackGroupDriftStatus\\": \\"DRIFTED\\",\\n      \\"InProgressStackInstancesCount\\": 0,\\n      \\"InSyncStackInstancesCount\\": 1,\\n      \\"CancelledStackInstancesCount\\": 0,\\n      \\"DriftedStackInstancesCount\\": 1\\n    },\\n    \\"OperationPreferences\\": {\\n      \\"MaxConcurrentCount\\": 1,\\n      \\"FailureToleranceCount\\": 1,\\n      \\"MaxConcurrentPercentage\\": 10,\\n      \\"RegionIdsOrder\\": [\\n        \\"[\\\\\\"cn-hangzhou\\\\\\",\\\\\\"cn-beijing\\\\\\"]\\"\\n      ],\\n      \\"FailureTolerancePercentage\\": 10\\n    },\\n    \\"EndTime\\": \\"2020-01-20T09:22:4\\",\\n    \\"ExecutionRoleName\\": \\"AliyunROSStackGroupExecutionRole\\",\\n    \\"AdministrationRoleName\\": \\"AliyunROSStackGroupAdministrationRole\\",\\n    \\"DeploymentTargets\\": {\\n      \\"RdFolderIds\\": [\\n        \\"[\\\\\\"fd-4PvlVLOL8v\\\\\\"]\\"\\n      ],\\n      \\"AccountIds\\": [\\n        \\"[\\\\\\"151266687691****\\\\\\",\\\\\\"141261387191****\\\\\\"]\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetStackGroupOperationResponse>\\n    <RequestId>14A07460-EBE7-47CA-9757-12CC4761D47A</RequestId>\\n    <StackGroupOperation>\\n        <Status>SUCCEEDED</Status>\\n        <Action>DELETE</Action>\\n        <RetainStacks>false</RetainStacks>\\n        <EndTime>2020-01-20T09:22:4</EndTime>\\n        <OperationId>645d0eed-f1e6-40b0-8e8f-0e1eaa34da6f</OperationId>\\n        <CreateTime>2020-01-20T09:22:3</CreateTime>\\n        <StackGroupName>MyStackGroup</StackGroupName>\\n        <StackGroupId>fd0ddef9-9540-4b42-a464-94f77835****</StackGroupId>\\n        <AdministrationRoleName>AliyunROSStackGroupAdministrationRole</AdministrationRoleName>\\n        <OperationPreferences>\\n            <MaxConcurrentCount>1</MaxConcurrentCount>\\n            <RegionIdsOrder>cn-hangzhou</RegionIdsOrder>\\n            <RegionIdsOrder>cn-beijing</RegionIdsOrder>\\n            <FailureToleranceCount>0</FailureToleranceCount>\\n        </OperationPreferences>\\n        <ExecutionRoleName>AliyunROSStackGroupExecutionRole</ExecutionRoleName>\\n    </StackGroupOperation>\\n</GetStackGroupOperationResponse>","errorExample":""}]',
      'title' => '查询资源栈组操作的信息',
      'summary' => '在一个阿里云地域下查询指定资源栈组的操作详情。',
      'description' => '本文将提供一个示例，对杭州地域已有的自助管理权限模式的资源栈组`MyStackGroup`，查询操作ID为`6da106ca-1784-4a6f-a7e1-e723863d****`的操作信息。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| InvalidParameter | The specified parameter {name} is invalid, {reason}. | 400 |无效参数，name为参数名，reason为原因。 |
| StackGroupOperationNotFound | The StackGroupOperation ({OperationId}) could not be found. | 404 |资源栈组操作不存在。OperationId为操作ID。 |',
    ),
    'ListStackGroupOperations' => 
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
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'StackGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组名称。名称在单个地域内唯一。  
长度不超过255个字符，必须以数字或英文字母开头，可以包含数字、英文字母、短划线（-）和下划线（_）。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyStackGroup',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。  
取值范围：1~50。  
默认值：10。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的页码。  
起始值：1。  
默认值：1。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
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
              'TotalCount' => 
              array (
                'description' => '资源栈组操作总数。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNumber' => 
              array (
                'description' => '分页查询时设置的页码。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'StackGroupOperations' => 
              array (
                'description' => '资源栈组操作详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '操作状态。

取值：  

- RUNNING：运行中。

- SUCCEEDED：成功。  

- FAILED：失败。

- STOPPING：停止中。 

- STOPPED：已停止。',
                      'type' => 'string',
                      'example' => 'SUCCEEDED',
                    ),
                    'StackGroupId' => 
                    array (
                      'description' => '资源栈组ID。',
                      'type' => 'string',
                      'example' => 'fd0ddef9-9540-4b42-a464-94f77835****',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '操作结束时间。',
                      'type' => 'string',
                      'example' => '2020-01-20T09:22:41.000000',
                    ),
                    'Action' => 
                    array (
                      'description' => '操作动作。

取值：   

- CREATE：创建。

- UPDATE：更新。

- DELETE：删除。

- DETECT_DRIFT：偏差检测。',
                      'type' => 'string',
                      'example' => 'CREATE',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '操作开始时间。',
                      'type' => 'string',
                      'example' => '2020-01-20T09:22:36.000000',
                    ),
                    'StackGroupName' => 
                    array (
                      'description' => '资源栈组名称。',
                      'type' => 'string',
                      'example' => 'MyStackGroup',
                    ),
                    'OperationId' => 
                    array (
                      'description' => '操作ID。',
                      'type' => 'string',
                      'example' => '14A07460-EBE7-47CA-9757-12CC4761****',
                    ),
                    'OperationDescription' => 
                    array (
                      'description' => '操作描述。',
                      'type' => 'string',
                      'example' => 'Create stack instance in hangzhou',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"StackGroupOperations\\": [\\n    {\\n      \\"Status\\": \\"SUCCEEDED\\",\\n      \\"StackGroupId\\": \\"fd0ddef9-9540-4b42-a464-94f77835****\\",\\n      \\"EndTime\\": \\"2020-01-20T09:22:41.000000\\",\\n      \\"Action\\": \\"CREATE\\",\\n      \\"CreateTime\\": \\"2020-01-20T09:22:36.000000\\",\\n      \\"StackGroupName\\": \\"MyStackGroup\\",\\n      \\"OperationId\\": \\"14A07460-EBE7-47CA-9757-12CC4761****\\",\\n      \\"OperationDescription\\": \\"Create stack instance in hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListStackGroupOperationsResponse>\\n\\t\\t<PageNumber>1</PageNumber>\\n\\t\\t<TotalCount>1</TotalCount>\\n\\t\\t<PageSize>10</PageSize>\\n\\t\\t<RequestId>4D838E26-B457-4871-B6DE-18814050D13D</RequestId>\\n\\t\\t<StackGroupOperations>\\n\\t\\t\\t<Status>SUCCEEDED</Status>\\n\\t\\t\\t<StackGroupId>fd0ddef9-9540-4b42-a464-94f77835****</StackGroupId>\\n\\t\\t\\t<Action>CREATE</Action>\\n\\t\\t\\t<StackGroupName>MyStackGroup</StackGroupName>\\n\\t\\t\\t<CreateTime>2020-01-20T09:22:36.000000</CreateTime>\\n\\t\\t\\t<OperationId>6da106ca-1784-4a6f-a7e1-e723863d****</OperationId>\\n\\t\\t\\t<EndTime>2020-01-20T09:22:41.000000</EndTime>\\n\\t\\t</StackGroupOperations>\\n</ListStackGroupOperationsResponse>\\n","errorExample":""}]',
      'title' => '查询资源栈组操作列表',
      'summary' => '在一个阿里云地域下查询资源栈组操作列表详情。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| InvalidParameter |The specified parameter {name} is invalid, {reason}. | 400 |无效参数，name为参数名，reason为原因。 |
| StackGroupNotFound |The StackGroup ({name}) could not be found. | 404  |资源栈组不存在。name为资源栈组名称。 |
',
    ),
    'ListStackGroupOperationResults' => 
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
            'description' => '资源栈组所属的地域ID。  
您可以调用[DescribeRegions](~~131035~~)查询最新的阿里云地域列表。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'OperationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作ID。

您可以调用[ListStackGroupOperations](~~151342~~)获取操作ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '6da106ca-1784-4a6f-a7e1-e723863d****',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。  

- 取值范围：1~50。
  
- 默认值：10。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的页码。  

- 起始值：1。
  
- 默认值：1。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
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
              'TotalCount' => 
              array (
                'description' => '操作结果总数。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '14A07460-EBE7-47CA-9757-12CC4761D47A',
              ),
              'PageSize' => 
              array (
                'description' => '分页查询时设置的每页行数。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageNumber' => 
              array (
                'description' => '分页查询时设置的页码。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'StackGroupOperationResults' => 
              array (
                'description' => '操作结果详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '执行状态。

取值：  

- RUNNING：操作正在进行中。  

- SUCCEEDED：操作成功。

- FAILED：操作失败。  

- STOPPING：操作正在停止中。  

- STOPPED：操作已停止。',
                      'type' => 'string',
                      'example' => 'SUCCEEDED',
                    ),
                    'StatusReason' => 
                    array (
                      'description' => '状态原因描述。

>仅当资源栈实例状态为已过期（OUTDATED）时，才会返回该参数。',
                      'type' => 'string',
                      'example' => 'User initiated operation',
                    ),
                    'AccountId' => 
                    array (
                      'description' => '资源栈实例所属目标账号ID。

- 自助管理权限模式下，该账号是阿里云账号。

- 服务管理权限模式下，该账号是资源目录的成员账号。

>关于目标账号的更多信息，请参见[概览](~~154578~~)。',
                      'type' => 'string',
                      'example' => '175458090349****',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '资源栈实例所属地域。',
                      'type' => 'string',
                      'example' => 'cn-beijing',
                    ),
                    'RdFolderId' => 
                    array (
                      'description' => '资源目录的资源夹ID。
>仅限使用服务管理权限模式的资源栈组，才会返回该参数。',
                      'type' => 'string',
                      'example' => '"fd-4PvlVLOL8v"',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"14A07460-EBE7-47CA-9757-12CC4761D47A\\",\\n  \\"PageSize\\": 1,\\n  \\"PageNumber\\": 1,\\n  \\"StackGroupOperationResults\\": [\\n    {\\n      \\"Status\\": \\"SUCCEEDED\\",\\n      \\"StatusReason\\": \\"User initiated operation\\",\\n      \\"AccountId\\": \\"175458090349****\\",\\n      \\"RegionId\\": \\"cn-beijing\\",\\n      \\"RdFolderId\\": \\"\\\\\\"fd-4PvlVLOL8v\\\\\\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListStackGroupOperationResultsResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>14A07460-EBE7-47CA-9757-12CC4761D47A</RequestId>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <StackGroupOperationResults>\\n        <Status>SUCCEEDED</Status>\\n        <AccountId>175458090349****</AccountId>\\n        <RegionId>cn-beijing</RegionId>\\n    </StackGroupOperationResults>\\n</ListStackGroupOperationResultsResponse>","errorExample":""}]',
      'title' => '查询资源栈组操作结果列表',
      'summary' => '在一个阿里云地域下查询指定资源栈组操作的结果列表详情。',
      'description' => '本文将提供一个示例，为您查询杭州地域已有的自助管理权限模式的资源栈组`MyStackGroup`在操作ID`6da106ca-1784-4a6f-a7e1-e723863d****`下的操作结果列表。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | 错误代码 | 错误信息 | HTTP状态码 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| InvalidParameter |The specified parameter {name} is invalid, {reason}. | 400 |无效参数，name为参数名，reason为原因。 |
',
    ),
    'UpdateStackTemplateByResources' => 
    array (
      'path' => '/V2/UpdateStackTemplateByResources',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此次请求是否只预览结果，取值：
- true：返回修正后的资源栈的模板的内容，并不会修改资源栈的模板。与原模板比较分析后，再判断是否要执行修正。
- false（默认值）：会直接对资源栈的模板进行修正以消除偏差。  

> 建议设置DryRun为true，预览修改后的模板。如果符合预期，再设置DryRun为false，真正地执行修改。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。 该值由客户端生成，并且必须是全局唯一的。   
长度最大为64个字符，可包含英文字符、数字、短划线（-）和下划线（_）。

更多详情，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        4 => 
        array (
          'name' => 'TemplateFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回的模板格式，取值：
- JSON（默认值）
- YAML',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'JSON',
          ),
        ),
        5 => 
        array (
          'name' => 'LogicalResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源名列表，用于过滤资源。修正模板时仅涉及列表中的资源。默认修正所有有偏差的资源。

如果被修正的列表中包含偏差状态为DELETED的资源，为了确保修正后模板的正确性，可能会对列表之外但引用了被删除资源的资源进行调整。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源名列表，用于过滤资源。修正模板时仅涉及列表中的资源。默认修正所有有偏差的资源。

如果被修正的列表中包含偏差状态为DELETED的资源，为了确保修正后模板的正确性，可能会对列表之外但引用了被删除资源的资源进行调整。',
              'type' => 'string',
              'required' => false,
              'example' => 'WebServer',
            ),
            'required' => false,
            'example' => 'Vpc',
            'maxItems' => 200,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
              'NewTemplateBody' => 
              array (
                'description' => '修正后的模板的内容。',
                'type' => 'string',
                'example' => '{\\"ROSTemplateFormatVersion\\": \\"2015-09-01\\", \\"Resources\\": {\\"Vpc\\": {\\"Type\\": \\"ALIYUN::ECS::VPC\\", \\"Properties\\": {\\"VpcName\\": \\"test\\", \\"CidrBlock\\": \\"192.168.0.0/16\\", \\"Description\\": \\"test2\\"}}}, \\"Outputs\\": {\\"VpcId\\": {\\"Value\\": {\\"Fn::GetAtt\\": [\\"Vpc\\", \\"VpcId\\"]}}}}',
              ),
              'OldTemplateBody' => 
              array (
                'description' => '修正前的模板的内容。',
                'type' => 'string',
                'example' => '{\\"ROSTemplateFormatVersion\\": \\"2015-09-01\\", \\"Resources\\": {\\"Vpc\\": {\\"Type\\": \\"ALIYUN::ECS::VPC\\", \\"Properties\\": {\\"VpcName\\": \\"test\\", \\"CidrBlock\\": \\"192.168.0.0/16\\", \\"Description\\": \\"test1\\"}}}, \\"Outputs\\": {\\"VpcId\\": {\\"Value\\": {\\"Fn::GetAtt\\": [\\"Vpc\\", \\"VpcId\\"]}}}}',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\",\\n  \\"NewTemplateBody\\": \\"{\\\\\\\\\\\\\\"ROSTemplateFormatVersion\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"2015-09-01\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Resources\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"Vpc\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"Type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"ALIYUN::ECS::VPC\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Properties\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"VpcName\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"test\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"CidrBlock\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"192.168.0.0/16\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Description\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"test2\\\\\\\\\\\\\\"}}}, \\\\\\\\\\\\\\"Outputs\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"VpcId\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"Value\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"Fn::GetAtt\\\\\\\\\\\\\\": [\\\\\\\\\\\\\\"Vpc\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"VpcId\\\\\\\\\\\\\\"]}}}}\\",\\n  \\"OldTemplateBody\\": \\"{\\\\\\\\\\\\\\"ROSTemplateFormatVersion\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"2015-09-01\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Resources\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"Vpc\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"Type\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"ALIYUN::ECS::VPC\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Properties\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"VpcName\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"test\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"CidrBlock\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"192.168.0.0/16\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"Description\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"test1\\\\\\\\\\\\\\"}}}, \\\\\\\\\\\\\\"Outputs\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"VpcId\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"Value\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"Fn::GetAtt\\\\\\\\\\\\\\": [\\\\\\\\\\\\\\"Vpc\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"VpcId\\\\\\\\\\\\\\"]}}}}\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateStackTemplateByResourcesResponse>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId>\\n    <NewTemplateBody>{\\"ROSTemplateFormatVersion\\": \\"2015-09-01\\", \\"Resources\\": {\\"Vpc\\": {\\"Type\\": \\"ALIYUN::ECS::VPC\\", \\"Properties\\": {\\"VpcName\\": \\"test\\", \\"CidrBlock\\": \\"192.168.0.0/16\\", \\"Description\\": \\"test2\\"}}}, \\"Outputs\\": {\\"VpcId\\": {\\"Value\\": {\\"Fn::GetAtt\\": [\\"Vpc\\", \\"VpcId\\"]}}}}</NewTemplateBody>\\n    <OldTemplateBody>{\\"ROSTemplateFormatVersion\\": \\"2015-09-01\\", \\"Resources\\": {\\"Vpc\\": {\\"Type\\": \\"ALIYUN::ECS::VPC\\", \\"Properties\\": {\\"VpcName\\": \\"test\\", \\"CidrBlock\\": \\"192.168.0.0/16\\", \\"Description\\": \\"test1\\"}}}, \\"Outputs\\": {\\"VpcId\\": {\\"Value\\": {\\"Fn::GetAtt\\": [\\"Vpc\\", \\"VpcId\\"]}}}}</OldTemplateBody>\\n</UpdateStackTemplateByResourcesResponse>","errorExample":""}]',
      'title' => '修正资源栈模板',
      'summary' => '通过执行偏差检测，消除资源栈的偏差。',
      'description' => '使用限制：只能对偏差状态（DRIFTED）的资源栈进行消除偏差。您需要先调用[DetectStackDrift](~~155094~~)接口对资源栈进行偏差检测，然后调用[GetStackDriftDetectionStatus](~~155097~~)接口查询资源栈偏差状态，确保资源栈处于偏差（DRIFTED）状态，最后调用UpdateStackTemplateByResources接口消除偏差。  

本文将提供一个示例，为杭州地域资源栈ID为`4a6c9851-3b0f-4f5f-b4ca-a14bf691****`的资源栈消除偏差。
',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HTTP| 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | StackDriftDetectionNotAvailable |There is no complete drift detection for stack ({ID}). |资源栈没有成功完成过的偏差。ID为资源栈ID。|
| 400 | StackAlreadyInSync |This is not need to correct stack drifts, stack ({ID}) is already in sync. |没有必要对资源栈模板进行修正，因为没有偏差。ID为资源栈ID。|
| 400 | CorrectStackDriftsFailure |{reason} |无法对资源栈进行修正。reason为原因。 |
| 404 | StackNotFound |The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。 |
| 404 | ResourceNotFound|The Resource ({name}) could not be found in Stack {stack}. |资源栈中不存某资源。name为资源名，stack为资源栈名称或ID。|',
    ),
    'GetStackDriftDetectionStatus' => 
    array (
      'path' => '/V2/GetStackDriftDetectionStatus',
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
            'description' => '偏差检测关联的资源栈所属的地域ID。  
您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DriftDetectionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '偏差检测ID。  
您可以调用[DetectStackDrift](~~610877~~)获取偏差检测ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'a7044f0d-6f2e-4128-a307-4524ef88****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
              'DriftDetectionTime' => 
              array (
                'description' => '资源栈偏差检测时间。',
                'type' => 'string',
                'example' => '2020-02-27T07:47:47',
              ),
              'DriftDetectionStatusReason' => 
              array (
                'description' => '偏差检测状态原因。',
                'type' => 'string',
                'example' => 'Detect stack drift successfully',
              ),
              'DriftedStackResourceCount' => 
              array (
                'description' => 'DRIFTED状态资源数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'StackDriftStatus' => 
              array (
                'description' => '资源栈偏差状态。取值：
- DRIFTED：资源栈与预期的模板配置不同，或者已偏离。如果资源栈的一个或多个资源已偏离，则认为资源栈已偏离。
- NOT_CHECKED：ROS没有检测资源栈是否与预期的模板配置不同。
- IN_SYNC：每个支持偏差检测的资源的当前配置与其预期的模板配置相匹配。不支持偏差检测资源的资源栈也将具有IN_SYNC状态。',
                'type' => 'string',
                'example' => 'DRIFTED',
              ),
              'DriftDetectionStatus' => 
              array (
                'description' => '偏差检测状态。取值：
- DETECTION_COMPLETE：已经对支持偏差检测的资源栈中的所有资源成功完成了资源栈偏差检测。
- DETECTION_FAILED：源栈中至少有一个资源未成功完成资源栈偏差检测。
- DETECTION_IN_PROGRESS：资源栈偏差检测操作正在进行中。',
                'type' => 'string',
                'example' => 'DETECTION_COMPLETE',
              ),
              'StackId' => 
              array (
                'description' => '资源栈ID。',
                'type' => 'string',
                'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
              ),
              'DriftDetectionId' => 
              array (
                'description' => '偏差检测ID。',
                'type' => 'string',
                'example' => 'a7044f0d-6f2e-4128-a307-4524ef88****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\",\\n  \\"DriftDetectionTime\\": \\"2020-02-27T07:47:47\\",\\n  \\"DriftDetectionStatusReason\\": \\"Detect stack drift successfully\\",\\n  \\"DriftedStackResourceCount\\": 1,\\n  \\"StackDriftStatus\\": \\"DRIFTED\\",\\n  \\"DriftDetectionStatus\\": \\"DETECTION_COMPLETE\\",\\n  \\"StackId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf691****\\",\\n  \\"DriftDetectionId\\": \\"a7044f0d-6f2e-4128-a307-4524ef88****\\"\\n}","errorExample":""},{"type":"xml","example":"<GetStackDriftDetectionStatusResponse>\\n    <DriftDetectionId>a7044f0d-6f2e-4128-a307-4524ef88****</DriftDetectionId>\\n    <DriftDetectionStatus>DETECTION_COMPLETE</DriftDetectionStatus>\\n    <DriftDetectionStatusReason>Detect stack drift successfully</DriftDetectionStatusReason>\\n    <DriftDetectionTime>2020-02-27T07:47:47</DriftDetectionTime>\\n    <DriftedStackResourceCount>1</DriftedStackResourceCount>\\n    <StackDriftStatus>DRIFTED</StackDriftStatus>\\n    <StackId>4a6c9851-3b0f-4f5f-b4ca-a14bf691****</StackId>\\n</GetStackDriftDetectionStatusResponse>","errorExample":""}]',
      'title' => '查询偏差检测的状态',
      'summary' => '在一个阿里云地域下根据偏差检测ID查询偏差检查状态。',
      'description' => '本文将提供一个示例，为您查询杭州地域偏差检测ID为`a7044f0d-6f2e-4128-a307-4524ef88****`的偏差检测操作的状态。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 404 | StackDriftDetectionNotFound |The stack drift detection ({ID}) could not be found. |偏差检测不存在。ID为偏差检测ID。 |',
    ),
    'ListStackResourceDrifts' => 
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
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用NextToken方式查询时，每次最多返回的结果数。

取值范围：1~100。

默认值：50。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'AAAAAdDWBF2****w==',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceDriftStatus',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源偏差状态。取值：
- DELETED：资源与预期的模板配置不同，因为资源已被删除。
- MODIFIED：资源与预期的模板配置不同。
- NOT_CHECKED：ROS没有检查资源是否与预期的模板配置不同。
- IN_SYNC：资源的当前配置与其预期的模板配置相匹配。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源偏差状态。取值：
- DELETED：资源与预期的模板配置不同，因为资源已被删除。
- MODIFIED：资源与预期的模板配置不同。
- NOT_CHECKED：ROS没有检查资源是否与预期的模板配置不同。
- IN_SYNC：资源的当前配置与其预期的模板配置相匹配。',
              'type' => 'string',
              'required' => false,
              'example' => 'MODIFIED',
            ),
            'required' => false,
            'example' => 'MODIFIED',
            'maxItems' => 4,
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
              'ResourceDrifts' => 
              array (
                'description' => '资源偏差。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LogicalResourceId' => 
                    array (
                      'description' => '资源逻辑ID，即模板中资源的名称。',
                      'type' => 'string',
                      'example' => 'ScalingRule',
                    ),
                    'StackId' => 
                    array (
                      'description' => '资源栈ID。',
                      'type' => 'string',
                      'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
                    ),
                    'PhysicalResourceId' => 
                    array (
                      'description' => '资源物理ID，即实际资源ID。',
                      'type' => 'string',
                      'example' => 'asr-2ze4zzc3kf9yz1kd****',
                    ),
                    'DriftDetectionTime' => 
                    array (
                      'description' => '资源偏差检测时间。',
                      'type' => 'string',
                      'example' => '2020-02-27T07:47:47',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'ALIYUN::ESS::ScalingRule',
                    ),
                    'ExpectedProperties' => 
                    array (
                      'description' => '模板中定义的资源属性，以JSON格式表示。',
                      'type' => 'string',
                      'example' => '{"ScalingRuleName": "test2"}',
                    ),
                    'ResourceDriftStatus' => 
                    array (
                      'description' => '资源偏差状态。取值：
- DELETED：资源与预期的模板配置不同，因为资源已被删除。
- MODIFIED：资源与预期的模板配置不同。
- NOT_CHECKED：ROS没有检查资源是否与预期的模板配置不同。
- IN_SYNC：资源的当前配置与其预期的模板配置相匹配。',
                      'type' => 'string',
                      'example' => 'MODIFIED',
                    ),
                    'PropertyDifferences' => 
                    array (
                      'description' => '资源属性偏差。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'ActualValue' => 
                          array (
                            'description' => '资源属性的实际取值。',
                            'type' => 'string',
                            'example' => 'test1',
                          ),
                          'DifferenceType' => 
                          array (
                            'description' => '资源属性的偏差类型。取值：
- ADD：已将值添加到数据类型为数组或列表的资源属性。
- REMOVE：属性已从当前资源配置中删除。
- NOT_EQUAL：当前属性值与堆栈模板中定义的预期值不同。',
                            'type' => 'string',
                            'example' => 'NOT_EQUAL',
                          ),
                          'PropertyPath' => 
                          array (
                            'description' => '资源属性的路径。',
                            'type' => 'string',
                            'example' => '/ScalingRuleName',
                          ),
                          'ExpectedValue' => 
                          array (
                            'description' => '资源属性模板定义值。',
                            'type' => 'string',
                            'example' => 'test2',
                          ),
                        ),
                      ),
                    ),
                    'ActualProperties' => 
                    array (
                      'description' => '实际的资源属性，以JSON格式表示。',
                      'type' => 'string',
                      'example' => '{"ScalingRuleName": "test1"}',
                    ),
                    'ModuleInfo' => 
                    array (
                      'description' => '资源来源模块的信息。如果资源来自于模块，才返回该字段。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'LogicalIdHierarchy' => 
                        array (
                          'description' => '包含资源的一个或多个模块的逻辑ID的串联列表。 模块从最外层开始列出，并以 `/`分隔。

在以下示例中，资源是从嵌套在父模块moduleA中的模块moduleB创建的。

`moduleA/moduleB`',
                          'type' => 'string',
                          'example' => 'moduleA/moduleB',
                        ),
                        'TypeHierarchy' => 
                        array (
                          'description' => '包含资源的一个或多个模块类型的串联列表。 模块类型从最外层开始列出，并以 `/`分隔。

在以下示例中，资源是从`MODULE::ROS::Child::Example`类型的模块创建的，该模块嵌套在`MODULE::ROS::Parent::Example`类型的父模块中。

`MODULE::ROS::Parent::Example/MODULE::ROS::Child::Example`',
                          'type' => 'string',
                          'example' => 'MODULE::ROS::Parent::Example/MODULE::ROS::Child::Example',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'NextToken' => 
              array (
                'description' => '本次调用返回的查询凭证值。',
                'type' => 'string',
                'example' => 'AAAAAdDWBF2****w==',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResourceDrifts\\": [\\n    {\\n      \\"LogicalResourceId\\": \\"ScalingRule\\",\\n      \\"StackId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf691****\\",\\n      \\"PhysicalResourceId\\": \\"asr-2ze4zzc3kf9yz1kd****\\",\\n      \\"DriftDetectionTime\\": \\"2020-02-27T07:47:47\\",\\n      \\"ResourceType\\": \\"ALIYUN::ESS::ScalingRule\\",\\n      \\"ExpectedProperties\\": \\"{\\\\\\"ScalingRuleName\\\\\\": \\\\\\"test2\\\\\\"}\\",\\n      \\"ResourceDriftStatus\\": \\"MODIFIED\\",\\n      \\"PropertyDifferences\\": [\\n        {\\n          \\"ActualValue\\": \\"test1\\",\\n          \\"DifferenceType\\": \\"NOT_EQUAL\\",\\n          \\"PropertyPath\\": \\"/ScalingRuleName\\",\\n          \\"ExpectedValue\\": \\"test2\\"\\n        }\\n      ],\\n      \\"ActualProperties\\": \\"{\\\\\\"ScalingRuleName\\\\\\": \\\\\\"test1\\\\\\"}\\",\\n      \\"ModuleInfo\\": {\\n        \\"LogicalIdHierarchy\\": \\"moduleA/moduleB\\",\\n        \\"TypeHierarchy\\": \\"MODULE::ROS::Parent::Example/MODULE::ROS::Child::Example\\"\\n      }\\n    }\\n  ],\\n  \\"NextToken\\": \\"AAAAAdDWBF2****w==\\",\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\"\\n}","errorExample":""},{"type":"xml","example":"<ListStackResourceDriftsResponse>\\n    <NextToken>AAAAAdDWBF2****w==</NextToken>\\n    <ResourceDrifts>\\n        <ActualProperties>{\\"ScalingRuleName\\": \\"test1\\"}</ActualProperties>\\n        <DriftDetectionTime>2020-02-27T07:47:47</DriftDetectionTime>\\n        <ExpectedProperties>{\\"ScalingRuleName\\": \\"test2\\"}</ExpectedProperties>\\n        <LogicalResourceId>ScalingRule</LogicalResourceId>\\n        <PhysicalResourceId>asr-2ze4zzc3kf9yz1kd****</PhysicalResourceId>\\n        <PropertyDifferences>\\n            <ActualValue>test1</ActualValue>\\n            <DifferenceType>NOT_EQUAL</DifferenceType>\\n            <ExpectedValue>test2</ExpectedValue>\\n            <PropertyPath>/ScalingRuleName</PropertyPath>\\n        </PropertyDifferences>\\n        <ResourceDriftStatus>MODIFIED</ResourceDriftStatus>\\n        <ResourceType>ALIYUN::ESS::ScalingRule</ResourceType>\\n        <StackId>4a6c9851-3b0f-4f5f-b4ca-a14bf691****</StackId>\\n    </ResourceDrifts>\\n    <RequestId>8625BB3E-2950-4F3E-A713-5458DB5CD874</RequestId>\\n</ListStackResourceDriftsResponse>","errorExample":""}]',
      'title' => '查询资源栈的资源偏差详情',
      'summary' => '在一个阿里云地域下查询资源栈的资源偏差详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | StackDriftDetectionExpired |The stack drift detection of next token is expired, a new stack drift detection ({ID}) has already completed, please query from the very beginning again. |NextToken对应的偏差检测ID已经失效了，因为一个新的偏差检测已经完成，请重新进行查询。ID为偏差检测的ID。|
| 400 | StackDriftDetectionNotAvailable |There is no complete drift detection for stack ({ID}). |资源栈没有成功完成过的偏差。ID为资源栈ID。 |
| 404 | StackNotFound |The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。 |',
    ),
    'DetectStackDrift' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。 该值由客户端生成，并且必须是全局唯一的。   
长度最大为64个字符，可包含英文字符、数字、短划线（-）和下划线（_）。  
更多详情，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        3 => 
        array (
          'name' => 'LogicalResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源名列表，用于过滤资源。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源名列表，用于过滤资源。',
              'type' => 'string',
              'required' => false,
              'example' => 'ScalingRule',
            ),
            'required' => false,
            'example' => 'ScalingRule',
            'maxItems' => 200,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6',
              ),
              'DriftDetectionId' => 
              array (
                'description' => '偏差检测ID。',
                'type' => 'string',
                'example' => 'a7044f0d-6f2e-4128-a307-4524ef88****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6\\",\\n  \\"DriftDetectionId\\": \\"a7044f0d-6f2e-4128-a307-4524ef88****\\"\\n}","errorExample":""},{"type":"xml","example":"<DetectStackDriftResponse>\\n    <DriftDetectionId>a7044f0d-6f2e-4128-a307-4524ef88****</DriftDetectionId>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6</RequestId>\\n</DetectStackDriftResponse>","errorExample":""}]',
      'title' => '对资源栈进行偏差检测',
      'summary' => '对资源栈进行偏差检测，可以限定具体资源，以便确定资源栈是否已偏离其预期的模板配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 404 | StackNotFound |The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。 |
| 404 | ResourceNotFound |The Resource ({name}) could not be found in Stack {stack}. |资源栈中不存某资源。name为资源名，stack为资源栈名称或ID。 |
| 409 | ActionInProgress |Stack {name} already has an action ({action}) in progress. |资源栈在变更中。name为资源栈名称或ID，action为具体的变更操作。 |',
    ),
    'DetectStackGroupDrift' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。该值由客户端生成，并且必须是全局唯一的。   
长度最大为64个字符，可包含英文字母、数字、短划线（-）和下划线（_）。  
更多详情，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'StackGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈组名称。名称在单个地域内唯一。   
长度不超过255个字符，必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyStackGroup',
          ),
        ),
        3 => 
        array (
          'name' => 'OperationPreferences',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '操作设置。类型为JSON字典。可包含如下字段：

- FailureToleranceCount

失败容错数。一个资源栈组操作中，若操作结果的失败总数不超过失败容错数，则操作成功，反之操作失败。

若不指定FailureToleranceCount，则默认为0。不能同时指定FailureToleranceCount和FailureTolerancePercentage。

取值范围：0~20。

- FailureTolerancePercentage

失败容错百分比。一个资源栈组操作中，若操作结果的失败百分比不超过失败容错百分比，则操作成功，反之操作失败。

不能同时指定FailureToleranceCount和FailureTolerancePercentage。

取值范围：0~100。

- MaxConcurrentCount

最大账号并发数，即一个资源栈组中，最多能有多少个账号同时执行偏差检测。

不能同时指定MaxConcurrentCount和MaxConcurrentPercentage。

取值范围：1~20。

- MaxConcurrentPercentage

最大账号并发百分比，即一个资源栈组中，最多能有多少百分比的账号同时执行偏差检测。

不能同时指定MaxConcurrentCount和MaxConcurrentPercentage。

取值范围：1~100。',
            'type' => 'object',
            'required' => false,
            'docRequired' => false,
            'example' => '{"FailureToleranceCount": 1, "MaxConcurrentCount": 2}',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6',
              ),
              'OperationId' => 
              array (
                'description' => '操作ID。',
                'type' => 'string',
                'example' => '6da106ca-1784-4a6f-a7e1-e723863d****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6\\",\\n  \\"OperationId\\": \\"6da106ca-1784-4a6f-a7e1-e723863d****\\"\\n}","errorExample":""},{"type":"xml","example":"<DetectStackGroupDriftResponse>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6</RequestId>\\n    <OperationId>6da106ca-1784-4a6f-a7e1-e723863d****</OperationId>\\n</DetectStackGroupDriftResponse>","errorExample":""}]',
      'title' => '对资源栈组进行偏差检测',
      'summary' => '对资源栈组进行偏差检测，以便确定资源栈组是否已偏离其预期的模板配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 404 | StackGroupNotFound |The StackGroup ({name}) could not be found. |资源栈组不存在。name为资源栈组名称。 |',
    ),
    'DetectStackResourceDrift' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。 该值由客户端生成，并且必须是全局唯一的。   
长度最大为64个字符，可包含英文字符、数字、短划线（-）和下划线（_）。  
更多详情，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'LogicalResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ScalingRuleName',
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
              'LogicalResourceId' => 
              array (
                'description' => '资源逻辑ID，即模板中资源的名称。',
                'type' => 'string',
                'example' => 'ScalingRule',
              ),
              'ResourceDriftStatus' => 
              array (
                'description' => '资源偏差状态。取值：
- DELETED：资源与预期的模板配置不同，因为资源已被删除。
- MODIFIED：资源与预期的模板配置不同。
- NOT_CHECKED：ROS未检查资源与预期的模板配置是否不同。
- IN_SYNC：资源的当前配置与其预期的模板配置相匹配。',
                'type' => 'string',
                'example' => 'MODIFIED',
              ),
              'PropertyDifferences' => 
              array (
                'description' => '资源属性偏差。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ActualValue' => 
                    array (
                      'description' => '资源属性的实际取值。',
                      'type' => 'string',
                      'example' => 'test1',
                    ),
                    'DifferenceType' => 
                    array (
                      'description' => '资源属性的偏差类型。取值：
- ADD：已将值添加到数据类型为数组或列表的资源属性。
- REMOVE：属性已从当前资源配置中删除。
- NOT_EQUAL：当前属性值与资源栈模板中定义的预期值不同。',
                      'type' => 'string',
                      'example' => 'NOT_EQUAL',
                    ),
                    'PropertyPath' => 
                    array (
                      'description' => '资源属性的路径。',
                      'type' => 'string',
                      'example' => '/ScalingRuleName',
                    ),
                    'ExpectedValue' => 
                    array (
                      'description' => '资源属性模板定义值。',
                      'type' => 'string',
                      'example' => 'test2',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
              'PhysicalResourceId' => 
              array (
                'description' => '资源物理ID，即实际资源ID。',
                'type' => 'string',
                'example' => 'asr-2ze4zzc3kf9yz1kd****',
              ),
              'ExpectedProperties' => 
              array (
                'description' => '模板中定义的资源属性，以JSON格式表示。',
                'type' => 'string',
                'example' => '{"ScalingRuleName": "test2"}',
              ),
              'DriftDetectionTime' => 
              array (
                'description' => '资源偏差检测时间。',
                'type' => 'string',
                'example' => '2020-02-27T07:47:47',
              ),
              'ResourceType' => 
              array (
                'description' => '资源类型。',
                'type' => 'string',
                'example' => 'ALIYUN::ESS::ScalingRule',
              ),
              'ActualProperties' => 
              array (
                'description' => '实际的资源属性，以JSON格式表示。',
                'type' => 'string',
                'example' => '{"ScalingRuleName": "test1"}',
              ),
              'StackId' => 
              array (
                'description' => '资源栈ID。',
                'type' => 'string',
                'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"LogicalResourceId\\": \\"ScalingRule\\",\\n  \\"ResourceDriftStatus\\": \\"MODIFIED\\",\\n  \\"PropertyDifferences\\": [\\n    {\\n      \\"ActualValue\\": \\"test1\\",\\n      \\"DifferenceType\\": \\"NOT_EQUAL\\",\\n      \\"PropertyPath\\": \\"/ScalingRuleName\\",\\n      \\"ExpectedValue\\": \\"test2\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\",\\n  \\"PhysicalResourceId\\": \\"asr-2ze4zzc3kf9yz1kd****\\",\\n  \\"ExpectedProperties\\": \\"{\\\\\\"ScalingRuleName\\\\\\": \\\\\\"test2\\\\\\"}\\",\\n  \\"DriftDetectionTime\\": \\"2020-02-27T07:47:47\\",\\n  \\"ResourceType\\": \\"ALIYUN::ESS::ScalingRule\\",\\n  \\"ActualProperties\\": \\"{\\\\\\"ScalingRuleName\\\\\\": \\\\\\"test1\\\\\\"}\\",\\n  \\"StackId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf691****\\"\\n}","errorExample":""},{"type":"xml","example":"<DetectStackResourceDriftResponse>\\n    <ActualProperties>{\\"ScalingRuleName\\": \\"test1\\"}</ActualProperties>\\n    <DriftDetectionTime>2020-02-27T07:47:47</DriftDetectionTime>\\n    <ExpectedProperties>{\\"ScalingRuleName\\": \\"test2\\"}</ExpectedProperties>\\n    <LogicalResourceId>ScalingRule</LogicalResourceId>\\n    <PhysicalResourceId>asr-2ze4zzc3kf9yz1kd****</PhysicalResourceId>\\n    <PropertyDifferences>\\n        <ActualValue>test1</ActualValue>\\n        <DifferenceType>NOT_EQUAL</DifferenceType>\\n        <ExpectedValue>test2</ExpectedValue>\\n        <PropertyPath>/ScalingRuleName</PropertyPath>\\n    </PropertyDifferences>\\n    <ResourceDriftStatus>MODIFIED</ResourceDriftStatus>\\n    <ResourceType>ALIYUN::ESS::ScalingRule</ResourceType>\\n    <StackId>4a6c9851-3b0f-4f5f-b4ca-a14bf691****</StackId>\\n</DetectStackResourceDriftResponse>","errorExample":""}]',
      'title' => '对资源进行偏差检测',
      'summary' => '对资源进行偏差检测，以便确定资源是否已偏离其预期的模板配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | ResourceDriftDetectionProcessing |Drift detection of resource {name} is processing. |已经在对资源进行偏差检测。name为资源名。|
| 400 | ResourceDriftDetectionFailure |Fail to detect resource {name} drift: {reason} |资源偏差检测失败。name为资源名，reason为原因。 |
| 404 | StackNotFound |The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。 |
| 404 | ResourceNotFound |The Resource ({name}) could not be found in Stack {stack}. |资源栈中不存某资源。name为资源名，stack为资源栈名称或ID。 |',
    ),
    'TagResources' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值：

- stack：资源栈。  

- stackgroup：资源栈组。

- template：模板。

- templatescratch：资源场景。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'stack',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。最多支持指定50个资源ID。 

> 当ResourceType取值为stackgroup时，资源ID需指定资源栈组名称。',
              'type' => 'string',
              'required' => false,
              'example' => '7fee80e1-8c48-4c2f-8300-0f6dc40b****',
            ),
            'required' => true,
            'example' => '7fee80e1-8c48-4c2f-8300-0f6dc40b****',
            'maxItems' => 50,
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源的标签。最多支持指定20个标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。最多支持指定20个标签键。  

长度不超过128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。最多支持指定20个标签值。  

长度不超过128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。 ',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 21,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C46FF5A8-C5F0-4024-8262-B16B639225A0',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C46FF5A8-C5F0-4024-8262-B16B639225A0\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\r\\n\\t\\t<RequestId>C46FF5A8-C5F0-4024-8262-B16B639225A0</RequestId>\\r\\n</TagResourcesResponse>\\r\\n","errorExample":""}]',
      'title' => '为指定的资源创建并绑定标签',
      'summary' => '指定一个或多个资源创建并绑定标签。',
      'description' => '本文将提供一个示例，为杭州地域ID为`7fee80e1-8c48-4c2f-8300-0f6dc40b****`的资源栈创建并绑定标签，标签键为`FinanceDept`、标签值为`FinanceJoshua`。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | InvalidParameter |The specified parameter ResourceType is invalid, {reason}.|指定的资源类型参数错误，reason为具体原因。|
| 400 | InvalidParameter |The specified parameter ResourceIds is invalid, {reason}.|资源ID不存在或校验异常，reason为具体原因。|
| 400 | InvalidParameter |The specified parameter Tags is invalid, {reason}.|指定的Tags参数错误，reason为具体原因。|
| 400 | Duplicate.TagKey |The Tag.N.Key contain duplicate key.|标签中存在重复的键，请保持键的唯一性。|',
    ),
    'ListTagResources' => 
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
            'description' => '标签所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。取值：

- stack：资源栈。  

- stackgroup：资源栈组。

- template：模板。

- templatescratch：资源场景。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'stack',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0*****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。最多支持指定50个资源ID。  

> 当ResourceType取值为stackgroup时，资源ID需指定资源栈组名称。',
              'type' => 'string',
              'required' => false,
              'example' => '6bc589b5-9c02-4944-8fc3-f3624234****',
            ),
            'required' => false,
            'example' => '6bc589b5-9c02-4944-8fc3-f3624234****',
            'maxItems' => 51,
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源的标签。最多支持指定20个标签。 ',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。最多支持指定20个标签键。如果指定该值，则不允许为空字符串。  
长度不超过128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。最多支持指定20个标签值。如果指定该值，可以为空字符串。  
长度不超过128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
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
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0*****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C429473A-5C66-4661-B5F8-4F900CD4330A',
              ),
              'TagResources' => 
              array (
                'description' => '资源绑定的标签信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源绑定的标签信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'stack',
                    ),
                    'TagValue' => 
                    array (
                      'description' => '资源的标签值。',
                      'type' => 'string',
                      'example' => 'TayValue1',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'c754d2a4-28f1-46df-b557-9586173a****',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '资源的标签键。',
                      'type' => 'string',
                      'example' => 'TagKey1',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0*****\\",\\n  \\"RequestId\\": \\"C429473A-5C66-4661-B5F8-4F900CD4330A\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceType\\": \\"stack\\",\\n      \\"TagValue\\": \\"TayValue1\\",\\n      \\"ResourceId\\": \\"c754d2a4-28f1-46df-b557-9586173a****\\",\\n      \\"TagKey\\": \\"TagKey1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n\\t<RequestId>FFBB9725-261D-4321-B627-C98304200065</RequestId>\\n\\t<NextToken></NextToken>\\n\\t<TagResources>\\n\\t\\t<ResourceId>c754d2a4-28f1-46df-b557-9586173a****</ResourceId>\\n\\t\\t<TagKey>TagKey1</TagKey>\\n\\t\\t<ResourceType>stack</ResourceType>\\n\\t\\t<TagValue>TayValue1</TagValue>\\n\\t</TagResources>\\n</ListTagResourcesResponse>\\n","errorExample":""}]',
      'title' => '查询资源已经绑定的标签',
      'summary' => '在一个阿里云地域下查询模板或资源栈中一个或多个资源已经绑定的标签。',
      'description' => '### 使用说明

- 请求中至少指定ResourceId或者Tag（Key与Value）其中一个参数，以确定查询对象。

- 同时指定ResourceId和Tag时，返回结果中仅包含同时满足这两个条件的ROS资源。

  
本文将提供一个示例，为您查询杭州地域ID为`6bc589b5-9c02-4944-8fc3-f3624234****`的资源栈已经绑定的标签。
',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HTTP状态码  | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | MissingParameter |One of the input parameters ResourceIds,Tags should be specified.|至少指定ResourceIds或Tags参数中的一个。|
| 400 | InvalidParameter |The specified parameter ResourceType is invalid, {reason}.|指定的资源类型参数错误，reason为具体原因。|
| 400 | InvalidParameter |The specified parameter Tags is invalid, {reason}.|指定的Tags参数错误，reason为具体原因。|
| 400 | Duplicate.TagKey |The Tag.N.Key contain duplicate key.|标签中存在重复的键，请保持键的唯一性。|',
    ),
    'ListTagKeys' => 
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
            'description' => '标签键所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型定义。取值：

- stack：资源栈。  

- stackgroup：资源栈组。

- template：模板。

- templatescratch：资源场景。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'stack',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0*****',
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
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0*****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C429473A-5C66-4661-B5F8-4F900CD4330A',
              ),
              'Keys' => 
              array (
                'description' => '标签键列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签键列表。多个标签键用半角逗号（,）分隔。
',
                  'type' => 'string',
                  'example' => '["TagKey1","TagKey2"]',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0*****\\",\\n  \\"RequestId\\": \\"C429473A-5C66-4661-B5F8-4F900CD4330A\\",\\n  \\"Keys\\": [\\n    \\"[\\\\\\"TagKey1\\\\\\",\\\\\\"TagKey2\\\\\\"]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagKeysResponse>\\n\\t\\t<Keys>TagKey1</Keys>\\n\\t\\t<Keys>TagKey2</Keys>\\n\\t\\t<NextToken>caeba0bbb2be03f84eb48b699f0*****</NextToken>\\n\\t\\t<RequestId>FAD755D7-F21E-449A-932D-2C59DAF86B14</RequestId>\\n</ListTagKeysResponse>\\n","errorExample":""}]',
      'title' => '查询标签键',
      'summary' => '在一个阿里云地域下查询资源栈或模板的标签键。',
      'description' => '本文将提供一个示例，为您查询杭州地域资源栈已绑定标签的标签键。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTagValues' => 
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
            'description' => '标签值所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型定义。取值：

- stack：资源栈。  

- stackgroup：资源栈组。

- template：模板。

- templatescratch：资源场景。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'stack',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一个查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0*****',
          ),
        ),
        3 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签键。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TagKey1',
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
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0*****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C429473A-5C66-4661-B5F8-4F900CD4330A',
              ),
              'Values' => 
              array (
                'description' => '标签值。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'example' => 'TagValue1',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0*****\\",\\n  \\"RequestId\\": \\"C429473A-5C66-4661-B5F8-4F900CD4330A\\",\\n  \\"Values\\": [\\n    \\"TagValue1\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagValuesResponse>\\n\\t\\t<NextToken></NextToken>\\n\\t\\t<RequestId>BD1EB89F-F2CD-4663-B602-26868A49EAFD</RequestId>\\n\\t\\t<Values>TagValue1</Values>\\n</ListTagValuesResponse>","errorExample":""}]',
      'title' => '查询指定标签键对应的标签值',
      'summary' => '在一个阿里云地域下查询模板或资源栈中指定标签键对应的标签值。',
      'description' => '本文将提供一个示例，为您查询杭州地域资源栈已绑定标签的标签键`TagKey1`对应的标签值。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UntagResources' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型定义。取值：

- stack：资源栈。  

- stackgroup：资源栈组。

- template：模板。

- templatescratch：资源场景。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'stack',
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否解绑资源上全部的标签，当请求中未设置TagKey.N时该参数有效。取值：  

- true：解绑资源上全部的标签。  

- false（默认值）：解绑资源上指定的标签。

',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID。

> 当ResourceType取值为stackgroup时，资源ID需指定资源栈组名称。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。

> 当ResourceType取值为stackgroup时，资源ID需指定资源栈组名称。',
              'type' => 'string',
              'required' => false,
              'example' => '46ec7b78-9d5e-4b21-aefd-448c90aa****',
            ),
            'required' => true,
            'example' => '46ec7b78-9d5e-4b21-aefd-448c90aa****',
            'maxItems' => 50,
          ),
        ),
        4 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源的标签值。N的取值范围：1~20。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签值。N的取值范围：1~20。',
              'type' => 'string',
              'required' => false,
              'example' => 'FinanceDept',
            ),
            'required' => false,
            'example' => 'FinanceDept',
            'maxItems' => 21,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C46FF5A8-C5F0-4024-8262-B16B639225A0	',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C46FF5A8-C5F0-4024-8262-B16B639225A0\\\\t\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\r\\n\\t\\t<RequestId>C46FF5A8-C5F0-4024-8262-B16B639225A0</RequestId>\\r\\n</UntagResourcesResponse>\\r\\n","errorExample":""}]',
      'title' => '解绑并删除标签',
      'summary' => '为指定的一个或多个资源统一解绑并删除标签。',
      'description' => '本文将提供一个示例，为杭州地域ID为`46ec7b78-9d5e-4b21-aefd-448c90aa****`的资源栈解绑全部标签。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' | HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 400 | InvalidParameter |The specified parameter ResourceType is invalid, {reason}.|指定的资源类型参数错误，reason为具体原因。|
| 400 | InvalidParameter |The specified parameter ResourceIds is invalid, {reason}.|资源ID不存在或校验异常，reason为具体原因。|
| 400 | InvalidParameter |The specified parameter Tags is invalid, {reason}.|指定的Tags参数错误，reason为具体原因。|
| 400 | Duplicate.TagKey |The Tag.N.Key contain duplicate key.|标签中存在重复的键，请保持键的唯一性。|',
    ),
    'CreateDiagnostic' => 
    array (
      'summary' => '创建诊断任务进行一键诊断。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '125576',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURErosZVIFJW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DiagnosticKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '诊断的关键字。

您可以输入待诊断资源栈的ID。',
            'type' => 'string',
            'required' => false,
            'example' => '37A5679B-8488-5A5D-8D5C-90E66A577A5D',
          ),
        ),
        1 => 
        array (
          'name' => 'Product',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '诊断产品名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ros',
          ),
        ),
        2 => 
        array (
          'name' => 'DiagnosticType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '诊断类型。取值：Stack，诊断资源栈。',
            'type' => 'string',
            'required' => false,
            'example' => 'Stack',
          ),
        ),
        3 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '选择生成的诊断报告的语言。
目前仅支持中英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-cn',
            'default' => 'zh-cn',
            'enum' => 
            array (
              0 => 'zh-cn',
              1 => 'en',
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
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Forbidden',
              ),
              'DiagnosticType' => 
              array (
                'description' => '诊断类型。',
                'type' => 'string',
                'example' => 'Stack',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误内容。',
                'type' => 'string',
                'example' => 'You are not authorized to complete this action.',
              ),
              'ReportId' => 
              array (
                'description' => '诊断ID。',
                'type' => 'string',
                'example' => 'dr-e94e39a1274d44b6****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '943B24D7-1A67-55A4-B045-818F90693D3A',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。取值：
- true：调用成功。
- false：调用失败。',
                'type' => 'string',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'ROS::2019-09-10::GetDiagnostic',
        'callbackInterval' => 2000,
        'maxCallbackTimes' => 10,
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"Forbidden\\",\\n  \\"DiagnosticType\\": \\"Stack\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Message\\": \\"You are not authorized to complete this action.\\",\\n  \\"ReportId\\": \\"dr-e94e39a1274d44b6****\\",\\n  \\"RequestId\\": \\"943B24D7-1A67-55A4-B045-818F90693D3A\\",\\n  \\"Success\\": \\"true\\"\\n}","type":"json"}]',
      'title' => '创建诊断',
    ),
    'GetDiagnostic' => 
    array (
      'summary' => '指定诊断报告ID，获取诊断的详细信息。',
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
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ReportId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '诊断ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'dr-d540def087714890****',
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
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Forbidden',
              ),
              'DiagnosticProduct' => 
              array (
                'description' => '诊断项名称。',
                'type' => 'string',
                'example' => 'ros',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误内容。',
                'type' => 'string',
                'example' => 'The specified parameter ReportId is invalid, Can not find diagnostic report dr-5f6135782f104b0f****.',
              ),
              'Recommends' => 
              array (
                'description' => '诊断建议。',
                'type' => 'object',
                'example' => '{\'RosActionMessages\': {\'Reason\': \'Fail to delete stack (fc966920-450a-456b-983c-deeaec8e****), as deletion protection is enabled.\', \'Recommend\': \'\'}}',
              ),
              'ReportId' => 
              array (
                'description' => '诊断报告ID。',
                'type' => 'string',
                'example' => 'dr-cc80afc48c8741e9****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '96A24844-9603-5E79-BDF4-EFD412FC5D4C',
              ),
              'Status' => 
              array (
                'description' => '诊断状态。取值：
-  Running：运行中。
- Complete：诊断完成。
- Failed：诊断失败。',
                'type' => 'string',
                'example' => 'Running',
              ),
              'StatusReason' => 
              array (
                'description' => '诊断状态的原因。',
                'type' => 'string',
                'example' => 'Complete',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。取值：
- true：调用成功。
- false：调用失败。',
                'type' => 'string',
                'example' => 'true',
              ),
              'DiagnosticKey' => 
              array (
                'description' => '诊断的关键字。',
                'type' => 'string',
                'example' => '0938F60C-A2CA-5A2E-9983-03EB1E6D7AE2',
              ),
              'DiagnosticTime' => 
              array (
                'description' => '诊断时间。',
                'type' => 'string',
                'example' => '2023-03-27T03:32:03Z',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'DiagnosticResult' => 
              array (
                'description' => '诊断结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'StackMessages' => 
                  array (
                    'description' => '资源栈信息。',
                    'type' => 'object',
                  ),
                  'RosActionMessages' => 
                  array (
                    'description' => 'ROS调用信息。',
                    'type' => 'object',
                  ),
                  'FailedResources' => 
                  array (
                    'description' => '诊断失败的资源列表。',
                    'type' => 'object',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"Forbidden\\",\\n  \\"DiagnosticProduct\\": \\"ros\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Message\\": \\"The specified parameter ReportId is invalid, Can not find diagnostic report dr-5f6135782f104b0f****.\\",\\n  \\"Recommends\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"ReportId\\": \\"dr-cc80afc48c8741e9****\\",\\n  \\"RequestId\\": \\"96A24844-9603-5E79-BDF4-EFD412FC5D4C\\",\\n  \\"Status\\": \\"Running\\",\\n  \\"StatusReason\\": \\"Complete\\",\\n  \\"Success\\": \\"true\\",\\n  \\"DiagnosticKey\\": \\"0938F60C-A2CA-5A2E-9983-03EB1E6D7AE2\\",\\n  \\"DiagnosticTime\\": \\"2023-03-27T03:32:03Z\\",\\n  \\"HttpCode\\": \\"200\\",\\n  \\"DiagnosticResult\\": {\\n    \\"StackMessages\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"RosActionMessages\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"FailedResources\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '查询诊断详情',
    ),
    'ListDiagnostics' => 
    array (
      'summary' => '查询诊断列表。',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DiagnosticKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '诊断的关键字。',
            'type' => 'string',
            'required' => false,
            'example' => '2829A772-B154-5A0A-B61B-DEE8A9EE8A5D',
          ),
        ),
        1 => 
        array (
          'name' => 'DiagnosticProduct',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '诊断产品。',
            'type' => 'string',
            'required' => false,
            'example' => 'ros',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '诊断状态。',
            'type' => 'string',
            'required' => false,
            'example' => 'Complete',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一页查询开始的token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f01****',
          ),
        ),
        4 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用NextToken方式查询时，每次最多返回的结果数。

取值范围：1~100。

默认值：50。',
            'type' => 'string',
            'required' => false,
            'example' => '50',
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
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP请求返回的响应状态码，200表示请求成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误内容。',
                'type' => 'string',
                'example' => 'You are not authorized to complete this action.',
              ),
              'Diagnostics' => 
              array (
                'description' => '诊断列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '诊断列表项。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreateTime' => 
                    array (
                      'description' => '诊断报告生成时间。',
                      'type' => 'string',
                      'example' => '2022-08-01T02:23:55',
                    ),
                    'DiagnosticKey' => 
                    array (
                      'description' => '诊断的关键字。',
                      'type' => 'string',
                      'example' => '047D84D9-D3EB-5DA8-87F1-9A7DD5598A5D',
                    ),
                    'DiagnosticProduct' => 
                    array (
                      'description' => '诊断产品。',
                      'type' => 'string',
                      'example' => 'ros',
                    ),
                    'ReportId' => 
                    array (
                      'description' => '诊断报告ID。',
                      'type' => 'string',
                      'example' => 'dr-2963bfbcac834f1a****',
                    ),
                    'Status' => 
                    array (
                      'description' => '诊断状态。',
                      'type' => 'string',
                      'example' => 'success',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1983D1C4-88EA-5D7D-90AB-467D01867A5D',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。取值：
- true：调用成功。
- false：调用失败。',
                'type' => 'string',
                'example' => 'true',
              ),
              'NextToken' => 
              array (
                'description' => '下一页查询开始的token。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f01****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": 200,\\n  \\"Message\\": \\"You are not authorized to complete this action.\\",\\n  \\"Diagnostics\\": [\\n    {\\n      \\"CreateTime\\": \\"2022-08-01T02:23:55\\",\\n      \\"DiagnosticKey\\": \\"047D84D9-D3EB-5DA8-87F1-9A7DD5598A5D\\",\\n      \\"DiagnosticProduct\\": \\"ros\\",\\n      \\"ReportId\\": \\"dr-2963bfbcac834f1a****\\",\\n      \\"Status\\": \\"success\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"1983D1C4-88EA-5D7D-90AB-467D01867A5D\\",\\n  \\"Success\\": \\"true\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f01****\\"\\n}","type":"json"}]',
      'title' => '查询诊断列表',
    ),
    'DeleteDiagnostic' => 
    array (
      'summary' => '删除诊断记录。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ReportId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于诊断和答疑的报告ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'dr-56a0e30bf9854b00****',
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
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'Forbidden',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'You are not authorized to complete this action.',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '91EF0DC1-3BB5-555E-AAA1-4F5C640D15DA',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。取值：
- true：调用成功。
- false：调用失败。',
                'type' => 'string',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"Forbidden\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Message\\": \\"You are not authorized to complete this action.\\",\\n  \\"RequestId\\": \\"91EF0DC1-3BB5-555E-AAA1-4F5C640D15DA\\",\\n  \\"Success\\": \\"true\\"\\n}","type":"json"}]',
      'title' => '删除诊断',
    ),
    'RegisterResourceType' => 
    array (
      'summary' => '创建新的资源类型，或为已有资源类型增加一个新版本。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntityType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实体类型。取值：Module，模块。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'Module' => 'Module',
            ),
            'example' => 'Module',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => false,
            'example' => 'MODULE::MyOrganization::MyService::MyUsecase',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板主体的结构。长度为1~524,288个字节。模板即为模块内容。如果长度较大，建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免URL过长而导致请求失败。

> - 仅在EntityType为Module时生效。
> - 您仅能指定TemplateBody、TemplateURL其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{"ROSTemplateFormatVersion":"2015-09-01"}',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于Web服务器（HTTP或HTTPS）或阿里云OSS存储空间（例如：oss://ros/template/demo、oss://ros/template/demo?RegionId=cn-hangzhou）中的模板，模板最大为524,288个字节。模板即为模块内容。

> - 如果OSS地域未指定，默认与接口参数RegionId相同。
> - 仅在EntityType为Module时生效。
> - 您仅能指定TemplateBody、TemplateURL其中一个参数。   

URL的最大长度为：1024个字节。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros-template/demo',
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型的描述。最大长度为512个字符。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'It is a demo.',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。 该值由客户端生成，并且必须是全局唯一的。   
长度最大为64个字符，可包含英文字符、数字、短划线（-）和下划线（_）。  
更多详情，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
              'RegistrationId' => 
              array (
                'description' => '注册ID。可使用[ListResourceTypeRegistrations](~~2330740~~)接口查询注册结果。',
                'type' => 'string',
                'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'asynchronous',
        'callback' => 'ROS::2019-09-10::ListResourceTypeRegistrations',
        'callbackInterval' => 10000,
        'maxCallbackTimes' => 30,
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\",\\n  \\"RegistrationId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf691****\\"\\n}","type":"json"}]',
      'title' => '注册资源类型',
      'description' => '- 版本从v1开始递增。
- 创建新的资源类型，v1版本会被设置为默认版本。可以通过SetResourceType修改默认版本。',
    ),
    'SetResourceType' => 
    array (
      'summary' => '修改资源类型或资源类型某个版本的相关描述。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MODULE::MyOrganization::MyService::MyUsecase',
          ),
        ),
        1 => 
        array (
          'name' => 'VersionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本ID。如果要修改资源类型某个版本，请指定该参数。否则，修改资源类型。

> 您仅能指定VersionId、DefaultVersionId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        2 => 
        array (
          'name' => 'DefaultVersionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '默认版本ID。指定该参数设置资源类型的默认版本。
> 您仅能指定VersionId、DefaultVersionId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型或资源类型版本的描述。最大长度为512个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'It is a demo.',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\"\\n}","type":"json"}]',
      'title' => '修改资源类型',
    ),
    'DeregisterResourceType' => 
    array (
      'summary' => '删除资源类型，或删除已有资源类型的某个版本。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MODULE::MyOrganization::MyService::MyUsecase',
          ),
        ),
        1 => 
        array (
          'name' => 'VersionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本ID。如果要删除资源类型某个版本，请指定该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6\\"\\n}","type":"json"}]',
      'title' => '注销资源类型',
      'description' => '- 如果删除某个资源类型，那么您不能在ROS中使用它。
- 如果删除资源类型的某个版本，那么您不能在ROS中使用该版本。
- 当且仅当资源类型只有一个版本时，才能被删除。否则，您必须手动删除资源类型的其他版本。
- 当资源类型的版本数量大于1时，不能删除默认版本。
- 当资源类型的版本数量为1时，删除该版本，将删除资源类型。',
      'extraInfo' => '| 错误代码 | 错误信息 | HTTPS状态码 | 描述 |
| --- | --- | --- | --- |
| ResourceTypeDeregisterFailure | Fail to deregister {entity_type} ({name}), {reason}. | 400 | 注销资源类型失败。entity_type实体类型，name为类型名称，reason为失败原因。 |
| ResourceTypeDeregisterFailure | Fail to deregister version ({version}) of {entity_type} ({name}), {reason}. | 400 | 注销资源类型版本失败。version为版本ID，entity_type实体类型，name为类型名称，reason为失败原因。 |',
    ),
    'ListResourceTypes' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntityType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实体类型。取值：  

- All：所有资源类型。

- Resource（默认值）：普通资源类型。更多信息，请参见[资源](~~28863~~)。

- DataSource：数据源资源类型。更多信息，请参见[数据源资源](~~404753~~)。

- Module：模块。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'All' => 'All',
              'Resource' => 'Resource',
              'Module' => 'Module',
              'DataSource' => 'DataSource',
            ),
            'example' => 'Resource',
          ),
        ),
        1 => 
        array (
          'name' => 'Provider',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型提供者。取值：
- ROS（默认值）：资源编排服务。
- Self：用户自己。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'ROS' => 'ROS',
              'Self' => 'Self',
            ),
            'example' => 'ROS',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。支持大小写字母、数字、冒号、星号。若使用星号则为模糊匹配。',
            'type' => 'string',
            'required' => false,
            'example' => 'MODULE::MyOrganization::MyService::MyUsecase',
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
              'ResourceTypes' => 
              array (
                'description' => '资源类型数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源类型数组。',
                  'type' => 'string',
                  'example' => '["ALIYUN::ECS::Instance","ALIYUN::RDS::Instance"]',
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EA00860C-ECAF-5253-A1F9-8198695A7157',
              ),
              'ResourceTypeSummaries' => 
              array (
                'description' => '资源类型摘要列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Provider' => 
                    array (
                      'description' => '资源类型提供者。取值：
- ROS：资源编排服务。
- Self：用户自己。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'ROS' => 'ROS',
                        'Self' => 'Self',
                      ),
                      'example' => 'ROS',
                    ),
                    'EntityType' => 
                    array (
                      'description' => '实体类型。取值： 
- Resource：普通资源类型。
- DataSource：数据源资源类型。 
- Module：模块。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Resource' => 'Resource',
                        'Module' => 'Module',
                        'DataSource' => 'DataSource',
                      ),
                      'example' => 'Module',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'MODULE::MyOrganization::MyService::MyUsecase',
                    ),
                    'DefaultVersionId' => 
                    array (
                      'description' => '默认版本ID。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                    'LatestVersionId' => 
                    array (
                      'description' => '最新版本ID。',
                      'type' => 'string',
                      'example' => 'v10',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间，按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mm:ss。',
                      'type' => 'string',
                      'example' => '2023-02-24T08:25:21',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间，按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mm:ss。',
                      'type' => 'string',
                      'example' => '2023-02-24T08:25:21',
                    ),
                    'Description' => 
                    array (
                      'description' => '资源类型描述。',
                      'type' => 'string',
                      'example' => 'It is a demo.',
                    ),
                    'TotalVersionCount' => 
                    array (
                      'description' => '版本数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ResourceTypes\\": [\\n    \\"[\\\\\\"ALIYUN::ECS::Instance\\\\\\",\\\\\\"ALIYUN::RDS::Instance\\\\\\"]\\"\\n  ],\\n  \\"RequestId\\": \\"EA00860C-ECAF-5253-A1F9-8198695A7157\\",\\n  \\"ResourceTypeSummaries\\": [\\n    {\\n      \\"Provider\\": \\"ROS\\",\\n      \\"EntityType\\": \\"Module\\",\\n      \\"ResourceType\\": \\"MODULE::MyOrganization::MyService::MyUsecase\\",\\n      \\"DefaultVersionId\\": \\"v1\\",\\n      \\"LatestVersionId\\": \\"v10\\",\\n      \\"CreateTime\\": \\"2023-02-24T08:25:21\\",\\n      \\"UpdateTime\\": \\"2023-02-24T08:25:21\\",\\n      \\"Description\\": \\"It is a demo.\\",\\n      \\"TotalVersionCount\\": 10\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListResourceTypesResponse>\\n    <ResourceTypes>ALIYUN::ACM::Configuration</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ACM::Namespace</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ACTIONTRAIL::Trail</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ACTIONTRAIL::TrailLogging</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ADB::DBCluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ALB::BackendServerAttachment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ALB::Listener</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ALB::LoadBalancer</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ALB::Rule</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ALB::ServerGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ARMS::AlertContact</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ARMS::AlertContactGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ARMS::RetcodeApp</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ASM::ServiceMesh</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::Api</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::App</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::Authorization</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::CustomDomain</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::Deployment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::Group</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::Instance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::LogConfig</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::Plugin</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::PluginAttachment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::Signature</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::SignatureBinding</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::StageConfig</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::TrafficControl</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::TrafficControlBinding</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ApiGateway::VpcAccessConfig</ResourceTypes>\\n    <ResourceTypes>ALIYUN::BSS::ResourcePackage</ResourceTypes>\\n    <ResourceTypes>ALIYUN::BSS::WaitOrder</ResourceTypes>\\n    <ResourceTypes>ALIYUN::BrainIndustrial::PidOrganization</ResourceTypes>\\n    <ResourceTypes>ALIYUN::BrainIndustrial::PidProject</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CAS::Certificate</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CDDC::DedicatedHost</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CDDC::DedicatedHostGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CDN::Domain</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CDN::DomainConfig</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::CenBandwidthLimit</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::CenBandwidthPackage</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::CenBandwidthPackageAssociation</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::CenInstance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::CenInstanceAttachment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::CenRouteMap</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::CenRouteService</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::CenVbrHealthCheck</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::RouteEntry</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::TransitRouter</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::TransitRouterPeerAttachment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::TransitRouterRouteEntry</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::TransitRouterRouteTable</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::TransitRouterRouteTableAssociation</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::TransitRouterRouteTablePropagation</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::TransitRouterVbrAttachment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CEN::TransitRouterVpcAttachment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CLOUDFW::AddressBook</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CLOUDFW::ControlPolicy</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CLOUDFW::VpcFirewallControlPolicy</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CMS::Contact</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CMS::ContactGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CMS::DynamicTagGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CMS::EventRule</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CMS::EventRuleTargets</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CMS::GroupMetricRule</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CMS::MetricRuleTargets</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CMS::MetricRuleTemplate</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CMS::MonitorGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CMS::MonitorGroupInstances</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CMS::MonitoringAgentProcess</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CMS::SiteMonitor</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CR::InstanceEndpointAclPolicy</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CR::Namespace</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CR::Repository</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CR::UserInfo</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CS::AnyCluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CS::ClusterNodePool</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CS::KubernetesCluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CS::ManagedEdgeKubernetesCluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CS::ManagedKubernetesCluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::CS::ServerlessKubernetesCluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ClickHouse::DBCluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::Config::CompliancePack</ResourceTypes>\\n    <ResourceTypes>ALIYUN::Config::DeliveryChannel</ResourceTypes>\\n    <ResourceTypes>ALIYUN::Config::Rule</ResourceTypes>\\n    <ResourceTypes>ALIYUN::DATAHUB::Project</ResourceTypes>\\n    <ResourceTypes>ALIYUN::DATAHUB::Topic</ResourceTypes>\\n    <ResourceTypes>ALIYUN::DBS::RestoreTask</ResourceTypes>\\n    <ResourceTypes>ALIYUN::DMS::Instance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::DMS::User</ResourceTypes>\\n    <ResourceTypes>ALIYUN::DNS::Domain</ResourceTypes>\\n    <ResourceTypes>ALIYUN::DNS::DomainGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::DNS::DomainRecord</ResourceTypes>\\n    <ResourceTypes>ALIYUN::DRDS::DrdsDB</ResourceTypes>\\n    <ResourceTypes>ALIYUN::DRDS::DrdsInstance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::DTS::ConsumerGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::DTS::MigrationJob</ResourceTypes>\\n    <ResourceTypes>ALIYUN::DTS::SubscriptionInstance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::DTS::SynchronizationJob</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECI::ContainerGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECI::ImageCache</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::AssignIpv6Addresses</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::AssignPrivateIpAddresses</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::AutoProvisioningGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::AutoSnapshotPolicy</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::Command</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::CopyImage</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::CustomImage</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::DedicatedHost</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::DeploymentSet</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::Disk</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::DiskAttachment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::ForwardEntry</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::HpcCluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::Instance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::InstanceClone</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::InstanceGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::InstanceGroupClone</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::Invocation</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::JoinSecurityGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::LaunchTemplate</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::NetworkInterface</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::NetworkInterfaceAttachment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::NetworkInterfacePermission</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::Route</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::RunCommand</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::SNatEntry</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::SSHKeyPair</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::SSHKeyPairAttachment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::SecurityGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::SecurityGroupClone</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::SecurityGroupEgress</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::SecurityGroupIngress</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::Snapshot</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::VPC</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ECS::VSwitch</ResourceTypes>\\n    <ResourceTypes>ALIYUN::EDAS::Application</ResourceTypes>\\n    <ResourceTypes>ALIYUN::EDAS::Cluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::EDAS::ClusterMember</ResourceTypes>\\n    <ResourceTypes>ALIYUN::EDAS::DeployGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::EDAS::K8sApplication</ResourceTypes>\\n    <ResourceTypes>ALIYUN::EDAS::K8sCluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::EDAS::UserDefineRegion</ResourceTypes>\\n    <ResourceTypes>ALIYUN::EHPC::Cluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::EMR::Cluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::EMR::ClusterServiceConfigs</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ENS::Instance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ESS::AlarmTask</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ESS::AlarmTaskEnable</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ESS::LifecycleHook</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ESS::ScalingConfiguration</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ESS::ScalingGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ESS::ScalingGroupEnable</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ESS::ScalingRule</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ESS::ScheduledTask</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ElasticSearch::Instance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::FC::Alias</ResourceTypes>\\n    <ResourceTypes>ALIYUN::FC::CustomDomain</ResourceTypes>\\n    <ResourceTypes>ALIYUN::FC::Function</ResourceTypes>\\n    <ResourceTypes>ALIYUN::FC::FunctionInvoker</ResourceTypes>\\n    <ResourceTypes>ALIYUN::FC::Layer</ResourceTypes>\\n    <ResourceTypes>ALIYUN::FC::ProvisionConfig</ResourceTypes>\\n    <ResourceTypes>ALIYUN::FC::Service</ResourceTypes>\\n    <ResourceTypes>ALIYUN::FC::Trigger</ResourceTypes>\\n    <ResourceTypes>ALIYUN::FC::Version</ResourceTypes>\\n    <ResourceTypes>ALIYUN::FNF::Flow</ResourceTypes>\\n    <ResourceTypes>ALIYUN::FNF::Schedule</ResourceTypes>\\n    <ResourceTypes>ALIYUN::FOAS::Cluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::FOAS::Project</ResourceTypes>\\n    <ResourceTypes>ALIYUN::GA::Accelerator</ResourceTypes>\\n    <ResourceTypes>ALIYUN::GA::BandwidthPackage</ResourceTypes>\\n    <ResourceTypes>ALIYUN::GA::BandwidthPackageAcceleratorAddition</ResourceTypes>\\n    <ResourceTypes>ALIYUN::GA::EndpointGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::GA::IpSets</ResourceTypes>\\n    <ResourceTypes>ALIYUN::GA::Listener</ResourceTypes>\\n    <ResourceTypes>ALIYUN::GPDB::DBInstance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::GPDB::ElasticDBInstance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::GPDB::InstancePublicConnection</ResourceTypes>\\n    <ResourceTypes>ALIYUN::GWS::Cluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::GWS::Instance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::HBR::BackupClients</ResourceTypes>\\n    <ResourceTypes>ALIYUN::HBR::DbAgent</ResourceTypes>\\n    <ResourceTypes>ALIYUN::HBR::DbPlan</ResourceTypes>\\n    <ResourceTypes>ALIYUN::HBR::DbVault</ResourceTypes>\\n    <ResourceTypes>ALIYUN::HBR::RestoreJob</ResourceTypes>\\n    <ResourceTypes>ALIYUN::IOT::Device</ResourceTypes>\\n    <ResourceTypes>ALIYUN::IOT::DeviceGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::IOT::Product</ResourceTypes>\\n    <ResourceTypes>ALIYUN::IOT::ProductTopic</ResourceTypes>\\n    <ResourceTypes>ALIYUN::IOT::Rule</ResourceTypes>\\n    <ResourceTypes>ALIYUN::IOT::RuleAction</ResourceTypes>\\n    <ResourceTypes>ALIYUN::KAFKA::Instance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::KAFKA::Topic</ResourceTypes>\\n    <ResourceTypes>ALIYUN::KMS::Alias</ResourceTypes>\\n    <ResourceTypes>ALIYUN::KMS::Key</ResourceTypes>\\n    <ResourceTypes>ALIYUN::KMS::Secret</ResourceTypes>\\n    <ResourceTypes>ALIYUN::MNS::Queue</ResourceTypes>\\n    <ResourceTypes>ALIYUN::MNS::Subscription</ResourceTypes>\\n    <ResourceTypes>ALIYUN::MNS::Topic</ResourceTypes>\\n    <ResourceTypes>ALIYUN::MONGODB::Instance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::MONGODB::ServerlessInstance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::MONGODB::ShardingInstance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::MSE::Cluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::MSE::Gateway</ResourceTypes>\\n    <ResourceTypes>ALIYUN::MarketPlace::Order</ResourceTypes>\\n    <ResourceTypes>ALIYUN::MaxCompute::Table</ResourceTypes>\\n    <ResourceTypes>ALIYUN::Memcache::Instance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::Memcache::Whitelist</ResourceTypes>\\n    <ResourceTypes>ALIYUN::NAS::AccessGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::NAS::AccessRule</ResourceTypes>\\n    <ResourceTypes>ALIYUN::NAS::FileSystem</ResourceTypes>\\n    <ResourceTypes>ALIYUN::NAS::MountTarget</ResourceTypes>\\n    <ResourceTypes>ALIYUN::OOS::Execution</ResourceTypes>\\n    <ResourceTypes>ALIYUN::OOS::Parameter</ResourceTypes>\\n    <ResourceTypes>ALIYUN::OOS::Template</ResourceTypes>\\n    <ResourceTypes>ALIYUN::OSS::Bucket</ResourceTypes>\\n    <ResourceTypes>ALIYUN::OTS::Instance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::OTS::SearchIndex</ResourceTypes>\\n    <ResourceTypes>ALIYUN::OTS::Table</ResourceTypes>\\n    <ResourceTypes>ALIYUN::OTS::VpcBinder</ResourceTypes>\\n    <ResourceTypes>ALIYUN::POLARDB::Account</ResourceTypes>\\n    <ResourceTypes>ALIYUN::POLARDB::AccountPrivilege</ResourceTypes>\\n    <ResourceTypes>ALIYUN::POLARDB::DBCluster</ResourceTypes>\\n    <ResourceTypes>ALIYUN::POLARDB::DBClusterAccessWhiteList</ResourceTypes>\\n    <ResourceTypes>ALIYUN::POLARDB::DBClusterEndpoint</ResourceTypes>\\n    <ResourceTypes>ALIYUN::POLARDB::DBClusterEndpointAddress</ResourceTypes>\\n    <ResourceTypes>ALIYUN::POLARDB::DBInstance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::POLARDB::DBNodes</ResourceTypes>\\n    <ResourceTypes>ALIYUN::PVTZ::UserVpcAuthorization</ResourceTypes>\\n    <ResourceTypes>ALIYUN::PVTZ::Zone</ResourceTypes>\\n    <ResourceTypes>ALIYUN::PVTZ::ZoneRecord</ResourceTypes>\\n    <ResourceTypes>ALIYUN::PVTZ::ZoneVpcBinder</ResourceTypes>\\n    <ResourceTypes>ALIYUN::PrivateLink::VpcEndpoint</ResourceTypes>\\n    <ResourceTypes>ALIYUN::PrivateLink::VpcEndpointService</ResourceTypes>\\n    <ResourceTypes>ALIYUN::PrivateLink::VpcEndpointServiceAttachment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RAM::AccessKey</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RAM::AttachPolicyToRole</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RAM::AttachPolicyToUser</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RAM::Group</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RAM::ManagedPolicy</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RAM::RamAccountAlias</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RAM::Role</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RAM::SAMLProvider</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RAM::SecurityPreference</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RAM::User</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RAM::UserToGroupAddition</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RDS::ADInfo</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RDS::Account</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RDS::AccountPrivilege</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RDS::DBInstance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RDS::DBInstanceClone</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RDS::DBInstanceParameterGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RDS::DBInstanceSecurityIps</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RDS::Database</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RDS::PrepayDBInstance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::RDS::ReadOnlyDBInstance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::REDIS::Account</ResourceTypes>\\n    <ResourceTypes>ALIYUN::REDIS::Instance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::REDIS::PrepayInstance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::REDIS::Whitelist</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ROCKETMQ::Group</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ROCKETMQ::Instance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ROCKETMQ::Topic</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ROS::AutoEnableService</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ROS::CustomResource</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ROS::Sleep</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ROS::Stack</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ROS::WaitCondition</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ROS::WaitConditionHandle</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ResourceManager::Account</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ResourceManager::ControlPolicy</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ResourceManager::ControlPolicyAttachment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ResourceManager::Folder</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ResourceManager::Handshake</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ResourceManager::PolicyAttachment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ResourceManager::ResourceDirectory</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ResourceManager::ResourceGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::ResourceManager::ResourceShare</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SAE::Application</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SAE::Namespace</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SAE::SlbBinding</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SAG::ACL</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SAG::ACLAssociation</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SAG::ACLRule</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SAG::CloudConnectNetwork</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SAG::GrantCcnToCen</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SAG::SmartAccessGateway</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SAG::SmartAccessGatewayBinding</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLB::AccessControl</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLB::BackendServerAttachment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLB::BackendServerToVServerGroupAddition</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLB::Certificate</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLB::DomainExtension</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLB::Listener</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLB::LoadBalancer</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLB::LoadBalancerClone</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLB::MasterSlaveServerGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLB::Rule</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLB::VServerGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLS::Alert</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLS::ApplyConfigToMachineGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLS::Audit</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLS::Etl</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLS::Index</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLS::Logstore</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLS::LogtailConfig</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLS::MachineGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLS::Project</ResourceTypes>\\n    <ResourceTypes>ALIYUN::SLS::Savedsearch</ResourceTypes>\\n    <ResourceTypes>ALIYUN::TSDB::HiTSDBInstance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::TSDB::InfluxDBDatabase</ResourceTypes>\\n    <ResourceTypes>ALIYUN::TSDB::InfluxDBUser</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::AnycastEIP</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::AnycastEIPAssociation</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::BgpGroup</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::BgpNetwork</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::BgpPeer</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::CommonBandwidthPackage</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::CommonBandwidthPackageIp</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::CustomerGateway</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::DhcpOptionsSet</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::DhcpOptionsSetAttachment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::EIP</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::EIPAssociation</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::EIPSegment</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::FlowLog</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::GrantInstanceToCen</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::IpsecServer</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::Ipv6Gateway</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::Ipv6InternetBandwidth</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::NatGateway</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::NetworkAcl</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::NetworkAclAssociation</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::PeeringRouterInterfaceBinding</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::PeeringRouterInterfaceConnection</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::RouteTable</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::RouteTableAssociation</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::RouterInterface</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::SnatEntry</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::SslVpnClientCert</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::SslVpnServer</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::VirtualBorderRouter</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::VpnConnection</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::VpnGateway</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::VpnPbrRouteEntry</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VPC::VpnRouteEntry</ResourceTypes>\\n    <ResourceTypes>ALIYUN::VS::Group</ResourceTypes>\\n    <ResourceTypes>ALIYUN::WAF::AclRule</ResourceTypes>\\n    <ResourceTypes>ALIYUN::WAF::Domain</ResourceTypes>\\n    <ResourceTypes>ALIYUN::WAF::DomainConfig</ResourceTypes>\\n    <ResourceTypes>ALIYUN::WAF::Instance</ResourceTypes>\\n    <ResourceTypes>ALIYUN::WAF::LogServiceEnable</ResourceTypes>\\n    <ResourceTypes>ALIYUN::WAF::WafSwitch</ResourceTypes>\\n    <RequestId>EA00860C-ECAF-5253-A1F9-8198695A7157</RequestId>\\n</ListResourceTypesResponse>","errorExample":""}]',
      'title' => '查询支持的资源类型列表',
      'summary' => '查询支持的资源类型列表。',
      'description' => '本文将提供一个示例，查询ROS支持的普通资源类型列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' 访问[公共错误码](~~131033~~)查看更多错误码。',
    ),
    'GetResourceTypeTemplate' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。
您可以调用[ListResourceTypes](~~133957~~)接口获取资源类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ALIYUN::ECS::VPC',
          ),
        ),
        1 => 
        array (
          'name' => 'VersionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本ID。如果要查询资源类型某个版本，请指定该参数。否则，查询资源类型。

> 当前仅模块支持版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '87F54B2B-AEF0-4C33-A72A-3F8856A575E9',
              ),
              'TemplateBody' => 
              array (
                'description' => '模板主体的结构。
长度为1~51,200个字节。
更多信息，请参见[模板语法](~~28857~~)。

> 不建议使用该返回参数，建议使用TemplateContent代替。',
                'type' => 'object',
                'example' => '{"ROSTemplateFormatVersion": "2015-09-01"}',
              ),
              'TemplateContent' => 
              array (
                'description' => '模板主体的结构，JSON格式。
更多信息，请参见[模板语法](~~28857~~)。',
                'type' => 'string',
                'example' => '{
      "ROSTemplateFormatVersion": "2015-09-01"
}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"87F54B2B-AEF0-4C33-A72A-3F8856A575E9\\",\\n  \\"TemplateBody\\": {\\n    \\"ROSTemplateFormatVersion\\": \\"2015-09-01\\"\\n  },\\n  \\"TemplateContent\\": \\"{\\\\n      \\\\\\"ROSTemplateFormatVersion\\\\\\": \\\\\\"2015-09-01\\\\\\"\\\\n}\\"\\n}","errorExample":""},{"type":"xml","example":"<GetResourceTypeTemplateResponse>\\n    <RequestId>82CEA644-757E-54B9-B730-0502328DA5F1</RequestId>\\n    <TemplateBody>\\n        <Parameters>\\n            <Ipv6Isp>\\n                <Type>String</Type>\\n                <Description>The Internet service provider (ISP) for IPv6 addresses of the VPC. Valid values:\\n                  BGP(default): Alibaba Cloud BGP IPv6\\n                  ChinaMobile: China Mobile (single line)\\n                  ChinaUnicom: China Unicom (single line)\\n                  ChinaTelecom: China Telecom (single line)\\n              Note If your Alibaba Cloud account is allowed to activate single-ISP bandwidth, you can set the parameter to ChinaTelecom, ChinaUnicom, and ChinaMobile.</Description>\\n            </Ipv6Isp>\\n            <Description>\\n                <Type>String</Type>\\n                <Description>Description of the vpc, [2, 256] characters. Do not fill or empty, the default is empty.</Description>\\n            </Description>\\n            <SecondaryCidrBlock>\\n                <Type>String</Type>\\n                <Description>The secondary IPv4 CIDR block. \\n                  You can specify one of the following standard IPv4 CIDR blocks or their subnets asthe secondary IPv4 CIDR block: 192.168.0.0/16, 172.16.0.0/12, \\n                  and 10.0.0.0/8.To use a public CIDR block as the secondary IPv4 CIDR block, \\n                  submit a ticket. When you add a secondary IPv4 CIDR block, take note of \\n                  the following rules: \\n                  1. The CIDR block cannot start with 0. \\n                  2. The subnet mask must be 8 to 24 bits in length.\\n                  The secondary CIDR block cannot overlap with the primary \\n                  CIDR block or an existing secondary CIDR block.</Description>\\n            </SecondaryCidrBlock>\\n            <ResourceGroupId>\\n                <Type>String</Type>\\n                <Description>Resource group id.</Description>\\n            </ResourceGroupId>\\n            <CidrBlock>\\n                <Type>String</Type>\\n                <Description>The IP address range of the VPC in the CIDR block form. You can use the following IP address ranges and their subnets:\\n                    10.0.X.X/8\\n                    172.16.X.X/12 (Default)\\n                    192.168.X.X/16</Description>\\n            </CidrBlock>\\n            <VpcName>\\n                <Type>String</Type>\\n                <Description>Display name of the vpc instance, [2, 128] English or Chinese characters, must start with a letter or Chinese in size, can contain numbers, \'_\' or \'.\', \'-\'</Description>\\n            </VpcName>\\n            <Ipv6CidrBlock>\\n                <Type>String</Type>\\n                <Description>IPv6 network cidr of the VPC.</Description>\\n                <MinLength>1</MinLength>\\n            </Ipv6CidrBlock>\\n            <Tags>\\n                <Type>Json</Type>\\n                <Description>Tags to attach to vpc. Max support 20 tags to add during create vpc. Each tag with two properties Key and Value, and Key is required.</Description>\\n                <MaxLength>20</MaxLength>\\n            </Tags>\\n            <EnableIpv6>\\n                <Type>Boolean</Type>\\n                <Description>Whether to enable an IPv6 network cidr, the value is:False (default): not turned on.True: On.</Description>\\n                <AllowedValues>True</AllowedValues>\\n                <AllowedValues>true</AllowedValues>\\n                <AllowedValues>False</AllowedValues>\\n                <AllowedValues>false</AllowedValues>\\n                <Default>false</Default>\\n            </EnableIpv6>\\n            <UserCidr>\\n                <Type>String</Type>\\n                <Description>The user CIDR block. Separate multiple CIDR blocks with commas (,). At most three CIDR blocks are supported.</Description>\\n            </UserCidr>\\n        </Parameters>\\n        <ROSTemplateFormatVersion>2015-09-01</ROSTemplateFormatVersion>\\n        <Outputs>\\n            <VRouterId>\\n                <Description>Router id of created VPC.</Description>\\n                <Value>\\n                    <Fn::GetAtt>Vpc</Fn::GetAtt>\\n                    <Fn::GetAtt>VRouterId</Fn::GetAtt>\\n                </Value>\\n            </VRouterId>\\n            <RouteTableId>\\n                <Description>The router table id of created VPC.</Description>\\n                <Value>\\n                    <Fn::GetAtt>Vpc</Fn::GetAtt>\\n                    <Fn::GetAtt>RouteTableId</Fn::GetAtt>\\n                </Value>\\n            </RouteTableId>\\n            <VpcId>\\n                <Description>Id of created VPC.</Description>\\n                <Value>\\n                    <Fn::GetAtt>Vpc</Fn::GetAtt>\\n                    <Fn::GetAtt>VpcId</Fn::GetAtt>\\n                </Value>\\n            </VpcId>\\n        </Outputs>\\n        <Resources>\\n            <Vpc>\\n                <Type>ALIYUN::ECS::VPC</Type>\\n                <Properties>\\n                    <Ipv6Isp>\\n                        <Ref>Ipv6Isp</Ref>\\n                    </Ipv6Isp>\\n                    <Description>\\n                        <Ref>Description</Ref>\\n                    </Description>\\n                    <SecondaryCidrBlock>\\n                        <Ref>SecondaryCidrBlock</Ref>\\n                    </SecondaryCidrBlock>\\n                    <ResourceGroupId>\\n                        <Ref>ResourceGroupId</Ref>\\n                    </ResourceGroupId>\\n                    <CidrBlock>\\n                        <Ref>CidrBlock</Ref>\\n                    </CidrBlock>\\n                    <VpcName>\\n                        <Ref>VpcName</Ref>\\n                    </VpcName>\\n                    <Ipv6CidrBlock>\\n                        <Ref>Ipv6CidrBlock</Ref>\\n                    </Ipv6CidrBlock>\\n                    <Tags>\\n                        <Ref>Tags</Ref>\\n                    </Tags>\\n                    <EnableIpv6>\\n                        <Ref>EnableIpv6</Ref>\\n                    </EnableIpv6>\\n                    <UserCidr>\\n                        <Ref>UserCidr</Ref>\\n                    </UserCidr>\\n                </Properties>\\n            </Vpc>\\n        </Resources>\\n    </TemplateBody>\\n</GetResourceTypeTemplateResponse>","errorExample":""}]',
      'title' => '查询资源类型的资源模板',
      'summary' => '根据资源类型生成一个示例模板。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 404 | ResourceTypeNotFound | The Resource Type ({name}) could not be found. |资源类型不存在。name为资源类型名。 |',
    ),
    'GetResourceType' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。  
关于ROS支持的资源类型，请参见[资源类型索引](~~127039~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ALIYUN::ROS::WaitConditionHandle',
          ),
        ),
        1 => 
        array (
          'name' => 'VersionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本ID。如果要查询资源类型某个版本，请指定该参数。否则，查询资源类型。

> 当前仅模块支持版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A28FBA2E-B6B3-5822-AA45-AB875EF23641',
              ),
              'Attributes' => 
              array (
                'description' => '资源的返回值。',
                'type' => 'object',
                'example' => '参见示例',
              ),
              'ResourceType' => 
              array (
                'description' => '资源类型。',
                'type' => 'string',
                'example' => 'ALIYUN::ROS::WaitConditionHandle',
              ),
              'Properties' => 
              array (
                'description' => '资源的属性。',
                'type' => 'object',
                'example' => '参见示例',
              ),
              'SupportDriftDetection' => 
              array (
                'description' => '该资源是否支持偏差检测。取值：

- true：支持。

- false：不支持。

',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'SupportScratchDetection' => 
              array (
                'description' => '该资源是否支持资源场景。取值：

- true：支持。

- false：不支持。
',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'EntityType' => 
              array (
                'description' => '实体类型。取值：


- Resource：普通资源类型。更多信息，请参见[资源](~~28863~~)。

- DataSource：数据源资源类型。更多信息，请参见[数据源资源](~~404753~~)。

- Module：模块。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'Resource' => 'Resource',
                  'Module' => 'Module',
                  'DataSource' => 'DataSource',
                ),
                'example' => 'Resource',
              ),
              'Provider' => 
              array (
                'description' => '资源类型提供者。取值：
- ROS：资源编排服务。
- Self：用户自己。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'ROS' => 'ROS',
                  'Self' => 'Self',
                ),
                'example' => 'ROS',
              ),
              'Description' => 
              array (
                'description' => '资源类型描述。',
                'type' => 'string',
                'example' => 'It is a demo.',
              ),
              'DefaultVersionId' => 
              array (
                'description' => '默认版本ID。

> 仅查询资源类型时返回。',
                'type' => 'string',
                'example' => 'v1',
              ),
              'LatestVersionId' => 
              array (
                'description' => '最新版本ID。
> 仅查询资源类型时返回。',
                'type' => 'string',
                'example' => 'v10',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间，按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mm:ss。',
                'type' => 'string',
                'example' => '2023-02-24T08:25:21
',
              ),
              'UpdateTime' => 
              array (
                'description' => '更新时间，按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mm:ss。',
                'type' => 'string',
                'example' => '2023-02-24T08:25:21
',
              ),
              'TotalVersionCount' => 
              array (
                'description' => '版本总数。
> 仅查询资源类型时返回。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'IsDefaultVersion' => 
              array (
                'description' => '是否默认版本。取值：
- true：是默认版本。
- false：不是默认版本。
> 仅查询资源类型版本时返回。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'true',
              ),
              'TemplateBody' => 
              array (
                'description' => '模块的模板内容。
> 仅查询资源类型版本时返回。',
                'type' => 'string',
                'example' => '{"ROSTemplateFormatVersion":"2015-09-01"}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A28FBA2E-B6B3-5822-AA45-AB875EF23641\\",\\n  \\"Attributes\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"ResourceType\\": \\"ALIYUN::ROS::WaitConditionHandle\\",\\n  \\"Properties\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"SupportDriftDetection\\": false,\\n  \\"SupportScratchDetection\\": false,\\n  \\"EntityType\\": \\"Resource\\",\\n  \\"Provider\\": \\"ROS\\",\\n  \\"Description\\": \\"It is a demo.\\",\\n  \\"DefaultVersionId\\": \\"v1\\",\\n  \\"LatestVersionId\\": \\"v10\\",\\n  \\"CreateTime\\": \\"2023-02-24T08:25:21\\\\n\\",\\n  \\"UpdateTime\\": \\"2023-02-24T08:25:21\\\\n\\",\\n  \\"TotalVersionCount\\": 10,\\n  \\"IsDefaultVersion\\": true,\\n  \\"TemplateBody\\": \\"{\\\\\\"ROSTemplateFormatVersion\\\\\\":\\\\\\"2015-09-01\\\\\\"}\\"\\n}","errorExample":""},{"type":"xml","example":"<GetResourceTypeResponse>\\n    <SupportScratchDetection>false</SupportScratchDetection>\\n    <EntityType>Resource</EntityType>\\n    <RequestId>A28FBA2E-B6B3-5822-AA45-AB875EF23641</RequestId>\\n    <Attributes>\\n        <CurlCli>\\n            <Description>Convenience attribute, provides curl CLI command prefix, which can be used for signalling handle completion or failure.  You can signal success by adding --data-binary \'{\\"status\\": \\"SUCCESS\\"}\' , or signal failure by adding --data-binary \'{\\"status\\": \\"FAILURE\\"}\'</Description>\\n        </CurlCli>\\n        <WindowsCurlCli>\\n            <Description>Convenience attribute, provides curl CLI command prefix for Windows, which can be used for signalling handle completion or failure. As Windows does not support curl command, you need to install curl.exe and add it to PATH first. You can signal success by adding --data-binary \\"{\\\\\\"status\\\\\\": \\\\\\"SUCCESS\\\\\\"}\\" , or signal failure by adding --data-binary \\"{\\\\\\"status\\\\\\": \\\\\\"FAILURE\\\\\\"}\\" </Description>\\n        </WindowsCurlCli>\\n        <Headers>\\n            <Description>HTTP POST Headers used for signalling handle completion or failure.</Description>\\n        </Headers>\\n        <URL>\\n            <Description>HTTP POST URL used for signalling handle completion or failure.</Description>\\n        </URL>\\n        <PowerShellCurlCli>\\n            <Description>Convenience attribute, provides curl CLI command prefix for PowerShell, which can be used for signalling handle completion or failure. As this cmdlet was introduced in PowerShell 3.0, ensure the version of PowerShell satisfies the constraint. (Show the version via $PSVersionTable.PSVersion.) You can signal success by adding -Body \'{\\"status\\": \\"SUCCESS\\"}\' , or signal failure by adding -Body \'{\\"status\\": \\"FAILURE\\"}\' </Description>\\n        </PowerShellCurlCli>\\n    </Attributes>\\n    <ResourceType>ALIYUN::ROS::WaitConditionHandle</ResourceType>\\n    <Properties>\\n        <Mode>\\n            <SupportScratchDetection>false</SupportScratchDetection>\\n            <Immutable>false</Immutable>\\n            <Type>string</Type>\\n            <Description>If set to Increment, all old signals will be deleted before update. In this mode, WaitCondition.Count should reference an incremental value instead of a full value, such as ScalingGroupEnable.ScalingRuleArisExecuteResultNumberOfAddedInstances.\\n\\nIf set to Full, no old signal will be deleted unless Count is set. In this mode, WaitCondition.Count should reference a full value, such as the same value with InstanceGroup.MaxAmount. It is recommended to use this mode with Count.\\n\\nDefault to Full.</Description>\\n            <Constraints>\\n                <AllowedValues>Increment</AllowedValues>\\n                <AllowedValues>Full</AllowedValues>\\n            </Constraints>\\n            <Required>false</Required>\\n            <Default>Full</Default>\\n            <UpdateAllowed>true</UpdateAllowed>\\n        </Mode>\\n        <Count>\\n            <SupportScratchDetection>false</SupportScratchDetection>\\n            <Immutable>false</Immutable>\\n            <Type>integer</Type>\\n            <Description>There are 3 preconditions that make Count taking effect:\\n1.Mode is set to Full.\\n2.Count &gt;= 0.\\n3.The id of signal is not specified. If so, it will be a self-increasing integer started from 1. For example, the id of the first signal is 1, the id of the second signal is 2, and so on.\\n\\nIf Count takes effect, signals with id &gt; Count will be deleted before update.\\nThe default value is -1, which means no effect.\\nIt is recommended to quote the same value with WaitCondition.Count.</Description>\\n            <Required>false</Required>\\n            <Default>-1</Default>\\n            <UpdateAllowed>true</UpdateAllowed>\\n        </Count>\\n    </Properties>\\n    <SupportDriftDetection>false</SupportDriftDetection>\\n</GetResourceTypeResponse>","errorExample":""}]',
      'title' => '查询资源类型的详细信息',
      'summary' => '通过指定资源类型查询详细信息。',
      'description' => '本文将提供一个示例，查询资源类型`ALIYUN::ROS::WaitConditionHandle`的详细信息。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
|404 |ResourceTypeNotFound |The Resource Type ({name}) could not be found. |资源类型不存在。name为资源类型名。 |',
    ),
    'ListResourceTypeVersions' => 
    array (
      'summary' => '查询资源类型版本列表，包括用户自己创建的和ROS提供的资源类型。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MODULE::MyOrganization::MyService::MyUsecase',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6F',
              ),
              'ResourceTypeVersions' => 
              array (
                'description' => '资源类型版本信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源类型版本信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Provider' => 
                    array (
                      'description' => '资源类型提供者。取值：
- ROS：资源编排服务。
- Self：用户自己。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'ROS' => 'ROS',
                        'Self' => 'Self',
                      ),
                      'example' => 'ROS',
                    ),
                    'EntityType' => 
                    array (
                      'description' => '实体类型。取值：Module，模块。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Module' => 'Module',
                      ),
                      'example' => 'Module',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'MODULE::MyOrganization::MyService::MyUsecase',
                    ),
                    'IsDefaultVersion' => 
                    array (
                      'description' => '是否默认版本。取值：
- true：是默认版本。
- false：不是默认版本。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间，按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mm:ss。',
                      'type' => 'string',
                      'example' => '2023-02-24T08:25:21',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间，按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mm:ss。',
                      'type' => 'string',
                      'example' => '2023-02-24T08:25:21',
                    ),
                    'VersionId' => 
                    array (
                      'description' => '版本ID。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                    'Description' => 
                    array (
                      'description' => '版本描述。',
                      'type' => 'string',
                      'example' => 'It is a demo.',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6F\\",\\n  \\"ResourceTypeVersions\\": [\\n    {\\n      \\"Provider\\": \\"ROS\\",\\n      \\"EntityType\\": \\"Module\\",\\n      \\"ResourceType\\": \\"MODULE::MyOrganization::MyService::MyUsecase\\",\\n      \\"IsDefaultVersion\\": true,\\n      \\"CreateTime\\": \\"2023-02-24T08:25:21\\",\\n      \\"UpdateTime\\": \\"2023-02-24T08:25:21\\",\\n      \\"VersionId\\": \\"v1\\",\\n      \\"Description\\": \\"It is a demo.\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询资源类型版本列表',
    ),
    'ListResourceTypeRegistrations' => 
    array (
      'summary' => '查询资源注册记录列表。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntityType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实体类型。取值：Module，模块。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Module' => 'Module',
            ),
            'example' => 'Module',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。支持大小字母、数字、冒号、星号。若使用星号则为模糊匹配。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'MODULE::MyOrganization::MyService::MyUsecase
',
          ),
        ),
        2 => 
        array (
          'name' => 'RegistrationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '注册ID。',
            'type' => 'string',
            'required' => false,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '注册状态。取值：
- IN_PROGRESS：进行中。
- COMPLETE：成功。
- FAILED：失败。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'IN_PROGRESS' => 'IN_PROGRESS',
              'COMPLETE' => 'COMPLETE',
              'FAILED' => 'FAILED',
            ),
            'example' => 'COMPLETE',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的页码。 起始值：1。 默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页行数。 取值范围：1~50。默认值：10。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6',
              ),
              'Registrations' => 
              array (
                'description' => '资源注册记录列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源注册记录。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegistrationId' => 
                    array (
                      'description' => '注册ID。',
                      'type' => 'string',
                      'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****
',
                    ),
                    'EntityType' => 
                    array (
                      'description' => '实体类型。取值：Module，模块。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Module' => 'Module',
                      ),
                      'example' => 'Module',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'MODULE::MyOrganization::MyService::MyUsecase',
                    ),
                    'VersionId' => 
                    array (
                      'description' => '版本ID。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                    'Status' => 
                    array (
                      'description' => '注册状态。取值：
- IN_PROGRESS：进行中。
- COMPLETE：成功。
- FAILED：失败。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'IN_PROGRESS' => 'IN_PROGRESS',
                        'COMPLETE' => 'COMPLETE',
                        'FAILED' => 'FAILED',
                      ),
                      'example' => 'COMPLETE',
                    ),
                    'StatusReason' => 
                    array (
                      'description' => '状态原因。',
                      'type' => 'string',
                      'example' => 'Module is created successfully',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间，按照ISO8601标准表示，并需要使用UTC时间。格式为：YYYY-MM-DDThh:mm:ss。',
                      'type' => 'string',
                      'example' => '2023-03-02T07:28:35',
                    ),
                  ),
                ),
              ),
              'PageNumber' => 
              array (
                'description' => '分页查询时设置的页码。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'description' => '注册记录总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6\\",\\n  \\"Registrations\\": [\\n    {\\n      \\"RegistrationId\\": \\"4a6c9851-3b0f-4f5f-b4ca-a14bf691****\\\\n\\",\\n      \\"EntityType\\": \\"Module\\",\\n      \\"ResourceType\\": \\"MODULE::MyOrganization::MyService::MyUsecase\\",\\n      \\"VersionId\\": \\"v1\\",\\n      \\"Status\\": \\"COMPLETE\\",\\n      \\"StatusReason\\": \\"Module is created successfully\\",\\n      \\"CreateTime\\": \\"2023-03-02T07:28:35\\"\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1\\n}","type":"json"}]',
      'title' => '查询资源注册记录',
    ),
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '12679',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURErosZVIFJW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果显示的语言。
取值：

- zh-CN（默认值）：中文。  

- en-US：英文。  

- ja：日文。
',
            'type' => 'string',
            'required' => false,
            'example' => 'zh-CN',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '59F0F0A0-A637-4292-9B91-251EF5010913',
              ),
              'Regions' => 
              array (
                'description' => '地域列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LocalName' => 
                    array (
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => '华东1（杭州）',
                    ),
                    'RegionEndpoint' => 
                    array (
                      'description' => '地域接入地址。',
                      'type' => 'string',
                      'example' => 'ros.aliyuncs.com',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"59F0F0A0-A637-4292-9B91-251EF5010913\\",\\n  \\"Regions\\": [\\n    {\\n      \\"LocalName\\": \\"华东1（杭州）\\",\\n      \\"RegionEndpoint\\": \\"ros.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>59F0F0A0-A637-4292-9B91-251EF5010913</RequestId>\\n    <Regions>\\n        <RegionId>cn-qingdao</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北1（青岛）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-beijing</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北2（北京）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-zhangjiakou</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北3（张家口）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北5（呼和浩特）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-wulanchabu</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北6（乌兰察布）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东1（杭州）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-shanghai</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东2（上海）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-shenzhen</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南1（深圳）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-heyuan</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南2（河源）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-guangzhou</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南3（广州）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-chengdu</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>西南1（成都）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-hongkong</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>中国（香港）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-northeast-1</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>日本（东京）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-northeast-2</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>韩国（首尔）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-1</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>新加坡</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-2</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>澳大利亚（悉尼）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-3</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>马来西亚（吉隆坡）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-6</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>菲律宾（马尼拉）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-5</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>印度尼西亚（雅加达）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-south-1</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>印度（孟买）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-7</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>泰国（曼谷）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>us-east-1</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>美国（弗吉尼亚）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>us-west-1</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>美国（硅谷）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>eu-west-1</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>英国（伦敦）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>me-east-1</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>阿联酋（迪拜）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>eu-central-1</RegionId>\\n        <RegionEndpoint>ros.aliyuncs.com</RegionEndpoint>\\n        <LocalName>德国（法兰克福）</LocalName>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查询地域列表',
      'summary' => '查询可选地域列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SignalResource' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StackId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a6c9851-3b0f-4f5f-b4ca-a14bf691****',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '信号的状态。故障信号会导致无法创建或更新资源栈，如果所有信号都是警告信号，则将无法创建或更新资源栈。取值：

- SUCCESS
- FAILURE
- WARNING

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SUCCESS',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'UniqueId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '信号的唯一ID。长度为1~64个字符。如果向单个资源发送多个信号（例如发信号通知等待条件），则每个信号都需要不同的信息ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '27c7347b-352a-4377-accf-63d361c1****',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求的幂等性。 该值由客户端生成，并且必须是全局唯一的。   
长度最大为64个字符，可包含英文字符、数字、短划线（-）和下划线（_）。  
更多详情，请参见[如何保证幂等性](~~134212~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '123e4567-e89b-12d3-a456-42665544****',
          ),
        ),
        5 => 
        array (
          'name' => 'LogicalResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源逻辑ID，即模板中资源的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'WebServer',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B288A0BE-D927-4888-B0F7-B35EF84B6E6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B288A0BE-D927-4888-B0F7-B35EF84B6E6\\"\\n}","errorExample":""},{"type":"xml","example":"<SignalResourceResponse>\\n    <RequestId>B288A0BE-D927-4888-B0F7-B35EF84B6E6F</RequestId> \\n</SignalResourceResponse>","errorExample":""}]',
      'title' => '发送信号',
      'summary' => '您可以调用本接口对指定资源栈的资源发送信号，与ALIYUN::ROS::WaitCondition配合使用以控制资源栈的执行流程。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '| HttpCode | 错误码 | 错误信息 | 描述 |
| ------------- | ------------- | ------------- | ------------- |
| 404 | ResourceNotAvailable |The Resource ({name}) is not available. |资源处于不可用状态。name为资源名。 |
| 404 | ResourceNotFound |The Resource ({name}) could not be found in Stack {stack}. |资源栈中不存某资源。name为资源名，stack为资源栈名称或ID。 |
| 404 | StackNotFound |The Stack ({name}) could not be found. |资源栈不存在。name为资源栈名称或ID。 |
',
    ),
    'GetServiceProvisions' => 
    array (
      'summary' => '查询服务开通状态和服务角色信息。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'TemplateBody',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板主体的结构。长度为1~524,288个字节。如果长度较长，则建议通过HTTP POST+Body Param的方式，将参数放在请求体中进行传递，避免因URL过长而导致请求失败。

> 您必须且仅能指定TemplateBody、TemplateURL、TemplateId或TemplateScratchId其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'ROSTemplateFormatVersion: \'2015-09-01\'\\r\\nResources:\\r\\n  Vpc:\\r\\n    Type: ALIYUN::ECS::VPC\\r\\n    Properties:\\r\\n      CidrBlock: 192.168.0.0/24\\r\\n      VpcName: TestVpc',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateURL',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包含模板主体的文件的位置。URL必须指向位于HTTP Web服务器（HTTP或HTTPS）或阿里云OSS存储空间中的模板（1~524,288个字节）。OSS存储空间的URL，例如oss://ros/template/demo或oss://ros/template/demo?RegionId=cn-hangzhou。如未指定OSS地域，默认与接口参数RegionId相同。

您必须且仅能指定TemplateBody、TemplateURL、TemplateId或Services其中一个参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'oss://ros-template/demo',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板ID。支持共享模板和私有模板。

您必须且仅能指定TemplateBody、TemplateURL、TemplateId或Services其中一个参数。',
            'type' => 'string',
            'required' => false,
            'example' => '5ecd1e10-b0e9-4389-a565-e4c15efc****',
          ),
        ),
        4 => 
        array (
          'name' => 'TemplateVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板版本。如果不指定，默认取最新版本。

TemplateVersion仅在指定TemplateId时生效。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        5 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '参数。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '参数的名称。如果未指定参数的名称和值，则ROS将使用模板中指定的默认值。

> Parameters为可选参数。若指定了Parameters，则ParameterKey为必选参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Amount',
                ),
                'ParameterValue' => 
                array (
                  'description' => '参数的值。

> Parameters为可选参数。若指定了Parameters，则ParameterValue为必选参数。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '12',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        6 => 
        array (
          'name' => 'Services',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '云服务列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ServiceName' => 
                array (
                  'description' => '云服务名称。取值：

- AHAS：应用高可用服务。

- ARMS：应用实时监控服务。

- ApiGateway：API网关。

- BatchCompute：批量计算。

- BrainIndustrial：工业大脑。

- CloudStorageGateway：云存储网关。

- CMS：云监控。

- CR：镜像容器服务。

- CS：容器服务。

- DCDN：全站加速。

- DataHub：数据总线。

- DataWorks：数据工场。

- EDAS：企业级分布式应用服务。

- EHPC：弹性高性能计算。

- EMAS：移动研发平台。

- FC：函数计算。

- FNF：Serverless工作流。

- MaxCompute：大数据计算服务。

- MNS：消息服务。

- HBR：云备份。

- IMM：智能媒体管理。

- IOT：物联网平台。

- KMS：密钥管理服务。

- NAS：文件存储。

- NLP：自然语言处理。

- OSS：对象存储服务。

- OTS：表格存储。

- PrivateLink：私网连接。

- PrivateZone：云解析。

- RocketMQ：消息队列RocketMQ版。

- SAE：应用引擎。

- SLS：日志服务。

- TrafficMirror：流量镜像。

- VS：视频监控。

- Xtrace：链路追踪。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'EHPC',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 50,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A9938C04-26AD-5EFA-B394-EA7866842DFF',
              ),
              'ServiceProvisions' => 
              array (
                'description' => '云服务详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ServiceName' => 
                    array (
                      'description' => '云服务名称。',
                      'type' => 'string',
                      'example' => 'EHPC',
                    ),
                    'Status' => 
                    array (
                      'description' => '云服务开通状态。取值：

- Enabled：已开通。

- Disabled：未开通。

- Unknown：开通状态未知。',
                      'type' => 'string',
                      'example' => 'Enabled',
                    ),
                    'StatusReason' => 
                    array (
                      'description' => '云服务未开通或开通状态未知的原因。


> 当Status取值为Disabled或Unknown时，返回该参数。',
                      'type' => 'string',
                      'example' => 'No permission.',
                    ),
                    'AutoEnableService' => 
                    array (
                      'description' => '是否在模板中定义了自动开通服务。取值：

- true：自动开通。

- false：手动开通。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'EnableURL' => 
                    array (
                      'description' => '云服务开通链接。
> 当Status取值为Disabled时，返回该参数。',
                      'type' => 'string',
                      'example' => 'https://common-buy.aliyun.com/?commodityCode=nas',
                    ),
                    'RoleProvision' => 
                    array (
                      'description' => '云服务角色信息。若为空表示没有服务角色。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AuthorizationURL' => 
                        array (
                          'description' => '角色授权链接。

> 当Created取值为false时，返回该参数。',
                          'type' => 'string',
                          'example' => 'https://ehpc.console.aliyun.com/',
                        ),
                        'Roles' => 
                        array (
                          'description' => '云服务角色列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'RoleName' => 
                              array (
                                'description' => '角色名称。',
                                'type' => 'string',
                                'example' => 'AliyunServiceRoleForEHPC',
                              ),
                              'Created' => 
                              array (
                                'description' => '角色是否已创建。取值：

- true：已创建。

- false：未创建。',
                                'type' => 'boolean',
                                'example' => 'true',
                              ),
                              'Function' => 
                              array (
                                'description' => '角色用途。
默认值：Default，表示该角色为服务默认角色。',
                                'type' => 'string',
                                'example' => 'Default',
                              ),
                              'ApiForCreation' => 
                              array (
                                'description' => '创建角色用到的API信息。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ApiProductId' => 
                                  array (
                                    'description' => 'API所属产品ID。',
                                    'type' => 'string',
                                    'example' => 'rds',
                                  ),
                                  'ApiName' => 
                                  array (
                                    'description' => 'API名称。',
                                    'type' => 'string',
                                    'example' => 'CreateServiceLinkedRole',
                                  ),
                                  'ApiType' => 
                                  array (
                                    'description' => 'API类型。
取值：

- Open：开放API。

- Inner：内部API。',
                                    'type' => 'string',
                                    'example' => 'Open',
                                  ),
                                  'Parameters' => 
                                  array (
                                    'description' => 'API参数信息。${变量名}表示动态参数，目前支持：${RegionId} 地域。',
                                    'type' => 'object',
                                    'example' => '{   "ServiceLinkedRole": "AliyunServiceRoleForRdsPgsqlOnEcs",   "RegionId": "${RegionId}" }',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'DependentServiceNames' => 
                    array (
                      'description' => '待查询服务依赖的服务列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '待查询服务依赖的服务名称。',
                        'type' => 'string',
                        'example' => 'NAS',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A9938C04-26AD-5EFA-B394-EA7866842DFF\\",\\n  \\"ServiceProvisions\\": [\\n    {\\n      \\"ServiceName\\": \\"EHPC\\",\\n      \\"Status\\": \\"Enabled\\",\\n      \\"StatusReason\\": \\"No permission.\\",\\n      \\"AutoEnableService\\": false,\\n      \\"EnableURL\\": \\"https://common-buy.aliyun.com/?commodityCode=nas\\",\\n      \\"RoleProvision\\": {\\n        \\"AuthorizationURL\\": \\"https://ehpc.console.aliyun.com/\\",\\n        \\"Roles\\": [\\n          {\\n            \\"RoleName\\": \\"AliyunServiceRoleForEHPC\\",\\n            \\"Created\\": true,\\n            \\"Function\\": \\"Default\\",\\n            \\"ApiForCreation\\": {\\n              \\"ApiProductId\\": \\"rds\\",\\n              \\"ApiName\\": \\"CreateServiceLinkedRole\\",\\n              \\"ApiType\\": \\"Open\\",\\n              \\"Parameters\\": {\\n                \\"ServiceLinkedRole\\": \\"AliyunServiceRoleForRdsPgsqlOnEcs\\",\\n                \\"RegionId\\": \\"${RegionId}\\"\\n              }\\n            }\\n          }\\n        ]\\n      },\\n      \\"DependentServiceNames\\": [\\n        \\"NAS\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetServiceProvisionsResponse>\\n    <RequestId>A9938C04-26AD-5EFA-B394-EA7866842DFF</RequestId>\\n    <ServiceProvisions>\\n        <ServiceName>EHPC</ServiceName>\\n        <Status>Enabled</Status>\\n        <StatusReason>No permission.</StatusReason>\\n        <AutoEnableService>false</AutoEnableService>\\n        <EnableURL>https://common-buy.aliyun.com/?commodityCode=nas</EnableURL>\\n        <RoleProvision>\\n            <AuthorizationURL>https://ehpc.console.aliyun.com/</AuthorizationURL>\\n            <Roles>\\n                <RoleName>AliyunServiceRoleForEHPC</RoleName>\\n                <Created>true</Created>\\n                <Function>Default</Function>\\n                <ApiForCreation>\\n                    <ApiProductId>rds</ApiProductId>\\n                    <ApiName>CreateServiceLinkedRole</ApiName>\\n                    <ApiType>Open</ApiType>\\n                </ApiForCreation>\\n            </Roles>\\n        </RoleProvision>\\n        <DependentServiceNames>NAS</DependentServiceNames>\\n    </ServiceProvisions>\\n</GetServiceProvisionsResponse>","errorExample":""}]',
      'title' => '查询服务开通状态',
      'description' => '### 使用说明
本文将提供一个示例，在杭州地域查询弹性高性能计算的开通状态及服务角色信息。

> 请确保您已具备调用[GetRole](~~28711~~)接口的权限。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
    ),
    'GetFeatureDetails' => 
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
        'operationType' => 'list',
        'abilityTreeCode' => '104761',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREros68YWKF',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Feature',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询功能。取值：
- Terraform：Terraform托管功能。

- ResourceCleaner：资源清理器（ALIYUN::ROS::ResourceCleaner）功能。

- TemplateScratch：资源场景功能。
- All：所有功能。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Terraform',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源栈所属的地域ID。您可以调用[DescribeRegions](~~131035~~)查看最新的阿里云地域列表。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'EBF833DA-D0E2-52BE-92E2-59CA56BE834E',
              ),
              'Terraform' => 
              array (
                'description' => 'Terraform托管功能详情。
',
                'type' => 'object',
                'properties' => 
                array (
                  'SupportedVersions' => 
                  array (
                    'description' => 'Terraform版本列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ProviderVersions' => 
                        array (
                          'description' => '当前Terraform版本对应的Provider名称及版本。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ProviderName' => 
                              array (
                                'description' => 'Provider名称。',
                                'type' => 'string',
                                'example' => 'alicloud',
                              ),
                              'SupportedVersions' => 
                              array (
                                'description' => 'Provider版本列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => 'Provider版本。',
                                  'type' => 'string',
                                  'example' => '1.121.2',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'TerraformVersion' => 
                        array (
                          'description' => 'Terraform版本。',
                          'type' => 'string',
                          'example' => '1.0.11',
                        ),
                        'Transform' => 
                        array (
                          'description' => 'ROS支持的Terraform版本，与Terraform类型模板中Transform取值相同。',
                          'type' => 'string',
                          'example' => 'Aliyun::Terraform-v1.0',
                        ),
                        'UpdateAllowedTransforms' => 
                        array (
                          'description' => 'ROS允许更新到的Terraform版本列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'ROS允许更新到的Terraform版本。',
                            'type' => 'string',
                            'example' => 'Aliyun::Terraform-v1.1',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'SupportedResourceTypes' => 
                  array (
                    'description' => 'Terraform托管功能支持的资源类型。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SystemTag' => 
                      array (
                        'description' => '支持系统标签`acs:ros:stackId`的资源类型列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '支持系统标签`acs:ros:stackId`的资源类型。',
                          'type' => 'string',
                          'example' => 'alicloud_instance',
                        ),
                      ),
                      'CustomTag' => 
                      array (
                        'description' => '支持自定义标签的资源类型列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '支持自定义标签的资源类型。',
                          'type' => 'string',
                          'example' => 'alicloud_instance',
                        ),
                      ),
                      'EstimateCost' => 
                      array (
                        'description' => '支持询价的资源类型列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '支持询价的资源类型。',
                          'type' => 'string',
                          'example' => 'alicloud_instance',
                        ),
                      ),
                      'ResourceGroup' => 
                      array (
                        'description' => '支持资源组的资源类型列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '支持资源组的资源类型。',
                          'type' => 'string',
                          'example' => 'alicloud_instance',
                        ),
                      ),
                      'StackOperationRisk' => 
                      array (
                        'description' => '支持风险检查的资源类型。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'DeleteStack' => 
                          array (
                            'description' => '操作类型为DeleteStack的风险检查所支持的资源类型的列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '操作类型为DeleteStack的风险检查所支持的资源类型。',
                              'type' => 'string',
                              'example' => 'alicloud_instance',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TemplateScratch' => 
              array (
                'description' => '资源场景功能详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'SupportedResourceTypes' => 
                  array (
                    'description' => '资源场景支持的资源类型信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源场景支持的资源类型信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'ALIYUN::ECS::Disk',
                        ),
                        'SourceResourcesSupported' => 
                        array (
                          'description' => '是否支持源资源选择方式。取值：
- true：支持。

- false：不支持。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'SourceTagSupported' => 
                        array (
                          'description' => '是否支持源标签选择方式。取值：
- true：支持。

- false：不支持。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'SourceResourceGroupSupported' => 
                        array (
                          'description' => '是否支持源资源组选择方式。取值：
- true：支持。

- false：不支持。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'SourceSupported' => 
                        array (
                          'description' => '是否支持源标签、源资源组、源资源三种选择方式的任意一种。取值：
- true：支持。

- false：不支持。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'SupportedTemplateScratchTypes' => 
                        array (
                          'description' => '支持的资源场景类型列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '支持的资源场景类型，取值：

- ArchitectureReplication：资源复制。

- ArchitectureDetection：资源探查。

- ResourceImport：资源纳管。

- ResourceMigration：资源迁移。',
                            'type' => 'string',
                            'example' => 'ArchitectureReplication',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'ResourceCleaner' => 
              array (
                'description' => '资源清理器（ALIYUN::ROS::ResourceCleaner）功能详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'SupportedResourceTypes' => 
                  array (
                    'description' => '支持清理的资源类型列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceType' => 
                        array (
                          'description' => '支持清理的资源类型。',
                          'type' => 'string',
                          'example' => 'ECS:Instance',
                        ),
                        'SupportedFilters' => 
                        array (
                          'description' => '该资源类型支持的过滤器列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '支持的过滤器名称。包括：
- RegionId：地域ID。
- ResourceId：资源ID。
- ResourceName：资源名称。
- Tags：标签。
- ResourceGroupId：资源组。
- DeletionProtection：删除保护。',
                            'type' => 'string',
                            'example' => 'ResourceName',
                          ),
                        ),
                        'SideEffects' => 
                        array (
                          'description' => '清理该类型资源可能产生的副作用列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '副作用名称。取值：StopInstance（资源关联的实例被停止）。',
                            'type' => 'string',
                            'example' => 'StopInstance',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TemplateParameterConstraints' => 
              array (
                'description' => '模板参数约束功能详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'SupportedResourceTypes' => 
                  array (
                    'description' => '模板参数约束支持的资源类型信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '模板参数约束支持的资源类型信息列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'ALIYUN::ECS::Disk',
                        ),
                        'Properties' => 
                        array (
                          'description' => '对应资源支持的属性名称。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '对应资源支持的属性名称。',
                            'type' => 'string',
                            'example' => '["DiskCategory", "ZoneId"]',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'DriftDetection' => 
              array (
                'description' => '偏差检测功能详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'SupportedResourceTypes' => 
                  array (
                    'description' => '支持偏差检测的资源类型列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'ALIYUN::ECS::Disk',
                    ),
                  ),
                ),
              ),
              'ResourceImport' => 
              array (
                'description' => '资源导入功能详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'SupportedResourceTypes' => 
                  array (
                    'description' => '支持资源导入的资源类型列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '支持资源导入的资源类型列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ResourceType' => 
                        array (
                          'description' => '资源类型。',
                          'type' => 'string',
                          'example' => 'ALIYUN::ECS::Disk',
                        ),
                        'ResourceIdentifiers' => 
                        array (
                          'description' => '资源的标识符属性列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '资源的标识符属性。',
                            'type' => 'string',
                            'example' => 'DiskId',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EBF833DA-D0E2-52BE-92E2-59CA56BE834E\\",\\n  \\"Terraform\\": {\\n    \\"SupportedVersions\\": [\\n      {\\n        \\"ProviderVersions\\": [\\n          {\\n            \\"ProviderName\\": \\"alicloud\\",\\n            \\"SupportedVersions\\": [\\n              \\"1.121.2\\"\\n            ]\\n          }\\n        ],\\n        \\"TerraformVersion\\": \\"1.0.11\\",\\n        \\"Transform\\": \\"Aliyun::Terraform-v1.0\\",\\n        \\"UpdateAllowedTransforms\\": [\\n          \\"Aliyun::Terraform-v1.1\\"\\n        ]\\n      }\\n    ],\\n    \\"SupportedResourceTypes\\": {\\n      \\"SystemTag\\": [\\n        \\"alicloud_instance\\"\\n      ],\\n      \\"CustomTag\\": [\\n        \\"alicloud_instance\\"\\n      ],\\n      \\"EstimateCost\\": [\\n        \\"alicloud_instance\\"\\n      ],\\n      \\"ResourceGroup\\": [\\n        \\"alicloud_instance\\"\\n      ],\\n      \\"StackOperationRisk\\": {\\n        \\"DeleteStack\\": [\\n          \\"alicloud_instance\\"\\n        ]\\n      }\\n    }\\n  },\\n  \\"TemplateScratch\\": {\\n    \\"SupportedResourceTypes\\": [\\n      {\\n        \\"ResourceType\\": \\"ALIYUN::ECS::Disk\\",\\n        \\"SourceResourcesSupported\\": true,\\n        \\"SourceTagSupported\\": true,\\n        \\"SourceResourceGroupSupported\\": true,\\n        \\"SourceSupported\\": true,\\n        \\"SupportedTemplateScratchTypes\\": [\\n          \\"ArchitectureReplication\\"\\n        ]\\n      }\\n    ]\\n  },\\n  \\"ResourceCleaner\\": {\\n    \\"SupportedResourceTypes\\": [\\n      {\\n        \\"ResourceType\\": \\"ECS:Instance\\",\\n        \\"SupportedFilters\\": [\\n          \\"ResourceName\\"\\n        ],\\n        \\"SideEffects\\": [\\n          \\"StopInstance\\"\\n        ]\\n      }\\n    ]\\n  },\\n  \\"TemplateParameterConstraints\\": {\\n    \\"SupportedResourceTypes\\": [\\n      {\\n        \\"ResourceType\\": \\"ALIYUN::ECS::Disk\\",\\n        \\"Properties\\": [\\n          \\"[\\\\\\"DiskCategory\\\\\\", \\\\\\"ZoneId\\\\\\"]\\"\\n        ]\\n      }\\n    ]\\n  },\\n  \\"DriftDetection\\": {\\n    \\"SupportedResourceTypes\\": [\\n      \\"ALIYUN::ECS::Disk\\"\\n    ]\\n  },\\n  \\"ResourceImport\\": {\\n    \\"SupportedResourceTypes\\": [\\n      {\\n        \\"ResourceType\\": \\"ALIYUN::ECS::Disk\\",\\n        \\"ResourceIdentifiers\\": [\\n          \\"DiskId\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetFeatureDetailsResponse>\\n    <TemplateScratch>\\n        <SupportedResourceTypes>\\n            <SourceTagSupported>false</SourceTagSupported>\\n            <SourceSupported>false</SourceSupported>\\n            <ResourceType>ALIYUN::ALB::BackendServerAttachment</ResourceType>\\n            <SourceResourcesSupported>false</SourceResourcesSupported>\\n            <SourceResourceGroupSupported>false</SourceResourceGroupSupported>\\n        </SupportedResourceTypes>\\n        <SupportedResourceTypes>\\n            <SourceTagSupported>false</SourceTagSupported>\\n            <SourceSupported>false</SourceSupported>\\n            <ResourceType>ALIYUN::ALB::Listener</ResourceType>\\n            <SourceResourcesSupported>false</SourceResourcesSupported>\\n            <SourceResourceGroupSupported>false</SourceResourceGroupSupported>\\n        </SupportedResourceTypes>\\n    </TemplateScratch>\\n    <RequestId>A656A2C3-5A21-5F0E-9368-427E6FED58ED</RequestId>\\n    <Terraform>\\n        <SupportedResourceTypes>\\n            <EstimateCost>alicloud_disk</EstimateCost>\\n            <EstimateCost>alicloud_ecs_disk</EstimateCost>\\n            <SystemTag>alicloud_disk</SystemTag>\\n            <SystemTag>alicloud_ecs_disk</SystemTag>\\n            <CustomTag>alicloud_disk</CustomTag>\\n            <CustomTag>alicloud_ecs_disk</CustomTag>\\n            <ResourceGroup>alicloud_disk</ResourceGroup>\\n            <ResourceGroup>alicloud_alb_acl</ResourceGroup>\\n            <StackOperationRisk>\\n                <DeleteStack>alicloud_ecs_disk</DeleteStack>\\n                <DeleteStack>alicloud_eip</DeleteStack>\\n            </StackOperationRisk>\\n        </SupportedResourceTypes>\\n        <SupportedVersions>\\n            <ProviderVersions>\\n                <ProviderName>aws</ProviderName>\\n                <SupportedVersions>4.21.0</SupportedVersions>\\n                <SupportedVersions>4.22.0</SupportedVersions>\\n            </ProviderVersions>\\n            <ProviderVersions>\\n                <ProviderName>alicloud</ProviderName>\\n                <SupportedVersions>1.174.0</SupportedVersions>\\n                <SupportedVersions>1.176.0</SupportedVersions>\\n            </ProviderVersions>\\n            <TerraformVersion>1.0.11</TerraformVersion>\\n            <Transform>Aliyun::Terraform-v1.0</Transform>\\n            <UpdateAllowedTransforms>Aliyun::Terraform-v1.1</UpdateAllowedTransforms>\\n        </SupportedVersions>\\n        <SupportedVersions>\\n            <ProviderVersions>\\n                <ProviderName>aws</ProviderName>\\n                <SupportedVersions>4.21.0</SupportedVersions>\\n                <SupportedVersions>4.22.0</SupportedVersions>\\n            </ProviderVersions>\\n            <ProviderVersions>\\n                <ProviderName>alicloud</ProviderName>\\n                <SupportedVersions>1.174.0</SupportedVersions>\\n                <SupportedVersions>1.176.0</SupportedVersions>\\n            </ProviderVersions>\\n            <TerraformVersion>1.1.9</TerraformVersion>\\n            <Transform>Aliyun::Terraform-v1.1</Transform>\\n            <UpdateAllowedTransforms>Aliyun::Terraform-v1.0</UpdateAllowedTransforms>\\n        </SupportedVersions>\\n    </Terraform>\\n    <ResourceCleaner>\\n        <SupportedResourceTypes>\\n            <ResourceType>ADB:DBCluster</ResourceType>\\n            <SupportedFilters>RegionId</SupportedFilters>\\n            <SupportedFilters>ResourceId</SupportedFilters>\\n            <SupportedFilters>ResourceName</SupportedFilters>\\n            <SupportedFilters>Tags</SupportedFilters>\\n            <SupportedFilters>ResourceGroupId</SupportedFilters>\\n        </SupportedResourceTypes>\\n        <SupportedResourceTypes>\\n            <ResourceType>ALB:LoadBalancer</ResourceType>\\n            <SupportedFilters>RegionId</SupportedFilters>\\n            <SupportedFilters>ResourceId</SupportedFilters>\\n            <SupportedFilters>ResourceName</SupportedFilters>\\n            <SupportedFilters>Tags</SupportedFilters>\\n            <SupportedFilters>ResourceGroupId</SupportedFilters>\\n            <SupportedFilters>DeletionProtection</SupportedFilters>\\n        </SupportedResourceTypes>\\n    </ResourceCleaner>\\n</GetFeatureDetailsResponse>","errorExample":""}]',
      'title' => '获取特定功能的详情',
      'summary' => '查询ROS支持的特定功能详情。',
      'description' => '### 使用说明

GetFeatureDetails支持查询的功能为：Terraform托管功能、资源清理器功能和资源场景功能。

本文将提供一个示例，查询杭州地域所有功能详情，包括Terraform版本、Provider版本、支持的资源类型等。

> 返回示例中只呈现了部分代码。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~131957~~)。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'ros.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'ros.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'ros.aliyuncs.com',
    ),
  ),
);
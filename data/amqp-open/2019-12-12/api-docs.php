<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'amqp-open',
    'version' => '2019-12-12',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 121315,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateInstance',
        1 => 'UpdateInstance',
        2 => 'UpdateInstanceName',
        3 => 'GetMetadataAmount',
        4 => 'ListInstances',
      ),
    ),
    1 => 
    array (
      'id' => 121325,
      'title' => 'Vhost',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateVirtualHost',
        1 => 'DeleteVirtualHost',
        2 => 'ListVirtualHosts',
      ),
    ),
    2 => 
    array (
      'id' => 121329,
      'title' => 'Queue',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateQueue',
        1 => 'DeleteQueue',
        2 => 'ListQueueConsumers',
        3 => 'ListQueues',
        4 => 'ListQueueUpStreamBindings',
      ),
    ),
    3 => 
    array (
      'id' => 121319,
      'title' => 'Exchange',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateExchange',
        1 => 'DeleteExchange',
        2 => 'ListDownStreamBindings',
        3 => 'ListExchanges',
        4 => 'ListExchangeUpStreamBindings',
      ),
    ),
    4 => 
    array (
      'id' => 121311,
      'title' => 'Binding',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateBinding',
        1 => 'DeleteBinding',
        2 => 'ListBindings',
      ),
    ),
    5 => 
    array (
      'id' => 177638,
      'title' => '静态用户名密码',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAccount',
        1 => 'DeleteAccount',
        2 => 'ListAccounts',
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
    'CreateInstance' => 
    array (
      'summary' => '创建云消息队列RabbitMQ的实例。',
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
        'operationType' => 'create',
        'riskType' => 'high',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户端Token',
            'description' => '客户端Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'c2c5d1274axxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'PaymentType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '付费类型',
            'description' => '付费类型，取值如下：
- Subscription：预付费
- PayAsYouGo ： 后付费（即 Serverless）',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
              'PayAsYouGo' => 'PayAsYouGo',
              'Subscription' => 'Subscription',
            ),
            'example' => 'Subscription',
            'enum' => 
            array (
              0 => 'Subscription',
              1 => 'PayAsYouGo',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预付费周期，单位: periodCycle',
            'description' => '预付费周期，单位：periodCycle。

> 当 PaymentType 为 Subscription 时，该参数有效，默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PeriodCycle',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '预付费周期单位',
            'description' => '预付费周期单位，取值如下：
- Month：月
- Year：年

当PaymentType为Subscription时，该参数有效，默认值为Month。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Month' => 'Month',
              'Year' => 'Year',
            ),
            'example' => 'Month',
            'default' => 'Month',
            'enum' => 
            array (
              0 => 'Month',
              1 => 'Year',
              2 => 'M',
              3 => 'Y',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'AutoRenew',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '续费方式',
            'description' => '续费方式，取值如下：
- true：自动续费
- false：手动续费',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'AutoRenewPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '自动续费周期，单位：月',
            'description' => '自动续费周期，单位 RenewalDurationUnit 值，默认为：月。

> 当 AutoRenew 为 true 时，该参数有效，默认值为1 。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'RenewStatus',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'autoRenew和renewStatus都是续费方式，当两个同时填写时，以renewStatus为准',
            'description' => '续费状态,等同于 autoRenew ，二选1 配置即可，取值如下：
- AutoRenewal: 自动续费

> 和renewStatus都是续费方式，当两个同时填写时，以renewStatus为准',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'RenewalDurationUnit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动续费周期单位，取值如下：
- Month：月
- Year：年',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Month' => 'Month',
              'Year' => 'Year',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例规格类型',
            'description' => '实例规格类型，
预付费类型的取值如下：
- professional：专业版
- enterprise：企业版
- vip：铂金版

后付费实例：无需填写',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'enterprise' => 'enterprise',
              'vip' => 'vip',
              'professional' => 'professional',
            ),
            'example' => 'professional',
            'enum' => 
            array (
              0 => 'professional',
              1 => 'enterprise',
              2 => 'vip',
            ),
          ),
        ),
        9 => 
        array (
          'name' => 'ServerlessChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '后付费（即 Serverless）实例的计费类型，取值如下：
- onDemand：按量累计',
            'type' => 'string',
            'required' => false,
            'example' => 'onDemand',
            'enum' => 
            array (
              0 => 'onDemand',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称。建议长度不超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'amqp-xxxxx',
          ),
        ),
        11 => 
        array (
          'name' => 'MaxPrivateTps',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '私网TPS流量，单位：次/秒',
            'description' => '私网TPS流量，单位：次/秒。

请根据 “[云消息队列 RabbitMQ 版-购买页](https://common-buy.aliyun.com/?commodityCode=ons_onsproxy_pre)” 所给出的取值设置。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000',
          ),
        ),
        12 => 
        array (
          'name' => 'SupportEip',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否支持公网',
            'description' => '是否支持公网，取值如下：
- true：支持公网
- false：不支持公网',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        13 => 
        array (
          'name' => 'MaxEipTps',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '公网网TPS流量峰值，单位：TPS',
            'description' => '公网网TPS流量峰值，单位：TPS。

请根据 “[云消息队列 RabbitMQ 版-购买页](https://common-buy.aliyun.com/?commodityCode=ons_onsproxy_pre)” 所给出的取值设置。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '128',
            'default' => '128',
          ),
        ),
        14 => 
        array (
          'name' => 'QueueCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '配置Queue的数量上限',
            'description' => '配置Queue的数量，单位：个。

请根据 “[云消息队列 RabbitMQ 版-购买页](https://common-buy.aliyun.com/?commodityCode=ons_onsproxy_pre)” 所给出的取值设置。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1000',
          ),
        ),
        15 => 
        array (
          'name' => 'MaxConnections',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '最大连接数',
            'description' => '最大连接数。

请根据 “[云消息队列 RabbitMQ 版-购买页](https://common-buy.aliyun.com/?commodityCode=ons_onsproxy_pre)” 所给出的取值设置。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50000',
          ),
        ),
        16 => 
        array (
          'name' => 'StorageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '配置消息存储空间',
            'description' => '配置消息存储空间，单位： GB，取值如下：
- 专业版实例和企业版实例：固定为0。

> 取值为0表示专业版和企业版实例不收取存储费用，而非没有存储空间。

- 铂金版实例：m×100，其中m的取值范围为\\[7,28\\]。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
          ),
        ),
        17 => 
        array (
          'name' => 'SupportTracing',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开通消息轨迹功能',
            'description' => '是否开通消息轨迹功能，取值如下：
- true：开通消息轨迹功能
- false：不开通消息轨迹功能

> - 铂金版实例免费提供15天消息轨迹功能，轨迹功能只能选择开启且轨迹保存时长只能设置为15天。
- 其他规格类型实例可选择开启或关闭轨迹功能。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        18 => 
        array (
          'name' => 'TracingStorageTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '配置消息轨迹的保存时长',
            'description' => '配置消息轨迹的保存时长，单位：天，取值如下：
- 3：3天
- 7：7天
- 15：15天

当SupportTracing为true时，该参数有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
            'enum' => 
            array (
              0 => '3',
              1 => '7',
              2 => '15',
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
            'title' => 'JsonResult<Object>',
            'description' => 'JsonResult<Object>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'CCBB1225-C392-480E-8C7F-D09AB2CD2***',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'xxx failed,xxxx',
              ),
              'Data' => 
              array (
                'description' => '返回已创建实例的ID',
                'type' => 'any',
                'example' => 'amqp-cn-xxxxx',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CCBB1225-C392-480E-8C7F-D09AB2CD2***\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"xxx failed,xxxx\\",\\n  \\"Data\\": \\"amqp-cn-xxxxx\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateInstanceResponse>\\n    <RequestId>CCBB1225-C392-480E-8C7F-D09AB2CD2***</RequestId>\\n    <Code>200</Code>\\n    <Message>xxx failed,xxxx</Message>\\n    <Data>amqp-cn-xxxxx</Data>\\n    <Success>true</Success>\\n</CreateInstanceResponse>","errorExample":""}]',
      'title' => '创建实例',
    ),
    'UpdateInstance' => 
    array (
      'summary' => '更新云消息队列RabbitMQ的实例，升降配规格。',
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
        'riskType' => 'high',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户端Token',
            'description' => '客户端Token',
            'type' => 'string',
            'required' => false,
            'example' => 'c2c5d1274axxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '变配的实例 id，必填',
            'description' => '云消息队列 RabbitMQ 版实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'amqp-cn-jtexxxxx',
            'enum' => 
            array (
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'ModifyType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '变配类型:
- UPGRADE：升配
- DOWNGRADE：降配',
            'description' => '变配类型，取值如下：
- UPGRADE：升配
- DOWNGRADE：降配',
            'type' => 'string',
            'required' => true,
            'example' => 'UPGRADE',
            'enum' => 
            array (
              0 => 'UPGRADE',
              1 => 'DOWNGRADE',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例规格类型',
            'description' => '实例规格类型， 预付费类型的取值如下：
- professional：专业版
- enterprise：企业版
- vip：铂金版

后付费实例：无需填写',
            'type' => 'string',
            'required' => false,
            'example' => 'professional',
            'enum' => 
            array (
              0 => 'professional',
              1 => 'enterprise',
              2 => 'vip',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'ServerlessChargeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '后付费（即 Serverless）实例的计费类型，取值如下：
- onDemand：按量累计',
            'type' => 'string',
            'required' => false,
            'example' => 'onDemand',
            'enum' => 
            array (
              0 => 'onDemand',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'MaxPrivateTps',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '私网TPS流量，单位：次/秒',
            'description' => '私网TPS流量，单位：次/秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000',
          ),
        ),
        6 => 
        array (
          'name' => 'SupportEip',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否支持公网',
            'description' => '是否支持公网',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'MaxEipTps',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '公网网TPS流量峰值，单位：TPS',
            'description' => '公网 TPS 流量峰值，单位：次/秒',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '128',
            'default' => '128',
          ),
        ),
        8 => 
        array (
          'name' => 'QueueCapacity',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '配置Queue的数量上限',
            'description' => '配置Queue的数量上限',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1000',
          ),
        ),
        9 => 
        array (
          'name' => 'MaxConnections',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '最大连接数',
            'description' => '最大连接数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1000',
          ),
        ),
        10 => 
        array (
          'name' => 'StorageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '配置消息存储空间',
            'description' => '配置消息存储空间',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
          ),
        ),
        11 => 
        array (
          'name' => 'SupportTracing',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否开通消息轨迹功能',
            'description' => '是否开通消息轨迹功能',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        12 => 
        array (
          'name' => 'TracingStorageTime',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '配置消息轨迹的保存时长',
            'description' => '配置消息轨迹的保存时长',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
            'enum' => 
            array (
              0 => '3',
              1 => '7',
              2 => '15',
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '628705FD-03EE-4ABE-BB21-E1672960***',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'InstanceNotExist',
              ),
              'Data' => 
              array (
                'description' => '返回数据，涵盖 orderId 和 instanceId。例如

``` json
"Data": {
    "instanceId": "amqp-cn-xxxxx",
    "orderId": 22222
  }
```',
                'type' => 'any',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'string',
                'example' => 'true',
              ),
              'StatusCode' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"628705FD-03EE-4ABE-BB21-E1672960***\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"InstanceNotExist\\",\\n  \\"Data\\": \\"\\",\\n  \\"Success\\": \\"true\\",\\n  \\"StatusCode\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '更新实例',
    ),
    'UpdateInstanceName' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需修改名称的云消息队列 RabbitMQ 版实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amqp-cn-zvp2ajsj****',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需更新的实例名称。取值无限制，建议长度不超过64个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amqp_test',
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
                'description' => '状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '当执行报错时，返回此参数，提示错误信息。',
                'type' => 'string',
                'example' => 'InstanceNotExist',
              ),
              'Data' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '6DC68EC9-0E76-5435-B8C0-FF9492B4****',
              ),
              'Success' => 
              array (
                'description' => '执行成功的返回信息。

',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"InstanceNotExist\\",\\n  \\"Data\\": \\"true\\",\\n  \\"RequestId\\": \\"6DC68EC9-0E76-5435-B8C0-FF9492B4****\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateInstanceNameResponse>\\n      <RequestId>6DC68EC9-0E76-5435-B8C0-FF9492B4****</RequestId>\\n      <Data>true</Data>\\n      <Code>200</Code>\\n      <Success>true</Success>\\n</UpdateInstanceNameResponse>","errorExample":""}]',
      'title' => '更新实例名称',
      'summary' => '云消息队列 RabbitMQ 版实例后，实例名称默认为实例ID，您可以自定义修改实例名称，方便区分实例。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetMetadataAmount' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 RabbitMQ 版实例的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'amqp-cn-v0h1kb9n***',
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
                'example' => 'B75ACF23-2BEB-44AC-A0B6-AE14EDCA***',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'MaxVirtualHosts' => 
                  array (
                    'description' => '可创建的Vhost的最大数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'CurrentVirtualHosts' => 
                  array (
                    'description' => '已创建的Vhost的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'MaxQueues' => 
                  array (
                    'description' => '可创建的Queue的最大数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'CurrentExchanges' => 
                  array (
                    'description' => '已创建的Exchange的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '7',
                  ),
                  'MaxExchanges' => 
                  array (
                    'description' => '可创建的Exchange的最大数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'CurrentQueues' => 
                  array (
                    'description' => '已创建的Queue的数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B75ACF23-2BEB-44AC-A0B6-AE14EDCA***\\",\\n  \\"Data\\": {\\n    \\"MaxVirtualHosts\\": 10,\\n    \\"CurrentVirtualHosts\\": 1,\\n    \\"MaxQueues\\": 20,\\n    \\"CurrentExchanges\\": 7,\\n    \\"MaxExchanges\\": 20,\\n    \\"CurrentQueues\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetMetadataAmountResponse>\\n    <RequestId>B75ACF23-2BEB-44AC-A0B6-AE14EDCA***</RequestId>\\n    <Data>\\n        <MaxExchanges>20</MaxExchanges>\\n        <MaxVirtualHosts>10</MaxVirtualHosts>\\n        <CurrentExchanges>7</CurrentExchanges>\\n        <MaxQueues>20</MaxQueues>\\n        <CurrentVirtualHosts>1</CurrentVirtualHosts>\\n        <CurrentQueues>1</CurrentQueues>\\n    </Data>\\n</GetMetadataAmountResponse>","errorExample":""}]',
      'title' => '获取实例的元数据',
      'summary' => '查看指定云消息队列 RabbitMQ 版实例下可创建的Vhost、Exchange、Queue的最大数量以及当前已创建的数量。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListInstances' => 
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
            'description' => '用来标记当前查询结束的位置，以便下一次调用时作为参数传入，继续翻页。首次调用或返回最后一页时，取值为空字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大结果集。建议取值在1~100之间。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '200',
            'minimum' => '1',
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
                'example' => 'CCBB1225-C392-480E-8C7F-D09AB2CD2***',
              ),
              'Data' => 
              array (
                'description' => '数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'NextToken' => 
                  array (
                    'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                    'type' => 'string',
                    'example' => 'caebacccb2be03f84eb48b699f0a****',
                  ),
                  'MaxResults' => 
                  array (
                    'description' => '最大结果集。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Instances' => 
                  array (
                    'description' => '实例。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '实例。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '实例状态。取值如下：

- DEPLOYING：实例部署中

- EXPIRED：实例已过期

- SERVING：实例服务中

- RELEASED：实例已被释放',
                          'type' => 'string',
                          'example' => 'SERVING',
                        ),
                        'SupportEIP' => 
                        array (
                          'description' => '是否支持EIP。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ExpireTime' => 
                        array (
                          'description' => '实例过期的时间戳，单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1651507200000',
                        ),
                        'OrderCreateTime' => 
                        array (
                          'description' => '订单创建的时间戳，单位：毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1572441939000',
                        ),
                        'PrivateEndpoint' => 
                        array (
                          'description' => '实例的VPC接入点。',
                          'type' => 'string',
                          'example' => 'amqp-cn-st21x7kv****.mq-amqp.cn-hangzhou-a.aliyuncs.com',
                        ),
                        'StorageSize' => 
                        array (
                          'description' => '磁盘容量，单位：GB。
> 专业版实例和企业版实例无此参数，返回**-1**。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '200',
                        ),
                        'MaxEipTps' => 
                        array (
                          'description' => '实例的公网TPS流量峰值，单位：条/秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '24832',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'amqp-cn-st21x7kv****',
                        ),
                        'InstanceType' => 
                        array (
                          'description' => '实例类型。

- PROFESSIONAL：专业版

- ENTERPRISE：企业版

- VIP：铂金版

<props="china">- SERVERLESS：Serverless版</props>',
                          'type' => 'string',
                          'example' => 'professional',
                        ),
                        'PublicEndpoint' => 
                        array (
                          'description' => '实例的公网接入点。',
                          'type' => 'string',
                          'example' => 'amqp-cn-st21x7kv****.mq-amqp.cn-hangzhou-a.aliyuncs.com',
                        ),
                        'ClassicEndpoint' => 
                        array (
                          'description' => '经典接入点，该参数不再使用。',
                          'type' => 'string',
                          'example' => 'amqp-cn-st21x7kv****.not-support',
                        ),
                        'MaxVhost' => 
                        array (
                          'description' => '实例的Vhost的数量上限，单位：个。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '50',
                        ),
                        'MaxTps' => 
                        array (
                          'description' => '实例的私网TPS流量峰值，单位：条/秒。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5000',
                        ),
                        'AutoRenewInstance' => 
                        array (
                          'description' => '是否自动更新实例。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'InstanceName' => 
                        array (
                          'description' => '实例名称。',
                          'type' => 'string',
                          'example' => 'amqp-cn-st21x7kv****',
                        ),
                        'MaxQueue' => 
                        array (
                          'description' => '实例的Queue的数量上限，单位：个。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '50',
                        ),
                        'OrderType' => 
                        array (
                          'description' => '订单类型。
- PRE_PAID：预付费。
- POST_PAID：后付费。',
                          'type' => 'string',
                          'example' => 'PRE_PAID',
                        ),
                        'Tags' => 
                        array (
                          'description' => '标签列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '标签列表。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Key' => 
                              array (
                                'description' => '标签键。',
                                'type' => 'string',
                                'example' => 'region',
                              ),
                              'Value' => 
                              array (
                                'description' => '标签值。',
                                'type' => 'string',
                                'example' => 'hangzhou',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CCBB1225-C392-480E-8C7F-D09AB2CD2***\\",\\n  \\"Data\\": {\\n    \\"NextToken\\": \\"caebacccb2be03f84eb48b699f0a****\\",\\n    \\"MaxResults\\": 1,\\n    \\"Instances\\": [\\n      {\\n        \\"Status\\": \\"SERVING\\",\\n        \\"SupportEIP\\": true,\\n        \\"ExpireTime\\": 1651507200000,\\n        \\"OrderCreateTime\\": 1572441939000,\\n        \\"PrivateEndpoint\\": \\"amqp-cn-st21x7kv****.mq-amqp.cn-hangzhou-a.aliyuncs.com\\",\\n        \\"StorageSize\\": 200,\\n        \\"MaxEipTps\\": 24832,\\n        \\"InstanceId\\": \\"amqp-cn-st21x7kv****\\",\\n        \\"InstanceType\\": \\"professional\\",\\n        \\"PublicEndpoint\\": \\"amqp-cn-st21x7kv****.mq-amqp.cn-hangzhou-a.aliyuncs.com\\",\\n        \\"ClassicEndpoint\\": \\"amqp-cn-st21x7kv****.not-support\\",\\n        \\"MaxVhost\\": 50,\\n        \\"MaxTps\\": 5000,\\n        \\"AutoRenewInstance\\": false,\\n        \\"InstanceName\\": \\"amqp-cn-st21x7kv****\\",\\n        \\"MaxQueue\\": 50,\\n        \\"OrderType\\": \\"PRE_PAID\\",\\n        \\"Tags\\": [\\n          {\\n            \\"Key\\": \\"region\\",\\n            \\"Value\\": \\"hangzhou\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListInstancesResponse>\\r\\n      <RequestId>CCBB1225-C392-480E-8C7F-D09AB2CD2***</RequestId>\\r\\n      <Data>\\r\\n            <Instances>\\r\\n                  <Status>SERVING</Status>\\r\\n                  <MaxTps>5000</MaxTps>\\r\\n                  <MaxEipTps>24832</MaxEipTps>\\r\\n                  <ClassicEndpoint>amqp-cn-st21x7kv****.not-support</ClassicEndpoint>\\r\\n                  <InstanceId>amqp-cn-st21x7kv****</InstanceId>\\r\\n                  <MaxQueue>50</MaxQueue>\\r\\n                  <SupportEIP>true</SupportEIP>\\r\\n                  <StorageSize>200</StorageSize>\\r\\n                  <InstanceName>amqp-cn-st21x7kv****</InstanceName>\\r\\n                  <OrderType>PRE_PAID</OrderType>\\r\\n                  <OrderCreateTime>1572441939000</OrderCreateTime>\\r\\n                  <MaxVhost>50</MaxVhost>\\r\\n                  <PublicEndpoint>amqp-cn-st21x7kv****.mq-amqp.cn-hangzhou-a.aliyuncs.com</PublicEndpoint>\\r\\n                  <InstanceType>professional</InstanceType>\\r\\n                  <ExpireTime>1651507200000</ExpireTime>\\r\\n                  <AutoRenewInstance>false</AutoRenewInstance>\\r\\n                  <PrivateEndpoint>amqp-cn-st21x7kv****.mq-amqp.cn-hangzhou-a.aliyuncs.com</PrivateEndpoint>\\r\\n            </Instances>\\r\\n            <NextToken></NextToken>\\r\\n            <MaxResults>1</MaxResults>\\r\\n      </Data>\\r\\n</ListInstancesResponse>","errorExample":""}]',
      'title' => '查询实例列表',
      'summary' => '查询指定地域下的云消息队列 RabbitMQ 版实例列表以及各实例的基本信息，包括实例接入点、实例规格上限等信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateVirtualHost' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云消息队列 RabbitMQ 版实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amqp-cn-v0h1kb9n***',
          ),
        ),
        1 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待创建Vhost的名称。取值说明如下：

- Vhost名称只能包含字母、数字、短划线（-）、下划线（_）、半角句号（.）、井号（#）、正斜线（/）、at符号（@）。

- Vhost名称长度限制1~255字符。

- Vhost创建后，Vhost名称不可修改，只能删除重建。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Demo',
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
                'example' => '628705FD-03EE-4ABE-BB21-E1672960***',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"628705FD-03EE-4ABE-BB21-E1672960***\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateVirtualHostResponse>\\n    <RequestId>628705FD-03EE-4ABE-BB21-E1672960***</RequestId>\\n</CreateVirtualHostResponse>","errorExample":""}]',
      'title' => '创建Vhost',
      'summary' => 'Vhost是指虚拟主机，用作逻辑隔离，分别管理各自的Exchange、Queue和Binding，使得应用安全地运行在不同的Vhost上，相互之间不会干扰。Producer和Consumer连接云消息队列 RabbitMQ 版需要指定一个Vhost。',
    ),
    'DeleteVirtualHost' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待删除的Vhost所属的云消息队列 RabbitMQ 版实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amqp-cn-v0h1kb9nu***',
          ),
        ),
        1 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待删除Vhost的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4311050D-BD63-48F9-822B-947A75A1***',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4311050D-BD63-48F9-822B-947A75A1***\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteVirtualHostResponse>\\r\\n    <RequestId>4311050D-BD63-48F9-822B-947A75A1***</RequestId>\\r\\n</DeleteVirtualHostResponse>","errorExample":""}]',
      'title' => '删除Vhost',
      'summary' => '调用DeleteVirtualHost删除Vhost。',
      'description' => '删除Vhost前，请确保已删除该Vhost下的所有Exchange和Queue。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListVirtualHosts' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 RabbitMQ 版实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1880770869023***',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前查询结束的位置，以便下一次调用时作为参数传入，继续翻页。首次调用或返回最后一页时，取值为空字符串。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大结果集。取值：
**1～100**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '2',
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
                'example' => 'EF4DB019-DA4A-4CE3-B220-223BBC93F***',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'MaxResults' => 
                  array (
                    'description' => '最大结果集。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'NextToken' => 
                  array (
                    'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                    'type' => 'string',
                    'example' => 'caebacccb2be03f84eb48b699f0a****',
                  ),
                  'VirtualHosts' => 
                  array (
                    'description' => 'Vhost列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => 'Vhost名称。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EF4DB019-DA4A-4CE3-B220-223BBC93F***\\",\\n  \\"Data\\": {\\n    \\"MaxResults\\": 2,\\n    \\"NextToken\\": \\"caebacccb2be03f84eb48b699f0a****\\",\\n    \\"VirtualHosts\\": [\\n      {\\n        \\"Name\\": \\"test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListVirtualHostsResponse>\\n    <RequestId>EF4DB019-DA4A-4CE3-B220-223BBC93F***</RequestId>\\n    <Data>\\n        <NextToken></NextToken>\\n        <MaxResults>2</MaxResults>\\n        <VirtualHosts>\\n            <Name>test</Name>\\n        </VirtualHosts>\\n    </Data>\\n</ListVirtualHostsResponse>","errorExample":""}]',
      'title' => '查询 Vhost',
      'summary' => '查询指定云消息队列 RabbitMQ 版实例下所有的Vhost。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateQueue' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待创建Queue所属的云消息队列 RabbitMQ 版实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amqp-cn-v0h1kb9nu***',
          ),
        ),
        1 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待创建Queue所属的Vhost名称。
只能包含字⺟、数字、短划线（-）、下划线（_）、半角句号（.）、井号（#）、正斜线（/）、at符号（@），⻓度限制1~255字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'QueueName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待创建的Queue的名称。

- Queue名称只能包含字母、数字、短划线（-）、下划线（_）、半角句号（.）、井号（#）、正斜线（/）、at符号（@），长度限制1~255字符。

- Queue创建后，名称无法修改，只能删除后重建。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DemoQueue',
          ),
        ),
        3 => 
        array (
          'name' => 'AutoDeleteState',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否自动删除。取值：

- true：是。如果订阅该Queue的最后一个消费端取消订阅后，那么该Queue将会自动删除。
- false：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ExclusiveState',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否为排他性Exchange。取值：

- true：是。只能被声明该排他性Exchange的Connection使用。该Connection断开后该排他性Exchange自动删除。
- false：否。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'MessageTTL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '消息在Queue中的有效期。

- 某条消息在Queue中的留存时间超过配置的消息存活时间时，则该消息过期。

- 消息存活时间的值必须为非负整型数，最大为1天。单位为毫秒。例如，某条消息的存活时间的值是1000，则代表该消息最多会在Queue中存活1秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000',
          ),
        ),
        6 => 
        array (
          'name' => 'AutoExpireState',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Queue的自动过期时间。如果Queue在指定时间内没有被访问，则会被自动删除。

单位为毫秒。
> 该参数对应的功能需要开通后才能使用。如需使用，请<props="china">[提交工单](https://selfservice.console.aliyun.com/ticket/createIndex)</props><props="intl">[提交工单](https://ticket-intl.console.aliyun.com/#/ticket/createIndex)</props>开通。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10000',
          ),
        ),
        7 => 
        array (
          'name' => 'MaxLength',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前版本不支持该参数。

Queue中消息的最大数量。如果超出该数量，则先到达该Queue的消息将会被删除。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => false,
            'example' => '1000',
          ),
        ),
        8 => 
        array (
          'name' => 'DeadLetterExchange',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '死信Exchange。该类Exchange是用来接收被拒绝的消息。

如果消费端拒绝一个不重新发送的消息，那么消息队列RabbitMQ版将会把消息路由到指定的死信Exchange，该Exchange再将消息路由到绑定的Queue进行存储。',
            'type' => 'string',
            'required' => false,
            'example' => 'DLExchange',
          ),
        ),
        9 => 
        array (
          'name' => 'DeadLetterRoutingKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '死信Routing Key。
只能包含字⺟、数字、短划线（-）、下划线（_）、半角句号（.）、井号（#）、正斜线（/）、at符号（@），⻓度限制1~255字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'test.dl',
          ),
        ),
        10 => 
        array (
          'name' => 'MaximumPriority',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '不支持优先级功能。取值不影响调用和返回结果。',
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
                'example' => '59B52E2C-0B8E-44EC-A314-D0314A50***',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"59B52E2C-0B8E-44EC-A314-D0314A50***\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateQueueResponse>\\n      <RequestId>59B52E2C-0B8E-44EC-A314-D0314A50***</RequestId>\\n</CreateQueueResponse>","errorExample":""}]',
      'title' => '创建Queue',
      'summary' => 'Queue是指消息队列，云消息队列 RabbitMQ 版的消息都会被发送至指定的Exchange，再由Exchange路由至绑定的Queue中。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteQueue' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1880770869023***',
          ),
        ),
        1 => 
        array (
          'name' => 'QueueName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Queue名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DemoQueue',
          ),
        ),
        2 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Vhost名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '92385FD2-624A-48C9-8FB5-753F2AFA***',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"92385FD2-624A-48C9-8FB5-753F2AFA***\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteQueueResponse>\\n    <RequestId>92385FD2-624A-48C9-8FB5-753F2AFA***</RequestId>\\n</DeleteQueueResponse>","errorExample":""}]',
      'title' => '删除 Queue',
      'summary' => '删除Queue。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListQueueConsumers' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 RabbitMQ 版实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amqp-cn-5yd3aw******',
          ),
        ),
        1 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Vhost名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'Queue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '队列名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'queue-rabbit-springboot-advance5',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前查询结束的位置，以便下一次调用时作为参数传入，继续翻页。首次调用或返回最后一页时，取值为空字符串。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
            'default' => '',
          ),
        ),
        4 => 
        array (
          'name' => 'QueryCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '拉取数据的条数。如果不设置，默认值为1。

取值范围：\\[1,100\\]。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
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
                'example' => '4409B7D5-E4EC-4EB5-804A-385DCDFCD***',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'MaxResults' => 
                  array (
                    'description' => '最大结果集。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'NextToken' => 
                  array (
                    'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                    'type' => 'string',
                    'example' => 'caebacccb2be03f84eb48b699f0a****',
                  ),
                  'Consumers' => 
                  array (
                    'description' => '消费者信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ConsumerTag' => 
                        array (
                          'description' => '消费者标签。',
                          'type' => 'string',
                          'example' => 'sgen-1',
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
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4409B7D5-E4EC-4EB5-804A-385DCDFCD***\\",\\n  \\"Data\\": {\\n    \\"MaxResults\\": 1,\\n    \\"NextToken\\": \\"caebacccb2be03f84eb48b699f0a****\\",\\n    \\"Consumers\\": [\\n      {\\n        \\"ConsumerTag\\": \\"sgen-1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListQueueConsumersResponse>\\n    <RequestId>4409B7D5-E4EC-4EB5-804A-385DCDFCD***</RequestId>\\n    <Data>\\n        <NextToken>AAAATzkBMTg4MDc3MDg2OTAyMzQyMAF0ZXN0AXF1ZXVlLXJhYmJpdC1zcHJpbmdib290LWFkdmFuY2U1ATc3NjMxNjIwATE1OTEzNTA5MDkzMDkBrWuX5aAiG4ytL5ffWi0HBUjdleo=</NextToken>\\n        <MaxResults>1</MaxResults>\\n        <Consumers>\\n            <ConsumerTag>sgen-1</ConsumerTag>\\n        </Consumers>\\n    </Data>\\n</ListQueueConsumersResponse>","errorExample":""}]',
      'title' => '查询Queue的消费者',
      'summary' => '查询指定Queue的在线Consumer客户端。',
      'description' => '云消息队列 RabbitMQ 版仅支持查看在线Consumer客户端，不支持查看离线Consumer客户端。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListQueues' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 RabbitMQ 版实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amqp-cn-5yd3aw******',
          ),
        ),
        1 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Vhost名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前查询结束的位置，以便下一次调用时作为参数传入，继续翻页。首次调用或返回最后一页时，取值为空字符串。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
            'minLength' => 1,
            'default' => '',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大结果集。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '1',
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
                'example' => 'CE811989-9F02-42CE-97A6-2239CB5C2***',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'MaxResults' => 
                  array (
                    'description' => '最大结果集。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'NextToken' => 
                  array (
                    'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                    'type' => 'string',
                    'example' => 'caebacccb2be03f84eb48b699f0a****',
                  ),
                  'Queues' => 
                  array (
                    'description' => 'Queue。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ExclusiveState' => 
                        array (
                          'description' => '是否是排他性队列。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'AutoDeleteState' => 
                        array (
                          'description' => '自动删除状态。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1580887085240',
                        ),
                        'Attributes' => 
                        array (
                          'description' => '属性。',
                          'type' => 'object',
                          'example' => 'test',
                        ),
                        'VHostName' => 
                        array (
                          'description' => 'Vhost名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Name' => 
                        array (
                          'description' => 'Queue名称。',
                          'type' => 'string',
                          'example' => 'QueueTest',
                        ),
                        'OwnerId' => 
                        array (
                          'description' => 'Queue所属的实例ID。',
                          'type' => 'string',
                          'example' => 'amqp-cn-5yd3aw******',
                        ),
                        'LastConsumeTime' => 
                        array (
                          'description' => '上一次消费时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1680887085240',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CE811989-9F02-42CE-97A6-2239CB5C2***\\",\\n  \\"Data\\": {\\n    \\"MaxResults\\": 1,\\n    \\"NextToken\\": \\"caebacccb2be03f84eb48b699f0a****\\",\\n    \\"Queues\\": [\\n      {\\n        \\"ExclusiveState\\": false,\\n        \\"AutoDeleteState\\": false,\\n        \\"CreateTime\\": 1580887085240,\\n        \\"Attributes\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"VHostName\\": \\"test\\",\\n        \\"Name\\": \\"QueueTest\\",\\n        \\"OwnerId\\": \\"amqp-cn-5yd3aw******\\",\\n        \\"LastConsumeTime\\": 1680887085240\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListQueuesResponse>\\n    <RequestId>CE811989-9F02-42CE-97A6-2239CB5C2***</RequestId>\\n    <Data>\\n        <NextToken>,</NextToken>\\n        <MaxResults>1</MaxResults>\\n        <Queues>\\n            <VHostName>test</VHostName>\\n            <OwnerId>1880770869023***</OwnerId>\\n            <CreateTime>1580887085240</CreateTime>\\n            <ExclusiveState>false</ExclusiveState>\\n            <Attributes>test</Attributes>\\n            <LastConsumeTime>1680887085240</LastConsumeTime>\\n            <AutoDeleteState>false</AutoDeleteState>\\n            <Name>QueueTest</Name>\\n        </Queues>\\n    </Data>\\n</ListQueuesResponse>","errorExample":""}]',
      'title' => '查询Queue',
      'summary' => '查询指定云消息队列 RabbitMQ 版实例下某一Vhost内的所有Queue信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListQueueUpStreamBindings' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 RabbitMQ 版实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amqp-cn-5yd3aw******',
          ),
        ),
        1 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Vhost名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'QueueName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Queue名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'QueueTest',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前查询结束的位置，以便下一次调用时作为参数传入，继续翻页。首次调用或返回最后一页时，取值为空字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        4 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大结果集。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '1',
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
                'example' => '8BFB1C9D-08A2-4859-A47C-403C9EFA2***',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'MaxResults' => 
                  array (
                    'description' => '最大结果集。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'NextToken' => 
                  array (
                    'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                    'type' => 'string',
                    'example' => 'caebacccb2be03f84eb48b699f0a****',
                  ),
                  'Bindings' => 
                  array (
                    'description' => '绑定。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SourceExchange' => 
                        array (
                          'description' => '源Exchange名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Argument' => 
                        array (
                          'description' => 'x-match属性。取值：

- **all**：默认值，所有消息头的键值对必须匹配。

- **any**：至少一对消息头的键值对必须匹配。

该参数仅适用于Headers类型的Exchange，对其它类型的Exchange无效。',
                          'type' => 'string',
                          'example' => 'all',
                        ),
                        'BindingKey' => 
                        array (
                          'description' => '绑定键。

- 绑定源Exchange为非Topic类型：

    - 只能包含字母、数字、短划线（-）、下划线（_）、半角句号（.）、正斜线（/）、at符号（@）。

    - 长度限制1~255字符。

- 绑定源Exchange为Topic类型：

    - 可以包含字母、数字、短划线（-）、下划线（_）、半角句号（.）、井号（#）、正斜线（/）、at符号（@）。

    - 不能以半角句号（.）开头或结尾。对于井号（#）或星号（*），如果以其开头，则其后需有半角句号（.），如果以其结尾，则其前需有半角句号（.），如果既不是开头也不是结尾，则其前后均需有半角句号（.）。

    - 长度限制1~255字符。',
                          'type' => 'string',
                          'example' => 'amq.test',
                        ),
                        'BindingType' => 
                        array (
                          'description' => '绑定目标对象的类型。取值：

- **QUEUE**

- **EXCHANGE**',
                          'type' => 'string',
                          'example' => 'QUEUE',
                        ),
                        'DestinationName' => 
                        array (
                          'description' => '绑定名称。',
                          'type' => 'string',
                          'example' => 'QueueTest',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8BFB1C9D-08A2-4859-A47C-403C9EFA2***\\",\\n  \\"Data\\": {\\n    \\"MaxResults\\": \\"1\\",\\n    \\"NextToken\\": \\"caebacccb2be03f84eb48b699f0a****\\",\\n    \\"Bindings\\": [\\n      {\\n        \\"SourceExchange\\": \\"test\\",\\n        \\"Argument\\": \\"all\\",\\n        \\"BindingKey\\": \\"amq.test\\",\\n        \\"BindingType\\": \\"QUEUE\\",\\n        \\"DestinationName\\": \\"QueueTest\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListQueueUpStreamBindingsResponse>\\n    <RequestId>8BFB1C9D-08A2-4859-A47C-403C9EFA2***</RequestId>\\n    <Data>\\n        <NextToken>,</NextToken>\\n        <MaxResults>1</MaxResults>\\n        <Bindings>\\n            <SourceExchange>test</SourceExchange>\\n            <Argument>all</Argument>\\n            <BindingType>QUEUE</BindingType>\\n            <BindingKey>amq.test</BindingKey>\\n            <DestinationName>QueueTest</DestinationName>\\n        </Bindings>\\n    </Data>\\n</ListQueueUpStreamBindingsResponse>","errorExample":""}]',
      'title' => '查询Queue被绑定',
      'summary' => '查询指定Queue被哪些Exchange绑定。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateExchange' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待创建Exchange所属的云消息队列 RabbitMQ 版实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amqp-cn-v0h1kb9nu***',
          ),
        ),
        1 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待创建Exchange所属的Vhost名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'ExchangeName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待创建的Exchange名称。说明：

- Exchange名称只能包含字母、数字、短划线（-）、下划线（_）、半角句号（.）、井号（#）、正斜线（/）、at 符号（@），长度限制1~255 字符。

- Exchange创建后，名称不支持修改，只能删除后重建。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DemoExchange',
          ),
        ),
        3 => 
        array (
          'name' => 'ExchangeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Exchange类型。取值：

- **DIRECT**：该类型路由规则会将消息路由到Binding Key与Routing Key完全匹配的Queue中。

- **TOPIC**：该类型与DIRECT类型相似，使用Routing Key模式匹配和字符串比较的方式将消息路由至绑定的Queue。

- **FANOUT**：该类型路由规则非常简单，会把所有发送到该Exchange的消息路由到所有与它绑定的Queue中，相当于广播功能。

- **HEADERS**：该类型与DIRECT类型相似。Headers Exchange使用Headers属性代替Routing Key进行路由匹配，在绑定Headers Exchange和Queue时，设置绑定属性的键值对；在向Headers Exchange发送消息时，设置消息的Headers属性键值对，使用消息Headers属性键值对和绑定属性键值对比较的方式将消息路由至绑定的Queue。

- **X-CONSISTENT-HASH**：x-consistent-hash Exchange支持将Routing Key或Header值进行Hash计算，使用一致性哈希算法将消息路由到不同的Queue上。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DIRECT',
            'enum' => 
            array (
              0 => 'DIRECT',
              1 => 'TOPIC',
              2 => 'FANOUT',
              3 => 'HEADERS',
              4 => 'X_JMS_TOPIC',
              5 => 'X_DELAYED_MESSAGE',
              6 => 'X_CONSISTENT_HASH',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'AutoDeleteState',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否自动删除。取值：

- **true**：是。如果绑定到该Exchange的最后一个Queue解除绑定，该Exchange会自动删除。

- **false**：否。如果绑定到该Exchange的最后一个Queue解除绑定，该Exchange不会自动删除。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'Internal',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否为内部Exchange。取值：

- **false**：否

- **true**：是',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'AlternateExchange',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '备份Exchange。配置备份Exchange用于接收Exchange路由失败的消息。

',
            'type' => 'string',
            'required' => false,
            'example' => 'DemoAE',
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
                'example' => '021788F6-E50C-4BD6-9F80-66B0A19A6***',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"021788F6-E50C-4BD6-9F80-66B0A19A6***\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateExchangeResponse>\\r\\n    <RequestId>021788F6-E50C-4BD6-9F80-66B0A19A6***</RequestId>\\r\\n</CreateExchangeResponse>","errorExample":""}]',
      'title' => '创建Exchange',
      'summary' => 'Producer将消息发送到Exchange，由Exchange将消息路由到一个或多个Queue中（或者丢弃）。Exchange根据Routing Key和Binding Key将消息路由到Queue。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteExchange' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待删除Exchange所属的云消息队列 RabbitMQ 版实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amqp-cn-v0h1kb9nu***',
          ),
        ),
        1 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待删除Exchange所属的Vhost名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'ExchangeName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待删除的Exchange的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DemoExchange',
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
                'example' => '6961FFB8-6358-4EDC-9E3C-4A0C56CE6***',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6961FFB8-6358-4EDC-9E3C-4A0C56CE6***\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteExchangeResponse>\\r\\n    <RequestId>6961FFB8-6358-4EDC-9E3C-4A0C56CE6***</RequestId>\\r\\n</DeleteExchangeResponse>","errorExample":""}]',
      'title' => '删除Exchange',
      'summary' => '调用DeleteExchange删除Exchange。',
      'description' => '## 使用说明
- **headers**和**x-jms-topic**类型的Exchange不支持删除。

- Vhost下的3个内置Exchange（amq.direct、amq.topic和amq.fanout）不支持删除。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDownStreamBindings' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Exchange所属的云消息队列 RabbitMQ 版实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1880770869023***',
          ),
        ),
        1 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Exchange所属的Vhost名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'ExchangeName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Exchange名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前查询结束的位置，以便下一次调用时作为参数传入，继续翻页。首次调用或返回最后一页时，取值为空字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        4 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大结果集。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '1',
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
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9C1E0502-0790-4FDB-8C96-6D5C8D9B7***',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'MaxResults' => 
                  array (
                    'description' => '最大结果集。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'NextToken' => 
                  array (
                    'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                    'type' => 'string',
                    'example' => 'caebacccb2be03f84eb48b699f0a****',
                  ),
                  'Bindings' => 
                  array (
                    'description' => '绑定关系。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SourceExchange' => 
                        array (
                          'description' => '源Exchange名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Argument' => 
                        array (
                          'description' => 'x-match属性。取值：

- **all**：默认值，所有消息头的键值对必须匹配。

- **any**：至少一对消息头的键值对必须匹配。

该参数仅适用于Headers类型的Exchange，对其它类型的Exchange无效。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'BindingKey' => 
                        array (
                          'description' => '绑定键。

- 绑定源Exchange为非Topic类型：

    - 只能包含字母、数字、短划线（-）、下划线（_）、半角句号（.）、正斜线（/）、at符号（@）。

    - 长度限制1~255字符。

- 绑定源Exchange为Topic类型：

    - 可以包含字母、数字、短划线（-）、下划线（_）、半角句号（.）、井号（#）、正斜线（/）、at符号（@）。

    - 不能以半角句号（.）开头或结尾。对于井号（#）或星号（*），如果以其开头，则其后需有半角句号（.），如果以其结尾，则其前需有半角句号（.），如果既不是开头也不是结尾，则其前后均需有半角句号（.）。

    - 长度限制1~255字符。',
                          'type' => 'string',
                          'example' => 'amq.test',
                        ),
                        'BindingType' => 
                        array (
                          'description' => '绑定目标对象的类型。取值：

- **QUEUE**

- **EXCHANGE**',
                          'type' => 'string',
                          'example' => 'QUEUE',
                        ),
                        'DestinationName' => 
                        array (
                          'description' => '绑定目标名称。',
                          'type' => 'string',
                          'example' => 'QueueTest',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"operation success\\",\\n  \\"RequestId\\": \\"9C1E0502-0790-4FDB-8C96-6D5C8D9B7***\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"MaxResults\\": 1,\\n    \\"NextToken\\": \\"caebacccb2be03f84eb48b699f0a****\\",\\n    \\"Bindings\\": [\\n      {\\n        \\"SourceExchange\\": \\"test\\",\\n        \\"Argument\\": \\"test\\",\\n        \\"BindingKey\\": \\"amq.test\\",\\n        \\"BindingType\\": \\"QUEUE\\",\\n        \\"DestinationName\\": \\"QueueTest\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message>operation success</Message>\\n<RequestId>9C1E0502-0790-4FDB-8C96-6D5C8D9B7***</RequestId>\\n<Data>\\n    <NextToken>,</NextToken>\\n    <MaxResults>1</MaxResults>\\n    <Bindings>\\n        <Argument>test</Argument>\\n        <SourceExchange>test</SourceExchange>\\n        <BindingKey>amq.test</BindingKey>\\n        <BindingType>QUEUE</BindingType>\\n        <DestinationName>QueueTest</DestinationName>\\n    </Bindings>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询Exchange绑定',
      'summary' => '查询指定Exchange绑定了哪些Exchange或Queue。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListExchanges' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 RabbitMQ 版实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amqp-cn-7pp2mwbc****',
          ),
        ),
        1 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Vhost名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一次查询的Token。取值：

- 如果是第一次查询或没有下一次查询，则无需填写。

- 如果有下一次查询，则取值为上一次返回的`NextToken`值。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAANDQBYW1xcC1jbi03cHAybXdiY3AwMGEBdmhvc3QBAXNkZndhYWJhATE2NDkzMTM4OTU5NDIB4o3z1pPwWzk4aYuiRffi8R6-****',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大结果集。取值：
**1～100**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '1',
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
                'example' => 'FEBA5E0C-50D0-4FA6-A794-4901E5465***',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'MaxResults' => 
                  array (
                    'description' => '最大结果集。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'NextToken' => 
                  array (
                    'description' => '表示当前调用返回的`NextToken`值，根据返回值判断是否有下一个查询开始的Token。

- 如果`NextToken`为空，则表示没有下一个查询开始的Token。

- 如果`NextToken`有返回值，则表示该返回值即为下一个查询开始的Token。',
                    'type' => 'string',
                    'example' => 'AAAANDQBYW1xcC1jbi03cHAybXdiY3AwMGEBdmhvc3QBAXNkZndhYWJhATE2NDkzMTM4OTU5NDIB4o3z1pPwWzk4aYuiRffi8R6-****',
                  ),
                  'Exchanges' => 
                  array (
                    'description' => 'Exchange。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AutoDeleteState' => 
                        array (
                          'description' => '自动删除状态。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => 'Exchange创建的时间戳，单位为毫秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1580886216000',
                        ),
                        'Attributes' => 
                        array (
                          'description' => '当前版本不支持此参数。
属性。',
                          'type' => 'object',
                          'example' => 'test',
                        ),
                        'VHostName' => 
                        array (
                          'description' => 'Vhost名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Name' => 
                        array (
                          'description' => 'Exchange名称。',
                          'type' => 'string',
                          'example' => 'amq.direct',
                        ),
                        'ExchangeType' => 
                        array (
                          'description' => 'Exchange类型。',
                          'type' => 'string',
                          'example' => 'DIRECT',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FEBA5E0C-50D0-4FA6-A794-4901E5465***\\",\\n  \\"Data\\": {\\n    \\"MaxResults\\": 1,\\n    \\"NextToken\\": \\"AAAANDQBYW1xcC1jbi03cHAybXdiY3AwMGEBdmhvc3QBAXNkZndhYWJhATE2NDkzMTM4OTU5NDIB4o3z1pPwWzk4aYuiRffi8R6-****\\",\\n    \\"Exchanges\\": [\\n      {\\n        \\"AutoDeleteState\\": false,\\n        \\"CreateTime\\": 1580886216000,\\n        \\"Attributes\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"VHostName\\": \\"test\\",\\n        \\"Name\\": \\"amq.direct\\",\\n        \\"ExchangeType\\": \\"DIRECT\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListExchangesResponse>\\n    <RequestId>FEBA5E0C-50D0-4FA6-A794-4901E5465***</RequestId>\\n    <Data>\\n        <NextToken></NextToken>\\n        <MaxResults>1</MaxResults>\\n        <Exchanges>\\n            <VHostName>test</VHostName>\\n            <CreateTime>1580886216000</CreateTime>\\n            <AutoDeleteState>false</AutoDeleteState>\\n            <ExchangeType>DIRECT</ExchangeType>\\n            <Name>amq.direct</Name>\\n        </Exchanges>\\n    </Data>\\n</ListExchangesResponse>","errorExample":""}]',
      'title' => '查询Exchange',
      'summary' => '查询指定实例下某一Vhost内创建的所有Exchange。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListExchangeUpStreamBindings' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 RabbitMQ 版实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1880770869023***',
          ),
        ),
        1 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Vhost名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'ExchangeName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Exchange名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前查询结束的位置，以便下一次调用时作为参数传入，继续翻页。首次调用或返回最后一页时，取值为空字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        4 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '最大结果集。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '1',
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
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2DCCCE88-BC82-4A4F-AF5E-9A759672B***',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'MaxResults' => 
                  array (
                    'description' => '最大结果集。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'NextToken' => 
                  array (
                    'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                    'type' => 'string',
                    'example' => 'caebacccb2be03f84eb48b699f0a****',
                  ),
                  'Bindings' => 
                  array (
                    'description' => '绑定。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SourceExchange' => 
                        array (
                          'description' => '源Exchange名称。',
                          'type' => 'string',
                          'example' => 'dle',
                        ),
                        'Argument' => 
                        array (
                          'description' => 'x-match属性。取值：

- **all**：默认值，所有消息头的键值对必须匹配。

- **any**：至少一对消息头的键值对必须匹配。

该参数仅适用于Headers类型的Exchange，对其它类型的Exchange无效。',
                          'type' => 'string',
                          'example' => 'all',
                        ),
                        'BindingKey' => 
                        array (
                          'description' => '绑定键。

- 绑定源Exchange为非Topic类型：

    - 只能包含字母、数字、短划线（-）、下划线（_）、半角句号（.）、正斜线（/）、at符号（@）。

    - 长度限制1~255字符。

- 绑定源Exchange为Topic类型：

    - 可以包含字母、数字、短划线（-）、下划线（_）、半角句号（.）、井号（#）、正斜线（/）、at符号（@）。

    - 不能以半角句号（.）开头或结尾。对于井号（#）或星号（*），如果以其开头，则其后需有半角句号（.），如果以其结尾，则其前需有半角句号（.），如果既不是开头也不是结尾，则其前后均需有半角句号（.）。

    - 长度限制1~255字符。',
                          'type' => 'string',
                          'example' => 'amq.dle.test',
                        ),
                        'BindingType' => 
                        array (
                          'description' => '绑定目标对象的类型。取值：

- **QUEUE**

- **EXCHANGE**',
                          'type' => 'string',
                          'example' => 'EXCHANGE',
                        ),
                        'DestinationName' => 
                        array (
                          'description' => '目标名称。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"operation success\\",\\n  \\"RequestId\\": \\"2DCCCE88-BC82-4A4F-AF5E-9A759672B***\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"MaxResults\\": 1,\\n    \\"NextToken\\": \\"caebacccb2be03f84eb48b699f0a****\\",\\n    \\"Bindings\\": [\\n      {\\n        \\"SourceExchange\\": \\"dle\\",\\n        \\"Argument\\": \\"all\\",\\n        \\"BindingKey\\": \\"amq.dle.test\\",\\n        \\"BindingType\\": \\"EXCHANGE\\",\\n        \\"DestinationName\\": \\"test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListExchangeUpStreamBindingsResponse>\\n    <RequestId>2DCCCE88-BC82-4A4F-AF5E-9A759672B***</RequestId>\\n    <Message>operation success</Message>\\n    <Data>\\n        <NextToken>,</NextToken>\\n        <MaxResults>1</MaxResults>\\n        <Bindings>\\n            <SourceExchange>dle</SourceExchange>\\n            <Argument>all</Argument>\\n            <BindingType>EXCHANGE</BindingType>\\n            <BindingKey>amq.dle.test</BindingKey>\\n            <DestinationName>test</DestinationName>\\n        </Bindings>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListExchangeUpStreamBindingsResponse>","errorExample":""}]',
      'title' => '查询Exchange被绑定',
      'summary' => '查询指定Exchange被哪些Queue或者其他Exchange绑定。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateBinding' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云消息队列 RabbitMQ 版实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amqp-cn-v0h1kb9nu***',
          ),
        ),
        1 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Vhost名称。
此Vhost已在控制台创建且是**DestinationName**和**SourceExchange**所属的Vhost。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceExchange',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '源Exchange名称，且此Exchange已在控制台创建。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'NormalEX',
          ),
        ),
        3 => 
        array (
          'name' => 'DestinationName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '绑定目标名称。
此绑定目标需已在控制台创建且所属Vhost与**SourceExchange**所属Vhost一致，即在**VirtualHost**中。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DemoQueue',
          ),
        ),
        4 => 
        array (
          'name' => 'BindingKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '绑定键。

- 绑定源Exchange为非Topic类型：

    - 只能包含字母、数字、短划线（-）、下划线（_）、半角句号（.）、正斜线（/）、at符号（@）。

    - 长度限制1~255字符。

- 绑定源Exchange为Topic类型：

    - 可以包含字母、数字、短划线（-）、下划线（_）、星号（*）、半角句号（.）、井号（#）、正斜线（/）、at符号（@）。

    - 不能以半角句号（.）开头或结尾。对于井号（#）或星号（*），如果以其开头，则其后需有半角句号（.），如果以其结尾，则其前需有半角句号（.），如果既不是开头也不是结尾，则其前后均需有半角句号（.）。

    - 长度限制1~255字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '.test',
          ),
        ),
        5 => 
        array (
          'name' => 'BindingType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '绑定目标对象的类型。取值：

- **0：**Queue

- **1：**Exchange	
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'Argument',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设置消息头属性键值对信息，消息头属性使用一个或多个键值对拼接而成。x-match属性必须配置，其余属性可自定义。x-match属性取值如下：

- **all：**默认值，所有消息头的键值对必须匹配。

- **any：**至少一对消息头的键值对必须匹配。

属性之间使用半角分号（;）隔开，属性键与值之间使用半角冒号（:）区分。例如x-match:all;type:report;format:pdf
该参数适用于Headers Exchange，对其它类型的Exchange无效。其它类型的Exchange，此处可以填任意值。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'x-match:all;type:report;format:pdf ',
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
                'example' => '09768C14-E51C-4F4A-8077-30810032C***',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"09768C14-E51C-4F4A-8077-30810032C***\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateBindingResponse>\\n    <RequestId>09768C14-E51C-4F4A-8077-30810032C***</RequestId>\\n</CreateBindingResponse>","errorExample":""}]',
      'title' => '创建绑定',
      'summary' => 'Producer将消息发送到Exchange，Exchange根据创建的绑定关系以及路由规则选择将消息路由到指定的Queue或其他Exchange中。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteBinding' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amqp-cn-v0h1kb9nu***',
          ),
        ),
        1 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Vhost名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceExchange',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '源Exchange名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'NormalEX',
          ),
        ),
        3 => 
        array (
          'name' => 'DestinationName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '解绑目标对象的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DemoQueue',
          ),
        ),
        4 => 
        array (
          'name' => 'BindingType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '解绑目标对象的类型。取值：

- **QUEUE**

- **EXCHANGE**',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'QUEUE',
          ),
        ),
        5 => 
        array (
          'name' => 'BindingKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '绑定键。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '.test.',
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
                'example' => '021788F6-E50C-4BD6-9F80-66B0A19A6***',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"021788F6-E50C-4BD6-9F80-66B0A19A6***\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteBindingResponse>\\n    <RequestId>021788F6-E50C-4BD6-9F80-66B0A19A6***</RequestId>\\n</DeleteBindingResponse>","errorExample":""}]',
      'title' => '删除绑定',
      'summary' => '调用DeleteBinding解除源Exchange与目标Queue或者其他Exchange的绑定关系。',
    ),
    'ListBindings' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 RabbitMQ 版实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1880770869023***',
          ),
        ),
        1 => 
        array (
          'name' => 'VirtualHost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Vhost名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Test',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前查询结束的位置，以便下一次调用时作为参数传入，继续翻页。首次调用和当返回最后一页时，取值为空字符串。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
            'minLength' => 1,
            'default' => '',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '本次读取的最大数据记录数量。取值：

**1~100**

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '1',
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
                'example' => 'E0A71208-3E87-4732-81CC-B18E0B4B1***',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'MaxResults' => 
                  array (
                    'description' => '本次请求所返回的最大记录条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'NextToken' => 
                  array (
                    'description' => '表示当前调用返回读取到的位置，空代表数据已经读取完毕。',
                    'type' => 'string',
                    'example' => 'caebacccb2be03f84eb48b699f0a****',
                  ),
                  'Bindings' => 
                  array (
                    'description' => '绑定关系列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SourceExchange' => 
                        array (
                          'description' => '源Exchange名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Argument' => 
                        array (
                          'description' => 'x-match属性。取值：

- **all**：默认值，所有消息头的键值对必须匹配。

- **any**：至少一对消息头的键值对必须匹配。

该参数仅适用于Headers类型的Exchange。',
                          'type' => 'string',
                          'example' => 'all',
                        ),
                        'BindingKey' => 
                        array (
                          'description' => '绑定键。

- 绑定源Exchange为非Topic类型：

    - 只能包含字母、数字、短划线（-）、下划线（_）、半角句号（.）、正斜线（/）、at符号（@）。

    - 长度限制1~255字符。

- 绑定源Exchange为Topic类型：

    - 可以包含字母、数字、短划线（-）、下划线（_）、星号（*）、半角句号（.）、井号（#）、正斜线（/）、at符号（@）。

    - 不能以半角句号（.）开头或结尾。对于井号（#）或星号（*），如果以其开头，则其后需有半角句号（.），如果以其结尾，则其前需有半角句号（.），如果既不是开头也不是结尾，则其前后均需有半角句号（.）。

    - 长度限制1~255字符。',
                          'type' => 'string',
                          'example' => 'amq.test',
                        ),
                        'BindingType' => 
                        array (
                          'description' => '绑定目标对象的类型。取值：

- **QUEUE**

- **EXCHANGE**',
                          'type' => 'string',
                          'example' => 'QUEUE',
                        ),
                        'DestinationName' => 
                        array (
                          'description' => '绑定目标名称。',
                          'type' => 'string',
                          'example' => 'QueueTest',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E0A71208-3E87-4732-81CC-B18E0B4B1***\\",\\n  \\"Data\\": {\\n    \\"MaxResults\\": 1,\\n    \\"NextToken\\": \\"caebacccb2be03f84eb48b699f0a****\\",\\n    \\"Bindings\\": [\\n      {\\n        \\"SourceExchange\\": \\"test\\",\\n        \\"Argument\\": \\"all\\",\\n        \\"BindingKey\\": \\"amq.test\\",\\n        \\"BindingType\\": \\"QUEUE\\",\\n        \\"DestinationName\\": \\"QueueTest\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListBindingsResponse>\\n    <RequestId>E0A71208-3E87-4732-81CC-B18E0B4B1***</RequestId>\\n    <Data>\\n        <NextToken>,</NextToken>\\n        <MaxResults>1</MaxResults>\\n        <Bindings>\\n            <SourceExchange>test</SourceExchange>\\n            <Argument>all</Argument>\\n            <BindingType>QUEUE</BindingType>\\n            <BindingKey>amq.test</BindingKey>\\n            <DestinationName>QueueTest</DestinationName>\\n        </Bindings>\\n    </Data>\\n</ListBindingsResponse>","errorExample":""}]',
      'title' => '查询绑定',
      'summary' => '查询指定云消息队列 RabbitMQ 版实例下某一Vhost内所有创建的绑定关系。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAccount' => 
    array (
      'summary' => '开源客户端访问云消息队列 RabbitMQ 版服务端时，需要传入用户名和密码进行权限认证，认证通过才允许访问服务端。云消息队列 RabbitMQ 版支持通过阿里云访问控制（RAM）的AccessKey和AccessKey Secret生成用户名和密码。',
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
          'name' => 'instanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息队列RabbitMQ版实例的ID，表示您需要为哪个实例创建静态用户名密码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'amqp-cn-*********',
          ),
        ),
        1 => 
        array (
          'name' => 'accountAccessKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您的阿里云账号或RAM用户的AccessKey ID。获取方式，请参见[创建AccessKey](~~116401~~)。

> 如果您使用RAM用户的AccessKey创建的静态用户名密码接入消息队列RabbitMQ版并收发消息，请确保该RAM用户已被授予收发消息权限。更多信息，请参见[RAM权限策略](~~146559~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'LTAI5t8be*******tEJ6vfo',
          ),
        ),
        2 => 
        array (
          'name' => 'userName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待创建的静态用户名。

该参数值由实例ID和AccessKey ID构造的字符串经过Base64编码得出，具体计算方法，请参见本文中的**用户名计算示例代码**。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'LTAI5***********eRZtEJ6vfo',
          ),
        ),
        3 => 
        array (
          'name' => 'signature',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '签名，系统将根据请求参数中的签名、AccessKey Secret签名和用户名计算出静态用户密码。

签名由指定的用户名创建时间戳和AccessKey ID进行HmacSHA1加密算法计算得出。具体计算方法，请参见本文中的**签名算法示例代码**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '22c2d7d1769cb53c5a6d9213248e2de524******',
          ),
        ),
        4 => 
        array (
          'name' => 'createTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定该用户名密码创建的时间戳。单位：毫秒。

> 该时间戳用于计算静态用户密码，由您自定义设置。不是系统生成用户名密码时的时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1671175303522',
          ),
        ),
        5 => 
        array (
          'name' => 'secretSign',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AccessKey Secret签名，系统将根据请求参数中的签名、AccessKey Secret签名和用户名计算出静态用户密码。

AccessKey Secret签名由指定的用户名创建时间戳和AccessKey ID进行HmacSHA1加密算法计算得出。具体计算方法，请参见本文中的**签名算法示例代码**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4c1a6367ce4c4255e9617326f9133ac635******',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                ),
                'example' => 'FEBA5E0C-50D0-4FA6-A794-4901E5465***',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '执行结果是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessKey' => 
                  array (
                    'description' => '创建该用户名密码所使用的AccessKey ID。',
                    'type' => 'string',
                    'example' => 'LTAI5***********eRZtEJ6vfo',
                  ),
                  'Password' => 
                  array (
                    'description' => '创建的静态用户密码。',
                    'type' => 'string',
                    'example' => 'OUYwQzM2QjZBRkUxNDRFM***************MzZCNzdDQzoxNjcxNDMwMzkyODI1',
                  ),
                  'CreateTimeStamp' => 
                  array (
                    'description' => '创建用户名密码的时间戳。单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1671175303522',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '消息队列RabbitMQ版实例的ID。',
                    'type' => 'string',
                    'example' => 'amqp-cn-*********',
                  ),
                  'MasterUId' => 
                  array (
                    'description' => '创建静态用户名密码的AccessKey所属的阿里云账号或RAM用户的账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1565*******973901',
                  ),
                  'UserName' => 
                  array (
                    'description' => '创建的静态用户名。',
                    'type' => 'string',
                    'example' => 'MjphbXFwLWNuLXVxbTJ6cjc2djAwMzpMVEFJNX*******ZNMWVSWnRFSjZ2Zm8=',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FEBA5E0C-50D0-4FA6-A794-4901E5465***\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AccessKey\\": \\"LTAI5***********eRZtEJ6vfo\\",\\n    \\"Password\\": \\"OUYwQzM2QjZBRkUxNDRFM***************MzZCNzdDQzoxNjcxNDMwMzkyODI1\\",\\n    \\"CreateTimeStamp\\": 1671175303522,\\n    \\"InstanceId\\": \\"amqp-cn-*********\\",\\n    \\"MasterUId\\": 0,\\n    \\"UserName\\": \\"MjphbXFwLWNuLXVxbTJ6cjc2djAwMzpMVEFJNX*******ZNMWVSWnRFSjZ2Zm8=\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateAccountResponse>\\n    <RequestId>FEBA5E0C-50D0-4FA6-A794-4901E5465***</RequestId>\\n    <Code>200</Code>\\n    <Message>operation success</Message>\\n    <Success>true</Success>\\n    <Data>\\n        <AccessKey>LTAI5***********eRZtEJ6vfo</AccessKey>\\n        <Password>OUYwQzM2QjZBRkUxNDRFM***************MzZCNzdDQzoxNjcxNDMwMzkyODI1</Password>\\n        <CreateTimeStamp>1671175303522</CreateTimeStamp>\\n        <InstanceId>amqp-cn-*********</InstanceId>\\n        <UserName>MjphbXFwLWNuLXVxbTJ6cjc2djAwMzpMVEFJNX*******ZNMWVSWnRFSjZ2Zm8=</UserName>\\n    </Data>\\n</CreateAccountResponse>","errorExample":""}]',
      'title' => '创建用户名密码',
      'description' => '### 背景信息
开源客户端访问云消息队列 RabbitMQ 版服务端时，需要传入用户名和密码进行权限认证，认证通过才允许访问服务端。
云消息队列 RabbitMQ 版支持通过阿里云访问控制（RAM）的AccessKey和AccessKey Secret生成用户名和密码。
### 注意事项
- 创建静态用户名密码所属的实例需处于服务中状态。
- 一个实例下的AccessKey和静态用户名密码一一对应，即一个实例下的一个AccessKey只能创建一个静态用户名密码。
- 如果需要更新静态用户名密码，您可以删除该静态用户名密码后重新创建。
### 用户名计算示例代码
请求参数中的userName的参数值，需要由实例ID和AccessKey ID构造字符串并进行Base64编码得出。具体的计算方法如下：
```
    public class Base64Utils {
         public static final Charset UTF8 = Charset.forName("UTF-8");
         /\\*\\*
         *解码base64字符串
         \\* @param str
         \\* @return
         \\*/
         public static String decode(String str) {
              return new String(Base64.getDecoder().decode(str.getBytes(UTF8)), UTF8);
         }
         /\\*\\*
         *编码为base64字符串
         \\* @param bytes = "2" + ":" + "{instanceId}" + ":" + "{ak}"
         \\* @return
         \\*/
         public static String encode(String bytes) {
              return new String(Base64.getEncoder().encode(bytes.getBytes(UTF8)), UTF8);
          }

         public static void main(String[] args) {
              String example = "this is a example";
              System.out.println(encode(example));
              System.out.println(decode(encode(example)));

        }
    }
```

### 签名算法示例代码
请求参数中signature和secretSign的参数值，需要由指定的静态用户名的创建时间戳和AccessKey ID进行加密算法计算得出。具体的算法和示例代码如下：
```
public static String hamcsha1(byte[] data, byte[] key) throws NoSuchAlgorithmException, InvalidKeyException {
        SecretKeySpec signingKey = new SecretKeySpec(key, "HmacSHA1");
        Mac mac = Mac.getInstance("HmacSHA1");
        mac.init(signingKey);
        return byte2hex(mac.doFinal(data));
    }

    public static String byte2hex(byte[] b) {
        StringBuilder hs = new StringBuilder();
        String stmp;
        for (int n = 0; b != null && n < b.length; n++) {
            stmp = Integer.toHexString(b[n] & 0XFF);
            if (stmp.length() == 1) {
                hs.append(\'0\');
            }
            hs.append(stmp);
       } 
       return hs.toString().toUpperCase();
    }
     // value1是用户名创建时间戳、value2是AccessKey ID，这样计算出来的是SecretSign，反之则是signature。
     public static void main(String[] args) throws InvalidKeyException, NoSuchAlgorithmException {
         String value1 = "XXX";
         String value2 = "XXX";
         System.out.println(hamcsha1(value1.getBytes(), value2.getBytes()));
     }
```',
      'extraInfo' => '### 控制台操作
除了调用**CreateAccount**接口，您还可以通过云消息队列 RabbitMQ 版控制台创建静态用户名密码。具体操作，请参见[静态用户名密码管理](~~184399~~)。',
    ),
    'DeleteAccount' => 
    array (
      'summary' => '删除用户名密码。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的静态用户名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MjphbXFwLWNuLXVxbTJ6cjc2djAwMzpMVEFJNX*******ZNMWVSWnRFSjZ2Zm8=',
          ),
        ),
        1 => 
        array (
          'name' => 'CreateTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的静态用户名密码的创建时间戳。单位：毫秒。

您可以调用[ListAccounts](~~472730~~)接口查看。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1671175303522',
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
                'example' => '021788F6-E50C-4BD6-9F80-66B0A1******',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '执行结果是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"021788F6-E50C-4BD6-9F80-66B0A1******\\",\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"operation success\\",\\n  \\"Data\\": true,\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteAccountResponse>\\n    <RequestId>021788F6-E50C-4BD6-9F80-66B0A1******</RequestId>\\n    <Code>200</Code>\\n    <Message>operation success</Message>\\n    <Data>true</Data>\\n    <Success>true</Success>\\n</DeleteAccountResponse>","errorExample":""}]',
      'title' => '删除用户名密码',
    ),
    'ListAccounts' => 
    array (
      'summary' => '查看指定云消息队列 RabbitMQ 版实例的用户名密码。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 RabbitMQ 版实例的ID，表示您需要查询哪个实例下的静态用户名密码。',
            'type' => 'string',
            'required' => false,
            'example' => 'amqp-cn-20p****04',
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
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '549A5A97-FE61-5A23-8126-3A1192*****',
              ),
              'Success' => 
              array (
                'description' => '执行结果是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'masterUid' => 
                      array (
                        'type' => 'integer',
                        'format' => 'int64',
                        'description' => '创建静态用户名密码的AccessKey所属的阿里云账号或RAM用户的账号ID。',
                        'example' => '1565*******973901',
                      ),
                      'cInstanceId' => 
                      array (
                        'type' => 'string',
                        'description' => '云消息队列 RabbitMQ 版实例的ID。',
                        'example' => 'amqp-cn-uqm******03',
                      ),
                      'accessKey' => 
                      array (
                        'type' => 'string',
                        'description' => '创建静态用户名密码所使用的AccessKey ID。',
                        'example' => 'LTAI5***********eRZtEJ6vfo',
                      ),
                      'userName' => 
                      array (
                        'type' => 'string',
                        'example' => 'MjphbXFwLWNuLXVxbTJ6cjc2djAwMzpMVEFJNX*******ZNMWVSWnRFSjZ2Zm8=',
                        'description' => '静态用户名。',
                      ),
                      'password' => 
                      array (
                        'type' => 'string',
                        'example' => 'OUYwQzM2QjZBRkUxNDRFM***************MzZCNzdDQzoxNjcxNDMwMzkyODI1',
                        'description' => '静态用户密码。',
                      ),
                      'deleted' => 
                      array (
                        'type' => 'integer',
                        'format' => 'int64',
                        'description' => '静态用户名密码的删除时间戳。单位：毫秒。',
                        'example' => '0',
                      ),
                      'createTimestamp' => 
                      array (
                        'type' => 'integer',
                        'format' => 'int64',
                        'description' => '静态用户名密码的创建时间戳。单位：毫秒。',
                        'example' => '1671175303522',
                      ),
                    ),
                    'description' => 'object',
                  ),
                  'description' => '结果集。',
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"549A5A97-FE61-5A23-8126-3A1192*****\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"key\\": [\\n      {\\n        \\"masterUid\\": 0,\\n        \\"cInstanceId\\": \\"amqp-cn-uqm******03\\",\\n        \\"accessKey\\": \\"LTAI5***********eRZtEJ6vfo\\",\\n        \\"userName\\": \\"MjphbXFwLWNuLXVxbTJ6cjc2djAwMzpMVEFJNX*******ZNMWVSWnRFSjZ2Zm8=\\",\\n        \\"password\\": \\"OUYwQzM2QjZBRkUxNDRFM***************MzZCNzdDQzoxNjcxNDMwMzkyODI1\\",\\n        \\"deleted\\": 0,\\n        \\"createTimestamp\\": 1671175303522\\n      }\\n    ]\\n  },\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"operation success\\"\\n}","errorExample":""},{"type":"xml","example":"<ListAccountsResponse>\\n    <RequestId>549A5A97-FE61-5A23-8126-3A1192*****</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <cInstanceId>amqp-cn-uqm******03</cInstanceId>\\n        <accessKey>LTAI5***********eRZtEJ6vfo</accessKey>\\n        <userName>MjphbXFwLWNuLXVxbTJ6cjc2djAwMzpMVEFJNX*******ZNMWVSWnRFSjZ2Zm8=</userName>\\n        <password>OUYwQzM2QjZBRkUxNDRFM***************MzZCNzdDQzoxNjcxNDMwMzkyODI1</password>\\n        <deleted>0</deleted>\\n        <createTimestamp>1671175303522</createTimestamp>\\n    </Data>\\n    <Code>200</Code>\\n    <Message>operation success</Message>\\n</ListAccountsResponse>","errorExample":""}]',
      'title' => '查看用户名密码',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'amqp-open.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'amqp-open.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'amqp-open.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhengzhou-jva',
      'endpoint' => 'amqp-open.cn-zhengzhou-jva.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'amqp-open.cn-huhehaote.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'amqp-open.cn-wulanchabu.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'amqp-open.cn-hangzhou.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'amqp-open.cn-shanghai.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'amqp-open.cn-shenzhen.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'amqp-open.cn-guangzhou.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'amqp-open.cn-chengdu.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'amqp-open.cn-hongkong.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'amqp-open.ap-northeast-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'amqp-open.ap-southeast-1.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'amqp-open.ap-southeast-2.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'amqp-open.ap-southeast-3.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'amqp-open.ap-southeast-5.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'amqp-open.ap-southeast-6.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'amqp-open.us-east-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'amqp-open.us-west-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'amqp-open.eu-central-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'amqp-open.ap-south-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'amqp-open.cn-shanghai-finance-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'amqp-open.ap-southeast-7.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'amqp-open.cn-beijing-finance-1.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'me-central-1',
      'endpoint' => 'amqp-open.me-central-1.aliyuncs.com',
    ),
  ),
);
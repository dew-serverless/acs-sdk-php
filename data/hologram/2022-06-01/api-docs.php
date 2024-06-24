<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'Hologram',
    'version' => '2022-06-01',
  ),
  'directories' => 
  array (
    0 => 'CreateInstance',
    1 => 'DeleteInstance',
    2 => 'RenewInstance',
    3 => 'RestartInstance',
    4 => 'ResumeInstance',
    5 => 'UpdateInstanceName',
    6 => 'UpdateInstanceNetworkType',
    7 => 'StopInstance',
    8 => 'ScaleInstance',
    9 => 'ListInstances',
    10 => 'GetInstance',
    11 => 'GetWarehouseDetail',
    12 => 'ListWarehouses',
    13 => 'DisableHiveAccess',
    14 => 'EnableHiveAccess',
    15 => 'ChangeResourceGroup',
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
      'summary' => '该接口用于创建Hologres实例。',
      'path' => '/api/v1/instances/create',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'regionId' => 
              array (
                'description' => '地域Id. 可前往[API门户](https://api.aliyun.com/product/Hologram)或“使用说明”查看。',
                'type' => 'string',
                'required' => true,
                'example' => 'cn-hangzhou',
              ),
              'zoneId' => 
              array (
                'description' => '可用区Id。参考“使用说明“',
                'type' => 'string',
                'required' => true,
                'example' => 'cn-hangzhou-h',
              ),
              'vpcId' => 
              array (
                'description' => '虚拟专有网络，其所在regionId必须与实例一致。',
                'type' => 'string',
                'required' => true,
                'example' => 'vpc-t4netc3y5xxxx',
              ),
              'vSwitchId' => 
              array (
                'description' => '虚拟专有交换机，其所在zoneId必须与实例一致。',
                'type' => 'string',
                'required' => true,
                'example' => 'vsw-2vccsiymtxxxxxx',
              ),
              'resourceGroupId' => 
              array (
                'description' => '资源组。若为空，则为账号默认资源组。',
                'type' => 'string',
                'required' => false,
                'example' => '""',
              ),
              'instanceName' => 
              array (
                'description' => '实例名称(2-64个字符，一个中文/字母算一个字符)。',
                'type' => 'string',
                'required' => true,
                'example' => 'my_holo',
              ),
              'instanceType' => 
              array (
                'description' => '实例类型。取值：
- Standard：通用型。
- Follower：只读从实例。
- Warehouse：计算组型。
- Shared：共享型。',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'Warehouse' => 'Warehouse',
                  'Follower' => 'Follower',
                  'Standard' => 'Standard',
                  'Shared' => 'Shared',
                ),
                'example' => 'Standard',
                'enum' => 
                array (
                  0 => 'Standard',
                  1 => 'Follower',
                  2 => 'Warehouse',
                  3 => 'Shared',
                ),
              ),
              'cpu' => 
              array (
                'description' => '实例规格。取值：
- 8核32 GB （计算节点数量：1）
- 16核64 GB（计算节点数量：1）
- 32核128 GB（计算节点数量：2）
- 64核256 GB（计算节点数量：4）
- 96核384 GB（计算节点数量：6）
- 128核512 GB（计算节点数量：8）
- 等

>
 >- 填写核数即可。
 >- 购买1024以上规格实例请提交工单申请。
 >- Shared实例类型无需指定规格。
 >- 8核32GB（计算节点数量：1）的规格仅用于体验使用，不可用于生产。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '64',
              ),
              'storageSize' => 
              array (
                'description' => '实例标准存储空间。单位：GB。
> 按量付费实例（PostPaid）会忽略此参数。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '500',
              ),
              'coldStorageSize' => 
              array (
                'description' => '实例低频存储空间。单位：GB。
> 按量付费（PostPaid）实例会忽略此参数。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '500',
              ),
              'gatewayCount' => 
              array (
                'description' => '网关数量，取值[2, 50]。

> 只有Warehouse类型需要指定该参数。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'maximum' => '50',
                'minimum' => '2',
                'example' => '4',
              ),
              'chargeType' => 
              array (
                'description' => '付费类型。取值：
- PrePaid：包年包月。
- PostPaid: 按量付费。
> Shared实例类型会忽略该参数。Shared是一种固定规格类型，收费类型默认为PostPaid。',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'PostPaid' => 'PostPaid',
                  'PrePaid' => 'PrePaid',
                ),
                'example' => 'PostPaid',
                'enum' => 
                array (
                  0 => 'PrePaid',
                  1 => 'PostPaid',
                ),
              ),
              'autoPay' => 
              array (
                'description' => '是否自动支付，默认为true。取值：
- true：自动支付。
- false：只生成订单，不支付。
> 默认值为true。如果您的支付方式余额不足，可以将参数AutoPay设置为false，此时会生成未支付订单，您可以登录用户中心自行支付。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'pricingCycle' => 
              array (
                'description' => '计费周期。取值：
- Month：按月计费。
- Hour：按小时计费。
>
> - PrePaid 只支持Month
> - PostPaid 只支持Hour
> - Shared类型自动设为Hour，无需指定。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'Month' => 'Month',
                  'Hour' => 'Hour',
                ),
                'example' => 'Month',
                'enum' => 
                array (
                  0 => 'Month',
                  1 => 'Hour',
                ),
              ),
              'duration' => 
              array (
                'description' => '购买周期。比如购买2个月。
> 若付费类型为PostPaid，则无需指定。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '2',
              ),
              'autoRenew' => 
              array (
                'description' => '是否开启按月自动续费，默认值为false。取值：
- true：开启。
- false：不开启。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'false',
              ),
              'leaderInstanceId' => 
              array (
                'description' => '主实例Id，Follower类型必填。

> 主从实例必须满足以下条件：
> - 主实例"运行正常"(Running)状态
> - 主从实例regionId一致
> - 主从实例zoneId一致
> - 主实例已绑定的从实例数少于10个
> - 主从实例属于同一个主账号',
                'type' => 'string',
                'required' => false,
                'example' => 'hgpostcn-cn-lbj3aworq112',
              ),
              'initialDatabases' => 
              array (
                'description' => '初始数据库。',
                'type' => 'string',
                'required' => false,
                'example' => 'chatbot',
              ),
              'enableServerlessComputing' => 
              array (
                'type' => 'boolean',
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
            'title' => 'Schema of Response',
            'description' => '返回参数详情。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9CC37B9F-F4B4-5FF1-939B-AEE78DC70130',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'hgpostcn-cn-xxxxxx',
                  ),
                  'OrderId' => 
                  array (
                    'description' => '订单ID。',
                    'type' => 'string',
                    'example' => '217523224780172',
                  ),
                  'Code' => 
                  array (
                    'description' => '错误码。',
                    'type' => 'string',
                    'example' => 'InvalidVpcOrVSwitch.NotAvailable',
                  ),
                  'Message' => 
                  array (
                    'description' => '错误详细信息。',
                    'type' => 'string',
                    'example' => '专有网络或交换机不可用',
                  ),
                  'Success' => 
                  array (
                    'description' => '创建是否成功。  
- true：创建成功。
- false：创建失败。',
                    'type' => 'string',
                    'example' => 'true',
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9CC37B9F-F4B4-5FF1-939B-AEE78DC70130\\",\\n  \\"Data\\": {\\n    \\"InstanceId\\": \\"hgpostcn-cn-xxxxxx\\",\\n    \\"OrderId\\": \\"217523224780172\\",\\n    \\"Code\\": \\"InvalidVpcOrVSwitch.NotAvailable\\",\\n    \\"Message\\": \\"专有网络或交换机不可用\\",\\n    \\"Success\\": \\"true\\"\\n  },\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"ErrorMessage\\": \\"null\\",\\n  \\"ErrorCode\\": \\"null\\"\\n}","type":"json"}]',
      'title' => '创建实例',
      'description' => '><warning>该API操作涉及费用，请确保在使用该接口前，已充分了解实时数仓Hologres的收费方式和价格。></warning>

<props="china">- Hologres计费详情请参见[计费概述](https://help.aliyun.com/zh/hologres/product-overview/billing-overview?spm=a2c4g.11186623.0.i4)。</props>

<props="intl"> - Hologres计费详情请参见[计费概述](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview)。</props>

- 创建Hologres实例时，您需要指定实例所在地域和可用区。一个地域可能对应多个可用区，具体如下：
 ```
    cn-hangzhou(杭州)：cn-hangzhou-h, cn-hangzhou-j
    cn-shanghai(上海): cn-shanghai-e, cn-shanghai-f
    cn-beijing(北京): cn-beijing-i, cn-beijing-g
    cn-zhangjiakou(张家口): cn-zhangjiakou-b
    cn-shenzhen(深圳): cn-shenzhen-e
    cn-hongkong(香港): cn-hongkong-b
    cn-shanghai-finance-1(上海金融云): cn-shanghai-finance-1z
    ap-northeast-1(日本): ap-northeast-1a
    ap-southeast-1(新加坡): ap-southeast-1c
    ap-southeast-3(吉隆坡): ap-southeast-3b
    ap-southeast-5(雅加达): ap-southeast-5b
    ap-south-1(孟买): ap-south-1b
    eu-central-1(法兰克福): eu-central-1a
    us-east-1(硅谷): us-east-1a
    us-west-1(弗吉尼亚): us-west-1b
```',
      'responseParamsDescription' => '> 
> - 参数校验错误，仍然会返回正常的Data，Success为false，并包含Code和Message。除非抛出异常，否则成功与否由Data.Success来判断。
> - 使用新版SDK包调用本接口时，由于SDK内部的客户端默认超时时间和服务端的不一致，因此可能返回请求超时的错误，但实际上接口已调用成功。如需避免这个问题，您可以在调用前设置ReadTimeout参数为20000。

![](https://img.alicdn.com/imgextra/i3/O1CN01oJaSr21h8lPAvhlSd_!!6000000004233-0-tps-2042-492.jpg)',
    ),
    'DeleteInstance' => 
    array (
      'summary' => '该接口用于释放Hologres实例。',
      'path' => '/api/v1/instances/{instanceId}/delete',
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
      'operationType' => 'read',
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
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id',
            'type' => 'string',
            'required' => false,
            'example' => 'hgpostcn-cn-7mz2vmu30003',
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
                'example' => 'CB13FFDD-2DF8-5396-A848-2D6A31245B6D',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => '成功',
                  'false' => '失败',
                ),
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '调用是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http 状态码',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CB13FFDD-2DF8-5396-A848-2D6A31245B6D\\",\\n  \\"Data\\": true,\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMessage\\": \\"null\\",\\n  \\"HttpStatusCode\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '删除实例',
      'description' => '><warning>使用该接口前，请仔细阅读功能文档，确保完全了解使用接口的前提条件及使用后造成的影响后，再进行操作。></warning>

<props="china">- Hologres实例释放后，实例内的数据和对象均不可恢复，请谨慎操作。详情请参见[计费概述](https://help.aliyun.com/zh/hologres/product-overview/billing-overview?spm=a2c4g.11186623.0.0.7d413e94YMVcqe)。</props>
<props="intl">- Hologres实例释放后，实例内的数据和对象均不可恢复，请谨慎操作。详情请参见[计费概述](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview?spm=a2c63.p38356.0.0.efc33b87i5pDl7)。</props>
- 仅支持释放按量付费（PostPaid）实例。

<props="china">- 如果您需要退订包年包月（PrePaid）实例，请在阿里云退订管理页面操作，详情请参见[退订包年包月实例](https://help.aliyun.com/zh/hologres/product-overview/subscription?spm=a2c4g.11186623.0.0.799b69ecPba0y1)。</props>',
    ),
    'RenewInstance' => 
    array (
      'summary' => '该接口用于为Hologres实例手动续费。可以在续费的同时开启按月自动续费。',
      'path' => '/api/v1/instances/{instanceId}/renew',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'hgprecn-cn-i7m2v08uu00a',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'duration' => 
              array (
                'description' => '续费周期。单位：月。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => true,
                'example' => '2',
              ),
              'autoRenew' => 
              array (
                'description' => '是否开启按月自动续费，默认不开启。取值：
- true：开启。
- false：不开启

> 已开启自动续费的实例，再次开启会报错。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
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
                'example' => 'D3AE84AB-0873-5FC7-A4C4-8CF869D2FA70',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Code' => 
                  array (
                    'description' => '错误码。',
                    'type' => 'string',
                    'example' => 'InvalidChargeType.UnRenewable',
                  ),
                  'Message' => 
                  array (
                    'description' => '错误详细信息。',
                    'type' => 'string',
                    'example' => '不支持续费的付费类型',
                  ),
                  'OrderId' => 
                  array (
                    'description' => '订单Id',
                    'type' => 'string',
                    'example' => '221625608580893',
                  ),
                  'Success' => 
                  array (
                    'description' => '续费是否成功。  
- true：续费成功。
- false：续费失败。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '请求结果，表示此次请求是否发生异常，和业务无关',
                'type' => 'string',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D3AE84AB-0873-5FC7-A4C4-8CF869D2FA70\\",\\n  \\"Data\\": {\\n    \\"Code\\": \\"InvalidChargeType.UnRenewable\\",\\n    \\"Message\\": \\"不支持续费的付费类型\\",\\n    \\"OrderId\\": \\"221625608580893\\",\\n    \\"Success\\": true\\n  },\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMessage\\": \\"null\\",\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"Success\\": \\"false\\"\\n}","type":"json"}]',
      'title' => '实例续费',
      'description' => '><warning>该API操作涉及费用，请确保在使用该接口前，已充分了解实时数仓Hologres的收费方式和价格。></warning>
<props="china">- Hologres计费详情请参见[计费概述](https://help.aliyun.com/zh/hologres/product-overview/billing-overview?spm=a2c4g.11186623.0.i4)。</props>
<props="intl">- Hologres计费详情请参见[计费概述](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview)。</props>
<props="china">- Hologres续费操作请参见[续费管理](https://help.aliyun.com/zh/hologres/product-overview/manage-renewals?spm=a2c4g.11186623.0.0.6b776c2eJ1h2vx)。</props>
<props="intl">- Hologres续费操作请参见[续费管理](https://www.alibabacloud.com/help/zh/hologres/product-overview/manage-renewals?spm=a2c63.p38356.0.0.38e731c9VAwtDP)。</props>
- 续费操作仅适用预付费（PrePaid）实例。',
      'responseParamsDescription' => '>
> - 参数校验错误，仍然会返回正常的Data，Success为false，并包含Code和Message。除非抛出异常，否则成功与否由Data.Success来判断。
> - 使用新版SDK包调用本接口时，由于SDK内部的客户端默认超时时间和服务端的不一致，因此可能返回请求超时的错误，但实际上接口已调用成功。如需避免这个问题，您可以在调用前设置ReadTimeout参数为20000。

![](https://img.alicdn.com/imgextra/i3/O1CN01oJaSr21h8lPAvhlSd_!!6000000004233-0-tps-2042-492.jpg)',
    ),
    'RestartInstance' => 
    array (
      'summary' => '重启实例。',
      'path' => '/api/v1/instances/{instanceId}/restart',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => false,
            'example' => 'hgprecn-cn-i7m2ucpyu005',
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
                'example' => '36291497-CDB0-53DC-8CD7-762E054F57A6',
              ),
              'Data' => 
              array (
                'description' => '操作是否成功。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => '成功',
                  'false' => '失败',
                ),
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '请求结果，表示此次请求是否发生异常，和业务无关',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"36291497-CDB0-53DC-8CD7-762E054F57A6\\",\\n  \\"Data\\": true,\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMessage\\": \\"null\\",\\n  \\"HttpStatusCode\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '重启实例',
    ),
    'ResumeInstance' => 
    array (
      'summary' => '恢复暂停的实例。',
      'path' => '/api/v1/instances/{instanceId}/resume',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => false,
            'example' => 'hgpostcn-cn-j672yny9g001',
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
                'example' => 'D3AE84AB-0873-5FC7-A4C4-8CF869D2FA70',
              ),
              'Data' => 
              array (
                'description' => '返回结果,表示操作是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '请求结果，表示此次请求是否发生异常，和业务无关',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D3AE84AB-0873-5FC7-A4C4-8CF869D2FA70\\",\\n  \\"Data\\": true,\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMessage\\": \\"null\\",\\n  \\"HttpStatusCode\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '恢复实例',
    ),
    'UpdateInstanceName' => 
    array (
      'summary' => '修改实例名称。',
      'path' => '/api/v1/instances/{instanceId}/instanceName',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => false,
            'example' => 'hgpostcn-cn-zpr30pupt004',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'instanceName' => 
              array (
                'description' => '新实例名称(2-64个字符，一个中文/字母算一个字符)。',
                'type' => 'string',
                'required' => false,
                'example' => 'new_name',
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
                'example' => 'C6B55032-D41A-5FE0-9C07-8BD81C88422E',
              ),
              'Data' => 
              array (
                'description' => '返回结果,表示操作是否成功。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => '成功',
                  'false' => '失败',
                ),
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '请求结果，表示此次请求是否发生异常。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => '成功',
                  'false' => '失败',
                ),
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C6B55032-D41A-5FE0-9C07-8BD81C88422E\\",\\n  \\"Data\\": true,\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMessage\\": \\"null\\",\\n  \\"HttpStatusCode\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '修改实例名称',
    ),
    'UpdateInstanceNetworkType' => 
    array (
      'summary' => '修改实例网络。',
      'path' => '/api/v1/instances/{instanceId}/network',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => false,
            'example' => 'hgprecn-cn-lbj35pw74002',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'networkTypes' => 
              array (
                'description' => '希望开启的网络类型列表，已有网络类型的组合，顺序无关。
比如已经开启公网、内网和VPCSingleTunnel，如要关闭公网，
则把公网类型去掉即可，即传递 “Intranet, VPCSingleTunnel” 。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'VPCSingleTunnel' => '专有网络',
                  'Intranet' => '内网',
                  'VPCAnyTunnel' => '兼容性需求，新实例不支持，',
                  'Internet' => '公网',
                ),
                'example' => 'Internet,VPCSingleTunnel',
              ),
              'vpcId' => 
              array (
                'description' => 'VPC ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'vpc-t4netc3y5etlondfb5ra7',
              ),
              'vSwitchId' => 
              array (
                'description' => '虚拟交换机id',
                'type' => 'string',
                'required' => false,
                'example' => 'vsw-2vccsiymtqr9aavew0vo3',
              ),
              'vpcRegionId' => 
              array (
                'description' => 'vpc所属地域。',
                'type' => 'string',
                'required' => false,
                'example' => 'cn-hangzhou',
              ),
              'vpcOwnerId' => 
              array (
                'description' => 'vpc 的ownerId，即阿里云账号ID。',
                'type' => 'string',
                'required' => false,
                'example' => '1999365732646672',
              ),
              'anyTunnelToSingleTunnel' => 
              array (
                'description' => '是否从AnyTunnel转换成SingleTunnel（新实例无用，默认为null即可）',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'others/null' => '不转换',
                  'true' => '转换',
                ),
                'example' => 'true',
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
                'example' => '9CC37B9F-F4B4-5FF1-939B-AEE78DC70130',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'true' => '成功',
                  'false' => '失败',
                ),
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '请求结果。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => '成功',
                  'false' => '失败',
                ),
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9CC37B9F-F4B4-5FF1-939B-AEE78DC70130\\",\\n  \\"Data\\": \\"true\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMessage\\": \\"null\\",\\n  \\"HttpStatusCode\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '切换实例的网络类型',
    ),
    'StopInstance' => 
    array (
      'summary' => '暂停实例。',
      'path' => '/api/v1/instances/{instanceId}/stop',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => false,
            'example' => 'hgpostcn-cn-lbj33559x001',
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
                'example' => '2A8DEF6E-067E-5DB0-BAE1-2894266E6C6A',
              ),
              'Data' => 
              array (
                'description' => '返回结果,表示操作是否成功。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => '成功',
                  'false' => '失败',
                ),
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '请求结果，表示此次请求是否发生异常，和业务无关',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => '成功',
                  'false' => '失败',
                ),
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2A8DEF6E-067E-5DB0-BAE1-2894266E6C6A\\",\\n  \\"Data\\": true,\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMessage\\": \\"null\\",\\n  \\"HttpStatusCode\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '停止实例',
    ),
    'ScaleInstance' => 
    array (
      'summary' => '该接口用于变更Hologres实例的规格和存储空间。',
      'path' => '/api/v1/instances/{instanceId}/scale',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => true,
            'example' => 'hgprecn-cn-xxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'cpu' => 
              array (
                'description' => '实例规格。取值：
- 8核32 GB （计算节点数量：1）
- 16核64 GB （计算节点数量：1）
- 32核128 GB（计算节点数量：2）
- 64核256 GB（计算节点数量：4）
- 96核384 GB（计算节点数量：6）
- 128核512 GB（计算节点数量：8）
- 等

>
 >- 填写核数即可。
 >- 购买1024以上规格请提交工单申请。
 >- Shared实例类型无需指定规格。
 >- 8核32GB（计算节点数量：1）的规格仅用于体验使用，不可用于生产。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '128',
                'default' => '0',
              ),
              'storageSize' => 
              array (
                'description' => '实例标准存储空间。单位：GB。

> 按量付费（PostPaid）实例会忽略此参数',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1000G',
                'default' => '0',
              ),
              'coldStorageSize' => 
              array (
                'description' => '实例低频存储空间。单位：GB。

> 按量付费（PostPaid）实例会忽略此参数。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1000G',
                'default' => '0',
              ),
              'scaleType' => 
              array (
                'description' => '变配类型。取值：
- UPGRADE：升配
- DOWNGRADE：降配
> 
> - 升配规格不能小于原规格，为空的字段表示维持原规格不变，在此基础上，至少一项规格比原规格大。
> - 降配规格不能大于原规格，为空的字段表示维持原规格不变，在此基础上，至少一项规格比原规格小。',
                'type' => 'string',
                'required' => true,
                'enumValueTitles' => 
                array (
                  'DOWNGRADE' => 'DOWNGRADE',
                  'UPGRADE' => 'UPGRADE',
                ),
                'example' => 'UPGRADE',
                'enum' => 
                array (
                  0 => 'UPGRADE',
                  1 => 'DOWNGRADE',
                ),
              ),
              'gatewayCount' => 
              array (
                'description' => '网关数量，取值[2, 50]。

> 只有Warehouse类型需要指定该参数。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '4',
              ),
              'enableServerlessComputing' => 
              array (
                'type' => 'boolean',
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
                'example' => 'D3AE84AB-0873-5FC7-A4C4-8CF869D2FA70',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'OrderId' => 
                  array (
                    'description' => '订单Id',
                    'type' => 'string',
                    'example' => '219183853450000',
                  ),
                  'Code' => 
                  array (
                    'description' => '错误码。',
                    'type' => 'string',
                    'example' => 'InvalidScaleType.Unsupported',
                  ),
                  'Message' => 
                  array (
                    'description' => '错误详细信息。',
                    'type' => 'string',
                    'example' => '不支持的变配类型',
                  ),
                  'Success' => 
                  array (
                    'description' => '变配是否成功。',
                    'type' => 'boolean',
                    'enumValueTitles' => 
                    array (
                      'true' => '成功',
                      'false' => '失败',
                    ),
                    'example' => 'true',
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D3AE84AB-0873-5FC7-A4C4-8CF869D2FA70\\",\\n  \\"Data\\": {\\n    \\"OrderId\\": \\"219183853450000\\",\\n    \\"Code\\": \\"InvalidScaleType.Unsupported\\",\\n    \\"Message\\": \\"不支持的变配类型\\",\\n    \\"Success\\": true\\n  },\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMessage\\": \\"null\\"\\n}","type":"json"}]',
      'title' => '实例变配',
      'description' => '><warning>该API操作涉及费用，请确保在使用该接口前，已充分了解实时数仓Hologres的收费方式和价格。></warning>

<props="china">- Hologres计费详情请参见[计费概述](https://help.aliyun.com/zh/hologres/product-overview/billing-overview?spm=a2c4g.11186623.0.i4)。</props>
<props="intl">- Hologres计费详情请参见[计费概述](https://www.alibabacloud.com/help/zh/hologres/product-overview/billing-overview)。</props>
<props="china">- 变配实例计算资源期间实例不可用，变配实例存储资源不影响实例的正常使用。请勿频繁进行实例变配操作。详情请参见[实例升降配](https://help.aliyun.com/zh/hologres/product-overview/upgrade-or-downgrade-instance-specifications?spm=a2c4g.11186623.0.i7)。</props>
<props="intl">- 变配实例计算资源期间实例不可用，变配实例存储资源不影响实例的正常使用。请勿频繁进行实例变配操作。详情请参见[实例升降配](https://www.alibabacloud.com/help/zh/hologres/product-overview/upgrade-or-downgrade-instance-specifications)。</props>',
      'responseParamsDescription' => '>
> - 参数校验错误，仍然会返回正常的Data，Success为false，并包含Code和Message。除非抛出异常，否则成功与否由Data.Success来判断。
> - 使用新版SDK包调用本接口时，由于SDK内部的客户端默认超时时间和服务端的不一致，因此可能返回请求超时的错误，但实际上接口已调用成功。如需避免这个问题，您可以在调用前设置ReadTimeout参数为20000。

![](https://img.alicdn.com/imgextra/i3/O1CN01oJaSr21h8lPAvhlSd_!!6000000004233-0-tps-2042-492.jpg)',
    ),
    'ListInstances' => 
    array (
      'summary' => '获取实例列表。',
      'path' => '/api/v1/instances',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'resourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'rg-acfmvscak73zmby',
              ),
              'tag' => 
              array (
                'description' => '实例标签。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'key' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'mytag',
                    ),
                    'value' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'value',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'cmsInstanceType' => 
              array (
                'description' => '云监控实例类型。取值：
- standard
- follower
- mc-acceleration
- warehouse
- high-memory

> 这是云监控',
                'type' => 'string',
                'required' => false,
                'example' => 'standard',
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
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D1303CD4-AA70-5998-8025-F55B22C50840',
              ),
              'InstanceList' => 
              array (
                'description' => '实例列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实例详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CommodityCode' => 
                    array (
                      'description' => '商品code，与费用中心产品明细code一致',
                      'type' => 'string',
                      'example' => 'hologram_postpay_public_cn',
                    ),
                    'CreationTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2022-12-16T02:24:05Z',
                    ),
                    'ExpirationTime' => 
                    array (
                      'description' => '到期时间。',
                      'type' => 'string',
                      'example' => '2023-05-04T16:00:00.000Z',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'hgpostcn-cn-aaab9ad2d8fb',
                    ),
                    'InstanceName' => 
                    array (
                      'description' => '实例名称。',
                      'type' => 'string',
                      'example' => 'test_instance',
                    ),
                    'InstanceStatus' => 
                    array (
                      'description' => '实例状态。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Creating' => '正在创建',
                        'Running' => '正常运行',
                        'Suspended' => '停机',
                        'Allocating' => '正在处理',
                      ),
                      'example' => 'Running',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => '实例类型。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'Follower' => '只读从实例',
                        'Standard' => '普通型',
                      ),
                      'example' => 'Standard',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'tag',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'value',
                          ),
                        ),
                      ),
                    ),
                    'InstanceChargeType' => 
                    array (
                      'description' => '实例付费类型。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'PostPaid' => '按量付费',
                        'PrePaid' => '包年包月',
                      ),
                      'example' => 'PrePaid',
                    ),
                    'LeaderInstanceId' => 
                    array (
                      'description' => '主实例ID。',
                      'type' => 'string',
                      'example' => 'hgprecn-cn-2r42sqvxm006',
                    ),
                    'SuspendReason' => 
                    array (
                      'description' => '暂停原因。',
                      'type' => 'string',
                      'example' => 'Manual',
                    ),
                    'EnableHiveAccess' => 
                    array (
                      'description' => '是否启用湖仓加速。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'true' => '开启',
                        'false' => '关闭',
                      ),
                      'example' => 'true',
                    ),
                    'Version' => 
                    array (
                      'description' => '实例版本。',
                      'type' => 'string',
                      'example' => '1.3.37',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组id。',
                      'type' => 'string',
                      'example' => 'rg-acfmvscak73zmby',
                    ),
                    'Endpoints' => 
                    array (
                      'description' => '域名列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '域名详情。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Endpoint' => 
                          array (
                            'description' => '域名。',
                            'type' => 'string',
                            'example' => 'hgpostcn-cn-aaab9ad2d8fb-cn-hangzhou-internal.hologres.aliyuncs.com:80',
                          ),
                          'Type' => 
                          array (
                            'description' => '网络类型。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'VPCSingleTunnel' => '专有网络',
                              'Intranet' => '内网',
                              'VPCAnyTunnel' => '新实例不再支持',
                              'Internet' => '公网',
                            ),
                            'example' => 'Internet',
                          ),
                          'Enabled' => 
                          array (
                            'description' => '是否启用Endpoint。',
                            'type' => 'boolean',
                            'enumValueTitles' => 
                            array (
                              'true' => '开启',
                              'false' => '关闭',
                            ),
                            'example' => 'true',
                          ),
                          'VSwitchId' => 
                          array (
                            'description' => '虚拟交换机ID。',
                            'type' => 'string',
                            'example' => 'vsw-wz9oap28raidjevhuszg4',
                          ),
                          'VpcId' => 
                          array (
                            'description' => 'VPC ID。',
                            'type' => 'string',
                            'example' => 'vpc-uf6mrahzyu7uorlqqpz5f',
                          ),
                          'VpcInstanceId' => 
                          array (
                            'description' => 'VPC实例ID。',
                            'type' => 'string',
                            'example' => 'hgpostcn-cn-wwo3665tx004-frontend-st',
                          ),
                        ),
                      ),
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区ID',
                      'type' => 'string',
                      'example' => 'cn-hangzhou-h',
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '调用接口是否成功。',
                'type' => 'string',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'RAM user permission is insufficient, please grant AliyunHologresReadOnlyAccess permission.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D1303CD4-AA70-5998-8025-F55B22C50840\\",\\n  \\"InstanceList\\": [\\n    {\\n      \\"CommodityCode\\": \\"hologram_postpay_public_cn\\",\\n      \\"CreationTime\\": \\"2022-12-16T02:24:05Z\\",\\n      \\"ExpirationTime\\": \\"2023-05-04T16:00:00.000Z\\",\\n      \\"InstanceId\\": \\"hgpostcn-cn-aaab9ad2d8fb\\",\\n      \\"InstanceName\\": \\"test_instance\\",\\n      \\"InstanceStatus\\": \\"Running\\",\\n      \\"InstanceType\\": \\"Standard\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"tag\\",\\n          \\"Value\\": \\"value\\"\\n        }\\n      ],\\n      \\"InstanceChargeType\\": \\"PrePaid\\",\\n      \\"LeaderInstanceId\\": \\"hgprecn-cn-2r42sqvxm006\\",\\n      \\"SuspendReason\\": \\"Manual\\",\\n      \\"EnableHiveAccess\\": \\"true\\",\\n      \\"Version\\": \\"1.3.37\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmvscak73zmby\\",\\n      \\"Endpoints\\": [\\n        {\\n          \\"Endpoint\\": \\"hgpostcn-cn-aaab9ad2d8fb-cn-hangzhou-internal.hologres.aliyuncs.com:80\\",\\n          \\"Type\\": \\"Internet\\",\\n          \\"Enabled\\": true,\\n          \\"VSwitchId\\": \\"vsw-wz9oap28raidjevhuszg4\\",\\n          \\"VpcId\\": \\"vpc-uf6mrahzyu7uorlqqpz5f\\",\\n          \\"VpcInstanceId\\": \\"hgpostcn-cn-wwo3665tx004-frontend-st\\"\\n        }\\n      ],\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"ZoneId\\": \\"cn-hangzhou-h\\"\\n    }\\n  ],\\n  \\"Success\\": \\"true\\",\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMessage\\": \\"null\\",\\n  \\"HttpStatusCode\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '获取实例列表',
    ),
    'GetInstance' => 
    array (
      'summary' => '获取实例详情。',
      'path' => '/api/v1/instances/{instanceId}',
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。该参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'hgprecn-cn-i7m2v08uu00a',
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
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '865A02C2-B374-5DD4-9B34-0CA15DA1AEBD',
              ),
              'Instance' => 
              array (
                'description' => '实例信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceChargeType' => 
                  array (
                    'description' => '实例付费类型。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'PostPaid' => '按量付费',
                      'PrePaid' => '包年包月',
                    ),
                    'example' => 'PrePaid',
                  ),
                  'CommodityCode' => 
                  array (
                    'description' => '商品code。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'hologram_maxcomputeAccelerate_public_cn' => '中国站/湖仓加速',
                      'hologram_combo_public_cn' => '中国站 / 预付费/包年包月',
                      'hologram_prepay_public_intl' => '国际站/预付费/包年包月',
                      'hologram_storage_dp_cn' => '中国站/存储抵扣包',
                      'hologram_postpay_public_cn' => '中国站/后付费/按量付费',
                      'hologram_postpay_public_intl' => '国际站/后付费/按量付费',
                      'hologram_maxcomputeAccelerate_public_intl' => '国际站/湖仓加速',
                      'hologram_cu_dp_cn' => '中国站/计算抵扣包',
                    ),
                    'example' => 'hologram_combo_public_cn',
                  ),
                  'Cpu' => 
                  array (
                    'description' => 'CPU核数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '32',
                  ),
                  'CreationTime' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2021-02-03T13:06:06Z',
                  ),
                  'Disk' => 
                  array (
                    'description' => '标准存储大小。
单位：GB。',
                    'type' => 'string',
                    'example' => '500',
                  ),
                  'Endpoints' => 
                  array (
                    'description' => '域名列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '域名详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Endpoint' => 
                        array (
                          'description' => '域名。',
                          'type' => 'string',
                          'example' => 'hgprecn-cn-uqm362o1b001-cn-hangzhou-internal.hologres.aliyuncs.com:80',
                        ),
                        'Type' => 
                        array (
                          'description' => '网络类型。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'VPCSingleTunnel' => '专有网络',
                            'Intranet' => '内网',
                            'VPCAnyTunnel' => '（新实例不支持）',
                            'Internet' => '公网',
                          ),
                          'example' => 'Internet',
                        ),
                        'Enabled' => 
                        array (
                          'description' => '是否开启网络。',
                          'type' => 'boolean',
                          'enumValueTitles' => 
                          array (
                            'true' => '开启',
                            'false' => '关闭',
                          ),
                          'example' => 'true',
                        ),
                        'VSwitchId' => 
                        array (
                          'description' => '虚拟交换机ID。',
                          'type' => 'string',
                          'example' => 'vsw-bp1jqwp2ys6kp7tc9t983',
                        ),
                        'VpcId' => 
                        array (
                          'description' => 'VPC ID。',
                          'type' => 'string',
                          'example' => 'vpc-uf66jjber3hgvwhki3wna',
                        ),
                        'VpcInstanceId' => 
                        array (
                          'description' => 'vpc实例ID。',
                          'type' => 'string',
                          'example' => 'hgprecn-cn-uqm362o1b001-frontend-st',
                        ),
                        'AlternativeEndpoints' => 
                        array (
                          'description' => '一些旧实例同时开启了AnyTunnel和SingleTunnel，当从AnyTunnel切换到SingleTunnel时，会同时保留二者的Endpoint，因此需要多一个字段保存Endpoint。',
                          'type' => 'string',
                          'example' => 'hgprecn-cn-uqm362o1b001-cn-hangzhou-internal.hologres.aliyuncs.com:80',
                        ),
                      ),
                    ),
                  ),
                  'ExpirationTime' => 
                  array (
                    'description' => '到期时间。
按量付费类型没有到期时间。',
                    'type' => 'string',
                    'example' => '2021-02-03T13:06:06Z',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'hgpostcn-cn-tl32s6cgw00b',
                  ),
                  'InstanceName' => 
                  array (
                    'description' => '实例名称。
2-64个字符，字母和汉字都算一个。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'InstanceType' => 
                  array (
                    'description' => '实例类型。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Follower' => '只读从实例',
                      'Standard' => '普通型',
                    ),
                    'example' => 'Standard',
                  ),
                  'Memory' => 
                  array (
                    'description' => '内存。
单位：GB',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '128',
                  ),
                  'InstanceOwner' => 
                  array (
                    'description' => '实例所有者。',
                    'type' => 'string',
                    'example' => '12345678900000',
                  ),
                  'InstanceStatus' => 
                  array (
                    'description' => '实例状态。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Creating' => '正在创建',
                      'Running' => '正常运行',
                      'Suspended' => '停机',
                      'Allocating' => '正在处理',
                    ),
                    'example' => 'Running',
                  ),
                  'Version' => 
                  array (
                    'description' => '实例版本。',
                    'type' => 'string',
                    'example' => 'r1.3.37',
                  ),
                  'SuspendReason' => 
                  array (
                    'description' => '暂停原因。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Indebet' => '已欠费',
                      'Manul' => '手动停机',
                      'Overdue' => '已到期',
                    ),
                    'example' => 'Manual',
                  ),
                  'Tags' => 
                  array (
                    'description' => '实例标签',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标题详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'description' => '标签键。',
                          'type' => 'string',
                          'example' => 'tag',
                        ),
                        'Value' => 
                        array (
                          'description' => '标签值。',
                          'type' => 'string',
                          'example' => 'value',
                        ),
                      ),
                    ),
                  ),
                  'LeaderInstanceId' => 
                  array (
                    'description' => '主实例ID。',
                    'type' => 'string',
                    'example' => 'hgpostcn-cn-i7m2ncd6w002',
                  ),
                  'EnableHiveAccess' => 
                  array (
                    'description' => '是否启用数据湖加速。',
                    'type' => 'string',
                    'example' => 'true',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'description' => '资源组ID。',
                    'type' => 'string',
                    'example' => 'rg-aekzuq7hpybze2i',
                  ),
                  'ComputeNodeCount' => 
                  array (
                    'description' => '计算节点数量。
一个节点的典型配置：16核32G内存。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'ZoneId' => 
                  array (
                    'description' => '可用区ID',
                    'type' => 'string',
                    'example' => 'cn-hangzhou-h',
                  ),
                  'ColdStorage' => 
                  array (
                    'description' => '冷存储容量。
单位：GB。
SSD相当于热存，也是标准存储；HDD相当于冷存。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '800',
                  ),
                  'AutoRenewal' => 
                  array (
                    'description' => '是否开启了自动续费。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'true' => '已开启自动续费',
                      'false' => '未开启自动续费',
                    ),
                    'example' => 'true',
                  ),
                  'GatewayCount' => 
                  array (
                    'description' => '网关节点数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'enumValueTitles' => 
                    array (
                    ),
                    'example' => '2',
                  ),
                  'GatewayCpu' => 
                  array (
                    'description' => '网关cpu资源。
单位：core。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'enumValueTitles' => 
                    array (
                    ),
                    'example' => '4',
                  ),
                  'GatewayMemory' => 
                  array (
                    'description' => '网关内存资源。
单位：GB。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'enumValueTitles' => 
                    array (
                    ),
                    'example' => '16',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'ReplicaRole' => 
                  array (
                    'type' => 'string',
                  ),
                  'EnableServerless' => 
                  array (
                    'type' => 'boolean',
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '请求结果，表示此次请求是否发生异常，和业务无关。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => 'null',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"865A02C2-B374-5DD4-9B34-0CA15DA1AEBD\\",\\n  \\"Instance\\": {\\n    \\"InstanceChargeType\\": \\"PrePaid\\",\\n    \\"CommodityCode\\": \\"hologram_combo_public_cn\\",\\n    \\"Cpu\\": 32,\\n    \\"CreationTime\\": \\"2021-02-03T13:06:06Z\\",\\n    \\"Disk\\": \\"500\\",\\n    \\"Endpoints\\": [\\n      {\\n        \\"Endpoint\\": \\"hgprecn-cn-uqm362o1b001-cn-hangzhou-internal.hologres.aliyuncs.com:80\\",\\n        \\"Type\\": \\"Internet\\",\\n        \\"Enabled\\": true,\\n        \\"VSwitchId\\": \\"vsw-bp1jqwp2ys6kp7tc9t983\\",\\n        \\"VpcId\\": \\"vpc-uf66jjber3hgvwhki3wna\\",\\n        \\"VpcInstanceId\\": \\"hgprecn-cn-uqm362o1b001-frontend-st\\",\\n        \\"AlternativeEndpoints\\": \\"hgprecn-cn-uqm362o1b001-cn-hangzhou-internal.hologres.aliyuncs.com:80\\"\\n      }\\n    ],\\n    \\"ExpirationTime\\": \\"2021-02-03T13:06:06Z\\",\\n    \\"InstanceId\\": \\"hgpostcn-cn-tl32s6cgw00b\\",\\n    \\"InstanceName\\": \\"test\\",\\n    \\"InstanceType\\": \\"Standard\\",\\n    \\"Memory\\": 128,\\n    \\"InstanceOwner\\": \\"12345678900000\\",\\n    \\"InstanceStatus\\": \\"Running\\",\\n    \\"Version\\": \\"r1.3.37\\",\\n    \\"SuspendReason\\": \\"Manual\\",\\n    \\"Tags\\": [\\n      {\\n        \\"Key\\": \\"tag\\",\\n        \\"Value\\": \\"value\\"\\n      }\\n    ],\\n    \\"LeaderInstanceId\\": \\"hgpostcn-cn-i7m2ncd6w002\\",\\n    \\"EnableHiveAccess\\": \\"true\\",\\n    \\"ResourceGroupId\\": \\"rg-aekzuq7hpybze2i\\",\\n    \\"ComputeNodeCount\\": 2,\\n    \\"ZoneId\\": \\"cn-hangzhou-h\\",\\n    \\"ColdStorage\\": 800,\\n    \\"AutoRenewal\\": \\"true\\",\\n    \\"GatewayCount\\": 2,\\n    \\"GatewayCpu\\": 4,\\n    \\"GatewayMemory\\": 16,\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"ReplicaRole\\": \\"\\",\\n    \\"EnableServerless\\": true\\n  },\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"null\\",\\n  \\"ErrorMessage\\": \\"null\\",\\n  \\"HttpStatusCode\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '获取实例详情',
    ),
    'GetWarehouseDetail' => 
    array (
      'summary' => '计算组详细信息。',
      'path' => '/api/v1/instances/{instanceId}/getWarehouseDetail',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。该参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'hgprecn-cn-i7m2ucpyu005',
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
                'example' => 'D3AE84AB-0873-5FC7-A4C4-8CF869D2FA70',
              ),
              'WarehouseDetail' => 
              array (
                'description' => '返回值',
                'type' => 'object',
                'properties' => 
                array (
                  'ReservedCpu' => 
                  array (
                    'description' => '预留计算资源。实例所有运行中的计算组计算资源不能超过计算组预留计算资源。',
                    'type' => 'string',
                    'example' => '64',
                  ),
                  'RemainingCpu' => 
                  array (
                    'description' => '未分配的计算资源。实例剩余未分配的计算组计算资源',
                    'type' => 'string',
                    'example' => '32',
                  ),
                  'WarehouseList' => 
                  array (
                    'description' => 'Warehouse列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'Warehouse',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Cpu' => 
                        array (
                          'description' => 'cpu',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '32',
                        ),
                        'Mem' => 
                        array (
                          'description' => '内存',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '128',
                        ),
                        'Id' => 
                        array (
                          'description' => 'id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'Status' => 
                        array (
                          'description' => '状态',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'kRunning' => 'kRunning',
                            'kSuspended' => 'kSuspended',
                            'kInit' => 'kInit',
                            'kFailed' => 'kFailed',
                            'kAllocating' => 'kAllocating',
                          ),
                          'example' => 'kRunning',
                        ),
                        'NodeCount' => 
                        array (
                          'description' => '计算节点数量',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'Name' => 
                        array (
                          'description' => '计算组名称',
                          'type' => 'string',
                          'example' => 'MyWarehouse',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D3AE84AB-0873-5FC7-A4C4-8CF869D2FA70\\",\\n  \\"WarehouseDetail\\": {\\n    \\"ReservedCpu\\": \\"64\\",\\n    \\"RemainingCpu\\": \\"32\\",\\n    \\"WarehouseList\\": [\\n      {\\n        \\"Cpu\\": 32,\\n        \\"Mem\\": 128,\\n        \\"Id\\": 2,\\n        \\"Status\\": \\"kRunning\\",\\n        \\"NodeCount\\": 2,\\n        \\"Name\\": \\"MyWarehouse\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '计算组详情',
    ),
    'ListWarehouses' => 
    array (
      'summary' => '计算组列表',
      'path' => '/api/v1/instances/{instanceId}/listWarehouses',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例ID。该参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'hgpostcn-cn-x0r382joi001',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '819A7F0F-2951-540F-BD94-6A41ECF0281F',
              ),
              'WarehouseList' => 
              array (
                'description' => '计算组列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '计算组列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'description' => 'id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3',
                    ),
                    'Cpu' => 
                    array (
                      'description' => 'cpu',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '32',
                    ),
                    'Mem' => 
                    array (
                      'description' => '内存',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '128',
                    ),
                    'Name' => 
                    array (
                      'description' => '计算组名称',
                      'type' => 'string',
                      'example' => 'MyWarehouse',
                    ),
                    'Status' => 
                    array (
                      'description' => '状态',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'kRunning' => 'kRunning',
                        'kSuspended' => 'kSuspended',
                        'kInit' => 'kInit',
                        'kFailed' => 'kFailed',
                        'kAllocating' => 'kAllocating',
                      ),
                      'example' => 'kRunning',
                    ),
                    'NodeCount' => 
                    array (
                      'description' => '计算节点数量',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"819A7F0F-2951-540F-BD94-6A41ECF0281F\\",\\n  \\"WarehouseList\\": [\\n    {\\n      \\"Id\\": 3,\\n      \\"Cpu\\": 32,\\n      \\"Mem\\": 128,\\n      \\"Name\\": \\"MyWarehouse\\",\\n      \\"Status\\": \\"kRunning\\",\\n      \\"NodeCount\\": 2\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '计算组列表',
    ),
    'DisableHiveAccess' => 
    array (
      'summary' => '关闭数据湖加速。',
      'path' => '/api/v1/instances/{instanceId}/disableHiveAccess',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => false,
            'example' => 'hgprecn-cn-tl330rv9k00e',
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
                'example' => '82B7A554-4D00-50DF-95D9-B59E7B4D5489',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => '成功',
                  'false' => '失败',
                ),
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '请求结果',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '404',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'Internal server error.',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"82B7A554-4D00-50DF-95D9-B59E7B4D5489\\",\\n  \\"Data\\": true,\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"404\\",\\n  \\"ErrorMessage\\": \\"Internal server error.\\",\\n  \\"HttpStatusCode\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '关闭数据湖加速',
    ),
    'EnableHiveAccess' => 
    array (
      'summary' => '开启数据湖加速。',
      'path' => '/api/v1/instances/{instanceId}/enableHiveAccess',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域id。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '实例id。',
            'type' => 'string',
            'required' => false,
            'example' => 'hgpostcn-cn-zpr3426vm002',
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
                'example' => 'EA8F0084-5831-5907-BB31-BD05D2617844',
              ),
              'Data' => 
              array (
                'description' => '返回结果',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => '成功',
                  'false' => '失败',
                ),
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '操作是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '404',
              ),
              'ErrorMessage' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Internal server error.',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EA8F0084-5831-5907-BB31-BD05D2617844\\",\\n  \\"Data\\": true,\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": \\"404\\",\\n  \\"ErrorMessage\\": \\"Internal server error.\\",\\n  \\"HttpStatusCode\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '开启数据湖加速',
    ),
    'ChangeResourceGroup' => 
    array (
      'summary' => '更新资源组',
      'path' => '/api/v1/tag/changeResourceGroup',
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'newResourceGroupId' => 
              array (
                'description' => '新资源组Id',
                'type' => 'string',
                'required' => false,
                'example' => 'rg-acfmxwerqwerasfd',
              ),
              'instanceId' => 
              array (
                'description' => '实例id。',
                'type' => 'string',
                'required' => false,
                'example' => 'hgprecn-cn-zvp25ysv3006',
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
                'example' => 'AB71198A-2DB1-511B-AE4D-690BAA97F076',
              ),
              'Data' => 
              array (
                'description' => '操作是否成功。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => '成功',
                  'false' => '失败',
                ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"AB71198A-2DB1-511B-AE4D-690BAA97F076\\",\\n  \\"Data\\": true\\n}","type":"json"}]',
      'title' => '更新资源组',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'hologram.us-west-1.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'hologram.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'hologram.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'hologram.cn-hangzhou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'hologram.cn-shanghai.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'hologram.cn-shenzhen.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'hologram.cn-hongkong.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'hologram.ap-northeast-1.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'hologram.ap-southeast-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'hologram.ap-southeast-3.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'hologram.ap-southeast-5.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'hologram.us-east-1.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'hologram.eu-central-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'hologram.ap-south-1.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'hologram.cn-shanghai-finance-1.aliyuncs.com',
    ),
  ),
);
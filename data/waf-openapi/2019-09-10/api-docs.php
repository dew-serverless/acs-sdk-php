<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'waf-openapi',
    'version' => '2019-09-10',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 40429,
      'title' => '实例信息',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeInstanceInfo',
        1 => 'DescribeInstanceSpecInfo',
        2 => 'DeleteInstance',
      ),
    ),
    1 => 
    array (
      'id' => 40434,
      'title' => '域名配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeDomainNames',
        1 => 'DescribeDomain',
        2 => 'CreateDomain',
        3 => 'ModifyDomain',
        4 => 'DeleteDomain',
        5 => 'DescribeCertificates',
        6 => 'DescribeCertMatchStatus',
        7 => 'CreateCertificate',
        8 => 'CreateCertificateByCertificateId',
        9 => 'DescribeDomainBasicConfigs',
        10 => 'DescribeDomainAdvanceConfigs',
        11 => 'DescribeDomainList',
      ),
    ),
    2 => 
    array (
      'id' => 40447,
      'title' => '防护配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeProtectionModuleMode',
        1 => 'ModifyDomainIpv6Status',
        2 => 'DescribeProtectionModuleStatus',
        3 => 'ModifyProtectionModuleStatus',
        4 => 'ModifyProtectionModuleMode',
        5 => 'DescribeProtectionModuleRules',
        6 => 'CreateProtectionModuleRule',
        7 => 'ModifyProtectionModuleRule',
        8 => 'ModifyProtectionRuleStatus',
        9 => 'DescribeDomainRuleGroup',
        10 => 'SetDomainRuleGroup',
        11 => 'ModifyProtectionRuleCacheStatus',
        12 => 'DeleteProtectionModuleRule',
        13 => 'DescribeProtectionModuleCodeConfig',
        14 => 'DescribeRuleGroups',
        15 => 'DescribeRules',
      ),
    ),
    3 => 
    array (
      'id' => 40462,
      'title' => '日志管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ModifyLogRetrievalStatus',
        1 => 'ModifyLogServiceStatus',
        2 => 'DescribeLogServiceStatus',
      ),
    ),
    4 => 
    array (
      'id' => 40466,
      'title' => '系统管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeWafSourceIpSegment',
      ),
    ),
    5 => 
    array (
      'id' => 171036,
      'title' => '资源相关接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'MoveResourceGroup',
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
    'DescribeInstanceInfo' => 
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
            'description' => '要查询的WAF实例的ID。

不设置该参数表示查询中国内地地域或非中国内地地域的所有WAF实例信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'waf-cn-tl32ast****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。不设置该参数表示默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
              ),
              'InstanceInfo' => 
              array (
                'description' => 'WAF实例的详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => 'WAF实例是否过期。取值：
- **0**：表示已过期。
- **1**：表示未过期。

> **PayType**为**0**（表示未开通WAF实例）时，不返回该参数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'EndDate' => 
                  array (
                    'description' => 'WAF实例的到期时间。使用时间戳表示，单位：秒。

> **PayType**为**0**（表示未开通WAF实例）时，不返回该参数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1512921600',
                  ),
                  'Version' => 
                  array (
                    'description' => 'WAF实例的版本。取值：

<props="china">- **version_3**：表示中国内地高级版。</props>
<props="china">- **version_4**：表示中国内地企业版。</props>
<props="china">- **version_5**：表示中国内地旗舰版。</props>
<props="china">- **version_exclusive_cluster**：表示中国内地虚拟独享集群版。</props>
<props="china">- **version_hybrid_cloud_standard**：表示中国内地混合云WAF版。</props>
<props="china">-  **version_pro_asia**：表示非中国内地高级版。</props>
<props="china">- **version_business_asia**：表示非中国内地企业版。</props>
<props="china">- **version_enterprise_asia**：表示非中国内地旗舰版。</props>
<props="china">- **version_exclusive_cluster_asia**：表示非中国内地虚拟独享集群版。</props>
<props="china">- **version_hybrid_cloud_standard_asia**：表示非中国内地混合云WAF版。</props>
<props="china">- **version_elastic_bill**：表示按量计费版。</props>
<props="china">- **version_elastic_bill_new**：表示按量计费2.0版。</props>

<props="china">如果返回的version参数值不在上述列表中，请确认您使用的是阿里云中国站云账号。</props> 

<props="intl">- **version_pro_china**：表示中国内地高级版。</props>
<props="intl">- **version_business_china**：表示中国内地企业版。</props>
<props="intl">- **version_enterprise_china**：表示中国内地旗舰版。</props>
<props="intl">- **version_exclusive_china**：表示中国内地虚拟独享集群版。</props>
<props="intl">- **version_hybrid_cloud_standard_china**：表示中国内地混合云WAF版。</props>
<props="intl">- **version_pro**：表示非中国内地高级版。</props>
<props="intl">- **version_business**：表示非中国内地企业版。</props>
<props="intl">- **version_enterprise**：表示非中国内地旗舰版。</props>
<props="intl">- **version_exclusive**：表示非中国内地虚拟独享集群版。</props>
<props="intl">- **version_hybrid_cloud_standard**：表示非中国内地混合云WAF版。</props>

<props="intl">如果返回的version参数值不在上述列表中，请确认您使用的是阿里云国际站云账号。</props>

> **PayType**为**0**（表示未开通WAF实例）时，不返回该参数。
',
                    'type' => 'string',
                    'example' => 'version_3',
                  ),
                  'RemainDay' => 
                  array (
                    'description' => '试用版WAF实例的剩余可用天数。

> 只有当**Trial**为**1**（表示已开通试用版WAF实例）时，才返回该参数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Region' => 
                  array (
                    'description' => 'WAF实例的地域。取值：

- **cn**：表示中国内地。
- **cn-hongkong**：表示非中国内地。

> **PayType**为**0**（表示未开通WAF实例）时，不返回该参数。',
                    'type' => 'string',
                    'example' => 'cn',
                  ),
                  'PayType' => 
                  array (
                    'description' => 'WAF实例的开通状态。取值：

- **0**：表示当前阿里云账号未开通WAF实例。
- **1**：表示当前阿里云账号已开通WAF包年包月实例。
<props="china">- **2**：表示当前阿里云账号已开通WAF按量计费实例。</props>',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'InDebt' => 
                  array (
                    'description' => 'WAF实例是否存在欠费。取值：

- **0**：表示已欠费。
- **1**：表示未欠费。

> **PayType**为**0**（表示未开通WAF实例）时，不返回该参数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => 'WAF实例的ID。

> **PayType**为**0**（表示未开通WAF实例）时，不返回该参数。',
                    'type' => 'string',
                    'example' => 'waf-cn-tl32ast****',
                  ),
                  'SubscriptionType' => 
                  array (
                    'description' => '<props="china">WAF实例的计费方式。取值：</props>
<props="china">- **Subscription**：表示包年包月。</props>
<props="china">- **PayAsYouGo**：表示按量计费。</props>

<props="intl">WAF实例的计费方式。取值固定为**Subscription**，表示包年包月。</props>

> **PayType**为**0**（表示未开通WAF实例）时，不返回该参数。',
                    'type' => 'string',
                    'example' => 'Subscription',
                  ),
                  'Trial' => 
                  array (
                    'description' => '当前阿里云账号是否开通了试用版WAF实例。取值：

- **0**：表示否。
- **1**：表示是。

> 只有当前阿里云账号已开通试用版WAF实例时，才会返回该参数。 ',
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
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbbiden',
            'errorMessage' => 'User not authorized to operate on the specified resource.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\",\\n  \\"InstanceInfo\\": {\\n    \\"Status\\": 1,\\n    \\"EndDate\\": 1512921600,\\n    \\"Version\\": \\"version_3\\",\\n    \\"RemainDay\\": 1,\\n    \\"Region\\": \\"cn\\",\\n    \\"PayType\\": 1,\\n    \\"InDebt\\": 1,\\n    \\"InstanceId\\": \\"waf-cn-tl32ast****\\",\\n    \\"SubscriptionType\\": \\"Subscription\\",\\n    \\"Trial\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceInfoResponse>\\n    <RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n    <InstanceInfo>\\n        <Status>1</Status>\\n        <EndDate>1512921600</EndDate>\\n        <Version>version_3</Version>\\n        <Region>cn</Region>\\n        <PayType>1</PayType>\\n        <InDebt>1</InDebt>\\n        <InstanceId>waf-cn-tl32ast****</InstanceId>\\n        <SubscriptionType>Subscription</SubscriptionType>\\n    </InstanceInfo>\\n</DescribeInstanceInfoResponse>","errorExample":""}]',
      'title' => '获取WAF实例的当前信息',
      'summary' => '查询当前阿里云账号下WAF实例的详情。',
      'description' => '本接口用于查询当前阿里云账号下WAF实例的详情，例如，实例的ID、版本、状态、到期时间等。请注意，为了确保系统稳定性，对单用户QPS限制为50次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeInstanceSpecInfo' => 
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
            'description' => '要查询的WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'waf-cn-st2225l****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '
WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'E906513E-F6B5-495E-98DC-7BA8****1D76',
              ),
              'InstanceId' => 
              array (
                'description' => 'WAF实例ID。',
                'type' => 'string',
                'example' => 'waf-cn-st2225l****',
              ),
              'ExpireTime' => 
              array (
                'description' => 'WAF实例的到期时间。格式为毫秒级时间戳。

> 对于按量计费实例，返回的值表示试用版的到期时间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1677168000000',
              ),
              'Version' => 
              array (
                'description' => 'WAF实例的版本。取值：

<props="china">

- **version_3**：表示中国内地高级版。

- **version_4**：表示中国内地企业版。

- **version_5**：表示中国内地旗舰版。

- **version_exclusive_cluster**：表示中国内地虚拟独享集群版。

- **version_hybrid_clou_standard**：表示中国内地混合云WAF版。

- **version_pro_asia**：表示海外地区高级版。

- **version_business_asia**：表示海外地区企业版。

- **version_enterprise_asia**：表示海外地区旗舰版。

- **version_exclusive_cluster_asia**：表示海外地区虚拟独享集群版。

- **version_hybrid_cloud_standard_asia**：表示海外地区混合云WAF版。

- **version_elastic_bill**：表示按量计费版。

- **version_elastic_bill_new**：表示按量计费2.0版。

</props>

<props="intl">

- **version_pro_china**：表示中国内地高级版。

- **version_business_china**：表示中国内地企业版。

- **version_enterprise_china**：表示中国内地旗舰版。

- **version_exclusive_china**：表示中国内地虚拟独享集群版。

- **version_hybrid_cloud_standard_china**：表示中国内地混合云WAF版。

- **version_pro**：表示海外地区高级版。

- **version_business**：表示海外地区企业版。

- **version_enterprise**：表示海外地区旗舰版。

- **version_exclusive**：表示海外地区虚拟独享集群版。

- **version_hybrid_cloud_standard**：表示海外地区混合云WAF版。

</props>

<props="china">如果返回的version参数值不在上述列表中，请确认您使用的是阿里云中国站账号。</props>

<props="intl">如果返回的version参数值不在上述列表中，请确认您使用的是阿里云国际站账号。</props>
',
                'type' => 'string',
                'example' => 'version_3',
              ),
              'InstanceSpecInfos' => 
              array (
                'description' => 'WAF实例的规格信息，以**Code**与**Value**的数组形式返回实例的各项规格信息。其中，**Code**表示规格代码，**Value**表示对应的规格值。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Code' => 
                    array (
                      'description' => 'WAF实例规格的代码。取值：

- **100**：表示是否支持HTTPS业务防护。
- **101**：表示日常业务流量阈值。
- **102**：表示CC攻击防护阈值。
- **103**：表示支持接入防护的域名总数。
- **104**：表示是否支持泛域名。
- **105**：表示支持配置的自定义防护策略（ACL访问控制）规则的数量。
- **106**：表示域名回源IP的数量。
- **107**：表示是否支持云外房机。
- **108**：表示是否支持自定义高级Web访问控制功能。
- **109**：表示是否支持非标准端口。
- **110**：表示是否支持扫描防护功能。
- **111**：表示是否支持数据风控。
- **112**：表示支持配置的数据风控记录数。
- **113**：表示支持接入防护的主域名数（一级域名）。
- **114**：表示正常业务带宽阈值。
- **115**：表示绑定的域名包的数量。
- **116**：表示是否支持添加不同阿里云账号下的ECS IP作为源站服务器IP。
- **117**：表示是否支持添加虚拟主机IP作为源站服务器IP。
- **118**：表示支持配置的数据风控规则场景的数量。
- **119**：表示是否支持语义分析引擎功能。
- **12**：表示是否支持业务流量分析功能。
- **120**：表示接入域名是否需要判断备案。
- **121**：表示是否支持配置自定义防护策略（CC攻击防护）规则。
- **122**：表示支持配置的自定义防护策略（CC攻击防护）规则的数量。
- **123**：表示是否支持地域级IP黑名单功能。
- **124**：表示是否支持网站防篡改功能。
- **125**：表示支持配置的自定义防篡改防护规则的数量。
- **126**：表示是否支持收集日志功能。
- **127**：表示支持添加的非标端口数。
- **128**：表示支持添加的HTTP协议端口。
- **129**：表示支持添加的HTTPS协议端口。
- **13**：表示是否支持切换CC安全防护的模式。
- **130**：表示是否支持黑客画像功能。
- **131**：表示是否支持防敏感信息泄露功能。
- **132**：表示支持配置的防敏感信息泄露规则的数量。
- **133**：表示自定义防护策略及白名单策略中支持使用的条件字段。
- **134**：表示绑定的独享IP的数量。
- **135**：表示是否支持数据大屏功能。
- **136**：表示支持的数据大屏数量。
- **137**：表示是否支持深度学习引擎功能。
- **138**：表示是否支持全量日志功能。
- **139**：表示全量日志的存储时长。
- **14**：表示是否支持查看CC攻击日志详情。
- **140**：表示全量日志的最大存储容量。
- **141**：表示是否支持告警设置功能。
- **142**：表示全量日志的存储空间可清空次数。
- **143**：表示是否支持自定义防护规则组功能。
- **144**：表示支持配置的自定义规则组的数量。
- **145**：表示是否支持使用防护模块通用网关代理。
- **146**：表示是否支持使用防护模块通用规则代理。
- **147**：表示是否支持安全专家服务平台。
- **148**：表示是否支持试用。
- **149**：表示是否支持使用透明代理模式。
- **150**：表示是否支持IPv6。
- **151**：表示是否支持主动防御功能。
- **152**：表示支持配置的主动防护规则的数量。
- **153**：表示是否支持HTTP 2.0业务防护。
- **154**：表示是否支持域名配置功能。
- **155**：表示是否支持资产识别功能。
- **156**：表示是否具有预发测试规格。
- **157**：表示是否支持使用虚拟独立集群。
- **158**：表示虚拟独立集群支持的端口数量。
- **159**：表示是否支持账号安全功能。
- **160**：表示账号安全防护的接口数量。
- **162**：表示支持添加的白名单规则的数量。
- **163**：表示自定义防护规则的数量。
- **164**：表示IP黑名单规则的数量。
- **167**：表示是否支持自定义扫描防护配置。
- **168**：表示全局负载均衡（GSLB）防护域名的数量。
- **169**：表示是否支持智能负载均衡。
- **171**：表示是否支持App防护功能。
- **172**：表示App防护的规则数量。
- **173**：表示是否支持典型爬虫行为识别功能。
- **176**：表示是否支持合法爬虫功能。
- **177**：表示是否支持爬虫威胁情报功能。
- **181**：表示透明接入支持添加的引流配置（对应一个具体的实例IP+端口）的数量。
- **190**：表示是否支持CC防护能力。
- **191**：表示是否支持账户安全防御能力。
- **192**：表示是否支持扫描防护能力。
- **193**：表示是否支持自定义TLS安全策略。
- **194**：表示是否支持自定义TLS安全策略的高级设置。
- **196**：表示透明接入是否支持接入任意接口。
- **199**：表示是否支持IPv6回源。
- **200**：表示是否支持防爬场景化配置。
- **201**：表示防爬场景化配置的数量。',
                      'type' => 'string',
                      'example' => '103',
                    ),
                    'Value' => 
                    array (
                      'description' => 'WAF实例规格代码对应的值。取值可以为**true**（表示是）或**false**（表示否）；也可以为具体的数值。

> 例如，如果**Code**取值为**103**，则**Value**取值为**640**；如果**Code**取值为**104**，则**Value**取值为**true**。
',
                      'type' => 'string',
                      'example' => '640',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbbiden',
            'errorMessage' => 'User not authorized to operate on the specified resource.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E906513E-F6B5-495E-98DC-7BA8****1D76\\",\\n  \\"InstanceId\\": \\"waf-cn-st2225l****\\",\\n  \\"ExpireTime\\": 1677168000000,\\n  \\"Version\\": \\"version_3\\",\\n  \\"InstanceSpecInfos\\": [\\n    {\\n      \\"Code\\": \\"103\\",\\n      \\"Value\\": \\"640\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeInstanceSpecInfoResponse>\\n    <RequestId>E906513E-F6B5-495E-98DC-7BA888671D76</RequestId>\\n    <InstanceId>waf-cn-st2225l****</InstanceId>\\n    <ExpireTime>1677168000000</ExpireTime>\\n    <Version>version_3或version_pro_china</Version>\\n    <InstanceSpecInfos>\\n        <Code>103</Code>\\n        <Value>640</Value>\\n    </InstanceSpecInfos>\\n</DescribeInstanceSpecInfoResponse>","errorExample":""}]',
      'title' => '获取WAF实例的规格信息',
      'summary' => '查询WAF实例的规格信息。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteInstance' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf_elasticity-cn-0xldbqt****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '相关的资源组ID。

默认为空，表示属于默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '阿里云为此次API调用请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'F35F45B0-5D6B-4238-BE02-A62D****E840',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F35F45B0-5D6B-4238-BE02-A62D****E840\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteInstanceResponse>\\r\\n<RequestId>F35F45B0-5D6B-4238-BE02-A62D0760E840</RequestId>\\r\\n</DeleteInstanceResponse>","errorExample":""}]',
      'title' => '释放Web应用防火墙（WAF）实例',
      'summary' => '释放Web应用防火墙（WAF）按量付费实例或者到期的包年包月实例。',
      'description' => '释放实例后，实例的相关数据将全部丢失且不可恢复，请谨慎操作。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDomainNames' => 
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
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。

> 您可以通过调用[DescribeInstanceInfo](~~140857~~)接口查看当前WAF实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf_elasticity-cn-0xldbqt****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
              ),
              'DomainNames' => 
              array (
                'description' => '已添加的域名列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '域名。',
                  'type' => 'string',
                  'example' => '1.example.com',
                ),
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
            'errorCode' => 'Forbbiden',
            'errorMessage' => 'User not authorized to operate on the specified resource.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\",\\n  \\"DomainNames\\": [\\n    \\"1.example.com\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeDomainNamesResponse>\\n\\t<DomainNames>1.example.com</DomainNames>\\n\\t<DomainNames>2.example.com</DomainNames>\\n\\t<DomainNames>3.example.com</DomainNames>\\n\\t<RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n</DescribeDomainNamesResponse>","errorExample":""}]',
      'title' => '获取指定实例中已添加的域名名称列表',
      'summary' => '获取指定WAF实例中已添加的域名名称列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDomain' => 
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
            'description' => 'WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-7pp26f1****',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的域名名称。

> 您可以调用[DescribeDomainNames](~~86373~~)查询所有已添加到WAF防护的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D827FCFE-90A7-4330-9326-D33C8B4C7726',
              ),
              'Domain' => 
              array (
                'description' => '域名的配置信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'HttpToUserIp' => 
                  array (
                    'description' => '是否开启了HTTP回源功能。取值：

- **0**：表示未开启。
- **1**：表示已开启。

> 仅当**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式接入WAF）且**HttpsPort**取值不为空（表示域名使用HTTPS协议）时，返回该参数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'SniStatus' => 
                  array (
                    'description' => '是否开启了回源SNI。回源SNI表示WAF转发客户端请求到源站服务器，在与源站进行TLS握手时，通过SNI扩展字段（Server Name Indicator extension）指定要访问的主机，并与该主机建立HTTPS连接。取值：

- **0**：表示未开启。
- **1**：表示已开启。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**HttpsPort**取值不为空（表示域名使用HTTPS协议）时，返回该参数。
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'IsAccessProduct' => 
                  array (
                    'description' => '域名在WAF前是否配置有其他七层代理（例如高防、CDN等），即客户端访问流量到WAF前是否有经过其他七层代理转发。取值：

- **0**：表示否。
- **1**：表示是。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'AccessHeaderMode' => 
                  array (
                    'description' => 'WAF获取客户端真实IP的方式。取值：

- **0**：表示WAF读取请求头中X-Forwarded-For（XFF）字段的第一个值作为客户端IP。
- **1**：表示WAF读取请求头中由您设置的自定义字段值作为客户端IP。

> 仅当**IsAccessProduct**取值为**1**（表示WAF前有其他七层代理服务）时，返回该参数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'HttpsRedirect' => 
                  array (
                    'description' => '是否开启了HTTPS强制跳转。取值：

- **0**：表示未开启。
- **1**：表示已开启。

> 仅当**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式接入WAF）且**HttpsPort**取值不为空（表示域名使用HTTPS协议）时，返回该参数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'IpFollowStatus' => 
                  array (
                    'description' => '是否开启了IPv4/IPv6回源协议跟随。取值：
- **0**：表示未开启。
- **1**：表示已开启。

> 仅当**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式接入WAF）时，返回该参数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'LoadBalancing' => 
                  array (
                    'description' => '回源时采用的负载均衡算法。取值：

- **0**：表示IP Hash算法。
- **1**：表示轮询算法。
- **2**：表示Least Time算法。

> 仅当**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式接入WAF）时，返回该参数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'AccessType' => 
                  array (
                    'description' => '域名接入方式。取值：
- **waf-cloud-dns**：表示CNAME接入。
- **waf-cloud-native**：表示透明接入。',
                    'type' => 'string',
                    'example' => 'waf-cloud-dns',
                  ),
                  'Version' => 
                  array (
                    'description' => '当前域名配置的版本。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '40',
                  ),
                  'ClusterType' => 
                  array (
                    'description' => 'WAF实例对应的集群类型。取值：

- **0**：表示物理集群。
- **1**：表示虚拟集群，即WAF独享集群。

> 仅当**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式接入WAF）时，返回该参数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'ReadTime' => 
                  array (
                    'description' => 'WAF集群的读连接超时时长。单位：秒。

> 仅当**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式接入WAF）时，返回该参数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '120',
                  ),
                  'WriteTime' => 
                  array (
                    'description' => 'WAF集群的写连接超时时长。单位：秒。

> 仅当**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式接入WAF）时，返回该参数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '120',
                  ),
                  'SniHost' => 
                  array (
                    'description' => 'SNI扩展字段的自定义值。取值为空表示未自定义SNI值，默认使用请求头中**Host**字段的值作为SNI扩展字段的值。

> 仅在**SniStatus**取值为**1**（表示开启SNI回源）时，返回该参数。',
                    'type' => 'string',
                    'example' => 'waf.example.com',
                  ),
                  'ResourceGroupId' => 
                  array (
                    'description' => 'WAF实例所属资源组ID。',
                    'type' => 'string',
                    'example' => 'rg-acfm2mkrunv****',
                  ),
                  'Cname' => 
                  array (
                    'description' => 'WAF为域名分配的CNAME地址。

> 仅当**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式接入WAF）时，返回该参数。',
                    'type' => 'string',
                    'example' => 'kdmqyi3ck7xogegxpiyfpb0fj21mgkxn.****.com',
                  ),
                  'ConnectionTime' => 
                  array (
                    'description' => 'WAF集群的连接超时时长。单位：秒。

> 仅当**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式接入WAF）时，返回该参数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'LogHeaders' => 
                  array (
                    'description' => '域名的流量标记字段和值，用于标记经过WAF处理的流量。

> 仅当域名开启了流量标记功能时，返回该参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'k' => 
                        array (
                          'description' => '流量标记字段的名称。',
                          'type' => 'string',
                          'example' => 'ALIWAF-TAG',
                        ),
                        'v' => 
                        array (
                          'description' => '流量标记字段的值。',
                          'type' => 'string',
                          'example' => 'Yes',
                        ),
                      ),
                    ),
                  ),
                  'CloudNativeInstances' => 
                  array (
                    'description' => '透明接入的配置列表。

> 仅当**AccessType**取值为**waf-cloud-native**（表示域名使用透明接入方式接入WAF）时，返回该参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RedirectionTypeName' => 
                        array (
                          'description' => '引流端口的类型。取值：

- **SLB-L4**：表示从传统型负载均衡CLB（原SLB）实例的四层监听端口引流到WAF进行防护。
- **SLB-L7**：表示从传统型负载均衡CLB（原SLB）实例的七层监听端口引流到WAF进行防护。
- **ECS**：表示从云服务器ECS实例的监听端口引流到WAF进行防护。
- **ALB**：表示从应用型负载均衡ALB实例的HTTP、HTTPS监听端口引流到WAF进行防护。',
                          'type' => 'string',
                          'example' => 'ALB',
                        ),
                        'CloudNativeProductName' => 
                        array (
                          'description' => '云产品实例的类型。取值：

- **SLB**：表示传统型负载均衡CLB（原SLB）实例。
- **ECS**：表示云服务器ECS实例。
- **ALB**：表示应用型负载均衡ALB实例。
',
                          'type' => 'string',
                          'example' => 'ALB',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '云产品实例的ID。',
                          'type' => 'string',
                          'example' => 'alb-s65nua68wdedsp****',
                        ),
                        'IPAddressList' => 
                        array (
                          'description' => '云产品实例的公网IP地址列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '云产品实例的公网IP地址。',
                            'type' => 'string',
                            'example' => '39.XX.XX.197',
                          ),
                          'example' => '["39.XX.XX.197"]',
                        ),
                        'ProtocolPortConfigs' => 
                        array (
                          'description' => '协议及端口配置列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '协议及端口配置。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Ports' => 
                              array (
                                'description' => '端口列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '端口。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '80',
                                ),
                                'example' => '[80]',
                              ),
                              'Protocol' => 
                              array (
                                'description' => '协议类型。取值：
- **http**：表示HTTP协议。
- **https**：表示HTTPS协议。',
                                'type' => 'string',
                                'example' => 'http',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'HttpPort' => 
                  array (
                    'description' => 'HTTP端口列表。

> 仅当**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式接入WAF）时，返回该参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'HTTP端口。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80',
                    ),
                  ),
                  'Http2Port' => 
                  array (
                    'description' => 'HTTP 2.0端口列表。

> 仅当**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式接入WAF）且**HttpsPort**取值不为空（表示域名使用HTTPS协议）时，返回该参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'HTTP 2.0端口。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '8443',
                    ),
                  ),
                  'SourceIps' => 
                  array (
                    'description' => '源站服务器地址。

> 仅当**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式接入WAF）时，返回该参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '源站服务器地址。',
                      'type' => 'string',
                      'example' => '39.XX.XX.197',
                    ),
                  ),
                  'HttpsPort' => 
                  array (
                    'description' => 'HTTPS端口列表。

> 仅当**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式接入WAF）时，返回该参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'HTTPS端口。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '443',
                    ),
                  ),
                  'AccessHeaders' => 
                  array (
                    'description' => '用于获取客户端IP的自定义字段列表。

> 仅当**AccessHeaderMode**取值为**1**（表示WAF读取请求头中由您设置的自定义字段值作为客户端IP）时，返回该参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用于获取客户端IP的自定义字段。',
                      'type' => 'string',
                      'example' => 'X-Client-IP',
                    ),
                  ),
                  'Retry' => 
                  array (
                    'description' => 'WAF回源失败时，是否重试。取值：

- **true**：表示重试。

- **false**：表示不重试。',
                    'type' => 'boolean',
                    'example' => 'false',
                    'default' => 'true',
                  ),
                  'Keepalive' => 
                  array (
                    'description' => '是否保持长连接。取值：

- **true**：表示保持长连接。

- **false**：表示不保持长连接。',
                    'type' => 'boolean',
                    'example' => 'true',
                    'default' => 'true',
                  ),
                  'KeepaliveRequests' => 
                  array (
                    'description' => '复用长连接的请求个数。取值范围：60~1000，单位：个。

> 开启长连接后，复用多少个长连接。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1000',
                    'default' => '1000',
                  ),
                  'KeepaliveTimeout' => 
                  array (
                    'description' => '空闲长连接超时时间，取值范围：1~60，默认15，单位：秒。

> 复用的长连接空闲多少长后释放。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '15',
                    'default' => '15',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D827FCFE-90A7-4330-9326-D33C8B4C7726\\",\\n  \\"Domain\\": {\\n    \\"HttpToUserIp\\": 0,\\n    \\"SniStatus\\": 1,\\n    \\"IsAccessProduct\\": 1,\\n    \\"AccessHeaderMode\\": 1,\\n    \\"HttpsRedirect\\": 0,\\n    \\"IpFollowStatus\\": 1,\\n    \\"LoadBalancing\\": 2,\\n    \\"AccessType\\": \\"waf-cloud-dns\\",\\n    \\"Version\\": 40,\\n    \\"ClusterType\\": 0,\\n    \\"ReadTime\\": 120,\\n    \\"WriteTime\\": 120,\\n    \\"SniHost\\": \\"waf.example.com\\",\\n    \\"ResourceGroupId\\": \\"rg-acfm2mkrunv****\\",\\n    \\"Cname\\": \\"kdmqyi3ck7xogegxpiyfpb0fj21mgkxn.****.com\\",\\n    \\"ConnectionTime\\": 5,\\n    \\"LogHeaders\\": [\\n      {\\n        \\"k\\": \\"ALIWAF-TAG\\",\\n        \\"v\\": \\"Yes\\"\\n      }\\n    ],\\n    \\"CloudNativeInstances\\": [\\n      {\\n        \\"RedirectionTypeName\\": \\"ALB\\",\\n        \\"CloudNativeProductName\\": \\"ALB\\",\\n        \\"InstanceId\\": \\"alb-s65nua68wdedsp****\\",\\n        \\"IPAddressList\\": [\\n          \\"39.XX.XX.197\\"\\n        ],\\n        \\"ProtocolPortConfigs\\": [\\n          {\\n            \\"Ports\\": [\\n              80\\n            ],\\n            \\"Protocol\\": \\"http\\"\\n          }\\n        ]\\n      }\\n    ],\\n    \\"HttpPort\\": [\\n      80\\n    ],\\n    \\"Http2Port\\": [\\n      8443\\n    ],\\n    \\"SourceIps\\": [\\n      \\"39.XX.XX.197\\"\\n    ],\\n    \\"HttpsPort\\": [\\n      443\\n    ],\\n    \\"AccessHeaders\\": [\\n      \\"X-Client-IP\\"\\n    ],\\n    \\"Retry\\": false,\\n    \\"Keepalive\\": true,\\n    \\"KeepaliveRequests\\": 1000,\\n    \\"KeepaliveTimeout\\": 15\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeDomainResponse>\\n\\t<RequestId>D827FCFE-90A7-4330-9326-D33C8B4C7726</RequestId>\\n\\t<Domain>\\n\\t\\t<HttpToUserIp>0</HttpToUserIp>\\n\\t\\t<HttpPort>80</HttpPort>\\n\\t\\t<IsAccessProduct>1</IsAccessProduct>\\n\\t\\t<AccessHeaderMode>1</AccessHeaderMode>\\n\\t\\t<ResourceGroupId>rg-acfm2mkrunv****</ResourceGroupId>\\n\\t\\t<AccessHeaders>X-Client-IP</AccessHeaders>\\n\\t\\t<ReadTime>120</ReadTime>\\n\\t\\t<SourceIps>39.XX.XX.197</SourceIps>\\n\\t\\t<IpFollowStatus>1</IpFollowStatus>\\n\\t\\t<ClusterType>0</ClusterType>\\n\\t\\t<LoadBalancing>2</LoadBalancing>\\n\\t\\t<Cname>kdmqyi3ck7xogegxpiyfpb0fj21mgkxn.****.com</Cname>\\n\\t\\t<LogHeaders>\\n\\t\\t\\t<v>Yes</v>\\n\\t\\t\\t<k>ALIWAF-TAG</k>\\n\\t\\t</LogHeaders>\\n\\t\\t<WriteTime>120</WriteTime>\\n\\t\\t<Http2Port>443</Http2Port>\\n\\t\\t<Http2Port>8443</Http2Port>\\n\\t\\t<Version>40</Version>\\n\\t\\t<HttpsRedirect>0</HttpsRedirect>\\n\\t\\t<ConnectionTime>5</ConnectionTime>\\n\\t\\t<AccessType>waf-cloud-dns</AccessType>\\n\\t\\t<HttpsPort>443</HttpsPort>\\n\\t\\t<HttpsPort>8443</HttpsPort>\\n\\t</Domain>\\n</DescribeDomainResponse>\\n","errorExample":""}]',
      'title' => '获取已添加的域名配置信息',
      'summary' => '查询已添加到WAF防护的域名的配置信息。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDomain' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例的ID。
> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-7pp26f1****',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加到WAF防护的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceIps',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名对应的源站服务器IP或服务器回源域名。您只能选择设置源站服务器IP或服务器回源域名中的一种：

- 设置源站服务器IP时，使用`["ip1","ip2",……]`格式表示。最多支持添加20个IP。
- 设置服务器回源域名时，使用`["domain"]`格式表示。只能填写1个域名地址。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）时，需要设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '["39.XX.XX.197"]',
          ),
        ),
        3 => 
        array (
          'name' => 'IsAccessProduct',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名在WAF前是否配置有七层代理（例如高防、CDN等），即客户端访问流量到WAF前是否有经过其他七层代理转发。取值：

- **0**：表示否。
- **1**：表示是。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'AccessHeaderMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF获取客户端真实IP的方式。取值：

- **0**（默认）：表示WAF读取请求头中X-Forwarded-For（XFF）字段的第一个值作为客户端IP。
- **1**：表示WAF读取请求头中由您设置的自定义字段值作为客户端IP。

> 仅在**IsAccessProduct**取值为**1**（表示WAF前有其他七层代理服务）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'AccessHeaders',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置用于获取客户端IP的自定义字段列表，使用`["header1","header2",……]`格式表示。

> 仅在**AccessHeaderMode**取值为**1**（表示WAF读取请求头中由您设置的自定义字段值作为客户端IP）时，需要设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '["X-Client-IP"]',
          ),
        ),
        6 => 
        array (
          'name' => 'LoadBalancing',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回源时采用的负载均衡算法。取值：

- **0**：表示IP Hash算法。
- **1**：表示轮询算法。
- **2**：表示Least Time算法。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        7 => 
        array (
          'name' => 'LogHeaders',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名的流量标记字段和值，用于标记经过WAF处理的流量。

该参数值的格式为`[{"k":"_key_","v":"_value_"}]`。其中，`_key_`表示所指定的自定义请求头部字段，`_value_`表示为该字段设定的值。

通过指定自定义请求头部字段和对应的值，当域名的访问流量经过WAF时，WAF自动在请求头部中添加所设定的自定义字段值作为流量标记，便于后端服务统计相关信息。

> 如果请求中已存在该自定义头部字段，系统将用所设定的流量标记值覆盖请求中该自定义字段的值。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"k":"ALIWAF-TAG","v":"Yes"}]',
          ),
        ),
        8 => 
        array (
          'name' => 'HttpPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HTTP协议端口列表，使用`[port1,port2,……]`格式表示。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）时，需要设置该参数。设置该参数表示域名使用HTTP协议。**HttpPort**与**HttpsPort**不允许同时为空。',
            'type' => 'string',
            'required' => false,
            'example' => '[80]',
          ),
        ),
        9 => 
        array (
          'name' => 'HttpsPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HTTPS协议端口列表，使用`[port1,port2,……]`格式表示。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）时，需要设置该参数。设置该参数表示域名使用HTTPS协议。**HttpPort**与**HttpsPort**不允许同时为空。',
            'type' => 'string',
            'required' => false,
            'example' => '[443]',
          ),
        ),
        10 => 
        array (
          'name' => 'Http2Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HTTP 2.0协议端口列表，使用`[port1,port2,……]`格式表示。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**HttpsPort**取值不为空（表示域名使用HTTPS协议）时，需要设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '[443]',
          ),
        ),
        11 => 
        array (
          'name' => 'HttpToUserIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启HTTP回源。开启HTTP回源后，HTTPS访问请求将通过HTTP协议转发回源站，默认回源端口为80。取值：

- **0**（默认）：表示关闭。
- **1**：表示开启。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**HttpsPort**取值不为空（表示域名使用HTTPS协议）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        12 => 
        array (
          'name' => 'HttpsRedirect',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启HTTPS强制跳转。开启强制跳转后，客户端的HTTP请求将被强制跳转成HTTPS请求，默认跳转端口为443。取值：

- **0**（默认）：表示关闭。
- **1**：表示开启。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**HttpsPort**取值不为空（表示域名使用HTTPS协议）时，需要设置该参数。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        13 => 
        array (
          'name' => 'ClusterType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF防护集群类型。取值：

- **0**（默认）：表示物理集群。
- **1**：表示虚拟集群，即WAF独享集群。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        14 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        15 => 
        array (
          'name' => 'ConnectionTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF独享集群的连接超时时长。单位：秒。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**ClusterType**取值为**1**（表示域名使用WAF独享集群）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
            'default' => '5',
          ),
        ),
        16 => 
        array (
          'name' => 'ReadTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF独享集群的读连接超时时长。单位：秒。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**ClusterType**取值为**1**（表示域名使用WAF独享集群）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '120',
            'default' => '120',
          ),
        ),
        17 => 
        array (
          'name' => 'WriteTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF独享集群的写连接超时时长。单位：秒。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**ClusterType**取值为**1**（表示域名使用WAF独享集群）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '120',
            'default' => '120',
          ),
        ),
        18 => 
        array (
          'name' => 'AccessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名接入方式。取值：

- **waf-cloud-dns**（默认）：表示CNAME接入。

- **waf-cloud-native**：表示透明接入。

',
            'type' => 'string',
            'required' => false,
            'example' => 'waf-cloud-dns',
          ),
        ),
        19 => 
        array (
          'name' => 'CloudNativeInstances',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '透明接入的服务器及端口配置列表。使用JSON数组转化的字符串格式表示。JSON数组中的每个元素是一个结构体，包含以下字段：

- **ProtocolPortConfigs**：JSON Array类型 | 必选 | 表示协议及端口配置列表。JSON数组中的每个元素是一个结构体，包含以下字段：
    - **Ports**：Array类型 | 必选 | 表示端口列表，格式为`[port1,port2,……]`。
    - **Protocol**：String类型 | 必选 | 表示协议类型。取值：**http**、**https**。
- **CloudNativeProductName**：String类型 | 必选 | 表示云产品实例的类型。取值：**ECS**、**SLB**、**ALB**。
- **RedirectionTypeName**：String类型 | 必选 | 表示引流端口的类型。取值：**ECS**（表示ECS端口）、**SLB-L4**（表示SLB四层端口）、**SLB-L7**（表示SLB七层端口）、**ALB**（表示ALB端口）。
- **InstanceId**：String类型 | 必选 | 表示云产品实例的ID。
- **IPAddressList**：Array类型 | 必选 | 表示云产品实例的公网IP列表。格式为`["ip1","ip2",……]`。

> 仅在**AccessType**为**waf-cloud-native**（表示域名使用透明接入方式）时，需要设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"ProtocolPortConfigs":[{"Ports":[80],"Protocol":"http"}],"RedirectionTypeName":"ALB","InstanceId":"alb-s65nua68wdedsp****","IPAddressList":["182.XX.XX.113"],"CloudNativeProductName":"ALB"}]',
          ),
        ),
        20 => 
        array (
          'name' => 'IpFollowStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源站服务器地址同时包含IPv4和IPv6地址时，是否开启IPv4/IPv6回源协议跟随。开启回源协议跟随后，WAF将来自IPv4地址的请求转发到IPv4源站、将来自IPv6地址的请求转发到IPv6源站。取值：

- **0**（默认）：表示关闭。
- **1**：表示开启。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        21 => 
        array (
          'name' => 'SniStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置是否开启回源SNI。回源SNI表示WAF转发客户端请求到源站服务器，在与源站进行TLS握手时，通过SNI扩展字段（Server Name Indicator extension）指定要访问的主机，并与该主机建立HTTPS连接。如果您的源站服务器有多个虚拟主机（对应不同域名），则您需要开启回源SNI。取值：
- **0**：表示关闭。
- **1**：表示开启。

中国内地WAF实例默认关闭SNI回源；海外地区WAF实例默认开启SNI回源。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**HttpsPort**取值不为空（表示域名使用HTTPS协议）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        22 => 
        array (
          'name' => 'SniHost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义SNI扩展字段的值。如果不设置该参数，则默认使用请求头中**Host**字段的值作为SNI扩展字段的值。

一般情况无需自定义SNI，除非您的业务有特殊配置要求，希望WAF在回源请求中使用与实际请求Host不一致的SNI（即此处设置的自定义SNI）。

> 仅在**SniStatus**取值为**1**（表示开启SNI回源）时，需要设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'waf.example.com',
          ),
        ),
        23 => 
        array (
          'name' => 'Retry',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF回源失败时，是否重试。取值：

- **true**（默认）：表示重试。
- **false**：表示不重试。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        24 => 
        array (
          'name' => 'Keepalive',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否保持长连接。取值：

- **true**（默认）：表示保持长连接。

- **false**：表示不保持长连接。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        25 => 
        array (
          'name' => 'KeepaliveRequests',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '复用长连接的请求个数。取值范围：60~1000，单位：个。

> 开启长连接后，复用多少个长连接。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '60',
            'example' => '1000',
            'default' => '1000',
          ),
        ),
        26 => 
        array (
          'name' => 'KeepaliveTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空闲长连接超时时间，取值范围：1~60，默认15，单位：秒。

> 复用的长连接空闲多少长后释放。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '3600',
            'minimum' => '1',
            'example' => '15',
            'default' => '15',
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
              'Cname' => 
              array (
                'description' => 'WAF为域名分配的CNAME地址。

> 仅当域名使用CNAME接入方式（请求参数**AccessType**取值为**waf-cloud-dns**）时，返回该参数。',
                'type' => 'string',
                'example' => 'mmspx7qhfvnfzggheh1g2wnbhog66vcv.****.com',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Cname\\": \\"mmspx7qhfvnfzggheh1g2wnbhog66vcv.****.com\\",\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<CreateDomainResponse>\\n\\t<Cname>mmspx7qhfvnfzggheh1g2wnbhog66vcv.****.com</Cname>\\n\\t<RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n</CreateDomainResponse>","errorExample":""}]',
      'title' => '添加域名配置信息',
      'summary' => '将域名接入WAF实例进行防护。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDomain' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-7pp26f1****',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-7pp26f1****',
          ),
        ),
        2 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要操作的域名。

> 您可以调用[DescribeDomainNames](~~86373~~)查询所有已添加到WAF防护的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceIps',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名对应的源站服务器IP或服务器回源域名。您只能选择设置源站服务器IP或服务器回源域名中的一种：

- 设置源站服务器IP时，使用`["ip1","ip2",……]`格式表示。最多支持添加20个IP。
- 设置服务器回源域名时，使用`["domain"]`格式表示。只能填写1个域名地址。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）时，需要设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '["39.XX.XX.197"]',
          ),
        ),
        4 => 
        array (
          'name' => 'LoadBalancing',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回源时采用的负载均衡算法。取值：

- **0**：表示IP Hash算法。
- **1**：表示轮询算法。
- **2**：表示Least Time算法。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'HttpPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HTTP协议端口列表，使用`[port1,port2,……]`格式表示。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）时，需要设置该参数。设置该参数表示域名使用HTTP协议。**HttpPort**与**HttpsPort**不允许同时为空。',
            'type' => 'string',
            'required' => false,
            'example' => '[80]',
          ),
        ),
        6 => 
        array (
          'name' => 'HttpsPort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HTTPS协议端口列表，使用`[port1,port2,……]`格式表示。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）时，需要设置该参数。设置该参数表示域名使用HTTPS协议。**HttpPort**与**HttpsPort**不允许同时为空。',
            'type' => 'string',
            'required' => false,
            'example' => '[443]',
          ),
        ),
        7 => 
        array (
          'name' => 'Http2Port',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'HTTP 2.0协议端口列表，使用`[port1,port2,……]`格式表示。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**HttpsPort**取值不为空（表示域名使用HTTPS协议）时，需要设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '[443]',
          ),
        ),
        8 => 
        array (
          'name' => 'HttpsRedirect',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启HTTPS强制跳转。开启强制跳转后，客户端的HTTP请求将被强制跳转成HTTPS请求，默认跳转端口为443。取值：

- **0**（默认）：表示关闭。
- **1**：表示开启。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**HttpsPort**取值不为空（表示域名使用HTTPS协议）时，需要设置该参数。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        9 => 
        array (
          'name' => 'HttpToUserIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启HTTP回源。开启HTTP回源后，HTTPS访问请求将通过HTTP协议转发回源站，默认回源端口为80。取值：

- **0**（默认）：表示关闭。
- **1**：表示开启。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**HttpsPort**取值不为空（表示域名使用HTTPS协议）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        10 => 
        array (
          'name' => 'IsAccessProduct',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名在WAF前是否配置有七层代理（例如高防、CDN等），即客户端访问流量到WAF前是否有经过其他七层代理转发。取值：

- **0**：表示否。
- **1**：表示是。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
          ),
        ),
        11 => 
        array (
          'name' => 'AccessHeaderMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF获取客户端真实IP的方式。取值：

- **0**（默认）：表示WAF读取请求头中X-Forwarded-For（XFF）字段的第一个值作为客户端IP。
- **1**：表示WAF读取请求头中由您设置的自定义字段值作为客户端IP。

> 仅在**IsAccessProduct**取值为**1**（表示WAF前有其他七层代理服务）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        12 => 
        array (
          'name' => 'AccessHeaders',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置用于获取客户端IP的自定义字段列表，使用`["header1","header2",……]`格式表示。

> 仅在**AccessHeaderMode**取值为**1**（表示WAF读取请求头中由您设置的自定义字段值作为客户端IP）时，需要设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '["X-Client-IP"]',
          ),
        ),
        13 => 
        array (
          'name' => 'LogHeaders',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名的流量标记字段和值，用于标记经过WAF处理的流量。

该参数值的格式为`[{"k":"_key_","v":"_value_"}]`。其中，`_key_`表示所指定的自定义请求头部字段，`_value_`表示为该字段设定的值。

通过指定自定义请求头部字段和对应的值，当域名的访问流量经过WAF时，WAF自动在请求头部中添加所设定的自定义字段值作为流量标记，便于后端服务统计相关信息。

> 如果请求中已存在该自定义头部字段，系统将用所设定的流量标记值覆盖请求中该自定义字段的值。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"k":"ALIWAF-TAG","v":"Yes"}]',
          ),
        ),
        14 => 
        array (
          'name' => 'ClusterType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF防护集群类型。取值：

- **0**（默认）：表示物理集群。
- **1**：表示虚拟集群，即WAF独享集群。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        15 => 
        array (
          'name' => 'ConnectionTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF独享集群的连接超时时长。单位：秒。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**ClusterType**取值为**1**（表示使用WAF独享集群）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
            'default' => '5',
          ),
        ),
        16 => 
        array (
          'name' => 'ReadTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF独享集群的读连接超时时长。单位：秒。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**ClusterType**取值为**1**（表示使用WAF独享集群）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '120',
            'default' => '120',
          ),
        ),
        17 => 
        array (
          'name' => 'WriteTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF独享集群的写连接超时时长。单位：秒。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**ClusterType**取值为**1**（表示使用WAF独享集群）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '120',
            'default' => '120',
          ),
        ),
        18 => 
        array (
          'name' => 'AccessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名接入方式。取值：

- **waf-cloud-dns**（默认）：表示CNAME接入。

- **waf-cloud-native**：表示透明接入。

',
            'type' => 'string',
            'required' => false,
            'example' => 'waf-cloud-dns',
          ),
        ),
        19 => 
        array (
          'name' => 'CloudNativeInstances',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '透明接入的服务器及端口配置列表。使用JSON数组转化的字符串格式表示。JSON数组中的每个元素是一个结构体，包含以下字段：

- **ProtocolPortConfigs**：JSON Array类型 | 必选 | 表示协议及端口配置列表。JSON数组中的每个元素是一个结构体，包含以下字段：
    - **Ports**：Array类型 | 必选 | 表示端口列表，格式为`[port1,port2,……]`。
    - **Protocol**：String类型 | 必选 | 表示协议类型。取值：**http**、**https**。
- **CloudNativeProductName**：String类型 | 必选 | 表示云产品实例的类型。取值：**ECS**、**SLB**、**ALB**。
- **RedirectionTypeName**：String类型 | 必选 | 表示引流端口的类型。取值：**ECS**（表示ECS端口）、**SLB-L4**（表示SLB四层端口）、**SLB-L7**（表示SLB七层端口）、**ALB**（表示ALB端口）。
- **InstanceId**：String类型 | 必选 | 表示云产品实例的ID。
- **IPAddressList**：Array类型 | 必选 | 表示云产品实例的公网IP列表。格式为`["ip1","ip2",……]`。

> 仅在**AccessType**取值为**waf-cloud-native**（表示域名使用透明接入方式）时，需要设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"ProtocolPortConfigs":[{"Ports":[80],"Protocol":"http"}],"RedirectionTypeName":"ALB","InstanceId":"alb-s65nua68wdedsp****","IPAddressList":["182.XX.XX.113"],"CloudNativeProductName":"ALB"}]',
          ),
        ),
        20 => 
        array (
          'name' => 'IpFollowStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '源站服务器地址同时包含IPv4和IPv6地址时，是否开启IPv4/IPv6回源协议跟随。开启回源协议跟随后，WAF将来自IPv4地址的请求转发到IPv4源站、将来自IPv6地址的请求转发到IPv6源站。取值：

- **0**（默认）：表示关闭。
- **1**：表示开启。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        21 => 
        array (
          'name' => 'SniStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置是否开启回源SNI。回源SNI表示WAF转发客户端请求到源站服务器，在与源站进行TLS握手时，通过SNI扩展字段（Server Name Indicator extension）指定要访问的主机，并与该主机建立HTTPS连接。如果您的源站服务器有多个虚拟主机（对应不同域名），则您需要开启回源SNI。取值：
- **0**：表示关闭。
- **1**：表示开启。

中国内地WAF实例默认关闭SNI回源；海外地区WAF实例默认开启SNI回源。

> 仅在**AccessType**取值为**waf-cloud-dns**（表示域名使用CNAME接入方式）且**HttpsPort**取值不为空（表示域名使用HTTPS协议）时，需要设置该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        22 => 
        array (
          'name' => 'SniHost',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义SNI扩展字段的值。如果不设置该参数，则默认使用请求头中**Host**字段的值作为SNI扩展字段的值。

一般情况无需自定义SNI，除非您的业务有特殊配置要求，希望WAF在回源请求中使用与实际请求Host不一致的SNI（即此处设置的自定义SNI）。

> 仅在**SniStatus**取值为**1**（表示开启SNI回源）时，需要设置该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'waf.example.com',
          ),
        ),
        23 => 
        array (
          'name' => 'Retry',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF回源失败时，是否重试。取值：

- **true**（默认）：表示重试。

- **false**：表示不重试。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        24 => 
        array (
          'name' => 'Keepalive',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否保持长连接。取值：

- **true**（默认）：表示保持长连接。

- **false**：表示不保持长连接。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        25 => 
        array (
          'name' => 'KeepaliveRequests',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '复用长连接的请求个数。取值范围：60~1000，单位：个。

> 开启长连接后，复用多少个长连接。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '60',
            'example' => '1000',
            'default' => '1000',
          ),
        ),
        26 => 
        array (
          'name' => 'KeepaliveTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空闲长连接超时时间，取值范围：1~60，默认15，单位：秒。

> 复用的长连接空闲多久后释放。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '3600',
            'minimum' => '1',
            'example' => '60',
            'default' => '15',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyDomainResponse>\\r\\n\\t<RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\r\\n</ModifyDomainResponse>","errorExample":""}]',
      'title' => '修改指定域名配置信息',
      'summary' => '修改已创建的域名配置。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDomain' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。

> 您可以通过调用[DescribeInstanceInfo](~~140857~~)接口查看当前WAF实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf_elasticity-cn-0xldbqt****',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已接入WAF的域名名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteDomainResponse>\\r\\n\\t<RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\r\\n</DeleteDomainResponse>","errorExample":""}]',
      'title' => '删除指定域名配置信息',
      'summary' => '删除指定域名配置信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeCertificates' => 
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
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)获取当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-zz11sr5****',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询关联SSL证书的域名。

不设置该参数表示查询所有域名关联的SSL证书。',
            'type' => 'string',
            'required' => false,
            'example' => 'www.aliyundoc.com',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。

不设置该参数表示默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzz2e****pp7i',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'ECF65091-3704-55D5-BC88-EC208B0E238C',
              ),
              'Certificates' => 
              array (
                'description' => '域名关联的SSL证书信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'IsUsing' => 
                    array (
                      'description' => '是否是该域名当前所使用的证书。取值：

- **true**：表示是。
- **false**：表示否。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'CertificateName' => 
                    array (
                      'description' => '证书名称。',
                      'type' => 'string',
                      'example' => '*.aliyundoc.com',
                    ),
                    'CertificateId' => 
                    array (
                      'description' => '证书ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2329260',
                    ),
                    'CommonName' => 
                    array (
                      'description' => '证书绑定的域名。',
                      'type' => 'string',
                      'example' => '*.aliyundoc.com',
                    ),
                    'Sans' => 
                    array (
                      'description' => '证书的SAN扩展属性列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '证书绑定的其他域名。',
                        'type' => 'string',
                        'example' => '*.aliyundoc.com',
                      ),
                    ),
                    'EndTime' => 
                    array (
                      'description' => '证书到期时间，格式为Unix时间戳（UTC时间），单位为毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1971273600000',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ECF65091-3704-55D5-BC88-EC208B0E238C\\",\\n  \\"Certificates\\": [\\n    {\\n      \\"IsUsing\\": false,\\n      \\"CertificateName\\": \\"*.aliyundoc.com\\",\\n      \\"CertificateId\\": 2329260,\\n      \\"CommonName\\": \\"*.aliyundoc.com\\",\\n      \\"Sans\\": [\\n        \\"*.aliyundoc.com\\"\\n      ],\\n      \\"EndTime\\": 1971273600000\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeCertificatesResponse>\\n    <RequestId>ECF65091-3704-55D5-BC88-EC208B0E238C</RequestId>\\n    <Certificates>\\n        <IsUsing>false</IsUsing>\\n        <CertificateName>*.aliyundoc.com</CertificateName>\\n        <CertificateId>2329260</CertificateId>\\n        <CommonName>*.aliyundoc.com</CommonName>\\n        <Sans>*.aliyundoc.com</Sans>\\n    </Certificates>\\n</DescribeCertificatesResponse>","errorExample":""}]',
      'title' => '获取指定域名可选证书',
      'summary' => '获取指定域名可选的已有证书，即已在SSL证书中进行管理的证书。',
      'description' => '本接口用于查询域名关联的SSL证书列表（通过阿里云SSL证书服务购买、已上传到SSL证书服务进行托管），例如，证书的ID、名称、关联的域名、SAN（Subject Alternative Name）扩展属性等。请注意，为了确保系统稳定系，对单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeCertMatchStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已接入WAF的域名名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Certificate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证书文件内容。',
            'type' => 'string',
            'required' => true,
            'example' => '-----BEGIN CERTIFICATE----- 62EcYPWd2Oy1vs6MTXcJSfN9*****9fmxWr2BFN2XbahgnsSXM48ixZJ4krc+1M+j2kcubVpsE2cgHdj4v8H6jUz9Ji4mr7vMNS6dXv8PUkl/qoDeNGCNdyTS5NIL5ir+g92cL8IGOkjgvhlqt9vc65Cgb4mL+n5+DV9uOyTZTW/MojmlgfUekC2xiXa54nxJf17Y1TADGSbyJbsC0Q9nIrHsPl8YKkvRWvIAqYxXZ7wRwWWmv4TMxFhWRiNY7yZIo2ZUhl02SIDNggIEeg== -----END CERTIFICATE-----',
          ),
        ),
        2 => 
        array (
          'name' => 'PrivateKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '私钥文件内容。',
            'type' => 'string',
            'required' => true,
            'example' => '-----BEGIN RSA PRIVATE KEY----- DADTPZoOHd9WtZ3UKHJTRgNQ****Qn2bqdKHop+B/dn/4VZL7Jt8zSDGM9sTMThLyvsmLQKBgQCr+ujntC1kN6pGBj2Fw2l/EA/W3rYEce2tyhjgmG7rZ+A/jVE9fld5sQra6ZdwBcQJaiygoIYoaMF2EjRwc0qwHaluq0C15f6ujSoHh2e+D5zdmkTg/3NKNjqNv6xA2gYpinVDzFdZ9Zujxvuh9o4Vqf0YF8bv5UK5G04RtKadOw== -----END RSA PRIVATE KEY-----',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。

> 您可以通过调用[DescribeInstanceInfo](~~140857~~)接口查看当前WAF实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf_elasticity-cn-0xldbqt****',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。

不设置该参数表示默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
              'MatchStatus' => 
              array (
                'description' => '证书与私钥内容是否匹配。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"MatchStatus\\": false,\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeCertMatchStatusResponse>\\n\\t<MatchStatus>false</MatchStatus>\\n\\t<RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n</DescribeCertMatchStatusResponse>","errorExample":""}]',
      'title' => '检查域名上传的证书和私钥是否匹配',
      'summary' => '检查指定域名配置上传的证书和私钥信息是否匹配。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateCertificate' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已接入WAF的域名名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'www.example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Certificate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证书文件内容。',
            'type' => 'string',
            'required' => false,
            'example' => '-----BEGIN CERTIFICATE----- 62EcYPWd2Oy1vs6MTXcJSfN9Z7rZ9fmxWr2BFN2XbahgnsSXM48ixZJ4krc+1M+j2kcubVpsE2cgHdj4v8H6jUz9Ji4mr7vMNS6dXv8PUkl/qoDeNGCNdyTS5NIL5ir+g92cL8IGOkjgvhlqt9vc65Cgb4mL+n5+DV9uOyTZTW/MojmlgfUekC2xiXa54nxJf17Y1TADGSbyJbsC0Q9nIrHsPl8YKkvRWvIAqYxXZ7wRwWWmv4TMxFhWRiNY7yZIo2ZUhl02SIDNggIEeg== -----END CERTIFICATE-----',
            'default' => 'cn',
          ),
        ),
        2 => 
        array (
          'name' => 'PrivateKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证书对应的私钥文件内容。',
            'type' => 'string',
            'required' => true,
            'example' => '-----BEGIN RSA PRIVATE KEY----- DADTPZoOHd9WtZ3UKHJTRgNQmioPQn2bqdKHop+B/dn/4VZL7Jt8zSDGM9sTMThLyvsmLQKBgQCr+ujntC1kN6pGBj2Fw2l/EA/W3rYEce2tyhjgmG7rZ+A/jVE9fld5sQra6ZdwBcQJaiygoIYoaMF2EjRwc0qwHaluq0C15f6ujSoHh2e+D5zdmkTg/3NKNjqNv6xA2gYpinVDzFdZ9Zujxvuh9o4Vqf0YF8bv5UK5G04RtKadOw== -----END RSA PRIVATE KEY-----',
          ),
        ),
        3 => 
        array (
          'name' => 'CertificateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证书名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'CertName',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。

> 您可以通过调用[DescribeInstanceInfo](~~140857~~)接口查看当前WAF实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf_elasticity-cn-0xldbqt****',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
              'CertificateId' => 
              array (
                'description' => '系统自动生成的证书记录ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2329260',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CertificateId\\": 2329260,\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<CreateCertificateResponse>\\n\\t<CertificateId>2329260</CertificateId>\\n\\t<RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n</CreateCertificateResponse>","errorExample":""}]',
      'title' => '为已添加域名上传证书及私钥信息',
      'summary' => '为已添加的域名配置记录上传证书及私钥信息。',
      'description' => '> 您也可以调用该接口为指定域名配置更新已上传的证书及私钥信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateCertificateByCertificateId' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加SSL证书的域名。

> 您可以调用[DescribeDomainList](~~255880~~)查询所有已接入WAF防护的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'CertificateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加的证书的ID。

> 您可以调用[DescribeCertificates](~~160783~~)查询域名关联的所有SSL证书的ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '3384669',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-zz11sr5****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
              'CertificateId' => 
              array (
                'description' => '已添加的证书的ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3384669',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CertificateId\\": 3384669,\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateCertificateByCertificateIdResponse>\\n    <CertificateId>3384669</CertificateId>\\n    <RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n</CreateCertificateByCertificateIdResponse>","errorExample":""}]',
      'title' => '根据证书ID为指定域名创建证书',
      'summary' => '调用CreateCertificateByCertificateId接口根据证书ID为指定域名创建证书。',
      'description' => '# 使用说明

本接口用于通过证书ID，为指定域名添加SSL证书。

调用本接口前，您可以调用[DescribeCertificates](~~160783~~)查询域名关联的所有SSL证书的ID。

# QPS限制

本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDomainBasicConfigs' => 
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
            'description' => 'WAF实例的ID。
> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-tl32ast****',
          ),
        ),
        1 => 
        array (
          'name' => 'DomainKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置域名关键字，查询包含指定关键字的域名配置。

不设置该参数表示查询所有域名配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'aliyundoc',
          ),
        ),
        2 => 
        array (
          'name' => 'AccessType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置域名接入模式，查询使用指定方式接入WAF防护的域名配置。取值：

- **waf-cloud-dns**：表示CNAME接入。
- **waf-cloud-native**：表示透明接入。

不设置该参数表示查询所有域名配置。',
            'type' => 'string',
            'required' => false,
            'example' => 'waf-cloud-dns',
          ),
        ),
        3 => 
        array (
          'name' => 'CloudNativeProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置源站类型，查询在透明接入方式下通过指定源站类型接入WAF防护的域名配置。取值：
- **0**：表示云服务器ECS实例。
- **1**：表示传统型负载均衡CLB实例。
- **2**：表示应用型负载均衡ALB实例。

不设置该参数表示查询所有域名配置。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页面的页码。默认值为**1**。',
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
            'description' => '分页查询时，设置每页包含域名配置的数量。默认值为**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网站域名在资源管理服务中所属的资源组ID。

不设置该参数表示默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfm2pz25js****',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '查询到的域名配置的总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
              ),
              'DomainConfigs' => 
              array (
                'description' => '域名配置详情列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '域名配置的状态。取值：

- **0**：表示无效（已删除）。
- **1**：表示有效（创建成功）。
- **10**：表示创建中。
- **11**：表示创建失败。
- **20**：表示删除中。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Domain' => 
                    array (
                      'description' => '域名。',
                      'type' => 'string',
                      'example' => 'www.aliyundoc.com',
                    ),
                    'Owner' => 
                    array (
                      'description' => '域名配置的来源。取值固定为**WAF**，表示通过Web应用防火墙服务添加。',
                      'type' => 'string',
                      'example' => 'WAF',
                    ),
                    'CcMode' => 
                    array (
                      'description' => 'CC安全防护功能的模式。取值：

- **0**：表示**防护**模式。
- **1**：表示**防护-紧急**模式。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'CcStatus' => 
                    array (
                      'description' => 'CC安全防护功能的状态。取值：

- **0**：表示关闭。
- **1**：表示开启。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'AccessType' => 
                    array (
                      'description' => '域名接入模式。取值：

- **waf-cloud-dns**：表示CNAME接入。
- **waf-cloud-native**：表示透明接入。',
                      'type' => 'string',
                      'example' => 'waf-cloud-dns',
                    ),
                    'Version' => 
                    array (
                      'description' => '当前配置的版本号。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'AclStatus' => 
                    array (
                      'description' => '自定义防护策略功能的状态。取值：

- **0**：表示关闭。
- **1**：表示开启。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'WafStatus' => 
                    array (
                      'description' => '规则防护引擎功能的状态。取值：

- **0**：表示关闭。
- **1**：表示开启。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'WafMode' => 
                    array (
                      'description' => '规则防护引擎功能的模式。取值：

- **0**：表示**拦截**模式。
- **1**：表示**告警**模式。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
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
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbbiden',
            'errorMessage' => 'User not authorized to operate on the specified resource.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\",\\n  \\"DomainConfigs\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"Domain\\": \\"www.aliyundoc.com\\",\\n      \\"Owner\\": \\"WAF\\",\\n      \\"CcMode\\": 0,\\n      \\"CcStatus\\": 1,\\n      \\"AccessType\\": \\"waf-cloud-dns\\",\\n      \\"Version\\": 0,\\n      \\"AclStatus\\": 1,\\n      \\"WafStatus\\": 1,\\n      \\"WafMode\\": 0\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDomainBasicConfigsResponse>\\n    <TotalCount>1</TotalCount>\\n    <RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n    <DomainConfigs>\\n        <Status>1</Status>\\n        <Domain>www.aliyundoc.com</Domain>\\n        <Owner>WAF</Owner>\\n        <CcMode>0</CcMode>\\n        <CcStatus>1</CcStatus>\\n        <Version>0</Version>\\n        <AclStatus>1</AclStatus>\\n        <WafStatus>1</WafStatus>\\n        <WafMode>0</WafMode>\\n    </DomainConfigs>\\n</DescribeDomainBasicConfigsResponse>","errorExample":""}]',
      'title' => '获取域名配置记录的防护设置状态',
      'summary' => '调用DescribeDomainBasicConfigs查询已接入WAF防护的网站域名的基本配置。',
      'description' => '# 使用说明

本接口用于分页查询已接入WAF防护的网站域名的基本配置（以下简称域名配置），例如，域名配置的状态、默认防护模块（包括规则防护引擎、CC安全防护、自定义防护策略）的状态和模式等。

# QPS限制

本接口的单用户QPS限制为50次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDomainAdvanceConfigs' => 
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
            'description' => 'WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-2r427ng****',
          ),
        ),
        1 => 
        array (
          'name' => 'DomainList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询配置详情的域名。支持同时设置多个域名，多个域名间使用半角逗号（,）分隔。

> 您可以调用[DescribeDomainList](~~255880~~)查询所有已接入WAF防护的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.aliyundoc.com',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网站域名在资源管理服务中所属的资源组ID。

不设置该参数表示默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
              ),
              'DomainConfigs' => 
              array (
                'description' => '域名的详细配置信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Domain' => 
                    array (
                      'description' => '域名。',
                      'type' => 'string',
                      'example' => 'www.aliyundoc.com',
                    ),
                    'Profile' => 
                    array (
                      'description' => '域名配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Http2Port' => 
                        array (
                          'description' => 'HTTP 2.0端口列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'HTTP 2.0端口。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '443',
                          ),
                        ),
                        'Ipv6Status' => 
                        array (
                          'description' => '是否开启IPv6安全防护。取值：

- **0**：表示关闭。

- **1**：表示开启。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'HttpPort' => 
                        array (
                          'description' => 'HTTP端口列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'HTTP端口。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '80',
                          ),
                        ),
                        'GSLBStatus' => 
                        array (
                          'description' => '是否启用智能负载均衡。取值：

- **off**：表示否。

- **on**：表示是。',
                          'type' => 'string',
                          'example' => 'on',
                        ),
                        'Rs' => 
                        array (
                          'description' => '源站服务器地址列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '源站服务器地址。',
                            'type' => 'string',
                            'example' => '38.XX.XX.42',
                          ),
                          'example' => '["39.XX.XX.197"]',
                        ),
                        'VipServiceStatus' => 
                        array (
                          'description' => '当前使用的WAF实例IP（或WAF虚拟集群IP）的服务状态。取值：

- **0**：表示正常。

- **1**：表示正在进行流量清洗。

- **2**：表示处于黑洞状态。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'ClusterType' => 
                        array (
                          'description' => 'WAF实例的集群类别。取值：

- **0**（默认）：表示物理集群。
- **1**：表示虚拟集群，即WAF独享集群。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'ExclusiveVipStatus' => 
                        array (
                          'description' => '是否使用独享IP。取值：

- **0**：表示否。

- **1**：表示是。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Cname' => 
                        array (
                          'description' => 'WAF实例为该域名配置分配的CNAME地址。',
                          'type' => 'string',
                          'example' => '****dsbpkt75zeiok5mta2j5l7hggcrm.****.com',
                        ),
                        'CertStatus' => 
                        array (
                          'description' => '证书状态（即HTTPS协议状态）。取值：

- **0**：表示异常，例如，未上传证书、上传的证书无效。

- **1**：表示正常，已上传证书且证书有效。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'HttpsPort' => 
                        array (
                          'description' => 'HTTPS端口列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'HTTPS端口。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '443',
                          ),
                        ),
                        'ResolvedType' => 
                        array (
                          'description' => 'CNAME解析记录类型。取值：

- **-1**：表示指向源站服务器。

- **0**：表示指向WAF实例IP。

- **1**：表示指向WAF虚拟集群IP。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\",\\n  \\"DomainConfigs\\": [\\n    {\\n      \\"Domain\\": \\"www.aliyundoc.com\\",\\n      \\"Profile\\": {\\n        \\"Http2Port\\": [\\n          443\\n        ],\\n        \\"Ipv6Status\\": 1,\\n        \\"HttpPort\\": [\\n          80\\n        ],\\n        \\"GSLBStatus\\": \\"on\\",\\n        \\"Rs\\": [\\n          \\"38.XX.XX.42\\"\\n        ],\\n        \\"VipServiceStatus\\": 0,\\n        \\"ClusterType\\": 0,\\n        \\"ExclusiveVipStatus\\": 0,\\n        \\"Cname\\": \\"****dsbpkt75zeiok5mta2j5l7hggcrm.****.com\\",\\n        \\"CertStatus\\": 1,\\n        \\"HttpsPort\\": [\\n          443\\n        ],\\n        \\"ResolvedType\\": 0\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeDomainAdvanceConfigsResponse>\\n    <RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n    <DomainConfigs>\\n        <Domain>www.aliyundoc.com</Domain>\\n        <Profile>\\n            <Http2Port>443</Http2Port>\\n            <Ipv6Status>1</Ipv6Status>\\n            <HttpPort>80</HttpPort>\\n            <GSLBStatus>on</GSLBStatus>\\n            <Rs>38.XX.XX.42</Rs>\\n            <VipServiceStatus>0</VipServiceStatus>\\n            <ClusterType>0</ClusterType>\\n            <ExclusiveVipStatus>0</ExclusiveVipStatus>\\n            <Cname>****dsbpkt75zeiok5mta2j5l7hggcrm.****.com</Cname>\\n            <CertStatus>1</CertStatus>\\n            <HttpsPort>443</HttpsPort>\\n            <ResolvedType>0</ResolvedType>\\n        </Profile>\\n    </DomainConfigs>\\n</DescribeDomainAdvanceConfigsResponse>","errorExample":""}]',
      'title' => '获取已添加的域名配置记录的详细信息',
      'summary' => '调用DescribeDomainAdvanceConfigs查询已添加到WAF防护的域名的详细配置。',
      'description' => '# 使用说明

本接口用于查询已添加到WAF防护的域名的详细配置，例如，CNAME地址、源站服务器地址、HTTP和HTTPS端口列表等。

# QPS限制

本接口的单用户QPS限制为50次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。
',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDomainList' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfm2pz25js****',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)，查看当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-7pp26f1****',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的域名名称。

您可以设置该参数，模糊查询某个域名是否已接入WAF防护。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，返回第几页数据。默认值为**1**，表示返回第1页数据。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，每页包含多少条结果。默认值为**10**，表示每页包含10条结果。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'IsSub',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的域名类型。取值：

- **0**（默认）：表示查询所有域名（包含具体域名和泛域名）。
- **1**：表示仅查询具体域名。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
            'default' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'DomainNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要查询的域名列表。

您可以设置该参数，模糊查询多个域名是否已接入WAF防护。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要查询的域名。',
              'type' => 'string',
              'required' => false,
              'example' => 'example.com	
',
            ),
            'required' => false,
            'example' => 'example.com',
            'maxItems' => 100,
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '查询到的域名的数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '592E866F-6C05-4E7C-81DE-B4D8E86B91EF',
              ),
              'DomainNames' => 
              array (
                'description' => '查询到的域名列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '域名。',
                  'type' => 'string',
                  'example' => 'www.example.com',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"592E866F-6C05-4E7C-81DE-B4D8E86B91EF\\",\\n  \\"DomainNames\\": [\\n    \\"www.example.com\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeDomainListResponse>\\r\\n\\t<TotalCount>2</TotalCount>\\r\\n\\t<RequestId>592E866F-6C05-4E7C-81DE-B4D8E86B91EF</RequestId>\\r\\n\\t<DomainNames>www.example.com</DomainNames>\\r\\n\\t<DomainNames>test.example.com</DomainNames>\\r\\n</DescribeDomainListResponse>","errorExample":""}]',
      'title' => '查询域名资产信息',
      'summary' => '调用DescribeDomainList分页查询已添加到WAF防护的域名列表。',
      'description' => '> [DescribeDomainNames](~~86373~~)接口也可以用于查询已添加到WAF防护的所有域名，但是不支持分页查询（即只能一次性返回所有域名）。对于域名数量较多的场景，推荐您调用该接口进行分页查询（分页显示结果并支持按条件查询）。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeProtectionModuleMode' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已添加的域名名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'DefenseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防护功能模块，取值：

- **waf**：正则防护引擎

- **dld**：大数据深度学习引擎

- **ac_cc**：CC安全防护

- **antifraud**：数据风控

- **normalized**：主动防御',
            'type' => 'string',
            'required' => true,
            'example' => 'waf',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。

> 您可以通过调用[DescribeInstanceInfo](~~140857~~)接口查看当前WAF实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf_elasticity-cn-0xldbqt****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名在资源管理产品中所属的资源组ID。默认为空，即属于默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'default' => 'cn-hangzhou',
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
                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
              ),
              'Mode' => 
              array (
                'description' => '防护模式。

> 根据所指定的防护模块（**DefenseType**）不同，防护模式（**Mode**）值的含义有所不同。

- 正则防护引擎（**waf**）

    - **0**：表示拦截模式。

    - **1**：表示告警模式。

- 大数据深度学习引擎（**dld**）

    - **0**：表示告警模式。

    - **1**：表示拦截模式。

- CC安全防护（**ac_cc**）

    - **0**：表示防护模式。

    - **1**：表示防护-紧急模式。

- 数据风控（**antifraud**）

    - **0**：表示告警模式。

    - **1**：表示拦截模式。

    - **2**：表示强拦截模式。

- 主动防御（**normalized**）

    - **0**：表示告警模式。

    - **1**：表示拦截模式。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Mode\\": 1,\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeProtectionModuleModeResponse>\\n\\t<Mode>1</Mode>\\n\\t<RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n</DescribeProtectionModuleModeResponse>","errorExample":""}]',
      'title' => '获取域名当前的防护模式',
      'summary' => '获取指定域名配置当前的防护模式，如正则防护引擎、大数据深度学习引擎、CC安全防护、数据风控、主动防御。',
      'description' => '您可以通过设置**DefenseType**参数值指定防护功能模块。具体参数值的含义，请参见请求参数**DefenseType**的描述。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDomainIpv6Status' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。

> 您可以通过调用[DescribeInstanceInfo](~~140857~~)接口查看当前WAF实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-mp9153****',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已添加的域名名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用IPv6安全防护，取值：

- **0**：关闭

- **1**：开启',
            'type' => 'string',
            'required' => true,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。

不设置该参数表示默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfm2pz25js****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyDomainIpv6StatusResponse>\\r\\n\\t<RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\r\\n</ModifyDomainIpv6StatusResponse>","errorExample":""}]',
      'title' => '开启或关闭域名配置的IPv6安全防护功能',
      'summary' => '开启或关闭指定域名配置的IPv6安全防护功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeProtectionModuleStatus' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的网站域名。

> 您可以调用[DescribeDomainList](~~255880~~)查询所有已接入WAF防护的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'DefenseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的WAF防护功能模块。取值：

- **waf**：表示规则防护引擎。
- **dld**：表示深度学习引擎。
- **tamperproof**：表示网站防篡改。
- **dlp**：表示防敏感信息泄漏。
- **normalized**：表示主动防御。
- **bot_crawler**：表示合法爬虫。
- **bot_intelligence**：表示爬虫威胁情报。
- **antifraud**：表示数据风控。
- **bot_algorithm**：表示智能算法。
- **bot_wxbb**：表示App防护。
- **bot_wxbb_pkg**：表示App防护中的版本防护。
- **ac_cc**：表示CC安全防护。
- **ac_blacklist**：表示IP黑名单。
- **ac_highfreq**：表示扫描防护中的高频Web攻击封禁。
- **ac_dirscan**：表示扫描防护中的目录遍历防护。
- **ac_scantools**：表示扫描防护中的扫描工具封禁。
- **ac_collaborative**：表示扫描防护中的协同防御。
- **ac_custom**：表示自定义防护策略。

> 只支持设置一个功能模块。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-zz11sr5****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2hw7****ftqi',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
              'ModuleStatus' => 
              array (
                'description' => '防护功能模块的启用状态。取值：

- **0**：表示功能模块已关闭。
- **1**：表示功能模块已开启。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ModuleStatus\\": 1,\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeProtectionModuleStatusResponse>\\n    <ModuleStatus>1</ModuleStatus>\\n    <RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n</DescribeProtectionModuleStatusResponse>","errorExample":""}]',
      'title' => '查询WAF各防护功能状态',
      'summary' => '查询WAF各防护功能的状态，包括Web入侵防护、数据安全、高级防护、Bot管理、访问控制或限流等模块。',
      'description' => '# 使用说明

本接口用于查询指定的WAF防护功能模块的启用状态。您可以通过设置**DefenseType**参数值指定要查询的某个防护功能模块。具体参数值的含义，请参见请求参数**DefenseType**的描述。

# QPS限制

本接口的单用户QPS限制为50次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyProtectionModuleStatus' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要操作的网站域名。

> 您可以调用[DescribeDomainList](~~255880~~)查询所有已接入WAF防护的域名。

',
            'type' => 'string',
            'required' => true,
            'example' => 'www.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'DefenseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要操作的WAF防护功能模块。取值：

- **waf**：表示规则防护引擎。
- **dld**：表示深度学习引擎。
- **tamperproof**：表示网站防篡改。
- **dlp**：表示防敏感信息泄漏。
- **normalized**：表示主动防御。
- **bot_crawler**：表示合法爬虫。
- **bot_intelligence**：表示爬虫威胁情报。
- **antifraud**：表示数据风控。
- **bot_algorithm**：表示智能算法。
- **bot_wxbb**：表示App防护。
- **bot_wxbb_pkg**：表示App防护中的版本防护。
- **ac_cc**：表示CC安全防护。
- **ac_blacklist**：表示IP黑名单。
- **ac_highfreq**：表示扫描防护中的高频Web攻击封禁。
- **ac_dirscan**：表示扫描防护中的目录遍历防护。
- **ac_scantools**：表示扫描防护中的扫描工具封禁。
- **ac_collaborative**：表示扫描防护中的协同防御。
- **ac_custom**：表示自定义防护策略。

> 只支持设置一个功能模块。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf',
          ),
        ),
        2 => 
        array (
          'name' => 'ModuleStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置防护功能模块的开关状态。取值：

- **0**：表示关闭功能模块。
- **1**：表示开启功能模块。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要操作的WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-zz11sr5****',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。

不设置该参数表示默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekztsixucs****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示海外地区。
',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyProtectionModuleStatusResponse>\\n    <RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n</ModifyProtectionModuleStatusResponse>","errorExample":""}]',
      'title' => '打开或关闭指定WAF防护功能',
      'summary' => '打开或关闭指定的WAF防护功能，如Web入侵防护、数据安全、高级防护、Bot管理、访问控制或限流。',
      'description' => '# 使用说明

本接口用于开启或关闭指定的WAF防护功能模块。

您可以通过设置**DefenseType**参数值指定要操作的某个防护功能模块。具体参数值的含义，请参见请求参数**DefenseType**的描述。

# QPS限制

本接口的单用户QPS限制为20次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。
',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyProtectionModuleMode' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已添加的域名名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'DefenseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防护功能模块，取值：

- **waf**：正则防护引擎

- **dld**：大数据深度学习引擎

- **ac_cc**：CC安全防护

- **antifraud**：数据风控

- **normalized**：主动防御',
            'type' => 'string',
            'required' => true,
            'example' => 'waf',
          ),
        ),
        2 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防护模式。

> 根据所指定的防护模块（**DefenseType**）不同，防护模式（**Mode**）值的含义有所不同。

- 正则防护引擎（**waf**）
    - **0**：表示拦截模式。
    - **1**：表示告警模式。
- 大数据深度学习引擎（**dld**）
    - **0**：表示告警模式。
    - **1**：表示拦截模式。
- CC安全防护（**ac_cc**）
    - **0**：表示防护模式。
    - **1**：表示防护-紧急模式。
- 数据风控（**antifraud**）
    - **0**：表示告警模式。
    - **1**：表示拦截模式。
    - **2**：表示强拦截模式。
- 主动防御（**normalized**）
    - **1**：表示拦截模式。
    - **0**：表示告警模式。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。

> 您可以通过调用[DescribeInstanceInfo](~~140857~~)接口查看当前WAF实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf_elasticity-cn-0xldbqt****',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '
WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyProtectionModuleModeResponse>\\r\\n\\t<RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\r\\n</ModifyProtectionModuleModeResponse>","errorExample":""}]',
      'title' => '修改WAF防护模式',
      'summary' => '修改WAF防护模式，如正则防护引擎、大数据深度学习引擎、CC安全防护、数据风控、主动防御等模块。',
      'description' => '您可以通过设置**DefenseType**参数值指定防护功能模块。具体参数值的含义，请参见请求参数**DefenseType**的描述。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeProtectionModuleRules' => 
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
            'description' => '分页查询时，设置每页返回规则的数量。默认值为**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，设置当前页面的页面。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的域名。具体说明如下：

-  **DefenseType**取值为**ng_account**以外的值（即查询除账户安全规则配置以外的其他网站防护配置）时，必须设置该参数。
    > 您可以调用[DescribeDomainList](~~255880~~)查询所有已添加到WAF防护的域名。

- **DefenseType**取值是**ng_account**（即查询账户安全规则配置）时，不要设置该参数，否则会返回错误信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'www.aliyundoc.com',
          ),
        ),
        3 => 
        array (
          'name' => 'DefenseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的防护功能配置的类型。取值：

- **waf-codec**：表示查询规则防护引擎解码设置。

- **tamperproof**：表示查询网站防篡改规则配置。

- **dlp**：表示查询防敏感信息泄漏规则配置。

- **ng_account**：表示查询账户安全规则配置。

- **bot_crawler**：表示查询合法爬虫规则配置。

- **bot_intelligence**：表示查询爬虫威胁情报规则配置。

- **antifraud**：表示查询数据风控防护请求配置。

- **antifraud_js**：表示查询数据风控JS插入页面配置。

- **bot_algorithm**：表示查询智能算法规则配置。

- **bot_wxbb_pkg**：表示查询App防护的版本防护规则。

- **bot_wxbb**：表示查询App防护的路径防护规则。

- **ac_blacklist**：表示查询IP黑名单规则配置。

- **ac_highfreq**：表示查询高频Web攻击IP自动封禁规则配置。

- **ac_dirscan**：表示查询目录扫描防护规则配置。

- **ac_custom**：表示查询自定义防护策略规则配置。

- **whitelist**：表示查询白名单规则配置。',
            'type' => 'string',
            'required' => true,
            'example' => 'ac_highfreq',
          ),
        ),
        4 => 
        array (
          'name' => 'Query',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置规则的过滤和排序，以JSON格式字符串表达，具体包含以下参数：

> 该参数必须使用Base64编码格式，请按照以下参数说明构造JSON格式字符串后将其转换为Base64编码格式。

- **filter**：JSON格式字符串 | 可选 | 过滤条件。以JSON字符串格式描述，具体包含以下参数：

    - **nameId**：String类型 | 可选 | 查询规则ID等于该参数值或规则名称中包含该参数值的规则。

    - **scene**：String类型 | 可选 | 设置要查询的防护模块，取值与**DefenseType**参数相同。

    - **enabled**：Boolean类型 | 可选 | 设置要查询的规则状态，取值：

         - **false**：表示已禁用。

        - **true**：表示已启用。

    - **status**：Integer类型 | 可选 | 设置要查询的规则状态，与**enabled**参数含义相同，取值：

        - **0**：表示已禁用。

        - **1**：表示已启用。

    - **ruleId**：Integer类型 | 可选 | 设置要查询的规则ID。

    - **ruleIdList**：Array类型 | 可选 | 设置要查询的规则ID列表，多个规则ID间用半角逗号（,）分隔。

    - **sceneList**：Array类型 | 可选 | 设置要查询的防护模块列表，取值与**DefenseType**参数相同，多个防护模块间用半角逗号（,）分隔。

    - **originList**：Array类型 | 可选 | 设置规则来源，取值为**system**（表示系统自动生成）和**custom**（表示自定义创建），设置多个规则来源时用半角逗号（,）分隔。

    - **tag**：String类型 | 可选 | 当设置的查询防护模块为白名单（**whitelist**）时，可通过设置该参数查询不检测指定模块的白名单规则。**tag**参数的取值和含义可参考返回参数中白名单规则配置中的描述。

    - **origin**：String类型 | 可选 | 当设置的查询防护模块为白名单（**whitelist**）时，可通过设置该参数查询WAF智能规则托管功能自动添加的白名单规则。取值固定为**ai**。不设置该参数表示查询所有白名单规则（包括您手动添加的规则和智能规则托管功能自动添加的规则）。

    - **category**：String类型 | 可选 | 当设置的查询防护模块为白名单（**whitelist**）时，可通过设置该参数查询指定白名单分类，取值：

        - **waf**：表示网站白名单。

        - **ws**：表示Web入侵防护白名单。

        - **ac**：表示访问控制/限流白名单。

        - **ds**：表示数据安全白名单。

- **orderBy**：String类型 | 可选 | 排序字段，取值：

    - **action**：表示规则处置动作，该参数值仅在查询自定义防护策略规则时有效。

    - **gmt_modified**（默认）：表示最后一次修改时间。

    - **name**：表示规则名称。

    - **status**：表示规则状态。

- **desc**：Boolean类型 | 可选 | 是否倒序排列，取值：

    - **false**：表示正序排列。

    - **true**（默认）：表示倒序排列。',
            'type' => 'string',
            'required' => false,
            'example' => 'e2ZpbHRlcjp7InJ1bGVJZCI6NDI3NTV9LG9yZGVyQnk6ImdtdF9tb2RpZmllZCIsZGVzYzp0cnVlfQ==',
          ),
        ),
        5 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置规则名称的语言属性，取值：

- **zh**：表示规则名称为中文。
- **en**：表示规则名称为英文。
- **ja**：表示规则名称为日文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf_elasticity-cn-0xldbqt****',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。

不设置该参数表示默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfm2pz25js****',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '查询到的规则配置的总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
              ),
              'Rules' => 
              array (
                'description' => '规则配置信息，包含规则ID、创建时间、状态等。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '规则状态。取值：

- **0**：表示已禁用。

- **1**：表示已启用。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'Time' => 
                    array (
                      'description' => '规则创建时间。使用时间戳表示，单位：秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1570700044',
                    ),
                    'Content' => 
                    array (
                      'description' => '规则配置内容，以一系列参数构造的JSON格式转化成字符串。

> 根据所指定的防护功能模块配置（**DefenseType**）不同，具体涉及的参数有所不同。详细信息，请参见**Content**参数具体说明。',
                      'type' => 'object',
                      'example' => '{"count":60,"interval":60,"ttl":300}',
                    ),
                    'Version' => 
                    array (
                      'description' => '当前规则配置的版本号。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'RuleId' => 
                    array (
                      'description' => '规则ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '42755',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\",\\n  \\"Rules\\": [\\n    {\\n      \\"Status\\": 1,\\n      \\"Time\\": 1570700044,\\n      \\"Content\\": {\\n        \\"count\\": 60,\\n        \\"interval\\": 60,\\n        \\"ttl\\": 300\\n      },\\n      \\"Version\\": 2,\\n      \\"RuleId\\": 42755\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribeProtectionModuleRulesResponse>\\n\\t<TotalCount>1</TotalCount>\\n\\t<Rules>\\n\\t\\t<Version>2</Version>\\n\\t\\t<Status>1</Status>\\n\\t\\t<Content>\\n\\t\\t\\t<count>60</count>\\n\\t\\t\\t<interval>60</interval>\\n\\t\\t\\t<ttl>300</ttl>\\n\\t\\t</Content>\\n\\t\\t<RuleId>42755</RuleId>\\n\\t\\t<Time>1570700044</Time>\\n\\t</Rules>\\n\\t<RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n</DescribeProtectionModuleRulesResponse>","errorExample":""}]',
      'title' => '查询WAF防护功能规则配置记录',
      'summary' => '查询WAF防护功能规则配置记录，如Web入侵防护、数据安全、Bot管理、访问控制或限流、网站白名单。',
      'description' => '
# 使用说明

本接口用于分页查询指定WAF防护功能模块（包括Web入侵防护、数据安全、Bot管理、访问控制或限流、网站白名单等模块）的规则配置记录。

您可以通过设置**DefenseType**参数值指定防护功能模块配置。具体参数值的含义，请参见请求参数**DefenseType**的描述。

# QPS限制

本接口的单用户QPS限制为50次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => '**Content参数具体说明** 

 - 规则防护引擎解码设置（**waf-codec**）对应的JSON字符串中包含以下参数：

    - **codecList**：String类型 | 必选 | 启用的解码配置项。

    - **示例**

    ```
    {
        "codecList":["url","base64"]
    }
    ```

- 网站防篡改规则配置（**tamperproof**）对应的JSON字符串中包含以下参数：

    - **uri**：String类型 | 必选 | 所需防护的具体URL。
    - **name**：String类型 | 必选 | 规则名称。
    - **status**：Integer类型 | 可选 | 规则的防护状态：
        - **0**（默认）：表示不生效。
        - **1**：表示生效。

    - **示例**

    ```
    {
        "name":"example",
        "uri":"http://www.example.com/example",
        "status":1
    }
    ```

- 防敏感信息泄露规则配置（**dlp**）对应的JSON字符串中包含以下参数：

    - **name**：String类型 | 必选 | 规则名称。
    - **conditions**：Array类型 | 必选 | 以JSON字符串格式描述匹配条件，支持设置最多两条匹配条件且条件间的关系为并且。其中包含以下具体参数：

        - **key**：匹配项。
            - **0**：表示防护的URL。
            - **10**：表示敏感信息。
            - **11**：表示响应码。
        - **operation**：匹配逻辑，取值固定为**1**，表示包含。
        - **value**：以JSON字符串描述匹配条件值，支持设置多个条件值。其中包含以下具体参数：
            - **v**：仅适用于匹配项（**key**）为URL（**0**）或响应码（**11**）的场景。
                - URL：当`"key":0`时，参数值为URL地址。
                - 响应码：当`"key":11`，参数取值包括**400**、**401**、**402**、**403**、**404**、**405-499**、**500**、**501**、**502**、**503**、**504**、**505-599**。
            - **k**：仅适用于匹配项（**key**）为敏感信息（**10**）的场景，取值：
                - **100**：表示身份证。
                - **101**：表示信用卡。
                - **102**：表示电话号码。
                - **103**：表示默认敏感词。
    - **action**：匹配动作。
        - **3**：表示告警。
        - **10**：表示敏感信息过滤，该动作仅适用于包含敏感信息（`"key":10`）的匹配条件场景。
        - **11**：表示返回系统内置拦截页面，该动作仅适用于包含响应码（`"key":11`）的匹配条件场景。

    - **示例**

  ```
  {
	"name":"example",
	"conditions":[{"key":11,"operation":1,"value":[{"v":401}]},{"key":"0","operation":1,"value":[{"v":"www.example.com"}]}],
	"action":3
  }
  ```

- 账户安全规则配置（**ng_account**）对应的JSON字符串中包含以下参数：

    - **domain**：String类型 | 必选 | 防护的域名。

    - **method**：String类型 | 必选 | 检测的请求方式，包括POST、GET、PUT、DELETE。支持设定多个请求方式，以英文逗号“,”分隔。

    - **url_path**：String类型 | 必选 | 检测接口，以URL路径表示，必须以正斜杠（/）开头。

    - **account_left**：String类型 | 必选 | 账号参数名。

    - **password_left**：String类型 | 可选 | 密码参数名。

    - **action**：String类型 | 必选 | 防护动作，取值：
        - **monitor**：表示预警。
        - **block**：表示拦截。

    - **示例**

    ```
    {
        "domain":"www.example.com",
        "method":"GET,POST",
        "url_path":"/example",
        "account_left":"aaa",
        "action":"monitor"
    }
    ``` 

- 合法爬虫规则配置（**bot_crawler**）对应的JSON字符串中包含以下参数：

    - **Status**：Integer类型 | 必选 | 是否启用，取值：
        - 0：表示禁用。
        - 1：表示启用。
    - **Version**：Integer类型 | 必选 | 规则版本号。
    - **Content**：String类型 |  必选 | 规则详细信息，以JSON字符串格式进行描述，具体包含以下参数：
        - **name**：String类型 |  必选 | 规则名称。
        - **conditions**：Array类型 | 可选 | 防护路径条件。在合法爬虫规则配置中固定为空，表示全路径。
        - **expressions**：Array类型 | 必选 | 规则条件表达式，以更易读的方式表示所有规则条件信息。
        - **bypassTags**：String类型 | 必选 | 不检测的模块。在合法爬虫规则配置中固定为**antibot**，表示Bot管理模块。
        - **tags**：Array类型 | 必选 | 规则所属防护功能模块。在合法爬虫规则配置中固定为`["antibot"]`，表示Bot管理模块。
    - **RuleId**：Integer类型 | 必选 | 规则ID。
    - **Time**：String类型 | 必选 | 规则最新修改时间，以秒级时间戳格式表示。

    - **示例**
    ```
    {
        "Status":0,
        "Version":1,
        "Content":{
            "name":"百度蜘蛛白名单",
            "conditions":[],
            "expressions":["remote_addr inl \'ioc.210d077a-cf34-49ad-a9b3-0aa48095c595\' && uri =^ \'/\'"],
            "bypassTags":"antibot",
            "tags":["antibot"]
        },
	"RuleId":20384,
	"Time":1585818161
    }
    ```
- 爬虫威胁情报规则配置（**bot_intelligence**）对应的JSON字符串中包含以下参数：

    - **Status**：Integer类型 | 必选 | 是否启用，取值：
        - 0：表示禁用。
        - 1：表示启用。
    - **Version**：Integer类型 | 必选 | 规则版本号。
    - **Content**：String类型 |  必选 | 规则详细信息，以JSON字符串格式进行描述，具体包含以下参数：
        - **name**：String类型 |  必选 | 规则名称。
        - **action**：String类型 | 必选 | 处置动作，取值：
            - **monitor**：表示观察。
            - **captcha**：表示滑块。
            - **captcha_strict**：表示严格滑块。
            - **js**：表示JavaScript校验。
            - **block**：表示阻断。
        - **urlList**：Array类型 | 必选 | 防护路径，最多指定十个防护路径。以JSON字符串方式表示，具体包含以下参数：
            - **mode**：String类型 | 必选 | 匹配方式，与路径关键字（**url**）参数结合指定防护路径。可选值：**eq**（精准匹配）、**prefix-match**（前缀匹配）、**regex**（正则匹配）。
            - **url**：String类型 | 必选 | 路径关键字，必须以正斜杠（/）开头。
        - **keyType**：String类型 | 必选 | 情报库类型，包含IP库（**ip**）、指纹库（**ua**）两种类型。
    - **RuleId**：Integer类型 | 必选 | 规则ID。
    - **Time**：String类型 | 必选 | 规则最新修改时间，以秒级时间戳格式表示。

    - **示例**
    ```
    {
        "Status":1,
        "Version":1,
        "Content":{
            "name":"IDC IP库-腾讯云",
            "action":"captcha_strict",
            "urlList":[{"mode":"prefix-match","url":"/indexa"},	{"mode":"regex","url":"/"},{"mode":"eq","url":"/"}],
            "keyType":"ip"
        },
        "RuleId":922777,
        "Time":1585907112
    }
    ```

- 数据风控防护请求规则配置（**antifraud**）对应的JSON字符串中包含以下参数：

    - **uri**：String类型 | 必选 | 具体的防护请求URL。
    
    - **示例**

    ```
    {
        "uri": "http://1.example.com/example"
    }
    ```

- 数据风控JS插入页面配置（**antifraud_js**）对应的JSON字符串中包含以下参数：

    - **uri**：String类型 | 必选 | 需要插入数据风控JS页面的URL，系统将为所指定的URL路径下的所有页面插入数据风控JS。

    - **示例**

    ```
    {
        "uri": "/example/example"
    }
    ```

- 智能算法规则配置（**bot_algorithm**）对应的JSON字符串中包含以下参数：

    - **Status**：Integer类型 | 必选 | 是否启用，取值：
        - 0：表示禁用。
        - 1：表示启用。
    - **Version**：Integer类型 | 必选 | 规则版本号。
    - **Content**：String类型 |  必选 | 规则详细信息，以JSON字符串格式进行描述，具体包含以下参数：
        - **name**：String类型 |  必选 | 规则名称。
        - **timeInterval**：Integer类型 | 必选 | 检测周期，可选值：30、60、120、300、600，单位秒。
        - **action**：String类型 | 必选 | 处置动作，取值：
            - **monitor**：表示观察。
            - **captcha**：表示滑块。
            - **js**：表示JavaScript校验。
            - **block**：表示阻断。选择阻断作为处置动作时，必须设置阻断时长（**blocktime**）参数。
        - **blocktime**：Integer类型 | 可选 | 阻断时长，单位分钟，取值范围：1~600。
        - **algorithmName**：String类型 | 必选 | 算法名称，取值：
            - **RR**：表示专项资源爬虫识别算法。
            - **PR**：表示定向路径爬虫识别算法。
            - **DPR**： 表示参数轮询爬虫识别算法。
            - **SR**：表示动态IP爬虫识别算法。
            - **IND**：表示代理设备爬虫识别算法。
            - **Periodicity**：表示周期性爬虫识别算法。
        - **config**：String类型 | 必选 | 算法配置信息，以JSON字符串格式表示。算法配置信息中的具体子参数与所选择的算法名称（**algorithmName**）相关。
            - 专项资源爬虫识别算法（**RR**）对应的配置信息应包含以下子参数：
                - **resourceType**：Integer类型 | 可选 | 请求的资源类型，取值：
                    - **1**：表示动态资源类型。
                    - **2**：表示静态资源类型。
                    - **-1**：表示自定义资源类型。选择自定义资源组时，需要再设置**extensions**参数，以字符串格式指定具体的资源后缀名，多个后缀名间以英文逗号“,”分隔，例如`css,jpg,xls`。
                - **minRequestCountPerIp**：Integer类型 | 必选 | 检测周期中检测IP的范围，大于等于一定访问请求数量的IP才会被检测。通过该参数指定访问请求数量的最小值，取值范围：5~10000。
                - **minRatio**：Float类型 | 必选 | 风险判定条件，即IP访问请求中访问指定资源类型的占比阈值，超过阈值后判定为风险，取值范围：0.01~1。
            - 定向路径爬虫识别算法（**PR**）对应的配置信息应包含以下子参数：
                - **keyPathConfiguration**：Array类型 | 可选 | 请求的路径信息，支持指定最多10条路径，只在使用定向路径爬虫识别算法时需设置该子参数。以JSON字符串格式表示，具体包含以下参数：
                    - **method**：String类型 | 必选 | 请求方法，可选值：**POST**、**GET**、**PUT**、**DELETE**、**HEAD**、**OPTIONS**。
                    - **url**：String类型 | 必选 | 请求路径关键字，必须以正斜杠（/）开头。
                    - **matchType**：String类型 | 必选 | 匹配方式，与请求路径关键字（**url**）参数结合指定请求路径。可选值：**all**（精准匹配）、**prefix**（前缀匹配）、**regex**（正则匹配）。
                - **minRequestCountPerIp**：Integer类型 | 必选 | 检测周期中检测IP的范围，大于等于一定访问请求数量的IP才会被检测。通过该参数指定访问请求数量的最小值，取值范围：5~10000。
                - **minRatio**：Float类型 | 必选 | 风险判定条件，即IP访问请求中访问指定路径的占比阈值（对应定向路径爬虫识别算法），超过阈值后判定为风险，取值范围：0.01~1。
            - 参数轮询爬虫识别算法（**DPR**）对应的配置信息应包含以下子参数：
                - **method**：String类型 | 必选 | 请求方法，可选值：**POST**、**GET**、**PUT**、**DELETE**、**HEAD**、**OPTIONS**。
                - **urlPattern**：String类型 | 必选 | 关键参数路径，必须以正斜杠（/）开头。用{}表示关键参数，配置多个{}时将拼接这些参数作为关键参数。例如，`/company/{}/{}/{}/user.php?uid={}`。
                - **minRequestCountPerIp**：Integer类型 | 必选 | 检测周期中检测IP的范围，大于等于一定访问请求数量的IP才会被检测。通过该参数指定访问请求数量的最小值，取值范围：5~10000。
                - **minRatio**：Float类型 | 必选 | 风险判定条件，即IP访问请求中不同关键参数值的计数占比阈值，超过阈值后判定为风险，取值范围：0.01~1。
            - 动态IP爬虫识别算法（**SR**）对应的配置信息应包含以下子参数：
                - **maxRequestCountPerSrSession**：Integer类型 | 必选 | 通过设定每个会话中存在的最小请求次数定义异常会话，即单个会话中的请求次数小于该值即判定为异常会话。取值范围：1~8。
                - **minSrSessionCountPerIp**：Integer类型 | 必选 | 风险判定条件，即IP访问请求中存在的异常会话数量阈值，单个IP访问请求中的异常会话次数超过该值后判定为风险。取值范围：5~300。
            - 代理设备爬虫识别算法（**IND**）对应的配置信息应包含以下子参数：
                - **minIpCount**：Integer类型 | 必选 | 恶意设备判定条件，即设备使用WIFI关联的IP变换个数阈值，超过该阈值后判定为风险，取值范围：5~500。
                - **keyPathConfiguration**：Array类型 | 可选 | 检测路径信息，支持指定最多10条路径。以JSON字符串格式表示，具体包含以下参数：
                    - **method**：String类型 | 必选 | 请求方法，可选值：**POST**、**GET**、**PUT**、**DELETE**、**HEAD**、**OPTIONS**。
                    - **url**：String类型 | 必选 | 检测路径关键字，必须以正斜杠（/）开头。
                    - **matchType**：String类型 | 必选 | 匹配方式，与检测路径关键字（**url**）参数结合指定请求路径。可选值：**all**（精准匹配）、**prefix**（前缀匹配）、**regex**（正则匹配）。
            - 周期性爬虫识别算法（**Periodicity**）对应的配置信息应包含以下子参数：
                - **minRequestCountPerIp**：Integer类型 | 必选 | 检测周期中检测IP的范围，大于等于一定访问请求数量的IP才会被检测。通过该参数指定访问请求数量的最小值，取值范围：5~10000。
                - **level**：Integer类型 | 必选 | 风险判定等级，即访问IP的周期性特征的明显程度，取值：
                    - **0**：表示明显。
                    - **1**：表示中等。
                    - **2**：表示较弱。
    - **RuleId**：Integer类型 | 必选 | 规则ID。
    - **Time**：String类型 | 必选 | 规则最新修改时间，以秒级时间戳格式表示。

    - **示例**
    ```
    {
        "Status":1,
        "Version":1,
        "Content":{
            "name":"动态IP",
            "timeInterval":60,
            "action":"warn",
            "algorithmName":"IND",
            "config":{"minIpCount":5,"keyPathConfiguration":[{"method":"GET","matchType":"prefix","url":"/index"}]}
        },
        "RuleId":940180,
        "Time":1585832957
    }
    ```

- App防护的版本防护规则配置（**bot_wxbb_pkg**）对应的JSON字符串中包含以下参数：

    - **Version**：Integer类型 | 必选 | 规则版本号。
    - **Content**：String类型 |  必选 | 规则详细信息，以JSON字符串格式进行描述，具体包含以下参数：
        - **name**：String类型 | 必选 | 规则名称。
        - **action**：String类型 | 必选 | 处置动作，取值：
            - **test**：表示观察。
            - **close**：表示阻断。
        - **nameList**：Array类型 | 必选 | 合法版本信息，最多指定五条规则。以JSON字符串方式表示，具体包含以下参数：
            - **name**：String类型 | 必选 | 合法包名称。
            - **signList**：Array类型 | 必选 | 对应的包签名，最多包含15个，以半角逗号（,）分隔。
    - **RuleId**：Integer类型 | 必选 | 规则ID。
    - **Time**：String类型 | 必选 | 规则最新修改时间，以秒级时间戳格式表示。

    - **示例**
    ```
    {
        "Version":0,
        "Content":{
            "nameList":[{"signList":["xxxxxx","xxxxx","xxxx","xx"],"name":"apk-xxxx"}],
            "name":"test",
            "action":"close"
        },
        "RuleId":271,
        "Time":1585836143
    }
    ```
- App防护的路径防护规则配置（**bot_wxbb**）对应的JSON字符串中包含以下参数：

    - **Version**：Integer类型 | 必选 | 规则版本号。
    - **Content**：String类型 |  必选 | 规则详细信息，以JSON字符串格式进行描述，具体包含以下参数：
        - **name**：String类型 | 必选 | 规则名称。
        - **uri**：String类型 | 必选 | 防护路径，必须以正斜杠（/）开头。
        - **matchType**：String类型 | 必选 | 匹配方式。可选值：**all**（精准匹配）、**prefix**（前缀匹配）、**regex**（正则匹配）。
        - **arg**：String类型 | 必选 | 参数包含，与匹配方式（**matchType**）参数结合指定防护路径配置。
        - **action**：String类型 | 必选 | 处置动作，取值：
            - **test**：表示观察。
            - **close**：表示阻断。
        - **wxbbVmpFieldType**：Integer类型 | 可选 | 自定义加签字段类型。如果规则中未设置自定义加签字段，则不返回该参数。取值：
            - **0**：表示header。
            - **1**：表示参数。
            - **2**：表示cookie。
        - **wxbbVmpFieldValue**：String类型 | 可选 | 自定义加签字段值。如果规则中未设置自定义加签字段，则不返回该参数。
        - **blockInvalidSign**：Boolean类型 | 必选 | 是否对非法签名执行处置动作。
        - **blockProxy**：Boolean类型 | 必选 | 是否对代理执行处置动作。
        - **blockSimulator**：Boolean类型 | 必选 | 是否对模拟器执行处置动作。
    - **RuleId**：Integer类型 | 必选 | 规则ID。
    - **Time**：String类型 | 必选 | 规则最新修改时间，以秒级时间戳格式表示。

    - **示例**
    ```
    {
        "Version":6,
        "Content":{
            "blockInvalidSign":true,
            "wxbbVmpFieldValue":"test",
            "blockSimulator":true,
            "matchType":"all",
            "arg":"test",
            "name":"test",
            "action":"close",
            "blockProxy":true,
            "uri":"/index",
            "wxbbVmpFieldType":1
        },
        "RuleId":2585,
        "Time":1586241849
    }
    ```

- IP黑名单规则配置（**ac_blacklist**）对应的JSON字符串中包含以下参数：

    - **empty**：Boolean类型 | 必选 | 黑名单是否为空。
    - **remoteAddr**：Array类型 | 必选 | 黑名单中的IP。
    - **area**：String类型 | 必选 | 以JSON格式字符串表示区域封禁规则，包含国家编码（countryCodes）、区域编码（regionCodes）、是否放行（not）具体参数。由于API接口中以编码形式返回封禁国家和区域，建议您在控制台中查看具体的封禁国家和区域。


    - **示例**
    ```
    {
        "empty":false,
        "remoteAddr":["1.XX.XX.1","12.XX.XX.2"]
    }
    ```

- 高频Web攻击IP自动封禁规则配置（**ac_highfreq**）对应的JSON字符串中包含以下参数：

    - **interval**：Integer类型 | 必选 | 检测时间范围，单位秒，取值范围：5~1800。
    - **ttl**：Integer类型 | 必选 | 封禁IP时长，单位秒，取值范围：60~86400。
    - **count**：Integer类型 | 必选 | Web攻击次数阈值，检测时间范围内攻击次数超过该值，触发封禁。取值范围：2~50000。

    - **示例**
    ```
    {
    	"interval":60,
    	"ttl":300,
    	"count":60
     }
    ```

- 目录扫描防护规则配置（**ac_dirscan**）对应的JSON字符串中包含以下参数：

    - **interval**：Integer类型 | 必选 | 检测时间范围，单位秒，取值范围：5~1800。
    - **ttl**：Integer类型 | 必选 | 封禁IP时长，单位秒。
    - **count**：Integer类型 | 必选 | 访问次数阈值，取值范围：2~50000。
    - **weight**：Float类型 | 必选 | 404响应码占比阈值（百分比），取值范围：`(0,1]`。
    - **uriNum**：Integer类型 | 必选 | 扫描目录数量阈值，取值范围：2~50000。

    - **示例**
    ```
    {
    	"interval":10,
    	"ttl":1800,
    	"count":50,
    	"weight":0.7,
        "uriNum":20 
    }
    ```

- 自定义防护策略规则配置（**ac_custom**），通过其对应JSON字符串中的**scene**参数来设置ACL访问控制规则和CC攻击防护规则。

    - 自定义ACL访问控制规则（**scene**参数值为**custom_acl**）对应的JSON字符串中包含以下参数：

        - **name**：String类型 | 必选 | 规则名称。
        - **scene**：String类型 | 必选 | 防护类型。设置ACL访问控制规则时，取值固定为**custom_acl**。
        - **action**：String类型 | 必选 | 处置动作，取值：
            - **monitor**：表示观察。
            - **captcha**：表示滑块。
            - **captcha_strict**：表示严格滑块。
            - **js**：表示JS验证。
            - **block**：表示阻断。
        - **conditions**：Array类型 | 必选 | 匹配条件，以JSON字符串格式进行描述，具体包含以下参数：
            - **key**：匹配字段，取值：**URL**、**IP**、**Referer**、**User-Agent**、**Params**、**Cookie**、**Content-Type**、**Content-Length**、**X-Forwarded-For**、**Post-Body**、**Http-Method**、**Header**、**URLPath**。
            - **opCode**：逻辑符，取值：
                - **11**：表示等于。
                - **10**：表示不等于。
                - **41**：表示等于多值之一。
                - **50**：表示不等于任一值。
                - **1**：表示包含。
                - **0**：表示不包含。
                - **51**：表示包含多值之一。
                - **52**：表示不包含任一值。
                - **82**：表示存在。
                - **2**：表示不存在。
                - **21**：表示长度等于。
                - **22**：表示长度大于。
                - **20**：表示长度小于。
                - **60**：表示正则不匹配。
                - **61**：表示正则匹配。
                - **72**：表示前缀匹配。
                - **81**：表示后缀匹配。
                - **80**：表示内容为空。
            - **values**：匹配内容。根据需要设置相应的内容，以String类型表示。
            - **contain**：同样表示规则条件的逻辑符，取值与**opCode**参数相同。 

            - **opValue**：逻辑符的简写含义，您可以参考**opCode**参数取值说明了解详细信息。

            - **pattern**：同样表示逻辑符的简写含义，取值与**opValue**参数相同。
                     
        - **expressions**：Array类型 | 必选 | 规则条件表达式，以更易读的方式表示所有规则条件信息。

        - **示例**
        ```
        {
            "name":"test2",
            "action":"monitor",
            "conditions":[{"contain":1,"values":"login","pattern":"contain","opCode":1,"opValue":"contain","key":"URL"}],
            "expressions":["request_uri contains \'login\' "],
            "scene":"custom_acl"
        }
        ```

    - 自定义CC攻击防护规则（**scene**参数值为**custom_cc**）对应的JSON字符串中包含以下参数：

        - **name**：String类型 | 必选 | 规则名称。
        - **scene**：String类型 | 必选 | 防护类型。设置CC攻击防护规则时，取值固定为**custom_cc**。
        - **conditions**：Array类型 | 必选 | 匹配条件，以JSON字符串格式进行描述，具体包含以下参数：
            - **key**：匹配字段，取值：**URL**、**IP**、**Referer**、**User-Agent**、**Params**、**Cookie**、**Content-Type**、**Content-Length**、**X-Forwarded-For**、**Post-Body**、**Http-Method**、**Header**、**URLPath**。
            - **opCode**：逻辑符，取值：
                - **11**：表示等于。
                - **10**：表示不等于。
                - **41**：表示等于多值之一。
                - **50**：表示不等于任一值。
                - **1**：表示包含。
                - **0**：表示不包含。
                - **51**：表示包含多值之一。
                - **52**：表示不包含任一值。
                - **82**：表示存在。
                - **2**：表示不存在。
                - **21**：表示长度等于。
                - **22**：表示长度大于。
                - **20**：表示长度小于。
                - **60**：表示正则不匹配。
                - **61**：表示正则匹配。
                - **72**：表示前缀匹配。
                - **81**：表示后缀匹配。
                - **80**：表示内容为空。
            - **values**：匹配内容。根据需要设置相应的内容，以String类型表示。
            - **contain**：同样表示规则条件的逻辑符，取值与**opCode**参数相同。 
            - **opValue**：逻辑符的简写含义，您可以参考**opCode**参数取值说明了解详细信息。
            - **pattern**：同样表示逻辑符的简写含义，取值与**opValue**参数相同。
        - **expressions**：Array类型 | 必选 | 规则条件表达式，以更易读的方式表示所有规则条件信息。

        - **action**：String类型 | 必选 | 处置动作，取值：
            - **monitor**：表示观察。
            - **captcha**：表示滑块。
            - **captcha_strict**：表示严格滑块。
            - **js**：表示JS验证。
            - **block**：表示阻断。
    	- **ratelimit**：JSON格式 | 必选 | 频率设置。以JSON字符串格式进行描述，具体包含以下参数：
            - **target**：String类型 | 必选 | 统计对象类型，取值：
                - **remote_addr**：表示IP。
                - **cookie.acw_tc**：表示Session。
                - **queryarg**：表示自定义参数。选择自定义参数时，必须在**subkey**参数中设置需要统计的自定义参数名称。
                - **cookie**：表示自定义cookie。选择自定义cookie时，您必须在**subkey**参数中设置需要统计的cookie内容。
                - **header**：表示自定义header。选择自定义header时，您必须在**subkey**参数中设置需要统计的header内容。
            - **subkey**：String类型 | 可选 | 当**target**参数值为**cookie**、**header**或**queryarg**时，您必须在**subkey**参数中设置对应的信息。
            - **interval**： Integer类型 | 必选 | 统计时长（单位：秒），即访问次数的统计周期，与阈值（**threshold**）参数配合。
            - **threshold**：Integer类型 | 必选 | 在检测时长内，允许单个统计对象访问被防护地址的次数阈值。
            - **status**：JSON格式 | 可选 | 响应码频率设置。以JSON字符串格式进行描述，具体包含以下参数：
                - **code**：Integer类型 | 必选 |  指定响应码。
                - **count**：Integer类型 | 可选 | 出现次数阈值，即表示当指定的响应码出现次数超过该阈值时命中防护规则，取值范围：1~999999999。**count**参数与**ratio**参数两者选其一，不可同时配置。
                - **ratio**：Integer类型 | 可选 | 出现比例阈值（百分比），即表示当指定的响应码出现比例超过该阈值时命中防护规则，取值范围：1~100。**count**参数与**ratio**参数两者选其一，不可同时配置。
            - **scope**：String类型 | 必选 | 生效范围，取值：
                - **rule**：表示当前特征匹配范围内。
                - **domain**：表示当前规则作用的域名范围内。
            - **ttl**：Integer类型 | 必选 | 处置动作的生效时长，单位：秒，取值范围：60~86400。

        - **示例**
        ```
        {
            "name":"CC防护",
            "conditions":[{"contain":1,"values":"login","pattern":"contain","opCode":1,"opValue":"contain","key":"URL"}],
            "expressions":["request_uri contains \'login\' "],
            "action":"block", 
            "scene":"custom_cc",  
            "ratelimit":{
                "target": "remote_addr", 
                "interval": 300,
                "threshold": 2000,
                "status": {
                    "code": 404,
                    "count": 200
                },
                "scope": "rule",
                "ttl": 1800
            }
        }
        ```

- 白名单规则配置（**whitelist**）对应的JSON字符串中包含以下参数：

    - **name**：String类型 | 必选 | 规则名称。
    - **tags**：Array类型 | 必选 | 不检测模块，可设置多个模块，取值：

        - **waf**：表示网站白名单。
        - **cc**：表示系统CC防护。
        - **customrule**：表示自定义规则。
        - **blacklist**：表示IP黑名单。
        - **antiscan**：表示扫描防护。
        - **regular**：表示规则防护引擎。
        - **deeplearning**：表示深度学习引擎。
        - **antifraud**：表示数据风控。
        - **dlp**：表示防敏感信息泄露。
        - **tamperproof**：表示网站防篡改。
        - **bot_intelligence**：表示爬虫威胁情报。
        - **bot_algorithm**：表示智能算法。
        - **bot_wxbb**：表示App防护。

    - **bypassTags**：String类型 | 必选 | 不检测的模块列表。
    - **origin**：String类型 | 可选 | 白名单规则的来源。取值固定为**ai**，表示白名单规则由WAF智能规则托管功能自动添加。不返回该参数表示白名单规则包括您手动添加的规则和智能规则托管功能自动添加的规则。

    - **conditions**：Array类型 | 必选 | 匹配条件，以JSON字符串格式进行描述，具体包含以下参数：

        - **key**：匹配字段，取值：**URL**、**IP**、**Referer**、**User-Agent**、**Params**、**Cookie**、**Content-Type**、**Content-Length**、**X-Forwarded-For**、**Post-Body**、**Http-Method**、**Header**、**URLPath**。

        - **opCode**：逻辑符，取值：

            - **11**：表示等于。
            - **10**：表示不等于。
            - **41**：表示等于多值之一。
            - **50**：表示不等于任一值。
            - **1**：表示包含。
            - **0**：表示不包含。
            - **51**：表示包含多值之一。
            - **52**：表示不包含任一值。
            - **82**：表示存在。
            - **2**：表示不存在。
            - **21**：表示长度等于。
            - **22**：表示长度大于。
            - **20**：表示长度小于。
            - **60**：表示正则不匹配。
            - **61**：表示正则匹配。
            - **72**：表示前缀匹配。
            - **81**：表示后缀匹配。
            - **80**：表示内容为空。
        - **values**：匹配内容。根据需要设置相应的内容，以String类型表示。

        - **contain**：同样表示规则条件的逻辑符，取值与**opCode**参数相同。 

        - **opValue**：逻辑符的简写含义，您可以参考**opCode**参数取值说明了解详细信息。

        - **pattern**：同样表示逻辑符的简写含义，取值与**opValue**参数相同。
                     
    - **expressions**：Array类型 | 必选 | 规则条件表达式，以更易读的方式表示所有规则条件信息。

    - **示例**
  
    ```
    {
        "name": "test",
        "tags": ["cc","customrule"],
        "bypassTags":"antifraud,dlp,tamperproof", 
        "conditions":[{"contain":1,"values":"login","pattern":"contain","opCode":1,"opValue":"contain","key":"URL"}],
        "expressions":["request_uri contains \'login\' "]
   }
   ```',
      'extraInfo' => ' ',
    ),
    'CreateProtectionModuleRule' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要添加防护规则配置的域名。

> 您可以调用[DescribeDomainNames](~~86373~~)查询所有已添加到WAF进行防护的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'DefenseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要配置的防护功能模块。取值：

- **waf-codec**：表示规则防护引擎解码设置。

- **tamperproof**：表示网站防篡改规则配置。

- **dlp**：表示防敏感信息泄漏规则配置。

- **ng_account**：表示账户安全规则配置。

- **antifraud**：表示数据风控防护请求配置。

- **antifraud_js**：表示数据风控JS插入页面配置。

- **bot_algorithm**：表示Bot管理的智能算法规则。

- **bot_wxbb_pkg**：表示App防护的版本防护规则。

- **bot_wxbb**：表示App防护的路径防护规则。

- **ac_custom**：表示自定义防护策略规则配置。

- **whitelist**：表示白名单规则配置。',
            'type' => 'string',
            'required' => true,
            'example' => 'ac_custom',
          ),
        ),
        2 => 
        array (
          'name' => 'Rule',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则配置内容，以一系列参数构造的JSON格式转化成字符串。

> 根据所指定的防护功能模块配置（**DefenseType**）不同，具体涉及的参数有所不同。详细信息，请参见Rule参数具体说明。',
            'type' => 'string',
            'required' => true,
            'example' => ' {"action":"monitor","name":"test","scene":"custom_acl","conditions":[{"opCode":1,"key":"URL","values":"/example"}]}',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-0xldbqt****',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateProtectionModuleRuleResponse>\\n    <RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n</CreateProtectionModuleRuleResponse>","errorExample":""}]',
      'title' => '在WAF防护功能模块中创建配置规则',
      'summary' => '在指定的WAF防护功能模块创建配置规则，如Web入侵防护、数据安全、高级防护、Bot、访问控制、限流。',
      'description' => '# 使用说明

本接口用于在指定的WAF防护功能模块（包括Web入侵防护、数据安全、高级防护、Bot管理、访问控制或限流等模块）中创建规则配置。您可以通过设置**DefenseType**参数值指定防护功能模块配置。具体参数值的含义，请参见请求参数**DefenseType**的描述。


# QPS限制

本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => '**Rule参数具体说明**

 - 规则防护引擎解码设置（**waf-codec**）对应的JSON字符串中包含以下参数：

    - **codecList**：Array类型 | 必选 | 启用的解码配置项。您可在Web应用防火墙控制台中查看该参数支持填写的参数值。

   - **示例**
    ```
    {
        "codecList":["url","base64"]
    }
    ```

- 网站防篡改规则配置（**tamperproof**）对应的JSON字符串中包含以下参数：

    - **uri**：String类型 | 必选 | 所需防护的具体URL。
    - **name**：String类型 | 必选 | 规则名称。

    - **示例**

    ```
    {
        "name":"example",
        "uri":"http://www.aliyundoc.com/example"
    }
    ```

- 防敏感信息泄露规则配置（**dlp**）对应的JSON字符串中包含以下参数：

    - **name**：String类型 | 必选 | 规则名称。
    - **conditions**：Array类型 | 必选 | 以JSON字符串格式描述匹配条件，支持设置最多两条匹配条件且条件间的关系为并且。其中包含以下具体参数：

        - **key**：匹配项。取值：

            - **0**：表示防护的URL。
            - **10**：表示敏感信息。
            - **11**：表示响应码。
            > 您无法在**conditions**参数中同时为响应码（**11**）和敏感信息（**10**）设置匹配条件。

        - **operation**：匹配逻辑。取值固定为**1**，表示包含。

        - **value**：以JSON字符串描述匹配条件值，支持填写多个条件值。其中包含以下具体参数：

            - **v**：仅适用于匹配项（**key**）为URL（**0**）或响应码（**11**）的场景。
                - URL：当`"key":0`时，参数值为URL地址。
                - 响应码：当`"key":11`，参数取值范围包括**400**、**401**、**402**、**403**、**404**、**405-499**、**500**、**501**、**502**、**503**、**504**、**505-599**。
            - **k**：仅适用于匹配项（**key**）为敏感信息（**10**）的场景。取值范围：
                - **100**：表示身份证。
                - **101**：表示信用卡。
                - **102**：表示电话号码。
                - **103**：表示默认敏感词。

    - **action**：匹配动作。取值：
        - **3**：表示告警。
        - **10**：表示敏感信息过滤，该动作仅适用于包含敏感信息（`"key":10`）的匹配条件场景。
        - **11**：表示返回系统内置拦截页面，该动作仅适用于包含响应码（`"key":11`）的匹配条件场景。

    - **示例**

  ```
  {
	"name":"example",
	"conditions":[{"key":11,"operation":1,"value":[{"v":401}]},{"key":"0","operation":1,"value":[{"v":"www.aliyundoc.com"}]}],
	"action":3
  }
  ```

- 账户安全规则配置（**ng_account**）对应的JSON字符串中包含以下参数：

    - **url_path**：String类型 | 必选 | 检测接口，以URL路径表示，必须以正斜线（/）开头。
    - **method**：String类型 | 必选 | 检测的请求方式，包括POST、GET、PUT、DELETE。支持设定多个请求方式，以英文逗号（,）分隔。
    - **account_left**：String类型 | 必选 | 账号参数名。
    - **password_left**：String类型 | 可选 | 密码参数名。
    - **action**：String类型 | 必选 | 防护动作。取值：
        - **monitor**：表示预警。
        - **block**：表示拦截。

    - **示例**

    ```
    {
        "url_path":"/example",
        "method":"POST,GET,PUT,DELETE",
        "account_left":"aaa",
        "password_left:"123",
        "action":"monitor"
    }
    ``` 

- 数据风控防护请求配置（**antifraud**）对应的JSON字符串中包含以下参数：

    - **uri**：String类型 | 必选 | 具体的防护请求URL。
    
    - **示例**

    ```
    {
        "uri": "http://1.example.com/example"
    }
    ```

- 数据风控JS插入页面配置（**antifraud_js**）对应的JSON字符串中包含以下参数：

    - **uri**：String类型 | 必选 | 需要插入数据风控JS页面的URL，系统将为所指定的URL路径下的所有页面插入数据风控JS，必须以正斜线（/）开头。

    - **示例**

    ```
    {
        "uri": "/example/example"
    }
    ```

- Bot管理的智能算法规则配置（**bot_algorithm**）对应的JSON字符串中包含以下参数：

    - **name**：String类型 | 必选 | 规则名称。
    - **algorithmName**：String类型 | 必选 | 算法名称。取值：
        - **RR**：表示专项资源爬虫识别算法。
        - **PR**：表示定向路径爬虫识别算法。
        - **DPR**：表示参数轮询爬虫识别算法。
        - **SR**：表示动态IP爬虫识别算法。
        - **IND**：表示代理设备爬虫识别算法。
        - **Periodicity**：表示周期性爬虫识别算法。
    - **timeInterval**：Integer类型 | 必选 | 检测周期。取值：30、60、120、300、600，单位：秒。
    - **action**：String类型 | 必选 | 处置动作。取值：
        - **monitor**：表示观察。
        - **captcha**：表示滑块。
        - **js**：表示JavaScript校验。
        - **block**：表示阻断。选择阻断作为处置动作时，必须传入阻断时长（**blocktime**）参数。
    - **blocktime**：Integer类型 | 可选 | 阻断时长。单位：分钟。取值范围：1~600。
    - **config**：String类型 | 必选 | 算法配置信息，以JSON字符串格式表示。算法配置信息中的具体子参数与所选择的算法名称（**algorithmName**）相关。
        - 专项资源爬虫识别算法（**RR**）对应的配置信息应包含以下子参数：
            - **resourceType**：Integer类型 | 可选 | 请求的资源类型。取值：
                - **1**：表示动态资源类型。
                - **2**：表示静态资源类型。
                - **-1**：表示自定义资源类型。选择自定义资源组时，需要再传入**extensions**参数，以字符串格式指定具体的资源后缀名，多个后缀名间以英文逗号（,）分隔，例如`css,jpg,xls`。
            - **minRequestCountPerIp**：Integer类型 | 必选 | 检测周期中检测IP的范围，大于等于一定访问请求数量的IP才会被检测。通过该参数指定访问请求数量的最小值。取值范围：5~10000。
            - **minRatio**：Float类型 | 必选 | 风险判定条件，即IP访问请求中访问指定资源类型的占比阈值（对应专项资源爬虫识别算法）或IP访问请求中访问指定路径的占比阈值（对应定向路径爬虫识别算法），超过阈值后判定为风险。取值范围：0.01~1。
        - 定向路径爬虫识别算法（**PR**）对应的配置信息应包含以下子参数：
            - **keyPathConfiguration**：Array类型 | 可选 | 请求的路径信息，支持指定最多10条路径，只在使用定向路径爬虫识别算法时需传入该子参数。以JSON字符串格式表示，具体包含以下参数：
                - **method**：String类型 | 必选 | 请求方法。取值：**POST**、**GET**、**PUT**、**DELETE**、**HEAD**、**OPTIONS**。
                - **url**：String类型 | 必选 | 请求路径关键字，必须以正斜线（/）开头。
                - **matchType**：String类型 | 必选 | 匹配方式，与请求路径关键字（**url**）参数结合指定请求路径。取值：**all**（精准匹配）、**prefix**（前缀匹配）、**regex**（正则匹配）。
            - **minRequestCountPerIp**：Integer类型 | 必选 | 检测周期中检测IP的范围，大于等于一定访问请求数量的IP才会被检测。通过该参数指定访问请求数量的最小值。取值范围：5~10000。
            - **minRatio**：Float类型 | 必选 | 风险判定条件，即IP访问请求中访问指定资源类型的占比阈值（对应专项资源爬虫识别算法）或IP访问请求中访问指定路径的占比阈值（对应定向路径爬虫识别算法），超过阈值后判定为风险。取值范围：0.01~1。
        - 参数轮询爬虫识别算法（**DPR**）对应的配置信息应包含以下子参数：
            - **method**：String类型 | 必选 | 请求方法。取值：**POST**、**GET**、**PUT**、**DELETE**、**HEAD**、**OPTIONS**。
            - **urlPattern**：String类型 | 必选 | 关键参数路径，必须以正斜线（/）开头。用{}表示关键参数，配置多个{}时将拼接这些参数作为关键参数。例如，`/company/{}/{}/{}/user.php?uid={}`。
            - **minRequestCountPerIp**：Integer类型 | 必选 | 检测周期中检测IP的范围，大于等于一定访问请求数量的IP才会被检测。通过该参数指定访问请求数量的最小值。取值范围：5~10000。
            - **minRatio**：Float类型 | 必选 | 风险判定条件，即IP访问请求中不同关键参数值的计数占比阈值，超过阈值后判定为风险。取值范围：0.01~1。
        - 动态IP爬虫识别算法（**SR**）对应的配置信息应包含以下子参数：
            - **maxRequestCountPerSrSession**：Integer类型 | 必选 | 通过设定每个会话中存在的最小请求次数定义异常会话，即单个会话中的请求次数小于该值即判定为异常会话。取值范围：1~8。
            - **minSrSessionCountPerIp**：Integer类型 | 必选 | 风险判定条件，即IP访问请求中存在的异常会话数量阈值，单个IP访问请求中的异常会话次数超过该值后判定为风险。取值范围：5~300。
        - 代理设备爬虫识别算法（**IND**）对应的配置信息应包含以下子参数：
            - **minIpCount**：Integer类型 | 必选 | 恶意设备判定条件，即设备使用WIFI关联的IP变换个数阈值，超过该阈值后判定为风险。取值范围：5~500。
            - **keyPathConfiguration**：Array类型 | 可选 | 检测路径信息，支持指定最多10条路径。以JSON字符串格式表示，具体包含以下参数：
                - **method**：String类型 | 必选 | 请求方法。取值：**POST**、**GET**、**PUT**、**DELETE**、**HEAD**、**OPTIONS**。
                - **url**：String类型 | 必选 | 检测路径关键字，必须以正斜线（/）开头。
                - **matchType**：String类型 | 必选 | 匹配方式，与检测路径关键字（**url**）参数结合指定请求路径。取值：**all**（精准匹配）、**prefix**（前缀匹配）、**regex**（正则匹配）。
        - 周期性爬虫识别算法（**Periodicity**）对应的配置信息应包含以下子参数：
            - **minRequestCountPerIp**：Integer类型 | 必选 | 检测周期中检测IP的范围，大于等于一定访问请求数量的IP才会被检测。通过该参数指定访问请求数量的最小值。取值范围：5~10000。
            - **level**：Integer类型 | 必选 | 风险判定等级，即访问IP的周期性特征的明显程度。取值：
                - **0**：表示明显。
                - **1**：表示中等。
                - **2**：表示较弱。
    - **示例**
    ```
    {
        "name":"代理设备爬虫识别",
        "algorithmName":"IND",
        "timeInterval":"60",
        "action":"monitor",
        "config":{
            "minIpCount":5,
            "keyPathConfiguration":[{"url":"/index","method":"GET","matchType":"prefix"}]
        }
    }
    ```

- App防护的版本防护规则配置（**bot_wxbb_pkg**）对应的JSON字符串中包含以下参数：

    - **name**：String类型 | 必选 | 规则名称。
    - **action**：String类型 | 必选 | 处置动作。取值：
        - **test**：表示观察。
        - **close**：表示阻断。
    - **nameList**：Array类型 | 必选 | 合法版本信息，最多指定五条规则。以JSON字符串方式表示，具体包含以下参数：
        - **name**：String类型 | 必选 | 合法包名称。
        - **signList**：Array类型 | 必选 | 对应的包签名，最多填写15个，以英文逗号（,）分隔。

    - **示例**
    ```
    {
        "name":"test",
        "action":"close",
        "nameList":[{
            "name":"apk-xxxx",
            "signList":["xxxxxx","xxxxx","xxxx","xx"]
        }]
    }
    ```

- App防护的路径防护规则配置（**bot_wxbb**）对应的JSON字符串中包含以下参数：

    - **name**：String类型 | 必选 | 规则名称。
    - **uri**：String类型 | 必选 | 防护路径，必须以正斜线（/）开头。
    - **matchType**：String类型 | 必选 | 匹配方式。取值：**all**（精准匹配）、**prefix**（前缀匹配）、**regex**（正则匹配）。
    - **arg**：String类型 | 必选 | 参数包含，与匹配方式（**matchType**）参数结合指定防护路径配置。
    - **action**：String类型 | 必选 | 处置动作。取值：
        - **test**：表示观察。
        - **close**：表示阻断。
    - **hasTag**：Boolean类型 | 必选 | 是否需要自定义加签字段。
        - **true**：表示是。选择需要自定义加签字段时，需传入**wxbbVmpFieldType**和**wxbbVmpFieldValue**参数指定加签字段的类型和对应值。
        - **false**：表示否。
    - **wxbbVmpFieldType**：Integer类型 | 可选 | 自定义加签字段类型。当**hasTag**参数值为**true**时，必须传入参数。取值：
        - **0**：表示header。
        - **1**：表示参数。
        - **2**：表示cookie。
    - **wxbbVmpFieldValue**：String类型 | 可选 | 自定义加签字段值。当**hasTag**参数值为**true**时，必须传入参数。
    - **blockInvalidSign**：Integer类型 | 必选 | 是否对非法签名执行处置动作，固定值**1**。路径防护规则的默认防护策略。
    - **blockProxy**：Integer类型 | 可选 | 是否对代理执行处置动作，固定值**1**。如果无需对代理行为执行处置动作时无需传入该参数。
    -  **blockSimulator**：Integer类型 | 可选 | 是否对模拟器执行处置动作，固定值**1**。如果无需对模拟器行为执行处置动作时无需传入该参数。

    - **示例**

    ```
    {
        "name":"test",
        "uri":"/index",
        "matchType":"all",
        "arg":"test",
        "action":"close",
        "hasTag":true,
        "wxbbVmpFieldType":2,
        "wxbbVmpFieldValue":"test",
        "blockInvalidSign":1,
        "blockProxy":1
    }
    ```

- 自定义防护策略规则配置（**ac_custom**），通过其对应的JSON字符串中的**scene**参数来设置ACL访问控制规则和CC攻击防护规则。

    - 设置ACL访问控制规则（**scene**参数值为**custom_acl**），其对应的JSON字符串中包含以下参数：

        - **name**：String类型 | 必选 | 规则名称。
        - **scene**：String类型 | 必选 | 防护类型。设置ACL访问控制规则时。取值固定为**custom_acl**。
        - **action**：String类型 | 必选 | 处置动作。取值：
            - **monitor**：表示观察。
            - **captcha**：表示滑块。
            - **captcha_strict**：表示严格滑块。
            - **js**：表示JS验证。
            - **block**：表示阻断。

        - **conditions**：Array类型 | 必选 | 匹配条件，支持填写最多五个匹配条件。以JSON字符串格式进行描述，具体包含以下参数：

            - **key**：匹配字段。取值范围：**URL**、**IP**、**Referer**、**User-Agent**、**Params**、**Cookie**、**Content-Type**、**Content-Length**、**X-Forwarded-For**、**Post-Body**、**Http-Method**、**Header**、**URLPath**。

            - **opCode**：逻辑符。取值：

            > 并不是每一个自定义规则的匹配字段（**key**）都能对应配置全部的逻辑符（**opcode**）。关于不同匹配字段支持使用的逻辑符，请以[WAF控制台](https://yundun.console.aliyun.com/?p=wafnext)自定义规则中匹配字段和逻辑符的关联关系为准。

                - **11**：表示等于。
                - **10**：表示不等于。
                - **41**：表示等于多值之一。
                - **50**：表示不等于任一值。
                - **1**：表示包含。
                - **0**：表示不包含。
                - **51**：表示包含多值之一。
                - **52**：表示不包含任一值。
                - **82**：表示存在。
                - **2**：表示不存在。
                - **21**：表示长度等于。
                - **22**：表示长度大于。
                - **20**：表示长度小于。
                - **60**：表示正则不匹配。
                - **61**：表示正则匹配。
                - **72**：表示前缀匹配。
                - **81**：表示后缀匹配。
                - **80**：表示内容为空。

            - **values**：匹配内容。根据需要填写相应的内容，以String类型表示。

        	> 匹配条件参数中的逻辑符（**opCode**）、匹配内容（**values**）参数取值范围与所指定的匹配字段（**key**）相关。关于支持的匹配条件配置详细信息，请参见[匹配条件字段说明](~~147945~~)。

        - **示例**
        ```
        {
            "action":"monitor",
            "name":"test",
            "scene":"custom_acl",
            "conditions":[{"opCode":1,"key":"URL","values":"/example"}]
        }
        ```

    - 设置CC攻击防护规则（**scene**参数值为**custom_cc**），对应的JSON字符串中包含以下参数：

        - **name**：String类型 | 必选 | 规则名称。
        - **scene**：String类型 | 必选 | 防护类型。设置CC攻击防护规则时，固定为**custom_cc**。
        - **conditions**：Array类型 | 必选 | 匹配条件，支持填写最多五个匹配条件。以JSON字符串格式进行描述，具体包含以下参数：

            - **key**：匹配字段。取值范围：**URL**、**IP**、**Referer**、**User-Agent**、**Params**、**Cookie**、**Content-Type**、**Content-Length**、**X-Forwarded-For**、**Post-Body**、**Http-Method**、**Header**、**URLPath**。

            - **opCode**：逻辑符。取值：

            > 并不是每一个自定义规则的匹配字段（**key**）都能对应配置全部的逻辑符（**opcode**）。关于不同匹配字段支持使用的逻辑符，请以[WAF控制台](https://yundun.console.aliyun.com/?p=wafnext)自定义规则中匹配字段和逻辑符的关联关系为准。
    
                - **11**：表示等于。
                - **10**：表示不等于。
                - **41**：表示等于多值之一。
                - **50**：表示不等于任一值。
                - **1**：表示包含。
                - **0**：表示不包含。
                - **51**：表示包含多值之一。
                - **52**：表示不包含任一值。
                - **82**：表示存在。
                - **2**：表示不存在。
                - **21**：表示长度等于。
                - **22**：表示长度大于。
                - **20**：表示长度小于。
                - **60**：表示正则不匹配。
                - **61**：表示正则匹配。
                - **72**：表示前缀匹配。
                - **81**：表示后缀匹配。
                - **80**：表示内容为空。

            - **values**：匹配内容。根据需要填写相应的内容，以String类型表示。

        	> 匹配条件参数中的逻辑符（**opCode**）、匹配内容（**values**）参数取值范围与所指定的匹配字段（**key**）相关。

        - **action**：String类型 | 必选 | 处置动作。取值：

            - **monitor**：表示观察。
            - **captcha**：表示滑块。
            - **captcha_strict**：表示严格滑块。
            - **js**：表示JS验证。
            - **block**：表示阻断。

        - **ratelimit**：JSON格式 | 必选 | 频率设置。以JSON字符串格式进行描述，具体包含以下参数：

            - **target**：String类型 | 必选 | 统计对象类型。取值：
                - **remote_addr**：表示IP。
                - **cookie.acw_tc**：表示Session。
                - **queryarg**：表示自定义参数。选择自定义参数时，必须在**subkey**参数中填写需要统计的自定义参数名称。
                - **cookie**：表示自定义cookie。选择自定义cookie时，必选在**subkey**参数中填写需要统计的cookie内容。
                - **header**：表示自定义header。选择自定义header时，必选在**subkey**参数中填写需要统计的header内容。
            - **subkey**：String类型 | 可选 | 当**target**参数值为**cookie**、**header**或**queryarg**时，必选在**subkey**参数中填写对应的信息。
            - **interval**： Integer类型 | 必选 | 统计时长（单位：秒），即访问次数的统计周期，与阈值（**threshold**）参数配合。
            - **threshold**：Integer类型 | 必选 | 在检测时长内，允许单个统计对象访问被防护地址的次数阈值。
            - **status**：JSON格式 | 可选 | 响应码频率设置。以JSON字符串格式进行描述，具体包含以下参数：
                - **code**：Integer类型 | 必选 |  指定响应码。
                - **count**：Integer类型 | 可选 | 出现次数阈值，即表示当指定的响应码出现次数超过该阈值时命中防护规则。取值范围：1~999999999。**count**参数与**ratio**参数两者选其一，不可同时配置。
                - **ratio**：Integer类型 | 可选 | 出现比例阈值（百分比），即表示当指定的响应码出现比例超过该阈值时命中防护规则。取值范围：1~100。**count**参数与**ratio**参数两者选其一，不可同时配置。
            - **scope**：String类型 | 必选 | 生效范围。取值：
                - **rule**：表示当前特征匹配范围内。
                - **domain**：表示当前规则作用的域名范围内。
            - **ttl**：Integer类型 | 必选 | 处置动作的生效时长（单位：秒）。取值范围：60~86400。

        - **示例**

        ```
        {
            "name":"CC防护",
            "conditions":[{"opCode":1,"key":"URL","values":"/example"}],
            "action":"block", 
            "scene":"custom_cc",  
            "ratelimit":{
                "target": "remote_addr", 
                "interval": 300,
                "threshold": 2000,
                "status": {
                    "code": 404,
                    "count": 200
                },
                "scope": "rule",
                "ttl": 1800
            }
        }
        ```

- 网站白名单规则配置（**whitelist**）对应的JSON字符串中包含以下参数：

    - **name**：String类型 | 必选 | 规则名称。
    - **tags**：Array类型 | 必选 | 不检测模块。不同类型的白名单规则支持设置的不检测模块（**tags**）不同，具体说明如下：

        > **tags**的取值只能包含具体白名单类型下罗列的取值。例如，**tags**取值不允许同时包含**regular**和**cc**，因为**regular**属于Web入侵防护白名单下的取值、**cc**属于访问控制/限流白名单下的取值。

        - 如需设置全局白名单，**tags**取值：
            - **waf**：表示不检测所有防护模块。

        - 如需设置Web入侵防护白名单，**tags**取值（可设置多个）：
            - **regular**：表示不检测规则防护引擎（包含所有防护规则）。
            - **regular_rule**：表示不检测规则防护引擎中的指定防护规则（如选择该取值，必须通过**regularRules**参数设置不检测的规则ID）。
            - **regular_type**：表示不检测规则防护引擎中指定类型的防护规则（如选择该取值，必须通过**regularTypes**参数设置不检测的规则类型）。
            - **deeplearning**：表示不检测深度学习引擎。

        - 如需设置访问控制/限流白名单，**tags**取值（可设置多个）：
            - **cc**：表示不检测CC安全防护模块。
            - **customrule**：表示不检测自定义防护策略。
            - **blacklist**：表示不检测IP黑名单模块。
            - **antiscan**：表示不检测扫描防护模块。

        - 如需设置数据安全白名单，**tags**取值（可设置多个）：
            - **dlp**：表示不检测防敏感信息泄露模块。
            - **tamperproof**：表示不检测网站防篡改模块。
            - **account**：表示不检测账户安全模块。

        - 如需设置Bot防护白名单，**tags**取值（可设置多个）：
            - **bot_intelligence**：表示不检测爬虫威胁情报模块。
            - **bot_algorithm**：表示不检测典型爬虫行为识别模块。
            - **bot_wxbb**：表示不检测App防护模块。
            - **antifraud**：表示不检测数据风控模块。

    - **regularRules**：Array类型 | 可选 | 不检测的防护规则ID列表。如果**tags**参数的取值中包含**regular_rule**，必须填写该参数。您可以在[WAF控制台](https://yundun.console.aliyun.com/?p=wafnext)的**防护规则组**页面，通过**新建规则组**，查询WAF包含的所有Web攻击防护规则，获取相关规则的ID。具体操作，请参见[自定义防护规则组](~~99262~~)。
    - **regularTypes**：Array类型 | 可选 | 不检测的防护规则类型列表。如果**tags**参数取值中包含**regular_type**，必须填写该参数。取值：
        - **sqli**: 表示SQL注入。
        - **xss**: 表示跨站脚本。
        - **code_exec**: 表示代码执行。
        - **lfilei**: 表示本地文件包含。
        - **rfilei**: 表示远程文件包含。
        - **webshell**: 表示WebShell。
        - **vvip**: 表示定制的防护规则。
        - **other**: 表示其他类型。
		
    - **conditions**：Array类型 | 必选 | 匹配条件，支持填写最多五个匹配条件。以JSON字符串格式进行描述，具体包含以下参数：

        - **key**：匹配字段。取值范围：**URL**、**IP**、**Referer**、**User-Agent**、**Params**、**Cookie**、**Content-Type**、**Content-Length**、**X-Forwarded-For**、**Post-Body**、**Http-Method**、**Header**、**URLPath**。

        - **opCode**：逻辑符。取值：

        > 并不是每一个自定义规则的匹配字段（**key**）都能对应配置全部的逻辑符（**opcode**）。关于不同匹配字段支持使用的逻辑符，请以[WAF控制台](https://yundun.console.aliyun.com/?p=wafnext)自定义规则中匹配字段和逻辑符的关联关系为准。

            - **11**：表示等于。
            - **10**：表示不等于。
            - **41**：表示等于多值之一。
            - **50**：表示不等于任一值。
            - **1**：表示包含或属于。
            - **0**：表示不包含或不属于。
            - **51**：表示包含多值之一。
            - **52**：表示不包含任一值。
            - **82**：表示存在。
            - **2**：表示不存在。
            - **21**：表示长度等于。
            - **22**：表示长度大于。
            - **20**：表示长度小于。
            - **60**：表示正则不匹配。
            - **61**：表示正则匹配。
            - **72**：表示前缀匹配。
            - **81**：表示后缀匹配。
            - **80**：表示内容为空。
            - **30**：表示值小于。
            - **31**：表示值大于。

        - **values**：匹配内容。根据需要填写相应的内容，以String类型表示。

    > 匹配条件参数中的逻辑符（**opCode**）、匹配内容（**values**）参数取值范围与所指定的匹配字段（**key**）相关。

    - **示例**
  
    ```
    {
        "name": "test",
        "tags": ["cc","customrule"],
        "conditions":[{"opCode":1,"key":"URL","values":"/example"}],
   }
   ``` 


调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyProtectionModuleRule' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改规则配置的域名。

> 您可以调用[DescribeDomainNames](~~86373~~)查询所有已添加到WAF进行防护的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'DefenseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的规则配置所属防护功能模块。取值：

- **tamperproof**：表示配置网站防篡改规则。

- **dlp**：表示配置防敏感信息泄漏规则。

- **ng_account**：表示配置账户安全规则。

- **bot_intelligence**：表示配置爬虫威胁情报。

- **antifraud**：表示配置数据风控防护请求。

- **antifraud_js**：表示配置数据风控JS插入页面。

- **bot_algorithm**：表示配置Bot管理的智能算法规则。

- **bot_wxbb_pkg**：表示配置App防护的版本防护规则。

- **bot_wxbb**：表示配置App防护的路径防护规则。

- **ac_blacklist**：表示配置IP黑名单规则。

- **ac_highfreq**：表示配置高频Web攻击IP自动封禁规则。

- **ac_dirscan**：表示配置目录扫描防护规则。

- **ac_custom**：表示配置自定义防护策略规则。

- **whitelist**：表示配置白名单规则。',
            'type' => 'string',
            'required' => true,
            'example' => 'ac_custom',
          ),
        ),
        2 => 
        array (
          'name' => 'Rule',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则配置内容，以一系列参数构造的JSON格式转化成字符串。

> 根据所指定的防护功能模块配置（**DefenseType**）不同，具体涉及的参数有所不同。详细信息，请参见Rule参数具体说明。',
            'type' => 'string',
            'required' => true,
            'example' => ' {"action":"monitor","name":"test","scene":"custom_acl","conditions":[{"opCode":1,"key":"URL","values":"/example"}]}',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的规则配置对应的规则ID。

> 您可以调用[DescribeProtectionModuleRules](~~100398~~)查询所有已创建的规则的ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '369998',
          ),
        ),
        4 => 
        array (
          'name' => 'LockVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要修改的规则配置的版本号。

> 您可以调用[DescribeProtectionModuleRules](~~100398~~)查询规则配置的版本号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。

> 您可以通过调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-0xldbqt****',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2lav****s77i',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyProtectionModuleRuleResponse>\\n    <RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n</ModifyProtectionModuleRuleResponse>","errorExample":""}]',
      'title' => '修改WAF防护功能配置规则',
      'summary' => '修改WAF防护功能的配置规则，如Web入侵防护、数据安全、高级防护、Bot、访问控制、限流、白名单。',
      'description' => '# 使用说明

本接口用于修改指定WAF防护功能模块（包括Web入侵防护、数据安全、高级防护、Bot管理、访问控制或限流、白名单等模块）中的规则配置。您可以通过设置**DefenseType**参数值指定防护功能模块配置。具体参数值的含义，请参见请求参数**DefenseType**的描述。


# QPS限制

本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => '**Rule参数具体说明**

 - 网站防篡改规则配置（**tamperproof**）对应的JSON字符串中包含以下参数：

    - **uri**：String类型 | 必选 | 所需防护的具体URL。
    - **name**：String类型 | 必选 | 规则名称。
    - **status**：Integer类型 | 可选 | 规则的防护状态。取值：
        - **0**（默认）：表示不生效。
        - **1**：表示生效。

    - **示例**

    ```
    {
        "name":"example",
        "uri":"http://www.example.com/example",
        "status":1 
    }
    ```

- 防敏感信息泄露规则配置（**dlp**）对应的JSON字符串中包含以下参数：

    - **name**：String类型 | 必选 | 规则名称。
    - **conditions**：Array类型 | 必选 | 以JSON字符串格式描述匹配条件，支持设置最多两条匹配条件且条件间的关系为并且。其中包含以下具体参数：
        - **key**：匹配项。
            - **0**：表示防护的URL。
            - **10**：表示敏感信息。
            - **11**：表示响应码。
        > 您无法在**conditions**参数中同时为响应码（**11**）和敏感信息（**10**）设置匹配条件。
        - **operation**：匹配逻辑，取值固定为**1**，表示包含。
        - **value**：以JSON字符串描述匹配条件值，支持填写多个条件值。其中包含以下具体参数：
            - **v**：仅适用于匹配项（**key**）为URL（**0**）或响应码（**11**）的场景。
                - URL：当`"key":0`时，参数值为URL地址。
                - 响应码：当`"key":11`，参数取值包括**400**、**401**、**402**、**403**、**404**、**405-499**、**500**、**501**、**502**、**503**、**504**、**505-599**。
            - **k**：仅适用于匹配项（**key**）为敏感信息（**10**）的场景，取值：
                - **100**：表示身份证。
                - **101**：表示信用卡。
                - **102**：表示电话号码。
                - **103**：表示默认敏感词。
    - **action**：匹配动作。
        - **3**：表示告警。
        - **10**：表示敏感信息过滤，该动作仅适用于包含敏感信息（`"key":10`）的匹配条件场景。
        - **11**：表示返回系统内置拦截页面，该动作仅适用于包含响应码（`"key":11`）的匹配条件场景。

    - **示例**

  ```
  {
	"name":"example",
	"conditions":[{"key":11,"operation":1,"value":[{"v":401}]},{"key":"0","operation":1,"value":[{"v":"www.example.com"}]}],
	"action":3
  }
  ```

- 账户安全规则配置（**ng_account**）对应的JSON字符串中包含以下参数：

    - **url_path**：String类型 | 必选 | 检测接口，以URL路径表示，必须以“/”开头。
    - **method**：String类型 | 必选 | 检测的请求方式，包括POST、GET、PUT、DELETE。支持设定多个请求方式，以英文逗号（,）分隔。
    - **account_left**：String类型 | 必选 | 账号参数名。
    - **password_left**：String类型 | 可选 | 密码参数名。
    - **action**：String类型 | 必选 | 防护动作。取值：
        - **monitor**：表示预警。
        - **block**：表示拦截。

    - **示例**

    ```
    {
        "url_path":"/example",
        "method":"POST,GET,PUT,DELETE",
        "account_left":"aaa",
        "password_left:"123",
        "action":"monitor"
    }
    ``` 

- Bot管理的爬虫威胁情报配置（**bot_intelligence**）对应的JSON字符串中包含以下参数：

    - **name**：String类型 | 必选 | 规则名称，必须与规则ID（**RuleId**）参数对应。
    - **urlList**：Array类型 | 必选 | 防护路径，最多指定10个防护路径。以JSON字符串方式表示，具体包含以下参数：
        - **mode**：String类型 | 必选 | 匹配方式，与路径关键字（**url**）参数结合指定防护路径。取值：**eq**（精准匹配）、**prefix-match**（前缀匹配）、**regex**（正则匹配）。
        - **url**：String类型 | 必选 | 路径关键字，必须以“/”开头。
    - **action**：String类型 | 必选 | 处置动作。取值：
        - **monitor**：表示观察。
        - **captcha**：表示滑块。
        - **captcha_strict**：表示严格滑块 。   
        - **js**：表示JavaScript校验。
        - **block**：表示阻断。
    - **status**：Integer类型 | 必选 | 启用状态。取值：
        - **0**：表示禁用。
        - **1**：表示启用。
    - **示例**
    ```
    {
        "urlList":[
            {"mode":"prefix-match","url":"/indexa"},
            {"mode":"regex","url":"/"},
            {"mode":"eq","url":"/"}],
        "name":"IDC IP库-腾讯云",
        "action":"captcha_strict",
        "status":1
    }
    ```

- Bot管理的智能算法规则配置（**bot_algorithm**）对应的JSON字符串中包含以下参数：

    - **name**：String类型 | 必选 | 规则名称。
    - **algorithmName**：String类型 | 必选 | 算法名称。取值：
        - **RR**：表示专项资源爬虫识别算法。
        - **PR**：表示定向路径爬虫识别算法。
        - **DPR**： 表示参数轮询爬虫识别算法。
        - **SR**：表示动态IP爬虫识别算法。
        - **IND**：表示代理设备爬虫识别算法。
        - **Periodicity**：表示周期性爬虫识别算法。
    - **timeInterval**：Integer类型 | 必选 | 检测周期。单位：秒，取值：30、60、120、300、600。
    - **action**：String类型 | 必选 | 处置动作。取值：
        - **monitor**：表示观察。
        - **captcha**：表示滑块。
        - **js**：表示JavaScript校验。
        - **block**：表示阻断。选择阻断作为处置动作时，必须传入阻断时长（**blocktime**）参数。
    - **blocktime**：Integer类型 | 可选 | 阻断时长。单位：分钟，取值：1~600。
    - **config**：String类型 | 必选 | 算法配置信息，以JSON字符串格式表示。算法配置信息中的具体子参数与所选择的算法名称（**algorithmName**）相关。
        - 专项资源爬虫识别算法（**RR**）对应的配置信息应包含以下子参数：
            - **resourceType**：Integer类型 | 可选 | 请求的资源类型。取值：
                - **1**：表示动态资源类型。
                - **2**：表示静态资源类型。
                - **-1**：表示自定义资源类型。选择自定义资源组时，需要再传入**extensions**参数，以字符串格式指定具体的资源后缀名，多个后缀名间以英文逗号（,）分隔，例如`css,jpg,xls`。
            - **minRequestCountPerIp**：Integer类型 | 必选 | 检测周期中检测IP的范围，大于等于一定访问请求数量的IP才会被检测。通过该参数指定访问请求数量的最小值。取值范围：5~10000。
            - **minRatio**：Float类型 | 必选 | 风险判定条件，即IP访问请求中访问指定资源类型的占比阈值，超过阈值后判定为风险。取值范围：0.01~1。
        - 定向路径爬虫识别算法（**PR**）对应的配置信息应包含以下子参数：
            - **keyPathConfiguration**：Array类型 | 可选 | 请求的路径信息，支持指定最多10条路径，只在使用定向路径爬虫识别算法时需传入该子参数。以JSON字符串格式表示。具体包含以下参数：
                - **method**：String类型 | 必选 | 请求方法。取值：**POST**、**GET**、**PUT**、**DELETE**、**HEAD**、**OPTIONS**。
                - **url**：String类型 | 必选 | 请求路径关键字，必须以“/”开头。
                - **matchType**：String类型 | 必选 | 匹配方式，与请求路径关键字（**url**）参数结合指定请求路径。取值：**all**（精准匹配）、**prefix**（前缀匹配）、**regex**（正则匹配）。
            - **minRequestCountPerIp**：Integer类型 | 必选 | 检测周期中检测IP的范围，大于等于一定访问请求数量的IP才会被检测。通过该参数指定访问请求数量的最小值。取值范围：5~10000。
            - **minRatio**：Float类型 | 必选 | 风险判定条件，即IP访问请求中访问指定路径的占比阈值，超过阈值后判定为风险。取值范围：0.01~1。
        - 参数轮询爬虫识别算法（**DPR**）对应的配置信息应包含以下子参数：
            - **method**：String类型 | 必选 | 请求方法。取值：**POST**、**GET**、**PUT**、**DELETE**、**HEAD**、**OPTIONS**。
            - **urlPattern**：String类型 | 必选 | 关键参数路径，必须以“/”开头。用{}表示关键参数，配置多个{}时将拼接这些参数作为关键参数。例如，`/company/{}/{}/{}/user.php?uid={}`。
            - **minRequestCountPerIp**：Integer类型 | 必选 | 检测周期中检测IP的范围，大于等于一定访问请求数量的IP才会被检测。通过该参数指定访问请求数量的最小值。取值范围：5~10000。
            - **minRatio**：Float类型 | 必选 | 风险判定条件，即IP访问请求中不同关键参数值的计数占比阈值，超过阈值后判定为风险。取值范围：0.01~1。
        - 动态IP爬虫识别算法（**SR**）对应的配置信息应包含以下子参数：
            - **maxRequestCountPerSrSession**：Integer类型 | 必选 | 通过设定每个会话中存在的最小请求次数定义异常会话，即单个会话中的请求次数小于该值即判定为异常会话。取值范围：1~8。
            - **minSrSessionCountPerIp**：Integer类型 | 必选 | 风险判定条件，即IP访问请求中存在的异常会话数量阈值，单个IP访问请求中的异常会话次数超过该值后判定为风险。取值范围：5~300。
        - 代理设备爬虫识别算法（**IND**）对应的配置信息应包含以下子参数：
            - **minIpCount**：Integer类型 | 必选 | 恶意设备判定条件，即设备使用WIFI关联的IP变换个数阈值，超过该阈值后判定为风险。取值范围：5~500。
            - **keyPathConfiguration**：Array类型 | 可选 | 检测路径信息，支持指定最多10条路径。以JSON字符串格式表示，具体包含以下参数：
                - **method**：String类型 | 必选 | 请求方法。取值：**POST**、**GET**、**PUT**、**DELETE**、**HEAD**、**OPTIONS**。
                - **url**：String类型 | 必选 | 检测路径关键字，必须以“/”开头。
                - **matchType**：String类型 | 必选 | 匹配方式，与检测路径关键字（**url**）参数结合指定请求路径。取值：**all**（精准匹配）、**prefix**（前缀匹配）、**regex**（正则匹配）。
        - 周期性爬虫识别算法（**Periodicity**）对应的配置信息应包含以下子参数：
            - **minRequestCountPerIp**：Integer类型 | 必选 | 检测周期中检测IP的范围，大于等于一定访问请求数量的IP才会被检测。通过该参数指定访问请求数量的最小值。取值范围：5~10000。
            - **level**：Integer类型 | 必选 | 风险判定等级，即访问IP的周期性特征的明显程度。取值：
                - **0**：表示明显。
                - **1**：表示中等。
                - **2**：表示较弱。
    - **示例**
    ```
    {
        "name":"代理设备爬虫识别",
        "algorithmName":"IND",
        "timeInterval":"60",
        "action":"warn",
        "config":{
            "minIpCount":5,
            "keyPathConfiguration":[{"url":"/index","method":"GET","matchType":"prefix"}]
        }
    }
    ```

- App防护的版本防护规则配置（**bot_wxbb_pkg**）对应的JSON字符串中包含以下参数：

    - **name**：String类型 | 必选 | 规则名称。
    - **action**：String类型 | 必选 | 处置动作。取值：
        - **test**：表示观察。
        - **close**：表示阻断。
    - **nameList**：Array类型 | 必选 | 合法版本信息，最多指定五条规则。以JSON字符串方式表示，具体包含以下参数：
        - **name**：String类型 | 必选 | 合法包名称。
        - **signList**：Array类型 | 必选 | 对应的包签名，最多填写15个，以英文逗号（,）分隔。
    - **示例**
    ```
    {
        "name":"test",
        "action":"close",
        "nameList":[{
            "name":"apk-xxxx",
            "signList":["xxxxxx","xxxxx","xxxx","xx"]
        }]
    }
    ```

- App防护的路径防护规则配置（**bot_wxbb**）对应的JSON字符串中包含以下参数：

    - **name**：String类型 | 必选 | 规则名称。
    - **uri**：String类型 | 必选 | 防护路径，必须以“/”开头。
    - **matchType**：String类型 | 必选 | 匹配方式。取值：**all**（精准匹配）、**prefix**（前缀匹配）、**regex**（正则匹配）。
    - **arg**：String类型 | 必选 | 参数包含，与匹配方式（**matchType**）参数结合指定防护路径配置。
    - **action**：String类型 | 必选 | 处置动作。取值：
        - **test**：表示观察。
        - **close**：表示阻断。
    - **hasTag**：Boolean类型 | 必选 | 是否需要自定义加签字段。
        - **true**：表示是。选择需要自定义加签字段时，需传入**wxbbVmpFieldType**和**wxbbVmpFieldValue**参数指定加签字段的类型和对应值。
        - **false**：表示否。
    - **wxbbVmpFieldType**：Integer类型 | 可选 | 自定义加签字段类型。当**hasTag**参数值为**true**时，必须传入参数。取值：
        - **0**：表示header。
        - **1**：表示参数。
        - **2**：表示cookie。
    - **wxbbVmpFieldValue**：String类型 | 可选 | 自定义加签字段值。当**hasTag**参数值为**true**时，必须传入参数。
    - **blockInvalidSign**：Integer类型 | 必选 | 是否对非法签名执行处置动作，固定值**1**。路径防护规则的默认防护策略。
    - **blockProxy**：Integer类型 | 可选 | 是否对代理执行处置动作，固定值**1**。如果无需对代理行为执行处置动作时无需传入该参数。
    - **blockSimulator**：Integer类型 | 可选 | 是否对模拟器执行处置动作，固定值**1**。如果无需对模拟器行为执行处置动作时无需传入该参数。
    - **示例**
    ```
    {
        "name":"test",
        "uri":"/index",
        "matchType":"all",
        "arg":"test",
        "action":"close",
        "hasTag":true,
        "wxbbVmpFieldType":2,
        "wxbbVmpFieldValue":"test",
        "blockInvalidSign":1,
        "blockProxy":1
    }
    ```


- 数据风控防护请求配置（**antifraud**）对应的JSON字符串中包含以下参数：

    - **uri**：String类型 | 必选 | 具体的防护请求URL。
    
    - **示例**

    ```
    {
        "uri": "http://1.example.com/example"
    }
    ```

- 数据风控JS插入页面配置（**antifraud_js**）对应的JSON字符串中包含以下参数：

    - **uri**：String类型 | 必选 | 需要插入数据风控JS页面的URL，系统将为所指定的URL路径下的所有页面插入数据风控JS，必须以“/”开头。

    - **示例**

    ```
    {
        "uri": "/example/example"
    }
    ```

- IP黑名单规则配置（**ac_blacklist**）对应的JSON字符串中包含以下参数：

    - **remoteAddr**：Array类型 | 可选 | 黑名单中的IP。支持填写IP和IP地址段。多个IP以英文逗号（,）分隔，最多可以添加200个。填写空值表示清空IP黑名单。

    - **area**：Array类型 | 可选 | 地域级IP黑名单中的地域。使用JSON数组转化的字符串格式表示，JSON数组中的每个元素是一个结构体，包含以下字段：

        - **countryCodes**：Array类型 | 必选 | 国家代码。只填写`["CN"]`，表示封禁中国境内地域，必须同时填写**regionCodes**；填写`["CN"]`以外内容，表示封禁中国境外地域，无需填写**regionCodes**。您可以调用[DescribeProtectionModuleCodeConfig](~~201108~~)查询中国境内地域代码和中国境外地域代码。

        - **regionCodes**：Array类型  | 可选 | 中国境内地域代码。

    - **示例**
    ```
{
    "remoteAddr": [
        "1.XX.XX.1",
        "2.XX.XX.2"
    ],
    "area": [
        {
            "countryCodes": [
                "CN"
            ],
            "regionCodes": [
                "310000",
                "530000"
            ]
        },
        {
            "countryCodes": [
                "AD",
                "AL"
            ]
        }
    ]
}
    ```


- 高频Web攻击IP自动封禁规则配置（**ac_highfreq**）对应的JSON字符串中包含以下参数：

    - **interval**：Integer类型 | 必选 | 检测时间范围。单位：秒，取值范围：5~1800。
    - **ttl**：Integer类型 | 必选 | 封禁IP时长。单位秒，取值范围：60~86400。
    - **count**：Integer类型 | 必选 | Web攻击次数阈值，检测时间范围内攻击次数超过该值，触发封禁。取值范围：2~50000。

    - **示例**
    ```
    {
    	"interval":60,
    	"ttl":300,
    	"count":60
     }
    ```

- 目录扫描防护规则配置（**ac_dirscan**）对应的JSON字符串中包含以下参数：

    - **interval**：Integer类型 | 必选 | 检测时间范围。单位秒，取值范围：5~1800。
    - **ttl**：Integer类型 | 必选 | 封禁IP时长。单位秒，取值范围：60~86400。
    - **count**：Integer类型 | 必选 | 访问次数阈值。取值范围：2~50000。
    - **weight**：Float类型 | 必选 | 404响应码占比阈值（百分比）。取值范围：0~1。
    - **uriNum**：Integer类型 | 必选 | 扫描目录数量阈值。取值范围：2~50000。

    - **示例**
    ```
    {
    	"interval":10,
    	"ttl":1800,
    	"count":50,
    	"weight":0.7,
        "uriNum":20 
    }
    ```

- 自定义防护策略规则配置（**ac_custom**），通过其对应的JSON字符串中的**scene**参数来设置ACL访问控制规则和CC攻击防护规则。

    - 设置ACL访问控制规则（**scene**参数值为**custom_acl**），其对应的JSON字符串中包含以下参数：

        - **name**：String类型 | 必选 | 规则名称。
        - **scene**：String类型 | 必选 | 防护类型。设置ACL访问控制规则时，取值固定为**custom_acl**。
        - **action**：String类型 | 必选 | 处置动作。取值：
            - **monitor**：表示观察。
            - **captcha**：表示滑块。
            - **captcha_strict**：表示严格滑块。
            - **js**：表示JS验证。
            - **block**：表示阻断。
        - **conditions**：Array类型 | 必选 | 匹配条件，最多支持填写5个匹配条件。以JSON字符串格式进行描述，具体包含以下参数：

            - **key**：匹配字段。取值：**URL**、**IP**、**Referer**、**User-Agent**、**Params**、**Cookie**、**Content-Type**、**Content-Length**、**X-Forwarded-For**、**Post-Body**、**Http-Method**、**Header**、**URLPath**。

            - **opCode**：逻辑符。取值：
                - **0**：表示不包含、不属于。
                - **1**：表示包含、属于。
                - **2**：表示不存在。
                - **10**：表示不等于。
                - **11**：表示等于。
                - **20**：表示长度小于。
                - **21**：表示长度等于。
                - **22**：表示长度大于。
                - **30**：表示值小于。
                - **31**：表示值等于。
                - **32**：表示值大于。
             

            - **values**：匹配内容。根据需要填写相应的内容，以String类型表示。

        	> 匹配条件参数中的逻辑符（**opCode**）、匹配内容（**values**）参数取值范围与所指定的匹配字段（**key**）相关。关于支持的匹配条件配置详细信息，请参见[匹配条件字段说明](~~147945~~)。

        - **示例**
        ```
        {
            "action":"monitor",
            "name":"test",
            "scene":"custom_acl",
        	"conditions":[{"opCode":1,"key":"URL","values":"/example"}]
        }
        ```

    - 设置CC攻击防护规则（**scene**参数值为**custom_cc**），对应的JSON字符串中包含以下参数：

        - **name**：String类型 | 必选 | 规则名称。
        - **scene**：String类型 | 必选 | 防护类型。设置CC攻击防护规则时，取值固定为**custom_cc**。
        - **conditions**：Array类型 | 必选 | 匹配条件，最多支持填写5个匹配条件。以JSON字符串格式进行描述，具体包含以下参数：

            - **key**：匹配字段。取值：**URL**、**IP**、**Referer**、**User-Agent**、**Params**、**Cookie**、**Content-Type**、**Content-Length**、**X-Forwarded-For**、**Post-Body**、**Http-Method**、**Header**、**URLPath**。

            - **opCode**：逻辑符。取值：

                - **0**：表示不包含、不属于。
                - **1**：表示包含、属于。
                - **2**：表示不存在。
                - **10**：表示不等于。
                - **11**：表示等于。
                - **20**：表示长度小于。
                - **21**：表示长度等于。
                - **22**：表示长度大于。
                - **30**：表示值小于。
                - **31**：表示值等于。
                - **32**：表示值大于。

            - **values**：匹配内容。根据需要填写相应的内容，以String类型表示。

        	> 匹配条件参数中的逻辑符（**opCode**）、匹配内容（**values**）参数取值范围与所指定的匹配字段（**key**）相关。

    	- **action**：String类型 | 必选 | 处置动作，取值：

            - **monitor**：表示观察。
            - **captcha**：表示滑块。
            - **captcha_strict**：表示严格滑块。
            - **js**：表示JS验证。
            - **block**：表示阻断。

    	- **ratelimit**：JSON格式 | 必选 | 频率设置。以JSON字符串格式进行描述，具体包含以下参数：

            - **target**：String类型 | 必选 | 统计对象类型，取值：
                - **remote_addr**：表示IP。
                - **cookie.acw_tc**：表示Session。
                - **queryarg**：表示自定义参数。选择自定义参数时，必须在**subkey**参数中填写需要统计的自定义参数名称。
                - **cookie**：表示自定义cookie。选择自定义cookie时，必选在**subkey**参数中填写需要统计的cookie内容。
                - **header**：表示自定义header。选择自定义header时，必选在**subkey**参数中填写需要统计的header内容。
            - **subkey**：String类型 | 可选 | 当**target**参数值为**cookie**、**header**或**queryarg**时，必选在**subkey**参数中填写对应的信息。

            - **interval**： Integer类型 | 必选 | 统计时长（单位：秒），即访问次数的统计周期，与阈值（**threshold**）参数配合。

            - **threshold**：Integer类型 | 必选 | 在检测时长内，允许单个统计对象访问被防护地址的次数阈值。

            - **status**：JSON格式 | 可选 | 响应码频率设置。以JSON字符串格式进行描述，具体包含以下参数：

                - **code**：Integer类型 | 必选 |  指定响应码。

                - **count**：Integer类型 | 可选 | 出现次数阈值，即表示当指定的响应码出现次数超过该阈值时命中防护规则。取值范围：1~999999999。**count**参数与**ratio**参数两者选其一，不可同时配置。

                - **ratio**：Integer类型 | 可选 | 出现比例阈值（百分比），即表示当指定的响应码出现比例超过该阈值时命中防护规则。取值范围：1~100。**count**参数与**ratio**参数两者选其一，不可同时配置。

            - **scope**：String类型 | 必选 | 生效范围，取值：

                - **rule**：表示当前特征匹配范围内。

                - **domain**：表示当前规则作用的域名范围内。
 
            - **ttl**：Integer类型 | 必选 | 处置动作的生效时长。单位：秒，取值范围：60~86400。

        - **示例**

        ```
        {
            "name":"CC防护",
            "conditions":[{"opCode":1,"key":"URL","values":"/example"}],
            "action":"block", 
            "scene":"custom_cc",  
            "ratelimit":{
                "target": "remote_addr", 
                "interval": 300,
                "threshold": 2000,
                "status": {
                    "code": 404,
                    "count": 200
                },
                "scope": "rule",
                "ttl": 1800
            }
    }
    ```

- 网站白名单规则配置（**whitelist**）对应的JSON字符串中包含以下参数：

    - **name**：String类型 | 必选 | 规则名称。

    - **tags**：Array类型 | 必选 | 不检测模块。不同类型的白名单规则支持设置的不检测模块（**tags**）不同，具体说明如下：

        > **tags**的取值只能包含具体白名单类型下罗列的取值。例如，**tags**取值不允许同时包含**regular**和**cc**，因为**regular**属于Web入侵防护白名单下的取值、**cc**属于访问控制/限流白名单下的取值。

        - 如需设置全局白名单，**tags**取值：
            - **waf**：表示不检测所有防护模块。

        - 如需设置Web入侵防护白名单，**tags**取值（可设置多个）：
            - **regular**：表示不检测规则防护引擎（包含所有防护规则）。
            - **regular_rule**：表示不检测规则防护引擎中的指定防护规则（如选择该取值，必须通过**regularRules**参数设置不检测的规则ID）。
            - **regular_type**：表示不检测规则防护引擎中指定类型的防护规则（如选择该取值，必须通过**regularTypes**参数设置不检测的规则类型）。
            - **deeplearning**：表示不检测深度学习引擎。

        - 如需设置访问控制/限流白名单，**tags**取值（可设置多个）：
            - **cc**：表示不检测CC安全防护模块。
            - **customrule**：表示不检测自定义防护策略。
            - **blacklist**：表示不检测IP黑名单模块。
            - **antiscan**：表示不检测扫描防护模块。

        - 如需设置数据安全白名单，**tags**取值（可设置多个）：
            - **dlp**：表示不检测防敏感信息泄露模块。
            - **tamperproof**：表示不检测网站防篡改模块。
            - **account**：表示不检测账户安全模块。

        - 如需设置Bot防护白名单，**tags**取值（可设置多个）：
            - **bot_intelligence**：表示不检测爬虫威胁情报模块。
            - **bot_algorithm**：表示不检测典型爬虫行为识别模块。
            - **bot_wxbb**：表示不检测App防护模块。
            - **antifraud**：表示不检测数据风控模块。

    - **regularRules**：Array类型 | 可选 | 不检测的防护规则ID列表。如果**tags**参数的取值中包含**regular_rule**，必须填写该参数。您可以在[WAF控制台](https://yundun.console.aliyun.com/?p=wafnext)的**防护规则组**页面，通过**新建规则组**，查询WAF包含的所有Web攻击防护规则，获取相关规则的ID。具体操作，请参见[自定义防护规则组](~~99262~~)。
    - **regularTypes**：Array类型 | 可选 | 不检测的防护规则类型列表。如果**tags**参数取值中包含**regular_type**，必须填写该参数。取值：
        - **sqli**: 表示SQL注入。
        - **xss**: 表示跨站脚本。
        - **code_exec**: 表示代码执行。
        - **lfilei**: 表示本地文件包含。
        - **rfilei**: 表示远程文件包含。
        - **webshell**: 表示WebShell。
        - **vvip**: 表示定制的防护规则。
        - **other**: 表示其他类型。

    - **conditions**：Array类型 | 必选 | 匹配条件，最多支持填写5个匹配条件。以JSON字符串格式进行描述，具体包含以下参数：

        - **key**：匹配字段。取值：**URL**、**IP**、**Referer**、**User-Agent**、**Params**、**Cookie**、**Content-Type**、**Content-Length**、**X-Forwarded-For**、**Post-Body**、**Http-Method**、**Header**、**URLPath**。

        - **opCode**：逻辑符，取值：

            - **0**：表示不包含、不属于。

            - **1**：表示包含、属于。

            - **2**：表示不存在。

            - **10**：表示不等于。

            - **11**：表示等于。

            - **20**：表示长度小于。

            - **21**：表示长度等于。

            - **22**：表示长度大于。

            - **30**：表示值小于。

            - **31**：表示值等于。

            - **32**：表示值大于。

         

        - **values**：匹配内容。根据需要填写相应的内容，以String类型表示。

    > 匹配条件参数中的逻辑符（**opCode**）、匹配内容（**values**）参数取值范围与所指定的匹配字段（**key**）相关。

    - **示例**
  
    ```
    {
        "name": "test",
        "tags": ["cc","customrule"],
        "conditions":[{"opCode":1,"key":"URL","values":"/example"}],
   }
   ```



调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyProtectionRuleStatus' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已添加的域名名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'DefenseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防护功能模块，取值：

- **tamperproof**：网站防篡改

- **bot_crawler**：合法爬虫中的合法搜索引擎白名单

- **bot_intelligence**：爬虫威胁情报

- **ac_custom**：自定义防护策略

- **whitelist**：网站白名单',
            'type' => 'string',
            'required' => true,
            'example' => 'tamperproof',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置规则ID。

> 调用[DescribeProtectionModuleRules](~~100398~~)接口可以查询到所有规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '42755',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置规则状态。取值：

- **0**：禁用
- **1**：启用',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'LockVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则配置记录版本号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。

> 您可以通过调用[DescribeInstanceInfo](~~140857~~)接口查看当前WAF实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf_elasticity-cn-0xldbqt****',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyProtectionRuleStatusResponse>\\r\\n\\t<RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\r\\n</ModifyProtectionRuleStatusResponse>","errorExample":""}]',
      'title' => '启用或禁用域名配置WAF防护功能模块',
      'summary' => '启用或禁用域名WAF防护功能模块，如网站防篡改、合法爬虫、爬虫威胁情报、自定义防护策略、网站白名单。',
      'description' => '您可以通过设置**DefenseType**参数值指定防护功能模块配置。具体参数值的含义，请参见请求参数**DefenseType**的描述。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDomainRuleGroup' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的域名。

> 您可以调用[DescribeDomainList](~~255880~~)查询所有已接入WAF防护的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-tl32ast****',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2oij****hbfi',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
              'RuleGroupId' => 
              array (
                'description' => '域名绑定的防护规则组的ID。取值：

- **1011**：表示WAF内置的严格规则组。
- **1012**：表示WAF内置的中等规则组。
- **1013**：表示WAF内置的宽松规则组。

其他取值表示您自定义的规则组的ID。
',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1012',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
              ),
              'WafAiStatus' => 
              array (
                'description' => '智能规则托管功能的启用状态。取值：

- **0**：表示关闭。
- **1**：表示开启。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RuleGroupId\\": 1012,\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\",\\n  \\"WafAiStatus\\": 1\\n}","errorExample":""},{"type":"xml","example":"<DescribeDomainRuleGroupResponse>\\n    <RuleGroupId>1012</RuleGroupId>\\n    <RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n    <WafAiStatus>1</WafAiStatus>\\n</DescribeDomainRuleGroupResponse>","errorExample":""}]',
      'title' => 'DescribeDomainRuleGroup',
      'summary' => '调用DescribeDomainRuleGroup查询域名绑定的防护规则组的ID及智能规则托管功能的启用状态。',
      'description' => '# 使用说明

本接口用于查询规则防护引擎下，指定域名绑定的防护规则组的ID及智能规则托管功能的启用状态。

# QPS限制

本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetDomainRuleGroup' => 
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
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Domains',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要设置防护规则组的域名列表。使用数组转化的字符串格式表示。

支持同时设置多个域名，格式：`["<域名1>","<域名2>",……]`。

> 您可以调用[DescribeDomainList](~~255880~~)查询所有已接入WAF防护的域名。',
            'type' => 'string',
            'required' => true,
            'example' => '["www.aliyundoc.com"]',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '为规则防护引擎设置要应用的防护规则组ID。取值：

- **1011**：表示WAF内置的严格规则组。
- **1012**：表示WAF内置的中等规则组。
- **1013**：表示WAF内置的宽松规则组。

除了以上内置规则组外，您还可以设置自定义规则组的ID。

> 您可以在[Web应用防火墙控制台](https://yundun.console.aliyun.com/?p=wafnext)的**防护规则组**页面，获取自定义规则组的ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1012',
          ),
        ),
        2 => 
        array (
          'name' => 'WafVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '为当前配置设置一个版本号（用于实现乐观锁控制）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。

> 您可以通过调用[DescribeInstanceInfo](~~140857~~)接口查看当前WAF实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-tl32ast****',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网站域名在资源管理服务中所属的资源组ID。

不设置该参数表示默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfm2pz25js****',
          ),
        ),
        5 => 
        array (
          'name' => 'WafAiStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置智能规则托管功能的启用状态。取值：
- **0**：表示关闭。
- **1**（默认）：表示开启。

智能规则托管表示由WAF智能学习历史业务流量的行为模式，识别可能对正常业务产生误拦截的防护规则，并通过自动设置Web入侵防护白名单，在特定业务防护场景下屏蔽对应防护规则。等误报风险消除后，再恢复使用被屏蔽的防护规则。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<SetDomainRuleGroupResponse>\\n    <RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\n</SetDomainRuleGroupResponse>","errorExample":""}]',
      'title' => '为域名配置防护规则组',
      'summary' => '为指定域名配置选择正则防护引擎使用的防护规则组，除系统默认的三种防护规则组外，也可以选择自定义规则组。',
      'description' => '# 使用说明

本接口用于为指定域名设置规则防护引擎的防护规则组及智能规则托管功能的启用状态。

设置防护规则组时，除了可以使用WAF内置的正常、严格和宽松防护规则组，您还可以选择自定义规则组。

><notice> 目前暂不支持通过API创建自定义规则组。您必须先在[Web应用防火墙控制台](https://yundun.console.aliyun.com/?p=wafnext)的**系统管理** > **防护规则组**页面，新建规则组并获得对应规则组ID后，才可以调用本接口，为域名应用自定义规则组。
></notice>


# QPS限制

本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyProtectionRuleCacheStatus' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已添加的域名名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '配置规则ID。
> 调用[DescribeProtectionModuleRules](~~100398~~)接口可以查询到所有规则ID。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '42755',
          ),
        ),
        2 => 
        array (
          'name' => 'DefenseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防护功能模块。固定取值：**tamperproof**。',
            'type' => 'string',
            'required' => true,
            'example' => 'tamperproof',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。
> 您可以通过调用[DescribeInstanceInfo](~~140857~~)接口查看当前WAF实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf_elasticity-cn-0xldbqt****',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '
WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyProtectionRuleCacheStatusResponse>\\r\\n\\t<RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\r\\n</ModifyProtectionRuleCacheStatusResponse>","errorExample":""}]',
      'title' => '更新网站防篡改规则所防护的页面缓存',
      'summary' => '更新指定网站防篡改规则所防护的页面的缓存。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteProtectionModuleRule' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除防护规则的域名。

> 您可以调用[DescribeDomainList](~~255880~~)查询所有已接入WAF防护的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'DefenseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的防护规则所属防护功能模块。取值：

- **waf-codec**：表示规则防护引擎解码设置。

- **tamperproof**：表示网站防篡改规则配置。

- **dlp**：表示防敏感信息泄漏规则配置。

- **ng_account**：表示账户安全规则配置。

- **antifraud**：表示数据风控防护请求配置。

- **antifraud_js**：表示数据风控JS插入页面配置。

- **bot_algorithm**：表示Bot管理的智能算法规则。

- **bot_wxbb_pkg**：表示App防护的版本防护规则。

- **bot_wxbb**：表示App防护的路径防护规则。

- **ac_custom**：表示自定义防护策略规则配置。

- **whitelist**：表示白名单规则配置。
',
            'type' => 'string',
            'required' => true,
            'example' => 'ac_custom',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要删除的防护规则的ID。

> 您可以调用[DescribeProtectionModuleRules](~~100398~~)查询指定防护功能模块下的所有规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '42754',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-mp9153****',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfm2pz25js****',
          ),
        ),
        5 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '1557B42F-B889-460A-B17F-1DE5C5AD7FF2',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1557B42F-B889-460A-B17F-1DE5C5AD7FF2\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteProtectionModuleRuleResponse>\\n    <RequestId>1557B42F-B889-460A-B17F-1DE5C5AD7FF2</RequestId>\\n</DeleteProtectionModuleRuleResponse>","errorExample":""}]',
      'title' => '删除防护配置模块的规则',
      'summary' => '调用DeleteProtectionModuleRule删除指定防护模块中配置的规则。',
      'description' => '# 使用说明

本接口用于删除指定防护模块中配置的规则。

# QPS限制

本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeProtectionModuleCodeConfig' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CodeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的代码类型。取值固定为**14**，表示查询适用于WAF地域级IP黑名单配置的地域代码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '14',
          ),
        ),
        1 => 
        array (
          'name' => 'CodeValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的地域代码的类型。取值：
- **0**：表示查询中国境内地域的代码。
- **1**：表示查询中国境外地域的代码。

不设置该参数表示查询所有类型。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-tl32ast****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '网站域名在资源管理服务中所属的资源组ID。不设置该参数表示默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfm2pz25js****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => 'cn-hangzhou',
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
              'CodeConfigs' => 
              array (
                'description' => '地域代码的具体配置。使用JSON数组转化的字符串表示。JSON数组中的每个元素表示一种类型的地域代码，包含以下字段：

- **code**：Integer类型 | 表示地域代码的类型。取值：**0**（表示中国境内地域代码） | **1**（表示中国境外地域代码）。

- **name**：String类型 | 表示该类型包含的所有地域代码。不同地域代码间使用半角逗号（,）分隔。关于地域代码的具体含义，请参见**返回数据**表格下方的说明。

- **env**：String类型 | 表示地域代码是否可用。取值：**online**（表示地域代码可用） | **offline**（表示地域代码不可用）。',
                'type' => 'string',
                'example' => '[{"code":0,"name":"310000,530000,150000,110000,TW_01,220000,510000,120000,640000,340000,370000,140000,440000,450000,650000,320000,360000,130000,410000,330000,460000,420000,430000,MO_01,620000,350000,540000,520000,210000,500000,610000,630000,HK_01,230000","env":"online"}]',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'BE3911B8-9D96-5B39-8875-503BBC9DA4BF',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CodeConfigs\\": \\"[{\\\\\\"code\\\\\\":0,\\\\\\"name\\\\\\":\\\\\\"310000,530000,150000,110000,TW_01,220000,510000,120000,640000,340000,370000,140000,440000,450000,650000,320000,360000,130000,410000,330000,460000,420000,430000,MO_01,620000,350000,540000,520000,210000,500000,610000,630000,HK_01,230000\\\\\\",\\\\\\"env\\\\\\":\\\\\\"online\\\\\\"}]\\",\\n  \\"RequestId\\": \\"BE3911B8-9D96-5B39-8875-503BBC9DA4BF\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeProtectionModuleCodeConfigResponse>\\r\\n\\t<RequestId>BE3911B8-9D96-5B39-8875-503BBC9DA4BF</RequestId>\\r\\n\\t<CodeConfigs>\\r\\n\\t\\t<code>0</code>\\r\\n\\t\\t<name>310000,530000,150000,110000,TW_01,220000,510000,120000,640000,340000,370000,140000,440000,450000,650000,320000,360000,130000,410000,330000,460000,420000,430000,MO_01,620000,350000,540000,520000,210000,500000,610000,630000,HK_01,230000</name>\\r\\n\\t\\t<env>online</env>\\r\\n\\t</CodeConfigs>\\r\\n</DescribeProtectionModuleCodeConfigResponse>","errorExample":""}]',
      'title' => '获取WAF防护功能模块代码配置',
      'summary' => '调用DescribeProtectionModuleCodeConfig查询WAF地域级IP黑名单中支持配置的地域代码。',
      'description' => '# 使用说明

本接口用于查询WAF地域级IP黑名单中支持配置的地域代码。【待补充：调用哪个接口设置IP黑名单】


# QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => '**中国境内地域代码（`"code": 0`）含义说明**

```
{
  "310000": "上海市",
  "610000": "陕西省",
  "360000": "江西省",
  "230000": "黑龙江省",
  "530000": "云南省",
  "140000": "山西省",
  "440000": "广东省",
  "320000": "江苏省",
  "110000": "北京市",
  "MO_01": "中国澳门",
  "620000": "甘肃省",
  "370000": "山东省",
  "150000": "内蒙古自治区",
  "450000": "广西壮族自治区",
  "410000": "河南省",
  "500000": "重庆市",
  "120000": "天津市",
  "630000": "青海省",
  "460000": "海南省",
  "640000": "宁夏回族自治区",
  "330000": "浙江省",
  "HK_01": "中国香港",
  "420000": "湖北省",
  "430000": "湖南省",
  "130000": "河北省",
  "510000": "四川省",
  "350000": "福建省",
  "210000": "辽宁省",
  "220000": "吉林省",
  "340000": "安徽省",
  "520000": "贵州省",
  "TW_01": "中国台湾"
}
```

**中国境外地域代码（`"code": 1`）含义说明**

```
{
 "KE": "肯尼亚",
  "KG": "吉尔吉斯斯坦",
  "KH": "柬埔寨",
  "KI": "基里巴斯",
  "KM": "科摩罗",
  "KN": "圣基茨和尼维斯联邦",
  "KP": "朝鲜",
  "KR": "韩国",
  "KW": "科威特",
  "KY": "开曼群岛",
  "KZ": "哈萨克斯坦",
  "LA": "老挝",
  "LB": "黎巴嫩",
  "LC": "圣卢西亚",
  "LI": "列支敦士登",
  "LK": "斯里兰卡",
  "LR": "利比里亚",
  "LS": "莱索托",
  "LT": "立陶宛",
  "LU": "卢森堡",
  "LV": "拉脱维亚",
  "LY": "利比亚",
  "MA": "摩洛哥",
  "MC": "摩纳哥",
  "MD": "摩尔多瓦",
  "ME": "黑山共和国",
  "MF": "圣马丁",
  "MG": "马达加斯加",
  "MH": "马绍尔群岛",
  "MK": "马其顿",
  "ML": "马里",
  "MM": "缅甸",
  "MN": "蒙古",
  "MP": "北马里亚纳群岛",
  "MQ": "马提尼克岛",
  "MR": "毛里塔尼亚",
  "MS": "蒙塞拉特岛",
  "MT": "马耳他",
  "MU": "毛里求斯",
  "MV": "马尔代夫",
  "MW": "马拉维",
  "MX": "墨西哥",
  "MY": "马来西亚",
  "MZ": "莫桑比克",
  "NA": "纳米比亚",
  "NC": "新喀里多尼亚",
  "NE": "尼日尔",
  "NF": "诺福克岛",
  "NG": "尼日利亚",
  "NI": "尼加拉瓜",
  "NL": "荷兰",
  "NO": "挪威",
  "NP": "尼泊尔",
  "NR": "瑙鲁",
  "NU": "纽埃岛",
  "NZ": "新西兰",
  "GA": "加蓬",
  "GB": "英国",
  "WS": "萨摩亚群岛",
  "GD": "格林纳达",
  "GE": "格鲁吉亚",
  "GF": "法属圭亚那",
  "GG": "根西岛",
  "GH": "加纳",
  "GI": "直布罗陀",
  "GL": "格陵兰岛",
  "GM": "冈比亚共和国",
  "GN": "几内亚",
  "GP": "瓜德罗普",
  "GQ": "赤道几内亚",
  "GR": "希腊",
  "GT": "危地马拉",
  "GU": "关岛",
  "GW": "几内亚比绍共和国",
  "GY": "圭亚那",
  "HN": "洪都拉斯",
  "HR": "克罗地亚",
  "HT": "海地",
  "YE": "也门",
  "HU": "匈牙利",
  "YT": "马约特岛",
  "ID": "印度尼西亚",
  "IE": "爱尔兰",
  "IL": "以色列",
  "IM": "马恩岛",
  "IN": "印度",
  "IO": "英属印度洋领地",
  "ZA": "南非",
  "IQ": "伊拉克共和国",
  "IR": "伊朗",
  "IS": "冰岛",
  "IT": "意大利",
  "ZM": "赞比亚",
  "JE": "泽西岛",
  "ZW": "津巴布韦",
  "JM": "牙买加",
  "JO": "约旦",
  "JP": "日本",
  "SI": "斯洛文尼亚",
  "BY": "白俄罗斯",
  "SK": "斯洛伐克",
  "BZ": "伯利兹",
  "SL": "塞拉利昂",
  "SM": "圣马力诺",
  "SN": "塞内加尔",
  "SO": "索马里",
  "CA": "加拿大",
  "SR": "苏里南",
  "SS": "南苏丹",
  "ST": "圣多美和普林西比",
  "CD": "刚果民主共和国",
  "CF": "中非共和国",
  "SV": "萨尔瓦多",
  "CG": "刚果",
  "CH": "瑞士",
  "SX": "荷属圣马丁",
  "SY": "阿拉伯叙利亚共和国",
  "CI": "科特迪瓦",
  "SZ": "斯威士兰",
  "CK": "库克群岛",
  "CL": "智利",
  "CM": "喀麦隆",
  "CN": "中华人民共和国",
  "CO": "哥伦比亚",
  "TC": "特克斯和凯科斯岛",
  "CR": "哥斯达黎加",
  "TD": "乍得",
  "CU": "古巴",
  "CV": "佛得角",
  "TG": "多哥",
  "CW": "库拉索",
  "TH": "泰国",
  "CX": "澳大利亚圣诞岛",
  "TJ": "塔吉克斯坦",
  "CY": "塞浦路斯",
  "CZ": "捷克共和国",
  "TK": "托克劳群岛",
  "TL": "东帝汶",
  "TM": "土库曼斯坦",
  "TN": "突尼斯",
  "TO": "汤加",
  "TR": "土耳其",
  "TT": "特立尼达和多巴哥",
  "DE": "德国",
  "TV": "图瓦卢",
  "DJ": "吉布提",
  "TZ": "坦桑尼亚",
  "DK": "丹麦",
  "DM": "多米尼克国",
  "DO": "多米尼加共和国",
  "UA": "乌克兰",
  "UG": "乌干达",
  "DZ": "阿尔及利亚",
  "UM": "美国本土外小岛屿",
  "US": "美国",
  "EC": "厄瓜多尔",
  "EE": "爱沙尼亚",
  "EG": "埃及",
  "UY": "乌拉圭",
  "UZ": "乌兹别克斯坦",
  "VA": "梵蒂冈",
  "VC": "圣文森特和格林纳丁斯",
  "ER": "厄立特里亚",
  "ES": "西班牙",
  "VE": "委内瑞拉",
  "ET": "埃塞俄比亚",
  "VG": "英属维尔京群岛",
  "VI": "美属维尔京群岛",
  "VN": "越南",
  "VU": "瓦努阿图",
  "FI": "芬兰",
  "FJ": "斐济",
  "FK": "马尔维纳斯群岛",
  "FM": "密克罗尼西亚联邦",
  "FO": "法罗群岛",
  "FR": "法国",
  "WF": "瓦利斯群岛和富图纳群岛",
  "OM": "阿曼",
  "PA": "巴拿马",
  "PE": "秘鲁",
  "PF": "法属波利尼西亚",
  "PG": "巴布亚新几内亚",
  "PH": "菲律宾",
  "PK": "巴基斯坦",
  "PL": "波兰",
  "PM": "圣皮埃尔和密克隆岛",
  "PR": "波多黎各",
  "PS": "巴勒斯坦",
  "PT": "葡萄牙",
  "PW": "帕劳",
  "PY": "巴拉圭",
  "QA": "卡塔尔",
  "AD": "安道尔",
  "AE": "阿拉伯联合酋长国",
  "AF": "阿富汗",
  "AG": "安提瓜和巴布达",
  "AI": "安圭拉",
  "AL": "阿尔巴尼亚",
  "AM": "亚美尼亚",
  "AO": "安哥拉",
  "AP": "亚太地区",
  "AQ": "南极洲",
  "AR": "阿根廷",
  "AS": "美属萨摩亚",
  "RE": "留尼旺岛",
  "AT": "奥地利",
  "AU": "澳大利亚",
  "AW": "阿鲁巴",
  "AX": "奥兰群岛",
  "AZ": "阿塞拜疆",
  "RO": "罗马尼亚",
  "BA": "波黑",
  "BB": "巴巴多斯",
  "RS": "塞尔维亚",
  "BD": "孟加拉共和国",
  "BE": "比利时",
  "RU": "俄罗斯",
  "BF": "布基纳法索",
  "RW": "卢旺达",
  "BG": "保加利亚",
  "BH": "巴林",
  "BI": "布隆迪共和国",
  "BJ": "贝宁",
  "BL": "圣巴泰勒米岛",
  "BM": "百慕大群岛",
  "BN": "文莱达鲁萨兰国",
  "BO": "玻利维亚",
  "SA": "沙特阿拉伯",
  "BQ": "博内尔、圣尤斯蒂休斯和萨巴",
  "SB": "所罗门群岛",
  "BR": "巴西",
  "SC": "塞舌尔",
  "SD": "苏丹",
  "BS": "巴哈马群岛",
  "SE": "瑞典",
  "BT": "不丹",
  "SG": "新加坡",
  "BW": "博茨瓦纳"
}

```',
      'extraInfo' => ' ',
    ),
    'DescribeRuleGroups' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '93352',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREwaf10VDFG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求源ip。无需填写，系统自动获取。',
            'type' => 'string',
            'required' => false,
            'example' => '60.208.*.*',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，每页的行数。默认值为**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，当前页的页码。默认值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'WafLang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回消息的语言类型。取值：

- **ZH**（默认）：中文
- **EN**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'ZH',
          ),
        ),
        5 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则组类型。取值：
- 默认空
- **10**：系统规则组
- **1**：自定义规则组',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'enum' => 
            array (
              0 => '1',
              1 => '10',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'PolicyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则组ID，仅支持单个输入。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1011',
          ),
        ),
        7 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf_cdnsdf3****',
          ),
        ),
        8 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值： 
- **cn**：中国大陆地区（默认）
- **cn-hongkong**：海外地区',
            'type' => 'string',
            'required' => false,
            'example' => 'cn',
            'default' => 'cn',
          ),
        ),
        9 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。

不设置该参数表示默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2**',
          ),
        ),
        10 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '请求id。',
                'type' => 'string',
                'example' => '02E9A4B8-90FB-5F41-A049-*',
              ),
              'TaskStatus' => 
              array (
                'description' => '当前请求的执行状态： 
- **0**：等待执行。  
- **1**：正在执行中。  
- **2**：已执行完成。  
          ',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Total' => 
              array (
                'description' => '返回结果的总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'WafTaskId' => 
              array (
                'description' => 'waf的请求id。',
                'type' => 'string',
                'example' => '123',
              ),
              'RuleGroups' => 
              array (
                'description' => '规则组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '规则组列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '规则组类型。取值：
- **10**：系统规则组
- **1**：自定义规则组',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'RuleCnt' => 
                    array (
                      'description' => '当前规则的数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'RuleGroupUpdateTime' => 
                    array (
                      'description' => '规则组更新时间，秒级时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1711445265',
                    ),
                    'PolicyId' => 
                    array (
                      'description' => '规则组ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '116562',
                    ),
                    'Name' => 
                    array (
                      'description' => '规则组名称。',
                      'type' => 'string',
                      'example' => 'rule_group_test',
                    ),
                    'TemplatePolicyId' => 
                    array (
                      'description' => '规则组模板',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1102',
                    ),
                    'RuleGroupTemplateName' => 
                    array (
                      'description' => '规则模板的名称。',
                      'type' => 'string',
                      'example' => 'rule_group_test',
                    ),
                    'Desc' => 
                    array (
                      'description' => '规则组描述。',
                      'type' => 'string',
                      'example' => 'desc',
                    ),
                    'WafVersion' => 
                    array (
                      'description' => '为当前配置设置一个版本号（用于实现乐观锁控制）。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '11',
                    ),
                    'DomainList' => 
                    array (
                      'description' => '引用当前规则组的域名列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '引用当前规则组的域名',
                        'type' => 'string',
                        'example' => 'test.aliyundome.com',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"02E9A4B8-90FB-5F41-A049-*\\",\\n  \\"TaskStatus\\": 2,\\n  \\"Total\\": 1,\\n  \\"WafTaskId\\": \\"123\\",\\n  \\"RuleGroups\\": [\\n    {\\n      \\"Type\\": 1,\\n      \\"RuleCnt\\": 1,\\n      \\"RuleGroupUpdateTime\\": 1711445265,\\n      \\"PolicyId\\": 116562,\\n      \\"Name\\": \\"rule_group_test\\",\\n      \\"TemplatePolicyId\\": 1102,\\n      \\"RuleGroupTemplateName\\": \\"rule_group_test\\",\\n      \\"Desc\\": \\"desc\\",\\n      \\"WafVersion\\": 11,\\n      \\"DomainList\\": [\\n        \\"test.aliyundome.com\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '分页查询正则规则组',
    ),
    'DescribeRules' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '93355',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREwaf10VDFG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求源IP。无需填写，系统自动获取。',
            'type' => 'string',
            'required' => false,
            'example' => '42.84.*.*',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时，每页的行数。默认值为**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。默认值：**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleIdKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则的id，支持模糊查询',
            'type' => 'string',
            'required' => false,
            'example' => ' 1131*0',
          ),
        ),
        4 => 
        array (
          'name' => 'CveIdKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CVE ID',
            'type' => 'string',
            'required' => false,
            'example' => 'CVE-*-*5',
          ),
        ),
        5 => 
        array (
          'name' => 'ProtectionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防护类型。取值如下：
-  **11**：SQL注入      
-  **12**：跨站脚本              
-  **13**：代码执行    
-  **14**：CRLF      
-  **15**：本地文件包含 
-  **16**：远程文件包含
-  **17**：webshell             
-  **19**：跨站请求伪造            
-  **20**：其他               
-  **21**：SEMA',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '11',
          ),
        ),
        6 => 
        array (
          'name' => 'ApplicationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用类型。取值如下：
-  **0**：通用
-  **1**：wordpress
-  **2**：dedecms
-  **3**：Discuz
-  **4**：phpcms
-  **5**：ecshop
-  **6**：shopex
-  **7**：Drupal
-  **8**：joomla
-  **9**：Metinfo
-  **10**：Struts2
-  **11**：SpringBoot
-  **12**：Jboss
-  **13**：weblogic
-  **14**：websphere
-  **15**：tomcat
-  **16**：es
-  **17**：ThinkPHP
-  **18**：fastjosn
-  **19**：ImageMagick
-  **20**：PHPWind
-  **21**：PHPAdmin
-  **99**：其它',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        7 => 
        array (
          'name' => 'RiskLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的检查项风险等级。取值：

- **0**：高危
- **1**：中危
- **2**：低危',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'RuleGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '正则规则组ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1012',
          ),
        ),
        9 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置规则名称的语言属性，取值：

- **zh**：表示规则名称为中文。
- **en**：表示规则名称为英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        10 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。

> 您可以通过调用[DescribeInstance](~~433756~~)接口查看当前WAF实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-*',
          ),
        ),
        11 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。取值： 
- **cn**：中国大陆地区（默认）
- **cn-hongkong**：海外地区',
            'type' => 'string',
            'required' => false,
            'example' => 'cn',
            'default' => 'cn',
          ),
        ),
        12 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-*',
          ),
        ),
        13 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
              'RuleGroupTemplateId' => 
              array (
                'description' => '正则规则组ID。',
                'type' => 'string',
                'example' => '1012',
              ),
              'RuleGroupName' => 
              array (
                'description' => '正则规则组名称。',
                'type' => 'string',
                'example' => 'test111',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的id。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-*',
              ),
              'TotalCount' => 
              array (
                'description' => '查询到的规则总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RuleGroupTemplateName' => 
              array (
                'description' => '规则组的名称。',
                'type' => 'string',
                'example' => 'rule_group_test',
              ),
              'IsSubscribe' => 
              array (
                'description' => '规则组自动更新状态。

- 1：表示自动更新。

- 2：表示不自动更新。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Rules' => 
              array (
                'description' => '规则列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '规则列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RiskLevel' => 
                    array (
                      'description' => '规则风险等级。取值：

- **0**：高风险。
- **1**：中风险。
- **2**：低风险。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '规则的更新时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1684120148.0',
                    ),
                    'Description' => 
                    array (
                      'description' => '规则的描述信息。',
                      'type' => 'string',
                      'example' => '默认',
                    ),
                    'CveUrl' => 
                    array (
                      'description' => 'CVE链接。',
                      'type' => 'string',
                      'example' => 'https://avd.aliyun.com/',
                    ),
                    'ApplicationType' => 
                    array (
                      'description' => '应用类型。取值如下：
-  **0**：通用
-  **1**：wordpress
-  **2**：dedecms
-  **3**：Discuz
-  **4**：phpcms
-  **5**：ecshop
-  **6**：shopex
-  **7**：Drupal
-  **8**：joomla
-  **9**：Metinfo
-  **10**：Struts2
-  **11**：SpringBoot
-  **12**：Jboss
-  **13**：weblogic
-  **14**：websphere
-  **15**：tomcat
-  **16**：es
-  **17**：ThinkPHP
-  **18**：fastjosn
-  **19**：ImageMagick
-  **20**：PHPWind
-  **21**：PHPAdmin
-  **99**：其它',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '15',
                    ),
                    'CveId' => 
                    array (
                      'description' => 'CVE ID。',
                      'type' => 'string',
                      'example' => 'CVE-2021-*',
                    ),
                    'ProtectionType' => 
                    array (
                      'description' => '防护类型。取值如下：
-  **11**：SQL注入      
-  **12**：跨站脚本              
-  **13**：代码执行    
-  **14**：CRLF      
-  **15**：本地文件包含 
-  **16**：远程文件包含
-  **17**：webshell             
-  **19**：跨站请求伪造            
-  **20**：其他               
-  **21**：SEMA',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '11',
                    ),
                    'RuleName' => 
                    array (
                      'description' => '规则名称。',
                      'type' => 'string',
                      'example' => 'rules_41',
                    ),
                    'RuleId' => 
                    array (
                      'description' => '规则id。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '42755',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RuleGroupTemplateId\\": \\"1012\\",\\n  \\"RuleGroupName\\": \\"test111\\",\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-*\\",\\n  \\"TotalCount\\": 1,\\n  \\"RuleGroupTemplateName\\": \\"rule_group_test\\",\\n  \\"IsSubscribe\\": 1,\\n  \\"Rules\\": [\\n    {\\n      \\"RiskLevel\\": 0,\\n      \\"UpdateTime\\": 1684120148,\\n      \\"Description\\": \\"默认\\",\\n      \\"CveUrl\\": \\"https://avd.aliyun.com/\\",\\n      \\"ApplicationType\\": 15,\\n      \\"CveId\\": \\"CVE-2021-*\\",\\n      \\"ProtectionType\\": 11,\\n      \\"RuleName\\": \\"rules_41\\",\\n      \\"RuleId\\": 42755\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '分页查询正则规则组中的规则',
    ),
    'ModifyLogRetrievalStatus' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要操作的WAF实例ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf_elasticity-cn-0xldbqt****',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已添加的域名名称。

> 您可以调用[DescribeDomainNames](~~86373~~)查询所有已经添加的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启日志检索功能，取值：

- **0**：表示关闭。

- **1**：表示开启。

> 只有为域名开启日志检索功能后，WAF才会记录该域名的访问请求日志。如果您关闭日志检索功能，则处于关闭状态期间的访问请求日志不会被记录；即使重新开启日志检索功能，您也无法查询到停用期间的访问请求日志。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。

不设置该参数表示默认资源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfm2pz25js****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
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
            'errorCode' => 'Forbbiden',
            'errorMessage' => 'User not authorized to operate on the specified resource.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyLogRetrievalStatusResponse>\\r\\n\\t<RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\r\\n</ModifyLogRetrievalStatusResponse>","errorExample":""}]',
      'title' => '为指定域名开启或关闭日志检索功能',
      'summary' => '为指定域名开启或关闭日志检索功能。',
      'description' => '> 日志检索功能已经升级为WAF日志服务功能，更多信息，请参见[WAF日志服务](~~100503~~)。该接口仅适用于保有日志检索功能的存量用户。如果您需要为域名开启或关闭WAF日志服务，请调用[ModifyLogServiceStatus](~~162742~~)。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyLogServiceStatus' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例ID。

您可以通过调用[DescribeInstanceInfo](~~140857~~)接口查看当前WAF实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf_elasticity-cn-0xldbqt****',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已添加的域名名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'Enabled',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启日志采集功能，取值：

- **0**：关闭

- **1**：开启',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '
WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'example' => 'D7861F61-5B61-46CE-A47C-6B19160D5EB0',
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
            'errorCode' => 'Forbbiden',
            'errorMessage' => 'User not authorized to operate on the specified resource.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19160D5EB0\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ModifyLogServiceStatusResponse>\\r\\n\\t<RequestId>D7861F61-5B61-46CE-A47C-6B19160D5EB0</RequestId>\\r\\n</ModifyLogServiceStatusResponse>","errorExample":""}]',
      'title' => '开启或关闭指定域名配置的日志采集功能',
      'summary' => '调用ModifyLogServiceStatus接口开启或关闭指定域名配置的日志采集功能。',
      'description' => '为域名配置开启日志采集功能前请确认WAF实例已开通日志实时查询分析功能并且授权WAF将记录的日志分发到您专属的日志服务Logstore中。

更多详细信息，请参见[日志实时查询分析](~~100503~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeLogServiceStatus' => 
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
            'description' => 'WAF实例的ID。

> 您可以调用DescribeInstanceInfo查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-zz11sr5****',
          ),
        ),
        1 => 
        array (
          'name' => 'Region',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志服务地域ID。取值： 
- **cn**：中国内地地区（默认）
- **cn-hongkong**：海外地区',
            'type' => 'string',
            'required' => false,
            'example' => 'cn',
            'default' => 'cn',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfm2pz25js****',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。默认值：**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页的行数。默认值为**10**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'DomainNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要查询的域名列表。一次最多允许查询10个域名。不填写该参数表示查询所有域名。

> 您可以调用[DescribeDomainNames](~~86373~~)查询所有已经接入当前WAF实例进行防护的域名。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '域名。',
              'type' => 'string',
              'required' => false,
              'example' => 'www.aliyunXXXX.com',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        6 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '返回结果的总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '63',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D7861F61-5B61-46CE-A47C-6B19****5EB0',
              ),
              'DomainStatus' => 
              array (
                'description' => '域名的日志采集状态（是否开启了日志采集）。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Domain' => 
                    array (
                      'description' => '域名名称。',
                      'type' => 'string',
                      'example' => 'www.aliyun.com',
                    ),
                    'SlsLogActive' => 
                    array (
                      'description' => '该域名是否开启了日志采集。取值：

- **1**：表示已开启。
- **0**：表示未开启。',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 63,\\n  \\"RequestId\\": \\"D7861F61-5B61-46CE-A47C-6B19****5EB0\\",\\n  \\"DomainStatus\\": [\\n    {\\n      \\"Domain\\": \\"www.aliyun.com\\",\\n      \\"SlsLogActive\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeLogServiceStatusResponse>\\r\\n\\t<RequestId>C2E97B3F-1623-4CDF-A7E2-FD9D4CF1027A</RequestId>\\r\\n\\t<TotalCount>1</TotalCount>\\r\\n\\t<DomainStatus>\\r\\n\\t\\t<Domain>www.aliyun.com</Domain>\\r\\n\\t\\t<SlsLogActive>1</SlsLogActive>\\r\\n\\t</DomainStatus>\\r\\n</DescribeLogServiceStatusResponse>","errorExample":""}]',
      'title' => '查询日志采集状态',
      'summary' => '查询已接入WAF进行防护的域名的日志采集状态（是否开启日志采集）。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeWafSourceIpSegment' => 
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
            'description' => '要查询的WAF实例的ID。

> 您可以调用[DescribeInstanceInfo](~~140857~~)查询当前WAF实例的ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-zz11sr5****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例在资源管理服务中所属的资源组ID。默认为空，即属于默认资源组。

关于资源组的更多信息，请参见[创建资源组](~~94485~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfm2pz25js****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示非中国内地。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'AB2F5E31-EE96-4FD7-9560-45FF****77FF',
              ),
              'Ips' => 
              array (
                'description' => 'IPv4防护集群使用的WAF回源IP网段列表。',
                'type' => 'string',
                'example' => '47.XXX.XXX.192/26,……,47.XXX.XXX.0/24',
              ),
              'IpV6s' => 
              array (
                'description' => 'IPv6防护集群使用的WAF回源IP网段列表。',
                'type' => 'string',
                'example' => '39.XXX.XXX.0/24,……,2408:400a:XXXX:XXXX::/56',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AB2F5E31-EE96-4FD7-9560-45FF****77FF\\",\\n  \\"Ips\\": \\"47.XXX.XXX.192/26,……,47.XXX.XXX.0/24\\",\\n  \\"IpV6s\\": \\"39.XXX.XXX.0/24,……,2408:400a:XXXX:XXXX::/56\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeWafSourceIpSegmentResponse>\\r\\n\\t<RequestId>AB2F5E31-EE96-4FD7-9560-45FF5D5377FF</RequestId>\\r\\n\\t<IpV6s>39.XXX.XXX.0/24,……,2408:400a:XXXX:XXXX::/56</IpV6s>\\r\\n\\t<Ips>47.XXX.XXX.192/26,……,47.XXX.XXX.0/24</Ips>\\r\\n</DescribeWafSourceIpSegmentResponse>\\t","errorExample":""}]',
      'title' => '获取WAF实例的回源IP网段列表',
      'summary' => '查询WAF防护集群使用的回源IP网段。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'MoveResourceGroup' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要操作的WAF资源的ID。

您将网站域名接入WAF防护后，则该域名表示一个WAF资源。WAF资源在资源管理服务中使用资源ID（ResourceId）作为其唯一标识，WAF资源ID的命名方式为：`<InstanceId>~<Domain>`。具体说明如下：

- `<InstanceId>`表示当前WAF实例的ID。您可以调用WAF API中的[DescribeInstanceInfo](~~140857~~)接口，查询当前WAF实例的ID。

- `<Domain>`表示已接入WAF实例防护的网站域名。您可以调用WAF API中的[DescribeDomainList](~~255880~~)接口，查询所有已接入WAF实例防护的域名。

- `<InstanceId>`和`<Domain>`之间使用`~`连接，即表示WAF域名资源的资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf-cn-09k1rd5****~www.example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF资源要转入的资源组的ID。

您通过资源管理服务创建资源组后，资源管理服务会为资源组生成一个唯一标识，即资源组ID（ResourceGroupId）。

您可以在[资源管理控制台](https://resourcemanager.console.aliyun.com/resource-groups)的**资源组**页面，查询所有资源组ID；或者调用资源管理服务提供的[ListResourceGroups](~~158855~~)接口，查询所有资源组ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-atstuj3rtop****',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF资源的类型。唯一取值：**domain**，表示WAF的资源类型仅为域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'domain',
          ),
        ),
        3 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'WAF实例所属地域。取值：

- **cn-hangzhou**：表示中国内地。

- **ap-southeast-1**：表示海外地区。
',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
            'default' => 'cn-hangzhou',
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
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<MoveResourceGroupResponse>\\n\\t<RequestId>C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E</RequestId>\\n</MoveResourceGroupResponse>","errorExample":""}]',
      'title' => '将资源移动到新的资源组',
      'summary' => '调用MoveResourceGroup，将一个WAF资源转移到其他资源组。',
      'description' => '# 使用说明

WAF资源表示已接入WAF防护的域名。资源组（Resource Group）是在阿里云账号下进行资源分组管理的一种机制。资源组帮助您解决单个云账号内多项目或多应用的资源分组，以及用户授权管理的复杂性问题。接入WAF防护的域名资源默认属于默认资源组。您可以将WAF的域名资源转移到您自定义的资源组中，实现资源分组管理。

您可以通过阿里云控制台创建资源组，相关操作，请参见[创建资源组](~~94485~~)；或者通过调用资源管理服务的API创建资源组，具体接口说明，请参见[CreateResourceGroup](~~158865~~)。

关于资源组的更多介绍，请参见[什么是资源管理](~~94475~~)。

# QPS限制

本接口无单用户QPS限制，请您根据实际需要合理调用。',
      'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。公共请求参数的详细介绍，请参见[公共参数](~~162719~~)。

调用API的请求格式，请参见本文**示例**中的请求示例。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'wafopenapi.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'wafopenapi.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
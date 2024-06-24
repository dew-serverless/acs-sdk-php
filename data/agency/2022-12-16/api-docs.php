<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Agency',
    'version' => '2022-12-16',
  ),
  'directories' => 
  array (
    0 => 'CancelSubscriptionBill',
    1 => 'EditZeroCreditShutdown',
    2 => 'EditEndUserStatus',
    3 => 'EditNewBuyStatus',
    4 => 'SubscriptionBill',
    5 => 'InviteSubAccount',
    6 => 'CreateCustomer',
    7 => 'SetWarningThreshold',
    8 => 'SetCreditLine',
    9 => 'SetAccountInfo',
    10 => 'ResendEmail',
    11 => 'ListCountries',
    12 => 'GetUnassociatedCustomer',
    13 => 'GetMonthlyBill',
    14 => 'GetInviteStatus',
    15 => 'GetDailyBill',
    16 => 'GetCreditInfo',
    17 => 'GetAccountInfo',
    18 => 'DeductOutstandingBalance',
    19 => 'CustomerQuotaRecordList',
    20 => 'ExportCustomerQuotaRecord',
    21 => 'QuotaListExportPaged',
    22 => 'ListCouponUsage',
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'CancelSubscriptionBill' => 
    array (
      'summary' => '国际渠道生态伙伴多级账单取消订阅功能',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SubscribeType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'subscribeType',
            'description' => '订阅类型 

-  PartnerBillingItemDetailForBillingPeriod  计费项账单明细
- PartnerBillingItemDetailMonthly    计费项月账单
- PartnerInstanceDetailForBillingPeriod  实例账单明细
- PartnerInstanceDetailMonthly 实例月账单',
            'type' => 'string',
            'required' => true,
            'example' => 'PartnerBillingItemDetailForBillingPeriod',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'message',
                'description' => '提示信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => '请求id',
                'type' => 'string',
                'example' => '210e876f16704666020714468dab35',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => '状态码',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  1008 => '取消订阅失败',
                  1009 => '不存在订阅记录',
                ),
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => '是否成功',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"210e876f16704666020714468dab35\\",\\n  \\"Data\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '取消订阅多级分销账单',
      'description' => '请确保调用者是国际阿里云总经销商伙伴。

用户一次可取消订阅一个类型的账单文件

对应账单类型被取消后,不再推送文件到指定oss空间

**本内容只发布国际站**',
    ),
    'EditZeroCreditShutdown' => 
    array (
      'summary' => '阿里云总经销商伙伴和经销商伙伴修改下级客户的停机策略',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'Uid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'uid',
            'description' => '待编辑停机策略的分销客户uid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1263644979775567',
          ),
        ),
        1 => 
        array (
          'name' => 'ShutdownPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'shutdownPolicy',
            'description' => '### **停机策略**
详细介绍请参考官网文档：https://www.alibabacloud.com/help/zh/channel-platform/latest/shutdowndelayprivilege

- **immediatelyStop 立即停机**——当分销客户账号可用额度小于0，账号进入欠费状态，不可新购资源，后付费实例停机不再产生消费，预付费实例可以使用到有效期止。停机状态保持15天后，后付费实例将被释放。产品存在出账延迟，可能存在实例成功停机后，额度仍在扣减情况。
- **delayStop 延迟停机**——延停策略中的透支额度，由阿里云根据账号历史消费金额统计得出，最低600 USD，预计在欠费后实例可继续使用15天。透支金额适用于按量付费产品，启用后当客户欠费时（可用额度< 0），欠费金额在透支额度范围内时，不触发实例停机。透支额度并非欠费金额上限，产品存在出账延迟，可能存在实例成功停机后，额度仍在扣减情况。停机状态保持15天后，后付费实例将被释放。在延停额度<=剩余额度<0的情况下，可手动立刻停机。
- **noStop 不停机**——选择欠费不停机，当客户欠费（剩余额度< 0）后不会触发客户停机，客户欠费金额无上限，需要在ACPN人工操作“立即停机”修改实例状态，请慎重选择。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'immediatelyStop' => 'immediatelyStop',
              'noStop' => 'noStop',
              'delayStop' => 'delayStop',
            ),
            'example' => 'noStop',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Msg' => 
              array (
                'title' => 'msg',
                'description' => '提示信息',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Message' => 
              array (
                'title' => 'message',
                'description' => '提示信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => '请求id',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
              'Data' => 
              array (
                'title' => 'data',
                'description' => '是否成功',
                'type' => 'string',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Msg\\": \\"SUCCESS\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\",\\n  \\"Data\\": \\"true\\",\\n  \\"Code\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '修改客户停机策略',
      'description' => '调用者必须是阿里云国际站渠道总经销商伙伴或阿里云国际站渠道经销商伙伴。

**本内容只发布国际站**',
    ),
    'EditEndUserStatus' => 
    array (
      'summary' => '阿里云国际渠道总经销商伙伴以及阿里云国际渠道经销商伙伴管理代销下级客户后付费实例的停机状态。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Uid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'uid',
            'description' => '待处理客户uid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1792155717328010',
          ),
        ),
        1 => 
        array (
          'name' => 'CreditStatus',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'creditStatus',
            'description' => '### 停机状态

- postPayFreeze  后付费停机
- postPayThaw 后付费复机',
            'type' => 'string',
            'required' => false,
            'example' => 'postPayFreeze',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Msg' => 
              array (
                'title' => 'msg',
                'description' => '提示信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Message' => 
              array (
                'title' => 'message',
                'description' => '提示信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => '请求id',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
              'Data' => 
              array (
                'title' => 'data',
                'description' => '是否成功',
                'type' => 'string',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Msg\\": \\"success\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\",\\n  \\"Data\\": \\"true\\",\\n  \\"Code\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '设置客户实例的停机状态',
      'description' => '调用者必须是阿里云国际渠道总经销商伙伴以及阿里云国际渠道经销商伙伴

**本内容只发布国际站**',
    ),
    'EditNewBuyStatus' => 
    array (
      'summary' => '阿里云代销模式的伙伴设置下级分销客户的新购状态',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Uid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'uid',
            'description' => '客户uid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1133166938931507',
          ),
        ),
        1 => 
        array (
          'name' => 'NewBuyStatus',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'newBuyStatus',
            'description' => '新购状态

cancelBan:取消禁止新购

ban:禁止新购',
            'type' => 'string',
            'required' => false,
            'example' => 'cancelBan',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Msg' => 
              array (
                'title' => 'msg',
                'description' => '提示信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Message' => 
              array (
                'title' => 'message',
                'description' => '提示信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => '请求id',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
              'Data' => 
              array (
                'title' => 'data',
                'description' => '是否成功',
                'type' => 'string',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => '状态码',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Msg\\": \\"success\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\",\\n  \\"Data\\": \\"true\\",\\n  \\"Code\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '修改客户新购状态',
      'description' => '调用者身份必须是阿里云代销模式的伙伴

**本内容只发布国际站**',
    ),
    'SubscriptionBill' => 
    array (
      'summary' => '阿里云生态伙伴多级账单订阅oss生成',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SubscribeBucket',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'subscribeType',
            'description' => '账单存储oss bucket名称',
            'type' => 'string',
            'required' => true,
            'example' => 'bill-bucket',
          ),
        ),
        1 => 
        array (
          'name' => 'BucketOwnerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerMainUid',
            'description' => '存储文件Oss归属的UID。

如果是伙伴订阅，并需要推送到下级伙伴账号的OSS上时，需要此账号为伙伴账号的下级伙伴账号，并对下级伙伴账号授予[AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/?spm=api-workbench.API%20Document.0.0.68c71e0fhmTSJp#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D)权限 

如果是伙伴订阅,且推送到伙伴账号的OSS时,需要伙伴账号进行授予[AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/?spm=api-workbench.API%20Document.0.0.68c71e0fhmTSJp#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D)权限。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '5569414254138836',
          ),
        ),
        2 => 
        array (
          'name' => 'SubscribeType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'popClientIP',
            'description' => '订阅类型 
PartnerBillingItemDetailForBillingPeriod  计费项账单明细
PartnerBillingItemDetailMonthly    计费项月账单
PartnerInstanceDetailForBillingPeriod  实例账单明细
PartnerInstanceDetailMonthly 实例月账单',
            'type' => 'string',
            'required' => true,
            'example' => 'PartnerBillingItemDetailForBillingPeriod',
          ),
        ),
        3 => 
        array (
          'name' => 'BeginBillingCycle',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'subscribeBucket',
            'description' => '起始推送账单月份
格式yyyy-MM

订阅成功后，系统会自动推送起始账期到当前时间的数据。最多可推送最近六个月内数据(包含当前月)。超出则订阅无效',
            'type' => 'string',
            'required' => true,
            'example' => '2022-10',
          ),
        ),
        4 => 
        array (
          'name' => 'BillFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账单文件格式
可选
csv
parquet

如果订阅多个文件类型,建议区分bucket订阅.避免文件覆盖',
            'type' => 'string',
            'required' => true,
            'example' => 'csv',
          ),
        ),
        5 => 
        array (
          'name' => 'SubscribeSegmentSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单个文件账单数据行数阈值，超过此阈值会自动拆分成多个文件，拆分后文件的命名规则为`uid_billType_billCycle_SquenceNo_fileNo`

文件名称除fileNo信息不一致外其他信息全部一致,可视为同一账期,同一类型文件.因拆分导致的多个文件.',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100000',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'message',
                'description' => '提示信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => '请求id',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => '状态码',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  1001 => '订阅账单类型无效',
                  1002 => '订阅文件类型无效',
                  1003 => '开始推送日期无效',
                  1004 => '订阅失败',
                  1005 => '没有订阅权限',
                  1006 => '已存在订阅记录',
                  1007 => '无效的bucket',
                ),
                'example' => '200',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => '是否成功',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\",\\n  \\"Data\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '订阅三级账单',
      'description' => '- 请确保调用者是国际阿里云总经销商伙伴。
- 用户一次订阅一个类型的账单文件。
- 订阅后次日开始每日推送上一日生成的账单文件，每月5号推送上月整账期的全量账单文件。
- 按天生成的账单文件可能存在时延，延迟生成的账单会在生成次日推送，也可能会包含上一日之前延迟到上一日生成的账单。建议每个月初拉取上个月全量文件。
- 需要给订阅用户授予[AliyunConsumeDump2OSSRole](https://ram.console.aliyun.com/?spm=api-workbench.API%20Document.0.0.68c71e0fhmTSJp#/role/authorize?request=%7B%22Requests%22:%20%7B%22request1%22:%20%7B%22RoleName%22:%20%22AliyunConsumeDump2OSSRole%22,%20%22TemplateId%22:%20%22Dump2OSSRole%22%7D%7D,%20%22ReturnUrl%22:%20%22https:%2F%2Fusercenter2.aliyun.com%22,%20%22Service%22:%20%22Consume%22%7D)权限。
- 文件名

```

BillingItemDetailForBillingPeriod   (计费项账单明细)
  
每日推送文件名格式：UID_PartnerBillingItemDetail_YYYYMMDD_SquenceNo_fileNo，例如：169**_BillingItemDetail_20190310_0001_01。
  
下月初完整文件名格式：UID_PartnerBillingItemDetail_YYYYMM_SquenceNo_fileNo，例如：169**_BillingItemDetail_201903_0001_01。

InstanceDetailForBillingPeriod  (实例账单明细)
 
 每日推送文件名格式：UID_PartnerInstanceDetail_YYYYMMDD_SquenceNo_fileNo，例如：169**_InstanceDetail_20190310_0001_01。
  
下月初完整文件名格式：UID_PartnerInstanceDetail_YYYYMM_SquenceNo_fileNo，例如：169**_InstanceDetail_201903_1999-0001_01。

BillingItemDetailMonthly   (计费项月账单)
  
每日推送文件名格式：UID_PartnerBillingItemDetailMonthly_YYYYMM_SquenceNo_fileNo，例如：169**_BillingItemDetailMonthly_201903_0001_01。此文件每日更新月初至当日的全量数据，直至次月5号。

InstanceDetailMonthly  (实例月账单)
  
每日推送文件名格式：UID_PartnerInstanceDetailMonthly_YYYYMM_SquenceNo_fileNo，例如：169**_InstanceDetailMonthly_201903_0001_01。此文件每日更新月初至当日的全量数据，直至次月5号。

fileNo只有在进行账单行数达到拆分阈值时,进行了文件的拆分.才会存在

```
**本内容只发布国际站**',
    ),
    'InviteSubAccount' => 
    array (
      'summary' => '邀请注册成为伙伴客户',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccountInfoList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '邀请账号信息列表，一次小于等于5个',
            'type' => 'array',
            'items' => 
            array (
              'description' => '邀请账号信息',
              'type' => 'object',
              'properties' => 
              array (
                'SubAccountType' => 
                array (
                  'description' => '子账号类型:
- 1: Agency 的 End user
- 2: Reseller 的End user 
- 5: Reseller 的T2伙伴',
                  'type' => 'string',
                  'required' => true,
                  'example' => '1',
                ),
                'EmailAddress' => 
                array (
                  'description' => '分销客户账户的邮件地址，要发送邀请邮件到这里',
                  'type' => 'string',
                  'required' => true,
                  'example' => '12345@163.com',
                ),
                'AccountNickname' => 
                array (
                  'description' => '分销客户的名称:
- 当是分销客户是一家企业时，为企业的公司名称
- 当是分销客户是T2 reseller伙伴时，为伙伴名称',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'XXX技术有限公司',
                ),
                'CreditLine' => 
                array (
                  'description' => '伙伴分配给分销客户的总预算额度(quota)',
                  'type' => 'string',
                  'required' => true,
                  'example' => '100',
                ),
                'Remark' => 
                array (
                  'description' => '分销客户描述',
                  'type' => 'string',
                  'required' => false,
                  'example' => '发展xx为客户的邀请',
                ),
                'ZeroCreditShutdownPolicy' => 
                array (
                  'description' => '伙伴对分销客户的停机策略管理。

- 1: delayStop 享受延停额度延迟停机：阿里云接管资源，延停额度耗尽是触发实例停机，再15天还未付费，则会释放存储资源。
- 2: noStop手工管理欠费不停机,：系统不会管理子账号的资源生命周期。伙伴需要手工管理客户的实例停机状态。 
- 3：immediatelyStop  欠费立停，客户账号可用额度小于0账号进入欠费状态触发实例停机。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '1',
                ),
                'NewBuyStatus' => 
                array (
                  'description' => '初始下单状态：

- ban：禁购--客户注册关联成功后不可立即下单购买云资源，需要在后续将“下单控制”配置为“正常”才可以下单。
- normal：正常--客户注册关联成功后可立即下单购买云资源。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ban',
                ),
                'CustomerId' => 
                array (
                  'description' => 'Customer Id 从CreateCustomer API返回的',
                  'type' => 'string',
                  'required' => true,
                  'example' => '1234567',
                ),
                'CustomerBd' => 
                array (
                  'title' => '客户商务经理',
                  'description' => '客户商务经理（限50字符）',
                  'type' => 'string',
                  'required' => false,
                  'example' => '张三',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '错误代码: 
- 200 OK
- 1109 System Error',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '提示信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => 'request ID，阿里云会根据这个进行错误跟踪',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
              'Success' => 
              array (
                'description' => '候选值:True/False，代表了是否当前API调用本身是成功 的。不代表后续业务操作的成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Results' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Result' => 
                  array (
                    'description' => '邀请发送结果列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '邀请结果信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Code' => 
                        array (
                          'description' => '错误代码，200 OK',
                          'type' => 'string',
                          'example' => '200',
                        ),
                        'Message' => 
                        array (
                          'description' => '提示信息，code说明',
                          'type' => 'string',
                          'example' => '成功',
                        ),
                        'Success' => 
                        array (
                          'description' => '总是为真',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Result' => 
                        array (
                          'description' => '邀请结果返回信息',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RegUrl' => 
                            array (
                              'description' => '分销客户注册URL',
                              'type' => 'string',
                              'example' => 'http://agency-intl.console.aliyun.com/customer/register?intl=true&fxinfo=-4uT%2FMWHnnUdvr5GXVd1AYK8luTnGgH3M7Y3lSCd5M1fxRwAkViTWtDJDpckh0HL',
                            ),
                            'Days' => 
                            array (
                              'description' => '注册URL地址的有效期限，按天算',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '15',
                            ),
                            'InviteId' => 
                            array (
                              'description' => 'Invitation ID，用来查询邀请状态的',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '12345',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error3017',
            'errorMessage' => 'customerRebateType is error, only invite reseller account.',
          ),
          1 => 
          array (
            'errorCode' => 'Error3008',
            'errorMessage' => 'shutdown status is error.',
          ),
          2 => 
          array (
            'errorCode' => 'Error3009',
            'errorMessage' => 'customerAccount is error.',
          ),
          3 => 
          array (
            'errorCode' => 'Error3010',
            'errorMessage' => 'customerNick is empty.',
          ),
          4 => 
          array (
            'errorCode' => 'Error3011',
            'errorMessage' => 'The length of customerNick greater than 50.',
          ),
          5 => 
          array (
            'errorCode' => 'Error3012',
            'errorMessage' => 'cid is empty.',
          ),
          6 => 
          array (
            'errorCode' => 'Error3013',
            'errorMessage' => 'customCredit is empty.',
          ),
          7 => 
          array (
            'errorCode' => 'Error3014',
            'errorMessage' => 'customCredit is a maximum of 10.',
          ),
          8 => 
          array (
            'errorCode' => 'Error3015',
            'errorMessage' => 'The current account is not a partner.',
          ),
          9 => 
          array (
            'errorCode' => 'Error3016',
            'errorMessage' => 'customerRebateType is error, only invite agency account.',
          ),
          10 => 
          array (
            'errorCode' => 'Error1109',
            'errorMessage' => 'system error.',
          ),
          11 => 
          array (
            'errorCode' => 'Error3056',
            'errorMessage' => 'The value of subAccountType error.',
          ),
          12 => 
          array (
            'errorCode' => 'Error3067',
            'errorMessage' => 'Enterprise Customer Invitation Prohibition.',
          ),
          13 => 
          array (
            'errorCode' => 'Error3055',
            'errorMessage' => 'subAccountType is null.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\",\\n  \\"Success\\": true,\\n  \\"Results\\": {\\n    \\"Result\\": [\\n      {\\n        \\"Code\\": \\"200\\",\\n        \\"Message\\": \\"成功\\",\\n        \\"Success\\": true,\\n        \\"Result\\": {\\n          \\"RegUrl\\": \\"http://agency-intl.console.aliyun.com/customer/register?intl=true&fxinfo=-4uT%2FMWHnnUdvr5GXVd1AYK8luTnGgH3M7Y3lSCd5M1fxRwAkViTWtDJDpckh0HL\\",\\n          \\"Days\\": 15,\\n          \\"InviteId\\": 12345\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '邀请分销客户',
    ),
    'CreateCustomer' => 
    array (
      'summary' => '此功能用来报备一个待邀请的客户',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CustomerName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户姓名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DoorBell Marketing',
          ),
        ),
        1 => 
        array (
          'name' => 'CustomerTrade',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户行业名称
请使用Customer Trade枚举',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0205',
          ),
        ),
        2 => 
        array (
          'name' => 'CustomerSubTrade',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户子行业
请使用Customer Sub Trade枚举',
            'type' => 'string',
            'required' => false,
            'example' => '020501',
          ),
        ),
        3 => 
        array (
          'name' => 'CustomerSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户来源
请使用Customer Source枚举',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'website',
          ),
        ),
        4 => 
        array (
          'name' => 'Nation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户所属区域 请使用ListCountries获取当前UID可作业区域列表',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AR',
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
                'description' => '告知调用是否成功的代码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '同Code参数',
                'type' => 'string',
                'example' => '12345',
              ),
              'Data' => 
              array (
                'description' => '告知是否成功创建客户，如果为true，则Message中为CID',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => 'request ID，阿里云会根据这个进行错误跟踪',
                'type' => 'string',
                'example' => 'A9B725C7-3DBD-576B-AC91-F6F22AB99A77',
              ),
              'Success' => 
              array (
                'description' => '候选值:True/False，代表了是否当前API调用本身是成功的。不代表后 续业务操作的成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error1109',
            'errorMessage' => 'system error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"12345\\",\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"A9B725C7-3DBD-576B-AC91-F6F22AB99A77\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '报备客户',
      'requestParamsDescription' => '### CustomerSource可选值
> 下列格式为：页面对应字段——入参
- 线下会议——Off_line_meeting
- 官网——website
- 市场营销活动——OFFLINE_MARKETTING_EVENT
- 国际百科——intl_enterprise
- 内部转介绍——Internal_transfer
- 外部渠道——External_channel
- 陌拜——Mobai
- 老客户转介绍——Old_client_to_introduce
- 其他——Other
- 客户分配——ALLOCATE
- 潜客推荐——PotentialRecommend

### Customer Trade可选值
>下列四位入参码为parent code，例：parent code=0603（四位）
如customer sub trade和constomer trade都需填入，customer trade必须等于sub trade的parent code
- 实体零售与批发——0101
- 电子商务——0102
- 物流和仓储——0103
- 旅行、文化、体育和娱乐——0104
- 服饰鞋帽、文教和体育用品——0105
- 家用电器——0106
- 食品、饮料和烟草——0107
- 农业综合——0201
- 钢铁制造——0202
- 设备制造——0203
- 通用工业品制造——0204
- 汽车、汽车配件和服务——0205
- 房地产和建筑——0206
- 银行——0301
- 保险——0302
- 证券和资本市场——0303
- 金融服务——0304
- 通讯和运营商——0401
- 媒体——0402
- 计算机硬件设备——0403
- 计算机软件和服务——0404
- 互联网游戏——0405
- 互联网服务——0406
- 物联网技术和服务——0407
- 智能消费品——0408
- 人工智能——0409
- 电网——0501
- 石油石化——0502
- 不可再生资源——0503
- 新能源和可再生能源——0504
- 化工——0505
- 政府——0601
- 军民融合——0602
- 医疗健康——0603
- 教育和科研机构——0604
- 交通运输——0605
- 公共服务——0606

### customer sub trade可选值

> customer sub trade code=060304（六位），parent code=0603（四位）
如sub trade和constomer trade都填入，customer trade必须等于sub trade的parentcode

- 媒体-互联网媒体——040201——0402
- 媒体-广电传媒——040202——0402
- 汽车、汽车配件和服务-汽车整车制造业——020501——0205
- 汽车、汽车配件和服务-汽车配件制造业——020502——0205
- 汽车、汽车配件和服务-车联网和汽车服务——020503——0205
- 政府-公检法机关——060101——0601
- 政府-税务——060102——0601
- 政府-海关——060103——0601
- 政府-地方政府——060104——0601
- 政府-其他政府机构——060105——0601
- 钢铁制造-钢铁采矿业——020201——0202
- 钢铁制造-钢铁制造业——020202——0202
- 旅行、文化、体育和娱乐-旅行服务——010401——0104
- 旅行、文化、体育和娱乐-住宿和餐饮——010402——0104
- 旅行、文化、体育和娱乐-文化体育和娱乐——010403——0104
- 通讯和运营商-通讯设备——040101——0401
- 通讯和运营商-运营商——040102——0401
- 通讯和运营商-通信服务——040103——0401
- 互联网服务-互联网社交——040601——0406
- 互联网服务-互联网营销——040602——0406
- 互联网服务-互联网平台——040603——0406
- 互联网服务-互联网信息服务——040604——0406
- 教育和科研机构-在线教育——060401——0604
- 教育和科研机构-培训和教育机构——060402——0604
- 教育和科研机构-科研机构——060403——0604
- 交通运输-铁路运输——060501——0605"),
- 交通运输-道路运输——060502——0605
- 交通运输-水上运输——060503——0605
- 交通运输-航空运输——060504——0605
- 交通运输-其他运输——060505——0605
- 食品、饮料和烟草-食品制造业——010701——0107
- 食品、饮料和烟草-酒、饮料喝精制茶制造业——010702——0107
- 食品、饮料和烟草-烟草制品业——010703——0107
- 不可再生资源-不可再生能源开采——050301——0503
- 不可再生资源-不可再生能源生产和供应——050302——0503
- 医疗健康-医疗服务——060301——0603
- 医疗健康-健康服务——060302——0603
- 医疗健康-医疗健康设备——060303——0603
- 医疗健康-基因工程——060304——0603
- 医疗健康-药物和生物科技——060305——0603',
    ),
    'SetWarningThreshold' => 
    array (
      'summary' => '通过此API设置信控使用阈值。
当客户信控到达阈值以下，会通过邮件通知分销商。
此功能仅供针对Reseller和Distributor。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Uid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分销客户账号UID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1792155717328010',
          ),
        ),
        1 => 
        array (
          'name' => 'WarningValue',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '百分比，填写范围1到100，当可用信控额度低于信控额度百分比时，触发提示邮件给分销伙伴账号。',
            'type' => 'string',
            'required' => true,
            'example' => '20',
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
                'description' => '结果代码:
- 200 OK
- 1109 系统错误
- 3040 子账号冻结，无法完成操作 - 3044 告警比例值非数字
- 3045 告警比例值应为1到100',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '同Code参数值',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '候选值:True/False，代表了是否当前API调用本身是成功的。不代表后续 业务操作的成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error1109',
            'errorMessage' => 'system error.',
          ),
          1 => 
          array (
            'errorCode' => 'Error3040',
            'errorMessage' => 'The account is in a frozen state and cannot be operated.',
          ),
          2 => 
          array (
            'errorCode' => 'Error3044',
            'errorMessage' => 'The Value is not a number.',
          ),
          3 => 
          array (
            'errorCode' => 'Error3045',
            'errorMessage' => 'The value must be between 1-100.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"200\\",\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\"\\n}","type":"json"}]',
      'title' => '设置分销客户可用额度使用阈值',
    ),
    'SetCreditLine' => 
    array (
      'summary' => '设置分销客户信控额度。此功能仅供针对Reseller和Distributor。',
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
          'name' => 'Uid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子账号UID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1263644979775567',
          ),
        ),
        1 => 
        array (
          'name' => 'CreditLine',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的信控额度',
            'type' => 'string',
            'required' => true,
            'example' => '100',
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
                'description' => '结果代码:
- 200 OK
- 1109 系统错误
- 3040 子账号冻结，无法完成操作 - 3041 信控并非数字',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '同Code参数值',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '候选值:True/False，代表了是否当前API调用本身是成功的。不代表后 续业务操作的成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error1109',
            'errorMessage' => 'system error.',
          ),
          1 => 
          array (
            'errorCode' => 'Error3040',
            'errorMessage' => 'The account is in a frozen state and cannot be operated.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"200\\",\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\"\\n}","type":"json"}]',
      'title' => '设置分销客户信控额度',
    ),
    'SetAccountInfo' => 
    array (
      'summary' => '用来更新子账户信息，包括昵称和注释。',
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccountNickname',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子账户昵称。 对于企业客户，是公司名称。 对于T2伙伴，则是伙伴名称。',
            'type' => 'string',
            'required' => false,
            'example' => '我的账号',
          ),
        ),
        1 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子账户说明',
            'type' => 'string',
            'required' => false,
            'example' => '测试的账号',
          ),
        ),
        2 => 
        array (
          'name' => 'Uid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子账户UID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1133166938931507',
          ),
        ),
        3 => 
        array (
          'name' => 'CustomerBd',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户商务经理',
            'description' => '客户商务经理',
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
                'description' => '结果码
错误代码:
- 200 OK
- 1109 系统错误
- 3030 账户昵称超过最大长度，最大长度150 bytes
- 3031 Remark超过最大长度，最大长度是3000 Bytes',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => 'message信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'Success' => 
              array (
                'description' => '候选值:True/False，代表了是否当前API调用本身是成功 的。不代表后续业务操作的成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => 'request ID，阿里云会根据这个进行错误跟踪',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error1109',
            'errorMessage' => 'system error.',
          ),
          1 => 
          array (
            'errorCode' => 'Error3030',
            'errorMessage' => 'The maximum length of  CustomNick is 150.',
          ),
          2 => 
          array (
            'errorCode' => 'Error3031',
            'errorMessage' => 'The maximum length of FxDescription is 3000.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\"\\n}","type":"json"}]',
      'title' => '更新子账号信息',
    ),
    'ResendEmail' => 
    array (
      'summary' => '重新发送邀请邮件。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InviteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邀请ID，来自接口 InviteSbuAccount',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '176',
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
                'description' => '结果码
错误代码，候选值:
200: OK
1109: 系统错误
3058: 发送过于频繁，限定5分钟10封邮件 3057: InviteId 为空
3060: 找不到InviteId的发送记录
3061: 注册URL过期，无法重发',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '结果信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'Success' => 
              array (
                'description' => '候选值:True/False，代表了是否当前API调用本身是成功的。不代表后续 业务操作的成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error1109',
            'errorMessage' => 'system error.',
          ),
          1 => 
          array (
            'errorCode' => 'Error3058',
            'errorMessage' => 'Frequent email flow control limit 10 emails sent within 5 minutes.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\"\\n}","type":"json"}]',
      'title' => '重新发送邀请邮件',
    ),
    'ListCountries' => 
    array (
      'summary' => '此功能对所有分销商开放。根据分销商合同内约定的可作业国家信息展示对应区域代码信息',
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
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
                'description' => '错误代码:
- 200 OK
- 1109 系统错误',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => 'message信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => 'request ID，阿里云会根据这个进行错误跟踪',
                'type' => 'string',
                'example' => 'A747A00F-E096-5244-88B3-3E474BAE3AE4',
              ),
              'Success' => 
              array (
                'description' => '候选值:True/False，代表了是否当前API调用本身是成功的。不代表后 续业务操作的成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '区域代码的列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '区域代码',
                  'type' => 'string',
                  'example' => 'AF',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error1109',
            'errorMessage' => 'system error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"A747A00F-E096-5244-88B3-3E474BAE3AE4\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    \\"AF\\"\\n  ]\\n}","type":"json"}]',
      'title' => '查询可作业区域范围列表',
    ),
    'GetUnassociatedCustomer' => 
    array (
      'summary' => '获取所有未关联的客户。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页，当前页',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页，每页记录数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '错误代码，候选值:
200: OK
1109: 系统错误',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => 'message信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'Success' => 
              array (
                'description' => '候选值:True/False，代表了是否当前API调用本身是成功的。不代表后 续业务操作的成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PageInfo' => 
              array (
                'description' => '分页信息',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '分页，每页数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '分页，总量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '12',
                  ),
                  'Page' => 
                  array (
                    'description' => '分页，当前页',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'InviteInfoList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'InviteInfo' => 
                  array (
                    'description' => '邀请信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '邀请信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '邀请状态:
- 0 未访问注册URL
- 1 成功注册
- 2 注册失败
- 3 已访问注册URL但是没有提交表单',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '发送邮件的时间',
                          'type' => 'string',
                          'example' => '2023-05-10',
                        ),
                        'AccountNickname' => 
                        array (
                          'description' => '被邀请客户名称',
                          'type' => 'string',
                          'example' => '我的客户',
                        ),
                        'Email' => 
                        array (
                          'description' => '被邀请者email',
                          'type' => 'string',
                          'example' => '12345@qq.com',
                        ),
                        'InviteId' => 
                        array (
                          'description' => '邀请ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '190',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => 'request ID，阿里云会根据这个进行错误跟踪',
                'type' => 'string',
                'example' => '23309219-4A34-589D-A3E0-9B2A3BFFD24F',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error1109',
            'errorMessage' => 'system error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"Success\\": true,\\n  \\"PageInfo\\": {\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 12,\\n    \\"Page\\": 1\\n  },\\n  \\"InviteInfoList\\": {\\n    \\"InviteInfo\\": [\\n      {\\n        \\"Status\\": 1,\\n        \\"GmtCreate\\": \\"2023-05-10\\",\\n        \\"AccountNickname\\": \\"我的客户\\",\\n        \\"Email\\": \\"12345@qq.com\\",\\n        \\"InviteId\\": 190\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"23309219-4A34-589D-A3E0-9B2A3BFFD24F\\"\\n}","type":"json"}]',
      'title' => '查询未关联的客户',
    ),
    'GetMonthlyBill' => 
    array (
      'summary' => '返回分销商月账单。
此功能仅供针对Reseller和Distributor。',
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
          'name' => 'Month',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Billing Month, Format is YYYY-MM',
            'type' => 'string',
            'required' => true,
            'example' => '2022-11',
          ),
        ),
        1 => 
        array (
          'name' => 'BillOwner',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Bill Owner type.

 Value range:

1: Master account 

2: Sub account',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'BillType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Value Range:

MonthlyInvoice

MonthRefundInvoice

MonthlySummary

MonthlyInstanceAddAdjustBill 

MonthlyInstanceRefundBill

MonthlyAddAdjustInvoce

MonthlyRefundAdjustInvoce 

MonthlyInstanceConsumeV2 

MarginReportV2',
            'type' => 'string',
            'required' => true,
            'example' => 'MonthlyInvoice',
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
                'description' => '结果代码:
- 200 OK
- 1109 系统错误
- 3030 账户昵称超过最大长度，最大长度150 bytes
- 3031 Remark超过最大长度，最大长度是3000 Bytes',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '同Code参数值',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '候选值:True/False，代表了是否当前API调用本身是成功 的。不代表后续业务操作的成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'RefundInvoiceLink' => 
                  array (
                    'description' => '下载退款发票的URL',
                    'type' => 'string',
                    'example' => 'intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D',
                  ),
                  'BillType' => 
                  array (
                    'description' => '同输入参数BillType',
                    'type' => 'string',
                    'example' => 'MonthlyInvoice',
                  ),
                  'InvoiceLink' => 
                  array (
                    'description' => 'Invoice下载URL',
                    'type' => 'string',
                    'example' => 'intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D',
                  ),
                  'BillLinkCSV' => 
                  array (
                    'description' => '下载CSV文件地址，请使用HTTP协议',
                    'type' => 'string',
                    'example' => 'intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D',
                  ),
                  'RefundInvoiceFlag' => 
                  array (
                    'description' => '告知是否存在退款发票，可选值:True，False',
                    'type' => 'boolean',
                    'example' => 'True',
                  ),
                  'SpendingTime' => 
                  array (
                    'description' => '消费时间，对应具体的消费时间',
                    'type' => 'string',
                    'example' => '20221201',
                  ),
                  'BillOwner' => 
                  array (
                    'description' => '同输入参数BillOwner.',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'BillLinkXLSX' => 
                  array (
                    'description' => '下载XLSX文件地址，请使用HTTP协议',
                    'type' => 'string',
                    'example' => 'intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D
',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '210e876f16704666020714468dab35',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error1109',
            'errorMessage' => 'system error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"200\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"RefundInvoiceLink\\": \\"intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D\\",\\n    \\"BillType\\": \\"MonthlyInvoice\\",\\n    \\"InvoiceLink\\": \\"intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D\\",\\n    \\"BillLinkCSV\\": \\"intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D\\",\\n    \\"RefundInvoiceFlag\\": true,\\n    \\"SpendingTime\\": \\"20221201\\",\\n    \\"BillOwner\\": \\"1\\",\\n    \\"BillLinkXLSX\\": \\"intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D\\\\n\\"\\n  },\\n  \\"RequestId\\": \\"210e876f16704666020714468dab35\\"\\n}","type":"json"}]',
      'title' => '分销商月账单',
    ),
    'GetInviteStatus' => 
    array (
      'summary' => '查询已报备已发出邀请客户的邀请状态',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InviteStatusList',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'inviteId list',
            'type' => 'array',
            'items' => 
            array (
              'description' => 'inviteId list',
              'type' => 'object',
              'properties' => 
              array (
                'InviteId' => 
                array (
                  'description' => '邀请ID，来自接口 InviteSubAccount',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '123',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
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
              'Code' => 
              array (
                'description' => '状态码  错误代码值: 3057: InviteId为空',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '提示信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'Success' => 
              array (
                'description' => '候选值:True/False，代表了是否当前API调用本身是成功 的。不代表后续业务操作的成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'InviteStatus' => 
                  array (
                    'description' => '返回数据',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Code' => 
                        array (
                          'description' => '结果码
取值范围:
 - 200 OK
- 1109 系统错误',
                          'type' => 'string',
                          'example' => '200',
                        ),
                        'Message' => 
                        array (
                          'description' => '提示信息',
                          'type' => 'string',
                          'example' => '成功',
                        ),
                        'Success' => 
                        array (
                          'description' => '候选值:True/False，代表了是否当前API调用本身是成功 的。不代表后续业务操作的成功。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'InviteStatusList' => 
                        array (
                          'description' => '邀请记录状态结果list',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'GmtCreate' => 
                            array (
                              'description' => '发送邀请邮件的时间',
                              'type' => 'string',
                              'example' => '2018-02-12',
                            ),
                            'Status' => 
                            array (
                              'description' => '邀请状态:
- 0 未访问注册URL
- 1 注册失败
- 2 成功注册
- 3 已访问注册URL但是没有提交表单',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '2',
                            ),
                            'SubAccountType' => 
                            array (
                              'description' => '账户类型:
- 1 Agency的终端客户
- 2 Reseller的终端客户
- 5 Reseller类型2级伙伴',
                              'type' => 'string',
                              'example' => '1',
                            ),
                            'ParentId' => 
                            array (
                              'description' => '分销客户账户所属分销商UID。',
                              'type' => 'string',
                              'example' => '1093238769140523',
                            ),
                            'AssociationSuccessTime' => 
                            array (
                              'description' => '分销客户账户成功关联分销商账户的时间。如果没有关联则为空。',
                              'type' => 'string',
                              'example' => '2018-02-13',
                            ),
                            'Cid' => 
                            array (
                              'description' => '分销客户CID',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1234567890123',
                            ),
                            'Uid' => 
                            array (
                              'description' => '分销客户UID',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1234567890123',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => 'request ID，阿里云会根据这个进行错误跟踪',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error1109',
            'errorMessage' => 'system error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"InviteStatus\\": [\\n      {\\n        \\"Code\\": \\"200\\",\\n        \\"Message\\": \\"成功\\",\\n        \\"Success\\": true,\\n        \\"InviteStatusList\\": {\\n          \\"GmtCreate\\": \\"2018-02-12\\",\\n          \\"Status\\": 2,\\n          \\"SubAccountType\\": \\"1\\",\\n          \\"ParentId\\": \\"1093238769140523\\",\\n          \\"AssociationSuccessTime\\": \\"2018-02-13\\",\\n          \\"Cid\\": 1234567890123,\\n          \\"Uid\\": 1234567890123\\n        }\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\"\\n}","type":"json"}]',
      'title' => '查询邀请记录状态',
    ),
    'GetDailyBill' => 
    array (
      'summary' => '获取分销商日账单。
此功能仅供针对Reseller和Distributor。',
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
          'name' => 'Date',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Billing date. Format YYYY-MM-DD',
            'type' => 'string',
            'required' => true,
            'example' => '2022-11-24',
          ),
        ),
        1 => 
        array (
          'name' => 'BillOwner',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账单所属类型 取值范围:

1: 分销伙伴账号 

2: 分销客户账号',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'BillType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账单类型，取值范围:

- DailyOrder(Deprecated)

- DailyBill (Deprecated)

- DailyInstanceBill (Deprecated) 
- DailyInstanceBillV2',
            'type' => 'string',
            'required' => true,
            'example' => 'DailyInstanceBillV2',
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
                'description' => '结果代码:
- 200 OK
- 1109 系统错误
- 3050: 账单类型只能是DailyOrder, DailyBill, DailyInstanceBill 
- 3049: 消费时间格式错误
- 3048: 账单所属只能是1 or 2',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '同Code参数值',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '候选值:True/False，代表了是否当前API调用本身是成功的。不代表后续 业务操作的成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'BillLinkCSV' => 
                  array (
                    'description' => '下载CSV文件地址，请使用HTTP协议',
                    'type' => 'string',
                    'example' => 'intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D',
                  ),
                  'SpendingTime' => 
                  array (
                    'description' => '消费时间，对应具体的消费日期',
                    'type' => 'string',
                    'example' => '20221201',
                  ),
                  'BillType' => 
                  array (
                    'description' => '同输入参数BillType',
                    'type' => 'string',
                    'example' => 'DailyInstanceBillV2',
                  ),
                  'BillOwner' => 
                  array (
                    'description' => '同输入参数BillOwner.',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'BillLinkXLSX' => 
                  array (
                    'description' => '下载XLSX文件地址，请使用HTTP协议',
                    'type' => 'string',
                    'example' => 'intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D
',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error1109',
            'errorMessage' => 'system error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"200\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"BillLinkCSV\\": \\"intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D\\",\\n    \\"SpendingTime\\": \\"20221201\\",\\n    \\"BillType\\": \\"DailyInstanceBillV2\\",\\n    \\"BillOwner\\": \\"1\\",\\n    \\"BillLinkXLSX\\": \\"intl-reseller-month-bill.oss-ap-southeast-1.aliyuncs.com/statements/month/dts/1064252248461886/202104/Month%20Billing%20Invoice%20202104.pdf?Expires=1671160973&OSSAccessKeyId=TMP.3KhvoD9pW264cPv8sYe8E2zJ5HLWmrijNHgKiKpXcy8yS472BcrvemgTfNrrXKu5fCCdbLr2XhmYAyYPmbCe8zJyEkmYzL&Signature=hns1PgiiYl1WdI%2FdiOqbEdsgmfI%3D\\\\n\\"\\n  },\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\"\\n}","type":"json"}]',
      'title' => '分销商日账单',
    ),
    'GetCreditInfo' => 
    array (
      'summary' => '查询分销客户信控信息。如果分销客户是Agency类型的，那么返回参数中的PopCreditInfoJson为空。此功能仅供针对Reseller和Distributor。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Uid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '子账户UID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1792155717328010',
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
                'description' => '结果代码:
- 200 OK
- 1109 系统错误',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => 'message信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'Success' => 
              array (
                'description' => '候选值:True/False，代表了是否当前API调用本身是成功的。不代表后续 业务操作的成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'OutstandingBalance' => 
                  array (
                    'description' => '子账号消费的信用额度，并且这些额度还没有偿付',
                    'type' => 'string',
                    'example' => '200',
                  ),
                  'CreditLine' => 
                  array (
                    'description' => '子账号信控额度',
                    'type' => 'string',
                    'example' => '1000',
                  ),
                  'AccountStatus' => 
                  array (
                    'description' => '子账号信控状态，取值范围:
 1. normal 正常
2. arrearsNotShutdown 欠费未停机
 3. shutdown 停机',
                    'type' => 'string',
                    'example' => 'normal',
                  ),
                  'AvailableCredit' => 
                  array (
                    'description' => '可用额度',
                    'type' => 'string',
                    'example' => '800',
                  ),
                  'AlarmThreshold' => 
                  array (
                    'description' => '百分比值，当可用额度降到信控额度的这个百分比
之下的时候，就会触发给主账号邮件提醒。',
                    'type' => 'string',
                    'example' => '20',
                  ),
                  'ZeroCreditShutdownPolicy' => 
                  array (
                    'description' => '用来管理可用额度在0以及更少的时候，系统对资 源管控的策略。取值范围:

1: delayStop 延迟停机, 阿里巴巴接管资源，延停 额度耗尽实例停机，再15天还未付费，则会释放 存储资源。

2: noStop欠费不停机, 系统不会管理子账号的资 源生命周期。伙伴需要手工完成。

 3.immediatelyStop 立即停机，账号进入欠费状态 触发实例停机。',
                    'type' => 'string',
                    'example' => 'delayStop',
                  ),
                  'newBuyStatus' => 
                  array (
                    'description' => '用来管理客户的下单动作。

ban 禁止新购 

cancelBan 正常状态',
                    'type' => 'string',
                    'example' => 'ban',
                  ),
                  'ConsumedUndeductedValue' => 
                  array (
                    'title' => '获取模拟抵扣前虚账单未结清总额',
                    'description' => '获取模拟抵扣前虚账单未结清总额',
                    'type' => 'string',
                    'example' => '0.000000',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => 'request ID，阿里云会根据这个进行错误跟踪',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error1109',
            'errorMessage' => 'system error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"OutstandingBalance\\": \\"200\\",\\n    \\"CreditLine\\": \\"1000\\",\\n    \\"AccountStatus\\": \\"normal\\",\\n    \\"AvailableCredit\\": \\"800\\",\\n    \\"AlarmThreshold\\": \\"20\\",\\n    \\"ZeroCreditShutdownPolicy\\": \\"delayStop\\",\\n    \\"newBuyStatus\\": \\"ban\\",\\n    \\"ConsumedUndeductedValue\\": \\"0.000000\\"\\n  },\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\"\\n}","type":"json"}]',
      'title' => '查询分销客户预算状态信息',
    ),
    'GetAccountInfo' => 
    array (
      'summary' => '返回分销客户账号信息。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Uid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分销客户账号UID，此参数和UserType参数必须有一个。如果此参数为空，则查询UserType类型的所有分销客户账号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1215848086704806',
          ),
        ),
        1 => 
        array (
          'name' => 'UserType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分销客户账号类型，取值范围:
- 1 End User
- 2 企业客户 
- 3 T2伙伴',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页，当前页',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页，每页数量，最大20',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '20',
            'minimum' => '1',
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
                'description' => '结果码
Error Code. Value Range: 
- 200: OK 
- 1109: System Error 
- 3029: Invalid UID 
- 3062: Uid and UserType are both empty 
- 3063: UserType value out of range.',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => 'message',
                'type' => 'string',
                'example' => '成功',
              ),
              'Success' => 
              array (
                'description' => '候选值:True/False，代表了是否当前API调用本身是成功 的。不代表后续业务操作的成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'PageInfo' => 
              array (
                'description' => '分页信息',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '分页，每页数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '分页，总量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '12',
                  ),
                  'Page' => 
                  array (
                    'description' => '分页，当前页',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'AccountInfoList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AccountInfo' => 
                  array (
                    'description' => '账号信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '账号信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SubAccountType' => 
                        array (
                          'description' => '账户类型:
- 1 Agency的终端客户
- 2 Reseller的终端客户
- 3 企业客户
- 4 Agency类型2级伙伴
- 5 Reseller类型2级伙伴
- 6 Agency+Reseller类型2级伙伴',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'AssociationSuccessTime' => 
                        array (
                          'description' => '分销客户账户与伙伴账户建立分销主子关系的关联时间',
                          'type' => 'string',
                          'example' => '2021-01-01',
                        ),
                        'AccountNickname' => 
                        array (
                          'description' => '分销客户账户昵称。 对于企业客户，是公司名称。 对于T2伙伴，则是伙伴名称。',
                          'type' => 'string',
                          'example' => 'XXX技术有限公司',
                        ),
                        'Email' => 
                        array (
                          'description' => '分销客户账户电子邮件地址',
                          'type' => 'string',
                          'example' => '1234@qq.com
',
                        ),
                        'Remark' => 
                        array (
                          'description' => '分销客户账号说明',
                          'type' => 'string',
                          'example' => '子账号',
                        ),
                        'Mobile' => 
                        array (
                          'description' => '分销客户账号手机号',
                          'type' => 'string',
                          'example' => '13641588680',
                        ),
                        'AliyunId' => 
                        array (
                          'description' => '分销客户账户阿里云登录名',
                          'type' => 'string',
                          'example' => '1234@qq.com',
                        ),
                        'Uid' => 
                        array (
                          'description' => '分销客户账户UID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1415740779475837',
                        ),
                        'Cid' => 
                        array (
                          'description' => '分销客户对应CID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '61479572',
                        ),
                        'DelayStatus' => 
                        array (
                          'title' => '延停策略。取值三个如下
1、immediatelyStop，立即停机
2、delayStop，延迟停机。延迟停机额度见delayAmount字段
3、noStop，不停机',
                          'description' => '延停策略。取值三个如下
1、immediatelyStop，立即停机
2、delayStop，延迟停机。延迟停机额度见delayAmount字段
3、noStop，不停机',
                          'type' => 'string',
                          'example' => 'immediatelyStop',
                        ),
                        'DelayAmount' => 
                        array (
                          'title' => '当延停策略为delayStop（延迟停机）时，透支的额度',
                          'description' => '当延停策略为delayStop（延迟停机）时，透支的额度',
                          'type' => 'string',
                          'example' => '600',
                        ),
                        'CustomerBd' => 
                        array (
                          'title' => '客户商务经理',
                          'description' => '客户商务经理',
                          'type' => 'string',
                          'example' => '张三',
                        ),
                        'NewBuyStatus' => 
                        array (
                          'title' => '下单状态',
                          'description' => '下单状态，取值如下
Purchase Forbidden（禁止下单）
Normal（正常）',
                          'type' => 'string',
                          'example' => 'Normal',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求id，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error1109',
            'errorMessage' => 'system error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"Success\\": true,\\n  \\"PageInfo\\": {\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 12,\\n    \\"Page\\": 1\\n  },\\n  \\"AccountInfoList\\": {\\n    \\"AccountInfo\\": [\\n      {\\n        \\"SubAccountType\\": 1,\\n        \\"AssociationSuccessTime\\": \\"2021-01-01\\",\\n        \\"AccountNickname\\": \\"XXX技术有限公司\\",\\n        \\"Email\\": \\"1234@qq.com\\\\n\\",\\n        \\"Remark\\": \\"子账号\\",\\n        \\"Mobile\\": \\"13641588680\\",\\n        \\"AliyunId\\": \\"1234@qq.com\\",\\n        \\"Uid\\": 1415740779475837,\\n        \\"Cid\\": 61479572,\\n        \\"DelayStatus\\": \\"immediatelyStop\\",\\n        \\"DelayAmount\\": \\"600\\",\\n        \\"CustomerBd\\": \\"张三\\",\\n        \\"NewBuyStatus\\": \\"Normal\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\"\\n}","type":"json"}]',
      'title' => '查询分销客户信息',
    ),
    'DeductOutstandingBalance' => 
    array (
      'summary' => '此API用来冲减分销客户已被抵扣的额度。例如当前已抵扣额度为500，可用额度是1000。通过冲减，冲减了300， 之后已抵扣额度就变为200，可用额度变为1300。
注意，有时候会发现客户的已用额度为负数。此时说明无需对客户已用额度进行恢复，静待客户使用即可。造成这种现象的原因在于，当客户额度满的时候产生了退款。所以，客户额度会额外增加。
例如，当前客户最大可用额度是1000，无任何使用。此时发生退款300。则已用额度，会变为-300。',
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
          'name' => 'Uid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分销客户账号UID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1133166938931507',
          ),
        ),
        1 => 
        array (
          'name' => 'DeductAmount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要冲减的已抵扣额度',
            'type' => 'string',
            'required' => true,
            'example' => '300',
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
                'description' => '结果代码，候选值:
200: OK
1109: 系统错误',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '同Code参数值',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '候选值:True/False，代表了是否当前API调用本身是成功的。不代表后续 业务操作的成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求id，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error1109',
            'errorMessage' => 'system error.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"200\\",\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\"\\n}","type":"json"}]',
      'title' => '冲减已抵扣额度',
    ),
    'CustomerQuotaRecordList' => 
    array (
      'summary' => '查询国际站分销客户quota调整流水，只针对国际用户。国内站无法调用',
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
          'name' => 'EndUserPk',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户uid',
            'description' => '客户uid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '5113766248601929',
          ),
        ),
        1 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始日期
格式：yyyy-MM-dd',
            'description' => '开始日期
格式：yyyy-MM-dd',
            'type' => 'string',
            'required' => true,
            'example' => '2023-01-02',
          ),
        ),
        2 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束日期
格式：yyyy-MM-dd',
            'description' => '结束日期
格式：yyyy-MM-dd',
            'type' => 'string',
            'required' => true,
            'example' => '2023-09-24',
          ),
        ),
        3 => 
        array (
          'name' => 'OperationType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '操作类型
枚举
all 全部
quota_create  创建
quota_amount_adjust 额度调整',
            'description' => '操作类型
枚举
all 全部
quota_create  创建
quota_amount_adjust 额度调整',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页每页记录数，最大值100',
            'description' => '分页每页记录数，最大值100',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页，当前页码，从 1 开始',
            'description' => '分页，当前页码，从 1 开始',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '多语言参数
en：英文
zh：中文
ja：日文',
            'description' => '多语言参数，默认英文
en：英文
zh：中文
ja：日文',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
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
              'Total' => 
              array (
                'title' => '总条数',
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNo' => 
              array (
                'title' => '当前页码',
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '当前每页条数',
                'description' => '当前每页条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Data' => 
              array (
                'description' => '返回结果列表数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回数据',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OperationSubmitType' => 
                    array (
                      'title' => '操作发起方式
API/ACPN',
                      'description' => '操作发起方式
API/ACPN',
                      'type' => 'string',
                      'example' => 'ACPN',
                    ),
                    'OperationTime' => 
                    array (
                      'title' => '操作时间',
                      'description' => '操作时间',
                      'type' => 'string',
                      'example' => '2023-12-15 10:34:36 UTC+8',
                    ),
                    'OperationTypeDesc' => 
                    array (
                      'title' => '变更类型描述',
                      'description' => '变更类型描述',
                      'type' => 'string',
                      'example' => 'Quota Adjustment',
                    ),
                    'OperationUid' => 
                    array (
                      'title' => '操作人uid',
                      'description' => '操作人uid',
                      'type' => 'string',
                      'example' => '5113766248601929',
                    ),
                    'UpdateAfterAmount' => 
                    array (
                      'title' => '变更后金额',
                      'description' => '变更后金额',
                      'type' => 'string',
                      'example' => '121.00',
                    ),
                    'UpdateAmount' => 
                    array (
                      'title' => '变更金额',
                      'description' => '变更金额',
                      'type' => 'string',
                      'example' => '-100.00',
                    ),
                    'UpdateBeforeAmount' => 
                    array (
                      'title' => '变更前金额',
                      'description' => '变更前金额',
                      'type' => 'string',
                      'example' => '221.00',
                    ),
                    'OperationTypeCode' => 
                    array (
                      'title' => '变更类型code',
                      'description' => '变更类型code
枚举：all 全部，quota_create 创建，quota_amount_adjust 额度调整',
                      'type' => 'string',
                      'example' => 'quota_amount_adjust',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '2103a0ae16849855284594613d874e',
              ),
              'Msg' => 
              array (
                'title' => '返回结果描述',
                'description' => '返回结果描述',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Code' => 
              array (
                'title' => '返回结果状态码，200是成功',
                'description' => '返回结果状态码，200是成功',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Total\\": 10,\\n  \\"PageNo\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Data\\": [\\n    {\\n      \\"OperationSubmitType\\": \\"ACPN\\",\\n      \\"OperationTime\\": \\"2023-12-15 10:34:36 UTC+8\\",\\n      \\"OperationTypeDesc\\": \\"Quota Adjustment\\",\\n      \\"OperationUid\\": \\"5113766248601929\\",\\n      \\"UpdateAfterAmount\\": \\"121.00\\",\\n      \\"UpdateAmount\\": \\"-100.00\\",\\n      \\"UpdateBeforeAmount\\": \\"221.00\\",\\n      \\"OperationTypeCode\\": \\"quota_amount_adjust\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"2103a0ae16849855284594613d874e\\",\\n  \\"Msg\\": \\"SUCCESS\\",\\n  \\"Code\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '查询国际站分销客户quota调整流水',
      'description' => '调用者必须是阿里云国际站渠道总经销商伙伴或阿里云国际站渠道经销商伙伴。',
    ),
    'ExportCustomerQuotaRecord' => 
    array (
      'summary' => '国际站分销客户，导出quota调整额度流水到Excel，只允许国际站调用',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EndUserPk',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户uid',
            'description' => '客户uid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '5113766248601929',
          ),
        ),
        1 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始日期
格式：yyyy-MM-dd',
            'description' => '开始日期
格式：yyyy-MM-dd',
            'type' => 'string',
            'required' => true,
            'example' => '2023-11-10',
          ),
        ),
        2 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束日期
格式：yyyy-MM-dd',
            'description' => '结束日期
格式：yyyy-MM-dd',
            'type' => 'string',
            'required' => true,
            'example' => '2023-12-24',
          ),
        ),
        3 => 
        array (
          'name' => 'OperationType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '操作类型
枚举
all 全部
quota_create  创建
quota_amount_adjust 额度调整',
            'description' => '操作类型
枚举
all 全部
quota_create  创建
quota_amount_adjust 额度调整',
            'type' => 'string',
            'required' => true,
            'example' => 'all',
          ),
        ),
        4 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '多语言参数
en：英文
zh：中文
ja：日文',
            'description' => '多语言参数，默认英文
en：英文
zh：中文
ja：日文',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
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
                'example' => '210bc4b416874189683843905d9f9a',
              ),
              'Msg' => 
              array (
                'title' => '描述',
                'description' => '描述',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => 'code',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '数据',
                'description' => '数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'title' => '导出任务id',
                    'description' => '导出任务id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1231',
                  ),
                  'Cost' => 
                  array (
                    'title' => '预估耗时，单位分钟',
                    'description' => '预估耗时，单位分钟',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"210bc4b416874189683843905d9f9a\\",\\n  \\"Msg\\": \\"SUCCESS\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": {\\n    \\"Id\\": 1231,\\n    \\"Cost\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '导出分销客户quota流水',
      'description' => '调用者必须是阿里云国际站渠道总经销商伙伴或阿里云国际站渠道经销商伙伴。',
    ),
    'QuotaListExportPaged' => 
    array (
      'summary' => '国际分销用户查看quota流水导出结果，只允许国际站调用。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页页码，从1开始',
            'description' => '分页页码，从1开始',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小，最大100',
            'description' => '每页大小，最大100',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Language',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '多语言参数
en：英文
zh：中文
ja：日文',
            'description' => '多语言参数，默认英文
en：英文
zh：中文
ja：日文',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
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
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => '210e876f16704666020714468dab35',
              ),
              'Total' => 
              array (
                'title' => '总条数',
                'description' => '总条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'PageNo' => 
              array (
                'title' => '当前页码',
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'title' => '当前每页条数',
                'description' => '当前每页条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Msg' => 
              array (
                'title' => '返回结果描述',
                'description' => '返回结果描述',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Code' => 
              array (
                'title' => '返回结果状态码，200是成功',
                'description' => '返回结果状态码，200是成功',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '返回结果列表数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '响应数据。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'FileName' => 
                    array (
                      'title' => '文件名称',
                      'description' => '文件名称',
                      'type' => 'string',
                      'example' => '5113766248601929_quota_2023-06-22_2023-12-21_all_2023122121310057',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2023-12-21 21:31:57 UTC+8',
                    ),
                    'Status' => 
                    array (
                      'title' => '任务状态展示',
                      'description' => '任务状态展示',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'StatusCode' => 
                    array (
                      'title' => '任务状态code枚举
2：导出中
3：导出成功
-1：导出失败',
                      'description' => '任务状态code枚举
2：导出中
3：导出成功
-1：导出失败',
                      'type' => 'string',
                      'example' => 'Export Success',
                    ),
                    'Url' => 
                    array (
                      'title' => '文件下载链接',
                      'description' => '文件下载链接',
                      'type' => 'string',
                      'example' => '//aliyun-eco-market-servic-singapore.oss-ap-southeast-1.aliyuncs.com/5113766248601929_quota_2023-06-22_2023-12-21_all_2023122121310057',
                    ),
                    'Message' => 
                    array (
                      'title' => '提示信息',
                      'description' => '提示信息',
                      'type' => 'string',
                      'example' => 'success',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"210e876f16704666020714468dab35\\",\\n  \\"Total\\": 10,\\n  \\"PageNo\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"Msg\\": \\"SUCCESS\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": [\\n    {\\n      \\"FileName\\": \\"5113766248601929_quota_2023-06-22_2023-12-21_all_2023122121310057\\",\\n      \\"CreateTime\\": \\"2023-12-21 21:31:57 UTC+8\\",\\n      \\"Status\\": \\"3\\",\\n      \\"StatusCode\\": \\"Export Success\\",\\n      \\"Url\\": \\"//aliyun-eco-market-servic-singapore.oss-ap-southeast-1.aliyuncs.com/5113766248601929_quota_2023-06-22_2023-12-21_all_2023122121310057\\",\\n      \\"Message\\": \\"success\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看quota流水导出结果',
      'description' => '调用者必须是阿里云国际站渠道总经销商伙伴或阿里云国际站渠道经销商伙伴。',
    ),
    'ListCouponUsage' => 
    array (
      'summary' => '分销伙伴查询自己优惠券发放后的优惠券使用量。',
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
          'name' => 'Account',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云客户账号',
            'type' => 'string',
            'required' => false,
            'example' => 'oqevfbveuadcrduzmf@ttirv.net',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠券状态 </br>
AVAILABLE 正常 </br>
EXHAUSTED 已用完 </br>
EXPIRED 已过期 </br>
ABANDONED 已作废 </br>',
            'type' => 'string',
            'required' => false,
            'example' => 'AVAILABLE',
          ),
        ),
        2 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码</br> 
 默认值为1 最小值1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页行数 </br>
  默认值20 最大值50 最小值1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'Uid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云账号uid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1133166938931507',
          ),
        ),
        5 => 
        array (
          'name' => 'CouponTemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠券模版id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5075915',
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
            'description' => '返回对象',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '接口状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => 'Id of the request',
                'description' => '接口返回提示信息',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '接口请求id返回问题提供查询使用',
                'type' => 'string',
                'example' => '9C14ADFE-DF0A-54D4-8BD5-45D0839246B4',
              ),
              'PageInfo' => 
              array (
                'description' => '分页信息',
                'type' => 'object',
                'properties' => 
                array (
                  'Page' => 
                  array (
                    'description' => '分页，当前页',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页，每页数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '分页，总量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '300',
                  ),
                ),
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CouponTemplateId' => 
                    array (
                      'description' => '优惠券模版id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '503802',
                    ),
                    'CouponId' => 
                    array (
                      'description' => '优惠券id',
                      'type' => 'string',
                      'example' => '59226280',
                    ),
                    'Amount' => 
                    array (
                      'description' => '优惠券面额',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '200',
                    ),
                    'Balance' => 
                    array (
                      'description' => '余额',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '0.01',
                    ),
                    'EffDate' => 
                    array (
                      'description' => '优惠券有效期',
                      'type' => 'string',
                      'example' => '2023-04-06 00:00:00 ~ 2023-04-07 00:00:00',
                    ),
                    'Status' => 
                    array (
                      'description' => '优惠券状态 </br>
AVAILABLE 正常 </br>
EXHAUSTED 已用完 </br>
EXPIRED 已过期 </br>
ABANDONED 已作废 </br>',
                      'type' => 'string',
                      'example' => 'AVAILABLE',
                    ),
                    'Account' => 
                    array (
                      'description' => '阿里云账号',
                      'type' => 'string',
                      'example' => 'oqevfbveuadcrduzmf@ttirv.net',
                    ),
                    'PublishDate' => 
                    array (
                      'description' => '优惠券发放时间',
                      'type' => 'string',
                      'example' => '2023-04-06 19:32:10
',
                    ),
                    'Uid' => 
                    array (
                      'description' => '阿里云uid',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1647668856741998',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"9C14ADFE-DF0A-54D4-8BD5-45D0839246B4\\",\\n  \\"PageInfo\\": {\\n    \\"Page\\": 1,\\n    \\"PageSize\\": 20,\\n    \\"Total\\": 300\\n  },\\n  \\"Data\\": [\\n    {\\n      \\"CouponTemplateId\\": 503802,\\n      \\"CouponId\\": \\"59226280\\",\\n      \\"Amount\\": 200,\\n      \\"Balance\\": 0.01,\\n      \\"EffDate\\": \\"2023-04-06 00:00:00 ~ 2023-04-07 00:00:00\\",\\n      \\"Status\\": \\"AVAILABLE\\",\\n      \\"Account\\": \\"oqevfbveuadcrduzmf@ttirv.net\\",\\n      \\"PublishDate\\": \\"2023-04-06 19:32:10\\\\n\\",\\n      \\"Uid\\": 1647668856741998\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '优惠券使用量列表查询',
      'description' => '确保当前调用账号身份为分销伙伴 
<notice>仅国际提供></notice>',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'agency.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
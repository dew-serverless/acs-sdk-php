<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Domain',
    'version' => '2018-01-29',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 169607,
      'title' => '域名注册、续费和赎回',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SaveSingleTaskForCreatingOrderActivate',
        1 => 'SaveBatchTaskForCreatingOrderActivate',
        2 => 'SaveBatchTaskForCreatingOrderRenew',
        3 => 'SaveSingleTaskForCreatingOrderRenew',
        4 => 'SaveSingleTaskForCreatingOrderRedeem',
        5 => 'SaveBatchTaskForCreatingOrderRedeem',
        6 => 'CheckDomain',
        7 => 'FuzzyMatchDomainSensitiveWord',
        8 => 'BatchFuzzyMatchDomainSensitiveWord',
        9 => 'SetupDomainAutoRenew',
      ),
    ),
    1 => 
    array (
      'id' => 60921,
      'title' => '实名认证',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 60935,
          'title' => '模板管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'SaveRegistrantProfile',
            1 => 'DeleteRegistrantProfile',
            2 => 'DeleteContactTemplates',
            3 => 'RegistrantProfileRealNameVerification',
            4 => 'SetDefaultRegistrantProfile',
            5 => 'QueryDomainAdminDivision',
            6 => 'QueryFailReasonForRegistrantProfileRealNameVerification',
            7 => 'VerifyContactField',
            8 => 'QueryRegistrantProfiles',
            9 => 'QueryRegistrantProfileRealNameVerificationInfo',
          ),
        ),
        1 => 'SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential',
        2 => 'SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID',
        3 => 'CancelDomainVerification',
        4 => 'QueryDomainRealNameVerificationInfo',
        5 => 'QueryFailReasonForDomainRealNameVerification',
      ),
    ),
    2 => 
    array (
      'id' => 169608,
      'title' => '邮箱验证',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteEmailVerification',
        1 => 'VerifyEmail',
        2 => 'ResendEmailVerification',
        3 => 'SubmitEmailVerification',
        4 => 'QueryEmailVerification',
        5 => 'ListEmailVerification',
      ),
    ),
    3 => 
    array (
      'id' => 169609,
      'title' => '域名过户和信息修改',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SaveSingleTaskForUpdateProhibitionLock',
        1 => 'SaveBatchTaskForUpdateProhibitionLock',
        2 => 'SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID',
        3 => 'SaveTaskForUpdatingRegistrantInfoByIdentityCredential',
        4 => 'SaveSingleTaskForUpdatingContactInfo',
        5 => 'SaveBatchTaskForUpdatingContactInfoByNewContact',
        6 => 'SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId',
      ),
    ),
    4 => 
    array (
      'id' => 60926,
      'title' => '域名转移管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SaveBatchTaskForCreatingOrderTransfer',
        1 => 'SaveSingleTaskForCreatingOrderTransfer',
        2 => 'SaveSingleTaskForCancelingTransferIn',
        3 => 'SaveSingleTaskForCancelingTransferOut',
        4 => 'TransferInReenterTransferAuthorizationCode',
        5 => 'TransferInResendMailToken',
        6 => 'TransferInRefetchWhoisEmail',
        7 => 'TransferInCheckMailToken',
        8 => 'SaveSingleTaskForQueryingTransferAuthorizationCode',
        9 => 'SaveBatchTaskForTransferProhibitionLock',
        10 => 'SaveSingleTaskForTransferProhibitionLock',
        11 => 'ConfirmTransferInEmail',
        12 => 'QueryTransferInByInstanceId',
        13 => 'QueryTransferInList',
        14 => 'QueryTransferOutInfo',
        15 => 'CheckTransferInFeasibility',
        16 => 'SaveSingleTaskForApplyQuickTransferOutOpenly',
        17 => 'SaveBatchTaskForApplyQuickTransferOutOpenly',
      ),
    ),
    5 => 
    array (
      'id' => 169613,
      'title' => '任务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CancelTask',
        1 => 'AcknowledgeTaskResult',
        2 => 'QueryTaskDetailHistory',
        3 => 'PollTaskResult',
        4 => 'QueryTaskList',
        5 => 'QueryTaskInfoHistory',
        6 => 'QueryTaskDetailList',
      ),
    ),
    6 => 
    array (
      'id' => 60915,
      'title' => '域名信息查询',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryDomainByDomainName',
        1 => 'QueryContactInfo',
        2 => 'QueryDomainByInstanceId',
        3 => 'QueryDomainList',
        4 => 'ScrollDomainList',
        5 => 'QueryDomainSuffix',
        6 => 'QueryAdvancedDomainList',
        7 => 'LookupTmchNotice',
        8 => 'CheckDomainSunriseClaim',
        9 => 'QueryArtExtension',
      ),
    ),
    7 => 
    array (
      'id' => 169614,
      'title' => 'DNS管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SaveSingleTaskForCreatingDnsHost',
        1 => 'SaveSingleTaskForAddingDSRecord',
        2 => 'SaveSingleTaskForDeletingDnsHost',
        3 => 'SaveSingleTaskForDeletingDSRecord',
        4 => 'SaveSingleTaskForSynchronizingDnsHost',
        5 => 'SaveSingleTaskForSynchronizingDSRecord',
        6 => 'SaveSingleTaskForModifyingDnsHost',
        7 => 'SaveSingleTaskForModifyingDSRecord',
        8 => 'SaveBatchTaskForModifyingDomainDns',
        9 => 'QueryDnsHost',
        10 => 'QueryDSRecord',
      ),
    ),
    8 => 
    array (
      'id' => 169615,
      'title' => '分组管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteDomainGroup',
        1 => 'UpdateDomainToDomainGroup',
        2 => 'SaveDomainGroup',
        3 => 'QueryDomainGroupList',
      ),
    ),
    9 => 
    array (
      'id' => 165272,
      'title' => '注册局锁管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryServerLock',
        1 => 'CheckProcessingServerLockApply',
        2 => 'CheckMaxYearOfServerLock',
        3 => 'ListServerLock',
      ),
    ),
    10 => 
    array (
      'id' => 60956,
      'title' => '其他接口',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 60918,
          'title' => '隐私保护',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'SaveBatchTaskForDomainNameProxyService',
            1 => 'SaveSingleTaskForDomainNameProxyService',
          ),
        ),
        1 => 
        array (
          'id' => 60943,
          'title' => '.餐厅/.商标等资质管理',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'SubmitOperationAuditInfo',
            1 => 'SubmitOperationCredentials',
            2 => 'CancelOperationAudit',
            3 => 'CancelQualificationVerification',
            4 => 'ResetQualificationVerification',
            5 => 'SaveRegistrantProfileRealNameVerification',
            6 => 'QueryFailingReasonListForQualification',
            7 => 'QueryOperationAuditInfoDetail',
            8 => 'QueryOperationAuditInfoList',
            9 => 'QueryQualificationDetail',
            10 => 'GetOperationOssUploadPolicy',
          ),
        ),
        2 => 'SaveTaskForSubmittingDomainDelete',
        3 => 'SaveSingleTaskForAssociatingEns',
        4 => 'SaveSingleTaskForDisassociatingEns',
        5 => 'SaveBatchDomainRemark',
        6 => 'SaveSingleTaskForSaveArtExtension',
        7 => 'QueryChangeLogList',
        8 => 'QueryLocalEnsAssociation',
        9 => 'QueryEnsAssociation',
        10 => 'GetQualificationUploadPolicy',
      ),
    ),
    11 => 
    array (
      'id' => 172550,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ChangeResourceGroup',
        1 => 'DomainSpecialBizCancel',
        2 => 'SubmitDomainSpecialBizCredentials',
        3 => 'QueryDomainSpecialBizInfoByDomain',
        4 => 'QueryDomainSpecialBizDetail',
        5 => 'SaveBatchTaskForReserveDropListDomain',
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
    'SaveSingleTaskForCreatingOrderActivate' => 
    array (
      'summary' => '调用SaveSingleTaskForCreatingOrderActivate提交域名注册任务。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ZhRegistrantName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名联系人（中文）。

> 该参数仅适用于中国站。当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '想要注册的域名。
>注册域名时必须指定域名持有者信息，不指定域名持有者信息会导致域名注册失败。您可以通过RegistrantProfileId参数指定信息模板定义域名持有者信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'SubscriptionDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买周期，单位为**年**。默认为**1年**，最长可购买**10年**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'RegistrantProfileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名信息模板编号（信息模板包含域名持有者名称、域名联系人、电话、邮箱等信息），仅能使用已实名认证的域名信息模板编号进行域名注册。如果您已经创建了域名注册信息模板，可通过调用[QueryRegistrantProfiles](~~QueryRegistrantProfiles~~)接口查询域名信息模板编号。

> 传入本参数后，无需再传入**RegistrantType**、**ZhRegistrantOrganization**、**ZhRegistrantName**、**ZhProvince**、**ZhCity**、**ZhAddress**、**RegistrantOrganization**、**RegistrantName**、**Province**、**City**、**Address**、**PostalCode**、**Country**、**TelArea**、**Telephone**、**TelExt**和**Email**参数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        5 => 
        array (
          'name' => 'EnableDomainProxy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启域名隐私保护服务。取值：
- **true**：开启。
- **false**：不开启。

默认值为**true**。

                           ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'PermitPremiumActivation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否允许注册白金词，取值：
- **false**：不允许。
- **true**：允许。              

默认值为**false**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'AliyunDns',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用阿里云DNS，取值为**true**|**false**，默认为**true**。

> - 取值为**true**时，您无需再传入**Dns1**和**Dns2**参数，否则传入的**Dns1**和**Dns2**参数不会生效。
- 取值为**false**时，您还需要传入**Dns1**和**Dns2**参数。
 ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'true',
          ),
        ),
        8 => 
        array (
          'name' => 'Dns1',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义DNS1。

> - 当**AliyunDns**取值为**false**时，本参数才可用且必须传入。
- 请务必确保自定义DNS的正确性，否则可能导致注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'ns1.aliyun.com',
          ),
        ),
        9 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        10 => 
        array (
          'name' => 'ZhCity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '城市（中文）。

> 该参数仅适用于中国站。当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '北京市',
          ),
        ),
        11 => 
        array (
          'name' => 'ZhRegistrantOrganization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者名称（中文）。

> 该参数仅适用于中国站。当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        12 => 
        array (
          'name' => 'Country',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '国家代码，例如**CN**。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'CN',
          ),
        ),
        13 => 
        array (
          'name' => 'Dns2',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自定义DNS2。

> - 当**AliyunDns**取值为**false**时，本参数才可用且必须传入。
- 请务必确保自定义DNS的正确性，否则可能导致注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'ns2.aliyun.com',
          ),
        ),
        14 => 
        array (
          'name' => 'ZhProvince',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '省份（中文）。

> 该参数仅适用于中国站。当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '北京',
          ),
        ),
        15 => 
        array (
          'name' => 'ZhAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '详细地址（中文）。

> 该参数仅适用于中国站。当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '朝阳区',
          ),
        ),
        16 => 
        array (
          'name' => 'City',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '城市（英文）。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'bei jing shi',
          ),
        ),
        17 => 
        array (
          'name' => 'RegistrantOrganization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者名称（英文）。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'ce shi',
          ),
        ),
        18 => 
        array (
          'name' => 'RegistrantName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名联系人（英文）。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'ce shi',
          ),
        ),
        19 => 
        array (
          'name' => 'Province',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '省份（英文）。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'bei jing',
          ),
        ),
        20 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '详细地址（英文）。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'chao yang qu',
          ),
        ),
        21 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电子邮箱。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'username@example.com',
          ),
        ),
        22 => 
        array (
          'name' => 'PostalCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮政编码。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '1234567',
          ),
        ),
        23 => 
        array (
          'name' => 'TelArea',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话国家代码，例如中国为**86**。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '86',
          ),
        ),
        24 => 
        array (
          'name' => 'Telephone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话号码。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '12345678',
          ),
        ),
        25 => 
        array (
          'name' => 'TelExt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分机号码。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '1234',
          ),
        ),
        26 => 
        array (
          'name' => 'RegistrantType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者类型。取值：
- **1**：个人。
- **2**：企业、组织等。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        27 => 
        array (
          'name' => 'TrademarkDomainActivation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否允许注册商标词，取值：
- **false**：不允许。
- **true**：允许。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        28 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代金券编号，默认为字符串。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        29 => 
        array (
          'name' => 'UseCoupon',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用代金券。取值：

- **true**：使用
- **false**：不使用

默认值为**false**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        30 => 
        array (
          'name' => 'PromotionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '123123',
          ),
        ),
        31 => 
        array (
          'name' => 'UsePromotion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券，取值：
- **false**：不允许。
- **true**：允许。

默认值为**false**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        32 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '无。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-XX',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '40F46D3D-F4F3-4CCB-AC30-2DD20E32E528',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\",\\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\"\\n}","errorExample":"{    \\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\",\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\"\\n}\\n\\t\\t\\t\\t\\t"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForCreatingOrderActivateResponse>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n    <RequestId>40F46D3D-F4F3-4CCB-AC30-2DD20E32E528</RequestId>\\n</SaveSingleTaskForCreatingOrderActivateResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForCreatingOrderActivateResponse>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n    <RequestId>40F46D3D-F4F3-4CCB-AC30-2DD20E32E528</RequestId>\\n</SaveSingleTaskForCreatingOrderActivateResponse>"}]',
      'title' => '提交域名注册任务',
      'description' => '2022年3月1日起，仅能通过已实名认证的域名信息模板注册域名，不再支持传入持有者信息注册域名。

注册域名需同时填写您想注册的域名、域名持有者信息及DNS。您需要通过已实名认证的域名信息模板编号来关联域名的持有者信息，DNS可以默认使用阿里云DNS或者填写自定义DNS。

任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveBatchTaskForCreatingOrderActivate' => 
    array (
      'summary' => '调用SaveBatchTaskForCreatingOrderActivate提交批量注册域名的任务。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代金券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        3 => 
        array (
          'name' => 'UseCoupon',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用代金券。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'PromotionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '123124',
          ),
        ),
        5 => 
        array (
          'name' => 'UsePromotion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'OrderActivateParam',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '任务详情列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'TelExt' => 
                array (
                  'description' => '分机号码。

> 当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1234',
                ),
                'AliyunDns' => 
                array (
                  'description' => '是否使用阿里云DNS，取值为**true**|**false**，默认为**true**。

> - 取值为**true**时，您无需再传入**OrderActivateParam.N.Dns1**和**OrderActivateParam.N.Dns2**参数，否则传入的**OrderActivateParam.N.Dns1**和**OrderActivateParam.N.Dns2**参数不会生效。 
- 取值为**false**时，您还需要传入**OrderActivateParam.N.Dns1**和**OrderActivateParam.N.Dns2**参数。
',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'PermitPremiumActivation' => 
                array (
                  'description' => '是否允许注册白金词，默认为**false**。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'ZhProvince' => 
                array (
                  'description' => '省份（中文）。

> 该参数仅适用于中国站。当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '北京',
                ),
                'Telephone' => 
                array (
                  'description' => '电话号码。

> 当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1820000****',
                ),
                'RegistrantOrganization' => 
                array (
                  'description' => '域名持有者名称（英文）。

> 当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'zhang san',
                ),
                'City' => 
                array (
                  'description' => '城市（英文）。

> 当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'bei jing shi',
                ),
                'DomainName' => 
                array (
                  'description' => '想要注册的域名。

> 注册域名时必须指定域名持有者信息，不指定域名持有者信息会导致域名注册失败。您可以通过OrderActivateParam.N.RegistrantProfileId参数指定信息模板定义域名持有者信息。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'example.com',
                ),
                'ZhCity' => 
                array (
                  'description' => '城市（中文）。

> 该参数仅适用于中国站。当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '北京市',
                ),
                'Dns1' => 
                array (
                  'description' => '自定义DNS1。

> - 当**OrderActivateParam.N.AliyunDns**取值为**false**时，本参数才可用且必须传入。
- 请务必确保自定义DNS的正确性，否则可能导致注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ns2.aliyun.com',
                ),
                'TelArea' => 
                array (
                  'description' => '电话国家代码，例如，中国的电话国家代码为**86**。

> 当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '86',
                ),
                'Address' => 
                array (
                  'description' => '通讯地址（英文）。

> 当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'chao yan qu *** dasha *** hao',
                ),
                'EnableDomainProxy' => 
                array (
                  'description' => '是否开启域名隐私保护服务，默认为**true**。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'true',
                ),
                'PostalCode' => 
                array (
                  'description' => '邮政编码。

> 当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '102629',
                ),
                'RegistrantProfileId' => 
                array (
                  'description' => '域名信息模板编号（信息模板包含域名持有者名称、域名联系人、电话、邮箱等信息），仅能使用已实名认证的域名信息模板编号进行域名注册。如果您已经创建了域名注册信息模板，可通过调用[QueryRegistrantProfiles](~~67701~~) 接口查询域名信息模板编号。

> 传入本参数后，无需再传入**OrderActivateParam.N.RegistrantType**、**OrderActivateParam.N.ZhRegistrantOrganization**、**OrderActivateParam.N.ZhRegistrantName**、**OrderActivateParam.N.ZhProvince**、**OrderActivateParam.N.ZhCity**、**OrderActivateParam.N.ZhAddress**、**OrderActivateParam.N.RegistrantOrganization**、**OrderActivateParam.N.RegistrantName**、**OrderActivateParam.N.Province**、**OrderActivateParam.N.City**、**OrderActivateParam.N.Address**、**OrderActivateParam.N.PostalCode**、**OrderActivateParam.N.Country**、**OrderActivateParam.N.TelArea**、**OrderActivateParam.N.Telephone**、**OrderActivateParam.N.TelExt**和**OrderActivateParam.N.Email**参数。

',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '000000',
                ),
                'ZhRegistrantOrganization' => 
                array (
                  'description' => '域名持有者名称（中文）。

> 该参数仅适用于中国站。当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '张三',
                ),
                'TrademarkDomainActivation' => 
                array (
                  'description' => '是否允许注册商标词。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'Dns2' => 
                array (
                  'description' => '自定义DNS2。

> - 当**OrderActivateParam.N.AliyunDns**取值为**false**时，本参数才可用且必须传入。
- 请务必确保自定义DNS的正确性，否则可能导致注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ns1.aliyun.com',
                ),
                'ZhRegistrantName' => 
                array (
                  'description' => '域名联系人（中文）。

> 该参数仅适用于中国站。当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '张三',
                ),
                'Email' => 
                array (
                  'description' => '电子邮箱。

> 当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'username@example.com',
                ),
                'RegistrantType' => 
                array (
                  'description' => '域名持有者类型。取值：
- **1**：个人。
- **2**：企业、组织等。

> 当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1',
                ),
                'Country' => 
                array (
                  'description' => '国家代码。例如，**CN**代表中国，**US**代表美国。

> 当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'CN',
                ),
                'RegistrantName' => 
                array (
                  'description' => '域名联系人（英文）。

> 当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'zhang san',
                ),
                'SubscriptionDuration' => 
                array (
                  'description' => '购买周期，单位为**年**。默认为**一年**。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'ZhAddress' => 
                array (
                  'description' => '通讯地址（中文）。

> 该参数仅适用于中国站。当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '朝阳区***大厦***号',
                ),
                'Province' => 
                array (
                  'description' => '省份（英文）。

> 当未传入**OrderActivateParam.N.RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'bei jing',
                ),
                'ResourceGroupId' => 
                array (
                  'description' => '资源组ID。
> 若没有传入资源组ID或传入的资源组ID不存在，则绑定默认资源组ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'rg-XX',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 1000,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'F51977F9-2B40-462B-BCCD-CF5BB1E9DB56',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'd3babb0a-c939-4c25-8c65-c47b65f5492a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\",\\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f5492a\\"\\n}","errorExample":"{    \\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f5492a\\",\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\"\\n}"},{"type":"xml","example":"<SaveBatchTaskForCreatingOrderActivateResponse>\\n    <TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n    <RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveBatchTaskForCreatingOrderActivateResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchTaskForCreatingOrderActivateResponse>\\n    <TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n    <RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveBatchTaskForCreatingOrderActivateResponse>"}]',
      'title' => '提交批量注册域名任务',
      'description' => '2022年3月1日起，仅能通过已实名认证的域名信息模板注册域名，不再支持传入持有者信息注册域名。

注册域名需同时填写您想注册的域名、域名持有者信息及DNS。您需要通过已实名认证的域名信息模板编号来关联域名的持有者信息，DNS可以默认使用阿里云DNS或者填写自定义DNS。

> - 每周注册的域名总数不能超过10万。
- **SaveBatchTaskForCreatingOrderActivate**接口下请求参数的格式为OrderActivateParam.N.*，其中N代表传入的第几个域名。


任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveBatchTaskForCreatingOrderRenew' => 
    array (
      'summary' => '调用SaveBatchTaskForCreatingOrderRenew提交批量域名续费任务。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可以设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代金券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '12312412',
          ),
        ),
        3 => 
        array (
          'name' => 'UseCoupon',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用代金券。取值：

- **false**：不使用。
- **true**：使用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'PromotionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '123123123',
          ),
        ),
        5 => 
        array (
          'name' => 'UsePromotion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券。取值：

- **false**：不使用。
- **true**：使用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'OrderRenewParam',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '域名续费的变更参数列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'SubscriptionDuration' => 
                array (
                  'description' => '续费年限。默认为**1**年。范围为**1**~**10**年。',
                  'type' => 'integer',
                  'format' => 'int32',
                  'required' => false,
                  'example' => '1',
                ),
                'DomainName' => 
                array (
                  'description' => '域名，如涉及多个域名时该项传入域名列表。域名列表可通过[QueryDomainList](~~67712~~)接口获取。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Aliyun.com',
                ),
                'CurrentExpirationDate' => 
                array (
                  'description' => '域名当前到期日，计算方式为UTC时间1970年1月1日0点距离域名当前到期日的毫秒数。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '1522080000000',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 1000,
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
                'example' => 'F51977F9-2B40-462B-BCCD-CF5BB1E9DB56',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'd3babb0a-c939-4c25-8c65-c47b65f5492a',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\",\\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f5492a\\"\\n}","errorExample":"{\\n  \\"requestId\\": \\"9DFBA504-3C59-427D-907D-B6C61F2A3A27\\",\\n  \\"taskNo\\": \\"2daff10d-c284-4b98-a6f4-796148116b2b\\"\\n}"},{"type":"xml","example":"<SaveBatchTaskForCreatingOrderRenewResponse>\\n    <TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n    <RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveBatchTaskForCreatingOrderRenewResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchTaskForCreatingOrderRenewResponse>\\n    <TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n    <RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveBatchTaskForCreatingOrderRenewResponse>"}]',
      'title' => '提交批量域名续费任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForCreatingOrderRenew' => 
    array (
      'summary' => '调用SaveSingleTaskForCreatingOrderRenew提交域名续费任务。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要续费的域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'SubscriptionDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '续费年限值，范围：**1**年~**10**年。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'CurrentExpirationDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名当前的到期时间，计算方式为UTC时间1970年1月1日0点距离域名当前到期时间的毫秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1522080000000',
          ),
        ),
        5 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代金券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '123123',
          ),
        ),
        6 => 
        array (
          'name' => 'UseCoupon',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用代金券。取值：

- **false**：不使用。
- **true**：使用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'PromotionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '123132',
          ),
        ),
        8 => 
        array (
          'name' => 'UsePromotion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券。取值：

- **false**：不使用。
- **true**：使用。',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '40F46D3D-F4F3-4CCB-AC30-2DD20E32E528',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\",\\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\"\\n}","errorExample":"{\\n  \\"requestId\\": \\"D9422F19-3C86-44FA-B5F7-036E89F3904F\\",\\n  \\"taskNo\\": \\"9f7a509f-f347-4430-969b-52ed6d23e58f\\"\\n}"},{"type":"xml","example":"<SaveSingleTaskForCreatingOrderRenewResponse>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n    <RequestId>40F46D3D-F4F3-4CCB-AC30-2DD20E32E528</RequestId>\\n</SaveSingleTaskForCreatingOrderRenewResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForCreatingOrderRenewResponse>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n    <RequestId>40F46D3D-F4F3-4CCB-AC30-2DD20E32E528</RequestId>\\n</SaveSingleTaskForCreatingOrderRenewResponse>"}]',
      'title' => '提交域名续费任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~QueryTaskDetailList~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForCreatingOrderRedeem' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '想要赎回的域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentExpirationDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名当前到期时间，UTC时间1970年1月1日0点距离现在的毫秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '0000',
          ),
        ),
        4 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代金券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '123123',
          ),
        ),
        5 => 
        array (
          'name' => 'UseCoupon',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用代金券。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'PromotionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '123123',
          ),
        ),
        7 => 
        array (
          'name' => 'UsePromotion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券。',
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
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '40F46D3D-F4F3-4CCB-AC30-2DD20E32E528',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\",\\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\"\\n}","errorExample":"{    \\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\",\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForCreatingOrderRedeemResponse>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n    <RequestId>40F46D3D-F4F3-4CCB-AC30-2DD20E32E528</RequestId>\\n</SaveSingleTaskForCreatingOrderRedeemResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForCreatingOrderRedeemResponse>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n    <RequestId>40F46D3D-F4F3-4CCB-AC30-2DD20E32E528</RequestId>\\n</SaveSingleTaskForCreatingOrderRedeemResponse>"}]',
      'title' => '提交域名赎回任务',
      'summary' => '调用SaveSingleTaskForCreatingOrderRedeem提交域名赎回任务。',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveBatchTaskForCreatingOrderRedeem' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代金券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '123123',
          ),
        ),
        3 => 
        array (
          'name' => 'UseCoupon',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用代金券。取值：

- **false**：不使用。
- **true**：使用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'PromotionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '123213123',
          ),
        ),
        5 => 
        array (
          'name' => 'UsePromotion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券。取值：

- **false**：不使用。
- **true**：使用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'OrderRedeemParam',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '任务详情列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'DomainName' => 
                array (
                  'description' => '域名，如涉及多个域名时该项传入域名列表。域名列表可通过[QueryDomainList](~~67712~~)接口获取。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Aliyun.com',
                ),
                'CurrentExpirationDate' => 
                array (
                  'description' => '域名当前到期日，计算方式为UTC时间1970年1月1日0点距离域名当前到期日的毫秒数。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '000000',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 1000,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'F51977F9-2B40-462B-BCCD-CF5BB1E9DB56',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'd3babb0a-c939-4c25-8c65-c47b65f5492a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\",\\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f5492a\\"\\n}","errorExample":"{    \\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f5492a\\",\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchTaskForCreatingOrderRedeemResponse>\\n    <TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n    <RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveBatchTaskForCreatingOrderRedeemResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchTaskForCreatingOrderRedeemResponse>\\n    <TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n    <RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveBatchTaskForCreatingOrderRedeemResponse>"}]',
      'title' => '提交批量域名赎回任务',
      'summary' => '调用SaveBatchTaskForCreatingOrderRedeem提交批量域名赎回任务。',
      'description' => '任务执行结果请通过[查询任务详情列表](~~67710~~)接口来查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckDomain' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test**.xin',
          ),
        ),
        1 => 
        array (
          'name' => 'FeeCommand',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作命令。取值：
- **create**：新购。
- **renew**：续费。
- **transfer**：转入。
- **restore**：赎回。
                           ',
            'type' => 'string',
            'required' => false,
            'example' => 'create',
          ),
        ),
        2 => 
        array (
          'name' => 'FeeCurrency',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '货币类型。取值： **USD**（美元）。

                           ',
            'type' => 'string',
            'required' => false,
            'example' => 'USD',
          ),
        ),
        3 => 
        array (
          'name' => 'FeePeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买周期年限，单位为**年**。范围为**1**~**10**年。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1',
              ),
              'Avail' => 
              array (
                'description' => '域名是否可以注册。取值：
- **1**：可注册。
- **3**：预登记。
- **4**：可删除预订。
- **0**：不可注册。
- **-1**：异常。
- **-2**：暂停注册。
- **-3**：黑名单。
                           ',
                'type' => 'string',
                'example' => '1',
              ),
              'Price' => 
              array (
                'description' => '溢价词注册价格。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1286',
              ),
              'DomainName' => 
              array (
                'description' => '查询的域名名称。',
                'type' => 'string',
                'example' => 'test**.xin',
              ),
              'Premium' => 
              array (
                'description' => '是否是溢价词。取值：
- **true**：是。
- **false**：否。
                           ',
                'type' => 'string',
                'example' => 'true',
              ),
              'DynamicCheck' => 
              array (
                'description' => '是否动态询价。取值：
- **true**：是。
- **false**：否。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Reason' => 
              array (
                'description' => '由注册局返回的不可注册原因。
>根据注册局的不同，返回的不可注册原因不一致。
',
                'type' => 'string',
                'example' => 'In use',
              ),
              'StaticPriceInfo' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PriceInfo' => 
                  array (
                    'description' => '静态价格信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'action' => 
                        array (
                          'description' => '操作类型

- activate：新购',
                          'type' => 'string',
                          'example' => 'activate',
                        ),
                        'money' => 
                        array (
                          'description' => '金额，单位元。',
                          'type' => 'number',
                          'format' => 'double',
                          'example' => '78.0',
                        ),
                        'period' => 
                        array (
                          'description' => '周期，单位月。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '12',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1\\",\\n  \\"Avail\\": \\"1\\",\\n  \\"Price\\": 1286,\\n  \\"DomainName\\": \\"test**.xin\\",\\n  \\"Premium\\": \\"true\\",\\n  \\"DynamicCheck\\": true,\\n  \\"Reason\\": \\"In use\\",\\n  \\"StaticPriceInfo\\": {\\n    \\"PriceInfo\\": [\\n      {\\n        \\"action\\": \\"activate\\",\\n        \\"money\\": 78,\\n        \\"period\\": 12\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n    \\"RequestId\\": \\"BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1\\",\\n    \\"DomainName\\": \\"abc.xin\\",\\n    \\"Avail\\": 0,\\n    \\"Premium\\": false,\\n    \\"Reason\\": \\"\\",\\n    \\"Price\\": 1286\\n}"},{"type":"xml","example":"<CheckDomain>\\n    <RequestId>BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1</RequestId>\\n    <DomainName>test**.xin</DomainName>\\n    <Avail>1</Avail>\\n    <Premium>false</Premium>\\n    <Reason></Reason>\\n    <Price>1286</Price>\\n</CheckDomain>","errorExample":"<CheckDomain>\\n    <RequestId>BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1</RequestId>\\n    <DomainName>abc.xin</DomainName>\\n    <Avail>1</Avail>\\n    <Premium>true</Premium>\\n    <Reason></Reason>\\n    <Price>1286</Price>\\n</CheckDomain>"}]',
      'title' => '检查域名是否可以注册',
      'summary' => '调用CheckDomain检查域名是否可以注册。',
      'description' => '有关域名的合法性要求，请参见[域名合法性](~~67788~~)。

> 调用CheckDomain接口时有频率限制，单用户限制为10QPS，接口总量限制为100QPS。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'FuzzyMatchDomainSensitiveWord' => 
    array (
      'summary' => '调用FuzzyMatchDomainSensitiveWord检查域名是否包含敏感词。',
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
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名关键字（除域名后缀外包含的词语），多个域名关键字之间使用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'xxx**',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息的语言。取值范围：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
              'Exist' => 
              array (
                'description' => '域名是否包含敏感词。取值：
- **true**：含敏感词。
- **false**：不含敏感词。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D15F91FD-0B34-4E48-8CBF-EFA5D2A31586',
              ),
              'Keyword' => 
              array (
                'description' => '传入的域名关键字。',
                'type' => 'string',
                'example' => 'xxx**',
              ),
              'MatchedSentiveWords' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'MatchedSensitiveWord' => 
                  array (
                    'description' => '匹配到域名中包含敏感词的结果详情。当**Exist**参数的取值为**false**时，匹配结果为空。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Word' => 
                        array (
                          'description' => '匹配到域名中包含的敏感词。',
                          'type' => 'string',
                          'example' => 'xxx',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Exist\\": true,\\n  \\"RequestId\\": \\"D15F91FD-0B34-4E48-8CBF-EFA5D2A31586\\",\\n  \\"Keyword\\": \\"xxx**\\",\\n  \\"MatchedSentiveWords\\": {\\n    \\"MatchedSensitiveWord\\": [\\n      {\\n        \\"Word\\": \\"xxx\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n    \\"RequestId\\": \\"BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1\\",\\n    \\"DomainName\\": \\"abc.com\\",\\n    \\"Exist\\": true,\\n    \\"MatchedSentiveWords\\": [\\n        MatchedSentiveWord:{\\n            \\"Word\\":\\"ab\\"\\n        }\\n    ]\\n}"},{"type":"xml","example":"<FuzzyMatchDomainSensitiveWordResponse>\\n    <MatchedSentiveWords>\\n        <MatchedSensitiveWord>\\n            <Word>xxx</Word>\\n        </MatchedSensitiveWord>\\n    </MatchedSentiveWords>\\n    <Keyword>xxx**.cn</Keyword>\\n    <RequestId>D15F91FD-0B34-4E48-8CBF-EFA5D2A31586</RequestId>\\n    <Exist>true</Exist>\\n</FuzzyMatchDomainSensitiveWordResponse>","errorExample":"<FuzzyMatchDomainSensitiveWord>\\n    <RequestId>BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1</RequestId>\\n    <Keyword>abc.com</Keyword>\\n    <Exist>true</Exist>\\n    <MatchedSentiveWords>\\n        <MatchedSensitiveWord>\\n            <Word>ab<Word/>\\n        </MatchedSensitiveWord>\\n    </MatchedSentiveWords>\\n</FuzzyMatchDomainSensitiveWord>"}]',
      'title' => '检查域名是否包含敏感词',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchFuzzyMatchDomainSensitiveWord' => 
    array (
      'summary' => '调用BatchFuzzyMatchDomainSensitiveWord批量检查域名是否包含敏感词。',
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
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名关键字，多个域名关键字之间用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com,aliyundoc.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'example' => 'C560A803-B975-481D-A66B-A4395EA863A1',
              ),
              'SensitiveWordMatchResultList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SensitiveWordMatchResult' => 
                  array (
                    'description' => '批量匹配结果列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Keyword' => 
                        array (
                          'description' => '传入的域名关键字。',
                          'type' => 'string',
                          'example' => 'example.com,aliyundoc.com',
                        ),
                        'Exist' => 
                        array (
                          'description' => '域名是否包含敏感词。取值：
- **true**：含敏感词。
- **false**：不含敏感词。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'MatchedSentiveWords' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'MatchedSensitiveWord' => 
                            array (
                              'description' => '匹配结果详情。当**Exist**参数的取值为**false**时，匹配结果为空。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Word' => 
                                  array (
                                    'description' => '匹配到的敏感词。',
                                    'type' => 'string',
                                    'example' => 'xxx',
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
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C560A803-B975-481D-A66B-A4395EA863A1\\",\\n  \\"SensitiveWordMatchResultList\\": {\\n    \\"SensitiveWordMatchResult\\": [\\n      {\\n        \\"Keyword\\": \\"example.com,aliyundoc.com\\",\\n        \\"Exist\\": true,\\n        \\"MatchedSentiveWords\\": {\\n          \\"MatchedSensitiveWord\\": [\\n            {\\n              \\"Word\\": \\"xxx\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C560A803-B975-481D-A66B-A4395EA863A1</RequestId>\\n<SensitiveWordMatchResultList>\\n    <SensitiveWordMatchResult>\\n        <Exist>true</Exist>\\n        <Keyword>example.com</Keyword>\\n        <MatchedSentiveWords>\\n            <MatchedSensitiveWord>\\n                <Word>xxx</Word>\\n            </MatchedSensitiveWord>\\n        </MatchedSentiveWords>\\n    </SensitiveWordMatchResult>\\n    <SensitiveWordMatchResult>\\n        <Exist>true</Exist>\\n        <Keyword>aliyundoc.com</Keyword>\\n        <MatchedSentiveWords>\\n            <MatchedSensitiveWord>\\n                <Word>xxx</Word>\\n            </MatchedSensitiveWord>\\n        </MatchedSentiveWords>\\n    </SensitiveWordMatchResult>\\n</SensitiveWordMatchResultList>","errorExample":"<BatchFuzzyMatchDomainSensitiveWord>\\n    <RequestId>BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1</RequestId>\\n    <SensitiveWordMatchResultList>\\n        <SensitiveWordMatchResult>\\n            <Keyword>abc.com</Keyword>\\n            <Exist>true</Exist>\\n            <MatchedSentiveWords>\\n                <MatchedSensitiveWord>\\n                    <Word>ab<Word/>\\n                </MatchedSensitiveWord>\\n            </MatchedSentiveWords>\\n        </SensitiveWordMatchResult>\\n        <SensitiveWordMatchResult>\\n            <Keyword>cbc.com</Keyword>\\n            <Exist>false</Exist>\\n        </SensitiveWordMatchResult>\\n</SensitiveWordMatchResultList>"}]',
      'title' => '批量检查域名是否包含敏感词',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetupDomainAutoRenew' => 
    array (
      'summary' => '您可以调用该接口设置或取消域名自动续费。',
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
          'name' => 'Operation',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'SET' => '设置自动续费',
              'CANCEL' => '取消自动续费',
            ),
            'example' => 'SET',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'S2019270W570xxxx',
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
              'RequestId' => 
              array (
                'description' => '唯一请求识别码',
                'type' => 'string',
                'example' => '8fc97e44-837a-447d-ac61-ea28d2fe8a38',
              ),
              'Result' => 
              array (
                'description' => '是否成功',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8fc97e44-837a-447d-ac61-ea28d2fe8a38\\",\\n  \\"Result\\": true\\n}","type":"json"}]',
      'title' => '设置或取消域名自动续费',
      'description' => '该接口目前仅支持中国站域名。

**请确保在使用该接口前，已充分了解域名产品的收费方式和[价格](https://wanwang.aliyun.com/help/price.html?spm=5176.22941859.J_9989412330.10.68a51838KnzTeD)。**',
    ),
    'SaveRegistrantProfile' => 
    array (
      'summary' => '调用SaveRegistrantProfile接口创建或更新域名信息模板。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DefaultRegistrantProfile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否设置为默认模板。取值：
- **true**：默认模板。
- **false**：非默认模板。

默认值为**false**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        1 => 
        array (
          'name' => 'Country',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '国家代码，例如**CN**代表中国，**US**代表美国。',
            'type' => 'string',
            'required' => false,
            'example' => 'CN',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为127.0.0.1。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        3 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认值为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        4 => 
        array (
          'name' => 'RegistrantProfileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '信息模板编号，信息模板创建成功后由系统自动生成。

> 更新信息模板时必须传入该参数。信息模板创建成功后您可以调用[QueryRegistrantProfiles](~~QueryRegistrantProfiles~~)接口查询信息模板编号。

',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3600000',
          ),
        ),
        5 => 
        array (
          'name' => 'City',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '城市（英文），填写域名持有者所在城市名称。

> 填写城市名称，需包括“市”，例如，持有者在杭州市，则本参数需填写为“hang zhou shi”。',
            'type' => 'string',
            'required' => false,
            'example' => 'hang zhou shi',
          ),
        ),
        6 => 
        array (
          'name' => 'RegistrantOrganization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者名称（英文）。',
            'type' => 'string',
            'required' => false,
            'example' => 'li si',
          ),
        ),
        7 => 
        array (
          'name' => 'RegistrantName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联系人名称（英文）。',
            'type' => 'string',
            'required' => false,
            'example' => 'li si',
          ),
        ),
        8 => 
        array (
          'name' => 'Province',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '省份（英文），填写域名持有者所在省份名称。

> 填写省份名称，无需填写“省”，例如，持有者在浙江省，则本参数填写“zhe jiang”即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'zhe jiang',
          ),
        ),
        9 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '详细地址（英文）。',
            'type' => 'string',
            'required' => false,
            'example' => 'zhe jiang sheng hang zhou shi shi li qu shi li zhen shi li da sha 1001 hao',
          ),
        ),
        10 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电子邮箱。',
            'type' => 'string',
            'required' => false,
            'example' => 'username@example.com',
          ),
        ),
        11 => 
        array (
          'name' => 'PostalCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮政编码。',
            'type' => 'string',
            'required' => false,
            'example' => '310024',
          ),
        ),
        12 => 
        array (
          'name' => 'TelArea',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话国家代码，例如中国的电话国家代码为**86**。 ',
            'type' => 'string',
            'required' => false,
            'example' => '86',
          ),
        ),
        13 => 
        array (
          'name' => 'Telephone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话号码。',
            'type' => 'string',
            'required' => false,
            'example' => '1829756****',
          ),
        ),
        14 => 
        array (
          'name' => 'TelExt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分机号码。',
            'type' => 'string',
            'required' => false,
            'example' => '1234',
          ),
        ),
        15 => 
        array (
          'name' => 'ZhRegistrantOrganization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者名称（中文）。',
            'type' => 'string',
            'required' => false,
            'example' => '李四',
          ),
        ),
        16 => 
        array (
          'name' => 'ZhRegistrantName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联系人名称（中文）。',
            'type' => 'string',
            'required' => false,
            'example' => '李四',
          ),
        ),
        17 => 
        array (
          'name' => 'ZhProvince',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '省份（中文），填写域名持有者所在省份名称。

> 填写省份名称，无需填写“省”，例如，持有者在浙江省，则本参数填写“浙江”即可。',
            'type' => 'string',
            'required' => false,
            'example' => '浙江',
          ),
        ),
        18 => 
        array (
          'name' => 'ZhAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '详细地址（中文）。',
            'type' => 'string',
            'required' => false,
            'example' => '浙江省杭州市示例区示例镇示例大厦1001号',
          ),
        ),
        19 => 
        array (
          'name' => 'ZhCity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '城市（中文），填写域名持有者所在城市名称。

> 填写城市名称，需包括“市”，例如，持有者在杭州市，则本参数需填写为“杭州市”。',
            'type' => 'string',
            'required' => false,
            'example' => '杭州市',
          ),
        ),
        20 => 
        array (
          'name' => 'RegistrantType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者类型。取值：
- **1**：个人。
- **2**：企业。

默认值为**1**。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        21 => 
        array (
          'name' => 'RegistrantProfileType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '信息模板类型。取值：
- **common**：通用模板。
- **cnnic**：cnnic模板。

> cnnic模板仅国际站支持。在阿里云国际站注册的“.cn”、“.中国”等CNNIC注册局下的域名需使用cnnic模板，其他域名使用通用模板。',
            'type' => 'string',
            'required' => false,
            'example' => 'common',
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
              'RegistrantProfileId' => 
              array (
                'description' => '信息模板编号。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3600000',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D09B153B-294D-42F1-BB61-F1C72136DFD3',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RegistrantProfileId\\": 3600000,\\n  \\"RequestId\\": \\"D09B153B-294D-42F1-BB61-F1C72136DFD3\\"\\n}","errorExample":"{\\n  \\"RegistrantProfileId\\": \\"3696573\\",\\n  \\"RequestId\\": \\"ECB708B9-A82E-45D7-A230-58231E532A57\\"\\n}"},{"type":"xml","example":"<SaveRegistrantProfileResponse>\\n    <RegistrantProfileId>3600000</RegistrantProfileId>\\n    <RequestId>D09B153B-294D-42F1-BB61-F1C72136DFD3</RequestId>\\n</SaveRegistrantProfileResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveRegistrantProfileResponse>\\n    <RegistrantProfileId>3600000</RegistrantProfileId>\\n    <RequestId>D09B153B-294D-42F1-BB61-F1C72136DFD3</RequestId>\\n</SaveRegistrantProfileResponse>"}]',
      'title' => '创建或更新域名信息模板',
      'description' => '域名信息模板中包含了域名持有者信息。当您创建或更新信息模板时，域名持有者信息建议根据实际情况都填写并且中英文保持一致。为避免注册局对接审核出错，建议持有者英文信息均使用小写字母填写，具体填写要求可查看下方的参数描述。

',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteRegistrantProfile' => 
    array (
      'summary' => '调用DeleteRegistrantProfile接口删除指定的域名信息模板。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为127.0.0.1。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'RegistrantProfileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的信息模板的编号。您可以调用[QueryRegistrantProfiles](~~67701~~)接口查询信息模板编号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '3600000',
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
                'example' => 'C50E41A0-09F1-4491-8DB8-AF55BD2D0CC8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C50E41A0-09F1-4491-8DB8-AF55BD2D0CC8\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteRegistrantProfileResponse>\\r\\n    <RequestId>C50E41A0-09F1-4491-8DB8-AF55BD2D0CC8</RequestId>\\r\\n</DeleteRegistrantProfileResponse>","errorExample":""}]',
      'title' => '删除指定的域名信息模板',
      'description' => '> 接口调用成功系统会立即删除对应的信息模板。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteContactTemplates' => 
    array (
      'summary' => '批量删除域名联系人模板。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'RegistrantProfileIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的信息模板的编号，传入多个值时使用逗号（,）分隔。

信息模板创建成功后由系统自动生成，您可以调用[QueryRegistrantProfiles](~~67701~~)接口查询信息模板编号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123,45,67',
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
                'example' => '4D73432C-7600-4779-ACBB-C3B5CA145D32',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4D73432C-7600-4779-ACBB-C3B5CA145D32\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteContactTemplatesResponse>\\r\\n<RequestId>4D73432C-7600-4779-ACBB-C3B5CA145D32</RequestId>\\r\\n</DeleteContactTemplatesResponse>","errorExample":""}]',
      'title' => '删除联系人模板',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RegistrantProfileRealNameVerification' => 
    array (
      'summary' => '调用RegistrantProfileRealNameVerification接口提交信息模板实名认证。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为127.0.0.1。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认值为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'RegistrantProfileID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待实名认证的信息模板的编号。信息模板创建成功后由系统自动生成，您可以调用[QueryRegistrantProfiles](~~67701~~)接口查询信息模板编号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1234567',
          ),
        ),
        3 => 
        array (
          'name' => 'IdentityCredential',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '上传采用Base64编码的实名认证资料图片。图片要求如下：
- 图片格式为**JPG**或**BMP**。
- 原图片大小为**55KB~1MB**。',
            'type' => 'string',
            'required' => true,
            'example' => 'dGVzdA==',
          ),
        ),
        4 => 
        array (
          'name' => 'IdentityCredentialNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '填写实名认证证件号码。

例如身份证号码、营业执照号码等，证件号码需要与实名认证证件上的号码完全一致。企业类的证件需填写证件上的**18位**统一社会信用代码。',
            'type' => 'string',
            'required' => true,
            'example' => '43012512345678****',
          ),
        ),
        5 => 
        array (
          'name' => 'IdentityCredentialType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实名认证证件类型，选择您用于实名认证的证件类型。取值：
- **SFZ**：身份证。
- **HZ**：护照。
- **YYZZ**：营业执照。
- **ORG**：组织机构代码证。
- **XYDM**：统一社会信用代码证书。
- **TXZ**：港澳居民来往内地通行证。

> 更多证件类型的取值请参见[支持实名认证的证件类型](~~72209~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'SFZ',
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
                'example' => '51D584A2-0CCD-4336-AD7D-1AD4C67B5545',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"51D584A2-0CCD-4336-AD7D-1AD4C67B5545\\"\\n}","errorExample":"{\\n  \\"RequestId\\": \\"51D584A2-0CCD-4336-AD7D-1AD4C67B5545\\"\\n}"},{"type":"xml","example":"<RegistrantProfileRealNameVerificationResponse>\\n    <RequestId>51D584A2-0CCD-4336-AD7D-1AD4C67B5545</RequestId>\\n</RegistrantProfileRealNameVerificationResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<RegistrantProfileRealNameVerificationResponse>\\n    <RequestId>51D584A2-0CCD-4336-AD7D-1AD4C67B5545</RequestId>\\n</RegistrantProfileRealNameVerificationResponse>"}]',
      'title' => '提交信息模板实名认证',
      'description' => '- 实名认证材料审核需要3~5个工作日，待审核机构完成审核后，您可以调用[QueryRegistrantProfiles](~~67701~~)接口查询实名认证审核结果。
- 如果实名认证审核失败，请参见[实名认证失败原因及解决方案](~~35885~~)进行排查处理。

> 该接口必须采用POST方式调用，否则会调用失败。使用SDK调用时，请设置request对象的**method**参数为**POST**。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SetDefaultRegistrantProfile' => 
    array (
      'summary' => '调用SetDefaultRegistrantProfile接口设置域名联系人默认模板。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，默认设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'RegistrantProfileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待设置的信息模板的编号。

信息模板创建成功后由系统自动生成，您可以调用[QueryRegistrantProfiles](~~67701~~)接口查询信息模板编号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1234567',
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
                'example' => '4D73432C-7600-4779-ACBB-C3B5CA145D32',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4D73432C-7600-4779-ACBB-C3B5CA145D32\\"\\n}","errorExample":""},{"type":"xml","example":"<SetDefaultRegistrantProfileResponse>\\r\\n<RequestId>4D73432C-7600-4779-ACBB-C3B5CA145D32</RequestId>\\r\\n</SetDefaultRegistrantProfileResponse>","errorExample":""}]',
      'title' => '设置默认联系人信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDomainAdminDivision' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '4EA05A10-D4BC-47EA-AD9E-370A46BB4FB9',
              ),
              'AdminDivisions' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AdminDivision' => 
                  array (
                    'description' => '一级行政区划。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DivisionName' => 
                        array (
                          'description' => '行政区划名称。',
                          'type' => 'string',
                          'example' => '河北',
                        ),
                        'Children' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Children' => 
                            array (
                              'description' => '下级行政区划。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ChildDivisionName' => 
                                  array (
                                    'description' => '下级行政区划名称。',
                                    'type' => 'string',
                                    'example' => '石家庄',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4EA05A10-D4BC-47EA-AD9E-370A46BB4FB9\\",\\n  \\"AdminDivisions\\": {\\n    \\"AdminDivision\\": [\\n      {\\n        \\"DivisionName\\": \\"河北\\",\\n        \\"Children\\": {\\n          \\"Children\\": [\\n            {\\n              \\"ChildDivisionName\\": \\"石家庄\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n\\"requestId\\": \\"0F1B3547-BE50-4206-8F78-9540FFB85BC1\\",\\n\\"adminDivisions\\"[]\\n}"},{"type":"xml","example":"<QueryDomainAdminDivisionResponse>\\n  <RequestId>CD1D8BF9-6FA1-4840-A9F0-29B7E963152F</RequestId>\\n  <AdminDivisions>\\n    <AdminDivision>\\n      <DivisionName>北京</DivisionName>\\n      <Children>\\n        <Children>\\n          <ChildDivisionName>市辖区</ChildDivisionName>\\n        </Children>\\n      </Children>\\n    </AdminDivision>\\n    <AdminDivision>\\n      <DivisionName>天津</DivisionName>\\n      <Children>\\n        <Children>\\n          <ChildDivisionName>市辖区</ChildDivisionName>\\n        </Children>\\n      </Children>\\n    </AdminDivision>\\n    <AdminDivision>\\n      <DivisionName>河北</DivisionName>\\n      <Children>\\n        <Children>\\n          <ChildDivisionName>石家庄市</ChildDivisionName>\\n        </Children>\\n        <Children>\\n          <ChildDivisionName>唐山市</ChildDivisionName>\\n        </Children>\\n        <Children>\\n          <ChildDivisionName>秦皇岛市</ChildDivisionName>\\n        </Children>\\n        <Children>\\n          <ChildDivisionName>邯郸市</ChildDivisionName>\\n        </Children>\\n        <Children>\\n          <ChildDivisionName>邢台市</ChildDivisionName>\\n        </Children>\\n        <Children>\\n          <ChildDivisionName>保定市</ChildDivisionName>\\n        </Children>\\n        <Children>\\n          <ChildDivisionName>张家口市</ChildDivisionName>\\n        </Children>\\n        <Children>\\n          <ChildDivisionName>承德市</ChildDivisionName>\\n        </Children>\\n        <Children>\\n          <ChildDivisionName>沧州市</ChildDivisionName>\\n        </Children>\\n        <Children>\\n          <ChildDivisionName>廊坊市</ChildDivisionName>\\n        </Children>\\n        <Children>\\n          <ChildDivisionName>衡水市</ChildDivisionName>\\n        </Children>\\n      </Children>\\n    </AdminDivision>\\n  </AdminDivisions>\\n</QueryDomainAdminDivisionResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryDomainAdminDivisionResponse>\\n<adminDivisions></adminDivisions>\\n<RequestId>0F1B3547-BE50-4206-8F78-9540FFB85BC1</RequestId>\\n</SQueryDomainAdminDivisionResponse>"}]',
      'title' => '查询中国行政区划',
      'summary' => '调用QueryDomainAdminDivision查询中国行政区划。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryFailReasonForRegistrantProfileRealNameVerification' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为127.0.0.1。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'RegistrantProfileID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实名认证失败的信息模板编号。您可以调用[QueryRegistrantProfiles](~~67701~~)接口查询信息模板编号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1234567',
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
                'example' => '548C407F-AEA2-4B5D-90DF-EC11EBB1D76F',
              ),
              'Data' => 
              array (
                'description' => '实名认证审核失败原因列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Date' => 
                    array (
                      'description' => '审核日期。',
                      'type' => 'string',
                      'example' => '2017-03-17 11:08:02',
                    ),
                    'FailReason' => 
                    array (
                      'description' => '实名认证审核失败的原因。

实名认证审核失败后的处理方法，请参见[实名认证失败原因及解决方案](~~35885~~)。',
                      'type' => 'string',
                      'example' => '证件电子信息核验不合格',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"548C407F-AEA2-4B5D-90DF-EC11EBB1D76F\\",\\n  \\"Data\\": [\\n    {\\n      \\"Date\\": \\"2017-03-17 11:08:02\\",\\n      \\"FailReason\\": \\"证件电子信息核验不合格\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"Data\\": {\\n    \\"FailRecord\\": [\\n      {\\n        \\"FailReason\\": \\"审核失败，所有者（中文）字段必须包含中文字符。\\",\\n        \\"Date\\": \\"2017-03-17 11:08:02\\"\\n      },\\n      {\\n        \\"FailReason\\": \\"请上传55K-1M的jpg或者bmp图片\\",\\n        \\"Date\\": \\"2017-03-16 20:55:02\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"1F1BA893-AD33-4248-8CB8-1657E3733052\\"\\n}"},{"type":"xml","example":"<QueryFailReasonForRegistrantProfileRealNameVerificationResponse>\\n<RequestId>548C407F-AEA2-4B5D-90DF-EC11EBB1D76F</RequestId>\\n<Data>\\n    <FailReason>证件电子信息核验不合格</FailReason>\\n    <Date>2020-06-23 09:52:31</Date>\\n</Data>\\n</QueryFailReasonForRegistrantProfileRealNameVerificationResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryFailReasonForRegistrantProfileRealNameVerificationResponse>\\n    <Data>\\n        <FailRecord>\\n            <FailReason>审核失败，所有者（中文）字段必须包含中文字符。</FailReason>\\n            <Date>2017-03-17 11:08:02</Date>\\n        </FailRecord>\\n        <FailRecord>\\n            <FailReason>请上传55K-1M的jpg或者bmp图片</FailReason>\\n            <Date>2017-03-16 20:55:02</Date>\\n        </FailRecord>       \\n    </Data>\\n    <RequestId>1F1BA893-AD33-4248-8CB8-1657E3733052</RequestId>\\n</QueryFailReasonForRegistrantProfileRealNameVerificationResponse>"}]',
      'title' => '查询信息模板实名认证审核失败的原因',
      'summary' => '调用QueryFailReasonForRegistrantProfileRealNameVerification接口查询信息模板实名认证审核失败的原因。',
      'requestParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'VerifyContactField' => 
    array (
      'summary' => '部分参数是否必传将根据注册局要求而定。',
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
          'name' => 'Province',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '省份（英文）。',
            'type' => 'string',
            'required' => false,
            'example' => 'Bei jing',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'City',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '城市（英文）。',
            'type' => 'string',
            'required' => false,
            'example' => 'Bei jing',
          ),
        ),
        4 => 
        array (
          'name' => 'RegistrantOrganization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者名称（英文）。',
            'type' => 'string',
            'required' => false,
            'example' => 'wang xian sheng',
          ),
        ),
        5 => 
        array (
          'name' => 'Country',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '国家代码，例如**CN**、**US**。',
            'type' => 'string',
            'required' => false,
            'example' => 'CN',
          ),
        ),
        6 => 
        array (
          'name' => 'RegistrantName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联系人名称（英文）。',
            'type' => 'string',
            'required' => false,
            'example' => 'wang xian sheng',
          ),
        ),
        7 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '详细地址（英文）。',
            'type' => 'string',
            'required' => false,
            'example' => 'Rd. xitucheng',
          ),
        ),
        8 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电子邮箱。',
            'type' => 'string',
            'required' => false,
            'example' => 'username@example.com',
          ),
        ),
        9 => 
        array (
          'name' => 'PostalCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮政编码。',
            'type' => 'string',
            'required' => false,
            'example' => '100000',
          ),
        ),
        10 => 
        array (
          'name' => 'TelArea',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话国家代码，例如中国的电话国家代码为**86**。',
            'type' => 'string',
            'required' => false,
            'example' => '86',
          ),
        ),
        11 => 
        array (
          'name' => 'Telephone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话。',
            'type' => 'string',
            'required' => false,
            'example' => '1390000****',
          ),
        ),
        12 => 
        array (
          'name' => 'TelExt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分机号码。',
            'type' => 'string',
            'required' => false,
            'example' => '01',
          ),
        ),
        13 => 
        array (
          'name' => 'ZhRegistrantOrganization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者名称（中文）。

> 该参数仅适用于中国站。',
            'type' => 'string',
            'required' => false,
            'example' => '王先生',
          ),
        ),
        14 => 
        array (
          'name' => 'ZhRegistrantName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联系人名称（中文）。

> 该参数仅适用于中国站。',
            'type' => 'string',
            'required' => false,
            'example' => '王先生',
          ),
        ),
        15 => 
        array (
          'name' => 'ZhProvince',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '省份（中文）。

> 该参数仅适用于中国站。',
            'type' => 'string',
            'required' => false,
            'example' => '北京',
          ),
        ),
        16 => 
        array (
          'name' => 'ZhAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '详细地址（中文）。

> 该参数仅适用于中国站。',
            'type' => 'string',
            'required' => false,
            'example' => '西土城路',
          ),
        ),
        17 => 
        array (
          'name' => 'ZhCity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '城市（中文）。

> 该参数仅适用于中国站。',
            'type' => 'string',
            'required' => false,
            'example' => '北京市',
          ),
        ),
        18 => 
        array (
          'name' => 'RegistrantType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者类型。取值：
- **1**：个人。
- **2**：企业。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        19 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'example.com',
            'default' => '',
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
                'example' => 'ABAC3BAC-FCFA-4DAE-B47C-FA4105CB07C6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ABAC3BAC-FCFA-4DAE-B47C-FA4105CB07C6\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"ABAC3BAC-FCFA-4DAE-B47C-FA4105CB07C6\\"\\n}"},{"type":"xml","example":"<VerifyContactFieldResponse>\\n  <RequestId>ABAC3BAC-FCFA-4DAE-B47C-FA4105CB07C6</RequestId>\\n</VerifyContactFieldResponse>","errorExample":"<VerifyContactFieldResponse>\\n  <RequestId>30EEA1A7-3C86-471B-BFD8-5AF13CBE0CD3</RequestId>\\n</VerifyContactFieldResponse>"}]',
      'title' => '校验域名联系人信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryRegistrantProfiles' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'RegistrantOrganization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者名称（英文）。',
            'type' => 'string',
            'required' => false,
            'example' => 'li si',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为127.0.0.1。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        3 => 
        array (
          'name' => 'RegistrantProfileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的信息模板的编号，信息模板创建成功后由系统自动生成。

',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1234567',
          ),
        ),
        4 => 
        array (
          'name' => 'DefaultRegistrantProfile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否为默认模板。取值：
- **true**：默认模板。
- **false**：非默认模板。

默认值为**false**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页的页码，默认值为**0**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数。默认值为**0**，最大值为**5000**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '500',
            'default' => '500',
          ),
        ),
        7 => 
        array (
          'name' => 'ZhRegistrantOrganization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者名称（中文）。',
            'type' => 'string',
            'required' => false,
            'example' => '李四',
          ),
        ),
        8 => 
        array (
          'name' => 'RegistrantType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者类型。取值：
- **1**：个人。
- **2**：企业。

默认值为**1**。
                           ',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'RealNameStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实名认证状态。取值：
- **FAILED**：实名认证失败。
- **SUCCEED**：实名认证成功。
- **NONAUDIT**：未实名认证。
- **AUDITING**：审核中。
                           ',
            'type' => 'string',
            'required' => false,
            'example' => 'SUCCEED',
            'enum' => 
            array (
              0 => 'FAILED',
              1 => 'SUCCEED',
              2 => 'NONAUDIT',
              3 => 'AUDITING',
            ),
          ),
        ),
        10 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电子邮箱。',
            'type' => 'string',
            'required' => false,
            'example' => 'username@example.com',
          ),
        ),
        11 => 
        array (
          'name' => 'RegistrantProfileType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '信息模板类型。取值：
- **common**：通用模板。
- **cnnic**：cnnic模板。

> cnnic模板仅国际站支持，在阿里云国际站注册的“.cn”、“.中国”等CNNIC注册局下的域名需使用cnnic模板，其他域名使用通用模板。',
            'type' => 'string',
            'required' => false,
            'example' => 'common',
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
              'NextPage' => 
              array (
                'description' => '是否有下一页。取值：
- **true**：有。
- **false**：没有。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '94053D79-7455-4F71-BF06-20EB2DEDE6BD',
              ),
              'TotalItemNum' => 
              array (
                'description' => '总记录数。

> 总记录数是指查询出来的信息模板的数量。当有多个信息模板时，一个信息模板显示完了会接着显示第二个信息模板。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '9',
              ),
              'PrePage' => 
              array (
                'description' => '是否有上一页。取值：
- **true**：有。
- **false**：没有。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'CurrentPageNum' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPageNum' => 
              array (
                'description' => '总页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数。默认值为**0**，最大值为**5000**。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RegistrantProfiles' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'RegistrantProfile' => 
                  array (
                    'description' => '域名信息模板列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TelExt' => 
                        array (
                          'description' => '分机号码。',
                          'type' => 'string',
                          'example' => '1234',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '信息模板更新时间。',
                          'type' => 'string',
                          'example' => '2019-03-15 15:32:45',
                        ),
                        'ZhProvince' => 
                        array (
                          'description' => '省份（中文）。',
                          'type' => 'string',
                          'example' => '浙江',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '信息模板创建时间。',
                          'type' => 'string',
                          'example' => '2019-02-18 10:46:47',
                        ),
                        'Telephone' => 
                        array (
                          'description' => '电话号码。',
                          'type' => 'string',
                          'example' => '1829756****',
                        ),
                        'RegistrantOrganization' => 
                        array (
                          'description' => '域名持有者名称（英文）。',
                          'type' => 'string',
                          'example' => 'li si',
                        ),
                        'City' => 
                        array (
                          'description' => '城市（英文）。',
                          'type' => 'string',
                          'example' => 'hang zhou shi',
                        ),
                        'ZhCity' => 
                        array (
                          'description' => '城市（中文）。',
                          'type' => 'string',
                          'example' => '杭州市',
                        ),
                        'TelArea' => 
                        array (
                          'description' => '电话国家代码，例如中国的电话国家代码为**86**。 ',
                          'type' => 'string',
                          'example' => '86',
                        ),
                        'Address' => 
                        array (
                          'description' => '详细地址（英文）。',
                          'type' => 'string',
                          'example' => 'zhe jiang sheng hang zhou shi shi li qu shi li zhen shi li da sha 1001 hao',
                        ),
                        'RealNameStatus' => 
                        array (
                          'description' => '实名认证状态。取值：
- **FAILED**：实名认证失败。
- **SUCCEED**：实名认证成功。
- **NONAUDIT**：未实名认证。
- **AUDITING**：审核中。
',
                          'type' => 'string',
                          'example' => 'SUCCEED',
                        ),
                        'PostalCode' => 
                        array (
                          'description' => '邮政编码。',
                          'type' => 'string',
                          'example' => '310024',
                        ),
                        'RegistrantProfileType' => 
                        array (
                          'description' => '信息模板类型。取值：
- **common**：通用模板。
- **cnnic**：cnnic模板。

> cnnic模板仅国际站支持，在阿里云国际站注册的“.cn”、“.中国”等CNNIC注册局下的域名需使用cnnic模板，其他域名使用通用模板。',
                          'type' => 'string',
                          'example' => 'common',
                        ),
                        'RegistrantProfileId' => 
                        array (
                          'description' => '查询到的信息模板的编号。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1000001',
                        ),
                        'ZhRegistrantOrganization' => 
                        array (
                          'description' => '域名持有者名称（中文）。',
                          'type' => 'string',
                          'example' => '李四',
                        ),
                        'DefaultRegistrantProfile' => 
                        array (
                          'description' => '是否为默认模板。取值：
- **true**：默认模板。
- **false**：非默认模板。

默认值为**false**。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Email' => 
                        array (
                          'description' => '电子邮箱。',
                          'type' => 'string',
                          'example' => '82106****@qq.com',
                        ),
                        'ZhRegistrantName' => 
                        array (
                          'description' => '联系人名称（中文）。',
                          'type' => 'string',
                          'example' => '李四',
                        ),
                        'RegistrantType' => 
                        array (
                          'description' => '域名持有者类型。取值：
- **1**：个人。
- **2**：企业。

默认值为**1**。 ',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'Country' => 
                        array (
                          'description' => '国家代码，例如**CN**代表中国，**US**代表美国。',
                          'type' => 'string',
                          'example' => 'CN',
                        ),
                        'RegistrantName' => 
                        array (
                          'description' => '联系人名称（英文）。',
                          'type' => 'string',
                          'example' => 'li si',
                        ),
                        'EmailVerificationStatus' => 
                        array (
                          'description' => '邮箱验证状态。取值：
- **0**：未验证。
- **1**：已验证。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'ZhAddress' => 
                        array (
                          'description' => '详细地址（中文）。',
                          'type' => 'string',
                          'example' => '浙江省杭州市示例区示例镇示例大厦1001号',
                        ),
                        'Province' => 
                        array (
                          'description' => '省份（英文）。',
                          'type' => 'string',
                          'example' => 'zhe jiang',
                        ),
                        'CredentialNo' => 
                        array (
                          'description' => '证件号',
                          'type' => 'string',
                          'example' => '4****************1',
                        ),
                        'CredentialType' => 
                        array (
                          'description' => '证件类型',
                          'type' => 'string',
                          'example' => 'YYZZ',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextPage\\": true,\\n  \\"RequestId\\": \\"94053D79-7455-4F71-BF06-20EB2DEDE6BD\\",\\n  \\"TotalItemNum\\": 9,\\n  \\"PrePage\\": false,\\n  \\"CurrentPageNum\\": 1,\\n  \\"TotalPageNum\\": 1,\\n  \\"PageSize\\": 2,\\n  \\"RegistrantProfiles\\": {\\n    \\"RegistrantProfile\\": [\\n      {\\n        \\"TelExt\\": \\"1234\\",\\n        \\"UpdateTime\\": \\"2019-03-15 15:32:45\\",\\n        \\"ZhProvince\\": \\"浙江\\",\\n        \\"CreateTime\\": \\"2019-02-18 10:46:47\\",\\n        \\"Telephone\\": \\"1829756****\\",\\n        \\"RegistrantOrganization\\": \\"li si\\",\\n        \\"City\\": \\"hang zhou shi\\",\\n        \\"ZhCity\\": \\"杭州市\\",\\n        \\"TelArea\\": \\"86\\",\\n        \\"Address\\": \\"zhe jiang sheng hang zhou shi shi li qu shi li zhen shi li da sha 1001 hao\\",\\n        \\"RealNameStatus\\": \\"SUCCEED\\",\\n        \\"PostalCode\\": \\"310024\\",\\n        \\"RegistrantProfileType\\": \\"common\\",\\n        \\"RegistrantProfileId\\": 1000001,\\n        \\"ZhRegistrantOrganization\\": \\"李四\\",\\n        \\"DefaultRegistrantProfile\\": false,\\n        \\"Email\\": \\"82106****@qq.com\\",\\n        \\"ZhRegistrantName\\": \\"李四\\",\\n        \\"RegistrantType\\": \\"1\\",\\n        \\"Country\\": \\"CN\\",\\n        \\"RegistrantName\\": \\"li si\\",\\n        \\"EmailVerificationStatus\\": 1,\\n        \\"ZhAddress\\": \\"浙江省杭州市示例区示例镇示例大厦1001号\\",\\n        \\"Province\\": \\"zhe jiang\\",\\n        \\"CredentialNo\\": \\"4****************1\\",\\n        \\"CredentialType\\": \\"YYZZ\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"CurrentPageNum\\": 1,\\n  \\"NextPage\\": true,\\n  \\"PageSize\\": 2,\\n  \\"PrePage\\": false,\\n  \\"RegistrantProfiles\\": {\\n    \\"RegistrantProfile\\": [\\n      {\\n        \\"Address\\": \\"aqqqq\\",\\n        \\"City\\": \\"us\\",\\n        \\"Country\\": \\"US\\",\\n        \\"CreateTime\\": \\"Dec 25,2017 03:20:30\\",\\n        \\"DefaultRegistrantProfile\\": true,\\n        \\"Email\\": \\"a@xxx.com\\",\\n        \\"EmailVerificationStatus\\": 0,\\n        \\"PostalCode\\": \\"010101\\",\\n        \\"Province\\": \\"qa\\",\\n        \\"RegistrantName\\": \\"x\\",\\n        \\"RegistrantOrganization\\": \\"xxx\\",\\n        \\"RegistrantProfileId\\": 5170612,\\n        \\"TelArea\\": \\"010\\",\\n        \\"Telephone\\": \\"11119999\\",\\n        \\"UpdateTime\\": \\"Dec 25,2017 03:21:59\\"\\n      },\\n      {\\n        \\"Address\\": \\"xx District\\",\\n        \\"City\\": \\"Beijing\\",\\n        \\"Country\\": \\"MO\\",\\n        \\"CreateTime\\": \\"Nov 22,2017 09:20:40\\",\\n        \\"DefaultRegistrantProfile\\": false,\\n        \\"Email\\": \\"abctest@xxx.com\\",\\n        \\"EmailVerificationStatus\\": 0,\\n        \\"PostalCode\\": \\"100086\\",\\n        \\"Province\\": \\"Beijing\\",\\n        \\"RegistrantName\\": \\"lk\\",\\n        \\"RegistrantOrganization\\": \\"lk\\",\\n        \\"RegistrantProfileId\\": 5049715,\\n        \\"TelArea\\": \\"853\\",\\n        \\"Telephone\\": \\"15600000000\\",\\n        \\"UpdateTime\\": \\"Nov 22,2017 09:20:40\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"8843D641-7520-4399-9FCC-BFB90C068E6F\\",\\n  \\"TotalItemNum\\": 11,\\n  \\"TotalPageNum\\": 6\\n}"},{"type":"xml","example":"<QueryRegistrantProfilesResponse>\\r\\n  <TotalItemNum>9</TotalItemNum>\\r\\n  <PageSize>500</PageSize>\\r\\n  <CurrentPageNum>1</CurrentPageNum>\\r\\n  <RequestId>94053D79-7455-4F71-BF06-20EB2DEDE6BD</RequestId>\\r\\n  <PrePage>false</PrePage>\\r\\n  <RegistrantProfiles>\\r\\n    <RegistrantProfile>\\r\\n      <ZhCity>杭州市</ZhCity>\\r\\n      <ZhRegistrantOrganization>李四</ZhRegistrantOrganization>\\r\\n      <Telephone>1829756****</Telephone>\\r\\n      <ZhProvince>浙江</ZhProvince>\\r\\n      <DefaultRegistrantProfile>false</DefaultRegistrantProfile>\\r\\n      <EmailVerificationStatus>1</EmailVerificationStatus>\\r\\n      <UpdateTime>2019-03-15 15:32:45</UpdateTime>\\r\\n      <RealNameStatus>SUCCEED</RealNameStatus>\\r\\n      <Country>CN</Country>\\r\\n      <Province>zhe jiang</Province>\\r\\n      <ZhRegistrantName>李四</ZhRegistrantName>\\r\\n      <City>hang zhou shi</City>\\r\\n      <TelArea>86</TelArea>\\r\\n      <RegistrantProfileId>1000001</RegistrantProfileId>\\r\\n      <PostalCode>310024</PostalCode>\\r\\n      <RegistrantType>1</RegistrantType>\\r\\n      <Email>username@example.com</Email>\\r\\n      <CreateTime>2019-02-18 10:46:47</CreateTime>\\r\\n      <Address>zhe jiang sheng hang zhou shi shi li qu shi li zhen shi li da sha 1001 hao</Address>\\r\\n      <RegistrantName>li si</RegistrantName>\\r\\n      <RegistrantOrganization>li si</RegistrantOrganization>\\r\\n      <RegistrantProfileType>common</RegistrantProfileType>\\r\\n      <ZhAddress>浙江省杭州市示例区示例镇示例大厦1001号</ZhAddress>\\r\\n    </RegistrantProfile>\\r\\n  </RegistrantProfiles>\\r\\n  <TotalPageNum>1</TotalPageNum>\\r\\n  <NextPage>false</NextPage>\\r\\n</QueryRegistrantProfilesResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryRegistrantProfilesResponse>\\n    <TotalItemNum>11</TotalItemNum>\\n    <PageSize>2</PageSize>\\n    <CurrentPageNum>1</CurrentPageNum>\\n    <RequestId>1200F9CE-0000-4C5F-86C2-F8CF3828670D</RequestId>\\n    <PrePage>false</PrePage>\\n    <RegistrantProfiles>\\n        <RegistrantProfile>\\n            <Telephone>11119999</Telephone>\\n            <DefaultRegistrantProfile>true</DefaultRegistrantProfile>\\n            <EmailVerificationStatus>0</EmailVerificationStatus>\\n            <UpdateTime>Dec 25,2017 03:21:59</UpdateTime>\\n            <Country>US</Country>\\n            <Province>qa</Province>\\n            <TelArea>010</TelArea>\\n            <City>us</City>\\n            <RegistrantProfileId>5170612</RegistrantProfileId>\\n            <PostalCode>010101</PostalCode>\\n            <Email>xxx@xxx.com</Email>\\n            <CreateTime>Dec 25,2017 03:20:30</CreateTime>\\n            <Address>aqqqq</Address>\\n            <RegistrantName>pop</RegistrantName>\\n            <RegistrantOrganization>popus-x</RegistrantOrganization>\\n        </RegistrantProfile>\\n        <RegistrantProfile>\\n            <Telephone>15600000000</Telephone>\\n            <DefaultRegistrantProfile>false</DefaultRegistrantProfile>\\n            <EmailVerificationStatus>0</EmailVerificationStatus>\\n            <UpdateTime>Nov 22,2017 09:20:40</UpdateTime>\\n            <Country>MO</Country>\\n            <Province>Beijing</Province>\\n            <TelArea>853</TelArea>\\n            <City>Beijing</City>\\n            <RegistrantProfileId>5049715</RegistrantProfileId>\\n            <PostalCode>100086</PostalCode>\\n            <Email>abctest@xx.com</Email>\\n            <CreateTime>Nov 22,2017 09:20:40</CreateTime>\\n            <Address>Chaoyang District</Address>\\n            <RegistrantName>lk</RegistrantName>\\n            <RegistrantOrganization>lk</RegistrantOrganization>\\n        </RegistrantProfile>\\n    </RegistrantProfiles>\\n    <TotalPageNum>6</TotalPageNum>\\n    <NextPage>true</NextPage>\\n</QueryRegistrantProfilesResponse>"}]',
      'title' => '查询当前账号下的域名信息模板',
      'summary' => '调用QueryRegistrantProfiles接口查询当前账号下的域名信息模板。',
      'description' => '您可以选择传入非必选参数，帮助您更精确的查找信息模板。例如：
- 您已经知道信息模板的编号，您可以传入信息模板编号，查询详细的模板信息。
- 您不知道信息模板的编号，您可以传入域名持有者名称等参数，查询详细的模板信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryRegistrantProfileRealNameVerificationInfo' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为127.0.0.1。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'RegistrantProfileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的信息模板的编号。

信息模板创建成功后由系统自动生成，您可以调用[QueryRegistrantProfiles](~~67701~~)接口查询信息模板编号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1234567',
          ),
        ),
        3 => 
        array (
          'name' => 'FetchImage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否获取实名认证图片信息。取值：
- **true**：获取。
- **false**：不获取。

默认值为**false**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
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
              'IdentityCredentialType' => 
              array (
                'description' => '实名认证证件类型。取值：
- **SFZ**：身份证。
- **HZ**：护照。
- **YYZZ**：营业执照。
- **ORG**：组织机构代码证。
- **XYDM**：统一社会信用代码证书。
- **TXZ**：港澳居民来往内地通行证。

> 更多证件类型的取值请参见[支持实名认证的证件类型](~~72209~~)。',
                'type' => 'string',
                'example' => 'SFZ',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4D73432C-7600-4779-ACBB-C3B5CA145D32',
              ),
              'ModificationDate' => 
              array (
                'description' => '实名认证资料更新时间。',
                'type' => 'string',
                'example' => '2017-05-22 19:04:49',
              ),
              'IdentityCredential' => 
              array (
                'description' => '采用Base64编码的实名认证资料图片。',
                'type' => 'string',
                'example' => 'dGVzdA==',
              ),
              'SubmissionDate' => 
              array (
                'description' => '实名认证资料提交时间。',
                'type' => 'string',
                'example' => '2017-05-22 19:04:49',
              ),
              'IdentityCredentialNo' => 
              array (
                'description' => '实名认证证件号码。',
                'type' => 'string',
                'example' => '4111111111111110**',
              ),
              'RegistrantProfileId' => 
              array (
                'description' => '查询到的信息模板的编号。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1234567',
              ),
              'IdentityCredentialUrl' => 
              array (
                'description' => '实名认证图片下载地址。',
                'type' => 'string',
                'example' => 'http://test.oss-cn-hangzhou.aliyuncs.com/20170522/1219541161213057_070445190.jpg',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"IdentityCredential\\": \\"dGVzdA==\\",\\n  \\"RequestId\\": \\"4D73432C-7600-4779-ACBB-C3B5CA145D32\\",\\n  \\"RegistrantProfileId\\": 1234567,\\n  \\"IdentityCredentialNo\\": \\"4111111111111110**\\",\\n  \\"SubmissionDate\\": \\"2017-05-22 19:04:49\\",\\n  \\"IdentityCredentialUrl\\": \\"http://test.oss-cn-hangzhou.aliyuncs.com/20170522/1219541161213057_070445190.jpg\\",\\n  \\"ModificationDate\\": \\"2017-05-22 19:04:49\\",\\n  \\"IdentityCredentialType\\": \\"SFZ\\"\\n}","errorExample":"{\\n    \\"IdentityCredentialNo\\":\\"411111111111111\\",\\n    \\"IdentityCredentialType\\":\\"SFZ\\",\\n    \\"ModificationDate\\":\\"2017-05-22 19:04:49\\",\\n    \\"RegistrantProfileId\\":123456,\\n    \\"RequestId\\":\\"4D73432C-7600-4779-ACBB-C3B5CA145D32\\",\\n    \\"SubmissionDate\\":\\"2017-05-22 19:04:49\\"\\n}"},{"type":"xml","example":"<QueryRegistrantProfileRealNameVerificationInfoResponse>\\n\\t<IdentityCredentialNo>4111111111111110**</IdentityCredentialNo>\\n\\t<IdentityCredentialType>SFZ</IdentityCredentialType>\\n\\t<ModificationDate>2017-05-22 19:04:49</ModificationDate>\\n\\t<RegistrantProfileId>1234567</RegistrantProfileId>\\n\\t<RequestId>4D73432C-7600-4779-ACBB-C3B5CA145D32</RequestId>\\n\\t<SubmissionDate>2017-05-22 19:04:49</SubmissionDate>\\n</QueryRegistrantProfileRealNameVerificationInfoResponse>","errorExample":"<QueryRegistrantProfileRealNameVerificationInfoResponse>\\n  <RegistrantProfileId>123456</RegistrantProfileId>\\n  <RequestId>175FE8E4-309A-466B-AA84-DE7E2A19C948</RequestId>\\n  <ModificationDate>2017-05-22 19:04:49</ModificationDate>\\n  <IdentityCredentialType>SFZ</IdentityCredentialType>\\n  <IdentityCredentialNo>1234567890123456</IdentityCredentialNo>\\n  <SubmissionDate>2017-05-22 19:04:49</SubmissionDate>\\n</QueryRegistrantProfileRealNameVerificationInfoResponse>"}]',
      'title' => '查询信息模板实名认证资料',
      'summary' => '调用QueryRegistrantProfileRealNameVerificationInfo接口查询信息模板实名认证资料。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential' => 
    array (
      'summary' => '批量提交域名资料',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'IdentityCredential',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'IdentityCredentialNo',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'IdentityCredentialType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'maxItems' => 1000,
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
                'type' => 'string',
              ),
              'TaskNo' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"{\\n  \\"RequestId\\": \\"51D584A2-0CCD-4336-AD7D-1AD4C67B5545\\"\\n}","example":"{\\n\\t\\"RequestId\\":\\"601A42C5-AED3-4952-BBC0-ACC56E699FB6\\",\\n\\t\\"TaskNo\\":\\"f1382d65-bab3-48ae-b61f-6680cc3595bf\\"\\n}","type":"json"},{"errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse>\\n    <RequestId>51D584A2-0CCD-4336-AD7D-1AD4C67B5545</RequestId>\\n</SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse>","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse>\\n    <RequestId>51D584A2-0CCD-4336-AD7D-1AD4C67B5545</RequestId>\\n</SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialResponse>","type":"xml"}]',
    ),
    'SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID' => 
    array (
      'summary' => '根据模板保存域名的实名认证信息',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'RegistrantProfileId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
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
                'type' => 'string',
              ),
              'TaskNo' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"{    \\n  \\"Success\\":true,        \\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\",\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\"\\n}","example":"{    \\n  \\"Success\\":true,        \\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\",\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\"\\n}","type":"json"},{"errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n    <RequestId>40F46D3D-F4F3-4CCB-AC30-2DD20E32E528</RequestId>\\n</SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse>","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n    <RequestId>40F46D3D-F4F3-4CCB-AC30-2DD20E32E528</RequestId>\\n</SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileIDResponse>","type":"xml"}]',
    ),
    'CancelDomainVerification' => 
    array (
      'summary' => '调用CancelDomainVerification取消域名实名认证审核。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可以设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1	',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认值为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名实例编号，通过查询域名列表[QueryDomainList](~~67712~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'S2019270W570xxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'ActionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作类型。取值：
- **DOMAINAUDIT**：域名审核。
- **AUDITCONTACT**：审核联系人。',
            'type' => 'string',
            'required' => true,
            'example' => 'AUDITCONTACT',
            'enum' => 
            array (
              0 => 'DOMAINAUDIT',
              1 => 'AUDITCONTACT',
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
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '0AC0AF67-D303-4EB9-B20E-B4D4B2C3F97B',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0AC0AF67-D303-4EB9-B20E-B4D4B2C3F97B\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelDomainVerificationResponse>\\r\\n<RequestId>0AC0AF67-D303-4EB9-B20E-B4D4B2C3F97B</RequestId>\\r\\n</CancelDomainVerificationResponse>","errorExample":""}]',
      'title' => '取消域名实名认证审核',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDomainRealNameVerificationInfo' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'aliyundoc.com',
          ),
        ),
        3 => 
        array (
          'name' => 'FetchImage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否获取实名认证图片。取值：
- **true**：获取。
- **false**：不获取。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
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
              'IdentityCredentialType' => 
              array (
                'description' => '实名认证证件类型。取值：
- **SFZ**：身份证。
- **HZ**：护照。
- **YYZZ**：营业执照。
- **ORG**：组织机构代码证。
- **XYDM**：统一社会信用代码证书。
- **TXZ**：港澳居民来往内地通行证。

如果您使用的证件不在上述范围中，请参见[支持实名认证的证件类型](~~72209~~)章节，查看相应证件类型的取值。
> 请务必选择与您传入的证件一致的证件类型。',
                'type' => 'string',
                'example' => 'SFZ',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '4DF9D693-0D5B-4EB7-8922-7ECA6BD59314',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'S2019270W570****',
              ),
              'DomainName' => 
              array (
                'description' => '域名。',
                'type' => 'string',
                'example' => 'aliyundoc.com',
              ),
              'IdentityCredential' => 
              array (
                'description' => '使用Base64编码的实名认证资料图片。图片要求如下：
- 图片为**jpg**或**bmp**格式。
- 原图片大小为**55K~1M**。',
                'type' => 'string',
                'example' => 'dGVzdA==',
              ),
              'SubmissionDate' => 
              array (
                'description' => '修改时间。',
                'type' => 'string',
                'example' => '2018-03-28 00:41:42',
              ),
              'IdentityCredentialNo' => 
              array (
                'description' => '实名认证资料证件号码，如：身份证号码、统一社会信用代码。',
                'type' => 'string',
                'example' => '5****************9',
              ),
              'IdentityCredentialUrl' => 
              array (
                'description' => '实名认证图片下载地址。',
                'type' => 'string',
                'example' => 'http://dbu-nap-p.oss-cn-hangzhou.aliyuncs.com/20190219/140692647406xxxx_5d6baea3e7314fd986afdd86e33exxxx.jpg',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"IdentityCredential\\": \\"dGVzdA==\\",\\n  \\"RequestId\\": \\"4DF9D693-0D5B-4EB7-8922-7ECA6BD59314\\",\\n  \\"IdentityCredentialNo\\": \\"5****************9\\",\\n  \\"SubmissionDate\\": \\"2018-03-28 00:41:42\\",\\n  \\"IdentityCredentialUrl\\": \\"http://dbu-nap-p.oss-cn-hangzhou.aliyuncs.com/20190219/140692647406xxxx_5d6baea3e7314fd986afdd86e33exxxx.jpg\\",\\n  \\"InstanceId\\": \\"S2019270W570****\\",\\n  \\"DomainName\\": \\"aliyundoc.com\\",\\n  \\"IdentityCredentialType\\": \\"SFZ\\"\\n}","errorExample":""},{"type":"xml","example":"<IdentityCredentialType>SFZ</IdentityCredentialType>\\n<RequestId>4DF9D693-0D5B-4EB7-8922-7ECA6BD59314</RequestId>\\n<InstanceId>S2019270W570****</InstanceId>\\n<DomainName>aliyundoc.com</DomainName>\\n<IdentityCredential>dGVzdA==</IdentityCredential>\\n<SubmissionDate>2018-03-28 00:41:42</SubmissionDate>\\n<IdentityCredentialNo>5****************9</IdentityCredentialNo>\\n<IdentityCredentialUrl>http://dbu-nap-p.oss-cn-hangzhou.aliyuncs.com/20190219/140692647406xxxx_5d6baea3e7314fd986afdd86e33exxxx.jpg</IdentityCredentialUrl>","errorExample":""}]',
      'title' => '查询域名实名认证资料',
      'summary' => '调用QueryDomainRealNameVerificationInfo查询域名实名认证资料。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryFailReasonForDomainRealNameVerification' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'RealNameVerificationAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审核类型。取值：
- **ACTIVATE**：新注册。
- **CHGHOLDER**：过户。
- **TRANSFER**：转入。
                           ',
            'type' => 'string',
            'required' => true,
            'example' => 'ACTIVATE',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '1F1BA893-AD33-4248-8CB8-1657E3733052',
              ),
              'Data' => 
              array (
                'description' => '实名认证失败原因列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Date' => 
                    array (
                      'description' => '日期。',
                      'type' => 'string',
                      'example' => '2017-03-17 11:08:02',
                    ),
                    'FailReason' => 
                    array (
                      'description' => '实名认证失败原因。',
                      'type' => 'string',
                      'example' => '审核失败，所有者（中文）字段必须包含中文字符。',
                    ),
                    'DomainNameVerificationStatus' => 
                    array (
                      'description' => '命名审核状态。取值：
- **NONAUDIT**：未认证。
- **SUCCEED**：成功。
- **FAILED**：审核失败。
- **AUDITING**：审核中。
                           ',
                      'type' => 'string',
                      'example' => 'SUCCEED',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1F1BA893-AD33-4248-8CB8-1657E3733052\\",\\n  \\"Data\\": [\\n    {\\n      \\"Date\\": \\"2017-03-17 11:08:02\\",\\n      \\"FailReason\\": \\"审核失败，所有者（中文）字段必须包含中文字符。\\",\\n      \\"DomainNameVerificationStatus\\": \\"SUCCEED\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"Data\\": {\\n    \\"FailRecord\\": [\\n      {\\n        \\"FailReason\\": \\"审核失败，所有者（中文）字段必须包含中文字符。\\",\\n        \\"Date\\": \\"2017-03-17 11:08:02\\",\\n        \\"DomainNameVerificationStatus\\": \\"SUCCEED\\"\\n      },\\n      {\\n        \\"FailReason\\": \\"请上传55K-1M的jpg或者bmp图片\\",\\n        \\"Date\\": \\"2017-03-16 20:55:02\\",\\n        \\"DomainNameVerificationStatus\\": \\"SUCCEED\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"1F1BA893-AD33-4248-8CB8-1657E3733052\\"\\n}"},{"type":"xml","example":"<Data>\\n    <FailRecord>\\n        <FailReason>审核失败，所有者（中文）字段必须包含中文字符。</FailReason>\\n        <Date>2017-03-17 11:08:02</Date>\\n        <DomainNameVerificationStatus>SUCCEED</DomainNameVerificationStatus>\\n    </FailRecord>\\n    <FailRecord>\\n        <FailReason>请上传55KB-1MB的jpg或者bmp图片</FailReason>\\n        <Date>2017-03-16 20:55:02</Date>\\n        <DomainNameVerificationStatus>SUCCEED</DomainNameVerificationStatus>\\n    </FailRecord>\\n</Data>\\n<RequestId>1F1BA893-AD33-4248-8CB8-1657E3733052</RequestId>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryFailReasonForDomainRealNameVerificationResponse>\\n    <Data>\\n        <FailRecord>\\n            <FailReason>审核失败，所有者（中文）字段必须包含中文字符。</FailReason>\\n            <Date>2017-03-17 11:08:02</Date>\\n            <DomainNameVerificationStatus>SUCCEED</DomainNameVerificationStatus>\\n        </FailRecord>\\n        <FailRecord>\\n            <FailReason>请上传55K-1M的jpg或者bmp图片</FailReason>\\n            <Date>2017-03-16 20:55:02</Date>\\n            <DomainNameVerificationStatus>SUCCEED</DomainNameVerificationStatus>\\n        </FailRecord>       \\n    </Data>\\n    <RequestId>1F1BA893-AD33-4248-8CB8-1657E3733052</RequestId>\\n</QueryFailReasonForDomainRealNameVerificationResponse>"}]',
      'title' => '查询域名实名认证失败原因',
      'summary' => '查询域名实名认证（包括命名审核）失败原因。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteEmailVerification' => 
    array (
      'summary' => '调用DeleteEmailVerification接口删除已经验证通过的邮箱。',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认值为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的邮箱，多个邮箱之间使用英文逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'example' => 'test1@aliyun.com,test2@aliyun.com',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为127.0.0.1。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'example' => '7A3D0E4A-0D4B-4BD0-90D7-A61DF8DD26AE',
              ),
              'SuccessList' => 
              array (
                'description' => '邮箱删除成功列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Email' => 
                    array (
                      'description' => '删除成功的邮箱。',
                      'type' => 'string',
                      'example' => 'test2@aliyun.com',
                    ),
                    'Code' => 
                    array (
                      'description' => '返回code。',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                    'Message' => 
                    array (
                      'description' => '邮箱删除成功返回的信息。',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                  ),
                ),
              ),
              'FailList' => 
              array (
                'description' => '邮箱删除失败列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Email' => 
                    array (
                      'description' => '删除失败的邮箱。',
                      'type' => 'string',
                      'example' => 'test1@aliyun.com',
                    ),
                    'Code' => 
                    array (
                      'description' => '返回code。',
                      'type' => 'string',
                      'example' => 'ParameterIllegall',
                    ),
                    'Message' => 
                    array (
                      'description' => '邮箱删除失败返回的信息。',
                      'type' => 'string',
                      'example' => 'Parameter error',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7A3D0E4A-0D4B-4BD0-90D7-A61DF8DD26AE\\",\\n  \\"SuccessList\\": [\\n    {\\n      \\"Code\\": \\"Success\\",\\n      \\"Message\\": \\"Success\\",\\n      \\"Email\\": \\"test2@aliyun.com\\"\\n    }\\n  ],\\n  \\"FailList\\": [\\n    {\\n      \\"Code\\": \\"ParameterIllegall\\",\\n      \\"Message\\": \\"Parameter error\\",\\n      \\"Email\\": \\"test1@aliyun.com\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"failList\\": [\\n    {\\n      \\"code\\": \\"ParameterIllegall\\",\\n      \\"email\\": \\"test1@aliyun.com\\",\\n      \\"message\\": \\"Parameter error\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"B862F011-5E61-4302-88BD-A4EAA5326140\\",\\n  \\"successList\\": [\\n    {\\n      \\"email\\": \\"test2@aliyun.com\\"\\n    }\\n  ]\\n}"},{"type":"xml","example":"<DeleteEmailVerificationResponse>\\n<failList>\\n    <code>ParameterIllegall</code>\\n    <email>test1@aliyun.com</email>\\n    <message>Parameter error</message>\\n</failList>\\n<requestId>7A3D0E4A-0D4B-4BD0-90D7-A61DF8DD26AE</requestId>\\n<successList>\\n    <email>test2@aliyun.com</email>\\n</successList>\\n</DeleteEmailVerificationResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<DeleteEmailVerificationResponse>\\n    <FailList>\\n        <SendResult>\\n            <Email>test1@aliyun.com</Email>\\n            <Message>Parameter error</Message>\\n            <Code>ParameterIllegall</Code>\\n        </SendResult>\\n        <SendResult>\\n            <Email>test2@aliyun.com</Email>\\n            <Message>Parameter error</Message>\\n            <Code>ParameterIllegall</Code>\\n        </SendResult>\\n    </FailList>\\n    <RequestId>7A3D0E4A-0D4B-4BD0-90D7-A61DF8DD26AE</RequestId>\\n    <SuccessList/>\\n</DeleteEmailVerificationResponse>"}]',
      'title' => '删除已经验证通过的邮箱',
      'description' => '> 删除后如需继续使用该邮箱，您需要重新完成邮箱验证。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'VerifyEmail' => 
    array (
      'summary' => '调用VerifyEmail接口提交邮箱验证。',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认值为**en**。
',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'Token',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮箱验证链接后的token码。

验证邮件发送成功后，您可以登录待进行验证的邮箱中查看token码。',
            'type' => 'string',
            'required' => true,
            'example' => '0b32247496409441e9e179ea7c2e0****',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为127.0.0.1。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'example' => 'FD3AD289-83EE-4E32-803A-CF1B3A8EEE64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FD3AD289-83EE-4E32-803A-CF1B3A8EEE64\\"\\n}","errorExample":"{\\n    \\"requestId\\":\\"6ED795BD-192E-4921-B8E5-1BCA6F71186C\\"\\n}"},{"type":"xml","example":"<VerifyEmailResponse>\\n    <RequestId>FD3AD289-83EE-4E32-803A-CF1B3A8EEE64</RequestId>\\n</VerifyEmailResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<VerifyEmailResponse>\\n    <RequestId>FD3AD289-83EE-4E32-803A-CF1B3A8EEE64</RequestId>\\n</VerifyEmailResponse>"}]',
      'title' => '提交邮箱验证',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResendEmailVerification' => 
    array (
      'summary' => '调用ResendEmailVerification接口重新发送验证邮件。',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认值为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待重新获取验证邮件的邮箱，多个邮箱之间使用英文逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'example' => 'test1@aliyun.com,test2@aliyun.com',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为127.0.0.1。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'example' => '0EA54E99-DB48-4CE3-A099-6ED8E451B8AC',
              ),
              'SuccessList' => 
              array (
                'description' => '验证邮件发送成功列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Email' => 
                    array (
                      'description' => '验证邮箱。',
                      'type' => 'string',
                      'example' => 'test2@aliyun.com',
                    ),
                    'Code' => 
                    array (
                      'description' => '返回code。',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                    'Message' => 
                    array (
                      'description' => '返回信息。',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                  ),
                ),
              ),
              'FailList' => 
              array (
                'description' => '验证邮件发送失败列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Email' => 
                    array (
                      'description' => '验证邮箱。',
                      'type' => 'string',
                      'example' => 'test1@aliyun.com',
                    ),
                    'Code' => 
                    array (
                      'description' => '返回code。',
                      'type' => 'string',
                      'example' => 'SendTokenQuotaExceeded',
                    ),
                    'Message' => 
                    array (
                      'description' => '返回信息。',
                      'type' => 'string',
                      'example' => 'The maximum number of attempts allowed to send the email verification link is exceeded.',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0EA54E99-DB48-4CE3-A099-6ED8E451B8AC\\",\\n  \\"SuccessList\\": [\\n    {\\n      \\"Code\\": \\"Success\\",\\n      \\"Message\\": \\"Success\\",\\n      \\"Email\\": \\"test2@aliyun.com\\"\\n    }\\n  ],\\n  \\"FailList\\": [\\n    {\\n      \\"Code\\": \\"SendTokenQuotaExceeded\\",\\n      \\"Message\\": \\"The maximum number of attempts allowed to send the email verification link is exceeded.\\",\\n      \\"Email\\": \\"test1@aliyun.com\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"failList\\": [\\n    {\\n      \\"code\\": \\"SendTokenQuotaExceeded\\",\\n      \\"email\\": \\"test1@aliyun.com\\",\\n      \\"message\\": \\"The maximum number of attempts allowed to send the email verification link is exceeded.\\"\\n    },\\n    {\\n      \\"code\\": \\"ParameterIllegall\\",\\n      \\"email\\": \\"test2@aliyun.com\\",\\n      \\"message\\": \\"Parameter error\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"8D93B5EC-09D5-43C3-A5ED-AFBC6A98DDDF\\",\\n  \\"successList\\": []\\n}"},{"type":"xml","example":"<ResendEmailVerificationResponse>\\n<failList>\\n    <code>SendTokenQuotaExceeded</code>\\n    <email>test1@aliyun.com</email>\\n    <message>The maximum number of attempts allowed to send the email verification link is exceeded.</message>\\n</failList>\\n<failList>\\n    <code>ParameterIllegall</code>\\n    <email>test2@aliyun.com</email>\\n    <message>Parameter error</message>\\n</failList>\\n<requestId>0EA54E99-DB48-4CE3-A099-6ED8E451B8AC</requestId>\\n</ResendEmailVerificationResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<ResendEmailVerificationResponse>\\n    <FailList>\\n        <SendResult>\\n            <Email>test1@aliyun.com</Email>\\n            <Message>The maximum number of attempts allowed to send the email verification link is exceeded.</Message>\\n            <Code>SendTokenQuotaExceeded</Code>\\n        </SendResult>\\n        <SendResult>\\n            <Email>test2@aliyun.com</Email>\\n            <Message>The maximum number of attempts allowed to send the email verification link is exceeded.</Message>\\n            <Code>SendTokenQuotaExceeded</Code>\\n        </SendResult>\\n    </FailList>\\n    <RequestId>0EA54E99-DB48-4CE3-A099-6ED8E451B8AC</RequestId>\\n    <SuccessList/>\\n</ResendEmailVerificationResponse>"}]',
      'title' => '重新发送验证邮件',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SubmitEmailVerification' => 
    array (
      'summary' => '调用SubmitEmailVerification接口发送邮箱验证邮件。',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认值为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要完成验证的邮箱，多个邮箱之间使用英文逗号（,）隔开。',
            'type' => 'string',
            'required' => true,
            'example' => 'username@example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'SendIfExist',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '验证邮件已经存在时是否重新发送邮件。取值：

- **true**：重新发送验证邮件。
- **false**：不重新发送验证邮件。

默认值为**false**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为127.0.0.1。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'example' => 'E2A8A5EF-DF8A-4C48-8FD4-9F6BD71AB26D',
              ),
              'ExistList' => 
              array (
                'description' => '验证邮件已经存在列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Email' => 
                    array (
                      'description' => '验证邮箱。',
                      'type' => 'string',
                      'example' => 'username@example.com',
                    ),
                    'Code' => 
                    array (
                      'description' => '返回code。',
                      'type' => 'string',
                      'example' => 'SendTokenQuotaExceeded',
                    ),
                    'Message' => 
                    array (
                      'description' => '返回信息。',
                      'type' => 'string',
                      'example' => 'The maximum number of attempts allowed to send the email verification link is exceeded.',
                    ),
                  ),
                ),
              ),
              'SuccessList' => 
              array (
                'description' => '验证邮件发送成功列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Email' => 
                    array (
                      'description' => '验证邮箱。',
                      'type' => 'string',
                      'example' => 'username@example.com',
                    ),
                    'Code' => 
                    array (
                      'description' => '返回code。',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                    'Message' => 
                    array (
                      'description' => '返回信息。',
                      'type' => 'string',
                      'example' => 'Success',
                    ),
                  ),
                ),
              ),
              'FailList' => 
              array (
                'description' => '验证邮件发送失败列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Email' => 
                    array (
                      'description' => '验证邮箱。',
                      'type' => 'string',
                      'example' => 'username@example.com',
                    ),
                    'Code' => 
                    array (
                      'description' => '返回code。',
                      'type' => 'string',
                      'example' => 'SendTokenQuotaExceeded',
                    ),
                    'Message' => 
                    array (
                      'description' => '返回信息。',
                      'type' => 'string',
                      'example' => 'The maximum number of attempts allowed to send the email verification link is exceeded',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E2A8A5EF-DF8A-4C48-8FD4-9F6BD71AB26D\\",\\n  \\"ExistList\\": [\\n    {\\n      \\"Email\\": \\"username@example.com\\",\\n      \\"Code\\": \\"SendTokenQuotaExceeded\\",\\n      \\"Message\\": \\"The maximum number of attempts allowed to send the email verification link is exceeded.\\"\\n    }\\n  ],\\n  \\"SuccessList\\": [\\n    {\\n      \\"Email\\": \\"username@example.com\\",\\n      \\"Code\\": \\"Success\\",\\n      \\"Message\\": \\"Success\\"\\n    }\\n  ],\\n  \\"FailList\\": [\\n    {\\n      \\"Email\\": \\"username@example.com\\",\\n      \\"Code\\": \\"SendTokenQuotaExceeded\\",\\n      \\"Message\\": \\"The maximum number of attempts allowed to send the email verification link is exceeded\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>E2A8A5EF-DF8A-4C48-8FD4-9F6BD71AB26D</RequestId>\\n<ExistList>\\n    <Email>username@example.com</Email>\\n    <Message>The maximum number of attempts allowed to send the email verification link is exceeded.</Message>\\n    <Code>SendTokenQuotaExceeded</Code>\\n</ExistList>\\n<SuccessList>\\n    <Email>username@example.com</Email>\\n    <Message>Success</Message>\\n    <Code>Success</Code>\\n</SuccessList>\\n<FailList>\\n    <Email>username@example.com</Email>\\n    <Message>The maximum number of attempts allowed to send the email verification link is exceeded</Message>\\n    <Code>SendTokenQuotaExceeded</Code>\\n</FailList>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SubmitEmailVerificationResponse>\\n    <FailList>\\n        <SendResult>\\n            <Email>aaa@test.com</Email>\\n            <Message>The maximum number of attempts allowed to send the email\\n                verification link is exceeded.\\n            </Message>\\n            <Code>SendTokenQuotaExceeded</Code>\\n        </SendResult>\\n    </FailList>\\n    <RequestId>E2A8A5EF-DF8A-4C48-8FD4-9F6BD71AB26D</RequestId>\\n    <ExistList />\\n    <SuccessList>\\n        <SendResult>\\n            <Email>ccc@test.com</Email>\\n            <Message />\\n            <Code />\\n        </SendResult>\\n        <SendResult>\\n            <Email>ddd@test.com</Email>\\n            <Message />\\n            <Code />\\n        </SendResult>\\n    </SuccessList>\\n</SubmitEmailVerificationResponse>"}]',
      'title' => '发送邮箱验证邮件',
      'description' => '收到验证邮件后您需要在3天内登录邮箱完成验证。如果验证邮件已过期，您可以调用[ResendEmailVerification](~~67734~~)接口重新发送验证邮件。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryEmailVerification' => 
    array (
      'summary' => '调用QueryEmailVerification查询邮箱验证结果。',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认值为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的邮箱。',
            'type' => 'string',
            'required' => true,
            'example' => 'abc@aliyun.com',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
              'VerificationStatus' => 
              array (
                'description' => '邮箱验证状态。取值：
- **0**：等待验证。
- **1**：验证成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'GmtCreate' => 
              array (
                'description' => '数据库记录的邮箱创建时间。',
                'type' => 'string',
                'example' => '2019-02-19 16:38:07',
              ),
              'Email' => 
              array (
                'description' => '查询到的邮箱。',
                'type' => 'string',
                'example' => 'abc@aliyun.com',
              ),
              'EmailVerificationNo' => 
              array (
                'description' => '邮箱验证编号（默认为系统自动生成的流水号）。',
                'type' => 'string',
                'example' => '72b36ba0572e423bbb3f19640896****',
              ),
              'ConfirmIp' => 
              array (
                'description' => '完成邮箱验证的电脑IP地址。',
                'type' => 'string',
                'example' => '42.*.*.31',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'FC4F7D02-8A83-4E37-B935-2D48A1B8423E',
              ),
              'UserId' => 
              array (
                'description' => '用户ID。',
                'type' => 'string',
                'example' => '140692647406****',
              ),
              'GmtModified' => 
              array (
                'description' => '数据库记录的邮箱更新时间。',
                'type' => 'string',
                'example' => '2019-02-19 16:40:38',
              ),
              'SendIp' => 
              array (
                'description' => '用户发起邮件验证的IP地址。',
                'type' => 'string',
                'example' => '42.*.*.115',
              ),
              'VerificationTime' => 
              array (
                'description' => '完成邮箱验证的具体时间。',
                'type' => 'string',
                'example' => '2019-02-19 16:40:38',
              ),
              'TokenSendTime' => 
              array (
                'description' => '邮箱验证Token的发送时间。',
                'type' => 'string',
                'example' => '2019-02-19 16:38:07',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VerificationStatus\\": 1,\\n  \\"GmtCreate\\": \\"2019-02-19 16:38:07\\",\\n  \\"Email\\": \\"abc@aliyun.com\\",\\n  \\"EmailVerificationNo\\": \\"72b36ba0572e423bbb3f19640896****\\",\\n  \\"ConfirmIp\\": \\"42.*.*.31\\",\\n  \\"RequestId\\": \\"FC4F7D02-8A83-4E37-B935-2D48A1B8423E\\",\\n  \\"UserId\\": \\"140692647406****\\",\\n  \\"GmtModified\\": \\"2019-02-19 16:40:38\\",\\n  \\"SendIp\\": \\"42.*.*.115\\",\\n  \\"VerificationTime\\": \\"2019-02-19 16:40:38\\",\\n  \\"TokenSendTime\\": \\"2019-02-19 16:38:07\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryEmailVerificationResponse>\\n<ConfirmIp>42.*.*.31</ConfirmIp>\\n<TokenSendTime>2019-02-19 16:38:07</TokenSendTime>\\n<Email>abc@aliyun.com</Email>\\n<RequestId>FC4F7D02-8A83-4E37-B935-2D48A1B8423E</RequestId>\\n<VerificationStatus>1</VerificationStatus>\\n<SendIp>42.*.*.115</SendIp>\\n<VerificationTime>2019-02-19 16:40:38</VerificationTime>\\n<EmailVerificationNo>72b36ba0572e423bbb3f19640896****</EmailVerificationNo>\\n<UserId>140692647406****</UserId>\\n<GmtCreate>2019-02-19 16:38:07</GmtCreate>\\n<GmtModified>2019-02-19 16:40:38</GmtModified>\\n</QueryEmailVerificationResponse>","errorExample":""}]',
      'title' => '查询邮箱验证结果',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListEmailVerification' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认值为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'BeginCreateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询创建邮箱验证的开始时间，计算方式为UTC时间1970年1月1日0点距离现在的毫秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndCreateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询创建邮箱验证的结束时间，计算方式为UTC时间1970年1月1日0点距离现在的毫秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        3 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的邮箱地址，每次仅可上传一个邮箱。',
            'type' => 'string',
            'required' => false,
            'example' => 'username@example.com',
          ),
        ),
        4 => 
        array (
          'name' => 'VerificationStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮箱验证状态。取值：
- **0**：等待验证。
- **1**：验证成功。
                           ',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名列表分页的页码，默认值为**1**，可根据自身需求进行设置。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名列表分页的大小，默认值为**500**，最大值为**5000**，可根据自身需求设置。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '500',
            'default' => '500',
          ),
        ),
        7 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
              'PrePage' => 
              array (
                'description' => '是否有上一页。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'CurrentPageNum' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '78C60CC3-FF0A-44E2-989A-DDE0597791C3',
              ),
              'PageSize' => 
              array (
                'description' => '分页的大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '500',
              ),
              'TotalPageNum' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Data' => 
              array (
                'description' => '邮箱验证列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'VerificationTime' => 
                    array (
                      'description' => '完成邮箱验证的具体时间。',
                      'type' => 'string',
                      'example' => '2017-12-25 03:41:11',
                    ),
                    'Email' => 
                    array (
                      'description' => '进行验证的邮箱地址。',
                      'type' => 'string',
                      'example' => 'username@example.com',
                    ),
                    'EmailVerificationNo' => 
                    array (
                      'description' => '邮箱验证编号（默认为系统自动生成的流水号）。',
                      'type' => 'string',
                      'example' => '00000a21fd374da99d9c95b48500000',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'string',
                      'example' => '0000',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '数据库记录的创建时间。',
                      'type' => 'string',
                      'example' => '2017-12-25 03:38:46',
                    ),
                    'VerificationStatus' => 
                    array (
                      'description' => '邮箱验证状态，取值：
- **0**：等待验证。
- **1**：验证成功。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'TokenSendTime' => 
                    array (
                      'description' => '邮箱验证Token的发送时间。',
                      'type' => 'string',
                      'example' => '2017-12-25 03:38:46',
                    ),
                    'SendIp' => 
                    array (
                      'description' => '用户发起邮件验证的IP地址。',
                      'type' => 'string',
                      'example' => '127.0.0.1',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '数据库记录的更新时间。',
                      'type' => 'string',
                      'example' => '2017-12-25 03:41:11',
                    ),
                    'ConfirmIp' => 
                    array (
                      'description' => '完成邮箱验证的电脑IP地址。',
                      'type' => 'string',
                      'example' => '127.0.0.1',
                    ),
                  ),
                ),
              ),
              'TotalItemNum' => 
              array (
                'description' => '域名总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'NextPage' => 
              array (
                'description' => '是否有下一页。',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PrePage\\": false,\\n  \\"CurrentPageNum\\": 1,\\n  \\"RequestId\\": \\"78C60CC3-FF0A-44E2-989A-DDE0597791C3\\",\\n  \\"PageSize\\": 500,\\n  \\"TotalPageNum\\": 1,\\n  \\"Data\\": [\\n    {\\n      \\"VerificationTime\\": \\"2017-12-25 03:41:11\\",\\n      \\"Email\\": \\"username@example.com\\",\\n      \\"EmailVerificationNo\\": \\"00000a21fd374da99d9c95b48500000\\",\\n      \\"UserId\\": \\"0000\\",\\n      \\"GmtCreate\\": \\"2017-12-25 03:38:46\\",\\n      \\"VerificationStatus\\": 1,\\n      \\"TokenSendTime\\": \\"2017-12-25 03:38:46\\",\\n      \\"SendIp\\": \\"127.0.0.1\\",\\n      \\"GmtModified\\": \\"2017-12-25 03:41:11\\",\\n      \\"ConfirmIp\\": \\"127.0.0.1\\"\\n    }\\n  ],\\n  \\"TotalItemNum\\": 2,\\n  \\"NextPage\\": false\\n}","errorExample":"{\\n  \\"currentPageNum\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"confirmIp\\": \\"127.0.0.1\\",\\n      \\"email\\": \\"test1@aliyun.com\\",\\n      \\"emailVerificationNo\\": \\"00000a21fd374da99d9c95b48500000\\",\\n      \\"gmtCreate\\": \\"Dec 25,2017 03:38:46\\",\\n      \\"gmtModified\\": \\"Dec 25,2017 03:41:11\\",\\n      \\"sendIp\\": \\"127.0.0.1\\",\\n      \\"tokenSendTime\\": \\"Dec 25,2017 03:38:46\\",\\n      \\"userId\\": \\"0000\\",\\n      \\"verificationStatus\\": 1,\\n      \\"verificationTime\\": \\"Dec 25,2017 03:41:11\\"\\n    },\\n    {\\n      \\"confirmIp\\": \\"127.0.0.1\\",\\n      \\"email\\": \\"test2@aliyun.com\\",\\n      \\"emailVerificationNo\\": \\"0000021fd374da99d9c95b48500000\\",\\n      \\"gmtCreate\\": \\"Dec 25,2017 03:32:40\\",\\n      \\"gmtModified\\": \\"Dec 25,2017 03:36:57\\",\\n      \\"sendIp\\": \\"127.0.0.1\\",\\n      \\"tokenSendTime\\": \\"Dec 25,2017 03:35:22\\",\\n      \\"userId\\": \\"0000\\",\\n      \\"verificationStatus\\": 1,\\n      \\"verificationTime\\": \\"Dec 25,2017 03:36:57\\"\\n    }\\n  ],\\n  \\"nextPage\\": false,\\n  \\"pageSize\\": 500,\\n  \\"prePage\\": false,\\n  \\"requestId\\": \\"09D3DA75-B3B5-480B-9100-92DC43919B46\\",\\n  \\"totalItemNum\\": 2,\\n  \\"totalPageNum\\": 1\\n}"},{"type":"xml","example":"<ListEmailVerificationResponse>\\n    <Data>\\n        <EmailVerification>\\n            <ConfirmIp>127.0.0.1</ConfirmIp>\\n            <TokenSendTime>Dec 25,2017 03:38:46</TokenSendTime>\\n            <Email>username@example.com</Email>\\n            <VerificationStatus>1</VerificationStatus>\\n            <SendIp>127.0.0.1</SendIp>\\n            <VerificationTime>Dec 25,2017 03:41:11</VerificationTime>\\n            <EmailVerificationNo>00000a21fd374da99d9c95b48500000</EmailVerificationNo>\\n            <UserId>0000</UserId>\\n            <GmtCreate>Dec 25,2017 03:38:46</GmtCreate>\\n            <GmtModified>Dec 25,2017 03:41:11</GmtModified>\\n        </EmailVerification>\\n    </Data>\\n    <TotalItemNum>2</TotalItemNum>\\n    <PageSize>500</PageSize>\\n    <CurrentPageNum>1</CurrentPageNum>\\n    <RequestId>4BF41EC0-C147-4F88-8B3D-D569AF5C3E8B</RequestId>\\n    <PrePage>false</PrePage>\\n    <TotalPageNum>1</TotalPageNum>\\n    <NextPage>false</NextPage>\\n</ListEmailVerificationResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<ListEmailVerificationResponse>\\n    <Data>\\n        <EmailVerification>\\n            <ConfirmIp>127.0.0.1</ConfirmIp>\\n            <TokenSendTime>Dec 25,2017 03:38:46</TokenSendTime>\\n            <Email>test1@aliyun.com</Email>\\n            <VerificationStatus>1</VerificationStatus>\\n            <SendIp>127.0.0.1</SendIp>\\n            <VerificationTime>Dec 25,2017 03:41:11</VerificationTime>\\n            <EmailVerificationNo>00000a21fd374da99d9c95b48500000</EmailVerificationNo>\\n            <UserId>0000</UserId>\\n            <GmtCreate>Dec 25,2017 03:38:46</GmtCreate>\\n            <GmtModified>Dec 25,2017 03:41:11</GmtModified>\\n        </EmailVerification>\\n        <EmailVerification>\\n            <ConfirmIp>127.0.0.1</ConfirmIp>\\n            <TokenSendTime>Dec 25,2017 03:35:22</TokenSendTime>\\n            <Email>test2@aliyun.com</Email>\\n            <VerificationStatus>1</VerificationStatus>\\n            <SendIp>127.0.0.1</SendIp>\\n            <VerificationTime>Dec 25,2017 03:36:57</VerificationTime>\\n            <EmailVerificationNo>0000021fd374da99d9c95b48500000</EmailVerificationNo>\\n            <UserId>0000</UserId>\\n            <GmtCreate>Dec 25,2017 03:32:40</GmtCreate>\\n            <GmtModified>Dec 25,2017 03:36:57</GmtModified>\\n        </EmailVerification>\\n    </Data>\\n    <TotalItemNum>2</TotalItemNum>\\n    <PageSize>500</PageSize>\\n    <CurrentPageNum>1</CurrentPageNum>\\n    <RequestId>4BF41EC0-C147-4F88-8B3D-D569AF5C3E8B</RequestId>\\n    <PrePage>false</PrePage>\\n    <TotalPageNum>1</TotalPageNum>\\n    <NextPage>false</NextPage>\\n</ListEmailVerificationResponse>"}]',
      'title' => '查询邮箱验证列表',
      'summary' => '调用ListEmailVerification接口查询邮箱验证列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForUpdateProhibitionLock' => 
    array (
      'summary' => '调用SaveSingleTaskForUpdateProhibitionLock提交禁止更新锁任务。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启关闭状态。取值：
- **true**：开启；
- **false**：关闭。
                           ',
            'type' => 'boolean',
            'required' => true,
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
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'F51977F9-2B40-462B-BCCD-CF5BB1E9DB56',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'd3babb0a-c939-4c25-8c65-c47b65f5492a',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\",\\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f5492a\\"\\n}","errorExample":"{    \\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f5492a\\",\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForUpdateProhibitionLockResponse>\\n    <TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n    <RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveSingleTaskForUpdateProhibitionLockResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForUpdateProhibitionLockResponse>\\n    <TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n    <RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveSingleTaskForUpdateProhibitionLockResponse>"}]',
      'title' => '提交禁止更新锁任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~QueryTaskDetailList~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveBatchTaskForUpdateProhibitionLock' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启关闭状态。取值：
- **true**：开启；
- **false**：关闭。
                           ',
            'type' => 'boolean',
            'required' => true,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '域名列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'example.com',
            ),
            'required' => true,
            'example' => 'aliyundoc.com',
            'maxItems' => 1000,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'F51977F9-2B40-462B-BCCD-CF5BB1E9DB56',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'd3babb0a-c939-4c25-8c65-c47b65f5492a',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\",\\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f5492a\\"\\n}","errorExample":"{    \\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f5492a\\",\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchTaskForUpdateProhibitionLockResponse>\\n    <TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n    <RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveBatchTaskForUpdateProhibitionLockResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchTaskForUpdateProhibitionLockResponse>\\n    <TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n    <RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveBatchTaskForUpdateProhibitionLockResponse>"}]',
      'title' => '提交批量禁止更新锁任务',
      'summary' => '调用SaveBatchTaskForUpdateProhibitionLock提交批量禁止更新锁任务。',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~QueryTaskDetailList~~)接口来查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID' => 
    array (
      'summary' => '通过信息模板编号提交修改注册联系人信息任务。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可以设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'RegistrantProfileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '信息模板编号。您可以通过[QueryRegistrantProfiles](https://help.aliyun.com/document_detail/67701.htm?spm=a2c4g.11186623.0.0.33f420daTwRQaO)接口查询信息模板编号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'TransferOutProhibited',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否添加禁止转出限制，表示所有者修改后是否限制域名60天转出。取值：
- **false**：不添加。
- **true**：添加。

默认值为**false**。',
            'type' => 'boolean',
            'required' => true,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '域名列表，多个域名时使用**list**方式传递。域名列表可通过[QueryDomainList](https://help.aliyun.com/document_detail/69362.htm?spm=a2c4g.11186623.0.0.33f4253cSJy3m8)接口获取。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
            ),
            'required' => true,
            'example' => 'example.com',
            'maxItems' => 1000,
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
                'example' => '40F46D3D-F4F3-4CCB-AC30-2DD20E32E528',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\",\\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\"\\n}","errorExample":"{    \\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\",\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\"\\n}"},{"type":"xml","example":"<SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n    <RequestId>40F46D3D-F4F3-4CCB-AC30-2DD20E32E528</RequestId>\\n</SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n    <RequestId>40F46D3D-F4F3-4CCB-AC30-2DD20E32E528</RequestId>\\n</SaveTaskForUpdatingRegistrantInfoByRegistrantProfileIDResponse>"}]',
      'title' => '提交修改注册联系人信息任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.htm?spm=a2c4g.11186623.0.0.33f47edeV0nkFx)接口查询。修改后注册联系人信息和模板信息一致，如果域名是强制实名认证域名，修改成功后域名会变为实名认证成功状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveTaskForUpdatingRegistrantInfoByIdentityCredential' => 
    array (
      'summary' => '调用SaveTaskForUpdatingRegistrantInfoByIdentityCredential提交批量通过联系人信息和资料修改注册联系人信息任务，同时要求必须填写相应资料。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PostalCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮政编码。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        1 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '具体的地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'chao yang qu',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        3 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        4 => 
        array (
          'name' => 'City',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '城市。',
            'type' => 'string',
            'required' => false,
            'example' => 'bei jing shi',
          ),
        ),
        5 => 
        array (
          'name' => 'RegistrantOrganization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '持有者名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ce shi',
          ),
        ),
        6 => 
        array (
          'name' => 'RegistrantName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联系人名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ce shi',
          ),
        ),
        7 => 
        array (
          'name' => 'Province',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '省份。',
            'type' => 'string',
            'required' => false,
            'example' => 'bei jing',
          ),
        ),
        8 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮箱。',
            'type' => 'string',
            'required' => false,
            'example' => 'test@aliyun.com',
          ),
        ),
        9 => 
        array (
          'name' => 'Country',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '国家代码，如**CN**、**US**。',
            'type' => 'string',
            'required' => false,
            'example' => 'CN',
          ),
        ),
        10 => 
        array (
          'name' => 'TelArea',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话国家代码。',
            'type' => 'string',
            'required' => true,
            'example' => '86',
          ),
        ),
        11 => 
        array (
          'name' => 'Telephone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话号码。',
            'type' => 'string',
            'required' => true,
            'example' => '12345678',
          ),
        ),
        12 => 
        array (
          'name' => 'TelExt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分机号码。',
            'type' => 'string',
            'required' => false,
            'example' => '12345',
          ),
        ),
        13 => 
        array (
          'name' => 'ZhCity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中文城市。',
            'type' => 'string',
            'required' => false,
            'example' => '北京市',
          ),
        ),
        14 => 
        array (
          'name' => 'ZhRegistrantOrganization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中文持有者名称。',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        15 => 
        array (
          'name' => 'ZhRegistrantName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中文联系人名称。',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        16 => 
        array (
          'name' => 'ZhProvince',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中文省份。',
            'type' => 'string',
            'required' => false,
            'example' => '北京',
          ),
        ),
        17 => 
        array (
          'name' => 'ZhAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中文地址。',
            'type' => 'string',
            'required' => false,
            'example' => '朝阳区',
          ),
        ),
        18 => 
        array (
          'name' => 'RegistrantType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名类型。取值：
- **1**：个人。
- **2**：企业。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
            ),
          ),
        ),
        19 => 
        array (
          'name' => 'IdentityCredentialType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实名认证证件类型。取值：
- **SFZ**：身份证。
- **HZ**：护照。
- **YYZZ**：营业执照。
- **ORG**：组织机构代码证。
- **XYDM**：统一社会信用代码证书。
- **TXZ**：港澳居民来往内地通行证。

如果您使用的证件不在上述范围中，请参见[支持实名认证的证件类型](~~72209~~)，查看相应证件类型的取值。

> 请务必选择与您传入的证件一致的证件类型。',
            'type' => 'string',
            'required' => true,
            'example' => 'SFZ',
          ),
        ),
        20 => 
        array (
          'name' => 'IdentityCredentialNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实名认证资料证件号码，如：身份证号码、统一社会信用代码。',
            'type' => 'string',
            'required' => true,
            'example' => '5****************9',
          ),
        ),
        21 => 
        array (
          'name' => 'IdentityCredential',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '使用Base64编码的实名认证资料图片。图片要求如下：
- 图片为**jpg**或**bmp**格式。
- 原图片大小为**55K~1M**。
',
            'type' => 'string',
            'required' => true,
            'example' => 'h6UPhXz/ADP/2Q==',
          ),
        ),
        22 => 
        array (
          'name' => 'TransferOutProhibited',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否添加禁止转出限制，表示持有者修改后是否限制域名60天转出。默认为**false**，不限制转出。
                           ',
            'type' => 'boolean',
            'required' => true,
            'example' => 'false',
          ),
        ),
        23 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '域名列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '域名列表。',
              'type' => 'string',
              'required' => false,
              'example' => 'alibabacloud.com',
            ),
            'required' => true,
            'example' => 'alibabacloud.com',
            'maxItems' => 1000,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'EDC28FEC-6BE0-4583-95BC-test',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '880f1579-be51-4dd3-a69d-test',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EDC28FEC-6BE0-4583-95BC-test\\",\\n  \\"TaskNo\\": \\"880f1579-be51-4dd3-a69d-test\\"\\n}","errorExample":"{\\n  \\"requestId\\": \\"464AF466-CA8E-43A8-B61D-test\\",\\n  \\"taskNo\\": \\"65de2165-ca09-491f-9fe0-test\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse>\\n    <TaskNo>880f1579-be51-4dd3-a69d-test</TaskNo>\\n    <RequestId>EDC28FEC-6BE0-4583-95BC-test</RequestId>\\n</SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponseResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponse>\\n    <TaskNo>880f1579-be51-4dd3-a69d-test</TaskNo>\\n    <RequestId>EDC28FEC-6BE0-4583-95BC-test</RequestId>\\n</SaveTaskForUpdatingRegistrantInfoByIdentityCredentialResponseResponse>"}]',
      'title' => '提交批量修改注册联系人信息任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForUpdatingContactInfo' => 
    array (
      'summary' => '调用SaveSingleTaskForUpdatingContactInfo提交域名信息修改任务。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名实例编号。',
            'type' => 'string',
            'required' => false,
            'example' => 'S123456789',
          ),
        ),
        4 => 
        array (
          'name' => 'RegistrantProfileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '信息模板编号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'ContactType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联系人类型。取值：
- **registrant**；
- **admin**；
- **billing**；
- **tech**。
                           ',
            'type' => 'string',
            'required' => true,
            'example' => 'registrant',
          ),
        ),
        6 => 
        array (
          'name' => 'AddTransferLock',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否添加禁止转出限制，此参数只对 **ContactType**=**registrant** 情况下起作用，表示持有者修改后是否限制域名60天转出。默认为**false**，不限制转出。
                           ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '40F46D3D-F4F3-4CCB-AC30-2DD20E32E528',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\",\\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\"\\n}","errorExample":"{    \\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\",\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForUpdatingContactInfoResponse>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n    <RequestId>40F46D3D-F4F3-4CCB-AC30-2DD20E32E528</RequestId>\\n</SaveSingleTaskForUpdatingContactInfoResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForUpdatingContactInfoResponse>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n    <RequestId>40F46D3D-F4F3-4CCB-AC30-2DD20E32E528</RequestId>\\n</SaveSingleTaskForUpdatingContactInfoResponse>"}]',
      'title' => '提交域名信息修改任务',
      'description' => '任务执行结果请通过[查询任务详情列表](~~67710~~)接口来查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveBatchTaskForUpdatingContactInfoByNewContact' => 
    array (
      'summary' => '通过新联系人信息，提交域名信息修改任务。',
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
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '具体的地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'chao yang qu',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'City',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '城市。',
            'type' => 'string',
            'required' => false,
            'example' => 'bei jing shi',
          ),
        ),
        4 => 
        array (
          'name' => 'RegistrantOrganization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '持有者名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ce shi',
          ),
        ),
        5 => 
        array (
          'name' => 'RegistrantName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联系人名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'ce shi',
          ),
        ),
        6 => 
        array (
          'name' => 'Province',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '省份。',
            'type' => 'string',
            'required' => false,
            'example' => 'bei jing',
          ),
        ),
        7 => 
        array (
          'name' => 'Country',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '国家代码，如**CN**，**US**。',
            'type' => 'string',
            'required' => false,
            'example' => 'CN',
          ),
        ),
        8 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮箱。',
            'type' => 'string',
            'required' => false,
            'example' => 'test@aliyun.com',
          ),
        ),
        9 => 
        array (
          'name' => 'PostalCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮政编码。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        10 => 
        array (
          'name' => 'TelArea',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话国家代码。',
            'type' => 'string',
            'required' => false,
            'example' => '86',
          ),
        ),
        11 => 
        array (
          'name' => 'Telephone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话号码。',
            'type' => 'string',
            'required' => false,
            'example' => '1234567890',
          ),
        ),
        12 => 
        array (
          'name' => 'TelExt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分机号码。',
            'type' => 'string',
            'required' => false,
            'example' => '1235',
          ),
        ),
        13 => 
        array (
          'name' => 'ZhCity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中文城市。',
            'type' => 'string',
            'required' => false,
            'example' => '北京市',
          ),
        ),
        14 => 
        array (
          'name' => 'ZhRegistrantOrganization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中文持有者名称。
',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        15 => 
        array (
          'name' => 'ZhRegistrantName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中文联系人名称。',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        16 => 
        array (
          'name' => 'ZhProvince',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中文省份。',
            'type' => 'string',
            'required' => false,
            'example' => '北京',
          ),
        ),
        17 => 
        array (
          'name' => 'ZhAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中文地址。',
            'type' => 'string',
            'required' => false,
            'example' => '朝阳区',
          ),
        ),
        18 => 
        array (
          'name' => 'ContactType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联系人类型。取值：
- **registrant**：域名持有者。
- **admin**：管理者。
- **billing**：付费者。
- **tech**：技术者。',
            'type' => 'string',
            'required' => true,
            'example' => 'registrant',
            'enum' => 
            array (
              0 => 'registrant',
              1 => 'admin',
              2 => 'billing',
              3 => 'tech',
            ),
          ),
        ),
        19 => 
        array (
          'name' => 'RegistrantType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名类型。取值：
- **1**：个人。
- **2**：企业。
                                 ',
            'type' => 'string',
            'required' => true,
            'example' => '1',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
            ),
          ),
        ),
        20 => 
        array (
          'name' => 'TransferOutProhibited',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否添加禁止转出限制，此参数只对**ContactType**=**registrant**情况下起作用，表示持有者修改后是否限制域名60天转出。默认为**false**，不限制转出。
                           ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        21 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '域名列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '无。',
              'type' => 'string',
              'required' => false,
              'example' => 'alibabacloud.com',
            ),
            'required' => true,
            'example' => 'alibabacloud.com',
            'maxItems' => 1000,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '464AF466-CA8E-43A8-B61D-test',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '65de2165-ca09-491f-9fe0-test',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"464AF466-CA8E-43A8-B61D-test\\",\\n  \\"TaskNo\\": \\"65de2165-ca09-491f-9fe0-test\\"\\n}","errorExample":"{\\n  \\"requestId\\": \\"464AF466-CA8E-43A8-B61D-test\\",\\n  \\"taskNo\\": \\"65de2165-ca09-491f-9fe0-test\\"\\n}"},{"type":"xml","example":"<SaveBatchTaskForUpdatingContactInfoByNewContactResponse>\\n<requestId>464AF466-CA8E-43A8-B61D-test</requestId>\\n<taskNo>65de2165-ca09-491f-9fe0-test</taskNo>\\n</SaveBatchTaskForUpdatingContactInfoByNewContactResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchTaskForUpdatingContactInfoByNewContactResponse>\\n    <TaskNo>880f1579-be51-4dd3-a69d-test</TaskNo>\\n    <RequestId>EDC28FEC-6BE0-4583-95BC-test</RequestId>\\n</SaveBatchTaskForUpdatingContactInfoByNewContactResponse>"}]',
      'title' => '提交域名信息修改任务',
      'description' => '任务执行结果请通过[查询任务详情列表](~~67710~~)接口来查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId' => 
    array (
      'summary' => '调用SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId提交批量域名信息修改任务。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'RegistrantProfileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '信息模板编号。
信息模板创建成功后由系统自动生成，您可以调用[QueryRegistrantProfiles](~~67701~~)接口查询信息模板编号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ContactType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要修改的联系人类型。取值：
- **registrant**：域名持有者。
- **admin**：管理者。
- **billing**：付费者。
- **tech**：技术者。
                           ',
            'type' => 'string',
            'required' => true,
            'example' => 'registrant',
            'enum' => 
            array (
              0 => 'registrant',
              1 => 'admin',
              2 => 'billing',
              3 => 'tech',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'TransferOutProhibited',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否添加禁止转出限制，此参数只在**ContactType**的参数值为**registrant**的情况下有效，表示持有者修改后是否限制域名60天转出。取值：
- **false**：不转出。
- **true**：转出。

默认值为**false**。                        ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '域名。如需传入多个域名，请使用**list**方式传入。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'example.com',
            ),
            'required' => true,
            'example' => 'example.com',
            'maxItems' => 1000,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'EDC28FEC-6BE0-4583-95BC',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '880f1579-be51-4dd3-a69d',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EDC28FEC-6BE0-4583-95BC\\",\\n  \\"TaskNo\\": \\"880f1579-be51-4dd3-a69d\\"\\n}","errorExample":"{\\n  \\"requestId\\": \\"464AF466-CA8E-43A8-B61D-test\\",\\n  \\"taskNo\\": \\"65de2165-ca09-491f-9fe0-test\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse>\\n    <TaskNo>880f1579-be51-4dd3-a69d-test</TaskNo>\\n    <RequestId>EDC28FEC-6BE0-4583-95BC-test</RequestId>\\n</SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse>\\n    <TaskNo>880f1579-be51-4dd3-a69d-test</TaskNo>\\n    <RequestId>EDC28FEC-6BE0-4583-95BC-test</RequestId>\\n</SaveBatchTaskForUpdatingContactInfoByRegistrantProfileIdResponse>"}]',
      'title' => '提交批量域名信息修改任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveBatchTaskForCreatingOrderTransfer' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代金券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '123123',
          ),
        ),
        3 => 
        array (
          'name' => 'UseCoupon',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用代金券。取值：

- **false**：不使用。
- **true**：使用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'PromotionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '123123',
          ),
        ),
        5 => 
        array (
          'name' => 'UsePromotion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券。取值：

- **false**：不使用。
- **true**：使用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'OrderTransferParam',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '任务详情列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'PermitPremiumTransfer' => 
                array (
                  'description' => '是否允许溢价词域名转入，取值
- **false**：允许。
- **true**：不允许。

默认值为**false**。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
                'RegistrantProfileId' => 
                array (
                  'description' => '已经实名认证的域名信息模板ID，可通过[QueryRegistrantProfileRealNameVerificationInfo](https://help.aliyun.com/document_detail/69359.htm?spm=a2c4g.11186623.0.0.5096253c12PfdB)接口获取。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '123456',
                ),
                'AuthorizationCode' => 
                array (
                  'description' => '域名转入密码。如果涉及多个域名时使用**list**传入。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testCode',
                ),
                'DomainName' => 
                array (
                  'description' => '域名，如果涉及多个域名时该项传入域名列表。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'example.com',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 1000,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '40F46D3D-F4F3-4CCB-AC30-2DD20E32E528',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\",\\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\"\\n}","errorExample":""},{"type":"xml","example":"<SaveBatchTaskForCreatingOrderTransferResponse>\\n    <RequestId>40F46D3D-F4F3-4CCB-AC30-2DD20E32E528</RequestId>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n</SaveBatchTaskForCreatingOrderTransferResponse>","errorExample":""}]',
      'title' => '提交批量域名转入任务',
      'summary' => '调用SaveBatchTaskForCreatingOrderTransfer提交批量域名转入任务。',
      'description' => '任务执行结果请通过查询任务详情[QueryTaskDetailList](https://help.aliyun.com/document_detail/67710.htm?spm=a2c4g.11186623.0.0.5096389cgV6sng)接口来查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForCreatingOrderTransfer' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。
',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'AuthorizationCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名转入密码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testCode',
          ),
        ),
        4 => 
        array (
          'name' => 'RegistrantProfileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已经实名认证域名信息模板ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
          ),
        ),
        5 => 
        array (
          'name' => 'PermitPremiumTransfer',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否允许溢价词域名转入，默认为**false**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'CouponNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代金券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        7 => 
        array (
          'name' => 'UseCoupon',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用代金券。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'PromotionNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '优惠券编号。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        9 => 
        array (
          'name' => 'UsePromotion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用优惠券。',
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
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '40F46D3D-F4F3-4CCB-AC30-2DD20E32E528',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\",\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"492D1868-1384-4219-8F8B-7EB44534A72A\\",\\n    \\"TaskNo\\":\\"939b6918-be3b-4c4f-b949-93553da52dca\\"\\n}"},{"type":"xml","example":"<SaveSingleTaskForCreatingOrderTransferResponse>\\n  <TaskNo>57fbc841-c4e5-4a23-8ed6-315091d0c40e</TaskNo>\\n  <RequestId>21AF4F6F-1924-408B-BF83-88FEFA9CEF2B</RequestId>\\n</SaveSingleTaskForCreatingOrderTransferResponse>","errorExample":"<SaveSingleTaskForCreatingOrderTransferResponse>\\n  <TaskNo>57fbc841-c4e5-4a23-8ed6-315091d0c40e</TaskNo>\\n  <RequestId>21AF4F6F-1924-408B-BF83-88FEFA9CEF2B</RequestId>\\n</SaveSingleTaskForCreatingOrderTransferResponse>"}]',
      'title' => '提交域名转入任务',
      'summary' => '调用SaveSingleTaskForCreatingOrderTransfer提交域名转入任务。',
      'description' => '任务执行结果请通过查询任务详情[QueryTaskDetailList](~~67710~~)接口来查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForCancelingTransferIn' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '40F46D3D-F4F3-4CCB-AC30-2DD20E32E528',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\",\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"492D1868-1384-4219-8F8B-7EB44534A72A\\",\\n    \\"TaskNo\\":\\"939b6918-be3b-4c4f-b949-93553da52dca\\"\\n}"},{"type":"xml","example":"<SaveSingleTaskForCancelingTransferInResponse>\\n  <TaskNo>3bdbaa0e-faa2-4ad2-98f4-bcfeb0237054</TaskNo>\\n  <RequestId>EEB28AA7-6051-4E71-B2CC-DAAFB2DF6BCA</RequestId>\\n</SaveSingleTaskForCancelingTransferInResponse>e>","errorExample":"<SaveSingleTaskForCancelingTransferInResponse>\\n  <TaskNo>3bdbaa0e-faa2-4ad2-98f4-bcfeb0237054</TaskNo>\\n  <RequestId>EEB28AA7-6051-4E71-B2CC-DAAFB2DF6BCA</RequestId>\\n</SaveSingleTaskForCancelingTransferInResponse>e>"}]',
      'title' => '提交取消域名转入任务',
      'summary' => '调用SaveSingleTaskForCancelingTransferIn提交取消域名转入任务。',
      'description' => '任务执行结果请通过查询任务详情[QueryTaskDetailList](~~67710~~)接口来查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForCancelingTransferOut' => 
    array (
      'summary' => '调用SaveSingleTaskForCancelingTransferOut提交取消域名转出任务。',
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '40F46D3D-F4F3-4CCB-AC30-2DD20E32E528',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\",\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"492D1868-1384-4219-8F8B-7EB44534A72A\\",\\n    \\"TaskNo\\":\\"939b6918-be3b-4c4f-b949-93553da52dca\\"\\n}"},{"type":"xml","example":"<SaveSingleTaskForCancelingTransferOutResponse>\\n  <TaskNo>3bdbaa0e-faa2-4ad2-98f4-bcfeb0237054</TaskNo>\\n  <RequestId>EEB28AA7-6051-4E71-B2CC-DAAFB2DF6BCA</RequestId>\\n</SaveSingleTaskForCancelingTransferOutResponse>e>","errorExample":"<SaveSingleTaskForCancelingTransferOutResponse>\\n  <TaskNo>3bdbaa0e-faa2-4ad2-98f4-bcfeb0237054</TaskNo>\\n  <RequestId>EEB28AA7-6051-4E71-B2CC-DAAFB2DF6BCA</RequestId>\\n</SaveSingleTaskForCancelingTransferOutResponse>e>"}]',
      'title' => '提交取消域名转出任务',
      'description' => '任务执行结果请通过查询任务详情[QueryTaskDetailList](~~67710~~)接口来查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TransferInReenterTransferAuthorizationCode' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        3 => 
        array (
          'name' => 'TransferAuthorizationCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转移密码。',
            'type' => 'string',
            'required' => true,
            'example' => 'testCode',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"F7C42D02-2FBE-475A-85A2-872865926EDC\\"\\n}"},{"type":"xml","example":"<TransferInReenterTransferAuthorizationCodeResponse>\\n  <RequestId>A8734DAA-56BB-4181-825E-8EE1F0C85DF4</RequestId>\\n</TransferInReenterTransferAuthorizationCodeResponse>","errorExample":"<TransferInReenterTransferAuthorizationCodeResponse>\\n  <RequestId>A8734DAA-56BB-4181-825E-8EE1F0C85DF4</RequestId>\\n</TransferInReenterTransferAuthorizationCodeResponse>"}]',
      'title' => '域名转入重新输入转移密码',
      'summary' => '调用TransferInReenterTransferAuthorizationCode域名转入重新输入转移密码。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TransferInResendMailToken' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60\\"\\n}","errorExample":"{ \\"RequestId\\":\\"F7C42D02-2FBE-475A-85A2-872865926EDC\\"}"},{"type":"xml","example":"<TransferInResendMailTokenResponse>\\n  <RequestId>3E5DAABD-DED4-4624-A776-D04303F24C9A</RequestId>\\n</TransferInResendMailTokenResponse>","errorExample":"<TransferInResendMailTokenResponse>\\n  <RequestId>3E5DAABD-DED4-4624-A776-D04303F24C9A</RequestId>\\n</TransferInResendMailTokenResponse>"}]',
      'title' => '域名转入重新发送验证邮件',
      'summary' => '调用TransferInResendMailToken域名转入重新发送验证邮件。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TransferInRefetchWhoisEmail' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '40F46D3D-F4F3-4CCB-AC30-2DD20E32E528',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"C01181CC-D03C-465F-B89F-C78B721567D0\\"\\n}"},{"type":"xml","example":"<TransferInRefetchWhoisEmailResponse>\\n  <RequestId>9625281F-1176-4F57-ACBB-3AEF6E407AFE</RequestId>\\n</TransferInRefetchWhoisEmailResponse>","errorExample":"<TransferInRefetchWhoisEmailResponse>\\n  <RequestId>9625281F-1176-4F57-ACBB-3AEF6E407AFE</RequestId>\\n</TransferInRefetchWhoisEmailResponse>"}]',
      'title' => '进行域名转入邮箱验证',
      'summary' => '调用TransferInRefetchWhoisEmail进行域名转入邮箱验证。',
      'description' => '系统会自动获取whois中的域名持有者邮箱，如果邮箱不对或无法获取到邮箱时，将重新抓取whois邮箱。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TransferInCheckMailToken' => 
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
          'name' => 'Token',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮箱中收到的Token。',
            'type' => 'string',
            'required' => true,
            'example' => '3bdbaa0e-faa2-4ad2-98f4-bcfeb0237054',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60',
              ),
              'SuccessList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SuccessDomain' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '验证成功的域名列表。',
                      'type' => 'string',
                      'example' => 'example.com',
                    ),
                  ),
                ),
              ),
              'FailList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'FailDomain' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '验证失败的域名列表。',
                      'type' => 'string',
                      'example' => 'example.com',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60\\",\\n  \\"SuccessList\\": {\\n    \\"SuccessDomain\\": [\\n      \\"example.com\\"\\n    ]\\n  },\\n  \\"FailList\\": {\\n    \\"FailDomain\\": [\\n      \\"example.com\\"\\n    ]\\n  }\\n}","errorExample":"{\\n    \\"FailList\\":{\\n        \\"FailDomain\\":[]\\n    },\\n    \\"RequestId\\":\\"3E5677B5-6F55-4518-9A55-A9CE57313C9D\\",\\n    \\"SuccessList\\":{\\n        \\"SuccessDomain\\":[\\"test.com\\"]\\n    }\\n}"},{"type":"xml","example":"<TransferInCheckMailTokenResponse>\\n  <FailList/>\\n  <RequestId>C99AA313-4A94-4896-915B-4D4043C063DA</RequestId>\\n  <SuccessList>\\n    <SuccessDomain>example.com</SuccessDomain>\\n  </SuccessList>\\n</TransferInCheckMailTokenResponse>","errorExample":"<TransferInCheckMailTokenResponse>\\n  <FailList/>\\n  <RequestId>C99AA313-4A94-4896-915B-4D4043C063DA</RequestId>\\n  <SuccessList>\\n    <SuccessDomain>test.com</SuccessDomain>\\n  </SuccessList>\\n</TransferInCheckMailTokenResponse>"}]',
      'title' => '域名转入验证邮件',
      'summary' => '调用TransferInCheckMailToken验证域名持有者邮件Token。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForQueryingTransferAuthorizationCode' => 
    array (
      'summary' => '调用SaveSingleTaskForQueryingTransferAuthorizationCode提交获取域名转移密码任务。',
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\",\\n  \\"RequestId\\": \\"AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"492D1868-1384-4219-8F8B-7EB44534A72A\\",\\n    \\"TaskNo\\":\\"939b6918-be3b-4c4f-b949-93553da52dca\\"\\n}"},{"type":"xml","example":"<SaveSingleTaskForQueryingTransferAuthorizationCodeResponse>\\n  <TaskNo>3bdbaa0e-faa2-4ad2-98f4-bcfeb0237054</TaskNo>\\n  <RequestId>EEB28AA7-6051-4E71-B2CC-DAAFB2DF6BCA</RequestId>\\n</SaveSingleTaskForQueryingTransferAuthorizationCodeResponse>","errorExample":"<SaveSingleTaskForQueryingTransferAuthorizationCodeResponse>\\n  <TaskNo>3bdbaa0e-faa2-4ad2-98f4-bcfeb0237054</TaskNo>\\n  <RequestId>EEB28AA7-6051-4E71-B2CC-DAAFB2DF6BCA</RequestId>\\n</SaveSingleTaskForQueryingTransferAuthorizationCodeResponse>"}]',
      'title' => '提交获取域名转移密码任务',
      'description' => '任务执行结果请通过查询任务详情[QueryTaskDetailList](~~67710~~)接口来查询，转移密码由对应任务的TaskResult字段返回。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveBatchTaskForTransferProhibitionLock' => 
    array (
      'summary' => '调用SaveBatchTaskForTransferProhibitionLock提交批量禁止转移锁任务。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启关闭状态。取值：
- **true**：开启；
- **false**：关闭。
                           ',
            'type' => 'boolean',
            'required' => true,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '域名列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => true,
            'example' => 'test1.com',
            'maxItems' => 1000,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'F51977F9-2B40-462B-BCCD-CF5BB1E9DB56',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'd3babb0a-c939-4c25-8c65-c47b65f5492a',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f5492a\\",\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\"\\n}","errorExample":"{    \\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f5492a\\",\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchTaskForTransferProhibitionLockResponse>\\n    <TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n    <RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveBatchTaskForTransferProhibitionLockResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchTaskForTransferProhibitionLockResponse>\\n    <TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n    <RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveBatchTaskForTransferProhibitionLockResponse>"}]',
      'title' => '提交批量禁止转移锁任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口来查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForTransferProhibitionLock' => 
    array (
      'summary' => '调用SaveSingleTaskForTransferProhibitionLock提交禁止转移锁任务。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启关闭状态。取值：
- **true**：开启；
- **false**：关闭 。
                           ',
            'type' => 'boolean',
            'required' => true,
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
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'F51977F9-2B40-462B-BCCD-CF5BB1E9DB56',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'd3babb0a-c939-4c25-8c65-c47b65f5492a',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f5492a\\",\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\"\\n}","errorExample":"{    \\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f5492a\\",\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForTransferProhibitionLockResponse>\\n    <TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n    <RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveSingleTaskForTransferProhibitionLockResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForTransferProhibitionLockResponse>\\n    <TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n    <RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveSingleTaskForTransferProhibitionLockResponse>"}]',
      'title' => '提交禁止转移锁任务',
      'description' => '任务执行结果请通过[查询任务详情列表](~~67710~~)接口来查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ConfirmTransferInEmail' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ip',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言，枚举值范围：zh 中文；en 英文。默认为en',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮箱',
            'type' => 'string',
            'required' => true,
            'example' => 'test@test.com',
          ),
        ),
        3 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '域名列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '域名',
              'type' => 'string',
              'required' => false,
              'example' => 'abc.com',
            ),
            'required' => true,
            'example' => 'abc.com',
            'maxItems' => 13,
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
                'description' => '唯一请求识别码',
                'type' => 'string',
                'example' => '40F46D3D-F4F3-4CCB-AC30-2DD20E32E528',
              ),
              'SuccessList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SuccessDomain' => 
                  array (
                    'description' => '成功的域名列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '成功域名',
                      'type' => 'string',
                      'example' => 'test.com',
                    ),
                  ),
                ),
              ),
              'FailList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'FailDomain' => 
                  array (
                    'description' => '失败的域名列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '失败域名',
                      'type' => 'string',
                      'example' => 'test.com',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\",\\n  \\"SuccessList\\": {\\n    \\"SuccessDomain\\": [\\n      \\"test.com\\"\\n    ]\\n  },\\n  \\"FailList\\": {\\n    \\"FailDomain\\": [\\n      \\"test.com\\"\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"Code\\": \\"MissingEmail\\",\\n  \\"HostId\\": \\"domain.aliyuncs.com\\",\\n  \\"Message\\": \\"Email is mandatory for this action.\\",\\n  \\"Recommend\\": \\"https://error-center.aliyun.com/status/search?Keyword=MissingEmail&source=PopGw\\",\\n  \\"RequestId\\": \\"3576F26F-C0F6-46BF-952D-990730D04BCD\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<ConfirmTransferInEmailResponse>\\n    <FailList>\\n        <FailDomain>test.com</FailDomain>\\n        <FailDomain>test.net</FailDomain>\\n    </FailList>\\n    <RequestId>44969CBD-9B1B-437B-B75B-3D125E2B96A3</RequestId>\\n    <SuccessList />\\n</ConfirmTransferInEmailResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<Error>\\n    <RequestId>5BB450C6-BFFE-425F-B853-B5817ABBAE32</RequestId>\\n    <HostId>domain.aliyuncs.com</HostId>\\n    <Code>MissingEmail</Code>\\n    <Message>Email is mandatory for this action.</Message>\\n    <Recommend>\\n        <![CDATA[https://error-center.aliyun.com/status/search?Keyword=MissingEmail&source=PopGw]]>\\n    </Recommend>\\n</Error>"}]',
      'title' => '确认转入邮箱',
      'summary' => '调用ConfirmTransferInEmail确认转入邮箱。',
      'description' => '直接确认转入邮箱',
    ),
    'QueryTransferInByInstanceId' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例编号。',
            'type' => 'string',
            'required' => true,
            'example' => 'S20181T0WLI85212',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '详细域名转入状态。取值：
- **10**：初始状态；
- **11**：已发送邮件验证token链接；
- **19**：token链接已验证成功；
- **20**：已提交命名审核；
- **21**：命名审核失败；
- **29**：命名审核成功；
- **31**：转移密码错误；
- **39**：转入提交成功；
- **50**：客户取消转入；
- **51**：转入失败；
- **52**：转入过期；
- **59**：转入成功。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '11',
              ),
              'TransferAuthorizationCodeSubmissionDate' => 
              array (
                'description' => '转移密码提交成功时间。',
                'type' => 'string',
                'example' => '2018-03-28 00:41:42',
              ),
              'Email' => 
              array (
                'description' => '域名转入确认邮件发送邮箱。',
                'type' => 'string',
                'example' => 'username@example.com',
              ),
              'ProgressBarType' => 
              array (
                'description' => '转移过程进度条类型。取值：
- **0**：同时需要邮箱验证和命名审核；
- **1**：需要邮箱验证不需要命名审核；
- **2**：需要命名审核不需要邮箱验证；
- **3**：不需要邮箱验证不需要命名审核。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60',
              ),
              'InstanceId' => 
              array (
                'description' => '实例编号。',
                'type' => 'string',
                'example' => 'S20181T0WLI85212',
              ),
              'DomainName' => 
              array (
                'description' => '域名。',
                'type' => 'string',
                'example' => 'example.com',
              ),
              'SubmissionDateLong' => 
              array (
                'description' => '转移请求提交时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1514428524669',
              ),
              'SubmissionDate' => 
              array (
                'description' => '转移请求提交时间。',
                'type' => 'string',
                'example' => '2018-03-28 00:41:42',
              ),
              'SimpleTransferInStatus' => 
              array (
                'description' => '转移状态。取值：
- **INIT**：提交转入；
- **AUTHORIZATION**：授权转入（邮箱验证）；
- **NAME_VERIFICATION**：命名审核；
- **PASSWORD_VERIFICATION**：转移密码验证；
- **PENDING**：转入处理中；
- **SUCCESS**：转入成功；
- **FAIL**：转入失败。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'TransferAuthorizationCodeSubmissionDateLong' => 
              array (
                'description' => '转移密码提交成功时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1514428524669',
              ),
              'ExpirationDateLong' => 
              array (
                'description' => '转入过期时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1514428524669',
              ),
              'ExpirationDate' => 
              array (
                'description' => '域名转入过期时间。',
                'type' => 'string',
                'example' => '2018-03-28 00:41:42',
              ),
              'NeedMailCheck' => 
              array (
                'description' => '是否需要邮件验证。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'UserId' => 
              array (
                'description' => '用户编号。',
                'type' => 'string',
                'example' => '123456',
              ),
              'ModificationDate' => 
              array (
                'description' => '转入信息更新时间。',
                'type' => 'string',
                'example' => '2018-03-28 00:41:42',
              ),
              'ResultDateLong' => 
              array (
                'description' => '转移成功或失败的时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1514428524669',
              ),
              'ResultMsg' => 
              array (
                'description' => '转移失败时失败原因描述。',
                'type' => 'string',
                'example' => '您取消了此次域名转入',
              ),
              'WhoisMailStatus' => 
              array (
                'description' => '是否通过whois抓取到域名持有者邮箱。当域名转入处于授权转入（邮箱验证）并且该字段为**false**时，表示未通过whois抓取到域名持有者邮箱，需要等待人工处理。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ModificationDateLong' => 
              array (
                'description' => '转入信息更新时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1514428524669',
              ),
              'ResultCode' => 
              array (
                'description' => '转移失败时失败原因code。取值：
- **clientCancelled**：您取消了此次域名转入；
- **clientRejected**：域名原注册商拒绝了本次域名转入（或您通过原注册商进行了拒绝操作）；
- **serverCancelled**：注册局取消转入；
- **transferProhibited**：域名为禁止转移状态；
- **transferExpired**：您未在有效期内完成相关转入确认；
- **nameVerificationFailed**：域名命名审核未通过；
- **transferSubmitted**：其他用户已经提交域名转入。',
                'type' => 'string',
                'example' => 'clientCancelled',
              ),
              'ResultDate' => 
              array (
                'description' => '转移成功或失败的时间。',
                'type' => 'string',
                'example' => '2018-03-28 00:41:42',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": 11,\\n  \\"TransferAuthorizationCodeSubmissionDate\\": \\"2018-03-28 00:41:42\\",\\n  \\"Email\\": \\"username@example.com\\",\\n  \\"ProgressBarType\\": 0,\\n  \\"RequestId\\": \\"AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60\\",\\n  \\"InstanceId\\": \\"S20181T0WLI85212\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"SubmissionDateLong\\": 1514428524669,\\n  \\"SubmissionDate\\": \\"2018-03-28 00:41:42\\",\\n  \\"SimpleTransferInStatus\\": \\"SUCCESS\\",\\n  \\"TransferAuthorizationCodeSubmissionDateLong\\": 1514428524669,\\n  \\"ExpirationDateLong\\": 1514428524669,\\n  \\"ExpirationDate\\": \\"2018-03-28 00:41:42\\",\\n  \\"NeedMailCheck\\": true,\\n  \\"UserId\\": \\"123456\\",\\n  \\"ModificationDate\\": \\"2018-03-28 00:41:42\\",\\n  \\"ResultDateLong\\": 1514428524669,\\n  \\"ResultMsg\\": \\"您取消了此次域名转入\\",\\n  \\"WhoisMailStatus\\": true,\\n  \\"ModificationDateLong\\": 1514428524669,\\n  \\"ResultCode\\": \\"clientCancelled\\",\\n  \\"ResultDate\\": \\"2018-03-28 00:41:42\\"\\n}","errorExample":""},{"type":"xml","example":"<TransferAuthorizationCodeSubmissionDate>2018-03-28 00:41:42</TransferAuthorizationCodeSubmissionDate>\\n<Status>11</Status>\\n<Email>username@example.com</Email>\\n<ProgressBarType>0</ProgressBarType>\\n<RequestId>AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60</RequestId>\\n<DomainName>example.com</DomainName>\\n<InstanceId>S20181T0WLI85212</InstanceId>\\n<SubmissionDateLong>1514428524669</SubmissionDateLong>\\n<SubmissionDate>2018-03-28 00:41:42</SubmissionDate>\\n<SimpleTransferInStatus>SUCCESS</SimpleTransferInStatus>\\n<TransferAuthorizationCodeSubmissionDateLong>1514428524669</TransferAuthorizationCodeSubmissionDateLong>\\n<ExpirationDateLong>1514428524669</ExpirationDateLong>\\n<ExpirationDate>2018-03-28 00:41:42</ExpirationDate>\\n<NeedMailCheck>true</NeedMailCheck>\\n<UserId>123456</UserId>\\n<ModificationDate>2018-03-28 00:41:42</ModificationDate>\\n<ResultDateLong>1514428524669</ResultDateLong>\\n<WhoisMailStatus>true</WhoisMailStatus>\\n<ResultMsg>您取消了此次域名转入</ResultMsg>\\n<ModificationDateLong>1514428524669</ModificationDateLong>\\n<ResultCode>clientCancelled</ResultCode>\\n<ResultDate>2018-03-28 00:41:42</ResultDate>","errorExample":"<QueryTransferInByInstanceIdResponse>\\n  <InstanceId>S20182F0RED000000</InstanceId>\\n  <WhoisMailStatus>true</WhoisMailStatus>\\n  <UserId>123456</UserId>\\n  <ResultDate>2018-03-28 09:54:39</ResultDate>\\n  <ExpirationDate>2018-04-12 09:51:53</ExpirationDate>\\n  <NeedMailCheck>true</NeedMailCheck>\\n  <Status>50</Status>\\n  <Email/>\\n  <SimpleTransferInStatus>FAIL</SimpleTransferInStatus>\\n  <ResultMsg>You have canceled this domain name transfer in.</ResultMsg>\\n  <RequestId>0D6108ED-7BB3-4898-83D0-44883DE0D3E7</RequestId>\\n  <ModificationDate>2018-03-28 09:54:39</ModificationDate>\\n  <ResultCode>clientCancelled</ResultCode>\\n  <DomainName>test.com</DomainName>\\n  <ProgressBarType>0</ProgressBarType>\\n  <SubmissionDate>2018-03-28 09:51:53</SubmissionDate>\\n</QueryTransferInByInstanceIdResponse>"}]',
      'title' => '根据实例编号查询域名转入信息',
      'summary' => '调用QueryTransferInByInstanceId根据实例编号查询域名转入信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryTransferInList' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'SubmissionStartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '提交域名列表转入的结束时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1514428524669',
          ),
        ),
        3 => 
        array (
          'name' => 'SubmissionEndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '提交域名列表转入的开始时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1514428524669',
          ),
        ),
        4 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名，前缀匹配（模糊查询）。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        5 => 
        array (
          'name' => 'SimpleTransferInStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '转移状态。取值：
- **INIT**：提交转入。
- **AUTHORIZATION**：授权转入（邮箱验证）。
- **NAME_VERIFICATION**：命名审核。
- **PASSWORD_VERIFICATION**：转移密码验证。
- **PENDING**：转入处理中。
- **SUCCESS**：转入成功。
- **FAIL**：转入失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'INIT',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名列表的页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名列表分页的大小。',
            'type' => 'integer',
            'format' => 'int32',
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
              'PrePage' => 
              array (
                'description' => '是否有上一页。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'CurrentPageNum' => 
              array (
                'description' => '当前域名列表的页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60',
              ),
              'PageSize' => 
              array (
                'description' => '域名列表的分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalPageNum' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TransferInInfo' => 
                  array (
                    'description' => '域名转入信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '详细域名转入状态。取值：
- **10**：初始状态。
- **11**：已发送邮件验证token链接。
- **19**：token链接已验证成功。
- **20**：已提交命名审核。
- **21**：命名审核失败。
- **29**：命名审核成功。
- **31**：转移密码错误。
- **39**：转入提交成功。
- **50**：客户取消转入。
- **51**：转入失败。
- **52**：转入过期。
- **59**：转入成功。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '11',
                        ),
                        'UserId' => 
                        array (
                          'description' => '用户编号。',
                          'type' => 'string',
                          'example' => '123456',
                        ),
                        'ModificationDate' => 
                        array (
                          'description' => '域名转入信息的更新时间。
',
                          'type' => 'string',
                          'example' => '2018-03-28 00:41:42',
                        ),
                        'TransferAuthorizationCodeSubmissionDateLong' => 
                        array (
                          'description' => '域名转移密码提交成功的时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514428524669',
                        ),
                        'SubmissionDateLong' => 
                        array (
                          'description' => '域名转移请求提交的时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514428524669',
                        ),
                        'ResultCode' => 
                        array (
                          'description' => '域名转移失败时的失败原因code。取值：
- **clientCancelled**：您取消了此次域名转入。
- **clientRejected**：域名原注册商拒绝了本次域名转入（或您通过原注册商进行了拒绝操作）。
- **serverCancelled**：注册局取消转入。
- **transferProhibited**：域名为禁止转移状态。
- **transferExpired**：您未在有效期内完成相关转入确认。
- **nameVerificationFailed**：域名命名审核未通过。
- **transferSubmitted**：其他用户已经提交域名转入。',
                          'type' => 'string',
                          'example' => 'clientCancelled',
                        ),
                        'NeedMailCheck' => 
                        array (
                          'description' => '是否需要邮件验证。取值：

- **true**：需要。
- **false**：不需要。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'ModificationDateLong' => 
                        array (
                          'description' => '域名转入信息更新的时间戳。
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514428524669',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例编号。
',
                          'type' => 'string',
                          'example' => 'S20181T0WLI85212',
                        ),
                        'DomainName' => 
                        array (
                          'description' => '域名。',
                          'type' => 'string',
                          'example' => 'example.com',
                        ),
                        'ProgressBarType' => 
                        array (
                          'description' => '域名转移过程进度条类型。取值：
- **0**：同时需要邮箱验证和命名审核。
- **1**：需要邮箱验证不需要命名审核。
- **2**：需要命名审核不需要邮箱验证。
- **3**：不需要邮箱验证不需要命名审核。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'ResultMsg' => 
                        array (
                          'description' => '域名转移失败时的失败原因描述。',
                          'type' => 'string',
                          'example' => '您取消了此次域名转入',
                        ),
                        'ResultDateLong' => 
                        array (
                          'description' => '域名转移成功或失败的时间戳。
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514428524669',
                        ),
                        'ExpirationDate' => 
                        array (
                          'description' => '域名转入的过期时间。',
                          'type' => 'string',
                          'example' => '2018-03-28 00:41:42',
                        ),
                        'Email' => 
                        array (
                          'description' => '域名转入确认邮件发送邮箱。
',
                          'type' => 'string',
                          'example' => 'username@example.com',
                        ),
                        'WhoisMailStatus' => 
                        array (
                          'description' => '是否通过whois抓取到域名持有者邮箱。当域名转入处于授权转入（邮箱验证）并且该字段为**false**时，表示未通过whois抓取到域名持有者邮箱，需要等待人工处理。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'TransferAuthorizationCodeSubmissionDate' => 
                        array (
                          'description' => '域名转移密码提交成功的时间。',
                          'type' => 'string',
                          'example' => '2018-03-28 00:41:42',
                        ),
                        'SubmissionDate' => 
                        array (
                          'description' => '域名转移请求的提交时间。
',
                          'type' => 'string',
                          'example' => '2018-03-28 00:41:42',
                        ),
                        'ExpirationDateLong' => 
                        array (
                          'description' => '域名转入过期的时间戳。
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1514428524669',
                        ),
                        'SimpleTransferInStatus' => 
                        array (
                          'description' => '域名转移状态。取值：
- **INIT**：提交转入。
- **AUTHORIZATION**：授权转入（邮箱验证）。
- **NAME_VERIFICATION**：命名审核。
- **PASSWORD_VERIFICATION**：转移密码验证。
- **PENDING**：转入处理中。
- **SUCCESS**：转入成功。
- **FAIL**：转入失败。',
                          'type' => 'string',
                          'example' => 'FAIL',
                        ),
                        'ResultDate' => 
                        array (
                          'description' => '域名转移成功或失败的时间。
',
                          'type' => 'string',
                          'example' => '2018-03-28 00:41:42',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalItemNum' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '40',
              ),
              'NextPage' => 
              array (
                'description' => '是否有下一页。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PrePage\\": false,\\n  \\"CurrentPageNum\\": 1,\\n  \\"RequestId\\": \\"AF7D4DCE-0776-47F2-A9B2-6FB85A87AA60\\",\\n  \\"PageSize\\": 20,\\n  \\"TotalPageNum\\": 2,\\n  \\"Data\\": {\\n    \\"TransferInInfo\\": [\\n      {\\n        \\"Status\\": 11,\\n        \\"UserId\\": \\"123456\\",\\n        \\"ModificationDate\\": \\"2018-03-28 00:41:42\\",\\n        \\"TransferAuthorizationCodeSubmissionDateLong\\": 1514428524669,\\n        \\"SubmissionDateLong\\": 1514428524669,\\n        \\"ResultCode\\": \\"clientCancelled\\",\\n        \\"NeedMailCheck\\": true,\\n        \\"ModificationDateLong\\": 1514428524669,\\n        \\"InstanceId\\": \\"S20181T0WLI85212\\",\\n        \\"DomainName\\": \\"example.com\\",\\n        \\"ProgressBarType\\": 0,\\n        \\"ResultMsg\\": \\"您取消了此次域名转入\\",\\n        \\"ResultDateLong\\": 1514428524669,\\n        \\"ExpirationDate\\": \\"2018-03-28 00:41:42\\",\\n        \\"Email\\": \\"username@example.com\\",\\n        \\"WhoisMailStatus\\": true,\\n        \\"TransferAuthorizationCodeSubmissionDate\\": \\"2018-03-28 00:41:42\\",\\n        \\"SubmissionDate\\": \\"2018-03-28 00:41:42\\",\\n        \\"ExpirationDateLong\\": 1514428524669,\\n        \\"SimpleTransferInStatus\\": \\"FAIL\\",\\n        \\"ResultDate\\": \\"2018-03-28 00:41:42\\"\\n      }\\n    ]\\n  },\\n  \\"TotalItemNum\\": 40,\\n  \\"NextPage\\": true\\n}","errorExample":"{\\n    \\"CurrentPageNum\\":1,\\n    \\"Data\\":{\\n        \\"TransferInInfo\\":[\\n            {\\n                \\"DomainName\\":\\"test.com\\",\\n                \\"Email\\":\\"te****st@alibaba-inc.com\\",\\n                \\"ExpirationDate\\":\\"2018-04-13 15:51:01\\",\\n                \\"InstanceId\\":\\"S20182G180111111\\",\\n                \\"ModificationDate\\":\\"2018-03-29 15:59:02\\",\\n                \\"NeedMailCheck\\":true,\\n                \\"ProgressBarType\\":0,\\n                \\"ResultMsg\\":\\"TransferInFailureReason.null\\",\\n                \\"SimpleTransferInStatus\\":\\"PASSWORD_VERIFICATION\\",\\n                \\"Status\\":31,\\n                \\"SubmissionDate\\":\\"2018-03-29 15:51:01\\",\\n                \\"UserId\\":\\"123456\\",\\n                \\"WhoisMailStatus\\":true\\n            },\\n            {\\n                \\"DomainName\\":\\"btest.com\\",\\n                \\"Email\\":\\"b****i4@test.com\\",\\n                \\"ExpirationDate\\":\\"2018-04-13 14:57:11\\",\\n                \\"InstanceId\\":\\"S20182G15000000\\",\\n                \\"ModificationDate\\":\\"2018-03-29 15:47:37\\",\\n                \\"NeedMailCheck\\":true,\\n                \\"ProgressBarType\\":0,\\n                \\"ResultCode\\":\\"clientCancelled\\",\\n                \\"ResultDate\\":\\"2018-03-29 15:47:37\\",\\n                \\"ResultMsg\\":\\"You have canceled this domain name transfer in.\\",\\n                \\"SimpleTransferInStatus\\":\\"FAIL\\",\\n                \\"Status\\":50,\\n                \\"SubmissionDate\\":\\"2018-03-29 14:57:11\\",\\n                \\"UserId\\":\\"123456\\",\\n                \\"WhoisMailStatus\\":true\\n            }\\n        ]\\n    },\\n    \\"NextPage\\":true,\\n    \\"PageSize\\":2,\\n    \\"PrePage\\":false,\\n    \\"RequestId\\":\\"CC71762B-0A20-4D3A-AD74-C225DB8DBEAE\\",\\n    \\"TotalItemNum\\":87,\\n    \\"TotalPageNum\\":44\\n}"},{"type":"xml","example":"<QueryTransferInListResponse>\\n  <Data>\\n    <TransferInInfo>\\n      <Status>31</Status>\\n      <Email>username@example.com</Email>\\n      <ResultMsg>TransferInFailureReason.null</ResultMsg>\\n      <SimpleTransferInStatus>PASSWORD_VERIFICATION</SimpleTransferInStatus>\\n      <InstanceId>S20182G180111111</InstanceId>\\n      <ModificationDate>2018-03-29 16:31:02</ModificationDate>\\n      <DomainName>example.com</DomainName>\\n      <WhoisMailStatus>true</WhoisMailStatus>\\n      <UserId>123456</UserId>\\n      <ProgressBarType>0</ProgressBarType>\\n      <ExpirationDate>2018-04-13 15:51:01</ExpirationDate>\\n      <NeedMailCheck>true</NeedMailCheck>\\n      <SubmissionDate>2018-03-29 15:51:01</SubmissionDate>\\n    </TransferInInfo>\\n    <TransferInInfo>\\n      <InstanceId>S20182G151111111</InstanceId>\\n      <WhoisMailStatus>true</WhoisMailStatus>\\n      <UserId>123456</UserId>\\n      <ResultDate>2018-03-29 15:47:37</ResultDate>\\n      <ExpirationDate>2018-04-13 14:57:11</ExpirationDate>\\n      <NeedMailCheck>true</NeedMailCheck>\\n      <Status>50</Status>\\n      <Email>username@example.com</Email>\\n      <SimpleTransferInStatus>FAIL</SimpleTransferInStatus>\\n      <ResultMsg>You have canceled this domain name transfer in.</ResultMsg>\\n      <ModificationDate>2018-03-29 15:47:37</ModificationDate>\\n      <ResultCode>clientCancelled</ResultCode>\\n      <DomainName>aliyundoc.com</DomainName>\\n      <ProgressBarType>0</ProgressBarType>\\n      <SubmissionDate>2018-03-29 14:57:11</SubmissionDate>\\n    </TransferInInfo>\\n  </Data>\\n  <TotalItemNum>87</TotalItemNum>\\n  <PageSize>2</PageSize>\\n  <CurrentPageNum>1</CurrentPageNum>\\n  <RequestId>041FEBFE-966C-452E-A21D-38FBE520B93D</RequestId>\\n  <PrePage>false</PrePage>\\n  <TotalPageNum>44</TotalPageNum>\\n  <NextPage>true</NextPage>\\n</QueryTransferInListResponse>","errorExample":"<QueryTransferInListResponse>\\n  <Data>\\n    <TransferInInfo>\\n      <Status>31</Status>\\n      <Email>te****st@alibaba-inc.com</Email>\\n      <ResultMsg>TransferInFailureReason.null</ResultMsg>\\n      <SimpleTransferInStatus>PASSWORD_VERIFICATION</SimpleTransferInStatus>\\n      <InstanceId>S20182G180111111</InstanceId>\\n      <ModificationDate>2018-03-29 16:31:02</ModificationDate>\\n      <DomainName>test.com</DomainName>\\n      <WhoisMailStatus>true</WhoisMailStatus>\\n      <UserId>123456</UserId>\\n      <ProgressBarType>0</ProgressBarType>\\n      <ExpirationDate>2018-04-13 15:51:01</ExpirationDate>\\n      <NeedMailCheck>true</NeedMailCheck>\\n      <SubmissionDate>2018-03-29 15:51:01</SubmissionDate>\\n    </TransferInInfo>\\n    <TransferInInfo>\\n      <InstanceId>S20182G151111111</InstanceId>\\n      <WhoisMailStatus>true</WhoisMailStatus>\\n      <UserId>123456</UserId>\\n      <ResultDate>2018-03-29 15:47:37</ResultDate>\\n      <ExpirationDate>2018-04-13 14:57:11</ExpirationDate>\\n      <NeedMailCheck>true</NeedMailCheck>\\n      <Status>50</Status>\\n      <Email>b****i4@test.com</Email>\\n      <SimpleTransferInStatus>FAIL</SimpleTransferInStatus>\\n      <ResultMsg>You have canceled this domain name transfer in.</ResultMsg>\\n      <ModificationDate>2018-03-29 15:47:37</ModificationDate>\\n      <ResultCode>clientCancelled</ResultCode>\\n      <DomainName>btest.com</DomainName>\\n      <ProgressBarType>0</ProgressBarType>\\n      <SubmissionDate>2018-03-29 14:57:11</SubmissionDate>\\n    </TransferInInfo>\\n  </Data>\\n  <TotalItemNum>87</TotalItemNum>\\n  <PageSize>2</PageSize>\\n  <CurrentPageNum>1</CurrentPageNum>\\n  <RequestId>041FEBFE-966C-452E-A21D-38FBE520B93D</RequestId>\\n  <PrePage>false</PrePage>\\n  <TotalPageNum>44</TotalPageNum>\\n  <NextPage>true</NextPage>\\n</QueryTransferInListResponse>"}]',
      'title' => '查询域名转入列表',
      'summary' => '调用QueryTransferInList查询域名转入列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryTransferOutInfo' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '转出状态。取值：
- **1**：验证手机；
- **2**：验证邮箱；
- **3**：已经获取转移密码；
- **4**：转出处理中（收到注册局转移请求）；
- **5**：转出成功；
- **8**：转出失败。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '8',
              ),
              'Email' => 
              array (
                'description' => '转移密码发送邮箱。',
                'type' => 'string',
                'example' => 'username@example.com',
              ),
              'ExpirationDate' => 
              array (
                'description' => '本次获取转移密码过期时间。',
                'type' => 'string',
                'example' => '2018-04-13 19:57:56',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'BBEC5A50-DFDF-482E-8343-B4EB0105E055',
              ),
              'ResultMsg' => 
              array (
                'description' => '转出失败原因描述。',
                'type' => 'string',
                'example' => 'Transfer out rejected',
              ),
              'PendingRequestDate' => 
              array (
                'description' => '收到注册局转出请求时间。',
                'type' => 'string',
                'example' => '2018-04-13 19:57:56',
              ),
              'ResultCode' => 
              array (
                'description' => '转出失败原因编码。',
                'type' => 'string',
                'example' => 'clientRejected',
              ),
              'TransferAuthorizationCodeSendDate' => 
              array (
                'description' => '转移密码获取时间。',
                'type' => 'string',
                'example' => '2018-04-13 19:57:56',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": 8,\\n  \\"ExpirationDate\\": \\"2018-04-13 19:57:56\\",\\n  \\"PendingRequestDate\\": \\"2018-04-13 19:57:56\\",\\n  \\"RequestId\\": \\"BBEC5A50-DFDF-482E-8343-B4EB0105E055\\",\\n  \\"Email\\": \\"username@example.com\\",\\n  \\"TransferAuthorizationCodeSendDate\\": \\"2018-04-13 19:57:56\\",\\n  \\"ResultCode\\": \\"clientRejected\\",\\n  \\"ResultMsg\\": \\"Transfer out rejected\\"\\n}","errorExample":""},{"type":"xml","example":"<Status>8</Status>\\n<Email>username@example.com</Email>\\n<ExpirationDate>2018-04-13 19:57:56</ExpirationDate>\\n<RequestId>BBEC5A50-DFDF-482E-8343-B4EB0105E055</RequestId>\\n<ResultMsg>Transfer out rejected</ResultMsg>\\n<PendingRequestDate>2018-04-13 19:57:56</PendingRequestDate>\\n<ResultCode>clientRejected</ResultCode>\\n<TransferAuthorizationCodeSendDate>2018-04-13 19:57:56</TransferAuthorizationCodeSendDate>","errorExample":"<QueryTransferOutInfoResponse>\\n  <Status>3</Status>\\n  <RequestId>6F23B2C0-0355-4685-BB39-342956C5118B</RequestId>\\n  <TransferAuthorizationCodeSendDate>2018-03-29 19:57:56</TransferAuthorizationCodeSendDate>\\n  <ExpirationDate>2018-04-13 19:57:56</ExpirationDate>\\n</QueryTransferOutInfoResponse>"}]',
      'title' => '查询域名转出信息',
      'summary' => '调用QueryTransferOutInfo查询域名转出信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
    ),
    'CheckTransferInFeasibility' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可以设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要校验的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'TransferAuthorizationCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名转入密码。',
            'type' => 'string',
            'required' => false,
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
              'CanTransfer' => 
              array (
                'description' => '是否可以转入。取值：
- **true**：可以转入。
- **false**：不可以转入。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'Message' => 
              array (
                'description' => '不可转入时，返回错误描述。',
                'type' => 'string',
                'example' => 'This domain name is in transfer prohibited status, so it cannot be transferred. You can contact your original registrar to change its status.',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'FC0D6B89-2353-4D64-BD80-6606A7DBD7C1',
              ),
              'ProductId' => 
              array (
                'description' => '域名产品的编号。',
                'type' => 'string',
                'example' => '2a',
              ),
              'Code' => 
              array (
                'description' => '不可转入时，返回错误代码。',
                'type' => 'string',
                'example' => 'CheckTransferResult.DomainTransferProhibited',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"CheckTransferResult.DomainTransferProhibited\\",\\n  \\"Message\\": \\"This domain name is in transfer prohibited status, so it cannot be transferred. You can contact your original registrar to change its status.\\",\\n  \\"ProductId\\": \\"2a\\",\\n  \\"RequestId\\": \\"FC0D6B89-2353-4D64-BD80-6606A7DBD7C1\\",\\n  \\"CanTransfer\\": false\\n}","errorExample":"{\\n    \\"CanTransfer\\":true,\\n    \\"ProductId\\":\\"2a\\",\\n    \\"RequestId\\":\\"CE82EB4C-882D-430B-A908-E0BECFC35025\\"\\n}"},{"type":"xml","example":"<CheckTransferInFeasibilityResponse>\\n  <RequestId>60D2283F-36EA-46D4-A38D-15B5A2C455E3</RequestId>\\n  <CanTransfer>true</CanTransfer>\\n  <ProductId>2a</ProductId>\\n</CheckTransferInFeasibilityResponse>","errorExample":"<CheckTransferInFeasibilityResponse>\\n  <RequestId>60D2283F-36EA-46D4-A38D-15B5A2C455E3</RequestId>\\n  <CanTransfer>true</CanTransfer>\\n  <ProductId>2a</ProductId>\\n</CheckTransferInFeasibilityResponse>"}]',
      'title' => '校验域名是否可以转入',
      'summary' => '调用CheckTransferInFeasibility校验域名是否可以转入。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForApplyQuickTransferOutOpenly' => 
    array (
      'summary' => '提交快速转出域名申请任务。',
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
      'operationType' => 'readAndWrite',
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：zh：中文；                                 en：英文。                                 默认为en。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户请求IP',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'D200000-C0B9-4CD3-B92A-9B44A000000',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D200000-C0B9-4CD3-B92A-9B44A000000\\",\\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\"\\n}","type":"json"}]',
      'title' => '提交快速转出域名申请任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~QueryTaskDetailList~~)接口查询。',
    ),
    'SaveBatchTaskForApplyQuickTransferOutOpenly' => 
    array (
      'summary' => '提交批量快速转出域名申请任务。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DomainNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '实例id列表',
            'description' => '域名列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '域名',
              'type' => 'string',
              'required' => false,
              'example' => 'example.cn',
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：zh：中文；                                 en：英文。                                 默认为en。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户请求ip',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'D6CB3623-4726-4947-AC2B-2C6E673B447C',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'd3babb0a-c939-4c25-8c65-c47b65f5492a',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6CB3623-4726-4947-AC2B-2C6E673B447C\\",\\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f5492a\\"\\n}","type":"json"}]',
      'title' => '提交批量快速转出域名申请任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~QueryTaskDetailList~~)接口查询。',
    ),
    'CancelTask' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。
',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务编号。

>任务编号可通过[QueryTaskList](~~67709~~)接口查询。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '7f217ae0-61f5-42e2-a1c3-42bad0124****',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '010E55C9-C64C-4C85-9BB2-7C225ADA6C86',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"010E55C9-C64C-4C85-9BB2-7C225ADA6C86\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelTaskResponse>\\n<code>200</code>\\n<data>\\n    <RequestId>010E55C9-C64C-4C85-9BB2-7C225ADA6C86</RequestId>\\n    <HostId>domain.aliyuncs.com</HostId>\\n    <Code>200</Code>\\n    <Message>success</Message>\\n</data>\\n<name>TaskCancellSuccess</name>\\n<message>success</message>\\n<url>http://127.0.0.1/?AccessKeyId=gZzDF******6ecLAq&amp;Action=CancelTask&amp;Format=JSON&amp;SignatureMethod=HMAC-SHA1&amp;SignatureNonce=25e7f0e5b399081ea10f874e399997f9&amp;SignatureVersion=1.0&amp;TaskNo=43ddadb0-29bc-4183-a0a3-2bede0d8c2e5&amp;Timestamp=2020-01-09T05%3A35%3A05Z&amp;Version=2018-01-29&amp;Signature=ag%2BU7yjbWdkJHC%2FNlbv5sjC6CfU%3D</url>\\n</CancelTaskResponse>","errorExample":""}]',
      'title' => '取消进行中的任务',
      'summary' => '调用CancelTask取消进行中的任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AcknowledgeTaskResult' => 
    array (
      'summary' => '调用AcknowledgeTaskResult确认任务详情结果。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskDetailNo',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '任务详情编号列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '任务详情编号。',
              'type' => 'string',
              'required' => true,
              'example' => '2659c29493e94416b297a7691340ccc4',
            ),
            'required' => true,
            'example' => '2659c29493e94416b297a7691340ccc4',
            'maxItems' => 13,
            'minItems' => 1,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'D6CB3623-4726-4947-AC2B-2C6E673B447C',
              ),
              'Result' => 
              array (
                'description' => '确认成功数量。',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6CB3623-4726-4947-AC2B-2C6E673B447C\\",\\n  \\"Result\\": 1\\n}","errorExample":"{\\n    \\"RequestId\\":\\"270F04F2-6086-4B54-A86B-A1956F231CEC\\",\\n    \\"Result\\":2\\n}"},{"type":"xml","example":"<AcknowledgeTaskResultResponse>\\n  <Result>2</Result>\\n  <RequestId>25DE4410-3E4D-493E-A5E2-927DB738CCEB</RequestId>\\n</AcknowledgeTaskResultResponse>","errorExample":"<AcknowledgeTaskResultResponse>\\n  <Result>2</Result>\\n  <RequestId>25DE4410-3E4D-493E-A5E2-927DB738CCEB</RequestId>\\n</AcknowledgeTaskResultResponse>"}]',
      'title' => '确认任务详情结果',
      'description' => '任务详情结果确认后，将无法从[PollTaskResult](~~69361~~)接口中查询到。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryTaskDetailHistory' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务编号。

> 任务编号可通过[QueryTaskList](~~67709~~)接口查询。',
            'type' => 'string',
            'required' => true,
            'example' => '75addb07-28a3-450e-b5ec-test',
          ),
        ),
        3 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        4 => 
        array (
          'name' => 'DomainNameCursor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名游标。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        5 => 
        array (
          'name' => 'TaskStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态。取值：
- **0**：等待执行。
- **1**：执行中。
- **2**：成功。
- **3**：失败。
                           ',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'TaskDetailNoCursor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务详情游标。',
            'type' => 'string',
            'required' => false,
            'example' => '75addb07-28a3-450e-b5ec',
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
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '548CAE74-88F8-402F-8C12-97E747389C51',
              ),
              'CurrentPageCursor' => 
              array (
                'description' => '当前页游标。',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateTime' => 
                  array (
                    'description' => '最近一次任务详情执行时间。',
                    'type' => 'string',
                    'example' => '2019-07-30 00:00:00',
                  ),
                  'TaskDetailNo' => 
                  array (
                    'description' => '任务详情编号。',
                    'type' => 'string',
                    'example' => '75addb07-28a3-450e-b5ec-2342',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '任务创建时间。',
                    'type' => 'string',
                    'example' => '2019-07-30 00:00:00',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '域名实例编号。
',
                    'type' => 'string',
                    'example' => 'S1234456789',
                  ),
                  'DomainName' => 
                  array (
                    'description' => '域名。',
                    'type' => 'string',
                    'example' => 'example.com',
                  ),
                  'TaskType' => 
                  array (
                    'description' => '任务类型。取值：
- **CHG_HOLDER**：修改所有者信息。
- **CHG_DNS**：修改DNS。
- **SET_WHOIS_PROTECT**：设置隐私保护。
- **UPDATE_ADMIN_CONTACT**：修改管理者信息。
- **UPDATE_BILLING_CONTACT**：修改付费者信息。
- **UPDATE_TECH_CONTACT**：修改技术者信息。
- **SET_UPDATE_PROHIBITED**：设置域名安全锁。
- **SET_TRANSFER_PROHIBITED**：设置域名转移锁。
- **ORDER_ACTIVATE**：创建注册订单。
- **ORDER_RENEW**：创建续费订单。
- **ORDER_REDEEM**：创建赎回订单。
- **CREATE_DNSHOST**：创建DNS host。
- **UPDATE_DNSHOST**：更新DNS host。
- **SYNC_DNSHOST**：同步DNS host。',
                    'type' => 'string',
                    'example' => 'CHG_DNS',
                  ),
                  'TaskNo' => 
                  array (
                    'description' => '任务编号。',
                    'type' => 'string',
                    'example' => '75addb07-28a3-450e-b5ec-test',
                  ),
                  'TaskStatusCode' => 
                  array (
                    'description' => '任务状态码。取值：
- **0**：等待执行。
- **1**：执行中。
- **2**：执行成功。
- **3**：执行失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'TaskStatus' => 
                  array (
                    'description' => '任务状态。取值：
- **WAITING_EXECUTE**：等待执行。
- **EXECUTING**：执行中。
- **EXECUTE_SUCCESS**：执行成功。
- **EXECUTE_FAILURE**：执行失败。',
                    'type' => 'string',
                    'example' => 'EXECUTE_SUCCESS',
                  ),
                  'TaskTypeDescription' => 
                  array (
                    'description' => '任务类型描述。',
                    'type' => 'string',
                    'example' => '修改DNS',
                  ),
                  'TryCount' => 
                  array (
                    'description' => '任务详情重试次数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'ErrorMsg' => 
                  array (
                    'description' => '任务执行结果。',
                    'type' => 'string',
                    'example' => '执行成功',
                  ),
                ),
              ),
              'Objects' => 
              array (
                'description' => '任务详情信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UpdateTime' => 
                    array (
                      'description' => '最近一次任务详情执行时间。',
                      'type' => 'string',
                      'example' => '2019-07-30 00:00:00',
                    ),
                    'TaskDetailNo' => 
                    array (
                      'description' => '任务详情编号。',
                      'type' => 'string',
                      'example' => '75addb07-28a3-450e-b5ec-4234',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '任务创建时间。
',
                      'type' => 'string',
                      'example' => '2019-07-30 00:00:00',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '域名实例编号。',
                      'type' => 'string',
                      'example' => 'S123456789',
                    ),
                    'DomainName' => 
                    array (
                      'description' => '域名。',
                      'type' => 'string',
                      'example' => 'example.com',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '任务类型。取值：
- **CHG_HOLDER**：修改所有者信息。
- **CHG_DNS**：修改DNS。
- **SET_WHOIS_PROTECT**：设置隐私保护。
- **UPDATE_ADMIN_CONTACT**：修改管理者信息。
- **UPDATE_BILLING_CONTACT**：修改付费者信息。
- **UPDATE_TECH_CONTACT**：修改技术者信息。
- **SET_UPDATE_PROHIBITED**：设置域名安全锁。
- **SET_TRANSFER_PROHIBITED**：设置域名转移锁。
- **ORDER_ACTIVATE**：创建注册订单。
- **ORDER_RENEW**：创建续费订单。
- **ORDER_REDEEM**：创建赎回订单。
- **CREATE_DNSHOST**：创建DNS host。
- **UPDATE_DNSHOST**：更新DNS host。
- **SYNC_DNSHOST**：同步DNS host。',
                      'type' => 'string',
                      'example' => 'CHG_DNS',
                    ),
                    'TaskNo' => 
                    array (
                      'description' => '任务编号。',
                      'type' => 'string',
                      'example' => '75addb07-28a3-450e-b5ec-test',
                    ),
                    'TaskStatusCode' => 
                    array (
                      'description' => '任务状态码。取值：
- **0**：等待执行。
- **1**：执行中。
- **2**：执行成功。
- **3**：执行失败。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'TaskStatus' => 
                    array (
                      'description' => '任务状态。取值：
- **WAITING_EXECUTE**：等待执行。
- **EXECUTING**：执行中。
- **EXECUTE_SUCCESS**：执行成功。
- **EXECUTE_FAILURE**：执行失败。',
                      'type' => 'string',
                      'example' => 'EXECUTE_FAILURE',
                    ),
                    'TaskTypeDescription' => 
                    array (
                      'description' => '任务类型描述。',
                      'type' => 'string',
                      'example' => '修改DNS',
                    ),
                    'TryCount' => 
                    array (
                      'description' => '任务详情重试次数。
',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'ErrorMsg' => 
                    array (
                      'description' => '任务执行结果。
',
                      'type' => 'string',
                      'example' => '域名有禁止更新锁',
                    ),
                  ),
                ),
              ),
              'PrePageCursor' => 
              array (
                'description' => '上一页游标。',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateTime' => 
                  array (
                    'description' => '最近一次任务详情执行时间。',
                    'type' => 'string',
                    'example' => '2019-07-30 00:00:00',
                  ),
                  'TaskDetailNo' => 
                  array (
                    'description' => '任务详情编号。',
                    'type' => 'string',
                    'example' => '75addb07-28a3-450e-b5ec-123',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '任务创建时间。
',
                    'type' => 'string',
                    'example' => '2019-07-30 00:00:00',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '域名实例编号。',
                    'type' => 'string',
                    'example' => 'S123456789',
                  ),
                  'DomainName' => 
                  array (
                    'description' => '域名。',
                    'type' => 'string',
                    'example' => 'example.com',
                  ),
                  'TaskType' => 
                  array (
                    'description' => '任务类型。取值：
- **CHG_HOLDER**：修改所有者信息。
- **CHG_DNS**：修改DNS。
- **SET_WHOIS_PROTECT**：设置隐私保护。
- **UPDATE_ADMIN_CONTACT**：修改管理者信息。
- **UPDATE_BILLING_CONTACT**：修改付费者信息。
- **UPDATE_TECH_CONTACT**：修改技术者信息。
- **SET_UPDATE_PROHIBITED**：设置域名安全锁。
- **SET_TRANSFER_PROHIBITED**：设置域名转移锁。
- **ORDER_ACTIVATE**：创建注册订单。
- **ORDER_RENEW**：创建续费订单。
- **ORDER_REDEEM**：创建赎回订单。
- **CREATE_DNSHOST**：创建DNS host。
- **UPDATE_DNSHOST**：更新DNS host。
- **SYNC_DNSHOST**：同步DNS host。',
                    'type' => 'string',
                    'example' => 'CHG_DNS',
                  ),
                  'TaskNo' => 
                  array (
                    'description' => '任务编号。
',
                    'type' => 'string',
                    'example' => '75addb07-28a3-450e-b5ec-test',
                  ),
                  'TaskStatusCode' => 
                  array (
                    'description' => '任务状态码。取值：
- **0**：等待执行。
- **1**：执行中。
- **2**：执行成功。
- **3**：执行失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'TaskStatus' => 
                  array (
                    'description' => '任务状态。取值：
- **WAITING_EXECUTE**：等待执行。
- **EXECUTING**：执行中。
- **EXECUTE_SUCCESS**：执行成功。
- **EXECUTE_FAILURE**：执行失败。',
                    'type' => 'string',
                    'example' => 'EXECUTE_FAILURE',
                  ),
                  'TaskTypeDescription' => 
                  array (
                    'description' => '任务类型描述。',
                    'type' => 'string',
                    'example' => '修改DNS',
                  ),
                  'TryCount' => 
                  array (
                    'description' => '任务详情重试次数。
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'ErrorMsg' => 
                  array (
                    'description' => '任务执行结果。',
                    'type' => 'string',
                    'example' => '域名有禁止更新锁',
                  ),
                ),
              ),
              'NextPageCursor' => 
              array (
                'description' => '下一页游标。',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateTime' => 
                  array (
                    'description' => '最近一次任务详情执行时间。',
                    'type' => 'string',
                    'example' => '2019-07-30 00:00:00',
                  ),
                  'TaskDetailNo' => 
                  array (
                    'description' => '任务详情编号。',
                    'type' => 'string',
                    'example' => '75addb07-28a3-450e-b5ec-2424',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '任务创建时间。
',
                    'type' => 'string',
                    'example' => '2019-07-30 00:00:00',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '域名实例编号。',
                    'type' => 'string',
                    'example' => 'S1234567890',
                  ),
                  'DomainName' => 
                  array (
                    'description' => '域名。',
                    'type' => 'string',
                    'example' => 'example.com',
                  ),
                  'TaskType' => 
                  array (
                    'description' => '任务类型。取值：
- **CHG_HOLDER**：修改所有者信息。
- **CHG_DNS**：修改DNS。
- **SET_WHOIS_PROTECT**：设置隐私保护。
- **UPDATE_ADMIN_CONTACT**：修改管理者信息。
- **UPDATE_BILLING_CONTACT**：修改付费者信息。
- **UPDATE_TECH_CONTACT**：修改技术者信息。
- **SET_UPDATE_PROHIBITED**：设置域名安全锁。
- **SET_TRANSFER_PROHIBITED**：设置域名转移锁。
- **ORDER_ACTIVATE**：创建注册订单。
- **ORDER_RENEW**：创建续费订单。
- **ORDER_REDEEM**：创建赎回订单。
- **CREATE_DNSHOST**：创建DNS host。
- **UPDATE_DNSHOST**：更新DNS host。
- **SYNC_DNSHOST**：同步DNS host。',
                    'type' => 'string',
                    'example' => 'CHG_DNS',
                  ),
                  'TaskNo' => 
                  array (
                    'description' => '任务编号。',
                    'type' => 'string',
                    'example' => '75addb07-28a3-450e-b5ec-test',
                  ),
                  'TaskStatusCode' => 
                  array (
                    'description' => '任务状态码。取值：
- **0**：等待执行。
- **1**：执行中。
- **2**：执行成功。
- **3**：执行失败。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'TaskStatus' => 
                  array (
                    'description' => '任务状态。取值：
- **WAITING_EXECUTE**：等待执行。
- **EXECUTING**：执行中。
- **EXECUTE_SUCCESS**：执行成功。
- **EXECUTE_FAILURE**：执行失败。',
                    'type' => 'string',
                    'example' => 'EXECUTE_FAILURE',
                  ),
                  'TaskTypeDescription' => 
                  array (
                    'description' => '任务类型描述。',
                    'type' => 'string',
                    'example' => '修改DNS',
                  ),
                  'TryCount' => 
                  array (
                    'description' => '任务详情重试次数。
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'ErrorMsg' => 
                  array (
                    'description' => '任务执行结果。',
                    'type' => 'string',
                    'example' => '域名有禁止更新锁',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 2,\\n  \\"RequestId\\": \\"548CAE74-88F8-402F-8C12-97E747389C51\\",\\n  \\"CurrentPageCursor\\": {\\n    \\"UpdateTime\\": \\"2019-07-30 00:00:00\\",\\n    \\"TaskDetailNo\\": \\"75addb07-28a3-450e-b5ec-2342\\",\\n    \\"CreateTime\\": \\"2019-07-30 00:00:00\\",\\n    \\"InstanceId\\": \\"S1234456789\\",\\n    \\"DomainName\\": \\"example.com\\",\\n    \\"TaskType\\": \\"CHG_DNS\\",\\n    \\"TaskNo\\": \\"75addb07-28a3-450e-b5ec-test\\",\\n    \\"TaskStatus\\": \\"EXECUTE_SUCCESS\\",\\n    \\"TaskStatusCode\\": 2,\\n    \\"TaskTypeDescription\\": \\"修改DNS\\",\\n    \\"TryCount\\": 0,\\n    \\"ErrorMsg\\": \\"执行成功\\"\\n  },\\n  \\"NextPageCursor\\": {\\n    \\"UpdateTime\\": \\"2019-07-30 00:00:00\\",\\n    \\"TaskDetailNo\\": \\"75addb07-28a3-450e-b5ec-2424\\",\\n    \\"CreateTime\\": \\"2019-07-30 00:00:00\\",\\n    \\"InstanceId\\": \\"S1234567890\\",\\n    \\"DomainName\\": \\"example.com\\",\\n    \\"TaskType\\": \\"CHG_DNS\\",\\n    \\"TaskNo\\": \\"75addb07-28a3-450e-b5ec-test\\",\\n    \\"TaskStatus\\": \\"EXECUTE_FAILURE\\",\\n    \\"TaskStatusCode\\": 3,\\n    \\"TaskTypeDescription\\": \\"修改DNS\\",\\n    \\"TryCount\\": 5,\\n    \\"ErrorMsg\\": \\"域名有禁止更新锁\\"\\n  },\\n  \\"PrePageCursor\\": {\\n    \\"UpdateTime\\": \\"2019-07-30 00:00:00\\",\\n    \\"TaskDetailNo\\": \\"75addb07-28a3-450e-b5ec-123\\",\\n    \\"CreateTime\\": \\"2019-07-30 00:00:00\\",\\n    \\"InstanceId\\": \\"S123456789\\",\\n    \\"DomainName\\": \\"example.com\\",\\n    \\"TaskType\\": \\"CHG_DNS\\",\\n    \\"TaskNo\\": \\"75addb07-28a3-450e-b5ec-test\\",\\n    \\"TaskStatus\\": \\"EXECUTE_FAILURE\\",\\n    \\"TaskStatusCode\\": 3,\\n    \\"TaskTypeDescription\\": \\"修改DNS\\",\\n    \\"TryCount\\": 5,\\n    \\"ErrorMsg\\": \\"域名有禁止更新锁\\"\\n  },\\n  \\"Objects\\": [\\n    {\\n      \\"UpdateTime\\": \\"2019-07-30 00:00:00\\",\\n      \\"TaskDetailNo\\": \\"75addb07-28a3-450e-b5ec-4234\\",\\n      \\"CreateTime\\": \\"2019-07-30 00:00:00\\",\\n      \\"InstanceId\\": \\"S123456789\\",\\n      \\"DomainName\\": \\"example.com\\",\\n      \\"TaskType\\": \\"CHG_DNS\\",\\n      \\"TaskNo\\": \\"75addb07-28a3-450e-b5ec-test\\",\\n      \\"TaskStatus\\": \\"EXECUTE_FAILURE\\",\\n      \\"TaskStatusCode\\": 3,\\n      \\"TaskTypeDescription\\": \\"修改DNS\\",\\n      \\"TryCount\\": 5,\\n      \\"ErrorMsg\\": \\"域名有禁止更新锁\\"\\n    }\\n  ]\\n}","errorExample":"{\\n  \\"currentPageCursor\\": {},\\n  \\"nextPageCursor\\": {},\\n  \\"objects\\": [],\\n  \\"pageSize\\": 2,\\n  \\"prePageCursor\\": {},\\n  \\"requestId\\": \\"CCE5DABB-48DF-403C-A7A1-A8F8B4F530CA\\"\\n}"},{"type":"xml","example":"<QueryTaskDetailHistoryResponse>\\n<currentPageCursor/>\\n<nextPageCursor/>\\n<pageSize>2</pageSize>\\n<prePageCursor/>\\n<requestId>CCE5DABB-48DF-403C-A7A1-A8F8B4F530CA</requestId>\\n</QueryTaskDetailHistoryResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryTaskDetailHistoryResponse>\\n    <PageSize>2</PageSize>\\n    <RequestId>548CAE74-88F8-402F-8C12-97E747389C51</RequestId>\\n</QueryTaskDetailHistoryResponse>"}]',
      'title' => '分页查询指定域名任务的详情历史列表',
      'summary' => '调用QueryTaskDetailHistory分页查询指定域名任务的详情历史列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PollTaskResult' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务编号。',
            'type' => 'string',
            'required' => false,
            'example' => '75addb07-28a3-450e-b5ec-test',
          ),
        ),
        3 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名实例编号。

信息模板创建成功后由系统自动生成，您可以调用[QueryRegistrantProfiles](~~67701~~)接口查询信息模板编号。',
            'type' => 'string',
            'required' => false,
            'example' => 'S20181T0WLI85212',
          ),
        ),
        5 => 
        array (
          'name' => 'TaskResultStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务结果类型，取值：
- **2**：成功。
- **3**：失败。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
            'enum' => 
            array (
              0 => '2',
              1 => '3',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小。最大值为**1000**。',
            'type' => 'integer',
            'format' => 'int32',
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
              'PrePage' => 
              array (
                'description' => '是否有上一页。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'CurrentPageNum' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'E879DC07-38EE-4408-9F33-73B30CD965CD',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPageNum' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TaskDetail' => 
                  array (
                    'description' => '任务详情列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UpdateTime' => 
                        array (
                          'description' => '最近一次任务详情执行时间。',
                          'type' => 'string',
                          'example' => '2018-03-26 15:22:18',
                        ),
                        'TaskDetailNo' => 
                        array (
                          'description' => '任务详情编号。',
                          'type' => 'string',
                          'example' => '15fee9d10d514bada66bd08c5723c583',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '任务创建时间。',
                          'type' => 'string',
                          'example' => '2018-03-26 15:08:20',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '域名实例编号。',
                          'type' => 'string',
                          'example' => 'S201817141000000',
                        ),
                        'DomainName' => 
                        array (
                          'description' => '域名。',
                          'type' => 'string',
                          'example' => 'example.com',
                        ),
                        'TaskType' => 
                        array (
                          'description' => '任务类型。',
                          'type' => 'string',
                          'example' => 'CHG_DNS',
                        ),
                        'TaskNo' => 
                        array (
                          'description' => '任务编号。',
                          'type' => 'string',
                          'example' => 'b95bc334-f7d8-4f39-8a62-4c4302a243d8',
                        ),
                        'TaskResult' => 
                        array (
                          'description' => '任务结果。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'TaskStatusCode' => 
                        array (
                          'description' => '任务状态码。可能值：
- **0**：等待执行。
- **1**：执行中。
- **2**：执行成功。
- **3**：执行失败。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'TaskStatus' => 
                        array (
                          'description' => '任务状态。可能值：
- **WAITING_EXECUTE**：等待执行。
- **EXECUTING**：执行中。
- **EXECUTE_SUCCESS**：执行成功。
- **EXECUTE_FAILURE**：执行失败。',
                          'type' => 'string',
                          'example' => 'EXECUTE_SUCCESS',
                        ),
                        'TaskTypeDescription' => 
                        array (
                          'description' => '任务类型描述。如果切换了Lang参数，该字段会切换语言。',
                          'type' => 'string',
                          'example' => '修改DNS',
                        ),
                        'TryCount' => 
                        array (
                          'description' => '任务详情重试次数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'ErrorMsg' => 
                        array (
                          'description' => '任务执行失败消息。',
                          'type' => 'string',
                          'example' => 'The operation is successful.',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalItemNum' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'NextPage' => 
              array (
                'description' => '是否有下一页。',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PrePage\\": false,\\n  \\"CurrentPageNum\\": 1,\\n  \\"RequestId\\": \\"E879DC07-38EE-4408-9F33-73B30CD965CD\\",\\n  \\"PageSize\\": 1,\\n  \\"TotalPageNum\\": 10,\\n  \\"Data\\": {\\n    \\"TaskDetail\\": [\\n      {\\n        \\"UpdateTime\\": \\"2018-03-26 15:22:18\\",\\n        \\"TaskDetailNo\\": \\"15fee9d10d514bada66bd08c5723c583\\",\\n        \\"CreateTime\\": \\"2018-03-26 15:08:20\\",\\n        \\"InstanceId\\": \\"S201817141000000\\",\\n        \\"DomainName\\": \\"example.com\\",\\n        \\"TaskType\\": \\"CHG_DNS\\",\\n        \\"TaskNo\\": \\"b95bc334-f7d8-4f39-8a62-4c4302a243d8\\",\\n        \\"TaskResult\\": \\"test\\",\\n        \\"TaskStatusCode\\": 2,\\n        \\"TaskStatus\\": \\"EXECUTE_SUCCESS\\",\\n        \\"TaskTypeDescription\\": \\"修改DNS\\",\\n        \\"TryCount\\": 0,\\n        \\"ErrorMsg\\": \\"The operation is successful.\\"\\n      }\\n    ]\\n  },\\n  \\"TotalItemNum\\": 10,\\n  \\"NextPage\\": false\\n}","errorExample":"{\\n    \\"CurrentPageNum\\":1,\\n    \\"Data\\":{\\n        \\"TaskDetail\\":[{\\n            \\"CreateTime\\":\\"2018-03-26 15:08:20\\",\\n            \\"DomainName\\":\\"test.com\\",\\n            \\"ErrorMsg\\":\\"The operation is successful.\\",\\n            \\"InstanceId\\":\\"S201817141000000\\",\\n            \\"TaskDetailNo\\":\\"15fee9d10d514bada66bd08c5723c583\\",\\n            \\"TaskNo\\":\\"b95bc334-f7d8-4f39-8a62-4c4302a243d8\\",\\n            \\"TaskStatus\\":\\"EXECUTE_SUCCESS\\",\\n            \\"TaskStatusCode\\":2,\\n            \\"TaskType\\":\\"CHG_DNS\\",\\n            \\"TaskTypeDescription\\":\\"DNS Modification\\",\\n            \\"TryCount\\":0,\\n            \\"UpdateTime\\":\\"2018-03-26 15:22:18\\"\\n        }]\\n    },\\n    \\"PageSize\\":1,\\n    \\"RequestId\\":\\"E879DC07-38EE-4408-9F33-73B30CD965CD\\",\\n    \\"TotalItemNum\\":10,\\n    \\"TotalPageNum\\":10\\n}"},{"type":"xml","example":"<PollTaskResultResponse>\\n  <Data>\\n    <TaskDetail>\\n      <TryCount>0</TryCount>\\n      <TaskDetailNo>15fee9d10d514bada66bd08c5723c583</TaskDetailNo>\\n      <TaskNo>b95bc334-f7d8-4f39-8a62-4c4302a243d8</TaskNo>\\n      <CreateTime>2018-03-26 15:08:20</CreateTime>\\n      <InstanceId>S201817141000000</InstanceId>\\n      <UpdateTime>2018-03-26 15:22:18</UpdateTime>\\n      <TaskStatus>EXECUTE_SUCCESS</TaskStatus>\\n      <DomainName>example.com</DomainName>\\n      <TaskTypeDescription>DNS Modification</TaskTypeDescription>\\n      <TaskStatusCode>2</TaskStatusCode>\\n      <ErrorMsg>The operation is successful.</ErrorMsg>\\n      <TaskType>CHG_DNS</TaskType>\\n    </TaskDetail>\\n  </Data>\\n  <TotalItemNum>10</TotalItemNum>\\n  <PageSize>1</PageSize>\\n  <CurrentPageNum>1</CurrentPageNum>\\n  <RequestId>C2CB6161-7971-4EB6-BC16-92A2BA3816D9</RequestId>\\n  <TotalPageNum>10</TotalPageNum>\\n</PollTaskResultResponse>","errorExample":"<PollTaskResultResponse>\\n  <Data>\\n    <TaskDetail>\\n      <TryCount>0</TryCount>\\n      <TaskDetailNo>15fee9d10d514bada66bd08c5723c583</TaskDetailNo>\\n      <TaskNo>b95bc334-f7d8-4f39-8a62-4c4302a243d8</TaskNo>\\n      <CreateTime>2018-03-26 15:08:20</CreateTime>\\n      <InstanceId>S201817141000000</InstanceId>\\n      <UpdateTime>2018-03-26 15:22:18</UpdateTime>\\n      <TaskStatus>EXECUTE_SUCCESS</TaskStatus>\\n      <DomainName>test.com</DomainName>\\n      <TaskTypeDescription>DNS Modification</TaskTypeDescription>\\n      <TaskStatusCode>2</TaskStatusCode>\\n      <ErrorMsg>The operation is successful.</ErrorMsg>\\n      <TaskType>CHG_DNS</TaskType>\\n    </TaskDetail>\\n  </Data>\\n  <TotalItemNum>10</TotalItemNum>\\n  <PageSize>1</PageSize>\\n  <CurrentPageNum>1</CurrentPageNum>\\n  <RequestId>C2CB6161-7971-4EB6-BC16-92A2BA3816D9</RequestId>\\n  <TotalPageNum>10</TotalPageNum>\\n</PollTaskResultResponse>"}]',
      'title' => '获取执行完成任务详情',
      'summary' => '调用PollTaskResult获取已经执行完成（包含执行成功和执行失败并超过重试次数）的域名任务详情列表。',
      'description' => '该接口需要配合[AcknowledgeTaskResult](~~AcknowledgeTaskResult~~)确认任务结果。任务结果确认后，对应任务记录将无法从该接口查询到。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryTaskList' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'BeginCreateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询创建日期范围的开始时间，UTC时间1970年1月1日0点距离现在的毫秒数，目前只支持按天查询。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndCreateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询创建日期范围的结束时间，UTC时间1970年1月1日0点距离现在的毫秒数，目前只支持按天查询。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
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
              'PrePage' => 
              array (
                'description' => '是否有上一页。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'CurrentPageNum' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '8D7D294A-8E99-481F-B64C-017EFC793059',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalPageNum' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '22',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TaskInfo' => 
                  array (
                    'description' => '任务列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TaskType' => 
                        array (
                          'description' => '任务类型。取值：
- **CHG_HOLDER**：修改所有者信息。
- **CHG_DNS**：修改DNS。
- **SET_WHOIS_PROTECT**：设置隐私保护。
- **UPDATE_ADMIN_CONTACT**：修改管理者信息。
- **UPDATE_BILLING_CONTACT**：修改付费者信息。
- **UPDATE_TECH_CONTACT**：修改技术者信息。
- **SET_UPDATE_PROHIBITED**：设置域名安全锁。
- **SET_TRANSFER_PROHIBITED**：设置域名转移锁。
- **ORDER_ACTIVATE**：创建注册订单。
- **ORDER_RENEW**：创建续费订单。
- **ORDER_REDEEM**：创建赎回订单。
- **CREATE_DNSHOST**：创建DNS host。
- **UPDATE_DNSHOST**：更新DNS host。
- **SYNC_DNSHOST**：同步DNS host。',
                          'type' => 'string',
                          'example' => 'CREATE_DNSHOST',
                        ),
                        'TaskCancelStatus' => 
                        array (
                          'description' => '任务取消状态。取值：
- **INIT**：未取消。
- **CANCELLING**：取消中。
- **COMPLETE**：已完成。',
                          'type' => 'string',
                          'example' => 'INIT',
                        ),
                        'TaskNo' => 
                        array (
                          'description' => '任务编号。',
                          'type' => 'string',
                          'example' => '8b1cd755-4928-4b02-adee-e5d41d7b1939',
                        ),
                        'TaskCancelStatusCode' => 
                        array (
                          'description' => '任务取消状态编号。取值：
- **0**：未取消。
- **1**：取消中。
- **2**：已完成。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'TaskStatusCode' => 
                        array (
                          'description' => '任务状态码。取值：
- **1**：等待执行。
- **2**：执行中。
- **3**：执行完成。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'TaskStatus' => 
                        array (
                          'description' => '任务状态。取值：
- **WAITING_EXECUTE**：等待执行。
- **EXECUTING**：执行中。
- **COMPLETE**：执行完成。',
                          'type' => 'string',
                          'example' => 'COMPLETE',
                        ),
                        'TaskTypeDescription' => 
                        array (
                          'description' => '任务类型描述。',
                          'type' => 'string',
                          'example' => '创建DNS host',
                        ),
                        'TaskNum' => 
                        array (
                          'description' => '任务包含域名数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '任务创建时间。',
                          'type' => 'string',
                          'example' => 'Dec 26,2017 11:00:54',
                        ),
                        'Clientip' => 
                        array (
                          'description' => '提交任务时用户IP。',
                          'type' => 'string',
                          'example' => '127.0.0.1',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalItemNum' => 
              array (
                'description' => '总条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '43',
              ),
              'NextPage' => 
              array (
                'description' => '是否有下一页。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PrePage\\": false,\\n  \\"CurrentPageNum\\": 1,\\n  \\"RequestId\\": \\"8D7D294A-8E99-481F-B64C-017EFC793059\\",\\n  \\"PageSize\\": 2,\\n  \\"TotalPageNum\\": 22,\\n  \\"Data\\": {\\n    \\"TaskInfo\\": [\\n      {\\n        \\"TaskType\\": \\"CREATE_DNSHOST\\",\\n        \\"TaskCancelStatus\\": \\"INIT\\",\\n        \\"TaskNo\\": \\"8b1cd755-4928-4b02-adee-e5d41d7b1939\\",\\n        \\"TaskCancelStatusCode\\": 0,\\n        \\"TaskStatusCode\\": 1,\\n        \\"TaskStatus\\": \\"COMPLETE\\",\\n        \\"TaskTypeDescription\\": \\"创建DNS host\\",\\n        \\"TaskNum\\": 1,\\n        \\"CreateTime\\": \\"Dec 26,2017 11:00:54\\",\\n        \\"Clientip\\": \\"127.0.0.1\\"\\n      }\\n    ]\\n  },\\n  \\"TotalItemNum\\": 43,\\n  \\"NextPage\\": true\\n}","errorExample":"{\\n  \\"CurrentPageNum\\": 1,\\n  \\"Data\\": {\\n    \\"TaskInfo\\": [\\n      {\\n        \\"Clientip\\": \\"127.0.0.1\\",\\n        \\"CreateTime\\": \\"Dec 26,2017 11:00:54\\",\\n        \\"TaskNo\\": \\"8b1cd755-4928-4b02-adee-e5d41d7b1939\\",\\n        \\"TaskNum\\": 1,\\n        \\"TaskStatus\\": \\"COMPLETE\\",\\n        \\"TaskType\\": \\"CREATE_DNSHOST\\"\\n      },\\n      {\\n        \\"Clientip\\": \\"127.0.0.1\\",\\n        \\"CreateTime\\": \\"Dec 26,2017 11:00:54\\",\\n        \\"TaskNo\\": \\"b0069db5-db21-4e57-842a-260c370a37e2\\",\\n        \\"TaskNum\\": 2,\\n        \\"TaskStatus\\": \\"COMPLETE\\",\\n        \\"TaskType\\": \\"CHG_DNS\\"\\n      }\\n    ]\\n  },\\n  \\"PageSize\\": 2,\\n  \\"RequestId\\": \\"85C735DC-872F-423B-A728-C20C2924D3C6\\",\\n  \\"TotalItemNum\\": 43,\\n  \\"TotalPageNum\\": 22\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryTaskListResponse>\\n    <Data>\\n        <TaskInfo>\\n            <Clientip>127.0.0.1</Clientip>\\n            <TaskNo>8b1cd755-4928-4b02-adee-e5d41d7b1939</TaskNo>\\n            <CreateTime>Dec 26,2017 11:00:54</CreateTime>\\n            <TaskStatus>COMPLETE</TaskStatus>\\n            <TaskNum>1</TaskNum>\\n            <TaskType>CREATE_DNSHOST</TaskType>\\n        </TaskInfo>\\n        <TaskInfo>\\n            <Clientip>127.0.0.1</Clientip>\\n            <TaskNo>b0069db5-db21-4e57-842a-260c370a37e2</TaskNo>\\n            <CreateTime>Dec 26,2017 11:00:54</CreateTime>\\n            <TaskStatus>COMPLETE</TaskStatus>\\n            <TaskNum>2</TaskNum>\\n            <TaskType>CHG_DNS</TaskType>\\n        </TaskInfo>\\n    </Data>\\n    <TotalItemNum>43</TotalItemNum>\\n    <PageSize>2</PageSize>\\n    <CurrentPageNum>1</CurrentPageNum>\\n    <RequestId>8D7D294A-8E99-481F-B64C-017EFC793059</RequestId>\\n    <TotalPageNum>22</TotalPageNum>\\n</QueryTaskListResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryTaskListResponse>\\n    <Data>\\n        <TaskInfo>\\n            <Clientip>127.0.0.1</Clientip>\\n            <TaskNo>8b1cd755-4928-4b02-adee-e5d41d7b1939</TaskNo>\\n            <CreateTime>Dec 26,2017 11:00:54</CreateTime>\\n            <TaskStatus>COMPLETE</TaskStatus>\\n            <TaskNum>1</TaskNum>\\n            <TaskType>CREATE_DNSHOST</TaskType>\\n        </TaskInfo>\\n        <TaskInfo>\\n            <Clientip>127.0.0.1</Clientip>\\n            <TaskNo>b0069db5-db21-4e57-842a-260c370a37e2</TaskNo>\\n            <CreateTime>Dec 26,2017 11:00:54</CreateTime>\\n            <TaskStatus>COMPLETE</TaskStatus>\\n            <TaskNum>2</TaskNum>\\n            <TaskType>CHG_DNS</TaskType>\\n        </TaskInfo>\\n    </Data>\\n    <TotalItemNum>43</TotalItemNum>\\n    <PageSize>2</PageSize>\\n    <CurrentPageNum>1</CurrentPageNum>\\n    <RequestId>8D7D294A-8E99-481F-B64C-017EFC793059</RequestId>\\n    <TotalPageNum>22</TotalPageNum>\\n</QueryTaskListResponse>"}]',
      'title' => '分页查询自己账号下的域名任务列表',
      'summary' => '调用QueryTaskList分页查询自己账号下的域名任务列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryTaskInfoHistory' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可以设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'BeginCreateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询创建日期范围的开始时间，计算方式为UTC时间1970年1月1日0点距离现在的毫秒数，目前只支持按天查询。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndCreateTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询创建日期范围的结束时间，UTC时间1970年1月1日0点距离现在的毫秒数，目前只支持按天查询。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'CreateTimeCursor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建日期的游标（技术参数）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        6 => 
        array (
          'name' => 'TaskNoCursor',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务光标，翻页时传入对应页游标中的任务编号（技术参数）。',
            'type' => 'string',
            'required' => false,
            'example' => 'aa634d3f-927e-4d17-9d2c-test',
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
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'EB3FCCBA-CA1F-4D31-9F34-test',
              ),
              'CurrentPageCursor' => 
              array (
                'description' => '当前页的游标。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskType' => 
                  array (
                    'description' => '任务类型。取值：
- **CHG_HOLDER**：修改所有者信息；
- **CHG_DNS**：修改DNS；
- **SET_WHOIS_PROTECT**：设置隐私保护；
- **UPDATE_ADMIN_CONTACT**：修改管理者信息；
- **UPDATE_BILLING_CONTACT**：修改付费者信息；
- **UPDATE_TECH_CONTACT**：修改技术者信息；
- **SET_UPDATE_PROHIBITED**：设置域名安全锁；
- **SET_TRANSFER_PROHIBITED**：设置域名转移锁；
- **ORDER_ACTIVATE**：创建注册订单；
- **ORDER_RENEW**：创建续费订单；
- **ORDER_REDEEM**：创建赎回订单；
- **CREATE_DNSHOST**：创建DNS host；
- **UPDATE_DNSHOST**：更新DNS host；
- **UPDATE_REGISTRANT_CONTACT**：修改注册联系人；
- **DELETE_DOMAIN**：删除域名；
- **SYNC_DNSHOST**：同步DNS host。',
                    'type' => 'string',
                    'example' => 'CHG_DNS',
                  ),
                  'TaskNo' => 
                  array (
                    'description' => '任务编号。',
                    'type' => 'string',
                    'example' => 'aa634d3f-927e-4d17-9d2c-test',
                  ),
                  'TaskStatusCode' => 
                  array (
                    'description' => '任务状态码。取值：
- **1**：等待执行；
- **2**：执行中；
- **3**：执行完成。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'TaskStatus' => 
                  array (
                    'description' => '任务状态。取值：
- **WAITING_EXECUTE**；等待执行；
- **EXECUTING**；执行中；
- **COMPLETE**；执行完成。',
                    'type' => 'string',
                    'example' => 'COMPLETE',
                  ),
                  'TaskTypeDescription' => 
                  array (
                    'description' => '任务类型描述。',
                    'type' => 'string',
                    'example' => '修改DNS',
                  ),
                  'TaskNum' => 
                  array (
                    'description' => '任务包含域名数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '任务创建时间。
',
                    'type' => 'string',
                    'example' => '2017-11-01 17:22:51',
                  ),
                  'CreateTimeLong' => 
                  array (
                    'description' => '任务创建时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1509528171000',
                  ),
                  'Clientip' => 
                  array (
                    'description' => '提交任务时用户IP。',
                    'type' => 'string',
                    'example' => '127.0.0.1',
                  ),
                ),
              ),
              'Objects' => 
              array (
                'description' => '任务信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskType' => 
                    array (
                      'description' => '任务类型。取值：
- **CHG_HOLDER**：修改所有者信息；
- **CHG_DNS**：修改DNS；
- **SET_WHOIS_PROTECT**：设置隐私保护；
- **UPDATE_ADMIN_CONTACT**：修改管理者信息；
- **UPDATE_BILLING_CONTACT**：修改付费者信息；
- **UPDATE_TECH_CONTACT**：修改技术者信息；
- **SET_UPDATE_PROHIBITED**：设置域名安全锁；
- **SET_TRANSFER_PROHIBITED**：设置域名转移锁；
- **ORDER_ACTIVATE**：创建注册订单；
- **ORDER_RENEW**：创建续费订单；
- **ORDER_REDEEM**：创建赎回订单；
- **CREATE_DNSHOST**：创建DNS host；
- **UPDATE_DNSHOST**：更新DNS host；
- **UPDATE_REGISTRANT_CONTACT**：修改注册联系人；
- **DELETE_DOMAIN**：删除域名；
- **SYNC_DNSHOST**：同步DNS host。',
                      'type' => 'string',
                      'example' => 'CHG_DNS',
                    ),
                    'TaskNo' => 
                    array (
                      'description' => '任务编号。',
                      'type' => 'string',
                      'example' => 'aa634d3f-927e-4d17-9d2c-test',
                    ),
                    'TaskStatusCode' => 
                    array (
                      'description' => '任务状态码。取值：
- **1**：等待执行；
- **2**：执行中；
- **3**：执行完成。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'TaskStatus' => 
                    array (
                      'description' => '任务状态。取值：
- **WAITING_EXECUTE**；等待执行；
- **EXECUTING**；执行中；
- **COMPLETE**；执行完成。',
                      'type' => 'string',
                      'example' => 'COMPLETE',
                    ),
                    'TaskTypeDescription' => 
                    array (
                      'description' => '任务类型描述。',
                      'type' => 'string',
                      'example' => '修改DNS',
                    ),
                    'TaskNum' => 
                    array (
                      'description' => '任务包含域名数量。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '任务创建时间。
',
                      'type' => 'string',
                      'example' => '2017-11-01 17:22:51',
                    ),
                    'CreateTimeLong' => 
                    array (
                      'description' => '任务创建时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1509528171000',
                    ),
                    'Clientip' => 
                    array (
                      'description' => '提交任务时用户IP。
',
                      'type' => 'string',
                      'example' => '127.0.0.1',
                    ),
                  ),
                ),
              ),
              'PrePageCursor' => 
              array (
                'description' => '上一页游标。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskType' => 
                  array (
                    'description' => '任务类型。取值：
- **CHG_HOLDER**：修改所有者信息；
- **CHG_DNS**：修改DNS；
- **SET_WHOIS_PROTECT**：设置隐私保护；
- **UPDATE_ADMIN_CONTACT**：修改管理者信息；
- **UPDATE_BILLING_CONTACT**：修改付费者信息；
- **UPDATE_TECH_CONTACT**：修改技术者信息；
- **SET_UPDATE_PROHIBITED**：设置域名安全锁；
- **SET_TRANSFER_PROHIBITED**：设置域名转移锁；
- **ORDER_ACTIVATE**：创建注册订单；
- **ORDER_RENEW**：创建续费订单；
- **ORDER_REDEEM**：创建赎回订单；
- **CREATE_DNSHOST**：创建DNS host；
- **UPDATE_DNSHOST**：更新DNS host；
- **UPDATE_REGISTRANT_CONTACT**：修改注册联系人；
- **DELETE_DOMAIN**：删除域名；
- **SYNC_DNSHOST**：同步DNS host。',
                    'type' => 'string',
                    'example' => 'CHG_DNS',
                  ),
                  'TaskNo' => 
                  array (
                    'description' => '任务编号。',
                    'type' => 'string',
                    'example' => 'f9baa3d5-33b9-4c81-8847-test',
                  ),
                  'TaskStatusCode' => 
                  array (
                    'description' => '任务状态码。取值：
- **1**：等待执行；
- **2**：执行中；
- **3**：执行完成。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'TaskStatus' => 
                  array (
                    'description' => '任务状态。取值：
- **WAITING_EXECUTE**；等待执行；
- **EXECUTING**；执行中；
- **COMPLETE**；执行完成。',
                    'type' => 'string',
                    'example' => 'COMPLETE',
                  ),
                  'TaskTypeDescription' => 
                  array (
                    'description' => '任务类型描述。',
                    'type' => 'string',
                    'example' => '修改DNS',
                  ),
                  'TaskNum' => 
                  array (
                    'description' => '任务包含域名数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '15',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '任务创建时间。',
                    'type' => 'string',
                    'example' => '2017-11-01 17:19:47',
                  ),
                  'CreateTimeLong' => 
                  array (
                    'description' => '任务创建时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1509527987000',
                  ),
                  'Clientip' => 
                  array (
                    'description' => '提交任务时用户IP。',
                    'type' => 'string',
                    'example' => '127.0.0.1',
                  ),
                ),
              ),
              'NextPageCursor' => 
              array (
                'description' => '下一页的游标。',
                'type' => 'object',
                'properties' => 
                array (
                  'TaskType' => 
                  array (
                    'description' => '任务类型。取值：
- **CHG_HOLDER**：修改所有者信息；
- **CHG_DNS**：修改DNS；
- **SET_WHOIS_PROTECT**：设置隐私保护；
- **UPDATE_ADMIN_CONTACT**：修改管理者信息；
- **UPDATE_BILLING_CONTACT**：修改付费者信息；
- **UPDATE_TECH_CONTACT**：修改技术者信息；
- **SET_UPDATE_PROHIBITED**：设置域名安全锁；
- **SET_TRANSFER_PROHIBITED**：设置域名转移锁；
- **ORDER_ACTIVATE**：创建注册订单；
- **ORDER_RENEW**：创建续费订单；
- **ORDER_REDEEM**：创建赎回订单；
- **CREATE_DNSHOST**：创建DNS host；
- **UPDATE_DNSHOST**：更新DNS host；
- **UPDATE_REGISTRANT_CONTACT**：修改注册联系人；
- **DELETE_DOMAIN**：删除域名；
- **SYNC_DNSHOST**：同步DNS host。',
                    'type' => 'string',
                    'example' => 'CHG_DNS',
                  ),
                  'TaskNo' => 
                  array (
                    'description' => '任务编号。',
                    'type' => 'string',
                    'example' => '8f112aa1-98be-48c3-82f8-test',
                  ),
                  'TaskStatusCode' => 
                  array (
                    'description' => '任务状态码。取值：
- **1**：等待执行；
- **2**：执行中；
- **3**：执行完成。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'TaskStatus' => 
                  array (
                    'description' => '任务状态。取值：
- **WAITING_EXECUTE**；等待执行；
- **EXECUTING**；执行中；
- **COMPLETE**；执行完成。',
                    'type' => 'string',
                    'example' => 'COMPLETE',
                  ),
                  'TaskTypeDescription' => 
                  array (
                    'description' => '任务类型描述。',
                    'type' => 'string',
                    'example' => '修改DNS',
                  ),
                  'TaskNum' => 
                  array (
                    'description' => '任务包含域名数量。
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '15',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '任务创建时间。
',
                    'type' => 'string',
                    'example' => '2017-10-27 13:07:07',
                  ),
                  'CreateTimeLong' => 
                  array (
                    'description' => '任务创建时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1509080827000',
                  ),
                  'Clientip' => 
                  array (
                    'description' => '提交任务时用户IP。
',
                    'type' => 'string',
                    'example' => '127.0.0.1',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PageSize\\": 2,\\n  \\"RequestId\\": \\"EB3FCCBA-CA1F-4D31-9F34-test\\",\\n  \\"CurrentPageCursor\\": {\\n    \\"TaskType\\": \\"CHG_DNS\\",\\n    \\"TaskNo\\": \\"aa634d3f-927e-4d17-9d2c-test\\",\\n    \\"TaskStatusCode\\": 3,\\n    \\"TaskStatus\\": \\"COMPLETE\\",\\n    \\"TaskTypeDescription\\": \\"修改DNS\\",\\n    \\"TaskNum\\": 1,\\n    \\"CreateTime\\": \\"2017-11-01 17:22:51\\",\\n    \\"CreateTimeLong\\": 1509528171000,\\n    \\"Clientip\\": \\"127.0.0.1\\"\\n  },\\n  \\"Objects\\": [\\n    {\\n      \\"TaskType\\": \\"CHG_DNS\\",\\n      \\"TaskNo\\": \\"aa634d3f-927e-4d17-9d2c-test\\",\\n      \\"TaskStatusCode\\": 3,\\n      \\"TaskStatus\\": \\"COMPLETE\\",\\n      \\"TaskTypeDescription\\": \\"修改DNS\\",\\n      \\"TaskNum\\": 1,\\n      \\"CreateTime\\": \\"2017-11-01 17:22:51\\",\\n      \\"CreateTimeLong\\": 1509528171000,\\n      \\"Clientip\\": \\"127.0.0.1\\"\\n    }\\n  ],\\n  \\"PrePageCursor\\": {\\n    \\"TaskType\\": \\"CHG_DNS\\",\\n    \\"TaskNo\\": \\"f9baa3d5-33b9-4c81-8847-test\\",\\n    \\"TaskStatusCode\\": 3,\\n    \\"TaskStatus\\": \\"COMPLETE\\",\\n    \\"TaskTypeDescription\\": \\"修改DNS\\",\\n    \\"TaskNum\\": 15,\\n    \\"CreateTime\\": \\"2017-11-01 17:19:47\\",\\n    \\"CreateTimeLong\\": 1509527987000,\\n    \\"Clientip\\": \\"127.0.0.1\\"\\n  },\\n  \\"NextPageCursor\\": {\\n    \\"TaskType\\": \\"CHG_DNS\\",\\n    \\"TaskNo\\": \\"8f112aa1-98be-48c3-82f8-test\\",\\n    \\"TaskStatusCode\\": 3,\\n    \\"TaskStatus\\": \\"COMPLETE\\",\\n    \\"TaskTypeDescription\\": \\"修改DNS\\",\\n    \\"TaskNum\\": 15,\\n    \\"CreateTime\\": \\"2017-10-27 13:07:07\\",\\n    \\"CreateTimeLong\\": 1509080827000,\\n    \\"Clientip\\": \\"127.0.0.1\\"\\n  }\\n}","errorExample":"{\\n  \\"currentPageCursor\\": {\\n    \\"clientip\\": \\"127.0.0.1\\",\\n    \\"createTime\\": \\"2017-11-01 17:22:51\\",\\n    \\"createTimeLong\\": 1509528171000,\\n    \\"taskNo\\": \\"aa634d3f-927e-4d17-9d2c-test\\",\\n    \\"taskNum\\": 1,\\n    \\"taskStatus\\": \\"COMPLETE\\",\\n    \\"taskStatusCode\\": 3,\\n    \\"taskType\\": \\"CHG_DNS\\"\\n  },\\n  \\"nextPageCursor\\": {\\n    \\"createTime\\": \\"2017-10-27 13:07:07\\",\\n    \\"createTimeLong\\": 1509080827000,\\n    \\"taskNo\\": \\"8f112aa1-98be-48c3-82f8-test\\"\\n  },\\n  \\"objects\\": [\\n    {\\n      \\"clientip\\": \\"127.0.0.1\\",\\n      \\"createTime\\": \\"2017-11-01 17:22:51\\",\\n      \\"createTimeLong\\": 1509528171000,\\n      \\"taskNo\\": \\"aa634d3f-927e-4d17-9d2c-test\\",\\n      \\"taskNum\\": 1,\\n      \\"taskStatus\\": \\"COMPLETE\\",\\n      \\"taskStatusCode\\": 3,\\n      \\"taskType\\": \\"CHG_DNS\\"\\n    },\\n    {\\n      \\"clientip\\": \\"127.0.0.1\\",\\n      \\"createTime\\": \\"2017-11-01 17:19:47\\",\\n      \\"createTimeLong\\": 1509527987000,\\n      \\"taskNo\\": \\"f9baa3d5-33b9-4c81-8847-test\\",\\n      \\"taskNum\\": 15,\\n      \\"taskStatus\\": \\"COMPLETE\\",\\n      \\"taskStatusCode\\": 3,\\n      \\"taskType\\": \\"CHG_DNS\\"\\n    }\\n  ],\\n  \\"pageSize\\": 2,\\n  \\"prePageCursor\\": {},\\n  \\"requestId\\": \\"6EB5D9B8-AD99-4423-9D02-test\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryTaskInfoHistoryResponse>\\n    <Objects>\\n        <TaskInfoHistory>\\n            <Clientip>127.0.0.1</Clientip>\\n            <TaskNo>aa634d3f-927e-4d17-9d2c-test</TaskNo>\\n            <CreateTime>2017-11-01 17:22:51</CreateTime>\\n            <TaskStatus>COMPLETE</TaskStatus>\\n            <TaskNum>1</TaskNum>\\n            <TaskStatusCode>3</TaskStatusCode>\\n            <TaskType>CHG_DNS</TaskType>\\n            <CreateTimeLong>1509528171000</CreateTimeLong>\\n        </TaskInfoHistory>\\n        <TaskInfoHistory>\\n            <Clientip>127.0.0.1</Clientip>\\n            <TaskNo>f9baa3d5-33b9-4c81-8847-test</TaskNo>\\n            <CreateTime>2017-11-01 17:19:47</CreateTime>\\n            <TaskStatus>COMPLETE</TaskStatus>\\n            <TaskNum>15</TaskNum>\\n            <TaskStatusCode>3</TaskStatusCode>\\n            <TaskType>CHG_DNS</TaskType>\\n            <CreateTimeLong>1509527987000</CreateTimeLong>\\n        </TaskInfoHistory>\\n    </Objects>\\n    <PageSize>2</PageSize>\\n    <NextPageCursor>\\n        <TaskNo>8f112aa1-98be-48c3-82f8-test</TaskNo>\\n        <CreateTime>2017-10-27 13:07:07</CreateTime>\\n        <CreateTimeLong>1509080827000</CreateTimeLong>\\n    </NextPageCursor>\\n    <RequestId>EB3FCCBA-CA1F-4D31-9F34-test</RequestId>\\n    <CurrentPageCursor>\\n        <Clientip>127.0.0.1</Clientip>\\n        <TaskNo>aa634d3f-927e-4d17-9d2c-test</TaskNo>\\n        <CreateTime>2017-11-01 17:22:51</CreateTime>\\n        <TaskStatus>COMPLETE</TaskStatus>\\n        <TaskNum>1</TaskNum>\\n        <TaskStatusCode>3</TaskStatusCode>\\n        <TaskType>CHG_DNS</TaskType>\\n        <CreateTimeLong>1509528171000</CreateTimeLong>\\n    </CurrentPageCursor>\\n</QueryTaskInfoHistoryResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryTaskInfoHistoryResponse>\\n    <Objects>\\n        <TaskInfoHistory>\\n            <Clientip>127.0.0.1</Clientip>\\n            <TaskNo>aa634d3f-927e-4d17-9d2c-test</TaskNo>\\n            <CreateTime>2017-11-01 17:22:51</CreateTime>\\n            <TaskStatus>COMPLETE</TaskStatus>\\n            <TaskNum>1</TaskNum>\\n            <TaskStatusCode>3</TaskStatusCode>\\n            <TaskType>CHG_DNS</TaskType>\\n            <CreateTimeLong>1509528171000</CreateTimeLong>\\n        </TaskInfoHistory>\\n        <TaskInfoHistory>\\n            <Clientip>127.0.0.1</Clientip>\\n            <TaskNo>f9baa3d5-33b9-4c81-8847-test</TaskNo>\\n            <CreateTime>2017-11-01 17:19:47</CreateTime>\\n            <TaskStatus>COMPLETE</TaskStatus>\\n            <TaskNum>15</TaskNum>\\n            <TaskStatusCode>3</TaskStatusCode>\\n            <TaskType>CHG_DNS</TaskType>\\n            <CreateTimeLong>1509527987000</CreateTimeLong>\\n        </TaskInfoHistory>\\n    </Objects>\\n    <PageSize>2</PageSize>\\n    <NextPageCursor>\\n        <TaskNo>8f112aa1-98be-48c3-82f8-test</TaskNo>\\n        <CreateTime>2017-10-27 13:07:07</CreateTime>\\n        <CreateTimeLong>1509080827000</CreateTimeLong>\\n    </NextPageCursor>\\n    <RequestId>EB3FCCBA-CA1F-4D31-9F34-test</RequestId>\\n    <CurrentPageCursor>\\n        <Clientip>127.0.0.1</Clientip>\\n        <TaskNo>aa634d3f-927e-4d17-9d2c-test</TaskNo>\\n        <CreateTime>2017-11-01 17:22:51</CreateTime>\\n        <TaskStatus>COMPLETE</TaskStatus>\\n        <TaskNum>1</TaskNum>\\n        <TaskStatusCode>3</TaskStatusCode>\\n        <TaskType>CHG_DNS</TaskType>\\n        <CreateTimeLong>1509528171000</CreateTimeLong>\\n    </CurrentPageCursor>\\n</QueryTaskInfoHistoryResponse>"}]',
      'title' => '分页查询自己账户下的域名任务历史列表',
      'summary' => '调用QueryTaskInfoHistory分页查询自己账户下的域名任务历史列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryTaskDetailList' => 
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
          'name' => 'TaskStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务状态。取值：
- **0**：等待执行。
- **1**：执行中。
- **2**：成功。
- **3**：失败。
                           ',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务编号。',
            'type' => 'string',
            'required' => true,
            'example' => '75addb07-28a3-450e-b5ec-test',
          ),
        ),
        3 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名实例编号。',
            'type' => 'string',
            'required' => false,
            'example' => 'S20179H1BBI9test',
          ),
        ),
        5 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.0',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，最大值为**1000**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
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
              'PrePage' => 
              array (
                'description' => '是否有上一页。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'CurrentPageNum' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '6A2320E4-D870-49C9-A6DC-test',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalPageNum' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TaskDetail' => 
                  array (
                    'description' => '任务列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UpdateTime' => 
                        array (
                          'description' => '最近一次任务详情执行时间。',
                          'type' => 'string',
                          'example' => '2018-01-25 20:47:01',
                        ),
                        'TaskDetailNo' => 
                        array (
                          'description' => '任务详情编号。',
                          'type' => 'string',
                          'example' => '75addb07-28a3-450e-b5ec-test',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '任务创建时间。',
                          'type' => 'string',
                          'example' => '2018-01-25 20:46:57',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '域名实例编号。',
                          'type' => 'string',
                          'example' => 'S20179H1BBI9test',
                        ),
                        'DomainName' => 
                        array (
                          'description' => '域名。',
                          'type' => 'string',
                          'example' => 'example.com',
                        ),
                        'TaskType' => 
                        array (
                          'description' => '任务类型。取值：
- **CHG_HOLDER**：修改所有者信息。
- **CHG_DNS**：修改DNS。
- **SET_WHOIS_PROTECT**：设置隐私保护。
- **UPDATE_ADMIN_CONTACT**：修改管理者信息。
- **UPDATE_BILLING_CONTACT**：修改付费者信息。
- **UPDATE_TECH_CONTACT**：修改技术者信息。
- **SET_UPDATE_PROHIBITED**：设置域名安全锁。
- **SET_TRANSFER_PROHIBITED**：设置域名转移锁。
- **ORDER_ACTIVATE**：创建注册订单。
- **ORDER_RENEW**：创建续费订单。
- **ORDER_REDEEM**：创建赎回订单。
- **CREATE_DNSHOST**：创建DNS host。
- **UPDATE_DNSHOST**：更新DNS host。
- **SYNC_DNSHOST**：同步DNS host。',
                          'type' => 'string',
                          'example' => 'ORDER_RENEW',
                        ),
                        'TaskNo' => 
                        array (
                          'description' => '任务编号。',
                          'type' => 'string',
                          'example' => '60d6e201-8ee5-47ab-8fdc-test',
                        ),
                        'TaskResult' => 
                        array (
                          'description' => '任务执行结果，用于记录部分任务类型执行后的任务结果。',
                          'type' => 'string',
                          'example' => '12345',
                        ),
                        'TaskStatusCode' => 
                        array (
                          'description' => '任务状态码。取值：
- **0**：等待执行。
- **1**：执行中。
- **2**：执行成功。
- **3**：执行失败。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'TaskStatus' => 
                        array (
                          'description' => '任务状态。取值：
- **WAITING_EXECUTE**：等待执行。
- **EXECUTING**：执行中。
- **EXECUTE_SUCCESS**：执行成功。
- **EXECUTE_FAILURE**：执行失败。',
                          'type' => 'string',
                          'example' => 'EXECUTE_SUCCESS',
                        ),
                        'TaskTypeDescription' => 
                        array (
                          'description' => '任务类型描述。',
                          'type' => 'string',
                          'example' => '创建续费订单',
                        ),
                        'TryCount' => 
                        array (
                          'description' => '任务详情重试次数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'ErrorMsg' => 
                        array (
                          'description' => '任务执行失败消息。',
                          'type' => 'string',
                          'example' => 'The operation is successful.',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalItemNum' => 
              array (
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'NextPage' => 
              array (
                'description' => '是否有下一页。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PrePage\\": false,\\n  \\"CurrentPageNum\\": 1,\\n  \\"RequestId\\": \\"6A2320E4-D870-49C9-A6DC-test\\",\\n  \\"PageSize\\": 2,\\n  \\"TotalPageNum\\": 1,\\n  \\"Data\\": {\\n    \\"TaskDetail\\": [\\n      {\\n        \\"UpdateTime\\": \\"2018-01-25 20:47:01\\",\\n        \\"TaskDetailNo\\": \\"75addb07-28a3-450e-b5ec-test\\",\\n        \\"CreateTime\\": \\"2018-01-25 20:46:57\\",\\n        \\"InstanceId\\": \\"S20179H1BBI9test\\",\\n        \\"DomainName\\": \\"example.com\\",\\n        \\"TaskType\\": \\"ORDER_RENEW\\",\\n        \\"TaskNo\\": \\"60d6e201-8ee5-47ab-8fdc-test\\",\\n        \\"TaskResult\\": \\"12345\\",\\n        \\"TaskStatusCode\\": 2,\\n        \\"TaskStatus\\": \\"EXECUTE_SUCCESS\\",\\n        \\"TaskTypeDescription\\": \\"创建续费订单\\",\\n        \\"TryCount\\": 0,\\n        \\"ErrorMsg\\": \\"The operation is successful.\\"\\n      }\\n    ]\\n  },\\n  \\"TotalItemNum\\": 1,\\n  \\"NextPage\\": true\\n}","errorExample":""},{"type":"xml","example":"<PrePage>false</PrePage>\\n<CurrentPageNum>1</CurrentPageNum>\\n<PageSize>2</PageSize>\\n<RequestId>6A2320E4-D870-49C9-A6DC-test</RequestId>\\n<TotalPageNum>1</TotalPageNum>\\n<Data>\\n    <TaskDetail>\\n        <DomainName>example.com</DomainName>\\n        <InstanceId>S20179H1BBI9test</InstanceId>\\n        <TaskNo>60d6e201-8ee5-47ab-8fdc-test</TaskNo>\\n        <TaskStatusCode>2</TaskStatusCode>\\n        <CreateTime>2018-01-25 20:46:57</CreateTime>\\n        <ErrorMsg>The operation is successful.</ErrorMsg>\\n        <TaskStatus>EXECUTE_SUCCESS</TaskStatus>\\n        <TaskTypeDescription>创建续费订单</TaskTypeDescription>\\n        <TryCount>0</TryCount>\\n        <TaskType>ORDER_RENEW</TaskType>\\n        <UpdateTime>2018-01-25 20:47:01</UpdateTime>\\n        <TaskResult>12345</TaskResult>\\n        <TaskDetailNo>75addb07-28a3-450e-b5ec-test</TaskDetailNo>\\n    </TaskDetail>\\n</Data>\\n<TotalItemNum>1</TotalItemNum>\\n<NextPage>true</NextPage>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryTaskDetailListResponse>\\n    <Data>\\n        <TaskDetail>\\n            <TryCount>0</TryCount>\\n            <TaskDetailNo>75addb07-28a3-450e-b5ec-test</TaskDetailNo>\\n            <TaskNo>60d6e201-8ee5-47ab-8fdc-test</TaskNo>\\n            <CreateTime>2018-01-25 20:46:57</CreateTime>\\n            <InstanceId>S20179H1BBI9test</InstanceId>\\n            <UpdateTime>2018-01-25 20:47:01</UpdateTime>\\n            <TaskStatus>EXECUTE_SUCCESS</TaskStatus>\\n            <DomainName>test.com</DomainName>\\n            <TaskStatusCode>2</TaskStatusCode>\\n            <ErrorMsg>The operation is successful.</ErrorMsg>\\n            <TaskType>ORDER_RENEW</TaskType>\\n        </TaskDetail>\\n    </Data>\\n    <TotalItemNum>1</TotalItemNum>\\n    <PageSize>2</PageSize>\\n    <CurrentPageNum>1</CurrentPageNum>\\n    <RequestId>6A2320E4-D870-49C9-A6DC-test</RequestId>\\n    <TotalPageNum>1</TotalPageNum>\\n</QueryTaskDetailListResponse>"}]',
      'title' => '分页查询指定域名任务的详情列表',
      'summary' => '调用QueryTaskDetailList分页查询指定域名任务的详情列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDomainByDomainName' => 
    array (
      'summary' => '调用QueryDomainByDomainName按域名查询域名信息。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
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
              'Email' => 
              array (
                'description' => '域名所有者邮箱。',
                'type' => 'string',
                'example' => 'username@example.com',
              ),
              'RegistrationDate' => 
              array (
                'description' => '注册时间。',
                'type' => 'string',
                'example' => '2017-12-07 17:02:13',
              ),
              'RegistrationDateLong' => 
              array (
                'description' => '注册时间的时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1584675448000',
              ),
              'RealNameStatus' => 
              array (
                'description' => '域名实名认证状态。取值：
- **NONAUDIT**：未实名认证。
- **SUCCEED**：成功。
- **FAILED**：审核失败。
- **AUDITING**：审核中。',
                'type' => 'string',
                'example' => 'NONAUDIT',
              ),
              'Premium' => 
              array (
                'description' => '是否是溢价词。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'DomainNameVerificationStatus' => 
              array (
                'description' => '命名审核状态。取值：
- **NONAUDIT**：未认证。
- **SUCCEED**： 成功。
- **FAILED**：审核失败。
- **AUDITING**：审核中。',
                'type' => 'string',
                'example' => 'SUCCEED',
              ),
              'ExpirationDateLong' => 
              array (
                'description' => '到期时间的时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1625111915000',
              ),
              'DnsList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Dns' => 
                  array (
                    'description' => 'dns列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'DNS列表。',
                      'type' => 'string',
                      'example' => 'dns1.hichina.com,dns2.hichina.com',
                    ),
                  ),
                ),
              ),
              'TransferOutStatus' => 
              array (
                'description' => '域名转出状态。取值：
- **NORMAL**：正常。
- **PENDING**：正在转出万网。',
                'type' => 'string',
                'example' => 'NORMAL',
              ),
              'ZhRegistrantOrganization' => 
              array (
                'description' => '中文域名持有者。',
                'type' => 'string',
                'example' => '王先生',
              ),
              'EmailVerificationClientHold' => 
              array (
                'description' => '是否被clienthold。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'EmailVerificationStatus' => 
              array (
                'description' => '邮箱是否已通过验证。取值：
- **0**：没有通过验证。
- **1**：已通过验证。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RegistrantOrganization' => 
              array (
                'description' => '域名所有者。',
                'type' => 'string',
                'example' => 'Test litm',
              ),
              'TransferProhibitionLock' => 
              array (
                'description' => '域名转移锁状态。取值：
- **NONE_SETTING**：未设置。
- **OPEN**：已开启。
- **CLOSE**：已关闭。',
                'type' => 'string',
                'example' => 'CLOSE',
              ),
              'DomainNameProxyService' => 
              array (
                'description' => '是否已开启隐私保护状态。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'RegistrantType' => 
              array (
                'description' => '域名注册联系人类型。取值：
- **1**：个人。
- **2**：企业。

',
                'type' => 'string',
                'example' => '1',
              ),
              'RegistrantUpdatingStatus' => 
              array (
                'description' => '域名持有者修改状态。取值：
- **PENDING**：域名持有者信息修改中。
- **NORMAL**：正常。',
                'type' => 'string',
                'example' => 'NORMAL',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '44101664-3E70-4F0E-89E5-CCB74BF*****',
              ),
              'DomainName' => 
              array (
                'description' => '域名。',
                'type' => 'string',
                'example' => 'example.com',
              ),
              'InstanceId' => 
              array (
                'description' => '域名实例编号。',
                'type' => 'string',
                'example' => 'S20179H1BBI9****',
              ),
              'ZhRegistrantName' => 
              array (
                'description' => '中文联系人。',
                'type' => 'string',
                'example' => '王先生',
              ),
              'ExpirationDate' => 
              array (
                'description' => '到期时间。',
                'type' => 'string',
                'example' => '2019-12-07 17:02:13',
              ),
              'RegistrantName' => 
              array (
                'description' => '联系人。',
                'type' => 'string',
                'example' => 'Test litm',
              ),
              'UserId' => 
              array (
                'description' => '阿里云用户编号。',
                'type' => 'string',
                'example' => '121000000****',
              ),
              'UpdateProhibitionLock' => 
              array (
                'description' => '域名安全锁状态。取值： 
- **NONE_SETTING**：未设置。
- **OPEN**：已开启。
- **CLOSE**：已关闭。    ',
                'type' => 'string',
                'example' => 'CLOSE',
              ),
              'DomainGroupId' => 
              array (
                'description' => '域名分组ID，可使用查询域名分组的[QueryDomainGroupList](~~69362~~)接口获取',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123456',
              ),
              'Remark' => 
              array (
                'description' => '域名备注。',
                'type' => 'string',
                'example' => '测试备注',
              ),
              'DomainGroupName' => 
              array (
                'description' => '域名分组名称。',
                'type' => 'string',
                'example' => '测试分组',
              ),
              'ExpirationDateStatus' => 
              array (
                'description' => '域名过期状态。取值：
- **1**：域名未过期。
- **2**：域名已过期。
                           ',
                'type' => 'string',
                'example' => '1',
              ),
              'ExpirationCurrDateDiff' => 
              array (
                'description' => '域名到期日和当前的时间的天数差值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '356',
              ),
              'DomainType' => 
              array (
                'description' => '域名类型。取值：

- New gTLD。                                 
- gTLD。                                 
- ccTLD。',
                'type' => 'string',
                'example' => 'gTLD',
              ),
              'DomainStatus' => 
              array (
                'description' => '域名状态。取值：

- 1：急需续费。                                 
- 2：急需赎回。                                 
- 3：正常。',
                'type' => 'string',
                'example' => '3',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组id。',
                'type' => 'string',
                'example' => 'rg-acfmw6bpc6n7zai',
              ),
              'Tag' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Tag' => 
                  array (
                    'description' => '标签列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源的标签。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'description' => '标签键。',
                          'type' => 'string',
                          'example' => '费用',
                        ),
                        'Vaue' => 
                        array (
                          'description' => '标签值',
                          'type' => 'string',
                          'example' => '标签1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Email\\": \\"username@example.com\\",\\n  \\"RegistrationDate\\": \\"2017-12-07 17:02:13\\",\\n  \\"RegistrationDateLong\\": 1584675448000,\\n  \\"RealNameStatus\\": \\"NONAUDIT\\",\\n  \\"Premium\\": false,\\n  \\"DomainNameVerificationStatus\\": \\"SUCCEED\\",\\n  \\"ExpirationDateLong\\": 1625111915000,\\n  \\"DnsList\\": {\\n    \\"Dns\\": [\\n      \\"dns1.hichina.com,dns2.hichina.com\\"\\n    ]\\n  },\\n  \\"TransferOutStatus\\": \\"NORMAL\\",\\n  \\"ZhRegistrantOrganization\\": \\"王先生\\",\\n  \\"EmailVerificationClientHold\\": false,\\n  \\"EmailVerificationStatus\\": 1,\\n  \\"RegistrantOrganization\\": \\"Test litm\\",\\n  \\"TransferProhibitionLock\\": \\"CLOSE\\",\\n  \\"DomainNameProxyService\\": false,\\n  \\"RegistrantType\\": \\"1\\",\\n  \\"RegistrantUpdatingStatus\\": \\"NORMAL\\",\\n  \\"RequestId\\": \\"44101664-3E70-4F0E-89E5-CCB74BF*****\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"InstanceId\\": \\"S20179H1BBI9****\\",\\n  \\"ZhRegistrantName\\": \\"王先生\\",\\n  \\"ExpirationDate\\": \\"2019-12-07 17:02:13\\",\\n  \\"RegistrantName\\": \\"Test litm\\",\\n  \\"UserId\\": \\"121000000****\\",\\n  \\"UpdateProhibitionLock\\": \\"CLOSE\\",\\n  \\"DomainGroupId\\": 123456,\\n  \\"Remark\\": \\"测试备注\\",\\n  \\"DomainGroupName\\": \\"测试分组\\",\\n  \\"ExpirationDateStatus\\": \\"1\\",\\n  \\"ExpirationCurrDateDiff\\": 356,\\n  \\"DomainType\\": \\"gTLD\\",\\n  \\"DomainStatus\\": \\"3\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmw6bpc6n7zai\\",\\n  \\"Tag\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"Key\\": \\"费用\\",\\n        \\"Vaue\\": \\"标签1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Email>username@example.com</Email>\\n<RegistrationDateLong>1584675448000</RegistrationDateLong>\\n<RegistrationDate>2017-12-07 17:02:13</RegistrationDate>\\n<RealNameStatus>NONAUDIT</RealNameStatus>\\n<DomainNameVerificationStatus>SUCCEED</DomainNameVerificationStatus>\\n<Premium>false</Premium>\\n<ExpirationDateLong>1625111915000</ExpirationDateLong>\\n<DnsList>\\n    <Dns>dns1.hichina.com,dns2.hichina.com</Dns>\\n</DnsList>\\n<TransferOutStatus>NORMAL</TransferOutStatus>\\n<ZhRegistrantOrganization>王先生</ZhRegistrantOrganization>\\n<EmailVerificationClientHold>false</EmailVerificationClientHold>\\n<EmailVerificationStatus>1</EmailVerificationStatus>\\n<TransferProhibitionLock>CLOSE</TransferProhibitionLock>\\n<RegistrantOrganization>Test litm</RegistrantOrganization>\\n<DomainNameProxyService>false</DomainNameProxyService>\\n<RegistrantType>1</RegistrantType>\\n<RegistrantUpdatingStatus>NORMAL</RegistrantUpdatingStatus>\\n<RequestId>44101664-3E70-4F0E-89E5-CCB74BF*****</RequestId>\\n<InstanceId>S20179H1BBI9****</InstanceId>\\n<DomainName>example.com</DomainName>\\n<ZhRegistrantName>王先生</ZhRegistrantName>\\n<RegistrantName>Test litm</RegistrantName>\\n<ExpirationDate>2019-12-07 17:02:13</ExpirationDate>\\n<UserId>121000000****</UserId>\\n<UpdateProhibitionLock>CLOSE</UpdateProhibitionLock>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryDomainByDomainNameResponse>\\n    <RegistrantInfoStatus>NORMAL</RegistrantInfoStatus>\\n    <TransferProhibitionLock>CLOSE</TransferProhibitionLock>\\n    <UpdateProhibitionLock>CLOSE</UpdateProhibitionLock>\\n    <InstanceId>S20179H1BBI9test</InstanceId>\\n    <EmailVerificationStatus>1</EmailVerificationStatus>\\n    <RealNameStatus>NONAUDIT</RealNameStatus>\\n    <UserId>121000000test</UserId>\\n    <Premium>false</Premium>\\n    <ExpirationDate>2019-12-07 17:02:13</ExpirationDate>\\n    <DomainNameProxyService>false</DomainNameProxyService>\\n    <RegistrantType>1</RegistrantType>\\n    <Email>test@alibaba-inc.com</Email>\\n    <RegistrationDate>2017-12-07 17:02:13</RegistrationDate>\\n    <EmailVerificationClientHold>false</EmailVerificationClientHold>\\n    <DomainName>test.com</DomainName>\\n    <TransferOutStatus>NORMAL</TransferOutStatus>\\n    <RegistrantName>Test litm</RegistrantName>\\n    <DnsList>\\n        <Dns>dns1.hichina.com</Dns>\\n        <Dns>dns2.hichina.com</Dns>\\n    </DnsList>\\n    <RegistrantOrganization>Test litm</RegistrantOrganization>\\n</QueryDomainByDomainNameResponse>"}]',
      'title' => '根据域名名称查询域名信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryContactInfo' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'ContactType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联系人类型。取值：
- **registrant**：域名持有者。
- **tech**：技术者。
- **admin**：管理者。
- **billing**：付费者。
                           ',
            'type' => 'string',
            'required' => true,
            'example' => 'admin',
            'enum' => 
            array (
              0 => 'registrant',
              1 => 'admin',
              2 => 'billing',
              3 => 'tech',
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
              'ZhProvince' => 
              array (
                'description' => '省份（中文）。',
                'type' => 'string',
                'example' => '浙江',
              ),
              'Email' => 
              array (
                'description' => '电子邮箱。',
                'type' => 'string',
                'example' => 'username@example.com',
              ),
              'Telephone' => 
              array (
                'description' => '电话号码。',
                'type' => 'string',
                'example' => '1820000****',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'C39ECA8A-BB5E-4F92-B013-6A032FA06B04',
              ),
              'Address' => 
              array (
                'description' => '通讯地址（英文）。',
                'type' => 'string',
                'example' => 'xi hu qu *** jiedao *** xiaoqu *** zhuang 101',
              ),
              'PostalCode' => 
              array (
                'description' => '邮政编码。',
                'type' => 'string',
                'example' => '310024',
              ),
              'ZhRegistrantName' => 
              array (
                'description' => '联系人名称（中文）。',
                'type' => 'string',
                'example' => '张三',
              ),
              'City' => 
              array (
                'description' => '城市（英文）。',
                'type' => 'string',
                'example' => 'hang zhou shi',
              ),
              'CreateDate' => 
              array (
                'description' => '域名注册日期。',
                'type' => 'string',
                'example' => '2019-03-20 11:37:29',
              ),
              'Province' => 
              array (
                'description' => '省份（英文）。',
                'type' => 'string',
                'example' => 'zhe jiang',
              ),
              'ZhCity' => 
              array (
                'description' => '城市（中文）。',
                'type' => 'string',
                'example' => '杭州市',
              ),
              'RegistrantName' => 
              array (
                'description' => '联系人名称（英文）。',
                'type' => 'string',
                'example' => 'zhang san',
              ),
              'ZhRegistrantOrganization' => 
              array (
                'description' => '域名持有者名称（中文）。',
                'type' => 'string',
                'example' => '张三',
              ),
              'Country' => 
              array (
                'description' => '国家代码。例如，**CN**代表中国，**US**代表美国。',
                'type' => 'string',
                'example' => 'CN',
              ),
              'RegistrantOrganization' => 
              array (
                'description' => '域名持有者名称（英文）。',
                'type' => 'string',
                'example' => 'zhang san',
              ),
              'TelExt' => 
              array (
                'description' => '分机号码。',
                'type' => 'string',
                'example' => '1234',
              ),
              'TelArea' => 
              array (
                'description' => '电话国家代码。例如，中国的电话国家代码为**86**。',
                'type' => 'string',
                'example' => '86',
              ),
              'ZhAddress' => 
              array (
                'description' => '通讯地址（中文）。',
                'type' => 'string',
                'example' => '西湖区***街道***小区***幢101',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PostalCode\\": \\"310024\\",\\n  \\"TelExt\\": \\"1234\\",\\n  \\"ZhProvince\\": \\"浙江\\",\\n  \\"ZhRegistrantOrganization\\": \\"张三\\",\\n  \\"Telephone\\": \\"1820000****\\",\\n  \\"RegistrantOrganization\\": \\"zhang san\\",\\n  \\"City\\": \\"hang zhou shi\\",\\n  \\"CreateDate\\": \\"2019-03-20 11:37:29\\",\\n  \\"ZhCity\\": \\"杭州市\\",\\n  \\"ZhRegistrantName\\": \\"张三\\",\\n  \\"Email\\": \\"username@example.com\\",\\n  \\"RequestId\\": \\"C39ECA8A-BB5E-4F92-B013-6A032FA06B04\\",\\n  \\"TelArea\\": \\"86\\",\\n  \\"Address\\": \\"xi hu qu *** jiedao *** xiaoqu *** zhuang 101\\",\\n  \\"Country\\": \\"CN\\",\\n  \\"RegistrantName\\": \\"zhang san\\",\\n  \\"ZhAddress\\": \\"西湖区***街道***小区***幢101\\",\\n  \\"Province\\": \\"zhe jiang\\"\\n}","errorExample":"{\\n  \\"CreateDate\\": \\"2013-12-06 00:00:00\\",\\n  \\"Address\\": \\"Ou Wo E Ou \\",\\n  \\"TelExt\\": \\"\\",\\n  \\"City\\": \\"Bei Jing Shi\\",\\n  \\"Telephone\\": \\"1300000000\\",\\n  \\"Country\\": \\"CN\\",\\n  \\"TelArea\\": \\"86\\",\\n  \\"Province\\": \\"Bei Jing\\",\\n  \\"PostalCode\\": \\"111111\\",\\n  \\"Email\\": \\"1300000000@aliyun.com\\",\\n  \\"RequestId\\": \\"77B19432-82FF-4D25-82F9-CF83E19516F7\\",\\n  \\"RegistrantName\\": \\"li Yun\\",\\n  \\"RegistrantOrganization\\": \\"Li Yun\\"\\n}"},{"type":"xml","example":"<ZhRegistrantOrganization>张三</ZhRegistrantOrganization>\\n<ZhCity>杭州市</ZhCity>\\n<Telephone>1820000****</Telephone>\\n<ZhProvince>浙江</ZhProvince>\\n<Province>zhe jiang</Province>\\n<Country>CN</Country>\\n<CreateDate>2019-03-20 11:37:29</CreateDate>\\n<TelArea>86</TelArea>\\n<City>hang zhou shi</City>\\n<ZhRegistrantName>张三</ZhRegistrantName>\\n<PostalCode>310024</PostalCode>\\n<Email>username@example.com</Email>\\n<RequestId>C39ECA8A-BB5E-4F92-B013-6A032FA06B04</RequestId>\\n<Address>xi hu qu *** jiedao *** xiaoqu *** zhuang 101</Address>\\n<RegistrantName>zhang san</RegistrantName>\\n<RegistrantOrganization>zhang san</RegistrantOrganization>\\n<ZhAddress>西湖区***街道***小区***幢101</ZhAddress>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryContactInfoResponse>\\n    <CreateDate>2013-12-06 00:00:00</CreateDate>\\n    <Address>Ou Wo E Ou </Address>\\n    <TelExt></TelExt>\\n    <City>Bei Jing Shi</City>\\n    <Telephone>13000000000</Telephone>\\n    <Country>CN</Country>\\n    <TelArea>86</TelArea>\\n    <Province>Bei Jing</Province>\\n    <PostalCode>111111</PostalCode>\\n    <Email>13000000000@aliyun.com</Email>\\n    <RequestId>DBBEFD6C-86F2-4C68-930A-21F8668BB6E8</RequestId>\\n    <RegistrantName>li Yun</RegistrantName>\\n    <RegistrantOrganization>Li Yun</RegistrantOrganization>\\n</QueryContactInfoResponse>"}]',
      'title' => '查询域名联系人信息',
      'summary' => '调用QueryContactInfo查询域名联系人信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDomainByInstanceId' => 
    array (
      'summary' => '调用QueryDomainByInstanceId根据域名实例编号查询域名的基本信息。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可以设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名实例编号，通过查询域名列表[QueryDomainList](~~67712~~)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => 'S20131205001****',
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
              'Email' => 
              array (
                'description' => '域名所有者邮箱。',
                'type' => 'string',
                'example' => 'username@example.com',
              ),
              'RegistrationDate' => 
              array (
                'description' => '域名注册时间。',
                'type' => 'string',
                'example' => '2017-12-07 17:02:13',
              ),
              'RegistrationDateLong' => 
              array (
                'description' => '注册时间的时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1625111915000',
              ),
              'RealNameStatus' => 
              array (
                'description' => '域名实名认证状态。取值：
- **NONAUDIT**：未实名认证。
- **SUCCEED**：实名认证成功。
- **FAILED**：实名认证审核失败。
- **AUDITING**：实名认证审核中。

> 域名实名认证状态是域名命名审核和实名审核的组合状态，只有域名命名审核和实名审核均通过才算域名实名认证成功。',
                'type' => 'string',
                'example' => 'NONAUDIT',
              ),
              'Premium' => 
              array (
                'description' => '是否是溢价词。取值：
- **true**：溢价词。
- **false**：非溢价词。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'DomainNameVerificationStatus' => 
              array (
                'description' => '域名命名审核状态。取值：
- **NONAUDIT**：未认证。
- **SUCCEED**：成功。
- **FAILED**：审核失败。
- **AUDITING**：审核中。
                           ',
                'type' => 'string',
                'example' => 'NONAUDIT',
              ),
              'ExpirationDateLong' => 
              array (
                'description' => '到期时间的时间戳。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1625111915000',
              ),
              'DnsList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Dns' => 
                  array (
                    'description' => 'DNS列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回域名已配置的DNS列表。',
                      'type' => 'string',
                      'example' => 'dns1.hichina.com,dns2.hichina.com',
                    ),
                  ),
                ),
              ),
              'TransferOutStatus' => 
              array (
                'description' => '域名转出状态。取值：
- **NORMAL**：正常。
- **PENDING**：正在转出阿里云。
                           ',
                'type' => 'string',
                'example' => 'NORMAL',
              ),
              'ZhRegistrantOrganization' => 
              array (
                'description' => '中文域名持有者。

> 该参数仅适用于中国站。',
                'type' => 'string',
                'example' => '李四',
              ),
              'EmailVerificationClientHold' => 
              array (
                'description' => '域名是否被暂停解析。取值：

- **false**：域名未被暂停解析。
- **true**：域名已被暂停解析。
',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'EmailVerificationStatus' => 
              array (
                'description' => '域名持有者邮箱是否已通过验证。取值：
- **0**：没有通过验证。
- **1**：已通过验证。
                           ',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RegistrantOrganization' => 
              array (
                'description' => '域名持有者。',
                'type' => 'string',
                'example' => 'Test litm',
              ),
              'TransferProhibitionLock' => 
              array (
                'description' => '域名转移锁状态。取值：
- **NONE_SETTING**：未设置。
- **OPEN**：已开启。
- **CLOSE**：已关闭。
                           ',
                'type' => 'string',
                'example' => 'CLOSE',
              ),
              'DomainNameProxyService' => 
              array (
                'description' => '是否已开启域名隐私保护服务。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'RegistrantType' => 
              array (
                'description' => '域名注册联系人类型。取值：
- **1**：个人。
- **2**：企业。
                           ',
                'type' => 'string',
                'example' => '1',
              ),
              'RegistrantUpdatingStatus' => 
              array (
                'description' => '域名持有者修改状态。取值：
- **PENDING**：域名持有者信息修改中。
- **NORMAL**：正常。',
                'type' => 'string',
                'example' => 'NORMAL',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '23C9B3C4-9E2C-4405-A88D-BD33E459D140',
              ),
              'DomainName' => 
              array (
                'description' => '查询的域名。',
                'type' => 'string',
                'example' => 'example.com',
              ),
              'InstanceId' => 
              array (
                'description' => '域名实例编号。',
                'type' => 'string',
                'example' => 'S20179H1BBI9test',
              ),
              'ZhRegistrantName' => 
              array (
                'description' => '中文联系人。

> 该参数仅适用于中国站。',
                'type' => 'string',
                'example' => '李四',
              ),
              'ExpirationDate' => 
              array (
                'description' => '查询的域名到期时间。',
                'type' => 'string',
                'example' => '2019-12-07 17:02:13',
              ),
              'RegistrantName' => 
              array (
                'description' => '联系人名称。',
                'type' => 'string',
                'example' => 'Test litm',
              ),
              'UserId' => 
              array (
                'description' => '阿里云用户编号（阿里云账号UID）。',
                'type' => 'string',
                'example' => '121000000****',
              ),
              'UpdateProhibitionLock' => 
              array (
                'description' => '域名安全锁状态。取值：
- **NONE_SETTING**：未设置。
- **OPEN**：已开启。
- **CLOSE**：已关闭。
                           ',
                'type' => 'string',
                'example' => 'CLOSE',
              ),
              'DomainGroupId' => 
              array (
                'title' => '域名分组ID',
                'description' => '域名分组ID，可通过[QueryDomainGroupList](https://help.aliyun.com/document_detail/69362.html)接口获取。
',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1234',
              ),
              'Remark' => 
              array (
                'title' => '备注',
                'description' => '域名备注。',
                'type' => 'string',
                'example' => '测试备注',
              ),
              'DomainGroupName' => 
              array (
                'title' => '域名分组名称',
                'description' => '域名分组名称。',
                'type' => 'string',
                'example' => '测试分组',
              ),
              'ExpirationDateStatus' => 
              array (
                'description' => '域名过期状态。取值：
- **1**：域名未过期。
- **2**：域名已过期。
                           ',
                'type' => 'string',
                'example' => '1',
              ),
              'ExpirationCurrDateDiff' => 
              array (
                'description' => '域名到期日和当前的时间的天数差值。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '356',
              ),
              'DomainType' => 
              array (
                'description' => '域名类型。取值：

- New gTLD。                                 
- gTLD。                                 
- ccTLD。',
                'type' => 'string',
                'example' => 'gTLD',
              ),
              'DomainStatus' => 
              array (
                'description' => '域名状态。取值：

- 1：急需续费。                                 
- 2：急需赎回。                                 
- 3：正常。',
                'type' => 'string',
                'example' => '1',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组id。',
                'type' => 'string',
                'example' => 'rg-acfmw6bpc6n7zai',
              ),
              'Tag' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Tag' => 
                  array (
                    'description' => '标签列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '资源标签',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'description' => '标签键。',
                          'type' => 'string',
                          'example' => '续费',
                        ),
                        'Value' => 
                        array (
                          'description' => '标签值。',
                          'type' => 'string',
                          'example' => '标签1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Email\\": \\"username@example.com\\",\\n  \\"RegistrationDate\\": \\"2017-12-07 17:02:13\\",\\n  \\"RegistrationDateLong\\": 1625111915000,\\n  \\"RealNameStatus\\": \\"NONAUDIT\\",\\n  \\"Premium\\": false,\\n  \\"DomainNameVerificationStatus\\": \\"NONAUDIT\\",\\n  \\"ExpirationDateLong\\": 1625111915000,\\n  \\"DnsList\\": {\\n    \\"Dns\\": [\\n      \\"dns1.hichina.com,dns2.hichina.com\\"\\n    ]\\n  },\\n  \\"TransferOutStatus\\": \\"NORMAL\\",\\n  \\"ZhRegistrantOrganization\\": \\"李四\\",\\n  \\"EmailVerificationClientHold\\": false,\\n  \\"EmailVerificationStatus\\": 1,\\n  \\"RegistrantOrganization\\": \\"Test litm\\",\\n  \\"TransferProhibitionLock\\": \\"CLOSE\\",\\n  \\"DomainNameProxyService\\": false,\\n  \\"RegistrantType\\": \\"1\\",\\n  \\"RegistrantUpdatingStatus\\": \\"NORMAL\\",\\n  \\"RequestId\\": \\"23C9B3C4-9E2C-4405-A88D-BD33E459D140\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"InstanceId\\": \\"S20179H1BBI9test\\",\\n  \\"ZhRegistrantName\\": \\"李四\\",\\n  \\"ExpirationDate\\": \\"2019-12-07 17:02:13\\",\\n  \\"RegistrantName\\": \\"Test litm\\",\\n  \\"UserId\\": \\"121000000****\\",\\n  \\"UpdateProhibitionLock\\": \\"CLOSE\\",\\n  \\"DomainGroupId\\": 1234,\\n  \\"Remark\\": \\"测试备注\\",\\n  \\"DomainGroupName\\": \\"测试分组\\",\\n  \\"ExpirationDateStatus\\": \\"1\\",\\n  \\"ExpirationCurrDateDiff\\": 356,\\n  \\"DomainType\\": \\"gTLD\\",\\n  \\"DomainStatus\\": \\"1\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmw6bpc6n7zai\\",\\n  \\"Tag\\": {\\n    \\"Tag\\": [\\n      {\\n        \\"Key\\": \\"续费\\",\\n        \\"Value\\": \\"标签1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"dnsList\\": [\\n    \\"dns1.hichina.com\\",\\n    \\"dns2.hichina.com\\"\\n  ],\\n  \\"domainName\\": \\"test.com\\",\\n  \\"domainNameProxyService\\": false,\\n  \\"email\\": \\"test@alibaba-inc.com\\",\\n  \\"emailVerificationClientHold\\": false,\\n  \\"emailVerificationStatus\\": 1,\\n  \\"expirationDate\\": \\"2019-12-07 17:02:13\\",\\n  \\"instanceId\\": \\"S20179H1BBI9test\\",\\n  \\"premium\\": false,\\n  \\"realNameStatus\\": \\"NONAUDIT\\",\\n  \\"domainNameVerificationStatus\\": \\"NONAUDIT\\",\\n  \\"registrantInfoStatus\\": \\"NORMAL\\",\\n  \\"registrantName\\": \\"Test litm\\",\\n  \\"registrantOrganization\\": \\"Test litm\\",\\n  \\"registrationDate\\": \\"2017-12-07 17:02:13\\",\\n  \\"transferOutStatus\\": \\"NORMAL\\",\\n  \\"transferProhibitionLock\\": \\"CLOSE\\",\\n  \\"updateProhibitionLock\\": \\"CLOSE\\",\\n  \\"userId\\": \\"121000000test\\"\\n}"},{"type":"xml","example":"<QueryDomainByInstanceIdResponse>\\r\\n      <RegistrantInfoStatus>NORMAL</RegistrantInfoStatus>\\r\\n      <TransferProhibitionLock>CLOSE</TransferProhibitionLock>\\r\\n      <UpdateProhibitionLock>CLOSE</UpdateProhibitionLock>\\r\\n      <InstanceId>S20179H1BBI9test</InstanceId>\\r\\n      <EmailVerificationStatus>1</EmailVerificationStatus>\\r\\n      <RealNameStatus>NONAUDIT</RealNameStatus>\\r\\n      <DomainNameVerificationStatus>NONAUDIT</DomainNameVerificationStatus>\\r\\n      <UserId>121000000****</UserId>\\r\\n      <Premium>false</Premium>\\r\\n      <ExpirationDate>2019-12-07 17:02:13</ExpirationDate>\\r\\n      <DomainNameProxyService>false</DomainNameProxyService>\\r\\n      <RegistrantType>1</RegistrantType>\\r\\n      <Email>username@example.com</Email>\\r\\n      <RegistrationDate>2017-12-07 17:02:13</RegistrationDate>\\r\\n      <EmailVerificationClientHold>false</EmailVerificationClientHold>\\r\\n      <DomainName>example.com</DomainName>\\r\\n      <TransferOutStatus>NORMAL</TransferOutStatus>\\r\\n      <RegistrantName>Test litm</RegistrantName>\\r\\n      <DnsList>\\r\\n            <Dns>dns1.hichina.com</Dns>\\r\\n            <Dns>dns2.hichina.com</Dns>\\r\\n      </DnsList>\\r\\n      <RegistrantOrganization>Test litm</RegistrantOrganization>\\r\\n      <RequestId>23C9B3C4-9E2C-4405-A88D-BD33E459D140</RequestId>\\r\\n</QueryDomainByInstanceIdResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryDomainByInstanceIdResponse>\\n    <RegistrantInfoStatus>NORMAL</RegistrantInfoStatus>\\n    <TransferProhibitionLock>CLOSE</TransferProhibitionLock>\\n    <UpdateProhibitionLock>CLOSE</UpdateProhibitionLock>\\n    <InstanceId>S20179H1BBI9test</InstanceId>\\n    <EmailVerificationStatus>1</EmailVerificationStatus>\\n    <RealNameStatus>NONAUDIT</RealNameStatus>\\n    <DomainNameVerificationStatus>NONAUDIT</DomainNameVerificationStatus>\\n    <UserId>121000000test</UserId>\\n    <Premium>false</Premium>\\n    <ExpirationDate>2019-12-07 17:02:13</ExpirationDate>\\n    <DomainNameProxyService>false</DomainNameProxyService>\\n    <RegistrantType>1</RegistrantType>\\n    <Email>test@alibaba-inc.com</Email>\\n    <RegistrationDate>2017-12-07 17:02:13</RegistrationDate>\\n    <EmailVerificationClientHold>false</EmailVerificationClientHold>\\n    <DomainName>test.com</DomainName>\\n    <TransferOutStatus>NORMAL</TransferOutStatus>\\n    <RegistrantName>Test litm</RegistrantName>\\n    <DnsList>\\n        <Dns>dns1.hichina.com</Dns>\\n        <Dns>dns2.hichina.com</Dns>\\n    </DnsList>\\n    <RegistrantOrganization>Test litm</RegistrantOrganization>\\n</QueryDomainByInstanceIdResponse>"}]',
      'title' => '根据域名实例编号查询域名信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDomainList' => 
    array (
      'summary' => '分页查询自己账户下的域名列表。',
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
          'name' => 'EndExpirationDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询域名到期日期的结束时间，计算方式为UTC时间1970年1月1日0点距离需要查询时间的毫秒数，目前仅支持按天查询。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        1 => 
        array (
          'name' => 'StartExpirationDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询域名到期日期的开始时间，计算方式为UTC时间1970年1月1日0点距离需要查询时间的毫秒数，目前仅支持按天查询。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可以设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        3 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认值为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        4 => 
        array (
          'name' => 'QueryType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '列表查询类型。取值：
- **1**：急需续费列表。
- **2**：急需赎回列表。
                           ',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'StartRegistrationDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询域名注册日期的开始时间，计算方式为UTC时间1970年1月1日0点距离现在的毫秒数，目前仅支持按天查询。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        6 => 
        array (
          'name' => 'EndRegistrationDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询域名注册日期的结束时间，计算方式为UTC时间1970年1月1日0点距离现在的毫秒数，目前仅支持按天查询。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        7 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名，可在域名列表中搜索该域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'test.com',
          ),
        ),
        8 => 
        array (
          'name' => 'OrderByType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务内容（如注册时间、过期时间）的排序顺序。取值：
- **ASC**：升序。
- **DESC**：倒序。
> 不传此参数默认为**DESC**。',
            'type' => 'string',
            'required' => false,
            'example' => 'ASC',
          ),
        ),
        9 => 
        array (
          'name' => 'OrderKeyType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段。取值：
- **RegistrationDate**：根据注册时间排序。
- **ExpirationDate**：根据到期时间排序。

> 不传此参数时，默认以入库时间排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'RegistrationDate',
          ),
        ),
        10 => 
        array (
          'name' => 'ProductDomainType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名类型。取值：
- **New gTLD**：新顶级域。
- **gTLD**：通用顶级域。
- **ccTLD**：国别域。
                           ',
            'type' => 'string',
            'required' => false,
            'example' => 'New gTLD',
          ),
        ),
        11 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名列表的分页页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名列表的分页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        13 => 
        array (
          'name' => 'DomainGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '<props="china">域名分组ID，可使用查询域名分组的[QueryDomainGroupList](~~69362~~)接口获取。</props>
<props="intl">域名分组ID。</props>
',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        14 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组id。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek2indvyxgpfti',
          ),
        ),
        15 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '备注',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '标签1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        16 => 
        array (
          'name' => 'Ccompany',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名所有者名称。',
            'type' => 'string',
            'required' => false,
            'example' => '广州金烨再生资源回收有限公司',
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
              'PrePage' => 
              array (
                'description' => '是否有上一页。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'CurrentPageNum' => 
              array (
                'description' => '当前域名列表的分页页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'B7AB5469-5E38-4AA9-A920-C65B7A9C8E6E',
              ),
              'PageSize' => 
              array (
                'description' => '域名分页列表的大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'TotalPageNum' => 
              array (
                'description' => '域名列表的总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Domain' => 
                  array (
                    'description' => '域名列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '域名列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DomainAuditStatus' => 
                        array (
                          'description' => '域名实名认证状态。取值：
- **FAILED**：实名认证失败。
- **SUCCEED**：实名认证成功。
- **NONAUDIT**：未实名认证。
- **AUDITING**：审核中。
                           ',
                          'type' => 'string',
                          'example' => 'FAILED',
                        ),
                        'DomainGroupId' => 
                        array (
                          'description' => '域名分组编号。',
                          'type' => 'string',
                          'example' => '123456',
                        ),
                        'Remark' => 
                        array (
                          'description' => '域名备注。',
                          'type' => 'string',
                          'example' => '测试备注',
                        ),
                        'DomainGroupName' => 
                        array (
                          'description' => '域名分组名称',
                          'type' => 'string',
                          'example' => '测试分组',
                        ),
                        'RegistrationDate' => 
                        array (
                          'description' => '注册时间。',
                          'type' => 'string',
                          'example' => '2017-11-02 04:00:45',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例编号。',
                          'type' => 'string',
                          'example' => 'ST20151102120031118',
                        ),
                        'DomainName' => 
                        array (
                          'description' => '域名。',
                          'type' => 'string',
                          'example' => 'test.com',
                        ),
                        'ExpirationDateStatus' => 
                        array (
                          'description' => '域名过期状态。取值：
- **1**：域名未过期。
- **2**：域名已过期。
                           ',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'ExpirationDate' => 
                        array (
                          'description' => '域名到期日期。',
                          'type' => 'string',
                          'example' => '2017-11-02 04:00:45',
                        ),
                        'RegistrantType' => 
                        array (
                          'description' => '域名注册类型。取值：
- **1**：个人。
- **2**：企业。
                           ',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'ExpirationDateLong' => 
                        array (
                          'description' => '域名到期时长，UTC时间1970年1月1日0点距离域名到期日的毫秒数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1522080000000',
                        ),
                        'ExpirationCurrDateDiff' => 
                        array (
                          'description' => '域名到期日和当前的时间的天数差值。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '-30',
                        ),
                        'Premium' => 
                        array (
                          'description' => '是否是溢价域名。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'RegistrationDateLong' => 
                        array (
                          'description' => '注册时长，UTC时间1970年1月1日0点距离注册时间的毫秒数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1522080000000',
                        ),
                        'ProductId' => 
                        array (
                          'description' => '产品ID。',
                          'type' => 'string',
                          'example' => '2a',
                        ),
                        'DomainStatus' => 
                        array (
                          'description' => '域名状态。取值：
- **1**：急需续费。
- **2**：急需赎回。
- **3**：正常。
                           ',
                          'type' => 'string',
                          'example' => '3',
                        ),
                        'DomainType' => 
                        array (
                          'description' => '域名类型。取值：
- **New gTLD**。
- **gTLD**。
- **ccTLD**。',
                          'type' => 'string',
                          'example' => 'gTLD',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '域名资源组id。',
                          'type' => 'string',
                          'example' => 'rg-aek2yyciz557g3q',
                        ),
                        'Tag' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '域名标签列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '域名标签。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => '费用',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签的值。',
                                    'type' => 'string',
                                    'example' => '标签1',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'Ccompany' => 
                        array (
                          'description' => '域名所有者名称。',
                          'type' => 'string',
                          'example' => '广州森林广告装饰有限公司',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TotalItemNum' => 
              array (
                'description' => '域名总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'NextPage' => 
              array (
                'description' => '是否有下一页。',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PrePage\\": false,\\n  \\"CurrentPageNum\\": 0,\\n  \\"RequestId\\": \\"B7AB5469-5E38-4AA9-A920-C65B7A9C8E6E\\",\\n  \\"PageSize\\": 5,\\n  \\"TotalPageNum\\": 1,\\n  \\"Data\\": {\\n    \\"Domain\\": [\\n      {\\n        \\"DomainAuditStatus\\": \\"FAILED\\",\\n        \\"DomainGroupId\\": \\"123456\\",\\n        \\"Remark\\": \\"测试备注\\",\\n        \\"DomainGroupName\\": \\"测试分组\\",\\n        \\"RegistrationDate\\": \\"2017-11-02 04:00:45\\",\\n        \\"InstanceId\\": \\"ST20151102120031118\\",\\n        \\"DomainName\\": \\"test.com\\",\\n        \\"ExpirationDateStatus\\": \\"1\\",\\n        \\"ExpirationDate\\": \\"2017-11-02 04:00:45\\",\\n        \\"RegistrantType\\": \\"1\\",\\n        \\"ExpirationDateLong\\": 1522080000000,\\n        \\"ExpirationCurrDateDiff\\": -30,\\n        \\"Premium\\": true,\\n        \\"RegistrationDateLong\\": 1522080000000,\\n        \\"ProductId\\": \\"2a\\",\\n        \\"DomainStatus\\": \\"3\\",\\n        \\"DomainType\\": \\"gTLD\\",\\n        \\"ResourceGroupId\\": \\"rg-aek2yyciz557g3q\\",\\n        \\"Tag\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"费用\\",\\n              \\"Value\\": \\"标签1\\"\\n            }\\n          ]\\n        },\\n        \\"Ccompany\\": \\"广州森林广告装饰有限公司\\"\\n      }\\n    ]\\n  },\\n  \\"TotalItemNum\\": 1,\\n  \\"NextPage\\": false\\n}","errorExample":"{\\n  \\"Data\\": {\\n    \\"Domain\\": [\\n      {\\n        \\"ExpirationDate\\": \\"Nov 02,2019 04:00:45\\",\\n        \\"InstanceId\\": \\"ST2015110212003800001928\\",\\n        \\"RegistrationDate\\": \\"Nov 02,2017 04:00:45\\",\\n        \\"DomainName\\": \\"fds234sdf.net\\",\\n        \\"DomainType\\": \\"gTLD\\"\\n      }\\n    ]\\n  },\\n  \\"TotalItemNum\\": 1,\\n  \\"PageSize\\": 5,\\n  \\"CurrentPageNum\\": 0,\\n  \\"RequestId\\": \\"77F90DA6-89AB-4074-80F3-E595CB57DF98\\",\\n  \\"PrePage\\": false,\\n  \\"TotalPageNum\\": 1,\\n  \\"NextPage\\": false\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryDomainListResponse>\\n    <Data>\\n        <Domain>\\n            <ExpirationDate>Nov 02,2019 04:00:45</expirationDate>\\n            <InstanceId>ST20151102120031118</SaleId>\\n            <RegistrationDate>Nov 02,2017 04:00:45</registrationDate>\\n            <DomainName>test.com</DomainName>\\n            <DomainType>gTLD</domainType>\\n        </Domain>\\n    </Data>\\n    <TotalItemNum>1</TotalItemNum>\\n    <PageSize>5</PageSize>\\n    <CurrentPageNum>0</CurrentPageNum>\\n    <RequestId>B7AB5469-5E38-4AA9-A920-C65B7A9C8E6E</RequestId>\\n    <PrePage>false</PrePage>\\n    <TotalPageNum>1</TotalPageNum>\\n    <NextPage>false</NextPage>\\n</QueryDomainListResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryDomainListResponse>\\n    <Data>\\n        <Domain>\\n            <ExpirationDate>Nov 02,2019 04:00:45</expirationDate>\\n            <InstanceId>ST20151102120031118</SaleId>\\n            <RegistrationDate>Nov 02,2017 04:00:45</registrationDate>\\n            <DomainName>test.com</DomainName>\\n            <DomainType>gTLD</domainType>\\n        </Domain>\\n    </Data>\\n    <TotalItemNum>1</TotalItemNum>\\n    <PageSize>5</PageSize>\\n    <CurrentPageNum>0</CurrentPageNum>\\n    <RequestId>B7AB5469-5E38-4AA9-A920-C65B7A9C8E6E</RequestId>\\n    <PrePage>false</PrePage>\\n    <TotalPageNum>1</TotalPageNum>\\n    <NextPage>false</NextPage>\\n</QueryDomainListResponse>"}]',
      'title' => '分页查询自己账户下的域名列表',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ScrollDomainList' => 
    array (
      'summary' => '调用ScrollDomainList翻页遍历域名列表。',
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
          'name' => 'EndExpirationDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询域名到期日期范围的结束时间，计算方式为UTC时间1970年1月1日0点距离现在的毫秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1541520000000',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'StartExpirationDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询域名到期日期范围的开始时间，计算方式为UTC时间1970年1月1日0点距离现在的毫秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1541520000000',
          ),
        ),
        4 => 
        array (
          'name' => 'ProductDomainType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名类型。取值：
- **New gTLD**。
- **gTLD**。
- **ccTLD**。
- **other**。',
            'type' => 'string',
            'required' => false,
            'example' => 'gTLD',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名列表的分页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '500',
            'minimum' => '1',
            'example' => '50',
            'default' => '200',
          ),
        ),
        6 => 
        array (
          'name' => 'DomainGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名分组ID，可通过[QueryDomainGroupList](https://help.aliyun.com/document_detail/69362.html)接口获取。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123456',
          ),
        ),
        7 => 
        array (
          'name' => 'DomainStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名状态。取值：
- **0**：全部。
- **1**：急需续费。
- **2**：急需赎回。
- **3**：正常。
- **4**：正在转出万网。 
- **5**：域名持有者信息修改中。
- **6**：未实名认证。
- **7**：审核失败，重新实名认证。
- **8**：审核中。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'EndLength',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询域名长度范围的结束长度。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
          ),
        ),
        9 => 
        array (
          'name' => 'Excluded',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排除关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        10 => 
        array (
          'name' => 'ExcludedPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开头排除关键字。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        11 => 
        array (
          'name' => 'ExcludedSuffix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束排除关键字。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        12 => 
        array (
          'name' => 'Form',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名组成信息。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        13 => 
        array (
          'name' => 'KeyWord',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        14 => 
        array (
          'name' => 'KeyWordPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开头关键字。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        15 => 
        array (
          'name' => 'KeyWordSuffix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束关键字。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        16 => 
        array (
          'name' => 'StartLength',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询域名长度范围的开始长度。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        17 => 
        array (
          'name' => 'TradeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发布状态。取值：
- **2**：已发布一口价。
- **3**：已发布线上议价。
- **4**：已发布竞价。
- **6**：已发布带价push。
- **-1**：未发布域名交易。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '-1',
          ),
        ),
        18 => 
        array (
          'name' => 'Suffixs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询后缀列表，以逗号（,）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => 'com',
          ),
        ),
        19 => 
        array (
          'name' => 'StartRegistrationDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询域名注册日期范围的开始时间，计算方式为UTC时间1970年1月1日0点距离现在的毫秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1541520000000',
          ),
        ),
        20 => 
        array (
          'name' => 'EndRegistrationDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询域名注册日期范围的结束时间，计算方式为UTC时间1970年1月1日0点距离现在的毫秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1541520000000',
          ),
        ),
        21 => 
        array (
          'name' => 'ScrollId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '翻页遍历ID（技术参数）。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        22 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组id。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmw6bpc6n7zai',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '722AB7F5-61F0-408C-A012-4784AFD34083',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '50',
              ),
              'ScrollId' => 
              array (
                'description' => '翻页遍历ID。',
                'type' => 'string',
                'example' => 'test',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Domain' => 
                  array (
                    'description' => '域名列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '域名列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DomainAuditStatus' => 
                        array (
                          'description' => '域名实名认证状态。取值：
- **FAILED**：实名认证失败。
- **SUCCEED**：实名认证成功。
- **NONAUDIT**：未实名认证。
- **AUDITING**：审核中。',
                          'type' => 'string',
                          'example' => 'NONAUDIT',
                        ),
                        'DomainGroupId' => 
                        array (
                          'description' => '域名分组编号。
',
                          'type' => 'string',
                          'example' => '1234',
                        ),
                        'Remark' => 
                        array (
                          'description' => '域名备注。',
                          'type' => 'string',
                          'example' => '测试域名',
                        ),
                        'DomainGroupName' => 
                        array (
                          'description' => '域名分组名称。',
                          'type' => 'string',
                          'example' => '测试分组',
                        ),
                        'ZhRegistrantOrganization' => 
                        array (
                          'description' => '中文域名持有者。',
                          'type' => 'string',
                          'example' => '阿里云',
                        ),
                        'RegistrantOrganization' => 
                        array (
                          'description' => '域名持有者。',
                          'type' => 'string',
                          'example' => 'alibaba cloud',
                        ),
                        'RegistrationDate' => 
                        array (
                          'description' => '注册时间。
',
                          'type' => 'string',
                          'example' => '2017-02-15 00:00:00',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '域名实例编号。',
                          'type' => 'string',
                          'example' => 'S1234',
                        ),
                        'DomainName' => 
                        array (
                          'description' => '域名。',
                          'type' => 'string',
                          'example' => 'example.com',
                        ),
                        'ExpirationDateStatus' => 
                        array (
                          'description' => '域名过期状态。取值：
- **1**：域名未过期。
- **2**：域名已过期。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'ExpirationDate' => 
                        array (
                          'description' => '域名到期日。
',
                          'type' => 'string',
                          'example' => '2019-02-15 17:30:35',
                        ),
                        'DnsList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Dns' => 
                            array (
                              'description' => 'dns列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'DNS列表。',
                                'type' => 'string',
                                'example' => '["dns15.hichina.com", "dns16.hichina.com"]',
                              ),
                            ),
                          ),
                        ),
                        'Email' => 
                        array (
                          'description' => '邮箱。',
                          'type' => 'string',
                          'example' => 'username@example.com',
                        ),
                        'RegistrantType' => 
                        array (
                          'description' => '域名注册类型。取值：
- **1**：个人。
- **2**：企业。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'ExpirationDateLong' => 
                        array (
                          'description' => '域名到期日，UTC时间1970年1月1日0点距离域名到期日的毫秒数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1550223035000',
                        ),
                        'ExpirationCurrDateDiff' => 
                        array (
                          'description' => '到期日和当前日期差。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'Premium' => 
                        array (
                          'description' => '是否是溢价词。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'RegistrationDateLong' => 
                        array (
                          'description' => '域名注册时间，计算方式为UTC时间1970年1月1日0点距离注册时间的毫秒数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1487088000000',
                        ),
                        'ProductId' => 
                        array (
                          'description' => '产品ID。',
                          'type' => 'string',
                          'example' => '2a',
                        ),
                        'DomainStatus' => 
                        array (
                          'description' => '域名状态。取值：
- **1**：急需续费。
- **2**：急需赎回。
- **3**：正常。
- **4**：转出中。
- **5**：域名持有者信息修改中。
- **6**：未实名认证。
- **7**：实名认证失败。
- **8**：实名认证审核中。',
                          'type' => 'string',
                          'example' => '3',
                        ),
                        'DomainType' => 
                        array (
                          'description' => '域名类型。取值：
- **New gTLD**。
-  **gTLD**。
- **ccTLD**。',
                          'type' => 'string',
                          'example' => 'gTLD',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组id。',
                          'type' => 'string',
                          'example' => 'rg-aek2yyciz557g3q',
                        ),
                        'Tag' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '资源标签。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'testKey',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'testValue',
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
              'TotalItemNum' => 
              array (
                'description' => '剩余总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"722AB7F5-61F0-408C-A012-4784AFD34083\\",\\n  \\"PageSize\\": 50,\\n  \\"ScrollId\\": \\"test\\",\\n  \\"Data\\": {\\n    \\"Domain\\": [\\n      {\\n        \\"DomainAuditStatus\\": \\"NONAUDIT\\",\\n        \\"DomainGroupId\\": \\"1234\\",\\n        \\"Remark\\": \\"测试域名\\",\\n        \\"DomainGroupName\\": \\"测试分组\\",\\n        \\"ZhRegistrantOrganization\\": \\"阿里云\\",\\n        \\"RegistrantOrganization\\": \\"alibaba cloud\\",\\n        \\"RegistrationDate\\": \\"2017-02-15 00:00:00\\",\\n        \\"InstanceId\\": \\"S1234\\",\\n        \\"DomainName\\": \\"example.com\\",\\n        \\"ExpirationDateStatus\\": \\"1\\",\\n        \\"ExpirationDate\\": \\"2019-02-15 17:30:35\\",\\n        \\"DnsList\\": {\\n          \\"Dns\\": [\\n            \\"[\\\\\\"dns15.hichina.com\\\\\\", \\\\\\"dns16.hichina.com\\\\\\"]\\"\\n          ]\\n        },\\n        \\"Email\\": \\"username@example.com\\",\\n        \\"RegistrantType\\": \\"1\\",\\n        \\"ExpirationDateLong\\": 1550223035000,\\n        \\"ExpirationCurrDateDiff\\": 10,\\n        \\"Premium\\": false,\\n        \\"RegistrationDateLong\\": 1487088000000,\\n        \\"ProductId\\": \\"2a\\",\\n        \\"DomainStatus\\": \\"3\\",\\n        \\"DomainType\\": \\"gTLD\\",\\n        \\"ResourceGroupId\\": \\"rg-aek2yyciz557g3q\\",\\n        \\"Tag\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"testKey\\",\\n              \\"Value\\": \\"testValue\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"TotalItemNum\\": 200\\n}","errorExample":"{\\n    \\"Data\\":{\\n        \\"Domain\\":[\\n            {\\n                \\"DnsList\\":{\\n                    \\"Dns\\":[\\n                        \\"dns15.hichina.com\\",\\n                        \\"dns16.hichina.com\\"\\n                    ]\\n                },\\n                \\"DomainAuditStatus\\":\\"FAILED\\",\\n                \\"DomainGroupId\\":\\"-1\\",\\n                \\"DomainGroupName\\":\\"未分组\\",\\n                \\"DomainName\\":\\"test.com\\",\\n                \\"DomainStatus\\":\\"7\\",\\n                \\"DomainType\\":\\"gTLD\\",\\n                \\"Email\\":\\"test@a.com\\",\\n                \\"ExpirationCurrDateDiff\\":85,\\n                \\"ExpirationDate\\":\\"2019-02-15 17:30:35\\",\\n                \\"ExpirationDateLong\\":1550223035000,\\n                \\"ExpirationDateStatus\\":\\"1\\",\\n                \\"InstanceId\\":\\"S2017000000\\",\\n                \\"Premium\\":false,\\n                \\"ProductId\\":\\"2a\\",\\n                \\"RegistrantOrganization\\":\\"Test\\",\\n                \\"RegistrantType\\":\\"1\\",\\n                \\"RegistrationDate\\":\\"2017-02-15 00:00:00\\",\\n                \\"RegistrationDateLong\\":1487088000000,\\n                \\"Remark\\":\\"备注\\",\\n                \\"ZhRegistrantOrganization\\":\\"测试\\"\\n            },\\n            {\\n                \\"DnsList\\":{\\n                    \\"Dns\\":[\\n                        \\"dns11.hichina.com\\",\\n                        \\"dns12.hichina.com\\"\\n                    ]\\n                },\\n                \\"DomainAuditStatus\\":\\"SUCCEED\\",\\n                \\"DomainGroupId\\":\\"-1\\",\\n                \\"DomainGroupName\\":\\"未分组\\",\\n                \\"DomainName\\":\\"test1.com\\",\\n                \\"DomainStatus\\":\\"3\\",\\n                \\"DomainType\\":\\"gTLD\\",\\n                \\"Email\\":\\"test@a.com\\",\\n                \\"ExpirationCurrDateDiff\\":181,\\n                \\"ExpirationDate\\":\\"2019-05-22 16:23:19\\",\\n                \\"ExpirationDateLong\\":1558513399000,\\n                \\"ExpirationDateStatus\\":\\"1\\",\\n                \\"InstanceId\\":\\"S2000000000000\\",\\n                \\"Premium\\":false,\\n                \\"ProductId\\":\\"2a\\",\\n                \\"RegistrantOrganization\\":\\"test\\",\\n                \\"RegistrantType\\":\\"1\\",\\n                \\"RegistrationDate\\":\\"2018-05-22 16:23:19\\",\\n                \\"RegistrationDateLong\\":1526977399000,\\n                \\"Remark\\":\\"备注\\",\\n                \\"ZhRegistrantOrganization\\":\\"测试\\"\\n            }\\n        ]\\n    },\\n    \\"PageSize\\":2,\\n    \\"RequestId\\":\\"9012EED7-4B99-4BC3-B04F-4BA637A90DC7\\",\\n    \\"ScrollId\\":\\"eJxlUk2P2yAQ\\",\\n    \\"TotalItemNum\\":539\\n}"},{"type":"xml","example":"<ScrollDomainListResponse>\\n<Data>\\n    <Domain>\\n        <DnsList>\\n            <Dns>dns15.hichina.com</Dns>\\n            <Dns>dns16.hichina.com</Dns>\\n        </DnsList>\\n        <DomainAuditStatus>FAILED</DomainAuditStatus>\\n        <DomainGroupId>-1</DomainGroupId>\\n        <DomainGroupName>未分组</DomainGroupName>\\n        <DomainName>example.com</DomainName>\\n        <DomainStatus>7</DomainStatus>\\n        <DomainType>gTLD</DomainType>\\n        <Email>username@example.com</Email>\\n        <ExpirationCurrDateDiff>85</ExpirationCurrDateDiff>\\n        <ExpirationDate>2019-02-15 17:30:35</ExpirationDate>\\n        <ExpirationDateLong>1550223035000</ExpirationDateLong>\\n        <ExpirationDateStatus>1</ExpirationDateStatus>\\n        <InstanceId>S2017000000</InstanceId>\\n        <Premium>false</Premium>\\n        <ProductId>2a</ProductId>\\n        <RegistrantOrganization>Test</RegistrantOrganization>\\n        <RegistrantType>1</RegistrantType>\\n        <RegistrationDate>2017-02-15 00:00:00</RegistrationDate>\\n        <RegistrationDateLong>1487088000000</RegistrationDateLong>\\n        <Remark>备注</Remark>\\n        <ZhRegistrantOrganization>测试</ZhRegistrantOrganization>\\n    </Domain>\\n    <Domain>\\n        <DnsList>\\n            <Dns>dns11.hichina.com</Dns>\\n            <Dns>dns12.hichina.com</Dns>\\n        </DnsList>\\n        <DomainAuditStatus>SUCCEED</DomainAuditStatus>\\n        <DomainGroupId>-1</DomainGroupId>\\n        <DomainGroupName>未分组</DomainGroupName>\\n        <DomainName>example.com</DomainName>\\n        <DomainStatus>3</DomainStatus>\\n        <DomainType>gTLD</DomainType>\\n        <Email>username@example.com</Email>\\n        <ExpirationCurrDateDiff>181</ExpirationCurrDateDiff>\\n        <ExpirationDate>2019-05-22 16:23:19</ExpirationDate>\\n        <ExpirationDateLong>1558513399000</ExpirationDateLong>\\n        <ExpirationDateStatus>1</ExpirationDateStatus>\\n        <InstanceId>S2000000000000</InstanceId>\\n        <Premium>false</Premium>\\n        <ProductId>2a</ProductId>\\n        <RegistrantOrganization>test</RegistrantOrganization>\\n        <RegistrantType>1</RegistrantType>\\n        <RegistrationDate>2018-05-22 16:23:19</RegistrationDate>\\n        <RegistrationDateLong>1526977399000</RegistrationDateLong>\\n        <Remark>备注</Remark>\\n        <ZhRegistrantOrganization>测试</ZhRegistrantOrganization>\\n    </Domain>\\n</Data>\\n<PageSize>2</PageSize>\\n<RequestId>9012EED7-4B99-4BC3-B04F-4BA637A90DC7</RequestId>\\n<ScrollId>eJxlUk2P2yAQ</ScrollId>\\n<TotalItemNum>539</TotalItemNum>\\n</ScrollDomainListResponse>","errorExample":"<ScrollDomainListResponse>\\n  <Data/>\\n  <TotalItemNum>539</TotalItemNum>\\n  <PageSize>11</PageSize>\\n  <ScrollId>eJxlUk2PmzA</ScrollId>\\n  <RequestId>5CDDD9D8-483E-4FF8-B144-DD80F29A5BE5</RequestId>\\n</ScrollDomainListResponse>"}]',
      'title' => '翻页遍历域名列表',
      'description' => '针对域名持有数量较大的用户，查询域名列表接口响应可能存在缓慢的情况，阿里云提供了翻页遍历域名列表的功能。该接口在第一次调用时，需要传入查询条件，但不要传入scrollId，此时接口会返回scrollId，并不返回数据。第二次查询开始，需要传入上一次请求获取的scrollId，并且后续查询中传入的查询条件将不会生效，需以第一次请求时的查询条件为准。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDomainSuffix' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'D1C9DE44-1D7F-4F66-9653-00000',
              ),
              'SuffixList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Suffix' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '后缀列表。',
                      'type' => 'string',
                      'example' => 'com,net,cn,name',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D1C9DE44-1D7F-4F66-9653-00000\\",\\n  \\"SuffixList\\": {\\n    \\"Suffix\\": [\\n      \\"com,net,cn,name\\"\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"requestId\\": \\"D8E8380A-A34F-4DC2-B440-00000\\",\\n  \\"suffixList\\": [\\n    \\"com\\",\\n    \\"sx.cn\\",\\n    \\"cn\\",\\n    \\"name\\"\\n  ]\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryDomainSuffixResponse>\\n    <SuffixList>\\n        <Suffix>com</Suffix>\\n        <Suffix>net</Suffix>\\n        <Suffix>cn</Suffix>\\n        <Suffix>name</Suffix>\\n    </SuffixList>\\n    <RequestId>D1C9DE44-1D7F-4F66-9653-00000</RequestId>\\n</QueryDomainSuffixResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryDomainSuffixResponse>\\n    <SuffixList>\\n        <Suffix>com</Suffix>\\n        <Suffix>sx.cn</Suffix>\\n        <Suffix>cn</Suffix>\\n        <Suffix>name</Suffix>\\n    </SuffixList>\\n    <RequestId>D1C9DE44-1D7F-4F66-9653-00000</RequestId>\\n</QueryDomainSuffixResponse>"}]',
      'title' => '查询高级搜索后缀列表',
      'summary' => '调用QueryDomainSuffix高级搜索后缀列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryAdvancedDomainList' => 
    array (
      'summary' => '调用QueryAdvancedDomainList高级搜索域名列表。',
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
          'name' => 'EndExpirationDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '到期日期范围查询结束时间，UTC时间1970年1月1日0点距离现在的毫秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'StartExpirationDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '到期日期范围查询开始时间，UTC时间1970年1月1日0点距离现在的毫秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        4 => 
        array (
          'name' => 'ProductDomainType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名类型。取值：
- **New gTLD**。
- **gTLD**。
- **ccTLD**。
- **other**。',
            'type' => 'string',
            'required' => false,
            'example' => 'gTLD',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页码，最小值为**0**。
                           ',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，最小值为**1**，最大值为**200**。
                           ',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '200',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'DomainGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名分组ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '-1',
          ),
        ),
        8 => 
        array (
          'name' => 'DomainNameSort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，根据域名字典序排序。取值：
- **false**：降序。
- **true**：升序。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'DomainStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名状态。取值：
- **0**：全部。
- **1**：急需续费。
- **2**：急需赎回。
- **3**：正常。
- **4**：正在转出万网。
- **5**：域名持有者信息修改中。
- **6**：未实名认证。
- **7**：审核失败，重新实名认证。
- **8**：审核中。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'EndLength',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名长度范围查询结束长度。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        11 => 
        array (
          'name' => 'Excluded',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排除关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        12 => 
        array (
          'name' => 'ExcludedPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开头排除关键字。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        13 => 
        array (
          'name' => 'ExcludedSuffix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束排除关键字。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        14 => 
        array (
          'name' => 'ExpirationDateSort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，根据到期日排序。取值：
- **false**：降序。
- **true**：升序。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        15 => 
        array (
          'name' => 'Form',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名组成信息。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        16 => 
        array (
          'name' => 'KeyWord',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键字。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        17 => 
        array (
          'name' => 'KeyWordPrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开头关键字。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        18 => 
        array (
          'name' => 'KeyWordSuffix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束关键字。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        19 => 
        array (
          'name' => 'ProductDomainTypeSort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，根据域名类型排序。取值：
- **false**：降序。
- **true**：升序。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        20 => 
        array (
          'name' => 'RegistrationDateSort',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，根据注册日排序。取值：
- **false**：降序。
- **true**：升序。		
                           ',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        21 => 
        array (
          'name' => 'StartLength',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名长度范围查询开始长度。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        22 => 
        array (
          'name' => 'TradeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发布状态。取值：
-  **2**：已发布一口价。
- **13**：已发布议价。
- **4**：已发布竞价。
- **6**：已发布带价push。
- **-1**：未发布域名交易。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '-1',
          ),
        ),
        23 => 
        array (
          'name' => 'Suffixs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询后缀列表，以逗号“,”隔开。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.cn',
          ),
        ),
        24 => 
        array (
          'name' => 'StartRegistrationDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '注册日期范围查询开始时间，UTC时间1970年1月1日0点距离现在的毫秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        25 => 
        array (
          'name' => 'EndRegistrationDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '注册日期范围查询结束时间，UTC时间1970年1月1日0点距离现在的毫秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        26 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组id。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmw6bpc6n7zai',
          ),
        ),
        27 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。
',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '数智',
                ),
                'Value' => 
                array (
                  'description' => '实例的标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '废弃',
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
              'PrePage' => 
              array (
                'description' => '是否有上一页。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'CurrentPageNum' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'D200000-C0B9-4CD3-B92A-9B44A000000',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalPageNum' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '275',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Domain' => 
                  array (
                    'description' => '域名列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '域名列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DomainAuditStatus' => 
                        array (
                          'description' => '域名实名认证状态。取值：
- **FAILED**：实名认证失败。
- **SUCCEED**：实名认证成功。
- **NONAUDIT**：未实名认证。
- **AUDITING**：审核中。',
                          'type' => 'string',
                          'example' => 'SUCCEED',
                        ),
                        'DomainGroupId' => 
                        array (
                          'description' => '域名分组编号。',
                          'type' => 'string',
                          'example' => '-1',
                        ),
                        'Remark' => 
                        array (
                          'description' => '域名备注。',
                          'type' => 'string',
                          'example' => '备注',
                        ),
                        'DomainGroupName' => 
                        array (
                          'description' => '域名分组名称。',
                          'type' => 'string',
                          'example' => '默认分组',
                        ),
                        'ZhRegistrantOrganization' => 
                        array (
                          'description' => '中文域名持有者。',
                          'type' => 'string',
                          'example' => 'Tom',
                        ),
                        'RegistrantOrganization' => 
                        array (
                          'description' => '域名持有者。',
                          'type' => 'string',
                          'example' => 'Tom',
                        ),
                        'RegistrationDate' => 
                        array (
                          'description' => '注册时间。
',
                          'type' => 'string',
                          'example' => '2018-04-09 17:07:03',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例编号。',
                          'type' => 'string',
                          'example' => 'S20182000000000',
                        ),
                        'DomainName' => 
                        array (
                          'description' => '域名。',
                          'type' => 'string',
                          'example' => 'example.com',
                        ),
                        'ExpirationDateStatus' => 
                        array (
                          'description' => '域名过期状态。取值：
- **1**：域名未过期。
- **2**：域名已过期。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'ExpirationDate' => 
                        array (
                          'description' => '域名到期日。',
                          'type' => 'string',
                          'example' => '2019-04-09 17:07:03',
                        ),
                        'DnsList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Dns' => 
                            array (
                              'description' => 'dns列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'DNS列表。',
                                'type' => 'string',
                                'example' => '["dns15.hichina.com", "dns16.hichina.com"]',
                              ),
                            ),
                          ),
                        ),
                        'Email' => 
                        array (
                          'description' => '邮箱。',
                          'type' => 'string',
                          'example' => 'username@example.com',
                        ),
                        'RegistrantType' => 
                        array (
                          'description' => '域名注册类型。取值：
- **1**：个人。
- **2**：企业。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'ExpirationDateLong' => 
                        array (
                          'description' => '域名到期日，UTC时间1970年1月1日0点距离域名到期日的毫秒数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1554800823000',
                        ),
                        'ExpirationCurrDateDiff' => 
                        array (
                          'description' => '到期日和当前日期差。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '356',
                        ),
                        'Premium' => 
                        array (
                          'description' => '是否是溢价词。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'RegistrationDateLong' => 
                        array (
                          'description' => '注册时间，UTC时间1970年1月1日0点距离注册时间的毫秒数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1523264823000',
                        ),
                        'ProductId' => 
                        array (
                          'description' => '产品ID。',
                          'type' => 'string',
                          'example' => '2a',
                        ),
                        'DomainStatus' => 
                        array (
                          'description' => '域名状态。取值：
- **1**：急需续费。
- **2**：急需赎回。
- **3**：正常。
- **4**：转出中。
- **5**：域名持有者信息修改中。
- **6**：未实名认证。
- **7**：实名认证失败。
- **8**：实名认证审核中。',
                          'type' => 'string',
                          'example' => '5',
                        ),
                        'DomainType' => 
                        array (
                          'description' => '域名类型。取值：
- **New gTLD**。
-  **gTLD**。
- **ccTLD**。',
                          'type' => 'string',
                          'example' => 'gTLD',
                        ),
                        'ResourceGroupId' => 
                        array (
                          'description' => '资源组 ID。',
                          'type' => 'string',
                          'example' => 'rg-aek2yyciz557g3q',
                        ),
                        'Tag' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '标签。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '标签。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => '备注',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => '标签1',
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
              'TotalItemNum' => 
              array (
                'description' => '记录总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '549',
              ),
              'NextPage' => 
              array (
                'description' => '是否有下一页。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PrePage\\": false,\\n  \\"CurrentPageNum\\": 1,\\n  \\"RequestId\\": \\"D200000-C0B9-4CD3-B92A-9B44A000000\\",\\n  \\"PageSize\\": 2,\\n  \\"TotalPageNum\\": 275,\\n  \\"Data\\": {\\n    \\"Domain\\": [\\n      {\\n        \\"DomainAuditStatus\\": \\"SUCCEED\\",\\n        \\"DomainGroupId\\": \\"-1\\",\\n        \\"Remark\\": \\"备注\\",\\n        \\"DomainGroupName\\": \\"默认分组\\",\\n        \\"ZhRegistrantOrganization\\": \\"Tom\\",\\n        \\"RegistrantOrganization\\": \\"Tom\\",\\n        \\"RegistrationDate\\": \\"2018-04-09 17:07:03\\",\\n        \\"InstanceId\\": \\"S20182000000000\\",\\n        \\"DomainName\\": \\"example.com\\",\\n        \\"ExpirationDateStatus\\": \\"1\\",\\n        \\"ExpirationDate\\": \\"2019-04-09 17:07:03\\",\\n        \\"DnsList\\": {\\n          \\"Dns\\": [\\n            \\"[\\\\\\"dns15.hichina.com\\\\\\", \\\\\\"dns16.hichina.com\\\\\\"]\\"\\n          ]\\n        },\\n        \\"Email\\": \\"username@example.com\\",\\n        \\"RegistrantType\\": \\"1\\",\\n        \\"ExpirationDateLong\\": 1554800823000,\\n        \\"ExpirationCurrDateDiff\\": 356,\\n        \\"Premium\\": false,\\n        \\"RegistrationDateLong\\": 1523264823000,\\n        \\"ProductId\\": \\"2a\\",\\n        \\"DomainStatus\\": \\"5\\",\\n        \\"DomainType\\": \\"gTLD\\",\\n        \\"ResourceGroupId\\": \\"rg-aek2yyciz557g3q\\",\\n        \\"Tag\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"备注\\",\\n              \\"Value\\": \\"标签1\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  },\\n  \\"TotalItemNum\\": 549,\\n  \\"NextPage\\": true\\n}","errorExample":""},{"type":"xml","example":"<PrePage>false</PrePage>\\n<CurrentPageNum>1</CurrentPageNum>\\n<PageSize>2</PageSize>\\n<RequestId>D200000-C0B9-4CD3-B92A-9B44A000000</RequestId>\\n<TotalPageNum>275</TotalPageNum>\\n<Data>\\n    <Domain>\\n        <RegistrantType>1</RegistrantType>\\n        <Email>username@example.com</Email>\\n        <ExpirationCurrDateDiff>356</ExpirationCurrDateDiff>\\n        <RegistrationDateLong>1523264823000</RegistrationDateLong>\\n        <RegistrationDate>2018-04-09 17:07:03</RegistrationDate>\\n        <InstanceId>S20182000000000</InstanceId>\\n        <DomainName>example.com</DomainName>\\n        <DomainGroupId>-1</DomainGroupId>\\n        <Premium>false</Premium>\\n        <ProductId>2a</ProductId>\\n        <DomainAuditStatus>SUCCEED</DomainAuditStatus>\\n        <Remark>备注</Remark>\\n        <ExpirationDateLong>1554800823000</ExpirationDateLong>\\n        <ExpirationDateStatus>1</ExpirationDateStatus>\\n        <DomainType>gTLD</DomainType>\\n        <DomainGroupName>默认分组</DomainGroupName>\\n        <ExpirationDate>2019-04-09 17:07:03</ExpirationDate>\\n        <ZhRegistrantOrganization>Tom</ZhRegistrantOrganization>\\n        <RegistrantOrganization>Tom</RegistrantOrganization>\\n        <DomainStatus>5</DomainStatus>\\n        <DnsList>\\n            <Dns>[\\"dns15.hichina.com\\", \\"dns16.hichina.com\\"]</Dns>\\n        </DnsList>\\n    </Domain>\\n</Data>\\n<TotalItemNum>549</TotalItemNum>\\n<NextPage>true</NextPage>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryAdvancedDomainListResponse>\\n    <Data>\\n        <Domain>\\n            <RegistrationDateLong>1523264823000</RegistrationDateLong>\\n            <InstanceId>S20182000000000</InstanceId>\\n            <DomainStatus>5</DomainStatus>\\n            <ExpirationDateStatus>1</ExpirationDateStatus>\\n            <DomainAuditStatus>SUCCEED</DomainAuditStatus>\\n            <ExpirationDateLong>1554800823000</ExpirationDateLong>\\n            <Premium>false</Premium>\\n            <ProductId>2a</ProductId>\\n            <ExpirationDate>2019-04-09 17:07:03</ExpirationDate>\\n            <DomainGroupId>-1</DomainGroupId>\\n            <RegistrantType>1</RegistrantType>\\n            <RegistrationDate>2018-04-09 17:07:03</RegistrationDate>\\n            <DomainGroupName>默认分组</DomainGroupName>\\n            <DomainName>test1.com</DomainName>\\n            <DomainType></DomainType>\\n            <ExpirationCurrDateDiff>356</ExpirationCurrDateDiff>\\n            <Remark></Remark>\\n        </Domain>\\n        <Domain>\\n            <RegistrationDateLong>1523263508000</RegistrationDateLong>\\n            <InstanceId>S20182000000001</InstanceId>\\n            <DomainStatus>1</DomainStatus>\\n            <ExpirationDateStatus>1</ExpirationDateStatus>\\n            <DomainAuditStatus>SUCCEED</DomainAuditStatus>\\n            <ExpirationDateLong>1554799508000</ExpirationDateLong>\\n            <Premium>false</Premium>\\n            <ProductId>2a</ProductId>\\n            <ExpirationDate>2019-04-09 16:45:08</ExpirationDate>\\n            <DomainGroupId>-1</DomainGroupId>\\n            <RegistrantType>1</RegistrantType>\\n            <RegistrationDate>2018-04-09 16:45:08</RegistrationDate>\\n            <DomainGroupName>默认分组</DomainGroupName>\\n            <DomainName>test2.com</DomainName>\\n            <DomainType></DomainType>\\n            <ExpirationCurrDateDiff>356</ExpirationCurrDateDiff>\\n            <Remark></Remark>\\n        </Domain>\\n    </Data>\\n    <TotalItemNum>549</TotalItemNum>\\n    <PageSize>2</PageSize>\\n    <CurrentPageNum>1</CurrentPageNum>\\n    <RequestId>00000-B054-4444-8F48-000000</RequestId>\\n    <PrePage>false</PrePage>\\n    <TotalPageNum>275</TotalPageNum>\\n    <NextPage>true</NextPage>\\n</QueryAdvancedDomainListResponse>"}]',
      'title' => '高级搜索域名列表',
      'description' => '搜索您当前阿里云账号下满足特定条件的域名。最多显示**5000**条，达到**5000**条请缩小搜索范围。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'LookupTmchNotice' => 
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
          'name' => 'ClaimKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名商标词key，通过[CheckDomainSunriseClaim](https://help.aliyun.com/document_detail/97210.htm?spm=a2c4g.11186623.0.0.4aec615fTVPYjt)接口获取。',
            'type' => 'string',
            'required' => true,
            'example' => '2017092100/8/2/1/kDfu9htHGEx_y-LJ3XSlKMZ70000020001',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可以设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
              'Claims' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Claim' => 
                  array (
                    'description' => '商标信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'GoodsAndServices' => 
                        array (
                          'description' => '商标产品及服务信息。',
                          'type' => 'string',
                          'example' => 'Class 9: Calculators; bags, coverings,containers, carriers and holders for mobile phones, personal handheld computers and notebooks; headphones; speakers; blank storage media;batteries. Class 16: Paper',
                        ),
                        'Contacts' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Contact' => 
                            array (
                              'description' => '商标联系人列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Type' => 
                                  array (
                                    'description' => '类型。',
                                    'type' => 'string',
                                    'example' => 'agent',
                                  ),
                                  'Voice' => 
                                  array (
                                    'description' => '电话。',
                                    'type' => 'string',
                                    'example' => '1390000****',
                                  ),
                                  'Email' => 
                                  array (
                                    'description' => '电子邮件。',
                                    'type' => 'string',
                                    'example' => 'username@example.com',
                                  ),
                                  'Fax' => 
                                  array (
                                    'description' => '传真。',
                                    'type' => 'string',
                                    'example' => '4472335**8',
                                  ),
                                  'Addr' => 
                                  array (
                                    'description' => '地址。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Cc' => 
                                      array (
                                        'description' => '国家。',
                                        'type' => 'string',
                                        'example' => 'NZ',
                                      ),
                                      'Sp' => 
                                      array (
                                        'description' => '省。',
                                        'type' => 'string',
                                        'example' => 'Auckland',
                                      ),
                                      'Pc' => 
                                      array (
                                        'description' => '邮编。',
                                        'type' => 'string',
                                        'example' => '1010',
                                      ),
                                      'City' => 
                                      array (
                                        'description' => '市。',
                                        'type' => 'string',
                                        'example' => 'Auckland',
                                      ),
                                      'Street' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'Street' => 
                                          array (
                                            'type' => 'array',
                                            'items' => 
                                            array (
                                              'description' => '街道。',
                                              'type' => 'string',
                                              'example' => 'Level 5 131 Queen Street',
                                            ),
                                          ),
                                        ),
                                      ),
                                    ),
                                  ),
                                  'Org' => 
                                  array (
                                    'description' => '组织。',
                                    'type' => 'string',
                                    'example' => 'Tom',
                                  ),
                                  'Name' => 
                                  array (
                                    'description' => '姓名。',
                                    'type' => 'string',
                                    'example' => 'Tom',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'MarkName' => 
                        array (
                          'description' => '商标名称。',
                          'type' => 'string',
                          'example' => 'POTED',
                        ),
                        'ClassDescs' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ClassDesc' => 
                            array (
                              'description' => '类型描述。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'ClassNum' => 
                                  array (
                                    'description' => '类型编号。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'example' => '18',
                                  ),
                                  'Desc' => 
                                  array (
                                    'description' => '描述。',
                                    'type' => 'string',
                                    'example' => 'New Zealand',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'Holders' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Holder' => 
                            array (
                              'description' => '商标持有者信息。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Entitlement' => 
                                  array (
                                    'description' => '持有者名称。',
                                    'type' => 'string',
                                    'example' => 'owner',
                                  ),
                                  'Addr' => 
                                  array (
                                    'description' => '地址。',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Cc' => 
                                      array (
                                        'description' => '国家。',
                                        'type' => 'string',
                                        'example' => 'NZ',
                                      ),
                                      'Sp' => 
                                      array (
                                        'description' => '省。',
                                        'type' => 'string',
                                        'example' => 'Wellington',
                                      ),
                                      'Pc' => 
                                      array (
                                        'description' => '邮编。',
                                        'type' => 'string',
                                        'example' => '6011',
                                      ),
                                      'City' => 
                                      array (
                                        'description' => '市。',
                                        'type' => 'string',
                                        'example' => 'Wellington',
                                      ),
                                      'Street' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'Street' => 
                                          array (
                                            'type' => 'array',
                                            'items' => 
                                            array (
                                              'description' => '街道。',
                                              'type' => 'string',
                                              'example' => 'Level 5 131 Queen Street',
                                            ),
                                          ),
                                        ),
                                      ),
                                    ),
                                  ),
                                  'Org' => 
                                  array (
                                    'description' => '组织。',
                                    'type' => 'string',
                                    'example' => 'Whitcoulls 2011 Limited',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'JurDesc' => 
                        array (
                          'description' => '法律信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'JurCC' => 
                            array (
                              'description' => '所在地。',
                              'type' => 'string',
                              'example' => 'NZ',
                            ),
                            'Desc' => 
                            array (
                              'description' => '描述。',
                              'type' => 'string',
                              'example' => 'New Zealand',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '01C10C8E-0468-468C-BCD9-E709BDD0AE8F',
              ),
              'Label' => 
              array (
                'description' => '商标标签。',
                'type' => 'string',
                'example' => 'noted',
              ),
              'Id' => 
              array (
                'description' => 'tmch的通知ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '586608000000',
              ),
              'NotBefore' => 
              array (
                'description' => '商标通知开始时间。',
                'type' => 'string',
                'example' => '2018-10-13T00:00:00.0Z',
              ),
              'NotAfter' => 
              array (
                'description' => '商标通知结束时间。',
                'type' => 'string',
                'example' => '2018-10-15T00:00:00.0Z',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Claims\\": {\\n    \\"Claim\\": [\\n      {\\n        \\"GoodsAndServices\\": \\"Class 9: Calculators; bags, coverings,containers, carriers and holders for mobile phones, personal handheld computers and notebooks; headphones; speakers; blank storage media;batteries. Class 16: Paper\\",\\n        \\"Contacts\\": {\\n          \\"Contact\\": [\\n            {\\n              \\"Type\\": \\"agent\\",\\n              \\"Voice\\": \\"1390000****\\",\\n              \\"Email\\": \\"username@example.com\\",\\n              \\"Fax\\": \\"4472335**8\\",\\n              \\"Addr\\": {\\n                \\"Cc\\": \\"NZ\\",\\n                \\"Sp\\": \\"Auckland\\",\\n                \\"Pc\\": \\"1010\\",\\n                \\"City\\": \\"Auckland\\",\\n                \\"Street\\": {\\n                  \\"Street\\": [\\n                    \\"Level 5 131 Queen Street\\"\\n                  ]\\n                }\\n              },\\n              \\"Org\\": \\"Tom\\",\\n              \\"Name\\": \\"Tom\\"\\n            }\\n          ]\\n        },\\n        \\"MarkName\\": \\"POTED\\",\\n        \\"ClassDescs\\": {\\n          \\"ClassDesc\\": [\\n            {\\n              \\"ClassNum\\": 18,\\n              \\"Desc\\": \\"New Zealand\\"\\n            }\\n          ]\\n        },\\n        \\"Holders\\": {\\n          \\"Holder\\": [\\n            {\\n              \\"Entitlement\\": \\"owner\\",\\n              \\"Addr\\": {\\n                \\"Cc\\": \\"NZ\\",\\n                \\"Sp\\": \\"Wellington\\",\\n                \\"Pc\\": \\"6011\\",\\n                \\"City\\": \\"Wellington\\",\\n                \\"Street\\": {\\n                  \\"Street\\": [\\n                    \\"Level 5 131 Queen Street\\"\\n                  ]\\n                }\\n              },\\n              \\"Org\\": \\"Whitcoulls 2011 Limited\\"\\n            }\\n          ]\\n        },\\n        \\"JurDesc\\": {\\n          \\"JurCC\\": \\"NZ\\",\\n          \\"Desc\\": \\"New Zealand\\"\\n        }\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"01C10C8E-0468-468C-BCD9-E709BDD0AE8F\\",\\n  \\"Label\\": \\"noted\\",\\n  \\"Id\\": 586608000000,\\n  \\"NotBefore\\": \\"2018-10-13T00:00:00.0Z\\",\\n  \\"NotAfter\\": \\"2018-10-15T00:00:00.0Z\\"\\n}","errorExample":"{\\n\\"Claims\\":{\\n    \\"Claim\\":[\\n        {\\n            \\"GoodsAndServices\\":\\"Class 9: Calculators; bags, coverings, containers, carriers and holders for mobile phones\\",\\n            \\"Contacts\\":{\\n                \\"Contact\\":[\\n                    {\\n                        \\"Name\\":\\"AJ Park\\",\\n                        \\"Email\\":\\"dns@ajpark.com\\",\\n                        \\"Voice\\":\\"+64.44738278\\",\\n                        \\"Fax\\":\\"+64.44723358\\",\\n                        \\"Org\\":\\"AJ Park \\",\\n                        \\"Addr\\":{\\n                            \\"Street\\":{\\n                                \\"Street\\":[\\n                                    \\"Level 22, State Insurance Tower\\",\\n                                    \\"1 Willis St\\",\\n                                    \\"Wellington \\"\\n                                ]\\n                            },\\n                            \\"Pc\\":\\"6011\\",\\n                            \\"Cc\\":\\"NZ\\",\\n                            \\"City\\":\\"Wellington\\"\\n                        }\\n                    }\\n                ]\\n            },\\n            \\"Holders\\":{\\n                \\"Holder\\":[\\n                    {\\n                        \\"Org\\":\\"Whitcoulls 2011 Limited\\",\\n                        \\"Addr\\":{\\n                            \\"Street\\":{\\n                                \\"Street\\":[\\n                                    \\"Level 5 131 Queen Street \\"\\n                                ]\\n                            },\\n                            \\"Pc\\":\\"1010\\",\\n                            \\"Cc\\":\\"NZ\\",\\n                            \\"City\\":\\"Auckland\\"\\n                        },\\n                        \\"Entitlement\\":\\"owner\\"\\n                    }\\n                ]\\n            },\\n            \\"JurDesc\\":{\\n                \\"JurCC\\":\\"NZ\\",\\n                \\"Desc\\":\\"New Zealand\\"\\n            },\\n            \\"ClassDescs\\":{\\n                \\"ClassDesc\\":[\\n                    {\\n                        \\"ClassNum\\":18,\\n                        \\"Desc\\":\\"Leather and imitations of leather, and goods made of \\"\\n                    },\\n                    {\\n                        \\"ClassNum\\":35,\\n                        \\"Desc\\":\\"Advertising; business management; business administration; office functions. \\"\\n                    }\\n                ]\\n            },\\n            \\"MarkName\\":\\"NOTED\\"\\n        }\\n    ]\\n},\\n\\"NotBefore\\":\\"2018-10-13T00:00:00.0Z\\",\\n\\"NotAfter\\":\\"2018-10-23T00:00:00.0Z\\",\\n\\"RequestId\\":\\"01C10C8E-0468-468C-BCD9-E709BDD0AE8F\\",\\n\\"Id\\":\\"f58a66080000000000205821776\\",\\n\\"Label\\":\\"noted\\""},{"type":"xml","example":"<tmchNotice>\\n    <id>f58a66080000000000205821776</id>\\n    <notBefore>2018-10-13T00:00:00.0Z</notBefore>\\n    <notAfter>2018-10-15T00:00:00.0Z</notAfter>\\n    <label>noted</label>\\n    <claims>\\n        <claim>\\n            <markName>POTED</markName>\\n            <holder entitlement=\\"owner\\">\\n            <org>Whitcoulls 2011 Limited</org>\\n            <addr>\\n                <street>Level 5 131 Queen Street </street>\\n                <city>Auckland</city>\\n                <pc>1010</pc>\\n                <cc>NZ</cc>\\n            </addr>\\n            </holder>\\n            <contacts>\\n            <contact>\\n                <name>Tom</name>\\n                <org>Tom</org>\\n                <addr>\\n                    <street>Level 22, State Insurance Tower</street>\\n                    <street>1 Willis St</street>\\n                    <street>Wellington </street>\\n                    <city>Wellington</city>\\n                    <pc>6011</pc>\\n                    <cc>NZ</cc>\\n                </addr>\\n                <voice>1390000****</voice>\\n                <fax>4472335**8</fax>\\n                <email>username@example.com</email>\\n            </contact>\\n            </contacts>\\n            <classDesc>Leather and imitations\\n                of leather, and goods made of these materials and not included in\\n                other classes; animal skins, hides; trunks and travelling bags;\\n                umbrellas and parasols; walking sticks; whips, harness and saddlery.\\n            </classDesc>\\n            <classDesc>Advertising; business\\n                management; business administration; office functions.\\n            </classDesc>\\n            <goodsAndServices>Class 9: Calculators; bags, coverings,\\n                containers, carriers and holders for mobile phones, personal handheld\\n                computers and notebooks; headphones; speakers; blank storage media;\\n                batteries. Class 16: Paper\\n            </goodsAndServices>\\n        </claim>\\n    </claims>\\n</tmchNotice>","errorExample":"<tmchNotice>\\n    <id>f58a66080000000000205821776</id>\\n    <notBefore>2018-10-13T00:00:00.0Z</notBefore>\\n    <notAfter>2018-10-15T00:00:00.0Z</notAfter>\\n    <label>noted</label>\\n    <claims>\\n        <claim>\\n            <markName>POTED</markName>\\n            <holder entitlement=\\"owner\\">\\n            <org>Whitcoulls 2011 Limited</org>\\n            <addr>\\n                <street>Level 5 131 Queen Street </street>\\n                <city>Auckland</city>\\n                <pc>1010</pc>\\n                <cc>NZ</cc>\\n            </addr>\\n            </holder>\\n            <scontact>\\n            <contact type=\\"agent\\">\\n                <name>AJ Park</name>\\n                <org>AJ Park </org>\\n                <addr>\\n                    <street>Level 22, State Insurance Tower</street>\\n                    <street>1 Willis St</street>\\n                    <street>Wellington </street>\\n                    <city>Wellington</city>\\n                    <pc>6011</pc>\\n                    <cc>NZ</cc>\\n                </addr>\\n                <voice>+64.44738278</voice>\\n                <fax>+64.44723358</fax>\\n                <email>dns@ajpark.com</email>\\n            </contact>\\n            </contacts>\\n            <classDesc classNum=\\"18\\">Leather and imitations\\n                of leather, and goods made of these materials and not included in\\n                other classes; animal skins, hides; trunks and travelling bags;\\n                umbrellas and parasols; walking sticks; whips, harness and saddlery.\\n            </classDesc>\\n            <classDesc classNum=\\"35\\">Advertising; business\\n                management; business administration; office functions.\\n            </classDesc>\\n            <goodsAndServices>Class 9: Calculators; bags, coverings,\\n                containers, carriers and holders for mobile phones, personal handheld\\n                computers and notebooks; headphones; speakers; blank storage media;\\n                batteries. Class 16: Paper\\n            </goodsAndServices>\\n        </claim>\\n    </claims>\\n</tmchNotice>"}]',
      'title' => '查询tmch（商标词）信息',
      'summary' => '调用LookupTmchNotice根据传入商标词key查询tmch（商标词）信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckDomainSunriseClaim' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
              'ClaimKey' => 
              array (
                'description' => 'TMDB库提供的商标词key。',
                'type' => 'string',
                'example' => '2017092100/8/2/1/kDfu9htHGEx_y-LJ3XSlKMZ70000020001',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1',
              ),
              'Result' => 
              array (
                'description' => '结果。取值：
- **0**：不是商标词或不处于claim域名生命周期。
- **1**：sunrise域名生命周期。
- **2**：claim域名生命周期。
                           ',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1\\",\\n  \\"ClaimKey\\": \\"2017092100/8/2/1/kDfu9htHGEx_y-LJ3XSlKMZ70000020001\\",\\n  \\"Result\\": 1\\n}","errorExample":"{\\n    \\"RequestId\\": \\"BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1\\",\\n    \\"Result\\": 2,\\n    \\"ClaimKey\\": \\"2017092100/8/2/1/kDfu9htHGEx_y-LJ3XSlKMZ70000020001\\"\\n}"},{"type":"xml","example":"<CheckDomainSunriseClaim>\\n    <RequestId>BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1</RequestId>\\n    <Result>1</Result>\\n    <ClaimKey>2017092100/8/2/1/kDfu9htHGEx_y-LJ3XSlKMZ70000020001</ClaimKey>\\n</CheckDomainSunriseClaim>","errorExample":"<CheckDomainSunriseClaim>\\n    <RequestId>BA7A4FD4-EB9A-4A20-BB0C-9AEB15634DC1</RequestId>\\n    <Result>1</Result>\\n    <ClaimKey>2017092100/8/2/1/kDfu9htHGEx_y-LJ3XSlKMZ70000020001</ClaimKey>\\n</CheckDomainSunriseClaim>"}]',
      'title' => '根据传入域名查询商标词 Key',
      'summary' => '根据传入域名查询商标词key。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryArtExtension' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test.art',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
              'ObjectType' => 
              array (
                'description' => '艺术品分类。',
                'type' => 'string',
                'example' => 'The embroidery',
              ),
              'MaterialsAndTechniques' => 
              array (
                'description' => '材质与工艺。',
                'type' => 'string',
                'example' => 'silk',
              ),
              'InscriptionsAndMarkings' => 
              array (
                'description' => '题词和标识。',
                'type' => 'string',
                'example' => 'realism',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '814B2AF0-ED6F-4C13-B41C-8AC0B1023583',
              ),
              'Reference' => 
              array (
                'description' => '参考。',
                'type' => 'string',
                'example' => 'drawings',
              ),
              'DateOrPeriod' => 
              array (
                'description' => '创作时间。',
                'type' => 'string',
                'example' => '2019-10-01',
              ),
              'Dimensions' => 
              array (
                'description' => '尺寸。',
                'type' => 'string',
                'example' => '20 cm',
              ),
              'Title' => 
              array (
                'description' => '名称。',
                'type' => 'string',
                'example' => 'Peace and friendship',
              ),
              'Features' => 
              array (
                'description' => '艺术特征。',
                'type' => 'string',
                'example' => 'iconicity',
              ),
              'Subject' => 
              array (
                'description' => '艺术主题。',
                'type' => 'string',
                'example' => 'peace',
              ),
              'Maker' => 
              array (
                'description' => '艺术家、创作者。
',
                'type' => 'string',
                'example' => 'zhang san',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ObjectType\\": \\"The embroidery\\",\\n  \\"RequestId\\": \\"814B2AF0-ED6F-4C13-B41C-8AC0B1023583\\",\\n  \\"Subject\\": \\"peace\\",\\n  \\"Dimensions\\": \\"20 cm\\",\\n  \\"DateOrPeriod\\": \\"2019-10-01\\",\\n  \\"Title\\": \\"Peace and friendship\\",\\n  \\"MaterialsAndTechniques\\": \\"silk\\",\\n  \\"Reference\\": \\"drawings\\",\\n  \\"Maker\\": \\"zhang san\\",\\n  \\"InscriptionsAndMarkings\\": \\"realism\\",\\n  \\"Features\\": \\"iconicity\\"\\n}","errorExample":"{\\n    \\"DateOrPeriod\\":\\"2019-10-01\\",\\n    \\"Dimensions\\":\\"dimensions\\",\\n    \\"Features\\":\\"features\\",\\n    \\"InscriptionsAndMarkings\\":\\"markings\\",\\n    \\"Maker\\":\\"maker\\",\\n    \\"MaterialsAndTechniques\\":\\"materials\\",\\n    \\"ObjectType\\":\\"objectType\\",\\n    \\"Reference\\":\\"reference\\",\\n    \\"RequestId\\":\\"814B2AF0-ED6F-4C13-B41C-8AC0B1023583\\",\\n    \\"Subject\\":\\"subject\\",\\n    \\"Title\\":\\"title\\"\\n}"},{"type":"xml","example":"<QueryArtExtensionResponse>\\n<DateOrPeriod>2019-10-01</DateOrPeriod>\\n<Dimensions>20 cm</Dimensions>\\n<Features>iconicity</Features>\\n<InscriptionsAndMarkings>realism</InscriptionsAndMarkings>\\n<Maker>zhang san</Maker>\\n<MaterialsAndTechniques>silk</MaterialsAndTechniques>\\n<ObjectType>The embroidery</ObjectType>\\n<Reference>drawings</Reference>\\n<RequestId>814B2AF0-ED6F-4C13-B41C-8AC0B1023583</RequestId>\\n<Subject>peace</Subject>\\n<Title>Peace and friendship</Title>\\n</QueryArtExtensionResponse>","errorExample":"<QueryArtExtensionResponse>\\n  <Title>title </Title>\\n  <Subject>subject</Subject>\\n  <Reference>reference</Reference>\\n  <ObjectType>objectType</ObjectType>\\n  <MaterialsAndTechniques>materials</MaterialsAndTechniques>\\n  <Maker>maker</Maker>\\n  <InscriptionsAndMarkings>markings</InscriptionsAndMarkings>\\n  <Features>features</Features>\\n  <Dimensions>dimensions</Dimensions>\\n  <DateOrPeriod>2019-10-01</DateOrPeriod>\\n  <RequestId>5FF5CB45-F34E-406C-8760-C51972EEC315</RequestId>\\n</QueryArtExtensionResponse>"}]',
      'title' => '查询Art扩展信息',
      'summary' => '调用QueryArtExtension查询Art扩展信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForCreatingDnsHost' => 
    array (
      'summary' => '调用SaveSingleTaskForCreatingDnsHost提交单个创建dnshost任务。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名实例编号，可通过查询域名列表接口[QueryDomainList](~~67712~~)获得。
                           ',
            'type' => 'string',
            'required' => true,
            'example' => 'S1234567890',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DnsName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'dns1',
          ),
        ),
        3 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可以设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        4 => 
        array (
          'name' => 'Ip',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'IP地址列表，最多可填写13个，多个IP时使用**list**方式传入。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '无。',
              'type' => 'string',
              'required' => false,
              'example' => '218.xx.xx.236',
            ),
            'required' => true,
            'example' => '218.xx.xx.236',
            'maxItems' => 13,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '0F1B3547-BE50-4206-8F78-9540FFB85BC1',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'e9b8e8b4-7334-4548-9cec-c30b6891f292',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0F1B3547-BE50-4206-8F78-9540FFB85BC1\\",\\n  \\"TaskNo\\": \\"e9b8e8b4-7334-4548-9cec-c30b6891f292\\"\\n}","errorExample":"{\\n  \\"requestId\\": \\"0F1B3547-BE50-4206-8F78-9540FFB85BC1\\",\\n  \\"taskNo\\": \\"e9b8e8b4-7334-4548-9cec-c30b6891f292\\"\\n}"},{"type":"xml","example":"<SaveSingleTaskForCreatingDnsHostResponse>\\n<TaskNo>e9b8e8b4-7334-4548-9cec-c30b6891f292</TaskNo>\\n<RequestId>0F1B3547-BE50-4206-8F78-9540FFB85BC1</RequestId>\\n</SaveSingleTaskForCreatingDnsHostResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForCreatingDnsHostResponse>\\n<TaskNo>e9b8e8b4-7334-4548-9cec-c30b6891f292</TaskNo>\\n<RequestId>0F1B3547-BE50-4206-8F78-9540FFB85BC1</RequestId>\\n</SaveSingleTaskForCreatingDnsHostResponse>"}]',
      'title' => '提交单个创建dnshost任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForAddingDSRecord' => 
    array (
      'summary' => '调用SaveSingleTaskForAddingDSRecord提交创建DS记录任务。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyTag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥标签，用于标识DNSSEC记录，为小于65536的整数值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可以设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        4 => 
        array (
          'name' => 'Algorithm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密算法编号，详见[Domain Name System Security (DNSSEC) Algorithm Numbers](https://www.iana.org/assignments/dns-sec-alg-numbers/dns-sec-alg-numbers.xhtml)。取值：
- **1**：RSA/MD5。
- **2**：Diffie-Hellman。
- **3**：DSA/SHA-1。
- **5**：RSA/SHA-1。
- **6**：DSA-NSEC3-SHA1。
- **7**：RSASHA1-NSEC3-SHA1。
- **8**：RSA/SHA-256。
- **10**：RSA/SHA-512。
- **12**：GOST R 34.10-2001。
- **13**：ECDSA Curve P-256 with SHA-256。
- **14**：ECDSA Curve P-384 with SHA-384。
- **15**：Ed2551916 Ed448。
- **252**：Reserved for Indirect Keys。
- **253**：private algorithm。
- **254**：private algorithm OID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'DigestType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '摘要算法类型，详见[Delegation Signer (DS) Resource Record (RR) Type Digest Algorithms](https://www.iana.org/assignments/ds-rr-types/ds-rr-types.xhtml)。取值：
- **1**：SHA-1；
- **2**：SHA-256；
- **3**：GOST R 34.11-94；
- **4**：SHA-384。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'Digest',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '摘要。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f58fa917424383934c7b0cf1a90f61d692745680fa06f5ecdbe0924e86de9598',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'E2598CAF-DBFE-494E-95EF-B42A33C178AA',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'e893148f-6343-4ae1-9eba-6e2a4116e142',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E2598CAF-DBFE-494E-95EF-B42A33C178AA\\",\\n  \\"TaskNo\\": \\"e893148f-6343-4ae1-9eba-6e2a4116e142\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"E2598CAF-DBFE-494E-95EF-B42A33C178AA\\",\\n    \\"TaskNo\\":\\"e893148f-6343-4ae1-9eba-6e2a4116e142\\"\\n}"},{"type":"xml","example":"<SaveSingleTaskForAddingDSRecordResponse>\\n  <TaskNo>3cbc5b9f-080d-4b5f-a04b-29f54bffdeab</TaskNo>\\n  <RequestId>722D0361-93BD-4289-824F-D17B218D8BF4</RequestId>\\n</SaveSingleTaskForAddingDSRecordResponse>","errorExample":"<SaveSingleTaskForAddingDSRecordResponse>\\n  <TaskNo>3cbc5b9f-080d-4b5f-a04b-29f54bffdeab</TaskNo>\\n  <RequestId>722D0361-93BD-4289-824F-D17B218D8BF4</RequestId>\\n</SaveSingleTaskForAddingDSRecordResponse>"}]',
      'title' => '提交创建DS记录任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~QueryTaskDetailList~~)接口查询。
                  ',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForDeletingDnsHost' => 
    array (
      'summary' => '调用SaveSingleTaskForDeletingDnsHost提交删除DNSHost任务。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'S2019270W570xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DnsName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'dns1',
          ),
        ),
        3 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '8fc97e44-837a-447d-ac61-ea28d2fe8a38',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '8fc97e44-837a-447d-ac61-ea28d2fexxxx',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8fc97e44-837a-447d-ac61-ea28d2fe8a38\\",\\n  \\"TaskNo\\": \\"8fc97e44-837a-447d-ac61-ea28d2fexxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<SaveSingleTaskForDeletingDnsHostResponse>\\n    <TaskNo>8fc97e44-837a-447d-ac61-ea28d2fexxxx</TaskNo>\\n    <RequestId>B0AC8092-3FE3-4EBC-9620-EC4BB1FB75D3</RequestId>\\n</SaveSingleTaskForDeletingDnsHostResponse>","errorExample":""}]',
      'title' => '提交删除DNSHost任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~QueryTaskDetailList~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForDeletingDSRecord' => 
    array (
      'summary' => '调用SaveSingleTaskForDeletingDSRecord提交删除DS记录任务。',
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyTag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键标签，用于标识DNSSEC记录，为小于65536的整数值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'E2598CAF-DBFE-494E-95EF-B42A33C178AA',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'e893148f-6343-4ae1-9eba-6e2a4116e142',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E2598CAF-DBFE-494E-95EF-B42A33C178AA\\",\\n  \\"TaskNo\\": \\"e893148f-6343-4ae1-9eba-6e2a4116e142\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"E2598CAF-DBFE-494E-95EF-B42A33C178AA\\",\\n    \\"TaskNo\\":\\"e893148f-6343-4ae1-9eba-6e2a4116e142\\"\\n}"},{"type":"xml","example":"<SaveSingleTaskForDeletingDSRecordResponse>\\n  <TaskNo>612db86b-4d8e-44ab-8d54-8d3fb3c0c582</TaskNo>\\n  <RequestId>2D347ECF-6D8E-4202-8236-692362D8D004</RequestId>\\n</SaveSingleTaskForDeletingDSRecordResponse>","errorExample":"<SaveSingleTaskForDeletingDSRecordResponse>\\n  <TaskNo>612db86b-4d8e-44ab-8d54-8d3fb3c0c582</TaskNo>\\n  <RequestId>2D347ECF-6D8E-4202-8236-692362D8D004</RequestId>\\n</SaveSingleTaskForDeletingDSRecordResponse>"}]',
      'title' => '提交删除DS记录任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~QueryTaskDetailList~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForSynchronizingDnsHost' => 
    array (
      'summary' => '调用SaveSingleTaskForSynchronizingDnsHost提交同步DNS host任务。用来处理DNS host缺失、不一致等情况。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名实例编号，可通过查询域名列表接口[QueryDomainList](~~67712~~)获得。',
            'type' => 'string',
            'required' => true,
            'example' => 'ST2017120814571100001303',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '0F1B3547-BE50-4206-8F78-9540FFB85BC1',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'e9b8e8b4-7334-4548-9cec-c30b6891f292',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0F1B3547-BE50-4206-8F78-9540FFB85BC1\\",\\n  \\"TaskNo\\": \\"e9b8e8b4-7334-4548-9cec-c30b6891f292\\"\\n}","errorExample":"{\\n  \\"requestId\\": \\"0F1B3547-BE50-4206-8F78-9540FFB85BC1\\",\\n  \\"taskNo\\": \\"e9b8e8b4-7334-4548-9cec-c30b6891f292\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForSynchronizingDnsHostResponse>\\n<TaskNo>e9b8e8b4-7334-4548-9cec-c30b6891f292</TaskNo>\\n<RequestId>0F1B3547-BE50-4206-8F78-9540FFB85BC1</RequestId>\\n</SaveSingleTaskForSynchronizingDnsHostResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForSynchronizingDnsHostResponse>\\n<TaskNo>e9b8e8b4-7334-4548-9cec-c30b6891f292</TaskNo>\\n<RequestId>0F1B3547-BE50-4206-8F78-9540FFB85BC1</RequestId>\\n</SaveSingleTaskForSynchronizingDnsHostResponse>"}]',
      'title' => '提交同步DNS host任务',
      'description' => '任务执行结果请通过[查询任务详情列表](~~67710~~)接口来查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForSynchronizingDSRecord' => 
    array (
      'summary' => '调用SaveSingleTaskForSynchronizingDSRecord提交同步DS记录任务。',
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'E2598CAF-DBFE-494E-95EF-B42A33C178AA',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'e893148f-6343-4ae1-9eba-6e2a4116e142',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E2598CAF-DBFE-494E-95EF-B42A33C178AA\\",\\n  \\"TaskNo\\": \\"e893148f-6343-4ae1-9eba-6e2a4116e142\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"E2598CAF-DBFE-494E-95EF-B42A33C178AA\\",\\n    \\"TaskNo\\":\\"e893148f-6343-4ae1-9eba-6e2a4116e142\\"\\n}"},{"type":"xml","example":"<SaveSingleTaskForSynchronizingDSRecordResponse>\\n  <TaskNo>3cbc5b9f-080d-4b5f-a04b-29f54bffdeab</TaskNo>\\n  <RequestId>722D0361-93BD-4289-824F-D17B218D8BF4</RequestId>\\n</SaveSingleTaskForSynchronizingDSRecordResponse>","errorExample":"<SaveSingleTaskForSynchronizingDSRecordResponse>\\n  <TaskNo>3cbc5b9f-080d-4b5f-a04b-29f54bffdeab</TaskNo>\\n  <RequestId>722D0361-93BD-4289-824F-D17B218D8BF4</RequestId>\\n</SaveSingleTaskForSynchronizingDSRecordResponse>"}]',
      'title' => '提交同步DS记录任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForModifyingDnsHost' => 
    array (
      'summary' => '调用SaveSingleTaskForModifyingDnsHost提交修改dnshost任务。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名实例编号，可通过查询域名列表接口（QueryDomainList）获得。
                           ',
            'type' => 'string',
            'required' => true,
            'example' => 'S123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DnsName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'DNS名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'dns1',
          ),
        ),
        3 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        4 => 
        array (
          'name' => 'Ip',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'IP地址列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '无。',
              'type' => 'string',
              'required' => false,
              'example' => '218.xx.xx.236',
            ),
            'required' => true,
            'example' => '218.xx.xx.236',
            'maxItems' => 13,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '0F1B3547-BE50-4206-8F78-9540FFB85BC1',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'e9b8e8b4-7334-4548-9cec-c30b6891f292',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0F1B3547-BE50-4206-8F78-9540FFB85BC1\\",\\n  \\"TaskNo\\": \\"e9b8e8b4-7334-4548-9cec-c30b6891f292\\"\\n}","errorExample":"{\\n  \\"requestId\\": \\"0F1B3547-BE50-4206-8F78-9540FFB85BC1\\",\\n  \\"taskNo\\": \\"e9b8e8b4-7334-4548-9cec-c30b6891f292\\"\\n}"},{"type":"xml","example":"<SaveSingleTaskForModifyingDnsHostResponse>\\n<requestId>0F1B3547-BE50-4206-8F78-9540FFB85BC1</requestId>\\n<taskNo>e9b8e8b4-7334-4548-9cec-c30b6891f292</taskNo>\\n</SaveSingleTaskForModifyingDnsHostResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveSingleTaskForModifyingDnsHostResponse>\\n<TaskNo>e9b8e8b4-7334-4548-9cec-c30b6891f292</TaskNo>\\n<RequestId>0F1B3547-BE50-4206-8F78-9540FFB85BC1</RequestId>\\n</SaveSingleTaskForModifyingDnsHostResponse>"}]',
      'title' => '提交修改dnshost任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForModifyingDSRecord' => 
    array (
      'summary' => '调用SaveSingleTaskForModifyingDSRecord提交修改DS记录任务。',
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'KeyTag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关键标签，用于标识DNSSEC记录，为小于65536的整数值。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        4 => 
        array (
          'name' => 'Algorithm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '加密算法编号，详见[Domain Name System Security (DNSSEC) Algorithm Numbers](https://www.iana.org/assignments/dns-sec-alg-numbers/dns-sec-alg-numbers.xhtml)。取值：
- **1** RSA/MD5；
- **2** Diffie-Hellman；
- **3** DSA/SHA-1；
- **5** RSA/SHA-1；
- **6**：DSA-NSEC3-SHA1；
- **7**：RSASHA1-NSEC3-SHA1；
- **8**：RSA/SHA-256；
- **10**：RSA/SHA-512；
- **12**：GOST R 34.10-2001；
- **13**：ECDSA Curve P-256 with SHA-256；
- **14**：ECDSA Curve P-384 with SHA-384；
- **15**：Ed2551916 Ed448；
- **252**：Reserved for Indirect Keys；
- **253**：private algorithm；
- **254**：private algorithm OID。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'DigestType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '摘要算法类型，详见[Delegation Signer (DS) Resource Record (RR) Type Digest Algorithms](https://www.iana.org/assignments/ds-rr-types/ds-rr-types.xhtml)。取值：
- **1**：SHA-1；
- **2**：SHA-256；
- **3**：GOST R 34.11-94；
- **4**：SHA-384。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'Digest',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '摘要值。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'f58fa917424383934c7b0cf1a90f61d692745680fa06f5ecdbe0924e86de9598',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'E2598CAF-DBFE-494E-95EF-B42A33C178AA',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'e893148f-6343-4ae1-9eba-6e2a4116e142',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E2598CAF-DBFE-494E-95EF-B42A33C178AA\\",\\n  \\"TaskNo\\": \\"e893148f-6343-4ae1-9eba-6e2a4116e142\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"E2598CAF-DBFE-494E-95EF-B42A33C178AA\\",\\n    \\"TaskNo\\":\\"e893148f-6343-4ae1-9eba-6e2a4116e142\\"\\n}"},{"type":"xml","example":"<SaveSingleTaskForModifyingDSRecordResponse>\\n  <TaskNo>3cbc5b9f-080d-4b5f-a04b-29f54bffdeab</TaskNo>\\n  <RequestId>722D0361-93BD-4289-824F-D17B218D8BF4</RequestId>\\n</SaveSingleTaskForModifyingDSRecordResponse>","errorExample":"<SaveSingleTaskForModifyingDSRecordResponse>\\n  <TaskNo>3cbc5b9f-080d-4b5f-a04b-29f54bffdeab</TaskNo>\\n  <RequestId>722D0361-93BD-4289-824F-D17B218D8BF4</RequestId>\\n</SaveSingleTaskForModifyingDSRecordResponse>"}]',
      'title' => '提交修改DS记录任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveBatchTaskForModifyingDomainDns' => 
    array (
      'summary' => '调用SaveBatchTaskForModifyingDomainDns提交批量修改域名DNS任务。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可以设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'AliyunDns',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否修改为阿里云DNS。取值：
- **true**：是。
- **false**：否。',
            'type' => 'boolean',
            'required' => true,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'example.cn',
            ),
            'required' => true,
            'example' => 'example.com',
            'maxItems' => 1000,
          ),
        ),
        4 => 
        array (
          'name' => 'DomainNameServer',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'DNS列表，**AliyunDns**值为**false**时此项必填。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'ns1.aliyun.com',
            ),
            'required' => false,
            'example' => 'ns1.test.com',
            'maxItems' => 13,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '6A862A8A-E7AB-4C4E-8946-A74122D9CC4B',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '35fb2fb7-d4d6-4478-9408-22cb63696b86',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6A862A8A-E7AB-4C4E-8946-A74122D9CC4B\\",\\n  \\"TaskNo\\": \\"35fb2fb7-d4d6-4478-9408-22cb63696b86\\"\\n}","errorExample":"{\\n  \\"requestId\\": \\"689C17B3-6AE0-45FB-8E41-4491A02C9999\\",\\n  \\"taskNo\\": \\"fce12087-6c9f-4dcd-92df-d3829b7f19bc\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchTaskForModifyingDomainDnsResponse>\\n<TaskNo>35fb2fb7-d4d6-4478-9408-22cb63696b86</TaskNo>\\n<RequestId>6A862A8A-E7AB-4C4E-8946-A74122D9CC4B</RequestId></SaveBatchTaskForModifyingDomainDnsResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchTaskForModifyingDomainDnsResponse>\\n<TaskNo>35fb2fb7-d4d6-4478-9408-22cb63696b86</TaskNo>\\n<RequestId>6A862A8A-E7AB-4C4E-8946-A74122D9CC4B</RequestId></SaveBatchTaskForModifyingDomainDnsResponse>"}]',
      'title' => '提交批量修改域名DNS任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~QueryTaskDetailList~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDnsHost' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名实例编号，可通过查询域名列表接口QueryDomainList获得。',
            'type' => 'string',
            'required' => true,
            'example' => 'ST2017120814571100001303',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '18A313DD-3AF3-40AA-84F9-56BA45DC511F',
              ),
              'DnsHostList' => 
              array (
                'description' => 'DNS host信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DnsName' => 
                    array (
                      'description' => 'DNS 名称。',
                      'type' => 'string',
                      'example' => 'ns3',
                    ),
                    'IpList' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'IP地址列表。',
                        'type' => 'string',
                        'example' => '185.27.XX.XX, 218.83.XX.XX',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"18A313DD-3AF3-40AA-84F9-56BA45DC511F\\",\\n  \\"DnsHostList\\": [\\n    {\\n      \\"DnsName\\": \\"ns3\\",\\n      \\"IpList\\": [\\n        \\"185.27.XX.XX, 218.83.XX.XX\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryDnsHostResponse>\\n    <dnsHostList>\\n        <dnsName>ns3</dnsName>\\n        <ipList>185.27.XX.XX</ipList>\\n        <ipList>218.83.XX.XX</ipList>\\n    </dnsHostList>\\n    <requestId>6A973B69-7B5F-4959-AA89-ED4010541D20</requestId>\\n</QueryDnsHostResponse>","errorExample":""}]',
      'title' => '查询域名DNS Host',
      'summary' => '调用QueryDnsHost查询域名DNS host。',
      'requestParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDSRecord' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。
',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '814B2AF0-ED6F-4C13-B41C-8AC0B1023583',
              ),
              'DSRecordList' => 
              array (
                'description' => 'DS记录列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DigestType' => 
                    array (
                      'description' => '摘要算法类型，详见[Delegation Signer (DS) Resource Record (RR) Type Digest Algorithms](https://www.iana.org/assignments/ds-rr-types/ds-rr-types.xhtml)。取值：
 - **1**：SHA-1；
 - **2**：SHA-256；
 - **3**：GOST R 34.11-94；
 - **4**：SHA-384。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'Digest' => 
                    array (
                      'description' => '摘要值。',
                      'type' => 'string',
                      'example' => 'f58fa917424383934c7b0cf1a90f61d692745680fa06f5ecdbe0924e86de9598',
                    ),
                    'Algorithm' => 
                    array (
                      'description' => '加密算法编号，详见[Domain Name System Security (DNSSEC) Algorithm Numbers](https://www.iana.org/assignments/dns-sec-alg-numbers/dns-sec-alg-numbers.xhtml)。取值：
 - **1**：RSA/MD5；
 - **2**：Diffie-Hellman；
 - **3**：DSA/SHA-1；
 - **5**：RSA/SHA-1；
 - **6**：DSA-NSEC3-SHA1；
 - **7**：RSASHA1-NSEC3-SHA1；
 - **8**：RSA/SHA-256；
 - **10**：RSA/SHA-512；
 - **12**：GOST R 34.10-2001；
 - **13**：ECDSA Curve P-256 with SHA-256；
 - **14**：ECDSA Curve P-384 with SHA-384；
 - **15**：Ed25519；
 - **16**：Ed448；
 - **252**：Reserved for Indirect Keys；
 - **253**：private algorithm；
 - **254**：private algorithm OID。
',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'KeyTag' => 
                    array (
                      'description' => '关键标签，用于标识DNSSEC记录，为小于65536的整数值。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"814B2AF0-ED6F-4C13-B41C-8AC0B1023583\\",\\n  \\"DSRecordList\\": [\\n    {\\n      \\"DigestType\\": 2,\\n      \\"Digest\\": \\"f58fa917424383934c7b0cf1a90f61d692745680fa06f5ecdbe0924e86de9598\\",\\n      \\"Algorithm\\": 1,\\n      \\"KeyTag\\": 1\\n    }\\n  ]\\n}","errorExample":"{\\n    \\"DSRecordList\\":[\\n        {\\n            \\"Algorithm\\":2,\\n            \\"Digest\\":\\"f58fa917424383934c7b0cf1a90f61d692745680fa06f5ecdbe0924e86de9598\\",\\n            \\"DigestType\\":2,\\n            \\"KeyTag\\":11\\n        },\\n        {\\n            \\"Algorithm\\":2,\\n            \\"Digest\\":\\"a55f53655743cf37f8dd69256f9f8780fd72eef30551fe24e747956221d42095\\",\\n            \\"DigestType\\":2,\\n            \\"KeyTag\\":1\\n        }\\n    ],\\n    \\"RequestId\\":\\"814B2AF0-ED6F-4C13-B41C-8AC0B1023583\\"\\n}"},{"type":"xml","example":"<QueryDSRecordResponse>\\n  <DSRecordList>\\n    <DSRecord>\\n      <Digest>f58fa917424383934c7b0cf1a90f61d692745680fa06f5ecdbe0924e86de9598</Digest>\\n      <DigestType>2</DigestType>\\n      <Algorithm>2</Algorithm>\\n      <KeyTag>11</KeyTag>\\n    </DSRecord>\\n    <DSRecord>\\n      <Digest>a55f53655743cf37f8dd69256f9f8780fd72eef30551fe24e747956221d42095</Digest>\\n      <DigestType>2</DigestType>\\n      <Algorithm>2</Algorithm>\\n      <KeyTag>1</KeyTag>\\n    </DSRecord>\\n  </DSRecordList>\\n  <RequestId>5FF5CB45-F34E-406C-8760-C51972EEC315</RequestId>\\n</QueryDSRecordResponse>","errorExample":"<QueryDSRecordResponse>\\n  <DSRecordList>\\n    <DSRecord>\\n      <Digest>f58fa917424383934c7b0cf1a90f61d692745680fa06f5ecdbe0924e86de9598</Digest>\\n      <DigestType>2</DigestType>\\n      <Algorithm>2</Algorithm>\\n      <KeyTag>11</KeyTag>\\n    </DSRecord>\\n    <DSRecord>\\n      <Digest>a55f53655743cf37f8dd69256f9f8780fd72eef30551fe24e747956221d42095</Digest>\\n      <DigestType>2</DigestType>\\n      <Algorithm>2</Algorithm>\\n      <KeyTag>1</KeyTag>\\n    </DSRecord>\\n  </DSRecordList>\\n  <RequestId>5FF5CB45-F34E-406C-8760-C51972EEC315</RequestId>\\n</QueryDSRecordResponse>"}]',
      'title' => '查询域名DS记录',
      'summary' => '调用QueryDSRecord查询域名DS记录。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDomainGroup' => 
    array (
      'summary' => '删除超过1000个域名的分组为异步过程，需要等待系统处理。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名分组编号，可通过[QueryDomainGroupList](~~69362~~)接口获取。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '40F46D3D-F4F3-4CCB-AC30-2DD20E32E528',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"6176C174-F409-4311-BB09-E46CDE55E720\\"\\n}"},{"type":"xml","example":"<DeleteDomainGroupResponse>\\n  <RequestId>E577B435-A84B-4899-91BC-F7A5E5FB6956</RequestId>\\n</DeleteDomainGroupResponse>","errorExample":"<DeleteDomainGroupResponse>\\n  <RequestId>E577B435-A84B-4899-91BC-F7A5E5FB6956</RequestId>\\n</DeleteDomainGroupResponse>"}]',
      'title' => '删除域名分组',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateDomainToDomainGroup' => 
    array (
      'summary' => '如使用文件上传，替换超过1000个域名的分组，则该操作属于异步操作，需等待系统处理后才能看到结果。',
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'FileToUpload',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'base64编码的**xls**、**xlsx**文件，域名来源为文件时该字段为必须。文件中每行一个域名，单次上传最大支持文件大小为**2M**。',
            'type' => 'string',
            'required' => false,
            'example' => 'dGVzdA==',
          ),
        ),
        3 => 
        array (
          'name' => 'DomainGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分组编号，可通过[QueryDomainGroupList](https://help.aliyun.com/document_detail/69362.html) 接口查询。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1234',
          ),
        ),
        4 => 
        array (
          'name' => 'Replace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否替换当前分组中域名。取值：
- **false**：向分组中新增域名；
- **true**：替换分组中原有域名。',
            'type' => 'boolean',
            'required' => true,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'DataSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名数据来源。取值：
- **1**：自定义输入域名；
- **2**：文件上传。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '自定义输入的域名，域名来源为自定义输入时，该字段为必须。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => 'example.cn',
            ),
            'required' => false,
            'example' => 'example.com',
            'maxItems' => 1000,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '40F46D3D-F4F3-4CCB-AC30-2DD20E32E528',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"40F46D3D-F4F3-4CCB-AC30-2DD20E32E528\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"C7EE737A-5C01-4B82-A9BF-61DA846D57D2\\"\\n}"},{"type":"xml","example":"<UpdateDomainToDomainGroupResponse>\\n  <RequestId>B00B4D8C-2AF3-4EA1-8F39-579CE195C5D6</RequestId>\\n</UpdateDomainToDomainGroupResponse>","errorExample":"<UpdateDomainToDomainGroupResponse>\\n  <RequestId>B00B4D8C-2AF3-4EA1-8F39-579CE195C5D6</RequestId>\\n</UpdateDomainToDomainGroupResponse>"}]',
      'title' => '向分组中设置域名',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveDomainGroup' => 
    array (
      'summary' => '调用SaveDomainGroup创建、更新域名分组。',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名分组名称。',
            'type' => 'string',
            'required' => false,
            'example' => '测试分组',
          ),
        ),
        3 => 
        array (
          'name' => 'DomainGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名分组编号，当不传该参数时为创建分组，传该参数时更新域名分组名称。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'BeingDeleted' => 
              array (
                'description' => '是否正在删除中。
> 超过1000个域名的分组删除为异步过程，需要系统处理一段时间，在此期间内该字段为**true**。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'CreationDate' => 
              array (
                'description' => '域名分组创建时间。',
                'type' => 'string',
                'example' => '2018-04-02 15:59:06',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求标识码。',
                'type' => 'string',
                'example' => '80011ABC-F573-4795-B0E8-377BFBBA3422',
              ),
              'DomainGroupName' => 
              array (
                'description' => '域名分组名称。',
                'type' => 'string',
                'example' => '测试分组',
              ),
              'ModificationDate' => 
              array (
                'description' => '域名分组修改时间。',
                'type' => 'string',
                'example' => '2018-04-02 15:59:06',
              ),
              'DomainGroupStatus' => 
              array (
                'description' => '域名分组状态。取值：
- **PROCESSING**：处理中；
- **COMPLETE**：已完成。

> 通过文件设置分组、替换超过1000个域名的分组等情况下为异步过程，需要等待系统处理，此状态下该字段为**PROCESSING**。',
                'type' => 'string',
                'example' => 'COMPLETE',
              ),
              'DomainGroupId' => 
              array (
                'description' => '域名分组编号。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123456',
              ),
              'TotalNumber' => 
              array (
                'description' => '域名数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"BeingDeleted\\": false,\\n  \\"CreationDate\\": \\"2018-04-02 15:59:06\\",\\n  \\"RequestId\\": \\"80011ABC-F573-4795-B0E8-377BFBBA3422\\",\\n  \\"DomainGroupName\\": \\"测试分组\\",\\n  \\"ModificationDate\\": \\"2018-04-02 15:59:06\\",\\n  \\"DomainGroupStatus\\": \\"COMPLETE\\",\\n  \\"DomainGroupId\\": 123456,\\n  \\"TotalNumber\\": 20\\n}","errorExample":"{\\n    \\"BeingDeleted\\":false,\\n    \\"CreationDate\\":\\"2018-04-27 14:53:55\\",\\n    \\"DomainGroupId\\":123456,\\n    \\"DomainGroupName\\":\\"测试分组\\",\\n    \\"DomainGroupStatus\\":\\"COMPLETE\\",\\n    \\"ModificationDate\\":\\"2018-04-27 14:53:55\\",\\n    \\"RequestId\\":\\"3ADCCF7B-7D2B-4B2E-9154-3C0B6D43287A\\",\\n    \\"TotalNumber\\":0\\n}"},{"type":"xml","example":"<SaveDomainGroupResponse>\\n  <DomainGroupId>1234567</DomainGroupId>\\n  <BeingDeleted>false</BeingDeleted>\\n  <DomainGroupName>测试分组1</DomainGroupName>\\n  <RequestId>A6145E95-96BA-4B17-B891-9CF3C4FBBA35</RequestId>\\n  <ModificationDate>2018-04-27 14:57:25</ModificationDate>\\n  <CreationDate>2018-04-27 14:57:25</CreationDate>\\n  <TotalNumber>0</TotalNumber>\\n  <DomainGroupStatus>COMPLETE</DomainGroupStatus>\\n</SaveDomainGroupResponse>","errorExample":"<SaveDomainGroupResponse>\\n  <DomainGroupId>1234567</DomainGroupId>\\n  <BeingDeleted>false</BeingDeleted>\\n  <DomainGroupName>测试分组1</DomainGroupName>\\n  <RequestId>A6145E95-96BA-4B17-B891-9CF3C4FBBA35</RequestId>\\n  <ModificationDate>2018-04-27 14:57:25</ModificationDate>\\n  <CreationDate>2018-04-27 14:57:25</CreationDate>\\n  <TotalNumber>0</TotalNumber>\\n  <DomainGroupStatus>COMPLETE</DomainGroupStatus>\\n</SaveDomainGroupResponse>"}]',
      'title' => '保存域名分组',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDomainGroupList' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可以设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户自定义的域名分组名称。',
            'type' => 'string',
            'required' => false,
            'example' => '默认分组',
          ),
        ),
        3 => 
        array (
          'name' => 'ShowDeletingGroup',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否展示正在删除中的域名分组，取值如下：

- **false**：否。
- **true**：是。

默认为**false**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
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
                'description' => '唯一请求标识码。',
                'type' => 'string',
                'example' => '80011ABC-F573-4795-B0E8-377BFBBA3422',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DomainGroup' => 
                  array (
                    'description' => '域名分组列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BeingDeleted' => 
                        array (
                          'description' => '是否正在删除中。超过1000个域名的分组删除为异步过程，需要系统处理一段时间，在此期间内该字段为**true**。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'DomainGroupStatus' => 
                        array (
                          'description' => '域名分组状态。取值：
- **PROCESSING**：处理中；
- **COMPLETE**：已完成。

> 通过文件设置分组、替换超过1000个域名的分组等情况下为异步过程，需要等待系统处理，此状态下该字段为**PROCESSING**。',
                          'type' => 'string',
                          'example' => 'COMPLETE',
                        ),
                        'DomainGroupId' => 
                        array (
                          'description' => '域名分组编号。',
                          'type' => 'string',
                          'example' => '-1',
                        ),
                        'DomainGroupName' => 
                        array (
                          'description' => '域名分组名称。',
                          'type' => 'string',
                          'example' => '未分组',
                        ),
                        'ModificationDate' => 
                        array (
                          'description' => '域名分组修改时间。',
                          'type' => 'string',
                          'example' => '2018-04-02 15:59:06',
                        ),
                        'TotalNumber' => 
                        array (
                          'description' => '域名数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '20',
                        ),
                        'CreationDate' => 
                        array (
                          'description' => '域名分组创建时间。',
                          'type' => 'string',
                          'example' => '2018-04-02 15:59:06',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"80011ABC-F573-4795-B0E8-377BFBBA3422\\",\\n  \\"Data\\": {\\n    \\"DomainGroup\\": [\\n      {\\n        \\"BeingDeleted\\": false,\\n        \\"DomainGroupStatus\\": \\"COMPLETE\\",\\n        \\"DomainGroupId\\": \\"-1\\",\\n        \\"DomainGroupName\\": \\"未分组\\",\\n        \\"ModificationDate\\": \\"2018-04-02 15:59:06\\",\\n        \\"TotalNumber\\": 20,\\n        \\"CreationDate\\": \\"2018-04-02 15:59:06\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n    \\"Data\\":{\\n        \\"DomainGroup\\":[{\\n            \\"BeingDeleted\\":false,\\n            \\"CreationDate\\":\\"2018-04-27 14:48:02\\",\\n            \\"DomainGroupId\\":-1,\\n            \\"DomainGroupName\\":\\"未分组\\",\\n            \\"DomainGroupStatus\\":\\"COMPLETE\\",\\n            \\"TotalNumber\\":346\\n        }]\\n    },\\n    \\"RequestId\\":\\"49F5586F-4D94-4909-8C6F-7DD5072ED08D\\"\\n}"},{"type":"xml","example":"<QueryDomainGroupListResponse>\\n  <Data>\\n    <DomainGroup>\\n      <DomainGroupId>-1</DomainGroupId>\\n      <BeingDeleted>false</BeingDeleted>\\n      <DomainGroupName>未分组</DomainGroupName>\\n      <CreationDate>2018-04-27 14:49:10</CreationDate>\\n      <TotalNumber>346</TotalNumber>\\n      <DomainGroupStatus>COMPLETE</DomainGroupStatus>\\n   </DomainGroup>\\n  </Data>\\n  <RequestId>AA897378-08E9-4C34-98F9-8689F4EDC98E</RequestId>\\n</QueryDomainGroupListResponse>","errorExample":"<QueryDomainGroupListResponse>\\n  <Data>\\n    <DomainGroup>\\n      <DomainGroupId>-1</DomainGroupId>\\n      <BeingDeleted>false</BeingDeleted>\\n      <DomainGroupName>未分组</DomainGroupName>\\n      <CreationDate>2018-04-27 14:49:10</CreationDate>\\n      <TotalNumber>346</TotalNumber>\\n      <DomainGroupStatus>COMPLETE</DomainGroupStatus>\\n   </DomainGroup>\\n  </Data>\\n  <RequestId>AA897378-08E9-4C34-98F9-8689F4EDC98E</RequestId>\\n</QueryDomainGroupListResponse>"}]',
      'title' => '查询域名分组列表',
      'summary' => '调用QueryDomainGroupList查询域名分组列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryServerLock' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：

- zh：中文
- en：英文

默认为en。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'S20181*****85212',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
              'StartDate' => 
              array (
                'description' => '锁生效的时间。',
                'type' => 'string',
                'example' => '2021-07-10 17:37:36',
              ),
              'GmtCreate' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2021-07-10 17:37:36',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DFCF6F8-243C-****-8035-4B12FEFD7D48',
              ),
              'ExpireDate' => 
              array (
                'description' => '到期时间。',
                'type' => 'string',
                'example' => '2030-07-10 17:37:36',
              ),
              'DomainName' => 
              array (
                'description' => '查询的域名。',
                'type' => 'string',
                'example' => 'example.com',
              ),
              'UserId' => 
              array (
                'description' => '用户UID。',
                'type' => 'string',
                'example' => '121000000****',
              ),
              'GmtModified' => 
              array (
                'description' => '最近一次修改时间。',
                'type' => 'string',
                'example' => '2021-07-10 17:37:36',
              ),
              'DomainInstanceId' => 
              array (
                'description' => '域名实例ID。',
                'type' => 'string',
                'example' => 'S20190N1DAI4****',
              ),
              'LockInstanceId' => 
              array (
                'description' => '注册局锁实例ID。',
                'type' => 'string',
                'example' => 'S2021591IQ28****',
              ),
              'ServerLockStatus' => 
              array (
                'description' => '注册局锁状态。取值：

- 1：未开启
- 2：已开启
- 3：已关闭',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'LockProductId' => 
              array (
                'description' => '锁产品ID。',
                'type' => 'string',
                'example' => '1807**',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"StartDate\\": \\"2021-07-10 17:37:36\\",\\n  \\"GmtCreate\\": \\"2021-07-10 17:37:36\\",\\n  \\"RequestId\\": \\"9DFCF6F8-243C-****-8035-4B12FEFD7D48\\",\\n  \\"ExpireDate\\": \\"2030-07-10 17:37:36\\",\\n  \\"DomainName\\": \\"example.com\\",\\n  \\"UserId\\": \\"121000000****\\",\\n  \\"GmtModified\\": \\"2021-07-10 17:37:36\\",\\n  \\"DomainInstanceId\\": \\"S20190N1DAI4****\\",\\n  \\"LockInstanceId\\": \\"S2021591IQ28****\\",\\n  \\"ServerLockStatus\\": 2,\\n  \\"LockProductId\\": \\"1807**\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryServerLockResponse>\\n    <StartDate>2021-07-10 17:37:36</StartDate>\\n    <GmtCreate>2021-07-10 17:37:36</GmtCreate>\\n    <RequestId>9DFCF6F8-243C-****-8035-4B12FEFD7D48</RequestId>\\n    <ExpireDate>2030-07-10 17:37:36</ExpireDate>\\n    <DomainName>example.com</DomainName>\\n    <UserId>121000000****</UserId>\\n    <GmtModified>2021-07-10 17:37:36</GmtModified>\\n    <DomainInstanceId>S20190N1DAI4****</DomainInstanceId>\\n    <LockInstanceId>S2021591IQ28****</LockInstanceId>\\n    <ServerLockStatus>2</ServerLockStatus>\\n    <LockProductId>1807**</LockProductId>\\n</QueryServerLockResponse>","errorExample":""}]',
      'title' => '查询注册局锁详情',
      'summary' => '查询域名在注册局的锁详情。',
    ),
    'CheckProcessingServerLockApply' => 
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
          'name' => 'FeePeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买周期年限，单位为**年**。范围为**1~10**年。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待检查的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：

- zh：中文
- en：英文

默认为en。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'example' => '9DFCF6F8-243C-****-8035-4B12FEFD7D48',
              ),
              'Exists' => 
              array (
                'description' => '域名在注册局是否存在锁服务申请为**处理中**的状态。取值：

- true：存在
- false：不存在',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DFCF6F8-243C-****-8035-4B12FEFD7D48\\",\\n  \\"Exists\\": true\\n}","errorExample":""},{"type":"xml","example":"<CheckProcessingServerLockApplyResponse>\\n    <RequestId>9DFCF6F8-243C-****-8035-4B12FEFD7D48</RequestId>\\n    <Exists>true</Exists>\\n</CheckProcessingServerLockApplyResponse>","errorExample":""}]',
      'title' => '检查是否有处理中的注册局锁申请记录',
      'summary' => '检查域名在注册局，是否存在锁服务申请为“处理中”的状态。',
    ),
    'CheckMaxYearOfServerLock' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待检查的域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：

- zh：中文
- en：英文

默认为en。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        3 => 
        array (
          'name' => 'CheckAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '购买的业务类型。取值：

- activate：新注
- renew：续费',
            'type' => 'string',
            'required' => true,
            'example' => 'activate',
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
                'example' => '9DFCF6F8-243C-****-8035-4B12FEFD7D48',
              ),
              'MaxYear' => 
              array (
                'description' => '可购买的最大年限。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DFCF6F8-243C-****-8035-4B12FEFD7D48\\",\\n  \\"MaxYear\\": 10\\n}","errorExample":""},{"type":"xml","example":"<CheckMaxYearOfServerLockResponse>\\n    <RequestId>9DFCF6F8-243C-****-8035-4B12FEFD7D48</RequestId>\\n    <MaxYear>10</MaxYear>\\n</CheckMaxYearOfServerLockResponse>","errorExample":""}]',
      'title' => '检查域名注册局锁最大可购买或续费的年限',
      'summary' => '检测域名最大可购买或续费的年限。',
    ),
    'ListServerLock' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        1 => 
        array (
          'name' => 'EndStartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询截止时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2020-07-10 17:37:36',
          ),
        ),
        2 => 
        array (
          'name' => 'BeginStartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询开始时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2021-07-10 17:37:36',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名列表的分页页码。',
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
            'description' => '域名列表的分页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '500',
          ),
        ),
        5 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：

- zh：中文
- en：英文

默认值为en。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        6 => 
        array (
          'name' => 'LockProductId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '锁产品ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1807**',
          ),
        ),
        7 => 
        array (
          'name' => 'ServerLockStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '注册局锁状态。取值为：

- 1：未开启
- 2：已开启
- 3：已关闭',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'StartExpireDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始过期时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2020-07-10 17:37:36',
          ),
        ),
        9 => 
        array (
          'name' => 'EndExpireDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '截止过期时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2021-07-10 17:37:36',
          ),
        ),
        10 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段。',
            'type' => 'string',
            'required' => false,
            'example' => 'EXPIRE_DATE',
            'enum' => 
            array (
              0 => 'EXPIRE_DATE',
            ),
          ),
        ),
        11 => 
        array (
          'name' => 'OrderByType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务内容（如注册时间、过期时间）的排序顺序。取值：ASC：升序。                                 DESC：倒序。                                           
不传此参数默认为DESC。',
            'type' => 'string',
            'required' => false,
            'example' => 'DESC',
            'enum' => 
            array (
              0 => 'DESC',
              1 => 'ASC',
            ),
          ),
        ),
        12 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
              'PrePage' => 
              array (
                'description' => '是否有上一页。

',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'CurrentPageNum' => 
              array (
                'description' => '当前域名列表的分页页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DFCF6F8-243C-****-8035-4B12FEFD7D48',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '5',
              ),
              'TotalPageNum' => 
              array (
                'description' => '域名列表的总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Data' => 
              array (
                'description' => '域名列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ServerLockStatus' => 
                    array (
                      'description' => '注册局锁状态。取值：

- 1：未开启
- 2：已开启
- 3：已关闭',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'LockInstanceId' => 
                    array (
                      'description' => '注册局锁实例ID。',
                      'type' => 'string',
                      'example' => 'S2021591IQ28****',
                    ),
                    'UserId' => 
                    array (
                      'description' => '阿里云用户编号。',
                      'type' => 'string',
                      'example' => '121000000****',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2020-02-19 16:38:07',
                    ),
                    'ExpireDate' => 
                    array (
                      'description' => '到期时间。',
                      'type' => 'string',
                      'example' => '2030-07-10 17:37:36',
                    ),
                    'StartDate' => 
                    array (
                      'description' => '开始时间。',
                      'type' => 'string',
                      'example' => '2021-07-10 17:37:36',
                    ),
                    'LockProductId' => 
                    array (
                      'description' => '锁产品ID。',
                      'type' => 'string',
                      'example' => '1807**',
                    ),
                    'DomainInstanceId' => 
                    array (
                      'description' => '域名实例ID。',
                      'type' => 'string',
                      'example' => 'S20190N1DAI4****',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '最近一次修改时间。',
                      'type' => 'string',
                      'example' => '2022-02-19 16:40:38',
                    ),
                    'DomainName' => 
                    array (
                      'description' => '存在有效注册局锁信息的域名。',
                      'type' => 'string',
                      'example' => 'example.com',
                    ),
                  ),
                ),
              ),
              'TotalItemNum' => 
              array (
                'description' => '域名总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'NextPage' => 
              array (
                'description' => '是否有下一页。',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PrePage\\": false,\\n  \\"CurrentPageNum\\": 0,\\n  \\"RequestId\\": \\"9DFCF6F8-243C-****-8035-4B12FEFD7D48\\",\\n  \\"PageSize\\": 5,\\n  \\"TotalPageNum\\": 1,\\n  \\"Data\\": [\\n    {\\n      \\"ServerLockStatus\\": \\"2\\",\\n      \\"LockInstanceId\\": \\"S2021591IQ28****\\",\\n      \\"UserId\\": \\"121000000****\\",\\n      \\"GmtCreate\\": \\"2020-02-19 16:38:07\\",\\n      \\"ExpireDate\\": \\"2030-07-10 17:37:36\\",\\n      \\"StartDate\\": \\"2021-07-10 17:37:36\\",\\n      \\"LockProductId\\": \\"1807**\\",\\n      \\"DomainInstanceId\\": \\"S20190N1DAI4****\\",\\n      \\"GmtModified\\": \\"2022-02-19 16:40:38\\",\\n      \\"DomainName\\": \\"example.com\\"\\n    }\\n  ],\\n  \\"TotalItemNum\\": 2,\\n  \\"NextPage\\": false\\n}","errorExample":""},{"type":"xml","example":"<ListServerLockResponse>\\n    <PrePage>false</PrePage>\\n    <CurrentPageNum>0</CurrentPageNum>\\n    <RequestId>9DFCF6F8-243C-****-8035-4B12FEFD7D48</RequestId>\\n    <PageSize>5</PageSize>\\n    <TotalPageNum>1</TotalPageNum>\\n    <Data>\\n        <ServerLockStatus>2</ServerLockStatus>\\n        <LockInstanceId>S2021591IQ28****</LockInstanceId>\\n        <UserId>121000000****</UserId>\\n        <GmtCreate>2020-02-19 16:38:07</GmtCreate>\\n        <ExpireDate>2030-07-10 17:37:36</ExpireDate>\\n        <StartDate>2021-07-10 17:37:36</StartDate>\\n        <LockProductId>1807**</LockProductId>\\n        <DomainInstanceId>S20190N1DAI4****</DomainInstanceId>\\n        <GmtModified>2022-02-19 16:40:38</GmtModified>\\n        <DomainName>example.com</DomainName>\\n    </Data>\\n    <TotalItemNum>2</TotalItemNum>\\n    <NextPage>false</NextPage>\\n</ListServerLockResponse>","errorExample":""}]',
      'title' => '查询注册局锁列表信息',
      'summary' => '查询域名在注册局的锁列表信息。',
    ),
    'SaveBatchTaskForDomainNameProxyService' => 
    array (
      'summary' => '调用SaveBatchTaskForDomainNameProxyService提交批量域名隐私保护服务任务。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启或关闭状态。取值：
- **true**：开启。
- **false**：关闭。',
            'type' => 'boolean',
            'required' => true,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '域名列表，多个域名之间用英文（,）隔开。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '域名。',
              'type' => 'string',
              'required' => false,
              'example' => 'example.com',
            ),
            'required' => true,
            'example' => 'test1.com,test2.com,test3.com',
            'maxItems' => 1000,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'F51977F9-2B40-462B-BCCD-CF5BB1E9DB56',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'd3babb0a-c939-4c25-8c65-c47b65f54923',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\",\\n  \\"TaskNo\\": \\"d3babb0a-c939-4c25-8c65-c47b65f54923\\"\\n}","errorExample":""},{"type":"xml","example":"<SaveBatchTaskForDomainNameProxyServiceResponse>\\n<TaskNo>d3babb0a-c939-4c25-8c65-c47b65f5492a</TaskNo>\\n<RequestId>F51977F9-2B40-462B-BCCD-CF5BB1E9DB56</RequestId>\\n</SaveBatchTaskForDomainNameProxyServiceResponse>","errorExample":""}]',
      'title' => '提交批量域名隐私保护服务任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForDomainNameProxyService' => 
    array (
      'summary' => '调用SaveSingleTaskForDomainNameProxyService提交域名隐私保护服务任务。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开启关闭状态。取值：
- **true**：开启；
- **false**：关闭。
                           ',
            'type' => 'boolean',
            'required' => true,
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
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'F51977F9-2B40-462B-BCCD-CF5BB1E9DB56',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F51977F9-2B40-462B-BCCD-CF5BB1E9DB56\\",\\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\"\\n}","errorExample":""},{"type":"xml","example":"<SaveSingleTaskForDomainNameProxyServiceResponse>\\n    <RequestId>EDC28FEC-6BE0-4583-95BC-test</RequestId>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n</SaveSingleTaskForDomainNameProxyServiceResponse>","errorExample":""}]',
      'title' => '提交域名隐私保护服务任务',
      'description' => '调用SaveSingleTaskForDomainNameProxyService提交域名隐私保护服务任务。',
    ),
    'SubmitOperationAuditInfo' => 
    array (
      'summary' => '调用SubmitOperationAuditInfo提交自助业务审核信息。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。支持一个或多个域名，多个域名之间用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'xxxx.com,yyyy.cn',
          ),
        ),
        2 => 
        array (
          'name' => 'AuditType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型。取值：

**1**：线下转移域名，即将域名从当前的阿里云账号转移至另一个阿里云账号。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'AuditInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待审核信息，不同的业务类型显示的信息不同。',
            'type' => 'string',
            'required' => false,
            'example' => '个人 {"regType":1,"registrantName":"张三","registrantNo":"2201919190**","telephone":"1390123****","account":"zhangsan@alimail.com","reason":1,"remark":"账号丢失"} 企业 {"regType":2,"registrantName":"华大信通","operatorName":"王武","operatorNo":"2201811987101901**",      "operatorPhone":"1390123****","account":"wangwu@alimail.com","companyNo":"91361100MA35N6****","reason":2,"remark":"账号丢失"}',
          ),
        ),
        4 => 
        array (
          'name' => 'Id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审核ID。',
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
                'example' => '9DKCF6F8-243C-40EC-8035-4B12FEFD7C22',
              ),
              'Id' => 
              array (
                'description' => '系统生成的记录ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DKCF6F8-243C-40EC-8035-4B12FEFD7C22\\",\\n  \\"Id\\": 1\\n}","errorExample":""},{"type":"xml","example":"<SubmitOperationAuditInfoResponse>\\n<RequestId>9DKCF6F8-243C-40EC-8035-4B12FEFD7C22</RequestId>\\n<Id>1</Id>\\n</SubmitOperationAuditInfoResponse>","errorExample":""}]',
      'title' => '提交线下审核任务',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SubmitOperationCredentials' => 
    array (
      'summary' => '调用SubmitOperationCredentials提交自助业务待审核的证件资料。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'AuditRecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审核记录ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'RegType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者类型。取值：
- **1**：个人。
- **2**：企业。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'AuditType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审核类型。取值：

**1**：线下转移域名。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'Credentials',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待审核的证件资料信息。',
            'type' => 'string',
            'required' => false,
            'example' => '[{"credentialType":"SHSQB",""credentialUrl":"11212121/1212d**/sqb.jpg"},{"credentialType":"SFZZM",""credentialUrl":"11212121/1212d**/sfzzm.jpg"}]',
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
                'example' => '9DFCF6F8-243C-40EC-8035-4B12FEFX7D98',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DFCF6F8-243C-40EC-8035-4B12FEFX7D98\\"\\n}","errorExample":""},{"type":"xml","example":"<SubmitOperationCredentialsResponse>\\r\\n<RequestId>9DFCF6F8-243C-40EC-8035-4B12FEFX7D98</RequestId>\\r\\n</SubmitOperationCredentialsResponse>","errorExample":""}]',
      'title' => '提交自助业务待审核的证件资料',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CancelOperationAudit' => 
    array (
      'summary' => '调用CancelOperationAudit取消自助业务审核。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'AuditRecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审核记录ID。您可以通过[QueryOperationAuditInfoList](~~172568~~)接口查询审核记录ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
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
                'example' => '9KFCF6F8-243C-40EC-8035-4B12KKFD7D90',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9KFCF6F8-243C-40EC-8035-4B12KKFD7D90\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelOperationAuditResponse>\\r\\n<RequestId>9KFCF6F8-243C-40EC-8035-4B12KKFD7D90</RequestId>\\r\\n</CancelOperationAuditResponse>","errorExample":""}]',
      'title' => '取消线下审核申请',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CancelQualificationVerification' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：

- zh：中文
- en：英文

默认为en。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名实例编号。',
            'type' => 'string',
            'required' => true,
            'example' => 'S20181*****85212',
          ),
        ),
        3 => 
        array (
          'name' => 'QualificationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资质审核接口类型。固定取值为**knet**。',
            'type' => 'string',
            'required' => true,
            'example' => 'knet',
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
                'example' => '9DFCF6F8-243C-****-8035-4B12FEFD7D48',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DFCF6F8-243C-****-8035-4B12FEFD7D48\\"\\n}","errorExample":""},{"type":"xml","example":"<CancelQualificationVerificationResponse>\\n    <RequestId>9DFCF6F8-243C-****-8035-4B12FEFD7D48</RequestId>\\n</CancelQualificationVerificationResponse>","errorExample":""}]',
      'title' => '取消资质审核',
      'summary' => '取消“.餐厅”、“.商标”域名资质审核。',
    ),
    'ResetQualificationVerification' => 
    array (
      'summary' => '.餐厅、.商标域名重置资质审核状态。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名实例编号。',
            'type' => 'string',
            'required' => true,
            'example' => 'S20181*****85212',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：

- zh：中文
- en：英文

默认为en。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'D6CB3623-4726-4947-AC2B-2C6E673B447C',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6CB3623-4726-4947-AC2B-2C6E673B447C\\"\\n}","errorExample":""},{"type":"xml","example":"<ResetQualificationVerificationResponse>\\n    <RequestId>D6CB3623-4726-4947-AC2B-2C6E673B447C</RequestId>\\n</ResetQualificationVerificationResponse>","errorExample":""}]',
      'title' => '重置资质审核状态',
    ),
    'SaveRegistrantProfileRealNameVerification' => 
    array (
      'summary' => '调用SaveRegistrantProfileRealNameVerification接口保存域名联系人和证件信息。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Country',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '国家代码，例如**CN**。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'CN',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。

',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文
- **en**：英文

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'RegistrantProfileId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待保存的信息模板的编号。

信息模板创建成功后由系统自动生成，您可以调用[QueryRegistrantProfiles](https://help.aliyun.com/document_detail/67701.html)接口查询信息模板编号。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1234567',
          ),
        ),
        4 => 
        array (
          'name' => 'City',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '城市（英文）。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'bei jing shi',
          ),
        ),
        5 => 
        array (
          'name' => 'RegistrantOrganization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者名称（英文）。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'ce shi',
          ),
        ),
        6 => 
        array (
          'name' => 'RegistrantName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名联系人（英文）。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'ce shi',
          ),
        ),
        7 => 
        array (
          'name' => 'Province',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '省份（英文）。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'bei jing',
          ),
        ),
        8 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '详细地址（英文）。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'chao yang qu',
          ),
        ),
        9 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电子邮箱。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => 'username@example.com',
          ),
        ),
        10 => 
        array (
          'name' => 'PostalCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮政编码。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '1234567',
          ),
        ),
        11 => 
        array (
          'name' => 'TelArea',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话国家代码。

>例如，中国的电话国家代码为**86**。
',
            'type' => 'string',
            'required' => false,
            'example' => '86',
          ),
        ),
        12 => 
        array (
          'name' => 'Telephone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话号码。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '12345678',
          ),
        ),
        13 => 
        array (
          'name' => 'TelExt',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分机号码。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '1234',
          ),
        ),
        14 => 
        array (
          'name' => 'ZhRegistrantOrganization',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者名称（中文）。

> 该参数仅适用于中国站。当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        15 => 
        array (
          'name' => 'ZhRegistrantName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名联系人（中文）。

> 该参数仅适用于中国站。当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        16 => 
        array (
          'name' => 'ZhProvince',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '省份（中文）。

> 该参数仅适用于中国站。当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '北京',
          ),
        ),
        17 => 
        array (
          'name' => 'ZhAddress',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '详细地址（中文）。

> 该参数仅适用于中国站。当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '朝阳区',
          ),
        ),
        18 => 
        array (
          'name' => 'ZhCity',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '城市（中文）。

> 该参数仅适用于中国站。当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '北京市',
          ),
        ),
        19 => 
        array (
          'name' => 'RegistrantType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名持有者类型。取值：
- **1**：个人。
- **2**：企业、组织等。

> 当未传入**RegistrantProfileId**参数时，本参数才可用且必须传入，如果不传入会导致域名注册失败。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        20 => 
        array (
          'name' => 'RegistrantProfileType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '信息模板类型。取值：
- **common**：通用模板。
- **cnnic**：cnnic模板。

> cnnic模板仅国际站支持，在阿里云国际站注册的“.cn”、“.中国”等CNNIC注册局下的域名需使用cnnic模板，其他域名使用通用模板。',
            'type' => 'string',
            'required' => false,
            'example' => 'common',
          ),
        ),
        21 => 
        array (
          'name' => 'IdentityCredential',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '采用Base64编码的实名认证资料图片。图片要求如下：
- 图片为**jpg**或**bmp**格式。
- 原图片大小为**55K~1M**。',
            'type' => 'string',
            'required' => false,
            'example' => 'dGVzdA==',
          ),
        ),
        22 => 
        array (
          'name' => 'IdentityCredentialNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实名认证证件号码。',
            'type' => 'string',
            'required' => false,
            'example' => '4111111111111110**',
          ),
        ),
        23 => 
        array (
          'name' => 'IdentityCredentialType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实名认证证件类型。取值：
- **SFZ**：身份证。
- **HZ**：护照。
- **YYZZ**：营业执照。
- **ORG**：组织机构代码证。
- **XYDM**：统一社会信用代码证书。
- **TXZ**：港澳居民来往内地通行证。

> 更多证件类型的取值请参见[支持实名认证的证件类型](https://help.aliyun.com/document_detail/72209.html)。',
            'type' => 'string',
            'required' => false,
            'example' => 'SFZ',
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
              'RegistrantProfileId' => 
              array (
                'description' => '查询到的信息模板的编号。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1234567',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4D73432C-7600-****-ACBB-C3B5CA145D32',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RegistrantProfileId\\": 1234567,\\n  \\"RequestId\\": \\"4D73432C-7600-****-ACBB-C3B5CA145D32\\"\\n}","errorExample":""},{"type":"xml","example":"<SaveRegistrantProfileRealNameVerificationResponse>\\n<RequestId>4D73432C-7600-****-ACBB-C3B5CA145D32</RequestId>\\n<RegistrantProfileId>1234567</RegistrantProfileId>\\n</SaveRegistrantProfileRealNameVerificationResponse>","errorExample":""}]',
      'title' => '保存域名信息实名验证',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryFailingReasonListForQualification' => 
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
          'name' => 'QualificationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资质审核接口类型。固定取值**knet**。',
            'type' => 'string',
            'required' => true,
            'example' => 'knet',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：

- zh：中文
- en：英文

默认值为en。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例编号。',
            'type' => 'string',
            'required' => true,
            'example' => 'S20181*****85212',
          ),
        ),
        4 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的记录数。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DFCF6F8-243C-****-8035-4B12FEFD7D48',
              ),
              'Data' => 
              array (
                'description' => '域名资质审核失败列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Date' => 
                    array (
                      'description' => '审核日期。',
                      'type' => 'string',
                      'example' => '2017-03-17 11:08:02',
                    ),
                    'FailReason' => 
                    array (
                      'description' => '域名资质审核失败原因。',
                      'type' => 'string',
                      'example' => '证件审核不通过',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9DFCF6F8-243C-****-8035-4B12FEFD7D48\\",\\n  \\"Data\\": [\\n    {\\n      \\"Date\\": \\"2017-03-17 11:08:02\\",\\n      \\"FailReason\\": \\"证件审核不通过\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryFailingReasonListForQualificationResponse>\\n    <RequestId>9DFCF6F8-243C-****-8035-4B12FEFD7D48</RequestId>\\n    <Data>\\n        <Date>2017-03-17 11:08:02</Date>\\n        <FailReason>证件审核不通过</FailReason>\\n    </Data>\\n</QueryFailingReasonListForQualificationResponse>","errorExample":""}]',
      'title' => '查询资质审核失败原因',
      'summary' => '查询“.餐厅”、“.商标”域名资质审核失败原因。',
    ),
    'QueryOperationAuditInfoDetail' => 
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'AuditRecordId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审核记录ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
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
              'AuditInfo' => 
              array (
                'description' => '审核信息。',
                'type' => 'string',
                'example' => '{"regType":1,"registrantName":"张三","telephone":"1390123****","account":"username@example.com","reason":1,"remark":"账号丢失"}',
              ),
              'AuditStatus' => 
              array (
                'description' => '审核状态。取值：
- **0**：待完善资料。
- **1**、**2**、**3**、**4**：审核中。
- **5**：审核失败。
- **6**：审核成功。
- **7**：取消审核。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DFCF6F8-243C-40EC-8035-4B12FEFD7D1L',
              ),
              'BusinessName' => 
              array (
                'description' => '审核业务名称。',
                'type' => 'string',
                'example' => 'example.com等域名线下转移',
              ),
              'AuditType' => 
              array (
                'description' => '审核类型。取值：

**1**：线下转移域名。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'DomainName' => 
              array (
                'description' => '域名。',
                'type' => 'string',
                'example' => 'example.com,aliyundoc.com',
              ),
              'CreateTime' => 
              array (
                'description' => '记录创建时间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1581919010100',
              ),
              'UpdateTime' => 
              array (
                'description' => '记录更新时间。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1581919010101',
              ),
              'Id' => 
              array (
                'description' => '审核记录ID。',
                'type' => 'string',
                'example' => '1',
              ),
              'Remark' => 
              array (
                'description' => '审核备注。',
                'type' => 'string',
                'example' => '审核通过',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AuditInfo\\": \\"{\\\\\\"regType\\\\\\":1,\\\\\\"registrantName\\\\\\":\\\\\\"张三\\\\\\",\\\\\\"telephone\\\\\\":\\\\\\"1390123****\\\\\\",\\\\\\"account\\\\\\":\\\\\\"username@example.com\\\\\\",\\\\\\"reason\\\\\\":1,\\\\\\"remark\\\\\\":\\\\\\"账号丢失\\\\\\"}\\",\\n  \\"AuditStatus\\": 1,\\n  \\"RequestId\\": \\"9DFCF6F8-243C-40EC-8035-4B12FEFD7D1L\\",\\n  \\"BusinessName\\": \\"example.com等域名线下转移\\",\\n  \\"AuditType\\": 1,\\n  \\"DomainName\\": \\"example.com,aliyundoc.com\\",\\n  \\"CreateTime\\": 1581919010100,\\n  \\"UpdateTime\\": 1581919010101,\\n  \\"Id\\": \\"1\\",\\n  \\"Remark\\": \\"审核通过\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryOperationAuditInfoDetailResponse>\\n<AuditInfo>{\\"regType\\":1,\\"registrantName\\":\\"张三\\",\\"telephone\\":\\"1390123****\\",\\"account\\":\\"username@example.com\\",\\"reason\\":1,\\"remark\\":\\"账号丢失\\"}</AuditInfo>\\n<AuditStatus>1</AuditStatus>\\n<RequestId>9DFCF6F8-243C-40EC-8035-4B12FEFD7D1L</RequestId>\\n<BusinessNam>example.com等域名线下转移</BusinessName>\\n<DomainName>example.com,aliyundoc.com</DomainName>\\n<AuditType>1</AuditType>\\n<CreateTime>1581919010100</CreateTime>\\n<UpdateTime>1581919010101</UpdateTime>\\n<Id>1</Id>\\n<Remark>审核通过</Remark>\\n</QueryOperationAuditInfoDetailResponse>","errorExample":""}]',
      'title' => '查询线下审核任务详情',
      'summary' => '调用QueryOperationAuditInfoDetail查询自助业务的审核记录详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryOperationAuditInfoList' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'AuditType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审核类型。取值：

**1**：线下转移域名。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'AuditStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审核状态。取值：

- **0**：待完善资料。
- **1**、**2**、**3**、**4**：审核中。
- **5**：审核失败。
- **6**：审核成功。
- **7**：取消审核。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
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
            'type' => 'object',
            'properties' => 
            array (
              'PrePage' => 
              array (
                'description' => '是否有上一页。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'CurrentPageNum' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DFCF6F8-243C-40EC-8035-4B12FEFD7D48',
              ),
              'PageSize' => 
              array (
                'description' => '每页记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalPageNum' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Data' => 
              array (
                'description' => '审核数据。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UpdateTime' => 
                    array (
                      'description' => '记录更新时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1581919010101',
                    ),
                    'Remark' => 
                    array (
                      'description' => '审核备注。',
                      'type' => 'string',
                      'example' => '审核中',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '记录创建时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1581919010101',
                    ),
                    'AuditType' => 
                    array (
                      'description' => '审核类型。取值：

**1**：线下转移域名。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'BusinessName' => 
                    array (
                      'description' => '审核业务的名称。',
                      'type' => 'string',
                      'example' => 'example.com等域名线下转移',
                    ),
                    'AuditInfo' => 
                    array (
                      'description' => '待审核信息。',
                      'type' => 'string',
                      'example' => '{"regType":1,"registrantName":"张三","telephone":"1390123****","account":"username@example.com","reason":1,"remark":"账号丢失"}',
                    ),
                    'DomainName' => 
                    array (
                      'description' => '域名。',
                      'type' => 'string',
                      'example' => 'example.com,aliyundoc.com',
                    ),
                    'AuditStatus' => 
                    array (
                      'description' => '审核状态。取值：

- **0**：待完善资料。
- **1**、**2**、**3**、**4**：审核中。
- **5**：审核失败。
- **6**：审核成功。
- **7**：取消审核。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Id' => 
                    array (
                      'description' => '审核记录ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
              'TotalItemNum' => 
              array (
                'description' => '总记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '199',
              ),
              'NextPage' => 
              array (
                'description' => '是否有下一页。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PrePage\\": true,\\n  \\"CurrentPageNum\\": 2,\\n  \\"RequestId\\": \\"9DFCF6F8-243C-40EC-8035-4B12FEFD7D48\\",\\n  \\"PageSize\\": 20,\\n  \\"TotalPageNum\\": 10,\\n  \\"Data\\": [\\n    {\\n      \\"UpdateTime\\": 1581919010101,\\n      \\"Remark\\": \\"审核中\\",\\n      \\"CreateTime\\": 1581919010101,\\n      \\"AuditType\\": 1,\\n      \\"BusinessName\\": \\"example.com等域名线下转移\\",\\n      \\"AuditInfo\\": \\"{\\\\\\"regType\\\\\\":1,\\\\\\"registrantName\\\\\\":\\\\\\"张三\\\\\\",\\\\\\"telephone\\\\\\":\\\\\\"1390123****\\\\\\",\\\\\\"account\\\\\\":\\\\\\"username@example.com\\\\\\",\\\\\\"reason\\\\\\":1,\\\\\\"remark\\\\\\":\\\\\\"账号丢失\\\\\\"}\\",\\n      \\"DomainName\\": \\"example.com,aliyundoc.com\\",\\n      \\"AuditStatus\\": 1,\\n      \\"Id\\": 1\\n    }\\n  ],\\n  \\"TotalItemNum\\": 199,\\n  \\"NextPage\\": true\\n}","errorExample":""},{"type":"xml","example":"<PrePage>true</PrePage>\\n<CurrentPageNum>2</CurrentPageNum>\\n<PageSize>20</PageSize>\\n<RequestId>9DFCF6F8-243C-40EC-8035-4B12FEFD7D48</RequestId>\\n<TotalPageNum>10</TotalPageNum>\\n<Data>\\n    <AuditInfo>{\\"regType\\":1,\\"registrantName\\":\\"张三\\",\\"telephone\\":\\"1390123****\\",\\"account\\":\\"username@example.com\\",\\"reason\\":1,\\"remark\\":\\"账号丢失\\"}</AuditInfo>\\n    <AuditStatus>1</AuditStatus>\\n    <BusinessName>example.com等域名线下转移</BusinessName>\\n    <AuditType>1</AuditType>\\n    <DomainName>example.com,aliyundoc.com</DomainName>\\n    <CreateTime>1581919010101</CreateTime>\\n    <UpdateTime>1581919010101</UpdateTime>\\n    <Id>1</Id>\\n    <Remark>审核中</Remark>\\n</Data>\\n<TotalItemNum>199</TotalItemNum>\\n<NextPage>true</NextPage>","errorExample":""}]',
      'title' => '查询线下审核任务列表',
      'summary' => '调用QueryOperationAuditInfoList查询自助业务的审核记录列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryQualificationDetail' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例编号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'S20181*****85212',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：

- zh：中文
- en：英文

默认为en。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'QualificationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资质审核接口类型。固定取值**knet**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'knet',
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
              'AuditStatus' => 
              array (
                'description' => '审核状态。取值：

- 0：待完善资料。
- 1、2、3、4：审核中。
- 5：审核失败。
- 6：审核成功。
- 7：取消审核。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DFCF6F8-243C-****-8035-4B12FEFD7D48',
              ),
              'Credentials' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'QualificationCredential' => 
                  array (
                    'description' => '资质审核资料信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CredentialType' => 
                        array (
                          'description' => '资质审核的证件类型。',
                          'type' => 'string',
                          'example' => 'SHSQB',
                        ),
                        'CredentialNo' => 
                        array (
                          'description' => '资质审核的证件号码。',
                          'type' => 'string',
                          'example' => '92610725MA7G2E****',
                        ),
                        'CredentialUrl' => 
                        array (
                          'description' => '资质审核的证件照URL。',
                          'type' => 'string',
                          'example' => '11212121/1212d**/sqb.jpg',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'TrackId' => 
              array (
                'description' => '资质审核业务跟踪号。',
                'type' => 'string',
                'example' => '943a1662898a****0acbdbeca91',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AuditStatus\\": 1,\\n  \\"RequestId\\": \\"9DFCF6F8-243C-****-8035-4B12FEFD7D48\\",\\n  \\"Credentials\\": {\\n    \\"QualificationCredential\\": [\\n      {\\n        \\"CredentialType\\": \\"SHSQB\\",\\n        \\"CredentialNo\\": \\"92610725MA7G2E****\\",\\n        \\"CredentialUrl\\": \\"11212121/1212d**/sqb.jpg\\"\\n      }\\n    ]\\n  },\\n  \\"TrackId\\": \\"943a1662898a****0acbdbeca91\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryQualificationDetailResponse>\\n    <AuditStatus>1</AuditStatus>\\n    <RequestId>9DFCF6F8-243C-****-8035-4B12FEFD7D48</RequestId>\\n    <Credentials>\\n        <CredentialType>SHSQB</CredentialType>\\n        <CredentialNo>92610725MA7G2E****</CredentialNo>\\n        <CredentialUrl>11212121/1212d**/sqb.jpg</CredentialUrl>\\n    </Credentials>\\n    <TrackId>943a1662898a****0acbdbeca91</TrackId>\\n</QueryQualificationDetailResponse>","errorExample":""}]',
      'title' => '查询资质审核详情',
      'summary' => '查询“.餐厅”、“.商标”域名资质审核详情。',
    ),
    'GetOperationOssUploadPolicy' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'AuditType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '审核类型。取值：

**1**：线下转移域名。',
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
            'type' => 'object',
            'properties' => 
            array (
              'FileDir' => 
              array (
                'description' => '文件地址。',
                'type' => 'string',
                'example' => '1219541161213157/OFFLINE_TRANSFER/159368851****',
              ),
              'EncodedPolicy' => 
              array (
                'description' => '加密策略。',
                'type' => 'string',
                'example' => 'eyJleHBpcmF0aW9uIjoiMjAaMC0wNy0wMlQxKToyMDoxMS44ODRaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDBdLFsic3RhcnRzLXdpdGgiLCIka2V5IiwiMTIxOTU0MTE2MTIxMzA1Ny9PRkZMSU5FX1RSQU5TRkVSLzE1OTM2ODg1MTE4ODMi****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DFCF6F8-243C-40EC-8035-4B12FEFD7D011',
              ),
              'Accessid' => 
              array (
                'description' => '访问ID。',
                'type' => 'string',
                'example' => 'hObpgEXoca42****',
              ),
              'Signature' => 
              array (
                'description' => '签名数据。',
                'type' => 'string',
                'example' => 'pNVECGkyL0tl4bKXekV5ErZ****',
              ),
              'Host' => 
              array (
                'description' => 'OSS终端/接入地址。',
                'type' => 'string',
                'example' => '//***-basic-cert.oss-cn-***.aliyuncs.com/',
              ),
              'ExpireTime' => 
              array (
                'description' => '过期时间。',
                'type' => 'string',
                'example' => '1593688811881',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"FileDir\\": \\"1219541161213157/OFFLINE_TRANSFER/159368851****\\",\\n  \\"EncodedPolicy\\": \\"eyJleHBpcmF0aW9uIjoiMjAaMC0wNy0wMlQxKToyMDoxMS44ODRaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDBdLFsic3RhcnRzLXdpdGgiLCIka2V5IiwiMTIxOTU0MTE2MTIxMzA1Ny9PRkZMSU5FX1RSQU5TRkVSLzE1OTM2ODg1MTE4ODMi****\\",\\n  \\"RequestId\\": \\"9DFCF6F8-243C-40EC-8035-4B12FEFD7D011\\",\\n  \\"Accessid\\": \\"hObpgEXoca42****\\",\\n  \\"Signature\\": \\"pNVECGkyL0tl4bKXekV5ErZ****\\",\\n  \\"Host\\": \\"//***-basic-cert.oss-cn-***.aliyuncs.com/\\",\\n  \\"ExpireTime\\": \\"1593688811881\\"\\n}","errorExample":""},{"type":"xml","example":"<GetOperationOssUploadPolicyResponse>\\n<FileDir>1219541161213157/OFFLINE_TRANSFER/159368851****</FileDir>\\n<EncodedPolicy>eyJleHBpcmF0aW9uIjoiMjAaMC0wNy0wMlQxKToyMDoxMS44ODRaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDBdLFsic3RhcnRzLXdpdGgiLCIka2V5IiwiMTIxOTU0MTE2MTIxMzA1Ny9PRkZMSU5FX1RSQU5TRkVSLzE1OTM2ODg1MTE4ODMi****</EncodedPolicy>\\n<RequestId>9DFCF6F8-243C-40EC-8035-4B12FEFD7D011</RequestId>\\n<Accessid>hObpgEXoca42****</Accessid>\\n<Signature>pNVECGkyL0tl4bKXekV5ErZ****</Signature>\\n<Host>//***-basic-cert.oss-cn-***.aliyuncs.com/</Host>\\n<ExpireTime>1593688811881</ExpireTime>\\n</GetOperationOssUploadPolicyResponse>","errorExample":""}]',
      'title' => '获取线下审核OSS上传策略',
      'summary' => '调用GetOperationOssUploadPolicy获取审核资料的存储信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveTaskForSubmittingDomainDelete' => 
    array (
      'summary' => '提交删除域名任务，仅白名单用户可以访问。',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：

- zh：中文。
- en：英文。

默认为en。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例编号。',
            'type' => 'string',
            'required' => true,
            'example' => 'S20181*****85212',
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
                'example' => '23C9B3C4-9E2C-4405-A88D-BD33E459D140',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"23C9B3C4-9E2C-4405-A88D-BD33E459D140\\",\\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\"\\n}","errorExample":""},{"type":"xml","example":"<SaveTaskForSubmittingDomainDeleteResponse>\\n    <RequestId>23C9B3C4-9E2C-4405-A88D-BD33E459D140</RequestId>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n</SaveTaskForSubmittingDomainDeleteResponse>","errorExample":""}]',
      'title' => '提交域名删除任务',
      'description' => '调用SaveTaskForSubmittingDomainDelete提交域名删除任务。',
    ),
    'SaveSingleTaskForAssociatingEns' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'test.luxe',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        3 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Ens地址。',
            'type' => 'string',
            'required' => true,
            'example' => '0x1234567890123456789012345678901234567890',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'E2598CAF-DBFE-494E-95EF-B42A33C178AA',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'e893148f-6343-4ae1-9eba-6e2a4116e142',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E2598CAF-DBFE-494E-95EF-B42A33C178AA\\",\\n  \\"TaskNo\\": \\"e893148f-6343-4ae1-9eba-6e2a4116e142\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"E2598CAF-DBFE-494E-95EF-B42A33C178AA\\",\\n    \\"TaskNo\\":\\"e893148f-6343-4ae1-9eba-6e2a4116e142\\"\\n}"},{"type":"xml","example":"<SaveSingleTaskForAssociatingEnsResponse>\\n  <TaskNo>3cbc5b9f-080d-4b5f-a04b-29f54bffdeab</TaskNo>\\n  <RequestId>722D0361-93BD-4289-824F-D17B218D8BF4</RequestId>\\n</SaveSingleTaskForAssociatingEnsResponse>","errorExample":"<SaveSingleTaskForAssociatingEnsResponse>\\n  <TaskNo>3cbc5b9f-080d-4b5f-a04b-29f54bffdeab</TaskNo>\\n  <RequestId>722D0361-93BD-4289-824F-D17B218D8BF4</RequestId>\\n</SaveSingleTaskForAssociatingEnsResponse>"}]',
      'title' => '提交绑定Ens地址任务',
      'summary' => '提交绑定Ens地址任务。',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForDisassociatingEns' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'test.luxe',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'E2598CAF-DBFE-494E-95EF-B42A33C178AA',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'e893148f-6343-4ae1-9eba-6e2a4116e142',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E2598CAF-DBFE-494E-95EF-B42A33C178AA\\",\\n  \\"TaskNo\\": \\"e893148f-6343-4ae1-9eba-6e2a4116e142\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"E2598CAF-DBFE-494E-95EF-B42A33C178AA\\",\\n    \\"TaskNo\\":\\"e893148f-6343-4ae1-9eba-6e2a4116e142\\"\\n}"},{"type":"xml","example":"<SaveSingleTaskForDisassociatingEnsResponse>\\n  <TaskNo>3cbc5b9f-080d-4b5f-a04b-29f54bffdeab</TaskNo>\\n  <RequestId>722D0361-93BD-4289-824F-D17B218D8BF4</RequestId>\\n</SaveSingleTaskForDisassociatingEnsResponse>","errorExample":"<SaveSingleTaskForDisassociatingEnsResponse>\\n  <TaskNo>3cbc5b9f-080d-4b5f-a04b-29f54bffdeab</TaskNo>\\n  <RequestId>722D0361-93BD-4289-824F-D17B218D8BF4</RequestId>\\n</SaveSingleTaskForDisassociatingEnsResponse>"}]',
      'title' => '提交解绑Ens地址任务',
      'summary' => '调用SaveSingleTaskForDisassociatingEns提交解绑Ens地址任务。',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口查询。
                  ',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveBatchDomainRemark' => 
    array (
      'summary' => '调用SaveBatchDomainRemark批量保存域名备注。',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**，此参数为必填项。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'MyRemarkInfo',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceIds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例编号列表，建议**10**条一组，每组最多**50**条，以逗号（，）隔开。',
            'type' => 'string',
            'required' => false,
            'example' => 'S12344567',
          ),
        ),
        3 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '4189E320-961E-4786-8E15-0000',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4189E320-961E-4786-8E15-0000\\"\\n}","errorExample":"{\\n  \\"requestId\\": \\"F7C66E24-0134-4E53-9A31-0000\\"\\n}"},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchDomainRemarkResponse>\\n    <RequestId>4189E320-961E-4786-8E15-0000</RequestId>\\n</SaveBatchDomainRemarkResponse>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<SaveBatchDomainRemarkResponse>\\n    <RequestId>4189E320-961E-4786-8E15-0000</RequestId>\\n</SaveBatchDomainRemarkResponse>"}]',
      'title' => '批量保存域名备注',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveSingleTaskForSaveArtExtension' => 
    array (
      'summary' => '调用SaveSingleTaskForSaveArtExtension提交创建Art扩展信息任务。',
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test.art',
          ),
        ),
        1 => 
        array (
          'name' => 'ObjectType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '艺术品分类。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'The embroidery',
          ),
        ),
        2 => 
        array (
          'name' => 'MaterialsAndTechniques',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '材质与工艺。',
            'type' => 'string',
            'required' => false,
            'example' => 'silk',
          ),
        ),
        3 => 
        array (
          'name' => 'Dimensions',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '尺寸。',
            'type' => 'string',
            'required' => false,
            'example' => '20 cm',
          ),
        ),
        4 => 
        array (
          'name' => 'Title',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'Peace and friendship',
          ),
        ),
        5 => 
        array (
          'name' => 'DateOrPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创作时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2019-10-01',
          ),
        ),
        6 => 
        array (
          'name' => 'Maker',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '艺术家、创作者。
',
            'type' => 'string',
            'required' => false,
            'example' => 'zhang san',
          ),
        ),
        7 => 
        array (
          'name' => 'InscriptionsAndMarkings',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '题词和标识。',
            'type' => 'string',
            'required' => false,
            'example' => 'realism',
          ),
        ),
        8 => 
        array (
          'name' => 'Subject',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '艺术主题。',
            'type' => 'string',
            'required' => false,
            'example' => 'peace',
          ),
        ),
        9 => 
        array (
          'name' => 'Features',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '艺术特征。',
            'type' => 'string',
            'required' => false,
            'example' => 'iconicity',
          ),
        ),
        10 => 
        array (
          'name' => 'Reference',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参考。',
            'type' => 'string',
            'required' => false,
            'example' => 'drawings',
          ),
        ),
        11 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
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
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'E2598CAF-DBFE-494E-95EF-B42A33C178AB',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => 'e893148f-6343-4ae1-9eba-6e2a4116e141',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E2598CAF-DBFE-494E-95EF-B42A33C178AB\\",\\n  \\"TaskNo\\": \\"e893148f-6343-4ae1-9eba-6e2a4116e141\\"\\n}","errorExample":"{\\n    \\"RequestId\\":\\"E2598CAF-DBFE-494E-95EF-B42A33C178AB\\",\\n    \\"TaskNo\\":\\"e893148f-6343-4ae1-9eba-6e2a4116e141\\"\\n}"},{"type":"xml","example":"<SaveSingleTaskForSaveArtExtensionResponse>\\n  <TaskNo>3cbc5b9f-080d-4b5f-a04b-6e2a4116e141</TaskNo>\\n  <RequestId>722D0361-93BD-4289-824F-B42A33C178AB</RequestId>\\n</SaveSingleTaskForSaveArtExtensionResponse>","errorExample":"<SaveSingleTaskForSaveArtExtensionResponse>\\n  <TaskNo>3cbc5b9f-080d-4b5f-a04b-6e2a4116e141</TaskNo>\\n  <RequestId>722D0361-93BD-4289-824F-B42A33C178AB</RequestId>\\n</SaveSingleTaskForSaveArtExtensionResponse>"}]',
      'title' => '提交创建Art扩展信息任务',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~67710~~)接口查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryChangeLogList' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询操作日志的域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.com',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页码，最小值为**1**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，最小值为**1**，最大值为**100**。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询操作日期的开始时间，UTC时间1970年1月1日0点距离现在的毫秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
          ),
        ),
        6 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询操作日期的结束时间，UTC时间1970年1月1日0点距离现在的毫秒数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1522080000000',
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
              'PrePage' => 
              array (
                'description' => '是否有上一页。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'CurrentPageNum' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '2DEDFF32-7827-46B1-BE90-3DB8ABD91A58',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPageNum' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1000',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ChangeLog' => 
                  array (
                    'description' => '操作日志列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Operation' => 
                        array (
                          'description' => '操作行为。',
                          'type' => 'string',
                          'example' => 'DNS modification',
                        ),
                        'Time' => 
                        array (
                          'description' => '操作时间，UTC时间，如2017-12-25 12:00:00，具体格式与入参Lang有关。',
                          'type' => 'string',
                          'example' => '2017-12-26 12:00:00',
                        ),
                        'Result' => 
                        array (
                          'description' => '操作结果。',
                          'type' => 'string',
                          'example' => 'Failed',
                        ),
                        'DomainName' => 
                        array (
                          'description' => '域名。',
                          'type' => 'string',
                          'example' => 'example.com',
                        ),
                        'OperationIPAddress' => 
                        array (
                          'description' => '操作IP。',
                          'type' => 'string',
                          'example' => '127.0.0.1',
                        ),
                        'Details' => 
                        array (
                          'description' => '详情。',
                          'type' => 'string',
                          'example' => 'dns1;dns2 -> dns3;dns4',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'ResultLimit' => 
              array (
                'description' => '当前查询除分页限制外，服务端最多处理最近1000条记录。如结果超过1000条，**ResultLimit**为**true**，请缩小时间范围重新搜索；否则**ResultLimit**为**false**。
                           ',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'TotalItemNum' => 
              array (
                'description' => '记录总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1000',
              ),
              'NextPage' => 
              array (
                'description' => '是否有下一页。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"PrePage\\": false,\\n  \\"CurrentPageNum\\": 1,\\n  \\"RequestId\\": \\"2DEDFF32-7827-46B1-BE90-3DB8ABD91A58\\",\\n  \\"PageSize\\": 1,\\n  \\"TotalPageNum\\": 1000,\\n  \\"Data\\": {\\n    \\"ChangeLog\\": [\\n      {\\n        \\"Operation\\": \\"DNS modification\\",\\n        \\"Time\\": \\"2017-12-26 12:00:00\\",\\n        \\"Result\\": \\"Failed\\",\\n        \\"DomainName\\": \\"example.com\\",\\n        \\"OperationIPAddress\\": \\"127.0.0.1\\",\\n        \\"Details\\": \\"dns1;dns2 -> dns3;dns4\\"\\n      }\\n    ]\\n  },\\n  \\"ResultLimit\\": true,\\n  \\"TotalItemNum\\": 1000,\\n  \\"NextPage\\": true\\n}","errorExample":""},{"type":"xml","example":"<PrePage>false</PrePage>\\n<CurrentPageNum>1</CurrentPageNum>\\n<PageSize>1</PageSize>\\n<RequestId>2DEDFF32-7827-46B1-BE90-3DB8ABD91A58</RequestId>\\n<TotalPageNum>1000</TotalPageNum>\\n<Data>\\n    <ChangeLog>\\n        <OperationIPAddress>127.0.0.1</OperationIPAddress>\\n        <Details>dns1;dns2 -&amp;gt; dns3;dns4</Details>\\n        <DomainName>example.com</DomainName>\\n        <Time>2017-12-26 12:00:00</Time>\\n        <Operation>DNS modification</Operation>\\n        <Result>Failed</Result>\\n    </ChangeLog>\\n</Data>\\n<ResultLimit>true</ResultLimit>\\n<TotalItemNum>1000</TotalItemNum>\\n<NextPage>true</NextPage>","errorExample":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\n<QueryChangeLogListResponse>\\n    <Data>\\n        <ChangeLog>\\n            <Result>Failed</Result>\\n            <Operation>DNS modification</Operation>\\n            <Time>2017-12-26 12:00:00</Time>\\n            <Details>dns1;dns2 -> dns3;dns4</Details>\\n            <DomainName>test1.com</DomainName>\\n            <OperationIPAddress>127.0.0.1</OperationIPAddress>\\n        </ChangeLog>\\n    </Data>\\n    <TotalItemNum>1000</TotalItemNum>\\n    <PageSize>1</PageSize>\\n    <CurrentPageNum>1</CurrentPageNum>\\n    <RequestId>2DEDFF32-7827-46B1-BE90-3DB8ABD91A58</RequestId>\\n    <PrePage>false</PrePage>\\n    <TotalPageNum>1000</TotalPageNum>\\n    <ResultLimit>true</ResultLimit>\\n    <NextPage>true</NextPage>\\n</QueryChangeLogListResponse>"}]',
      'title' => '查询操作日志列表',
      'summary' => '调用QueryChangeLogList分页查询您当前阿里云账号下的操作日志。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryLocalEnsAssociation' => 
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
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'test.luxe',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文；
- **en**：英文。

默认为**en**。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
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
              'Address' => 
              array (
                'description' => '阿里云系统中记录的Ens地址。',
                'type' => 'string',
                'example' => '3ECD5439-39A2-477D-9A19-64FCA1F77EEB',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '0x1234567890123456789012345678901234567890',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Address\\": \\"3ECD5439-39A2-477D-9A19-64FCA1F77EEB\\",\\n  \\"RequestId\\": \\"0x1234567890123456789012345678901234567890\\"\\n}","errorExample":"{\\n    \\"Address\\":\\"0x1234567890123456789012345678901234567890\\",\\n    \\"RequestId\\":\\"3ECD5439-39A2-477D-9A19-64FCA1F77EEB\\"\\n}"},{"type":"xml","example":"<QueryLocalEnsAssociationResponse>\\n  <Address>0x1234567890123456789012345678901234567890</Address>\\n  <RequestId>D60028B6-4ED1-486C-BA6E-E0B0A8284BE4</RequestId>\\n</QueryLocalEnsAssociationResponse>","errorExample":"<QueryLocalEnsAssociationResponse>\\n  <Address>0x1234567890123456789012345678901234567890</Address>\\n  <RequestId>D60028B6-4ED1-486C-BA6E-E0B0A8284BE4</RequestId>\\n</QueryLocalEnsAssociationResponse>"}]',
      'title' => '查询本地Ens绑定地址',
      'summary' => '调用QueryLocalEnsAssociation查询阿里云系统中记录的ens绑定地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryEnsAssociation' => 
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
          'name' => 'DomainName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'test.luxe',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**en**。
',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
              'Address' => 
              array (
                'description' => 'ens系统中的钱包地址。',
                'type' => 'string',
                'example' => '0x123456789012345678901234567890123456****',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '3ECD5439-39A2-477D-9A19-64FCA1F77EEB',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Address\\": \\"0x123456789012345678901234567890123456****\\",\\n  \\"RequestId\\": \\"3ECD5439-39A2-477D-9A19-64FCA1F77EEB\\"\\n}","errorExample":"{\\n    \\"Address\\":\\"0x1234567890123456789012345678901234567890\\",\\n    \\"RequestId\\":\\"3ECD5439-39A2-477D-9A19-64FCA1F77EEB\\"\\n}"},{"type":"xml","example":"<QueryEnsAssociationResponse>\\n  <Address>0x123456789012345678901234567890123456****</Address>\\n  <RequestId>D60028B6-4ED1-486C-BA6E-E0B0A8284BE4</RequestId>\\n</QueryEnsAssociationResponse>","errorExample":"<QueryEnsAssociationResponse>\\n  <Address>0x1234567890123456789012345678901234567890</Address>\\n  <RequestId>D60028B6-4ED1-486C-BA6E-E0B0A8284BE4</RequestId>\\n</QueryEnsAssociationResponse>"}]',
      'title' => '查询Ens系统中绑定的钱包地址',
      'summary' => '调用QueryEnsAssociation查询Ens系统中绑定的钱包地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetQualificationUploadPolicy' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：

- zh：中文
- en：英文

默认为en。',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
            'default' => 'en',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP，可设置为**127.0.0.1**。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '加密策略。',
                'type' => 'string',
                'example' => 'eyJleHBpcmF0aW9uIjoiMjAaMC0wNy0wMlQxKToyMDoxMS44ODRaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDBdLFsic3RhcnRzLXdpdGgiLCIka2V5IiwiMTIxOTU0MTE2MTIxMzA1Ny9PRkZMSU5FX1RSQU5TRkVSLzE1OTM2ODg1MTE4ODMi****',
              ),
              'Expire' => 
              array (
                'description' => '过期时间。',
                'type' => 'string',
                'example' => '1593688811881',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9DFCF6F8-243C-****-8035-4B12FEFD7D48',
              ),
              'Accessid' => 
              array (
                'description' => '访问ID。',
                'type' => 'string',
                'example' => 'hObpgEXoca42****',
              ),
              'Signature' => 
              array (
                'description' => '签名数据。',
                'type' => 'string',
                'example' => 'pNVECGkyL0tl4bKXekV5ErZ****',
              ),
              'Host' => 
              array (
                'description' => 'OSS的Endpoint。',
                'type' => 'string',
                'example' => 'https://********-review.oss-cn-********.aliyuncs.com',
              ),
              'Prefix' => 
              array (
                'description' => '文件前缀。',
                'type' => 'string',
                'example' => '20211220/131953297274****_4de3db85-4f98-488d-845b-d75bf035b13d_${filename}',
              ),
              'Dir' => 
              array (
                'description' => '文件地址。',
                'type' => 'string',
                'example' => '20211220/131953297274****_4de3db85-4f98-488d-845b-d75bf035b13d',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Policy\\": \\"eyJleHBpcmF0aW9uIjoiMjAaMC0wNy0wMlQxKToyMDoxMS44ODRaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDBdLFsic3RhcnRzLXdpdGgiLCIka2V5IiwiMTIxOTU0MTE2MTIxMzA1Ny9PRkZMSU5FX1RSQU5TRkVSLzE1OTM2ODg1MTE4ODMi****\\",\\n  \\"Expire\\": \\"1593688811881\\",\\n  \\"RequestId\\": \\"9DFCF6F8-243C-****-8035-4B12FEFD7D48\\",\\n  \\"Accessid\\": \\"hObpgEXoca42****\\",\\n  \\"Signature\\": \\"pNVECGkyL0tl4bKXekV5ErZ****\\",\\n  \\"Host\\": \\"https://********-review.oss-cn-********.aliyuncs.com\\",\\n  \\"Prefix\\": \\"20211220/131953297274****_4de3db85-4f98-488d-845b-d75bf035b13d_${filename}\\",\\n  \\"Dir\\": \\"20211220/131953297274****_4de3db85-4f98-488d-845b-d75bf035b13d\\"\\n}","errorExample":""},{"type":"xml","example":"<GetQualificationUploadPolicyResponse>\\n    <Policy>eyJleHBpcmF0aW9uIjoiMjAaMC0wNy0wMlQxKToyMDoxMS44ODRaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDBdLFsic3RhcnRzLXdpdGgiLCIka2V5IiwiMTIxOTU0MTE2MTIxMzA1Ny9PRkZMSU5FX1RSQU5TRkVSLzE1OTM2ODg1MTE4ODMi****</Policy>\\n    <Expire>1593688811881</Expire>\\n    <RequestId>9DFCF6F8-243C-****-8035-4B12FEFD7D48</RequestId>\\n    <Accessid>hObpgEXoca42****</Accessid>\\n    <Signature>pNVECGkyL0tl4bKXekV5ErZ****</Signature>\\n    <Host>https://********-review.oss-cn-********.aliyuncs.com</Host>\\n    <Prefix>20211220/131953297274****_4de3db85-4f98-488d-845b-d75bf035b13d_${filename}</Prefix>\\n    <Dir>20211220/131953297274****_4de3db85-4f98-488d-845b-d75bf035b13d</Dir>\\n</GetQualificationUploadPolicyResponse>","errorExample":""}]',
      'title' => '根据 SaleID 获取对应的授权策略',
      'summary' => '获取“.餐厅”、“.商标”域名对应的授权策略。',
    ),
    'ChangeResourceGroup' => 
    array (
      'summary' => '修改域名所属的资源组。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户客户端IP',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口返回错误信息语言。取值：
- **zh**：中文。
- **en**：英文。

默认为**zh**。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '域名资源ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'S20227H17A561968',
          ),
        ),
        3 => 
        array (
          'name' => 'NewResourceGroupId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '要移动到的资源组ID。

您可以通过[资源管理控制台](https://resourcemanager.console.aliyun.com/resource-groups)查看资源组ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => false,
            'example' => 'rg-aek2tcx7os7bkmq',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名资源类型，固定为“Domain”，不需要填写',
            'type' => 'string',
            'required' => false,
            'example' => 'Domain',
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
                'description' => '本次请求调用的唯一ID。',
                'type' => 'string',
                'example' => '4EA05A10-D4BC-47EA-AD9E-370A46BB4FB9',
              ),
              'Result' => 
              array (
                'description' => '操作结果。取值：
- **true**：操作成功。
- **false**：操作失败。',
                'type' => 'string',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EA05A10-D4BC-47EA-AD9E-370A46BB4FB9\\",\\n  \\"Result\\": \\"true\\"\\n}","type":"json"}]',
      'title' => '修改域名所属资源组',
    ),
    'DomainSpecialBizCancel' => 
    array (
      'summary' => '取消域名特殊业务流程',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BizId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '业务id',
            'description' => '业务id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '3666
',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户客户端IP',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResultDTO<?>',
            'description' => 'PopResultDTO<?>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '096DCF79-A89A-5CED-B7DE-1B04761023B9',
              ),
              'HttpStatusCode' => 
              array (
                'description' => '直接指定返回的Http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误Code',
                'type' => 'string',
                'example' => '-',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态错误信息',
                'type' => 'string',
                'example' => '-',
              ),
              'Synchro' => 
              array (
                'description' => '是否同步处理',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'ErrorMsg' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '110001',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '参数错误',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：true：调用成功。                                 false：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Module' => 
              array (
                'description' => '返回对象',
                'type' => 'any',
                'example' => '-',
              ),
              'AllowRetry' => 
              array (
                'description' => '是否允许重试',
                'type' => 'boolean',
                'example' => 'False',
              ),
              'ErrorArgs' => 
              array (
                'description' => '返回错误参数数组',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回错误参数',
                  'type' => 'any',
                  'example' => '-',
                ),
              ),
              'AppName' => 
              array (
                'description' => '产生errorCode的应用名称',
                'type' => 'string',
                'example' => 'test-com',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"096DCF79-A89A-5CED-B7DE-1B04761023B9\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"-\\",\\n  \\"DynamicMessage\\": \\"-\\",\\n  \\"Synchro\\": true,\\n  \\"ErrorMsg\\": \\"110001\\",\\n  \\"ErrorCode\\": \\"参数错误\\",\\n  \\"Success\\": true,\\n  \\"Module\\": \\"-\\",\\n  \\"AllowRetry\\": true,\\n  \\"ErrorArgs\\": [\\n    \\"-\\"\\n  ],\\n  \\"AppName\\": \\"test-com\\"\\n}","type":"json"}]',
      'title' => '取消业务流程',
    ),
    'SubmitDomainSpecialBizCredentials' => 
    array (
      'summary' => '域名特殊业务提交资料',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BizId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '业务ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '219',
          ),
        ),
        1 => 
        array (
          'name' => 'Credentials',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '证件信息',
            'type' => 'string',
            'required' => false,
            'example' => '[{"credentialType":"SHSQB",""credentialUrl":"11212121/1212d**/sqb.jpg"},{"credentialType":"SFZZM",""credentialUrl":"11212121/1212d**/sfzzm.jpg"}]',
          ),
        ),
        2 => 
        array (
          'name' => 'Extend',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '扩展信息',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"addTransferLock\\":true}',
          ),
        ),
        3 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户客户端IP',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResultDTO<?>',
            'description' => 'PopResultDTO<?>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '唯一请求识别码',
                'type' => 'string',
                'example' => 'A83E1D74-E46B-505C-947A-8C6B7E41C011
',
              ),
              'HttpStatusCode' => 
              array (
                'description' => '直接指定返回的Http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200
',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误Code',
                'type' => 'string',
                'example' => '-',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态错误信息',
                'type' => 'string',
                'example' => '-',
              ),
              'Synchro' => 
              array (
                'description' => '是否同步处理',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'ErrorMsg' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '110001',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '参数错误',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Module' => 
              array (
                'description' => '返回对象',
                'type' => 'any',
                'example' => '-',
              ),
              'AllowRetry' => 
              array (
                'description' => '是否允许重试',
                'type' => 'boolean',
                'example' => 'False',
              ),
              'ErrorArgs' => 
              array (
                'description' => '返回错误参数数组',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回错误参数',
                  'type' => 'any',
                  'example' => '-',
                ),
              ),
              'AppName' => 
              array (
                'description' => '产生errorCode的应用名称',
                'type' => 'string',
                'example' => 'test-com
',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A83E1D74-E46B-505C-947A-8C6B7E41C011\\\\n\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"-\\",\\n  \\"DynamicMessage\\": \\"-\\",\\n  \\"Synchro\\": true,\\n  \\"ErrorMsg\\": \\"110001\\",\\n  \\"ErrorCode\\": \\"参数错误\\",\\n  \\"Success\\": true,\\n  \\"Module\\": \\"-\\",\\n  \\"AllowRetry\\": true,\\n  \\"ErrorArgs\\": [\\n    \\"-\\"\\n  ],\\n  \\"AppName\\": \\"test-com\\\\n\\"\\n}","type":"json"}]',
      'title' => '提交证件信息',
    ),
    'QueryDomainSpecialBizInfoByDomain' => 
    array (
      'summary' => '通过域名查询域名特殊业务详情',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DomainName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '域名',
            'description' => '域名',
            'type' => 'string',
            'required' => true,
            'example' => 'test003.cn',
          ),
        ),
        1 => 
        array (
          'name' => 'BizType',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '业务类型',
            'description' => '业务类型',
            'type' => 'string',
            'required' => true,
            'example' => 'govRegister',
          ),
        ),
        2 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户客户端IP',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResultDTO<DomainSpecialBizInfo>',
            'description' => 'PopResultDTO<DomainSpecialBizInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => '97663DFF-D24D-55AE-A577-6CC5AF20B732',
              ),
              'HttpStatusCode' => 
              array (
                'description' => '直接指定返回的Http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误Code',
                'type' => 'string',
                'example' => '-',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态错误信息',
                'type' => 'string',
                'example' => '-',
              ),
              'Synchro' => 
              array (
                'description' => '是否同步处理',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorMsg' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '110001
',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '参数错误',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：true：调用成功。                                 false：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Module' => 
              array (
                'description' => '返回对象',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'title' => '主键',
                    'description' => '主键',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '34083',
                  ),
                  'GmtCreate' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2023-03-21 15:10:04.0
',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '修改时间',
                    'description' => '修改时间',
                    'type' => 'string',
                    'example' => '2023-03-21 15:10:04.0
',
                  ),
                  'BizName' => 
                  array (
                    'title' => '业务名称',
                    'description' => '业务名称',
                    'type' => 'string',
                    'example' => 'GOV.CN域名注册(test003.cn)
',
                  ),
                  'BizNo' => 
                  array (
                    'title' => '业务编号',
                    'description' => '业务编号',
                    'type' => 'string',
                    'example' => 'A83E1D74-E46B-505C-947A-8C6B7E41C012
',
                  ),
                  'DomainName' => 
                  array (
                    'title' => '域名',
                    'description' => '域名',
                    'type' => 'string',
                    'example' => 'test003.cn
',
                  ),
                  'SaleId' => 
                  array (
                    'title' => '实例ID',
                    'description' => '实例ID',
                    'type' => 'string',
                    'example' => 'S20172315BJ37809
',
                  ),
                  'UserId' => 
                  array (
                    'title' => '用户ID',
                    'description' => '用户ID',
                    'type' => 'string',
                    'example' => '121000000****
',
                  ),
                  'ProductId' => 
                  array (
                    'title' => '产品id',
                    'description' => '产品id',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'BizType' => 
                  array (
                    'title' => '业务类型',
                    'description' => '业务类型',
                    'type' => 'string',
                    'example' => 'govRegister
',
                  ),
                  'BizStatus' => 
                  array (
                    'title' => '业务状态',
                    'description' => '业务状态',
                    'type' => 'string',
                    'example' => 'REGISTRANT_VSP_AUDIT_SUCCESS
',
                  ),
                  'Status' => 
                  array (
                    'title' => '业务状态(用户前端使用)',
                    'description' => '业务状态(用户前端使用)',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'StatusDesc' => 
                  array (
                    'title' => '业务状态描述(用户前端使用)',
                    'description' => '业务状态描述(用户前端使用)',
                    'type' => 'string',
                    'example' => '信息审核成功
',
                  ),
                  'AuditMsg' => 
                  array (
                    'title' => '审核信息',
                    'description' => '审核信息',
                    'type' => 'string',
                    'example' => '审核通过
',
                  ),
                  'OrderId' => 
                  array (
                    'title' => '订单id',
                    'description' => '订单id',
                    'type' => 'string',
                    'example' => '123',
                  ),
                  'UpdateTime' => 
                  array (
                    'title' => '更新时间',
                    'description' => '更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2020-11-17 18:11:15
',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2023-01-17 11:31:10
',
                  ),
                  'DomainSpecialBizContact' => 
                  array (
                    'title' => '联系人信息',
                    'description' => '联系人信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'BizId' => 
                      array (
                        'title' => '业务id',
                        'description' => '业务id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '258
',
                      ),
                      'RegType' => 
                      array (
                        'title' => '类型:1-个人 ,2-企业',
                        'description' => '类型:1-个人 ,2-企业',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'CCompany' => 
                      array (
                        'title' => '组织名称',
                        'description' => '组织名称',
                        'type' => 'string',
                        'example' => '河北易迪管道制造有限公司
',
                      ),
                      'ECompany' => 
                      array (
                        'title' => '组织名称(英文)',
                        'description' => '组织名称(英文)',
                        'type' => 'string',
                        'example' => 'hebeihuiheguandaozhizaoyouxiangongsi
',
                      ),
                      'CName' => 
                      array (
                        'title' => '联系人姓名',
                        'description' => '联系人姓名',
                        'type' => 'string',
                        'example' => '佟大伟
',
                      ),
                      'EName' => 
                      array (
                        'title' => '联系人姓名(英文)',
                        'description' => '联系人姓名(英文)',
                        'type' => 'string',
                        'example' => 'tong da wei',
                      ),
                      'CCountry' => 
                      array (
                        'title' => '国家代码',
                        'description' => '国家代码',
                        'type' => 'string',
                        'example' => 'CN',
                      ),
                      'CProvince' => 
                      array (
                        'title' => '省份',
                        'description' => '省份',
                        'type' => 'string',
                        'example' => '辽宁',
                      ),
                      'EProvince' => 
                      array (
                        'title' => '省份(英文)',
                        'description' => '省份(英文)',
                        'type' => 'string',
                        'example' => 'liao ning',
                      ),
                      'CCity' => 
                      array (
                        'title' => '城市',
                        'description' => '城市',
                        'type' => 'string',
                        'example' => '鞍山市',
                      ),
                      'ECity' => 
                      array (
                        'title' => '城市(英文)',
                        'description' => '城市(英文)',
                        'type' => 'string',
                        'example' => 'an shan Shi',
                      ),
                      'CVenu' => 
                      array (
                        'title' => '地址',
                        'description' => '地址',
                        'type' => 'string',
                        'example' => '铁西区新开街59栋1单元4号',
                      ),
                      'EVenu' => 
                      array (
                        'title' => '地址(英文)',
                        'description' => '地址(英文)',
                        'type' => 'string',
                        'example' => 'tie xi qu xin kai jie 59-4 hao',
                      ),
                      'Postalcode' => 
                      array (
                        'title' => '邮编',
                        'description' => '邮编',
                        'type' => 'string',
                        'example' => '100000
',
                      ),
                      'Email' => 
                      array (
                        'title' => '电子邮箱',
                        'description' => '电子邮箱',
                        'type' => 'string',
                        'example' => 'username@example.com
',
                      ),
                      'TelArea' => 
                      array (
                        'title' => '电话国家代码',
                        'description' => '电话国家代码',
                        'type' => 'string',
                        'example' => '86',
                      ),
                      'TelMain' => 
                      array (
                        'title' => '区号固定电话或手机号码',
                        'description' => '区号固定电话或手机号码',
                        'type' => 'string',
                        'example' => '16604121234',
                      ),
                      'TelExt' => 
                      array (
                        'title' => '电话分机号',
                        'description' => '电话分机号',
                        'type' => 'string',
                        'example' => '2756',
                      ),
                      'FaxArea' => 
                      array (
                        'title' => '传真国家代码',
                        'description' => '传真国家代码',
                        'type' => 'string',
                        'example' => '86
',
                      ),
                      'FaxMain' => 
                      array (
                        'title' => '区号传真号或手机号码',
                        'description' => '区号传真号或手机号码',
                        'type' => 'string',
                        'example' => '16604121234
',
                      ),
                      'FaxExt' => 
                      array (
                        'title' => '传真分机号',
                        'description' => '传真分机号',
                        'type' => 'string',
                        'example' => '61284565
',
                      ),
                      'Mobile' => 
                      array (
                        'title' => '手机号码',
                        'description' => '手机号码',
                        'type' => 'string',
                        'example' => '156********
',
                      ),
                      'Extend' => 
                      array (
                        'title' => '扩展信息',
                        'description' => '扩展信息',
                        'type' => 'string',
                        'example' => '-',
                      ),
                      'VspContactId' => 
                      array (
                        'title' => 'vsp联系人id',
                        'description' => 'vsp联系人id',
                        'type' => 'string',
                        'example' => '121000001****
',
                      ),
                      'RegistrantId' => 
                      array (
                        'title' => '持有者id',
                        'description' => '持有者id',
                        'type' => 'string',
                        'example' => '121000002****
',
                      ),
                    ),
                  ),
                  'DomainSpecialBizCredentials' => 
                  array (
                    'title' => '证件信息',
                    'description' => '证件信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DomainName' => 
                        array (
                          'title' => '域名',
                          'description' => '域名',
                          'type' => 'string',
                          'example' => 'test003.cn
',
                        ),
                        'SaleId' => 
                        array (
                          'title' => '实例ID',
                          'description' => '实例ID',
                          'type' => 'string',
                          'example' => 'S20172315BJ37809
',
                        ),
                        'BizId' => 
                        array (
                          'title' => '关联流程ID',
                          'description' => '关联流程ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => 'T20220831150014000001
',
                        ),
                        'CredentialNo' => 
                        array (
                          'title' => '证件号',
                          'description' => '证件号',
                          'type' => 'string',
                          'example' => '4111111111111110**
',
                        ),
                        'CredentialType' => 
                        array (
                          'title' => '证件类型',
                          'description' => '证件类型',
                          'type' => 'string',
                          'example' => 'SFZ
',
                        ),
                        'CredentialUrl' => 
                        array (
                          'title' => '证件url',
                          'description' => '证件url',
                          'type' => 'string',
                          'example' => 'http://test.oss-cn-hangzhou.aliyuncs.com/20170522/1219541161213057_070445190.jpg',
                        ),
                        'HolderCert' => 
                        array (
                          'title' => '是否持有者证件',
                          'description' => '是否持有者证件',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'AllowRetry' => 
              array (
                'description' => '是否允许重试',
                'type' => 'boolean',
                'example' => 'False',
              ),
              'ErrorArgs' => 
              array (
                'description' => '返回错误参数数组',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回错误参数',
                  'type' => 'any',
                  'example' => '-',
                ),
              ),
              'AppName' => 
              array (
                'description' => '产生errorCode的应用名称',
                'type' => 'string',
                'example' => 'test-com
',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"97663DFF-D24D-55AE-A577-6CC5AF20B732\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"-\\",\\n  \\"DynamicMessage\\": \\"-\\",\\n  \\"Synchro\\": true,\\n  \\"ErrorMsg\\": \\"110001\\\\n\\",\\n  \\"ErrorCode\\": \\"参数错误\\",\\n  \\"Success\\": true,\\n  \\"Module\\": {\\n    \\"Id\\": 34083,\\n    \\"GmtCreate\\": \\"2023-03-21 15:10:04.0\\\\n\\",\\n    \\"GmtModified\\": \\"2023-03-21 15:10:04.0\\\\n\\",\\n    \\"BizName\\": \\"GOV.CN域名注册(test003.cn)\\\\n\\",\\n    \\"BizNo\\": \\"A83E1D74-E46B-505C-947A-8C6B7E41C012\\\\n\\",\\n    \\"DomainName\\": \\"test003.cn\\\\n\\",\\n    \\"SaleId\\": \\"S20172315BJ37809\\\\n\\",\\n    \\"UserId\\": \\"121000000****\\\\n\\",\\n    \\"ProductId\\": \\"1\\",\\n    \\"BizType\\": \\"govRegister\\\\n\\",\\n    \\"BizStatus\\": \\"REGISTRANT_VSP_AUDIT_SUCCESS\\\\n\\",\\n    \\"Status\\": 1,\\n    \\"StatusDesc\\": \\"信息审核成功\\\\n\\",\\n    \\"AuditMsg\\": \\"审核通过\\\\n\\",\\n    \\"OrderId\\": \\"123\\",\\n    \\"UpdateTime\\": 0,\\n    \\"CreateTime\\": 0,\\n    \\"DomainSpecialBizContact\\": {\\n      \\"BizId\\": 258,\\n      \\"RegType\\": 1,\\n      \\"CCompany\\": \\"河北易迪管道制造有限公司\\\\n\\",\\n      \\"ECompany\\": \\"hebeihuiheguandaozhizaoyouxiangongsi\\\\n\\",\\n      \\"CName\\": \\"佟大伟\\\\n\\",\\n      \\"EName\\": \\"tong da wei\\",\\n      \\"CCountry\\": \\"CN\\",\\n      \\"CProvince\\": \\"辽宁\\",\\n      \\"EProvince\\": \\"liao ning\\",\\n      \\"CCity\\": \\"鞍山市\\",\\n      \\"ECity\\": \\"an shan Shi\\",\\n      \\"CVenu\\": \\"铁西区新开街59栋1单元4号\\",\\n      \\"EVenu\\": \\"tie xi qu xin kai jie 59-4 hao\\",\\n      \\"Postalcode\\": \\"100000\\\\n\\",\\n      \\"Email\\": \\"username@example.com\\\\n\\",\\n      \\"TelArea\\": \\"86\\",\\n      \\"TelMain\\": \\"16604121234\\",\\n      \\"TelExt\\": \\"2756\\",\\n      \\"FaxArea\\": \\"86\\\\n\\",\\n      \\"FaxMain\\": \\"16604121234\\\\n\\",\\n      \\"FaxExt\\": \\"61284565\\\\n\\",\\n      \\"Mobile\\": \\"156********\\\\n\\",\\n      \\"Extend\\": \\"-\\",\\n      \\"VspContactId\\": \\"121000001****\\\\n\\",\\n      \\"RegistrantId\\": \\"121000002****\\\\n\\"\\n    },\\n    \\"DomainSpecialBizCredentials\\": [\\n      {\\n        \\"DomainName\\": \\"test003.cn\\\\n\\",\\n        \\"SaleId\\": \\"S20172315BJ37809\\\\n\\",\\n        \\"BizId\\": 0,\\n        \\"CredentialNo\\": \\"4111111111111110**\\\\n\\",\\n        \\"CredentialType\\": \\"SFZ\\\\n\\",\\n        \\"CredentialUrl\\": \\"http://test.oss-cn-hangzhou.aliyuncs.com/20170522/1219541161213057_070445190.jpg\\",\\n        \\"HolderCert\\": 1\\n      }\\n    ]\\n  },\\n  \\"AllowRetry\\": true,\\n  \\"ErrorArgs\\": [\\n    \\"-\\"\\n  ],\\n  \\"AppName\\": \\"test-com\\\\n\\"\\n}","type":"json"}]',
      'title' => '查询最新特殊域名业务',
    ),
    'QueryDomainSpecialBizDetail' => 
    array (
      'summary' => '查询域名特殊业务详情',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BizId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '业务id',
            'description' => '业务id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'UserClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户客户端IP。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PopResultDTO<DomainSpecialBizInfo>',
            'description' => 'PopResultDTO<DomainSpecialBizInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '唯一请求识别码',
                'type' => 'string',
                'example' => 'A83E1D74-E46B-505C-947A-8C6B7E41C011',
              ),
              'HttpStatusCode' => 
              array (
                'description' => '直接指定返回的Http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'DynamicCode' => 
              array (
                'description' => '动态错误Code',
                'type' => 'string',
                'example' => '-',
              ),
              'DynamicMessage' => 
              array (
                'description' => '动态错误信息',
                'type' => 'string',
                'example' => '-',
              ),
              'Synchro' => 
              array (
                'description' => '是否同步处理',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorMsg' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '110001',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => '参数错误',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Module' => 
              array (
                'description' => '返回对象',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'title' => '主键',
                    'description' => '主键',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '34083',
                  ),
                  'GmtCreate' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2023-03-21 15:10:04.0',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => '修改时间',
                    'description' => '修改时间',
                    'type' => 'string',
                    'example' => '2023-03-21 15:10:04.0',
                  ),
                  'BizName' => 
                  array (
                    'title' => '业务名称',
                    'description' => '业务名称',
                    'type' => 'string',
                    'example' => 'GOV.CN域名注册(test003.cn)',
                  ),
                  'BizNo' => 
                  array (
                    'title' => '业务编号',
                    'description' => '业务编号',
                    'type' => 'string',
                    'example' => 'A83E1D74-E46B-505C-947A-8C6B7E41C012',
                  ),
                  'DomainName' => 
                  array (
                    'title' => '域名',
                    'description' => '域名',
                    'type' => 'string',
                    'example' => 'test003.cn',
                  ),
                  'SaleId' => 
                  array (
                    'title' => '实例ID',
                    'description' => '实例ID',
                    'type' => 'string',
                    'example' => 'S20172315BJ37809',
                  ),
                  'UserId' => 
                  array (
                    'title' => '用户ID',
                    'description' => '用户ID',
                    'type' => 'string',
                    'example' => '121000000****',
                  ),
                  'ProductId' => 
                  array (
                    'title' => '产品id',
                    'description' => '产品id',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'BizType' => 
                  array (
                    'title' => '业务类型',
                    'description' => '业务类型',
                    'type' => 'string',
                    'example' => 'govRegister',
                  ),
                  'BizStatus' => 
                  array (
                    'title' => '业务状态',
                    'description' => '业务状态',
                    'type' => 'string',
                    'example' => 'REGISTRANT_VSP_AUDIT_SUCCESS',
                  ),
                  'Status' => 
                  array (
                    'title' => '业务状态(用户前端使用)',
                    'description' => '业务状态(用户前端使用)',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'StatusDesc' => 
                  array (
                    'title' => '业务状态描述(用户前端使用)',
                    'description' => '业务状态描述(用户前端使用)',
                    'type' => 'string',
                    'example' => '信息审核成功',
                  ),
                  'AuditMsg' => 
                  array (
                    'title' => '审核信息',
                    'description' => '审核信息',
                    'type' => 'string',
                    'example' => '审核通过',
                  ),
                  'OrderId' => 
                  array (
                    'title' => '订单id',
                    'description' => '订单id',
                    'type' => 'string',
                    'example' => '123',
                  ),
                  'UpdateTime' => 
                  array (
                    'title' => '更新时间',
                    'description' => '更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2020-11-17 18:11:15',
                  ),
                  'CreateTime' => 
                  array (
                    'title' => '创建时间',
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2023-01-17 11:31:10',
                  ),
                  'DomainSpecialBizContact' => 
                  array (
                    'title' => '联系人信息',
                    'description' => '联系人信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'BizId' => 
                      array (
                        'title' => '业务id',
                        'description' => '业务id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '258',
                      ),
                      'RegType' => 
                      array (
                        'title' => '类型:1-个人 ,2-企业',
                        'description' => '类型:1-个人 ,2-企业',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'CCompany' => 
                      array (
                        'title' => '组织名称',
                        'description' => '组织名称',
                        'type' => 'string',
                        'example' => '河北易迪管道制造有限公司',
                      ),
                      'ECompany' => 
                      array (
                        'title' => '组织名称(英文)',
                        'description' => '组织名称(英文)',
                        'type' => 'string',
                        'example' => 'hebeihuiheguandaozhizaoyouxiangongsi',
                      ),
                      'CName' => 
                      array (
                        'title' => '联系人姓名',
                        'description' => '联系人姓名',
                        'type' => 'string',
                        'example' => '佟大伟',
                      ),
                      'EName' => 
                      array (
                        'title' => '联系人姓名(英文)',
                        'description' => '联系人姓名(英文)',
                        'type' => 'string',
                        'example' => 'tong da wei',
                      ),
                      'CCountry' => 
                      array (
                        'title' => '国家代码',
                        'description' => '国家代码',
                        'type' => 'string',
                        'example' => 'CN',
                      ),
                      'CProvince' => 
                      array (
                        'title' => '省份',
                        'description' => '省份',
                        'type' => 'string',
                        'example' => '辽宁',
                      ),
                      'EProvince' => 
                      array (
                        'title' => '省份(英文)',
                        'description' => '省份(英文)',
                        'type' => 'string',
                        'example' => 'liao ning',
                      ),
                      'CCity' => 
                      array (
                        'title' => '城市',
                        'description' => '城市',
                        'type' => 'string',
                        'example' => '鞍山市',
                      ),
                      'ECity' => 
                      array (
                        'title' => '城市(英文)',
                        'description' => '城市(英文)',
                        'type' => 'string',
                        'example' => 'an shan Shi',
                      ),
                      'CVenu' => 
                      array (
                        'title' => '地址',
                        'description' => '地址',
                        'type' => 'string',
                        'example' => '铁西区新开街59-4号',
                      ),
                      'EVenu' => 
                      array (
                        'title' => '地址(英文)',
                        'description' => '地址(英文)',
                        'type' => 'string',
                        'example' => 'tie xi qu xin kai jie 59-4 hao',
                      ),
                      'Postalcode' => 
                      array (
                        'title' => '邮编',
                        'description' => '邮编',
                        'type' => 'string',
                        'example' => '100000',
                      ),
                      'Email' => 
                      array (
                        'title' => '电子邮箱',
                        'description' => '电子邮箱',
                        'type' => 'string',
                        'example' => 'username@example.com',
                      ),
                      'TelArea' => 
                      array (
                        'title' => '电话国家代码',
                        'description' => '电话国家代码',
                        'type' => 'string',
                        'example' => '86',
                      ),
                      'TelMain' => 
                      array (
                        'title' => '区号固定电话或手机号码',
                        'description' => '区号固定电话或手机号码',
                        'type' => 'string',
                        'example' => '16604121234',
                      ),
                      'TelExt' => 
                      array (
                        'title' => '电话分机号',
                        'description' => '电话分机号',
                        'type' => 'string',
                        'example' => '61284565',
                      ),
                      'FaxArea' => 
                      array (
                        'title' => '传真国家代码',
                        'description' => '传真国家代码',
                        'type' => 'string',
                        'example' => '86',
                      ),
                      'FaxMain' => 
                      array (
                        'title' => '区号传真号或手机号码',
                        'description' => '区号传真号或手机号码',
                        'type' => 'string',
                        'example' => '16604121234',
                      ),
                      'FaxExt' => 
                      array (
                        'title' => '传真分机号',
                        'description' => '传真分机号',
                        'type' => 'string',
                        'example' => '61284565',
                      ),
                      'Mobile' => 
                      array (
                        'title' => '手机号码',
                        'description' => '手机号码',
                        'type' => 'string',
                        'example' => '156********',
                      ),
                      'Extend' => 
                      array (
                        'title' => '扩展信息',
                        'description' => '扩展信息',
                        'type' => 'string',
                        'example' => '-',
                      ),
                      'VspContactId' => 
                      array (
                        'title' => 'vsp联系人id',
                        'description' => 'vsp联系人id',
                        'type' => 'string',
                        'example' => '121000001****',
                      ),
                      'RegistrantId' => 
                      array (
                        'title' => '持有者id',
                        'description' => '持有者id',
                        'type' => 'string',
                        'example' => '121000002****',
                      ),
                    ),
                  ),
                  'DomainSpecialBizCredentials' => 
                  array (
                    'title' => '证件信息',
                    'description' => '证件信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DomainName' => 
                        array (
                          'title' => '域名',
                          'description' => '域名',
                          'type' => 'string',
                          'example' => 'test003.cn',
                        ),
                        'SaleId' => 
                        array (
                          'title' => '实例ID',
                          'description' => '实例ID',
                          'type' => 'string',
                          'example' => 'S20172315BJ37809',
                        ),
                        'BizId' => 
                        array (
                          'title' => '关联流程ID',
                          'description' => '关联流程ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => 'T20220831150014000001',
                        ),
                        'CredentialNo' => 
                        array (
                          'title' => '证件号',
                          'description' => '证件号',
                          'type' => 'string',
                          'example' => '4111111111111110**',
                        ),
                        'CredentialType' => 
                        array (
                          'title' => '证件类型',
                          'description' => '证件类型',
                          'type' => 'string',
                          'example' => 'SFZ',
                        ),
                        'CredentialUrl' => 
                        array (
                          'title' => '证件url',
                          'description' => '证件url',
                          'type' => 'string',
                          'example' => 'http://test.oss-cn-hangzhou.aliyuncs.com/20170522/1219541161213057_070445190.jpg',
                        ),
                        'HolderCert' => 
                        array (
                          'title' => '是否持有者证件',
                          'description' => '是否持有者证件',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                  'DomainSpecialOrderResult' => 
                  array (
                    'description' => '订单信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SaleId' => 
                      array (
                        'description' => '实例ID',
                        'type' => 'string',
                        'example' => 'S201601063418719',
                      ),
                      'OrderId' => 
                      array (
                        'description' => '订单号',
                        'type' => 'string',
                        'example' => 'S201601060123456',
                      ),
                      'SubOrderId' => 
                      array (
                        'description' => '子订单号',
                        'type' => 'string',
                        'example' => 'S201601061234567',
                      ),
                      'ActionType' => 
                      array (
                        'description' => '费用类型',
                        'type' => 'string',
                        'example' => 'activate',
                      ),
                      'OrderAmount' => 
                      array (
                        'description' => '订单金额',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.0',
                      ),
                      'OrderCurrency' => 
                      array (
                        'description' => '币种',
                        'type' => 'string',
                        'example' => 'CNY',
                      ),
                      'OrderTime' => 
                      array (
                        'description' => '下单时间',
                        'type' => 'string',
                        'example' => '2023-09-19T14:28Z',
                      ),
                      'OrderYear' => 
                      array (
                        'description' => '年限',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'OrderStatus' => 
                      array (
                        'description' => '订单状态',
                        'type' => 'string',
                        'example' => 'ORDER_WAIT_PAY',
                      ),
                    ),
                  ),
                ),
              ),
              'AllowRetry' => 
              array (
                'description' => '是否允许重试',
                'type' => 'boolean',
                'example' => 'False',
              ),
              'ErrorArgs' => 
              array (
                'description' => '返回错误参数数组',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回错误参数',
                  'type' => 'any',
                  'example' => '-',
                ),
              ),
              'AppName' => 
              array (
                'description' => '产生errorCode的应用名称',
                'type' => 'string',
                'example' => 'test-com',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A83E1D74-E46B-505C-947A-8C6B7E41C011\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"DynamicCode\\": \\"-\\",\\n  \\"DynamicMessage\\": \\"-\\",\\n  \\"Synchro\\": true,\\n  \\"ErrorMsg\\": \\"110001\\",\\n  \\"ErrorCode\\": \\"参数错误\\",\\n  \\"Success\\": true,\\n  \\"Module\\": {\\n    \\"Id\\": 34083,\\n    \\"GmtCreate\\": \\"2023-03-21 15:10:04.0\\",\\n    \\"GmtModified\\": \\"2023-03-21 15:10:04.0\\",\\n    \\"BizName\\": \\"GOV.CN域名注册(test003.cn)\\",\\n    \\"BizNo\\": \\"A83E1D74-E46B-505C-947A-8C6B7E41C012\\",\\n    \\"DomainName\\": \\"test003.cn\\",\\n    \\"SaleId\\": \\"S20172315BJ37809\\",\\n    \\"UserId\\": \\"121000000****\\",\\n    \\"ProductId\\": \\"1\\",\\n    \\"BizType\\": \\"govRegister\\",\\n    \\"BizStatus\\": \\"REGISTRANT_VSP_AUDIT_SUCCESS\\",\\n    \\"Status\\": 1,\\n    \\"StatusDesc\\": \\"信息审核成功\\",\\n    \\"AuditMsg\\": \\"审核通过\\",\\n    \\"OrderId\\": \\"123\\",\\n    \\"UpdateTime\\": 0,\\n    \\"CreateTime\\": 0,\\n    \\"DomainSpecialBizContact\\": {\\n      \\"BizId\\": 258,\\n      \\"RegType\\": 1,\\n      \\"CCompany\\": \\"河北易迪管道制造有限公司\\",\\n      \\"ECompany\\": \\"hebeihuiheguandaozhizaoyouxiangongsi\\",\\n      \\"CName\\": \\"佟大伟\\",\\n      \\"EName\\": \\"tong da wei\\",\\n      \\"CCountry\\": \\"CN\\",\\n      \\"CProvince\\": \\"辽宁\\",\\n      \\"EProvince\\": \\"liao ning\\",\\n      \\"CCity\\": \\"鞍山市\\",\\n      \\"ECity\\": \\"an shan Shi\\",\\n      \\"CVenu\\": \\"铁西区新开街59-4号\\",\\n      \\"EVenu\\": \\"tie xi qu xin kai jie 59-4 hao\\",\\n      \\"Postalcode\\": \\"100000\\",\\n      \\"Email\\": \\"username@example.com\\",\\n      \\"TelArea\\": \\"86\\",\\n      \\"TelMain\\": \\"16604121234\\",\\n      \\"TelExt\\": \\"61284565\\",\\n      \\"FaxArea\\": \\"86\\",\\n      \\"FaxMain\\": \\"16604121234\\",\\n      \\"FaxExt\\": \\"61284565\\",\\n      \\"Mobile\\": \\"156********\\",\\n      \\"Extend\\": \\"-\\",\\n      \\"VspContactId\\": \\"121000001****\\",\\n      \\"RegistrantId\\": \\"121000002****\\"\\n    },\\n    \\"DomainSpecialBizCredentials\\": [\\n      {\\n        \\"DomainName\\": \\"test003.cn\\",\\n        \\"SaleId\\": \\"S20172315BJ37809\\",\\n        \\"BizId\\": 0,\\n        \\"CredentialNo\\": \\"4111111111111110**\\",\\n        \\"CredentialType\\": \\"SFZ\\",\\n        \\"CredentialUrl\\": \\"http://test.oss-cn-hangzhou.aliyuncs.com/20170522/1219541161213057_070445190.jpg\\",\\n        \\"HolderCert\\": 1\\n      }\\n    ],\\n    \\"DomainSpecialOrderResult\\": {\\n      \\"SaleId\\": \\"S201601063418719\\",\\n      \\"OrderId\\": \\"S201601060123456\\",\\n      \\"SubOrderId\\": \\"S201601061234567\\",\\n      \\"ActionType\\": \\"activate\\",\\n      \\"OrderAmount\\": 0,\\n      \\"OrderCurrency\\": \\"CNY\\",\\n      \\"OrderTime\\": \\"2023-09-19T14:28Z\\",\\n      \\"OrderYear\\": 1,\\n      \\"OrderStatus\\": \\"ORDER_WAIT_PAY\\"\\n    }\\n  },\\n  \\"AllowRetry\\": true,\\n  \\"ErrorArgs\\": [\\n    \\"-\\"\\n  ],\\n  \\"AppName\\": \\"test-com\\"\\n}","type":"json"}]',
      'title' => '查询特殊域名业务详情',
    ),
    'SaveBatchTaskForReserveDropListDomain' => 
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ContactTemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联系人模板ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123123',
          ),
        ),
        1 => 
        array (
          'name' => 'Domains',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '域名列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '扩展证书绑定的域名。',
              'type' => 'object',
              'properties' => 
              array (
                'DomainName' => 
                array (
                  'description' => '万网域名示例。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'example.com',
                ),
                'Dns1' => 
                array (
                  'description' => '自定义DNS1。

> - 当**OrderActivateParam.N.AliyunDns**取值为**false**时，本参数才可用且必须传入。
- 请务必确保自定义DNS的正确性，否则可能导致注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ns11.bigwww.com',
                ),
                'Dns2' => 
                array (
                  'description' => '自定义DNS2。

> - 当**AliyunDns**取值为**false**时，本参数才可用且必须传入。
- 请务必确保自定义DNS的正确性，否则可能导致注册失败。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'nsb.263idc.net',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 5000,
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
                'description' => '唯一请求识别码。',
                'type' => 'string',
                'example' => 'B7AB5469-5E38-4AA9-A920-C65B7A9C8E6E',
              ),
              'TaskNo' => 
              array (
                'description' => '任务编号。',
                'type' => 'string',
                'example' => '3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B7AB5469-5E38-4AA9-A920-C65B7A9C8E6E\\",\\n  \\"TaskNo\\": \\"3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8\\"\\n}","errorExample":""},{"type":"xml","example":"<SaveBatchTaskForReserveDropListDomainResponse>\\n    <RequestId>B7AB5469-5E38-4AA9-A920-C65B7A9C8E6E</RequestId>\\n    <TaskNo>3cb1adc3-20e8-44ae-9e76-e812fa6fc9d8</TaskNo>\\n</SaveBatchTaskForReserveDropListDomainResponse>","errorExample":""}]',
      'title' => '提交批量万网域名预定任务',
      'summary' => '调用SaveBatchTaskForReserveDropListDomain提交批量万网域名预定任务。',
      'description' => '任务执行结果请通过[QueryTaskDetailList](~~QueryTaskDetailList~~)接口查询。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'domain.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'domain-intl.aliyuncs.com',
    ),
  ),
);
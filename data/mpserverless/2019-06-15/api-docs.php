<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'MPServerless',
    'version' => '2019-06-15',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 77563,
      'title' => '服务空间',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSpaceWithOrder',
        1 => 'DescribeSpaces',
        2 => 'CreateSpace',
        3 => 'DeleteSpace',
        4 => 'UpdateSpace',
        5 => 'ListSpace',
      ),
    ),
    1 => 
    array (
      'id' => 77595,
      'title' => '云函数',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFunction',
        1 => 'CreateFunctionDeployment',
        2 => 'DeleteFunction',
        3 => 'UpdateFunction',
        4 => 'UpdateHttpTriggerConfig',
        5 => 'DescribeFunction',
        6 => 'DescribeHttpTriggerConfig',
        7 => 'ListFunction',
        8 => 'ListFunctionDeployment',
        9 => 'ListFunctionLog',
        10 => 'DeployFunction',
        11 => 'RunFunction',
      ),
    ),
    2 => 
    array (
      'id' => 77612,
      'title' => '云数据库',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 164600,
          'title' => '集合管理与命令',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DeleteDBCollection',
            1 => 'RenameDBCollection',
            2 => 'RunDBCommand',
          ),
        ),
        1 => 
        array (
          'id' => 77541,
          'title' => '备份与回档',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateDBRestoreTask',
            1 => 'QueryDBBackupCollections',
            2 => 'QueryDBRestoreTaskStatus',
            3 => 'QueryDBBackupDumpTimes',
          ),
        ),
        2 => 
        array (
          'id' => 164601,
          'title' => '数据导入与导出',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateDBExportTask',
            1 => 'CreateDBImportTask',
            2 => 'QueryDBExportTaskStatus',
            3 => 'QueryDBImportTaskStatus',
          ),
        ),
      ),
    ),
    3 => 
    array (
      'id' => 164602,
      'title' => '云存储',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteFile',
        1 => 'RegisterFile',
        2 => 'DescribeFileUploadSignedUrl',
        3 => 'ListFile',
        4 => 'DescribeCdnDomain',
        5 => 'SaveCdnDomainConfig',
      ),
    ),
    4 => 
    array (
      'id' => 77573,
      'title' => '静态网站托管',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 164603,
          'title' => '文件',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DeleteWebHostingFile',
            1 => 'BatchDeleteWebHostingFiles',
            2 => 'ListWebHostingFiles',
            3 => 'DescribeWebHostingFile',
            4 => 'GetWebHostingUploadCredential',
          ),
        ),
        1 => 
        array (
          'id' => 164604,
          'title' => '域名',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'BindWebHostingCustomDomain',
            1 => 'UnbindWebHostingCustomDomain',
            2 => 'SaveWebHostingCustomDomainConfig',
            3 => 'VerifyWebHostingDomainOwner',
            4 => 'GetWebHostingDomainVerificationContent',
            5 => 'ListWebHostingCustomDomains',
            6 => 'RefreshWebHostingCustomDomainCache',
          ),
        ),
        2 => 
        array (
          'id' => 164605,
          'title' => '证书',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DeleteWebHostingCertificate',
            1 => 'AttachWebHostingCertificate',
            2 => 'GetWebHostingCertificateDetail',
          ),
        ),
        3 => 
        array (
          'id' => 164606,
          'title' => '配置',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'SaveWebHostingCustomDomainCorsConfig',
            1 => 'GetWebHostingConfig',
            2 => 'ModifyWebHostingConfig',
          ),
        ),
      ),
    ),
    5 => 
    array (
      'id' => 77544,
      'title' => '管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableExtension',
        1 => 'UpdateServicePolicy',
        2 => 'OpenService',
        3 => 'OpenWebHostingService',
        4 => 'ResetServerSecret',
        5 => 'SaveAppAuthToken',
        6 => 'DescribeFCOpenStatus',
        7 => 'DescribeServicePolicy',
        8 => 'ListExtensions',
        9 => 'QueryServiceStatus',
        10 => 'GetWebHostingStatus',
        11 => 'CheckMpServerlessRoleExists',
      ),
    ),
    6 => 
    array (
      'id' => 77582,
      'title' => '开放平台配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddDingtalkOpenPlatformConfig',
        1 => 'SaveAntOpenPlatformConfig',
        2 => 'SaveWechatOpenPlatformConfig',
        3 => 'DeleteAntOpenPlatformConfig',
        4 => 'DeleteDingtalkOpenPlatformConfig',
        5 => 'DeleteWechatOpenPlatformConfig',
        6 => 'UpdateDingtalkOpenPlatformConfig',
        7 => 'DescribeSpaceClientConfig',
        8 => 'ListOpenPlatformConfig',
        9 => 'ListDingtalkOpenPlatformConfigs',
      ),
    ),
    7 => 
    array (
      'id' => 77619,
      'title' => '安全域名',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddCorsDomain',
        1 => 'DeleteCorsDomain',
        2 => 'ListCorsDomains',
      ),
    ),
    8 => 
    array (
      'id' => 164608,
      'title' => '资源用量与阈值',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QuerySpaceSpecDetail',
        1 => 'QuerySpaceUsage',
        2 => 'QuerySpaceConsumption',
        3 => 'DescribeResourceQuota',
        4 => 'DescribeResourceUsage',
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
    'CreateSpaceWithOrder' => 
    array (
      'summary' => '创建服务空间并下单',
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
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'Desc',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => '测试服务空间',
            'maxLength' => 128,
          ),
        ),
        2 => 
        array (
          'name' => 'SubscriptionType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '付费类型，取值：
- Subscription：预付费。
- PayAsYouGo：后付费。',
            'type' => 'string',
            'required' => true,
            'example' => 'Subscription',
            'enum' => 
            array (
              0 => 'Subscription',
              1 => 'PayAsYouGo',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'Period',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '购买时长，取值： 可选1、2、3、6、12，单位为月。当选择预付费时，该参数必填。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
              2 => '3',
              3 => '6',
              4 => '12',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'PackageVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '预付费套餐规格，当选择预付费时，该参数必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'professional',
            'enum' => 
            array (
              0 => 'free',
              1 => 'base',
              2 => 'standard',
              3 => 'professional',
              4 => 'enterprise',
              5 => 'ultimate',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'UseCoupon',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否使用代金券。取值：

- **true**：使用
- **false**：不使用

默认值为**false**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
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
              'SpaceId' => 
              array (
                'description' => '服务空间ID。',
                'type' => 'string',
                'example' => 'mp-1140a548-****-44ac-8bfb-a21c073f0d1a',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C71E8AEA-D1C3-****-956F-C261B7A43E92',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '222082414200***',
              ),
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'emas_EmasServerlessPost_public_cn-n8m2y7l****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"SpaceId\\": \\"mp-1140a548-****-44ac-8bfb-a21c073f0d1a\\",\\n  \\"RequestId\\": \\"C71E8AEA-D1C3-****-956F-C261B7A43E92\\",\\n  \\"OrderId\\": \\"222082414200***\\",\\n  \\"InstanceId\\": \\"emas_EmasServerlessPost_public_cn-n8m2y7l****\\"\\n}","type":"json"}]',
      'title' => '创建服务空间并支付下单',
    ),
    'DescribeSpaces' => 
    array (
      'summary' => '根据 spaceId、租户ID、EMAS项目空间或者套餐规格来查询空间实例信息。',
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
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码，从0开始。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页大小，默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'SpaceIds',
          'in' => 'formData',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '服务空间ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务空间ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'mp-c2d29d85-44f5-4ede-****-4f803ba06a7c',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '租户 ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'XKHKTPDJ',
          ),
        ),
        4 => 
        array (
          'name' => 'EmasWorkspaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'EMAS项目空间ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3449110',
          ),
        ),
        5 => 
        array (
          'name' => 'SpecCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '套餐规格',
            'type' => 'string',
            'required' => false,
            'example' => 'ULTIMATE',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '68B76E59-CC10-5EEC-BCED-73A6C51179BC',
              ),
              'GmtCreate' => 
              array (
                'description' => '时间。',
                'type' => 'string',
                'example' => '2024-03-27T06:43:17Z',
              ),
              'Count' => 
              array (
                'description' => '服务空间总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Spaces' => 
              array (
                'description' => '服务空间。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务空间。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SpaceId' => 
                    array (
                      'description' => '服务空间ID。',
                      'type' => 'string',
                      'example' => 'mp-f215973f-db40-4013-92a8-b09690c7****',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'emas_EmasServerlessPre_public_cn-0ju2pax****',
                    ),
                    'EmasWorkspaceId' => 
                    array (
                      'description' => 'EMAS项目空间ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '3818905',
                    ),
                    'Name' => 
                    array (
                      'description' => '服务空间名称。',
                      'type' => 'string',
                      'example' => 'myspace',
                    ),
                    'Description' => 
                    array (
                      'description' => '服务空间描述。',
                      'type' => 'string',
                      'example' => '线上',
                    ),
                    'ServiceStatus' => 
                    array (
                      'description' => '空间状态。返回值为 UNINITIALIZED、PRODUCING、PRODUCE_FAILED、PAUSED、IN_SERVICE',
                      'type' => 'string',
                      'example' => 'IN_SERVICE',
                    ),
                    'PackageStatus' => 
                    array (
                      'description' => '- RENEWING 续费中
- UPGRADING 升配中',
                      'type' => 'string',
                      'example' => 'UPGRADING',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。

',
                      'type' => 'string',
                      'example' => '2022-05-19T06:06:05Z',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'string',
                      'example' => '2022-05-19T06:06:05Z',
                    ),
                    'SpecCode' => 
                    array (
                      'description' => '- FREE 开发者版
- BASE 基础版
- STANDARD 标准版
- PROFESSIONAL 专业版
- ENTERPRISE 企业版
- UTIMATE 旗舰版',
                      'type' => 'string',
                      'example' => 'ENTERPRISE',
                    ),
                    'ChargeType' => 
                    array (
                      'description' => '- PREPAY 套餐付费
- POSTPAY 按量计费',
                      'type' => 'string',
                      'example' => 'PREPAY',
                    ),
                    'OrderType' => 
                    array (
                      'description' => '- BUY 新购
- RENEW 续费
- UPGRADE 升配',
                      'type' => 'string',
                      'example' => 'BUY',
                    ),
                    'AutoRenew' => 
                    array (
                      'description' => '付费类型为包年包月时，取值如下：
- true：自动续费。
- false：手动续费。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'RenewDuration' => 
                    array (
                      'description' => '续费时长。',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'PackageStartDate' => 
                    array (
                      'description' => '资源包起始时间。',
                      'type' => 'string',
                      'example' => '2022-06-18T16:00:00Z',
                    ),
                    'PackageEndDate' => 
                    array (
                      'description' => '资源包到期时间。',
                      'type' => 'string',
                      'example' => '2022-09-18T16:00:00Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"68B76E59-CC10-5EEC-BCED-73A6C51179BC\\",\\n  \\"GmtCreate\\": \\"2024-03-27T06:43:17Z\\",\\n  \\"Count\\": 10,\\n  \\"Spaces\\": [\\n    {\\n      \\"SpaceId\\": \\"mp-f215973f-db40-4013-92a8-b09690c7****\\",\\n      \\"InstanceId\\": \\"emas_EmasServerlessPre_public_cn-0ju2pax****\\",\\n      \\"EmasWorkspaceId\\": 3818905,\\n      \\"Name\\": \\"myspace\\",\\n      \\"Description\\": \\"线上\\",\\n      \\"ServiceStatus\\": \\"IN_SERVICE\\",\\n      \\"PackageStatus\\": \\"UPGRADING\\",\\n      \\"GmtCreate\\": \\"2022-05-19T06:06:05Z\\",\\n      \\"GmtModified\\": \\"2022-05-19T06:06:05Z\\",\\n      \\"SpecCode\\": \\"ENTERPRISE\\",\\n      \\"ChargeType\\": \\"PREPAY\\",\\n      \\"OrderType\\": \\"BUY\\",\\n      \\"AutoRenew\\": true,\\n      \\"RenewDuration\\": \\"3\\",\\n      \\"PackageStartDate\\": \\"2022-06-18T16:00:00Z\\",\\n      \\"PackageEndDate\\": \\"2022-09-18T16:00:00Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询空间列表信息',
      'description' => '> 仅商业版支持该功能',
    ),
    'CreateSpace' => 
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
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间名称，只能以字母开头，且只能包含数字、字符串。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'space1',
          ),
        ),
        1 => 
        array (
          'name' => 'Desc',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
            'maxLength' => 128,
          ),
        ),
        2 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
            'example' => '211975XXXX',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'SpaceId' => 
              array (
                'description' => '服务空间ID。',
                'type' => 'string',
                'example' => 'fd46b91a-4591-49b6-abcd-59e9733*****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C44BB160-2F2D-5E34-BC08-B8C8B6D7702F',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SpaceId\\": \\"fd46b91a-4591-49b6-abcd-59e9733*****\\",\\n  \\"RequestId\\": \\"C44BB160-2F2D-5E34-BC08-B8C8B6D7702F\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSpaceResponse>\\n    <RequestId>C44BB160-2F2D-5E34-BC08-B8C8B6D7702F</RequestId>\\n    <SpaceId>fd46b91a-4591-49b6-abcd-59e9733*****</SpaceId>\\n    <Success>true</Success>\\n</CreateSpaceResponse>","errorExample":""}]',
      'title' => '创建小程序服务空间',
      'summary' => '创建小程序Serverless服务空间。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteSpace' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '92e26ea9-6450-4b40-9c20-xxxx',
          ),
        ),
      ),
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
                'example' => 'C293BB03-B6AD-46C2-80D1-19C8FB573916',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C293BB03-B6AD-46C2-80D1-19C8FB573916\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteSpaceResponse>\\r\\n\\t<RequestId>9D653EC3-8F53-4307-9B1C-52F5922384A6</RequestId>\\r\\n</DeleteSpaceResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '删除服务空间',
      'summary' => '删除服务空间。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateSpace' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '826061c4-5095-4550-8b74-3bcd9af*****',
          ),
        ),
        1 => 
        array (
          'name' => 'Desc',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => '我的第一个服务空间。',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务状态，可选值为：
-  IN_SERVICE：服务中。
- PAUSED：服务暂停。',
            'type' => 'string',
            'required' => false,
            'example' => 'IN_SERVICE',
            'enum' => 
            array (
              0 => 'IN_SERVICE',
              1 => 'PAUSED',
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'EA770971-A4A0-4555-9E00-C94A2194E150',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EA770971-A4A0-4555-9E00-C94A2194E150\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateSpaceResponse>\\r\\n      <RequestId>9D653EC3-8F53-4307-9B1C-52F5922384A6</RequestId>\\r\\n</UpdateSpaceResponse>","errorExample":""}]',
      'title' => '更新服务空间',
      'summary' => '更新服务空间。',
      'description' => '您可以更新服务空间的描述信息，您还可以更新服务空间的服务状态。当服务状态设置为PAUSED（服务暂停）时，服务面（包含小程序端访问服务空间和静态网站托管服务）不再提供服务，管控面（使用OpenAPI或者控制台）提供正常服务。

> 更新服务空间状态成功到状态完全生效有一定的延迟，最高不超过10分钟。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListSpace' => 
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
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码，从0开始。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '0',
            'example' => '0',
            'default' => '0',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页显示的行数。默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'SpaceIds',
          'in' => 'formData',
          'style' => 'simple',
          'schema' => 
          array (
            'description' => '服务空间id列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务空间id。',
              'type' => 'string',
              'required' => false,
              'example' => 'b9105f6d-f403-4ad5-8a05-82e4524659c8,aff8cd35-4273-40ce-943e-9ab8cd8d89fc',
            ),
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'EmasWorkspaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'EMAS项目空间id。',
            'type' => 'string',
            'required' => false,
            'example' => '3821658',
          ),
        ),
      ),
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
                'example' => 'B314EDAD-FFCA-536D-BA9C-08B42F7C2DDE',
              ),
              'GmtCreate' => 
              array (
                'type' => 'string',
              ),
              'Count' => 
              array (
                'description' => '项目总数，用于分页',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '23',
              ),
              'Spaces' => 
              array (
                'description' => '服务空间。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '服务状态，可选值为：
-  IN_SERVICE：服务中。
- PAUSED：服务暂停。',
                      'type' => 'string',
                      'example' => 'IN_SERVICE',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1582018007000',
                    ),
                    'SpaceId' => 
                    array (
                      'description' => '服务空间ID。',
                      'type' => 'string',
                      'example' => '368ef42a-763f-0000-acc2-8aa9564c****',
                    ),
                    'Name' => 
                    array (
                      'description' => '服务空间名称。',
                      'type' => 'string',
                      'example' => 'myspace',
                    ),
                    'Desc' => 
                    array (
                      'description' => '描述。',
                      'type' => 'string',
                      'example' => '我的空间',
                    ),
                    'GmtLastAccess' => 
                    array (
                      'description' => '最后访问时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1582018007000',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B314EDAD-FFCA-536D-BA9C-08B42F7C2DDE\\",\\n  \\"GmtCreate\\": \\"\\",\\n  \\"Count\\": 23,\\n  \\"Spaces\\": [\\n    {\\n      \\"Status\\": \\"IN_SERVICE\\",\\n      \\"GmtCreate\\": 1582018007000,\\n      \\"SpaceId\\": \\"368ef42a-763f-0000-acc2-8aa9564c****\\",\\n      \\"Name\\": \\"myspace\\",\\n      \\"Desc\\": \\"我的空间\\",\\n      \\"GmtLastAccess\\": 1582018007000\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询服务空间列表',
      'summary' => '查询服务空间列表。',
    ),
    'CreateFunction' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '函数名称。
函数名称长度在1-30个字符间，只能包含字母、数字、下划线和中划线，不能以数字、中划线开头。

> 云函数的名称必须和要上传的Node.js代码包名称一致。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demoFunction',
          ),
        ),
        1 => 
        array (
          'name' => 'Desc',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云函数的描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => '测试函数',
            'maxLength' => 128,
          ),
        ),
        2 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云函数所属的服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '226e5213-697c-4a52-b4ff-xxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'Runtime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云函数执行环境，默认值为nodejs14，可选值为nodejs12,nodejs14等，详情参见文档[《运行时支持列表》](https://help.aliyun.com/document_detail/2717618.html)。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'nodejs14' => 'nodejs14',
              'nodejs12' => 'nodejs12',
              'nodejs16' => 'nodejs16',
            ),
            'example' => 'nodejs12',
            'default' => 'nodejs14',
            'enum' => 
            array (
              0 => 'nodejs8',
              1 => 'nodejs12',
              2 => 'nodejs14',
              3 => 'nodejs16',
              4 => 'nodejs18',
              5 => 'nodejs20',
            ),
          ),
        ),
        4 => 
        array (
          'name' => 'Memory',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '函数内存规格，取值为64的倍数，至少128MB，至多2048MB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2048',
            'minimum' => '128',
            'example' => '512',
          ),
        ),
        5 => 
        array (
          'name' => 'Timeout',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '函数超时时间，单位为秒，默认值为5，取值范围1-7200。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '7200',
            'minimum' => '1',
            'example' => '5',
          ),
        ),
      ),
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
                'example' => 'E63E7F4F-8538-5B0E-8712-78F92B6DCB9C',
              ),
              'CreatedAt' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2021-11-18T08:02:33.954Z',
              ),
              'Name' => 
              array (
                'description' => '函数名称。',
                'type' => 'string',
                'example' => 'demoFunction',
              ),
              'ModifiedAt' => 
              array (
                'description' => '修改时间。',
                'type' => 'string',
                'example' => '021-11-18T08:02:33.954Z',
              ),
              'Desc' => 
              array (
                'description' => '函数描述。',
                'type' => 'string',
                'example' => '测试函数',
              ),
              'Spec' => 
              array (
                'description' => '云函数运行参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'Timeout' => 
                  array (
                    'description' => '超时时间。',
                    'type' => 'string',
                    'example' => '5s',
                  ),
                  'Runtime' => 
                  array (
                    'description' => '运行环境。',
                    'type' => 'string',
                    'example' => 'Node.js 12',
                  ),
                  'InstanceConcurrency' => 
                  array (
                    'description' => '单实例允许的最大并发度',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Memory' => 
                  array (
                    'description' => '内存大小。',
                    'type' => 'string',
                    'example' => '512 MB',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E63E7F4F-8538-5B0E-8712-78F92B6DCB9C\\",\\n  \\"CreatedAt\\": \\"2021-11-18T08:02:33.954Z\\",\\n  \\"Name\\": \\"demoFunction\\",\\n  \\"ModifiedAt\\": \\"021-11-18T08:02:33.954Z\\",\\n  \\"Desc\\": \\"测试函数\\",\\n  \\"Spec\\": {\\n    \\"Timeout\\": \\"5s\\",\\n    \\"Runtime\\": \\"Node.js 12\\",\\n    \\"InstanceConcurrency\\": \\"1\\",\\n    \\"Memory\\": \\"512 MB\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateFunctionResponse>\\n    <ModifiedAt>2021-11-18T08:02:33.954Z</ModifiedAt>\\n    <Desc>测试函数</Desc>\\n    <RequestId>E63E7F4F-8538-5B0E-8712-78F92B6DCB9C</RequestId>\\n    <CreatedAt>2021-11-18T08:02:33.954Z</CreatedAt>\\n    <Spec>\\n        <Runtime>Node.js 12</Runtime>\\n        <Timeout>5 s</Timeout>\\n        <Memory>512 MB</Memory>\\n        <InstanceConcurrency>1</InstanceConcurrency>\\n    </Spec>\\n    <Success>true</Success>\\n    <Name>demoFunction</Name>\\n</CreateFunctionResponse>","errorExample":""}]',
      'title' => '创建云函数',
      'summary' => '创建云函数。',
    ),
    'CreateFunctionDeployment' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '部署单名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demoFunction',
          ),
        ),
        1 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云函数所属的服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dece4ea0-d432-4cfa-8514-xxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'UploadSignedUrl' => 
              array (
                'description' => '上传的URL。',
                'type' => 'string',
                'example' => 'http://bucket.oss-cn-shanghai.aliyuncs.com/afc0e1c9d446fxxxxx-v2.zip?OSSAccessKeyId=LTAIKCq5x****kK6&Expires=1561425220&Signature=xEuiAgUMShQ4v8fYIl3FM8Jp3MA%3D',
              ),
              'DeploymentId' => 
              array (
                'description' => '部署单ID。',
                'type' => 'string',
                'example' => 'dep-5e49fd471c9d4451c33bdd06',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9D653EC3-8F53-4307-9B1C-52F5922384A6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"UploadSignedUrl\\": \\"http://bucket.oss-cn-shanghai.aliyuncs.com/afc0e1c9d446fxxxxx-v2.zip?OSSAccessKeyId=LTAIKCq5x****kK6&Expires=1561425220&Signature=xEuiAgUMShQ4v8fYIl3FM8Jp3MA%3D\\",\\n  \\"DeploymentId\\": \\"dep-5e49fd471c9d4451c33bdd06\\",\\n  \\"RequestId\\": \\"9D653EC3-8F53-4307-9B1C-52F5922384A6\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateFunctionDeploymentResponse>\\n    <RequestId>9D653EC3-8F53-4307-9B1C-52F5922384A6</RequestId>\\n    <DeploymentId>5cff17161c9d4401e9208145</DeploymentId>\\n    <UploadSignedUrl>http://bucket.oss-cn-shanghai.aliyuncs.com/afc0e1c9d44*****2c30a-v2.zip?OSSAccessKeyId=LTAIKCq5xHz1****&amp;Expires=1561425220&amp;Signature=xEuiAgUMShQ4v8fYIl3FM8Jp3MA%3D</UploadSignedUrl>\\n</CreateFunctionDeploymentResponse>","errorExample":""}]',
      'title' => '创建云函数部署单',
      'summary' => '创建云函数部署单。',
    ),
    'DeleteFunction' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '函数名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demoFunction',
          ),
        ),
        1 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dece4ea0-d432-4cfa-****-8a88d205e2b8',
          ),
        ),
      ),
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
                'example' => '9D653EC3-8F53-4307-9B1C-52F5922384A6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9D653EC3-8F53-4307-9B1C-52F5922384A6\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteFunctionResponse>\\r\\n\\t<RequestId>9D653EC3-8F53-4307-9B1C-52F5922384A6</RequestId>\\r\\n</DeleteFunctionResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '删除云函数',
      'summary' => '删除云函数。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateFunction' => 
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
          'name' => 'Desc',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云函数描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
            'maxLength' => 128,
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云函数名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demoFunction',
          ),
        ),
        2 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dece4ea0-d432-4cfa-8514-8a88d205e2b8',
          ),
        ),
        3 => 
        array (
          'name' => 'Memory',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '函数内存规格，取值为64的倍数，至少128，至多2048。单位：MB。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2048',
            'minimum' => '128',
            'example' => '256',
          ),
        ),
        4 => 
        array (
          'name' => 'Timeout',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '函数超时时间，单位为秒，默认值为5，取值范围1-7200。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '7200',
            'minimum' => '1',
            'example' => '5',
          ),
        ),
        5 => 
        array (
          'name' => 'HttpTriggerPath',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'HTTP触发的路径，设置为空字符串表示取消该功能。必须以`/http`开头，不能以`/`结尾，同一个Space下不允许重复，只支持（/）、（-）、（_）、（.）、字母和数字组合，最长不超过128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '/http/hello',
            'maxLength' => 128,
          ),
        ),
        6 => 
        array (
          'name' => 'TimingTriggerConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '定时触发配置，设置为空字符串表示取消该功能，配置规则请参见[使用云函数定时触发功能](https://help.aliyun.com/document_detail/160666.htm)。
>公测版：cron:0 0 */2 * * * ；商业版：0 0 */2 * * *。',
            'type' => 'string',
            'required' => false,
            'example' => 'cron:0 0 * * * *',
          ),
        ),
        7 => 
        array (
          'name' => 'TimingTriggerUserPayload',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '定时函数任务自定义参数

>仅商业版支持该功能。',
            'type' => 'string',
            'required' => false,
            'example' => 'hello',
          ),
        ),
        8 => 
        array (
          'name' => 'InstanceConcurrency',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '单实例允许的最大并发度，默认值为1，取值范围1-20。设置单实例多并发可以降低冷启动的频率，适用于函数中有较多时间在等待下游服务响应的场景，不适用于函数中有共享状态且不能并发访问的场景，也不适用于单个请求的执行要消耗大量CPU及内存资源的场景。



> 
> - 当设置大于1时要求内存不低于512MB',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '20',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'Runtime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云函数执行环境，可选值nodejs12,nodejs14等，具体请参见文档[《运行时支持列表》](https://help.aliyun.com/document_detail/2717618.html)',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'nodejs14' => 'nodejs14',
              'nodejs12' => 'nodejs12',
              'nodejs16' => 'nodejs16',
            ),
            'example' => 'nodejs14',
            'enum' => 
            array (
              0 => 'nodejs8',
              1 => 'nodejs12',
              2 => 'nodejs14',
              3 => 'nodejs16',
              4 => 'nodejs18',
              5 => 'nodejs20',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C293BB03-B6AD-46C2-80D1-19C8FB573916',
              ),
              'TimingTriggerConfig' => 
              array (
                'description' => '定时触发配置。',
                'type' => 'string',
                'example' => 'cron:0 0 * * * *',
              ),
              'TimingTriggerUserPayload' => 
              array (
                'description' => '用户自定义定时任务入参，用户可以在云函数中通过`ctx.args.userPayload`取出该参数。',
                'type' => 'string',
                'example' => '24',
              ),
              'HttpTriggerPath' => 
              array (
                'description' => 'HTTP触发的路径。',
                'type' => 'string',
                'example' => '/http/hello',
              ),
              'CreatedAt' => 
              array (
                'description' => '云函数的创建时间。',
                'type' => 'string',
                'example' => '2019-06-20T03:22:54.854Z',
              ),
              'Name' => 
              array (
                'description' => '云函数的名称。',
                'type' => 'string',
                'example' => 'demoFunction',
              ),
              'ModifiedAt' => 
              array (
                'description' => '云函数的修改时间。',
                'type' => 'string',
                'example' => '2019-06-20T03:22:54.854Z',
              ),
              'Desc' => 
              array (
                'description' => '云函数的描述信息。',
                'type' => 'string',
                'example' => 'description',
              ),
              'Spec' => 
              array (
                'description' => '云函数运行参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'Timeout' => 
                  array (
                    'description' => '超时时间。',
                    'type' => 'string',
                    'example' => '5s',
                  ),
                  'Runtime' => 
                  array (
                    'description' => '运行环境。',
                    'type' => 'string',
                    'example' => 'Node.js 8',
                  ),
                  'InstanceConcurrency' => 
                  array (
                    'description' => '单实例允许的最大并发度
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Memory' => 
                  array (
                    'description' => '内存大小。',
                    'type' => 'string',
                    'example' => '128 MB',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C293BB03-B6AD-46C2-80D1-19C8FB573916\\",\\n  \\"TimingTriggerConfig\\": \\"cron:0 0 * * * *\\",\\n  \\"TimingTriggerUserPayload\\": \\"24\\",\\n  \\"HttpTriggerPath\\": \\"/http/hello\\",\\n  \\"CreatedAt\\": \\"2019-06-20T03:22:54.854Z\\",\\n  \\"Name\\": \\"demoFunction\\",\\n  \\"ModifiedAt\\": \\"2019-06-20T03:22:54.854Z\\",\\n  \\"Desc\\": \\"description\\",\\n  \\"Spec\\": {\\n    \\"Timeout\\": \\"5s\\",\\n    \\"Runtime\\": \\"Node.js 8\\",\\n    \\"InstanceConcurrency\\": 1,\\n    \\"Memory\\": \\"128 MB\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ModifiedAt>2019-06-20T03:22:54.854Z</ModifiedAt>\\n<Desc>xxx</Desc>\\n<HttpTriggerPath>/http/hello</HttpTriggerPath>\\n<RequestId>319DADF8-0BE9-4AAB-B3C1-4EA07ACE35CE</RequestId>\\n<CreatedAt>2019-06-20T03:22:54.854Z</CreatedAt>\\n<TimingTriggerConfig>cron:0 0 * * * *</TimingTriggerConfig>\\n<Spec>\\n    <InstanceConcurrency>1</InstanceConcurrency>\\n    <Runtime>Node.js 8</Runtime>\\n    <Timeout>5s</Timeout>\\n    <Memory>128 MB</Memory>\\n</Spec>\\n<Name>sayHello</Name>","errorExample":""}]',
      'title' => '更新函数信息',
      'summary' => '更新函数信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateHttpTriggerConfig' => 
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
          'name' => 'EnableService',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设置是否开启HTTP触发功能。取值：

- **true**：表示开启HTTP触发功能。
- **false**：表示关闭HTTP触发功能。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        1 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '34C45988-2B24-****-A4DC-4D6C952890D8',
          ),
        ),
        2 => 
        array (
          'name' => 'CustomDomain',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义域名。不传该字段表示不更新自定义域名，设置为空字符串表示删除自定义域名。

在绑定自定义域名前，要求您的域名已经接入阿里云备案，并且已配置解析CNAME到CustomDomainCname。',
            'type' => 'string',
            'required' => false,
            'example' => 'abc.xxx.com',
            'maxLength' => 253,
          ),
        ),
        3 => 
        array (
          'name' => 'CustomDomainCertificate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义域名的HTTPS证书。必须和CustomDomainPrivateKey一起使用，不传这两个字段表示不更新证书，都传空字符串表示删除证书。',
            'type' => 'string',
            'required' => false,
            'example' => '-----BEGIN CERTIFICATE----- MIIFK****GCSqGSIb3DQEBCwUA= -----END CERTIFICATE-----',
          ),
        ),
        4 => 
        array (
          'name' => 'CustomDomainPrivateKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义域名的HTTPS证书的私钥。必须和CustomDomainCertificate一起使用，不传这两个字段表示不更新证书，都传空字符串表示删除证书。',
            'type' => 'string',
            'required' => false,
            'example' => '-----BEGIN PRIVATE KEY----- MIIEwA******DmUwVD0M74ECwZw= -----END PRIVATE KEY-----',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'EnableService' => 
              array (
                'description' => '是否开启了HTTP触发功能。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'CustomDomainCname' => 
              array (
                'description' => 'HTTP触发绑定的自定义域名的CNAME地址。',
                'type' => 'string',
                'example' => '724d************795a2.custom.bspapp.com',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '34C45988-2B24-****-A4DC-4D6C952890D8',
              ),
              'DefaultEndpoint' => 
              array (
                'description' => 'HTTP触发的默认域名。',
                'type' => 'string',
                'example' => '724dade5-492f-426b-a5df-ff****0795a2.bspapp.com',
              ),
              'CustomDomainCertificateInfo' => 
              array (
                'description' => 'HTTP触发绑定的自定义域名的证书信息。',
                'type' => 'string',
                'example' => '{"notAfter":"2021-09-28T08:21:42Z","notBefore":"2021-06-30T08:21:43Z","subject":"CN=*.example.com"}',
              ),
              'CustomDomain' => 
              array (
                'description' => 'HTTP触发绑定的自定义域名。',
                'type' => 'string',
                'example' => 'abc.example.com',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EnableService\\": true,\\n  \\"CustomDomainCname\\": \\"724d************795a2.custom.bspapp.com\\",\\n  \\"RequestId\\": \\"34C45988-2B24-****-A4DC-4D6C952890D8\\",\\n  \\"DefaultEndpoint\\": \\"724dade5-492f-426b-a5df-ff****0795a2.bspapp.com\\",\\n  \\"CustomDomainCertificateInfo\\": \\"{\\\\\\"notAfter\\\\\\":\\\\\\"2021-09-28T08:21:42Z\\\\\\",\\\\\\"notBefore\\\\\\":\\\\\\"2021-06-30T08:21:43Z\\\\\\",\\\\\\"subject\\\\\\":\\\\\\"CN=*.example.com\\\\\\"}\\",\\n  \\"CustomDomain\\": \\"abc.example.com\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<UpdateHttpTriggerConfigResponse>\\n\\t<DefaultEndpoint>226e5213-****-4a52-b4ff-35a09f8a52de.bspapp.com</DefaultEndpoint>\\n\\t<RequestId>34C45988-2B24-495D-A4DC-4D6C952890D8</RequestId>\\n\\t<EnableService>true</EnableService>\\n\\t<Success>true</Success>\\n\\t<CustomDomainCname>226e5213-****-4a52-b4ff-35a09f8a52de.custom.bspapp.com</CustomDomainCname>\\n   </UpdateHttpTriggerConfigResponse>\\n\\t\\n","errorExample":""}]',
      'title' => '更新云函数的HTTP触发配置',
      'summary' => '更新云函数的HTTP触发配置。',
      'description' => '开启HTTP触发功能，系统会为开启HTTP触发功能的Space分配一个默认域名，然后再结合UpdateFunction接口给云函数设置一个触发路径，之后就可以通过HTTP请求来触发云函数调用。您可以绑定自己的域名来使用HTTP触发的功能，要求您的域名必须接入阿里云备案。您还可以给您的自定义域名绑定HTTPS证书，之后可以使用HTTPS协议加自定义域名来访问。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFunction' => 
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
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云函数名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demoFunction',
          ),
        ),
        1 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云函数所属的服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dece4ea0-d432-4cfa-8514-xxxx',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '75CE67BE-48E9-52AF-B965-4690270CD53A',
              ),
              'Function' => 
              array (
                'description' => '云函数信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TimingTriggerConfig' => 
                  array (
                    'description' => '定时触发配置。',
                    'type' => 'string',
                    'example' => '公测版：cron:0 0 */2 * * *

商业版：0 0 */2 * * *',
                  ),
                  'TimingTriggerUserPayload' => 
                  array (
                    'description' => '定时触发任务自定义参数
>仅商业版支持该功能',
                    'type' => 'string',
                    'example' => 'hello',
                  ),
                  'HttpTriggerPath' => 
                  array (
                    'description' => 'HTTP触发的路径，设置为空字符串表示取消该功能。必须以`/`开头，不能以`/`结尾，同一个Space下不允许重复，只支持（/）、（-）、（_）、（.）、字母和数字组合，最长不超过128个字符。',
                    'type' => 'string',
                    'example' => '/http/getWxToken',
                  ),
                  'CreatedAt' => 
                  array (
                    'description' => '云函数的创建时间。',
                    'type' => 'string',
                    'example' => '2021-12-02T02:40:37Z',
                  ),
                  'Name' => 
                  array (
                    'description' => '云函数名称。',
                    'type' => 'string',
                    'example' => 'demoFunction',
                  ),
                  'ModifiedAt' => 
                  array (
                    'description' => '云函数的修改时间。',
                    'type' => 'string',
                    'example' => '2019-06-21T02:22:53Z',
                  ),
                  'Desc' => 
                  array (
                    'description' => '云函数描述。',
                    'type' => 'string',
                    'example' => '获取微信绑定手机号',
                  ),
                  'Spec' => 
                  array (
                    'description' => '运行环境。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Timeout' => 
                      array (
                        'description' => '函数超时时间，单位为秒，默认值为5，取值范围1-10。',
                        'type' => 'string',
                        'example' => '5',
                      ),
                      'Runtime' => 
                      array (
                        'description' => '云函数执行环境，默认值为nodejs12，可选值为nodejs8,nodejs12。',
                        'type' => 'string',
                        'example' => 'nodejs12',
                      ),
                      'InstanceConcurrency' => 
                      array (
                        'description' => '单实例允许的最大并发度，默认值为1，取值范围1-100。设置单实例多并发可以降低冷启动的频率，适用于函数中有较多时间在等待下游服务响应的场景，不适用于函数中有共享状态且不能并发访问的场景，也不适用于单个请求的执行要消耗大量CPU及内存资源的场景。

',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'Memory' => 
                      array (
                        'description' => '函数内存规格，取值为64的倍数，至少128MB，至多2048MB。',
                        'type' => 'string',
                        'example' => '512',
                      ),
                    ),
                  ),
                ),
              ),
              'Deployment' => 
              array (
                'description' => '部署单详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreatedAt' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2019-06-11T10:51:19Z',
                  ),
                  'DeploymentId' => 
                  array (
                    'description' => '部署单ID。',
                    'type' => 'string',
                    'example' => 'dep-62020d3bea44fd4608118233',
                  ),
                  'DownloadSignedUrl' => 
                  array (
                    'description' => '下载URL。',
                    'type' => 'string',
                    'example' => 'http://bucket.oss-cn-shanghai.aliyuncs.com/xxxx-v2.zip?OSSAccessKeyId=LT*********1DkK6&Expires=1561425220&Signature=xEuiAgUMShQ4v8fYIl3FM8Jp3MA%3D',
                  ),
                  'VersionNo' => 
                  array (
                    'description' => '版本号。版本号是部署单上传的时间。',
                    'type' => 'string',
                    'example' => '2019061110511905080',
                  ),
                  'ModifiedAt' => 
                  array (
                    'description' => '修改时间。',
                    'type' => 'string',
                    'example' => '2019-06-11T10:51:19Z',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"75CE67BE-48E9-52AF-B965-4690270CD53A\\",\\n  \\"Function\\": {\\n    \\"TimingTriggerConfig\\": \\"公测版：cron:0 0 */2 * * *\\\\n\\\\n商业版：0 0 */2 * * *\\",\\n    \\"TimingTriggerUserPayload\\": \\"hello\\",\\n    \\"HttpTriggerPath\\": \\"/http/getWxToken\\",\\n    \\"CreatedAt\\": \\"2021-12-02T02:40:37Z\\",\\n    \\"Name\\": \\"demoFunction\\",\\n    \\"ModifiedAt\\": \\"2019-06-21T02:22:53Z\\",\\n    \\"Desc\\": \\"获取微信绑定手机号\\",\\n    \\"Spec\\": {\\n      \\"Timeout\\": \\"5\\",\\n      \\"Runtime\\": \\"nodejs12\\",\\n      \\"InstanceConcurrency\\": 1,\\n      \\"Memory\\": \\"512\\"\\n    }\\n  },\\n  \\"Deployment\\": {\\n    \\"CreatedAt\\": \\"2019-06-11T10:51:19Z\\",\\n    \\"DeploymentId\\": \\"dep-62020d3bea44fd4608118233\\",\\n    \\"DownloadSignedUrl\\": \\"http://bucket.oss-cn-shanghai.aliyuncs.com/xxxx-v2.zip?OSSAccessKeyId=LT*********1DkK6&Expires=1561425220&Signature=xEuiAgUMShQ4v8fYIl3FM8Jp3MA%3D\\",\\n    \\"VersionNo\\": \\"2019061110511905080\\",\\n    \\"ModifiedAt\\": \\"2019-06-11T10:51:19Z\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询已创建的云函数详情',
      'summary' => '查询已创建的云函数详情。',
    ),
    'DescribeHttpTriggerConfig' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '34C45988-2B24-****-A4DC-4D6C952890D8',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'EnableService' => 
              array (
                'description' => '是否开启HTTP触发功能。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'CustomDomainCname' => 
              array (
                'description' => 'Http触发绑定的自定义域名的CNAME地址。',
                'type' => 'string',
                'example' => '724d************795a2.custom.bspapp.com',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4555773F-769B-4960-87E6-16009E5A4844',
              ),
              'DefaultEndpoint' => 
              array (
                'description' => '默认域名。',
                'type' => 'string',
                'example' => '724dade5-492f-426b-a5df-ff****0795a2.bspapp.com',
              ),
              'CustomDomainCertificateInfo' => 
              array (
                'description' => 'Http触发绑定的自定义域名的证书信息。',
                'type' => 'string',
                'example' => '{"notAfter":"2021-09-28T08:21:42Z","notBefore":"2021-06-30T08:21:43Z","subject":"CN=*.example.com"}',
              ),
              'CustomDomain' => 
              array (
                'description' => 'Http触发绑定的自定义域名。',
                'type' => 'string',
                'example' => 'abc.example.com',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EnableService\\": true,\\n  \\"CustomDomainCname\\": \\"724d************795a2.custom.bspapp.com\\",\\n  \\"RequestId\\": \\"4555773F-769B-4960-87E6-16009E5A4844\\",\\n  \\"DefaultEndpoint\\": \\"724dade5-492f-426b-a5df-ff****0795a2.bspapp.com\\",\\n  \\"CustomDomainCertificateInfo\\": \\"{\\\\\\"notAfter\\\\\\":\\\\\\"2021-09-28T08:21:42Z\\\\\\",\\\\\\"notBefore\\\\\\":\\\\\\"2021-06-30T08:21:43Z\\\\\\",\\\\\\"subject\\\\\\":\\\\\\"CN=*.example.com\\\\\\"}\\",\\n  \\"CustomDomain\\": \\"abc.example.com\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DescribeHttpTriggerConfigResponse>\\r\\n\\t<DefaultEndpoint>226e5213-697c-****-b4ff-35a09f8a52de.bspapp.com</DefaultEndpoint>\\r\\n\\t<RequestId>63D32428-3AF4-459F-8FB0-FE7B8A9D9003</RequestId>\\r\\n\\t<EnableService>true</EnableService>\\r\\n\\t<Success>true</Success>\\r\\n\\t<CustomDomainCname>226e5213-697c-4a52-b4ff-35a09f8a52de.custom.bspapp.com</CustomDomainCname>\\r\\n</DescribeHttpTriggerConfigResponse>","errorExample":""}]',
      'title' => '查询云函数的HTTP触发配置',
      'summary' => '查询云函数的HTTP触发配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListFunction' => 
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
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码。从第1页开始。',
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
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页显示的行数。默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'FilterBy',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询条件。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'demo',
          ),
        ),
        3 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云函数所属的服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dece4ea0-d432-4cfa-****-8a88d205e2b8',
          ),
        ),
      ),
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
                'example' => 'D388FE2B-61D5-4A76-A8F0-xxxx',
              ),
              'Paginator' => 
              array (
                'description' => '分页信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'description' => '列表的页码。',
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
                  'Total' => 
                  array (
                    'description' => '查询的云函数总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '查询的页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'DataList' => 
              array (
                'description' => '云函数详情。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TimingTriggerConfig' => 
                    array (
                      'description' => '定时触发配置。',
                      'type' => 'string',
                      'example' => 'cron:0 0 * * * *',
                    ),
                    'HttpTriggerPath' => 
                    array (
                      'description' => 'HTTP触发的路径。',
                      'type' => 'string',
                      'example' => '/http/hello',
                    ),
                    'CreatedAt' => 
                    array (
                      'description' => '云函数创建时间。',
                      'type' => 'string',
                      'example' => '2019-06-21T02:22:55.996Z',
                    ),
                    'ModifiedAt' => 
                    array (
                      'description' => '云函数修改时间。',
                      'type' => 'string',
                      'example' => '2019-06-21T02:22:55.996Z',
                    ),
                    'Name' => 
                    array (
                      'description' => '云函数名称。',
                      'type' => 'string',
                      'example' => 'demoFunction',
                    ),
                    'Desc' => 
                    array (
                      'description' => '云函数描述。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Spec' => 
                    array (
                      'description' => '云函数运行参数。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Timeout' => 
                        array (
                          'description' => '超时时间。',
                          'type' => 'string',
                          'example' => '5s',
                        ),
                        'Runtime' => 
                        array (
                          'description' => '运行环境。',
                          'type' => 'string',
                          'example' => 'Node.js 8',
                        ),
                        'InstanceConcurrency' => 
                        array (
                          'description' => '单实例允许的最大并发度

',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Memory' => 
                        array (
                          'description' => '内存大小。',
                          'type' => 'string',
                          'example' => '128 MB',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D388FE2B-61D5-4A76-A8F0-xxxx\\",\\n  \\"Paginator\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 1,\\n    \\"PageCount\\": 1\\n  },\\n  \\"DataList\\": [\\n    {\\n      \\"TimingTriggerConfig\\": \\"cron:0 0 * * * *\\",\\n      \\"HttpTriggerPath\\": \\"/http/hello\\",\\n      \\"CreatedAt\\": \\"2019-06-21T02:22:55.996Z\\",\\n      \\"ModifiedAt\\": \\"2019-06-21T02:22:55.996Z\\",\\n      \\"Name\\": \\"demoFunction\\",\\n      \\"Desc\\": \\"test\\",\\n      \\"Spec\\": {\\n        \\"Timeout\\": \\"5s\\",\\n        \\"Runtime\\": \\"Node.js 8\\",\\n        \\"InstanceConcurrency\\": 1,\\n        \\"Memory\\": \\"128 MB\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>319DADF8-0BE9-4AAB-B3C1-4EA07ACE35CE</RequestId>\\n<Paginator>\\n    <Total>1</Total>\\n    <PageNum>1</PageNum>\\n    <PageSize>10</PageSize>\\n    <PageCount>1</PageCount>\\n</Paginator>\\n<DataList>\\n    <Name>testFunction</Name>\\n    <Desc/>\\n    <HttpTriggerPath>/http/hello</HttpTriggerPath>\\n    <CreatedAt>2019-06-10T02:33:16.674Z</CreatedAt>\\n    <ModifiedAt>2019-06-10T02:33:16.674Z</ModifiedAt>\\n    <TimingTriggerConfig>cron:0 0 * * * *</TimingTriggerConfig>\\n    <Spec>\\n        <InstanceConcurrency>1</InstanceConcurrency>\\n        <Memory>128 MB</Memory>\\n        <Timeout>5s</Timeout>\\n        <Runtime>Node.js 8</Runtime>\\n    </Spec>\\n</DataList>","errorExample":""}]',
      'title' => '查询已创建的云函数列表',
      'summary' => '查询已创建的云函数列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListFunctionDeployment' => 
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
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '列表的页码。起始值：1 默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页行数。最大值：100 默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '部署单名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demoFunction',
          ),
        ),
        3 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dece4ea0-d432-4cfa-****-8a88d205e2b8',
          ),
        ),
        4 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '部署单元状态，取值：

- DEPLOY_SUCCESS：查询部署成功的部署单。
- DEPLOY_FAILED：查询部署失败的部署单。

> 如果不指定状态，则查询全部部署单。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'DEPLOY_SUCCESS',
          ),
        ),
      ),
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
                'example' => 'C293BB03-B6AD-46C2-80D1-19C8FB573916',
              ),
              'Paginator' => 
              array (
                'description' => '分页信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页行数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '当前页面总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'DataList' => 
              array (
                'description' => '函数数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'CreatedAt' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2019-06-21T02:22:53.309Z',
                    ),
                    'DeploymentId' => 
                    array (
                      'description' => '部署ID。',
                      'type' => 'string',
                      'example' => 'dep-5e49fd471c9d4451c33bdd06',
                    ),
                    'DownloadSignedUrl' => 
                    array (
                      'description' => '下载地址。',
                      'type' => 'string',
                      'example' => 'http://function-apiserver-test.oss-cn-shanghai.aliyuncs.com/5d0afc0e1c9d44*****32c30a-v5.zip?OSSAccessKeyId=LTA************&Expires=1561425220&Signature=SAgUkZFK54eAbU6TLT9zMZ7S8eg%3D',
                    ),
                    'VersionNo' => 
                    array (
                      'description' => '版本号。',
                      'type' => 'string',
                      'example' => '2019061110511930090',
                    ),
                    'ModifiedAt' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'string',
                      'example' => '2019-06-21T02:22:55.996Z',
                    ),
                    'Status' => 
                    array (
                      'description' => '状态。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '状态。',
                          'type' => 'string',
                          'example' => 'DEPLOY_SUCCESS',
                        ),
                        'Label' => 
                        array (
                          'description' => '状态描述。',
                          'type' => 'string',
                          'example' => '部署成功',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C293BB03-B6AD-46C2-80D1-19C8FB573916\\",\\n  \\"Paginator\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 1,\\n    \\"PageCount\\": 1\\n  },\\n  \\"DataList\\": [\\n    {\\n      \\"CreatedAt\\": \\"2019-06-21T02:22:53.309Z\\",\\n      \\"DeploymentId\\": \\"dep-5e49fd471c9d4451c33bdd06\\",\\n      \\"DownloadSignedUrl\\": \\"http://function-apiserver-test.oss-cn-shanghai.aliyuncs.com/5d0afc0e1c9d44*****32c30a-v5.zip?OSSAccessKeyId=LTA************&Expires=1561425220&Signature=SAgUkZFK54eAbU6TLT9zMZ7S8eg%3D\\",\\n      \\"VersionNo\\": \\"2019061110511930090\\",\\n      \\"ModifiedAt\\": \\"2019-06-21T02:22:55.996Z\\",\\n      \\"Status\\": {\\n        \\"Status\\": \\"DEPLOY_SUCCESS\\",\\n        \\"Label\\": \\"部署成功\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<HttpStatusCode>200</HttpStatusCode>\\n<RequestId>71F897B5-7078-487E-8029-EE2FD071D203</RequestId>\\n<Paginator>\\n    <PageCount>1</PageCount>\\n    <PageSize>10</PageSize>\\n    <PageNum>1</PageNum>\\n    <Total>2</Total>\\n</Paginator>\\n<DataList>\\n    <Status>\\n        <Status>DEPLOY_SUCCESS</Status>\\n        <Label>部署成功</Label>\\n    </Status>\\n    <DeploymentId>dep-5e0ab12b1c9d44709fa2c***</DeploymentId>\\n    <DownloadSignedUrl>http://mps-zjk-faas-prod.oss-cn-zhangjiakou.aliyuncs.com/upload/xxxx</DownloadSignedUrl>\\n    <ModifiedAt>2019-12-31T02:23:41.799Z</ModifiedAt>\\n    <VersionNo>2019123110233936929</VersionNo>\\n    <CreatedAt>2019-12-31T02:23:39.371Z</CreatedAt>\\n</DataList>\\n<DataList>\\n    <Status>\\n        <Status>DEPLOY_SUCCESS</Status>\\n        <Label>部署成功</Label>\\n    </Status>\\n    <DeploymentId>dep-5e0aa9d21c9d446d94af0***</DeploymentId>\\n    <DownloadSignedUrl>http://mps-zjk-faas-prod.oss-cn-zhangjiakou.aliyuncs.com/upload/xxxx</DownloadSignedUrl>\\n    <ModifiedAt>2019-12-31T01:52:20.966Z</ModifiedAt>\\n    <VersionNo>2019123109521824866</VersionNo>\\n    <CreatedAt>2019-12-31T01:52:18.251Z</CreatedAt>\\n</DataList>\\n<Success>true</Success>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '查询云函数部署单列表',
      'summary' => '查询云函数部署单列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListFunctionLog' => 
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
          'name' => 'PageNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码，默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页大小，默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '函数名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demoFunction',
          ),
        ),
        3 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间的SpaceID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dece4ea0-****-4cfa-8514-8a88d205e2b8',
          ),
        ),
        4 => 
        array (
          'name' => 'LogRequestId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '函数运行时请求ID。',
            'type' => 'string',
            'required' => false,
            'example' => '0a206a521561344642018387523432',
          ),
        ),
        5 => 
        array (
          'name' => 'FromDate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '开始时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1560134212326',
          ),
        ),
        6 => 
        array (
          'name' => 'ToDate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '结束时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1560134212326',
          ),
        ),
        7 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '状态。可选值：

- SUCCESS ：成功
- FAIL ：失败
- 为空时返回全部',
            'type' => 'string',
            'required' => false,
            'example' => 'SUCCESS',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回内容。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C293BB03-B6AD-46C2-80D1-19C8FB573916',
              ),
              'Paginator' => 
              array (
                'description' => '分页信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '页大小。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageCount' => 
                  array (
                    'description' => '当前页面总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
              'DataList' => 
              array (
                'description' => '函数数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '函数运行状态。',
                      'type' => 'string',
                      'example' => 'SUCCESS',
                    ),
                    'SpaceId' => 
                    array (
                      'description' => '服务空间ID。',
                      'type' => 'string',
                      'example' => 'dece4ea0-d432-4cfa-8514-8a88d205e2b8',
                    ),
                    'RequestId' => 
                    array (
                      'description' => '函数运行时请求ID。',
                      'type' => 'string',
                      'example' => 'C293BB03-B6AD-46C2-80D1-19C8FB573916',
                    ),
                    'FunctionName' => 
                    array (
                      'description' => '函数名称。',
                      'type' => 'string',
                      'example' => 'demoFunction',
                    ),
                    'Timestamps' => 
                    array (
                      'description' => '时间。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '日志记录时间。',
                        'type' => 'string',
                        'example' => '1545403746724',
                      ),
                    ),
                    'Contents' => 
                    array (
                      'description' => '内容。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '日志内容。',
                        'type' => 'string',
                        'example' => '2018-12-21 14:49:06.724 INFO Start `hello2` at Fri Dec 21 2018 14:49:06 GMT+0000 (UTC) 2018-12-21 14:49:06.724 INFO Successin 0ms',
                      ),
                    ),
                    'Levels' => 
                    array (
                      'description' => '等级。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '日志级别。',
                        'type' => 'string',
                        'example' => 'INFO',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C293BB03-B6AD-46C2-80D1-19C8FB573916\\",\\n  \\"Paginator\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Total\\": 1,\\n    \\"PageCount\\": 1\\n  },\\n  \\"DataList\\": [\\n    {\\n      \\"Status\\": \\"SUCCESS\\",\\n      \\"SpaceId\\": \\"dece4ea0-d432-4cfa-8514-8a88d205e2b8\\",\\n      \\"RequestId\\": \\"C293BB03-B6AD-46C2-80D1-19C8FB573916\\",\\n      \\"FunctionName\\": \\"demoFunction\\",\\n      \\"Timestamps\\": [\\n        \\"1545403746724\\"\\n      ],\\n      \\"Contents\\": [\\n        \\"2018-12-21 14:49:06.724 INFO Start `hello2` at Fri Dec 21 2018 14:49:06 GMT+0000 (UTC) 2018-12-21 14:49:06.724 INFO Successin 0ms\\"\\n      ],\\n      \\"Levels\\": [\\n        \\"INFO\\"\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>C293BB03-B6AD-46C2-80D1-19C8FB573916</RequestId>\\n<Paginator>\\n    <Total>1</Total>\\n    <PageNum>1</PageNum>\\n    <PageSize>10</PageSize>\\n    <PageCount>1</PageCount>\\n</Paginator>\\n<DataList>\\n    <SpaceId>b04c2224-****-438c-938a-2b29073900ff</SpaceId>\\n    <FunctionName>hello2</FunctionName>\\n    <RequestId>d879d5f1c19192cdd1bf69e670cb5dbf</RequestId>\\n    <Timestamp>1545403746724</Timestamp>\\n    <Level>INFO</Level>\\n    <LoggerName>fnLogger</LoggerName>\\n    <LoggerFile>/release/lib/runtime/logs/runtime/fn.log</LoggerFile>\\n    <Status>SUCCESS</Status>\\n    <Content>2018-12-21 14:49:06.724 INFO Start `hello2` at Fri Dec 21 2018 14:49:06 GMT+0000 (UTC)\\n2018-12-21 14:49:06.724 INFO Successin 0ms\\n</Content>\\n</DataList>","errorExample":""}]',
      'title' => '查询函数执行日志',
      'summary' => '查询函数执行日志。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeployFunction' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DeploymentId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '部署单ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dep-5e49fd471c9d4451c33bdd06',
          ),
        ),
        1 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云函数所属的服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dece4ea0-d432-4cfa-****-8a88d205e2b8xxxx',
          ),
        ),
      ),
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
                'example' => '9D653EC3-8F53-4307-9B1C-52F5922384A6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9D653EC3-8F53-4307-9B1C-52F5922384A6\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeployFunctionResponse>\\r\\n\\t<RequestId>9D653EC3-8F53-4307-9B1C-52F5922384A6</RequestId>\\r\\n</DeployFunctionResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '触发函数部署',
      'summary' => '触发函数部署。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RunFunction' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ach41172-adba-4af1-b2e5-63fc5f56a649',
          ),
        ),
        1 => 
        array (
          'name' => 'Body',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '格式为 JSON String，functionTarget 为函数名，functionArgs 为传递给函数的参数，格式为 JSON String。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"functionTarget":"test-function","functionArgs":{"a":"aaaa","b":"bbbb","num":100}}',
          ),
        ),
      ),
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
                'example' => 'F75E60FA-7583-4E2E-AC14-6C608F89804',
              ),
              'Result' => 
              array (
                'description' => '函数中返回的数据，格式为 JSON String。',
                'type' => 'string',
                'example' => '{"name":"tom"}',
              ),
              'RuntimeMeta' => 
              array (
                'description' => '函数运行元数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'InvocationDuration' => 
                  array (
                    'description' => '执行时间，单位毫秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '523',
                  ),
                  'RequestId' => 
                  array (
                    'description' => '请求ID。',
                    'type' => 'string',
                    'example' => '980879201561364765437209427735',
                  ),
                  'BillingDuration' => 
                  array (
                    'description' => '计费时间，单位毫秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '600',
                  ),
                  'MaxMemoryUsage' => 
                  array (
                    'description' => '占用内存，单位 MB。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '27',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F75E60FA-7583-4E2E-AC14-6C608F89804\\",\\n  \\"Result\\": \\"{\\\\\\"name\\\\\\":\\\\\\"tom\\\\\\"}\\",\\n  \\"RuntimeMeta\\": {\\n    \\"InvocationDuration\\": 523,\\n    \\"RequestId\\": \\"980879201561364765437209427735\\",\\n    \\"BillingDuration\\": 600,\\n    \\"MaxMemoryUsage\\": 27\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Result>{\\"name\\":\\"tom\\"}</Result>\\n<HttpStatusCode>200</HttpStatusCode>\\n<RequestId>780A14D7-D478-4090-AF53-A324A60C0222</RequestId>\\n<AffectedDocs>1</AffectedDocs>\\n<Success>true</Success>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '执行函数',
      'summary' => '执行函数，同步执行最多支持60秒。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDBCollection' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '92e26ea9-6450-4b40-9c20-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Body',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '要删除的数据集。格式为JSON字符串，其中command固定值为drop，collection值为要删除的集合名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"command": "drop", "collection": "table1"}',
          ),
        ),
      ),
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
                'example' => '20C1EDFE-6355-4344-B20A-A7A5A1581026',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20C1EDFE-6355-4344-B20A-A7A5A1581026\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDBCollectionResponse>\\r\\n\\t<AffectedDocs>0</AffectedDocs>\\r\\n\\t<RequestId>20C1EDFE-6355-4344-B20A-A7A5A1581026</RequestId>\\r\\n\\t<Result>true</Result>\\r\\n</DeleteDBCollectionResponse>","errorExample":""}]',
      'title' => '删除数据库集合',
      'summary' => '接口删除数据库集合。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RenameDBCollection' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9*****',
          ),
        ),
        1 => 
        array (
          'name' => 'OriginCollection',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '原集合名称，需要指定存在的集合名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'coll1',
          ),
        ),
        2 => 
        array (
          'name' => 'NewCollection',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '新集合名称，新集合名称不能和现有集合名称相同。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'newColl1',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '20C1EDFE-6355-4344-B20A-A7A5A1581026',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"20C1EDFE-6355-4344-B20A-A7A5A1581026\\"\\n}","errorExample":""},{"type":"xml","example":"<RenameDBCollectionResponse>\\n    <RequestId>20C1EDFE-6355-4344-B20A-A7A5A1581026</RequestId>\\n</RenameDBCollectionResponse>","errorExample":""}]',
      'title' => '重命名集合',
      'summary' => '重命名集合。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RunDBCommand' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ach41172-adba-4af1-b2e5-63fc5f56a649',
          ),
        ),
        1 => 
        array (
          'name' => 'Body',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '请求数据库时的命令，格式为 JSON String。

包含两个必须字段：

- command: 包含集合操作、索引操作、数据操作命令。

集合操作命令：
- collections： 获取集合列表；
- createCollection： 创建集合，需要字段 name，待创建集合的名称；

索引操作命令：
- listIndexes： 获取索引列表，需要字段 collection；
- createIndex： 创建索引，需要字段 collection，field，options；
- dropIndex： 删除索引，需要 dropIndex 字段；

数据操作命令：
- 支持 find，insertOne，replaceOne等，需要collection字段、options字段，每个命令有不同的 options，具体内容参考开发指南；

例如：
- command 参数为 find 时，需要 query 字段
- command 参数为 replaceOne 时，需要 filter 和 doc 字段',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"command":"findOne","collection":"test_collection","query":{"name":"tome"}}',
          ),
        ),
      ),
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
                'example' => 'F75E60FA-7583-4E2E-AC14-6C608F89804',
              ),
              'Result' => 
              array (
                'description' => '数据库返回结果，格式为 JSON String。',
                'type' => 'string',
                'example' => '{"_id":"5d107e5af957c439d505b95b","age":1,"name":"aaaaa","time":1561362071732}',
              ),
              'AffectedDocs' => 
              array (
                'description' => '此次操作影响的数据库文档数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F75E60FA-7583-4E2E-AC14-6C608F89804\\",\\n  \\"Result\\": \\"{\\\\\\"_id\\\\\\":\\\\\\"5d107e5af957c439d505b95b\\\\\\",\\\\\\"age\\\\\\":1,\\\\\\"name\\\\\\":\\\\\\"aaaaa\\\\\\",\\\\\\"time\\\\\\":1561362071732}\\",\\n  \\"AffectedDocs\\": 1\\n}","errorExample":""},{"type":"xml","example":"<Result>{\\"_id\\":\\"5d107e5af957c439d505b95b\\",\\"age\\":1,\\"name\\":\\"aaaaa\\",\\"text\\":\\"Mon Jun 24 2019 15:41:11 GMT+0800 (CST)\\",\\"time\\":1561362071732}</Result>\\n<HttpStatusCode>200</HttpStatusCode>\\n<RequestId>780A14D7-D478-4090-AF53-A324A60C0222</RequestId>\\n<AffectedDocs>1</AffectedDocs>\\n<Success>true</Success>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '执行数据库命令',
      'summary' => '执行数据库命令。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '该接口功能较复杂，以下举例说明部分使用方法，供参考：

### 获取集合列表
params入参：
```
{
    "SpaceId": "mp-c68e6766-2bda-4263-916d-****",
    "Body": "{\\"command\\":\\"collections\\"}"
}
```
data结果：
```
{
	"AffectedDocs":5,
	"RequestId":"4CFE11BE-536C-58DD-****",
	"Success":true,
	"Result":"[\\"album\\",\\"photo\\",\\"test\\",\\"users\\",\\"wallpaper\\"]"
}
```

### 创建集合
params入参：
```
{
    "SpaceId": "mp-c68e6766-2bda-4263-916d-****",
    "Body": "{\\"command\\":\\"createCollection\\", \\"name\\":\\"mytable\\"}"
}
```
data结果：
```
{
	"AffectedDocs":1,
	"RequestId":"042ED29A-3148-5133-ABEA-****",
	"Success":true,
	"Result":"[\\"mytable\\"]"
}
```

### 创建索引

给集合mytable创建非唯一组合索引，按照userId升序、userName降序。

params入参：
```
{
    "SpaceId": "mp-c68e6766-2bda-4263-916d-****",
    "Body": "{\\"command\\":\\"createIndex\\", \\"collection\\":\\"mytable\\", \\"field\\":{\\"userId\\":1,\\"userName\\":-1}, \\"options\\":{\\"name\\":\\"idx-userid-username\\", \\"unique\\":false} }"
}
```
data结果：
```
{
	"AffectedDocs":0,
	"RequestId":"C67E7C63-EB30-506E-BF28-****",
	"Success":true,
	"Result":"idx-userid-username"
}
```

### 获取索引列表
params入参：
```
{
    "SpaceId": "mp-c68e6766-2bda-4263-916d-****",
    "Body": "{\\"command\\":\\"listIndexes\\", \\"collection\\":\\"mytable\\"}"
}
```
data结果：
```
{
    "AffectedDocs": 2,
    "RequestId": "8B8F315A-FBCA-560E-8C85-****",
    "Success": true,
    "Result": "[{\\"v\\":2,\\"key\\":{\\"_id\\":1},\\"name\\":\\"_id_\\",\\"ns\\":\\"db_ALYEZT****_mp-c68e6766-2bda-4263-916d-****.mytable\\"},{\\"v\\":2,\\"key\\":{\\"userId\\":1,\\"userName\\":-1},\\"name\\":\\"idx-userid-username\\",\\"ns\\":\\"db_ALYEZT****_mp-c68e6766-2bda-4263-916d-****.mytable\\"}]"
}
```

### 删除索引
params入参：
```
{
    "SpaceId": "mp-c68e6766-2bda-4263-916d-****",
    "Body": "{\\"command\\":\\"dropIndex\\", \\"collection\\":\\"mytable\\", \\"indexName\\":\\"idx-userid-username\\"}"
}
```
data结果：
```
{
    "AffectedDocs": 0,
    "RequestId": "1EE343F7-9DE8-534C-AE12-****",
    "Success": true
}
```

### 插入一条数据
params入参：
```
{
    "SpaceId": "mp-c68e6766-2bda-4263-916d-****",
    "Body": "{\\"command\\":\\"insertOne\\", \\"collection\\":\\"mytable\\", \\"doc\\":{\\"userId\\":1, \\"userName\\":\\"张三\\"}}"
}
```
data结果：
```
{
    "AffectedDocs": 1,
    "RequestId": "B1032DBA-51CF-5E47-91C5-****",
    "Success": true,
    "Result": "{\\"insertedId\\":\\"636496e2f43e60aba4939f5f\\",\\"ok\\":1,\\"n\\":1}"
}
```

### 查询前十条数据
params入参：
```
{
    "SpaceId": "mp-c68e6766-2bda-4263-916d-****",
    "Body": "{\\"command\\":\\"find\\", \\"collection\\":\\"mytable\\", \\"query\\":{}, \\"options\\":{\\"skip\\":0, \\"limit\\":10}}"
}
```
data结果：
```
{
    "AffectedDocs": 2,
    "RequestId": "AB1F4B1C-F6E6-5E49-AB4B-****",
    "Success": true,
    "Result": "[{\\"_id\\":\\"636496e2f43e60aba4939f5f\\",\\"userName\\":\\"张三\\",\\"userId\\":1},{\\"_id\\":\\"636496ef819ce88b66f34b6d\\",\\"userName\\":\\"李四\\",\\"userId\\":2}]"
}
```',
    ),
    'CreateDBRestoreTask' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '备份文件ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '20201118114602_6bd7c996-f620-4026-ae24-418eddf78671',
          ),
        ),
        2 => 
        array (
          'name' => 'OriginCollections',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待回档集合名称，多个集合用英文逗号分隔，例如`coll1,coll2`。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'coll1,coll2',
          ),
        ),
        3 => 
        array (
          'name' => 'NewCollections',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '回档后的集合名称，不能和数据库中现有的文档名称相同，与originCollections一一对应，多个集合用英文逗号分隔，例如`newColl1,newColl2`。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'newColl1,newColl2',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '0150006d-ab93-4920-a63e-c011dea1e089',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TaskId\\": \\"0150006d-ab93-4920-a63e-c011dea1e089\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBRestoreTaskResponse>\\r\\n    <RequestId>58881468-E779-4203-B933-BD53FDC60D6F</RequestId>\\r\\n    <taskId>0150006d-ab93-4920-a63e-c011dea1e089</taskId>\\r\\n</CreateDBRestoreTaskResponse>","errorExample":""}]',
      'title' => '创建集合回档任务',
      'summary' => '创建集合回档任务。创建回档任务成功后，会返回任务ID。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDBBackupCollections' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
          ),
        ),
        1 => 
        array (
          'name' => 'BackupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '备份文件ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '20201118114602_6bd7c996-f620-4026-ae24-418eddf78671',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'Collections' => 
              array (
                'description' => '已备份的集合列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '已备份的集合列表。',
                  'type' => 'string',
                  'example' => 'coll1',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Collections\\": [\\n    \\"coll1\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryDBBackupCollectionsResponse>\\n    <RequestId>58881468-E779-4203-B933-BD53FDC60D6F</RequestId>\\n    <Collections>coll1</Collections>\\n    <Collections>coll2</Collections>\\n</QueryDBBackupCollectionsResponse>","errorExample":""}]',
      'title' => '根据备份ID来查询备份的集合',
      'summary' => '根据备份ID来查询备份的集合。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDBRestoreTaskStatus' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0150006d-ab93-4920-a63e-c011dea1e089',
          ),
        ),
      ),
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
                'description' => '回档任务状态。可选值如下：
- NEW：新创建，导出任务不可能出现此状态。
- WAITING：排队中，任务较多时可能会出现。
- RUNNING：执行中。
- SUCCESS：成功。
- FAILED：失败。

> 注意任务状态变成**SUCCESS**或者**FAILED**都应该中止轮询。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'FailedCount' => 
              array (
                'description' => '回档失败的数据库记录数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'DetailMessage' => 
              array (
                'description' => '任务失败时的错误信息。',
                'type' => 'string',
                'example' => 'SERVER_BUSY',
              ),
              'SuccessCount' => 
              array (
                'description' => '成功回档的数据库记录数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
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
            'errorCode' => 'TaskId.NotFound',
            'errorMessage' => 'The specified TaskId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"SUCCESS\\",\\n  \\"FailedCount\\": 1,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"DetailMessage\\": \\"SERVER_BUSY\\",\\n  \\"SuccessCount\\": 1\\n}","errorExample":""},{"type":"xml","example":"<QueryDBRestoreTaskStatusResponse>\\n    <RequestId>58881468-E779-4203-B933-BD53FDC60D6F</RequestId>\\n    <status>SUCCESS</status>\\n    <successCount>1</successCount>\\n    <failedCount>0</failedCount>\\n</QueryDBRestoreTaskStatusResponse>","errorExample":""}]',
      'title' => '查询集合回档任务状态',
      'summary' => '查询集合回档任务状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDBBackupDumpTimes' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'BackupDumpTimes' => 
              array (
                'description' => '备份记录集合。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BackupId' => 
                    array (
                      'description' => '备份记录ID。',
                      'type' => 'string',
                      'example' => '20201118114602_6bd7c996-f620-4026-ae24-418eddf78671',
                    ),
                    'DumpTime' => 
                    array (
                      'description' => '备份时间。',
                      'type' => 'string',
                      'example' => '2020-11-18T03:46:02Z',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"BackupDumpTimes\\": [\\n    {\\n      \\"BackupId\\": \\"20201118114602_6bd7c996-f620-4026-ae24-418eddf78671\\",\\n      \\"DumpTime\\": \\"2020-11-18T03:46:02Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<QueryDBBackupDumpTimesResponse>\\n    <RequestId>58881468-E779-4203-B933-BD53FDC60D6F</RequestId>\\n    <backupDumpTimes>\\n        <dumpTime>2020-11-18T03:46:02Z</dumpTime>\\n        <backupId>20201118114602_6bd7c996-f620-4026-ae24-418eddf78671</backupId>\\n    </backupDumpTimes>\\n    <backupDumpTimes>\\n        <dumpTime>2020-11-18T04:05:28Z</dumpTime>\\n        <backupId>20201118120527_6bd7c996-f620-4026-ae24-418eddf78671</backupId>\\n    </backupDumpTimes>\\n</QueryDBBackupDumpTimesResponse>","errorExample":""}]',
      'title' => '查询备份时间和备份ID',
      'summary' => '查询备份时间和备份ID，默认保存最近7天的备份记录。',
      'description' => '> 该接口返回的备份时间是开始执行备份任务的时间，因备份任务执行需要一定的时间，并不代表备份内容正好是备份时间的快照。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDBExportTask' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'Collection',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集合名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'article',
          ),
        ),
        2 => 
        array (
          'name' => 'FileType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '导出文件类型。可选值为：
- JSON
- CSV',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'CSV',
            'enum' => 
            array (
              0 => 'JSON',
              1 => 'CSV',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'Fields',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '导出的字段列表，以逗号（,）分隔。当文件类型为CSV时该字段必选。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'name,content',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '0150006d-ab93-4920-a63e-c011dea1e089',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TaskId\\": \\"0150006d-ab93-4920-a63e-c011dea1e089\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBExportTaskResponse>\\n    <TaskId>0150006d-ab93-4920-a63e-c011dea1e089</TaskId>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</CreateDBExportTaskResponse>","errorExample":""}]',
      'title' => '创建数据库导出任务',
      'summary' => '创建数据库导出任务。',
      'description' => '> 创建导出任务成功后，您可以调用QueryDBExportTaskStatus接口来查询导出任务状态，数据导出成功后，会返回一个地址供您下载导出后的文件。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDBImportTask' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'Collection',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集合名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'FileType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '导入文件类型，可选值为：
- JSON
- CSV',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'CSV',
            'enum' => 
            array (
              0 => 'JSON',
              1 => 'CSV',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'Mode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '冲突处理模式，可选值为：
- INSERT（默认） ：导入出现冲突则忽略。
- UPSERT：导入出现冲突则使用文件中的内容更新。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'UPSERT',
            'enum' => 
            array (
              0 => 'INSERT',
              1 => 'UPSERT',
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
              'Host' => 
              array (
                'description' => '上传文件使用的Host。
><notice>该接口返回的文件上传Host站点配有跨域限制规则，仅允许官方console.aliyun.com网站直传文件。不可用于三方网站文件直传。不影响非网页端文件上传。></notice>',
                'type' => 'string',
                'example' => 'https://mps-zjk-share.oss-cn-zhangjiakou.aliyuncs.com',
              ),
              'ExpireTime' => 
              array (
                'description' => '上传文件的过期时间。',
                'type' => 'string',
                'example' => '2020-07-20T05:32:03Z',
              ),
              'FileKey' => 
              array (
                'description' => '上传文件使用的FileKey。',
                'type' => 'string',
                'example' => 'mongo/import/0e16bb12-14af-4635-b24c-5ac1a9*****/20200720130203_973820af-966d-42ec-9fab-17dfe4a******.csv',
              ),
              'AccessKeyId' => 
              array (
                'description' => '上传文件使用的AccessKeyId。',
                'type' => 'string',
                'example' => 'LTAIupaslTlU*****',
              ),
              'Signature' => 
              array (
                'description' => '上传文件使用的Signature。',
                'type' => 'string',
                'example' => '*****luWDvbmhqwwy9pm/Mso++pk=',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '692DCFEF-46DD-4EBB-B1DB-338E687DC260',
              ),
              'Policy' => 
              array (
                'description' => '上传文件使用的Policy。',
                'type' => 'string',
                'example' => 'eyJleHBpcmF0aW9uIjjoiMjAyMC0wNy0yMFQwNTozMjowMy40NDVaIiwiY29uZGl0aW9ucyI*****Y29udGVudC1sZW5ndoiMjAyMC==',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'example' => '973820af-966d-42ec-9fab-17dfe4a*****',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Host\\": \\"https://mps-zjk-share.oss-cn-zhangjiakou.aliyuncs.com\\",\\n  \\"ExpireTime\\": \\"2020-07-20T05:32:03Z\\",\\n  \\"FileKey\\": \\"mongo/import/0e16bb12-14af-4635-b24c-5ac1a9*****/20200720130203_973820af-966d-42ec-9fab-17dfe4a******.csv\\",\\n  \\"AccessKeyId\\": \\"LTAIupaslTlU*****\\",\\n  \\"Signature\\": \\"*****luWDvbmhqwwy9pm/Mso++pk=\\",\\n  \\"RequestId\\": \\"692DCFEF-46DD-4EBB-B1DB-338E687DC260\\",\\n  \\"Policy\\": \\"eyJleHBpcmF0aW9uIjjoiMjAyMC0wNy0yMFQwNTozMjowMy40NDVaIiwiY29uZGl0aW9ucyI*****Y29udGVudC1sZW5ndoiMjAyMC==\\",\\n  \\"TaskId\\": \\"973820af-966d-42ec-9fab-17dfe4a*****\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateDBImportTaskResponse>\\n    <Policy>eyJleHBpcmF0aW9uIjjoiMjAyMC0wNy0yMFQwNTozMjowMy40NDVaIiwiY29uZGl0aW9ucyI*****Y29udGVudC1sZW5ndoiMjAyMC==</Policy>\\n    <FileKey>mongo/import/0e16bb12-14af-4635-b24c-5ac1a9*****/20200720130203_973820af-966d-42ec-9fab-17dfe4a******.csv</FileKey>\\n    <TaskId>973820af-966d-42ec-9fab-17dfe4a*****</TaskId>\\n    <RequestId>692DCFEF-46DD-4EBB-B1DB-338E687DC260</RequestId>\\n    <AccessKeyId>LTAIupaslTlU*****</AccessKeyId>\\n    <Signature>*****luWDvbmhqwwy9pm/Mso++pk=</Signature>\\n    <Host>https://mps-zjk-share.oss-cn-zhangjiakou.aliyuncs.com</Host>\\n    <ExpireTime>2020-07-20T05:32:03Z</ExpireTime>\\n</CreateDBImportTaskResponse>","errorExample":""}]',
      'title' => '创建数据库导入任务',
      'summary' => '创建数据库导入任务。',
      'description' => '创建导入任务成功后，将会返回任务ID、上传文件的地址和鉴权信息。您需要在要求的时间内向给定的地址上传需要导入的文件。上传文件成功之后，您需要调用QueryDBImportTaskStatus接口来触发运行导入任务，并查询数据导入状态。  
上传文件时，请求方法请使用POST方法，Content-Type指定为`multipart/form-data`。下面是使用curl命令上传文件的一个示例。
```
curl -X POST \\
-H \'Content-Type: multipart/form-data\' \\
-F \'key=${FileKey}\' \\
-F \'policy=${Policy}\' \\
-F \'OSSAccessKeyId=${AccessKeyId}\' \\
-F \'Signature=${Signature}\' \\
-F \'file=@${FilePath}\' \\
\'${Host}\'
```
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDBExportTaskStatus' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9*****',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0150006d-ab93-4920-a63e-c011dea*****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'ExportedCount' => 
              array (
                'description' => '导出记录数，仅当任务状态为SUCCESS时返回。',
                'type' => 'string',
                'example' => '2',
              ),
              'Status' => 
              array (
                'description' => '任务状态，有以下几种类型：
- WAITING：排队中，当前任务还未开始执行。
- RUNNING：执行中。
- SUCCESS：成功。
- FAILED：失败。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '58881468-E779-4203-B933-BD53FDC60D6F',
              ),
              'DownloadUrl' => 
              array (
                'description' => '下载链接，仅当任务状态为SUCCESS时返回。',
                'type' => 'string',
                'example' => 'https://mps-zjk-share.oss-cn-zhangjiakou.aliyuncs.com/mongo/export/0e16bb12-14af-4635-b24c-5ac1a9a7bb9f/20200720104406_0150006d-ab93-4920-a63e-c011dea1e089.csv?Expires=1595215206&OSSAccessKeyId=LTAIupaslTlU****&Signature=CKxpKX3Wj%2BLVtZ****%2FTbe%2BX9sc%3D',
              ),
              'DetailMessage' => 
              array (
                'description' => '任务失败时的错误信息。',
                'type' => 'string',
                'example' => ' SERVER_BUSY',
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
            'errorCode' => 'TaskId.NotFound',
            'errorMessage' => 'The specified TaskId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ExportedCount\\": \\"2\\",\\n  \\"Status\\": \\"SUCCESS\\",\\n  \\"RequestId\\": \\"58881468-E779-4203-B933-BD53FDC60D6F\\",\\n  \\"DownloadUrl\\": \\"https://mps-zjk-share.oss-cn-zhangjiakou.aliyuncs.com/mongo/export/0e16bb12-14af-4635-b24c-5ac1a9a7bb9f/20200720104406_0150006d-ab93-4920-a63e-c011dea1e089.csv?Expires=1595215206&OSSAccessKeyId=LTAIupaslTlU****&Signature=CKxpKX3Wj%2BLVtZ****%2FTbe%2BX9sc%3D\\",\\n  \\"DetailMessage\\": \\" SERVER_BUSY\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryDBExportTaskStatusResponse>\\n    <Status>SUCCESS</Status>\\n    <ExportedCount>2</ExportedCount>\\n    <RequestId>58881468-E779-4203-B933-BD53FDC60D6F</RequestId>\\n    <DownloadUrl>https://mps-zjk-share.oss-cn-zhangjiakou.aliyuncs.com/mongo/export/0e16bb12-14af-4635-b24c-5ac1a9a7bb9f/20200720104406_0150006d-ab93-4920-a63e-c011dea1e089.csv?Expires=1595215206&amp;OSSAccessKeyId=LTAIupaslTlU****&amp;Signature=CKxpKX3Wj%2BLVtZ****%2FTbe%2BX9sc%3D</DownloadUrl>\\n</QueryDBExportTaskStatusResponse>","errorExample":""}]',
      'title' => '查询数据库导出任务状态',
      'summary' => '查询数据库导出任务状态，若任务执行成功会同时返回文件下载链接，若失败会返回失败原因。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryDBImportTaskStatus' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '任务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '973820af-966d-42ec-9fab-17dfe4a*****',
          ),
        ),
      ),
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
                'description' => '任务执行状态。可选值为：
- NEW： 新创建，创建了任务但是未上传文件，或者文件未上传完成。
- WAITING：排队中，当前任务还未开始执行。
- RUNNING：执行中。
- SUCCESS：成功。
- FAILED：失败。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'FailedCount' => 
              array (
                'description' => '失败记录数。',
                'type' => 'string',
                'example' => '0',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '692DCFEF-46DD-4EBB-B1DB-338E687DC260',
              ),
              'DetailMessage' => 
              array (
                'description' => '任务失败时的错误信息。',
                'type' => 'string',
                'example' => 'SERVER_BUSY',
              ),
              'SuccessCount' => 
              array (
                'description' => '成功记录数。',
                'type' => 'string',
                'example' => '6',
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
            'errorCode' => 'TaskId.NotFound',
            'errorMessage' => 'The specified TaskId does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"SUCCESS\\",\\n  \\"FailedCount\\": \\"0\\",\\n  \\"RequestId\\": \\"692DCFEF-46DD-4EBB-B1DB-338E687DC260\\",\\n  \\"DetailMessage\\": \\"SERVER_BUSY\\",\\n  \\"SuccessCount\\": \\"6\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryDBImportTaskStatusResponse>\\n    <Status>SUCCESS</Status>\\n    <RequestId>692DCFEF-46DD-4EBB-B1DB-338E687DC260</RequestId>\\n    <FailedCount>0</FailedCount>\\n    <SuccessCount>2</SuccessCount>\\n</QueryDBImportTaskStatusResponse>","errorExample":""}]',
      'title' => '查询数据库导入状态',
      'summary' => '查询数据库导入状态。',
      'description' => '> 上传文件后第一次调用会触发导入任务执行，建议您在上传导入文件成功之后调用该接口，若任务执行成功会同时返回导入成功和失败的记录数，若任务失败会返回失败原因。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteFile' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- 按照文件ID删除单个文件，文件唯一标识，例如： ef69b85f-****-4942-8a0f-211a82b48ec7
- 按照目录结构删除文件，传入目录前缀并以 "/" 结尾，当目录文件过多时请耐心等待，例如：images/
- 支持同时删除多个文件和多个目录，文件ID以及目录前缀使用半角逗号（,）分隔。最多同时删除50个项目，例如： ef69b85f-****-4942-8a0f-211a82b48ec7,images/,docs/',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'c568f23d-a46f-4866-****-142e5eb3e174',
          ),
        ),
        1 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
      ),
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
                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFileResponse>\\n    <RequestId>F655A8D5-B967-440B-8683-DAD6FF8DE990</RequestId>\\n</DeleteFileResponse>","errorExample":""}]',
      'title' => '删除文件',
      'summary' => '删除文件。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RegisterFile' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Id',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '唯一标识。取值为DescribeFileUploadSignedUrl接口返回的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2fada31e-8fa5-****-b595-9698cd6b5f06',
          ),
        ),
        1 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-****-4635-b24c-5ac1a9a7bb9f',
          ),
        ),
      ),
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
                'example' => 'CEF72CEB-54B6-4AE8-B225-F876FF7BA984',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CEF72CEB-54B6-4AE8-B225-F876FF7BA984\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId> CEF72CEB-54B6-4AE8-B225-F876FF7BA984</RequestId>","errorExample":""}]',
      'title' => '注册文件',
      'summary' => 'RegisterFile注册文件。',
      'description' => '><warning>最新版本上传文件采用 OSS CallBack 机制，不再需要调用该接口注册文件。></warning>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFileUploadSignedUrl' => 
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
          'name' => 'Filename',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- 原始的文件名称。
- 当以"/"结尾时，创建一个空文件夹，支持多级子文件夹。创建文件夹时，不返回文件签名，自动完成创建。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'wlop29.jpg',
          ),
        ),
        1 => 
        array (
          'name' => 'Size',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件大小，单位字节。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '41836',
          ),
        ),
        2 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'mp-0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
        3 => 
        array (
          'name' => 'ContentType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件类型：.pdf .xls .xlsx .doc .docx .ppt .pptx .txt',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'png',
          ),
        ),
        4 => 
        array (
          'name' => 'FileId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义上传文件路径，支持多级目录，路径支持字母、数字、中文、横线、下横线、点符号，总长度不超过1024，必须以"/"开头，例如：
`/abc/edf/hello.jpg`

> - 当该文件路径已存在文件时会直接覆盖 
> - 另外也支持传入fileId或者文件url覆盖已有文件',
            'type' => 'string',
            'required' => false,
            'example' => '/abc/edf/hello.jpg',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'SignUrl' => 
              array (
                'description' => '上传文件地址。',
                'type' => 'string',
                'example' => 'https://bsppub.oss-cn-shanghai.aliyuncs.com/FBPSBVMO-myspace/41552d60-52de-xxx-a713-43e879b0717a.JPG?OSSAccessKeyId=LTAIk****dtFueLA&Expires=1582152512&Signature=sek1B0Xm2r***tNvfX9tX%2BBJxA%3D',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E9A50E1B-5ECE-42D4-B261-C07D1BBE68DE',
              ),
              'Id' => 
              array (
                'description' => '文件唯一标识。',
                'type' => 'string',
                'example' => '2fada31e-8fa5-****-b595-9698cd6b5f06',
              ),
              'OssCallbackUrl' => 
              array (
                'description' => '上传结果回调地址。',
                'type' => 'string',
                'example' => 'https://api.next.bspapp.com/oss_upload_callback',
              ),
              'Overwrite' => 
              array (
                'description' => '含义是该上传请求是否会覆盖文件。
- true：覆盖。
- false：不覆盖。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"SignUrl\\": \\"https://bsppub.oss-cn-shanghai.aliyuncs.com/FBPSBVMO-myspace/41552d60-52de-xxx-a713-43e879b0717a.JPG?OSSAccessKeyId=LTAIk****dtFueLA&Expires=1582152512&Signature=sek1B0Xm2r***tNvfX9tX%2BBJxA%3D\\",\\n  \\"RequestId\\": \\"E9A50E1B-5ECE-42D4-B261-C07D1BBE68DE\\",\\n  \\"Id\\": \\"2fada31e-8fa5-****-b595-9698cd6b5f06\\",\\n  \\"OssCallbackUrl\\": \\"https://api.next.bspapp.com/oss_upload_callback\\",\\n  \\"Overwrite\\": true\\n}","type":"json"}]',
      'title' => '获取上传文件需要的签名',
      'summary' => '获取上传文件需要的签名。',
      'responseParamsDescription' => '在获取到上传文件地址 SignUrl 之后，需要使用 PUT 对该地址上传文件。 PUT请求必须在headers携带回调地址参数，该参数构造方法如下： 
- 第一步：构造字符串 ` {"callbackUrl":"....","callbackBody":"{\\"fileId\\":\\"....\\",\\"spaceId\\":\\"....\\"}","callbackBodyType":"application/json"}` 分别将参数 OssCallbackUrl、Id以及SpaceId替换到上面的空缺部分。
- 第二步：对上述字符串进行 base64编码。
- 第三步：在上传文件时添加header   `x-oss-callback`，值为第二步计算得到的字符串。

><notice>请求参数ContentType也是签名计算的一部分，因此在上传文件时您需要添加header **Content-Type**，并确保值和入参一致。></notice>',
    ),
    'ListFile' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-xxxx-5ac1a9a7bb9f',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页行数，默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Keyword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '关键字。',
            'type' => 'string',
            'required' => false,
            'example' => '关键字1',
          ),
        ),
        3 => 
        array (
          'name' => 'FileId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '要查询的文件的ID/URL。
支持同时查询多个文件，多个文件ID使用半角逗号（,）分隔。最多可以设置50个文件ID/文件URL。',
            'type' => 'string',
            'required' => false,
            'example' => 'id1',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用来标记当前开始读取的位置。置空表示从头开始。
>仅商业版支持该功能',
            'type' => 'string',
            'required' => false,
            'example' => 'CAESBgoEIgIIABgAIrQBCrEBA6wAAAAxTDdmZmZmZmZmZjg5OWJlMzguUzZkNzAyZDY2Mz***',
          ),
        ),
        5 => 
        array (
          'name' => 'Mode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件列表模式，可选值为：
- DEFAULT（默认） ：默认模式，所有文件按照上传时间倒序展示。
- DIRECTORY：文件夹模式。',
            'type' => 'string',
            'required' => false,
            'example' => 'DIRECTORY',
            'enum' => 
            array (
              0 => 'DEFAULT',
              1 => 'DIRECTORY',
            ),
          ),
        ),
        6 => 
        array (
          'name' => 'Prefix',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '路径前缀。默认查询根目录。',
            'type' => 'string',
            'required' => false,
            'example' => '/images',
          ),
        ),
        7 => 
        array (
          'name' => 'AuthDelta',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '鉴权有效时间，单位秒。只有在您开启了CDN配置中的鉴权功能时有效。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1800',
          ),
        ),
      ),
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
                'example' => 'FE88BEC8-8F83-408A-9ED3-771C510C705F',
              ),
              'Paginator' => 
              array (
                'description' => '分页信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '页大小。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'NextToken' => 
                  array (
                    'description' => '用来标记当前开始读取的位置。置空表示从头开始。
> 仅商业版支持该功能',
                    'type' => 'string',
                    'example' => 'eyJhY2NvdW50IjoiMTE2MTQwNTMxMDE0OTY2OCIsImV2ZW50SWQiOiIzMkI3QTE1Mi05NUJFLTUyNkMtQjEyNC00RUYxRDk2RDM4QkEiLCJsb2dJZCI6IjE0LTExNjE0MDUzMTAxNDk2NjgiLCJ0aW1lIjoxNjM1MjEzMzk0MDAwfQ',
                  ),
                ),
              ),
              'DataList' => 
              array (
                'description' => '数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '文件类型。包含两个保留类型：

- directory: 文件夹，此时只有Name字段值有效，为文件夹名称。
- only\\_in\\_oss: 数据不一致的文件，出现的原因是用户上传该文件之后没有完成注册导致的数据不一致现象，一般处理方式是删除重新上传。',
                      'type' => 'string',
                      'example' => 'JPG',
                    ),
                    'Size' => 
                    array (
                      'description' => '文件大小。

',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1000',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2020-01-16T05:45:33.000Z',
                    ),
                    'Url' => 
                    array (
                      'description' => '文件下载链接。',
                      'type' => 'string',
                      'example' => 'https://fbpxxx.cdn.bspapp.com/FBPSBVMO-myspace/68dbd670-3823-11ea-bfb9-xxxx.JPG',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'string',
                      'example' => '2020-01-16T05:45:33.000Z',
                    ),
                    'Name' => 
                    array (
                      'description' => '文件名称。',
                      'type' => 'string',
                      'example' => '1579153532001.JPG',
                    ),
                    'Id' => 
                    array (
                      'description' => '唯一标识。',
                      'type' => 'string',
                      'example' => 'c568f23d-a46f-4866-xxxx-142e5eb3e174',
                    ),
                    'AuthDelta' => 
                    array (
                      'description' => '鉴权有效时间，单位秒。只有在您开启了CDN配置中的鉴权功能时有效。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1800',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE88BEC8-8F83-408A-9ED3-771C510C705F\\",\\n  \\"Paginator\\": {\\n    \\"PageSize\\": 10,\\n    \\"NextToken\\": \\"eyJhY2NvdW50IjoiMTE2MTQwNTMxMDE0OTY2OCIsImV2ZW50SWQiOiIzMkI3QTE1Mi05NUJFLTUyNkMtQjEyNC00RUYxRDk2RDM4QkEiLCJsb2dJZCI6IjE0LTExNjE0MDUzMTAxNDk2NjgiLCJ0aW1lIjoxNjM1MjEzMzk0MDAwfQ\\"\\n  },\\n  \\"DataList\\": [\\n    {\\n      \\"Type\\": \\"JPG\\",\\n      \\"Size\\": 1000,\\n      \\"GmtCreate\\": \\"2020-01-16T05:45:33.000Z\\",\\n      \\"Url\\": \\"https://fbpxxx.cdn.bspapp.com/FBPSBVMO-myspace/68dbd670-3823-11ea-bfb9-xxxx.JPG\\",\\n      \\"GmtModified\\": \\"2020-01-16T05:45:33.000Z\\",\\n      \\"Name\\": \\"1579153532001.JPG\\",\\n      \\"Id\\": \\"c568f23d-a46f-4866-xxxx-142e5eb3e174\\",\\n      \\"AuthDelta\\": 1800\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListFileResponse>\\n    <RequestId>FE88BEC8-8F83-408A-9ED3-771C510C705F</RequestId>\\n    <Paginator>\\n        <PageNum>1</PageNum>\\n        <PageSize>10</PageSize>\\n        <Total>1</Total>\\n        <PageCount>1</PageCount>\\n    </Paginator>\\n    <DataList>\\n        <Type>JPG</Type>\\n        <Size>1000</Size>\\n        <GmtCreate>2020-01-16T05:45:33.000Z</GmtCreate>\\n        <Url>https://fbpxxx.cdn.bspapp.com/FBPSBVMO-myspace/68dbd670-3823-11ea-bfb9-xxxx.JPG</Url>\\n        <GmtModified>2020-01-16T05:45:33.000Z</GmtModified>\\n        <Name>1579153532001.JPG</Name>\\n        <Id>c568f23d-a46f-4866-xxxx-142e5eb3e174</Id>\\n    </DataList>\\n</ListFileResponse>","errorExample":""}]',
      'title' => '查询文件列表',
      'summary' => '查询文件列表。',
    ),
    'DescribeCdnDomain' => 
    array (
      'summary' => '查询cdn域名',
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
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '租户 ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'UNIGTXQTAO',
          ),
        ),
        1 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间 ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'mp-05c3aa1c-****-43ae-a03d-61eff91c592e',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '支持对云存储和静态网站自定义域名进行管理：
- FILE 云存储CDN
- WEB 静态网站托管CDN（前提是已经绑定自定义CDN）',
            'type' => 'string',
            'required' => true,
            'example' => 'FILE',
            'enum' => 
            array (
              0 => 'FILE',
              1 => 'WEB',
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
              'SpaceId' => 
              array (
                'description' => '服务空间 ID。',
                'type' => 'string',
                'example' => 'mp-65e6491b-****-4c2e-b202-7f0036eb2713',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E8A2FA95-6F70-****-971C-34C27485441D',
              ),
              'ServiceStatus' => 
              array (
                'description' => '- IN_SERVICE：CDN服务中。
- PAUSED：CDN已停止服务，请检查您的账户余额、套餐到期日或者资源用量是否超额。',
                'type' => 'string',
                'example' => 'IN_SERVICE',
              ),
              'DomainName' => 
              array (
                'description' => 'CDN域名。',
                'type' => 'string',
                'example' => 'mp-65e6491b-****-4c2e-b202-7f0036eb2713.cdn.bspapp.com',
              ),
              'CorsConfig' => 
              array (
                'description' => '跨域配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'AllowOrigin' => 
                  array (
                    'description' => '设置跨域校验规则，默认为“*”，跨域校验规则为：
- 设置为“\\*”，不论用户请求里面是否携带“Origin”参数，也不论携带的“Origin”参数为何值，都固定返回“Access-Control-Allow-Origin:*”。
- 跨域资源共享的响应头值设置了单个或者多个值（多个值之间用“,”分隔）。
  - 如果用户请求头里携带的“Origin”参数值与被设置的任意一个值精确匹配，就会响应对应的跨域头。
  - 如果都没有精确匹配上，则不响应跨域头。
- 设置为通配符域名，则会校验请求头中Origin值是否能匹配上。',
                    'type' => 'string',
                    'example' => 'https://www.baidu.com',
                  ),
                  'ConfigId' => 
                  array (
                    'description' => '配置ID。',
                    'type' => 'string',
                    'example' => '274436853071****',
                  ),
                  'AccessOriginControl' => 
                  array (
                    'description' => '- true：开启跨域验证，每次请求都会检查是否符合跨域规则。
- false：不开启跨域校验，固定返回已配置的跨域头。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'RefererConfig' => 
              array (
                'description' => '防盗链配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '- white： 白名单
- black： 黑名单
> 黑名单和白名单互斥，同一时间您只能选择其中一种方式。',
                    'type' => 'string',
                    'example' => 'white',
                  ),
                  'ReferList' => 
                  array (
                    'description' => '名单列表，多个用半角逗号（,）分隔。
> Referer防盗链规则的总长度最长不超过60 KB。',
                    'type' => 'string',
                    'example' => 'a*b.example.com',
                  ),
                  'AllowEmpty' => 
                  array (
                    'description' => '是否允许空referer字段访问CDN资源。取值：
- on：允许。
- off（默认值）：禁止。',
                    'type' => 'string',
                    'example' => 'on',
                  ),
                  'DisableAst' => 
                  array (
                    'description' => '是否使用精确匹配模式，控制“名单列表”项中填写的域名是否为精确匹配。如果勾选（on）则精确匹配域名。
- 取值为on时：
  - 支持精确匹配。
    - 名单列表填写example.com，匹配example.com。
    -  名单列表填写a*b.example.com，匹配a<任意字符>b.example.com。
  - 不支持后缀匹配。
- 取值为off（默认值）时：
  -  不支持精确匹配。
  - 支持后缀匹配。
    - 名单列表填写example.com，匹配example.com和<任意字符>.example.com。
     - 名单列表填写a*b.example.com，匹配a<任意字符>b.example.com和<任意字符>.a<任意字符>b.example.com。',
                    'type' => 'string',
                    'example' => 'a*b.example.com',
                  ),
                  'ConfigId' => 
                  array (
                    'description' => '配置ID。',
                    'type' => 'string',
                    'example' => '28048528682****',
                  ),
                ),
              ),
              'IpConfig' => 
              array (
                'description' => 'IP黑白名单配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '- white： 白名单
- black： 黑名单

> 黑名单和白名单互斥，同一时间您只能选择其中一种方式。',
                    'type' => 'string',
                    'example' => 'black',
                  ),
                  'IpList' => 
                  array (
                    'description' => '- IP列表，多个用半角逗号（,）分隔。支持设置网段。
- 最多可配置约700个IPv6地址，2000个IPv4地址。

更多参考：[IP地址校验模式](https://help.aliyun.com/document_detail/27138.htm#section-6dp-9h1-ty3)。',
                    'type' => 'string',
                    'example' => '183.157.108.82,140.205.147.26',
                  ),
                  'ConfigId' => 
                  array (
                    'description' => '配置ID。',
                    'type' => 'string',
                    'example' => '25623800702****',
                  ),
                ),
              ),
              'UaConfig' => 
              array (
                'description' => 'UA客户端标识黑白名单配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '- white： 白名单
- black： 黑名单

> 黑名单和白名单互斥，同一时间您只能选择其中一种方式。',
                    'type' => 'string',
                    'example' => 'white',
                  ),
                  'UaList' => 
                  array (
                    'description' => '填写User-Agent，支持通配符号*（匹配任意字符串）和多个值（多个值用|分割。例如：\\*curl\\*|\\*IE\\*|\\*chrome\\*|\\*firefox\\*）。
> 如果您需要对用户请求中携带了User-Agent请求头，但是值为空的情况做访问控制，您可以使用参数this-is-empty-ua来表示User-Agent值为空。',
                    'type' => 'string',
                    'example' => '*curl*|*IE*|*chrome*|*firefox*',
                  ),
                  'ConfigId' => 
                  array (
                    'description' => '配置ID。',
                    'type' => 'string',
                    'example' => '25950108534****',
                  ),
                ),
              ),
              'AuthConfig' => 
              array (
                'description' => 'CDN鉴权配置，仅“FILE”模式下有效。',
                'type' => 'object',
                'properties' => 
                array (
                  'AuthType' => 
                  array (
                    'description' => '鉴权类型，枚举值：
- no_auth 当前未开启鉴权。
- type_a A方式鉴权。
- type_b B方式鉴权。
- ype_c C方式鉴权。

更多参考：[鉴权方式及原理说明](https://help.aliyun.com/document_detail/85113.htm)。',
                    'type' => 'string',
                    'example' => 'no_auth',
                  ),
                  'AuthKey' => 
                  array (
                    'description' => '鉴权秘钥，6~128位，用于计算鉴权签名。',
                    'type' => 'string',
                    'example' => 'SL4ZB****',
                  ),
                  'AuthDelta' => 
                  array (
                    'description' => '鉴权默认有效时长（秒）。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3600',
                  ),
                  'configId' => 
                  array (
                    'description' => '配置ID。',
                    'type' => 'string',
                    'example' => '25950108534****
',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"SpaceId\\": \\"mp-65e6491b-****-4c2e-b202-7f0036eb2713\\",\\n  \\"RequestId\\": \\"E8A2FA95-6F70-****-971C-34C27485441D\\",\\n  \\"ServiceStatus\\": \\"IN_SERVICE\\",\\n  \\"DomainName\\": \\"mp-65e6491b-****-4c2e-b202-7f0036eb2713.cdn.bspapp.com\\",\\n  \\"CorsConfig\\": {\\n    \\"AllowOrigin\\": \\"https://www.baidu.com\\",\\n    \\"ConfigId\\": \\"274436853071****\\",\\n    \\"AccessOriginControl\\": true\\n  },\\n  \\"RefererConfig\\": {\\n    \\"Type\\": \\"white\\",\\n    \\"ReferList\\": \\"a*b.example.com\\",\\n    \\"AllowEmpty\\": \\"on\\",\\n    \\"DisableAst\\": \\"a*b.example.com\\",\\n    \\"ConfigId\\": \\"28048528682****\\"\\n  },\\n  \\"IpConfig\\": {\\n    \\"Type\\": \\"black\\",\\n    \\"IpList\\": \\"183.157.108.82,140.205.147.26\\",\\n    \\"ConfigId\\": \\"25623800702****\\"\\n  },\\n  \\"UaConfig\\": {\\n    \\"Type\\": \\"white\\",\\n    \\"UaList\\": \\"*curl*|*IE*|*chrome*|*firefox*\\",\\n    \\"ConfigId\\": \\"25950108534****\\"\\n  },\\n  \\"AuthConfig\\": {\\n    \\"AuthType\\": \\"no_auth\\",\\n    \\"AuthKey\\": \\"SL4ZB****\\",\\n    \\"AuthDelta\\": 3600,\\n    \\"configId\\": \\"25950108534****\\\\n\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取CDN配置',
      'description' => '获取cdn域名配置信息。',
    ),
    'SaveCdnDomainConfig' => 
    array (
      'summary' => '配置CDN。',
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
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '租户 ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'UNIULEH***',
          ),
        ),
        1 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'mp-03c11beb-****-4d02-bb40-65a7ad224f4d',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- FILE 配置云存储CDN。
- WEB 配置静态网站托管CDN。',
            'type' => 'string',
            'required' => true,
            'example' => 'FILE',
            'enum' => 
            array (
              0 => 'FILE',
              1 => 'WEB',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'CorsConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- 设置跨域：  {"allowOrigin":"https://*.example.com", "accessOriginControl": true} 。
- 删除跨域
  - 方式1：{"type":"remove", "configId": "268021436***"}。
  - 方式2：{"allowOrigin":"", "configId": "268021436***"}。',
            'type' => 'string',
            'required' => false,
            'example' => ' {"allowOrigin":"https://*.example.com", "accessOriginControl": true} ',
          ),
        ),
        4 => 
        array (
          'name' => 'RefererConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- 设置白名单
  {"type":"white", "referList":"example.com", "allowEmpty":"off", "disableAst":"off"}
- 设置黑名单
  {"type":"black", "referList":"example.com", "allowEmpty":"off", "disableAst":"off"}
- 删除配置
  {"type":"remove", "configId": "268021436***"}',
            'type' => 'string',
            'required' => false,
            'example' => ' {"type":"white", "referList":"example.com", "allowEmpty":"off", "disableAst":"off"}',
          ),
        ),
        5 => 
        array (
          'name' => 'IpConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- 设置白名单
  {"type":"white", "ipList":"192.168.2.0/24"}
- 设置黑名单
  {"type":"black", "ipList":"192.168.2.0/24"}
- 删除配置
  {"type":"remove", "configId": "268021436***"}',
            'type' => 'string',
            'required' => false,
            'example' => ' {"type":"white", "ipList":"192.168.2.0/24"}',
          ),
        ),
        6 => 
        array (
          'name' => 'UaConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- 设置白名单
  {"type":"white", "uaList":"\\*IE\\*|\\*firefox\\*"}
- 设置黑名单
  {"type":"black", "uaList":"\\*IE\\*|\\*firefox\\*"}
- 删除配置
  {"type":"remove", "configId": "268021436***"}',
            'type' => 'string',
            'required' => false,
            'example' => ' {"type":"white", "uaList":"*IE*|*firefox*"}',
          ),
        ),
        7 => 
        array (
          'name' => 'AuthConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '配置鉴权模式，仅“FILE”模式下有效。当开启鉴权模式后，您必须按照鉴权加签算法完成URL签名计算后才能访问文件。您可以通过服务面接口 file.info 或者管控面接口 ListFile 接口快捷获取加签后的URL。
- 开启鉴权模式，设置URL默认有效时长1800秒，方式A鉴权
  {"authType":"type_a", "authKey":"hkpyytgrnf", "authDelta":1800}
- 关闭鉴权模式
  {"authType":"no_auth"}',
            'type' => 'string',
            'required' => false,
            'example' => '{"authType":"type_a", "authKey":"hkpyytgrnf", "authDelta":1800}',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '9B1D280D-F8C8-****-B30F-BDE5A981FDA9',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9B1D280D-F8C8-****-B30F-BDE5A981FDA9\\"\\n}","type":"json"}]',
      'title' => '保存CDN配置',
      'requestParamsDescription' => 'Refer和IP在配置白名单时，如果存在黑名单配置需要手动删掉。同理配置黑名单时如果存在白名单也需要手动删掉。 UA黑白名单支持覆盖，无需手动删。',
    ),
    'DeleteWebHostingFile' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'FilePath',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件路径。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '/error.jpg',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回操作执行结果。
- true：操作成功。
- false：操作失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"0e16bb12-14af-4635-b24c-5ac1a9a*****\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteWebHostingFileResponse>\\r\\n    <RequestId>DB14BED4-ABB5-4033-920F-E22E52580911</RequestId>\\r\\n    <HttpStatusCode>200</HttpStatusCode>\\r\\n    <Data>true</Data>\\r\\n    <Code>success</Code>\\r\\n    <Success>true</Success>\\r\\n</DeleteWebHostingFileResponse>","errorExample":""}]',
      'title' => '删除静态网站托管下的文件',
      'summary' => '删除静态网站托管下的文件。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchDeleteWebHostingFiles' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'FilePaths',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需要删除的文件路径。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要删除的文件路径。',
              'type' => 'string',
              'required' => false,
              'example' => 'static/index.870cf761.js',
            ),
            'required' => true,
            'example' => '/static/test.png',
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
              'Data' => 
              array (
                'description' => '返回操作执行结果。
- true：操作成功。
- false：操作失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"0e16bb12-14af-4635-b24c-5ac1a9a*****\\"\\n}","errorExample":""},{"type":"xml","example":"<BatchDeleteWebHostingFilesResponse>\\r\\n    <Data>true</Data>\\r\\n    <RequestId>0e16bb12-14af-4635-b24c-5ac1a9a*****</RequestId>\\r\\n</BatchDeleteWebHostingFilesResponse>","errorExample":""}]',
      'title' => '批量删除静态网站托管下的文件',
      'summary' => '批量删除静态网站托管下的文件。',
      'requestParamsDescription' => '例如您需要批量删除两个文件a和b，参数FilePaths的传参格式如下：
`{"FilePaths.1": "a", "FilePaths.2": "b" }`',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListWebHostingFiles' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'Prefix',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '路径前缀。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '/',
          ),
        ),
        2 => 
        array (
          'name' => 'Marker',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页游标。取值为上一页返回的NextMarker的值，当获取第一页时，取空字符串。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****/test/error1.png',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页大小，默认50，最大500。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
            'example' => '100',
            'default' => '50',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '93FC5921-2A54-408B-B360-2E5C93488CF4',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'NextMarker' => 
                  array (
                    'description' => '分页标记，标记当前分页请求到的最后一条数据。',
                    'type' => 'string',
                    'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****/test/error1.png',
                  ),
                  'Count' => 
                  array (
                    'description' => '返回数据总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '50',
                  ),
                  'WebHostingFiles' => 
                  array (
                    'description' => '静态网站文件信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FilePath' => 
                        array (
                          'description' => '文件路径。',
                          'type' => 'string',
                          'example' => 'error/error.jpg',
                        ),
                        'ContentType' => 
                        array (
                          'description' => '文件类型。',
                          'type' => 'string',
                          'example' => 'image/png',
                        ),
                        'ETag' => 
                        array (
                          'description' => '标记。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Size' => 
                        array (
                          'description' => '文件大小，单位字节。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '235628',
                        ),
                        'LastModifiedTime' => 
                        array (
                          'description' => '上一次修改文件时间的时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1590398956000',
                        ),
                        'SignedUrl' => 
                        array (
                          'description' => '文件下载URL，有效时间30分钟。',
                          'type' => 'string',
                          'example' => 'http://fbpsbvmo-15415903938*****-static.oss-cn-zhangjiakou.aliyuncs.com/0e16bb12-14af-4635-b24c-5ac1a9a*****/test/error.jpg?Expires=1590462873&OSSAccessKeyId=STS.NT9oaFvbRzj8vSViJL2y*****&Signature=pSMbsZUZGwfZEcvT9R7VZPMp%2BVA%3D&security-token=CAISgQJ1q6Ft5B2yfSjIr5eMJNvym71zzajTdHXnjUoZPvYVjIHgpjz2IHBEeXRuA%2B0WsvQ%2Bnm9X6vgelqFZYqRoYGHiUZOgBG3HPUXzDbDasumZsJYm6vT8a0XxZjf%2F2MjNGZabKPrWZvaqbX3diyZ32sGUXD6%2BXlujQ%2Fbr4NwdGbZxZASjaidcD9p7PxZrrNRgVUHcLvGwKBXn8AGyZQhKwlMh1ToiuPzkk5bMukuE1gXAp7VL99irEP%2BNdNJxOZpzadCx0dFte7DJuCwqsEgaqfoo1vEUpWeW5I7CXwcN%2BWePN%2BvF79tuIEpwae0gEqsBtv%2F4mLhxtunSkZQQTrutnEPAOhqAAZ6L6gVhZYEK78ZBsQq1hP9nvtEGENelJYiTPWAHmB1mDutOaEzgSpwVMaP3FWpMTy6KgBKMox1NJLUZJK23NlJIlMIJ8lVyCQOG4Ig7oTXTbFc0PQMShK%2FeQIQ2WvZ2x%2F%2FZdgaZIeQR4WnawsWF%2BYC4ScTig0wYTuaLx7pH2WHJ',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"93FC5921-2A54-408B-B360-2E5C93488CF4\\",\\n  \\"Data\\": {\\n    \\"NextMarker\\": \\"0e16bb12-14af-4635-b24c-5ac1a9a*****/test/error1.png\\",\\n    \\"Count\\": 50,\\n    \\"WebHostingFiles\\": [\\n      {\\n        \\"FilePath\\": \\"error/error.jpg\\",\\n        \\"ContentType\\": \\"image/png\\",\\n        \\"ETag\\": \\"test\\",\\n        \\"Size\\": 235628,\\n        \\"LastModifiedTime\\": 1590398956000,\\n        \\"SignedUrl\\": \\"http://fbpsbvmo-15415903938*****-static.oss-cn-zhangjiakou.aliyuncs.com/0e16bb12-14af-4635-b24c-5ac1a9a*****/test/error.jpg?Expires=1590462873&OSSAccessKeyId=STS.NT9oaFvbRzj8vSViJL2y*****&Signature=pSMbsZUZGwfZEcvT9R7VZPMp%2BVA%3D&security-token=CAISgQJ1q6Ft5B2yfSjIr5eMJNvym71zzajTdHXnjUoZPvYVjIHgpjz2IHBEeXRuA%2B0WsvQ%2Bnm9X6vgelqFZYqRoYGHiUZOgBG3HPUXzDbDasumZsJYm6vT8a0XxZjf%2F2MjNGZabKPrWZvaqbX3diyZ32sGUXD6%2BXlujQ%2Fbr4NwdGbZxZASjaidcD9p7PxZrrNRgVUHcLvGwKBXn8AGyZQhKwlMh1ToiuPzkk5bMukuE1gXAp7VL99irEP%2BNdNJxOZpzadCx0dFte7DJuCwqsEgaqfoo1vEUpWeW5I7CXwcN%2BWePN%2BvF79tuIEpwae0gEqsBtv%2F4mLhxtunSkZQQTrutnEPAOhqAAZ6L6gVhZYEK78ZBsQq1hP9nvtEGENelJYiTPWAHmB1mDutOaEzgSpwVMaP3FWpMTy6KgBKMox1NJLUZJK23NlJIlMIJ8lVyCQOG4Ig7oTXTbFc0PQMShK%2FeQIQ2WvZ2x%2F%2FZdgaZIeQR4WnawsWF%2BYC4ScTig0wYTuaLx7pH2WHJ\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListWebHostingFilesResponse>\\n    <RequestId>077C43E6-95E9-40FC-A796-B2CFBD63C2D6</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>\\n        <WebHostingFiles>\\n            <FilePath>error.html</FilePath>\\n            <SignedUrl>http://fbpsbvmo-154159039388****-static.oss-cn-zhangjiakou.aliyuncs.com/0e16bb12-14af-4635-b24c-5ac1a9a*****/error.html?Expires=1590460358&amp;OSSAccessKeyId=STS.NUcPHyHQr2xQ6zAe5ybi*****&amp;Signature=b2L4kBEFrA2EZvZbm3B%2FyNSxVeA%3D&amp;security-token=CAISgQJ1q6Ft5B2yfSjIr5bWG%2FLNpY5Thbq6NFzwgTUsbuZ4grfe0Tz2IHBEeXRuA%2B0WsvQ%2Bnm9X6vgelqFZYqRoYGHiUZOjKEbIPUXzDbDasumZsJYm6vT8a0XxZjf%2F2MjNGZabKPrWZvaqbX3diyZ32sGUXD6%2BXlujQ%2Fbr4NwdGbZxZASjaidcD9p7PxZrrNRgVUHcLvGwKBXn8AGyZQhKwlMh1ToiuPzkk5bMukuE1gXAp7VL99irEP%2BNdNJxOZpzadCx0dFte7DJuCwqsEgaqfoo1vEUpWeW5I7CXwcN%2BWePN%2BvF79tuIEpwae0gEqsBtv%2F4mLhxtunSkZQQTrutnEPAOhqAAU49tl4awl%2F0fID3wRpPDCKqg%2BfXifeRRPI2Tr%2Bm4PmK4qPffsI%2F5JXB4JA71uN5TkvMC6LxxTuQnJaTateDrfEDnzyyIVISjvQ7rzt8sxZCnDDfjzx6Lc5TAELuapDjeXK6w%2BWkbhwBTWcjrGAJvdaOA4IodaPZyDlyhO4jt1nv</SignedUrl>\\n            <ContentType>text/html</ContentType>\\n            <Size>172</Size>\\n            <LastModifiedTime>1590399001000</LastModifiedTime>\\n        </WebHostingFiles>\\n        <WebHostingFiles>\\n            <FilePath>index.html</FilePath>\\n            <SignedUrl>http://fbpsbvmo-154159039388****-static.oss-cn-zhangjiakou.aliyuncs.com/0e16bb12-14af-4635-b24c-5ac1a9a7*****/index.html?Expires=1590460358&amp;OSSAccessKeyId=STS.NUcPHyHQr2xQ6zAe5ybi*****&amp;Signature=w7ke9GsiFjb2bR7bQNOOTk4nlbA%3D&amp;security-token=CAISgQJ1q6Ft5B2yfSjIr5bWG%2FLNpY5Thbq6NFzwgTUsbuZ4grfe0Tz2IHBEeXRuA%2B0WsvQ%2Bnm9X6vgelqFZYqRoYGHiUZOjKEbIPUXzDbDasumZsJYm6vT8a0XxZjf%2F2MjNGZabKPrWZvaqbX3diyZ32sGUXD6%2BXlujQ%2Fbr4NwdGbZxZASjaidcD9p7PxZrrNRgVUHcLvGwKBXn8AGyZQhKwlMh1ToiuPzkk5bMukuE1gXAp7VL99irEP%2BNdNJxOZpzadCx0dFte7DJuCwqsEgaqfoo1vEUpWeW5I7CXwcN%2BWePN%2BvF79tuIEpwae0gEqsBtv%2F4mLhxtunSkZQQTrutnEPAOhqAAU49tl4awl%2F0fID3wRpPDCKqg%2BfXifeRRPI2Tr%2Bm4PmK4qPffsI%2F5JXB4JA71uN5TkvMC6LxxTuQnJaTateDrfEDnzyyIVISjvQ7rzt8sxZCnDDfjzx6Lc5TAELuapDjeXK6w%2BWkbhwBTWcjrGAJvdaOA4IodaPZyDlyhO4jt1nv</SignedUrl>\\n            <ContentType>text/html</ContentType>\\n            <Size>166</Size>\\n            <LastModifiedTime>1590398956000</LastModifiedTime>\\n        </WebHostingFiles>\\n        <Count>2</Count>\\n    </Data>\\n    <Code>success</Code>\\n    <Success>true</Success>\\n</ListWebHostingFilesResponse>","errorExample":""}]',
      'title' => '分页获取网站静态文件',
      'summary' => '分页获取网站静态文件。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeWebHostingFile' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'FilePath',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件路径，必传参数。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '/error.png',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '93FC5921-2A54-408B-B360-2E5C93488CF4',
              ),
              'Data' => 
              array (
                'description' => '返回的文件详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'FilePath' => 
                  array (
                    'description' => '文件路径。',
                    'type' => 'string',
                    'example' => '/error.png',
                  ),
                  'ContentType' => 
                  array (
                    'description' => '文件类型。',
                    'type' => 'string',
                    'example' => 'image/png',
                  ),
                  'ETag' => 
                  array (
                    'description' => '标记。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'Size' => 
                  array (
                    'description' => '文件大小，单位字节。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '235628',
                  ),
                  'Exists' => 
                  array (
                    'description' => '文件路径是否存在。如果查询一个不存在的文件路径，该字段将返回为false，其他字段为空。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'LastModifiedTime' => 
                  array (
                    'description' => '上一次修改文件时间的时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1590398956000',
                  ),
                  'SignedUrl' => 
                  array (
                    'description' => '文件签名URL，有效时间30分钟。',
                    'type' => 'string',
                    'example' => 'http://fbpsbvmo-154159039388****-static.oss-cn-zhangjiakou.aliyuncs.com/0e16bb12-14af-4635-b24c-5ac1a9a*****/error.png?Expires=1590460358&OSSAccessKeyId=STS.NUcPHyHQr2xQ6zAe5ybi*****&Signature=b2L4kBEFrA2EZvZbm3B%2FyNSxVeA%3D&security-token=CAISgQJ1q6Ft5B2yfSjIr5bWG%2FLNpY5Thbq6NFzwgTUsbuZ4grfe0Tz2IHBEeXRuA%2B0WsvQ%2Bnm9X6vgelqFZYqRoYGHiUZOjKEbIPUXzDbDasumZsJYm6vT8a0XxZjf%2F2MjNGZabKPrWZvaqbX3diyZ32sGUXD6%2BXlujQ%2Fbr4NwdGbZxZASjaidcD9p7PxZrrNRgVUHcLvGwKBXn8AGyZQhKwlMh1ToiuPzkk5bMukuE1gXAp7VL99irEP%2BNdNJxOZpzadCx0dFte7DJuCwqsEgaqfoo1vEUpWeW5I7CXwcN%2BWePN%2BvF79tuIEpwae0gEqsBtv%2F4mLhxtunSkZQQTrutnEPAOhqAAU49tl4awl%2F0fID3wRpPDCKqg%2BfXifeRRPI2Tr%2Bm4PmK4qPffsI%2F5JXB4JA71uN5TkvMC6LxxTuQnJaTateDrfEDnzyyIVISjvQ7rzt8sxZCnDDfjzx6Lc5TAELuapDjeXK6w%2BWkbhwBTWcjrGAJvdaOA4IodaPZyDlyhO4jt1nv',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"93FC5921-2A54-408B-B360-2E5C93488CF4\\",\\n  \\"Data\\": {\\n    \\"FilePath\\": \\"/error.png\\",\\n    \\"ContentType\\": \\"image/png\\",\\n    \\"ETag\\": \\"test\\",\\n    \\"Size\\": 235628,\\n    \\"Exists\\": true,\\n    \\"LastModifiedTime\\": 1590398956000,\\n    \\"SignedUrl\\": \\"http://fbpsbvmo-154159039388****-static.oss-cn-zhangjiakou.aliyuncs.com/0e16bb12-14af-4635-b24c-5ac1a9a*****/error.png?Expires=1590460358&OSSAccessKeyId=STS.NUcPHyHQr2xQ6zAe5ybi*****&Signature=b2L4kBEFrA2EZvZbm3B%2FyNSxVeA%3D&security-token=CAISgQJ1q6Ft5B2yfSjIr5bWG%2FLNpY5Thbq6NFzwgTUsbuZ4grfe0Tz2IHBEeXRuA%2B0WsvQ%2Bnm9X6vgelqFZYqRoYGHiUZOjKEbIPUXzDbDasumZsJYm6vT8a0XxZjf%2F2MjNGZabKPrWZvaqbX3diyZ32sGUXD6%2BXlujQ%2Fbr4NwdGbZxZASjaidcD9p7PxZrrNRgVUHcLvGwKBXn8AGyZQhKwlMh1ToiuPzkk5bMukuE1gXAp7VL99irEP%2BNdNJxOZpzadCx0dFte7DJuCwqsEgaqfoo1vEUpWeW5I7CXwcN%2BWePN%2BvF79tuIEpwae0gEqsBtv%2F4mLhxtunSkZQQTrutnEPAOhqAAU49tl4awl%2F0fID3wRpPDCKqg%2BfXifeRRPI2Tr%2Bm4PmK4qPffsI%2F5JXB4JA71uN5TkvMC6LxxTuQnJaTateDrfEDnzyyIVISjvQ7rzt8sxZCnDDfjzx6Lc5TAELuapDjeXK6w%2BWkbhwBTWcjrGAJvdaOA4IodaPZyDlyhO4jt1nv\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeWebHostingFileResponse>\\n    <RequestId>077C43E6-95E9-40FC-A796-B2CFBD63C2D6</RequestId>\\n    <Data>\\n        <Exists>true</Exists>\\n        <Etag>test</Etag>\\n        <FilePath>/error.png</FilePath>\\n        <LastModifiedTime>1590398956000</LastModifiedTime>\\n        <SignedUrl>http://fbpsbvmo-154159039388****-static.oss-cn-zhangjiakou.aliyuncs.com/0e16bb12-14af-4635-b24c-5ac1a9a*****/error.png?Expires=1590460358&amp;OSSAccessKeyId=STS.NUcPHyHQr2xQ6zAe5ybi*****&amp;Signature=b2L4kBEFrA2EZvZbm3B%2FyNSxVeA%3D&amp;security-token=CAISgQJ1q6Ft5B2yfSjIr5bWG%2FLNpY5Thbq6NFzwgTUsbuZ4grfe0Tz2IHBEeXRuA%2B0WsvQ%2Bnm9X6vgelqFZYqRoYGHiUZOjKEbIPUXzDbDasumZsJYm6vT8a0XxZjf%2F2MjNGZabKPrWZvaqbX3diyZ32sGUXD6%2BXlujQ%2Fbr4NwdGbZxZASjaidcD9p7PxZrrNRgVUHcLvGwKBXn8AGyZQhKwlMh1ToiuPzkk5bMukuE1gXAp7VL99irEP%2BNdNJxOZpzadCx0dFte7DJuCwqsEgaqfoo1vEUpWeW5I7CXwcN%2BWePN%2BvF79tuIEpwae0gEqsBtv%2F4mLhxtunSkZQQTrutnEPAOhqAAU49tl4awl%2F0fID3wRpPDCKqg%2BfXifeRRPI2Tr%2Bm4PmK4qPffsI%2F5JXB4JA71uN5TkvMC6LxxTuQnJaTateDrfEDnzyyIVISjvQ7rzt8sxZCnDDfjzx6Lc5TAELuapDjeXK6w%2BWkbhwBTWcjrGAJvdaOA4IodaPZyDlyhO4jt1nv</SignedUrl>\\n        <ContentType>image/png</ContentType>\\n        <Size>235628</Size>\\n    </Data>\\n</DescribeWebHostingFileResponse>","errorExample":""}]',
      'title' => '查询静态网站托管下的文件详情',
      'summary' => '查询静态网站托管下的一个文件详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetWebHostingUploadCredential' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'FilePath',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件路径。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '/',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '93FC5921-2A54-408B-B360-2E5C93488CF4',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'FilePath' => 
                  array (
                    'description' => '文件路径。',
                    'type' => 'string',
                    'example' => '/',
                  ),
                  'Signature' => 
                  array (
                    'description' => '文件上传临时凭证的签名信息，用于上传时验证合法性。',
                    'type' => 'string',
                    'example' => 'w7ke9GsiFjb2bR7bQNOOTk4nlbA',
                  ),
                  'Policy' => 
                  array (
                    'description' => '请求表单域的合法性校验策略。',
                    'type' => 'string',
                    'example' => 'eyJleHBpcmF0aW9uIjoiMjAyMC0wNS0yNlQwNjozMjoxOC43NTZaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDBdLHsia2V5IjoiMGUxNmJiMTItMTRhZi00NjM1LWIyNGMtNWFjMWE5YTdiYjlmL2Zvcm1hdC5qc29uIn1dfQ==',
                  ),
                  'SecurityToken' => 
                  array (
                    'description' => '文件上传临时凭证的安全令牌。',
                    'type' => 'string',
                    'example' => 'CAISgQJ1q6Ft5B2yfSjIr5bWG%2FLNpY5Thbq6NFzwgTUsbuZ4grfe0Tz2IHBEeXRuA%2B0WsvQ%2Bnm9X6vgelqFZYqRoYGHiUZOjKEbIPUXzDbDasumZsJYm6vT8a0XxZjf%2F2MjNGZabKPrWZvaqbX3diyZ32sGUXD6%2BXlujQ%2Fbr4NwdGbZxZASjaidcD9p7PxZrrNRgVUHcLvGwKBXn8AGyZQhKwlMh1ToiuPzkk5bMukuE1gXAp7VL99irEP%2BNdNJxOZpzadCx0dFte7DJuCwqsEgaqfoo1vEUpWeW5I7CXwcN%2BWePN%2BvF79tuIEpwae0gEqsBtv%2F4mLhxtunSkZQQTrutnEPAOhqAAU49tl4awl%2F0fID3wRpPDCKqg%2BfXifeRRPI2Tr%2Bm4PmK4qPffsI%2F5JXB4JA71uN5TkvMC6LxxTuQnJaTateDrfEDnzyyIVISjvQ7rzt8sxZCnDDfjzx6Lc5TAELuapDjeXK6w%2BWkbhwBTWcjrGAJvdaOA4IodaPZyDlyhO4jt1nv',
                  ),
                  'ExpiredTime' => 
                  array (
                    'description' => '过期时间的时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1590460358',
                  ),
                  'Endpoint' => 
                  array (
                    'description' => '上传文件的目标地址。',
                    'type' => 'string',
                    'example' => 'fbpsbvmo-154159039388***-static.oss-cn-zhangjiakou.aliyuncs.com',
                  ),
                  'AccessKeyId' => 
                  array (
                    'description' => '文件上传临时凭证的AccessKeyId。',
                    'type' => 'string',
                    'example' => 'STS.NUcPHyHQr2xQ6zAe5ybi*****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"93FC5921-2A54-408B-B360-2E5C93488CF4\\",\\n  \\"Data\\": {\\n    \\"FilePath\\": \\"/\\",\\n    \\"Signature\\": \\"w7ke9GsiFjb2bR7bQNOOTk4nlbA\\",\\n    \\"Policy\\": \\"eyJleHBpcmF0aW9uIjoiMjAyMC0wNS0yNlQwNjozMjoxOC43NTZaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDBdLHsia2V5IjoiMGUxNmJiMTItMTRhZi00NjM1LWIyNGMtNWFjMWE5YTdiYjlmL2Zvcm1hdC5qc29uIn1dfQ==\\",\\n    \\"SecurityToken\\": \\"CAISgQJ1q6Ft5B2yfSjIr5bWG%2FLNpY5Thbq6NFzwgTUsbuZ4grfe0Tz2IHBEeXRuA%2B0WsvQ%2Bnm9X6vgelqFZYqRoYGHiUZOjKEbIPUXzDbDasumZsJYm6vT8a0XxZjf%2F2MjNGZabKPrWZvaqbX3diyZ32sGUXD6%2BXlujQ%2Fbr4NwdGbZxZASjaidcD9p7PxZrrNRgVUHcLvGwKBXn8AGyZQhKwlMh1ToiuPzkk5bMukuE1gXAp7VL99irEP%2BNdNJxOZpzadCx0dFte7DJuCwqsEgaqfoo1vEUpWeW5I7CXwcN%2BWePN%2BvF79tuIEpwae0gEqsBtv%2F4mLhxtunSkZQQTrutnEPAOhqAAU49tl4awl%2F0fID3wRpPDCKqg%2BfXifeRRPI2Tr%2Bm4PmK4qPffsI%2F5JXB4JA71uN5TkvMC6LxxTuQnJaTateDrfEDnzyyIVISjvQ7rzt8sxZCnDDfjzx6Lc5TAELuapDjeXK6w%2BWkbhwBTWcjrGAJvdaOA4IodaPZyDlyhO4jt1nv\\",\\n    \\"ExpiredTime\\": 1590460358,\\n    \\"Endpoint\\": \\"fbpsbvmo-154159039388***-static.oss-cn-zhangjiakou.aliyuncs.com\\",\\n    \\"AccessKeyId\\": \\"STS.NUcPHyHQr2xQ6zAe5ybi*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetWebHostingUploadCredentialResponse>\\n    <RequestId>93FC5921-2A54-408B-B360-2E5C93488CF4</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>\\n        <FilePath>/</FilePath>\\n        <Policy>eyJleHBpcmF0aW9uIjoiMjAyMC0wNS0yNlQwNjozMjoxOC43NTZaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsNTI0Mjg4MDBdLHsia2V5IjoiMGUxNmJiMTItMTRhZi00NjM1LWIyNGMtNWFjMWE5YTdiYjlmL2Zvcm1hdC5qc29uIn1dfQ==</Policy>\\n        <SecurityToken>CAISgQJ1q6Ft5B2yfSjIr5bWG%2FLNpY5Thbq6NFzwgTUsbuZ4grfe0Tz2IHBEeXRuA%2B0WsvQ%2Bnm9X6vgelqFZYqRoYGHiUZOjKEbIPUXzDbDasumZsJYm6vT8a0XxZjf%2F2MjNGZabKPrWZvaqbX3diyZ32sGUXD6%2BXlujQ%2Fbr4NwdGbZxZASjaidcD9p7PxZrrNRgVUHcLvGwKBXn8AGyZQhKwlMh1ToiuPzkk5bMukuE1gXAp7VL99irEP%2BNdNJxOZpzadCx0dFte7DJuCwqsEgaqfoo1vEUpWeW5I7CXwcN%2BWePN%2BvF79tuIEpwae0gEqsBtv%2F4mLhxtunSkZQQTrutnEPAOhqAAU49tl4awl%2F0fID3wRpPDCKqg%2BfXifeRRPI2Tr%2Bm4PmK4qPffsI%2F5JXB4JA71uN5TkvMC6LxxTuQnJaTateDrfEDnzyyIVISjvQ7rzt8sxZCnDDfjzx6Lc5TAELuapDjeXK6w%2BWkbhwBTWcjrGAJvdaOA4IodaPZyDlyhO4jt1nv</SecurityToken>\\n        <BucketName>fbpsbvmo-154159039388***-static</BucketName>\\n        <Endpoint>fbpsbvmo-154159039388***-static.oss-cn-zhangjiakou.aliyuncs.com</Endpoint>\\n        <AccessKeyId>STS.NUcPHyHQr2xQ6zAe5ybi*****</AccessKeyId>\\n        <Signature>w7ke9GsiFjb2bR7bQNOOTk4nlbA</Signature>\\n        <ExpiredTime>1590460358</ExpiredTime>\\n    </Data>\\n    <Code>success</Code>\\n    <Success>true</Success>\\n</GetWebHostingUploadCredentialResponse>","errorExample":""}]',
      'title' => '获取静态网站托管的上传文件凭证',
      'summary' => '获取静态网站托管的上传文件凭证。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BindWebHostingCustomDomain' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'CustomDomain',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义域名（已备案的）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
              'Data' => 
              array (
                'description' => '操作执行结果。
- true：操作成功。
- false：操作失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'CEF9831B-A6D2-4485-9CAD-1B8FBC8BC6F7',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"CEF9831B-A6D2-4485-9CAD-1B8FBC8BC6F7\\"\\n}","errorExample":""},{"type":"xml","example":"<BindWebHostingCustomDomainResponse>\\r\\n    <RequestId>CEF9831B-A6D2-4485-9CAD-1B8FBC8BC6F7</RequestId>\\r\\n    <HttpStatusCode>200</HttpStatusCode>\\r\\n    <Data>true</Data>\\r\\n    <Code>success</Code>\\r\\n    <Success>true</Success>\\r\\n</BindWebHostingCustomDomainResponse>","errorExample":""}]',
      'title' => '添加自定义域名',
      'summary' => '添加自定义域名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnbindWebHostingCustomDomain' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'CustomDomain',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
              'Data' => 
              array (
                'description' => '操作执行结果。
- true：操作成功。
- false：操作失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'CEF9831B-A6D2-4485-9CAD-1B8FBC8BC6F7',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"CEF9831B-A6D2-4485-9CAD-1B8FBC8BC6F7\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindWebHostingCustomDomainResponse>\\r\\n    <RequestId>CEF9831B-A6D2-4485-9CAD-1B8FBC8BC6F7</RequestId>\\r\\n    <HttpStatusCode>200</HttpStatusCode>\\r\\n    <Data>true</Data>\\r\\n    <Code>success</Code>\\r\\n    <Success>true</Success>\\r\\n</UnbindWebHostingCustomDomainResponse>","errorExample":""}]',
      'title' => '删除一个自定义域名',
      'summary' => '删除一个自定义域名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveWebHostingCustomDomainConfig' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'ForceRedirectType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '强制跳转选项。
- HTTPS_FORCE：强制跳转。
- OFF：不跳转（默认）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'HTTPS_FORCE',
            'enum' => 
            array (
              0 => 'HTTPS_FORCE',
              1 => 'OFF',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'DomainName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '828A8808-3FC9-418C-893A-5A708CFABB8E',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"828A8808-3FC9-418C-893A-5A708CFABB8E\\"\\n}","errorExample":""},{"type":"xml","example":"<SaveWebHostingCustomDomainConfigResponse>\\r\\n      <RequestId>0e16bb12-14af-4635-b24c-5ac1a9a*****</RequestId>\\r\\n</SaveWebHostingCustomDomainConfigResponse>","errorExample":""}]',
      'title' => '保存域名配置',
      'summary' => '保存域名配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'VerifyWebHostingDomainOwner' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '226e5213-697c-****-b4ff-35a09f8a52de',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'VerifyType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'DNS校验方式。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dnsCheck',
          ),
        ),
      ),
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
                'example' => '74374923-6536-46EB-8639-409384EAE980',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"74374923-6536-46EB-8639-409384EAE980\\"\\n}","errorExample":""},{"type":"xml","example":"<VerifyWebHostingDomainOwnerResponse>\\n    <Data/>\\n    <RequestId>74374923-6536-46EB-8639-409384EAE980</RequestId>\\n</VerifyWebHostingDomainOwnerResponse>","errorExample":""}]',
      'title' => '验证 Web 主机域名所有者',
      'summary' => '验证Web主机域名所有者。',
    ),
    'GetWebHostingDomainVerificationContent' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'formData',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '74374923-6536-46EB-8639-409384EAE980',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Content' => 
                  array (
                    'description' => '域名归属校验记录值。',
                    'type' => 'string',
                    'example' => 'verify_c28a8e24b4bc9fab22d949cebdb1d7ae',
                  ),
                  'Domain' => 
                  array (
                    'description' => '域名。',
                    'type' => 'string',
                    'example' => 'example.com',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"74374923-6536-46EB-8639-409384EAE980\\",\\n  \\"Data\\": {\\n    \\"Content\\": \\"verify_c28a8e24b4bc9fab22d949cebdb1d7ae\\",\\n    \\"Domain\\": \\"example.com\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetWebHostingDomainVerificationContentResponse>\\n    <RequestId>74374923-6536-46EB-8639-409384EAE980</RequestId>\\n    <Data>\\n        <Content>verify_c28a8e24b4bc9fab22d949cebdb1d7ae</Content>\\n        <Domain>example.com</Domain>\\n    </Data>\\n</GetWebHostingDomainVerificationContentResponse>","errorExample":""}]',
      'title' => '获取主机域名验证内容',
      'summary' => '获取域名归属校验内容。',
    ),
    'ListWebHostingCustomDomains' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '93FC5921-2A54-408B-B360-2E5C93488CF4',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '域名状态。
- online：正常运行。
- offline：已停用。
- configuring：配置中。
- configure_failed：配置失败。
- disabling：停用中。
- checking：审核中。
- check_failed：审核失败。',
                      'type' => 'string',
                      'example' => 'online',
                    ),
                    'Domain' => 
                    array (
                      'description' => '域名。',
                      'type' => 'string',
                      'example' => 'www.test.com',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1590470646143',
                    ),
                    'SslProtocol' => 
                    array (
                      'description' => 'HTTPS开启状态。
- on：开启。
- off：关闭。',
                      'type' => 'string',
                      'example' => 'off',
                    ),
                    'ForceRedirectType' => 
                    array (
                      'description' => '可选参数为：
- HTTPS_FORCE: 强制跳转HTTPS。
- OFF：不跳转。',
                      'type' => 'string',
                      'example' => 'HTTPS_FORCE',
                    ),
                    'Description' => 
                    array (
                      'description' => '域名描述。',
                      'type' => 'string',
                      'example' => '测试域名',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1590470646000',
                    ),
                    'Cname' => 
                    array (
                      'description' => '别名记录值。',
                      'type' => 'string',
                      'example' => 'www.test.com.w.kunlungr.com',
                    ),
                    'EnableCors' => 
                    array (
                      'description' => '当前是否开启跨域',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'AccessControlAllowOrigin' => 
                    array (
                      'description' => '跨域规则',
                      'type' => 'string',
                      'example' => 'https://*.example.com, https://*.example.org',
                    ),
                    'AccessOriginControl' => 
                    array (
                      'description' => '当开启跨域检查后，是否检查Origin字段。

- true: 只有在校验通过后才会返回跨域头；
- false: 不检查Origin字段，固定返回配置的跨域头；',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"93FC5921-2A54-408B-B360-2E5C93488CF4\\",\\n  \\"Data\\": [\\n    {\\n      \\"Status\\": \\"online\\",\\n      \\"Domain\\": \\"www.test.com\\",\\n      \\"UpdateTime\\": 1590470646143,\\n      \\"SslProtocol\\": \\"off\\",\\n      \\"ForceRedirectType\\": \\"HTTPS_FORCE\\",\\n      \\"Description\\": \\"测试域名\\",\\n      \\"CreateTime\\": 1590470646000,\\n      \\"Cname\\": \\"www.test.com.w.kunlungr.com\\",\\n      \\"EnableCors\\": true,\\n      \\"AccessControlAllowOrigin\\": \\"https://*.example.com, https://*.example.org\\",\\n      \\"AccessOriginControl\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListWebHostingCustomDomainsResponse>\\n    <RequestId>93FC5921-2A54-408B-B360-2E5C93488CF4</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>\\n        <Status>online</Status>\\n        <EnableCors>true</EnableCors>\\n        <SslProtocol>off</SslProtocol>\\n        <ForceRedirectType>OFF</ForceRedirectType>\\n        <Description>测试域名</Description>\\n        <CreateTime>1590470646000</CreateTime>\\n        <UpdateTime>1590470646143</UpdateTime>\\n        <AccessControlAllowOrigin>https://*.example.com, https://*.example.org</AccessControlAllowOrigin>\\n        <Domain>www.test.com</Domain>\\n        <Cname>www.test.com.w.kunlungr.com</Cname>\\n    </Data>\\n    <Code>success</Code>\\n    <Success>true</Success>\\n</ListWebHostingCustomDomainsResponse>","errorExample":""}]',
      'title' => '查询当前静态网站自定义域名',
      'summary' => '查询当前静态网站绑定的自定义域名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RefreshWebHostingCustomDomainCache' => 
    array (
      'summary' => '用于刷新静态网站托管自定义加速域名 CDN 缓存，让您最新上传的文件立即生效。每小时限制调用三次。',
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a7bb9f',
          ),
        ),
        1 => 
        array (
          'name' => 'DomainName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '静态网站托管自定义域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'E63E7F4F-8538-5B0E-8712-78F92B6DCB9C',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E63E7F4F-8538-5B0E-8712-78F92B6DCB9C\\"\\n}","type":"json"}]',
      'title' => '刷新静态网站CDN缓存',
      'description' => '> 仅商业版支持该功能',
    ),
    'DeleteWebHostingCertificate' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
              'Data' => 
              array (
                'description' => '操作执行结果。
- true：操作成功。
- false：操作失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'D85CAE0D-5B1F-4A56-B776-DEEA2B232E9F',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"D85CAE0D-5B1F-4A56-B776-DEEA2B232E9F\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteWebHostingCertificateResponse>\\r\\n    <RequestId>CEF9831B-A6D2-4485-9CAD-1B8FBC8BC6F7</RequestId>\\r\\n    <HttpStatusCode>200</HttpStatusCode>\\r\\n    <Data>true</Data>\\r\\n    <Code>success</Code>\\r\\n    <Success>true</Success>\\r\\n</DeleteWebHostingCertificateResponse>","errorExample":""}]',
      'title' => '解绑证书',
      'summary' => '解绑证书，关闭HTTPS访问。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AttachWebHostingCertificate' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'www.example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'CertType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '证书类型，可取值为：
- upload：上传证书。
- cas：已有证书。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'upload',
            'enum' => 
            array (
              0 => 'upload',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'CertName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '证书名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'testCert',
          ),
        ),
        4 => 
        array (
          'name' => 'ServerCertificate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '证书内容。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '-----BEGIN CERTIFICATE-----  ...... -----END CERTIFICATE-----',
          ),
        ),
        5 => 
        array (
          'name' => 'PrivateKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '证书私钥。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '-----BEGIN RSA PRIVATE KEY----- ...... -----END RSA PRIVATE KEY-----',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '操作执行结果。
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'CEF9831B-A6D2-4485-9CAD-1B8FBC8B****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"CEF9831B-A6D2-4485-9CAD-1B8FBC8B****\\"\\n}","errorExample":""},{"type":"xml","example":"<AttachWebHostingCertificateResponse>\\n    <Data>true</Data>\\n    <RequestId>CEF9831B-A6D2-4485-9CAD-1B8FBC8B****</RequestId>\\n</AttachWebHostingCertificateResponse>","errorExample":""}]',
      'title' => 'AttachWebHostingCertificate',
      'summary' => '调用AttachWebHostingCertificate绑定证书。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetWebHostingCertificateDetail' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a7bb9f',
          ),
        ),
        1 => 
        array (
          'name' => 'CustomDomain',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'D85CAE0D-5B1F-4A56-B776-DEEA2B232E9F',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CertLife' => 
                  array (
                    'description' => '证书有效期。',
                    'type' => 'string',
                    'example' => '1 years',
                  ),
                  'CertType' => 
                  array (
                    'description' => '证书类型。
- upload：上传证书。
- cas：云盾证书。',
                    'type' => 'string',
                    'example' => 'upload',
                  ),
                  'CertDomainName' => 
                  array (
                    'description' => '域名。',
                    'type' => 'string',
                    'example' => 'www.example.com',
                  ),
                  'ServerCertificateStatus' => 
                  array (
                    'description' => '域名的证书绑定状态。
- off：无证书。
- on：已绑定证书。',
                    'type' => 'string',
                    'example' => 'on',
                  ),
                  'CertName' => 
                  array (
                    'description' => '证书名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'CertExpiredTime' => 
                  array (
                    'description' => '证书过期时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1621252800000',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D85CAE0D-5B1F-4A56-B776-DEEA2B232E9F\\",\\n  \\"Data\\": {\\n    \\"CertLife\\": \\"1 years\\",\\n    \\"CertType\\": \\"upload\\",\\n    \\"CertDomainName\\": \\"www.example.com\\",\\n    \\"ServerCertificateStatus\\": \\"on\\",\\n    \\"CertName\\": \\"test\\",\\n    \\"CertExpiredTime\\": 1621252800000\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetWebHostingCertificateDetailResponse>\\n    <RequestId>D85CAE0D-5B1F-4A56-B776-DEEA2B232E9F</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>\\n        <CertLife>1 years</CertLife>\\n        <CertExpiredTime>1621252800000</CertExpiredTime>\\n        <CertDomainName>www.example.com</CertDomainName>\\n        <CertType>upload</CertType>\\n        <CertName>test</CertName>\\n        <ServerCertificateStatus>on</ServerCertificateStatus>\\n    </Data>\\n    <Code>success</Code>\\n    <Success>true</Success>\\n</GetWebHostingCertificateDetailResponse>","errorExample":""}]',
      'title' => '查询自定义域名关联的证书详情',
      'summary' => '查询自定义域名关联的证书详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveWebHostingCustomDomainCorsConfig' => 
    array (
      'summary' => '设置静态网站的跨域配置。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '226e5213-697c-4a52-b4ff-35a09f8*****',
          ),
        ),
        1 => 
        array (
          'name' => 'DomainName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => true,
            'example' => 'www.example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'EnableCors',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设置是否开启跨域功能，取值为：

- true：开启跨域功能。
- false：不开启跨域功能。',
            'type' => 'boolean',
            'required' => true,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'AccessControlAllowOrigin',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设置跨域校验规则，默认为“*”，跨域校验规则为：
- 设置为“*”，不论用户请求里面是否携带“Origin”参数，也不论携带的“Origin”参数为何值，都固定返回“Access-Control-Allow-Origin:\\*”。
- 跨域资源共享的响应头值设置了单个或者多个值（多个值之间用“,”分隔）。
    - 如果用户请求头里携带的“Origin”参数值与被设置的任意一个值精确匹配，就会响应对应的跨域头。
    - 如果都没有精确匹配上，则不响应跨域头。 
- 设置为通配符域名，则会校验请求头中Origin值是否能匹配上',
            'type' => 'string',
            'required' => false,
            'example' => 'https://*.example.com, https://*.example.org',
          ),
        ),
        4 => 
        array (
          'name' => 'AccessOriginControl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当开启跨域检查后，是否检查Origin字段。
- true: 只有在校验通过后才会返回跨域头；
- false: 不检查Origin字段，固定返回配置的跨域头；

可选值，默认为true。只有在开启跨域功能后该字段才有作用。',
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
              'Code' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求返回状态。
- success：成功。
- failed：失败。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'SpaceNotExist',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP请求返回的响应状态码，200表示请求成功。',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '6E2E1770-E9C7-52E9-BF2C-94A0BACFADBE"',
              ),
              'Success' => 
              array (
                'description' => '请求返回状态。
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '操作执行结果。
- true：操作成功。
- false：操作失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"Message\\": \\"SpaceNotExist\\",\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"6E2E1770-E9C7-52E9-BF2C-94A0BACFADBE\\\\\\"\\",\\n  \\"Success\\": true,\\n  \\"Data\\": true\\n}","errorExample":""},{"type":"xml","example":"<SaveWebHostingCustomDomainCorsConfig>\\r\\n\\t<RequestId>6E2E1770-E9C7-52E9-BF2C-94A0BACFADBE</RequestId>\\r\\n\\t<Data>true</Data>\\r\\n\\t<Success>true</Success>\\r\\n</SaveWebHostingCustomDomainCorsConfig>","errorExample":""}]',
      'title' => '设置静态网站的跨域配置',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetWebHostingConfig' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '828A8808-3FC9-418C-893A-5A708CFABB8E',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'SpaceId' => 
                  array (
                    'description' => '服务空间ID。',
                    'type' => 'string',
                    'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
                  ),
                  'AllowedIps' => 
                  array (
                    'description' => '静态网站托管测试域名允许访问IP的白名单，不在白名单中的访问可能会被限制。',
                    'type' => 'string',
                    'example' => '42.120.72.0/24',
                  ),
                  'ErrorPath' => 
                  array (
                    'description' => '404错误路径',
                    'type' => 'string',
                    'example' => 'error.html',
                  ),
                  'DefaultDomain' => 
                  array (
                    'description' => '默认域名，仅供测试使用，请求速度会受到限制。如果您需要对外正式提供网站服务，请绑定您已备案的自定义域名。',
                    'type' => 'string',
                    'example' => 'static-0e16bb12-14af-4635-b24c-5ac1a9a*****.bspapp.com',
                  ),
                  'IndexPath' => 
                  array (
                    'description' => '首页路径。',
                    'type' => 'string',
                    'example' => 'index.html',
                  ),
                  'ErrorHttpStatus' => 
                  array (
                    'description' => '当配置了ErrorPath之后，该页面对应的Http状态码，可选值404和200。当该字段不存在时，实际值为404。',
                    'type' => 'string',
                    'example' => '200',
                    'enum' => 
                    array (
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"828A8808-3FC9-418C-893A-5A708CFABB8E\\",\\n  \\"Data\\": {\\n    \\"SpaceId\\": \\"0e16bb12-14af-4635-b24c-5ac1a9a*****\\",\\n    \\"AllowedIps\\": \\"42.120.72.0/24\\",\\n    \\"ErrorPath\\": \\"error.html\\",\\n    \\"DefaultDomain\\": \\"static-0e16bb12-14af-4635-b24c-5ac1a9a*****.bspapp.com\\",\\n    \\"IndexPath\\": \\"index.html\\",\\n    \\"ErrorHttpStatus\\": \\"200\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetWebHostingConfigResponse>\\n    <Code>success</Code>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Message>SpaceNotExist</Message>\\n    <RequestId>828A8808-3FC9-418C-893A-5A708CFABB8E</RequestId>\\n    <Success>true</Success>\\n    <Data>\\n        <SpaceId>0e16bb12-14af-4635-b24c-5ac1a9a*****</SpaceId>\\n        <AllowedIps>42.120.72.0/24</AllowedIps>\\n        <ErrorPath>error.html</ErrorPath>\\n        <DefaultDomain>static-0e16bb12-14af-4635-b24c-5ac1a9a*****.bspapp.com</DefaultDomain>\\n        <IndexPath>index.html</IndexPath>\\n        <HistoryModePath>/</HistoryModePath>\\n    </Data>\\n</GetWebHostingConfigResponse>","errorExample":""}]',
      'title' => '查询静态网站配置',
      'summary' => '查询静态网站配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyWebHostingConfig' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
        1 => 
        array (
          'name' => 'IndexPath',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '首页路径。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'index.html',
          ),
        ),
        2 => 
        array (
          'name' => 'ErrorPath',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '404错误路径。',
            'type' => 'string',
            'required' => false,
            'example' => 'error.html',
          ),
        ),
        3 => 
        array (
          'name' => 'AllowedIps',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '静态网站托管测试域名允许访问IP的白名单，不在白名单中的访问可能会被限制，仅支持配置ipv4，可以配置IP或者IP网段，掩码位数取值范围24-31，最多可同时配置三个，多个之间用逗号隔开。',
            'type' => 'string',
            'required' => false,
            'example' => '42.120.72.0/24',
          ),
        ),
        4 => 
        array (
          'name' => 'ErrorHttpStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当配置了ErrorPath之后，该页面对应的Http状态码，可选值404和200，默认为404。',
            'type' => 'string',
            'required' => false,
            'example' => '200',
            'enum' => 
            array (
              0 => '200',
              1 => '404',
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
              'Data' => 
              array (
                'description' => '操作执行结果。
- true：成功。
- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '074C8CF9-E7F8-436D-A546-4E5876D0F800',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"074C8CF9-E7F8-436D-A546-4E5876D0F800\\"\\n}","errorExample":""},{"type":"xml","example":"<ModifyWebHostingConfigResponse>\\r\\n    <RequestId>CEF9831B-A6D2-4485-9CAD-1B8FBC8BC6F7</RequestId>\\r\\n    <HttpStatusCode>200</HttpStatusCode>\\r\\n    <Data>true</Data>\\r\\n    <Code>success</Code>\\r\\n    <Success>true</Success>\\r\\n</ModifyWebHostingConfigResponse>","errorExample":""}]',
      'title' => '更新静态网站配置',
      'summary' => '更新静态网站配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableExtension' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExtensionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '扩展能力唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ext-5d53a4fb1c9d446e2075a2cc',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回内容。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F655A8D5-B967-440B-8683-DAD6FF8DE990</RequestId>","errorExample":""}]',
      'title' => '开通扩展能力',
      'summary' => '开通扩展能力。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateServicePolicy' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务名称。可选值：
 - db
 - file',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'db',
            'enum' => 
            array (
              0 => 'db',
              1 => 'file',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'Policy',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '权限规则，当**PolicyName**为**EXTENDED**时必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '{\\".write\\":false,\\".read\\":true}',
          ),
        ),
        3 => 
        array (
          'name' => 'CollectionName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集合名称，当**ServerName**为**db**时该参数必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'PolicyName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '策略名称，当**ServerName**为**db**时该参数必填。可选值：
- PUBLICREAD: 所有用户可读，仅创建者及管理员可写。适用场景：如用户评论、公开信息等。
- PRIVATE: 仅创建者及管理员可读写。适用场景：商品信息等。
- ADMINWRITEONLY: 所有用户可读，仅管理员可写。适用场景：商品信息等。
- ADMINREADWRITEONLY: 仅管理员可读写。适用场景：后台数据流水、日志等。
- EXTENDED: 自定义安全规则。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'EXTENDED',
            'enum' => 
            array (
              0 => 'PUBLICREAD',
              1 => 'PRIVATE',
              2 => 'ADMINWRITEONLY',
              3 => 'ADMINREADWRITEONLY',
              4 => 'EXTENDED',
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
              'SpaceId' => 
              array (
                'description' => '服务空间ID。',
                'type' => 'string',
                'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8932780D-9AF2-4E50-844C-13A1250918EE',
              ),
              'Policy' => 
              array (
                'description' => '策略。',
                'type' => 'string',
                'example' => '{\\".write\\":false,\\".read\\":true}',
              ),
              'PolicyName' => 
              array (
                'description' => '策略名称。',
                'type' => 'string',
                'example' => 'EXTENDED',
              ),
              'ServiceName' => 
              array (
                'description' => '服务名称。',
                'type' => 'string',
                'example' => 'db',
              ),
              'CollectionName' => 
              array (
                'description' => '集合名称。',
                'type' => 'string',
                'example' => 'test',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SpaceId\\": \\"0e16bb12-14af-****-b24c-5ac1a9a7bb9f\\",\\n  \\"RequestId\\": \\"8932780D-9AF2-4E50-844C-13A1250918EE\\",\\n  \\"Policy\\": \\"{\\\\\\\\\\\\\\".write\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\".read\\\\\\\\\\\\\\":true}\\",\\n  \\"PolicyName\\": \\"EXTENDED\\",\\n  \\"ServiceName\\": \\"db\\",\\n  \\"CollectionName\\": \\"test\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateServicePolicyResponse>\\n    <Policy>{\\".write\\":false,\\".read\\":true}</Policy>\\n    <RequestId>3E1EB9A8-28F8-4820-8ABE-2E592010533E</RequestId>\\n    <ServiceName>db</ServiceName>\\n    <CollectionName>test</CollectionName>\\n    <PolicyName>EXTENDED</PolicyName>\\n    <SpaceId>826061c4-5095-4550-8b74-3bcd9af*****</SpaceId>\\n</UpdateServicePolicyResponse>","errorExample":""}]',
      'title' => '更新权限',
      'summary' => '更新权限。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OpenService' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '云函数所属的服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '226e5213-697c-4a52-b4ff-xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Serverless产品。产品种类为云函数、云存储、静态网站托管。可选值为CLOUD\\_FUNCTION、CLOUD\\_STORAGE、WEB\\_HOSTING',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'CLOUD_FUNCTION',
            'enum' => 
            array (
              0 => 'CLOUD_STORAGE',
              1 => 'WEB_HOSTING',
              2 => 'CLOUD_FUNCTION',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E63E7F4F-8538-5B0E-8712-78F92B6DCB9C',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E63E7F4F-8538-5B0E-8712-78F92B6DCB9C\\"\\n}","errorExample":""},{"type":"xml","example":"<OpenServiceResponse>\\n    <RequestId>E63E7F4F-8538-5B0E-8712-78F92B6DCB9C</RequestId>\\n</OpenServiceResponse>","errorExample":""}]',
      'title' => '开通服务',
      'summary' => '开通Serverless产品。',
    ),
    'OpenWebHostingService' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回数据。
- true：操作成功。
- false：操作失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '1819B1E4-3540-47ED-8E5A-A252C926D81D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"1819B1E4-3540-47ED-8E5A-A252C926D81D\\"\\n}","errorExample":""},{"type":"xml","example":"<OpenWebHostingServiceResponse>\\n    <RequestId>1819B1E4-3540-47ED-8E5A-A252C926D81D</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>true</Data>\\n    <Code>success</Code>\\n    <Success>true</Success>\\n</OpenWebHostingServiceResponse>","errorExample":""}]',
      'title' => '开通静态网站托管功能',
      'summary' => '开通静态网站托管功能。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResetServerSecret' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '826061c4-5095-4550-8b74-3bcd9af*****',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'EA770971-A4A0-4555-9E00-C94A2194E150',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EA770971-A4A0-4555-9E00-C94A2194E150\\"\\n}","errorExample":""},{"type":"xml","example":"<ResetServerSecretResponse>\\r\\n\\t  <RequestId>C293BB03-B6AD-46C2-80D1-19C8FB573916</RequestId>\\r\\n</ResetServerSecretResponse>","errorExample":""}]',
      'title' => '重置服务端密钥',
      'summary' => '接口重置服务端密钥。',
      'description' => '重置成功后，您可以调用[DescribeSpaceClientConfig](https://help.aliyun.com/document_detail/173420.html)接口来查询新生成的服务端私钥。新的密钥对会立即生效，旧的密钥对将会在10分钟内失效。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveAppAuthToken' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '368ef42a-763f-0000-acc2-8aa9564c****',
          ),
        ),
        1 => 
        array (
          'name' => 'IsvAppId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'isv的appId。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021002110693xxx',
          ),
        ),
        2 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '小程序appId。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2021002198669xxx',
          ),
        ),
        3 => 
        array (
          'name' => 'AppAuthToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '小程序授权Token。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '202111BB576ef688a3564875a75a9babd6XXXXXX',
          ),
        ),
      ),
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
                'example' => 'F340DF8D-7125-49B7-AC48-7F5C8DB382CB',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F340DF8D-7125-49B7-AC48-7F5C8DB382CB\\"\\n}","errorExample":""},{"type":"xml","example":"<SaveAppAuthTokenResponse/>","errorExample":""}]',
      'title' => '保存应用验证令牌',
      'summary' => '授权isv模式访问。',
    ),
    'DescribeFCOpenStatus' => 
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
      ),
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
                'description' => '开通状态。',
                'type' => 'string',
                'example' => 'Opened',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C293BB03-B6AD-46C2-80D1-xxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"Opened\\",\\n  \\"RequestId\\": \\"C293BB03-B6AD-46C2-80D1-xxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeFCOpenStatusResponse>\\n    <Status>Opened</Status>\\n    <RequestId>C293BB03-B6AD-46C2-80D1-xxxx</RequestId>\\n</DescribeFCOpenStatusResponse>","errorExample":""}]',
      'title' => '获取 FC 开启状态',
      'summary' => '查看是否已开通阿里云函数计算服务。',
    ),
    'DescribeServicePolicy' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务名称。可选值：
 - db
 - file',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'db',
            'enum' => 
            array (
              0 => 'db',
              1 => 'file',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'CollectionName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '集合名称。该参数非必填，且仅在**serviceName**为**db**时有意义。',
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
              'SpaceId' => 
              array (
                'description' => '服务空间ID。',
                'type' => 'string',
                'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '15F08A3A-DDBC-4199-93CA-343419E81235',
              ),
              'Policy' => 
              array (
                'description' => '权限规则。',
                'type' => 'string',
                'example' => '{\\".write\\":false,\\".read\\":true}',
              ),
              'PolicyName' => 
              array (
                'description' => '权限模式，可能取值为。
- PUBLICREAD: 所有用户可读，仅创建者及管理员可写。
- PRIVATE: 仅创建者及管理员可读写。
- ADMINWRITEONLY: 所有用户可读，仅管理员可写。
- ADMINREADWRITEONLY: 仅管理员可读写。
- EXTENDED: 自定义安全规则。',
                'type' => 'string',
                'example' => 'ADMINWRITEONLY',
              ),
              'ServiceName' => 
              array (
                'description' => '服务名称。',
                'type' => 'string',
                'example' => 'db',
              ),
              'CollectionName' => 
              array (
                'description' => '集合名称。',
                'type' => 'string',
                'example' => 'test',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SpaceId\\": \\"0e16bb12-14af-****-b24c-5ac1a9a7bb9f\\",\\n  \\"RequestId\\": \\"15F08A3A-DDBC-4199-93CA-343419E81235\\",\\n  \\"Policy\\": \\"{\\\\\\\\\\\\\\".write\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\".read\\\\\\\\\\\\\\":true}\\",\\n  \\"PolicyName\\": \\"ADMINWRITEONLY\\",\\n  \\"ServiceName\\": \\"db\\",\\n  \\"CollectionName\\": \\"test\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeServicePolicyResponse>\\n    <Policy>{\\".write\\":false,\\".read\\":true}</Policy>\\n    <RequestId>42B1D550-53CA-4DFC-A081-94D8DF00B81B</RequestId>\\n    <ServiceName>db</ServiceName>\\n    <CollectionName>test</CollectionName>\\n    <PolicyName>ADMINWRITEONLY</PolicyName>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <SpaceId>826061c4-5095-4550-8b74-3bcd9af*****</SpaceId>\\n    <Success>true</Success>\\n</DescribeServicePolicyResponse>","errorExample":""}]',
      'title' => '查询权限规则',
      'summary' => '查询权限规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListExtensions' => 
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
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码，默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页大小，默认值为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'docRequired' => false,
            'maximum' => '100',
            'minimum' => '1',
            'default' => '10',
          ),
        ),
      ),
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
                'example' => 'DD0F8BC9-516F-4AEF-8D95-D290C2296D78',
              ),
              'PageNumber' => 
              array (
                'description' => '页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Extensions' => 
              array (
                'description' => '扩展能力信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ExtensionDocumentationLink' => 
                    array (
                      'description' => '扩展能力文档链接。',
                      'type' => 'string',
                      'example' => 'https://help.aliyun.com/document_detail/137586.html',
                    ),
                    'ExtensionId' => 
                    array (
                      'description' => '扩展能力唯一标识。',
                      'type' => 'string',
                      'example' => 'ext-5d53a4fb1c9d446e2075a2cc',
                    ),
                    'ExtensionDesc' => 
                    array (
                      'description' => '扩展能力描述。',
                      'type' => 'string',
                      'example' => '支持开发者在云函数中快速调用小程序生态的业务API。已支持支付宝特色能力，高德、钉钉相关能力敬请期待。',
                    ),
                    'ExtensionName' => 
                    array (
                      'description' => '扩展能力名称。',
                      'type' => 'string',
                      'example' => '云调用',
                    ),
                    'Enabled' => 
                    array (
                      'description' => '是否开启。',
                      'type' => 'string',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DD0F8BC9-516F-4AEF-8D95-D290C2296D78\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Extensions\\": [\\n    {\\n      \\"ExtensionDocumentationLink\\": \\"https://help.aliyun.com/document_detail/137586.html\\",\\n      \\"ExtensionId\\": \\"ext-5d53a4fb1c9d446e2075a2cc\\",\\n      \\"ExtensionDesc\\": \\"支持开发者在云函数中快速调用小程序生态的业务API。已支持支付宝特色能力，高德、钉钉相关能力敬请期待。\\",\\n      \\"Enabled\\": \\"true\\",\\n      \\"ExtensionName\\": \\"云调用\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<Extensions>\\n    <Enabled>true</Enabled>\\n    <ExtensionDesc>支持开发者在云函数中快速调用小程序生态的业务API。已支持支付宝特色能力，高德、钉钉相关能力敬请期待。</ExtensionDesc>\\n    <ExtensionDocumentationLink>https://help.aliyun.com/document_detail/137586.html</ExtensionDocumentationLink>\\n    <ExtensionName>云调用</ExtensionName>\\n    <ExtensionId>ext-5d53a4fb1c9d446e2075a2cc</ExtensionId>\\n</Extensions>\\n<PageNumber>1</PageNumber>\\n<HttpStatusCode>200</HttpStatusCode>\\n<TotalCount>1</TotalCount>\\n<PageSize>10</PageSize>\\n<RequestId>DD0F8BC9-516F-4AEF-8D95-D290C2296D78</RequestId>\\n<Success>true</Success>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '查询扩展能力',
      'summary' => '查询扩展能力。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryServiceStatus' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '226e5213-697c-4a52-b4ff-xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Serverless产品。产品种类为云函数、云存储、静态网站托管。可选值为CLOUD_FUNCTION、CLOUD_STORAGE、WEB_HOSTING',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'CLOUD_FUNCTION',
            'enum' => 
            array (
              0 => 'CLOUD_FUNCTION',
              1 => 'CLOUD_STORAGE',
              2 => 'WEB_HOSTING',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E63E7F4F-8538-5B0E-8712-78F92B6DCB9C',
              ),
              'ServiceStatus' => 
              array (
                'description' => 'Serverless产品服务状态。返回值为UNUSED、OPENING、IN_SERVICE。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'IN_SERVICE' => 'IN_SERVICE',
                  'UNUSED' => 'UNUSED',
                  'OPENING' => 'OPENING',
                ),
                'example' => 'OPENING',
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
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'You are not authorized to access this space.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E63E7F4F-8538-5B0E-8712-78F92B6DCB9C\\",\\n  \\"ServiceStatus\\": \\"OPENING\\"\\n}","type":"json"}]',
      'title' => '查询服务状态',
      'summary' => '查询Serverless产品服务状态。',
    ),
    'GetWebHostingStatus' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'D8F7FDDC-4EF3-44B9-9452-CFD7A081FB85',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '功能开通状态，可能取值如下：
- UNUSED：未开通。
- OPENING：开通中。
- IN_SERVICE：已开通。',
                    'type' => 'string',
                    'example' => 'OPENING',
                  ),
                  'SpaceId' => 
                  array (
                    'description' => '服务空间ID。',
                    'type' => 'string',
                    'example' => '0e16bb12-14af-4635-b24c-5ac1a9a*****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8F7FDDC-4EF3-44B9-9452-CFD7A081FB85\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"OPENING\\",\\n    \\"SpaceId\\": \\"0e16bb12-14af-4635-b24c-5ac1a9a*****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetWebHostingStatusResponse>\\n    <RequestId>D8F7FDDC-4EF3-44B9-9452-CFD7A081FB85</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>\\n        <Status>OPENING</Status>\\n        <SpaceId>0e16bb12-14af-4635-b24c-5ac1a9a*****</SpaceId>\\n    </Data>\\n    <Code>success</Code>\\n    <Success>true</Success>\\n</GetWebHostingStatusResponse>","errorExample":""}]',
      'title' => '查询静态网站托管功能开通状态',
      'summary' => '查询静态网站托管功能开通状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckMpServerlessRoleExists' => 
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
          'name' => 'RoleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统规定参数。取值：**AliyunServiceRoleForMPServerless**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AliyunServiceRoleForMPServerless',
          ),
        ),
      ),
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
                'example' => 'F340DF8D-7125-49B7-AC48-7F5C8DB382CB',
              ),
              'Exists' => 
              array (
                'description' => '是否有相应权限。
- true：有权限。
- false：无权限。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F340DF8D-7125-49B7-AC48-7F5C8DB382CB\\",\\n  \\"Exists\\": true\\n}","errorExample":""},{"type":"xml","example":"<CheckMpServerlessRoleExistsResponse>\\n    <RequestId>F340DF8D-7125-49B7-AC48-7F5C8DB382CB</RequestId>\\n    <Exists>true</Exists>\\n</CheckMpServerlessRoleExistsResponse>","errorExample":""}]',
      'title' => '检查 Mp 角色是否存在',
      'summary' => '检查阿里云用户是否具有权限。',
    ),
    'AddDingtalkOpenPlatformConfig' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '钉钉小程序ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dingoa7pqicyk3x9t*****',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'AppSecret',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '钉钉小程序密钥。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1r0ElNPFqLI6qgY08*******************************9TIK3RN_5fk9SEMO',
            'maxLength' => 200,
          ),
        ),
        2 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
      ),
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
                'example' => '44DF7A95-603F-4651-9298-BE1850BEB53F',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"44DF7A95-603F-4651-9298-BE1850BEB53F\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>44DF7A95-603F-4651-9298-BE1850BEB53F</RequestId>","errorExample":""}]',
      'title' => '添加钉钉开放平台配置',
      'summary' => '添加钉钉开放平台配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveAntOpenPlatformConfig' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
        1 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '小程序ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '201909116717****',
            'maxLength' => 64,
          ),
        ),
        2 => 
        array (
          'name' => 'PublicKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '公钥。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCA',
          ),
        ),
        3 => 
        array (
          'name' => 'PrivateKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '私钥。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSk',
          ),
        ),
        4 => 
        array (
          'name' => 'SignMode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '加签方式，可选值如下：
- PUBLIC_KEY：公钥。
- CERT：公钥证书。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'CERT',
            'enum' => 
            array (
              0 => 'PUBLIC_KEY',
              1 => 'CERT',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'AppCert',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '应用公钥证书。',
            'type' => 'string',
            'required' => false,
            'example' => '-----BEGIN CERTIFICATE----- MIIEwTCCA6mgAwIBAgIQICAJGbUNoqdPr25qpPU7+ -----END CERTIFICATE-----',
          ),
        ),
        6 => 
        array (
          'name' => 'PublicCert',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '支付宝公钥证书。',
            'type' => 'string',
            'required' => false,
            'example' => '-----BEGIN CERTIFICATE----- MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQ -----END CERTIFICATE-----',
          ),
        ),
        7 => 
        array (
          'name' => 'RootCert',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '支付宝根证书。',
            'type' => 'string',
            'required' => false,
            'example' => '-----BEGIN CERTIFICATE----- MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQ -----END CERTIFICATE-----',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回内容。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2540E86F-2CD4-44AC-A7AB-59CAF40C225D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2540E86F-2CD4-44AC-A7AB-59CAF40C225D\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>2540E86F-2CD4-44AC-A7AB-59CAF40C225D</RequestId>","errorExample":""}]',
      'title' => '保存支付宝开放平台配置',
      'summary' => '保存支付宝开放平台配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SaveWechatOpenPlatformConfig' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
        1 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '微信小程序ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
            'maxLength' => 64,
          ),
        ),
        2 => 
        array (
          'name' => 'AppSecret',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '微信小程序密钥。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '9w0BAQEFAASCBKgwggSkAgEAAoI',
            'maxLength' => 200,
          ),
        ),
      ),
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
                'example' => '44DF7A95-603F-4651-9298-BE1850BEB53F',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"44DF7A95-603F-4651-9298-BE1850BEB53F\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>44DF7A95-603F-4651-9298-BE1850BEB53F</RequestId>","errorExample":""}]',
      'title' => '保存微信开放平台配置',
      'summary' => '保存微信开放平台配置。',
    ),
    'DeleteAntOpenPlatformConfig' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
        1 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '小程序ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '201909116717****',
          ),
        ),
      ),
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
                'example' => '2540E86F-2CD4-44AC-A7AB-59CAF40C225D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2540E86F-2CD4-44AC-A7AB-59CAF40C225D\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>2540E86F-2CD4-44AC-A7AB-59CAF40C225D</RequestId>","errorExample":""}]',
      'title' => '删除支付宝开放平台配置',
      'summary' => '删除支付宝开放平台配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDingtalkOpenPlatformConfig' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '钉钉小程序ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dingoa7pqicyk3x9t*****',
          ),
        ),
        1 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
      ),
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
                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F655A8D5-B967-440B-8683-DAD6FF8DE990</RequestId>","errorExample":""}]',
      'title' => '删除钉钉开放平台配置',
      'summary' => '删除钉钉开放平台配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteWechatOpenPlatformConfig' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
        1 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '微信小程序ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '819BE656-D2E0-4858-8B21-B2E477085AAF',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"819BE656-D2E0-4858-8B21-B2E477085AAF\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>819BE656-D2E0-4858-8B21-B2E477085AAF</RequestId>","errorExample":""}]',
      'title' => '删除微信开放平台配置',
      'summary' => '删除微信开放平台配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateDingtalkOpenPlatformConfig' => 
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '钉钉小程序ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dingoa7pqicyk3x9t*****',
            'maxLength' => 128,
          ),
        ),
        1 => 
        array (
          'name' => 'AppSecret',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '钉钉小程序密钥。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1r0ElNPFqLI6qgY08*******************************9TIK3RN_5fk9SEMO',
            'maxLength' => 400,
          ),
        ),
        2 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
      ),
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
                'example' => 'F655A8D5-B967-440B-8683-DAD6FF8DE990',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F655A8D5-B967-440B-8683-DAD6FF8DE990\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F655A8D5-B967-440B-8683-DAD6FF8DE990</RequestId>","errorExample":""}]',
      'title' => '更新钉钉开放平台配置',
      'summary' => '更新钉钉开放平台配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeSpaceClientConfig' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '226e5213-697c-4a52-b4ff-35a09f8*****',
          ),
        ),
        1 => 
        array (
          'name' => 'Detail',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否返回详细信息，默认为false。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
            'example' => '211975XXXX',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'ApiKey' => 
              array (
                'description' => '客户端密钥。',
                'type' => 'string',
                'example' => '0a4gJT0faV*****D4lgQmw==',
              ),
              'SpaceId' => 
              array (
                'description' => '服务空间ID。',
                'type' => 'string',
                'example' => '226e5213-697c-4a52-b4ff-35a09f8*****',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'EA770971-A4A0-4555-9E00-C94A2194E150',
              ),
              'PrivateKey' => 
              array (
                'description' => '服务端私钥，仅当Detail为True时才返回该信息。',
                'type' => 'string',
                'example' => '-----BEGIN PRIVATE KEY-----\\nMIIEvgIBADANBgkqhki******G9w0BAQE7V0sQaj\\n-----END PRIVATE KEY-----',
              ),
              'Endpoint' => 
              array (
                'description' => '服务网关Endpoint。',
                'type' => 'string',
                'example' => '226e5213-697c-4a52-b4ff-35a09f8*****',
              ),
              'FileUploadEndpoint' => 
              array (
                'description' => '文件上传Endpoint。',
                'type' => 'string',
                'example' => 'cocdsfmb-12266946259*****-file.oss-cn-zhangjiakou.aliyuncs.com',
              ),
              'Name' => 
              array (
                'description' => '服务空间名称。',
                'type' => 'string',
                'example' => 'myspace',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"ApiKey\\": \\"0a4gJT0faV*****D4lgQmw==\\",\\n  \\"SpaceId\\": \\"226e5213-697c-4a52-b4ff-35a09f8*****\\",\\n  \\"RequestId\\": \\"EA770971-A4A0-4555-9E00-C94A2194E150\\",\\n  \\"PrivateKey\\": \\"-----BEGIN PRIVATE KEY-----\\\\\\\\nMIIEvgIBADANBgkqhki******G9w0BAQE7V0sQaj\\\\\\\\n-----END PRIVATE KEY-----\\",\\n  \\"Endpoint\\": \\"226e5213-697c-4a52-b4ff-35a09f8*****\\",\\n  \\"FileUploadEndpoint\\": \\"cocdsfmb-12266946259*****-file.oss-cn-zhangjiakou.aliyuncs.com\\",\\n  \\"Name\\": \\"myspace\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeSpaceClientConfigResponse>\\n    <ApiKey>0a4gJT0faV*****D4lgQmw==</ApiKey>\\n    <PrivateKey>-----BEGIN PRIVATE KEY-----\\nMIIEvgIBADANBgkqhki******G9w0BAQE7V0sQaj\\n-----END PRIVATE KEY-----</PrivateKey>\\n    <RequestId>EA770971-A4A0-4555-9E00-C94A2194E150</RequestId>\\n    <SpaceId>226e5213-697c-4a52-b4ff-35a09f8*****</SpaceId>\\n    <Name>myspace</Name>\\n    <Endpoint>https://api.bspapp.com</Endpoint>\\n    <FileUploadEndpoint>cocdsfmb-12266946259*****-file.oss-cn-zhangjiakou.aliyuncs.com</FileUploadEndpoint>\\n</DescribeSpaceClientConfigResponse>","errorExample":""}]',
      'title' => '查询服务空间配置详情',
      'summary' => '查询服务空间详情。',
    ),
    'ListOpenPlatformConfig' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
        1 => 
        array (
          'name' => 'Platform',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '平台。可选值：
 - Alipay
 - Wechat',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Alipay',
            'enum' => 
            array (
              0 => 'wechat',
              1 => 'Wechat',
              2 => 'alipay',
              3 => 'Alipay',
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
            'description' => '返回内容。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2540E86F-2CD4-44AC-A7AB-59CAF40C225D',
              ),
              'SecretList' => 
              array (
                'description' => '密钥列表。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SpaceId' => 
                    array (
                      'description' => '服务空间ID。',
                      'type' => 'string',
                      'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
                    ),
                    'AppSecret' => 
                    array (
                      'description' => '应用密钥。',
                      'type' => 'string',
                      'example' => '1r0ElNPFqLI6qgY08*******************************9TIK3RN_5fk9SEMO',
                    ),
                    'PublicCert' => 
                    array (
                      'description' => '支付宝公钥证书。',
                      'type' => 'string',
                      'example' => '-----BEGIN CERTIFICATE----- MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQ -----END CERTIFICATE-----',
                    ),
                    'AppCert' => 
                    array (
                      'description' => '应用公钥证书。',
                      'type' => 'string',
                      'example' => '-----BEGIN CERTIFICATE----- MIIEwTCCA6mgAwIBAgIQICAJGbUNoqdPr25qpPU7+ -----END CERTIFICATE-----',
                    ),
                    'PrivateKey' => 
                    array (
                      'description' => '私钥。',
                      'type' => 'string',
                      'example' => 'MIIEvgIBADANBgkqhkiG9w0BAQEFAAS',
                    ),
                    'AppId' => 
                    array (
                      'description' => '小程序ID。',
                      'type' => 'string',
                      'example' => '201909116717****',
                    ),
                    'RootCert' => 
                    array (
                      'description' => '支付宝根证书。',
                      'type' => 'string',
                      'example' => '-----BEGIN CERTIFICATE----- MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQ -----END CERTIFICATE-----',
                    ),
                    'PublicKey' => 
                    array (
                      'description' => '公钥。',
                      'type' => 'string',
                      'example' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ',
                    ),
                    'Platform' => 
                    array (
                      'description' => '平台。',
                      'type' => 'string',
                      'example' => 'Alipay',
                    ),
                    'SignMode' => 
                    array (
                      'description' => '加签方式，可选值如下：
- PUBLIC_KEY：公钥。
- CERT：公钥证书。',
                      'type' => 'string',
                      'example' => 'CERT',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2540E86F-2CD4-44AC-A7AB-59CAF40C225D\\",\\n  \\"SecretList\\": [\\n    {\\n      \\"SpaceId\\": \\"0e16bb12-14af-****-b24c-5ac1a9a7bb9f\\",\\n      \\"AppSecret\\": \\"1r0ElNPFqLI6qgY08*******************************9TIK3RN_5fk9SEMO\\",\\n      \\"PublicCert\\": \\"-----BEGIN CERTIFICATE----- MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQ -----END CERTIFICATE-----\\",\\n      \\"AppCert\\": \\"-----BEGIN CERTIFICATE----- MIIEwTCCA6mgAwIBAgIQICAJGbUNoqdPr25qpPU7+ -----END CERTIFICATE-----\\",\\n      \\"PrivateKey\\": \\"MIIEvgIBADANBgkqhkiG9w0BAQEFAAS\\",\\n      \\"AppId\\": \\"201909116717****\\",\\n      \\"RootCert\\": \\"-----BEGIN CERTIFICATE----- MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQ -----END CERTIFICATE-----\\",\\n      \\"PublicKey\\": \\"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ\\",\\n      \\"Platform\\": \\"Alipay\\",\\n      \\"SignMode\\": \\"CERT\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListOpenPlatformConfigResponse>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>2540E86F-2CD4-44AC-A7AB-59CAF40C225D</RequestId>\\n    <Success>true</Success>\\n    <SecretList>\\n        <SignMode>PUBLIC_KEY</SignMode>\\n        <PublicKey>MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ</PublicKey>\\n        <AppId>201909116717****</AppId>\\n        <PrivateKey>MIIEvgIBADANBgkqhkiG9w0BAQEFAAS</PrivateKey>\\n        <Platform>Alipay</Platform>\\n        <SpaceId>0e16bb12-14af-****-b24c-5ac1a9a7bb9f</SpaceId>\\n    </SecretList>\\n    <Code>OK</Code>\\n</ListOpenPlatformConfigResponse>","errorExample":""}]',
      'title' => '查询支付宝、微信开放平台配置',
      'summary' => '查询支付宝、微信开放平台配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDingtalkOpenPlatformConfigs' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
      ),
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
                'example' => 'D8A5FF68-2C8A-46D0-A11C-FA034F4F475F',
              ),
              'Configs' => 
              array (
                'description' => '钉钉小程序相关配置。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UpdateTime' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'string',
                      'example' => '2020-01-17T03:04:46Z',
                    ),
                    'AppSecret' => 
                    array (
                      'description' => '钉钉小程序密钥。',
                      'type' => 'string',
                      'example' => '1r0ElNPFqLI6qgY08*******************************9TIK3RN_5fk9SEMO',
                    ),
                    'AppId' => 
                    array (
                      'description' => '钉钉小程序ID。',
                      'type' => 'string',
                      'example' => 'dingoa7pqicyk3x9******',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2020-01-17T03:04:46Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D8A5FF68-2C8A-46D0-A11C-FA034F4F475F\\",\\n  \\"Configs\\": [\\n    {\\n      \\"UpdateTime\\": \\"2020-01-17T03:04:46Z\\",\\n      \\"AppSecret\\": \\"1r0ElNPFqLI6qgY08*******************************9TIK3RN_5fk9SEMO\\",\\n      \\"AppId\\": \\"dingoa7pqicyk3x9******\\",\\n      \\"CreateTime\\": \\"2020-01-17T03:04:46Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D8A5FF68-2C8A-46D0-A11C-FA034F4F475F</RequestId>\\n<HttpStatusCode>200</HttpStatusCode>\\n<Configs>\\n    <AppId>dingoa7pqicyk3x9******</AppId>\\n    <CreateTime>2020-01-17T03:04:46Z</CreateTime>\\n    <UpdateTime>2020-01-17T03:04:46Z</UpdateTime>\\n    <AppSecret>1r0ElNPFqLI6qgY08*******************************9TIK3RN_5fk9SEMO</AppSecret>\\n</Configs>\\n<Code>OK</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询钉钉开放平台配置',
      'summary' => '查询钉钉开放平台配置。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AddCorsDomain' => 
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
          'name' => 'Domain',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '域名。支持前缀和端口通配。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '*.example.com:*',
            'maxLength' => 253,
            'minLength' => 1,
          ),
        ),
        1 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'mp-0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
      ),
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
                'example' => '74374923-6536-46EB-8639-409384EAE980',
              ),
              'DomainId' => 
              array (
                'description' => '域名ID。',
                'type' => 'string',
                'example' => '97e3ff58-01e4-****-b975-1805fec34d77',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"74374923-6536-46EB-8639-409384EAE980\\",\\n  \\"DomainId\\": \\"97e3ff58-01e4-****-b975-1805fec34d77\\"\\n}","errorExample":""},{"type":"xml","example":"<AddCorsDomainResponse>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>74374923-6536-46EB-8639-409384EAE980</RequestId>\\n    <DomainId>97e3ff58-01e4-****-b975-1805fec34d77</DomainId>\\n    <Success>true</Success>\\n    <Code>OK</Code>\\n</AddCorsDomainResponse>","errorExample":""}]',
      'title' => '添加CORS域名',
      'summary' => '为服务空间添加CORS域名。',
      'description' => '><notice>最多允许添加 10 个安全跨域域名。></notice>',
    ),
    'DeleteCorsDomain' => 
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
          'name' => 'DomainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '域名ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '97e3ff58-01e4-****-b975-1805fec34d77',
          ),
        ),
        1 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
      ),
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
                'example' => '091A8BC0-8A73-4035-9441-922BF969631D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"091A8BC0-8A73-4035-9441-922BF969631D\\"\\n}","errorExample":""},{"type":"xml","example":"<HttpStatusCode>200</HttpStatusCode>\\n<RequestId>091A8BC0-8A73-4035-9441-922BF969631D</RequestId>\\n<Success>true</Success>\\n<Code>OK</Code>","errorExample":""}]',
      'title' => '删除CORS域名',
      'summary' => '删除CORS域名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListCorsDomains' => 
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0e16bb12-14af-****-b24c-5ac1a9a7bb9f',
          ),
        ),
      ),
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
                'example' => 'ED81670E-570A-481C-A50D-6B0EAA823BB1',
              ),
              'Domains' => 
              array (
                'description' => '域名列表。',
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
                      'example' => 'example.com',
                    ),
                    'DomainId' => 
                    array (
                      'description' => '域名ID。',
                      'type' => 'string',
                      'example' => '97e3ff58-01e4-****-b975-1805fec34d77',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ED81670E-570A-481C-A50D-6B0EAA823BB1\\",\\n  \\"Domains\\": [\\n    {\\n      \\"Domain\\": \\"example.com\\",\\n      \\"DomainId\\": \\"97e3ff58-01e4-****-b975-1805fec34d77\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListCorsDomainsResponse>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>ED81670E-570A-481C-A50D-6B0EAA823BB1</RequestId>\\n    <Domains>\\n        <Domain>test.example.com</Domain>\\n        <DomainId>97e3ff58-01e4-****-b975-1805fec34d77</DomainId>\\n    </Domains>\\n    <Success>true</Success>\\n    <Code>OK</Code>\\n</ListCorsDomainsResponse>","errorExample":""}]',
      'title' => '查询CORS域名',
      'summary' => '查询CORS域名。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QuerySpaceSpecDetail' => 
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
          'name' => 'SpecCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '- FREE 开发者版
- BASE 基础版
- STANDARD 标准版
- PROFESSIONAL 专业版
- ENTERPRISE 企业版
- UTIMATE 旗舰版',
            'type' => 'string',
            'required' => true,
            'example' => 'BASE',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => '20C1EDFE-6355-4344-B20A-A7A5A1581026',
              ),
              'GmtCreate' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
              ),
              'SpecCode' => 
              array (
                'description' => '- FREE 开发者版
- BASE 基础版
- STANDARD 标准版
- PROFESSIONAL 专业版
- ENTERPRISE 企业版
- UTIMATE 旗舰版',
                'type' => 'string',
                'example' => 'BASE',
              ),
              'CsCdnTraffic' => 
              array (
                'description' => '云存储流量，单位：byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2147483648',
              ),
              'CsDownloadCount' => 
              array (
                'description' => '云存储文件访问或者下载次数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100000',
              ),
              'CsStorageSize' => 
              array (
                'description' => '云存储磁盘容量，单位：byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8589934592',
              ),
              'CsUploadCount' => 
              array (
                'description' => '云存储文件上传次数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '50000',
              ),
              'DbReadCount' => 
              array (
                'description' => '云数据库读请求次数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '50000',
              ),
              'DbStorageSize' => 
              array (
                'description' => '云数据库磁盘容量，单位：byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2147483648',
              ),
              'DbWriteCount' => 
              array (
                'description' => '云数据库写请求次数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '30000',
              ),
              'FcCost' => 
              array (
                'description' => '云函数计算量（MB百毫秒）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '102400000',
              ),
              'FcRequestCount' => 
              array (
                'description' => '云函数调用次数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '150000',
              ),
              'FcTxTraffic' => 
              array (
                'description' => '云函数出网流量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1073741824',
              ),
              'WhCdnTraffic' => 
              array (
                'description' => '静态网站托管 CDN 流量，单位 byte',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2147483648',
              ),
              'WhStorageSize' => 
              array (
                'description' => '静态网站托管磁盘容量，单位：byte。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8589934592',
              ),
              'SpecDetailText' => 
              array (
                'description' => '套餐规格文案详情',
                'type' => 'string',
                'example' => '云函数：\\\\n 资源使用量 1万 GBs/月\\\\n调用次数 15 万次/月\\\\n出网流量 1 GB/月\\\\n\\\\br云数据库：\\\\n容量 2 GB\\\\n读操作 5 万次/天\\\\n写操作 3 万次/天\\\\n\\\\br云存储：\\\\n容量 8 GB\\\\n下载操作次数 10 万次/月\\\\n上传操作次数 5 万次/月\\\\nCDN流量 2 GB/月\\\\n\\\\br静态网站托管：\\\\n 容量 8 GB\\\\nCDN流量 2 GB/月"',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"20C1EDFE-6355-4344-B20A-A7A5A1581026\\",\\n  \\"GmtCreate\\": \\"\\",\\n  \\"SpecCode\\": \\"BASE\\",\\n  \\"CsCdnTraffic\\": 2147483648,\\n  \\"CsDownloadCount\\": 100000,\\n  \\"CsStorageSize\\": 8589934592,\\n  \\"CsUploadCount\\": 50000,\\n  \\"DbReadCount\\": 50000,\\n  \\"DbStorageSize\\": 2147483648,\\n  \\"DbWriteCount\\": 30000,\\n  \\"FcCost\\": 102400000,\\n  \\"FcRequestCount\\": 150000,\\n  \\"FcTxTraffic\\": 1073741824,\\n  \\"WhCdnTraffic\\": 2147483648,\\n  \\"WhStorageSize\\": 8589934592,\\n  \\"SpecDetailText\\": \\"云函数：\\\\\\\\\\\\\\\\n 资源使用量 1万 GBs/月\\\\\\\\\\\\\\\\n调用次数 15 万次/月\\\\\\\\\\\\\\\\n出网流量 1 GB/月\\\\\\\\\\\\\\\\n\\\\\\\\\\\\\\\\br云数据库：\\\\\\\\\\\\\\\\n容量 2 GB\\\\\\\\\\\\\\\\n读操作 5 万次/天\\\\\\\\\\\\\\\\n写操作 3 万次/天\\\\\\\\\\\\\\\\n\\\\\\\\\\\\\\\\br云存储：\\\\\\\\\\\\\\\\n容量 8 GB\\\\\\\\\\\\\\\\n下载操作次数 10 万次/月\\\\\\\\\\\\\\\\n上传操作次数 5 万次/月\\\\\\\\\\\\\\\\nCDN流量 2 GB/月\\\\\\\\\\\\\\\\n\\\\\\\\\\\\\\\\br静态网站托管：\\\\\\\\\\\\\\\\n 容量 8 GB\\\\\\\\\\\\\\\\nCDN流量 2 GB/月\\\\\\"\\"\\n}","type":"json"}]',
      'title' => '查询套餐规格详情',
      'summary' => '根据套餐规格查询套餐详情。',
      'description' => '> 仅商业版支持该功能',
    ),
    'QuerySpaceUsage' => 
    array (
      'summary' => '查询服务空间资源用量详情。',
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'mp-fd37e37e-b436-4a7a-****-58c89ce3586d',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '起始时间，UTC。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-06-17T16:00:00Z',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '结束时间，UTC。
- 结束时间必须晚于开始时间。
- 当时间范围不超过一天时，自动返回小时级别计量数据。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-06-18T16:00:00Z',
          ),
        ),
        3 => 
        array (
          'name' => 'Interval',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '可选字段。当缺少该字段时根据查询时间跨度返回不同粒度数据。大于一天按天返回，小于等于一天按小时返回。

查询数据的时间粒度。单位：分钟。取值：

- 1440（按天返回，跨度不超过31天）。

- 60（按小时返回，跨度不超过7天）。

- 5（按五分钟返回，跨度不超过1天）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '60',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回内容。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'A9FB71D5-2C06-5810-A5FA-B88E45FE****',
              ),
              'SpaceId' => 
              array (
                'description' => '服务空间ID。',
                'type' => 'string',
                'example' => 'mp-23c7c857-****-4512-bab0-3dbf986e7576',
              ),
              'StartTime' => 
              array (
                'description' => '起始时间。',
                'type' => 'string',
                'example' => '2022-06-17T16:00:00Z',
              ),
              'EndTime' => 
              array (
                'description' => '查询范围的终止时间戳。',
                'type' => 'string',
                'example' => '2022-06-18T16:00:00Z',
              ),
              'SpaceUsageDataList' => 
              array (
                'description' => '数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Timestamp' => 
                    array (
                      'description' => '统计时间戳。',
                      'type' => 'string',
                      'example' => '2022-06-17T16:00:00Z',
                    ),
                    'FcUsage' => 
                    array (
                      'description' => '云函数用量。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Cost' => 
                        array (
                          'description' => '计算量（MB百毫秒）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '35645000',
                        ),
                        'RequestCount' => 
                        array (
                          'description' => '函数调用次数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '12451',
                        ),
                        'TxTraffic' => 
                        array (
                          'description' => '函数出网总流量，单位为byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '124521635',
                        ),
                      ),
                    ),
                    'DbUsage' => 
                    array (
                      'description' => '云数据库用量。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StorageSize' => 
                        array (
                          'description' => '磁盘容量，单位：byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2542108',
                        ),
                        'ReadCount' => 
                        array (
                          'description' => '云数据库读操作数（每4KB向上取整）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '5685123',
                        ),
                        'WriteCount' => 
                        array (
                          'description' => '云数据库写操作数（每1KB向上取整）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '241500',
                        ),
                      ),
                    ),
                    'CsUsage' => 
                    array (
                      'description' => '云存储用量。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StorageSize' => 
                        array (
                          'description' => '磁盘容量，单位：byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4024575081',
                        ),
                        'DownloadCount' => 
                        array (
                          'description' => '文件访问或者下载次数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '45668113',
                        ),
                        'UploadCount' => 
                        array (
                          'description' => '文件上传次数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2352',
                        ),
                        'CdnTraffic' => 
                        array (
                          'description' => 'CDN 流量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '94134230',
                        ),
                      ),
                    ),
                    'WhUsage' => 
                    array (
                      'description' => '静态网站托管用量。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StorageSize' => 
                        array (
                          'description' => '磁盘容量，单位：byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '226230160',
                        ),
                        'CdnTraffic' => 
                        array (
                          'description' => 'CDN 流量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '5644311',
                        ),
                      ),
                    ),
                    'EffectiveBillFlag' => 
                    array (
                      'description' => '标记该数据是否出账。
- true：正常出账。
- false：不出账，例如在空间停服的情况下，用量数据不用于出账。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A9FB71D5-2C06-5810-A5FA-B88E45FE****\\",\\n  \\"SpaceId\\": \\"mp-23c7c857-****-4512-bab0-3dbf986e7576\\",\\n  \\"StartTime\\": \\"2022-06-17T16:00:00Z\\",\\n  \\"EndTime\\": \\"2022-06-18T16:00:00Z\\",\\n  \\"SpaceUsageDataList\\": [\\n    {\\n      \\"Timestamp\\": \\"2022-06-17T16:00:00Z\\",\\n      \\"FcUsage\\": {\\n        \\"Cost\\": 35645000,\\n        \\"RequestCount\\": 12451,\\n        \\"TxTraffic\\": 124521635\\n      },\\n      \\"DbUsage\\": {\\n        \\"StorageSize\\": 2542108,\\n        \\"ReadCount\\": 5685123,\\n        \\"WriteCount\\": 241500\\n      },\\n      \\"CsUsage\\": {\\n        \\"StorageSize\\": 4024575081,\\n        \\"DownloadCount\\": 45668113,\\n        \\"UploadCount\\": 2352,\\n        \\"CdnTraffic\\": 94134230\\n      },\\n      \\"WhUsage\\": {\\n        \\"StorageSize\\": 226230160,\\n        \\"CdnTraffic\\": 5644311\\n      },\\n      \\"EffectiveBillFlag\\": true\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询资源用量',
      'description' => '> 仅商业版支持该功能。',
    ),
    'QuerySpaceConsumption' => 
    array (
      'summary' => '查询服务空间的当月用量消费。',
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'mp-95865273-9b1f-496d-****-cb88fa4d66a2',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'F16FEFE8-4E57-5795-BE7B-2D29F0C61B8C',
              ),
              'GmtCreate' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '0',
              ),
              'SpaceId' => 
              array (
                'description' => '服务空间ID。',
                'type' => 'string',
                'example' => 'mp-26fe89b6-****-4a90-b332-b424ce9651e6',
              ),
              'SpecCode' => 
              array (
                'description' => '- FREE 开发者版
- BASE 基础版
- STANDARD 标准版
- PROFESSIONAL 专业版
- ENTERPRISE 企业版
- UTIMATE 旗舰版',
                'type' => 'string',
                'example' => 'BASE',
              ),
              'FcUsage' => 
              array (
                'description' => '云函数用量',
                'type' => 'object',
                'properties' => 
                array (
                  'Cost' => 
                  array (
                    'description' => '计算量（MB百毫秒）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'RequestCount' => 
                  array (
                    'description' => '函数调用次数

',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'TxTraffic' => 
                  array (
                    'description' => '函数出网总流量，单位为byte。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                ),
              ),
              'DbUsage' => 
              array (
                'description' => '云数据库用量。',
                'type' => 'object',
                'properties' => 
                array (
                  'StorageSize' => 
                  array (
                    'description' => '磁盘容量，单位：byte。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'ReadCount' => 
                  array (
                    'description' => '读请求次数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'WriteCount' => 
                  array (
                    'description' => '写请求次数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                ),
              ),
              'CsUsage' => 
              array (
                'description' => '云存储用量。

',
                'type' => 'object',
                'properties' => 
                array (
                  'StorageSize' => 
                  array (
                    'description' => '磁盘容量，单位：byte。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'DownloadCount' => 
                  array (
                    'description' => '文件访问或者下载次数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'UploadCount' => 
                  array (
                    'description' => '文件上传次数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'CdnTraffic' => 
                  array (
                    'description' => 'CDN 流量，单位为byte。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                ),
              ),
              'WhUsage' => 
              array (
                'description' => '静态网站托管用量。',
                'type' => 'object',
                'properties' => 
                array (
                  'StorageSize' => 
                  array (
                    'description' => '磁盘容量，单位：byte。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'CdnTraffic' => 
                  array (
                    'description' => 'CDN 流量，单位为byte。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                ),
              ),
              'CycleStartTime' => 
              array (
                'description' => '当前计费周期起始时间（秒）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1664467200',
              ),
              'CycleEndTime' => 
              array (
                'description' => '当前计费周期结束时间（秒）',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1667059200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F16FEFE8-4E57-5795-BE7B-2D29F0C61B8C\\",\\n  \\"GmtCreate\\": \\"0\\",\\n  \\"SpaceId\\": \\"mp-26fe89b6-****-4a90-b332-b424ce9651e6\\",\\n  \\"SpecCode\\": \\"BASE\\",\\n  \\"FcUsage\\": {\\n    \\"Cost\\": 0,\\n    \\"RequestCount\\": 0,\\n    \\"TxTraffic\\": 0\\n  },\\n  \\"DbUsage\\": {\\n    \\"StorageSize\\": 0,\\n    \\"ReadCount\\": 0,\\n    \\"WriteCount\\": 0\\n  },\\n  \\"CsUsage\\": {\\n    \\"StorageSize\\": 0,\\n    \\"DownloadCount\\": 0,\\n    \\"UploadCount\\": 0,\\n    \\"CdnTraffic\\": 0\\n  },\\n  \\"WhUsage\\": {\\n    \\"StorageSize\\": 0,\\n    \\"CdnTraffic\\": 0\\n  },\\n  \\"CycleStartTime\\": 1664467200,\\n  \\"CycleEndTime\\": 1667059200\\n}","type":"json"}]',
      'title' => '查询空间资源消费',
      'description' => '> 仅商业版支持该功能。',
    ),
    'DescribeResourceQuota' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '226e5213-697c-****-b4ff-35a09f8a52de',
          ),
        ),
      ),
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
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'C293BB03-B6AD-46C2-80D1-19C8FB573916',
              ),
              'StaticWebDataSizeQuota' => 
              array (
                'description' => '静态网站容量阈值，单位GB 。',
                'type' => 'number',
                'format' => 'double',
                'example' => '2',
              ),
              'CloudStorageDataSizeQuota' => 
              array (
                'description' => '云存储容量阈值，单位GB。',
                'type' => 'number',
                'format' => 'double',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C293BB03-B6AD-46C2-80D1-19C8FB573916\\",\\n  \\"StaticWebDataSizeQuota\\": 2,\\n  \\"CloudStorageDataSizeQuota\\": 10\\n}","errorExample":""},{"type":"xml","example":"<DescribeResourceQuotaResponse>\\n    <RequestId>C293BB03-B6AD-46C2-80D1-19C8FB573916</RequestId>\\n    <StaticWebDataSizeQuota>2</StaticWebDataSizeQuota>\\n    <CloudStorageDataSizeQuota>10</CloudStorageDataSizeQuota>\\n</DescribeResourceQuotaResponse>","errorExample":""}]',
      'title' => '查询服务空间资源的阈值',
      'summary' => '查询服务空间资源的阈值。',
    ),
    'DescribeResourceUsage' => 
    array (
      'summary' => '查询资源使用量。',
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
          'name' => 'SpaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '服务空间ID。',
            'type' => 'string',
            'required' => true,
            'example' => '226e5213-697c-****-b4ff-35a09f8a52de',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页码。取值范围：大于1的任意整数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页大小。默认30，最大1000，取值：1-1000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '100',
            'default' => '30',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '获取资源用量起始时间。日期格式按照ISO8601表示法，并使用北京时间（UTC+8），格式为yyyy-MM-ddTHH:mm:ssZ，默认返回今天的数据。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-01T00:00:00Z',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '获取资源用量结束时间。日期格式按照ISO8601表示法，并使用北京时间（UTC+8），格式为yyyy-MM-ddTHH:mm:ssZ。结束时间需晚于起始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2021-10-02T00:00:00Z',
          ),
        ),
        5 => 
        array (
          'name' => 'Format',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '可选，默认值 JSON，当前仅支持JSON格式。',
            'type' => 'string',
            'required' => false,
            'example' => 'JSON',
          ),
        ),
      ),
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
                'description' => '请求返回状态。
- success：成功。
- failed：失败。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'SpaceNotExist',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP请求返回的响应状态码，200表示请求成功。',
                'type' => 'string',
                'required' => true,
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '唯一请求ID。',
                'type' => 'string',
                'example' => 'C293BB03-B6AD-46C2-80D1-19C8FB573916',
              ),
              'Success' => 
              array (
                'description' => '请求返回状态。
- true：成功。
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'DataList' => 
              array (
                'description' => '返回数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '函数数据大小。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'StartTime' => 
                    array (
                      'description' => '获取资源用量起始时间。日期格式按照ISO8601表示法，并使用UTC时间，格式为yyyy-MM-ddTHH:mm:ssZ， 默认返回今天的数据。',
                      'type' => 'string',
                      'example' => '2021-10-01T15:00:00Z',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '获取资源用量结束时间。结束时间需晚于起始时间。',
                      'type' => 'string',
                      'example' => '2021-10-01T16:00:00Z',
                    ),
                    'CloudStorage' => 
                    array (
                      'description' => '云存储。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DataSize' => 
                        array (
                          'description' => '容量 （单位字节）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'Traffic' => 
                        array (
                          'description' => '流量（单位字节）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'Upload' => 
                        array (
                          'description' => '上传次数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'Download' => 
                        array (
                          'description' => '下载次数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                      ),
                    ),
                    'CloudDB' => 
                    array (
                      'description' => '云数据库。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DataSize' => 
                        array (
                          'description' => '容量 （单位字节）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'Write' => 
                        array (
                          'description' => '写次数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'Read' => 
                        array (
                          'description' => '读次数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                      ),
                    ),
                    'CloudFunction' => 
                    array (
                      'description' => '云函数。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Compute' => 
                        array (
                          'description' => '计算量（单位 GBS）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'Count' => 
                        array (
                          'description' => '调用次数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'Traffic' => 
                        array (
                          'description' => '流量（单位字节）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                      ),
                    ),
                    'StaticWeb' => 
                    array (
                      'description' => '静态网站托管',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DataSize' => 
                        array (
                          'description' => '容量 （单位字节）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'Traffic' => 
                        array (
                          'description' => '流量（单位字节）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Paginator' => 
              array (
                'description' => '分页信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageCount' => 
                  array (
                    'description' => '当前页面总数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                  'PageNum' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页大小。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'Total' => 
                  array (
                    'description' => '总数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '255',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"success\\",\\n  \\"Message\\": \\"SpaceNotExist\\",\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"C293BB03-B6AD-46C2-80D1-19C8FB573916\\",\\n  \\"Success\\": true,\\n  \\"DataList\\": [\\n    {\\n      \\"StartTime\\": \\"2021-10-01T15:00:00Z\\",\\n      \\"EndTime\\": \\"2021-10-01T16:00:00Z\\",\\n      \\"CloudStorage\\": {\\n        \\"DataSize\\": 0,\\n        \\"Traffic\\": 0,\\n        \\"Upload\\": 0,\\n        \\"Download\\": 0\\n      },\\n      \\"CloudDB\\": {\\n        \\"DataSize\\": 0,\\n        \\"Write\\": 0,\\n        \\"Read\\": 0\\n      },\\n      \\"CloudFunction\\": {\\n        \\"Compute\\": 0,\\n        \\"Count\\": 0,\\n        \\"Traffic\\": 0\\n      },\\n      \\"StaticWeb\\": {\\n        \\"DataSize\\": 0,\\n        \\"Traffic\\": 0\\n      }\\n    }\\n  ],\\n  \\"Paginator\\": {\\n    \\"PageCount\\": 3,\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 100,\\n    \\"Total\\": 255\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeResourceUsageResponse>\\n    <Code>success</Code>\\n    <Message>SpaceNotExist</Message>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>C293BB03-B6AD-46C2-80D1-19C8FB573916</RequestId>\\n    <Success>true</Success>\\n    <DataList>\\n        <StartTime>2021-10-01T15:00:00Z</StartTime>\\n        <EndTime>2021-10-01T16:00:00Z</EndTime>\\n        <CloudStorage>\\n            <DataSize>0</DataSize>\\n            <Traffic>0</Traffic>\\n            <Upload>0</Upload>\\n            <Download>0</Download>\\n        </CloudStorage>\\n        <CloudDB>\\n            <DataSize>0</DataSize>\\n            <Write>0</Write>\\n            <Read>0</Read>\\n        </CloudDB>\\n        <CloudFunction>\\n            <Compute>0</Compute>\\n            <Count>0</Count>\\n            <Traffic>0</Traffic>\\n        </CloudFunction>\\n        <StaticWeb>\\n            <DataSize>0</DataSize>\\n            <Traffic>0</Traffic>\\n        </StaticWeb>\\n    </DataList>\\n    <Paginator>\\n        <PageCount>3</PageCount>\\n        <PageNum>1</PageNum>\\n        <PageSize>100</PageSize>\\n        <Total>255</Total>\\n    </Paginator>\\n</DescribeResourceUsageResponse>","errorExample":""}]',
      'title' => '查询资源使用量',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'mpserverless.aliyuncs.com',
    ),
  ),
);
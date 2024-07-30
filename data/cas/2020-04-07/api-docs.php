<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'cas',
        'version' => '2020-04-07',
    ],
    'directories' => [
        [
            'id' => 193090,
            'title' => '资源组',
            'type' => 'directory',
            'children' => [
                'MoveResourceGroup',
            ],
        ],
        [
            'id' => 190265,
            'title' => '部署任务',
            'type' => 'directory',
            'children' => [
                'ListDeploymentJob',
                'DescribeDeploymentJob',
                'ListWorkerResource',
                'DescribeDeploymentJobStatus',
                'UpdateDeploymentJob',
                'ListDeploymentJobResource',
                'UpdateDeploymentJobStatus',
                'ListContact',
                'DescribeCloudResourceStatus',
                'ListCloudResources',
                'ListDeploymentJobCert',
                'UpdateWorkerResourceStatus',
                'DeleteWorkerResource',
                'DeleteDeploymentJob',
                'ListCloudAccess',
                'CreateDeploymentJob',
            ],
        ],
        [
            'id' => 74403,
            'title' => '证书请求',
            'type' => 'directory',
            'children' => [
                'DescribeCertificateState',
                'CreateCertificateWithCsrRequest',
                'CreateCertificateRequest',
                'DeleteCertificateRequest',
                'UploadUserCertificate',
                'GetUserCertificateDetail',
            ],
        ],
        [
            'id' => 74410,
            'title' => '订单',
            'type' => 'directory',
            'children' => [
                'DescribePackageState',
                'ListUserCertificateOrder',
                'CreateCertificateForPackageRequest',
                'CancelCertificateForPackageRequest',
                'CancelOrderRequest',
                'RenewCertificateOrderForPackageRequest',
            ],
        ],
        [
            'id' => 172120,
            'title' => '证书仓库',
            'type' => 'directory',
            'children' => [
                'GetCertWarehouseQuota',
                'ListCertWarehouse',
                'ListCert',
                'Sign',
                'Verify',
                'Encrypt',
                'Decrypt',
                'UploadPCACert',
                'DeletePCACert',
                'CreateWHClientCertificate',
                'RevokeWHClientCertificate',
            ],
        ],
        [
            'id' => 189697,
            'title' => 'CSR管理',
            'type' => 'directory',
            'children' => [
                'ListCsr',
                'CreateCsr',
                'UploadCsr',
                'GetCsrDetail',
                'UpdateCsr',
                'DeleteCsr',
            ],
        ],
        [
            'id' => 193207,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'DeleteUserCertificate',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'MoveResourceGroup' => [
            'summary' => '修改证书或证书订单资源所属的资源组。',
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
                'chargeType' => 'free',
                'abilityTreeCode' => '226097',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cas-cn-4591d3xa****',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源分组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rg-acfmykgxu5d46ey',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源的类型。  默认值：**instance**。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'instance' => '订单',
                            'Certificate' => '证书',
                        ],
                        'example' => 'instance',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书所有者所属组织的地域。目前仅支持ap-southeast-1（新加坡）和cn-hangzhou（杭州）',
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
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '5BCD2F6C-7A9D-47C1-8588-2CC6A4E0BE5E',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5BCD2F6C-7A9D-47C1-8588-2CC6A4E0BE5E\\"\\n}","type":"json"}]',
            'title' => '修改资源所属的资源组',
        ],
        'ListDeploymentJob' => [
            'summary' => '创建部署任务后，您可以通过该接口获取部署任务列表。',
            'methods' => [
                'get',
                'post',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '214571',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'cloud' => '多云部署任务',
                            'user' => '云产品部署任务（不含云服务器）',
                        ],
                        'example' => 'user',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署任务状态。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'success' => '部署成功',
                            'pending' => '待执行',
                            'scheduling' => '调度中',
                            'processing' => '部署中',
                            'error' => '部署失败',
                            'editing' => '编辑中',
                        ],
                        'example' => 'pending',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页。当前页，默认1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ShowSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页显示证书的数量。默认值为**50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '12345678-1234-1234-1234-123456789ABC',
                            ],
                            'Total' => [
                                'description' => '查询到的部署任务总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '7',
                            ],
                            'CurrentPage' => [
                                'description' => '分页，表示当前页，默认1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'ShowSize' => [
                                'description' => '每页包含部署任务的个数。默认值为**50**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Data' => [
                                'description' => '请求接口返回的数据。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据中的对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '部署任务ID。后续可用于查询部署任务详情、部署任务状态等。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '19975',
                                        ],
                                        'GmtCreate' => [
                                            'description' => '部署任务创建时间（秒，时间戳格式）。',
                                            'type' => 'string',
                                            'example' => '1624343180000',
                                        ],
                                        'GmtModified' => [
                                            'description' => '部署任务上次修订时间（秒，时间戳格式）。',
                                            'type' => 'string',
                                            'example' => '1606482979000',
                                        ],
                                        'UserId' => [
                                            'description' => '用户账号ID（UID）。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '166688437*****',
                                        ],
                                        'InstanceId' => [
                                            'description' => '部署任务实例ID。',
                                            'type' => 'string',
                                            'example' => 'cas-job-user-***',
                                        ],
                                        'Name' => [
                                            'description' => '部署任务名称。',
                                            'type' => 'string',
                                            'example' => 'job-test',
                                        ],
                                        'CertType' => [
                                            'description' => '证书类型。'."\n"
                                                ."\n"
                                                .'- **upload**：上传证书'."\n"
                                                .'- **buy**：自购证书'."\n"
                                                .'- **free**：免费证书（仅中国站支持）',
                                            'type' => 'string',
                                            'enumValueTitles' => [],
                                            'example' => 'upload',
                                        ],
                                        'ScheduleTime' => [
                                            'description' => '任务调度时间。',
                                            'type' => 'string',
                                            'example' => '1606482979000',
                                        ],
                                        'StartTime' => [
                                            'description' => '部署任务执行开始时间（秒，时间戳格式）。',
                                            'type' => 'string',
                                            'example' => '1606482979000',
                                        ],
                                        'EndTime' => [
                                            'description' => '部署任务执行结束时间（秒，时间戳格式）。',
                                            'type' => 'string',
                                            'example' => '1606482979000',
                                        ],
                                        'Status' => [
                                            'description' => '部署任务状态。'."\n"
                                                ."\n"
                                                .'- **pending**：待执行'."\n"
                                                .'- **editing**：编辑中'."\n"
                                                .'- **scheduling**：调度中'."\n"
                                                .'- **processing**：部署中'."\n"
                                                .'- **error**：部署失败'."\n"
                                                .'- **success**：部署成功',
                                            'type' => 'string',
                                            'enumValueTitles' => [],
                                            'example' => 'scheduling',
                                        ],
                                        'Del' => [
                                            'description' => '删除标识，无实际意义。'."\n"
                                                ."\n"
                                                .'- **0**：未删除'."\n"
                                                .'- **1**：已删除',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'enumValueTitles' => [],
                                            'example' => '1',
                                        ],
                                        'Rollback' => [
                                            'description' => '是否包含回滚任务worker。例如某个任务中的某个云产品执行过回滚，则返回**1**。'."\n"
                                                ."\n"
                                                .'- **0**：不包含回滚任务worker'."\n"
                                                .'- **1**：包含回滚任务worker',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'enumValueTitles' => [],
                                            'example' => '1',
                                        ],
                                        'JobType' => [
                                            'description' => '任务类型。'."\n"
                                                ."\n"
                                                .'- **cloud**：多云部署任务'."\n"
                                                .'- **user**：云产品部署任务（不含云服务器）',
                                            'type' => 'string',
                                            'enumValueTitles' => [],
                                            'example' => 'user',
                                        ],
                                        'CertDomain' => [
                                            'description' => '部署任务证书包含的域名。',
                                            'type' => 'string',
                                            'example' => 'aliyundoc1.com,aliyundoc2.com,aliyundoc3.com',
                                        ],
                                        'ProductName' => [
                                            'description' => '部署任务资源包含云产品。',
                                            'type' => 'string',
                                            'example' => 'NLB',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"12345678-1234-1234-1234-123456789ABC\\",\\n  \\"Total\\": 7,\\n  \\"CurrentPage\\": 1,\\n  \\"ShowSize\\": 50,\\n  \\"Data\\": [\\n    {\\n      \\"Id\\": 19975,\\n      \\"GmtCreate\\": \\"1624343180000\\",\\n      \\"GmtModified\\": \\"1606482979000\\",\\n      \\"UserId\\": 0,\\n      \\"InstanceId\\": \\"cas-job-user-***\\",\\n      \\"Name\\": \\"job-test\\",\\n      \\"CertType\\": \\"upload\\",\\n      \\"ScheduleTime\\": \\"1606482979000\\",\\n      \\"StartTime\\": \\"1606482979000\\",\\n      \\"EndTime\\": \\"1606482979000\\",\\n      \\"Status\\": \\"scheduling\\",\\n      \\"Del\\": 1,\\n      \\"Rollback\\": 1,\\n      \\"JobType\\": \\"user\\",\\n      \\"CertDomain\\": \\"aliyundoc1.com,aliyundoc2.com,aliyundoc3.com\\",\\n      \\"ProductName\\": \\"NLB\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取部署任务列表',
        ],
        'DescribeDeploymentJob' => [
            'summary' => '通过CreateDeploymentJob创建部署任务后会获取任务ID，您可以通过该任务ID调用本接口获取部署任务详情。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '214580',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务ID',
                        'description' => '部署任务ID。此处ID为[CreateDeploymentJob](~~2712234~~)返回的任务**ID**。也可通过[ListDeploymentJob](~~2712223~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '8888',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiDefaultResponse<DeploymentJob>',
                        'description' => 'OpenApiDefaultResponse<DeploymentJob>。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                            'Id' => [
                                'title' => '部署任务ID',
                                'description' => '部署任务ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '43222',
                            ],
                            'GmtCreate' => [
                                'title' => '部署任务创建时间',
                                'description' => '部署任务创建时间（秒，时间戳格式）。',
                                'type' => 'string',
                                'example' => '1679541809000',
                            ],
                            'GmtModified' => [
                                'title' => '部署任务上次修订时间',
                                'description' => '部署任务上次修订时间（秒，时间戳格式）。',
                                'type' => 'string',
                                'example' => '1679541809000',
                            ],
                            'UserId' => [
                                'title' => '部署任务Owner',
                                'description' => '部署任务创建人的阿里云账号ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '166688437******',
                            ],
                            'InstanceId' => [
                                'title' => '部署任务实例ID',
                                'description' => '部署任务实例ID。',
                                'type' => 'string',
                                'example' => '14dcc8afc7578e1f',
                            ],
                            'Name' => [
                                'title' => '部署任务名称',
                                'description' => '部署任务名称。',
                                'type' => 'string',
                                'example' => 'auto-test-AXX',
                            ],
                            'CertType' => [
                                'title' => '证书类型：',
                                'description' => '证书类型。'."\n"
                                    .'- **upload**：上传证书'."\n"
                                    .'- **buy**：自购证书'."\n"
                                    .'- **free**：免费证书（仅中国站支持）',
                                'type' => 'string',
                                'enumValueTitles' => [],
                                'example' => 'buy',
                            ],
                            'ScheduleTime' => [
                                'title' => '部署任务计划调度时间',
                                'description' => '部署任务计划调度时间（秒，时间戳格式）。',
                                'type' => 'string',
                                'example' => '1678083209335',
                            ],
                            'StartTime' => [
                                'title' => '部署任务执行开始时间',
                                'description' => '部署任务执行的开始时间（秒，时间戳格式）。',
                                'type' => 'string',
                                'example' => '1679541809000',
                            ],
                            'EndTime' => [
                                'title' => '部署任务执行结束时间',
                                'description' => '部署任务执行的结束时间（秒，时间戳格式）。',
                                'type' => 'string',
                                'example' => '1679541809000',
                            ],
                            'Status' => [
                                'title' => '部署任务状态：',
                                'description' => '部署任务状态。'."\n"
                                    ."\n"
                                    .'- **pending**：待执行'."\n"
                                    .'- **editing**：编辑中'."\n"
                                    .'- **scheduling**：调度中'."\n"
                                    .'- **processing**：部署中'."\n"
                                    .'- **error**：部署失败'."\n"
                                    .'- **success**：部署成功',
                                'type' => 'string',
                                'enumValueTitles' => [],
                                'example' => 'editing',
                            ],
                            'Del' => [
                                'title' => '是否已删除',
                                'description' => '删除标识，无实际意义。'."\n"
                                    ."\n"
                                    .'- **0**：未删除'."\n"
                                    .'- **1**：已删除',
                                'type' => 'integer',
                                'format' => 'int32',
                                'enumValueTitles' => [],
                                'example' => '1',
                            ],
                            'Rollback' => [
                                'title' => '是否包含回滚worker',
                                'description' => '是否包含回滚任务worker。例如某个部署任务中的某个云产品执行过回滚，则返回**1**。'."\n"
                                    ."\n"
                                    .'- **0**：不包含回滚任务worker'."\n"
                                    .'- **1**：包含回滚任务worker',
                                'type' => 'integer',
                                'format' => 'int32',
                                'enumValueTitles' => [],
                                'example' => '1',
                            ],
                            'JobType' => [
                                'title' => '任务类型：',
                                'description' => '任务类型。'."\n"
                                    ."\n"
                                    .'- **cloud**：多云部署任务'."\n"
                                    .'- **trustee**：托管部署任务（仅中国站）'."\n"
                                    .'- **user**：云产品部署任务（不含云服务器）',
                                'type' => 'string',
                                'enumValueTitles' => [],
                                'example' => 'user',
                            ],
                            'CertDomain' => [
                                'title' => '部署任务证书包含域名（多个）',
                                'description' => '部署任务证书包含域名（多个）。',
                                'type' => 'string',
                                'example' => 'example.aliyundoc.com,demo.aliyundoc.com',
                            ],
                            'ProductName' => [
                                'title' => '部署任务资源包含云产品（多个）',
                                'description' => '部署任务资源包含云产品（多个）。',
                                'type' => 'string',
                                'example' => 'CDN',
                            ],
                            'Config' => [
                                'title' => '部署任务配置',
                                'description' => '部署任务配置。',
                                'type' => 'string',
                                'example' => '{\\"shareCertIds\\":[],\\"certIds\\":[12342649,12304338,12067351,9957285]}',
                            ],
                            'CasContacts' => [
                                'description' => '联系人信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '联系人ID。',
                                            'type' => 'string',
                                            'example' => '3304',
                                        ],
                                        'Name' => [
                                            'description' => '联系人姓名。',
                                            'type' => 'string',
                                            'example' => '张先生',
                                        ],
                                        'Mobile' => [
                                            'description' => '指定的手机号码。',
                                            'type' => 'string',
                                            'example' => '139****0000',
                                        ],
                                        'Email' => [
                                            'description' => '联系人邮箱。',
                                            'type' => 'string',
                                            'example' => 'username@example.com',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\",\\n  \\"Id\\": 43222,\\n  \\"GmtCreate\\": \\"1679541809000\\",\\n  \\"GmtModified\\": \\"1679541809000\\",\\n  \\"UserId\\": 0,\\n  \\"InstanceId\\": \\"14dcc8afc7578e1f\\",\\n  \\"Name\\": \\"auto-test-AXX\\",\\n  \\"CertType\\": \\"buy\\",\\n  \\"ScheduleTime\\": \\"1678083209335\\",\\n  \\"StartTime\\": \\"1679541809000\\",\\n  \\"EndTime\\": \\"1679541809000\\",\\n  \\"Status\\": \\"editing\\",\\n  \\"Del\\": 1,\\n  \\"Rollback\\": 1,\\n  \\"JobType\\": \\"user\\",\\n  \\"CertDomain\\": \\"example.aliyundoc.com,demo.aliyundoc.com\\",\\n  \\"ProductName\\": \\"CDN\\",\\n  \\"Config\\": \\"{\\\\\\\\\\\\\\"shareCertIds\\\\\\\\\\\\\\":[],\\\\\\\\\\\\\\"certIds\\\\\\\\\\\\\\":[12342649,12304338,12067351,9957285]}\\",\\n  \\"CasContacts\\": [\\n    {\\n      \\"Id\\": \\"3304\\",\\n      \\"Name\\": \\"张先生\\",\\n      \\"Mobile\\": \\"139****0000\\",\\n      \\"Email\\": \\"username@example.com\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取部署任务详情',
        ],
        'ListWorkerResource' => [
            'summary' => '阿里云支持批量部署证书，因此一个部署任务中可能对应多个云产品子任务（Worker），对应每个产品中的资源实例，您可通过该接口查看Worker任务详细信息。',
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '214605',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务ID',
                        'description' => '部署任务ID。此处ID为[CreateDeploymentJob](~~2712234~~)返回的任务**ID**。也可通过[ListDeploymentJob](~~2712223~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '8888',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务worker状态：',
                        'description' => 'Worker任务状态。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'rollback' => '回滚中',
                            'rollback_error' => '回滚失败',
                            'success' => '部署成功',
                            'rollback_success' => '回滚成功',
                            'pending' => '待部署',
                            'scheduling' => '调度中',
                            'processing' => '部署中',
                            'error' => '部署失败',
                            'editing' => '编辑中',
                        ],
                        'example' => 'editing',
                    ],
                ],
                [
                    'name' => 'CloudProduct',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务worker状态：',
                        'description' => '部署任务中对应的云产品。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NLB',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ShowSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页，设置每页展示的任务个数，默认50。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiPaginationResponse<WorkerResource>',
                        'description' => 'OpenApiPaginationResponse<WorkerResource>。',
                        'type' => 'object',
                        'properties' => [
                            'Total' => [
                                'description' => '查询到的符合条件的总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8',
                            ],
                            'CurrentPage' => [
                                'description' => '分页，当前页，默认1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'ShowSize' => [
                                'description' => '分页查询时，每页展示的任务个数。默认值为**50**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'Data' => [
                                'description' => '请求接口返回的数据。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '具体对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'title' => '部署任务WorkerId',
                                            'description' => 'Worker任务ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '22487',
                                        ],
                                        'GmtCreate' => [
                                            'title' => '部署任务Worker创建时间',
                                            'description' => 'Worker任务创建时间（秒，时间戳格式）。',
                                            'type' => 'string',
                                            'example' => '1680228896000',
                                        ],
                                        'GmtModified' => [
                                            'title' => '部署任务Worker最后修订时间',
                                            'description' => 'Worker任务最后修订时间（秒，时间戳格式）。',
                                            'type' => 'string',
                                            'example' => '1681956830000',
                                        ],
                                        'UserId' => [
                                            'title' => '部署任务Worker Owner',
                                            'description' => 'Worker任务所归属的阿里云账号ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '166688437******',
                                        ],
                                        'JobId' => [
                                            'title' => '部署任务Worker JobId',
                                            'description' => 'Worker所属的部署任务ID（JobId）',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '8888',
                                        ],
                                        'OrderId' => [
                                            'title' => '部署任务Worker OrderId，与CertOrder值一致',
                                            'description' => 'Worker任务订单ID，与证书订单ID一致。'."\n"
                                                .'> 返回CertId，则该参数不返回。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '9349278',
                                        ],
                                        'CertId' => [
                                            'title' => '部署任务Worker CertId，与UserCert值一致',
                                            'description' => 'Worker任务对应的证书ID，与证书ID一致。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '12073663',
                                        ],
                                        'CertDomain' => [
                                            'title' => '部署任务Worker证书域名，与UserCert/CertOrder值一致',
                                            'description' => 'Worker任务对应的证书域名。',
                                            'type' => 'string',
                                            'example' => 'www.example.com',
                                        ],
                                        'CertInstanceId' => [
                                            'title' => '部署任务Worker证书实例ID，与UserCert/CertOrder值一致',
                                            'description' => 'Worker任务证书实例ID。',
                                            'type' => 'string',
                                            'example' => 'lsn-jzk2h0xz5dmynuphb8@1883',
                                        ],
                                        'CertName' => [
                                            'title' => '部署任务Worker证书名称，与UserCert/CertOrder值一致',
                                            'description' => 'Worker任务对应的证书名称。',
                                            'type' => 'string',
                                            'example' => 'testCertName',
                                        ],
                                        'ResourceId' => [
                                            'title' => '部署任务Worker云资源ID，与CloudResource值一致',
                                            'description' => 'Worker任务对应的云产品资源ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1286999',
                                        ],
                                        'CloudProduct' => [
                                            'title' => '部署任务Worker云资源所属云产品，与CloudResource值一致',
                                            'description' => 'Worker任务中云资源所属云产品。'."\n"
                                                .'- **CDN**：内容分发网络（仅中国站）'."\n"
                                                .'- **SLB**：传统型负载均衡CLB（仅中国站）'."\n"
                                                .'- **DCDN**：全站加速（仅中国站）'."\n"
                                                .'- **DDOS**：DDos防护（仅中国站）'."\n"
                                                .'- **LIVE**：视频直播（仅中国站）'."\n"
                                                .'- **webHosting**：云虚拟主机（仅中国站）'."\n"
                                                .'- **VOD**：视频点播（仅中国站）'."\n"
                                                .'- **CR**：容器镜像服务（仅中国站）'."\n"
                                                .'- **ALB**：应用负载均衡'."\n"
                                                .'- **APIGateway**：API网关'."\n"
                                                .'- **FC**：函数计算'."\n"
                                                .'- **GA**：全球加速'."\n"
                                                .'- **MSE**：微服务引擎'."\n"
                                                .'- **NLB**：网络型负载均衡'."\n"
                                                .'- **OSS**：对象存储'."\n"
                                                .'- **SAE**：Serverless 应用引擎'."\n"
                                                .'- **TencentCDN**：腾讯CDN'."\n"
                                                .'- **WAF**：Web应用防火墙',
                                            'type' => 'string',
                                            'example' => 'SLB',
                                        ],
                                        'ResourceCertId' => [
                                            'title' => '部署任务Worker云资源当前绑定证书ID，与CloudResource值一致',
                                            'description' => 'Worker任务云产品资源原绑定证书ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123',
                                        ],
                                        'ResourceDomain' => [
                                            'title' => '部署任务Worker云资源配置域名，与CloudResource值一致',
                                            'description' => 'Worker任务云产品资源原绑定域名。',
                                            'type' => 'string',
                                            'example' => 'www.example.com',
                                        ],
                                        'RegionId' => [
                                            'title' => '部署任务Worker云资源RegionID，与CloudResource值一致',
                                            'description' => 'Worker任务云产品资源的地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'CloudRegion' => [
                                            'title' => '部署任务Worker云资源原始RegionID（云厂商的RegionID），与CloudResource值一致',
                                            'description' => 'Worker任务云产品资源原始地域ID（云厂商的RegionID）。仅多云部署会返回。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'InstanceId' => [
                                            'title' => '部署任务Worker云资源实例ID，与CloudResource值一致',
                                            'description' => 'Worker任务云产品中的资源实例ID。'."\n"
                                                .'> 仅部署SLB、NLB、ALB和GA才会返回该参数。',
                                            'type' => 'string',
                                            'example' => 'cas-cn-0pp118nuu40b',
                                        ],
                                        'ListenerId' => [
                                            'title' => '部署任务Worker云资源监听ID（各云产品称呼不同，这里统一称为监听ID），与CloudResource值一致',
                                            'description' => 'Worker任务云产品中资源的监听ID。'."\n"
                                                .'> 仅部署SLB、NLB、ALB和GA才会返回该参数。',
                                            'type' => 'string',
                                            'example' => 'lsn-lhl8y7s1e1ngc3m3zz@81',
                                        ],
                                        'Port' => [
                                            'title' => '部署任务Worker云资源监听端口（可选，若存在），与CloudResource值一致',
                                            'description' => 'Worker任务云产品中资源的监听端口。'."\n"
                                                .'> 仅部署SLB、NLB、ALB和GA才会返回该参数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '4431',
                                        ],
                                        'DefaultResource' => [
                                            'title' => '部署任务Worker云资源是否为“默认资源”，与CloudResource值一致',
                                            'description' => 'Worker任务云产品资源是否为”默认资源“。'."\n"
                                                ."\n"
                                                .'- **true**：默认资源'."\n"
                                                .'- **false**：非默认资源'."\n"
                                                .'> 仅部署SLB、NLB、ALB和GA才会返回该参数。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'CloudName' => [
                                            'title' => '部署任务Worker云资源所属云厂商，与CloudResource值一致',
                                            'description' => 'Worker任务云产品资源所属云厂商。'."\n"
                                                .'> 部署至阿里云的云产品默认不返回该参数。',
                                            'type' => 'string',
                                            'example' => 'aliyun',
                                        ],
                                        'NamespaceId' => [
                                            'title' => '部署任务Worker执行参数',
                                            'description' => 'Serverless应用引擎命名空间ID。仅部署Serverless应用引擎返回。',
                                            'type' => 'string',
                                            'example' => '32fed52a-4bf7-44f6-955f-e82ada68ef18',
                                        ],
                                        'Status' => [
                                            'title' => '部署任务Worker状态：',
                                            'description' => '部署任务Worker状态。'."\n"
                                                .'- **editing**：编辑中'."\n"
                                                .'- **pending**：待部署'."\n"
                                                .'- **scheduling**：调度中'."\n"
                                                .'- **processing**：部署中'."\n"
                                                .'- **error**：部署失败'."\n"
                                                .'- **success**：部署成功'."\n"
                                                .'- **rollback**：回滚中'."\n"
                                                .'- **rollback_success**：回滚成功'."\n"
                                                .'- **rollback_error**：回滚失败',
                                            'type' => 'string',
                                            'example' => 'editing',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3E50D480-9765-5CFD-9650-9BACCECA5135',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Total\\": 8,\\n  \\"CurrentPage\\": 1,\\n  \\"ShowSize\\": 50,\\n  \\"Data\\": [\\n    {\\n      \\"Id\\": 22487,\\n      \\"GmtCreate\\": \\"1680228896000\\",\\n      \\"GmtModified\\": \\"1681956830000\\",\\n      \\"UserId\\": 0,\\n      \\"JobId\\": 8888,\\n      \\"OrderId\\": 9349278,\\n      \\"CertId\\": 12073663,\\n      \\"CertDomain\\": \\"www.example.com\\",\\n      \\"CertInstanceId\\": \\"lsn-jzk2h0xz5dmynuphb8@1883\\",\\n      \\"CertName\\": \\"testCertName\\",\\n      \\"ResourceId\\": 1286999,\\n      \\"CloudProduct\\": \\"SLB\\",\\n      \\"ResourceCertId\\": 123,\\n      \\"ResourceDomain\\": \\"www.example.com\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"CloudRegion\\": \\"cn-hangzhou\\",\\n      \\"InstanceId\\": \\"cas-cn-0pp118nuu40b\\",\\n      \\"ListenerId\\": \\"lsn-lhl8y7s1e1ngc3m3zz@81\\",\\n      \\"Port\\": 4431,\\n      \\"DefaultResource\\": true,\\n      \\"CloudName\\": \\"aliyun\\",\\n      \\"NamespaceId\\": \\"32fed52a-4bf7-44f6-955f-e82ada68ef18\\",\\n      \\"Status\\": \\"editing\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"3E50D480-9765-5CFD-9650-9BACCECA5135\\"\\n}","type":"json"}]',
            'title' => '获取部署任务下的Worker任务列表',
        ],
        'DescribeDeploymentJobStatus' => [
            'summary' => '获取部署任务下的Worker任务数。',
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
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '214581',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务ID',
                        'description' => '部署任务ID。此处ID为[CreateDeploymentJob](~~2712234~~)返回的任务**ID**。也可通过[ListDeploymentJob](~~2712223~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '8888',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiDefaultResponse<DeploymentJobStatus>',
                        'description' => 'OpenApiDefaultResponse<DeploymentJobStatus>。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
                            ],
                            'ResourceCount' => [
                                'title' => '部署任务涉及的资源数量',
                                'description' => '部署资源总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '4127',
                            ],
                            'UseCount' => [
                                'description' => '已使用的部署资源总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '300',
                            ],
                            'BuyCount' => [
                                'description' => '购买的部署资源总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '500',
                            ],
                            'WorkerCount' => [
                                'title' => '部署任务（包含回滚任务）总数量',
                                'description' => '当前云产品部署的证书的资源总数，即Worker任务总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'MatchWorkerCount' => [
                                'title' => '部署任务（包含回滚任务）总数量',
                                'description' => '匹配证书的Worker任务总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'SuccessCount' => [
                                'title' => '部署任务（不含回滚任务）成功数量',
                                'description' => 'Worker任务部署（不含回滚任务）成功数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'FailedCount' => [
                                'title' => '部署任务（不含回滚任务）失败数量',
                                'description' => 'Worker任务部署（不含回滚任务）失败数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'RollbackCount' => [
                                'title' => '部署任务回滚任务数量',
                                'description' => 'Worker任务回滚任务数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'RollbackSuccessCount' => [
                                'title' => '部署任务回滚成功数量',
                                'description' => 'Worker任务回滚成功数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'RollbackFailedCount' => [
                                'title' => '部署任务回滚失败数量',
                                'description' => 'Worker任务回滚失败数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'CostCount' => [
                                'title' => '部署任务消耗部署配额数量',
                                'description' => 'Worker任务消耗的部署资源数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'CertCount' => [
                                'title' => '部署任务涉及的证书数量',
                                'description' => '部署任务涉及的证书数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'ProductWorkerCount' => [
                                'title' => '部署任务云产品维度worker数量统计',
                                'description' => '部署任务中已部署的云产品资源数（Worker）统计。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ProductName' => [
                                            'title' => '云产品名称',
                                            'description' => '云产品名称。'."\n"
                                                .'- **CDN**：内容分发网络（仅中国站）'."\n"
                                                .'- **SLB**：传统型负载均衡CLB（仅中国站）'."\n"
                                                .'- **DCDN**：全站加速（仅中国站）'."\n"
                                                .'- **DDOS**：DDos防护（仅中国站）'."\n"
                                                .'- **LIVE**：视频直播（仅中国站）'."\n"
                                                .'- **webHosting**：云虚拟主机（仅中国站）'."\n"
                                                .'- **VOD**：视频点播（仅中国站）'."\n"
                                                .'- **CR**：容器镜像服务（仅中国站）'."\n"
                                                .'- **ALB**：应用负载均衡'."\n"
                                                .'- **APIGateway**：API网关'."\n"
                                                .'- **FC**：函数计算'."\n"
                                                .'- **GA**：全球加速'."\n"
                                                .'- **MSE**：微服务引擎'."\n"
                                                .'- **NLB**：网络型负载均衡'."\n"
                                                .'- **OSS**：对象存储'."\n"
                                                .'- **SAE**：Serverless 应用引擎'."\n"
                                                .'- **TencentCDN**：腾讯CDN'."\n"
                                                .'- **WAF**：Web应用防火墙',
                                            'type' => 'string',
                                            'example' => 'NLB',
                                        ],
                                        'Count' => [
                                            'title' => 'worker数量',
                                            'description' => '部署任务下的某个云产品的资源总数。',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\",\\n  \\"ResourceCount\\": 4127,\\n  \\"UseCount\\": 300,\\n  \\"BuyCount\\": 500,\\n  \\"WorkerCount\\": 20,\\n  \\"MatchWorkerCount\\": 20,\\n  \\"SuccessCount\\": 20,\\n  \\"FailedCount\\": 20,\\n  \\"RollbackCount\\": 20,\\n  \\"RollbackSuccessCount\\": 20,\\n  \\"RollbackFailedCount\\": 20,\\n  \\"CostCount\\": 20,\\n  \\"CertCount\\": 20,\\n  \\"ProductWorkerCount\\": [\\n    {\\n      \\"ProductName\\": \\"NLB\\",\\n      \\"Count\\": 2\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取部署任务下的Worker任务数',
        ],
        'UpdateDeploymentJob' => [
            'summary' => '更新部署任务。',
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
                'abilityTreeCode' => '214599',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务ID',
                        'description' => '部署任务ID。此处ID为CreateDeploymentJob返回的任务ID。也可通过ListDeploymentJob接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '8888',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务名称',
                        'description' => '部署任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cert-1',
                    ],
                ],
                [
                    'name' => 'CertIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '证书IDs',
                        'description' => '证书ID，多个证书ID用半角逗号（,）分隔。此处ID为[ListUserCertificateOrder](~~455804~~)返回的**CertificateId**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '9957285,12067351,12304338,12342649',
                    ],
                ],
                [
                    'name' => 'ResourceIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源Ids',
                        'description' => '云产品资源ID。多个资源ID用半角逗号（,）分隔。此处ID为[ListCloudResources](~~2712230~~)返回的主键**Id**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '9957285,12067351,12304338,12342649',
                    ],
                ],
                [
                    'name' => 'ContactIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '联系人IDs',
                        'description' => '联系人ID。多个联系人ID用半角逗号（,）分隔。此处ID为[ListContact](~~2712221~~)返回的主键**Id**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '9957285,12067351,12304338,12342649',
                    ],
                ],
                [
                    'name' => 'ScheduleTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务调度时间',
                        'description' => '设置任务开始调度的时间（Unix时间戳）。如果不设置，默认创建任务后立即执行部署。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1606482979000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiDefaultResponse<UpdateDeploymentResult>',
                        'description' => 'OpenApiDefaultResponse<UpdateDeploymentResult>。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '082FAB35-6AB9-4FD5-8750-D36673548E76',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"082FAB35-6AB9-4FD5-8750-D36673548E76\\"\\n}","type":"json"}]',
            'title' => '更新部署任务',
        ],
        'ListDeploymentJobResource' => [
            'summary' => '获取部署任务的云产品资源列表。',
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '214583',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务ID',
                        'description' => '部署任务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '8888',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiDefaultResponse<List<CloudResource>>',
                        'description' => 'OpenApiDefaultResponse<List<CloudResource>>。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '请求接口返回的数据。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '部署任务资源对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'title' => '云资源ID',
                                            'description' => '云产品资源ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '20979',
                                        ],
                                        'GmtCreate' => [
                                            'title' => '数据创建时间',
                                            'description' => '同步资源创建时间（秒，时间戳格式）。',
                                            'type' => 'string',
                                            'example' => '1673423339000',
                                        ],
                                        'GmtModified' => [
                                            'title' => '数据更新时间',
                                            'description' => '同步资源最近一次修改时间（秒，时间戳格式）。',
                                            'type' => 'string',
                                            'example' => '1681956830000',
                                        ],
                                        'CloudProduct' => [
                                            'title' => '云产品',
                                            'description' => '云产品。'."\n"
                                                .'- **CDN**：内容分发网络（仅中国站）'."\n"
                                                .'- **SLB**：传统型负载均衡CLB（仅中国站）'."\n"
                                                .'- **DCDN**：全站加速（仅中国站）'."\n"
                                                .'- **DDOS**：DDos防护（仅中国站）'."\n"
                                                .'- **LIVE**：视频直播（仅中国站）'."\n"
                                                .'- **webHosting**：云虚拟主机（仅中国站）'."\n"
                                                .'- **VOD**：视频点播（仅中国站）'."\n"
                                                .'- **CR**：容器镜像服务（仅中国站）'."\n"
                                                .'- **ALB**：应用负载均衡'."\n"
                                                .'- **APIGateway**：API网关'."\n"
                                                .'- **FC**：函数计算'."\n"
                                                .'- **GA**：全球加速'."\n"
                                                .'- **MSE**：微服务引擎'."\n"
                                                .'- **NLB**：网络型负载均衡'."\n"
                                                .'- **OSS**：对象存储'."\n"
                                                .'- **SAE**：Serverless 应用引擎'."\n"
                                                .'- **TencentCDN**：腾讯CDN'."\n"
                                                .'- **WAF**：Web应用防火墙',
                                            'type' => 'string',
                                            'example' => 'SLB',
                                        ],
                                        'UserId' => [
                                            'title' => '用户ID',
                                            'description' => '阿里云账号ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1666884372******',
                                        ],
                                        'CertId' => [
                                            'title' => '云资源绑定证书ID',
                                            'description' => '云产品资源绑定的证书ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '11599949',
                                        ],
                                        'CertName' => [
                                            'title' => '云资源绑定证书名称',
                                            'description' => '云产品资源绑定的证书名称。',
                                            'type' => 'string',
                                            'example' => 'sc-SSL',
                                        ],
                                        'CertEndTime' => [
                                            'title' => '云资源绑定证书结束日期',
                                            'description' => '云产品资源绑定证书的结束日期（秒，时间戳格式）。',
                                            'type' => 'string',
                                            'example' => '1681956830000',
                                        ],
                                        'CertStartTime' => [
                                            'title' => '云资源绑定证书开始日期',
                                            'description' => '云产品资源绑定证书的开始日期（秒，时间戳格式）。',
                                            'type' => 'string',
                                            'example' => '1681956830000',
                                        ],
                                        'Domain' => [
                                            'title' => '云资源绑定域名',
                                            'description' => '云产品资源绑定的域名。',
                                            'type' => 'string',
                                            'example' => 'aliyundoc.com',
                                        ],
                                        'InstanceId' => [
                                            'title' => '云资源实例ID',
                                            'description' => '云产品资源实例ID。'."\n"
                                                .'> 仅部署SLB、NLB、ALB和GA才会返回该参数。',
                                            'type' => 'string',
                                            'example' => 'cas-cn-m7r1qocw91at',
                                        ],
                                        'ListenerId' => [
                                            'title' => '云资源监听ID',
                                            'description' => '云产品资源监听ID。'."\n"
                                                .'> 仅部署SLB、NLB、ALB和GA才会返回该参数。',
                                            'type' => 'string',
                                            'example' => 'lsn-vwdff0q20poq5xazb9@443',
                                        ],
                                        'ListenerPort' => [
                                            'title' => '云资源监听端口',
                                            'description' => '云产品资源监听端口。'."\n"
                                                .'> 仅部署SLB、NLB、ALB和GA才会返回该参数。',
                                            'type' => 'string',
                                            'example' => '8047',
                                        ],
                                        'EnableHttps' => [
                                            'title' => '云资源开启HTTPS',
                                            'description' => '云产品资源是否开启HTTPS。'."\n"
                                                .'- **1**：开启'."\n"
                                                .'- **0**：未开启',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'DefaultResource' => [
                                            'title' => '云资源是否为默认资源',
                                            'description' => '云产品资源是否为默认资源。'."\n"
                                                .'- **1**：默认资源'."\n"
                                                .'- **0**：非默认资源'."\n"
                                                .'> 仅部署SLB、NLB、ALB和GA才会返回该参数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Remark' => [
                                            'title' => '其他',
                                            'description' => '云产品资源的其他相关元数据。',
                                            'type' => 'string',
                                            'example' => '{\\"camera_model\\":\\"GIFSHOW [1267087617][OnePlus',
                                        ],
                                        'Status' => [
                                            'title' => '云资源状态',
                                            'description' => '同步的云产品资源状态。',
                                            'type' => 'string',
                                            'example' => 'online',
                                        ],
                                        'UseSsl' => [
                                            'title' => '使用SSL',
                                            'description' => '是否使用阿里云SSL证书。'."\n"
                                                .'- **1**：使用'."\n"
                                                .'- **0**：未使用'."\n"
                                                .'> 仅多云部署才会返回该参数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'RegionId' => [
                                            'title' => '云资源RegionID',
                                            'description' => '同步的云产品资源地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'CloudName' => [
                                            'title' => '云资源供应商：',
                                            'description' => '云产品资源供应商。'."\n"
                                                ."\n"
                                                .'- **aliyun**：阿里云'."\n"
                                                .'- **Tencent**：腾讯云',
                                            'type' => 'string',
                                            'example' => 'aliyun',
                                        ],
                                        'CloudRegion' => [
                                            'title' => '云资源在云供应商的RegionID',
                                            'description' => '云产品资源在云供应商的地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'CloudAccessId' => [
                                            'title' => '云资源访问ID',
                                            'description' => '云资源集访问的密钥ID。'."\n"
                                                .'> 仅多云部署才会返回该参数。',
                                            'type' => 'string',
                                            'example' => '1234',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Id\\": 20979,\\n      \\"GmtCreate\\": \\"1673423339000\\",\\n      \\"GmtModified\\": \\"1681956830000\\",\\n      \\"CloudProduct\\": \\"SLB\\",\\n      \\"UserId\\": 0,\\n      \\"CertId\\": 11599949,\\n      \\"CertName\\": \\"sc-SSL\\",\\n      \\"CertEndTime\\": \\"1681956830000\\",\\n      \\"CertStartTime\\": \\"1681956830000\\",\\n      \\"Domain\\": \\"aliyundoc.com\\",\\n      \\"InstanceId\\": \\"cas-cn-m7r1qocw91at\\",\\n      \\"ListenerId\\": \\"lsn-vwdff0q20poq5xazb9@443\\",\\n      \\"ListenerPort\\": \\"8047\\",\\n      \\"EnableHttps\\": 1,\\n      \\"DefaultResource\\": 0,\\n      \\"Remark\\": \\"{\\\\\\\\\\\\\\"camera_model\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"GIFSHOW [1267087617][OnePlus\\",\\n      \\"Status\\": \\"online\\",\\n      \\"UseSsl\\": 1,\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"CloudName\\": \\"aliyun\\",\\n      \\"CloudRegion\\": \\"cn-hangzhou\\",\\n      \\"CloudAccessId\\": \\"1234\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","type":"json"}]',
            'title' => '获取部署任务的云产品资源列表',
        ],
        'UpdateDeploymentJobStatus' => [
            'summary' => '更新部署任务状态。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '214601',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务ID',
                        'description' => '部署任务ID。此处ID为[CreateDeploymentJob](~~2712234~~)返回的任务**ID**。也可通过[ListDeploymentJob](~~2712223~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '8888',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '目标状态：',
                        'description' => '目标状态。部署任务状态为**部署失败**或**部署成功**，任务状态则不允许变更。查看部署任务状态，请参见[DescribeDeploymentJobStatus](~~2712225~~)。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'pending' => '进入待执行状态',
                            'scheduling' => '立即调度任务',
                            'editing' => '回退到编辑状态',
                        ],
                        'example' => 'editing',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiDefaultResponse<?>',
                        'description' => 'OpenApiDefaultResponse<?>。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '请求接口返回的数据。',
                                'type' => 'any',
                                'example' => '[]',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'EA69E364-5CBB-50E8-BF09-E8CAA396A4F8',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"[]\\",\\n  \\"RequestId\\": \\"EA69E364-5CBB-50E8-BF09-E8CAA396A4F8\\"\\n}","type":"json"}]',
            'title' => '更新部署任务状态',
        ],
        'ListContact' => [
            'summary' => '获取联系人列表。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '214629',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索关键词。例如姓名、邮箱和电话中的关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '186',
                    ],
                ],
                [
                    'name' => 'ShowSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页显示联系人的个数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页，当前页，默认1。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '31C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                            'TotalCount' => [
                                'description' => '搜索总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12',
                            ],
                            'ShowSize' => [
                                'description' => '分页查询时，设置每页显示证书的数量。默认值为**20**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'CurrentPage' => [
                                'description' => '分页查询时，设置当前页面的页码。默认值为**1**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Keyword' => [
                                'description' => '模糊查询关键词。',
                                'type' => 'string',
                                'example' => '186',
                            ],
                            'ContactList' => [
                                'description' => '联系人列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '联系人对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ContactId' => [
                                            'description' => '联系人ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '519580',
                                        ],
                                        'Name' => [
                                            'description' => '联系人姓名。',
                                            'type' => 'string',
                                            'example' => '张三',
                                        ],
                                        'Mobile' => [
                                            'description' => '手机号码。',
                                            'type' => 'string',
                                            'example' => '139****8888',
                                        ],
                                        'MobileStatus' => [
                                            'description' => '手机号码是否被验证。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Email' => [
                                            'description' => '联系人电子邮件地址。',
                                            'type' => 'string',
                                            'example' => 'username@example.com',
                                        ],
                                        'EmailStatus' => [
                                            'description' => '邮件地址是否被通过验证。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Webhooks' => [
                                            'description' => '机器人地址。',
                                            'type' => 'string',
                                            'example' => '[\\"https://open.feishu.cn/open-apis/bot/v2/hook/XXX\\",\\"https://oapi.dingtalk.com/robot/send?access_token=XXX\\",\\"https://qyapi.weixin.qq.com/cgi-bin/webhook/send?key=XXX\\"]',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"31C66C7B-671A-4297-9187-2C4477247A74\\",\\n  \\"TotalCount\\": 12,\\n  \\"ShowSize\\": 20,\\n  \\"CurrentPage\\": 1,\\n  \\"Keyword\\": \\"186\\",\\n  \\"ContactList\\": [\\n    {\\n      \\"ContactId\\": 519580,\\n      \\"Name\\": \\"张三\\",\\n      \\"Mobile\\": \\"139****8888\\",\\n      \\"MobileStatus\\": 1,\\n      \\"Email\\": \\"username@example.com\\",\\n      \\"EmailStatus\\": 1,\\n      \\"Webhooks\\": \\"[\\\\\\\\\\\\\\"https://open.feishu.cn/open-apis/bot/v2/hook/XXX\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"https://oapi.dingtalk.com/robot/send?access_token=XXX\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"https://qyapi.weixin.qq.com/cgi-bin/webhook/send?key=XXX\\\\\\\\\\\\\\"]\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取联系人列表',
        ],
        'DescribeCloudResourceStatus' => [
            'summary' => '您可通过本接口获取通过多云部署任务，部署证书到三方云产品的资源数。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '214598',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SecretId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云资源集访问的密钥ID。'."\n"
                            .'> 此ID可通过调用[ListCloudAccess](~~2712219~~)获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AKID9AHG6iCZlncN7yPmOsQ1X******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiDefaultResponse<List<CloudResourceCount>>',
                        'description' => 'OpenApiDefaultResponse<List<CloudResourceCount>>。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '请求接口返回的数据。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CloudName' => [
                                            'title' => '云服务供应商',
                                            'description' => '云服务供应商。',
                                            'type' => 'string',
                                            'example' => 'aliyun',
                                        ],
                                        'CloudProduct' => [
                                            'title' => '云产品',
                                            'description' => '云产品。',
                                            'type' => 'string',
                                            'example' => 'OSS',
                                        ],
                                        'TotalCount' => [
                                            'title' => '用户资源总数',
                                            'description' => '部署证书的云产品资源总数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '09470F19-CEE8-5C63-BF2C-02B5E3F07A17',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"CloudName\\": \\"aliyun\\",\\n      \\"CloudProduct\\": \\"OSS\\",\\n      \\"TotalCount\\": 2\\n    }\\n  ],\\n  \\"RequestId\\": \\"09470F19-CEE8-5C63-BF2C-02B5E3F07A17\\"\\n}","type":"json"}]',
            'title' => '获取多云部署的云产品资源数',
        ],
        'ListCloudResources' => [
            'summary' => '您可以通过本接口获取云厂商及对应云产品的证书资源列表。',
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
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '214597',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CloudName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '云厂商:',
                        'description' => '云厂商。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Tencent' => '腾讯云',
                            'aliyun' => '阿里云',
                        ],
                        'example' => 'Tencent',
                    ],
                ],
                [
                    'name' => 'CloudProduct',
                    'in' => 'query',
                    'schema' => [
                        'title' => '云产品：',
                        'description' => '云产品。'."\n"
                            .'目前Tencent仅支持CDN。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SLB',
                    ],
                ],
                [
                    'name' => 'SecretId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '云资源访问ID',
                        'description' => '云资源访问密钥ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '21',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'title' => '云资源绑定域名',
                        'description' => '云资源绑定域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cert-instanceId',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置当前页面的页码。默认值为**1**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ShowSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页包含已被吊销证书的数量。默认值为**20**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiPaginationResponse<CloudResource>',
                        'description' => 'OpenApiPaginationResponse<CloudResource>。',
                        'type' => 'object',
                        'properties' => [
                            'Total' => [
                                'description' => '总记录条数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '440',
                            ],
                            'CurrentPage' => [
                                'description' => '分页，当前页，默认1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'ShowSize' => [
                                'description' => '分页查询时，设置每页包含CA证书的数量。默认值为**20**。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'Data' => [
                                'description' => '请求接口返回的数据。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'title' => '云资源ID',
                                            'description' => '云产品资源ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2356',
                                        ],
                                        'GmtCreate' => [
                                            'title' => '数据创建时间',
                                            'description' => '同步资源创建时间（秒，时间戳格式）。',
                                            'type' => 'string',
                                            'example' => '1673423339000',
                                        ],
                                        'GmtModified' => [
                                            'title' => '数据更新时间',
                                            'description' => '同步资源最近一次修改时间（秒，时间戳格式）。',
                                            'type' => 'string',
                                            'example' => '1696911946000',
                                        ],
                                        'CloudProduct' => [
                                            'title' => '云产品',
                                            'description' => '云产品。',
                                            'type' => 'string',
                                            'example' => 'ALB',
                                        ],
                                        'UserId' => [
                                            'title' => '用户ID',
                                            'description' => '阿里云账号ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1666884372******',
                                        ],
                                        'CertId' => [
                                            'title' => '云资源绑定证书ID',
                                            'description' => '云产品资源绑定的证书ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '12433121',
                                        ],
                                        'CertName' => [
                                            'title' => '云资源绑定证书名称',
                                            'description' => '云产品资源绑定的证书名称。',
                                            'type' => 'string',
                                            'example' => 'shop.amsaudio.cn',
                                        ],
                                        'CertEndTime' => [
                                            'title' => '云资源绑定证书结束日期',
                                            'description' => '云产品资源绑定证书的结束日期（秒，时间戳格式）。',
                                            'type' => 'string',
                                            'example' => '1737795520000',
                                        ],
                                        'CertStartTime' => [
                                            'title' => '云资源绑定证书开始日期',
                                            'description' => '云产品资源绑定证书的开始日期（秒，时间戳格式）。',
                                            'type' => 'string',
                                            'example' => '1706259520000',
                                        ],
                                        'Domain' => [
                                            'title' => '云资源绑定域名',
                                            'description' => '云产品资源绑定的域名。',
                                            'type' => 'string',
                                            'example' => 'www.tkgeo.ru',
                                        ],
                                        'InstanceId' => [
                                            'title' => '云资源实例ID',
                                            'description' => '云产品资源实例ID。'."\n"
                                                .'> 仅部署SLB、NLB、ALB和GA才会返回该参数。',
                                            'type' => 'string',
                                            'example' => 'nlb-rv05agjc97ovm14il5',
                                        ],
                                        'ListenerId' => [
                                            'title' => '云资源监听ID',
                                            'description' => '云产品资源监听ID。'."\n"
                                                .'> 仅部署SLB、NLB、ALB和GA才会返回该参数。',
                                            'type' => 'string',
                                            'example' => 'lsn-jiugof6t23et66lsnc@443',
                                        ],
                                        'ListenerPort' => [
                                            'title' => '云资源监听端口',
                                            'description' => '云产品资源监听端口。'."\n"
                                                .'> 仅部署SLB、NLB、ALB和GA才会返回该参数。',
                                            'type' => 'string',
                                            'example' => '8047',
                                        ],
                                        'EnableHttps' => [
                                            'title' => '云资源开启HTTPS',
                                            'description' => '云产品资源是否开启HTTPS。'."\n"
                                                .'- **1**：开启'."\n"
                                                .'- **0**：未开启',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'DefaultResource' => [
                                            'title' => '云资源是否为默认资源',
                                            'description' => '云产品资源是否为默认资源。'."\n"
                                                .'- **1**：默认资源'."\n"
                                                .'- **0**：非默认资源'."\n"
                                                .'> 仅部署SLB、NLB、ALB和GA才会返回该参数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'Status' => [
                                            'title' => '云资源状态',
                                            'description' => '同步的云产品资源状态。',
                                            'type' => 'string',
                                            'example' => 'BUY',
                                        ],
                                        'UseSsl' => [
                                            'title' => '使用SSL',
                                            'description' => '是否使用阿里云SSL证书。'."\n"
                                                .'- **1**：使用'."\n"
                                                .'- **0**：未使用'."\n"
                                                .'> 仅多云部署才会返回该参数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'RegionId' => [
                                            'title' => '云资源RegionID',
                                            'description' => '同步的云产品资源地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'CloudName' => [
                                            'title' => '云资源供应商：',
                                            'description' => '云产品资源供应商。'."\n"
                                                .'- **aliyun**：阿里云'."\n"
                                                .'- **Tencent**：腾讯云',
                                            'type' => 'string',
                                            'example' => 'aliyun',
                                        ],
                                        'CloudRegion' => [
                                            'title' => '云资源在云供应商的RegionID',
                                            'description' => '云产品资源在云供应商的地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou'."\n",
                                        ],
                                        'CloudAccessId' => [
                                            'title' => '云资源访问ID',
                                            'description' => '云资源集访问的密钥ID。'."\n"
                                                .'> 仅多云部署才会返回该参数。',
                                            'type' => 'string',
                                            'example' => '1234',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '12345678-1234-1234-1234-123456789ABC',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Total\\": 440,\\n  \\"CurrentPage\\": 1,\\n  \\"ShowSize\\": 20,\\n  \\"Data\\": [\\n    {\\n      \\"Id\\": 2356,\\n      \\"GmtCreate\\": \\"1673423339000\\",\\n      \\"GmtModified\\": \\"1696911946000\\",\\n      \\"CloudProduct\\": \\"ALB\\",\\n      \\"UserId\\": 0,\\n      \\"CertId\\": 12433121,\\n      \\"CertName\\": \\"shop.amsaudio.cn\\",\\n      \\"CertEndTime\\": \\"1737795520000\\",\\n      \\"CertStartTime\\": \\"1706259520000\\",\\n      \\"Domain\\": \\"www.tkgeo.ru\\",\\n      \\"InstanceId\\": \\"nlb-rv05agjc97ovm14il5\\",\\n      \\"ListenerId\\": \\"lsn-jiugof6t23et66lsnc@443\\",\\n      \\"ListenerPort\\": \\"8047\\",\\n      \\"EnableHttps\\": 1,\\n      \\"DefaultResource\\": 0,\\n      \\"Status\\": \\"BUY\\",\\n      \\"UseSsl\\": 1,\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"CloudName\\": \\"aliyun\\",\\n      \\"CloudRegion\\": \\"cn-hangzhou\\\\n\\",\\n      \\"CloudAccessId\\": \\"1234\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"12345678-1234-1234-1234-123456789ABC\\"\\n}","type":"json"}]',
            'title' => '获取云厂商及对应云产品的证书列表',
        ],
        'ListDeploymentJobCert' => [
            'summary' => '创建部署任务后，可通过本接口获取部署到云产品的证书基本信息，例如证书实例ID、证书类型、证书名称等。',
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
                'operationType' => 'list',
                'abilityTreeCode' => '214582',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务ID',
                        'description' => '部署任务ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '8888',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiDefaultResponse<List<DeploymentJobCertInfo>>',
                        'description' => 'OpenApiDefaultResponse<List<DeploymentJobCertInfo>>。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '请求接口返回的数据。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '证书对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'CertId' => [
                                            'title' => '证书ID',
                                            'description' => '证书ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '11174100',
                                        ],
                                        'OrderId' => [
                                            'title' => '订单ID',
                                            'description' => '订单ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '6127067',
                                        ],
                                        'CertInstanceId' => [
                                            'title' => '证书实例ID',
                                            'description' => '证书实例ID。',
                                            'type' => 'string',
                                            'example' => 'cas-ivauto-2crxzi',
                                        ],
                                        'CertName' => [
                                            'title' => '证书名称',
                                            'description' => '证书名称。',
                                            'type' => 'string',
                                            'example' => 'edkog.shop',
                                        ],
                                        'CommonName' => [
                                            'title' => '证书CommonName',
                                            'description' => '证书CommonName。',
                                            'type' => 'string',
                                            'example' => 'vaultwebhook.vault-webhook.svc',
                                        ],
                                        'Sans' => [
                                            'title' => '证书SANs',
                                            'description' => '证书SANs。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '证书扩展域名。',
                                                'type' => 'string',
                                                'example' => 'aliyundoc.com',
                                            ],
                                        ],
                                        'Algorithm' => [
                                            'title' => '证书公钥算法',
                                            'description' => '证书公钥算法。',
                                            'type' => 'string',
                                            'example' => 'RSA',
                                        ],
                                        'NotBeforeTime' => [
                                            'title' => '证书有效期NotBefore',
                                            'description' => '证书有效期NotBefore。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1683625266108',
                                        ],
                                        'NotAfterTime' => [
                                            'title' => '证书有效期NotAfter',
                                            'description' => '证书有效期NotAfter。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1683625266108',
                                        ],
                                        'Month' => [
                                            'title' => '证书申请Month',
                                            'description' => '证书申请月。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '12',
                                        ],
                                        'StatusCode' => [
                                            'title' => '证书状态Code',
                                            'description' => '证书状态码。',
                                            'type' => 'string',
                                            'example' => 'issued',
                                        ],
                                        'CertType' => [
                                            'title' => '证书类型',
                                            'description' => '证书类型。',
                                            'type' => 'string',
                                            'example' => 'DV',
                                        ],
                                        'CertOrderType' => [
                                            'title' => '证书类型',
                                            'description' => '证书订单类型。',
                                            'type' => 'string',
                                            'example' => 'buy',
                                        ],
                                        'IsTrustee' => [
                                            'title' => 'isTrustee',
                                            'description' => '是否可信。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"CertId\\": 11174100,\\n      \\"OrderId\\": 6127067,\\n      \\"CertInstanceId\\": \\"cas-ivauto-2crxzi\\",\\n      \\"CertName\\": \\"edkog.shop\\",\\n      \\"CommonName\\": \\"vaultwebhook.vault-webhook.svc\\",\\n      \\"Sans\\": [\\n        \\"aliyundoc.com\\"\\n      ],\\n      \\"Algorithm\\": \\"RSA\\",\\n      \\"NotBeforeTime\\": 1683625266108,\\n      \\"NotAfterTime\\": 1683625266108,\\n      \\"Month\\": 12,\\n      \\"StatusCode\\": \\"issued\\",\\n      \\"CertType\\": \\"DV\\",\\n      \\"CertOrderType\\": \\"buy\\",\\n      \\"IsTrustee\\": true\\n    }\\n  ],\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","type":"json"}]',
            'title' => '获取部署任务的证书详情',
        ],
        'UpdateWorkerResourceStatus' => [
            'summary' => '您可以通过该接口立即回滚或执行部署任务下的Worker任务。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '214606',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务ID',
                        'description' => '部署任务ID。此处ID为[CreateDeploymentJob](~~2712234~~)返回的任务**ID**。也可通过[ListDeploymentJob](~~2712223~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '8888',
                    ],
                ],
                [
                    'name' => 'WorkerId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务workerID',
                        'description' => '部署任务Worker ID。此处ID可通过[ListWorkerResource](~~2712224~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1234',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '目标状态：',
                        'description' => '目标状态。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'rollback' => '立即调度回滚',
                            'scheduling' => '立即调度执行',
                        ],
                        'example' => 'scheduling',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiDefaultResponse<?>',
                        'description' => 'OpenApiDefaultResponse<?>。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '请求接口返回的数据。',
                                'type' => 'any',
                                'example' => '[]',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '12345678-1234-1234-1234-123456789ABC',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"[]\\",\\n  \\"RequestId\\": \\"12345678-1234-1234-1234-123456789ABC\\"\\n}","type":"json"}]',
            'title' => '更新部署任务下的Worker任务状态',
        ],
        'DeleteWorkerResource' => [
            'summary' => '删除部署任务worker（预览）。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '214607',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务ID',
                        'description' => '部署任务ID。此处ID为[CreateDeploymentJob](~~2712234~~)返回的任务**ID**。也可通过[ListDeploymentJob](~~2712223~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '8888',
                    ],
                ],
                [
                    'name' => 'WorkerId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务workerID',
                        'description' => '部署任务Worker ID。此处ID可通过[ListWorkerResource](~~2712224~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '13',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiDefaultResponse<?>',
                        'description' => 'OpenApiDefaultResponse<?>。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'EA69E364-5CBB-50E8-BF09-E8CAA396A4F8',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EA69E364-5CBB-50E8-BF09-E8CAA396A4F8\\"\\n}","type":"json"}]',
            'title' => '删除部署任务下的Worker任务',
        ],
        'DeleteDeploymentJob' => [
            'summary' => '删除部署任务。',
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
                'abilityTreeCode' => '214604',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务ID',
                        'description' => '部署任务ID。此处ID为[CreateDeploymentJob](~~2712234~~)返回的任务**ID**。也可通过[ListDeploymentJob](~~2712223~~)接口获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '8888',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiDefaultResponse<?>',
                        'description' => 'OpenApiDefaultResponse<?>。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","type":"json"}]',
            'title' => '删除部署任务',
        ],
        'ListCloudAccess' => [
            'summary' => '多云部署获取AK列表。',
            'methods' => [
                'get',
                'post',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '214631',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SecretId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云资源集访问的密钥ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '276',
                    ],
                ],
                [
                    'name' => 'CloudName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云服务供应商。目前仅支持腾讯云（**Tencent**）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Tencent',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页，当前页，默认1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ShowSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时，设置每页显示证书的数量。可选**10**、**20**、**50**。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'D3F1FA43-1C26-50A2-8F0F-7A03851DBB46',
                            ],
                            'TotalCount' => [
                                'description' => '查询到符合条件的AK总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '23',
                            ],
                            'ShowSize' => [
                                'description' => '分页查询时，每页显示的数据。如果未传入ShowSize则不返回。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'CurrentPage' => [
                                'description' => '默认为当前页。如果未传入CurrentPage则不返回。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'CloudAccessList' => [
                                'description' => '列表集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '云产品对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AccessId' => [
                                            'description' => 'AK主键ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '888',
                                        ],
                                        'CloudName' => [
                                            'description' => '云服务供应商。',
                                            'type' => 'string',
                                            'example' => 'Tencent',
                                        ],
                                        'SecretId' => [
                                            'description' => '云资源集访问的密钥ID。',
                                            'type' => 'string',
                                            'example' => 'LTAI4G5KAZCJQ******',
                                        ],
                                        'ServiceStatus' => [
                                            'description' => '服务状态。nomal表示账号正常。',
                                            'type' => 'string',
                                            'example' => 'normal',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D3F1FA43-1C26-50A2-8F0F-7A03851DBB46\\",\\n  \\"TotalCount\\": 23,\\n  \\"ShowSize\\": 20,\\n  \\"CurrentPage\\": 1,\\n  \\"CloudAccessList\\": [\\n    {\\n      \\"AccessId\\": 888,\\n      \\"CloudName\\": \\"Tencent\\",\\n      \\"SecretId\\": \\"LTAI4G5KAZCJQ******\\",\\n      \\"ServiceStatus\\": \\"normal\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取多云部署任务AK列表',
        ],
        'CreateDeploymentJob' => [
            'summary' => 'SSL证书签发完成后，您可以通过该接口创建不同类型的证书部署任务，立即或手动指定任务部署时间，将SSL证书部署到阿里云产品或三方云产品，为您的业务网站提供可信身份认证和安全数据传输。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '214600',
                'abilityTreeNodes' => [
                    'FEATUREcasDX3LGS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部署任务名称',
                        'description' => '部署任务名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'jobName',
                    ],
                ],
                [
                    'name' => 'JobType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务类型：',
                        'description' => '任务类型。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'cloud' => '多云部署任务',
                            'user' => '云产品部署任务（不含云服务器）',
                        ],
                        'example' => 'user',
                    ],
                ],
                [
                    'name' => 'CertIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '证书IDs',
                        'description' => '证书ID，多个证书ID用半角逗号（,）分隔。此处ID为[ListUserCertificateOrder](~~455804~~)返回的**CertificateId**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12342649,12304338,12067351,9957285',
                    ],
                ],
                [
                    'name' => 'ResourceIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源Ids',
                        'description' => '云产品资源ID。多个资源ID用半角逗号（,）分隔。此处ID为[ListCloudResources](~~2712230~~)返回的主键**Id**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6591316,6585549,6190248,5811894,5775176,5772504',
                    ],
                ],
                [
                    'name' => 'ContactIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '联系人IDs',
                        'description' => '联系人ID。多个联系人ID用半角逗号（,）分隔。此处ID为[ListContact](~~2712221~~)返回的主键**Id**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1,2',
                    ],
                ],
                [
                    'name' => 'ScheduleTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务调度时间',
                        'description' => '设置任务开始调度的时间（Unix时间戳）。如果不设置，默认创建任务后立即执行部署。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1706613560008',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OpenApiDefaultResponse<CreateDeploymentResult>',
                        'description' => 'OpenApiDefaultResponse<CreateDeploymentResult>。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                            'JobId' => [
                                'title' => '部署任务ID',
                                'description' => '部署任务ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8888',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\",\\n  \\"JobId\\": 8888\\n}","type":"json"}]',
            'title' => '创建部署任务',
        ],
        'DescribeCertificateState' => [
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
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的证书申请订单的ID。'."\n"
                            ."\n"
                            .'> 此ID可通过调用[ListUserCertificateOrder](~~455804~~)获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123451222',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'description' => '证书申请订单的状态。取值：'."\n"
                                    ."\n"
                                    .'- **domain_verify**：**待验证**，表示证书申请提交后，您还没有完成域名验证。'."\n"
                                    ."\n"
                                    .'    > 您在提交证书申请后，必须手动完成域名所有权验证，证书申请才可以进入审核环节。如果您还没有完成域名验证，则可以参照本接口的返回数据，完成域名验证。'."\n"
                                    ."\n"
                                    .'- **process**：**审核中**，表示证书申请处于CA中心审核环节。'."\n"
                                    .'- **verify_fail**：**审核失败**，表示证书申请审核失败。'."\n"
                                    ."\n"
                                    .'    > 审核失败可能是因为您提交的证书申请信息不正确，建议您调用[DeleteCertificateRequest](~~455294~~)删除审核失败的订单（已删除订单不会消耗证书资源包个数），并重新提交证书申请。'."\n"
                                    ."\n"
                                    .'- **certificate**：**已签发**，表示证书已经签发。'."\n"
                                    ."\n"
                                    .'- **payed**：**待申请**，表示待申请证书。'."\n"
                                    ."\n"
                                    .'- **unknow**：**状态未知**。',
                                'type' => 'string',
                                'example' => 'domain_verify',
                            ],
                            'Domain' => [
                                'description' => '使用文件验证方式进行域名验证时，待验证的域名。您需要连接该域名对应的服务器，并在服务器上创建指定的文件（即**Uri**）。'."\n"
                                    ."\n"
                                    .'> 仅当**Type**取值为**domain_verify**（表示域名验证环节）且**ValidateType**取值为**FILE**（表示验证方式为文件验证）时，才会返回该参数。',
                                'type' => 'string',
                                'example' => 'www.example.com',
                            ],
                            'RecordType' => [
                                'description' => '使用DNS验证方式进行域名验证时，您需要添加的解析记录的类型。取值：'."\n"
                                    ."\n"
                                    .'- **TXT**：表示文本记录。'."\n"
                                    .'- **CNAME**：表示别名记录。'."\n"
                                    ."\n"
                                    .'> 仅当**Type**取值为**domain_verify**（表示域名验证环节）且**ValidateType**取值为**DNS**（表示验证方式为DNS验证）时，才会返回该参数。',
                                'type' => 'string',
                                'example' => 'TXT',
                            ],
                            'Certificate' => [
                                'description' => '证书内容（PEM格式）。关于PEM格式的更多介绍以及如何进行证书格式转换，请参见[主流数字证书都有哪些格式？](~~42214~~)。'."\n"
                                    ."\n"
                                    .'> 仅当**Type**取值为**certificate**（表示证书已经签发）时，才会返回该参数。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE----- …… -----END CERTIFICATE-----',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '082FAB35-6AB9-4FD5-8750-D36673548E76',
                            ],
                            'RecordDomain' => [
                                'description' => '使用DNS验证方式进行域名验证时，您需要操作的主机记录。'."\n"
                                    ."\n"
                                    .'> 仅当**Type**取值为**domain_verify**（表示域名验证环节）且**ValidateType**取值为**DNS**（表示验证方式为DNS验证）时，才会返回该参数。',
                                'type' => 'string',
                                'example' => '_dnsauth',
                            ],
                            'PrivateKey' => [
                                'description' => '证书私钥内容（PEM格式）。关于PEM格式的更多介绍以及如何进行证书格式转换，请参见[主流数字证书都有哪些格式？](~~42214~~)。'."\n"
                                    ."\n"
                                    .'> 仅当**Type**取值为**certificate**（表示证书已经签发）时，才会返回该参数。',
                                'type' => 'string',
                                'example' => '-----BEGIN RSA PRIVATE KEY-----…… -----END RSA PRIVATE KEY-----',
                            ],
                            'ValidateType' => [
                                'description' => '提交证书申请时选择的域名验证方式。取值：'."\n"
                                    ."\n"
                                    .'- **DNS**： 表示DNS验证。通过在域名的DNS管理平台为域名添加指定的DNS解析记录，验证域名的所有权。'."\n"
                                    .'- **FILE**：表示文件验证。通过在域名服务器上创建指定的文件，验证域名的所有权。'."\n"
                                    ."\n"
                                    .'> 仅当**Type**取值为**domain_verify**（表示域名验证环节），才会返回该参数。',
                                'type' => 'string',
                                'example' => 'FILE',
                            ],
                            'RecordValue' => [
                                'description' => '使用DNS验证方式进行域名验证时，您需要添加的解析记录的记录值。'."\n"
                                    ."\n"
                                    .'> 仅当**Type**取值为**domain_verify**（表示域名验证环节）且**ValidateType**取值为**DNS**（表示验证方式为DNS验证）时，才会返回该参数。',
                                'type' => 'string',
                                'example' => '20200420000000223erigacv46uhaubchcm0o7spxi7i2isvjq59mlx9lucnkqcy',
                            ],
                            'Content' => [
                                'description' => '使用文件验证方式进行域名验证时，您需要在新创建文件中写入的内容。'."\n"
                                    ."\n"
                                    .'> 仅当**Type**取值为**domain_verify**（表示域名验证环节）且**ValidateType**取值为**FILE**（表示验证方式为文件验证）时，才会返回该参数。',
                                'type' => 'string',
                                'example' => 'http://example.com/.well-known/pki-validation/fileauth.txt',
                            ],
                            'Uri' => [
                                'description' => '使用文件验证方式进行域名验证时，您需要在域名服务器中创建的文件。**Uri**包含文件路径及名称。'."\n"
                                    ."\n"
                                    .'> 仅当**Type**取值为**domain_verify**（表示域名验证环节）且**ValidateType**取值为**FILE**（表示验证方式为文件验证）时，才会返回该参数。',
                                'type' => 'string',
                                'example' => '/.well-known/pki-validation/fileauth.txt',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Type\\": \\"domain_verify\\",\\n  \\"Domain\\": \\"www.example.com\\",\\n  \\"RecordType\\": \\"TXT\\",\\n  \\"Certificate\\": \\"-----BEGIN CERTIFICATE----- …… -----END CERTIFICATE-----\\",\\n  \\"RequestId\\": \\"082FAB35-6AB9-4FD5-8750-D36673548E76\\",\\n  \\"RecordDomain\\": \\"_dnsauth\\",\\n  \\"PrivateKey\\": \\"-----BEGIN RSA PRIVATE KEY-----…… -----END RSA PRIVATE KEY-----\\",\\n  \\"ValidateType\\": \\"FILE\\",\\n  \\"RecordValue\\": \\"20200420000000223erigacv46uhaubchcm0o7spxi7i2isvjq59mlx9lucnkqcy\\",\\n  \\"Content\\": \\"http://example.com/.well-known/pki-validation/fileauth.txt\\",\\n  \\"Uri\\": \\"/.well-known/pki-validation/fileauth.txt\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeCertificateStateResponse>\\n  <RequestId>082FAB35-6AB9-4FD5-8750-D36673548E76</RequestId>\\n  <Type>domain_verify</Type>\\n  <ValidateType>FILE</ValidateType>\\n  <Domain>www.example.com</Domain>\\n  <Uri>/.well-known/pki-validation/fileauth.txt</Uri>\\n  <Content>http://example.com/.well-known/pki-validation/fileauth.txt</Content>\\n</DescribeCertificateStateResponse>","errorExample":""}]',
            'title' => '查询DV证书的申请状态',
            'summary' => '查询指定的证书申请订单的状态。',
            'description' => '如果您在提交证书申请后还没有完成域名所有权验证，则调用本接口可以获取完成域名验证所需要的信息；您可以根据返回的域名验证信息，在域名的DNS管理平台（DNS验证方式）或者域名服务器（文件验证方式）上，完成域名验证。'."\n"
                ."\n"
                .'只有当您完成域名验证后，证书申请才会进入CA中心审核环节。CA中心审核通过您的证书申请后，将会为您签发证书。如果证书已经签发，调用本接口可以获取已签发的证书文件和私钥内容。'."\n"
                ."\n"
                .'<props="china">关于使用证书资源包API申请证书的完整流程，请参见[使用API申请证书的流程](~~204741~~)。</props>',
            'requestParamsDescription' => '调用API时，除了本文中该API的请求参数，还需加入阿里云API公共请求参数。'."\n"
                ."\n"
                .'调用API的请求格式，请参见本文**示例**中的请求示例。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateCertificateWithCsrRequest' => [
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
                    'name' => 'Csr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已有的CSR文件的内容。  '."\n"
                            .'CSR文件的密钥类型必须是RSA、ECC算法，且RSA算法的密钥长度必须大于等于2048。关于CSR文件的制作方法，请参见[如何制作CSR文件](~~42218~~)。  <props="china">您也可以在[数字证书管理服务控制台](https://yundunnext.console.aliyun.com/?&p=cas)创建CSR，具体操作，请参见[创建CSR](~~313297~~)。  </props>'."\n"
                            .'CSR（Certificate Signing Request）是证书签名请求文件，包含了您的服务器信息和公司信息。申请证书时需要将您证书的CSR文件提交给CA认证中心审核，CA中心对CSR文件进行根证书私钥签名后，会生成证书公钥文件（即签发给您的SSL证书）。'."\n"
                            ."\n"
                            .'> CSR中的**CN**字段表示证书绑定的域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '-----BEGIN CERTIFICATE REQUEST----- ...... -----END CERTIFICATE REQUEST-----',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要申请的证书规格。取值：'."\n"
                            ."\n"
                            .'- **digicert-free-1-free**（默认）：表示DigiCert DV单域名证书（3个月免费证书，仅中国站）。'."\n"
                            .'- **symantec-free-1-free**：表示DigiCert DV单域名证书（1年免费证书，仅中国站）。'."\n"
                            .'- **symantec-dv-1-starter**：表示DigiCert DV通配符域名证书。'."\n"
                            ."\n"
                            .'- **geotrust-dv-1-starter**：表示GeoTrust DV单域名证书。'."\n"
                            .'- **geotrust-dv-w-starter**：表示GeoTrust DV通配符域名证书。'."\n"
                            ."\n"
                            .'- **globalsign-dv-1-personal**：表示GlobalSign DV单域名证书。'."\n"
                            .'- **globalsign-dv-w-advanced**：表示GlobalSign DV通配符域名证书。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'digicert-free-1-free',
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'description' => '申请联系人的姓名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Tom',
                    ],
                ],
                [
                    'name' => 'Phone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '申请联系人的手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '申请联系人的邮箱地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'username@example.com',
                    ],
                ],
                [
                    'name' => 'ValidateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名所有权的验证方式。取值：'."\n"
                            ."\n"
                            .'- **DNS**：DNS验证。通过在域名的DNS管理平台为域名添加一条TXT类型的DNS记录，验证域名的所有权。您需要域名解析的管理权限，才可以完成验证。'."\n"
                            .'- **FILE**：文件验证。通过在域名服务器上创建指定的文件，验证域名的所有权。您需要域名服务器的管理员权限，才可以完成验证。'."\n"
                            ."\n"
                            .'关于两种验证方式的更多信息，请参见[如何配置域名授权验证？](~~48016~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DNS',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'OrderId' => [
                                'description' => '本次证书申请订单的ID。'."\n"
                                    ."\n"
                                    .'> 后续您可以使用该ID查询证书的申请状态，具体操作，请参见[DescribeCertificateState](~~455800~~)。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '98987582437920968',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"OrderId\\": 98987582437920960,\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\"\\n}","type":"json"}]',
            'title' => '购买、申请和签发自带CSR文件的DV证书',
            'summary' => '购买、申请和签发自带CSR文件的DV证书。证书扩展服务可通过一步完成DV证书的购买和申请。',
            'description' => '- 本接口仅用于申请DV证书，不支持用于申请OV证书。推荐您使用[CreateCertificateForPackageRequest](~~455296~~)接口提交证书申请（可用于申请所有规格的证书，且支持选择CSR生成方式）。'."\n"
                .'- 发起请求前，请确保您已购买对应规格的证书资源包。关于如何购买证书资源包，请参见[购买证书资源包](~~28542~~)。您可以调用[DescribePackageState](~~455803~~)查询指定规格的证书资源包的使用概况，包含已购买该规格证书资源包的总数、已提交证书申请的次数、成功签发证书的次数。'."\n"
                .'- 您在发起请求时，可以通过**ProductCode**参数指定要申请的证书规格。'."\n"
                .'- 调用本接口提交证书申请后，将会消耗您已购买的对应规格的证书资源包证书的个数。调用本接口后，您还需要调用[DescribeCertificateState](~~455800~~)接口，获取完成域名验证所需要的信息，并在域名的DNS管理平台（DNS验证方式）或者域名服务器（文件验证方式）手动完成验证，然后您的证书申请订单才会进入CA中心审核环节。',
            'responseParamsDescription' => ' ',
            'extraInfo' => '| HttpCode | 错误码                         | 描述           |'."\n"
                .'|----------|--------------------------------|----------------|'."\n"
                .'| 404      | NotFoundPackage                | 没有购买套餐包。|'."\n"
                .'| 404      | NotRemainCount                 | 套餐中不可用的证书数量。 |'."\n"
                .'| 403      | CreateCertificateRequestFailed | 创建请求失败。   |'."\n"
                .'| 404      | NotFoundOrder                  | 没有找到证书订单。   |'."\n"
                .'| 403      | OrderStateError                | 证书订单状态错误。   |'."\n"
                .'| 403      | DeleteFail                     | 删除证书订单失败。       |'."\n"
                .'| 500      | Error                          | 发生错误。   |',
        ],
        'CreateCertificateRequest' => [
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
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要申请的证书规格。取值：'."\n"
                            ."\n"
                            .'- **digicert-free-1-free**（默认）：表示DigiCert DV单域名证书（3个月免费证书）。'."\n"
                            .'- **symantec-free-1-free**：表示DigiCert DV单域名证书（1年期免费证书，仅中国站）。'."\n"
                            .'- **symantec-dv-1-starter**：表示DigiCert DV通配符域名证书。'."\n"
                            ."\n"
                            .'- **geotrust-dv-1-starter**：表示GeoTrust DV单域名证书。'."\n"
                            .'- **geotrust-dv-w-starter**：表示GeoTrust DV通配符域名证书。'."\n"
                            ."\n"
                            .'- **globalsign-dv-1-personal**：表示GlobalSign DV单域名证书。'."\n"
                            .'- **globalsign-dv-w-advanced**：表示GlobalSign DV通配符域名证书。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'symantec-dv-1-starter',
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'description' => '申请联系人的姓名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Tom',
                    ],
                ],
                [
                    'name' => 'Phone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '申请联系人的手机号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '申请联系人的邮箱地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'username@example.com',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书要绑定的域名。仅支持设置一个域名。'."\n"
                            ."\n"
                            .'> 该域名必须与您要申请的证书规格（通过**ProductCode**参数指定）匹配。申请单域名证书时，此处必须设置一个单域名；申请通配符域名证书时，此处必须设置一个通配符域名（例如，`*.aliyundoc.com`）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'ValidateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名所有权的验证方式。取值：'."\n"
                            ."\n"
                            .'- **DNS**：DNS验证。通过在域名的DNS管理平台为域名添加一条TXT类型的DNS记录，验证域名的所有权。您需要域名解析的管理权限，才可以完成验证。'."\n"
                            ."\n"
                            .'- **FILE**：文件验证。通过在域名服务器上创建指定的文件，验证域名的所有权。您需要域名服务器的管理员权限，才可以完成验证。'."\n"
                            ."\n"
                            .'关于两种验证方式的更多信息，请参见[如何配置域名授权验证？](~~48016~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DNS',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'OrderId' => [
                                'description' => '本次证书申请订单的ID。'."\n"
                                    ."\n"
                                    .'> 后续您可以使用该ID查询证书申请订单的状态，具体操作，请参见[DescribeCertificateState](~~455800~~)。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '98987582437920968',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"OrderId\\": 98987582437920960,\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\"\\n}","type":"json"}]',
            'title' => '完成DV证书购买申请和签发流程',
            'summary' => '完成扩展服务DV证书的购买、申请和签发流程。',
            'description' => '- 本接口仅用于申请DV证书。如果需要申请OV或EV证书，推荐您使用[CreateCertificateForPackageRequest](~~455296~~)接口提交证书申请（可用于申请所有规格的证书，且支持选择CSR生成方式）。'."\n"
                .'- 发起调用请求前，请确保您已购买对应规格的证书资源包。关于如何购买证书资源包，请参见[购买证书资源包](~~28542~~)。您可以调用[DescribePackageState](~~455803~~)查询指定规格的证书资源包的使用概况，包含已购买该规格证书资源包的总数、已提交证书申请的次数、成功签发证书的次数。'."\n"
                .'- 调用本接口时，可以通过**ProductCode**参数指定要申请的证书规格。'."\n"
                .'- 调用本接口提交证书申请后，SSL证书服务将自动为您创建CSR文件，同时会消耗您已购买的对应规格的证书资源包中的证书个数。调用本接口后，您还需要调用[DescribeCertificateState](~~455800~~)接口，获取完成域名验证所需要的信息，并在域名的DNS管理平台（DNS验证方式）或者域名服务器（文件验证方式）手动完成验证，然后证书申请订单才会进入CA中心审核环节。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteCertificateRequest' => [
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
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要删除的证书申请订单的ID。'."\n"
                            ."\n"
                            .'> 证书订单ID一般是通过调用[CreateCertificateForPackageRequest](~~455296~~)、[CreateCertificateRequest](~~455292~~)或[CreateCertificateWithCsrRequest](~~455801~~)接口返回的证书申请订单ID（即**OrderId**）。此ID可通过调用[ListUserCertificateOrder](~~455804~~)获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123451222',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '082FAB35-6AB9-4FD5-8750-D36673548E76',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"082FAB35-6AB9-4FD5-8750-D36673548E76\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteCertificateRequestResponse>\\r\\n  <RequestId>082FAB35-6AB9-4FD5-8750-D36673548E76</RequestId>\\r\\n</DeleteCertificateRequestResponse>","errorExample":""}]',
            'title' => '删除DV证书申请失败的订单',
            'summary' => '删除DV证书申请失败的订单。',
            'description' => '只有在以下场景下，您才可以调用本接口删除对应的证书申请订单：'."\n"
                ."\n"
                .'- 订单处于**审核失败**状态：您已经调用[DescribeCertificateState](~~455800~~)查询了证书申请订单的状态，发现订单状态为审核失败（返回数据中的**Type**取值为**verify_fail**）。'."\n"
                .'- 订单处于**待申请**状态：您已经调用[CancelOrderRequest](~~455299~~)撤回了待验证、审核中的证书申请订单。被撤回的证书申请订单的状态变更为**待申请**。',
            'responseParamsDescription' => ' ',
            'extraInfo' => '| HttpCode | 错误码                         | 描述           |'."\n"
                .'|----------|--------------------------------|----------------|'."\n"
                .'| 404      | NotFoundPackage                | 没有购买套餐包。 |'."\n"
                .'| 404      | NotRemainCount                 | 套餐中不可用的证书的数量。 |'."\n"
                .'| 403      | CreateCertificateRequestFailed | 创建请求失败。   |'."\n"
                .'| 404      | NotFoundOrder                  | 没有找到订单 。  |'."\n"
                .'| 403      | OrderStateError                | 订单状态错误。   |'."\n"
                .'| 403      | DeleteFail                     | 删除失败  。     |'."\n"
                .'| 500      | Error                          | 发生错误 。  |',
        ],
        'UploadUserCertificate' => [
            'summary' => '本接口一般用于上传证书，包括标准国密证书或非国密证书。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义的证书名称。支持的最大字符长度：128。支持所有字符类型，包括字母、数字、下划线等。'."\n"
                            .'> 同一个用户下的证书名称不能重复。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cert-1',
                    ],
                ],
                [
                    'name' => 'Cert',
                    'in' => 'query',
                    'schema' => [
                        'description' => '非国密证书，PEM格式证书内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-----BEGIN CERTIFICATE----- MIIF...... -----END CERTIFICATE-----',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '非国密证书 ，PEM格式证书的私钥内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-----BEGIN CERTIFICATE-----'."\n"
                            .'MIICDzCCAbagAw****'."\n"
                            .'-----END CERTIFICATE-----',
                    ],
                ],
                [
                    'name' => 'EncryptCert',
                    'in' => 'query',
                    'schema' => [
                        'description' => '国密证书，PEM格式加密证书内容。当Cert和Key不为空时，此字段无效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-----BEGIN CERTIFICATE-----'."\n"
                            .'MIICDzCCA***'."\n"
                            .'-----END CERTIFICATE-----',
                    ],
                ],
                [
                    'name' => 'EncryptPrivateKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '国密证书，PEM格式加密证书私钥内容。当Cert和Key不为空时，此字段无效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-----BEGIN EC PRIVATE KEY-----'."\n"
                            .'MHcCAQEEI****'."\n"
                            .'-----END EC PRIVATE KEY-----',
                    ],
                ],
                [
                    'name' => 'SignCert',
                    'in' => 'query',
                    'schema' => [
                        'description' => '国密证书，PEM格式签名证书内容。当Cert和Key不为空时，此字段无效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-----BEGIN CERTIFICATE-----'."\n"
                            .'MIICDzCCAbagAw****'."\n"
                            .'-----END CERTIFICATE-----'."\n",
                    ],
                ],
                [
                    'name' => 'SignPrivateKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '国密证书，PEM格式签名证书私钥内容。当Cert和Key不为空时，此字段无效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-----BEGIN EC PRIVATE KEY-----'."\n"
                            .'MHcCAQEEILR****'."\n"
                            .'-----END EC PRIVATE KEY-----'."\n",
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源分组ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-ae****vty',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'CertId' => [
                                'description' => '证书ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12345',
                            ],
                            'RequestId' => [
                                'description' => '请求消息的返回ID。',
                                'type' => 'string',
                                'example' => 'BDB81BA2-E1F5-4D08-A2DD-4BE2BF44C90E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CertId\\": 12345,\\n  \\"RequestId\\": \\"BDB81BA2-E1F5-4D08-A2DD-4BE2BF44C90E\\"\\n}","type":"json"}]',
            'title' => '上传证书',
            'description' => '本接口的单用户QPS限制为100次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'GetUserCertificateDetail' => [
            'summary' => '本接口一般用于获取证书详情。',
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
                    'name' => 'CertId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。'."\n"
                            .'> 此ID可通过调用[ListUserCertificateOrder](~~455804~~)获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '6055048',
                    ],
                ],
                [
                    'name' => 'CertFilter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '值为**true**时，Cert、Key、EncryptCert、EncryptPrivateKey、SignCert、SignPrivateKey信息不返回，**false**时则返回，默认是false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'Cert' => [
                                'description' => '非国密算法的证书内容，入参certFilter为false时展示，true时不展示。',
                                'type' => 'string',
                                'example' => '---BEGIN CERTIFICATE----- MIIF...... -----END CERTIFICATE-----',
                            ],
                            'Key' => [
                                'description' => '非国密算法的私钥，入参certFilter为false时展示，true时不展示。',
                                'type' => 'string',
                                'example' => '-----BEGIN RSA PRIVATE KEY----- MII.... -----END RSA PRIVATE KEY-----',
                            ],
                            'EncryptCert' => [
                                'description' => 'PEM格式的国密算法的加密证书内容，入参certFilter为false时展示，true时不展示。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----'."\n"
                                    .'MIICDzCCA***'."\n"
                                    .'-----END CERTIFICATE-----',
                            ],
                            'EncryptPrivateKey' => [
                                'description' => 'PEM格式的国密算法的加密证书私钥内容，入参certFilter为false时展示，true时不展示。',
                                'type' => 'string',
                                'example' => '-----BEGIN EC PRIVATE KEY-----'."\n"
                                    .'MHcCAQEEI****'."\n"
                                    .'-----END EC PRIVATE KEY-----',
                            ],
                            'SignCert' => [
                                'description' => 'PEM格式的国密算法的签名证书内容，入参certFilter为false时展示，true时不展示。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----'."\n"
                                    .'MIICDzCCAbagAw****'."\n"
                                    .'-----END CERTIFICATE-----'."\n",
                            ],
                            'SignPrivateKey' => [
                                'description' => 'PEM格式的国密算法的签名证书私钥内容，入参certFilter为false时展示，true时不展示。',
                                'type' => 'string',
                                'example' => '-----BEGIN EC PRIVATE KEY-----'."\n"
                                    .'MHcCAQEEILR****'."\n"
                                    .'-----END EC PRIVATE KEY-----'."\n",
                            ],
                            'Id' => [
                                'description' => '证书ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '121345',
                            ],
                            'Name' => [
                                'description' => '证书名称。',
                                'type' => 'string',
                                'example' => 'cert_name',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                            'Common' => [
                                'description' => '证书绑定的主域名。',
                                'type' => 'string',
                                'example' => '*.com',
                            ],
                            'Fingerprint' => [
                                'description' => '证书指纹。',
                                'type' => 'string',
                                'example' => '1D7801BBE772D5DE55CBF1F88AEB41A42402DA07',
                            ],
                            'Issuer' => [
                                'description' => '证书颁发机构。',
                                'type' => 'string',
                                'example' => 'Digicert',
                            ],
                            'OrgName' => [
                                'description' => '购买证书的用户所属的公司或组织名称。',
                                'type' => 'string',
                                'example' => 'Alibaba',
                            ],
                            'Province' => [
                                'description' => '购买证书的用户所属的公司或组织所在的省份。',
                                'type' => 'string',
                                'example' => 'zhejiang',
                            ],
                            'City' => [
                                'description' => '购买证书的用户所属的公司或组织所在的城市。',
                                'type' => 'string',
                                'example' => 'hangzhou',
                            ],
                            'Country' => [
                                'description' => '购买证书的用户所属的公司或组织所在的国家。',
                                'type' => 'string',
                                'example' => 'CN',
                            ],
                            'StartDate' => [
                                'description' => '证书签发日期。',
                                'type' => 'string',
                                'example' => '2018-07-13',
                            ],
                            'EndDate' => [
                                'description' => '证书到期日期。',
                                'type' => 'string',
                                'example' => '2023-10-25',
                            ],
                            'Sans' => [
                                'description' => '证书绑定的所有域名。',
                                'type' => 'string',
                                'example' => '*.com',
                            ],
                            'Expired' => [
                                'description' => '证书是否过期。取值：'."\n"
                                    .'- **true**：证书已过期'."\n"
                                    .'- **false**：证书未过期',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'BuyInAliyun' => [
                                'description' => '是否在阿里云购买了证书。取值：'."\n"
                                    ."\n"
                                    .'- **true**：是'."\n"
                                    ."\n"
                                    .'- **false**：否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'OrderId' => [
                                'description' => '证书申请订单的ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123456',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源分组ID。',
                                'type' => 'string',
                                'example' => 'rg-aek****wia',
                            ],
                            'Algorithm' => [
                                'description' => '算法。',
                                'type' => 'string',
                                'example' => 'RSA',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Cert\\": \\"---BEGIN CERTIFICATE----- MIIF...... -----END CERTIFICATE-----\\",\\n  \\"Key\\": \\"-----BEGIN RSA PRIVATE KEY----- MII.... -----END RSA PRIVATE KEY-----\\",\\n  \\"EncryptCert\\": \\"-----BEGIN CERTIFICATE-----\\\\nMIICDzCCA***\\\\n-----END CERTIFICATE-----\\",\\n  \\"EncryptPrivateKey\\": \\"-----BEGIN EC PRIVATE KEY-----\\\\nMHcCAQEEI****\\\\n-----END EC PRIVATE KEY-----\\",\\n  \\"SignCert\\": \\"-----BEGIN CERTIFICATE-----\\\\nMIICDzCCAbagAw****\\\\n-----END CERTIFICATE-----\\\\n\\",\\n  \\"SignPrivateKey\\": \\"-----BEGIN EC PRIVATE KEY-----\\\\nMHcCAQEEILR****\\\\n-----END EC PRIVATE KEY-----\\\\n\\",\\n  \\"Id\\": 121345,\\n  \\"Name\\": \\"cert_name\\",\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\",\\n  \\"Common\\": \\"*.com\\",\\n  \\"Fingerprint\\": \\"1D7801BBE772D5DE55CBF1F88AEB41A42402DA07\\",\\n  \\"Issuer\\": \\"Digicert\\",\\n  \\"OrgName\\": \\"Alibaba\\",\\n  \\"Province\\": \\"zhejiang\\",\\n  \\"City\\": \\"hangzhou\\",\\n  \\"Country\\": \\"CN\\",\\n  \\"StartDate\\": \\"2018-07-13\\",\\n  \\"EndDate\\": \\"2023-10-25\\",\\n  \\"Sans\\": \\"*.com\\",\\n  \\"Expired\\": true,\\n  \\"BuyInAliyun\\": true,\\n  \\"OrderId\\": 123456,\\n  \\"ResourceGroupId\\": \\"rg-aek****wia\\",\\n  \\"Algorithm\\": \\"RSA\\"\\n}","type":"json"}]',
            'title' => '获取证书详情',
            'description' => '本接口的单用户QPS限制为100次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DescribePackageState' => [
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
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的证书资源包的规格（即证书规格）。取值：'."\n"
                            ."\n"
                            .'- **digicert-free-1-free**（默认）：表示DigiCert DV单域名证书（3个月免费试用，仅中国站）。'."\n"
                            .'- **symantec-free-1-free**：表示DigiCert DV单域名证书（1年免费试用，仅中国站）。'."\n"
                            .'- **symantec-dv-1-starter**：表示DigiCert DV通配符域名证书。'."\n"
                            .'- **symantec-ov-1-personal**：表示DigiCert OV单域名证书。'."\n"
                            .'- **symantec-ov-w-personal**：表示DigiCert OV通配符域名证书。'."\n"
                            ."\n"
                            .'- **geotrust-dv-1-starter**：表示GeoTrust DV单域名证书。'."\n"
                            .'- **geotrust-dv-w-starter**：表示GeoTrust DV通配符域名证书。'."\n"
                            .'- **geotrust-ov-1-personal**：表示GeoTrust OV单域名证书。'."\n"
                            .'- **geotrust-ov-w-personal**：表示GeoTrust OV通配符域名证书。'."\n"
                            ."\n"
                            .'- **globalsign-dv-1-personal**：表示GlobalSign DV单域名证书。'."\n"
                            .'- **globalsign-dv-w-advanced**：表示GlobalSign DV通配符域名证书。'."\n"
                            .'- **globalsign-ov-1-personal**：表示GlobalSign OV单域名证书。'."\n"
                            .'- **globalsign-ov-w-advanced**：表示GlobalSign OV通配符域名证书。'."\n"
                            ."\n\n"
                            .'- **cfca-ov-1-personal**：表示CFCA OV单域名证书（仅中国站）。'."\n"
                            .'- **cfca-ev-w-advanced**：表示CFCA OV通配符域名证书（仅中国站）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'digicert-free-1-free',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'IssuedCount' => [
                                'description' => '已经成功签发该规格证书的数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '10CFA380-1C58-45C7-8075-06215F3DB681',
                            ],
                            'TotalCount' => [
                                'description' => '已购买该规格证书资源包的总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '20',
                            ],
                            'ProductCode' => [
                                'description' => '证书资源包的规格（即证书规格）。取值：'."\n"
                                    ."\n"
                                    .'- **digicert-free-1-free**：表示DigiCert DV单域名证书（3个月免费试用，仅中国站）。'."\n"
                                    .'- **symantec-free-1-free**：表示DigiCert DV单域名证书（1年免费试用，仅中国站）。'."\n"
                                    .'- **symantec-dv-1-starter**：表示DigiCert DV通配符域名证书。'."\n"
                                    .'- **symantec-ov-1-personal**：表示DigiCert OV单域名证书。'."\n"
                                    .'- **symantec-ov-w-personal**：表示DigiCert OV通配符域名证书。'."\n"
                                    ."\n"
                                    .'- **geotrust-dv-1-starter**：表示GeoTrust DV单域名证书。'."\n"
                                    .'- **geotrust-dv-w-starter**：表示GeoTrust DV通配符域名证书。'."\n"
                                    .'- **geotrust-ov-1-personal**：表示GeoTrust OV单域名证书。'."\n"
                                    .'- **geotrust-ov-w-personal**：表示GeoTrust OV通配符域名证书。'."\n"
                                    ."\n"
                                    .'- **globalsign-dv-1-personal**：表示GlobalSign DV单域名证书。'."\n"
                                    .'- **globalsign-dv-w-advanced**：表示GlobalSign DV通配符域名证书。'."\n"
                                    .'- **globalsign-ov-1-personal**：表示GlobalSign OV单域名证书。'."\n"
                                    .'- **globalsign-ov-w-advanced**：表示GlobalSign OV通配符域名证书。'."\n"
                                    ."\n\n"
                                    .'- **cfca-ov-1-personal**：表示CFCA OV单域名证书（仅中国站）。'."\n"
                                    .'- **cfca-ev-w-advanced**：表示CFCA OV通配符域名证书（仅中国站）。',
                                'type' => 'string',
                                'example' => 'digicert-free-1-free',
                            ],
                            'UsedCount' => [
                                'description' => '已经提交该规格证书申请的次数。'."\n"
                                    ."\n"
                                    .'> 您只要成功调用一次[CreateCertificateForPackageRequest](~~455296~~)、[CreateCertificateRequest](~~455292~~)或[CreateCertificateWithCsrRequest](~~455801~~)接口，就表示提交了一次证书申请（不论证书是否成功签发）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"IssuedCount\\": 1,\\n  \\"RequestId\\": \\"10CFA380-1C58-45C7-8075-06215F3DB681\\",\\n  \\"TotalCount\\": 20,\\n  \\"ProductCode\\": \\"digicert-free-1-free\\",\\n  \\"UsedCount\\": 2\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<DescribePackageStateResponse>\\n\\t<TotalCount>20</TotalCount>\\n\\t<RequestId>10CFA380-1C58-45C7-8075-06215F3DB681</RequestId>\\n\\t<ProductCode>symantec-free-1-free</ProductCode>\\n\\t<UsedCount>2</UsedCount>\\n\\t<IssuedCount>1</IssuedCount>\\n</DescribePackageStateResponse>","errorExample":""}]',
            'title' => '查询已经购买的DV证书总数和使用情况',
            'summary' => '查询已经购买的DV证书总数和使用情况。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListUserCertificateOrder' => [
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
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊查询，根据OrderType匹配域名或对应的资源ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cert-instanceId',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订单状态。 状态取值：'."\n"
                            ."\n"
                            .'- **PAYED**：待申请，当OrderType=CPACK或者BUY有效。'."\n"
                            .'- **CHECKING**：审核中，当OrderType=CPACK或者BUY有效。'."\n"
                            .'- **CHECKED_FAIL**：审核失败，当OrderType=CPACK或者BUY有效。'."\n"
                            .'- **ISSUED**：已签发。'."\n"
                            .'- **WILLEXPIRED**：即将过期。'."\n"
                            .'- **EXPIRED**：已过期。'."\n"
                            .'- **NOTACTIVATED**：未激活，当OrderType=CPACK或者BUY有效。'."\n"
                            .'- **REVOKED**：吊销完成，当OrderType=CPACK或者BUY有效。'."\n"
                            ."\n"
                            .'当OrderType=CERT或者UPLOAD，Status为空时，将默认返回有效证书，包含已签发和即将过期证书。当OrderType=CPACK或者BUY，Status为空时，将默认返回全量订单。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ISSUED',
                    ],
                ],
                [
                    'name' => 'OrderType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源类型。 默认为**CPACK**。取值：'."\n"
                            ."\n"
                            .'- **CPACK**：资源虚拟订单，只返回额度生成的订单信息。'."\n"
                            .'- **BUY**：售卖订单，只返回售卖生成的订单信息（大部分可以忽略该类型）。'."\n"
                            .'- **UPLOAD**：上传证书，只返回上传证书。'."\n"
                            .'- **CERT**： 证书，同时返回签发证书和上传证书。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CPACK',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页，当前页。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ShowSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页，每页展示数据条数，默认50。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID。此ID可通过调用[ListResources](~~2716559~~)接口获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rg-ae******4wia',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '证书及订单列表返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'ShowSize' => [
                                'description' => '分页数据。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'CurrentPage' => [
                                'description' => '分页数据。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '查询数据总条数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'CertificateOrderList' => [
                                'description' => '证书及订单列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '证书及订单信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Algorithm' => [
                                            'description' => '算法，当入参OrderType=CPACK或者BUY时返回。',
                                            'type' => 'string',
                                            'example' => 'RSA',
                                        ],
                                        'AliyunOrderId' => [
                                            'description' => '阿里云订单号，当入参OrderType=CPACK或者BUY时返回。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '234567',
                                        ],
                                        'BuyDate' => [
                                            'description' => '购买时间。单位：毫秒，当入参OrderType=CPACK或者BUY时返回。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1634283958000',
                                        ],
                                        'CertEndTime' => [
                                            'description' => '证书过期时间，单位：毫秒，当入参OrderType=CPACK或者BUY时返回。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1665819958000',
                                        ],
                                        'CertStartTime' => [
                                            'description' => '证书开始时间，单位：毫秒，当入参OrderType=CPACK或者BUY时返回。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1665819958000',
                                        ],
                                        'CertType' => [
                                            'description' => '证书类型，当入参OrderType=CPACK或者BUY时返回。类型：'."\n"
                                                .'- **DV**：DV类型的证书。'."\n"
                                                .'- **EV**：EV类型的证书。'."\n"
                                                .'- **OV**：OV类型的证书。'."\n"
                                                .'**FREE**：免费证书（仅中国站支持）。',
                                            'type' => 'string',
                                            'example' => 'FREE',
                                        ],
                                        'Domain' => [
                                            'description' => '域名，当入参OrderType=CPACK或者BUY时返回。',
                                            'type' => 'string',
                                            'example' => 'aliyundoc.com',
                                        ],
                                        'DomainCount' => [
                                            'description' => '购买域名总个数，当入参OrderType=CPACK或者BUY时返回。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'DomainType' => [
                                            'description' => '域名类型，当入参OrderType=CPACK或者BUY时返回。类型：'."\n"
                                                ."\n"
                                                .'- **ONE**：单域名。'."\n"
                                                .'- **MULTIPLE**：多域名。'."\n"
                                                .'- **WILDCARD**：单通配符域名。'."\n"
                                                .'- **M_WILDCARD**：多通配符域名。'."\n"
                                                .'- **MIX**：混合域名。',
                                            'type' => 'string',
                                            'example' => 'ONE',
                                        ],
                                        'InstanceId' => [
                                            'description' => '资源ID。',
                                            'type' => 'string',
                                            'example' => 'cas-instanceId',
                                        ],
                                        'OrderId' => [
                                            'description' => '订单ID，当入参OrderType=CPACK或者BUY时返回。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2345687',
                                        ],
                                        'PartnerOrderId' => [
                                            'description' => '第三方CA订单号，当入参OrderType=CPACK或者BUY时返回。',
                                            'type' => 'string',
                                            'example' => 'ca-123456',
                                        ],
                                        'ProductCode' => [
                                            'description' => '订单规格ID，当入参OrderType=CPACK或者BUY时返回。',
                                            'type' => 'string',
                                            'example' => 'bykj123456',
                                        ],
                                        'ProductName' => [
                                            'description' => '订单规格名称，当入参OrderType=CPACK或者BUY时返回。',
                                            'type' => 'string',
                                            'example' => 'CFCA',
                                        ],
                                        'RootBrand' => [
                                            'description' => '品牌（包括WoSign、CFCA、DigiCert、vTrus等），当入参OrderType=CPACK或者BUY时返回。',
                                            'type' => 'string',
                                            'example' => 'CFCA',
                                        ],
                                        'SourceType' => [
                                            'description' => '订单类型，当入参OrderType=CPACK或者BUY时返回。'."\n"
                                                ."\n"
                                                .'- **cpack**：资源虚拟订单。'."\n"
                                                .'- **buy**：售卖订单。',
                                            'type' => 'string',
                                            'example' => 'buy',
                                        ],
                                        'Status' => [
                                            'description' => '订单或者证书状态，当入参OrderType=CPACK或者BUY时返回。'."\n"
                                                ."\n"
                                                .'- **PAYED**：待申请。'."\n"
                                                .'- **CHECKING**：审核中。'."\n"
                                                .'- **CHECKED_FAIL**：审核失败。'."\n"
                                                .'- **ISSUED**：已签发。'."\n"
                                                .'- **WILLEXPIRED**：即将过期。'."\n"
                                                .'- **EXPIRED**：已过期。'."\n"
                                                .'- **NOTACTIVATED**：未激活。'."\n"
                                                .'- **REVOKED**：吊销完成。',
                                            'type' => 'string',
                                            'example' => 'PAYED',
                                        ],
                                        'TrusteeStatus' => [
                                            'description' => '托管状态，当入参OrderType=CPACK或者BUY时返回。'."\n"
                                                ."\n"
                                                .'- **unTrustee**：未托管。'."\n"
                                                .'- **trustee**：托管。',
                                            'type' => 'string',
                                            'example' => 'unTrustee',
                                        ],
                                        'WildDomainCount' => [
                                            'description' => '购买泛域名个数，当入参OrderType=CPACK或者BUY时返回。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'CertificateId' => [
                                            'description' => '证书ID，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '896521',
                                        ],
                                        'Name' => [
                                            'description' => '证书名称 ，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'string',
                                            'example' => 'cert-name',
                                        ],
                                        'CommonName' => [
                                            'description' => '证书的主域名，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'string',
                                            'example' => 'aliyun.com',
                                        ],
                                        'Fingerprint' => [
                                            'description' => '证书指纹，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'string',
                                            'example' => 'CC6B3696E7C7CA715BD26E28E45FF3E3DF435C03',
                                        ],
                                        'Sha2' => [
                                            'description' => '证书Sha2值，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'string',
                                            'example' => '56B4DED2243A81DD909D7C39824FFE4DDBD87F91BFA46CD333FF212FE0E7CB11',
                                        ],
                                        'SerialNo' => [
                                            'description' => '证书序列号，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'string',
                                            'example' => '040a6e493cffdda6d744acf99b6576cf',
                                        ],
                                        'Issuer' => [
                                            'description' => '证书签发者，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'string',
                                            'example' => 'MyIssuer',
                                        ],
                                        'OrgName' => [
                                            'description' => '证书组织名称，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'string',
                                            'example' => '阿里云',
                                        ],
                                        'Province' => [
                                            'description' => '省或自治区，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'string',
                                            'example' => '浙江省',
                                        ],
                                        'City' => [
                                            'description' => '城市，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'string',
                                            'example' => '杭州市',
                                        ],
                                        'Country' => [
                                            'description' => '国家代码，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'string',
                                            'example' => 'CN',
                                        ],
                                        'Sans' => [
                                            'description' => '证书绑定的所有域名。多个域名之间使用半角逗号（,）分隔，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'string',
                                            'example' => 'aliyun.com',
                                        ],
                                        'Expired' => [
                                            'description' => '证书是否过期，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Upload' => [
                                            'description' => '证书是否上传证书，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'StartDate' => [
                                            'description' => '证书开始时间，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'string',
                                            'example' => '2021-11-16',
                                        ],
                                        'EndDate' => [
                                            'description' => '证书结束时间，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'string',
                                            'example' => '2022-11-17',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源分组ID，当入参OrderType=CERT或者UPLOAD时返回。',
                                            'type' => 'string',
                                            'example' => 'rg-ae******4wia',
                                        ],
                                    ],
                                ],
                                'example' => '{"CertificateOrderList": [{"Status": "PAYED","ProductName": "专业版通配符 OV SSL","InstanceId": "cert-instanceId","ProductCode": "globalsign-xxxx","SourceType": "buy","WildDomainCount": 1,"CertType": "OV","PartnerOrderId": "","OrderId": 3451111,"Algorithm": "RSA","RootBrand": "GlobalSign","AliyunOrderId": 21xxxxxx40655,"DomainType": "WILDCARD","TrusteeStatus": "trustee","Domain": "","BuyDate": 1632649385000,"DomainCount": 1}]}',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ShowSize\\": 10,\\n  \\"CurrentPage\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"CertificateOrderList\\": [\\n    {\\n      \\"Algorithm\\": \\"RSA\\",\\n      \\"AliyunOrderId\\": 234567,\\n      \\"BuyDate\\": 1634283958000,\\n      \\"CertEndTime\\": 1665819958000,\\n      \\"CertStartTime\\": 1665819958000,\\n      \\"CertType\\": \\"FREE\\",\\n      \\"Domain\\": \\"aliyundoc.com\\",\\n      \\"DomainCount\\": 1,\\n      \\"DomainType\\": \\"ONE\\",\\n      \\"InstanceId\\": \\"cas-instanceId\\",\\n      \\"OrderId\\": 2345687,\\n      \\"PartnerOrderId\\": \\"ca-123456\\",\\n      \\"ProductCode\\": \\"bykj123456\\",\\n      \\"ProductName\\": \\"CFCA\\",\\n      \\"RootBrand\\": \\"CFCA\\",\\n      \\"SourceType\\": \\"buy\\",\\n      \\"Status\\": \\"PAYED\\",\\n      \\"TrusteeStatus\\": \\"unTrustee\\",\\n      \\"WildDomainCount\\": 0,\\n      \\"CertificateId\\": 896521,\\n      \\"Name\\": \\"cert-name\\",\\n      \\"CommonName\\": \\"aliyun.com\\",\\n      \\"Fingerprint\\": \\"CC6B3696E7C7CA715BD26E28E45FF3E3DF435C03\\",\\n      \\"Sha2\\": \\"56B4DED2243A81DD909D7C39824FFE4DDBD87F91BFA46CD333FF212FE0E7CB11\\",\\n      \\"SerialNo\\": \\"040a6e493cffdda6d744acf99b6576cf\\",\\n      \\"Issuer\\": \\"MyIssuer\\",\\n      \\"OrgName\\": \\"阿里云\\",\\n      \\"Province\\": \\"浙江省\\",\\n      \\"City\\": \\"杭州市\\",\\n      \\"Country\\": \\"CN\\",\\n      \\"Sans\\": \\"aliyun.com\\",\\n      \\"Expired\\": true,\\n      \\"Upload\\": false,\\n      \\"StartDate\\": \\"2021-11-16\\",\\n      \\"EndDate\\": \\"2022-11-17\\",\\n      \\"ResourceGroupId\\": \\"rg-ae******4wia\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<ListUserCertificateOrderResponse>\\n    <ShowSize>10</ShowSize>\\n    <CurrentPage>1</CurrentPage>\\n    <TotalCount>1</TotalCount>\\n    <CertificateOrderList>\\n        <Algorithm>RSA</Algorithm>\\n        <AliyunOrderId>234567</AliyunOrderId>\\n        <BuyDate>1634283958000</BuyDate>\\n        <CertEndTime>1665819958000</CertEndTime>\\n        <CertStartTime>1665819958000</CertStartTime>\\n        <CertType>FREE</CertType>\\n        <Domain>aliyundoc.com</Domain>\\n        <DomainCount>1</DomainCount>\\n        <DomainType>ONE</DomainType>\\n        <InstanceId>cas-instanceId</InstanceId>\\n        <OrderId>2345687</OrderId>\\n        <PartnerOrderId>ca-123456</PartnerOrderId>\\n        <ProductCode>bykj123456</ProductCode>\\n        <ProductName>CFCA</ProductName>\\n        <RootBrand>CFCA</RootBrand>\\n        <SourceType>buy</SourceType>\\n        <Status>PAYED</Status>\\n        <TrusteeStatus>unTrustee</TrusteeStatus>\\n        <WildDomainCount>0</WildDomainCount>\\n        <CertificateId>896521</CertificateId>\\n        <Name>name</Name>\\n        <CommonName>aliyun.com</CommonName>\\n        <Fingerprint>sdfdsfds4xkjghaknhhssa</Fingerprint>\\n        <Sha2>sdfdsdfxkjghaknhhssa</Sha2>\\n        <SerialNo>12354xkjghaknhhssa</SerialNo>\\n        <Issuer>MyIssuer</Issuer>\\n        <OrgName>阿里云</OrgName>\\n        <Province>浙江省</Province>\\n        <City>杭州市</City>\\n        <Country>CN</Country>\\n        <Sans>aliyun.com</Sans>\\n        <Expired>true</Expired>\\n        <Upload>false</Upload>\\n        <StartDate>2022-11-16</StartDate>\\n        <EndDate>2022-11-17</EndDate>\\n    </CertificateOrderList>\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n</ListUserCertificateOrderResponse>","errorExample":""}]',
            'title' => '查询用户证书或者订单列表',
            'summary' => '查询用户证书或者订单列表。',
            'description' => '本接口一般用于查询用户证书或者订单列表，当OrderType=CERT或者UPLOAD时，表示查询证书列表，当OrderType=CPACK或者BUY时，表示查询订单列表。'."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'CreateCertificateForPackageRequest' => [
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
                    'name' => 'Csr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '您使用OpenSSL或Keytool工具为域名手动生成的CSR文件的内容。CSR文件的密钥类型必须是RSA、ECC算法，且RSA算法的密钥长度必须大于等于2048。关于CSR文件的制作方法，请参见[创建CSR](~~313297~~)。如果不设置该参数，表示由SSL证书服务自动为您创建CSR。'."\n"
                            ."\n"
                            .'CSR（Certificate Signing Request）是证书签名请求文件，包含了您的服务器信息和公司信息。申请证书时需要将您证书的CSR文件提交给CA认证中心审核，CA中心对CSR文件进行根证书私钥签名后，会生成证书公钥文件（即签发给您的SSL证书）。'."\n"
                            ."\n"
                            .'><notice> '."\n"
                            ."\n"
                            .'CSR中的**CN**字段表示证书绑定的域名。您设置CSR参数时，该字段为必填字段。'."\n"
                            ."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-----BEGIN CERTIFICATE REQUEST----- ...... -----END CERTIFICATE REQUEST-----',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要申请的证书规格。取值：'."\n"
                            .'- **digicert-free-1-free**（默认）：表示DigiCert DV单域名证书（3个月免费证书，仅中国站）。'."\n"
                            .'- **symantec-free-1-free**：表示DigiCert DV免费单域名证书（1年期免费证书，仅中国站）。'."\n"
                            .'- **symantec-dv-1-starter**：表示DigiCert DV通配符域名证书。'."\n"
                            .'- **symantec-ov-1-personal**：表示DigiCert OV单域名证书。'."\n"
                            .'- **symantec-ov-w-personal**：表示DigiCert OV通配符域名证书。'."\n"
                            ."\n"
                            .'- **geotrust-dv-1-starter**：表示GeoTrust DV单域名证书。'."\n"
                            .'- **geotrust-dv-w-starter**：表示GeoTrust DV通配符域名证书。'."\n"
                            .'- **geotrust-ov-1-personal**：表示GeoTrust OV单域名证书。'."\n"
                            .'- **geotrust-ov-w-personal**：表示GeoTrust OV通配符域名证书。'."\n"
                            ."\n"
                            .'- **globalsign-dv-1-personal**：表示GlobalSign DV单域名证书。'."\n"
                            .'- **globalsign-dv-w-advanced**：表示GlobalSign DV通配符域名证书。'."\n"
                            .'- **globalsign-ov-1-personal**：表示GlobalSign OV单域名证书。'."\n"
                            .'- **globalsign-ov-w-advanced**：表示GlobalSign OV通配符域名证书。'."\n"
                            ."\n\n"
                            .'- **cfca-ov-1-personal**：表示CFCA OV单域名证书（仅中国站）。'."\n"
                            .'- **cfca-ev-w-advanced**：表示CFCA OV通配符域名证书（仅中国站）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'digicert-free-1-free',
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'description' => '申请联系人的姓名。'."\n"
                            ."\n"
                            .'如果不设置该参数，表示从**信息管理**模块中选择使用最新添加的一条联系人信息。关于在**信息管理**模块中添加联系人的具体操作，请参见[管理联系人](~~198262~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Tom',
                    ],
                ],
                [
                    'name' => 'Phone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '申请联系人的手机号码。后续CA中心工作人员可能会通过该电话联系您，验证您的证书申请信息。'."\n"
                            ."\n"
                            .'如果不设置该参数，表示从**信息管理**模块中选择使用最新添加的一条联系人信息。关于在**信息管理**模块中添加联系人的具体操作，请参见[管理联系人](~~198262~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '申请联系人的邮箱地址。CA中心收到您的证书申请后，将向该邮箱发送一封证书申请验证邮件。您需要登录该邮箱，查收相关邮件，并按照邮件提示完成验证。'."\n"
                            ."\n"
                            .'如果不设置该参数，表示从**信息管理**模块中选择使用最新添加的一条联系人信息。关于在**信息管理**模块中添加联系人的具体操作，请参见[管理联系人](~~198262~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'username@example.com',
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书要绑定的域名。具体要求如下：'."\n"
                            ."\n"
                            .'- 支持设置单域名或者通配符域名（例如，`*.aliyundoc.com`）。'."\n"
                            .'- 支持设置多个域名。多个域名间使用英文逗号（,）分隔。最多可以设置5个域名。'."\n"
                            .'- 如果设置多个域名，则多个域名只能全部是单域名或者通配符域名，不允许同时包含单域名和通配符域名。'."\n"
                            ."\n"
                            .'><notice> '."\n"
                            ."\n"
                            .'证书绑定多个域名时，该参数为必填项。该参数与**Csr**参数不允许同时为空。如果您同时设置了该参数和**Csr**参数，则取**Csr**中的**CN**字段值作为证书绑定的域名。'."\n"
                            ."\n"
                            .'></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'CompanyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书申请公司的名称。'."\n"
                            ."\n"
                            .'> 该参数仅适用于申请OV证书。申请OV证书时，您必须先在[数字证书管理服务控制台](https://yundun.console.aliyun.com/?p=cas#/)的**信息管理**模块添加公司信息，具体操作，请参见[管理公司信息](~~198289~~)。申请DV证书时，无需添加公司信息。'."\n"
                            ."\n"
                            .'申请OV证书时，如果您在此处设置了公司名称，则表示使用**信息管理**模块中对应的公司信息；如果您没有设置该参数，则表示从**信息管理**模块中选择使用最新添加的一条公司信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '某公司',
                    ],
                ],
                [
                    'name' => 'ValidateType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '域名所有权的验证方式。取值：'."\n"
                            ."\n"
                            .'- **DNS**：DNS验证。通过在域名的DNS管理平台为域名添加一条TXT类型的DNS记录，验证域名的所有权。您需要域名解析的管理权限，才可以完成验证。'."\n"
                            ."\n"
                            .'- **FILE**：文件验证。通过在域名服务器上创建指定的文件，验证域名的所有权。您需要域名服务器的管理员权限，才可以完成验证。'."\n"
                            ."\n"
                            .'关于两种验证方式的更多信息，请参见[如何配置域名授权验证？](~~48016~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DNS',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'OrderId' => [
                                'description' => '本次证书申请订单的ID。'."\n"
                                    ."\n"
                                    .'> 后续您可以使用该ID查询证书申请订单的状态，具体操作，请参见[DescribeCertificateState](~~455800~~)。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2021010',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '5890029B-938A-589E-98B9-3DEC7BA7C400',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": 2021010,\\n  \\"RequestId\\": \\"5890029B-938A-589E-98B9-3DEC7BA7C400\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateCertificateForPackageRequestResponse>\\n    <OrderId>2021010</OrderId>\\n    <RequestId>5890029B-938A-589E-98B9-3DEC7BA7C400</RequestId>\\n</CreateCertificateForPackageRequestResponse>","errorExample":""}]',
            'title' => '请求创建证书',
            'summary' => '提交证书申请。',
            'description' => '- 发起请求前，请确保您已购买对应规格的证书资源包。关于如何购买证书资源包，请参见[购买证书资源包](~~28542~~)。您可以调用[DescribePackageState](~~455800~~)查询指定规格的证书资源包的使用概况，包含已购买该规格证书资源包的总数、已提交证书申请的次数、成功签发证书的次数。'."\n"
                .'- 调用本接口提交证书申请并成功签发证书后，将会消耗您已购买的对应规格的证书资源包的个数。您在发起请求时，可以通过**ProductCode**参数指定要申请的证书规格。'."\n"
                .'- 调用本接口提交证书申请后，您还需要调用[DescribeCertificateState](~~455800~~)接口，获取完成域名验证所需要的信息，并在域名的DNS管理平台（DNS验证方式）或者域名服务器（文件验证方式）手动完成验证，然后证书申请订单才会进入CA中心审核环节。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CancelCertificateForPackageRequest' => [
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
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订单ID。'."\n"
                            .'> 此ID可通过调用[ListUserCertificateOrder](~~455804~~)获取。',
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
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\"\\n}","type":"json"}]',
            'title' => '取消包请求的证书',
            'summary' => '吊销已签发的证书（取消对应的证书申请订单）。',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'CancelOrderRequest' => [
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
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订单ID。'."\n"
                            .'> 此ID可通过调用[ListUserCertificateOrder](~~455804~~)获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123451222',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '082FAB35-6AB9-4FD5-8750-D36673548E76',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"082FAB35-6AB9-4FD5-8750-D36673548E76\\"\\n}","type":"json"}]',
            'title' => '取消未支付订单',
            'summary' => '撤回待验证、审核中的证书申请订单。',
            'description' => '本接口的单用户QPS限制为100次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'RenewCertificateOrderForPackageRequest' => [
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
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要续费的证书申请订单的ID。'."\n"
                            .'> 证书订单ID一般是通过调用[CreateCertificateForPackageRequest](~~455296~~)、[CreateCertificateRequest](~~455292~~)或[CreateCertificateWithCsrRequest](~~455801~~)接口返回的证书申请订单ID（即**OrderId**）。此ID可通过调用[ListUserCertificateOrder](~~455804~~)获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123451222',
                    ],
                ],
                [
                    'name' => 'Csr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '您使用OpenSSL或Keytool工具为域名手动生成的CSR文件的内容。CSR文件的密钥类型必须是RSA、ECC算法，且RSA算法的密钥长度必须大于等于2048。关于CSR文件的制作方法，请参见[如何制作CSR文件](~~42218~~)。'."\n"
                            ."\n"
                            .'如果不设置该参数，表示使用待续费证书申请订单中的域名，由SSL证书服务自动为您生成新的CSR。'."\n"
                            ."\n"
                            .'CSR（Certificate Signing Request）是证书签名请求文件，包含了您的服务器信息和公司信息。申请证书时需要将您证书的CSR文件提交给CA认证中心审核，CA中心对CSR文件进行根证书私钥签名后，会生成证书公钥文件（即签发给您的SSL证书）。'."\n"
                            ."\n"
                            .'> CSR中的**CN**字段表示证书绑定的域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-----BEGIN CERTIFICATE REQUEST----- MIIC1TCCAb0CAQAwgY8xCzAJBgNVBAYTAkNOMRIwEAYDVQQIDAlHdWFuZ3pob3Ux ETAPBgNVBAcMCFNoZW56aGVuMQ8wDQYDVQQKDAZDaGFjdW8xEDAOBgNVBAsMB0lU IERlcHQxFzAVBgNVBAMMDnd3dy5jaGFjdW8ubmV0MR0wGwYJKoZIhvcNAQkBFg44 MjkyNjY5QHFxLmNvbTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBALo7 atRvQf9tKo1NJ/MQqzHvIjHNhU+0MMerDq+tRlJ+a7Ro1r6IWNF5MB0Z****** -----END CERTIFICATE REQUEST-----',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'OrderId' => [
                                'description' => '本次证书申请（续费）订单的ID。'."\n"
                                    ."\n"
                                    .'> 后续您可以使用该ID查询证书申请订单的状态，具体操作，请参见[DescribeCertificateState](~~455800~~)。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '323451222',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '082FAB35-6AB9-4FD5-8750-D36673548E76',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"OrderId\\": 323451222,\\n  \\"RequestId\\": \\"082FAB35-6AB9-4FD5-8750-D36673548E76\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<RenewCertificateOrderForPackageRequestResponse>\\r\\n\\t<RequestId>082FAB35-6AB9-4FD5-8750-D36673548E76</RequestId>\\r\\n\\t<OrderId>323451222</OrderId>\\r\\n</RenewCertificateOrderForPackageRequestResponse>","errorExample":""}]',
            'title' => '续订证书订单',
            'summary' => '为已签发的证书申请订单续费。',
            'description' => '只有当证书订单的状态为即将过期时，您才可以调用本接口为对应的证书申请续费。续费完成后，会生成待申请状态的证书订单。您需要为该证书订单提交证书申请，并在证书签发后，重新安装新证书。'."\n"
                ."\n"
                .'> 您可以调用[DescribeCertificateState](~~455800~~)查询证书申请订单的状态，如果返回数据中的**Type**参数取值为**certificate**，则表示证书已签发。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetCertWarehouseQuota' => [
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'TotalQuota' => [
                                'description' => '证书仓库总额度，包括赠送额度和购买额度。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5000',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
                            ],
                            'UseCount' => [
                                'description' => '已使用额度。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1000',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalQuota\\": 5000,\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\",\\n  \\"UseCount\\": 1000\\n}","errorExample":""},{"type":"xml","example":"<GetCertWarehouseQuotaResponse>\\n    <TotalQuota>5000</TotalQuota>\\n    <RequestId>CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D</RequestId>\\n    <UseCount>1000</UseCount>\\n</GetCertWarehouseQuotaResponse>","errorExample":""}]',
            'title' => '证书仓库调用额度查询',
            'summary' => '调用证书应用仓库签名、验签、加密和解密API时，会消耗API调用次数，API调用次数消耗完时，您将无法再调用相应的API。本接口一般用于查询证书仓库额度。',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'ListCertWarehouse' => [
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
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库名称，支持模糊查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库实例。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '14dcc8afc7578e1f',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库类型，取值：'."\n"
                            ."\n\n"
                            .'- **ssl**：SSL证书'."\n"
                            .'- **uploadPCA**：上传PCA证书'."\n"
                            .'- **free**：免费证书（仅中国站）'."\n"
                            .'- **aliyunPCA**：阿里云PCA证书（仅中国站）'."\n"
                            .'- **disable**：未启用',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aliyunPCA',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页，当前页，默认1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ShowSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页，每页展示数据大小，默认50。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ShowSize' => [
                                'description' => '分页，每页展示数据大小，默认50。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '50',
                            ],
                            'CurrentPage' => [
                                'description' => '分页，当前页，默认1。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '分页，总数据。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'CertWarehouseList' => [
                                'description' => '证书仓库列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '证书仓库。',
                                    'type' => 'object',
                                    'properties' => [
                                        'WhId' => [
                                            'description' => '仓库ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'InstanceId' => [
                                            'description' => '售卖实例。',
                                            'type' => 'string',
                                            'example' => '14dcc8afc7578e1f',
                                        ],
                                        'Name' => [
                                            'description' => '仓库名称。',
                                            'type' => 'string',
                                            'example' => 'name',
                                        ],
                                        'PcaInstanceId' => [
                                            'description' => 'PCA实例。',
                                            'type' => 'string',
                                            'example' => '14dcc8afc7578e1f',
                                        ],
                                        'Qps' => [
                                            'description' => 'Qps。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'Type' => [
                                            'description' => '仓库类型，取值：'."\n"
                                                ."\n"
                                                .'- **ssl**：SSL证书'."\n"
                                                .'- **uploadPCA**：上传PCA证书'."\n"
                                                .'- **free**：免费证书（仅中国站）'."\n"
                                                .'- **aliyunPCA**：阿里云PCA证书（仅中国站）'."\n"
                                                .'- **disable**：未启用',
                                            'type' => 'string',
                                            'example' => 'aliyunPCA',
                                        ],
                                        'EndTime' => [
                                            'description' => '到期时间，使用时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1665819958000',
                                        ],
                                        'IsExpired' => [
                                            'description' => '是否过期。取值：'."\n"
                                                ."\n"
                                                .'- **true**'."\n"
                                                .'- **false**',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ShowSize\\": 50,\\n  \\"CurrentPage\\": 1,\\n  \\"TotalCount\\": 10,\\n  \\"CertWarehouseList\\": [\\n    {\\n      \\"WhId\\": 1,\\n      \\"InstanceId\\": \\"14dcc8afc7578e1f\\",\\n      \\"Name\\": \\"name\\",\\n      \\"PcaInstanceId\\": \\"14dcc8afc7578e1f\\",\\n      \\"Qps\\": 10,\\n      \\"Type\\": \\"aliyunPCA\\",\\n      \\"EndTime\\": 1665819958000,\\n      \\"IsExpired\\": false\\n    }\\n  ],\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<ListCertWarehouseResponse>\\n    <ShowSize>50</ShowSize>\\n    <CurrentPage>1</CurrentPage>\\n    <TotalCount>10</TotalCount>\\n    <CertWarehouseList>\\n        <WhId>1</WhId>\\n        <InstanceId>14dcc8afc7578e1f</InstanceId>\\n        <Name>name</Name>\\n        <PcaInstanceId>14dcc8afc7578e1f</PcaInstanceId>\\n        <Qps>10</Qps>\\n        <Type>aliyunPCA</Type>\\n        <EndTime>1665819958000</EndTime>\\n        <IsExpired>false</IsExpired>\\n    </CertWarehouseList>\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n</ListCertWarehouseResponse>","errorExample":""}]',
            'title' => '证书仓库列表查询',
            'summary' => '本接口一般用于查询证书仓库列表。',
            'description' => '本接口一般用于查询证书仓库列表。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'ListCert' => [
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
                    'name' => 'KeyWord',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询关键字。支持通过名称、域名、SANS模糊查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_name',
                    ],
                ],
                [
                    'name' => 'WarehouseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库ID。可通过[ListCertWarehouse](~~453246~~)接口查询。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书状态，取值：'."\n"
                            ."\n"
                            .'- **ISSUE**： 已签发'."\n"
                            .'- **REVOKE**： 吊销',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ISSUE',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书来源，取值：'."\n"
                            ."\n"
                            .'- **upload**：上传证书'."\n"
                            .'- **aliyun**：阿里云证书',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aliyun',
                    ],
                ],
                [
                    'name' => 'CertType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书的类型 。取值：'."\n"
                            ."\n"
                            .'- **CA**：表示CA证书。'."\n"
                            .'- **CERT**：表示签发的证书。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CERT',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页。当前页，默认1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ShowSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页，每页展示数据大小，默认50条。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '50',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'ShowSize' => [
                                'description' => '分页，每页展示数据大小，默认50条。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '50',
                            ],
                            'CurrentPage' => [
                                'description' => '分页。当前页，默认1。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '分页，总数据。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'CertList' => [
                                'description' => '证书列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '证书。',
                                    'type' => 'object',
                                    'properties' => [
                                        'WhId' => [
                                            'description' => '仓库ID.',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'Identifier' => [
                                            'description' => '证书识别码。',
                                            'type' => 'string',
                                            'example' => '14dcc8afc7578e',
                                        ],
                                        'WhInstanceId' => [
                                            'description' => '仓库实例。',
                                            'type' => 'string',
                                            'example' => 'test_whInstanceId',
                                        ],
                                        'Status' => [
                                            'description' => '证书状态，取值：'."\n"
                                                ."\n"
                                                .'- **ISSUE**：已签发'."\n"
                                                .'- **REVOKE**： 吊销',
                                            'type' => 'string',
                                            'example' => 'ISSUE',
                                        ],
                                        'SourceType' => [
                                            'description' => '证书来源，取值：'."\n"
                                                ."\n"
                                                .'- **upload**：上传证书'."\n"
                                                .'- **aliyun**：阿里云证书',
                                            'type' => 'string',
                                            'example' => 'aliyun',
                                        ],
                                        'CertType' => [
                                            'description' => '证书的类型 。取值：'."\n"
                                                ."\n"
                                                .'- **CA**：表示CA证书。'."\n"
                                                .'- **CERT**：表示签发的证书。',
                                            'type' => 'string',
                                            'example' => 'CERT',
                                        ],
                                        'CommonName' => [
                                            'description' => '域名。',
                                            'type' => 'string',
                                            'example' => 'aliyun.alibaba.com',
                                        ],
                                        'BeforeDate' => [
                                            'description' => '签发时间。使用时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1665819958000',
                                        ],
                                        'Issuer' => [
                                            'description' => '签发者。',
                                            'type' => 'string',
                                            'example' => 'mySSL',
                                        ],
                                        'AfterDate' => [
                                            'description' => '到期时间。使用时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1634283958000',
                                        ],
                                        'ExistPrivateKey' => [
                                            'description' => '证书是否存在私钥。取值：'."\n"
                                                ."\n"
                                                .'- **true**'."\n"
                                                .'- **false**',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'Sans' => [
                                            'description' => '证书绑定的所有域名。多个域名之间使用半角逗号（,）分隔。',
                                            'type' => 'string',
                                            'example' => '*.alibaba.com,aliyun.alibaba.com',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"ShowSize\\": 50,\\n  \\"CurrentPage\\": 1,\\n  \\"TotalCount\\": 10,\\n  \\"CertList\\": [\\n    {\\n      \\"WhId\\": 2,\\n      \\"Identifier\\": \\"14dcc8afc7578e\\",\\n      \\"WhInstanceId\\": \\"test_whInstanceId\\",\\n      \\"Status\\": \\"ISSUE\\",\\n      \\"SourceType\\": \\"aliyun\\",\\n      \\"CertType\\": \\"CERT\\",\\n      \\"CommonName\\": \\"aliyun.alibaba.com\\",\\n      \\"BeforeDate\\": 1665819958000,\\n      \\"Issuer\\": \\"mySSL\\",\\n      \\"AfterDate\\": 1634283958000,\\n      \\"ExistPrivateKey\\": false,\\n      \\"Sans\\": \\"*.alibaba.com,aliyun.alibaba.com\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<ListCertResponse>\\n    <ShowSize>50</ShowSize>\\n    <CurrentPage>1</CurrentPage>\\n    <TotalCount>10</TotalCount>\\n    <CertList>\\n        <WhId>2</WhId>\\n        <Identifier>14dcc8afc7578e</Identifier>\\n        <WhInstanceId>test_whInstanceId</WhInstanceId>\\n        <Status>ISSUE</Status>\\n        <SourceType>aliyun</SourceType>\\n        <CommonName>aliyun.alibaba.com</CommonName>\\n        <BeforeDate>1665819958000</BeforeDate>\\n        <Issuer>mySSL</Issuer>\\n        <AfterDate>1634283958000</AfterDate>\\n        <ExistPrivateKey>false</ExistPrivateKey>\\n        <Sans>*.alibaba.com,aliyun.alibaba.com</Sans>\\n    </CertList>\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n</ListCertResponse>","errorExample":""}]',
            'title' => '证书仓库中证书列表',
            'summary' => '本接口一般用于查询证书仓库中的证书。',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'Sign' => [
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
                    'name' => 'Message',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待签名数据。使用Base64编码。  '."\n"
                            .'例如：待签名数据的十六进制内容为[0x31,0x32, 0x33, 0x34]，则对应的Base64编码为MTIzNA==。当MessageType取值为RAW时，数据内容需小于4KB。如果待签名数据内容大于4KB，您可以将MessageType指定为DIGEST，将Message指定为本地计算的消息摘要（又称哈希值）。证书管家将使用您自己的证书应用系统计算消息摘要，使用的消息摘要算法须与指定签名算法需要的消息摘要算法保持一致。具体如下：  '."\n"
                            ."\n"
                            .'- SHA256withRSA、SHA256withRSA/PSS、SHA256withECDSA对应的消息摘要算法为SHA-256。'."\n"
                            .'- SM3withSM2对应的消息摘要算法为SM3。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MTIzNA==',
                    ],
                ],
                [
                    'name' => 'CertIdentifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书唯一识别码。该参数可通过调用[ListCert](~~455806~~)获取。'."\n"
                            .'- SSL证书识别码一般为{证书ID}-cn-hangzhou。'."\n"
                            .'- PCA证书为对应私有证书的Identifier字段。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1ef1da5f-38ed-69b3-****-037781890265',
                    ],
                ],
                [
                    'name' => 'SigningAlgorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名算法。取值：'."\n"
                            ."\n"
                            .'- SHA256withRSA'."\n"
                            .'- SHA256withRSA/PSS'."\n"
                            .'- SHA256withECDSA'."\n"
                            .'- SM3withSM2',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SHA256withRSA',
                    ],
                ],
                [
                    'name' => 'MessageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息类型。取值：'."\n"
                            ."\n"
                            .'- RAW（默认值）：原始数据。'."\n"
                            .'- DIGEST：原始数据的消息摘要（哈希值）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RAW',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Signature' => [
                                'description' => '签名。',
                                'type' => 'string',
                                'example' => 'eyaC0w3ROK5b3QcHmUtAhMY/sQjKu2t3uBfnf6J/gn7JfZtyxwcCUjzXbw5jmqJQRbj1te670Bshg9kUdanKhtHFhJjU5jX+ZMMBr6pH0gqQDJxR0K0yHXRc0Q5OQoUZ6BfpbI4Wt4jJvJSdCstz1vSg12CfEHS8Kd5qfhItK7Y=',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1ed33293-2e48-6b14-861e-538e28e408eb',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Signature\\": \\"eyaC0w3ROK5b3QcHmUtAhMY/sQjKu2t3uBfnf6J/gn7JfZtyxwcCUjzXbw5jmqJQRbj1te670Bshg9kUdanKhtHFhJjU5jX+ZMMBr6pH0gqQDJxR0K0yHXRc0Q5OQoUZ6BfpbI4Wt4jJvJSdCstz1vSg12CfEHS8Kd5qfhItK7Y=\\",\\n  \\"RequestId\\": \\"1ed33293-2e48-6b14-861e-538e28e408eb\\"\\n}","errorExample":""},{"type":"xml","example":"<SignResponse>\\n    <Signature>eyaC0w3ROK5b3QcHmUtAhMY/sQjKu2t3uBfnf6J/gn7JfZtyxwcCUjzXbw5jmqJQRbj1te670Bshg9kUdanKhtHFhJjU5jX+ZMMBr6pH0gqQDJxR0K0yHXRc0Q5OQoUZ6BfpbI4Wt4jJvJSdCstz1vSg12CfEHS8Kd5qfhItK7Y=</Signature>\\n    <RequestId>1ed33293-2e48-6b14-861e-538e28e408eb</RequestId>\\n</SignResponse>","errorExample":""}]',
            'title' => '证书仓库签名',
            'summary' => '本接口一般用于证书仓库中的PCA证书签名。',
            'description' => '本接口一般用于证书仓库中的PCA证书签名。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为1000次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'Verify' => [
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
                    'name' => 'Message',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待验证数据，使用Base64编码。   '."\n"
                            .'例如：待签名数据的十六进制内容为[0x31, 0x32, 0x33, 0x34]，则对应的Base64编码为MTIzNA==。'."\n"
                            .'当MessageType取值为RAW时，数据内容需小于4KB。'."\n"
                            .'如果待签名数据内容大于4KB，您可以将MessageType指定为DIGEST，将Message指定为本地计算的消息摘要（又称哈希值）。证书管家将使用您自己的证书应用系统计算消息摘要，使用的消息摘要算法须与指定签名算法需要的消息摘要算法保持一致。具体如下：'."\n"
                            ."\n"
                            .'- SHA256withRSA、SHA256withRSA/PSS、SHA256withECDSA对应的消息摘要算法为SHA-256。'."\n"
                            .'- SM3withSM2对应的消息摘要算法为SM3。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MTIzNA==',
                    ],
                ],
                [
                    'name' => 'CertIdentifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书唯一识别码。该参数可通过调用[ListCert](~~455806~~)获取。'."\n"
                            .'- SSL证书识别码一般为{证书ID}-cn-hangzhou。'."\n"
                            .'- PCA证书为对应私有证书的Identifier字段。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1ef1da5f-38ed-69b3-****-037781890265',
                    ],
                ],
                [
                    'name' => 'SigningAlgorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名算法。取值：'."\n"
                            ."\n"
                            .'- **SHA256withRSA**'."\n"
                            .'- **SHA256withRSA/PSS**'."\n"
                            .'- **SHA256withECDSA**'."\n"
                            .'- **SM3withSM2**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SHA256withRSA',
                    ],
                ],
                [
                    'name' => 'MessageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息类型。取值：'."\n"
                            ."\n"
                            .'- **RAW**（默认值）：原始数据。'."\n"
                            .'- **DIGEST**：原始数据的消息摘要（哈希值）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RAW',
                    ],
                ],
                [
                    'name' => 'SignatureValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名值。使用Base64编码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'eyaC0w3ROK5b3QcHmUtAhMY/sQjKu2t3uBfnf6J/gn7JfZtyxwcCUjzXbw5jmqJQRbj1te670Bshg9kUdanKhtHFhJjU5jX+ZMMBr6pH0gqQDJxR0K0yHXRc0Q5OQoUZ6BfpbI4Wt4jJvJSdCstz1vSg12CfEHS8Kd5qfhItK7Y=',
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
                                'example' => '1ed33293-2e48-6b14-861e-538e28e408eb',
                            ],
                            'SignatureValid' => [
                                'description' => '签名校验。取值：'."\n"
                                    ."\n"
                                    .'- **true**'."\n"
                                    .'- **false**',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1ed33293-2e48-6b14-861e-538e28e408eb\\",\\n  \\"SignatureValid\\": true\\n}","errorExample":""},{"type":"xml","example":"<VerifyResponse>\\n    <RequestId>1ed33293-2e48-6b14-861e-538e28e408eb</RequestId>\\n    <SignatureValid>true</SignatureValid>\\n</VerifyResponse>","errorExample":""}]',
            'title' => '证书仓库签名验签',
            'summary' => '本接口一般用于证书仓库中PCA证书的签名校验。',
            'description' => '本接口一般用于证书仓库中PCA证书、SSL证书的签名校验。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制最多为1000次/秒。每个用户具体参考证书仓库对应的QPS，超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'Encrypt' => [
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
                    'name' => 'Plaintext',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待加密数据。'."\n"
                            .'可以是原文，也可以对原文进行Base64。具体参考MessageType字段。'."\n"
                            .'如果使用Base64编码，例如：待加密数据的十六进制内容为`[0x31, 0x32, 0x33, 0x34]`，则对应的Base64编码为MTIzNA==。'."\n"
                            .'Plaintext数据大小限制根据Algorithm的取值有所不同，具体如下：'."\n"
                            ."\n"
                            .'- **RSAES_OAEP_SHA_1**：214字节。'."\n"
                            .'- **RSAES_OAEP_SHA_256**：190字节。'."\n"
                            .'- **SM2PKE**：6047字节。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1234***',
                    ],
                ],
                [
                    'name' => 'CertIdentifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书唯一识别码。该参数可通过调用[ListCert](~~455806~~)获取。'."\n"
                            .'- SSL证书识别码一般为{证书ID}-cn-hangzhou。'."\n"
                            .'- PCA证书为对应私有证书的Identifier字段。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1ef1da5f-38ed-69b3-****-037781890265',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加密算法，取值：'."\n"
                            ."\n"
                            .'- **RSAES_OAEP_SHA_1**'."\n"
                            .'- **RSAES_OAEP_SHA_256**'."\n"
                            .'- **SM2PKE**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RSAESOAEPSHA_1',
                    ],
                ],
                [
                    'name' => 'MessageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息类型。取值：'."\n"
                            ."\n"
                            .'- RAW（默认值）：将会对Plaintext直接加密操作。'."\n"
                            .'- Base64：Plaintext为base64编码格式，将会对Plaintext base64解密之后再进行加密操作。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Base64' => 'Base64',
                            'RAW' => 'RAW',
                        ],
                        'example' => 'RAW',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象',
                        'type' => 'object',
                        'properties' => [
                            'CertIdentifier' => [
                                'description' => '证书唯一识别码。',
                                'type' => 'string',
                                'example' => '1ef1da5f-38ed-69b3-****-037781890265',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5979d897-d69f-4fc9-87dd-f3bb73c40b80',
                            ],
                            'CiphertextBlob' => [
                                'description' => '待解密数据。使用Base64编码。',
                                'type' => 'string',
                                'example' => 'ZOyIygCyaOW6Gj****MlNKiuyjfzw=',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CertIdentifier\\": \\"1ef1da5f-38ed-69b3-****-037781890265\\",\\n  \\"RequestId\\": \\"5979d897-d69f-4fc9-87dd-f3bb73c40b80\\",\\n  \\"CiphertextBlob\\": \\"ZOyIygCyaOW6Gj****MlNKiuyjfzw=\\"\\n}","errorExample":""},{"type":"xml","example":"<EncryptResponse>\\n    <CertIdentifier>12345678-1234-1234-1234-12345678****</CertIdentifier>\\n    <RequestId>5979d897-d69f-4fc9-87dd-f3bb73c40b80</RequestId>\\n    <CiphertextBlob>ZOyIygCyaOW6Gj****MlNKiuyjfzw=</CiphertextBlob>\\n</EncryptResponse>","errorExample":""}]',
            'title' => '证书仓库中证书加密',
            'summary' => '本接口一般用于证书仓库中证书加密。',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'Decrypt' => [
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
                    'name' => 'CertIdentifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书唯一识别码。该参数可通过调用[ListCert](~~455806~~)获取。'."\n"
                            .'- SSL证书识别码一般为{证书ID}-cn-hangzhou。'."\n"
                            .'- PCA证书为对应私有证书的Identifier字段。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1ef1da5f-38ed-69b3-****-037781890265',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '加密算法，取值：'."\n"
                            ."\n"
                            .'- **RSAES_OAEP_SHA_1**'."\n"
                            .'-  **RSAES_OAEP_SHA_256**'."\n"
                            .'- **SM2PKE**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RSAESOAEPSHA_1',
                    ],
                ],
                [
                    'name' => 'CiphertextBlob',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待解密数据。使用Base64编码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ZOyIygCyaOW6Gj****MlNKiuyjfzw=',
                    ],
                ],
                [
                    'name' => 'MessageType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息类型。取值：'."\n"
                            ."\n"
                            .'- RAW：返回结果为UTF-8编码的原文。'."\n"
                            .'- Base64（默认值）：返回结果为Base64加密之后的结果。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Base64' => 'Base64',
                            'RAW' => 'RAW',
                        ],
                        'example' => 'Base64',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象',
                        'type' => 'object',
                        'properties' => [
                            'Plaintext' => [
                                'description' => '解密数据。',
                                'type' => 'string',
                                'example' => 'VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5979d897-d69f-4fc9-87dd-f3bb73c40b80',
                            ],
                            'CertIdentifier' => [
                                'description' => '证书唯一识别码。',
                                'type' => 'string',
                                'example' => '1ef1da5f-38ed-69b3-****-037781890265',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Plaintext\\": \\"VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4\\",\\n  \\"RequestId\\": \\"5979d897-d69f-4fc9-87dd-f3bb73c40b80\\",\\n  \\"CertIdentifier\\": \\"1ef1da5f-38ed-69b3-****-037781890265\\"\\n}","errorExample":""},{"type":"xml","example":"<DecryptResponse>\\n    <Plaintext>VGhlIHF1aWNrIGJyb3duIGZveCBqdW1wcyBvdmVyIHRoZSBsYXp5IGRvZy4</Plaintext>\\n    <RequestId>5979d897-d69f-4fc9-87dd-f3bb73c40b80</RequestId>\\n    <CertIdentifier>12345678-1234-1234-1234-12345678****</CertIdentifier>\\n</DecryptResponse>","errorExample":""}]',
            'title' => '证书仓库中证书解密',
            'summary' => '本接口一般用于证书仓库中证书解密。',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'UploadPCACert' => [
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
                    'name' => 'WarehouseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '仓库ID。'."\n"
                            .'> 此ID可通过调用[ListCertWarehouse ](~~455805~~)获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Cert',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '-----BEGIN CERTIFICATE----- MIIEJDCCAwygAwIBAgIQITRHItTLTQizTyd3K7AMRTANBgkqhkiG9w0BAQsFADBe **************** 5/akmr2GK/Y= -----END CERTIFICATE----- -----BEGIN CERTIFICATE----- MIIDuzCCAqOgAwIBAgIQSEIWDPfWTDKZcWNyL2O+fjANBgkqhkiG9w0BAQsFADBf **************** URUHyMW5Qd5Q9g6Y4sDOIm6It9TF7EjpwMs42R30agcRYzuUsN72ZFBYFJwnBX8= -----END CERTIFICATE----- -----BEGIN CERTIFICATE----- MIIDizCCAnOgAwIBAgIRAMfjPkDKfELTo07l3A3cUSYwDQYJKoZIhvcNAQELBQAw ********* CjWTnYPhCcO2uIcnqMt7zCVs5LXBK/XSwlAXKMvKT0uuzw9VxeMfEabflKu0By8= -----END CERTIFICATE-----',
                    ],
                ],
                [
                    'name' => 'PrivateKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书私钥。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-----BEGIN RSA PRIVATE KEY----- MIIEowIBAAKCAQEA5SIfpNCBoiDrZhX1H39CHwQMVD0kBNeBTWfP9xkeesvfzbOz ******* POVNFfDf9h7pJtQ5fRZNTYTDs/d+cH62Z3+nS74mNnEfff0nkvne -----END RSA PRIVATE KEY-----',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cert_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                            'Identifier' => [
                                'description' => '证书识别码。',
                                'type' => 'string',
                                'example' => '1ed65580-7e33-6a50-8630-dd13fdc009ee',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\",\\n  \\"Identifier\\": \\"1ed65580-7e33-6a50-8630-dd13fdc009ee\\"\\n}","errorExample":""},{"type":"xml","example":"<UploadPCACertResponse>\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n    <Identifier>123654</Identifier>\\n</UploadPCACertResponse>","errorExample":""}]',
            'title' => '上传证书仓库pca证书',
            'summary' => '本接口一般用于在证书仓库中上传PCA证书。',
            'description' => '本接口一般用于在证书仓库中上传PCA证书。'."\n"
                .'## QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'DeletePCACert' => [
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
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书识别码。可通过[ListCert](~~452331~~)接口查询。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ccaf0c629c2be1e2ab',
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
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<DeletePCACertResponse>\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n</DeletePCACertResponse>","errorExample":""}]',
            'title' => '删除证书仓库中上传的pca证书',
            'summary' => '本接口一般用于删除证书仓库中PCA证书。',
            'description' => '本接口一般用于删除证书仓库中PCA证书。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'CreateWHClientCertificate' => [
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'SanType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书支持的扩展信息SAN（Subject Alternative Name）类型。取值：'."\n"
                            ."\n"
                            .'- **1**：表示邮箱。'."\n"
                            .'- **2**：表示域名。'."\n"
                            .'- **6**：表示统一资源标志符URI（Uniform Resource Identifier）。'."\n"
                            .'- **7**：表示IP地址。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'SanValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的具体扩展信息。支持输入多个扩展信息，如果您需要输入多个扩展信息，请用半角逗号（,）将其隔开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'CommonName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的公用名。支持使用中文、英文字符等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aliyun',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的密钥算法。密钥算法使用<加密算法>_<密钥长度>格式表示。取值：'."\n"
                            ."\n"
                            .'- **RSA_1024**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **RSA_2048** ：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **RSA_4096**：对应签名算法为Sha256WithRSA。'."\n"
                            .'- **ECC_256**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **ECC_384**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **ECC_512**：对应签名算法为Sha256WithECDSA。'."\n"
                            .'- **SM2_256**：对应签名算法为SM3WithSM2。'."\n"
                            ."\n"
                            .'客户端证书的加密算法必须与子CA证书一致，密钥长度可以不一致。例如：子CA证书的密钥算法为RSA_2048，则客户端证书的密钥算法必须是RSA_1024、RSA_2048、RSA_4096中的一种。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RSA_2048',
                    ],
                ],
                [
                    'name' => 'Csr',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CSR内容。您可以通过OpenSSL工具或者Keytool工具生成CSR。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-----BEGIN CERTIFICATE REQUEST----- ...... -----END CERTIFICATE REQUEST-----',
                    ],
                ],
                [
                    'name' => 'ParentIdentifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签发该证书的子CA证书的唯一识别码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '273ae6bb538d538c70c01f81jh2****',
                    ],
                ],
                [
                    'name' => 'Days',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的有效期。单位：天。'."\n"
                            ."\n"
                            .'Days、BeforeTime、AfterTime参数不能同时为空，并且BeforeTime、AfterTime参数必须同时为空或者同时设置。该参数具体设置说明如下：'."\n"
                            ."\n"
                            .'- 当设置Days参数时，您可以选择同时设置BeforeTime、AfterTime参数或者不设置BeforeTime、AfterTime参数。'."\n"
                            .'- 当不设置Days参数时，您必须设置BeforeTime、AfterTime参数。'."\n"
                            ."\n\n"
                            .'> 当您同时设置Days、BeforeTime、AfterTime参数时，客户端证书的有效期以Days参数的值为准。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '365',
                    ],
                ],
                [
                    'name' => 'BeforeTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的签发时间，使用时间戳格式，默认为您调用该接口的时间。单位：秒。'."\n"
                            ."\n"
                            .'> BeforeTime和AfterTime参数必须同时为空或者同时设置。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1634283958',
                    ],
                ],
                [
                    'name' => 'AfterTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端证书的服务到期时间，使用时间戳格式。单位：秒。'."\n"
                            ."\n"
                            .'> BeforeTime和AfterTime参数必须同时为空或者同时设置。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1665819958',
                    ],
                ],
                [
                    'name' => 'Organization',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根CA证书关联的组织机构（对应您的企业或单位）的名称。支持使用中文、英文字符等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '阿里巴巴网络技术有限公司',
                    ],
                ],
                [
                    'name' => 'OrganizationUnit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书所属的公司或组织名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'IT',
                    ],
                ],
                [
                    'name' => 'Country',
                    'in' => 'query',
                    'schema' => [
                        'description' => '购买证书的用户所属的公司或组织所在的国家。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CN',
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'description' => '组织机构所在省份、直辖市或自治区的名称。支持使用中文、英文字符等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Zhejiang',
                    ],
                ],
                [
                    'name' => 'Locality',
                    'in' => 'query',
                    'schema' => [
                        'description' => '组织机构所在城市的名称。支持使用中文、英文字符等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Hangzhou',
                    ],
                ],
                [
                    'name' => 'Years',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书有效期。单位：年。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Months',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书有效期。单位：月。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'Immediately',
                    'in' => 'query',
                    'schema' => [
                        'description' => '立即返回数字证书。'."\n"
                            .'- **0**，不返回。默认值。'."\n"
                            .'- **1**，返回证书。'."\n"
                            .'- **2**， 返回证书及其证书链 。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'Identifier' => [
                                'description' => '客户端证书的唯一识别码。',
                                'type' => 'string',
                                'example' => '190ae6bb538d538c70c01f81dcf2****',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '8C467B38-3910-447D-87BC-AC049166F216',
                            ],
                            'RootX509Certificate' => [
                                'description' => '根CA证书的内容。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----',
                            ],
                            'ParentX509Certificate' => [
                                'description' => '子CA证书的内容。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----',
                            ],
                            'X509Certificate' => [
                                'description' => '客户端证书的内容。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----',
                            ],
                            'CertificateChain' => [
                                'description' => 'CA证书链。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n-----BEGIN CERTIFICATE-----\\n......\\n-----END CERTIFICATE-----\\n',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Identifier\\": \\"190ae6bb538d538c70c01f81dcf2****\\",\\n  \\"RequestId\\": \\"8C467B38-3910-447D-87BC-AC049166F216\\",\\n  \\"RootX509Certificate\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\",\\n  \\"ParentX509Certificate\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\",\\n  \\"X509Certificate\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\",\\n  \\"CertificateChain\\": \\"-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\\\\\\\n-----BEGIN CERTIFICATE-----\\\\\\\\n......\\\\\\\\n-----END CERTIFICATE-----\\\\\\\\n\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateWHClientCertificateResponse>\\n    <Identifier>190ae6bb538d538c70c01f81dcf2****</Identifier>\\n    <RequestId>8C467B38-3910-447D-87BC-AC049166F216</RequestId>\\n    <RootX509Certificate>-----BEGIN CERTIFICATE-----\\\\n......\\\\n-----END CERTIFICATE-----</RootX509Certificate>\\n    <ParentX509Certificate>-----BEGIN CERTIFICATE-----\\\\n......\\\\n-----END CERTIFICATE-----</ParentX509Certificate>\\n    <X509Certificate>-----BEGIN CERTIFICATE-----\\\\n......\\\\n-----END CERTIFICATE-----</X509Certificate>\\n    <CertificateChain>-----BEGIN CERTIFICATE-----\\\\n......\\\\n-----END CERTIFICATE-----\\\\n-----BEGIN CERTIFICATE-----\\\\n......\\\\n-----END CERTIFICATE-----\\\\n</CertificateChain>\\n</CreateWHClientCertificateResponse>","errorExample":""}]',
            'title' => '申请证书仓库中客户端证书',
            'summary' => '一般用户证书仓库中，申请签发单个客户端证书。',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'RevokeWHClientCertificate' => [
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
                    'name' => 'Identifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要吊销的客户端证书或服务端证书的唯一识别码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '160ae6bb538d538c70c01f81dcf2****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '15C66C7B-671A-4297-9187-2C4477247A74',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"15C66C7B-671A-4297-9187-2C4477247A74\\"\\n}","errorExample":""},{"type":"xml","example":"<RevokeWHClientCertificateResponse>\\n    <RequestId>15C66C7B-671A-4297-9187-2C4477247A74</RequestId>\\n</RevokeWHClientCertificateResponse>","errorExample":""}]',
            'title' => '吊销证书仓库中客户端证书',
            'summary' => '一般用于吊销证书仓库中客户端证书。',
            'description' => '本接口的单用户QPS限制为10次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
        'ListCsr' => [
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
                    'name' => 'KeyWord',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主域名或者CSR名称关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_name',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CSR使用的密钥算法，取值：RSA、ECC、SM2。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'RSA' => 'RSA',
                            'ECC' => 'ECC',
                            'SM2' => 'SM2',
                        ],
                        'example' => 'RSA',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ShowSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页，每页展示数据量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'ShowSize' => [
                                'description' => 'CSR所在分页。如果未传入ShowSize则不返回。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'CurrentPage' => [
                                'description' => 'CSR所在页码。如果未传入CurrentPage则不返回。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'description' => '查询到的总CSR数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'CsrList' => [
                                'description' => 'CSR详情。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'CsrId' => [
                                            'description' => 'CSR唯一标识。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '3454',
                                        ],
                                        'Algorithm' => [
                                            'description' => 'CSR所使用的密钥算法。',
                                            'type' => 'string',
                                            'example' => 'RSA',
                                        ],
                                        'KeySize' => [
                                            'description' => '密钥算法长度。'."\n"
                                                .'> - RSA算法长度一般为2048、3072或4096等。'."\n"
                                                .'> - ECC和SM2算法长度一般为256。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2048',
                                        ],
                                        'KeySha2' => [
                                            'description' => '使用SHA256算法处理公钥后的值。',
                                            'type' => 'string',
                                            'example' => '1234',
                                        ],
                                        'CommonName' => [
                                            'description' => '主域名，通用域名。',
                                            'type' => 'string',
                                            'example' => 'example.com',
                                        ],
                                        'Sans' => [
                                            'description' => '备用名称，申请同一SSL证书的其他域名。',
                                            'type' => 'string',
                                            'example' => 'www.aliyundoc.com,www.example.com',
                                        ],
                                        'CountryCode' => [
                                            'description' => '证书组织机构所在国家或地区的代码。例如，CN表示中国，US表示美国。',
                                            'type' => 'string',
                                            'example' => 'CN',
                                        ],
                                        'Province' => [
                                            'description' => '省份或者地区。',
                                            'type' => 'string',
                                            'example' => 'Beijing',
                                        ],
                                        'Locality' => [
                                            'description' => '公司所在城市。',
                                            'type' => 'string',
                                            'example' => 'Beijing',
                                        ],
                                        'CorpName' => [
                                            'description' => '单位名称。',
                                            'type' => 'string',
                                            'example' => '北京CSR科技有限公司',
                                        ],
                                        'Department' => [
                                            'description' => '证书使用部门。',
                                            'type' => 'string',
                                            'example' => 'IT',
                                        ],
                                        'HasPrivateKey' => [
                                            'description' => '是否存在私钥。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Name' => [
                                            'description' => 'CSR名称。',
                                            'type' => 'string',
                                            'example' => 'test_name',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'E865F6AD-0294-4A24-A58B-DAC6BE2BDD20',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ShowSize\\": 10,\\n  \\"CurrentPage\\": 1,\\n  \\"TotalCount\\": 10,\\n  \\"CsrList\\": [\\n    {\\n      \\"CsrId\\": 3454,\\n      \\"Algorithm\\": \\"RSA\\",\\n      \\"KeySize\\": 2048,\\n      \\"KeySha2\\": \\"1234\\",\\n      \\"CommonName\\": \\"example.com\\",\\n      \\"Sans\\": \\"www.aliyundoc.com,www.example.com\\",\\n      \\"CountryCode\\": \\"CN\\",\\n      \\"Province\\": \\"Beijing\\",\\n      \\"Locality\\": \\"Beijing\\",\\n      \\"CorpName\\": \\"北京CSR科技有限公司\\",\\n      \\"Department\\": \\"IT\\",\\n      \\"HasPrivateKey\\": true,\\n      \\"Name\\": \\"test_name\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"E865F6AD-0294-4A24-A58B-DAC6BE2BDD20\\"\\n}","type":"json"}]',
            'title' => '查询CSR列表',
            'summary' => '查询CSR列表信息及CSR详细信息。',
        ],
        'CreateCsr' => [
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
                    'name' => 'KeySize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥算法长度。'."\n"
                            .'- RSA算法长度一般为2048、3072、4096等。'."\n"
                            .'- ECC和SM2算法长度一般为256。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '2048',
                    ],
                ],
                [
                    'name' => 'Algorithm',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CSR密钥算法，仅支持RSA、SM2、ECC。更多关于密钥算法的说明，请参见[证书选购指南](~~197871~~)。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'RSA' => 'RSA',
                            'ECC' => 'ECC',
                            'SM2' => 'SM2',
                        ],
                        'example' => 'RSA',
                    ],
                ],
                [
                    'name' => 'CommonName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主域名，通用域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'example.com',
                    ],
                ],
                [
                    'name' => 'Sans',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备用名称，申请同一SSL证书的其他域名，多个域名请使用英文逗号分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyundoc.com,www.example.com',
                    ],
                ],
                [
                    'name' => 'CountryCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置证书组织机构所在国家或地区的代码。例如，CN 表示中国，US 表示美国。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CN',
                    ],
                ],
                [
                    'name' => 'Province',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公司所在省份或者地区。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Beijing',
                    ],
                ],
                [
                    'name' => 'Locality',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公司所在城市。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Beijing',
                    ],
                ],
                [
                    'name' => 'CorpName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '单位名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '北京CSR科技有效公司',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CSR名称。长度不超过50个字符，且仅支持英文大小写字母（a~z和A~Z）、阿拉伯数字（0~9）、下划线（_）、短划线（-）和半角句号（.）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'csr-123',
                    ],
                ],
                [
                    'name' => 'Department',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书使用部门。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'IT',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'Csr' => [
                                'description' => 'CSR内容。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE REQUEST----- ...... -----END CERTIFICATE REQUEST-----',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '12345678-1234-1234-1234-123456789ABC',
                            ],
                            'CsrId' => [
                                'description' => 'CSR唯一标识。后续可通过该值直接获取CSR内容。获取CSR的接口请参见[GetCsrDetail](~~2709720~~)。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3365',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Csr\\": \\"-----BEGIN CERTIFICATE REQUEST----- ...... -----END CERTIFICATE REQUEST-----\\",\\n  \\"RequestId\\": \\"12345678-1234-1234-1234-123456789ABC\\",\\n  \\"CsrId\\": 3365\\n}","type":"json"}]',
            'title' => '创建CSR',
            'summary' => 'CSR是证书请求文件，包含您的SSL证书信息，例如，证书绑定的域名、证书持有主体的名称及地理位置信息等。您向CA中心提交证书申请时，必须提供CSR。CA中心审核通过您的证书申请后，将使用其根CA私钥为您提供的CSR签名，生成SSL证书公钥（即签发给您的SSL证书）。SSL证书的私钥即您在生成CSR时同时生成的私钥。',
        ],
        'UploadCsr' => [
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
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CSR名称。支持使用英文大小写字母（a~z和A~Z）、阿拉伯数字（0~9）、下划线（_）、短划线（-）。长度不超过50个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name',
                    ],
                ],
                [
                    'name' => 'Csr',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CSR内容。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '-----BEGIN CERTIFICATE REQUEST----- ...... -----END CERTIFICATE REQUEST-----',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'PEM格式的证书私钥内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-----BEGIN RSA PRIVATE KEY----- MII.... -----END RSA PRIVATE KEY-----',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'CsrId' => [
                                'description' => 'CSR唯一标识。后续可通过该值直接获取CSR内容。获取CSR的接口请参见[GetCsrDetail](~~2709720~~)。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2271',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CsrId\\": 2271,\\n  \\"RequestId\\": \\"CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D\\"\\n}","type":"json"}]',
            'title' => '上传CSR',
            'summary' => '阿里云数字证书管理服务支持上传已有的CSR，以便申请证书时使用，同时也可对上传的CSR进行统一管理。',
        ],
        'GetCsrDetail' => [
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
                    'name' => 'CsrId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CSR唯一标识。通过CreateCsr接口创建CSR或使用UploadCsr接口上传CSR后会自动生成CsrId。您可以通过ListCsr接口查询CSR列表获取CsrId，ListCsr接口说明，请参见[ListCsr](~~2709717~~)。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '3924',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'Csr' => [
                                'description' => 'CSR内容。',
                                'type' => 'string',
                                'example' => '-----BEGIN CERTIFICATE REQUEST-----   ...... -----END CERTIFICATE REQUEST-----',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '08F45EA0-66A7-4504-9B31-3589F5CE308D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Csr\\": \\"-----BEGIN CERTIFICATE REQUEST-----   ...... -----END CERTIFICATE REQUEST-----\\",\\n  \\"RequestId\\": \\"08F45EA0-66A7-4504-9B31-3589F5CE308D\\"\\n}","type":"json"}]',
            'title' => '获取CSR',
            'summary' => '通过CreateCsr接口创建CSR后会返回CsrId，您可以通过CsrId直接获取CSR内容。',
        ],
        'UpdateCsr' => [
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
                    'name' => 'CsrId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CSR唯一标识。上传CSR时会生成CsrId。您可以通过查询CSR列表获取该值，接口详情，请参见[ListCsr](~~2709717~~)。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '5209',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'PEM格式的证书私钥内容。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '-----BEGIN RSA PRIVATE KEY----- MII.... -----END RSA PRIVATE KEY-----',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '082FAB35-6AB9-4FD5-8750-D36673548E76',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"082FAB35-6AB9-4FD5-8750-D36673548E76\\"\\n}","type":"json"}]',
            'title' => '上传或更新CSR私钥',
            'summary' => '如果您在上传本地CSR时未传入CSR私钥，您可以通过该接口上传或更新CSR对应的私钥。',
        ],
        'DeleteCsr' => [
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
                    'name' => 'CsrId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'CSR ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '3013',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'D3F1FA43-1C26-50A2-8F0F-7A03851DBB46',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D3F1FA43-1C26-50A2-8F0F-7A03851DBB46\\"\\n}","type":"json"}]',
            'title' => '删除CSR',
            'summary' => '如果您不再需要某个CSR，可以将其删除。',
        ],
        'DeleteUserCertificate' => [
            'summary' => '删除已过期或上传的证书。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'CertId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。'."\n"
                            .'> 此ID可通过调用[ListUserCertificateOrder](~~455804~~)获取。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '7562353',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '对象。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求消息的返回ID。',
                                'type' => 'string',
                                'example' => '3E50D480-9765-5CFD-9650-9BACCECA5135',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3E50D480-9765-5CFD-9650-9BACCECA5135\\"\\n}","type":"json"}]',
            'title' => '删除证书',
            'description' => '本接口的单用户QPS限制为100次/秒。超过限制，API调用将会被限流，这可能影响您的业务，请合理调用。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cas.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'cas.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'cas.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
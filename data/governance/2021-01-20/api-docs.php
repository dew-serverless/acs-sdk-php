<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'governance',
    'version' => '2021-01-20',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 191854,
      'title' => '账号工厂',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnrollAccount',
        1 => 'ListEnrolledAccounts',
        2 => 'GetEnrolledAccount',
        3 => 'GetAccountFactoryBaseline',
        4 => 'ListAccountFactoryBaselines',
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
    'EnrollAccount' => 
    array (
      'summary' => '通过账号工厂创建一个新的资源账号或者纳管一个已有的资源账号。',
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
          'name' => 'AccountNamePrefix',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '账号名称前缀',
            'description' => '账号名称前缀。

- 如果是新建资源账号，则该参数必填。
- 如果是注册应用到已有账号，则该参数不需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-account',
          ),
        ),
        1 => 
        array (
          'name' => 'DisplayName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '账号显示名称',
            'description' => '账号显示名称。

- 如果是新建资源账号，则该参数必填。
- 如果是注册应用到已有账号，则该参数不需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-account',
          ),
        ),
        2 => 
        array (
          'name' => 'FolderId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '父资源夹ID',
            'description' => '父资源夹ID。

- 如果是新建资源账号，该参数不填，则默认创建在Root资源夹下。
- 如果是注册应用到已有账号，则该参数不需要填写。',
            'type' => 'string',
            'required' => false,
            'example' => 'fd-5ESoku****',
          ),
        ),
        3 => 
        array (
          'name' => 'PayerAccountUid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结算账号ID',
            'description' => '结算账号ID。

- 如果是新建资源账号，该参数不填，则默认为自主结算。
- 如果是注册应用到已有账号，则该参数不需要填写。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '19534534552****',
          ),
        ),
        4 => 
        array (
          'name' => 'AccountUid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '注册账号ID',
            'description' => '注册账号ID。

- 如果是新建资源账号，则该参数不需要填写。
- 如果是注册应用到已有账号，则该参数必填。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '12868156179****',
          ),
        ),
        5 => 
        array (
          'name' => 'BaselineItems',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => '基线项配置数组',
            'description' => '基线项配置数组。

如果传递了该参数，那么基线项的配置将和指定账号基线进行合并。相同的基线项将以该参数的配置为准。建议您将该参数置空，通过`BaselineId`参数指定账号基线，通过现有基线将配置应用到账号上。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '基线项配置。',
              'type' => 'object',
              'properties' => 
              array (
                'Name' => 
                array (
                  'title' => '基线项名称',
                  'description' => '基线项名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ACS-BP_ACCOUNT_FACTORY_VPC',
                ),
                'Version' => 
                array (
                  'title' => '基线项版本',
                  'description' => '基线项版本。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1.0',
                  'default' => '1.0',
                ),
                'Config' => 
                array (
                  'title' => '基线项配置',
                  'description' => '基线项配置。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{\\"Notifications\\":[{\\"GroupKey\\":\\"account_msg\\",\\"Contacts\\":[{\\"Name\\":\\"aa\\"}],\\"PmsgStatus\\":1,\\"EmailStatus\\":1,\\"SmsStatus\\":1}]}',
                ),
                'Skip' => 
                array (
                  'title' => '是否跳过基线项',
                  'description' => '是否跳过基线项。取值：

- false：不跳过。
- true：跳过。',
                  'type' => 'boolean',
                  'required' => false,
                  'example' => 'false',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'BaselineId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '基线ID',
            'description' => '基线ID。

置空则默认使用系统默认基线。',
            'type' => 'string',
            'required' => false,
            'example' => 'afb-bp1durvn3lgqe28v****',
          ),
        ),
        7 => 
        array (
          'name' => 'ResellAccountType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '账号身份类型',
            'description' => '成员的身份类型。取值：

- resell（默认值）：分销账号。创建的成员将自动与您的分销商建立分销关系，同时您需要使用管理账号为新成员付款。
- non_resell：非分销账号。创建的成员为阿里云普通账号，与您当前的分销商无关联关系，该账号直接从阿里云购买资源，需自主付款。

> 
> 该参数仅支持国际站分销客户。',
            'type' => 'string',
            'required' => false,
            'example' => 'resell',
          ),
        ),
        8 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'RegionId',
            'description' => '地域ID。',
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
            'title' => 'ResponseBaseResult<EnrollAccountResponse>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '7071E5FA-515E-5F53-B335-B87D619C6A66',
              ),
              'AccountUid' => 
              array (
                'title' => '注册账号ID',
                'description' => '注册账号ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '143165363236****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter %s is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'DeployConflict.Blueprint',
            'errorMessage' => 'The %s blueprint is being deployed. Please wait for its deployment to complete and try again.',
          ),
          2 => 
          array (
            'errorCode' => 'DependencyViolation.Blueprint',
            'errorMessage' => 'The %s blueprint has not been deployed. Please deploy the resource structure first.',
          ),
          3 => 
          array (
            'errorCode' => 'DependencyViolation.BaselineItem',
            'errorMessage' => 'The dependency of %s baseline item has not been configured. Please config %s first.',
          ),
          4 => 
          array (
            'errorCode' => 'IncorrectBlueprintStatus',
            'errorMessage' => 'The current status of the blueprint does not support this operation.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidUser.NotResourceDirectoryMaster',
            'errorMessage' => 'The specified account is not a master account of resource directory.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidUser.NotFound',
            'errorMessage' => 'The specified user does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidBlueprint.NotFound',
            'errorMessage' => 'The specified blueprint does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidBaselineItem.NotFound',
            'errorMessage' => 'The specified baseline item named %s does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidEnterpriseRealName.NotFound',
            'errorMessage' => 'The specified account has not passed enterprise real name verification. Please complete the verification for the account first.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7071E5FA-515E-5F53-B335-B87D619C6A66\\",\\n  \\"AccountUid\\": 0\\n}","type":"json"}]',
      'title' => '注册账号',
      'description' => '通过该API，您可以创建一个新的资源账号或者纳管一个已有的资源账号，并在该账号上应用账号基线。

注册账号是一个异步过程，创建完资源账号后，会在该账号上实施账号工厂基线。您可以通过[GetEnrolledAccount](~~GetEnrolledAccount~~)查询账号详情，获取实施结果。',
    ),
    'ListEnrolledAccounts' => 
    array (
      'summary' => '获取账号工厂中注册账号的列表。',
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
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询返回结果下一页的令牌。首次调用API不需要NextToken',
            'description' => '查询返回结果下一页的令牌。

首次调用API不需要NextToken。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAALHWGpGoYCcYMxiFfmlhvh62Xr2DzYbz/SAfc*****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '每页的最大数据条数',
            'description' => '每页的最大数据条数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '10',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'RegionId',
            'description' => '地域ID。',
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
            'title' => '注册账号列表',
            'description' => '注册账号列表。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '768F908D-A66A-5A5D-816C-20C93CBBFEE3',
              ),
              'NextToken' => 
              array (
                'title' => '查询返回结果下一页的令牌',
                'description' => '查询返回结果下一页的令牌。',
                'type' => 'string',
                'example' => 'AAAAALHWGpGoYCcYMxiFfmlhvh62Xr2DzYbz/SAfc*****',
              ),
              'EnrolledAccounts' => 
              array (
                'title' => '账号列表',
                'description' => '账号列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '账号。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'title' => '创建状态',
                      'description' => '创建状态。取值：

- Pending：等待中。
- Running：创建实施中。
- Finished：创建成功。
- Failed：创建失败。
- Scheduling：调度中。
- ScheduleFailed：调度失败。',
                      'type' => 'string',
                      'example' => 'Running',
                      'enum' => 
                      array (
                      ),
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2021-11-01T02:38:27Z',
                    ),
                    'DisplayName' => 
                    array (
                      'title' => '账号显示名称',
                      'description' => '账号显示名称。',
                      'type' => 'string',
                      'example' => 'TestAccount',
                    ),
                    'FolderId' => 
                    array (
                      'title' => '父资源夹ID',
                      'description' => '父资源夹ID。',
                      'type' => 'string',
                      'example' => 'fd-5ESoku****',
                    ),
                    'UpdateTime' => 
                    array (
                      'title' => '更新时间',
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2021-11-01T02:38:27Z',
                    ),
                    'AccountUid' => 
                    array (
                      'title' => '账号ID',
                      'description' => '账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '19534534552*****',
                    ),
                    'PayerAccountUid' => 
                    array (
                      'title' => '结算账号ID',
                      'description' => '结算账号ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '13161210500*****',
                    ),
                    'BaselineId' => 
                    array (
                      'description' => '当前应用的基线ID。',
                      'type' => 'string',
                      'example' => 'afb-bp1durvn3lgqe28v****',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter %s is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidUser.NotFound',
            'errorMessage' => 'The specified user does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEnterpriseRealName.NotFound',
            'errorMessage' => 'The specified account has not passed enterprise real name verification. Please complete the verification for the account first.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"768F908D-A66A-5A5D-816C-20C93CBBFEE3\\",\\n  \\"NextToken\\": \\"AAAAALHWGpGoYCcYMxiFfmlhvh62Xr2DzYbz/SAfc*****\\",\\n  \\"EnrolledAccounts\\": [\\n    {\\n      \\"Status\\": \\"Running\\",\\n      \\"CreateTime\\": \\"2021-11-01T02:38:27Z\\",\\n      \\"DisplayName\\": \\"TestAccount\\",\\n      \\"FolderId\\": \\"fd-5ESoku****\\",\\n      \\"UpdateTime\\": \\"2021-11-01T02:38:27Z\\",\\n      \\"AccountUid\\": 0,\\n      \\"PayerAccountUid\\": 0,\\n      \\"BaselineId\\": \\"afb-bp1durvn3lgqe28v****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListEnrolledAccountsResponse>\\n    <RequestId>768F908D-A66A-5A5D-816C-20C93CBBFEE3</RequestId>\\n    <NextToken>AAAAALHWGpGoYCcYMxiFfmlhvh62Xr2DzYbz/SAfc*****</NextToken>\\n    <EnrolledAccounts>\\n        <Status>Running</Status>\\n        <CreateTime>2021-11-01T02:38:27Z</CreateTime>\\n        <DisplayName>TestAccount</DisplayName>\\n        <FolderId>fd-5ESoku****</FolderId>\\n        <UpdateTime>2021-11-01T02:38:27Z</UpdateTime>\\n        <AccountUid>1234</AccountUid>\\n        <PayerAccountUid>1234</PayerAccountUid>\\n    </EnrolledAccounts>\\n</ListEnrolledAccountsResponse>","errorExample":""}]',
      'title' => '获取账号工厂中注册账号的列表',
    ),
    'GetEnrolledAccount' => 
    array (
      'summary' => '获取账号工厂中注册账号详情。',
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
          'name' => 'AccountUid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '账号ID',
            'description' => '账号ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '19534534552****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'RegionId',
            'description' => '地域ID。',
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
            'title' => '注册账号信息',
            'description' => '注册账号信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '768F908D-A66A-5A5D-816C-20C93CBBFEE3',
              ),
              'AccountUid' => 
              array (
                'title' => '账号ID',
                'description' => '账号ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '12868156179*****',
              ),
              'DisplayName' => 
              array (
                'title' => '账号显示名称',
                'description' => '账号显示名称。',
                'type' => 'string',
                'example' => 'test-account',
              ),
              'MasterAccountUid' => 
              array (
                'title' => '所属的Master账号ID',
                'description' => '所属的资源目录管理账号ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '19534534552*****',
              ),
              'FolderId' => 
              array (
                'title' => '父资源夹ID',
                'description' => '父资源夹ID。',
                'type' => 'string',
                'example' => 'fd-5ESoku****',
              ),
              'PayerAccountUid' => 
              array (
                'title' => '结算账号ID',
                'description' => '结算账号ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '19534534552*****',
              ),
              'Inputs' => 
              array (
                'title' => '注册账号时的输入参数',
                'description' => '注册账号时的输入参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccountNamePrefix' => 
                  array (
                    'title' => '账号名称前缀',
                    'description' => '账号名称前缀。',
                    'type' => 'string',
                    'example' => 'test-account',
                  ),
                  'DisplayName' => 
                  array (
                    'title' => '账号展示名称',
                    'description' => '账号显示名称。',
                    'type' => 'string',
                    'example' => 'test-account',
                  ),
                  'FolderId' => 
                  array (
                    'title' => '父资源夹ID',
                    'description' => '父资源夹ID。',
                    'type' => 'string',
                    'example' => 'fd-5ESoku****',
                  ),
                  'PayerAccountUid' => 
                  array (
                    'title' => '结算账号ID',
                    'description' => '结算账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '19534534552*****',
                  ),
                  'AccountUid' => 
                  array (
                    'title' => '账号ID',
                    'description' => '账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '12868156179*****',
                  ),
                  'BaselineItems' => 
                  array (
                    'title' => '基线项配置数组',
                    'description' => '基线项列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '基线项列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'title' => '基线项名称',
                          'description' => '基线项名称。',
                          'type' => 'string',
                          'example' => 'ACS-BP_ACCOUNT_FACTORY_VPC',
                        ),
                        'Version' => 
                        array (
                          'title' => '基线项版本',
                          'description' => '基线项版本。',
                          'type' => 'string',
                          'example' => '1.0',
                        ),
                        'Config' => 
                        array (
                          'title' => '基线项配置',
                          'description' => '基线项配置。',
                          'type' => 'string',
                          'example' => '{\\"Contacts\\":[{\\"Name\\":\\"governance\\",\\"Email\\":\\"wibud5210+10@gmail.com\\",\\"Mobile\\":\\"1234\\",\\"Position\\":\\"Other\\"}]}',
                        ),
                        'Skip' => 
                        array (
                          'title' => '是否跳过基线项',
                          'description' => '是否跳过基线项。取值：

- false：不跳过。
- true：跳过。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Progress' => 
              array (
                'title' => '基线实施进度',
                'description' => '基线实施进度。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '实施进度。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => '基线项名称',
                      'description' => '基线项名称。',
                      'type' => 'string',
                      'example' => 'ACS-BP_ACCOUNT_FACTORY_VPC',
                    ),
                    'Status' => 
                    array (
                      'title' => '基线项实施状态',
                      'description' => '基线项实施状态。取值：

- Pending：等待中。
- Running：实施中。
- Finished：实施成功。
- Failed：实施失败。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                  ),
                ),
              ),
              'CreateTime' => 
              array (
                'title' => '创建时间',
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2021-11-01T02:38:27Z',
              ),
              'UpdateTime' => 
              array (
                'title' => '更新时间',
                'description' => '更新时间',
                'type' => 'string',
                'example' => '2021-11-01T02:38:27Z',
              ),
              'Status' => 
              array (
                'title' => '账号注册状态',
                'description' => '账号注册状态。取值：

- Pending：等待中。
- Running：创建实施中。
- Finished：创建成功。
- Failed：创建失败。
- Scheduling：调度中。
- ScheduleFailed：调度失败。',
                'type' => 'string',
                'example' => 'Finished',
              ),
              'ErrorInfo' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息。

> 当`Status`为`Failed`或`ScheduleFailed`时，返回该错误信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Code' => 
                  array (
                    'title' => '错误码',
                    'description' => '错误码。',
                    'type' => 'string',
                    'example' => 'EntityAlreadyExists.Role',
                  ),
                  'Message' => 
                  array (
                    'title' => '错误信息',
                    'description' => '错误信息。',
                    'type' => 'string',
                    'example' => 'The role already exists.',
                  ),
                  'Recommend' => 
                  array (
                    'title' => '错误处理建议',
                    'description' => '处理建议。',
                    'type' => 'string',
                    'example' => 'https://next.api.aliyun.com/troubleshoot?q=EntityAlreadyExists.Role\\u0026product=Ram',
                  ),
                  'RequestId' => 
                  array (
                    'title' => '请求ID',
                    'description' => '请求ID。',
                    'type' => 'string',
                    'example' => '6D5EAA86-2D41-5CB7-8DA7-B60093ACAA4E',
                  ),
                ),
              ),
              'Initialized' => 
              array (
                'title' => '是否初始化完成',
                'description' => '是否初始化完成。取值：

- false：未完成。
- true：已完成。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'BaselineId' => 
              array (
                'title' => '基线ID',
                'description' => '当前应用的基线ID。',
                'type' => 'string',
                'example' => 'afb-bp1adadfadsf***',
              ),
              'BaselineItems' => 
              array (
                'description' => '基线项配置数组。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '基线项配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '基线项的名称。',
                      'type' => 'string',
                      'example' => 'ACS-BP_ACCOUNT_FACTORY_VPC',
                    ),
                    'Version' => 
                    array (
                      'description' => '基线项版本。',
                      'type' => 'string',
                      'example' => '1.0',
                    ),
                    'Config' => 
                    array (
                      'description' => '基线项配置',
                      'type' => 'string',
                      'example' => '{\\"Notifications\\":[{\\"GroupKey\\":\\"account_msg\\",\\"Contacts\\":[{\\"Name\\":\\"aa\\"}],\\"PmsgStatus\\":1,\\"EmailStatus\\":1,\\"SmsStatus\\":1}]}',
                    ),
                    'Skip' => 
                    array (
                      'description' => '是否跳过基线项。取值：

- false：不跳过。
- true：跳过。',
                      'type' => 'boolean',
                      'example' => 'false',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter %s is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidUser.NotFound',
            'errorMessage' => 'The specified user does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidBlueprint.NotFound',
            'errorMessage' => 'The specified blueprint does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEnterpriseRealName.NotFound',
            'errorMessage' => 'The specified account has not passed enterprise real name verification. Please complete the verification for the account first.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"768F908D-A66A-5A5D-816C-20C93CBBFEE3\\",\\n  \\"AccountUid\\": 0,\\n  \\"DisplayName\\": \\"test-account\\",\\n  \\"MasterAccountUid\\": 0,\\n  \\"FolderId\\": \\"fd-5ESoku****\\",\\n  \\"PayerAccountUid\\": 0,\\n  \\"Inputs\\": {\\n    \\"AccountNamePrefix\\": \\"test-account\\",\\n    \\"DisplayName\\": \\"test-account\\",\\n    \\"FolderId\\": \\"fd-5ESoku****\\",\\n    \\"PayerAccountUid\\": 0,\\n    \\"AccountUid\\": 0,\\n    \\"BaselineItems\\": [\\n      {\\n        \\"Name\\": \\"ACS-BP_ACCOUNT_FACTORY_VPC\\",\\n        \\"Version\\": \\"1.0\\",\\n        \\"Config\\": \\"{\\\\\\\\\\\\\\"Contacts\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"Name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"governance\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Email\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"wibud5210+10@gmail.com\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Mobile\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1234\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Position\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Other\\\\\\\\\\\\\\"}]}\\",\\n        \\"Skip\\": false\\n      }\\n    ]\\n  },\\n  \\"Progress\\": [\\n    {\\n      \\"Name\\": \\"ACS-BP_ACCOUNT_FACTORY_VPC\\",\\n      \\"Status\\": \\"Running\\"\\n    }\\n  ],\\n  \\"CreateTime\\": \\"2021-11-01T02:38:27Z\\",\\n  \\"UpdateTime\\": \\"2021-11-01T02:38:27Z\\",\\n  \\"Status\\": \\"Finished\\",\\n  \\"ErrorInfo\\": {\\n    \\"Code\\": \\"EntityAlreadyExists.Role\\",\\n    \\"Message\\": \\"The role already exists.\\",\\n    \\"Recommend\\": \\"https://next.api.aliyun.com/troubleshoot?q=EntityAlreadyExists.Role\\\\\\\\u0026product=Ram\\",\\n    \\"RequestId\\": \\"6D5EAA86-2D41-5CB7-8DA7-B60093ACAA4E\\"\\n  },\\n  \\"Initialized\\": true,\\n  \\"BaselineId\\": \\"afb-bp1adadfadsf***\\",\\n  \\"BaselineItems\\": [\\n    {\\n      \\"Name\\": \\"ACS-BP_ACCOUNT_FACTORY_VPC\\",\\n      \\"Version\\": \\"1.0\\",\\n      \\"Config\\": \\"{\\\\\\\\\\\\\\"Notifications\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"GroupKey\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"account_msg\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Contacts\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"Name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"aa\\\\\\\\\\\\\\"}],\\\\\\\\\\\\\\"PmsgStatus\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"EmailStatus\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"SmsStatus\\\\\\\\\\\\\\":1}]}\\",\\n      \\"Skip\\": false\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取账号工厂中注册账号详情',
    ),
    'GetAccountFactoryBaseline' => 
    array (
      'summary' => '获取账号工厂基线详情。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
          'name' => 'BaselineId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '基线ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'afb-bp1nf0enuzb89az*****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'RegionId',
            'description' => '地域ID。',
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
            'title' => 'ResponseBaseResult<GetAccountFactoryBaselineResponse>',
            'description' => '基线配置。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '60D54503-F1F6-51B6-B6FA-A70CBDA2A68C',
              ),
              'BaselineId' => 
              array (
                'description' => '基线ID。',
                'type' => 'string',
                'example' => 'afb-bp16ae2k8a3yo3d*****',
              ),
              'BaselineName' => 
              array (
                'description' => '基线名称。',
                'type' => 'string',
                'example' => 'Default',
                'default' => 'Default',
              ),
              'BaselineItems' => 
              array (
                'description' => '基线项列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '基线项配置。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '基线项的名称。',
                      'type' => 'string',
                      'example' => 'ACS-BP_ACCOUNT_FACTORY_VPC',
                    ),
                    'Version' => 
                    array (
                      'description' => '基线项的版本。',
                      'type' => 'string',
                      'example' => '1.0',
                    ),
                    'Config' => 
                    array (
                      'description' => '基线项的配置。

格式为JSON字符串。',
                      'type' => 'string',
                      'example' => '{\\"Notifications\\":[{\\"GroupKey\\":\\"account_msg\\",\\"Contacts\\":[{\\"Name\\":\\"aa\\"}],\\"PmsgStatus\\":1,\\"EmailStatus\\":1,\\"SmsStatus\\":1}]}',
                    ),
                  ),
                ),
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2022-11-28T00:46:34Z',
              ),
              'UpdateTime' => 
              array (
                'description' => '更新时间。',
                'type' => 'string',
                'example' => '2022-11-02T01:00:07Z',
              ),
              'Description' => 
              array (
                'description' => '基线描述。',
                'type' => 'string',
                'example' => '默认基线',
              ),
              'Type' => 
              array (
                'description' => '基线类型。取值：
- System：系统默认基线。
- Custom：用户自定义基线。',
                'type' => 'string',
                'example' => 'Custom',
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
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter %s is not valid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidUser.NotFound',
            'errorMessage' => 'The specified user does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidBaseline.NotFound',
            'errorMessage' => 'The specified baseline does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidEnterpriseRealName.NotFound',
            'errorMessage' => 'The specified account has not passed enterprise real name verification. Please complete the verification for the account first.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"60D54503-F1F6-51B6-B6FA-A70CBDA2A68C\\",\\n  \\"BaselineId\\": \\"afb-bp16ae2k8a3yo3d*****\\",\\n  \\"BaselineName\\": \\"Default\\",\\n  \\"BaselineItems\\": [\\n    {\\n      \\"Name\\": \\"ACS-BP_ACCOUNT_FACTORY_VPC\\",\\n      \\"Version\\": \\"1.0\\",\\n      \\"Config\\": \\"{\\\\\\\\\\\\\\"Notifications\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"GroupKey\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"account_msg\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Contacts\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"Name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"aa\\\\\\\\\\\\\\"}],\\\\\\\\\\\\\\"PmsgStatus\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"EmailStatus\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"SmsStatus\\\\\\\\\\\\\\":1}]}\\"\\n    }\\n  ],\\n  \\"CreateTime\\": \\"2022-11-28T00:46:34Z\\",\\n  \\"UpdateTime\\": \\"2022-11-02T01:00:07Z\\",\\n  \\"Description\\": \\"默认基线\\",\\n  \\"Type\\": \\"Custom\\"\\n}","type":"json"}]',
      'title' => '获取账号工厂基线详情',
    ),
    'ListAccountFactoryBaselines' => 
    array (
      'summary' => '获取账号工厂基线列表。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
      ),
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询返回结果下一页的令牌。

首次调用API不需要NextToken。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAALHWGpGoYCcYMxiFfmlhvh62Xr2DzYbz/SAfc*****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的最大数据条数。

取值范围：1~100。默认值：10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'RegionId',
            'description' => '地域ID。',
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
            'title' => 'ResponsePageResult<ListAccountFactoryBaselinesResponse>',
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '查询返回结果下一页的令牌。',
                'type' => 'string',
                'example' => 'AAAAALHWGpGoYCcYMxiFfmlhvh62Xr2DzYbz/SAfc*****',
              ),
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3245E413-7CDD-5287-8988-6A94DE8A8369',
              ),
              'Baselines' => 
              array (
                'description' => '基线列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '基线列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BaselineId' => 
                    array (
                      'description' => '基线ID。',
                      'type' => 'string',
                      'example' => 'afb-bp1durvn3lgqe28v****',
                    ),
                    'BaselineName' => 
                    array (
                      'description' => '基线名称。',
                      'type' => 'string',
                      'example' => 'Default',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2021-11-30T09:09:28Z',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2022-12-29T07:08:40Z',
                    ),
                    'Description' => 
                    array (
                      'description' => '基线描述。',
                      'type' => 'string',
                      'example' => '默认基线',
                    ),
                    'Type' => 
                    array (
                      'description' => '基线类型。取值：

- System：系统默认基线。
- Custom：用户自定义基线。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                      ),
                      'example' => 'Custom',
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
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidUser.NotFound',
            'errorMessage' => 'The specified user does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidEnterpriseRealName.NotFound',
            'errorMessage' => 'The specified account has not passed enterprise real name verification. Please complete the verification for the account first.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAALHWGpGoYCcYMxiFfmlhvh62Xr2DzYbz/SAfc*****\\",\\n  \\"RequestId\\": \\"3245E413-7CDD-5287-8988-6A94DE8A8369\\",\\n  \\"Baselines\\": [\\n    {\\n      \\"BaselineId\\": \\"afb-bp1durvn3lgqe28v****\\",\\n      \\"BaselineName\\": \\"Default\\",\\n      \\"CreateTime\\": \\"2021-11-30T09:09:28Z\\",\\n      \\"UpdateTime\\": \\"2022-12-29T07:08:40Z\\",\\n      \\"Description\\": \\"默认基线\\",\\n      \\"Type\\": \\"Custom\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取账号工厂基线列表',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'governance.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'governance.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
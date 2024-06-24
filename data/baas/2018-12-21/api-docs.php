<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Baas',
    'version' => '2018-12-21',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 144881,
      'title' => '任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeTasks',
      ),
    ),
    1 => 
    array (
      'id' => 144883,
      'title' => '区域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
      ),
    ),
    2 => 
    array (
      'id' => 144885,
      'title' => '蚂蚁区块链',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAntChainKmsAccountNew',
        1 => 'CreateAntChainConsortium',
        2 => 'CreateAntChainAccount',
        3 => 'CreateAntChainAccountWithKeyPairAutoCreation',
        4 => 'CreateAntChainContractProject',
        5 => 'CreateAntChainContractContent',
        6 => 'DeleteAntChainConsortium',
        7 => 'DeleteAntChainContractContent',
        8 => 'DeleteAntChainContractProject',
        9 => 'DeleteAntChainMiniAppQRCodeAuthorizedUser',
        10 => 'UpdateAntChainConsortium',
        11 => 'UpdateAntChain',
        12 => 'UpdateAntChainContractContent',
        13 => 'UpdateAntChainContractProject',
        14 => 'UpdateAntChainMember',
        15 => 'UpdateAntChainQRCodeAuthorization',
        16 => 'DescribeAntChainMiniAppBrowserTransactionQRCodeNew',
        17 => 'DescribeAntChainQRCodeAuthorizationV2',
        18 => 'DescribeAntChainsV2',
        19 => 'DescribeAntChainNodesV2',
        20 => 'DescribeAntChainMiniAppBrowserQRCodeAccessLogV2',
        21 => 'DescribeAntChainMembersV2',
        22 => 'DescribeAntChainDownloadPathsV2',
        23 => 'DescribeAntChainContractProjectsV2',
        24 => 'DescribeAntChainContractProjectContentTreeV2',
        25 => 'DescribeAntChainConsortiumsV2',
        26 => 'DescribeAntChainCertificateApplicationsV2',
        27 => 'DescribeAntChainAccountsV2',
        28 => 'DescribeAntChainBlockV2',
        29 => 'DescribeAntChainTransactionV2',
        30 => 'DescribeAntChainTransactionReceiptV2',
        31 => 'DescribeAntChainLatestTransactionDigestsV2',
        32 => 'DescribeAntChainTransactionStatisticsV2',
        33 => 'DescribeAntChainLatestBlocksV2',
        34 => 'DescribeAntChainInformationV2',
        35 => 'DescribeAntChainConsortiums',
        36 => 'DescribeAntChainDownloadPaths',
        37 => 'DescribeAntChains',
        38 => 'DescribeAntChainTransaction',
        39 => 'DescribeAntChainInformation',
        40 => 'DescribeAntChainLatestBlocks',
        41 => 'DescribeAntChainLatestTransactionDigests',
        42 => 'DescribeAntChainBlock',
        43 => 'DescribeAntChainAccounts',
        44 => 'DescribeAntChainCertificateApplications',
        45 => 'DescribeAntChainContractProjects',
        46 => 'DescribeAntChainContractProjectContentTree',
        47 => 'DescribeAntChainMembers',
        48 => 'DescribeAntChainTransactionReceipt',
        49 => 'DescribeAntChainNodes',
        50 => 'DescribeAntChainTransactionStatistics',
        51 => 'DescribeAntChainQRCodeAuthorization',
        52 => 'DescribeAntChainMiniAppBrowserQRCodeAccessLog',
        53 => 'DescribeAntChainMiniAppBrowserTransactionQRCode',
        54 => 'DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsers',
        55 => 'DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2',
        56 => 'ResetAntChainCertificate',
        57 => 'ApplyAntChainCertificate',
        58 => 'ApplyAntChainCertificateWithKeyAutoCreation',
        59 => 'ResetAntChainUserCertificate',
        60 => 'UnfreezeAntChainAccount',
        61 => 'FreezeAntChainAccount',
        62 => 'CopyAntChainContractProject',
        63 => 'BatchAddAntChainMiniAppQRCodeAuthorizedUsers',
      ),
    ),
    3 => 
    array (
      'id' => 144949,
      'title' => 'Hyperledger Fabric',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 144950,
          'title' => 'ChainCode 2.0',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'CreateFabricChaincodePackage',
            1 => 'SubmitFabricChaincodeDefinition',
            2 => 'InstallFabricChaincodePackage',
            3 => 'ApproveFabricChaincodeDefinition',
            4 => 'UpgradeFabricChaincodeDefinition',
            5 => 'DescribeFabricOrganizationChaincodePackage',
            6 => 'DescribeFabricChaincodeDefinitionTask',
          ),
        ),
        1 => 'CreateFabricChaincode',
        2 => 'CreateFabricChannelMember',
        3 => 'CreateFabricConsortiumMember',
        4 => 'CreateFabricChannel',
        5 => 'CreateFabricConsortium',
        6 => 'CreateFabricOrganization',
        7 => 'CreateFabricOrganizationUser',
        8 => 'DeleteFabricChaincode',
        9 => 'JoinFabricChannel',
        10 => 'DescribeFabricOrdererLogs',
        11 => 'DescribeFabricPeerLogs',
        12 => 'DescribeRootDomain',
        13 => 'DescribeFabricExplorer',
        14 => 'DescribeFabricConsortiumConfig',
        15 => 'DescribeFabricConsortiumSpecs',
        16 => 'DescribeFabricConsortiumOrderers',
        17 => 'DescribeFabricInviter',
        18 => 'DescribeFabricChannelMembers',
        19 => 'DescribeFabricOrganizations',
        20 => 'DescribeFabricCandidateOrganizations',
        21 => 'DescribeFabricChaincodeUploadPolicy',
        22 => 'DescribeFabricOrganizationChaincodes',
        23 => 'DescribeFabricConsortiumMembers',
        24 => 'DescribeFabricConsortiumAdminStatus',
        25 => 'DescribeFabricOrganizationPeers',
        26 => 'DescribeFabricConsortiumMemberApproval',
        27 => 'DescribeFabricOrganizationDeletable',
        28 => 'DescribeFabricConsortiums',
        29 => 'DescribeFabricConsortiumDeletable',
        30 => 'DescribeFabricConsortiumChaincodes',
        31 => 'DescribeFabricOrganizationMembers',
        32 => 'DescribeFabricOrganization',
        33 => 'DescribeFabricConsortiumChannels',
        34 => 'DescribeFabricOrganizationUsers',
        35 => 'DescribeFabricInvitationCode',
        36 => 'DescribeFabricOrganizationSpecs',
        37 => 'ListTagResources',
        38 => 'DescribeFabricOrganizationChannels',
        39 => 'AcceptFabricInvitation',
        40 => 'ConfirmFabricConsortiumMember',
        41 => 'InstallFabricChaincode',
        42 => 'CheckFabricConsortiumDomain',
        43 => 'SynchronizeFabricChaincode',
        44 => 'DownloadFabricOrganizationSDK',
        45 => 'ResetFabricOrganizationUserPassword',
        46 => 'CheckFabricOrganizationDomain',
        47 => 'UpgradeFabricChaincode',
        48 => 'InstantiateFabricChaincode',
        49 => 'TagResources',
        50 => 'UntagResources',
      ),
    ),
    4 => 
    array (
      'id' => 145008,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeEthereumDeletable',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'ChaincodePackage' => 
      array (
        'title' => '链码包定义',
        'description' => '链码包结构',
        'type' => 'object',
        'properties' => 
        array (
          'OrganizationId' => 
          array (
            'title' => '组织ID',
            'description' => '组织ID',
            'type' => 'string',
            'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
          ),
          'Label' => 
          array (
            'title' => '链码label',
            'description' => '链码label',
            'type' => 'string',
            'example' => 'label',
          ),
          'Checksum' => 
          array (
            'title' => '链码校验值',
            'description' => '链码校验值',
            'type' => 'string',
            'example' => '15bab12c29edbc095c33545b9867aec9be469c74a6dd5783df6ee74a24334c77',
          ),
          'ChaincodePackageId' => 
          array (
            'title' => '链码包ID',
            'description' => '链码包ID',
            'type' => 'string',
            'example' => 'cmcc-1.5:227c3cd472a8a2fcaa1c63f15812a1894348a985dc723006dd47d9f2848d10ed',
          ),
          'Md5sum' => 
          array (
            'title' => '链码md5值',
            'description' => '链码md5值',
            'type' => 'string',
            'example' => 'N02eVKuRJDA2ODtieMUxVw==',
          ),
          'ProviderUid' => 
          array (
            'title' => '上传者Uid',
            'description' => '上传者Uid',
            'type' => 'string',
            'example' => '1313158505072210',
          ),
          'ProviderBid' => 
          array (
            'title' => '上传者Bid',
            'description' => '上传者Bid',
            'type' => 'string',
            'example' => '26842',
          ),
          'Type' => 
          array (
            'title' => '链码类型',
            'description' => '链码类型',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '0',
          ),
          'TypeName' => 
          array (
            'title' => '链码类型',
            'description' => '链码类型',
            'type' => 'string',
            'example' => 'golang',
          ),
          'UploadTime' => 
          array (
            'title' => '上传时间',
            'description' => '上传时间',
            'type' => 'string',
            'example' => '1533025590',
          ),
          'InstallTime' => 
          array (
            'title' => '安装时间',
            'description' => '安装时间',
            'type' => 'string',
            'example' => '1533025590',
          ),
          'State' => 
          array (
            'title' => '链码状态',
            'description' => '链码状态',
            'type' => 'string',
            'example' => 'Running',
          ),
          'OssURL' => 
          array (
            'title' => '链码包存放bucket内路径',
            'description' => '链码包存放bucket内路径',
            'type' => 'string',
            'example' => 'hi003/7efbe860-1a40-42c9-9e6b-0bc08d7ee3a4/cmcc.tar.gz',
          ),
          'DeleteTime' => 
          array (
            'title' => '删除时间',
            'description' => '删除时间',
            'type' => 'string',
            'example' => '1533025590',
          ),
          'Deleted' => 
          array (
            'title' => '是否删除',
            'description' => '是否删除',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'Message' => 
          array (
            'title' => '信息',
            'description' => '信息',
            'type' => 'string',
            'example' => 'ok',
          ),
        ),
      ),
      'ChaincodeVO' => 
      array (
        'title' => 'ChainCode',
        'description' => 'ChainCodeVO',
        'type' => 'object',
        'properties' => 
        array (
          'Name' => 
          array (
            'title' => '链码包名称',
            'description' => '链码包名称',
            'type' => 'string',
            'example' => 'sacc',
          ),
          'Version' => 
          array (
            'title' => '链码包版本',
            'description' => '链码版本',
            'type' => 'string',
            'example' => '1.1',
          ),
          'Input' => 
          array (
            'title' => '链码初始化参数',
            'description' => '链码输入',
            'type' => 'string',
            'example' => 'args:"key" args:"val"',
          ),
          'Type' => 
          array (
            'title' => '链码类型',
            'description' => '链码类型',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '0',
          ),
          'State' => 
          array (
            'title' => '链码状态',
            'description' => '链码状态',
            'type' => 'string',
            'example' => 'Pending',
          ),
          'Path' => 
          array (
            'title' => '链码路径',
            'description' => '链码路径',
            'type' => 'string',
            'example' => 'chaincode/sacc',
          ),
          'ChaincodeId' => 
          array (
            'title' => '链码ID',
            'description' => '链码ID',
            'type' => 'string',
            'example' => 'code-sacc-jbkuldd3i7ad',
          ),
          'Install' => 
          array (
            'title' => '链码是否安装',
            'description' => '是否安装',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'Message' => 
          array (
            'title' => '信息',
            'description' => '消息',
            'type' => 'string',
            'example' => 'ok',
          ),
          'CreateTime' => 
          array (
            'title' => '创建时间',
            'description' => '创建时间',
            'type' => 'string',
            'example' => '1533025590',
          ),
          'DeployTime' => 
          array (
            'title' => '安装部署时间',
            'description' => '部署时间',
            'type' => 'string',
            'example' => '1533025590',
          ),
          'ChannelName' => 
          array (
            'title' => '通道名称',
            'description' => '通道名',
            'type' => 'string',
            'example' => 'f100',
          ),
          'EndorsePolicy' => 
          array (
            'title' => '背书策略',
            'description' => '背书策略',
            'type' => 'string',
            'example' => 'OR ("perf9141MSP.member")',
          ),
          'ConsortiumId' => 
          array (
            'title' => '联盟ID',
            'description' => '联盟ID',
            'type' => 'string',
            'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
          ),
          'ProviderId' => 
          array (
            'title' => '上传者ID',
            'description' => '链码上传者ID',
            'type' => 'string',
            'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
          ),
          'ProviderName' => 
          array (
            'title' => '链码上传者',
            'description' => '链码上传者名称',
            'type' => 'string',
            'example' => 'perf9141',
          ),
          'ChannelId' => 
          array (
            'title' => '通道ID',
            'description' => '通道ID',
            'type' => 'string',
            'example' => 'chan-test-b0wx5suhgyb9p',
          ),
          'Management' => 
          array (
            'title' => '是否是管理链码',
            'description' => '是否是管理链码',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'ChaincodePackageId' => 
          array (
            'title' => '链码包ID',
            'description' => '链码包ID',
            'type' => 'string',
            'example' => 'sacc_v1.0:698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860',
          ),
          'InitRequired' => 
          array (
            'title' => '是否需要初始化',
            'description' => '是否需要初始化',
            'type' => 'boolean',
            'example' => 'false',
          ),
          'ChaincodeDefinitionId' => 
          array (
            'title' => '链码定义ID',
            'description' => '链码定义ID',
            'type' => 'string',
            'example' => 'a5f04baed775b016e8dc386783f40a2c8b13823cac22bc5fd11846cca4a13a9a',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'DescribeTasks' => 
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
              'DynamicMessage' => 
              array (
                'description' => '动态消息。',
                'type' => 'string',
                'example' => 'msg',
              ),
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'DynamicCode' => 
              array (
                'description' => '错误代码',
                'type' => 'string',
                'example' => 'code',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Action' => 
                    array (
                      'description' => '操作',
                      'type' => 'string',
                      'example' => 'action',
                    ),
                    'Result' => 
                    array (
                      'description' => '结果',
                      'type' => 'string',
                      'example' => 'result',
                    ),
                    'Sender' => 
                    array (
                      'description' => '发送者',
                      'type' => 'string',
                      'example' => 'sender',
                    ),
                    'OperationType' => 
                    array (
                      'description' => '操作类型',
                      'type' => 'string',
                      'example' => 'type',
                    ),
                    'Handled' => 
                    array (
                      'description' => '是否已操作',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ResponseTime' => 
                    array (
                      'description' => '响应时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'Target' => 
                    array (
                      'description' => '接收者',
                      'type' => 'string',
                      'example' => 'target',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '任务Id',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '33',
                    ),
                    'RequestTime' => 
                    array (
                      'description' => '请求时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1533025590',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DynamicMessage\\": \\"msg\\",\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"ErrorCode\\": 200,\\n  \\"Success\\": true,\\n  \\"DynamicCode\\": \\"code\\",\\n  \\"Result\\": [\\n    {\\n      \\"Action\\": \\"action\\",\\n      \\"Result\\": \\"result\\",\\n      \\"Sender\\": \\"sender\\",\\n      \\"OperationType\\": \\"type\\",\\n      \\"Handled\\": false,\\n      \\"ResponseTime\\": \\"1533025590\\",\\n      \\"Target\\": \\"target\\",\\n      \\"TaskId\\": 33,\\n      \\"RequestTime\\": 1533025590\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => 'DescribeTasks',
      'summary' => '获取任务列表。',
    ),
    'DescribeRegions' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        1 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回值的语言，取值：

- **zh-CN**：中文，默认值。
- **en-US**：英文。',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D1597848-E708-522C-9275-3A202FC8B63A',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Regions' => 
              array (
                'description' => '地域列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionEndpoint' => 
                    array (
                      'description' => '地域对应的接入地址（Endpoint）。',
                      'type' => 'string',
                      'example' => 'baas.cn-hangzhou.aliyuncs.com',
                    ),
                    'LocalName' => 
                    array (
                      'description' => '地域名称',
                      'type' => 'string',
                      'example' => '华东1（杭州）',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D1597848-E708-522C-9275-3A202FC8B63A\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Regions\\": [\\n    {\\n      \\"RegionEndpoint\\": \\"baas.cn-hangzhou.aliyuncs.com\\",\\n      \\"LocalName\\": \\"华东1（杭州）\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取区域列表',
      'summary' => '获取区域列表。',
    ),
    'CreateAntChainKmsAccountNew' => 
    array (
      'summary' => '创建托管账户。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => false,
            'example' => '8bd720bde18c4b37b0f4a1c7834db163',
          ),
        ),
        1 => 
        array (
          'name' => 'Account',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '账户名',
            'type' => 'string',
            'required' => false,
            'example' => 'accountname',
          ),
        ),
      ),
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
                'description' => 'HTTP状态码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '063C2175-C755-5C85-9C42-5EB432B67D9B',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => '没有权限',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'PubKey' => 
                  array (
                    'description' => '托管账户公钥',
                    'type' => 'string',
                    'example' => 'd408f5c5c3c118b23646f4059c81fbe5a1b067a12f96f4a7a5e09eae10c81288cdf64aa887af89738b9ec5d16bc124594bf820a4afa24fe0de9d8dcfd1d99500',
                  ),
                  'MyKmsKeyId' => 
                  array (
                    'description' => '托管账户ID',
                    'type' => 'string',
                    'example' => '1234565181228596659400e4-3bd7-4a83-b9af-d12654bb5779',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"063C2175-C755-5C85-9C42-5EB432B67D9B\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"没有权限\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"PubKey\\": \\"d408f5c5c3c118b23646f4059c81fbe5a1b067a12f96f4a7a5e09eae10c81288cdf64aa887af89738b9ec5d16bc124594bf820a4afa24fe0de9d8dcfd1d99500\\",\\n    \\"MyKmsKeyId\\": \\"1234565181228596659400e4-3bd7-4a83-b9af-d12654bb5779\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建蚂蚁链托管账户',
    ),
    'CreateAntChainConsortium' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConsortiumName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟名称，只能是英文大小写、数字、中文字符、短划线（-）的自由组合，不能有空格或特殊字符，限制1~100个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '联盟名称',
          ),
        ),
        1 => 
        array (
          'name' => 'ConsortiumDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟描述，可以选填，如需填写，限制在1~255个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '联盟描述',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '87FAFC6B-E7AE-4626-B7F7-AE0B88E612D5',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'ConsortiumId' => 
                  array (
                    'description' => '联盟ID',
                    'type' => 'string',
                    'example' => 'A28nO1ow',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"87FAFC6B-E7AE-4626-B7F7-AE0B88E612D5\\",\\n  \\"Result\\": {\\n    \\"ConsortiumId\\": \\"A28nO1ow\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateAntChainConsortiumResponse>\\n    <RequestId>87FAFC6B-E7AE-4626-B7F7-AE0B88E612D5</RequestId>\\n    <Result>\\n        <ConsortiumId>A28nO1ow</ConsortiumId>\\n    </Result>\\n</CreateAntChainConsortiumResponse>","errorExample":""}]',
      'title' => '创建联盟',
      'summary' => '创建联盟。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAntChainAccount' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bDXK6boZ',
          ),
        ),
        1 => 
        array (
          'name' => 'Account',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '账号名，只能是英文大小写、数字、汉字及短划线（-）的自由组合',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountPubKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '账户公钥，属于hash值，固定128个字符',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AEDC32...',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountRecoverPubKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '账户恢复公钥，属于hash值，固定128个字符',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AEDC32...',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0301F6CB-4FA6-4D03-8668-963623B63D0F',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Account' => 
                  array (
                    'description' => '账户名',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'AntChainId' => 
                  array (
                    'description' => '区块链ID',
                    'type' => 'string',
                    'example' => 'bDXK6boZ',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0301F6CB-4FA6-4D03-8668-963623B63D0F\\",\\n  \\"Result\\": {\\n    \\"Account\\": \\"test\\",\\n    \\"AntChainId\\": \\"bDXK6boZ\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '在一条蚂蚁区块链上创建一个账户',
      'summary' => '在一条蚂蚁区块链上创建一个账户。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAntChainAccountWithKeyPairAutoCreation' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1q8B5R9p',
          ),
        ),
        1 => 
        array (
          'name' => 'Account',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '账户名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'accountname',
          ),
        ),
        2 => 
        array (
          'name' => 'Password',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '密码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'password',
          ),
        ),
        3 => 
        array (
          'name' => 'RecoverPassword',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '恢复密码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '************',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5F058BB4-3043-4638-86D4-EED84AD1AE54',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'AccountPublicKey' => 
                  array (
                    'description' => '账户公钥',
                    'type' => 'string',
                    'example' => 'b***7',
                  ),
                  'Account' => 
                  array (
                    'description' => '账户名',
                    'type' => 'string',
                    'example' => 'accountname',
                  ),
                  'AccountRecoverPrivateKey' => 
                  array (
                    'description' => '账户恢复私钥',
                    'type' => 'string',
                    'example' => '-----BEGIN ENCRYPTED PRIVATE KEY-----\\nM***Io=\\n-----END ENCRYPTED PRIVATE KEY-----\\n',
                  ),
                  'AccountRecoverPublicKey' => 
                  array (
                    'description' => '账户恢复公钥',
                    'type' => 'string',
                    'example' => 'd***b',
                  ),
                  'AccountPrivateKey' => 
                  array (
                    'description' => '账户私钥',
                    'type' => 'string',
                    'example' => '-----BEGIN ENCRYPTED PRIVATE KEY-----\\nM***8=\\n-----END ENCRYPTED PRIVATE KEY-----\\n',
                  ),
                  'AntChainId' => 
                  array (
                    'description' => '区块链ID',
                    'type' => 'string',
                    'example' => '1q8B5R9p',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5F058BB4-3043-4638-86D4-EED84AD1AE54\\",\\n  \\"Result\\": {\\n    \\"AccountPublicKey\\": \\"b***7\\",\\n    \\"Account\\": \\"accountname\\",\\n    \\"AccountRecoverPrivateKey\\": \\"-----BEGIN ENCRYPTED PRIVATE KEY-----\\\\\\\\nM***Io=\\\\\\\\n-----END ENCRYPTED PRIVATE KEY-----\\\\\\\\n\\",\\n    \\"AccountRecoverPublicKey\\": \\"d***b\\",\\n    \\"AccountPrivateKey\\": \\"-----BEGIN ENCRYPTED PRIVATE KEY-----\\\\\\\\nM***8=\\\\\\\\n-----END ENCRYPTED PRIVATE KEY-----\\\\\\\\n\\",\\n    \\"AntChainId\\": \\"1q8B5R9p\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => 'CreateAntChainAccountWithKeyPairAutoCreation',
      'summary' => '在一条蚂蚁区块链上创建一个账户，通过自动生成keypair 的方式。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAntChainContractProject' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DV80nJXq',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目名称，只能由英文大小写、数字、常用汉字和短划线（-）的自由组合，不能有小数点、空格等特殊字符，限制在1~30个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'projectname',
          ),
        ),
        2 => 
        array (
          'name' => 'ProjectVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目版本',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v1.0.0',
          ),
        ),
        3 => 
        array (
          'name' => 'ProjectDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工程描述',
            'type' => 'string',
            'required' => false,
            'example' => 'project description',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4261A4C3-B8B5-4555-AEBC-944C3EAB23DB',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateTime' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1563951889140',
                  ),
                  'ConsortiumId' => 
                  array (
                    'description' => '联盟ID',
                    'type' => 'string',
                    'example' => 'DV80nJXq',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1563951889044',
                  ),
                  'ProjectId' => 
                  array (
                    'description' => '工程ID',
                    'type' => 'string',
                    'example' => 'R38DAbop',
                  ),
                  'ProjectName' => 
                  array (
                    'description' => '工程名称',
                    'type' => 'string',
                    'example' => 'projectname',
                  ),
                  'ProjectVersion' => 
                  array (
                    'description' => '工程版本',
                    'type' => 'string',
                    'example' => 'v1.0.0',
                  ),
                  'ProjectDescription' => 
                  array (
                    'description' => '工程描述',
                    'type' => 'string',
                    'example' => 'project description',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4261A4C3-B8B5-4555-AEBC-944C3EAB23DB\\",\\n  \\"Result\\": {\\n    \\"UpdateTime\\": 1563951889140,\\n    \\"ConsortiumId\\": \\"DV80nJXq\\",\\n    \\"CreateTime\\": 1563951889044,\\n    \\"ProjectId\\": \\"R38DAbop\\",\\n    \\"ProjectName\\": \\"projectname\\",\\n    \\"ProjectVersion\\": \\"v1.0.0\\",\\n    \\"ProjectDescription\\": \\"project description\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '在联盟内创建一个合约工程',
      'summary' => '在联盟内创建一个合约工程。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateAntChainContractContent' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '合约工程ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bDXK1b8Z',
          ),
        ),
        1 => 
        array (
          'name' => 'ParentContentId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '上级目录ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'R38DYDop',
          ),
        ),
        2 => 
        array (
          'name' => 'ContentName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '新建文件/文件夹名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'newFile',
          ),
        ),
        3 => 
        array (
          'name' => 'IsDirectory',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否是文件夹',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '新建文件/文件夹内容',
            'type' => 'string',
            'required' => false,
            'example' => '""',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'C407F102-062A-44B3-BBDC-E3B2718F633D',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'ContentName' => 
                  array (
                    'description' => '新建文件/文件夹名称',
                    'type' => 'string',
                    'example' => 'newFile',
                  ),
                  'ParentContentId' => 
                  array (
                    'description' => '上级目录ID',
                    'type' => 'string',
                    'example' => 'R38DYDop',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'string',
                    'example' => '1564024964404',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1564024964404',
                  ),
                  'ProjectId' => 
                  array (
                    'description' => '合约工程ID',
                    'type' => 'string',
                    'example' => 'bDXK1b8Z',
                  ),
                  'IsDirectory' => 
                  array (
                    'description' => '是否是目录',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Content' => 
                  array (
                    'description' => '新建文件/文件夹内容',
                    'type' => 'string',
                    'example' => '""',
                  ),
                  'ContentId' => 
                  array (
                    'description' => '新建文件/文件夹ID',
                    'type' => 'string',
                    'example' => 'R6XMn59e',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C407F102-062A-44B3-BBDC-E3B2718F633D\\",\\n  \\"Result\\": {\\n    \\"ContentName\\": \\"newFile\\",\\n    \\"ParentContentId\\": \\"R38DYDop\\",\\n    \\"UpdateTime\\": \\"1564024964404\\",\\n    \\"CreateTime\\": \\"1564024964404\\",\\n    \\"ProjectId\\": \\"bDXK1b8Z\\",\\n    \\"IsDirectory\\": false,\\n    \\"Content\\": \\"\\\\\\"\\\\\\"\\",\\n    \\"ContentId\\": \\"R6XMn59e\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建合约工程内容',
      'summary' => '创建一个合约工程的内容，可以是文件或者文件夹。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteAntChainConsortium' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'q0oWq92P',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F3685787-9F2F-4D60-ADD6-07A5179552CA',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"F3685787-9F2F-4D60-ADD6-07A5179552CA\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAntChainConsortiumResponse>\\n    <Result>success</Result>\\n    <RequestId>F3685787-9F2F-4D60-ADD6-07A5179552CA</RequestId>\\n</DeleteAntChainConsortiumResponse>","errorExample":""}]',
      'title' => '删除联盟',
      'summary' => '删除联盟。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteAntChainContractContent' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ContentId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GKX7KZX0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '7E54F588-39DE-446F-9A16-B9BB0B05DF44',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"7E54F588-39DE-446F-9A16-B9BB0B05DF44\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAntChainContractContentResponse>\\n    <Result>success</Result>\\n    <RequestId>7E54F588-39DE-446F-9A16-B9BB0B05DF44</RequestId>\\n</DeleteAntChainContractContentResponse>","errorExample":""}]',
      'title' => '删除一个合约工程的内容',
      'summary' => '删除一个合约工程的内容。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteAntChainContractProject' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ProjectId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AVXeKq8R',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4FAC5F05-FDF0-4599-9522-0120525F0145',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"4FAC5F05-FDF0-4599-9522-0120525F0145\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAntChainContractProjectResponse>\\n    <Result>success</Result>\\n    <RequestId>4FAC5F05-FDF0-4599-9522-0120525F0145</RequestId>\\n</DeleteAntChainContractProjectResponse>","errorExample":""}]',
      'title' => '在联盟内删除一个合约工程',
      'summary' => '在联盟内删除一个合约工程。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteAntChainMiniAppQRCodeAuthorizedUser' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bDXK6boZ',
          ),
        ),
        1 => 
        array (
          'name' => 'Phone',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '被取消授权的用户，内容为支付宝账号对应的手机号',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1380013****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\"\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>DB3E99D7-2540-458E-B8D6-28DC6F0F2437</RequestId>\\n    <Result>success</Result>\\n</data>\\n<requestId>DB3E99D7-2540-458E-B8D6-28DC6F0F2437</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => '取消蚂蚁区块链的交易二维码扫码权限',
      'summary' => '取消蚂蚁区块链的交易二维码扫码权限。',
    ),
    'UpdateAntChainConsortium' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'q0oWq92P',
          ),
        ),
        1 => 
        array (
          'name' => 'ConsortiumName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '联盟名称',
          ),
        ),
        2 => 
        array (
          'name' => 'ConsortiumDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟描述',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '测试联盟',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1E55C947-19B4-4AAD-9D22-0B8DA8904B3D',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"1E55C947-19B4-4AAD-9D22-0B8DA8904B3D\\"\\n}","errorExample":""},{"type":"xml","example":"<xml version=\\"1.0\\" encoding=\\"UTF-8\\" >\\n\\t<code>200</code>\\n\\t<data>\\n\\t\\t<RequestId>1E55C947-19B4-4AAD-9D22-0B8DA8904B3D</RequestId>\\n\\t\\t<Result>success</Result>\\n\\t</data>\\n\\t<requestId>1E55C947-19B4-4AAD-9D22-0B8DA8904B3D</requestId>\\n\\t<successResponse>true</successResponse>\\n</xml>\\n","errorExample":""}]',
      'title' => '更新联盟属性',
      'summary' => '更新联盟属性。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateAntChain' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pYogqb9v',
          ),
        ),
        1 => 
        array (
          'name' => 'AntChainName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '修改名称',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F6A52E53-2CCB-4C3C-A44D-45FAEBC24E47',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"F6A52E53-2CCB-4C3C-A44D-45FAEBC24E47\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新一条蚂蚁区块链名字',
      'summary' => '更新一条蚂蚁区块链名字。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateAntChainContractContent' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ContentId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'R6XMn59e',
          ),
        ),
        1 => 
        array (
          'name' => 'ParentContentId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '上级目录ID',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'R38DYDop',
          ),
        ),
        2 => 
        array (
          'name' => 'ContentName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '更新文件/文件夹名称',
            'type' => 'string',
            'required' => false,
            'example' => 'newFile',
          ),
        ),
        3 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '文件内容',
            'type' => 'string',
            'required' => false,
            'example' => 'update content',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '08CBD579-C430-4F1F-9011-C120FA1E9B97',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"08CBD579-C430-4F1F-9011-C120FA1E9B97\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新一个合约工程的内容',
      'summary' => '更新一个合约工程的内容。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateAntChainContractProject' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ProjectId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '合约工程ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bDXK1b8Z',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '合约工程名称',
            'type' => 'string',
            'required' => false,
            'example' => '更新合约工程名称',
          ),
        ),
        2 => 
        array (
          'name' => 'ProjectVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '合约工程版本',
            'type' => 'string',
            'required' => false,
            'example' => 'v1.1.1',
          ),
        ),
        3 => 
        array (
          'name' => 'ProjectDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '合约工程描述',
            'type' => 'string',
            'required' => false,
            'example' => '合约工程的版本描述',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9EBD381E-A19E-4875-8771-EDA08A0416D3',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"9EBD381E-A19E-4875-8771-EDA08A0416D3\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '在联盟内更新一个合约工程的属性',
      'summary' => '在联盟内更新一个合约工程的属性。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateAntChainMember' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MemberName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '成员名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'updatename',
          ),
        ),
        1 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AroN3X2l',
          ),
        ),
        2 => 
        array (
          'name' => 'MemberId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '成员ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1287126353301234',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5BA242B2-AB0C-4D06-94EB-23CEC4F7B95E',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"5BA242B2-AB0C-4D06-94EB-23CEC4F7B95E\\"\\n}","errorExample":""},{"type":"xml","example":"<xml version=\\"1.0\\" encoding=\\"UTF-8\\">\\n\\t<code>200</code>\\n\\t<data>\\n\\t\\t<RequestId>5BA242B2-AB0C-4D06-94EB-23CEC4F7B95E</RequestId>\\n\\t\\t<Result>success</Result>\\n\\t</data>\\n\\t<requestId>5BA242B2-AB0C-4D06-94EB-23CEC4F7B95E</requestId>\\n\\t<successResponse>true</successResponse>\\n</xml>\\n\\t\\n","errorExample":""}]',
      'title' => '更新联盟成员属性',
      'summary' => '更新联盟成员属性。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateAntChainQRCodeAuthorization' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bDXK6boZ',
          ),
        ),
        1 => 
        array (
          'name' => 'QRCodeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '二维码类型，当前可以选值为 MINI_APP_BROWSER_TRANSACTION 代表支付宝小程序区块链浏览器。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MINI_APP_BROWSER_TRANSACTION',
          ),
        ),
        2 => 
        array (
          'name' => 'AuthorizationType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '授权类型， 当前可选值为 ALL_USER_AUTHORIZATION 代表授权所有用户，SPECIFIC_USER_AUTHORIZATION 代表授权部分用户，UNAUTHORIZED 代表未授权 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ALL_USER_AUTHORIZATION',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateAntChainQRCodeAuthorizationResponse>\\n    <Result>success</Result>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n</UpdateAntChainQRCodeAuthorizationResponse>","errorExample":""}]',
      'title' => '设置蚂蚁区块链的交易二维码授权状态',
      'summary' => '设置蚂蚁区块链的交易二维码授权状态。',
    ),
    'DescribeAntChainMiniAppBrowserTransactionQRCodeNew' => 
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bDXK6boZ',
          ),
        ),
        1 => 
        array (
          'name' => 'TransactionHash',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '交易哈希值',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a1f1371012cf840a9e4c6bde430d5ba600e422e592d153bd2689783cd1f87d0',
          ),
        ),
        2 => 
        array (
          'name' => 'ContractId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '合约ID',
            'type' => 'string',
            'required' => false,
            'example' => '9782291a957d28bec9e02f3dcb27d78392815ede7670b70793e0fd9763309cda',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Base64QRCodePNG' => 
                  array (
                    'description' => 'Base64编码的二维码 png 图片',
                    'type' => 'string',
                    'example' => 'iVBORw0KGgoAAAANSUhEUgAAAPAAAADwCAIAAACxN37FAAAcb0lEQVR42u3dCZAc1XkAYGlPSRZIGIwEtos4tlM4lE05hhBsU',
                  ),
                  'QRCodeContent' => 
                  array (
                    'description' => '二维码内容',
                    'type' => 'string',
                    'example' => 'https://render.antfin.com/p/s/miniapp-web/?type=trans&from=aliyun&bizid=8bd720bde18c4b37b0f4a1c7834db163&hash=ac73c8fa158436513e0b398632d9a082e04cee3eac6f9fb50087a46d801bdfd1&contractId=',
                  ),
                  'TransactionHash' => 
                  array (
                    'description' => '交易Hash',
                    'type' => 'string',
                    'example' => 'ac73c8fa158436513e0b398632d9a082e04cee3eac6f9fb50087a46d801bdfd1',
                  ),
                  'AntChainId' => 
                  array (
                    'description' => '区块链ID',
                    'type' => 'string',
                    'example' => '8bd720bde18c4b37b0f4a1c7834db163',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"Base64QRCodePNG\\": \\"iVBORw0KGgoAAAANSUhEUgAAAPAAAADwCAIAAACxN37FAAAcb0lEQVR42u3dCZAc1XkAYGlPSRZIGIwEtos4tlM4lE05hhBsU\\",\\n    \\"QRCodeContent\\": \\"https://render.antfin.com/p/s/miniapp-web/?type=trans&from=aliyun&bizid=8bd720bde18c4b37b0f4a1c7834db163&hash=ac73c8fa158436513e0b398632d9a082e04cee3eac6f9fb50087a46d801bdfd1&contractId=\\",\\n    \\"TransactionHash\\": \\"ac73c8fa158436513e0b398632d9a082e04cee3eac6f9fb50087a46d801bdfd1\\",\\n    \\"AntChainId\\": \\"8bd720bde18c4b37b0f4a1c7834db163\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainMiniAppBrowserTransactionQRCodeNewResponse>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <Base64QRCodePNG>iVBORw0KGgoAAAANSUhEUgAAAPAAAADwCAIAAACxN37FAAAcb0lEQVR42u3dCZAc1XkAYGlPSRZIGIwEtos4tlM4lE05hhBsU</Base64QRCodePNG>\\n        <QRCodeContent>https://render.antfin.com/p/s/miniapp-web/?type=trans&amp;from=aliyun&amp;bizid=8bd720bde18c4b37b0f4a1c7834db163&amp;hash=ac73c8fa158436513e0b398632d9a082e04cee3eac6f9fb50087a46d801bdfd1&amp;contractId=</QRCodeContent>\\n        <TransactionHash>ac73c8fa158436513e0b398632d9a082e04cee3eac6f9fb50087a46d801bdfd1</TransactionHash>\\n        <AntChainId>8bd720bde18c4b37b0f4a1c7834db163</AntChainId>\\n    </Result>\\n</DescribeAntChainMiniAppBrowserTransactionQRCodeNewResponse>","errorExample":""}]',
      'title' => '获取蚂蚁区块链交易二维码',
      'summary' => '获取蚂蚁区块链交易二维码（仅适用于阿里云国内站）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainQRCodeAuthorizationV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8bd720bde18c4b37b0f4a1c7834db163',
          ),
        ),
        1 => 
        array (
          'name' => 'QRCodeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '二维码类型，当前可以选值为 MINI_APP_BROWSER_TRANSACTION 代表支付宝小程序区块链浏览器。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MINI_APP_BROWSER_TRANSACTION',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '980061FC-058D-4298-8598-D9DDB10D0ED4',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '返回消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'QRCodeType' => 
                  array (
                    'description' => '二维码类型，当前可以选值为 MINI_APP_BROWSER_TRANSACTION 代表支付宝小程序区块链浏览器。',
                    'type' => 'string',
                    'example' => 'MINI_APP_BROWSER_TRANSACTION',
                  ),
                  'AuthorizationType' => 
                  array (
                    'description' => '授权类型， 当前可选值为 ALL_USER_AUTHORIZATION 代表授权所有用户，SPECIFIC_USER_AUTHORIZATION 代表授权部分用户，UNAUTHORIZED 代表未授权',
                    'type' => 'string',
                    'example' => 'ALL_USER_AUTHORIZATION',
                  ),
                  'AntChainId' => 
                  array (
                    'description' => '区块链ID',
                    'type' => 'string',
                    'example' => '8bd720bde18c4b37b0f4a1c7834db163',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"980061FC-058D-4298-8598-D9DDB10D0ED4\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"QRCodeType\\": \\"MINI_APP_BROWSER_TRANSACTION\\",\\n    \\"AuthorizationType\\": \\"ALL_USER_AUTHORIZATION\\",\\n    \\"AntChainId\\": \\"8bd720bde18c4b37b0f4a1c7834db163\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainQRCodeAuthorizationV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>980061FC-058D-4298-8598-D9DDB10D0ED4</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <QRCodeType>MINI_APP_BROWSER_TRANSACTION</QRCodeType>\\n        <AuthorizationType>ALL_USER_AUTHORIZATION</AuthorizationType>\\n        <AntChainId>8bd720bde18c4b37b0f4a1c7834db163</AntChainId>\\n    </Result>\\n</DescribeAntChainQRCodeAuthorizationV2Response>","errorExample":""}]',
      'title' => '查询交易二维码授权状态',
      'summary' => '查询蚂蚁区块链交易二维码授权状态。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainsV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分页号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'M8GaMEyX',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'DBD6C69E-22B9-419E-B072-7A715F3AA330',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'IsExist' => 
                  array (
                    'description' => '是否存在',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'AntChains' => 
                  array (
                    'description' => '区块链信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ExpireTime' => 
                        array (
                          'description' => '过期时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1672329600000',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1609221924000',
                        ),
                        'RestStatus' => 
                        array (
                          'description' => 'Rest状态',
                          'type' => 'string',
                          'example' => 'CREATE',
                        ),
                        'ChainType' => 
                        array (
                          'description' => '区块链的类型',
                          'type' => 'string',
                          'example' => 'Contract',
                        ),
                        'IsAdmin' => 
                        array (
                          'description' => '是否为管理员',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'MerkleTreeSuit' => 
                        array (
                          'description' => 'Merkle树类型',
                          'type' => 'string',
                          'example' => 'fdmt',
                        ),
                        'MemberStatus' => 
                        array (
                          'description' => '成员状态',
                          'type' => 'string',
                          'example' => 'ChainApplied',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例ID',
                          'type' => 'string',
                          'example' => 'ALIYUN202012291405173265824745109',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '区域信息',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'AntChainName' => 
                        array (
                          'description' => '区块链名称',
                          'type' => 'string',
                          'example' => '专业链',
                        ),
                        'Network' => 
                        array (
                          'description' => '网络信息',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'MonitorStatus' => 
                        array (
                          'description' => '监控状态',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'TlsAlgo' => 
                        array (
                          'description' => 'TLS加密算法',
                          'type' => 'string',
                          'example' => 'rsa',
                        ),
                        'Version' => 
                        array (
                          'description' => '详细版本',
                          'type' => 'string',
                          'example' => '2.19.1',
                        ),
                        'CipherSuit' => 
                        array (
                          'description' => '加密套件类型',
                          'type' => 'string',
                          'example' => 'classic',
                        ),
                        'ResourceSize' => 
                        array (
                          'description' => '资源类型',
                          'type' => 'string',
                          'example' => 'Basic',
                        ),
                        'NodeNum' => 
                        array (
                          'description' => '节点数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'AntChainId' => 
                        array (
                          'description' => '区块链ID',
                          'type' => 'string',
                          'example' => '8bd720bde18c4b37b0f4a1c7834db163',
                        ),
                      ),
                    ),
                  ),
                  'Pagination' => 
                  array (
                    'description' => '分页信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageSize' => 
                      array (
                        'description' => '分页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'PageNumber' => 
                      array (
                        'description' => '分页号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总数',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"DBD6C69E-22B9-419E-B072-7A715F3AA330\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"IsExist\\": true,\\n    \\"AntChains\\": [\\n      {\\n        \\"ExpireTime\\": 1672329600000,\\n        \\"CreateTime\\": 1609221924000,\\n        \\"RestStatus\\": \\"CREATE\\",\\n        \\"ChainType\\": \\"Contract\\",\\n        \\"IsAdmin\\": false,\\n        \\"MerkleTreeSuit\\": \\"fdmt\\",\\n        \\"MemberStatus\\": \\"ChainApplied\\",\\n        \\"InstanceId\\": \\"ALIYUN202012291405173265824745109\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"AntChainName\\": \\"专业链\\",\\n        \\"Network\\": \\"Running\\",\\n        \\"MonitorStatus\\": true,\\n        \\"TlsAlgo\\": \\"rsa\\",\\n        \\"Version\\": \\"2.19.1\\",\\n        \\"CipherSuit\\": \\"classic\\",\\n        \\"ResourceSize\\": \\"Basic\\",\\n        \\"NodeNum\\": 4,\\n        \\"AntChainId\\": \\"8bd720bde18c4b37b0f4a1c7834db163\\"\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageSize\\": 10,\\n      \\"PageNumber\\": 1,\\n      \\"TotalCount\\": 2\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainsV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>DBD6C69E-22B9-419E-B072-7A715F3AA330</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <IsExist>true</IsExist>\\n        <AntChains>\\n            <ExpireTime>1672329600000</ExpireTime>\\n            <CreateTime>1609221924000</CreateTime>\\n            <RestStatus>CREATE</RestStatus>\\n            <ChainType>Contract</ChainType>\\n            <IsAdmin>false</IsAdmin>\\n            <MerkleTreeSuit>fdmt</MerkleTreeSuit>\\n            <MemberStatus>ChainApplied</MemberStatus>\\n            <InstanceId>ALIYUN202012291405173265824745109</InstanceId>\\n            <RegionId>cn-hangzhou</RegionId>\\n            <AntChainName>专业链</AntChainName>\\n            <Network>Running</Network>\\n            <MonitorStatus>true</MonitorStatus>\\n            <TlsAlgo>rsa</TlsAlgo>\\n            <Version>2.19.1</Version>\\n            <CipherSuit>classic</CipherSuit>\\n            <ResourceSize>Basic</ResourceSize>\\n            <NodeNum>4</NodeNum>\\n            <AntChainId>8bd720bde18c4b37b0f4a1c7834db163</AntChainId>\\n        </AntChains>\\n        <Pagination>\\n            <PageSize>10</PageSize>\\n            <PageNumber>1</PageNumber>\\n            <TotalCount>2</TotalCount>\\n        </Pagination>\\n    </Result>\\n</DescribeAntChainsV2Response>","errorExample":""}]',
      'title' => '获取联盟内的蚂蚁区块链列表',
      'summary' => '获取联盟内的蚂蚁区块链列表（仅适用于阿里云国内站）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainNodesV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8bd720bde18c4b37b0f4a1c7834db163',
          ),
        ),
        1 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => false,
            'example' => 'M8GaMEyX',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '请求结果',
                  'type' => 'string',
                  'example' => '[]',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": [\\n    \\"[]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainNodesV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>[]</Result>\\n</DescribeAntChainNodesV2Response>","errorExample":""}]',
      'title' => '查询蚂蚁区块链节点信息列表',
      'summary' => '查询一条蚂蚁区块链的节点信息列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainMiniAppBrowserQRCodeAccessLogV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8bd720bde18c4b37b0f4a1c7834db163',
          ),
        ),
        1 => 
        array (
          'name' => 'QRCodeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '二维码类型，当前可以选值为 MINI_APP_BROWSER_TRANSACTION 代表支付宝小程序区块链浏览器。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MINI_APP_BROWSER_TRANSACTION',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '	
请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessAlipayAccountCount' => 
                  array (
                    'description' => '总查询账号数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'AccessCount' => 
                  array (
                    'description' => '总查询次数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"AccessAlipayAccountCount\\": 10,\\n    \\"AccessCount\\": 100\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainMiniAppBrowserQRCodeAccessLogV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <AccessAlipayAccountCount>10</AccessAlipayAccountCount>\\n        <AccessCount>100</AccessCount>\\n    </Result>\\n</DescribeAntChainMiniAppBrowserQRCodeAccessLogV2Response>","errorExample":""}]',
      'title' => '查询蚂蚁区块链支付宝端扫码统计信息',
      'summary' => '查询蚂蚁区块链的交易二维码支付宝端扫码统计信息。',
    ),
    'DescribeAntChainMembersV2' => 
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
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面包含条例数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面编号，从1开始',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'M8GaMEyX',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Members' => 
                  array (
                    'description' => '联盟成员',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '成员身份',
                          'type' => 'string',
                          'example' => 'AllianceJoined',
                        ),
                        'MemberId' => 
                        array (
                          'description' => '成员ID',
                          'type' => 'string',
                          'example' => '1034774750177934',
                        ),
                        'Role' => 
                        array (
                          'description' => '加入联盟状态',
                          'type' => 'string',
                          'example' => 'Member',
                        ),
                        'MemberName' => 
                        array (
                          'description' => '成员名称',
                          'type' => 'string',
                          'example' => 'uid-1034774750177934',
                        ),
                        'JoinTime' => 
                        array (
                          'description' => '成员加入联盟时戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1609745002000',
                        ),
                      ),
                    ),
                  ),
                  'Pagination' => 
                  array (
                    'description' => '分页信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageSize' => 
                      array (
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'PageNumber' => 
                      array (
                        'description' => '页面编号，从1开始',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '100',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"Members\\": [\\n      {\\n        \\"Status\\": \\"AllianceJoined\\",\\n        \\"MemberId\\": \\"1034774750177934\\",\\n        \\"Role\\": \\"Member\\",\\n        \\"MemberName\\": \\"uid-1034774750177934\\",\\n        \\"JoinTime\\": 1609745002000\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageSize\\": 10,\\n      \\"PageNumber\\": 1,\\n      \\"TotalCount\\": 100\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainMembersV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <Members>\\n            <Status>AllianceJoined</Status>\\n            <MemberId>1034774750177934</MemberId>\\n            <Role>Member</Role>\\n            <MemberName>uid-1034774750177934</MemberName>\\n            <JoinTime>1609745002000</JoinTime>\\n        </Members>\\n        <Pagination>\\n            <PageSize>10</PageSize>\\n            <PageNumber>1</PageNumber>\\n            <TotalCount>100</TotalCount>\\n        </Pagination>\\n    </Result>\\n</DescribeAntChainMembersV2Response>","errorExample":""}]',
      'title' => '获取联盟成员列表',
      'summary' => '获取联盟成员列表（仅适用于阿里云国内站）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainDownloadPathsV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8bd720bde18c4b37b0f4a1c7834db163',
          ),
        ),
        1 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => false,
            'example' => 'M8GaMEyX',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '	
请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'SdkUrl' => 
                  array (
                    'description' => '	
sdk下载链接',
                    'type' => 'string',
                    'example' => 'http://***',
                  ),
                  'CaCrtUrl' => 
                  array (
                    'description' => 'ca.crt下载链接',
                    'type' => 'string',
                    'example' => 'http://***ca.crt',
                  ),
                  'ClientCrtUrl' => 
                  array (
                    'description' => 'client.crt下载链接',
                    'type' => 'string',
                    'example' => 'http://***client.crt',
                  ),
                  'TrustCaUrl' => 
                  array (
                    'description' => 'trustCA下载链接',
                    'type' => 'string',
                    'example' => 'http://***trustCa',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"SdkUrl\\": \\"http://***\\",\\n    \\"CaCrtUrl\\": \\"http://***ca.crt\\",\\n    \\"ClientCrtUrl\\": \\"http://***client.crt\\",\\n    \\"TrustCaUrl\\": \\"http://***trustCa\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainDownloadPathsV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <SdkUrl>http://***</SdkUrl>\\n        <CaCrtUrl>http://***ca.crt</CaCrtUrl>\\n        <ClientCrtUrl>http://***client.crt</ClientCrtUrl>\\n        <TrustCaUrl>http://***trustCa</TrustCaUrl>\\n    </Result>\\n</DescribeAntChainDownloadPathsV2Response>","errorExample":""}]',
      'title' => '获取一条蚂蚁区块链相关证书下载地址',
      'summary' => '获取一条蚂蚁区块链相关证书下载地址（仅适用于阿里云国内站）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainContractProjectsV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'M8GaMEyX',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面编号，从1开始',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
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
              'HttpStatusCode' => 
              array (
                'description' => '	
请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'ContractProjects' => 
                  array (
                    'description' => '合约工程',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UpdateTime' => 
                        array (
                          'description' => '更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1609848383000',
                        ),
                        'ConsortiumId' => 
                        array (
                          'description' => '	
联盟ID',
                          'type' => 'string',
                          'example' => 'M8GaMEyX',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1609848383000',
                        ),
                        'ProjectId' => 
                        array (
                          'description' => '工程ID',
                          'type' => 'string',
                          'example' => 'RXwQj6m8',
                        ),
                        'ProjectName' => 
                        array (
                          'description' => '工程名称',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'ProjectVersion' => 
                        array (
                          'description' => '工程版本',
                          'type' => 'string',
                          'example' => '1.0.0',
                        ),
                        'ProjectDescription' => 
                        array (
                          'description' => '工程描述',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                      ),
                    ),
                  ),
                  'Pagination' => 
                  array (
                    'description' => '	
分页信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageSize' => 
                      array (
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'PageNumber' => 
                      array (
                        'description' => '页面编号，从1开始',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '100',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"ContractProjects\\": [\\n      {\\n        \\"UpdateTime\\": 1609848383000,\\n        \\"ConsortiumId\\": \\"M8GaMEyX\\",\\n        \\"CreateTime\\": 1609848383000,\\n        \\"ProjectId\\": \\"RXwQj6m8\\",\\n        \\"ProjectName\\": \\"test\\",\\n        \\"ProjectVersion\\": \\"1.0.0\\",\\n        \\"ProjectDescription\\": \\"test\\"\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageSize\\": 10,\\n      \\"PageNumber\\": 1,\\n      \\"TotalCount\\": 100\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainContractProjectsV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <ContractProjects>\\n            <UpdateTime>1609848383000</UpdateTime>\\n            <ConsortiumId>M8GaMEyX</ConsortiumId>\\n            <CreateTime>1609848383000</CreateTime>\\n            <ProjectId>RXwQj6m8</ProjectId>\\n            <ProjectName>test</ProjectName>\\n            <ProjectVersion>1.0.0</ProjectVersion>\\n            <ProjectDescription>test</ProjectDescription>\\n        </ContractProjects>\\n        <Pagination>\\n            <PageSize>10</PageSize>\\n            <PageNumber>1</PageNumber>\\n            <TotalCount>100</TotalCount>\\n        </Pagination>\\n    </Result>\\n</DescribeAntChainContractProjectsV2Response>","errorExample":""}]',
      'title' => '获取联盟内合约工程列表',
      'summary' => '获取联盟内合约工程的列表（仅适用于阿里云国内站）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainContractProjectContentTreeV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ProjectId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2L9VK68g',
          ),
        ),
        1 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'M8GaMEyX',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => '""',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '	
请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Result\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"OK\\",\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainContractProjectContentTreeV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Result>\\"\\"</Result>\\n    <Success>true</Success>\\n    <Code>OK</Code>\\n    <ResultMessage>OK</ResultMessage>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n</DescribeAntChainContractProjectContentTreeV2Response>","errorExample":""}]',
      'title' => '获取一个合约工程的内容树',
      'summary' => '获取一个合约工程的内容树（仅适用于阿里云国内站）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainConsortiumsV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页显示条例数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面编号，从1开始',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
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
              'HttpStatusCode' => 
              array (
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'AntConsortiums' => 
                  array (
                    'description' => '蚂蚁区块链联盟',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ConsortiumDescription' => 
                        array (
                          'description' => '联盟描述',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Status' => 
                        array (
                          'description' => '联盟状态',
                          'type' => 'string',
                          'example' => 'Active',
                        ),
                        'IsEmptyConsortium' => 
                        array (
                          'description' => '联盟是否为空',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ConsortiumId' => 
                        array (
                          'description' => '联盟ID',
                          'type' => 'string',
                          'example' => 'M8GaMEyX',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '联盟创建时戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1609745002000',
                        ),
                        'MemberNum' => 
                        array (
                          'description' => '联盟成员数量',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'Role' => 
                        array (
                          'description' => '账户身份角色',
                          'type' => 'string',
                          'example' => 'Member',
                        ),
                        'ConsortiumName' => 
                        array (
                          'description' => '联盟名称',
                          'type' => 'string',
                          'example' => '测试用',
                        ),
                        'ChainNum' => 
                        array (
                          'description' => '联盟内区块链数量',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                      ),
                    ),
                  ),
                  'Pagination' => 
                  array (
                    'description' => '分页情况',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageSize' => 
                      array (
                        'description' => '每页展示条例数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'PageNumber' => 
                      array (
                        'description' => '分页编号，从1开始',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '联盟个数',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"AntConsortiums\\": [\\n      {\\n        \\"ConsortiumDescription\\": \\"test\\",\\n        \\"Status\\": \\"Active\\",\\n        \\"IsEmptyConsortium\\": false,\\n        \\"ConsortiumId\\": \\"M8GaMEyX\\",\\n        \\"CreateTime\\": 1609745002000,\\n        \\"MemberNum\\": 2,\\n        \\"Role\\": \\"Member\\",\\n        \\"ConsortiumName\\": \\"测试用\\",\\n        \\"ChainNum\\": 2\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageSize\\": 10,\\n      \\"PageNumber\\": 1,\\n      \\"TotalCount\\": 10\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainConsortiumsV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <AntConsortiums>\\n            <ConsortiumDescription>test</ConsortiumDescription>\\n            <Status>Active</Status>\\n            <IsEmptyConsortium>false</IsEmptyConsortium>\\n            <ConsortiumId>M8GaMEyX</ConsortiumId>\\n            <CreateTime>1609745002000</CreateTime>\\n            <MemberNum>2</MemberNum>\\n            <Role>Member</Role>\\n            <ConsortiumName>测试用</ConsortiumName>\\n            <ChainNum>2</ChainNum>\\n        </AntConsortiums>\\n        <Pagination>\\n            <PageSize>10</PageSize>\\n            <PageNumber>1</PageNumber>\\n            <TotalCount>10</TotalCount>\\n        </Pagination>\\n    </Result>\\n</DescribeAntChainConsortiumsV2Response>","errorExample":""}]',
      'title' => '获取联盟列表',
      'summary' => '获取联盟列表（仅适用于阿里云国内站）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainCertificateApplicationsV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8bd720bde18c4b37b0f4a1c7834db163',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '证书状态：
- 0：申请中
- 1：正常
- 2：失败',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面编号，从1开始',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => false,
            'example' => 'M8GaMEyX',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'CertificateApplications' => 
                  array (
                    'description' => '	
证书申请信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '状态',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'Updatetime' => 
                        array (
                          'description' => '更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1609848404000',
                        ),
                        'Createtime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1609848404000',
                        ),
                        'Bid' => 
                        array (
                          'description' => '	
阿里云Bid账号',
                          'type' => 'string',
                          'example' => '26842',
                        ),
                        'AntChainId' => 
                        array (
                          'description' => '区块链ID',
                          'type' => 'string',
                          'example' => '8bd720bde18c4b37b0f4a1c7834db163',
                        ),
                        'Username' => 
                        array (
                          'description' => '	
账户名',
                          'type' => 'string',
                          'example' => 'uid-103477475017****',
                        ),
                      ),
                    ),
                  ),
                  'Pagination' => 
                  array (
                    'description' => '分页信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageSize' => 
                      array (
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'PageNumber' => 
                      array (
                        'description' => '页面编号，从1开始',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '100',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"CertificateApplications\\": [\\n      {\\n        \\"Status\\": \\"1\\",\\n        \\"Updatetime\\": 1609848404000,\\n        \\"Createtime\\": 1609848404000,\\n        \\"Bid\\": \\"26842\\",\\n        \\"AntChainId\\": \\"8bd720bde18c4b37b0f4a1c7834db163\\",\\n        \\"Username\\": \\"uid-103477475017****\\"\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageSize\\": 10,\\n      \\"PageNumber\\": 1,\\n      \\"TotalCount\\": 100\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainCertificateApplicationsV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <CertificateApplications>\\n            <Status>1</Status>\\n            <Updatetime>1609848404000</Updatetime>\\n            <Createtime>1609848404000</Createtime>\\n            <Bid>26842</Bid>\\n            <AntChainId>8bd720bde18c4b37b0f4a1c7834db163</AntChainId>\\n            <Username>uid-103477475017****</Username>\\n        </CertificateApplications>\\n        <Pagination>\\n            <PageSize>10</PageSize>\\n            <PageNumber>1</PageNumber>\\n            <TotalCount>100</TotalCount>\\n        </Pagination>\\n    </Result>\\n</DescribeAntChainCertificateApplicationsV2Response>","errorExample":""}]',
      'title' => '查看申请连接蚂蚁区块链信息',
      'summary' => '查看联盟成员申请连接一条蚂蚁区块链的信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainAccountsV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面编号，从1开始',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '区块链ID',
          ),
        ),
        3 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => false,
            'example' => 'M8GaMEyX',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Accounts' => 
                  array (
                    'description' => '账户信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AccountPublicKey' => 
                        array (
                          'description' => '账户公钥',
                          'type' => 'string',
                          'example' => '2aa43bae103b6840ce8efdfe6f3fe5e52f8d1db0f44ff762df87ba17eb209979a0e22c934b2728c6c1bab864a6da52de60c5da89793bd839650a1a153e876e32',
                        ),
                        'Account' => 
                        array (
                          'description' => '账户名',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'AccountRecoveryKey' => 
                        array (
                          'description' => '账户恢复公钥',
                          'type' => 'string',
                          'example' => '5a36312d78681794258bb33372586c676adf150ad69e67dbfcaae61bba3607705950bc9efe1bf4a17ac24b05b1615a410e48d2a005dca251c6173495bb47ae29',
                        ),
                        'AccountStatus' => 
                        array (
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'NORMAL',
                        ),
                        'AntChainId' => 
                        array (
                          'description' => '区块链ID',
                          'type' => 'string',
                          'example' => '8bd720bde18c4b37b0f4a1c7834db163',
                        ),
                      ),
                    ),
                  ),
                  'Pagination' => 
                  array (
                    'description' => '分页信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageSize' => 
                      array (
                        'description' => '	
每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'PageNumber' => 
                      array (
                        'description' => '当前页面编号，从1开始',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '100',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"Accounts\\": [\\n      {\\n        \\"AccountPublicKey\\": \\"2aa43bae103b6840ce8efdfe6f3fe5e52f8d1db0f44ff762df87ba17eb209979a0e22c934b2728c6c1bab864a6da52de60c5da89793bd839650a1a153e876e32\\",\\n        \\"Account\\": \\"test\\",\\n        \\"AccountRecoveryKey\\": \\"5a36312d78681794258bb33372586c676adf150ad69e67dbfcaae61bba3607705950bc9efe1bf4a17ac24b05b1615a410e48d2a005dca251c6173495bb47ae29\\",\\n        \\"AccountStatus\\": \\"NORMAL\\",\\n        \\"AntChainId\\": \\"8bd720bde18c4b37b0f4a1c7834db163\\"\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageSize\\": 10,\\n      \\"PageNumber\\": 1,\\n      \\"TotalCount\\": 100\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainAccountsV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <Accounts>\\n            <AccountPublicKey>2aa43bae103b6840ce8efdfe6f3fe5e52f8d1db0f44ff762df87ba17eb209979a0e22c934b2728c6c1bab864a6da52de60c5da89793bd839650a1a153e876e32</AccountPublicKey>\\n            <Account>test</Account>\\n            <AccountRecoveryKey>5a36312d78681794258bb33372586c676adf150ad69e67dbfcaae61bba3607705950bc9efe1bf4a17ac24b05b1615a410e48d2a005dca251c6173495bb47ae29</AccountRecoveryKey>\\n            <AccountStatus>NORMAL</AccountStatus>\\n            <AntChainId>8bd720bde18c4b37b0f4a1c7834db163</AntChainId>\\n        </Accounts>\\n        <Pagination>\\n            <PageSize>10</PageSize>\\n            <PageNumber>1</PageNumber>\\n            <TotalCount>100</TotalCount>\\n        </Pagination>\\n    </Result>\\n</DescribeAntChainAccountsV2Response>","errorExample":""}]',
      'title' => '查询一条蚂蚁区块链的账户列表',
      'summary' => '查询一条蚂蚁区块链的账户列表（仅适用于阿里云国内站）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainBlockV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8bd720bde18c4b37b0f4a1c7834db163',
          ),
        ),
        1 => 
        array (
          'name' => 'Height',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块高度',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '100',
          ),
        ),
        2 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => false,
            'example' => 'M8GaMEyX',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'PreviousHash' => 
                  array (
                    'description' => '前一个区块链哈希',
                    'type' => 'string',
                    'example' => '2444ef0617e0c6845549dead70f118c5a58f03c04575ecb79e283ab5c34b491d',
                  ),
                  'Version' => 
                  array (
                    'description' => '区块版本',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'RootTxHash' => 
                  array (
                    'description' => '根交易哈希',
                    'type' => 'string',
                    'example' => '0000000000000000000000000000000000000000000000000000000000000000',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1609223363570',
                  ),
                  'TransactionSize' => 
                  array (
                    'description' => '交易数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Height' => 
                  array (
                    'description' => '	
区块高度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '254761',
                  ),
                  'BlockHash' => 
                  array (
                    'description' => '区块哈希',
                    'type' => 'string',
                    'example' => '5abf96debc87f1b64dcbaf4fa57fd46f2a06acdb5de0ba91ef9718d81aebafc7',
                  ),
                  'AntChainId' => 
                  array (
                    'description' => '区块链ID',
                    'type' => 'string',
                    'example' => '8bd720bde18c4b37b0f4a1c7834db163',
                  ),
                  'TransSummaryList' => 
                  array (
                    'description' => '交易列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Hash' => 
                        array (
                          'description' => '交易Hash',
                          'type' => 'string',
                          'example' => '076bba1b726b3bcb958cba6fffc03eaa5cbed59320271dcbc0e05648a18a94f2',
                        ),
                        'From' => 
                        array (
                          'description' => '源地址',
                          'type' => 'string',
                          'example' => 'e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b',
                        ),
                        'TransTypeV10' => 
                        array (
                          'description' => '合约链类型',
                          'type' => 'string',
                          'example' => 'CALL_CONTRACT',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1609223363570',
                        ),
                        'TransTypeV6' => 
                        array (
                          'description' => '存证链类型',
                          'type' => 'string',
                          'example' => '""',
                        ),
                        'Height' => 
                        array (
                          'description' => '区块高度',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '254761',
                        ),
                        'To' => 
                        array (
                          'description' => '目的地址',
                          'type' => 'string',
                          'example' => 'e93372533f323b2f12783aa3a586135cf421486439c2cdcde47411b78f9839ec',
                        ),
                        'GasUsed' => 
                        array (
                          'description' => 'Gas使用值',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '4000000',
                        ),
                        'BlockHash' => 
                        array (
                          'description' => '区块Hash',
                          'type' => 'string',
                          'example' => '5abf96debc87f1b64dcbaf4fa57fd46f2a06acdb5de0ba91ef9718d81aebafc7',
                        ),
                        'ReferenceCount' => 
                        array (
                          'description' => '数值',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Category' => 
                        array (
                          'description' => '分类',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '-1',
                        ),
                        'Alias' => 
                        array (
                          'description' => '区块链ID',
                          'type' => 'string',
                          'example' => '8bd720bde18c4b37b0f4a1c7834db163',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"PreviousHash\\": \\"2444ef0617e0c6845549dead70f118c5a58f03c04575ecb79e283ab5c34b491d\\",\\n    \\"Version\\": 1,\\n    \\"RootTxHash\\": \\"0000000000000000000000000000000000000000000000000000000000000000\\",\\n    \\"CreateTime\\": 1609223363570,\\n    \\"TransactionSize\\": 1,\\n    \\"Height\\": 254761,\\n    \\"BlockHash\\": \\"5abf96debc87f1b64dcbaf4fa57fd46f2a06acdb5de0ba91ef9718d81aebafc7\\",\\n    \\"AntChainId\\": \\"8bd720bde18c4b37b0f4a1c7834db163\\",\\n    \\"TransSummaryList\\": [\\n      {\\n        \\"Hash\\": \\"076bba1b726b3bcb958cba6fffc03eaa5cbed59320271dcbc0e05648a18a94f2\\",\\n        \\"From\\": \\"e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b\\",\\n        \\"TransTypeV10\\": \\"CALL_CONTRACT\\",\\n        \\"CreateTime\\": 1609223363570,\\n        \\"TransTypeV6\\": \\"\\\\\\"\\\\\\"\\",\\n        \\"Height\\": 254761,\\n        \\"To\\": \\"e93372533f323b2f12783aa3a586135cf421486439c2cdcde47411b78f9839ec\\",\\n        \\"GasUsed\\": 4000000,\\n        \\"BlockHash\\": \\"5abf96debc87f1b64dcbaf4fa57fd46f2a06acdb5de0ba91ef9718d81aebafc7\\",\\n        \\"ReferenceCount\\": 0,\\n        \\"Category\\": -1,\\n        \\"Alias\\": \\"8bd720bde18c4b37b0f4a1c7834db163\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainBlockV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <PreviousHash>2444ef0617e0c6845549dead70f118c5a58f03c04575ecb79e283ab5c34b491d</PreviousHash>\\n        <Version>1</Version>\\n        <RootTxHash>0000000000000000000000000000000000000000000000000000000000000000</RootTxHash>\\n        <CreateTime>1609223363570</CreateTime>\\n        <TransactionSize>1</TransactionSize>\\n        <Height>254761</Height>\\n        <BlockHash>5abf96debc87f1b64dcbaf4fa57fd46f2a06acdb5de0ba91ef9718d81aebafc7</BlockHash>\\n        <AntChainId>8bd720bde18c4b37b0f4a1c7834db163</AntChainId>\\n        <TransSummaryList>\\n            <Hash>076bba1b726b3bcb958cba6fffc03eaa5cbed59320271dcbc0e05648a18a94f2</Hash>\\n            <From>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</From>\\n            <TransTypeV10>CALL_CONTRACT</TransTypeV10>\\n            <CreateTime>1609223363570</CreateTime>\\n            <TransTypeV6>\\"\\"</TransTypeV6>\\n            <Height>254761</Height>\\n            <To>e93372533f323b2f12783aa3a586135cf421486439c2cdcde47411b78f9839ec</To>\\n            <GasUsed>4000000</GasUsed>\\n            <BlockHash>5abf96debc87f1b64dcbaf4fa57fd46f2a06acdb5de0ba91ef9718d81aebafc7</BlockHash>\\n            <ReferenceCount>0</ReferenceCount>\\n            <Category>-1</Category>\\n            <Alias>8bd720bde18c4b37b0f4a1c7834db163</Alias>\\n        </TransSummaryList>\\n    </Result>\\n</DescribeAntChainBlockV2Response>","errorExample":""}]',
      'title' => '根据块高查询一条蚂蚁区块链的区块信息',
      'summary' => '根据块高查询一条蚂蚁区块链的区块信息（仅适用于阿里云国内站）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainTransactionV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8bd720bde18c4b37b0f4a1c7834db163',
          ),
        ),
        1 => 
        array (
          'name' => 'Hash',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '交易哈希',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '227072dcd1a5d78098da99ccc8024304b9fb54fc6b65e37ef919d7f2da080061',
          ),
        ),
        2 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => false,
            'example' => 'M8GaMEyX',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Hash' => 
                  array (
                    'description' => '交易哈希',
                    'type' => 'string',
                    'example' => 'b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca',
                  ),
                  'BlockHash' => 
                  array (
                    'description' => '区块哈希',
                    'type' => 'string',
                    'example' => '1168bc5dd0b78d15446b15ea5a7f7822a7d07c007dd3a50becf98da220fc08f6',
                  ),
                  'BlockVersion' => 
                  array (
                    'description' => '区块版本',
                    'type' => 'string',
                    'example' => '10',
                  ),
                  'BlockHeight' => 
                  array (
                    'description' => '区块高度',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '交易创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1563954336850',
                  ),
                  'Transaction' => 
                  array (
                    'description' => '交易详情',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Hash' => 
                      array (
                        'description' => '交易哈希',
                        'type' => 'string',
                        'example' => 'b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca',
                      ),
                      'Value' => 
                      array (
                        'description' => '交易金额',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'From' => 
                      array (
                        'description' => '交易发送者哈希',
                        'type' => 'string',
                        'example' => 'e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b',
                      ),
                      'Data' => 
                      array (
                        'description' => '数据',
                        'type' => 'string',
                        'example' => '""',
                      ),
                      'Nonce' => 
                      array (
                        'description' => '交易Nonce',
                        'type' => 'string',
                        'example' => '5675407026657953619',
                      ),
                      'To' => 
                      array (
                        'description' => '交易接收方地址',
                        'type' => 'string',
                        'example' => '961085f3c7ef705ad587d0cbe11d7863a5a11af7451f4e9b1edadd74402addf5',
                      ),
                      'Timestamp' => 
                      array (
                        'description' => '交易发送时戳',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1563954336850',
                      ),
                      'Gas' => 
                      array (
                        'description' => 'Gas值',
                        'type' => 'string',
                        'example' => '4000000',
                      ),
                      'TxType' => 
                      array (
                        'description' => '交易类型',
                        'type' => 'string',
                        'example' => 'UNFREEZE_ACCOUNT_CONTRACT',
                      ),
                      'Period' => 
                      array (
                        'description' => 'Period',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1563954336850',
                      ),
                      'Extentions' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '	
扩展信息',
                          'type' => 'string',
                          'example' => '[]',
                        ),
                      ),
                      'Signatures' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '签名',
                          'type' => 'string',
                          'example' => '5s6JhauIqAlMb6d+7...',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"Hash\\": \\"b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca\\",\\n    \\"BlockHash\\": \\"1168bc5dd0b78d15446b15ea5a7f7822a7d07c007dd3a50becf98da220fc08f6\\",\\n    \\"BlockVersion\\": \\"10\\",\\n    \\"BlockHeight\\": 100,\\n    \\"CreateTime\\": 1563954336850,\\n    \\"Transaction\\": {\\n      \\"Hash\\": \\"b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca\\",\\n      \\"Value\\": \\"0\\",\\n      \\"From\\": \\"e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b\\",\\n      \\"Data\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"Nonce\\": \\"5675407026657953619\\",\\n      \\"To\\": \\"961085f3c7ef705ad587d0cbe11d7863a5a11af7451f4e9b1edadd74402addf5\\",\\n      \\"Timestamp\\": 1563954336850,\\n      \\"Gas\\": \\"4000000\\",\\n      \\"TxType\\": \\"UNFREEZE_ACCOUNT_CONTRACT\\",\\n      \\"Period\\": 1563954336850,\\n      \\"Extentions\\": [\\n        \\"[]\\"\\n      ],\\n      \\"Signatures\\": [\\n        \\"5s6JhauIqAlMb6d+7...\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainTransactionV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <Hash>b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca</Hash>\\n        <BlockHash>1168bc5dd0b78d15446b15ea5a7f7822a7d07c007dd3a50becf98da220fc08f6</BlockHash>\\n        <BlockVersion>10</BlockVersion>\\n        <BlockHeight>100</BlockHeight>\\n        <CreateTime>1563954336850</CreateTime>\\n        <Transaction>\\n            <Hash>b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca</Hash>\\n            <Value>0</Value>\\n            <From>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</From>\\n            <Data>\\"\\"</Data>\\n            <Nonce>5675407026657953619</Nonce>\\n            <To>961085f3c7ef705ad587d0cbe11d7863a5a11af7451f4e9b1edadd74402addf5</To>\\n            <Timestamp>1563954336850</Timestamp>\\n            <Gas>4000000</Gas>\\n            <TxType>UNFREEZE_ACCOUNT_CONTRACT</TxType>\\n            <Period>1563954336850</Period>\\n            <Extentions>[]</Extentions>\\n            <Signatures>5s6JhauIqAlMb6d+7...</Signatures>\\n        </Transaction>\\n    </Result>\\n</DescribeAntChainTransactionV2Response>","errorExample":""}]',
      'title' => '查询蚂蚁区块链交易信息',
      'summary' => '根据交易哈希查询一条蚂蚁区块链的交易信息（仅适用于阿里云国内站）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainTransactionReceiptV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8bd720bde18c4b37b0f4a1c7834db163',
          ),
        ),
        1 => 
        array (
          'name' => 'Hash',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '交易哈希',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8bd720bde18c4b37b0f4a1c7834db163',
          ),
        ),
        2 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => false,
            'example' => 'M8GaMEyX',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Data' => 
                  array (
                    'description' => 'Data',
                    'type' => 'string',
                    'example' => 'data',
                  ),
                  'GasUsed' => 
                  array (
                    'description' => '消耗的Gas',
                    'type' => 'string',
                    'example' => '20000',
                  ),
                  'Result' => 
                  array (
                    'description' => '结果',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Logs' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'logs',
                      'type' => 'string',
                      'example' => '[""]',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"Data\\": \\"data\\",\\n    \\"GasUsed\\": \\"20000\\",\\n    \\"Result\\": 0,\\n    \\"Logs\\": [\\n      \\"[\\\\\\"\\\\\\"]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainTransactionReceiptV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <Data>data</Data>\\n        <GasUsed>20000</GasUsed>\\n        <Result>0</Result>\\n        <Logs>[\\"\\"]</Logs>\\n    </Result>\\n</DescribeAntChainTransactionReceiptV2Response>","errorExample":""}]',
      'title' => '查询蚂蚁区块链交易回执信息',
      'summary' => '根据交易哈希查询一条蚂蚁区块链的交易回执信息（仅适用于阿里云国内站）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainLatestTransactionDigestsV2' => 
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8bd720bde18c4b37b0f4a1c7834db163',
          ),
        ),
        1 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => false,
            'example' => 'M8GaMEyX',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '请求结果',
                  'type' => 'string',
                  'example' => '[]',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": [\\n    \\"[]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainLatestTransactionDigestsV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <CreateTime>1609987477483</CreateTime>\\n        <TransactionV10Type>CALL_CONTRACT</TransactionV10Type>\\n        <From>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</From>\\n        <To>e93372533f323b2f12783aa3a586135cf421486439c2cdcde47411b78f9839ec</To>\\n        <Hash>076bba1b726b3bcb958cba6fffc03eaa5cbed59320271dcbc0e05648a18a94f2</Hash>\\n    </Result>\\n    <Result>\\n        <CreateTime>1609847759344</CreateTime>\\n        <TransactionV10Type>CALL_CONTRACT</TransactionV10Type>\\n        <From>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</From>\\n        <To>e93372533f323b2f12783aa3a586135cf421486439c2cdcde47411b78f9839ec</To>\\n        <Hash>227072dcd1a5d78098da99ccc8024304b9fb54fc6b65e37ef919d7f2da080061</Hash>\\n    </Result>\\n    <Result>\\n        <CreateTime>1609227008399</CreateTime>\\n        <TransactionV10Type>CALL_CONTRACT</TransactionV10Type>\\n        <From>4db58ada9221304b161ab0aa11b032a62d60d9ab29e41c6d238f4401c81c8189</From>\\n        <To>9782291a957d28bec9e02f3dcb27d78392815ede7670b70793e0fd9763309cda</To>\\n        <Hash>ac73c8fa158436513e0b398632d9a082e04cee3eac6f9fb50087a46d801bdfd1</Hash>\\n    </Result>\\n    <Result>\\n        <CreateTime>1609226974574</CreateTime>\\n        <TransactionV10Type>DEPLOY_CONTRACT</TransactionV10Type>\\n        <From>4db58ada9221304b161ab0aa11b032a62d60d9ab29e41c6d238f4401c81c8189</From>\\n        <To>9782291a957d28bec9e02f3dcb27d78392815ede7670b70793e0fd9763309cda</To>\\n        <Hash>2747c362416ab4c11fafca15bf652c51efb363c1fbdd8c0ed45aa20c56083777</Hash>\\n    </Result>\\n    <Result>\\n        <CreateTime>1609226512448</CreateTime>\\n        <TransactionV10Type>CREATE_ACCOUNT</TransactionV10Type>\\n        <From>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</From>\\n        <To>4db58ada9221304b161ab0aa11b032a62d60d9ab29e41c6d238f4401c81c8189</To>\\n        <Hash>954eb876a579698f4c09aa12a91e22020ca169e13c711db342d391b0ad233f3f</Hash>\\n    </Result>\\n    <Result>\\n        <CreateTime>1609223761557</CreateTime>\\n        <TransactionV10Type>CREATE_ACCOUNT</TransactionV10Type>\\n        <From>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</From>\\n        <To>b3d4c1bc05776e66e2f080d6a311b2c0667f623db1b65924a8823e31325e8d2c</To>\\n        <Hash>c3b4b3327731cf0221fbac39cc8816438e0617552ae0948ed3f68ec49a20b639</Hash>\\n    </Result>\\n</DescribeAntChainLatestTransactionDigestsV2Response>","errorExample":""}]',
      'title' => '查询一条蚂蚁区块链最新的交易摘要列表',
      'summary' => '查询一条蚂蚁区块链最新的交易摘要列表（仅适用于阿里云国内站）。',
    ),
    'DescribeAntChainTransactionStatisticsV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8bd720bde18c4b37b0f4a1c7834db163',
          ),
        ),
        1 => 
        array (
          'name' => 'Start',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '统计开始时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1609084800000',
          ),
        ),
        2 => 
        array (
          'name' => 'End',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '统计结束时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1609776000000',
          ),
        ),
        3 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => false,
            'example' => 'M8GaMEyX',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Dt' => 
                    array (
                      'description' => '时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1609171200000',
                    ),
                    'CreatTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1609258222000',
                    ),
                    'LastSumBlockHeight' => 
                    array (
                      'description' => '最后统计的区块高度',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '11511',
                    ),
                    'TransCount' => 
                    array (
                      'description' => '交易总量',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4',
                    ),
                    'AntChainId' => 
                    array (
                      'description' => '区块链ID',
                      'type' => 'string',
                      'example' => '8bd720bde18c4b37b0f4a1c7834db163',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": [\\n    {\\n      \\"Dt\\": 1609171200000,\\n      \\"CreatTime\\": 1609258222000,\\n      \\"LastSumBlockHeight\\": 11511,\\n      \\"TransCount\\": 4,\\n      \\"AntChainId\\": \\"8bd720bde18c4b37b0f4a1c7834db163\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainTransactionStatisticsV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <Dt>1609171200000</Dt>\\n        <CreatTime>1609258222000</CreatTime>\\n        <LastSumBlockHeight>11511</LastSumBlockHeight>\\n        <TransCount>4</TransCount>\\n        <AntChainId>8bd720bde18c4b37b0f4a1c7834db163</AntChainId>\\n    </Result>\\n</DescribeAntChainTransactionStatisticsV2Response>","errorExample":""}]',
      'title' => '查询一条蚂蚁区块链的交易统计信息',
      'summary' => '查询一条蚂蚁区块链的交易统计信息（仅适用于阿里云国内站）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainLatestBlocksV2' => 
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '查询一条蚂蚁区块链最新的区块信息列表（仅适用于阿里云国内站',
          ),
        ),
        1 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => false,
            'example' => 'M8GaMEyX',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PreviousHash' => 
                    array (
                      'description' => '上一个区块哈希',
                      'type' => 'string',
                      'example' => 'f208834bdc72bd6bb05c5ef1a35abbc8295a16deda9526b7b78c69ec24591b9f',
                    ),
                    'Version' => 
                    array (
                      'description' => '版本信息',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '33556226',
                    ),
                    'TransactionSize' => 
                    array (
                      'description' => '区块中交易数量',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'Size' => 
                    array (
                      'description' => '区块大小',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1024',
                    ),
                    'RootTxHash' => 
                    array (
                      'description' => '根哈希',
                      'type' => 'string',
                      'example' => '0000000000000000000000000000000000000000000000000000000000000000',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1610002621000',
                    ),
                    'Height' => 
                    array (
                      'description' => '区块高度',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '259808',
                    ),
                    'BizData' => 
                    array (
                      'description' => '区块哈希',
                      'type' => 'string',
                      'example' => 'b21baa257788d97eb0006672ccc5008f465365e1dec88d0bbd833e150414b3d5',
                    ),
                    'BlockHash' => 
                    array (
                      'description' => '区块哈希',
                      'type' => 'string',
                      'example' => 'b21baa257788d97eb0006672ccc5008f465365e1dec88d0bbd833e150414b3d5',
                    ),
                    'Alias' => 
                    array (
                      'description' => '区块链ID',
                      'type' => 'string',
                      'example' => '8bd720bde18c4b37b0f4a1c7834db163',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": [\\n    {\\n      \\"PreviousHash\\": \\"f208834bdc72bd6bb05c5ef1a35abbc8295a16deda9526b7b78c69ec24591b9f\\",\\n      \\"Version\\": 33556226,\\n      \\"TransactionSize\\": 0,\\n      \\"Size\\": 1024,\\n      \\"RootTxHash\\": \\"0000000000000000000000000000000000000000000000000000000000000000\\",\\n      \\"CreateTime\\": 1610002621000,\\n      \\"Height\\": 259808,\\n      \\"BizData\\": \\"b21baa257788d97eb0006672ccc5008f465365e1dec88d0bbd833e150414b3d5\\",\\n      \\"BlockHash\\": \\"b21baa257788d97eb0006672ccc5008f465365e1dec88d0bbd833e150414b3d5\\",\\n      \\"Alias\\": \\"8bd720bde18c4b37b0f4a1c7834db163\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainLatestBlocksV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <PreviousHash>f208834bdc72bd6bb05c5ef1a35abbc8295a16deda9526b7b78c69ec24591b9f</PreviousHash>\\n        <Version>33556226</Version>\\n        <TransactionSize>0</TransactionSize>\\n        <Size>1024</Size>\\n        <RootTxHash>0000000000000000000000000000000000000000000000000000000000000000</RootTxHash>\\n        <CreateTime>1610002621000</CreateTime>\\n        <Height>259808</Height>\\n        <BizData>b21baa257788d97eb0006672ccc5008f465365e1dec88d0bbd833e150414b3d5</BizData>\\n        <BlockHash>b21baa257788d97eb0006672ccc5008f465365e1dec88d0bbd833e150414b3d5</BlockHash>\\n        <Alias>8bd720bde18c4b37b0f4a1c7834db163</Alias>\\n    </Result>\\n</DescribeAntChainLatestBlocksV2Response>","errorExample":""}]',
      'title' => '查询一条蚂蚁区块链最新的区块信息列表',
      'summary' => '查询一条蚂蚁区块链最新的区块信息列表（仅适用于阿里云国内站。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainInformationV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8bd720bde18c4b37b0f4a1c7834db163',
          ),
        ),
        1 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => false,
            'example' => 'M8GaMEyX',
          ),
        ),
      ),
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
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'IsRole' => 
                  array (
                    'description' => '节点角色，只有fasle，保留字段（未使用）。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'TransactionSum' => 
                  array (
                    'description' => '交易总数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '6',
                  ),
                  'Version' => 
                  array (
                    'description' => '区块链版本',
                    'type' => 'string',
                    'example' => '0.10',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时戳',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1609221924000',
                  ),
                  'BlockHeight' => 
                  array (
                    'description' => '区块链高度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '259988',
                  ),
                  'NodeNumber' => 
                  array (
                    'description' => '节点总数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'AbnormalNodes' => 
                  array (
                    'description' => '异常节点数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'AntChainId' => 
                  array (
                    'description' => '区块链ID',
                    'type' => 'string',
                    'example' => '8bd720bde18c4b37b0f4a1c7834db163',
                  ),
                  'Normal' => 
                  array (
                    'description' => '运行状态',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'NodeInfos' => 
                  array (
                    'description' => '节点信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '节点状态',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'NodeName' => 
                        array (
                          'description' => '节点地址',
                          'type' => 'string',
                          'example' => '8.136.158.115 18130',
                        ),
                        'Version' => 
                        array (
                          'description' => '运行版本',
                          'type' => 'string',
                          'example' => '0.10',
                        ),
                        'BlockHeight' => 
                        array (
                          'description' => '区块链高度',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '259988',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"IsRole\\": false,\\n    \\"TransactionSum\\": 6,\\n    \\"Version\\": \\"0.10\\",\\n    \\"CreateTime\\": 1609221924000,\\n    \\"BlockHeight\\": 259988,\\n    \\"NodeNumber\\": 4,\\n    \\"AbnormalNodes\\": 0,\\n    \\"AntChainId\\": \\"8bd720bde18c4b37b0f4a1c7834db163\\",\\n    \\"Normal\\": true,\\n    \\"NodeInfos\\": [\\n      {\\n        \\"Status\\": true,\\n        \\"NodeName\\": \\"8.136.158.115 18130\\",\\n        \\"Version\\": \\"0.10\\",\\n        \\"BlockHeight\\": 259988\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainInformationV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <IsRole>false</IsRole>\\n        <TransactionSum>6</TransactionSum>\\n        <Version>0.10</Version>\\n        <CreateTime>1609221924000</CreateTime>\\n        <BlockHeight>259988</BlockHeight>\\n        <NodeNumber>4</NodeNumber>\\n        <AbnormalNodes>0</AbnormalNodes>\\n        <AntChainId>8bd720bde18c4b37b0f4a1c7834db163</AntChainId>\\n        <Normal>true</Normal>\\n        <NodeInfos>\\n            <Status>true</Status>\\n            <NodeName>8.136.158.115 18130</NodeName>\\n            <Version>0.10</Version>\\n            <BlockHeight>259988</BlockHeight>\\n        </NodeInfos>\\n    </Result>\\n</DescribeAntChainInformationV2Response>","errorExample":""}]',
      'title' => 'DescribeAntChainInformationV2',
      'summary' => '查询一条蚂蚁区块链的基本信息（仅适用于阿里云国内站）。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainConsortiums' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页显示条例数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面编号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'AntConsortiums' => 
                  array (
                    'description' => '蚂蚁区块链联盟',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ConsortiumDescription' => 
                        array (
                          'description' => '联盟描述',
                          'type' => 'string',
                          'example' => '测试联盟',
                        ),
                        'Status' => 
                        array (
                          'description' => '联盟状态',
                          'type' => 'string',
                          'example' => 'Active',
                        ),
                        'ConsortiumId' => 
                        array (
                          'description' => '联盟ID',
                          'type' => 'string',
                          'example' => 'DV80nJXq',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '联盟创建时戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1562845453000',
                        ),
                        'MemberNum' => 
                        array (
                          'description' => '联盟成员数量',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '2',
                        ),
                        'Role' => 
                        array (
                          'description' => '账户身份角色',
                          'type' => 'string',
                          'example' => 'SuperAdmin',
                        ),
                        'ConsortiumName' => 
                        array (
                          'description' => '联盟名称',
                          'type' => 'string',
                          'example' => '第一个联盟',
                        ),
                        'ChainNum' => 
                        array (
                          'description' => '联盟内区块链梳理',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                      ),
                    ),
                  ),
                  'Pagination' => 
                  array (
                    'description' => '分页情况',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageSize' => 
                      array (
                        'description' => '每页展示条例数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'PageNumber' => 
                      array (
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '联盟个数',
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
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Result\\": {\\n    \\"AntConsortiums\\": [\\n      {\\n        \\"ConsortiumDescription\\": \\"测试联盟\\",\\n        \\"Status\\": \\"Active\\",\\n        \\"ConsortiumId\\": \\"DV80nJXq\\",\\n        \\"CreateTime\\": 1562845453000,\\n        \\"MemberNum\\": 2,\\n        \\"Role\\": \\"SuperAdmin\\",\\n        \\"ConsortiumName\\": \\"第一个联盟\\",\\n        \\"ChainNum\\": 1\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageSize\\": 10,\\n      \\"PageNumber\\": 1,\\n      \\"TotalCount\\": 1\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<xml version=\\"1.0\\" encoding=\\"UTF-8\\" >\\n\\t<code>200</code>\\n\\t<data>\\n\\t\\t<RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n\\t\\t<Result>\\n\\t\\t\\t<Pagination>\\n\\t\\t\\t\\t<TotalCount>3</TotalCount>\\n\\t\\t\\t\\t<PageSize>10</PageSize>\\n\\t\\t\\t\\t<PageNumber>1</PageNumber>\\n\\t\\t\\t</Pagination>\\n\\t\\t\\t<AntConsortiums>\\n\\t\\t\\t\\t<Status>Active</Status>\\n\\t\\t\\t\\t<Role>SuperAdmin</Role>\\n\\t\\t\\t\\t<ConsortiumId>DV80nJXq</ConsortiumId>\\n\\t\\t\\t\\t<ChainNum>1</ChainNum>\\n\\t\\t\\t\\t<CreateTime>1562845453000</CreateTime>\\n\\t\\t\\t\\t<ConsortiumDescription>测试联盟</ConsortiumDescription>\\n\\t\\t\\t\\t<ConsortiumName>第一个联盟</ConsortiumName>\\n\\t\\t\\t\\t<MemberNum>2</MemberNum>\\n\\t\\t\\t</AntConsortiums>\\n\\t\\t</Result>\\n\\t</data>\\n\\t<requestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</requestId>\\n\\t<successResponse>true</successResponse>\\n</xml>","errorExample":""}]',
      'title' => '获取联盟列表',
      'summary' => '获取联盟列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainDownloadPaths' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1q8B5R9p',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E6F487D4-8606-41B5-B289-46D5EFBD3417',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'SdkUrl' => 
                  array (
                    'description' => 'SDK下载链接',
                    'type' => 'string',
                    'example' => 'http://***',
                  ),
                  'CaCrtUrl' => 
                  array (
                    'description' => 'ca.crt下载链接',
                    'type' => 'string',
                    'example' => 'http://***ca.crt',
                  ),
                  'ClientCrtUrl' => 
                  array (
                    'description' => 'client.crt下载链接',
                    'type' => 'string',
                    'example' => 'http://***client.crt',
                  ),
                  'TrustCaUrl' => 
                  array (
                    'description' => 'trust.CA下载链接',
                    'type' => 'string',
                    'example' => 'http://***trustCa',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E6F487D4-8606-41B5-B289-46D5EFBD3417\\",\\n  \\"Result\\": {\\n    \\"SdkUrl\\": \\"http://***\\",\\n    \\"CaCrtUrl\\": \\"http://***ca.crt\\",\\n    \\"ClientCrtUrl\\": \\"http://***client.crt\\",\\n    \\"TrustCaUrl\\": \\"http://***trustCa\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取一条蚂蚁区块链相关证书下载地址',
      'summary' => '获取一条蚂蚁区块链相关证书下载地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChains' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面条例数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '20',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前页面编号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AroN3X2l',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '52EC3196-D0B8-4FBE-A8B6-6DDABABE11C9',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'IsExist' => 
                  array (
                    'description' => '是否存在',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'AntChains' => 
                  array (
                    'description' => '蚂蚁区块链属性描述',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ExpireTime' => 
                        array (
                          'description' => '到期时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1626019200000',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1562847396000',
                        ),
                        'ChainType' => 
                        array (
                          'description' => '区块链类型，Contract ：合约链，无其他类型',
                          'type' => 'string',
                          'example' => 'Contract',
                        ),
                        'MemberStatus' => 
                        array (
                          'description' => '是否已经申请链上访问证书',
                          'type' => 'string',
                          'example' => 'ChainApplied',
                        ),
                        'MerkleTreeSuit' => 
                        array (
                          'description' => 'Merkle树类型，fdmt：蚂蚁链Merkle数，无其他类型',
                          'type' => 'string',
                          'example' => 'fdmt',
                        ),
                        'IsAdmin' => 
                        array (
                          'description' => '当前用户是否是管理员',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'AntChainName' => 
                        array (
                          'description' => '区块链名称',
                          'type' => 'string',
                          'example' => '一个测试的区块链',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '创建地域信息',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                        'Network' => 
                        array (
                          'description' => '运行状态：
- Running：运行中
- Stop：停止',
                          'type' => 'string',
                          'example' => 'Running',
                        ),
                        'TlsAlgo' => 
                        array (
                          'description' => 'TLS加密算法，rsa：ras算法，无其他算法类型',
                          'type' => 'string',
                          'example' => 'rsa',
                        ),
                        'Version' => 
                        array (
                          'description' => '详细的链版本',
                          'type' => 'string',
                          'example' => '2.19.1',
                        ),
                        'CipherSuit' => 
                        array (
                          'description' => '加密套件类型，classic ： 标准加密，无其他类型',
                          'type' => 'string',
                          'example' => 'classic',
                        ),
                        'ResourceSize' => 
                        array (
                          'description' => '资源类型：
- Basic：基础版
- Enterprise：企业版',
                          'type' => 'string',
                          'example' => 'Basic',
                        ),
                        'NodeNum' => 
                        array (
                          'description' => '节点数量',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'AntChainId' => 
                        array (
                          'description' => '蚂蚁区块链ID
',
                          'type' => 'string',
                          'example' => 'pYogqb9v',
                        ),
                      ),
                    ),
                  ),
                  'Pagination' => 
                  array (
                    'description' => '分页情况',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageSize' => 
                      array (
                        'description' => '每页显示条例数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '20',
                      ),
                      'PageNumber' => 
                      array (
                        'description' => '当前页面编号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总数',
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
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"52EC3196-D0B8-4FBE-A8B6-6DDABABE11C9\\",\\n  \\"Result\\": {\\n    \\"IsExist\\": false,\\n    \\"AntChains\\": [\\n      {\\n        \\"ExpireTime\\": 1626019200000,\\n        \\"CreateTime\\": 1562847396000,\\n        \\"ChainType\\": \\"Contract\\",\\n        \\"MemberStatus\\": \\"ChainApplied\\",\\n        \\"MerkleTreeSuit\\": \\"fdmt\\",\\n        \\"IsAdmin\\": true,\\n        \\"AntChainName\\": \\"一个测试的区块链\\",\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"Network\\": \\"Running\\",\\n        \\"TlsAlgo\\": \\"rsa\\",\\n        \\"Version\\": \\"2.19.1\\",\\n        \\"CipherSuit\\": \\"classic\\",\\n        \\"ResourceSize\\": \\"Basic\\",\\n        \\"NodeNum\\": 4,\\n        \\"AntChainId\\": \\"pYogqb9v\\"\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageSize\\": 20,\\n      \\"PageNumber\\": 1,\\n      \\"TotalCount\\": 1\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => 'DescribeAntChains',
      'summary' => '获取联盟内的蚂蚁区块链列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainTransaction' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pYogqb9v',
          ),
        ),
        1 => 
        array (
          'name' => 'Hash',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '交易哈希',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '7DCE6520-E5DB-4859-90AC-BDDB8A5501C6',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Hash' => 
                  array (
                    'description' => '交易哈希',
                    'type' => 'string',
                    'example' => 'b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca',
                  ),
                  'BlockHash' => 
                  array (
                    'description' => '区块哈希',
                    'type' => 'string',
                    'example' => '1168bc5dd0b78d15446b15ea5a7f7822a7d07c007dd3a50becf98da220fc08f6',
                  ),
                  'BlockVersion' => 
                  array (
                    'description' => '区块版本',
                    'type' => 'string',
                    'example' => '10',
                  ),
                  'BlockHeight' => 
                  array (
                    'description' => '区块高度',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '368169',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '交易创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1563954336850',
                  ),
                  'Transaction' => 
                  array (
                    'description' => '交易详情',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Hash' => 
                      array (
                        'description' => '交易哈希',
                        'type' => 'string',
                        'example' => 'b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca',
                      ),
                      'Value' => 
                      array (
                        'description' => '交易金额',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'From' => 
                      array (
                        'description' => '交易发送者哈希',
                        'type' => 'string',
                        'example' => 'e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b',
                      ),
                      'Data' => 
                      array (
                        'description' => '数据',
                        'type' => 'string',
                        'example' => '“”',
                      ),
                      'Nonce' => 
                      array (
                        'description' => '交易Nonce',
                        'type' => 'string',
                        'example' => '5675407026657953619',
                      ),
                      'To' => 
                      array (
                        'description' => '交易接收方地址',
                        'type' => 'string',
                        'example' => '961085f3c7ef705ad587d0cbe11d7863a5a11af7451f4e9b1edadd74402addf5',
                      ),
                      'Timestamp' => 
                      array (
                        'description' => '交易发送时戳',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1563954336850',
                      ),
                      'Gas' => 
                      array (
                        'description' => 'Gas值',
                        'type' => 'string',
                        'example' => '4000000',
                      ),
                      'TxType' => 
                      array (
                        'description' => '交易类型',
                        'type' => 'string',
                        'example' => 'UNFREEZE_ACCOUNT_CONTRACT',
                      ),
                      'Period' => 
                      array (
                        'description' => 'Period',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1563954336850',
                      ),
                      'Extentions' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '扩展信息',
                          'type' => 'string',
                          'example' => '[]',
                        ),
                      ),
                      'Signatures' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '签名',
                          'type' => 'string',
                          'example' => '5s6JhauIqAlMb6d+7...',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7DCE6520-E5DB-4859-90AC-BDDB8A5501C6\\",\\n  \\"Result\\": {\\n    \\"Hash\\": \\"b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca\\",\\n    \\"BlockHash\\": \\"1168bc5dd0b78d15446b15ea5a7f7822a7d07c007dd3a50becf98da220fc08f6\\",\\n    \\"BlockVersion\\": \\"10\\",\\n    \\"BlockHeight\\": 368169,\\n    \\"CreateTime\\": 1563954336850,\\n    \\"Transaction\\": {\\n      \\"Hash\\": \\"b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca\\",\\n      \\"Value\\": \\"0\\",\\n      \\"From\\": \\"e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b\\",\\n      \\"Data\\": \\"“”\\",\\n      \\"Nonce\\": \\"5675407026657953619\\",\\n      \\"To\\": \\"961085f3c7ef705ad587d0cbe11d7863a5a11af7451f4e9b1edadd74402addf5\\",\\n      \\"Timestamp\\": 1563954336850,\\n      \\"Gas\\": \\"4000000\\",\\n      \\"TxType\\": \\"UNFREEZE_ACCOUNT_CONTRACT\\",\\n      \\"Period\\": 1563954336850,\\n      \\"Extentions\\": [\\n        \\"[]\\"\\n      ],\\n      \\"Signatures\\": [\\n        \\"5s6JhauIqAlMb6d+7...\\"\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainTransactionResponse>\\n    <RequestId>7DCE6520-E5DB-4859-90AC-BDDB8A5501C6</RequestId>\\n    <Result>\\n        <Hash>b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca</Hash>\\n        <BlockHash>1168bc5dd0b78d15446b15ea5a7f7822a7d07c007dd3a50becf98da220fc08f6</BlockHash>\\n        <BlockVersion>10</BlockVersion>\\n        <BlockHeight>368169</BlockHeight>\\n        <CreateTime>1563954336850</CreateTime>\\n        <Transaction>\\n            <Hash>b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca</Hash>\\n            <Value>0</Value>\\n            <From>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</From>\\n            <Data>“”</Data>\\n            <Nonce>5675407026657953619</Nonce>\\n            <To>961085f3c7ef705ad587d0cbe11d7863a5a11af7451f4e9b1edadd74402addf5</To>\\n            <Timestamp>1563954336850</Timestamp>\\n            <Gas>4000000</Gas>\\n            <TxType>UNFREEZE_ACCOUNT_CONTRACT</TxType>\\n            <Period>1563954336850</Period>\\n            <Extentions>[]</Extentions>\\n            <Signatures>5s6JhauIqAlMb6d+7...</Signatures>\\n        </Transaction>\\n    </Result>\\n</DescribeAntChainTransactionResponse>","errorExample":""}]',
      'title' => '查询蚂蚁区块链交易信息',
      'summary' => '根据交易哈希查询一条蚂蚁区块链的交易信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainInformation' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pYogqb9v',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '91246411-C7E9-4EFD-9074-3939AEDFC1BB',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'TransactionSum' => 
                  array (
                    'description' => '交易总数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '42',
                  ),
                  'Version' => 
                  array (
                    'description' => '区块链版本',
                    'type' => 'string',
                    'example' => '0.10.2.4.7',
                  ),
                  'BlockHeight' => 
                  array (
                    'description' => '区块链高度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '365236',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时戳',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1562847396000',
                  ),
                  'NodeNumber' => 
                  array (
                    'description' => '节点总数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'AbnormalNodes' => 
                  array (
                    'description' => '异常节点数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'AntChainId' => 
                  array (
                    'description' => '区块链ID',
                    'type' => 'string',
                    'example' => 'pYogqb9v',
                  ),
                  'Normal' => 
                  array (
                    'description' => '运行状态',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'NodeInfos' => 
                  array (
                    'description' => '节点信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '节点状态：
- true：节点正常
- false：节点异常',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'NodeName' => 
                        array (
                          'description' => '节点地址',
                          'type' => 'string',
                          'example' => '121.199.195.8 18130',
                        ),
                        'Version' => 
                        array (
                          'description' => '运行版本',
                          'type' => 'string',
                          'example' => '0.10',
                        ),
                        'BlockHeight' => 
                        array (
                          'description' => '区块链高度',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '365216',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"91246411-C7E9-4EFD-9074-3939AEDFC1BB\\",\\n  \\"Result\\": {\\n    \\"TransactionSum\\": 42,\\n    \\"Version\\": \\"0.10.2.4.7\\",\\n    \\"BlockHeight\\": 365236,\\n    \\"CreateTime\\": 1562847396000,\\n    \\"NodeNumber\\": 4,\\n    \\"AbnormalNodes\\": 0,\\n    \\"AntChainId\\": \\"pYogqb9v\\",\\n    \\"Normal\\": true,\\n    \\"NodeInfos\\": [\\n      {\\n        \\"Status\\": true,\\n        \\"NodeName\\": \\"121.199.195.8 18130\\",\\n        \\"Version\\": \\"0.10\\",\\n        \\"BlockHeight\\": 365216\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询一条蚂蚁区块链的基本信息',
      'summary' => '查询一条蚂蚁区块链的基本信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainLatestBlocks' => 
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pYogqb9v',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B52C552F-DDE6-4779-9BA2-9DD455275528',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '请求结果：
- blockHash：本区块hash
- previousHash：上一个区块hash
- size：区块大小
- createTime：区块时间戳
- transactionSize：区块内交易个数
- alias：链ID
- bizData：交易数据
- version：区块版本
- rootTxHash：根hash
- height：区块高度
',
                  'type' => 'object',
                  'example' => '[{"blockHash":"","previousHash":"","size":"","createTime":"","transactionSize":"","alias": "","bizData":"","version": "","rootTxHash":"","height":""}]',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B52C552F-DDE6-4779-9BA2-9DD455275528\\",\\n  \\"Result\\": [\\n    [\\n      {\\n        \\"blockHash\\": \\"\\",\\n        \\"previousHash\\": \\"\\",\\n        \\"size\\": \\"\\",\\n        \\"createTime\\": \\"\\",\\n        \\"transactionSize\\": \\"\\",\\n        \\"alias\\": \\"\\",\\n        \\"bizData\\": \\"\\",\\n        \\"version\\": \\"\\",\\n        \\"rootTxHash\\": \\"\\",\\n        \\"height\\": \\"\\"\\n      }\\n    ]\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainLatestBlocksResponse>\\n    <code>200</code>\\n    <data>\\n        <RequestId>B52C552F-DDE6-4779-9BA2-9DD455275528</RequestId>\\n        <Result>\\n            <blockHash>5ad300fc1c21ec8f808609f69108ae495c9041da43afe8e11591859989f2c63d</blockHash>\\n            <previousHash>b573871ea72e24dadeb4cb821541763f7c9f46885ac688457170f0c34511072f</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945478000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>5ad300fc1c21ec8f808609f69108ae495c9041da43afe8e11591859989f2c63d</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365216</height>\\n        </Result>\\n        <Result>\\n            <blockHash>b573871ea72e24dadeb4cb821541763f7c9f46885ac688457170f0c34511072f</blockHash>\\n            <previousHash>ba2ba0a9839a36824eae069021791c96e7057748ba781275814a11bc9178eece</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945475000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>b573871ea72e24dadeb4cb821541763f7c9f46885ac688457170f0c34511072f</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365215</height>\\n        </Result>\\n        <Result>\\n            <blockHash>ba2ba0a9839a36824eae069021791c96e7057748ba781275814a11bc9178eece</blockHash>\\n            <previousHash>e1d0636b35439e3039cbac35c6f52cec06d42e8f645d877c3e5cbbb4c7eb6d98</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945472000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>ba2ba0a9839a36824eae069021791c96e7057748ba781275814a11bc9178eece</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365214</height>\\n        </Result>\\n        <Result>\\n            <blockHash>e1d0636b35439e3039cbac35c6f52cec06d42e8f645d877c3e5cbbb4c7eb6d98</blockHash>\\n            <previousHash>dcf8a4783fdcfa76e2d80ac3ff7751150a1134f74cafa39df734e818580badb0</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945469000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>e1d0636b35439e3039cbac35c6f52cec06d42e8f645d877c3e5cbbb4c7eb6d98</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365213</height>\\n        </Result>\\n        <Result>\\n            <blockHash>dcf8a4783fdcfa76e2d80ac3ff7751150a1134f74cafa39df734e818580badb0</blockHash>\\n            <previousHash>d3e21f7bba9bec77e83020eb79874a3defcff26664b53ef353b3adc3b7707339</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945466000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>dcf8a4783fdcfa76e2d80ac3ff7751150a1134f74cafa39df734e818580badb0</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365212</height>\\n        </Result>\\n        <Result>\\n            <blockHash>d3e21f7bba9bec77e83020eb79874a3defcff26664b53ef353b3adc3b7707339</blockHash>\\n            <previousHash>b3c9e7da7790c04f4a55d427770f5959dde7d815c9313f76ed075875aaf26c25</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945463000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>d3e21f7bba9bec77e83020eb79874a3defcff26664b53ef353b3adc3b7707339</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365211</height>\\n        </Result>\\n        <Result>\\n            <blockHash>b3c9e7da7790c04f4a55d427770f5959dde7d815c9313f76ed075875aaf26c25</blockHash>\\n            <previousHash>0437a86270ab64a5fed0536abcf559082c8af3d3d446ed397668efa4cffc3e39</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945460000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>b3c9e7da7790c04f4a55d427770f5959dde7d815c9313f76ed075875aaf26c25</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365210</height>\\n        </Result>\\n        <Result>\\n            <blockHash>0437a86270ab64a5fed0536abcf559082c8af3d3d446ed397668efa4cffc3e39</blockHash>\\n            <previousHash>2155c765ab6c8798d3ccdbc0a94c5868a6c4e8b28bf5b2e12c8196b19cbcba65</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945457000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>0437a86270ab64a5fed0536abcf559082c8af3d3d446ed397668efa4cffc3e39</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365209</height>\\n        </Result>\\n        <Result>\\n            <blockHash>2155c765ab6c8798d3ccdbc0a94c5868a6c4e8b28bf5b2e12c8196b19cbcba65</blockHash>\\n            <previousHash>ab37241847f1314379e1061fa170f24b292b3514f70a2852ac4aeff9efb31de9</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945454000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>2155c765ab6c8798d3ccdbc0a94c5868a6c4e8b28bf5b2e12c8196b19cbcba65</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365208</height>\\n        </Result>\\n        <Result>\\n            <blockHash>ab37241847f1314379e1061fa170f24b292b3514f70a2852ac4aeff9efb31de9</blockHash>\\n            <previousHash>d342cb8c014f301f1cf0d1ab83bd374697576d86f5783954e786f63f6fab1c43</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945451000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>ab37241847f1314379e1061fa170f24b292b3514f70a2852ac4aeff9efb31de9</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365207</height>\\n        </Result>\\n        <Result>\\n            <blockHash>d342cb8c014f301f1cf0d1ab83bd374697576d86f5783954e786f63f6fab1c43</blockHash>\\n            <previousHash>67a10fb87745ca2f6b2fb12eff180d5d6da2a705fcebb2c3ba809c895ae04a01</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945448000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>d342cb8c014f301f1cf0d1ab83bd374697576d86f5783954e786f63f6fab1c43</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365206</height>\\n        </Result>\\n        <Result>\\n            <blockHash>67a10fb87745ca2f6b2fb12eff180d5d6da2a705fcebb2c3ba809c895ae04a01</blockHash>\\n            <previousHash>cafd00bc4beb93fe73adbc9ac71c7bdc5375c098b59c7f0f9ee457edc121583b</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945445000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>67a10fb87745ca2f6b2fb12eff180d5d6da2a705fcebb2c3ba809c895ae04a01</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365205</height>\\n        </Result>\\n        <Result>\\n            <blockHash>cafd00bc4beb93fe73adbc9ac71c7bdc5375c098b59c7f0f9ee457edc121583b</blockHash>\\n            <previousHash>e4240366b63d7464523cbda77e946bf45d79ad2ea41dfb7ff70d68688c99fc30</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945441000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>cafd00bc4beb93fe73adbc9ac71c7bdc5375c098b59c7f0f9ee457edc121583b</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365204</height>\\n        </Result>\\n        <Result>\\n            <blockHash>e4240366b63d7464523cbda77e946bf45d79ad2ea41dfb7ff70d68688c99fc30</blockHash>\\n            <previousHash>ddd23f171ff561ef0361183374a13e771545e36fc48743de687614830360bf31</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945438000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>e4240366b63d7464523cbda77e946bf45d79ad2ea41dfb7ff70d68688c99fc30</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365203</height>\\n        </Result>\\n        <Result>\\n            <blockHash>ddd23f171ff561ef0361183374a13e771545e36fc48743de687614830360bf31</blockHash>\\n            <previousHash>c8a22036514aab79c4b8d389379ad3ac21b689ce2e53f17da46167564135735e</previousHash>\\n            <size>1024</size>\\n            <createTime>1563945435000</createTime>\\n            <transactionSize>0</transactionSize>\\n            <alias>pYogqb9v</alias>\\n            <bizData>ddd23f171ff561ef0361183374a13e771545e36fc48743de687614830360bf31</bizData>\\n            <version>2</version>\\n            <rootTxHash>0000000000000000000000000000000000000000000000000000000000000000    0000000000000000000000000000000000000000000000000000000000000000    c4594eae7bc30a668e1fb8d128ad966756351d04682dabe4f78c63c8a6578df7</rootTxHash>\\n            <height>365202</height>\\n        </Result>\\n    </data>\\n    <requestId>B52C552F-DDE6-4779-9BA2-9DD455275528</requestId>\\n    <successResponse>true</successResponse>\\n</DescribeAntChainLatestBlocksResponse>","errorExample":""}]',
      'title' => '查询一条蚂蚁区块链最新的区块信息列表',
      'summary' => '查询一条蚂蚁区块链最新的区块信息列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainLatestTransactionDigests' => 
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pYogqb9v',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3348160E-187B-47BD-B1B9-76AD4AFA4558',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '请求结果数据：
- from：交易发起方
- to：交易目标或合约地址
- hash：交易hash值
- createTime 交易时间戳
- transactionV10Type：交易类型，无其他类型',
                  'type' => 'object',
                  'example' => '[{"transactionV10Type","createTime","from","to","hash"}]',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3348160E-187B-47BD-B1B9-76AD4AFA4558\\",\\n  \\"Result\\": [\\n    {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainLatestTransactionDigestsResponse>\\n    <code>200</code>\\n    <data>\\n        <RequestId>3348160E-187B-47BD-B1B9-76AD4AFA4558</RequestId>\\n        <Result>\\n            <transactionV10Type>FREEZE_ACCOUNT_CONTRACT</transactionV10Type>\\n            <createTime>1563861357920</createTime>\\n            <from>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</from>\\n            <to>0f7256e0886e2095f328a244cf44823f95a82dedb3e51a1f46f8c272cf1c6030</to>\\n            <hash>945ffb5e2a8aaf41eed862f7c1565603683b7a640b7b78a168396897979335a9</hash>\\n        </Result>\\n        <Result>\\n            <transactionV10Type>UNFREEZE_ACCOUNT_CONTRACT</transactionV10Type>\\n            <createTime>1563861353157</createTime>\\n            <from>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</from>\\n            <to>0f7256e0886e2095f328a244cf44823f95a82dedb3e51a1f46f8c272cf1c6030</to>\\n            <hash>5d379f516bf8f96991ee80d91504cfbf94f0b2feb87b375d07d04b019fd7bb3f</hash>\\n        </Result>\\n        <Result>\\n            <transactionV10Type>FREEZE_ACCOUNT_CONTRACT</transactionV10Type>\\n            <createTime>1563861343692</createTime>\\n            <from>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</from>\\n            <to>8e35c2cd3bf6641bdb0e2050b76932cbb2e6034a0ddacc1d9bea82a6ba57f7cf</to>\\n            <hash>50df783d3e0038ee2ebf62c2295e19da9f95fc99dca6d9de4c0bf8f109c2a2f1</hash>\\n        </Result>\\n        <Result>\\n            <transactionV10Type>UNFREEZE_ACCOUNT_CONTRACT</transactionV10Type>\\n            <createTime>1563861340667</createTime>\\n            <from>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</from>\\n            <to>4db58ada9221304b161ab0aa11b032a62d60d9ab29e41c6d238f4401c81c8189</to>\\n            <hash>7f299376af6e44825b55dca4c840d7f7bdc124984adfa2501b3ba5d7f3afb61b</hash>\\n        </Result>\\n        <Result>\\n            <transactionV10Type>UNFREEZE_ACCOUNT_CONTRACT</transactionV10Type>\\n            <createTime>1563861331665</createTime>\\n            <from>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</from>\\n            <to>8e35c2cd3bf6641bdb0e2050b76932cbb2e6034a0ddacc1d9bea82a6ba57f7cf</to>\\n            <hash>2a185f80ea614459f7d2125e0ff43c68f96bfc4266b737646ef8250562b71aca</hash>\\n        </Result>\\n        <Result>\\n            <transactionV10Type>UNFREEZE_ACCOUNT_CONTRACT</transactionV10Type>\\n            <createTime>1563861325469</createTime>\\n            <from>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</from>\\n            <to>49f3bd00a75b5b7519965014a37f14362cc88e303ed9615a49bc888e841184ed</to>\\n            <hash>944831a05c11be9290ffbe2b29734234462da0fed0192b661c42846d18bdb9f7</hash>\\n        </Result>\\n        <Result>\\n            <transactionV10Type>FREEZE_ACCOUNT_CONTRACT</transactionV10Type>\\n            <createTime>1563861322053</createTime>\\n            <from>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</from>\\n            <to>0f7256e0886e2095f328a244cf44823f95a82dedb3e51a1f46f8c272cf1c6030</to>\\n            <hash>5d7da0043114b58488e0867c8dddb8b35812ce6e198235ef70d58d06d843024f</hash>\\n        </Result>\\n        <Result>\\n            <transactionV10Type>FREEZE_ACCOUNT_CONTRACT</transactionV10Type>\\n            <createTime>1563861318974</createTime>\\n            <from>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</from>\\n            <to>8e35c2cd3bf6641bdb0e2050b76932cbb2e6034a0ddacc1d9bea82a6ba57f7cf</to>\\n            <hash>0c94292b144c69cbdc01389938f660a430dda1a50369de3a2c92b08d7e61f145</hash>\\n        </Result>\\n        <Result>\\n            <transactionV10Type>FREEZE_ACCOUNT_CONTRACT</transactionV10Type>\\n            <createTime>1563861316016</createTime>\\n            <from>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</from>\\n            <to>4db58ada9221304b161ab0aa11b032a62d60d9ab29e41c6d238f4401c81c8189</to>\\n            <hash>293a7412174f7827135ae0610f85f4bc2d7eca21aca017935c3cd048a30dc2b4</hash>\\n        </Result>\\n        <Result>\\n            <transactionV10Type>UNFREEZE_ACCOUNT_CONTRACT</transactionV10Type>\\n            <createTime>1563861312633</createTime>\\n            <from>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</from>\\n            <to>4db58ada9221304b161ab0aa11b032a62d60d9ab29e41c6d238f4401c81c8189</to>\\n            <hash>21f5977f5f9103c251968e4f84c0e1d3c68549a25b185e21791cb5ad5a4839f6</hash>\\n        </Result>\\n        <Result>\\n            <transactionV10Type>UNFREEZE_ACCOUNT_CONTRACT</transactionV10Type>\\n            <createTime>1563861307139</createTime>\\n            <from>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</from>\\n            <to>8e35c2cd3bf6641bdb0e2050b76932cbb2e6034a0ddacc1d9bea82a6ba57f7cf</to>\\n            <hash>78329f5dd5af3ab2de339980fef05a0aa1d50ad1ddbce247d4d1e8e85cc5222f</hash>\\n        </Result>\\n        <Result>\\n            <transactionV10Type>FREEZE_ACCOUNT_CONTRACT</transactionV10Type>\\n            <createTime>1563861302697</createTime>\\n            <from>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</from>\\n            <to>49f3bd00a75b5b7519965014a37f14362cc88e303ed9615a49bc888e841184ed</to>\\n            <hash>e089544b7a9e5354ea4ac57769d854acc0c79acee54420c9232924d978601969</hash>\\n        </Result>\\n        <Result>\\n            <transactionV10Type>CALL_CONTRACT</transactionV10Type>\\n            <createTime>1563765546000</createTime>\\n            <from>e7d3e769f3f593dadcb8634cc5b09fc90dd3a61c4a06a79cb0923662fe6fae6b</from>\\n            <to>e93372533f323b2f12783aa3a586135cf421486439c2cdcde47411b78f9839ec</to>\\n            <hash>e0a27e8b0bd0d3053b29c133f257f636c37cb1ba8524684e3bfc6f7a48191494</hash>\\n        </Result>\\n    </data>\\n    <requestId>3348160E-187B-47BD-B1B9-76AD4AFA4558</requestId>\\n    <successResponse>true</successResponse>\\n</DescribeAntChainLatestTransactionDigestsResponse>","errorExample":""}]',
      'title' => 'DescribeAntChainLatestTransactionDigests',
      'summary' => '查询一条蚂蚁区块链最新的交易摘要列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainBlock' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pYogqb9v',
          ),
        ),
        1 => 
        array (
          'name' => 'Height',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '查询区块高度',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4DDA2E72-778A-4D79-BE70-448A26A57227',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'PreviousHash' => 
                  array (
                    'description' => '前一个区块链哈希',
                    'type' => 'string',
                    'example' => 'e11767c7b9d92563663a76f10c69e8354788001e2c9e6bd9267239a81d3bb523',
                  ),
                  'Version' => 
                  array (
                    'description' => '区块版本',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2',
                  ),
                  'TransactionSize' => 
                  array (
                    'description' => '交易数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1562851727742',
                  ),
                  'RootTxHash' => 
                  array (
                    'description' => '根交易哈希',
                    'type' => 'string',
                    'example' => '0000000000000000000000000000000000000000000000000000000000000000',
                  ),
                  'Height' => 
                  array (
                    'description' => '区块高度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1234',
                  ),
                  'BlockHash' => 
                  array (
                    'description' => '区块哈希',
                    'type' => 'string',
                    'example' => 'aeec5963f8deeeae820aaf302f0c925db9fa8d07b9898dac782335f817554e47',
                  ),
                  'AntChainId' => 
                  array (
                    'description' => '区块链ID',
                    'type' => 'string',
                    'example' => 'pYogqb9v',
                  ),
                  'TransSummaryList' => 
                  array (
                    'description' => '交易列表',
                    'type' => 'string',
                    'example' => '[]',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4DDA2E72-778A-4D79-BE70-448A26A57227\\",\\n  \\"Result\\": {\\n    \\"PreviousHash\\": \\"e11767c7b9d92563663a76f10c69e8354788001e2c9e6bd9267239a81d3bb523\\",\\n    \\"Version\\": 2,\\n    \\"TransactionSize\\": 0,\\n    \\"CreateTime\\": 1562851727742,\\n    \\"RootTxHash\\": \\"0000000000000000000000000000000000000000000000000000000000000000\\",\\n    \\"Height\\": 1234,\\n    \\"BlockHash\\": \\"aeec5963f8deeeae820aaf302f0c925db9fa8d07b9898dac782335f817554e47\\",\\n    \\"AntChainId\\": \\"pYogqb9v\\",\\n    \\"TransSummaryList\\": \\"[]\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '根据块高查询一条蚂蚁区块链的区块信息',
      'summary' => '根据块高查询一条蚂蚁区块链的区块信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainAccounts' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面编号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pYogqb9v',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1692940F-87C5-468F-8188-6C95FC05BBA5',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Accounts' => 
                  array (
                    'description' => '账户信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AccountPublicKey' => 
                        array (
                          'description' => '账户公钥',
                          'type' => 'string',
                          'example' => 'de44334f1094cbd37e952ef691a837f36eab2e9afdf6bed9bf523c2dde40ff7b1ff526ec11b510d320f536685f75dd90f67fda8d41a69738a76a77c27b1373fb',
                        ),
                        'Account' => 
                        array (
                          'description' => '账户名',
                          'type' => 'string',
                          'example' => '账户名',
                        ),
                        'AccountRecoveryKey' => 
                        array (
                          'description' => '账户恢复公钥',
                          'type' => 'string',
                          'example' => 'ee54a9c4511345f2de05889540eedb8dfed7b57ab0647c5894e4333596bc2ecef07a0469331d016ad9978b39367a0a5c217ef92ffffcbd6716db6667353891a9',
                        ),
                        'AccountStatus' => 
                        array (
                          'description' => '状态',
                          'type' => 'string',
                          'example' => 'NORMAL',
                        ),
                        'AntChainId' => 
                        array (
                          'description' => '区块链ID',
                          'type' => 'string',
                          'example' => 'pYogqb9v',
                        ),
                      ),
                    ),
                  ),
                  'Pagination' => 
                  array (
                    'description' => '分页信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageSize' => 
                      array (
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'PageNumber' => 
                      array (
                        'description' => '当前页面编号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总数',
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
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1692940F-87C5-468F-8188-6C95FC05BBA5\\",\\n  \\"Result\\": {\\n    \\"Accounts\\": [\\n      {\\n        \\"AccountPublicKey\\": \\"de44334f1094cbd37e952ef691a837f36eab2e9afdf6bed9bf523c2dde40ff7b1ff526ec11b510d320f536685f75dd90f67fda8d41a69738a76a77c27b1373fb\\",\\n        \\"Account\\": \\"账户名\\",\\n        \\"AccountRecoveryKey\\": \\"ee54a9c4511345f2de05889540eedb8dfed7b57ab0647c5894e4333596bc2ecef07a0469331d016ad9978b39367a0a5c217ef92ffffcbd6716db6667353891a9\\",\\n        \\"AccountStatus\\": \\"NORMAL\\",\\n        \\"AntChainId\\": \\"pYogqb9v\\"\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageSize\\": 10,\\n      \\"PageNumber\\": 1,\\n      \\"TotalCount\\": 1\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => 'DescribeAntChainAccounts',
      'summary' => '查询一条蚂蚁区块链的账户列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainCertificateApplications' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1q8B5R9p',
          ),
        ),
        1 => 
        array (
          'name' => 'Status',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '状态',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面编号',
            'type' => 'integer',
            'format' => 'int32',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'B232A84E-7944-4EB0-83D0-9D409E12E0A8',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'CertificateApplications' => 
                  array (
                    'description' => '证书申请信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '证书状态：
- 1：正常
- 2：被重置',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'Updatetime' => 
                        array (
                          'description' => '更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1563949275000',
                        ),
                        'Createtime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1563949275000',
                        ),
                        'Bid' => 
                        array (
                          'description' => 'Bid',
                          'type' => 'string',
                          'example' => '26842',
                        ),
                        'AntChainId' => 
                        array (
                          'description' => '区块链ID',
                          'type' => 'string',
                          'example' => '1q8B5R9p',
                        ),
                        'Username' => 
                        array (
                          'description' => '账户名',
                          'type' => 'string',
                          'example' => 'uid-128712635330****',
                        ),
                      ),
                    ),
                  ),
                  'Pagination' => 
                  array (
                    'description' => '分页信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageSize' => 
                      array (
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '20',
                      ),
                      'PageNumber' => 
                      array (
                        'description' => '页面数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '每页总量',
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
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B232A84E-7944-4EB0-83D0-9D409E12E0A8\\",\\n  \\"Result\\": {\\n    \\"CertificateApplications\\": [\\n      {\\n        \\"Status\\": \\"1\\",\\n        \\"Updatetime\\": 1563949275000,\\n        \\"Createtime\\": 1563949275000,\\n        \\"Bid\\": \\"26842\\",\\n        \\"AntChainId\\": \\"1q8B5R9p\\",\\n        \\"Username\\": \\"uid-128712635330****\\"\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageSize\\": 20,\\n      \\"PageNumber\\": 1,\\n      \\"TotalCount\\": 1\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainCertificateApplicationsResponse>\\n    <RequestId>B232A84E-7944-4EB0-83D0-9D409E12E0A8</RequestId>\\n    <Result>\\n        <CertificateApplications>\\n            <Status>1</Status>\\n            <Updatetime>1563949275000</Updatetime>\\n            <Createtime>1563949275000</Createtime>\\n            <Bid>26842</Bid>\\n            <AntChainId>1q8B5R9p</AntChainId>\\n            <Username>uid-128712635330****</Username>\\n        </CertificateApplications>\\n        <Pagination>\\n            <PageSize>20</PageSize>\\n            <PageNumber>1</PageNumber>\\n            <TotalCount>1</TotalCount>\\n        </Pagination>\\n    </Result>\\n</DescribeAntChainCertificateApplicationsResponse>","errorExample":""}]',
      'title' => '查看联盟成员申请连接蚂蚁区块链信息',
      'summary' => '查看联盟成员申请连接一条蚂蚁区块链的信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainContractProjects' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DV80nJXq',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面编号',
            'type' => 'integer',
            'format' => 'int32',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '5EDAC16F-EA3E-4017-B223-D76220F985DF',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'ContractProjects' => 
                  array (
                    'description' => '合约工程',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UpdateTime' => 
                        array (
                          'description' => '更新时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1563954499000',
                        ),
                        'ConsortiumId' => 
                        array (
                          'description' => '联盟ID',
                          'type' => 'string',
                          'example' => 'DV80nJXq',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1562847564000',
                        ),
                        'ProjectId' => 
                        array (
                          'description' => '工程ID',
                          'type' => 'string',
                          'example' => '2L9VK68g',
                        ),
                        'ProjectName' => 
                        array (
                          'description' => '工程名称',
                          'type' => 'string',
                          'example' => 'projectname',
                        ),
                        'ProjectVersion' => 
                        array (
                          'description' => '工程版本',
                          'type' => 'string',
                          'example' => '5',
                        ),
                        'ProjectDescription' => 
                        array (
                          'description' => '工程描述',
                          'type' => 'string',
                          'example' => 'description',
                        ),
                      ),
                    ),
                  ),
                  'Pagination' => 
                  array (
                    'description' => '分页信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageSize' => 
                      array (
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'PageNumber' => 
                      array (
                        'description' => '页面编号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总数',
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
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5EDAC16F-EA3E-4017-B223-D76220F985DF\\",\\n  \\"Result\\": {\\n    \\"ContractProjects\\": [\\n      {\\n        \\"UpdateTime\\": 1563954499000,\\n        \\"ConsortiumId\\": \\"DV80nJXq\\",\\n        \\"CreateTime\\": 1562847564000,\\n        \\"ProjectId\\": \\"2L9VK68g\\",\\n        \\"ProjectName\\": \\"projectname\\",\\n        \\"ProjectVersion\\": \\"5\\",\\n        \\"ProjectDescription\\": \\"description\\"\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageSize\\": 10,\\n      \\"PageNumber\\": 1,\\n      \\"TotalCount\\": 1\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取联盟内合约工程的列表',
      'summary' => '获取联盟内合约工程的列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainContractProjectContentTree' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ProjectId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2L9VK68g',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A0DF307A-A44A-476F-99D8-BA4F205350BD',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'ProjectVersion' => 
                  array (
                    'description' => '工程版本',
                    'type' => 'string',
                    'example' => '5',
                  ),
                  'ProjectDescription' => 
                  array (
                    'description' => '工程描述',
                    'type' => 'string',
                    'example' => 'description',
                  ),
                  'ProjectId' => 
                  array (
                    'description' => '工程ID',
                    'type' => 'string',
                    'example' => '2L9VK68g',
                  ),
                  'ProjectName' => 
                  array (
                    'description' => '工程名称',
                    'type' => 'string',
                    'example' => 'projectname',
                  ),
                  'Children' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '子文件',
                      'type' => 'object',
                      'example' => '[]',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A0DF307A-A44A-476F-99D8-BA4F205350BD\\",\\n  \\"Result\\": {\\n    \\"ProjectVersion\\": \\"5\\",\\n    \\"ProjectDescription\\": \\"description\\",\\n    \\"ProjectId\\": \\"2L9VK68g\\",\\n    \\"ProjectName\\": \\"projectname\\",\\n    \\"Children\\": [\\n      []\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取一个合约工程的内容树',
      'summary' => '获取一个合约工程的内容树。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainMembers' => 
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
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面包含条例数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面编号',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'q0oWq92P',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E0DB75A2-28C8-4295-8851-A157FFB3DFED',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Members' => 
                  array (
                    'description' => '联盟成员',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '加入联盟状态',
                          'type' => 'string',
                          'example' => 'AllianceNotJoined',
                        ),
                        'MemberId' => 
                        array (
                          'description' => '成员ID',
                          'type' => 'string',
                          'example' => 'uid-1388601577407805',
                        ),
                        'Role' => 
                        array (
                          'description' => '成员身份',
                          'type' => 'string',
                          'example' => 'Member',
                        ),
                        'MemberName' => 
                        array (
                          'description' => '成员名称',
                          'type' => 'string',
                          'example' => 'uid-1562589998337656',
                        ),
                        'JoinTime' => 
                        array (
                          'description' => '成员加入联盟时戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1557477823000',
                        ),
                      ),
                    ),
                  ),
                  'Pagination' => 
                  array (
                    'description' => '分页信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageSize' => 
                      array (
                        'description' => '每页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'PageNumber' => 
                      array (
                        'description' => '页面编号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '6',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E0DB75A2-28C8-4295-8851-A157FFB3DFED\\",\\n  \\"Result\\": {\\n    \\"Members\\": [\\n      {\\n        \\"Status\\": \\"AllianceNotJoined\\",\\n        \\"MemberId\\": \\"uid-1388601577407805\\",\\n        \\"Role\\": \\"Member\\",\\n        \\"MemberName\\": \\"uid-1562589998337656\\",\\n        \\"JoinTime\\": 1557477823000\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageSize\\": 10,\\n      \\"PageNumber\\": 1,\\n      \\"TotalCount\\": 6\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<xml version=\\"1.0\\" encoding=\\"UTF-8\\">\\n\\t<code>200</code>\\n\\t<data>\\n\\t\\t<RequestId>E0DB75A2-28C8-4295-8851-A157FFB3DFED</RequestId>\\n\\t\\t<Result>\\n\\t\\t\\t<Pagination>\\n\\t\\t\\t\\t<PageSize>10</PageSize>\\n\\t\\t\\t\\t<Total>2</Total>\\n\\t\\t\\t\\t<Current>1</Current>\\n\\t\\t\\t</Pagination>\\n\\t\\t\\t<Members>\\n\\t\\t\\t\\t<Status>AllianceJoined</Status>\\n\\t\\t\\t\\t<Role>SuperAdmin</Role>\\n\\t\\t\\t\\t<MemberId>uid-1388601577407805</MemberId>\\n\\t\\t\\t\\t<UserId>OYXLOokN</UserId>\\n\\t\\t\\t\\t<JoinTime>1557477823000</JoinTime>\\n\\t\\t\\t\\t<MemberName>uid-1388601577407805sss</MemberName>\\n\\t\\t\\t</Members>\\n\\t\\t\\t<Members>\\n\\t\\t\\t\\t<Status>AllianceNotJoined</Status>\\n\\t\\t\\t\\t<Role>Member</Role>\\n\\t\\t\\t\\t<MemberId>uid-1562589998337656</MemberId>\\n\\t\\t\\t\\t<UserId>broOV8kD</UserId>\\n\\t\\t\\t\\t<JoinTime>1560147228000</JoinTime>\\n\\t\\t\\t\\t<MemberName>uid-1562589998337656</MemberName>\\n\\t\\t\\t</Members>\\n\\t\\t</Result>\\n\\t</data>\\n\\t<requestId>E0DB75A2-28C8-4295-8851-A157FFB3DFED</requestId>\\n\\t<successResponse>true</successResponse>\\n</xml>\\n","errorExample":""}]',
      'title' => '获取联盟成员列表',
      'summary' => '获取联盟成员列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainTransactionReceipt' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pYogqb9v',
          ),
        ),
        1 => 
        array (
          'name' => 'Hash',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '交易哈希',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'b3b0d2db83d3e670449d1e2a39d1d13b7e0e6080b0f9c6945f79eca68d1dd2ca',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9EC8FDC1-ED32-4EC0-AEC2-AFAA906ADBAB',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Data' => 
                  array (
                    'description' => 'Data：自定义结果数据',
                    'type' => 'string',
                    'example' => 'data',
                  ),
                  'GasUsed' => 
                  array (
                    'description' => '消耗的Gas',
                    'type' => 'string',
                    'example' => '20000',
                  ),
                  'Result' => 
                  array (
                    'description' => '结果，用户自定义错误码：
- 0：表示交易执行成功
- 非0：表示交易执行失败',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'Logs' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'logs：合约事件',
                      'type' => 'string',
                      'example' => '[""]',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9EC8FDC1-ED32-4EC0-AEC2-AFAA906ADBAB\\",\\n  \\"Result\\": {\\n    \\"Data\\": \\"data\\",\\n    \\"GasUsed\\": \\"20000\\",\\n    \\"Result\\": 0,\\n    \\"Logs\\": [\\n      \\"[\\\\\\"\\\\\\"]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询蚂蚁区块链交易回执信息',
      'summary' => '根据交易哈希查询一条蚂蚁区块链的交易回执信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainNodes' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1q8B5R9p',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BA9738FE-F427-44FD-A1D9-EB4EFB43075A',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '请求结果：
- publicKey：节点公钥
- nodeId：节点ID
- nodestate：节点状态，取值 2， 唯一状态，无其他状态值
- endpoints：客户端接入地址
- nodeType：1 共识节点，2 非共识节点',
                  'type' => 'object',
                  'example' => '["nodeState","publicKey","nodeType","nodeId","endpoints"]',
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BA9738FE-F427-44FD-A1D9-EB4EFB43075A\\",\\n  \\"Result\\": [\\n    [\\n      \\"nodeState\\",\\n      \\"publicKey\\",\\n      \\"nodeType\\",\\n      \\"nodeId\\",\\n      \\"endpoints\\"\\n    ]\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainNodesResponse>\\n    <code>200</code>\\n    <data>\\n        <RequestId>BA9738FE-F427-44FD-A1D9-EB4EFB43075A</RequestId>\\n        <Result>\\n            <endpoints>\\n                <port>18130</port>\\n                <ip>47.101.74.49</ip>\\n            </endpoints>\\n            <nodeState>2</nodeState>\\n            <publicKey>0x9934CFA59EE6CB241AEC242411BCD67D1DA8E07095FFC49DCB1102F2625031EBE9636CD6C392F675214E406C9AA55CD7F8A9EA11BD54C93258FA93BED717EACD</publicKey>\\n            <nodeType>1</nodeType>\\n            <nodeId>0x79233E99716D28740AA00CFE0C1274C34C9E5511EE910C227999683EAF749553</nodeId>\\n        </Result>\\n        <Result>\\n            <endpoints>\\n                <port>18131</port>\\n                <ip>47.101.74.49</ip>\\n            </endpoints>\\n            <nodeState>2</nodeState>\\n            <publicKey>0x63F4F303751FB86866718A4C797CE4CD8DDBECCB2E113D5CB9B41818C6C549FEA9E559601916F0F4BDCABDC16C170ECAFA0525C8345490161124EC8386F39B93</publicKey>\\n            <nodeType>1</nodeType>\\n            <nodeId>0x9E953C89ADA2E927F7EAE866D2F26828B330D44DD17FEA84195B902B1AD1D1B1</nodeId>\\n        </Result>\\n        <Result>\\n            <endpoints>\\n                <port>18132</port>\\n                <ip>47.101.74.49</ip>\\n            </endpoints>\\n            <nodeState>2</nodeState>\\n            <publicKey>0x1143C35FEFF1EB151AEB77C19A6ECC6FFD6BA13AA1913C60A9ADACA08AA6CB51A555ACF6E3E6B658142EB464EF2199AE41CA0EC5ACEB6514B5F56E2D2395CE78</publicKey>\\n            <nodeType>1</nodeType>\\n            <nodeId>0x77AD62D5041B92617488A0FDD8E341C06352344FA09F614AD7FDF616C1936B92</nodeId>\\n        </Result>\\n        <Result>\\n            <endpoints>\\n                <port>18133</port>\\n                <ip>47.101.74.49</ip>\\n            </endpoints>\\n            <nodeState>2</nodeState>\\n            <publicKey>0xCD15C9C87DAB460C2F4AE48752E98AF023B8810777CAAA563E045EF04F714A8D2934998CAC00F462C81EB23B3816D39E07B81B49695FEA827342FDCEA982E3B6</publicKey>\\n            <nodeType>1</nodeType>\\n            <nodeId>0x3F6355C92FB81904A1D9FD6E7781415A2B4455704BCFE2A8A0466302BD8EA5C8</nodeId>\\n        </Result>\\n    </data>\\n    <requestId>BA9738FE-F427-44FD-A1D9-EB4EFB43075A</requestId>\\n    <successResponse>true</successResponse>\\n</DescribeAntChainNodesResponse>","errorExample":""}]',
      'title' => '查询蚂蚁区块链的节点信息列表',
      'summary' => '查询一条蚂蚁区块链的节点信息列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainTransactionStatistics' => 
    array (
      'methods' => 
      array (
        0 => 'head',
        1 => 'trace',
        2 => 'post',
        3 => 'get',
        4 => 'delete',
        5 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pYogqb9v',
          ),
        ),
        1 => 
        array (
          'name' => 'Start',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '统计开始时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1563206400000',
          ),
        ),
        2 => 
        array (
          'name' => 'End',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '统计结束时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1563897600000',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'E93884AC-6C21-4FEA-8E3A-7377D33B194F',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Dt' => 
                    array (
                      'description' => '时间',
                      'type' => 'string',
                      'example' => '2019-07-16',
                    ),
                    'CreatTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1563294007000',
                    ),
                    'LastSumBlockHeight' => 
                    array (
                      'description' => '最后统计的区块高度',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '148018',
                    ),
                    'TransCount' => 
                    array (
                      'description' => '交易总量',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'AntChainId' => 
                    array (
                      'description' => '区块链ID',
                      'type' => 'string',
                      'example' => 'pYogqb9v',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E93884AC-6C21-4FEA-8E3A-7377D33B194F\\",\\n  \\"Result\\": [\\n    {\\n      \\"Dt\\": \\"2019-07-16\\",\\n      \\"CreatTime\\": 1563294007000,\\n      \\"LastSumBlockHeight\\": 148018,\\n      \\"TransCount\\": 0,\\n      \\"AntChainId\\": \\"pYogqb9v\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '查询一条蚂蚁区块链的交易统计信息',
      'summary' => '查询一条蚂蚁区块链的交易统计信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainQRCodeAuthorization' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bDXK6boZ',
          ),
        ),
        1 => 
        array (
          'name' => 'QRCodeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '二维码类型，当前可以选值为 MINI_APP_BROWSER_TRANSACTION 代表支付宝小程序区块链浏览器。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MINI_APP_BROWSER_TRANSACTION',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'QRCodeType' => 
                  array (
                    'description' => '二维码类型，当前可以选值为 MINI_APP_BROWSER_TRANSACTION 代表支付宝小程序区块链浏览器。',
                    'type' => 'string',
                    'example' => 'MINI_APP_BROWSER_TRANSACTION',
                  ),
                  'AuthorizationType' => 
                  array (
                    'description' => '授权类型， 当前可选值 为 ALL_USER_AUTHORIZATION 代表授权所有用户，SPECIFIC_USER_AUTHORIZATION 代表授权部分用户，UNAUTHORIZED 代表未授权 ',
                    'type' => 'string',
                    'example' => 'ALL_USER_AUTHORIZATION',
                  ),
                  'AntChainId' => 
                  array (
                    'description' => '区块链ID',
                    'type' => 'string',
                    'example' => 'bDXK6boZ',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Result\\": {\\n    \\"QRCodeType\\": \\"MINI_APP_BROWSER_TRANSACTION\\",\\n    \\"AuthorizationType\\": \\"ALL_USER_AUTHORIZATION\\",\\n    \\"AntChainId\\": \\"bDXK6boZ\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainQRCodeAuthorizationResponse>\\n    <code>200</code>\\n    <data>\\n        <RequestId>20023B5C-70E0-40E7-BCE3-DF095C2B62AE</RequestId>\\n        <Result>\\n            <AuthorizedUserList>\\n                <GmtAuthorized>1580434627000</GmtAuthorized>\\n                <Phone>1380013****</Phone>\\n            </AuthorizedUserList>\\n            <AuthorizationType>SPECIFIC_USER_AUTHORIZATION</AuthorizationType>\\n            <Bizid>q0oWe792</Bizid>\\n            <QRCodeType>MINI_APP_BROWSER_TRANSACTION</QRCodeType>\\n        </Result>\\n    </data>\\n    <requestId>20023B5C-70E0-40E7-BCE3-DF095C2B62AE</requestId>\\n    <successResponse>true</successResponse>\\n</DescribeAntChainQRCodeAuthorizationResponse>","errorExample":""}]',
      'title' => '查询蚂蚁区块链交易二维码授权状态',
      'summary' => '查询蚂蚁区块链交易二维码授权状态。',
    ),
    'DescribeAntChainMiniAppBrowserQRCodeAccessLog' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bDXK6boZ',
          ),
        ),
        1 => 
        array (
          'name' => 'QRCodeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '二维码类型，当前可以选值为 MINI_APP_BROWSER_TRANSACTION 代表支付宝小程序区块链浏览器。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MINI_APP_BROWSER_TRANSACTION',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessAlipayAccountCount' => 
                  array (
                    'description' => '总查询账号数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'AccessCount' => 
                  array (
                    'description' => '总查询次数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1000',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Result\\": {\\n    \\"AccessAlipayAccountCount\\": 100,\\n    \\"AccessCount\\": 1000\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainMiniAppBrowserQRCodeAccessLogResponse>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Result>\\n        <AccessAlipayAccountCount>100</AccessAlipayAccountCount>\\n        <AccessCount>1000</AccessCount>\\n    </Result>\\n</DescribeAntChainMiniAppBrowserQRCodeAccessLogResponse>","errorExample":""}]',
      'title' => '查询二维码支付宝端扫码统计信息',
      'summary' => '查询蚂蚁区块链的交易二维码支付宝端扫码统计信息。',
    ),
    'DescribeAntChainMiniAppBrowserTransactionQRCode' => 
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bDXK6boZ',
          ),
        ),
        1 => 
        array (
          'name' => 'TransactionHash',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '交易哈希值',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '4a1f1371012cf840a9e4c6bde430d5ba600e422e592d153bd2689783cd1f87d0',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Base64QRCodePNG' => 
                  array (
                    'description' => 'Base64编码的二维码 png 图片',
                    'type' => 'string',
                    'example' => 'iVBORw0KGgo......ABJRU5ErkJggg==',
                  ),
                  'TransactionHash' => 
                  array (
                    'description' => '交易哈希值',
                    'type' => 'string',
                    'example' => '10692388f8b729cbb42d2985eebd3567812def357eb826a7ec810ce97e1f295e',
                  ),
                  'QRCodeContent' => 
                  array (
                    'description' => '二维码内容',
                    'type' => 'string',
                    'example' => 'https://render.antfin.com/p/s/miniapp-web/?type=trans&from=aliyun&bizid=bDXK6boZ&hash=10692388f8b729cbb42d2985eebd3567812def357eb826a7ec810ce97e1f295e',
                  ),
                  'AntChainId' => 
                  array (
                    'description' => '区块链ID',
                    'type' => 'string',
                    'example' => 'bDXK6boZ',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Result\\": {\\n    \\"Base64QRCodePNG\\": \\"iVBORw0KGgo......ABJRU5ErkJggg==\\",\\n    \\"TransactionHash\\": \\"10692388f8b729cbb42d2985eebd3567812def357eb826a7ec810ce97e1f295e\\",\\n    \\"QRCodeContent\\": \\"https://render.antfin.com/p/s/miniapp-web/?type=trans&from=aliyun&bizid=bDXK6boZ&hash=10692388f8b729cbb42d2985eebd3567812def357eb826a7ec810ce97e1f295e\\",\\n    \\"AntChainId\\": \\"bDXK6boZ\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>EEDADC6E-5295-4CC2-B006-5D03719E651E</RequestId>\\n    <Result>\\n        <AntChainId>q0oWe792</AntChainId>\\n        <Base64QRCodePNG>iVBORw0KGgoAAAANSUhEUgAAAPAAAADwCAIAAACxN37FAAAbRklEQVR42u2dCXAc1ZnHbZ22Y8AEgg1Jis0m2SJLJVQ2sCxJqMqx2c0m7G5SSaqSrYRK2N0EyxfmCoe5vISEZBOHVNhdgtXdkg+MsQ3YYIzt4AMbzYxkScbGtqxj7lNz9Nwz3f3e275GNuBDtuaNJOv/eUol97RaPf1+79N3ve9NYxDIBSTT8AggABoCAdAQCICGQAA0BEBDIAAaAgHQEAiAhkAANARAQyAAGgIB0BAIgIZAADQEQEMgABoCAdAQCICGQAA0BEBDIFMQ6GkcZDS/azTHR3OfY/m853oPY7nOaI6f67Ot1jPnPe4AGkADaAANoAE0gAbQFzLQvK/DG9xzHbyxTHLecPNQQOM17gAaQANoAA2gATSABtBTBWjeg1q1UHwN74e3Y8cDMh5OKoAG0AAaQANoAA2gATSArh3QPBwy3r+rlskF3skUAA2gATSABtAAGkADaAA9uYHmAetYJtU0zsIjGTReDi6ABtAAGkADaAANoAE0gOZbpMLbWeQBLu/nxgPiWt4/gAbQABpAA2gADaABNIDm6wDh+MQ/PhGSSgAaxwE0gMZxAA2gAfRkApq3VGsyTITkDg8geDh8k1cANIAG0AAaQANoAA2gJwfQPJyGsSRHeA8w7887lufAu4iK9/gCaAANoAE0gAbQABpAT0WgeQfteTiavM/h8Qx5TGweTm21FBOABtAAGkADaAANoAH0hQb0REgijJdDVq0B5uEE1/LZ8oAeQANoAA2gATSABtAA+kIGmneSgnfig4ejVstEFQ8nlUcAoEaqE0ADaAANoAE0gAbQAHrSAc3bAeLh8I1XEofHxKuW81qtBBlvhQigATSABtAAGkADaAA9WYGeaKDX1AXhXIxVLcd0oimISVmcBKABNIAG0AAaQANoAF0Dp7CWTh6PyTMRnL9qFVFNtGcLoAE0gAbQABpAA2gAPdWB5u0Q8BgA3kmN8XKyx6s4iceYAmgADaABNIAG0AAaQE8VoHk/CB4JHd5JDR4Tplo/y+N+xivJBaABNIAG0AAaQE8uoNmkEgDNN7HC23GspfadXFjX5rPwGBcAzQtoNmkFQANoPgTQyosR40Wp/qLWIfu4/kUzX+ZblBLCVMoO5bXvbA1eIvnrpEidGGqQItPF4TopPEMMXP/CwLpAvmRf5sR1ADSA5g20jptKbFgthqnGiMJogbKURqMqCSlaQNFCKhnWiExYjrIyY4ez6hc3+hrF2Awh9Knnhv591/DDXelF+5M3v+i+RPTUi6G57e72wXTZmALGRKGj+6QAehySKeMVYeDzl5/qOlnVNbOugQnVCX47U34tooiD+afekX91KPVw1/D9HZH790eXOeNP9CRWHEr/31F5baD0rW2+5tbA7Dbfgr2RwwWSZVRhrMBYiLA/Hktfvdanq+pr1wx1yuWKQqfVAq5az3/iJIMAdDVFR1lXuofTxeeHsr96O3O3I77EkVrozC50ZhY60vprsTO32Jlf0pFf2JFpcSXmO7Pf2pWZKYXrxeBte4IhTUeZEsMQse2LPGPPDqUvkTxNreElHfGi8QapogYF0FMVaHrmo7ppwdKUORLF3x8evrMz2aJD7Mjc4ZTv7Uws70k+3ZddNZh6ySe/Hs5uj+S2+DPPuVMr++VfHspf93J8uhj5iDjYndeNE0b0OUEsS1lj5ncpyr65Naor6etf8HjKuupnABpAn/+Do4ZK1A1jQ1+arp5lxZo6VLcvTL+uQMkBWVlxSF7ilBc45UVO+cGudOvR7L5owV/U32W6raDDqpqQ6i/FeBGVUh3Wm14J1omRr2+JZFjl2mzEAtf/qQqlvzkYb5L8V648/mZaIdDQtUysTLTioXO65umUsBmt0HGkJtcV3AzRdDRDKn3eLd/VlVzoyC10pH7Rm3wlVBgqqEX9bd3kNc87pQOpk50l7KaXwvVS4Ls7DaDNE0fCGZrpARId6D8NpJol/5yVA9vi5l0wysOZG68s7ITOFF54QI8wTSykTcpM6kiZkb6c9rve9O2dcosr+VBnYrM/H1B1BMmI8qYVhfperA2gSZrSr74cqhci+leZWX8GNOtnbQXNtDJlT/REmwXPPHGgI6MSqlAADaDHArRpCej4EdvaMHSnWmTUlSg/7IzptvKizqRwLOEvaZZRYZ1FT2t5M3NaGLq7xMi9b4WahfCHWofeShv2sREgYZpm63WD72FCv7wlVCeGbtrgCRoWB+EUbgPQUwxoKx1iMKYVKN0zXHqgM93izP+8M/5aMCdbdokVKLa5p2ZMWjvVBXU7QtXfS1D68OFsoxBuFEPfeT3gVqlGdNuamSpa0S+Zoey/j8izxUCTELy7O1E0bkCDhh4fp7BasPJOrIw6xmxyplsalO1LlB906UZz5sGuVEe8lDdsCxtmI+BBtQpy5kw4hf1MC4y+lSr/4I3wB9s906XhOjHwAcH/3R1+l6zkKdPBLTLiKdOHeuJXrvI2CJHLVwWePJbPGzAr1u85p09aLWU0FqewNuFUAD1aoHU0dbVKqHY4ozzQGVvozD7QPdydUVQ7JEEqytgwTU7juBmnlhnrK5ClruEPtw81i75mwffx1YHrNkUbBX+jFPxQ+9A/7gzP3x/84Z7wJ9f4ZoqBejFwVZvnn3fJC1zyC55MiZ4UCAHQAPrcB5uakWEjzqF/CZXJL3tTLc70fa64M1VSqWVqMDsiZ1oklpHM7JDFSKCE6BPCr5Cnj8qfed7fJEQaRO+89v75HbGDafV4mfzn/tC8NnejWc6hGyH6u41i8BLB99WXfZsihd8fyi5wpJd2JvbHi5o9fxR2kqMJoAH0aIE2KzKMf7ppsWZAXuRM3eGSXwvli0YYT9Xsyg07MEFOqlAy/mfE7lSVaQnGNgQLX9sS+IDkrRfDl4jeW7YGXgkXsmaBkq7SdSv81VDhpx3xpjZ/nRC7en3oB7uDK4dyvjIpMTpYUB/vTd7uzCzvTgwVjBTMe4xpAM3FKayWM8EjUD8GDa2ZETj2VrJwd2e8xZkV+zIZMxLBiKZVktFWfZ0V0WMj9XVm2uXNtPLDN8KXS54GIdos+m983i0MpqOaiSQxYiaGXjcDGH0FdvnqoWYhdF9PNmvEQogxIRjVz3AMF+52pRc4c1KfnLUL9sgZPt14QTnpi5MudKAtS4ImNPrk4dR8Z/qRA0nd8DBjzNTU3GykYFQzzRNmkKnp75QYO1rQ7ulKflR0N7eG9dc1a7zLDyTcilWToWtuU4UbNrcZtdbN6yK7rN3dJPke7c4QS/HbIUBSZGzNQHaRQ77HGTuQKBq2O6EAGkCf8z1YVc27I8XFjvQiZ3p7JK8aCGoVA4OO5EGoaS4TI2miRVS64mjqsxu8uufXIAR1+3j+3pAroxbsgImdbRypkraCJLqGnif6Zwj+h3rT2oj9Qu3MpBH36B6+3ZX8w5F0/t2OJ4AG0KO+B2oUHv2mN7HQkdU9wmGNWHq4AqNWsTAMt08nPcPYy5H8328OzRb9dW3+WZL3G6/4t4WLKduPM5PXhoFiZh9PRCyIPg2OFNncNl+zGHikJ2Npf/t80+7RNftL/sJCp7zEme5NlQkD0BM4sVKt4qTzHoB3K2Vbc5rRDeaIFxZ1ppY60rtDpTKr8GycpJlF/ZYZrZvL1JFU/m1n+OK2wXopeLHgveEFb9tAOmlXJlE74mHa27alcfLiFkY9eTZP8jdI/ocOpm2FT63qDdXILRISLGnLD8gLHJlnjmVKlHBSLhNtvAD0mIA2koHE8MOKjAY1drDAfn0kd6uztKw3G1DMrImVmjaw1kzz1whEHCuQZV3Rq9u9jUKkUfR/Yu3QY92JoSJRR1dMZE2hgQKbK/kbpcAjvfIpK0X1q60dzC5wpR7sSvkLGoAG0GcHWrcFioTtTShL9wW+sKH/k+t8l7cH5q0OfOVV/8ZoMWXhbNUemdntGGFPH5X/ZoOnSQg1iIHLxaHb9kRd6XLetBNG+egsoPsL7AoT6Ed7ZHKaLHxPsnRnp7zYldgTLQBoAH12oJOEPtI1/OH2gXoxqFsO9YYNEKnTvxFD84ShBW9GDD1tWAIko7HN4eLXNrtnSYE6MXyx6Pv6VversVLW1NtmXI5VC2haydKkNPZYr3x7Z0rslwF07RIr1XIIqnX90Rcn3dsRnyV666XQVasC39/uX3Yg8diB1A/fCH1sjbepNdjU5rt1Z8Ctkn2p0q27wvOEwQYhNEvwf36D+0996Yi14sQOfBBWbQ3NjMUB9Nn+3Hxn5jcHZU4KqFrjxTtIAKBHBfQH2wL1YvgLG307oqU4o0VmrM3WLY39qfI3toUa2nyzRPdXX49/fI2voW2ovt139erA8p74QNEIPBML4hH3j7KqA60ysi2cW+TIPvDWMIAG0GcHuk6MXPO825lWysaCEc0KLev2sMK0/iL9uxcDuqHcIIYahegVkue23aEuWS1U8t/UXK/FSGXpCas+0LpX2pss3eFK39kRB9AA+uxAN4reXx+Uy8w2GUxMVSuVpxG21pueIXmnS8EbN0dfjxTz1Ip7qJUciB2iNvlUR79cavRA61cfzCpLnYnFrhSArp1TWMui/qqAPnJkzsr+3WkraGYVNFvBYgNc3aJwl8mVa7z1YmBZd1KzrQoyUlr3Pkqrr6H180IKu9eZWOSSz+PJ13K8Lqgox+QF+oo/HekuVar0LSvCXHuiGrV1Wlihn3guPF2K3OVI6YBrZoZv9M5fVTR0grL7OhMLXBkADaDPDvQHhMHXEppm6127R4ZZDWqswT5SIFes9jeKgSd6k9RIv1hRDU2rFdD6eTKlP++Mt7jyABpAj8aG9t/pGM5ZBrFZGGdV+Ou6uETpU0fkZsE/u9Xd7i+ZPWFUwxChTGO0VkDTmELvcSUWAmjeTuFYjtfy+mc+p1EI/kW7+7VIuWSAWjZqlk2nT2HkQFq5dl1ouuRrEL3f2BHZnyjnzGpRRhmtlYbWf9VATlvqSCx2pt/ziXgnwiZCkABAn/NDvGqVv1EIfGyt55njGa9C9b/vMqMhlazzFz6z3l8vBpskX6Pgr5d889q9SztiR/JWL44aAW1mv8t3ONN3dsQANIA++zlPHUvPlYYaBP9M0ffZ9aHb3vD/ZHfgpk2+S0S3TvPFkvunHfGfdcQ/snqgSQg2twb+ap3/qaOyp0zK7+rkxdi7m9/SM0Y9zgb0iZ/WjfXtodwiZ/o+B4AG0KM4J8uoNJS5Yf3QrNZAvRBuao3Wt4XqpNDM1tA1zw397mgiSViGsh2x4rdfC84xWzjPEoNfecW3yptNMqt/qFnIYb0YObEC4LT9nU8N9Ei3mpMyj1R3TFf2Z1pcyV/2ZAB07ZzCsTgftXRKTvU3nZYYGyiS/z2e/Zdt/ps3ur+wYeCWLb5fH84ezOt+oVnLbHiKWlyjkqfw+fV9MwSjdOlSyfP9naE9spKxHEp7maHZqcMOZmvnrKErIe7KPKCyxn7Rk1rsSrb25arolFfL0eet4AD0OQNtti4y1KxKDU2s/11PMGMdimoG8IjRSlQ1iu2pSpjR4c6rssd7Ep983t0shnSb5KpVA3c7o+/kVaWyDICMZA0pO13E+nRAn1wVYun4g3Lp7s7sHY7kG+EigAbQoxhUc2WqnSwxI80mVMQ+ZlsURodcy7rQUc1TdiCtLtkXvrJtqEH0zRR8n13n+8ORVFA112wz64dG1hDS0Zscpm7XKgtkVH3+rHNnWpzZB7vS7oIKoAH0aIC23TlSWSVl6UbFbgttqO21b/siZU0hdpEHMZdhZSl7I1q6ZWtolhScLoUuEv1ffjnwkj+XsRYemqvB1dNULZ0BaLMeyVoYrgbK2mPdiRZH+pmjmXxV8wAAugoPopYT5qzXPNmGHulMYLUDtZoNjCQOo4T9+KWD+3PlPxyKrTscNrqXM8VYuGUay7KOuyd940bfbCHQ0Bq5WPB+b2fozXgxY2r7czQ57J7R1nqvEiWbA4UljuRdxiLZosbOp41BtYqHqjVJqkwdgD7VmkLLWKUnQLPtBMt0Zm/KpRvW9399R/TbLx3rL6qqaSDbfcDMzjG6NTJUIv91MP7X69wzhIBuWH9klftuZ+wd3ae09f/JYeXK76EG0HPbfI1i8JHeNLFjdCdMoKBCl3fKCx2ZFYdzOSPpQwA0gD470O/PzFXibobBkNHoN1/1NkjBBjH6T5v7Y4YC1+yeSYzaeUOzQb9uEnRllZZ90XniYL0YaBQC1633r3gnHSJWjallFtvzxihNJayvSOe1uZvE0LKetGZiXAn4kQJj692ZRY70nY6EK17SmEYpgAbQ5wy01ciAmu1HjWjdsEquW++tF8J1UvjG9ceCZrskbSQgYbJq2CDWCizCcoTtSCi3bPfPkXz1QuyiVv/NG32bgsUUMQN71P4lxFhAQLsK9DIpoGvo7+7Nbo8rPoWUTRu9zOiBhHKPMzXflVp5LJk2LGpFg4auZWKFh8NRI6fw3UCTSmbEDNopJcp+eyh5qa6hpciy7mTe3AToPdaJ2aCf2W28DCOEhAkTBzM3bXTPFI3ltJeLgz/aHdwbLxeY3aQjqtKn+zNf3OJvFIenS5GZrcHLnj1+/QuBh7pSxwvaUFF7oifR4sw/ciDZn9fMYilV4+bM1XKhxqTJFF4oQFvLrTW7IYxG9H+dBfKXLwTq26KLXfJaX2pTIBUqM6PojiqkskmQZs0Es2+01VqxyNhgUf3FwcTH13p1o6JB9F+92ntPV+JYQT1eZt/bbrQkrRdCTUJspuifJbqbhWC9FG5e6b/xxehdB4y+TUuduT3RklrpOkYBNIA+/4do19yxVz3xb77svXZTqEEKzxajcwT/pZLnc+vdzw1lCtZSLWLnZsz1rMxe0WLb4VqekZ6s9rPdsSskb73kaZICn37ee8NLUd3CbhYC127wLn87tjehOFLqM33yl7cGZkue6WLoQ2u839+XWT2Yzduzi51hDxcADaDPLHazLmp0l6P7QklXqvSr3tjNW2OXSOF6ITJdik6XQh9tO/rnaEmzMt52Rw5KT+4YTW2wdT2vc7k9WvzWNv8c0d0g6LZ1qFkM/+DP0eMlUjAXeukn6dZzjNDHDyYvavc1CKEvbQ57lcomsyNJcQDNFWgexfg1K1Q/g3I284TWtpsGqsGS+iunf31S+9Ta/hnt3mk60GJituD9n2MyMZqD6SeWLJWs2vNBOxGANkMW5sZvZFhjK45nL10TniZGb9rgO14097+qRMKtKZQi7Na94QYhPFca2pEoU3uNI3vPsnJ+oPBwKCd0YmUKAP1+jU1LlK56O7ziaPwftgX/9sXQdWv7f7Td905OMbeeMPaL0NjI5oT0fS9iBUP0c3ZFSxcLnnopsOIdWamkBM3mj5plq+im+b60cqnobxICTx6WT2c7A2gAff5AW0UcWcbCxfLPt/UdL5MYNco5VKvXnRmIPpFXrJQX2bCOdEYwM5DrBnMzBO/Fre5dshUVsVPjIyWnVqvpz70YrZNCP9kVzp/G0gDQAHoMQFv7rlBWJjSmEIVZDf01w94g5nGz5zkZCUbY/UrpSVvEWnWlZNVgtknyzGkd2JuxQnykctaII0ljGrthc6SuLfjjnQB6/BIr4wXxeSdlzu0j2TVLWqXJgaWDjW0z38koTx1OPzeYd8ULAYXmjU5iZnNH82zFzNOoxuabLM/ohmBppuRuljzt3pxiLwGwzHU7m6Nf9kiRzF0z1CD5l3UlyBm3+q5W4qlaSmRSOoVTE2hqx81GAKtsJEvYq57kAldqoSN9hzN9l3P4ycPp1qHcRm9uRzC/J5zbHc7uCqU3B9Jr3PJT/bmWDvmy9nCdGP7X17xRQz2XrLi1teWFtefQwz3xZjF4keDZECqfeW05gAbQ5wv0yNoqM/hh9pqx+hlQf1FrH8gt707e40gscmbmOzMtzvRCZ1r/fokzt9iVu8OZbXEZNc0LHJlFHbnPb4o1CuHZkvfR7sQwsbLotq2dpboKz1+5ylcvDH9pi9en2v0UADSAribQlbp7e8OrynIUYgUorNKLsEK65fLWYOnZo/LveuOPH4g91Bm73zF8f0d8mSP5aJf8ZLf8x8Optb7cC1Hl+o3uOsk/R/T/x5/DO2PlfpUNEbY/rS07MHz1Gk+D6Ptwm3dTIK/aQW4AXSugqw7ZtOotpK2yDT067o2INKVZQuMq8StGXzx3yfgmphJZI2VixKtVpu6Plz7znLtZ8DcKwcvafNesPv7ptX1XtbubxECDEL6yve+PfXLO0M4KOY2G5ldINLkEQDP+o0tHakWZXdhM7Byiudmm2R2PvZ0j898IfGy1r0kMGrWpQqhRGJ7bFrhli/f1WNGMCZobZVENQAPocQW6snUms/doIxbd9r5YRqEpNTd4o0lKXbL6zLH0kjc9LbsGf3sotSNWDmnMWt/FrHZj5BQruLiWegLoyQr05B1gAF3rxEq1io2qdf2pMMDTOAgPBxRAcwR6cpE99qgRgJ4qQHNaNsajFBZAA2gADaCr5wjycP6q9UAn2s/yBoVHsRGPewDQABpAA2gADaABNIC+kIHmfR3e50yEAa5WooqHwzfRJiSABtAAGkADaAANoAH0tCmyT+FEfkC8kz48EhO1/LwTXwA0gAbQABpAA2gADaAnB9C1DLCfKwTVcphqmVipFoi1LN6q1lgAaAANoAE0gAbQABpATxWgeTttvM8fr0nLw4nkARYP+PiNEYAG0AAaQANoAA2gAfTkALpa8E2EQvhaFvTUMtEzXgqoNgVJABpAA2gADaABNIAG0BcO0BPhofBwjHiDVcvnUMt7qJHbDaABNIAG0AAaQANoAD0pgK4lxDwSLhOh4In3RK3Wc67l/QNoAA2gATSABtAAGkBfyEBzN/M5O3a8HcRqTbBawsFDMVUrGQegATSABtAAGkADaAB9IQA9Xs7QeCWDeB+vpQNXy89Vm6IuAA2gATSABtAAGkAD6MkHNI/rjAX08YKPd6JnLPfAO/ExvsVMABpAA2gADaABNIAG0JMb6MnobPGAoFqOXS3vZyIUVwFoAA2gATSABtAAGkAD6NoBzRsO3g4fD1h5jynv6wBoAA2gATSABtAAGkAD6OoPNu+iHB4FVbyLk2oDEL/kF4AG0AAaQANoAA2gAfRUBLqWD2W8nMVqXbOWBUM8PguPRBWABtAAGkADaAANoAH0VAGaR1HLRHCAqgUED9B5jEW1Ple1fhZAA2gADaABNIAG0AD6QgMaApk4AqAhABoCAdAQCICGQAA0BEBDIAAaAgHQEAiAhkAANARAQyAAGgIB0BAIgIZAADQEQEMgABoCAdAQCICGQAA0BEBDIJNO/h8w6wmAisg8HAAAAABJRU5ErkJggg==</Base64QRCodePNG>\\n        <qrCodeContent>https://render.antfin.com/p/s/miniapp-web/?type=trans&amp;from=aliyun&amp;bizid=bDXK6boZ&amp;hash=10692388f8b729cbb42d2985eebd3567812def357eb826a7ec810ce97e1f295e</qrCodeContent>\\n        <TransactionHash>10692388f8b729cbb42d2985eebd3567812def357eb826a7ec810ce97e1f295e</TransactionHash>\\n    </Result>\\n</data>\\n<requestId>EEDADC6E-5295-4CC2-B006-5D03719E651E</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => '获取蚂蚁区块链交易二维码',
      'summary' => '获取蚂蚁区块链交易二维码。',
    ),
    'DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsers' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bDXK6boZ',
          ),
        ),
        1 => 
        array (
          'name' => 'QRCodeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '二维码类型，当前可以选值为 MINI_APP_BROWSER_TRANSACTION 代表支付宝小程序区块链浏览器。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MINI_APP_BROWSER_TRANSACTION',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页显示条例数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面编号，从1开始',
            'type' => 'integer',
            'format' => 'int32',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'QRCodeType' => 
                  array (
                    'description' => '二维码类型，当前可以选值为 MINI_APP_BROWSER_TRANSACTION 代表支付宝小程序区块链浏览器。',
                    'type' => 'string',
                    'example' => 'MINI_APP_BROWSER_TRANSACTION',
                  ),
                  'AuthorizationType' => 
                  array (
                    'description' => '授权类型， 当前可选值 为 ALL_USER_AUTHORIZATION 代表授权所有用户，SPECIFIC_USER_AUTHORIZATION 代表授权部分用户，UNAUTHORIZED 代表未授权 ',
                    'type' => 'string',
                    'example' => 'ALL_USER_AUTHORIZATION',
                  ),
                  'AntChainId' => 
                  array (
                    'description' => '区块链ID',
                    'type' => 'string',
                    'example' => 'bDXK6boZ',
                  ),
                  'AuthorizedUserList' => 
                  array (
                    'description' => '授权用户列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'GmtAuthorized' => 
                        array (
                          'description' => '授权时间',
                          'type' => 'string',
                          'example' => '1580958389000',
                        ),
                        'Phone' => 
                        array (
                          'description' => '被授权手机号',
                          'type' => 'string',
                          'example' => '1380013****',
                        ),
                      ),
                    ),
                  ),
                  'Pagination' => 
                  array (
                    'description' => '分页情况',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageNumber' => 
                      array (
                        'description' => '页面编号，从1开始',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'PageSize' => 
                      array (
                        'description' => '每页显示条例数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总授权用户数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '100',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Result\\": {\\n    \\"QRCodeType\\": \\"MINI_APP_BROWSER_TRANSACTION\\",\\n    \\"AuthorizationType\\": \\"ALL_USER_AUTHORIZATION\\",\\n    \\"AntChainId\\": \\"bDXK6boZ\\",\\n    \\"AuthorizedUserList\\": [\\n      {\\n        \\"GmtAuthorized\\": \\"1580958389000\\",\\n        \\"Phone\\": \\"1380013****\\"\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageNumber\\": 10,\\n      \\"PageSize\\": 1,\\n      \\"TotalCount\\": 100\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponse>\\n    <code>200</code>\\n    <data>\\n        <RequestId>03A24567-54B6-46D5-9BC6-FF1B54370DDF</RequestId>\\n        <Result>\\n            <Pagination>\\n                <TotalCount>1</TotalCount>\\n                <PageSize>10</PageSize>\\n                <PageNumber>1</PageNumber>\\n            </Pagination>\\n            <AntChainId>q0oWe792</AntChainId>\\n            <AuthorizedUserList>\\n                <GmtAuthorized>1580958389000</GmtAuthorized>\\n                <Phone>1380013****</Phone>\\n            </AuthorizedUserList>\\n            <AuthorizationType>SPECIFIC_USER_AUTHORIZATION</AuthorizationType>\\n            <QRCodeType>MINI_APP_BROWSER_TRANSACTION</QRCodeType>\\n        </Result>\\n    </data>\\n    <requestId>03A24567-54B6-46D5-9BC6-FF1B54370DDF</requestId>\\n    <successResponse>true</successResponse>\\n</DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponse>","errorExample":""}]',
      'title' => '查询二维码授权扫码用户列表',
      'summary' => '查询蚂蚁区块链的交易二维码授权扫码用户列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '8bd720bde18c4b37b0f4a1c7834db163',
          ),
        ),
        1 => 
        array (
          'name' => 'QRCodeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '二维码类型，当前可以选值为 MINI_APP_BROWSER_TRANSACTION 代表支付宝小程序区块链浏览器。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MINI_APP_BROWSER_TRANSACTION',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页显示条例数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '页面编号，从1开始',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
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
              'HttpStatusCode' => 
              array (
                'description' => '请求返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ResultMessage' => 
              array (
                'description' => '结果消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '请求消息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'ResultCode' => 
              array (
                'description' => '结果码',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'QRCodeType' => 
                  array (
                    'description' => '二维码类型，当前可以选值为 MINI_APP_BROWSER_TRANSACTION 代表支付宝小程序区块链浏览器。',
                    'type' => 'string',
                    'example' => 'MINI_APP_BROWSER_TRANSACTION',
                  ),
                  'AuthorizationType' => 
                  array (
                    'description' => '授权类型， 当前可选值为 ALL_USER_AUTHORIZATION 代表授权所有用户，SPECIFIC_USER_AUTHORIZATION 代表授权部分用户，UNAUTHORIZED 代表未授权',
                    'type' => 'string',
                    'example' => 'SPECIFIC_USER_AUTHORIZATION',
                  ),
                  'AntChainId' => 
                  array (
                    'description' => '区块链ID',
                    'type' => 'string',
                    'example' => '4505A1E4-0EDD-4A02-A4D7-B49219328D49',
                  ),
                  'AuthorizedUserList' => 
                  array (
                    'description' => '	
授权用户列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'GmtAuthorized' => 
                        array (
                          'description' => '授权时间',
                          'type' => 'string',
                          'example' => '2021-01-07 10:55:42',
                        ),
                        'Phone' => 
                        array (
                          'description' => '被授权手机号',
                          'type' => 'string',
                          'example' => '13800138011',
                        ),
                      ),
                    ),
                  ),
                  'Pagination' => 
                  array (
                    'description' => '分页情况',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'PageSize' => 
                      array (
                        'description' => '每页显示条例数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'PageNumber' => 
                      array (
                        'description' => '页面编号，从1开始',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'TotalCount' => 
                      array (
                        'description' => '总授权用户数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '100',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"HttpStatusCode\\": \\"200\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ResultMessage\\": \\"OK\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"ResultCode\\": \\"OK\\",\\n  \\"Result\\": {\\n    \\"QRCodeType\\": \\"MINI_APP_BROWSER_TRANSACTION\\",\\n    \\"AuthorizationType\\": \\"SPECIFIC_USER_AUTHORIZATION\\",\\n    \\"AntChainId\\": \\"4505A1E4-0EDD-4A02-A4D7-B49219328D49\\",\\n    \\"AuthorizedUserList\\": [\\n      {\\n        \\"GmtAuthorized\\": \\"2021-01-07 10:55:42\\",\\n        \\"Phone\\": \\"13800138011\\"\\n      }\\n    ],\\n    \\"Pagination\\": {\\n      \\"PageSize\\": 10,\\n      \\"PageNumber\\": 1,\\n      \\"TotalCount\\": 100\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2Response>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <RequestId>D68D66B6-1964-4073-8714-B49F5EF1AEFC</RequestId>\\n    <Success>true</Success>\\n    <ResultMessage>OK</ResultMessage>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <ResultCode>OK</ResultCode>\\n    <Result>\\n        <QRCodeType>MINI_APP_BROWSER_TRANSACTION</QRCodeType>\\n        <AuthorizationType>SPECIFIC_USER_AUTHORIZATION</AuthorizationType>\\n        <AntChainId>4505A1E4-0EDD-4A02-A4D7-B49219328D49</AntChainId>\\n        <AuthorizedUserList>\\n            <GmtAuthorized>2021-01-07 10:55:42</GmtAuthorized>\\n            <Phone>13800138011</Phone>\\n        </AuthorizedUserList>\\n        <Pagination>\\n            <PageSize>10</PageSize>\\n            <PageNumber>1</PageNumber>\\n            <TotalCount>100</TotalCount>\\n        </Pagination>\\n    </Result>\\n</DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersV2Response>","errorExample":""}]',
      'title' => '查询交易二维码授权扫码用户列表',
      'summary' => '查询蚂蚁区块链的交易二维码授权扫码用户列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResetAntChainCertificate' => 
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'pYogqb9v',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '6ED983D3-C131-4104-8BDD-1F37992258E1',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"6ED983D3-C131-4104-8BDD-1F37992258E1\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '重置证书',
      'summary' => '重置证书。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ApplyAntChainCertificate' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bDXK6boZ',
          ),
        ),
        1 => 
        array (
          'name' => 'UploadReq',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '上传内容',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'LS0tLS1...',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D3FB9E67-0E31-4B8B-8895-3660CCE8CA62',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"D3FB9E67-0E31-4B8B-8895-3660CCE8CA62\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '申请链接蚂蚁区块链',
      'summary' => '申请链接一条蚂蚁区块链，上传 TLS 证书请求。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ApplyAntChainCertificateWithKeyAutoCreation' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1q8B5R9p',
          ),
        ),
        1 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DV80nJXq',
          ),
        ),
        2 => 
        array (
          'name' => 'Password',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'SSL密钥密码
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'password',
          ),
        ),
        3 => 
        array (
          'name' => 'CountryName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '城市名（L）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'countryName',
          ),
        ),
        4 => 
        array (
          'name' => 'StateOrProvinceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '省名（ST）
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'stateOrProvinceName',
          ),
        ),
        5 => 
        array (
          'name' => 'LocalityName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '国家名（C）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'localityName',
          ),
        ),
        6 => 
        array (
          'name' => 'OrganizationName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '机构名（O）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'organizationName  ',
          ),
        ),
        7 => 
        array (
          'name' => 'OrganizationUnitName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织单位名（OU）
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'organizationUnitName  ',
          ),
        ),
        8 => 
        array (
          'name' => 'CommonName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '通用名称（CN）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'commonName',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3E1894AF-FEE7-4C6C-8C2A-2B3EE0105B07',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'PrivateKey' => 
                  array (
                    'description' => '私钥',
                    'type' => 'string',
                    'example' => '-----BEGIN ENCRYPTED PRIVATE KEY-----\\nMII***A=\\n-----END ENCRYPTED PRIVATE KEY-----\\n',
                  ),
                  'DownloadPath' => 
                  array (
                    'description' => '下载地址',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SdkUrl' => 
                      array (
                        'description' => 'SDK下载链接',
                        'type' => 'string',
                        'example' => 'http://***',
                      ),
                      'ClientCrtUrl' => 
                      array (
                        'description' => 'client.crt下载链接',
                        'type' => 'string',
                        'example' => 'http://***client.crt',
                      ),
                      'CaCrtUrl' => 
                      array (
                        'description' => 'ca.crt下载链接',
                        'type' => 'string',
                        'example' => 'http://***ca.crt',
                      ),
                      'TrustCaUrl' => 
                      array (
                        'description' => 'trust.CA下载链接',
                        'type' => 'string',
                        'example' => 'http://***trustCa',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3E1894AF-FEE7-4C6C-8C2A-2B3EE0105B07\\",\\n  \\"Result\\": {\\n    \\"PrivateKey\\": \\"-----BEGIN ENCRYPTED PRIVATE KEY-----\\\\\\\\nMII***A=\\\\\\\\n-----END ENCRYPTED PRIVATE KEY-----\\\\\\\\n\\",\\n    \\"DownloadPath\\": {\\n      \\"SdkUrl\\": \\"http://***\\",\\n      \\"ClientCrtUrl\\": \\"http://***client.crt\\",\\n      \\"CaCrtUrl\\": \\"http://***ca.crt\\",\\n      \\"TrustCaUrl\\": \\"http://***trustCa\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '申请链接一条蚂蚁区块链',
      'summary' => '申请链接一条蚂蚁区块链，自动生成证书等连接信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ResetAntChainUserCertificate' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bDXK6boZ',
          ),
        ),
        1 => 
        array (
          'name' => 'Username',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'uid-128712635330****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3EB828D1-1E9D-4EC2-A002-139FE998D674',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"3EB828D1-1E9D-4EC2-A002-139FE998D674\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '重置用户',
      'summary' => '重置用户。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnfreezeAntChainAccount' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1q8B5R9p',
          ),
        ),
        1 => 
        array (
          'name' => 'Account',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '账户名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'accountname',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '6ED983D3-C131-4104-8BDD-1F37992258E1',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"6ED983D3-C131-4104-8BDD-1F37992258E1\\"\\n}","errorExample":""},{"type":"xml","example":"<UnfreezeAntChainAccountResponse>\\r\\n\\t<code>200</code>\\r\\n\\t<data>\\r\\n\\t\\t<RequestId>6ED983D3-C131-4104-8BDD-1F37992258E1</RequestId>\\r\\n\\t\\t<Result>success</Result>\\r\\n\\t</data>\\r\\n\\t<requestId>6ED983D3-C131-4104-8BDD-1F37992258E1</requestId>\\r\\n\\t<successResponse>true</successResponse>\\r\\n</UnfreezeAntChainAccountResponse>","errorExample":""}]',
      'title' => '解冻一个蚂蚁区块链上的账户',
      'summary' => '解冻一个蚂蚁区块链上的账户。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'FreezeAntChainAccount' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1q8B5R9p',
          ),
        ),
        1 => 
        array (
          'name' => 'Account',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '账户名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'accountname',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '9F862442-F6AD-4B5F-8969-CE23DE1413CB',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"9F862442-F6AD-4B5F-8969-CE23DE1413CB\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '冻结一个蚂蚁区块链上的账户',
      'summary' => '冻结一个蚂蚁区块链上的账户。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CopyAntChainContractProject' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProjectId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工程ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2L9VK68g',
          ),
        ),
        1 => 
        array (
          'name' => 'ProjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工程名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'copyproject',
          ),
        ),
        2 => 
        array (
          'name' => 'ProjectVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工程版本',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'v1.0.1',
          ),
        ),
        3 => 
        array (
          'name' => 'ProjectDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工程描述',
            'type' => 'string',
            'required' => false,
            'example' => 'copy project description',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '45D67F6F-C723-4AD8-8462-F94EE5FF22E6',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateTime' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1563953475248',
                  ),
                  'ConsortiumId' => 
                  array (
                    'description' => '联盟ID',
                    'type' => 'string',
                    'example' => 'DV80nJXq',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1563953475248',
                  ),
                  'ProjectId' => 
                  array (
                    'description' => '工程ID',
                    'type' => 'string',
                    'example' => 'R6XMEdXe',
                  ),
                  'ProjectName' => 
                  array (
                    'description' => '工程名称',
                    'type' => 'string',
                    'example' => 'copyproject',
                  ),
                  'ProjectVersion' => 
                  array (
                    'description' => '工程版本',
                    'type' => 'string',
                    'example' => 'v1.0.1',
                  ),
                  'ProjectDescription' => 
                  array (
                    'description' => '工程描述',
                    'type' => 'string',
                    'example' => 'copy project description',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"45D67F6F-C723-4AD8-8462-F94EE5FF22E6\\",\\n  \\"Result\\": {\\n    \\"UpdateTime\\": 1563953475248,\\n    \\"ConsortiumId\\": \\"DV80nJXq\\",\\n    \\"CreateTime\\": 1563953475248,\\n    \\"ProjectId\\": \\"R6XMEdXe\\",\\n    \\"ProjectName\\": \\"copyproject\\",\\n    \\"ProjectVersion\\": \\"v1.0.1\\",\\n    \\"ProjectDescription\\": \\"copy project description\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '在联盟内复制一个已有的合约工程',
      'summary' => '在联盟内复制一个已有的合约工程。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'BatchAddAntChainMiniAppQRCodeAuthorizedUsers' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'AntChainId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区块链ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bDXK6boZ',
          ),
        ),
        1 => 
        array (
          'name' => 'PhoneList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '新增的授权用户列表，内容为支付宝账号对应的手机号',
            'type' => 'object',
            'required' => true,
            'docRequired' => true,
            'example' => '["1380013****", "1380013****"]',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Result\\": \\"success\\",\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\"\\n}","errorExample":""},{"type":"xml","example":"<code>200</code>\\n<data>\\n    <RequestId>0E3F15EC-BEE3-4416-AAE7-7BB1C5B68AAF</RequestId>\\n    <Result>success</Result>\\n</data>\\n<requestId>0E3F15EC-BEE3-4416-AAE7-7BB1C5B68AAF</requestId>\\n<successResponse>true</successResponse>","errorExample":""}]',
      'title' => '批量新增蚂蚁区块链的交易二维码扫码权限',
      'summary' => '批量新增蚂蚁区块链的交易二维码扫码权限。',
    ),
    'CreateFabricChaincodePackage' => 
    array (
      'summary' => '创建2.0版本链码定义。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
          ),
        ),
        1 => 
        array (
          'name' => 'OssUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码包存放bucket内路径',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hi003/7efbe860-1a40-42c9-9e6b-0bc08d7ee3a4/cmcc.tar.gz',
          ),
        ),
        2 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
            'description' => '结果',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '信息',
                'type' => 'string',
                'example' => 'ok',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                '$ref' => '#/components/schemas/ChaincodePackage',
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
            'errorCode' => 'ChaincodeDuplicated',
            'errorMessage' => 'The chaincode [%s] of version [%s] already exists, please change the name or the version of the chaincode.',
          ),
          1 => 
          array (
            'errorCode' => 'ChaincodeInvalid',
            'errorMessage' => 'The format of the chaincode package is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"OrganizationId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\",\\n    \\"Label\\": \\"label\\",\\n    \\"Checksum\\": \\"15bab12c29edbc095c33545b9867aec9be469c74a6dd5783df6ee74a24334c77\\",\\n    \\"ChaincodePackageId\\": \\"cmcc-1.5:227c3cd472a8a2fcaa1c63f15812a1894348a985dc723006dd47d9f2848d10ed\\",\\n    \\"Md5sum\\": \\"N02eVKuRJDA2ODtieMUxVw==\\",\\n    \\"ProviderUid\\": \\"1313158505072210\\",\\n    \\"ProviderBid\\": \\"26842\\",\\n    \\"Type\\": 0,\\n    \\"TypeName\\": \\"golang\\",\\n    \\"UploadTime\\": \\"1533025590\\",\\n    \\"InstallTime\\": \\"1533025590\\",\\n    \\"State\\": \\"Running\\",\\n    \\"OssURL\\": \\"hi003/7efbe860-1a40-42c9-9e6b-0bc08d7ee3a4/cmcc.tar.gz\\",\\n    \\"DeleteTime\\": \\"1533025590\\",\\n    \\"Deleted\\": false,\\n    \\"Message\\": \\"ok\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建链码包定义',
    ),
    'SubmitFabricChaincodeDefinition' => 
    array (
      'summary' => '提交2.0版本链码定义。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
          ),
        ),
        1 => 
        array (
          'name' => 'ChaincodePackageId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码包ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sacc_v1.0:698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860',
          ),
        ),
        2 => 
        array (
          'name' => 'EndorsePolicy',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '背书规则',
            'type' => 'string',
            'required' => true,
            'example' => 'OR ("perf9141MSP.member")',
          ),
        ),
        3 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'CollectionConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'collection配置',
            'type' => 'string',
            'required' => false,
            'example' => 'collectionconfig',
          ),
        ),
        5 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码包名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sacc',
          ),
        ),
        6 => 
        array (
          'name' => 'InitRequired',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否需要初始化',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'ChannelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '通道ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'chan-channelx-1l1hmckuuisxo',
          ),
        ),
        8 => 
        array (
          'name' => 'ChaincodeVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码版本',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结果',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '接口请求返回的信息',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                '$ref' => '#/components/schemas/ChaincodeVO',
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
            'errorCode' => 'ResourceNotFound.Organization',
            'errorMessage' => 'The specified organization [%s] does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'GovernorException',
            'errorMessage' => 'An error in the backend management service has occurred. [%s]',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Name\\": \\"sacc\\",\\n    \\"Version\\": \\"1.1\\",\\n    \\"Input\\": \\"args:\\\\\\"key\\\\\\" args:\\\\\\"val\\\\\\"\\",\\n    \\"Type\\": 0,\\n    \\"State\\": \\"Pending\\",\\n    \\"Path\\": \\"chaincode/sacc\\",\\n    \\"ChaincodeId\\": \\"code-sacc-jbkuldd3i7ad\\",\\n    \\"Install\\": true,\\n    \\"Message\\": \\"ok\\",\\n    \\"CreateTime\\": \\"1533025590\\",\\n    \\"DeployTime\\": \\"1533025590\\",\\n    \\"ChannelName\\": \\"f100\\",\\n    \\"EndorsePolicy\\": \\"OR (\\\\\\"perf9141MSP.member\\\\\\")\\",\\n    \\"ConsortiumId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\",\\n    \\"ProviderId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\",\\n    \\"ProviderName\\": \\"perf9141\\",\\n    \\"ChannelId\\": \\"chan-test-b0wx5suhgyb9p\\",\\n    \\"Management\\": false,\\n    \\"ChaincodePackageId\\": \\"sacc_v1.0:698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860\\",\\n    \\"InitRequired\\": false,\\n    \\"ChaincodeDefinitionId\\": \\"a5f04baed775b016e8dc386783f40a2c8b13823cac22bc5fd11846cca4a13a9a\\"\\n  }\\n}","type":"json"}]',
      'title' => '提交链码定义',
    ),
    'InstallFabricChaincodePackage' => 
    array (
      'summary' => '安装Fabric2.0特性链码包。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
          ),
        ),
        1 => 
        array (
          'name' => 'ChaincodePackageId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码包ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'chan-channelx-1l1hmckuuisxo',
          ),
        ),
        2 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
            'description' => '结果',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '信息',
                'type' => 'string',
                'example' => 'ok',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                '$ref' => '#/components/schemas/ChaincodePackage',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"OrganizationId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\",\\n    \\"Label\\": \\"label\\",\\n    \\"Checksum\\": \\"15bab12c29edbc095c33545b9867aec9be469c74a6dd5783df6ee74a24334c77\\",\\n    \\"ChaincodePackageId\\": \\"cmcc-1.5:227c3cd472a8a2fcaa1c63f15812a1894348a985dc723006dd47d9f2848d10ed\\",\\n    \\"Md5sum\\": \\"N02eVKuRJDA2ODtieMUxVw==\\",\\n    \\"ProviderUid\\": \\"1313158505072210\\",\\n    \\"ProviderBid\\": \\"26842\\",\\n    \\"Type\\": 0,\\n    \\"TypeName\\": \\"golang\\",\\n    \\"UploadTime\\": \\"1533025590\\",\\n    \\"InstallTime\\": \\"1533025590\\",\\n    \\"State\\": \\"Running\\",\\n    \\"OssURL\\": \\"hi003/7efbe860-1a40-42c9-9e6b-0bc08d7ee3a4/cmcc.tar.gz\\",\\n    \\"DeleteTime\\": \\"1533025590\\",\\n    \\"Deleted\\": false,\\n    \\"Message\\": \\"ok\\"\\n  }\\n}","type":"json"}]',
      'title' => '安装2.0链码包',
    ),
    'ApproveFabricChaincodeDefinition' => 
    array (
      'summary' => '批准2.0版本链码定义。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ChaincodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'code-sacc-jbkuldd3i7ad',
          ),
        ),
        3 => 
        array (
          'name' => 'ChaincodePackageId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码包ID',
            'type' => 'string',
            'required' => false,
            'example' => 'sacc_v1.0:698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结果',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '接口请求返回的信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                '$ref' => '#/components/schemas/ChaincodeVO',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Name\\": \\"sacc\\",\\n    \\"Version\\": \\"1.1\\",\\n    \\"Input\\": \\"args:\\\\\\"key\\\\\\" args:\\\\\\"val\\\\\\"\\",\\n    \\"Type\\": 0,\\n    \\"State\\": \\"Pending\\",\\n    \\"Path\\": \\"chaincode/sacc\\",\\n    \\"ChaincodeId\\": \\"code-sacc-jbkuldd3i7ad\\",\\n    \\"Install\\": true,\\n    \\"Message\\": \\"ok\\",\\n    \\"CreateTime\\": \\"1533025590\\",\\n    \\"DeployTime\\": \\"1533025590\\",\\n    \\"ChannelName\\": \\"f100\\",\\n    \\"EndorsePolicy\\": \\"OR (\\\\\\"perf9141MSP.member\\\\\\")\\",\\n    \\"ConsortiumId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\",\\n    \\"ProviderId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\",\\n    \\"ProviderName\\": \\"perf9141\\",\\n    \\"ChannelId\\": \\"chan-test-b0wx5suhgyb9p\\",\\n    \\"Management\\": false,\\n    \\"ChaincodePackageId\\": \\"sacc_v1.0:698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860\\",\\n    \\"InitRequired\\": false,\\n    \\"ChaincodeDefinitionId\\": \\"a5f04baed775b016e8dc386783f40a2c8b13823cac22bc5fd11846cca4a13a9a\\"\\n  }\\n}","type":"json"}]',
      'title' => '批准链码定义',
    ),
    'UpgradeFabricChaincodeDefinition' => 
    array (
      'summary' => '升级2.0版本链码包定义。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
          ),
        ),
        1 => 
        array (
          'name' => 'ChaincodePackageId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码包ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sacc_v1.0:698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860',
          ),
        ),
        2 => 
        array (
          'name' => 'EndorsePolicy',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '背书规则',
            'type' => 'string',
            'required' => true,
            'example' => 'OR ("perf9141MSP.member")',
          ),
        ),
        3 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'CollectionConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'collection配置信息',
            'type' => 'string',
            'required' => false,
            'example' => 'collectionconfig',
          ),
        ),
        5 => 
        array (
          'name' => 'ChaincodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'code-sacc-jbkuldd3i7ad',
          ),
        ),
        6 => 
        array (
          'name' => 'InitRequired',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否需要初始化',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        7 => 
        array (
          'name' => 'ChaincodeVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码版本',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结果',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '消息',
                'type' => 'string',
                'example' => 'ok',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1E55C947-19B4-4AAD-9D22-0B8DA8904B3D',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'example' => '链码信息',
                '$ref' => '#/components/schemas/ChaincodeVO',
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
            'errorCode' => 'ChaincodeDuplicated',
            'errorMessage' => 'The chaincode [%s] of version [%s] already exists, please change the name or the version of the chaincode.',
          ),
          1 => 
          array (
            'errorCode' => 'Chaincode.Error',
            'errorMessage' => 'The specified chaincode [%s] is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceNotFound.Organization',
            'errorMessage' => 'The specified organization [%s] does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"1E55C947-19B4-4AAD-9D22-0B8DA8904B3D\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Name\\": \\"sacc\\",\\n    \\"Version\\": \\"1.1\\",\\n    \\"Input\\": \\"args:\\\\\\"key\\\\\\" args:\\\\\\"val\\\\\\"\\",\\n    \\"Type\\": 0,\\n    \\"State\\": \\"Pending\\",\\n    \\"Path\\": \\"chaincode/sacc\\",\\n    \\"ChaincodeId\\": \\"code-sacc-jbkuldd3i7ad\\",\\n    \\"Install\\": true,\\n    \\"Message\\": \\"ok\\",\\n    \\"CreateTime\\": \\"1533025590\\",\\n    \\"DeployTime\\": \\"1533025590\\",\\n    \\"ChannelName\\": \\"f100\\",\\n    \\"EndorsePolicy\\": \\"OR (\\\\\\"perf9141MSP.member\\\\\\")\\",\\n    \\"ConsortiumId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\",\\n    \\"ProviderId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\",\\n    \\"ProviderName\\": \\"perf9141\\",\\n    \\"ChannelId\\": \\"chan-test-b0wx5suhgyb9p\\",\\n    \\"Management\\": false,\\n    \\"ChaincodePackageId\\": \\"sacc_v1.0:698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860\\",\\n    \\"InitRequired\\": false,\\n    \\"ChaincodeDefinitionId\\": \\"a5f04baed775b016e8dc386783f40a2c8b13823cac22bc5fd11846cca4a13a9a\\"\\n  }\\n}","type":"json"}]',
      'title' => '升级链码包定义',
    ),
    'DescribeFabricOrganizationChaincodePackage' => 
    array (
      'summary' => '获取组织内2.0链码包信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '信息',
                'type' => 'string',
                'example' => 'ok',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '链码包信息',
                  '$ref' => '#/components/schemas/ChaincodePackage',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"OrganizationId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\",\\n      \\"Label\\": \\"label\\",\\n      \\"Checksum\\": \\"15bab12c29edbc095c33545b9867aec9be469c74a6dd5783df6ee74a24334c77\\",\\n      \\"ChaincodePackageId\\": \\"cmcc-1.5:227c3cd472a8a2fcaa1c63f15812a1894348a985dc723006dd47d9f2848d10ed\\",\\n      \\"Md5sum\\": \\"N02eVKuRJDA2ODtieMUxVw==\\",\\n      \\"ProviderUid\\": \\"1313158505072210\\",\\n      \\"ProviderBid\\": \\"26842\\",\\n      \\"Type\\": 0,\\n      \\"TypeName\\": \\"golang\\",\\n      \\"UploadTime\\": \\"1533025590\\",\\n      \\"InstallTime\\": \\"1533025590\\",\\n      \\"State\\": \\"Running\\",\\n      \\"OssURL\\": \\"hi003/7efbe860-1a40-42c9-9e6b-0bc08d7ee3a4/cmcc.tar.gz\\",\\n      \\"DeleteTime\\": \\"1533025590\\",\\n      \\"Deleted\\": false,\\n      \\"Message\\": \\"ok\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricOrganizationChaincodePackageResponse>\\n    <Message>ok</Message>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <OrganizationId>peers-aaaaaa2-1eqnj5o5w9dt3</OrganizationId>\\n        <Label>label</Label>\\n        <Checksum>15bab12c29edbc095c33545b9867aec9be469c74a6dd5783df6ee74a24334c77</Checksum>\\n        <ChaincodePackageId>cmcc-1.5:227c3cd472a8a2fcaa1c63f15812a1894348a985dc723006dd47d9f2848d10ed</ChaincodePackageId>\\n        <Md5sum>N02eVKuRJDA2ODtieMUxVw==</Md5sum>\\n        <ProviderUid>1313158505072210</ProviderUid>\\n        <ProviderBid>26842</ProviderBid>\\n        <Type>0</Type>\\n        <TypeName>golang</TypeName>\\n        <UploadTime>1533025590</UploadTime>\\n        <InstallTime>1533025590</InstallTime>\\n        <State>Running</State>\\n        <OssURL>hi003/7efbe860-1a40-42c9-9e6b-0bc08d7ee3a4/cmcc.tar.gz</OssURL>\\n        <DeleteTime>1533025590</DeleteTime>\\n        <Deleted>false</Deleted>\\n        <Message>ok</Message>\\n    </Result>\\n</DescribeFabricOrganizationChaincodePackageResponse>","errorExample":""}]',
      'title' => '获取组织内链码包信息',
    ),
    'DescribeFabricChaincodeDefinitionTask' => 
    array (
      'summary' => '获取2.0链码任务列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
          ),
        ),
        1 => 
        array (
          'name' => 'ChaincodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'code-sacc-jbkuldd3i7ad',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '任务状态',
                    'type' => 'string',
                    'example' => 'Pending',
                  ),
                  'Type' => 
                  array (
                    'description' => '任务类型',
                    'type' => 'string',
                    'example' => 'ChaincodeDefinition',
                  ),
                  'ChannelName' => 
                  array (
                    'description' => '通道名称',
                    'type' => 'string',
                    'example' => 'f100',
                  ),
                  'Description' => 
                  array (
                    'description' => '任务描述',
                    'type' => 'string',
                    'example' => 'description',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1533025590',
                  ),
                  'TaskId' => 
                  array (
                    'description' => '任务ID',
                    'type' => 'string',
                    'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
                  ),
                  'Creator' => 
                  array (
                    'description' => '任务创建者',
                    'type' => 'string',
                    'example' => 'perf9141MSP',
                  ),
                  'Approvers' => 
                  array (
                    'description' => '任务审批信息列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '审批者',
                      'type' => 'string',
                      'example' => 'perf9141MSP',
                    ),
                  ),
                  'Content' => 
                  array (
                    'description' => '任务内容',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ChaincodeDefinition' => 
                      array (
                        'description' => '链码定义',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'EndorsementPolicy' => 
                          array (
                            'description' => '背书规则',
                            'type' => 'string',
                            'example' => 'OR ("perf9141MSP.member")',
                          ),
                          'Sequence' => 
                          array (
                            'description' => '同一链码任务顺序ID',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1',
                          ),
                          'Version' => 
                          array (
                            'description' => '链码版本',
                            'type' => 'string',
                            'example' => '1.1',
                          ),
                          'ChaincodePackageId' => 
                          array (
                            'description' => '链码包ID',
                            'type' => 'string',
                            'example' => 'sacc_v1.0:698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860',
                          ),
                          'Name' => 
                          array (
                            'description' => '链码名称',
                            'type' => 'string',
                            'example' => 'sacc',
                          ),
                          'InitRequired' => 
                          array (
                            'description' => '是否需要初始化',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'CollectionConfig' => 
                          array (
                            'description' => '链码collection配置',
                            'type' => 'string',
                            'example' => 'collectionconfig',
                          ),
                          'Uid' => 
                          array (
                            'description' => '链码唯一标识',
                            'type' => 'string',
                            'example' => '698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Status\\": \\"Pending\\",\\n    \\"Type\\": \\"ChaincodeDefinition\\",\\n    \\"ChannelName\\": \\"f100\\",\\n    \\"Description\\": \\"description\\",\\n    \\"CreateTime\\": 1533025590,\\n    \\"TaskId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n    \\"Creator\\": \\"perf9141MSP\\",\\n    \\"Approvers\\": [\\n      \\"perf9141MSP\\"\\n    ],\\n    \\"Content\\": {\\n      \\"ChaincodeDefinition\\": {\\n        \\"EndorsementPolicy\\": \\"OR (\\\\\\"perf9141MSP.member\\\\\\")\\",\\n        \\"Sequence\\": 1,\\n        \\"Version\\": \\"1.1\\",\\n        \\"ChaincodePackageId\\": \\"sacc_v1.0:698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860\\",\\n        \\"Name\\": \\"sacc\\",\\n        \\"InitRequired\\": true,\\n        \\"CollectionConfig\\": \\"collectionconfig\\",\\n        \\"Uid\\": \\"698d4e73c5f1d0239fbf0313ac79ddfaf44d5a803ecb02a4d1983cca4a706860\\"\\n      }\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '获取链码任务列表',
    ),
    'CreateFabricChaincode' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa1-1oxw31d046jtl',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '通道ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'chan-first-channel-1w55v3u39x2xz',
          ),
        ),
        2 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'consortium-aaaaaa-akpcsjjac2jd',
          ),
        ),
        3 => 
        array (
          'name' => 'OssBucket',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'OSS桶地址',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'https://chaincode.oss-cn-beijing.aliyuncs.com',
          ),
        ),
        4 => 
        array (
          'name' => 'OssUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'OSS对象地址',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'aaaaaa1/a0cf8729-7d47-44c9-9ed5-6d2fdfc8dc2c/sacc.cc',
          ),
        ),
        5 => 
        array (
          'name' => 'EndorsePolicy',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '背书策略：
- OR (\'aaaaaa1MSP.peer\',\'aaaaaa2MSP.peer\',...)表示此通道中的任何一方背书即可。
- AND (\'aaaaaa1MSP.peer\',\'aaaaaa2MSP.peer\',...)表示需要此通道中的所有组织背书。 
- OutOf (a,\'aaaaaa1MSP.peer\',\'aaaaaa2MSP.peer\',...)：当a为1时表示此通道中的任何一方背书即可；当a为2时表示至少需要两个通道中的组织背书才行；当a等于组织数时，背书情况等同于AND。',
            'type' => 'string',
            'required' => false,
            'example' => 'OR (\'aaaaaa1MSP.peer\')',
          ),
        ),
        6 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置信息',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'CD264CC8-B892-4CDC-BD31-7D179EE6E396',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '创建结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '类型：
- 0：未定义
- 1：Go
- 2：Node
- 4：Java',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'EndorsePolicy' => 
                  array (
                    'description' => '背书策略',
                    'type' => 'string',
                    'example' => 'OR (\'aaaaaa1MSP.peer\')',
                  ),
                  'State' => 
                  array (
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'Instantiatable',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1544766801000',
                  ),
                  'ChaincodeId' => 
                  array (
                    'description' => '链码ID',
                    'type' => 'string',
                    'example' => 'code-sacc-1pr09q7jmo0np',
                  ),
                  'ProviderName' => 
                  array (
                    'description' => '上传者名字',
                    'type' => 'string',
                    'example' => 'peers-aaaaaa1-1oxw31d046jtl',
                  ),
                  'Message' => 
                  array (
                    'description' => '消息',
                    'type' => 'string',
                    'example' => 'string',
                  ),
                  'ChaincodeName' => 
                  array (
                    'description' => '链码名',
                    'type' => 'string',
                    'example' => 'mychaincode',
                  ),
                  'Input' => 
                  array (
                    'description' => '输入',
                    'type' => 'string',
                    'example' => 'string',
                  ),
                  'Install' => 
                  array (
                    'description' => '是否安装',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ProviderId' => 
                  array (
                    'description' => '上传ID',
                    'type' => 'string',
                    'example' => 'peers-aaaaaa1-1oxw31d046jtl',
                  ),
                  'DeployTime' => 
                  array (
                    'description' => '部署时间',
                    'type' => 'string',
                    'example' => '1544766801000',
                  ),
                  'ChaincodeVersion' => 
                  array (
                    'description' => '链码版本',
                    'type' => 'string',
                    'example' => '1.0',
                  ),
                  'ConsortiumId' => 
                  array (
                    'description' => '联盟ID',
                    'type' => 'string',
                    'example' => 'consortium-aaaaaa-akpcsjjac2jd',
                  ),
                  'ChannelName' => 
                  array (
                    'description' => '通道名',
                    'type' => 'string',
                    'example' => 'first-channel',
                  ),
                  'Path' => 
                  array (
                    'description' => '路径',
                    'type' => 'string',
                    'example' => 'go-sdk-demo/chaincode/src',
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
            'errorCode' => 'ChaincodeDuplicated',
            'errorMessage' => 'The chaincode [%s] of version [%s] already exists, please change the name or the version of the chaincode.',
          ),
          1 => 
          array (
            'errorCode' => 'ChaincodeInvalid',
            'errorMessage' => 'The format of the chaincode package is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CD264CC8-B892-4CDC-BD31-7D179EE6E396\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Type\\": 1,\\n    \\"EndorsePolicy\\": \\"OR (\'aaaaaa1MSP.peer\')\\",\\n    \\"State\\": \\"Instantiatable\\",\\n    \\"CreateTime\\": \\"1544766801000\\",\\n    \\"ChaincodeId\\": \\"code-sacc-1pr09q7jmo0np\\",\\n    \\"ProviderName\\": \\"peers-aaaaaa1-1oxw31d046jtl\\",\\n    \\"Message\\": \\"string\\",\\n    \\"ChaincodeName\\": \\"mychaincode\\",\\n    \\"Input\\": \\"string\\",\\n    \\"Install\\": true,\\n    \\"ProviderId\\": \\"peers-aaaaaa1-1oxw31d046jtl\\",\\n    \\"DeployTime\\": \\"1544766801000\\",\\n    \\"ChaincodeVersion\\": \\"1.0\\",\\n    \\"ConsortiumId\\": \\"consortium-aaaaaa-akpcsjjac2jd\\",\\n    \\"ChannelName\\": \\"first-channel\\",\\n    \\"Path\\": \\"go-sdk-demo/chaincode/src\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateFabricChaincodeResponse>\\n    <RequestId>CD264CC8-B892-4CDC-BD31-7D179EE6E396</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <Type>1</Type>\\n        <EndorsePolicy>OR (\'aaaaaa1MSP.peer\')</EndorsePolicy>\\n        <State>Instantiatable</State>\\n        <CreateTime>1544766801000</CreateTime>\\n        <ChaincodeId>code-sacc-1pr09q7jmo0np</ChaincodeId>\\n        <ProviderName>peers-aaaaaa1-1oxw31d046jtl</ProviderName>\\n        <Message>string</Message>\\n        <ChaincodeName>mychaincode</ChaincodeName>\\n        <Input>string</Input>\\n        <Install>true</Install>\\n        <ProviderId>peers-aaaaaa1-1oxw31d046jtl</ProviderId>\\n        <DeployTime>1544766801000</DeployTime>\\n        <ChaincodeVersion>1.0</ChaincodeVersion>\\n        <ConsortiumId>consortium-aaaaaa-akpcsjjac2jd</ConsortiumId>\\n        <ChannelName>first-channel</ChannelName>\\n        <Path>go-sdk-demo/chaincode/src</Path>\\n    </Result>\\n</CreateFabricChaincodeResponse>","errorExample":""}]',
      'title' => '创建链码',
      'summary' => '调用CreateFabricChaincode创建链码。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateFabricChannelMember' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通道ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'chan-channelx-1l1hmckuuisxo',
          ),
        ),
        1 => 
        array (
          'name' => 'Organization',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '组织列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'OrganizationId' => 
                array (
                  'description' => '组织ID',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'peers-aaaaaa1-1oxw31d046jtl',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<CreateFabricChannelMemberResponse>\\r\\n\\t<Result>true</Result>\\r\\n\\t<RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n</CreateFabricChannelMemberResponse>","errorExample":""}]',
      'title' => 'CreateFabricChannelMember',
      'summary' => '调用CreateFabricChannelMember将其他组织添加到通道中。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateFabricConsortiumMember' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ConsortiumId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'consortium-aaaaaa-akpcsjjac2jd',
          ),
        ),
        1 => 
        array (
          'name' => 'Code',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邀请码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '200',
          ),
        ),
        2 => 
        array (
          'name' => 'Organization',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '组织列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'OrganizationId' => 
                array (
                  'description' => '组织ID',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'peers-aaaaaa1-1oxw31d046jtl',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<CreateFabricConsortiumMemberResponse>\\r\\n\\t<Result>true</Result>\\r\\n\\t<RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n</CreateFabricConsortiumMemberResponse>","errorExample":""}]',
      'title' => 'CreateFabricConsortiumMember',
      'summary' => '调用CreateFabricConsortiumMember创建一个组织加入联盟的提案。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateFabricChannel' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联盟ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'consortium-aaaaaa-akpcsjjac2jd',
          ),
        ),
        1 => 
        array (
          'name' => 'ChannelName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通道名。最大长度50个字符，可以包含英文或数字及符号"_", "-", "."。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'channelx',
          ),
        ),
        2 => 
        array (
          'name' => 'BatchTimeout',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '块超时时间。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxMessageCount',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '块交易上限。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        4 => 
        array (
          'name' => 'PreferredMaxBytes',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '块大小软限制。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '12',
          ),
        ),
        5 => 
        array (
          'name' => 'Organization',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Id' => 
                array (
                  'description' => '加入通道的组织ID号列表，输入：`Organization.1.Id=org1&Organization.2.Id=org2`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'peers-aaaaaa1-1oxw31d046jtl',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '创建结果',
                'type' => 'object',
                'properties' => 
                array (
                  'BatchTimeout' => 
                  array (
                    'description' => '块超时时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'string',
                    'example' => '1544768139624',
                  ),
                  'ChaincodeCount' => 
                  array (
                    'description' => '链码数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'PreferredMaxBytes' => 
                  array (
                    'description' => '块大小软限制',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '12',
                  ),
                  'State' => 
                  array (
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1544768139624',
                  ),
                  'OwnerName' => 
                  array (
                    'description' => '创建者',
                    'type' => 'string',
                    'example' => 'uid-',
                  ),
                  'OwnerUid' => 
                  array (
                    'description' => '创建者Uid',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1234',
                  ),
                  'OwnerBid' => 
                  array (
                    'description' => '创建者Bid',
                    'type' => 'string',
                    'example' => '26842',
                  ),
                  'MaxMessageCount' => 
                  array (
                    'description' => '块交易上限',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '50',
                  ),
                  'MemberCount' => 
                  array (
                    'description' => '成员数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'RequestId' => 
                  array (
                    'description' => '请求ID',
                    'type' => 'string',
                    'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
                  ),
                  'ConsortiumId' => 
                  array (
                    'description' => '联盟ID',
                    'type' => 'string',
                    'example' => 'consortium-aaaaaa-akpcsjjac2jd',
                  ),
                  'ChannelName' => 
                  array (
                    'description' => '通道名',
                    'type' => 'string',
                    'example' => 'channelx',
                  ),
                  'SupportConfig' => 
                  array (
                    'description' => '是否支持配置',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ChannelId' => 
                  array (
                    'description' => '通道ID',
                    'type' => 'string',
                    'example' => 'chan-channelx-1l1hmckuuisxo',
                  ),
                  'ConsortiumName' => 
                  array (
                    'description' => '联盟名',
                    'type' => 'string',
                    'example' => 'aaaaaa',
                  ),
                  'BlockCount' => 
                  array (
                    'description' => '块个数',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ChannelNameDuplicated',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"BatchTimeout\\": 2,\\n    \\"UpdateTime\\": \\"1544768139624\\",\\n    \\"ChaincodeCount\\": 2,\\n    \\"PreferredMaxBytes\\": 12,\\n    \\"State\\": \\"Running\\",\\n    \\"CreateTime\\": \\"1544768139624\\",\\n    \\"OwnerName\\": \\"uid-\\",\\n    \\"OwnerUid\\": 1234,\\n    \\"OwnerBid\\": \\"26842\\",\\n    \\"MaxMessageCount\\": 50,\\n    \\"MemberCount\\": 1,\\n    \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n    \\"ConsortiumId\\": \\"consortium-aaaaaa-akpcsjjac2jd\\",\\n    \\"ChannelName\\": \\"channelx\\",\\n    \\"SupportConfig\\": true,\\n    \\"ChannelId\\": \\"chan-channelx-1l1hmckuuisxo\\",\\n    \\"ConsortiumName\\": \\"aaaaaa\\",\\n    \\"BlockCount\\": 2\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateFabricChannelResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <BatchTimeout>2</BatchTimeout>\\n        <UpdateTime>1544768139624</UpdateTime>\\n        <ChaincodeCount>2</ChaincodeCount>\\n        <PreferredMaxBytes>12</PreferredMaxBytes>\\n        <State>Running</State>\\n        <CreateTime>1544768139624</CreateTime>\\n        <OwnerName>uid-</OwnerName>\\n        <OwnerUid>1234</OwnerUid>\\n        <OwnerBid>26842</OwnerBid>\\n        <MaxMessageCount>50</MaxMessageCount>\\n        <MemberCount>1</MemberCount>\\n        <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n        <ConsortiumId>consortium-aaaaaa-akpcsjjac2jd</ConsortiumId>\\n        <ChannelName>channelx</ChannelName>\\n        <SupportConfig>true</SupportConfig>\\n        <ChannelId>chan-channelx-1l1hmckuuisxo</ChannelId>\\n        <ConsortiumName>aaaaaa</ConsortiumName>\\n        <BlockCount>2</BlockCount>\\n    </Result>\\n</CreateFabricChannelResponse>","errorExample":""}]',
      'title' => 'CreateFabricChannel',
      'summary' => '调用CreateFabricChannel创建通道。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateFabricConsortium' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例所在的位置信息，和**RegionId**一致',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'OrdererType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Orderer类型：
- kafka （不再支持）
- etcdraft',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'etcdraft',
          ),
        ),
        2 => 
        array (
          'name' => 'ZoneId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区域',
            'type' => 'string',
            'required' => false,
            'example' => 'random',
          ),
        ),
        3 => 
        array (
          'name' => 'ConsortiumName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'aaaaa',
          ),
        ),
        4 => 
        array (
          'name' => 'Domain',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '域名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'helloworld',
          ),
        ),
        5 => 
        array (
          'name' => 'ConsortiumDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟描述',
            'type' => 'string',
            'required' => false,
            'example' => 'some',
          ),
        ),
        6 => 
        array (
          'name' => 'ChannelPolicy',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '创建通道策略',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'all',
          ),
        ),
        7 => 
        array (
          'name' => 'SpecName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '规格：
- starter 体验版
- basic 基础版
- enterprise 企业版
- enterprise-sgx 企业安全版',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'basic',
          ),
        ),
        8 => 
        array (
          'name' => 'OrderersCount',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Orderer数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        9 => 
        array (
          'name' => 'PeersCount',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Peer数量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        10 => 
        array (
          'name' => 'PaymentDurationUnit',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '周期单位',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'month',
          ),
        ),
        11 => 
        array (
          'name' => 'PaymentDuration',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '计费周期',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        12 => 
        array (
          'name' => 'Organization',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '组织列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'OrganizationId' => 
                array (
                  'description' => '组织ID',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'peers-yidio-1tuigx42b1goc',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'ChannelCount' => 
                  array (
                    'description' => '通道数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Domain' => 
                  array (
                    'description' => '域名',
                    'type' => 'string',
                    'example' => 'hello',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1544086901984',
                  ),
                  'SpecName' => 
                  array (
                    'description' => '规格',
                    'type' => 'string',
                    'example' => 'basic',
                  ),
                  'OrdererCount' => 
                  array (
                    'description' => 'orderer数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'ServiceState' => 
                  array (
                    'description' => '服务状态',
                    'type' => 'string',
                    'example' => 'Pending',
                  ),
                  'ClusterState' => 
                  array (
                    'description' => '集群状态',
                    'type' => 'string',
                    'example' => 'Pending',
                  ),
                  'OwnerUid' => 
                  array (
                    'description' => '创建者uid',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1019556',
                  ),
                  'OwnerBid' => 
                  array (
                    'description' => '创建者bid',
                    'type' => 'string',
                    'example' => '26842',
                  ),
                  'CodeName' => 
                  array (
                    'description' => '域名',
                    'type' => 'string',
                    'example' => 'lianmenyumingyi',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '地域',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'MemberCount' => 
                  array (
                    'description' => '成员数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'ChannelPolicy' => 
                  array (
                    'description' => '通道策略',
                    'type' => 'string',
                    'example' => 'Any',
                  ),
                  'OrdererType' => 
                  array (
                    'description' => 'orderer类型',
                    'type' => 'string',
                    'example' => 'Kafka',
                  ),
                  'Description' => 
                  array (
                    'description' => '描述',
                    'type' => 'string',
                    'example' => 'string',
                  ),
                  'ConsortiumId' => 
                  array (
                    'description' => '联盟ID',
                    'type' => 'string',
                    'example' => 'consortium-lianmenyumingyi-hc5d1bwlulg7',
                  ),
                  'ZoneId' => 
                  array (
                    'description' => '区域',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'ConsortiumName' => 
                  array (
                    'description' => '联盟名',
                    'type' => 'string',
                    'example' => 'myconsortium',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"ChannelCount\\": 0,\\n    \\"Domain\\": \\"hello\\",\\n    \\"CreateTime\\": \\"1544086901984\\",\\n    \\"SpecName\\": \\"basic\\",\\n    \\"OrdererCount\\": 1,\\n    \\"ServiceState\\": \\"Pending\\",\\n    \\"ClusterState\\": \\"Pending\\",\\n    \\"OwnerUid\\": 1019556,\\n    \\"OwnerBid\\": \\"26842\\",\\n    \\"CodeName\\": \\"lianmenyumingyi\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"MemberCount\\": 2,\\n    \\"ChannelPolicy\\": \\"Any\\",\\n    \\"OrdererType\\": \\"Kafka\\",\\n    \\"Description\\": \\"string\\",\\n    \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwlulg7\\",\\n    \\"ZoneId\\": \\"cn-hangzhou\\",\\n    \\"ConsortiumName\\": \\"myconsortium\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateFabricConsortiumResponse>\\r\\n<result>\\r\\n\\t\\t<CodeName>阿里巴巴集团区块链联盟</CodeName>\\r\\n\\t\\t<ClusterState>Pending</ClusterState>\\r\\n\\t\\t<ConsortiumId>c-93k8d34jy79y79</ConsortiumId>\\r\\n\\t\\t<CreateTime>1999-05-10 09:00:00</CreateTime>\\r\\n\\t\\t<OwnerBid>12312</OwnerBid>\\r\\n\\t\\t<OrdererCount>1</OrdererCount>\\r\\n\\t\\t<OrdererType>kafka</OrdererType>\\r\\n\\t\\t<ConsortiumName>阿里巴巴集团</ConsortiumName>\\r\\n\\t\\t<OrganizationCount>3</OrganizationCount>\\r\\n\\t\\t<ChannelCount>0</ChannelCount>\\r\\n\\t\\t<ChannelPolicy>ANY</ChannelPolicy>\\r\\n\\t\\t<Description>string</Description>\\r\\n\\t\\t<Domain>domain</Domain>\\r\\n\\t\\t<MemberCount>2</MemberCount>\\r\\n\\t\\t<ServiceState>Pending</ServiceState>\\r\\n\\t</result>\\r\\n\\t<RequestId>2537DB1B-F478-431E-A847-5DDAAE2BD251</RequestId>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n\\t<Success>true</Success>\\r\\n</CreateFabricConsortiumResponse>","errorExample":""}]',
      'title' => 'CreateFabricConsortium',
      'summary' => '调用CreateFabricConsortium创建联盟。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateFabricOrganization' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OrganizationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'name',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '区域',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'Domain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '域名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'domain',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述',
            'type' => 'string',
            'required' => false,
            'example' => 'description',
          ),
        ),
        4 => 
        array (
          'name' => 'SpecName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规格名：
- starter：体验版
- basic：基础版
- enterprise：企业版
- enterprise-sgx：企业安全版
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'basic',
          ),
        ),
        5 => 
        array (
          'name' => 'PeersCount',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '节点数据量',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'PaymentDuration',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '计费周期',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '12',
          ),
        ),
        7 => 
        array (
          'name' => 'PaymentDurationUnit',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '周期单位',
            'type' => 'string',
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
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Domain' => 
                  array (
                    'description' => '域名',
                    'type' => 'string',
                    'example' => 'domain',
                  ),
                  'PeerCount' => 
                  array (
                    'description' => '组织节点数目',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1544086901984',
                  ),
                  'ConsortiumCount' => 
                  array (
                    'description' => '联盟数量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'SpecName' => 
                  array (
                    'description' => '节点规格',
                    'type' => 'string',
                    'example' => 'baisc',
                  ),
                  'ServiceState' => 
                  array (
                    'description' => '服务状态',
                    'type' => 'string',
                    'example' => 'Pending',
                  ),
                  'OwnerName' => 
                  array (
                    'description' => '所有者名称',
                    'type' => 'string',
                    'example' => 'name',
                  ),
                  'ClusterState' => 
                  array (
                    'description' => '集群状态',
                    'type' => 'string',
                    'example' => 'Pending',
                  ),
                  'OwnerUid' => 
                  array (
                    'description' => '所有者用户ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1019556',
                  ),
                  'OwnerBid' => 
                  array (
                    'description' => '所有者业务代码',
                    'type' => 'string',
                    'example' => '26842',
                  ),
                  'CodeName' => 
                  array (
                    'description' => '域名代码',
                    'type' => 'string',
                    'example' => 'name',
                  ),
                  'OrganizationDescription' => 
                  array (
                    'description' => '组织描述',
                    'type' => 'string',
                    'example' => 'desc',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '组织节点所在区域',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'OrganizationId' => 
                  array (
                    'description' => '组织ID',
                    'type' => 'string',
                    'example' => 'zuzhiyumingyi-hc5d1bwlulg7',
                  ),
                  'RequestId' => 
                  array (
                    'description' => '请求ID',
                    'type' => 'string',
                    'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
                  ),
                  'ZoneId' => 
                  array (
                    'description' => '组织节点所在可用区',
                    'type' => 'string',
                    'example' => 'zone',
                  ),
                  'UserCount' => 
                  array (
                    'description' => '组织用户数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'OrganizationName' => 
                  array (
                    'description' => '组织名称',
                    'type' => 'string',
                    'example' => 'zuzhiyumingyi',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Domain\\": \\"domain\\",\\n    \\"PeerCount\\": 3,\\n    \\"CreateTime\\": \\"1544086901984\\",\\n    \\"ConsortiumCount\\": 2,\\n    \\"SpecName\\": \\"baisc\\",\\n    \\"ServiceState\\": \\"Pending\\",\\n    \\"OwnerName\\": \\"name\\",\\n    \\"ClusterState\\": \\"Pending\\",\\n    \\"OwnerUid\\": 1019556,\\n    \\"OwnerBid\\": \\"26842\\",\\n    \\"CodeName\\": \\"name\\",\\n    \\"OrganizationDescription\\": \\"desc\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"OrganizationId\\": \\"zuzhiyumingyi-hc5d1bwlulg7\\",\\n    \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n    \\"ZoneId\\": \\"zone\\",\\n    \\"UserCount\\": 2,\\n    \\"OrganizationName\\": \\"zuzhiyumingyi\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateFabricOrganizationResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <Domain>domain</Domain>\\n        <PeerCount>3</PeerCount>\\n        <CreateTime>1544086901984</CreateTime>\\n        <ConsortiumCount>2</ConsortiumCount>\\n        <SpecName>baisc</SpecName>\\n        <ServiceState>Pending</ServiceState>\\n        <OwnerName>name</OwnerName>\\n        <ClusterState>Pending</ClusterState>\\n        <OwnerUid>1019556</OwnerUid>\\n        <OwnerBid>26842</OwnerBid>\\n        <CodeName>name</CodeName>\\n        <OrganizationDescription>desc</OrganizationDescription>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <OrganizationId>zuzhiyumingyi-hc5d1bwlulg7</OrganizationId>\\n        <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n        <ZoneId>zone</ZoneId>\\n        <UserCount>2</UserCount>\\n        <OrganizationName>zuzhiyumingyi</OrganizationName>\\n    </Result>\\n</CreateFabricOrganizationResponse>","errorExample":""}]',
      'title' => '创建组织',
      'summary' => '调用CreateFabricOrganization创建组织。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateFabricOrganizationUser' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-yidio-1tuigx42b****',
          ),
        ),
        1 => 
        array (
          'name' => 'Username',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'username',
          ),
        ),
        2 => 
        array (
          'name' => 'Password',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '密码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'password',
          ),
        ),
        3 => 
        array (
          'name' => 'Attrs',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'ABAC属性',
            'type' => 'string',
            'required' => false,
            'example' => 'foo=foo1,bar=bar1',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Password' => 
                  array (
                    'description' => '密码',
                    'type' => 'string',
                    'example' => 'password',
                  ),
                  'ExpireTime' => 
                  array (
                    'description' => '过期时间',
                    'type' => 'string',
                    'example' => '1544411108000',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1544086901984',
                  ),
                  'OrganizationId' => 
                  array (
                    'description' => '组织ID',
                    'type' => 'string',
                    'example' => 'peers-yidio-1tuigx42b****',
                  ),
                  'Username' => 
                  array (
                    'description' => '用户名',
                    'type' => 'string',
                    'example' => 'username',
                  ),
                  'Fullname' => 
                  array (
                    'description' => '全名',
                    'type' => 'string',
                    'example' => 'fullname',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Password\\": \\"password\\",\\n    \\"ExpireTime\\": \\"1544411108000\\",\\n    \\"CreateTime\\": \\"1544086901984\\",\\n    \\"OrganizationId\\": \\"peers-yidio-1tuigx42b****\\",\\n    \\"Username\\": \\"username\\",\\n    \\"Fullname\\": \\"fullname\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateFabricOrganizationUserResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <Password>password</Password>\\n        <ExpireTime>1544411108000</ExpireTime>\\n        <CreateTime>1544086901984</CreateTime>\\n        <OrganizationId>peers-yidio-1tuigx42b****</OrganizationId>\\n        <Username>username</Username>\\n        <Fullname>fullname</Fullname>\\n    </Result>\\n</CreateFabricOrganizationUserResponse>","errorExample":""}]',
      'title' => '创建组织用户',
      'summary' => '调用CreateFabricOrganizationUser创建组织用户。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteFabricChaincode' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ChaincodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'code-sacc-1pr09q7jm****',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<DeleteFabricChaincodeResponse>\\r\\n\\t<RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n</DeleteFabricChaincodeResponse>","errorExample":""}]',
      'title' => '删除错误的链码',
      'summary' => '调用DeleteFabricChaincode删除错误的链码。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'JoinFabricChannel' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通道ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'chan-channelx-1l1hmckuu****',
          ),
        ),
        1 => 
        array (
          'name' => 'Do',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'accept',
          ),
        ),
        2 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'WithPeer' => 
                    array (
                      'description' => '是否包含节点',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'AcceptTime' => 
                    array (
                      'description' => '接受时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'State' => 
                    array (
                      'description' => '状态',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'DestroyTime' => 
                    array (
                      'description' => '销毁时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'InviteTime' => 
                    array (
                      'description' => '邀请时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'ChannelId' => 
                    array (
                      'description' => '通道ID',
                      'type' => 'string',
                      'example' => 'channelid',
                    ),
                    'ConfirmTime' => 
                    array (
                      'description' => '确认时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'ApproveTime' => 
                    array (
                      'description' => '批准时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'OrganizationId' => 
                    array (
                      'description' => '组织ID',
                      'type' => 'string',
                      'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"WithPeer\\": true,\\n      \\"AcceptTime\\": \\"1533025590\\",\\n      \\"State\\": \\"Running\\",\\n      \\"DestroyTime\\": \\"1533025590\\",\\n      \\"InviteTime\\": \\"1533025590\\",\\n      \\"ChannelId\\": \\"channelid\\",\\n      \\"ConfirmTime\\": \\"1533025590\\",\\n      \\"ApproveTime\\": \\"1533025590\\",\\n      \\"OrganizationId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<JoinFabricChannelResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <WithPeer>true</WithPeer>\\n        <AcceptTime>1533025590</AcceptTime>\\n        <State>Running</State>\\n        <DestroyTime>1533025590</DestroyTime>\\n        <InviteTime>1533025590</InviteTime>\\n        <ChannelId>channelid</ChannelId>\\n        <ConfirmTime>1533025590</ConfirmTime>\\n        <ApproveTime>1533025590</ApproveTime>\\n        <OrganizationId>peers-aaaaaa2-1eqnj5o5w9dt3</OrganizationId>\\n    </Result>\\n</JoinFabricChannelResponse>","errorExample":""}]',
      'title' => '确认加入通道',
      'summary' => '调用JoinFabricChannel确认加入通道。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricOrdererLogs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ConsortiumId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'consortium-test-iyuso3g7****',
          ),
        ),
        1 => 
        array (
          'name' => 'OrdererName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序节点名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'orderer1',
          ),
        ),
        2 => 
        array (
          'name' => 'Lines',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '显示行数',
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
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '508EA949-6349-4C86-B8E7-1D90669382B1',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'string',
                'example' => 'Kafka.Retry.Producer.RetryMax=3',
              ),
              'Success' => 
              array (
                'description' => '结果状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误代码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"508EA949-6349-4C86-B8E7-1D90669382B1\\",\\n  \\"Result\\": \\"Kafka.Retry.Producer.RetryMax=3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricOrdererLogsResponse>\\n    <RequestId>508EA949-6349-4C86-B8E7-1D90669382B1</RequestId>\\n    <Result>Kafka.Retry.Producer.RetryMax=3</Result>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n</DescribeFabricOrdererLogsResponse>","errorExample":""}]',
      'title' => '获取Orderer节点的日志信息',
      'summary' => '调用DescribeFabricOrdererLogs获取Orderer节点的日志信息。',
    ),
    'DescribeFabricPeerLogs' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-test11-tzwny25vqicq',
          ),
        ),
        1 => 
        array (
          'name' => 'PeerName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Peer节点名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peer1',
          ),
        ),
        2 => 
        array (
          'name' => 'Lines',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '显示行数',
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
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '78A09CAF-4944-4CAE-B25D-F5B6BA27D9F5',
              ),
              'Result' => 
              array (
                'description' => '日志记录',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'Success' => 
              array (
                'description' => '返回状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '状态代码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"78A09CAF-4944-4CAE-B25D-F5B6BA27D9F5\\",\\n  \\"Result\\": \\"xxxx\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricPeerLogsResponse>\\n    <RequestId>78A09CAF-4944-4CAE-B25D-F5B6BA27D9F5</RequestId>\\n    <Result>xxxx</Result>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n</DescribeFabricPeerLogsResponse>","errorExample":""}]',
      'title' => '获取Peer节点日志信息',
      'summary' => '调用DescribeFabricPeerLogs获取Peer节点日志信息。',
    ),
    'DescribeRootDomain' => 
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
              'RequestId' => 
              array (
                'description' => '请求Id',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'string',
                'example' => 'onaliyunbaas.com',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Result\\": \\"onaliyunbaas.com\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<DescribeRootDomainResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Result>onaliyunbaas.com</Result>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n</DescribeRootDomainResponse>","errorExample":""}]',
      'title' => '获取可用的根域名',
      'summary' => '获取Baas中可用的根域名。',
    ),
    'DescribeFabricExplorer' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-test11-tzwny25vqicq',
          ),
        ),
        1 => 
        array (
          'name' => 'ExMethod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求方法',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GET',
          ),
        ),
        2 => 
        array (
          'name' => 'ExUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求URL',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '/api/v1/channel',
          ),
        ),
        3 => 
        array (
          'name' => 'ExBody',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求体（注：保留使用）',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{}',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '19E91C1D-9BD0-468F-A7DA-915263C6689F',
              ),
              'Result' => 
              array (
                'description' => '返回可转换成JSON的字符串',
                'type' => 'string',
                'example' => '{}',
              ),
              'Success' => 
              array (
                'description' => '返回状态',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '返回代码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'DynamicMessage' => 
              array (
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'An error in the monitoring service has occurred.',
              ),
              'DynamicCode' => 
              array (
                'description' => '错误代码',
                'type' => 'string',
                'example' => 'ExplorerException',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"19E91C1D-9BD0-468F-A7DA-915263C6689F\\",\\n  \\"Result\\": \\"{}\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"DynamicMessage\\": \\"An error in the monitoring service has occurred.\\",\\n  \\"DynamicCode\\": \\"ExplorerException\\"\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricExplorerResponse>\\r\\n    <RequestId>AB2560A0-EF98-462D-B9BA-D422206B94B3</RequestId>\\r\\n    <ErrorCode>200</ErrorCode>\\r\\n    <Success>true</Success>\\r\\n    <Result>{}</Result>\\r\\n</DescribeFabricExplorerResponse>","errorExample":""}]',
      'title' => '浏览Fabric账本相关的信息',
      'summary' => '来浏览Fabric账本相关的信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricConsortiumConfig' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '“创建联盟”的参数可选值。',
                'type' => 'object',
                'properties' => 
                array (
                  'ChannelPolicy' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '创建通道策略。',
                      'type' => 'string',
                      'example' => '[ "Any" ]',
                    ),
                  ),
                  'OrdererType' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'Orderer类型。',
                      'type' => 'string',
                      'example' => '[ "Solo", "Kafka", "etcdraft"]',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"ChannelPolicy\\": [\\n      \\"[ \\\\\\"Any\\\\\\" ]\\"\\n    ],\\n    \\"OrdererType\\": [\\n      \\"[ \\\\\\"Solo\\\\\\", \\\\\\"Kafka\\\\\\", \\\\\\"etcdraft\\\\\\"]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricConsortiumConfigResponse>\\n    <Result>\\n        <OrdererType>Solo</OrdererType>\\n        <OrdererType>Kafka</OrdererType>\\n        <OrdererType>etcdraft</OrdererType>\\n        <ChannelPolicy>Any</ChannelPolicy>\\n    </Result>\\n    <RequestId>1D606B42-57BD-486E-8CAB-E184A1C37E57</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n</DescribeFabricConsortiumConfigResponse>","errorExample":""}]',
      'title' => '获取“创建联盟”的参数可选值',
      'summary' => '调用DescribeFabricConsortiumConfig获取“创建联盟”的参数可选值。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricConsortiumSpecs' => 
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
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '联盟的规格列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'SpecName' => 
                    array (
                      'description' => '规格名',
                      'type' => 'string',
                      'example' => 'basic',
                    ),
                    'SpecTitle' => 
                    array (
                      'description' => '标题',
                      'type' => 'string',
                      'example' => '基础版',
                    ),
                    'Enable' => 
                    array (
                      'description' => '是否启用',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"SpecName\\": \\"basic\\",\\n      \\"SpecTitle\\": \\"基础版\\",\\n      \\"Enable\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricConsortiumSpecsResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <SpecName>basic</SpecName>\\n        <SpecTitle>基础版</SpecTitle>\\n        <Enable>true</Enable>\\n    </Result>\\n</DescribeFabricConsortiumSpecsResponse>","errorExample":""}]',
      'title' => '查询联盟的规格列表',
      'summary' => '调用DescribeFabricConsortiumSpecs查询联盟的规格列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricConsortiumOrderers' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'consortium-aaaaaa-akpcsjjac2jd	',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实例所在的位置信息，和RegionId一致',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '联盟的Orderer列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Domain' => 
                    array (
                      'description' => '域名',
                      'type' => 'string',
                      'example' => 'domain',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '1544411108000',
                    ),
                    'OrdererName' => 
                    array (
                      'description' => 'Orderer名称',
                      'type' => 'string',
                      'example' => 'order1',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '1544411108000',
                    ),
                    'Port' => 
                    array (
                      'description' => '端口',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '7050',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => '实例类型',
                      'type' => 'string',
                      'example' => 'ecs.n1.small',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Domain\\": \\"domain\\",\\n      \\"UpdateTime\\": \\"1544411108000\\",\\n      \\"OrdererName\\": \\"order1\\",\\n      \\"CreateTime\\": \\"1544411108000\\",\\n      \\"Port\\": 7050,\\n      \\"InstanceType\\": \\"ecs.n1.small\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricConsortiumOrderersResponse>\\r\\n<Result>\\r\\n\\t\\t<OrdererName>order1</OrdererName>\\r\\n\\t\\t<Port>7050</Port>\\r\\n\\t\\t<Domain>ordasdaerer1.orzxczcZXXweqwxsczxzXcxzxXzg1.alumunum.com</Domain>\\r\\n\\t\\t<CreateTime>2018-07-01 09:00:00</CreateTime>\\r\\n\\t\\t<UpdateTime>2018-07-02 09:00:00</UpdateTime>\\r\\n\\t\\t<InstanceType>ecs.n1.small</InstanceType>\\r\\n\\t</Result>\\r\\n\\t<Result>\\r\\n\\t\\t<OrdererName>order2</OrdererName>\\r\\n\\t\\t<Port>7050</Port>\\r\\n\\t\\t<Domain>orderer2.org1.alumunum.com</Domain>\\r\\n\\t\\t<CreateTime>2018-07-01 09:00:00</CreateTime>\\r\\n\\t\\t<UpdateTime>2018-07-02 09:00:00</UpdateTime>\\r\\n\\t\\t<InstanceType>ecs.n1.small</InstanceType>\\r\\n\\t</Result>\\r\\n\\t<RequestId>98B37CF5-AB0C-423E-8335-81A54899577E</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n</DescribeFabricConsortiumOrderersResponse>","errorExample":""}]',
      'title' => '获取联盟的Orderer列表',
      'summary' => '调用DescribeFabricConsortiumOrderers获取联盟的Orderer列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricInviter' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Code',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '邀请码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '200',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'C445762C-8909-4BD8-A2BD-BB45BF2441D8',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '邀请人信息列表',
                'type' => 'object',
                'properties' => 
                array (
                  'InviterId' => 
                  array (
                    'description' => '邀请者ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3524234',
                  ),
                  'ExpireTime' => 
                  array (
                    'description' => '过期时间',
                    'type' => 'string',
                    'example' => '1544411108000',
                  ),
                  'ConsortiumId' => 
                  array (
                    'description' => '联盟ID',
                    'type' => 'string',
                    'example' => 'consortium-lianmenyumingyi-hc5d1bwl****',
                  ),
                  'ConsortiumName' => 
                  array (
                    'description' => '联盟名称',
                    'type' => 'string',
                    'example' => 'name',
                  ),
                  'InviterName' => 
                  array (
                    'description' => '邀请者',
                    'type' => 'string',
                    'example' => 'name',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C445762C-8909-4BD8-A2BD-BB45BF2441D8\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"InviterId\\": 3524234,\\n    \\"ExpireTime\\": \\"1544411108000\\",\\n    \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwl****\\",\\n    \\"ConsortiumName\\": \\"name\\",\\n    \\"InviterName\\": \\"name\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricInviterResponse>\\r\\n\\t<Result>\\r\\n\\t\\t<ConsortiumId>10000</ConsortiumId>\\r\\n\\t\\t<ExpireTime>1544411108000</ExpireTime>\\r\\n\\t\\t<InviterId>35242340</InviterId>\\r\\n\\t\\t<ConsortiumName>quickstart</ConsortiumName>\\r\\n\\t\\t<InviterName>name</InviterName>\\r\\n\\t</Result>\\r\\n\\t<RequestId>C445762C-8909-4BD8-A2BD-BB45BF2441D8</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n</DescribeFabricInviterResponse>","errorExample":""}]',
      'title' => '获取邀请人信息',
      'summary' => '调用DescribeFabricInviter获取邀请人信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricChannelMembers' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ChannelId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通道ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'chan-channelx-1l1hmckuu****',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '通道的成员列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'WithPeer' => 
                    array (
                      'description' => '是否包含节点',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'AcceptTime' => 
                    array (
                      'description' => '接受时间',
                      'type' => 'string',
                      'example' => '1544411108000',
                    ),
                    'OrganizationDomain' => 
                    array (
                      'description' => '组织域名',
                      'type' => 'string',
                      'example' => 'hello',
                    ),
                    'State' => 
                    array (
                      'description' => '状态',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'InviteTime' => 
                    array (
                      'description' => '邀请时间',
                      'type' => 'string',
                      'example' => '1544411108000',
                    ),
                    'ChannelId' => 
                    array (
                      'description' => '通道ID',
                      'type' => 'string',
                      'example' => 'chan-channelx-1l1hmckuuisxo',
                    ),
                    'OrganizationName' => 
                    array (
                      'description' => '组织名',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'OrganizationDescription' => 
                    array (
                      'description' => '组织描述',
                      'type' => 'string',
                      'example' => 'description',
                    ),
                    'OrganizationId' => 
                    array (
                      'description' => '组织ID',
                      'type' => 'string',
                      'example' => 'peers-aaaaaa1-1oxw31d046jtl',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"WithPeer\\": true,\\n      \\"AcceptTime\\": \\"1544411108000\\",\\n      \\"OrganizationDomain\\": \\"hello\\",\\n      \\"State\\": \\"Running\\",\\n      \\"InviteTime\\": \\"1544411108000\\",\\n      \\"ChannelId\\": \\"chan-channelx-1l1hmckuuisxo\\",\\n      \\"OrganizationName\\": \\"name\\",\\n      \\"OrganizationDescription\\": \\"description\\",\\n      \\"OrganizationId\\": \\"peers-aaaaaa1-1oxw31d046jtl\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricChannelMembersResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <WithPeer>true</WithPeer>\\n        <AcceptTime>1544411108000</AcceptTime>\\n        <OrganizationDomain>hello</OrganizationDomain>\\n        <State>Running</State>\\n        <InviteTime>1544411108000</InviteTime>\\n        <ChannelId>chan-channelx-1l1hmckuuisxo</ChannelId>\\n        <OrganizationName>name</OrganizationName>\\n        <OrganizationDescription>description</OrganizationDescription>\\n        <OrganizationId>peers-aaaaaa1-1oxw31d046jtl</OrganizationId>\\n    </Result>\\n</DescribeFabricChannelMembersResponse>","errorExample":""}]',
      'title' => '查询通道的成员列表',
      'summary' => '调用DescribeFabricChannelMembers查询通道的成员列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricOrganizations' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
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
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'key1',
                ),
                'Value' => 
                array (
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value1',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Result' => 
              array (
                'description' => '组织列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Domain' => 
                    array (
                      'description' => '域名',
                      'type' => 'string',
                      'example' => 'domain',
                    ),
                    'PeerCount' => 
                    array (
                      'description' => '节点数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'State' => 
                    array (
                      'description' => '状态',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'ConsortiumCount' => 
                    array (
                      'description' => '联盟数量',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'SpecName' => 
                    array (
                      'description' => '规格名',
                      'type' => 'string',
                      'example' => 'basic、',
                    ),
                    'OwnerName' => 
                    array (
                      'description' => '创建者',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'OwnerUid' => 
                    array (
                      'description' => '创建者用户ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1232',
                    ),
                    'OwnerBid' => 
                    array (
                      'description' => '创建者业务ID',
                      'type' => 'string',
                      'example' => 'bid',
                    ),
                    'CodeName' => 
                    array (
                      'description' => '域名前缀',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'OrganizationDescription' => 
                    array (
                      'description' => '组织描述',
                      'type' => 'string',
                      'example' => 'desc',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'OrganizationId' => 
                    array (
                      'description' => '组织ID',
                      'type' => 'string',
                      'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
                    ),
                    'RequestId' => 
                    array (
                      'description' => '请求ID',
                      'type' => 'string',
                      'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
                    ),
                    'ZoneId' => 
                    array (
                      'description' => '可用区',
                      'type' => 'string',
                      'example' => 'zone',
                    ),
                    'UserCount' => 
                    array (
                      'description' => '用户数量',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10',
                    ),
                    'OrganizationName' => 
                    array (
                      'description' => '组织名',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'MajorVersion' => 
                    array (
                      'type' => 'string',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键',
                            'type' => 'string',
                            'example' => 'BlockChainOwner',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值',
                            'type' => 'string',
                            'example' => 'DepartmentA',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"ErrorCode\\": 200,\\n  \\"Success\\": true,\\n  \\"Result\\": [\\n    {\\n      \\"Domain\\": \\"domain\\",\\n      \\"PeerCount\\": 3,\\n      \\"State\\": \\"Running\\",\\n      \\"CreateTime\\": \\"1533025590\\",\\n      \\"ConsortiumCount\\": 2,\\n      \\"SpecName\\": \\"basic、\\",\\n      \\"OwnerName\\": \\"name\\",\\n      \\"OwnerUid\\": 1232,\\n      \\"OwnerBid\\": \\"bid\\",\\n      \\"CodeName\\": \\"name\\",\\n      \\"OrganizationDescription\\": \\"desc\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"OrganizationId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\",\\n      \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n      \\"ZoneId\\": \\"zone\\",\\n      \\"UserCount\\": 10,\\n      \\"OrganizationName\\": \\"name\\",\\n      \\"MajorVersion\\": \\"\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"BlockChainOwner\\",\\n          \\"Value\\": \\"DepartmentA\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricOrganizationsResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <ErrorCode>200</ErrorCode>\\n    <Success>true</Success>\\n    <Result>\\n        <Domain>domain</Domain>\\n        <PeerCount>3</PeerCount>\\n        <State>Running</State>\\n        <CreateTime>1533025590</CreateTime>\\n        <ConsortiumCount>2</ConsortiumCount>\\n        <SpecName>basic、</SpecName>\\n        <OwnerName>name</OwnerName>\\n        <OwnerUid>1232</OwnerUid>\\n        <OwnerBid>bid</OwnerBid>\\n        <CodeName>name</CodeName>\\n        <OrganizationDescription>desc</OrganizationDescription>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <OrganizationId>peers-aaaaaa2-1eqnj5o5w9dt3</OrganizationId>\\n        <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n        <ZoneId>zone</ZoneId>\\n        <UserCount>10</UserCount>\\n        <OrganizationName>name</OrganizationName>\\n        <Tags>\\n            <Key>BlockChainOwner</Key>\\n            <Value>DepartmentA</Value>\\n        </Tags>\\n    </Result>\\n</DescribeFabricOrganizationsResponse>","errorExample":""}]',
      'title' => 'DescribeFabricOrganizations',
      'summary' => '调用DescribeFabricOrganizations获取组织列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricCandidateOrganizations' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ServiceState' => 
                    array (
                      'description' => '服务状态',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'OrganizationName' => 
                    array (
                      'description' => '组织名',
                      'type' => 'string',
                      'example' => 'org1',
                    ),
                    'ClusterState' => 
                    array (
                      'description' => '集群状态',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'OrganizationId' => 
                    array (
                      'description' => '组织ID',
                      'type' => 'string',
                      'example' => 'peers-1oxw31d04****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"ServiceState\\": \\"Running\\",\\n      \\"OrganizationName\\": \\"org1\\",\\n      \\"ClusterState\\": \\"Running\\",\\n      \\"OrganizationId\\": \\"peers-1oxw31d04****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricCandidateOrganizationsResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <ServiceState>Running</ServiceState>\\n        <OrganizationName>org1</OrganizationName>\\n        <ClusterState>Running</ClusterState>\\n        <OrganizationId>peers-1oxw31d04****</OrganizationId>\\n    </Result>\\n</DescribeFabricCandidateOrganizationsResponse>","errorExample":""}]',
      'title' => '查询接收邀请的候选组织',
      'summary' => '调用DescribeFabricCandidateOrganizations查询接收邀请的候选组织。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricChaincodeUploadPolicy' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa1-1oxw31d04****',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Signature' => 
                  array (
                    'description' => 'OSS签名',
                    'type' => 'string',
                    'example' => 'signature',
                  ),
                  'Host' => 
                  array (
                    'description' => 'OSS域名',
                    'type' => 'string',
                    'example' => 'https://chaincode.oss-cn-beijing.aliyuncs.com',
                  ),
                  'Policy' => 
                  array (
                    'description' => 'OSS安全策略',
                    'type' => 'string',
                    'example' => 'eyJleHBpcmF0aW9uIjoiMjAxOC0wNy0zMVQwODoyNjozMC40NzdaIiwiY29uZGl',
                  ),
                  'Dir' => 
                  array (
                    'description' => '上传目录',
                    'type' => 'string',
                    'example' => 'test3/4bd1de21-2fff-4405-a8e9-f864c4bee24f',
                  ),
                  'AccessId' => 
                  array (
                    'description' => '访问OSS的ID',
                    'type' => 'string',
                    'example' => 'accessId',
                  ),
                  'Expire' => 
                  array (
                    'description' => '过期时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1533025590',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Signature\\": \\"signature\\",\\n    \\"Host\\": \\"https://chaincode.oss-cn-beijing.aliyuncs.com\\",\\n    \\"Policy\\": \\"eyJleHBpcmF0aW9uIjoiMjAxOC0wNy0zMVQwODoyNjozMC40NzdaIiwiY29uZGl\\",\\n    \\"Dir\\": \\"test3/4bd1de21-2fff-4405-a8e9-f864c4bee24f\\",\\n    \\"AccessId\\": \\"accessId\\",\\n    \\"Expire\\": 1533025590\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricChaincodeUploadPolicyResponse>\\r\\n\\t<Result>\\r\\n\\t\\t<Dir>t/4bd1de21-2fff-4</Dir>\\r\\n\\t\\t<Host>https://oss.aliyuncs.com</Host>\\r\\n\\t\\t<Policy>eyJleHBpcmF0aW9uIjoiMjAxOC0wNy0zMVQwODoyNjozMC40NzdaIiwiY29uZGl0aW9ucyI6W1siY29udGVudC1sZW5ndGgtcmFuZ2UiLDAsMTA0ODU3NjAwMF0sWyJzdGFydHMtd2l0aCIsIiRrZXkiLCJ0ZXN0My80YmQxZGUyMS0yZmZmLTQ0MDUtYThlOS1mODY0YzRiZWUyNGYiXV19</Policy>\\r\\n\\t\\t<Expire>1533025590</Expire>\\r\\n\\t\\t<AccessId>accessId</AccessId>\\r\\n\\t\\t<Signature>klI/signature=</Signature>\\r\\n\\t</Result>\\r\\n\\t<RequestId>540BFE13-BDE5-40B9-BCDD-F2E24B6D064F</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n</DescribeFabricChaincodeUploadPolicyResponse>","errorExample":""}]',
      'title' => '获取上传链码策略',
      'summary' => '调用DescribeFabricChaincodeUploadPolicy获取上传链码策略。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricOrganizationChaincodes' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w****',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置信息',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '组织的链码列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '结果数据',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EndorsePolicy' => 
                    array (
                      'description' => '背书策略',
                      'type' => 'string',
                      'example' => 'OR (&#39;perf9141MSP.member&#39;)',
                    ),
                    'State' => 
                    array (
                      'description' => '状态。取值：

- **CHECKING**
- **ERROR**
- **INSTALLABLE**
- **INSTALLED**
- **RUNNING**
- **UPGRADABLE**',
                      'type' => 'string',
                      'example' => 'RUNNING',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'ChaincodeId' => 
                    array (
                      'description' => '链码ID',
                      'type' => 'string',
                      'example' => 'code-sacc-1pr09q7jmo0np',
                    ),
                    'Message' => 
                    array (
                      'description' => '消息',
                      'type' => 'string',
                      'example' => 'OK',
                    ),
                    'ChaincodeName' => 
                    array (
                      'description' => '链码名',
                      'type' => 'string',
                      'example' => 'mycc',
                    ),
                    'Installed' => 
                    array (
                      'description' => '是否安装',
                      'type' => 'string',
                      'example' => 'Installed',
                    ),
                    'Creator' => 
                    array (
                      'description' => '创建者',
                      'type' => 'string',
                      'example' => 'uid-23425',
                    ),
                    'DeployTime' => 
                    array (
                      'description' => '部署时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'ChaincodeVersion' => 
                    array (
                      'description' => '链码版本',
                      'type' => 'string',
                      'example' => '0.3',
                    ),
                    'ConsortiumId' => 
                    array (
                      'description' => '联盟ID',
                      'type' => 'string',
                      'example' => 'consortium-lianmenyumingyi-hc5d1bwlulg7',
                    ),
                    'ChannelName' => 
                    array (
                      'description' => '通道名',
                      'type' => 'string',
                      'example' => 'first-channel',
                    ),
                    'ChannelId' => 
                    array (
                      'description' => '通道ID',
                      'type' => 'string',
                      'example' => 'chan-first-channel-31hlgpen5k5lig',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"EndorsePolicy\\": \\"OR (&#39;perf9141MSP.member&#39;)\\",\\n      \\"State\\": \\"RUNNING\\",\\n      \\"CreateTime\\": \\"1533025590\\",\\n      \\"ChaincodeId\\": \\"code-sacc-1pr09q7jmo0np\\",\\n      \\"Message\\": \\"OK\\",\\n      \\"ChaincodeName\\": \\"mycc\\",\\n      \\"Installed\\": \\"Installed\\",\\n      \\"Creator\\": \\"uid-23425\\",\\n      \\"DeployTime\\": \\"1533025590\\",\\n      \\"ChaincodeVersion\\": \\"0.3\\",\\n      \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwlulg7\\",\\n      \\"ChannelName\\": \\"first-channel\\",\\n      \\"ChannelId\\": \\"chan-first-channel-31hlgpen5k5lig\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricOrganizationChaincodesResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <EndorsePolicy>OR (&amp;#39;perf9141MSP.member&amp;#39;)</EndorsePolicy>\\n        <State>RUNNING</State>\\n        <CreateTime>1533025590</CreateTime>\\n        <ChaincodeId>code-sacc-1pr09q7jmo0np</ChaincodeId>\\n        <Message>OK</Message>\\n        <ChaincodeName>mycc</ChaincodeName>\\n        <Installed>Installed</Installed>\\n        <Creator>uid-23425</Creator>\\n        <DeployTime>1533025590</DeployTime>\\n        <ChaincodeVersion>0.3</ChaincodeVersion>\\n        <ConsortiumId>consortium-lianmenyumingyi-hc5d1bwlulg7</ConsortiumId>\\n        <ChannelName>first-channel</ChannelName>\\n        <ChannelId>chan-first-channel-31hlgpen5k5lig</ChannelId>\\n    </Result>\\n</DescribeFabricOrganizationChaincodesResponse>","errorExample":""}]',
      'title' => '获取组织的链码列表',
      'summary' => '调用DescribeFabricOrganizationChaincodes获取组织的链码列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricConsortiumMembers' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'consortium-lianmenyumingyi-hc5d1bwl****',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '联盟的组织信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Domain' => 
                    array (
                      'description' => '域名',
                      'type' => 'string',
                      'example' => 'domain',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述',
                      'type' => 'string',
                      'example' => 'description',
                    ),
                    'ConsortiumId' => 
                    array (
                      'description' => '联盟ID',
                      'type' => 'string',
                      'example' => 'consortium-lianmenyumingyi-hc5d1bwlulg7',
                    ),
                    'OrganizationName' => 
                    array (
                      'description' => '组织名',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'JoinedTime' => 
                    array (
                      'description' => '加入联盟的时间',
                      'type' => 'string',
                      'example' => '1544411108000',
                    ),
                    'OrganizationId' => 
                    array (
                      'description' => '组织ID',
                      'type' => 'string',
                      'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Domain\\": \\"domain\\",\\n      \\"Description\\": \\"description\\",\\n      \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwlulg7\\",\\n      \\"OrganizationName\\": \\"name\\",\\n      \\"JoinedTime\\": \\"1544411108000\\",\\n      \\"OrganizationId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricConsortiumMembersResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <Domain>domain</Domain>\\n        <Description>description</Description>\\n        <ConsortiumId>consortium-lianmenyumingyi-hc5d1bwlulg7</ConsortiumId>\\n        <OrganizationName>name</OrganizationName>\\n        <JoinedTime>1544411108000</JoinedTime>\\n        <OrganizationId>peers-aaaaaa2-1eqnj5o5w9dt3</OrganizationId>\\n    </Result>\\n</DescribeFabricConsortiumMembersResponse>","errorExample":""}]',
      'title' => '获取联盟的组织信息',
      'summary' => '调用DescribeFabricConsortiumMembers获取联盟的组织信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricConsortiumAdminStatus' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '联盟管理状态信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ConsortiumId' => 
                    array (
                      'description' => '联盟ID',
                      'type' => 'string',
                      'example' => 'consortium-lianmenyumingyi-hc5d1bwlulg7',
                    ),
                    'ConsortiumAdministrator' => 
                    array (
                      'description' => '是否为盟主',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwlulg7\\",\\n      \\"ConsortiumAdministrator\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricConsortiumAdminStatusResponse>\\r\\n\\t<Result>\\r\\n\\t\\t<ConsortiumId>10000</ConsortiumId>\\r\\n\\t\\t<ConsortiumAdministrator>true</ConsortiumAdministrator>\\r\\n\\t</Result>\\r\\n\\t<Result>\\r\\n\\t\\t<ConsortiumId>10001</ConsortiumId>\\r\\n\\t\\t<ConsortiumAdministrator>false</ConsortiumAdministrator>\\r\\n\\t</Result>\\r\\n\\t<RequestId>3E85A941-658C-40E8-9704-60513A0281CF</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n</DescribeFabricConsortiumAdminStatusResponse>","errorExample":""}]',
      'title' => '获取联盟管理状态信息',
      'summary' => '调用DescribeFabricConsortiumAdminStatus获取联盟管理状态信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricOrganizationPeers' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w****',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '组织的节点列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'Domain' => 
                    array (
                      'description' => '域名',
                      'type' => 'string',
                      'example' => 'domain',
                    ),
                    'InternetIp' => 
                    array (
                      'description' => '公网IP',
                      'type' => 'string',
                      'example' => '10.0.0.2',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'IsAnchor' => 
                    array (
                      'description' => '是否是AnchorPeer',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'InstanceType' => 
                    array (
                      'description' => '实例类型',
                      'type' => 'string',
                      'example' => 'basic',
                    ),
                    'Port' => 
                    array (
                      'description' => '端口',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1234',
                    ),
                    'OrganizationPeerName' => 
                    array (
                      'description' => '组织的节点名',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'IntranetIp' => 
                    array (
                      'description' => '内网IP',
                      'type' => 'string',
                      'example' => '10.0.0.2',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"UpdateTime\\": \\"1533025590\\",\\n      \\"Domain\\": \\"domain\\",\\n      \\"InternetIp\\": \\"10.0.0.2\\",\\n      \\"CreateTime\\": \\"1533025590\\",\\n      \\"IsAnchor\\": false,\\n      \\"InstanceType\\": \\"basic\\",\\n      \\"Port\\": 1234,\\n      \\"OrganizationPeerName\\": \\"name\\",\\n      \\"IntranetIp\\": \\"10.0.0.2\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricOrganizationPeersResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <UpdateTime>1533025590</UpdateTime>\\n        <Domain>domain</Domain>\\n        <InternetIp>10.0.0.2</InternetIp>\\n        <CreateTime>1533025590</CreateTime>\\n        <IsAnchor>false</IsAnchor>\\n        <InstanceType>basic</InstanceType>\\n        <Port>1234</Port>\\n        <OrganizationPeerName>name</OrganizationPeerName>\\n        <IntranetIp>10.0.0.2</IntranetIp>\\n    </Result>\\n</DescribeFabricOrganizationPeersResponse>","errorExample":""}]',
      'title' => '获取组织的节点列表',
      'summary' => '调用DescribeFabricOrganizationPeers获取组织的节点列表。',
    ),
    'DescribeFabricConsortiumMemberApproval' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ConsortiumId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'consortium-lianmenyumingyi-hc5d1bwl****',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ConsortiumId' => 
                    array (
                      'description' => '联盟ID',
                      'type' => 'string',
                      'example' => 'consortium-lianmenyumingyi-hc5d1bwl****',
                    ),
                    'State' => 
                    array (
                      'description' => '状态',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'ChannelCreatePolicy' => 
                    array (
                      'description' => '通道创建策略',
                      'type' => 'string',
                      'example' => 'Any',
                    ),
                    'ConfirmTime' => 
                    array (
                      'description' => '确认时间',
                      'type' => 'string',
                      'example' => '1544411108000',
                    ),
                    'OrganizationName' => 
                    array (
                      'description' => '组织名称',
                      'type' => 'string',
                      'example' => 'orgname',
                    ),
                    'ConsortiumName' => 
                    array (
                      'description' => '联盟名称',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'DomainName' => 
                    array (
                      'description' => '域名',
                      'type' => 'string',
                      'example' => 'domain',
                    ),
                    'OrganizationId' => 
                    array (
                      'description' => '组织ID',
                      'type' => 'string',
                      'example' => 'peers-aaaaaa2-1eqnj5o5w****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwl****\\",\\n      \\"State\\": \\"Running\\",\\n      \\"ChannelCreatePolicy\\": \\"Any\\",\\n      \\"ConfirmTime\\": \\"1544411108000\\",\\n      \\"OrganizationName\\": \\"orgname\\",\\n      \\"ConsortiumName\\": \\"name\\",\\n      \\"DomainName\\": \\"domain\\",\\n      \\"OrganizationId\\": \\"peers-aaaaaa2-1eqnj5o5w****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricConsortiumMemberApprovalResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <ConsortiumId>consortium-lianmenyumingyi-hc5d1bwl****</ConsortiumId>\\n        <State>Running</State>\\n        <ChannelCreatePolicy>Any</ChannelCreatePolicy>\\n        <ConfirmTime>1544411108000</ConfirmTime>\\n        <OrganizationName>orgname</OrganizationName>\\n        <ConsortiumName>name</ConsortiumName>\\n        <DomainName>domain</DomainName>\\n        <OrganizationId>peers-aaaaaa2-1eqnj5o5w****</OrganizationId>\\n    </Result>\\n</DescribeFabricConsortiumMemberApprovalResponse>","errorExample":""}]',
      'title' => '获取联盟成员的审批状态列表',
      'summary' => '调用DescribeFabricConsortiumMemberApproval获取联盟成员的审批状态列表。',
    ),
    'DescribeFabricOrganizationDeletable' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w****',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置信息',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Deletable' => 
                  array (
                    'description' => '是否可删除',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Domain' => 
                  array (
                    'description' => '域名',
                    'type' => 'string',
                    'example' => 'domain',
                  ),
                  'State' => 
                  array (
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'ZoneId' => 
                  array (
                    'description' => '可用区',
                    'type' => 'string',
                    'example' => 'zone',
                  ),
                  'OrganizationName' => 
                  array (
                    'description' => '组织名',
                    'type' => 'string',
                    'example' => 'orgname',
                  ),
                  'CodeName' => 
                  array (
                    'description' => '域名前缀',
                    'type' => 'string',
                    'example' => 'name',
                  ),
                  'OrganizationDescription' => 
                  array (
                    'description' => '组织描述',
                    'type' => 'string',
                    'example' => 'desc',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '地域',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'OrganizationId' => 
                  array (
                    'description' => '组织ID',
                    'type' => 'string',
                    'example' => 'peers-aaaaaa2-1eqnj5o5w****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Deletable\\": true,\\n    \\"Domain\\": \\"domain\\",\\n    \\"State\\": \\"Running\\",\\n    \\"ZoneId\\": \\"zone\\",\\n    \\"OrganizationName\\": \\"orgname\\",\\n    \\"CodeName\\": \\"name\\",\\n    \\"OrganizationDescription\\": \\"desc\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"OrganizationId\\": \\"peers-aaaaaa2-1eqnj5o5w****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricOrganizationDeletableResponse>\\r\\n\\t<Result>\\r\\n\\t\\t<Deletable>true</Deletable>\\r\\n\\t\\t<OrganizationId>consortium-xxxxxx</OrganizationId>\\r\\n\\t\\t<CodeName>name</CodeName>\\r\\n\\t\\t<Domain>domain</Domain>\\r\\n\\t\\t<OrganizationDescription>desc</OrganizationDescription>\\r\\n\\t\\t<OrganizationName>orgname</OrganizationName>\\r\\n\\t\\t<RegionId>cn-hangzhou</RegionId>\\r\\n\\t\\t<State>Running</State>\\r\\n\\t\\t<ZoneId>zone</ZoneId>\\r\\n\\t</Result>\\r\\n\\t<RequestId>C445762C-8909-4BD8-A2BD-BB45BF2441D8</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n</DescribeFabricOrganizationDeletableResponse>","errorExample":""}]',
      'title' => '查询组织是否可删除',
      'summary' => '调用DescribeFabricOrganizationDeletable查询组织是否可删除。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricConsortiums' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => false,
            'example' => 'consortium-lianmenyumingyi-hc5d1bwl****',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
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
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'key1',
                ),
                'Value' => 
                array (
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value1',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Result' => 
              array (
                'description' => '联盟列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ChannelCount' => 
                    array (
                      'description' => '通道数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'Domain' => 
                    array (
                      'description' => '域名',
                      'type' => 'string',
                      'example' => 'domain',
                    ),
                    'State' => 
                    array (
                      'description' => '状态

- Pending - 等待创建中
- Initial - 创建中
- Aborted - 创建失败
- Created - 创建成功
- Purging - 释放中
- Damaged - 释放失败
- Deleted - 已经释放
- SpecChangPending - 等待规格变配中
- SpecChanging - 规格变配中
- Inactive - 暂停中
- ServiceNotActivated - 云服务集成没有激活',
                      'type' => 'string',
                      'example' => 'Pending',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '1544411108000',
                    ),
                    'SpecName' => 
                    array (
                      'description' => '联盟节点规格',
                      'type' => 'string',
                      'example' => 'basic',
                    ),
                    'SupportChannelConfig' => 
                    array (
                      'description' => '是否支持自定义配置参数',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'OwnerName' => 
                    array (
                      'description' => '创建者',
                      'type' => 'string',
                      'example' => 'uid-125566',
                    ),
                    'OwnerUid' => 
                    array (
                      'description' => '创建者用户ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '12042815',
                    ),
                    'OwnerBid' => 
                    array (
                      'description' => '创建者业务ID',
                      'type' => 'string',
                      'example' => '26842',
                    ),
                    'CodeName' => 
                    array (
                      'description' => '域名前缀',
                      'type' => 'string',
                      'example' => 'code',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'ChannelPolicy' => 
                    array (
                      'description' => '通道创建策略',
                      'type' => 'string',
                      'example' => 'Any',
                    ),
                    'RequestId' => 
                    array (
                      'description' => '请求ID',
                      'type' => 'string',
                      'example' => '3A929FAC-A82D-4EAB-A0FF-D867426D8B23',
                    ),
                    'ConsortiumId' => 
                    array (
                      'description' => '联盟ID',
                      'type' => 'string',
                      'example' => 'consortium-lianmenyumingyi-hc5d1bwl****',
                    ),
                    'ExpiredTime' => 
                    array (
                      'description' => '付费到期时间',
                      'type' => 'string',
                      'example' => '1544411108000',
                    ),
                    'OrganizationCount' => 
                    array (
                      'description' => '组织数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'ConsortiumName' => 
                    array (
                      'description' => '联盟名',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'MajorVersion' => 
                    array (
                      'type' => 'string',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键',
                            'type' => 'string',
                            'example' => 'app',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值',
                            'type' => 'string',
                            'example' => 'nat_internet',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"ErrorCode\\": 200,\\n  \\"Success\\": true,\\n  \\"Result\\": [\\n    {\\n      \\"ChannelCount\\": 2,\\n      \\"Domain\\": \\"domain\\",\\n      \\"State\\": \\"Pending\\",\\n      \\"CreateTime\\": \\"1544411108000\\",\\n      \\"SpecName\\": \\"basic\\",\\n      \\"SupportChannelConfig\\": true,\\n      \\"OwnerName\\": \\"uid-125566\\",\\n      \\"OwnerUid\\": 12042815,\\n      \\"OwnerBid\\": \\"26842\\",\\n      \\"CodeName\\": \\"code\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"ChannelPolicy\\": \\"Any\\",\\n      \\"RequestId\\": \\"3A929FAC-A82D-4EAB-A0FF-D867426D8B23\\",\\n      \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwl****\\",\\n      \\"ExpiredTime\\": \\"1544411108000\\",\\n      \\"OrganizationCount\\": 2,\\n      \\"ConsortiumName\\": \\"name\\",\\n      \\"MajorVersion\\": \\"\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"app\\",\\n          \\"Value\\": \\"nat_internet\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricConsortiumsResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <ErrorCode>200</ErrorCode>\\n    <Success>true</Success>\\n    <Result>\\n        <ChannelCount>2</ChannelCount>\\n        <Domain>domain</Domain>\\n        <State>Pending</State>\\n        <CreateTime>1544411108000</CreateTime>\\n        <SpecName>basic</SpecName>\\n        <SupportChannelConfig>true</SupportChannelConfig>\\n        <OwnerName>uid-125566</OwnerName>\\n        <OwnerUid>12042815</OwnerUid>\\n        <OwnerBid>26842</OwnerBid>\\n        <CodeName>code</CodeName>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <ChannelPolicy>Any</ChannelPolicy>\\n        <RequestId>3A929FAC-A82D-4EAB-A0FF-D867426D8B23</RequestId>\\n        <ConsortiumId>consortium-lianmenyumingyi-hc5d1bwl****</ConsortiumId>\\n        <ExpiredTime>1544411108000</ExpiredTime>\\n        <OrganizationCount>2</OrganizationCount>\\n        <ConsortiumName>name</ConsortiumName>\\n        <Tags>\\n            <Key>app</Key>\\n            <Value>nat_internet</Value>\\n        </Tags>\\n    </Result>\\n</DescribeFabricConsortiumsResponse>","errorExample":""}]',
      'title' => 'DescribeFabricConsortiums',
      'summary' => '调用DescribeFabricConsortiums获取联盟列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricConsortiumDeletable' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ConsortiumId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'consortium-lianmenyumingyi-hc5d1bwl****',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Deletable' => 
                  array (
                    'description' => '是否可删除',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Domain' => 
                  array (
                    'description' => '域名',
                    'type' => 'string',
                    'example' => 'domain',
                  ),
                  'Description' => 
                  array (
                    'description' => '描述',
                    'type' => 'string',
                    'example' => 'description',
                  ),
                  'ConsortiumId' => 
                  array (
                    'description' => '联盟ID',
                    'type' => 'string',
                    'example' => 'consortium-lianmenyumingyi-hc5d1bwl****',
                  ),
                  'State' => 
                  array (
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'ZoneId' => 
                  array (
                    'description' => '可用区',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'CodeName' => 
                  array (
                    'description' => '域名前缀',
                    'type' => 'string',
                    'example' => 'codename',
                  ),
                  'ConsortiumName' => 
                  array (
                    'description' => '联盟名称',
                    'type' => 'string',
                    'example' => 'myconsortium',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '地域',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Deletable\\": true,\\n    \\"Domain\\": \\"domain\\",\\n    \\"Description\\": \\"description\\",\\n    \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwl****\\",\\n    \\"State\\": \\"Running\\",\\n    \\"ZoneId\\": \\"cn-hangzhou\\",\\n    \\"CodeName\\": \\"codename\\",\\n    \\"ConsortiumName\\": \\"myconsortium\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricConsortiumDeletableResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <Deletable>true</Deletable>\\n        <Domain>domain</Domain>\\n        <Description>description</Description>\\n        <ConsortiumId>consortium-lianmenyumingyi-hc5d1bwl****</ConsortiumId>\\n        <State>Running</State>\\n        <ZoneId>cn-hangzhou</ZoneId>\\n        <CodeName>codename</CodeName>\\n        <ConsortiumName>myconsortium</ConsortiumName>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </Result>\\n</DescribeFabricConsortiumDeletableResponse>","errorExample":""}]',
      'title' => '查询联盟是否可删除',
      'summary' => '调用DescribeFabricConsortiumDeletable查询联盟是否可删除。',
    ),
    'DescribeFabricConsortiumChaincodes' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'consortium-lianmenyumingyi-hc5d1bwlulg7',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '联盟的链码列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '类型',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'EndorsePolicy' => 
                    array (
                      'description' => '背书策略',
                      'type' => 'string',
                      'example' => 'OR (\'aaaaaa1MSP.peer\')',
                    ),
                    'State' => 
                    array (
                      'description' => '状态',
                      'type' => 'string',
                      'example' => 'Instantiatable',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '1544411108000',
                    ),
                    'ChaincodeId' => 
                    array (
                      'description' => '链码ID',
                      'type' => 'string',
                      'example' => 'code-sacc-1pr09q7jmo0np',
                    ),
                    'ProviderName' => 
                    array (
                      'description' => '链码上传者名称',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'Message' => 
                    array (
                      'description' => '消息',
                      'type' => 'string',
                      'example' => 'ok',
                    ),
                    'ChaincodeName' => 
                    array (
                      'description' => '链码名称',
                      'type' => 'string',
                      'example' => 'sacc',
                    ),
                    'Install' => 
                    array (
                      'description' => '是否安装',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Input' => 
                    array (
                      'description' => '链码输入',
                      'type' => 'string',
                      'example' => 'input',
                    ),
                    'ProviderId' => 
                    array (
                      'description' => '链码上传者ID',
                      'type' => 'string',
                      'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
                    ),
                    'DeployTime' => 
                    array (
                      'description' => '部署时间',
                      'type' => 'string',
                      'example' => '1544411108000',
                    ),
                    'ChaincodeVersion' => 
                    array (
                      'description' => '链码版本',
                      'type' => 'string',
                      'example' => '1.0',
                    ),
                    'ConsortiumId' => 
                    array (
                      'description' => '联盟ID',
                      'type' => 'string',
                      'example' => 'consortium-lianmenyumingyi-hc5d1bwlulg7',
                    ),
                    'ChannelName' => 
                    array (
                      'description' => '通道名',
                      'type' => 'string',
                      'example' => 'cname',
                    ),
                    'ChannelId' => 
                    array (
                      'description' => '通道ID',
                      'type' => 'string',
                      'example' => 'chan-channelx-1l1hmckuuisxo',
                    ),
                    'Path' => 
                    array (
                      'description' => '链码路径',
                      'type' => 'string',
                      'example' => 'go-sdk-demo/chaincode/src',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Type\\": 1,\\n      \\"EndorsePolicy\\": \\"OR (\'aaaaaa1MSP.peer\')\\",\\n      \\"State\\": \\"Instantiatable\\",\\n      \\"CreateTime\\": \\"1544411108000\\",\\n      \\"ChaincodeId\\": \\"code-sacc-1pr09q7jmo0np\\",\\n      \\"ProviderName\\": \\"name\\",\\n      \\"Message\\": \\"ok\\",\\n      \\"ChaincodeName\\": \\"sacc\\",\\n      \\"Install\\": true,\\n      \\"Input\\": \\"input\\",\\n      \\"ProviderId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\",\\n      \\"DeployTime\\": \\"1544411108000\\",\\n      \\"ChaincodeVersion\\": \\"1.0\\",\\n      \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwlulg7\\",\\n      \\"ChannelName\\": \\"cname\\",\\n      \\"ChannelId\\": \\"chan-channelx-1l1hmckuuisxo\\",\\n      \\"Path\\": \\"go-sdk-demo/chaincode/src\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricConsortiumChaincodesResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <Type>1</Type>\\n        <EndorsePolicy>OR (\'aaaaaa1MSP.peer\')</EndorsePolicy>\\n        <State>Instantiatable</State>\\n        <CreateTime>1544411108000</CreateTime>\\n        <ChaincodeId>code-sacc-1pr09q7jmo0np</ChaincodeId>\\n        <ProviderName>name</ProviderName>\\n        <Message>ok</Message>\\n        <ChaincodeName>sacc</ChaincodeName>\\n        <Install>true</Install>\\n        <Input>input</Input>\\n        <ProviderId>peers-aaaaaa2-1eqnj5o5w9dt3</ProviderId>\\n        <DeployTime>1544411108000</DeployTime>\\n        <ChaincodeVersion>1.0</ChaincodeVersion>\\n        <ConsortiumId>consortium-lianmenyumingyi-hc5d1bwlulg7</ConsortiumId>\\n        <ChannelName>cname</ChannelName>\\n        <ChannelId>chan-channelx-1l1hmckuuisxo</ChannelId>\\n        <Path>go-sdk-demo/chaincode/src</Path>\\n    </Result>\\n</DescribeFabricConsortiumChaincodesResponse>","errorExample":""}]',
      'title' => '获取联盟的链码列表',
      'summary' => '调用DescribeFabricConsortiumChaincodes获取联盟的链码列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricOrganizationMembers' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w****',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置信息',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '200',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Domain' => 
                    array (
                      'description' => 'domain',
                      'type' => 'string',
                      'example' => 'domain',
                    ),
                    'ConsortiumId' => 
                    array (
                      'description' => '联盟ID',
                      'type' => 'string',
                      'example' => 'consortium-lianmenyumingyi-hc5d1bwl****',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述',
                      'type' => 'string',
                      'example' => 'description',
                    ),
                    'State' => 
                    array (
                      'description' => '状态',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'OrganizationName' => 
                    array (
                      'description' => '组织名称',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'JoinedTime' => 
                    array (
                      'description' => '加入联盟的时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'ConsortiumName' => 
                    array (
                      'description' => '联盟名称',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'OrganizationId' => 
                    array (
                      'description' => '组织ID',
                      'type' => 'string',
                      'example' => 'peers-aaaaaa2-1eqnj5o5w****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Domain\\": \\"domain\\",\\n      \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwl****\\",\\n      \\"Description\\": \\"description\\",\\n      \\"State\\": \\"Running\\",\\n      \\"OrganizationName\\": \\"name\\",\\n      \\"JoinedTime\\": \\"1533025590\\",\\n      \\"ConsortiumName\\": \\"name\\",\\n      \\"OrganizationId\\": \\"peers-aaaaaa2-1eqnj5o5w****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricOrganizationMembersResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <Domain>domain</Domain>\\n        <ConsortiumId>consortium-lianmenyumingyi-hc5d1bwl****</ConsortiumId>\\n        <Description>description</Description>\\n        <State>Running</State>\\n        <OrganizationName>name</OrganizationName>\\n        <JoinedTime>1533025590</JoinedTime>\\n        <ConsortiumName>name</ConsortiumName>\\n        <OrganizationId>peers-aaaaaa2-1eqnj5o5w****</OrganizationId>\\n    </Result>\\n</DescribeFabricOrganizationMembersResponse>","errorExample":""}]',
      'title' => '获取该组织所加入的联盟与联盟成员',
      'summary' => '调用DescribeFabricOrganizationMembers获取该组织所加入的联盟与联盟成员。',
    ),
    'DescribeFabricOrganization' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w****',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
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
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'key1',
                ),
                'Value' => 
                array (
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value1',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Result' => 
              array (
                'description' => '组织的详细列表',
                'type' => 'object',
                'properties' => 
                array (
                  'Domain' => 
                  array (
                    'description' => '域名',
                    'type' => 'string',
                    'example' => 'org1.alibabacloudbaas.com',
                  ),
                  'PeerCount' => 
                  array (
                    'description' => 'Peer节点数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'State' => 
                  array (
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1533025590',
                  ),
                  'ConsortiumCount' => 
                  array (
                    'description' => '联盟数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'SpecName' => 
                  array (
                    'description' => '规格名',
                    'type' => 'string',
                    'example' => 'basic',
                  ),
                  'OwnerName' => 
                  array (
                    'description' => '创建者',
                    'type' => 'string',
                    'example' => 'uid-23434',
                  ),
                  'OwnerUid' => 
                  array (
                    'description' => '创建者Uid',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '23434',
                  ),
                  'OwnerBid' => 
                  array (
                    'description' => '创建者Bid',
                    'type' => 'string',
                    'example' => '2544',
                  ),
                  'CodeName' => 
                  array (
                    'description' => '域名前缀',
                    'type' => 'string',
                    'example' => 'org1',
                  ),
                  'OrganizationDescription' => 
                  array (
                    'description' => '组织描述',
                    'type' => 'string',
                    'example' => 'This is org1',
                  ),
                  'RegionId' => 
                  array (
                    'description' => '地域',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'OrganizationId' => 
                  array (
                    'description' => '组织ID',
                    'type' => 'string',
                    'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
                  ),
                  'MSP' => 
                  array (
                    'description' => '成员服务提供者',
                    'type' => 'string',
                    'example' => 'org1MSP',
                  ),
                  'RequestId' => 
                  array (
                    'description' => '请求ID',
                    'type' => 'string',
                    'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
                  ),
                  'CAUrl' => 
                  array (
                    'description' => '组织CA节点地址',
                    'type' => 'string',
                    'example' => 'https://ca1.org1.alibabacloudbaas.com:31154',
                  ),
                  'CANAME' => 
                  array (
                    'description' => '组织CA节点名称',
                    'type' => 'string',
                    'example' => 'client',
                  ),
                  'ZoneId' => 
                  array (
                    'description' => '可用区',
                    'type' => 'string',
                    'example' => 'cn-hangzhou-1a',
                  ),
                  'UserCount' => 
                  array (
                    'description' => '用户数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'OrganizationName' => 
                  array (
                    'description' => '组织名称',
                    'type' => 'string',
                    'example' => 'org1',
                  ),
                  'Tags' => 
                  array (
                    'description' => '标签列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'description' => '标签键',
                          'type' => 'string',
                          'example' => 'BlockChainOwner',
                        ),
                        'Value' => 
                        array (
                          'description' => '标签值',
                          'type' => 'string',
                          'example' => 'DepartmentA',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"ErrorCode\\": 200,\\n  \\"Success\\": true,\\n  \\"Result\\": {\\n    \\"Domain\\": \\"org1.alibabacloudbaas.com\\",\\n    \\"PeerCount\\": 2,\\n    \\"State\\": \\"Running\\",\\n    \\"CreateTime\\": \\"1533025590\\",\\n    \\"ConsortiumCount\\": 2,\\n    \\"SpecName\\": \\"basic\\",\\n    \\"OwnerName\\": \\"uid-23434\\",\\n    \\"OwnerUid\\": 23434,\\n    \\"OwnerBid\\": \\"2544\\",\\n    \\"CodeName\\": \\"org1\\",\\n    \\"OrganizationDescription\\": \\"This is org1\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"OrganizationId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\",\\n    \\"MSP\\": \\"org1MSP\\",\\n    \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n    \\"CAUrl\\": \\"https://ca1.org1.alibabacloudbaas.com:31154\\",\\n    \\"CANAME\\": \\"client\\",\\n    \\"ZoneId\\": \\"cn-hangzhou-1a\\",\\n    \\"UserCount\\": 2,\\n    \\"OrganizationName\\": \\"org1\\",\\n    \\"Tags\\": [\\n      {\\n        \\"Key\\": \\"BlockChainOwner\\",\\n        \\"Value\\": \\"DepartmentA\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricOrganizationResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <ErrorCode>200</ErrorCode>\\n    <Success>true</Success>\\n    <Result>\\n        <Domain>org1.alibabacloudbaas.com</Domain>\\n        <PeerCount>2</PeerCount>\\n        <State>Running</State>\\n        <CreateTime>1533025590</CreateTime>\\n        <ConsortiumCount>2</ConsortiumCount>\\n        <SpecName>basic</SpecName>\\n        <OwnerName>uid-23434</OwnerName>\\n        <OwnerUid>23434</OwnerUid>\\n        <OwnerBid>2544</OwnerBid>\\n        <CodeName>org1</CodeName>\\n        <OrganizationDescription>This is org1</OrganizationDescription>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <OrganizationId>peers-aaaaaa2-1eqnj5o5w9dt3</OrganizationId>\\n        <MSP>org1MSP</MSP>\\n        <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n        <CAUrl>https://ca1.org1.alibabacloudbaas.com:31154</CAUrl>\\n        <CANAME>client</CANAME>\\n        <ZoneId>cn-hangzhou-1a</ZoneId>\\n        <UserCount>2</UserCount>\\n        <OrganizationName>org1</OrganizationName>\\n        <Tags>\\n            <Key>BlockChainOwner</Key>\\n            <Value>DepartmentA</Value>\\n        </Tags>\\n    </Result>\\n</DescribeFabricOrganizationResponse>","errorExample":""}]',
      'title' => 'DescribeFabricOrganization',
      'summary' => '调用DescribeFabricOrganization获取一个组织的详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricConsortiumChannels' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ConsortiumId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'consortium-lianmenyumingyi-hc5d1bwl****',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BatchTimeout' => 
                    array (
                      'description' => '批处理超时时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '1544411108000',
                    ),
                    'ChaincodeCount' => 
                    array (
                      'description' => '链码数量',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'PreferredMaxBytes' => 
                    array (
                      'description' => '首选最大字节数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '102410241',
                    ),
                    'MemberJoinedCount' => 
                    array (
                      'description' => '加入联盟的成员数量',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'State' => 
                    array (
                      'description' => '状态',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '1544411108000',
                    ),
                    'SupportChannelConfig' => 
                    array (
                      'description' => '是否支持自定义配置参数',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'OwnerName' => 
                    array (
                      'description' => '创建者',
                      'type' => 'string',
                      'example' => 'uid-*',
                    ),
                    'OwnerUid' => 
                    array (
                      'description' => '创建者Uid',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '212',
                    ),
                    'OwnerBid' => 
                    array (
                      'description' => '创建者Bid',
                      'type' => 'string',
                      'example' => '26842',
                    ),
                    'MaxMessageCount' => 
                    array (
                      'description' => '块包含最大消息条目',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '200',
                    ),
                    'MemberCount' => 
                    array (
                      'description' => '通道成员数量',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'NeedJoined' => 
                    array (
                      'description' => '是否需要加入',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'RequestId' => 
                    array (
                      'description' => '请求ID',
                      'type' => 'string',
                      'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
                    ),
                    'ConsortiumId' => 
                    array (
                      'description' => '联盟ID',
                      'type' => 'string',
                      'example' => 'consortium-lianmenyumingyi-hc5d1bwl****',
                    ),
                    'ChannelName' => 
                    array (
                      'description' => '通道名称',
                      'type' => 'string',
                      'example' => 'mychammel',
                    ),
                    'DeleteTime' => 
                    array (
                      'description' => '删除时间',
                      'type' => 'string',
                      'example' => '1544411108000',
                    ),
                    'ChannelId' => 
                    array (
                      'description' => '通道ID',
                      'type' => 'string',
                      'example' => 'chan-channelx-1l1hmckuuisxo',
                    ),
                    'ConsortiumChannelId' => 
                    array (
                      'description' => '联盟中通道序列',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'Deleted' => 
                    array (
                      'description' => '是否删除',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ConsortiumName' => 
                    array (
                      'description' => '联盟名称',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'BlockCount' => 
                    array (
                      'description' => '块数量',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"BatchTimeout\\": 2,\\n      \\"UpdateTime\\": \\"1544411108000\\",\\n      \\"ChaincodeCount\\": 2,\\n      \\"PreferredMaxBytes\\": 102410241,\\n      \\"MemberJoinedCount\\": \\"3\\",\\n      \\"State\\": \\"Running\\",\\n      \\"CreateTime\\": \\"1544411108000\\",\\n      \\"SupportChannelConfig\\": true,\\n      \\"OwnerName\\": \\"uid-*\\",\\n      \\"OwnerUid\\": 212,\\n      \\"OwnerBid\\": \\"26842\\",\\n      \\"MaxMessageCount\\": 200,\\n      \\"MemberCount\\": 3,\\n      \\"NeedJoined\\": true,\\n      \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n      \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwl****\\",\\n      \\"ChannelName\\": \\"mychammel\\",\\n      \\"DeleteTime\\": \\"1544411108000\\",\\n      \\"ChannelId\\": \\"chan-channelx-1l1hmckuuisxo\\",\\n      \\"ConsortiumChannelId\\": 1,\\n      \\"Deleted\\": true,\\n      \\"ConsortiumName\\": \\"name\\",\\n      \\"BlockCount\\": 2\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricConsortiumChannelsResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <BatchTimeout>2</BatchTimeout>\\n        <UpdateTime>1544411108000</UpdateTime>\\n        <ChaincodeCount>2</ChaincodeCount>\\n        <PreferredMaxBytes>102410241</PreferredMaxBytes>\\n        <MemberJoinedCount>3</MemberJoinedCount>\\n        <State>Running</State>\\n        <CreateTime>1544411108000</CreateTime>\\n        <SupportChannelConfig>true</SupportChannelConfig>\\n        <OwnerName>uid-*</OwnerName>\\n        <OwnerUid>212</OwnerUid>\\n        <OwnerBid>26842</OwnerBid>\\n        <MaxMessageCount>200</MaxMessageCount>\\n        <MemberCount>3</MemberCount>\\n        <NeedJoined>true</NeedJoined>\\n        <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n        <ConsortiumId>consortium-lianmenyumingyi-hc5d1bwl****</ConsortiumId>\\n        <ChannelName>mychammel</ChannelName>\\n        <DeleteTime>1544411108000</DeleteTime>\\n        <ChannelId>chan-channelx-1l1hmckuuisxo</ChannelId>\\n        <ConsortiumChannelId>1</ConsortiumChannelId>\\n        <Deleted>true</Deleted>\\n        <ConsortiumName>name</ConsortiumName>\\n        <BlockCount>2</BlockCount>\\n    </Result>\\n</DescribeFabricConsortiumChannelsResponse>","errorExample":""}]',
      'title' => '获取联盟的通道列表',
      'summary' => '调用DescribeFabricConsortiumChannels获取联盟的通道列表。',
    ),
    'DescribeFabricOrganizationUsers' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w****',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '组织的用户列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ExpireTime' => 
                    array (
                      'description' => '过期时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'Attrs' => 
                    array (
                      'description' => 'ABAC属性',
                      'type' => 'string',
                      'example' => 'foo=foo1,bar=bar1',
                    ),
                    'CallerBid' => 
                    array (
                      'description' => '调用者业务ID',
                      'type' => 'string',
                      'example' => '26842',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'FullName' => 
                    array (
                      'description' => '全名',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'CallerUid' => 
                    array (
                      'description' => '调用者用户ID',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '84927598****',
                    ),
                    'Username' => 
                    array (
                      'description' => '用户名',
                      'type' => 'string',
                      'example' => 'username',
                    ),
                    'OrganizationId' => 
                    array (
                      'description' => '组织ID',
                      'type' => 'string',
                      'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"ExpireTime\\": \\"1533025590\\",\\n      \\"Attrs\\": \\"foo=foo1,bar=bar1\\",\\n      \\"CallerBid\\": \\"26842\\",\\n      \\"CreateTime\\": \\"1533025590\\",\\n      \\"FullName\\": \\"name\\",\\n      \\"CallerUid\\": 0,\\n      \\"Username\\": \\"username\\",\\n      \\"OrganizationId\\": \\"peers-aaaaaa2-1eqnj5o5w9dt3\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricOrganizationUsersResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <ExpireTime>1533025590</ExpireTime>\\n        <Attrs>foo=foo1,bar=bar1</Attrs>\\n        <CallerBid>26842</CallerBid>\\n        <CreateTime>1533025590</CreateTime>\\n        <FullName>name</FullName>\\n        <Username>username</Username>\\n        <OrganizationId>peers-aaaaaa2-1eqnj5o5w9dt3</OrganizationId>\\n        <RegionId>cn-hangzhou</RegionId>\\n    </Result>\\n</DescribeFabricOrganizationUsersResponse>","errorExample":""}]',
      'title' => '获取组织的用户列表',
      'summary' => '调用DescribeFabricOrganizationUsers获取组织的用户列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricInvitationCode' => 
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
          'name' => 'ConsortiumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'consortium-lianmenyumingyi-hc5d1bwl****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'DynamicMessage' => 
              array (
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'The invitation code could not found.',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '77E25463-56CB-4F1C-8EB6-8ADDFE39EF0F',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'DynamicCode' => 
              array (
                'description' => '错误代码',
                'type' => 'string',
                'example' => 'InvitationCodeNotFound',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'SenderId' => 
                  array (
                    'description' => '发送者ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '26345345',
                  ),
                  'Email' => 
                  array (
                    'description' => '邮箱',
                    'type' => 'string',
                    'example' => 'abc@126.com',
                  ),
                  'SenderBid' => 
                  array (
                    'description' => '发送者Bid',
                    'type' => 'string',
                    'example' => '27534',
                  ),
                  'ExpireTime' => 
                  array (
                    'description' => '过期时间',
                    'type' => 'string',
                    'example' => '1544411108000',
                  ),
                  'ConsortiumId' => 
                  array (
                    'description' => '联盟ID',
                    'type' => 'string',
                    'example' => 'consortium-lianmenyumingyi-hc5d1bwl****',
                  ),
                  'InvitationId' => 
                  array (
                    'description' => '邀请ID',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'SenderName' => 
                  array (
                    'description' => '发送者',
                    'type' => 'string',
                    'example' => 'uid-35324',
                  ),
                  'Code' => 
                  array (
                    'description' => '邀请码',
                    'type' => 'string',
                    'example' => 'code',
                  ),
                  'Url' => 
                  array (
                    'description' => '邀请链接',
                    'type' => 'string',
                    'example' => 'http://baas.console.aliyun.test/invite?code=92e7ef1934892',
                  ),
                  'Accepted' => 
                  array (
                    'description' => '是否接受',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'SendTime' => 
                  array (
                    'description' => '发送时间',
                    'type' => 'string',
                    'example' => '1544411108000',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"DynamicMessage\\": \\"The invitation code could not found.\\",\\n  \\"RequestId\\": \\"77E25463-56CB-4F1C-8EB6-8ADDFE39EF0F\\",\\n  \\"ErrorCode\\": 200,\\n  \\"Success\\": true,\\n  \\"DynamicCode\\": \\"InvitationCodeNotFound\\",\\n  \\"Result\\": {\\n    \\"SenderId\\": 26345345,\\n    \\"Email\\": \\"abc@126.com\\",\\n    \\"SenderBid\\": \\"27534\\",\\n    \\"ExpireTime\\": \\"1544411108000\\",\\n    \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwl****\\",\\n    \\"InvitationId\\": 2,\\n    \\"SenderName\\": \\"uid-35324\\",\\n    \\"Code\\": \\"code\\",\\n    \\"Url\\": \\"http://baas.console.aliyun.test/invite?code=92e7ef1934892\\",\\n    \\"Accepted\\": true,\\n    \\"SendTime\\": \\"1544411108000\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricInvitationCodeResponse>\\n    <DynamicMessage>The invitation code could not found.</DynamicMessage>\\n    <RequestId>77E25463-56CB-4F1C-8EB6-8ADDFE39EF0F</RequestId>\\n    <ErrorCode>200</ErrorCode>\\n    <Success>true</Success>\\n    <DynamicCode>InvitationCodeNotFound</DynamicCode>\\n    <Result>\\n        <SenderId>26345345</SenderId>\\n        <Email>abc@126.com</Email>\\n        <SenderBid>27534</SenderBid>\\n        <ExpireTime>1544411108000</ExpireTime>\\n        <ConsortiumId>consortium-lianmenyumingyi-hc5d1bwl****</ConsortiumId>\\n        <InvitationId>2</InvitationId>\\n        <SenderName>uid-35324</SenderName>\\n        <Code>code</Code>\\n        <Url>http://baas.console.aliyun.test/invite?code=92e7ef1934892</Url>\\n        <Accepted>true</Accepted>\\n        <SendTime>1544411108000</SendTime>\\n    </Result>\\n</DescribeFabricInvitationCodeResponse>","errorExample":""}]',
      'title' => '获取邀请链接',
      'summary' => '调用DescribeFabricInvitationCode获取邀请链接。',
    ),
    'DescribeFabricOrganizationSpecs' => 
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
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '组织的规格列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Title' => 
                    array (
                      'description' => '标题',
                      'type' => 'string',
                      'example' => '基础版',
                    ),
                    'OrganizationSpecsName' => 
                    array (
                      'description' => '规格名',
                      'type' => 'string',
                      'example' => 'basic',
                    ),
                    'Enable' => 
                    array (
                      'description' => '是否启用',
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
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Title\\": \\"基础版\\",\\n      \\"OrganizationSpecsName\\": \\"basic\\",\\n      \\"Enable\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricOrganizationSpecsResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <Title>基础版</Title>\\n        <OrganizationSpecsName>basic</OrganizationSpecsName>\\n        <Enable>true</Enable>\\n    </Result>\\n</DescribeFabricOrganizationSpecsResponse>","errorExample":""}]',
      'title' => '查询组织的规格列表',
      'summary' => '调用DescribeFabricOrganizationSpecs查询组织的规格列表。',
    ),
    'ListTagResources' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '取值"consortium"（联盟）或"organization"（组织）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'organization',
            'enum' => 
            array (
              0 => 'organization',
              1 => 'consortium',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'NextToken，用于查询时提供的查询断点。',
            'type' => 'string',
            'required' => false,
            'example' => 'MWJlMTY4ZmY4MzdmMDQzYmRlMTdjMDMxNDM0MWM4NDI3MTA0N2IzMQo=',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例Id，N取值0,50。不可重复。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例Id，N取值0,50。不可重复。',
              'type' => 'string',
              'required' => false,
              'example' => 'peers-demoinstance-12axcfirtbfkc9d',
            ),
            'required' => false,
            'example' => 'peers-tf000eihjli000shanghai-yqxvj52lruxx',
            'maxItems' => 51,
          ),
        ),
        3 => 
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
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => 'Tag Key值，N取值0,20。结果将同时满足所有Key的限制。不可重复。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'key1',
                ),
                'Value' => 
                array (
                  'description' => 'Tag Value值，N取值0,20，需与Tag Key对应。结果将满足所有Value的限制。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value2',
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
                'description' => 'NextToken，用于查询时提供的查询断点。',
                'type' => 'string',
                'example' => 'MWJlMTY4ZmY4MzdmMDQzYmRlMTdjMDMxNDM0MWM4NDI3MTA0N2IzMQo=',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '21B8738D-254C-4933-9FC1-3C31B2611482',
              ),
              'TagResources' => 
              array (
                'description' => '数组长度最大为20。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagValue' => 
                    array (
                      'description' => '资源Tag Value。',
                      'type' => 'string',
                      'example' => 'value1',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。',
                      'type' => 'string',
                      'example' => 'organization',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'peers-tf000eihjli000shanghai-yqxvj52lruxx',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '资源Tag Key。',
                      'type' => 'string',
                      'example' => 'key1',
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
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.%s',
            'errorMessage' => '%s',
          ),
          2 => 
          array (
            'errorCode' => 'MatchResource.%s',
            'errorMessage' => 'Could\'t match resource [%s]',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidTagsCount.%s',
            'errorMessage' => 'Could\'t insert/update resouce [%s] tag',
          ),
          4 => 
          array (
            'errorCode' => 'ConvertFailed.%s',
            'errorMessage' => 'Could\'t convert parameter [%s]',
          ),
          5 => 
          array (
            'errorCode' => 'ParameterConstraints.%s',
            'errorMessage' => 'Could\'t accept duplicate keys [%s]',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAuthority.%s',
            'errorMessage' => 'Could\'t operate resource [%s]',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => '%s',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"MWJlMTY4ZmY4MzdmMDQzYmRlMTdjMDMxNDM0MWM4NDI3MTA0N2IzMQo=\\",\\n  \\"RequestId\\": \\"21B8738D-254C-4933-9FC1-3C31B2611482\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"TagValue\\": \\"value1\\",\\n      \\"ResourceType\\": \\"organization\\",\\n      \\"ResourceId\\": \\"peers-tf000eihjli000shanghai-yqxvj52lruxx\\",\\n      \\"TagKey\\": \\"key1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>MWJlMTY4ZmY4MzdmMDQzYmRlMTdjMDMxNDM0MWM4NDI3MTA0N2IzMQo=</NextToken>\\n    <RequestId>21B8738D-254C-4933-9FC1-3C31B2611482</RequestId>\\n    <TagResources>\\n        <TagValue>value1</TagValue>\\n        <ResourceType>organization</ResourceType>\\n        <ResourceId>peers-tf000eihjli000shanghai-yqxvj52lruxx</ResourceId>\\n        <TagKey>key1</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => 'ListTagResources',
      'summary' => '获取资源的标记。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFabricOrganizationChannels' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5****',
          ),
        ),
        1 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '组织加入的通道列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'BatchTimeout' => 
                    array (
                      'description' => '批处理超时时间，单位秒',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'ChaincodeCount' => 
                    array (
                      'description' => '链码数量',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'PreferredMaxBytes' => 
                    array (
                      'description' => '首选最大字节数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '24',
                    ),
                    'State' => 
                    array (
                      'description' => '状态',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'SupportChannelConfig' => 
                    array (
                      'description' => '是否支持自定义配置参数',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'OwnerName' => 
                    array (
                      'description' => '创建者',
                      'type' => 'string',
                      'example' => 'uid-116748157028****',
                    ),
                    'OwnerUid' => 
                    array (
                      'description' => '创建者Uid',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '116748157028****',
                    ),
                    'OwnerBid' => 
                    array (
                      'description' => '创建者Bid',
                      'type' => 'string',
                      'example' => '26842',
                    ),
                    'MaxMessageCount' => 
                    array (
                      'description' => '块包含最大消息条目',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '12',
                    ),
                    'MemberCount' => 
                    array (
                      'description' => '成员数量',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
                    ),
                    'RequestId' => 
                    array (
                      'description' => '请求ID',
                      'type' => 'string',
                      'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
                    ),
                    'ConsortiumId' => 
                    array (
                      'description' => '联盟ID',
                      'type' => 'string',
                      'example' => 'consortium-perf914-37cfcff9pa****',
                    ),
                    'ChannelName' => 
                    array (
                      'description' => '通道名',
                      'type' => 'string',
                      'example' => 'mychannel',
                    ),
                    'DeleteTime' => 
                    array (
                      'description' => '删除时间',
                      'type' => 'string',
                      'example' => '1533025590',
                    ),
                    'ChannelId' => 
                    array (
                      'description' => '通道ID',
                      'type' => 'string',
                      'example' => 'chan-first-channel-31hlgpen5k****',
                    ),
                    'Deleted' => 
                    array (
                      'description' => '是否已经删除',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ConsortiumName' => 
                    array (
                      'description' => '联盟名称',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                    'BlockCount' => 
                    array (
                      'description' => '块数量',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"BatchTimeout\\": 2,\\n      \\"UpdateTime\\": \\"1533025590\\",\\n      \\"ChaincodeCount\\": 2,\\n      \\"PreferredMaxBytes\\": 24,\\n      \\"State\\": \\"Running\\",\\n      \\"CreateTime\\": \\"1533025590\\",\\n      \\"SupportChannelConfig\\": true,\\n      \\"OwnerName\\": \\"uid-116748157028****\\",\\n      \\"OwnerUid\\": 0,\\n      \\"OwnerBid\\": \\"26842\\",\\n      \\"MaxMessageCount\\": 12,\\n      \\"MemberCount\\": 3,\\n      \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n      \\"ConsortiumId\\": \\"consortium-perf914-37cfcff9pa****\\",\\n      \\"ChannelName\\": \\"mychannel\\",\\n      \\"DeleteTime\\": \\"1533025590\\",\\n      \\"ChannelId\\": \\"chan-first-channel-31hlgpen5k****\\",\\n      \\"Deleted\\": true,\\n      \\"ConsortiumName\\": \\"name\\",\\n      \\"BlockCount\\": 3\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeFabricOrganizationChannelsResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <BatchTimeout>2</BatchTimeout>\\n        <UpdateTime>1533025590</UpdateTime>\\n        <ChaincodeCount>2</ChaincodeCount>\\n        <PreferredMaxBytes>24</PreferredMaxBytes>\\n        <State>Running</State>\\n        <CreateTime>1533025590</CreateTime>\\n        <SupportChannelConfig>true</SupportChannelConfig>\\n        <OwnerName>uid-116748157028****</OwnerName>\\n        <OwnerBid>26842</OwnerBid>\\n        <MaxMessageCount>12</MaxMessageCount>\\n        <MemberCount>3</MemberCount>\\n        <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n        <ConsortiumId>consortium-perf914-37cfcff9pa****</ConsortiumId>\\n        <ChannelName>mychannel</ChannelName>\\n        <DeleteTime>1533025590</DeleteTime>\\n        <ChannelId>chan-first-channel-31hlgpen5k****</ChannelId>\\n        <Deleted>true</Deleted>\\n        <ConsortiumName>name</ConsortiumName>\\n        <BlockCount>3</BlockCount>\\n    </Result>\\n</DescribeFabricOrganizationChannelsResponse>","errorExample":""}]',
      'title' => '获取该组织加入的通道列表',
      'summary' => '调用DescribeFabricOrganizationChannels获取该组织加入的通道列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AcceptFabricInvitation' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'Code',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '邀请码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'secrettoken',
          ),
        ),
        1 => 
        array (
          'name' => 'IsAccepted',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否接受。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
            'docRequired' => false,
            'default' => 'true',
            'enum' => 
            array (
              0 => 'true',
              1 => 'false',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '52CC8D5B-79A8-4769-BC7B-8940556ADA49',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"52CC8D5B-79A8-4769-BC7B-8940556ADA49\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<AcceptFabricInvitationResesponse>\\r\\n\\t<RequestId>52CC8D5B-79A8-4769-BC7B-8940556ADA49</RequestId>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n\\t<Success>true</Success>\\r\\n</AcceptFabricInvitationResesponse>","errorExample":""}]',
      'title' => '接受加入联盟的邀请',
      'summary' => '调用AcceptFabricInvitation接受加入联盟的邀请。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ConfirmFabricConsortiumMember' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
      'security' => 
      array (
        0 => 
        array (
          'AK' => 
          array (
          ),
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConsortiumId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '联盟ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'consortium-aaaaaa-akpcsjjac2jd',
          ),
        ),
        1 => 
        array (
          'name' => 'Organization',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '组织列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'OrganizationId' => 
                array (
                  'description' => '组织的ID列表。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'peers-aaaaaa1-1oxw31d046jtl',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '50B3ACF3-CE12-433C-A834-9E8C657A4934',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"50B3ACF3-CE12-433C-A834-9E8C657A4934\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<ConfirmFabricConsortiumMemberResponse>\\n    <RequestId>50B3ACF3-CE12-433C-A834-9E8C657A4934</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n</ConfirmFabricConsortiumMemberResponse>","errorExample":""}]',
      'title' => 'ConfirmFabricConsortiumMember',
      'summary' => '调用ConfirmFabricConsortiumMember确认联盟成员的加入申请，需要确认提案。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'InstallFabricChaincode' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w9dt3',
          ),
        ),
        1 => 
        array (
          'name' => 'ChaincodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'chan-channelx-1l1hmckuuisxo',
          ),
        ),
        2 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '类型：
- 0：未定义
- 1：Go
- 2：Node
- 4：Java',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'EndorsePolicy' => 
                  array (
                    'description' => '背书策略',
                    'type' => 'string',
                    'example' => 'OR ("perf9141MSP.member")',
                  ),
                  'State' => 
                  array (
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'Pending',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1533025590',
                  ),
                  'ChaincodeId' => 
                  array (
                    'description' => '链码ID',
                    'type' => 'string',
                    'example' => 'cc-198jejf8f8chi8',
                  ),
                  'ProviderName' => 
                  array (
                    'description' => '上传者',
                    'type' => 'string',
                    'example' => 'prividername',
                  ),
                  'Message' => 
                  array (
                    'description' => '信息',
                    'type' => 'string',
                    'example' => 'ok',
                  ),
                  'ChaincodeName' => 
                  array (
                    'description' => '链码名称',
                    'type' => 'string',
                    'example' => 'mychannel',
                  ),
                  'Input' => 
                  array (
                    'description' => '输入',
                    'type' => 'string',
                    'example' => 'input',
                  ),
                  'Install' => 
                  array (
                    'description' => '是否安装',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'ProviderId' => 
                  array (
                    'description' => '上传者ID',
                    'type' => 'string',
                    'example' => 'providerid',
                  ),
                  'DeployTime' => 
                  array (
                    'description' => '部署时间',
                    'type' => 'string',
                    'example' => '1533025590',
                  ),
                  'ChaincodeVersion' => 
                  array (
                    'description' => '链码版本',
                    'type' => 'string',
                    'example' => '1.0',
                  ),
                  'ConsortiumId' => 
                  array (
                    'description' => '联盟ID',
                    'type' => 'string',
                    'example' => 'consortium-lianmenyumingyi-hc5d1bwlulg7',
                  ),
                  'ChannelName' => 
                  array (
                    'description' => '通道名',
                    'type' => 'string',
                    'example' => 'mychannel',
                  ),
                  'Path' => 
                  array (
                    'description' => '路径',
                    'type' => 'string',
                    'example' => 'github.com/hyperledger/fabric-samples/chaincode/sacc',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Type\\": 1,\\n    \\"EndorsePolicy\\": \\"OR (\\\\\\"perf9141MSP.member\\\\\\")\\",\\n    \\"State\\": \\"Pending\\",\\n    \\"CreateTime\\": \\"1533025590\\",\\n    \\"ChaincodeId\\": \\"cc-198jejf8f8chi8\\",\\n    \\"ProviderName\\": \\"prividername\\",\\n    \\"Message\\": \\"ok\\",\\n    \\"ChaincodeName\\": \\"mychannel\\",\\n    \\"Input\\": \\"input\\",\\n    \\"Install\\": false,\\n    \\"ProviderId\\": \\"providerid\\",\\n    \\"DeployTime\\": \\"1533025590\\",\\n    \\"ChaincodeVersion\\": \\"1.0\\",\\n    \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwlulg7\\",\\n    \\"ChannelName\\": \\"mychannel\\",\\n    \\"Path\\": \\"github.com/hyperledger/fabric-samples/chaincode/sacc\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<InstallFabricChaincodeResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <Type>1</Type>\\n        <EndorsePolicy>OR (\\"perf9141MSP.member\\")</EndorsePolicy>\\n        <State>Pending</State>\\n        <CreateTime>1533025590</CreateTime>\\n        <ChaincodeId>cc-198jejf8f8chi8</ChaincodeId>\\n        <ProviderName>prividername</ProviderName>\\n        <Message>ok</Message>\\n        <ChaincodeName>mychannel</ChaincodeName>\\n        <Input>input</Input>\\n        <Install>false</Install>\\n        <ProviderId>providerid</ProviderId>\\n        <DeployTime>1533025590</DeployTime>\\n        <ChaincodeVersion>1.0</ChaincodeVersion>\\n        <ConsortiumId>consortium-lianmenyumingyi-hc5d1bwlulg7</ConsortiumId>\\n        <ChannelName>mychannel</ChannelName>\\n        <Path>github.com/hyperledger/fabric-samples/chaincode/sacc</Path>\\n    </Result>\\n</InstallFabricChaincodeResponse>","errorExample":""}]',
      'title' => '安装链码',
      'summary' => '调用InstallFabricChaincode安装链码。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckFabricConsortiumDomain' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DomainCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '联盟域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'bank',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '8F80A214-89FC-4348-9B3F-15446B3DC1FA',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '处理结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Domain' => 
                  array (
                    'description' => '域名',
                    'type' => 'string',
                    'example' => 'bank',
                  ),
                  'Valid' => 
                  array (
                    'description' => '是否合法',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Prompt' => 
                  array (
                    'description' => '提示',
                    'type' => 'string',
                    'example' => 'OK',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8F80A214-89FC-4348-9B3F-15446B3DC1FA\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Domain\\": \\"bank\\",\\n    \\"Valid\\": true,\\n    \\"Prompt\\": \\"OK\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CheckFabricConsortiumDomainResponse>\\r\\n    <Result>\\r\\n\\t\\t<Prompt>OK</Prompt>\\r\\n\\t\\t<Domain>bank</Domain>\\r\\n\\t\\t<Valid>true</Valid>\\r\\n\\t</Result>\\r\\n\\t<RequestId>8F80A214-89FC-4348-9B3F-15446B3DC1FA</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n</CheckFabricConsortiumDomainResponse>","errorExample":""}]',
      'title' => '检查联盟域名是否可用',
      'summary' => '调用CheckFabricConsortiumDomain检查联盟域名是否可用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SynchronizeFabricChaincode' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChaincodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'code-sacc-1pr09q7jm****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '类型',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'EndorsePolicy' => 
                  array (
                    'description' => '背书策略',
                    'type' => 'string',
                    'example' => 'OR (\'aaaaaa1MSP.peer\')',
                  ),
                  'State' => 
                  array (
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1533025590',
                  ),
                  'ChaincodeId' => 
                  array (
                    'description' => '链码ID',
                    'type' => 'string',
                    'example' => 'code-sacc-1pr09q7jm****',
                  ),
                  'ProviderName' => 
                  array (
                    'description' => '上传者',
                    'type' => 'string',
                    'example' => 'name',
                  ),
                  'Message' => 
                  array (
                    'description' => '信息',
                    'type' => 'string',
                    'example' => 'ok',
                  ),
                  'ChaincodeName' => 
                  array (
                    'description' => '链码名',
                    'type' => 'string',
                    'example' => 'mychaincode',
                  ),
                  'Input' => 
                  array (
                    'description' => '输入',
                    'type' => 'string',
                    'example' => 'input',
                  ),
                  'Install' => 
                  array (
                    'description' => 'false',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'ProviderId' => 
                  array (
                    'description' => '上传者ID',
                    'type' => 'string',
                    'example' => 'provider',
                  ),
                  'DeployTime' => 
                  array (
                    'description' => '部署时间',
                    'type' => 'string',
                    'example' => '1533025590',
                  ),
                  'ChaincodeVersion' => 
                  array (
                    'description' => '链码版本',
                    'type' => 'string',
                    'example' => '1.0',
                  ),
                  'ConsortiumId' => 
                  array (
                    'description' => '联盟ID',
                    'type' => 'string',
                    'example' => 'consortium-lianmenyumingyi-hc5d1bwl****',
                  ),
                  'ChannelName' => 
                  array (
                    'description' => '通道名',
                    'type' => 'string',
                    'example' => 'chan-channelx-1l1hmckuuisxo',
                  ),
                  'Path' => 
                  array (
                    'description' => '路径',
                    'type' => 'string',
                    'example' => 'go-sdk-demo/chaincode/src',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'Chaincode.Duplicated',
            'errorMessage' => 'ChainCode [%s] with version [%s] already exists',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Type\\": 1,\\n    \\"EndorsePolicy\\": \\"OR (\'aaaaaa1MSP.peer\')\\",\\n    \\"State\\": \\"Running\\",\\n    \\"CreateTime\\": \\"1533025590\\",\\n    \\"ChaincodeId\\": \\"code-sacc-1pr09q7jm****\\",\\n    \\"ProviderName\\": \\"name\\",\\n    \\"Message\\": \\"ok\\",\\n    \\"ChaincodeName\\": \\"mychaincode\\",\\n    \\"Input\\": \\"input\\",\\n    \\"Install\\": false,\\n    \\"ProviderId\\": \\"provider\\",\\n    \\"DeployTime\\": \\"1533025590\\",\\n    \\"ChaincodeVersion\\": \\"1.0\\",\\n    \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwl****\\",\\n    \\"ChannelName\\": \\"chan-channelx-1l1hmckuuisxo\\",\\n    \\"Path\\": \\"go-sdk-demo/chaincode/src\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SynchronizeFabricChaincodeResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <Type>1</Type>\\n        <EndorsePolicy>OR (\'aaaaaa1MSP.peer\')</EndorsePolicy>\\n        <State>Running</State>\\n        <CreateTime>1533025590</CreateTime>\\n        <ChaincodeId>code-sacc-1pr09q7jm****</ChaincodeId>\\n        <ProviderName>name</ProviderName>\\n        <Message>ok</Message>\\n        <ChaincodeName>mychaincode</ChaincodeName>\\n        <Input>input</Input>\\n        <Install>false</Install>\\n        <ProviderId>provider</ProviderId>\\n        <DeployTime>1533025590</DeployTime>\\n        <ChaincodeVersion>1.0</ChaincodeVersion>\\n        <ConsortiumId>consortium-lianmenyumingyi-hc5d1bwl****</ConsortiumId>\\n        <ChannelName>chan-channelx-1l1hmckuuisxo</ChannelName>\\n        <Path>go-sdk-demo/chaincode/src</Path>\\n    </Result>\\n</SynchronizeFabricChaincodeResponse>","errorExample":""}]',
      'title' => '同步链码的升级和实例化的状态',
      'summary' => '调用SynchronizeFabricChaincode同步链码的升级和实例化的状态。',
    ),
    'DownloadFabricOrganizationSDK' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w****',
          ),
        ),
        1 => 
        array (
          'name' => 'Username',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'username',
          ),
        ),
        2 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Path' => 
                    array (
                      'description' => '文件解压后的路径',
                      'type' => 'string',
                      'example' => 'dir/file',
                    ),
                    'Content' => 
                    array (
                      'description' => 'base64转码过的文件内容，需要用base64解码才能得到文件原内容',
                      'type' => 'string',
                      'example' => 'base64string',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": [\\n    {\\n      \\"Path\\": \\"dir/file\\",\\n      \\"Content\\": \\"base64string\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DownloadFabricOrganizationSDKResponse>\\n    <RequestId>1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3</RequestId>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n    <Result>\\n        <Path>dir/file</Path>\\n        <Content>base64string</Content>\\n    </Result>\\n</DownloadFabricOrganizationSDKResponse>","errorExample":""}]',
      'title' => '下载SDK',
      'summary' => '调用DownloadFabricOrganizationSDK下载SDK。',
    ),
    'ResetFabricOrganizationUserPassword' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w****',
          ),
        ),
        1 => 
        array (
          'name' => 'Username',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'username',
          ),
        ),
        2 => 
        array (
          'name' => 'Password',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '密码',
            'type' => 'string',
            'required' => true,
            'example' => 'pwd',
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Password' => 
                  array (
                    'description' => '密码',
                    'type' => 'string',
                    'example' => 'password',
                  ),
                  'ExpireTime' => 
                  array (
                    'description' => '过期时间',
                    'type' => 'string',
                    'example' => '1533025590',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1533025590',
                  ),
                  'OrganizationId' => 
                  array (
                    'description' => '组织ID',
                    'type' => 'string',
                    'example' => 'peers-aaaaaa2-1eqnj5o5w****',
                  ),
                  'Username' => 
                  array (
                    'description' => '用户名',
                    'type' => 'string',
                    'example' => 'username',
                  ),
                  'Fullname' => 
                  array (
                    'description' => '全名',
                    'type' => 'string',
                    'example' => 'username',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Password\\": \\"password\\",\\n    \\"ExpireTime\\": \\"1533025590\\",\\n    \\"CreateTime\\": \\"1533025590\\",\\n    \\"OrganizationId\\": \\"peers-aaaaaa2-1eqnj5o5w****\\",\\n    \\"Username\\": \\"username\\",\\n    \\"Fullname\\": \\"username\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ResetFabricOrganizationUserPasswordResponse>\\r\\n\\t<Result>\\r\\n\\t\\t<Password>v32n9rzhxqk7</Password>\\r\\n\\t\\t<CreateTime>1542086619000</CreateTime>\\r\\n\\t\\t<ExpireTime>1542086619000</ExpireTime>\\r\\n\\t\\t<Fullname>fullname</Fullname>\\r\\n\\t\\t<Username>asian01</Username>\\r\\n\\t\\t<OrganizationId>peers-asianbank-1c0w455jb****</OrganizationId>\\r\\n\\t</Result>\\r\\n\\t<RequestId>2A3ABD81-95F5-4931-ACB3-31BDAE561FC7</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n</ResetFabricOrganizationUserPasswordResponse>","errorExample":""}]',
      'title' => '重置用户密码',
      'summary' => '调用ResetFabricOrganizationUserPassword重置用户密码。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckFabricOrganizationDomain' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'DomainCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'bank',
            'default' => 'canyouguessme',
          ),
        ),
        1 => 
        array (
          'name' => 'Domain',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '域名前缀。

不需要包含`DescribeRootDomain`接口获取的根域名。',
            'type' => 'string',
            'required' => false,
            'example' => 'bank',
            'default' => 'canyouguessme',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'C30A14C7-800E-468B-9EB2-C704DA49295E',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '检查结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Domain' => 
                  array (
                    'description' => '返回用户输入的域名',
                    'type' => 'string',
                    'example' => 'bank',
                  ),
                  'Valid' => 
                  array (
                    'description' => '是否有效',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Prompt' => 
                  array (
                    'description' => '提示',
                    'type' => 'string',
                    'example' => 'OK',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C30A14C7-800E-468B-9EB2-C704DA49295E\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Domain\\": \\"bank\\",\\n    \\"Valid\\": true,\\n    \\"Prompt\\": \\"OK\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CheckFabricOrganizationDomainResponse>\\r\\n\\t<Result>\\r\\n\\t\\t<Prompt>OK</Prompt>\\r\\n\\t\\t<Domain>canyouguessme</Domain>\\r\\n\\t\\t<Valid>true</Valid>\\r\\n\\t</Result>\\r\\n\\t<RequestId>C30A14C7-800E-468B-9EB2-C704DA49295E</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n</CheckFabricOrganizationDomainResponse>","errorExample":""}]',
      'title' => '检查域名是否可用',
      'summary' => '调用CheckFabricOrganizationDomain检查域名是否可用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpgradeFabricChaincode' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-wholesaler-15ix77tof****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChaincodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'code-sacc-fk9z4r97****',
          ),
        ),
        2 => 
        array (
          'name' => 'EndorsePolicy',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '背书策略',
            'type' => 'string',
            'required' => false,
            'example' => 'OR ("wholesalerMSP.peer")',
          ),
        ),
        3 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'CollectionConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '隐私数据集配置：
- name：隐私集合名称
- maxPeerCount：该隐私集合在背书阶段最多分发到 N 个peer节点
- requiredPeerCount：该隐私集合在背书阶段至少需要被分发到N个peer节点上，才认为交易成功
- blockToLive：隐私交易上链后，隐私数据需要保留的时间（单位为区块高度），0 表示永久保存
- policy：该隐私集合被允许分发到哪些 peer 节点上，格式同背书策略',
            'type' => 'string',
            'required' => false,
            'example' => '[{"requiredPeerCount":0,"name":"collectionName","maxPeerCount":3,"blockToLive":0,"policy":"OR(\'Org1MSP.peer\')"}]',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A6CC6C63-2D71-4D0C-AEBE-E95F0127C514',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '类型',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'EndorsePolicy' => 
                  array (
                    'description' => '背书策略',
                    'type' => 'string',
                    'example' => 'OR ("wholesalerMSP.peer")',
                  ),
                  'State' => 
                  array (
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1545215617000',
                  ),
                  'ChaincodeId' => 
                  array (
                    'description' => '链码ID',
                    'type' => 'string',
                    'example' => 'code-sacc-fk9z4r97****',
                  ),
                  'ProviderName' => 
                  array (
                    'description' => '上传者',
                    'type' => 'string',
                    'example' => 'uid-1928592',
                  ),
                  'Message' => 
                  array (
                    'description' => '消息',
                    'type' => 'string',
                    'example' => 'OK',
                  ),
                  'ChaincodeName' => 
                  array (
                    'description' => '链码名',
                    'type' => 'string',
                    'example' => 'mychaincode',
                  ),
                  'Input' => 
                  array (
                    'description' => '输入',
                    'type' => 'string',
                    'example' => 'input',
                  ),
                  'Install' => 
                  array (
                    'description' => '是否安装',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'ProviderId' => 
                  array (
                    'description' => '上传者ID',
                    'type' => 'string',
                    'example' => '1928592',
                  ),
                  'DeployTime' => 
                  array (
                    'description' => '部署时间',
                    'type' => 'string',
                    'example' => '1545215617000',
                  ),
                  'ChaincodeVersion' => 
                  array (
                    'description' => '链码版本',
                    'type' => 'string',
                    'example' => '1.0',
                  ),
                  'ConsortiumId' => 
                  array (
                    'description' => '联盟ID',
                    'type' => 'string',
                    'example' => 'consortium-supplychain-1pxzsp5tb****',
                  ),
                  'ChannelName' => 
                  array (
                    'description' => '通道名',
                    'type' => 'string',
                    'example' => 'cc',
                  ),
                  'Path' => 
                  array (
                    'description' => '路径',
                    'type' => 'string',
                    'example' => 'github.com/sacc',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A6CC6C63-2D71-4D0C-AEBE-E95F0127C514\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Type\\": 1,\\n    \\"EndorsePolicy\\": \\"OR (\\\\\\"wholesalerMSP.peer\\\\\\")\\",\\n    \\"State\\": \\"Running\\",\\n    \\"CreateTime\\": \\"1545215617000\\",\\n    \\"ChaincodeId\\": \\"code-sacc-fk9z4r97****\\",\\n    \\"ProviderName\\": \\"uid-1928592\\",\\n    \\"Message\\": \\"OK\\",\\n    \\"ChaincodeName\\": \\"mychaincode\\",\\n    \\"Input\\": \\"input\\",\\n    \\"Install\\": false,\\n    \\"ProviderId\\": \\"1928592\\",\\n    \\"DeployTime\\": \\"1545215617000\\",\\n    \\"ChaincodeVersion\\": \\"1.0\\",\\n    \\"ConsortiumId\\": \\"consortium-supplychain-1pxzsp5tb****\\",\\n    \\"ChannelName\\": \\"cc\\",\\n    \\"Path\\": \\"github.com/sacc\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpgradeFabricChaincodeResponse>\\r\\n\\t<Result>\\r\\n\\t\\t<ProviderId>provider</ProviderId>\\r\\n\\t\\t<ProviderName>name</ProviderName>\\r\\n\\t\\t<ChaincodeName>mycc3</ChaincodeName>\\r\\n\\t\\t<Input>args:&amp;quot;john&amp;quot; args:&amp;quot;10&amp;quot; </Input>\\r\\n\\t\\t<Install>false</Install>\\r\\n\\t\\t<State>Running</State>\\r\\n\\t\\t<Type>1</Type>\\r\\n\\t\\t<ChannelName>mychannel</ChannelName>\\r\\n\\t\\t<ConsortiumId>consortium-lianmenyumingyi-hc5d1bwl****</ConsortiumId>\\r\\n\\t\\t<ChaincodeVersion>0.1</ChaincodeVersion>\\r\\n\\t\\t<ChaincodeId>cc-null-c856k9i1m****</ChaincodeId>\\r\\n\\t\\t<Path>github.com/hyperledger/fabric-samples/chaincode/sacc</Path>\\r\\n\\t</Result>\\r\\n\\t<RequestId>2A3ABD81-95F5-4931-ACB3-31BDAE561FC7</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n</UpgradeFabricChaincodeResponse>","errorExample":""}]',
      'title' => '升级链码',
      'summary' => '调用UpgradeFabricChaincode升级链码。',
      'description' => '****',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'InstantiateFabricChaincode' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'OrganizationId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '组织ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'peers-aaaaaa2-1eqnj5o5w****',
          ),
        ),
        1 => 
        array (
          'name' => 'ChaincodeId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '链码ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cc-198jejf8f8****',
          ),
        ),
        2 => 
        array (
          'name' => 'EndorsePolicy',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '背书策略',
            'type' => 'string',
            'required' => false,
            'example' => 'OR (&#39;perf9141MSP.member&#39;)',
          ),
        ),
        3 => 
        array (
          'name' => 'Location',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '位置',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        4 => 
        array (
          'name' => 'CollectionConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '隐私数据集配置：
- name：隐私集合名称
- maxPeerCount：该隐私集合在背书阶段最多分发到 N 个peer节点
- requiredPeerCount：该隐私集合在背书阶段至少需要被分发到N个peer节点上，才认为交易成功
- blockToLive：隐私交易上链后，隐私数据需要保留的时间（单位为区块高度），0 表示永久保存
- policy：该隐私集合被允许分发到哪些 peer 节点上，格式同背书策略',
            'type' => 'string',
            'required' => false,
            'example' => '[{"requiredPeerCount":0,"name":"collectionName","maxPeerCount":3,"blockToLive":0,"policy":"OR(\'Org1MSP.peer\')"}]',
          ),
        ),
      ),
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '类型',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'EndorsePolicy' => 
                  array (
                    'description' => '背书策略',
                    'type' => 'string',
                    'example' => 'OR (\'aaaaaa1MSP.peer\')',
                  ),
                  'State' => 
                  array (
                    'description' => '状态',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '1533025590',
                  ),
                  'ChaincodeId' => 
                  array (
                    'description' => '链码ID',
                    'type' => 'string',
                    'example' => 'cc-198jejf8f8chi8',
                  ),
                  'ProviderName' => 
                  array (
                    'description' => '上传者',
                    'type' => 'string',
                    'example' => 'name',
                  ),
                  'Message' => 
                  array (
                    'description' => '信息',
                    'type' => 'string',
                    'example' => 'ok',
                  ),
                  'ChaincodeName' => 
                  array (
                    'description' => '链码名称',
                    'type' => 'string',
                    'example' => 'channelname',
                  ),
                  'Input' => 
                  array (
                    'description' => '输入',
                    'type' => 'string',
                    'example' => 'input',
                  ),
                  'Install' => 
                  array (
                    'description' => '是否安装',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'ProviderId' => 
                  array (
                    'description' => '上传者ID',
                    'type' => 'string',
                    'example' => 'id',
                  ),
                  'DeployTime' => 
                  array (
                    'description' => '部署时间',
                    'type' => 'string',
                    'example' => '1533025590',
                  ),
                  'ChaincodeVersion' => 
                  array (
                    'description' => '链码版本',
                    'type' => 'string',
                    'example' => '1.0',
                  ),
                  'ConsortiumId' => 
                  array (
                    'description' => '联盟ID',
                    'type' => 'string',
                    'example' => 'consortium-lianmenyumingyi-hc5d1bwlulg7',
                  ),
                  'ChannelName' => 
                  array (
                    'description' => '通道名',
                    'type' => 'string',
                    'example' => 'channelname',
                  ),
                  'Path' => 
                  array (
                    'description' => '路径',
                    'type' => 'string',
                    'example' => 'go-sdk-demo/chaincode/src',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"Type\\": 1,\\n    \\"EndorsePolicy\\": \\"OR (\'aaaaaa1MSP.peer\')\\",\\n    \\"State\\": \\"Running\\",\\n    \\"CreateTime\\": \\"1533025590\\",\\n    \\"ChaincodeId\\": \\"cc-198jejf8f8chi8\\",\\n    \\"ProviderName\\": \\"name\\",\\n    \\"Message\\": \\"ok\\",\\n    \\"ChaincodeName\\": \\"channelname\\",\\n    \\"Input\\": \\"input\\",\\n    \\"Install\\": false,\\n    \\"ProviderId\\": \\"id\\",\\n    \\"DeployTime\\": \\"1533025590\\",\\n    \\"ChaincodeVersion\\": \\"1.0\\",\\n    \\"ConsortiumId\\": \\"consortium-lianmenyumingyi-hc5d1bwlulg7\\",\\n    \\"ChannelName\\": \\"channelname\\",\\n    \\"Path\\": \\"go-sdk-demo/chaincode/src\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<InstantiateFabricChaincodeResponse>\\r\\n\\t<Result>\\r\\n\\t\\t<install>false</install>\\r\\n\\t\\t<channelName>mychannel</channelName>\\r\\n\\t\\t<input>args:&amp;quot;john&amp;quot; args:&amp;quot;10&amp;quot; </input>\\r\\n\\t\\t<ChaincodeName>mycc3</ChaincodeName>\\r\\n\\t\\t<Path>github.com/hyperledger/fabric-samples/chaincode/sacc</Path>\\r\\n\\t\\t<state>Running</state>\\r\\n\\t\\t<chaincodeId>cc-198jejf8f8chi8</chaincodeId>\\r\\n\\t\\t<type>1</type>\\r\\n\\t\\t<ChaincodeVersion>0.1</ChaincodeVersion>\\r\\n\\t\\t<ConsortiumId>consortium-lianmenyumingyi-hc5d1bwlulg7</ConsortiumId>\\r\\n\\t\\t<CreateTime>1533025590</CreateTime>\\r\\n\\t\\t<EndorsePolicy>OR (perf9141MSP.member)</EndorsePolicy>\\r\\n\\t\\t<Message>OK</Message>\\r\\n\\t</Result>\\r\\n\\t<RequestId>7D27692E-C501-4B1D-878C-0B869DD3D9E6</RequestId>\\r\\n\\t<Success>true</Success>\\r\\n\\t<ErrorCode>200</ErrorCode>\\r\\n</InstantiateFabricChaincodeResponse>","errorExample":""}]',
      'title' => '实例化链码',
      'summary' => '调用InstantiateFabricChaincode实例化链码。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'TagResources' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '取值"consortium"（联盟）或"organization"（组织）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'organization',
            'enum' => 
            array (
              0 => 'organization',
              1 => 'consortium',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例Id，N取值[1,50]。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID，N取值1~50',
              'type' => 'string',
              'required' => false,
              'example' => 'peers-tf000eihjli000shanghai-yqxvj5***',
            ),
            'required' => false,
            'example' => 'peers-tf000eihjli000beijing-bl6rdwi82tget',
            'maxItems' => 51,
          ),
        ),
        2 => 
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
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => 'Tag Key值，N取值1~20。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'key1',
                ),
                'Value' => 
                array (
                  'description' => 'Tag Value值，N取值1~20，需与Tag Key对应。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value1',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '21B8738D-254C-4933-9FC1-3C31B2611482',
              ),
              'Result' => 
              array (
                'description' => '结果值。',
                'type' => 'boolean',
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
                'type' => 'integer',
                'format' => 'int32',
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
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.%s',
            'errorMessage' => '%s',
          ),
          2 => 
          array (
            'errorCode' => 'MatchResource.%s',
            'errorMessage' => 'Could\'t match resource [%s]',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidTagsCount.%s',
            'errorMessage' => 'Could\'t insert/update resouce [%s] tag',
          ),
          4 => 
          array (
            'errorCode' => 'ConvertFailed.%s',
            'errorMessage' => 'Could\'t convert parameter [%s]',
          ),
          5 => 
          array (
            'errorCode' => 'ParameterConstraints.%s',
            'errorMessage' => 'Could\'t accept duplicate keys [%s]',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAuthority.%s',
            'errorMessage' => 'Could\'t operate resource [%s]',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => '%d',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"21B8738D-254C-4933-9FC1-3C31B2611482\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>21B8738D-254C-4933-9FC1-3C31B2611482</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => 'TagResources',
      'summary' => '对联盟或组织做标记。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UntagResources' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '取值"consortium"（联盟）或"organization"（组织）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'organization',
            'enum' => 
            array (
              0 => 'organization',
              1 => 'consortium',
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否删除实例所有的TagKey，仅当TagKey为空时有效。',
            'type' => 'boolean',
            'required' => false,
            'docRequired' => false,
            'example' => 'true',
            'default' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例Id，N取值0,50。不可重复。',
              'type' => 'string',
              'required' => false,
              'example' => 'peers-tf000eihjli000shanghai-yqxvj52lruxx',
            ),
            'required' => false,
            'maxItems' => 51,
          ),
        ),
        3 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'description' => 'Tag Key值，N取值1,20。不可重复。',
              'type' => 'string',
              'required' => false,
              'example' => 'key1',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '21B8738D-254C-4933-9FC1-3C31B2611482',
              ),
              'Result' => 
              array (
                'description' => '结果值。',
                'type' => 'boolean',
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
                'type' => 'integer',
                'format' => 'int32',
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
            'errorCode' => 'InvalidParameter.%s',
            'errorMessage' => '%s',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.%s',
            'errorMessage' => '%s',
          ),
          2 => 
          array (
            'errorCode' => 'MatchResource.%s',
            'errorMessage' => 'Could\'t match resource [%s]',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidTagsCount.%s',
            'errorMessage' => 'Could\'t insert/update resouce [%s] tag',
          ),
          4 => 
          array (
            'errorCode' => 'ConvertFailed.%s',
            'errorMessage' => 'Could\'t convert parameter [%s]',
          ),
          5 => 
          array (
            'errorCode' => 'ParameterConstraints.%s',
            'errorMessage' => 'Could\'t accept duplicate keys [%s]',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAuthority.%s',
            'errorMessage' => 'Could\'t operate resource [%s]',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => '%s',
            'errorMessage' => '%s',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"21B8738D-254C-4933-9FC1-3C31B2611482\\",\\n  \\"Result\\": true,\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>21B8738D-254C-4933-9FC1-3C31B2611482</RequestId>\\n    <Result>true</Result>\\n    <Success>true</Success>\\n    <ErrorCode>200</ErrorCode>\\n</UntagResourcesResponse>","errorExample":""}]',
      'title' => '删除资源的标记',
      'summary' => '删除资源的标记。',
    ),
    'DescribeEthereumDeletable' => 
    array (
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
        2 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EthereumId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '以太坊ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eth-1ilrhcav4ibdl',
          ),
        ),
      ),
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
                'example' => 'D68D66B6-1964-4073-8714-B49F5EF1AEFC',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'ErrorCode' => 
              array (
                'description' => '错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Result' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'EthereumId' => 
                  array (
                    'description' => '以太坊ID',
                    'type' => 'string',
                    'example' => 'eth-1ilrhcav4ibdl',
                  ),
                  'Deletable' => 
                  array (
                    'description' => '是否可删除',
                    'type' => 'boolean',
                    'example' => 'true',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D68D66B6-1964-4073-8714-B49F5EF1AEFC\\",\\n  \\"Success\\": true,\\n  \\"ErrorCode\\": 200,\\n  \\"Result\\": {\\n    \\"EthereumId\\": \\"eth-1ilrhcav4ibdl\\",\\n    \\"Deletable\\": true\\n  }\\n}","type":"json"}]',
      'title' => '获取以太坊是否可删除',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'baas.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'baas.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'baas.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'baas.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'baas.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'baas.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'baas.ap-southeast-1.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'baas.ap-southeast-1.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'baas.ap-southeast-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'baas.ap-southeast-1.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'baas.ap-southeast-1.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'baas.ap-southeast-1.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'baas.ap-southeast-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'baas.ap-southeast-1.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'baas.cn-hangzhou.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'baas.ap-southeast-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'baas.cn-north-2-gov-1.aliyuncs.com',
    ),
  ),
);
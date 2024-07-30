<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ltl',
        'version' => '2019-05-10',
    ],
    'directories' => [
        [
            'id' => 65761,
            'title' => '使用方',
            'type' => 'directory',
            'children' => [
                'CreateMember',
                'LockMember',
                'ModifyMember',
                'UnLockMember',
                'ListMember',
            ],
        ],
        [
            'id' => 65767,
            'title' => '设备',
            'type' => 'directory',
            'children' => [
                'RegisterDeviceGroup',
                'AuthorizeDevice',
                'AuthorizeDeviceGroup',
                'UnAuthorizeDevice',
                'UnAuthorizeDeviceGroup',
                'ListDevice',
                'ListDeviceGroup',
            ],
        ],
        [
            'id' => 65775,
            'title' => 'MPCos',
            'type' => 'directory',
            'children' => [
                'CreateMPCoSPhase',
                'CreateMPCoSPhaseGroup',
                'ModifyMPCoSPhase',
                'ModifyMPCoSPhaseGroup',
                'UpdateMPCoSAuthorizedInfo',
                'DescribeMPCoSAuthorizedInfo',
                'DescribeMPCoSPhaseInfo',
                'DescribeMPCoSResourceInfo',
                'ListMPCoSPhase',
                'ListMPCoSPhaseGroup',
                'ListMPCoSPhaseHistory',
            ],
        ],
        [
            'id' => 65787,
            'title' => '配置',
            'type' => 'directory',
            'children' => [
                'ApplyDataModelConfigInfo',
            ],
        ],
        [
            'id' => 65789,
            'title' => '上传',
            'type' => 'directory',
            'children' => [
                'AttachData',
                'AttachDataWithSignature',
                'SetData',
                'SetDataWithSignature',
                'BatchUploadMPCoSPhaseDigestInfo',
                'BatchUploadMPCoSPhaseDigestInfoByDevice',
                'BatchUploadMPCoSPhaseTextInfo',
                'BatchUploadMPCoSPhaseTextInfoByDevice',
                'UploadMPCoSPhaseDigestInfo',
                'UploadMPCoSPhaseDigestInfoByDevice',
                'UploadMPCoSPhaseTextInfo',
                'UploadMPCoSPhaseTextInfoByDevice',
            ],
        ],
        [
            'id' => 65802,
            'title' => '查询',
            'type' => 'directory',
            'children' => [
                'DescribeCapacityInfo',
                'DescribeMemberCapacityInfo',
                'DescribeResourceInfo',
                'GetBlockChainInfo',
                'GetData',
                'GetDataModelConfigInfo',
                'GetHistoryDataCount',
                'GetHistoryDataList',
                'ListDependentDataModels',
                'ListMultiPartyCollaborationChain',
                'ListProofChain',
                'ListPSMemberDataTypeCode',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateMember' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'MemberUid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云RAM用户UID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '19720316234381****',
                    ],
                ],
                [
                    'name' => 'MemberName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账户名称。'."\n"
                            .'长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '某公司',
                    ],
                ],
                [
                    'name' => 'MemberContact',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账户联系人。'."\n"
                            .'长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'MemberPhone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账户电话。可包含数字和横线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1381111****',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注信息。'."\n"
                            .'长度限制为100字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '某应用某业务',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '账户标识。',
                                'type' => 'string',
                                'example' => '717534457003****',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"717534457003****\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateMemberResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>717534457003****</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateMemberResponse>","errorExample":""}]',
            'title' => '创建使用方',
            'summary' => '管理方创建使用方账户。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'LockMember' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'MemberId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账户标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '717534457003****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<LockMemberResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</LockMemberResponse>","errorExample":""}]',
            'title' => '锁定使用方账户',
            'summary' => '锁定使用方账户，锁定账户后则账户不能访问当前区块链。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'ModifyMember' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'MemberUid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云RAM用户UID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '19720316234381****',
                    ],
                ],
                [
                    'name' => 'MemberName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账户名称。'."\n"
                            .'长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '某公司',
                    ],
                ],
                [
                    'name' => 'MemberContact',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账户联系人。'."\n"
                            .'长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'MemberPhone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账户联系电话。'."\n"
                            .'长度限制为20字符，可以包含数字和横线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1381111****',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注。'."\n"
                            .'长度限制为100字符。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '某应用某业务',
                    ],
                ],
                [
                    'name' => 'MemberId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账户标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '717534457003****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyMemberResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ModifyMemberResponse>","errorExample":""}]',
            'title' => '修改使用方',
            'summary' => '修改账户信息。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'UnLockMember' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'MemberId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账户标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '717534457003****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UnLockMemberResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UnLockMemberResponse>","errorExample":""}]',
            'title' => '解锁使用方',
            'summary' => '解锁使用方账户，解锁后账户可访问区块链。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'ListMember' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Num',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定显示返回结果中的第几页，最小取值1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Size',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'MemberUid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询阿里云RAM用户的UID。'."\n"
                            .'> 不传则查询业务链下所有的阿里云RAM用户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '19720316234381****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Num' => [
                                        'description' => '页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Total' => [
                                        'description' => '总条数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                    'Size' => [
                                        'description' => '每页数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'PageData' => [
                                        'description' => '数据项。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '账号锁定状态：'."\n"
                                                        .'- **UNLOCK**：未锁定。'."\n"
                                                        .'- **LOCK**：已锁定。',
                                                    'type' => 'string',
                                                    'example' => 'UNLOCK',
                                                ],
                                                'MemberName' => [
                                                    'description' => '账户名称。',
                                                    'type' => 'string',
                                                    'example' => '某公司',
                                                ],
                                                'Remark' => [
                                                    'description' => '备注。',
                                                    'type' => 'string',
                                                    'example' => '某应用某业务',
                                                ],
                                                'MemberUid' => [
                                                    'description' => '阿里云RAM用户UID。',
                                                    'type' => 'string',
                                                    'example' => '19720316234381****',
                                                ],
                                                'MemberPhone' => [
                                                    'description' => '账户电话。',
                                                    'type' => 'string',
                                                    'example' => '1381111****',
                                                ],
                                                'MemberId' => [
                                                    'description' => '账户标识。',
                                                    'type' => 'string',
                                                    'example' => '717534457003****',
                                                ],
                                                'MemberContact' => [
                                                    'description' => '账户联系人。',
                                                    'type' => 'string',
                                                    'example' => '张三',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 30,\\n    \\"Size\\": 2,\\n    \\"PageData\\": [\\n      {\\n        \\"Status\\": \\"UNLOCK\\",\\n        \\"MemberName\\": \\"某公司\\",\\n        \\"Remark\\": \\"某应用某业务\\",\\n        \\"MemberUid\\": \\"19720316234381****\\",\\n        \\"MemberPhone\\": \\"1381111****\\",\\n        \\"MemberId\\": \\"717534457003****\\",\\n        \\"MemberContact\\": \\"张三\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListMemberResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <Status>UNLOCK</Status>\\n            <MemberId>717534457003****</MemberId>\\n            <MemberContact>张三</MemberContact>\\n            <MemberUid>19720316234381****</MemberUid>\\n            <MemberPhone>1381111****</MemberPhone>\\n            <MemberName>某公司</MemberName>\\n            <Remark>某应用某业务</Remark>\\n        </PageData>\\n        <PageData>\\n            <Status>UNLOCK</Status>\\n            <MemberId>717534457003****</MemberId>\\n            <MemberContact>张三</MemberContact>\\n            <MemberUid>19720316234381****</MemberUid>\\n            <MemberPhone>1381111****</MemberPhone>\\n            <MemberName>某公司</MemberName>\\n            <Remark>某应用某业务</Remark>\\n        </PageData>\\n        <Size>2</Size>\\n        <Num>1</Num>\\n        <Total>30</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListMemberResponse>","errorExample":""}]',
            'title' => '查询使用方列表',
            'summary' => '查询使用方账户列表。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'RegisterDeviceGroup' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '981184817831****',
                    ],
                ],
                [
                    'name' => 'DeviceGroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT数据源组名称。'."\n"
                            .'长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '某数据源组',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT数据源组ProductKey。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'hKpHMh2****',
                    ],
                ],
                [
                    'name' => 'AuthorizeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权类型。'."\n"
                            .'**ID2**：阿里云Link ID²。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ID2',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注信息。长度限制为100字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '某数据源组的备注信息。',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => 'IoT数据源组标识。',
                                'type' => 'string',
                                'example' => '256399502929****',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"256399502929****\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RegisterDeviceGroupResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>256399502929****</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</RegisterDeviceGroupResponse>","errorExample":""}]',
            'title' => '注册数据源组',
            'summary' => '注册IoT数据源组。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'AuthorizeDevice' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '654887879557****',
                    ],
                ],
                [
                    'name' => 'DeviceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT数据源组标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '475020454741****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AuthorizeDeviceResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</AuthorizeDeviceResponse>","errorExample":""}]',
            'title' => '授权设备',
            'summary' => '授权指定设备接入区块链权限。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'AuthorizeDeviceGroup' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'DeviceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT数据源组标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '475020454741****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AuthorizeDeviceGroupResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</AuthorizeDeviceGroupResponse>","errorExample":""}]',
            'title' => '授权设备分组',
            'summary' => '授权IoT数据源组下的设备接入区块链的权限。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'UnAuthorizeDevice' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '654887879557****',
                    ],
                ],
                [
                    'name' => 'DeviceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT数据源组标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '475020454741****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UnAuthorizeDeviceResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UnAuthorizeDeviceResponse>","errorExample":""}]',
            'title' => '设备取消授权',
            'summary' => '取消指定设备接入区块链权限。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见错误码[错误码](~~184711~~)。',
        ],
        'UnAuthorizeDeviceGroup' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'DeviceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT数据源组标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '475020454741****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UnAuthorizeDeviceGroupResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UnAuthorizeDeviceGroupResponse>","errorExample":""}]',
            'title' => '数据源组取消授权',
            'summary' => '取消指定IoT数据源组下的设备接入区块链的权限。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'ListDevice' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Num',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定显示返回结果中的第几页，最小取值是1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Size',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'DeviceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT数据源组标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '475020454741****',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询IoT设备的ID。'."\n"
                            ."\n"
                            .'>  不传则查询该IoT数据源组下的所有IoT设备。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '183329761572****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Num' => [
                                        'description' => '页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Total' => [
                                        'description' => '总条数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                    'Size' => [
                                        'description' => '每页数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'PageData' => [
                                        'description' => '数据项',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '授权状态。'."\n"
                                                        .'- **AUTHORIZED**：已授权。'."\n"
                                                        .'- **UNAUTHORIZED**：未授权。',
                                                    'type' => 'string',
                                                    'example' => 'AUTHORIZED',
                                                ],
                                                'LastSaveTime' => [
                                                    'description' => '最后存证时间。毫秒级时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1606379090866',
                                                ],
                                                'DeviceId' => [
                                                    'description' => '设备标识。',
                                                    'type' => 'string',
                                                    'example' => '876055554040****',
                                                ],
                                                'IotId' => [
                                                    'description' => 'IoT设备ID。',
                                                    'type' => 'string',
                                                    'example' => '183329761572****',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 30,\\n    \\"Size\\": 2,\\n    \\"PageData\\": [\\n      {\\n        \\"Status\\": \\"AUTHORIZED\\",\\n        \\"LastSaveTime\\": 1606379090866,\\n        \\"DeviceId\\": \\"876055554040****\\",\\n        \\"IotId\\": \\"183329761572****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDeviceResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <Status>AUTHORIZED</Status>\\n            <IotId>183329761572****</IotId>\\n            <LastSaveTime>1606379090866</LastSaveTime>\\n            <DeviceId>876055554040****</DeviceId>\\n        </PageData>\\n        <PageData>\\n            <Status>AUTHORIZED</Status>\\n            <IotId>183329761573****</IotId>\\n            <LastSaveTime>1606379090888</LastSaveTime>\\n            <DeviceId>876055554041****</DeviceId>\\n        </PageData>\\n        <Size>2</Size>\\n        <Num>1</Num>\\n        <Total>30</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListDeviceResponse>","errorExample":""}]',
            'title' => '查询设备列表',
            'summary' => '查询IoT数据源组下的所有设备。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'ListDeviceGroup' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Num',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定显示返回结果中的第几页，最小取值1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Size',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT数据源组ProductKey。'."\n"
                            ."\n"
                            .'> 不传则查询业务链下所有的IoT数据源组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'hKpHMh2****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误消息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Num' => [
                                        'description' => '页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Total' => [
                                        'description' => '总条数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                    'Size' => [
                                        'description' => '每页数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'PageData' => [
                                        'description' => '数据项',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => 'IoT数据源组授权状态。'."\n"
                                                        .'- **AUTHORIZED**：已授权。'."\n"
                                                        .'- **UNAUTHORIZED**：未授权。',
                                                    'type' => 'string',
                                                    'example' => 'AUTHORIZED',
                                                ],
                                                'DeviceGroupId' => [
                                                    'description' => 'IoT数据源组标识。',
                                                    'type' => 'string',
                                                    'example' => '577187700697****',
                                                ],
                                                'ProductKey' => [
                                                    'description' => 'IoT数据源组ProductKey。',
                                                    'type' => 'string',
                                                    'example' => 'hKpHMh2****',
                                                ],
                                                'Remark' => [
                                                    'description' => '备注信息。',
                                                    'type' => 'string',
                                                    'example' => '某业务某设备',
                                                ],
                                                'AuthorizeType' => [
                                                    'description' => 'IoT数据源组授权类型。'."\n"
                                                        .'**ID2**：阿里云ID²认证。',
                                                    'type' => 'string',
                                                    'example' => 'ID2',
                                                ],
                                                'OwnerName' => [
                                                    'description' => 'IoT数据源组所属成员名称。',
                                                    'type' => 'string',
                                                    'example' => '某公司',
                                                ],
                                                'OwnerUid' => [
                                                    'description' => 'IoT数据源组所属成员账号UID。',
                                                    'type' => 'string',
                                                    'example' => '19720316234381****',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 30,\\n    \\"Size\\": 2,\\n    \\"PageData\\": [\\n      {\\n        \\"Status\\": \\"AUTHORIZED\\",\\n        \\"DeviceGroupId\\": \\"577187700697****\\",\\n        \\"ProductKey\\": \\"hKpHMh2****\\",\\n        \\"Remark\\": \\"某业务某设备\\",\\n        \\"AuthorizeType\\": \\"ID2\\",\\n        \\"OwnerName\\": \\"某公司\\",\\n        \\"OwnerUid\\": \\"19720316234381****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDeviceGroupResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <Status>AUTHORIZED</Status>\\n            <AuthorizeType>ID2</AuthorizeType>\\n            <OwnerName>某公司</OwnerName>\\n            <DeviceGroupId>577187700697****</DeviceGroupId>\\n            <OwnerUid>19720316234381****</OwnerUid>\\n            <ProductKey>hKpHMh2****</ProductKey>\\n            <Remark>某业务某设备</Remark>\\n        </PageData>\\n        <PageData>\\n            <Status>AUTHORIZED</Status>\\n            <AuthorizeType>ID2</AuthorizeType>\\n            <OwnerName>某公司</OwnerName>\\n            <DeviceGroupId>577187700698****</DeviceGroupId>\\n            <OwnerUid>19720316234386****</OwnerUid>\\n            <ProductKey>hKpHMh2****</ProductKey>\\n            <Remark>某业务某设备</Remark>\\n        </PageData>\\n        <Size>2</Size>\\n        <Num>1</Num>\\n        <Total>30</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListDeviceGroupResponse>","errorExample":""}]',
            'title' => '查询数据源组列表',
            'summary' => '查询IoT数据源组列表'."\n"
                .'使用方可查看自己注册的IoT数据源组'."\n"
                .'管理方可查看项目下所有的IoT数据源组。',
            'description' => '1. 使用方仅可查看自行注册的IoT数据源组列表。'."\n"
                .'2. 管理方可查看所创建所有使用方的IoT数据源组列表。'."\n"
                ."\n"
                .'**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'CreateMPCoSPhase' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段名称。'."\n"
                            .'长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '某阶段',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注信息。长度限制为100字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '某阶段的备注信息。',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '987823074334****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '阶段标识。',
                                'type' => 'string',
                                'example' => '196487512811****',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"196487512811****\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateMPCoSPhaseResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>196487512811****</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateMPCoSPhaseResponse>","errorExample":""}]',
            'title' => '创建阶段',
            'summary' => '在协同模型中创建阶段。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'CreateMPCoSPhaseGroup' => [
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
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型名称。'."\n"
                            .'长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '某协同模型',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型备注。长度限制为100字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '某协同模型的备注信息。',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '协同模型标识。',
                                'type' => 'string',
                                'example' => '987823074334****',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"987823074334****\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateMPCoSPhaseGroupResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>987823074334****</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateMPCoSPhaseGroupResponse>","errorExample":""}]',
            'title' => '创建协同模型',
            'summary' => '创建协同模型信息。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'ModifyMPCoSPhase' => [
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段名称。'."\n"
                            .'长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '某阶段',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注信息。长度限制为100字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '某阶段的备注信息。',
                    ],
                ],
                [
                    'name' => 'PhaseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '196487512811****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyMPCoSPhaseResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ModifyMPCoSPhaseResponse>","errorExample":""}]',
            'title' => '修改阶段',
            'summary' => '在协同模型中修改阶段信息。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'ModifyMPCoSPhaseGroup' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型名称。'."\n"
                            .'长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '某协同模型',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注信息。长度限制为100字符。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '某协同模型备注。',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '987823074334****',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyMPCoSPhaseGroupResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ModifyMPCoSPhaseGroupResponse>","errorExample":""}]',
            'title' => '修改数据模型',
            'summary' => '修改协同模型信息。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'UpdateMPCoSAuthorizedInfo' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'MemberId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账户标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '717534457003****',
                    ],
                ],
                [
                    'name' => 'AuthorizedPhaseList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '授权阶段标识列表。',
                        'type' => 'object',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["196487512811****","196487512812****"]',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '383860792287****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateMPCoSAuthorizedInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UpdateMPCoSAuthorizedInfoResponse>","errorExample":""}]',
            'title' => '更新使用方权限',
            'summary' => '更新账户在协同模型中的权限信息。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'DescribeMPCoSAuthorizedInfo' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'MemberId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账户标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '717534457003****',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '383860792287****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'object',
                                'properties' => [
                                    'AuthorizedPhaseList' => [
                                        'description' => '已授权阶段列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'PhaseName' => [
                                                    'description' => '阶段名称。',
                                                    'type' => 'string',
                                                    'example' => '某阶段',
                                                ],
                                                'PhaseId' => [
                                                    'description' => '阶段标识。',
                                                    'type' => 'string',
                                                    'example' => '987823074334****',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'UnAuthorizedPhaseList' => [
                                        'description' => '未授权阶段列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'PhaseName' => [
                                                    'description' => '阶段名称。',
                                                    'type' => 'string',
                                                    'example' => '某某阶段',
                                                ],
                                                'PhaseId' => [
                                                    'description' => '阶段标识。',
                                                    'type' => 'string',
                                                    'example' => '987823074334****',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AuthorizedPhaseList\\": [\\n      {\\n        \\"PhaseName\\": \\"某阶段\\",\\n        \\"PhaseId\\": \\"987823074334****\\"\\n      }\\n    ],\\n    \\"UnAuthorizedPhaseList\\": [\\n      {\\n        \\"PhaseName\\": \\"某某阶段\\",\\n        \\"PhaseId\\": \\"987823074334****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeMPCoSAuthorizedInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <AuthorizedPhaseList>\\n            <PhaseName>某阶段</PhaseName>\\n            <PhaseId>987823074334****</PhaseId>\\n        </AuthorizedPhaseList>\\n        <UnAuthorizedPhaseList>\\n            <PhaseName>某某阶段</PhaseName>\\n            <PhaseId>987823074334****</PhaseId>\\n        </UnAuthorizedPhaseList>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DescribeMPCoSAuthorizedInfoResponse>","errorExample":""}]',
            'title' => '查询使用方权限',
            'summary' => '查询账户在协同模型中的权限信息。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'DescribeMPCoSPhaseInfo' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '383860792287****',
                    ],
                ],
                [
                    'name' => 'PhaseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '644208887511****',
                    ],
                ],
                [
                    'name' => 'DataKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '32bfce96b4e2f9bec0f2ea5cc2f14ace1486cc146d5832d3a84e5332fe89****',
                    ],
                ],
                [
                    'name' => 'DataSeq',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据序列号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'object',
                                'properties' => [
                                    'PreviousHash' => [
                                        'description' => '前一区块摘要。',
                                        'type' => 'string',
                                        'example' => 'bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb276d****',
                                    ],
                                    'ProductKey' => [
                                        'description' => 'IoT数据源组ProductKey。',
                                        'type' => 'string',
                                        'example' => 'hfoi7GQ****',
                                    ],
                                    'DataHash' => [
                                        'description' => '数据摘要。',
                                        'type' => 'string',
                                        'example' => '9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e972****',
                                    ],
                                    'DataValue' => [
                                        'description' => '上链值。',
                                        'type' => 'string',
                                        'example' => '某公司某业务数据。',
                                    ],
                                    'Timestamp' => [
                                        'description' => '上链时间。毫秒级时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1605885676000',
                                    ],
                                    'TransactionHash' => [
                                        'description' => '交易摘要。',
                                        'type' => 'string',
                                        'example' => 'c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4d07b****',
                                    ],
                                    'BlockHash' => [
                                        'description' => '区块摘要。',
                                        'type' => 'string',
                                        'example' => '5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c4****',
                                    ],
                                    'BlockNumber' => [
                                        'description' => '区块高度。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1942',
                                    ],
                                    'IotId' => [
                                        'description' => '设备标识。',
                                        'type' => 'string',
                                        'example' => 'DFA7B98AD494FB98A491****',
                                    ],
                                    'RelatedDataList' => [
                                        'description' => '关联数据列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'RelatedDataKey' => [
                                                    'description' => '关联的数据Key值。',
                                                    'type' => 'string',
                                                    'example' => '256399502929****',
                                                ],
                                                'RelatedPhaseDataHash' => [
                                                    'description' => '关联的阶段数据摘要。',
                                                    'type' => 'string',
                                                    'example' => '73b5c3dbc828fdf79749ff332af402036f7d591959fda00a2854a160fe66****',
                                                ],
                                                'RelatedDataSeq' => [
                                                    'description' => '关联的数据序列号。',
                                                    'type' => 'string',
                                                    'example' => 'be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****',
                                                ],
                                                'RelatedPhaseName' => [
                                                    'description' => '关联的数据阶段名称。',
                                                    'type' => 'string',
                                                    'example' => '某业务阶段',
                                                ],
                                                'RelatedPhaseId' => [
                                                    'description' => '关联的数据阶段ID。',
                                                    'type' => 'string',
                                                    'example' => '987823074334****',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PreviousHash\\": \\"bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb276d****\\",\\n    \\"ProductKey\\": \\"hfoi7GQ****\\",\\n    \\"DataHash\\": \\"9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e972****\\",\\n    \\"DataValue\\": \\"某公司某业务数据。\\",\\n    \\"Timestamp\\": 1605885676000,\\n    \\"TransactionHash\\": \\"c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4d07b****\\",\\n    \\"BlockHash\\": \\"5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c4****\\",\\n    \\"BlockNumber\\": 1942,\\n    \\"IotId\\": \\"DFA7B98AD494FB98A491****\\",\\n    \\"RelatedDataList\\": [\\n      {\\n        \\"RelatedDataKey\\": \\"256399502929****\\",\\n        \\"RelatedPhaseDataHash\\": \\"73b5c3dbc828fdf79749ff332af402036f7d591959fda00a2854a160fe66****\\",\\n        \\"RelatedDataSeq\\": \\"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****\\",\\n        \\"RelatedPhaseName\\": \\"某业务阶段\\",\\n        \\"RelatedPhaseId\\": \\"987823074334****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeMPCoSPhaseInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <IotId>DFA7B98AD494FB98A491****</IotId>\\n        <DataValue>某公司某业务数据。</DataValue>\\n        <BlockHash>5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c4****</BlockHash>\\n        <TransactionHash>c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4d07b****</TransactionHash>\\n        <PreviousHash>bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb276d****</PreviousHash>\\n        <BlockNumber>1942</BlockNumber>\\n        <Timestamp>1605885676000</Timestamp>\\n        <RelatedDataList>\\n            <RelatedPhaseId>256399502929****</RelatedPhaseId>\\n            <RelatedDataSeq>be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****</RelatedDataSeq>\\n            <RelatedDataKey>987823074334****</RelatedDataKey>\\n            <RelatedPhaseDataHash>73b5c3dbc828fdf79749ff332af402036f7d591959fda00a2854a160fe66****</RelatedPhaseDataHash>\\n            <RelatedPhaseName>某业务阶段</RelatedPhaseName>\\n        </RelatedDataList>\\n        <ProductKey>hfoi7GQ****</ProductKey>\\n        <DataHash>9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e972****</DataHash>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DescribeMPCoSPhaseInfoResponse>","errorExample":""}]',
            'title' => '查询上链数据',
            'summary' => '通过阶段标识，数据唯一标识，和序列号查询唯一一条上链数据和所关联数据。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'DescribeMPCoSResourceInfo' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求标识。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'object',
                                'properties' => [
                                    'PhaseGroupQuota' => [
                                        'description' => '协同模型配额。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
                                    ],
                                    'MemberQuota' => [
                                        'description' => '成员配额。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'UsedMember' => [
                                        'description' => '已添加成员个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '5',
                                    ],
                                    'UsedPhaseGroup' => [
                                        'description' => '已添加协同模型个数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'PhaseQuotaInfoList' => [
                                        'description' => '阶段配额列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'PhaseGroupId' => [
                                                    'description' => '协同模型标识。',
                                                    'type' => 'string',
                                                    'example' => '383860792287****',
                                                ],
                                                'PhaseGroupName' => [
                                                    'description' => '协同模型名称。',
                                                    'type' => 'string',
                                                    'example' => '某协同模型',
                                                ],
                                                'PhaseQuota' => [
                                                    'description' => '阶段配额。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '5',
                                                ],
                                                'UsedPhase' => [
                                                    'description' => '已添加阶段个数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '3',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PhaseGroupQuota\\": 200,\\n    \\"MemberQuota\\": 100,\\n    \\"UsedMember\\": 5,\\n    \\"UsedPhaseGroup\\": 10,\\n    \\"PhaseQuotaInfoList\\": [\\n      {\\n        \\"PhaseGroupId\\": \\"383860792287****\\",\\n        \\"PhaseGroupName\\": \\"某协同模型\\",\\n        \\"PhaseQuota\\": 5,\\n        \\"UsedPhase\\": 3\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeMPCoSResourceInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PhaseGroupQuota>200</PhaseGroupQuota>\\n        <UsedPhaseGroup>10</UsedPhaseGroup>\\n        <UsedMember>5</UsedMember>\\n        <PhaseQuotaInfoList>\\n            <PhaseQuota>5</PhaseQuota>\\n            <UsedPhase>3</UsedPhase>\\n            <PhaseGroupId>383860792287****</PhaseGroupId>\\n            <PhaseGroupName>某协同模型</PhaseGroupName>\\n        </PhaseQuotaInfoList>\\n        <MemberQuota>100</MemberQuota>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DescribeMPCoSResourceInfoResponse>","errorExample":""}]',
            'title' => '查询资源使用信息',
            'summary' => '查询业务链配额和使用情况。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'ListMPCoSPhase' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Num',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定显示返回结果中的第几页，最小取值是1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Size',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '987823074334****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的阶段名称。'."\n"
                            .'> 不传则查询该协同模型下所有阶段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '某阶段',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Num' => [
                                        'description' => '页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Total' => [
                                        'description' => '总条数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Size' => [
                                        'description' => '每页数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageData' => [
                                        'description' => '数据项。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '阶段名称。',
                                                    'type' => 'string',
                                                    'example' => '某阶段',
                                                ],
                                                'Remark' => [
                                                    'description' => '阶段备注。',
                                                    'type' => 'string',
                                                    'example' => '某阶段的备注信息。',
                                                ],
                                                'AccessPermission' => [
                                                    'description' => '访问权限。'."\n"
                                                        .'- **1**：读权限。'."\n"
                                                        .'- **2**：写权限。'."\n"
                                                        .'- **3**：读写权限。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'PhaseId' => [
                                                    'description' => '阶段标识。',
                                                    'type' => 'string',
                                                    'example' => '196487512811****',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 1,\\n    \\"Size\\": 1,\\n    \\"PageData\\": [\\n      {\\n        \\"Name\\": \\"某阶段\\",\\n        \\"Remark\\": \\"某阶段的备注信息。\\",\\n        \\"AccessPermission\\": 1,\\n        \\"PhaseId\\": \\"196487512811****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListMPCoSPhaseResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <AccessPermission>1</AccessPermission>\\n            <PhaseId>196487512811****</PhaseId>\\n            <Remark>某阶段的备注信息。</Remark>\\n            <Name>某阶段</Name>\\n        </PageData>\\n        <Size>1</Size>\\n        <Num>1</Num>\\n        <Total>1</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListMPCoSPhaseResponse>","errorExample":""}]',
            'title' => '查询阶段列表',
            'summary' => '查询协同模型所属的阶段列表。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'ListMPCoSPhaseGroup' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Num',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定显示返回结果中的第几页，最小取值是1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Size',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的协同模型名称。'."\n"
                            ."\n"
                            .'> 若不传则查询所有协同模型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '某业务链',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '响应状态码。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Num' => [
                                        'description' => '页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Total' => [
                                        'description' => '总条数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Size' => [
                                        'description' => '每页数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageData' => [
                                        'description' => '数据项。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'PhaseGroupId' => [
                                                    'description' => '协同模型标识。',
                                                    'type' => 'string',
                                                    'example' => '987823074334****',
                                                ],
                                                'Name' => [
                                                    'description' => '协同模型名称。',
                                                    'type' => 'string',
                                                    'example' => '某协同模型',
                                                ],
                                                'Remark' => [
                                                    'description' => '协同模型备注。',
                                                    'type' => 'string',
                                                    'example' => '某协同模型的备注信息。',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 1,\\n    \\"Size\\": 1,\\n    \\"PageData\\": [\\n      {\\n        \\"PhaseGroupId\\": \\"987823074334****\\",\\n        \\"Name\\": \\"某协同模型\\",\\n        \\"Remark\\": \\"某协同模型的备注信息。\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListMPCoSPhaseGroupResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <PhaseGroupId>987823074334****</PhaseGroupId>\\n            <Remark>某协同模型的备注信息。</Remark>\\n            <Name>某协同模型</Name>\\n        </PageData>\\n        <Size>1</Size>\\n        <Num>1</Num>\\n        <Total>1</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListMPCoSPhaseGroupResponse>","errorExample":""}]',
            'title' => '查询协同模型列表',
            'summary' => '查询业务链所属的协同模型列表。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'ListMPCoSPhaseHistory' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Num',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定显示返回结果中的第几页，最小取值是1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Size',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '383860792287****',
                    ],
                ],
                [
                    'name' => 'PhaseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '644208887511****',
                    ],
                ],
                [
                    'name' => 'DataKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '32bfce96b4e2f9bec0f2ea5cc2f14ace1486cc146d5832d3a84e5332fe89****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间。毫秒级时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '1606379090866',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间。毫秒级时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '1606389090866',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Num' => [
                                        'description' => '页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Total' => [
                                        'description' => '总条数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'Size' => [
                                        'description' => '每页数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'PageData' => [
                                        'description' => '数据项。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ProductKey' => [
                                                    'description' => 'IoT数据源组ProductKey。',
                                                    'type' => 'string',
                                                    'example' => 'hfoi7GQ****',
                                                ],
                                                'PreviousHash' => [
                                                    'description' => '前一区块摘要。',
                                                    'type' => 'string',
                                                    'example' => '2d921a60bf7cc0e9722a8bcc0e909e62d92120c0c749ff332af402036f7d****',
                                                ],
                                                'DataHash' => [
                                                    'description' => '数据摘要。',
                                                    'type' => 'string',
                                                    'example' => '9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e972****',
                                                ],
                                                'DataSeq' => [
                                                    'description' => '数据序列号。',
                                                    'type' => 'string',
                                                    'example' => 'be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****',
                                                ],
                                                'DataValue' => [
                                                    'description' => '上链值。',
                                                    'type' => 'string',
                                                    'example' => '某公司业务数据。',
                                                ],
                                                'Timestamp' => [
                                                    'description' => '上链时间。毫秒级时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1606389620000',
                                                ],
                                                'TransactionHash' => [
                                                    'description' => '交易摘要。',
                                                    'type' => 'string',
                                                    'example' => 'bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb276d****',
                                                ],
                                                'BlockHash' => [
                                                    'description' => '区块摘要。',
                                                    'type' => 'string',
                                                    'example' => '5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c4****',
                                                ],
                                                'BlockNumber' => [
                                                    'description' => '区块高度。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '9852',
                                                ],
                                                'IotId' => [
                                                    'description' => 'IoT设备ID。',
                                                    'type' => 'string',
                                                    'example' => 'DFA7B98AD494FB98A491****',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 10,\\n    \\"Size\\": 2,\\n    \\"PageData\\": [\\n      {\\n        \\"ProductKey\\": \\"hfoi7GQ****\\",\\n        \\"PreviousHash\\": \\"2d921a60bf7cc0e9722a8bcc0e909e62d92120c0c749ff332af402036f7d****\\",\\n        \\"DataHash\\": \\"9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e972****\\",\\n        \\"DataSeq\\": \\"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****\\",\\n        \\"DataValue\\": \\"某公司业务数据。\\",\\n        \\"Timestamp\\": 1606389620000,\\n        \\"TransactionHash\\": \\"bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb276d****\\",\\n        \\"BlockHash\\": \\"5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c4****\\",\\n        \\"BlockNumber\\": 9852,\\n        \\"IotId\\": \\"DFA7B98AD494FB98A491****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListMPCoSPhaseHistoryResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <IotId>DFA7B98AD494FB98A492****</IotId>\\n            <DataValue>某公司业务数据。</DataValue>\\n            <BlockHash>5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c5****</BlockHash>\\n            <DataSeq>be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a6****</DataSeq>\\n            <TransactionHash>bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb2764****</TransactionHash>\\n            <PreviousHash>2d921a60bf7cc0e9722a8bcc0e909e62d92120c0c749ff332af402036f77****</PreviousHash>\\n            <BlockNumber>9852</BlockNumber>\\n            <Timestamp>1606389620000</Timestamp>\\n            <ProductKey>hfoi7G7****</ProductKey>\\n            <DataHash>9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e978****</DataHash>\\n        </PageData>\\n        <PageData>\\n            <IotId>DFA7B98AD494FB98A491****</IotId>\\n            <DataValue>某公司业务数据。</DataValue>\\n            <BlockHash>5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c4****</BlockHash>\\n            <DataSeq>be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****</DataSeq>\\n            <TransactionHash>bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb276d****</TransactionHash>\\n            <PreviousHash>2d921a60bf7cc0e9722a8bcc0e909e62d92120c0c749ff332af402036f7d****</PreviousHash>\\n            <BlockNumber>9852</BlockNumber>\\n            <Timestamp>1606389630000</Timestamp>\\n            <ProductKey>hfoi7GQ****</ProductKey>\\n            <DataHash>9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e972****</DataHash>\\n        </PageData>\\n        <Size>2</Size>\\n        <Num>1</Num>\\n        <Total>10</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListMPCoSPhaseHistoryResponse>","errorExample":""}]',
            'title' => '查询历史数据列表',
            'summary' => '通过阶段标识，数据唯一标识，起始时间，结束时间，查询数据列表。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'ApplyDataModelConfigInfo' => [
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
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT数据源组ProductKey。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HB5jyvZWz******g',
                    ],
                ],
                [
                    'name' => 'DataModelCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DF3K',
                    ],
                ],
                [
                    'name' => 'Configuration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模型配置信息。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{\\"productKey\\":\\"a1lPbm9Yq0v\\"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '180E5D71-FF24-5E87-9746-3DA837E686FE',
                            ],
                            'Success' => [
                                'description' => '是否成功。-**true**：是。-**false**：否。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"180E5D71-FF24-5E87-9746-3DA837E686FE\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '应用数据模型配置',
            'summary' => '应用自定义数据模型配置信息。',
        ],
        'AttachData' => [
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
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据Key唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0001_HB5jyvZWzwcM****_0X**_80aa976ac4d64a97bd45c71a509d****',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据Value。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '某公司某业务数据。',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链编码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'HB5jyvZWzwcM****',
                    ],
                ],
                [
                    'name' => 'BusinessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '1. 用户业务ID，同一个Key，业务ID必须唯一。格式为64字符，合法字符范围\\[0-9,a-f,A-F\\]。'."\n"
                            .'2. 如果不包含该参数，则返回当前Key最新数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '000000000000000000000000000000000000000000000000000000000001****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AttachDataResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</AttachDataResponse>","errorExample":""}]',
            'title' => '数据多次上传',
            'summary' => '用于向IoT区块链可信应用系统多次上传数据。',
            'description' => '- 同一个数据Key，可以多次使用AttachData上传数据。'."\n"
                .'- 调用成功后，系统会进行异步处理，稍后需使用GetData查询数据，进行确认。'."\n"
                .'- 同一个数据Key多次上传，后续上传数据需等待前序数据确认上链完成。'."\n"
                ."\n"
                .'**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'AttachDataWithSignature' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据Key唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0001_HB5jyvZWzwcM****_0X**_80aa976ac4d64a97bd45c71a509d****',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据value。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '某公司某业务数据。',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链编码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'HB5jyvZWzwcM****',
                    ],
                ],
                [
                    'name' => 'IotAuthType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT认证方式。'."\n"
                            .'**ID2**：阿里云Link ID²。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ID2',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '183329761572****',
                    ],
                ],
                [
                    'name' => 'IotIdServiceProvider',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备服务提供方标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'g9R4ghe****',
                    ],
                ],
                [
                    'name' => 'IotDataDigest',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT数据Value摘要。'."\n"
                            .'1. Value数据UTF-8编码。'."\n"
                            .'2. SHA256运算，结果为32字节数据。'."\n"
                            .'3. 转换为64字节字符串格式（大写字符）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '94894989498FDDABD51698BD1A49BF1AFB0AA94FAA8DB65A689164BEED******',
                    ],
                ],
                [
                    'name' => 'IotSignature',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备数据签名。'."\n"
                            .'使用 IoT 设备安全 SDK 进行签名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2~2~192ADFB498AA****~1579198300000~J8E891NAgAhwHBHm8******/hnswr698HSb09ahS8709bn9s03jg98u4jg******',
                    ],
                ],
                [
                    'name' => 'IotIdSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备服务提供方。'."\n"
                            .'- **1**：开放平台。'."\n"
                            .'- **2**：物联网平台。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'BusinessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '1. 用户业务ID，同一个Key，业务ID必须唯一。格式为64字符，合法字符范围\\[0-9,a-f,A-F\\]。'."\n"
                            .'2. 如果不包含该参数，则返回当前Key最新数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '000000000000000000000000000000000000000000000000000000000001****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AttachDataWithSignatureResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</AttachDataWithSignatureResponse>","errorExample":""}]',
            'title' => '设备数据多次上传',
            'summary' => '用于向 IoT区块链可信应用系统多次上传数据，并且上传的数据必须由 IoT设备端进行签名。',
            'description' => '- 同一个数据Key，可以多次使用AttachDataWithSignature上传数据。'."\n"
                .'- 调用成功后，系统会进行异步处理，稍后需使用GetData查询数据，进行确认。'."\n"
                .'- 同一个数据Key多次上传，后续上传数据需等待前序数据确认上链完成。'."\n"
                ."\n"
                .'**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'SetData' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据Key唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0001_HB5jyvZWzwcMFSFg_0X58_80aa976ac4d64a97b******a509d4c0b',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据Value。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '某公司某业务数据。',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链编码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'HB5jyvZWz******g',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetDataResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</SetDataResponse>","errorExample":""}]',
            'title' => '数据上传',
            'summary' => '数据上传，该API用于向LTL上传数据。',
            'description' => '调用成功后，系统会进行异步处理，稍后需使用[GetData](~~195376~~)查询数据，进行确认。'."\n"
                ."\n"
                .'**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |'."\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'SetDataWithSignature' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据Key唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0001_HB5jyvZWzwcMFSFg_0X58_80aa976ac4d64a97bd45c71a509d****',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据Value。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '某公司某业务数据。',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链编码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'HB5jyvZWzwcM****',
                    ],
                ],
                [
                    'name' => 'IotAuthType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT认证方式。'."\n"
                            .'**ID2**：阿里云Link ID²。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ID2',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '00CCCC098D98F2BDD8BB****',
                    ],
                ],
                [
                    'name' => 'IotIdServiceProvider',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备服务提供方标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'kKpACh5****',
                    ],
                ],
                [
                    'name' => 'IotDataDigest',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT可信数据Value摘要：'."\n"
                            .'1.  Value数据UTF-8编码。'."\n"
                            .'2.  SHA256运算，结果为32字节数据。'."\n"
                            .'3.  转换为64字节字符串格式（大写字符）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '31A200471049AEA3B8459455B4447D05DD1290A875A17792F71D5550F048****',
                    ],
                ],
                [
                    'name' => 'IotSignature',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备数据签名。使用IoT设备安全SDK进行签名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '3~2~010253040257****~1599722505821~50sZwIXt9jtTTIoGAkEs4THSyCMghVVaYO1w2AcvQf0vm51MQYt0nfHUT7jQ****',
                    ],
                ],
                [
                    'name' => 'IotIdSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备服务提供方。'."\n"
                            .'- **1**：开放平台。'."\n"
                            .'- **2**：物联网平台。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetDataWithSignatureResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</SetDataWithSignatureResponse>","errorExample":""}]',
            'title' => '设备数据上传',
            'summary' => '用于上传数据，并且上传的数据必须由IoT设备端进行签名。',
            'description' => '调用成功后，系统会进行异步处理，稍后需使用[GetData](~~195376~~)查询数据，进行确认。'."\n"
                ."\n"
                .'**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'BatchUploadMPCoSPhaseDigestInfo' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '383860792287****',
                    ],
                ],
                [
                    'name' => 'PhaseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '644208887511****',
                    ],
                ],
                [
                    'name' => 'PhaseDataList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '阶段数据列表。详情请参见下表PhaseData。',
                        'type' => 'object',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[{"dataKey":"987823074334****","phaseData":"b42958ddf8a13dee78fcc906d0fb48e912ddc44b3c2c2759e4824b6e2d24****","dataSeq":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedDataList":[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]}]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchUploadMPCoSPhaseDigestInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</BatchUploadMPCoSPhaseDigestInfoResponse>","errorExample":""}]',
            'title' => '批量上传摘要数据',
            'summary' => '批量上传阶段数据的摘要信息到区块链，并同时可以绑定所关联的其它阶段数据。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => '**PhaseData**'."\n"
                .'|参数|类型|是否必选|示例值|描述|'."\n"
                .'|-|-|-|-|-|'."\n"
                .'|dataKey|String|是|987823074334****|数据唯一标识。|'."\n"
                .'|phaseData|String|是|b42958ddf8a13dee78fcc906d0fb48e912ddc44b3c2c2759e4824b6e2d24****|阶段数据。长度要求64字节。|'."\n"
                .'|dataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|数据序列号。|'."\n"
                .'|relatedDataList|List|否|[{"relatedPhaseId":"987823074334××××","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2××××","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a××××"}]|关联数据列表。详情请参见下表relatedData。|'."\n"
                ."\n"
                .'**relatedData**'."\n"
                .'|参数|类型|是否必选|示例值|描述|'."\n"
                .'|-|-|-|-|-|'."\n"
                .'|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。长度要求64字节。|'."\n"
                .'|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|'."\n"
                .'|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|'."\n"
                .'|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'BatchUploadMPCoSPhaseDigestInfoByDevice' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '383860792287****',
                    ],
                ],
                [
                    'name' => 'PhaseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '644208887511****',
                    ],
                ],
                [
                    'name' => 'PhaseDataList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '阶段数据列表。详情请参见下表PhaseData。',
                        'type' => 'object',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[{"dataKey":"987823074334****","phaseData":"b42958ddf8a13dee78fcc906d0fb48e912ddc44b3c2c2759e4824b6e2d24****","dataSeq":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedDataList":[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]}]',
                    ],
                ],
                [
                    'name' => 'IotAuthType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT认证方式。'."\n"
                            .'**ID2**：阿里云Link ID²。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ID2',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '183329761572****',
                    ],
                ],
                [
                    'name' => 'IotIdSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备服务提供方。'."\n"
                            .'- **1**：开放平台。'."\n"
                            .'- **2**：物联网平台。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'IotIdServiceProvider',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备服务提供方标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'g9R4ghe****',
                    ],
                ],
                [
                    'name' => 'IotDataDigest',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT可信数据Value摘要：'."\n"
                            .'1. Value数据UTF-8编码。'."\n"
                            .'2. SHA256运算，结果为32字节数据转换为64字节字符串格式（大写字符）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '94894989498FDDABD51698BD1A49BF1AFB0AA94FAA8DB65A689164BEED',
                    ],
                ],
                [
                    'name' => 'IotSignature',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备数据签名。'."\n"
                            .'使用IoT设备安全SDK进行签名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2~2~192ADFB498AA****~1579198300000~J8E891NAgAhwHBHm8******/hnswr698HSb09ahS8709bn9s03jg98u4jg******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchUploadMPCoSPhaseDigestInfoByDeviceResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</BatchUploadMPCoSPhaseDigestInfoByDeviceResponse>","errorExample":""}]',
            'title' => '设备批量上传摘要数据',
            'summary' => '通过IoT设备签名后，批量上传阶段数据的摘要信息到区块链，并同时可以绑定所关联的其它阶段数据。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => '**PhaseData**'."\n"
                .'|参数|类型|是否必选|示例值|描述|'."\n"
                .'|-|-|-|-|-|'."\n"
                .'|dataKey|String|是|987823074334****|数据唯一标识。|'."\n"
                .'|phaseData|String|是|b42958ddf8a13dee78fcc906d0fb48e912ddc44b3c2c2759e4824b6e2d24****|阶段数据。长度要求64字节。|'."\n"
                .'|dataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|数据序列号。|'."\n"
                .'|relatedDataList|List|否|[{"relatedPhaseId":"987823074334××××","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2××××","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a××××"}]|关联数据列表。详情请参见下表relatedData。|'."\n"
                ."\n"
                .'**relatedData**'."\n"
                .'|参数|类型|是否必选|示例值|描述|'."\n"
                .'|-|-|-|-|-|'."\n"
                .'|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。长度要求64字节。|'."\n"
                .'|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|'."\n"
                .'|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|'."\n"
                .'|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'BatchUploadMPCoSPhaseTextInfo' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '987823074334****',
                    ],
                ],
                [
                    'name' => 'PhaseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '196487512811****',
                    ],
                ],
                [
                    'name' => 'PhaseDataList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '阶段数据列表。详情请参见下表PhaseData。',
                        'type' => 'object',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchUploadMPCoSPhaseTextInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</BatchUploadMPCoSPhaseTextInfoResponse>","errorExample":""}]',
            'title' => '批量上传文本数据',
            'summary' => '批量上传文本类型的阶段数据到区块链，并同时可以绑定所关联的其它阶段数据。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => '**PhaseData**'."\n"
                .'|参数|类型|是否必选|示例值|描述|'."\n"
                .'|-|-|-|-|-|'."\n"
                .'|dataKey|String|是|987823074334****|数据唯一标识。|'."\n"
                .'|phaseData|String|是|某公司某业务数据|阶段数据。长度要求1~4096字节，一个中文字符占两位字符。|'."\n"
                .'|dataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|数据序列号。|'."\n"
                .'|relatedDataList|List|否|[{"relatedPhaseId":"987823074334××××","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2××××","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a××××"}]|关联数据列表。详情请参见下表relatedData。|'."\n"
                ."\n"
                .'**relatedData**'."\n"
                .'|参数|类型|是否必选|示例值|描述|'."\n"
                .'|-|-|-|-|-|'."\n"
                .'|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。|'."\n"
                .'|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|'."\n"
                .'|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|'."\n"
                .'|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'BatchUploadMPCoSPhaseTextInfoByDevice' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '383860792287****',
                    ],
                ],
                [
                    'name' => 'PhaseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '644208887511****',
                    ],
                ],
                [
                    'name' => 'PhaseDataList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '阶段数据列表。详情请参见下表PhaseData。',
                        'type' => 'object',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[{"dataKey":"987823074334****","phaseData":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","dataSeq":"某公司某业务数据。","relatedDataList":[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]}]',
                    ],
                ],
                [
                    'name' => 'IotAuthType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT认证方式。'."\n"
                            .'**ID2**：阿里云Link ID²。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ID2',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '183329761572****',
                    ],
                ],
                [
                    'name' => 'IotIdSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备服务提供方。'."\n"
                            .'- **1**：开放平台。'."\n"
                            .'- **2**：物联网平台。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'IotIdServiceProvider',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备服务提供方标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'g9R4ghe****',
                    ],
                ],
                [
                    'name' => 'IotDataDigest',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT可信数据Value摘要：'."\n"
                            .'1. Value数据UTF-8编码。'."\n"
                            .'2. SHA256运算，结果为32字节数据转换为64字节字符串格式（大写字符）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '94894989498FDDABD51698BD1A49BF1AFB0AA94FAA8DB65A689164BEED******',
                    ],
                ],
                [
                    'name' => 'IotSignature',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备数据签名。'."\n"
                            .'使用IoT设备安全SDK进行签名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2~2~192ADFB498AA****~1579198300000~J8E891NAgAhwHBHm8******/hnswr698HSb09ahS8709bn9s03jg98u4jg******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchUploadMPCoSPhaseTextInfoByDeviceResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</BatchUploadMPCoSPhaseTextInfoByDeviceResponse>","errorExample":""}]',
            'title' => '设备批量上传文本数据',
            'summary' => '通过IoT设备签名后，批量上传文本类型的阶段数据到区块链，并同时可以绑定所关联的其它阶段数据。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => '**PhaseData**'."\n"
                .'|参数|类型|是否必选|示例值|描述|'."\n"
                .'|-|-|-|-|-|'."\n"
                .'|dataKey|String|是|987823074334****|数据唯一标识。|'."\n"
                .'|phaseData|String|是|某公司某业务数据|阶段数据。|阶段数据。长度要求1~4096字节，一个中文字符占两位字符。|'."\n"
                .'|dataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|数据序列号。|'."\n"
                .'|relatedDataList|List|否|[{"relatedPhaseId":"987823074334××××","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2××××","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a××××"}]|关联数据列表。详情请参见下表relatedData。|'."\n"
                ."\n"
                .'**relatedData**'."\n"
                .'|参数|类型|是否必选|示例值|描述|'."\n"
                .'|-|-|-|-|-|'."\n"
                .'|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。长度要求64字节。|'."\n"
                .'|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|'."\n"
                .'|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|'."\n"
                .'|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'UploadMPCoSPhaseDigestInfo' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '383860792287****',
                    ],
                ],
                [
                    'name' => 'PhaseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '644208887511***',
                    ],
                ],
                [
                    'name' => 'DataKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '32bfce96b4e2f9bec0f2ea5cc2f14ace1486cc146d5832d3a84e5332fe89****',
                    ],
                ],
                [
                    'name' => 'DataSeq',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据序列号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****',
                    ],
                ],
                [
                    'name' => 'PhaseData',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段数据的SHA256摘要值，要求长度为64字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dee68c73bdead5f717fc25803236924c165d0a3c1728aa58cbf05b1473c2****',
                    ],
                ],
                [
                    'name' => 'RelatedDataList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '关联数据列表。详情请参见下表RelatedData。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UploadMPCoSPhaseDigestInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UploadMPCoSPhaseDigestInfoResponse>","errorExample":""}]',
            'title' => '摘要数据上传',
            'summary' => '上传阶段数据的摘要信息到区块链，并同时可以绑定所关联的其它阶段数据。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => '**RelatedData**'."\n"
                .'|参数|类型|是否必选|示例值|描述|'."\n"
                .'|-|-|-|-|-|'."\n"
                .'|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。长度要求64字节。|'."\n"
                .'|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|'."\n"
                .'|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|'."\n"
                .'|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'UploadMPCoSPhaseDigestInfoByDevice' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '383860792287****',
                    ],
                ],
                [
                    'name' => 'PhaseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '644208887511****',
                    ],
                ],
                [
                    'name' => 'DataKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '32bfce96b4e2f9bec0f2ea5cc2f14ace1486cc146d5832d3a84e5332fe89****',
                    ],
                ],
                [
                    'name' => 'DataSeq',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据序列号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****',
                    ],
                ],
                [
                    'name' => 'PhaseData',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段数据的SHA256摘要值，要求长度为64字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ebf44d78ae75288d7d0057a5ebf44d78a6b86d04502dcbda643c4d24ff2a****',
                    ],
                ],
                [
                    'name' => 'RelatedDataList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '关联数据列表。详情请参见下表RelatedData。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]',
                    ],
                ],
                [
                    'name' => 'IotAuthType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT认证方式。'."\n"
                            .'**ID2**：阿里云Link ID²。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ID2',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '183329761572****',
                    ],
                ],
                [
                    'name' => 'IotIdSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备服务提供方。'."\n"
                            .'- **1**：开放平台。'."\n"
                            .'- **2**：物联网平台。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'IotIdServiceProvider',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备服务提供方标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'g9R4ghe****',
                    ],
                ],
                [
                    'name' => 'IotDataDigest',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT可信数据Value摘要。'."\n"
                            .'1. Value数据UTF-8编码。'."\n"
                            .'2. SHA256运算，结果为32字节数据转换为64字节字符串格式（大写字符）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '94894989498FDDABD51698BD1A49BF1AFB0AA94FAA8DB65A689164BEED******',
                    ],
                ],
                [
                    'name' => 'IotSignature',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备数据签名。'."\n"
                            .'使用IoT设备安全SDK进行签名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2~2~192ADFB498AA****~1579198300000~J8E891NAgAhwHBHm8******/hnswr698HSb09ahS8709bn9s03jg98u4jg******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UploadMPCoSPhaseDigestInfoByDeviceResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UploadMPCoSPhaseDigestInfoByDeviceResponse>","errorExample":""}]',
            'title' => '设备摘要数据上传',
            'summary' => '通过IoT设备签名后，上传阶段数据的摘要信息到区块链，并同时可以绑定所关联的其它阶段数据。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' **RelatedData**'."\n"
                .'|参数|类型|是否必选|示例值|描述|'."\n"
                .'|-|-|-|-|-|'."\n"
                .'|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。长度要求64字节。|'."\n"
                .'|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|'."\n"
                .'|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|'."\n"
                .'|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'UploadMPCoSPhaseTextInfo' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '383860792287****',
                    ],
                ],
                [
                    'name' => 'PhaseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '196487512811****',
                    ],
                ],
                [
                    'name' => 'DataKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '32bfce96b4e2f9bec0f2ea5cc2f14ace1486cc146d5832d3a84e5332fe89****',
                    ],
                ],
                [
                    'name' => 'DataSeq',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据序列号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****',
                    ],
                ],
                [
                    'name' => 'PhaseData',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段数据。长度要求1~4096字节，一个中文字符占两位字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '987823074334****',
                    ],
                ],
                [
                    'name' => 'RelatedDataList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '关联数据列表。详情请参见下表RelatedData。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq ":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UploadMPCoSPhaseTextInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UploadMPCoSPhaseTextInfoResponse>","errorExample":""}]',
            'title' => '文本数据上传',
            'summary' => '上传文本类型的阶段数据到区块链，并同时可以绑定所关联的其它阶段数据。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |'."\n",
            'requestParamsDescription' => '**RelatedData**'."\n"
                .'|参数|类型|是否必选|示例值|描述|'."\n"
                .'|-|-|-|-|-|'."\n"
                .'|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。长度要求64字节。|'."\n"
                .'|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|'."\n"
                .'|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|'."\n"
                .'|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'UploadMPCoSPhaseTextInfoByDevice' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'PhaseGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '协同模型标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '987823074334****',
                    ],
                ],
                [
                    'name' => 'PhaseId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '644208887511****',
                    ],
                ],
                [
                    'name' => 'DataKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '32bfce96b4e2f9bec0f2ea5cc2f14ace1486cc146d5832d3a84e5332fe89****',
                    ],
                ],
                [
                    'name' => 'DataSeq',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据序列号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****',
                    ],
                ],
                [
                    'name' => 'PhaseData',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阶段数据。长度要求1~4096字节，一个中文字符占两位字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '某公司某业务数据。',
                    ],
                ],
                [
                    'name' => 'RelatedDataList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '关联数据列表。详情请参见下表RelatedData。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]',
                    ],
                ],
                [
                    'name' => 'IotAuthType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT认证方式。'."\n"
                            .'**ID2**：阿里云Link ID²。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ID2',
                    ],
                ],
                [
                    'name' => 'IotId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '183329761572****',
                    ],
                ],
                [
                    'name' => 'IotIdSource',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备服务提供方。'."\n"
                            .'- **1**：开放平台。'."\n"
                            .'- **2**：物联网平台。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'IotIdServiceProvider',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备服务提供方标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '94894989498FDDABD51698BD1A49BF1AFB0AA94FAA8DB65A689164BEED******',
                    ],
                ],
                [
                    'name' => 'IotDataDigest',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT可信数据Value摘要：'."\n"
                            .'1：Value数据UTF-8编码。'."\n"
                            .'2：SHA256运算，结果为32字节数据转换为64字节字符串格式（大写字符）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '94894989498FDDABD51698BD1A49BF1AFB0AA94FAA8DB65A689164BEED******',
                    ],
                ],
                [
                    'name' => 'IotSignature',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT设备数据签名。'."\n"
                            .'使用IoT设备安全SDK进行签名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2~2~192ADFB498AA****~1579198300000~J8E891NAgAhwHBHm8******/hnswr698HSb09ahS8709bn9s03jg98u4jg******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '多余参数，请忽略。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UploadMPCoSPhaseTextInfoByDeviceResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UploadMPCoSPhaseTextInfoByDeviceResponse>","errorExample":""}]',
            'title' => '设备文本数据上传',
            'summary' => '通过IoT设备签名后，上传文本类型的阶段数据到区块链，并同时可以绑定所关联的其它阶段数据。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' **RelatedData**'."\n"
                .'|参数|类型|是否必选|示例值|描述|'."\n"
                .'|-|-|-|-|-|'."\n"
                .'|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。|'."\n"
                .'|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|'."\n"
                .'|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|'."\n"
                .'|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'DescribeCapacityInfo' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'object',
                                'properties' => [
                                    'CountQuota' => [
                                        'description' => '该业务链的条数配额。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10000000',
                                    ],
                                    'CapacityQuota' => [
                                        'description' => '该业务链的容量配额（单位：字节）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '800000000000',
                                    ],
                                    'UsedCount' => [
                                        'description' => '该业务链已使用条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '30000',
                                    ],
                                    'UsedCapacity' => [
                                        'description' => '该业务链已使用容量（单位：字节）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '870000000',
                                    ],
                                    'MemberUsedCapacity' => [
                                        'description' => '当前用户在该业务链已使用的容量（单位：字节）。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '70000000',
                                    ],
                                    'MemberUsedCount' => [
                                        'description' => '当前用户该业务链已使用的条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '26666',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"CountQuota\\": 10000000,\\n    \\"CapacityQuota\\": 800000000000,\\n    \\"UsedCount\\": 30000,\\n    \\"UsedCapacity\\": 870000000,\\n    \\"MemberUsedCapacity\\": 70000000,\\n    \\"MemberUsedCount\\": 26666\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeCapacityInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <CountQuota>10000000</CountQuota>\\n        <MemberUsedCapacity>70000000</MemberUsedCapacity>\\n        <CapacityQuota>800000000000</CapacityQuota>\\n        <UsedCapacity>870000000</UsedCapacity>\\n        <UsedCount>30000</UsedCount>\\n        <MemberUsedCount>26666</MemberUsedCount>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DescribeCapacityInfoResponse>","errorExample":""}]',
            'title' => '查询容量统计信息',
            'summary' => '查询资源容量统计信息。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'DescribeMemberCapacityInfo' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'UsedCapacity' => [
                                            'description' => '用户已使用该业务链容量（单位：字节）。',
                                            'type' => 'string',
                                            'example' => '70000000',
                                        ],
                                        'MemberId' => [
                                            'description' => '账户标识。',
                                            'type' => 'string',
                                            'example' => '717534457003****',
                                        ],
                                        'MemberName' => [
                                            'description' => '账户名称。',
                                            'type' => 'string',
                                            'example' => '张三',
                                        ],
                                        'UsedCount' => [
                                            'description' => '用户已使用该业务链条数。',
                                            'type' => 'string',
                                            'example' => '26666',
                                        ],
                                        'MemberUid' => [
                                            'description' => '阿里云RAM用户UID。',
                                            'type' => 'string',
                                            'example' => '19720316234381****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"UsedCapacity\\": \\"70000000\\",\\n      \\"MemberId\\": \\"717534457003****\\",\\n      \\"MemberName\\": \\"张三\\",\\n      \\"UsedCount\\": \\"26666\\",\\n      \\"MemberUid\\": \\"19720316234381****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeMemberCapacityInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <MemberId>717534457003****</MemberId>\\n        <UsedCapacity>70000000</UsedCapacity>\\n        <MemberName>张三</MemberName>\\n        <MemberUid>19720316234381****</MemberUid>\\n        <UsedCount>26666</UsedCount>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DescribeMemberCapacityInfoResponse>","errorExample":""}]',
            'title' => '查询使用方容量信息',
            'summary' => '查询使用方容量统计信息。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'DescribeResourceInfo' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '业务链状态。'."\n"
                                            .'- **NORMAL**：正常。'."\n"
                                            .'- **EXPIRED**：已过期。',
                                        'type' => 'string',
                                        'example' => 'NORMAL',
                                    ],
                                    'EffectiveTime' => [
                                        'description' => '开通时间。毫秒级时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1586125838680',
                                    ],
                                    'AuthorizeType' => [
                                        'description' => '授权类型。'."\n"
                                            .'- **企业版**：企业版套餐。'."\n"
                                            .'- **标准版**：标准版套餐。',
                                        'type' => 'string',
                                        'example' => '标准版',
                                    ],
                                    'ExpiredTime' => [
                                        'description' => '到期时间。毫秒级时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1666125838680',
                                    ],
                                    'Region' => [
                                        'description' => '地域。',
                                        'type' => 'string',
                                        'example' => 'cn-shanghai',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Status\\": \\"NORMAL\\",\\n    \\"EffectiveTime\\": 1586125838680,\\n    \\"AuthorizeType\\": \\"标准版\\",\\n    \\"ExpiredTime\\": 1666125838680,\\n    \\"Region\\": \\"cn-shanghai\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeResourceInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <Status>NORMAL</Status>\\n        <AuthorizeType>标准版</AuthorizeType>\\n        <EffectiveTime>1586125838680</EffectiveTime>\\n        <ExpiredTime>1666125838680</ExpiredTime>\\n        <Region>cn-shanghai</Region>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DescribeResourceInfoResponse>","errorExample":""}]',
            'title' => '查询资源信息',
            'summary' => '查询资源开通信息。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'GetBlockChainInfo' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据Key唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0001_HB5jyvZWzwcM****_0X**_80aa976ac4d64a97bd45c71a509d****',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链编码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'HB5jyvZWzwcM****',
                    ],
                ],
                [
                    'name' => 'BusinessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '1. 用户业务ID，同一个Key，业务ID必须唯一。格式为64字符，合法字符范围\\[0-9,a-f,A-F\\]。'."\n"
                            .'2. 如果不包含该参数，则返回当前Key最新数据。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '000000000000000000000000000000000000000000000000000000000001****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误消息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '返回唯一标识key对应的区块链元数据信息（JSON格式）。详情请参见下表blockChainInfo。',
                                'type' => 'string',
                                'example' => '{"blockChainInfo":{"chainName":"某公司业务链","blockHeight":48971,"transactionHash":"ea8752787f79be085d9ee244a1b9ed0deb198903a14b9b1a6800b20fbf0d****","iotId":"1BE0F46275B17147E7D2****","endorsementNames":"某公司,某某公司","timestamp":"1591676312000","blockHash":"d07bdaf2736c4d07bdaf2736e5faae508d77ceb82c0e9722a8bcca0e909e****","previousHash":"c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4d07b****","dataHash":"21dc1288bcc0e2730ae486fa04fdeb828ae5c21dc128c525a655972e5faa****"}}',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"{\\\\\\"blockChainInfo\\\\\\":{\\\\\\"chainName\\\\\\":\\\\\\"某公司业务链\\\\\\",\\\\\\"blockHeight\\\\\\":48971,\\\\\\"transactionHash\\\\\\":\\\\\\"ea8752787f79be085d9ee244a1b9ed0deb198903a14b9b1a6800b20fbf0d****\\\\\\",\\\\\\"iotId\\\\\\":\\\\\\"1BE0F46275B17147E7D2****\\\\\\",\\\\\\"endorsementNames\\\\\\":\\\\\\"某公司,某某公司\\\\\\",\\\\\\"timestamp\\\\\\":\\\\\\"1591676312000\\\\\\",\\\\\\"blockHash\\\\\\":\\\\\\"d07bdaf2736c4d07bdaf2736e5faae508d77ceb82c0e9722a8bcca0e909e****\\\\\\",\\\\\\"previousHash\\\\\\":\\\\\\"c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4d07b****\\\\\\",\\\\\\"dataHash\\\\\\":\\\\\\"21dc1288bcc0e2730ae486fa04fdeb828ae5c21dc128c525a655972e5faa****\\\\\\"}}\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetBlockChainInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>{\\"blockChainInfo\\":{\\"chainName\\":\\"某公司业务链\\",\\"blockHeight\\":48971,\\"transactionHash\\":\\"ea8752787f79be085d9ee244a1b9ed0deb198903a14b9b1a6800b20fbf0d****\\",\\"iotId\\":\\"1BE0F46275B17147E7D2****\\",\\"endorsementNames\\":\\"某公司,某某公司\\",\\"timestamp\\":\\"1591676312000\\",\\"blockHash\\":\\"d07bdaf2736c4d07bdaf2736e5faae508d77ceb82c0e9722a8bcca0e909e****\\",\\"previousHash\\":\\"c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4d07b****\\",\\"dataHash\\":\\"21dc1288bcc0e2730ae486fa04fdeb828ae5c21dc128c525a655972e5faa****\\"}}</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetBlockChainInfoResponse>","errorExample":""}]',
            'title' => '查询数据区块链元信息',
            'summary' => '用于查询上传数据的区块链元信息。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '**blockChainInfo**'."\n"
                .'|参数|类型|示例值|描述|'."\n"
                .'|-|-|-|-|'."\n"
                .'|chainName|String|某公司业务链|存储区块链名称。|'."\n"
                .'|blockHeight|Long|48971|区块链存证区块号。|'."\n"
                .'|transactionHash|String|ea8752787f79be085d9ee244a1b9ed0deb198903a14b9b1a6800b20f********|交易哈希。|'."\n"
                .'|iotId|String|1BE0F46275B17147E7D2****|IoT设备ID。|'."\n"
                .'|endorsementNames|String|某公司,某某公司|区块链背书节点名称。|'."\n"
                .'|timestamp|String|1591676312000|存证时间。毫秒级时间戳。|'."\n"
                .'|blockHash|String|d07bdaf2736c4d07bdaf2736e5faae508d77ceb82c0e9722a8bcca0e********|区块哈希。|'."\n"
                .'|previousHash|String|c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4********|上一区块哈希。|'."\n"
                .'|dataHash|String|21dc1288bcc0e2730ae486fa04fdeb828ae5c21dc128c525a655972e********|数据哈希。|',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'GetData' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据Key唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'HB5jyvZWzw******',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链编码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0001_HB5jyvZWzwcMFSFg_0X58_80aa976ac4d64a97b******a509d4c0b',
                    ],
                ],
                [
                    'name' => 'BusinessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '1. 用户业务ID，同一个Key，业务ID必须唯一。格式为64字符，合法字符范围\\[0-9,a-f,A-F\\]。'."\n"
                            .'2. 如果不包含该参数，则返回当前Key最新数据。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '000000000000000000000000000000000000000000000000000000000001****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '返回数据Key对应的Value数据。',
                                'type' => 'string',
                                'example' => '某业务数据。',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"某业务数据。\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetDataResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>某业务数据。</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetDataResponse>","errorExample":""}]',
            'title' => '查询数据',
            'summary' => '用于确认之前上传的数据已处理成功。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'GetDataModelConfigInfo' => [
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
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'api版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IoT数据源组ProductKey。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HB5jyvZWzwcM****',
                    ],
                ],
                [
                    'name' => 'DataModelCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据模型编码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DF3K',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误消息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'RequestID-1638240165139',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。-**true**：调用成功，但不代表调用的服务器端口和协议不存在。-**false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"{}\\",\\n  \\"RequestId\\": \\"RequestID-1638240165139\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '查询模型配置',
            'summary' => '用户查询自定义数据模型配置信息。',
        ],
        'GetHistoryDataCount' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据Key唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0001_HB5jyvZWzwcM****_0X**_80aa976ac4d64a97bd45c71a509d****',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链编码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'HB5jyvZWzwcM****',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '起始时间戳。毫秒级时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9594629196518',
                        'minimum' => '0',
                        'example' => '1608010000000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间戳。毫秒级时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9594629196518',
                        'minimum' => '0',
                        'example' => '1608019800000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'Data' => [
                                'description' => '返回Key对应的记录条数。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"10\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetHistoryDataCountResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>10</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetHistoryDataCountResponse>","errorExample":""}]',
            'title' => '查询历史数据条数',
            'summary' => '历史数据数量查询，该API用于从 IoT区块链可信应用系统查询历史数据条数 。',
            'description' => '> 若不传时间戳，则返回所有历史数据的数量。'."\n"
                ."\n"
                .'**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'GetHistoryDataList' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Key',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据Key唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0001_HB5jyvZWzwcM****_0X**_80aa976ac4d64a97bd45c71a509d****',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链编码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'HB5jyvZWzwcM****',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定显示返回结果中的第几页，最小取值是1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '10000000',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '起始时间戳。毫秒级时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9594629196518',
                        'minimum' => '0',
                        'example' => '1608010000000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间戳。毫秒级时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9594629196518',
                        'minimum' => '0',
                        'example' => '1608019800000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'Data' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '返回Key对应的所有Value数据列表(JSON格式)。',
                                            'type' => 'object',
                                            'example' => '[{"chainName":"PS-**","code":"9***","blockHeight":"605350","businessId":"129297272256****","totalCount":"2","value":"某公司业务数据。","transactionHash":"ba2fe24cbe23816bdbb18ad037dd5e5f58468cb3ad345e456d106308ed37****","seq":"1","timestamp":"1608005018000"},{"chainName":"PS-**","code":"9***","blockHeight":"605349","businessId":"129297272258****","totalCount":"2","value":"某公司业务数据。","transactionHash":"18440d577e7d77a5d423eee4495902fb29073a904786ee01babc869815c9****","seq":"2","timestamp":"1608003040000"}]',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Data\\": [\\n      \\"[{\\\\\\"chainName\\\\\\":\\\\\\"PS-**\\\\\\",\\\\\\"code\\\\\\":\\\\\\"9***\\\\\\",\\\\\\"blockHeight\\\\\\":\\\\\\"605350\\\\\\",\\\\\\"businessId\\\\\\":\\\\\\"129297272256****\\\\\\",\\\\\\"totalCount\\\\\\":\\\\\\"2\\\\\\",\\\\\\"value\\\\\\":\\\\\\"某公司业务数据。\\\\\\",\\\\\\"transactionHash\\\\\\":\\\\\\"ba2fe24cbe23816bdbb18ad037dd5e5f58468cb3ad345e456d106308ed37****\\\\\\",\\\\\\"seq\\\\\\":\\\\\\"1\\\\\\",\\\\\\"timestamp\\\\\\":\\\\\\"1608005018000\\\\\\"},{\\\\\\"chainName\\\\\\":\\\\\\"PS-**\\\\\\",\\\\\\"code\\\\\\":\\\\\\"9***\\\\\\",\\\\\\"blockHeight\\\\\\":\\\\\\"605349\\\\\\",\\\\\\"businessId\\\\\\":\\\\\\"129297272258****\\\\\\",\\\\\\"totalCount\\\\\\":\\\\\\"2\\\\\\",\\\\\\"value\\\\\\":\\\\\\"某公司业务数据。\\\\\\",\\\\\\"transactionHash\\\\\\":\\\\\\"18440d577e7d77a5d423eee4495902fb29073a904786ee01babc869815c9****\\\\\\",\\\\\\"seq\\\\\\":\\\\\\"2\\\\\\",\\\\\\"timestamp\\\\\\":\\\\\\"1608003040000\\\\\\"}]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetHistoryDataListResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <Data>[{\\"chainName\\":\\"PS-**\\",\\"code\\":\\"9***\\",\\"blockHeight\\":\\"605350\\",\\"businessId\\":\\"129297272256****\\",\\"totalCount\\":\\"2\\",\\"value\\":\\"某公司业务数据。\\",\\"transactionHash\\":\\"ba2fe24cbe23816bdbb18ad037dd5e5f58468cb3ad345e456d106308ed37****\\",\\"seq\\":\\"1\\",\\"timestamp\\":\\"1608005018000\\"},{\\"chainName\\":\\"PS-**\\",\\"code\\":\\"9***\\",\\"blockHeight\\":\\"605349\\",\\"businessId\\":\\"129297272258****\\",\\"totalCount\\":\\"2\\",\\"value\\":\\"某公司业务数据。\\",\\"transactionHash\\":\\"18440d577e7d77a5d423eee4495902fb29073a904786ee01babc869815c9****\\",\\"seq\\":\\"2\\",\\"timestamp\\":\\"1608003040000\\"}]</Data>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetHistoryDataListResponse>","errorExample":""}]',
            'title' => '查询历史数据列表',
            'summary' => '历史数据查询，该API用于从 IoT区块链可信应用系统查询历史数据 。',
            'description' => '1. 当传递时间参数时开始时间和结束时间，最大查询区间为 30天 。'."\n"
                .'2. 当未传递时间参数时，限制数据量最大为500条，如超过该条数限制需添加时间戳参数方式查询。'."\n"
                ."\n\n"
                .'**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'ListDependentDataModels' => [
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
            'parameters' => [
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'api版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'ProductKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品的ProductKey。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'HB5jyvZWzwcM****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '响应状态描述。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'RequestID-1638239980855',
                            ],
                            'Success' => [
                                'description' => '是否成功。-**true**：表示是。-**false**：表示否。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'DataModelInfo' => [
                                        'description' => '响应内容。',
                                        'example' => '{}',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DataModelName' => [
                                                    'description' => '数据模型名称',
                                                    'type' => 'string',
                                                    'example' => '测算模型',
                                                ],
                                                'DataModelCode' => [
                                                    'description' => '数据模型编码',
                                                    'type' => 'string',
                                                    'example' => 'KI8D',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"RequestID-1638239980855\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"DataModelInfo\\": [\\n      {\\n        \\"DataModelName\\": \\"测算模型\\",\\n        \\"DataModelCode\\": \\"KI8D\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询自定义模型列表',
            'summary' => '用于查询自定义模型列表。',
        ],
        'ListMultiPartyCollaborationChain' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Num',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定显示返回结果中的第几页，最小取值是1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Size',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的业务链名称。'."\n"
                            ."\n"
                            .'> 不传则查询所有业务链。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '某业务链',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Num' => [
                                        'description' => '页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Total' => [
                                        'description' => '总条数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Size' => [
                                        'description' => '每页数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageData' => [
                                        'description' => '数据项。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => '业务链名称。',
                                                    'type' => 'string',
                                                    'example' => '某业务链',
                                                ],
                                                'Remark' => [
                                                    'description' => '业务链备注。',
                                                    'type' => 'string',
                                                    'example' => '某业务某服务',
                                                ],
                                                'RoleType' => [
                                                    'description' => '账号角色。'."\n"
                                                        .'- **ADMIN**：业务管理方。'."\n"
                                                        .'- **MEMBER**：业务使用方。',
                                                    'type' => 'string',
                                                    'example' => 'ADMIN',
                                                ],
                                                'BizChainId' => [
                                                    'description' => '业务链标识。',
                                                    'type' => 'string',
                                                    'example' => '489973087549****',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 1,\\n    \\"Size\\": 1,\\n    \\"PageData\\": [\\n      {\\n        \\"Name\\": \\"某业务链\\",\\n        \\"Remark\\": \\"某业务某服务\\",\\n        \\"RoleType\\": \\"ADMIN\\",\\n        \\"BizChainId\\": \\"489973087549****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListMultiPartyCollaborationChainResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <BizChainId>489973087549****</BizChainId>\\n            <RoleType>ADMIN</RoleType>\\n            <Remark>某业务某服务</Remark>\\n            <Name>某业务链</Name>\\n        </PageData>\\n        <Size>1</Size>\\n        <Num>1</Num>\\n        <Total>1</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListMultiPartyCollaborationChainResponse>","errorExample":""}]',
            'title' => '查询多方任务协同业务链列表',
            'summary' => '用于查询多方任务协同业务链列表。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'ListProofChain' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Num',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定显示返回结果中的第几页，最小取值是1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Size',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的业务链名称。'."\n"
                            ."\n"
                            .'> 不传则查询所有存证服务业务链。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '某业务链',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Num' => [
                                        'description' => '页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Total' => [
                                        'description' => '总条数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'Size' => [
                                        'description' => '每页数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'PageData' => [
                                        'description' => '数据项。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Remark' => [
                                                    'description' => '业务链备注。',
                                                    'type' => 'string',
                                                    'example' => '某业务链的备注信息。',
                                                ],
                                                'BizChainId' => [
                                                    'description' => '业务链标识。',
                                                    'type' => 'string',
                                                    'example' => '489973087549****',
                                                ],
                                                'RoleType' => [
                                                    'description' => '账号角色。'."\n"
                                                        .'- **ADMIN**：业务管理方。'."\n"
                                                        .'- **MEMBER**：业务使用方。',
                                                    'type' => 'string',
                                                    'example' => 'ADMIN',
                                                ],
                                                'BizChainCode' => [
                                                    'description' => '业务链编码。',
                                                    'type' => 'string',
                                                    'example' => 'SA7z9XkBMVPg****',
                                                ],
                                                'Name' => [
                                                    'description' => '业务链名称。',
                                                    'type' => 'string',
                                                    'example' => '某业务链',
                                                ],
                                                'DataTypeCode' => [
                                                    'description' => '类型编码。',
                                                    'type' => 'string',
                                                    'example' => 'B***',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 10,\\n    \\"Size\\": 2,\\n    \\"PageData\\": [\\n      {\\n        \\"Remark\\": \\"某业务链的备注信息。\\",\\n        \\"BizChainId\\": \\"489973087549****\\",\\n        \\"RoleType\\": \\"ADMIN\\",\\n        \\"BizChainCode\\": \\"SA7z9XkBMVPg****\\",\\n        \\"Name\\": \\"某业务链\\",\\n        \\"DataTypeCode\\": \\"B***\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListProofChainResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <RoleType>ADMIN</RoleType>\\n            <BizChainId>489973087549****</BizChainId>\\n            <DataTypeCode>B***</DataTypeCode>\\n            <BizChainCode>SA7z9XkBMVPg****</BizChainCode>\\n            <Remark>某业务链的备注信息。</Remark>\\n            <Name>某业务链</Name>\\n        </PageData>\\n        <PageData>\\n            <RoleType>ADMIN</RoleType>\\n            <BizChainId>489973087550****</BizChainId>\\n            <DataTypeCode>C***</DataTypeCode>\\n            <BizChainCode>SA7z9XkBMVPj****</BizChainCode>\\n            <Remark>某某业务链的备注信息。</Remark>\\n            <Name>某某业务链</Name>\\n        </PageData>\\n        <Size>2</Size>\\n        <Num>1</Num>\\n        <Total>10</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListProofChainResponse>","errorExample":""}]',
            'title' => '查询存证与溯源业务链列表',
            'summary' => '用于查询存证与溯源业务链列表。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | √      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
        'ListPSMemberDataTypeCode' => [
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
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API版本号，"1.0.0"。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1.0.0',
                    ],
                ],
                [
                    'name' => 'Num',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定显示返回结果中的第几页，最小取值是1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Size',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'BizChainId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务链标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '489973087549****',
                    ],
                ],
                [
                    'name' => 'MemberUid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要查询的阿里云RAM用户UID。'."\n"
                            .'> 不传则查询所有阿里云RAM用户UID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '19720316234381****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '响应状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '调用失败时，返回的出错信息。',
                                'type' => 'string',
                                'example' => 'The system is busy. Please try again later.',
                            ],
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应内容。',
                                'type' => 'object',
                                'properties' => [
                                    'Num' => [
                                        'description' => '页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Total' => [
                                        'description' => '总条数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'Size' => [
                                        'description' => '每页数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'PageData' => [
                                        'description' => '数据项。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'MemberId' => [
                                                    'description' => '账户标识。',
                                                    'type' => 'string',
                                                    'example' => '717534457003****',
                                                ],
                                                'DataTypeCode' => [
                                                    'description' => '存证类型编码。',
                                                    'type' => 'string',
                                                    'example' => 'E***',
                                                ],
                                                'MemberName' => [
                                                    'description' => '账户名称。',
                                                    'type' => 'string',
                                                    'example' => '某某公司账户',
                                                ],
                                                'MemberUid' => [
                                                    'description' => '阿里云RAM用户UID。',
                                                    'type' => 'string',
                                                    'example' => '19720316234381****',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SYSTEMERROR',
                        'errorMessage' => 'The system is busy. Please try again later.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 10,\\n    \\"Size\\": 2,\\n    \\"PageData\\": [\\n      {\\n        \\"MemberId\\": \\"717534457003****\\",\\n        \\"DataTypeCode\\": \\"E***\\",\\n        \\"MemberName\\": \\"某某公司账户\\",\\n        \\"MemberUid\\": \\"19720316234381****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListPSMemberDataTypeCodeResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <MemberId>717534457003****</MemberId>\\n            <MemberName>某某公司账户</MemberName>\\n            <MemberUid>19720316234381****</MemberUid>\\n            <DataTypeCode>E***</DataTypeCode>\\n        </PageData>\\n        <PageData>\\n            <MemberId>717534457005****</MemberId>\\n            <MemberName>某公司账户</MemberName>\\n            <MemberUid>19720316234382****</MemberUid>\\n            <DataTypeCode>D***</DataTypeCode>\\n        </PageData>\\n        <Size>2</Size>\\n        <Num>1</Num>\\n        <Total>10</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListPSMemberDataTypeCodeResponse>","errorExample":""}]',
            'title' => '查询接入方类型编码',
            'summary' => '查询接入方账号下存证类型编码。',
            'description' => '**可访问账号：**'."\n"
                .'| 业务管理方        | 业务使用方    |'."\n"
                .'| :--------:   | :-----:   |'."\n"
                .'| √       | ×      |',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '## 错误码'."\n"
                .'错误码详细信息，请参见[错误码](~~184711~~)。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote-nebula-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'ltl.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'ltl.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'ltl.cn-shanghai.aliyuncs.com',
        ],
    ],
];
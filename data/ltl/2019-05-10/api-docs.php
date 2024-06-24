<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'ltl',
    'version' => '2019-05-10',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 65761,
      'title' => '使用方',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateMember',
        1 => 'LockMember',
        2 => 'ModifyMember',
        3 => 'UnLockMember',
        4 => 'ListMember',
      ),
    ),
    1 => 
    array (
      'id' => 65767,
      'title' => '设备',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RegisterDeviceGroup',
        1 => 'AuthorizeDevice',
        2 => 'AuthorizeDeviceGroup',
        3 => 'UnAuthorizeDevice',
        4 => 'UnAuthorizeDeviceGroup',
        5 => 'ListDevice',
        6 => 'ListDeviceGroup',
      ),
    ),
    2 => 
    array (
      'id' => 65775,
      'title' => 'MPCos',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateMPCoSPhase',
        1 => 'CreateMPCoSPhaseGroup',
        2 => 'ModifyMPCoSPhase',
        3 => 'ModifyMPCoSPhaseGroup',
        4 => 'UpdateMPCoSAuthorizedInfo',
        5 => 'DescribeMPCoSAuthorizedInfo',
        6 => 'DescribeMPCoSPhaseInfo',
        7 => 'DescribeMPCoSResourceInfo',
        8 => 'ListMPCoSPhase',
        9 => 'ListMPCoSPhaseGroup',
        10 => 'ListMPCoSPhaseHistory',
      ),
    ),
    3 => 
    array (
      'id' => 65787,
      'title' => '配置',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ApplyDataModelConfigInfo',
      ),
    ),
    4 => 
    array (
      'id' => 65789,
      'title' => '上传',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AttachData',
        1 => 'AttachDataWithSignature',
        2 => 'SetData',
        3 => 'SetDataWithSignature',
        4 => 'BatchUploadMPCoSPhaseDigestInfo',
        5 => 'BatchUploadMPCoSPhaseDigestInfoByDevice',
        6 => 'BatchUploadMPCoSPhaseTextInfo',
        7 => 'BatchUploadMPCoSPhaseTextInfoByDevice',
        8 => 'UploadMPCoSPhaseDigestInfo',
        9 => 'UploadMPCoSPhaseDigestInfoByDevice',
        10 => 'UploadMPCoSPhaseTextInfo',
        11 => 'UploadMPCoSPhaseTextInfoByDevice',
      ),
    ),
    5 => 
    array (
      'id' => 65802,
      'title' => '查询',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeCapacityInfo',
        1 => 'DescribeMemberCapacityInfo',
        2 => 'DescribeResourceInfo',
        3 => 'GetBlockChainInfo',
        4 => 'GetData',
        5 => 'GetDataModelConfigInfo',
        6 => 'GetHistoryDataCount',
        7 => 'GetHistoryDataList',
        8 => 'ListDependentDataModels',
        9 => 'ListMultiPartyCollaborationChain',
        10 => 'ListProofChain',
        11 => 'ListPSMemberDataTypeCode',
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
    'CreateMember' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云RAM用户UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '19720316234381****',
          ),
        ),
        3 => 
        array (
          'name' => 'MemberName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户名称。
长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '某公司',
          ),
        ),
        4 => 
        array (
          'name' => 'MemberContact',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户联系人。
长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '张三',
          ),
        ),
        5 => 
        array (
          'name' => 'MemberPhone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户电话。可包含数字和横线（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1381111****',
          ),
        ),
        6 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注信息。
长度限制为100字符。',
            'type' => 'string',
            'required' => false,
            'example' => '某应用某业务',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '账户标识。',
                'type' => 'string',
                'example' => '717534457003****',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"717534457003****\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateMemberResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>717534457003****</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateMemberResponse>","errorExample":""}]',
      'title' => '创建使用方',
      'summary' => '管理方创建使用方账户。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'LockMember' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '717534457003****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<LockMemberResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</LockMemberResponse>","errorExample":""}]',
      'title' => '锁定使用方账户',
      'summary' => '锁定使用方账户，锁定账户后则账户不能访问当前区块链。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'ModifyMember' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云RAM用户UID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '19720316234381****',
          ),
        ),
        3 => 
        array (
          'name' => 'MemberName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户名称。
长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '某公司',
          ),
        ),
        4 => 
        array (
          'name' => 'MemberContact',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户联系人。
长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '张三',
          ),
        ),
        5 => 
        array (
          'name' => 'MemberPhone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户联系电话。
长度限制为20字符，可以包含数字和横线（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1381111****',
          ),
        ),
        6 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注。
长度限制为100字符。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '某应用某业务',
          ),
        ),
        7 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '717534457003****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyMemberResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ModifyMemberResponse>","errorExample":""}]',
      'title' => '修改使用方',
      'summary' => '修改账户信息。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'UnLockMember' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '717534457003****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UnLockMemberResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UnLockMemberResponse>","errorExample":""}]',
      'title' => '解锁使用方',
      'summary' => '解锁使用方账户，解锁后账户可访问区块链。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'ListMember' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Num',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定显示返回结果中的第几页，最小取值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        4 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询阿里云RAM用户的UID。
> 不传则查询业务链下所有的阿里云RAM用户。',
            'type' => 'string',
            'required' => false,
            'example' => '19720316234381****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Num' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'Size' => 
                  array (
                    'description' => '每页数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'PageData' => 
                  array (
                    'description' => '数据项。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '账号锁定状态：
- **UNLOCK**：未锁定。
- **LOCK**：已锁定。',
                          'type' => 'string',
                          'example' => 'UNLOCK',
                        ),
                        'MemberName' => 
                        array (
                          'description' => '账户名称。',
                          'type' => 'string',
                          'example' => '某公司',
                        ),
                        'Remark' => 
                        array (
                          'description' => '备注。',
                          'type' => 'string',
                          'example' => '某应用某业务',
                        ),
                        'MemberUid' => 
                        array (
                          'description' => '阿里云RAM用户UID。',
                          'type' => 'string',
                          'example' => '19720316234381****',
                        ),
                        'MemberPhone' => 
                        array (
                          'description' => '账户电话。',
                          'type' => 'string',
                          'example' => '1381111****',
                        ),
                        'MemberId' => 
                        array (
                          'description' => '账户标识。',
                          'type' => 'string',
                          'example' => '717534457003****',
                        ),
                        'MemberContact' => 
                        array (
                          'description' => '账户联系人。',
                          'type' => 'string',
                          'example' => '张三',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 30,\\n    \\"Size\\": 2,\\n    \\"PageData\\": [\\n      {\\n        \\"Status\\": \\"UNLOCK\\",\\n        \\"MemberName\\": \\"某公司\\",\\n        \\"Remark\\": \\"某应用某业务\\",\\n        \\"MemberUid\\": \\"19720316234381****\\",\\n        \\"MemberPhone\\": \\"1381111****\\",\\n        \\"MemberId\\": \\"717534457003****\\",\\n        \\"MemberContact\\": \\"张三\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListMemberResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <Status>UNLOCK</Status>\\n            <MemberId>717534457003****</MemberId>\\n            <MemberContact>张三</MemberContact>\\n            <MemberUid>19720316234381****</MemberUid>\\n            <MemberPhone>1381111****</MemberPhone>\\n            <MemberName>某公司</MemberName>\\n            <Remark>某应用某业务</Remark>\\n        </PageData>\\n        <PageData>\\n            <Status>UNLOCK</Status>\\n            <MemberId>717534457003****</MemberId>\\n            <MemberContact>张三</MemberContact>\\n            <MemberUid>19720316234381****</MemberUid>\\n            <MemberPhone>1381111****</MemberPhone>\\n            <MemberName>某公司</MemberName>\\n            <Remark>某应用某业务</Remark>\\n        </PageData>\\n        <Size>2</Size>\\n        <Num>1</Num>\\n        <Total>30</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListMemberResponse>","errorExample":""}]',
      'title' => '查询使用方列表',
      'summary' => '查询使用方账户列表。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'RegisterDeviceGroup' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '981184817831****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT数据源组名称。
长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '某数据源组',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT数据源组ProductKey。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hKpHMh2****',
          ),
        ),
        4 => 
        array (
          'name' => 'AuthorizeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权类型。
**ID2**：阿里云Link ID²。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ID2',
          ),
        ),
        5 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注信息。长度限制为100字符。',
            'type' => 'string',
            'required' => false,
            'example' => '某数据源组的备注信息。',
          ),
        ),
      ),
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
                'description' => '响应状态。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => 'IoT数据源组标识。',
                'type' => 'string',
                'example' => '256399502929****',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"256399502929****\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RegisterDeviceGroupResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>256399502929****</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</RegisterDeviceGroupResponse>","errorExample":""}]',
      'title' => '注册数据源组',
      'summary' => '注册IoT数据源组。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'AuthorizeDevice' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '654887879557****',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT数据源组标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '475020454741****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AuthorizeDeviceResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</AuthorizeDeviceResponse>","errorExample":""}]',
      'title' => '授权设备',
      'summary' => '授权指定设备接入区块链权限。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'AuthorizeDeviceGroup' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT数据源组标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '475020454741****',
          ),
        ),
      ),
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
                'description' => '响应状态。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AuthorizeDeviceGroupResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</AuthorizeDeviceGroupResponse>","errorExample":""}]',
      'title' => '授权设备分组',
      'summary' => '授权IoT数据源组下的设备接入区块链的权限。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'UnAuthorizeDevice' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设备标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '654887879557****',
          ),
        ),
        3 => 
        array (
          'name' => 'DeviceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT数据源组标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '475020454741****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UnAuthorizeDeviceResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UnAuthorizeDeviceResponse>","errorExample":""}]',
      'title' => '设备取消授权',
      'summary' => '取消指定设备接入区块链权限。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见错误码[错误码](~~184711~~)。',
    ),
    'UnAuthorizeDeviceGroup' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT数据源组标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '475020454741****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UnAuthorizeDeviceGroupResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UnAuthorizeDeviceGroupResponse>","errorExample":""}]',
      'title' => '数据源组取消授权',
      'summary' => '取消指定IoT数据源组下的设备接入区块链的权限。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'ListDevice' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Num',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定显示返回结果中的第几页，最小取值是1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        4 => 
        array (
          'name' => 'DeviceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT数据源组标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '475020454741****',
          ),
        ),
        5 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询IoT设备的ID。

>  不传则查询该IoT数据源组下的所有IoT设备。',
            'type' => 'string',
            'required' => false,
            'example' => '183329761572****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Num' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'Size' => 
                  array (
                    'description' => '每页数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'PageData' => 
                  array (
                    'description' => '数据项',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '授权状态。
- **AUTHORIZED**：已授权。
- **UNAUTHORIZED**：未授权。',
                          'type' => 'string',
                          'example' => 'AUTHORIZED',
                        ),
                        'LastSaveTime' => 
                        array (
                          'description' => '最后存证时间。毫秒级时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1606379090866',
                        ),
                        'DeviceId' => 
                        array (
                          'description' => '设备标识。',
                          'type' => 'string',
                          'example' => '876055554040****',
                        ),
                        'IotId' => 
                        array (
                          'description' => 'IoT设备ID。',
                          'type' => 'string',
                          'example' => '183329761572****',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 30,\\n    \\"Size\\": 2,\\n    \\"PageData\\": [\\n      {\\n        \\"Status\\": \\"AUTHORIZED\\",\\n        \\"LastSaveTime\\": 1606379090866,\\n        \\"DeviceId\\": \\"876055554040****\\",\\n        \\"IotId\\": \\"183329761572****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDeviceResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <Status>AUTHORIZED</Status>\\n            <IotId>183329761572****</IotId>\\n            <LastSaveTime>1606379090866</LastSaveTime>\\n            <DeviceId>876055554040****</DeviceId>\\n        </PageData>\\n        <PageData>\\n            <Status>AUTHORIZED</Status>\\n            <IotId>183329761573****</IotId>\\n            <LastSaveTime>1606379090888</LastSaveTime>\\n            <DeviceId>876055554041****</DeviceId>\\n        </PageData>\\n        <Size>2</Size>\\n        <Num>1</Num>\\n        <Total>30</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListDeviceResponse>","errorExample":""}]',
      'title' => '查询设备列表',
      'summary' => '查询IoT数据源组下的所有设备。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'ListDeviceGroup' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Num',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定显示返回结果中的第几页，最小取值1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        4 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT数据源组ProductKey。

> 不传则查询业务链下所有的IoT数据源组。',
            'type' => 'string',
            'required' => false,
            'example' => 'hKpHMh2****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Num' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'Size' => 
                  array (
                    'description' => '每页数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'PageData' => 
                  array (
                    'description' => '数据项',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => 'IoT数据源组授权状态。
- **AUTHORIZED**：已授权。
- **UNAUTHORIZED**：未授权。',
                          'type' => 'string',
                          'example' => 'AUTHORIZED',
                        ),
                        'DeviceGroupId' => 
                        array (
                          'description' => 'IoT数据源组标识。',
                          'type' => 'string',
                          'example' => '577187700697****',
                        ),
                        'ProductKey' => 
                        array (
                          'description' => 'IoT数据源组ProductKey。',
                          'type' => 'string',
                          'example' => 'hKpHMh2****',
                        ),
                        'Remark' => 
                        array (
                          'description' => '备注信息。',
                          'type' => 'string',
                          'example' => '某业务某设备',
                        ),
                        'AuthorizeType' => 
                        array (
                          'description' => 'IoT数据源组授权类型。
**ID2**：阿里云ID²认证。',
                          'type' => 'string',
                          'example' => 'ID2',
                        ),
                        'OwnerName' => 
                        array (
                          'description' => 'IoT数据源组所属成员名称。',
                          'type' => 'string',
                          'example' => '某公司',
                        ),
                        'OwnerUid' => 
                        array (
                          'description' => 'IoT数据源组所属成员账号UID。',
                          'type' => 'string',
                          'example' => '19720316234381****',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 30,\\n    \\"Size\\": 2,\\n    \\"PageData\\": [\\n      {\\n        \\"Status\\": \\"AUTHORIZED\\",\\n        \\"DeviceGroupId\\": \\"577187700697****\\",\\n        \\"ProductKey\\": \\"hKpHMh2****\\",\\n        \\"Remark\\": \\"某业务某设备\\",\\n        \\"AuthorizeType\\": \\"ID2\\",\\n        \\"OwnerName\\": \\"某公司\\",\\n        \\"OwnerUid\\": \\"19720316234381****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListDeviceGroupResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <Status>AUTHORIZED</Status>\\n            <AuthorizeType>ID2</AuthorizeType>\\n            <OwnerName>某公司</OwnerName>\\n            <DeviceGroupId>577187700697****</DeviceGroupId>\\n            <OwnerUid>19720316234381****</OwnerUid>\\n            <ProductKey>hKpHMh2****</ProductKey>\\n            <Remark>某业务某设备</Remark>\\n        </PageData>\\n        <PageData>\\n            <Status>AUTHORIZED</Status>\\n            <AuthorizeType>ID2</AuthorizeType>\\n            <OwnerName>某公司</OwnerName>\\n            <DeviceGroupId>577187700698****</DeviceGroupId>\\n            <OwnerUid>19720316234386****</OwnerUid>\\n            <ProductKey>hKpHMh2****</ProductKey>\\n            <Remark>某业务某设备</Remark>\\n        </PageData>\\n        <Size>2</Size>\\n        <Num>1</Num>\\n        <Total>30</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListDeviceGroupResponse>","errorExample":""}]',
      'title' => '查询数据源组列表',
      'summary' => '查询IoT数据源组列表
使用方可查看自己注册的IoT数据源组
管理方可查看项目下所有的IoT数据源组。',
      'description' => '1. 使用方仅可查看自行注册的IoT数据源组列表。
2. 管理方可查看所创建所有使用方的IoT数据源组列表。

**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'CreateMPCoSPhase' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段名称。
长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '某阶段',
          ),
        ),
        3 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注信息。长度限制为100字符。',
            'type' => 'string',
            'required' => false,
            'example' => '某阶段的备注信息。',
          ),
        ),
        4 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '987823074334****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '阶段标识。',
                'type' => 'string',
                'example' => '196487512811****',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"196487512811****\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateMPCoSPhaseResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>196487512811****</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateMPCoSPhaseResponse>","errorExample":""}]',
      'title' => '创建阶段',
      'summary' => '在协同模型中创建阶段。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'CreateMPCoSPhaseGroup' => 
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
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型名称。
长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '某协同模型',
          ),
        ),
        3 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型备注。长度限制为100字符。',
            'type' => 'string',
            'required' => false,
            'example' => '某协同模型的备注信息。',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '协同模型标识。',
                'type' => 'string',
                'example' => '987823074334****',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"987823074334****\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateMPCoSPhaseGroupResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>987823074334****</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateMPCoSPhaseGroupResponse>","errorExample":""}]',
      'title' => '创建协同模型',
      'summary' => '创建协同模型信息。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'ModifyMPCoSPhase' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段名称。
长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '某阶段',
          ),
        ),
        3 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注信息。长度限制为100字符。',
            'type' => 'string',
            'required' => false,
            'example' => '某阶段的备注信息。',
          ),
        ),
        4 => 
        array (
          'name' => 'PhaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '196487512811****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyMPCoSPhaseResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ModifyMPCoSPhaseResponse>","errorExample":""}]',
      'title' => '修改阶段',
      'summary' => '在协同模型中修改阶段信息。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'ModifyMPCoSPhaseGroup' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型名称。
长度为2~30字符，可以包含中文、英文字母、数字、下划线（_）、横线（-）、英文句号（.）和圆括号（()）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '某协同模型',
          ),
        ),
        2 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注信息。长度限制为100字符。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '某协同模型备注。',
          ),
        ),
        3 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '987823074334****',
          ),
        ),
        4 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyMPCoSPhaseGroupResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ModifyMPCoSPhaseGroupResponse>","errorExample":""}]',
      'title' => '修改数据模型',
      'summary' => '修改协同模型信息。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'UpdateMPCoSAuthorizedInfo' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '717534457003****',
          ),
        ),
        3 => 
        array (
          'name' => 'AuthorizedPhaseList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '授权阶段标识列表。',
            'type' => 'object',
            'required' => true,
            'docRequired' => true,
            'example' => '["196487512811****","196487512812****"]',
          ),
        ),
        4 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '383860792287****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateMPCoSAuthorizedInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UpdateMPCoSAuthorizedInfoResponse>","errorExample":""}]',
      'title' => '更新使用方权限',
      'summary' => '更新账户在协同模型中的权限信息。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'DescribeMPCoSAuthorizedInfo' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账户标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '717534457003****',
          ),
        ),
        3 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '383860792287****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'AuthorizedPhaseList' => 
                  array (
                    'description' => '已授权阶段列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PhaseName' => 
                        array (
                          'description' => '阶段名称。',
                          'type' => 'string',
                          'example' => '某阶段',
                        ),
                        'PhaseId' => 
                        array (
                          'description' => '阶段标识。',
                          'type' => 'string',
                          'example' => '987823074334****',
                        ),
                      ),
                    ),
                  ),
                  'UnAuthorizedPhaseList' => 
                  array (
                    'description' => '未授权阶段列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PhaseName' => 
                        array (
                          'description' => '阶段名称。',
                          'type' => 'string',
                          'example' => '某某阶段',
                        ),
                        'PhaseId' => 
                        array (
                          'description' => '阶段标识。',
                          'type' => 'string',
                          'example' => '987823074334****',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"AuthorizedPhaseList\\": [\\n      {\\n        \\"PhaseName\\": \\"某阶段\\",\\n        \\"PhaseId\\": \\"987823074334****\\"\\n      }\\n    ],\\n    \\"UnAuthorizedPhaseList\\": [\\n      {\\n        \\"PhaseName\\": \\"某某阶段\\",\\n        \\"PhaseId\\": \\"987823074334****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeMPCoSAuthorizedInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <AuthorizedPhaseList>\\n            <PhaseName>某阶段</PhaseName>\\n            <PhaseId>987823074334****</PhaseId>\\n        </AuthorizedPhaseList>\\n        <UnAuthorizedPhaseList>\\n            <PhaseName>某某阶段</PhaseName>\\n            <PhaseId>987823074334****</PhaseId>\\n        </UnAuthorizedPhaseList>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DescribeMPCoSAuthorizedInfoResponse>","errorExample":""}]',
      'title' => '查询使用方权限',
      'summary' => '查询账户在协同模型中的权限信息。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'DescribeMPCoSPhaseInfo' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '383860792287****',
          ),
        ),
        3 => 
        array (
          'name' => 'PhaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '644208887511****',
          ),
        ),
        4 => 
        array (
          'name' => 'DataKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '32bfce96b4e2f9bec0f2ea5cc2f14ace1486cc146d5832d3a84e5332fe89****',
          ),
        ),
        5 => 
        array (
          'name' => 'DataSeq',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据序列号。',
            'type' => 'string',
            'required' => false,
            'example' => 'be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'PreviousHash' => 
                  array (
                    'description' => '前一区块摘要。',
                    'type' => 'string',
                    'example' => 'bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb276d****',
                  ),
                  'ProductKey' => 
                  array (
                    'description' => 'IoT数据源组ProductKey。',
                    'type' => 'string',
                    'example' => 'hfoi7GQ****',
                  ),
                  'DataHash' => 
                  array (
                    'description' => '数据摘要。',
                    'type' => 'string',
                    'example' => '9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e972****',
                  ),
                  'DataValue' => 
                  array (
                    'description' => '上链值。',
                    'type' => 'string',
                    'example' => '某公司某业务数据。',
                  ),
                  'Timestamp' => 
                  array (
                    'description' => '上链时间。毫秒级时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1605885676000',
                  ),
                  'TransactionHash' => 
                  array (
                    'description' => '交易摘要。',
                    'type' => 'string',
                    'example' => 'c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4d07b****',
                  ),
                  'BlockHash' => 
                  array (
                    'description' => '区块摘要。',
                    'type' => 'string',
                    'example' => '5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c4****',
                  ),
                  'BlockNumber' => 
                  array (
                    'description' => '区块高度。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1942',
                  ),
                  'IotId' => 
                  array (
                    'description' => '设备标识。',
                    'type' => 'string',
                    'example' => 'DFA7B98AD494FB98A491****',
                  ),
                  'RelatedDataList' => 
                  array (
                    'description' => '关联数据列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RelatedDataKey' => 
                        array (
                          'description' => '关联的数据Key值。',
                          'type' => 'string',
                          'example' => '256399502929****',
                        ),
                        'RelatedPhaseDataHash' => 
                        array (
                          'description' => '关联的阶段数据摘要。',
                          'type' => 'string',
                          'example' => '73b5c3dbc828fdf79749ff332af402036f7d591959fda00a2854a160fe66****',
                        ),
                        'RelatedDataSeq' => 
                        array (
                          'description' => '关联的数据序列号。',
                          'type' => 'string',
                          'example' => 'be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****',
                        ),
                        'RelatedPhaseName' => 
                        array (
                          'description' => '关联的数据阶段名称。',
                          'type' => 'string',
                          'example' => '某业务阶段',
                        ),
                        'RelatedPhaseId' => 
                        array (
                          'description' => '关联的数据阶段ID。',
                          'type' => 'string',
                          'example' => '987823074334****',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PreviousHash\\": \\"bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb276d****\\",\\n    \\"ProductKey\\": \\"hfoi7GQ****\\",\\n    \\"DataHash\\": \\"9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e972****\\",\\n    \\"DataValue\\": \\"某公司某业务数据。\\",\\n    \\"Timestamp\\": 1605885676000,\\n    \\"TransactionHash\\": \\"c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4d07b****\\",\\n    \\"BlockHash\\": \\"5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c4****\\",\\n    \\"BlockNumber\\": 1942,\\n    \\"IotId\\": \\"DFA7B98AD494FB98A491****\\",\\n    \\"RelatedDataList\\": [\\n      {\\n        \\"RelatedDataKey\\": \\"256399502929****\\",\\n        \\"RelatedPhaseDataHash\\": \\"73b5c3dbc828fdf79749ff332af402036f7d591959fda00a2854a160fe66****\\",\\n        \\"RelatedDataSeq\\": \\"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****\\",\\n        \\"RelatedPhaseName\\": \\"某业务阶段\\",\\n        \\"RelatedPhaseId\\": \\"987823074334****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeMPCoSPhaseInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <IotId>DFA7B98AD494FB98A491****</IotId>\\n        <DataValue>某公司某业务数据。</DataValue>\\n        <BlockHash>5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c4****</BlockHash>\\n        <TransactionHash>c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4d07b****</TransactionHash>\\n        <PreviousHash>bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb276d****</PreviousHash>\\n        <BlockNumber>1942</BlockNumber>\\n        <Timestamp>1605885676000</Timestamp>\\n        <RelatedDataList>\\n            <RelatedPhaseId>256399502929****</RelatedPhaseId>\\n            <RelatedDataSeq>be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****</RelatedDataSeq>\\n            <RelatedDataKey>987823074334****</RelatedDataKey>\\n            <RelatedPhaseDataHash>73b5c3dbc828fdf79749ff332af402036f7d591959fda00a2854a160fe66****</RelatedPhaseDataHash>\\n            <RelatedPhaseName>某业务阶段</RelatedPhaseName>\\n        </RelatedDataList>\\n        <ProductKey>hfoi7GQ****</ProductKey>\\n        <DataHash>9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e972****</DataHash>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DescribeMPCoSPhaseInfoResponse>","errorExample":""}]',
      'title' => '查询上链数据',
      'summary' => '通过阶段标识，数据唯一标识，和序列号查询唯一一条上链数据和所关联数据。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'DescribeMPCoSResourceInfo' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
      ),
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
                'description' => '请求标识。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'PhaseGroupQuota' => 
                  array (
                    'description' => '协同模型配额。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '200',
                  ),
                  'MemberQuota' => 
                  array (
                    'description' => '成员配额。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'UsedMember' => 
                  array (
                    'description' => '已添加成员个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5',
                  ),
                  'UsedPhaseGroup' => 
                  array (
                    'description' => '已添加协同模型个数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'PhaseQuotaInfoList' => 
                  array (
                    'description' => '阶段配额列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PhaseGroupId' => 
                        array (
                          'description' => '协同模型标识。',
                          'type' => 'string',
                          'example' => '383860792287****',
                        ),
                        'PhaseGroupName' => 
                        array (
                          'description' => '协同模型名称。',
                          'type' => 'string',
                          'example' => '某协同模型',
                        ),
                        'PhaseQuota' => 
                        array (
                          'description' => '阶段配额。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '5',
                        ),
                        'UsedPhase' => 
                        array (
                          'description' => '已添加阶段个数。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '3',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PhaseGroupQuota\\": 200,\\n    \\"MemberQuota\\": 100,\\n    \\"UsedMember\\": 5,\\n    \\"UsedPhaseGroup\\": 10,\\n    \\"PhaseQuotaInfoList\\": [\\n      {\\n        \\"PhaseGroupId\\": \\"383860792287****\\",\\n        \\"PhaseGroupName\\": \\"某协同模型\\",\\n        \\"PhaseQuota\\": 5,\\n        \\"UsedPhase\\": 3\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeMPCoSResourceInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PhaseGroupQuota>200</PhaseGroupQuota>\\n        <UsedPhaseGroup>10</UsedPhaseGroup>\\n        <UsedMember>5</UsedMember>\\n        <PhaseQuotaInfoList>\\n            <PhaseQuota>5</PhaseQuota>\\n            <UsedPhase>3</UsedPhase>\\n            <PhaseGroupId>383860792287****</PhaseGroupId>\\n            <PhaseGroupName>某协同模型</PhaseGroupName>\\n        </PhaseQuotaInfoList>\\n        <MemberQuota>100</MemberQuota>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DescribeMPCoSResourceInfoResponse>","errorExample":""}]',
      'title' => '查询资源使用信息',
      'summary' => '查询业务链配额和使用情况。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'ListMPCoSPhase' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Num',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定显示返回结果中的第几页，最小取值是1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        4 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '987823074334****',
          ),
        ),
        5 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的阶段名称。
> 不传则查询该协同模型下所有阶段。',
            'type' => 'string',
            'required' => false,
            'example' => '某阶段',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Num' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Size' => 
                  array (
                    'description' => '每页数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageData' => 
                  array (
                    'description' => '数据项。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '阶段名称。',
                          'type' => 'string',
                          'example' => '某阶段',
                        ),
                        'Remark' => 
                        array (
                          'description' => '阶段备注。',
                          'type' => 'string',
                          'example' => '某阶段的备注信息。',
                        ),
                        'AccessPermission' => 
                        array (
                          'description' => '访问权限。
- **1**：读权限。
- **2**：写权限。
- **3**：读写权限。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'PhaseId' => 
                        array (
                          'description' => '阶段标识。',
                          'type' => 'string',
                          'example' => '196487512811****',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 1,\\n    \\"Size\\": 1,\\n    \\"PageData\\": [\\n      {\\n        \\"Name\\": \\"某阶段\\",\\n        \\"Remark\\": \\"某阶段的备注信息。\\",\\n        \\"AccessPermission\\": 1,\\n        \\"PhaseId\\": \\"196487512811****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListMPCoSPhaseResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <AccessPermission>1</AccessPermission>\\n            <PhaseId>196487512811****</PhaseId>\\n            <Remark>某阶段的备注信息。</Remark>\\n            <Name>某阶段</Name>\\n        </PageData>\\n        <Size>1</Size>\\n        <Num>1</Num>\\n        <Total>1</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListMPCoSPhaseResponse>","errorExample":""}]',
      'title' => '查询阶段列表',
      'summary' => '查询协同模型所属的阶段列表。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'ListMPCoSPhaseGroup' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Num',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定显示返回结果中的第几页，最小取值是1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        4 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的协同模型名称。

> 若不传则查询所有协同模型。',
            'type' => 'string',
            'required' => false,
            'example' => '某业务链',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '响应状态码。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Num' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Size' => 
                  array (
                    'description' => '每页数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageData' => 
                  array (
                    'description' => '数据项。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'PhaseGroupId' => 
                        array (
                          'description' => '协同模型标识。',
                          'type' => 'string',
                          'example' => '987823074334****',
                        ),
                        'Name' => 
                        array (
                          'description' => '协同模型名称。',
                          'type' => 'string',
                          'example' => '某协同模型',
                        ),
                        'Remark' => 
                        array (
                          'description' => '协同模型备注。',
                          'type' => 'string',
                          'example' => '某协同模型的备注信息。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 1,\\n    \\"Size\\": 1,\\n    \\"PageData\\": [\\n      {\\n        \\"PhaseGroupId\\": \\"987823074334****\\",\\n        \\"Name\\": \\"某协同模型\\",\\n        \\"Remark\\": \\"某协同模型的备注信息。\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListMPCoSPhaseGroupResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <PhaseGroupId>987823074334****</PhaseGroupId>\\n            <Remark>某协同模型的备注信息。</Remark>\\n            <Name>某协同模型</Name>\\n        </PageData>\\n        <Size>1</Size>\\n        <Num>1</Num>\\n        <Total>1</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListMPCoSPhaseGroupResponse>","errorExample":""}]',
      'title' => '查询协同模型列表',
      'summary' => '查询业务链所属的协同模型列表。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'ListMPCoSPhaseHistory' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Num',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定显示返回结果中的第几页，最小取值是1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        4 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '383860792287****',
          ),
        ),
        5 => 
        array (
          'name' => 'PhaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '644208887511****',
          ),
        ),
        6 => 
        array (
          'name' => 'DataKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '32bfce96b4e2f9bec0f2ea5cc2f14ace1486cc146d5832d3a84e5332fe89****',
          ),
        ),
        7 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。毫秒级时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1606379090866',
          ),
        ),
        8 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。毫秒级时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1606389090866',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Num' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Size' => 
                  array (
                    'description' => '每页数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'PageData' => 
                  array (
                    'description' => '数据项。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ProductKey' => 
                        array (
                          'description' => 'IoT数据源组ProductKey。',
                          'type' => 'string',
                          'example' => 'hfoi7GQ****',
                        ),
                        'PreviousHash' => 
                        array (
                          'description' => '前一区块摘要。',
                          'type' => 'string',
                          'example' => '2d921a60bf7cc0e9722a8bcc0e909e62d92120c0c749ff332af402036f7d****',
                        ),
                        'DataHash' => 
                        array (
                          'description' => '数据摘要。',
                          'type' => 'string',
                          'example' => '9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e972****',
                        ),
                        'DataSeq' => 
                        array (
                          'description' => '数据序列号。',
                          'type' => 'string',
                          'example' => 'be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****',
                        ),
                        'DataValue' => 
                        array (
                          'description' => '上链值。',
                          'type' => 'string',
                          'example' => '某公司业务数据。',
                        ),
                        'Timestamp' => 
                        array (
                          'description' => '上链时间。毫秒级时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1606389620000',
                        ),
                        'TransactionHash' => 
                        array (
                          'description' => '交易摘要。',
                          'type' => 'string',
                          'example' => 'bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb276d****',
                        ),
                        'BlockHash' => 
                        array (
                          'description' => '区块摘要。',
                          'type' => 'string',
                          'example' => '5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c4****',
                        ),
                        'BlockNumber' => 
                        array (
                          'description' => '区块高度。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '9852',
                        ),
                        'IotId' => 
                        array (
                          'description' => 'IoT设备ID。',
                          'type' => 'string',
                          'example' => 'DFA7B98AD494FB98A491****',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 10,\\n    \\"Size\\": 2,\\n    \\"PageData\\": [\\n      {\\n        \\"ProductKey\\": \\"hfoi7GQ****\\",\\n        \\"PreviousHash\\": \\"2d921a60bf7cc0e9722a8bcc0e909e62d92120c0c749ff332af402036f7d****\\",\\n        \\"DataHash\\": \\"9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e972****\\",\\n        \\"DataSeq\\": \\"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****\\",\\n        \\"DataValue\\": \\"某公司业务数据。\\",\\n        \\"Timestamp\\": 1606389620000,\\n        \\"TransactionHash\\": \\"bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb276d****\\",\\n        \\"BlockHash\\": \\"5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c4****\\",\\n        \\"BlockNumber\\": 9852,\\n        \\"IotId\\": \\"DFA7B98AD494FB98A491****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListMPCoSPhaseHistoryResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <IotId>DFA7B98AD494FB98A492****</IotId>\\n            <DataValue>某公司业务数据。</DataValue>\\n            <BlockHash>5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c5****</BlockHash>\\n            <DataSeq>be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a6****</DataSeq>\\n            <TransactionHash>bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb2764****</TransactionHash>\\n            <PreviousHash>2d921a60bf7cc0e9722a8bcc0e909e62d92120c0c749ff332af402036f77****</PreviousHash>\\n            <BlockNumber>9852</BlockNumber>\\n            <Timestamp>1606389620000</Timestamp>\\n            <ProductKey>hfoi7G7****</ProductKey>\\n            <DataHash>9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e978****</DataHash>\\n        </PageData>\\n        <PageData>\\n            <IotId>DFA7B98AD494FB98A491****</IotId>\\n            <DataValue>某公司业务数据。</DataValue>\\n            <BlockHash>5a5c07672a4efaf609e62d921a60bf7cc0e9722a8b9608520d694520c0c4****</BlockHash>\\n            <DataSeq>be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****</DataSeq>\\n            <TransactionHash>bf2cf40e5c21dc14d03eb824f99791c4d07bdaf2736e5faae508d7fb276d****</TransactionHash>\\n            <PreviousHash>2d921a60bf7cc0e9722a8bcc0e909e62d92120c0c749ff332af402036f7d****</PreviousHash>\\n            <BlockNumber>9852</BlockNumber>\\n            <Timestamp>1606389630000</Timestamp>\\n            <ProductKey>hfoi7GQ****</ProductKey>\\n            <DataHash>9608520d694520c0c414075a5c07672a4efaf609e62d921a60bf7cc0e972****</DataHash>\\n        </PageData>\\n        <Size>2</Size>\\n        <Num>1</Num>\\n        <Total>10</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListMPCoSPhaseHistoryResponse>","errorExample":""}]',
      'title' => '查询历史数据列表',
      'summary' => '通过阶段标识，数据唯一标识，起始时间，结束时间，查询数据列表。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'ApplyDataModelConfigInfo' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => false,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT数据源组ProductKey。',
            'type' => 'string',
            'required' => false,
            'example' => 'HB5jyvZWz******g',
          ),
        ),
        2 => 
        array (
          'name' => 'DataModelCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DF3K',
          ),
        ),
        3 => 
        array (
          'name' => 'Configuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模型配置信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{\\"productKey\\":\\"a1lPbm9Yq0v\\"}',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '180E5D71-FF24-5E87-9746-3DA837E686FE',
              ),
              'Success' => 
              array (
                'description' => '是否成功。-**true**：是。-**false**：否。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"180E5D71-FF24-5E87-9746-3DA837E686FE\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '应用数据模型配置',
      'summary' => '应用自定义数据模型配置信息。',
    ),
    'AttachData' => 
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
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据Key唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0001_HB5jyvZWzwcM****_0X**_80aa976ac4d64a97bd45c71a509d****',
          ),
        ),
        2 => 
        array (
          'name' => 'Value',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据Value。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '某公司某业务数据。',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链编码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'HB5jyvZWzwcM****',
          ),
        ),
        4 => 
        array (
          'name' => 'BusinessId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '1. 用户业务ID，同一个Key，业务ID必须唯一。格式为64字符，合法字符范围\\[0-9,a-f,A-F\\]。
2. 如果不包含该参数，则返回当前Key最新数据。',
            'type' => 'string',
            'required' => false,
            'example' => '000000000000000000000000000000000000000000000000000000000001****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AttachDataResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</AttachDataResponse>","errorExample":""}]',
      'title' => '数据多次上传',
      'summary' => '用于向IoT区块链可信应用系统多次上传数据。',
      'description' => '- 同一个数据Key，可以多次使用AttachData上传数据。
- 调用成功后，系统会进行异步处理，稍后需使用GetData查询数据，进行确认。
- 同一个数据Key多次上传，后续上传数据需等待前序数据确认上链完成。

**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'AttachDataWithSignature' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据Key唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0001_HB5jyvZWzwcM****_0X**_80aa976ac4d64a97bd45c71a509d****',
          ),
        ),
        2 => 
        array (
          'name' => 'Value',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据value。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '某公司某业务数据。',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链编码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'HB5jyvZWzwcM****',
          ),
        ),
        4 => 
        array (
          'name' => 'IotAuthType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT认证方式。
**ID2**：阿里云Link ID²。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ID2',
          ),
        ),
        5 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '183329761572****',
          ),
        ),
        6 => 
        array (
          'name' => 'IotIdServiceProvider',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备服务提供方标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'g9R4ghe****',
          ),
        ),
        7 => 
        array (
          'name' => 'IotDataDigest',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT数据Value摘要。
1. Value数据UTF-8编码。
2. SHA256运算，结果为32字节数据。
3. 转换为64字节字符串格式（大写字符）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '94894989498FDDABD51698BD1A49BF1AFB0AA94FAA8DB65A689164BEED******',
          ),
        ),
        8 => 
        array (
          'name' => 'IotSignature',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备数据签名。
使用 IoT 设备安全 SDK 进行签名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2~2~192ADFB498AA****~1579198300000~J8E891NAgAhwHBHm8******/hnswr698HSb09ahS8709bn9s03jg98u4jg******',
          ),
        ),
        9 => 
        array (
          'name' => 'IotIdSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备服务提供方。
- **1**：开放平台。
- **2**：物联网平台。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        10 => 
        array (
          'name' => 'BusinessId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '1. 用户业务ID，同一个Key，业务ID必须唯一。格式为64字符，合法字符范围\\[0-9,a-f,A-F\\]。
2. 如果不包含该参数，则返回当前Key最新数据。',
            'type' => 'string',
            'required' => false,
            'example' => '000000000000000000000000000000000000000000000000000000000001****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<AttachDataWithSignatureResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</AttachDataWithSignatureResponse>","errorExample":""}]',
      'title' => '设备数据多次上传',
      'summary' => '用于向 IoT区块链可信应用系统多次上传数据，并且上传的数据必须由 IoT设备端进行签名。',
      'description' => '- 同一个数据Key，可以多次使用AttachDataWithSignature上传数据。
- 调用成功后，系统会进行异步处理，稍后需使用GetData查询数据，进行确认。
- 同一个数据Key多次上传，后续上传数据需等待前序数据确认上链完成。

**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'SetData' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据Key唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0001_HB5jyvZWzwcMFSFg_0X58_80aa976ac4d64a97b******a509d4c0b',
          ),
        ),
        2 => 
        array (
          'name' => 'Value',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据Value。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '某公司某业务数据。',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链编码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'HB5jyvZWz******g',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetDataResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</SetDataResponse>","errorExample":""}]',
      'title' => '数据上传',
      'summary' => '数据上传，该API用于向LTL上传数据。',
      'description' => '调用成功后，系统会进行异步处理，稍后需使用[GetData](~~195376~~)查询数据，进行确认。

**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'SetDataWithSignature' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据Key唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0001_HB5jyvZWzwcMFSFg_0X58_80aa976ac4d64a97bd45c71a509d****',
          ),
        ),
        2 => 
        array (
          'name' => 'Value',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据Value。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '某公司某业务数据。',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链编码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'HB5jyvZWzwcM****',
          ),
        ),
        4 => 
        array (
          'name' => 'IotAuthType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT认证方式。
**ID2**：阿里云Link ID²。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ID2',
          ),
        ),
        5 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '00CCCC098D98F2BDD8BB****',
          ),
        ),
        6 => 
        array (
          'name' => 'IotIdServiceProvider',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备服务提供方标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'kKpACh5****',
          ),
        ),
        7 => 
        array (
          'name' => 'IotDataDigest',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT可信数据Value摘要：
1.  Value数据UTF-8编码。
2.  SHA256运算，结果为32字节数据。
3.  转换为64字节字符串格式（大写字符）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '31A200471049AEA3B8459455B4447D05DD1290A875A17792F71D5550F048****',
          ),
        ),
        8 => 
        array (
          'name' => 'IotSignature',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备数据签名。使用IoT设备安全SDK进行签名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '3~2~010253040257****~1599722505821~50sZwIXt9jtTTIoGAkEs4THSyCMghVVaYO1w2AcvQf0vm51MQYt0nfHUT7jQ****',
          ),
        ),
        9 => 
        array (
          'name' => 'IotIdSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备服务提供方。
- **1**：开放平台。
- **2**：物联网平台。',
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
              'Code' => 
              array (
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SetDataWithSignatureResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</SetDataWithSignatureResponse>","errorExample":""}]',
      'title' => '设备数据上传',
      'summary' => '用于上传数据，并且上传的数据必须由IoT设备端进行签名。',
      'description' => '调用成功后，系统会进行异步处理，稍后需使用[GetData](~~195376~~)查询数据，进行确认。

**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'BatchUploadMPCoSPhaseDigestInfo' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '383860792287****',
          ),
        ),
        3 => 
        array (
          'name' => 'PhaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '644208887511****',
          ),
        ),
        4 => 
        array (
          'name' => 'PhaseDataList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '阶段数据列表。详情请参见下表PhaseData。',
            'type' => 'object',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"dataKey":"987823074334****","phaseData":"b42958ddf8a13dee78fcc906d0fb48e912ddc44b3c2c2759e4824b6e2d24****","dataSeq":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedDataList":[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]}]',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchUploadMPCoSPhaseDigestInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</BatchUploadMPCoSPhaseDigestInfoResponse>","errorExample":""}]',
      'title' => '批量上传摘要数据',
      'summary' => '批量上传阶段数据的摘要信息到区块链，并同时可以绑定所关联的其它阶段数据。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => '**PhaseData**
|参数|类型|是否必选|示例值|描述|
|-|-|-|-|-|
|dataKey|String|是|987823074334****|数据唯一标识。|
|phaseData|String|是|b42958ddf8a13dee78fcc906d0fb48e912ddc44b3c2c2759e4824b6e2d24****|阶段数据。长度要求64字节。|
|dataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|数据序列号。|
|relatedDataList|List|否|[{"relatedPhaseId":"987823074334××××","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2××××","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a××××"}]|关联数据列表。详情请参见下表relatedData。|

**relatedData**
|参数|类型|是否必选|示例值|描述|
|-|-|-|-|-|
|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。长度要求64字节。|
|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|
|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|
|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'BatchUploadMPCoSPhaseDigestInfoByDevice' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '383860792287****',
          ),
        ),
        3 => 
        array (
          'name' => 'PhaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '644208887511****',
          ),
        ),
        4 => 
        array (
          'name' => 'PhaseDataList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '阶段数据列表。详情请参见下表PhaseData。',
            'type' => 'object',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"dataKey":"987823074334****","phaseData":"b42958ddf8a13dee78fcc906d0fb48e912ddc44b3c2c2759e4824b6e2d24****","dataSeq":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedDataList":[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]}]',
          ),
        ),
        5 => 
        array (
          'name' => 'IotAuthType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT认证方式。
**ID2**：阿里云Link ID²。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ID2',
          ),
        ),
        6 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '183329761572****',
          ),
        ),
        7 => 
        array (
          'name' => 'IotIdSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备服务提供方。
- **1**：开放平台。
- **2**：物联网平台。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        8 => 
        array (
          'name' => 'IotIdServiceProvider',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备服务提供方标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'g9R4ghe****',
          ),
        ),
        9 => 
        array (
          'name' => 'IotDataDigest',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT可信数据Value摘要：
1. Value数据UTF-8编码。
2. SHA256运算，结果为32字节数据转换为64字节字符串格式（大写字符）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '94894989498FDDABD51698BD1A49BF1AFB0AA94FAA8DB65A689164BEED',
          ),
        ),
        10 => 
        array (
          'name' => 'IotSignature',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备数据签名。
使用IoT设备安全SDK进行签名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2~2~192ADFB498AA****~1579198300000~J8E891NAgAhwHBHm8******/hnswr698HSb09ahS8709bn9s03jg98u4jg******',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchUploadMPCoSPhaseDigestInfoByDeviceResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</BatchUploadMPCoSPhaseDigestInfoByDeviceResponse>","errorExample":""}]',
      'title' => '设备批量上传摘要数据',
      'summary' => '通过IoT设备签名后，批量上传阶段数据的摘要信息到区块链，并同时可以绑定所关联的其它阶段数据。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => '**PhaseData**
|参数|类型|是否必选|示例值|描述|
|-|-|-|-|-|
|dataKey|String|是|987823074334****|数据唯一标识。|
|phaseData|String|是|b42958ddf8a13dee78fcc906d0fb48e912ddc44b3c2c2759e4824b6e2d24****|阶段数据。长度要求64字节。|
|dataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|数据序列号。|
|relatedDataList|List|否|[{"relatedPhaseId":"987823074334××××","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2××××","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a××××"}]|关联数据列表。详情请参见下表relatedData。|

**relatedData**
|参数|类型|是否必选|示例值|描述|
|-|-|-|-|-|
|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。长度要求64字节。|
|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|
|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|
|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'BatchUploadMPCoSPhaseTextInfo' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '987823074334****',
          ),
        ),
        3 => 
        array (
          'name' => 'PhaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '196487512811****',
          ),
        ),
        4 => 
        array (
          'name' => 'PhaseDataList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '阶段数据列表。详情请参见下表PhaseData。',
            'type' => 'object',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchUploadMPCoSPhaseTextInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</BatchUploadMPCoSPhaseTextInfoResponse>","errorExample":""}]',
      'title' => '批量上传文本数据',
      'summary' => '批量上传文本类型的阶段数据到区块链，并同时可以绑定所关联的其它阶段数据。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => '**PhaseData**
|参数|类型|是否必选|示例值|描述|
|-|-|-|-|-|
|dataKey|String|是|987823074334****|数据唯一标识。|
|phaseData|String|是|某公司某业务数据|阶段数据。长度要求1~4096字节，一个中文字符占两位字符。|
|dataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|数据序列号。|
|relatedDataList|List|否|[{"relatedPhaseId":"987823074334××××","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2××××","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a××××"}]|关联数据列表。详情请参见下表relatedData。|

**relatedData**
|参数|类型|是否必选|示例值|描述|
|-|-|-|-|-|
|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。|
|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|
|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|
|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'BatchUploadMPCoSPhaseTextInfoByDevice' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '383860792287****',
          ),
        ),
        3 => 
        array (
          'name' => 'PhaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '644208887511****',
          ),
        ),
        4 => 
        array (
          'name' => 'PhaseDataList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '阶段数据列表。详情请参见下表PhaseData。',
            'type' => 'object',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"dataKey":"987823074334****","phaseData":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","dataSeq":"某公司某业务数据。","relatedDataList":[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]}]',
          ),
        ),
        5 => 
        array (
          'name' => 'IotAuthType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT认证方式。
**ID2**：阿里云Link ID²。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ID2',
          ),
        ),
        6 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '183329761572****',
          ),
        ),
        7 => 
        array (
          'name' => 'IotIdSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备服务提供方。
- **1**：开放平台。
- **2**：物联网平台。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        8 => 
        array (
          'name' => 'IotIdServiceProvider',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备服务提供方标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'g9R4ghe****',
          ),
        ),
        9 => 
        array (
          'name' => 'IotDataDigest',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT可信数据Value摘要：
1. Value数据UTF-8编码。
2. SHA256运算，结果为32字节数据转换为64字节字符串格式（大写字符）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '94894989498FDDABD51698BD1A49BF1AFB0AA94FAA8DB65A689164BEED******',
          ),
        ),
        10 => 
        array (
          'name' => 'IotSignature',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备数据签名。
使用IoT设备安全SDK进行签名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2~2~192ADFB498AA****~1579198300000~J8E891NAgAhwHBHm8******/hnswr698HSb09ahS8709bn9s03jg98u4jg******',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => '无',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<BatchUploadMPCoSPhaseTextInfoByDeviceResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</BatchUploadMPCoSPhaseTextInfoByDeviceResponse>","errorExample":""}]',
      'title' => '设备批量上传文本数据',
      'summary' => '通过IoT设备签名后，批量上传文本类型的阶段数据到区块链，并同时可以绑定所关联的其它阶段数据。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => '**PhaseData**
|参数|类型|是否必选|示例值|描述|
|-|-|-|-|-|
|dataKey|String|是|987823074334****|数据唯一标识。|
|phaseData|String|是|某公司某业务数据|阶段数据。|阶段数据。长度要求1~4096字节，一个中文字符占两位字符。|
|dataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|数据序列号。|
|relatedDataList|List|否|[{"relatedPhaseId":"987823074334××××","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2××××","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a××××"}]|关联数据列表。详情请参见下表relatedData。|

**relatedData**
|参数|类型|是否必选|示例值|描述|
|-|-|-|-|-|
|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。长度要求64字节。|
|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|
|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|
|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'UploadMPCoSPhaseDigestInfo' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '383860792287****',
          ),
        ),
        3 => 
        array (
          'name' => 'PhaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '644208887511***',
          ),
        ),
        4 => 
        array (
          'name' => 'DataKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '32bfce96b4e2f9bec0f2ea5cc2f14ace1486cc146d5832d3a84e5332fe89****',
          ),
        ),
        5 => 
        array (
          'name' => 'DataSeq',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据序列号。',
            'type' => 'string',
            'required' => false,
            'example' => 'be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****',
          ),
        ),
        6 => 
        array (
          'name' => 'PhaseData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段数据的SHA256摘要值，要求长度为64字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dee68c73bdead5f717fc25803236924c165d0a3c1728aa58cbf05b1473c2****',
          ),
        ),
        7 => 
        array (
          'name' => 'RelatedDataList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '关联数据列表。详情请参见下表RelatedData。',
            'type' => 'object',
            'required' => false,
            'example' => '[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UploadMPCoSPhaseDigestInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UploadMPCoSPhaseDigestInfoResponse>","errorExample":""}]',
      'title' => '摘要数据上传',
      'summary' => '上传阶段数据的摘要信息到区块链，并同时可以绑定所关联的其它阶段数据。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => '**RelatedData**
|参数|类型|是否必选|示例值|描述|
|-|-|-|-|-|
|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。长度要求64字节。|
|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|
|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|
|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'UploadMPCoSPhaseDigestInfoByDevice' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '383860792287****',
          ),
        ),
        3 => 
        array (
          'name' => 'PhaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '644208887511****',
          ),
        ),
        4 => 
        array (
          'name' => 'DataKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '32bfce96b4e2f9bec0f2ea5cc2f14ace1486cc146d5832d3a84e5332fe89****',
          ),
        ),
        5 => 
        array (
          'name' => 'DataSeq',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据序列号。',
            'type' => 'string',
            'required' => false,
            'example' => 'be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****',
          ),
        ),
        6 => 
        array (
          'name' => 'PhaseData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段数据的SHA256摘要值，要求长度为64字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ebf44d78ae75288d7d0057a5ebf44d78a6b86d04502dcbda643c4d24ff2a****',
          ),
        ),
        7 => 
        array (
          'name' => 'RelatedDataList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '关联数据列表。详情请参见下表RelatedData。',
            'type' => 'object',
            'required' => false,
            'example' => '[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]',
          ),
        ),
        8 => 
        array (
          'name' => 'IotAuthType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT认证方式。
**ID2**：阿里云Link ID²。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ID2',
          ),
        ),
        9 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '183329761572****',
          ),
        ),
        10 => 
        array (
          'name' => 'IotIdSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备服务提供方。
- **1**：开放平台。
- **2**：物联网平台。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        11 => 
        array (
          'name' => 'IotIdServiceProvider',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备服务提供方标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'g9R4ghe****',
          ),
        ),
        12 => 
        array (
          'name' => 'IotDataDigest',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT可信数据Value摘要。
1. Value数据UTF-8编码。
2. SHA256运算，结果为32字节数据转换为64字节字符串格式（大写字符）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '94894989498FDDABD51698BD1A49BF1AFB0AA94FAA8DB65A689164BEED******',
          ),
        ),
        13 => 
        array (
          'name' => 'IotSignature',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备数据签名。
使用IoT设备安全SDK进行签名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2~2~192ADFB498AA****~1579198300000~J8E891NAgAhwHBHm8******/hnswr698HSb09ahS8709bn9s03jg98u4jg******',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UploadMPCoSPhaseDigestInfoByDeviceResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UploadMPCoSPhaseDigestInfoByDeviceResponse>","errorExample":""}]',
      'title' => '设备摘要数据上传',
      'summary' => '通过IoT设备签名后，上传阶段数据的摘要信息到区块链，并同时可以绑定所关联的其它阶段数据。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' **RelatedData**
|参数|类型|是否必选|示例值|描述|
|-|-|-|-|-|
|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。长度要求64字节。|
|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|
|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|
|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'UploadMPCoSPhaseTextInfo' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '383860792287****',
          ),
        ),
        3 => 
        array (
          'name' => 'PhaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '196487512811****',
          ),
        ),
        4 => 
        array (
          'name' => 'DataKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '32bfce96b4e2f9bec0f2ea5cc2f14ace1486cc146d5832d3a84e5332fe89****',
          ),
        ),
        5 => 
        array (
          'name' => 'DataSeq',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据序列号。',
            'type' => 'string',
            'required' => false,
            'example' => 'be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****',
          ),
        ),
        6 => 
        array (
          'name' => 'PhaseData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段数据。长度要求1~4096字节，一个中文字符占两位字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '987823074334****',
          ),
        ),
        7 => 
        array (
          'name' => 'RelatedDataList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '关联数据列表。详情请参见下表RelatedData。',
            'type' => 'object',
            'required' => false,
            'example' => '[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq ":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UploadMPCoSPhaseTextInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UploadMPCoSPhaseTextInfoResponse>","errorExample":""}]',
      'title' => '文本数据上传',
      'summary' => '上传文本类型的阶段数据到区块链，并同时可以绑定所关联的其它阶段数据。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |
',
      'requestParamsDescription' => '**RelatedData**
|参数|类型|是否必选|示例值|描述|
|-|-|-|-|-|
|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。长度要求64字节。|
|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|
|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|
|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'UploadMPCoSPhaseTextInfoByDevice' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        2 => 
        array (
          'name' => 'PhaseGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '协同模型标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '987823074334****',
          ),
        ),
        3 => 
        array (
          'name' => 'PhaseId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '644208887511****',
          ),
        ),
        4 => 
        array (
          'name' => 'DataKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '32bfce96b4e2f9bec0f2ea5cc2f14ace1486cc146d5832d3a84e5332fe89****',
          ),
        ),
        5 => 
        array (
          'name' => 'DataSeq',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据序列号。',
            'type' => 'string',
            'required' => false,
            'example' => 'be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****',
          ),
        ),
        6 => 
        array (
          'name' => 'PhaseData',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阶段数据。长度要求1~4096字节，一个中文字符占两位字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '某公司某业务数据。',
          ),
        ),
        7 => 
        array (
          'name' => 'RelatedDataList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '关联数据列表。详情请参见下表RelatedData。',
            'type' => 'object',
            'required' => false,
            'example' => '[{"relatedPhaseId":"987823074334****","relatedDataKey":"be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****","relatedPhaseData":"某公司某业务数据。","relatedDataSeq":"b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****"}]',
          ),
        ),
        8 => 
        array (
          'name' => 'IotAuthType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT认证方式。
**ID2**：阿里云Link ID²。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ID2',
          ),
        ),
        9 => 
        array (
          'name' => 'IotId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '183329761572****',
          ),
        ),
        10 => 
        array (
          'name' => 'IotIdSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备服务提供方。
- **1**：开放平台。
- **2**：物联网平台。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        11 => 
        array (
          'name' => 'IotIdServiceProvider',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备服务提供方标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '94894989498FDDABD51698BD1A49BF1AFB0AA94FAA8DB65A689164BEED******',
          ),
        ),
        12 => 
        array (
          'name' => 'IotDataDigest',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT可信数据Value摘要：
1：Value数据UTF-8编码。
2：SHA256运算，结果为32字节数据转换为64字节字符串格式（大写字符）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '94894989498FDDABD51698BD1A49BF1AFB0AA94FAA8DB65A689164BEED******',
          ),
        ),
        13 => 
        array (
          'name' => 'IotSignature',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT设备数据签名。
使用IoT设备安全SDK进行签名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2~2~192ADFB498AA****~1579198300000~J8E891NAgAhwHBHm8******/hnswr698HSb09ahS8709bn9s03jg98u4jg******',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '多余参数，请忽略。',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"无\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UploadMPCoSPhaseTextInfoByDeviceResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UploadMPCoSPhaseTextInfoByDeviceResponse>","errorExample":""}]',
      'title' => '设备文本数据上传',
      'summary' => '通过IoT设备签名后，上传文本类型的阶段数据到区块链，并同时可以绑定所关联的其它阶段数据。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' **RelatedData**
|参数|类型|是否必选|示例值|描述|
|-|-|-|-|-|
|relatedPhaseId|String|是|987823074334****|关联的数据阶段ID。|
|relatedDataKey|String|是|be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****|关联的数据Key值。|
|relatedPhaseData|String|是|某公司某业务数据|关联的阶段数据。|
|relatedDataSeq|String|否|b71cca5502d8d7d0057a5ebf44d78ae75280436b86dcbda643c4d264ff2a****|关联的数据序列号。|',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'DescribeCapacityInfo' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'CountQuota' => 
                  array (
                    'description' => '该业务链的条数配额。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10000000',
                  ),
                  'CapacityQuota' => 
                  array (
                    'description' => '该业务链的容量配额（单位：字节）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '800000000000',
                  ),
                  'UsedCount' => 
                  array (
                    'description' => '该业务链已使用条数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '30000',
                  ),
                  'UsedCapacity' => 
                  array (
                    'description' => '该业务链已使用容量（单位：字节）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '870000000',
                  ),
                  'MemberUsedCapacity' => 
                  array (
                    'description' => '当前用户在该业务链已使用的容量（单位：字节）。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '70000000',
                  ),
                  'MemberUsedCount' => 
                  array (
                    'description' => '当前用户该业务链已使用的条数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '26666',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"CountQuota\\": 10000000,\\n    \\"CapacityQuota\\": 800000000000,\\n    \\"UsedCount\\": 30000,\\n    \\"UsedCapacity\\": 870000000,\\n    \\"MemberUsedCapacity\\": 70000000,\\n    \\"MemberUsedCount\\": 26666\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeCapacityInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <CountQuota>10000000</CountQuota>\\n        <MemberUsedCapacity>70000000</MemberUsedCapacity>\\n        <CapacityQuota>800000000000</CapacityQuota>\\n        <UsedCapacity>870000000</UsedCapacity>\\n        <UsedCount>30000</UsedCount>\\n        <MemberUsedCount>26666</MemberUsedCount>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DescribeCapacityInfoResponse>","errorExample":""}]',
      'title' => '查询容量统计信息',
      'summary' => '查询资源容量统计信息。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'DescribeMemberCapacityInfo' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UsedCapacity' => 
                    array (
                      'description' => '用户已使用该业务链容量（单位：字节）。',
                      'type' => 'string',
                      'example' => '70000000',
                    ),
                    'MemberId' => 
                    array (
                      'description' => '账户标识。',
                      'type' => 'string',
                      'example' => '717534457003****',
                    ),
                    'MemberName' => 
                    array (
                      'description' => '账户名称。',
                      'type' => 'string',
                      'example' => '张三',
                    ),
                    'UsedCount' => 
                    array (
                      'description' => '用户已使用该业务链条数。',
                      'type' => 'string',
                      'example' => '26666',
                    ),
                    'MemberUid' => 
                    array (
                      'description' => '阿里云RAM用户UID。',
                      'type' => 'string',
                      'example' => '19720316234381****',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"UsedCapacity\\": \\"70000000\\",\\n      \\"MemberId\\": \\"717534457003****\\",\\n      \\"MemberName\\": \\"张三\\",\\n      \\"UsedCount\\": \\"26666\\",\\n      \\"MemberUid\\": \\"19720316234381****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeMemberCapacityInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <MemberId>717534457003****</MemberId>\\n        <UsedCapacity>70000000</UsedCapacity>\\n        <MemberName>张三</MemberName>\\n        <MemberUid>19720316234381****</MemberUid>\\n        <UsedCount>26666</UsedCount>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DescribeMemberCapacityInfoResponse>","errorExample":""}]',
      'title' => '查询使用方容量信息',
      'summary' => '查询使用方容量统计信息。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'DescribeResourceInfo' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '业务链状态。
- **NORMAL**：正常。
- **EXPIRED**：已过期。',
                    'type' => 'string',
                    'example' => 'NORMAL',
                  ),
                  'EffectiveTime' => 
                  array (
                    'description' => '开通时间。毫秒级时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1586125838680',
                  ),
                  'AuthorizeType' => 
                  array (
                    'description' => '授权类型。
- **企业版**：企业版套餐。
- **标准版**：标准版套餐。',
                    'type' => 'string',
                    'example' => '标准版',
                  ),
                  'ExpiredTime' => 
                  array (
                    'description' => '到期时间。毫秒级时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1666125838680',
                  ),
                  'Region' => 
                  array (
                    'description' => '地域。',
                    'type' => 'string',
                    'example' => 'cn-shanghai',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Status\\": \\"NORMAL\\",\\n    \\"EffectiveTime\\": 1586125838680,\\n    \\"AuthorizeType\\": \\"标准版\\",\\n    \\"ExpiredTime\\": 1666125838680,\\n    \\"Region\\": \\"cn-shanghai\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DescribeResourceInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <Status>NORMAL</Status>\\n        <AuthorizeType>标准版</AuthorizeType>\\n        <EffectiveTime>1586125838680</EffectiveTime>\\n        <ExpiredTime>1666125838680</ExpiredTime>\\n        <Region>cn-shanghai</Region>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DescribeResourceInfoResponse>","errorExample":""}]',
      'title' => '查询资源信息',
      'summary' => '查询资源开通信息。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'GetBlockChainInfo' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据Key唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0001_HB5jyvZWzwcM****_0X**_80aa976ac4d64a97bd45c71a509d****',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链编码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'HB5jyvZWzwcM****',
          ),
        ),
        3 => 
        array (
          'name' => 'BusinessId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '1. 用户业务ID，同一个Key，业务ID必须唯一。格式为64字符，合法字符范围\\[0-9,a-f,A-F\\]。
2. 如果不包含该参数，则返回当前Key最新数据。',
            'type' => 'string',
            'required' => false,
            'example' => '000000000000000000000000000000000000000000000000000000000001****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '返回唯一标识key对应的区块链元数据信息（JSON格式）。详情请参见下表blockChainInfo。',
                'type' => 'string',
                'example' => '{"blockChainInfo":{"chainName":"某公司业务链","blockHeight":48971,"transactionHash":"ea8752787f79be085d9ee244a1b9ed0deb198903a14b9b1a6800b20fbf0d****","iotId":"1BE0F46275B17147E7D2****","endorsementNames":"某公司,某某公司","timestamp":"1591676312000","blockHash":"d07bdaf2736c4d07bdaf2736e5faae508d77ceb82c0e9722a8bcca0e909e****","previousHash":"c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4d07b****","dataHash":"21dc1288bcc0e2730ae486fa04fdeb828ae5c21dc128c525a655972e5faa****"}}',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"{\\\\\\"blockChainInfo\\\\\\":{\\\\\\"chainName\\\\\\":\\\\\\"某公司业务链\\\\\\",\\\\\\"blockHeight\\\\\\":48971,\\\\\\"transactionHash\\\\\\":\\\\\\"ea8752787f79be085d9ee244a1b9ed0deb198903a14b9b1a6800b20fbf0d****\\\\\\",\\\\\\"iotId\\\\\\":\\\\\\"1BE0F46275B17147E7D2****\\\\\\",\\\\\\"endorsementNames\\\\\\":\\\\\\"某公司,某某公司\\\\\\",\\\\\\"timestamp\\\\\\":\\\\\\"1591676312000\\\\\\",\\\\\\"blockHash\\\\\\":\\\\\\"d07bdaf2736c4d07bdaf2736e5faae508d77ceb82c0e9722a8bcca0e909e****\\\\\\",\\\\\\"previousHash\\\\\\":\\\\\\"c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4d07b****\\\\\\",\\\\\\"dataHash\\\\\\":\\\\\\"21dc1288bcc0e2730ae486fa04fdeb828ae5c21dc128c525a655972e5faa****\\\\\\"}}\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetBlockChainInfoResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>{\\"blockChainInfo\\":{\\"chainName\\":\\"某公司业务链\\",\\"blockHeight\\":48971,\\"transactionHash\\":\\"ea8752787f79be085d9ee244a1b9ed0deb198903a14b9b1a6800b20fbf0d****\\",\\"iotId\\":\\"1BE0F46275B17147E7D2****\\",\\"endorsementNames\\":\\"某公司,某某公司\\",\\"timestamp\\":\\"1591676312000\\",\\"blockHash\\":\\"d07bdaf2736c4d07bdaf2736e5faae508d77ceb82c0e9722a8bcca0e909e****\\",\\"previousHash\\":\\"c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4d07b****\\",\\"dataHash\\":\\"21dc1288bcc0e2730ae486fa04fdeb828ae5c21dc128c525a655972e5faa****\\"}}</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetBlockChainInfoResponse>","errorExample":""}]',
      'title' => '查询数据区块链元信息',
      'summary' => '用于查询上传数据的区块链元信息。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '**blockChainInfo**
|参数|类型|示例值|描述|
|-|-|-|-|
|chainName|String|某公司业务链|存储区块链名称。|
|blockHeight|Long|48971|区块链存证区块号。|
|transactionHash|String|ea8752787f79be085d9ee244a1b9ed0deb198903a14b9b1a6800b20f********|交易哈希。|
|iotId|String|1BE0F46275B17147E7D2****|IoT设备ID。|
|endorsementNames|String|某公司,某某公司|区块链背书节点名称。|
|timestamp|String|1591676312000|存证时间。毫秒级时间戳。|
|blockHash|String|d07bdaf2736c4d07bdaf2736e5faae508d77ceb82c0e9722a8bcca0e********|区块哈希。|
|previousHash|String|c4d07bdaf2736cc0ec0e909e60e5c21dc14d0eb823eb82f4f99791c4********|上一区块哈希。|
|dataHash|String|21dc1288bcc0e2730ae486fa04fdeb828ae5c21dc128c525a655972e********|数据哈希。|',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'GetData' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据Key唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'HB5jyvZWzw******',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链编码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0001_HB5jyvZWzwcMFSFg_0X58_80aa976ac4d64a97b******a509d4c0b',
          ),
        ),
        3 => 
        array (
          'name' => 'BusinessId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '1. 用户业务ID，同一个Key，业务ID必须唯一。格式为64字符，合法字符范围\\[0-9,a-f,A-F\\]。
2. 如果不包含该参数，则返回当前Key最新数据。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '000000000000000000000000000000000000000000000000000000000001****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '返回数据Key对应的Value数据。',
                'type' => 'string',
                'example' => '某业务数据。',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"某业务数据。\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetDataResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>某业务数据。</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetDataResponse>","errorExample":""}]',
      'title' => '查询数据',
      'summary' => '用于确认之前上传的数据已处理成功。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'GetDataModelConfigInfo' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'api版本号，"1.0.0"。',
            'type' => 'string',
            'required' => false,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IoT数据源组ProductKey。',
            'type' => 'string',
            'required' => false,
            'example' => 'HB5jyvZWzwcM****',
          ),
        ),
        2 => 
        array (
          'name' => 'DataModelCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据模型编码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'DF3K',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误消息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'string',
                'example' => '{}',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'RequestID-1638240165139',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。-**true**：调用成功，但不代表调用的服务器端口和协议不存在。-**false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"{}\\",\\n  \\"RequestId\\": \\"RequestID-1638240165139\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询模型配置',
      'summary' => '用户查询自定义数据模型配置信息。',
    ),
    'GetHistoryDataCount' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据Key唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0001_HB5jyvZWzwcM****_0X**_80aa976ac4d64a97bd45c71a509d****',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链编码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'HB5jyvZWzwcM****',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始时间戳。毫秒级时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9594629196518',
            'minimum' => '0',
            'example' => '1608010000000',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间戳。毫秒级时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9594629196518',
            'minimum' => '0',
            'example' => '1608019800000',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'Data' => 
              array (
                'description' => '返回Key对应的记录条数。',
                'type' => 'string',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"Data\\": \\"10\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetHistoryDataCountResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>10</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetHistoryDataCountResponse>","errorExample":""}]',
      'title' => '查询历史数据条数',
      'summary' => '历史数据数量查询，该API用于从 IoT区块链可信应用系统查询历史数据条数 。',
      'description' => '> 若不传时间戳，则返回所有历史数据的数量。

**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'GetHistoryDataList' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据Key唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0001_HB5jyvZWzwcM****_0X**_80aa976ac4d64a97bd45c71a509d****',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链编码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'HB5jyvZWzwcM****',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定显示返回结果中的第几页，最小取值是1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '10000000',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始时间戳。毫秒级时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9594629196518',
            'minimum' => '0',
            'example' => '1608010000000',
          ),
        ),
        6 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间戳。毫秒级时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9594629196518',
            'minimum' => '0',
            'example' => '1608019800000',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Data' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回Key对应的所有Value数据列表(JSON格式)。',
                      'type' => 'object',
                      'example' => '[{"chainName":"PS-**","code":"9***","blockHeight":"605350","businessId":"129297272256****","totalCount":"2","value":"某公司业务数据。","transactionHash":"ba2fe24cbe23816bdbb18ad037dd5e5f58468cb3ad345e456d106308ed37****","seq":"1","timestamp":"1608005018000"},{"chainName":"PS-**","code":"9***","blockHeight":"605349","businessId":"129297272258****","totalCount":"2","value":"某公司业务数据。","transactionHash":"18440d577e7d77a5d423eee4495902fb29073a904786ee01babc869815c9****","seq":"2","timestamp":"1608003040000"}]',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Data\\": [\\n      \\"[{\\\\\\"chainName\\\\\\":\\\\\\"PS-**\\\\\\",\\\\\\"code\\\\\\":\\\\\\"9***\\\\\\",\\\\\\"blockHeight\\\\\\":\\\\\\"605350\\\\\\",\\\\\\"businessId\\\\\\":\\\\\\"129297272256****\\\\\\",\\\\\\"totalCount\\\\\\":\\\\\\"2\\\\\\",\\\\\\"value\\\\\\":\\\\\\"某公司业务数据。\\\\\\",\\\\\\"transactionHash\\\\\\":\\\\\\"ba2fe24cbe23816bdbb18ad037dd5e5f58468cb3ad345e456d106308ed37****\\\\\\",\\\\\\"seq\\\\\\":\\\\\\"1\\\\\\",\\\\\\"timestamp\\\\\\":\\\\\\"1608005018000\\\\\\"},{\\\\\\"chainName\\\\\\":\\\\\\"PS-**\\\\\\",\\\\\\"code\\\\\\":\\\\\\"9***\\\\\\",\\\\\\"blockHeight\\\\\\":\\\\\\"605349\\\\\\",\\\\\\"businessId\\\\\\":\\\\\\"129297272258****\\\\\\",\\\\\\"totalCount\\\\\\":\\\\\\"2\\\\\\",\\\\\\"value\\\\\\":\\\\\\"某公司业务数据。\\\\\\",\\\\\\"transactionHash\\\\\\":\\\\\\"18440d577e7d77a5d423eee4495902fb29073a904786ee01babc869815c9****\\\\\\",\\\\\\"seq\\\\\\":\\\\\\"2\\\\\\",\\\\\\"timestamp\\\\\\":\\\\\\"1608003040000\\\\\\"}]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetHistoryDataListResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <Data>[{\\"chainName\\":\\"PS-**\\",\\"code\\":\\"9***\\",\\"blockHeight\\":\\"605350\\",\\"businessId\\":\\"129297272256****\\",\\"totalCount\\":\\"2\\",\\"value\\":\\"某公司业务数据。\\",\\"transactionHash\\":\\"ba2fe24cbe23816bdbb18ad037dd5e5f58468cb3ad345e456d106308ed37****\\",\\"seq\\":\\"1\\",\\"timestamp\\":\\"1608005018000\\"},{\\"chainName\\":\\"PS-**\\",\\"code\\":\\"9***\\",\\"blockHeight\\":\\"605349\\",\\"businessId\\":\\"129297272258****\\",\\"totalCount\\":\\"2\\",\\"value\\":\\"某公司业务数据。\\",\\"transactionHash\\":\\"18440d577e7d77a5d423eee4495902fb29073a904786ee01babc869815c9****\\",\\"seq\\":\\"2\\",\\"timestamp\\":\\"1608003040000\\"}]</Data>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetHistoryDataListResponse>","errorExample":""}]',
      'title' => '查询历史数据列表',
      'summary' => '历史数据查询，该API用于从 IoT区块链可信应用系统查询历史数据 。',
      'description' => '1. 当传递时间参数时开始时间和结束时间，最大查询区间为 30天 。
2. 当未传递时间参数时，限制数据量最大为500条，如超过该条数限制需添加时间戳参数方式查询。


**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'ListDependentDataModels' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'api版本号，"1.0.0"。',
            'type' => 'string',
            'required' => false,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'ProductKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品的ProductKey。',
            'type' => 'string',
            'required' => false,
            'example' => 'HB5jyvZWzwcM****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '响应状态描述。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'RequestID-1638239980855',
              ),
              'Success' => 
              array (
                'description' => '是否成功。-**true**：表示是。-**false**：表示否。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DataModelInfo' => 
                  array (
                    'description' => '响应内容。',
                    'example' => '{}',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DataModelName' => 
                        array (
                          'description' => '数据模型名称',
                          'type' => 'string',
                          'example' => '测算模型',
                        ),
                        'DataModelCode' => 
                        array (
                          'description' => '数据模型编码',
                          'type' => 'string',
                          'example' => 'KI8D',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"RequestID-1638239980855\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"DataModelInfo\\": [\\n      {\\n        \\"DataModelName\\": \\"测算模型\\",\\n        \\"DataModelCode\\": \\"KI8D\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询自定义模型列表',
      'summary' => '用于查询自定义模型列表。',
    ),
    'ListMultiPartyCollaborationChain' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Num',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定显示返回结果中的第几页，最小取值是1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的业务链名称。

> 不传则查询所有业务链。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '某业务链',
          ),
        ),
      ),
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
                'description' => '响应状态。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Num' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Size' => 
                  array (
                    'description' => '每页数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageData' => 
                  array (
                    'description' => '数据项。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '业务链名称。',
                          'type' => 'string',
                          'example' => '某业务链',
                        ),
                        'Remark' => 
                        array (
                          'description' => '业务链备注。',
                          'type' => 'string',
                          'example' => '某业务某服务',
                        ),
                        'RoleType' => 
                        array (
                          'description' => '账号角色。
- **ADMIN**：业务管理方。
- **MEMBER**：业务使用方。',
                          'type' => 'string',
                          'example' => 'ADMIN',
                        ),
                        'BizChainId' => 
                        array (
                          'description' => '业务链标识。',
                          'type' => 'string',
                          'example' => '489973087549****',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 1,\\n    \\"Size\\": 1,\\n    \\"PageData\\": [\\n      {\\n        \\"Name\\": \\"某业务链\\",\\n        \\"Remark\\": \\"某业务某服务\\",\\n        \\"RoleType\\": \\"ADMIN\\",\\n        \\"BizChainId\\": \\"489973087549****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListMultiPartyCollaborationChainResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <BizChainId>489973087549****</BizChainId>\\n            <RoleType>ADMIN</RoleType>\\n            <Remark>某业务某服务</Remark>\\n            <Name>某业务链</Name>\\n        </PageData>\\n        <Size>1</Size>\\n        <Num>1</Num>\\n        <Total>1</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListMultiPartyCollaborationChainResponse>","errorExample":""}]',
      'title' => '查询多方任务协同业务链列表',
      'summary' => '用于查询多方任务协同业务链列表。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'ListProofChain' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Num',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定显示返回结果中的第几页，最小取值是1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的业务链名称。

> 不传则查询所有存证服务业务链。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '某业务链',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Num' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Size' => 
                  array (
                    'description' => '每页数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'PageData' => 
                  array (
                    'description' => '数据项。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Remark' => 
                        array (
                          'description' => '业务链备注。',
                          'type' => 'string',
                          'example' => '某业务链的备注信息。',
                        ),
                        'BizChainId' => 
                        array (
                          'description' => '业务链标识。',
                          'type' => 'string',
                          'example' => '489973087549****',
                        ),
                        'RoleType' => 
                        array (
                          'description' => '账号角色。
- **ADMIN**：业务管理方。
- **MEMBER**：业务使用方。',
                          'type' => 'string',
                          'example' => 'ADMIN',
                        ),
                        'BizChainCode' => 
                        array (
                          'description' => '业务链编码。',
                          'type' => 'string',
                          'example' => 'SA7z9XkBMVPg****',
                        ),
                        'Name' => 
                        array (
                          'description' => '业务链名称。',
                          'type' => 'string',
                          'example' => '某业务链',
                        ),
                        'DataTypeCode' => 
                        array (
                          'description' => '类型编码。',
                          'type' => 'string',
                          'example' => 'B***',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 10,\\n    \\"Size\\": 2,\\n    \\"PageData\\": [\\n      {\\n        \\"Remark\\": \\"某业务链的备注信息。\\",\\n        \\"BizChainId\\": \\"489973087549****\\",\\n        \\"RoleType\\": \\"ADMIN\\",\\n        \\"BizChainCode\\": \\"SA7z9XkBMVPg****\\",\\n        \\"Name\\": \\"某业务链\\",\\n        \\"DataTypeCode\\": \\"B***\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListProofChainResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <RoleType>ADMIN</RoleType>\\n            <BizChainId>489973087549****</BizChainId>\\n            <DataTypeCode>B***</DataTypeCode>\\n            <BizChainCode>SA7z9XkBMVPg****</BizChainCode>\\n            <Remark>某业务链的备注信息。</Remark>\\n            <Name>某业务链</Name>\\n        </PageData>\\n        <PageData>\\n            <RoleType>ADMIN</RoleType>\\n            <BizChainId>489973087550****</BizChainId>\\n            <DataTypeCode>C***</DataTypeCode>\\n            <BizChainCode>SA7z9XkBMVPj****</BizChainCode>\\n            <Remark>某某业务链的备注信息。</Remark>\\n            <Name>某某业务链</Name>\\n        </PageData>\\n        <Size>2</Size>\\n        <Num>1</Num>\\n        <Total>10</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListProofChainResponse>","errorExample":""}]',
      'title' => '查询存证与溯源业务链列表',
      'summary' => '用于查询存证与溯源业务链列表。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | √      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
    'ListPSMemberDataTypeCode' => 
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
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API版本号，"1.0.0"。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1.0.0',
          ),
        ),
        1 => 
        array (
          'name' => 'Num',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定显示返回结果中的第几页，最小取值是1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定返回结果中每页显示的记录数量，最大值是100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'BizChainId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务链标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '489973087549****',
          ),
        ),
        4 => 
        array (
          'name' => 'MemberUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要查询的阿里云RAM用户UID。
> 不传则查询所有阿里云RAM用户UID。',
            'type' => 'string',
            'required' => false,
            'example' => '19720316234381****',
          ),
        ),
      ),
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
                'description' => '响应状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '调用失败时，返回的出错信息。',
                'type' => 'string',
                'example' => 'The system is busy. Please try again later.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'D5C69894-9709-4653-B3D8-25234034C2FC',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Num' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Size' => 
                  array (
                    'description' => '每页数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'PageData' => 
                  array (
                    'description' => '数据项。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MemberId' => 
                        array (
                          'description' => '账户标识。',
                          'type' => 'string',
                          'example' => '717534457003****',
                        ),
                        'DataTypeCode' => 
                        array (
                          'description' => '存证类型编码。',
                          'type' => 'string',
                          'example' => 'E***',
                        ),
                        'MemberName' => 
                        array (
                          'description' => '账户名称。',
                          'type' => 'string',
                          'example' => '某某公司账户',
                        ),
                        'MemberUid' => 
                        array (
                          'description' => '阿里云RAM用户UID。',
                          'type' => 'string',
                          'example' => '19720316234381****',
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
            'errorCode' => 'SYSTEMERROR',
            'errorMessage' => 'The system is busy. Please try again later.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 200,\\n  \\"Message\\": \\"The system is busy. Please try again later.\\",\\n  \\"RequestId\\": \\"D5C69894-9709-4653-B3D8-25234034C2FC\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Num\\": 1,\\n    \\"Total\\": 10,\\n    \\"Size\\": 2,\\n    \\"PageData\\": [\\n      {\\n        \\"MemberId\\": \\"717534457003****\\",\\n        \\"DataTypeCode\\": \\"E***\\",\\n        \\"MemberName\\": \\"某某公司账户\\",\\n        \\"MemberUid\\": \\"19720316234381****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListPSMemberDataTypeCodeResponse>\\n    <Message/>\\n    <RequestId>D5C69894-9709-4653-B3D8-25234034C2FC</RequestId>\\n    <Data>\\n        <PageData>\\n            <MemberId>717534457003****</MemberId>\\n            <MemberName>某某公司账户</MemberName>\\n            <MemberUid>19720316234381****</MemberUid>\\n            <DataTypeCode>E***</DataTypeCode>\\n        </PageData>\\n        <PageData>\\n            <MemberId>717534457005****</MemberId>\\n            <MemberName>某公司账户</MemberName>\\n            <MemberUid>19720316234382****</MemberUid>\\n            <DataTypeCode>D***</DataTypeCode>\\n        </PageData>\\n        <Size>2</Size>\\n        <Num>1</Num>\\n        <Total>10</Total>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListPSMemberDataTypeCodeResponse>","errorExample":""}]',
      'title' => '查询接入方类型编码',
      'summary' => '查询接入方账号下存证类型编码。',
      'description' => '**可访问账号：**
| 业务管理方        | 业务使用方    |
| :--------:   | :-----:   |
| √       | ×      |',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
错误码详细信息，请参见[错误码](~~184711~~)。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-huhehaote-nebula-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'cn-zhangbei',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    54 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'ltl.aliyuncs.com',
    ),
    55 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'ltl.cn-hangzhou.aliyuncs.com',
    ),
    56 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'ltl.cn-shanghai.aliyuncs.com',
    ),
  ),
);
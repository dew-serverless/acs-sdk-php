<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'ResourceSharing',
    'version' => '2020-01-10',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 165993,
      'title' => '共享单元',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EnableSharingWithResourceDirectory',
        1 => 'CreateResourceShare',
        2 => 'ListResourceShares',
        3 => 'UpdateResourceShare',
        4 => 'DeleteResourceShare',
        5 => 'AssociateResourceShare',
        6 => 'DisassociateResourceShare',
        7 => 'ListResourceShareAssociations',
        8 => 'ListSharedResources',
        9 => 'ListSharedTargets',
        10 => 'DescribeRegions',
        11 => 'CheckSharingWithResourceDirectoryStatus',
        12 => 'ChangeResourceGroup',
      ),
    ),
    1 => 
    array (
      'id' => 165991,
      'title' => '共享邀请',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListResourceShareInvitations',
        1 => 'AcceptResourceShareInvitation',
        2 => 'RejectResourceShareInvitation',
      ),
    ),
    2 => 
    array (
      'id' => 166002,
      'title' => '共享权限',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AssociateResourceSharePermission',
        1 => 'DisassociateResourceSharePermission',
        2 => 'ListResourceSharePermissions',
        3 => 'GetPermission',
        4 => 'ListPermissionVersions',
        5 => 'ListPermissions',
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
    'EnableSharingWithResourceDirectory' => 
    array (
      'summary' => '启用资源目录组织共享。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F23CFB6-A721-4E90-AC1E-0E30FA8B45DA',
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
            'errorCode' => 'ActionNotPermitted',
            'errorMessage' => 'The caller must be the master account for the Resource Directory.',
          ),
          1 => 
          array (
            'errorCode' => 'AlreadyEnabled',
            'errorMessage' => 'You have already enabled sharing with the Resource Directory.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2F23CFB6-A721-4E90-AC1E-0E30FA8B45DA\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableSharingWithResourceDirectoryResponse>\\n    <RequestId>2F23CFB6-A721-4E90-AC1E-0E30FA8B45DA</RequestId>\\n</EnableSharingWithResourceDirectoryResponse>","errorExample":""}]',
      'title' => '启用资源目录组织共享',
      'description' => '启用资源目录组织共享功能后，资源所有者才能将资源共享给整个资源目录、资源夹或成员。

本API仅限资源目录的管理账号及其下被授权的RAM用户或RAM角色调用。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'CreateResourceShare' => 
    array (
      'summary' => '创建共享单元。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceShareName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元名称。

长度范围：1~50个字符。

格式：允许输入英文字母、数字、中文、半角句号（.）、下划线（_）或短划线（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'Resources',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '共享资源列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '共享资源列表。',
              'type' => 'object',
              'properties' => 
              array (
                'ResourceType' => 
                array (
                  'description' => '共享资源类型。

N的取值范围：1~5，即每次最多添加5个共享资源。

支持共享的资源类型，请参见[支持资源共享的云服务](~~450526~~)。

> `Resources.N.ResourceId`与`Resources.N.ResourceType`成对出现，需要同时设置。
',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'VSwitch',
                ),
                'ResourceId' => 
                array (
                  'description' => '共享资源ID。

N的取值范围：1~5，即每次最多添加5个共享资源。

> `Resources.N.ResourceId`与`Resources.N.ResourceType`成对出现，需要同时设置。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vsw-bp183p93qs667muql****',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        2 => 
        array (
          'name' => 'Targets',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源使用者。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源使用者。取值：

- 当`AllowExternalTargets`为`false`时，资源使用者可以为资源目录ID、资源夹ID或成员ID。
- 当`AllowExternalTargets`为`true`时，资源使用者可以为阿里云账号ID、资源目录ID、资源夹ID、成员ID或阿里云服务。

更多信息，请参见[资源共享方式](~~160622~~)、[查看资源目录ID](~~111217~~)、[查看资源夹ID](~~111223~~)或[查看成员ID](~~111624~~)。

N的取值范围：1~5，即每次最多添加5个资源使用者。',
              'type' => 'string',
              'required' => false,
              'example' => '172050525300****',
            ),
            'required' => false,
            'example' => '172050525300****',
            'maxItems' => 20,
          ),
        ),
        3 => 
        array (
          'name' => 'PermissionNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '共享权限名称。为空时，系统自动绑定资源类型关联的默认权限。具体信息，请参见[权限库](~~465474~~)。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '共享权限名称。为空时，系统自动绑定资源类型关联的默认权限。具体信息，请参见[权限库](~~465474~~)。',
              'type' => 'string',
              'required' => false,
              'example' => 'AliyunRSDefaultPermissionVSwitch',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        4 => 
        array (
          'name' => 'AllowExternalTargets',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否允许共享给资源目录外的账号。取值：

- false（默认值）：仅允许资源目录内共享。
- true：允许共享给任意账号。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'TargetProperties',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '资源使用者属性。
> 仅当资源使用者为阿里云服务时可以设置该参数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源使用者属性。
> 仅当资源使用者为阿里云服务时可以设置该参数。',
              'type' => 'object',
              'properties' => 
              array (
                'TargetId' => 
                array (
                  'description' => '资源使用者ID。

> `TargetProperties.N.TargetId`与`TargetProperties.N.Property`成对出现，需要同时设置。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '172050525300****',
                ),
                'Property' => 
                array (
                  'description' => '资源使用者属性参数。例如：您可以设置资源共享的时间段。`timeRangeType`取值：
- timeRange：指定时间段。
- day：全天。
> `TargetProperties.N.TargetId`与`TargetProperties.N.Property`成对出现，需要同时设置。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{
    "timeRange":{
        "timeRangeType":"timeRange",
        "beginAtTime":"00:00",
        "timezone":"UTC+8",
        "endAtTime":"19:59"
    }
}',
                ),
              ),
              'required' => false,
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2C3FA051-61DC-4F3E-81E9-E4830524DF4B',
              ),
              'ResourceShare' => 
              array (
                'description' => '共享单元信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateTime' => 
                  array (
                    'description' => '共享单元更新时间。',
                    'type' => 'string',
                    'example' => '2020-12-03T08:02:22.413Z',
                  ),
                  'ResourceShareName' => 
                  array (
                    'description' => '共享单元名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'ResourceShareOwner' => 
                  array (
                    'description' => '共享单元归属者。',
                    'type' => 'string',
                    'example' => '151266687691****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '共享单元创建时间。',
                    'type' => 'string',
                    'example' => '2020-12-03T08:02:22.413Z',
                  ),
                  'ResourceShareId' => 
                  array (
                    'description' => '共享单元ID。',
                    'type' => 'string',
                    'example' => 'rs-qSkW1HBY****',
                  ),
                  'ResourceShareStatus' => 
                  array (
                    'description' => '共享单元状态。取值：

- Active：已启用。
- Pending：待确认。
- Deleting：删除中。
- Deleted：已删除。

> Deleted状态的共享单元记录，会在48~96小时内被系统自动删除。',
                    'type' => 'string',
                    'example' => 'Active',
                  ),
                  'AllowExternalTargets' => 
                  array (
                    'description' => '是否允许共享给资源目录外的账号。取值：

- false：仅允许资源目录内共享。
- true：允许共享给任意账号。',
                    'type' => 'boolean',
                    'example' => 'false',
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
            'errorCode' => 'InvalidParameter.ResourceShareName',
            'errorMessage' => 'The ResourceShareName is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareName.Length',
            'errorMessage' => 'The maximum length of ResourceShareName exceeds 50 characters.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Resources',
            'errorMessage' => 'The Resources is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.Resources.Duplicate',
            'errorMessage' => 'The Resources contains duplicate values.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Resources.Length',
            'errorMessage' => 'The maximum number of Resources exceeds 5.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.Targets',
            'errorMessage' => 'The Targets is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.Targets.Duplicate',
            'errorMessage' => 'The Targets contains duplicate values.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.Targets.Length',
            'errorMessage' => 'The maximum number of Targets exceeds 5.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidTarget',
            'errorMessage' => 'The shared target does not exist in the resource directory.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'MissingParameter.ResourceShareName',
            'errorMessage' => 'You must specify ResourceShareName.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The ResourceType is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParameter.PermissionNames.Duplicate',
            'errorMessage' => 'The PermissionNames duplicate values.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParameter.PermissionNames.Length',
            'errorMessage' => 'The maximum length of PermissionNames exceeds quota limit.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidParameter.TargetProperties',
            'errorMessage' => 'The TargetProperties is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidParameter.TargetProperties.Duplicate',
            'errorMessage' => 'The TargetProperties contains duplicate values.',
          ),
          16 => 
          array (
            'errorCode' => 'InvalidParameter.TargetProperties.Length',
            'errorMessage' => 'The TargetProperties beyond the length limit.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Permission',
            'errorMessage' => 'The resource share permission does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotEnableSharingWithResourceDirectory',
            'errorMessage' => 'You have not enabled sharing with your Resource Directory.',
          ),
          1 => 
          array (
            'errorCode' => 'AccountNotInResourceDirectory',
            'errorMessage' => 'The account is not a master or a member of a resource directory.',
          ),
          2 => 
          array (
            'errorCode' => 'QuotaExceeded.ResourceShare.Count',
            'errorMessage' => 'The maximum number of ResourceShare exceeds the limit.',
          ),
          3 => 
          array (
            'errorCode' => 'EntityAlreadyExists.ResourceShare',
            'errorMessage' => 'The specified resource share ID already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'QuotaExceeded.SharedResource.Count',
            'errorMessage' => 'The maximum number of shared resources per account  exceeds the limit.',
          ),
          5 => 
          array (
            'errorCode' => 'ShareWithYourself',
            'errorMessage' => 'You cannot share resources with yourself.',
          ),
          6 => 
          array (
            'errorCode' => 'NotManagementAccount',
            'errorMessage' => 'Only the management account of the service is allowed to share such resources.',
          ),
          7 => 
          array (
            'errorCode' => 'QuotaExceeded.PendingInvitations',
            'errorMessage' => 'The maximum number of pending invitations exceeds the limit.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidTarget.LegalEntityMismatch',
            'errorMessage' => 'The target account does not have the same legal entity as the resource owner account.',
          ),
          9 => 
          array (
            'errorCode' => 'ExternalTargetsNotAllowed.ResourceType',
            'errorMessage' => 'The resource share includes resource types that cannot be shared with accounts outside the resource directory.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidTarget.SiteMismatch',
            'errorMessage' => 'Cross-site resource sharing is not supported.',
          ),
          11 => 
          array (
            'errorCode' => 'NotSupport.Service.ExistInOtherResourceShare',
            'errorMessage' => 'The resource type has been shared to the target service through other resourceShare. Please share it in the same resourceShare.',
          ),
          12 => 
          array (
            'errorCode' => 'NotSupport.Service.AssociateConflict',
            'errorMessage' => 'The same resource cannot be shared repeatedly to the target service.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2C3FA051-61DC-4F3E-81E9-E4830524DF4B\\",\\n  \\"ResourceShare\\": {\\n    \\"UpdateTime\\": \\"2020-12-03T08:02:22.413Z\\",\\n    \\"ResourceShareName\\": \\"test\\",\\n    \\"ResourceShareOwner\\": \\"151266687691****\\",\\n    \\"CreateTime\\": \\"2020-12-03T08:02:22.413Z\\",\\n    \\"ResourceShareId\\": \\"rs-qSkW1HBY****\\",\\n    \\"ResourceShareStatus\\": \\"Active\\",\\n    \\"AllowExternalTargets\\": false\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateResourceShareResponse>\\n    <RequestId>2C3FA051-61DC-4F3E-81E9-E4830524DF4B</RequestId>\\n    <ResourceShare>\\n        <ResourceShareId>rs-qSkW1HBY****</ResourceShareId>\\n        <ResourceShareName>test</ResourceShareName>\\n        <ResourceShareStatus>Active</ResourceShareStatus>\\n        <CreateTime>2020-12-03T08:02:22.413Z</CreateTime>\\n        <UpdateTime>2020-12-03T08:02:22.413Z</UpdateTime>\\n        <ResourceShareOwner>151266687691****</ResourceShareOwner>\\n        <AllowExternalTargets>false</AllowExternalTargets>\\n    </ResourceShare>\\n</CreateResourceShareResponse>","errorExample":""}]',
      'title' => '创建共享单元',
      'description' => '阿里云资源共享（Resource Sharing）支持将一个账号下的指定资源共享给一个或多个目标账号使用。更多信息，请参见[资源共享概述](~~160622~~)。

本文将提供一个示例，在`cn-hangzhou`地域，使用资源目录管理账号创建一个名为`test`的共享单元，将VPC交换机`vsw-bp183p93qs667muql****`共享给资源目录内的成员`172050525300****`。',
    ),
    'ListResourceShares' => 
    array (
      'summary' => '查询共享单元列表。',
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
          'name' => 'ResourceOwner',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元归属者。取值：

- Self：查询当前账号的共享单元列表。
- OtherAccounts：查询其他账号共享给当前账号的共享单元列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Self',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceShareName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceShareStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元状态。取值：

- Active：已启用。
- Pending：待确认。
- Deleting：删除中。
- Deleted：已删除。

> Deleted状态的共享单元记录，会在48~96小时内被系统自动删除。',
            'type' => 'string',
            'required' => false,
            'example' => 'Active',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单次请求返回结果的最大条数。

取值范围：1~100。默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，您可以使用`NextToken`再次发起请求，获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'TGlzdFJlc291cm****',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceShareIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '共享单元ID。

N的取值范围：1~5，即每次最多指定5个共享单元。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '共享单元ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'rs-PqysnzIj****',
            ),
            'required' => false,
            'example' => 'rs-PqysnzIj****',
            'maxItems' => 20,
          ),
        ),
        6 => 
        array (
          'name' => 'PermissionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享权限名称。具体信息，请参见[权限库](~~465474~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'AliyunRSDefaultPermissionVSwitch',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '当请求的返回结果被截断时，您可以使用`NextToken`再次发起请求，获取从当前截断位置之后的内容。',
                'type' => 'string',
                'example' => 'TGlzdFJlc291cm****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F23CFB6-A721-4E90-AC1E-0E30FA8B45DA',
              ),
              'ResourceShares' => 
              array (
                'description' => '共享单元信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '共享单元信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UpdateTime' => 
                    array (
                      'description' => '共享单元更新时间。',
                      'type' => 'string',
                      'example' => '2020-12-03T08:01:43.638Z',
                    ),
                    'ResourceShareName' => 
                    array (
                      'description' => '共享单元名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'ResourceShareOwner' => 
                    array (
                      'description' => '共享单元归属者。',
                      'type' => 'string',
                      'example' => '151266687691****',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '共享单元创建时间。',
                      'type' => 'string',
                      'example' => '2020-12-03T02:20:31.292Z',
                    ),
                    'ResourceShareId' => 
                    array (
                      'description' => '共享单元ID。',
                      'type' => 'string',
                      'example' => 'rs-PqysnzIj****',
                    ),
                    'ResourceShareStatus' => 
                    array (
                      'description' => '共享单元状态。取值：

- Active：已启用。
- Pending：待确认。
- Deleting：删除中。
- Deleted：已删除。

> Deleted状态的共享单元记录，会在48~96小时内被系统自动删除。',
                      'type' => 'string',
                      'example' => 'Active',
                    ),
                    'AllowExternalTargets' => 
                    array (
                      'description' => '是否允许共享给资源目录外的账号。取值：

- false：仅允许资源目录内共享。
- true：允许共享给任意账号。',
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
            'errorCode' => 'MissingParameter.ResourceOwner',
            'errorMessage' => 'You must specify ResourceOwner.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceOwner',
            'errorMessage' => 'The ResourceOwner is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareName',
            'errorMessage' => 'The ResourceShareName is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareName.Length',
            'errorMessage' => 'The maximum length of ResourceShareName exceeds 50 characters.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareStatus',
            'errorMessage' => 'The ResourceShareStatus is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The MaxResults is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken',
            'errorMessage' => 'The NextToken is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken.Length',
            'errorMessage' => 'The maximum length of NextToken exceeds 256 characters.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds',
            'errorMessage' => 'The ResourceShareIds is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds.Duplicate',
            'errorMessage' => 'The ResourceShareIds contains duplicate values.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds.Length',
            'errorMessage' => 'The maximum length of ResourceShareIds exceeds 5 characters.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"TGlzdFJlc291cm****\\",\\n  \\"RequestId\\": \\"2F23CFB6-A721-4E90-AC1E-0E30FA8B45DA\\",\\n  \\"ResourceShares\\": [\\n    {\\n      \\"UpdateTime\\": \\"2020-12-03T08:01:43.638Z\\",\\n      \\"ResourceShareName\\": \\"test\\",\\n      \\"ResourceShareOwner\\": \\"151266687691****\\",\\n      \\"CreateTime\\": \\"2020-12-03T02:20:31.292Z\\",\\n      \\"ResourceShareId\\": \\"rs-PqysnzIj****\\",\\n      \\"ResourceShareStatus\\": \\"Active\\",\\n      \\"AllowExternalTargets\\": false\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListResourceSharesResponse>\\n    <ResourceShares>\\n        <ResourceShareId>rs-hX9wC5jO****</ResourceShareId>\\n        <ResourceShareName>test1</ResourceShareName>\\n        <ResourceShareStatus>Deleted</ResourceShareStatus>\\n        <CreateTime>2020-12-03T02:47:14.651Z</CreateTime>\\n        <UpdateTime>2020-12-03T08:01:56.696Z</UpdateTime>\\n        <ResourceShareOwner>151266687691****</ResourceShareOwner>\\n        <AllowExternalTargets>false</AllowExternalTargets>\\n    </ResourceShares>\\n    <ResourceShares>\\n        <ResourceShareId>rs-PqysnzIj****</ResourceShareId>\\n        <ResourceShareName>test</ResourceShareName>\\n        <ResourceShareStatus>Active</ResourceShareStatus>\\n        <CreateTime>2020-12-03T02:20:31.292Z</CreateTime>\\n        <UpdateTime>2020-12-03T08:01:43.638Z</UpdateTime>\\n        <ResourceShareOwner>151266687691****</ResourceShareOwner>\\n        <AllowExternalTargets>true</AllowExternalTargets>\\n    </ResourceShares>\\n    <RequestId>2F23CFB6-A721-4E90-AC1E-0E30FA8B45DA</RequestId>\\n</ListResourceSharesResponse>","errorExample":""}]',
      'title' => '查询共享单元列表',
      'description' => '本文将提供一个示例，查询当前账号在`cn-hangzhou`地域创建的共享单元列表。返回结果显示，当前账号`151266687691****`创建过以下2个共享单元：

- 共享单元`rs-hX9wC5jO****`，处于已删除`Deleted`状态。
- 共享单元`rs-PqysnzIj****`，处于已启用`Active`状态。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateResourceShare' => 
    array (
      'summary' => '修改共享单元名称。',
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
          'name' => 'ResourceShareId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rs-qSkW1HBY****',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceShareName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '新的共享单元名称。

长度范围：1~50个字符。

格式：允许输入英文字母、数字、中文、英文句点（.）、下划线（_）或短划线（-）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'new',
          ),
        ),
        2 => 
        array (
          'name' => 'AllowExternalTargets',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否允许共享给资源目录外的账号。取值：

- false：仅允许资源目录内共享。
- true：允许共享给任意账号。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2860A3A4-D8C1-4EF4-954E-84A3945E26E5',
              ),
              'ResourceShare' => 
              array (
                'description' => '共享单元信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'UpdateTime' => 
                  array (
                    'description' => '共享单元更新时间。',
                    'type' => 'string',
                    'example' => '2020-12-04T08:55:25.382Z',
                  ),
                  'ResourceShareName' => 
                  array (
                    'description' => '共享单元名称。',
                    'type' => 'string',
                    'example' => 'new',
                  ),
                  'ResourceShareOwner' => 
                  array (
                    'description' => '共享单元归属者。',
                    'type' => 'string',
                    'example' => '151266687691****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '共享单元创建时间。',
                    'type' => 'string',
                    'example' => '2020-12-03T08:02:22.413Z',
                  ),
                  'ResourceShareId' => 
                  array (
                    'description' => '共享单元ID。',
                    'type' => 'string',
                    'example' => 'rs-qSkW1HBY****',
                  ),
                  'ResourceShareStatus' => 
                  array (
                    'description' => '共享单元状态。取值：

- Active：已启用。
- Pending：待确认。
- Deleting：删除中。
- Deleted：已删除。

> Deleted状态的共享单元记录，会在48~96小时内被系统自动删除。',
                    'type' => 'string',
                    'example' => 'Active',
                  ),
                  'AllowExternalTargets' => 
                  array (
                    'description' => '是否允许共享给资源目录外的账号。取值：

- false：仅允许资源目录内共享。
- true：允许共享给任意账号。',
                    'type' => 'boolean',
                    'example' => 'false',
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
            'errorCode' => 'MissingParameter.ResourceShareId',
            'errorMessage' => 'You must specify ResourceShareId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareId',
            'errorMessage' => 'The ResourceShareId is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.ResourceShareName',
            'errorMessage' => 'You must specify ResourceShareName.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareName',
            'errorMessage' => 'The ResourceShareName is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareName.Length',
            'errorMessage' => 'The maximum length of ResourceShareName exceeds 50 characters.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceShare',
            'errorMessage' => 'The resource share does not exist in the current account.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'OperationNotPermitted',
            'errorMessage' => 'You do not have permission to do this operation.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceShareStatusMismatchAction',
            'errorMessage' => 'The status of the resource share does not allow the specified operation.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2860A3A4-D8C1-4EF4-954E-84A3945E26E5\\",\\n  \\"ResourceShare\\": {\\n    \\"UpdateTime\\": \\"2020-12-04T08:55:25.382Z\\",\\n    \\"ResourceShareName\\": \\"new\\",\\n    \\"ResourceShareOwner\\": \\"151266687691****\\",\\n    \\"CreateTime\\": \\"2020-12-03T08:02:22.413Z\\",\\n    \\"ResourceShareId\\": \\"rs-qSkW1HBY****\\",\\n    \\"ResourceShareStatus\\": \\"Active\\",\\n    \\"AllowExternalTargets\\": false\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateResourceShareResponse>\\n    <RequestId>2860A3A4-D8C1-4EF4-954E-84A3945E26E5</RequestId>\\n    <ResourceShare>\\n        <ResourceShareId>rs-qSkW1HBY****</ResourceShareId>\\n        <ResourceShareName>new</ResourceShareName>\\n        <ResourceShareStatus>Active</ResourceShareStatus>\\n        <CreateTime>2020-12-03T08:02:22.413Z</CreateTime>\\n        <UpdateTime>2020-12-04T08:55:25.382Z</UpdateTime>\\n        <ResourceShareOwner>151266687691****</ResourceShareOwner>\\n        <AllowExternalTargets>false</AllowExternalTargets>\\n    </ResourceShare>\\n</UpdateResourceShareResponse>","errorExample":""}]',
      'title' => '修改共享单元名称',
      'description' => '### 使用说明
您可以调用本API修改共享单元的名称和资源共享范围。

本文将提供一个示例，在`cn-hangzhou`地域，将共享单元`rs-qSkW1HBY****`的原名称`test`修改为新名称`new`。',
      'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteResourceShare' => 
    array (
      'summary' => '删除共享单元。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceShareId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rs-qSkW1HBY****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A627EE2A-223D-4E1F-A954-394686AEA916',
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
            'errorCode' => 'MissingParameter.ResourceShareId',
            'errorMessage' => 'You must specify ResourceShareId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareId',
            'errorMessage' => 'The ResourceShareId is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceShare',
            'errorMessage' => 'The resource share does not exist in the current account.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceShareStatusMismatchAction',
            'errorMessage' => 'The status of the resource share does not allow the specified operation.',
          ),
          1 => 
          array (
            'errorCode' => 'DeleteResourceShareConflict',
            'errorMessage' => 'You cannot delete a resource share while there are unfinished tasks.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A627EE2A-223D-4E1F-A954-394686AEA916\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteResourceShareResponse>\\r\\n\\t<RequestId>A627EE2A-223D-4E1F-A954-394686AEA916</RequestId>\\r\\n</DeleteResourceShareResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '删除共享单元',
      'description' => '删除共享单元后，与该共享单元关联的所有资源使用者都将失去对共享资源的访问权限。删除共享单元不会删除共享资源。

已成功删除的共享单元，其状态为`Deleted`，该条记录会在48~96小时内被系统自动删除。

本文将提供一个示例，删除地域`cn-hangzhou`下的共享单元`rs-qSkW1HBY****`。',
      'requestParamsDescription' => '  关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'AssociateResourceShare' => 
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
          'name' => 'ResourceShareId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rs-6GRmdD3X****',
          ),
        ),
        1 => 
        array (
          'name' => 'Resources',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源列表。',
              'type' => 'object',
              'properties' => 
              array (
                'ResourceType' => 
                array (
                  'description' => '共享资源类型。

N的取值范围：1~5，即每次最多添加5个共享资源。

支持共享的资源类型，请参见[支持资源共享的云服务](~~450526~~)。

> `Resources.N.ResourceId`与`Resources.N.ResourceType`成对出现，需要同时设置。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'VSwitch',
                ),
                'ResourceId' => 
                array (
                  'description' => '共享资源ID。

N的取值范围：1~5，即每次最多添加5个共享资源。

> Resources.N.ResourceId与Resources.N.ResourceType成对出现，需要同时设置。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vsw-bp183p93qs667muql****',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        2 => 
        array (
          'name' => 'Targets',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源使用者。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源使用者。取值：

- 当`AllowExternalTargets`为`false`时，即仅允许资源目录内共享时，资源使用者可以为资源目录ID、资源夹ID或成员ID。
- 当`AllowExternalTargets`为`true`时，即允许共享给任意账号时，资源使用者可以为阿里云账号ID、资源目录ID、资源夹ID、成员ID或阿里云服务。

更多信息，请参见[资源共享方式](~~160622~~)、[查看资源目录ID](~~111217~~)、[查看资源夹ID](~~111223~~)或[查看成员ID](~~111624~~)。

N的取值范围：1~5，即每次最多添加5个资源使用者。',
              'type' => 'string',
              'required' => false,
              'example' => '172050525300****',
            ),
            'required' => false,
            'example' => '172050525300****',
            'maxItems' => 20,
          ),
        ),
        3 => 
        array (
          'name' => 'PermissionNames',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '共享权限名称。为空时，系统自动绑定资源类型关联的默认权限。具体信息，请参见[权限库](~~465474~~)。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '共享权限名称。为空时，系统自动绑定资源类型关联的默认权限。具体信息，请参见[权限库](~~465474~~)。',
              'type' => 'string',
              'required' => false,
              'example' => 'AliyunRSDefaultPermissionVSwitch',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        4 => 
        array (
          'name' => 'TargetProperties',
          'in' => 'query',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '资源使用者属性。
> 仅当资源使用者为阿里云服务时可以设置该参数。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源使用者属性。
> 仅当资源使用者为阿里云服务时可以设置该参数。',
              'type' => 'object',
              'properties' => 
              array (
                'TargetId' => 
                array (
                  'description' => '资源使用者ID。

> `TargetProperties.N.TargetId`与`TargetProperties.N.Property`成对出现，需要同时设置。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '172050525300****',
                ),
                'Property' => 
                array (
                  'description' => '资源使用者属性参数。例如：您可以设置资源共享的时间段。`timeRangeType`取值：
- timeRange：指定时间段。
- day：全天。
> `TargetProperties.N.TargetId`与`TargetProperties.N.Property`成对出现，需要同时设置。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '{
    "timeRange":{
        "timeRangeType":"timeRange",
        "beginAtTime":"00:00",
        "timezone":"UTC+8",
        "endAtTime":"19:59"
    }
}',
                ),
              ),
              'required' => false,
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '111FB84A-60A9-403E-9067-E55D7EE95BD1',
              ),
              'ResourceShareAssociations' => 
              array (
                'description' => '共享单元关联的共享资源或资源使用者信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '共享单元关联的共享资源或资源使用者信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UpdateTime' => 
                    array (
                      'description' => '更新关联的时间。存在以下两种情况：

- 当关联类型`AssociationType`为资源`Resource`时，该参数为更新资源的时间。
- 当关联类型`AssociationType`为资源使用者`Target`时，该参数为更新资源使用者的时间。',
                      'type' => 'string',
                      'example' => '2020-12-04T09:40:41.246Z',
                    ),
                    'EntityId' => 
                    array (
                      'description' => '关联实体ID。取值：

- 当关联类型`AssociationType`为资源`Resource`时，该参数为资源ID。
- 当关联类型`AssociationType`为资源使用者`Target` 时，该参数为资源使用者ID。',
                      'type' => 'string',
                      'example' => 'vsw-bp183p93qs667muql****',
                    ),
                    'ResourceShareName' => 
                    array (
                      'description' => '共享单元名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '关联的时间。存在以下两种情况：

- 当关联类型`AssociationType`为资源`Resource`时，该参数为添加资源的时间。
- 当关联类型`AssociationType`为资源使用者`Target`时，该参数为添加资源使用者的时间。',
                      'type' => 'string',
                      'example' => '2020-12-04T09:40:41.246Z',
                    ),
                    'EntityType' => 
                    array (
                      'description' => '关联实体类型。取值：

- 当关联实体为资源时，该参数为资源类型。更多信息，请参见[支持资源共享的云服务](~~450526~~)。
- 当关联实体为资源使用者时，该参数为`Account`。',
                      'type' => 'string',
                      'example' => 'VSwitch',
                    ),
                    'ResourceShareId' => 
                    array (
                      'description' => '共享单元ID。',
                      'type' => 'string',
                      'example' => 'rs-6GRmdD3X****',
                    ),
                    'AssociationStatusMessage' => 
                    array (
                      'description' => '关联失败的原因。',
                      'type' => 'string',
                      'example' => 'The reason for the association failure.',
                    ),
                    'AssociationType' => 
                    array (
                      'description' => '关联类型。取值：

- Resource：资源。
- Target：资源使用者。
',
                      'type' => 'string',
                      'example' => 'Resource',
                    ),
                    'AssociationStatus' => 
                    array (
                      'description' => '关联状态。取值：

- Associating：关联中。
- Associated：已关联。
- Failed：关联失败。
- Disassociating：分离中。
- Disassociated：已分离。

> `Failed`和`Disassociated`状态的记录，会在48~96小时内被系统自动删除。',
                      'type' => 'string',
                      'example' => 'Associating',
                    ),
                    'TargetProperty' => 
                    array (
                      'description' => '资源使用者属性。例如：资源共享的时间段。
>  仅当资源使用者为阿里云服务时返回设置该参数。',
                      'type' => 'string',
                      'example' => '{
    "plan":{
        "timeRangeType":"timeRange",
        "beginAtTime":"00:00",
        "timezone":"UTC+8",
        "endAtTime":"19:59"
    }
}',
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
            'errorCode' => 'MissingParameter.ResourceShareId',
            'errorMessage' => 'You must specify ResourceShareId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareId',
            'errorMessage' => 'The ResourceShareId is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Resources',
            'errorMessage' => 'The Resources is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.Resources.Duplicate',
            'errorMessage' => 'The Resources contains duplicate values.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Resources.Length',
            'errorMessage' => 'The maximum number of Resources exceeds 5.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.Targets',
            'errorMessage' => 'The Targets is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.Targets.Duplicate',
            'errorMessage' => 'The Targets contains duplicate values.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.Targets.Length',
            'errorMessage' => 'The maximum number of Targets exceeds 5.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidTarget',
            'errorMessage' => 'The shared target does not exist in the resource directory.',
          ),
          9 => 
          array (
            'errorCode' => 'ResourceAndTargetBothEmpty',
            'errorMessage' => 'Either a resource or a shared target must be specified.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The ResourceType is invalid.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParameter.PermissionNames.Duplicate',
            'errorMessage' => 'The PermissionNames duplicate values.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParameter.PermissionNames.Length',
            'errorMessage' => 'The maximum length of PermissionNames exceeds quota limit.',
          ),
          14 => 
          array (
            'errorCode' => 'InvalidParameter.TargetProperties',
            'errorMessage' => 'The TargetProperties is invalid.',
          ),
          15 => 
          array (
            'errorCode' => 'InvalidParameter.TargetProperties.Duplicate',
            'errorMessage' => 'The TargetProperties contains duplicate values.',
          ),
          16 => 
          array (
            'errorCode' => 'InvalidParameter.TargetProperties.Length',
            'errorMessage' => 'The TargetProperties beyond the length limit.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceShare',
            'errorMessage' => 'The resource share does not exist in the current account.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.Permission',
            'errorMessage' => 'The resource share permission does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'NotEnableSharingWithResourceDirectory',
            'errorMessage' => 'You have not enabled sharing with your Resource Directory.',
          ),
          1 => 
          array (
            'errorCode' => 'AccountNotInResourceDirectory',
            'errorMessage' => 'The account is not a master or a member of a resource directory.',
          ),
          2 => 
          array (
            'errorCode' => 'ResourceShareStatusMismatchAction',
            'errorMessage' => 'The status of the resource share does not allow the specified operation.',
          ),
          3 => 
          array (
            'errorCode' => 'QuotaExceeded.SharedResource.Count',
            'errorMessage' => 'The maximum number of shared resources per account  exceeds the limit.',
          ),
          4 => 
          array (
            'errorCode' => 'ShareWithYourself',
            'errorMessage' => 'You cannot share resources with yourself.',
          ),
          5 => 
          array (
            'errorCode' => 'AssociateConflict',
            'errorMessage' => 'You cannot perform the operation while disassociation operation is being performed.',
          ),
          6 => 
          array (
            'errorCode' => 'NotManagementAccount',
            'errorMessage' => 'Only the management account of the service is allowed to share such resources.',
          ),
          7 => 
          array (
            'errorCode' => 'QuotaExceeded.PendingInvitations',
            'errorMessage' => 'The maximum number of pending invitations exceeds the limit.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidTarget.LegalEntityMismatch',
            'errorMessage' => 'The target account does not have the same legal entity as the resource owner account.',
          ),
          9 => 
          array (
            'errorCode' => 'ExternalTargetsNotAllowed.ResourceType',
            'errorMessage' => 'The resource share includes resource types that cannot be shared with accounts outside the resource directory.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidTarget.SiteMismatch',
            'errorMessage' => 'Cross-site resource sharing is not supported.',
          ),
          11 => 
          array (
            'errorCode' => 'NotSupport.Service.ExistInOtherResourceShare',
            'errorMessage' => 'The resource type has been shared to the target service through other resourceShare. Please share it in the same resourceShare.',
          ),
          12 => 
          array (
            'errorCode' => 'NotSupport.Service.AssociateConflict',
            'errorMessage' => 'The same resource cannot be shared repeatedly to the target service.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"111FB84A-60A9-403E-9067-E55D7EE95BD1\\",\\n  \\"ResourceShareAssociations\\": [\\n    {\\n      \\"UpdateTime\\": \\"2020-12-04T09:40:41.246Z\\",\\n      \\"EntityId\\": \\"vsw-bp183p93qs667muql****\\",\\n      \\"ResourceShareName\\": \\"test\\",\\n      \\"CreateTime\\": \\"2020-12-04T09:40:41.246Z\\",\\n      \\"EntityType\\": \\"VSwitch\\",\\n      \\"ResourceShareId\\": \\"rs-6GRmdD3X****\\",\\n      \\"AssociationStatusMessage\\": \\"The reason for the association failure.\\",\\n      \\"AssociationType\\": \\"Resource\\",\\n      \\"AssociationStatus\\": \\"Associating\\",\\n      \\"TargetProperty\\": \\"{\\\\n    \\\\\\"plan\\\\\\":{\\\\n        \\\\\\"timeRangeType\\\\\\":\\\\\\"timeRange\\\\\\",\\\\n        \\\\\\"beginAtTime\\\\\\":\\\\\\"00:00\\\\\\",\\\\n        \\\\\\"timezone\\\\\\":\\\\\\"UTC+8\\\\\\",\\\\n        \\\\\\"endAtTime\\\\\\":\\\\\\"19:59\\\\\\"\\\\n    }\\\\n}\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<AssociateResourceShareResponse>\\r\\n\\t<ResourceShareAssociations>\\r\\n\\t\\t<ResourceShareId>rs-6GRmdD3X****</ResourceShareId>\\r\\n\\t\\t<EntityId>vsw-bp183p93qs667muql****</EntityId>\\r\\n\\t\\t<EntityType>VSwitch</EntityType>\\r\\n\\t\\t<AssociationStatusMessage></AssociationStatusMessage>\\r\\n\\t\\t<AssociationType>Resource</AssociationType>\\r\\n\\t\\t<CreateTime>2020-12-04T09:40:41.246Z</CreateTime>\\r\\n\\t\\t<UpdateTime>2020-12-04T09:40:41.246Z</UpdateTime>\\r\\n\\t\\t<ResourceShareName>test</ResourceShareName>\\r\\n\\t\\t<AssociationStatus>Associating</AssociationStatus>\\r\\n\\t</ResourceShareAssociations>\\r\\n\\t<ResourceShareAssociations>\\r\\n\\t\\t<ResourceShareId>rs-6GRmdD3X****</ResourceShareId>\\r\\n\\t\\t<EntityId>172050525300****</EntityId>\\r\\n\\t\\t<EntityType>Account</EntityType>\\r\\n\\t\\t<AssociationStatusMessage></AssociationStatusMessage>\\r\\n\\t\\t<AssociationType>Target</AssociationType>\\r\\n\\t\\t<CreateTime>2020-12-04T09:40:41.250Z</CreateTime>\\r\\n\\t\\t<UpdateTime>2020-12-04T09:40:41.250Z</UpdateTime>\\r\\n\\t\\t<ResourceShareName>test1</ResourceShareName>\\r\\n\\t\\t<AssociationStatus>Associating</AssociationStatus>\\r\\n\\t</ResourceShareAssociations>\\r\\n\\t<RequestId>111FB84A-60A9-403E-9067-E55D7EE95BD1</RequestId>\\r\\n</AssociateResourceShareResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '关联共享资源或资源使用者',
      'summary' => '为共享单元关联共享资源或资源使用者。',
      'description' => '本文将提供一个示例，在`cn-hangzhou`地域的共享单元`rs-6GRmdD3X****`中，添加共享资源VPC交换机`vsw-bp183p93qs667muql****`，将其共享给资源目录内的成员`172050525300****`。',
    ),
    'DisassociateResourceShare' => 
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
          'name' => 'ResourceShareId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rs-6GRmdD3X****',
          ),
        ),
        1 => 
        array (
          'name' => 'Resources',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源列表。',
              'type' => 'object',
              'properties' => 
              array (
                'ResourceType' => 
                array (
                  'description' => '共享资源类型。

N的取值范围：1~5，即每次最多移除5个共享资源。

支持共享的资源类型，请参见[支持资源共享的云服务](~~450526~~)。

> Resources.N.ResourceId与Resources.N.ResourceType成对出现，需要同时设置。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'VSwitch',
                ),
                'ResourceId' => 
                array (
                  'description' => '共享资源ID。

N的取值范围：1~5，即每次最多移除5个共享资源。

> Resources.N.ResourceId与Resources.N.ResourceType成对出现，需要同时设置。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'vsw-bp183p93qs667muql****',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        2 => 
        array (
          'name' => 'Targets',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源使用者。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源使用者。

N的取值范围：1~5，即每次最多添加5个资源使用者。',
              'type' => 'string',
              'required' => false,
              'example' => '172050525300****',
            ),
            'required' => false,
            'example' => '172050525300****',
            'maxItems' => 20,
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceOwner',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元归属者。取值：

- Self（默认值）：共享单元归属于当前账号。适用于资源目录内共享时，资源所有者移除共享资源或资源使用者场景。
- OtherAccounts：共享单元归属于其他账号。适用于资源目录外共享时，资源使用者主动退出共享单元场景。',
            'type' => 'string',
            'required' => false,
            'example' => 'Self',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '95230BC9-A8E8-4493-96BD-4F0C758E37F8',
              ),
              'ResourceShareAssociations' => 
              array (
                'description' => '共享单元关联的共享资源或资源使用者信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '共享单元关联的共享资源或资源使用者信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UpdateTime' => 
                    array (
                      'description' => '取消关联的更新时间。存在以下两种情况：

- 当关联类型`AssociationType`为资源`Resource`时，该参数为移除资源的更新时间。
- 当关联类型`AssociationType`为资源使用者`Target`时，该参数为移除资源使用者的更新时间。',
                      'type' => 'string',
                      'example' => '2020-12-04T09:40:45.556Z',
                    ),
                    'EntityId' => 
                    array (
                      'description' => '关联实体ID。取值：

- 当关联类型`AssociationType`为资源`Resource`时，该参数为资源ID。
- 当关联类型`AssociationType`为资源使用者`Target`时，该参数为资源目录ID、资源夹ID或成员ID。',
                      'type' => 'string',
                      'example' => '172050525300****',
                    ),
                    'ResourceShareName' => 
                    array (
                      'description' => '共享单元名称。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '取消关联的时间。存在以下两种情况：

- 当关联类型`AssociationType`为资源`Resource`时，该参数为移除资源的时间。
- 当关联类型`AssociationType`为资源使用者`Target`时，该参数为移除资源使用者的时间。',
                      'type' => 'string',
                      'example' => '2020-12-04T09:40:41.250Z',
                    ),
                    'EntityType' => 
                    array (
                      'description' => '关联实体类型。取值：

- 当关联实体为资源时，该参数为资源类型。更多信息，请参见[支持资源共享的云服务](~~450526~~)。
- 当关联实体为资源使用者时，该参数为Account。',
                      'type' => 'string',
                      'example' => 'Account',
                    ),
                    'ResourceShareId' => 
                    array (
                      'description' => '共享单元ID。',
                      'type' => 'string',
                      'example' => 'rs-6GRmdD3X****',
                    ),
                    'AssociationStatusMessage' => 
                    array (
                      'description' => '取消关联失败的原因。',
                      'type' => 'string',
                      'example' => 'The Resources is invalid.',
                    ),
                    'AssociationType' => 
                    array (
                      'description' => '关联类型。取值：

- Resource：资源。
- Target：资源使用者。',
                      'type' => 'string',
                      'example' => 'Target',
                    ),
                    'AssociationStatus' => 
                    array (
                      'description' => '关联状态。取值：

- Associating：关联中。
- Associated：已关联。
- Failed：关联失败。
- Disassociating：分离中。
- Disassociated：已分离。

> `Failed`和`Disassociated`状态的记录，会在48~96小时内被系统自动删除。',
                      'type' => 'string',
                      'example' => 'Disassociating',
                    ),
                    'TargetProperty' => 
                    array (
                      'description' => '资源使用者属性。例如：资源共享的时间段。
> 仅当资源使用者为阿里云服务时返回该参数。',
                      'type' => 'string',
                      'example' => '{
    "timeRange":{
        "timeRangeType":"timeRange",
        "beginAtTime":"00:00",
        "timezone":"UTC+8",
        "endAtTime":"19:59"
    }
}',
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
            'errorCode' => 'MissingParameter.ResourceShareId',
            'errorMessage' => 'You must specify ResourceShareId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareId',
            'errorMessage' => 'The ResourceShareId is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Resources',
            'errorMessage' => 'The Resources is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.Resources.Duplicate',
            'errorMessage' => 'The Resources contains duplicate values.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Resources.Length',
            'errorMessage' => 'The maximum number of Resources exceeds 5.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.Targets',
            'errorMessage' => 'The Targets is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.Targets.Duplicate',
            'errorMessage' => 'The Targets contains duplicate values.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.Targets.Length',
            'errorMessage' => 'The maximum number of Targets exceeds 5.',
          ),
          8 => 
          array (
            'errorCode' => 'ResourceAndTargetBothEmpty',
            'errorMessage' => 'Either a resource or a shared target must be specified.',
          ),
          9 => 
          array (
            'errorCode' => 'DisassociateInvalid',
            'errorMessage' => 'You can not disassociate unassociated resource or target.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The ResourceType is invalid.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceShare',
            'errorMessage' => 'The resource share does not exist in the current account.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccountNotInResourceDirectory',
            'errorMessage' => 'The account is not a master or a member of a resource directory.',
          ),
          1 => 
          array (
            'errorCode' => 'ResourceShareStatusMismatchAction',
            'errorMessage' => 'The status of the resource share does not allow the specified operation.',
          ),
          2 => 
          array (
            'errorCode' => 'DisassociateConflict',
            'errorMessage' => 'You cannot perform the operation while association is already in progress.',
          ),
          3 => 
          array (
            'errorCode' => 'LeavingFailed.Account',
            'errorMessage' => 'The account was added to the resource share automatically by resoucre directory.',
          ),
          4 => 
          array (
            'errorCode' => 'LeavingFailed.ResourceType',
            'errorMessage' => 'The resource share contains resources of the resource types that dont support this action.',
          ),
          5 => 
          array (
            'errorCode' => 'ExternalTargetWithdrawConflict',
            'errorMessage' => 'Existing internal association task in resource directory when disassociating with resource share.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"95230BC9-A8E8-4493-96BD-4F0C758E37F8\\",\\n  \\"ResourceShareAssociations\\": [\\n    {\\n      \\"UpdateTime\\": \\"2020-12-04T09:40:45.556Z\\",\\n      \\"EntityId\\": \\"172050525300****\\",\\n      \\"ResourceShareName\\": \\"test\\",\\n      \\"CreateTime\\": \\"2020-12-04T09:40:41.250Z\\",\\n      \\"EntityType\\": \\"Account\\",\\n      \\"ResourceShareId\\": \\"rs-6GRmdD3X****\\",\\n      \\"AssociationStatusMessage\\": \\"The Resources is invalid.\\",\\n      \\"AssociationType\\": \\"Target\\",\\n      \\"AssociationStatus\\": \\"Disassociating\\",\\n      \\"TargetProperty\\": \\"{\\\\n    \\\\\\"timeRange\\\\\\":{\\\\n        \\\\\\"timeRangeType\\\\\\":\\\\\\"timeRange\\\\\\",\\\\n        \\\\\\"beginAtTime\\\\\\":\\\\\\"00:00\\\\\\",\\\\n        \\\\\\"timezone\\\\\\":\\\\\\"UTC+8\\\\\\",\\\\n        \\\\\\"endAtTime\\\\\\":\\\\\\"19:59\\\\\\"\\\\n    }\\\\n}\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DisassociateResourceShareResponse>\\r\\n\\t<ResourceShareAssociations>\\r\\n\\t\\t<ResourceShareId>rs-6GRmdD3X****</ResourceShareId>\\r\\n\\t\\t<EntityId>172050525300****</EntityId>\\r\\n\\t\\t<EntityType>Account</EntityType>\\r\\n\\t\\t<AssociationStatusMessage></AssociationStatusMessage>\\r\\n\\t\\t<AssociationType>Target</AssociationType>\\r\\n\\t\\t<CreateTime>2020-12-04T09:40:41.250Z</CreateTime>\\r\\n\\t\\t<UpdateTime>2020-12-04T09:40:45.556Z</UpdateTime>\\r\\n        <ResourceShareName>test</ResourceShareName>\\r\\n\\t\\t<AssociationStatus>Disassociating</AssociationStatus>\\r\\n\\t</ResourceShareAssociations>\\r\\n\\t<RequestId>95230BC9-A8E8-4493-96BD-4F0C758E37F8</RequestId>\\r\\n</DisassociateResourceShareResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '移除共享资源或资源使用者',
      'summary' => '为共享单元移除共享资源或资源使用者。',
      'description' => '- 资源所有者可以调用本API，移除共享资源或资源使用者。
- 在资源目录外共享资源时，对于已加入共享的资源使用者，可以调用本API主动退出共享单元。更多信息，请参见[资源使用者退出共享单元](~~440614~~)。

本文将提供一个示例，使用资源目录管理账号，在`cn-hangzhou`地域的共享单元`rs-6GRmdD3X****`中，移除资源使用者`172050525300****`，即停止对该资源使用者的共享。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListResourceShareAssociations' => 
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
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源ID。
>当`AssociationType`为`Target`时，该参数不可用。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp183p93qs667muql****',
          ),
        ),
        1 => 
        array (
          'name' => 'Target',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源使用者ID。

>当`AssociationType`为`Resource`时，该参数不可用。',
            'type' => 'string',
            'required' => false,
            'example' => '172050525300****',
          ),
        ),
        2 => 
        array (
          'name' => 'AssociationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关联类型：取值：

- Resource：查询关联共享资源的记录。
- Target：查询关联资源使用者的记录。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Resource',
          ),
        ),
        3 => 
        array (
          'name' => 'AssociationStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关联状态。取值：

- Associating：关联中。
- Associated：已关联。
- Failed：关联失败。
- Disassociating：分离中。
- Disassociated：已分离。

> `Failed`和`Disassociated`状态的记录，会在48~96小时内被系统自动删除。',
            'type' => 'string',
            'required' => false,
            'example' => 'Associated',
          ),
        ),
        4 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单次请求返回结果的最大条数。

取值范围：1~100。默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        5 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，您可以使用`NextToken`再次发起请求，获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'TGlzdFJlc291cm****',
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceShareIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '共享单元ID。

N的取值范围：1~5，即每次最多指定5个共享单元。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '共享单元ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'rs-6GRmdD3X****',
            ),
            'required' => false,
            'example' => 'rs-6GRmdD3X****',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '当请求的返回结果被截断时，您可以使用`NextToken`再次发起请求，获取从当前截断位置之后的内容。',
                'type' => 'string',
                'example' => 'TGlzdFJlc291cm****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '11BA57B5-7301-4E2F-BBA5-2AE4C2F4FCDB',
              ),
              'ResourceShareAssociations' => 
              array (
                'description' => '共享资源或资源使用者信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '共享资源或资源使用者信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UpdateTime' => 
                    array (
                      'description' => '更新关联的时间。存在以下两种情况：

- 当关联类型`AssociationType`为资源`Resource`时，该参数为更新资源的时间。
- 当关联类型`AssociationType`为资源使用者`Target`时，该参数为更新资源使用者的时间。',
                      'type' => 'string',
                      'example' => '2020-12-07T07:39:02.920Z',
                    ),
                    'EntityId' => 
                    array (
                      'description' => '关联实体ID。取值：

- 当关联类型`AssociationType`为资源`Resource`时，该参数为资源ID。
- 当关联类型`AssociationType`为资源使用者`Target`时，该参数为资源使用者ID。',
                      'type' => 'string',
                      'example' => 'vsw-bp1upw03qyz8n7us9****',
                    ),
                    'ResourceShareName' => 
                    array (
                      'description' => '共享单元名称。',
                      'type' => 'string',
                      'example' => 'example',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '关联的时间。存在以下两种情况：

- 当关联类型`AssociationType`为资源`Resource`时，该参数为添加或移除资源的时间。
- 当关联类型`AssociationType`为资源使用者`Target`时，该参数为添加或移除资源使用者的时间。
',
                      'type' => 'string',
                      'example' => '2020-12-07T07:39:01.818Z',
                    ),
                    'EntityType' => 
                    array (
                      'description' => '关联实体类型。取值：

- 当关联实体为资源时，该参数为资源类型。更多信息，请参见[支持资源共享的云服务](~~450526~~)。
- 当关联实体为资源使用者时，该参数为`Account`。',
                      'type' => 'string',
                      'example' => 'VSwitch',
                    ),
                    'ResourceShareId' => 
                    array (
                      'description' => '共享单元ID。',
                      'type' => 'string',
                      'example' => 'rs-6GRmdD3X****',
                    ),
                    'AssociationStatusMessage' => 
                    array (
                      'description' => '关联失败的原因。',
                      'type' => 'string',
                      'example' => 'The reason for the association failure. ',
                    ),
                    'AssociationType' => 
                    array (
                      'description' => '关联类型。取值：

- Resource：资源。
- Target：资源使用者。',
                      'type' => 'string',
                      'example' => 'Resource',
                    ),
                    'AssociationStatus' => 
                    array (
                      'description' => '关联状态。取值：

- Associating：关联中。
- Associated：已关联。
- Failed：关联失败。
- Disassociating：分离中。
- Disassociated：已分离。

> `Failed`和`Disassociated`状态的记录，会在48~96小时内被系统自动删除。',
                      'type' => 'string',
                      'example' => 'Failed',
                    ),
                    'External' => 
                    array (
                      'description' => '资源使用者是否为资源目录外账号。取值：

- true：资源目录外账号。
- false：资源目录内账号。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'TargetProperty' => 
                    array (
                      'description' => '资源使用者属性。例如：资源共享的时间段。`timeRangeType`取值：
- timeRange：指定时间段。
- day：全天。
> 仅当资源使用者为阿里云服务时返回该参数。',
                      'type' => 'string',
                      'example' => '{
    "timeRange":{
        "timeRangeType":"timeRange",
        "beginAtTime":"00:00",
        "timezone":"UTC+8",
        "endAtTime":"19:59"
    }
}',
                    ),
                    'AssociationFailedDetails' => 
                    array (
                      'description' => '关联或解除关联资源或者资源使用者检查失败详细原因。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关联或解除关联资源或者资源使用者检查失败详细原因。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Status' => 
                          array (
                            'description' => '已弃用。请使用FailureReason。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'StatusMessage' => 
                          array (
                            'description' => '已弃用。请使用FailureDescription。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'AssociateType' => 
                          array (
                            'description' => '已弃用。请使用OperationType。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'EntityId' => 
                          array (
                            'description' => '关联实体ID。取值：

* 当关联类型AssociationType为资源Resource时，该参数为资源使用者ID。
* 当关联类型AssociationType为资源使用者Target时，该参数为资源ID。',
                            'type' => 'string',
                            'example' => '172050525300****',
                          ),
                          'EntityType' => 
                          array (
                            'description' => '关联实体类型。取值：

* 当关联实体为资源时，该参数为资源类型。更多信息，请参见支持资源共享的云服务。
* 当关联实体为资源使用者时，该参数为`ResourceDirectory`、`Folder`、`Account`或`Service`。',
                            'type' => 'string',
                            'example' => 'Account',
                          ),
                          'FailureReason' => 
                          array (
                            'description' => '关联或解除关联失败时的原因。 取值：
- Unavailable：资源不存在等情况导致共享失败。 
- LimitExceeded：资源可共享的目标Quota超出上限。 
- ZonalResourceInaccessible： 资源在此地域不可用。 
- InternalError：服务器内部出现错误。 
- UnsupportedOperation：不支持执行操作。',
                            'type' => 'string',
                            'example' => 'Unavailable',
                          ),
                          'FailureDescription' => 
                          array (
                            'description' => '关联或解除关联失败时的详细原因描述。',
                            'type' => 'string',
                            'example' => 'You cannot access the specified resource at this time.',
                          ),
                          'OperationType' => 
                          array (
                            'description' => '操作类型。取值：
- Associate：关联。
- Disassociate：解除关联。',
                            'type' => 'string',
                            'example' => 'Associate',
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
            'errorCode' => 'MissingParameter.AssociationType',
            'errorMessage' => 'You must specify AssociationType.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.AssociationType',
            'errorMessage' => 'The AssociationType is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.AssociationStatus',
            'errorMessage' => 'The AssociationStatus is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The MaxResults is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken',
            'errorMessage' => 'The NextToken is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken.Length',
            'errorMessage' => 'The maximum length of NextToken exceeds 256 characters.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds',
            'errorMessage' => 'The ResourceShareIds is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds.Duplicate',
            'errorMessage' => 'The ResourceShareIds contains duplicate values.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds.Length',
            'errorMessage' => 'The maximum length of ResourceShareIds exceeds 5 characters.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter.Target',
            'errorMessage' => 'The Target is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceId',
            'errorMessage' => 'The ResourceId is invalid.',
          ),
          11 => 
          array (
            'errorCode' => 'ConflictedAssociationType',
            'errorMessage' => 'The specified ResourceId or Target conflicts with AssociationType.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"TGlzdFJlc291cm****\\",\\n  \\"RequestId\\": \\"11BA57B5-7301-4E2F-BBA5-2AE4C2F4FCDB\\",\\n  \\"ResourceShareAssociations\\": [\\n    {\\n      \\"UpdateTime\\": \\"2020-12-07T07:39:02.920Z\\",\\n      \\"EntityId\\": \\"vsw-bp1upw03qyz8n7us9****\\",\\n      \\"ResourceShareName\\": \\"example\\",\\n      \\"CreateTime\\": \\"2020-12-07T07:39:01.818Z\\",\\n      \\"EntityType\\": \\"VSwitch\\",\\n      \\"ResourceShareId\\": \\"rs-6GRmdD3X****\\",\\n      \\"AssociationStatusMessage\\": \\"The reason for the association failure. \\",\\n      \\"AssociationType\\": \\"Resource\\",\\n      \\"AssociationStatus\\": \\"Failed\\",\\n      \\"External\\": false,\\n      \\"TargetProperty\\": \\"{\\\\n    \\\\\\"timeRange\\\\\\":{\\\\n        \\\\\\"timeRangeType\\\\\\":\\\\\\"timeRange\\\\\\",\\\\n        \\\\\\"beginAtTime\\\\\\":\\\\\\"00:00\\\\\\",\\\\n        \\\\\\"timezone\\\\\\":\\\\\\"UTC+8\\\\\\",\\\\n        \\\\\\"endAtTime\\\\\\":\\\\\\"19:59\\\\\\"\\\\n    }\\\\n}\\",\\n      \\"AssociationFailedDetails\\": [\\n        {\\n          \\"Status\\": \\"无\\",\\n          \\"StatusMessage\\": \\"无\\",\\n          \\"AssociateType\\": \\"无\\",\\n          \\"EntityId\\": \\"172050525300****\\",\\n          \\"EntityType\\": \\"Account\\",\\n          \\"FailureReason\\": \\"Unavailable\\",\\n          \\"FailureDescription\\": \\"You cannot access the specified resource at this time.\\",\\n          \\"OperationType\\": \\"Associate\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListResourceShareAssociationsResponse>\\n    <ResourceShareAssociations>\\n        <ResourceShareId>rs-6GRmdD3X****</ResourceShareId>\\n        <ResourceShareName>example</ResourceShareName>\\n        <EntityId>vsw-bp1upw03qyz8n7us9****</EntityId>\\n        <EntityType>VSwitch</EntityType>\\n        <AssociationStatusMessage/>\\n        <AssociationType>Resource</AssociationType>\\n        <CreateTime>2020-12-07T07:39:01.818Z</CreateTime>\\n        <UpdateTime>2020-12-07T07:39:02.920Z</UpdateTime>\\n        <External>false</External>\\n        <AssociationStatus>Associated</AssociationStatus>\\n    </ResourceShareAssociations>\\n    <ResourceShareAssociations>\\n        <ResourceShareId>rs-6GRmdD3X****</ResourceShareId>\\n        <ResourceShareName>example</ResourceShareName>\\n        <EntityId>vsw-bp183p93qs667muql****</EntityId>\\n        <EntityType>VSwitch</EntityType>\\n        <AssociationStatusMessage/>\\n        <AssociationType>Resource</AssociationType>\\n        <CreateTime>2020-12-04T09:40:41.246Z</CreateTime>\\n        <UpdateTime>2020-12-07T03:17:24.067Z</UpdateTime>\\n        <External>false</External>\\n        <AssociationStatus>Disassociated</AssociationStatus>\\n    </ResourceShareAssociations>\\n    <RequestId>11BA57B5-7301-4E2F-BBA5-2AE4C2F4FCDB</RequestId>\\n</ListResourceShareAssociationsResponse>","errorExample":""}]',
      'title' => '查询关联资源或资源使用者',
      'summary' => '查询共享单元中关联资源或资源使用者的记录。',
      'description' => '本文将提供一个示例，在`cn-hangzhou`地域，查询当前账号创建的共享单元中关联的共享资源的记录。返回结果显示，当前账号关联过以下2个资源：

- 在共享单元`rs-6GRmdD3X****`中，添加过`VSwitch`类型的共享资源`vsw-bp1upw03qyz8n7us9****`，该资源处于关联中`Associated`状态，即该资源正常共享中。
- 在共享单元`rs-6GRmdD3X****`中，移除过`VSwitch`类型的共享资源`vsw-bp183p93qs667muql****`，该资源处于已分离`Disassociated`状态，即该资源已停止共享。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListSharedResources' => 
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
          'name' => 'ResourceOwner',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元归属者。取值：

- Self：查询您创建的共享单元中，共享给其他账号的资源列表。
- OtherAccounts：查询其他账号创建的共享单元中，共享给您的资源列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Self',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享资源类型。

支持共享的资源类型，请参见[支持资源共享的云服务](~~450526~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'VSwitch',
          ),
        ),
        2 => 
        array (
          'name' => 'Target',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源使用者ID或资源所有者ID。取值：

- 当`ResourceOwner`为`Self`时，该参数为资源使用者ID。
- 当`ResourceOwner`是`OtherAccounts`时，该参数为资源所有者ID。',
            'type' => 'string',
            'required' => false,
            'example' => '172050525300****',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单次请求返回结果的最大条数。

取值范围：1~100。默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，您可以使用`NextToken`再次发起请求，获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'TGlzdFJlc291cm****',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceShareIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '共享单元ID。

N的取值范围：1~5，即每次最多指定5个共享单元。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '共享单元ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'rs-6GRmdD3X****',
            ),
            'required' => false,
            'example' => 'rs-6GRmdD3X****',
            'maxItems' => 20,
          ),
        ),
        6 => 
        array (
          'name' => 'ResourceIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '共享资源ID。

N的取值范围：1~5，即每次最多指定5个共享资源。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '共享资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'vsw-bp1upw03qyz8n7us9****',
            ),
            'required' => false,
            'example' => 'vsw-bp1upw03qyz8n7us9****',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '当请求的返回结果被截断时，您可以使用NextToken再次发起请求，获取从当前截断位置之后的内容。',
                'type' => 'string',
                'example' => 'TGlzdFJlc291cm****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04677DCA-7C33-464B-8811-1B1DA3C3D197',
              ),
              'SharedResources' => 
              array (
                'description' => '共享资源信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '共享资源信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UpdateTime' => 
                    array (
                      'description' => '更新关联资源的时间。',
                      'type' => 'string',
                      'example' => '2020-12-07T07:39:02.921Z',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '共享资源类型。

支持共享的资源类型，请参见[支持资源共享的云服务](~~450526~~)。',
                      'type' => 'string',
                      'example' => 'VSwitch',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '关联资源的时间。',
                      'type' => 'string',
                      'example' => '2020-12-07T07:39:02.921Z',
                    ),
                    'ResourceShareId' => 
                    array (
                      'description' => '共享单元ID。',
                      'type' => 'string',
                      'example' => 'rs-6GRmdD3X****',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '共享资源ID。',
                      'type' => 'string',
                      'example' => 'vsw-bp1upw03qyz8n7us9****',
                    ),
                    'ResourceStatus' => 
                    array (
                      'description' => '共享资源状态。查询您共享的资源时不返回该参数，查询共享给您的资源时返回该参数。

取值：

- Available：资源可用。
- ZonalResourceInaccessible：在当前可用区，资源不可用。
- LimitExceeded：配额超限，资源不可用。
- Unavailable：资源不可用。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'ResourceStatusMessage' => 
                    array (
                      'description' => '关联失败的原因。',
                      'type' => 'string',
                      'example' => 'The reason for the association failure. ',
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
            'errorCode' => 'MissingParameter.ResourceOwner',
            'errorMessage' => 'You must specify ResourceOwner.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceOwner',
            'errorMessage' => 'The ResourceOwner is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The ResourceType is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The MaxResults is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken',
            'errorMessage' => 'The NextToken is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken.Length',
            'errorMessage' => 'The maximum length of NextToken exceeds 256 characters.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds',
            'errorMessage' => 'The ResourceShareIds is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds.Duplicate',
            'errorMessage' => 'The ResourceShareIds contains duplicate values.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds.Length',
            'errorMessage' => 'The maximum length of ResourceShareIds exceeds 5 characters.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceIds',
            'errorMessage' => 'The ResourceIds is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceIds.Duplicate',
            'errorMessage' => 'The specified ResourceId contains duplicate values.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceIds.Length',
            'errorMessage' => 'The maximum number of ResourceIds (5) is exceeded.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParameter.Target',
            'errorMessage' => 'The Target is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"TGlzdFJlc291cm****\\",\\n  \\"RequestId\\": \\"04677DCA-7C33-464B-8811-1B1DA3C3D197\\",\\n  \\"SharedResources\\": [\\n    {\\n      \\"UpdateTime\\": \\"2020-12-07T07:39:02.921Z\\",\\n      \\"ResourceType\\": \\"VSwitch\\",\\n      \\"CreateTime\\": \\"2020-12-07T07:39:02.921Z\\",\\n      \\"ResourceShareId\\": \\"rs-6GRmdD3X****\\",\\n      \\"ResourceId\\": \\"vsw-bp1upw03qyz8n7us9****\\",\\n      \\"ResourceStatus\\": \\"Available\\",\\n      \\"ResourceStatusMessage\\": \\"The reason for the association failure. \\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListSharedResourcesResponse>\\r\\n\\t<RequestId>04677DCA-7C33-464B-8811-1B1DA3C3D197</RequestId>\\r\\n\\t<SharedResources>\\r\\n\\t\\t<ResourceShareId>rs-6GRmdD3X****</ResourceShareId>\\r\\n\\t\\t<ResourceId>vsw-bp1upw03qyz8n7us9****</ResourceId>\\r\\n\\t\\t<CreateTime>2020-12-07T07:39:02.921Z</CreateTime>\\r\\n\\t\\t<UpdateTime>2020-12-07T07:39:02.921Z</UpdateTime>\\r\\n\\t\\t<ResourceType>VSwitch</ResourceType>\\r\\n\\t</SharedResources>\\r\\n</ListSharedResourcesResponse>\\t\\r\\n","errorExample":""}]',
      'title' => '查询共享或其他账号共享的资源列表',
      'summary' => '查询共享的资源列表或者其他账号共享的资源列表。',
      'description' => '本文将提供一个示例，查询您在`cn-hangzhou`地域共享的资源列表。返回结果显示，您只共享过1个资源，即在共享单元`rs-6GRmdD3X****`内共享过`VSwitch`类型的资源`vsw-bp1upw03qyz8n7us9****`。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListSharedTargets' => 
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
          'name' => 'ResourceOwner',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元归属者。

- Self：查询您创建的共享单元中，关联的资源使用者列表。
- OtherAccounts：查询其他账号创建的共享单元中，您作为资源使用者的共享单元及共享单元拥有者列表。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Self',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享资源类型。

支持共享的资源类型，请参见[支持资源共享的云服务](~~450526~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'VSwitch',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享资源ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'vsw-bp1upw03qyz8n7us9****',
          ),
        ),
        3 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单次请求返回结果的最大条数。

取值范围：1~100。默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，您可以使用`NextToken`再次发起请求，获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'TGlzdFJlc291cm****',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceShareIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '共享单元ID。

N的取值范围：1~5，即每次最多指定5个共享单元。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '共享单元ID。

N的取值范围：1~5，即每次最多指定5个共享单元。',
              'type' => 'string',
              'required' => false,
              'example' => 'rs-6GRmdD3X****',
            ),
            'required' => false,
            'example' => 'rs-6GRmdD3X****',
            'maxItems' => 20,
          ),
        ),
        6 => 
        array (
          'name' => 'Targets',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源使用者。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源使用者。取值：

- 当`AllowExternalTargets`为`false`时，资源使用者可以为资源目录ID、资源夹ID或成员ID。
- 当`AllowExternalTargets`为`true`时，资源使用者可以为阿里云账号ID、资源目录ID、资源夹ID、成员ID或阿里云服务。

更多信息，请参见[资源共享方式](~~160622~~)、[查看资源目录ID](~~111217~~)、[查看资源夹ID](~~111223~~)或[查看成员ID](~~111624~~)。

N的取值范围：1~5，即每次最多添加5个资源使用者。',
              'type' => 'string',
              'required' => false,
              'example' => '114240524784****',
            ),
            'required' => false,
            'example' => '114240524784****',
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
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '当请求的返回结果被截断时，您可以使用`NextToken`再次发起请求，获取从当前截断位置之后的内容。',
                'type' => 'string',
                'example' => 'TGlzdFJlc291cm****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04677DCA-7C33-464B-8811-1B1DA3C3D197',
              ),
              'SharedTargets' => 
              array (
                'description' => '资源使用者信息。
',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源使用者信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TargetId' => 
                    array (
                      'description' => '资源使用者ID或资源所有者ID。取值：

- 当`ResourceOwner`为`Self`时，该参数为资源使用者ID。
- 当`ResourceOwner`为`OtherAccounts`时，该参数为资源所有者ID。',
                      'type' => 'string',
                      'example' => '114240524784****',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新关联资源使用者的时间。',
                      'type' => 'string',
                      'example' => '2020-12-07T09:16:59.905Z',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '关联资源使用者的时间。',
                      'type' => 'string',
                      'example' => '2020-12-07T09:16:59.905Z',
                    ),
                    'ResourceShareId' => 
                    array (
                      'description' => '共享单元ID。',
                      'type' => 'string',
                      'example' => 'rs-6GRmdD3X****',
                    ),
                    'External' => 
                    array (
                      'description' => '资源使用者是否为资源目录外账号。取值：

- true：资源目录外账号。
- false：资源目录内账号。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'TargetProperty' => 
                    array (
                      'description' => '资源使用者属性。例如：资源共享的时间段。
> 仅当资源使用者为阿里云服务时返回该参数。',
                      'type' => 'string',
                      'example' => '{
    "timeRange":{
        "timeRangeType":"timeRange",
        "beginAtTime":"00:00",
        "timezone":"UTC+8",
        "endAtTime":"19:59"
    }
}',
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
            'errorCode' => 'MissingParameter.ResourceOwner',
            'errorMessage' => 'You must specify ResourceOwner.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceOwner',
            'errorMessage' => 'The ResourceOwner is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The ResourceType is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The MaxResults is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken',
            'errorMessage' => 'The NextToken is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken.Length',
            'errorMessage' => 'The maximum length of NextToken exceeds 256 characters.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds',
            'errorMessage' => 'The ResourceShareIds is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds.Duplicate',
            'errorMessage' => 'The ResourceShareIds contains duplicate values.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds.Length',
            'errorMessage' => 'The maximum length of ResourceShareIds exceeds 5 characters.',
          ),
          9 => 
          array (
            'errorCode' => 'InvalidParameter.Targets',
            'errorMessage' => 'The Targets is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'InvalidParameter.Targets.Duplicate',
            'errorMessage' => 'The Targets contains duplicate values.',
          ),
          11 => 
          array (
            'errorCode' => 'InvalidParameter.Targets.Length',
            'errorMessage' => 'The maximum number of Targets exceeds 5.',
          ),
          12 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceId',
            'errorMessage' => 'The ResourceId is invalid.',
          ),
          13 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"TGlzdFJlc291cm****\\",\\n  \\"RequestId\\": \\"04677DCA-7C33-464B-8811-1B1DA3C3D197\\",\\n  \\"SharedTargets\\": [\\n    {\\n      \\"TargetId\\": \\"114240524784****\\",\\n      \\"UpdateTime\\": \\"2020-12-07T09:16:59.905Z\\",\\n      \\"CreateTime\\": \\"2020-12-07T09:16:59.905Z\\",\\n      \\"ResourceShareId\\": \\"rs-6GRmdD3X****\\",\\n      \\"External\\": false,\\n      \\"TargetProperty\\": \\"{\\\\n    \\\\\\"timeRange\\\\\\":{\\\\n        \\\\\\"timeRangeType\\\\\\":\\\\\\"timeRange\\\\\\",\\\\n        \\\\\\"beginAtTime\\\\\\":\\\\\\"00:00\\\\\\",\\\\n        \\\\\\"timezone\\\\\\":\\\\\\"UTC+8\\\\\\",\\\\n        \\\\\\"endAtTime\\\\\\":\\\\\\"19:59\\\\\\"\\\\n    }\\\\n}\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListSharedTargetsResponse>\\n    <RequestId>445ECACB-1082-4008-ABD4-8B259EFF4855</RequestId>\\n    <SharedTargets>\\n        <ResourceShareId>rs-6GRmdD3X****</ResourceShareId>\\n        <CreateTime>2020-12-07T09:16:59.905Z</CreateTime>\\n        <UpdateTime>2020-12-07T09:16:59.905Z</UpdateTime>\\n        <External>false</External>\\n        <TargetId>114240524784****</TargetId>\\n    </SharedTargets>\\n    <SharedTargets>\\n        <ResourceShareId>rs-6GRmdD3X****</ResourceShareId>\\n        <CreateTime>2020-12-07T09:15:26.879Z</CreateTime>\\n        <UpdateTime>2020-12-07T09:15:26.879Z</UpdateTime>\\n        <External>false</External>\\n        <TargetId>172050525300****</TargetId>\\n    </SharedTargets>\\n</ListSharedTargetsResponse>","errorExample":""}]',
      'title' => '查询资源使用者列表',
      'summary' => '查询资源使用者列表。',
      'description' => '如果您是资源所有者，您可以查询您把资源共享给了哪些资源使用者。
如果您是资源使用者，您可以查询您参与了哪些资源共享。

本文将提供一个示例，在`cn-hangzhou`地域，查询您发起的资源共享的资源使用者列表。返回结果显示，您将资源共享给了资源使用者`114240524784****`和`172050525300****`。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeRegions' => 
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
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持的语言。取值：
- 中文：zh-CN。
- 英文：en-US。
',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0D64A198-5842-4570-8E26-5E540CDC84CD',
              ),
              'Regions' => 
              array (
                'description' => '地域信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '地域信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionEndpoint' => 
                    array (
                      'description' => '地域的接入地址。',
                      'type' => 'string',
                      'example' => 'resourcesharing.cn-hangzhou.aliyuncs.com',
                    ),
                    'LocalName' => 
                    array (
                      'description' => '地域名称。',
                      'type' => 'string',
                      'example' => '华东1（杭州）',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0D64A198-5842-4570-8E26-5E540CDC84CD\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionEndpoint\\": \\"resourcesharing.cn-hangzhou.aliyuncs.com\\",\\n      \\"LocalName\\": \\"华东1（杭州）\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeRegionsResponse>\\n    <RequestId>9BF57A2D-5108-58A1-BF2B-812BB4026666</RequestId>\\n    <Regions>\\n        <RegionId>cn-hangzhou</RegionId>\\n        <RegionEndpoint>resourcesharing.cn-hangzhou.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东1（杭州）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-shanghai</RegionId>\\n        <RegionEndpoint>resourcesharing.cn-shanghai.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华东2（上海）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-qingdao</RegionId>\\n        <RegionEndpoint>resourcesharing.cn-qingdao.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北1（青岛）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-beijing</RegionId>\\n        <RegionEndpoint>resourcesharing.cn-beijing.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北2（北京）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-zhangjiakou</RegionId>\\n        <RegionEndpoint>resourcesharing.cn-zhangjiakou.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北3（张家口）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-huhehaote</RegionId>\\n        <RegionEndpoint>resourcesharing.cn-huhehaote.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华北5（呼和浩特）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-shenzhen</RegionId>\\n        <RegionEndpoint>resourcesharing.cn-shenzhen.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南1（深圳）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-heyuan</RegionId>\\n        <RegionEndpoint>resourcesharing.cn-heyuan.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南2（河源）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-guangzhou</RegionId>\\n        <RegionEndpoint>resourcesharing.cn-guangzhou.aliyuncs.com</RegionEndpoint>\\n        <LocalName>华南3（广州）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-chengdu</RegionId>\\n        <RegionEndpoint>resourcesharing.cn-chengdu.aliyuncs.com</RegionEndpoint>\\n        <LocalName>西南1（成都）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>cn-hongkong</RegionId>\\n        <RegionEndpoint>resourcesharing.cn-hongkong.aliyuncs.com</RegionEndpoint>\\n        <LocalName>中国（香港）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-1</RegionId>\\n        <RegionEndpoint>resourcesharing.ap-southeast-1.aliyuncs.com</RegionEndpoint>\\n        <LocalName>新加坡</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-northeast-1</RegionId>\\n        <RegionEndpoint>resourcesharing.ap-northeast-1.aliyuncs.com</RegionEndpoint>\\n        <LocalName>日本（东京）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-northeast-2</RegionId>\\n        <RegionEndpoint>resourcesharing.ap-northeast-2.aliyuncs.com</RegionEndpoint>\\n        <LocalName>韩国（首尔）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-2</RegionId>\\n        <RegionEndpoint>resourcesharing.ap-southeast-2.aliyuncs.com</RegionEndpoint>\\n        <LocalName>澳大利亚（悉尼）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-3</RegionId>\\n        <RegionEndpoint>resourcesharing.ap-southeast-3.aliyuncs.com</RegionEndpoint>\\n        <LocalName>马来西亚（吉隆坡）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-5</RegionId>\\n        <RegionEndpoint>resourcesharing.ap-southeast-5.aliyuncs.com</RegionEndpoint>\\n        <LocalName>印度尼西亚（雅加达）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-6</RegionId>\\n        <RegionEndpoint>resourcesharing.ap-southeast-6.aliyuncs.com</RegionEndpoint>\\n        <LocalName>菲律宾（马尼拉）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-southeast-7</RegionId>\\n        <RegionEndpoint>resourcesharing.ap-southeast-7.aliyuncs.com</RegionEndpoint>\\n        <LocalName>泰国（曼谷）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>ap-south-1</RegionId>\\n        <RegionEndpoint>resourcesharing.ap-south-1.aliyuncs.com</RegionEndpoint>\\n        <LocalName>印度（孟买）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>eu-central-1</RegionId>\\n        <RegionEndpoint>resourcesharing.eu-central-1.aliyuncs.com</RegionEndpoint>\\n        <LocalName>德国（法兰克福）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>eu-west-1</RegionId>\\n        <RegionEndpoint>resourcesharing.eu-west-1.aliyuncs.com</RegionEndpoint>\\n        <LocalName>英国（伦敦）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>us-east-1</RegionId>\\n        <RegionEndpoint>resourcesharing.us-east-1.aliyuncs.com</RegionEndpoint>\\n        <LocalName>美国（弗吉尼亚）</LocalName>\\n    </Regions>\\n    <Regions>\\n        <RegionId>us-west-1</RegionId>\\n        <RegionEndpoint>resourcesharing.us-west-1.aliyuncs.com</RegionEndpoint>\\n        <LocalName>美国（硅谷）</LocalName>\\n    </Regions>\\n</DescribeRegionsResponse>","errorExample":""}]',
      'title' => '查询支持资源共享的地域',
      'summary' => '查询支持资源共享的地域。',
      'requestParamsDescription' => '  关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CheckSharingWithResourceDirectoryStatus' => 
    array (
      'summary' => '检查基于组织共享的状态。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      ),
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
                'example' => '819545D0-C97A-5DB3-BD73-A1B17E9A4BC1',
              ),
              'EnableSharingWithRd' => 
              array (
                'description' => '是否启用与资源目录组织的共享。取值：

- false：未启用。
- true：已启用。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"819545D0-C97A-5DB3-BD73-A1B17E9A4BC1\\",\\n  \\"EnableSharingWithRd\\": true\\n}","type":"json"}]',
      'title' => '检查基于组织共享的状态',
    ),
    'ChangeResourceGroup' => 
    array (
      'summary' => '将共享单元从一个资源组转移到另外一个资源组。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资源Id',
            'description' => '共享单元ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rs-dz3Ek1iiO***',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '地域Id',
            'description' => '共享单元所在的地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '目标资源组',
            'description' => '目标资源组。',
            'type' => 'string',
            'required' => true,
            'example' => 'rg-aek2nb47ueqk***',
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
            'title' => 'Schema of Response',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0A900114-22D3-5E9D-87A2-48E5EB5BF310',
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
            'errorCode' => 'NoPermission.ChangeResourceGroup',
            'errorMessage' => 'You are not authorized to change resourcegroup',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.ResourceRegionId',
            'errorMessage' => 'The ResourceRegionId parameters that are required for processing this request are missing',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.ResourceId',
            'errorMessage' => 'The ResourceId parameters that are required for processing this request are missing',
          ),
          3 => 
          array (
            'errorCode' => 'MissingParameter.ResourceGroupId',
            'errorMessage' => 'The ResourceGroupId parameters that are required for processing this request are missing',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidResourceGroup',
            'errorMessage' => 'The specified ResourceGroupId is invalid',
          ),
          5 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred while processing your request',
          ),
          6 => 
          array (
            'errorCode' => 'ResourceNotFound',
            'errorMessage' => 'The specified resource is not found',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0A900114-22D3-5E9D-87A2-48E5EB5BF310\\"\\n}","type":"json"}]',
      'title' => '共享单元转组',
    ),
    'ListResourceShareInvitations' => 
    array (
      'summary' => '资源使用者调用ListResourceShareInvitations查询自己收到的资源共享邀请信息。',
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
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单次请求返回结果的最大条数。

取值范围：1~100。默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，您可以使用`NextToken`再次发起请求，获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'TGlzdFJlc291cm****',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceShareIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '共享单元ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '共享单元ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'rs-ysGRci9z****',
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceShareInvitationIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源共享邀请ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源共享邀请ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'i-p6eRytrkjVvM****',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '当请求的返回结果被截断时，您可以使用`NextToken`再次发起请求，获取从当前截断位置之后的内容。',
                'type' => 'string',
                'example' => 'TGlzdFJlc291cm****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '30EC8328-1BDE-51D5-BFAB-039508BD91A1',
              ),
              'ResourceShareInvitations' => 
              array (
                'description' => '资源共享邀请信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源共享邀请信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '邀请状态。取值：

- Pending：等待确认。
- Accepted：接受邀请成功。
- Cancelled：已取消。
- Rejected：已拒绝。
- Expired：已过期。
- AcceptFailed：接受邀请失败。',
                      'type' => 'string',
                      'example' => 'Pending',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '邀请创建时间（UTC时间）。',
                      'type' => 'string',
                      'example' => '2022-08-18T05:36:45.024Z',
                    ),
                    'ResourceShareId' => 
                    array (
                      'description' => '共享单元ID。',
                      'type' => 'string',
                      'example' => 'rs-ysGRci9z****',
                    ),
                    'ResourceShareName' => 
                    array (
                      'description' => '共享单元名称。',
                      'type' => 'string',
                      'example' => 'example',
                    ),
                    'SenderAccountId' => 
                    array (
                      'description' => '邀请者的阿里云账号ID。',
                      'type' => 'string',
                      'example' => '151266687691****',
                    ),
                    'ReceiverAccountId' => 
                    array (
                      'description' => '被邀请者的阿里云账号ID。',
                      'type' => 'string',
                      'example' => '134254031178****',
                    ),
                    'ResourceShareInvitationId' => 
                    array (
                      'description' => '资源共享邀请ID。',
                      'type' => 'string',
                      'example' => 'i-p6eRytrkjVvM****',
                    ),
                    'InvitationFailedDetails' => 
                    array (
                      'description' => '接受共享单元邀请或退出共享单元检查失败详细原因。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '接受共享单元邀请或退出共享单元检查失败详细原因。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Status' => 
                          array (
                            'description' => '已弃用。请使用FailureReason。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'StatusMessage' => 
                          array (
                            'description' => '已弃用。请使用FailureDescription。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'AssociateType' => 
                          array (
                            'description' => '已弃用。请使用OperationType。',
                            'type' => 'string',
                            'example' => '无',
                          ),
                          'ResourceId' => 
                          array (
                            'description' => '共享资源ID。',
                            'type' => 'string',
                            'example' => 's-7xvh46nx5oqlre0wv***',
                          ),
                          'ResourceType' => 
                          array (
                            'description' => '共享资源类型。

支持共享的资源类型，请参见[支持资源共享的云服务](~~450526~~)。',
                            'type' => 'string',
                            'example' => 'Snapshot',
                          ),
                          'FailureReason' => 
                          array (
                            'description' => '接受或退出共享单元检查失败时的原因。取值：

- Unavailable：资源不可以共享。
- LimitExceeded：资源可共享账号配额超限。
- ZonalResourceInaccessible： 资源在此地域不可用。
- InternalError：检查过程服务器内部出现错误。
- UnsupportedOperation：不支持执行操作。',
                            'type' => 'string',
                            'example' => 'Unavailable',
                          ),
                          'FailureDescription' => 
                          array (
                            'description' => '接受或退出共享单元检查失败时的详细原因描述。',
                            'type' => 'string',
                            'example' => 'You cannot access the specified resource at this time.',
                          ),
                          'OperationType' => 
                          array (
                            'description' => '操作类型。取值：
- Associate：关联。
- Disassociate：解除关联。',
                            'type' => 'string',
                            'example' => 'Associate',
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
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The MaxResults is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken',
            'errorMessage' => 'The NextToken is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken.Length',
            'errorMessage' => 'The maximum length of NextToken exceeds 256 characters.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds',
            'errorMessage' => 'The ResourceShareIds is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds.Duplicate',
            'errorMessage' => 'The ResourceShareIds contains duplicate values.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareIds.Length',
            'errorMessage' => 'The maximum length of ResourceShareIds exceeds 5 characters.',
          ),
          6 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareInvitationIds',
            'errorMessage' => 'The ResourceShareInvitationIds is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareInvitationIds.Duplicate',
            'errorMessage' => 'The ResourceShareInvitationIds duplicate values.',
          ),
          8 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareInvitationIds.Length',
            'errorMessage' => 'The maximum length of ResourceShareInvitationIds exceeds quota limit.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"TGlzdFJlc291cm****\\",\\n  \\"RequestId\\": \\"30EC8328-1BDE-51D5-BFAB-039508BD91A1\\",\\n  \\"ResourceShareInvitations\\": [\\n    {\\n      \\"Status\\": \\"Pending\\",\\n      \\"CreateTime\\": \\"2022-08-18T05:36:45.024Z\\",\\n      \\"ResourceShareId\\": \\"rs-ysGRci9z****\\",\\n      \\"ResourceShareName\\": \\"example\\",\\n      \\"SenderAccountId\\": \\"151266687691****\\",\\n      \\"ReceiverAccountId\\": \\"134254031178****\\",\\n      \\"ResourceShareInvitationId\\": \\"i-p6eRytrkjVvM****\\",\\n      \\"InvitationFailedDetails\\": [\\n        {\\n          \\"Status\\": \\"无\\",\\n          \\"StatusMessage\\": \\"无\\",\\n          \\"AssociateType\\": \\"无\\",\\n          \\"ResourceId\\": \\"s-7xvh46nx5oqlre0wv***\\",\\n          \\"ResourceType\\": \\"Snapshot\\",\\n          \\"FailureReason\\": \\"Unavailable\\",\\n          \\"FailureDescription\\": \\"You cannot access the specified resource at this time.\\",\\n          \\"OperationType\\": \\"Associate\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListResourceShareInvitationsResponse>\\n    <ResourceShareInvitations>\\n        <Status>Pending</Status>\\n        <ResourceShareId>rs-ysGRci9z****</ResourceShareId>\\n        <ResourceShareName>example</ResourceShareName>\\n        <SenderAccountId>151266687691****</SenderAccountId>\\n        <ReceiverAccountId>134254031178****</ReceiverAccountId>\\n        <CreateTime>2022-08-18T05:36:45.024Z</CreateTime>\\n        <ResourceShareInvitationId>i-p6eRytrkjVvM****</ResourceShareInvitationId>\\n    </ResourceShareInvitations>\\n    <RequestId>30EC8328-1BDE-51D5-BFAB-039508BD91A1</RequestId>\\n</ListResourceShareInvitationsResponse>","errorExample":""}]',
      'title' => '查询收到的资源共享邀请信息',
      'description' => '### 使用说明
本文将提供一个示例，查询当前账号在`cn-hangzhou`地域收到的资源共享邀请。返回结果显示，共收到1个邀请，且处于等待确认状态。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'AcceptResourceShareInvitation' => 
    array (
      'summary' => '资源使用者调用AcceptResourceShareInvitation接受资源共享邀请。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceShareInvitationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源共享邀请ID。

您可以调用[ListResourceShareInvitations](~~450564~~)获取资源共享邀请ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'i-pMnItMX19fBJ****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '08F18B04-47CB-5C0E-A6D2-37DEF5C2A961',
              ),
              'ResourceShareInvitation' => 
              array (
                'description' => '资源共享邀请信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResourceShareInvitationId' => 
                  array (
                    'description' => '资源共享邀请ID。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'i-pMnItMX19fBJ****',
                  ),
                  'ResourceShareId' => 
                  array (
                    'description' => '共享单元ID。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'rs-ysGRci9z****',
                  ),
                  'ResourceShareName' => 
                  array (
                    'description' => '共享单元名称。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'example',
                  ),
                  'SenderAccountId' => 
                  array (
                    'description' => '邀请者的阿里云账号ID。',
                    'type' => 'string',
                    'required' => true,
                    'example' => '151266687691****',
                  ),
                  'ReceiverAccountId' => 
                  array (
                    'description' => '被邀请者的阿里云账号ID。',
                    'type' => 'string',
                    'required' => true,
                    'example' => '134254031178****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '邀请创建时间（UTC时间）。',
                    'type' => 'string',
                    'required' => true,
                    'example' => '2022-09-02T06:43:12.353Z',
                  ),
                  'Status' => 
                  array (
                    'description' => '邀请状态。取值：

- Pending：等待确认。
- Accepted：接受邀请成功。
- Cancelled：已取消。
- Rejected：已拒绝。
- Expired：已过期。
- AcceptFailed：接受邀请失败。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'AcceptFailed',
                  ),
                  'AcceptInvitationFailedDetails' => 
                  array (
                    'description' => '接受共享单元邀请检查失败详细原因。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '接受共享单元邀请检查失败详细原因。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '已弃用。请使用FailureReason。',
                          'type' => 'string',
                          'example' => '无',
                        ),
                        'StatusMessage' => 
                        array (
                          'description' => '已弃用。请使用FailureDescription。',
                          'type' => 'string',
                          'example' => '无',
                        ),
                        'AssociateType' => 
                        array (
                          'description' => '已弃用。请使用OperationType。',
                          'type' => 'string',
                          'example' => '无',
                        ),
                        'ResourceId' => 
                        array (
                          'description' => '共享资源ID。',
                          'type' => 'string',
                          'example' => 's-7xvh46nx5oqlre0wv***',
                        ),
                        'ResourceType' => 
                        array (
                          'description' => '共享资源类型。

支持共享的资源类型，请参见[支持资源共享的云服务](~~450526~~)。',
                          'type' => 'string',
                          'example' => 'Snapshot',
                        ),
                        'FailureReason' => 
                        array (
                          'description' => '接受共享单元邀请检查失败时的原因。取值：

- Unavailable：资源不可以共享。
- LimitExceeded：资源可共享账号配额超限。
- ZonalResourceInaccessible： 资源在此地域不可用。
- InternalError：检查过程服务器内部出现错误。',
                          'type' => 'string',
                          'example' => 'Unavailable',
                        ),
                        'FailureDescription' => 
                        array (
                          'description' => '接受共享单元邀请检查失败时的详细原因描述。',
                          'type' => 'string',
                          'example' => 'You cannot access the specified resource at this time.',
                        ),
                        'OperationType' => 
                        array (
                          'description' => '操作类型。取值：
- Associate：关联。',
                          'type' => 'string',
                          'example' => 'Associate',
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
            'errorCode' => 'InvalidParameter.ResourceShareInvitationId',
            'errorMessage' => 'The ResourceShareInvitationId is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.ResourceShareInvitationId',
            'errorMessage' => 'You must specify ResourceShareInvitationId.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvitationStatus.Expired',
            'errorMessage' => 'The resource share invitation status is expired.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceShareInvitation',
            'errorMessage' => 'The resource share invitation does not exist in the current account.',
          ),
          2 => 
          array (
            'errorCode' => 'InvitationStatus.AlreadyRejected',
            'errorMessage' => 'The resource share invitation status is rejected.',
          ),
          3 => 
          array (
            'errorCode' => 'InvitationStatus.AlreadyAccepted',
            'errorMessage' => 'The resource share invitation status is alredy accepted.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"08F18B04-47CB-5C0E-A6D2-37DEF5C2A961\\",\\n  \\"ResourceShareInvitation\\": {\\n    \\"ResourceShareInvitationId\\": \\"i-pMnItMX19fBJ****\\",\\n    \\"ResourceShareId\\": \\"rs-ysGRci9z****\\",\\n    \\"ResourceShareName\\": \\"example\\",\\n    \\"SenderAccountId\\": \\"151266687691****\\",\\n    \\"ReceiverAccountId\\": \\"134254031178****\\",\\n    \\"CreateTime\\": \\"2022-09-02T06:43:12.353Z\\",\\n    \\"Status\\": \\"AcceptFailed\\",\\n    \\"AcceptInvitationFailedDetails\\": [\\n      {\\n        \\"Status\\": \\"无\\",\\n        \\"StatusMessage\\": \\"无\\",\\n        \\"AssociateType\\": \\"无\\",\\n        \\"ResourceId\\": \\"s-7xvh46nx5oqlre0wv***\\",\\n        \\"ResourceType\\": \\"Snapshot\\",\\n        \\"FailureReason\\": \\"Unavailable\\",\\n        \\"FailureDescription\\": \\"You cannot access the specified resource at this time.\\",\\n        \\"OperationType\\": \\"Associate\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AcceptResourceShareInvitationResponse>\\n    <RequestId>08F18B04-47CB-5C0E-A6D2-37DEF5C2A961</RequestId>\\n    <ResourceShareInvitation>\\n        <ResourceShareId>rs-ysGRci9z****</ResourceShareId>\\n        <ResourceShareName>example</ResourceShareName>\\n        <Status>Accepted</Status>\\n        <SenderAccountId>151266687691****</SenderAccountId>\\n        <ReceiverAccountId>134254031178****</ReceiverAccountId>\\n        <CreateTime>2022-09-02T06:43:12.353Z</CreateTime>\\n        <ResourceShareInvitationId>i-pMnItMX19fBJ****</ResourceShareInvitationId>\\n    </ResourceShareInvitation>\\n</AcceptResourceShareInvitationResponse>","errorExample":""}]',
      'title' => '接受资源共享邀请',
      'description' => '### 使用说明

- 只有在资源目录外共享资源时，才需要接受或拒绝资源共享邀请。在资源目录内共享资源时，系统会默认接受共享邀请，资源使用者不需要做任何操作。
- 共享邀请的有效期为7天，资源使用者需要在有效期内完成确认。

本文将提供一个示例，在`cn-hangzhou`地域，接受ID为`i-pMnItMX19fBJ****`的共享邀请。',
      'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~159973~~)。',
    ),
    'RejectResourceShareInvitation' => 
    array (
      'summary' => '资源使用者调用RejectResourceShareInvitation拒绝资源共享邀请。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceShareInvitationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源共享邀请ID。

您可以调用[ListResourceShareInvitations](~~450564~~)获取资源共享邀请ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'i-yyTWbkjHArYh****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E446D6DE-BFC8-5F37-A494-33D7B118147D',
              ),
              'ResourceShareInvitation' => 
              array (
                'description' => '资源共享邀请信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResourceShareInvitationId' => 
                  array (
                    'description' => '资源共享邀请ID。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'i-yyTWbkjHArYh****',
                  ),
                  'ResourceShareId' => 
                  array (
                    'description' => '共享单元ID。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'rs-JoA1Ayjm****',
                  ),
                  'ResourceShareName' => 
                  array (
                    'description' => '共享单元名称。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'example',
                  ),
                  'SenderAccountId' => 
                  array (
                    'description' => '邀请者的阿里云账号ID。',
                    'type' => 'string',
                    'required' => true,
                    'example' => '151266687691****',
                  ),
                  'ReceiverAccountId' => 
                  array (
                    'description' => '被邀请者的阿里云账号ID。',
                    'type' => 'string',
                    'required' => true,
                    'example' => '134254031178****',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '邀请创建时间（UTC时间）。',
                    'type' => 'string',
                    'required' => true,
                    'example' => '2022-09-02T07:07:30.809Z',
                  ),
                  'Status' => 
                  array (
                    'description' => '邀请状态。取值：

- Pending：等待确认。
- Accepted：已接受。
- Cancelled：已取消。
- Rejected：已拒绝。
- Expired：已过期。',
                    'type' => 'string',
                    'required' => true,
                    'example' => 'Rejected',
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
            'errorCode' => 'InvalidParameter.ResourceShareInvitationId',
            'errorMessage' => 'The ResourceShareInvitationId is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.ResourceShareInvitationId',
            'errorMessage' => 'You must specify ResourceShareInvitationId.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvitationStatus.Expired',
            'errorMessage' => 'The resource share invitation status is expired.',
          ),
          1 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceShareInvitation',
            'errorMessage' => 'The resource share invitation does not exist in the current account.',
          ),
          2 => 
          array (
            'errorCode' => 'InvitationStatus.AlreadyRejected',
            'errorMessage' => 'The resource share invitation status is rejected.',
          ),
          3 => 
          array (
            'errorCode' => 'InvitationStatus.AlreadyAccepted',
            'errorMessage' => 'The resource share invitation status is alredy accepted.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E446D6DE-BFC8-5F37-A494-33D7B118147D\\",\\n  \\"ResourceShareInvitation\\": {\\n    \\"ResourceShareInvitationId\\": \\"i-yyTWbkjHArYh****\\",\\n    \\"ResourceShareId\\": \\"rs-JoA1Ayjm****\\",\\n    \\"ResourceShareName\\": \\"example\\",\\n    \\"SenderAccountId\\": \\"151266687691****\\",\\n    \\"ReceiverAccountId\\": \\"134254031178****\\",\\n    \\"CreateTime\\": \\"2022-09-02T07:07:30.809Z\\",\\n    \\"Status\\": \\"Rejected\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RejectResourceShareInvitationResponse>\\n    <RequestId>E446D6DE-BFC8-5F37-A494-33D7B118147D</RequestId>\\n    <ResourceShareInvitation>\\n        <ResourceShareId>rs-JoA1Ayjm****</ResourceShareId>\\n        <ResourceShareName>example</ResourceShareName>\\n        <Status>Rejected</Status>\\n        <SenderAccountId>151266687691****</SenderAccountId>\\n        <ReceiverAccountId>134254031178****</ReceiverAccountId>\\n        <CreateTime>2022-09-02T07:07:30.809Z</CreateTime>\\n        <ResourceShareInvitationId>i-yyTWbkjHArYh****</ResourceShareInvitationId>\\n    </ResourceShareInvitation>\\n</RejectResourceShareInvitationResponse>","errorExample":""}]',
      'title' => '拒绝资源共享邀请',
      'description' => '本文将提供一个示例，在`cn-hangzhou`地域，拒绝ID为`i-yyTWbkjHArYh****`的资源共享邀请。',
    ),
    'AssociateResourceSharePermission' => 
    array (
      'summary' => '调用AssociateResourceSharePermission为共享单元关联共享权限。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceShareId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rs-6GRmdD3X****',
          ),
        ),
        1 => 
        array (
          'name' => 'PermissionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享权限名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => false,
            'example' => 'AliyunRSDefaultPermissionVSwitch',
          ),
        ),
        2 => 
        array (
          'name' => 'Replace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的权限是否替换现有权限。取值：
- false（默认值）：否，不替换现有权限，适合于将当前权限添加到没有权限的共享单元。由于同一个共享单元中相同资源类型只能具有一个权限，如果共享单元中某资源类型已经有设置权限，同时您将Replace设置为fasle，此时该操作会报错。防止您误操作替换现有权限。

- true：是，替换共享单元中相同资源类型的权限。',
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
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '111FB84A-60A9-403E-9067-E55D7EE95BD1',
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
            'errorCode' => 'InvalidParameter.ResourceShareId',
            'errorMessage' => 'The ResourceShareId is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.ResourceShareId',
            'errorMessage' => 'You must specify ResourceShareId.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.PermissionName',
            'errorMessage' => 'You must specify PermissionName.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Permission',
            'errorMessage' => 'The resource share permission does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"111FB84A-60A9-403E-9067-E55D7EE95BD1\\"\\n}","errorExample":""},{"type":"xml","example":"<AssociateResourceSharePermissionResponse>\\n    <RequestId>2C3FA051-61DC-4F3E-81E9-E4830524DF4B</RequestId>\\n</AssociateResourceSharePermissionResponse>","errorExample":""}]',
      'title' => '为共享单元关联共享权限',
      'description' => '本文将提供一个示例，在`cn-hangzhou`地域的共享单元`rs-6GRmdD3X****`中，关联共享权限`AliyunRSDefaultPermissionVSwitch`。',
    ),
    'DisassociateResourceSharePermission' => 
    array (
      'summary' => '调用DisassociateResourceSharePermission为共享单元解除共享权限。当共享单元下权限对应的资源类型没有关联具体资源时，才允许从共享单元中删除权限。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ResourceShareId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rs-6GRmdD3X****',
          ),
        ),
        1 => 
        array (
          'name' => 'PermissionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享权限名称。在[权限库](~~465474~~)文档中查看。',
            'type' => 'string',
            'required' => true,
            'docRequired' => false,
            'example' => 'AliyunRSDefaultPermissionVSwitch',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '111FB84A-60A9-403E-9067-E55D7EE95BD1',
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
            'errorCode' => 'InvalidParameter.ResourceShareId',
            'errorMessage' => 'The ResourceShareId is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.ResourceShareId',
            'errorMessage' => 'You must specify ResourceShareId.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingParameter.PermissionName',
            'errorMessage' => 'You must specify PermissionName.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Permission',
            'errorMessage' => 'The resource share permission does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'DisassociateConflict.Permission',
            'errorMessage' => 'Existing associated resource when disassociating permission with resource share.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"111FB84A-60A9-403E-9067-E55D7EE95BD1\\"\\n}","errorExample":""},{"type":"xml","example":"<DisassociateResourceSharePermissionResponse>\\n    <RequestId>111FB84A-60A9-403E-9067-E55D7EE95BD1</RequestId>\\n</DisassociateResourceSharePermissionResponse>","errorExample":""}]',
      'title' => '为共享单元解除共享权限',
      'description' => '本文将提供一个示例，在`cn-hangzhou`地域的共享单元`rs-6GRmdD3X****`中，解除共享权限`AliyunRSDefaultPermissionVSwitch`。',
    ),
    'ListResourceSharePermissions' => 
    array (
      'summary' => '调用ListResourceSharePermissions查询共享单元中关联权限的记录。',
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
          'name' => 'ResourceShareId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'rs-6GRmdD3X****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单次请求返回结果的最大条数。

取值范围：1~100。默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，您可以使用`NextToken`再次发起请求，获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'TGlzdFJlc291cm****',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceOwner',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享单元归属者。取值：

- Self：查询当前账号的共享单元列表。
- OtherAccounts：查询其他账号共享给当前账号的共享单元列表。',
            'type' => 'string',
            'required' => true,
            'example' => 'Self',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '当请求的返回结果被截断时，您可以使用`NextToken`再次发起请求，获取从当前截断位置之后的内容。',
                'type' => 'string',
                'example' => 'TGlzdFJlc291cm****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F23CFB6-A721-4E90-AC1E-0E30FA8B45DA',
              ),
              'Permissions' => 
              array (
                'description' => '共享权限信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '共享权限信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PermissionName' => 
                    array (
                      'description' => '共享权限名称。',
                      'type' => 'string',
                      'example' => 'AliyunRSDefaultPermissionVSwitch',
                    ),
                    'PermissionVersion' => 
                    array (
                      'description' => '共享权限版本。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                    'DefaultVersion' => 
                    array (
                      'description' => '共享权限是否为默认版本。取值：

- false：不是默认版本。

- true：是默认版本。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2020-12-07T07:39:01.818Z',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2020-12-07T07:39:01.818Z',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '共享资源类型。

支持共享的资源类型，请参见[支持资源共享的云服务](~~450526~~)。',
                      'type' => 'string',
                      'example' => 'VSwitch',
                    ),
                    'DefaultPermission' => 
                    array (
                      'description' => '是否为默认权限。取值：

- false：不是默认权限。

- true：是默认权限。',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.ResourceShareId',
            'errorMessage' => 'You must specify ResourceShareId.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceShareId',
            'errorMessage' => 'The ResourceShareId is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The MaxResults is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken',
            'errorMessage' => 'The NextToken is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken.Length',
            'errorMessage' => 'The maximum length of NextToken exceeds 256 characters.',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceOwner',
            'errorMessage' => 'The ResourceOwner is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'MissingParameter.ResourceOwner',
            'errorMessage' => 'You must specify ResourceOwner.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.ResourceShare',
            'errorMessage' => 'The resource share does not exist in the current account.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"TGlzdFJlc291cm****\\",\\n  \\"RequestId\\": \\"2F23CFB6-A721-4E90-AC1E-0E30FA8B45DA\\",\\n  \\"Permissions\\": [\\n    {\\n      \\"PermissionName\\": \\"AliyunRSDefaultPermissionVSwitch\\",\\n      \\"PermissionVersion\\": \\"v1\\",\\n      \\"DefaultVersion\\": true,\\n      \\"CreateTime\\": \\"2020-12-07T07:39:01.818Z\\",\\n      \\"UpdateTime\\": \\"2020-12-07T07:39:01.818Z\\",\\n      \\"ResourceType\\": \\"VSwitch\\",\\n      \\"DefaultPermission\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListResourceSharePermissionsResponse>\\n    <NextToken>TGlzdFJlc291cm****</NextToken>\\n    <RequestId>2F23CFB6-A721-4E90-AC1E-0E30FA8B45DA</RequestId>\\n    <Permissions>\\n        <PermissionName>AliyunRSDefaultPermissionVSwitch</PermissionName>\\n        <PermissionVersion>v1</PermissionVersion>\\n        <DefaultVersion>true</DefaultVersion>\\n        <CreateTime>2020-12-07T07:39:01.818Z</CreateTime>\\n        <UpdateTime>2020-12-07T07:39:01.818Z</UpdateTime>\\n        <ResourceType>VSwitch</ResourceType>\\n        <DefaultPermission>true</DefaultPermission>\\n    </Permissions>\\n</ListResourceSharePermissionsResponse>","errorExample":""}]',
      'title' => '查询共享单元中关联权限的记录',
      'description' => '本文将提供一个示例，在`cn-hangzhou`地域，查询当前账号创建的共享单元中关联的共享权限记录。',
    ),
    'GetPermission' => 
    array (
      'summary' => '调用GetPermission查询共享权限信息。',
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
          'name' => 'PermissionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享权限名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AliyunRSDefaultPermissionVSwitch',
          ),
        ),
        1 => 
        array (
          'name' => 'PermissionVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享权限版本。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'v1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2F23CFB6-A721-4E90-AC1E-0E30FA8B45DA',
              ),
              'Permission' => 
              array (
                'description' => '共享权限信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PermissionName' => 
                  array (
                    'description' => '共享权限名称。',
                    'type' => 'string',
                    'example' => 'AliyunRSDefaultPermissionVSwitch',
                  ),
                  'PermissionVersion' => 
                  array (
                    'description' => '共享权限版本。',
                    'type' => 'string',
                    'example' => 'v1',
                  ),
                  'Permission' => 
                  array (
                    'description' => '共享权限策略定义。',
                    'type' => 'string',
                    'example' => '{"Effect":"Allow","Action":["vpc:DescribeVSwitches","vpc:DescribeVSwitchAttributes"]}',
                  ),
                  'ResourceType' => 
                  array (
                    'description' => '共享资源类型。

支持共享的资源类型，请参见[支持资源共享的云服务](~~450526~~)。',
                    'type' => 'string',
                    'example' => 'VSwitch',
                  ),
                  'DefaultVersion' => 
                  array (
                    'description' => '共享权限是否为默认版本。取值：

- false：不是默认版本。

- true：是默认版本。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2020-12-07T07:39:01.818Z',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '更新时间。',
                    'type' => 'string',
                    'example' => '2020-12-07T07:39:01.818Z',
                  ),
                  'DefaultPermission' => 
                  array (
                    'description' => '是否为默认权限。取值：

- false：不是默认权限。

- true：是默认权限。',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.PermissionVersion',
            'errorMessage' => 'The PermissionVersion is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter.PermissionName',
            'errorMessage' => 'You must specify PermissionName.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityNotExists.Permission',
            'errorMessage' => 'The resource share permission does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2F23CFB6-A721-4E90-AC1E-0E30FA8B45DA\\",\\n  \\"Permission\\": {\\n    \\"PermissionName\\": \\"AliyunRSDefaultPermissionVSwitch\\",\\n    \\"PermissionVersion\\": \\"v1\\",\\n    \\"Permission\\": \\"{\\\\\\"Effect\\\\\\":\\\\\\"Allow\\\\\\",\\\\\\"Action\\\\\\":[\\\\\\"vpc:DescribeVSwitches\\\\\\",\\\\\\"vpc:DescribeVSwitchAttributes\\\\\\"]}\\",\\n    \\"ResourceType\\": \\"VSwitch\\",\\n    \\"DefaultVersion\\": true,\\n    \\"CreateTime\\": \\"2020-12-07T07:39:01.818Z\\",\\n    \\"UpdateTime\\": \\"2020-12-07T07:39:01.818Z\\",\\n    \\"DefaultPermission\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetPermissionResponse>\\n    <RequestId>2F23CFB6-A721-4E90-AC1E-0E30FA8B45DA</RequestId>\\n    <Permission>\\n        <PermissionName>AliyunRSDefaultPermissionVSwitch</PermissionName>\\n        <PermissionVersion>v1</PermissionVersion>\\n        <Permission>{\\\\\\"Effect\\\\\\":\\\\\\"Allow\\\\\\",\\\\\\"Action\\\\\\":[\\\\\\"vpc:DescribeVSwitches\\\\\\",\\\\\\"vpc:DescribeVSwitchAttributes\\\\\\"]}</Permission>\\n        <ResourceType>VSwitch</ResourceType>\\n        <DefaultVersion>true</DefaultVersion>\\n        <CreateTime>2020-12-07T07:39:01.818Z</CreateTime>\\n        <UpdateTime>2020-12-07T07:39:01.818Z</UpdateTime>\\n        <DefaultPermission>true</DefaultPermission>\\n    </Permission>\\n</GetPermissionResponse>","errorExample":""}]',
      'title' => '查询共享权限信息',
      'description' => '本文将提供一个示例，在`cn-hangzhou`地域，查询共享权限名称为`AliyunRSDefaultPermissionVSwitch`，权限版本为`v1`的共享权限信息。',
    ),
    'ListPermissionVersions' => 
    array (
      'summary' => '调用ListPermissionVersions查询指定共享权限名称的版本信息。',
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
          'name' => 'PermissionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享权限名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AliyunRSDefaultPermissionVSwitch',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单次请求返回结果的最大条数。

取值范围：1~100。默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，您可以使用`NextToken`再次发起请求，获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'TGlzdFJlc291cm****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '当请求的返回结果被截断时，您可以使用NextToken再次发起请求，获取从当前截断位置之后的内容。',
                'type' => 'string',
                'example' => 'TGlzdFJlc291cm****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04677DCA-7C33-464B-8811-1B1DA3C3D197',
              ),
              'Permissions' => 
              array (
                'description' => '共享权限信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '共享权限信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PermissionName' => 
                    array (
                      'description' => '共享权限名称。',
                      'type' => 'string',
                      'example' => 'AliyunRSDefaultPermissionVSwitch',
                    ),
                    'PermissionVersion' => 
                    array (
                      'description' => '共享权限版本。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                    'DefaultVersion' => 
                    array (
                      'description' => '共享权限是否为默认版本。取值：

- false：不是默认版本。

- true：是默认版本。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2020-12-07T07:39:01.818Z',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2020-12-07T07:39:01.818Z',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '共享资源类型。

支持共享的资源类型，请参见[支持资源共享的云服务](~~450526~~)。',
                      'type' => 'string',
                      'example' => 'VSwitch',
                    ),
                    'DefaultPermission' => 
                    array (
                      'description' => '是否为默认权限。取值：

- false：不是默认权限。

- true：是默认权限。',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'MissingParameter.PermissionName',
            'errorMessage' => 'You must specify PermissionName.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The ResourceType is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The MaxResults is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken',
            'errorMessage' => 'The NextToken is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken.Length',
            'errorMessage' => 'The maximum length of NextToken exceeds 256 characters.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"TGlzdFJlc291cm****\\",\\n  \\"RequestId\\": \\"04677DCA-7C33-464B-8811-1B1DA3C3D197\\",\\n  \\"Permissions\\": [\\n    {\\n      \\"PermissionName\\": \\"AliyunRSDefaultPermissionVSwitch\\",\\n      \\"PermissionVersion\\": \\"v1\\",\\n      \\"DefaultVersion\\": true,\\n      \\"CreateTime\\": \\"2020-12-07T07:39:01.818Z\\",\\n      \\"UpdateTime\\": \\"2020-12-07T07:39:01.818Z\\",\\n      \\"ResourceType\\": \\"VSwitch\\",\\n      \\"DefaultPermission\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPermissionVersionsResponse>\\n    <NextToken>TGlzdFJlc291cm****</NextToken>\\n    <RequestId>04677DCA-7C33-464B-8811-1B1DA3C3D197</RequestId>\\n    <Permissions>\\n        <PermissionName>AliyunRSDefaultPermissionVSwitch</PermissionName>\\n        <PermissionVersion>v1</PermissionVersion>\\n        <DefaultVersion>true</DefaultVersion>\\n        <CreateTime>2020-12-07T07:39:01.818Z</CreateTime>\\n        <UpdateTime>2020-12-07T07:39:01.818Z</UpdateTime>\\n        <ResourceType>VSwitch</ResourceType>\\n        <DefaultPermission>true</DefaultPermission>\\n    </Permissions>\\n</ListPermissionVersionsResponse>","errorExample":""}]',
      'title' => '查询共享权限的版本信息',
      'description' => '本文将提供一个示例，在`cn-hangzhou`地域，查询共享权限名称为`AliyunRSDefaultPermissionVSwitch`的版本信息。',
    ),
    'ListPermissions' => 
    array (
      'summary' => '调用ListPermissions查询默认共享权限信息。',
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
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享资源类型。

支持共享的资源类型，请参见[支持资源共享的云服务](~~450526~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'VSwitch',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '单次请求返回结果的最大条数。

取值范围：1~100。默认值：20。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当请求的返回结果被截断时，您可以使用`NextToken`再次发起请求，获取从当前截断位置之后的内容。',
            'type' => 'string',
            'required' => false,
            'example' => 'TGlzdFJlc291cm****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回参数。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '当请求的返回结果被截断时，您可以使用NextToken再次发起请求，获取从当前截断位置之后的内容。',
                'type' => 'string',
                'example' => 'TGlzdFJlc291cm****',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04677DCA-7C33-464B-8811-1B1DA3C3D197',
              ),
              'Permissions' => 
              array (
                'description' => '共享权限信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '共享权限信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PermissionName' => 
                    array (
                      'description' => '共享权限名称。',
                      'type' => 'string',
                      'example' => 'AliyunRSDefaultPermissionVSwitch',
                    ),
                    'PermissionVersion' => 
                    array (
                      'description' => '共享权限版本。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                    'DefaultVersion' => 
                    array (
                      'description' => '共享权限是否为默认版本。取值：

- false：不是默认版本。

- true：是默认版本。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2020-12-07T07:39:01.818Z',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2020-12-07T07:39:01.818Z',
                    ),
                    'ResourceType' => 
                    array (
                      'description' => '共享资源类型。

支持共享的资源类型，请参见[支持资源共享的云服务](~~450526~~)。',
                      'type' => 'string',
                      'example' => 'VSwitch',
                    ),
                    'DefaultPermission' => 
                    array (
                      'description' => '是否为默认权限。取值：

- false：不是默认权限。

- true：是默认权限。',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter.ResourceType',
            'errorMessage' => 'The ResourceType is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.MaxResults',
            'errorMessage' => 'The MaxResults is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken',
            'errorMessage' => 'The NextToken is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.NextToken.Length',
            'errorMessage' => 'The maximum length of NextToken exceeds 256 characters.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"TGlzdFJlc291cm****\\",\\n  \\"RequestId\\": \\"04677DCA-7C33-464B-8811-1B1DA3C3D197\\",\\n  \\"Permissions\\": [\\n    {\\n      \\"PermissionName\\": \\"AliyunRSDefaultPermissionVSwitch\\",\\n      \\"PermissionVersion\\": \\"v1\\",\\n      \\"DefaultVersion\\": true,\\n      \\"CreateTime\\": \\"2020-12-07T07:39:01.818Z\\",\\n      \\"UpdateTime\\": \\"2020-12-07T07:39:01.818Z\\",\\n      \\"ResourceType\\": \\"VSwitch\\",\\n      \\"DefaultPermission\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPermissionsResponse>\\n    <NextToken>TGlzdFJlc291cm****</NextToken>\\n    <RequestId>04677DCA-7C33-464B-8811-1B1DA3C3D197</RequestId>\\n    <Permissions>\\n        <PermissionName>AliyunRSDefaultPermissionVSwitch</PermissionName>\\n        <PermissionVersion>v1</PermissionVersion>\\n        <DefaultVersion>true</DefaultVersion>\\n        <CreateTime>2020-12-07T07:39:01.818Z</CreateTime>\\n        <UpdateTime>2020-12-07T07:39:01.818Z</UpdateTime>\\n        <ResourceType>VSwitch</ResourceType>\\n        <DefaultPermission>true</DefaultPermission>\\n    </Permissions>\\n</ListPermissionsResponse>","errorExample":""}]',
      'title' => '查询默认共享权限信息',
      'description' => '本文将提供一个示例，在`cn-hangzhou`地域，查询资源类型为`VSwitch`的默认共享权限信息。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'resourcesharing.us-east-1.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'resourcesharing.cn-qingdao.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'resourcesharing.cn-beijing.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'resourcesharing.cn-zhangjiakou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'resourcesharing.cn-huhehaote.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'resourcesharing.cn-hangzhou.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'resourcesharing.cn-shanghai.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'resourcesharing.cn-shenzhen.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'resourcesharing.cn-heyuan.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'resourcesharing.cn-guangzhou.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'resourcesharing.cn-chengdu.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'resourcesharing.cn-hongkong.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'resourcesharing.ap-northeast-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'resourcesharing.ap-northeast-2.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'resourcesharing.ap-southeast-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'resourcesharing.ap-southeast-2.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'resourcesharing.ap-southeast-3.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'resourcesharing.ap-southeast-5.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'resourcesharing.ap-southeast-6.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'resourcesharing.us-west-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'resourcesharing.eu-west-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'resourcesharing.eu-central-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'resourcesharing.ap-south-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'resourcesharing.ap-southeast-7.aliyuncs.com',
    ),
  ),
);
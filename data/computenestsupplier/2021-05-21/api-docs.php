<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'ComputeNestSupplier',
    'version' => '2021-05-21',
  ),
  'directories' => 
  array (
    0 => 'GetArtifactRepositoryCredentials',
    1 => 'CreateArtifact',
    2 => 'DeleteArtifact',
    3 => 'ReleaseArtifact',
    4 => 'ListArtifacts',
    5 => 'GetArtifact',
    6 => 'ListArtifactVersions',
    7 => 'UpdateArtifact',
    8 => 'CreateService',
    9 => 'RegisterService',
    10 => 'UpdateService',
    11 => 'UpgradeServiceInstance',
    12 => 'UpdateServiceInstanceAttribute',
    13 => 'DeleteService',
    14 => 'ListServices',
    15 => 'GetService',
    16 => 'DeployServiceInstance',
    17 => 'GetServiceInstance',
    18 => 'ListServiceInstances',
    19 => 'ListServiceUsages',
    20 => 'GetServiceEstimateCost',
    21 => 'GetUploadCredentials',
    22 => 'ModifyServiceInstanceResources',
    23 => 'ContinueDeployServiceInstance',
    24 => 'CreateServiceInstance',
    25 => 'DeleteServiceInstances',
    26 => 'UpdateServiceInstanceSpec',
    27 => 'PushMeteringData',
    28 => 'ListAcrImageRepositories',
    29 => 'ListAcrImageTags',
    30 => 'GetServiceTemplateParameterConstraints',
    31 => 'AddServiceSharedAccounts',
    32 => 'StartServiceInstance',
    33 => 'RestartServiceInstance',
    34 => 'StopServiceInstance',
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'GetArtifactRepositoryCredentials' => 
    array (
      'summary' => '获取部署物上传所需的凭证。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ArtifactType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物类型。可能的值：

- File：Oss文件。

- AcrImage：容器镜像。',
            'type' => 'string',
            'required' => true,
            'example' => 'File',
          ),
        ),
        1 => 
        array (
          'name' => 'DeployRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上传地域。',
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
            'description' => '响应数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '94E89857-B994-44B6-9C4F-DBD200E9XXXX',
              ),
              'ExpireDate' => 
              array (
                'description' => '过期时间。',
                'type' => 'string',
                'example' => '1526549792000',
              ),
              'Credentials' => 
              array (
                'description' => '访问凭证。',
                'type' => 'object',
                'properties' => 
                array (
                  'Username' => 
                  array (
                    'description' => '用户名称。',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'Password' => 
                  array (
                    'description' => '密码。',
                    'type' => 'string',
                    'example' => 'eyJ0aW1lIjoiMTUyNjU0OTc5:0705733****',
                  ),
                  'AccessKeyId' => 
                  array (
                    'description' => '访问密钥ID。',
                    'type' => 'string',
                    'example' => 'STS.xxx',
                  ),
                  'AccessKeySecret' => 
                  array (
                    'description' => '访问密钥secret值。',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                  'SecurityToken' => 
                  array (
                    'description' => '安全令牌。',
                    'type' => 'string',
                    'example' => 'xxx',
                  ),
                ),
              ),
              'AvailableResources' => 
              array (
                'description' => '可上传的资源信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '可上传的资源信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RegionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'oss-cn-hangzhou',
                    ),
                    'RepositoryName' => 
                    array (
                      'description' => '仓库名称。',
                      'type' => 'string',
                      'example' => 'computenest-artifacts-draft-cn-hangzhou',
                    ),
                    'Path' => 
                    array (
                      'description' => '路径。',
                      'type' => 'string',
                      'example' => '"/xxx/"',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"94E89857-B994-44B6-9C4F-DBD200E9XXXX\\",\\n  \\"ExpireDate\\": \\"1526549792000\\",\\n  \\"Credentials\\": {\\n    \\"Username\\": \\"xxx\\",\\n    \\"Password\\": \\"eyJ0aW1lIjoiMTUyNjU0OTc5:0705733****\\",\\n    \\"AccessKeyId\\": \\"STS.xxx\\",\\n    \\"AccessKeySecret\\": \\"xxx\\",\\n    \\"SecurityToken\\": \\"xxx\\"\\n  },\\n  \\"AvailableResources\\": [\\n    {\\n      \\"RegionId\\": \\"oss-cn-hangzhou\\",\\n      \\"RepositoryName\\": \\"computenest-artifacts-draft-cn-hangzhou\\",\\n      \\"Path\\": \\"\\\\\\"/xxx/\\\\\\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '服务商获取上传部署物所需的访问凭证',
    ),
    'CreateArtifact' => 
    array (
      'summary' => '创建部署物。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '131218',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest4Y9BYP',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ArtifactId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'artifact-eea08d1e2d3a43aexxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ArtifactType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物类型。可能的值：

- EcsImage：ECS镜像部署物。

- AcrImage：容器镜像部署物。

- File：Oss文件部署物。

- Script：脚本部署物。',
            'type' => 'string',
            'required' => true,
            'example' => 'EcsImage',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'Redhat8_5镜像',
          ),
        ),
        3 => 
        array (
          'name' => 'VersionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物版本名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'v1',
          ),
        ),
        4 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'Redhat8_0镜像',
          ),
        ),
        5 => 
        array (
          'name' => 'ArtifactProperty',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '部署物属性。',
            'type' => 'object',
            'properties' => 
            array (
              'Url' => 
              array (
                'description' => '文件部署物的URL。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://service-info-private.oss-cn-hangzhou.aliyuncs.com/1309208528xxxxxx/template/2e1ce8fc-xxxx-481c-9e8e-789ba9db487d.json',
              ),
              'FileScriptMetadata' => 
              array (
                'description' => '文件脚本元数据。',
                'type' => 'string',
                'required' => false,
                'example' => '{\\"WorkDir\\":\\"/root\\",\\"CommandType\\":\\"RunShellScript\\",\\"Platform\\":\\"Linux\\",\\"Script\\":\\"echo hello\\"}',
              ),
              'RegionId' => 
              array (
                'description' => '镜像地域。


>该参数仅部署物为镜像部署物时可设置。',
                'type' => 'string',
                'required' => false,
                'example' => 'cn-hangzhou',
              ),
              'ImageId' => 
              array (
                'description' => '镜像ID。

> 该参数仅部署物为镜像部署物时可设置。',
                'type' => 'string',
                'required' => false,
                'example' => 'm-0xij191j9cuev6xxxxxx',
              ),
              'CommodityCode' => 
              array (
                'description' => '云市场商品code。

> 该参数仅部署物为镜像部署物时可设置。',
                'type' => 'string',
                'required' => false,
                'example' => 'cmjj00xxxx',
              ),
              'CommodityVersion' => 
              array (
                'description' => '云市场商品版本。

> 该参数仅部署物为镜像部署物时可设置。',
                'type' => 'string',
                'required' => false,
                'example' => 'V1.0',
              ),
              'ScriptMetadata' => 
              array (
                'description' => '脚本部署物的脚本内容。

> 该参数仅部署物为脚本部署物时可设置。',
                'type' => 'string',
                'required' => false,
                'example' => '{"ScriptMetadata":"{\\"CommandType\\":\\"RunShellScript\\",\\"Platform\\":\\"Linux\\",\\"Script\\":\\"ls\\"}"}',
              ),
              'RepoName' => 
              array (
                'description' => '指定镜像仓库名称。
> 该参数仅部署物为容器镜像部署物和helm部署物时可设置。',
                'type' => 'string',
                'required' => false,
                'example' => 'wordpress',
              ),
              'RepoId' => 
              array (
                'description' => '镜像仓库ID。
> 该参数仅部署物为容器镜像部署物和helm部署物时可设置。',
                'type' => 'string',
                'required' => false,
                'example' => 'crr-d8o1nponyc2t1gcg',
              ),
              'Tag' => 
              array (
                'description' => '镜像仓库对应的版本Tag。
> 该参数仅部署物为容器镜像部署物和helm部署物时可设置。',
                'type' => 'string',
                'required' => false,
                'example' => 'v1',
              ),
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'SupportRegionIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '支持地域。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '支持地域。',
              'type' => 'string',
              'required' => false,
              'example' => 'cn-hangzhou',
            ),
            'required' => false,
            'maxItems' => 30,
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzkt5buxxxxxx',
          ),
        ),
        8 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户自定义标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户自定义标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'key1',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value1',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX',
              ),
              'ArtifactId' => 
              array (
                'description' => '部署物ID。',
                'type' => 'string',
                'example' => 'artifact-eea08d1e2d3a43aexxxx',
              ),
              'ArtifactType' => 
              array (
                'description' => '部署物类型。',
                'type' => 'string',
                'example' => 'EcsImage',
              ),
              'Name' => 
              array (
                'description' => '部署物名称。',
                'type' => 'string',
                'example' => 'Redhat8_5镜像',
              ),
              'VersionName' => 
              array (
                'description' => '部署物名称。',
                'type' => 'string',
                'example' => 'v1',
              ),
              'ArtifactVersion' => 
              array (
                'description' => '部署物版本。',
                'type' => 'string',
                'example' => '2',
              ),
              'Description' => 
              array (
                'description' => '部署物描述。',
                'type' => 'string',
                'example' => 'Redhat8_0镜像',
              ),
              'GmtModified' => 
              array (
                'description' => '修改时间。',
                'type' => 'string',
                'example' => '2022-11-11T12:00:00Z',
              ),
              'Status' => 
              array (
                'description' => '状态。',
                'type' => 'string',
                'example' => 'Created',
              ),
              'MaxVersion' => 
              array (
                'description' => '部署物的最新版本。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'ArtifactProperty' => 
              array (
                'description' => '部署物属性。',
                'type' => 'string',
                'example' => '{\\"CommodityCode\\":\\"cmjj0005xxxx\\",\\"CommodityVersion\\":\\"V2022xxxx\\"}',
              ),
              'SupportRegionIds' => 
              array (
                'description' => '部署物分发的地域ID。',
                'type' => 'string',
                'example' => '[
			"cn-beijing",
			"cn-hangzhou",
			"cn-shanghai"
		]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX\\",\\n  \\"ArtifactId\\": \\"artifact-eea08d1e2d3a43aexxxx\\",\\n  \\"ArtifactType\\": \\"EcsImage\\",\\n  \\"Name\\": \\"Redhat8_5镜像\\",\\n  \\"VersionName\\": \\"v1\\",\\n  \\"ArtifactVersion\\": \\"2\\",\\n  \\"Description\\": \\"Redhat8_0镜像\\",\\n  \\"GmtModified\\": \\"2022-11-11T12:00:00Z\\",\\n  \\"Status\\": \\"Created\\",\\n  \\"MaxVersion\\": 1,\\n  \\"ArtifactProperty\\": \\"{\\\\\\\\\\\\\\"CommodityCode\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cmjj0005xxxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"CommodityVersion\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"V2022xxxx\\\\\\\\\\\\\\"}\\",\\n  \\"SupportRegionIds\\": \\"[\\\\n\\\\t\\\\t\\\\t\\\\\\"cn-beijing\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"cn-hangzhou\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"cn-shanghai\\\\\\"\\\\n\\\\t\\\\t]\\"\\n}","type":"json"}]',
      'title' => '创建部署物',
    ),
    'DeleteArtifact' => 
    array (
      'summary' => '当您不再需要部署物或部署物对应版本，调用DeleteArtifact删除部署物。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ArtifactId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'artifact-eea08d1e2d3a43aexxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ArtifactVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物版本。',
            'type' => 'string',
            'required' => false,
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
            'description' => '响应数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX\\"\\n}","type":"json"}]',
      'title' => '删除部署物',
    ),
    'ReleaseArtifact' => 
    array (
      'summary' => '调用ReleaseArtifact发布部署物。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ArtifactId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'artifact-9feded91880e4c78xxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3818BA7D-3F50-1A44-9FF3-04A52A59XXXX',
              ),
              'ArtifactId' => 
              array (
                'description' => '部署物ID。',
                'type' => 'string',
                'example' => 'artifact-9feded91880e4c78xxxx',
              ),
              'ArtifactType' => 
              array (
                'description' => '部署物类型。',
                'type' => 'string',
                'example' => 'File',
              ),
              'VersionName' => 
              array (
                'description' => '部署物版本名称。',
                'type' => 'string',
                'example' => 'Oss关联升级测试',
              ),
              'ArtifactVersion' => 
              array (
                'description' => '部署物版本。',
                'type' => 'string',
                'example' => 'draft',
              ),
              'Description' => 
              array (
                'description' => '部署物描述。',
                'type' => 'string',
                'example' => '部署物描述',
              ),
              'GmtModified' => 
              array (
                'description' => '修改时间。',
                'type' => 'string',
                'example' => '1650954178000',
              ),
              'Status' => 
              array (
                'description' => '部署物的状态。可能的值：

- Created：已创建。

- Scanning：扫描中。

- ScanFailed：扫描失败。

- Delivering：分发中。

- Available：可使用。

- Deleted：已删除。',
                'type' => 'string',
                'example' => 'Created',
              ),
              'ArtifactProperty' => 
              array (
                'description' => '部署物内容。',
                'type' => 'string',
                'example' => '"{\\"Url\\":\\"https://computenest-artifacts-draft-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/130920852836xxxx/cn-hangzhou/service-8072a04e5a134382xxxx/165095355xxxx/changes.txt\\",\\"ConfigurationMetadata\\":\\"{\\\\\\"WorkDir\\\\\\":\\\\\\"/root\\\\\\",\\\\\\"Platform\\\\\\":\\\\\\"Linux\\\\\\",\\\\\\"CommandType\\\\\\":\\\\\\"RunShellScript\\\\\\",\\\\\\"UpgradeScript\\\\\\":\\\\\\"cd /root\\\\\\\\ncp changes.txt cpchanges.txt\\\\\\\\nmv changes.txt mvchangge.txt\\\\\\"}\\"}"',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3818BA7D-3F50-1A44-9FF3-04A52A59XXXX\\",\\n  \\"ArtifactId\\": \\"artifact-9feded91880e4c78xxxx\\",\\n  \\"ArtifactType\\": \\"File\\",\\n  \\"VersionName\\": \\"Oss关联升级测试\\",\\n  \\"ArtifactVersion\\": \\"draft\\",\\n  \\"Description\\": \\"部署物描述\\",\\n  \\"GmtModified\\": \\"1650954178000\\",\\n  \\"Status\\": \\"Created\\",\\n  \\"ArtifactProperty\\": \\"\\\\\\"{\\\\\\\\\\\\\\"Url\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"https://computenest-artifacts-draft-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/130920852836xxxx/cn-hangzhou/service-8072a04e5a134382xxxx/165095355xxxx/changes.txt\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"ConfigurationMetadata\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"{\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"WorkDir\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"/root\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\",\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"Platform\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"Linux\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\",\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"CommandType\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"RunShellScript\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\",\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"UpgradeScript\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\":\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"cd /root\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ncp changes.txt cpchanges.txt\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\nmv changes.txt mvchangge.txt\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"}\\\\\\\\\\\\\\"}\\\\\\"\\"\\n}","type":"json"}]',
      'title' => '发布部署物',
    ),
    'ListArtifacts' => 
    array (
      'summary' => '调用ListArtifacts查询部署物列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'list',
        'abilityTreeCode' => '132194',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest4Y9BYP',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
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
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAc3HCuYhJi/wvpk4xOr0VLbfVwapgMwCN1wYzPVzLbItEdB0uWSY7AGnM3qCgm/YnjuEfwSnMwiMkcUoI0hRQzE=',
          ),
        ),
        2 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '过滤器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '过滤器。',
              'type' => 'object',
              'properties' => 
              array (
                'Name' => 
                array (
                  'description' => '过滤器名称。可选择一个或多个名称进行查询。取值范围：

- *Name*：按部署物名称进行模糊查询。

- ArtifactId：部署物ID。

- ArtifactType：部署物类型。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ArtifactType',
                ),
                'Values' => 
                array (
                  'description' => '过滤器值列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '过滤器值列表。N取值范围为：1~10。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'value1',
                  ),
                  'required' => false,
                  'maxItems' => 20,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek25yfxxxxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
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
                  'required' => false,
                  'example' => 'key1',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value1',
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
            'description' => '响应数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '46577928-3162-15A6-9084-69820EB9xxxx',
              ),
              'NextToken' => 
              array (
                'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                'type' => 'string',
                'example' => 'AAAAAc3HCuYhJi/wvpk4xOr0VLbfVwapgMwCN1wYzPVzLbItEdB0uWSY7AGnM3qCgm/YnjuEfwSnMwiMkcUoI0hRQzE=',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '符合条件的记录总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Artifacts' => 
              array (
                'description' => '部署物列表信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '部署物列表信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ArtifactId' => 
                    array (
                      'description' => '部署物ID。',
                      'type' => 'string',
                      'example' => 'artifact-eea08d1e2d3a43aexxxx',
                    ),
                    'ArtifactType' => 
                    array (
                      'description' => '部署物类型。',
                      'type' => 'string',
                      'example' => 'EcsImage',
                    ),
                    'Name' => 
                    array (
                      'description' => '部署物名称。',
                      'type' => 'string',
                      'example' => 'Redhat8_5镜像',
                    ),
                    'MaxVersion' => 
                    array (
                      'description' => '最新版本。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'Description' => 
                    array (
                      'description' => '部署物描述。',
                      'type' => 'string',
                      'example' => 'Redhat8_0镜像',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'string',
                      'example' => '2022-10-20T02:19:55Z',
                    ),
                    'Status' => 
                    array (
                      'description' => '部署物的状态。可能的值：

- Created：已创建。

- Scanning：扫描中。

- ScanFailed：扫描失败。

- Delivering：分发中。

- Available：可使用。

- Deleted：已删除。',
                      'type' => 'string',
                      'example' => 'Created',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-aek25rexxxxxxxx',
                    ),
                    'Tags' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '标签值。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'key1',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'value1',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46577928-3162-15A6-9084-69820EB9xxxx\\",\\n  \\"NextToken\\": \\"AAAAAc3HCuYhJi/wvpk4xOr0VLbfVwapgMwCN1wYzPVzLbItEdB0uWSY7AGnM3qCgm/YnjuEfwSnMwiMkcUoI0hRQzE=\\",\\n  \\"MaxResults\\": 20,\\n  \\"TotalCount\\": 2,\\n  \\"Artifacts\\": [\\n    {\\n      \\"ArtifactId\\": \\"artifact-eea08d1e2d3a43aexxxx\\",\\n      \\"ArtifactType\\": \\"EcsImage\\",\\n      \\"Name\\": \\"Redhat8_5镜像\\",\\n      \\"MaxVersion\\": \\"2\\",\\n      \\"Description\\": \\"Redhat8_0镜像\\",\\n      \\"GmtModified\\": \\"2022-10-20T02:19:55Z\\",\\n      \\"Status\\": \\"Created\\",\\n      \\"ResourceGroupId\\": \\"rg-aek25rexxxxxxxx\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"key1\\",\\n          \\"Value\\": \\"value1\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询部署物列表',
    ),
    'GetArtifact' => 
    array (
      'summary' => '调用GetArtifact查询部署物详情。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '132197',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest4Y9BYP',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ArtifactId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'artifact-eea08d1e2d3a43aexxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'ArtifactVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物版本。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'ArtifactName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'gpu-test',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '响应数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => 'B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX',
              ),
              'ArtifactId' => 
              array (
                'description' => '部署物ID。',
                'type' => 'string',
                'example' => 'artifact-eea08d1e2d3a43aexxxx',
              ),
              'ArtifactType' => 
              array (
                'description' => '部署物类型。',
                'type' => 'string',
                'example' => 'EcsImage',
              ),
              'Name' => 
              array (
                'description' => '部署物名称。',
                'type' => 'string',
                'example' => 'Redhat8_5镜像',
              ),
              'VersionName' => 
              array (
                'description' => '部署物版本名称。',
                'type' => 'string',
                'example' => 'v1',
              ),
              'ArtifactVersion' => 
              array (
                'description' => '部署物版本。',
                'type' => 'string',
                'example' => '2',
              ),
              'Description' => 
              array (
                'description' => '部署物描述。',
                'type' => 'string',
                'example' => 'Redhat8_0镜像',
              ),
              'GmtModified' => 
              array (
                'description' => '修改时间。',
                'type' => 'string',
                'example' => '2022-10-20T02:19:55Z',
              ),
              'Status' => 
              array (
                'description' => '状态。',
                'type' => 'string',
                'example' => 'Available',
              ),
              'MaxVersion' => 
              array (
                'description' => '最新版本。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'ArtifactProperty' => 
              array (
                'description' => '部署物属性。',
                'type' => 'string',
                'example' => '{\\"CommodityCode\\":\\"cmjj0005xxxx\\",\\"CommodityVersion\\":\\"V2022xxxx\\"}',
              ),
              'SupportRegionIds' => 
              array (
                'description' => '部署物支持的地域ID。',
                'type' => 'string',
                'example' => '["cn-hangzhou","cn-beijing"]',
              ),
              'Progress' => 
              array (
                'description' => '部署物分发进度。',
                'type' => 'string',
                'example' => '100',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-aekzkt5buxxxxxx',
              ),
              'Tags' => 
              array (
                'description' => '部署物标签。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '部署物标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '部署物标签键。',
                      'type' => 'string',
                      'example' => 'key1',
                    ),
                    'Value' => 
                    array (
                      'description' => '部署物标签值。',
                      'type' => 'string',
                      'example' => 'value1',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX\\",\\n  \\"ArtifactId\\": \\"artifact-eea08d1e2d3a43aexxxx\\",\\n  \\"ArtifactType\\": \\"EcsImage\\",\\n  \\"Name\\": \\"Redhat8_5镜像\\",\\n  \\"VersionName\\": \\"v1\\",\\n  \\"ArtifactVersion\\": \\"2\\",\\n  \\"Description\\": \\"Redhat8_0镜像\\",\\n  \\"GmtModified\\": \\"2022-10-20T02:19:55Z\\",\\n  \\"Status\\": \\"Available\\",\\n  \\"MaxVersion\\": 2,\\n  \\"ArtifactProperty\\": \\"{\\\\\\\\\\\\\\"CommodityCode\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cmjj0005xxxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"CommodityVersion\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"V2022xxxx\\\\\\\\\\\\\\"}\\",\\n  \\"SupportRegionIds\\": \\"[\\\\\\"cn-hangzhou\\\\\\",\\\\\\"cn-beijing\\\\\\"]\\",\\n  \\"Progress\\": \\"100\\",\\n  \\"ResourceGroupId\\": \\"rg-aekzkt5buxxxxxx\\",\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"key1\\",\\n      \\"Value\\": \\"value1\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询部署物详情',
    ),
    'ListArtifactVersions' => 
    array (
      'summary' => '调用ListArtifactVersions查询部署物版本信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
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
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAc3HCuYhJi/wvpk4xOr0VLbfVwapgMwCN1wYzPVzLbItEdB0uWSY7AGnM3qCgm/YnjuEfwSnMwiMkcUoI0hRQzE=',
          ),
        ),
        2 => 
        array (
          'name' => 'ArtifactId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'artifact-eea08d1e2d3a43aexxxx',
          ),
        ),
      ),
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
                'example' => '46577928-3162-15A6-9084-69820EB9xxxx',
              ),
              'NextToken' => 
              array (
                'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                'type' => 'string',
                'example' => 'AAAAAc3HCuYhJi/wvpk4xOr0VLbfVwapgMwCN1wYzPVzLbItEdB0uWSY7AGnM3qCgm/YnjuEfwSnMwiMkcUoI0hRQzE=',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '符合条件的记录总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'Artifacts' => 
              array (
                'description' => '部署物版本信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '部署物版本信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ArtifactId' => 
                    array (
                      'description' => '部署物ID。',
                      'type' => 'string',
                      'example' => 'artifact-eea08d1e2d3a43aexxxx',
                    ),
                    'ArtifactType' => 
                    array (
                      'description' => '部署物类型。',
                      'type' => 'string',
                      'example' => 'EcsImage',
                    ),
                    'VersionName' => 
                    array (
                      'description' => '部署物版本名称。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                    'ArtifactVersion' => 
                    array (
                      'description' => '部署物版本。',
                      'type' => 'string',
                      'example' => '2',
                    ),
                    'Status' => 
                    array (
                      'description' => '部署物的状态。可能的值：

- Created：已创建。

- Scanning：扫描中。

- ScanFailed：扫描失败。

- Delivering：分发中。

- Available：可使用。

- Deleted：已删除。',
                      'type' => 'string',
                      'example' => 'Available',
                    ),
                    'ArtifactProperty' => 
                    array (
                      'description' => '部署物属性。',
                      'type' => 'string',
                      'example' => '{\\"CommodityCode\\":\\"cmjj0005xxxx\\",\\"CommodityVersion\\":\\"V2022xxxx\\"}',
                    ),
                    'SupportRegionIds' => 
                    array (
                      'description' => '部署物分发的地域ID。',
                      'type' => 'string',
                      'example' => '[
					"cn-beijing",
					"cn-hangzhou",
					"cn-shanghai"
				]',
                    ),
                    'GmtModified' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'string',
                      'example' => '2022-10-20T02:19:55Z',
                    ),
                    'Progress' => 
                    array (
                      'description' => '部署物分发进度。',
                      'type' => 'string',
                      'example' => '100',
                    ),
                    'GmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2022-10-20T02:19:53Z',
                    ),
                    'ImageDelivery' => 
                    array (
                      'description' => '镜像分发结果。',
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'string',
                        'example' => '{
					"cn-beijing":"m-2ze9swf380tsad9wxxxx",
					"cn-shanghai":"m-uf6d2kp5yb3fuq6ixxxx",
					"cn-hangzhou":"m-bp1co0b2dkon58moxxxx"
				}',
                        'description' => '镜像分发结果。',
                      ),
                    ),
                    'SecurityAuditResult' => 
                    array (
                      'description' => '安全扫描结果。可能的值为：

- Normal：正常状态（无风险）。

- AtRisk：存在安全风险。

- Processing：进行中。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'ResultFile' => 
                    array (
                      'description' => '安全扫描结果文件。',
                      'type' => 'string',
                      'example' => '仅当安全扫描结果的返回值为AtRisk时才会展示。',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46577928-3162-15A6-9084-69820EB9xxxx\\",\\n  \\"NextToken\\": \\"AAAAAc3HCuYhJi/wvpk4xOr0VLbfVwapgMwCN1wYzPVzLbItEdB0uWSY7AGnM3qCgm/YnjuEfwSnMwiMkcUoI0hRQzE=\\",\\n  \\"MaxResults\\": 20,\\n  \\"TotalCount\\": 2,\\n  \\"Artifacts\\": [\\n    {\\n      \\"ArtifactId\\": \\"artifact-eea08d1e2d3a43aexxxx\\",\\n      \\"ArtifactType\\": \\"EcsImage\\",\\n      \\"VersionName\\": \\"v1\\",\\n      \\"ArtifactVersion\\": \\"2\\",\\n      \\"Status\\": \\"Available\\",\\n      \\"ArtifactProperty\\": \\"{\\\\\\\\\\\\\\"CommodityCode\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cmjj0005xxxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"CommodityVersion\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"V2022xxxx\\\\\\\\\\\\\\"}\\",\\n      \\"SupportRegionIds\\": \\"[\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"cn-beijing\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"cn-hangzhou\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"cn-shanghai\\\\\\"\\\\n\\\\t\\\\t\\\\t\\\\t]\\",\\n      \\"GmtModified\\": \\"2022-10-20T02:19:55Z\\",\\n      \\"Progress\\": \\"100\\",\\n      \\"GmtCreate\\": \\"2022-10-20T02:19:53Z\\",\\n      \\"ImageDelivery\\": {\\n        \\"key\\": \\"{\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"cn-beijing\\\\\\":\\\\\\"m-2ze9swf380tsad9wxxxx\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"cn-shanghai\\\\\\":\\\\\\"m-uf6d2kp5yb3fuq6ixxxx\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\t\\\\t\\\\\\"cn-hangzhou\\\\\\":\\\\\\"m-bp1co0b2dkon58moxxxx\\\\\\"\\\\n\\\\t\\\\t\\\\t\\\\t}\\"\\n      },\\n      \\"SecurityAuditResult\\": \\"Normal\\",\\n      \\"ResultFile\\": \\"仅当安全扫描结果的返回值为AtRisk时才会展示。\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询部署物版本信息',
    ),
    'UpdateArtifact' => 
    array (
      'summary' => '调用UpdateArtifact更新部署物。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ArtifactId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'artifact-eea08d1e2d3a43aexxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'VersionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物版本名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'v1',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'Redhat8_0镜像',
          ),
        ),
        3 => 
        array (
          'name' => 'ArtifactProperty',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '部署物属性。',
            'type' => 'object',
            'properties' => 
            array (
              'Url' => 
              array (
                'description' => '文件部署物URL。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://service-info-private.oss-cn-hangzhou.aliyuncs.com/1309208528xxxxxx/template/2e1ce8fc-xxxx-481c-9e8e-789ba9db487d.json',
              ),
              'RegionId' => 
              array (
                'description' => '镜像地域。

> 该参数仅部署物为镜像部署物时可设置。',
                'type' => 'string',
                'required' => false,
                'example' => 'cn-hangzhou',
              ),
              'ImageId' => 
              array (
                'description' => '镜像ID。

> 该参数仅部署物为镜像部署物时可设置。',
                'type' => 'string',
                'required' => false,
                'example' => 'm-0xij191j9cuev6ucxxxx',
              ),
              'CommodityCode' => 
              array (
                'description' => '云市场商品code。

> 该参数仅部署物为镜像部署物时可设置。',
                'type' => 'string',
                'required' => false,
                'example' => 'cmjj00xxxx',
              ),
              'CommodityVersion' => 
              array (
                'description' => '云市场商品版本。

> 该参数仅部署物为镜像部署物时可设置。',
                'type' => 'string',
                'required' => false,
                'example' => 'V1.0',
              ),
              'FileScriptMetadata' => 
              array (
                'description' => 'OSS文件元数据。

> 该参数仅部署物为文件部署物时可设置。',
                'type' => 'string',
                'required' => false,
                'example' => '{\\"WorkDir\\":\\"/root\\",\\"CommandType\\":\\"RunShellScript\\",\\"Platform\\":\\"Linux\\",\\"Script\\":\\"echo hello\\"}',
              ),
              'ScriptMetadata' => 
              array (
                'description' => '脚本部署物脚本内容。

> 该参数仅部署物为脚本部署物时可设置。',
                'type' => 'string',
                'required' => false,
                'example' => '{"ScriptMetadata":"{\\"CommandType\\":\\"RunShellScript\\",\\"Platform\\":\\"Linux\\",\\"Script\\":\\"ls\\"}"}',
              ),
            ),
            'required' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'SupportRegionIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '部署物支持的地域ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '部署物支持的地域ID。',
              'type' => 'string',
              'required' => false,
              'example' => '["cn-hangzhou","cn-beijing"]',
            ),
            'required' => false,
            'maxItems' => 30,
          ),
        ),
      ),
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
                'example' => 'B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX',
              ),
              'ArtifactId' => 
              array (
                'description' => '部署物ID。',
                'type' => 'string',
                'example' => 'artifact-eea08d1e2d3a43aexxxx',
              ),
              'ArtifactType' => 
              array (
                'description' => '部署物类型。',
                'type' => 'string',
                'example' => 'EcsImage',
              ),
              'VersionName' => 
              array (
                'description' => '部署物名称。',
                'type' => 'string',
                'example' => 'v1',
              ),
              'ArtifactVersion' => 
              array (
                'description' => '部署物版本。',
                'type' => 'string',
                'example' => '2',
              ),
              'Description' => 
              array (
                'description' => '部署物描述。',
                'type' => 'string',
                'example' => 'Redhat8_0镜像',
              ),
              'GmtModified' => 
              array (
                'description' => '修改时间。',
                'type' => 'string',
                'example' => '2022-10-20T02:19:55Z',
              ),
              'Status' => 
              array (
                'description' => '部署物的状态。可能的值：

- Created：已创建。

- Scanning：扫描中。

- ScanFailed：扫描失败。

- Delivering：分发中。

- Available：可使用。

- Deleted：已删除。',
                'type' => 'string',
                'example' => 'Available',
              ),
              'ArtifactProperty' => 
              array (
                'description' => '部署物属性。',
                'type' => 'string',
                'example' => '{\\"CommodityCode\\":\\"cmjj0005xxxx\\",\\"CommodityVersion\\":\\"V2022xxxx\\"}',
              ),
              'SupportRegionIds' => 
              array (
                'description' => '部署物支持的地域ID。',
                'type' => 'string',
                'example' => '[
			"cn-beijing",
			"cn-hangzhou",
			"cn-shanghai"
		]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX\\",\\n  \\"ArtifactId\\": \\"artifact-eea08d1e2d3a43aexxxx\\",\\n  \\"ArtifactType\\": \\"EcsImage\\",\\n  \\"VersionName\\": \\"v1\\",\\n  \\"ArtifactVersion\\": \\"2\\",\\n  \\"Description\\": \\"Redhat8_0镜像\\",\\n  \\"GmtModified\\": \\"2022-10-20T02:19:55Z\\",\\n  \\"Status\\": \\"Available\\",\\n  \\"ArtifactProperty\\": \\"{\\\\\\\\\\\\\\"CommodityCode\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"cmjj0005xxxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"CommodityVersion\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"V2022xxxx\\\\\\\\\\\\\\"}\\",\\n  \\"SupportRegionIds\\": \\"[\\\\n\\\\t\\\\t\\\\t\\\\\\"cn-beijing\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"cn-hangzhou\\\\\\",\\\\n\\\\t\\\\t\\\\t\\\\\\"cn-shanghai\\\\\\"\\\\n\\\\t\\\\t]\\"\\n}","type":"json"}]',
      'title' => '更新部署物',
    ),
    'CreateService' => 
    array (
      'summary' => '创建新的服务。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '36949',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest2G0818',
          1 => 'FEATUREcomputenest1Z49ZW',
          2 => 'FEATUREcomputenest21Y74A',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '10CM943JP0EN9D51H',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'service-0e6fca6a51a544xxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'DeployType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署类型。可能值：

- ros：通过ROS部署。

- terraform：通过Terraform部署。

- ack：通过ACK部署。

- spi：调用SPI部署。

- operation：代运维服务部署。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ros',
          ),
        ),
        4 => 
        array (
          'name' => 'DeployMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储服务部署配置的信息。存储的信息与部署类型有关，不同的部署类型存储的数据格式不一样，因此使用JSON String格式进行数据存储。 ',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"TemplateConfigs\\":[{\\"Name\\":\\"模板1\\",\\"Url\\":\\"oss://computenest-test/template" 
            + ".json?RegionId=cn-beijing\\",\\"PredefinedParameters\\":[{\\"Name\\":\\"低配版\\"," 
            + "\\"Parameters\\":{\\"InstanceType\\":\\"ecs.g5.large\\",\\"DataDiskSize\\":40}},{\\"Name\\":\\"高配版\\"," 
            + "\\"Parameters\\":{\\"InstanceType\\":\\"ecs.g5.large\\",\\"DataDiskSize\\":200}}]}]}',
          ),
        ),
        5 => 
        array (
          'name' => 'ServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务类型。可能的值：

- private：部署在用户账户下的服务实例。

- managed：托管在服务商账户下的服务实例。

- operation：代运维服务实例

- poc：试用服务实例。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'private',
            'default' => 'private',
          ),
        ),
        6 => 
        array (
          'name' => 'ServiceInfo',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '服务详情。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务详情。',
              'type' => 'object',
              'properties' => 
              array (
                'Locale' => 
                array (
                  'description' => '服务语言。可能的值：

- zh-CN：中文。

- en-US：英文。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'zh-CN',
                ),
                'ShortDescription' => 
                array (
                  'description' => '服务概述。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'TiDB是A公司自主设计、研发的开源分布式关系型数据库。',
                ),
                'Image' => 
                array (
                  'description' => '服务图标地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http://img.tidb.oss.url',
                ),
                'Name' => 
                array (
                  'description' => '服务名称。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'TiDB Database',
                ),
                'LongDescriptionUrl' => 
                array (
                  'description' => '服务详细描述',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http://description.tidb.oss.url
',
                ),
                'Agreements' => 
                array (
                  'description' => '服务的协议文档信息。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '服务的协议文档信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Name' => 
                      array (
                        'description' => '协议名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Name',
                      ),
                      'Url' => 
                      array (
                        'description' => '协议链接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://aliyun.com/xxxxxxxx.html',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 10,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        7 => 
        array (
          'name' => 'IsSupportOperated',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否代运维，默认为：false。可能的值：

- true：开启。

- false：关闭。
> 当**ServiceType**为**private**时需要填入该值。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'PolicyNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '策略名称。单个策略名称长度不超过128个字符，多个名称使用英文逗号（,）分隔。暂时只支持代运维相关参数策略。',
            'type' => 'string',
            'required' => false,
            'example' => 'policyName1, policyName2',
          ),
        ),
        9 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代运维时间。单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        10 => 
        array (
          'name' => 'AlarmMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务报警配置。
> 当**PolicyNames**中配置了报警权限策略后，该配置才会生效。',
            'type' => 'string',
            'required' => false,
            'example' => '{
  "TemplateUrl": "http://template.file.url",
  // 应用分组级别告警元数据
  "ApplicationGroups": [
    {
      "Name": "applicationGroup1",
      "TemplateUrl": "url1"
    },
    {
      "Name": "applicationGroup2",
      "TemplateUrl": "url2"
    }
  ]
}',
          ),
        ),
        11 => 
        array (
          'name' => 'ShareType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '共享类型。可能的值：

- Public：公开的，正式部署和试用部署都不受限。

- Restricted：受限的，正式部署和试用部署都受限。

- OnlyFormalRestricted：仅正式部署受限。

- OnlyTrailRestricted：仅试用部署受限。

- Hidden：隐藏的，不可见且不可申请部署权限。',
            'type' => 'string',
            'required' => false,
            'example' => 'Public',
          ),
        ),
        12 => 
        array (
          'name' => 'ApprovalType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务使用申请审批类型。可能的值：

- Manual：收到审批。

- AutoPass：自动通过。',
            'type' => 'string',
            'required' => false,
            'example' => 'Manual',
          ),
        ),
        13 => 
        array (
          'name' => 'VersionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'Draft',
          ),
        ),
        14 => 
        array (
          'name' => 'UpgradeMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '升级元数据。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"Description\\":\\"xxx\\",\\"SupportRollback\\":true,\\"SupportUpgradeFromVersions\\":[],\\"UpgradeComponents\\":[\\"Configuration\\"]}',
          ),
        ),
        15 => 
        array (
          'name' => 'TrialDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '试用时长。单位：天。试用时长的最长天数不超过30天。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '7',
          ),
        ),
        16 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户自定义标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户自定义标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Usage',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Web',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
          ),
        ),
        17 => 
        array (
          'name' => 'TenantType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户类型。可能的值：

- SingleTenant：单租户。

- MultiTenant：多租户。',
            'type' => 'string',
            'required' => false,
            'example' => 'SingleTenant',
          ),
        ),
        18 => 
        array (
          'name' => 'LicenseMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '许可证元数据。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"PayType\\":\\"CustomFixTime\\",\\"DefaultLicenseDays\\":7,\\"CustomMetadata\\":[{\\"TemplateName\\":\\"模板1\\",\\"SpecificationName\\":\\"bandwith-0\\",\\"CustomData\\":\\"1\\"}]}',
          ),
        ),
        19 => 
        array (
          'name' => 'OperationMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代运维配置。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"PrometheusConfigMap\\":{\\"New_Vpc_Ack_And_Jumpserver\\":{}}}',
          ),
        ),
        20 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aek25refu7r3opq',
          ),
        ),
        21 => 
        array (
          'name' => 'LogMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用日志配置。',
            'type' => 'string',
            'required' => false,
            'example' => '{
  "Logstores": [
    {
    	"LogstoreName": "access-log",
  		"LogPath": "/home/admin/app/logs", # 对容器不需要，在YAML中配置
  		"FilePattern": "access.log*" # 对容器不需要，在YAML中配置
    }
  ]
}',
          ),
        ),
        22 => 
        array (
          'name' => 'SourceServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分销源服务ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'service-70a3b15bb62643xxxxxx',
          ),
        ),
        23 => 
        array (
          'name' => 'SourceServiceVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分销源服务版本。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        24 => 
        array (
          'name' => 'Resellable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持分销。可能的值：

- false：不支持。

- true：支持。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        25 => 
        array (
          'name' => 'BuildParameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '构建服务参数。',
            'type' => 'string',
            'required' => false,
            'example' => '{ "ServiceTemplateId": "st-xxxxx"}',
          ),
        ),
      ),
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
                'description' => '服务状态。',
                'type' => 'string',
                'example' => 'Created',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4DB0F536-B3BE-4F0D-BD29-E83FB56D550C',
              ),
              'Version' => 
              array (
                'description' => '服务版本。',
                'type' => 'string',
                'example' => 'draft',
              ),
              'ServiceId' => 
              array (
                'description' => '服务ID。',
                'type' => 'string',
                'example' => 'service-0e6fca6a51a544xxxxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Created\\",\\n  \\"RequestId\\": \\"4DB0F536-B3BE-4F0D-BD29-E83FB56D550C\\",\\n  \\"Version\\": \\"draft\\",\\n  \\"ServiceId\\": \\"service-0e6fca6a51a544xxxxxx\\"\\n}","type":"json"}]',
      'title' => '创建服务',
    ),
    'RegisterService' => 
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
        'abilityTreeCode' => '36948',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenestB2MIVU',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'service-f7024a22ea5149xxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '10CM943JP0EN9D51H',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RegistrationId' => 
              array (
                'description' => '注册ID。',
                'type' => 'string',
                'example' => 'sr-72dd5071e90c40xxxxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A361BA9E-2713-52C8-AFFC-C26E5180456E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RegistrationId\\": \\"sr-72dd5071e90c40xxxxxx\\",\\n  \\"RequestId\\": \\"A361BA9E-2713-52C8-AFFC-C26E5180456E\\"\\n}","type":"json"}]',
      'title' => '注册服务',
      'summary' => '注册部署物。',
    ),
    'UpdateService' => 
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
        'abilityTreeCode' => '36950',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest18JMDW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'DeployType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署类型。可能值：

- ros：通过ROS部署。

- terraform：通过Terraform部署。

- spi：调用SPI部署。

- operation：代运维服务部署。

- container：通过容器部署。

- pkg：包服务。',
            'type' => 'string',
            'required' => false,
            'example' => 'ros',
          ),
        ),
        2 => 
        array (
          'name' => 'DeployMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '存储服务部署配置的信息。存储的信息与部署类型有关，不同的部署类型存储的数据格式不一样，因此使用JSON String格式进行数据存储。 ',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"EstimateTime\\":null,\\"SupplierDeployMetadata\\":{\\"DeployTimeout\\":7200},\\"EnableVnc\\":false}',
          ),
        ),
        3 => 
        array (
          'name' => 'AlarmMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务报警配置。
> 当**PolicyNames**中配置了报警权限策略后，该配置才会生效。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"CmsTemplateId\\":1162921,\\"TemplateUrl\\":\\"https://service-info-private.oss-cn-hangzhou.aliyuncs.com/1760465342xxxxxx/template/c072ef50-6c03-4d9c-8f0e-d1c440xxxxxx.json\\"}',
          ),
        ),
        4 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '788E7CP0EN9D51P',
          ),
        ),
        5 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'service-1dda29c3eca648xxxxxx',
          ),
        ),
        6 => 
        array (
          'name' => 'ServiceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务类型。可能的值：

- private：部署在用户账户下的服务实例。

- managed：托管在服务商账户下的服务实例。

- operation：代运维服务实例

- poc：试用服务实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'private',
          ),
        ),
        7 => 
        array (
          'name' => 'ServiceInfo',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '服务详情。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务详情。',
              'type' => 'object',
              'properties' => 
              array (
                'Locale' => 
                array (
                  'description' => '服务语言。可能的值：

- zh-CN：中文。

- en-US：英文。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'zh-CN',
                ),
                'ShortDescription' => 
                array (
                  'description' => '服务概述。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'B是A公司自主设计并研发的开源分布式的关系型数据库',
                ),
                'Image' => 
                array (
                  'description' => '服务图标地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http://img.tidb.oss.url',
                ),
                'Name' => 
                array (
                  'description' => '服务名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'B数据库',
                ),
                'LongDescriptionUrl' => 
                array (
                  'description' => '服务详细描述的地址。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http://description.tidb.oss.url
',
                ),
                'Agreements' => 
                array (
                  'description' => '服务的协议文档信息。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '服务的协议文档信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Name' => 
                      array (
                        'description' => '协议文档名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Name',
                      ),
                      'Url' => 
                      array (
                        'description' => '协议链接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://aliyun.com/xxxxxxxx.html',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                  'maxItems' => 10,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        8 => 
        array (
          'name' => 'IsSupportOperated',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否代运维，默认为：false。可能的值：

- true：开启。

- false：关闭。
> 当**ServiceType**为**private**时需要填入该值。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'PolicyNames',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '策略名称。单个策略名称长度不超过128个字符，多个名称使用英文逗号（,）分隔。暂时只支持代运维相关参数策略。',
            'type' => 'string',
            'required' => false,
            'example' => 'policyName1, policyName2',
          ),
        ),
        10 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代运维时间。单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '259200',
          ),
        ),
        11 => 
        array (
          'name' => 'VersionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'Draft',
          ),
        ),
        12 => 
        array (
          'name' => 'UpgradeMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '升级元数据。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"Description\\":\\"xxx\\",\\"SupportRollback\\":true,\\"SupportUpgradeFromVersions\\":[],\\"UpgradeComponents\\":[\\"Configuration\\"]}',
          ),
        ),
        13 => 
        array (
          'name' => 'TrialDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '试用时长。单位：天。试用时长的最长天数不超过30天。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '7',
          ),
        ),
        14 => 
        array (
          'name' => 'ServiceVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务版本。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        15 => 
        array (
          'name' => 'TenantType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '租户类型。可能的值：

- SingleTenant：单租户。

- MultiTenant：多租户。',
            'type' => 'string',
            'required' => false,
            'example' => 'SingleTenant',
          ),
        ),
        16 => 
        array (
          'name' => 'LicenseMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '许可证元数据。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"PayType\\":\\"CustomFixTime\\",\\"DefaultLicenseDays\\":7,\\"CustomMetadata\\":[{\\"TemplateName\\":\\"模板1\\",\\"SpecificationName\\":\\"bandwith-0\\",\\"CustomData\\":\\"1\\"}]}',
          ),
        ),
        17 => 
        array (
          'name' => 'OperationMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代运维配置。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"PrometheusConfigMap\\":{\\"Custom_Image_Ecs\\":{\\"EnablePrometheus\\":false}}}',
          ),
        ),
        18 => 
        array (
          'name' => 'LogMetadata',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用日志配置。',
            'type' => 'string',
            'required' => false,
            'example' => '{
  "Logstores": [
    {
    	"LogstoreName": "access-log",
  		"LogPath": "/home/admin/app/logs", # 对容器不需要，在YAML中配置
  		"FilePattern": "access.log*" # 对容器不需要，在YAML中配置
    }
  ]
}',
          ),
        ),
        19 => 
        array (
          'name' => 'Resellable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否支持分销。可能的值：

- false：不支持。

- true：支持。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        20 => 
        array (
          'name' => 'UpdateOption',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '更新选项。',
            'type' => 'object',
            'properties' => 
            array (
              'UpdateFrom' => 
              array (
                'description' => '更新选项。可选值：

-  CODE：代码。

- PARAMETERS：参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'PARAMETERS',
              ),
            ),
            'required' => false,
          ),
        ),
        21 => 
        array (
          'name' => 'ShareType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        22 => 
        array (
          'name' => 'ApprovalType',
          'in' => 'query',
          'schema' => 
          array (
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DF0F666F-FBBC-55C3-A368-C955DE7B4839',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DF0F666F-FBBC-55C3-A368-C955DE7B4839\\"\\n}","type":"json"}]',
      'title' => '更新服务',
      'summary' => '升级服务。',
    ),
    'UpgradeServiceInstance' => 
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
        'abilityTreeCode' => '162313',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenestQE1OA6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'si-5cbae874da0e47xxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务版本。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '10CM943JP0EN9D51H',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检，包括权限、实例状态校验等。可能的值：

- true：发送请求，不创建服务实例。

- false：发送请求，检查通过后创建服务实例。',
            'type' => 'string',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '服务实例配置参数。',
            'type' => 'object',
            'required' => false,
            'example' => '{
      "param": "value"
}',
          ),
        ),
      ),
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
                'description' => '服务实例的部署状态。可能值：

- Created：已创建

- Deploying：部署中

- DeployedFailed：部署失败

- Deployed：已部署

- Upgrading：升级中

- Deleting：删除中

- Deleted：已删除

- DeletedFailed：删除失败',
                'type' => 'string',
                'example' => 'Created',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'F224E002-AB0E-5FD9-A87E-54AEE56F6CAE',
              ),
              'ServiceInstanceId' => 
              array (
                'description' => '服务实例ID。',
                'type' => 'string',
                'example' => 'si-5cbae874da0e47xxxxxx',
              ),
              'UpgradeRequiredParameters' => 
              array (
                'description' => '升级需要的参数。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '升级需要的参数。',
                  'type' => 'string',
                  'example' => '[\'EcsInstanceType\', \'InstancePassword\']',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Created\\",\\n  \\"RequestId\\": \\"F224E002-AB0E-5FD9-A87E-54AEE56F6CAE\\",\\n  \\"ServiceInstanceId\\": \\"si-5cbae874da0e47xxxxxx\\",\\n  \\"UpgradeRequiredParameters\\": [\\n    \\"[\'EcsInstanceType\', \'InstancePassword\']\\"\\n  ]\\n}","type":"json"}]',
      'title' => '升级服务实例',
      'summary' => '调用UpgradeServiceInstance升级服务实例。',
    ),
    'UpdateServiceInstanceAttribute' => 
    array (
      'summary' => '更新服务实例的属性。',
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
        'operationType' => 'update',
        'abilityTreeCode' => '142602',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest18JMDW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'si-3df88e962cdexxxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例到期时间。',
            'type' => 'string',
            'format' => 'iso8601',
            'required' => false,
            'example' => '2023-12-25T02:28:40Z',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0CB2E0A9-B4DF-5C16-86AD-C511C483144B',
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
            'errorCode' => 'NeedManualApproval',
            'errorMessage' => 'Manual approval is required for the extension request.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0CB2E0A9-B4DF-5C16-86AD-C511C483144B\\"\\n}","type":"json"}]',
      'title' => '更新服务实例属性',
    ),
    'DeleteService' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'service-0e6fca6a51a54420****',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务版本。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '10CM943JP0EN9D51H',
          ),
        ),
      ),
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
                'example' => '4DB0F536-B3BE-4F0D-BD29-E83FB56D****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4DB0F536-B3BE-4F0D-BD29-E83FB56D****\\"\\n}","type":"json"}]',
      'title' => '删除服务',
      'summary' => '删除指定服务。',
    ),
    'ListServices' => 
    array (
      'summary' => '查询当前服务信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '36944',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest2G0818',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'BBBAAfu+XtuBE55iRLHEYYuojI4=',
          ),
        ),
        3 => 
        array (
          'name' => 'AllVersions',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回服务的所有版本。默认值为false，对每个服务只返回默认版本。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzkt5buxxxxxx',
          ),
        ),
        5 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '过滤器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '过滤器。',
              'type' => 'object',
              'properties' => 
              array (
                'Value' => 
                array (
                  'description' => '过滤器值列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '过滤器值列表。N的取值范围：1~10。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '1',
                  ),
                  'required' => false,
                  'maxItems' => 20,
                ),
                'Name' => 
                array (
                  'description' => '过滤器名称，可选择一个或者多个名称进行查询。取值范围：

- ServiceId：服务ID。

- Name：服务名称。

- Status：服务状态。

- SupplierName：服务商名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Status',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        6 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户自定义标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户自定义标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'key1',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
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
              'NextToken' => 
              array (
                'description' => '下一个查询开始token。',
                'type' => 'string',
                'example' => 'AAAAAfu+XtuBE55iRLHEYYuojI4=',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '51945B04-6AA6-410D-93BA-236E0248B104',
              ),
              'TotalCount' => 
              array (
                'description' => '符合条件的记录总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Services' => 
              array (
                'description' => '服务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '服务状态。可能的值：

- Draft：草稿状态。

- Submitted：已提交审核。不允许修改。

- Approved：已通过审核。不允许修改，可以发布上线。

- Launching：服务上线中。

- Online：已上线。

- Offline：已下线。',
                      'type' => 'string',
                      'example' => 'Online',
                    ),
                    'DefaultVersion' => 
                    array (
                      'description' => '共享权限是否为默认版本。取值：

- false：不是默认版本。

- true：是默认版本。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'PublishTime' => 
                    array (
                      'description' => '发布时间。',
                      'type' => 'string',
                      'example' => '2021-05-21T00:00:00Z',
                    ),
                    'Version' => 
                    array (
                      'description' => '服务版本。',
                      'type' => 'string',
                      'example' => '1.0',
                    ),
                    'DeployType' => 
                    array (
                      'description' => '部署类型。可能值：

- ros：通过ROS部署。

- terraform：通过Terraform部署。

- spi：调用SPI部署。

- operation：代运维服务部署。

- container：通过容器部署。

- pkg：包服务。',
                      'type' => 'string',
                      'example' => 'ros',
                    ),
                    'ServiceId' => 
                    array (
                      'description' => '服务ID。',
                      'type' => 'string',
                      'example' => 'service-70a3b15bb62643xxxxxx',
                    ),
                    'SupplierUrl' => 
                    array (
                      'description' => '服务商地址。',
                      'type' => 'string',
                      'example' => 'http://example.com',
                    ),
                    'ServiceType' => 
                    array (
                      'description' => '服务类型。可能值：

- private：部署在用户账户下。

- managed：托管在服务商账户下。

- operation：代运维服务。',
                      'type' => 'string',
                      'example' => 'private',
                    ),
                    'SupplierName' => 
                    array (
                      'description' => '服务商名称。',
                      'type' => 'string',
                      'example' => 'A有限公司',
                    ),
                    'ServiceInfos' => 
                    array (
                      'description' => '服务信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '服务信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Locale' => 
                          array (
                            'description' => '服务配置语言。可能的值：

- zh-CN：中文。

- en-US：英文。',
                            'type' => 'string',
                            'example' => 'zh-CN',
                          ),
                          'Image' => 
                          array (
                            'description' => '服务图标地址。',
                            'type' => 'string',
                            'example' => 'http://img.tidb.oss.url',
                          ),
                          'Name' => 
                          array (
                            'description' => '服务名称。',
                            'type' => 'string',
                            'example' => 'B数据库',
                          ),
                          'ShortDescription' => 
                          array (
                            'description' => '服务概述。',
                            'type' => 'string',
                            'example' => 'B是A公司自主设计并研发的开源分布式的关系型数据库',
                          ),
                        ),
                      ),
                    ),
                    'CommodityCode' => 
                    array (
                      'description' => '云市场商品code。',
                      'type' => 'string',
                      'example' => 'cmjj00xxxx',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2021-05-20T00:00:00Z',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2021-05-21T00:00:00Z',
                    ),
                    'ShareType' => 
                    array (
                      'description' => '共享类型。可能的值：

- Public：公开的，正式部署和试用部署都不受限。

- Restricted：受限的，正式部署和试用部署都受限。

- OnlyFormalRestricted：仅正式部署受限。

- OnlyTrailRestricted：仅试用部署受限。

- Hidden：隐藏的，不可见且不可申请部署权限。',
                      'type' => 'string',
                      'example' => 'Public',
                    ),
                    'ApprovalType' => 
                    array (
                      'description' => '服务使用申请审批类型，可能的值：

- Manual：手动审批。

- AutoPass：自动通过。',
                      'type' => 'string',
                      'example' => 'AutoPass',
                    ),
                    'VersionName' => 
                    array (
                      'description' => '服务商自定义版本名称。',
                      'type' => 'string',
                      'example' => 'v2.0.0',
                    ),
                    'Tags' => 
                    array (
                      'description' => '服务标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '服务标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'key1',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'value1',
                          ),
                        ),
                      ),
                    ),
                    'ArtifactId' => 
                    array (
                      'description' => '部署物ID。',
                      'type' => 'string',
                      'example' => 'artifact-21ca53ac16a643xxxxxx',
                    ),
                    'ArtifactVersion' => 
                    array (
                      'description' => '部署物版本。',
                      'type' => 'string',
                      'example' => 'draft',
                    ),
                    'SourceImage' => 
                    array (
                      'description' => '源镜像。',
                      'type' => 'string',
                      'example' => 'centos_7',
                    ),
                    'RelationType' => 
                    array (
                      'description' => '部署物关联类型。可能的值：

- ServiceDeployment：服务部署。

- ServiceUpgrade：服务升级。',
                      'type' => 'string',
                      'example' => 'ServiceDeployment',
                    ),
                    'TrialType' => 
                    array (
                      'description' => '试用类型。可选值：

- Trial：支持试用。

- NotTrial：不支持试用。',
                      'type' => 'string',
                      'example' => 'Trial',
                    ),
                    'TenantType' => 
                    array (
                      'description' => '托管版服务的租户类型。可能的值：

- SingleTenant：单租户。

- MultiTenant：多租户。',
                      'type' => 'string',
                      'example' => 'SingleTenant',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'rg-aekz5b555xxxxxx',
                    ),
                    'SourceServiceId' => 
                    array (
                      'description' => '分销源服务ID。',
                      'type' => 'string',
                      'example' => 'service-70a3b15bb62643xxxxxx',
                    ),
                    'SourceServiceVersion' => 
                    array (
                      'description' => '分销源服务版本。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'SourceSupplierName' => 
                    array (
                      'description' => '分销源服务商名称。',
                      'type' => 'string',
                      'example' => 'SourceSupplier',
                    ),
                    'ResellServiceId' => 
                    array (
                      'description' => '分销服务ID。',
                      'type' => 'string',
                      'example' => 'service-70a3b15bb62643xxxxxx',
                    ),
                    'LatestResellSourceServiceVersion' => 
                    array (
                      'description' => '最新的分销源服务版本。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'ResellApplyStatus' => 
                    array (
                      'description' => '服务的分销授权状态。可能的值：

- CanApply：可申请。

- Applied：已申请。

- Approved：已通过。',
                      'type' => 'string',
                      'example' => 'CanApply',
                    ),
                    'VirtualInternetService' => 
                    array (
                      'description' => '是否是虚拟互联网服务。可能的值：

- false：否。

- true：是。',
                      'type' => 'string',
                      'example' => 'false',
                    ),
                    'Categories' => 
                    array (
                      'description' => '服务分类。',
                      'type' => 'string',
                      'example' => 'OpenSource',
                    ),
                    'ServiceDiscoverable' => 
                    array (
                      'description' => '服务是否可发现。可能的值：

- INVISIBLE：不可发现。

- DISCOVERABLE：可发现。',
                      'type' => 'string',
                      'example' => 'INVISIBLE',
                    ),
                    'HasDraft' => 
                    array (
                      'description' => '当前服务是否有Draft版本。可能的值：

- true：是。

- false：否。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'HasBeta' => 
                    array (
                      'description' => '当前服务是否有Beta版本。可能的值：

- true：是。

- false：否。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'BuildInfo' => 
                    array (
                      'description' => '构建服务信息。',
                      'type' => 'string',
                      'example' => '{ "RepoUrl": "https://github.com/user/repo.git", "Brancn": "main"}',
                    ),
                    'Commodity' => 
                    array (
                      'description' => '商品规格。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CommodityCode' => 
                        array (
                          'description' => '商品code。',
                          'type' => 'string',
                          'example' => 'cmjj00xxxx',
                        ),
                        'Type' => 
                        array (
                          'description' => '类型。可能的值：

- Marketplace：云市场。

- Css：凌霄。

- SaasBoost：Saas Boost。',
                          'type' => 'string',
                          'example' => 'Marketplace',
                        ),
                        'SaasBoostMetadata' => 
                        array (
                          'description' => 'SaasBoost配置元数据。',
                          'type' => 'string',
                          'example' => '{
     //开启/关闭SaaS Boost绑定
    "Enabled":true/false,默认为false
    //公网交互地址
    "PublicAccessUrl":"https://example.com"
}',
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
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAAfu+XtuBE55iRLHEYYuojI4=\\",\\n  \\"RequestId\\": \\"51945B04-6AA6-410D-93BA-236E0248B104\\",\\n  \\"TotalCount\\": 100,\\n  \\"MaxResults\\": 1,\\n  \\"Services\\": [\\n    {\\n      \\"Status\\": \\"Online\\",\\n      \\"DefaultVersion\\": true,\\n      \\"PublishTime\\": \\"2021-05-21T00:00:00Z\\",\\n      \\"Version\\": \\"1.0\\",\\n      \\"DeployType\\": \\"ros\\",\\n      \\"ServiceId\\": \\"service-70a3b15bb62643xxxxxx\\",\\n      \\"SupplierUrl\\": \\"http://example.com\\",\\n      \\"ServiceType\\": \\"private\\",\\n      \\"SupplierName\\": \\"A有限公司\\",\\n      \\"ServiceInfos\\": [\\n        {\\n          \\"Locale\\": \\"zh-CN\\",\\n          \\"Image\\": \\"http://img.tidb.oss.url\\",\\n          \\"Name\\": \\"B数据库\\",\\n          \\"ShortDescription\\": \\"B是A公司自主设计并研发的开源分布式的关系型数据库\\"\\n        }\\n      ],\\n      \\"CommodityCode\\": \\"cmjj00xxxx\\",\\n      \\"CreateTime\\": \\"2021-05-20T00:00:00Z\\",\\n      \\"UpdateTime\\": \\"2021-05-21T00:00:00Z\\",\\n      \\"ShareType\\": \\"Public\\",\\n      \\"ApprovalType\\": \\"AutoPass\\",\\n      \\"VersionName\\": \\"v2.0.0\\",\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"key1\\",\\n          \\"Value\\": \\"value1\\"\\n        }\\n      ],\\n      \\"ArtifactId\\": \\"artifact-21ca53ac16a643xxxxxx\\",\\n      \\"ArtifactVersion\\": \\"draft\\",\\n      \\"SourceImage\\": \\"centos_7\\",\\n      \\"RelationType\\": \\"ServiceDeployment\\",\\n      \\"TrialType\\": \\"Trial\\",\\n      \\"TenantType\\": \\"SingleTenant\\",\\n      \\"ResourceGroupId\\": \\"rg-aekz5b555xxxxxx\\",\\n      \\"SourceServiceId\\": \\"service-70a3b15bb62643xxxxxx\\",\\n      \\"SourceServiceVersion\\": \\"1\\",\\n      \\"SourceSupplierName\\": \\"SourceSupplier\\",\\n      \\"ResellServiceId\\": \\"service-70a3b15bb62643xxxxxx\\",\\n      \\"LatestResellSourceServiceVersion\\": \\"1\\",\\n      \\"ResellApplyStatus\\": \\"CanApply\\",\\n      \\"VirtualInternetService\\": \\"false\\",\\n      \\"Categories\\": \\"OpenSource\\",\\n      \\"ServiceDiscoverable\\": \\"INVISIBLE\\",\\n      \\"HasDraft\\": true,\\n      \\"HasBeta\\": true,\\n      \\"BuildInfo\\": \\"{ \\\\\\"RepoUrl\\\\\\": \\\\\\"https://github.com/user/repo.git\\\\\\", \\\\\\"Brancn\\\\\\": \\\\\\"main\\\\\\"}\\",\\n      \\"Commodity\\": {\\n        \\"CommodityCode\\": \\"cmjj00xxxx\\",\\n        \\"Type\\": \\"Marketplace\\",\\n        \\"SaasBoostMetadata\\": \\"{\\\\n     //开启/关闭SaaS Boost绑定\\\\n    \\\\\\"Enabled\\\\\\":true/false,默认为false\\\\n    //公网交互地址\\\\n    \\\\\\"PublicAccessUrl\\\\\\":\\\\\\"https://example.com\\\\\\"\\\\n}\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询服务信息',
    ),
    'GetService' => 
    array (
      'summary' => '查询指定服务的详细信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '36954',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest18JMDW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'service-4ee86df83fd948******',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务版本。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ShowDetail',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '返回详细信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '返回详细信息。可选值：

 ServiceStatistic： 服务统计信息。',
              'type' => 'string',
              'required' => false,
              'example' => 'ServiceStatistic',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        4 => 
        array (
          'name' => 'FilterAliUid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否要过滤AliUid',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'SharedAccountType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务共享类型，默认值为SharedAccount。可能的值：

- SharedAccount：普通共享类型。

- Resell：分销共享类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'SharedAccount',
          ),
        ),
      ),
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
                'description' => '服务状态。可能的值：

- Draft：草稿状态。

- Submitted：已提交审核。不允许修改。

- Approved：已通过审核。不允许修改，可以发布上线。

- Launching：服务上线中。

- Online：已上线。

- Offline：已下线。',
                'type' => 'string',
                'example' => 'Online',
              ),
              'DeployMetadata' => 
              array (
                'description' => '存储服务部署配置的信息。存储的信息与部署类型有关，不同的部署类型存储的数据格式不一样，因此使用JSON String格式进行数据存储。 ',
                'type' => 'string',
                'example' => '{\\"TemplateConfigs\\":[{\\"Name\\":\\"模板1\\",\\"Url\\":\\"oss://computenest-test/template" 
            + ".json?RegionId=cn-beijing\\",\\"PredefinedParameters\\":[{\\"Name\\":\\"低配版\\"," 
            + "\\"Parameters\\":{\\"InstanceType\\":\\"ecs.g5.large\\",\\"DataDiskSize\\":40}},{\\"Name\\":\\"高配版\\"," 
            + "\\"Parameters\\":{\\"InstanceType\\":\\"ecs.g5.large\\",\\"DataDiskSize\\":200}}]}]}',
              ),
              'PublishTime' => 
              array (
                'description' => '发布时间。',
                'type' => 'string',
                'example' => '2021-05-21T00:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX',
              ),
              'Version' => 
              array (
                'description' => '服务版本。',
                'type' => 'string',
                'example' => '1.0',
              ),
              'DeployType' => 
              array (
                'description' => '部署类型。可能值：

- ros：通过ROS部署。

- terraform：通过Terraform部署。

- spi：调用SPI部署。

- operation：代运维服务部署。

- container：通过容器部署。

- pkg：包服务。',
                'type' => 'string',
                'example' => 'ros',
              ),
              'ServiceId' => 
              array (
                'description' => '服务ID。',
                'type' => 'string',
                'example' => 'service-70a3b15bb62643xxxxxx',
              ),
              'SupplierUrl' => 
              array (
                'description' => '服务商地址。',
                'type' => 'string',
                'example' => 'http://example.com',
              ),
              'ServiceDocUrl' => 
              array (
                'description' => '产品文档的URL。',
                'type' => 'string',
                'example' => 'http://example1.com',
              ),
              'ServiceProductUrl' => 
              array (
                'description' => '产品页URL。',
                'type' => 'string',
                'example' => 'http://example2.com',
              ),
              'ServiceType' => 
              array (
                'description' => '服务类型。可能值：

- private：部署在用户账户下。

- managed：托管在服务商账户下。

- operation：代运维服务。',
                'type' => 'string',
                'example' => 'private',
              ),
              'SupplierName' => 
              array (
                'description' => '服务商名称。',
                'type' => 'string',
                'example' => 'A公司',
              ),
              'ServiceInfos' => 
              array (
                'description' => '服务信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Locale' => 
                    array (
                      'description' => '服务配置语言。可能的值：

- zh-CN：中文。

- en-US：英文。',
                      'type' => 'string',
                      'example' => 'zh-CN',
                    ),
                    'Image' => 
                    array (
                      'description' => '服务图标地址。',
                      'type' => 'string',
                      'example' => 'https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png',
                    ),
                    'Name' => 
                    array (
                      'description' => '服务名称。',
                      'type' => 'string',
                      'example' => 'B数据库',
                    ),
                    'ShortDescription' => 
                    array (
                      'description' => '服务概述。',
                      'type' => 'string',
                      'example' => 'B是A公司自主设计并研发的开源分布式的关系型数据库',
                    ),
                    'LongDescriptionUrl' => 
                    array (
                      'description' => '服务详细描述的地址。',
                      'type' => 'string',
                      'example' => 'https://example.com',
                    ),
                    'Agreements' => 
                    array (
                      'description' => '服务的协议文档信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '服务的协议文档信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Name' => 
                          array (
                            'description' => '协议名称。',
                            'type' => 'string',
                            'example' => 'Name',
                          ),
                          'Url' => 
                          array (
                            'description' => '协议链接。',
                            'type' => 'string',
                            'example' => 'https://aliyun.com/xxxxxxxx.html',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'CommodityCode' => 
              array (
                'description' => '云市场商品code。',
                'type' => 'string',
                'example' => 'cmjj00xxxx',
              ),
              'IsSupportOperated' => 
              array (
                'description' => '是否代运维，默认为：false。可能的值：

- true：开启。

- false：关闭。
> 当**ServiceType**为**private**时需要填入该值。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'PolicyNames' => 
              array (
                'description' => '策略名称。单个策略名称长度不超过128个字符，多个名称使用英文逗号（,）分隔。暂时只支持代运维相关参数策略。',
                'type' => 'string',
                'example' => 'policyName1, policyName2',
              ),
              'Duration' => 
              array (
                'description' => '代运维时间。单位：秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '259200',
              ),
              'Progress' => 
              array (
                'description' => '服务实例的部署进度，单位：%。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '90',
              ),
              'StatusDetail' => 
              array (
                'description' => '服务状态描述。',
                'type' => 'string',
                'example' => 'deploy successfully',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2021-05-20T00:00:00Z',
              ),
              'UpdateTime' => 
              array (
                'description' => '更新时间。',
                'type' => 'string',
                'example' => '2021-05-22T00:00:00Z',
              ),
              'ShareType' => 
              array (
                'description' => '共享类型。可能的值：

- Public：公开的，正式部署和试用部署都不受限。

- Restricted：受限的，正式部署和试用部署都受限。

- OnlyFormalRestricted：仅正式部署受限。

- OnlyTrailRestricted：仅试用部署受限。

- Hidden：隐藏的，不可见且不可申请部署权限。',
                'type' => 'string',
                'example' => 'Public',
              ),
              'AlarmMetadata' => 
              array (
                'description' => '服务报警配置。
> 当**PolicyNames**中配置了报警权限策略后，该配置才会生效。',
                'type' => 'string',
                'example' => '{
  "TemplateUrl": "http://template.file.url",
  // 应用分组级别告警元数据
  "ApplicationGroups": [
    {
      "Name": "applicationGroup1",
      "TemplateUrl": "url1"
    },
    {
      "Name": "applicationGroup2",
      "TemplateUrl": "url2"
    }
  ]
}',
              ),
              'UpgradeMetadata' => 
              array (
                'description' => '升级元数据。',
                'type' => 'string',
                'example' => '{\\"Description\\":\\"xxx\\",\\"SupportRollback\\":true,\\"SupportUpgradeFromVersions\\":[],\\"UpgradeComponents\\":[\\"Configuration\\"]}',
              ),
              'VersionName' => 
              array (
                'description' => '版本名称。',
                'type' => 'string',
                'example' => 'v1',
              ),
              'PayFromType' => 
              array (
                'description' => '付费来源，可能的值：

- None：不付费。

- Marketplace：云市场付费。

- Custom：自定义付费。',
                'type' => 'string',
                'example' => 'None',
              ),
              'PayType' => 
              array (
                'description' => '付费类型。取值范围：

- Permanent：永久购买。

- Subscription：云市场包年包月。

- PayAsYouGo：云市场按量付费。

- CustomFixTime：商家自定义固定时长。',
                'type' => 'string',
                'example' => 'Permanent',
              ),
              'DefaultLicenseDays' => 
              array (
                'description' => '默认许可证日期。单位：天。取值范围：1~1000.',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'Tags' => 
              array (
                'description' => '服务标签。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'key1',
                    ),
                    'Value' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'value1',
                    ),
                  ),
                ),
              ),
              'TrialDuration' => 
              array (
                'description' => '试用时长。单位：天。试用时长的最长天数不超过30天。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '7',
              ),
              'TrialType' => 
              array (
                'description' => '试用类型。可选值：

- Trial：支持试用。

- NotTrial：不支持试用。',
                'type' => 'string',
                'example' => 'Trial',
              ),
              'TenantType' => 
              array (
                'description' => '租户类型。可能的值：

- SingleTenant：单租户。

- MultiTenant：多租户。',
                'type' => 'string',
                'example' => 'SingleTenant',
              ),
              'LicenseMetadata' => 
              array (
                'description' => '许可证元数据。',
                'type' => 'string',
                'example' => '{\\"PayType\\":\\"CustomFixTime\\",\\"DefaultLicenseDays\\":7,\\"CustomMetadata\\":[{\\"TemplateName\\":\\"模板1\\",\\"SpecificationName\\":\\"bandwith-0\\",\\"CustomData\\":\\"1\\"}]}',
              ),
              'OperationMetadata' => 
              array (
                'description' => '代运维配置。',
                'type' => 'string',
                'example' => '{\\"PrometheusConfigMap\\":{\\"New_Vpc_Ack_And_Jumpserver\\":{}}}',
              ),
              'TestStatus' => 
              array (
                'description' => '测试状态。可能的值：

- `CONFIG_IS_NULL`：测试配置不存在。

- `SERVICE_TEST_SUCCEED`：服务测试通过。

- `SERVICE_TSET_DOING`：服务测试尚未通过。',
                'type' => 'string',
                'example' => 'SERVICE_TEST_SUCCEED',
              ),
              'ApprovalType' => 
              array (
                'description' => '服务使用申请审批类型。可能的值：

- Manual：收到审批。

- AutoPass：自动通过。',
                'type' => 'string',
                'example' => 'Manual',
              ),
              'RegistrationId' => 
              array (
                'description' => '注册ID。',
                'type' => 'string',
                'example' => 'sr-04056c2ab4b94bxxxxxx',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-aekzuqyxxxxxx',
              ),
              'Permission' => 
              array (
                'description' => '权限类型。可能的值：

- Deployable：可部署。

- Accessible：可访问。',
                'type' => 'string',
                'example' => 'Deployable',
              ),
              'Statistic' => 
              array (
                'description' => '统计信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccumulativeInstanceCount' => 
                  array (
                    'description' => '累计实例数。
包含历史已删除的实例。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '75',
                  ),
                  'AccumulativeUserCount' => 
                  array (
                    'description' => '累计用户数。
包含历史用户。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '60',
                  ),
                  'DeployedServiceInstanceCount' => 
                  array (
                    'description' => '线上实例数。
当前已成功部署的实例数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'DeployedUserCount' => 
                  array (
                    'description' => '线上用户数。
当前已成功部署的实例对应的用户数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'SubmittedUsageCount' => 
                  array (
                    'description' => '待审核（Submitted状态）的服务申请个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'AccumulativePocAmount' => 
                  array (
                    'description' => '试用累计消耗金额。单位：元。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '80.35',
                  ),
                  'AveragePocAmount' => 
                  array (
                    'description' => '试用服务实例平均消耗金额。单位：元。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '40.17',
                  ),
                  'AveragePocUnitAmount' => 
                  array (
                    'description' => '试用服务实例平均单位时间消耗金额。单位：元。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '167.9',
                  ),
                  'AveragePocDuration' => 
                  array (
                    'description' => '试用服务实例平均时长。单位：时。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '1',
                  ),
                ),
              ),
              'SourceServiceId' => 
              array (
                'description' => '分销源服务ID。',
                'type' => 'string',
                'example' => 'service-70a3b15bb62643xxxxxx',
              ),
              'SourceServiceVersion' => 
              array (
                'description' => '分销源服务版本。',
                'type' => 'string',
                'example' => '1',
              ),
              'SourceSupplierName' => 
              array (
                'description' => '分销源服务商名称。',
                'type' => 'string',
                'example' => 'SourceSupplier',
              ),
              'LogMetadata' => 
              array (
                'description' => '应用日志配置。',
                'type' => 'string',
                'example' => '{
  "Logstores": [
    {
    	"LogstoreName": "access-log",
  		"LogPath": "/home/admin/app/logs", # 对容器不需要，在YAML中配置
  		"FilePattern": "access.log*" # 对容器不需要，在YAML中配置
    }
  ]
}',
              ),
              'Resellable' => 
              array (
                'description' => '是否支持分销。可能的值：

- false：不支持。

- true：支持。',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'VirtualInternetService' => 
              array (
                'description' => '是否是虚拟互联网服务。可能的值：

- false：否。

- true：是。',
                'type' => 'string',
                'example' => 'false',
              ),
              'ServiceDiscoverable' => 
              array (
                'description' => '服务是否可发现。可能的值：

- INVISIBLE：不可发现。

- DISCOVERABLE：可发现。',
                'type' => 'string',
                'example' => 'DISCOVERABLE',
              ),
              'Categories' => 
              array (
                'description' => '服务分类。',
                'type' => 'string',
                'example' => 'DevOps',
              ),
              'ShareTypeStatus' => 
              array (
                'description' => '服务共享状态。
><notice>该参数已弃用。></notice>',
                'type' => 'string',
                'example' => '该参数已弃用。',
              ),
              'ServiceAuditDocumentUrl' => 
              array (
                'description' => '服务审核文件URL。',
                'type' => 'string',
                'example' => 'https://service-info-public.oss-cn-hangzhou.aliyuncs.com/1690707531xxxxxx/service-document/be3382cd-xxxx-xxxx-xxxx-f8707ec12879.docx',
              ),
              'EntitySource' => 
              array (
                'description' => '上报源。',
                'type' => 'object',
                'additionalProperties' => 
                array (
                  'type' => 'string',
                  'example' => 'ComputNest',
                  'description' => '上报源。可能的值：

- ComputNest：计算巢上报。

- Custom：服务商上报。',
                ),
              ),
              'CrossRegionConnectionStatus' => 
              array (
                'description' => '商品模块绑定关系。',
                'type' => 'string',
                'example' => 'componesConfigs',
              ),
              'VirtualInternetServiceId' => 
              array (
                'description' => '虚拟互联网服务ID。',
                'type' => 'string',
                'example' => 'service-70a3b15bb62643xxxxxx',
              ),
              'Commodity' => 
              array (
                'description' => '商品规格。',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '类型。可能的值：

- Marketplace：云市场。

- Css：凌霄。',
                    'type' => 'string',
                    'example' => 'Marketplace',
                  ),
                  'ChargeType' => 
                  array (
                    'description' => '付费类型。取值：
- **PREPAY**（默认值）：预付费，即包年包月。
- **POSTPAY**：后付费，即按量付费。',
                    'type' => 'string',
                    'example' => 'PREPAY',
                  ),
                  'Components' => 
                  array (
                    'description' => '商品模块。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '商品模块。',
                      'type' => 'string',
                      'example' => 'YARN',
                    ),
                  ),
                  'Specifications' => 
                  array (
                    'description' => '云市场规格详情。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '云市场规格详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Code' => 
                        array (
                          'description' => '商品code。',
                          'type' => 'string',
                          'example' => 'cmjj00xxxx',
                        ),
                        'Name' => 
                        array (
                          'description' => '规格名称。',
                          'type' => 'string',
                          'example' => 'specifications1',
                        ),
                        'Times' => 
                        array (
                          'description' => '允许购买的时长。单位：周或者年。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '允许购买的时长。单位：周或者年。',
                            'type' => 'string',
                            'example' => '3',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'MeteringEntities' => 
                  array (
                    'description' => '计量项信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '计量项信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EntityId' => 
                        array (
                          'description' => '计量项ID。',
                          'type' => 'string',
                          'example' => 'cmgjxxxxxxxx-NetworkOut',
                        ),
                        'Name' => 
                        array (
                          'description' => '计量项属性名称。',
                          'type' => 'string',
                          'example' => 'spring-boot-demo',
                        ),
                      ),
                    ),
                  ),
                  'MarketplaceMetadata' => 
                  array (
                    'description' => '云市场元数据信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SpecificationMappings' => 
                      array (
                        'description' => '商品规格与模板或套餐的关系。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '商品规格与模板或套餐的关系。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SpecificationCode' => 
                            array (
                              'description' => '云市场商品规格code。',
                              'type' => 'string',
                              'example' => 'cmjj00xxxx',
                            ),
                            'TemplateName' => 
                            array (
                              'description' => '模板名称。',
                              'type' => 'string',
                              'example' => '模板1',
                            ),
                            'SpecificationName' => 
                            array (
                              'description' => '套餐名称。',
                              'type' => 'string',
                              'example' => '按量付费',
                            ),
                            'TrialType' => 
                            array (
                              'description' => '试用类型。可选值：

- Trial：支持试用。

- NotTrial：不支持试用。',
                              'type' => 'string',
                              'example' => 'NotTrial',
                            ),
                          ),
                        ),
                      ),
                      'MeteringEntityMappings' => 
                      array (
                        'description' => '套餐与计量维度的绑定关系。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '套餐与计量维度的绑定关系。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'EntityIds' => 
                            array (
                              'description' => '计量项ID。',
                              'type' => 'string',
                              'example' => 'cmgjxxxxxxxx-NetworkOut-2',
                            ),
                            'TemplateName' => 
                            array (
                              'description' => '模板名称。',
                              'type' => 'string',
                              'example' => '模板1',
                            ),
                            'SpecificationName' => 
                            array (
                              'description' => '套餐名称。',
                              'type' => 'string',
                              'example' => '按量付费套餐',
                            ),
                          ),
                        ),
                      ),
                      'MeteringEntityExtraInfos' => 
                      array (
                        'description' => '计量项配置信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '计量项配置信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'EntityId' => 
                            array (
                              'description' => '计量项ID。',
                              'type' => 'string',
                              'example' => 'cmgjxxxxxxxx-NetworkOut-2',
                            ),
                            'Type' => 
                            array (
                              'description' => '计量指标。',
                              'type' => 'string',
                              'example' => 'AvgPod',
                            ),
                            'MetricName' => 
                            array (
                              'description' => '计量指标名称。',
                              'type' => 'string',
                              'example' => 'NetworkLantency',
                            ),
                            'Promql' => 
                            array (
                              'description' => '自定义prometheus语句。',
                              'type' => 'string',
                              'example' => 'avg_over_time(count(kube_pod_info{namespace=\\"default\\"})[1h:1m])',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'CssMetadata' => 
                  array (
                    'description' => '凌霄配置元数据。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ComponentsMappings' => 
                      array (
                        'description' => '计费项映射。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '计费项映射。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Mappings' => 
                            array (
                              'description' => '映射关系。',
                              'type' => 'object',
                              'additionalProperties' => 
                              array (
                                'type' => 'string',
                                'example' => '{{DBInstanceStorage}}',
                                'description' => '映射关系。',
                              ),
                            ),
                            'TemplateName' => 
                            array (
                              'description' => '模板名称。',
                              'type' => 'string',
                              'example' => '模板1',
                            ),
                          ),
                        ),
                      ),
                      'MeteringEntityMappings' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'EntityIds' => 
                            array (
                              'type' => 'string',
                            ),
                            'TemplateName' => 
                            array (
                              'type' => 'string',
                            ),
                            'SpecificationName' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                        ),
                      ),
                      'MeteringEntityExtraInfos' => 
                      array (
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'EntityId' => 
                            array (
                              'type' => 'string',
                            ),
                            'Type' => 
                            array (
                              'type' => 'string',
                            ),
                            'MetricName' => 
                            array (
                              'type' => 'string',
                            ),
                            'Promql' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'CommodityCode' => 
                  array (
                    'description' => '云市场商品code。',
                    'type' => 'string',
                    'example' => 'cmjj00xxxx',
                  ),
                  'SaasBoostMetadata' => 
                  array (
                    'description' => 'SaasBoost配置元数据。',
                    'type' => 'string',
                    'example' => '{
    "Enabled":false
    //公网交互地址
    "PublicAccessUrl":"https://example.com"
}',
                  ),
                ),
              ),
              'BuildInfo' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Online\\",\\n  \\"DeployMetadata\\": \\"{\\\\\\\\\\\\\\"TemplateConfigs\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"Name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"模板1\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Url\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"oss://computenest-test/template\\\\\\" \\\\n            + \\\\\\".json?RegionId=cn-beijing\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"PredefinedParameters\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"Name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"低配版\\\\\\\\\\\\\\",\\\\\\" \\\\n            + \\\\\\"\\\\\\\\\\\\\\"Parameters\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"InstanceType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ecs.g5.large\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"DataDiskSize\\\\\\\\\\\\\\":40}},{\\\\\\\\\\\\\\"Name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"高配版\\\\\\\\\\\\\\",\\\\\\" \\\\n            + \\\\\\"\\\\\\\\\\\\\\"Parameters\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"InstanceType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"ecs.g5.large\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"DataDiskSize\\\\\\\\\\\\\\":200}}]}]}\\",\\n  \\"PublishTime\\": \\"2021-05-21T00:00:00Z\\",\\n  \\"RequestId\\": \\"B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX\\",\\n  \\"Version\\": \\"1.0\\",\\n  \\"DeployType\\": \\"ros\\",\\n  \\"ServiceId\\": \\"service-70a3b15bb62643xxxxxx\\",\\n  \\"SupplierUrl\\": \\"http://example.com\\",\\n  \\"ServiceDocUrl\\": \\"http://example1.com\\",\\n  \\"ServiceProductUrl\\": \\"http://example2.com\\",\\n  \\"ServiceType\\": \\"private\\",\\n  \\"SupplierName\\": \\"A公司\\",\\n  \\"ServiceInfos\\": [\\n    {\\n      \\"Locale\\": \\"zh-CN\\",\\n      \\"Image\\": \\"https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png\\",\\n      \\"Name\\": \\"B数据库\\",\\n      \\"ShortDescription\\": \\"B是A公司自主设计并研发的开源分布式的关系型数据库\\",\\n      \\"LongDescriptionUrl\\": \\"https://example.com\\",\\n      \\"Agreements\\": [\\n        {\\n          \\"Name\\": \\"Name\\",\\n          \\"Url\\": \\"https://aliyun.com/xxxxxxxx.html\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"CommodityCode\\": \\"cmjj00xxxx\\",\\n  \\"IsSupportOperated\\": false,\\n  \\"PolicyNames\\": \\"policyName1, policyName2\\",\\n  \\"Duration\\": 259200,\\n  \\"Progress\\": 90,\\n  \\"StatusDetail\\": \\"deploy successfully\\",\\n  \\"CreateTime\\": \\"2021-05-20T00:00:00Z\\",\\n  \\"UpdateTime\\": \\"2021-05-22T00:00:00Z\\",\\n  \\"ShareType\\": \\"Public\\",\\n  \\"AlarmMetadata\\": \\"{\\\\n  \\\\\\"TemplateUrl\\\\\\": \\\\\\"http://template.file.url\\\\\\",\\\\n  // 应用分组级别告警元数据\\\\n  \\\\\\"ApplicationGroups\\\\\\": [\\\\n    {\\\\n      \\\\\\"Name\\\\\\": \\\\\\"applicationGroup1\\\\\\",\\\\n      \\\\\\"TemplateUrl\\\\\\": \\\\\\"url1\\\\\\"\\\\n    },\\\\n    {\\\\n      \\\\\\"Name\\\\\\": \\\\\\"applicationGroup2\\\\\\",\\\\n      \\\\\\"TemplateUrl\\\\\\": \\\\\\"url2\\\\\\"\\\\n    }\\\\n  ]\\\\n}\\",\\n  \\"UpgradeMetadata\\": \\"{\\\\\\\\\\\\\\"Description\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"xxx\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"SupportRollback\\\\\\\\\\\\\\":true,\\\\\\\\\\\\\\"SupportUpgradeFromVersions\\\\\\\\\\\\\\":[],\\\\\\\\\\\\\\"UpgradeComponents\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"Configuration\\\\\\\\\\\\\\"]}\\",\\n  \\"VersionName\\": \\"v1\\",\\n  \\"PayFromType\\": \\"None\\",\\n  \\"PayType\\": \\"Permanent\\",\\n  \\"DefaultLicenseDays\\": 1,\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"key1\\",\\n      \\"Value\\": \\"value1\\"\\n    }\\n  ],\\n  \\"TrialDuration\\": 7,\\n  \\"TrialType\\": \\"Trial\\",\\n  \\"TenantType\\": \\"SingleTenant\\",\\n  \\"LicenseMetadata\\": \\"{\\\\\\\\\\\\\\"PayType\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"CustomFixTime\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"DefaultLicenseDays\\\\\\\\\\\\\\":7,\\\\\\\\\\\\\\"CustomMetadata\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"TemplateName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"模板1\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"SpecificationName\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"bandwith-0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"CustomData\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1\\\\\\\\\\\\\\"}]}\\",\\n  \\"OperationMetadata\\": \\"{\\\\\\\\\\\\\\"PrometheusConfigMap\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"New_Vpc_Ack_And_Jumpserver\\\\\\\\\\\\\\":{}}}\\",\\n  \\"TestStatus\\": \\"SERVICE_TEST_SUCCEED\\",\\n  \\"ApprovalType\\": \\"Manual\\",\\n  \\"RegistrationId\\": \\"sr-04056c2ab4b94bxxxxxx\\",\\n  \\"ResourceGroupId\\": \\"rg-aekzuqyxxxxxx\\",\\n  \\"Permission\\": \\"Deployable\\",\\n  \\"Statistic\\": {\\n    \\"AccumulativeInstanceCount\\": 75,\\n    \\"AccumulativeUserCount\\": 60,\\n    \\"DeployedServiceInstanceCount\\": 20,\\n    \\"DeployedUserCount\\": 10,\\n    \\"SubmittedUsageCount\\": 10,\\n    \\"AccumulativePocAmount\\": 80.35,\\n    \\"AveragePocAmount\\": 40.17,\\n    \\"AveragePocUnitAmount\\": 167.9,\\n    \\"AveragePocDuration\\": 1\\n  },\\n  \\"SourceServiceId\\": \\"service-70a3b15bb62643xxxxxx\\",\\n  \\"SourceServiceVersion\\": \\"1\\",\\n  \\"SourceSupplierName\\": \\"SourceSupplier\\",\\n  \\"LogMetadata\\": \\"{\\\\n  \\\\\\"Logstores\\\\\\": [\\\\n    {\\\\n    \\\\t\\\\\\"LogstoreName\\\\\\": \\\\\\"access-log\\\\\\",\\\\n  \\\\t\\\\t\\\\\\"LogPath\\\\\\": \\\\\\"/home/admin/app/logs\\\\\\", # 对容器不需要，在YAML中配置\\\\n  \\\\t\\\\t\\\\\\"FilePattern\\\\\\": \\\\\\"access.log*\\\\\\" # 对容器不需要，在YAML中配置\\\\n    }\\\\n  ]\\\\n}\\",\\n  \\"Resellable\\": false,\\n  \\"VirtualInternetService\\": \\"false\\",\\n  \\"ServiceDiscoverable\\": \\"DISCOVERABLE\\",\\n  \\"Categories\\": \\"DevOps\\",\\n  \\"ShareTypeStatus\\": \\"该参数已弃用。\\",\\n  \\"ServiceAuditDocumentUrl\\": \\"https://service-info-public.oss-cn-hangzhou.aliyuncs.com/1690707531xxxxxx/service-document/be3382cd-xxxx-xxxx-xxxx-f8707ec12879.docx\\",\\n  \\"EntitySource\\": {\\n    \\"key\\": \\"ComputNest\\"\\n  },\\n  \\"CrossRegionConnectionStatus\\": \\"componesConfigs\\",\\n  \\"VirtualInternetServiceId\\": \\"service-70a3b15bb62643xxxxxx\\",\\n  \\"Commodity\\": {\\n    \\"Type\\": \\"Marketplace\\",\\n    \\"ChargeType\\": \\"PREPAY\\",\\n    \\"Components\\": [\\n      \\"YARN\\"\\n    ],\\n    \\"Specifications\\": [\\n      {\\n        \\"Code\\": \\"cmjj00xxxx\\",\\n        \\"Name\\": \\"specifications1\\",\\n        \\"Times\\": [\\n          \\"3\\"\\n        ]\\n      }\\n    ],\\n    \\"MeteringEntities\\": [\\n      {\\n        \\"EntityId\\": \\"cmgjxxxxxxxx-NetworkOut\\",\\n        \\"Name\\": \\"spring-boot-demo\\"\\n      }\\n    ],\\n    \\"MarketplaceMetadata\\": {\\n      \\"SpecificationMappings\\": [\\n        {\\n          \\"SpecificationCode\\": \\"cmjj00xxxx\\",\\n          \\"TemplateName\\": \\"模板1\\",\\n          \\"SpecificationName\\": \\"按量付费\\",\\n          \\"TrialType\\": \\"NotTrial\\"\\n        }\\n      ],\\n      \\"MeteringEntityMappings\\": [\\n        {\\n          \\"EntityIds\\": \\"cmgjxxxxxxxx-NetworkOut-2\\",\\n          \\"TemplateName\\": \\"模板1\\",\\n          \\"SpecificationName\\": \\"按量付费套餐\\"\\n        }\\n      ],\\n      \\"MeteringEntityExtraInfos\\": [\\n        {\\n          \\"EntityId\\": \\"cmgjxxxxxxxx-NetworkOut-2\\",\\n          \\"Type\\": \\"AvgPod\\",\\n          \\"MetricName\\": \\"NetworkLantency\\",\\n          \\"Promql\\": \\"avg_over_time(count(kube_pod_info{namespace=\\\\\\\\\\\\\\"default\\\\\\\\\\\\\\"})[1h:1m])\\"\\n        }\\n      ]\\n    },\\n    \\"CssMetadata\\": {\\n      \\"ComponentsMappings\\": [\\n        {\\n          \\"Mappings\\": {\\n            \\"key\\": \\"{{DBInstanceStorage}}\\"\\n          },\\n          \\"TemplateName\\": \\"模板1\\"\\n        }\\n      ],\\n      \\"MeteringEntityMappings\\": [\\n        {\\n          \\"EntityIds\\": \\"\\",\\n          \\"TemplateName\\": \\"\\",\\n          \\"SpecificationName\\": \\"\\"\\n        }\\n      ],\\n      \\"MeteringEntityExtraInfos\\": [\\n        {\\n          \\"EntityId\\": \\"\\",\\n          \\"Type\\": \\"\\",\\n          \\"MetricName\\": \\"\\",\\n          \\"Promql\\": \\"\\"\\n        }\\n      ]\\n    },\\n    \\"CommodityCode\\": \\"cmjj00xxxx\\",\\n    \\"SaasBoostMetadata\\": \\"{\\\\n    \\\\\\"Enabled\\\\\\":false\\\\n    //公网交互地址\\\\n    \\\\\\"PublicAccessUrl\\\\\\":\\\\\\"https://example.com\\\\\\"\\\\n}\\"\\n  },\\n  \\"BuildInfo\\": \\"\\"\\n}","type":"json"}]',
      'title' => '查询服务详细信息',
    ),
    'DeployServiceInstance' => 
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'si-0e6fca6a51a54420****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B8A6AEA6-0D8F-589A-A7FF-B44FD842456E',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B8A6AEA6-0D8F-589A-A7FF-B44FD842456E\\"\\n}","type":"json"}]',
      'title' => '部署服务实例',
      'summary' => '部署服务实例。',
    ),
    'GetServiceInstance' => 
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
          'name' => 'ServiceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'si-d6ab3a63ccbb4b17****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
              'Status' => 
              array (
                'description' => '服务实例的部署状态。可能值：

- Created：已创建

- Deploying：部署中

- DeployedFailed：部署失败

- Deployed：已部署

- Upgrading：升级中

- Deleting：删除中

- Deleted：已删除

- DeletedFailed：删除失败',
                'type' => 'string',
                'example' => 'Deployed',
              ),
              'TemplateName' => 
              array (
                'description' => '模板名称。',
                'type' => 'string',
                'example' => '模板1',
              ),
              'UpdateTime' => 
              array (
                'description' => '更新时间。',
                'type' => 'string',
                'example' => '2021-05-20T00:00:00Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '	
4DB0F536-B3BE-4F0D-BD29-E83FB56D550C',
              ),
              'ServiceInstanceId' => 
              array (
                'description' => '服务实例ID。',
                'type' => 'string',
                'example' => 'si-d6ab3a63ccbb4b17****',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间。',
                'type' => 'string',
                'example' => '2021-05-20T00:00:00Z',
              ),
              'UserId' => 
              array (
                'description' => '用户AliUid。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1234567',
              ),
              'SupplierUid' => 
              array (
                'description' => '服务商AliUid。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1964460391538545',
              ),
              'Service' => 
              array (
                'description' => '服务详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '服务状态。可能的值：

Draft：待提交注册。

Submited：已提交注册。

Approved：已通过注册审核。

Online：已上线。

Offline：已下线。

Deleted：已删除。

Launching：服务上线中。',
                    'type' => 'string',
                    'example' => 'Online',
                  ),
                  'PublishTime' => 
                  array (
                    'description' => '发布时间。',
                    'type' => 'string',
                    'example' => '2021-05-21T00:00:00Z',
                  ),
                  'Version' => 
                  array (
                    'description' => '服务版本。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'DeployMetadata' => 
                  array (
                    'description' => '存储服务部署配置的信息。存储的信息与部署类型有关，不同的部署类型存储的数据格式不一样，因此使用JSON String格式进行数据存储。 ',
                    'type' => 'string',
                    'example' => '{
      "EstimateTime": null,
      "SupplierDeployMetadata": {
            "DeployTimeout": null
      },
      "TemplateConfigs": [
            {
                  "Name": "模板1",
                  "Url": "https://service-info-private.oss-cn-hangzhou.aliyuncs.com/130920852836****/template/af11ec5a-09a0-4aa7-970c-09b51e2a****.json",
                  "PredefinedParameters": [],
                  "AllowedRegions": [
                        "cn-hangzhou"
                  ]
            }
      ]
}',
                  ),
                  'DeployType' => 
                  array (
                    'description' => '部署类型。可能值：

- ros：通过ROS部署。

- terraform：通过Terraform部署。

- ack：通过ACK部署。

- spi：调用SPI部署。

- operation：代运维服务部署。',
                    'type' => 'string',
                    'example' => 'ros',
                  ),
                  'ServiceId' => 
                  array (
                    'description' => '服务ID。',
                    'type' => 'string',
                    'example' => 'service-9c8a3522528b4fe8****',
                  ),
                  'SupplierUrl' => 
                  array (
                    'description' => '服务商地址。',
                    'type' => 'string',
                    'example' => 'http://example.com',
                  ),
                  'ServiceProductUrl' => 
                  array (
                    'description' => '产品页URL。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'https://service-info-private.oss-cn-hangzhou.aliyuncs.com',
                  ),
                  'ServiceDocUrl' => 
                  array (
                    'description' => '产品文档的URL。',
                    'type' => 'string',
                    'example' => 'http://example.com',
                  ),
                  'ServiceType' => 
                  array (
                    'description' => '服务类型。可能值：

- private：部署在用户账户下。

- managed：托管在服务商账户下。

- operation：代运维服务。',
                    'type' => 'string',
                    'example' => 'private',
                  ),
                  'SupplierName' => 
                  array (
                    'description' => '服务商名称。',
                    'type' => 'string',
                    'example' => 'A公司',
                  ),
                  'ServiceInfos' => 
                  array (
                    'description' => '服务信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '服务信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Locale' => 
                        array (
                          'description' => '服务实例语言。',
                          'type' => 'string',
                          'example' => 'zh-CN',
                        ),
                        'Image' => 
                        array (
                          'description' => '服务图标地址。',
                          'type' => 'string',
                          'example' => 'https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png',
                        ),
                        'Name' => 
                        array (
                          'description' => '服务名称。',
                          'type' => 'string',
                          'example' => 'B数据库',
                        ),
                        'ShortDescription' => 
                        array (
                          'description' => '服务概述。',
                          'type' => 'string',
                          'example' => 'B是A公司自主设计并研发的开源分布式的关系型数据库',
                        ),
                      ),
                    ),
                  ),
                  'VersionName' => 
                  array (
                    'description' => '服务商自定义版本名称。',
                    'type' => 'string',
                    'example' => '版本A',
                  ),
                  'UpgradableServiceVersions' => 
                  array (
                    'description' => '可升级的服务版本号。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可升级的服务版本号。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
              'Parameters' => 
              array (
                'description' => '部署服务实例输入的参数。',
                'type' => 'string',
                'example' => '{
      "param": "value"
}',
              ),
              'Progress' => 
              array (
                'description' => '服务实例的部署进度，单位：%。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '90',
              ),
              'StatusDetail' => 
              array (
                'description' => '部署实例的状态描述。',
                'type' => 'string',
                'example' => 'deploy successfully',
              ),
              'OperationStartTime' => 
              array (
                'description' => '代运维开始时间。',
                'type' => 'string',
                'example' => '2021-12-29T06:48:56Z',
              ),
              'OperationEndTime' => 
              array (
                'description' => '代运维结束时间。',
                'type' => 'string',
                'example' => '2022-01-28T06:48:56Z',
              ),
              'OperatedServiceInstanceId' => 
              array (
                'description' => '被代运维的服务实例ID。',
                'type' => 'string',
                'example' => 'si-d6ab3a63ccbb4b17****',
              ),
              'IsOperated' => 
              array (
                'description' => '服务实例的代运维功能是否开启。可能值：

- true：服务实例的代运维功能已开启

- false：服务实例的代运维功能未开启',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'EnableInstanceOps' => 
              array (
                'description' => '服务实例是否有代运维功能。可能的值：

- true：服务实例有代运维功能

- false：服务实例没有代运维功能',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Resources' => 
              array (
                'description' => '资源列表。',
                'type' => 'string',
                'example' => '[
      {
            "StackId": "stack-xxx"
      }
]',
              ),
              'NetworkConfig' => 
              array (
                'description' => '网络配置信息。

> 该参数已废弃。
',
                'type' => 'object',
                'properties' => 
                array (
                  'EndpointServiceId' => 
                  array (
                    'description' => '私网连接的终端节点服务ID。
> 该参数已废弃。',
                    'type' => 'string',
                    'example' => 'epsrv-5ei07324541816bxxxx',
                  ),
                  'EndpointId' => 
                  array (
                    'description' => '私网连接的终端节点id。

> 该参数已废弃。',
                    'type' => 'string',
                    'example' => 'ep-m5ei37240541816b****',
                  ),
                  'PrivateVpcConnections' => 
                  array (
                    'description' => '私网连接信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '私网连接信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndpointId' => 
                        array (
                          'description' => '私网连接的终端节点ID。',
                          'type' => 'string',
                          'example' => 'ep-m5ei37240541816b****',
                        ),
                        'EndpointServiceId' => 
                        array (
                          'description' => '私网连接的终端节点服务ID。',
                          'type' => 'string',
                          'example' => 'epsrv-5ei07324541816bxxxx',
                        ),
                        'PrivateZoneName' => 
                        array (
                          'description' => '自定义域名。',
                          'type' => 'string',
                          'example' => 'test.computenest.aliyuncs.com',
                        ),
                        'ConnectionConfigs' => 
                        array (
                          'description' => '网络配置信息。
主要用于私网连接。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '网络配置信息。
主要用于私网连接。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'VpcId' => 
                              array (
                                'description' => '专有网络ID。',
                                'type' => 'string',
                                'example' => 'vpc-bp1vwnn14rqpyiczj****',
                              ),
                              'SecurityGroups' => 
                              array (
                                'description' => '安全组名称。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '安全组名称。',
                                  'type' => 'string',
                                  'example' => 'sg-m5ec4mvoq9egn7xxxxxx',
                                ),
                              ),
                              'VSwitches' => 
                              array (
                                'description' => '虚拟交换机名称。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '虚拟交换机名称。',
                                  'type' => 'string',
                                  'example' => 'vsw-uf6iqwohr05dw4mxxxxxx',
                                ),
                              ),
                              'IngressEndpointStatus' => 
                              array (
                                'description' => 'IngressEndpoint状态。可能的值：

- Ready（已连接）。

- Pending（连接中）。

- Failed（连接失败）。

- Deleted（已删除）。

- Deleting（删除中）。',
                                'type' => 'string',
                                'example' => 'Ready',
                              ),
                              'NetworkServiceStatus' => 
                              array (
                                'description' => 'NetworkServiceStatus状态。可能的值：

- Ready（已连接）。

- Pending（连接中）。

- Failed（连接失败）。

- Deleted（已删除）。

- Deleting（删除中）。',
                                'type' => 'string',
                                'example' => 'Ready',
                              ),
                              'EndpointIps' => 
                              array (
                                'description' => '私网连接终端节点IP。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '私网连接终端节点IP。',
                                  'type' => 'string',
                                  'example' => '192.xxx.xxx.xxx',
                                ),
                              ),
                              'DomainName' => 
                              array (
                                'description' => '域名名称。',
                                'type' => 'string',
                                'example' => 'example.com',
                              ),
                              'ConnectBandwidth' => 
                              array (
                                'description' => '使用计算巢内网互联建立连接的限速带宽。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1536Mbps',
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'ReversePrivateVpcConnections' => 
                  array (
                    'description' => '反向私网连接信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '反向私网连接信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndpointId' => 
                        array (
                          'description' => '反向私网连接的终端节点ID。',
                          'type' => 'string',
                          'example' => 'ep-m5ei42370541816b****',
                        ),
                        'EndpointServiceId' => 
                        array (
                          'description' => '私网连接的终端节点服务ID。',
                          'type' => 'string',
                          'example' => 'epsrv-5ei07324541816bxxxx',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Tags' => 
              array (
                'description' => '用户自定义标签。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户自定义标签。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'key1',
                    ),
                    'Value' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'value1',
                    ),
                  ),
                ),
              ),
              'Outputs' => 
              array (
                'description' => '创建服务实例返回的输出字段。

- ROS模式下，返回模板所有输出字段。

- SPI模式下，返回ISV输出字段和计算巢附加功能输出字段。',
                'type' => 'string',
                'example' => '{
      "InstanceIds": [
            "i-hp38ofxl0dsyfi7z****"
      ]
}',
              ),
              'EndTime' => 
              array (
                'description' => '服务实例过期时间。',
                'type' => 'string',
                'example' => '2022-01-01T12:00:00',
              ),
              'Source' => 
              array (
                'description' => '服务实例来源。可能的值：

- User：计算巢用户。

- Market：云市场。

- Supplier：计算巢服务商。',
                'type' => 'string',
                'example' => 'User',
              ),
              'ServiceType' => 
              array (
                'description' => '服务类型。可能的值：

- private：部署在用户账户下的服务实例。

- managed：托管在服务商账户下的服务实例。

- operation：代运维服务实例

- poc：试用服务实例。',
                'type' => 'string',
                'example' => 'private',
              ),
              'PayType' => 
              array (
                'description' => '付费类型。取值范围：

- Permanent：永久购买。

- Subscription：云市场包年包月。

- PayAsYouGo：云市场按量付费。

- CustomFixTime：商家自定义固定时长。',
                'type' => 'string',
                'example' => 'Subscription',
              ),
              'LicenseMetadata' => 
              array (
                'description' => '许可证元数据。',
                'type' => 'string',
                'example' => '{"renewType":"MONTHLY"}',
              ),
              'Name' => 
              array (
                'description' => '服务实例名称。',
                'type' => 'string',
                'example' => 'TestName',
              ),
              'EnableUserPrometheus' => 
              array (
                'description' => '用户侧是否启用prometheus',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RdAccountLoginUrl' => 
              array (
                'description' => '服务实例对应的资源目录成员用户登录url',
                'type' => 'string',
                'example' => 'https://signin.aliyun.com/switchRole.htm?parentAlias=1307782318217247.onaliyun.com&roleName=ResourceDirectoryAccountAccessRole',
              ),
              'PredefinedParameterName' => 
              array (
                'description' => '套餐名称。',
                'type' => 'string',
                'example' => '套餐一',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID。',
                'type' => 'string',
                'example' => 'rg-aekzkt5buxxxxxx',
              ),
              'BizStatus' => 
              array (
                'description' => '服务实例的业务状态。可能的值：

- Normal：正常。

- Renewing：续费中。

- RenewFoiled：续费失败。

- Expired：已过期。',
                'type' => 'string',
                'example' => 'Normal',
              ),
              'GrafanaDashBoardUrl' => 
              array (
                'description' => 'grafana大盘链接。',
                'type' => 'string',
                'example' => 'https://g.xxxxxx.aliyun.com/d/xxxxxxxx-cn-mariadb/mysql-xxxxxxxx-quickstart-and-dashboard?orgId=355401&refresh=10s',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Deployed\\",\\n  \\"TemplateName\\": \\"模板1\\",\\n  \\"UpdateTime\\": \\"2021-05-20T00:00:00Z\\",\\n  \\"RequestId\\": \\"\\\\t\\\\n4DB0F536-B3BE-4F0D-BD29-E83FB56D550C\\",\\n  \\"ServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\",\\n  \\"CreateTime\\": \\"2021-05-20T00:00:00Z\\",\\n  \\"UserId\\": 1234567,\\n  \\"SupplierUid\\": 1964460391538545,\\n  \\"Service\\": {\\n    \\"Status\\": \\"Online\\",\\n    \\"PublishTime\\": \\"2021-05-21T00:00:00Z\\",\\n    \\"Version\\": \\"1\\",\\n    \\"DeployMetadata\\": \\"{\\\\n      \\\\\\"EstimateTime\\\\\\": null,\\\\n      \\\\\\"SupplierDeployMetadata\\\\\\": {\\\\n            \\\\\\"DeployTimeout\\\\\\": null\\\\n      },\\\\n      \\\\\\"TemplateConfigs\\\\\\": [\\\\n            {\\\\n                  \\\\\\"Name\\\\\\": \\\\\\"模板1\\\\\\",\\\\n                  \\\\\\"Url\\\\\\": \\\\\\"https://service-info-private.oss-cn-hangzhou.aliyuncs.com/130920852836****/template/af11ec5a-09a0-4aa7-970c-09b51e2a****.json\\\\\\",\\\\n                  \\\\\\"PredefinedParameters\\\\\\": [],\\\\n                  \\\\\\"AllowedRegions\\\\\\": [\\\\n                        \\\\\\"cn-hangzhou\\\\\\"\\\\n                  ]\\\\n            }\\\\n      ]\\\\n}\\",\\n    \\"DeployType\\": \\"ros\\",\\n    \\"ServiceId\\": \\"service-9c8a3522528b4fe8****\\",\\n    \\"SupplierUrl\\": \\"http://example.com\\",\\n    \\"ServiceProductUrl\\": \\"https://service-info-private.oss-cn-hangzhou.aliyuncs.com\\",\\n    \\"ServiceDocUrl\\": \\"http://example.com\\",\\n    \\"ServiceType\\": \\"private\\",\\n    \\"SupplierName\\": \\"A公司\\",\\n    \\"ServiceInfos\\": [\\n      {\\n        \\"Locale\\": \\"zh-CN\\",\\n        \\"Image\\": \\"https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png\\",\\n        \\"Name\\": \\"B数据库\\",\\n        \\"ShortDescription\\": \\"B是A公司自主设计并研发的开源分布式的关系型数据库\\"\\n      }\\n    ],\\n    \\"VersionName\\": \\"版本A\\",\\n    \\"UpgradableServiceVersions\\": [\\n      \\"1\\"\\n    ]\\n  },\\n  \\"Parameters\\": \\"{\\\\n      \\\\\\"param\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n  \\"Progress\\": 90,\\n  \\"StatusDetail\\": \\"deploy successfully\\",\\n  \\"OperationStartTime\\": \\"2021-12-29T06:48:56Z\\",\\n  \\"OperationEndTime\\": \\"2022-01-28T06:48:56Z\\",\\n  \\"OperatedServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\",\\n  \\"IsOperated\\": true,\\n  \\"EnableInstanceOps\\": true,\\n  \\"Resources\\": \\"[\\\\n      {\\\\n            \\\\\\"StackId\\\\\\": \\\\\\"stack-xxx\\\\\\"\\\\n      }\\\\n]\\",\\n  \\"NetworkConfig\\": {\\n    \\"EndpointServiceId\\": \\"epsrv-5ei07324541816bxxxx\\",\\n    \\"EndpointId\\": \\"ep-m5ei37240541816b****\\",\\n    \\"PrivateVpcConnections\\": [\\n      {\\n        \\"EndpointId\\": \\"ep-m5ei37240541816b****\\",\\n        \\"EndpointServiceId\\": \\"epsrv-5ei07324541816bxxxx\\",\\n        \\"PrivateZoneName\\": \\"test.computenest.aliyuncs.com\\",\\n        \\"ConnectionConfigs\\": [\\n          {\\n            \\"VpcId\\": \\"vpc-bp1vwnn14rqpyiczj****\\",\\n            \\"SecurityGroups\\": [\\n              \\"sg-m5ec4mvoq9egn7xxxxxx\\"\\n            ],\\n            \\"VSwitches\\": [\\n              \\"vsw-uf6iqwohr05dw4mxxxxxx\\"\\n            ],\\n            \\"IngressEndpointStatus\\": \\"Ready\\",\\n            \\"NetworkServiceStatus\\": \\"Ready\\",\\n            \\"EndpointIps\\": [\\n              \\"192.xxx.xxx.xxx\\"\\n            ],\\n            \\"DomainName\\": \\"example.com\\",\\n            \\"ConnectBandwidth\\": 0\\n          }\\n        ]\\n      }\\n    ],\\n    \\"ReversePrivateVpcConnections\\": [\\n      {\\n        \\"EndpointId\\": \\"ep-m5ei42370541816b****\\",\\n        \\"EndpointServiceId\\": \\"epsrv-5ei07324541816bxxxx\\"\\n      }\\n    ]\\n  },\\n  \\"Tags\\": [\\n    {\\n      \\"Key\\": \\"key1\\",\\n      \\"Value\\": \\"value1\\"\\n    }\\n  ],\\n  \\"Outputs\\": \\"{\\\\n      \\\\\\"InstanceIds\\\\\\": [\\\\n            \\\\\\"i-hp38ofxl0dsyfi7z****\\\\\\"\\\\n      ]\\\\n}\\",\\n  \\"EndTime\\": \\"2022-01-01T12:00:00\\",\\n  \\"Source\\": \\"User\\",\\n  \\"ServiceType\\": \\"private\\",\\n  \\"PayType\\": \\"Subscription\\",\\n  \\"LicenseMetadata\\": \\"{\\\\\\"renewType\\\\\\":\\\\\\"MONTHLY\\\\\\"}\\",\\n  \\"Name\\": \\"TestName\\",\\n  \\"EnableUserPrometheus\\": true,\\n  \\"RdAccountLoginUrl\\": \\"https://signin.aliyun.com/switchRole.htm?parentAlias=1307782318217247.onaliyun.com&roleName=ResourceDirectoryAccountAccessRole\\",\\n  \\"PredefinedParameterName\\": \\"套餐一\\",\\n  \\"ResourceGroupId\\": \\"rg-aekzkt5buxxxxxx\\",\\n  \\"BizStatus\\": \\"Normal\\",\\n  \\"GrafanaDashBoardUrl\\": \\"https://g.xxxxxx.aliyun.com/d/xxxxxxxx-cn-mariadb/mysql-xxxxxxxx-quickstart-and-dashboard?orgId=355401&refresh=10s\\"\\n}","type":"json"}]',
      'title' => '查询服务实例的详细信息',
      'summary' => '查询指定服务实例的详细信息。',
    ),
    'ListServiceInstances' => 
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'BBBAAfu+XtuBE55iRLHEYYuojI4=',
          ),
        ),
        3 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '过滤器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '过滤器。',
              'type' => 'object',
              'properties' => 
              array (
                'Value' => 
                array (
                  'description' => '过滤器值列表。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '过滤器值列表。N的取值范围：1~10。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'value1',
                  ),
                  'required' => false,
                  'maxItems' => 20,
                ),
                'Name' => 
                array (
                  'description' => '过滤器名称，可选择一个或者多个名称进行查询。取值范围：

- Name：按服务名称查询。
若您需要模糊搜索，则在value处输入内容格式为：*xxx*。例如服务名称为我的服务，在模糊搜索时，可输入*我的*或者*服务*进行搜索。

- ServiceInstanceId：服务实例ID

- ServiceId：服务ID

- UserId：用户ID

- Version：服务版本

- Status：服务实例状态

- DeployType：部署类型

- ServiceType：服务类型

- OperationStartTimeBefore：代运维服务开始前

- OperationStartTimeAfter：代运维服务开始后

- OperationEndTimeBefore：代运维服务结束前

- OperationEndTimeAfter：代运维服务结束后

- OperatedServiceInstanceId：私有部署服务下代运维服务实例ID

- OperationServiceInstanceId：纯代运维服务下的服务实例ID

- EnableInstanceOps：服务实例是否开通代运维服务的功能',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ServiceInstanceId',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        4 => 
        array (
          'name' => 'ShowDeleted',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否显示已删除。可能的值：

- true：显示

- false：不显示',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户自定义标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户自定义标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'key1',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value1',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 50,
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
            'example' => 'rg-aekzkt5buxxxxxx',
          ),
        ),
      ),
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
                'description' => '下一个查询开始token',
                'type' => 'string',
                'example' => 'AAAAAfu+XtuBE55iRLHEYYuojI4=',
              ),
              'RequestId' => 
              array (
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => 'E50287CB-AABF-4877-92C0-289B339A1546',
              ),
              'TotalCount' => 
              array (
                'description' => '结果总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时，每页显示的行数。每页最大100行，默认为20行。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'ServiceInstances' => 
              array (
                'description' => '服务实例信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务实例信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '服务实例状态。可能值：

- Created：已创建

- Deploying：部署中

- DeployedFailed：部署失败

- Deployed：已部署

- Upgrading：升级中

- Deleting：删除中

- Deleted：已删除
',
                      'type' => 'string',
                      'example' => 'Deployed',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2021-05-20T00:00:00Z',
                    ),
                    'Name' => 
                    array (
                      'description' => '服务实例名称。',
                      'type' => 'string',
                      'example' => 'TestName',
                    ),
                    'ServiceInstanceId' => 
                    array (
                      'description' => '服务实例ID。',
                      'type' => 'string',
                      'example' => 'si-d6ab3a63ccbb4b17****',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2021-05-20T00:00:00Z',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户AliUid。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1234567',
                    ),
                    'Service' => 
                    array (
                      'description' => '服务。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Status' => 
                        array (
                          'description' => '服务状态。',
                          'type' => 'string',
                          'example' => 'Online',
                        ),
                        'PublishTime' => 
                        array (
                          'description' => '发布时间。',
                          'type' => 'string',
                          'example' => '2021-05-21T00:00:00Z',
                        ),
                        'Version' => 
                        array (
                          'description' => '服务版本。',
                          'type' => 'string',
                          'example' => '1.0',
                        ),
                        'DeployType' => 
                        array (
                          'description' => '部署类型。可能值：

- ros：通过ROS部署

- terraform：通过Terraform部署

- ack：通过ACK部署

- spi：调用SPI部署

- operation：代运维服务部署',
                          'type' => 'string',
                          'example' => 'ros',
                        ),
                        'ServiceId' => 
                        array (
                          'description' => '服务ID。',
                          'type' => 'string',
                          'example' => 'service-0e6fca6a51a54420****',
                        ),
                        'SupplierUrl' => 
                        array (
                          'description' => '服务商地址。',
                          'type' => 'string',
                          'example' => 'http://example.com',
                        ),
                        'ServiceType' => 
                        array (
                          'description' => '服务类型。可能值：

- private：部署在用户账户下

- managed：托管在服务商账户下

- operation：代运维服务

- poc：试用服务实例。',
                          'type' => 'string',
                          'example' => 'private',
                        ),
                        'SupplierName' => 
                        array (
                          'description' => '服务商名称。',
                          'type' => 'string',
                          'example' => 'A有限公司',
                        ),
                        'ServiceInfos' => 
                        array (
                          'description' => '服务信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '服务信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Locale' => 
                              array (
                                'description' => '服务实例语言。',
                                'type' => 'string',
                                'example' => 'zh-CN',
                              ),
                              'Image' => 
                              array (
                                'description' => '服务图标地址。',
                                'type' => 'string',
                                'example' => 'https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png',
                              ),
                              'Name' => 
                              array (
                                'description' => '服务名称。',
                                'type' => 'string',
                                'example' => 'B数据库',
                              ),
                              'ShortDescription' => 
                              array (
                                'description' => '服务概述。',
                                'type' => 'string',
                                'example' => 'B是A公司自主设计并研发的开源分布式的关系型数据库',
                              ),
                            ),
                          ),
                        ),
                        'VersionName' => 
                        array (
                          'description' => '服务商自定义版本名称。',
                          'type' => 'string',
                          'example' => '版本A',
                        ),
                        'DeployMetadata' => 
                        array (
                          'description' => '存储服务部署配置的信息。存储的信息与部署类型有关，不同的部署类型存储的数据格式不一样，因此使用JSON String格式进行数据存储。',
                          'type' => 'string',
                          'example' => '{
      "EstimateTime": null,
      "SupplierDeployMetadata": {
            "DeployTimeout": null
      },
      "TemplateConfigs": [
            {
                  "Name": "模板1",
                  "Url": "https://service-info-private.oss-cn-hangzhou.aliyuncs.com/130920852836****/template/af11ec5a-09a0-4aa7-970c-09b51e2a****.json",
                  "PredefinedParameters": [],
                  "AllowedRegions": [
                        "cn-hangzhou"
                  ]
            }
      ]
}',
                        ),
                        'EnablePrivateVpcConnection' => 
                        array (
                          'description' => '是否已开启私网连接。可能的值：

- true：已开启

- false：未开启',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'SourceSupplierName' => 
                        array (
                          'description' => '分销源服务商名称。',
                          'type' => 'string',
                          'example' => 'A有限公司',
                        ),
                      ),
                    ),
                    'Parameters' => 
                    array (
                      'description' => '服务实例参数信息。',
                      'type' => 'string',
                      'example' => '{"param":"value"}',
                    ),
                    'Progress' => 
                    array (
                      'description' => '服务实例的部署进度，单位：%。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '90',
                    ),
                    'StatusDetail' => 
                    array (
                      'description' => '服务实例的部署信息描述。',
                      'type' => 'string',
                      'example' => 'deploy successfully',
                    ),
                    'TemplateName' => 
                    array (
                      'description' => '模板名称。',
                      'type' => 'string',
                      'example' => '模板1',
                    ),
                    'OperatedServiceInstanceId' => 
                    array (
                      'description' => '被代运维的服务实例ID。',
                      'type' => 'string',
                      'example' => 'si-d6ab3a63ccbb4b17****',
                    ),
                    'OperationStartTime' => 
                    array (
                      'description' => '代运维开始时间。',
                      'type' => 'string',
                      'example' => '2021-12-29T06:48:56Z',
                    ),
                    'OperationEndTime' => 
                    array (
                      'description' => '代运维结束时间。',
                      'type' => 'string',
                      'example' => '2021-12-29T06:48:56Z',
                    ),
                    'EnableInstanceOps' => 
                    array (
                      'description' => '服务实例是否有代运维功能。可能的值：

- true：服务实例有代运维功能

- false：服务实例没有代运维功能
',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Tags' => 
                    array (
                      'description' => '用户自定义标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '用户自定义标签。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Key' => 
                          array (
                            'description' => '标签键。',
                            'type' => 'string',
                            'example' => 'key1',
                          ),
                          'Value' => 
                          array (
                            'description' => '标签值。',
                            'type' => 'string',
                            'example' => 'value1',
                          ),
                        ),
                      ),
                    ),
                    'Source' => 
                    array (
                      'description' => '服务实例创建来源。',
                      'type' => 'string',
                      'example' => 'Supplier',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '服务实例过期时间。',
                      'type' => 'string',
                      'example' => '2022-01-01T12:00:00',
                    ),
                    'ServiceType' => 
                    array (
                      'description' => '服务类型。可能的值：

- private：部署在用户账户下的服务实例。

- managed：托管在服务商账户下的服务实例。

- operation：代运维服务实例

- poc：试用服务实例。',
                      'type' => 'string',
                      'example' => 'private',
                    ),
                    'PayType' => 
                    array (
                      'description' => '付费类型。取值范围：

- Permanent：永久购买。

- Subscription：云市场包年包月。

- PayAsYouGo：云市场按量付费。

- CustomFixTime：商家自定义固定时长。',
                      'type' => 'string',
                      'example' => 'Subscription',
                    ),
                    'IsOperated' => 
                    array (
                      'description' => '服务实例的代运维功能是否开启。可能值：

- true：服务实例的代运维功能已开启

- false：服务实例的代运维功能未开启',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID。',
                      'type' => 'string',
                      'example' => 'si-d6ab3a63ccxxxxxx',
                    ),
                    'BizStatus' => 
                    array (
                      'description' => '服务实例的业务状态。可能的值：

- Normal：正常。

- Renewing：续费中。

- RenewFoiled：续费失败。

- Expired：已过期。',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"AAAAAfu+XtuBE55iRLHEYYuojI4=\\",\\n  \\"RequestId\\": \\"E50287CB-AABF-4877-92C0-289B339A1546\\",\\n  \\"TotalCount\\": 100,\\n  \\"MaxResults\\": 20,\\n  \\"ServiceInstances\\": [\\n    {\\n      \\"Status\\": \\"Deployed\\",\\n      \\"UpdateTime\\": \\"2021-05-20T00:00:00Z\\",\\n      \\"Name\\": \\"TestName\\",\\n      \\"ServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\",\\n      \\"CreateTime\\": \\"2021-05-20T00:00:00Z\\",\\n      \\"UserId\\": 1234567,\\n      \\"Service\\": {\\n        \\"Status\\": \\"Online\\",\\n        \\"PublishTime\\": \\"2021-05-21T00:00:00Z\\",\\n        \\"Version\\": \\"1.0\\",\\n        \\"DeployType\\": \\"ros\\",\\n        \\"ServiceId\\": \\"service-0e6fca6a51a54420****\\",\\n        \\"SupplierUrl\\": \\"http://example.com\\",\\n        \\"ServiceType\\": \\"private\\",\\n        \\"SupplierName\\": \\"A有限公司\\",\\n        \\"ServiceInfos\\": [\\n          {\\n            \\"Locale\\": \\"zh-CN\\",\\n            \\"Image\\": \\"https://example.com/service-image/c1c4a559-cc60-4af1-b976-98f356602462.png\\",\\n            \\"Name\\": \\"B数据库\\",\\n            \\"ShortDescription\\": \\"B是A公司自主设计并研发的开源分布式的关系型数据库\\"\\n          }\\n        ],\\n        \\"VersionName\\": \\"版本A\\",\\n        \\"DeployMetadata\\": \\"{\\\\n      \\\\\\"EstimateTime\\\\\\": null,\\\\n      \\\\\\"SupplierDeployMetadata\\\\\\": {\\\\n            \\\\\\"DeployTimeout\\\\\\": null\\\\n      },\\\\n      \\\\\\"TemplateConfigs\\\\\\": [\\\\n            {\\\\n                  \\\\\\"Name\\\\\\": \\\\\\"模板1\\\\\\",\\\\n                  \\\\\\"Url\\\\\\": \\\\\\"https://service-info-private.oss-cn-hangzhou.aliyuncs.com/130920852836****/template/af11ec5a-09a0-4aa7-970c-09b51e2a****.json\\\\\\",\\\\n                  \\\\\\"PredefinedParameters\\\\\\": [],\\\\n                  \\\\\\"AllowedRegions\\\\\\": [\\\\n                        \\\\\\"cn-hangzhou\\\\\\"\\\\n                  ]\\\\n            }\\\\n      ]\\\\n}\\",\\n        \\"EnablePrivateVpcConnection\\": false,\\n        \\"SourceSupplierName\\": \\"A有限公司\\"\\n      },\\n      \\"Parameters\\": \\"{\\\\\\"param\\\\\\":\\\\\\"value\\\\\\"}\\",\\n      \\"Progress\\": 90,\\n      \\"StatusDetail\\": \\"deploy successfully\\",\\n      \\"TemplateName\\": \\"模板1\\",\\n      \\"OperatedServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\",\\n      \\"OperationStartTime\\": \\"2021-12-29T06:48:56Z\\",\\n      \\"OperationEndTime\\": \\"2021-12-29T06:48:56Z\\",\\n      \\"EnableInstanceOps\\": true,\\n      \\"Tags\\": [\\n        {\\n          \\"Key\\": \\"key1\\",\\n          \\"Value\\": \\"value1\\"\\n        }\\n      ],\\n      \\"Source\\": \\"Supplier\\",\\n      \\"EndTime\\": \\"2022-01-01T12:00:00\\",\\n      \\"ServiceType\\": \\"private\\",\\n      \\"PayType\\": \\"Subscription\\",\\n      \\"IsOperated\\": true,\\n      \\"ResourceGroupId\\": \\"si-d6ab3a63ccxxxxxx\\",\\n      \\"BizStatus\\": \\"Normal\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询服务实例列表',
      'summary' => '查询服务实例列表。',
    ),
    'ListServiceUsages' => 
    array (
      'summary' => '查看用户自己当前的服务使用申请。',
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
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
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
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAWns8w4MmhzeptXVRG0PUEU=',
          ),
        ),
        2 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '过滤器。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '过滤器。',
              'type' => 'object',
              'properties' => 
              array (
                'Name' => 
                array (
                  'description' => '过滤器名称，可选择一个或者多个名称进行查询。取值范围：

- ServiceId：服务ID。

- ServiceName：服务名称。

- Status：服务状态。

- SupplierName：服务商名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ServiceId',
                ),
                'Value' => 
                array (
                  'description' => '过滤器值列表。N的取值范围：1~10。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '过滤器值列表。N的取值范围：1~10。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '5',
                  ),
                  'required' => false,
                  'maxItems' => 10,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
          ),
        ),
        3 => 
        array (
          'name' => 'SupplierRole',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务商角色。',
            'type' => 'string',
            'required' => false,
            'example' => 'Supplier',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '18AD0960-A9FE-1AC8-ADF8-22131Fxxxxxx',
              ),
              'NextToken' => 
              array (
                'title' => 'NextToken',
                'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                'type' => 'string',
                'example' => 'AAAAAYChudnQUoBH+mGWFpb6oP0=',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'ServiceUsages' => 
              array (
                'description' => '服务使用情况。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '服务使用情况。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserAliUid' => 
                    array (
                      'description' => '用户阿里云Uid。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '127383705958xxxx',
                    ),
                    'ServiceId' => 
                    array (
                      'description' => '服务ID。',
                      'type' => 'string',
                      'example' => 'service-c9f36ec6d19b4exxxxxx',
                    ),
                    'ServiceName' => 
                    array (
                      'description' => '服务名称。',
                      'type' => 'string',
                      'example' => '部署链接权限申请',
                    ),
                    'SupplierName' => 
                    array (
                      'description' => '服务商名称。',
                      'type' => 'string',
                      'example' => '验收测试',
                    ),
                    'Status' => 
                    array (
                      'description' => '服务状态。可能值：

- Submitted：已提交（待审批）。

- Approved：已通过。

- Rejected：已拒绝。

- Canceled：已取消。',
                      'type' => 'string',
                      'example' => 'Submitted',
                    ),
                    'Comments' => 
                    array (
                      'description' => '审批的备注信息。',
                      'type' => 'string',
                      'example' => '审核通过。',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2022-05-25T02:02:02Z',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间。',
                      'type' => 'string',
                      'example' => '2022-05-25T02:02:02Z',
                    ),
                    'UserInformation' => 
                    array (
                      'description' => '用户信息。',
                      'type' => 'object',
                      'additionalProperties' => 
                      array (
                        'type' => 'string',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"18AD0960-A9FE-1AC8-ADF8-22131Fxxxxxx\\",\\n  \\"NextToken\\": \\"AAAAAYChudnQUoBH+mGWFpb6oP0=\\",\\n  \\"MaxResults\\": 20,\\n  \\"TotalCount\\": 1,\\n  \\"ServiceUsages\\": [\\n    {\\n      \\"UserAliUid\\": 0,\\n      \\"ServiceId\\": \\"service-c9f36ec6d19b4exxxxxx\\",\\n      \\"ServiceName\\": \\"部署链接权限申请\\",\\n      \\"SupplierName\\": \\"验收测试\\",\\n      \\"Status\\": \\"Submitted\\",\\n      \\"Comments\\": \\"审核通过。\\",\\n      \\"CreateTime\\": \\"2022-05-25T02:02:02Z\\",\\n      \\"UpdateTime\\": \\"2022-05-25T02:02:02Z\\",\\n      \\"UserInformation\\": {\\n        \\"key\\": \\"\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看当前服务使用申请',
    ),
    'GetServiceEstimateCost' => 
    array (
      'summary' => '查询创建服务实例的预估价格。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '137755',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest18JMDW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-wulanchabu',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'service-16fbd358d75e49xxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'draft',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'Custom_Image_Ecs',
          ),
        ),
        4 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '部署服务实例输入的参数。',
            'type' => 'object',
            'required' => false,
            'example' => '{\\"PayType\\":\\"PostPaid\\",\\"InstancePassword\\":\\"xxxxxxxxxx\\",\\"EcsInstanceType\\":\\"ecs.g6.large\\",\\"VSwitchId\\":\\"vsw-0jlueyydpuekoxxxxxxxx\\",\\"VpcId\\":\\"vpc-0jlps6mjbgvpqxxxxxxxx\\",\\"ZoneId\\":\\"cn-wulanchabu-a\\",\\"Enable\\":false,\\"RegionId\\":\\"cn-wulanchabu\\"}',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'mRdxWuW2ts',
          ),
        ),
        6 => 
        array (
          'name' => 'ServiceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'si-d6ab3a63ccbb4b17****',
          ),
        ),
        7 => 
        array (
          'name' => 'SpecificationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '套餐名称。',
            'type' => 'string',
            'required' => false,
            'example' => '套餐一',
          ),
        ),
        8 => 
        array (
          'name' => 'Commodity',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '云市场购买订单时间信息。',
            'type' => 'object',
            'properties' => 
            array (
              'PayPeriodUnit' => 
              array (
                'description' => '购买时长的单位，可选值：

- Year：年。

- Month：月。

- Day：日。',
                'type' => 'string',
                'required' => false,
                'example' => 'Month',
              ),
              'PayPeriod' => 
              array (
                'description' => '购买时长。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1',
              ),
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E73F09DC-6C13-5CB1-A10F-7A4E125ABD2C',
              ),
              'Resources' => 
              array (
                'description' => '资源列表。',
                'type' => 'object',
                'example' => '{
      "ECSInstances":{
        "Type":"ALIYUN::ECS::InstanceGroup",
        "Success":true,
        "Result":{
          "Order":{
            "Currency":"CNY",
            "RuleIds":[
              1752723
            ],
            "DetailInfos":{
              "ResourcePriceModel":[
                {
                  "Resource":"bandwidth",
                  "TradeAmount":0.0,
                  "SubRuleIds":[],
                  "OriginalAmount":0.0,
                  "DiscountAmount":0.0
                },
                {
                  "Resource":"image",
                  "TradeAmount":0.0,
                  "SubRuleIds":[],
                  "OriginalAmount":0.0,
                  "DiscountAmount":0.0
                },
                {
                  "Resource":"instanceType",
                  "TradeAmount":0.006966,
                  "SubRuleIds":[],
                  "OriginalAmount":0.45,
                  "DiscountAmount":0.443034
                },
                {
                  "Resource":"systemDisk",
                  "TradeAmount":0.000867,
                  "SubRuleIds":[],
                  "OriginalAmount":0.056,
                  "DiscountAmount":0.055133
                },
                {
                  "Resource":"dataDisk",
                  "TradeAmount":0.002167,
                  "SubRuleIds":[],
                  "OriginalAmount":0.14,
                  "DiscountAmount":0.137833
                }
              ]
            }',
              ),
              'Commodity' => 
              array (
                'description' => '云市场购买订单时间信息。',
                'type' => 'object',
                'example' => '{\\"PayPeriodUnit\\":Month,\\"PayPeriod\\":1}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E73F09DC-6C13-5CB1-A10F-7A4E125ABD2C\\",\\n  \\"Resources\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Commodity\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '查询创建服务实例的预估价格',
    ),
    'GetUploadCredentials' => 
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FileName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '文件名称。',
            'type' => 'string',
            'required' => true,
            'example' => '测试文件.json',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<SupplierUploadCredentialModel>',
            'description' => 'PlainResult<SupplierUploadCredentialModel>',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessKeyId' => 
                  array (
                    'title' => 'ak',
                    'description' => '访问密钥ID。',
                    'type' => 'string',
                    'example' => 'STS.NUCe19W1FKaHAYAhe********',
                  ),
                  'AccessKeySecret' => 
                  array (
                    'title' => 'sk',
                    'description' => '访问密钥secret值。',
                    'type' => 'string',
                    'example' => '8LQGp59mY23pcXeTdcvSA1cUQZBeD92sFrXi********',
                  ),
                  'SecurityToken' => 
                  array (
                    'title' => '安全token',
                    'description' => '安全token。',
                    'type' => 'string',
                    'example' => 'CAISzQN1q6Ft5B2yfSjIr5b2LouNuu5n/KOjQ3/wjGUHYdlagYGdmzz2IH1Le3NrBO8esfgymGFU6v8dlo1dYLQeHhadQI5cs80HtFqLSNaE65LswPlZ2M2ISETPJzfV9pCK',
                  ),
                  'ExpireDate' => 
                  array (
                    'title' => '过期时间',
                    'description' => '权限过期时间。',
                    'type' => 'string',
                    'example' => '2023-05-18T12:27:59Z',
                  ),
                  'RegionId' => 
                  array (
                    'title' => '地域',
                    'description' => '地域ID。',
                    'type' => 'string',
                    'example' => 'cn-hangzhou',
                  ),
                  'BucketName' => 
                  array (
                    'title' => '仓库名称',
                    'description' => '存储空间名称。',
                    'type' => 'string',
                    'example' => 'service-info-private',
                  ),
                  'Key' => 
                  array (
                    'title' => '文件key',
                    'description' => '具体的Key。',
                    'type' => 'string',
                    'example' => '221514575922756034/cn-hangzhou/d57c62fbd508xxxxxxxx.json',
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '接口调用结果标识，true表示成功，false表示失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '调用返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '请求返回的信息。',
                'type' => 'string',
                'example' => 'Success.',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FCC3321E-D518-1BC4-861E-588E9D4DAFB7',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"AccessKeyId\\": \\"STS.NUCe19W1FKaHAYAhe********\\",\\n    \\"AccessKeySecret\\": \\"8LQGp59mY23pcXeTdcvSA1cUQZBeD92sFrXi********\\",\\n    \\"SecurityToken\\": \\"CAISzQN1q6Ft5B2yfSjIr5b2LouNuu5n/KOjQ3/wjGUHYdlagYGdmzz2IH1Le3NrBO8esfgymGFU6v8dlo1dYLQeHhadQI5cs80HtFqLSNaE65LswPlZ2M2ISETPJzfV9pCK\\",\\n    \\"ExpireDate\\": \\"2023-05-18T12:27:59Z\\",\\n    \\"RegionId\\": \\"cn-hangzhou\\",\\n    \\"BucketName\\": \\"service-info-private\\",\\n    \\"Key\\": \\"221514575922756034/cn-hangzhou/d57c62fbd508xxxxxxxx.json\\"\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"Success.\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"FCC3321E-D518-1BC4-861E-588E9D4DAFB7\\"\\n}","type":"json"}]',
      'title' => '获取文件上传的访问密钥',
      'summary' => '获取上传文件的访问密钥。',
    ),
    'ModifyServiceInstanceResources' => 
    array (
      'summary' => '修改服务实例的资源信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ServiceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'si-d8a0cc2a1ee04dce****',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceInstanceResourcesAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例资源的操作类型。可能的值：

- Import：导入。

- UnImport：取消导入。',
            'type' => 'string',
            'required' => false,
            'example' => 'Import',
          ),
        ),
        2 => 
        array (
          'name' => 'Resources',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '导入的资源。',
            'type' => 'string',
            'required' => false,
            'example' => '{
  "RegionId": "cn-hangzhou",
  "Type": "ResourceIds",
  "ResourceIds": {
    "ALIYUN::ECS::INSTANCE": ["i-xxx", "i-yyy"],
    "ALIYUN::RDS::INSTANCE": ["rm-xxx", "rm-yyy"],
    "ALIYUN::VPC::VPC": ["vpc-xxx", "vpc-yyy"],
    "ALIYUN::SLB::INSTANCE": ["lb-xxx", "lb-yyy"]
  }
}',
          ),
        ),
      ),
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
                'example' => '46577928-3162-15A6-9084-69820EB9xxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"46577928-3162-15A6-9084-69820EB9xxxx\\"\\n}","type":"json"}]',
      'title' => '修改服务实例包含的资源',
    ),
    'ContinueDeployServiceInstance' => 
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'si-0e6fca6a51a54420****',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        3 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例配置参数。',
            'type' => 'string',
            'required' => false,
            'example' => '{"NodeCount": 3, "SystemDiskSize": 40, "InstancePassword": "******"}',
          ),
        ),
        4 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检，包括权限、实例状态校验等。可能的值：

- true：发送请求，不创建服务实例。

- false：发送请求，检查通过后创建服务实例。',
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
                'example' => '82DF27ED-E538-5AC0-A11C-39334A873189',
              ),
              'DryRunResult' => 
              array (
                'description' => '校验结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ParametersNotAllowedToBeModified' => 
                  array (
                    'description' => '不允许修改的参数。修改参数一定会引发校验错误。

> 仅在DryRun为true时返回结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '不允许修改的参数。修改参数一定会引发校验错误。

> 仅在DryRun为true时返回结果。',
                      'type' => 'string',
                      'example' => 'cidr',
                    ),
                  ),
                  'ParametersConditionallyAllowedToBeModified' => 
                  array (
                    'description' => '可能允许修改的参数。 修改参数是否引起校验错误，取决于参数的取值。
> 仅在DryRun为true时返回结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可能允许修改的参数。 修改参数是否引起校验错误，取决于参数的取值。
> 仅在DryRun为true时返回结果。',
                      'type' => 'string',
                      'example' => 'name',
                    ),
                  ),
                  'ParametersAllowedToBeModified' => 
                  array (
                    'description' => '允许修改的参数。修改参数不会引发校验错误。
> 仅在DryRun为true时返回值。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '允许修改的参数。修改参数不会引发校验错误。
> 仅在DryRun为true时返回值。',
                      'type' => 'string',
                      'example' => 'description',
                    ),
                  ),
                ),
              ),
              'ServiceInstanceId' => 
              array (
                'description' => '服务实例ID。',
                'type' => 'string',
                'example' => 'si-d6ab3a63ccbb4b17****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"82DF27ED-E538-5AC0-A11C-39334A873189\\",\\n  \\"DryRunResult\\": {\\n    \\"ParametersNotAllowedToBeModified\\": [\\n      \\"cidr\\"\\n    ],\\n    \\"ParametersConditionallyAllowedToBeModified\\": [\\n      \\"name\\"\\n    ],\\n    \\"ParametersAllowedToBeModified\\": [\\n      \\"description\\"\\n    ]\\n  },\\n  \\"ServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\"\\n}","type":"json"}]',
      'title' => '继续部署服务实例',
      'summary' => '服务实例部署失败后，调用ContinueDeployServiceInstance继续部署该服务实例。',
    ),
    'CreateServiceInstance' => 
    array (
      'summary' => '创建并部署服务实例。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。可能的值：

- cn-hangzhou：华东1（杭州） 。

- ap-southeast-1：新加坡。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例名称。格式要求如下：

- 长度不超过64个字符。

- 必须以数字或英文字母开头，可包含数字、英文字母、短划线（-）和下划线（_）。',
            'type' => 'string',
            'required' => false,
            'example' => 'TestName',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'service-0e6fca6a51a54420****',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务版本。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '服务实例部署的参数。

> 若服务实例包含部署地域信息，则需在部署参数中填写。',
            'type' => 'object',
            'required' => false,
            'example' => '{
      "RegionId": "cn-hangzhou"
      "NodeCount": 3,
      "SystemDiskSize": 40,
      "InstancePassword": "******"
}',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        6 => 
        array (
          'name' => 'TemplateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板名称，服务支持多模板时需要指定模板名称。',
            'type' => 'string',
            'required' => false,
            'example' => '模板1',
          ),
        ),
        7 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzuqyxxxxxx',
          ),
        ),
        8 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户ID',
            'description' => '用户ID。',
            'type' => 'string',
            'required' => false,
            'example' => '1563457855xxxxxx',
          ),
        ),
        9 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '用户自定义标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '用户自定义标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'key1',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
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
        10 => 
        array (
          'name' => 'SpecificationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '套餐规格名称。',
            'type' => 'string',
            'required' => false,
            'example' => '套餐一',
          ),
        ),
        11 => 
        array (
          'name' => 'DryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否对此次创建请求执行预检，包括权限、实例状态校验等。可能的值：

- true：发送请求，不创建服务实例。

- false：发送请求，检查通过后创建服务实例。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        12 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例的释放时间。

> 仅支持托管版场景中，服务商对自己的服务实例设置该参数。',
            'type' => 'string',
            'format' => 'iso8601',
            'required' => false,
            'example' => '2023-12-12T03:13:05Z',
          ),
        ),
      ),
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
                'description' => '服务实例状态。可能值：

- Created：已创建。

- Deploying：部署中。

- DeployedFailed：部署失败。

- Deployed：已部署。

- Upgrading：升级中。

- Deleting：删除中。

- Deleted：已删除。

- DeletedFailed：删除失败。',
                'type' => 'string',
                'example' => 'Created',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4DB0F536-B3BE-4F0D-BD29-E83FB56D****',
              ),
              'ServiceInstanceId' => 
              array (
                'description' => '服务实例ID。',
                'type' => 'string',
                'example' => 'si-d6ab3a63ccbb4b17****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Created\\",\\n  \\"RequestId\\": \\"4DB0F536-B3BE-4F0D-BD29-E83FB56D****\\",\\n  \\"ServiceInstanceId\\": \\"si-d6ab3a63ccbb4b17****\\"\\n}","type":"json"}]',
      'title' => '创建并部署服务实例',
    ),
    'DeleteServiceInstances' => 
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
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '123e4567-e89b-12d3-a456-426655440000',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceInstanceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '服务实例ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务实例ID。N的取值范围：1~100。

> 若要删除多个服务实例，服务实例间用&&隔开。例如：ServiceInstanceId.1=xxx&&ServiceInstanceId.2=yyy。',
              'type' => 'string',
              'required' => false,
              'example' => 'si-d6ab3a63ccbb4b17****',
            ),
            'required' => true,
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DB140E67-D75F-5585-946E-41D8DC8F4E00',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DB140E67-D75F-5585-946E-41D8DC8F4E00\\"\\n}","type":"json"}]',
      'title' => '删除服务实例',
      'summary' => '调用DeleteServiceInstances删除服务实例。',
    ),
    'UpdateServiceInstanceSpec' => 
    array (
      'summary' => '变配服务实例。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '163731',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest7EAOIM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServiceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'si-0e6fca6a51a54420****',
          ),
        ),
        1 => 
        array (
          'name' => 'PredefinedParametersName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '套餐名称。',
            'type' => 'string',
            'required' => false,
            'example' => '套餐一',
          ),
        ),
        2 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '服务实例配置参数。',
            'type' => 'object',
            'required' => false,
            'example' => '{\\"EcsInstanceParameter\\":\\"4vCPU 8GiB\\",\\"ZoneId\\":\\"cn-heyuan-a\\",\\"SystemDiskSize\\":50,\\"DataDiskSize\\":150,\\"InternetMaxBandwidthOut\\":2,\\"RegionId\\":\\"cn-heyuan\\"}',
          ),
        ),
        3 => 
        array (
          'name' => 'OperationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '变配操作名称。',
            'type' => 'string',
            'required' => false,
            'example' => '套餐变配',
          ),
        ),
        4 => 
        array (
          'name' => 'EnableUserPrometheus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户侧是否启用Prometheus。可选值：

- true：启用。

- false：不启用。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '10CM943JP0EN9D51H',
          ),
        ),
      ),
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
                'example' => 'DF0F666F-FBBC-55C3-A368-C955DE7B4839',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2306175xxxxxxxx',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DF0F666F-FBBC-55C3-A368-C955DE7B4839\\",\\n  \\"OrderId\\": \\"2306175xxxxxxxx\\"\\n}","type":"json"}]',
      'title' => '变配服务实例',
    ),
    'PushMeteringData' => 
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
        'abilityTreeCode' => '186185',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest18JMDW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Metering',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '示例中的参数说明如下：

- InstanceId：云市场实例ID 。参数类型为String。
- StartTime：计量开始时间。单位秒（格式为Unix时间戳）。参数类型为Long。
- EndTime：计量结束时间。单位秒（格式为Unix时间戳）。参数类型为Long。
- Entities：计量实体对象。参数类型为List<Map>。
    - Key：计量项属性名称。参数类型为String。
        - Frequency：使用次数（次）。
        - Period：使用小时时长（秒）。
     <props="china">注意：请求参数中的时长单位为秒，而计费单位为小时，因此计费时会转换为小时，如推送19:00-20:00的用量1800，计费价格为1元/小时，按小时出账该时段费用为1800 / 3600 x 1 = 0.5元, 费用如为小数，保留两位小数，超过两位舍弃。</props>
     <props="intl">注意：请求参数中的时长单位为秒，而计费单位为小时，因此计费时会转换为小时，如推送19:00-20:00的用量1800，计费价格为1美元/小时，按小时出账该时段费用为1800/3600 x 1 = 0.5美元, 费用如为小数，保留两位小数，超过两位舍弃。</props> 

        - Storage：使用存储空间（Byte）。
         <props="china">注意：请求参数中的单位为Byte，而计费单位为MB，因此计费时会转换为MB，如推送19:00-20:00的用量524288，计费价格为1元/MB，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5元，费用如为小数，保留两位小数，超过两位舍弃。</props>
         <props="intl">注意：请求参数中的单位为Byte，而计费单位为MB，因此计费时会转换为MB，如推送19:00-20:00的用量524288，计费价格为1美元/MB，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5美元，费用如为小数，保留两位小数，超过两位舍弃。</props>

        - NetworkOut：上行使用流量（Bit）。
        <props="china">注意：请求参数中的单位为Bit，而计费单位为Mb，因此计费时会转换为Mb，如推送19:00-20:00的用量524288，计费价格为1元/Mb，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5元，费用如为小数，保留两位小数，超过两位舍弃。</props>
         <props="intl">注意：请求参数中的单位为Bit，而计费单位为Mb，因此计费时会转换为Mb，如推送19:00-20:00的用量524288，计费价格为1美元/Mb，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5美元，费用如为小数，保留两位小数，超过两位舍弃。</props>
        - NetworkIn：下行使用流量（Bit）。
        <props="china">注意：请求参数中的单位为Bit，而计费单位为Mb，因此计费时会转换为Mb，如推送19:00-20:00的用量524288，计费价格为1元/Mb，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5元，费用如为小数，保留两位小数，超过两位舍弃。</props>
        <props="intl">注意：请求参数中的单位为Bit，而计费单位为Mb，因此计费时会转换为Mb，如推送19:00-20:00的用量524288，计费价格为1美元/Mb，按小时出账该时段费用为524288 / 1024 / 1024 x 1 = 0.5美元，费用如为小数，保留两位小数，超过两位舍弃。</props>
        - Character：字符数（个）。
        - DailyActiveUser：日活跃用户数（DAU）。
        - PeriodMin：使用分钟时长（分钟）。
        - VirtualCpu：虚拟CPU核数。
    - Value：计量数值（取值 >= 0）。参数类型为Integer。

**说明**：
- 如果商品设置为实时出账，StartTime和 EndTime为任意时间宽度均可以，但是EndTime一定要大于StartTime 。
- 如果商品设置为非实时出账（即选择按小时、按天、按月等），StartTime和EndTime 的间隔必须大于5分钟。
- 批量推送计量数据时，“InstanceId”属性必须为同一个商品所产生的实例，目前不支持多个商品的实例同时推送。',
            'type' => 'string',
            'required' => true,
            'docRequired' => false,
            'example' => '[{"StartTime":1711527396,"EndTime":1711527397,"Entities":[{"Key":"Unit","Value":"0"}]}]',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'si-0e6fca6a51a54420****',
          ),
        ),
      ),
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
                'example' => '94E89857-B994-44B6-9C4F-DBD200E9XXXX',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"94E89857-B994-44B6-9C4F-DBD200E9XXXX\\"\\n}","type":"json"}]',
      'title' => '推送云市场计量数据',
      'summary' => '推送云市场计量数据。',
    ),
    'ListAcrImageRepositories' => 
    array (
      'summary' => '调用ListAcrImageRepositories查看已上传至ACR的镜像列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
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
            'description' => '下一个查询开始token。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAWns8w4MmhzeptXVRG0PUEU=',
          ),
        ),
        2 => 
        array (
          'name' => 'RepoName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像仓库的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'wordpress',
          ),
        ),
        3 => 
        array (
          'name' => 'ArtifactType',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '部署物类型，用于区分docker和chart',
            'description' => '部署物类型。默认值为：AcrImage。可能的值：

- HelmChart：Helm Chart镜像。

- AcrImage：容器镜像。',
            'type' => 'string',
            'required' => false,
            'example' => 'AcrImage',
          ),
        ),
      ),
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
                'example' => 'C4A145D8-6F6C-532A-9001-9730CDA27578',
              ),
              'NextToken' => 
              array (
                'description' => '下一个查询开始token。',
                'type' => 'string',
                'example' => 'AAAAAfu+XtuBE55iRLHEYYuojI4=',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'Repositories' => 
              array (
                'description' => '镜像列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '镜像列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RepoId' => 
                    array (
                      'description' => '镜像ID。',
                      'type' => 'string',
                      'example' => 'crr-3gqhkza0wbxxxxxx',
                    ),
                    'RepoName' => 
                    array (
                      'description' => '镜像名称。',
                      'type' => 'string',
                      'example' => 'wordpress',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2021-05-20T00:00:00Z',
                    ),
                    'ModifiedTime' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'string',
                      'example' => '2021-05-20T00:00:00Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C4A145D8-6F6C-532A-9001-9730CDA27578\\",\\n  \\"NextToken\\": \\"AAAAAfu+XtuBE55iRLHEYYuojI4=\\",\\n  \\"MaxResults\\": 20,\\n  \\"TotalCount\\": 4,\\n  \\"Repositories\\": [\\n    {\\n      \\"RepoId\\": \\"crr-3gqhkza0wbxxxxxx\\",\\n      \\"RepoName\\": \\"wordpress\\",\\n      \\"CreateTime\\": \\"2021-05-20T00:00:00Z\\",\\n      \\"ModifiedTime\\": \\"2021-05-20T00:00:00Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看已上传至ACR的镜像列表',
    ),
    'ListAcrImageTags' => 
    array (
      'summary' => '调用ListAcrImageTags查看镜像仓库中已上传的镜像版本。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
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
            'description' => '下一个查询开始token。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAW8kZY+u1sYOaYf5JmgmDQQ=',
          ),
        ),
        2 => 
        array (
          'name' => 'RepoId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '镜像ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'crr-3gqhkza0wbxxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'ArtifactType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署物类型。默认值为：AcrImage。可能的值：

- HelmChart：Helm Chart镜像。

- AcrImage：容器镜像。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AcrImage',
          ),
        ),
      ),
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
                'example' => 'FEF343B9-1A15-5789-BE88-7B36190F5BF6',
              ),
              'NextToken' => 
              array (
                'description' => '下一个查询开始token。',
                'type' => 'string',
                'example' => 'ey14..',
              ),
              'MaxResults' => 
              array (
                'description' => '分页查询时每页行数。其中最大值为100行，默认值为20行。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '总数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Images' => 
              array (
                'description' => '镜像列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '镜像列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Tag' => 
                    array (
                      'description' => '镜像版本。',
                      'type' => 'string',
                      'example' => '5.7.2',
                    ),
                    'ImageSize' => 
                    array (
                      'description' => '镜像大小，单位：字节（B）。',
                      'type' => 'string',
                      'example' => '188394616',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'string',
                      'example' => '2021-05-20T00:00:00Z',
                    ),
                    'ModifiedTime' => 
                    array (
                      'description' => '修改时间。',
                      'type' => 'string',
                      'example' => '2021-05-20T00:00:00Z',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FEF343B9-1A15-5789-BE88-7B36190F5BF6\\",\\n  \\"NextToken\\": \\"ey14..\\",\\n  \\"MaxResults\\": 20,\\n  \\"TotalCount\\": 1,\\n  \\"Images\\": [\\n    {\\n      \\"Tag\\": \\"5.7.2\\",\\n      \\"ImageSize\\": \\"188394616\\",\\n      \\"CreateTime\\": \\"2021-05-20T00:00:00Z\\",\\n      \\"ModifiedTime\\": \\"2021-05-20T00:00:00Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查看镜像仓库中已上传的镜像版本',
    ),
    'GetServiceTemplateParameterConstraints' => 
    array (
      'summary' => '查询ROS模板参数限定值。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'service-1c11f365190c44xxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'draft',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模板名称。',
            'type' => 'string',
            'required' => true,
            'example' => '模板1',
          ),
        ),
        4 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '参数信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '参数信息。',
              'type' => 'object',
              'properties' => 
              array (
                'ParameterKey' => 
                array (
                  'description' => '参数名称。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'PayType',
                ),
                'ParameterValue' => 
                array (
                  'description' => '参数值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'PostPaid',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '10CM943JP0EN9D51H',
          ),
        ),
        6 => 
        array (
          'name' => 'DeployRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '部署地域ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-huhehaote',
          ),
        ),
        7 => 
        array (
          'name' => 'ServiceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'si-d6ab3a63ccbb4b17****',
          ),
        ),
        8 => 
        array (
          'name' => 'EnablePrivateVpcConnection',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否已开启私网连接。可选值：

- true：已开启

- false：未开启',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C81C0732-DEBC-559C-B563-7EB2BEB21088',
              ),
              'ParameterConstraints' => 
              array (
                'description' => '参数信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '参数信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '参数的类型。',
                      'type' => 'string',
                      'example' => 'String',
                    ),
                    'AllowedValues' => 
                    array (
                      'description' => '参数的取值。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '参数的取值。',
                        'type' => 'string',
                        'example' => '"ecs.hfr6.16xlarge"',
                      ),
                    ),
                    'AssociationParameterNames' => 
                    array (
                      'description' => '关联参数列表。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '关联参数列表。',
                        'type' => 'string',
                        'example' => '"ZoneId1",
 "VSwitchId1"',
                      ),
                    ),
                    'ParameterKey' => 
                    array (
                      'description' => '参数的名称。',
                      'type' => 'string',
                      'example' => 'PayType',
                    ),
                    'Behavior' => 
                    array (
                      'description' => '参数的行为。取值：

- NoLimit：无限制，此参数没有取值限制。

- NotSupport：不支持，此参数不支持查询取值。

- QueryError：查询失败。

> 当查询结果没有返回AllowedValues时，会额外返回Behavior和BehaviorReason，说明参数的行为和原因。',
                      'type' => 'string',
                      'example' => 'NoLimit',
                    ),
                    'BehaviorReason' => 
                    array (
                      'description' => '参数行为出现的原因。',
                      'type' => 'string',
                      'example' => 'none',
                    ),
                    'OriginalConstraints' => 
                    array (
                      'description' => '原始约束信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '原始约束信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AllowedValues' => 
                          array (
                            'description' => '参数的取值。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '参数的取值。',
                              'type' => 'string',
                              'example' => '"ecs.hfr6.16xlarge"',
                            ),
                          ),
                          'PropertyName' => 
                          array (
                            'description' => '属性名称。',
                            'type' => 'string',
                            'example' => 'lnch_Source',
                          ),
                          'ResourceName' => 
                          array (
                            'description' => '资源名称。',
                            'type' => 'string',
                            'example' => 'i-8vb0smn1lf6g77md****',
                          ),
                          'ResourceType' => 
                          array (
                            'description' => '资源类型。',
                            'type' => 'string',
                            'example' => 'serviceinstance',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'FamilyConstraints' => 
              array (
                'description' => '套餐族约束。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '套餐族约束。',
                  'type' => 'string',
                  'example' => '[]',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C81C0732-DEBC-559C-B563-7EB2BEB21088\\",\\n  \\"ParameterConstraints\\": [\\n    {\\n      \\"Type\\": \\"String\\",\\n      \\"AllowedValues\\": [\\n        \\"\\\\\\"ecs.hfr6.16xlarge\\\\\\"\\"\\n      ],\\n      \\"AssociationParameterNames\\": [\\n        \\"\\\\\\"ZoneId1\\\\\\",\\\\n \\\\\\"VSwitchId1\\\\\\"\\"\\n      ],\\n      \\"ParameterKey\\": \\"PayType\\",\\n      \\"Behavior\\": \\"NoLimit\\",\\n      \\"BehaviorReason\\": \\"none\\",\\n      \\"OriginalConstraints\\": [\\n        {\\n          \\"AllowedValues\\": [\\n            \\"\\\\\\"ecs.hfr6.16xlarge\\\\\\"\\"\\n          ],\\n          \\"PropertyName\\": \\"lnch_Source\\",\\n          \\"ResourceName\\": \\"i-8vb0smn1lf6g77md****\\",\\n          \\"ResourceType\\": \\"serviceinstance\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"FamilyConstraints\\": [\\n    \\"[]\\"\\n  ]\\n}","type":"json"}]',
      'title' => '查询ROS模板参数限制信息',
    ),
    'AddServiceSharedAccounts' => 
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
        'abilityTreeCode' => '116171',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest2G0818',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。**ClientToken**只支持ASCII字符，且不能超过64个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'BBBAAfu+XtuBE55iRLHEYYuojI4=',
          ),
        ),
        2 => 
        array (
          'name' => 'SharedAccounts',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '服务分享账户与权限。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '服务分享账户与权限。',
              'type' => 'object',
              'properties' => 
              array (
                'UserAliUid' => 
                array (
                  'description' => '用户账号。',
                  'type' => 'string',
                  'required' => true,
                  'example' => '123456',
                ),
                'Permission' => 
                array (
                  'description' => '权限类型。可能的值：

- Deployable：可部署。

- Accessible：可访问。',
                  'type' => 'string',
                  'required' => true,
                  'example' => ' Accessible',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'service-63b8a060e9d54cxxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务共享类型，默认值为SharedAccount。可选值：

- SharedAccount：普通共享类型。

- Reseller：分销共享类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'SharedAccount',
          ),
        ),
      ),
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
                'example' => 'E2815213-EA4F-5759-8EA1-56DD051BB3FD',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E2815213-EA4F-5759-8EA1-56DD051BB3FD\\"\\n}","type":"json"}]',
      'title' => '新增服务共享账号',
      'summary' => '调用AddServiceSharedAccounts新增服务的共享账号。',
    ),
    'StartServiceInstance' => 
    array (
      'summary' => '当服务实例状态为Stopped（已关机）、StartFailed（开机失败）时，调用StartServiceInstance接口启动服务实例。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '220935',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest18JMDW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '10CM943JP0EN9****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例所在地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例ID。

您可以通过调用[ListServiceInstances - 查询服务实例列表](~~396200~~)获取服务实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'si-d6ab3a63ccbb4b17****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2E91D771-0183-52CE-86CB-882D99B2CB77',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2E91D771-0183-52CE-86CB-882D99B2CB77\\"\\n}","type":"json"}]',
      'title' => '启动服务实例',
      'description' => '### 前提条件
请您确保在创建服务时添加了开机、关机的运维操作。具体操作，请参见[创建服务](~~440268~~)。',
    ),
    'RestartServiceInstance' => 
    array (
      'summary' => '当服务实例状态为Deployed（已部署）时，调用RestartServiceInstance接口重启服务实例。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '220936',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest18JMDW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '10CM943JP0EN9****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例所在地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例ID。

您可以通过调用[ListServiceInstances - 查询服务实例列表](~~396200~~)获取服务实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'si-d6ab3a63ccbb4b17****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B1A0198B-F316-1B72-B8DD-28B6F6D6XXXX\\"\\n}","type":"json"}]',
      'title' => '重启服务实例',
      'description' => '### 前提条件
请您确保在创建服务时添加了重启的运维操作。具体操作，请参见[创建服务](~~440268~~)。',
    ),
    'StopServiceInstance' => 
    array (
      'summary' => '当服务实例状态为Deployed（已部署）、StopFailed（关机失败）时，调用StopServiceInstance接口关闭服务实例。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'abilityTreeCode' => '220569',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcomputenest18JMDW',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端Token，用于保证请求的幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符。',
            'type' => 'string',
            'required' => false,
            'example' => '10CM943JP0EN9****',
          ),
        ),
        1 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例所在地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-hangzhou',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务实例ID。

您可以通过调用[ListServiceInstances - 查询服务实例列表](~~396200~~)获取服务实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'si-c39ed4779cec449f****',
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
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '49A369EF-A302-5006-B0CE-94CED47C38CF',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"49A369EF-A302-5006-B0CE-94CED47C38CF\\"\\n}","type":"json"}]',
      'title' => '关闭服务实例',
      'description' => '### 前提条件
请您确保在创建服务时添加了开机、关机的运维操作。具体操作，请参见[创建服务](~~440268~~)。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'computenestsupplier.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'computenestsupplier.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
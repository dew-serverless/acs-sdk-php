<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'composer',
    'version' => '2018-12-12',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 74102,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TagResources',
        1 => 'UntagResources',
        2 => 'ListTagResources',
      ),
    ),
    1 => 
    array (
      'id' => 74106,
      'title' => '模板',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetTemplate',
        1 => 'ListTemplates',
      ),
    ),
    2 => 
    array (
      'id' => 74109,
      'title' => '工作流',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFlow',
        1 => 'CloneFlow',
        2 => 'DeleteFlow',
        3 => 'DisableFlow',
        4 => 'EnableFlow',
        5 => 'UpdateFlow',
        6 => 'ListFlows',
        7 => 'ListVersions',
        8 => 'GetVersion',
        9 => 'GetFlow',
        10 => 'InvokeFlow',
        11 => 'GroupInvokeFlow',
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
    'TagResources' => 
    array (
      'summary' => '为一个或多个资源打标签。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ResourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源类型，可取的值有：

- ALIYUN::LC::FLOW：逻辑编排工作流',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ALIYUN::LC::FLOW',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceId',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID列表。最多可输入50个资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'lc-uf6abcdefg',
            ),
            'required' => true,
            'example' => 'lc-uf6tbvhheciyxl',
            'maxItems' => 50,
          ),
        ),
        2 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。列表最大长度为 20',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签信息。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'tagKey',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。一旦传入该值，可以为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'tagValue',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
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
              'Success' => 
              array (
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>ADB97A33-50E7-48A5-963D-ACBAE36D0BEC</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '为指定的资源统一打标签',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UntagResources' => 
    array (
      'summary' => '删除一个或多个资源的标签。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ResourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源类型定义，可取的值有：

- ALIYUN::LC::FLOW：逻辑编排工作流',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ALIYUN::LC::FLOW',
          ),
        ),
        1 => 
        array (
          'name' => 'All',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否全部删除，只针对TagKey.N为空时有效。取值范围：

- true，全部删除
- false，不全部删除

默认是 false',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceId',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID列表。最多可输入50个资源ID。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'lc-uf6tbvhheciyxl',
            ),
            'required' => true,
            'example' => 'lc-uf6tbvhheciyxl',
            'maxItems' => 50,
          ),
        ),
        3 => 
        array (
          'name' => 'TagKey',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源的标签键列表。最大长度为20。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签键。',
              'type' => 'string',
              'required' => false,
              'example' => 'testKey',
            ),
            'required' => false,
            'example' => 'tagKey',
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
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>ADB97A33-50E7-48A5-963D-ACBAE36D0BEC</RequestId>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '为指定的资源统一解绑标签',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListTagResources' => 
    array (
      'summary' => '获取指定标签的资源列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'ResourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源类型定义，可取的值有：

- ALIYUN::LC::FLOW：逻辑编排工作流',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'ALIYUN::LC::FLOW' => '逻辑编排工作流',
            ),
            'example' => 'ALIYUN::LC::FLOW',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '下一个查询开始Token',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '单页返回最大数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源 ID 列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源 ID',
              'type' => 'string',
              'required' => false,
              'example' => 'lc-0xiisfk685vhfk',
            ),
            'required' => false,
            'maxItems' => 50,
          ),
        ),
        4 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。列表最大长度为 20',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签内容',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'testkey',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'testvalue',
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
                'description' => '下一个查询开始Token',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'C9025B15-16CC-53FB-B7B1-7295AA010EBD',
              ),
              'TotalCount' => 
              array (
                'description' => '资源总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TagResources' => 
              array (
                'description' => '资源和标签的关系列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资源信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceType' => 
                    array (
                      'description' => '资源类型定义，可取的值有：
- ALIYUN::LC::FLOW：逻辑编排工作流',
                      'type' => 'string',
                      'example' => 'ALIYUN::LC::FLOW',
                    ),
                    'TagValue' => 
                    array (
                      'description' => '标签值',
                      'type' => 'string',
                      'example' => 'testvalue',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID',
                      'type' => 'string',
                      'example' => 'lc-0xiisfk685vhfk',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '标签键',
                      'type' => 'string',
                      'example' => 'testkey',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"RequestId\\": \\"C9025B15-16CC-53FB-B7B1-7295AA010EBD\\",\\n  \\"TotalCount\\": 2,\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceType\\": \\"ALIYUN::LC::FLOW\\",\\n      \\"TagValue\\": \\"testvalue\\",\\n      \\"ResourceId\\": \\"lc-0xiisfk685vhfk\\",\\n      \\"TagKey\\": \\"testkey\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n    <RequestId>C9025B15-16CC-53FB-B7B1-7295AA010EBD</RequestId>\\n    <TotalCount>2</TotalCount>\\n    <TagResources>\\n        <ResourceType>ALIYUN::LC::FLOW</ResourceType>\\n        <TagValue>testvalue</TagValue>\\n        <ResourceId>lc-0xiisfk685vhfk</ResourceId>\\n        <TagKey>testkey</TagKey>\\n    </TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '获取指定标签的资源列表',
    ),
    'GetTemplate' => 
    array (
      'summary' => '查询编排模板详情。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板 ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'tp-uf6tbvhheciyxl',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'UpdateTime' => 
              array (
                'description' => '模板最后更新时间',
                'type' => 'string',
                'example' => '2020-08-19T03:31:32.415Z',
              ),
              'TemplateOverview' => 
              array (
                'description' => '模板概述，为 JSON 字符串',
                'type' => 'string',
                'example' => '[]',
              ),
              'TemplateConnector' => 
              array (
                'description' => '模板里用到的连接器列表，以英文逗号分隔',
                'type' => 'string',
                'example' => 'config,oss',
              ),
              'CreateTime' => 
              array (
                'description' => '模板创建时间',
                'type' => 'string',
                'example' => '2020-08-19T03:31:32.415Z',
              ),
              'TemplateSummaryEn' => 
              array (
                'description' => '英文版的简介',
                'type' => 'string',
                'example' => 'This is a test template',
              ),
              'TemplateName' => 
              array (
                'description' => '模板标题',
                'type' => 'string',
                'example' => '测试模板',
              ),
              'TemplateVersion' => 
              array (
                'description' => '模板版本，为从 0 递增的数字',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'TemplateCreator' => 
              array (
                'description' => '模板发布者',
                'type' => 'string',
                'example' => '逻辑编排',
              ),
              'TemplateLocale' => 
              array (
                'description' => '模板语言，目前支持中文 zh 和英文 en 两种',
                'type' => 'string',
                'example' => 'zh',
              ),
              'RegionId' => 
              array (
                'description' => '模板所在地域',
                'type' => 'string',
                'example' => 'cn-shanghai',
              ),
              'TemplateDescription' => 
              array (
                'description' => '模板的描述',
                'type' => 'string',
                'example' => '该模板仅用于测试用途',
              ),
              'TemplateTag' => 
              array (
                'description' => '模板标签',
                'type' => 'string',
                'example' => 'test,owner',
              ),
              'Definition' => 
              array (
                'description' => '模板定义',
                'type' => 'string',
                'example' => '{"actions": {},"schemaVersion":"2018-12-12","version": "1.0.0"}',
              ),
              'RequestId' => 
              array (
                'description' => '当前请求唯一标识符',
                'type' => 'string',
                'example' => 'BCF7212F-9478-569A-B57C-8C1B5A560C2F',
              ),
              'TemplateSummary' => 
              array (
                'description' => '模板简要介绍',
                'type' => 'string',
                'example' => '这是一个测试模板',
              ),
              'TemplateId' => 
              array (
                'description' => '模板 ID',
                'type' => 'string',
                'example' => 'tp-uf6tbvhheciyxl',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"UpdateTime\\": \\"2020-08-19T03:31:32.415Z\\",\\n  \\"TemplateOverview\\": \\"[]\\",\\n  \\"TemplateConnector\\": \\"config,oss\\",\\n  \\"CreateTime\\": \\"2020-08-19T03:31:32.415Z\\",\\n  \\"TemplateSummaryEn\\": \\"This is a test template\\",\\n  \\"TemplateName\\": \\"测试模板\\",\\n  \\"TemplateVersion\\": 0,\\n  \\"TemplateCreator\\": \\"逻辑编排\\",\\n  \\"TemplateLocale\\": \\"zh\\",\\n  \\"RegionId\\": \\"cn-shanghai\\",\\n  \\"TemplateDescription\\": \\"该模板仅用于测试用途\\",\\n  \\"TemplateTag\\": \\"test,owner\\",\\n  \\"Definition\\": \\"{\\\\\\"actions\\\\\\": {},\\\\\\"schemaVersion\\\\\\":\\\\\\"2018-12-12\\\\\\",\\\\\\"version\\\\\\": \\\\\\"1.0.0\\\\\\"}\\",\\n  \\"RequestId\\": \\"BCF7212F-9478-569A-B57C-8C1B5A560C2F\\",\\n  \\"TemplateSummary\\": \\"这是一个测试模板\\",\\n  \\"TemplateId\\": \\"tp-uf6tbvhheciyxl\\"\\n}","type":"json"}]',
      'title' => '查询模板详情',
    ),
    'ListTemplates' => 
    array (
      'summary' => '列举当前用户可见的模板。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前页码。起始值：1。默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页大小，最大 100，默认值为 10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '根据指定关键词搜索模板，如果指定了 Tag，则无效',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '根据指定的标签获取模板',
            'type' => 'string',
            'required' => false,
            'example' => '财务管理',
          ),
        ),
        4 => 
        array (
          'name' => 'Lang',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板语言：
- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '模板总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求唯一标识符',
                'type' => 'string',
                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
              ),
              'Templates' => 
              array (
                'description' => '模板列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '模板信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UpdateTime' => 
                    array (
                      'description' => '模板最后更新时间',
                      'type' => 'string',
                      'example' => '2020-08-19T03:31:32.415Z',
                    ),
                    'TemplateOverview' => 
                    array (
                      'description' => '模板概述，为 JSON 字符串',
                      'type' => 'string',
                      'example' => '[]',
                    ),
                    'TemplateConnector' => 
                    array (
                      'description' => '模板里用到的连接器列表，多个以英文逗号分隔',
                      'type' => 'string',
                      'example' => 'oss,rds',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '模板创建时间',
                      'type' => 'string',
                      'example' => '2020-08-19T03:31:32.415Z',
                    ),
                    'TemplateSummaryEn' => 
                    array (
                      'description' => '英文版的简介',
                      'type' => 'string',
                      'example' => 'This is a test template',
                    ),
                    'TemplateName' => 
                    array (
                      'description' => '模板名称',
                      'type' => 'string',
                      'example' => '测试模板',
                    ),
                    'TemplateVersion' => 
                    array (
                      'description' => '模板版本，为从 0 递增的数字',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'TemplateLocale' => 
                    array (
                      'description' => '模板语言，目前支持中文zh和英文en两种',
                      'type' => 'string',
                      'example' => 'zh',
                    ),
                    'TemplateCreator' => 
                    array (
                      'description' => '模板发布者',
                      'type' => 'string',
                      'example' => '逻辑编排',
                    ),
                    'TemplateDescription' => 
                    array (
                      'description' => '模板的描述',
                      'type' => 'string',
                      'example' => '这是一个测试用的模板',
                    ),
                    'TemplateTag' => 
                    array (
                      'description' => '模板标签',
                      'type' => 'string',
                      'example' => 'finance',
                    ),
                    'TemplateSummary' => 
                    array (
                      'description' => '模板简要介绍',
                      'type' => 'string',
                      'example' => '测试模板的简介',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '模板 ID',
                      'type' => 'string',
                      'example' => 'tp-uf6tbvhheciyxl',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 10,\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\",\\n  \\"Templates\\": [\\n    {\\n      \\"UpdateTime\\": \\"2020-08-19T03:31:32.415Z\\",\\n      \\"TemplateOverview\\": \\"[]\\",\\n      \\"TemplateConnector\\": \\"oss,rds\\",\\n      \\"CreateTime\\": \\"2020-08-19T03:31:32.415Z\\",\\n      \\"TemplateSummaryEn\\": \\"This is a test template\\",\\n      \\"TemplateName\\": \\"测试模板\\",\\n      \\"TemplateVersion\\": 0,\\n      \\"TemplateLocale\\": \\"zh\\",\\n      \\"TemplateCreator\\": \\"逻辑编排\\",\\n      \\"TemplateDescription\\": \\"这是一个测试用的模板\\",\\n      \\"TemplateTag\\": \\"finance\\",\\n      \\"TemplateSummary\\": \\"测试模板的简介\\",\\n      \\"TemplateId\\": \\"tp-uf6tbvhheciyxl\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询模板列表',
    ),
    'CreateFlow' => 
    array (
      'summary' => '创建一个工作流。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FlowName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流编排实例的名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'FlowDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流编排实例的描述',
            'type' => 'string',
            'required' => false,
            'example' => '这是一个工作流',
          ),
        ),
        2 => 
        array (
          'name' => 'Definition',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流定义，需要将JSON格式化为String',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"schemaVersion\\":\\"2018-12-12\\",\\"actions\\":{},\\"version\\":\\"1.0.0\\",\\"triggers\\":{}}',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '模板 ID',
            'type' => 'string',
            'required' => false,
            'example' => 'tp-uf6tbvhheciyxl',
          ),
        ),
        4 => 
        array (
          'name' => 'FlowSource',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流来源，目前有以下取值：

- Default：默认来源，一般是控制台创建
- CloudConfig：通过配置审计产品创建
- Solution：通过逻辑编排解决方案中心创建',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'CloudConfig' => '从配置审计创建',
              'Default' => '默认来源',
              'Solution' => '从逻辑编排解决方案中心创建',
            ),
            'example' => 'Default',
          ),
        ),
        5 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-aekzmrjn4nsszna',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'FlowId' => 
              array (
                'description' => '创建后的工作流编排实例ID',
                'type' => 'string',
                'example' => 'lc-utf6abcdefg',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D264C934-2DA8-44B4-B034-C659A63AC659',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"FlowId\\": \\"lc-utf6abcdefg\\",\\n  \\"RequestId\\": \\"D264C934-2DA8-44B4-B034-C659A63AC659\\"\\n}","type":"json"}]',
      'title' => '创建工作流',
      'description' => '创建工作流后，会自动为该工作流创建一个版本，可以通过 GetVersion 获取该版本信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CloneFlow' => 
    array (
      'summary' => '克隆一个工作流。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FlowId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要克隆的工作流ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lc-uf6yrfwxpe6wkw',
          ),
        ),
        1 => 
        array (
          'name' => 'VersionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要克隆的版本，如果不指定，则默认克隆最新版本。',
            'type' => 'string',
            'required' => false,
            'example' => 've-uf6bwdtvid7o25',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'FlowId' => 
              array (
                'description' => '克隆后生成的工作流ID',
                'type' => 'string',
                'example' => 'lc-uf6wvbsyvvl5sy',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
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
            'errorCode' => 'InvalidFlow.NotFound',
            'errorMessage' => 'The specified workflow does not exist. Verify the availability of the workflow.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"FlowId\\": \\"lc-uf6wvbsyvvl5sy\\",\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\"\\n}","type":"json"}]',
      'title' => '克隆工作流',
      'description' => '<warning>该API即将废弃，如需复制工作流，请使用GetFlow获取工作流信息后再调用CreateFlow创建工作流。</warning>',
    ),
    'DeleteFlow' => 
    array (
      'summary' => '删除一个工作流。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FlowId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要删除的工作流ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lc-uf6wvbsyvvl5sy',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '本次操作是否成功，**true**表示成功，**false**表示失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\"\\n}","type":"json"}]',
      'title' => '删除工作流',
      'description' => '删除工作流，会自动删除该工作流所有版本和执行记录。',
    ),
    'DisableFlow' => 
    array (
      'summary' => '禁用一个工作流，禁用后，工作流将不会运行。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FlowId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要禁用的工作流ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lc-uf6pvud38xl0ia',
          ),
        ),
      ),
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
                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
              ),
              'Success' => 
              array (
                'description' => '当前操作的结果。

- **true**：修改成功
- **false**：修改失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'FlowStatus' => 
              array (
                'description' => '工作流当前状态。

- **Enabled**：启用
- **Disabled**：已禁用',
                'type' => 'string',
                'example' => 'Disabled',
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
            'errorCode' => 'InvalidFlow.NotFound',
            'errorMessage' => 'The specified workflow does not exist. Verify the availability of the workflow.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\",\\n  \\"Success\\": true,\\n  \\"FlowStatus\\": \\"Disabled\\"\\n}","type":"json"}]',
      'title' => '禁用工作流',
    ),
    'EnableFlow' => 
    array (
      'summary' => '启用一个工作流。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FlowId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要启用的工作流ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'tp-uf6pvud38xl0ia',
          ),
        ),
      ),
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
                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
              ),
              'Success' => 
              array (
                'description' => '当前操作的结果。

- **true**：修改成功
- **false**：修改失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'FlowStatus' => 
              array (
                'description' => '工作流当前状态。

- **Enabled**：启用
- **Disabled**：已禁用',
                'type' => 'string',
                'example' => 'Enabled',
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
            'errorCode' => 'InvalidFlow.NotFound',
            'errorMessage' => 'The specified workflow does not exist. Verify the availability of the workflow.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\",\\n  \\"Success\\": true,\\n  \\"FlowStatus\\": \\"Enabled\\"\\n}","type":"json"}]',
      'title' => '启用工作流',
    ),
    'UpdateFlow' => 
    array (
      'summary' => '更新一个工作流的信息',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FlowId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要更新的工作流ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lc-uf6axpwfcw4ubx',
          ),
        ),
        1 => 
        array (
          'name' => 'FlowName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '更新后的工作流名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'FlowDescription',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '更新后的工作流描述',
            'type' => 'string',
            'required' => false,
            'example' => '这是一个工作流的描述',
          ),
        ),
        3 => 
        array (
          'name' => 'Definition',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '更新后的工作流定义',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"schemaVersion\\":\\"2018-12-12\\",\\"actions\\":{},\\"version\\":\\"1.0.0\\",\\"triggers\\":{}}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'CurrentVersionId' => 
              array (
                'description' => '本次更新后，当前工作流版本ID。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
              ),
              'Success' => 
              array (
                'description' => '当前操作的结果。

- **true**：修改成功
- **false**：修改失败',
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
            'errorCode' => 'InvalidDefinition.Format',
            'errorMessage' => 'The specified workflow definition is incorrectly formatted. It must be valid JSON content.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParameter.Definition',
            'errorMessage' => 'The specified definition is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter.Description.Length',
            'errorMessage' => 'The specified description cannot be more than 255 characters in length.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameter.Name',
            'errorMessage' => 'The specified name is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParameter.Name.Length',
            'errorMessage' => 'The specified name cannot be more than 100 characters in length.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'You are not authorized to perform this operation. %s.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidFlow.NotFound',
            'errorMessage' => 'The specified workflow does not exist. Verify the availability of the workflow.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentVersionId\\": 10,\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '更新工作流',
    ),
    'ListFlows' => 
    array (
      'summary' => '查询当前地域下所有工作流列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
            'description' => '每页大小，最大 100，默认值为 10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前页码。起始值：1默认值：1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'FlowName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流的名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'Filter',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '过滤条件，json格式：{"key1":"value1"}',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"tags\\":[{\\"key\\":\\"acs:lc:Solution:AliyunSSO\\",\\"value\\":\\"test\\"}]}',
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '资源组ID',
            'description' => '资源组ID，不传该参数则查询本账号下所有工作流。指定资源组ID后只会查询该资源组下的工作流',
            'type' => 'string',
            'required' => false,
            'example' => 'rg-acfmzy6dzs6qtqa',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'TotalCount' => 
              array (
                'description' => '当前地域下工作流的总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A4865221-E0BC-5AF6-BDD3-749F5A2371CC',
              ),
              'Flows' => 
              array (
                'description' => '工作流列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工作流详细信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UpdateTime' => 
                    array (
                      'description' => '最后更新时间',
                      'type' => 'string',
                      'format' => 'iso8601',
                      'example' => '2019-07-19T05:43:16.783Z',
                    ),
                    'FlowSource' => 
                    array (
                      'description' => '工作流来源',
                      'type' => 'string',
                      'example' => 'Solution',
                    ),
                    'FlowStatus' => 
                    array (
                      'description' => '状态。

- **Enabled**：启用
- **Disabled**：已禁用',
                      'type' => 'string',
                      'example' => 'Enabled',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'format' => 'iso8601',
                      'example' => '2019-07-19T05:43:16.783Z',
                    ),
                    'FlowEditMode' => 
                    array (
                      'description' => '编辑模式',
                      'type' => 'string',
                      'example' => 'Normal',
                    ),
                    'VersionId' => 
                    array (
                      'description' => '当前最新版本',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'FlowDescription' => 
                    array (
                      'description' => '工作流的描述',
                      'type' => 'string',
                      'example' => 'test flow',
                    ),
                    'FlowName' => 
                    array (
                      'description' => '工作流名称',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '模板 ID，可以通过 ListTemplates 获得模板 ID',
                      'type' => 'string',
                      'example' => 'tp-uf6lzhzywy28bs',
                    ),
                    'FlowId' => 
                    array (
                      'description' => '工作流ID',
                      'type' => 'string',
                      'example' => 'lc-uf6axpwfcw4ubx',
                    ),
                    'RegionId' => 
                    array (
                      'description' => '当前工作流所属地域',
                      'type' => 'string',
                      'example' => 'cn-shanghai',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'title' => '资源组ID',
                      'description' => '资源组ID',
                      'type' => 'string',
                      'example' => 'rg-acfmzyxxxxxxx',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"A4865221-E0BC-5AF6-BDD3-749F5A2371CC\\",\\n  \\"Flows\\": [\\n    {\\n      \\"UpdateTime\\": \\"2019-07-19T05:43:16.783Z\\",\\n      \\"FlowSource\\": \\"Solution\\",\\n      \\"FlowStatus\\": \\"Enabled\\",\\n      \\"CreateTime\\": \\"2019-07-19T05:43:16.783Z\\",\\n      \\"FlowEditMode\\": \\"Normal\\",\\n      \\"VersionId\\": \\"1\\",\\n      \\"FlowDescription\\": \\"test flow\\",\\n      \\"FlowName\\": \\"test\\",\\n      \\"TemplateId\\": \\"tp-uf6lzhzywy28bs\\",\\n      \\"FlowId\\": \\"lc-uf6axpwfcw4ubx\\",\\n      \\"RegionId\\": \\"cn-shanghai\\",\\n      \\"ResourceGroupId\\": \\"rg-acfmzyxxxxxxx\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询工作流列表',
    ),
    'ListVersions' => 
    array (
      'summary' => '查询某个工作流所有版本列表。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FlowId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要查询的工作流ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lc-uf6axpwfcw4ubx',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前页数。 取值为大于0的整数。 默认值：1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页大小，最大 100，默认值为 10',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
              'TotalCount' => 
              array (
                'description' => '该工作流包含的版本总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
              ),
              'Versions' => 
              array (
                'description' => '版本列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '版本详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UpdateTime' => 
                    array (
                      'description' => '该版本最后更新时间',
                      'type' => 'string',
                      'example' => '2018-12-12T07:36:22.992Z',
                    ),
                    'VersionStatus' => 
                    array (
                      'description' => '该版本的状态，**Enabled**表示启用中',
                      'type' => 'string',
                      'example' => 'Enabled',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '版本创建时间',
                      'type' => 'string',
                      'example' => '2018-12-12T07:36:22.992Z',
                    ),
                    'VersionId' => 
                    array (
                      'description' => '版本ID',
                      'type' => 'string',
                      'example' => 've-uf6bwdtvid7o25',
                    ),
                    'VersionNumber' => 
                    array (
                      'description' => '版本号',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'FlowId' => 
                    array (
                      'description' => '该版本所属的工作流ID',
                      'type' => 'string',
                      'example' => 'lc-uf6axpwfcw4ubx',
                    ),
                    'VersionName' => 
                    array (
                      'description' => '版本名称',
                      'type' => 'string',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 1,\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\",\\n  \\"Versions\\": [\\n    {\\n      \\"UpdateTime\\": \\"2018-12-12T07:36:22.992Z\\",\\n      \\"VersionStatus\\": \\"Enabled\\",\\n      \\"CreateTime\\": \\"2018-12-12T07:36:22.992Z\\",\\n      \\"VersionId\\": \\"ve-uf6bwdtvid7o25\\",\\n      \\"VersionNumber\\": 1,\\n      \\"FlowId\\": \\"lc-uf6axpwfcw4ubx\\",\\n      \\"VersionName\\": \\"1\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询工作流版本列表',
    ),
    'GetVersion' => 
    array (
      'summary' => '查询某个工作流的某个特定版本信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FlowId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'string',
            'required' => true,
            'example' => 'lc-uf6axpwfcw4ubx',
          ),
        ),
        1 => 
        array (
          'name' => 'VersionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '版本ID',
            'type' => 'string',
            'required' => true,
            'example' => 've-uf6bwdtvid7o25',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Definition' => 
              array (
                'description' => '当前版本对应的工作流定义',
                'type' => 'string',
                'example' => '{\\"schemaVersion\\":\\"2018-12-12\\",\\"actions\\":{},\\"version\\":\\"1.0.0\\",\\"triggers\\":{}}',
              ),
              'UpdateTime' => 
              array (
                'description' => '版本最后更新时间',
                'type' => 'string',
                'example' => '2018-12-12T07:36:22.992Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
              ),
              'VersionStatus' => 
              array (
                'description' => '版本状态，**Enabled**表示启用中。',
                'type' => 'string',
                'example' => 'Enabled',
              ),
              'CreateTime' => 
              array (
                'description' => '版本创建时间',
                'type' => 'string',
                'example' => '2018-12-12T07:36:22.992Z',
              ),
              'VersionId' => 
              array (
                'description' => '版本ID',
                'type' => 'string',
                'example' => 've-uf6bwdtvid7o25',
              ),
              'VersionName' => 
              array (
                'description' => '版本名称',
                'type' => 'string',
                'example' => '5.3.6',
              ),
              'VersionDescription' => 
              array (
                'description' => '版本描述',
                'type' => 'string',
                'example' => '这是版本描述',
              ),
              'FlowId' => 
              array (
                'description' => '该版本所属工作流ID',
                'type' => 'string',
                'example' => 'lc-uf6wvbsyvvl5sy',
              ),
              'RegionId' => 
              array (
                'description' => '当前工作流所属地域',
                'type' => 'string',
                'example' => 'cn-shanghai',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Definition\\": \\"{\\\\\\\\\\\\\\"schemaVersion\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"2018-12-12\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"actions\\\\\\\\\\\\\\":{},\\\\\\\\\\\\\\"version\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1.0.0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"triggers\\\\\\\\\\\\\\":{}}\\",\\n  \\"UpdateTime\\": \\"2018-12-12T07:36:22.992Z\\",\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\",\\n  \\"VersionStatus\\": \\"Enabled\\",\\n  \\"CreateTime\\": \\"2018-12-12T07:36:22.992Z\\",\\n  \\"VersionId\\": \\"ve-uf6bwdtvid7o25\\",\\n  \\"VersionName\\": \\"5.3.6\\",\\n  \\"VersionDescription\\": \\"这是版本描述\\",\\n  \\"FlowId\\": \\"lc-uf6wvbsyvvl5sy\\",\\n  \\"RegionId\\": \\"cn-shanghai\\"\\n}","type":"json"}]',
      'title' => '查询版本信息',
    ),
    'GetFlow' => 
    array (
      'summary' => '查询一个工作流的具体信息。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FlowId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lc-uf6pvud38xl0ia',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'UpdateTime' => 
              array (
                'description' => '最后更新时间',
                'type' => 'string',
                'format' => 'iso8601',
                'example' => '2019-07-19T05:43:16.783Z',
              ),
              'FlowSource' => 
              array (
                'description' => '工作流来源',
                'type' => 'string',
                'example' => 'CloudConfig',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间',
                'type' => 'string',
                'format' => 'iso8601',
                'example' => '2019-07-19T05:43:16.783Z',
              ),
              'FlowEditMode' => 
              array (
                'description' => '编辑模式',
                'type' => 'string',
                'example' => 'Locked',
              ),
              'FlowDescription' => 
              array (
                'description' => '工作流的描述',
                'type' => 'string',
                'example' => '这是一个工作流',
              ),
              'CurrentVersionId' => 
              array (
                'description' => '工作流编排实例的版本ID',
                'type' => 'string',
                'example' => 've-uf6bwdtvid7o25',
              ),
              'FlowName' => 
              array (
                'description' => '工作流编排实例的名称',
                'type' => 'string',
                'example' => 'test',
              ),
              'FlowId' => 
              array (
                'description' => '工作流编排实例的ID',
                'type' => 'string',
                'example' => 'lc-uf6pvud38xl0ia',
              ),
              'RegionId' => 
              array (
                'description' => '地域ID',
                'type' => 'string',
                'example' => 'cn-shanghai',
              ),
              'Definition' => 
              array (
                'description' => '工作流定义',
                'type' => 'string',
                'example' => '{\\"schemaVersion\\":\\"2018-12-12\\",\\"actions\\":{},\\"version\\":\\"1.0.0\\",\\"triggers\\":{}}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'ADB97A33-50E7-48A5-963D-ACBAE36D0BEC',
              ),
              'FlowStatus' => 
              array (
                'description' => '状态。

- **Enabled**：启用
- **Disabled**：已禁用',
                'type' => 'string',
                'example' => 'Enabled',
              ),
              'TemplateId' => 
              array (
                'description' => '模板 ID',
                'type' => 'string',
                'example' => 'tp-uf6tbvhheciyxl',
              ),
              'ResourceGroupId' => 
              array (
                'title' => '资源组ID',
                'description' => '资源组ID',
                'type' => 'string',
                'example' => 'rg-acfmzyxxxxxxx',
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
            'errorCode' => 'InvalidFlow.NotFound',
            'errorMessage' => 'The specified workflow does not exist. Verify the availability of the workflow.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"UpdateTime\\": \\"2019-07-19T05:43:16.783Z\\",\\n  \\"FlowSource\\": \\"CloudConfig\\",\\n  \\"CreateTime\\": \\"2019-07-19T05:43:16.783Z\\",\\n  \\"FlowEditMode\\": \\"Locked\\",\\n  \\"FlowDescription\\": \\"这是一个工作流\\",\\n  \\"CurrentVersionId\\": \\"ve-uf6bwdtvid7o25\\",\\n  \\"FlowName\\": \\"test\\",\\n  \\"FlowId\\": \\"lc-uf6pvud38xl0ia\\",\\n  \\"RegionId\\": \\"cn-shanghai\\",\\n  \\"Definition\\": \\"{\\\\\\\\\\\\\\"schemaVersion\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"2018-12-12\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"actions\\\\\\\\\\\\\\":{},\\\\\\\\\\\\\\"version\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1.0.0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"triggers\\\\\\\\\\\\\\":{}}\\",\\n  \\"RequestId\\": \\"ADB97A33-50E7-48A5-963D-ACBAE36D0BEC\\",\\n  \\"FlowStatus\\": \\"Enabled\\",\\n  \\"TemplateId\\": \\"tp-uf6tbvhheciyxl\\",\\n  \\"ResourceGroupId\\": \\"rg-acfmzyxxxxxxx\\"\\n}","type":"json"}]',
      'title' => '获取工作流详情',
    ),
    'InvokeFlow' => 
    array (
      'summary' => '运行一次工作流。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FlowId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要运行的工作流ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'lc-uf65sg10vjws7o',
          ),
        ),
        1 => 
        array (
          'name' => 'Parameters',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '该模板所需要的参数，为 JSON 字符串。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{"ParamA": "test"}',
          ),
        ),
        2 => 
        array (
          'name' => 'Data',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '该工作流的触发器所需要的入参，为 JSON 字符串。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{"body": {"test": true}}',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用于幂等，避免重复运行。',
            'type' => 'string',
            'required' => false,
            'example' => 'abcdefghijklmn',
          ),
        ),
      ),
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
                'description' => '本次请求的ID',
                'type' => 'string',
                'example' => '5CE7EAE6-XXXX-XXXX-A1A3-D3C2AE624000',
              ),
              'Success' => 
              array (
                'description' => '是否运行成功。

- **true**：工作流已经被触发
- **false**：触发失败

> 如果需要查询工作流运行结果，请使用**GetInvocationLog**查询运行结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'InvocationId' => 
              array (
                'description' => '本次运行的唯一标识符',
                'type' => 'string',
                'example' => '6b387696-d160-4ed7-xxxx-070ac29dce4d',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5CE7EAE6-XXXX-XXXX-A1A3-D3C2AE624000\\",\\n  \\"Success\\": true,\\n  \\"InvocationId\\": \\"6b387696-d160-4ed7-xxxx-070ac29dce4d\\"\\n}","type":"json"}]',
      'title' => '运行工作流',
    ),
    'GroupInvokeFlow' => 
    array (
      'summary' => '触发一个工作流多次执行。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'http',
        1 => 'https',
      ),
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
          'name' => 'FlowId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要运行的工作流ID',
            'type' => 'string',
            'required' => true,
            'example' => 'lc-uf6axpwfcw4ubx',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '本次批量执行的分组名，不同执行分组之间不能重复',
            'type' => 'string',
            'required' => true,
            'example' => '1632117849243',
          ),
        ),
        2 => 
        array (
          'name' => 'Data',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '该分组执行所需的数据，为JSON字符串，格式为：`{"Items": []}`。Items数组每一项为单次执行的参数。单次执行参数的编写方式和InvokeFlow的Data参数一致',
            'type' => 'string',
            'required' => true,
            'example' => '{\\"Items\\":[{\\"resourceId\\":\\"i-bp1383wskmaa65duviwh\\",\\"regionId\\":\\"cn-hangzhou\\",\\"resourceType\\":\\"ACS::ECS::Instance\\"}],\\"Source\\":\\"CloudConfig\\"}',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符',
            'type' => 'string',
            'required' => true,
            'example' => 'abcdefghijklmn',
          ),
        ),
        4 => 
        array (
          'name' => 'TotalCount',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '该组执行包含的执行数，需要和Data.Items数组中的个数一致',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '为该分组下的每次执行打标签，格式为JSON数组，数组内为对应执行的标签对象。数组包含的标签对象个数需与TotalCount一致',
            'type' => 'string',
            'required' => false,
            'example' => '[{\\"key1\\":\\"value1\\",\\"key2\\":\\"value2\\"}]',
          ),
        ),
      ),
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
                'description' => '本次分组执行的状态：
- New：请求已经创建，待运行
- Started：已经开始运行
- Canceled：已经取消
- Failed：执行失败
- Completed：分组内所有执行已经完成
- Unknown：执行状态不确定，常见于系统错误
- TimedOut：执行超时
- Paused：执行被暂停',
                'type' => 'string',
                'example' => 'Completed',
              ),
              'GroupInvocationId' => 
              array (
                'description' => '本次运行的唯一标识符',
                'type' => 'string',
                'example' => '7bdbdb58-f028-4155-915e-f21e1f8fc48a',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4F06F96E-D1F8-54ED-9611-4F621AD899B5',
              ),
              'CurrentCount' => 
              array (
                'description' => '当前待运行的执行数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'Success' => 
              array (
                'description' => '是否运行成功。

- **true**：工作流已经被触发
- **false**：触发失败

> 如果需要查询工作流运行结果，请使用**GetInvocationLog**查询运行结果。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Status\\": \\"Completed\\",\\n  \\"GroupInvocationId\\": \\"7bdbdb58-f028-4155-915e-f21e1f8fc48a\\",\\n  \\"RequestId\\": \\"4F06F96E-D1F8-54ED-9611-4F621AD899B5\\",\\n  \\"CurrentCount\\": 10,\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '批量运行工作流',
      'description' => '- 该API适用于大批量执行工作流，如果执行频率不超过100次/秒，建议使用InvokeFlow触发工作流执行。
- 调用成功后，并不代表所有请求并发执行，逻辑编排会自动根据请求情况确定单次执行的开始执行时间。
- 该API每次调用认为是一次执行分组（Group），假设共需要执行工作流1000次，每100次为一个分组，那么就需要调用10次该API，同时每次调用均需要传递一个唯一的GroupKey作为该组标识。一个分组内包含多个执行数据（Data为JSON数组），每个执行数据对应一次执行（与调用一次InvokeFlow一致）。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'composer.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'composer.cn-shanghai.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'composer.ap-southeast-1.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'composer.us-east-1.aliyuncs.com',
    ),
  ),
);